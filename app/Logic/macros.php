<?php

    use App\Logic\api\TwitterAPIExchange;
    use App\Logic\api\CaptureTwitterFollowers;

    HTML::macro('image_link', function($url = '', $img='', $alt='', $link_name = '', $param = '', $active=true, $ssl=false)
    {
        $url    = $ssl==true ? URL::to_secure($url) : URL::to($url);
        $img    = HTML::image($img,$alt);
        $img    .= $link_name;
        $link   = $active==true ? HTML::link($url, '#', $param) : $img;
        $link   = str_replace('#',$img,$link);
        return $link;
    });

    HTML::macro('icon_link', function($url = '', $icon = '', $link_name = '', $param = '', $active=true, $ssl=false)
    {
        $url    = $ssl==true ? URL::to_secure($url) : URL::to($url);
        $icon   = '<i class="'.$icon.'" aria-hidden="true"></i>'.$link_name;
        $link   = $active==true ? HTML::link($url, '#', $param) : $icon;
        $link   = str_replace('#',$icon,$link);
        return $link;
    });

    HTML::macro('icon_btn', function($url = '', $icon = '', $link_name = '', $param = '', $active=true, $ssl=false)
    {
        $url    = $ssl==true ? URL::to_secure($url) : URL::to($url);
        $icon   = $link_name.' <i class="'.$icon.'" aria-hidden="true"></i>';
        $link   = $active==true ? HTML::link($url, '#', $param) : $icon;
        $link   = str_replace('#',$icon,$link);
        return $link;
    });

    HTML::macro('show_gravatar', function($image_url = '', $image_alt = '', $type = '') {

        $attributes = array(
            'image_type'    => $type,
            'image_alt'     => $image_alt,
            'image_url'     => $image_url,
            'user_gravatar' => Auth::user()->gravatar,
            'username'      => HTML::show_username()
        );
        $image_out          = $attributes['image_url'] != '' ? $attributes['image_url'] : $attributes['user_gravatar'];
        $image_alt_out      = $attributes['image_alt'] != '' ? $attributes['image_alt'] : $attributes['username'];
        $type_out           = $attributes['image_type'] != '' ? $attributes['image_type'] : 'img-circle';
        $image_link     = HTML::image($image_out, $image_alt_out, array('class' => $type_out, 'draggable' => 'false'));
        return $image_link;

    });

    HTML::macro('show_username', function() {
        $the_username = (Auth::user()->name === Auth::user()->email) ? ((is_null(Auth::user()->first_name)) ? (Auth::user()->name) : (Auth::user()->first_name)) : (((is_null(Auth::user()->name)) ? (Auth::user()->email) : (Auth::user()->name)));;
        return $the_username;
    });

    HTML::macro('twitter_followers', function($user, $linkEnabled = true, $withIcon = true, $withText = true, $withBg = true, $pullRight = true, $text = '', $bgClass = '', $itemCount = '') {

        $attributes = array(
            'link_enabled'          => $linkEnabled,
            'twitter_username'      => $user->profile->twitter_username,
            'twitter_followers'     => new CaptureTwitterFollowers,
            'with_icon'             => $withIcon,
            'with_text'             => $withText,
            'with_bg'               => $withBg,
            'pull_right'            => $pullRight,
            'text'                  => $text != '' ? $text : 'Twitter Followers',
            'bg_class'              => $bgClass != '' ? $bgClass : 'bg-twitter',
            'item_count'            => $itemCount != '' ? $itemCount : 'followers_count',
        );
        $totaltwitterFollowers  = $attributes['twitter_followers']->twitter_count($attributes['twitter_username'], $attributes['item_count']);

        $extraClasses           = '';
        $twitterFollowersLink   = '';

        if ($attributes['with_bg'] != false) {
            $extraClasses = ' badge ';
            $extraClasses .= $attributes['bg_class'];
        }
        if ($attributes['pull_right'] != false) {
            $extraClasses .= ' pull-right ';
        }
        if ($attributes['link_enabled'] != false) {
            $twitterFollowersLink   .= '<a href="https://twitter.com/'.$attributes['twitter_username'].'" target="_blank" title="Go to '.$attributes['twitter_username'].' twitter">';
        };

        if ($attributes['with_icon'] != false) {
            $twitterFollowersLink   .= '<i class="fa fa-twitter fa-fw twitter"></i> ';
        };

        if ($attributes['with_text'] != false) {
            $twitterFollowersLink   .= $attributes['text'];
        };

        $twitterFollowersLink   .= '<span class="'.$extraClasses.'">';
        $twitterFollowersLink   .= $totaltwitterFollowers;
        $twitterFollowersLink   .= '</span>';

        if ($attributes['link_enabled'] != false) {
            $twitterFollowersLink   .= '</a>';
        };

        return $twitterFollowersLink;

    });
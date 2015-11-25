<?php

	HTML::macro('image_link', function($url = '', $img='', $alt='', $link_name = '', $param = '', $active=true, $ssl=false)
	{
	    $url = $ssl==true ? URL::to_secure($url) : URL::to($url);
	    $img = HTML::image($img,$alt);
	    $img .= $link_name;
	    $link = $active==true ? HTML::link($url, '#', $param) : $img;
	    $link = str_replace('#',$img,$link);
	    return $link;
	});

	HTML::macro('icon_link', function($url = '', $icon = '', $link_name = '', $param = '', $active=true, $ssl=false)
	{
	    $url = $ssl==true ? URL::to_secure($url) : URL::to($url);
	    $icon = '<i class="'.$icon.'"></i>';
	    $icon .= $link_name;
	    $link = $active==true ? HTML::link($url, '#', $param) : $icon;
	    $link = str_replace('#',$icon,$link);
	    return $link;
	});

?>
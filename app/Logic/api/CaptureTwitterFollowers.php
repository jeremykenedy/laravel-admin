<?php namespace App\Logic\api;

class CaptureTwitterFollowers {

    public function twitter_count($user, $countItem = '') {

        /** Set access tokens here - see: https://dev.twitter.com/apps/ **/
        $settings = array(
            'oauth_access_token'        => env('TWITTER_ACCESS_TOKEN'),
            'oauth_access_token_secret' => env('TWITTER_ACCESS_TOKEN_SECRET'),
            'consumer_key'              => env('TWITTER_CONSUMER_KEY'),
            'consumer_secret'           => env('TWITTER_CONSUMER_SECRET')

        );

        $url = 'https://api.twitter.com/1.1/users/show.json';
        $getfield = '?screen_name=' . $user;
        $requestMethod = 'GET';
        $twitter = new TwitterAPIExchange( $settings );
        $follow_count = $twitter->setGetfield( $getfield )->buildOauth( $url, $requestMethod )->performRequest();
        $get_count = json_decode( $follow_count, true );
        $countItem = $countItem != '' ? $countItem : 'followers_count';

        return $get_count[$countItem];

    }

}
<?php

return array(
    /*
      |--------------------------------------------------------------------------
      | oAuth Config
      |--------------------------------------------------------------------------
     */

    /**
     * Storage
     */
    'storage' => 'Session',
    /**
     * Consumers
     */
    'consumers' => array(
        /**
         * Facebook
         */
        'Facebook' => array(
            'client_id' => '435825746596526',
            'client_secret' => 'fa24b1ad149d0a6c0f5d950b96e94655',
            'scope' => array('email'),
        ),
        'Google' => array(
            'client_id' => '561482151517-5bgcfcnnfan3o3gntk8ckcfi0ccoo7s7.apps.googleusercontent.com',
            'client_secret' => 'hrz0w1DGTrKBsiXyTXa0-xP4',
            'scope' => array('userinfo_email', 'userinfo_profile'),
        ), 'Twitter' => array(
            'client_id' => 'Your Twitter client ID',
            'client_secret' => 'Your Twitter Client Secret',
        // No scope - oauth1 doesn't need scope
        ),
        'Twitter' => array(
            'client_id' => 'Your Twitter client ID',
            'client_secret' => 'Your Twitter Client Secret',
        // No scope - oauth1 doesn't need scope
        ),
        'Instagram' => array(
            'client_id' => '393f28759d47477b8f83a80a435711db',
            'client_secret' => 'b8e17b00d2fd48708951c43d985dd2d3',
            'scope' => array('basic', 'relationships'),
        ),
    )
);

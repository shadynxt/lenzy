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
            'client_id'     => '736842356384287',
            'client_secret' => 'e8ba068db56e98ba5945a268f3ee1915',
            'scope'         => array('email','read_friendlists','user_online_presence'),
        ),      

    )

);
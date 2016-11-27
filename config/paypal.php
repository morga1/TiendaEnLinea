<?php
return array(
    // set your paypal credential
    'client_id' => 'AfeBWXITt4gKYtT10XJZ4Rjq-ycSIodEAjmEYJjhpojpXvpC402cEzCEx4dDRZvfhhmtR3jG_z057Qmb',
    'secret' => 'EP4vuT6E4SWfWzNPOtnTGZGhDOWkKYtiqPYGq6rF6Jo5bXVsyC6QpDSJUFMFo3fF8Yf2VljbKGgzD1Ey',

    /**
     * SDK configuration 
     */
    'settings' => array(
        /**
         * Available option 'sandbox' or 'live'
         */
        'mode' => 'sandbox',

        /**
         * Specify the max request time in seconds
         */
        'http.ConnectionTimeOut' => 30,

        /**
         * Whether want to log to a file
         */
        'log.LogEnabled' => true,

        /**
         * Specify the file that want to write on
         */
        'log.FileName' => storage_path() . '/logs/paypal.log',

        /**
         * Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
         *
         * Logging is most verbose in the 'FINE' level and decreases as you
         * proceed towards ERROR
         */
        'log.LogLevel' => 'FINE'
    ),
);
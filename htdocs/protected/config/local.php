<?php

return array(
    'params'=>array(
        'home_url' => 'http://gigadb.cogini.com', // Where top level link goes to

        'timezone'=>"Asia/Taipei",

        // Used in the contact page
        'adminEmail'=>'database@gigasciencejournal.com',

        // This is used as the sender of emails
        'app_email_name' => 'GigaDB',
        'app_email' => 'database@gigasciencejournal.com',
        'email_prefix' => '""',

        'support_email' => 'database@gigasciencejournal.com',
        'email_prefix' => '""', // put at the begining of the subject line

        // Notified when a new user signs up
        'notify_email' => 'database@gigasciencejournal.com',

        // Cogini
        'recaptcha_publickey' => '6LdkzgsAAAAAAGFJ5GdJyXf4JvFqKJe5N0-F3IRt',
        'recaptcha_privatekey' => '6LdkzgsAAAAAAD6w-JyWXLfN1260aeRNl33I-JH9',
        "google_analytics_profile" => "UA-7881029-2",

        // Sphinx params
        'sphinx_servername' => 'localhost',
        'sphinx_port' => 9312,
        // MC api
        'mc_apikey' => 'a6f0c4189a9407a2758ad9f53f22dc67-us5',
        'mc_listID' => '4be098275c',

        'less_dev_mode' => false,

        // Google Analytics profile
        'google_analytics_profile' => 'UA-34394032-1',
    ),
);

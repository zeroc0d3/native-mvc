<?php

$set_language = ([
    'default'            => getenv('APP_LANGUAGE')
]);

$properties = ([
    'app_name'           => getenv('APP_NAME'),
    'app_nick'           => getenv('APP_NICK'),
    'app_version'        => getenv('APP_VERSION'),
    'app_url_name'       => getenv('APP_URL_NAME'),
    'app_url_path'       => getenv('APP_URL_PATH'),
    'app_author'         => getenv('APP_AUTHOR'),
    'app_license'        => getenv('APP_LICENSE'),
    'app_year'           => Date('Y'),
    'app_path_icons'     => getenv('APP_PATH_ICON'),
                            //resources/icons/
    'app_path_images'    => getenv('APP_PATH_IMAGES'),
                            //'resources/images/',
    'app_path_avatar'    => getenv('APP_PATH_AVATAR'),
                            //'resources/images/avatar/',
    'app_lang_path'      => 'app/config/language/' . $set_language['default'] . '/string.php',
    'app_timezone'       => getenv('APP_TIMEZONE'),
                            //'Asia/Jakarta',
    'app_socialmedia'    => getenv('APP_SOCIALMEDIA')
                            //'1',
]);

$social_facebook = ([
    'facebook_id'        => getenv('APP_FACEBOOK_ID'),
    'facebook_key'       => getenv('APP_FACEBOOK_KEY')
]);

$social_google = ([
    'google_id'          => getenv('APP_GOOGLE_ID'),
    'google_key'         => getenv('APP_GOOGLE_KEY')
]);

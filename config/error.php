<?php

@ob_start();
if (getenv('APP_ERROR_LOG') == "1") {
    error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
    @ini_set('html_errors', '0');
    @ini_set('display_errors', '1');
    @ini_set('display_startup_errors', '1');
    @ini_set('log_errors', '0');
} else {
    @ini_set('html_errors', '0');
    @ini_set('display_errors', '0');
    @ini_set('display_startup_errors', '0');
    @ini_set('log_errors', '0');
}
@set_time_limit(0);
@clearstatcache();

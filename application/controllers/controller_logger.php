<?php
include '/core/Logger.php';
$log = new Logger("log");
$log->get_draftcommands();
?>

<!--#AddType application/x-httpd-php .html .htm-->
<!--#RewriteEngine On-->
<!--#RewriteCond %{REQUEST_FILENAME} !-f-->
<!--#RewriteCond %{REQUEST_FILENAME} !-d-->
<!--#RewriteRule .* index.php [L]-->
<!--Displaying php errors-->
<!--php_flag display_errors on-->
<!--php_value error_reporting 6143-->

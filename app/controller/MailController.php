<?php

class MailController
{
    /* SHOW DATA */
    public static function saveMessage($headers, $to, $subject, $message)
    {
        $result = MainModel::saveMessage($headers, $to, $subject, $message);
        return $result;
    }

    public static function sendEmail()
    {
        $result    = null;
        $to        = MailController::getEmailNotif();
        $subject   = "Notifikasi " . $properties['app_name'];

        // Always set content-type when sending HTML email
        $headers   = "MIME-Version: 1.0" . "\r\n";
        $headers  .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        // More headers
        $headers  .= "From: native-mvc@github.com" . "\r\n" .
        "Bcc: zeroc0d3.team@gmail.com";

        @ob_start();
        /*** ATTACHMENT FILE ***/
        /*
        $path      = "resources/views/main/email.php.html";
        $mfile     = fopen($path, "r") or die("Unable to open file!");
        $message   = ob_get_clean();
        $message  .= fread($mfile,filesize($path));
        fclose($mfile);
        */

        $message   = ob_get_clean();
        $message  .= MailController::msgEmail();

        // Send Email
        $send      = @mail($to, $subject, $message, $headers);
        if ($send) {
            echo "Email send...";
            $result = MailController::saveMessage($headers, $to, $subject, $message);
        } else {
            echo "Failed to send email!";
        }
        return;
    }

    public static function msgEmail()
    {
        //
    }
}

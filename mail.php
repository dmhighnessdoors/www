<?php

require_once "Mail.php";

$from = '<dm.highnessdoors@gmail.com>';
$to = '<dm.highnessdoors@gmail.com>';

$body = '';
// Loop over each item in the form.
foreach($_POST as $name => $value) {
    $body = $body.'<br>'.$name.' : '.$value;
}
$subject = 'Contact us form';

$headers = array(
    'From' => $from,
    'To' => $to,
    'Subject' => $subject,
    'Content-type' => 'text/html;charset=UTF-8',
    'MIME-Version' => '1.0'
);



$smtp = Mail::factory('smtp', array(
        'host' => 'ssl://smtp.gmail.com',
        'port' => '465',
        'auth' => true,
        'username' => 'dm.highnessdoors@gmail.com',
        'password' => 'Baaby1234$'
    ));

$mail = $smtp->send($to, $headers, $body);

if (PEAR::isError($mail)) {
    echo('<p>' . $mail->getMessage() . '</p>');
} else {
    echo('<p>Message successfully sent!. You will be redirecting in 3 seconds</p>');

    ?>
    <script>
        setTimeout(function() {
            document.location.href="/";
        }, 3000);
    </script>

    <?php
}

?>
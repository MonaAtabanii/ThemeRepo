<?php

$to = 'monaatabani@gmail.com';

$from = 'noreply@nony4coding.com';

$replyTo= 'mona@example.com';

$subject = 'Test Email';

$message = 'Test Message ';

$today = date('F j, Y, g:i:a');

$message .= $today;

$headers =  'From: '. $from . PHP_EOL .

            'Reply-To: ' . $replyTo . PHP_EOL .

            'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
echo 'Email sent? ' . $today;

?>
<?php

$to = 'monaatabani@gmail.com';

$from = 'noreply@nony4coding.com';

$subject = 'Test Email';

$message = 'Test Message ';

$today = date('F j, Y, g:i:a');

$message .= $today;

mail($to, $subject, $message);

echo 'Email sent? ' . $today;


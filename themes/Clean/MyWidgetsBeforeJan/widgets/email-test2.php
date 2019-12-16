<?php

$to = 'monaatabani@gmail.com';

$from = 'noreply@nony4coding.com';

if(isset($_POST["FirstName"])){//if data show it
    
  /*
    //echo $_POST["FirstName"];
    echo '<pre>';
    var_dump($_POST);
    echo '</pre>';
  */
    
    $replyTo= $_POST["Email"];

    $subject = 'ITC240 Contact Page ';

    $message = $_POST["Comments"];

    $today = date('F j, Y, g:i:s a');

    $message .= $today;

    $headers =  'From: '. $from . PHP_EOL .

            'Reply-To: ' . $replyTo . PHP_EOL .

            'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);
    echo 'Email sent? ' . $today;

}else{//no data, show form
  echo '
  <form action="" method="post">
    <p><label for="FirstName">First Name:</label><br />
        <input autofocus="autofocus" type="text" name="FirstName" id="FirstName" required="required" placeholder="Enter First Name" title="First Name is required" />
    </p>
    <p><label for="LastName">Last Name:</label><br />
        <input type="text" name="LastName" id="LastName" required="required" placeholder="Enter Last Name" title="Last Name is required" />
    </p>
    <p><label for="Email">Email:</label><br />
        <input type="email" name="Email" id="Email" required="required" placeholder="Enter Email" title="Email is required" />
    </p>
        <p><label for="Comments">Comments:</label><br />
        <textarea name="Comments" id="Comments" placeholder="Your comments are important to us"></textarea>
    </p>
    <p><input type="submit" /></p>
  </form>
  ';
 
}


?>
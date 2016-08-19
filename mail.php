<?php
$to = $_POST['to'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$headers = 'From: ' . $_POST['from'] . "\r\n" .
    'Reply-To: ' . $_POST['reply'] . "\r\n" .
    'X-Mailer: PHP/' . phpversion() . "\r\n" .
    'Content-Type: text/html; charset=ISO-8859-1';

mail($to, $subject, $message, $headers);
?>

<html>
<body>
<h1>Message sent!</h1><br />
Information:<br />
To: <?php echo $to ?><br />
From: <?php echo $_POST['from'] ?><br />
Reply to: <?php echo $_POST['reply'] ?><br />
Subject: <?php echo $subject ?><br />
Content: <br />
<?php echo $message ?><br />
<i><a href=sendmail.html>To send a new message, click here</a></i>
</body>
</html>

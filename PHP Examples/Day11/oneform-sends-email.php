<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>All in one form and script</title>
</head>

<body>
<?php
if(isset($_POST['submit'])) {

//declare variables
$name = $_POST['name'];
$email = $_POST['email'];
$comments = $_POST['comments'];

echo "We have received the following information and will get back to you shortly:<br>\n";
echo "Name: $name<br>\n";
echo "Email: $email<br>\n";
echo "Comments: $comments<br>\n";

// send an email to the admin
$to = "sait_php@mailinator.com";
$subject = "Email from web site";
$body = "Name: $name\nEmail: $email\nComments: $comments\n";
mail($to,$subject,$body);

// send an email to the user
$body = "Thanks for emailing me, i'll get back to you as soon as i can.";
mail($email,$subject,$body);

} else {
?>

<h2>One page form and script</h2>
<form method="post" action="01oneform-sends-email.php">
<input type="text" name="name">Name:<br>
<input type="text" name="email">Email:<br>
<textarea name="comments" rows="4" cols="25"></textarea>Comments:<br>
<br>
<input type="submit" value="submit" name="submit">
</form>

<?php } ?>

</body>
</html>

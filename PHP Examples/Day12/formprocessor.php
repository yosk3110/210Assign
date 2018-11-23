<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Untitled Document</title>
</head>

<body>
<?php
// assign the local variables from the post array
$first_name = $_REQUEST['first_name'];
$last_name = $_REQUEST['last_name'];
$email = $_REQUEST['email'];
$comments = $_REQUEST['comments'];
$job = $_REQUEST['job'];
$purpose = $_REQUEST['hidden1'];


// process the data entered into the previous form
print "<h2>$purpose</h2>";
print "<h2>Thank you $first_name $last_name, we received the following information</h2>";
print "First Name: $first_name<br>";
print "Last Name: $last_name<br>";
print "Email Address: $email<br>";
print "Comments: $comments<br>";
print "The job you are applying for is $job";
?>
<br>
Your id is <?php print($_GET['id']); ?>
</body>
</html>

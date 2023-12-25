<!DOCTYPE html>
<html>
<head>
    <title>Contact Form</title>
</head>
<body>

<form action="submit.php" method="post">
    <label for="fullname">Full Name:</label><br>
    <input type="text" id="fullname" name="fullname"><br>
    <label for="email">Email Address:</label><br>
    <input type="text" id="email" name="email"><br>
    <label for="subject">Subject:</label><br>
    <input type="text" id="subject" name="subject"><br>
    <label for="message">Message:</label><br>
    <textarea id="message" name="message" rows="4" cols="50"></textarea><br>
    <input type="submit" value="Submit">
</form>

</body>
</html>
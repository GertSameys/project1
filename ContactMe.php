<?php
$sent = false;

if(isset($_POST['email']) && $_POST['email'] != ''
    && isset($_POST['name']) && $_POST['name'] != ''
    && isset($_POST['subject']) && $_POST['subject'] != ''
    && isset($_POST['message']) && $_POST['message'] != ''){

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$to = "gert@sameys-portfolio.be";
// $to = "r0944536@student-thomasmore.be";

$body = "";

$body .= "From: ".$name. "\r\n";
$body .= "Email: ".$email. "\r\n";
$body .= "Message: ".$message. "\r\n";

mail($to, $subject, $body);
$sent = true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Gert Sameys">
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <title>Document</title>
</head>
<body id="body5">
  <div class="dropdown">
    <button class="dropbtn">menu</button>
    <div class="dropdown-content">
      <a href="index.html">Home</a>
      <a href="Curriculum.html">Curriculum</a>
      <a href="Ervaringen.html">Ervaringen</a>
      <a href="Hobbys.html">Hobbys</a>
      <a href="Contact.html">Contact</a>
    </div>
  </div>
<?php
if($sent):
?>
<h3>Bedankt voor je mail, je hoort binnenkort van me.</h3>
<?php
else:
?>
  <div class="containerform">
    <form action="ContactMe.php" method="POST" class="form">
        <div class="form-group">
            <label for="name" class="form-label">Jou naam</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Jou naam" tabindex="1" required>
        </div>
        <div class="form-group">
            <label for="email" class="form-label">Jou email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Jou email" tabindex="2" required>
        </div>
        <div class="form-group">
            <label for="subject" class="form-label">Onderwerp</label>
            <input type="text" class="form-control" id="subject" name="subject" placeholder="onderwerp" tabindex="3" required>
        </div>
        <div class="form-group">
            <label for="message" class="form-label">Jou bericht</label>
            <textarea class="form-control" rows="5" cols="50" id="message" name="message" placeholder="jou bericht..." tabindex="4"></textarea>
        </div>
        <div>
            <button name="submit-button" type="submit" class="btn">Verstuur mail!</button>
        </div>
    </form>
</div>

<?php
endif;
?>
</body>
</html>
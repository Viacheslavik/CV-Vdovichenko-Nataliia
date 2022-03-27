<meta http-equiv='refresh' content='3; url=https://bloggood.ru'>
<meta charset="UTF-8" />
<?php
if (isset($_POST['name'])) {$name = $_POST['name']; if ($name == '') {unset($name);}}
if (isset($_POST['email'])) {$email = $_POST['email']; if ($email == '') {unset($email);}}
if (isset($_POST['sub'])) {$sub = $_POST['sub']; if ($sub == '') {unset($sub);}}
if (isset($_POST['body'])) {$body = $_POST['body']; if ($body == '') {unset($body);}}

if (isset($name) && isset($email) && isset($sub) && isset($body)){

$address = "vdovichenko.natalia@gmail.com";
$mes = "Name: $name \nE-mail: $email \nTopic: $sub \nText: $body";
$send = mail ($address,$sub,$mes,"Content-type:text/plain; charset = UTF-8\r\nFrom:$email");
if ($send == 'true')
{echo "Message sent successfully!";}
else {echo "Error message not sent!";}

}
else
{
echo "You did not fill in all the fields, go back and fill in the required fields!";
}
?>
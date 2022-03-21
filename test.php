<?php
$username = 'test@test.com';
$password = 'test';

$sha = sha1(strtoupper($username).':'.strtoupper($password));

echo $sha;
?>
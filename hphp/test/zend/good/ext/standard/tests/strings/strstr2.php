<?php
<<__EntryPoint>> function main() {
$email  = 'aexample.com';
var_dump(strstr($email, '@'));
var_dump(strstr($email, '@', true));
$email  = 'a@example.com';
var_dump(strstr($email, '@'));
var_dump(strstr($email, '@', true));
$email  = 'asdfasdfas@e';
var_dump(strstr($email, '@'));
var_dump(strstr($email, '@', true));
$email  = '@';
var_dump(strstr($email, '@'));
var_dump(strstr($email, '@', true));
$email  = 'eE@fF';
var_dump(strstr($email, 'e'));
var_dump(strstr($email, 'e', true));
var_dump(strstr($email, 'E'));
var_dump(strstr($email, 'E', true));

var_dump(strstr('', ' ', false));
}

<?php

class test {
    function __call($name, &$args) { }
}
<<__EntryPoint>> function main() {
$t = new test;
$func = "foo";
$arg = 1;

$t->$func($arg);

echo "Done\n";
}

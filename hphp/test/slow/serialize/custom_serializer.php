<?php

class A {}
<<__EntryPoint>> function main() {
$ao = new ArrayObject();
$ao->props = new A();

var_dump(unserialize(serialize($ao)));
var_dump(unserialize(serialize($ao), array('allowed_classes' => false)));
}

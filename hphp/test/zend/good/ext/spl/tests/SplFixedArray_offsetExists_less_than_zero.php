<?php <<__EntryPoint>> function main() {
$array = new SplFixedArray(5);
if($array->offsetExists(-10) === false) {
    echo 'PASS';
}
}

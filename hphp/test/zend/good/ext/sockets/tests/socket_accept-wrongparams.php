<?php <<__EntryPoint>> function main() {
try { var_dump(socket_accept(null)); } catch (Exception $e) { echo "\n".'Warning: '.$e->getMessage().' in '.__FILE__.' on line '.__LINE__."\n"; }
}

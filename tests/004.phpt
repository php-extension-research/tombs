--TEST--
Check if tomb is detected >1 (method)
--CAPTURE_STDIO--
STDOUT
--INI--
tombs.socket=0
tombs.dump=1
--FILE--
<?php
class Foo {
    public function bar() {}
    public function qux() {}
}

$foo = new foo();
$foo->qux();
?>
--EXPECTF--
{"location": {"file": "%s004.php", "start": 3, "end": 3}, "scope": "Foo", "function": "bar"}



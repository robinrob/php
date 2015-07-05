<?php
//Demonstrating how a static variable can be used as a function call counter.

function test()
{
    static $cnt = 0;
    ++$cnt;
    return $cnt;
}

for ($i = 0; $i < 10; ++$i) {
    echo "function calls: " . test() . "\n";
}
?>

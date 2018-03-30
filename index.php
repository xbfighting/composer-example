<?php 
require __DIR__ . '/bootstrap.php';

function exception_test(){
    throw new Exception("why exfresh?");
}

exception_test();
echo "HHHHH";

?>
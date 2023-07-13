<?php

$python = shell_exec("python3 python/OMRFinal.py -i python/Resources/10_test.jpg -e 10 -a 'A,A,A,A,A,A,A,A,A,A'");
echo $python;

?>

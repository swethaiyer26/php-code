<html>
<body>
<?php
$c=30;
$d=60;

function myfunction4()
{
    $GLOBALS['d'] = $GLOBALS['c'] + $GLOBALS['d'];
}

myfunction4();
echo $d;
echo "<br>"
?>
</body>
</html>


<html>
<body>
<?php

function myfunction5()
{
    static $e = 0;
     echo $e;
     $e++;

}

myfunction5();
echo "<br>";
myfunction5();
echo "<br>";
myfunction5();
echo "<br>";
?>
</body>
</html>
WW
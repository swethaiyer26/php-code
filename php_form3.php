<html>
<body>

<?php
$x = 17;

function myfunction()
{
    echo "<p>variable x declared inside the function: $x</p>";
}

myfunction();


    echo "<p>variable x declared outside the function is: $x</p>";
    ?>
    </body>
    </html>

<html>
<body>
<?php

function myfunction1(){

    $y = 56;
    echo "<p>variable y declared inside the function: $y</p>";
}

myfunction1();

    echo "<p>variable y declared outside the function is: $y</p>";
    ?>
    </body>
    </html>

    <html>
    <body>
    <?php
  $a= 35;
    $b =45;

    function myfunction2()
    {
        global $a,$b;
        $a = $a + $b;
    }

    myfunction2();
    echo $a ;
    echo "<br>";
    echo $b ;
    ?>
    </body>
    </html>
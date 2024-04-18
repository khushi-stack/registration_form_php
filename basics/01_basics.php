<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <div class = "container">
        This is my first php website
        <?php
        define ("Pi" , 3.14);
          echo "Hello world";

          $variable = 34;
          $variable2 = 90;

          echo $variable;
          echo $variable2;

          echo $variable + $variable2;
          echo "<br>";
          echo "The variable + variable2 is ";
          echo "<br>";
          echo $variable + $variable2; echo "<br>";


         echo  $variable++;
         echo "<br>";
         echo  $variable2--;
         echo "<br>";
         echo  --$variable;
         echo "<br>";
          echo ++$variable2;

        $myvar = (true) and (true);
        echo "<br>";
        echo var_dump($myvar); echo "<br>";
       

        $mm1 = 34;
        $mm2 = 45;

        echo "The value of mm1 is :" ; echo $mm1 ; echo " and mm2 is : "; echo $mm2;
        echo "<br>" ;
        
        $v1 = "This is my string";
        echo var_dump($v1); echo "<br>";
        $v2 = 64;
        echo var_dump($v2); echo "<br>";
        $v3 = 64.8;
        echo var_dump($v3); echo "<br>";
        $v4 =  true;
        echo var_dump($v4); echo "<br>";

        echo Pi;

        ?>
    </div>
    
</body>
</html>
<!DOCTYPE html>

<html>
    <head>
        <title>myPHP</title>
    </head>
    <body>

    <form method="GET" action="<?php echo $_SERVER['PHP_SELF'];?>">

        name: <input type="text" name="Xname">
        <input type="submit">
    </form>
    <hr>

    <?php 
    
    /* if($_SERVER['REQUEST_METHOD'] == "GET") {
        $name = $_REQUEST['Xname'];
        if (empty($name)) {
            echo "Nome não encontrado";
        } else {
            echo $name;
        }
    }  */

    echo $_GET['Xname'];



    ?>

    

        <?php

        /* $txt = "PHP";
        echo "my " . $txt; 
     
        $color = "Red";
        $x = 4;
        $y = 11.6;
        $z = null;
        echo "My car is " .$color ."<hr>";
        echo $x + $y;

        function myFunc () {
            $x = 45;
            global $x;
            echo $x;
        }
        */

       /*  echo strlen("Hello World"); //número de caracteres
        echo "<br>";
        echo str_word_count("Hello World"); //número de palavras
        echo "<br>";
        echo strrev("Hello World"); //reverse
        echo "<br>";
        echo strpos("Hello World", "W"); //procurar numa string
        echo "<br>";
        echo str_replace("World","Mundo", "Hello World"); //trocar numa string
        echo "<br>";
 */
       /*  echo(max());
        echo(min());
        echo(abs()); */
        //echo(rand(10,100));

        /* define("myConst", "Hello World");
        echo myConst;
        echo "<br>";
        define("myCar", ["Audi", "BMW", "Mercedes"]);
        echo myCar[0];
        echo "<br>";
        function myFunc() {
            echo myCar[0];
        }

        myFunc();

        echo "<br>"; */

         /* $x = 10;

       switch($x) {
            case 20:
                echo "menor que 20";
                break;
            case 30:
                echo "menor que 30";
                break;
            default:
                echo "else";
        }

        echo "<br>";
        

        if ($x < 20) {
            echo "menor que 20";
        } elseif ($x < 30) {
            echo "menor que 30";
        } else {
            echo "else";
        } */

       /*  $x = 1;
        echo "<br>"; */

        /* while ($x <5) {
            echo "Number $x <br>";
            $x++;
        } */

        /* do {
            echo "Number $x <br>";
            $x++;
        } while ($x <5);

        echo "<hr>";

        for ($i=0; $i < 5 ; $i++) { 
            echo "Number $x <br>";
        }

        echo "<hr>";

        $myCar = array("Audi","BMW", "Mercedes");

        foreach ($myCar as $value) {
            echo "my Car is $value <br>";
        } */



        /* function myFunc(int $a, int $b) {
            return $a + $b;
        }

        echo myFunc(10,15); */

        /* echo $_SERVER['SERVER_NAME'];
        echo "<br>";
        echo $_SERVER['HTTP_USER_AGENT'];
        echo "<br>";
        echo $_SERVER['REQUEST_TIME'];
        echo "<br>";
        echo $_SERVER['REQUEST_METHOD'] == 'POST';
        echo "<br>"; */

        

        ?>                  




        
    </body>
</html>

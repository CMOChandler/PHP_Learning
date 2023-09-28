<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo</title>
</head>
<body>
     
        <?php 

        //Defining the varible
            $nameofbook = "Dark Matter";

        //Using a boolean in a variable
            $read = false;     
            
        //Using a if tag to determine what to say if the user has or has not read the book.
            if ($read){
                $message = "You have read $nameofbook";
            } else {
                $message = "You have not read $nameofbook";  
            }

        ?>

    <h1>
        <?php  

        //Declaring a Variable.
            $greeting = "Hello";

        //Using Concatenation with Variables.
            echo $greeting . " " . "Everybody!";

        //Refactoring and Double Quotes Needed otherwise name of Variable shows.
            echo "$greeting Everybody!"; 

        ?>

        <!--Refactoring and Double Quotes Needed otherwise name of Variable shows. Commented out of code for visual purpose.
            echo "$greeting Everybody!"; -->

    </h1>

    <h1>

        <!--Returning varible from previously used if tag-->
            <?php echo $message; ?>

        <!--Similar to opening an echo tag in php
            <?= $message ?> -->

    </h1>


</body>
</html>
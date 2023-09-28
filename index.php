<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo</title>
</head>
<body>
     
    <h1>
        <?php  

        #Declaring a Variable.
            $greeting = "Hello";

        #Using Concatenation with Variables.
            echo $greeting . " " . "Everybody!";
        #Refactoring and Double Quotes Needed otherwise name of Variable shows.
            echo "$greeting Everybody!"; 

        ?>
    </h1>

</body>
</html>
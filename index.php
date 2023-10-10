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

        //Defining a new variable using arrays.
            $books = [
                "Do Androids Dream of Electric Sheep",
                "The Langoliers",
                "Hail Mary"
            ];
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

    <h1>
            Recommended Books
    </h1>

    <ul>
        
        <!--For Each of the books listed in previous array will show in the unordered list tag -->
            <?php foreach ($books as $book){
                echo "<li> $book </li>";
            }      
        
            ?>

        <!--Another way of rewriting the echo tag above would be...
        <li> <?= $book ?> </li> -->

    </ul>

    <p>
        <!-- Arrays start from 0 -->    
        <?= $books[2] ?>
    </p>
        <!-- Arrays like the one below can have arrays inside of them giving them more information about a particular value
    <?php
        $books2 = [
            [
                "name" => "Do Androids Dream of Electric Sheep",
                "Author" => "Philip K. Dick",
            ]
        ]

    ?>  -->

</body>
</html>
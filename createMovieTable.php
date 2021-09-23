<!DOCTYPE html>
<!--Student: Zhijun Zhou
 Student#:0728193
-->
<html>
    <head>
        <title>Create movies table</title>
    </head>
    <body>
        <?php
          require_once('includes/bootstrap.php'); // includes the bootstrap.php file
          $dbc = new PDO("mysql:host=". DB_HOST .";dbname=". DB_NAME, DB_USER, DB_PASSWORD); // connect to database
            // Create SQL query with markers
            $query= "CREATE TABLE `movies`(
                `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
                `title` TEXT NOT NULL,
                `production_company` TEXT NOT NULL,
                `year_released` CHAR(4) NOT NULL,
                `director` TEXT)"; 
            $result = $dbc->query($query);
            if($result){
                echo "The query is successfully executed!";
            }
            else{
                echo "The query could not be executed!".$dbc->errorInfo()[2];
            }
        ?>
    </body>
</html>
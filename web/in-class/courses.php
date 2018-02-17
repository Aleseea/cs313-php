<?php
require("dbConnect.php");

$db = get_db();

$query = "SELECT id, number, name FROM course";
//Bind any parameters
$stmt = $db->prepare($query);
//Run the query at the database
$stmt->execute();
//Get all the results back
$courses = $stmt->fetchAll(PDO::FETCH_ASSOC);


?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Courses</title>
    </head>
    <body>
        <h2>Courses</h2>
        
        <ul>
            <?php
            foreach ($courses as $course){
                $id = $course['id'];
                $number = $course['number'];
                $name = $course['name'];
                
                echo "<li><a href='notes.php?course_id=$id'>$number - $name<a></li>\n";
            }
            ?>
        
        </ul>
    
    </body>

</html>
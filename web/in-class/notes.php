<?php
require("dbConnect.php");

$db = get_db();

$course_id = htmlspecialchars($_GET['course_id']);



$query = "SELECT id, number, name FROM course WHERE id=:course_id";
//Bind any parameters
$stmt = $db->prepare($query);

//last part lets it only accept an int
$stmt->bindValue(":course_id", $course_id, PDO::PARAM_INT);

//Run the query at the database
$stmt->execute();
//Get all the results back
$course = $stmt->fetch(PDO::FETCH_ASSOC);



?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Courses</title>
    </head>
    <body>
        <?php
            $number = $course['number'];
            $name = $course['name'];
            echo "<h1> Notes for $number - $name </h1>";
        ?>
        <ul>
        
        
        </ul>
        
        <h2>Enter a new note for this course</h2>
        <form method="post" action="insert-note.php">
            <input type="hidden" name="course_id" value="<?php echo $course_id; ?>">
            Date: <input type="date" name="date"/><br>
            Content<br>
            <textarea name="content"></textarea><br>
            <input type="submit" value="Create Note"/>
        </form>
        
    
    </body>

</html>
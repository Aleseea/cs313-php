<?php
require "dbConnect.php";
$db = get_db();

if(isset($_POST['book']) && isset($_POST['chapter']) && isset($_POST['verse']) && isset($_POST['content'])) {
    $query = "INSERT INTO scripture (book, chapter, verse, content)
        VALUES (('".$_POST["book"]."','".$_POST["chapter"]."','".$_POST["verse"]."','".$_POST["content"]."')";
    $statement = $db->prepare($query);
    $statement->execute();
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>Add Scripture</title>
</head>
<body>
    <h1>Add a Scripture</h1>
    <form method="post" action="scripture.php">
        <span>Book: </span><input type="text" name="book"><br />
        <span>Chapter: </span><input type="text" name="chapter"><br />
        <span>Verse: </span><input type="text" name="verse"><br />
        <span>Content: </span><textarea name="content"></textarea><br />
        <?php
            $statement = $db->prepare("SELECT * FROM topic");
            $statement->execute();
            // Go through each result
            while ($row = $statement->fetch(PDO::FETCH_ASSOC))
            {
                echo '<input type="checkbox" name="topic[]" value="' . $row['id']. '">' . $row['name'] . '</input>';
            }
        ?>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
<!--TABLES


CREATE TABLE SCRIPTURES(
id SERIAL PRIMARY KEY NOT NULL,
book VARCHAR(30) NOT NULL,
chapter INT NOT NULL,
verse INT NOT NULL,
content TEXT NOT NULL
);

CREATE TABLE topic (
topic_id SERIAL NOT NULL PRIMARY KEY,
name VARCHAR(30) NOT NULL
);

CREATE TABLE scripture_topic (
id SERIAL NOT NULL PRIMARY KEY,
scripture INT NOT NULL REFERENCES scripture(id),
topic INT NOT NULL REFERENCES topic(topic_id)
);

INSERT INTO topic (name) VALUES 
('Faith'),
('Sacrifice'),
('Charity');

INSERT INTO SCRIPTURES(
book,
chapter,
verse,
content
) VALUES(
'John',
1,
5,
'And the light shineth in darkness; and the darkness comprehended it not.'
);

INSERT INTO SCRIPTURES(
book,
chapter,
verse,
content
) VALUES(
'Doctrine and Covenants',
88,
49,
'The light shineth in darkness, and the darkness comprehendeth it not; nevertheless, the day shall come when you shall comprehend even God, being quickened in him and by him.'
);

INSERT INTO SCRIPTURES(
book,
chapter,
verse,
content
) VALUES(
'Doctrine and Covenants',
93,
28,
'He that keepeth his commandments receiveth truth and light, until he is glorified in truth and knoweth all things.'
);

INSERT INTO SCRIPTURES(
book,
chapter,
verse,
content
) VALUES(
'Mosiah',
16,
9,
'He is the light and the life of the world; yea, a light that is endless, that can never be darkened; yea, and also a life which is endless, that there can be no more death.'
);-->





<?php
/**********************************************************
* File: viewScriptures.php
* Author: Br. Burton
* 
* Description: This file shows an example of how to query a
*   PostgreSQL database from PHP.
***********************************************************/
require "dbConnect.php";
$db = get_db();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Scripture List</title>
</head>

<body>
<div>

<h1>Scripture Resources</h1>

<?php
// In this example, for simplicity, the query is executed
// right here and the data echoed out as we iterate the query.
// You could imagine that in a more involved application, we
// would likely query the database in a completely separate file / function
// and build a list of objects that held the components of each
// scripture. Then, here on the page, we could simply call that 
// function, and iterate through the list that was returned and
// print each component.
// First, prepare the statement
// Notice that we avoid using "SELECT *" here. This is considered
// good practice so we don't inadvertently bring back data we don't
// want, especially if the database changes later.
$statement = $db->prepare("SELECT book, chapter, verse, content FROM scripture");
$statement->execute();
// Go through each result
while ($row = $statement->fetch(PDO::FETCH_ASSOC))
{
	// The variable "row" now holds the complete record for that
	// row, and we can access the different values based on their
	// name
	echo '<p>';
	echo '<strong>' . $row['book'] . ' ' . $row['chapter'] . ':';
	echo $row['verse'] . '</strong>' . ' - ' . $row['content'];
	echo '</p>';
}
?>


</div>

</body>
</html>
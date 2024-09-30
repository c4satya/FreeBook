//create
CREATE TABLE books (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    author VARCHAR(255) NOT NULL,
    published_year INT,
    genre VARCHAR(100),
    description TEXT
);

// Database Connection
<?php
$servername = "localhost";
$username = "root"; // your MySQL username
$password = ""; // your MySQL password
$database = "digital_book_bank"; // your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
//Create Operation
<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $published_year = $_POST['published_year'];
    $genre = $_POST['genre'];
    $description = $_POST['description'];

    $sql = "INSERT INTO books (title, author, published_year, genre, description)
            VALUES ('$title', '$author', '$published_year', '$genre', '$description')";

    if ($conn->query($sql) === TRUE) {
        echo "New book created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<form method="post" action="">
    Title: <input type="text" name="title" required><br>
    Author: <input type="text" name="author" required><br>
    Published Year: <input type="number" name="published_year"><br>
    Genre: <input type="text" name="genre"><br>
    Description: <textarea name="description"></textarea><br>
    <input type="submit" value="Add Book">
</form>

//Read Operation


<?php


include 'db.php';

$sql = "SELECT * FROM books";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. " - Title: " . $row["title"]. " - Author: " . $row["author"]. " - Published Year: " . $row["published_year"]. " - Genre: " . $row["genre"]. " - Description: " . $row["description"]. "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>

//Update Operation
<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $author = $_POST['author'];
    $published_year = $_POST['published_year'];
    $genre = $_POST['genre'];
    $description = $_POST['description'];

    $sql = "UPDATE books SET title='$title', author='$author', published_year='$published_year', genre='$genre', description='$description' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Book updated successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<form method="post" action="">
    ID: <input type="number" name="id" required><br>
    Title: <input type="text" name="title" required><br>
    Author: <input type="text" name="author" required><br>
    Published Year: <input type="number" name="published_year"><br>
    Genre: <input type="text" name="genre"><br>
    Description: <textarea name="description"></textarea><br>
    <input type="submit" value="Update Book">
</form>


//Delete Operation
<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];

    $sql = "DELETE FROM books WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Book deleted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<form method="post" action="">
    ID: <input type="number" name="id" required><br>
    <input type="submit" value="Delete Book">
</form>


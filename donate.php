<?php
include("connect.php");

    echo"<br>fetching value";
    $bookName=isset($_POST['bookName'])?$_POST['bookName']:'';
    $authorName = isset($_POST['authorName']) ? $_POST['authorName'] : '';
    $publication=isset($_POST['publication'])?$_POST['publication']:'';
    $subject=isset($_POST['subject'])?$_POST['subject']:'';
    $language=isset($_POST['language'])?$_POST['language']:'';
    $category = isset($_POST['category']) ? $_POST['category'] : '';
    $standard = isset($_POST['standard']) ? $_POST['standard'] : '';
    $bookImage = isset($_POST['bookImage']) ? $_POST['bookImage'] : '';
    $bookDetail = isset($_POST['bookDetail']) ? $_POST['bookDetail'] : '';
    $donerName = isset($_POST['donerName']) ? $_POST['donerName'] : '';
    $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
    $e_mail = isset($_POST['e_mail']) ? $_POST['e_mail'] : '';
    $address = isset($_POST['address']) ? $_POST['address'] : '';
/*$servername = "localhost"; // Your database server
$username = "root"; // Your database username
$password = ""; // Your database password
$dbname = "book_donations"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}*/

$query="INSERT INTO `donatebookdb`(`srNo`, `bookName`, `authorName`, `publication`, `subject`, `language`, `category`, `standard`, `bookImage`, `bookDetail`, `donerName`, `phone`, `e_mail`, `address`) VALUES ('$bookName','$authorName','$publication','$subject','$language','$category','','$standard','$bookImage','$bookDetail','$donerName','$phone','$e_mail','$address')";

// Execute the statement
if ($conn->query($query)==TRUE) {
    echo " <br>Book donation recorded successfully.";

} else {
    echo "Error: ";
}
//header("location:C/newFolder/htdocs/FreeBook/index.html");
?>

<?php
header('Content-Type: application/json');

$host = 'localhost';
$port = '1521'; // Default Oracle port
$sid = 'XE'; // Your Oracle SID
$username = 'root';
$password = '';

// Connection string
$connection_string = "(DESCRIPTION=(ADDRESS_LIST=(ADDRESS=(PROTOCOL=TCP)(HOST=$host)(PORT=$port)))(CONNECT_DATA=(SERVICE_NAME=$sid)))";

try {
    // Connect to Oracle Database
    $conn = oci_connect($username, $password, $connection_string);

    if (!$conn) {
        $error = oci_error();
        echo json_encode(['success' => false, 'error' => $error['message']]);
        exit;
    }

    // Get form data
    $title = $_POST['title'];
    $author = $_POST['author'];
    $isbn = $_POST['isbn'];
    $description = $_POST['description'];

    // Prepare and execute SQL query
    $sql = 'INSERT INTO books (title, author, isbn, description) VALUES (:title, :author, :isbn, :description)';
    $stmt = oci_parse($conn, $sql);

    oci_bind_by_name($stmt, ':title', $title);
    oci_bind_by_name($stmt, ':author', $author);
    oci_bind_by_name($stmt, ':isbn', $isbn);
    oci_bind_by_name($stmt, ':description', $description);

    $result = oci_execute($stmt);

    if ($result) {
        echo json_encode(['success' => true]);
    } else {
        $error = oci_error($stmt);
        echo json_encode(['success' => false, 'error' => $error['message']]);
    }

    oci_free_statement($stmt);
    oci_close($conn);
} catch (Exception $e) {
    echo json_encode(['success' => false, 'error' => $e->getMessage()]);
}
?>

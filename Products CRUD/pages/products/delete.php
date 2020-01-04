<?php
$id = $_GET['id'] ?? 0;
$conn=$database;
// delete query
$query = "DELETE FROM products WHERE id= ?";
$stmt = $conn->prepare($query);
$stmt->bind_param('i', $id);
if ($stmt->execute()) {
    // redirect to read records page and
    // tell the user record was deleted
    echo "<div class='alert alert-success'>Record was deleted.</div>";
} else {
    die('Unable to delete record.');
}
?>
<a href='index.php?section=products&action=index' class='btn btn-danger'>Back to read products</a>


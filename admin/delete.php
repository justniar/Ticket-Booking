<?php
include '../connect.php';
session_start();

if ($_SESSION['log'] == '') {
    header("location:../index.php");
    exit(); // Ensure that the script stops execution after redirecting
}

if (isset($_GET['pid'])) {
    $bookingId = $_GET['pid'];

    // Use prepared statements to prevent SQL injection
    $stmt = $connect->prepare("DELETE FROM transactions WHERE `T_No.` = ?");
    $stmt->bind_param("s", $bookingId);
    
    if ($stmt->execute()) {
        // Record deleted successfully, you can redirect to the previous page or show a success message
        header("Location: admintraindb.php");
        exit();
    } else {
        // Error occurred during deletion, handle it accordingly
        echo "Error deleting record: " . $stmt->error;
    }

    $stmt->close();
} else {
    // If 'pid' is not set in the URL, handle it accordingly
    echo "Invalid request. Booking ID (pid) not provided.";
}

?>

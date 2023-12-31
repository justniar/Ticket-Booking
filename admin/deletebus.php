<?php
include '../connect.php';
session_start();

if ($_SESSION['log'] == '') {
    header("location:../index.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['pid'])) {
    $bookingId = $_GET['pid'];

    // Use prepared statements to delete the record
    $stmt = $connect->prepare("DELETE FROM bustransactions WHERE `T_No.` = ?");
    $stmt->bind_param("s", $bookingId);

    if ($stmt->execute()) {
        // Record deleted successfully, you can redirect to the previous page or show a success message
        header("Location: adminbusdb.php");
        exit();
    } else {
        // Error occurred during deletion, handle it accordingly
        echo "Error deleting record: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "Invalid request. Data not submitted via GET.";
}
?>

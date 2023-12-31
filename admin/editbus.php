<?php
include '../connect.php';
session_start();

if ($_SESSION['log'] == '') {
    header("location:../index.php");
    exit();
}

if (isset($_GET['pid'])) {
    $bookingId = $_GET['pid'];

    // Retrieve data for the selected record
    $stmt = $connect->prepare("SELECT * FROM bustransactions WHERE `T_No.` = ?");
    $stmt->bind_param("s", $bookingId);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    $stmt->close();

    // Display a form for editing
    if ($row) {
        include 'editbus_form.php';
    } else {
        echo "Record not found.";
    }
} else {
    echo "Invalid request. Booking ID (pid) not provided.";
}
?>

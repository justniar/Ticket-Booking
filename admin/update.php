<?php
include '../connect.php';
session_start();

if ($_SESSION['log'] == '') {
    header("location:../index.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $bookingId = $_POST['pid'];
    $name = $_POST['name'];
    $source = $_POST['source'];
    $dest = $_POST['dest'];
    // Add more fields as needed

    // Use prepared statements to update the record
    $stmt = $connect->prepare("UPDATE transactions SET Name = ?, source = ?, dest = ? WHERE `T_No.` = ?");
    $stmt->bind_param("ssss", $name, $source, $dest, $bookingId);

    if ($stmt->execute()) {
        // Record updated successfully, you can redirect to the previous page or show a success message
        header("Location: admintraindb.php");
        exit();
    } else {
        // Error occurred during update, handle it accordingly
        echo "Error updating record: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "Invalid request. Data not submitted via POST.";
}
?>

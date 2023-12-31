<!-- edit_form.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h3>Edit Record</h3>
        <form action="updatebus.php" method="post">
            <input type="hidden" name="pid" value="<?php echo $row['T_No.']; ?>">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" name="name" value="<?php echo $row['Name']; ?>" required>
            </div>
            <div class="form-group">
                <label for="source">Source:</label>
                <input type="text" class="form-control" name="source" value="<?php echo $row['source']; ?>" required>
            </div>
            <div class="form-group">
                <label for="dest">Destination:</label>
                <input type="text" class="form-control" name="dest" value="<?php echo $row['dest']; ?>" required>
            </div>
            <div class="form-group">
                <label for="amt">Amount Paid:</label>
                <input type="text" class="form-control" name="amt" value="<?php echo $row['Amt']; ?>" required>
            </div>
            <!-- Add more fields as needed -->

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>
</html>

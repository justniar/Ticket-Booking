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
        <form action="update.php" method="post">
            <input type="hidden" name="pid" value="<?php echo $row['T_No.']; ?>">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" name="name" value="<?php echo $row['Name']; ?>" required>
            </div>
            <div class="form-group">
                <label for="source">Source:</label>
                <select id="source" class="form-control" name="source">
                    <!-- Add options dynamically based on your source values -->
                    <option value="Gambir" <?php echo ($row['source'] == 'Gambir') ? 'selected' : ''; ?>>Gambir</option>
                    <option value="Pasar Senen" <?php echo ($row['source'] == 'Pasar Senen') ? 'selected' : ''; ?>>Pasar Senen</option>
                    <option value="Cirebon Prujakan" <?php echo ($row['source'] == 'Cirebon Prujakan') ? 'selected' : ''; ?>>Cirebon Prujakan</option>
                    <option value="Cirebon Kejaksan" <?php echo ($row['source'] == 'Cirebon Kejaksan') ? 'selected' : ''; ?>>Cirebon Kejaksan</option>
                    <option value="Semarang Tawang" <?php echo ($row['source'] == 'Semarang Tawang') ? 'selected' : ''; ?>>Semarang Tawang</option>
                    <option value="Surabaya Pasar Turi" <?php echo ($row['source'] == 'Surabaya Pasar Turi') ? 'selected' : ''; ?>>Surabaya Pasar Turi</option>
                    <option value="Malang" <?php echo ($row['source'] == 'Malang') ? 'selected' : ''; ?>>Malang</option>
                    <option value="Jember" <?php echo ($row['source'] == 'Jember') ? 'selected' : ''; ?>>Jember</option>
                    <option value="Kroya" <?php echo ($row['source'] == 'Kroya') ? 'selected' : ''; ?>>Kroya</option>
                    <option value="Solo Balapan" <?php echo ($row['source'] == 'Solo Balapan') ? 'selected' : ''; ?>>Solo Balapan</option>
                    <option value="Surabaya Gubeng" <?php echo ($row['source'] == 'Surabaya Gubeng') ? 'selected' : ''; ?>>Surabaya Gubeng</option>
                    <option value="Bandung" <?php echo ($row['source'] == 'Bandung') ? 'selected' : ''; ?>>Bandung</option>
                    <option value="Tegal" <?php echo ($row['source'] == 'Tegal') ? 'selected' : ''; ?>>Tegal</option> 
                    <option value="Blitar" <?php echo ($row['source'] == 'Blitar') ? 'selected' : ''; ?>>Blitar</option>
                    <option value="Yogyakarta" <?php echo ($row['source'] == 'Yogyakarta') ? 'selected' : ''; ?>>Yogyakarta</option> 
                    <option value="Kutoarjo" <?php echo ($row['source'] == 'Kutoarjo') ? 'selected' : ''; ?>>Kutoarjo</option>
                    <option value="Lempuyangan" <?php echo ($row['source'] == 'Lempuyangan') ? 'selected' : ''; ?>>Lempuyangan</option>
                </select>
            </div>

            <div class="form-group">
                <label for="dest">Destination:</label>
                <select id="dest" class="form-control" name="dest">
                    <option value="Gambir" <?php echo ($row['dest'] == 'Gambir') ? 'selected' : ''; ?>>Gambir</option>
                    <option value="Pasar Senen" <?php echo ($row['dest'] == 'Pasar Senen') ? 'selected' : ''; ?>>Pasar Senen</option>
                    <option value="Cirebon Prujakan" <?php echo ($row['dest'] == 'Cirebon Prujakan') ? 'selected' : ''; ?>>Cirebon Prujakan</option>
                    <option value="Cirebon Kejaksan" <?php echo ($row['dest'] == 'Cirebon Kejaksan') ? 'selected' : ''; ?>>Cirebon Kejaksan</option>
                    <option value="Semarang Tawang" <?php echo ($row['dest'] == 'Semarang Tawang') ? 'selected' : ''; ?>>Semarang Tawang</option>
                    <option value="Surabaya Pasar Turi" <?php echo ($row['dest'] == 'Surabaya Pasar Turi') ? 'selected' : ''; ?>>Surabaya Pasar Turi</option>
                    <option value="Malang" <?php echo ($row['dest'] == 'Malang') ? 'selected' : ''; ?>>Malang</option>
                    <option value="Jember" <?php echo ($row['dest'] == 'Jember') ? 'selected' : ''; ?>>Jember</option>
                    <option value="Kroya" <?php echo ($row['dest'] == 'Kroya') ? 'selected' : ''; ?>>Kroya</option>
                    <option value="Solo Balapan" <?php echo ($row['dest'] == 'Solo Balapan') ? 'selected' : ''; ?>>Solo Balapan</option>
                    <option value="Surabaya Gubeng" <?php echo ($row['dest'] == 'Surabaya Gubeng') ? 'selected' : ''; ?>>Surabaya Gubeng</option>
                    <option value="Bandung" <?php echo ($row['dest'] == 'Bandung') ? 'selected' : ''; ?>>Bandung</option>
                    <option value="Tegal" <?php echo ($row['dest'] == 'Tegal') ? 'selected' : ''; ?>>Tegal</option> 
                    <option value="Blitar" <?php echo ($row['dest'] == 'Blitar') ? 'selected' : ''; ?>>Blitar</option>
                    <option value="Yogyakarta" <?php echo ($row['dest'] == 'Yogyakarta') ? 'selected' : ''; ?>>Yogyakarta</option> 
                    <option value="Kutoarjo" <?php echo ($row['dest'] == 'Kutoarjo') ? 'selected' : ''; ?>>Kutoarjo</option>
                    <option value="Lempuyangan" <?php echo ($row['dest'] == 'Lempuyangan') ? 'selected' : ''; ?>>Lempuyangan</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>
</html>

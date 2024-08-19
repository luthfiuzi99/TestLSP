<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luas Segitiga (Test LSP)</title>
    <!-- Link to Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-body">
                        <h3 class="card-title text-center">Hitung Luas Segitiga</h3>
                        <form action="luas_segitiga.php" method="POST">
                            <div class="form-group">
                                <label for="alas">Alas Segitiga</label>
                                <input type="number" class="form-control" id="alas" name="alas" required>
                            </div>
                            <div class="form-group">
                                <label for="tinggi">Tinggi Segitiga</label>
                                <input type="number" class="form-control" id="tinggi" name="tinggi" required>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Hitung</button>
                        </form>
                        <?php 
                        if(isset($_POST['alas']) && isset($_POST['tinggi'])) {
                            $alas = (int) $_POST["alas"];
                            $tinggi = (int) $_POST["tinggi"];
                            $luas = 0.5 * $alas * $tinggi;
                            echo "<div class='alert alert-info mt-4 text-center'>Luas segitiga adalah: " . $luas . "</div>";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Link to Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<!-- Code by Brave Coder - https://youtube.com/BraveCoder -->

<?php
    if (isset($_POST['submit'])) {
        $code = $_POST['code'];

        echo htmlentities($code);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
    <title>HTML Minifier - Brave Coder</title>
</head>
<body class="bg-light">

    <div class="container wrapper p-4 bg-white shadow">
        <h1 class="title mb-4 text-center">HTML Minifier</h1>
        <form action="" method="post" class="form">
            <div class="mb-3">
                <label for="code" class="form-label">Enter Code</label>
                <textarea id="code" name="code" rows="10" class="form-control" placeholder="Enter your HTML Code" required></textarea>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Minify</button>
        </form>
    </div>
    
    <!-- Bootstrap Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
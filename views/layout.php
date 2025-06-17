<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?= $pageTitle ?? 'My Site' ?></title>
    <!-- tab icon -->
    <link rel="shortcut icon" href="">
    <!-- bootstrap ui -->
    <link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <!-- htmx -->
    <script src="node_modules/htmx.org/dist/htmx.min.js" crossorigin="anonymous"></script>
    <!-- bootstrap icons -->
    <link rel="stylesheet" href="node_modules/bootstrap-icons/font/bootstrap-icons.css">
</head>

<body>
    <?php include 'partials/navbar.php'; ?>

    <main>
        <?php include $viewFile; ?>
    </main>

    <?php include 'partials/footer.php'; ?>
</body>

</html>
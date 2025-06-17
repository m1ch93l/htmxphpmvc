<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?= $pageTitle ?? 'My Site' ?></title>
    <!-- tab icon -->
    <link rel="stylesheet" href="/htmxphpmvc/libs/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/htmxphpmvc/libs/bootstrap-icons/font/bootstrap-icons.css">
    <script src="/htmxphpmvc/libs/htmx/htmx.min.js"></script>
    <script src="/htmxphpmvc/libs/bootstrap/js/bootstrap.bundle.min.js"></script>

</head>

<body>
    <?php include 'partials/navbar.php'; ?>

    <main>
        <?php include $viewFile; ?>
    </main>

    <?php include 'partials/footer.php'; ?>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?= $pageTitle ?? 'My Site' ?></title>
</head>

<body>
    <?php include 'partials/navbar.php'; ?>

    <main>
        <?php include $viewFile; ?>
    </main>

    <?php include 'partials/footer.php'; ?>
</body>

</html>
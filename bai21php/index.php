<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai 02 - Html va PHP</title>
</head>
<body>
    <!-- Header -->
    <?php include_once './vu/header.php' ?>
    <?php include_once './vu/header.php' ?>
    <h1>Html va PHP</h1>
    <?php echo 'bai2.1' ?>
    <?php
        $language = 'Ngon ngu lap trinh PHP';
        var_dump($language);
    ?>
    <?php include './vu/content.php'; ?>
    <?php include './vu/content.php'; ?>
    <!-- Footer -->
    <?php include_once './vu/footer.php' ?>
    <?php include_once './vu/footer.php' ?>
     <!-- Header -->
    <?php require_once './vu/header.php' ?>
    <?php require_once './vu/header.php' ?>
    <h1>Html va PHP</h1>
    <?php echo 'bai2.1' ?>
    <?php
        $language = 'Ngon ngu lap trinh PHP';
        var_dump($language);
    ?>
    <?php require './vu/content.php'; ?>
    <?php require './vu/content.php'; ?>
    <!-- Footer -->
    <?php require_once './vu/footer.php' ?>
    <?php require_once './vu/footer.php' ?>
</body>
</html>
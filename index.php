<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require "./vendor/autoload.php";
        use Core\ConfigController as HomeController;
        $url = new HomeController();
        $url->isLoad();
    ?>
</body>
</html>
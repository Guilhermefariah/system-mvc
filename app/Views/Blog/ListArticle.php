<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Artigos</h1>
    <?php
    foreach ($this->data["articles"] as $article) {
        echo "<h2>{$article['title']}</h2>";
        echo "<p>{$article['content']}</p>";
        echo "<hr>";
    }
    ?>
    
</body>

</html>
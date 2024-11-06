<!-- Structure HTML pour toutes les pages du site -->

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script defer src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <header>
        <nav class="navbar" style="background-color: grey;">
            <a style="text-decoration: none; color:black" href=""><?= $data['link1'] ?></a>
            <h1><a style="text-decoration: none; color:black" href="/"><?= $data['title'] ?></a></h1>
            <a href="/account" style="text-decoration: none; color:black"><?= $data['user'] ?></a>
    </header>
    <?= $data['content'] ?>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WnbBlog</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <a class="navbar-brand" href="#">WnbBlog</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
        <li> <a class="nav-link" href="<?php echo ROOT_URL; ?> ">Home <span class="sr-only"></span></a> </li>
        <li> <a class="nav-link" href="<?php echo ROOT_URL; ?>posts">Posts <span class="sr-only"></span></a> </li>
        </ul>
        <ul class="navbar-nav navbar-right">
        <li> <a class="nav-link" href="<?php echo ROOT_URL; ?>users/login ">Login <span class="sr-only"></span></a> </li>
        <li> <a class="nav-link" href="<?php echo ROOT_URL; ?>users/register">Register <span class="sr-only"></span></a> </li>
        </ul>
    </div>
    </nav>

    <div class="container">
    <div class="row">
        <?php require($view); ?>
    </div>

</main><!-- /.container -->
</body>
</html>
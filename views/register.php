<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - <?= env('APP_NAME') ?></title>
    <link rel="stylesheet" href="<?= base_url() ?>/css/style.css">
    <link rel="stylesheet" href="<?= base_url() ?>/fa/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/css/auth.css">
</head>
<body>
    
<div class="container" style="top: 30px;">
    <h1><?= env('APP_NAME') ?></h1>
    <form action="<?= route('registerAction') ?>" method="POST">
        <div class="mt-2">Name :</div>
        <input type="text" class="box" name="name" required>
        <div class="mt-2">Email :</div>
        <input type="email" class="box" name="email" required>
        <div class="mt-2">Password :</div>
        <input type="password" class="box" name="password" required>

        <button class="biru lebar-100 mt-3">Register</button>

        <div class="rata-tengah mt-4">
            already have an account? <a href="<?= route('register') ?>">login</a> now!
        </div>
    </form>
</div>

</body>
</html>
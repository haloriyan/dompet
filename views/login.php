<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - <?= env('APP_NAME') ?></title>
    <link rel="stylesheet" href="<?= base_url() ?>/css/style.css">
    <link rel="stylesheet" href="<?= base_url() ?>/fa/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/css/auth.css">
</head>
<body>
    
<div class="container">
    <h1><?= env('APP_NAME') ?></h1>
    <form action="<?= route('loginAction') ?>" method="POST">
        <?php if (@$message != "") : ?>
            <div class="p-2 rounded bg-merah-transparan">
                <?= @$message ?>
            </div>
        <?php endif ?>
        <div class="mt-2">Email :</div>
        <input type="email" class="box" name="email" required>
        <div class="mt-2">Password :</div>
        <input type="password" class="box" name="password" required>

        <button class="biru lebar-100 mt-3">Login</button>

        <div class="rata-tengah mt-5">
            don't have an account? <a href="<?= route('register') ?>">register</a> now!
        </div>
    </form>
</div>

</body>
</html>
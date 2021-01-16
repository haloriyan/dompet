<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= env('APP_NAME') ?></title>
    <link rel="stylesheet" href="<?= base_url() ?>/css/style.css">
    <link rel="stylesheet" href="<?= base_url() ?>/fa/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/css/app.css">
</head>
<body>
    
<?php insert('../Components/Nav'); ?>

<div class="container">
    <input type="hidden" id="myID" value="<?= $myData->id ?>">
    <div class="wrap">
        <h1>Wishlist</h1>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th class="lebar-20"></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($wishlists as $wishlist) : ?>
                    <tr>
                        <td><?= $wishlist->name ?></td>
                        <td><?= toIdr($wishlist->price) ?></td>
                        <td>
                            <span class="teks-biru">
                                <i class="fas fa-eye"></i>
                            </span>
                            &nbsp;
                            <a href="#" class="teks-merah">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>

<button onclick="munculPopup('#addWishlist')" class="actionBtn biru"><i class="fas fa-plus"></i></button>

<div class="bg"></div>
<div class="popupWrapper" id="addWishlist">
    <div class="popup">
        <div class="wrap">
            <h3>Add Wishlist
                <i class="fas fa-times ke-kanan pointer"></i>
            </h3>
            <form action="<?= route('wishlist/store') ?>" method="POST">
                <div class="mt-2">Item name :</div>
                <input type="text" class="box" name="name" required>
                <div class="mt-2">Price :</div>
                <input type="number" class="box" name="price" required>

                <button class="mt-3 hijau lebar-100">Add</button>
            </form>
        </div>
    </div>
</div>

<script src="<?= base_url() ?>/js/base.js"></script>
<script>
    // 
</script>

</body>
</html>
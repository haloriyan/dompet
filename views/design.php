<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= base_url() ?>/css/style.css">
    <link rel="stylesheet" href="<?= base_url() ?>/fa/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/css/app.css">
</head>
<body>
    
<nav>
    <a href="#">
        <li>
            <i class="fas fa-home"></i>
        </li>
    </a>
    <a href="#">
        <li>
            <i class="fas fa-chart-line"></i>
        </li>
    </a>
    <a href="#">
        <li>
            <i class="fas fa-shopping-cart"></i>
        </li>
    </a>
    <a href="#">
        <li>
            <i class="fas fa-tags"></i>
        </li>
    </a>
    <a href="#">
        <li>
            <i class="fas fa-cog"></i>
        </li>
    </a>
</nav>

<div class="container pt-5">
    <div class="bagi bagi-2 mt-5 border-right">
        <div class="wrap super">
            Pemasukan Hari Ini :
            <div class="rata-tengah jumbo">
                <h2>Rp 450.000</h2>
            </div>
        </div>
    </div>
    <div class="bagi bagi-2 mt-5">
        <div class="wrap super">
            Pengeluaran Hari Ini :
            <div class="rata-tengah jumbo">
                <h2>Rp 250.000</h2>
            </div>
        </div>
    </div>

    <div class="rata-tengah mt-3">
        <button class="bg-hijau rounded-circle pl-5 pr-5 tinggi-60">
            + Rp 200.000
        </button>
    </div>
</div>

<button onclick="toggleAdd(this)" class="actionBtn biru"><i class="fas fa-plus"></i></button>

<div class="overlay"></div>
<div id="addArea">
    <div class="item" onclick="addIncome()">Pemasukan</div>
    <br />
    <div class="item" onclick="addSpending()">Pengeluaran</div>
</div>

<div class="bg"></div>
<div class="popupWrapper" id="addIncome">
    <div class="popup">
        <div class="wrap">
            <h3>Pemasukan
                <i class="fas fa-times ke-kanan pointer"></i>
            </h3>
            <form action="#">
                <div class="rata-tengah">
                    <h2 id="amount" contenteditable="true" class="d-inline-block">0</h2>
                </div>
                <div class="mt-2">Keterangan :</div>
                <input type="text" class="box" name="ket">
                <button class="lebar-100 hijau mt-3">Tambahkan</button>
            </form>
        </div>
    </div>
</div>

<script src="<?= base_url() ?>/js/base.js"></script>
<script>
    let wantToAddData = false;

    const toggleAdd = btn => {
        let items = selectAll("#addArea .items");
        if (wantToAddData) {
            select("#addArea").style.right = "-100%";
            select(".overlay").style.display = "none";
            btn.innerHTML = "<i class='fas fa-plus'></i>";
        }else {
            select("#addArea").style.right = "3%";
            select(".overlay").style.display = "block";
            btn.innerHTML = "<i class='fas fa-times'></i>";
        }
        wantToAddData = !wantToAddData;
    }
    const addIncome = () => {
        toggleAdd(select(".actionBtn"));
        munculPopup("#addIncome");  
    }
</script>

</body>
</html>
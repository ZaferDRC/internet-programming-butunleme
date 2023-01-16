<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Madencilik Nedir, Madencilik">
    <meta name="keywords" content="Madencilik, Mining Maden,">
    <meta name="author" content="Zafer Yiğithan Dereci">
    <title>Yönetim Paneli</title>
    <link rel="stylesheet" href="reset.css">
</head>

<style>
    body {

        background: radial-gradient(circle at -8.9% 51.2%, rgb(255, 124, 0) 0%, rgb(255, 124, 0) 15.9%, rgb(255, 163, 77) 15.9%, rgb(255, 163, 77) 24.4%, rgb(19, 30, 37) 24.5%, rgb(19, 30, 37) 66%);
    }

    .alt-menu {
        position: absolute;
        display: none;
        z-index: 2;
    }

    .alt-menu a {
        display: block;
        line-height: 30px;
        background: #3f3f3f;
        border: 3px solid black;
        border-bottom-right-radius: 5px;
    }

    .alt-menu a:hover {
        transform: scale(1.15);
        color: #3f3f3f;
        background-color: #fff;
    }

    .menu {
        display: flex;
        justify-content: center;
        width: 100%;
        background: linear-gradient(87.4deg, rgb(255, 241, 165) 1.9%, rgb(200, 125, 76) 49.7%, rgb(83, 54, 54) 100.5%);
    }

    .menu a {
        text-decoration: none;
    }

    .panelmenu {

        display: inline-block;
        top: 40px;
        padding: 50px;
    }

    .panelmenu a:hover {
        color: red;
        transition: .6s;
    }

    .panelmenu a {

        color: #fff;
        text-decoration: none;
        font-size: medium;
    }

    .panelmenu:hover .alt-menu {
        display: block;
    }

    form {
        margin-top: 6%;
        text-align: center;
    }
</style>

<body>

    <?php
    require("veritabani.php");

    session_start();

    if ($_SESSION["kullaniciad"] != sha1(md5("admin"))) {

        header("location:cikis.php");
    }

    if (isset($_POST["kaydet"])) {

        $icerik = $_POST["icerik"];
        $sorgu = $baglandb->query("DELETE FROM madenmuh");
        $sorgu = $baglandb->query("INSERT INTO madenmuh (icerik) VALUES('$icerik')");

        if ($sorgu) {

            echo "<script>window.location.href='adminmadenmuhendis.php';</script>";
        } else {

            echo "<script> alert('HATA: KAYIT YAPILAMADI!')</script>";
        }
    }

    $sorgu = $baglandb->query("SELECT * FROM madenmuh");
    $satir = $sorgu->fetchObject();

    ?>

    <header>

        <nav class="menu">
            <ul>
                <li class="panelmenu"><a href="">PANEL MENÜSÜ</a>

                <ul class="alt-menu">
                        <li><a href="adminanasayfa.php">ANASAYFA</a></li>
                        <li><a href="adminuyeler.php">SAYFALAMA</a></li>
                        <li><a href="adminhakkimizda.php">HAKKIMIZDA</a></li>
                        <li><a href="adminuyeozel.php">ÜYELERE ÖZEL</a></li>
                        <li><a href="kategoriler.php">KATEGORİLER</a></li>
                        <li><a href="adminkalitebelge.php">KALİTE BELGE</a></li>
                        <li><a href="adminvizyon.php">VİZYON</a></li>
                        <li><a href="admincalisanaydinlatma.php">ÇALIŞAN AYDINLATMA</a></li>
                        <li><a href="admincevre.php">ÇEVRE</a></li>
                        <li><a href="admindilaverpasa.php">DİLAVER PAŞA</a></li>
                        <li><a href="adminissagligi.php">İŞ SAĞLIĞI VE GÜVENLİĞİ</a></li>
                        <li><a href="adminlapseki.php">LAPSEKİ</a></li>
                        <li><a href="adminivrindi.php">İVRİNDİ</a></li>
                        <li><a href="adminmadenhava.php">MADEN HAVALANDIRMA</a></li>
                        <li><a href="adminmadenmuhendis.php">MADEN MÜHENDİSLİĞİ</a></li>
                        <li><a href="adminmohssertlikskala.php">MOHS SERTLİK SKALA</a></li>
                        <li><a href="adminmucevherat.php">MÜCEVHERAT MÜHENDİSLİĞİ</a></li>
                        <li><a href="admintoplumiliski.php">TOPLUM İLİŞKİ</a></li>
                        <li><a href="adminacikocak.php">AÇIK OCAK MÜHENDİSLİĞİ</a></li>
                        <li><a href="admincikis.php" onclick="if(!confirm ('Çıkış Yapmak İstediğinize Emin Misiniz?')) return false;">ÇIKIŞ YAP</a></li>
                    </ul>

                </li>

            </ul>



        </nav>

    </header>

    <form action="" method="POST">
        <h1 style="font-size: x-large; color:#fff;">MADEN MÜHENDİSLİĞİ İÇERİK:</h1>
        <textarea rows="20" cols="80" name="icerik"> <?php echo $satir->icerik; // Bu, veri tabanındaki icerik sütunu
                                                        ?></textarea><br><br>
        <input type="submit" name="kaydet" value="Kaydet">
    </form>
</body>


</html>
<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Madencilik Nedir, Madencilik">
    <meta name="keywords" content="Madencilik, Mining Maden,">
    <meta name="author" content="Zafer Yiğithan Dereci">
    <title>İş Başvuru Formu</title>
</head>

<body>

    <?php

    require("veritabani.php");

    if (isset($_POST["basvur"])) {

        $ad = $_POST["ad"];
        $soyad = $_POST["soyad"];
        $dogumtarih = $_POST["dogumtarih"];
        $tel = $_POST["tel"];
        $mail = $_POST["mail"];
        $ozgecmis = $_POST["ozgecmis"];

        if ($dogumtarih > 2022 || $dogumtarih < 1900) {

            echo "<script> alert('Gerçekçi Bir Doğum Tarihi Giriniz!') </script>";
            echo "<script> window.location.href = 'isbasvuru.php' </script>";
        }

        elseif(is_numeric($ad) || is_numeric($soyad)){

            echo "<script> alert('İsim, Soyisim Rakam İçeremez!!') </script>";
            echo "<script> window.location.href = 'isbasvuru.php' </script>";

        }

        elseif(!is_numeric($tel)){

            echo "<script> alert('Telefon Numarası Sadece Rakamlardan Oluşur!') </script>";
            echo "<script> window.location.href = 'isbasvuru.php' </script>";

        }
        
        else {

            $sql = "INSERT INTO isbasvuru(ad,soyad,dogumtarih,telno,mail,cv) VALUES(?,?,?,?,?,?)";

            $baglandb
            ->prepare($sql)
            ->execute([$ad, $soyad, $dogumtarih, $tel, $mail, $ozgecmis]); // Sorgu Hazırlandı ve "?" yazan yerlere parametreleri gönderdik.

            echo "<script> alert('Başvurunuz Alınmıştır.') </script>";
            header("Refresh:0; url = index.php");
        }
    }

    ?>

    <style>
        body {
            background-color: grey;
        }

        .form {

            width: 300px;
            padding: 20px;
            text-align: center;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            overflow: hidden;
            background: radial-gradient(circle at -8.9% 51.2%, rgb(255, 124, 0) 0%, rgb(255, 124, 0) 15.9%, rgb(255, 163, 77) 15.9%, rgb(255, 163, 77) 24.4%, rgb(19, 30, 37) 24.5%, rgb(19, 30, 37) 66%);
        }

        .form h1 {

            margin-top: 50px;
            color: wheat;

        }


        .form input {

            display: block;
            width: 100%;
            text-align: center;
            box-sizing: border-box;
            height: 44px;
            border: none;
            margin-top: 20px;
            border-radius: 10px;
        }


        #buton {

            margin-top: 40px;
            background-color: cornflowerblue;
            color: white;
            font-size: 16px;
        }

        #buton:hover {

            background-color: white;
            transition: 0.5s;
            transform: scale(0.90);
            cursor: pointer;
        }


        #temizle {

            background-color: cornflowerblue;
            color: red;
            font-size: 16px;

        }

        #temizle:hover {

            background-color: white;
            transition: 0.5s;
            transform: scale(0.90);
            cursor: pointer;
        }

        #ozgecmis {

            margin-top: 40px;
        }
    </style>

    <div class="form">

        <form action="" method="post">
            <h1>İş Başvuru Formu</h1>
            <input type="text" name="ad" maxlength="15" placeholder="Adınız" required>
            <input type="text" name="soyad" maxlength="10" placeholder="Soyadınız" required>
            <input type="date" name="dogumtarih" placeholder="Doğum Tarihiniz" required>
            <input type="tel" name="tel" maxlength="10" placeholder="Telefon Numaranız" required>
            <input type="email" name="mail" maxlength="20" placeholder="Mailiniz" required>
            <textarea name="ozgecmis" id="ozgecmis" cols="30" rows="10" placeholder="Kendinizden Bahsedin."></textarea>
            <input button type="submit" name="basvur" value="Başvur" id="buton">
            <input type="reset" value="Temizle" id="temizle">
        </form>
    </div>

</body>

</html>
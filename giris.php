<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Madencilik Nedir, Madencilik">
    <meta name="keywords" content="Madencilik, Mining Maden,">
    <meta name="author" content="Zafer Yiğithan Dereci">
    <title>Giriş Yap</title>
</head>

<body>

    <?php
    require("veritabani.php"); 


    if (isset($_POST["giris"])) { 

        $kullaniciad = $_POST["kullaniciad"]; 
        $sifre = $_POST["sifre"];

        $kullanici_sor = $baglandb->prepare("SELECT * FROM uye WHERE kullanici_adi = ? AND sifre = ?");
        $kullanici_sor->execute([$kullaniciad, md5($sifre)]); 

        $say = $kullanici_sor->rowCount();  

        if ($say > 0) { 
            session_start();
            $_SESSION["kullaniciad"] = $kullaniciad;
            echo "<script>alert('Giriş Başarılı, Yönlendiriliyorsunuz..')</script>";
            header("Refresh:0; url = ozel.php");
        }
        elseif (empty($kullaniciad) || empty($sifre)) { 

            echo "<h2> Kullanıcı Adı Veya Şifre Boş Bırakılamaz.!</h2>";
        } else {
            echo "<h2> Kullanıcı Adı Veya Şifre Yanlış</h2>";
        }

    }

    ?>

    <style>
        body {
            background-color: grey;
        }

        h2 {
            text-align: center;
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

        form a {
            text-decoration: none;
            margin-top: 20px;
            color: white;
            display: block;
        }

        form a:hover {
            transition: .5s;
            color: orange;
            transform: scale(1.15);
        }
    </style>

    <body>

        <div class="form">

            <form action="" method="post">
                <h1>Giriş Yap</h1>
                <input type="text" name="kullaniciad" maxlength="15" placeholder="Kullanıcı Adı" require>
                <input type="password" name="sifre" maxlength="10" placeholder="Şifre" require>
                <input button type="submit" name="giris" value="Giris Yap" id="buton">
                <input type="reset" value="Temizle" id="temizle">
                <a href="kayitol.php">Hesabın Yok Mu ? Tıkla.</a>
            </form>
        </div>



    </body>

</html>


</body>

</html>
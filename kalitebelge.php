<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Zafer Yiğithan Dereci">
    <meta name="keywords" content="Madencilik, Mining, Maden">
    <meta name="description" content="Madencilik">
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Vazirmatn&display=swap" rel="stylesheet">
    <title>Kalite Belgelerimiz</title>
</head>

<body>

    <!--Header Bölümü-->

    <header>

        <nav class="menu">
            <ul>
                <li class="ana-link"><a href="index.php">ANASAYFA</a></li>
                <li class="ana-link"><a href="">KURUMSAL</a>
                    <ul class="alt-menu">
                        <li><a href="hakkimizda.php">Hakkımızda</a></li>
                        <li><a href="kalitebelge.php">Kalite Belgelerimiz</a></li>
                        <li><a href="vizyon.php">Vizyonumuz</a></li>
                    </ul>
                </li>
                <li class="ana-link"><a href="">FAALİYET ALANLARIMIZ</a>
                    <ul class="alt-menu">
                        <li><a href="acikocakmuhendislik.php">Açık ocak madenciliği</a></li>
                        <li><a href="madenmuhendis.php">Maden mühendisliği</a> </li>
                        <li><a href="mohssertlikskalasi.php">Mohs sertlik skalası</a></li>
                        <li><a href="mucevheratmuhendis.php">Mücevherat Mühendisliği</a></li>
                        <li><a href="dilaverpasamuhendis.php">Dilâver Paşa Nizamnamesi</a></li>
                        <li><a href="madenlerdehavalandirma.php">Madenlerde havalandırma</a></li>
                        <li><a href="lapseki.php">Lapseki</a></li>
                        <li><a href="ivrindi.php">İvrindi</a></li>
                    </ul>
                </li>
                <li class="ana-link"><a href="">ÇEVRE VE SOSYAL</a>
                    <ul class="alt-menu">
                        <li><a href="cevre.php">Çevre</a></li>
                        <li><a href="issagligi.php">İş Sağlığı ve Güvenliği</a></li>
                        <li><a href="toplumiliski.php">Toplum İlişkileri</a></li>
                        <li><a href="calisanaydinlatma.php">Çalışan Adayı Aydınlatma Metni</a></li>
                    </ul>
                </li>
                <li class="ana-link"><a href="iletisim.php">İLETİŞİM</a>
                <ul class="alt-menu">
                    <li><a href="isbasvuru.php">İş Başvurusu</a></li>
                    <li><a href="iletisim.php">İletişim</a></li>
                </ul>
            </li>
                <li class="ana-link"><a href="">ÜYE İŞLEMLERİ</a>
                    <ul class="alt-menu">
                        <li><a href="giris.php">Giriş Yap</a></li>
                        <li><a href="kayitol.php">Kayıt Ol</a></li>
                    </ul>
                </li>
            </ul>
        </nav>

    </header>
    <br>
    <!--Header Bölümü Bitiş-->

    <!--İcerik Bölümü,-->

    <section class="icerik">

        <h2>Kalite Belgelerimiz</h2>
        <hr>
        <br>
        <?php
        require('veritabani.php');

        $sorgu = $baglandb->query("SELECT * FROM kalitebelge");
        $satir = $sorgu->fetchObject();
        echo $satir->icerik;
        ?>
        <br>
        <br>
        <hr>
    </section>

    <!--İcerik Bölümü Bitiş-->

    <!--Footer -->

    <footer>

        <ul>
            <h3>FAALİYET ALANLARIMIZ</h3>
            <hr>
            <li><a href="acikocakmuhendislik.php">
                    <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    Açık ocak Mühendisliği

                </a>
            </li>
            <li><a href="madenmuhendis.php">
                    <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    Maden Mühendisliği

                </a>
            </li>
            <li><a href="mohssertlikskalasi.php">
                    <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    Mohs Sertlik Skalası

                </a>
            </li>
            <li><a href="mucevheratmuhendis.php">
                    <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    Mücevherat Mühendisliği

                </a>
            </li>
            <li><a href="dilaverpasamuhendis.php">
                    <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    Dilaver Paşa Nizamnamesi

                </a>
            </li>
            <li><a href="madenlerdehavalandirma.php">
                    <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    Madenlerde Havalandırma

                </a>
            </li>
            <li><a href="lapseki.php">
                    <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    Lapseki

                </a>
            </li>
            <li><a href="ivrindi.php">
                    <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    İvrindi

                </a>
            </li>
        </ul>

        <ul>
            <h3>KURUMSAL</h3>
            <hr>
            <li><a href="hakkimizda.php">
                    <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    Hakkımızda
                </a>
            </li>
            <li><a href="kalitebelge.php">
                    <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    Kalite Belgelerimiz
                </a>
            </li>
            <li><a href="vizyon.php">
                    <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    Vizyonumuz
                </a>
            </li>
        </ul>

        <ul>
            <h3>ÇEVRE VE SOSYAL</h3>
            <hr>
            <li><a href="cevre.php">
                    <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    Çevre
                </a>
            </li>
            <li><a href="issagligi.php">
                    <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    İş Sağlığı ve Güvenliği
                </a>
            </li>
            <li><a href="toplumiliski.php">
                    <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    Toplum İlişkileri
                </a>
            </li>
        </ul>

        <ul>
            <h3>BİZE ULAŞIN</h3>
            <hr>
            <li style="color: antiquewhite;"><i class="fa fa-chevron-right" aria-hidden="true"></i> +90 465 799 64 79</li>
            <li style="color: antiquewhite;"><i class="fa fa-chevron-right" aria-hidden="true"></i> madencilik@.com.tr</li>
        </ul>

    </footer>

    <div class="footerbar">
        Tüm Hakları Saklıdır &copy;
    </div>

    <!--Footer Bitiş-->


</body>


</html>
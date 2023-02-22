<!doctype html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content="tr">
    <meta charset="utf-8">
    <title>Extra Eğitim</title>
</head>

<body>

        <?php

        /*

        UPDATE          :	MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun herhangi bir  kaydını içeren satırdaki sütun / sütunlara ait veriyi /verileri güncellemek için kullanılır.


         */


        $VeritabaniBaglantisi	=	mysqli_connect("localhost", "root", "", "extraegitim");
        mysqli_set_charset($VeritabaniBaglantisi, "UTF8");

        if(mysqli_connect_errno()){
            echo "Bağlantı Hatası";
            echo "Hata Açıklaması : " . mysqli_connect_error() . "<br />";
            die();
        }


        $GelenIDDegeri = $_GET["id"];

        $Sorgu   =  mysqli_query($VeritabaniBaglantisi, "SELECT * FROM uyeler WHERE id=" . $GelenIDDegeri);
        if ($Sorgu){
            $KayitSayisi  = mysqli_num_rows($Sorgu);
            if ($KayitSayisi>0){
                 $Kayit = mysqli_fetch_assoc($Sorgu);
            }else{
                header("Location: index.php");
            }
        }else{
            echo "Sorgu Hatası";
        }


        mysqli_close($VeritabaniBaglantisi);





        ?>

        <form action="sonuc.php?id=<?php echo $GelenIDDegeri; ?>" method="post">

           Ad Soyad :  <input type="text" name="adisoyadi" value="<?php echo $Kayit["adisoyadi"];?>"><br/>
            E-Mail Adresi : <input type="text" name="email" value="<?php echo $Kayit["email"];?>"><br/>
            Şifre : <input type="password" name="sifre" value="<?php echo $Kayit["sifre"];?>"><br/>
            Telefon : <input type="text" name="telefon" value="<?php echo $Kayit["telefon"];?>"><br/>
            <select name="yas">
                <option value="">Lütfen Yaşınızı Belirtin</option>
                <option value="24" <?php if ($Kayit["yas"] == 24 ){ ?>selected="selected"<?php }?> >24</option>
                <option value="25" <?php if ($Kayit["yas"] == 25 ){ ?>selected="selected"<?php }?> >25</option>
                <option value="26" <?php if ($Kayit["yas"] == 26 ){ ?>selected="selected"<?php }?> >26</option>
                <option value="27" <?php if ($Kayit["yas"] == 27 ){ ?>selected="selected"<?php }?> >27</option>
                <option value="28" <?php if ($Kayit["yas"] == 28 ){ ?>selected="selected"<?php }?> >28</option>
                <option value="29" <?php if ($Kayit["yas"] == 29 ){ ?>selected="selected"<?php }?> >29</option>
                <option value="30" <?php if ($Kayit["yas"] == 30 ){ ?>selected="selected"<?php }?> >30</option>
                <option value="31" <?php if ($Kayit["yas"] == 31 ){ ?>selected="selected"<?php }?> >31</option>
                <option value="32" <?php if ($Kayit["yas"] == 32 ){ ?>selected="selected"<?php }?> >32</option>
                <option value="33" <?php if ($Kayit["yas"] == 33 ){ ?>selected="selected"<?php }?> >33</option>
                <option value="34" <?php if ($Kayit["yas"] == 34 ){ ?>selected="selected"<?php }?> >34</option>
                <option value="35" <?php if ($Kayit["yas"] == 35 ){ ?>selected="selected"<?php }?> >35</option>
                <option value="36" <?php if ($Kayit["yas"] == 36 ){ ?>selected="selected"<?php }?> >36</option>
                <option value="37" <?php if ($Kayit["yas"] == 37 ){ ?>selected="selected"<?php }?> >37</option>
                <option value="38" <?php if ($Kayit["yas"] == 38 ){ ?>selected="selected"<?php }?> >38</option>
                <option value="39" <?php if ($Kayit["yas"] == 39 ){ ?>selected="selected"<?php }?> >39</option>
                <option value="40" <?php if ($Kayit["yas"] == 40 ){ ?>selected="selected"<?php }?> >40</option>


                <select/><br/>
            Cinsiyet <input type="radio" name="cinsiyet" value="Erkek" <?php  if ($Kayit["cinsiyet"] == "Erkek"){?> checked="checked" <?php }?> >Erkek
                     <input type="radio" name="cinsiyet" value="Kadın" <?php  if ($Kayit["cinsiyet"] == "Kadın"){?> checked="checked" <?php }?> >Kadın <br/>
                Şehir : <input type="text" name="sehir" value="<?php echo $Kayit["sehir"];?>"> <br>


                <input type="submit" value="Güncelle">
        </form>




</body>
</html>










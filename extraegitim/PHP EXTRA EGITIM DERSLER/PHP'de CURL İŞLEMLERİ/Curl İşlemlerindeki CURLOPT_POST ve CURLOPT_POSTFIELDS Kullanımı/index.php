<!doctype html>
<html lang="tr-TR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content="tr">
    <title>Ekstra Egitim</title>
</head>
<body>

        <?php


        /*

        CURLOPT_POST            : Başlatılmış bir CURL oturumunda istenilen URL adresine HTTP POST işlemi tanımlamak için kullanılır.

        CURLOPT_POSTFIELDS      : Başlatılmış bir CURL oturumunda istenilen URL adresine HTTP POST işleminde gönderilecek olan veri / verileri tanımlamak için kullanılır.


        */


        ?>

        <form action="sonuc.php" method="post">
            Adınız Soyadınız: <input type="text" name="AdiSoyadi"><br>
            E-Mail Adresiniz: <input type="email" name="EmailAdresi"> <br>
            Telefonunuz: <input type="text" name="Telefon"> <br>
            Cinsiyetiniz: <input type="radio" name="Cinsiyet" value="Erkek">Erkek  <input type="radio" name="Cinsiyet" value="Kadın">Kadın
            <br>
            Yaşınız: <Select name="Yas">
                <option value="30">30</option>
                <option value="31">31</option>
                <option value="33">32</option>
                <option value="33">33</option>
                <option value="34">34</option>
                <option value="35">35</option>
                <option value="36">36</option>
                <option value="37">37</option>
                <option value="38">38</option>
            </Select><br>
            <input type="submit" value="Gönder">


        </form>




</body>
</html>










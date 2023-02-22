$(document).ready(function () {
    $.SoruIceigiGoster = function (ElemanIDsi) {
        var SoruIDsi = ElemanIDsi;
        var IslenecekAlan = "#" + ElemanIDsi;

        $(".SorununCevapAlanı").slideUp();
        $(IslenecekAlan).parent().find(".SorununCevapAlani").slideToggle();
    }

    $.UrunDetayResmiDegistir = function (Klasor, ResimDegeri) {
        var ResimIcinDosyaYolu = "Resimler/UrunResimleri/" + Klasor + "/" + ResimDegeri;

        $("#BuyukResim").attr("src", ResimIcinDosyaYolu);
    }

    $.KrediKartiSecildi = function () {
        $(".KKAlanlari").css("display", "block");

    }

    $.BankaHavalesiSecildi = function () {
        $(".KKAlanlari").css("display", "none");
        $(".BHAlanlari").css("display", "block");
    }
});
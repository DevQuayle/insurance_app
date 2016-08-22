<style type="text/Css">
 #page1{
     margin:0 auto;
     font-family:'arial';
 }
    .bg{
        width: 190mm;
        position: absolute;
        left:7mm;
    }
    .numer_zamowienia{
        position: absolute;
        top: 117px;
        left: 400px;
    }

    .imie-nazwisko{
        position: absolute;
        top: 233px;
        left: 80px;
    }

    .pesel{
        position: absolute;
        top: 233px;
        left: 300px;
    }
    .telefon{
        position: absolute;
        top: 233px;
        left: 450px;
    }
    .email{
        position: absolute;
        top: 233px;
        left: 580px;
    }
    .adress{
        position: absolute;
        top: 262px;
        left: 80px;
    }

    .imie_nazwisko_uposazonego{
        position: absolute;
        top: 365px;
        left: 80px;
    }
    .data_ur_upozazonego{
        position: absolute;
        top:365px;
        left: 300px;
    }

    .imie_nazwisko_wspol{
        position: absolute;
        top:315px;
        left: 80px;
    }
    .pesel_wspolub{
        position: absolute;
        top:315px;
        left: 300px;
    }

 .bg2{
     width: 180mm;
     position: absolute;
     left:13mm;
 }



</style>
<page id="page1">
    <img src="assets/img/PDF.jpg" class="bg" style="" />
    <div class="numer_zamowienia"><?= $_POST['certificate']; ?></div>
    <div class="imie-nazwisko"> <?= $_POST['name'];?>  <?= $_POST['surname'];?></div>
    <div class="pesel"><?= $_POST['pesel'];?></div>
    <div class="telefon"><?= $_POST['phone_number'];?></div>
    <div class="email"><?= $_POST['mail']; ?></div>
    <div class="adress"><?= $_POST['street'];?> <?= $_POST['house_number'];?> / <?= $_POST['local_number'];?>, <?= $_POST['post_code'];?> <?= $_POST['city'];?></div>

    <div class="imie_nazwisko_wspol"><?= $_POST['name_co_insured'];?> <?= $_POST['surname_co_insured'];?></div>
    <div class="pesel_wspolub"><?= $_POST['pesel_co_insured'];?></div>

    <div class="imie_nazwisko_uposazonego"> <?= $_POST['name_salaried'];?> <?= $_POST['surname_salaried'];?></div>
    <div class="data_ur_upozazonego"><?= $_POST['born_date_salaried'];?></div>

</page>
<page>
    <img src="assets/img/PDF2.jpg" class="bg2" style="" />

</page>


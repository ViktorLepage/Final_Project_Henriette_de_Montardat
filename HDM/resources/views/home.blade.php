<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<link rel="stylesheet" href="{{asset('css/homepage.css')}}">
<link href="https://fonts.googleapis.com/css?family=Satisfy&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lora&display=swap" rel="stylesheet">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>homepage</title>
</head>

<body>
    <div id="pageContainer">
        <div id="contentWrap">
@include('layouts/headerTemplate')
<div class="card mx-auto mb-5" style="width:450px">
<img class="card-img-top" src="/images/homepagebackground4.jpg" alt="Card image">
<div class="card-img-overlay ">
    <div class="cardheader"><p>Henriette de Montardat</p></div>
    <div class="cardtitle"><p class="card-text font-italic mb-3">Le petit monde d'Henriette de Montardat</p></div>
    <div class="cardtext"><p class="card-text mb-3">Mes années d'expérience au service de la femme, des femmes, dans la haute joaillerie m'ont amené à créer Henriette de Montardat.</p></div>
    <div class="cardtext"><p class="card-text mb-3">Je crée, développe, commercialise des bijoux & accessoires & propose tous les mois des coups de cœur sous forme de collection capsule en quantité limitée.</p></div>
    <div class="cardtext"><p class="card-text mb-3">Je transforme vos bijoux de famille en pièce artistique, unique & moderne.</p></div>
    <div class="cardtext"><p class="card-text ">Mes créations se veulent comme des porte bonheur, des talismans portés avec joie, fierté & élégance.</p></div>
    <div class="cardtext"><p class="card-text mb-3">Sophie Rouxel</p></div>
  </div>
</div>
  <!--
<div id="style_homepage">
            <div><p class="titre_homepage"> Le petit monde d'Henriette de Montardat </p></div>
            <div><p class="paragraphe_homepage">Mes années d'expérience au service de la femme, des femmes, dans la haute joaillerie m'ont amené à créer Henriette de Montardat. Je crée, développe, commercialise des bijoux & accessoires & propose tous les mois des coups de cœur sous forme de collection capsule en quantité limitée. Je transforme vos bijoux de famille en pièce artistique, unique & moderne. Mes créations se veulent comme des porte bonheur, des talismans portés avec joie, fierté & élégance. Je vous attends dans mon univers. </p></div>
            <div><p class="signature_homepage"> Sophie Rouxel </p></div>

</div>
-->
<footer>
@include('layouts/footerTemplate')
</footer>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>

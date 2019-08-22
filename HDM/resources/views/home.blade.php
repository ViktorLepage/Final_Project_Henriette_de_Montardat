<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<link rel="stylesheet" href="{{asset('css/homepage.css')}}">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>homepage</title>
</head>

<body>
    @include('layouts/headerTemplate')
    <div id="pageContainer">
        <div id="contentWrap">
            <div class="card mx-auto mb-5" id="photo">
                <img class="card-img-top" src="/images/homepagebackground4.jpg" alt="Card image">
                <div class="card-img-overlay">

                    <section id="photoText">
                        <div class="cardtitle">
                            <p class="card-text font-italic mb-3">Le petit monde d'Henriette de Montardat</p>
                        </div>
                        <div class="cardtext">
                            <p class="card-text mb-3">Mes années d'expérience au service de la femme, des femmes, dans la haute joaillerie m'ont amené à créer Henriette de Montardat.</p>
                        </div>
                        <div class="cardtext">
                            <p class="card-text mb-3">Je crée, développe, commercialise des bijoux & accessoires & propose tous les mois des coups de cœur sous forme de collection capsule en quantité limitée.</p>
                        </div>
                        <div class="cardtext">
                            <p class="card-text mb-3">Je transforme vos bijoux de famille en pièce artistique, unique & moderne.</p>
                        </div>
                        <div class="cardtext">
                            <p class="card-text mb-3">Mes créations se veulent comme des porte bonheur, des talismans portés avec joie, fierté & élégance. Je vous attends dans mon univers.</p>
                        </div>
                        <div class="cardtext">
                            <p class="card-text mb-3">Sophie Rouxel</p>
                        </div>
                    </section>

                </div>
            </div>
</div>
</div>
@include('layouts/footerTemplate')
</body>
</html>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>homepage</title>

</head>

<body>
    <form action="{{ action('myAccountController@index') }}" Method="POST">
        @csrf
        <input type="submit" name="submit" value="submit">
    </form>
    {{-- <p class="titre_homepage"> Le petit monde d'Henriette de Montardat (titre) </p>

    <p class="paragraphe_homepage"> Mes années d'expérience au service de la femme , des femmes, dans la haute
        joaillerie m'ont amené à créer Henriette de Montardat. </p>

    <p class="paragraphe_hompepage"> Je crée, développe, commercialise des bijoux & accessoires & propose tous
        les mois des coups de cœur sous forme de collection capsule en quantité
        limitée. </p>

    <p class="paragraphe_homepage"> Je transforme vos bijoux de famille en pièce artistique, unique & moderne. </p>

    <p class="paragraphe_homepage"> Mes créations se veulent comme des porte bonheur, des talismans portés
        avec joie, fierté & élégance.</p>

    <p class="paragraphe_homepage"> Je vous attends dans mon univers. </p>

    <p class="signature_homepage"> Sophie Rouxel </p> --}}


</body>

</html>

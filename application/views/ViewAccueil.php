<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Devoir3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="JQuery/jquery-3.1.1.js"></script>
    <script src="JS/mesFonctions.js"></script>
    <script type="text/javascript">
        $
        (
            function()
            {
                $('#btnConnexion').click(Connexion);
                
            }
        );
    </script>

</head>
<body>
    <h1>Votre nom</h1>

    <input type="text" id="txtNom" name="txtNom">
    <br><br>
    <input type="button" value="Connexion" id="btnConnexion" OnClick=Connexion()>

        <div id="divRegions"></div><br><br>
        <?php
    foreach($lesRegions as $uneRegion)
    {
        echo "<input name='optRegions' onclick=AfficherVilles(this.value) type='radio' value='". $uneRegion->idRegion ."'>".$uneRegion->nomRegion.".$uneRegion->scoreRegion.""</br>";
    }
    ?>
        <div id="divVilles"></div>


</body>
</html>
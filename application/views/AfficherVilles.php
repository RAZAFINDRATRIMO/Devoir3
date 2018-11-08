<?php
foreach ($lesVilles as $uneVille)
{
    echo "<input name='optVilles' type='radio' value='". $uneVille->idVille ."'>".$uneVille->nomVille." - ".$uneVille->scoreVille."</br>";
}

echo "<input type='button' value = '+5 points' onclick='AjouterPoints()'>";
?>
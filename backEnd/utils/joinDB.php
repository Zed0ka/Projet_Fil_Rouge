<?php
// contacter la BDD
    $bdd = new PDO('mysql:host=localhost;dbname=partnerds', 'PTNDAdmin','adm1n!!P4nd?.3120', 
    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
?>
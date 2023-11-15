<?php

include 'includes/top.php';

?>

<div class="container">
    <div class="row">
        <div class="col-md-12" style="padding: 0px; margin: 0px;">
            <img src="img/slide-bidawa-4.png" width="100%" />
        </div>
    </div>
    <div class="row bg-white" style="margin-top: 25px;padding-bottom: 25px;">
        <div class="col-md-12">
            <?php
            if (isset($_POST['adhesion'])) {
                ini_set('display_errors', 1);
                error_reporting(E_ALL);
                //$to = "contact@bidawaplus.ma";
                $to = 'contact@bidawaplus.ma';
            
                $from = $_POST['email'];
            
                $subject = "Demande d'adhésion bidawaplus.ma : " . $_POST['nom'] . ' ' . $_POST['prenom'];
            
                $message =
                    '
                    <p><strong>Civilité : </strong> ' .
                    $_POST['civilite'] .
                    '</p>
                    <p><strong>Nom et prénom : </strong> ' .
                    $_POST['nom'] .
                    ' ' .
                    $_POST['prenom'] .
                    '</p>
                    <p><strong>Tél : </strong> ' .
                    $_POST['tel'] .
                    '</p>
                    <p><strong>E-mail : </strong> ' .
                    $_POST['email'] .
                    '</p>
                    <p><strong>Adresse : </strong> ' .
                    $_POST['adresse'] .
                    '</p>
                    <p><strong>Quartier : </strong> ' .
                    $_POST['quartier'] .
                    '</p>
                    <p><strong>Site Web : </strong> ' .
                    $_POST['siteWeb'] .
                    '</p>
                    <p><strong>Domaine d\'expertise principal : </strong> ' .
                    $_POST['DomaineExpertisePrincipal'] .
                    '</p>
                    <p><strong>Autre domaine d\'expertise  : </strong> ' .
                    $_POST['AutreDomaineExpertise'] .
                    '</p>
                    <p><strong>Biographie résumée : </strong> ' .
                    $_POST['Biographie'] .
                    '</p>
                    <p><strong>Quartier : </strong><br/>1- ' .
                    $_POST['principauxCentresInteret1'] .
                    '<br/>2- ' .
                    $_POST['principauxCentresInteret2'] .
                    '<br/>3- ' .
                    $_POST['principauxCentresInteret3'] .
                    '</p>
                    <p><strong>Votre suggestions et propositions :</strong><br/>1- ' .
                    $_POST['suggestionspropositions1'] .
                    '<br/>2- ' .
                    $_POST['suggestionspropositions2'] .
                    '<br/>3- ' .
                    $_POST['suggestionspropositions3'] .
                    '</p>
                    <p><strong>Etes vous déjà memebre d\'une ou plusieurs associations : </strong> ' .
                    $_POST['dejaMembre'] .
                    '</p>
                    <p><strong>Lesquelles :</strong><br/>1- ' .
                    $_POST['lesquelles1'] .
                    '<br/>2- ' .
                    $_POST['lesquelles2'] .
                    '<br/>3- ' .
                    $_POST['lesquelles3'] .
                    '</p>
                    <p><strong>Votre marraine ou votre parrain au sein bidawa plus : </strong> ' .
                    $_POST['marraineParrain'] .
                    '</p>
                    <p><strong>Montant de la cotisation annuelle souhaitée : </strong> ' .
                    $_POST['cotisation'] .
                    '</p>';
                $headers = 'MIME-Version: 1.0' . "\r\n";
                $headers .= 'Content-type:text/html;charset=UTF-8' . "\r\n";
                $headers .= 'From:' . $from;
            
                mail($to, $subject, $message, $headers);
            
                echo '<p style="color:#009adb!important;">Nous avons bien reçu votre demande d\'adhésion.<br/> Nous vous en remercions et nous reviendrons vers vous dans les plus brefs délais. </p>';
            } else {
                echo '<div class="alert alert-danger" role="alert">						
                                    <a href="#" class="alert-link">Une erreur c\'est produite lors de l\'envois de l\'email.</a>
                                  </div>';
            }
            
            ?>
            <a href="/">Cliquez ici pour vous rendre sur la page d'accueil</a>

        </div>

    </div>



</div>

<?php

include 'includes/footer.php';

?>

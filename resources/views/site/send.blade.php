@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row" >
		<div class="col-md-12" style="padding: 0px; margin: 0px;">
			<img src="img/slide-bidawa-4.png" width="100%"/>
		</div>
	</div>
	<div class="row bg-white" style="margin-top: 25px;padding-bottom: 25px;">

		<div class="col-md-12" >
        
 <?php
 
                    if(isset($_POST['envoyer'])){

                        ini_set( 'display_errors', 1 );
                    
                        error_reporting( E_ALL );
                    
						$to = "contact@bidawaplus.ma";
                    
                       	$from  = $_POST['email'];
                    
                        $subject = "Site Bidawaplus.ma : ".$_POST['fullname'];
                    
						$message = '
						<p><strong>Nom et prénom : </strong> '.$_POST['fullname'].'</p>
						<p><strong>Tél : </strong> '.$_POST['phone'].'</p>
						<p><strong>E-mail : </strong> '.$_POST['email'].'</p>
						<p><strong>Le choix : </strong> '.$_POST['choix'].'</p>
						<p><strong>Message : </strong> '.$_POST['message'].'</p>
						';
						$headers = "MIME-Version: 1.0" . "\r\n";
						$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                        $headers .= "From:" . $from;	
                    
                        mail($to,$subject,$message, $headers);
                    
						echo '<div class="alert alert-success" role="alert">						
                        <a href="#" class="alert-link">Merci : Votre demande a été envoyée avec succès.</a>
                      </div>';

                    }else{
						echo '<div class="alert alert-danger" role="alert">						
                        <a href="#" class="alert-link">Une erreur c\'est produite lors de l\'envois de l\'email.</a>
                      </div>';
					
					}

?>
			<a href="/">cliquez ici pour vous rendre sur la page d'accueil</a>
			
		</div>

    </div>	
    


</div>	
@endsection
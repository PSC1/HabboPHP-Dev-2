<?php
	session_start();
	define('CORE','CORE');
	$admin = true ;
	require'../includes/core.php';


		
	$infos = array();

	//Traitement du premier input
	$client = $_POST['client'];
	switch( $client ) {
		case "habbo_player": $infos['client'] = "player"; break;
		case "parent_habbo": $infos['client'] = "parent"; break;
		default: $infos['client'] = "nothig";
	}
	
	//Traitement du deuxi�me input
	$problem = $_POST['problem'];
	switch( $problem ) {
		case "habbo_credits": 		$infos['problem'] = "Un probl�me avec un/des achats de Cr�dits Habbo"; 		break;
		case "password_issue": 		$infos['problem'] = "Le mot de passe de mon compte/du compte de mon enfan";	break;
		case "ban_issue": 			$infos['problem'] = "Mon exclusion/ l�exclusion de mon enfant"; 			break;
		case "unauthorized_access": $infos['problem'] = "Le vol de mon compte/ le vol du compte de mon enfant"; break;
		case "missing_furni": 		$infos['problem'] = "Des meubles/Cr�dits manquent sur mon compte/sur le compte de mon enfant"; break;
		case "bug_technical": 		$infos['problem'] = "Un probl�me technique sur Habbo"; 						break;
		case "account_issue": 		$infos['problem'] = "Probl�me d�acc�s/de compte"; 							break;
		case "idea_share": 			$infos['problem'] = "J\'ai eu une (ou plusieurs id�es) pour Habbo"; 		break;
		case "business_enquiry": 	$infos['problem'] = "Une proposition de partenariat/marketing/publicit�"; 	break;
		default:					$infos['problem'] = "Ma question n�est pas dans la liste";
	}
	
	//Traitement du troisi�me input
	$comment = $_POST['comment'];
	if( empty($comment) ):
		$_SESSION['error'] = "Commentaire vide";
		die(/* L� y a une redirection */);
	endif;
	$infos['comment'] = $comment;
	
	//Traitement du quatri�me input
	$email = $_POST['email'];
	if(filter_var($email, FILTER_VALIDATE_EMAIL)){ 
		$infos['email'] = $email;
	}else {
		$_SESSION['error'] = "Email invalide";
		die(/* une autre redirection*/);
	}
	
	
	//Tout s'est bien d�roul� on v�rifie quand meme qu'on a 4 indices dans le tableau
	$i = 0;
	foreach( $infos as $key => $value):
		$i++;
	endforeach;

	if( $i == 4 ) {
		mysql_query("INSERT INTO habbophp_help_demand VALUES ('','".$user->id."','".safe($user->username,'SQL')."','".safe($infos['client'],'SQL')."', '".safe($infos['problem'],'SQL')."','".safe($infos['comment'],'SQL')."','".safe($infos['email'],'SQL')."')") or die(mysql_error());
		echo "ok";
	} else {
		die('non');
	}	
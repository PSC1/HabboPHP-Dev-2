<?php 
session_start();
define('CORE','CORE');
$admin = true ;
require '../../includes/core.php';

// Déclaration des variables
$ident=$idp=$ids=$idd=$codes=$code1=$code2=$code3=$code4=$code5=$datas='';
$idp = $config->starpassdoc;
// $ids n'est plus utilisé, mais il faut conserver la variable pour une question de compatibilité
$idd = $config->starpassacc;
$ident=$idp.";".$ids.";".$idd;
// On récupère le(s) code(s) sous la forme 'xxxxxxxx;xxxxxxxx'
if(isset($_POST['code1'])) $code1 = $_POST['code1'];
if(isset($_POST['code2'])) $code2 = ";".$_POST['code2'];
if(isset($_POST['code3'])) $code3 = ";".$_POST['code3'];
if(isset($_POST['code4'])) $code4 = ";".$_POST['code4'];
if(isset($_POST['code5'])) $code5 = ";".$_POST['code5'];
$codes=$code1.$code2.$code3.$code4.$code5;
// On récupère le champ DATAS
if(isset($_POST['DATAS'])) $datas = $_POST['DATAS'];
// On encode les trois chaines en URL
$ident=urlencode($ident);
$codes=urlencode($codes);
$datas=urlencode($datas);



/* Envoi de la requête vers le serveur StarPass
Dans la variable tab[0] on récupère la réponse du serveur
Dans la variable tab[1] on récupère l'URL d'accès ou d'erreur suivant la réponse du serveur */
$get_f=@file("http://script.starpass.fr/check_php.php?ident=$ident&codes=$codes&DATAS=$datas");
if(!$get_f)
{
exit("Votre serveur n'a pas accès au serveur de Starpass, merci de contacter votre hébergeur.");
}
$tab = explode("|",$get_f[0]);

if(!$tab[1]) $url = "http://script.starpass.fr/erreur.php";
else $url = $tab[1];

// dans $pays on a le pays de l'offre. exemple "fr"
$pays = $tab[2];
// dans $palier on a le palier de l'offre. exemple "Plus A"
$palier = urldecode($tab[3]);
// dans $id_palier on a l'identifiant de l'offre
$id_palier = urldecode($tab[4]);
// dans $type on a le type de l'offre. exemple "sms", "audiotel, "cb", etc.
$type = urldecode($tab[5]);
// vous pouvez à tout moment consulter la liste des paliers à l'adresse : http://script.starpass.fr/palier.php

// Si $tab[0] ne répond pas "OUI" l'accès est refusé
// On redirige sur l'URL d'erreur
if(substr($tab[0],0,3) != "OUI")
{

    redirection($config->url_site.'/shop.php?error');
    exit ;
}
else
{

		if(!isset($_POST['DATAS']) OR !is_numeric($_POST['DATAS'])) redirection($config->url_site.'/shop.php?error');
		if(!class_exists('Users'))	
			$user = new users(safe($_POST['DATAS'],'HTML'));
	  	if($user){
     	setCookie("CODE_BON", "1", 0);
      	$user->addJetons('starpass');
      	addLogsPaiement($user->username,'starpass');
      	redirection($config->url_site.'/shop.php?success');
      	}else redirection($config->url_site.'/shop.php?error');

}
?>

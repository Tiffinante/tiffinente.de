<?php

/**
index.php?site="case"
case entspricht den Link

.htaccess
links = link
rechts = seite
**/

switch ($_GET['site']) {

//news seiten		
	case 'news':
		include 'pages/news/news.php';
		break;
	case 'news/newlogo':
		include 'pages/news/newlogo.php';
		break;
	case 'news/ueber-uns':
		include 'pages/news/ueber-uns.php';
		break;
	case 'ueber-uns':
		include 'pages/news/ueber-uns.php';
		break;

//seiten
	case 'partner':
		include 'pages/partner/partner.php';
		break;

//Regeln
	case 'regeln':
		include 'pages/regeln/regeln.php';
		break;
	//TS
	case 'regeln/teamspeak':
		include 'pages/regeln/ts-regeln.php';
		break;
	case 'regeln/ts':
		include 'pages/regeln/ts-regeln.php';
		break;
	//DC
	case 'regeln/discord':
		include 'pages/regeln/dc-regeln.php';
		break;
	case 'regeln/dc':
		include 'pages/regeln/dc-regeln.php';
		break;
	//Forum
	case 'regeln/forum':
		include 'pages/regeln/forum-regeln.php';
		break;

//team seiten		
	case 'team':
		include 'pages/team/team.php';
		break;
	case 'team/admins':
		include 'pages/team/admins.php';
		break;
	case 'team/contents':
		include 'pages/team/contents.php';
		break;
	case 'team/developer':
		include 'pages/team/developer.php';
		break;
	case 'team/moderatoren':
		include 'pages/team/moderatoren.php';
		break;
	//teamler
	case 'team/tiffinante':
		include 'pages/team/member/tiffinante.php';
		break;
	case 'team/leflurex':
		include 'pages/team/member/leflurex.php';
		break;
	case 'team/jxn':
		include 'pages/team/member/jxn.php';
		break;
	case 'team/adriande':
		include 'pages/team/member/adriande.php';
		break;

//Weiterleitungen
	case 'forum':
		include 'pages/weiterleitungen/forum.php';
		break;
	case 'twitter':
		include 'pages/weiterleitungen/twitter.php';
		break;
	//Pornhub
	case 'pornhub':
		include 'pages/weiterleitungen/ph.php';
		break;
	case 'spass':
		include 'pages/weiterleitungen/ph.php';
		break;
	case 'patreon':
		include 'pages/weiterleitungen/patreon.php';
		break;
    //DC
    case 'discord':
        include 'pages/weiterleitungen/discord.php';
        break;
    case 'dc':
        include 'pages/weiterleitungen/discord.php';
        break;

//seiten
	case 'home':
		include 'pages/home.php';
		break;
	case 'kontakt':
		include 'pages/kontakt.php';
		break;
	case 'impressum':
		include 'pages/impressum.php';
		break;
	case 'datenschutz':
		include 'pages/impressum.php';
		break;
	//bewerben
	case 'bewerbung':
		include 'pages/bewerbung.php';
		break;
	case 'bewerben':
		include 'pages/bewerbung.php';
		break;

//TS
	case 'teamspeak':
		include 'pages/teamspeak.php';
		break;
	case 'ts':
		include 'pages/teamspeak.php';
		break;

//404
case '404':
    include '404.php';
    break;
//Home	
	default:
		include 'pages/home.php';
		break;
}

?>
<?php
switch ($_GET['page'])
{
	case 'blank':
		include 'layout/sub/blank.php';
	break;
	
	case 'houses':
		include 'layout/sub/houses.php';
	break;
	
	case 'news':
		include 'layout/sub/index.php';
	break;
	
	case 'login':
		include "layout/sub/". $_GET['page'] .".php";
	break;
	
	case 'recover':
		include "layout/sub/". $_GET['page'] .".php";
	break;
	
	case 'charactersearch':
		include "layout/sub/". $_GET['page'] .".php";
	break;
	
	case 'highscore':
		include "layout/sub/". $_GET['page'] .".php";
	break;
	
	case 'loggedin':
		include "layout/sub/". $_GET['page'] .".php";
	break;
	
	case 'whoisonline':
		include "layout/sub/". $_GET['page'] .".php";
	break;
	
	case 'map':
		include "layout/sub/". $_GET['page'] .".php";
	break;
	
	case 'monsters':
		include "layout/sub/". $_GET['page'] .".php";
	break;
	
	case 'quests':
		include "layout/sub/". $_GET['page'] .".php";
	break;
	
	case 'experiencetable':
		include "layout/sub/". $_GET['page'] .".php";
	break;
	
	case 'mechanics':
		include "layout/sub/". $_GET['page'] .".php";
	break;
	
	default:
		echo '<h2>Sub page not recognized.</h2><p>The sub page you requested is not recognized.</p>';
}
?>
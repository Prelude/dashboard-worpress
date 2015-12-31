<?php
/**
 * Prelude WordPress Dashboard (PWD) est un tableau de bord permettant de gérer plusieurs sites sous WordPress.
 * 
 * Fichier de configuration
 * 
 * @author Jean-François RENAULD - http://www.prelude-prod.fr/
 * @version 1.0.0
 * @package PWD
 */
define('gBASE_PATH', 'base/');					// dossier de la base de données
define('gBASE_NAME', 'ma-base-au-complet.xml');		// nom du fichier de la base de données

define('gWORDPRESS_API_CORE', 'https://api.wordpress.org/core/version-check/1.7/');	// WordPress Version Checker
define('gWORDPRESS_API_PLUGIN', 'http://api.wordpress.org/plugins/info/1.0/');	// url de l'API plugin Wordpress

define('gCACHE_PATH', 'cache/');				// dossier du cache
define('gCACHE_TIME_PLUGINS', 43200);			// durée du cache pour les plugins
define('gCACHE_TIME_VERSION', 43200);			// durée du cache pour Prelude Version
define('gCACHE_TIME_WORDPRESS', 43200);			// durée du cache pour WordPress Checker
define('gCACHE_TIME_DEFAULT', 3600);			// durée du cache par défaut

define('CONTROLECODE', 'un code de contrôle est toujours bon à prendre');

// la base de données
$gSettings = array();

include 'includes/functions.inc.php';

initSettings();

// affichage en plus gros en fonction du nombre de sites
if(count($gSettings['sites']['site']) > 12)  {
	$gViewHuge = FALSE;
	
} else {
	$gViewHuge = TRUE;
}

$gWordpress = getWordPressVersion();
$versionMaster = $gWordpress['offers'][0]['version'];
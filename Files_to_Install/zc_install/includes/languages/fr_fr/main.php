<?php
/**
 * @copyright Copyright 2003-2024 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: DrByte 2024 May 27 Modified in v2.1.0-alpha1 $
 */

return [
'META_TAG_TITLE' => 'Programme d\'installation de Zen Cart&reg;',
'HTML_PARAMS' => 'dir="ltr" lang="fr"',
'ZC_VERSION_STRING' => '%1$s v%2$s',
'TEXT_PAGE_HEADING_INDEX' => 'Inspection système',
'TEXT_INDEX_FATAL_ERRORS' => 'Quelques problèmes qui doivent être résolus avant de continuer',
'TEXT_INDEX_WARN_ERRORS' => 'Quelques autres problèmes : ',
'TEXT_INDEX_WARN_ERRORS_ALT' => 'Quelques problemes : ',
'TEXT_HEADER_MAIN' => 'CONSEIL : Les titres des champs sont des liens d\'aide cliquables qui expliquent la signification de chaque champ.',
'TEXT_INDEX_HEADER_MAIN' => 'CONSEIL : Les liens avec une <u>icône de point d\'interrogation <strong><i class="bi-question-circle"></i></strong></u> peuvent être cliqués pour expliquer plus en détail un champ de formulaire ou une erreur.',
'TEXT_INSTALLER_CHOOSE_LANGUAGE' => 'Langue du programme d\'installation',
'TEXT_HELP_CONTENT_CHOOSE_LANG' => 'Cette sélection de langue concerne uniquement le processus d\'installation.<br>Zen Cart&reg; est entièrement multilingue, prenant en charge <em>n\'importe quelle</em> langue (sous réserve qu\'un pack linguistique soit disponible/ayant été développé par la communauté).',
'TEXT_PAGE_HEADING_SYSTEM_SETUP' => 'Installation du système',
'TEXT_SYSTEM_SETUP_ADMIN_SETTINGS' => 'Paramètres d\'administration',
'TEXT_SYSTEM_SETUP_CATALOG_SETTINGS' => 'Paramètres du catalogue (vitrine)',
'TEXT_SYSTEM_SETUP_ADMIN_SERVER_DOMAIN' => 'Domaine du serveur',
'TEXT_SYSTEM_SETUP_ADMIN_SERVER_URL' => 'URL du serveur',
'TEXT_SYSTEM_SETUP_ADMIN_PHYSICAL_PATH' => 'Chemin physique du système d\'administration',
'TEXT_SYSTEM_SETUP_CATALOG_ENABLE_SSL' => 'Activer SSL pour la vitrine ?',
'TEXT_SYSTEM_SETUP_CATALOG_HTTP_SERVER_DOMAIN' => 'Domaine HTTP de la vitrine',
'TEXT_SYSTEM_SETUP_CATALOG_HTTP_URL' => 'URL HTTP de la vitrine',
'TEXT_SYSTEM_SETUP_CATALOG_HTTPS_SERVER_DOMAIN' => 'Domaine HTTPS de la vitrine',
'TEXT_SYSTEM_SETUP_CATALOG_HTTPS_URL' => 'URL HTTPS de la vitrine',
'TEXT_SYSTEM_SETUP_CATALOG_PHYSICAL_PATH' => 'Chemin physique de la vitrine',
'TEXT_SYSTEM_SETUP_AGREE_LICENSE' => 'Acceptez les termes de la licence : ',
'TEXT_SYSTEM_SETUP_CLICK_TO_AGREE_LICENSE' => '(Cochez la case pour accepter les termes de la licence GPL 2. Cliquez sur le titre dans la colonne de gauche pour afficher la licence.)',
'TEXT_SYSTEM_SETUP_ERROR_DIALOG_TITLE' => 'Il y a quelques problèmes',
'TEXT_SYSTEM_SETUP_ERROR_DIALOG_CONTINUE' => 'Continuer quand même',
'TEXT_SYSTEM_SETUP_ERROR_CATALOG_PHYSICAL_PATH' => 'Il semble y avoir un problème avec le ' . '%%TEXT_SYSTEM_SETUP_CATALOG_PHYSICAL_PATH%%',
'TEXT_PAGE_HEADING_DATABASE' => 'Configuration de la base de données',
'TEXT_DATABASE_HEADER_MAIN' => 'REMARQUE : vous devez créer votre base de données MySQL et l\'utilisateur de base de données correspondant, et accorder des autorisations à cet utilisateur, avant de continuer sur cette page. Cliquez sur les titres des colonnes de gauche ci-dessous pour obtenir de l\'aide sur la compréhension de chaque composant.',
'TEXT_DATABASE_SETUP_SETTINGS' => 'Paramètres de base',
'TEXT_DATABASE_SETUP_DB_HOST' => 'Hôte de la base de données : ',
'TEXT_DATABASE_SETUP_DB_USER' => 'Utilisateur de la base de données : ',
'TEXT_DATABASE_SETUP_DB_PASSWORD' => 'Mot de passe de la base de données : ',
'TEXT_DATABASE_SETUP_DB_NAME' => 'Nom de la base de données : ',
'TEXT_DATABASE_SETUP_DEMO_SETTINGS' => 'Données de démonstration',
'TEXT_DATABASE_SETUP_LOAD_DEMO' => 'Charger les données de démonstration',
'TEXT_DATABASE_SETUP_LOAD_DEMO_DESCRIPTION' => 'Charger les données de démonstration dans cette base de données ?',
'TEXT_DATABASE_SETUP_ADVANCED_SETTINGS' => 'Réglages avancés',
'TEXT_DATABASE_SETUP_DB_CHARSET' => 'Jeu de caractères de la base de données : ',
'TEXT_DATABASE_SETUP_DB_PREFIX' => 'Préfixe de la base de données : ',
'TEXT_DATABASE_SETUP_SQL_CACHE_METHOD' => 'Méthode de cache SQL :',
'TEXT_DATABASE_SETUP_JSCRIPT_SQL_ERRORS1' => 'Certaines erreurs se sont produites lors de l\'exécution du fichier d\'installation SQL',
'TEXT_DATABASE_SETUP_JSCRIPT_SQL_ERRORS2' => '<br>Veuillez consulter les journaux d\'erreurs pour plus de détails',
'TEXT_DATABASE_SETUP_CHARSET_OPTION_UTF8MB4' => 'utf8mb4 (Paramètres par défaut)',
'TEXT_DATABASE_SETUP_CHARSET_OPTION_UTF8' => 'utf8 (ancien format)',
'TEXT_DATABASE_SETUP_CHARSET_OPTION_LATIN1' => 'latin1 (format beaucoup plus ancien)',
'TEXT_DATABASE_SETUP_CACHE_TYPE_OPTION_NONE' => 'Pas de mise en cache SQL',
'TEXT_DATABASE_SETUP_CACHE_TYPE_OPTION_DATABASE' => 'Base de données',
'TEXT_DATABASE_SETUP_CACHE_TYPE_OPTION_FILE' => 'Fichier',
'TEXT_EXAMPLE_DB_HOST' => 'généralement "localhost"',
'TEXT_EXAMPLE_DB_USER' => 'entrez votre nom d\'utilisateur MySQL',
'TEXT_EXAMPLE_DB_PWD' => 'entrez le mot de passe de votre utilisateur MySQL',
'TEXT_EXAMPLE_DB_PREFIX' => 'usually best left blank, or use zen_',
'TEXT_EXAMPLE_DB_NAME' => 'entrez le nom de votre base de données MySQL',
'TEXT_EXAMPLE_CACHEDIR' => 'pointe généralement vers l\'équivalent du dossier /your/user/home/public_html/zencart/cache',
'TEXT_DATABASE_SETUP_CONNECTION_ERROR_DIALOG_TITLE' => 'Il y a quelques problèmes',
'TEXT_CREATING_DATABASE' => 'Création d\'une base de données',
'TEXT_LOADING_CHARSET_SPECIFIC' => 'Chargement de données spécifiques au jeu de caractères',
'TEXT_LOADING_DEMO_DATA' => 'Chargement des données de démonstration',
'TEXT_LOADING_PLUGIN_DATA' => 'Chargement de SQL pour les plugins préinstallés',
'TEXT_LOADING_PLUGIN_UPGRADES' => 'Chargement de SQL pour les mises à niveau du plugin',
'TEXT_COULD_NOT_UPDATE_BECAUSE_ANOTHER_VERSION_REQUIRED' => 'Impossible de mettre à jour vers la version %1$s. Nous détectons que vous disposez actuellement de v%2$s et devons d\'abord effectuer les mises à jour pour accéder à la version %3$s.',
'TEXT_PAGE_HEADING_ADMIN_SETUP' => 'Configuration de l\'administrateur',
'TEXT_ADMIN_SETUP_USER_SETTINGS' => 'Paramètres de l\'administrateur',
'TEXT_ADMIN_SETUP_USER_NAME' => 'Nom du superadministrateur : ',
'TEXT_EXAMPLE_USERNAME' => 'par ex. : Bill',
'TEXT_ADMIN_SETUP_USER_EMAIL' => 'E-mail du superadministrateur : ',
'TEXT_EXAMPLE_EMAIL' => 'par ex. : mon_email@exemple.com',
'TEXT_ADMIN_SETUP_USER_EMAIL_REPEAT' => '... Retapez l\'e-mail : ',
'TEXT_ADMIN_SETUP_USER_PASSWORD' => 'Mot de passe administrateur : ',
'TEXT_ADMIN_SETUP_MATCHING_EMAIL' => 'Une adresse e-mail valide correspondante est requise.',
'TEXT_ADMIN_SETUP_USER_PASSWORD_HELP' => '<strong>RAPPELEZ-VOUS CECI !!</strong> : Vous trouverez ci-dessous votre mot de passe temporaire initial pour votre compte de superadministrateur. Veuillez vous assurer d\'en prendre note.',
'TEXT_ADMIN_SETUP_ADMIN_DIRECTORY' => 'Répertoire administrateur : ',
'TEXT_ADMIN_SETUP_ADMIN_DIRECTORY_HELP_DEFAULT' => 'Nous n\'avons pas pu changer automatiquement le nom de votre répertoire administrateur. Vous devez le renommer "admin" avant de pouvoir accéder à la zone d\'administration.',
'TEXT_ADMIN_SETUP_ADMIN_DIRECTORY_HELP_NOT_ADMIN_CHANGED' => 'Nous n\'avons pas modifié automatiquement votre répertoire admin car il semble déjà avoir été modifié.',
'TEXT_ADMIN_SETUP_ADMIN_DIRECTORY_HELP_CHANGED' => 'Le répertoire d’administration de votre boutique a peut-être été automatiquement renommé. Le nom actuel est indiqué ci-dessous. Vous pouvez changer ce nom en autre chose, excepté le nom par défaut ("admin").',
'TEXT_PAGE_HEADING_COMPLETION' => 'Configuration terminée',
'TEXT_COMPLETION_HEADER_MAIN' => '',
'TEXT_COMPLETION_INSTALL_COMPLETE' => '',
'TEXT_COMPLETION_INSTALL_LINKS_BELOW' => 'Les liens pour accéder au tableau de bord de votre zone d\'administration et à la vitrine de votre boutique sont présentés ci-dessous :',
'TEXT_COMPLETION_UPGRADE_COMPLETE' => 'Félicitations, la mise à niveau de votre base de données pour l\'application principale Zen Cart est maintenant terminée.<br>Assurez-vous également de mettre à niveau tous les plugins que vous avez installés.',
'TEXT_COMPLETION_ADMIN_DIRECTORY_WARNING' => 'Votre répertoire admin n\'a pas pu être renommé automatiquement, vous devrez renommer votre répertoire admin avant d\'y accéder.',
'TEXT_COMPLETION_INSTALLATION_DIRECTORY_WARNING' => 'Vous devez <strong>maintenant</strong> supprimer le répertoire "zc_install" de votre serveur.',
'TEXT_COMPLETION_INSTALLATION_DIRECTORY_EXPLANATION' => 'L\'accès administrateur est désactivé jusqu\'à ce que ce répertoire soit supprimé, pour empêcher des personnes non autorisées d\'utiliser le programme d\'installation et d\'écraser votre installation.',
'TEXT_COMPLETION_CATALOG_LINK_TEXT' => 'Votre vitrine',
'TEXT_COMPLETION_ADMIN_LINK_TEXT' => 'Votre tableau de bord d\'administration',
'TEXT_PAGE_HEADING_DATABASE_UPGRADE' => 'Mise à niveau de la base de données',
'TEXT_DATABASE_UPGRADE_HEADER_MAIN' => '',
'TEXT_DATABASE_UPGRADE_STEPS_DETECTED' => 'Votre base de données a été examinée et la liste suivante présente les étapes de mise à niveau requises.<br> Veuillez vous assurer d\'avoir une sauvegarde <em>vérifiée</em> de votre base de données avant de poursuivre ce processus de mise à niveau/modification.',
'TEXT_DATABASE_UPGRADE_LEGEND_UPGRADE_STEPS' => 'Veuillez confirmer les étapes de mise à niveau souhaitées',
'TEXT_DATABASE_UPGRADE_ADMIN_CREDENTIALS' => 'Informations d\'identification du superadministrateur',
'TEXT_VALIDATION_ADMIN_CREDENTIALS' => 'Pour autoriser la mise à niveau de la base de données, vous devez saisir un nom d\'utilisateur et un mot de passe administrateur avec les autorisations de SuperUser dans votre boutique.',
'TEXT_HELP_TITLE_UPGRADEADMINNAME' => '%%TEXT_DATABASE_UPGRADE_ADMIN_CREDENTIALS%%',
'TEXT_HELP_CONTENT_UPGRADEADMINNAME' => 'Pour autoriser la mise à niveau de la base de données, vous devez saisir un nom d\'utilisateur et un mot de passe administrateur avec des autorisations de superutilisateur (c\'est-à-dire sans restriction) dans votre boutique.<br>Ce seront le nom d\'utilisateur et le mot de passe que vous utiliserez pour vous connecter à la zone d\'administration de votre boutique.<br>(Il ne s\'agit PAS de votre mot de passe FTP, ni du mot de passe de votre panneau de contrôle d\'hébergement. Personne ne connaît ce mot de passe sauf vous ou le propriétaire de votre boutique. Vous ne pouvez pas l\'obtenir auprès de votre société d\'hébergement.)<br>Si vous n\'avez plus accès à votre boutique, que vous ne connaissez aucun mot de passe administrateur valide et que vous ne parvenez pas à vous connecter à la page d\'administration de votre boutique, vous pouvez effectuer une réinitialisation agressive du mot de passe en suivant les instructions de cet article : <a href="https://docs.zen-cart.com/user/troubleshooting/reset_admin_password/" rel="noopener" target="_blank">https://docs.zen-cart.com/user/troubleshooting/reset_admin_password/</a>.',
'TEXT_DATABASE_UPGRADE_ADMIN_USER' => 'Nom d\'utilisateur',
'TEXT_DATABASE_UPGRADE_ADMIN_PASSWORD' => 'Mot de passe',
'TEXT_HELP_TITLE_UPGRADEADMINPWD' => 'Mot de passe administrateur pour la mise à niveau',
'TEXT_HELP_CONTENT_UPGRADEADMINPWD' => '%%TEXT_HELP_CONTENT_UPGRADEADMINNAME%%',
'TEXT_VALIDATION_ADMIN_PASSWORD' => 'Un mot de passe valide est requis',
'TEXT_ERROR_ADMIN_CREDENTIALS' => 'Impossible de vérifier les informations d\'identification d\'administrateur que vous avez fournies.<br><br>' . '%%TEXT_HELP_CONTENT_UPGRADEADMINNAME%%',
'TEXT_UPGRADE_IN_PROGRESS' => 'Mise à niveau en cours. La progression de chaque étape est indiquée ci-dessous...',
'TEXT_UPGRADE_TO_VER_X_COMPLETED' => 'Mise à niveau vers la version %s terminée.',
'TEXT_CANNOT_DETECT_VERSION' => 'ERREUR FATALE : Impossible de détecter la version existante de la base de données Zen Cart. Soit elle est trop ancienne (antérieure à la v1.2.6, auquel cas effectuez d\'abord une mise à niveau vers la v1.2.6), soit elle est sérieusement endommagée.',
'TEXT_NO_REMAINING_UPGRADE_STEPS' => 'Ça a l\'air bien ! Il semble qu’aucune autre étape de mise à niveau ne soit requise.',
'TEXT_CONTINUE' => 'Continuer',
'TEXT_CANCEL' => 'Annuler',
'TEXT_CONTINUE_FIX' => 'Retourner et réparer',
'TEXT_REFRESH' => 'Rafraîchir',
'TEXT_UPGRADE' => 'Mise à niveau ...',
'TEXT_CLEAN_INSTALL' => 'Nouvelle installation',
'TEXT_UPDATE_CONFIGURE' => 'Mettre à jour le fichier de configuration',
'TEXT_NAVBAR_SYSTEM_INSPECTION' => 'Inspection du système',
'TEXT_NAVBAR_SYSTEM_SETUP' => 'Installation du système',
'TEXT_NAVBAR_DATABASE_UPGRADE' => 'Mise à niveau de la base de données',
'TEXT_NAVBAR_DATABASE_SETUP' => 'Configuration de la base de données',
'TEXT_NAVBAR_ADMIN_SETUP' => 'Configuration de l\'administration',
'TEXT_NAVBAR_COMPLETION' => 'Terminé',
'TEXT_INDEX_ALERTS' => 'Alertes',
'TEXT_ERROR_PROBLEMS_WRITING_CONFIGUREPHP_FILES' => 'Des problèmes sont survenus lors de la préparation et du stockage des fichiers configure.php. VOTRE INSTALLATION N\'EST PAS TERMINÉE !<br>Des détails techniques supplémentaires peuvent être trouvés dans votre dossier /logs.',
'TEXT_ERROR_COULD_NOT_READ_CFGFILE_TEMPLATE' => 'Impossible de lire la présentation du fichier de configuration principal : %s. Veuillez vous assurer que le fichier existe et est lisible.',
'TEXT_ERROR_COULD_NOT_WRITE_CONFIGFILE' => 'Impossible d\'écrire le fichier de configuration généré : %s. Veuillez vous assurer que le fichier existe et est accessible en écriture.',
'TEXT_ERROR_STORE_CONFIGURE' => 'Le fichier du catalogue /includes/configure.php n\'existe pas, n\'est pas lisible ou n\'est pas accessible en écriture',
'TEXT_ERROR_ADMIN_CONFIGURE' => 'Le fichier de l\'Administration /admin/includes/configure.php n\'existe pas, n\'est pas lisible ou n\'est pas accessible en écriture',
'TEXT_ERROR_PHP_VERSION' => str_replace(["\n", "\r"], '', 'Version PHP incorrecte.<p>La version PHP que vous utilisez (' . PHP_VERSION . ') n\'est pas adaptée.</p><p>Cette version de Zen Cart&reg; est compatible avec les versions PHP 8.0 à 8.3, mais 8.2.x ou supérieur est recommandé.<br>Consultez le site Web <a href="https://www.zen-cart.com">www.zen-cart.com</a> pour connaître la dernière version de Zen Cart&reg;.</p><p>Pour plus d\'informations sur la compatibilité des versions et la configuration requise du serveur, consultez la <a href="https://docs.zen-cart.com/user/first_steps/server_requirements/">Configuration requise du serveur Zen Cart</a>.</p>'),
'TEXT_ERROR_PHP_VERSION_RECOMMENDED' => '<p>Pour une sécurité et une compatibilité maximales, vous devez utiliser PHP %s ou une version plus récente. Cette installation peut se poursuivre, mais notez que votre site ne sera pas conforme à la norme PCI si vous exécutez un logiciel obsolète.</p><p>Consultez le <a href="https://www.php.net/supported- versions">Site Web PHP</a> pour plus de détails.</p><p>Pour plus d\'informations sur la compatibilité des versions et les exigences du serveur, consultez <a href="https://docs.zen-cart.com/user/first_steps/ server_requirements/">Exigences du serveur Zen Cart</a></p>',
'TEXT_ERROR_PHP_VERSION_MIN' => 'La version PHP doit être supérieure ou égale à %s',
'TEXT_ERROR_PHP_VERSION_MAX' => 'La version PHP doit être inférieure ou égale à %s',
'TEXT_ERROR_MYSQL_SUPPORT' => 'Problèmes avec votre support MySQL (mysqli). Il semble que votre serveur ne dispose pas de l\'extension mysqli pour PHP, que nous utilisons pour nous connecter à votre base de données. Contactez votre société d’hébergement pour obtenir de l’aide si vous rencontrez des erreurs de base de données lors de la procédure.',
'TEXT_ERROR_PDOMYSQL_SUPPORT' => 'Problèmes avec votre support MySQL (pdo_mysql). Il semble que votre serveur ne dispose pas de l\'extension pdo_mysql pour PHP, et sans elle, nous ne pouvons pas nous connecter à votre base de données. Contactez votre société d’hébergement pour obtenir de l’aide.',
'TEXT_ERROR_PDOSQLITE_SUPPORT' => 'Il semble que votre serveur ne dispose pas de l\'extension pdo_sqlite pour PHP, utilisée pour un petit stockage temporaire et pour les tests d\'applications. Contactez votre société d’hébergement pour obtenir de l’aide.',
'TEXT_ERROR_PHPZIP_SUPPORT' => 'Il semble que votre serveur ne dispose pas de l\'extension php-zip pour PHP, utilisée pour décompresser les fichiers zip lors de l\'installation des images de données de démonstration. Contactez votre société d\'hébergement pour obtenir de l\'aide.',
'TEXT_ERROR_LOG_FOLDER' => 'le dossier ' . DIR_FS_LOGS . ' n\'est pas accessible en écriture',
'TEXT_ERROR_CACHE_FOLDER' => 'le dossier ' . DIR_FS_SQL_CACHE . ' n\'est pas accessible en écriture',
'TEXT_ERROR_IMAGES_FOLDER' => 'Le dossier /images n\'est pas accessible en écriture',
'TEXT_ERROR_DEFINEPAGES_FOLDER' => 'Le dossier /includes/linguals/english/html_includes n\'est pas accessible en écriture',
'TEXT_ERROR_MEDIA_FOLDER' => 'Le dossier /media n\'est pas accessible en écriture',
'TEXT_ERROR_PUB_FOLDER' => 'Le dossier ' . DIR_FS_DOWNLOAD_PUBLIC . ' n\'est pas accessible en écriture',
'TEXT_ERROR_NGINX_FOLDER' => 'Le dossier /zc_install/includes/nginx_conf n\'est pas accessible en écriture',
'TEXT_ERROR_CONFIGURE_REQUIRES_UPDATE' => 'Votre fichier configure.php est une ancienne version et nécessite une mise à jour avant que nous puissions continuer.',
'TEXT_ERROR_HTACCESS_SUPPORT' => 'La prise en charge des fichiers « .htaccess » n\'est pas activée ou ne fonctionne pas correctement.<br>[ <i><strong>NOTE :</strong> Si vous utilisez Nginx, continuez jusqu\' à la <u>FIN</u> de cet assistant d\'installation pour obtenir des informations sur la résolution de ce problème.<i> ]',
'TEXT_ERROR_SESSION_SUPPORT' => 'Problèmes avec la prise en charge des sessions',
'TEXT_ERROR_SESSION_SUPPORT_USE_TRANS_SID' => 'paramètre ini session.use_trans_sid est activé',
'TEXT_ERROR_SESSION_SUPPORT_AUTO_START' => 'paramètre ini session.auto_start est activé',
'TEXT_ERROR_DB_CONNECTION' => 'Problèmes de connexion à la base de données',
'TEXT_ERROR_DB_CONNECTION_DEFAULT' => 'Problèmes possibles avec la connexion à la base de données',
'TEXT_ERROR_DB_CONNECTION_UPGRADE' => 'Problèmes de connexion à la base de données basés sur les entrées de votre configure.php actuel',
'TEXT_ERROR_SET_TIME_LIMIT' => 'Paramètre max_execution_time désactivé',
'TEXT_ERROR_GD' => 'Extension GD non activée',
'TEXT_ERROR_INTL' => 'Extension INTL non activée. Requis pour la gestion des dates et la prise en charge des paramètres régionaux.',
'TEXT_ERROR_MBSTRING' => 'L\'extension MBSTRING n\'est pas activée. Nécessaire pour la prise en charge des caractères multioctets (lettres accentuées et la plupart des langues non anglaises).',
'TEXT_ERROR_JSON' => 'Extension JSON non activée. Requis pour analyser les données dans de nombreuses parties de l’application.',
'TEXT_ERROR_FILEINFO' => 'Extension Fileinfo non activée. Utilisé pour calculer la taille des fichiers.',
'TEXT_ERROR_ZLIB' => 'Extension Zlib non activée',
'TEXT_ERROR_OPENSSL' => 'Extension Openssl non activée',
'TEXT_ERROR_CURL' => 'Problèmes avec l\'extension CURL - PHP signale que CURL n\'est pas présent.',
'TEXT_ERROR_UPLOADS' => 'L\'extension Upload de PHP n\'est pas activée',
'TEXT_ERROR_XML' => 'L\'extension XML de PHP n\'est pas activée',
'TEXT_ERROR_GZIP' => 'L\'extension GZip de PHP n\'a pas été trouvée',
'TEXT_ERROR_EXTENSION_NOT_LOADED' => 'L\'extension %s ne semble pas être chargée',
'TEXT_ERROR_FUNCTION_DOES_NOT_EXIST' => 'La fonction PHP %s n\'existe pas',
'TEXT_ERROR_CURL_LIVE_TEST' => 'Impossible d\'utiliser CURL pour contacter un serveur',
'TEXT_ERROR_HTTPS' => 'CONSEIL DE PRO : Si possible, vous devez déjà avoir installé un certificat SSL et exécuter le programme d\'installation en utilisant "https://"',
'TEXT_ERROR_SUCCESS_EXISTING_CONFIGURE' => 'Un fichier configure.php existant a été trouvé, indiquant une installation préexistante.Vous pouvez effectuer une mise à niveau en utilisant le bouton ci-dessous (s\'il n\'y a pas de bouton Mettre à niveau, peut-être que votre DB_PREFIX ne correspond pas à la base de données ?). ATTENTION : procéder à une nouvelle installation effacera les données existantes.',
'TEXT_ERROR_SUCCESS_EXISTING_CONFIGURE_NO_UPDATE' => 'Un fichier configure.php existant a été trouvé. Cependant, votre base de données semble être à jour. Cela suggère que vous êtes sur un site en direct. ATTENTION : la poursuite d\'une nouvelle installation supprimera le contenu actuel de la base de données ! Êtes-vous sûr de vouloir poursuivre avec une nouvelle installation ?',
'TEXT_ERROR_MULTIPLE_ADMINS_NONE_SELECTED' => 'Plusieurs répertoires d\'administration semblent exister. Supprimez les répertoires d\'administration en double et cliquez sur Actualiser ou sélectionnez le répertoire d\'administration correct ci-dessous et cliquez sur Actualiser.',
'TEXT_ERROR_MULTIPLE_ADMINS_SELECTED' => 'Plusieurs répertoires d\'administration semblent exister. Si le répertoire sélectionné ci-dessous est incorrect, veuillez en choisir un autre et cliquez sur Actualiser.',
'TEXT_ERROR_MYSQL_VERSION' => 'La base de données du serveur ne répond pas à la version minimale. MySQL : %1$s ou MariaDB : %2$s',
'TEXT_ERROR_SUCCESS_NO_ERRORS' => 'Aucune erreur n\'a été détectée sur votre système. Vous pouvez continuer avec l\'une des options d\'installation (ou de mise à niveau si disponible) ci-dessous.',
'TEXT_UPGRADE_INFO' => '%%TEXT_UPGRADE%% : inspectera votre base de données et proposera ensuite les étapes nécessaires pour mettre à niveau vers la version actuelle (ajout de nouveaux champs/modification des champs existants). Il s\'agit d\'un processus non destructif, mais comme pour toutes les modifications, vous devez vous assurer que vous disposez d\'une sauvegarde vérifiée de votre base de données avant de continuer.',
'TEXT_CLEAN_INSTALL_INFO' => '%%TEXT_CLEAN_INSTALL%% : ramènera la base de données à un état neuf, supprimant toutes les données. Facultativement, les données de démonstration peuvent être chargées dans le cadre de ce processus.',
'TEXT_FORM_VALIDATION_REQUIRED' => 'Requis',
'TEXT_FORM_VALIDATION_AGREE_LICENSE' => 'Vous devez accepter les termes de la licence',
'TEXT_FORM_VALIDATION_CATALOG_HTTPS_URL' => 'Une URL est requise ici, même si vous avez temporairement choisi de ne pas encore activer SSL. Essayez d\'utiliser votre nom de domaine habituel.',
'TEXT_NAVBAR_INSTALLATION_INSTRUCTIONS' => 'Instructions d\'installation',
'TEXT_NAVBAR_FORUM_LINK' => 'Forum',
'TEXT_HELP_TITLE_HTACCESSSUPPORT' => 'Prise en charge .htaccess',
'TEXT_HELP_CONTENT_HTACCESSSUPPORT' => 'Il semble y avoir un problème avec la prise en charge des fichiers ".htaccess".<br>Fichiers et dossiers sensibles sur votre site, qui devraient normalement être bloqués par les règles de sécurité dans les fichiers ".htaccess" intégrés fournis avec Zen Cart, sont actuellement accessibles.<br><br>Causes possibles :
<ul style="list-style-type:square"><li>Vous n\'utilisez peut-être pas Apache comme serveur Web (les fichiers ".htaccess" sont uniques au serveur Web Apache), ou,</li><li>La prise en charge de ".htaccess" est désactivée ou mal configurée, ou,</li><li>Les fichiers ".htaccess" fournis avec Zen Cart n\'ont pas été téléchargés sur votre site.<br><strong><i>Les fichiers commençant par ".", tels que les fichiers ".htaccess", sont généralement traités comme des fichiers "cachés" et votre programme FTP n\'a peut-être pas réussi à les télécharger si vous avez désactivé l\'affichage et/ou le transfert de ces fichiers cachés.</i></strong></li></ul><br>
Vous pouvez procéder à l\'installation malgré cette situation, mais veuillez noter que votre site sera moins sécurisé qu\'il ne devrait l\'être (si vous utilisez le serveur Web Apache).<br><br>Si vous utilisez le serveur Web Nginx, veuillez procéder à l\'installation et sécuriser votre installation à l\'aide des directives Nginx équivalentes fournies sous « <strong>Informations de sécurité importantes pour Nginx</strong> » dans la section « Installation terminée » de cet assistant d\'installation.<br><br>Si vous ne savez pas quel serveur Web est utilisé, partez du principe qu\'il s\'agit du serveur Web Apache et demandez de l\'aide pour activer la prise en charge de « .htaccess » auprès de votre fournisseur d\'hébergement Web.<br><br>',
'TEXT_HELP_TITLE_FOLDERPERMS' => 'Autorisations de dossier',
'TEXT_HELP_CONTENT_FOLDERPERMS' => 'Les autorisations pour ce dossier ne sont pas définies correctement. Ce dossier doit être accessible en écriture. Vous pouvez en savoir plus sur les autorisations des dossiers sur <a href="https://docs.zen-cart.com/user/installing/permissions/" rel="noopener" target="_blank">https://docs.zen-cart.com/user/installing/permissions/</a>',
'TEXT_HELP_TITLE_CONNECTIONDATABASECHECK' => 'Connexion initiale à la base de données',
'TEXT_HELP_CONTENT_CONNECTIONDATABASECHECK' => 'Nous avons essayé de nous connecter à MySQL en utilisant une connexion localhost. Cet échec ne signifie pas nécessairement que MySQL ne fonctionne pas, car certains hôtes nécessitent une adresse IP ou un nom d\'hôte pour la base de données MySQL.<br><br>Si vous utilisez effectivement localhost pour votre serveur de base de données, vous devez vérifier que MySQL fonctionne correctement.',
'TEXT_HELP_TITLE_CHECKCURL' => '%%TEXT_ERROR_CURL%%',
'TEXT_HELP_CONTENT_CHECKCURL' => 'CURL est un processus en arrière-plan utilisé par PHP dans votre boutique pour se connecter à des serveurs et services externes tels que des fournisseurs de paiement et d\'expédition afin de traiter les transactions ou d\'obtenir des devis d\'expédition en temps réel. Il est également utilisé pour vérifier et vous informer des mises à jour de Zen Cart ou des extensions installées. Lors du test de la fonctionnalité CURL sur votre serveur, nous n\'avons pas pu établir de connexion. Cela pourrait indiquer un problème de configuration de votre serveur web. Veuillez contacter votre hébergeur pour obtenir de l\'aide afin d\'activer la prise en charge de CURL avec PHP sur votre serveur. Si vous êtes un développeur et que vous utilisez ce site sur un serveur de développement hors ligne, il n\'est pas surprenant que CURL ne puisse pas se connecter pour ce test. CURL n\'est pas nécessaire au développement (ce problème peut donc être ignoré temporairement), sauf pour tester l\'activité transactionnelle, auquel cas une connexion en ligne sera requise.',
'TEXT_HELP_TITLE_GZIP' => 'Extension PHP GZip non détectée.',
'TEXT_HELP_CONTENT_GZIP' => 'GZip est couramment utilisé pour compresser le contenu des pages Web, afin d\'en réduire la taille, avant de le transmettre au navigateur, pour qu\'il soit transmis plus rapidement. Avec le serveur Web Apache, il doit être activé dans les paramètres de configuration PHP ; avec le serveur Web Nginx, il peut être activé directement dans les paramètres Nginx. Votre hébergeur peut s\'en occuper pour vous.<br><br>[ <i><strong>REMARQUE :</strong> Pour être clair : ceci peut être ignoré si vous utilisez Nginx et gérez GZip dans Nginx</i> (car nous ne pouvons pas le détecter facilement et automatiquement lorsque nginx est utilisé). ]',
'TEXT_HELP_TITLE_ADMINSERVERDOMAIN' => 'Domaine du serveur d\'administration',
'TEXT_HELP_CONTENT_ADMINSERVERDOMAIN' => 'Saisissez le nom de domaine pour accéder à votre zone d\'administration. Il est fortement recommandé d\'utiliser HTTPS (SSL) pour cette adresse. Consultez votre société d\'hébergement pour savoir comment activer SSL sur votre site.',
'TEXT_HELP_TITLE_ENABLESSLCATALOG' => 'Activer SSL pour la vitrine ?',
'TEXT_HELP_CONTENT_ENABLESSLCATALOG' => 'Cochez cette case si vous disposez d\'un certificat SSL sur votre compte d\'hébergement et que vous souhaitez que Zen Cart&reg; l\'utilise lors de l\'affichage de pages sensibles telles que Connexion, Mon compte, Paiement, etc.',
'TEXT_HELP_TITLE_HTTPSERVERCATALOG' => 'Domaine HTTP de la vitrine',
'TEXT_HELP_CONTENT_HTTPSERVERCATALOG' => 'Entrez la partie domaine de l\'URL de votre boutique. Par exemple: http://www.example.com',
'TEXT_HELP_TITLE_HTTPURLCATALOG' => 'URL HTTP de la vitrine',
'TEXT_HELP_CONTENT_HTTPURLCATALOG' => 'Entrez l\'URL complète de votre boutique. Par exemple: http://www.example.com/zencart/',
'TEXT_HELP_TITLE_HTTPSSERVERCATALOG' => 'Domaine HTTPS de la vitrine',
'TEXT_HELP_CONTENT_HTTPSSERVERCATALOG' => 'Si vous avez coché la case ci-dessus pour activer l\'utilisation de SSL lors du paiement, vous devez saisir ici la partie domaine de l\'URL https de votre boutique.<br>Il s\'agit généralement de quelque chose comme :<br>https://www.example.com<br>https://www.hostingcompany.com/~username<br>https://www.hostingcompany.com/~username/subdomain.com',
'TEXT_HELP_TITLE_HTTPSURLCATALOG' => 'URL HTTPS de la vitrine',
'TEXT_HELP_CONTENT_HTTPSURLCATALOG' => 'Entrez l\'URL https de votre boutique. Il s\'agit généralement du même domaine que le domaine HTTPS, suivi du nom du dossier dans lequel les fichiers de votre boutique sont conservés. Par exemple : https://www.example.com/zencart',
'TEXT_HELP_TITLE_PHYSICALPATH' => 'Chemin physique de la vitrine',
'TEXT_HELP_CONTENT_PHYSICALPATH' => 'Il s\'agit du chemin réel (selon le système de fichiers de votre serveur) où vos fichiers Zen Cart&reg; sont localisés. Les exemples courants ressemblent à "/users/home/public_html/zencart".<br>Il est important de fournir le chemin complet correct, sinon Zen Cart&reg; ne pourra pas retrouver ses fichiers pour pouvoir s\'exécuter.',
'TEXT_HELP_TITLE_DBHOST' => 'Hôte de base de données',
'TEXT_HELP_CONTENT_DBHOST' => 'Qu\'est-ce que l\'hôte de la base de données ?<br>L\'hôte de la base de données peut se présenter sous la forme d\'un nom d\'hôte, tel que "localhost" ou "db1.myserver.com", ou d\'une adresse IP, telle que "192.168.0.1". La plupart des sociétés d\'hébergement utilisent ici « localhost ».<br>Votre société d\'hébergement peut vous dire quoi utiliser, et ces informations sont généralement affichées sur l\'écran de son panneau de configuration où vous créez la base de données et attribuez des autorisations utilisateur.<br>Si vous avez besoin d\'aide pour trouver ces informations, consultez la documentation FAQ en ligne de votre société d\'hébergement.',
'TEXT_HELP_TITLE_DBUSER' => 'Utilisateur de la base de données',
'TEXT_HELP_CONTENT_DBUSER' => 'Quel est le nom d\'utilisateur MySQL utilisé pour se connecter à la base de données ?<br>Un exemple de nom d\'utilisateur est "myusername_store".<br>Pour des raisons PCI, vous ne devez JAMAIS utiliser "root" ici lorsque vous exécutez sur un serveur connecté à Internet.<br> <br>Cet utilisateur MySQL a besoin des autorisations suivantes : ALTER, CREATE, DELETE, DROP, INDEX, INSERT, LOCK TABLES, SELECT, UPDATE (ou simplement "Grant All").',
'TEXT_HELP_TITLE_DBPASSWORD' => 'Mot de passe de la base de données',
'TEXT_HELP_CONTENT_DBPASSWORD' => 'Quel est le mot de passe attribué à l\'utilisateur MySQL que vous avez créé pour cette base de données ?',
'TEXT_HELP_TITLE_DBNAME' => 'Nom de la base de données',
'TEXT_HELP_CONTENT_DBNAME' => 'Quel est le nom de la base de données utilisée pour contenir les données ?<br>Un exemple de nom de base de données est "zencart" ou "myaccount_zencart".<br>REMARQUE : <strong>Vous</strong> devez créer cette base de données AVANT de pouvoir continuer avec l\'installation de Zen Cart&reg;.<br>Vous pouvez créer votre base de données MySQL à l\'aide du panneau de contrôle de votre hébergeur.',
'TEXT_HELP_TITLE_DEMODATA' => '%%TEXT_DATABASE_SETUP_LOAD_DEMO%%',
'TEXT_HELP_CONTENT_DEMODATA' => 'Les données de démonstration configurent quelques exemples de catégories et de produits, avec une gamme d\'attributs de produits (variantes), de remises, de ventes, d\'offres spéciales, etc. Ceux-ci sont utiles aux nouveaux utilisateurs pour étudier les capacités de la boutique et la manière dont ces options de produits sont affichées. br><br>Par la suite, vous pouvez supprimer les produits de démonstration manuellement, ou vous pouvez réexécuter ce processus d\'installation propre sans les données de démonstration pour recommencer avec vos propres produits.',
'TEXT_HELP_TITLE_DBCHARSET' => 'Jeu de caractères de base de données',
'TEXT_HELP_CONTENT_DBCHARSET' => 'La plupart des magasins utiliseront utf8mb4 ou utf8.<br>Si vous n\'avez aucune raison d\'utiliser autre chose, utilisez utf8mb4.',
'TEXT_HELP_TITLE_DBPREFIX' => 'Préfixe des tables de la base de données',
'TEXT_HELP_CONTENT_DBPREFIX' => 'Quel préfixe souhaitez-vous utiliser pour les tables de la base de données de Zen Cart&reg; ?<br>Historiquement, il était courant sur l\'hébergement mutualisé d\'avoir un nombre très limité de bases de données proposées. Par conséquent, plusieurs applications peuvent avoir partagé une seule base de données, en utilisant des préfixes de table pour regrouper et séparer les tables de chaque application.<br>Exemple : <strong>zen_</strong><br><strong class="alert">CONSEIL : laissez vide si aucun préfixe n\'est nécessaire.</strong>',
'TEXT_HELP_TITLE_SQLCACHEMETHOD' => 'Méthode de cache SQL',
'TEXT_HELP_CONTENT_SQLCACHEMETHOD' => 'Le paramètre par défaut est « aucun ». Les alternatives sont « base de données » ou « fichier ». Si votre serveur est vraiment lent, utilisez "aucun". Si votre site est moyennement chargé, utilisez « base de données ». Si votre site génère un trafic extrêmement élevé, utilisez « fichier ». ',
'TEXT_HELP_TITLE_SQLCACHEDIRECTORY' => 'Répertoire du cache SQL',
'TEXT_HELP_CONTENT_SQLCACHEDIRECTORY' => 'Entrez le répertoire à utiliser pour la mise en cache basée sur les fichiers. Il s\'agit d\'un répertoire/dossier sur votre serveur Web, et ses autorisations doivent être définies sur écriture afin que le serveur Web (par exemple Apache) puisse y écrire des fichiers.',
'TEXT_HELP_TITLE_ADMINUSER' => 'Nom du superadministrateur',
'TEXT_HELP_CONTENT_ADMINUSER' => 'Ce sera le nom d\'utilisateur principal utilisé pour gérer votre accès administrateur et d\'autres comptes d\'utilisateur administrateur. Il bénéficiera de privilèges illimités.<br>Des utilisateurs supplémentaires avec différents niveaux d\'accès peuvent être ajoutés à partir du panneau d\'administration.',
'TEXT_HELP_TITLE_ADMINEMAIL' => 'E-mail du superadministrateur',
'TEXT_HELP_CONTENT_ADMINEMAIL' => 'Cette adresse e-mail sera utilisée pour la récupération de votre mot de passe en cas d\'oubli de votre mot de passe.',
'TEXT_HELP_TITLE_ADMINEMAIL2' => 'Retapez l\'e-mail',
'TEXT_HELP_CONTENT_ADMINEMAIL2' => 'Veuillez saisir à nouveau l\'adresse e-mail. C\'est juste pour aider à détecter les fautes de frappe accidentelles !',
'TEXT_HELP_TITLE_ADMINPASSWORD' => 'Mot de passe du superadministrateur',
'TEXT_HELP_CONTENT_ADMINPASSWORD' => '<strong>NOTEZ CE MOT DE PASSE MAINTENANT!!!!!</strong> - Vous en aurez besoin pour le premier accès à la zone Admin.<br>Il s\'agit du mot de passe attribué au nom d\'administrateur que vous avez spécifié ci-dessus. Il vous sera peut-être demandé de le modifier lors de la première connexion ou vous pourrez le modifier une fois connecté à la zone d\'administration.',
'TEXT_HELP_TITLE_ADMINDIRECTORY' => 'Répertoire administrateur',
'TEXT_HELP_CONTENT_ADMINDIRECTORY' => 'Nous essayons de renommer automatiquement votre dossier admin pour vous offrir un certain degré de sécurité par obscurité. Même si nous comprenons que cela ne le rend pas infaillible, cela décourage les visiteurs non autorisés d\'attaquer votre site. Vous pouvez toujours envisager de changer le nom du dossier vous-même (il suffit de renommer le dossier comme vous le souhaitez, en utilisant votre programme FTP ou l\'outil Gestionnaire de fichiers de votre société d\'hébergement dans votre panneau de contrôle d\'hébergement).',
'TEXT_VERSION_CHECK_NEW_VER' => 'Nouvelle version disponible v',
'TEXT_VERSION_CHECK_NEW_PATCH' => 'Nouveau CORRECTIF disponible : v',
'TEXT_VERSION_CHECK_PATCH' => 'correctif',
'TEXT_VERSION_CHECK_DOWNLOAD' => 'Télécharger ici',
'TEXT_VERSION_CHECK_CURRENT' => 'Votre version de Zen Cart&reg; semble être actuelle.',
'TEXT_ERROR_NEW_VERSION_AVAILABLE' => '<a href="https://www.zen-cart.com/files">Il existe une version PLUS RÉCENTE de Zen Cart&reg; disponible, que vous pouvez télécharger à partir de </a><a href="https://www.zen-cart.com/files" style="text-decoration:underline" rel="noopener" target="_blank">www.zen-cart.com/files</a>',
'TEXT_DB_VERSION_NOT_FOUND' => 'Une base de données Zen Cart pour %s n\'a pas été trouvée !',
'REASON_TABLE_ALREADY_EXISTS' => 'Impossible de créer la table %s car elle existe déjà',
'REASON_TABLE_DOESNT_EXIST' => 'Impossible de supprimer la table %s car elle n\'existe pas.',
'REASON_TABLE_NOT_FOUND' => 'Impossible d\'exécuter car la table %s n\'existe pas.',
'REASON_CONFIG_KEY_ALREADY_EXISTS' => 'Cimpossible d\'insérer la clé de configuration "%s" car elle existe déjà',
'REASON_COLUMN_ALREADY_EXISTS' => 'Impossible d\'AJOUTER la colonne %s car elle existe déjà.',
'REASON_COLUMN_DOESNT_EXIST_TO_DROP' => 'Impossible de SUPPRIMER la colonne %s car elle n\'existe pas.',
'REASON_COLUMN_DOESNT_EXIST_TO_CHANGE' => 'Impossible de MODIFIER la colonne %s car elle n\'existe pas.',
'REASON_COLUMN_DOESNT_EXIST' => 'Impossible de définir des valeurs dans la colonne %s car elle n\'existe pas.',
'REASON_PRODUCT_TYPE_LAYOUT_KEY_ALREADY_EXISTS' => 'Impossible d\'insérer la clé de configuration prod-type-layout "%s" car elle existe déjà',
'REASON_INDEX_DOESNT_EXIST_TO_DROP' => 'Impossible de supprimer l\'index %1$s sur la table %2$s car il n\'existe pas.',
'REASON_PRIMARY_KEY_DOESNT_EXIST_TO_DROP' => 'Impossible de supprimer la clé primaire sur la table %s car elle n\'existe pas.',
'REASON_INDEX_ALREADY_EXISTS' => 'Impossible d\'ajouter l\'index %1$s à la table %2$s car il existe déjà.',
'REASON_PRIMARY_KEY_ALREADY_EXISTS' => 'Impossible d\'ajouter une clé primaire à la table %s car une clé primaire existe déjà.',
'REASON_CONFIG_GROUP_KEY_ALREADY_EXISTS' => 'Impossible d\'insérer la clé configuration_group "%s" car elle existe déjà',
'REASON_CONFIG_GROUP_ID_ALREADY_EXISTS' => 'Impossible d\'insérer l\'ID de groupe_configuration "%s" car il existe déjà',
'TEXT_COMPLETION_NGINX_TEXT' => 'Cliquez pour afficher les <u>Informations de sécurité importantes pour Nginx</u>',
'TEXT_HELP_TITLE_NGINXCONF' => 'Sécuriser Zen Cart sur les serveurs Web Nginx',
'TEXT_HELP_CONTENT_NGINXCONF' => '<p>Your Zen Cart installation comes with security measures in a format native to the Apache Webserver. <br>
See below to implement a similar set of measures for the Nginx Webserver.</p>
<hr>
<ul style="list-style-type:square">
<li>Go to your <strong>"zc_install/includes/nginx_conf"</strong> folder and open the following files using a text editor such as notepad or textedit:
  <ul style="list-style-type:circle">
    <li>zencart_ngx_http.conf</li>
    <li>zencart_ngx_server.conf</li>
  </ul>
</li>
<li>Add the contents of <strong>"zencart_ngx_http.conf"</strong> under the <strong>"http"</strong> section of your Nginx configuration file.
  <ul style="list-style-type:circle">
    <li>Edit the caching durations in the <strong>"map"</strong> block to suit as required</li>
  </ul>
</li>
<li>Add the contents of <strong>"zencart_ngx_server.conf"</strong> to the relevant <strong>"server"</strong> block for Zen Cart in your Nginx configuration file.
  <ul style="list-style-type:circle">
    <li>The directives may be used for SSL and/or Non SSL server blocks.</li>
    <li>The directives should be placed at the beginning of the server block before any other location blocks.
      <ul style="list-style-type:none">
        <li>- The order in which the directives appear is important.</li>
        <li>- Do not change this order without fully understanding the directives and implications.</li>
      </ul>
  </ul>
</li>
<li>It is especially critical that these directives appear before any generic php handling location blocks such as ... <br>
  <pre><code>location ~ \.php { <strong>Nginx PHP Handling Directives;</strong> }</code></pre>
  ... or any other location blocks that might be processed before these are.</li>
<li>Instead, edit the <strong>"zencart_php_handler"</strong> location block to match your Nginx PHP Handling Directives.
  <ul style="list-style-type:circle">
    <li>Simply duplicate the contents of your existing PHP handling location block.
      <ul style="list-style-type:none">
        <li>- That is, copy and paste in the equivalent Nginx PHP Handling Directives.</li>
        <li>- If you do not have an existing PHP handling location block, please refer to available guides such as from <a href="https://www.nginx.com/resources/wiki/start/topics/examples/phpfcgi/" rel="noopener" target="_blank"><u>The Nginx Website</u></a>.</li>
      </ul>
    </li>
  </ul>
</li>
<li>If using plugins for "Pretty URLs", insert the relevant directives into the specified block.</li>
<li>Reload Nginx.
  <ul style="list-style-type:circle">
    <li>Do this before closing this dialog box.</li>
    <li>Remember to delete the <strong>"zc_install"</strong> folder when done.
      <ul style="list-style-type:none">
        <li>- Including the <strong>"zc_install/includes/nginx_conf"</strong> folder and its contents.</li>
      </ul>
    </li>
  </ul>
</li>
<ol>
</div>
<div class="alert alert-danger"> <strong>IMPORTANT:</strong> These location blocks should be <strong>BEFORE</strong> any other location blocks in your Nginx configuration server block for Zen Cart.</div>
<hr>',
'TEXT_HELP_TITLE_AGREETOTERMS' => 'Accepter les conditions',
'TEXT_HELP_CONTENT_AGREETOTERMS' => '<a href="http://www.gnu.org/licenses/old-licenses/gpl-2.0.en.html" rel="noopener" target="_blank">Original GPL 2.0 text</a>
<h2>The GNU General Public License (GPL)</h2>
<h3>Version 2, June 1991</h3>
<tt>
<p> Copyright (C) 1989, 1991 Free Software Foundation, Inc.<br>
  59 Temple Place, Suite 330, Boston, MA 02111-1307 USA</p>
<p> Everyone is permitted to copy and distribute verbatim copies<br>
  of this license document, but changing it is not allowed.</p>
<strong>
<p>Preamble</p>
</strong>
<p>The licenses for most software are designed to take away your freedom to share and change it. By contrast, the GNU General Public License is intended to guarantee your freedom to share and change free software--to make sure the software is free for all its users. This General Public License applies to most of the Free Software Foundation\'s software and to any other program whose authors commit to using it. (Some other Free Software Foundation software is covered by the GNU Library General Public License instead.) You can apply it to your programs, too.</p>
<p>When we speak of free software, we are referring to freedom, not price. Our General Public Licenses are designed to make sure that you have the freedom to distribute copies of free software (and charge for this service if you wish), that you receive source code or can get it if you want it, that you can change the software or use pieces of it in new free programs; and that you know you can do these things.</p>
<p> To protect your rights, we need to make restrictions that forbid anyone to deny you these rights or to ask you to surrender the rights. These restrictions translate to certain responsibilities for you if you distribute copies of the software, or if you modify it.</p>
<p>For example, if you distribute copies of such a program, whether gratis or for a fee, you must give the recipients all the rights that you have. You must make sure that they, too, receive or can get the source code. And you must show them these terms so they know their rights.</p>
<p>We protect your rights with two steps: (1) copyright the software, and (2) offer you this license which gives you legal permission to copy, distribute and/or modify the software.</p>
<p>Also, for each author\'s protection and ours, we want to make certain that everyone understands that there is no warranty for this free software. If the software is modified by someone else and passed on, we want its recipients to know that what they have is not the original, so that any problems introduced by others will not reflect on the original authors\' reputations.</p>
<p>Finally, any free program is threatened constantly by software patents. We wish to avoid the danger that redistributors of a free program will individually obtain patent licenses, in effect making the program proprietary. To prevent this, we have made it clear that any patent must be licensed for everyone\'s free use or not licensed at all.</p>
<p>The precise terms and conditions for copying, distribution and modification follow.</p>
<strong>
<p>TERMS AND CONDITIONS FOR COPYING, DISTRIBUTION AND MODIFICATION</p>
</strong>
<p><strong>0</strong>. This License applies to any program or other work which contains a notice placed by the copyright holder saying it may be distributed under the terms of this General Public License. The "Program", below, refers to any such program or work, and a "work based on the Program" means either the Program or any derivative work under copyright law: that is to say, a work containing the Program or a portion of it, either verbatim or with modifications and/or translated into another language. (Hereinafter, translation is included without limitation in the term "modification".) Each licensee is addressed as "you".</p>
<p>Activities other than copying, distribution and modification are not covered by this License; they are outside its scope. The act of running the Program is not restricted, and the output from the Program is covered only if its contents constitute a work based on the Program (independent of having been made by running the Program). Whether that is true depends on what the Program does.</p>
<p><strong>1</strong>. You may copy and distribute verbatim copies of the Program\'s source code as you receive it, in any medium, provided that you conspicuously and appropriately publish on each copy an appropriate copyright notice and disclaimer of warranty; keep intact all the notices that refer to this License and to the absence of any warranty; and give any other recipients of the Program a copy of this License along with the Program.</p>
<p>You may charge a fee for the physical act of transferring a copy, and you may at your option offer warranty protection in exchange for a fee.</p>
<p> <strong>2</strong>. You may modify your copy or copies of the Program or any portion of it, thus forming a work based on the Program, and copy and distribute such modifications or work under the terms of Section 1 above, provided that you also meet all of these conditions:</p>
<blockquote>
  <p>a) You must cause the modified files to carry prominent notices stating that you changed the files and the date of any change.</p>
  <p>b) You must cause any work that you distribute or publish, that in whole or in part contains or is derived from the Program or any part thereof, to be licensed as a whole at no charge to all third parties under the terms of this License.</p>
  <p>c) If the modified program normally reads commands interactively when run, you must cause it, when started running for such interactive use in the most ordinary way, to print or display an announcement including an appropriate copyright notice and a notice that there is no warranty (or else, saying that you provide a warranty) and that users may redistribute the program under these conditions, and telling the user how to view a copy of this License. (Exception: if the Program itself is interactive but does not normally print such an announcement, your work based on the Program is not required to print an announcement.)</p>
</blockquote>
<p>These requirements apply to the modified work as a whole. If identifiable sections of that work are not derived from the Program, and can be reasonably considered independent and separate works in themselves, then this License, and its terms, do not apply to those sections when you distribute them as separate works. But when you distribute the same sections as part of a whole which is a work based on the Program, the distribution of the whole must be on the terms of this License, whose permissions for other licensees extend to the entire whole, and thus to each and every part regardless of who wrote it.</p>
<p>Thus, it is not the intent of this section to claim rights or contest your rights to work written entirely by you; rather, the intent is to exercise the right to control the distribution of derivative or collective works based on the Program.</p>
<p>In addition, mere aggregation of another work not based on the Program with the Program (or with a work based on the Program) on a volume of a storage or distribution medium does not bring the other work under the scope of this License.</p>
<p><strong>3</strong>. You may copy and distribute the Program (or a work based on it, under Section 2) in object code or executable form under the terms of Sections 1 and 2 above provided that you also do one of the following:</p>
<blockquote>
  <p>a) Accompany it with the complete corresponding machine-readable source code, which must be distributed under the terms of Sections 1 and 2 above on a medium customarily used for software interchange; or,</p>
  <p> b) Accompany it with a written offer, valid for at least three years, to give any third party, for a charge no more than your cost of physically performing source distribution, a complete machine-readable copy of the corresponding source code, to be distributed under the terms of Sections 1 and 2 above on a medium customarily used for software interchange; or,</p>
  <p>c) Accompany it with the information you received as to the offer to distribute corresponding source code. (This alternative is allowed only for noncommercial distribution and only if you received the program in object code or executable form with such an offer, in accord with Subsection b above.)</p>
</blockquote>
<p>The source code for a work means the preferred form of the work for making modifications to it. For an executable work, complete source code means all the source code for all modules it contains, plus any associated interface definition files, plus the scripts used to control compilation and installation of the executable. However, as a special exception, the source code distributed need not include anything that is normally distributed (in either source or binary form) with the major components (compiler, kernel, and so on) of the operating system on which the executable runs, unless that component itself accompanies the executable.</p>
<p>If distribution of executable or object code is made by offering access to copy from a designated place, then offering equivalent access to copy the source code from the same place counts as distribution of the source code, even though third parties are not compelled to copy the source along with the object code.</p>
<p><strong>4</strong>. You may not copy, modify, sublicense, or distribute the Program except as expressly provided under this License. Any attempt otherwise to copy, modify, sublicense or distribute the Program is void, and will automatically terminate your rights under this License. However, parties who have received copies, or rights, from you under this License will not have their licenses terminated so long as such parties remain in full compliance.</p>
<p> <strong>5</strong>. You are not required to accept this License, since you have not signed it. However, nothing else grants you permission to modify or distribute the Program or its derivative works. These actions are prohibited by law if you do not accept this License. Therefore, by modifying or distributing the Program (or any work based on the Program), you indicate your acceptance of this License to do so, and all its terms and conditions for copying, distributing or modifying the Program or works based on it.</p>
<p><strong>6</strong>. Each time you redistribute the Program (or any work based on the Program), the recipient automatically receives a license from the original licensor to copy, distribute or modify the Program subject to these terms and conditions. You may not impose any further restrictions on the recipients\' exercise of the rights granted herein. You are not responsible for enforcing compliance by third parties to this License.</p>
<p><strong>7</strong>. If, as a consequence of a court judgment or allegation of patent infringement or for any other reason (not limited to patent issues), conditions are imposed on you (whether by court order, agreement or otherwise) that contradict the conditions of this License, they do not excuse you from the conditions of this License. If you cannot distribute so as to satisfy simultaneously your obligations under this License and any other pertinent obligations, then as a consequence you may not distribute the Program at all. For example, if a patent license would not permit royalty-free redistribution of the Program by all those who receive copies directly or indirectly through you, then the only way you could satisfy both it and this License would be to refrain entirely from distribution of the Program.</p>
<p>If any portion of this section is held invalid or unenforceable under any particular circumstance, the balance of the section is intended to apply and the section as a whole is intended to apply in other circumstances.</p>
<p>It is not the purpose of this section to induce you to infringe any patents or other property right claims or to contest validity of any such claims; this section has the sole purpose of protecting the integrity of the free software distribution system, which is implemented by public license practices. Many people have made generous contributions to the wide range of software distributed through that system in reliance on consistent application of that system; it is up to the author/donor to decide if he or she is willing to distribute software through any other system and a licensee cannot impose that choice.</p>
<p> This section is intended to make thoroughly clear what is believed to be a consequence of the rest of this License.</p>
<p> <strong>8</strong>. If the distribution and/or use of the Program is restricted in certain countries either by patents or by copyrighted interfaces, the original copyright holder who places the Program under this License may add an explicit geographical distribution limitation excluding those countries, so that distribution is permitted only in or among countries not thus excluded. In such case, this License incorporates the limitation as if written in the body of this License.</p>
<p> <strong>9</strong>. The Free Software Foundation may publish revised and/or new versions of the General Public License from time to time. Such new versions will be similar in spirit to the present version, but may differ in detail to address new problems or concerns.</p>
<p>Each version is given a distinguishing version number. If the Program specifies a version number of this License which applies to it and "any later version", you have the option of following the terms and conditions either of that version or of any later version published by the Free Software Foundation. If the Program does not specify a version number of this License, you may choose any version ever published by the Free Software Foundation.</p>
<p><strong>10</strong>. If you wish to incorporate parts of the Program into other free programs whose distribution conditions are different, write to the author to ask for permission. For software which is copyrighted by the Free Software Foundation, write to the Free Software Foundation; we sometimes make exceptions for this. Our decision will be guided by the two goals of preserving the free status of all derivatives of our free software and of promoting the sharing and reuse of software generally.</p>
<p><strong>NO WARRANTY</strong></p>
<p><strong>11</strong>. BECAUSE THE PROGRAM IS LICENSED FREE OF CHARGE, THERE IS NO WARRANTY FOR THE PROGRAM, TO THE EXTENT PERMITTED BY APPLICABLE LAW. EXCEPT WHEN OTHERWISE STATED IN WRITING THE COPYRIGHT HOLDERS AND/OR OTHER PARTIES PROVIDE THE PROGRAM "AS IS" WITHOUT WARRANTY OF ANY KIND, EITHER EXPRESSED OR IMPLIED, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE. THE ENTIRE RISK AS TO THE QUALITY AND PERFORMANCE OF THE PROGRAM IS WITH YOU. SHOULD THE PROGRAM PROVE DEFECTIVE, YOU ASSUME THE COST OF ALL NECESSARY SERVICING, REPAIR OR CORRECTION.</p>
<p><strong>12</strong>. IN NO EVENT UNLESS REQUIRED BY APPLICABLE LAW OR AGREED TO IN WRITING WILL ANY COPYRIGHT HOLDER, OR ANY OTHER PARTY WHO MAY MODIFY AND/OR REDISTRIBUTE THE PROGRAM AS PERMITTED ABOVE, BE LIABLE TO YOU FOR DAMAGES, INCLUDING ANY GENERAL, SPECIAL, INCIDENTAL OR CONSEQUENTIAL DAMAGES ARISING OUT OF THE USE OR INABILITY TO USE THE PROGRAM (INCLUDING BUT NOT LIMITED TO LOSS OF DATA OR DATA BEING RENDERED INACCURATE OR LOSSES SUSTAINED BY YOU OR THIRD PARTIES OR A FAILURE OF THE PROGRAM TO OPERATE WITH ANY OTHER PROGRAMS), EVEN IF SUCH HOLDER OR OTHER PARTY HAS BEEN ADVISED OF THE POSSIBILITY OF SUCH DAMAGES.</p>
<p><strong>END OF TERMS AND CONDITIONS</strong></p>',
    'TEXT_UPGRADING_TO_VERSION' => 'Mise à niveau vers la version %s',
    'TEXT_PROGRESS_FINISHED' => 'Fin',
];

<?php
/**
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: torvista 2022 Jun 12 New in v1.5.8-alpha $
*/

$define = [
    'HEADING_TITLE' => 'Gestionnaire du journal d\'activité de l\'administrateur',
    'HEADING_SUB1' => 'Visualiser ou exporter le journal',
    'HEADING_SUB2' => 'Purger l\'historique du journal',
    'TEXT_ACTIVITY_EXPORT_FORMAT' => 'Format du fichier d\'exportation :',
    'TEXT_ACTIVITY_EXPORT_FILENAME' => 'Nom du fichier d\'exportation :',
    'TEXT_ACTIVITY_EXPORT_SAVETOFILE' => 'Enregistrer dans un fichier sur le serveur ? (sinon il sera téléchargé directement depuis cette fenêtre)',
    'TEXT_ACTIVITY_EXPORT_DEST' => 'Destination : ',
    'SUCCESS_EXPORT_ADMIN_ACTIVITY_LOG' => 'Exportation terminée. ',
    'FAILURE_EXPORT_ADMIN_ACTIVITY_LOG' => 'ALERTE : L\'exportation a échoué. Impossible d\'écrire dans le fichier ',
    'TEXT_INSTRUCTIONS' => '<u>INSTRUCTIONS</u><br>
Vous pouvez utiliser cette page pour exporter l\'activité d\'accès de votre administrateur Zen Cart® dans un fichier CSV pour l\'archivage.<br>
Vous devez enregistrer ces données pour les utiliser dans les enquêtes sur les fraudes au cas où votre site serait compromis. Ceci est une exigence pour la conformité PCI.<br>
<ol>
<li>Choisissez d\'afficher ou d\'exporter vers un fichier.</li>
<li>Entrez un nom de fichier. (doit se terminer par : .csv .txt .htm .html .xml)</li>
<li>Cliquez sur Enregistrer pour continuer.</li>
<li>Choisissez d\'enregistrer ou d\'ouvrir le fichier, en fonction de ce que propose votre navigateur.</li></ol>
',
    'TEXT_INFO_ADMIN_ACTIVITY_LOG' => '<strong>Vide la table du journal des activités d\'administration dans la base de données<br>AVERTISSEMENT : ASSUREZ-VOUS DE SAUVEGARDER VOTRE BASE DE DONNÉES avant d\'exécuter cette mise à jour!</strong><br>Le journal d\'activité d\'administration est une méthode de suivi qui enregistre l\'activité dans la partie administration.<br>En raison de sa nature, il peut devenir volumineux très rapidement et doit être nettoyé de temps en temps.<br>Les avertissements sont donnés à 50 000 enregistrements ou 60 jours, en fonction de ce qui se produit en premier.<br><span class = "alert">REMARQUE : pour la conformité PCI, vous devez conserver l\'historique du journal d\'activité de l\'administrateur pendant 12 mois.<br>Il est préférable d\'archiver vos journaux en choisissant EXPORTER EN CSV et cliquez sur Enregistrer, ci-dessus, * AVANT * de purger les données du journal.</span>',
    'TEXT_ADMIN_LOG_PLEASE_CONFIRM_ERASE' => '<strong><span class="alert">AVERTISSEMENT ! : vous êtes sur le point de SUPPRIMER des enregistrements d\'audit * importants * de votre base de données.</span></strong><br>Vous devriez D\'ABORD confirmer que vous disposez d\'une SAUVEGARDE fiable de votre base de données avant de continuer.<br>En poursuivant, vous acceptez que ces informations soient supprimées et comprenez vos responsabilités légales concernant ces données.<br><br>Je comprends mes responsabilités, et souhaite procéder à la suppression en cliquant sur Réinitialiser :<br>',
    'SUCCESS_CLEAN_ADMIN_ACTIVITY_LOG' => 'Effacement du journal des activités d\'administration <strong>terminé</strong>',
    'TEXT_NO_RECORDS_FOUND' => 'Aucun enregistrement trouvé en utilisant le filtre que vous avez sélectionné.',
    'TEXT_EXPORTFORMAT0' => 'Exporter en HTML (idéal pour la visualisation à l\'écran)',
    'TEXT_EXPORTFORMAT1' => 'Exporter au format CSV (idéal pour importer dans des feuilles de calcul)',
    'TEXT_EXPORTFORMAT2' => 'Exporter au format TXT',
    'TEXT_EXPORTFORMAT3' => 'Exporter au format XML',
    'TEXT_ACTIVITY_EXPORT_FILTER' => 'Quelles données de journal voulez-vous voir?',
    'TEXT_EXPORTFILTER0' => 'Toutes les données enregistrées, quel que soit le niveau de gravité.',
    'TEXT_EXPORTFILTER1' => 'INFO - Informations générales enregistrées',
    'TEXT_EXPORTFILTER2' => 'AVIS - Informations importantes, qui devraient être revues périodiquement',
    'TEXT_EXPORTFILTER3' => 'AVERTISSEMENT - Activité qui devrait être revue quotidiennement',
    'TEXT_EXPORTFILTER4' => 'AVIS et AVERTISSEMENT (combinaison courante pour  l\'examen).',
    'TEXT_ACTIVITY_EXPORT_FILTER_USER' => 'Filtrer par administrateur : ',
    'TEXT_EXPORTFILTER_USER' => 'Tous les administrateurs',
    'TEXT_INTERPRETING_LOG_DATA' => '<p><strong>Interprétation des données du journal</strong></p><ul>
<li><strong>Gravité</strong> - les normes de journalisation décrivent généralement les niveaux de gravité comme suit :
 <ul>
 <li><strong>INFO</strong> fait référence à l\'activité générale. Celui-ci peut ou non contenir des détails remarquables.</li>
 <li><strong>AVIS</strong> fait référence à une activité qui indique qu\'un privilège plus élevé a été utilisé et peut inclure des éléments tels que la création de nouveaux utilisateurs administrateurs ou l\'ajout de nouveaux modules de paiement. Il met également en évidence lorsque des données soumises sur la page Web incluent un contenu potentiellement risqué tel que des balises de script ou des iframes intégrés, où du contenu malveillant est ajouté à vos produits / catégories / pages par des employés mécontents ou un intrus sur votre site. Ceux-ci doivent être examinés régulièrement pour détecter toute anomalie telle qu\'une activité non autorisée.</li>
 <li><strong>AVERTISSEMENT</strong> est attribué à des éléments CRITIQUES tels que la suppression des modules de paiement ou la suppression des administrateurs. Ce sont des activités qui pourraient suggérer des problèmes en suspens si elles ne sont pas détectées rapidement. Ceux-ci devraient être revus très fréquemment ; recommandé quotidiennement.</li>
 </ul>
</li>
<li><strong>admin_user</strong> - Cela affichera le numéro d\'identification de l\'administrateur suivi de son nom d\'utilisateur. S\'il n\'est pas connecté, il affichera 0.</li>
<li><strong>page_accessed</strong> - Ceci indiquera le nom de la page visitée, donnant ainsi des indications sur le type d\'activité en cours.</li>
<li><strong>paramètres</strong> - Il s\'agit du reste de l\'URI de la page visitée et donne une indication supplémentaire du type d\'activité tentée par le visiteur.</li>
<li><strong>signalé</strong> - Si ce paramètre est défini sur 1, cela indique que vous devez inspecter le contenu enregistré dans le champ "postdata" pour détecter toute saisie non autorisée de script ou d\'iframe ou de tout autre contenu potentiellement dangereux. Une explication du contenu suspect sera répertoriée dans le champ "Attention".</li>
<li><strong>attention</strong> - Cela contiendra des suggestions liées au type d\'activité suspecte qui devraient être examinées dans le champ "postdata" si elles sont signalées.</li>
<li><strong>logmessage</strong> - Ceci contient tous les messages enregistrés par le système au sujet de l\'activité en cours, comme l\'installation d\'un certain module.</li>
<li><strong>postdata</strong> - Contient les données POST brutes (avec certaines informations sensibles nettoyées) pour un examen facile en cas de suspicion d\'activité malveillante.</li>
</ul>',
];

return $define;

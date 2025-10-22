<?php

$define = [
    'CFG_GRP_TITLE_USU' => 'URL ultimes',
// Ultimate URLs configuration settings
    'CFGTITLE_USU_ENABLED' => 'Activer les URL alternatives ?',
    'CFGDESC_USU_ENABLED' => 'Il s’agit d’un paramètre global qui active (<b>true</b>) ou désactive (<b>false</b>) la génération d’URL alternatives.',
    'CFGTITLE_USU_DEBUG' => 'Activer le journal de débogage ?',
    'CFGDESC_USU_DEBUG' => 'Lorsque cette option est activée, des informations de débogage supplémentaires sont enregistrées dans les fichiers journaux (<code>/logs/usu-{adm-}yyyymmmdd-hhmmss.log</code>).<br><br>L’activation du débogage peut entraîner la création de nombreux fichiers journaux et peut nuire aux performances du serveur. N’activez cette option qu’en cas de nécessité absolue !',
    'CFGTITLE_USU_CPATH' => 'Generate cPath parameters',
    'CFGDESC_USU_CPATH' => 'Par défaut, Zen Cart génère un paramètre cPath pour les pages de produits. Ceux-ci sont utilisés pour conserver les produits liés dans la bonne catégorie. En mode automatique, le cPath ne sera ajouté qu’en cas de besoin.',
    'CFGTITLE_USU_END' => 'Les URL alternatives se terminent par',
    'CFGDESC_USU_END' => 'Si vous souhaitez que vos URL se terminent par un certain suffixe, ajoutez-en un ici. Les suffixes courants sont « .html », « .htm ». Laissez ce champ vide pour qu’aucun suffixe ne soit ajouté aux URL générées.',
    'CFGTITLE_USU_FORMAT' => 'Format des URL alternatives',
    'CFGDESC_USU_FORMAT' => 'Vous pouvez sélectionner dans une liste de formats fréquemment générés.<br><br><b>Original :</b><ul><li><i>Catégories :</i> category-name-c-34</li><li><i>Produits :</i> product-name-p-54</li></ul><b>Catégorie parente :</b><ul><li><i>Catégories :</i> parent-category-name-c-34</li><li><i>Produits :</i> parent-product-name-p-54</li></ul>',
    'CFGTITLE_USU_CATEGORY_DIR' => 'Afficher les catégories sous forme de répertoires',
    'CFGDESC_USU_CATEGORY_DIR' => 'Vous pouvez choisir parmi une liste de formats couramment générés.<br><b>Désactivé :</b> désactive l’affichage des catégories sous forme de répertoires<br><br><b>Court :</b> utilise les paramètres de « Format des URL alternatives »<br><br><b>Complet :</b> utilise les chemins de catégorie complets<br><br>',
    'CFGTITLE_USU_REMOVE_CHARS' => 'Supprimer les caractères problématiques',
    'CFGDESC_USU_REMOVE_CHARS' => 'Cela vous permet de supprimer certains caractères problématiques des URL générées.<br><br><i>non alphanumérique :</i> supprime tous les caractères non alphanumériques<br><i>ponctuation :</i> supprime tous les caractères de ponctuation',
    'CFGTITLE_USU_FILTER_PCRE' => 'Entrez les règles de filtrage PCRE',
    'CFGDESC_USU_FILTER_PCRE' => 'Ce paramètre utilise les règles PCRE pour filtrer les URL.<br><br>Ce filtre est exécuté avant les conversions de caractères et la suppression des caractères spéciaux. Si vous souhaitez un tiret dans vos URL, utilisez un seul espace. Pour échapper un caractère dans l’expression régulière, utilisez \\\\ au lieu d’un seul \\.<br><br>Le format <b>DOIT</b> être sous la forme : <b>trouver1=>remplacer1,trouver2=>remplacer2</b>. ',
    'CFGTITLE_USU_FILTER_SHORT_WORDS' => 'Filtrer les mots courts',
    'CFGDESC_USU_FILTER_SHORT_WORDS' => 'Ce paramètre permet de filtrer les mots « courts », c’est-à-dire ceux dont la longueur est inférieure ou égale à la valeur spécifiée, à partir de toutes les URL générées. Utilisez la valeur <b>0</b> pour inclure <em>tous</em> les mots.',
    'CFGTITLE_USU_FILTER_PAGES' => 'Limitez les URL alternatives aux pages suivantes',
    'CFGDESC_USU_FILTER_PAGES' => 'Vous pouvez limiter les pages qui seront réécrites en les spécifiant ici. Si aucune page n’est spécifiée, toutes les pages seront réécrites.<br><br>Le format est une liste délimitée par des virgules (les espaces intermédiaires sont acceptables) et <b>doit</b> être sous la forme : <b>page1,page2,page3</b> ou <b>page1, page2, page3</b>',
    'CFGTITLE_USU_ENGINE' => 'Choisissez le moteur d’URL',
    'CFGDESC_USU_ENGINE' => 'Choisissez le moteur d’URL à utiliser.',
    'CFGTITLE_USU_REDIRECT' => 'Activer les redirections automatiques ?',
    'CFGDESC_USU_REDIRECT' => 'Cela activera le code de redirection automatique et enverra des en-têtes 301 pour les anciennes vers les nouvelles URL.',
    'CFGTITLE_USU_VERSION' => 'Version du plug-in',
    'CFGDESC_USU_VERSION' => 'La version actuellement installée de <em>USU</em>.',
];

return $define;

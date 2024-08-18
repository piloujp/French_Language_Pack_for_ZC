<?php
// -----
// Part of the "Image Handler" plugin, v5.0.0 and later, by Cindy Merkin a.k.a. lat9 (cindy@vinosdefrutastropicales.com)
// Copyright (c) 2017-2022 Vinos de Frutas Tropicales
//
// This is not a "traditional" Zen Cart language file.  Its purpose is to provide the information associated with
// the admin's Tools->Image Handler's "About/Help" link and is included by that module when/if that link is active.
//
?>
<div>
    <h2>Objectif et amp; But</h2>
    <p>Image Handler<sup>5</sup> est bas&eacute; sur une contribution originale de Tim Kr&#246;ger.</p>
    <p>Image Handler<sup>5</sup>, au c&oelig;ur de son code, est r&eacute;ellement destin&eacute; &agrave; faciliter la gestion des images de produits (en particulier la gestion des images de produits suppl&eacute;mentaires), et &agrave; contribuer &agrave; am&eacute;liorer les performances des pages en optimisant les images de produits.</p>
    <p>IH<sup>5</sup> g&eacute;n&egrave;re des images de produits (en fonction de vos param&egrave;tres d'image) dans le dossier <code>/bmz_cache</code> de votre boutique. Il <strong>ne remplace pas</strong> ni ne modifie les images originales, il est donc <em>parfaitement</em> s&ucirc;r &agrave; utiliser dans une boutique existante.</p>
    <p>Le plugin vous permet d'utiliser les biblioth&egrave;ques GD ou ImageMagick (si install&eacute; sur votre serveur) pour g&eacute;n&eacute;rer et redimensionner des images petites, moyennes et grandes &agrave; la vol&eacute;e/&agrave; la demande d'une page. Vous pouvez simplement t&eacute;l&eacute;charger une seule grande image (qui est redimensionn&eacute;e selon les besoins) ou vous pouvez avoir diff&eacute;rentes sources pour les images moyennes et grandes. Vous pouvez &eacute;galement filigraner vos images &agrave; la vol&eacute;e (superposer une deuxi&egrave;me image translucide sp&eacute;cifique sur l'originale).</p>
    <p>Cette contribution comprend une interface d'administration puissante pour parcourir vos produits comme vous le feriez avec le gestionnaire d'attributs et t&eacute;l&eacute;charger, supprimer ou ajouter des images suppl&eacute;mentaires sans avoir &agrave; le faire manuellement via <span title="File Transfer Protocol">FTP</span>. IH<sup>5</sup> fonctionne correctement avec les utilitaires de mise &agrave; jour en masse comme EZ-Populate et Database I/O Manager.</p>

    <h2>Caract&eacute;ristiques</h2>
    <ul>
      <li>Am&eacute;liore les performances du site (chargement plus rapide, affichage plus rapide)</li>
      <li>Images d'aspect professionnel (pas d'effets d'escalier, bords lisses)</li>
      <li>Choisissez les types d'images pr&eacute;f&eacute;r&eacute;s pour chaque taille d'image</li>
      <li>Le t&eacute;l&eacute;chargement d'une image cr&eacute;e automatiquement des images petites, moyennes et grandes &agrave; la demande d'une page</li>
      <li>S'ins&egrave;re et se retire en toute transparence. Pas besoin de refaire vos images. Toutes les images sont conserv&eacute;es.</li>
      <li>Installation facile. Mise &agrave; niveau de la base de donn&eacute;es en un clic.</li>
      <li>Fonctionne avec des outils de mise &agrave; jour/t&eacute;l&eacute;chargement en masse comme EZ-Populate et Database I/O Manager.</li>
      <li>Filigranez les images pour emp&ecirc;cher les concurrents de les voler. (preuve de la propri&eacute;t&eacute;)</li>
      <li>Choisissez une couleur d'arri&egrave;re-plan d'image adapt&eacute;e &agrave; votre site ou s&eacute;lectionnez un arri&egrave;re-plan transparent pour vos images.</li>
      <li>G&eacute;rez facilement plusieurs images de produits &agrave; partir d'une seule page, tout comme vous le faites avec les attributs dans le gestionnaire d'attributs de produits.</li>
    </ul>
    <p>IH<sup>5</sup> est destin&eacute; &agrave; faciliter le travail requis pour configurer les images de votre boutique. Il fonctionne <em>avec</em> la fonctionnalit&eacute; Zen Cart par d&eacute;faut, il ne la remplace pas.</p>
    <p>Il est tr&egrave;s fortement recommand&eacute; de lire ENTI&egrave;REMENT les sections &laquo; <strong>Configuration</strong> &raquo; et &laquo; <strong>Utilisation</strong> &raquo; du fichier Lisezmoi d'Image Handler<sup>5</sup>. Vous y d&eacute;couvrirez exactement ce que <strong>Image Handler<sup>5</sup></strong> peut faire.</p>

    <h2>D&eacute;pannage de base</h2>
    <p>Assurez-vous que votre mod&egrave;le personnalis&eacute; est actif. (Administration &gt; Outils &gt; S&eacute;lection de mod&egrave;les)</p>
    <p>Assurez-vous que Image Handler<sup>5</sup> est install&eacute;. <strong>Administration &gt; Outils &gt; Gestionnaire d'images<sup>5</sup> &gt; Administration</strong>. D&eacute;finissez les autorisations dans vos dossiers <strong>images</strong> et <strong>bmz_cache</strong> sur 755 (par exemple : ces <strong>deux</strong> dossiers doivent avoir les m&ecirc;mes autorisations. Pour certains h&eacute;bergeurs Web, vous vous devrez peut-&ecirc;tre d&eacute;finir ces autorisations sur 777).</p>
    <p>Si Image Handler<sup>5</sup> ne fonctionne pas ou vous renvoie des erreurs :</p>
    <ul>
      <li>Assurez-vous que tous les fichiers sont au bon emplacement</li>
      <li>Assurez-vous d'avoir import&eacute; TOUS les fichiers Image Handler<sup>5</sup>.</li>
      <li>Assurez-vous que les fichiers ne sont pas corrompus &agrave; cause d'un mauvais transfert FTPs</li>
      <li>Assurez-vous que vos modifications (fusion) de fichiers sont correctes</li>
      <li>ASSUREZ-VOUS DE RELIRE LES SECTIONS DE CONFIGURATION ET D'UTILISATION !!!</li>
      <li>Assurez-vous qu'il n'y a pas de conflits javascript (ce dernier point a &eacute;t&eacute; largement abord&eacute; depuis la Rev 7)</li>
      <li>Assurez-vous que les noms des fichiers principaux de l'image de votre produit NE contiennent AUCUN caract&egrave;re sp&eacute;cial (caract&egrave;res non alphanum&eacute;riques tels que <b>/ \ : ! @ # $ % ^ &lt; &gt; , [ ] { } &amp; * ( ) + = </b>). Utilisez toujours des pratiques de d&eacute;nomination de fichiers appropri&eacute;es lorsque vous nommez vos images.</li>
    </ul>

    <h2>Zen Cart et la gestion des images</h2>
    <p>Image Handler<sup>5</sup> est destin&eacute; &agrave; faciliter le travail requis pour configurer les images de votre boutique. Il fonctionne <em>avec</em> la fonctionnalit&eacute; par d&eacute;faut de Zen Cart, il ne la remplace pas. Voici quelques FAQ suppl&eacute;mentaires qui expliquent comment fonctionnent les images de produits dans Zen Cart.</p>
    <ul>
      <li><a href="https://docs.zen-cart.com/user/images/images_howto/" target="_blank" rel="noreferrer noopener">Pr&eacute;paration de l'image - Comment faire (en Anglais)</a></li>
      <li><a href="https://docs.zen-cart.com/user/troubleshooting/images_distorted/" target="_blank" rel="noreferrer noopener">Mes images sont d&eacute;form&eacute;es/floues/&eacute;cras&eacute;es, pouvez-vous m'aider ? (en Anglais)</a></li>
    </ul>
    <p>Des informations sur la mani&egrave;re dont Zen Cart identifie/g&egrave;re les images de produits suppl&eacute;mentaires peuvent &ecirc;tre trouv&eacute;es dans ces FAQ Zen Cart : (en Anglais)</p>
    <ul>
      <li><a href="https://docs.zen-cart.com/user/images/additional_images/#why-do-i-see-images-for-other-products-on-my-product-pages" target="_blank" rel="noreferrer noopener">Pourquoi est-ce que je vois des images d’autres produits sur mes pages produits ?</a></li>
      <li><a href="https://docs.zen-cart.com/user/images/additional_images/" target="_blank" rel="noreferrer noopener">Comment ajouter plusieurs images &agrave; un produit ?</a></li>
      <li><a href="https://docs.zen-cart.com/user/images/additional_images/" target="_blank" rel="noreferrer noopener">Comment puis-je ajouter plus d'une image d'un produit ? Je souhaite avoir une image principale et &eacute;galement une ou deux autres images qui montrent plus de parties d'un produit particulier. Comment/o&ugrave; puis-je ajouter des images suppl&eacute;mentaires &agrave; une page produit ?</a></li>
    </ul>
    <p>Consultez ces FAQ et voyez si elles aident &agrave; clarifier le fonctionnement de Zen Cart avec les images de produits.</p>

    <h2> Pr&eacute;parez votre site pour la croissance</h2>
    <p>Peu d'utilisateurs savent qu'Image Handler<sup>5</sup> peut g&eacute;rer les besoins d'un tr&egrave;s grand site aussi facilement que d'un petit. Lors de la premi&egrave;re cr&eacute;ation d'un site, le propri&eacute;taire d'un petit site n'a qu'&agrave; charger des images dans le dossier images. Mais lorsque le site s'agrandit et que les images se multiplient comme des lapins, cela peut provoquer des confusions dans les noms de fichiers pour Zen Cart et ralentir le site. Pr&eacute;parer la croissance de votre entreprise d&egrave;s le d&eacute;but vous fera &eacute;conomiser des heures de travail par la suite !</p>
    <p>Sans IH<sup>5</sup> install&eacute;, Zen Cart vous demande de cr&eacute;er, d'optimiser et de t&eacute;l&eacute;charger trois images de tailles diff&eacute;rentes pour chaque image que vous souhaitez utiliser. Vous devez nommer ces images en utilisant des suffixes de nom et les placer dans les dossiers correspondants &agrave; l'int&eacute;rieur de votre dossier principal <code>/images</code>. Par exemple : Un produit appel&eacute; &laquo; Widget &raquo; n&eacute;cessite images/widget.jpg (petite image), images/medium/widget_MED.jpg (image moyenne) et images/large/widget_LRG.jpg. C'est tr&egrave;s compliqu&eacute;, surtout si beaucoup de vos produits comportent plusieurs images. Et &agrave; mesure que votre site grandit, cela devient une tâche impossible !</p>
    <p>Avec IH<sup>5</sup>, vous n'&ecirc;tes plus oblig&eacute; de cr&eacute;er trois tailles des m&ecirc;mes images et de les placer dans des dossiers diff&eacute;rents (sauf si vous le souhaitez) ! Au lieu de cela, vous n'avez besoin de t&eacute;l&eacute;charger qu'une seule image dans un dossier et IH<sup>5</sup> fera le reste ! T&eacute;l&eacute;chargez simplement votre plus grande image de la plus haute qualit&eacute; et IH<sup>5</sup> redimensionnera et optimisera votre image selon vos besoins, et proposera des tailles d'image petites, moyennes ou grandes adapt&eacute;es &agrave; la page charg&eacute;e - le tout automatiquement et sans aucune modification de votre fichier image original de quelque mani&egrave;re que ce soit ! Consultez l'onglet Configuration de ce fichier Lisez-moi pour plus d'informations sur cette fonctionnalit&eacute; g&eacute;niale !</p>
    <p>Pr&eacute;parez votre site &agrave; la croissance en cr&eacute;ant simplement des sous-dossiers dans votre dossier d'images principal. Par exemple, vous souhaiterez peut-&ecirc;tre mettre tous vos &quot;widgets&quot; images dans un dossier appel&eacute; &quot;widgets&quot; et toutes vos images Truc dans un dossier appel&eacute; &quot;trucs&quot; , comme &ccedil;a:</p>
    <p>Produit : Widget bleu avec 3 images<br>
      ---------------------------------- <br>
      /images/widgets/blue_widget1.jpg (image principale du produit pour un widget bleu, par ex. vue de face)<br>
      /images/widgets/blue_widget2.jpg (image de produit suppl&eacute;mentaire pour un widget bleu, par ex. vue lat&eacute;rale)<br>
      /images/widgets/blue_widget3.jpg (image de produit suppl&eacute;mentaire pour un widget bleu, par ex. vue arri&egrave;re)</p>
    <p>&nbsp;</p>
    <p>Produit: Widget rouge avec 1 image<br>
      --------------------------------<br>
      /images/widgets/red_widget.jpg (image principale du produit pour un widget rouge)</p>
    <p>&nbsp;</p>
    <p>Produit: Truc dor&eacute; avec 2 images<br>
      ----------------------------------<br>
      /images/doodads/gold_doodad1.jpg (image principale du produit pour un Truc dor&eacute;, par ex. vue d'en haut)<br>
      /images/doodads/gold_doodad2.jpg (image de produit suppl&eacute;mentaire pour un Truc dor&eacute;, par ex. vue de c&ocirc;t&eacute;)</p>
    <p>&nbsp;</p>
    <p>Produit: Truc argent&eacute; avec 3 images<br>
      ------------------------------------<br>
      /images/doodads/silver_doodad1.jpg (image principale du produit pour un Truc argent&eacute;, par ex. le produit)<br>
      /images/doodads/silver_doodad2.jpg (image de produit suppl&eacute;mentaire pour un Truc argent&eacute;, par ex. d&eacute;tail du produit)<br>
      /images/doodads/silver_doodad3.jpg (image suppl&eacute;mentaire du produit pour un Truc argent&eacute;, par ex. le tampon argent&eacute; du produit)<br>
    </p>
    <p>Grâce &agrave; Image Handler<sup>5</sup>, vous pouvez facilement trier et g&eacute;rer des milliers d'images sans confusion ni tracas ! Lors de la s&eacute;lection de l'image principale d'un produit dans l'interface IH<sup>5</sup>, le plugin vous permet de choisir l'emplacement de cette image. Cette invite disparaît ensuite car IH<sup>5</sup> sait que les images suppl&eacute;mentaires doivent se trouver dans le m&ecirc;me dossier que l'image principale de leur produit et g&egrave;re cela automatiquement !</p>
</div>
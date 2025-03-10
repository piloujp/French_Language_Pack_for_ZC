<?php
$define = [
    'NAVBAR_TITLE' => 'FAQ '.TEXT_GV_NAME,
    'HEADING_TITLE' => 'FAQ '.TEXT_GV_NAME,
    'TEXT_INFORMATION' => '<a name="Top"></a>
  <a href="' . zen_href_link(FILENAME_GV_FAQ, 'faq_item=1') . '">Achater un ' . TEXT_GV_NAMES . '</a><br>
  <a href="' . zen_href_link(FILENAME_GV_FAQ, 'faq_item=2') . '">Comment envoyer un ' . TEXT_GV_NAMES . '</a><br>
  <a href="' . zen_href_link(FILENAME_GV_FAQ, 'faq_item=3') . '">Acheter avec un ' . TEXT_GV_NAMES . '</a><br>
  <a href="' . zen_href_link(FILENAME_GV_FAQ, 'faq_item=4') . '">Utiliser un ' . TEXT_GV_NAMES . '</a><br>
  <a href="' . zen_href_link(FILENAME_GV_FAQ, 'faq_item=5') . '">Quand des problemes surviennent</a><br>
',
    'SUB_HEADING_TITLE_1' => 'Acheter un ' . TEXT_GV_NAMES,
    'SUB_HEADING_TEXT_1' => TEXT_GV_NAMES . ' sont achetes comme n\'importe quel autre article dans notre magasin. Vous pouvez les payer en utilisant le(s) mode(s) de paiement standard du magasin.
  Une fois achete, la valeur du ' . TEXT_GV_NAME . ' sera ajoutee a votre solde de ' . TEXT_GV_NAME . '. Si vous avez un solde de ' . TEXT_GV_NAME . ' positif, 
  vous remarquerez que le montant apparait desormais sur la page Mon compte et qu\'il y a egalement un lien vers une page ou vous pouvez envoyer le ' . TEXT_GV_NAME . ' a quelqu\'un par e-mail.',
    'SUB_HEADING_TITLE_2' => 'Comment envoyer ' . TEXT_GV_NAMES,
    'SUB_HEADING_TEXT_2' => 'Vous pouvez envoyer un ' . TEXT_GV_NAME . ' a partir de la la page Mon compte.
  Lorsque vous envoyez un ' . TEXT_GV_NAME . ' vous devez preciser les elements suivants :
  Le nom de la personne a qui vous envoyez le ' . TEXT_GV_NAME . ';
  L\'adresse email de la personne a qui vous envoyez le ' . TEXT_GV_NAME . ';
  Le montant que vous souhaitez envoyer (notez que vous n\'etes pas oblige d\'envoyer le montant total
   qui se trouve dans votre solde de ' . TEXT_GV_NAME . ');
  Un court message facultatif qui apparaitra dans l\'e-mail;
  Veuillez vous assurer que vous avez saisi toutes les informations correctement, 
  meme si vous aurez la possibilite de les modifier autant que vous le souhaitez 
  avant l\'envoi effectif de l\'e-mail.',
    'SUB_HEADING_TITLE_3' => 'Acheter avec ' . TEXT_GV_NAMES,
    'SUB_HEADING_TEXT_3' => 'Si vous avez des fonds dans le solde de votre ' . TEXT_GV_NAME . ', 
  vous pouvez utiliser ces fonds pour acheter d\'autres articles dans notre magasin.
  Au moment du paiement, une boite supplementaire apparaitra indiquant votre solde.
  Entrez le montant a utiliser des fonds de votre ' . TEXT_GV_NAME . '.
  Attention : vous devrez quand meme selectionner un autre mode de paiement s\'il n\'y a pas
  assez de fonds dans le solde de votre ' . TEXT_GV_NAME . ' pour couvrir le cout de votre achat.
  Si vous disposez de plus de fonds sur le solde de votre ' . TEXT_GV_NAME . ' que le cout total 
  de votre achat, le solde restant sera preserve pour une utilisation future.',
    'SUB_HEADING_TITLE_4' => 'Utiliser un ' . TEXT_GV_NAMES,
    'SUB_HEADING_TEXT_4' => 'Si vous recevez un ' . TEXT_GV_NAME . ' par e-mail, il contiendra 
    des details sur la personne qui vous a envoye le ' . TEXT_GV_NAME . ', accompagne d\'un court 
    message de leur part. L\'e-mail contiendra egalement le ' . TEXT_GV_REDEEM . ' ' . TEXT_GV_NAME . '.
    C\'est probablement une bonne idee d\'imprimer cet e-mail pour reference future. Vous pouvez
    maintenant utiliser le ' . TEXT_GV_NAME . ' de deux manieres?:<br><br>
  1. En cliquant a cet effet sur le lien contenu dans l\'email.
  Cela vous menera a la page Utiliser des ' . TEXT_GV_NAME . ' du magasin. Il vous sera ensuite demande
  de creer un compte avant que le ' . TEXT_GV_NAME . ' ne soit valide et ajoute au solde de vos ' . TEXT_GV_NAME . '.
  Vous pouvez ensuite utiliser le montant pour acheter nÅfimporte quel article dans notre magasin.<br><br>
  2. Pendant le processus de paiement, sur la meme page que celle sur laquelle vous selectionnez un mode de paiement,
  il y aura une case pour entrer un ' . TEXT_GV_REDEEM . '. Entrez le ' . TEXT_GV_REDEEM . ' ici et
  cliquez sur le bouton Utiliser. Le code sera valide et le montant ajoute au solde de vos ' . TEXT_GV_NAME . '.
  Vous pouvez ensuite utiliser le montant pour acheter nÅfimporte quel article dans notre magasin.',
    'SUB_HEADING_TITLE_5' => 'Quand des problemes surviennent.',
    'SUB_HEADING_TEXT_5' => 'Pour toute question concernant le systeme de ' . TEXT_GV_NAME . ', 
    veuillez contacter le magasin en utilisant notre page 
    <a href="' . zen_href_link(FILENAME_CONTACT_US) . '">Contactez-nous</a>. Veuillez vous assurer de
    fournir autant d\'informations que possible concernant le probleme afin que nous puissions le resoudre pleinement.',
    'SUB_HEADING_TITLE_0' => '',
    'SUB_HEADING_TEXT_0' => 'Veuillez choisir une des questions ci-dessus.',
    'TEXT_GV_REDEEM_INFO' => 'Veuillez entrer le code remboursement de votre '.TEXT_GV_NAME.' : ',
    'TEXT_GV_REDEEM_ID' => 'Code de remboursement : ',
];

return $define;

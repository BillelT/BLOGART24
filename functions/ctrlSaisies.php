<?php
//ctrl saisies form avant import bdd
function ctrlSaisies($saisie){

    // Convertion caractères spéciaux en entités HTML => peu performant
    // Compléter par htmlentities()
    $saisie = htmlspecialchars($saisie);
    // Suppression des espaces (ou d'autres caractères) en début et fin de chaîne
    $saisie = trim($saisie);
    // Suppression des antislashs d'une chaîne
    $saisie = stripslashes($saisie);
    // Conversion des caractères spéciaux en entités HTML
    $saisie = htmlentities($saisie);
    return $saisie;
}

//FONCTION BBCODE
function BBCode($chaine)
    {
    $chaine = str_replace("[b]", "<b>", $chaine);
    $chaine = str_replace("[/b]", "</b>", $chaine);

    $chaine = str_replace("[br/]", "<br/>", $chaine);
    $chaine = str_replace("[br]", "<br/>", $chaine);
   
    $chaine = str_replace("[i]", "<em>", $chaine);
    $chaine = str_replace("[/i]", "</em>", $chaine);
   
    $chaine = str_replace("[u]", "<u>", $chaine);
    $chaine = str_replace("[/u]", "</u>", $chaine);
  
   
    $chaine = str_replace("[code]", "<pre><code>", $chaine);
    $chaine = str_replace("[/code]", "</code></pre>", $chaine);            
        
    $chaine = preg_replace("#\[\*\]?([^\[]*) ?#", "<li>\\1</li>", $chaine);
    $chaine = str_replace(array('[list]','[/list]'), array('<ul>','</ul>'), 
$chaine);
    
    $chaine = preg_replace("#\[url\]((ht|f)tp://)([^\r\n\t<\"]*?)\[/url\]#i",
"'<a href=\"\\1' . str_replace(' ', '%20', '\\3') . '\">\\1\\3</a>'", $chaine);
    $chaine = preg_replace("/\[url=(.+?)\](.+?)\[\/url\]/", 
"<a href=\"$1\">$2</a>", $chaine);

    $chaine = preg_replace("#\[email\] ?([^\[]*) ?\[/email\]#",
"<a href=\"mailto:\\1\">\\1</a>", $chaine);
    $chaine = preg_replace("#\[email ?=([^\[]*) ?] ?([^]]*) ?\[/email\]#",
"<a href=\"mailto:\\1\">\\2</a>", $chaine);
   
    $chaine = preg_replace("#\[img\] ?([^\[]*) ?\[/img\]#",
"<img src=\"\\1\" alt=\"\" />", $chaine);
    $chaine = preg_replace("#\[img ?= ?([^\[]*) ?\]#",
"<img src=\"\\1\" alt=\"\" />", $chaine);
   
    return $chaine;
}

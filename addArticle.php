<?php
    function addArt(){
        $dom = new DOMDocument('1.0');
        //CREATE THE ARTICLE
        $art = $dom->createElement('article');
        $dom->appendChild($art);

        //CREATE THE A
        $a = $dom->createElement('a');
        $art->appendChild($a);
        $aAttribute = $dom->createAttribute('href');
        $aAttribute->value = '#';
        $a->appendChild($aAttribute);
        $aClass = $dom->createAttribute('class');
        $aClass->value = 'image';
        $a->appendChild($aClass);

        //CREATE THE IMAGE
        $img = $dom->createElement('img');
        $a->appendChild($img);
        $imgAttribute = $dom->createAttribute('src');
        $imgAttribute->value = 'images/pic05.jpg';
        $img->appendChild($imgAttribute);
        $imgAlt = $dom->createAttribute('alt');
        $imgAlt->value = '';
        $img->appendChild($imgAlt);

        //CREATE THE H3
        $h3 = $dom->createElement('h3', 'Nisl placerat');
        $art->appendChild($h3);
        $h3Class = $dom->createAttribute('class');
        $h3Class->value = 'major';
        $h3->appendChild($h3Class);

        //CREATE THE P
        $p = $dom->createElement('p', 'Lorem ipsum dolor sit amet, consectetur adipiscing vehicula id nulla dignissim dapibus ultrices.');
        $art->appendChild($p);

        //CREATE THE final a
        $a2 = $dom->createElement('a', 'Abrir');
        $art->appendChild($a2);
        $a2Attribute = $dom->createAttribute('href');
        $a2Attribute->value = '#';
        $a2->appendChild($a2Attribute);
        $a2Class = $dom->createAttribute('class');
        $a2Class->value = 'special';
        $a2->appendChild($a2Class);

        echo $dom->saveHTML();
    }
?>
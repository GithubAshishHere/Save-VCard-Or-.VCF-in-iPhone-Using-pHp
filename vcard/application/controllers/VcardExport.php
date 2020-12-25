<?php
use JeroenDesloovere\VCard\VCard;


        require_once 'vendor/Behat-Transliterator/Transliterator.php';
        require_once 'vendor/jeroendesloovere-vcard/VCard.php';
        // define vcard
        $vcardObj = new VCard();

        // add personal data
        $vcardObj->addName($_POST["firstname"]);
        $vcardObj->addBirthday($_POST["lastname"]);
        $vcardObj->addEmail($_POST["email"]);
        $vcardObj->addPhoneNumber($_POST["mb"]);
        $vcardObj->addAddress($_POST["address"]);
        
         $vcardObj->download();
 

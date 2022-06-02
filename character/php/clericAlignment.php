<?php


function getDeity($input)
{
    $a00 = array("Amaterasu", "Goddess of the sun, the heavens, and creation", "Lawful");
    $a01 = array("Ame-no-Uzume", "Goddess of the dawn", "Lawful");
    $a02 = array("The Great Fox", "Deity of rice and agriculture", "Lawful");
    $a03 = array("Omoikane", "Deity of wisdom", "Lawful");
    $a04 = array("Tenjin", "The travelling storyteller, and deity of poetry", "Lawful");
    $a05 = array("Tsukuyomi", "Moon God", "Lawful");

    $a06 = array("Fujin", "Master of the four winds", "Neutral");
    $a07 = array("Kagutsuchi", "Patron of blacksmiths and craftsmen who forge items from fire", "Neutral");
    $a08 = array("Raijin", "God of thunder, lightening and storms", "Neutral");
    $a09 = array("Hachiman", "God of war", "Neutral");
    $a10 = array("O-Monkey", "Deity of luck and gambling", "Neutral");

    $a11 = array("Grinning Baboon", "God of trickery and thievery", "Chaotic");
    $a12 = array("Lord Enma", "Demon lord, and the father of the oni", "Chaotic");
    $a13 = array("Radioactive Dinosaur", "A perversion of nature that rises from the ocean every few years to wreak havoc on civilizations", "Chaotic");
    $a14 = array("Izanami No Mikoto ", "The ruler of the Shadow Realms.", "Chaotic");
    $a15 = array("Mezu & Gozu", "The Guardians of the Gateway to the Abyss", "Chaotic");

    $array1= array($a00, $a01, $a02, $a03, $a04, $a05, $a06, $a07, $a08, $a09, $a10, $a11, $a12, $a13, $a14, $a15);
    
    return $array1[$input];
    
}

function getRandomDiety()
{
    $dietyNumber = rand(0, 15);

    return $dietyNumber;

}

function getDeityWeapons($input)
{
    $weapons = "";

    if($input >=0 && $input <=5)
    {
        $weapons = "Polearm [naginata], club, mace, sling, staff [bo/jo], war hammer [otsuchi], nunchaku, tonfa.";
    }

    if($input >=6 && $input <=10)
    {
        $weapons = "Polearm [naginata], dagger [tanto], mace, sling, staff, sword (any), jutte, sai.";
    }

    if($input >10)
    {
        $weapons = "Polearm [naginata], axe (any), dagger [tanto], dart [shuriken], flail [chigiriki], kama.";
    }

    return $weapons;
}


function getDeityUnholy($input)
{
    $unholy = "";

    if($input >=0 && $input <=5)
    {
        $unholy = "Undead, oni, ghosts, shapeshifters, abominations of nature (i.e., ashinaga-tenaga), chaos-aligned extraplanar creatures.";
    }

    if($input >=6 && $input <=10)
    {
        $unholy = "Undead, mundane animals, kappa, giant spiders, spirits, ghosts, ogre-like creatures (i.e., namahage), bakemono.";
    }

    if($input >10)
    {
        $unholy = "Animals capable of human speech (i.e., Inugami), lawful spirits, catlike humanoids (i.e., nekomata), aquatic humanoids, law-aligned dragons, law-aligned extraplanar creatures.";
    }

    return $unholy;

}

function layOnHandsLaw($alignment)
{
    if($alignment == "Lawful")
    {
        $heal = array("Fail", "2 dice", "3 dice", "4 dice", "5 dice");
        return $heal;
    }
    
    if($alignment == "Neutral")
    {
        $heal = array("Fail", "1 dice", "2 dice", "3 dice", "4 dice");
        return $heal;
    }
    
    if($alignment == "Chaotic")
    {
        $heal = array("Fail", "1 dice", "1 dice", "2 dice", "3 dice");
        return $heal;
    }

}


function layOnHandsNeutral($alignment)
{
    if($alignment == "Lawful")
    {
        $heal = array("Fail", "1 dice", "2 dice", "3 dice", "4 dice");
        return $heal;
    }
    
    if($alignment == "Neutral")
    {
        
        $heal = array("Fail", "2 dice", "3 dice", "4 dice", "5 dice");
        return $heal;
        
    }
    
    if($alignment == "Chaotic")
    {
        $heal = array("Fail", "1 dice", "2 dice", "3 dice", "4 dice");
        return $heal;
    }

}

function layOnHandsChaos($alignment)
{
    if($alignment == "Lawful")
    {
        $heal = array("Fail", "1 dice", "1 dice", "2 dice", "3 dice");
        return $heal;
    }
    
    if($alignment == "Neutral")
    {
        $heal = array("Fail", "1 dice", "2 dice", "3 dice", "4 dice");
        return $heal;
        
    }
    
    if($alignment == "Chaotic")
    {
        $heal = array("Fail", "2 dice", "3 dice", "4 dice", "5 dice");
        return $heal;
    }

}

?>
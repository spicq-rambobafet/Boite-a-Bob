<?php

/*
 * Projet : Boite à Bob
 * Version : 1.1
 * Auteur : Bob
 * URL : http://rambobafet.fr/boite-a-bob/
 * 
 */

function random_color_part() {
    return str_pad( dechex( mt_rand( 0, 255 ) ), 2, '0', STR_PAD_LEFT);
}

function random_color() {
    return random_color_part() . random_color_part() . random_color_part();
}

$sounds = array(
	0 => array(
		'file' => 'battez-vous',
		'color' => random_color(),
		'description' => "Battez vous"
	),
	1 => array(
		'file' => 'bouyah',
		'color' => random_color(),
		'description' => "Bouyah !"
	),
	2 => array(
		'file' => 'sisi',
		'color' => random_color(),
		'description' => "Si si"
	),
	3 => array(
		'file' => 'je-te-defonce',
		'color' => random_color(),
		'description' => "Je te défonce"
	),
	4 => array(
		'file' => 'pete-genoux',
		'color' => random_color(),
		'description' => "Pète les genoux"
	),
	5 => array(
		'file' => 'azy-la',
		'color' => random_color(),
		'description' => "Azy laa"
	),
	6 => array(
		'file' => 'bonjour',
		'color' => random_color(),
		'description' => "Bonjour !"
	),
	7 => array(
		'file' => 'bondou',
		'color' => random_color(),
		'description' => "Bondou'"
	),
	8 => array(
		'file' => 'penis-lol',
		'color' => random_color(),
		'description' => "Penis penis penis lol"
	),
	9 => array(
		'file' => 'mytho',
		'color' => random_color(),
		'description' => "Mythoo"
	),
	10 => array(
		'file' => 'faim',
		'color' => random_color(),
		'description' => "Faim !"
	),
	11 => array(
		'file' => 'wesh',
		'color' => random_color(),
		'description' => "Wesh"
	),
	12 => array(
		'file' => 'tu-voles',
		'color' => random_color(),
		'description' => "Tu voles, tu payes..."
	),
	13 => array(
		'file' => 'il-est-la',
		'color' => random_color(),
		'description' => "Il est là !"
	),
	14 => array(
		'file' => 'pizza',
		'color' => random_color(),
		'description' => "Pizza !"
	),
	15 => array(
		'file' => 'manger-pizza',
		'color' => random_color(),
		'description' => "Au lieu d'aller courir"
	),
	16 => array(
		'file' => 'ton-pere',
		'color' => random_color(),
		'description' => "Ton père le chauve"
	),
	17 => array(
		'file' => 'tinquiete',
		'color' => random_color(),
		'description' => "T'inquiète la mouette"
	),
	18 => array(
		'file' => 'allez',
		'color' => random_color(),
		'description' => "Allez"
	),
	19 => array(
		'file' => 'on-en-a-gros',
		'color' => random_color(),
		'description' => "On en a gros"
	),
	20 => array(
		'file' => 'ca-me-rappelle-une-ex',
		'color' => random_color(),
		'description' => "Ca me rappelle une ex"
	),
	21 => array(
		'file' => 'comme-ta-mere',
		'color' => random_color(),
		'description' => "Comme ta mère"
	),
	22 => array(
		'file' => 'moins-que-ta-mere',
		'color' => random_color(),
		'description' => "Moins que ta mère"
	),
	23 => array(
		'file' => 'et-bim',
		'color' => random_color(),
		'description' => "Et bim!"
	),
	24 => array(
		'file' => 'tes-mauvais-jack',
		'color' => random_color(),
		'description' => "T'es mauvais Jack"
	),
	25 => array(
		'file' => 'ueueue',
		'color' => random_color(),
		'description' => "Ué ué ué"
	),
	26 => array(
		'file' => 'ouai',
		'color' => random_color(),
		'description' => "Ouai..."
	),
	27 => array(
		'file' => 'moi-je-vous-le-dis',
		'color' => random_color(),
		'description' => "Moi je vous le dit"
	)
);

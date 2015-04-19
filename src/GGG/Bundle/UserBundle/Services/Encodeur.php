<?php

namespace GGG\Bundle\UserBundle\Services;

use Symfony\Component\Security\Core\Encoder\PasswordEncoderInterface;


/* encodeur personnalisé pour l'authentification */
class Encodeur implements PasswordEncoderInterface{

	public function encodePassword($raw, $salt){
		$encoded = crypt($raw,$salt);
		return $encoded;
	}

	public function isPasswordValid($encoded, $raw, $salt){

		if( $encoded === crypt($raw,$salt) ){
			return true;
		}
		else{
			return false;
		}

	}


} 

?> 
<?php
/**
 * Functions used for decoding/encoding ids in ShortUrl Extension
 *
 * @file
 * @ingroup Extensions
 * @author Yuvi Panda, http://yuvi.in
 * @copyright © 2011 Yuvaraj Pandian (yuvipanda@yuvi.in)
 * @licence Modified BSD License
 */

if ( !defined( 'MEDIAWIKI' ) ) {
	exit( 1 );
}

/* stolen from http://www.php.net/manual/en/function.base64-encode.php#63543 */
function urlsafe_b64encode($string) {
	    $data = base64_encode($string);
		    $data = str_replace(array('+','/','='),array('-','_',''),$data);
		    return $data;
}

/* stolen from http://www.php.net/manual/en/function.base64-encode.php#63543 */
function urlsafe_b64decode($string) {
	    $data = str_replace(array('-','_'),array('+','/'),$string);
		    $mod4 = strlen($data) % 4;
		    if ($mod4) {
				        $data .= substr('====', $mod4);
						    }
			    return base64_decode($data);
}

function shorturlEncode ( $id ) {
	return urlsafe_b64encode( $id );
}

function shorturlDecode ( $data ) {
	return intval(urlsafe_b64decode ( $data ));
}

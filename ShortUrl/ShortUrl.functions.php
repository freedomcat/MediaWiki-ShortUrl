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

function shorturlEncode ( $id ) {
	return base_convert ( $id, 10, 36 );
}

function shorturlDecode ( $data ) {
	return base_convert ( $data, 36, 10 );
}

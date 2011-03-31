<?php
/**
 * Setup for ShortUrl extension, a special page that provides redirects to articles  
 * via their page IDs
 *
 * @file
 * @ingroup Extensions
 * @author Yuvi Panda, http://yuvi.in
 * @copyright © 2011 Yuvaraj Pandian (yuvipanda@yuvi.in)
 * @licence GNU General Public Licence 2.0
 */

if( !defined( 'MEDIAWIKI' ) ) {
	echo( "This file is an extension to the MediaWiki software and cannot be used standalone.\n" );
	die( 1 );
}

// Extension credits that will show up on Special:Version
$wgExtensionCredits['specialpage'][] = array(
	'path' => __FILE__,
	'name' => 'ShortUrl',
	'author' => 'Yuvi Panda',
	'url' => 'http://www.mediawiki.org/wiki/Extension:ShortUrl',
	'descriptionmsg' => 'shorturl-desc',
);

// Set up the new special page
$dir = dirname( __FILE__ ) . '/';
$wgExtensionMessagesFiles['ShortUrl'] = $dir . 'ShortUrl.i18n.php';

$wgAutoloadClasses['SpecialShortUrl'] = $dir . 'SpecialShortUrl.php';
$wgSpecialPages['ShortUrl'] = 'SpecialShortUrl';

// Configuration
// No Configuration yet
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
	echo( "not a valid entry point.\n" );
	die( 1 );
}

/**
 * Provides the contact form
 * @ingroup SpecialPage
 */
class SpecialShortUrl extends SpecialPage {

	/**
	 * Constructor
	 */
	public function __construct() {
		parent::__construct( 'ShortUrl' );
	}

	/**
	 * Main execution function
	 *
	 * @param $par Mixed: Parameters passed to the page
	 */
	public function execute( $par ) {
        global $wgOut, $wgRequest;
        
        $id = base_convert ( $par, 36, 10 );
        $title = Title::newFromID( $id );
        if ( $title ) {
            $wgOut->redirect( $title->getFullURL(), '301' );
            return;
        }

		// Wrong ID
		$notfound = wfMsg ( 'shorturl-not-found', $id );
        $wgOut->addHTML( $notfound );
	}
}

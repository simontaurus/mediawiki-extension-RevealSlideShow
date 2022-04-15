<?php

class RevealSlideShow {

	public static function onBeforePageDisplay( $out ) {

		$out->addModules( 'ext.RevealSlideShow' );

		return true;

	}

}

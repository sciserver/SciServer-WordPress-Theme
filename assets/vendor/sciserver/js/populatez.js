/* ========================================================================
 * populatez.js v1.0.0
 * ========================================================================
 * What it does:
 * 
 * 
 * ======================================================================== 
 * Copyright 2011-2016 IDIES
 * Licensed under MIT 
 * ======================================================================== */

+function ($) {
	
	'use strict';

	// Populatez PUBLIC CLASS DEFINITION
	// ================================
	var Populatez = {
			
		// update the overview message and filters message
		init: function( context ){
		
			//var fields = $( context ).data('populatez-fields').split(",").map(function (str) { return str.trim(); });
			var report = $( context ).data('populatez-request');
			//$( Object.keys( report ) ).each( function(){$('<input>').attr({type: 'hidden',name: this,value: report[this]}).appendTo('form'); });
			$( Object.keys( report ) ).each( function(){
				if ( this.startsWith("popz_") & ( $( "form input."+this ).length > 0 ) ) {
					$( "form input."+this ).attr( 'value', report[this] );
				}
				//$('<input>').attr({type: 'hidden',name: this,value: report[this]}).appendTo('form'); 
			});
			
		
			if ( $( 'form input.json' ).length ) {
				$( 'form input.json' ).prop( 'value' , JSON.stringify(report) );
			}
		}
	}

	$(document).ready( function() {
		
		if ( $( "#populatez" ).length === 1) {
			Populatez.init( "#populatez" );
		}
	
		return;
	});
  
}(jQuery);

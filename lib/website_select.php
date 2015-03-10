<?php
/**
 * Class to hold IDIES website variables
 */
Class IDIES_Web { 

	public $headerfile; 
	public $footerfile;
	public $widgetsfile;
	
	public $footer_widgets;
	public $splash_widgets;
	
	public function __construct() {
	
		$this->header_file = WEBSITE . '_header';
		$this->footer_file = WEBSITE . '_footer';
		$this->widgets_file = WEBSITE . '_widgets';
	
		switch ( WEBSITE ) {
			case 'idies';
				$this->footer_widgets=4;
				$this->splash_widgets=5;
				break;
			case 'sdss';
				$this->footer_widgets=4;
				$this->splash_widgets=1;
				break;
			case 'sciserver';
				$this->footer_widgets=3;
				$this->splash_widgets=1;
				break;
				
		}
	
	}
	
}

$IDIES_Web = new IDIES_Web;

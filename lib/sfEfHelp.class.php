<?php
 /**
 * sfEfHelp
 *
 * Class to load help widget
 *
 * @package    sfEfHelpWidgetPlugin
 * @subpackage 
 * @author     Yaismel Miranda Pons <yaismelmp@googlemail.com>
 * @version    1.0
 */
class sfEfHelp
{
  public static function load()
  {
	  if ( isset( $_SERVER ) ) {
		  $sAgent = $_SERVER['HTTP_USER_AGENT'] ;
	  }
	  else {
		  global $HTTP_SERVER_VARS ;
		  if ( isset( $HTTP_SERVER_VARS ) ) {
			  $sAgent = $HTTP_SERVER_VARS['HTTP_USER_AGENT'] ;
		  }
		  else {
			  global $HTTP_USER_AGENT ;
			  $sAgent = $HTTP_USER_AGENT ;
		  }
	  }
	
    $help_path = sfConfig::get('sfhelp_web_dir', '/sfEfHelpWidgetPlugin');
    
    /* Load jQuery core */
    $filename = $help_path.'/js/'.sfConfig::get('jquery_core', 'jquery-1.4.3.min.js');
    sfContext::getInstance()->getResponse()->addJavascript($filename);
    
    /* To fix z-index problems in IE6, include the bgiframe plugin on your page */
    $filename = $help_path.'/js/'.sfConfig::get('jquery_bgiframe', 'jquery.bgiframe.min.js');
    sfContext::getInstance()->getResponse()->addJavascript($filename);
    
    /* [if IE] load excanvas.js */
    if ( strpos($sAgent, 'MSIE') !== false )
    {
      $filename = $help_path.'/js/'.sfConfig::get('canvas', 'excanvas.js');
      sfContext::getInstance()->getResponse()->addJavascript($filename);
    }
      
    /* Load BeautyTips */
    $filename = $help_path.'/js/'.sfConfig::get('jquery_bt', 'jquery.bt.min.js');
    sfContext::getInstance()->getResponse()->addJavascript($filename);
    
    /* Load principal functions */
    $filename = $help_path.'/js/'.sfConfig::get('efhelpwidget', 'helpwidget.js');
    sfContext::getInstance()->getResponse()->addJavascript($filename);  
  }

}  

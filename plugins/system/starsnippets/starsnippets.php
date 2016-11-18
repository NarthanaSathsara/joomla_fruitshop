<?php
/*------------------------------------------------------------------------
# plg_starsnippets - StarSnippets Plugin
# ------------------------------------------------------------------------
# author    1sr
# copyright Copyright (C) 2013 1sr.de All Rights Reserved.
# @license - http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
# Websites: http://1sr.de
-------------------------------------------------------------------------*/

defined('JPATH_BASE') or die;

jimport('joomla.plugin.plugin');

class plgSystemStarSnippets extends JPlugin {


	function __construct( &$subject, $params ) {
		
		parent::__construct( $subject, $params );

		$app = JFactory::getApplication();

		$this->admin = $this->params->get('admin', 0);
		
		// only run replacement on site, not admin area
		$this->shouldrun = !$app->isAdmin();

	}
	
	// replace using onAfterRender event
	function onAfterRender() {

		if ($this->shouldrun) {

			$body = JResponse::getBody();
			
			$currentPageUri = JURI::current();
			
			$domain = JURI::getInstance($currentPageUri)->getScheme()."://star-snippets.com";
			
			$snippet = ($this->params->get('snippet') != "") ? $this->params->get('snippet') : "{star-snippet}";
			
			$timeout = ($this->params->get('requestTimeout') != "" && is_int($this->params->get('requestTimeout'))) ? is_int($this->params->get('requestTimeout')) : 10;
			
			$emptyColor = ($this->params->get('emptyColor') != "") ? " emptyColor=\"".$this->params->get('emptyColor')."\"" : "";
			$fillColor = ($this->params->get('fillColor') != "") ? " fillColor=\"".$this->params->get('fillColor')."\"" : "";
			$hoverColor = ($this->params->get('hoverColor') != "") ? " hoverColor=\"".$this->params->get('hoverColor')."\"" : "";
			
			$starSnippetTag = "<star-snippet"
				." size=\"".$this->params->get('size')."\""
				." orientation=\"".$this->params->get('orientation')."\""
				.$emptyColor
				.$fillColor
				.$hoverColor
				." showRating=\"".$this->params->get('showRating')."\""
				.">"
				."</star-snippet>";
			
			$body = str_replace($snippet, $starSnippetTag, $body);
			
			$doc = JFactory::getDocument();
			 
			$url = $domain."/rating?url=".$currentPageUri;
			
			if($doc->getTitle() != "")
			{
			  $url .= "&name=".rawurlencode($doc->getTitle());
			}
			
			if($doc->getDescription() != "")
			{
			  $url .= "&description=".rawurlencode($doc->getDescription());
			}
			
			if($this->params->get('requestFunction') == "file_get_contents")
			{
				try {
					$streamContext = stream_context_create(array('http' => array('timeout' => $timeout)));
					
					$response = file_get_contents($url, false, $streamContext);

					if (!$response)
					{}
					else
					{
						$body = str_replace("</body>", $response."</body>", $body);
					}
				} catch (Exception $ex) {
				}
			}
			else
			{
				try {
					$session = curl_init($url);
					curl_setopt($session, CURLOPT_HEADER, false); //no header
					curl_setopt($session, CURLOPT_RETURNTRANSFER, true);
					curl_setopt($session, CURLOPT_TIMEOUT, $timeout);
					$response = curl_exec($session);
					curl_close($session);

					if (!$response)
					{}
					else
					{
						$body = str_replace("</body>", $response."</body>", $body);
					}
				} catch (Exception $ex) {
				}
			}
			
			$jsCode = "\n"
				."<script>\n"
					."(function() {\n"
						."function async_load(){\n"						
							."var s = document.createElement('script');\n"
							."s.type = 'text/javascript';\n"
							."s.async = true;\n"
							."s.src = '".$domain."/script';\n"
							."//s.src = '".$domain."/script?prevent_cache=' + new Date().getTime(); // prevent caching\n"
							."var x = document.getElementsByTagName('script')[0];\n"
							."x.parentNode.insertBefore(s, x);\n"
						."}\n"
						."if (window.attachEvent) {\n"
							."window.attachEvent('onload', async_load);\n"
						."} else {"
							."window.addEventListener('load', async_load, false);}\n"
					."})();\n"
				."</script>\n";
				
			$body = str_replace("</body>", $jsCode."</body>", $body);

			JResponse::setBody($body);
		}			
	}
}
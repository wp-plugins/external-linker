<?php
/*
Plugin Name: External Linker
Plugin URI: http://johnjcamilleri.com/?cat=78
Description: Allows you to get around using <code>target="_blank"</code> by converting all your outbound links using Javascript.
Version: 0.2
Author: John J. Camilleri
Author URI: http://johnjcamilleri.com
*/

/* === Setup options === */
define('EXTERNAL_LINKER_CLASS_NAME', 'external');
define('EXTERNAL_LINKER_USE_FILTER', true);
/* = End setup options = */

/* Filter posts automatically */
if (EXTERNAL_LINKER_USE_FILTER):
add_filter('the_content', 'external_linker_post_filter');
function external_linker_post_filter($content) {

	//The required class name
	$className = EXTERNAL_LINKER_CLASS_NAME;
	
	//Replace all target="_blank" with class="external" (this could result in duplicate 'class' attributes, fixed in next step)
	$content = preg_replace('/(<a .*?)target="_blank"(.*?>)/i', '$1class="'.$className.'"$2', $content);
	
	//Join together duplicate 'class' attributes
	$content = preg_replace('/(<a .*?)class="(.*?)"(.*?)class="(.*?)"(.*?>)/i', '$1class="$2 $4"$3$5', $content);
	
	//Return it
	return $content;
}
endif;


/* Insert JS snippet */
add_action('wp_head', 'external_linker_insert_js');
function external_linker_insert_js() {

	//The required class name
	$className = EXTERNAL_LINKER_CLASS_NAME;

	//Only load on front-end pages
	if (!is_admin()):
	echo <<<JS

<script type="text/javascript">
/* <![CDATA[ */
	//Code to place target="_blank" in all links of class "external"
	jQuery(document).ready(function(){
		if (!document.getElementsByTagName) return;
		var anchors = document.getElementsByTagName("a");
		for (var i=0; i < anchors.length; i++) {
			var anchor = anchors[i];
			if (anchor.getAttribute("href") && anchor.className.indexOf("{$className}") > -1)
				anchor.target = "_blank";
		}
	});
/* ]]> */
</script>

JS;
	endif;
}


?>
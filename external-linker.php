<?php
/*
Plugin Name: External Linker
Plugin URI: http://johnjcamilleri.com/?cat=78
Description: Allows you to get around using <code>target="_blank"</code> by converting all your outbound links using Javascript.
Version: 0.1
Author: John J. Camilleri
Author URI: http://johnjcamilleri.com
*/

/* Insert JS snippet */
add_action('wp_head', 'external_linker_insert_js');
function external_linker_insert_js() {

	//The required class name
	$className = 'external';

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
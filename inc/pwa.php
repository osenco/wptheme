<?php
/**
 * @package WPTHEME
 * @subpackage Progressive Web App Functionality
 * @author Osen Concepts < hi@osen.co.ke >
 * @since 0.1.0
 */

/**
 * Addd web manifest and link for Progressive Web App functionality
 */
function osen_pwa_set()
{ ?>
	<link rel="manifest" id="manifest-placeholder" href="<?php echo esc_url( home_url( '?osen_manifest_json' ) ); ?>">
	<script type="text/javascript">
		if ('serviceWorker' in navigator) {
			window.addEventListener('load', function() {
				navigator.serviceWorker.register('<?php echo esc_url( home_url( 'worker.js' ) ); ?>').then(function( registration ) {
					registration.update();
					//console.log('Service Worker Registered');
				}).catch(function(error) {
					//console.log('Service Worker registration failed:', error);
				});
			});
		} else {
			//console.log('Service Worker Not Supported');
		}

		jQuery(document).ready(function(){
		    if (("standalone" in window.navigator) && window.navigator.standalone) {
		      $('a').on('click', function(e){
		        e.preventDefault();
		        var new_location = $(this).attr('href');
		        if (new_location != undefined && new_location.substr(0, 1) != '#' && $(this).attr('data-method') == undefined){
		          window.location = new_location;
		        }
		      });
		    }
		  });
	</script>
	<?php
}
add_action( 'wp_head', 'osen_pwa_set' );

function osen_manifest_json()
{
	$manifest = array(
		'name'				=> get_theme_mod( 'osen_manifest_name', get_bloginfo('name') ),
		'short_name'		=> get_theme_mod( 'osen_manifest_short_name', get_bloginfo('name') ),
		'description'		=> get_theme_mod( 'osen_manifest_description', get_bloginfo('description') ),
		'lang'				=> get_theme_mod( 'osen_manifest_language', get_bloginfo('language') ),
		'start_url'			=> '/',
		'orientation'		=> get_theme_mod( 'osen_manifest_orientation', 'portrait' ),
		'display'			=> get_theme_mod( 'osen_manifest_display', 'standalone' ),
		'theme_color'				=> get_theme_mod( 'osen_manifest_color', 'white' ),
		'background_color'	=> get_theme_mod( 'osen_manifest_background_color', 'white' ),
		'icons'			=> array(
			array(
				'src'			=> get_template_directory_uri() . '/assets/img/favicon/android-chrome-192x192.png',
	            'sizes'			=> '192x192',
	            'type'			=> 'image/png'
            ),
			array(
				'src'			=> get_template_directory_uri() . '/assets/img/favicon/android-chrome-384x384.png',
	            'sizes'			=> '384x384',
	            'type'			=> 'image/png'
            ),
		)
	);

	if ( isset( $_GET['osen_manifest_json'] ) ) {
		wp_send_json( $manifest ); 
	}
}
add_action( 'init', 'osen_manifest_json' );
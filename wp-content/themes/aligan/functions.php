<?php

function aligan_theme_support() {

	add_theme_support( 'automatic-feed-links' );

	add_theme_support(
		'custom-background',
		array(
			'default-color' => '2596d3',
		)
	);

	global $content_width;
	if ( ! isset( $content_width ) ) {
		$content_width = 580;
	}

	add_theme_support( 'post-thumbnails' );



	//add_image_size( 'carousel-responsive', 144, 225, true );

	$logo_width  = 147;
	$logo_height = 36;

	if ( get_theme_mod( 'retina_logo', false ) ) {
		$logo_width  = floor( $logo_width * 2 );
		$logo_height = floor( $logo_height * 2 );
	}

	add_theme_support(
		'custom-logo',
		array(
			'height'      => $logo_height,
			'width'       => $logo_width,
			'flex-height' => true,
			'flex-width'  => true,
			'header-text' => array( 'site-title', 'site-description' ),
		)
	);
	add_theme_support( 'title-tag' );
	add_theme_support( 'favicon' );
	add_theme_support( 'widgets' );
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'script',
			'style',
		)
	);
	load_theme_textdomain( 'aligan' );
	add_theme_support( 'align-wide' );
}

add_action( 'after_setup_theme', 'aligan_theme_support' );


/**
 * Register and Enqueue Styles.
 */

function aligan_login_stylesheet() {
	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery-1.12.2.min.js' );
	wp_enqueue_style( 'custom-login', get_template_directory_uri() . '/assets/css/style-login.css', array() );
	wp_enqueue_script( 'login-js', get_template_directory_uri() . '/assets/js/login-scripts.js' );
	wp_localize_script( 'login-js', 'home_url', esc_url( home_url( '/' ) ) );
}

add_action( 'login_enqueue_scripts', 'aligan_login_stylesheet' );

/**
 * Register and Enqueue Scripts.
 */
function aligan_register_scripts() {

	wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() . '/core/css/bootstrap/bootstrap.css', array(), null, 'all' );
	wp_enqueue_style( 'normalize-style', get_stylesheet_directory_uri() . '/core/css/normalize.css', array(), null, 'all' );




	wp_enqueue_style( 'main-style', get_stylesheet_directory_uri() . '/core/css/main.css', array(), null, 'all' );

	wp_enqueue_style( 'aligan-theme', get_stylesheet_directory_uri() . '/core/css/aligan-theme.css', array(), null, 'all' );
	wp_enqueue_style( 'contact-card-style', get_stylesheet_directory_uri() . '/core/components/contact-card/contact.css', array(), null, 'all' );
	wp_enqueue_style( 'navbar-style', get_stylesheet_directory_uri() . '/core/components/navbar/navbar.css', array(), null, 'all' );
	wp_enqueue_style( 'footer-style', get_stylesheet_directory_uri() . '/core/components/footer/footer.css', array(), null, 'all' );
	wp_enqueue_script( 'modernizr-js', get_template_directory_uri() . '/core/js/vendor/modernizr-2.8.3.min.js', array( 'jquery' ), 11, true );
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/core/js/vendor/bootstrap/bootstrap.bundle.js', array( 'jquery' ), 1.1, true );
	wp_enqueue_script( 'plugins-js', get_template_directory_uri() . '/core/js/plugins.js', array( 'jquery' ), 1.1, true );
	wp_enqueue_script( 'main-js', get_template_directory_uri() . '/core/js/main.js', array( 'jquery' ), 1.1, true );


	if ( is_page_template( 'page-portada.php' ) ) {
		wp_enqueue_style( 'fontawesome-style', get_stylesheet_directory_uri() . '/core/css/fontawesome.css', array(), null, 'all' );
		wp_enqueue_style( 'index-style', get_stylesheet_directory_uri() . '/core/index.css', array(), null, 'all' );
	}else{
		wp_enqueue_style( 'vote-card-style', get_stylesheet_directory_uri() . '/core/components/vote-card/vote-card.css', array(), null, 'all' );
	}

	if ( is_page_template( 'page-faqs.php' ) ) {
		wp_enqueue_style( 'historia-style', get_stylesheet_directory_uri() . '/core/historia.css', array(), null, 'all' );
	}

	if ( is_page_template( 'page-estructura.php' ) ) {
		wp_enqueue_style( 'estructura-style', get_stylesheet_directory_uri() . '/core/estructura.css', array(), null, 'all' );
		wp_enqueue_script( 'estructura-js', get_template_directory_uri() . '/core/estructura.js', array(), 1.2, true );
	}

	if ( is_page_template( 'page-atencion-ciudadana.php' ) ) {
		wp_enqueue_script( 'atencion-ciudadana-js', get_template_directory_uri() . '/assets/js/atencion-ciudadana.js', array(), 1.2, true );
		wp_localize_script( 'atencion-ciudadana-js', 'admin_url', admin_url() );
		wp_localize_script('atencion-ciudadana-js', 'security_suscribirse', wp_create_nonce('suscribirse_a4gs7v'));
	}

	wp_enqueue_style( 'aligan-style', get_stylesheet_uri(), array(), 1.4, 'all' );
	wp_enqueue_script( 'aligan-js', get_template_directory_uri() . '/assets/js/scripts.js', array( 'jquery'), 1.2, true );
	wp_localize_script( 'aligan-js', 'admin_url', admin_url() );
	wp_localize_script('aligan-js', 'security_suscribirse', wp_create_nonce('suscribirse_a4gs7v'));
}

add_action( 'wp_enqueue_scripts', 'aligan_register_scripts' );

function padit_login_stylesheet() {
	wp_enqueue_script( 'jquery', get_template_directory_uri(). '/core/js/vendor/jquery-1.12.0.min.js', array(), '1.12.0');
	wp_enqueue_style( 'custom-login', get_template_directory_uri() . '/assets/css/style-login.css', array() );
	wp_enqueue_script( 'login-js', get_template_directory_uri() . '/assets/js/login-scripts.js' );
	wp_localize_script( 'login-js', 'home_url', esc_url( home_url( '/' ) ) );
}

add_action( 'login_enqueue_scripts', 'padit_login_stylesheet' );


function load_custom_scripts() {
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', get_template_directory_uri() . '/core/js/vendor/jquery-1.12.0.min.js', array(), '1.12.0' );
	wp_enqueue_script( 'jquery' );
}

if ( ! is_admin() ) {
	add_action( 'wp_enqueue_scripts', 'load_custom_scripts', 99 );
}

/**
 * Register navigation menus uses wp_nav_menu in five places.
 */
function aligan_menus() {

	$locations = array(
		'main_menu'   => __( 'Menú principal', 'aligan' ),
		'footer_menu' => __( 'Menú pie de página', 'aligan' ),
	);
	register_nav_menus( $locations );
}
add_action( 'init', 'aligan_menus' );

function atg_menu_classes($classes, $item, $args) {
	if($args->theme_location == 'main_menu') {
		$classes[] = 'nav-item';
		if( in_array('current-menu-item', $classes) ){
			$classes[] = 'active ';
		}
	}
	return $classes;
}
add_filter('nav_menu_css_class', 'atg_menu_classes', 1, 3);

function add_menuclass($ulclass) {
	return preg_replace('/<a /', '<a class="nav-link"', $ulclass);
}
add_filter('wp_nav_menu','add_menuclass');


/**
 * Get the information about the logo.
 *
 * @param string $html The HTML output from get_custom_logo (core function).
 *
 * @return string $html
 */
function aligan_get_custom_logo( $html ) {

	$logo_id = get_theme_mod( 'custom_logo' );

	if ( ! $logo_id ) {
		return $html;
	}

	$logo = wp_get_attachment_image_src( $logo_id, 'full' );

	if ( $logo ) {
		// For clarity.
		$logo_width  = esc_attr( $logo[1] );
		$logo_height = esc_attr( $logo[2] );

		// If the retina logo setting is active, reduce the width/height by half.
		if ( get_theme_mod( 'retina_logo', false ) ) {
			$logo_width  = floor( $logo_width / 2 );
			$logo_height = floor( $logo_height / 2 );

			$search = array(
				'/width=\"\d+\"/iU',
				'/height=\"\d+\"/iU',
			);

			$replace = array(
				"width=\"{$logo_width}\"",
				"height=\"{$logo_height}\"",
			);

			// Add a style attribute with the height, or append the height to the style attribute if the style attribute already exists.
			if ( strpos( $html, ' style=' ) === false ) {
				$search[]  = '/(src=)/';
				$replace[] = "style=\"height: {$logo_height}px;\" src=";
			} else {
				$search[]  = '/(style="[^"]*)/';
				$replace[] = "$1 height: {$logo_height}px;";
			}

			$html = preg_replace( $search, $replace, $html );

		}
	}

	return $html;

}

add_filter( 'get_custom_logo', 'aligan_get_custom_logo' );

if ( ! function_exists( 'wp_body_open' ) ) {

	/**
	 * Shim for wp_body_open, ensuring backwards compatibility with versions of WordPress older than 5.2.
	 */
	function wp_body_open() {
		do_action( 'wp_body_open' );
	}
}

/**
 * Add ACF options pages.
 *
 * @link
 */
add_action( 'acf/init', 'my_acf_op_init' );
function my_acf_op_init() {
	acf_add_options_page( array(
		'page_title' => 'Opciones generales',
		'menu_title' => __( 'Opciones generales', 'text-domain' ),
		'menu_slug'  => "site-options",
		'post_id'    => 'options'
	) );
}

/**
 * Save ACF in another database
 *
 * @since Theme 1.0
 */
add_filter( 'acf/settings/save_json', 'my_acf_json_save_point' );
function my_acf_json_save_point( $path ) {
	// update path
	$path = get_stylesheet_directory() . '/acf';

	// return
	return $path;

}

add_filter( 'acf/settings/load_json', 'my_acf_json_load_point' );
function my_acf_json_load_point( $paths ) {
	unset( $paths[0] );
	$paths[] = get_stylesheet_directory() . '/acf';

	return $paths;
}

// Redirect user to home on logout and login
add_action( 'wp_logout', 'logout_after_logout' );
function logout_after_logout() {
	wp_redirect( home_url() );
	exit();
}

function login_redirect( $redirect_to, $request, $user ) {
	return home_url();
}

add_filter( 'login_redirect', 'login_redirect', 10, 3 );


add_action( 'wp_enqueue_scripts', 'wpassist_dequeue_scripts' );
function wpassist_dequeue_scripts() {
	if ( ! is_user_logged_in() ) {
		wp_deregister_script( 'wp-emoji' );
		if ( ! is_singular( 'post', 'subprogama' ) ) {
			wp_deregister_script( 'wp-embed' );
		}
	}
}

function disable_emojis() {
	if ( ! is_user_logged_in() ) {
		remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
		remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
		remove_action( 'wp_print_styles', 'print_emoji_styles' );
		remove_action( 'admin_print_styles', 'print_emoji_styles' );
		remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
		remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
		remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
		add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
	}
}

add_action( 'init', 'disable_emojis' );


function get_url_by_template( $template = '' ) {
	$url   = '';
	$pages = get_pages( [
		'meta_key'   => '_wp_page_template',
		'meta_value' => $template,
	] );
	foreach ( $pages as $page ):
		$id  = $page->ID;
		$url = get_permalink( $id );
		break;
	endforeach;

	return $url;
}

function get_post_by_template( $template = '' ) {
	$id   = '';
	$pages = get_pages( [
		'meta_key'   => '_wp_page_template',
		'meta_value' => $template,
	] );
	foreach ( $pages as $page ):
		$id  = $page->ID;
		break;
	endforeach;

	return $id;
}

function aligan_excerpt_more( $more ) {
	return '';
}

add_filter( 'excerpt_more', 'aligan_excerpt_more' );

add_action( 'wp_ajax_send_email', 'send_email' );
add_action( 'wp_ajax_nopriv_send_email', 'send_email' );
function send_email() {
	check_ajax_referer( 'send_email_j17af23', 'security' );
	if ( isset( $_POST['data'] ) ) {
		parse_str( $_POST['data'], $form_data );

		$contactonombre = $form_data['contactonombre'];
		$contactocorreo   = $form_data['contactocorreo'];
		$contactoasunto = $form_data['contactoasunto'];
		$contactomensaje   = $form_data['contactomensaje'];

		$land    = true;
		$message = '';

		if(empty($contactonombre) || empty($contactocorreo) || empty($contactoasunto) || empty($contactomensaje)){
			$land    = false;
			$message .= 'Revise los campos vacíos. Todos los campos son obligatorios. ';
		}

		if(empty($contactocorreo)){

		}elseif(filter_var($contactocorreo, FILTER_VALIDATE_EMAIL) == FALSE){
			$land    = false;
			$message .= 'Escriba un correo electrónico válido. ';
		}

		if ( $land ) {

			$correo_admin = '';
			$mensaje_admin = '';
			$mensaje_respuesta = '';
			$act_mensaje_respuesta = '';
			$headers = array( 'Content-Type: text/html; charset=UTF-8' );

			$pages = get_pages(array(
				'meta_key' => '_wp_page_template',
				'meta_value' => 'page-contactos.php'
			));

			foreach($pages as $page){
				$correo_admin = get_field('correo_administrador',$page->ID);
				$mensaje_admin = get_field('correo_administrador',$page->ID);
				$mensaje_respuesta = get_field('mensaje_resp_automatica',$page->ID);
				$act_mensaje_respuesta = get_field('act_resp_automatica',$page->ID);
			}

			if($act_mensaje_respuesta=='si' && !empty($mensaje_respuesta)){
				str_replace('!nombre',$contactonombre,$mensaje_respuesta);
				str_replace('!correo',$contactocorreo,$mensaje_respuesta);
				str_replace('!asunto',$contactoasunto,$mensaje_respuesta);
				str_replace('!mensaje',$contactomensaje,$mensaje_respuesta);
				wp_mail( $contactocorreo, 'Formulario de contacto ('.$contactoasunto.')', $mensaje_respuesta, $headers) ;
			}

			str_replace('!nombre',$contactonombre,$mensaje_admin);
			str_replace('!correo',$contactocorreo,$mensaje_admin);
			str_replace('!asunto',$contactoasunto,$mensaje_admin);
			str_replace('!mensaje',$contactomensaje,$mensaje_admin);
			if(wp_mail( $correo_admin, 'Formulario de contacto ('.$contactoasunto.')', $mensaje_admin, $headers )){
				echo json_encode( [ "answer" => 'true', 'message' => pll__( 'Su mensaje ha sido enviado.' ) ] );
			}else{
				echo json_encode( [ "answer" => 'false', 'message' => pll__( 'No se ha podido enviar el mensaje. Por favor contacte con el administrador el sitio.' ) ] );
			}

			wp_die();
		}

		if ( ! $land ) {
			echo json_encode( [ "answer" => 'false', 'message' => $message ] );
			wp_die();
		}
	} else {
		exit;
	}
	exit;
}

add_action( 'wp_ajax_atencion_ciudadana', 'atencion_ciudadana' );
add_action( 'wp_ajax_nopriv_atencion_ciudadana', 'atencion_ciudadana' );
function atencion_ciudadana() {
	check_ajax_referer( 'suscribirse_a4gs7v', 'security' );
	if ( isset( $_POST['data'] ) ) {
		parse_str( $_POST['data'], $form_data );

		$land = true;
		$message = '';

		$tipo = $form_data['radio-stacked'];
		$nombre   = $form_data['form-nombre'];
		$apellidos = $form_data['form-apellidos'];
		$ci   = $form_data['form-ci'];
		$pais   = $form_data['form-pais'];
		$provincia   = $form_data['form-provincia'];
		$direccion   = $form_data['form-direccion'];
		$telefono   = $form_data['form-telefono'];
		$celular   = $form_data['form-celular'];
		$correo   = $form_data['form-correo'];
		$asunto   = $form_data['form-asunto'];
		$adjunto   = $form_data['form-adjunto'];

		if($tipo=='identificado'){
			if(empty($nombre)){
				$land = false;
				$message .= pll__('El Nombre es ogligatorio.').' ';
			}
			if(empty($apellidos)){
				$land = false;
				$message .= pll__('El Apellido es ogligatorio.').' ';
			}
		}

		if(empty($pais)){
			$land = false;
			$message .= pll__('El País es ogligatorio.').' ';
		}

		if($pais=='Cuba' && empty($provincia)){
			$land = false;
			$message .= pll__('La Provincia es ogligatoria.').' ';
		}

		if($tipo=='identificado'){
			if(empty($direccion)){
				$land = false;
				$message .= pll__('La dirección es ogligatoria.').' ';
			}
		}

		if(empty($asunto)){
			$land = false;
			$message .= pll__('Debe escribir un messaje en Asunto.').' ';
		}

		if ( $land ) {

			$pages = get_pages(array(
				'meta_key' => '_wp_page_template',
				'meta_value' => 'page-atencion-ciudadana.php'
			));

			if($tipo!='identificado'){
				$nombre   = '';
				$apellidos = '';
				$ci   = '';
				$direccion   = '';
				$telefono   = '';
				$celular   = '';
				$correo   = '';
			}

			foreach($pages as $page) {
				$solicitud_conf_msg = get_field('mensaje_satisfactorio', $page->ID);
				$correo_exist_msg = get_field('buzones_de_atencion', $page->ID);
				$headers = array('Content-Type: text/html; charset=UTF-8');
				$message_mail_user  = '<img width="300px" height="auto" src="'.get_template_directory_uri() . '/assets/images/logo.jpg"><br/><br/>';
				$message_mail_user .= "Estimado administrador,<br/><br/>Se ha enviado un mensaje de atención ciudadana desde la web Aligan. A continuación los datos recogidos en el formulario:<br/><br/>";

				if(!empty($nombre)){
					$message_mail_user .= "<strong>Nombre:</strong> ".$nombre."<br/>";
				}

				if(!empty($apellidos)){
					$message_mail_user .= "<strong>País:</strong> ".$apellidos."<br/>";
				}

				if(!empty($ci)){
					$message_mail_user .= "<strong>Número de carné de identidad o pasaporte:</strong> ".$ci."<br/>";
				}

				if(!empty($pais)){
					$message_mail_user .= "<strong>Nombre:</strong> ".$pais."<br/>";
				}

				if(!empty($provincia)){
					$message_mail_user .= "<strong>Provincia:</strong> ".$provincia."<br/>";
				}

				if(!empty($direccion)){
					$message_mail_user .= "<strong>Dirección:</strong> ".$direccion."<br/>";
				}

				if(!empty($telefono)){
					$message_mail_user .= "<strong>Teléfono fijo:</strong> ".$telefono."<br/>";
				}

				if(!empty($celular)){
					$message_mail_user .= "<strong>Teléfono celular:</strong> ".$celular."<br/>";
				}

				if(!empty($correo)){
					$message_mail_user .= "<strong>Correo electrónico:</strong> ".$correo."<br/>";
				}

				if(!empty($asunto)){
					$message_mail_user .= "<strong>Asunto:</strong> ".$asunto."<br/>";
				}

				if(!empty($adjunto)){
					if(!empty(wp_get_attachment_url($adjunto))){
						$message_mail_user .= "<strong>Adjunto:</strong> <a href='".wp_get_attachment_url($adjunto)."' download=''>Descargar</a><br/>";
					}

				}

				$emails = explode(';', $correo_exist_msg);
				$headers = array( 'Content-Type: text/html; charset=UTF-8' );
				foreach ($emails as $em) {
					$em = str_replace(' ','',$em);
					if (filter_var($em, FILTER_VALIDATE_EMAIL) == FALSE) {
					}else{
						if(wp_mail( $em, 'Mensaje Atención Ciudadana', $message_mail_user, $headers)){}else{
							echo json_encode( [ "answer" => 'false', 'message' => pll__('No se ha podido enviar el correo. Por favor, contacte con el administrador de la página.') ] );
							wp_die();
						}
					}
				}
			}
			echo json_encode( [ "answer" => 'true', 'message' => $solicitud_conf_msg ] );
			wp_die();
		}

		if ( ! $land ) {
			echo json_encode( [ "answer" => 'false', 'message' => $message ] );
			wp_die();
		}
	} else {
		exit;
	}
	exit;
}

add_action( 'wp_ajax_file_upload', 'file_upload_callback' );
add_action( 'wp_ajax_nopriv_file_upload', 'file_upload_callback' );
function file_upload_callback() {
	$response = [];

	$attachment_id = media_handle_upload( 'file', 0 );

	if ( is_wp_error( $attachment_id ) ) {

		$response['response'] = "ERROR";
		$response['error']    = 'Error al subir su archivo.';

	} else {
		$fullsize_path = get_attached_file( $attachment_id );

		$pathinfo = pathinfo( $fullsize_path );
		$url      = wp_get_attachment_url( $attachment_id );

		$response['response']      = "SUCCESS";
		$response['attachment_id'] = $attachment_id;
		$response['filename']      = $pathinfo['filename'];
		$response['url']           = $url;
		$type                      = $pathinfo['extension'];
		if ( $type == "jpeg"
		     || $type == "jpg"
		     || $type == "png"
		     || $type == "gif"
		) {
			$type = "image/" . $type;
		}
		$response['type'] = $type;
	}
	echo json_encode( $response );

	wp_die();
}

function aligan_agregar_idioma_zona_widgets() {
	register_sidebar( array(
		'name'          => 'Idioma',
		'id'            => 'idioma',
		'description'   => 'Se muestra en el area de idioma',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'aligan_agregar_idioma_zona_widgets' );

add_action( 'wp_ajax_aligan_search', 'aligan_search' );
add_action( 'wp_ajax_nopriv_aligan_search', 'aligan_search' );
function aligan_search() {
	check_ajax_referer( 'suscribirse_a4gs7v', 'security' );
	if ( isset( $_POST['data'] )) {
		parse_str( $_POST['data'], $form_data );
		$text = sanitize_text_field($form_data['search']);
		$text = urlencode($text);
		echo json_encode( [ "url" => home_url(esc_html('/')).'?s='.$text, "answer" => 'true', ] );
	} else {
		echo json_encode( [ "answer" => 'false' ] );
	}
	exit;
}

function metas_seo(){
	global $wp;
	$output = '';
	$output = '<meta http-equiv="Content-Type" content="text/html; charset=utf-8">';
	$output .= '<link rel="canonical" href="'.home_url( $wp->request ).'/inicio">';
	$output .= '<link rel="shortlink" href="'.home_url( $wp->request ).'/inicio">';
	$output .= '<meta property="og:site_name" content="'.get_bloginfo('name').'">';
	$output .= '<meta property="og:type" content="website"/>';
	$output .= '<meta property="og:url" content="'.home_url( $wp->request ).'">';
	$output .= '<meta http-equiv="cache-control" content="today">';

	$output .= '<meta property="og:determiner" content="auto">';
	$output .= '<meta name="twitter:card" content="summary">';
	$output .= '<meta name="twitter:url" content="'.home_url( $wp->request ).'">';

		$title = get_the_title(get_the_ID());
		$img_url= '';
		if(!empty(get_the_post_thumbnail_url(get_the_ID()))){
			$img_url = get_the_post_thumbnail_url(get_the_ID());
		}

		$descripcion = '';
		if(!empty(get_the_excerpt(get_the_ID()))){
			$descripcion = get_the_excerpt(get_the_ID());
		}



		$output .= '<meta property="og:title" content="'.$title.'">';
		$output .= '<link rel="image_src" href="'.$img_url.'"/>';
		$output .= '<meta name="description" content="'.$descripcion.'"/>';
		$output .= '<meta property="og:description" content="'.$descripcion.'">';
		$output .= '<meta property="og:image:url" content="'.$img_url.'">';


	echo $output;
}
add_action('wp_head', 'metas_seo');

//Comment Field Order
add_filter( 'comment_form_fields', 'mo_comment_fields_custom_order' );
function mo_comment_fields_custom_order( $fields ) {
	$author_field = $fields['author'];
	$email_field = $fields['email'];

	$comment_field = $fields['comment'];

	$url_field = $fields['url'];
	$cookies_field = $fields['cookies'];
	unset( $fields['comment'] );
	unset( $fields['author'] );
	unset( $fields['email'] );
	unset( $fields['url'] );
	unset( $fields['cookies'] );
	// the order of fields is the order below, change it as needed:
	$fields['author'] = $author_field;
	$fields['email'] = $email_field;
	$fields['comment'] = $comment_field;
	// done ordering, now return the fields:
	return $fields;
}

function format_comment($comment, $args, $depth) {
	$GLOBALS['comment'] = $comment; ?>

<div <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">

	<div class="comment-intro">
		<strong><?php echo pll__('Comentado el').' '; ?></strong>
		<a class="comment-permalink" href="<?php echo htmlspecialchars ( get_comment_link( $comment->comment_ID ) ) ?>"><?php printf(__('%1$s'), get_comment_date(), get_comment_time()) ?></a>
		<strong><?php echo ' '.pll__('por').' '; ?></strong>
		<?php printf(__('%s'), get_comment_author_link()) ?>
	</div>

	<?php if ($comment->comment_approved == '0') : ?>
		<em><php _e('Your comment is awaiting moderation.') ?></em><br />
	<?php endif; ?>

	<?php comment_text(); ?>

	<div class="reply">
		<?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
	</div>
</div>
<?php }

pll_register_string( 'Esta página no existe.', 'Esta página no existe.', 'Pagina 404', FALSE );
pll_register_string( 'Buscador', 'Buscador', 'Formulario de búsqueda', FALSE );
pll_register_string( 'Resultados de búsqueda', 'Resultados de búsqueda', 'Buscador', FALSE );
pll_register_string( 'Ver más', 'Ver más', 'Buscador', FALSE );
pll_register_string( 'No se han encontrado resultados.', 'No se han encontrado resultados.', 'Buscador', FALSE );
pll_register_string( 'Página', 'Página', 'Buscador', FALSE );
pll_register_string( 'Anterior', 'Anterior', 'Buscador', FALSE );
pll_register_string( 'Siguiente', 'Siguiente', 'Buscador', FALSE );
pll_register_string( 'Inicio', 'Inicio', 'Encabezados', FALSE );

pll_register_string( 'Año', 'Año', 'Historia', FALSE );
pll_register_string( 'Plan', 'Plan', 'Historia', FALSE );
pll_register_string( 'Real', 'Real', 'Historia', FALSE );

pll_register_string( 'Leer', 'Leer', 'Inicio', FALSE );

pll_register_string( '¿Te resultó útil este contenido?', '¿Te resultó útil este contenido?', 'Votaciones', FALSE );


pll_register_string( 'El Nombre es ogligatorio.', 'El Nombre es ogligatorio.', 'Atención Ciudadana', FALSE );
pll_register_string( 'El Apellido es ogligatorio.', 'El Apellido es ogligatorio.', 'Atención Ciudadana', FALSE );
pll_register_string( 'El País es ogligatorio.', 'El País es ogligatorio.', 'Atención Ciudadana', FALSE );
pll_register_string( 'La Provincia es ogligatoria.', 'La Provincia es ogligatoria.', 'Atención Ciudadana', FALSE );
pll_register_string( 'La dirección es ogligatoria.', 'La dirección es ogligatoria.', 'Atención Ciudadana', FALSE );
pll_register_string( 'Debe escribir un messaje en Asunto.', 'Debe escribir un messaje en Asunto.', 'Atención Ciudadana', FALSE );
pll_register_string( 'No se ha podido enviar el correo. Por favor, contacte con el administrador de la página.', 'No se ha podido enviar el correo. Por favor, contacte con el administrador de la página.', 'Atención Ciudadana', FALSE );

pll_register_string( 'Tipo de envío', 'Tipo de envío', 'Atención Ciudadana', FALSE );
pll_register_string( 'Identificado', 'Identificado', 'Atención Ciudadana', FALSE );
pll_register_string( 'Anónimo', 'Anónimo', 'Atención Ciudadana', FALSE );
pll_register_string( 'Nombre*', 'Nombre*', 'Atención Ciudadana', FALSE );
pll_register_string( 'Nombre de la persona', 'Nombre de la persona', 'Atención Ciudadana', FALSE );
pll_register_string( 'Apellidos*', 'Apellidos*', 'Atención Ciudadana', FALSE );
pll_register_string( 'Apellidos de la persona', 'Apellidos de la persona', 'Atención Ciudadana', FALSE );
pll_register_string( 'Número de carné de identidad o pasaporte:', 'Número de carné de identidad o pasaporte:', 'Atención Ciudadana', FALSE );
pll_register_string( 'País*', 'País*', 'Atención Ciudadana', FALSE );
pll_register_string( 'Seleccione su país de residencia', 'Seleccione su país de residencia', 'Atención Ciudadana', FALSE );
pll_register_string( 'Provincia*', 'Provincia*', 'Atención Ciudadana', FALSE );
pll_register_string( 'Selecciona...', 'Selecciona...', 'Atención Ciudadana', FALSE );
pll_register_string( 'Dirección*', 'Dirección*', 'Atención Ciudadana', FALSE );
pll_register_string( 'Calle H e/ D y E, Vedado, Plaza de la Revolución', 'Calle H e/ D y E, Vedado, Plaza de la Revolución', 'Atención Ciudadana', FALSE );
pll_register_string( 'Teléfono fijo', 'Teléfono fijo', 'Atención Ciudadana', FALSE );
pll_register_string( 'Teléfono celular', 'Teléfono celular', 'Atención Ciudadana', FALSE );
pll_register_string( 'Correo electrónico', 'Correo electrónico', 'Atención Ciudadana', FALSE );
pll_register_string( 'Asunto*', 'Asunto*', 'Atención Ciudadana', FALSE );
pll_register_string( 'Escriba aquí su asunto', 'Escriba aquí su asunto', 'Atención Ciudadana', FALSE );
pll_register_string( 'Seleccionar archivo', 'Seleccionar archivo', 'Atención Ciudadana', FALSE );
pll_register_string( 'Enviar', 'Enviar', 'Atención Ciudadana', FALSE );
pll_register_string( 'Espere...', 'Espere...', 'Atención Ciudadana', FALSE );
pll_register_string( 'Preguntas Frecuentes', 'Preguntas Frecuentes', 'Atención Ciudadana', FALSE );
pll_register_string( 'Se ha cargado el archivo.', 'Se ha cargado el archivo.', 'Atención Ciudadana', FALSE );
pll_register_string( 'No se ha podido cargar el archivo.', 'No se ha podido cargar el archivo.', 'Atención Ciudadana', FALSE );
pll_register_string( 'Caracteristicas generales', 'Caracteristicas generales', 'Productos', FALSE );
pll_register_string( 'Noticias', 'Noticias', 'Noticias', FALSE );
pll_register_string( 'Envíenos su comentario', 'Envíenos su comentario', 'Noticias', FALSE );
pll_register_string( 'Compartir en :', 'Compartir en :', 'Noticias', FALSE );

pll_register_string( 'por', 'por', 'Comentarios', FALSE );
pll_register_string( 'Comentado el', 'Comentado el', 'Comentarios', FALSE );
pll_register_string( 'Comment navigation', 'Comment navigation', 'Comentarios', FALSE );
pll_register_string( '&amp;larr; Older Comments', '&amp;larr; Older Comments', 'Comentarios', FALSE );
pll_register_string( 'Newer Comments &amp;rarr;', 'Newer Comments &amp;rarr;', 'Comentarios', FALSE );
pll_register_string( 'Comments are closed.', 'Comments are closed.', 'Comentarios', FALSE );
pll_register_string( '1 Comentario', '1 Comentario', 'Comentarios', FALSE );
pll_register_string( '%1$s comentarios', '%1$s comentarios', 'Comentarios', FALSE );
pll_register_string( 'Comentarios', 'Comentarios', 'Comentarios', FALSE );
pll_register_string( 'Enviar >', 'Enviar >', 'Comentarios', FALSE );
pll_register_string( 'Leave a Message', 'Leave a Message', 'Comentarios', FALSE );
pll_register_string( 'Reply', 'Reply', 'Comentarios', FALSE );
pll_register_string( 'Nombre de la persona', 'Nombre de la persona', 'Comentarios', FALSE );
pll_register_string( 'Correo electrónico', 'Correo electrónico', 'Comentarios', FALSE );
pll_register_string( 'Comentario*', 'Comentario*', 'Comentarios', FALSE );
pll_register_string( 'Cancel Reply', 'Cancel Reply', 'Comentarios', FALSE );
pll_register_string( 'Nombre', 'Nombre', 'Comentarios', FALSE );
pll_register_string( 'Correo*', 'Correo*', 'Comentarios', FALSE );
pll_register_string( 'Registration isn\'t required.', 'Registration isn\'t required.', 'Comentarios', FALSE );


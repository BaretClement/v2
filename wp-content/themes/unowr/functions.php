<?php
/**
 * unowr functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package unowr
 */


if ( ! function_exists( 'unowr_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function unowr_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on unowr, use a find and replace
	 * to change 'unowr' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'unowr', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'unowr' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'unowr_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'unowr_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function unowr_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'unowr_content_width', 640 );
}
add_action( 'after_setup_theme', 'unowr_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function unowr_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'unowr' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'unowr' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'unowr_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function unowr_scripts() {
	wp_enqueue_style( 'unowr-style', get_stylesheet_uri() );

	// wp_enqueue_script( 'unowr-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	// wp_enqueue_script( 'unowr-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'unowr_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Hide wp admin bar.
 */
function wpc_show_admin_bar() {
	return false;
}
add_filter('show_admin_bar' , 'wpc_show_admin_bar');

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////// Ajouter le lien pour créer un compte ///////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

/* 

add_filter( 'login_form_bottom', 'creer_compte' );
function creer_compte( $formbottom ) {
	$formbottom .= '<a href="' .  get_site_url() . '/inscription/"><button class="ui labeled icon positive medium button"><i class="edit icon"></i> Créer un compte</button></a>';
	return $formbottom;
}

*/
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////// Ajouter le lien pour récupérer le mot de passe, si l'utilisateur ne s'en souvient plus //////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

add_filter( 'login_form_middle', 'lien_mot_de_passe_perdu' );
function lien_mot_de_passe_perdu( $formbottom ) {
	$formbottom .= '<a href="' . wp_lostpassword_url() . '"><span style="color: rgba(0, 0, 0, 0.87)">Mot de passe oublié ?</span></a>';
	return $formbottom;
}

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////// Formulaire d'inscription /////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function register_user_form() {
        echo '<form action="' . admin_url( 'admin-post.php?action=nouvel_utilisateur' ) . '" method="post" id="register-user" class="ui form">';

        // Les champs requis
        echo '<div class="field"><label for="nom-user">Identifiant</label><input type="text" name="username" id="nom-user" required></div>';
        echo '<div class="field"><label for="email-user">Adresse mail</label><input type="email" name="email" id="email-user" required></div>';
        echo '<div class="field"><label for="pass-user">Mot de passe</label><input type="password" name="pass" id="pass-user" required><bdiv>';

        // Nonce (pour vérifier plus tard que l'action a bien été initié par l'utilisateur)
        wp_nonce_field( 'create-' . $_SERVER['REMOTE_ADDR'], 'user-front', false );

        //Validation
        echo '<input type="submit" value="Créer mon compte" class="ui positive right floated button" style="margin: 20px 0">';
        echo '</form>';

        // Enqueue de scripts qui vont nous permettre de vérifier les champs
        wp_enqueue_script( 'inscription-front' );
}

// Enregistrement de l'utilisateur
add_action( 'admin_post_nopriv_nouvel_utilisateur', 'ajouter_utilisateur' );
function ajouter_utilisateur() {
        // Vérifier le nonce (et n'exécuter l'action que s'il est valide)
        if( isset( $_POST['user-front'] ) && wp_verify_nonce( $_POST['user-front'], 'create-' . $_SERVER['REMOTE_ADDR'] ) ) {

                // Vérifier les champs requis
                if ( ! isset( $_POST['username'] ) || ! isset( $_POST['email'] ) || ! isset( $_POST['pass'] ) ) {
                        wp_redirect( site_url( '/inscription/?message=not-user' ) );
                        exit();
                }
                
                $nom = $_POST['username'];
                $email = $_POST['email'];
                $pass = $_POST['pass'];

                // Vérifier que l'user (email ou nom) n'existe pas
                if ( is_email( $email ) && ! username_exists( $nom )  && ! email_exists( $email ) ) {
                // Création de l'utilisateur
                $user_id = wp_create_user( $nom, $pass, $email );
                $user = new WP_User( $user_id );
                // On lui attribue un rôle
                $user->set_role( 'subscriber' );
                // Envoie un mail de notification au nouvel utilisateur
                wp_new_user_notification( $user_id, $pass );
            } else {
                wp_redirect( site_url( '/inscription/?message=already-registered' ) );
                        exit();
            }

            // Connecter automatiquement le nouvel utilisateur
            $creds = array();
                $creds['user_login'] = $nom;
                $creds['user_password'] = $pass;
                $creds['remember'] = false;
                $user = wp_signon( $creds, false );

                // Redirection
                wp_redirect( site_url( 'mon-compte/?message=welcome' ) );
                exit();
        }
}

// Il faut register les scripts que notre formualire utilise
add_action( 'wp_enqueue_scripts', 'register_login_script' );
function register_login_script() {
	wp_register_script( 'inscription-front', get_template_directory_uri() . '/js/inscription.js', array( 'jquery' ), '1.0', true );
	wp_register_script( 'message', get_template_directory_uri() . '/js/message.js', array( 'jquery' ), '1.0', true );
	wp_enqueue_script( 'jquery' );

	// Ce script sera chargé sur toutes les pages du site, afin d'afficher les messages d'erreur
	wp_enqueue_script( 'message' );
}

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////// interdire l'accès aux non admins /////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

add_action('admin_init', 'gkp_restrict_access_administration');	
function gkp_restrict_access_administration(){
    if ( current_user_can('subscriber') ) {
        wp_redirect( get_site_url() . '/mon-compte' );
	exit();
    }
}

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////// Permettre l'édition du profil sur une page template ////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function edit_user_form() {
	if ( is_user_logged_in() ) {
		$userdata = get_userdata( get_current_user_id() );
		echo '<form class="ui form" action="' . admin_url( 'admin-post.php?action=update_utilisateur' ) . '" method="post" id="update-utilisateur">';


		echo '<h2>Mes infos</h2>';

		// Pseudo (ne peut pas être changé)
		echo '<div class="disabled field">';
		echo '<p><label for="pseudo-user">Username</label>';
		echo '<input class="disabled" type="text" name="username" id="pseudo-user" value="' . $userdata->user_login . '" disabled></p>';
		echo '</div>';

		// Nom
		echo '<div class="two fields">';
		echo '<div class="field">';
		echo '<p><label for="nom-user">Nom</label>';
		echo '<input type="text" name="nom" id="nom-user" value="' . $userdata->last_name . '"></p>';
		echo '</div>';

		// Prénom
		echo '<div class="field">';
		echo '<p><label for="prenom-user">Prénom</label>';
		echo '<input type="text" name="prenom" id="prenom-user" value="' . $userdata->first_name . '"></p>';
		echo '</div></div>';

		// Nom d'affichage
		// echo '<p><label for="display_name-user">Nom à afficher</label>';
		// echo '<input type="text" name="display_name" id="display_name-user" value="' . $userdata->display_name . '" required></p>';
		
		echo '<h2>Comment me contacter</h2>';

		// Email
		echo '<div class="two fields">';
		echo '<div class="field">';
		echo '<p><label for="email-user">Email</label>';
		echo '<input type="email" name="email" id="email-user" value="' . $userdata->user_email . '" required></p>';
		echo '</div>';

		// Téléphone 
		echo '<div class="field">';
		echo '<p><label for="phone">Téléphone</label>';
		echo '<input type="text" name="phone" id="phone" value="' . $userdata->telephone . '"></p>';
		echo '</div></div>';

		echo '<h2>Mes coordonnées</h2>';

		// Adresse 
		echo '<p><label for="adresse">Adresse</label>';
		echo '<input type="text" name="adresse" id="adresse" value="' . $userdata->adresse . '"></p>';

		// Code postal 
		echo '<div class="two fields">';
		echo '<div class="field">';
		echo '<p><label for="code_postal">Code postal</label>';
		echo '<input type="text" name="code_postal" id="code_postal" value="' . $userdata->code_postal . '"></p>';
		echo '</div>';

		// Ville 
		echo '<div class="field">';
		echo '<p><label for="ville">Ville</label>';
		echo '<input type="text" name="ville" id="ville" value="' . $userdata->ville . '"></p>';
		echo '</div></div>';

		echo '<h2>Mon mot de passe</h2>';

		// Mot de passe (Mis à jour uniquement si présent)
		echo '<p><label for="pass-user">Nouveau mot de passe</label>';
		echo '<input type="password" name="pass" id="pass-user"><br>';

		// Nonce
		wp_nonce_field( 'update-' . get_current_user_id(), 'user-front' );

		//Validation
		echo '<input class="ui positive button" type="submit" value="Mettre à jour" style="margin-top: 25px">';

		echo '</form>';

		// Enqueue de scripts qui vont nous permettre de vérifier les champs
		wp_enqueue_script( 'inscription-front' );
	}
}

// Enregistrement de l'utilisateur
add_action( 'admin_post_update_utilisateur', 'update_utilisateur' );
function update_utilisateur() {
	// Vérifier le nonce
	if( isset( $_POST['user-front'] ) && wp_verify_nonce( $_POST['user-front'], 'update-' . get_current_user_id() ) ) {

		// Vérifier les champs requis
		if ( ! isset( $_POST['email'] ) || ! is_email( $_POST['email'] ) ) {
			wp_redirect( site_url( '/profile/?message=need-email' ) );
			exit();
		}

		// Si l'email change, alors on vérfie qu'elle n'est pas déjà utilisée
		if ( ( $emailuser = email_exists( $_POST['email'] ) ) && get_current_user_id() != $emailuser ) {
			wp_redirect( site_url( '/profile/?message=email-exist' ) );
			exit();
		}

		// Nouvelles valeurs
		$userdata = array(
		    'ID' => get_current_user_id(),
			'first_name' => sanitize_text_field( $_POST['prenom'] ),
			'last_name' => sanitize_text_field( $_POST['nom'] ),
			'display_name' => sanitize_text_field( $_POST['display_name'] ),
			'description' => esc_textarea( $_POST['bio'] ),
			'user_email' => sanitize_email( $_POST['email'] ),
			'user_url' => sanitize_url( $_POST['site'] ),
			'telephone' => sanitize_text_field( $_POST['phone'] ),
			'adresse' => sanitize_text_field( $_POST['adresse'] ),
			'code_postal' => sanitize_text_field( $_POST['code_postal'] ),
			'ville' => sanitize_text_field( $_POST['ville'] ),
		);

		// On ne met à jour le mot de passe que si un nouveau à été renseigné
		if ( isset( $_POST['pass'] ) && ! empty( $_POST['pass'] ) ) {
			$userdata[ 'user_pass' ] = trim( $_POST['pass'] );
		}

		// Mise à jour de l'utilisateur
		wp_update_user( $userdata );
		update_user_meta( get_current_user_id(), 'telephone', sanitize_text_field( $_POST['phone'] ));
		update_user_meta( get_current_user_id(), 'adresse', sanitize_text_field( $_POST['adresse'] ));
		update_user_meta( get_current_user_id(), 'code_postal', sanitize_text_field( $_POST['code_postal'] ));
		update_user_meta( get_current_user_id(), 'ville', sanitize_text_field( $_POST['ville'] ));

		// Redirection
		wp_redirect( site_url( '/mon-compte/?message=user-updated' ) );
		exit();
	}
}

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////// custom login form  ////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function wp_login_form_custom( $args = array() ) {
	$defaults = array(
		'echo' => true,
		// Default 'redirect' value takes the user back to the request URI.
		'redirect' => ( is_ssl() ? 'https://' : 'http://' ) . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'],
		'form_id' => 'loginform',
		'label_username' => __( 'Username or Email' ),
		'label_password' => __( 'Password' ),
		'label_remember' => __( 'Remember Me' ),
		'label_log_in' => __( 'Log In' ),
		'id_username' => 'user_login',
		'id_password' => 'user_pass',
		'id_remember' => 'rememberme',
		'id_submit' => 'wp-submit',
		'remember' => true,
		'value_username' => '',
		// Set 'value_remember' to true to default the "Remember me" checkbox to checked.
		'value_remember' => false,
	);

	/**
	 * Filters the default login form output arguments.
	 *
	 * @since 3.0.0
	 *
	 * @see wp_login_form_custom()
	 *
	 * @param array $defaults An array of default login form arguments.
	 */
	$args = wp_parse_args( $args, apply_filters( 'login_form_defaults', $defaults ) );

	/**
	 * Filters content to display at the top of the login form.
	 *
	 * The filter evaluates just following the opening form tag element.
	 *
	 * @since 3.0.0
	 *
	 * @param string $content Content to display. Default empty.
	 * @param array  $args    Array of login form arguments.
	 */
	$login_form_top = apply_filters( 'login_form_top', '', $args );

	/**
	 * Filters content to display in the middle of the login form.
	 *
	 * The filter evaluates just following the location where the 'login-password'
	 * field is displayed.
	 *
	 * @since 3.0.0
	 *
	 * @param string $content Content to display. Default empty.
	 * @param array  $args    Array of login form arguments.
	 */
	$login_form_middle = apply_filters( 'login_form_middle', '', $args );

	/**
	 * Filters content to display at the bottom of the login form.
	 *
	 * The filter evaluates just preceding the closing form tag element.
	 *
	 * @since 3.0.0
	 *
	 * @param string $content Content to display. Default empty.
	 * @param array  $args    Array of login form arguments.
	 */
	$login_form_bottom = apply_filters( 'login_form_bottom', '', $args );

	$form = '
		<form class="ui form" name="' . $args['form_id'] . '" id="' . $args['form_id'] . '" action="' . esc_url( site_url( 'wp-login.php', 'login_post' ) ) . '" method="post">
			<div class="ui two column middle aligned stackable grid">
				<div id="login-part" class="center aligned no padding column">
			' . $login_form_top . '
			<div class="field" style="padding: 0 25px !important">
				<p class="login-username">
					<input type="text" name="log" id="' . esc_attr( $args['id_username'] ) . '" class="input" value="' . esc_attr( $args['value_username'] ) . '" size="20" placeholder="' . esc_html( $args['label_username'] ) . '"/>
				</p>
			</div>

			<div class="field" style="padding: 0 25px !important">
				<p class="login-password">
					<input type="password" name="pwd" id="' . esc_attr( $args['id_password'] ) . '" class="input" value="" size="20" placeholder="' . esc_html( $args['label_password'] ) . '"/>
				</p>
			</div>
				<div class="ui checkbox">
				' . ( $args['remember'] ? '<p class="login-remember"><input name="rememberme" type="checkbox" id="' . esc_attr( $args['id_remember'] ) . '" value="forever"' . ( $args['value_remember'] ? ' checked="checked"' : '' ) . ' /> <label>' . esc_html( $args['label_remember'] ) . '</label></p>' : '' ) . '
				</div>
				<p class="login-submit">
					<input class="ui blue button" style="margin-top: 25px" type="submit" name="wp-submit" id="' . esc_attr( $args['id_submit'] ) . '" class="button-primary" value="' . esc_attr( $args['label_log_in'] ) . '" />
					<input class="ui positive right floated button" type="hidden" name="redirect_to" value="' . esc_url( $args['redirect'] ) . '" />
				</p>
				' . $login_form_middle . '
				' . $login_form_bottom . '
			</div>
			
			<div class="center aligned no padding column"> 
				<a href="' . site_url('/inscription') . '"><button class="ui labeled icon positive medium button"><i class="edit icon"></i> Créer un compte</button></a>
			</div>
			</div>
		</form>';



	if ( $args['echo'] )
		echo $form;
	else
		return $form;
}



////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////// Add fields to user's profile  ///////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

add_action( 'show_user_profile', 'my_show_extra_profile_fields' );
add_action( 'edit_user_profile', 'my_show_extra_profile_fields' );

function my_show_extra_profile_fields( $user ) { ?>

	<h3>Extra profile information</h3>

	<table class="form-table">
	
		<tr>
			<th><label for="phone">Téléphone</label></th>
			<td><input type="text" name="phone" id="phone" value="<?php echo esc_attr( get_the_author_meta( 'telephone', $user->ID ) ); ?>" class="regular-text" /><br /></td>
		</tr>

		<tr>
			<th><label for="adresse">Adresse</label></th>
			<td><input type="text" name="adresse" id="adresse" value="<?php echo esc_attr( get_the_author_meta( 'adresse', $user->ID ) ); ?>" class="regular-text" /><br />
			</td>	
		</tr>

		<tr>
			<th><label for="code_postal">Code postal</label></th>
			<td><input type="text" name="code_postal" id="code_postal" value="<?php echo esc_attr( get_the_author_meta( 'code_postal', $user->ID ) ); ?>" class="regular-text" /><br />
			</td>	
		</tr>

		<tr>
			<th><label for="ville">Ville</label></th>
			<td><input type="text" name="ville" id="ville" value="<?php echo esc_attr( get_the_author_meta( 'ville', $user->ID ) ); ?>" class="regular-text" /><br />
			</td>	
		</tr>

	</table>
<?php }

add_action( 'personal_options_update', 'my_save_extra_profile_fields' );
add_action( 'edit_user_profile_update', 'my_save_extra_profile_fields' );

function my_save_extra_profile_fields( $user_id ) {

	if ( !current_user_can( 'edit_user', $user_id ) )
		return false;

	/* Copy and paste this line for additional fields. Make sure to change 'twitter' to the field ID. */
	update_usermeta( $user_id, 'telephone', $_POST['phone'] );

}

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////// Redirection page inscription custom ////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


add_action( 'wp_ajax_ajax_filter', 'ajax_filter' );
add_action( 'wp_ajax_nopriv_ajax_filter', 'ajax_filter' );

function getResult($search){
	$search["posts_per_page"] = "3";
	$search["orderby"] = "rand";
	$query = new WP_Query($search);
	$posts = $query->get_posts();

	$res = array();
	foreach ($posts as $key => $post) {

		if(isset($post->post_title)){
			$cat = get_the_terms($post->ID, 'type_de_cuisine');
			$ambiances = get_the_terms($post->ID, 'ambiance');
			$array_ambiances = array();

			foreach ($ambiances as $k => $val) {
				$array_ambiances[] = $val->name;
			}

			$customFieds = get_post_custom($post->ID);
			$image = get_field('image', $post->ID);

			$res[] = array(
				'title' => $post->post_title,
				'name' => $post->post_name,
				'guid' => $post->guid,
				'id' => $post->ID,
				'content' => $post->post_content,
				'image' => $image['url'] ? $image['url'] : get_template_directory_uri() . '/css/img/picture.svg',
				'prenom_du_contact' => $customFieds['prenom_du_contact'][0],
				'nom_du_contact' => $customFieds['nom_du_contact'][0],
				'nom_du_restaurant' => $customFieds['nom_du_restaurant'][0],
				'adresse' => $customFieds['adresse'][0],
				'code_postal' => $customFieds['code_postal'][0],
				'ville' => $customFieds['ville'][0],
				'telephone' => $customFieds['telephone'][0],
				'email' => $customFieds['email'][0],
				'specialite' => $customFieds['specialite'][0],
				'prix_moyen' => $customFieds['prix_moyen'][0],
				'category' => $cat[0]->name,
				'subcategory' => $cat[1]->name,
				"ambiances" => $array_ambiances,
			);

		}
	}

	return $res;

}

function ajax_filter() {

	$response = array();

	if(isset($_POST)){
		if(isset($_POST['question-index'])){

			$arrQuestions = array(
				
				0 => array(
					'type' => 'input',
					'name' => 'prix_moyen',
					'question' => 'Quel est ton budget maximum pour un menu ?',
				),
				1 => array(
					'type' => 'input',
					'name' => 'nb_person',
					'question' => 'Pour combien de personne(s) souhaites-tu rechercher un restaurant ?',
				),
				2 => array(
					'type' => 'input',
					'name' => 'telephone',
					'question' => 'As-tu un numéro auquel nous pourrons te joindre en cas de réservation ?',
				),
				3 => array(
					'type' => 'date',
					'name' => 'agenda',
					'question' => 'Quand souhaites-tu réserver ?',
				),
				4 => array(
					'type' => 'select',
					'name' => 'type_de_cuisine',
					'question' => 'Il y a un type de cuisine en particulier ?',
					'parent' => 0,
				),
				5 => array(
					'type' => 'select',
					'name' => 'type_de_cuisine',
					'question' => 'Tu as une préférence ?',
					'child' => 1,
				),
				6 => array(
					'type' => 'select',
					'name' => 'occasion',
					'question' => 'Il y a une occasion en particulier ?',
					'parent' => 0,
				),
				7 => array(
					'type' => 'select',
					'name' => 'occasion',
					'question' => 'type de occasion 2',
					'child' => 1,
				),
				8 => array(
					'type' => 'select',
					'name' => 'ambiance',
					'question' => 'type de ambiance',
				),
				9 => array(
					'type' => 'input',
					'name' => 'nb_person',
					'question' => 'nombre de personne ?',
				),
			);

			$current = $arrQuestions[$_POST['question-index']];

			$response = array(
				'type' => $current['type'],
				'key' => $current['name'],
				'label' => $current['question'],
				'answers' => array(),
			);

			if(isset($current['parent'])) $response['parent'] = $current['parent'];

			if(isset($current['child'])) {
				$daddy = ($_POST['question-index'] == 5) ? $_POST['type_de_cuisine'] : $_POST['occasion'];
				$theTerm = get_term_by('name', $daddy, $current['name']);
				$question = get_terms(
			    $current['name'],
			    array(
		        'parent' => $theTerm->term_id,
			    )
				);
			}
			else if($current['type'] == 'select'){
				$q = array(
				  'taxonomy' => $current['name'],
				  'hide_empty' => false,
				);
				if(isset($current['parent'])) $q['parent'] = $current['parent'];
				$question = get_terms($q);
			}
// error_log( '-----------------');
// error_log( print_r( $question, true ) );
// error_log( '-----------------');
			if(isset($question)){
				foreach ($question as $k => $v) {
					$response['answers'][] = $v->name;
				}
			}
		}
	}

	global $wpdb;

	$taxQuery = array();
	$metaQuery = array();

	if(isset($_POST)){
		if(isset($_POST['ambiance']) && !empty($_POST['ambiance'])){
			array_push($taxQuery, array(
				'taxonomy' => 'ambiance',
				'field' 		=> 'slug',
				'terms'    => $_POST['ambiance']
			));
		}
		if(isset($_POST['agenda']) && !empty($_POST['agenda'])){
			$agenda = explode(' ', $_POST['agenda']);
			$agendaFixed = $agenda[0] . '_';
			$time = explode(':', array_pop($agenda));
			$hour = $time[0];
			$minute = array_pop($time);

			if($minute > 30) $hour++;

			if($hour < 15) $agendaFixed .= 'midi';
			else $agendaFixed .= 'soir';

			array_push($taxQuery, array(
				'taxonomy' => 'agenda',
				'field' 		=> 'slug',
				'terms'    => $agendaFixed
			));
		}
		if(isset($_POST['occasion']) && !empty($_POST['occasion'])){
			array_push($taxQuery, array(
				'taxonomy' => 'occasion',
				'field' 		=> 'slug',
				'terms'    => $_POST['occasion']
			));
		}
		if(isset($_POST['type_de_cuisine']) && !empty($_POST['type_de_cuisine'])){
			array_push($taxQuery, array(
				'taxonomy' => 'type_de_cuisine',
				'field' 		=> 'slug',
				'terms'    => $_POST['type_de_cuisine']
			));
		}
		if(isset($_POST['prix_moyen']) && !empty($_POST['prix_moyen'])){
			$metaQuery =  array(
				'relation' => 'AND',
				array(
					'type' => 'NUMERIC',
					'key'	  		=> 'prix_moyen',
					'compare' 	=> '<=',
					'value'	  	=> intval($_POST['prix_moyen'])
				)
			);
		}
	}

	$search = array(
		'post_type' => 'restaurant',
		'numberposts' => -1,
		'posts_per_page' => -1,
		'tax_query' => $taxQuery,
		'meta_query' => $metaQuery
	);

	$res = getResult($search);

	if(count($res) < 3){

	}

	$send = array(
		'question' => $response,
		'result' => $res,
	);

	echo json_encode($send);
	wp_die();
}

 add_action('init','_remove_style');


 function _remove_style(){
    global $post;
    $pageID = array('1918');//Mention the page id where you do not wish to include that script

    //** if(in_array($post->ID, $pageID)) {
      wp_deregister_style('style.css');
      wp_dequeue_style('style.css'); 
    //** }
 }

 function custom_dequeue() {
    wp_dequeue_style('style');
    wp_deregister_style('style');

}

add_action( 'wp_enqueue_scripts', 'custom_dequeue', 9999 );
add_action( 'wp_head', 'custom_dequeue', 9999 );


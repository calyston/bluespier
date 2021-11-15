<?php ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>
	<?php bloginfo('name'); ?> | 
	<?php is_front_page() ? bloginfo('description') : wp_title(''); ?>
</title>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<?php ?>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header>
  <nav>
		<a href="<?php echo get_bloginfo('url') ?>"><img id="logo" src="https://christine.sobold.dev/wp-content/uploads/2018/05/logo-2.png" alt="logo"/></a>
    <ul id="nav-list">
      <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
    </ul>
  </nav>
  <div class="tagline">
    <h1>The Virtual Clinic Revolution</h1>
  </div>
</header>
<main>

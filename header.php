<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8";>
		<title>T Rex Intern</title>
		<?php wp_head(); ?>
	</head>
	
	<?php 
		
		if( is_home() ):
			$intern_classes = array( 'intern-class', 'my-class' );
		else:
			$intern_classes = array( 'no-intern-class' );
		endif;
		
	?>
	<body <?php body_class( $intern_classes ); ?>> 
		
		<?php wp_nav_menu(array('theme_location'=>'primary')); ?>

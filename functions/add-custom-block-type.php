<?php

/***************************************/
/*                                     */
/*       Add Custom Block Type         */
/*                                     */
/***************************************/



function register_acf_block_types() {

  // Bloc cover

    acf_register_block_type(array(
			'name'			     	=> 'cover',
			'title'			     	=> __('Couverture'),
			'description'	   	=> __('Ajouter une couverture'),
      'render_template'	=> 'blocks/acf_block_text.php',
			'render_callback'	=> 'blocks/acf_block_cover.php',
      'align'           => 'full',
			'category'	  		=> 'yoom',
			'icon'			    	=> 'format-image',
			'keywords'	  		=> array( 'couverture','cover' ),
    ));

    // Bloc texte

    acf_register_block_type(array(
			'name'			     	=> 'text',
			'title'			     	=> __('Texte'),
			'description'	   	=> __('Ajouter un texte centré'),
      'render_template'	=> 'blocks/acf_block_cover.php',
      'render_callback' => 'my_acf_block_render_callback',
      'align'           => 'false',
			'category'	  		=> 'yoom',
			'icon'			    	=> 'editor-aligncenter',
			'keywords'	  		=> array( 'Texte','Titre' ),
    ));

    // Bloc image + texte

    acf_register_block_type(array(
			'name'			     	=> 'img-txt',
			'title'			     	=> __('Image + Texte'),
			'description'	   	=> __("Ajouter un texte accompagné d'une image"),
      'render_template'	=> 'blocks/acf_block_img-txt.php',
      'render_callback' => 'my_acf_block_render_callback',
      'align'           => 'false',
			'category'	  		=> 'yoom',
			'icon'			    	=> 'dashicons-id',
			'keywords'	  		=> array( 'Texte','Image' ),
    ));


}

// Check if function exists and hook into setup.
if( function_exists('acf_register_block_type') ) {
    add_action('acf/init', 'register_acf_block_types');
}

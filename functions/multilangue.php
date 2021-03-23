<?php

/***************************************/
/*                                     */
/* 		 Ajoute des Options au thème     */
/*                                     */
/***************************************/


/**
* Support du multilangue
*/

function multilangue_support(){
  load_theme_textdomain( 'lesailleurs', get_template_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'multilangue_support' );


/**
* Permet de récupérer le permalien d'une page dans une langue.
*/

// Exemple d'HTML : <a href="<?php echo get_polypage_link('agenda'); ¿>">Un lien vers la page Agenda</a>


function get_polypage_link($nameorid){
  if(!function_exists('pll_the_languages')) return site_url($nameorid);

  $post_id = false;
  if(is_numeric($nameorid)){
    $post_id = $nameorid;
  }else{
    $post = get_page_by_path($nameorid, OBJECT, array('post','page','dossier','document'));
    if($post){
      $post_id = $post->ID;
    }
  }
  if($post_id){
    $post_id_lang = pll_get_post($post_id);
    if($post_id_lang){
      return get_permalink($post_id_lang);
    }
    return get_permalink($post_id);
  }else{
    return site_url($nameorid);
  }
}

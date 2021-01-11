<?php

/***************************************/
/*                                     */
/*       Custom block category         */
/*                                     */
/***************************************/


function my_blocks_plugin_block_categories( $categories ) {
    return array_merge(
        $categories,
        array(
            array(
                'slug' => 'yoom',
                'title' => __( 'Blocs Yoom', 'mydomain' ),
            ),
        )
    );
}
add_filter( 'block_categories', 'my_blocks_plugin_block_categories', 10, 2 );

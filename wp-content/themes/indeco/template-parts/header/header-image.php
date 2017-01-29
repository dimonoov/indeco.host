<?php
/**
 * Displays header media
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>



    <header class="header">
        <div class="container">
            <div class="row">

                <div class="col-sm-12">
                    <div class="wrap-header">

                        <div class="custom-header-media">
                            <?php the_custom_header_markup(); ?>
                        </div>
                    </div>
                </div>

            </div>
            <?php  if(twentyseventeen_is_static_front_page()) get_template_part( 'template-parts/header/site', 'branding' ); ?>

        </div>
    </header>


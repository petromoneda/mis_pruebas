<?php get_header();?>
        <div class="row"> <!--sistema de columnas principal-->
        
            <div class="col-lg-9"><!-----------------------------EntradaS-------------------->
            
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
                <div class="card-body"><!--Entrada-->
                    <a href="<?php the_permalink();?>">
                    <h2><?php the_title();?></h2>
                    </a>
                    <p class="small mb-0">Fecha: <?php the_time('j F, Y'); ?></p>
                    <p class="small mb-0">Autor: <?php the_author();?></p>
                    <p class="small ">
                        Categorias: <?php the_category(' / ');?>
                        Etiquetas: <?php the_tags('', ' / ', '')?>
                    </p>
                    <?php
                    // check if the post or page has a Featured Image assigned to it.
                        if ( has_post_thumbnail() ) {
                        the_post_thumbnail('post-thumbnails', array ('class'=>'btn btn-primary mb-2'));
                        }
                    ?>
                    <?php the_excerpt();?>
                    <a href="<?php the_permalink();?>" class="btn btn-primary mb-2">Mas info...</a>
                </div> <!--Fin Entrada-->
                <?php endwhile; endif;?>

                <div class="card-body mt-2"><!--paginación-->
                <?php
                get_template_part('template-parts/content', 'paginacion')
                ?>
                </div><!--Fin paginación-->
            
            </div><!----------------------------------Fin EntradaS----------------------->
        
            <!-------------------Aside----------------------------->
            <?php get_sidebar();?> 
            <!----------------------------------Fin Aside------------------------------>
        </div><!--Fin sistema de columnas principal-->
    </div>

    <!---------------------------------------Fin Blog---------------------------------------->
<?php get_footer();?>
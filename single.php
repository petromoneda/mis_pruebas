<?php get_header();?>
        <div class="row"> <!--sistema de columnas principal-->
        
        <div class="col-lg-9"><!-----------------------------EntradaS-------------------->
            
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
                <div class="card-body"><!--Entrada-->
                    <h2><?php the_title();?></h2>
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
                    
                    <?php the_content();?>
                    
                </div> <!--Fin Entrada-->
            <?php endwhile; endif;?>

            
            
        </div><!----------------------------------Fin EntradaS----------------------->
        <!----------------------------------Aside-------------------------------------------->
        <div class="col-lg-3">
            <div class="card-body">
                <h4>Publicidad</h4>
                <hr>
                <img src="img/600.jpg" alt="" class="img-fluid">
            </div>
            
        </div><!----------------------------------Fin Aside------------------------------>
        </div><!--Fin sistema de columnas principal-->
    </div>

    <!---------------------------------------Fin Blog---------------------------------------->
<?php get_footer();?>
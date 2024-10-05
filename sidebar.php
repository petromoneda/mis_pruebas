<div class="col-lg-3"><!-------------------Aside----------------------------->
    

    <?php if ( is_active_sidebar( 'widget_derecha' ) ) : ?>
		<?php dynamic_sidebar( 'widget_derecha' ); ?>
	<?php else : ?>
		<!-- Time to add some widgets! -->
	<?php endif; ?>
</div><!----------------------------------Fin Aside------------------------------>
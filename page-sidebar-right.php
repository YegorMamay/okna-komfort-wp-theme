<?php
/**
*Template Name: Sidebar Right
**/
?>

<?php get_header(); ?>

<div class="container-fluid">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
        <?php get_template_part('loops/content', 'page'); ?>
    </div>
    
    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
       <?php get_sidebar(); ?>
    </div>
    
  </div><!-- /.row -->
</div><!-- /.container -->

<?php get_footer(); ?>
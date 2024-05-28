<?php get_header() ?>

<?php
if (have_posts()) : the_post();
      while (have_posts()) : the_post(); ?>
    
      <p> <?php the_content(); ?>
      <h3> <?php the_title(); ?>


     <?php endwhile;
endif;
?> 

<style>
body {
    background-color: #F4FAFF; /* baggrundsfarve for hele body */
}
</style>


<br><br>
<h1> Siden er under opbygning </h1>
<p> Her vil jeg dele ud af tips og tricks til dig, der er i gang med at øge din digitale synlighed </p>


<?php get_footer()?>
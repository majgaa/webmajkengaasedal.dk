<?php get_header() ?>

<?php
if (have_posts()) : the_post();
      while (have_posts()) : the_post(); ?>
    
      <p> <?php the_content(); ?>
      <h3> <?php the_title(); ?>


     <?php endwhile;
endif;
?> 

<!-- kontakt info section -->

<div class="kontakt-info-section">
    <h1 class="styled-heading">Nysgerrig? Du er velkommen til at kontakte mig</h1>
    <p class="info-text">
        Har du spørgsmål eller ønsker du en uforpligtende snak, hvor vi sammen gennemgår dine <br> 
        muligheder? Kontakt mig direkte via mail eller telefon, eller skriv dig op på formlen nedenunder, 
        <br> så hører du fra mig inden for 24 timer.
    </p>
    <div class="button-container">
        <a href="tel:+4528189619" class="info-link">(+45) 28 18 96 19</a>
        <a href="mailto:majkengaasedal@gmail.com" class="info-link">(majkengaasedal@gmail.com)</a>
    </div>
</div>

<style>
body {
    background-color: #F4FAFF; /* baggrundsfarve for hele body */
}
</style>

<!-- contact form -->

<div class="contact-section">
    <div class="contact-image"></div>
    <div class="contact-content">
        <h2>FÅ SVAR INDEN FOR 24 TIMER</h2>
        <h3>Kontakt mig</h3>
        <div class="contact-form-wrapper">
            <!-- Contact Form 7 Shortcode -->
            <div class="wpcf7">
            <?php echo do_shortcode('[contact-form-7 id="e1c49e2" title="Contact form 1"]'); ?>
           
            </div>
        </div>
    </div>
</div>




<?php get_footer()?>
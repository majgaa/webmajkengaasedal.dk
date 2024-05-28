<?php get_header() ?>

<?php
if (have_posts()) :
    while (have_posts()) : the_post();

    endwhile;
endif;
?> 



<section class="hero-section">
    <div class="container">
        <div class="hero-content">
        <h1 class="styled-heading"> SEO konsulent, digital strategist, <br>SoMe management<br></h1>
            <p>Bliv klogere på hvem jeg er</p>
        </div>
    </div>
</section>

<style>
body {
    background-color: #F4FAFF; /* baggrundsfarve for hele body */
}
</style>

<section class="description-section">
    <div class="container">
        <h2 class="styled-heading">Ifølge enneagram personlighedstest, <br> er de keywords der beskriver mig:</h2>
        <ul class="styled-list">
            <li>Hard working & diligent</li>
            <li>Serious & straightforward</li>
            <li>Excellent team player</li>
            <li>Confident & independent</li>
            <li>People centered</li>
            <li>Caring and gentle</li>
        </ul>
    </div>
</section>


<section class="text-columns-section om-text">
    <div class="container">
        <div class="text-columns">
            <div class="text-column">
                <p>
                <strong>Med en baggrund som multimediedesigner</strong> og igangværende bachelorgrad i design od business, har jeg opnået en bred vifte af færdigheder inden for faget, der spænder fra webudvikling og UX-design til content creation og digital markedsføring. Gennem lærerige praktikophold har jeg fået mulighed for at anvende mine færdigheder i praksis og lære af erfarne fagfolk på området. 
            <br><br><strong> Men min læring stopper ikke der.</strong> Jeg er altid på jagt efter ny viden og nye færdigheder for at forfine mine evner inden for blandt andet forretningsudvikling. I en hurtigt udviklende digital verden er det vigtigt at holde sig up to date, og være i stand til at tilpasse sig nye trends og teknologier. 
            
        </p>
            </div>
            <div class="text-column">
                <p>
                <strong>Denne kombination </strong> af uddannelse og praktisk erfaring har givet mig et unikt perspektiv og en alsidig tilgang til mine opgaver. Jeg stræber altid efter at udforske nye idéer, udfordre mig selv og skabe værdifulde løsninger for mine kunder.   
                <br><br><strong>Skal vi tage en uforpligtende snak om din digitale tilstedeværelse? Du er altid velkommen til at kontakte mig.</strong>
            </p>
                <a href="<?php echo site_url('/kontakt'); ?>" class="contact-button">Kontakt mig</a>       
            
            </div>
        </div>
    </div>
</section>

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
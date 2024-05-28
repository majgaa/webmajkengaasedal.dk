<?php get_header() ?>

<?php
if (have_posts()) : the_post();
      while (have_posts()) : the_post(); ?>
    
      <p> <?php the_content(); ?>
      <h3> <?php the_title(); ?>


     <?php endwhile;
endif;
?> 

<section class="hero-section lydac-hero">
    <div class="container lydac-container">
        <div class="hero-content lydac-content">

        </div>
    </div>
</section>

<style>
body {
    background-color: #F4FAFF; /* baggrundsfarve for hele body */
}
</style> 

<!-- DESCRIPTION SECTION -->

<div class="description-section Lydac-hero">
<h1 class="styled-heading"> En optimering af en etableret <br> virksomheds online tilstedeværelse </h1>
    <p class="info-text">
    Lydac Akustik er utroligt talentfulde inden for akustikløsninger. Etableringen <br> af deres nye hjemmeside betød, at der var behov for forskellige tiltag for at øge deres synlighed online. <br> 
    </p>
</div>

<!-- info section -->

<section class="info-section">
    <div class="container">
        <div class="info-details">
            <div class="info-item">
                <h3>KUNDE</h3>
                <p>Lydac Akustik</p>
            </div>
            <div class="info-item">
                <h3>OPGAVE</h3>
                <p>Online markedsføring</p>
            </div>
            <div class="info-item">
                <h3>WEBSITE</h3>
                <p><a href="https://lydac.dk/" target="_blank">https://lydac.dk</a></p>
            </div>
        </div>
    </div>
</section>

<section class="text-columns-section lydac-text">
    <div class="container">
        <div class="text-columns">
            <div class="text-column">
                <p><strong>Efter overtagelse af</strong> ny ejer og lancering af en ny hjemmeside, stod virksomheden over for behovet for at genoplive sit brand og tiltrække nye kunder. Som partner for Lydac Akustik blev jeg involveret i alle aspekter af deres digitale strategi, lige fra on-page SEO til e-mail marketing.
                <br><br><strong>For at identificere de mest relevante søgeudtryk </strong>
                i den pågældende branchen startede jeg med at lave en omfattende søgeordsanalyse. Jeg startede helt fra bunden med at optimere hele hjemmesidens indhold og strukturerede data. I samarbejde med Jimmi Rose, ejer af Lydac, fik vi skabt noget indhold der fik hans brand til at fremstå trustworthy, med udstråling af den ekspertise, som Lydac tilbyder. 
                <br><br><strong>I et konkurrencepræget marked er det essentielt at</strong> få opdateret kunderejsen på tværs af kanaler og enheder, for at opnå det bedste resultat. Denne strategi blev implementeret ved at ramme kundegruppen præcist hvor de er i processen, med målrettet indhold. 
                </p>
            </div>
            <div class="text-column">
                <p><strong>Med en solid base</strong> på plads begyndte vi at fokusere på at fange og fastholde kunder gennem betalt annoncering og e-mail marketing. Jeg oprettede en række målrettede annoncer, der specifikt ramte Lydacs målgruppe, samt opbyggede et effektivt e-mail flow for at holde Lydacs brand top-of-mind hos potentielle kunder. 
                <br><br><strong>Resultatet?</strong> På kort tid lykkedes det os at genoplive Lydac Akustiks brand og tiltrække nye kunder gennem en målrettet digital strategi. Ved at kombinere søgeordsanalyse, on-page optimering, ekspertindhold og målrettet markedsføring opnåede vi betydelige resultater og styrkede Lydacs position som en førende udbyder inden for akustikbranchen. 
                <br><br><strong>Skal vi tage en uforpligtende snak om din digitale tilstedeværelse? Du er altid velkommen til at kontakte mig.</strong>
            </p>
                <a href="<?php echo site_url('/kontakt'); ?>" class="contact-button">Kontakt mig</a>
            </div>
        </div>
    </div>
</section>


<!-- Cases section -->
<div class="cases-section">
    <div class="container-fluid px-0">
        <div class="row">
            <div class="col-md-12">
            <h2>Se flere Cases</h2>            
            </div>
      </div>
    </div>
</div>

<div class="cases-section">
    <div class="container-fluid px-0">
        <div class="row">
            <div class="col-md-4">
                <a href="/daisys-kageri" class="case-card daisys">
                    <h3>Daisys Kageri</h3>
                    <p>On-page SEO & strukturerede data</p>
                </a>
            </div>
            <div class="col-md-4">
                <a href="/lydac" class="case-card lydac">
                    <h3>Lydac Akustik</h3>
                    <p>On-page SEO, Strukturerede Data, <br>E-mail Marketing, Content Creation</p>
                </a>
            </div>
            <div class="col-md-4">
                <a href="/siigurd" class="case-card sigurd">
                    <h3>Siigurd</h3>
                    <p>SoMe marketing & Content Creation</p>
                </a>
            </div>
        </div>
    </div>
</div>

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
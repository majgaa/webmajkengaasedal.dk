<?php get_header() ?>

<?php
if (have_posts()) : the_post();
      while (have_posts()) : the_post(); ?>
    
      <p> <?php the_content(); ?>
      <h3> <?php the_title(); ?>


     <?php endwhile;
endif;
?> 

<section class="hero-section daisy-hero">
    <div class="container daisy-container">
    </div>
</section>

<style>
body {
    background-color: #F4FAFF; /* baggrundsfarve for hele body */
}
</style>

<!-- DESCRIPTION SECTION -->

<div class="description-section">
<h1 class="styled-heading"> SEO optimering på Daisys Kageri</h1>
    <p class="info-text">
    En verden fuld af kager. Indehaver af Daisys Kageri har i mange år været optaget af sin store <br> passion: udvikling af opskrifter, på især glazekager. Daisy har på det seneste ønsket at få større <br> indblik i og hæve trafikken på sin hjemmeside.
    </p>
</div>

<!-- info section -->

<section class="info-section">
    <div class="container">
        <div class="info-details">
            <div class="info-item">
                <h3>KUNDE</h3>
                <p>Daisys Kageri</p>
            </div>
            <div class="info-item">
                <h3>OPGAVE</h3>
                <p>SEO</p>
            </div>
            <div class="info-item">
                <h3>WEBSITE</h3>
                <p><a href="http://daisyskageri.dk/"target="_blank">http://daisyskageri.dk/</a></p>
            </div>
        </div>
    </div>
</section>

<!--- tekst kolonner -->
<section class="text-columns-section daisys-text">
    <div class="container">
        <div class="text-columns">
            <div class="text-column">
                <p><Strong>Udfordring</strong> 
Daisy, ejeren af Daisys Kageri, lever og ånder for sin store passion: bagning. Når hun ikke står i køkkenet, lader hun sig konstant inspirere af sine omgivelser til at udvikle nye og spændende kageopskrifter. Med en veletableret Instagram-profil, der tiltrækker mange følgere, formår hun at skabe engagement dagligt med sine opslag, Reels og Stories, der alle leder læserne til hendes hjemmeside. <br> <br>
<strong> Min tilgang:</strong> Daisy ønskede at forbedre SEO-aspektet på sin hjemmeside, da den ikke var blevet opdateret i flere år. Derfor indgik vi et samarbejde, og mit første skridt var at udføre en omfattende søgeordsanalyse. Herefter gik jeg i gang med at implementere og opdatere hendes mange sider og finjustere indholdet for at sikre en mere relevant og optimeret brugeroplevelse. 
<br><br>Vi iværksatte også en omfattende linkbuilding-strategi for at øge hjemmesidens autoritet og forbedre dens synlighed på nettet. Ved at udnytte Daisys eksisterende samarbejder med relevante og troværdige websites, skabte vi et netværk af kvalitetslinks, der ikke blot styrker hjemmesidens placering i søgeresultaterne, men også øger trafikken til hjemmesiden.</p>
            </div>
            <div class="text-column">
                <p>For at forbedre søgemaskinernes forståelse af indholdet på hjemmesiden, integrerede vi strukturerede data, der hjælper med at fremhæve nyttige oplysninger såsom kageopskrifter, tilberedningstid og meget mere. <br> <br> 
                <strong>Google Analytics gør det muligt</strong> at tracke hvordan brugere interagere med hjemmesiden, herunder besøg, adfærd, konverteringer, segmentering og eventuelle kampagne analyser. Dette er sat op og kunden har fået adgang, så hun selv kan følge direkte med i trafikken</b>
            <br><br><strong>Restultatet?</strong> Ved at kombinere disse digitale marketingtiltag stræber jeg efter at give de besøgende den bedst mulige onlineoplevelse, mens Daisy fortsat kan sprede glæden med sine kageopskrifter og nå ud til endnu flere mennesker.
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


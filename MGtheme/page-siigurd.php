<?php get_header(); ?>

<?php
if (have_posts()) : 
    while (have_posts()) : the_post(); ?>

    <?php endwhile;
endif;
?> 

<section class="hero-section siigurd-hero">
    <div class="container siigurd-container">
        <div class="hero-content siigurd">
        </div>
    </div>
</section>

<style>
body {
    background-color: #F4FAFF; /* baggrundsfarve for hele body */
}
</style>

<!-- DESCRIPTION SECTION -->
<section class="description-section">
    <div class="container">
        <h1 class="styled-heading"> Et stærkt Brand Image på tværs <br> af Online platforme </h1>
        <p class="info-text">At Lykkes! Hos Siigurd går tingene rygende stærkt lige nu, og der er ikke tid til at nå det hele. <br> Siigurd havde brug for at uddelegere en række opgaver, for selv at kunne fokusere på kerneforretningen.</p>
    </div>
</section>

<!-- INFO SECTION -->
<section class="info-section">
    <div class="container">
        <div class="info-details">
            <div class="info-item">
                <h3>KUNDE</h3>
                <p>Siigurd</p>
            </div>
            <div class="info-item">
                <h3>OPGAVE</h3>
                <p>SoMe marketing</p>
            </div>
            <div class="info-item">
                <h3>WEBSITE</h3>
                <p><a href="https://siigurd.dk" target="_blank">https://siigurd.dk</a></p>
            </div>
        </div>
    </div>
</section>

<section class="text-columns-section siigurd-text">
    <div class="container">
        <div class="text-columns">
            <div class="text-column">
                <p><strong>Det er en spændende tid for Siigurd </strong> og hans coachingvirksomhed, der oplever hurtig vækst i øjeblikket. Med den øgede aktivitet er han blevet nødt til at udvide sit team og delegere opgaver som SoMe-management.
               <br><br><strong> I samarbejde med </strong> Siigurd hjælper jeg med at skabe indhold til at fylde hans SoMe-kalender. Det har krævet en nøje strategi, der matcher virksomhedens mål og målgruppe. Vi har fokuseret på at udvikle engagerende indhold, der passer til Siigurds ekspertise og virksomhedens værdier. Det inkluderer alt fra inspirerende citater og personlig udviklingsrådgivning til informative videoer og kundeanmeldelser.
                Desuden har vi været opmærksomme på at anvende de forskellige sociale medieplatforme på deres respektive styrker. For eksempel har vi udnyttet Instagram til at dele visuelt tiltalende indhold og historier, mens LinkedIn er blevet brugt til at netværke med potentielle kunder og partnerskaber.
            </p>
            </div>
            <div class="text-column">
                <p> <strong> Ved at implementere en strategisk tilgang </strong> til SoMe-håndtering har vi hjulpet Siigurd med at styrke hans online tilstedeværelse, opbygge brandidentitet og nå ud til en bredere målgruppe. Samtidig har vi frigivet hans tid til at fokusere på andre vitale opgaver i virksomheden.

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

<?php get_footer(); ?>

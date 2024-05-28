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
        <h1 class="styled-heading">  Løft din forretning med Online <br> Markedsføring og SEO</h1>
            <p>Jeg hjælper virksomheder med at få mest muligt ud af deres online <br> markedsføring med en holistisk tilgang og en solid digital strategi</p>
            <a href="/kontakt" class="button-link">Kontakt mig</a>
        </div>
    </div>
</section>

<style>
body {
    background-color: #F4FAFF; /* baggrundsfarve for hele body */
}
</style>

<!-- Service bokse -->

<div class="container my-5 service">
    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-3 mb-4">
            <div class="service-box">
                <h3>Branding & strategi</h3>
                <p>En god forretnings strategi er afgørende for succes.</p>
                <hr>
            </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-3 mb-4">
            <div class="service-box">
                <h3>Søgemaskine optimering</h3>
                <p>Bliv mere synlig på søgemaskinerne ved hjælp af SEO</p>
                <hr>
            </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-3 mb-4">
            <div class="service-box">
                <h3>E-mail marketing</h3>
                <p>Send budskaber til en segmenteret kundegruppe der allerede har vist interesse for dig</p>
                <hr>
            </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-3 mb-4">
            <div class="service-box">
                <h3>Automation</h3>
                <p>Automatiser processer på tværs af kanaler</p>
                <hr>
            </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-3 mb-4">
            <div class="service-box">
                <h3>Digital strategi</h3>
                <p>Skab en rød tråd mellem dine platforme og styrk dit image udadtil</p>
                <hr>
            </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-3 mb-4">
            <div class="service-box">
                <h3>SoMe annoncering</h3>
                <p>Nå ud til de rigtige kundesegmenter ved hjælp af Facebook annoncering</p>
                <hr>
            </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-3 mb-4">
            <div class="service-box">
                <h3>LinkedIn annoncering</h3>
                <p>B2B markedsføring</p>
                <hr>
            </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-3 mb-4">
            <div class="service-box">
                <h3>Google Ads</h3>
                <p>Googles annoncesystem som giver dig øjeblikkelige resultater</p>
                <hr>
            </div>
        </div>
    </div>
</div> 


<div class="teaser-section">
<h2 class="styled-heading">   I en verden hvor digital tilstedeværelse <br> bliver stadig mere afgørende, er det vigtigt<br> at tænke ud over
        isolerede kampagner og <br> kortvarige strategier.</h2>
    <p class="info-text">
        Min holistiske tilgang til digital markedsføring fokuserer på at skabe en sammenhængende og<br> omfattende
        strategi, der ikke kun forbedrer din synlighed på søgemaskiner gennem målrettet SEO, <br> men også
        optimerer dine kundekommunikationer gennem effektiv e-mail marketing og automatiserede processer.
    </p>
    <a href="/om" class="info-link">Om mig</a>
</div>



<!-- Cases section -->
<div class="cases-section">
    <div class="container-fluid px-0">
        <div class="row">
            <div class="col-md-12">
            <h2>Udvalgte Cases</h2>            
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



<!-- Work together section -->

<div class="work-together-section">
<h2 class="styled-heading"> Skal vi lære hinanden bedre at kende?</h2>
    <p class="info-text">
    Jeg har altid haft en stor interesse for online markedsføring. Min passion for dette felt <br> går tilbage til mine tidligste minder i voksenlivet, og jeg er dedikeret til at hjælpe virksomheder <br> med at vokse. Da jeg begyndte at studere SEO, blev jeg straks fascineret og udviklede en <br> holistisk tilgang til mit arbejde. Jeg mener fast, at isolerede initiativer ikke er tilstrækkelige. <br> Det er essentielt at gribe hele spektret og udvikle en solid digital strategi for at sikre de bedste resultater. </p>
    <a href="/kontakt" class="info-link">Kontakt mig</a>
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


      
</body>

<?php get_footer()?>
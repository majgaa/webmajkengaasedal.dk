<?php
if (have_posts()) :
    while (have_posts()) : the_post(); 
        
    endwhile;
endif;
?>

<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Din Forretning - Footer</title>
    <link href="style.css" rel="stylesheet"> <!-- Tilføj din CSS-fil -->
</head>
<body>
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-icons">
                <a href="https://www.instagram.com/majkengaasedal_/" class="footer-icon icon1"></a>
                <a href="https://www.linkedin.com/in/majken-gaasedal-303262269/" class="footer-icon icon2"></a>
                <a href="#" class="footer-icon icon3"></a>
            </div>
            <div class="footer-text">
                <span class="cvr-number">CVR-nummer: 44 85 18 49</span>    
                <a href="<?php echo site_url('/privatlivspolitik'); ?>">Privatlivspolitik</a>
                <a href="<?php echo site_url('/kontakt'); ?>">Kontakt</a>
            </div>
            <div class="footer-logo">
                <a href="#">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logomg.png" alt="Din Forretning Logo" style="height: 35px;">
                </a>
            </div>
        </div>
    </footer>
</body>
</html>



<?php wp_footer()?>


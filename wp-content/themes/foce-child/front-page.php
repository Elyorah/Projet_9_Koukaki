<?php

get_header();
?>

    <main id="primary" class="site-main">
        <section class="banner">
        <img class="banner__logo hidden" src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?> " alt="logo Fleurs d'oranger & chats errants">
        <!-- Récupération de l'image de background, désactivée dans le CSS -->
        <img class="banner__background move-down hidden" src="<?php echo get_template_directory_uri() . '/assets/images/banner.png'; ?>" alt="Arrière plan de couleur orange, avec des images de type cartoon de chats et de fleurs.">
        <!-- Ajout de la vidéo -->
        <video class="banner__video move-down hidden" autoplay loop muted>
            <source src="<?php echo get_theme_file_uri() . '/assets/video/banner-video.mp4'; ?>">
        </video>
        <!-- Fin de l'ajout -->
        </section>
        <section id="story" class="story hidden move-up">
            <h2><span>L'histoire</span></h2>
            <article class="story__article">
                <p><?php echo get_theme_mod('story'); ?></p>
            </article>

        <!-- Déplacement de la section personnages dans un template partiel -->
            <?php get_template_part('/template-parts/characters-slider') ?>
        <!-- Fin de la modification -->
        
            <article id="place" class="place">
                <!-- Ajout des images de fond -->
                <div class="clouds">
                    <img src="<?php echo get_theme_file_uri() . '/assets/images/big_cloud.png' ?>" alt="Gros nuage clair.">
                    <img class="clouds__little-cloud" src="<?php echo get_theme_file_uri() . '/assets/images/little_cloud.png' ?>" alt="Petit nuage clair.">
                </div>
                <div>
                    <h3><span>Le Lieu</span></h3>
                    <p><?php echo get_theme_mod('place'); ?></p>
                </div>

            </article>
        </section>


        <section id="studio" class="studio move-up hidden">
            <h2><span>Studio Koukaki</span></h2>
            <div>
                <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
                <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
            </div>
        </section>
        

<!-- Ajout du template partiel contenant la nomination aux oscars -->

        <?php get_template_part('template-parts/nomination-oscars'); ?>

<!-- Fin de l'ajout -->   
    </main><!-- #main -->

<?php
get_footer();
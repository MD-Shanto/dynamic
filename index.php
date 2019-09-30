<?php get_header() ?>


<!-- START UNIQUE SECTION  -->
<section id="unique" class="unique-section sticky-menu-location">
  <div class="container">
    <article>
      <h1 class="section-heading"><?php echo get_theme_mod('unique_title', 'Ce qui nous rend unique!'); ?></h1>
      <p class="section-description"><?php echo get_theme_mod('unique_paragraph','Nous sommes conscients que la demande de financement pour votre rénovation n’est
        pas la partie la plus excitante de votre projet.'); ?></p>
    </article>
    <div class="row column-section text-center">
      <div class="col-md-3">
        <div class="image-top">
          <img class="image-one" src="<?php echo get_theme_mod('widget_image', get_bloginfo('template_url') .'/img/site-logo.png'); ?>" alt="section-1">
          <article>
            <h2>Simple <br>et rapide</h2>
            <p>Recevez une décision dans les <br>24 à 48h.</p>
          </article>
        </div>
      </div>
      <div class="col-md-3">
        <div class="image-top">
          <img class="image-two" src="<?php bloginfo('template_url') ?>/img/section-2.png" alt="section-2">
          <article>
            <h2>Conditions<br>avantageuses</h2>
            <p>Taux à partir de 7.49% avec un financement d'une durée maximale <br>de 120 mois.</p>
          </article>
        </div>
      </div>
      <div class="col-md-3">
        <div class="image-top">
          <img class="image-three" src="<?php bloginfo('template_url') ?>/img/section-3.png" alt="section-3">
          <article>
            <h2>Aucun frais <br>caché</h2>
            <p>Aucun frais d'activation. Aucun frais de gestion. Aucun frais annuel. Aucun frais de paiement anticipé.
            </p>
          </article>
        </div>
      </div>
      <div class="col-md-3">
        <div class="image-top">
          <img class="image-four" src="<?php bloginfo('template_url') ?>/img/section-4.png" alt="section-4">
          <article>
            <h2>Parlez à des humains</h2>
            <p>Il est beaucoup plus simple de parler de son projet de rénovation avec une personne vivante. Il est
              encore plus simple de le faire avec une personne experte dans le financement de projets de rénovation.
              Nos
              conseillers se feront un plaisir de vous accompagner dans vos démarches de financement.</p>
          </article>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- END UNIQUE SECTION  -->

<!-- START EXPERIENCE SECTION  -->
<section class="experience-section" id="experience">
  <div class="container">
    <h1 class="experience-heading"> <?php echo get_theme_mod('experience_title', 'Vivez l\'expérience Réno-Finance en 3 étapes!'); ?></h1>
    <div class="row experience-row text-center">
      <div class="col-md-4">
        <div class="number-one">
          <img class="image-1" src="<?php bloginfo('template_url') ?>/img/number-one.png" alt="image-one">
          <article>
            <h2>Un conseiller expert <br>vous contactera</h2>
            <p>N’allez pas trop loin, vous pourriez être surpris de la rapidité de notre retour d'appel!</p>
          </article>
        </div>
      </div>
      <div class="col-md-4">
        <div class="number-two">
          <img class="image-2" src="<?php bloginfo('template_url') ?>/img/number-two.png" alt="image-two">
          <article>
            <h2>Remplissez le formulaire de demande de prêt</h2>
            <p>Bon, quand on parle de formulaire, votre nom et numéro de téléphone suffit. Le reste, on vous le
              demandera tout en discutant du dernier épisode d'Unité 9.</p>
          </article>
        </div>
      </div>
      <div class="col-md-4">
        <div class="number-three">
          <img class="image-3" src="<?php bloginfo('template_url') ?>/img/number-three.png" alt="image-three">
          <article>
            <h2>Remplissez le formulaire de demande de prêt</h2>
            <p>Bon, quand on parle de formulaire, votre nom et numéro de téléphone suffit. Le reste, on vous le
              demandera tout en discutant du dernier épisode d'Unité 9.</p>
          </article>
        </div>
      </div>
    </div>
    <div class="bottom-button text-center">
      <button class="btn btn-primary button-2 bottom-button" type="button">prêt? on commence!</button>
    </div>
</section>
<!-- END EXPERIENCE SECTION  -->

<!-- START PROJECT SECTION  -->
<section class="project-section" id="project">
  <div class="container">
    <article class="project-articles">
      <h1>Exemples de projets</h1>
      <p>Réalisez votre projet de rêve avec l'aide de Réno-Finance et ses partenaires</p>
    </article>
    <div class="row project-row">

      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post() ?>
          <?php get_template_part('content',get_post_format()) ?>
        <?php endwhile; ?>
        <?php else: ?>
<h2><?php esc_html_e('www.google.com'); ?></h2>
      <?php endif; ?>


    </div>
    <div class="bottom-button text-center">
      <button class="btn btn-primary button-2 post-button" type="button"><a href="<?php the_permalink() ?>">Voir plus de projets</a></button>
    </div>
  </div>
</section>
<!-- END PROJECT SECTION  -->

<!-- START INFORMATION SECTION  -->
<section class="information-section" id="informarion">
  <div class="container">
    <div class="row">
      <div class="col-sm-3">
        <div class="details-one">
          <h1>PROJETS POPULAIRES</h1>
          <div class="update-link">
            <a href="#">Salle de bain</a>
            <a href="#">Cuisine</a>
            <a href="#">Toiture</a>
            <a href="#">Revêtement extérieur</a>
            <a href="#">Finition de sous-sol</a>
            <a href="#">Portes & Fenêtres</a>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="details-two">
          <h1>PROJETS POPULAIRES</h1>
          <div class="update-link">
            <a href="#">Salle de bain</a>
            <a href="#">Cuisine</a>
            <a href="#">Toiture</a>
            <a href="#">Revêtement extérieur</a>
            <a href="#">Finition de sous-sol</a>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="details-three">
          <h1>PROJETS POPULAIRES</h1>
          <div class="update-link">
            <a href="#">Salle de bain</a>
            <a href="#">Cuisine</a>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="details-four">
          <h1>PROJETS POPULAIRES</h1>
          <div class="update-link">
            <a href="#">Salle de bain</a>
            <a href="#">Cuisine</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- END INFORMATION SECTION  -->



<?php get_footer() ?> 
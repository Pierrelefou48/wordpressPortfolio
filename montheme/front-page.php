<?php get_header() ?>

  <div class="container-fluid ">
    <div class="row">
        <div class="col-sm-12 col-md-5">
            <h1>Pierre-Bruno Vernhet </h1>
            <br>
                <div class="gauche">
                    <h3>A Propos de moi</h3>
                </div>
            <br>
                <div class="experience">
                    <p> Area Experience GRETA Stagiaire Developpement WWM October 2022 - Present (2 months) Mende, Occitanie,</p>
                    <p> Sophia EPB Chief Manager April 2008 - November 2022 (14 years 8 months)</p>
                    <p>Meridien Bora Financial Controller June 2003 - July 2006 (3 years 2 m)</p>
                    <p> Ecole Hoteliere de Lausanne EHL · (September 1978 - January 1982)</p>
                    <p>Probatoire DESC</p> 
                </div>
        

    <div class="frame">
          <img src="../brief3/images/1000_F_283776770_7J036st9aM7ebTUU5HAGUWJqQ2MZKT6I.jpg" alt="But" class="im.center">
</div>
        <div>
            <br>
                <a href="#" style="--clr:#ff22bb;--i: "> 
                <span>
                    <button onclick="window.location.href = '../index3.php';">
                </span></a>  
            <div class="btn">
              En voir plus
            </div>
        </div>
      </div>
      <div class="col-sm-12 d-flex justify-content-center col-md-2">
        <div class="photos">
          <img src="../brief3/images/pierre22.jpg" class="fadein" title="BONJOUR">
        </div>
      </div>
      <div class="col-sm-12 d-flex justify-content-center col-md-5">
        <div class="text-md-center">
          <br>
            <div class="text-secondary"> ACTUELLEMENT</div>
            <br>
            <div class="text-grey">
              <p> 
                <strong>
                <em>  A La recherche d'un stage 
                      pour valider ma formation
                </em>
                </strong>
              </p>
            </div>  
            <br>
            <div class="droite">
              <p>Apres avoir voyagé du nord au sud,
              je me suis retrouvé en France pour
              la reprise d’une auberge restaurant pres d'Avigon.</p>
              <p>Mon expérience dans l’hotellerie de luxe m’ont permis de redévelopper
              cet établissement à un bon niveau gastronomique.</p>
              <p>J’ai profité de mon retour  en Lozere pour effectuer une reconvertion
              professionnelle dans le developpement web et web mobile.
              Par passion et curiosité au Greta de Mende.</p>
          <div class="bas">
          Contactez moi :
            <div class="frame2">
              <div class="text-md-center">
                <div class="text-dark">  06.84.54.21.50
                  <div class="text-dark">  04.66.32.66.91
                  <br>     
                  p-bvernhet@yahoo.fr
                </div>
                </div>
              </div>
            <div class="babas">
          <img src="../brief3/images/evol3.jpg" class="rounded-circle" alt="tuc" style="width:70%; height:70%">
        </div>
     </div>
    </div> 
    </div>
  
    <!-- Boucle pour le CPT compétence -->
    <?php wp_reset_postdata();?>
    <h1>Compétences</h1>
    <?php 
    $query = new WP_Query(
        [
        'post_type'=> 'competences'
        ]
    );?>

    <?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
    
    <h1><?php the_title(); ?></h1>

    <?php the_content(); ?>

<?php endwhile; endif; ?>

<?php get_footer() ?>
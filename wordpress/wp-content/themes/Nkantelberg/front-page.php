<?php get_header(); ?>
<main id="content">
  <section class="main-wrapper">
    <div class="hero-half hero-half-left"></div>
    <div class="hero-half hero-half-right"></div>

    <div class="inner-section">
      <div class="contact-wrapper homepage-content-wrapper">
        <?php echo do_shortcode('[wpforms id="12" title="false" description="false"]') ?>
      </div>
      <div class="previous-work-wrapper homepage-content-wrapper">
        <div class="project-box">
          <span>Amanda Lea Photography</span>
        </div>
        <div class="project-box">
          <span>Dicks Drive-In</span>
        </div>
        <div class="project-box">
          <span>Salon177</span>
        </div>
      </div>
      <div class="abouty-wrapper homepage-content-wrapper">
        About me!
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?> 
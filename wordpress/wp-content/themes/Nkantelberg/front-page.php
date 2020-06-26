<?php get_header(); ?>
<main id="content">
  <section class="main-wrapper">
    <div class="hero-half hero-half-left"></div>
    <div class="hero-half hero-half-right"></div>

    <div class="inner-section">
      <div class="contact-wrapper homepage-content-wrapper">
        <div class="homepage-content-inner">
          <?php echo do_shortcode('[wpforms id="12" title="false" description="false"]') ?>
        </div>
      </div>
      <div class="previous-work-wrapper homepage-content-wrapper">
        <div class="homepage-content-inner">
          <div class="project-wrapper">
            <a href="http://amandaleaphotographydev.xyz/" class="project-box amanda">
            </a>
            <span>Amanda Lea Photography</span>
          </div>
          <div class="project-wrapper">
            <a href="" class="project-box dicks">
            </a>
            <span>Dicks Drive-In</span>
          </div>
          <div class="project-wrapper">
            <a href="http://salon177.com/" class="project-box salon177">
            </a>
            <span>Salon177</span>
          </div>
        </div>
      </div>
      <div class="about-wrapper homepage-content-wrapper">
        <div class="homepage-content-inner about-inner">
          <div class="about-image">
            <img src="<?php echo get_template_directory_uri(); ?>/images/family.jpg" alt="My family and I">
          </div>
          <div class="about-box">
            <p>Hello and welcome! My name is Nicholas Kantelberg and I am a front end web developer from a small town in Wisconsin. The community I grew up in prided itself in showing strong support for small businesses and community involvement. My family owned one of those small businesses, a hair salon started by my grandparents and handed down to my father. Now married, my new family is also supported by a small business, an ice cream shop first opened in 1955 and now handed down to my wife. Using several years of accumulated knowledge and skill in the web development field alongside strong community roots I look forward to having an opportunity to provide a responsive, fast, quality and personalized website whether it be for you, your business, your community sports team and anything in between.</p>
            <p>I am ready to either simply build your website or build and maintain for as long as the website exists. If you find yourself interested in learning more about the services I can provide or are ready to start the process of building your new website please feel free to reach out. Either contact me at npkantelberg@gmail.com or fill out the form on the <a class="about-page-contact" href="">Contact</a> page. I look forward to hearing from you!
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?> 
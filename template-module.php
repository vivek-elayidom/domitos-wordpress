<?php
/* Template Name: Module */
get_header();
?>
<?php 
$title = get_field('module-title'); 
$tagline = get_field('module-tagline'); 
$para = get_field('module-paragraph'); 
$image = get_field('side-image');
$features = get_field('features'); 
?>

<div class="container">
        <div class="row align-items-center justify-content-md-center justify-content-lg-between">
          <!-- About Thumbnail Area-->
          <div class="col-12 col-md-8 col-lg-6 col-xl-5">
            <div class="aboutUs-thumbnail mt-120 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 300ms; animation-name: fadeInUp;"><img class="w-100" src="<?php echo esc_url($image['url']); ?>" alt=""></div>
          </div>
          <!-- About Us Content Area-->
          <div class="col-12 col-md-8 col-lg-6">
            <div class="aboutUs-content mt-120 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 600ms; animation-name: fadeInUp;">
              <div class="section-heading mb-5">
                <h6><?php echo $title ; ?></h6>
                <h2><?php echo $tagline ; ?></h2>
                <div class="feature--content mb-50">
                <p>
                <?php echo $features ; ?>
                </p>
                <div id="featurebox"></div>
                <a class="btn saasbox-btn mt-5" href="#">Discover More</a>
                </div>
              </div>
              
            </div>
          </div>
        </div>
</div>
<section class="cta-area cta3 py-5" style="margin-top:15px">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-12 col-sm-8">
                    <div class="cta-text mb-4 mb-sm-0">
                        <h4 class="text-white mb-0">Request a demo to see how Domitos can help in Managing COVID </h4>
                    </div>
                </div>
                <div class="col-12 col-sm-4 text-sm-right"><a class="btn saasbox-btn white-btn" href="#">Request a Demo</a></div>
            </div>
        </div>
    </section>

<?php
get_footer();
?>

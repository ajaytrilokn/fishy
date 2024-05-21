<?php

/**

 * Template Name: Home Template

 *

 * This is the template that displays all pages by default.

 * Please note that this is the WordPress construct of pages and that

 * other "pages" on your WordPress site will use a different template.

 *

 * @package WordPress

 * @subpackage Twenty_Sixteen

 * @since Twenty Sixteen 1.0

 */

get_header();

$enquries_email = get_field('general_email', 'option');
$support_email = get_field('support_email', 'option');
$business_email = get_field('business_email', 'option');

$appStoreUrl = get_field('app_store', 'option');
$googlePlay = get_field('google_play', 'option');

$instagramUrl = get_field('instagram_url', 'option');
$facebookUrl = get_field('facebook_url', 'option');
$youtubeUrl = get_field('youtube_url', 'option');
?>

<div class="page-loader">
  <div class="moderspinner"></div>
</div>

<section class="banner-sec">
  <div class="banner-wrap  ">
    <div class="container">
      <div class="banner-text text-center animatedParent animateOnce ">
        <h1 class="animated fadeInUpShort slow">
          <?php echo the_field('banner_text'); ?>
        </h1>
        <div class="banner-btn mb-0">
          <ul>
            <li><a href="<?= $appStoreUrl ?>" class="animated bounceIn slow"><?php $appStore = get_field('apple_store_image','option');?>
												<img src="<?php echo $appStore['url'];?>" alt="<?php echo $appStore['alt'];?>"></a>
            </li>
            <li><a href="<?= $googlePlay ?>" class="animated bounceIn slow"><?php $playStore = get_field('playstore_image','option');?>
												<img src="<?php echo $playStore['url'];?>" alt="<?php echo $playStore['alt'];?>"></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="about-sec" id="about_us">
  <div class="about-wrap">
    <div class="container">
      <div class="about-main">
        <div class="about-text-wrap ">
          <div class="about-text-inner  ">
            <div class="about-text-row ">
              <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 col-12 about-text-wp animatedParent animateOnce">
                  <div class="about-text">
                    <p class="white_text animated fadeInUpShort slow">
                      <?php echo the_field('about_us_title'); ?>
                    </p>

                    <p class="white_text animated fadeInUpShort slow">
                      <?php echo the_field('about_us_text_1'); ?>
                    </p>

                    <div class="animatedParent animateOnce">
                      <h3 class="white_text animated fadeInUpShort slow">
                        <?php echo the_field('about_us_text_2'); ?>
                      </h3>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-12 about-img-wp pd-0">
                  <div class="app-img">
                    <img src="<?php echo the_field('about_us_image'); ?>" alt="about-us-img">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="features-sec" id="features">
  <div class="features-wrap">
    <div class="container">
      <div class="section-title animatedParent animateOnce">
        <h2 class="blue_text animated fadeInLeft">Features</h2>
      </div>
      <div class="features-main">
        <div class="row">
          <?php
          $feature = get_field('features_content');
          ?>
          <div class="col-lg-6 col-md-6 col-sm-12 col-12 ">
            <div class="features-box ">
              <div class="features-text-wp animatedParent animateOnce">
                <h3 class="blue_text animated fadeInUpShort slow">
                  <?= $feature[0]['features_title'] ?>
                </h3>
                <p class="font-we-bl animated fadeInUpShort slow">
                  <?= $feature[0]['features_description'] ?>
                </p>
              </div>
              <div class="features-box-img animatedParent animateOnce">
                <div class="features-img animated fadeInLeftShort slow"><img
                    src="<?= $feature[0]['features_image']['url'] ?>" alt="<?= $feature[0]['features_image']['alt'] ?>">
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-12 ">
            <div class="features-box">
              <div class="features-text-wp animatedParent animateOnce">
                <h3 class="blue_text animated fadeInUpShort slow">
                  <?= $feature[1]['features_title'] ?>
                </h3>
                <p class="font-we-bl animated fadeInUpShort slow">
                  <?= $feature[1]['features_description'] ?>
                </p>
              </div>
              <div class="features-box-img animatedParent animateOnce">
                <div class="features-img animated fadeInLeftShort slow"><img
                    src="<?= $feature[1]['features_image']['url'] ?>" alt="<?= $feature[1]['features_image']['alt'] ?>">
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-8 col-md-8 col-sm-12 col-12 ">
            <div class="features-box">
              <div class="features-text-wp animatedParent animateOnce">
                <h3 class="blue_text animated fadeInUpShort slow">
                  <?= $feature[2]['features_title'] ?>
                </h3>
                <p class="font-we-bl animated fadeInUpShort slow">
                  <?= $feature[2]['features_description'] ?>
                </p>
              </div>
              <div class="features-box-img animatedParent animateOnce">
                <div class="features-img animated fadeInLeftShort slow"><img
                    src="<?= $feature[2]['features_image']['url'] ?>" alt="<?= $feature[2]['features_image']['alt'] ?>">
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12 col-12 ">
            <div class="features-box">
              <div class="features-text-wp animatedParent animateOnce">
                <h3 class="blue_text animated fadeInUpShort slow">
                  <?= $feature[3]['features_title'] ?>
                </h3>
                <p class="font-we-bl animated fadeInUpShort slow">
                  <?= $feature[3]['features_description'] ?>
                </p>
              </div>
              <div class="features-box-img animatedParent animateOnce">
                <div class="features-img animated fadeInLeftShort slow"><img
                    src="<?= $feature[3]['features_image']['url'] ?>" alt="<?= $feature[3]['features_image']['alt'] ?>">
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-12 ">
            <div class="features-box">
              <div class="features-text-wp animatedParent animateOnce">
                <h3 class="blue_text animated fadeInUpShort slow">
                  <?= $feature[4]['features_title'] ?>
                </h3>
                <p class="font-we-bl animated fadeInUpShort slow">
                  <?= $feature[4]['features_description'] ?>
                </p>
              </div>
              <div class="features-box-img animatedParent animateOnce">
                <div class="features-img animated fadeInLeftShort slow"><img
                    src="<?= $feature[4]['features_image']['url'] ?>" alt="<?= $feature[4]['features_image']['alt'] ?>">
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-12 ">
            <div class="features-box">
              <div class="features-text-wp animatedParent animateOnce">
                <h3 class="blue_text animated fadeInUpShort slow">
                  <?= $feature[5]['features_title'] ?>
                </h3>
                <p class="font-we-bl animated fadeInUpShort slow">
                  <?= $feature[5]['features_description'] ?>
                </p>
              </div>
              <div class="features-box-img animatedParent animateOnce">
                <div class="features-img animated fadeInLeftShort slow"><img
                    src="<?= $feature[5]['features_image']['url'] ?>" alt="<?= $feature[5]['features_image']['alt'] ?>">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="contact-us-sec" id="contact_us">
  <div class="contact-us-inner">
    <div class="container">
      <div class="contact-us-wrap">
        <div class="row">
          <div class="col-lg-4 col-md-12 col-sm-12 col-12">
            <div class="contact-box contact-us-box">
              <div class="contact-box-inner">
                <div class="contact-top">
                  <div class="contact-box-title animatedParent animateOnce">
                    <div class="contact-box-icon animated fadeIn">
                      <?php $contact_image = get_field('contact_us_image');?>
                      <img src="<?php echo $contact_image['url'];?>" alt="<?php echo $contact_image['alt'];?>">
                    </div>
                    <h3 class="white_text animated fadeInUpShort"><?php echo the_field('contact_us_heading');?></h3>
                  </div>
                  <div class="animatedParent animateOnce">
                    <p class="white_text animated fadeInUpShort slower">
                    <?php echo the_field('contact_us_desc');?>
                    </p>
                  </div>
                </div>
                <div class="contact-wp-link animatedParent animateOnce">
                  <div class="content-links animated fadeInUpShort slower">
                    <h5 class="white_text"><?php echo the_field('inquiry_text');?></h5>
                    <div class="content-links-inner">
                      <a href="mailto:info@getfishy.co" class="contact-link">
                        <h6 class="font-we-rg white_text"><?php echo the_field('email_text');?></h6>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-12 col-sm-12 col-12">
            <div class="contact-box join-team-box" id="join-team">
              <div class="contact-box-inner">
                <div class="contact-top">
                  <div class="contact-box-title animatedParent animateOnce">
                    <div class="contact-box-icon animated fadeIn">
                      <?php $team_image = get_field('join_team_image');?>
                      <img src="<?php echo $team_image['url'];?>" alt="<?php echo $team_image['alt'];?>">
                    </div>
                    <h3 class="animated fadeInUpShort"><?php echo the_field('join_team_heading');?></h3>
                  </div>
                  <div class="animatedParent animateOnce">
                   <?php echo the_field('join_team_desc');?>
                  </div>
                </div>

                <div class="contact-wp-link animatedParent animateOnce">
                  <a href="javascript:void(0)" class="animated fadeInUpShort" data-bs-toggle="modal"
                    data-bs-target="#join_our_team-pp"><?php echo the_field('apply_now_text');?></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-12 col-sm-12 col-12">
            <div class="contact-box partner-box" id="partner">
              <div class="contact-box-inner">
                <div class="contact-top">
                  <div class="contact-box-title animatedParent animateOnce">
                    <div class="contact-box-icon animated fadeIn">
                      <?php $partner_image = get_field('partner_image');?>
                      <img src="<?php echo $partner_image['url'] ;?>" alt="<?php echo $partner_image['alt'];?>">
                    </div>
                    <h3 class="animated fadeInUpShort white_text"><?php echo the_field('partner_heading');?></h3>
                  </div>
                  <div class="animatedParent animateOnce">
                    <?php echo the_field('partner_desc');?>
                  </div>
                </div>
                <div class="contact-wp-link animatedParent animateOnce">
                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#partner-pp"
                    class="white_text animated fadeInUpShort"><?php echo the_field('apply_now_text');?></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
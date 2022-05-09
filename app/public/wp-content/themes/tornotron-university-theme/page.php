<?php

use ParagonIE\Sodium\Core\Curve25519\H;

get_header();

while (have_posts()) {
  the_post();
?>
  <div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('images/ocean.jpg'); ?>)"></div>
    <div class="page-banner__content container container--narrow">
      <h1 class="page-banner__title"><?php the_title(); ?></h1>
      <div class="page-banner__intro">
        <p></p>
      </div>
    </div>
  </div>

  <div class="container container--narrow page-section">
    <?php
    $theParent = wp_get_post_parent_id(get_the_ID());
    if ($theParent) {
    ?>
      <div class="metabox metabox--position-up metabox--with-home-link">
        <p>
          <a class="metabox__blog-home-link" href="<?php echo get_the_permalink($theParent); ?>"> <i class="fa fa-home" aria-hidden="true"></i> Back to <?php echo get_the_title(wp_get_post_parent_id(get_the_ID())); ?></a> <span class="metabox__main"><?php echo get_the_title(); ?></span>
        </p>
      </div>
    <?php
    }

    $theParent = wp_get_post_parent_id(get_the_ID());

    if ($theParent) {
      $findChildOf = $theParent;
    } else {
      $findChildOf = get_the_ID();
    }

    $args = array(
      'child_of' => $findChildOf,
      'sort_order' => 'DESC'
    );

    $childPages = get_pages($args);

    if ($childPages) {

    ?>

      <div class="page-links">
        <h2 class="page-links__title"><a href="<?php echo get_the_permalink($findChildOf); ?>"><?php echo get_the_title($findChildOf); ?></a></h2>
        <ul class="min-list">
          <?php
          foreach ($childPages as $key => $childPage) {
            try {
              //7.3 and later
              if ($key === array_key_first($childPages)) {
          ?>
                <li class="current_page_item"><a href="<?php echo get_the_permalink($childPage->ID); ?>"><?php echo get_the_title($childPage->ID); ?></a></li>
              <?php
              } else {
              ?>
                <li><a href="<?php echo get_the_permalink($childPage->ID); ?>"><?php echo get_the_title($childPage->ID); ?></a></li>
              <?php
              }
            } catch (\Throwable $th) {
              if (WP_DEBUG === true) {
                error_log($th->getMessage());
              }
              //php 7.2 older
              reset($childPages);
              if ($key === key($childPages)) {
              ?>
                <li class="current_page_item"><a href="<?php echo get_the_permalink($childPage->ID); ?>"><?php echo get_the_title($childPage->ID); ?></a></li>
              <?php
              }
              ?>
              <li><a href="<?php echo get_the_permalink($childPage->ID); ?>"><?php echo get_the_title($childPage->ID); ?></a></li>
          <?php
            }
          }
          ?>
        </ul>
      </div>

    <?php
    }
    ?>

    <div class="generic-content">
      <p><?php the_content(); ?></p>
    </div>
  </div>
<?php
}


get_footer();

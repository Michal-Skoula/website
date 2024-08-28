<?php
/**
 * Testimonials block which recursively displays all testimonials under the 
 * "Testimonials" custom post type.
 */
$heading = esc_attr(get_field('heading'));
$testimonial_count = esc_attr(get_field('testimonial_count'));

$args = array(
  'post_type' => 'reviews',
  // 'posts_per_page' => $testimonial_count,
  'orderby' => 'date',
  'order' => 'ASC'
);
$reviews_query = new WP_Query($args);
?>

<div id="testimonials" class="section">
  <div class="max-content-width">
    <div class="swiper testimonialSwiper">
      <h2 class="animate fade-in"> <?php echo $heading ?></h2>
      <!-- Repeater field -->
      <div class="swiper-wrapper">
        <?php
        if($reviews_query->have_posts()) {
          while($reviews_query->have_posts()) {
              $reviews_query->the_post();
              $author = get_field('author');
              $company = get_field('company');
              $review_text = get_field('review_text');

              echo $reviews_query->the_post();
              echo $author;
          ?>





        <div class="swiper-slide testimonial animate staggered left-to-right noblur">
          <p> <?php echo $review_text ?></p>
          <div class="author">
            <p class="strong"><?php echo $author ?></p>
            <p> <?php echo ($company) ? $company : '' ?></p>
          </div>
        </div>
        <?php
          }
        }
        else {
          echo '<p>No content found.</p>';
        }
        wp_reset_postdata();
        ?>
      </div>
      <!-- End Repeater field -->
      <div class="swiper-pagination"></div>
    </div>
  </div>
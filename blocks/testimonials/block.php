<?php
/**
 * Testimonials block which recursively displays all testimonials 
 * under the "testimonials" custom post type.
 */

$heading = esc_attr(get_field('heading'));
$testimonial_count = esc_attr(get_field('testimonial_count'));
$args = array(
  'post_type' => 'reviews',
  'posts_per_page' => $testimonial_count, 
  'order' => 'ASC'
);
$query = new WP_Query($args);
$testimonials = $query->get_posts();
?>

<div id="testimonials" class="section">
  <div class="max-content-width">
    <div class="swiper testimonialSwiper">
      <h2 class="animate fade-in"> <?php echo $heading ?></h2>
      <div class="swiper-wrapper">
        <?php
if($testimonials):
  foreach($testimonials as $testimonial):
    setup_postdata($testimonial);
    // var_dump($testimonial);
    $id = $testimonial->ID;
    $author = get_the_title($id);
    $company = get_field('company', $id);
    $review_text = get_field('review', $id);
?>
        <div class="swiper-slide testimonial">
          <p> <?php echo $review_text?></p>
          <div class="author">
            <b class="strong"> <?php echo $author ?></b>
            <p> <?php echo $company ?></p>
          </div>
        </div>
        <?php
endforeach;
wp_reset_postdata();

else:
  echo '<p>No testimonials found.</p>';

endif;
?>
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>
</div>
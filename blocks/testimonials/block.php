<?php
/**
 * Testimonials block which recursively displays all testimonials 
 * under the "testimonials" custom post type.
 */

$heading = esc_attr(get_field('heading'));
$testimonial_count = esc_attr(get_field('testimonial_count'));

$args = array(
  'post_type' => 'reviews',
  'posts_per_page' => $testimonial_count, // Get all posts
  // 'order' => 'ASC'
);
$reviews_query = new WP_Query($args);

$testimonials = $reviews_query->get_posts();
?>

<div id="testimonials" class="section">
  <div class="max-content-width">
    <div class="swiper testimonialSwiper">
      <h2 class="animate fade-in"> <?php echo $heading ?></h2>
      <div class="swiper-wrapper">
        <?php
if($testimonials) {
  foreach($testimonials as $testimonial) {
    setup_postdata($testimonial);
    var_dump($testimonial);
    $postid = $post->ID;
    $author = get_the_title();
    $company = get_field('company');
    $review_text = get_field('review');
}

?>
        <div class="swiper-slide testimonial animate staggered left-to-right noblur">
          <p> <?php echo $review_text?></p>
          <div class="author">
            <p class="strong"> <?php echo $author ?></p>
            <p> <?php echo $company ?></p>
          </div>
        </div>
        <?php
} 
else {
  echo '<p>No testimonials found.</p>';
}
?>
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>
<?php
/**
 * Testimonials block which recursively displays all testimonials under the 
 * "Testimonials" custom post type.
 */

$args = array(
  'post_type' => 'reviews',
  'posts_per_page' => -1, // Get all posts
);
$reviews_query = new WP_Query($args);

echo '<pre>';
var_dump($reviews_query);
echo '</pre>';

// Check if any reviews were found
// if($reviews_query->have_posts()) {
//   echo '<div class="testimonials-block">';
//   while($reviews_query->have_posts()) {
//       $reviews_query->the_post();
//       $author = get_field('author');
//       $company = get_field('company');
//       $review_text = get_field('review_text');

?>

<div id="testimonials" class="section">
  <div class="max-content-width">
    <div class="swiper testimonialSwiper">
      <h2 class="animate fade-in">Názory mých klientů</h2>
      <!-- Repeater field -->
      <div class="swiper-wrapper">
        <div class="swiper-slide testimonial animate staggered left-to-right noblur">
          <p>Spolupráce s Michalem <b>probíhala skvěle</b>, přesně se trefil do představy o vzhledu a funkcionalitě
            webu. Ceníme profesionální přístup a komunikaci během vytváření stránek. Můžeme jedině doporučit.</p>
          <div class="author">
            <p class="strong">Bc. Pavel Zahradník</p>
            <p>Forza Juniors</p>
          </div>
        </div>
      </div>
      <!-- End Repeater field -->
      <div class="swiper-pagination"></div>
    </div>
  </div>
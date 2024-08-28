<?php
/**
 * Testimonials block which recursively displays all testimonials 
 * under the "testimonials" custom post type.
 */

$heading = esc_attr(get_field('heading'));
$testimonial_count = esc_attr(get_field('testimonial_count'));

$args = array(
  'post_type' => 'review',
  // 'posts_per_page' => -1, // Get all posts
);
$reviews_query = new WP_Query($args);

// Check if any reviews were found
if($reviews_query->have_posts()) {
  while($reviews_query->have_posts()) {
      $reviews_query->the_post();
      $author = get_field('author');
      $company = get_field('company');
      $review_text = get_field('review_text');

      // Output the testimonial
      echo '<p class="testimonial-text">' . esc_html($review_text) . '</p>';
      echo '<p class="testimonial-author">' . esc_html($author) . '</p>';
      echo '<p class="testimonial-company">' . esc_html($company) . '</p>';
      echo '</div>';
  }
  echo '</div>';

  // Restore original Post Data
  wp_reset_postdata();
} else {
  // No reviews found
  echo '<p>No testimonials found.</p>';
}
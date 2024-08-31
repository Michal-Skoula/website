<?php
/**
 * FAQ component - repeater field for variable amount of FAQs
 */

 $heading = esc_attr(get_field('heading'));
 $description = get_field('description');
 
?>
<div id="faq" class="section">
  <div class="max-content-width row">
    <div class="info">
      <h2 class="animate left-to-right staggered"><?php echo $heading ?></h2>
      <p class="animate left-to-right staggered"> <?php echo $description ?> </p>
    </div>
    <div class="questions">
      <!-- Repeater field -->
      <?php 
      $count = 1;
      if(have_rows('faq_row')):
        while(have_rows('faq_row')):
          the_row();
          $faq = 'faq' . $count;
          $answer = 'answer' . $count;
          $count++;
          // Note: the ids $faq and $answer are for the checkboxes and aria labels to work correctly.
      ?>
      <div class="faq-card animate top-to-bottom staggered">
        <input type="checkbox" id=" <?php echo $faq ?> " class="faq-checkbox" aria-expanded="false"
          aria-controls=" <?php echo $answer ?> ">
        <label for=" <?php echo $faq ?> " class="faq-question">
          <h3><?php the_sub_field('question')?></h3>
        </label>
        <p id="<?php echo $answer ?>" class="faq-answer"><?php the_sub_field('answer')?></p>
      </div>

      <?php 
        endwhile; 
      
        else:
        echo 'No rows found.';
        
      endif; ?>

    </div>
  </div>
</div>
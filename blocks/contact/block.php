<?php

$heading = get_field('heading');
$description = get_field('description');
$contact_form_url = get_field('contact_form_url');

?>

<div id="contact" class="section">
  <div class="max-content-width">
    <h2 class="animate left-to-right staggered"><?php echo $heading ?></h2>
    <p class="animate left-to-right staggered"><?php echo $description ?></p>
    <div class="booking-window">
<!--      <div class="calendly-inline-widget"-->
<!--        data-url="https://calendly.com/michalskoula/meeting?background_color=14161b&text_color=ffffff&primary_color=386eeb"-->
<!--        style="min-width:100%;height:700px;max-height: 100%;"></div>-->
<!--      <script defer type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>-->
        <a class="booking-link" href="<?php echo $contact_form_url ?>">Zarezervujte si schůzku</a>
    </div>
  </div>
</div>
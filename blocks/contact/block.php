<?php

$heading = get_field('heading');
$description = get_field('description');
$contact_form = get_field('contact_form');

?>

<div id="contact" class="section">
    <div class="max-content-width">
        <h2 class="animate left-to-right staggered"><?php echo $heading ?></h2>
        <p class="description animate left-to-right staggered"><?php echo $description ?></p>
        <div class="contact-form">
<!--            <h3 id="meeting-link"><a href="https://calendly.com/michalskoula/meeting">Domluvme si schůzku</a></h3>-->
<!--            <i>nebo</i>-->
<!--            <h3>Vyplňte formulář</h3>-->

			<?php echo $contact_form ?>
        </div>

    </div>
</div>

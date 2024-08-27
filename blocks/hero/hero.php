<?php
/**
 * Hero section template.
 * 
 */

$heading = esc_attr(get_field('heading'));
$description = esc_attr(get_field('description'));
$btn_text = esc_attr(get_field('button_text'));
$btn_url = esc_url(get_field('button_url'));

$img_array = get_field('hero_image');
$img_url = $img_array['url'];
$img_alt = $img_array['alt'];

$anchor = '';
if ( ! empty( $block['anchor'] ) ) {
    $anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
}
?>
<div id="hero" class="section">
    <div class="max-content-width">
      <div class="hero-content row">
        <div class="text">
          <h1 class="animate fade-in staggered"><? echo $heading ?></h1>
          <p class="animate fade-in staggered"> <? echo $description ?></p>
          <div class="animate fade-in staggered">
            <a class="button-primary desktop-display-btn" href="<? echo $btn_url ?>"><? echo $btn_text ?></a>
          </div>
        </div>
        <div id="hero-img">
          <img class="animate fade-in delay300 duration200" src=" <? echo $img_url ?>" alt="<? echo $img_alt ?>">
          <div class="animate bottom-to-top delay100 mobile-display-btn">
            <a class=" button-primary " href="<? echo $btn_url ?>"> <? echo $btn_text ?></a>
          </div>
        </div>
      </div>
    </div>
  </div>
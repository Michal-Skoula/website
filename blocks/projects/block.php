<?php

$heading = get_field('heading');
$description = get_field('description');
$button_text = get_field('button_text');
?>


<!-- COMPONENT: Projects showcase 2 wide -->
<div id="projects-showcase" class="section">
    <div class="max-content-width">
        <h2 class="animate left-to-right delay100"><?= $heading ?></h2>
        <div class="projects-heading row space-between">
            <p class="animate left-to-right delay200"><?= $description ?></p>
            <div class="animate right-to-left delay200">
            <!-- TODO dodělat-->
<!--			<a href="#">Všechny projekty <span class="bold">&rarr;</span></a>-->
            </div>
        </div>
        <div id="projects-grid">
            <?php

            if(have_rows('projects')):
                while(have_rows('projects')):
                    the_row();
                    ?>
                    <article class="project-card animate bottom-to-top staggered">
                        <a class="img-link" href="<?= the_sub_field('project_url') ?>">
                            <img src="<?= the_sub_field('project_image')?>" alt="Ukázka webu">
                        </a>
                        <div class="text-area">
                            <h3><?= the_sub_field('project_name'); ?></h3>
                            <p><?= the_sub_field('project_description'); ?></p>
                            <a class="button-primary" href="<?php echo the_sub_field('project_url'); ?>"><?= $button_text ?></a>
                        </div>
                    </article>
                <?php
                endwhile;
            endif;
            ?>
        </div>
    </div>
</div>
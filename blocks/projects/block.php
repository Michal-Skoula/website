<?php

$heading = get_field('heading');
$description = get_field('description');

?>

<div class="section-highlight">
	<!-- COMPONENT: Projects showcase 2 wide -->
	<div id="projects-showcase" class="section">
		<div class="max-content-width">
			<h2 class="animate left-to-right delay100"><?php echo $heading ?></h2>
			<div class="projects-heading row space-between">
				<p class="animate left-to-right delay200"><?php echo $description ?></p>
				<div class="animate right-to-left delay200">
<!--					<a href="#">Všechny projekty <span class="bold">&rarr;</span></a>-->
				</div>
			</div>
			<div id="projects-grid">
                <?php

				if(have_rows('projects')):
					while(have_rows('projects')):
						the_row();
						?>
                        <article class="project animate bottom-to-top staggered">
                            <a style="background:<?php echo the_sub_field('project_color') ?>;"
                               href="<?php echo the_sub_field('project_url'); ?>">

                                <h3><?php echo the_sub_field('project_name'); ?>></h3>
                                <p><?php echo the_sub_field('project_description'); ?></p>
                                <img class="iphone" src="<?php echo the_sub_field('project_image') ?>">
                            </a>
                        </article>
					<?php
					endwhile;
				endif;
				?>
            </div>
		</div>
	</div>
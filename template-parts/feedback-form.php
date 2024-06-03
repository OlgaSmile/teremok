<?php while ( have_posts() ) : the_post(); ?>
<?php acf_form('new-feedback'); ?>
<?php endwhile; ?>
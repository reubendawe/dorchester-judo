<?php get_header(); ?>

<?php
$flex_field = 'flexible_content';

if (have_rows($flex_field)):

    while (have_rows($flex_field)): the_row();

        $layout = get_row_layout();
        $template_file = locate_template("template-parts/blocks/flexible-content/{$layout}.php");

        if ($template_file) {
            include $template_file;
        } else {
            echo "<!-- Missing template for layout: {$layout} -->";
        }
    endwhile;

else:
    echo "<!-- No rows found for flexible content field '{$flex_field}' -->";
endif;
?>



<?php get_footer(); ?>
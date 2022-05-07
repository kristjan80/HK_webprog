<?php
	get_header();
	the_title();
    the_content();
	
?>
    <p> Ainekood: <?php echo get_post_meta(get_the_id(), $key="code", $single=True);  ?></p>
    <p> Õpetaja: <?php echo get_post_meta(get_the_id(), $key="teacher", $single=True);  ?></p>

<?php
    get_footer();
?>

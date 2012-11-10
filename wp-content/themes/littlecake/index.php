<?php
get_header();
?>

<?php if (have_posts()) : while (have_posts()) : the_post();?>
<div class="post">
	<h2 id="post-<?php the_ID(); ?>"><?php the_title();?></h2>
	<div class="entrytext">
	<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
	</div>
</div>
<?php endwhile; endif; ?>


<div id="nonJsBanner">
    <img src="images/sprinkles.jpg" alt="The Little Cake Maker">
</div>
<div id="slider" class="pix_diapo banner">
    <img id="imgChanger" src="images/sprinkles.jpg" alt="The Little Cake Maker" />    
</div>

<?php
get_footer();
?>

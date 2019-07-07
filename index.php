<?php get_header(); ?>
<!--<php get_template_part( 'content', get_post_format() ); ?>-->
<?php /*echo do_shortcode('[metaslider id="5"]');*/ ?>

<div class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <?php $args = array(
            'post_type' => 'attachment',
            'category_name' => 'acceuil',
        );
        $first = True;
        $attachments = get_posts($args);
        foreach (shuffle($attachments) as $i) : ?>
            <div class="carousel-item <?php if($first) {$first = False; echo 'active';} ?>" style="background-image: url('<?php echo $i->guid; ?>')"></div>
        <?php endforeach; ?>
    </div>
</div>

<?php get_footer('nocontact'); ?>
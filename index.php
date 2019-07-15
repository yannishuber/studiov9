<?php get_header(); ?>
<!--<php get_template_part( 'content', get_post_format() ); ?>-->
<?php /*echo do_shortcode('[metaslider id="5"]');*/ ?>

<div class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <?php $desktop = array(
            'post_type' => 'attachment',
            'category_name' => 'accueil',
        );
        $first = True;
        $attachments_desktop = get_posts($desktop);
        shuffle($attachments_desktop);
        foreach ($attachments_desktop as $i) : ?>
            <div class="carousel-item <?php if($first) {$first = False; echo 'active';} ?>" style="background-image: url('<?php echo $i->guid; ?>')"></div>
        <?php endforeach; ?>
    </div>
</div>

<?php get_footer('nocontact'); ?>
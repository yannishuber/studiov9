<?php get_header(); ?>
<!--<php get_template_part( 'content', get_post_format() ); ?>-->
<?php /*echo do_shortcode('[metaslider id="5"]');*/ ?>

<div class="carousel slide" data-ride="carousel">
    <div class="carousel-inner" id="home-images">
        <?php 
        $desktop = array(
            'post_type' => 'attachment',
            'category_name' => 'accueil',

        );

        $mobile = array(
            'post_type' => 'attachment',
            'category_name' => 'accueil-mobile',

        );
        $first = True;
        $attachments_desktop = get_posts($desktop);
        $attachments_mobile = get_posts($mobile);
        shuffle($attachments_desktop);
        shuffle($attachments_mobile);
        foreach ($attachments_desktop as $i) : ?>
            <div class="carousel-item desktop <?php if($first) {$first = False; echo 'active';} ?>" style="background-image: url('<?php echo $i->guid; ?>')"></div>
        <?php 
        endforeach;
        $first=True;
        foreach ($attachments_mobile as $i) : ?>
            <div class="carousel-item mobile <?php if($first) {$first = False; echo 'active';} ?>" style="background-image: url('<?php echo $i->guid; ?>')"></div>
        <?php endforeach; ?>
    </div>
</div>

<?php get_footer('nocontact'); ?>
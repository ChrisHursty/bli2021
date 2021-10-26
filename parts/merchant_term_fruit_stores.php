<?php
$current_merchant_type = get_queried_object();
$taxonomy_type         = get_taxonomy($current_merchant_type->taxonomy);
$merchant_term         = 'friut-stores';
$loop = new WP_Query(array(
    'post_type' =>  'merchants', // name of CPT
    'tax_query' => array(
        array(
            'taxonomy' => 'merchants_type', // taxonomy name
            'field'    => 'slug',
            'terms'    => array( $merchant_term ), // taxonomy term
        )
    ),
    'posts_per_page' =>  -1, 
    'order'          =>  'ASC',
    'orderby'        =>  'title'
));
?>
<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
    <div class="col-sm-6 col-md-4 archive-block">
        <?php get_template_part('parts/custom_loop'); ?>
    </div>
<?php endwhile; wp_reset_postdata(); ?>
<?php get_header(); ?>
<!--面包屑导航-->
<div class="breadthumb">
    <div class="container">
        <a href="/" class="bread-item">首页</a>
        <a href="/"><?php the_category(', ') ?></a></div>
</div>
<!--面包屑导航-->

<div class="main container">
    <div class="content-wrap">
        <div class="content" id="content">
            <ul class="log_list" id="log_list" style="min-height: 400px;">
<?php while (have_posts()) : the_post(); ?>

                                        <li class="log_list_item">
                            <a href="<?php the_permalink() ?>" class="pic-link">
   <img class="lazyload" src="<?php bloginfo('template_url'); ?>/images/dna.svg" data-src="<?php echo catch_first_image() ?>

" alt="<?php the_title(); ?>">
                            </a>
                            <h2 class="title">
                                <a href="<?php the_permalink() ?>"><?php echo excerpttitle(20);?></a>
<p style="font-size:10px;"><?php echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 46,'……'); ?></p>

                            </h2>

                            <div class="info">
                                <a href="<?php
$category = get_the_category();
if($category[0]){
echo ''.get_category_link($category[0]->term_id ).'';
}
?>" class="log-tag" style="background-color: #4f5356"><?php single_cat_title(); ?></a>                                <i class="iconfont icon-view"></i> <span class="view"><?php echo getPostViews(get_the_ID()); ?>  
</span>
                                <span class="pull-right"><span><?php the_time(' Y n 月 j 日 '); ?></span></span>
                                <div class="b-tag"></div>
                            </div>
                        </li>
                      <?php endwhile; ?>  
                                    </ul>
            <!--分页-->
            <div class="pagination" id="pagenavi">
                <?php lingfeng_pagenavi();?>
                            </div>
            <!--分页 ／-->
        </div>
    </div>
<?php get_template_part( 'cbl' );?>
<?php get_footer(); ?>
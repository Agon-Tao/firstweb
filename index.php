<?php get_header();?>

<style>
.layui-carousel img{width:100%; height:100%;
border-radius:10px;
}
</style>

<!--动态轮播提醒-->
<div class="container">
    <div class="site-notice" id="site-notice">
        <ul>
			<?php echo get_option('ashu_copy_rightssssssss'); ?>
                    </ul>
    </div>
</div>

<!--动态轮播提醒 /-->
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
                                <a href="<?php the_permalink() ?>"><?php echo excerpttitle(20);?>

</a>
<p style="font-size:10px;"><?php echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 46,'……'); ?></p>

                            </h2>

                            <div class="info">
                                <a href="<?php
$category = get_the_category();
if($category[0]){
echo ''.get_category_link($category[0]->term_id ).'';
}
?>" class="log-tag" style="background-color: #4f5356"><?php foreach((get_the_category()) as $category){echo $category->cat_name;} ?>


</a>                               
								<i class="iconfont icon-view"></i> <span class="view"><?php echo getPostViews(get_the_ID()); ?>  
</span>
                                <span class="pull-right"><span><?php the_time(' Y n 月 j 日 '); ?></span></span>
                                <div class="b-tag"></div>
                            </div>
                        </li>
                                  <?php endwhile;?>            
                                    </ul>
            <!--分页-->
             <div class="pagination" id="pagenavi">
              <p>  <?php lingfeng_pagenavi();?></p>
                            </div>
            <!--分页 ／-->
        </div>
    </div>
<?php get_template_part( 'cbl' );?>
</div>

<?php get_sidebar('right');?>
<?php get_sidebar();?>
<?php get_footer();?>


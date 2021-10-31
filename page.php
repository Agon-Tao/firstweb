<?php
/*
 *   Template Name: chen主题    //模板的名字  这是主要的
 *   Description: 2 *
 *   @package Bouquet
 * 
 */ 
?>
<?php get_header(); ?>
 
 
<!--面包屑导航-->
<div class="breadthumb">
    <div class="container">
        <a href="/" class="bread-item">首页</a>
        <a href="<?php get_category_link( $category_id ) ?>" ><?php the_category(', ') ?></a>
    </div>
</div>
<!--面包屑导航-->

<div class="main container">
    <div class="content-wrap">
        <div class="content" id="content">
            <div class="panel echo-log">
                <div class="panel-body">
                    <h1 class="log-title"><?php the_title(); ?><a href="/" target="_blank" class="edit"></i></a></h1>
                    <div class="log-info">


                    </div>
					<?php while ( have_posts() ) : the_post(); ?>
 <?php endwhile; ?>
                    <div class="log-body" id="log-body">
                        <p>
<?php the_content(); ?>

</p>

                        <div class="tags"><?php the_tags('标签：', ' , ' , ''); ?></div>
                    </div>


                </div>
            </div>

  
            <!--相关文章-->

            <!--/相关文章-->
            
                    <div id="comment-place">
            <div class="panel" id="comment-post">
                <div class="panel-heading">
                    <h3 class="comment-header">发表评论<a name="respond"></a>
 
                    </h3>
                </div>
				
        <?php comments_template(); ?>
            </div>
        </div>

            </div>
    </div>
	<?php get_template_part( 'cbl' );?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>

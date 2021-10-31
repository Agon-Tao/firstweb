<?php get_header(); ?>
<div class="breadthumb">
    <div class="container">
        <a href="/" class="bread-item">首页</a>
        <a href="#" >搜索结果</a>
    </div>
</div>
    <div class="container" role="main">
 
        <div class="row">
 
            <div class="col-md-12">
 
                <div class="page-header">   
                    <h1><?php wp_title( '' ); ?></h1>
                </div>
 
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
 
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a><a style="float: right;" ><?php echo the_time('l, F jS, Y'); ?></a></h2>
<hr/>


               
 
                <?php endwhile; else: ?>
 
                    <p>No results :(</p>
 
                    <p><?php get_search_form(); ?></p>
 
                <?php endif; ?>
 
            </div>      
 
        </div>


    </div>
	
<!--footer-->
<footer class="footer">
    <div class="container">
            <div class="widget widget-topic">
        <h3>旗下网站 </h3>
        <div class="widget-inner">
                            
 <?php echo get_option('ashu_copy_rightsss'); ?>
                    </div>
    </div>
        <div class="widget">
            <h3>联系我们</h3>
            <div class="widget-inner">
                     <?php echo get_option('ashu_copy_rightssss'); ?>
                            </div>
        </div>
            <div class="widget widget-link">
        <h3>友情链接</h3>
        <div class="widget-inner">
                       <?php echo get_option('ashu_copy_rightss'); ?>
                    </div>
    </div>
    </div>
</footer>
<?php get_sidebar('right');?>
<?php get_sidebar();?>
<?php get_footer();?>
<?php get_header(); ?>
<?php setPostViews(get_the_ID()); ?>  

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
                        <span><a href="#" title="#" class='user'><?php echo get_option('ashu_copy_rightssssss'); ?></a></span>
                        <span><i class="iconfont icon-time"></i><?php the_time('Y-m-d H:i') ?></span>
                        <span><i class="iconfont icon-comment"></i><a href="#comments" class="comments">
<?php if( $posts ) : ?> 
<?php foreach( $posts as $post ) : setup_postdata( $post ); ?> 
  <a href="#comment"  title="评论数量" >共有<?php $id=$post->ID; echo get_post($id)->comment_count;?> 条评论</a> 
  <?php endforeach; ?> 
 <?php endif; ?>
</a></span>
                        <span><i class="iconfont icon-view"></i><i class="view"><?php echo getPostViews(get_the_ID()); ?>  
</i></span>
                    </div>
					<?php while ( have_posts() ) : the_post(); ?>
 <?php endwhile; ?>
                    <div class="log-body" id="log-body">
                        <p>
<?php the_content(); ?>

</p>

                        <div class="tags"><?php the_tags('标签：', ' , ' , ''); ?></div>
                    </div>
                    <div class="copyright-notice">
                        <i class="iconfont icon-zhuanfa"></i>
                        <p>转载请注明出处:
                            <a href="<?php bloginfo('url'); ?>" target="_blank"><?php bloginfo('name'); ?></a></p>
                        <p>本文的链接地址:
                            <a href="<?php echo get_permalink(); ?>" target="_blank"><?php echo get_permalink(); ?></a></p>
                    </div>

                </div>
            </div>

            <div class="panel">
                <div class="panel-body neighbor">
                            <div class="prev">
      
                         <li class="iconfont icon-left"><?php if (get_previous_post()) { previous_post_link('上一篇: %link','%title',true);} else { echo "上一篇：没有了";} ?></li>

                    </div>
        <div class="next">
       
                        <h3> <li class="iconfont icon-right"><?php if (get_next_post()) { next_post_link('下一篇: %link','%title',true);} else { echo "下一篇：没有了";} ?></li>
</h3>
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
	<?php get_footer(); ?>
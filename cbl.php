  <style>
  table{

	  width:100%;
  }
.widget-user{background:#fff url("<?php echo get_option('ashu_copy_righttxbj'); ?>") no-repeat;background-size:100% 130px;text-align:center;position:relative}
  </style>

  <div class="sidebar" id="sidebar">
    <div class="widget widget-user" id="bloggerinfo">
        <a href="#" target="_blank">
                        <img src="<?php echo get_option('ashu_copy_rightsssss'); ?>"
                     width="140"
                     height="140" alt="blogger" class="img-l"/>
                    </a>

        <div class="desc">
            <div class="username"><?php echo get_option('ashu_copy_rightssssss'); ?></div>
            <div class="author-follow">
                <!--打赏-->
                                <!--/打赏-->

                
                            </div>
            <p><?php echo get_option('ashu_copy_rightsssssss'); ?></p>
        </div>
    </div>
    <div class="widget widget-calendar">
        <h3>日历</h3>
        <div id="calendar">
		  <?php if(is_dynamic_sidebar()) dynamic_sidebar('left_sidebar');?>

        </div>

    </div>
    <div class="widget widget-link">
        <h3>链接</h3>
        <div class="widget-inner">
                     
				   <?php echo get_option('ashu_copy_rightss'); ?>

                    </div>
    </div>
    <div class="widget widget-random-log">
        <h3>随机文章</h3>
        <ul id="randlog">
   <?php
$args = array( 'numberposts' => 9, 'orderby' => 'rand', 'post_status' => 'publish' );
$rand_posts = get_posts( $args );
foreach( $rand_posts as $post ) : ?>
    <li><a href="<?php the_permalink(); ?>"><?php echo excerpttitle(20);?></a></li>
<?php endforeach; ?>

                    </ul>
    </div>
</div><!--end #siderbar-->
    <div class="clearfix"></div>
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
<!--footer ／-->
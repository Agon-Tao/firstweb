
<?php
//列表分页//
function lingfeng_pagenavi( $range = 4 ) {
    global $paged,$wp_query;
    if ( !$max_page ) {
        $max_page = $wp_query->max_num_pages;
    }
    if( $max_page >1 ) {
        echo "<div class='fenye'>"; 
        if( !$paged ){
            $paged = 1;
        }
        if( $paged != 1 ) {
            echo "<a href='".get_pagenum_link(1) ."' class='extend' title='跳转到首页'>首页</a>";
        }
        previous_posts_link('上一页');
        if ( $max_page >$range ) {
            if( $paged <$range ) {
                for( $i = 1; $i <= ($range +1); $i++ ) {
                    echo "<a href='".get_pagenum_link($i) ."'";
                if($i==$paged) echo " class='current'";echo ">$i</a>";
                }
            }elseif($paged >= ($max_page -ceil(($range/2)))){
                for($i = $max_page -$range;$i <= $max_page;$i++){
                    echo "<a href='".get_pagenum_link($i) ."'";
                    if($i==$paged)echo " class='current'";echo ">$i</a>";
                    }
                }elseif($paged >= $range &&$paged <($max_page -ceil(($range/2)))){
                    for($i = ($paged -ceil($range/2));$i <= ($paged +ceil(($range/2)));$i++){
                        echo "<a href='".get_pagenum_link($i) ."'";if($i==$paged) echo " class='current'";echo ">$i</a>";
                    }
                }
            }else{
                for($i = 1;$i <= $max_page;$i++){
                    echo "<a href='".get_pagenum_link($i) ."'";
                    if($i==$paged)echo " class='current'";echo ">$i</a>";
                }
            }
        next_posts_link('下一页');
        if($paged != $max_page){
            echo "<a href='".get_pagenum_link($max_page) ."' class='extend' title='跳转到最后一页'>尾页</a>";
        }
        echo '<span>共['.$max_page.']页</span>';
        echo "</div>\n";  
    }
}
//注册友情链接//
add_filter( 'pre_option_link_manager_enabled', '__return_true' );
//文章缩略图//
function get_first_image() {
global $post;
$first_img = '';
ob_start();
ob_end_clean();
$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
$first_img = $matches [1] [0];
if(empty($first_img)){ //Defines a default image
$first_img = bloginfo('template_url') . "/default.jpg";
};
return $first_img;
}
//注册导航//
register_nav_menus( array(
'nav' => 'Header导航', //heaer导航栏//
'tags' => 'Banner下方导航',) );//Banner下方导航//
//开启缩略图
add_theme_support( 'post-thumbnails' ); 
add_theme_support('post-thumbnails', array('post'));
add_theme_support('post-thumbnails', array('page'));
//调用主题设置文件//
//add_action('admin_menu', 'add_theme_options_menu');
 //   function add_theme_options_menu() {
  //      add_theme_page(
  //          'Sucen主题设置', //页面title
 //           'Sucen主题', //后台菜单中显示的文字
 //           'edit_theme_options', //选项放置的位置
 //           'theme-options', //别名，也就是在URL中GET传送的参数
 //           'theme_settings_admin' //调用显示内容调用的函数
 //       );
//}
function theme_settings_admin() {
        include_once('functions.php');  
}

if ( function_exists('add_theme_support') )
 add_theme_support('post-thumbnails');
function catch_first_image() {global $post, $posts;$first_img = '';
	ob_start();
	ob_end_clean();
	$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
	$first_img = $matches [1] [0];
	if(empty($first_img)){
		$random = mt_rand(1, 10);
		echo get_bloginfo ( 'stylesheet_directory' );
		echo '/images/random/'.$random.'.jpg';
		}
  return $first_img;
}
function daxiawp_sidebar(){
    register_sidebar(array(
          'id'=>'left_sidebar',
          'name'=>'左侧边栏'
    ));
}
add_action('widgets_init','daxiawp_sidebar');
//浏览量
function getPostViews($postID){   
    $count_key = 'post_views_count';   
    $count = get_post_meta($postID, $count_key, true);   
    if($count==''){   
        delete_post_meta($postID, $count_key);   
        add_post_meta($postID, $count_key, '0');   
        return "0 View";   
    }   
    return $count.' Views';   
}   
function setPostViews($postID) {   
    $count_key = 'post_views_count';   
    $count = get_post_meta($postID, $count_key, true);   
    if($count==''){   
        $count = 0;   
        delete_post_meta($postID, $count_key);   
        add_post_meta($postID, $count_key, '0');   
    }else{   
        $count++;   
        update_post_meta($postID, $count_key, $count);   
    }   
} 

?>



    <?php      
    function test_theme(){   
        add_theme_page( 'chen主题设置', 'chen主题设置', 'administrator', 'ashu_slugs','set_from');   
    } 
	
    add_action('admin_menu', 'test_theme');   
        

    function set_from(){
			include("include/theme_set.php");
	
           
} ?> 


<?php
//下面是首页限制文章标题字数核心代码
function excerpttitle($max_length) {

$title_str = get_the_title();

if (mb_strlen($title_str,'utf-8') > $max_length ) {

$title_str = mb_substr($title_str,0,$max_length,'utf-8').'…';

}

return $title_str;

}?>
 
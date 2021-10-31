<style>
.comment-meta {
	text-align:right;
	}
.comment-reply-link{
	font-size:14px;
	text-align:right;
}
.url{
display:table-cell;vertical-align:middle;
}
hr{
border-bottom: 1px solid #EFF2F7;
}
.comment-form-comment textarea {
    padding: 4px;
    width: 100%;
    max-width: 600px;
    border: 1px solid #CCC;
    outline: none;
}
.comment-form-author input, .comment-form-email input, .comment-form-url input {
    height: 26px;
    font-size: 14px;
    line-height: 24px;
    border: 1px solid #ccc;
    background: #fff;
    padding: 0 10px;
    color: #7e7f7f;
    width: 220px;
}
.comment-form-author label, .comment-form-email label, .comment-form-url label {
    width: 70px;
    display: inline-block;
}
.form-submit #submit {
    border-left-style: none;
    border-right-style: none;
    border-top-style: none;
    border-bottom-style: none;
    width: 80px;
    height: 30px;
    background-color: #2a8dcb;
    color: #fff;
    cursor: pointer;
    font-size: 14px;
}
.commentlist{
	margin-left:20px;
}
.comment-form{
		margin-left:20px;
}
</style>
<?php
    if (isset($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
        die ('Please do not load this page directly. Thanks!');
?>
<!– Comment’s List –>

   <div class="hr dotted clearfix">&nbsp;</div>
   <ol class="commentlist">
  <?php
   if (!empty($post->post_password) && $_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {
       // if there's a password
       // and it doesn't match the cookie
   ?>
   <li class="decmt-box">
       <p><a href="#addcomment">请输入密码再查看评论内容.</a></p>
   </li>
   <?php
       } else if ( !comments_open() ) {
   ?>
   <li class="decmt-box">
       <p><a href="#addcomment">评论功能已经关闭!</a></p>
   </li>
   <?php
       } else if ( !have_comments() ) {
   ?>
   <li class="decmt-box">
       <p><a href="#addcomment">还没有任何评论，你来说两句吧</a></p>
   </li>
   <?php
       } else {
           wp_list_comments('type=comment&callback=aurelius_comment');
       }
	   
	   
function aurelius_comment($comment, $args, $depth)
{
   $GLOBALS['comment'] = $comment; ?>
   <li class="comment" id="li-comment-<?php comment_ID(); ?>">
        <div class="gravatar"> <?php if (function_exists('get_avatar') && get_option('show_avatars')) { echo get_avatar($comment, 48); } ?><?php printf(__('<cite class="author_name">%s</cite>'), get_comment_author_link()); ?>   <p class="comment-meta commentmetadata"><?php echo get_comment_time('Y-m-d '); ?> <?php comment_reply_link(array_merge( $args, array('reply_text' => '回复','depth' => $depth, 'max_depth' => $args['max_depth']))) ?></p>
 </div>
        <div class="comment_content" id="comment-<?php comment_ID(); ?>">
            <div class="clearfix">
                              <div class="comment_text">
               <?php if ($comment->comment_approved == '0') : ?>
                    <em>你的评论正在审核，稍后会显示出来！</em><br />
        <?php endif; ?>
       <?php comment_text(); ?>
            </div>
                 
                   <?php edit_comment_link('修改'); ?>
            </div>

        </div>
    </li>
	<hr/>
<?php } ?>	   

   </ol>
   <div class="hr clearfix">&nbsp;</div>
   <!– Comment Form –>
  <?php if ( comments_open() ) : ?>
<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<p><?php printf(__('你需要先 <a href="%s">登录</a> 才能发表评论.'), get_option('siteurl')."/wp-login.php?redirect_to=".urlencode(get_permalink()));?></p>
<?php else : ?>
<?php $defaults = array(
    'comment_notes_before' => '',
    'label_submit'         => __( '提交评论' ),
    'comment_notes_after' =>''
);
comment_form($defaults);
 endif;
else :  ?>
<p><?php _e('对不起评论已经关闭.'); ?></p>
<?php endif; ?>
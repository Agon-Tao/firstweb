/* 简爱 文章分享代码 暂支持 QQ空间 QQ好友 腾讯微博 ja_share.js 20140913 1.0 http://blog.gouji.org */
var s=[],jaShareType={},jaShareType={qq:"QQ 好友",qz:"QQ 空间",twb:"腾讯微博"},is_Mobile=/(Android|iPhone|iPod)/i.test(navigator.userAgent);for(var i in JA_SHARE){s.push(i+"="+encodeURIComponent(JA_SHARE[i]||""))}s.push("url="+encodeURIComponent(location.href));s.push("showcount=1");var Qz_url="http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?"+s.join("&"),QQ_url="http://connect.qq.com/widget/shareqq/index.html?"+s.join("&"),Twb_url="http://share.v.t.qq.com/index.php?c=share&a=index&url="+encodeURIComponent(location.href)+"&appkey=&pic="+(typeof(JA_SHARE["pics"])!="undefined"?encodeURIComponent(JA_SHARE["pics"]):"")+"&assname=&title="+encodeURIComponent("《"+JA_SHARE["title"]+"》  "+JA_SHARE["summary"]);$("[ja_share]").each(function(){share_type=$(this).attr("ja_share");if(typeof(jaShareType[share_type])!="undefined"){$(this).attr("title",jaShareType[share_type])}});$(document).on("click","[ja_share]",function(){share_type=$(this).attr("ja_share");if(share_type=="qz"){url=Qz_url}else{if(share_type=="qq"){url=QQ_url}else{if(share_type=="twb"){url=Twb_url}else{return true}}}if(typeof(dialog)=="undefined"||is_Mobile){window.open(url)}else{open_ja_share(url,jaShareType[share_type])}return false});function open_ja_share(url,t){dialog({title:"分享至 ["+t+"]",url:url,okValue:"关闭",width:720,height:550,ok:function(){},cancelValue:false}).show()};
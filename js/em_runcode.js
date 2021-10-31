// JavaScript Document

//1.运行代码，原理很简单就是打开一个新窗口页面，写进代码;
function runCode(id){
	 var obj=document.getElementById(id);
     var winname = window.open('', "_blank", '');
     winname.document.open('text/html', 'replace');
     winname.opener = null ;
     var str = obj.value;
        winname.document.write(str);
        winname.document.close();
} 

//2、复制代码，更简单
function copyCode(id){
        var obj=document.getElementById(id).value;
        if(copy2Clipboard(obj)!=false)
        {
          alert("复制成功！可以按 CTRL+V 粘贴去了！");
        }
}
copy2Clipboard=function(txt){
        if(window.clipboardData){
                window.clipboardData.clearData();
                window.clipboardData.setData("Text",txt);
        }
        else if(navigator.userAgent.indexOf("Opera")!=-1){
                window.location=txt;
        }
        else if(window.netscape){
                try{netscape.security.PrivilegeManager.enablePrivilege("UniversalXPConnect");
        }
        catch(e){
                alert("您的firefox安全限制限制您进行剪贴板操作，请打开’about:config’将signed.applets.codebase_principal_support’设置为true’之后重试");
                return false;
        }
        var clip=Components.classes['@mozilla.org/widget/clipboard;1'].createInstance(Components.interfaces.nsIClipboard);
        if(!clip)
        return;
        var trans=Components.classes['@mozilla.org/widget/transferable;1'].createInstance(Components.interfaces.nsITransferable);
        if(!trans)
        return;
        trans.addDataFlavor('text/unicode');
        var str=new Object();
        var len=new Object();
        var str=Components.classes["@mozilla.org/supports-string;1"].createInstance(Components.interfaces.nsISupportsString);
        var copytext=txt;str.data=copytext;trans.setTransferData("text/unicode",str,copytext.length*2);
        var clipid=Components.interfaces.nsIClipboard;if(!clip)
        return false;
        clip.setData(trans,null,clipid.kGlobalClipboard);
        }
} 

//3、另保存代码：
function saveCode(id) {
	obj=document.getElementById(id);
        var winname = window.open('', '_blank', 'top=10000');
        winname.document.open('text/html', 'replace');
   var str = obj.value;
        winname.document.write(str);
        winname.document.execCommand('saveas','','code.htm');
        winname.close();
} 

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<title>修改HOSTS利用IPV6翻墙～ - 国家局域网研究所 -  1984bbs.com </title>
<meta name="keywords" content="" />
<meta name="MSSmartTagsPreventParsing" content="True" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<link rel="archives" title="1984bbs.com" href="https://1984bbs.com/archiver/" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_viewthread.css" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_common.css" />
<script type="text/javascript">
	var discuz_uid = 13019;var IMGDIR = 'images/default';var attackevasive = '0';var gid = 0;var STYLEID = '1';
	gid = parseInt('3');var fid = parseInt('26');var tid = parseInt('34239');
</script>
<script src="include/javascript/common.js" type="text/javascript"></script>

<style>
 .ChatAutoRefreshStyle {margin-right:0px;}
 .ChatSubmitButtonStyle {margin-right:0px;}
 .gwt-Button {margin-right:0px;}
</style>
<!-- <script src="../OnlineChat/port.for1984.OnlineChat.nocache.js" type="text/javascript"></script> -->
<script src="/onlinechat.new/onlinechat.nocache.js" type="text/javascript"></script> 

<script type="text/javascript" language="javascript">

var chat_button;
var mynickname;

var chat_start_num=0;
var chat_refresh;



function getChatViewPage(){
 return chat_start_num;
}

function sendChatRefreshButtonObjct(o)
{
chat_refresh=o;
}

function chat_reply_action(Sender)
{
 document.getElementById('chat_msg').value=
 "@"+unescape(Sender)+","+document.getElementById('chat_msg').value;
}

function receiveChatViewPage(i)
{
 chat_start_num=i;
 var nextpage=document.getElementById('chat_next_page');
 if (i==0) { 
   nextpage.style.display = "none";
   nextpage.style.visibility = "hidden";
  }
  else
  {
   nextpage.style.display = "inline";   
   nextpage.style.visibility = "visible";
  }
}

function chat_page_next()
{
chat_start_num-=getChatListLimit(100);
if (chat_start_num<0) chat_start_num=0;
chat_refresh.click();
}

function chat_page_prev()
{
chat_start_num+=getChatListLimit(100);
chat_refresh.click();
}


function setMyChatNickName(o)
{
mynickname=o;
}

function handleChatChange()
{
      try{
      q=140-document.getElementById('chat_msg').value.length;
      document.getElementById('chat_msg_length').innerHTML = ""+q;
      } catch(e) {
	}
}

var chat_check_timer;


function handleChatEnterKey(e) {
    if (e.keyCode == 13 || e.keyCode == 10) {
        if (!chat_button.disabled)
             chat_button.click();
        return false;
    }
    else 
   {
        handleChatChange();
   }
}

function getChatRefreshTime()
{
 return 6;
}

function runClearChatBox()
{
document.getElementById('chat_msg').value = "";
}

function replaceButtonText(button, text)
{
    if (button)
    {
      if (button.childNodes[0])
      {
        button.childNodes[0].nodeValue=text;
      }
      else if (button.value)
      {
        button.value=text;
      }
      else //if (button.innerHTML)
      {
        button.innerHTML=text;
      }
    }
}


function sendChatCommentButtonObjct(o)
{
 chat_button=o;
 replaceButtonText(chat_button, "提交");
 chat_check_timer= setInterval("handleChatChange()",3000);
}

function replaceURLWithHTMLLinks(text) {
var exp = /(\b(https?|ftp|file):\/\/[-A-Z0-9+&@#\/%?=~_|!:,.;]*[-A-Z0-9+&@#\/%=~_|])/ig;
return text.replace(exp,"<a href='$1' target='_blank'>$1</a>");
}

function getChatItemWriteString(Id,Sender,Msg,Time,Reply)
{
 var msg;
 try
 {
 msg=replaceURLWithHTMLLinks(Msg.substr(0,140));
 }
 catch(e) {
 msg=Msg.substr(0,140);
 }
 h="<span style='width:200px;white-space:normal; word-break:break-all;overflow:hidden;word-wrap:break-word;OVERFLOW-X:hidden;'>";
   if (Sender==mynickname) {
  h+="<font color=#ff0000>"+Sender+"</font>(<i>"+Time.substr(11)+"</i>) "+"<font color=#444444>"+msg+"</font>"+"<hr style='border-top-width:0px;border-bottom-width:1px;border-color:#eeeeee;border-right-width:0px;border-left-width:0px;' />";
   }
   else {
      h+="<font color=#000000><b>"+Sender+"</b></font>(<i>"+Time.substr(11)+"</i>) "+"<font color=#555555>"+msg+"</font>"+"<img src='1984chat_re.jpg' border=0 onclick='chat_reply_action(\""+escape(Sender)+"\");'/>"+"<hr style='border-top-width:0px;border-bottom-width:1px;border-left-width:0px;border-right-width:0px;border-color:#eeeeee;' />";
   } 
  h+="</span>";
   return h;
}

function getChatItemWriteStart()
{
 try {
　document.getElementById('online_chat_box').style.visibility = "visible";
　document.getElementById('online_chat_loading').style.visibility = "hidden";
　document.getElementById('online_chat_loading').style.display = "none";
 } catch(e) {};
  return "";
}

function getChatItemWriteEnd()
{
return "";
}

function getChatListLimit(i)
{
        return 15;
}
</script>

</head>

<body onkeydown="if(event.keyCode==27) return false;">
<div id="append_parent"></div><div id="ajaxwaitid"></div>
	<div class="wrap">
		<div id="header">
			<h2><a href="index.php" title="1984bbs.com"><img src="images/default/logo.gif" alt="1984bbs.com" border="0" /></a></h2>
			<div id="ad_headerbanner"><b>能截图的截图，喜欢备份的备份。2010年10月12日的某时某刻，1984bbs将关闭。对不起各位，我力所不能及。<br>希望1984bbs再见面的时候，这个世界上再也没有共产党。</b>——张书记 1984bbs</div>
		</div>
		<div id="menu">
			<span class="avataonline">
							<cite><a class="dropmenu" id="viewpro">vos2010</a></cite>
				<a href="logging.php?action=logout&amp;formhash=823c9fa2">退出</a>
						</span>
					<ul>
			<li><a href="my.php?item=threads">话题</a></li>
			<li><a href="my.php?item=polls&amp;type=poll">投票</a></li>
			<li><a href="my.php?item=posts">回复</a></li>
			<li><a href="my.php?item=favorites&amp;type=thread">收藏</a></li>
			<li><a href="pm.php" id="pmnotice" onclick="pmwin('open')"><font style="color:#FF0000">您有新短消息</font></a></li>
									<li><a href="search.php?srchfid=26">搜索</a></li>									
				<li><a href="memcp.php?action=profile">个人资料</a></li>				<li><a href="invite.php">邀请</a></li>																<!--				<li><a href="faq.php">关于我们</a></li> -->
			</ul>
		</div>

<style type="text/css">
.defaultpost { height: auto !important; height:120px; min-height:120px !important; }
.signatures { height: expression(signature(this)); max-height: 100px; }
</style>

<script src="include/javascript/viewthread.js" type="text/javascript"></script>
<script type="text/javascript">zoomstatus = parseInt(1);</script>

<div id="foruminfo">
	<div id="nav">
		<div class="userinfolist">
			<p><a href="index.php" id="forumlist" onmouseover="showMenu(this.id)" class="dropmenu">1984bbs.com</a> &raquo; <a href="forumdisplay.php?fid=26">国家局域网研究所</a> &raquo; 修改HOSTS利用IPV6翻墙～</p>
		</div>
	</div>
	<div id="headsearch">
			</div>
</div>

<div class="ad_text" id="ad_text"><table summary="Text Ad" cellpadding="0" cellspacing="1"><tr><td width="100%"><b>发布新话题与讨论建议及审查说明</b><br>
欢迎发布有讨论和阅读价值的话题；不欢迎嘲弄宗教、种族、地缘、性取向等话题。<br> 
推崇布拉格公民论坛《对话守则》：对话的目的是寻求真理，不是为了斗争；不做人身攻击；保持主题；辩论时要用证据；要分清对话与只准自己讲话的区别；尽量理解对方。<br>
遵循《世界人权宣言》第十九条不对用户已发表言论进行删除处理；用户有权限删除本人已发表言论；编辑会合并重复话题。</td></tr>
</table></div>
<div class="pages_btns">
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=34239&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=34239&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
				<span class="postbtn" id="newspecial" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=34239&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

	<ul class="popupmenu_popup newspecialmenu" id="newspecial_menu" style="display: none">
		<li><a href="post.php?action=newthread&amp;fid=26&amp;extra=">发新话题</a></li>
		<li class="poll"><a href="post.php?action=newthread&amp;fid=26&amp;extra=&amp;special=1">发布投票</a></li>													</ul>

<form method="post" name="modactions">
	<input type="hidden" name="formhash" value="823c9fa2" />
	<div class="mainbox viewthread">
		<span class="headactions">
					<a href="my.php?item=favorites&amp;tid=34239" id="ajax_favorite" onclick="ajaxmenu(event, this.id, 3000, 0)">收藏</a>
			<a href="my.php?item=subscriptions&amp;subadd=34239" id="ajax_subscription" onclick="ajaxmenu(event, this.id, 3000, null, 0)">订阅</a>
			<a href="misc.php?action=emailfriend&amp;tid=34239" id="emailfriend" onclick="ajaxmenu(event, this.id, 9000000, null, 0)">推荐</a>
				<a href="viewthread.php?action=printable&amp;tid=34239" target="_blank" class="notabs">打印</a>
				</span>
		<h1>修改HOSTS利用IPV6翻墙～		</h1>
							<table id="pid423944" summary="pid423944" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=11060" target="_blank" id="userinfo423944" class="dropmenu" onmouseover="showMenu(this.id)">lanfeng</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=11060">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=11060&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_0" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum423944" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=34239&page=1#pid423944', '话题链接已经复制到剪贴板')">1楼</strong>
													<em onclick="$('postmessage_423944').className='t_bigfont'">大</em>							<em onclick="$('postmessage_423944').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_423944').className='t_smallfont'">小</em>												发表于 2010-1-10 21:44&nbsp;																					<a href="viewthread.php?tid=34239&amp;page=1&amp;authorid=11060" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_0"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_0"></div><div id="ad_thread4_0"></div>
													<h2>修改HOSTS利用IPV6翻墙～</h2>
						
						
																											<div id="postmessage_423944" class="t_msgfont">转自GFW blog(<a href="http://www.chinagfw.org/2010/01/hostsipv6.html" target="_blank">http://www.chinagfw.org/2010/01/hostsipv6.html</a>)<br />
<br />
来源：<a href="http://fynnasher.blogspot.com/2010/01/hostsipv6.html" target="_blank">http://fynnasher.blogspot.com/2010/01/hostsipv6.html</a><br />
<br />
#Google的IPv6服务hosts&nbsp;&nbsp;<br />
<br />
#利用IPv6技术翻墙，保证Google服务可用，校园网用户使用IPv6应该不收取上网费用（至少我们学校如此）<br />
<br />
#最下方有各高校校园网的IPv6hosts列表<br />
<br />
#欢迎转载，请注明来源，谢谢 <br />
<br />
#本文的发布地址：<a href="http://docs.google.com.sixxs.org/View?id=dfkdmxnt_61d9ck9ffq" target="_blank">http://docs.google.com.sixxs.org/View?id=dfkdmxnt_61d9ck9ffq</a><br />
<br />
#本文的共享链接：<a href="http://docs.google.com.sixxs.org/Doc?docid=0ARhAbsvps1PlZGZrZG14bnRfNjFkOWNrOWZmcQ&amp;hl=zh_CN" target="_blank">http://docs.google.com.sixxs.org ... OWZmcQ&amp;hl=zh_CN</a><br />
<br />
#有新的Google地址需要添加？请在这里提交，帮助我完善此列表，谢谢～<br />
<br />
#欢迎穿越传阅<br />
<br />
#hosts文件位置：<br />
<br />
#C:\Windows\System32\drivers\etc&nbsp;&nbsp;（Windows中）<br />
<br />
#/etc&nbsp;&nbsp;（Linux中）<br />
<br />
#用文本打开hosts文件，复制以下内容到hosts文件中，保存即可（hosts文件没有后缀）<br />
<br />
#关闭某个IPv6的转发请在那一行的最前面添加#号，启用请去除最前面#号，每行中间的#号是为了区分地址和注释，不用理睬- -<br />
<br />
# Copyright (c) 1993-2006 Microsoft Corp.<br />
<br />
#<br />
<br />
# This is a sample HOSTS file used by Microsoft TCP/IP for Windows.<br />
<br />
#<br />
<br />
# This file contains the mappings of IP addresses to host names. Each<br />
<br />
# entry should be kept on an individual line. The IP address should<br />
<br />
# be placed in the first column followed by the corresponding host name.<br />
<br />
# The IP address and the host name should be separated by at least one<br />
<br />
# space.<br />
<br />
#<br />
<br />
# Additionally, comments (such as these) may be inserted on individual<br />
<br />
# lines or following the machine name denoted by a '#' symbol.<br />
<br />
#<br />
<br />
# For example:<br />
<br />
#<br />
<br />
#&nbsp; &nbsp;&nbsp; &nbsp;102.54.94.97&nbsp; &nbsp;&nbsp;&nbsp;rhino.acme.com&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; # source server<br />
<br />
#&nbsp; &nbsp;&nbsp; &nbsp; 38.25.63.10&nbsp; &nbsp;&nbsp;&nbsp;x.acme.com&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;# x client host<br />
<br />
<br />
<br />
127.0.0.1&nbsp; &nbsp;&nbsp; &nbsp; localhost<br />
<br />
::1&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; localhost<br />
<br />
<br />
<br />
<br />
<br />
##########Google服务（官方IPV6）#############<br />
<br />
#Web&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;网页<br />
<br />
2001:4860:c004::68 <a href="http://www.google.com" target="_blank">www.google.com</a>&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;#主页<br />
<br />
2001:4860:c004::68 google.com<br />
<br />
2001:4860:c004::68 <a href="http://www.l.google.com" target="_blank">www.l.google.com</a><br />
<br />
2001:4860:c004::68 sb.google.com&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;#SafeBox<br />
<br />
2001:4860:c004::68 www0.l.google.com<br />
<br />
2001:4860:c004::68 www1.l.google.com<br />
<br />
2001:4860:c004::68 www2.l.google.com<br />
<br />
2001:4860:c004::68 www3.l.google.com<br />
<br />
2001:4860:c004::68 id.google.com&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;#帐号登录<br />
<br />
2001:4860:c004::68 id.l.google.com<br />
<br />
2001:4860:c004::68 gg.google.com&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;#广告？<br />
<br />
2001:4860:c004::68 suggestqueries.google.com&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;#搜索建议<br />
<br />
2001:4860:c004::68 clients0.google.com&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;#客户端服务器<br />
<br />
2001:4860:c004::68 clients1.google.com&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;#客户端服务器<br />
<br />
2001:4860:c004::68 clients2.google.com&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;#客户端服务器<br />
<br />
2001:4860:c004::68 clients3.google.com&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;#客户端服务器<br />
<br />
2001:4860:c004::68 safebrowsing.clients.google.com&nbsp; &nbsp;#安全浏览客户端服务器<br />
<br />
2001:4860:c004::68 ns1.google.com&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;#域名系统服务器ns-soa/ns<br />
<br />
2001:4860:c004::68 ns2.google.com&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;#域名系统服务器ns<br />
<br />
2001:4860:c004::68 ns3.google.com&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;#域名系统服务器ns<br />
<br />
2001:4860:c004::68 ns4.google.com&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;#域名系统服务器ns<br />
<br />
2001:4860:c004::68 <a href="http://www.google.com.tw" target="_blank">www.google.com.tw</a>&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;#台湾Google<br />
<br />
2001:4860:c004::68 services.google.com&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;#未知<br />
<br />
2001:4860:c004::68 feedproxy.google.com&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;#未知<br />
<br />
<br />
<br />
#Images&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;图片<br />
<br />
2001:4860:c004::68 images.google.com&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;#主页<br />
<br />
2001:4860:c004::68 tbn0.google.com<br />
<br />
2001:4860:c004::68 tbn1.google.com<br />
<br />
2001:4860:c004::68 tbn2.google.com<br />
<br />
2001:4860:c004::68 tbn3.google.com<br />
<br />
2001:4860:c004::68 tbn4.google.com<br />
<br />
2001:4860:c004::68 tbn5.google.com<br />
<br />
2001:4860:c004::68 tbn6.google.com<br />
<br />
<br />
<br />
#Video&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; 视频<br />
<br />
2001:4860:c004::68 video.google.com&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;#主页<br />
<br />
2001:4860:c004::68 video-stats.video.google.com<br />
<br />
2001:4860:c004::68 qwqy.vp.video.l.google.com<br />
<br />
2001:4860:c004::68 0.gvt0.com<br />
<br />
2001:4860:c004::68 1.gvt0.com<br />
<br />
2001:4860:c004::68 2.gvt0.com<br />
<br />
2001:4860:c004::68 3.gvt0.com<br />
<br />
2001:4860:c004::68 4.gvt0.com<br />
<br />
2001:4860:c004::68 5.gvt0.com<br />
<br />
<br />
<br />
#Map&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;地图<br />
<br />
2001:4860:c004::68 map.google.com&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;#主页<br />
<br />
2001:4860:c004::68 maps.google.com<br />
<br />
2001:4860:c004::68 maps.l.google.com<br />
<br />
2001:4860:c004::68 khm.google.com<br />
<br />
2001:4860:c004::68 khm0.google.com<br />
<br />
2001:4860:c004::68 khm1.google.com<br />
<br />
2001:4860:c004::68 khm2.google.com<br />
<br />
2001:4860:c004::68 khm3.google.com<br />
<br />
2001:4860:c004::68 mt.l.google.com<br />
<br />
2001:4860:c004::68 mt0.google.com<br />
<br />
2001:4860:c004::68 mt1.google.com<br />
<br />
2001:4860:c004::68 mt2.google.com<br />
<br />
2001:4860:c004::68 mt3.google.com<br />
<br />
2001:4860:c004::68 mlt0.google.com<br />
<br />
2001:4860:c004::68 mlt1.google.com<br />
<br />
2001:4860:c004::68 mlt2.google.com<br />
<br />
2001:4860:c004::68 mlt3.google.com<br />
<br />
2001:4860:c004::68 khm0.google.com<br />
<br />
2001:4860:c004::68 khm1.google.com<br />
<br />
2001:4860:c004::68 khm2.google.com<br />
<br />
2001:4860:c004::68 khm3.google.com<br />
<br />
<br />
<br />
#News&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;资讯<br />
<br />
2001:4860:c004::68 news.google.com&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;#主页<br />
<br />
2001:4860:c004::68 nt0.ggpht.com<br />
<br />
2001:4860:c004::68 nt1.ggpht.com<br />
<br />
2001:4860:c004::68 nt2.ggpht.com<br />
<br />
2001:4860:c004::68 nt3.ggpht.com<br />
<br />
2001:4860:c004::68 nt4.ggpht.com<br />
<br />
2001:4860:c004::68 nt5.ggpht.com<br />
<br />
<br />
<br />
#Gmail&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; 邮箱<br />
2001:4860:c004::68 gmail.google.com&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; #主页<br />
2001:4860:c004::68 <a href="http://www.gmail.com" target="_blank">www.gmail.com</a>&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; #Gmail主页<br />
2001:4860:c004::68 gmail.com&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;#Gmail主页<br />
2001:4860:c004::68 talk.gmail.com&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;#Gmail中Gtalk聊天服务<br />
2001:4860:c004::68 pop.gmail.com&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; #pop服务<br />
2001:4860:c004::68 smtp.gmail.com&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;#smtp服务<br />
2001:4860:c004::68 mail.google.com<br />
2001:4860:c004::68 googlemail.l.google.com<br />
2001:4860:c004::68 chatenabled.mail.google.com&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;#Gmail中Gtalk聊天服务<br />
<br />
#Books&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; 图书<br />
<br />
2001:4860:c004::68 books.google.com&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; #主页<br />
<br />
2001:4860:c004::68 bks0.books.google.com<br />
<br />
2001:4860:c004::68 bks1.books.google.com<br />
<br />
2001:4860:c004::68 bks2.books.google.com<br />
<br />
2001:4860:c004::68 bks3.books.google.com<br />
<br />
2001:4860:c004::68 bks4.books.google.com<br />
<br />
2001:4860:c004::68 bks5.books.google.com<br />
<br />
2001:4860:c004::68 bks6.books.google.com<br />
<br />
2001:4860:c004::68 bks7.books.google.com<br />
<br />
2001:4860:c004::68 bks8.books.google.com<br />
<br />
2001:4860:c004::68 bks9.books.google.com<br />
<br />
<br />
<br />
#Finance&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;财经<br />
<br />
2001:4860:c004::68 finance.google.com<br />
<br />
<br />
<br />
#Translate&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;翻译<br />
<br />
2001:4860:c004::68 translate.google.com<br />
<br />
<br />
<br />
#Blog&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;博客搜索<br />
<br />
2001:4860:c004::68 blogsearch.google.com<br />
<br />
<br />
<br />
#Calendar&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; 日历<br />
<br />
2001:4860:c004::68 calendar.google.com<br />
<br />
<br />
<br />
#Photo/Picasa&nbsp; &nbsp;&nbsp; &nbsp;照片/网络相册<br />
<br />
2001:4860:c004::68 photos.google.com<br />
<br />
2001:4860:c004::68 picasa.google.com<br />
<br />
2001:4860:c004::68 picasaweb.google.com<br />
<br />
2001:4860:c004::68 lh0.ggpht.com<br />
<br />
2001:4860:c004::68 lh1.ggpht.com<br />
<br />
2001:4860:c004::68 lh2.ggpht.com<br />
<br />
2001:4860:c004::68 lh3.ggpht.com<br />
<br />
2001:4860:c004::68 lh4.ggpht.com<br />
<br />
2001:4860:c004::68 lh5.ggpht.com<br />
<br />
2001:4860:c004::68 lh6.ggpht.com<br />
<br />
2001:4860:c004::68 lh7.ggpht.com<br />
<br />
2001:4860:c004::68 lh8.ggpht.com<br />
2001:4860:c004::68 lh9.ggpht.com<br />
<br />
<br />
#Docs&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;文档<br />
<br />
2001:4860:c004::68 docs.google.com<br />
<br />
2001:4860:c004::68 spreadsheets.google.com<br />
<br />
2001:4860:c004::68 writely.google.com<br />
<br />
2001:4860:c004::68 writely.l.google.com<br />
<br />
2001:4860:c004::68 writely-china.l.google.com<br />
<br />
<br />
<br />
#Reader&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;阅读器<br />
<br />
2001:4860:c004::68 reader.google.com<br />
<br />
<br />
<br />
#Sites&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; 协作平台<br />
<br />
2001:4860:c004::68 sites.google.com<br />
<br />
<br />
<br />
#Group&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; 论坛<br />
<br />
2001:4860:c004::68 groups.google.com<br />
<br />
2001:4860:c004::68 groups.l.google.com<br />
<br />
2001:4860:c004::68 blob-s-docs.googlegroups.com<br />
<br />
2001:4860:c004::68 2503061233288453901-a-1802744773732722657-s-sites.googlegroups.com<br />
<br />
<br />
<br />
#Scholar&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;学术搜索<br />
<br />
2001:4860:c004::68 scholar.google.com<br />
<br />
2001:4860:c004::68 scholar.l.google.com<br />
<br />
<br />
<br />
#Tools&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; 工具<br />
<br />
2001:4860:c004::68 tools.google.com<br />
<br />
<br />
<br />
#Code&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;代码<br />
<br />
2001:4860:c004::68 code.google.com<br />
<br />
2001:4860:c004::68 code.l.google.com<br />
<br />
2001:4860:c004::68 chromium.googlecode.com<br />
<br />
2001:4860:c004::68 searchforchrome.googlecode.com<br />
<br />
2001:4860:c004::68 android-scripting.googlecode.com&nbsp;&nbsp;#Android Scripting Environment<br />
<br />
2001:4860:c004::68 china-addthis.googlecode.com&nbsp; &nbsp;&nbsp; &nbsp;#<br />
<br />
2001:4860:c004::68 google-code-feed-gadget.googlecode.com<br />
<br />
<br />
<br />
#Labs&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;实验室<br />
<br />
2001:4860:c004::68 labs.google.com<br />
<br />
2001:4860:c004::68 <a href="http://www.googlelabs.com" target="_blank">www.googlelabs.com</a><br />
<br />
2001:4860:c004::68 browsersize.googlelabs.com&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;#Browser Size<br />
<br />
2001:4860:c004::68 storegadget.googlelabs.com&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;#Google Checkout Store Gadget<br />
<br />
2001:4860:c004::68 citytours.googlelabs.com&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; #City Tours<br />
<br />
2001:4860:c004::68 livingstories.googlelabs.com&nbsp; &nbsp;&nbsp; &nbsp;#Living Stories<br />
<br />
2001:4860:c004::68 image-swirl.googlelabs.com&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;#Image Swirl<br />
<br />
2001:4860:c004::68 scriptconv.googlelabs.com&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;#Script Converter<br />
<br />
2001:4860:c004::68 relatedlinks.googlelabs.com&nbsp; &nbsp;&nbsp; &nbsp; #Related Links<br />
<br />
2001:4860:c004::68 fastflip.googlelabs.com&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;#Fast Flip<br />
<br />
2001:4860:c004::68 listen.googlelabs.com&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; #Google Listen<br />
<br />
2001:4860:c004::68 similar-images.googlelabs.com&nbsp; &nbsp;&nbsp;&nbsp;#Similar Images<br />
<br />
2001:4860:c004::68 tables.googlelabs.com&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; #Fusion Tables<br />
<br />
2001:4860:c004::68 newstimeline.googlelabs.com&nbsp; &nbsp;&nbsp; &nbsp; #Google News Timeline<br />
<br />
<br />
<br />
#Knol&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;在线百科全书<br />
<br />
2001:4860:c004::68 knol.google.com<br />
<br />
<br />
<br />
#SketchUp&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; 3D建模工具<br />
<br />
2001:4860:c004::68 sketchup.google.com<br />
<br />
<br />
<br />
#Pack&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;软件精选<br />
<br />
2001:4860:c004::68 pack.google.com<br />
<br />
<br />
<br />
#Blogger&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;博客服务<br />
<br />
2001:4860:c004::68 <a href="http://www.blogger.com" target="_blank">www.blogger.com</a><br />
<br />
2001:4860:c004::68 beta.blogger.com<br />
<br />
2001:4860:c004::68 blogger.google.com<br />
<br />
2001:4860:c004::68 blogger.l.google.com<br />
<br />
2001:4860:c004::68 <a href="http://www.blogblog.com" target="_blank">www.blogblog.com</a><br />
<br />
2001:4860:c004::68 www1.blogblog.com<br />
<br />
2001:4860:c004::68 www2.blogblog.com<br />
<br />
2001:4860:c004::68 buttons.blogger.com<br />
<br />
2001:4860:c004::68 img.blogblog.com<br />
<br />
2001:4860:c004::68 img1.blogblog.com<br />
<br />
2001:4860:c004::68 img2.blogblog.com<br />
<br />
2001:4860:c004::68 photos1.blogger.com<br />
<br />
2001:4860:c004::68 bp0.blogger.com<br />
<br />
2001:4860:c004::68 img.blshe.com<br />
<br />
2001:4860:c004::68 draft.blogger.com&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;#Blogger 测试区<br />
<br />
2001:4860:c004::68 status.blogger.com&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;#Blogger 状态<br />
<br />
2001:4860:c004::68 help.blogger.com&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; #支持中心<br />
<br />
2001:4860:c004::68 buzz.blogger.com&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; #Blogger Buzz博客（英文）<br />
<br />
<br />
<br />
#Blogspot&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; 博客服务<br />
2001:4860:c004::68 <a href="http://www.blogspot.com" target="_blank">www.blogspot.com</a><br />
2001:4860:c004::68 blogsofnote.blogspot.com&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;#留言博客（英文版本）<br />
2001:4860:c004::68 knownissues.blogspot.com&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;#已知问题<br />
2001:4860:c004::68 1.bp.blogspot.com&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;#<br />
2001:4860:c004::68 2.bp.blogspot.com&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;#<br />
2001:4860:c004::68 3.bp.blogspot.com&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;#<br />
2001:4860:c004::68 4.bp.blogspot.com&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;#<br />
2001:4860:c004::68 googleblog.blogspot.com&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;#Official Google Blog<br />
2001:4860:c004::68 googlechromereleases.blogspot.com<br />
2001:4860:c004::68 youtube-global.blogspot.com&nbsp; &nbsp;&nbsp;&nbsp;#YouTube<br />
2001:4860:c004::68 chinafreenet.blogspot.com&nbsp; &nbsp;&nbsp; &nbsp; #中国自由网<br />
2001:4860:c004::68 gregmankiw.blogspot.com&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;#GREG MANKIW'S BLOG<br />
2001:4860:c004::68 xiangeliushui.blogspot.com&nbsp; &nbsp;&nbsp; &nbsp;#年华似水，岁月如歌<br />
2001:4860:c004::68 chinagfw.blogspot.com&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;#GFW Blog<br />
2001:4860:c004::68 wallpapers-arena.blogspot.com&nbsp; &nbsp;#Wallpapers Arena<br />
2001:4860:c004::68 ggq.blogspot.com&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; #GG圈<br />
2001:4860:c004::68 whiteappleer.blogspot.com&nbsp; &nbsp;&nbsp; &nbsp; #WA＋ER<br />
2001:4860:c004::68 rain-reader.blogspot.com&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;#Nostalgia: Those Who Remain<br />
#2001:4860:c004::68 *.blogspot.com&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;#可以添加你自己的博客地址到这里，*为你的前缀 <br />
<br />
<br />
#Checkout&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; 买家<br />
<br />
2001:4860:c004::68 checkout.google.com<br />
<br />
<br />
<br />
#Orkut&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; 网络社区<br />
<br />
2001:4860:c004::68 orkut.google.com<br />
<br />
2001:4860:c004::68 orkut.l.google.com<br />
<br />
2001:4860:c004::68 <a href="http://www.orkut.com" target="_blank">www.orkut.com</a><br />
<br />
2001:4860:c004::68 clients1.orkut.com<br />
<br />
<br />
<br />
#Toolbar&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;工具栏<br />
<br />
2001:4860:c004::68 toolbar.google.com<br />
<br />
2001:4860:c004::68 <a href="http://www.gmailnotifier.com" target="_blank">www.gmailnotifier.com</a>&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;#Gmail Notifier<br />
<br />
<br />
<br />
#App Engine<br />
<br />
2001:4860:c004::68 appengine.google.com&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;#主页<br />
<br />
2001:4860:c004::68 apps.google.com&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;#主页<br />
<br />
2001:4860:c004::68 appspot.l.google.com&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;#<br />
<br />
2001:4860:c004::68 translate.googleapis.com&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;#Google 翻译 API<br />
<br />
2001:4860:c004::68 ajax.googleapis.com&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; #Ajax API<br />
<br />
2001:4860:c004::68 chart.apis.google.com&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;#Google 图表 API <br />
<br />
2001:4860:c004::68 wave-api.appspot.com&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;#Google Wave API<br />
<br />
2001:4860:c004::68 wave-skynet.appspot.com&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;#SkyNet<br />
<br />
2001:4860:c004::68 storegadgetwizard.appspot.com&nbsp; &nbsp;#Google Checkout Store Gadget<br />
<br />
2001:4860:c004::68 moderator.appspot.com&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;#Google Moderator<br />
<br />
2001:4860:c004::68 mytracks.appspot.com&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;#My Tracks for Android<br />
<br />
2001:4860:c004::68 reader2twitter.appspot.com&nbsp; &nbsp;&nbsp; &nbsp;#Reader2Tweet<br />
<br />
2001:4860:c004::68 gfw.appspot.com<br />
<br />
2001:4860:c004::68 go2china9.appspot.com<br />
<br />
2001:4860:c004::68 mirrorrr.appspot.com<br />
<br />
2001:4860:c004::68 mirrornt.appspot.com<br />
<br />
2001:4860:c004::68 soproxy.appspot.com <br />
<br />
2001:4860:c004::68 so-proxy.appspot.com<br />
<br />
2001:4860:c004::68 go-west.appspot.com<br />
<br />
2001:4860:c004::68 proxytea.appspot.com <br />
<br />
2001:4860:c004::68 sivanproxy.appspot.com<br />
<br />
2001:4860:c004::68 proxybay.appspot.com<br />
<br />
2001:4860:c004::68 ipgoto.appspot.com<br />
<br />
2001:4860:c004::68 meme2028.appspot.com <br />
<br />
<br />
<br />
#Chrome&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;谷歌浏览器<br />
<br />
2001:4860:c004::68 chrome.google.com<br />
<br />
<br />
<br />
#Desktop&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;桌面<br />
<br />
2001:4860:c004::68 desktop.google.com<br />
<br />
<br />
#Google Earth&nbsp; &nbsp;&nbsp; &nbsp;Google地球<br />
2001:4860:c004::68 earth.google.com<br />
<br />
#Google Mars&nbsp; &nbsp;&nbsp; &nbsp; Google火星地图<br />
<br />
2001:4860:c004::68 mars.google.com<br />
<br />
<br />
<br />
##Google其他服务<br />
<br />
#Ajax<br />
<br />
2001:4860:c004::68 googleapis-ajax.google.com<br />
<br />
2001:4860:c004::68 googleapis-ajax.l.google.com<br />
<br />
<br />
<br />
#Modules<br />
<br />
2001:4860:c004::68 gmodules.com<br />
<br />
2001:4860:c004::68 <a href="http://www.gmodules.com" target="_blank">www.gmodules.com</a><br />
<br />
2001:4860:c004::68 <a href="http://www.ig.gmodules.com" target="_blank">www.ig.gmodules.com</a><br />
<br />
2001:4860:c004::68 ig.gmodules.com<br />
<br />
2001:4860:c004::68 ads.gmodules.com<br />
<br />
2001:4860:c004::68 1.ig.gmodules.com<br />
<br />
2001:4860:c004::68 2.ig.gmodules.com<br />
<br />
2001:4860:c004::68 3.ig.gmodules.com<br />
<br />
2001:4860:c004::68 4.ig.gmodules.com<br />
<br />
2001:4860:c004::68 5.ig.gmodules.com<br />
<br />
2001:4860:c004::68 6.ig.gmodules.com<br />
<br />
2001:4860:c004::68 maps.gmodules.com<br />
<br />
2001:4860:c004::68 img0.gmodules.com<br />
<br />
2001:4860:c004::68 img1.gmodules.com<br />
<br />
2001:4860:c004::68 img2.gmodules.com<br />
<br />
2001:4860:c004::68 img3.gmodules.com<br />
<br />
2001:4860:c004::68 skins.gmodules.com<br />
<br />
<br />
<br />
#YouTube<br />
<br />
2001:4860:c004::68 <a href="http://www.youtube.com" target="_blank">www.youtube.com</a><br />
<br />
2001:4860:c004::68 tw.youtube.com<br />
<br />
2001:4860:c004::68 youtu.be<br />
<br />
2001:4860:c004::68 gdata.youtube.com<br />
<br />
2001:4860:c004::68 help.youtube.com<br />
<br />
2001:4860:c004::68 upload.youtube.com<br />
<br />
2001:4860:c004::68 insight.youtube.com<br />
<br />
2001:4860:c004::68 img.youtube.com<br />
<br />
2001:4860:c004::68 s2.youtube.com<br />
<br />
2001:4860:c004::68 youtube.com<br />
<br />
2001:4860:c004::68 apiblog.youtube.com<br />
<br />
2001:4860:c004::68 clients1.youtube.com<br />
<br />
2001:4860:c004::68 d.yimg.com<br />
<br />
2001:4860:c004::68 s.ytimg.com<br />
<br />
2001:4860:c004::68 i.ytimg.com<br />
<br />
2001:4860:c004::68 i1.ytimg.com<br />
<br />
2001:4860:c004::68 i2.ytimg.com<br />
<br />
2001:4860:c004::68 i3.ytimg.com<br />
<br />
2001:4860:c004::68 i4.ytimg.com<br />
<br />
<br />
<br />
#Google Store&nbsp; &nbsp;&nbsp; &nbsp;Google商店（里面有很多谷歌自己的东西出售，像谷歌T恤、茶杯、小玩意等等。）<br />
<br />
2001:4860:c004::68 <a href="http://www.googlestore.com" target="_blank">www.googlestore.com</a><br />
<br />
<br />
<br />
#Download&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; 下载<br />
<br />
2001:4860:c004::68 dl.google.com<br />
<br />
<br />
<br />
#Wave&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;波浪<br />
<br />
2001:4860:c004::68 wave.google.com<br />
<br />
2001:4860:c004::68 wave0.google.com<br />
<br />
2001:4860:c004::68 wave1.google.com<br />
<br />
2001:4860:c004::68 googlewave.com<br />
<br />
<br />
<br />
#GTalk&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; 聊天<br />
<br />
2001:4860:c004::68 talk.google.com<br />
<br />
2001:4860:c004::68 talkx.l.google.com<br />
<br />
2001:4860:c004::68 talkgadget.google.com<br />
<br />
2001:4860:c004::68 rtmp0.google.com<br />
<br />
2001:4860:c004::68 users.talk.google.com<br />
<br />
<br />
#Guru&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;?<br />
2001:4860:c004::68 guru.google.com<br />
<br />
#Android&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;Google手机操作系统<br />
<br />
2001:4860:c004::68 <a href="http://www.android.com" target="_blank">www.android.com</a><br />
<br />
2001:4860:c004::68 android.com<br />
<br />
<br />
<br />
#Analytics&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;分析（Google所提供的网站流量统计服务）<br />
<br />
2001:4860:c004::68 <a href="http://www.google-analytics.com" target="_blank">www.google-analytics.com</a><br />
<br />
2001:4860:c004::68 ssl.google-analytics.com<br />
<br />
<br />
<br />
#Hosted&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;Host服务器，为Shopping（购物）、Blog（博客搜索）提供外部链接的地址指向服务<br />
<br />
2001:4860:c004::68 googlehosted.l.google.com<br />
<br />
2001:4860:c004::68 base.googlehosted.com<br />
<br />
2001:4860:c004::68 base0.googlehosted.com<br />
<br />
2001:4860:c004::68 base1.googlehosted.com<br />
<br />
2001:4860:c004::68 base2.googlehosted.com<br />
<br />
2001:4860:c004::68 base3.googlehosted.com<br />
<br />
2001:4860:c004::68 base4.googlehosted.com<br />
<br />
2001:4860:c004::68 base5.googlehosted.com<br />
<br />
<br />
<br />
#Gstatic&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;Google域名服务器，提供谷歌搜索等向外部网站的链接域名<br />
<br />
2001:4860:c004::68 <a href="http://www.gstatic.com" target="_blank">www.gstatic.com</a><br />
<br />
2001:4860:c004::68 csi.gstatic.com<br />
<br />
2001:4860:c004::68 maps.gstatic.com<br />
<br />
2001:4860:c004::68 ssl.gstatic.com<br />
<br />
2001:4860:c004::68 t0.gstatic.com<br />
<br />
2001:4860:c004::68 t1.gstatic.com<br />
<br />
2001:4860:c004::68 t2.gstatic.com<br />
<br />
2001:4860:c004::68 t3.gstatic.com<br />
<br />
2001:4860:c004::68 t4.gstatic.com<br />
<br />
2001:4860:c004::68 mt0.gstatic.com<br />
<br />
<br />
<br />
#GoogleUserContent 用户自定义的Google服务<br />
<br />
2001:4860:c004::68 clients1.googleusercontent.com&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;#<br />
<br />
2001:4860:c004::68 clients2.googleusercontent.com&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;#<br />
<br />
2001:4860:c004::68 lh0.googleusercontent.com&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;#<br />
<br />
2001:4860:c004::68 lh1.googleusercontent.com&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;#<br />
<br />
2001:4860:c004::68 lh2.googleusercontent.com&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;#<br />
<br />
2001:4860:c004::68 lh3.googleusercontent.com&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;#<br />
<br />
2001:4860:c004::68 s2.googleusercontent.com&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;#<br />
<br />
2001:4860:c004::68 spreadsheets-opensocial.googleusercontent.com&nbsp; &nbsp;&nbsp; &nbsp;#表格<br />
<br />
2001:4860:c004::68 www-gm-opensocial.googleusercontent.com&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;#Gmail？<br />
<br />
2001:4860:c004::68 wave.googleusercontent.com&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; #Wave<br />
<br />
2001:4860:c004::68 blogger.googleusercontent.com&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; #Blogger<br />
<br />
2001:4860:c004::68 translate.googleusercontent.com&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;#翻译<br />
<br />
<br />
<br />
#DoubleClick&nbsp; &nbsp;&nbsp; &nbsp; 曾经世界最大的网络广告服务商，06年底被Google并购，现AdSense服务指向域名<br />
<br />
2001:4860:c004::68 ad-g.doubleclick.net<br />
<br />
2001:4860:c004::68 ad-apac.doubleclick.net<br />
<br />
2001:4860:c004::68 googleads.g.doubleclick.net<br />
<br />
2001:4860:c004::68 feedads.g.doubleclick.net<br />
<br />
2001:4860:c004::68 fls.uk.doubleclick.net<br />
<br />
<br />
<br />
#GoogleSyndication Google广告服务 AdWord(Google广告词，对关键字进行右侧付费推广)，原AdSense服务指向域名<br />
<br />
2001:4860:c004::68 <a href="http://www.googlesyndication.com" target="_blank">www.googlesyndication.com</a><br />
<br />
2001:4860:c004::68 pagead2.googlesyndication.com<br />
<br />
2001:4860:c004::68 buttons.googlesyndication.com<br />
<br />
2001:4860:c004::68 domains.googlesyndication.com<br />
<br />
2001:4860:c004::68 tpc.googlesyndication.com<br />
<br />
<br />
<br />
#GoogleADServices&nbsp;&nbsp;Google广告服务 AdSense<br />
<br />
2001:4860:c004::68 <a href="http://www.googleadservices.com" target="_blank">www.googleadservices.com</a><br />
<br />
2001:4860:c004::68 pagead2.googleadservices.com<br />
<br />
2001:4860:c004::68 partner.googleadservices.com<br />
<br />
<br />
<br />
#Goo.gl&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;Google短网址服务<br />
<br />
2001:4860:c004::68 goo.gl<br />
<br />
<br />
<br />
<br />
<br />
###IPV6代理翻墙<br />
<br />
##来源;<a href="http://docs.google.com.sixxs.org/ViewDoc?docid=0AahDRK_oy3_TZGdqeHN4d3NfMTQ4ZnZwejZ3ZGc" target="_blank">http://docs.google.com.sixxs.org ... d3NfMTQ4ZnZwejZ3ZGc</a><br />
<br />
##<a href="http://aa.cx/ipv6-reverse-proxy" target="_blank">http://aa.cx/ipv6-reverse-proxy</a><br />
<br />
#Twitter&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; 推特<br />
<br />
2001:470:83f2::710:1 twitter.com<br />
<br />
2001:470:83f2::710:1 <a href="http://www.twitter.com" target="_blank">www.twitter.com</a><br />
<br />
2001:470:83f2::710:1 m.twitter.com&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;#Twitter Mobile<br />
<br />
2001:470:83f2::710:1 search.twitter.com&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;#Twitter Serach<br />
<br />
2001:470:83f2::710:1 integratedsearch.twitter.com&nbsp;&nbsp;#TimelineController?<br />
<br />
2001:470:83f2::710:1 api.twitter.com<br />
<br />
2001:470:83f2::710:1 s.twimg.com&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; #Twitter Serach<br />
<br />
2001:470:83f2::710:1 a0.twimg.com<br />
<br />
2001:470:83f2::710:1 a1.twimg.com<br />
<br />
2001:470:83f2::710:1 a2.twimg.com<br />
<br />
2001:470:83f2::710:1 a3.twimg.com<br />
<br />
2001:470:83f2::710:1 twitpic.com<br />
<br />
2001:470:83f2::710:1 twitgoo.com<br />
<br />
#meme&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; 雅虎meme<br />
<br />
2001:470:83f2::710:1 meme.yahoo.com<br />
<br />
<br />
#The Mail Archive<br />
<br />
2001:470:83f2::710:1 <a href="http://www.mail-archive.com" target="_blank">www.mail-archive.com</a><br />
<br />
2001:470:83f2::710:1 mail-archive.com<br />
<br />
<br />
<br />
#短网址<br />
<br />
2001:470:83f2::710:1 bit.ly<br />
<br />
2001:470:83f2::710:1 j.mp<br />
<br />
<br />
<br />
#Plurk&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;璞浪<br />
<br />
2001:470:83f2::710:1 <a href="http://www.plurk.com" target="_blank">www.plurk.com</a><br />
<br />
2001:470:83f2::710:1 m.plurk.com<br />
<br />
2001:470:83f2::710:1 plurk.com<br />
<br />
2001:470:83f2::710:1 static.plurk.com<br />
<br />
2001:470:83f2::710:1 statics.plurk.com<br />
<br />
2001:470:83f2::710:1 avatars.plurk.com<br />
<br />
2001:470:83f2::710:1 comet01.plurk.com<br />
<br />
<br />
<br />
#mitbbs<br />
<br />
2001:470:83f2::710:1 <a href="http://www.mitbbs.com" target="_blank">www.mitbbs.com</a><br />
<br />
2001:470:83f2::710:1 friends.mitbbs.com<br />
<br />
2001:470:83f2::710:1 radio.mitbbs.com<br />
<br />
<br />
<br />
#xys<br />
<br />
2001:470:83f2::710:1 <a href="http://www.xys.org" target="_blank">www.xys.org</a><br />
<br />
2001:470:83f2::710:1 xys.org<br />
<br />
<br />
<br />
#posterous<br />
<br />
2001:470:83f2::710:1 posterous.com <br />
<br />
2001:470:83f2::710:1 <a href="http://www.posterous.com" target="_blank">www.posterous.com</a> <br />
<br />
2001:470:83f2::710:1 files.posterous.com<br />
<br />
<br />
<br />
#Friendfeed<br />
<br />
2001:470:83f2::710:1 friendfeed.com<br />
<br />
2001:470:83f2::710:1 ff.im<br />
<br />
<br />
<br />
#Wikimedia&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;维基媒体<br />
<br />
2001:470:83f2::710:1 en.wikipedia.org&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; #维基百科（英文）<br />
<br />
2001:470:83f2::710:1 zh.wikipedia.org&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; #维基百科（中文）<br />
<br />
2001:470:83f2::710:1 zh.wikiquote.org&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; #维基语录（中文）<br />
<br />
2001:470:83f2::710:1 upload.wikimedia.org&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;#&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; <br />
<br />
<br />
<br />
#Opera社区<br />
<br />
2001:470:83f2::710:1 my.opera.com<br />
<br />
<br />
<br />
#中国GFW<br />
<br />
2001:470:83f2::710:1 <a href="http://www.chinagfw.org" target="_blank">www.chinagfw.org</a><br />
<br />
<br />
<br />
#08宪章<br />
<br />
2001:470:83f2::710:1 <a href="http://www.2008xianzhang.info" target="_blank">www.2008xianzhang.info</a>&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; #主页<br />
<br />
<br />
#Live空间<br />
<br />
2001:470:83f2::710:1 spaces.live.com&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;#Live空间<br />
<br />
#请根据你的域名自行添加解析。<br />
#例如你的域名为yourusername.spaces.live.com，你需要在hosts里添加一行：<br />
#2001:470:83f2::710:1 yourusername.spaces.live.com<br />
<br />
<br />
<br />
#BBC&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;BBC新闻网（英国）<br />
<br />
2001:470:83f2::710:1 <a href="http://www.bbc.co.uk" target="_blank">www.bbc.co.uk</a><br />
<br />
2001:470:83f2::710:1 news.bbc.co.uk<br />
<br />
2001:470:83f2::710:1 newsimg.bbc.co.uk<br />
<br />
2001:470:83f2::710:1 stats.bbc.co.uk<br />
<br />
2001:470:83f2::710:1 node1.bbcimg.co.uk<br />
<br />
<br />
<br />
#DWnews&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;多维新闻网<br />
<br />
2001:470:83f2::710:1 <a href="http://www.dwnews.com" target="_blank">www.dwnews.com</a>&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;#主页<br />
<br />
<br />
#Voice of America&nbsp; &nbsp; 美国之音<br />
2001:470:83f2::710:1 <a href="http://www.voanews.com" target="_blank">www.voanews.com</a>&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;#主页<br />
2001:470:83f2::710:1 www1.voanews.com&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; #主页<br />
2001:470:83f2::710:1 media.voanews.com<br />
<br />
<br />
#Radio Free Asia&nbsp; &nbsp;&nbsp;&nbsp;自由亚洲电台<br />
<br />
2001:470:83f2::710:1 <a href="http://www.rfa.org" target="_blank">www.rfa.org</a><br />
<br />
2001:470:83f2::710:1 rfa.org<br />
<br />
<br />
<br />
#Radio France Inter- 法国国际广播电台<br />
<br />
2001:470:83f2::710:1 rfi.fr <br />
<br />
2001:470:83f2::710:1 <a href="http://www.rfi.fr" target="_blank">www.rfi.fr</a><br />
<br />
<br />
<br />
#The Pirate Bay&nbsp; &nbsp;&nbsp; &nbsp;海盗湾<br />
<br />
2001:470:83f2::710:1 thepiratebay.org&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; #主页<br />
<br />
2001:470:83f2::710:1 static.thepiratebay.org&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;#数据库<br />
<br />
2001:470:83f2::710:1 captcha.thepiratebay.org&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;#验证码<br />
<br />
2001:470:83f2::710:1 torrents.thepiratebay.org&nbsp; &nbsp;&nbsp; &nbsp; #种子存放服务器<br />
<br />
<br />
<br />
<br />
<br />
###其他IPv6网站<br />
##ipv6校园网<br />
<br />
#北京科技大学<br />
<br />
2001:da8:208:10::14 ipv6.ustb.edu.cn&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;#北京科技大学IPv6实验站<br />
<br />
2001:da8:208:10::19 <a href="http://www.ustb.edu.cn" target="_blank">www.ustb.edu.cn</a>&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;#北京科技大学主页<br />
<br />
2001:da8:208:10::19 2009.ustb.edu.cn&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;#北京科技大学新版首页<br />
<br />
2001:da8:208:10::19 alumni.ustb.edu.cn&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;#北京科技大学校友网<br />
<br />
2001:da8:208:10::19 gonghui.ustb.edu.cn&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;#北京科技大学工会<br />
<br />
2001:da8:208:10::19 student.ustb.edu.cn&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;#北京科技大学学子在线<br />
<br />
2001:da8:208:10::19 graduate.ustb.edu.cn&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; #北京科技大学研究生院<br />
<br />
2001:da8:208:10::19 ltx.ustb.edu.cn&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;#北京科技大学离退休老干部处<br />
<br />
2001:da8:208:10::19 bbs.ustb.edu.cn&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;#幻想空间BBS<br />
<br />
2001:da8:208:100::121 <a href="http://www.52v6.com" target="_blank">www.52v6.com</a>&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; #52v6 我爱威六 USTB<br />
<br />
2001:da8:208:100::122 tracker.52v6.com&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;#52v6 PT flicker<br />
<br />
<br />
<br />
#上海交通大学ipv6试验站<br />
<br />
2001:da8:8000:1::80 ipv6.sjtu.edu.cn&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;#上海交通大学IPv6站<br />
<br />
2001:da8:8000:1::81 <a href="http://www.sjtu.edu.cn" target="_blank">www.sjtu.edu.cn</a>&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;#上海交通大学主页<br />
<br />
2001:da8:8000:1::82 alumni.sjtu.edu.cn&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;#上海交通大学校友网<br />
<br />
2001:da8:8000:1::83 shipmuseum.sjtu.edu.cn&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;#船舶数字博物馆<br />
<br />
2001:da8:8000:1::84 net.sjtu.edu.cn&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;#上海交通大学网络中心<br />
<br />
2001:da8:8000:1::85 icae.sjtu.edu.cn&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;#<br />
<br />
2001:da8:8000:1::86 foundation.sjtu.edu.cn&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;#上海交通大学教育发展基金会<br />
<br />
2001:da8:8000:1::87 wlan.sjtu.edu.cn&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;#上海交通大学网络中心无线网首页<br />
<br />
2001:da8:8000:1::88 ed.sjtu.edu.cn&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; #上海交通大学 高等教育研究院<br />
<br />
2001:da8:8000:1::89 smd.sjtu.edu.cn&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;#<br />
<br />
<br />
<br />
#浙江大学<br />
<br />
2001:da8:e000:88::11 <a href="http://www.zju.edu.cn" target="_blank">www.zju.edu.cn</a>&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;#浙江大学主页<br />
<br />
2001:da8:e000:89::99 media.zju.edu.cn&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; #浙江大学校网中心--多媒体中心<br />
<br />
2001:da8:e000:92::29 ipv6.zju.edu.cn&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;#浙江大学IPV6试验网<br />
<br />
<br />
<br />
#浙江工业大学<br />
<br />
2001:da8:e000:88::11 <a href="http://www.zjut.edu.cn" target="_blank">www.zjut.edu.cn</a>&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;#浙江工业大学首页<br />
<br />
<br />
<br />
#南京师范大学<br />
2001:da8:1003:1::10 <a href="http://www.njnu.edu.cn" target="_blank">www.njnu.edu.cn</a>&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;#南京师范大学主页<br />
2001:da8:1003:1:20b:dbff:fead:4c60 <a href="http://www.innu.cn" target="_blank">www.innu.cn</a>&nbsp; &nbsp;&nbsp; &nbsp; #南京师范大学网络协会<br />
2001:da8:1003:1:20b:dbff:fead:4c60 bbs.njnu.edu.cn&nbsp; &nbsp;#扬帆 - 南京师范大学|校园论坛<br />
2001:da8:1003:1:20b:dbff:fead:4c60 v6.innu.cn&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;#扬帆 - 南京师范大学|校园论坛<br />
2001:da8:1003:1:20b:dbff:fead:4c60 download.innu.cn&nbsp;&nbsp;#<br />
<br />
<br />
##其他<br />
#饭否<br />
2001:41d0:2:4139::1 fanfou.alwaysdata.net&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;#主页<br />
<br />
#射手网<br />
2001:da8:205::6 shooter.cn<br />
2001:da8:205::6 edu.shooter.cn<br />
2001:da8:205::6 edufile0.shooter.cn</div>

							
							
							
							
															<div id="post_rate_div_423944"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo423944_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=11060" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=34239&amp;repquote=423944&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 423944)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_0"></div>				</div>
			</td>
		</tr>
		</table>
		</div><div class="ad_column" id="ad_interthread"><a href="/viewthread.php?tid=54699" target="_blank" style="color:red;">1984bbs是一个非营利项目，它需要您的捐助！</font></a>		</div>
	<div class="mainbox viewthread">
			<table id="pid424090" summary="pid424090" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8520" target="_blank" id="userinfo424090" class="dropmenu" onmouseover="showMenu(this.id)">小猪熊</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8520">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8520&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_1" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum424090" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=34239&page=1#pid424090', '话题链接已经复制到剪贴板')">2楼</strong>
													<em onclick="$('postmessage_424090').className='t_bigfont'">大</em>							<em onclick="$('postmessage_424090').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_424090').className='t_smallfont'">小</em>												发表于 2010-1-10 23:26&nbsp;																					<a href="viewthread.php?tid=34239&amp;page=1&amp;authorid=8520" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_1"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_1"></div><div id="ad_thread4_1"></div>
						
						
																											<div id="postmessage_424090" class="t_msgfont">这种方式传输的信息会被GFW检测到么？</div>

							
							
							
							
															<div id="post_rate_div_424090"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo424090_menu" style="display: none;">
										<div class="imicons">
													<a target='_blank' href='http://settings.messenger.live.com/Conversation/IMMe.aspx?invitee=8964@fuck.com&mkt=zh-cn'><img style='border-style: none;' src='http://messenger.services.live.com/users/8964@fuck.com/presenceimage?mkt=zh-cn' width='16' height='16' /></a>
												<a href="http://wpa.qq.com/msgrd?V=1&amp;Uin=8964520&amp;Site=1984bbs.com&amp;Menu=yes" target="_blank"><img src="images/default/qq.gif" alt="QQ" /></a>																							</div>
										<dl></dl>
											<p><a href="http://www.gov.cn" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=8520" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=34239&amp;repquote=424090&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 424090)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_1"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid424125" summary="pid424125" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7713" target="_blank" id="userinfo424125" class="dropmenu" onmouseover="showMenu(this.id)">txj1984</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7713">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7713&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_2" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum424125" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=34239&page=1#pid424125', '话题链接已经复制到剪贴板')">3楼</strong>
													<em onclick="$('postmessage_424125').className='t_bigfont'">大</em>							<em onclick="$('postmessage_424125').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_424125').className='t_smallfont'">小</em>												发表于 2010-1-10 23:48&nbsp;																					<a href="viewthread.php?tid=34239&amp;page=1&amp;authorid=7713" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_2"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_2"></div><div id="ad_thread4_2"></div>
						
						
																											<div id="postmessage_424125" class="t_msgfont">只要GFW把ＩＰｖ６的地址封掉即可，但是不知道ＧＦＷ升级到针对ｖ６　没有</div>

							
							
							
							
															<div id="post_rate_div_424125"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo424125_menu" style="display: none;">
										<div class="imicons">
												<a href="http://wpa.qq.com/msgrd?V=1&amp;Uin=1283209811&amp;Site=1984bbs.com&amp;Menu=yes" target="_blank"><img src="images/default/qq.gif" alt="QQ" /></a>																							</div>
										<dl></dl>
											<p><a href="http://x-sword.org" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=7713" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=34239&amp;repquote=424125&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 424125)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_2"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid424165" summary="pid424165" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6920" target="_blank" id="userinfo424165" class="dropmenu" onmouseover="showMenu(this.id)">淮月</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">翻墙痴迷者 雄性文青  @qhgy</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6920">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6920&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_3" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum424165" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=34239&page=1#pid424165', '话题链接已经复制到剪贴板')">4楼</strong>
													<em onclick="$('postmessage_424165').className='t_bigfont'">大</em>							<em onclick="$('postmessage_424165').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_424165').className='t_smallfont'">小</em>												发表于 2010-1-11 00:24&nbsp;																					<a href="viewthread.php?tid=34239&amp;page=1&amp;authorid=6920" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_3"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_3"></div><div id="ad_thread4_3"></div>
						
						
																											<div id="postmessage_424165" class="t_msgfont">很好很强大</div>

							
							
							
							
															<div id="post_rate_div_424165"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo424165_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://twitter.com/qhgy" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=6920" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=34239&amp;repquote=424165&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 424165)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_3"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid431667" summary="pid431667" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=11745" target="_blank" id="userinfo431667" class="dropmenu" onmouseover="showMenu(this.id)">风中凌乱</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=11745">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=11745&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_4" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum431667" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=34239&page=1#pid431667', '话题链接已经复制到剪贴板')">5楼</strong>
													<em onclick="$('postmessage_431667').className='t_bigfont'">大</em>							<em onclick="$('postmessage_431667').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_431667').className='t_smallfont'">小</em>												发表于 2010-1-14 19:35&nbsp;																					<a href="viewthread.php?tid=34239&amp;page=1&amp;authorid=11745" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_4"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_4"></div><div id="ad_thread4_4"></div>
						
						
																											<div id="postmessage_431667" class="t_msgfont">恩，我们学校也支持ipv6 ，有空试试。</div>

							
							
							
							
															<div id="post_rate_div_431667"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo431667_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=11745" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=34239&amp;repquote=431667&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 431667)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_4"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid432128" summary="pid432128" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=5186" target="_blank" id="userinfo432128" class="dropmenu" onmouseover="showMenu(this.id)">胺氰聚三郎</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">怪组员</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=5186">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=5186&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_5" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum432128" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=34239&page=1#pid432128', '话题链接已经复制到剪贴板')">6楼</strong>
													<em onclick="$('postmessage_432128').className='t_bigfont'">大</em>							<em onclick="$('postmessage_432128').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_432128').className='t_smallfont'">小</em>												发表于 2010-1-15 01:00&nbsp;																					<a href="viewthread.php?tid=34239&amp;page=1&amp;authorid=5186" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_5"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_5"></div><div id="ad_thread4_5"></div>
						
						
																											<div id="postmessage_432128" class="t_msgfont">上twitter首页可以<br />
登录页面不能<br />
怎么回事<br />
求高人解答</div>

							
							
							
							
															<div id="post_rate_div_432128"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo432128_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=5186" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=34239&amp;repquote=432128&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 432128)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_5"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid432181" summary="pid432181" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=11752" target="_blank" id="userinfo432181" class="dropmenu" onmouseover="showMenu(this.id)">apollooqm</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=11752">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=11752&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_6" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum432181" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=34239&page=1#pid432181', '话题链接已经复制到剪贴板')">7楼</strong>
													<em onclick="$('postmessage_432181').className='t_bigfont'">大</em>							<em onclick="$('postmessage_432181').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_432181').className='t_smallfont'">小</em>												发表于 2010-1-15 03:34&nbsp;																					<a href="viewthread.php?tid=34239&amp;page=1&amp;authorid=11752" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_6"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_6"></div><div id="ad_thread4_6"></div>
						
						
																											<div id="postmessage_432181" class="t_msgfont">请详细说明并更新</div>

							
							
							
							
															<div id="post_rate_div_432181"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo432181_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=11752" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=34239&amp;repquote=432181&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 432181)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_6"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid433318" summary="pid433318" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 <a name="lastpost"></a>					<cite>											<a href="space.php?uid=4546" target="_blank" id="userinfo433318" class="dropmenu" onmouseover="showMenu(this.id)">五机</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">逆足精度7的play-maker@yebayiren</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=4546">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=4546&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_7" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum433318" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=34239&page=1#pid433318', '话题链接已经复制到剪贴板')">8楼</strong>
													<em onclick="$('postmessage_433318').className='t_bigfont'">大</em>							<em onclick="$('postmessage_433318').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_433318').className='t_smallfont'">小</em>												发表于 2010-1-15 19:29&nbsp;																					<a href="viewthread.php?tid=34239&amp;page=1&amp;authorid=4546" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_7"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_7"></div><div id="ad_thread4_7"></div>
													<h2>回复 6楼 胺氰聚三郎 的话题</h2>
						
						
																											<div id="postmessage_433318" class="t_msgfont">先去m.twitter.com登录，然后转到standard<br />
ipv6我们学校里有，看youtube，上twitter等都很方便</div>

							
							
							
							
															<div id="post_rate_div_433318"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo433318_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://yebayiren.blogspot.com" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=4546" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=34239&amp;repquote=433318&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 433318)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_7"></div>				</div>
			</td>
		</tr>
		</table>
		</div>
</form>





<div class="pages_btns">
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=34239&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=34239&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
				<span class="postbtn" id="newspecialtmp" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=34239&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

<!--精华贴打标记-->

	<script src="include/javascript/post.js" type="text/javascript"></script>
	<script type="text/javascript">
	var postminchars = parseInt('2');
	var postmaxchars = parseInt('1000000');
	var disablepostctrl = parseInt('0');
	var charset = 'gbk';
	function validate(theform) {
		if(theform.message.value == '' && theform.subject.value == '') {
			alert("请完成标题或内容栏。");
			theform.message.focus();
			return false;
		} else if(mb_strlen(theform.subject.value) > 80) {
			alert("您的标题超过 80 个字符的限制。");
			theform.subject.focus();
			return false;
		}
		if(!disablepostctrl && ((postminchars != 0 && mb_strlen(theform.message.value) < postminchars) || (postmaxchars != 0 && mb_strlen(theform.message.value) > postmaxchars))) {
			alert("您的话题长度不符合要求。\n\n当前长度: "+mb_strlen(theform.message.value)+" 字节\n系统限制: "+postminchars+" 到 "+postmaxchars+" 字节");
			return false;
		}
		if(!fetchCheckbox('parseurloff')) {
			theform.message.value = parseurl(theform.message.value, 'bbcode');
		}
		theform.replysubmit.disabled = true;
		return true;
	}
	</script>
<!--精华贴打标记-->

	<form method="post" id="postform" action="post.php?action=reply&amp;fid=26&amp;tid=34239&amp;extra=&amp;replysubmit=yes" onSubmit="return validate(this)">
		<input type="hidden" name="formhash" value="823c9fa2" />
		<div id="quickpost" class="box">
			
			<h4>快速回复主题</h4>
			<div class="postoptions">
&nbsp;
			</div>
			<div class="postform">
				<h5><label>标题
				<input type="text" name="subject" value="" tabindex="1"></label></h5>
				<p><label>内容</label>
				<textarea rows="7" cols="80" class="autosave" name="message" id="message" onKeyDown="ctlent(event);" tabindex="2"></textarea>
				</p>
				<p class="btns">
					<button type="submit" name="replysubmit" id="postsubmit" value="replysubmit" tabindex="3">发表话题</button>[完成后可按 Ctrl+Enter 发布]&nbsp;
					<a href="###" id="previewpost" onclick="$('postform').action=$('postform').action + '&previewpost=yes';$('postform').submit();">预览话题</a>&nbsp;
					<a href="###" id="restoredata" title="恢复上次自动保存的数据" onclick="loadData()">恢复数据</a>&nbsp;
					<a href="###" onclick="$('postform').reset()">清空内容</a>
				</p>
			</div>
						<script type="text/javascript">
				var textobj = $('message');
				window.onbeforeunload = function () {saveData(textobj.value)};
				if(is_ie >= 5 || is_moz >= 2) {
					lang['post_autosave_none'] = "没有可以恢复的数据！";
					lang['post_autosave_confirm'] = "此操作将覆盖当前话题内容，确定要恢复数据吗？";
				} else {
					$('restoredata').style.display = 'none';
				}
			</script>
		</div>
	</form>
	<div class="popupmenu_popup" id="forumlist_menu" style="display: none">
		<dl><dt><a href="index.php?gid=3">沙龙</a></dt><dd><ul><li><a href="forumdisplay.php?fid=2">自由新闻社</a></li><li><a href="forumdisplay.php?fid=37">雅典学院</a></li><li><a href="forumdisplay.php?fid=21">开放社会资料室</a></li><li class="current"><a href="forumdisplay.php?fid=26">国家局域网研究所</a></li><li><a href="forumdisplay.php?fid=35">罗马假日公寓</a></li><li><a href="forumdisplay.php?fid=40">Live!大讲堂</a></li></ul></dd></dl><dl><dt><a href="index.php?gid=11">站务</a></dt><dd><ul><li><a href="forumdisplay.php?fid=9">多功能小黑屋</a></li></ul></dd></dl>	</div>

<script type="text/javascript">
var maxpage = 1;
if(maxpage > 1) {
	document.onkeyup = function(e){
		e = e ? e : window.event;
		var tagname = is_ie ? e.srcElement.tagName : e.target.tagName;
		if(tagname == 'INPUT' || tagname == 'TEXTAREA') return;
		actualCode = e.keyCode ? e.keyCode : e.charCode;
					}
}
</script></div>	<div class="ad_footerbanner" id="ad_footerbanner1"></div>
	<div class="ad_footerbanner" id="ad_footerbanner2"><b> 顾问</b>：莫之许、北风、不锈钢老鼠、温克坚、艾未未、冉云飞、安替、崔卫平、闾丘露薇、章立凡 <b> 形象代言</b>：宋石男  <b>法律顾问</b>：浦志强  <b> <br>编辑</b>：张书记、上肛上腺、抑扬、musicool、王祖贤、alix001、核子力量、四夕亚日、炽鸢侯、木火 <br><b>技术</b>：库存袈裟、麦圆、散光     <br> </div>
	<div class="ad_footerbanner" id="ad_footerbanner3"></div>

<div id="footer">
	<div class="wrap">
		<div id="footlinks">

			<p>
				<a href="viewthread.php?tid=23826" target="_blank">浏览器支持说明</a>　|　<a href="member.php?action=clearcookies&amp;formhash=823c9fa2">清除 Cookies</a>
				
							</p>
		</div>
		<p id="copyright">
			CopyRight &#169; 1984bbs.com </p><p id="debuginfo">Processed in  second(s),  queries, Gzip enabled.</p>

	</div>
</div>
</body>
</html>
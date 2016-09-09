<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<title>Google 接近完整 Hosts 列表（转着玩） - 国家局域网研究所 -  1984bbs.com </title>
<meta name="keywords" content="" />
<meta name="MSSmartTagsPreventParsing" content="True" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<link rel="archives" title="1984bbs.com" href="https://1984bbs.com/archiver/" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_viewthread.css" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_common.css" />
<script type="text/javascript">
	var discuz_uid = 13019;var IMGDIR = 'images/default';var attackevasive = '0';var gid = 0;var STYLEID = '1';
	gid = parseInt('3');var fid = parseInt('26');var tid = parseInt('17095');
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
			<p><a href="index.php" id="forumlist" onmouseover="showMenu(this.id)" class="dropmenu">1984bbs.com</a> &raquo; <a href="forumdisplay.php?fid=26">国家局域网研究所</a> &raquo; Google 接近完整 Hosts 列表（转着玩）</p>
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
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=17095&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=17095&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
				<span class="postbtn" id="newspecial" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=17095&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

	<ul class="popupmenu_popup newspecialmenu" id="newspecial_menu" style="display: none">
		<li><a href="post.php?action=newthread&amp;fid=26&amp;extra=">发新话题</a></li>
		<li class="poll"><a href="post.php?action=newthread&amp;fid=26&amp;extra=&amp;special=1">发布投票</a></li>													</ul>

<form method="post" name="modactions">
	<input type="hidden" name="formhash" value="823c9fa2" />
	<div class="mainbox viewthread">
		<span class="headactions">
					<a href="my.php?item=favorites&amp;tid=17095" id="ajax_favorite" onclick="ajaxmenu(event, this.id, 3000, 0)">收藏</a>
			<a href="my.php?item=subscriptions&amp;subadd=17095" id="ajax_subscription" onclick="ajaxmenu(event, this.id, 3000, null, 0)">订阅</a>
			<a href="misc.php?action=emailfriend&amp;tid=17095" id="emailfriend" onclick="ajaxmenu(event, this.id, 9000000, null, 0)">推荐</a>
				<a href="viewthread.php?action=printable&amp;tid=17095" target="_blank" class="notabs">打印</a>
				</span>
		<h1>Google 接近完整 Hosts 列表（转着玩）		</h1>
							<table id="pid166964" summary="pid166964" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=5816" target="_blank" id="userinfo166964" class="dropmenu" onmouseover="showMenu(this.id)">okkokk007</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">“华风之弊，八字尽之：始于作伪，终于无耻。”——严复</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=5816">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=5816&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_0" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum166964" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=17095&page=1#pid166964', '话题链接已经复制到剪贴板')">1楼</strong>
													<em onclick="$('postmessage_166964').className='t_bigfont'">大</em>							<em onclick="$('postmessage_166964').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_166964').className='t_smallfont'">小</em>												发表于 2009-7-18 04:03&nbsp;																					<a href="viewthread.php?tid=17095&amp;page=1&amp;authorid=5816" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_0"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_0"></div><div id="ad_thread4_0"></div>
													<h2>Google 接近完整 Hosts 列表（转着玩）</h2>
						
						
																											<div id="postmessage_166964" class="t_msgfont">转自：<a href="http://hi.baidu.com/pkudoraemon/blog/item/6565bb22736e764792580712.html" target="_blank">http://hi.baidu.com/pkudoraemon/ ... 6e764792580712.html</a><br />
<br />
发信人: szwj (MI07 &amp; DMM | 不做大牛不喊弱), 信区: Google<br />
标&nbsp;&nbsp;题: Google 接近完整 Hosts 列表<br />
发信站: 北大未名站 (2009年06月25日08:51:44 星期四), 站内信件<br />
<br />
把下面的内容添加到C:\Windows\System32\drivers\etc\hosts文件中<br />
由于使用的IP未必为最优，所以速度可能变慢。<br />
有问题的清补充或更正。另外，Hints就是出不来，正在检查中。<br />
<br />
#Search<br />
74.125.39.99&nbsp; &nbsp; <a href="http://www.google.com" target="_blank">www.google.com</a><br />
74.125.39.103&nbsp; &nbsp;<a href="http://www.google.com" target="_blank">www.google.com</a><br />
74.125.39.104&nbsp; &nbsp;<a href="http://www.google.com" target="_blank">www.google.com</a><br />
74.125.39.105&nbsp; &nbsp;<a href="http://www.l.google.com" target="_blank">www.l.google.com</a><br />
<br />
#Images<br />
74.125.39.99&nbsp; &nbsp; images.google.com<br />
74.125.39.103&nbsp; &nbsp;images.google.com<br />
74.125.39.104&nbsp; &nbsp;images.google.com<br />
74.125.39.105&nbsp; &nbsp;images.google.com<br />
74.125.39.106&nbsp; &nbsp;images.google.com<br />
74.125.39.147&nbsp; &nbsp;images.google.com<br />
74.125.77.99&nbsp; &nbsp; tbn0.google.com<br />
74.125.77.99&nbsp; &nbsp; tbn1.google.com<br />
74.125.77.103&nbsp; &nbsp;tbn2.google.com<br />
74.125.77.104&nbsp; &nbsp;tbn3.google.com<br />
74.125.77.105&nbsp; &nbsp;tbn4.google.com<br />
74.125.77.106&nbsp; &nbsp;tbn5.google.com<br />
74.125.77.147&nbsp; &nbsp;tbn6.google.com<br />
<br />
#Shopping<br />
74.125.39.99&nbsp; &nbsp; base0.googlehosted.com<br />
74.125.39.103&nbsp; &nbsp;base1.googlehosted.com<br />
74.125.39.104&nbsp; &nbsp;base2.googlehosted.com<br />
74.125.39.105&nbsp; &nbsp;base3.googlehosted.com<br />
74.125.39.106&nbsp; &nbsp;base4.googlehosted.com<br />
74.125.39.147&nbsp; &nbsp;base5.googlehosted.com<br />
<br />
#Books<br />
74.125.39.100&nbsp; &nbsp;books.google.com<br />
74.125.39.101&nbsp; &nbsp;books.google.com<br />
74.125.39.102&nbsp; &nbsp;books.google.com<br />
74.125.39.113&nbsp; &nbsp;books.google.com<br />
74.125.39.138&nbsp; &nbsp;books.google.com<br />
74.125.39.139&nbsp; &nbsp;books.google.com<br />
74.125.39.100&nbsp; &nbsp;bks0.books.google.com<br />
74.125.39.100&nbsp; &nbsp;bks1.books.google.com<br />
74.125.39.101&nbsp; &nbsp;bks2.books.google.com<br />
74.125.39.102&nbsp; &nbsp;bks3.books.google.com<br />
74.125.39.113&nbsp; &nbsp;bks4.books.google.com<br />
74.125.39.138&nbsp; &nbsp;bks5.books.google.com<br />
74.125.39.139&nbsp; &nbsp;bks6.books.google.com<br />
74.125.39.113&nbsp; &nbsp;bks7.books.google.com<br />
74.125.39.138&nbsp; &nbsp;bks8.books.google.com<br />
74.125.39.139&nbsp; &nbsp;bks9.books.google.com<br />
<br />
#Video<br />
74.125.39.100&nbsp; &nbsp;video.google.com<br />
74.125.39.101&nbsp; &nbsp;video.google.com<br />
74.125.39.102&nbsp; &nbsp;video.google.com<br />
74.125.39.113&nbsp; &nbsp;video.google.com<br />
74.125.39.138&nbsp; &nbsp;video.google.com<br />
74.125.39.139&nbsp; &nbsp;video.google.com<br />
74.125.39.100&nbsp; &nbsp;0.gvt0.com<br />
74.125.39.101&nbsp; &nbsp;1.gvt0.com<br />
74.125.39.102&nbsp; &nbsp;2.gvt0.com<br />
74.125.39.113&nbsp; &nbsp;3.gvt0.com<br />
74.125.39.138&nbsp; &nbsp;4.gvt0.com<br />
74.125.39.139&nbsp; &nbsp;5.gvt0.com<br />
<br />
#Mail(POP3/SMTP)<br />
209.85.147.109&nbsp;&nbsp;pop.gmail.com<br />
209.85.147.109&nbsp;&nbsp;smtp.gmail.com<br />
<br />
#WebMail<br />
64.233.189.18&nbsp; &nbsp;mail.google.com<br />
64.233.189.19&nbsp; &nbsp;mail.google.com<br />
64.233.189.83&nbsp; &nbsp;mail.google.com<br />
64.233.189.18&nbsp; &nbsp;<a href="http://www.gmail.com" target="_blank">www.gmail.com</a><br />
64.233.189.19&nbsp; &nbsp;<a href="http://www.gmail.com" target="_blank">www.gmail.com</a><br />
64.233.189.83&nbsp; &nbsp;<a href="http://www.gmail.com" target="_blank">www.gmail.com</a><br />
64.233.189.19&nbsp; &nbsp;googlemail.l.google.com<br />
<br />
#Docs<br />
64.233.189.101&nbsp;&nbsp;writely-china.l.google.com<br />
64.233.189.101&nbsp;&nbsp;writely.l.google.com<br />
64.233.189.102&nbsp;&nbsp;docs.google.com<br />
64.233.189.101&nbsp;&nbsp;docs.google.com<br />
64.233.189.100&nbsp;&nbsp;docs.google.com<br />
<br />
#Map<br />
64.233.189.104&nbsp;&nbsp;map.google.com<br />
64.233.189.99&nbsp; &nbsp;map.google.com<br />
64.233.189.147&nbsp;&nbsp;map.google.com<br />
64.233.189.104&nbsp;&nbsp;maps.google.com<br />
64.233.189.99&nbsp; &nbsp;maps.google.com<br />
64.233.189.147&nbsp;&nbsp;maps.google.com<br />
64.233.189.99&nbsp; &nbsp;maps.gstatic.com<br />
203.208.39.93&nbsp; &nbsp;khm.google.com<br />
203.208.39.91&nbsp; &nbsp;mt0.google.com<br />
203.208.39.93&nbsp; &nbsp;mt1.google.com<br />
203.208.39.91&nbsp; &nbsp;mt2.google.com<br />
203.208.39.91&nbsp; &nbsp;mt.l.google.com<br />
64.233.189.99&nbsp; &nbsp;maps.l.google.com<br />
<br />
#Scholar<br />
64.233.189.99&nbsp; &nbsp;scholar.google.com<br />
64.233.189.104&nbsp;&nbsp;scholar.google.com<br />
64.233.189.147&nbsp;&nbsp;scholar.google.com<br />
64.233.189.104&nbsp;&nbsp;scholar.l.google.com<br />
<br />
#Group<br />
64.233.189.102&nbsp;&nbsp;groups.google.com<br />
64.233.189.100&nbsp;&nbsp;groups.google.com<br />
64.233.189.101&nbsp;&nbsp;groups.google.com<br />
64.233.189.101&nbsp;&nbsp;groups.l.google.com<br />
<br />
#Picasa<br />
74.125.39.147&nbsp; &nbsp;picasa.google.com<br />
74.125.39.91&nbsp; &nbsp; photos.google.com<br />
74.125.39.91&nbsp; &nbsp; picasaweb.google.com<br />
74.125.39.93&nbsp; &nbsp; picasaweb.google.com<br />
74.125.39.136&nbsp; &nbsp;picasaweb.google.com<br />
74.125.39.190&nbsp; &nbsp;picasaweb.google.com<br />
74.125.39.91&nbsp; &nbsp; lh0.ggpht.com<br />
74.125.39.93&nbsp; &nbsp; lh1.ggpht.com<br />
74.125.39.136&nbsp; &nbsp;lh2.ggpht.com<br />
74.125.39.190&nbsp; &nbsp;lh3.ggpht.com<br />
74.125.39.91&nbsp; &nbsp; lh4.ggpht.com<br />
74.125.39.93&nbsp; &nbsp; lh5.ggpht.com<br />
74.125.39.136&nbsp; &nbsp;lh6.ggpht.com<br />
74.125.39.190&nbsp; &nbsp;lh7.ggpht.com<br />
<br />
#Translate<br />
74.125.39.100&nbsp; &nbsp;translate.google.com<br />
74.125.39.101&nbsp; &nbsp;translate.google.com<br />
74.125.39.102&nbsp; &nbsp;translate.google.com<br />
74.125.39.113&nbsp; &nbsp;translate.google.com<br />
74.125.39.138&nbsp; &nbsp;translate.google.com<br />
74.125.39.139&nbsp; &nbsp;translate.google.com<br />
<br />
#Reader<br />
74.125.39.99&nbsp; &nbsp; reader.google.com<br />
74.125.39.103&nbsp; &nbsp;reader.google.com<br />
74.125.39.104&nbsp; &nbsp;reader.google.com<br />
74.125.39.105&nbsp; &nbsp;reader.google.com<br />
74.125.39.106&nbsp; &nbsp;reader.google.com<br />
<br />
#Sites<br />
64.233.161.9&nbsp; &nbsp; sites.google.com<br />
74.125.53.9&nbsp; &nbsp;&nbsp;&nbsp;sites.google.com<br />
74.125.39.102&nbsp; &nbsp;sites.google.com<br />
74.125.39.139&nbsp; &nbsp;sites.google.com<br />
74.125.45.9&nbsp; &nbsp;&nbsp;&nbsp;sites.google.com<br />
74.125.39.139&nbsp; &nbsp;sites.google.com<br />
<br />
#Code<br />
74.125.53.9&nbsp; &nbsp;&nbsp;&nbsp;code.google.com&nbsp;&nbsp;<br />
74.125.45.9&nbsp; &nbsp;&nbsp;&nbsp;code.google.com&nbsp;&nbsp;<br />
64.233.161.9&nbsp; &nbsp; code.google.com&nbsp;&nbsp;<br />
74.125.39.102&nbsp; &nbsp;code.google.com&nbsp;&nbsp;<br />
209.85.137.9&nbsp; &nbsp; code.google.com&nbsp;&nbsp;<br />
74.125.39.139&nbsp; &nbsp;code.l.google.com<br />
<br />
#Labs<br />
74.125.39.141&nbsp; &nbsp;<a href="http://www.googlelabs.com" target="_blank">www.googlelabs.com</a><br />
74.125.39.141&nbsp; &nbsp;appspot.l.google.com<br />
74.125.39.100&nbsp; &nbsp;labs.google.com<br />
74.125.39.101&nbsp; &nbsp;labs.google.com<br />
74.125.39.102&nbsp; &nbsp;labs.google.com<br />
74.125.39.113&nbsp; &nbsp;labs.google.com<br />
74.125.39.138&nbsp; &nbsp;labs.google.com<br />
74.125.39.139&nbsp; &nbsp;labs.google.com<br />
<br />
#Knol<br />
74.125.39.100&nbsp; &nbsp;knol.google.com<br />
74.125.39.101&nbsp; &nbsp;knol.google.com<br />
74.125.39.102&nbsp; &nbsp;knol.google.com<br />
74.125.39.113&nbsp; &nbsp;knol.google.com<br />
74.125.39.138&nbsp; &nbsp;knol.google.com<br />
74.125.39.139&nbsp; &nbsp;knol.google.com<br />
<br />
#Sketchup<br />
74.125.39.99&nbsp; &nbsp; sketchup.google.com<br />
74.125.39.103&nbsp; &nbsp;sketchup.google.com<br />
74.125.39.104&nbsp; &nbsp;sketchup.google.com<br />
74.125.39.105&nbsp; &nbsp;sketchup.google.com<br />
74.125.39.106&nbsp; &nbsp;sketchup.google.com<br />
<br />
#Pack<br />
74.125.39.99&nbsp; &nbsp; pack.google.com<br />
74.125.39.103&nbsp; &nbsp;pack.google.com<br />
74.125.39.104&nbsp; &nbsp;pack.google.com<br />
74.125.39.105&nbsp; &nbsp;pack.google.com<br />
74.125.39.106&nbsp; &nbsp;pack.google.com<br />
<br />
#News<br />
74.125.39.99&nbsp; &nbsp; news.google.com<br />
74.125.39.103&nbsp; &nbsp;news.google.com<br />
74.125.39.104&nbsp; &nbsp;news.google.com<br />
74.125.39.105&nbsp; &nbsp;news.google.com<br />
74.125.39.106&nbsp; &nbsp;news.google.com<br />
74.125.39.147&nbsp; &nbsp;news.google.com<br />
74.125.39.99&nbsp; &nbsp; nt0.ggpht.com<br />
74.125.39.103&nbsp; &nbsp;nt1.ggpht.com<br />
74.125.39.104&nbsp; &nbsp;nt2.ggpht.com<br />
74.125.39.105&nbsp; &nbsp;nt3.ggpht.com<br />
74.125.39.106&nbsp; &nbsp;nt4.ggpht.com<br />
74.125.39.147&nbsp; &nbsp;nt5.ggpht.com<br />
<br />
#Calendar<br />
74.125.39.100&nbsp; &nbsp;calendar.google.com<br />
74.125.39.101&nbsp; &nbsp;calendar.google.com<br />
74.125.39.102&nbsp; &nbsp;calendar.google.com<br />
74.125.39.113&nbsp; &nbsp;calendar.google.com<br />
74.125.39.138&nbsp; &nbsp;calendar.google.com<br />
74.125.39.139&nbsp; &nbsp;calendar.google.com<br />
<br />
#Blogger<br />
74.125.39.191&nbsp; &nbsp;<a href="http://www.blogger.com" target="_blank">www.blogger.com</a><br />
74.125.39.191&nbsp; &nbsp;blogger.l.google.com<br />
74.125.39.191&nbsp; &nbsp;blogger.google.com<br />
<br />
#Orkut<br />
74.125.47.85&nbsp; &nbsp; <a href="http://www.orkut.com" target="_blank">www.orkut.com</a><br />
74.125.47.86&nbsp; &nbsp; <a href="http://www.orkut.com" target="_blank">www.orkut.com</a><br />
74.125.47.85&nbsp; &nbsp; orkut.google.com<br />
74.125.47.86&nbsp; &nbsp; orkut.l.google.com<br />
<br />
#Youtube<br />
74.125.39.100&nbsp; &nbsp;<a href="http://www.youtube.com" target="_blank">www.youtube.com</a><br />
74.125.39.101&nbsp; &nbsp;<a href="http://www.youtube.com" target="_blank">www.youtube.com</a><br />
74.125.39.102&nbsp; &nbsp;<a href="http://www.youtube.com" target="_blank">www.youtube.com</a><br />
74.125.39.113&nbsp; &nbsp;<a href="http://www.youtube.com" target="_blank">www.youtube.com</a><br />
<br />
#Toolbar<br />
74.125.39.100&nbsp; &nbsp;toolbar.google.com<br />
74.125.39.101&nbsp; &nbsp;toolbar.google.com<br />
74.125.39.102&nbsp; &nbsp;toolbar.google.com<br />
74.125.39.113&nbsp; &nbsp;toolbar.google.com<br />
<br />
#Apps<br />
74.125.39.99&nbsp; &nbsp; apps.google.com<br />
74.125.39.103&nbsp; &nbsp;apps.google.com<br />
74.125.39.104&nbsp; &nbsp;apps.google.com<br />
74.125.39.115&nbsp; &nbsp;apps.google.com<br />
<br />
#Chrome<br />
74.125.39.99&nbsp; &nbsp; chrome.google.com<br />
74.125.39.103&nbsp; &nbsp;chrome.google.com<br />
74.125.39.104&nbsp; &nbsp;chrome.google.com<br />
74.125.39.115&nbsp; &nbsp;chrome.google.com<br />
<br />
#Finance<br />
74.125.39.99&nbsp; &nbsp; finance.google.com<br />
74.125.39.103&nbsp; &nbsp;finance.google.com<br />
74.125.39.104&nbsp; &nbsp;finance.google.com<br />
74.125.39.115&nbsp; &nbsp;finance.google.com<br />
<br />
#Desktop<br />
74.125.39.99&nbsp; &nbsp; desktop.google.com<br />
74.125.39.103&nbsp; &nbsp;desktop.google.com<br />
74.125.39.104&nbsp; &nbsp;desktop.google.com<br />
74.125.39.115&nbsp; &nbsp;desktop.google.com<br />
<br />
#Ajax<br />
74.125.53.9&nbsp; &nbsp;&nbsp;&nbsp;ajax.googleapis.com<br />
74.125.45.9&nbsp; &nbsp;&nbsp;&nbsp;ajax.googleapis.com<br />
64.233.161.9&nbsp; &nbsp; ajax.googleapis.com<br />
209.85.137.9&nbsp; &nbsp; ajax.googleapis.com<br />
72.14.203.9&nbsp; &nbsp;&nbsp;&nbsp;googleapis-ajax.l.google.com<br />
<br />
#Modules<br />
74.125.39.132&nbsp; &nbsp;1.ig.gmodules.com<br />
74.125.39.132&nbsp; &nbsp;2.ig.gmodules.com<br />
74.125.39.132&nbsp; &nbsp;3.ig.gmodules.com<br />
74.125.39.132&nbsp; &nbsp;4.ig.gmodules.com<br />
74.125.39.132&nbsp; &nbsp;5.ig.gmodules.com<br />
74.125.39.132&nbsp; &nbsp;6.ig.gmodules.com<br />
<br />
#Misc<br />
64.233.189.101&nbsp;&nbsp;id.google.com<br />
64.233.189.102&nbsp;&nbsp;id.google.com<br />
64.233.189.100&nbsp;&nbsp;id.google.com<br />
64.233.189.100&nbsp;&nbsp;id.l.google.com<br />
74.125.39.132&nbsp; &nbsp;skins.gmodules.com<br />
74.125.39.132&nbsp; &nbsp;googlehosted.l.google.com<br />
74.125.39.132&nbsp; &nbsp;img0.gmodules.com<br />
74.125.39.99&nbsp; &nbsp; blogsearch.google.com<br />
74.125.39.99&nbsp; &nbsp; www2.l.google.com<br />
74.125.39.99&nbsp; &nbsp; <a href="http://www.gstatic.com" target="_blank">www.gstatic.com</a><br />
74.125.39.100&nbsp; &nbsp;www3.l.google.com<br />
74.125.39.99&nbsp; &nbsp; buttons.googlesyndication.com</div>

							
							
							
							
															<div id="post_rate_div_166964"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo166964_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=5816" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=17095&amp;repquote=166964&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 166964)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_0"></div>				</div>
			</td>
		</tr>
		</table>
		</div><div class="ad_column" id="ad_interthread"><a href="/viewthread.php?tid=54699" target="_blank" style="color:red;">1984bbs是一个非营利项目，它需要您的捐助！</font></a>		</div>
	<div class="mainbox viewthread">
			<table id="pid167013" summary="pid167013" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7795" target="_blank" id="userinfo167013" class="dropmenu" onmouseover="showMenu(this.id)">匪名啦</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">我是匪名，不是匿名</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7795">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7795&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_1" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum167013" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=17095&page=1#pid167013', '话题链接已经复制到剪贴板')">2楼</strong>
													<em onclick="$('postmessage_167013').className='t_bigfont'">大</em>							<em onclick="$('postmessage_167013').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_167013').className='t_smallfont'">小</em>												发表于 2009-7-18 08:42&nbsp;																					<a href="viewthread.php?tid=17095&amp;page=1&amp;authorid=7795" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_1"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_1"></div><div id="ad_thread4_1"></div>
						
						
																											<div id="postmessage_167013" class="t_msgfont">在中国，想不当个电脑高手都不行啊。。</div>

							
							
							
							
															<div id="post_rate_div_167013"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo167013_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=7795" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=17095&amp;repquote=167013&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 167013)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_1"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid167222" summary="pid167222" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=4662" target="_blank" id="userinfo167222" class="dropmenu" onmouseover="showMenu(this.id)">askboy</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=4662">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=4662&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_2" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum167222" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=17095&page=1#pid167222', '话题链接已经复制到剪贴板')">3楼</strong>
													<em onclick="$('postmessage_167222').className='t_bigfont'">大</em>							<em onclick="$('postmessage_167222').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_167222').className='t_smallfont'">小</em>												发表于 2009-7-18 12:06&nbsp;																					<a href="viewthread.php?tid=17095&amp;page=1&amp;authorid=4662" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_2"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_2"></div><div id="ad_thread4_2"></div>
						
						
																											<div id="postmessage_167222" class="t_msgfont">疲劳战啊</div>

							
							
							
							
															<div id="post_rate_div_167222"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo167222_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=4662" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=17095&amp;repquote=167222&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 167222)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_2"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid167529" summary="pid167529" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1405" target="_blank" id="userinfo167529" class="dropmenu" onmouseover="showMenu(this.id)">est</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">从NZ到doubans到1984</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1405">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1405&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_3" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum167529" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=17095&page=1#pid167529', '话题链接已经复制到剪贴板')">4楼</strong>
													<em onclick="$('postmessage_167529').className='t_bigfont'">大</em>							<em onclick="$('postmessage_167529').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_167529').className='t_smallfont'">小</em>												发表于 2009-7-18 16:42&nbsp;																					<a href="viewthread.php?tid=17095&amp;page=1&amp;authorid=1405" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_3"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_3"></div><div id="ad_thread4_3"></div>
						
						
																											<div id="postmessage_167529" class="t_msgfont">没法看youtube哈哈</div>

							
							
							
							
															<div id="post_rate_div_167529"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo167529_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1405" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=17095&amp;repquote=167529&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 167529)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_3"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid171605" summary="pid171605" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=3095" target="_blank" id="userinfo171605" class="dropmenu" onmouseover="showMenu(this.id)">iridiumcao</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=3095">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=3095&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_4" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum171605" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=17095&page=1#pid171605', '话题链接已经复制到剪贴板')">5楼</strong>
													<em onclick="$('postmessage_171605').className='t_bigfont'">大</em>							<em onclick="$('postmessage_171605').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_171605').className='t_smallfont'">小</em>												发表于 2009-7-21 17:21&nbsp;																					<a href="viewthread.php?tid=17095&amp;page=1&amp;authorid=3095" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_4"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_4"></div><div id="ad_thread4_4"></div>
						
						
																											<div id="postmessage_171605" class="t_msgfont">O(∩_∩)O谢谢</div>

							
							
							
							
															<div id="post_rate_div_171605"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo171605_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=3095" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=17095&amp;repquote=171605&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 171605)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_4"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid172510" summary="pid172510" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7766" target="_blank" id="userinfo172510" class="dropmenu" onmouseover="showMenu(this.id)">麦圆</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">Twitter @math2gold | 惊诧的火星友邦 |  咪咪是 /math2ogld　</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7766">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7766&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_5" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum172510" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=17095&page=1#pid172510', '话题链接已经复制到剪贴板')">6楼</strong>
													<em onclick="$('postmessage_172510').className='t_bigfont'">大</em>							<em onclick="$('postmessage_172510').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_172510').className='t_smallfont'">小</em>												发表于 2009-7-22 01:08&nbsp;																					<a href="viewthread.php?tid=17095&amp;page=1&amp;authorid=7766" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_5"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_5"></div><div id="ad_thread4_5"></div>
						
						
																											<div id="postmessage_172510" class="t_msgfont">果然很全……</div>

							
							
							
							
															<div id="post_rate_div_172510"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo172510_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://math2gold.com/" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=7766" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=17095&amp;repquote=172510&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 172510)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_5"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid177876" summary="pid177876" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7518" target="_blank" id="userinfo177876" class="dropmenu" onmouseover="showMenu(this.id)">跟丫死磕</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7518">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7518&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_6" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum177876" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=17095&page=1#pid177876', '话题链接已经复制到剪贴板')">7楼</strong>
													<em onclick="$('postmessage_177876').className='t_bigfont'">大</em>							<em onclick="$('postmessage_177876').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_177876').className='t_smallfont'">小</em>												发表于 2009-7-25 16:09&nbsp;																					<a href="viewthread.php?tid=17095&amp;page=1&amp;authorid=7518" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_6"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_6"></div><div id="ad_thread4_6"></div>
						
						
																											<div id="postmessage_177876" class="t_msgfont">靠，俺几乎都不起效果，还是老老实实翻墙好了。</div>

							
							
							
							
															<div id="post_rate_div_177876"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo177876_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=7518" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=17095&amp;repquote=177876&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 177876)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_6"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid183255" summary="pid183255" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 <a name="lastpost"></a>					<cite>											<a href="space.php?uid=679" target="_blank" id="userinfo183255" class="dropmenu" onmouseover="showMenu(this.id)">8ger</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">我还是低调点比较好</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=679">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=679&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_7" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum183255" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=17095&page=1#pid183255', '话题链接已经复制到剪贴板')">8楼</strong>
													<em onclick="$('postmessage_183255').className='t_bigfont'">大</em>							<em onclick="$('postmessage_183255').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_183255').className='t_smallfont'">小</em>												发表于 2009-7-29 20:07&nbsp;																					<a href="viewthread.php?tid=17095&amp;page=1&amp;authorid=679" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_7"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_7"></div><div id="ad_thread4_7"></div>
						
						
																											<div id="postmessage_183255" class="t_msgfont">----------------------------------------------------------------------<br />
作者: skyfeather0 時間: 2009-4-10 17:01<br />
<br />
我想到一個新方法，就是修改host文件，應該可以解決到YouTube但看不到片的問題，但對於在內地的話IP被封依然不能使用。另外某程度能提升瀏覽速度，因為電腦會先訪問host文件如果沒再查詢DNS。<br />
在管理員權限下，用筆記本打開windows\system32\drivers\etc\hosts(window版)或在終端機輸入sudo gedit /etc/hosts(linux版)，然後在127.0.0.1 localhost後加下列的文字再儲存即可。<br />
208.65.153.238 <a href="http://www.youtube.com" target="_blank">http://www.youtube.com</a><br />
208.117.236.70 <a href="http://www.youtube.com" target="_blank">http://www.youtube.com</a><br />
208.117.236.71 <a href="http://www.youtube.com" target="_blank">http://www.youtube.com</a><br />
208.117.236.75 <a href="http://www.youtube.com" target="_blank">http://www.youtube.com</a><br />
208.117.236.76 <a href="http://www.youtube.com" target="_blank">http://www.youtube.com</a><br />
72.14.203.118 i1.ytimg.com<br />
72.14.203.118 i2.ytimg.com<br />
72.14.203.118 i3.ytimg.com<br />
72.14.203.118 i4.ytimg.com<br />
74.125.11.102 s.ytimg.com<br />
74.125.11.16 v1.lscache4.googlevideo.com<br />
74.125.11.19 v2.lscache4.googlevideo.com<br />
74.125.11.22 v3.lscache4.googlevideo.com<br />
74.125.11.25 v4.lscache4.googlevideo.com<br />
74.125.11.28 v5.lscache4.googlevideo.com<br />
74.125.11.31 v6.lscache4.googlevideo.com<br />
74.125.11.34 v7.lscache4.googlevideo.com<br />
74.125.11.37 v8.lscache4.googlevideo.com<br />
74.125.11.16 v9.lscache4.googlevideo.com<br />
74.125.11.20 v10.lscache4.googlevideo.com<br />
74.125.11.23 v11.lscache4.googlevideo.com<br />
74.125.11.26 v12.lscache4.googlevideo.com<br />
74.125.11.29 v13.lscache4.googlevideo.com<br />
74.125.11.32 v14.lscache4.googlevideo.com<br />
74.125.11.35 v15.lscache4.googlevideo.com<br />
74.125.11.38 v16.lscache4.googlevideo.com<br />
74.125.11.18 v17.lscache4.googlevideo.com<br />
74.125.11.21 v18.lscache4.googlevideo.com<br />
74.125.11.24 v19.lscache4.googlevideo.com<br />
74.125.11.27 v20.lscache4.googlevideo.com<br />
74.125.11.30 v21.lscache4.googlevideo.com<br />
74.125.11.33 v22.lscache4.googlevideo.com<br />
74.125.11.36 v23.lscache4.googlevideo.com<br />
74.125.11.39 v24.lscache4.googlevideo.com<br />
74.125.11.80 v1.lscache8.googlevideo.com<br />
74.125.11.83 v2.lscache8.googlevideo.com<br />
74.125.11.86 v3.lscache8.googlevideo.com<br />
74.125.11.89 v4.lscache8.googlevideo.com<br />
74.125.11.92 v5.lscache8.googlevideo.com<br />
74.125.11.95 v6.lscache8.googlevideo.com<br />
74.125.11.98 v7.lscache8.googlevideo.com<br />
74.125.11.101 v8.lscache8.googlevideo.com<br />
74.125.11.81 v9.lscache8.googlevideo.com<br />
74.125.11.84 v10.lscache8.googlevideo.com<br />
74.125.11.87 v11.lscache8.googlevideo.com<br />
74.125.11.90 v12.lscache8.googlevideo.com<br />
74.125.11.93 v13.lscache8.googlevideo.com<br />
74.125.11.96 v14.lscache8.googlevideo.com<br />
74.125.11.99 v15.lscache8.googlevideo.com<br />
74.125.11.102 v16.lscache8.googlevideo.com<br />
74.125.11.82 v17.lscache8.googlevideo.com<br />
74.125.11.85 v18.lscache8.googlevideo.com<br />
74.125.11.88 v19.lscache8.googlevideo.com<br />
74.125.11.91 v20.lscache8.googlevideo.com<br />
74.125.11.94 v21.lscache8.googlevideo.com<br />
74.125.11.97 v22.lscache8.googlevideo.com<br />
74.125.11.100 v23.lscache8.googlevideo.com<br />
74.125.11.103 v24.lscache8.googlevideo.com<br />
74.125.209.112 v1.cache4.googlevideo.com<br />
74.125.209.113 v2.cache4.googlevideo.com<br />
74.125.209.114 v3.cache4.googlevideo.com<br />
74.125.209.115 v4.cache4.googlevideo.com<br />
74.125.209.116 v5.cache4.googlevideo.com<br />
74.125.209.117 v6.cache4.googlevideo.com<br />
74.125.209.118 v7.cache4.googlevideo.com<br />
74.125.209.119 v8.cache4.googlevideo.com<br />
74.125.209.240 v1.cache8.googlevideo.com<br />
74.125.209.241 v2.cache8.googlevideo.com<br />
74.125.209.242 v3.cache8.googlevideo.com<br />
74.125.209.243 v4.cache8.googlevideo.com<br />
74.125.209.244 v5.cache8.googlevideo.com<br />
74.125.209.245 v6.cache8.googlevideo.com<br />
74.125.209.246 v7.cache8.googlevideo.com<br />
74.125.209.247 v8.cache8.googlevideo.com<br />
<br />
還有更多，都是v*(1~8).cache*(1~8).googlevideo.com和v*(1~24).lscache*(1~8).googlevideo.com等等。不過只是影片資料庫而且，如果要的話自己ping，我看它讀取一般都是這些。<br />
<br />
[ 本帖最後由 skyfeather0 於 2009-4-11 21:41 編輯 ]<br />
---------------------------------------------------------------------------<br />
<br />
来源：<a href="http://203.208.37.132/search?q=cache:kttpQIlGCDwJ:forum.cyberctm.com/forum/viewthread.php%3Faction%3Dprintable%26tid%3D317572+http://forum.cyberctm.com/forum/viewthread.php%3Faction%3Dprintable%26tid%3D317572&amp;cd=1&amp;hl=zh-CN&amp;ct=clnk&amp;gl=cn&amp;inlang=zh-CN&amp;st_usg=ALhdy29AShgFtAOyseYX__fdRt8wuoE6Pg" target="_blank">http://203.208.37.132/search?q=c ... yseYX__fdRt8wuoE6Pg</a></div>

							
							
							
							
															<div id="post_rate_div_183255"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo183255_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=679" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=17095&amp;repquote=183255&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 183255)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_7"></div>				</div>
			</td>
		</tr>
		</table>
		</div>
</form>





<div class="pages_btns">
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=17095&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=17095&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
				<span class="postbtn" id="newspecialtmp" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=17095&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

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

	<form method="post" id="postform" action="post.php?action=reply&amp;fid=26&amp;tid=17095&amp;extra=&amp;replysubmit=yes" onSubmit="return validate(this)">
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
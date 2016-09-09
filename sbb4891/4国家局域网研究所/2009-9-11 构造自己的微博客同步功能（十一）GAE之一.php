<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<title>构造自己的微博客同步功能（十一）GAE之一 - 国家局域网研究所 -  1984bbs.com </title>
<meta name="keywords" content="" />
<meta name="MSSmartTagsPreventParsing" content="True" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<link rel="archives" title="1984bbs.com" href="https://1984bbs.com/archiver/" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_viewthread.css" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_common.css" />
<script type="text/javascript">
	var discuz_uid = 13019;var IMGDIR = 'images/default';var attackevasive = '0';var gid = 0;var STYLEID = '1';
	gid = parseInt('3');var fid = parseInt('26');var tid = parseInt('21989');
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
			<p><a href="index.php" id="forumlist" onmouseover="showMenu(this.id)" class="dropmenu">1984bbs.com</a> &raquo; <a href="forumdisplay.php?fid=26">国家局域网研究所</a> &raquo; 构造自己的微博客同步功能（十一）GAE之一</p>
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
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=21989&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=21989&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
				<span class="postbtn" id="newspecial" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=21989&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

	<ul class="popupmenu_popup newspecialmenu" id="newspecial_menu" style="display: none">
		<li><a href="post.php?action=newthread&amp;fid=26&amp;extra=">发新话题</a></li>
		<li class="poll"><a href="post.php?action=newthread&amp;fid=26&amp;extra=&amp;special=1">发布投票</a></li>													</ul>

<form method="post" name="modactions">
	<input type="hidden" name="formhash" value="823c9fa2" />
	<div class="mainbox viewthread">
		<span class="headactions">
					<a href="my.php?item=favorites&amp;tid=21989" id="ajax_favorite" onclick="ajaxmenu(event, this.id, 3000, 0)">收藏</a>
			<a href="my.php?item=subscriptions&amp;subadd=21989" id="ajax_subscription" onclick="ajaxmenu(event, this.id, 3000, null, 0)">订阅</a>
			<a href="misc.php?action=emailfriend&amp;tid=21989" id="emailfriend" onclick="ajaxmenu(event, this.id, 9000000, null, 0)">推荐</a>
				<a href="viewthread.php?action=printable&amp;tid=21989" target="_blank" class="notabs">打印</a>
				</span>
		<h1>构造自己的微博客同步功能（十一）GAE之一		</h1>
				<ins>
						<a href="misc.php?action=viewthreadmod&amp;tid=21989" title="主题操作记录" target="_blank">本主题由 张书记 于 2009-10-13 10:14 解除置顶</a>								</ins>
							<table id="pid236870" summary="pid236870" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7766" target="_blank" id="userinfo236870" class="dropmenu" onmouseover="showMenu(this.id)">麦圆</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">Twitter @math2gold | 惊诧的火星友邦 |  咪咪是 /math2ogld　</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7766">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7766&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_0" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum236870" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=21989&page=1#pid236870', '话题链接已经复制到剪贴板')">1楼</strong>
													<em onclick="$('postmessage_236870').className='t_bigfont'">大</em>							<em onclick="$('postmessage_236870').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_236870').className='t_smallfont'">小</em>												发表于 2009-9-11 20:07&nbsp;																					<a href="viewthread.php?tid=21989&amp;page=1&amp;authorid=7766" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_0"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_0"></div><div id="ad_thread4_0"></div>
													<h2>构造自己的微博客同步功能（十一）GAE之一</h2>
						
						
																											<div id="postmessage_236870" class="t_msgfont">目前使用Tor来进入资本主义网站打探敌情十分困难，因为速度变慢了，有时候会出现节点连接突然中断的情况。加之此前众多Twitter用户被以奇怪活動 (strange activity)的理由被冻结帐户（account has been suspended），所以如果每次获取消息都得使用Tor，那其实也不是十分方便。<br />
<br />
在这种情况下，与其主动爬到资本主义阵营盗取他们的机密，倒不如让资本主义系统把机密发给我們。具体办法很简单，就是在资本主义主机上建立消息收发同步中转点，把消息以邮件或者IM的形式传送给自己。这样就跟玩饭否没有什么区别了。<br />
<br />
一般来说，主机有多种，有收费的，有免费的，有windows的也有*nix的。鉴于GAE是Google公司提供的主机服务，无论是信誉還是服务上都非常好。所以也在它上面建立了这样的Twitter收发同步机器人。于是现在就跟大家分享。<br />
<br />
其实不用自己开发程序也有诸如ping.fm的现成的站点。但是自己使用着开源的代码并且在Google上的服务器作收发，除了对密码的保护有安全感外。它還有其他好处：<br />
<br />
&nbsp; &nbsp;1. 信息备份到GAE上，可以随时把数据库下載到自己的机器上<br />
&nbsp; &nbsp;2. 没有因倒闭而终止服务的风险。<br />
&nbsp; &nbsp;3. 程序可以自行修改，只要稍微懂得点编程技术的人，都可以自己改进程序<br />
&nbsp; &nbsp;4. Google的网络良好，即便某些地方无法访问GAE的appspot.com，但是亦不妨碍Google GAE上的蜘蛛爬到需要的站点上获取资料 <br />
<br />
基于这些好处，我就便匆匆搞了这小程序来实现微博客同步转发机器人。 这程序里面的代码有点乱，不過因为代码不长，而且所有的配置参数已经設之在一个py文件和两个yaml文件里面了，因此，只要跟着如下步骤操作，任何人都可以实现自己的Twitter同步服务。<br />
<br />
本编介绍的是如何实现收件接收Twitter消息以及Gtalk收费Twitter消息。下编介绍如何通过GAE+Blogger使用邮件发送Twitter。<br />
<br />
具体按照如下步骤做即：<br />
A、申请GAE服务<br />
<br />
还没申请GAE的话，则需要先申请。 GAE服务直接到这里申请就可以了 <a href="http://appengine.google.com/" target="_blank">http://appengine.google.com/</a> 内有详细中文说明，这部分不作介绍。<br />
B、获取GAE开发包<br />
<br />
到这里下載GAE开发包 <a href="http://code.google.com/appengine/downloads.html" target="_blank">http://code.google.com/appengine/downloads.html</a><br />
<br />
如果以前曾经下載并已经安装了GAE开发包的，请确认版本必须在1.2.5或者以上的For Python版本(目前最新的是1.2.5)，因为从1.2.5才開始支持Gtalk接收。1.2.5是这个月才開始提供下載的，如果你是很早已经下的，那么必须重新下載更新。<br />
<br />
Windows官方提供几个平台的1.2.5版本下載。地址如下：<br />
<br />
Linux: <a href="http://googleappengine.googlecode.com/files/google_appengine_1.2.5.zip" target="_blank">http://googleappengine.googlecod ... appengine_1.2.5.zip</a><br />
<br />
Windows: <a href="http://googleappengine.googlecode.com/files/GoogleAppEngine_1.2.5.msi" target="_blank">http://googleappengine.googlecod ... AppEngine_1.2.5.msi</a><br />
<br />
MAC: <a href="http://googleappengine.googlecode.com/files/GoogleAppEngineLauncher-1.2.5.dmg" target="_blank">http://googleappengine.googlecod ... eLauncher-1.2.5.dmg</a><br />
C、下載微博客的程序<br />
<br />
从 <a href="http://mblogcast.googlecode.com/files/mblogsync_gae.tar.gz" target="_blank">http://mblogcast.googlecode.com/files/mblogsync_gae.tar.gz</a> 下載GAE的微博同步程序。 如果你对GAE不熟悉，建议解压后，把mblogsync.gae放到GAE的目录下。即在该目录下看到appcfg.py的同时，也应该看到mblogsync.gae这个目录（目录下有app.yaml等文件）<br />
D、修改配置信息<br />
一、修改 default_m2g_conf.py<br />
<br />
(1) 修改user_mail,send_mail,user_gtalk 当发现twitter（或其他微博客）有更新时，程序会以user_mail的身份发信给send_mail，同时会发gtalk信息给 user_gtalk用户。为避免滥发垃圾邮件，所以google规定user_mail应该是你申请GAE的用户名(gmail邮箱)，建议 send_mail是接收更新信息的用户名。<br />
<br />
(2) 修改微博客信息 twitter_username,twitter_password,twitter_timeline_xml,twitter_senduri twitter_username,twitter_password是Twitter（或者其他微博客）的对应用户名。如果使用的是twitter，则无须修改twitter_timeline_xml,twitter_senduri，否则请修改成对应微博客的 Twitter兼容接口。<br />
二、修改 app.yaml<br />
<br />
（1）将 application: your_application_name 里面的 your_application_name 修改为你的GAE程序名（注：一般来说，域名是若xxxxx.appspot.com，则程序名是xxxxx）<br />
<br />
（2）为了安全，将fetch_xxxx、send_rss_xxxx和check_sub_xxxx中的xxxx修改为随机且一致的数字字母组合，避免黑客攻击。<br />
<br />
例如：使用fetch_aaa123、send_rss_bcd234和check_sub_yyy1984等<br />
<br />
(如需了解app.yaml的细节，访问<a href="http://code.google.com/appengine/docs/python/config/appconfig.html" target="_blank">http://code.google.com/appengine ... nfig/appconfig.html</a>)<br />
三、修改 cron.yaml<br />
<br />
把url: /fetch_xxxx中的/fetch_xxxx修改成跟app.yaml一致的对应名字。<br />
<br />
例如app.yaml中使用的是fetch_aaa123，则cron.yaml中亦应对应修改成： url: /fetch_aaa123<br />
E、更新GAE的空间信息（上传程序）<br />
<br />
appcfg.py update mblogsync.gae/<br />
F、添加gtalk好友用户<br />
<br />
为了能用gtalk接收到twitter更新消息，所以必须添加这个程序机器人为好友。如果你申请的GAE的空间域名是xxxxx.appspot.com，那么你就需要把<a href="mailto:xxxxx@appspot.com">xxxxx@appspot.com</a>加为gtalk好友。<br />
G、配置邮件过滤器<br />
<br />
本程序只要收到Twitter更新，便会发信到指定邮箱，因此信件会跟你接收Twitter一樣密集，所以我建议你建立一个过滤器把所有Twitter邮件加到一个標簽下，避免出现看起来邮箱被轰炸的情况。<br />
<br />
另加一提示：如果你担心有一天不能从你所在的地區中访问到gmail，那么你应该建立gmail的过滤器，把本程序机器人发出的送到gmail的所有邮件抄送到另外一个你感觉比較安全的服务商提供的邮箱上。<br />
<br />
[<i> 本帖最后由 麦圆 于 2009-9-11 20:12 编辑 </i>]</div>

							
							
							
							
															<div id="post_rate_div_236870"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo236870_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://math2gold.com/" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=7766" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=21989&amp;repquote=236870&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 236870)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_0"></div>				</div>
			</td>
		</tr>
		</table>
		</div><div class="ad_column" id="ad_interthread"><a href="/viewthread.php?tid=54699" target="_blank" style="color:red;">1984bbs是一个非营利项目，它需要您的捐助！</font></a>		</div>
	<div class="mainbox viewthread">
			<table id="pid237586" summary="pid237586" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7336" target="_blank" id="userinfo237586" class="dropmenu" onmouseover="showMenu(this.id)">specially</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus"> twitter@yxingbin</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7336">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7336&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_1" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum237586" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=21989&page=1#pid237586', '话题链接已经复制到剪贴板')">2楼</strong>
													<em onclick="$('postmessage_237586').className='t_bigfont'">大</em>							<em onclick="$('postmessage_237586').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_237586').className='t_smallfont'">小</em>												发表于 2009-9-12 15:09&nbsp;																					<a href="viewthread.php?tid=21989&amp;page=1&amp;authorid=7336" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_1"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_1"></div><div id="ad_thread4_1"></div>
						
						
																											<div id="postmessage_237586" class="t_msgfont">哇，高级货，就是有点复杂。辛苦了，试一下。<br />
<br />
[<i> 本帖最后由 specially 于 2009-9-12 15:11 编辑 </i>]</div>

							
							
							
							
															<div id="post_rate_div_237586"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo237586_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=7336" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=21989&amp;repquote=237586&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 237586)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_1"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid246333" summary="pid246333" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6675" target="_blank" id="userinfo246333" class="dropmenu" onmouseover="showMenu(this.id)">cwyalpha</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6675">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6675&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_2" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum246333" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=21989&page=1#pid246333', '话题链接已经复制到剪贴板')">3楼</strong>
													<em onclick="$('postmessage_246333').className='t_bigfont'">大</em>							<em onclick="$('postmessage_246333').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_246333').className='t_smallfont'">小</em>												发表于 2009-9-18 07:36&nbsp;																					<a href="viewthread.php?tid=21989&amp;page=1&amp;authorid=6675" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_2"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_2"></div><div id="ad_thread4_2"></div>
						
						
																											<div id="postmessage_246333" class="t_msgfont">嗯。。谢谢。正在学GAE。刚好拿来试下</div>

							
							
							
							
															<div id="post_rate_div_246333"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo246333_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=6675" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=21989&amp;repquote=246333&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 246333)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_2"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid254734" summary="pid254734" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8115" target="_blank" id="userinfo254734" class="dropmenu" onmouseover="showMenu(this.id)">OpenBL</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8115">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8115&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_3" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum254734" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=21989&page=1#pid254734', '话题链接已经复制到剪贴板')">4楼</strong>
													<em onclick="$('postmessage_254734').className='t_bigfont'">大</em>							<em onclick="$('postmessage_254734').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_254734').className='t_smallfont'">小</em>												发表于 2009-9-24 00:13&nbsp;																					<a href="viewthread.php?tid=21989&amp;page=1&amp;authorid=8115" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_3"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_3"></div><div id="ad_thread4_3"></div>
						
						
																											<div id="postmessage_254734" class="t_msgfont">彻底打消我怕丢推的念头<br />
但每天700+的邮件，让我有了想死的念头</div>

							
							
							
							
															<div id="post_rate_div_254734"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo254734_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=8115" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=21989&amp;repquote=254734&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 254734)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_3"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid267102" summary="pid267102" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>																		libcurl</cite>
							该用户已被删除
															</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum267102" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=21989&page=1#pid267102', '话题链接已经复制到剪贴板')">5楼</strong>
													<em onclick="$('postmessage_267102').className='t_bigfont'">大</em>							<em onclick="$('postmessage_267102').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_267102').className='t_smallfont'">小</em>												发表于 2009-10-1 21:01&nbsp;																					<a href="viewthread.php?tid=21989&amp;page=1&amp;authorid=9158" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_4"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_4"></div><div id="ad_thread4_4"></div>
						
						
																											<div id="postmessage_267102" class="t_msgfont">如何用gtalk更新twitter？就直接聊天里推消息么？</div>

							
							
							
							
															<div id="post_rate_div_267102"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=21989&amp;repquote=267102&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 267102)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_4"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid273335" summary="pid273335" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7766" target="_blank" id="userinfo273335" class="dropmenu" onmouseover="showMenu(this.id)">麦圆</a></cite>
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
						<strong title="复制话题链接到剪贴板" id="postnum273335" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=21989&page=1#pid273335', '话题链接已经复制到剪贴板')">6楼</strong>
													<em onclick="$('postmessage_273335').className='t_bigfont'">大</em>							<em onclick="$('postmessage_273335').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_273335').className='t_smallfont'">小</em>												发表于 2009-10-8 01:38&nbsp;																					<a href="viewthread.php?tid=21989&amp;page=1&amp;authorid=7766" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_5"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_5"></div><div id="ad_thread4_5"></div>
						
						
																											<div id="postmessage_273335" class="t_msgfont">对啊，直接发消息到gtalk就行了，自动送到推里。<br />
<br />
话说我現在有一万多封Twitter的邮件，好在有过滤器，否则真的呕血……不过gmail的搜索功能好，搜推非常方便。</div>

							
							
							
							
															<div id="post_rate_div_273335"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo273335_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://math2gold.com/" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=7766" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=21989&amp;repquote=273335&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 273335)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_5"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid364795" summary="pid364795" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10424" target="_blank" id="userinfo364795" class="dropmenu" onmouseover="showMenu(this.id)">quentinqiao</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">http://twitter.com/qiaoxiaojun</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10424">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10424&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_6" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum364795" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=21989&page=1#pid364795', '话题链接已经复制到剪贴板')">7楼</strong>
													<em onclick="$('postmessage_364795').className='t_bigfont'">大</em>							<em onclick="$('postmessage_364795').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_364795').className='t_smallfont'">小</em>												发表于 2009-12-9 22:52&nbsp;																					<a href="viewthread.php?tid=21989&amp;page=1&amp;authorid=10424" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_6"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_6"></div><div id="ad_thread4_6"></div>
						
						
																											<div id="postmessage_364795" class="t_msgfont">收藏！！！！</div>

							
							
							
							
															<div id="post_rate_div_364795"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo364795_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://twitter.com/qiaoxiaojun" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=10424" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=21989&amp;repquote=364795&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 364795)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_6"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid364933" summary="pid364933" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=4417" target="_blank" id="userinfo364933" class="dropmenu" onmouseover="showMenu(this.id)">ping</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=4417">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=4417&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_7" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum364933" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=21989&page=1#pid364933', '话题链接已经复制到剪贴板')">8楼</strong>
													<em onclick="$('postmessage_364933').className='t_bigfont'">大</em>							<em onclick="$('postmessage_364933').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_364933').className='t_smallfont'">小</em>												发表于 2009-12-10 00:08&nbsp;																					<a href="viewthread.php?tid=21989&amp;page=1&amp;authorid=4417" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_7"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_7"></div><div id="ad_thread4_7"></div>
						
						
																											<div id="postmessage_364933" class="t_msgfont">这个方案很复杂，仅仅用来搞TWITTER就是牛刀杀鸡。不过其中很多值得学习的东西，用来干其他。。呵呵<br />
btw，我的tor现在网桥加上都没法访问。哈哈</div>

							
							
							
							
															<div id="post_rate_div_364933"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo364933_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=4417" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=21989&amp;repquote=364933&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 364933)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_7"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid366234" summary="pid366234" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 <a name="lastpost"></a>					<cite>											<a href="space.php?uid=10565" target="_blank" id="userinfo366234" class="dropmenu" onmouseover="showMenu(this.id)">viki</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10565">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10565&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_8" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum366234" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=21989&page=1#pid366234', '话题链接已经复制到剪贴板')">9楼</strong>
													<em onclick="$('postmessage_366234').className='t_bigfont'">大</em>							<em onclick="$('postmessage_366234').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_366234').className='t_smallfont'">小</em>												发表于 2009-12-10 18:46&nbsp;																					<a href="viewthread.php?tid=21989&amp;page=1&amp;authorid=10565" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_8"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_8"></div><div id="ad_thread4_8"></div>
						
						
																											<div id="postmessage_366234" class="t_msgfont">菜鸟只能说先马克，有空再熬夜研究~~</div>

							
							
							
							
															<div id="post_rate_div_366234"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo366234_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=10565" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=21989&amp;repquote=366234&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 366234)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_8"></div>				</div>
			</td>
		</tr>
		</table>
		</div>
</form>





<div class="pages_btns">
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=21989&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=21989&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
				<span class="postbtn" id="newspecialtmp" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=21989&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

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

	<form method="post" id="postform" action="post.php?action=reply&amp;fid=26&amp;tid=21989&amp;extra=&amp;replysubmit=yes" onSubmit="return validate(this)">
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
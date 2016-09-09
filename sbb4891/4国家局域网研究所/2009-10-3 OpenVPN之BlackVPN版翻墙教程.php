<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<title>OpenVPN之BlackVPN版翻墙教程 - 国家局域网研究所 -  1984bbs.com </title>
<meta name="keywords" content="" />
<meta name="MSSmartTagsPreventParsing" content="True" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<link rel="archives" title="1984bbs.com" href="https://1984bbs.com/archiver/" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_viewthread.css" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_common.css" />
<script type="text/javascript">
	var discuz_uid = 13019;var IMGDIR = 'images/default';var attackevasive = '0';var gid = 0;var STYLEID = '1';
	gid = parseInt('3');var fid = parseInt('26');var tid = parseInt('24219');
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
			<p><a href="index.php" id="forumlist" onmouseover="showMenu(this.id)" class="dropmenu">1984bbs.com</a> &raquo; <a href="forumdisplay.php?fid=26">国家局域网研究所</a> &raquo; OpenVPN之BlackVPN版翻墙教程</p>
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
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=24219&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=24219&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
				<span class="postbtn" id="newspecial" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=24219&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

	<ul class="popupmenu_popup newspecialmenu" id="newspecial_menu" style="display: none">
		<li><a href="post.php?action=newthread&amp;fid=26&amp;extra=">发新话题</a></li>
		<li class="poll"><a href="post.php?action=newthread&amp;fid=26&amp;extra=&amp;special=1">发布投票</a></li>													</ul>

<form method="post" name="modactions">
	<input type="hidden" name="formhash" value="823c9fa2" />
	<div class="mainbox viewthread">
		<span class="headactions">
					<a href="my.php?item=favorites&amp;tid=24219" id="ajax_favorite" onclick="ajaxmenu(event, this.id, 3000, 0)">收藏</a>
			<a href="my.php?item=subscriptions&amp;subadd=24219" id="ajax_subscription" onclick="ajaxmenu(event, this.id, 3000, null, 0)">订阅</a>
			<a href="misc.php?action=emailfriend&amp;tid=24219" id="emailfriend" onclick="ajaxmenu(event, this.id, 9000000, null, 0)">推荐</a>
				<a href="viewthread.php?action=printable&amp;tid=24219" target="_blank" class="notabs">打印</a>
				</span>
		<h1>OpenVPN之BlackVPN版翻墙教程		</h1>
							<table id="pid269538" summary="pid269538" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=263" target="_blank" id="userinfo269538" class="dropmenu" onmouseover="showMenu(this.id)">WJ87</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">无产阶级煽动家</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=263">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=263&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_0" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum269538" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=24219&page=1#pid269538', '话题链接已经复制到剪贴板')">1楼</strong>
													<em onclick="$('postmessage_269538').className='t_bigfont'">大</em>							<em onclick="$('postmessage_269538').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_269538').className='t_smallfont'">小</em>												发表于 2009-10-3 17:04&nbsp;																					<a href="viewthread.php?tid=24219&amp;page=1&amp;authorid=263" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_0"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_0"></div><div id="ad_thread4_0"></div>
													<h2>OpenVPN之BlackVPN版翻墙教程</h2>
						
						
																											<div id="postmessage_269538" class="t_msgfont">作者：GFW Blog<br />
非常感谢热心网友赐稿！热烈欢迎大家向我们投稿，投稿信箱地址：chinagfwblog(at)gmail.com。<br />
<br />
BlackVPN概述<br />
<br />
参考<a href="http://www.liuhanyu.com/2009/09/blackvpn/" target="_blank">http://www.liuhanyu.com/2009/09/blackvpn/</a><br />
<br />
免费VPN,<br />
注册简单无须邮箱（需要邀请码，邀请码到处都有），<br />
支持ssl链接（测试可以登录twitter,facebook等），<br />
速度还行比tor快，<br />
使用OpenVPN软件（等这个提供商挂了再找个别提供商的而不用换软件。）<br />
<br />
BlackVPN提供三个通道，nl,uk,usa，目前测试nl可用。<br />
<br />
说明书（English）<br />
<a href="https://www.blackvpn.com/support/windows/openvpn/" target="_blank">https://www.blackvpn.com/support/windows/openvpn/</a><br />
<br />
<br />
软件：<br />
<br />
1.OpenVPN软件<br />
<a href="http://openvpn.se/download.html" target="_blank">http://openvpn.se/download.html</a><br />
<br />
这个 Installation Package (Both 32-bit and 64-bit TAP driver<br />
included):openvpn-2.0.9-gui-1.0.3-install.exe<br />
<br />
2.BlackVPN的配置文件包 blackvpn_windows.zip<br />
<br />
下载：<br />
<a href="http://www.blackvpn.com/content/uploads/blackvpn_windows.zip" target="_blank">http://www.blackvpn.com/content/uploads/blackvpn_windows.zip</a><br />
<br />
<br />
中文使用手册<br />
<br />
1.注册（注册完毕会自动分配用户名和密码）<br />
<br />
<a href="https://www.blackvpn.com/" target="_blank">https://www.blackvpn.com/</a><br />
<br />
InviteCode 为邀请码，目前可用的有 LastChance ，可搜索之。<br />
Email First Name&nbsp;&nbsp;Last Name 可以随便填写<br />
country貌似随便选也没问题。<br />
注册完毕，会分配一个信息框内有帐户密码信息，务必保存好。<br />
<br />
例:<br />
Welcome to blackVPN.<br />
Here is your login information, SAVE IT!!<br />
It wont be emailed to you or displayed again.<br />
<br />
（用户名）username/login: u******<br />
（密码）password: *******<br />
<br />
PPTP Servers<br />
NL Server: vpn.blackvpn.nl<br />
USA Server: vpn.blackvpn.com<br />
UK Server: vpn.blackvpn.co.uk<br />
OpenVPN<br />
Go to Getting Started or our Support section for installation instructions.<br />
<br />
Thank you for signing up with blackVPN!<br />
<br />
-----------------<br />
<br />
<br />
2.安装软件<br />
双击 openvpn-2.0.9-gui-1.0.3-install.exe ，一路下一步，直到安装完毕。<br />
<br />
3.配置文件，把第二个下载的 blackvpn_windows.zip<br />
，解压缩。把里面的全部文件（一个文件夹ssl，和三个配置文件）复制到安装盘一般为c盘下 c:\Program<br />
Files\OpenVPN\config\&nbsp;&nbsp;下。<br />
<br />
-----------------<br />
安装完毕，在右下角状态栏会出现一个 OpenVPN图标（类似红色拨号连接带个小地球）。<br />
<br />
在图标上，右击，出现一串菜单，选第一个blackvpn_nl（第二和第三个测试时连不上）,有个向右箭头会自动展开，单击connet(连接)，出现一个对话框需要你输入帐户名和密码，输入，单击ok。<br />
<br />
连接成功后，带小地球的图标会变绿。测试一下ip为RIPE。<br />
<br />
<br />
Enjoy!<br />
<br />
<br />
版权不要，演绎随便。</div>

							
							
							
							
															<div id="post_rate_div_269538"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo269538_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=263" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=24219&amp;repquote=269538&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 269538)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_0"></div>				</div>
			</td>
		</tr>
		</table>
		</div><div class="ad_column" id="ad_interthread"><a href="/viewthread.php?tid=54699" target="_blank" style="color:red;">1984bbs是一个非营利项目，它需要您的捐助！</font></a>		</div>
	<div class="mainbox viewthread">
			<table id="pid269692" summary="pid269692" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=9162" target="_blank" id="userinfo269692" class="dropmenu" onmouseover="showMenu(this.id)">happybabe</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=9162">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=9162&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_1" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum269692" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=24219&page=1#pid269692', '话题链接已经复制到剪贴板')">2楼</strong>
													<em onclick="$('postmessage_269692').className='t_bigfont'">大</em>							<em onclick="$('postmessage_269692').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_269692').className='t_smallfont'">小</em>												发表于 2009-10-3 19:56&nbsp;																					<a href="viewthread.php?tid=24219&amp;page=1&amp;authorid=9162" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_1"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_1"></div><div id="ad_thread4_1"></div>
						
						
																											<div id="postmessage_269692" class="t_msgfont">我感觉pptp方式比较方便</div>

							
							
							
							
															<div id="post_rate_div_269692"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo269692_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=9162" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=24219&amp;repquote=269692&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 269692)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_1"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid270557" summary="pid270557" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8520" target="_blank" id="userinfo270557" class="dropmenu" onmouseover="showMenu(this.id)">小猪熊</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8520">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8520&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_2" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum270557" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=24219&page=1#pid270557', '话题链接已经复制到剪贴板')">3楼</strong>
													<em onclick="$('postmessage_270557').className='t_bigfont'">大</em>							<em onclick="$('postmessage_270557').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_270557').className='t_smallfont'">小</em>												发表于 2009-10-5 00:25&nbsp;																					<a href="viewthread.php?tid=24219&amp;page=1&amp;authorid=8520" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_2"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_2"></div><div id="ad_thread4_2"></div>
						
						
																											<div id="postmessage_270557" class="t_msgfont">最喜欢这种不用下载软件就能使用的VPN了&nbsp;&nbsp;真是好呀&nbsp;&nbsp;谢谢LZ的推荐&nbsp; &nbsp;另外还有，三个Server里只有vpn.blackvpn.nl能用，其它的全部失效</div>

							
							
							
							
															<div id="post_rate_div_270557"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo270557_menu" style="display: none;">
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
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=24219&amp;repquote=270557&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 270557)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_2"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid270794" summary="pid270794" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7076" target="_blank" id="userinfo270794" class="dropmenu" onmouseover="showMenu(this.id)">BlackDream</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7076">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7076&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_3" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum270794" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=24219&page=1#pid270794', '话题链接已经复制到剪贴板')">4楼</strong>
													<em onclick="$('postmessage_270794').className='t_bigfont'">大</em>							<em onclick="$('postmessage_270794').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_270794').className='t_smallfont'">小</em>												发表于 2009-10-5 11:36&nbsp;																					<a href="viewthread.php?tid=24219&amp;page=1&amp;authorid=7076" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_3"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_3"></div><div id="ad_thread4_3"></div>
						
						
																											<div id="postmessage_270794" class="t_msgfont">恩，离封杀不远了</div>

							
							
							
							
															<div id="post_rate_div_270794"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo270794_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=7076" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=24219&amp;repquote=270794&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 270794)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_3"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid271039" summary="pid271039" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=250" target="_blank" id="userinfo271039" class="dropmenu" onmouseover="showMenu(this.id)">dada</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">不明真相群众</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=250">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=250&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_4" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum271039" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=24219&page=1#pid271039', '话题链接已经复制到剪贴板')">5楼</strong>
													<em onclick="$('postmessage_271039').className='t_bigfont'">大</em>							<em onclick="$('postmessage_271039').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_271039').className='t_smallfont'">小</em>												发表于 2009-10-5 18:08&nbsp;																					<a href="viewthread.php?tid=24219&amp;page=1&amp;authorid=250" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_4"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_4"></div><div id="ad_thread4_4"></div>
						
						
																											<div id="postmessage_271039" class="t_msgfont">这个很好，已经用了，但真正的菜鸟还是看不懂上面的说明。</div>

							
							
							
							
															<div id="post_rate_div_271039"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo271039_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=250" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=24219&amp;repquote=271039&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 271039)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_4"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid271910" summary="pid271910" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8922" target="_blank" id="userinfo271910" class="dropmenu" onmouseover="showMenu(this.id)">阳光不锈</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">医生的职责不是救人，而是少杀人…以为自己是风，结果遍体鳞伤才发现，原来自己是草！</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8922">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8922&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_5" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum271910" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=24219&page=1#pid271910', '话题链接已经复制到剪贴板')">6楼</strong>
													<em onclick="$('postmessage_271910').className='t_bigfont'">大</em>							<em onclick="$('postmessage_271910').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_271910').className='t_smallfont'">小</em>												发表于 2009-10-6 18:19&nbsp;																					<a href="viewthread.php?tid=24219&amp;page=1&amp;authorid=8922" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_5"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_5"></div><div id="ad_thread4_5"></div>
						
						
																											<div id="postmessage_271910" class="t_msgfont">邀请码搜到的都不能用啊?请给个</div>

							
							
							
							
															<div id="post_rate_div_271910"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo271910_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=8922" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=24219&amp;repquote=271910&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 271910)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_5"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid272183" summary="pid272183" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8887" target="_blank" id="userinfo272183" class="dropmenu" onmouseover="showMenu(this.id)">水煮肉汤</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8887">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8887&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_6" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum272183" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=24219&page=1#pid272183', '话题链接已经复制到剪贴板')">7楼</strong>
													<em onclick="$('postmessage_272183').className='t_bigfont'">大</em>							<em onclick="$('postmessage_272183').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_272183').className='t_smallfont'">小</em>												发表于 2009-10-6 23:04&nbsp;																					<a href="viewthread.php?tid=24219&amp;page=1&amp;authorid=8887" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_6"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_6"></div><div id="ad_thread4_6"></div>
													<h2>回复 6楼 阳光不锈 的话题</h2>
						
						
																											<div id="postmessage_272183" class="t_msgfont">LastChance</div>

							
							
							
							
															<div id="post_rate_div_272183"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo272183_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=8887" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=24219&amp;repquote=272183&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 272183)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_6"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid272227" summary="pid272227" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=9123" target="_blank" id="userinfo272227" class="dropmenu" onmouseover="showMenu(this.id)">winterwind</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=9123">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=9123&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_7" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum272227" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=24219&page=1#pid272227', '话题链接已经复制到剪贴板')">8楼</strong>
													<em onclick="$('postmessage_272227').className='t_bigfont'">大</em>							<em onclick="$('postmessage_272227').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_272227').className='t_smallfont'">小</em>												发表于 2009-10-6 23:37&nbsp;																					<a href="viewthread.php?tid=24219&amp;page=1&amp;authorid=9123" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_7"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_7"></div><div id="ad_thread4_7"></div>
													<h2>回复 7楼 水煮肉汤 的话题</h2>
						
						
																											<div id="postmessage_272227" class="t_msgfont">还是不能用。</div>

							
							
							
							
															<div id="post_rate_div_272227"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo272227_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=9123" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=24219&amp;repquote=272227&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 272227)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_7"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid273259" summary="pid273259" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=4649" target="_blank" id="userinfo273259" class="dropmenu" onmouseover="showMenu(this.id)">虎躯一震</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">我了个去</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=4649">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=4649&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_8" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum273259" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=24219&page=1#pid273259', '话题链接已经复制到剪贴板')">9楼</strong>
													<em onclick="$('postmessage_273259').className='t_bigfont'">大</em>							<em onclick="$('postmessage_273259').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_273259').className='t_smallfont'">小</em>												发表于 2009-10-7 23:53&nbsp;																					<a href="viewthread.php?tid=24219&amp;page=1&amp;authorid=4649" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_8"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_8"></div><div id="ad_thread4_8"></div>
						
						
																											<div id="postmessage_273259" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>winterwind</i> 于 2009-10-6 23:37 发表 <a href="http://1984bbs.com/redirect.php?goto=findpost&amp;pid=272227&amp;ptid=24219" target="_blank"><img src="http://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
还是不能用。 </blockquote></div>可以用，前提是你要把其他需要填的地方填好，否则页面会一直提示邀请码有问题（即使邀请码LastChance是对的）</div>

							
							
							
							
															<div id="post_rate_div_273259"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo273259_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=4649" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=24219&amp;repquote=273259&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 273259)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_8"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid275095" summary="pid275095" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 <a name="lastpost"></a>					<cite>											<a href="space.php?uid=5638" target="_blank" id="userinfo275095" class="dropmenu" onmouseover="showMenu(this.id)">小猪依人</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">一小撮</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=5638">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=5638&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_9" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum275095" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=24219&page=1#pid275095', '话题链接已经复制到剪贴板')">10楼</strong>
													<em onclick="$('postmessage_275095').className='t_bigfont'">大</em>							<em onclick="$('postmessage_275095').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_275095').className='t_smallfont'">小</em>												发表于 2009-10-9 16:53&nbsp;																					<a href="viewthread.php?tid=24219&amp;page=1&amp;authorid=5638" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_9"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_9"></div><div id="ad_thread4_9"></div>
						
						
																											<div id="postmessage_275095" class="t_msgfont">邀请码不能用。。谁还能给个。</div>

							
							
							
							
															<div id="post_rate_div_275095"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo275095_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=5638" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=24219&amp;repquote=275095&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 275095)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_9"></div>				</div>
			</td>
		</tr>
		</table>
		</div>
</form>





<div class="pages_btns">
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=24219&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=24219&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
				<span class="postbtn" id="newspecialtmp" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=24219&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

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

	<form method="post" id="postform" action="post.php?action=reply&amp;fid=26&amp;tid=24219&amp;extra=&amp;replysubmit=yes" onSubmit="return validate(this)">
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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<title>详细简单 搭建Twitter第三方API攻略 - 国家局域网研究所 -  1984bbs.com </title>
<meta name="keywords" content="" />
<meta name="MSSmartTagsPreventParsing" content="True" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<link rel="archives" title="1984bbs.com" href="https://1984bbs.com/archiver/" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_viewthread.css" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_common.css" />
<script type="text/javascript">
	var discuz_uid = 13019;var IMGDIR = 'images/default';var attackevasive = '0';var gid = 0;var STYLEID = '1';
	gid = parseInt('3');var fid = parseInt('26');var tid = parseInt('42567');
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
			<p><a href="index.php" id="forumlist" onmouseover="showMenu(this.id)" class="dropmenu">1984bbs.com</a> &raquo; <a href="forumdisplay.php?fid=26">国家局域网研究所</a> &raquo; 详细简单 搭建Twitter第三方API攻略</p>
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
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=42567&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=42567&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
				<span class="postbtn" id="newspecial" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=42567&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

	<ul class="popupmenu_popup newspecialmenu" id="newspecial_menu" style="display: none">
		<li><a href="post.php?action=newthread&amp;fid=26&amp;extra=">发新话题</a></li>
		<li class="poll"><a href="post.php?action=newthread&amp;fid=26&amp;extra=&amp;special=1">发布投票</a></li>													</ul>

<form method="post" name="modactions">
	<input type="hidden" name="formhash" value="823c9fa2" />
	<div class="mainbox viewthread">
		<span class="headactions">
					<a href="my.php?item=favorites&amp;tid=42567" id="ajax_favorite" onclick="ajaxmenu(event, this.id, 3000, 0)">收藏</a>
			<a href="my.php?item=subscriptions&amp;subadd=42567" id="ajax_subscription" onclick="ajaxmenu(event, this.id, 3000, null, 0)">订阅</a>
			<a href="misc.php?action=emailfriend&amp;tid=42567" id="emailfriend" onclick="ajaxmenu(event, this.id, 9000000, null, 0)">推荐</a>
				<a href="viewthread.php?action=printable&amp;tid=42567" target="_blank" class="notabs">打印</a>
				</span>
		<h1>详细简单 搭建Twitter第三方API攻略		</h1>
							<table id="pid554685" summary="pid554685" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=11326" target="_blank" id="userinfo554685" class="dropmenu" onmouseover="showMenu(this.id)">flld</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=11326">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=11326&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_0" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum554685" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=42567&page=1#pid554685', '话题链接已经复制到剪贴板')">1楼</strong>
													<em onclick="$('postmessage_554685').className='t_bigfont'">大</em>							<em onclick="$('postmessage_554685').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_554685').className='t_smallfont'">小</em>												发表于 2010-4-8 18:26&nbsp;																					<a href="viewthread.php?tid=42567&amp;page=1&amp;authorid=11326" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_0"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_0"></div><div id="ad_thread4_0"></div>
													<h2>详细简单 搭建Twitter第三方API攻略</h2>
						
						
																											<div id="postmessage_554685" class="t_msgfont">作者：Tim Huang&nbsp; &nbsp;来源：Tim's pocket<br />
<br />
利用Google App Engine,大家可以轻松搭建属于自己的Twitter API。<br />
（换句话说，GAE被就没戏唱了XD）<br />
<br />
常识大补贴：<br />
Twitter API可以帮助你免翻墙更新twitter(前提是你已经有twitter帐号）<br />
常用的Twitter桌面程序有：Twhirl。本文后面会以此举例。<br />
手机上，我用的Twitter客户端是Twidroid。本文后面也会举例。<br />
自己搭建API的好处是更安全。<br />
Twitter是什么?! 算了，如果你连这都不知道，请忽略本文。<br />
<br />
1.你需要Google帐户，注册Google App Engine<br />
&nbsp; &nbsp; 注册地址 <a href="http://appengine.google.com/" target="_blank">http://appengine.google.com/</a> ，依提示注册就可以了。<br />
&nbsp; &nbsp; 然后，create an application. 第一行的yourid要记住，第二行的title随便。<br />
2.下载以下文件：<br />
&nbsp; &nbsp; gae.zip<br />
用解压软件将其解压到一个目录中，例如（C:\google\gae），进入目录，用“写字板”打开并编辑 app.yaml 文件，把第一行 application: nest 的 nest 改成你自己建立的 yourid 。 <br />
&nbsp; &nbsp; SDUpload&nbsp;&nbsp;(文件名：SDUpload 0.1.rar)<br />
把里面的文件解压到gae所在的文件夹，解压后的C:\google看起来是这个样子:<br />
gae<br />
MSVCR71.dll<br />
ReadMe.txt<br />
SDUpload.exe<br />
VERSION<br />
w9xpopen.exe <br />
<br />
3.打开命令提示符cmd (&quot;运行&quot;里输入cmd)<br />
假设你的文件也是放在C:\google目录下，依次输入：<br />
cd\<br />
cd google<br />
进入C:\google目录后，然后输入上传命令： SDUpload update gae<br />
系统会提示你输入你的gmail账号和密码(密码不会显示出来，不要输错），等过程结束，大功告成！<br />
<br />
Twhil使用API<br />
安装Twhirl并修改API地址<br />
(1) 先到 <a href="http://get.adobe.com/cn/air/" target="_blank">http://get.adobe.com/cn/air/</a> 下载并安装 Adobe AIR的最新版。<br />
(2) 再到 <a href="http://www.twhirl.org/download" target="_blank">http://www.twhirl.org/download</a> 下载并安装twhirl的最新版。<br />
(3) 运行twhirl，在账号添加的部分，选择 laconi.ca 账户类型，然后按照下面双引号中的内容输入你的账号：“你的twitter账号@yourid.appspot.com”，添加后点 Connect ，输入你的twitter账号的密码。<br />
<br />
<br />
Twidroid使用API （Android手机专用，如果你用的别的智能手机，请自行寻找支持自定义API的软件）<br />
(1)安装Twidroid Pro (推荐去hiapk.com安卓论坛找）<br />
(2)打开软件，新增帐户。选择Other后会出现一栏API地址，输入你的API地址:yourid.appspot.com/api<br />
(3)使用Twitter帐户登录，验证，成功！<br />
<br />
<br />
提示：<br />
1.请特别注意正文中蓝色标注。<br />
2.浏览器地址栏输入 <a href="http://yourid.appspot.com/api/" target="_blank">http://yourid.appspot.com/api/</a> 页面可能无法显示,但api实际可用。<br />
3.架设完API后可以将C:\google删除，不影响的（这个貌似是废话，为小白菜而写）<br />
3.授人以鱼不如授人以渔，请勿轻易将自己的api传播，欢迎传播本教程。</div>

							
							
							
							
															<div id="post_rate_div_554685"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo554685_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=11326" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=42567&amp;repquote=554685&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 554685)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_0"></div>				</div>
			</td>
		</tr>
		</table>
		</div><div class="ad_column" id="ad_interthread"><a href="/viewthread.php?tid=54699" target="_blank" style="color:red;">1984bbs是一个非营利项目，它需要您的捐助！</font></a>		</div>
	<div class="mainbox viewthread">
			<table id="pid555012" summary="pid555012" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10054" target="_blank" id="userinfo555012" class="dropmenu" onmouseover="showMenu(this.id)">imus</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">升斗小民</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10054">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10054&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_1" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum555012" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=42567&page=1#pid555012', '话题链接已经复制到剪贴板')">2楼</strong>
													<em onclick="$('postmessage_555012').className='t_bigfont'">大</em>							<em onclick="$('postmessage_555012').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_555012').className='t_smallfont'">小</em>												发表于 2010-4-8 21:39&nbsp;																					<a href="viewthread.php?tid=42567&amp;page=1&amp;authorid=10054" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_1"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_1"></div><div id="ad_thread4_1"></div>
						
						
																											<div id="postmessage_555012" class="t_msgfont">转贴的吧，请问gae.zip哪里下载？</div>

							
							
							
							
															<div id="post_rate_div_555012"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo555012_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://imuspot.appspot.com/" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=10054" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=42567&amp;repquote=555012&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 555012)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_1"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid555029" summary="pid555029" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=719" target="_blank" id="userinfo555029" class="dropmenu" onmouseover="showMenu(this.id)">Zenu</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">资深潜水员</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=719">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=719&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_2" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum555029" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=42567&page=1#pid555029', '话题链接已经复制到剪贴板')">3楼</strong>
													<em onclick="$('postmessage_555029').className='t_bigfont'">大</em>							<em onclick="$('postmessage_555029').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_555029').className='t_smallfont'">小</em>												发表于 2010-4-8 21:50&nbsp;																					<a href="viewthread.php?tid=42567&amp;page=1&amp;authorid=719" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_2"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_2"></div><div id="ad_thread4_2"></div>
						
						
																											<div id="postmessage_555029" class="t_msgfont"><a href="http://www.boxcn.net/shared/930pv6ktoq" target="_blank">http://www.boxcn.net/shared/930pv6ktoq</a><br />
我就是下这个的，从细节的力量博客那看到<br />
测试可用</div>

							
							
							
							
															<div id="post_rate_div_555029"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo555029_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=719" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=42567&amp;repquote=555029&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 555029)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_2"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid562675" summary="pid562675" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12577" target="_blank" id="userinfo562675" class="dropmenu" onmouseover="showMenu(this.id)">jqx</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">不明真相的群众</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12577">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12577&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_3" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum562675" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=42567&page=1#pid562675', '话题链接已经复制到剪贴板')">4楼</strong>
													<em onclick="$('postmessage_562675').className='t_bigfont'">大</em>							<em onclick="$('postmessage_562675').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_562675').className='t_smallfont'">小</em>												发表于 2010-4-14 13:13&nbsp;																					<a href="viewthread.php?tid=42567&amp;page=1&amp;authorid=12577" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_3"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_3"></div><div id="ad_thread4_3"></div>
						
						
																											<div id="postmessage_562675" class="t_msgfont">刚才根据教程搭建成功了，多谢！</div>

							
							
							
							
															<div id="post_rate_div_562675"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo562675_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=12577" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=42567&amp;repquote=562675&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 562675)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_3"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid562680" summary="pid562680" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12577" target="_blank" id="userinfo562680" class="dropmenu" onmouseover="showMenu(this.id)">jqx</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">不明真相的群众</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12577">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12577&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_4" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum562680" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=42567&page=1#pid562680', '话题链接已经复制到剪贴板')">5楼</strong>
													<em onclick="$('postmessage_562680').className='t_bigfont'">大</em>							<em onclick="$('postmessage_562680').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_562680').className='t_smallfont'">小</em>												发表于 2010-4-14 13:15&nbsp;																					<a href="viewthread.php?tid=42567&amp;page=1&amp;authorid=12577" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_4"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_4"></div><div id="ad_thread4_4"></div>
						
						
																											<div id="postmessage_562680" class="t_msgfont">gae.zip下载地址： <br />
<a href="http://cid-b25292e8d4856480.skydrive.live.com/self.aspx/.Public/gae.zip" target="_blank">http://cid-b25292e8d4856480.skyd ... spx/.Public/gae.zip</a> <br />
SDUpload (文件名：SDUpload 0.1.rar)下载地址：<br />
 <a href="http://code.google.com/p/sdapp/downloads/list" target="_blank">http://code.google.com/p/sdapp/downloads/list</a></div>

							
							
							
							
															<div id="post_rate_div_562680"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo562680_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=12577" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=42567&amp;repquote=562680&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 562680)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_4"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid564520" summary="pid564520" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8357" target="_blank" id="userinfo564520" class="dropmenu" onmouseover="showMenu(this.id)">kevin20700</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8357">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8357&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_5" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum564520" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=42567&page=1#pid564520', '话题链接已经复制到剪贴板')">6楼</strong>
													<em onclick="$('postmessage_564520').className='t_bigfont'">大</em>							<em onclick="$('postmessage_564520').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_564520').className='t_smallfont'">小</em>												发表于 2010-4-15 14:39&nbsp;																					<a href="viewthread.php?tid=42567&amp;page=1&amp;authorid=8357" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_5"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_5"></div><div id="ad_thread4_5"></div>
						
						
																											<div id="postmessage_564520" class="t_msgfont">刚才根据教程搭建成功了，多谢！</div>

							
							
							
							
															<div id="post_rate_div_564520"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo564520_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=8357" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=42567&amp;repquote=564520&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 564520)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_5"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid567339" summary="pid567339" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=4964" target="_blank" id="userinfo567339" class="dropmenu" onmouseover="showMenu(this.id)">xifanliang</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">有事请Reply  @xifanliang</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=4964">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=4964&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_6" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum567339" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=42567&page=1#pid567339', '话题链接已经复制到剪贴板')">7楼</strong>
													<em onclick="$('postmessage_567339').className='t_bigfont'">大</em>							<em onclick="$('postmessage_567339').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_567339').className='t_smallfont'">小</em>												发表于 2010-4-16 22:44&nbsp;																					<a href="viewthread.php?tid=42567&amp;page=1&amp;authorid=4964" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_6"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_6"></div><div id="ad_thread4_6"></div>
						
						
																											<div id="postmessage_567339" class="t_msgfont">搞定了</div>

							
							
							
							
															<div id="post_rate_div_567339"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo567339_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=4964" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=42567&amp;repquote=567339&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 567339)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_6"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid576598" summary="pid576598" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=5736" target="_blank" id="userinfo576598" class="dropmenu" onmouseover="showMenu(this.id)">外来务工人员</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">对你微笑，纯属礼貌</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=5736">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=5736&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_7" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum576598" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=42567&page=1#pid576598', '话题链接已经复制到剪贴板')">8楼</strong>
													<em onclick="$('postmessage_576598').className='t_bigfont'">大</em>							<em onclick="$('postmessage_576598').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_576598').className='t_smallfont'">小</em>												发表于 2010-4-21 23:14&nbsp;																					<a href="viewthread.php?tid=42567&amp;page=1&amp;authorid=5736" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_7"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_7"></div><div id="ad_thread4_7"></div>
						
						
																											<div id="postmessage_576598" class="t_msgfont">按照教程搭建，行至最后步骤“......(3) 运行twhirl，在账号添加的部分，选择 laconi.ca 账户类型，然后按照下面双引号中的内容输入你的账号：“你的twitter账号@yourid.appspot.com”，添加后点 Connect ，输入你的twitter账号的密码。”........时，就是链接不上，显示错误，为什么？请高人指教，感谢！</div>

							
							
							
							
															<div id="post_rate_div_576598"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo576598_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=5736" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=42567&amp;repquote=576598&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 576598)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_7"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid576600" summary="pid576600" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=5736" target="_blank" id="userinfo576600" class="dropmenu" onmouseover="showMenu(this.id)">外来务工人员</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">对你微笑，纯属礼貌</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=5736">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=5736&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_8" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum576600" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=42567&page=1#pid576600', '话题链接已经复制到剪贴板')">9楼</strong>
													<em onclick="$('postmessage_576600').className='t_bigfont'">大</em>							<em onclick="$('postmessage_576600').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_576600').className='t_smallfont'">小</em>												发表于 2010-4-21 23:15&nbsp;																					<a href="viewthread.php?tid=42567&amp;page=1&amp;authorid=5736" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_8"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_8"></div><div id="ad_thread4_8"></div>
						
						
																											<div id="postmessage_576600" class="t_msgfont">为什么啊为什么</div>

							
							
							
							
															<div id="post_rate_div_576600"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo576600_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=5736" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=42567&amp;repquote=576600&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 576600)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_8"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid577054" summary="pid577054" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12463" target="_blank" id="userinfo577054" class="dropmenu" onmouseover="showMenu(this.id)">DaemonEye</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">不河蟹的围观团团员</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12463">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12463&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_9" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum577054" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=42567&page=1#pid577054', '话题链接已经复制到剪贴板')">10楼</strong>
													<em onclick="$('postmessage_577054').className='t_bigfont'">大</em>							<em onclick="$('postmessage_577054').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_577054').className='t_smallfont'">小</em>												发表于 2010-4-22 10:22&nbsp;																					<a href="viewthread.php?tid=42567&amp;page=1&amp;authorid=12463" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_9"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_9"></div><div id="ad_thread4_9"></div>
						
						
																											<div id="postmessage_577054" class="t_msgfont">谁给个iphone上能自定义api的客户端....</div>

							
							
							
							
															<div id="post_rate_div_577054"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo577054_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=12463" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=42567&amp;repquote=577054&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 577054)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_9"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid577079" summary="pid577079" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=11051" target="_blank" id="userinfo577079" class="dropmenu" onmouseover="showMenu(this.id)">听到涛声</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=11051">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=11051&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_10" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum577079" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=42567&page=1#pid577079', '话题链接已经复制到剪贴板')">11楼</strong>
													<em onclick="$('postmessage_577079').className='t_bigfont'">大</em>							<em onclick="$('postmessage_577079').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_577079').className='t_smallfont'">小</em>												发表于 2010-4-22 10:34&nbsp;																					<a href="viewthread.php?tid=42567&amp;page=1&amp;authorid=11051" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_10"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_10"></div><div id="ad_thread4_10"></div>
													<h2>回复 10楼 DaemonEye 的话题</h2>
						
						
																											<div id="postmessage_577079" class="t_msgfont">TwitBird可以，appstore上有免费版。</div>

							
							
							
							
															<div id="post_rate_div_577079"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo577079_menu" style="display: none;">
										<div class="imicons">
												<a href="http://wpa.qq.com/msgrd?V=1&amp;Uin=401881046&amp;Site=1984bbs.com&amp;Menu=yes" target="_blank"><img src="images/default/qq.gif" alt="QQ" /></a>																							</div>
										<dl></dl>
										<p><a href="space.php?uid=11051" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=42567&amp;repquote=577079&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 577079)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_10"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid577100" summary="pid577100" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12463" target="_blank" id="userinfo577100" class="dropmenu" onmouseover="showMenu(this.id)">DaemonEye</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">不河蟹的围观团团员</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12463">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12463&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_11" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum577100" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=42567&page=1#pid577100', '话题链接已经复制到剪贴板')">12楼</strong>
													<em onclick="$('postmessage_577100').className='t_bigfont'">大</em>							<em onclick="$('postmessage_577100').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_577100').className='t_smallfont'">小</em>												发表于 2010-4-22 10:40&nbsp;																					<a href="viewthread.php?tid=42567&amp;page=1&amp;authorid=12463" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_11"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_11"></div><div id="ad_thread4_11"></div>
						
						
																											<div id="postmessage_577100" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>听到涛声</i> 于 2010-4-22 10:34 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=577079&amp;ptid=42567" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
TwitBird可以，appstore上有免费版。 </blockquote></div>非常感谢</div>

							
							
							
							
															<div id="post_rate_div_577100"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo577100_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=12463" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=42567&amp;repquote=577100&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 577100)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_11"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid585231" summary="pid585231" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=13325" target="_blank" id="userinfo585231" class="dropmenu" onmouseover="showMenu(this.id)">鹅毛</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">原罪</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=13325">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=13325&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_12" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum585231" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=42567&page=1#pid585231', '话题链接已经复制到剪贴板')">13楼</strong>
													<em onclick="$('postmessage_585231').className='t_bigfont'">大</em>							<em onclick="$('postmessage_585231').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_585231').className='t_smallfont'">小</em>												发表于 2010-4-27 09:31&nbsp;																					<a href="viewthread.php?tid=42567&amp;page=1&amp;authorid=13325" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_12"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_12"></div><div id="ad_thread4_12"></div>
						
						
																											<div id="postmessage_585231" class="t_msgfont">请问gae.zip哪里下载？</div>

							
							
							
							
															<div id="post_rate_div_585231"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo585231_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=13325" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=42567&amp;repquote=585231&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 585231)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_12"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid585320" summary="pid585320" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8395" target="_blank" id="userinfo585320" class="dropmenu" onmouseover="showMenu(this.id)">laoyang</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">尘世中一个迷途小书童</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8395">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8395&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_13" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum585320" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=42567&page=1#pid585320', '话题链接已经复制到剪贴板')">14楼</strong>
													<em onclick="$('postmessage_585320').className='t_bigfont'">大</em>							<em onclick="$('postmessage_585320').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_585320').className='t_smallfont'">小</em>												发表于 2010-4-27 10:15&nbsp;																					<a href="viewthread.php?tid=42567&amp;page=1&amp;authorid=8395" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_13"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_13"></div><div id="ad_thread4_13"></div>
						
						
																											<div id="postmessage_585320" class="t_msgfont">用mixero吧</div>

							
							
							
							
															<div id="post_rate_div_585320"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo585320_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=8395" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=42567&amp;repquote=585320&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 585320)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_13"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid586683" summary="pid586683" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=5063" target="_blank" id="userinfo586683" class="dropmenu" onmouseover="showMenu(this.id)">deidei</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">这个世界对待一切都很认真，这很过分。</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=5063">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=5063&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_14" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum586683" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=42567&page=1#pid586683', '话题链接已经复制到剪贴板')">15楼</strong>
													<em onclick="$('postmessage_586683').className='t_bigfont'">大</em>							<em onclick="$('postmessage_586683').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_586683').className='t_smallfont'">小</em>												发表于 2010-4-27 23:56&nbsp;																					<a href="viewthread.php?tid=42567&amp;page=1&amp;authorid=5063" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_14"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_14"></div><div id="ad_thread4_14"></div>
						
						
																											<div id="postmessage_586683" class="t_msgfont">申请一个墙外的空间，传一个API就行吧</div>

							
							
							
							
															<div id="post_rate_div_586683"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo586683_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=5063" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=42567&amp;repquote=586683&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 586683)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_14"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid623685" summary="pid623685" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=4464" target="_blank" id="userinfo623685" class="dropmenu" onmouseover="showMenu(this.id)">老驴快跑</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">裆卫军</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=4464">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=4464&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_15" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum623685" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=42567&page=1#pid623685', '话题链接已经复制到剪贴板')">16楼</strong>
													<em onclick="$('postmessage_623685').className='t_bigfont'">大</em>							<em onclick="$('postmessage_623685').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_623685').className='t_smallfont'">小</em>												发表于 2010-5-18 21:24&nbsp;																					<a href="viewthread.php?tid=42567&amp;page=1&amp;authorid=4464" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_15"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_15"></div><div id="ad_thread4_15"></div>
						
						
																											<div id="postmessage_623685" class="t_msgfont">要求 短信验证&nbsp;&nbsp;！&nbsp;&nbsp;怎么办？？ 根本就没有大陆的</div>

							
							
							
							
															<div id="post_rate_div_623685"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo623685_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://liyueovo.blogspot.com" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=4464" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=42567&amp;repquote=623685&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 623685)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_15"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid623754" summary="pid623754" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=4964" target="_blank" id="userinfo623754" class="dropmenu" onmouseover="showMenu(this.id)">xifanliang</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">有事请Reply  @xifanliang</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=4964">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=4964&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_16" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum623754" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=42567&page=1#pid623754', '话题链接已经复制到剪贴板')">17楼</strong>
													<em onclick="$('postmessage_623754').className='t_bigfont'">大</em>							<em onclick="$('postmessage_623754').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_623754').className='t_smallfont'">小</em>												发表于 2010-5-18 22:01&nbsp;																					<a href="viewthread.php?tid=42567&amp;page=1&amp;authorid=4964" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_16"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_16"></div><div id="ad_thread4_16"></div>
						
						
																											<div id="postmessage_623754" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>老驴快跑</i> 于 2010-5-18 21:24 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=623685&amp;ptid=42567" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
要求 短信验证&nbsp;&nbsp;！&nbsp;&nbsp;怎么办？？ 根本就没有大陆的 </blockquote></div>国家列表选择Other<br />
然后输入你的手机号<br />
例如+86 13888888888</div>

							
							
							
							
															<div id="post_rate_div_623754"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo623754_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=4964" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=42567&amp;repquote=623754&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 623754)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_16"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid623765" summary="pid623765" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=4464" target="_blank" id="userinfo623765" class="dropmenu" onmouseover="showMenu(this.id)">老驴快跑</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">裆卫军</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=4464">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=4464&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_17" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum623765" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=42567&page=1#pid623765', '话题链接已经复制到剪贴板')">18楼</strong>
													<em onclick="$('postmessage_623765').className='t_bigfont'">大</em>							<em onclick="$('postmessage_623765').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_623765').className='t_smallfont'">小</em>												发表于 2010-5-18 22:07&nbsp;																					<a href="viewthread.php?tid=42567&amp;page=1&amp;authorid=4464" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_17"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_17"></div><div id="ad_thread4_17"></div>
						
						
																											<div id="postmessage_623765" class="t_msgfont">搭载成功了&nbsp; &nbsp;谢谢</div>

							
							
							
							
															<div id="post_rate_div_623765"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo623765_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://liyueovo.blogspot.com" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=4464" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=42567&amp;repquote=623765&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 623765)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_17"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid623969" summary="pid623969" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2921" target="_blank" id="userinfo623969" class="dropmenu" onmouseover="showMenu(this.id)">zhuanwan</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2921">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2921&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_18" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum623969" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=42567&page=1#pid623969', '话题链接已经复制到剪贴板')">19楼</strong>
													<em onclick="$('postmessage_623969').className='t_bigfont'">大</em>							<em onclick="$('postmessage_623969').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_623969').className='t_smallfont'">小</em>												发表于 2010-5-19 00:14&nbsp;																					<a href="viewthread.php?tid=42567&amp;page=1&amp;authorid=2921" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_18"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_18"></div><div id="ad_thread4_18"></div>
						
						
																											<div id="postmessage_623969" class="t_msgfont">还有更简单的方案，无技术门槛不用自己建：<a href="http://www.apigee.com" target="_blank">www.apigee.com</a>，低调使用，谨慎传播。</div>

							
							
							
							
															<div id="post_rate_div_623969"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo623969_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=2921" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=42567&amp;repquote=623969&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 623969)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_18"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid808264" summary="pid808264" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=3075" target="_blank" id="userinfo808264" class="dropmenu" onmouseover="showMenu(this.id)">『麒』祖</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=3075">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=3075&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_19" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum808264" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=42567&page=1#pid808264', '话题链接已经复制到剪贴板')">20楼</strong>
													<em onclick="$('postmessage_808264').className='t_bigfont'">大</em>							<em onclick="$('postmessage_808264').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_808264').className='t_smallfont'">小</em>												发表于 2010-9-2 02:15&nbsp;																					<a href="viewthread.php?tid=42567&amp;page=1&amp;authorid=3075" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_19"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_19"></div><div id="ad_thread4_19"></div>
						
						
																											<div id="postmessage_808264" class="t_msgfont">GAE被干掉了。。。还有别的办法么？求助</div>

							
							
							
							
															<div id="post_rate_div_808264"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo808264_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=3075" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=42567&amp;repquote=808264&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 808264)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_19"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid808267" summary="pid808267" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 <a name="lastpost"></a>					<cite>											<a href="space.php?uid=4135" target="_blank" id="userinfo808267" class="dropmenu" onmouseover="showMenu(this.id)">kronos1980</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">ziwu</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=4135">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=4135&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_20" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum808267" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=42567&page=1#pid808267', '话题链接已经复制到剪贴板')">21楼</strong>
													<em onclick="$('postmessage_808267').className='t_bigfont'">大</em>							<em onclick="$('postmessage_808267').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_808267').className='t_smallfont'">小</em>												发表于 2010-9-2 02:32&nbsp;																					<a href="viewthread.php?tid=42567&amp;page=1&amp;authorid=4135" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_20"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_20"></div><div id="ad_thread4_20"></div>
						
						
																											<div id="postmessage_808267" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>『麒』祖</i> 于 2010-9-2 02:15 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=808264&amp;ptid=42567" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
GAE被干掉了。。。还有别的办法么？求助 </blockquote></div>gae不加密还没有被干掉</div>

							
							
							
							
															<div id="post_rate_div_808267"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo808267_menu" style="display: none;">
										<div class="imicons">
												<a href="http://wpa.qq.com/msgrd?V=1&amp;Uin=304479145&amp;Site=1984bbs.com&amp;Menu=yes" target="_blank"><img src="images/default/qq.gif" alt="QQ" /></a>																							</div>
										<dl></dl>
										<p><a href="space.php?uid=4135" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=42567&amp;repquote=808267&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 808267)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_20"></div>				</div>
			</td>
		</tr>
		</table>
		</div>
</form>





<div class="pages_btns">
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=42567&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=42567&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
				<span class="postbtn" id="newspecialtmp" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=42567&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

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

	<form method="post" id="postform" action="post.php?action=reply&amp;fid=26&amp;tid=42567&amp;extra=&amp;replysubmit=yes" onSubmit="return validate(this)">
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
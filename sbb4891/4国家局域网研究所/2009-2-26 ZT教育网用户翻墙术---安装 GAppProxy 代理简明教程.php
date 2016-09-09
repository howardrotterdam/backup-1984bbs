<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<title>ZT教育网用户翻墙术---安装 GAppProxy 代理简明教程 - 国家局域网研究所 -  1984bbs.com </title>
<meta name="keywords" content="" />
<meta name="MSSmartTagsPreventParsing" content="True" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<link rel="archives" title="1984bbs.com" href="https://1984bbs.com/archiver/" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_viewthread.css" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_common.css" />
<script type="text/javascript">
	var discuz_uid = 13019;var IMGDIR = 'images/default';var attackevasive = '0';var gid = 0;var STYLEID = '1';
	gid = parseInt('3');var fid = parseInt('26');var tid = parseInt('5745');
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
			<p><a href="index.php" id="forumlist" onmouseover="showMenu(this.id)" class="dropmenu">1984bbs.com</a> &raquo; <a href="forumdisplay.php?fid=26">国家局域网研究所</a> &raquo; ZT教育网用户翻墙术---安装 GAppProxy 代理简明教程</p>
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
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=5745&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=5745&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
				<span class="postbtn" id="newspecial" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=5745&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

	<ul class="popupmenu_popup newspecialmenu" id="newspecial_menu" style="display: none">
		<li><a href="post.php?action=newthread&amp;fid=26&amp;extra=">发新话题</a></li>
		<li class="poll"><a href="post.php?action=newthread&amp;fid=26&amp;extra=&amp;special=1">发布投票</a></li>													</ul>

<form method="post" name="modactions">
	<input type="hidden" name="formhash" value="823c9fa2" />
	<div class="mainbox viewthread">
		<span class="headactions">
					<a href="my.php?item=favorites&amp;tid=5745" id="ajax_favorite" onclick="ajaxmenu(event, this.id, 3000, 0)">收藏</a>
			<a href="my.php?item=subscriptions&amp;subadd=5745" id="ajax_subscription" onclick="ajaxmenu(event, this.id, 3000, null, 0)">订阅</a>
			<a href="misc.php?action=emailfriend&amp;tid=5745" id="emailfriend" onclick="ajaxmenu(event, this.id, 9000000, null, 0)">推荐</a>
				<a href="viewthread.php?action=printable&amp;tid=5745" target="_blank" class="notabs">打印</a>
				</span>
		<h1>ZT教育网用户翻墙术---安装 GAppProxy 代理简明教程		</h1>
				<ins>
						<a href="misc.php?action=viewthreadmod&amp;tid=5745" title="主题操作记录" target="_blank">本主题由 库存袈裟 于 2009-12-22 16:01 分类</a>								</ins>
							<table id="pid40028" summary="pid40028" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=3108" target="_blank" id="userinfo40028" class="dropmenu" onmouseover="showMenu(this.id)">钱不是问题</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=3108">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=3108&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_0" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum40028" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=5745&page=1#pid40028', '话题链接已经复制到剪贴板')">1楼</strong>
													<em onclick="$('postmessage_40028').className='t_bigfont'">大</em>							<em onclick="$('postmessage_40028').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_40028').className='t_smallfont'">小</em>												发表于 2009-2-26 12:23&nbsp;																					<a href="viewthread.php?tid=5745&amp;page=1&amp;authorid=3108" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_0"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_0"></div><div id="ad_thread4_0"></div>
													<h2>ZT教育网用户翻墙术---安装 GAppProxy 代理简明教程</h2>
						
						
																											<div id="postmessage_40028" class="t_msgfont"><a href="http://www.appinn.com/install-gappproxy-guide/" target="_blank">http://www.appinn.com/install-gappproxy-guide/</a><br />
<br />
GAppProxy 是什么？ <br />
GAppProxy 是基于 Google app engine，为教育网用户提供一个免费的国际代理。由于借助了 Google 强大的服务器，所有也适用于公网的代理。<br />
<br />
Google app engine 是什么？ <br />
Google app engine 是 Google 提供的一个在线应用程序平台，支持 Python。简单的说是在 Google app engine 上面直接运行用 Python 写的程序，由 Google app engine 提供网络空间和带宽。<br />
<br />
<br />
用 GAppProxy 能干什么？ <br />
如果你在教育网，你可以把 GAppProxy 当作一个国际代理服务器，类似搜狗浏览器的教育网加速。<br />
如果你在公网，正常情况下用不到 GAppProxy，但如果想访问某些“低俗网站”，还是用得到的。<br />
<br />
_________________<br />
详细安装步骤<br />
<br />
1.<br />
注册 Google App Engine（<a href="http://appengine.google.com/" target="_blank">http://appengine.google.com/</a>）: 用 Google 账户 登录 Google App Engine 后，点击 Create an Application 创建一个应用程序。 <br />
<br />
2.<br />
输入手机号码，接受创建验证码，必须有此过程，否则无法注册成功。（国家选other，手机号前面要加上［+86］）<br />
（这个应该是免费的，但是免费版有流量限制。存在流量可能超限的情况。如用户每日App Engine的CPU Time不超过6.5小时，发送和接收的数据不超过1GB，则可继续免费使用该服务。）<br />
3.<br />
输入验证码后就进入了创建应用程序的详细设置界面。 <br />
<br />
4.<br />
填写 Application Identifier (输入你想要的应用程序地址，相应会得到一个 yourname.appspot.com 的域名，记住这个。) 和 Application Title (标题，随意啦)以及勾选同意服务条款，点 Save 即完成创建。<br />
<br />
5.<br />
下载并安装 Python 和 Google App Engine SKD <br />
直接下载地址: Python （<a href="http://www.python.org/ftp/python/2.6.1/python-2.6.1.msi" target="_blank">http://www.python.org/ftp/python/2.6.1/python-2.6.1.msi</a>）| <br />
Google App Engine SDK（<a href="http://googleappengine.googlecode.com/files/GoogleAppEngine_1.1.9.msi" target="_blank">http://googleappengine.googlecod ... AppEngine_1.1.9.msi</a>）<br />
<br />
6.<br />
下载 GappProxy 和 fetchServer <br />
直接下载地址: GappProxy（<a href="http://gappproxy.googlecode.com/files/GAppProxy.r63.exe" target="_blank">http://gappproxy.googlecode.com/files/GAppProxy.r63.exe</a>） | <br />
fetchServer（<a href="http://gappproxy.googlecode.com/files/GAppProxy.r63.exe" target="_blank">http://gappproxy.googlecode.com/files/GAppProxy.r63.exe</a>）<br />
<br />
7.<br />
解压缩 fetchServer 文件夹至 Google App Engine SKD 安装目录，默认为 X:\Program Files\Google\google_appengine\fetchserver。<br />
<br />
8.<br />
用文本编辑器打开刚解压的 fetchServer 文件夹内的 app.yaml 文件，修改第一行 your_application_name 为刚才输入的 Application Identifier，yourname.appspot.com 中的 yourname。<br />
<br />
9.<br />
上传 fetchserver<br />
打开命令提示符(点击 开始 &gt; 运行 &gt; cmd)，进入 X:\Program Files\Google\google_appengine 目录(输入 cd X:\Program Files\Google\google_appengine\ 即可)，输入以下命令行: appcfg.py update fetchserver，回车，会要求你输入 Google 账户及密码，之后关闭结束上传。<br />
<br />
10.<br />
测试 fetchserver：打开浏览器，进入 <a href="http://yourname.appspot.com/fetch.py" target="_blank">http://yourname.appspot.com/fetch.py</a> 如果得到下面的页面，证明安装成功。 <br />
=================<br />
GAppProxy已经在工作了<br />
=================<br />
<br />
11.<br />
使用代理: 解压缩 GappProxy 至任意文件夹，打开 gui.exe，勾选 Use FetchServer 并输入 <a href="http://yourname.appspot.com/fetch.py" target="_blank">http://yourname.appspot.com/fetch.py</a> ,点 save，顺手点击 Status 确认代理运行正常。 <br />
<br />
12.<br />
挂上代理 127.0.0.1:8000 开始上网吧</div>

							
							
							
							
															<div id="post_rate_div_40028"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo40028_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=3108" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=5745&amp;repquote=40028&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 40028)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_0"></div>				</div>
			</td>
		</tr>
		</table>
		</div><div class="ad_column" id="ad_interthread"><a href="/viewthread.php?tid=54699" target="_blank" style="color:red;">1984bbs是一个非营利项目，它需要您的捐助！</font></a>		</div>
	<div class="mainbox viewthread">
			<table id="pid40031" summary="pid40031" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=3108" target="_blank" id="userinfo40031" class="dropmenu" onmouseover="showMenu(this.id)">钱不是问题</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=3108">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=3108&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_1" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum40031" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=5745&page=1#pid40031', '话题链接已经复制到剪贴板')">2楼</strong>
													<em onclick="$('postmessage_40031').className='t_bigfont'">大</em>							<em onclick="$('postmessage_40031').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_40031').className='t_smallfont'">小</em>												发表于 2009-2-26 12:24&nbsp;																					<a href="viewthread.php?tid=5745&amp;page=1&amp;authorid=3108" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_1"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_1"></div><div id="ad_thread4_1"></div>
													<h2>希望不要火星……</h2>
						
						
																											<div id="postmessage_40031" class="t_msgfont">我装上之后，的确非常快，比戴Tor快得多，虽然安的时候比较费时……</div>

							
							
							
							
															<div id="post_rate_div_40031"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo40031_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=3108" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=5745&amp;repquote=40031&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 40031)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_1"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid40049" summary="pid40049" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=3108" target="_blank" id="userinfo40049" class="dropmenu" onmouseover="showMenu(this.id)">钱不是问题</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=3108">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=3108&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_2" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum40049" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=5745&page=1#pid40049', '话题链接已经复制到剪贴板')">3楼</strong>
													<em onclick="$('postmessage_40049').className='t_bigfont'">大</em>							<em onclick="$('postmessage_40049').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_40049').className='t_smallfont'">小</em>												发表于 2009-2-26 12:36&nbsp;																					<a href="viewthread.php?tid=5745&amp;page=1&amp;authorid=3108" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_2"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_2"></div><div id="ad_thread4_2"></div>
						
						
																											<div id="postmessage_40049" class="t_msgfont">明明是在FREE TALK 里发的，怎么出现在这里来了?</div>

							
							
							
							
															<div id="post_rate_div_40049"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo40049_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=3108" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=5745&amp;repquote=40049&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 40049)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_2"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid45084" summary="pid45084" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2256" target="_blank" id="userinfo45084" class="dropmenu" onmouseover="showMenu(this.id)">丝丝兔</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">专业围观群众</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2256">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2256&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_3" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum45084" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=5745&page=1#pid45084', '话题链接已经复制到剪贴板')">4楼</strong>
													<em onclick="$('postmessage_45084').className='t_bigfont'">大</em>							<em onclick="$('postmessage_45084').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_45084').className='t_smallfont'">小</em>												发表于 2009-3-5 15:29&nbsp;																					<a href="viewthread.php?tid=5745&amp;page=1&amp;authorid=2256" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_3"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_3"></div><div id="ad_thread4_3"></div>
						
						
																											<div id="postmessage_45084" class="t_msgfont">2.<br />
输入手机号码，接受创建验证码，必须有此过程，否则无法注册成功。（国家选other，手机号前面要加上［+86］）<br />
（这个应该是免费的，但是免费版有流量限制。存在流量可能超限的情况。如用户每日App Engine的CPU Time不超过6.5小时，发送和接收的数据不超过1GB，则可继续免费使用该服务。）<br />
<br />
收不到验证码~~~~~~</div>

							
							
							
							
															<div id="post_rate_div_45084"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo45084_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=2256" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=5745&amp;repquote=45084&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 45084)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_3"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid45129" summary="pid45129" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2256" target="_blank" id="userinfo45129" class="dropmenu" onmouseover="showMenu(this.id)">丝丝兔</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">专业围观群众</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2256">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2256&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_4" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum45129" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=5745&page=1#pid45129', '话题链接已经复制到剪贴板')">5楼</strong>
													<em onclick="$('postmessage_45129').className='t_bigfont'">大</em>							<em onclick="$('postmessage_45129').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_45129').className='t_smallfont'">小</em>												发表于 2009-3-5 16:07&nbsp;																					<a href="viewthread.php?tid=5745&amp;page=1&amp;authorid=2256" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_4"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_4"></div><div id="ad_thread4_4"></div>
						
						
																											<div id="postmessage_45129" class="t_msgfont">呼呼，终于搞定了！用了差不多半个钟头呢！</div>

							
							
							
							
															<div id="post_rate_div_45129"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo45129_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=2256" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=5745&amp;repquote=45129&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 45129)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_4"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid96756" summary="pid96756" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2963" target="_blank" id="userinfo96756" class="dropmenu" onmouseover="showMenu(this.id)">huangqinfeifei</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">叫我feifei吧http://t.qq.com/huangqinfeifei</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2963">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2963&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_5" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum96756" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=5745&page=1#pid96756', '话题链接已经复制到剪贴板')">6楼</strong>
													<em onclick="$('postmessage_96756').className='t_bigfont'">大</em>							<em onclick="$('postmessage_96756').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_96756').className='t_smallfont'">小</em>												发表于 2009-5-19 16:47&nbsp;																					<a href="viewthread.php?tid=5745&amp;page=1&amp;authorid=2963" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_5"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_5"></div><div id="ad_thread4_5"></div>
						
						
																											<div id="postmessage_96756" class="t_msgfont">mark</div>

							
							
							
							
															<div id="post_rate_div_96756"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo96756_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=2963" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=5745&amp;repquote=96756&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 96756)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_5"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid129773" summary="pid129773" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6778" target="_blank" id="userinfo129773" class="dropmenu" onmouseover="showMenu(this.id)">1984sb</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">哭著喊著奔幸福   @zj8nb  Bio 最是那一甩鼻涕的溫柔，仿佛一朵野菊花不勝菊爆的嬌羞。</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6778">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6778&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_6" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum129773" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=5745&page=1#pid129773', '话题链接已经复制到剪贴板')">7楼</strong>
													<em onclick="$('postmessage_129773').className='t_bigfont'">大</em>							<em onclick="$('postmessage_129773').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_129773').className='t_smallfont'">小</em>												发表于 2009-6-20 13:43&nbsp;																					<a href="viewthread.php?tid=5745&amp;page=1&amp;authorid=6778" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_6"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_6"></div><div id="ad_thread4_6"></div>
						
						
																											<div id="postmessage_129773" class="t_msgfont">麻烦我不怕，我比较担心网速。</div>

							
							
							
							
															<div id="post_rate_div_129773"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo129773_menu" style="display: none;">
										<div class="imicons">
													<a target='_blank' href='http://settings.messenger.live.com/Conversation/IMMe.aspx?invitee=nc.evil@live.cn&mkt=zh-cn'><img style='border-style: none;' src='http://messenger.services.live.com/users/nc.evil@live.cn/presenceimage?mkt=zh-cn' width='16' height='16' /></a>
												<a href="http://wpa.qq.com/msgrd?V=1&amp;Uin=695222232&amp;Site=1984bbs.com&amp;Menu=yes" target="_blank"><img src="images/default/qq.gif" alt="QQ" /></a>																							</div>
										<dl></dl>
											<p><a href="http://zj8nb.blogspot.com/" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=6778" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=5745&amp;repquote=129773&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 129773)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_6"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid153749" summary="pid153749" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7336" target="_blank" id="userinfo153749" class="dropmenu" onmouseover="showMenu(this.id)">specially</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus"> twitter@yxingbin</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7336">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7336&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_7" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum153749" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=5745&page=1#pid153749', '话题链接已经复制到剪贴板')">8楼</strong>
													<em onclick="$('postmessage_153749').className='t_bigfont'">大</em>							<em onclick="$('postmessage_153749').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_153749').className='t_smallfont'">小</em>												发表于 2009-7-8 20:16&nbsp;																					<a href="viewthread.php?tid=5745&amp;page=1&amp;authorid=7336" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_7"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_7"></div><div id="ad_thread4_7"></div>
						
						
																											<div id="postmessage_153749" class="t_msgfont">折腾了大半个小时，终于顺利翻墙，非常好，速度也快，谢楼主。但其中第六条，<br />
6.<br />
下载 GappProxy 和 fetchServer<br />
直接下载地址: GappProxy（<a href="http://gappproxy.googlecode.com/files/GAppProxy.r63.exe" target="_blank">http://gappproxy.googlecode.com/files/GAppProxy.r63.exe</a>） |<br />
fetchServer（<a href="http://gappproxy.googlecode.com/files/GAppProxy.r63.exe" target="_blank">http://gappproxy.googlecode.com/files/GAppProxy.r63.exe</a>）<br />
------------------------------------------------------------<br />
GappProxy&nbsp; &nbsp; 和&nbsp;&nbsp;fetchServer 的下载地址相同，fetchServer的地址是错的，不妨试试这个<a href="http://gappproxy.googlecode.com/files/fetchserver-1.0.0beta-fix.tar.gz" target="_blank">http://gappproxy.googlecode.com/ ... .0.0beta-fix.tar.gz</a>&nbsp; &nbsp;。<br />
再次谢楼主，这个方法非常适合教育网内，我现在是IE设代理，翻墙，firefox还是直接用，墙内墙外随便跳。<br />
<br />
设置还不对的朋友们也可参考下这里<a href="http://skydao.com/post/google-app-engine-to-do-with-personal-proxy-server-second-edition/" target="_blank">http://skydao.com/post/google-ap ... ver-second-edition/</a></div>

							
							
							
							
															<div id="post_rate_div_153749"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo153749_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=7336" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=5745&amp;repquote=153749&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 153749)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_7"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid156262" summary="pid156262" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=5516" target="_blank" id="userinfo156262" class="dropmenu" onmouseover="showMenu(this.id)">王小嗨</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=5516">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=5516&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_8" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum156262" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=5745&page=1#pid156262', '话题链接已经复制到剪贴板')">9楼</strong>
													<em onclick="$('postmessage_156262').className='t_bigfont'">大</em>							<em onclick="$('postmessage_156262').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_156262').className='t_smallfont'">小</em>												发表于 2009-7-10 01:34&nbsp;																					<a href="viewthread.php?tid=5745&amp;page=1&amp;authorid=5516" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_8"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_8"></div><div id="ad_thread4_8"></div>
						
						
																											<div id="postmessage_156262" class="t_msgfont">请问ubuntu怎样设置？谢谢</div>

							
							
							
							
															<div id="post_rate_div_156262"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo156262_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=5516" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=5745&amp;repquote=156262&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 156262)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_8"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid157243" summary="pid157243" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7253" target="_blank" id="userinfo157243" class="dropmenu" onmouseover="showMenu(this.id)">orz.z</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">上班比上坟还沉重</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7253">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7253&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_9" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum157243" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=5745&page=1#pid157243', '话题链接已经复制到剪贴板')">10楼</strong>
													<em onclick="$('postmessage_157243').className='t_bigfont'">大</em>							<em onclick="$('postmessage_157243').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_157243').className='t_smallfont'">小</em>												发表于 2009-7-10 17:24&nbsp;																					<a href="viewthread.php?tid=5745&amp;page=1&amp;authorid=7253" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_9"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_9"></div><div id="ad_thread4_9"></div>
						
						
																											<div id="postmessage_157243" class="t_msgfont">网速快就好~~</div>

							
							
							
							
															<div id="post_rate_div_157243"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo157243_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=7253" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=5745&amp;repquote=157243&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 157243)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_9"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid157480" summary="pid157480" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=4292" target="_blank" id="userinfo157480" class="dropmenu" onmouseover="showMenu(this.id)">02304H</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">10001100000100B</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=4292">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=4292&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_10" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum157480" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=5745&page=1#pid157480', '话题链接已经复制到剪贴板')">11楼</strong>
													<em onclick="$('postmessage_157480').className='t_bigfont'">大</em>							<em onclick="$('postmessage_157480').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_157480').className='t_smallfont'">小</em>												发表于 2009-7-10 19:46&nbsp;																					<a href="viewthread.php?tid=5745&amp;page=1&amp;authorid=4292" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_10"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_10"></div><div id="ad_thread4_10"></div>
						
						
																											<div id="postmessage_157480" class="t_msgfont">如果有ipv6的话，sixxs.org堪称教育网最佳翻墙方案<br />
只可惜，不能看youtube</div>

							
							
							
							
															<div id="post_rate_div_157480"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo157480_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=4292" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=5745&amp;repquote=157480&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 157480)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_10"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid187124" summary="pid187124" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=5203" target="_blank" id="userinfo187124" class="dropmenu" onmouseover="showMenu(this.id)">roricon</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=5203">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=5203&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_11" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum187124" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=5745&page=1#pid187124', '话题链接已经复制到剪贴板')">12楼</strong>
													<em onclick="$('postmessage_187124').className='t_bigfont'">大</em>							<em onclick="$('postmessage_187124').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_187124').className='t_smallfont'">小</em>												发表于 2009-8-1 17:52&nbsp;																					<a href="viewthread.php?tid=5745&amp;page=1&amp;authorid=5203" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_11"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_11"></div><div id="ad_thread4_11"></div>
						
						
																											<div id="postmessage_187124" class="t_msgfont">不行啊。看youtube会被要求输入验证码。而且无法打开视频。。。</div>

							
							
							
							
															<div id="post_rate_div_187124"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo187124_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=5203" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=5745&amp;repquote=187124&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 187124)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_11"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid217455" summary="pid217455" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2584" target="_blank" id="userinfo217455" class="dropmenu" onmouseover="showMenu(this.id)">康则阳</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2584">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2584&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_12" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum217455" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=5745&page=1#pid217455', '话题链接已经复制到剪贴板')">13楼</strong>
													<em onclick="$('postmessage_217455').className='t_bigfont'">大</em>							<em onclick="$('postmessage_217455').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_217455').className='t_smallfont'">小</em>												发表于 2009-8-28 06:41&nbsp;																					<a href="viewthread.php?tid=5745&amp;page=1&amp;authorid=2584" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_12"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_12"></div><div id="ad_thread4_12"></div>
						
						
																											<div id="postmessage_217455" class="t_msgfont">提示要输密码，可是键盘怎么按都没用了。</div>

							
							
							
							
															<div id="post_rate_div_217455"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo217455_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=2584" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=5745&amp;repquote=217455&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 217455)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_12"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid217558" summary="pid217558" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=3108" target="_blank" id="userinfo217558" class="dropmenu" onmouseover="showMenu(this.id)">钱不是问题</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=3108">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=3108&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_13" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum217558" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=5745&page=1#pid217558', '话题链接已经复制到剪贴板')">14楼</strong>
													<em onclick="$('postmessage_217558').className='t_bigfont'">大</em>							<em onclick="$('postmessage_217558').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_217558').className='t_smallfont'">小</em>												发表于 2009-8-28 09:51&nbsp;																					<a href="viewthread.php?tid=5745&amp;page=1&amp;authorid=3108" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_13"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_13"></div><div id="ad_thread4_13"></div>
													<h2>回复 13楼 康则阳 的话题</h2>
						
						
																											<div id="postmessage_217558" class="t_msgfont">假象。。。都是假象。。。<br />
虽然屏幕上没显示，但确实是输入了，只要你输完密码确认就行了</div>

							
							
							
							
															<div id="post_rate_div_217558"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo217558_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=3108" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=5745&amp;repquote=217558&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 217558)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_13"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid217797" summary="pid217797" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7939" target="_blank" id="userinfo217797" class="dropmenu" onmouseover="showMenu(this.id)">刘项</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7939">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7939&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_14" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum217797" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=5745&page=1#pid217797', '话题链接已经复制到剪贴板')">15楼</strong>
													<em onclick="$('postmessage_217797').className='t_bigfont'">大</em>							<em onclick="$('postmessage_217797').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_217797').className='t_smallfont'">小</em>												发表于 2009-8-28 12:28&nbsp;																					<a href="viewthread.php?tid=5745&amp;page=1&amp;authorid=7939" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_14"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_14"></div><div id="ad_thread4_14"></div>
						
						
																											<div id="postmessage_217797" class="t_msgfont">为什么不行？已经提示grpoxy正常工作，客户端也设置完毕，IE更改了LAN的代理地址127.0.0.1 ：8000<br />
却不能使用，哪位兄弟，知道怎么回事？<br />
PS：我是教育网用户</div>

							
							
							
							
															<div id="post_rate_div_217797"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo217797_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=7939" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=5745&amp;repquote=217797&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 217797)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_14"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid217803" summary="pid217803" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7939" target="_blank" id="userinfo217803" class="dropmenu" onmouseover="showMenu(this.id)">刘项</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7939">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7939&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_15" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum217803" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=5745&page=1#pid217803', '话题链接已经复制到剪贴板')">16楼</strong>
													<em onclick="$('postmessage_217803').className='t_bigfont'">大</em>							<em onclick="$('postmessage_217803').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_217803').className='t_smallfont'">小</em>												发表于 2009-8-28 12:35&nbsp;																					<a href="viewthread.php?tid=5745&amp;page=1&amp;authorid=7939" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_15"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_15"></div><div id="ad_thread4_15"></div>
						
						
																											<div id="postmessage_217803" class="t_msgfont">看来gappproxy有时不好用，不少人遇到过问题。<br />
<a href="http://www.zhangjingwei.com/archives/gappproxy-%E4%B8%8D%E8%83%BD%E7%94%A8%E4%BA%86%E5%90%97%EF%BC%9F/" target="_blank">http://www.zhangjingwei.com/arch ... %E5%90%97%EF%BC%9F/</a></div>

							
							
							
							
															<div id="post_rate_div_217803"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo217803_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=7939" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=5745&amp;repquote=217803&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 217803)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_15"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid222823" summary="pid222823" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1472" target="_blank" id="userinfo222823" class="dropmenu" onmouseover="showMenu(this.id)">oppoppo</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1472">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1472&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_16" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum222823" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=5745&page=1#pid222823', '话题链接已经复制到剪贴板')">17楼</strong>
													<em onclick="$('postmessage_222823').className='t_bigfont'">大</em>							<em onclick="$('postmessage_222823').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_222823').className='t_smallfont'">小</em>												发表于 2009-9-1 22:14&nbsp;																					<a href="viewthread.php?tid=5745&amp;page=1&amp;authorid=1472" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_16"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_16"></div><div id="ad_thread4_16"></div>
						
						
																											<div id="postmessage_222823" class="t_msgfont">累得半死，终于成功。</div>

							
							
							
							
															<div id="post_rate_div_222823"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo222823_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1472" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=5745&amp;repquote=222823&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 222823)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_16"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid222836" summary="pid222836" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1472" target="_blank" id="userinfo222836" class="dropmenu" onmouseover="showMenu(this.id)">oppoppo</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1472">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1472&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_17" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum222836" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=5745&page=1#pid222836', '话题链接已经复制到剪贴板')">18楼</strong>
													<em onclick="$('postmessage_222836').className='t_bigfont'">大</em>							<em onclick="$('postmessage_222836').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_222836').className='t_smallfont'">小</em>												发表于 2009-9-1 22:23&nbsp;																					<a href="viewthread.php?tid=5745&amp;page=1&amp;authorid=1472" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_17"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_17"></div><div id="ad_thread4_17"></div>
						
						
																											<div id="postmessage_222836" class="t_msgfont">浏览器用IE不能上，火狐可以用，不过推特只能到首页，进不去。</div>

							
							
							
							
															<div id="post_rate_div_222836"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo222836_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1472" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=5745&amp;repquote=222836&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 222836)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_17"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid222902" summary="pid222902" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7766" target="_blank" id="userinfo222902" class="dropmenu" onmouseover="showMenu(this.id)">麦圆</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">Twitter @math2gold | 惊诧的火星友邦 |  咪咪是 /math2ogld　</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7766">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7766&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_18" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum222902" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=5745&page=1#pid222902', '话题链接已经复制到剪贴板')">19楼</strong>
													<em onclick="$('postmessage_222902').className='t_bigfont'">大</em>							<em onclick="$('postmessage_222902').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_222902').className='t_smallfont'">小</em>												发表于 2009-9-1 23:31&nbsp;																					<a href="viewthread.php?tid=5745&amp;page=1&amp;authorid=7766" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_18"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_18"></div><div id="ad_thread4_18"></div>
						
						
																											<div id="postmessage_222902" class="t_msgfont">现在appspot不修改ip都不访问不了啦……</div>

							
							
							
							
															<div id="post_rate_div_222902"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo222902_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://math2gold.com/" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=7766" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=5745&amp;repquote=222902&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 222902)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_18"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid234108" summary="pid234108" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6860" target="_blank" id="userinfo234108" class="dropmenu" onmouseover="showMenu(this.id)">StoneFire</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6860">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6860&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_19" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum234108" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=5745&page=1#pid234108', '话题链接已经复制到剪贴板')">20楼</strong>
													<em onclick="$('postmessage_234108').className='t_bigfont'">大</em>							<em onclick="$('postmessage_234108').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_234108').className='t_smallfont'">小</em>												发表于 2009-9-9 22:41&nbsp;																					<a href="viewthread.php?tid=5745&amp;page=1&amp;authorid=6860" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_19"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_19"></div><div id="ad_thread4_19"></div>
						
						
																											<div id="postmessage_234108" class="t_msgfont">搞不定=。=第9步安完了<br />
10的链接打不开</div>

							
							
							
							
															<div id="post_rate_div_234108"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo234108_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=6860" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=5745&amp;repquote=234108&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 234108)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_19"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid252096" summary="pid252096" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2393" target="_blank" id="userinfo252096" class="dropmenu" onmouseover="showMenu(this.id)">蚊驱</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2393">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2393&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_20" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum252096" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=5745&page=1#pid252096', '话题链接已经复制到剪贴板')">21楼</strong>
													<em onclick="$('postmessage_252096').className='t_bigfont'">大</em>							<em onclick="$('postmessage_252096').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_252096').className='t_smallfont'">小</em>												发表于 2009-9-21 23:54&nbsp;																					<a href="viewthread.php?tid=5745&amp;page=1&amp;authorid=2393" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_20"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_20"></div><div id="ad_thread4_20"></div>
						
						
																											<div id="postmessage_252096" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>麦圆</i> 于 2009-9-1 23:31 发表 <a href="http://1984bbs.com/redirect.php?goto=findpost&amp;pid=222902&amp;ptid=5745" target="_blank"><img src="http://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
现在appspot不修改ip都不访问不了啦…… </blockquote></div>？？？</div>

							
							
							
							
															<div id="post_rate_div_252096"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo252096_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=2393" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=5745&amp;repquote=252096&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 252096)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_20"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid255981" summary="pid255981" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6872" target="_blank" id="userinfo255981" class="dropmenu" onmouseover="showMenu(this.id)">浅洚</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">未婚无业女青年 twitter @knifepoint</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6872">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6872&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_21" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum255981" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=5745&page=1#pid255981', '话题链接已经复制到剪贴板')">22楼</strong>
													<em onclick="$('postmessage_255981').className='t_bigfont'">大</em>							<em onclick="$('postmessage_255981').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_255981').className='t_smallfont'">小</em>												发表于 2009-9-24 20:44&nbsp;																					<a href="viewthread.php?tid=5745&amp;page=1&amp;authorid=6872" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_21"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_21"></div><div id="ad_thread4_21"></div>
						
						
																											<div id="postmessage_255981" class="t_msgfont">在GFW今天发疯之后，现在这个还能用么……？</div>

							
							
							
							
															<div id="post_rate_div_255981"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo255981_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://bluishrune.blog124.fc2blog.net/" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=6872" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=5745&amp;repquote=255981&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 255981)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_21"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid263071" summary="pid263071" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6886" target="_blank" id="userinfo263071" class="dropmenu" onmouseover="showMenu(this.id)">宪哥</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6886">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6886&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_22" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum263071" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=5745&page=1#pid263071', '话题链接已经复制到剪贴板')">23楼</strong>
													<em onclick="$('postmessage_263071').className='t_bigfont'">大</em>							<em onclick="$('postmessage_263071').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_263071').className='t_smallfont'">小</em>												发表于 2009-9-29 12:38&nbsp;																					<a href="viewthread.php?tid=5745&amp;page=1&amp;authorid=6886" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_22"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_22"></div><div id="ad_thread4_22"></div>
						
						
																											<div id="postmessage_263071" class="t_msgfont">mark too！</div>

							
							
							
							
															<div id="post_rate_div_263071"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo263071_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=6886" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=5745&amp;repquote=263071&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 263071)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_22"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid263138" summary="pid263138" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=464" target="_blank" id="userinfo263138" class="dropmenu" onmouseover="showMenu(this.id)">Phillip</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">路边社特邀围观群众</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=464">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=464&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_23" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum263138" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=5745&page=1#pid263138', '话题链接已经复制到剪贴板')">24楼</strong>
													<em onclick="$('postmessage_263138').className='t_bigfont'">大</em>							<em onclick="$('postmessage_263138').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_263138').className='t_smallfont'">小</em>												发表于 2009-9-29 13:50&nbsp;																					<a href="viewthread.php?tid=5745&amp;page=1&amp;authorid=464" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_23"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_23"></div><div id="ad_thread4_23"></div>
						
						
																											<div id="postmessage_263138" class="t_msgfont">验证码收不到啊!</div>

							
							
							
							
															<div id="post_rate_div_263138"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo263138_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=464" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=5745&amp;repquote=263138&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 263138)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_23"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid263174" summary="pid263174" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8396" target="_blank" id="userinfo263174" class="dropmenu" onmouseover="showMenu(this.id)">youttiao</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">微博PM</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8396">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8396&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_24" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum263174" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=5745&page=1#pid263174', '话题链接已经复制到剪贴板')">25楼</strong>
													<em onclick="$('postmessage_263174').className='t_bigfont'">大</em>							<em onclick="$('postmessage_263174').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_263174').className='t_smallfont'">小</em>												发表于 2009-9-29 14:17&nbsp;																					<a href="viewthread.php?tid=5745&amp;page=1&amp;authorid=8396" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_24"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_24"></div><div id="ad_thread4_24"></div>
						
						
																											<div id="postmessage_263174" class="t_msgfont">不能用了吧？</div>

							
							
							
							
															<div id="post_rate_div_263174"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo263174_menu" style="display: none;">
										<div class="imicons">
													<a target='_blank' href='http://settings.messenger.live.com/Conversation/IMMe.aspx?invitee=youtiao.5@gmail.com&mkt=zh-cn'><img style='border-style: none;' src='http://messenger.services.live.com/users/youtiao.5@gmail.com/presenceimage?mkt=zh-cn' width='16' height='16' /></a>
												<a href="http://wpa.qq.com/msgrd?V=1&amp;Uin=344408183&amp;Site=1984bbs.com&amp;Menu=yes" target="_blank"><img src="images/default/qq.gif" alt="QQ" /></a>												<a href="http://edit.yahoo.com/config/send_webmesg?.target=youtiao_5@yahoo.com&amp;.src=pg" target="_blank"><img src="images/default/yahoo.gif" alt="Yahoo!"  /></a>						<script type="text/javascript">document.write('<a target="_blank" href="http://amos1.taobao.com/msg.ww?v=2&amp;uid='+encodeURIComponent('countermars')+'&amp;s=2"><img src="images/default/taobao.gif" alt="阿里旺旺" /></a>');</script>					</div>
										<dl></dl>
										<p><a href="space.php?uid=8396" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=5745&amp;repquote=263174&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 263174)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_24"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid263298" summary="pid263298" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=464" target="_blank" id="userinfo263298" class="dropmenu" onmouseover="showMenu(this.id)">Phillip</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">路边社特邀围观群众</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=464">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=464&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_25" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum263298" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=5745&page=1#pid263298', '话题链接已经复制到剪贴板')">26楼</strong>
													<em onclick="$('postmessage_263298').className='t_bigfont'">大</em>							<em onclick="$('postmessage_263298').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_263298').className='t_smallfont'">小</em>												发表于 2009-9-29 15:48&nbsp;																					<a href="viewthread.php?tid=5745&amp;page=1&amp;authorid=464" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_25"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_25"></div><div id="ad_thread4_25"></div>
						
						
																											<div id="postmessage_263298" class="t_msgfont">还可以用, 速度很快 不支持https</div>

							
							
							
							
															<div id="post_rate_div_263298"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo263298_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=464" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=5745&amp;repquote=263298&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 263298)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_25"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid273812" summary="pid273812" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6872" target="_blank" id="userinfo273812" class="dropmenu" onmouseover="showMenu(this.id)">浅洚</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">未婚无业女青年 twitter @knifepoint</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6872">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6872&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_26" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum273812" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=5745&page=1#pid273812', '话题链接已经复制到剪贴板')">27楼</strong>
													<em onclick="$('postmessage_273812').className='t_bigfont'">大</em>							<em onclick="$('postmessage_273812').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_273812').className='t_smallfont'">小</em>												发表于 2009-10-8 14:47&nbsp;																					<a href="viewthread.php?tid=5745&amp;page=1&amp;authorid=6872" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_26"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_26"></div><div id="ad_thread4_26"></div>
						
						
																											<div id="postmessage_273812" class="t_msgfont">菜鸟的安装心得：<br />
<br />
1.安装Google App Engine时候一定要安装在C:\Program Files文件夹下。<br />
<br />
2.修改fetchserver的app.yaml文件时候要相当小心，只删除your_application_name这些字母，换上自己用户名就行。别的地方不能动。<br />
<br />
3.上传 fetchserver 打开命令提示符(点击 开始 &gt; 运行 &gt; cmd)，进入 X:\Program Files\Google\google_appengine 目录(输入 cd X:\Program Files\Google\google_appengine\ 即可)，输入以下命令行: appcfg.py update fetchserver，回车，会要求你输入 Google 账户及密码，之后关闭结束上传。<br />
<br />
——这一步时，到输入密码的地方，敲什么字都不会显示在屏幕上。别紧张，像平时登录邮箱那样直接输入密码就行。不要多输入别的字符。<br />
<br />
<br />
安装是安好了，点击gui.exe看状态都是proxy is running，但是怎么翻不了墙？我家是电信的宽带OTZ</div>

							
							
							
							
															<div id="post_rate_div_273812"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo273812_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://bluishrune.blog124.fc2blog.net/" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=6872" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=5745&amp;repquote=273812&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 273812)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_26"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid277725" summary="pid277725" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8556" target="_blank" id="userinfo277725" class="dropmenu" onmouseover="showMenu(this.id)">huntou</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8556">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8556&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_27" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum277725" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=5745&page=1#pid277725', '话题链接已经复制到剪贴板')">28楼</strong>
													<em onclick="$('postmessage_277725').className='t_bigfont'">大</em>							<em onclick="$('postmessage_277725').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_277725').className='t_smallfont'">小</em>												发表于 2009-10-11 23:09&nbsp;																					<a href="viewthread.php?tid=5745&amp;page=1&amp;authorid=8556" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_27"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_27"></div><div id="ad_thread4_27"></div>
						
						
																											<div id="postmessage_277725" class="t_msgfont">我的体会是GAE搭建的步骤比较多，易错，易漏；搭建成功后好像不能看youtube、youku等视频，不支持超过1MB的文件下载。难得的是搭建成功后，如果换用其他电脑后只需gui.exe+浏览器代理设置即可使用，方便</div>

							
							
							
							
															<div id="post_rate_div_277725"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo277725_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=8556" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=5745&amp;repquote=277725&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 277725)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_27"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid309278" summary="pid309278" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=9194" target="_blank" id="userinfo309278" class="dropmenu" onmouseover="showMenu(this.id)">两剑封禅</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">许为知己犹按剑，纵使负心敌难为</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=9194">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=9194&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_28" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum309278" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=5745&page=1#pid309278', '话题链接已经复制到剪贴板')">29楼</strong>
													<em onclick="$('postmessage_309278').className='t_bigfont'">大</em>							<em onclick="$('postmessage_309278').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_309278').className='t_smallfont'">小</em>												发表于 2009-11-1 14:59&nbsp;																					<a href="viewthread.php?tid=5745&amp;page=1&amp;authorid=9194" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_28"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_28"></div><div id="ad_thread4_28"></div>
						
						
																											<div id="postmessage_309278" class="t_msgfont">GappProxy 和 fetchServer 下载地址是一样的啊，下下来的东西也是一样的。。电白折腾了一中午，还是只有上来问了。。</div>

							
							
							
							
															<div id="post_rate_div_309278"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo309278_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=9194" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=5745&amp;repquote=309278&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 309278)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_28"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid312457" summary="pid312457" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=9656" target="_blank" id="userinfo312457" class="dropmenu" onmouseover="showMenu(this.id)">shallwedance</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=9656">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=9656&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_29" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum312457" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=5745&page=1#pid312457', '话题链接已经复制到剪贴板')">30楼</strong>
													<em onclick="$('postmessage_312457').className='t_bigfont'">大</em>							<em onclick="$('postmessage_312457').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_312457').className='t_smallfont'">小</em>												发表于 2009-11-3 23:14&nbsp;																					<a href="viewthread.php?tid=5745&amp;page=1&amp;authorid=9656" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_29"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_29"></div><div id="ad_thread4_29"></div>
						
						
																											<div id="postmessage_312457" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>10293817</i> 于 2009-7-10 19:46 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=157480&amp;ptid=5745" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
如果有ipv6的话，sixxs.org堪称教育网最佳翻墙方案<br />
只可惜，不能看youtube </blockquote></div>遗憾的是莱西比大学的ipv6代理早早封掉了，sixxs.org不能用于注册、登陆、发言、看流媒体，https也不能浏览，诸多限制~~</div>

							
							
							
							
															<div id="post_rate_div_312457"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo312457_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=9656" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=5745&amp;repquote=312457&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 312457)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_29"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid386289" summary="pid386289" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 <a name="lastpost"></a>					<cite>											<a href="space.php?uid=4546" target="_blank" id="userinfo386289" class="dropmenu" onmouseover="showMenu(this.id)">五机</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">逆足精度7的play-maker@yebayiren</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=4546">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=4546&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_30" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum386289" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=5745&page=1#pid386289', '话题链接已经复制到剪贴板')">31楼</strong>
													<em onclick="$('postmessage_386289').className='t_bigfont'">大</em>							<em onclick="$('postmessage_386289').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_386289').className='t_smallfont'">小</em>												发表于 2009-12-21 16:14&nbsp;																					<a href="viewthread.php?tid=5745&amp;page=1&amp;authorid=4546" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_30"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_30"></div><div id="ad_thread4_30"></div>
						
						
																											<div id="postmessage_386289" class="t_msgfont">请问在linux下如何配置？</div>

							
							
							
							
															<div id="post_rate_div_386289"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo386289_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://yebayiren.blogspot.com" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=4546" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=5745&amp;repquote=386289&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 386289)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_30"></div>				</div>
			</td>
		</tr>
		</table>
		</div>
</form>





<div class="pages_btns">
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=5745&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=5745&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
				<span class="postbtn" id="newspecialtmp" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=5745&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

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

	<form method="post" id="postform" action="post.php?action=reply&amp;fid=26&amp;tid=5745&amp;extra=&amp;replysubmit=yes" onSubmit="return validate(this)">
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
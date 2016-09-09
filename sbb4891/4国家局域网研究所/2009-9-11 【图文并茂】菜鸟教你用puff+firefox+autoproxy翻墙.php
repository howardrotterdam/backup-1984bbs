<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<title>【图文并茂】菜鸟教你用puff+firefox+autoproxy翻墙 - 国家局域网研究所 -  1984bbs.com </title>
<meta name="keywords" content="" />
<meta name="MSSmartTagsPreventParsing" content="True" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<link rel="archives" title="1984bbs.com" href="https://1984bbs.com/archiver/" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_viewthread.css" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_common.css" />
<script type="text/javascript">
	var discuz_uid = 13019;var IMGDIR = 'images/default';var attackevasive = '0';var gid = 0;var STYLEID = '1';
	gid = parseInt('3');var fid = parseInt('26');var tid = parseInt('21994');
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
			<p><a href="index.php" id="forumlist" onmouseover="showMenu(this.id)" class="dropmenu">1984bbs.com</a> &raquo; <a href="forumdisplay.php?fid=26">国家局域网研究所</a> &raquo; 【图文并茂】菜鸟教你用puff+firefox+autoproxy翻墙</p>
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
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=21994&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=21994&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
				<span class="postbtn" id="newspecial" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=21994&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

	<ul class="popupmenu_popup newspecialmenu" id="newspecial_menu" style="display: none">
		<li><a href="post.php?action=newthread&amp;fid=26&amp;extra=">发新话题</a></li>
		<li class="poll"><a href="post.php?action=newthread&amp;fid=26&amp;extra=&amp;special=1">发布投票</a></li>													</ul>

<form method="post" name="modactions">
	<input type="hidden" name="formhash" value="823c9fa2" />
	<div class="mainbox viewthread">
		<span class="headactions">
					<a href="my.php?item=favorites&amp;tid=21994" id="ajax_favorite" onclick="ajaxmenu(event, this.id, 3000, 0)">收藏</a>
			<a href="my.php?item=subscriptions&amp;subadd=21994" id="ajax_subscription" onclick="ajaxmenu(event, this.id, 3000, null, 0)">订阅</a>
			<a href="misc.php?action=emailfriend&amp;tid=21994" id="emailfriend" onclick="ajaxmenu(event, this.id, 9000000, null, 0)">推荐</a>
				<a href="viewthread.php?action=printable&amp;tid=21994" target="_blank" class="notabs">打印</a>
				</span>
		<h1>【图文并茂】菜鸟教你用puff+firefox+autoproxy翻墙		</h1>
							<table id="pid236931" summary="pid236931" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=3871" target="_blank" id="userinfo236931" class="dropmenu" onmouseover="showMenu(this.id)">wodeid</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=3871">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=3871&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_0" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum236931" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=21994&page=1#pid236931', '话题链接已经复制到剪贴板')">1楼</strong>
													<em onclick="$('postmessage_236931').className='t_bigfont'">大</em>							<em onclick="$('postmessage_236931').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_236931').className='t_smallfont'">小</em>												发表于 2009-9-11 20:48&nbsp;																					<a href="viewthread.php?tid=21994&amp;page=1&amp;authorid=3871" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_0"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_0"></div><div id="ad_thread4_0"></div>
													<h2>【图文并茂】菜鸟教你用puff+firefox+autoproxy翻墙</h2>
						
						
																											<div id="postmessage_236931" class="t_msgfont"><strong> <font color="#0000FF">第一步：下载和安装翻墙装备</font> </strong><br />
<br />
（1）如果你还没用过火狐，请在这里下载3.53的版本（下载左边绿色那个，右边黄色的那个中国版我没试过，不知道行不行），然后安装<br />
&nbsp; &nbsp;&nbsp;&nbsp;<a href="http://www.mozillaonline.com/" target="_blank">http://www.mozillaonline.com/</a><br />
<br />
<br />
（2）然后在这里添加AutoProxy 0.2.1+.2009032706这个组件，如图在复选框里打勾，然后点现在下载即可（如图）<br />
&nbsp; &nbsp;&nbsp;&nbsp;<a href="https://addons.mozilla.org/zh-CN/firefox/addon/11009" target="_blank">https://addons.mozilla.org/zh-CN/firefox/addon/11009</a><br />
<br />
<img src="http://i30.tinypic.com/x1jeia.jpg" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
<br />
<br />
（3）在这里下载PUFF，最新版本是Puff version 0.03 ，下载后安装好<br />
&nbsp; &nbsp;&nbsp;&nbsp;<a href="http://www.erights.net/" target="_blank">http://www.erights.net/</a><br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<strong> <font color="#0000FF">第二步：设置</font> </strong><br />
<br />
打开火狐浏览器，然后在工具下拉菜单选AUTOPROXY首选项，编辑代理服务器，点“添加代理”，在3个空格里分别填上&nbsp; &nbsp;<br />
<br />
puff&nbsp; &nbsp;&nbsp;&nbsp;127.0.0.1&nbsp; &nbsp;&nbsp;&nbsp;1984<br />
<br />
<br />
最后按“确定”，便大功告成了！（如下图）<br />
<br />
<img src="http://i31.tinypic.com/muj0p5.jpg" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
<br />
<img src="http://i29.tinypic.com/9bexqo.jpg" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" />]<br />
<br />
<img src="http://i28.tinypic.com/2ur8j9z.jpg" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
<br />
<br />
<br />
我自己也是刚用火狐浏览器，以上是个人一点心得，希望能对跟我一样菜的朋友有一些帮助，欢迎各位大侠指正和补充，谢谢！<br />
<br />
[<i> 本帖最后由 wodeid 于 2009-9-11 20:57 编辑 </i>]</div>

							
							
							
							
															<div id="post_rate_div_236931"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo236931_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=3871" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=21994&amp;repquote=236931&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 236931)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_0"></div>				</div>
			</td>
		</tr>
		</table>
		</div><div class="ad_column" id="ad_interthread"><a href="/viewthread.php?tid=54699" target="_blank" style="color:red;">1984bbs是一个非营利项目，它需要您的捐助！</font></a>		</div>
	<div class="mainbox viewthread">
			<table id="pid236973" summary="pid236973" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=3871" target="_blank" id="userinfo236973" class="dropmenu" onmouseover="showMenu(this.id)">wodeid</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=3871">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=3871&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_1" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum236973" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=21994&page=1#pid236973', '话题链接已经复制到剪贴板')">2楼</strong>
													<em onclick="$('postmessage_236973').className='t_bigfont'">大</em>							<em onclick="$('postmessage_236973').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_236973').className='t_smallfont'">小</em>												发表于 2009-9-11 21:14&nbsp;																					<a href="viewthread.php?tid=21994&amp;page=1&amp;authorid=3871" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_1"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_1"></div><div id="ad_thread4_1"></div>
						
						
																											<div id="postmessage_236973" class="t_msgfont">呵呵，竟然忘了最重要一点：记得打开火狐前先开PUFF软件，点“连接服务器”，连上后才能翻墙</div>

							
							
							
							
															<div id="post_rate_div_236973"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo236973_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=3871" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=21994&amp;repquote=236973&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 236973)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_1"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid237542" summary="pid237542" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8449" target="_blank" id="userinfo237542" class="dropmenu" onmouseover="showMenu(this.id)">芝华士</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8449">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8449&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_2" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum237542" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=21994&page=1#pid237542', '话题链接已经复制到剪贴板')">3楼</strong>
													<em onclick="$('postmessage_237542').className='t_bigfont'">大</em>							<em onclick="$('postmessage_237542').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_237542').className='t_smallfont'">小</em>												发表于 2009-9-12 14:35&nbsp;																					<a href="viewthread.php?tid=21994&amp;page=1&amp;authorid=8449" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_2"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_2"></div><div id="ad_thread4_2"></div>
						
						
																											<div id="postmessage_237542" class="t_msgfont">foxyproxy也不错</div>

							
							
							
							
															<div id="post_rate_div_237542"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo237542_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=8449" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=21994&amp;repquote=237542&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 237542)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_2"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid237550" summary="pid237550" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8536" target="_blank" id="userinfo237550" class="dropmenu" onmouseover="showMenu(this.id)">清凉自在天</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8536">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8536&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_3" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum237550" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=21994&page=1#pid237550', '话题链接已经复制到剪贴板')">4楼</strong>
													<em onclick="$('postmessage_237550').className='t_bigfont'">大</em>							<em onclick="$('postmessage_237550').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_237550').className='t_smallfont'">小</em>												发表于 2009-9-12 14:37&nbsp;																					<a href="viewthread.php?tid=21994&amp;page=1&amp;authorid=8536" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_3"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_3"></div><div id="ad_thread4_3"></div>
						
						
																											<div id="postmessage_237550" class="t_msgfont">尽管已经用上了，还是看看<br />
当时参照FoxyProxy设置的，也不知道对不对<br />
Puff那个快呀，谁用谁知道</div>

							
							
							
							
															<div id="post_rate_div_237550"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo237550_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=8536" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=21994&amp;repquote=237550&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 237550)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_3"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid237565" summary="pid237565" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1820" target="_blank" id="userinfo237565" class="dropmenu" onmouseover="showMenu(this.id)">八卦太极拳</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">王命之徒</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1820">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1820&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_4" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum237565" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=21994&page=1#pid237565', '话题链接已经复制到剪贴板')">5楼</strong>
													<em onclick="$('postmessage_237565').className='t_bigfont'">大</em>							<em onclick="$('postmessage_237565').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_237565').className='t_smallfont'">小</em>												发表于 2009-9-12 14:49&nbsp;																					<a href="viewthread.php?tid=21994&amp;page=1&amp;authorid=1820" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_4"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_4"></div><div id="ad_thread4_4"></div>
						
						
																											<div id="postmessage_237565" class="t_msgfont">学习学习，感谢感谢。</div>

							
							
							
							
															<div id="post_rate_div_237565"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo237565_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1820" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=21994&amp;repquote=237565&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 237565)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_4"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid237590" summary="pid237590" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6412" target="_blank" id="userinfo237590" class="dropmenu" onmouseover="showMenu(this.id)">立夏</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6412">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6412&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_5" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum237590" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=21994&page=1#pid237590', '话题链接已经复制到剪贴板')">6楼</strong>
													<em onclick="$('postmessage_237590').className='t_bigfont'">大</em>							<em onclick="$('postmessage_237590').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_237590').className='t_smallfont'">小</em>												发表于 2009-9-12 15:10&nbsp;																					<a href="viewthread.php?tid=21994&amp;page=1&amp;authorid=6412" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_5"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_5"></div><div id="ad_thread4_5"></div>
						
						
																											<div id="postmessage_237590" class="t_msgfont">太有爱了~<br />
之前的代理器都不能用了，这解决了大问题。<br />
谢谢~~~~~~~~~~<br />
<br />
[<i> 本帖最后由 立夏 于 2009-9-12 18:41 编辑 </i>]</div>

							
							
							
							
															<div id="post_rate_div_237590"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo237590_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=6412" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=21994&amp;repquote=237590&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 237590)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_5"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid237594" summary="pid237594" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=4912" target="_blank" id="userinfo237594" class="dropmenu" onmouseover="showMenu(this.id)">zolcom</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=4912">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=4912&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_6" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum237594" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=21994&page=1#pid237594', '话题链接已经复制到剪贴板')">7楼</strong>
													<em onclick="$('postmessage_237594').className='t_bigfont'">大</em>							<em onclick="$('postmessage_237594').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_237594').className='t_smallfont'">小</em>												发表于 2009-9-12 15:13&nbsp;																					<a href="viewthread.php?tid=21994&amp;page=1&amp;authorid=4912" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_6"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_6"></div><div id="ad_thread4_6"></div>
						
						
																											<div id="postmessage_237594" class="t_msgfont">AutoProxy 0.2.1+.2009032706这组件我安装不了？</div>

							
							
							
							
															<div id="post_rate_div_237594"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo237594_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=4912" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=21994&amp;repquote=237594&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 237594)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_6"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid237719" summary="pid237719" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8440" target="_blank" id="userinfo237719" class="dropmenu" onmouseover="showMenu(this.id)">kidywd</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8440">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8440&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_7" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum237719" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=21994&page=1#pid237719', '话题链接已经复制到剪贴板')">8楼</strong>
													<em onclick="$('postmessage_237719').className='t_bigfont'">大</em>							<em onclick="$('postmessage_237719').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_237719').className='t_smallfont'">小</em>												发表于 2009-9-12 17:11&nbsp;																					<a href="viewthread.php?tid=21994&amp;page=1&amp;authorid=8440" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_7"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_7"></div><div id="ad_thread4_7"></div>
						
						
																											<div id="postmessage_237719" class="t_msgfont"># 該網站可能暫時無法使用或太過忙碌，請過幾分鐘後再試試。<br />
<br />
#&nbsp; &nbsp;若無法載入任何網站，請檢查您的網路連線狀態。<br />
<br />
#&nbsp; &nbsp;若電腦或網路被防火牆或 Proxy 保護，請確定<br />
&nbsp; &nbsp; Firefox 被允許存取網路。<br />
<br />
这个是什么问题？？打不开网站。。。</div>

							
							
							
							
															<div id="post_rate_div_237719"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo237719_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=8440" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=21994&amp;repquote=237719&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 237719)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_7"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid237866" summary="pid237866" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=3871" target="_blank" id="userinfo237866" class="dropmenu" onmouseover="showMenu(this.id)">wodeid</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=3871">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=3871&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_8" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum237866" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=21994&page=1#pid237866', '话题链接已经复制到剪贴板')">9楼</strong>
													<em onclick="$('postmessage_237866').className='t_bigfont'">大</em>							<em onclick="$('postmessage_237866').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_237866').className='t_smallfont'">小</em>												发表于 2009-9-12 19:26&nbsp;																					<a href="viewthread.php?tid=21994&amp;page=1&amp;authorid=3871" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_8"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_8"></div><div id="ad_thread4_8"></div>
						
						
																											<div id="postmessage_237866" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>zolcom</i> 于 2009-9-12 15:13 发表 <a href="http://1984bbs.com/redirect.php?goto=findpost&amp;pid=237594&amp;ptid=21994" target="_blank"><img src="http://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
AutoProxy 0.2.1+.2009032706这组件我安装不了？ </blockquote></div>这个我也不清楚，我都是按上面说的方法安装的，没遇到这个问题，你试试重装firefox3.53的版本看看</div>

							
							
							
							
															<div id="post_rate_div_237866"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo237866_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=3871" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=21994&amp;repquote=237866&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 237866)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_8"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid237871" summary="pid237871" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=3871" target="_blank" id="userinfo237871" class="dropmenu" onmouseover="showMenu(this.id)">wodeid</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=3871">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=3871&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_9" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum237871" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=21994&page=1#pid237871', '话题链接已经复制到剪贴板')">10楼</strong>
													<em onclick="$('postmessage_237871').className='t_bigfont'">大</em>							<em onclick="$('postmessage_237871').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_237871').className='t_smallfont'">小</em>												发表于 2009-9-12 19:31&nbsp;																					<a href="viewthread.php?tid=21994&amp;page=1&amp;authorid=3871" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_9"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_9"></div><div id="ad_thread4_9"></div>
						
						
																											<div id="postmessage_237871" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>kidywd</i> 于 2009-9-12 17:11 发表 <a href="http://1984bbs.com/redirect.php?goto=findpost&amp;pid=237719&amp;ptid=21994" target="_blank"><img src="http://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
# 該網站可能暫時無法使用或太過忙碌，請過幾分鐘後再試試。<br />
<br />
#&nbsp; &nbsp;若無法載入任何網站，請檢查您的網路連線狀態。<br />
<br />
#&nbsp; &nbsp;若電腦或網路被防火牆或 Proxy 保護，請確定<br />
&nbsp; &nbsp; Firefox 被允許存取網路。<br />
<br />
这个是什么 ... </blockquote></div>我刚试了一下，不翻墙都能打开那些链接，是否你的防火墙设置问题，暂时关掉防火墙试试</div>

							
							
							
							
															<div id="post_rate_div_237871"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo237871_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=3871" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=21994&amp;repquote=237871&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 237871)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_9"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid238088" summary="pid238088" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6415" target="_blank" id="userinfo238088" class="dropmenu" onmouseover="showMenu(this.id)">coffee2046</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6415">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6415&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_10" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum238088" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=21994&page=1#pid238088', '话题链接已经复制到剪贴板')">11楼</strong>
													<em onclick="$('postmessage_238088').className='t_bigfont'">大</em>							<em onclick="$('postmessage_238088').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_238088').className='t_smallfont'">小</em>												发表于 2009-9-12 21:50&nbsp;																					<a href="viewthread.php?tid=21994&amp;page=1&amp;authorid=6415" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_10"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_10"></div><div id="ad_thread4_10"></div>
						
						
																											<div id="postmessage_238088" class="t_msgfont">我开了那个puff软件后，遨游可以翻墙，火狐不能翻。。。为啥啊<br />
不过很好用，墙内外都能上<br />
谢了</div>

							
							
							
							
															<div id="post_rate_div_238088"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo238088_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=6415" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=21994&amp;repquote=238088&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 238088)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_10"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid238172" summary="pid238172" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=184" target="_blank" id="userinfo238172" class="dropmenu" onmouseover="showMenu(this.id)">176GIRL</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">身高176的GIRL且喜欢和男友一起遛狗</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=184">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=184&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_11" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum238172" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=21994&page=1#pid238172', '话题链接已经复制到剪贴板')">12楼</strong>
													<em onclick="$('postmessage_238172').className='t_bigfont'">大</em>							<em onclick="$('postmessage_238172').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_238172').className='t_smallfont'">小</em>												发表于 2009-9-12 22:50&nbsp;																					<a href="viewthread.php?tid=21994&amp;page=1&amp;authorid=184" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_11"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_11"></div><div id="ad_thread4_11"></div>
						
						
																											<div id="postmessage_238172" class="t_msgfont">代理服务器拒绝连接<br />
&nbsp; &nbsp;&nbsp;&nbsp;<br />
Firefox 尝试联系您指定的代理服务器时连接被拒绝。<br />
<br />
&nbsp; &nbsp; * 请检查浏览器的代理服务器设置是否正确。<br />
&nbsp; &nbsp; * 请联系您的网络管理员以确认代理服务器工作正常</div>

							
							
							
							
															<div id="post_rate_div_238172"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo238172_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=184" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=21994&amp;repquote=238172&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 238172)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_11"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid238190" summary="pid238190" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7621" target="_blank" id="userinfo238190" class="dropmenu" onmouseover="showMenu(this.id)">bago</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">不折腾，无人生。</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7621">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7621&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_12" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum238190" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=21994&page=1#pid238190', '话题链接已经复制到剪贴板')">13楼</strong>
													<em onclick="$('postmessage_238190').className='t_bigfont'">大</em>							<em onclick="$('postmessage_238190').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_238190').className='t_smallfont'">小</em>												发表于 2009-9-12 23:04&nbsp;																					<a href="viewthread.php?tid=21994&amp;page=1&amp;authorid=7621" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_12"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_12"></div><div id="ad_thread4_12"></div>
						
						
																											<div id="postmessage_238190" class="t_msgfont">PUFF这个软件安全吗？有人建议不要用。</div>

							
							
							
							
															<div id="post_rate_div_238190"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo238190_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://www.google.com/profiles/bago.peng" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=7621" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=21994&amp;repquote=238190&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 238190)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_12"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid238224" summary="pid238224" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6974" target="_blank" id="userinfo238224" class="dropmenu" onmouseover="showMenu(this.id)">xiaohui</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">广告位出租</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6974">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6974&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_13" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum238224" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=21994&page=1#pid238224', '话题链接已经复制到剪贴板')">14楼</strong>
													<em onclick="$('postmessage_238224').className='t_bigfont'">大</em>							<em onclick="$('postmessage_238224').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_238224').className='t_smallfont'">小</em>												发表于 2009-9-12 23:39&nbsp;																					<a href="viewthread.php?tid=21994&amp;page=1&amp;authorid=6974" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_13"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_13"></div><div id="ad_thread4_13"></div>
						
						
																											<div id="postmessage_238224" class="t_msgfont">我是按步骤做的，<br />
“第二步，设置”，我下的火狐 工具下拉菜没有AUTOPROXY首选项，没法设置。<br />
打开puff后，弹出了窗口，我说明设置了127.0.0.1&nbsp;&nbsp;1984<br />
现在只有火狐能连接了，IE和世界之窗都上不了网了，咋回事？？？？</div>

							
							
							
							
															<div id="post_rate_div_238224"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo238224_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=6974" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=21994&amp;repquote=238224&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 238224)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_13"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid238550" summary="pid238550" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=4912" target="_blank" id="userinfo238550" class="dropmenu" onmouseover="showMenu(this.id)">zolcom</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=4912">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=4912&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_14" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum238550" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=21994&page=1#pid238550', '话题链接已经复制到剪贴板')">15楼</strong>
													<em onclick="$('postmessage_238550').className='t_bigfont'">大</em>							<em onclick="$('postmessage_238550').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_238550').className='t_smallfont'">小</em>												发表于 2009-9-13 10:38&nbsp;																					<a href="viewthread.php?tid=21994&amp;page=1&amp;authorid=4912" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_14"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_14"></div><div id="ad_thread4_14"></div>
						
						
																											<div id="postmessage_238550" class="t_msgfont">用puff，IE可翻墙，但火狐不行，只是twitter界面有点乱。</div>

							
							
							
							
															<div id="post_rate_div_238550"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo238550_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=4912" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=21994&amp;repquote=238550&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 238550)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_14"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid238631" summary="pid238631" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8192" target="_blank" id="userinfo238631" class="dropmenu" onmouseover="showMenu(this.id)">flintt</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8192">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8192&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_15" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum238631" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=21994&page=1#pid238631', '话题链接已经复制到剪贴板')">16楼</strong>
													<em onclick="$('postmessage_238631').className='t_bigfont'">大</em>							<em onclick="$('postmessage_238631').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_238631').className='t_smallfont'">小</em>												发表于 2009-9-13 11:40&nbsp;																					<a href="viewthread.php?tid=21994&amp;page=1&amp;authorid=8192" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_15"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_15"></div><div id="ad_thread4_15"></div>
						
						
																											<div id="postmessage_238631" class="t_msgfont">Puff的速度很快的哦</div>

							
							
							
							
															<div id="post_rate_div_238631"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo238631_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=8192" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=21994&amp;repquote=238631&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 238631)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_15"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid239440" summary="pid239440" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8536" target="_blank" id="userinfo239440" class="dropmenu" onmouseover="showMenu(this.id)">清凉自在天</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8536">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8536&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_16" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum239440" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=21994&page=1#pid239440', '话题链接已经复制到剪贴板')">17楼</strong>
													<em onclick="$('postmessage_239440').className='t_bigfont'">大</em>							<em onclick="$('postmessage_239440').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_239440').className='t_smallfont'">小</em>												发表于 2009-9-14 02:26&nbsp;																					<a href="viewthread.php?tid=21994&amp;page=1&amp;authorid=8536" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_16"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_16"></div><div id="ad_thread4_16"></div>
						
						
																											<div id="postmessage_239440" class="t_msgfont">奇怪，我用火狐，一点问题没有</div>

							
							
							
							
															<div id="post_rate_div_239440"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo239440_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=8536" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=21994&amp;repquote=239440&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 239440)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_16"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid240238" summary="pid240238" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=693" target="_blank" id="userinfo240238" class="dropmenu" onmouseover="showMenu(this.id)">kao</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">每个人都有思考的权利，每个人都有追求唯一正确答案的责任。——罗纳德&#8226;德沃金（Ronald Dworkin）  《如何避免愚蠢的见识》——罗素； 《洗脑秘笈十八招三式》</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=693">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=693&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_17" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum240238" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=21994&page=1#pid240238', '话题链接已经复制到剪贴板')">18楼</strong>
													<em onclick="$('postmessage_240238').className='t_bigfont'">大</em>							<em onclick="$('postmessage_240238').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_240238').className='t_smallfont'">小</em>												发表于 2009-9-14 15:34&nbsp;																					<a href="viewthread.php?tid=21994&amp;page=1&amp;authorid=693" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_17"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_17"></div><div id="ad_thread4_17"></div>
						
						
																											<div id="postmessage_240238" class="t_msgfont">?????????</div>

							
							
							
							
															<div id="post_rate_div_240238"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo240238_menu" style="display: none;">
										<div class="imicons">
													<a target='_blank' href='http://settings.messenger.live.com/Conversation/IMMe.aspx?invitee=y1707081@126.com&mkt=zh-cn'><img style='border-style: none;' src='http://messenger.services.live.com/users/y1707081@126.com/presenceimage?mkt=zh-cn' width='16' height='16' /></a>
																																			</div>
										<dl></dl>
										<p><a href="space.php?uid=693" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=21994&amp;repquote=240238&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 240238)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_17"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid243200" summary="pid243200" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8556" target="_blank" id="userinfo243200" class="dropmenu" onmouseover="showMenu(this.id)">huntou</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8556">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8556&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_18" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum243200" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=21994&page=1#pid243200', '话题链接已经复制到剪贴板')">19楼</strong>
													<em onclick="$('postmessage_243200').className='t_bigfont'">大</em>							<em onclick="$('postmessage_243200').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_243200').className='t_smallfont'">小</em>												发表于 2009-9-16 11:17&nbsp;																					<a href="viewthread.php?tid=21994&amp;page=1&amp;authorid=8556" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_18"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_18"></div><div id="ad_thread4_18"></div>
						
						
																											<div id="postmessage_243200" class="t_msgfont">我看还是google 的AGE 比较爽。唯一不足就是不能看youtube<br />
puff单独用来看youtube，这样AGE+youtube,应该是个不错的组合</div>

							
							
							
							
															<div id="post_rate_div_243200"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo243200_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=8556" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=21994&amp;repquote=243200&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 243200)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_18"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid243356" summary="pid243356" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8623" target="_blank" id="userinfo243356" class="dropmenu" onmouseover="showMenu(this.id)">guzhu</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">抛弃一切,才能真正自由。</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8623">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8623&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_19" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum243356" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=21994&page=1#pid243356', '话题链接已经复制到剪贴板')">20楼</strong>
													<em onclick="$('postmessage_243356').className='t_bigfont'">大</em>							<em onclick="$('postmessage_243356').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_243356').className='t_smallfont'">小</em>												发表于 2009-9-16 12:09&nbsp;																					<a href="viewthread.php?tid=21994&amp;page=1&amp;authorid=8623" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_19"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_19"></div><div id="ad_thread4_19"></div>
						
						
																											<div id="postmessage_243356" class="t_msgfont">谢LZ<br />
速度非常好！<br />
好久不翻墙了，这下子可彻底把我的便秘给解决了。</div>

							
							
							
							
															<div id="post_rate_div_243356"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo243356_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://www.loudi.us" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=8623" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=21994&amp;repquote=243356&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 243356)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_19"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid243442" summary="pid243442" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=5720" target="_blank" id="userinfo243442" class="dropmenu" onmouseover="showMenu(this.id)">zhuhexie2004</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">渚禾榭</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=5720">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=5720&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_20" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum243442" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=21994&page=1#pid243442', '话题链接已经复制到剪贴板')">21楼</strong>
													<em onclick="$('postmessage_243442').className='t_bigfont'">大</em>							<em onclick="$('postmessage_243442').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_243442').className='t_smallfont'">小</em>												发表于 2009-9-16 12:36&nbsp;																					<a href="viewthread.php?tid=21994&amp;page=1&amp;authorid=5720" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_20"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_20"></div><div id="ad_thread4_20"></div>
						
						
																											<div id="postmessage_243442" class="t_msgfont">这样比使用代理网站的优势有哪些呢？</div>

							
							
							
							
															<div id="post_rate_div_243442"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo243442_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=5720" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=21994&amp;repquote=243442&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 243442)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_20"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid749939" summary="pid749939" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7497" target="_blank" id="userinfo749939" class="dropmenu" onmouseover="showMenu(this.id)">mafanpk</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7497">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7497&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_21" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum749939" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=21994&page=1#pid749939', '话题链接已经复制到剪贴板')">22楼</strong>
													<em onclick="$('postmessage_749939').className='t_bigfont'">大</em>							<em onclick="$('postmessage_749939').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_749939').className='t_smallfont'">小</em>												发表于 2010-7-20 10:58&nbsp;																					<a href="viewthread.php?tid=21994&amp;page=1&amp;authorid=7497" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_21"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_21"></div><div id="ad_thread4_21"></div>
						
						
																											<div id="postmessage_749939" class="t_msgfont">mark</div>

							
							
							
							
															<div id="post_rate_div_749939"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo749939_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=7497" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=21994&amp;repquote=749939&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 749939)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_21"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid756079" summary="pid756079" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=9439" target="_blank" id="userinfo756079" class="dropmenu" onmouseover="showMenu(this.id)">丁春秋</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=9439">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=9439&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_22" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum756079" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=21994&page=1#pid756079', '话题链接已经复制到剪贴板')">23楼</strong>
													<em onclick="$('postmessage_756079').className='t_bigfont'">大</em>							<em onclick="$('postmessage_756079').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_756079').className='t_smallfont'">小</em>												发表于 2010-7-23 22:28&nbsp;																					<a href="viewthread.php?tid=21994&amp;page=1&amp;authorid=9439" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_22"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_22"></div><div id="ad_thread4_22"></div>
						
						
																											<div id="postmessage_756079" class="t_msgfont">不是这么回事<br />
<a href="http://www.mozillaonline.com/" target="_blank">http://www.mozillaonline.com/</a>这个页面是3.6.6的<br />
跟AutoProxy 0.2.1+.2009032706无法兼容<br />
<br />
<br />
<img src="https://yopic.us/images/123ivi.bmp" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
<br />
[<i> 本帖最后由 丁春秋 于 2010-7-24 08:32 编辑 </i>]</div>

							
							
							
							
															<div id="post_rate_div_756079"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo756079_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=9439" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=21994&amp;repquote=756079&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 756079)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_22"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid756293" summary="pid756293" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 <a name="lastpost"></a>					<cite>											<a href="space.php?uid=9439" target="_blank" id="userinfo756293" class="dropmenu" onmouseover="showMenu(this.id)">丁春秋</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=9439">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=9439&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_23" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum756293" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=21994&page=1#pid756293', '话题链接已经复制到剪贴板')">24楼</strong>
													<em onclick="$('postmessage_756293').className='t_bigfont'">大</em>							<em onclick="$('postmessage_756293').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_756293').className='t_smallfont'">小</em>												发表于 2010-7-24 01:05&nbsp;																					<a href="viewthread.php?tid=21994&amp;page=1&amp;authorid=9439" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_23"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_23"></div><div id="ad_thread4_23"></div>
						
						
																											<div id="postmessage_756293" class="t_msgfont">请教楼主这个是这么回事<br />
<br />
[<i> 本帖最后由 丁春秋 于 2010-7-24 08:33 编辑 </i>]</div>

							
							
							
							
															<div id="post_rate_div_756293"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo756293_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=9439" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=21994&amp;repquote=756293&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 756293)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_23"></div>				</div>
			</td>
		</tr>
		</table>
		</div>
</form>





<div class="pages_btns">
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=21994&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=21994&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
				<span class="postbtn" id="newspecialtmp" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=21994&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

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

	<form method="post" id="postform" action="post.php?action=reply&amp;fid=26&amp;tid=21994&amp;extra=&amp;replysubmit=yes" onSubmit="return validate(this)">
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
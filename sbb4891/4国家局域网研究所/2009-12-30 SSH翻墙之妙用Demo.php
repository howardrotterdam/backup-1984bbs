<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<title>SSH翻墙之妙用Demo - 国家局域网研究所 -  1984bbs.com </title>
<meta name="keywords" content="" />
<meta name="MSSmartTagsPreventParsing" content="True" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<link rel="archives" title="1984bbs.com" href="https://1984bbs.com/archiver/" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_viewthread.css" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_common.css" />
<script type="text/javascript">
	var discuz_uid = 13019;var IMGDIR = 'images/default';var attackevasive = '0';var gid = 0;var STYLEID = '1';
	gid = parseInt('3');var fid = parseInt('26');var tid = parseInt('33003');
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
			<p><a href="index.php" id="forumlist" onmouseover="showMenu(this.id)" class="dropmenu">1984bbs.com</a> &raquo; <a href="forumdisplay.php?fid=26">国家局域网研究所</a> &raquo; SSH翻墙之妙用Demo</p>
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
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=33003&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=33003&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
	<div class="pages"><em>&nbsp;56&nbsp;</em><strong>1</strong><a href="viewthread.php?tid=33003&amp;extra=&amp;page=2">2</a><a href="viewthread.php?tid=33003&amp;extra=&amp;page=2" class="next">&rsaquo;&rsaquo;</a></div>			<span class="postbtn" id="newspecial" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=33003&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

	<ul class="popupmenu_popup newspecialmenu" id="newspecial_menu" style="display: none">
		<li><a href="post.php?action=newthread&amp;fid=26&amp;extra=">发新话题</a></li>
		<li class="poll"><a href="post.php?action=newthread&amp;fid=26&amp;extra=&amp;special=1">发布投票</a></li>													</ul>

<form method="post" name="modactions">
	<input type="hidden" name="formhash" value="823c9fa2" />
	<div class="mainbox viewthread">
		<span class="headactions">
					<a href="my.php?item=favorites&amp;tid=33003" id="ajax_favorite" onclick="ajaxmenu(event, this.id, 3000, 0)">收藏</a>
			<a href="my.php?item=subscriptions&amp;subadd=33003" id="ajax_subscription" onclick="ajaxmenu(event, this.id, 3000, null, 0)">订阅</a>
			<a href="misc.php?action=emailfriend&amp;tid=33003" id="emailfriend" onclick="ajaxmenu(event, this.id, 9000000, null, 0)">推荐</a>
				<a href="viewthread.php?action=printable&amp;tid=33003" target="_blank" class="notabs">打印</a>
				</span>
		<h1>SSH翻墙之妙用Demo		</h1>
							<table id="pid405094" summary="pid405094" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1960" target="_blank" id="userinfo405094" class="dropmenu" onmouseover="showMenu(this.id)">库存袈裟</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">@bruceku 想象力比知识更重要。</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1960">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1960&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_0" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum405094" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=33003&page=1#pid405094', '话题链接已经复制到剪贴板')">1楼</strong>
													<em onclick="$('postmessage_405094').className='t_bigfont'">大</em>							<em onclick="$('postmessage_405094').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_405094').className='t_smallfont'">小</em>												发表于 2009-12-30 14:14&nbsp;																					<a href="viewthread.php?tid=33003&amp;page=1&amp;authorid=1960" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_0"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_0"></div><div id="ad_thread4_0"></div>
													<h2>SSH翻墙之妙用Demo</h2>
						
						
																											<div id="postmessage_405094" class="t_msgfont">上次说到：如何使用免费空间的SFTP端口翻墙 <a href="https://1984bbs.com/viewthread.php?tid=31667" target="_blank">https://1984bbs.com/viewthread.php?tid=31667</a> 。众多组员卡在了寻找免费空间上，某人俺突然想到众多主机商都提供空间控制面板（cPanel）Demo，虽然是Demo账户但功能都是完整的，而且好处如下：<br />
1.账户不会过期，无需续费，不用操心维护；<br />
2.免费（多为收费空间的Demo）<br />
3.流量用不完<br />
4.收费空间的接入更优质<br />
================================================================<br />
<strong>Demo账户</strong><br />
<br />
1.服务器地址：188.40.174.161<br />
用户名：free<br />
密码：demo<br />
端口：22<br />
<br />
2.服务器地址：75.127.68.101<br />
用户名：demo1<br />
密码：pass<br />
端口： 65321<br />
<br />
3.服务器地址：67.228.232.2<br />
用户名：cpanelde<br />
密码：hndemo<br />
端口： 22<br />
<br />
4.服务器地址：67.213.218.162<br />
用户名：cpdemo<br />
密码：cpaneldemo<br />
端口： 22<br />
<br />
5.服务器地址：207.182.151.19<br />
用户名：demobye<br />
密码：password<br />
端口： 27015<br />
<br />
6.服务器地址：206.212.253.54<br />
用户名：demo<br />
密码：input-button<br />
端口： 5205<br />
<br />
7.服务器地址：204.124.181.194<br />
用户名：cpdemo<br />
密码：demopass<br />
端口： 22<br />
<br />
8.服务器地址：67.228.94.72<br />
用户名：demoweb<br />
密码：zaq1xsw2<br />
端口： 7277<br />
<br />
<br />
<br />
================================================================<br />
SSH翻墙方法：<br />
Windows下Firefox<br />
<a href="https://dl.getdropbox.com/u/873345/howto/windows+firefox.html" target="_blank">https://dl.getdropbox.com/u/873345/howto/windows+firefox.html</a><br />
<br />
Windows下Google浏览器<br />
<a href="https://dl.getdropbox.com/u/873345/howto/windows+chrome.html" target="_blank">https://dl.getdropbox.com/u/873345/howto/windows+chrome.html</a><br />
<br />
Windows下IE浏览器（包含遨游，绿世界，TT等山寨浏览器，配置方法：如遨游工具--&gt;代理服务器--&gt;使用IE的代理规则；同时可用于Windows下safari）:<br />
<a href="https://dl.getdropbox.com/u/873345/howto/windows+ie.html" target="_blank">https://dl.getdropbox.com/u/873345/howto/windows+ie.html</a><br />
<br />
Mac下Firefox浏览器<br />
<a href="https://dl.getdropbox.com/u/873345/howto/mac+firefox.html" target="_blank">https://dl.getdropbox.com/u/873345/howto/mac+firefox.html</a><br />
<br />
Mac下safari浏览器<br />
<a href="https://dl.getdropbox.com/u/873345/howto/mac+safari.html" target="_blank">https://dl.getdropbox.com/u/873345/howto/mac+safari.html</a><br />
<br />
Linux下firefox浏览器<br />
<a href="https://dl.getdropbox.com/u/873345/howto/linux+firefox.html" target="_blank">https://dl.getdropbox.com/u/873345/howto/linux+firefox.html</a><br />
<br />
================================================================</div>

							
							
							
							
															<div id="post_rate_div_405094"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo405094_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1960" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=33003&amp;repquote=405094&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 405094)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_0"></div>				</div>
			</td>
		</tr>
		</table>
		</div><div class="ad_column" id="ad_interthread"><a href="/viewthread.php?tid=54699" target="_blank" style="color:red;">1984bbs是一个非营利项目，它需要您的捐助！</font></a>		</div>
	<div class="mainbox viewthread">
			<table id="pid405102" summary="pid405102" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=679" target="_blank" id="userinfo405102" class="dropmenu" onmouseover="showMenu(this.id)">8ger</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">我还是低调点比较好</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=679">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=679&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_1" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum405102" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=33003&page=1#pid405102', '话题链接已经复制到剪贴板')">2楼</strong>
													<em onclick="$('postmessage_405102').className='t_bigfont'">大</em>							<em onclick="$('postmessage_405102').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_405102').className='t_smallfont'">小</em>												发表于 2009-12-30 14:18&nbsp;																					<a href="viewthread.php?tid=33003&amp;page=1&amp;authorid=679" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_1"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_1"></div><div id="ad_thread4_1"></div>
						
						
																											<div id="postmessage_405102" class="t_msgfont">demo帐户有安全问题吗？<br />
此外号召大家测试这些服务器看哪个速度最快</div>

							
							
							
							
															<div id="post_rate_div_405102"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo405102_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=679" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=33003&amp;repquote=405102&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 405102)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_1"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid405111" summary="pid405111" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=679" target="_blank" id="userinfo405111" class="dropmenu" onmouseover="showMenu(this.id)">8ger</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">我还是低调点比较好</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=679">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=679&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_2" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum405111" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=33003&page=1#pid405111', '话题链接已经复制到剪贴板')">3楼</strong>
													<em onclick="$('postmessage_405111').className='t_bigfont'">大</em>							<em onclick="$('postmessage_405111').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_405111').className='t_smallfont'">小</em>												发表于 2009-12-30 14:25&nbsp;																					<a href="viewthread.php?tid=33003&amp;page=1&amp;authorid=679" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_2"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_2"></div><div id="ad_thread4_2"></div>
						
						
																											<div id="postmessage_405111" class="t_msgfont">Ping statistics for 188.40.174.161:<br />
&nbsp; &nbsp; Packets: Sent = 4, Received = 4, Lost = 0 (0% loss),<br />
Approximate round trip times in milli-seconds:<br />
&nbsp; &nbsp; Minimum = 622ms, Maximum = 633ms, Average = 626ms<br />
Ping statistics for 75.127.68.101:<br />
&nbsp; &nbsp; Packets: Sent = 4, Received = 4, Lost = 0 (0% loss),<br />
Approximate round trip times in milli-seconds:<br />
&nbsp; &nbsp; Minimum = 503ms, Maximum = 509ms, Average = 506ms<br />
Ping statistics for 67.228.232.2:<br />
&nbsp; &nbsp; Packets: Sent = 4, Received = 4, Lost = 0 (0% loss),<br />
Approximate round trip times in milli-seconds:<br />
&nbsp; &nbsp; Minimum = 429ms, Maximum = 452ms, Average = 437ms<br />
Ping statistics for 67.213.218.162:<br />
&nbsp; &nbsp; Packets: Sent = 4, Received = 3, Lost = 1 (25% loss),<br />
Approximate round trip times in milli-seconds:<br />
&nbsp; &nbsp; Minimum = 499ms, Maximum = 513ms, Average = 507ms<br />
Ping statistics for 207.182.151.19:<br />
&nbsp; &nbsp; Packets: Sent = 4, Received = 3, Lost = 1 (25% loss),<br />
Approximate round trip times in milli-seconds:<br />
&nbsp; &nbsp; Minimum = 420ms, Maximum = 433ms, Average = 426ms</div>

							
							
							
							
															<div id="post_rate_div_405111"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo405111_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=679" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=33003&amp;repquote=405111&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 405111)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_2"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid405123" summary="pid405123" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2213" target="_blank" id="userinfo405123" class="dropmenu" onmouseover="showMenu(this.id)">核子力量</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">Twitter.com/hzpower</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2213">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2213&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_3" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum405123" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=33003&page=1#pid405123', '话题链接已经复制到剪贴板')">4楼</strong>
													<em onclick="$('postmessage_405123').className='t_bigfont'">大</em>							<em onclick="$('postmessage_405123').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_405123').className='t_smallfont'">小</em>												发表于 2009-12-30 14:34&nbsp;																					<a href="viewthread.php?tid=33003&amp;page=1&amp;authorid=2213" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_3"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_3"></div><div id="ad_thread4_3"></div>
						
						
																											<div id="postmessage_405123" class="t_msgfont">袈裟英明</div>

							
							
							
							
															<div id="post_rate_div_405123"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo405123_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://twitter.com/hzpower" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=2213" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=33003&amp;repquote=405123&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 405123)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_3"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid405130" summary="pid405130" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2578" target="_blank" id="userinfo405130" class="dropmenu" onmouseover="showMenu(this.id)">闹了个运</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">Twitter @naoyunhui 不算激情革命派，但是心情容易激动，有正义感，骨子里还是偏温和，要是玩不过你，就颠儿。</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2578">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2578&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_4" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum405130" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=33003&page=1#pid405130', '话题链接已经复制到剪贴板')">5楼</strong>
													<em onclick="$('postmessage_405130').className='t_bigfont'">大</em>							<em onclick="$('postmessage_405130').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_405130').className='t_smallfont'">小</em>												发表于 2009-12-30 14:39&nbsp;																					<a href="viewthread.php?tid=33003&amp;page=1&amp;authorid=2578" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_4"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_4"></div><div id="ad_thread4_4"></div>
						
						
																											<div id="postmessage_405130" class="t_msgfont">好东西</div>

							
							
							
							
															<div id="post_rate_div_405130"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo405130_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=2578" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=33003&amp;repquote=405130&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 405130)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_4"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid405178" summary="pid405178" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1960" target="_blank" id="userinfo405178" class="dropmenu" onmouseover="showMenu(this.id)">库存袈裟</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">@bruceku 想象力比知识更重要。</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1960">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1960&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_5" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum405178" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=33003&page=1#pid405178', '话题链接已经复制到剪贴板')">6楼</strong>
													<em onclick="$('postmessage_405178').className='t_bigfont'">大</em>							<em onclick="$('postmessage_405178').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_405178').className='t_smallfont'">小</em>												发表于 2009-12-30 15:23&nbsp;																					<a href="viewthread.php?tid=33003&amp;page=1&amp;authorid=1960" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_5"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_5"></div><div id="ad_thread4_5"></div>
						
						
																											<div id="postmessage_405178" class="t_msgfont">想想，这招可真够贱的~</div>

							
							
							
							
															<div id="post_rate_div_405178"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo405178_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1960" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=33003&amp;repquote=405178&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 405178)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_5"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid405206" summary="pid405206" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2213" target="_blank" id="userinfo405206" class="dropmenu" onmouseover="showMenu(this.id)">核子力量</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">Twitter.com/hzpower</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2213">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2213&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_6" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum405206" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=33003&page=1#pid405206', '话题链接已经复制到剪贴板')">7楼</strong>
													<em onclick="$('postmessage_405206').className='t_bigfont'">大</em>							<em onclick="$('postmessage_405206').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_405206').className='t_smallfont'">小</em>												发表于 2009-12-30 15:35&nbsp;																					<a href="viewthread.php?tid=33003&amp;page=1&amp;authorid=2213" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_6"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_6"></div><div id="ad_thread4_6"></div>
													<h2>回复 6楼 库存袈裟 的话题</h2>
						
						
																											<div id="postmessage_405206" class="t_msgfont">其实可以考虑打个包，搜集一定数量的ssh账号，再把MyEnTunnel集成一下，做成运行后随机选一个账号自动连接，连不上再换下一个账号，这样的傻瓜程序能方便更多的人</div>

							
							
							
							
															<div id="post_rate_div_405206"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo405206_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://twitter.com/hzpower" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=2213" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=33003&amp;repquote=405206&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 405206)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_6"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid405220" summary="pid405220" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8351" target="_blank" id="userinfo405220" class="dropmenu" onmouseover="showMenu(this.id)">isonomy</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8351">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8351&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_7" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum405220" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=33003&page=1#pid405220', '话题链接已经复制到剪贴板')">8楼</strong>
													<em onclick="$('postmessage_405220').className='t_bigfont'">大</em>							<em onclick="$('postmessage_405220').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_405220').className='t_smallfont'">小</em>												发表于 2009-12-30 15:42&nbsp;																					<a href="viewthread.php?tid=33003&amp;page=1&amp;authorid=8351" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_7"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_7"></div><div id="ad_thread4_7"></div>
						
						
																											<div id="postmessage_405220" class="t_msgfont">试用不错！<br />
mark</div>

							
							
							
							
															<div id="post_rate_div_405220"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo405220_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=8351" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=33003&amp;repquote=405220&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 405220)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_7"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid405221" summary="pid405221" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1960" target="_blank" id="userinfo405221" class="dropmenu" onmouseover="showMenu(this.id)">库存袈裟</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">@bruceku 想象力比知识更重要。</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1960">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1960&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_8" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum405221" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=33003&page=1#pid405221', '话题链接已经复制到剪贴板')">9楼</strong>
													<em onclick="$('postmessage_405221').className='t_bigfont'">大</em>							<em onclick="$('postmessage_405221').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_405221').className='t_smallfont'">小</em>												发表于 2009-12-30 15:42&nbsp;																					<a href="viewthread.php?tid=33003&amp;page=1&amp;authorid=1960" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_8"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_8"></div><div id="ad_thread4_8"></div>
													<h2>回复 7楼 核子力量 的话题</h2>
						
						
																											<div id="postmessage_405221" class="t_msgfont">好主意，可惜我不会写应用程序，找个会C的童鞋搞一个。</div>

							
							
							
							
															<div id="post_rate_div_405221"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo405221_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1960" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=33003&amp;repquote=405221&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 405221)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_8"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid405389" summary="pid405389" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10769" target="_blank" id="userinfo405389" class="dropmenu" onmouseover="showMenu(this.id)">zhiweimao</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10769">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10769&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_9" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum405389" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=33003&page=1#pid405389', '话题链接已经复制到剪贴板')">10楼</strong>
													<em onclick="$('postmessage_405389').className='t_bigfont'">大</em>							<em onclick="$('postmessage_405389').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_405389').className='t_smallfont'">小</em>												发表于 2009-12-30 17:21&nbsp;																					<a href="viewthread.php?tid=33003&amp;page=1&amp;authorid=10769" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_9"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_9"></div><div id="ad_thread4_9"></div>
						
						
																											<div id="postmessage_405389" class="t_msgfont">都被堵在墙内很久了，马上试用之~~</div>

							
							
							
							
															<div id="post_rate_div_405389"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo405389_menu" style="display: none;">
										<div class="imicons">
													<a target='_blank' href='http://settings.messenger.live.com/Conversation/IMMe.aspx?invitee=maodawei2004@163.com&mkt=zh-cn'><img style='border-style: none;' src='http://messenger.services.live.com/users/maodawei2004@163.com/presenceimage?mkt=zh-cn' width='16' height='16' /></a>
												<a href="http://wpa.qq.com/msgrd?V=1&amp;Uin=375813753&amp;Site=1984bbs.com&amp;Menu=yes" target="_blank"><img src="images/default/qq.gif" alt="QQ" /></a>																							</div>
										<dl></dl>
											<p><a href="http://暂无" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=10769" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=33003&amp;repquote=405389&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 405389)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_9"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid405434" summary="pid405434" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6873" target="_blank" id="userinfo405434" class="dropmenu" onmouseover="showMenu(this.id)">萧易寒</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6873">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6873&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_10" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum405434" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=33003&page=1#pid405434', '话题链接已经复制到剪贴板')">11楼</strong>
													<em onclick="$('postmessage_405434').className='t_bigfont'">大</em>							<em onclick="$('postmessage_405434').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_405434').className='t_smallfont'">小</em>												发表于 2009-12-30 17:53&nbsp;																					<a href="viewthread.php?tid=33003&amp;page=1&amp;authorid=6873" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_10"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_10"></div><div id="ad_thread4_10"></div>
						
						
																											<div id="postmessage_405434" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>库存袈裟</i> 于 2009-12-30 15:23 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=405178&amp;ptid=33003" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
想想，这招可真够贱的~ </blockquote></div>是有点问题，会让人更BS中国人，我建议大家如果经济没有问题还是去买付费的带SSH的空间吧</div>

							
							
							
							
															<div id="post_rate_div_405434"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo405434_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=6873" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=33003&amp;repquote=405434&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 405434)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_10"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid405570" summary="pid405570" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10114" target="_blank" id="userinfo405570" class="dropmenu" onmouseover="showMenu(this.id)">m3g4</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10114">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10114&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_11" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum405570" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=33003&page=1#pid405570', '话题链接已经复制到剪贴板')">12楼</strong>
													<em onclick="$('postmessage_405570').className='t_bigfont'">大</em>							<em onclick="$('postmessage_405570').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_405570').className='t_smallfont'">小</em>												发表于 2009-12-30 19:57&nbsp;																					<a href="viewthread.php?tid=33003&amp;page=1&amp;authorid=10114" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_11"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_11"></div><div id="ad_thread4_11"></div>
						
						
																											<div id="postmessage_405570" class="t_msgfont">只能临时用用吧毕竟不是长久之计</div>

							
							
							
							
															<div id="post_rate_div_405570"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo405570_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=10114" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=33003&amp;repquote=405570&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 405570)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_11"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid405678" summary="pid405678" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6920" target="_blank" id="userinfo405678" class="dropmenu" onmouseover="showMenu(this.id)">淮月</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">翻墙痴迷者 雄性文青  @qhgy</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6920">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6920&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_12" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum405678" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=33003&page=1#pid405678', '话题链接已经复制到剪贴板')">13楼</strong>
													<em onclick="$('postmessage_405678').className='t_bigfont'">大</em>							<em onclick="$('postmessage_405678').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_405678').className='t_smallfont'">小</em>												发表于 2009-12-30 21:29&nbsp;																					<a href="viewthread.php?tid=33003&amp;page=1&amp;authorid=6920" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_12"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_12"></div><div id="ad_thread4_12"></div>
						
						
																											<div id="postmessage_405678" class="t_msgfont">好東西 袈裟又為大家做貢獻了</div>

							
							
							
							
															<div id="post_rate_div_405678"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo405678_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://twitter.com/qhgy" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=6920" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=33003&amp;repquote=405678&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 405678)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_12"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid405861" summary="pid405861" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=4391" target="_blank" id="userinfo405861" class="dropmenu" onmouseover="showMenu(this.id)">杨东根</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=4391">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=4391&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_13" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum405861" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=33003&page=1#pid405861', '话题链接已经复制到剪贴板')">14楼</strong>
													<em onclick="$('postmessage_405861').className='t_bigfont'">大</em>							<em onclick="$('postmessage_405861').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_405861').className='t_smallfont'">小</em>												发表于 2009-12-30 23:43&nbsp;																					<a href="viewthread.php?tid=33003&amp;page=1&amp;authorid=4391" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_13"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_13"></div><div id="ad_thread4_13"></div>
						
						
																											<div id="postmessage_405861" class="t_msgfont">袈裟 我还是 享 不了福 阿&nbsp; &nbsp; <br />
<br />
操作系统：Linux&nbsp; &nbsp; \ubuntu\<br />
浏览器：Firefox &#187;<br />
lionel@ubuntu:~/Documents$ ls<br />
ssh&nbsp;&nbsp;ssh~&nbsp;&nbsp;sshgfw&nbsp;&nbsp;sshgfw~&nbsp;&nbsp;翻墙&nbsp;&nbsp;翻墙~<br />
lionel@ubuntu:~/Documents$ ssh -D 7070 <a href="mailto:cpanelde@67.228.232.2">cpanelde@67.228.232.2</a><br />
The authenticity of host '67.228.232.2 (67.228.232.2)' can't be established.<br />
RSA key fingerprint is 84:f9:a8:41:7b:2f:88:2c:0a:5d:30:31:77:5e:97:d5.<br />
Are you sure you want to continue connecting (yes/no)? yes<br />
Warning: Permanently added '67.228.232.2' (RSA) to the list of known hosts.<br />
<a href="mailto:cpanelde@67.228.232.2">cpanelde@67.228.232.2</a>'s password: <br />
Last login: Wed Dec 30 05:32:20 2009 from 115.74.73.231<br />
Shell access is not enabled on your account!<br />
If you need shell access please contact support.<br />
Connection to 67.228.232.2 closed.<br />
lionel@ubuntu:~/Documents$ ^C<br />
lionel@ubuntu:~/Documents$</div>

							
							
							
							
															<div id="post_rate_div_405861"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo405861_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=4391" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=33003&amp;repquote=405861&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 405861)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_13"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid405923" summary="pid405923" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1416" target="_blank" id="userinfo405923" class="dropmenu" onmouseover="showMenu(this.id)">nicky_hk</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">烤鸭党粉丝，十二点党粉丝.</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1416">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1416&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_14" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum405923" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=33003&page=1#pid405923', '话题链接已经复制到剪贴板')">15楼</strong>
													<em onclick="$('postmessage_405923').className='t_bigfont'">大</em>							<em onclick="$('postmessage_405923').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_405923').className='t_smallfont'">小</em>												发表于 2009-12-31 00:37&nbsp;																					<a href="viewthread.php?tid=33003&amp;page=1&amp;authorid=1416" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_14"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_14"></div><div id="ad_thread4_14"></div>
						
						
																											<div id="postmessage_405923" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>杨东根</i> 于 2009-12-30 23:43 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=405861&amp;ptid=33003" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
袈裟 我还是 享 不了福 阿&nbsp; &nbsp; <br />
<br />
操作系统：Linux&nbsp; &nbsp; \ubuntu\<br />
浏览器：Firefox &#187;<br />
lionel@ubuntu:~/Documents$ ls<br />
ssh&nbsp;&nbsp;ssh~&nbsp;&nbsp;sshgfw&nbsp;&nbsp;sshgfw~&nbsp;&nbsp;翻墙&nbsp;&nbsp;翻墙~<br />
lionel@ubuntu:~/Documents$ ssh -D 7070 cpan ... </blockquote></div>看此文：<a href="https://dl.dropbox.com/u/873345/howto/linux+firefox.html" target="_blank">https://dl.dropbox.com/u/873345/howto/linux+firefox.html</a><br />
安装expect，你试一试</div>

							
							
							
							
															<div id="post_rate_div_405923"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo405923_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1416" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=33003&amp;repquote=405923&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 405923)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_14"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid406563" summary="pid406563" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10215" target="_blank" id="userinfo406563" class="dropmenu" onmouseover="showMenu(this.id)">uinstriv</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10215">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10215&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_15" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum406563" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=33003&page=1#pid406563', '话题链接已经复制到剪贴板')">16楼</strong>
													<em onclick="$('postmessage_406563').className='t_bigfont'">大</em>							<em onclick="$('postmessage_406563').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_406563').className='t_smallfont'">小</em>												发表于 2009-12-31 12:51&nbsp;																					<a href="viewthread.php?tid=33003&amp;page=1&amp;authorid=10215" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_15"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_15"></div><div id="ad_thread4_15"></div>
						
						
																											<div id="postmessage_406563" class="t_msgfont">这IP地址一公布 不是方便贵党定点清除了？</div>

							
							
							
							
															<div id="post_rate_div_406563"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo406563_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=10215" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=33003&amp;repquote=406563&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 406563)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_15"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid406910" summary="pid406910" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1416" target="_blank" id="userinfo406910" class="dropmenu" onmouseover="showMenu(this.id)">nicky_hk</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">烤鸭党粉丝，十二点党粉丝.</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1416">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1416&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_16" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum406910" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=33003&page=1#pid406910', '话题链接已经复制到剪贴板')">17楼</strong>
													<em onclick="$('postmessage_406910').className='t_bigfont'">大</em>							<em onclick="$('postmessage_406910').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_406910').className='t_smallfont'">小</em>												发表于 2009-12-31 15:43&nbsp;																					<a href="viewthread.php?tid=33003&amp;page=1&amp;authorid=1416" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_16"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_16"></div><div id="ad_thread4_16"></div>
						
						
																											<div id="postmessage_406910" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>库存袈裟</i> 于 2009-12-30 15:42 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=405221&amp;ptid=33003" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
好主意，可惜我不会写应用程序，找个会C的童鞋搞一个。 </blockquote></div>倒是可以用java搞一个，很方便，但是一想到跑java程序还需要jre，还要额外装一个，想想还是算了。用c++或者c#写吧，把服务器的文件放到svn上，客户端每次启动的时候去checkout最新的服务器文件，然后代理 就ok了&nbsp;&nbsp;技术上应该不难的</div>

							
							
							
							
															<div id="post_rate_div_406910"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo406910_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1416" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=33003&amp;repquote=406910&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 406910)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_16"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid407026" summary="pid407026" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=679" target="_blank" id="userinfo407026" class="dropmenu" onmouseover="showMenu(this.id)">8ger</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">我还是低调点比较好</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=679">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=679&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_17" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum407026" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=33003&page=1#pid407026', '话题链接已经复制到剪贴板')">18楼</strong>
													<em onclick="$('postmessage_407026').className='t_bigfont'">大</em>							<em onclick="$('postmessage_407026').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_407026').className='t_smallfont'">小</em>												发表于 2009-12-31 17:15&nbsp;																					<a href="viewthread.php?tid=33003&amp;page=1&amp;authorid=679" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_17"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_17"></div><div id="ad_thread4_17"></div>
						
						
																											<div id="postmessage_407026" class="t_msgfont">好像已经有挂掉的了……</div>

							
							
							
							
															<div id="post_rate_div_407026"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo407026_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=679" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=33003&amp;repquote=407026&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 407026)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_17"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid407241" summary="pid407241" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8430" target="_blank" id="userinfo407241" class="dropmenu" onmouseover="showMenu(this.id)">树上春村</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">VI IV XXI</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8430">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8430&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_18" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum407241" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=33003&page=1#pid407241', '话题链接已经复制到剪贴板')">19楼</strong>
													<em onclick="$('postmessage_407241').className='t_bigfont'">大</em>							<em onclick="$('postmessage_407241').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_407241').className='t_smallfont'">小</em>												发表于 2009-12-31 20:19&nbsp;																					<a href="viewthread.php?tid=33003&amp;page=1&amp;authorid=8430" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_18"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_18"></div><div id="ad_thread4_18"></div>
						
						
																											<div id="postmessage_407241" class="t_msgfont">试了2个，貌似都不行。</div>

							
							
							
							
															<div id="post_rate_div_407241"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo407241_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=8430" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=33003&amp;repquote=407241&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 407241)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_18"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid407272" summary="pid407272" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=5404" target="_blank" id="userinfo407272" class="dropmenu" onmouseover="showMenu(this.id)">江南的雨季</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">My Blog:Jitler.Com  Twitter:@yxzjn</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=5404">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=5404&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_19" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum407272" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=33003&page=1#pid407272', '话题链接已经复制到剪贴板')">20楼</strong>
													<em onclick="$('postmessage_407272').className='t_bigfont'">大</em>							<em onclick="$('postmessage_407272').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_407272').className='t_smallfont'">小</em>												发表于 2009-12-31 20:48&nbsp;																					<a href="viewthread.php?tid=33003&amp;page=1&amp;authorid=5404" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_19"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_19"></div><div id="ad_thread4_19"></div>
						
						
																											<div id="postmessage_407272" class="t_msgfont">mark</div>

							
							
							
							
															<div id="post_rate_div_407272"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo407272_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://jitler.com" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=5404" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=33003&amp;repquote=407272&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 407272)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_19"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid407282" summary="pid407282" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=9044" target="_blank" id="userinfo407282" class="dropmenu" onmouseover="showMenu(this.id)">gongchangb</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=9044">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=9044&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_20" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum407282" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=33003&page=1#pid407282', '话题链接已经复制到剪贴板')">21楼</strong>
													<em onclick="$('postmessage_407282').className='t_bigfont'">大</em>							<em onclick="$('postmessage_407282').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_407282').className='t_smallfont'">小</em>												发表于 2009-12-31 20:54&nbsp;																					<a href="viewthread.php?tid=33003&amp;page=1&amp;authorid=9044" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_20"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_20"></div><div id="ad_thread4_20"></div>
						
						
																											<div id="postmessage_407282" class="t_msgfont">学习了</div>

							
							
							
							
															<div id="post_rate_div_407282"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo407282_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=9044" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=33003&amp;repquote=407282&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 407282)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_20"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid407312" summary="pid407312" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7226" target="_blank" id="userinfo407312" class="dropmenu" onmouseover="showMenu(this.id)">zyl1989</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">一人作古何惧忧，天安门内尽风流。可怜书生项上血，至今黄泉怒未休！</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7226">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7226&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_21" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum407312" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=33003&page=1#pid407312', '话题链接已经复制到剪贴板')">22楼</strong>
													<em onclick="$('postmessage_407312').className='t_bigfont'">大</em>							<em onclick="$('postmessage_407312').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_407312').className='t_smallfont'">小</em>												发表于 2009-12-31 21:12&nbsp;																					<a href="viewthread.php?tid=33003&amp;page=1&amp;authorid=7226" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_21"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_21"></div><div id="ad_thread4_21"></div>
						
						
																											<div id="postmessage_407312" class="t_msgfont">测试，facebook上访不能</div>

							
							
							
							
															<div id="post_rate_div_407312"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo407312_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=7226" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=33003&amp;repquote=407312&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 407312)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_21"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid407449" summary="pid407449" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1146" target="_blank" id="userinfo407449" class="dropmenu" onmouseover="showMenu(this.id)">olindays</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1146">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1146&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_22" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum407449" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=33003&page=1#pid407449', '话题链接已经复制到剪贴板')">23楼</strong>
													<em onclick="$('postmessage_407449').className='t_bigfont'">大</em>							<em onclick="$('postmessage_407449').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_407449').className='t_smallfont'">小</em>												发表于 2009-12-31 22:30&nbsp;																					<a href="viewthread.php?tid=33003&amp;page=1&amp;authorid=1146" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_22"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_22"></div><div id="ad_thread4_22"></div>
						
						
																											<div id="postmessage_407449" class="t_msgfont">还是买个空间自己建个独立blog<br />
顺便又上网，多爽，俺不用跟别人抢。<br />
现在舍不得银子，看不了外网啊。图的就是一稳定没干扰。</div>

							
							
							
							
															<div id="post_rate_div_407449"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo407449_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1146" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=33003&amp;repquote=407449&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 407449)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_22"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid407504" summary="pid407504" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1960" target="_blank" id="userinfo407504" class="dropmenu" onmouseover="showMenu(this.id)">库存袈裟</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">@bruceku 想象力比知识更重要。</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1960">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1960&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_23" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum407504" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=33003&page=1#pid407504', '话题链接已经复制到剪贴板')">24楼</strong>
													<em onclick="$('postmessage_407504').className='t_bigfont'">大</em>							<em onclick="$('postmessage_407504').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_407504').className='t_smallfont'">小</em>												发表于 2009-12-31 23:08&nbsp;																					<a href="viewthread.php?tid=33003&amp;page=1&amp;authorid=1960" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_23"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_23"></div><div id="ad_thread4_23"></div>
													<h2>回复 19楼 树上春村 的话题</h2>
						
						
																											<div id="postmessage_407504" class="t_msgfont">哭，我又背上了杀手的恶名。</div>

							
							
							
							
															<div id="post_rate_div_407504"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo407504_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1960" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=33003&amp;repquote=407504&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 407504)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_23"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid407539" summary="pid407539" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10733" target="_blank" id="userinfo407539" class="dropmenu" onmouseover="showMenu(this.id)">pillarchang</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10733">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10733&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_24" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum407539" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=33003&page=1#pid407539', '话题链接已经复制到剪贴板')">25楼</strong>
													<em onclick="$('postmessage_407539').className='t_bigfont'">大</em>							<em onclick="$('postmessage_407539').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_407539').className='t_smallfont'">小</em>												发表于 2009-12-31 23:27&nbsp;																					<a href="viewthread.php?tid=33003&amp;page=1&amp;authorid=10733" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_24"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_24"></div><div id="ad_thread4_24"></div>
						
						
																											<div id="postmessage_407539" class="t_msgfont">好方法<br />
顶之</div>

							
							
							
							
															<div id="post_rate_div_407539"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo407539_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=10733" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=33003&amp;repquote=407539&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 407539)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_24"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid408551" summary="pid408551" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1909" target="_blank" id="userinfo408551" class="dropmenu" onmouseover="showMenu(this.id)">单手扶墙</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">活了几十年年，没能为党为人民做点什么，每思及此，心神不宁。</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1909">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1909&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_25" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum408551" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=33003&page=1#pid408551', '话题链接已经复制到剪贴板')">26楼</strong>
													<em onclick="$('postmessage_408551').className='t_bigfont'">大</em>							<em onclick="$('postmessage_408551').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_408551').className='t_smallfont'">小</em>												发表于 2010-1-1 18:00&nbsp;																					<a href="viewthread.php?tid=33003&amp;page=1&amp;authorid=1909" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_25"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_25"></div><div id="ad_thread4_25"></div>
						
						
																											<div id="postmessage_408551" class="t_msgfont">用后灰常爽。。谢谢袈裟</div>

							
							
							
							
															<div id="post_rate_div_408551"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo408551_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1909" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=33003&amp;repquote=408551&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 408551)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_25"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid408791" summary="pid408791" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=3900" target="_blank" id="userinfo408791" class="dropmenu" onmouseover="showMenu(this.id)">mcdull</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">叫我已食玛丽好了</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=3900">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=3900&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_26" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum408791" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=33003&page=1#pid408791', '话题链接已经复制到剪贴板')">27楼</strong>
													<em onclick="$('postmessage_408791').className='t_bigfont'">大</em>							<em onclick="$('postmessage_408791').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_408791').className='t_smallfont'">小</em>												发表于 2010-1-1 21:15&nbsp;																					<a href="viewthread.php?tid=33003&amp;page=1&amp;authorid=3900" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_26"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_26"></div><div id="ad_thread4_26"></div>
						
						
																											<div id="postmessage_408791" class="t_msgfont">稀里糊涂就翻了墙，谢谢裟组</div>

							
							
							
							
															<div id="post_rate_div_408791"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo408791_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=3900" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=33003&amp;repquote=408791&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 408791)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_26"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid409616" summary="pid409616" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=679" target="_blank" id="userinfo409616" class="dropmenu" onmouseover="showMenu(this.id)">8ger</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">我还是低调点比较好</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=679">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=679&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_27" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum409616" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=33003&page=1#pid409616', '话题链接已经复制到剪贴板')">28楼</strong>
													<em onclick="$('postmessage_409616').className='t_bigfont'">大</em>							<em onclick="$('postmessage_409616').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_409616').className='t_smallfont'">小</em>												发表于 2010-1-2 13:09&nbsp;																					<a href="viewthread.php?tid=33003&amp;page=1&amp;authorid=679" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_27"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_27"></div><div id="ad_thread4_27"></div>
						
						
																											<div id="postmessage_409616" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>zyl1989</i> 于 2009-12-31 21:12 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=407312&amp;ptid=33003" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
测试，facebook上访不能 </blockquote></div>绝对可以的，我天天上</div>

							
							
							
							
															<div id="post_rate_div_409616"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo409616_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=679" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=33003&amp;repquote=409616&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 409616)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_27"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid409838" summary="pid409838" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8798" target="_blank" id="userinfo409838" class="dropmenu" onmouseover="showMenu(this.id)">e_pu</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8798">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8798&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_28" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum409838" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=33003&page=1#pid409838', '话题链接已经复制到剪贴板')">29楼</strong>
													<em onclick="$('postmessage_409838').className='t_bigfont'">大</em>							<em onclick="$('postmessage_409838').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_409838').className='t_smallfont'">小</em>												发表于 2010-1-2 14:58&nbsp;																					<a href="viewthread.php?tid=33003&amp;page=1&amp;authorid=8798" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_28"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_28"></div><div id="ad_thread4_28"></div>
						
						
																											<div id="postmessage_409838" class="t_msgfont">mark 之</div>

							
							
							
							
															<div id="post_rate_div_409838"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo409838_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=8798" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=33003&amp;repquote=409838&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 409838)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_28"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid409845" summary="pid409845" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8798" target="_blank" id="userinfo409845" class="dropmenu" onmouseover="showMenu(this.id)">e_pu</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8798">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8798&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_29" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum409845" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=33003&page=1#pid409845', '话题链接已经复制到剪贴板')">30楼</strong>
													<em onclick="$('postmessage_409845').className='t_bigfont'">大</em>							<em onclick="$('postmessage_409845').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_409845').className='t_smallfont'">小</em>												发表于 2010-1-2 15:05&nbsp;																					<a href="viewthread.php?tid=33003&amp;page=1&amp;authorid=8798" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_29"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_29"></div><div id="ad_thread4_29"></div>
						
						
																											<div id="postmessage_409845" class="t_msgfont">似通非通，小锁变成绿色了，但是仍然登不上twitter</div>

							
							
							
							
															<div id="post_rate_div_409845"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo409845_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=8798" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=33003&amp;repquote=409845&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 409845)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_29"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid409853" summary="pid409853" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2213" target="_blank" id="userinfo409853" class="dropmenu" onmouseover="showMenu(this.id)">核子力量</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">Twitter.com/hzpower</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2213">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2213&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_30" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum409853" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=33003&page=1#pid409853', '话题链接已经复制到剪贴板')">31楼</strong>
													<em onclick="$('postmessage_409853').className='t_bigfont'">大</em>							<em onclick="$('postmessage_409853').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_409853').className='t_smallfont'">小</em>												发表于 2010-1-2 15:09&nbsp;																					<a href="viewthread.php?tid=33003&amp;page=1&amp;authorid=2213" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_30"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_30"></div><div id="ad_thread4_30"></div>
						
						
																											<div id="postmessage_409853" class="t_msgfont">来自 188.40.174.161 的回复: 字节=32 时间=450ms TTL=42<br />
来自 75.127.68.101 的回复: 字节=32 时间=311ms TTL=45<br />
来自 67.228.232.2 的回复: 字节=32 时间=241ms TTL=47<br />
来自 67.213.218.162 的回复: 字节=32 时间=284ms TTL=46<br />
来自 207.182.151.19 的回复: 字节=32 时间=264ms TTL=45<br />
来自 206.212.253.54 的回复: 字节=32 时间=321ms TTL=42<br />
来自 204.124.181.194 的回复: 字节=32 时间=309ms TTL=41<br />
来自 67.228.94.72 的回复: 字节=32 时间=254ms TTL=47</div>

							
							
							
							
															<div id="post_rate_div_409853"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo409853_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://twitter.com/hzpower" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=2213" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=33003&amp;repquote=409853&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 409853)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_30"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid410498" summary="pid410498" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10733" target="_blank" id="userinfo410498" class="dropmenu" onmouseover="showMenu(this.id)">pillarchang</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10733">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10733&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_31" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum410498" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=33003&page=1#pid410498', '话题链接已经复制到剪贴板')">32楼</strong>
													<em onclick="$('postmessage_410498').className='t_bigfont'">大</em>							<em onclick="$('postmessage_410498').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_410498').className='t_smallfont'">小</em>												发表于 2010-1-2 21:52&nbsp;																					<a href="viewthread.php?tid=33003&amp;page=1&amp;authorid=10733" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_31"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_31"></div><div id="ad_thread4_31"></div>
						
						
																											<div id="postmessage_410498" class="t_msgfont">经确认，可以轻松翻墙</div>

							
							
							
							
															<div id="post_rate_div_410498"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo410498_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=10733" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=33003&amp;repquote=410498&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 410498)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_31"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid410950" summary="pid410950" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10656" target="_blank" id="userinfo410950" class="dropmenu" onmouseover="showMenu(this.id)">lxh1943</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10656">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10656&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_32" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum410950" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=33003&page=1#pid410950', '话题链接已经复制到剪贴板')">33楼</strong>
													<em onclick="$('postmessage_410950').className='t_bigfont'">大</em>							<em onclick="$('postmessage_410950').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_410950').className='t_smallfont'">小</em>												发表于 2010-1-3 02:02&nbsp;																					<a href="viewthread.php?tid=33003&amp;page=1&amp;authorid=10656" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_32"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_32"></div><div id="ad_thread4_32"></div>
						
						
																											<div id="postmessage_410950" class="t_msgfont">呵呵 哥们的技术贴很不错啊···</div>

							
							
							
							
															<div id="post_rate_div_410950"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo410950_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=10656" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=33003&amp;repquote=410950&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 410950)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_32"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid410984" summary="pid410984" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8426" target="_blank" id="userinfo410984" class="dropmenu" onmouseover="showMenu(this.id)">singsingchow</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8426">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8426&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_33" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum410984" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=33003&page=1#pid410984', '话题链接已经复制到剪贴板')">34楼</strong>
													<em onclick="$('postmessage_410984').className='t_bigfont'">大</em>							<em onclick="$('postmessage_410984').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_410984').className='t_smallfont'">小</em>												发表于 2010-1-3 03:02&nbsp;																					<a href="viewthread.php?tid=33003&amp;page=1&amp;authorid=8426" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_33"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_33"></div><div id="ad_thread4_33"></div>
						
						
																											<div id="postmessage_410984" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>核子力量</i> 于 2009-12-30 15:35 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=405206&amp;ptid=33003" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
其实可以考虑打个包，搜集一定数量的ssh账号，再把MyEnTunnel集成一下，做成运行后随机选一个账号自动连接，连不上再换下一个账号，这样的傻瓜程序能方便更多的人 </blockquote></div>其实这样的集成随机代理的做法，在Gapp方式流行很久了<br />
<br />
最流行的中文Opera定制版紫电版的最大特点就是集成了这个并做成了一个方便的按钮<br />
<br />
不过后来紫电自阉了不再集成。。。以前的Gapp也一个个失效<br />
<br />
所以现在也不用他了</div>

							
							
							
							
															<div id="post_rate_div_410984"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo410984_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=8426" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=33003&amp;repquote=410984&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 410984)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_33"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid413709" summary="pid413709" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=4601" target="_blank" id="userinfo413709" class="dropmenu" onmouseover="showMenu(this.id)">mzm</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">槑怎么</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=4601">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=4601&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_34" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum413709" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=33003&page=1#pid413709', '话题链接已经复制到剪贴板')">35楼</strong>
													<em onclick="$('postmessage_413709').className='t_bigfont'">大</em>							<em onclick="$('postmessage_413709').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_413709').className='t_smallfont'">小</em>												发表于 2010-1-4 17:07&nbsp;																					<a href="viewthread.php?tid=33003&amp;page=1&amp;authorid=4601" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_34"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_34"></div><div id="ad_thread4_34"></div>
						
						
																											<div id="postmessage_413709" class="t_msgfont">用袈裟的思路，然后google cpanel demo login，就可以自己寻找独享的IP啦。哈哈，非常好用啊。谢谢袈裟。</div>

							
							
							
							
															<div id="post_rate_div_413709"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo413709_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=4601" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=33003&amp;repquote=413709&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 413709)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_34"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid415381" summary="pid415381" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=9209" target="_blank" id="userinfo415381" class="dropmenu" onmouseover="showMenu(this.id)">nemars</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=9209">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=9209&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_35" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum415381" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=33003&page=1#pid415381', '话题链接已经复制到剪贴板')">36楼</strong>
													<em onclick="$('postmessage_415381').className='t_bigfont'">大</em>							<em onclick="$('postmessage_415381').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_415381').className='t_smallfont'">小</em>												发表于 2010-1-5 15:25&nbsp;																					<a href="viewthread.php?tid=33003&amp;page=1&amp;authorid=9209" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_35"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_35"></div><div id="ad_thread4_35"></div>
						
						
																											<div id="postmessage_415381" class="t_msgfont">牛啊 这招 我用上了</div>

							
							
							
							
															<div id="post_rate_div_415381"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo415381_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=9209" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=33003&amp;repquote=415381&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 415381)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_35"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid415419" summary="pid415419" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=4514" target="_blank" id="userinfo415419" class="dropmenu" onmouseover="showMenu(this.id)">牛顿</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+ ...</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=4514">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=4514&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_36" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum415419" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=33003&page=1#pid415419', '话题链接已经复制到剪贴板')">37楼</strong>
													<em onclick="$('postmessage_415419').className='t_bigfont'">大</em>							<em onclick="$('postmessage_415419').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_415419').className='t_smallfont'">小</em>												发表于 2010-1-5 15:51&nbsp;																					<a href="viewthread.php?tid=33003&amp;page=1&amp;authorid=4514" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_36"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_36"></div><div id="ad_thread4_36"></div>
						
						
																											<div id="postmessage_415419" class="t_msgfont">今天这个方法突然翻不了了。。。咋回事捏</div>

							
							
							
							
															<div id="post_rate_div_415419"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo415419_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=4514" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=33003&amp;repquote=415419&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 415419)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_36"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid415423" summary="pid415423" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2213" target="_blank" id="userinfo415423" class="dropmenu" onmouseover="showMenu(this.id)">核子力量</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">Twitter.com/hzpower</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2213">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2213&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_37" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum415423" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=33003&page=1#pid415423', '话题链接已经复制到剪贴板')">38楼</strong>
													<em onclick="$('postmessage_415423').className='t_bigfont'">大</em>							<em onclick="$('postmessage_415423').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_415423').className='t_smallfont'">小</em>												发表于 2010-1-5 15:53&nbsp;																					<a href="viewthread.php?tid=33003&amp;page=1&amp;authorid=2213" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_37"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_37"></div><div id="ad_thread4_37"></div>
													<h2>回复 37楼 牛顿 的话题</h2>
						
						
																											<div id="postmessage_415423" class="t_msgfont">换个号试试，我这还可以</div>

							
							
							
							
															<div id="post_rate_div_415423"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo415423_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://twitter.com/hzpower" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=2213" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=33003&amp;repquote=415423&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 415423)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_37"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid415449" summary="pid415449" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=4514" target="_blank" id="userinfo415449" class="dropmenu" onmouseover="showMenu(this.id)">牛顿</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+1+ ...</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=4514">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=4514&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_38" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum415449" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=33003&page=1#pid415449', '话题链接已经复制到剪贴板')">39楼</strong>
													<em onclick="$('postmessage_415449').className='t_bigfont'">大</em>							<em onclick="$('postmessage_415449').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_415449').className='t_smallfont'">小</em>												发表于 2010-1-5 16:08&nbsp;																					<a href="viewthread.php?tid=33003&amp;page=1&amp;authorid=4514" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_38"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_38"></div><div id="ad_thread4_38"></div>
													<h2>回复 38楼 核子力量 的话题</h2>
						
						
																											<div id="postmessage_415449" class="t_msgfont">换了几个，貌似不行。谢了！</div>

							
							
							
							
															<div id="post_rate_div_415449"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo415449_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=4514" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=33003&amp;repquote=415449&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 415449)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_38"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid468957" summary="pid468957" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=679" target="_blank" id="userinfo468957" class="dropmenu" onmouseover="showMenu(this.id)">8ger</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">我还是低调点比较好</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=679">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=679&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_39" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum468957" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=33003&page=1#pid468957', '话题链接已经复制到剪贴板')">40楼</strong>
													<em onclick="$('postmessage_468957').className='t_bigfont'">大</em>							<em onclick="$('postmessage_468957').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_468957').className='t_smallfont'">小</em>												发表于 2010-2-6 02:10&nbsp;																					<a href="viewthread.php?tid=33003&amp;page=1&amp;authorid=679" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_39"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_39"></div><div id="ad_thread4_39"></div>
						
						
																											<div id="postmessage_468957" class="t_msgfont">杯具，又挂了一个67.228.94.72，现在不知道还有没有能用的</div>

							
							
							
							
															<div id="post_rate_div_468957"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo468957_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=679" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=33003&amp;repquote=468957&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 468957)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_39"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid492771" summary="pid492771" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12254" target="_blank" id="userinfo492771" class="dropmenu" onmouseover="showMenu(this.id)">gongchen713</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">gongchen713</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12254">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12254&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_40" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum492771" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=33003&page=1#pid492771', '话题链接已经复制到剪贴板')">41楼</strong>
													<em onclick="$('postmessage_492771').className='t_bigfont'">大</em>							<em onclick="$('postmessage_492771').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_492771').className='t_smallfont'">小</em>												发表于 2010-2-25 16:52&nbsp;																					<a href="viewthread.php?tid=33003&amp;page=1&amp;authorid=12254" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_40"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_40"></div><div id="ad_thread4_40"></div>
						
						
																											<div id="postmessage_492771" class="t_msgfont">支持下<br />
谢谢</div>

							
							
							
							
															<div id="post_rate_div_492771"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo492771_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=12254" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=33003&amp;repquote=492771&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 492771)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_40"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid515040" summary="pid515040" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=9297" target="_blank" id="userinfo515040" class="dropmenu" onmouseover="showMenu(this.id)">鸟屎</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=9297">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=9297&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_41" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum515040" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=33003&page=1#pid515040', '话题链接已经复制到剪贴板')">42楼</strong>
													<em onclick="$('postmessage_515040').className='t_bigfont'">大</em>							<em onclick="$('postmessage_515040').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_515040').className='t_smallfont'">小</em>												发表于 2010-3-13 14:20&nbsp;																					<a href="viewthread.php?tid=33003&amp;page=1&amp;authorid=9297" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_41"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_41"></div><div id="ad_thread4_41"></div>
						
						
																											<div id="postmessage_515040" class="t_msgfont">我用不了，难道是因为我校园网的问题吗。。。：(</div>

							
							
							
							
															<div id="post_rate_div_515040"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo515040_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=9297" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=33003&amp;repquote=515040&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 515040)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_41"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid521452" summary="pid521452" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12648" target="_blank" id="userinfo521452" class="dropmenu" onmouseover="showMenu(this.id)">tvb110</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12648">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12648&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_42" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum521452" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=33003&page=1#pid521452', '话题链接已经复制到剪贴板')">43楼</strong>
													<em onclick="$('postmessage_521452').className='t_bigfont'">大</em>							<em onclick="$('postmessage_521452').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_521452').className='t_smallfont'">小</em>												发表于 2010-3-18 14:19&nbsp;																					<a href="viewthread.php?tid=33003&amp;page=1&amp;authorid=12648" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_42"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_42"></div><div id="ad_thread4_42"></div>
						
						
																											<div id="postmessage_521452" class="t_msgfont">谢谢，不过只有4个可以用了</div>

							
							
							
							
															<div id="post_rate_div_521452"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo521452_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=12648" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=33003&amp;repquote=521452&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 521452)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_42"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid536233" summary="pid536233" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8798" target="_blank" id="userinfo536233" class="dropmenu" onmouseover="showMenu(this.id)">e_pu</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8798">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8798&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_43" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum536233" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=33003&page=1#pid536233', '话题链接已经复制到剪贴板')">44楼</strong>
													<em onclick="$('postmessage_536233').className='t_bigfont'">大</em>							<em onclick="$('postmessage_536233').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_536233').className='t_smallfont'">小</em>												发表于 2010-3-28 13:26&nbsp;																					<a href="viewthread.php?tid=33003&amp;page=1&amp;authorid=8798" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_43"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_43"></div><div id="ad_thread4_43"></div>
						
						
																											<div id="postmessage_536233" class="t_msgfont">怎么的，都失效了？</div>

							
							
							
							
															<div id="post_rate_div_536233"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo536233_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=8798" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=33003&amp;repquote=536233&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 536233)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_43"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid671940" summary="pid671940" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=13936" target="_blank" id="userinfo671940" class="dropmenu" onmouseover="showMenu(this.id)">sulikov</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=13936">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=13936&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_44" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum671940" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=33003&page=1#pid671940', '话题链接已经复制到剪贴板')">45楼</strong>
													<em onclick="$('postmessage_671940').className='t_bigfont'">大</em>							<em onclick="$('postmessage_671940').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_671940').className='t_smallfont'">小</em>												发表于 2010-6-10 15:54&nbsp;																					<a href="viewthread.php?tid=33003&amp;page=1&amp;authorid=13936" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_44"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_44"></div><div id="ad_thread4_44"></div>
						
						
																											<div id="postmessage_671940" class="t_msgfont">非常有用 谢谢</div>

							
							
							
							
															<div id="post_rate_div_671940"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo671940_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=13936" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=33003&amp;repquote=671940&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 671940)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_44"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid671979" summary="pid671979" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12878" target="_blank" id="userinfo671979" class="dropmenu" onmouseover="showMenu(this.id)">Cary</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">http://twitter.com/isnofate </p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12878">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12878&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_45" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum671979" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=33003&page=1#pid671979', '话题链接已经复制到剪贴板')">46楼</strong>
													<em onclick="$('postmessage_671979').className='t_bigfont'">大</em>							<em onclick="$('postmessage_671979').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_671979').className='t_smallfont'">小</em>												发表于 2010-6-10 16:07&nbsp;																					<a href="viewthread.php?tid=33003&amp;page=1&amp;authorid=12878" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_45"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_45"></div><div id="ad_thread4_45"></div>
						
						
																											<div id="postmessage_671979" class="t_msgfont">mark，我转载到我的blog没问题吧……</div>

							
							
							
							
															<div id="post_rate_div_671979"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo671979_menu" style="display: none;">
										<div class="imicons">
													<a target='_blank' href='http://settings.messenger.live.com/Conversation/IMMe.aspx?invitee=newtype_1982@hotmail.com&mkt=zh-cn'><img style='border-style: none;' src='http://messenger.services.live.com/users/newtype_1982@hotmail.com/presenceimage?mkt=zh-cn' width='16' height='16' /></a>
																																			</div>
										<dl></dl>
											<p><a href="http://isnofate.com" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=12878" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=33003&amp;repquote=671979&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 671979)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_45"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid672010" summary="pid672010" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2213" target="_blank" id="userinfo672010" class="dropmenu" onmouseover="showMenu(this.id)">核子力量</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">Twitter.com/hzpower</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2213">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2213&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_46" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum672010" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=33003&page=1#pid672010', '话题链接已经复制到剪贴板')">47楼</strong>
													<em onclick="$('postmessage_672010').className='t_bigfont'">大</em>							<em onclick="$('postmessage_672010').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_672010').className='t_smallfont'">小</em>												发表于 2010-6-10 16:29&nbsp;																					<a href="viewthread.php?tid=33003&amp;page=1&amp;authorid=2213" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_46"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_46"></div><div id="ad_thread4_46"></div>
													<h2>回复 46楼 Cary 的话题</h2>
						
						
																											<div id="postmessage_672010" class="t_msgfont">个别已经失效了<br />
别转了，有的卖ssh账号的为了竞争，专门举报这个，还到人家网站上发帖提醒人家关闭ssh功能</div>

							
							
							
							
															<div id="post_rate_div_672010"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo672010_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://twitter.com/hzpower" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=2213" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=33003&amp;repquote=672010&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 672010)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_46"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid674747" summary="pid674747" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12878" target="_blank" id="userinfo674747" class="dropmenu" onmouseover="showMenu(this.id)">Cary</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">http://twitter.com/isnofate </p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12878">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12878&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_47" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum674747" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=33003&page=1#pid674747', '话题链接已经复制到剪贴板')">48楼</strong>
													<em onclick="$('postmessage_674747').className='t_bigfont'">大</em>							<em onclick="$('postmessage_674747').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_674747').className='t_smallfont'">小</em>												发表于 2010-6-11 15:42&nbsp;																					<a href="viewthread.php?tid=33003&amp;page=1&amp;authorid=12878" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_47"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_47"></div><div id="ad_thread4_47"></div>
						
						
																											<div id="postmessage_674747" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>核子力量</i> 于 2010-6-10 16:29 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=672010&amp;ptid=33003" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
个别已经失效了<br />
别转了，有的某ssh账号的为了竞争，专门举报这个，还到人家网站上发帖提醒人家关闭ssh功能 </blockquote></div>靠，这得多扭曲才能干的出来啊……</div>

							
							
							
							
															<div id="post_rate_div_674747"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo674747_menu" style="display: none;">
										<div class="imicons">
													<a target='_blank' href='http://settings.messenger.live.com/Conversation/IMMe.aspx?invitee=newtype_1982@hotmail.com&mkt=zh-cn'><img style='border-style: none;' src='http://messenger.services.live.com/users/newtype_1982@hotmail.com/presenceimage?mkt=zh-cn' width='16' height='16' /></a>
																																			</div>
										<dl></dl>
											<p><a href="http://isnofate.com" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=12878" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=33003&amp;repquote=674747&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 674747)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_47"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid674824" summary="pid674824" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2213" target="_blank" id="userinfo674824" class="dropmenu" onmouseover="showMenu(this.id)">核子力量</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">Twitter.com/hzpower</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2213">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2213&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_48" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum674824" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=33003&page=1#pid674824', '话题链接已经复制到剪贴板')">49楼</strong>
													<em onclick="$('postmessage_674824').className='t_bigfont'">大</em>							<em onclick="$('postmessage_674824').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_674824').className='t_smallfont'">小</em>												发表于 2010-6-11 16:11&nbsp;																					<a href="viewthread.php?tid=33003&amp;page=1&amp;authorid=2213" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_48"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_48"></div><div id="ad_thread4_48"></div>
													<h2>回复 48楼 Cary 的话题</h2>
						
						
																											<div id="postmessage_674824" class="t_msgfont">他担心大家都用免费的就不买他的账号了。。。</div>

							
							
							
							
															<div id="post_rate_div_674824"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo674824_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://twitter.com/hzpower" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=2213" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=33003&amp;repquote=674824&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 674824)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_48"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid677801" summary="pid677801" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=14831" target="_blank" id="userinfo677801" class="dropmenu" onmouseover="showMenu(this.id)">zhexing_lin</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=14831">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=14831&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_49" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum677801" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=33003&page=1#pid677801', '话题链接已经复制到剪贴板')">50楼</strong>
													<em onclick="$('postmessage_677801').className='t_bigfont'">大</em>							<em onclick="$('postmessage_677801').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_677801').className='t_smallfont'">小</em>												发表于 2010-6-12 20:31&nbsp;																					<a href="viewthread.php?tid=33003&amp;page=1&amp;authorid=14831" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_49"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_49"></div><div id="ad_thread4_49"></div>
						
						
																											<div id="postmessage_677801" class="t_msgfont">太好了，原来用的那个sshwall的免费ssh，时不时的就fatal error，现在好了不用担心了~</div>

							
							
							
							
															<div id="post_rate_div_677801"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo677801_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=14831" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=33003&amp;repquote=677801&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 677801)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_49"></div>				</div>
			</td>
		</tr>
		</table>
		</div>
</form>





<div class="pages_btns">
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=33003&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=33003&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
	<div class="pages"><em>&nbsp;56&nbsp;</em><strong>1</strong><a href="viewthread.php?tid=33003&amp;extra=&amp;page=2">2</a><a href="viewthread.php?tid=33003&amp;extra=&amp;page=2" class="next">&rsaquo;&rsaquo;</a></div>			<span class="postbtn" id="newspecialtmp" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=33003&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

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

	<form method="post" id="postform" action="post.php?action=reply&amp;fid=26&amp;tid=33003&amp;extra=&amp;replysubmit=yes" onSubmit="return validate(this)">
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
var maxpage = 2;
if(maxpage > 1) {
	document.onkeyup = function(e){
		e = e ? e : window.event;
		var tagname = is_ie ? e.srcElement.tagName : e.target.tagName;
		if(tagname == 'INPUT' || tagname == 'TEXTAREA') return;
		actualCode = e.keyCode ? e.keyCode : e.charCode;
				if(actualCode == 39) {
			window.location = 'viewthread.php?tid=33003&page=2';
		}
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
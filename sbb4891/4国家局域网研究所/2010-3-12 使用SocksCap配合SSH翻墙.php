<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<title>使用SocksCap配合SSH翻墙 - 国家局域网研究所 -  1984bbs.com </title>
<meta name="keywords" content="" />
<meta name="MSSmartTagsPreventParsing" content="True" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<link rel="archives" title="1984bbs.com" href="https://1984bbs.com/archiver/" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_viewthread.css" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_common.css" />
<script type="text/javascript">
	var discuz_uid = 13019;var IMGDIR = 'images/default';var attackevasive = '0';var gid = 0;var STYLEID = '1';
	gid = parseInt('3');var fid = parseInt('26');var tid = parseInt('40080');
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
			<p><a href="index.php" id="forumlist" onmouseover="showMenu(this.id)" class="dropmenu">1984bbs.com</a> &raquo; <a href="forumdisplay.php?fid=26">国家局域网研究所</a> &raquo; 使用SocksCap配合SSH翻墙</p>
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
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=40080&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=40080&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
				<span class="postbtn" id="newspecial" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=40080&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

	<ul class="popupmenu_popup newspecialmenu" id="newspecial_menu" style="display: none">
		<li><a href="post.php?action=newthread&amp;fid=26&amp;extra=">发新话题</a></li>
		<li class="poll"><a href="post.php?action=newthread&amp;fid=26&amp;extra=&amp;special=1">发布投票</a></li>													</ul>

<form method="post" name="modactions">
	<input type="hidden" name="formhash" value="823c9fa2" />
	<div class="mainbox viewthread">
		<span class="headactions">
					<a href="my.php?item=favorites&amp;tid=40080" id="ajax_favorite" onclick="ajaxmenu(event, this.id, 3000, 0)">收藏</a>
			<a href="my.php?item=subscriptions&amp;subadd=40080" id="ajax_subscription" onclick="ajaxmenu(event, this.id, 3000, null, 0)">订阅</a>
			<a href="misc.php?action=emailfriend&amp;tid=40080" id="emailfriend" onclick="ajaxmenu(event, this.id, 9000000, null, 0)">推荐</a>
				<a href="viewthread.php?action=printable&amp;tid=40080" target="_blank" class="notabs">打印</a>
				</span>
		<h1>使用SocksCap配合SSH翻墙		</h1>
							<table id="pid514056" summary="pid514056" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1960" target="_blank" id="userinfo514056" class="dropmenu" onmouseover="showMenu(this.id)">库存袈裟</a></cite>
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
						<strong title="复制话题链接到剪贴板" id="postnum514056" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=40080&page=1#pid514056', '话题链接已经复制到剪贴板')">1楼</strong>
													<em onclick="$('postmessage_514056').className='t_bigfont'">大</em>							<em onclick="$('postmessage_514056').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_514056').className='t_smallfont'">小</em>												发表于 2010-3-12 17:56&nbsp;																					<a href="viewthread.php?tid=40080&amp;page=1&amp;authorid=1960" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_0"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_0"></div><div id="ad_thread4_0"></div>
													<h2>使用SocksCap配合SSH翻墙</h2>
						
						
																											<div id="postmessage_514056" class="t_msgfont">1984BBS原创教程，欢迎转载，转载请注明出处。<br />
=========================<br />
<br />
适用范围：<br />
1.非Firefox浏览器<br />
2.下载软件<br />
3.无法设置代理的网络软件<br />
4.网络游戏<br />
<br />
<strong>1.准备所需软件</strong><br />
MyEnTunnel <a href="http://twiapp.alwaysdata.net/myt.rar" target="_blank">http://twiapp.alwaysdata.net/myt.rar</a> 2010.3.22优化版，使用Tunnelier的plink.exe，接入更快<br />
SocksCap <a href="http://www.softsea.com/review/SocksCap.html" target="_blank">http://www.softsea.com/review/SocksCap.html</a><br />
<br />
<strong>2.获得SSH帐号</strong><br />
<br />
参阅：<br />
<a href="https://1984bbs.com/viewthread.php?tid=31667" target="_blank">https://1984bbs.com/viewthread.php?tid=31667</a><br />
<a href="https://1984bbs.com/viewthread.php?tid=33003" target="_blank">https://1984bbs.com/viewthread.php?tid=33003</a><br />
<br />
<strong>3.运行MyEnTunnel </strong><br />
设置方法：<br />
<br />
<img src="http://imgur.com/jBZEu.png" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
<br />
点击Save保存，点击Connect连接<br />
<br />
<img src="http://btchina.bos.ru/ssh/15.jpg" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
确认指纹警告<br />
<br />
<strong>4.运行SocksCap </strong><br />
SocksCap是绿色软件解压后运行sc32.exe<br />
<br />
等待十秒钟，点接受<br />
<img src="http://btchina.bos.ru/scv/01.jpg" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
<br />
点是<br />
<img src="http://btchina.bos.ru/scv/02.jpg" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
<br />
<strong>5.设置SocksCap </strong><br />
<br />
<img src="http://btchina.bos.ru/scv/03.jpg" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
<br />
<strong>6.新建代理 </strong><br />
<br />
<img src="http://btchina.bos.ru/scv/04.jpg" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
<br />
<img src="http://btchina.bos.ru/scv/05.jpg" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
<br />
IE所在目录(windows XP)<br />
<img src="http://btchina.bos.ru/scv/06.jpg" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
<br />
选中文件<br />
<img src="http://btchina.bos.ru/scv/07.jpg" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
<br />
<img src="http://btchina.bos.ru/scv/08.jpg" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
<br />
<br />
<strong>7.测试</strong><br />
<br />
双击控制台IE图标<br />
<br />
<img src="http://btchina.bos.ru/scv/09.jpg" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
<br />
<img src="http://btchina.bos.ru/scv/10.jpg" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
<br />
<strong>8.Fuck FGW</strong><br />
<br />
<img src="http://btchina.bos.ru/scv/12.jpg" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
<br />
<br />
附：<br />
Firefox+MyEnTunnel+AutoProxy翻墙教程：<a href="https://1984bbs.com/viewthread.php?tid=38397" target="_blank">https://1984bbs.com/viewthread.php?tid=38397</a><br />
<br />
<br />
========================<br />
1984BBS原创教程，欢迎转载，转载请注明出处。</div>

							
							
							
							
															<div id="post_rate_div_514056"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo514056_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1960" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=40080&amp;repquote=514056&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 514056)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_0"></div>				</div>
			</td>
		</tr>
		</table>
		</div><div class="ad_column" id="ad_interthread"><a href="/viewthread.php?tid=54699" target="_blank" style="color:red;">1984bbs是一个非营利项目，它需要您的捐助！</font></a>		</div>
	<div class="mainbox viewthread">
			<table id="pid514080" summary="pid514080" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=11596" target="_blank" id="userinfo514080" class="dropmenu" onmouseover="showMenu(this.id)">samzhang</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=11596">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=11596&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_1" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum514080" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=40080&page=1#pid514080', '话题链接已经复制到剪贴板')">2楼</strong>
													<em onclick="$('postmessage_514080').className='t_bigfont'">大</em>							<em onclick="$('postmessage_514080').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_514080').className='t_smallfont'">小</em>												发表于 2010-3-12 18:13&nbsp;																					<a href="viewthread.php?tid=40080&amp;page=1&amp;authorid=11596" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_1"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_1"></div><div id="ad_thread4_1"></div>
						
						
																											<div id="postmessage_514080" class="t_msgfont">为什么在程序里打开IE会非法?</div>

							
							
							
							
															<div id="post_rate_div_514080"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo514080_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=11596" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=40080&amp;repquote=514080&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 514080)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_1"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid514092" summary="pid514092" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1960" target="_blank" id="userinfo514092" class="dropmenu" onmouseover="showMenu(this.id)">库存袈裟</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">@bruceku 想象力比知识更重要。</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1960">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1960&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_2" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum514092" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=40080&page=1#pid514092', '话题链接已经复制到剪贴板')">3楼</strong>
													<em onclick="$('postmessage_514092').className='t_bigfont'">大</em>							<em onclick="$('postmessage_514092').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_514092').className='t_smallfont'">小</em>												发表于 2010-3-12 18:23&nbsp;																					<a href="viewthread.php?tid=40080&amp;page=1&amp;authorid=1960" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_2"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_2"></div><div id="ad_thread4_2"></div>
						
						
																											<div id="postmessage_514092" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>samzhang</i> 于 2010-3-12 18:13 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=514080&amp;ptid=40080" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
为什么在程序里打开IE会非法? </blockquote></div>能详尽描述下，或者提供报错截图吗？</div>

							
							
							
							
															<div id="post_rate_div_514092"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo514092_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1960" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=40080&amp;repquote=514092&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 514092)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_2"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid514105" summary="pid514105" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2213" target="_blank" id="userinfo514105" class="dropmenu" onmouseover="showMenu(this.id)">核子力量</a></cite>
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
						<strong title="复制话题链接到剪贴板" id="postnum514105" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=40080&page=1#pid514105', '话题链接已经复制到剪贴板')">4楼</strong>
													<em onclick="$('postmessage_514105').className='t_bigfont'">大</em>							<em onclick="$('postmessage_514105').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_514105').className='t_smallfont'">小</em>												发表于 2010-3-12 18:29&nbsp;																					<a href="viewthread.php?tid=40080&amp;page=1&amp;authorid=2213" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_3"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_3"></div><div id="ad_thread4_3"></div>
						
						
																											<div id="postmessage_514105" class="t_msgfont">直接把ie的图标拖到SocksCap的框里就行了</div>

							
							
							
							
															<div id="post_rate_div_514105"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo514105_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://twitter.com/hzpower" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=2213" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=40080&amp;repquote=514105&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 514105)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_3"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid514139" summary="pid514139" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1909" target="_blank" id="userinfo514139" class="dropmenu" onmouseover="showMenu(this.id)">单手扶墙</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">活了几十年年，没能为党为人民做点什么，每思及此，心神不宁。</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1909">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1909&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_4" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum514139" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=40080&page=1#pid514139', '话题链接已经复制到剪贴板')">5楼</strong>
													<em onclick="$('postmessage_514139').className='t_bigfont'">大</em>							<em onclick="$('postmessage_514139').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_514139').className='t_smallfont'">小</em>												发表于 2010-3-12 18:54&nbsp;																					<a href="viewthread.php?tid=40080&amp;page=1&amp;authorid=1909" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_4"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_4"></div><div id="ad_thread4_4"></div>
						
						
																											<div id="postmessage_514139" class="t_msgfont">书签</div>

							
							
							
							
															<div id="post_rate_div_514139"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo514139_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1909" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=40080&amp;repquote=514139&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 514139)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_4"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid514823" summary="pid514823" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12168" target="_blank" id="userinfo514823" class="dropmenu" onmouseover="showMenu(this.id)">geeker</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12168">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12168&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_5" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum514823" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=40080&page=1#pid514823', '话题链接已经复制到剪贴板')">6楼</strong>
													<em onclick="$('postmessage_514823').className='t_bigfont'">大</em>							<em onclick="$('postmessage_514823').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_514823').className='t_smallfont'">小</em>												发表于 2010-3-13 11:44&nbsp;																					<a href="viewthread.php?tid=40080&amp;page=1&amp;authorid=12168" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_5"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_5"></div><div id="ad_thread4_5"></div>
						
						
																											<div id="postmessage_514823" class="t_msgfont">灰常牛b</div>

							
							
							
							
															<div id="post_rate_div_514823"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo514823_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=12168" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=40080&amp;repquote=514823&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 514823)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_5"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid515129" summary="pid515129" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8922" target="_blank" id="userinfo515129" class="dropmenu" onmouseover="showMenu(this.id)">阳光不锈</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">医生的职责不是救人，而是少杀人…以为自己是风，结果遍体鳞伤才发现，原来自己是草！</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8922">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8922&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_6" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum515129" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=40080&page=1#pid515129', '话题链接已经复制到剪贴板')">7楼</strong>
													<em onclick="$('postmessage_515129').className='t_bigfont'">大</em>							<em onclick="$('postmessage_515129').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_515129').className='t_smallfont'">小</em>												发表于 2010-3-13 15:58&nbsp;																					<a href="viewthread.php?tid=40080&amp;page=1&amp;authorid=8922" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_6"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_6"></div><div id="ad_thread4_6"></div>
						
						
																											<div id="postmessage_515129" class="t_msgfont">这个我自己很早就弄过...<br />
感觉不怎样...<br />
经常会出现SSH的断链...<br />
不是很稳定的...<br />
还是用火狐比较干脆...<br />
虽然整体来讲,速度不是很快<br />
但是稳定...</div>

							
							
							
							
															<div id="post_rate_div_515129"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo515129_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=8922" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=40080&amp;repquote=515129&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 515129)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_6"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid515153" summary="pid515153" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1960" target="_blank" id="userinfo515153" class="dropmenu" onmouseover="showMenu(this.id)">库存袈裟</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">@bruceku 想象力比知识更重要。</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1960">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1960&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_7" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum515153" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=40080&page=1#pid515153', '话题链接已经复制到剪贴板')">8楼</strong>
													<em onclick="$('postmessage_515153').className='t_bigfont'">大</em>							<em onclick="$('postmessage_515153').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_515153').className='t_smallfont'">小</em>												发表于 2010-3-13 16:32&nbsp;																					<a href="viewthread.php?tid=40080&amp;page=1&amp;authorid=1960" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_7"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_7"></div><div id="ad_thread4_7"></div>
													<h2>回复 7楼 阳光不锈 的话题</h2>
						
						
																											<div id="postmessage_515153" class="t_msgfont">呃？稳定和速度的区别，应该是和SSH服务器有关系跟用什么软件关系不大吧？<br />
SSH有个加密传输过程占用CPU，所以要比vpn慢，同一个vps，SSH最高下载速度70-80KB/s，VPN可达100-140KB/S</div>

							
							
							
							
															<div id="post_rate_div_515153"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo515153_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1960" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=40080&amp;repquote=515153&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 515153)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_7"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid515160" summary="pid515160" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10826" target="_blank" id="userinfo515160" class="dropmenu" onmouseover="showMenu(this.id)">庸人自擾</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10826">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10826&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_8" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum515160" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=40080&page=1#pid515160', '话题链接已经复制到剪贴板')">9楼</strong>
													<em onclick="$('postmessage_515160').className='t_bigfont'">大</em>							<em onclick="$('postmessage_515160').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_515160').className='t_smallfont'">小</em>												发表于 2010-3-13 16:40&nbsp;																					<a href="viewthread.php?tid=40080&amp;page=1&amp;authorid=10826" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_8"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_8"></div><div id="ad_thread4_8"></div>
						
						
																											<div id="postmessage_515160" class="t_msgfont">不支持Windows7</div>

							
							
							
							
															<div id="post_rate_div_515160"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo515160_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=10826" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=40080&amp;repquote=515160&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 515160)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_8"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid515188" summary="pid515188" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1960" target="_blank" id="userinfo515188" class="dropmenu" onmouseover="showMenu(this.id)">库存袈裟</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">@bruceku 想象力比知识更重要。</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1960">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1960&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_9" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum515188" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=40080&page=1#pid515188', '话题链接已经复制到剪贴板')">10楼</strong>
													<em onclick="$('postmessage_515188').className='t_bigfont'">大</em>							<em onclick="$('postmessage_515188').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_515188').className='t_smallfont'">小</em>												发表于 2010-3-13 17:24&nbsp;																					<a href="viewthread.php?tid=40080&amp;page=1&amp;authorid=1960" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_9"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_9"></div><div id="ad_thread4_9"></div>
													<h2>回复 9楼 庸人自擾 的话题</h2>
						
						
																											<div id="postmessage_515188" class="t_msgfont"><a href="http://www.softsea.com/review/SocksCap.html" target="_blank">http://www.softsea.com/review/SocksCap.html</a></div>

							
							
							
							
															<div id="post_rate_div_515188"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo515188_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1960" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=40080&amp;repquote=515188&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 515188)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_9"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid515283" summary="pid515283" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2213" target="_blank" id="userinfo515283" class="dropmenu" onmouseover="showMenu(this.id)">核子力量</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">Twitter.com/hzpower</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2213">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2213&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_10" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum515283" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=40080&page=1#pid515283', '话题链接已经复制到剪贴板')">11楼</strong>
													<em onclick="$('postmessage_515283').className='t_bigfont'">大</em>							<em onclick="$('postmessage_515283').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_515283').className='t_smallfont'">小</em>												发表于 2010-3-13 19:29&nbsp;																					<a href="viewthread.php?tid=40080&amp;page=1&amp;authorid=2213" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_10"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_10"></div><div id="ad_thread4_10"></div>
													<h2>回复 9楼 庸人自擾 的话题</h2>
						
						
																											<div id="postmessage_515283" class="t_msgfont">支持win7的，我就是在win7下用的</div>

							
							
							
							
															<div id="post_rate_div_515283"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo515283_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://twitter.com/hzpower" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=2213" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=40080&amp;repquote=515283&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 515283)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_10"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid516140" summary="pid516140" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2271" target="_blank" id="userinfo516140" class="dropmenu" onmouseover="showMenu(this.id)">神仙一溜烟</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">杵君</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2271">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2271&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_11" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum516140" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=40080&page=1#pid516140', '话题链接已经复制到剪贴板')">12楼</strong>
													<em onclick="$('postmessage_516140').className='t_bigfont'">大</em>							<em onclick="$('postmessage_516140').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_516140').className='t_smallfont'">小</em>												发表于 2010-3-14 15:13&nbsp;																					<a href="viewthread.php?tid=40080&amp;page=1&amp;authorid=2271" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_11"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_11"></div><div id="ad_thread4_11"></div>
						
						
																											<div id="postmessage_516140" class="t_msgfont">用fox感觉不错，最喜欢SSH</div>

							
							
							
							
															<div id="post_rate_div_516140"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo516140_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=2271" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=40080&amp;repquote=516140&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 516140)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_11"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid516172" summary="pid516172" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12305" target="_blank" id="userinfo516172" class="dropmenu" onmouseover="showMenu(this.id)">guy84</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12305">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12305&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_12" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum516172" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=40080&page=1#pid516172', '话题链接已经复制到剪贴板')">13楼</strong>
													<em onclick="$('postmessage_516172').className='t_bigfont'">大</em>							<em onclick="$('postmessage_516172').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_516172').className='t_smallfont'">小</em>												发表于 2010-3-14 15:36&nbsp;																					<a href="viewthread.php?tid=40080&amp;page=1&amp;authorid=12305" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_12"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_12"></div><div id="ad_thread4_12"></div>
						
						
																											<div id="postmessage_516172" class="t_msgfont">这个还是相对比较麻烦，而且速度没有保障。。。不过可能比较稳定。。。</div>

							
							
							
							
															<div id="post_rate_div_516172"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo516172_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=12305" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=40080&amp;repquote=516172&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 516172)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_12"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid516308" summary="pid516308" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=11939" target="_blank" id="userinfo516308" class="dropmenu" onmouseover="showMenu(this.id)">shanyun</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=11939">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=11939&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_13" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum516308" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=40080&page=1#pid516308', '话题链接已经复制到剪贴板')">14楼</strong>
													<em onclick="$('postmessage_516308').className='t_bigfont'">大</em>							<em onclick="$('postmessage_516308').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_516308').className='t_smallfont'">小</em>												发表于 2010-3-14 17:46&nbsp;																					<a href="viewthread.php?tid=40080&amp;page=1&amp;authorid=11939" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_13"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_13"></div><div id="ad_thread4_13"></div>
						
						
																											<div id="postmessage_516308" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>阳光不锈</i> 于 2010-3-13 15:58 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=515129&amp;ptid=40080" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
这个我自己很早就弄过...<br />
感觉不怎样...<br />
经常会出现SSH的断链...<br />
不是很稳定的...<br />
还是用火狐比较干脆...<br />
虽然整体来讲,速度不是很快<br />
但是稳定... </blockquote></div>+1984 这样的配置我已经够用了。很爽，很和谐，天天FUCK GFW</div>

							
							
							
							
															<div id="post_rate_div_516308"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo516308_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=11939" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=40080&amp;repquote=516308&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 516308)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_13"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid516368" summary="pid516368" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2271" target="_blank" id="userinfo516368" class="dropmenu" onmouseover="showMenu(this.id)">神仙一溜烟</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">杵君</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2271">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2271&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_14" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum516368" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=40080&page=1#pid516368', '话题链接已经复制到剪贴板')">15楼</strong>
													<em onclick="$('postmessage_516368').className='t_bigfont'">大</em>							<em onclick="$('postmessage_516368').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_516368').className='t_smallfont'">小</em>												发表于 2010-3-14 18:41&nbsp;																					<a href="viewthread.php?tid=40080&amp;page=1&amp;authorid=2271" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_14"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_14"></div><div id="ad_thread4_14"></div>
						
						
																											<div id="postmessage_516368" class="t_msgfont">SSH已经比洋葱好得太多了！我觉得比VPN都好。<br />
<br />
绿色轻便无广告。这简直就是linux下的精品软件才能达到的水平。</div>

							
							
							
							
															<div id="post_rate_div_516368"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo516368_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=2271" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=40080&amp;repquote=516368&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 516368)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_14"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid626530" summary="pid626530" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=13681" target="_blank" id="userinfo626530" class="dropmenu" onmouseover="showMenu(this.id)">luckypoem</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=13681">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=13681&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_15" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum626530" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=40080&page=1#pid626530', '话题链接已经复制到剪贴板')">16楼</strong>
													<em onclick="$('postmessage_626530').className='t_bigfont'">大</em>							<em onclick="$('postmessage_626530').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_626530').className='t_smallfont'">小</em>												发表于 2010-5-20 11:28&nbsp;																					<a href="viewthread.php?tid=40080&amp;page=1&amp;authorid=13681" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_15"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_15"></div><div id="ad_thread4_15"></div>
						
						
																											<div id="postmessage_626530" class="t_msgfont">怎么我双击sockscap里的 ie图标，然后访问ip138.com,显示的是国内ip呢？</div>

							
							
							
							
															<div id="post_rate_div_626530"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo626530_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=13681" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=40080&amp;repquote=626530&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 626530)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_15"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid626807" summary="pid626807" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12457" target="_blank" id="userinfo626807" class="dropmenu" onmouseover="showMenu(this.id)">houman</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12457">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12457&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_16" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum626807" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=40080&page=1#pid626807', '话题链接已经复制到剪贴板')">17楼</strong>
													<em onclick="$('postmessage_626807').className='t_bigfont'">大</em>							<em onclick="$('postmessage_626807').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_626807').className='t_smallfont'">小</em>												发表于 2010-5-20 13:34&nbsp;																					<a href="viewthread.php?tid=40080&amp;page=1&amp;authorid=12457" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_16"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_16"></div><div id="ad_thread4_16"></div>
						
						
																											<div id="postmessage_626807" class="t_msgfont">这东西不支持windows7</div>

							
							
							
							
															<div id="post_rate_div_626807"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo626807_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://www.mygamewiki.net" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=12457" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=40080&amp;repquote=626807&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 626807)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_16"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid629755" summary="pid629755" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=13788" target="_blank" id="userinfo629755" class="dropmenu" onmouseover="showMenu(this.id)">柴子</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=13788">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=13788&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_17" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum629755" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=40080&page=1#pid629755', '话题链接已经复制到剪贴板')">18楼</strong>
													<em onclick="$('postmessage_629755').className='t_bigfont'">大</em>							<em onclick="$('postmessage_629755').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_629755').className='t_smallfont'">小</em>												发表于 2010-5-21 18:45&nbsp;																					<a href="viewthread.php?tid=40080&amp;page=1&amp;authorid=13788" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_17"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_17"></div><div id="ad_thread4_17"></div>
						
						
																											<div id="postmessage_629755" class="t_msgfont">因为IE和opera都是不支持sock5代理的<br />
所以我一般都是用polipo或者3p :)<br />
直接把sock5转成http<br />
另：强推3proxy<br />
<br />
<a href="http://www.3proxy.ru/" target="_blank">http://www.3proxy.ru/</a></div>

							
							
							
							
															<div id="post_rate_div_629755"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo629755_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=13788" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=40080&amp;repquote=629755&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 629755)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_17"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid692398" summary="pid692398" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=5192" target="_blank" id="userinfo692398" class="dropmenu" onmouseover="showMenu(this.id)">太变</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">偏听不信</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=5192">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=5192&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_18" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum692398" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=40080&page=1#pid692398', '话题链接已经复制到剪贴板')">19楼</strong>
													<em onclick="$('postmessage_692398').className='t_bigfont'">大</em>							<em onclick="$('postmessage_692398').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_692398').className='t_smallfont'">小</em>												发表于 2010-6-19 17:00&nbsp;																					<a href="viewthread.php?tid=40080&amp;page=1&amp;authorid=5192" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_18"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_18"></div><div id="ad_thread4_18"></div>
						
						
																											<div id="postmessage_692398" class="t_msgfont">Fuck FGW<br />
<br />
搞定，谢谢！<br />
还是张生记比较简单。</div>

							
							
							
							
															<div id="post_rate_div_692398"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo692398_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=5192" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=40080&amp;repquote=692398&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 692398)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_18"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid692402" summary="pid692402" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=5192" target="_blank" id="userinfo692402" class="dropmenu" onmouseover="showMenu(this.id)">太变</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">偏听不信</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=5192">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=5192&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_19" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum692402" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=40080&page=1#pid692402', '话题链接已经复制到剪贴板')">20楼</strong>
													<em onclick="$('postmessage_692402').className='t_bigfont'">大</em>							<em onclick="$('postmessage_692402').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_692402').className='t_smallfont'">小</em>												发表于 2010-6-19 17:01&nbsp;																					<a href="viewthread.php?tid=40080&amp;page=1&amp;authorid=5192" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_19"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_19"></div><div id="ad_thread4_19"></div>
						
						
																											<div id="postmessage_692402" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>houman</i> 于 2010-5-20 13:34 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=626807&amp;ptid=40080" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
这东西不支持windows7 </blockquote></div>我的系统就是ie7的，没问题呀！</div>

							
							
							
							
															<div id="post_rate_div_692402"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo692402_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=5192" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=40080&amp;repquote=692402&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 692402)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_19"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid692410" summary="pid692410" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8663" target="_blank" id="userinfo692410" class="dropmenu" onmouseover="showMenu(this.id)">man-eleven</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">&#9773;校叛徒、基本上冲锋在后、共产主义的坚定不信任者;运动控(喜欢巨大无比万人欢呼沸腾的场面比如足球赛)、热爱自由、容易怀旧伤感、会办事不会说话，俺们村最有文化的人，没有之一</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8663">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8663&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_20" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum692410" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=40080&page=1#pid692410', '话题链接已经复制到剪贴板')">21楼</strong>
													<em onclick="$('postmessage_692410').className='t_bigfont'">大</em>							<em onclick="$('postmessage_692410').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_692410').className='t_smallfont'">小</em>												发表于 2010-6-19 17:05&nbsp;																					<a href="viewthread.php?tid=40080&amp;page=1&amp;authorid=8663" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_20"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_20"></div><div id="ad_thread4_20"></div>
						
						
																											<div id="postmessage_692410" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>太变</i> 于 2010-6-19 17:01 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=692402&amp;ptid=40080" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
<br />
<br />
我的系统就是ie7的，没问题呀！ </blockquote></div>//笑话一枚</div>

							
							
							
							
															<div id="post_rate_div_692410"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo692410_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=8663" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=40080&amp;repquote=692410&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 692410)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_20"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid696767" summary="pid696767" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12126" target="_blank" id="userinfo696767" class="dropmenu" onmouseover="showMenu(this.id)">ottovon</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">@ottovonconstant </p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12126">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12126&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_21" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum696767" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=40080&page=1#pid696767', '话题链接已经复制到剪贴板')">22楼</strong>
													<em onclick="$('postmessage_696767').className='t_bigfont'">大</em>							<em onclick="$('postmessage_696767').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_696767').className='t_smallfont'">小</em>												发表于 2010-6-22 08:26&nbsp;																					<a href="viewthread.php?tid=40080&amp;page=1&amp;authorid=12126" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_21"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_21"></div><div id="ad_thread4_21"></div>
						
						
																											<div id="postmessage_696767" class="t_msgfont">完全按要求操作，firefox可以，ie和chrome则不能，如何破？</div>

							
							
							
							
															<div id="post_rate_div_696767"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo696767_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://www.liuzijian.com" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=12126" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=40080&amp;repquote=696767&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 696767)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_21"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid696784" summary="pid696784" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=13202" target="_blank" id="userinfo696784" class="dropmenu" onmouseover="showMenu(this.id)">zhenniua</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=13202">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=13202&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_22" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum696784" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=40080&page=1#pid696784', '话题链接已经复制到剪贴板')">23楼</strong>
													<em onclick="$('postmessage_696784').className='t_bigfont'">大</em>							<em onclick="$('postmessage_696784').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_696784').className='t_smallfont'">小</em>												发表于 2010-6-22 08:36&nbsp;																					<a href="viewthread.php?tid=40080&amp;page=1&amp;authorid=13202" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_22"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_22"></div><div id="ad_thread4_22"></div>
						
						
																											<div id="postmessage_696784" class="t_msgfont">那不错的教程</div>

							
							
							
							
															<div id="post_rate_div_696784"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo696784_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=13202" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=40080&amp;repquote=696784&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 696784)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_22"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid817278" summary="pid817278" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8756" target="_blank" id="userinfo817278" class="dropmenu" onmouseover="showMenu(this.id)">路边社射边路</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">路边社社边路边社边路边路边社边路边路边社边路边路边社边路边路边社边路边路边社边路边路边社边路边路边社边路边路边社边路</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8756">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8756&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_23" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum817278" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=40080&page=1#pid817278', '话题链接已经复制到剪贴板')">24楼</strong>
													<em onclick="$('postmessage_817278').className='t_bigfont'">大</em>							<em onclick="$('postmessage_817278').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_817278').className='t_smallfont'">小</em>												发表于 2010-9-7 10:35&nbsp;																					<a href="viewthread.php?tid=40080&amp;page=1&amp;authorid=8756" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_23"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_23"></div><div id="ad_thread4_23"></div>
						
						
																											<div id="postmessage_817278" class="t_msgfont">点击Save保存，点击Connect连接<br />
<br />
以后的图都挂了</div>

							
							
							
							
															<div id="post_rate_div_817278"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo817278_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=8756" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=40080&amp;repquote=817278&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 817278)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_23"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid817298" summary="pid817298" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=11595" target="_blank" id="userinfo817298" class="dropmenu" onmouseover="showMenu(this.id)">zzug</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=11595">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=11595&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_24" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum817298" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=40080&page=1#pid817298', '话题链接已经复制到剪贴板')">25楼</strong>
													<em onclick="$('postmessage_817298').className='t_bigfont'">大</em>							<em onclick="$('postmessage_817298').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_817298').className='t_smallfont'">小</em>												发表于 2010-9-7 10:45&nbsp;																					<a href="viewthread.php?tid=40080&amp;page=1&amp;authorid=11595" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_24"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_24"></div><div id="ad_thread4_24"></div>
						
						
																											<div id="postmessage_817298" class="t_msgfont">不如用FreeCap功能更强大而且开源（也有中文版），教程 <a href="http://igfw.tk/archives/802/" target="_blank">http://igfw.tk/archives/802/</a></div>

							
							
							
							
															<div id="post_rate_div_817298"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo817298_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=11595" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=40080&amp;repquote=817298&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 817298)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_24"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid817303" summary="pid817303" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1960" target="_blank" id="userinfo817303" class="dropmenu" onmouseover="showMenu(this.id)">库存袈裟</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">@bruceku 想象力比知识更重要。</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1960">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1960&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_25" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum817303" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=40080&page=1#pid817303', '话题链接已经复制到剪贴板')">26楼</strong>
													<em onclick="$('postmessage_817303').className='t_bigfont'">大</em>							<em onclick="$('postmessage_817303').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_817303').className='t_smallfont'">小</em>												发表于 2010-9-7 10:47&nbsp;																					<a href="viewthread.php?tid=40080&amp;page=1&amp;authorid=1960" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_25"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_25"></div><div id="ad_thread4_25"></div>
						
						
																											<div id="postmessage_817303" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>路边社射边路</i> 于 2010-9-7 10:35 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=817278&amp;ptid=40080" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
点击Save保存，点击Connect连接<br />
<br />
以后的图都挂了 </blockquote></div>原图床已挂，硬盘无教程备份。<br />
改日重写教程。抱歉。</div>

							
							
							
							
															<div id="post_rate_div_817303"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo817303_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1960" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=40080&amp;repquote=817303&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 817303)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_25"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid817346" summary="pid817346" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=4964" target="_blank" id="userinfo817346" class="dropmenu" onmouseover="showMenu(this.id)">xifanliang</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">有事请Reply  @xifanliang</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=4964">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=4964&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_26" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum817346" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=40080&page=1#pid817346', '话题链接已经复制到剪贴板')">27楼</strong>
													<em onclick="$('postmessage_817346').className='t_bigfont'">大</em>							<em onclick="$('postmessage_817346').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_817346').className='t_smallfont'">小</em>												发表于 2010-9-7 11:12&nbsp;																					<a href="viewthread.php?tid=40080&amp;page=1&amp;authorid=4964" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_26"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_26"></div><div id="ad_thread4_26"></div>
						
						
																											<div id="postmessage_817346" class="t_msgfont"><a href="http://hi.baidu.com/democratleo/blog/item/bf10d0f5413f9763dcc47460.html" target="_blank">http://hi.baidu.com/democratleo/ ... 3f9763dcc47460.html</a><br />
不用重写，这里有。</div>

							
							
							
							
															<div id="post_rate_div_817346"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo817346_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=4964" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=40080&amp;repquote=817346&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 817346)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_26"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid817349" summary="pid817349" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1960" target="_blank" id="userinfo817349" class="dropmenu" onmouseover="showMenu(this.id)">库存袈裟</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">@bruceku 想象力比知识更重要。</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1960">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1960&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_27" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum817349" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=40080&page=1#pid817349', '话题链接已经复制到剪贴板')">28楼</strong>
													<em onclick="$('postmessage_817349').className='t_bigfont'">大</em>							<em onclick="$('postmessage_817349').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_817349').className='t_smallfont'">小</em>												发表于 2010-9-7 11:14&nbsp;																					<a href="viewthread.php?tid=40080&amp;page=1&amp;authorid=1960" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_27"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_27"></div><div id="ad_thread4_27"></div>
													<h2>回复 27楼 xifanliang 的话题</h2>
						
						
																											<div id="postmessage_817349" class="t_msgfont">转贴为何不留出处？</div>

							
							
							
							
															<div id="post_rate_div_817349"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo817349_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1960" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=40080&amp;repquote=817349&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 817349)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_27"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid817375" summary="pid817375" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=4964" target="_blank" id="userinfo817375" class="dropmenu" onmouseover="showMenu(this.id)">xifanliang</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">有事请Reply  @xifanliang</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=4964">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=4964&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_28" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum817375" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=40080&page=1#pid817375', '话题链接已经复制到剪贴板')">29楼</strong>
													<em onclick="$('postmessage_817375').className='t_bigfont'">大</em>							<em onclick="$('postmessage_817375').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_817375').className='t_smallfont'">小</em>												发表于 2010-9-7 11:29&nbsp;																					<a href="viewthread.php?tid=40080&amp;page=1&amp;authorid=4964" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_28"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_28"></div><div id="ad_thread4_28"></div>
						
						
																											<div id="postmessage_817375" class="t_msgfont">额，写1984bbs?</div>

							
							
							
							
															<div id="post_rate_div_817375"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo817375_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=4964" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=40080&amp;repquote=817375&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 817375)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_28"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid817377" summary="pid817377" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=4964" target="_blank" id="userinfo817377" class="dropmenu" onmouseover="showMenu(this.id)">xifanliang</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">有事请Reply  @xifanliang</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=4964">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=4964&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_29" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum817377" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=40080&page=1#pid817377', '话题链接已经复制到剪贴板')">30楼</strong>
													<em onclick="$('postmessage_817377').className='t_bigfont'">大</em>							<em onclick="$('postmessage_817377').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_817377').className='t_smallfont'">小</em>												发表于 2010-9-7 11:30&nbsp;																					<a href="viewthread.php?tid=40080&amp;page=1&amp;authorid=4964" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_29"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_29"></div><div id="ad_thread4_29"></div>
						
						
																											<div id="postmessage_817377" class="t_msgfont">via 1984bbs by 库存袈裟 <br />
这样可以伐？</div>

							
							
							
							
															<div id="post_rate_div_817377"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo817377_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=4964" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=40080&amp;repquote=817377&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 817377)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_29"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid817386" summary="pid817386" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 <a name="lastpost"></a>					<cite>											<a href="space.php?uid=1960" target="_blank" id="userinfo817386" class="dropmenu" onmouseover="showMenu(this.id)">库存袈裟</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">@bruceku 想象力比知识更重要。</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1960">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1960&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_30" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum817386" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=40080&page=1#pid817386', '话题链接已经复制到剪贴板')">31楼</strong>
													<em onclick="$('postmessage_817386').className='t_bigfont'">大</em>							<em onclick="$('postmessage_817386').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_817386').className='t_smallfont'">小</em>												发表于 2010-9-7 11:33&nbsp;																					<a href="viewthread.php?tid=40080&amp;page=1&amp;authorid=1960" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_30"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_30"></div><div id="ad_thread4_30"></div>
													<h2>回复 30楼 xifanliang 的话题</h2>
						
						
																											<div id="postmessage_817386" class="t_msgfont"><a href="https://1984bbs.com/viewthread.php?tid=40080" target="_blank">https://1984bbs.com/viewthread.php?tid=40080</a></div>

							
							
							
							
															<div id="post_rate_div_817386"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo817386_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1960" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=40080&amp;repquote=817386&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 817386)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_30"></div>				</div>
			</td>
		</tr>
		</table>
		</div>
</form>





<div class="pages_btns">
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=40080&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=40080&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
				<span class="postbtn" id="newspecialtmp" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=40080&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

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

	<form method="post" id="postform" action="post.php?action=reply&amp;fid=26&amp;tid=40080&amp;extra=&amp;replysubmit=yes" onSubmit="return validate(this)">
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
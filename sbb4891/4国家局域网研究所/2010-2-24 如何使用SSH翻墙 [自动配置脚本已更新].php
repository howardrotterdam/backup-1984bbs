<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<title>如何使用SSH翻墙 [自动配置脚本已更新] - 国家局域网研究所 -  1984bbs.com </title>
<meta name="keywords" content="" />
<meta name="MSSmartTagsPreventParsing" content="True" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<link rel="archives" title="1984bbs.com" href="https://1984bbs.com/archiver/" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_viewthread.css" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_common.css" />
<script type="text/javascript">
	var discuz_uid = 13019;var IMGDIR = 'images/default';var attackevasive = '0';var gid = 0;var STYLEID = '1';
	gid = parseInt('3');var fid = parseInt('26');var tid = parseInt('38397');
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
			<p><a href="index.php" id="forumlist" onmouseover="showMenu(this.id)" class="dropmenu">1984bbs.com</a> &raquo; <a href="forumdisplay.php?fid=26">国家局域网研究所</a> &raquo; 如何使用SSH翻墙 [自动配置脚本已更新]</p>
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
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=38397&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=38397&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
				<span class="postbtn" id="newspecial" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=38397&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

	<ul class="popupmenu_popup newspecialmenu" id="newspecial_menu" style="display: none">
		<li><a href="post.php?action=newthread&amp;fid=26&amp;extra=">发新话题</a></li>
		<li class="poll"><a href="post.php?action=newthread&amp;fid=26&amp;extra=&amp;special=1">发布投票</a></li>													</ul>

<form method="post" name="modactions">
	<input type="hidden" name="formhash" value="823c9fa2" />
	<div class="mainbox viewthread">
		<span class="headactions">
					<a href="my.php?item=favorites&amp;tid=38397" id="ajax_favorite" onclick="ajaxmenu(event, this.id, 3000, 0)">收藏</a>
			<a href="my.php?item=subscriptions&amp;subadd=38397" id="ajax_subscription" onclick="ajaxmenu(event, this.id, 3000, null, 0)">订阅</a>
			<a href="misc.php?action=emailfriend&amp;tid=38397" id="emailfriend" onclick="ajaxmenu(event, this.id, 9000000, null, 0)">推荐</a>
				<a href="viewthread.php?action=printable&amp;tid=38397" target="_blank" class="notabs">打印</a>
				</span>
		<h1>如何使用SSH翻墙 [自动配置脚本已更新]		</h1>
							<table id="pid490953" summary="pid490953" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1960" target="_blank" id="userinfo490953" class="dropmenu" onmouseover="showMenu(this.id)">库存袈裟</a></cite>
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
						<strong title="复制话题链接到剪贴板" id="postnum490953" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=38397&page=1#pid490953', '话题链接已经复制到剪贴板')">1楼</strong>
													<em onclick="$('postmessage_490953').className='t_bigfont'">大</em>							<em onclick="$('postmessage_490953').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_490953').className='t_smallfont'">小</em>												发表于 2010-2-24 12:54&nbsp;																					<a href="viewthread.php?tid=38397&amp;page=1&amp;authorid=1960" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_0"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_0"></div><div id="ad_thread4_0"></div>
													<h2>如何使用SSH翻墙 [自动配置脚本已更新]</h2>
						
						
																											<div id="postmessage_490953" class="t_msgfont">适用平台：Windows<br />
<br />
<strong>1.安装以下软件:</strong><br />
<br />
<strong>Firefox</strong> <a href="http://www.mozilla.com/en-US/firefox/all.html" target="_blank">http://www.mozilla.com/en-US/firefox/all.html</a><br />
<strong>MyEnTunnel</strong> <a href="http://twiapp.alwaysdata.net/myt.rar" target="_blank">http://twiapp.alwaysdata.net/myt.rar</a> 2010.3.22优化版，使用Tunnelier的plink.exe，接入更快<br />
<br />
<br />
<strong>2.运行MyEnTunnel</strong><br />
并填写SSH服务器地址，用户名，密码；根据下图配置选项。<br />
<br />
<strong>在哪里可以获得SSH账号？</strong><br />
<br />
<a href="https://1984bbs.com/viewthread.php?tid=33003" target="_blank">https://1984bbs.com/viewthread.php?tid=33003</a><br />
<a href="https://1984bbs.com/viewthread.php?tid=31667" target="_blank">https://1984bbs.com/viewthread.php?tid=31667</a><br />
<br />
<img src="http://imgur.com/jBZEu.png" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
<br />
<strong>3.点击Save保存，点击Connect连接</strong><br />
<br />
<br />
<br />
<img src="http://i37.tinypic.com/14kwifl.png" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
<br />
<br />
<br />
<br />
<strong>4.等待连接成功</strong>（中间可能会出席一个对话框，点击Yes），等待小红锁转绿（小黄锁说明正在连接）<br />
<br />
<br />
<br />
<img src="http://imgur.com/Nic9W.png" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
<br />
<br />
<br />
<strong>5.打开火狐，安装AutoProxy插件</strong><br />
<br />
AutoProxy安装地址：<a href="http://autoproxy.mozdev.org/latest.xpi" target="_blank">http://autoproxy.mozdev.org/latest.xpi</a><br />
<br />
出现安装安全提示：<br />
<br />
<br />
<br />
点击。允许<br />
<img src="http://i38.tinypic.com/50mwja.png" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
<br />
<br />
<br />
<br />
<img src="http://i33.tinypic.com/1zq6b94.png" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
<br />
<br />
<br />
<br />
<strong>6.重启FireFox</strong><br />
<br />
<br />
<br />
<br />
<img src="http://i36.tinypic.com/ne7v5v.png" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
<br />
<br />
<br />
<br />
<br />
<br />
<strong>7.配置AutoProxy</strong><br />
<br />
添加订阅（自动更新被封网站名单，自动判断此网站是否被封，被封则启用代理，未被封则正常访问，节省流量，加快浏览速度）<br />
<br />
<br />
<img src="http://i34.tinypic.com/34ni1q0.png" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
<br />
<br />
<br />
检查SSHD配置：<br />
分别检查：代理服务器是否为127.0.0.1，端口是否为：7070；是否是Sock5类型代理<br />
<br />
<img src="http://i33.tinypic.com/dxkcuq.png" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
<br />
<br />
<br />
<br />
<br />
<img src="http://i38.tinypic.com/95u06w.png" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
<br />
<br />
<br />
<br />
<br />
选择SSHD为默认代理：<br />
<br />
<br />
<img src="http://i33.tinypic.com/dxkcuq.png" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
<br />
<br />
<br />
<br />
<img src="http://i34.tinypic.com/2eahwuw.png" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
<br />
<br />
<img src="http://i33.tinypic.com/sux1fl.png" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
<br />
<br />
<br />
<br />
<strong>8.测试服务器</strong><br />
<br />
<br />
<br />
<img src="http://i37.tinypic.com/s0wyt3.png" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
<br />
<br />
<br />
成功！<br />
<br />
<br />
<strong>9.添加某未被封网站以代理访问</strong><br />
<br />
<br />
<br />
<img src="http://i37.tinypic.com/331ho2o.png" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
<br />
<br />
<br />
配置<br />
<br />
<br />
<br />
<img src="http://i36.tinypic.com/2w4en3o.png" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
<br />
完成<br />
<br />
<br />
<br />
<img src="http://imgur.com/183ry.png" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
<br />
<br />
======================================================<br />
<strong>IE使用SSH代理方法</strong><br />
<br />
10.设置IE连接属性<br />
<br />
<img src="http://i37.tinypic.com/5dteno.png" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
<br />
配置<br />
<br />
<br />
地址处填入：<a href="http://twiapp.alwaysdata.net/autoproxy.pac" target="_blank">http://twiapp.alwaysdata.net/autoproxy.pac</a><br />
<br />
<br />
<br />
<img src="http://i36.tinypic.com/28tjif6.png" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
<br />
<br />
<br />
<br />
完成<br />
<img src="http://i37.tinypic.com/289g5lu.png" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
<br />
<br />
<br />
<strong>此方法适用于遨游，绿世界，TT等IE核心浏览器，同样适用于Google、Safari等浏览器</strong><br />
<br />
注：遨游需设置&nbsp;&nbsp;工具--&gt;代理服务器--&gt;使用IE的代理规则<br />
<br />
<br />
=========================================<br />
1984BBS原创教程</div>

							
							
							
							
															<div id="post_rate_div_490953"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo490953_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1960" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=38397&amp;repquote=490953&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 490953)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_0"></div>				</div>
			</td>
		</tr>
		</table>
		</div><div class="ad_column" id="ad_interthread"><a href="/viewthread.php?tid=54699" target="_blank" style="color:red;">1984bbs是一个非营利项目，它需要您的捐助！</font></a>		</div>
	<div class="mainbox viewthread">
			<table id="pid490971" summary="pid490971" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=11761" target="_blank" id="userinfo490971" class="dropmenu" onmouseover="showMenu(this.id)">卞学道</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">@ahxxm </p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=11761">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=11761&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_1" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum490971" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=38397&page=1#pid490971', '话题链接已经复制到剪贴板')">2楼</strong>
													<em onclick="$('postmessage_490971').className='t_bigfont'">大</em>							<em onclick="$('postmessage_490971').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_490971').className='t_smallfont'">小</em>												发表于 2010-2-24 13:13&nbsp;																					<a href="viewthread.php?tid=38397&amp;page=1&amp;authorid=11761" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_1"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_1"></div><div id="ad_thread4_1"></div>
						
						
																											<div id="postmessage_490971" class="t_msgfont">建议换个图床，tinypic图挂的很诡异</div>

							
							
							
							
															<div id="post_rate_div_490971"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo490971_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://ahxxm.blogspot.com" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=11761" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=38397&amp;repquote=490971&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 490971)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_1"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid491006" summary="pid491006" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12436" target="_blank" id="userinfo491006" class="dropmenu" onmouseover="showMenu(this.id)">lostime</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12436">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12436&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_2" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum491006" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=38397&page=1#pid491006', '话题链接已经复制到剪贴板')">3楼</strong>
													<em onclick="$('postmessage_491006').className='t_bigfont'">大</em>							<em onclick="$('postmessage_491006').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_491006').className='t_smallfont'">小</em>												发表于 2010-2-24 13:33&nbsp;																					<a href="viewthread.php?tid=38397&amp;page=1&amp;authorid=12436" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_2"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_2"></div><div id="ad_thread4_2"></div>
						
						
																											<div id="postmessage_491006" class="t_msgfont">很详细，不错。</div>

							
							
							
							
															<div id="post_rate_div_491006"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo491006_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=12436" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=38397&amp;repquote=491006&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 491006)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_2"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid492364" summary="pid492364" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6129" target="_blank" id="userinfo492364" class="dropmenu" onmouseover="showMenu(this.id)">蹲看风起</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6129">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6129&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_3" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum492364" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=38397&page=1#pid492364', '话题链接已经复制到剪贴板')">4楼</strong>
													<em onclick="$('postmessage_492364').className='t_bigfont'">大</em>							<em onclick="$('postmessage_492364').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_492364').className='t_smallfont'">小</em>												发表于 2010-2-25 12:52&nbsp;																					<a href="viewthread.php?tid=38397&amp;page=1&amp;authorid=6129" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_3"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_3"></div><div id="ad_thread4_3"></div>
						
						
																											<div id="postmessage_492364" class="t_msgfont">爽&nbsp;&nbsp;好久没有锻炼身体了</div>

							
							
							
							
															<div id="post_rate_div_492364"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo492364_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=6129" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=38397&amp;repquote=492364&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 492364)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_3"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid492764" summary="pid492764" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12254" target="_blank" id="userinfo492764" class="dropmenu" onmouseover="showMenu(this.id)">gongchen713</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">gongchen713</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12254">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12254&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_4" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum492764" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=38397&page=1#pid492764', '话题链接已经复制到剪贴板')">5楼</strong>
													<em onclick="$('postmessage_492764').className='t_bigfont'">大</em>							<em onclick="$('postmessage_492764').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_492764').className='t_smallfont'">小</em>												发表于 2010-2-25 16:49&nbsp;																					<a href="viewthread.php?tid=38397&amp;page=1&amp;authorid=12254" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_4"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_4"></div><div id="ad_thread4_4"></div>
						
						
																											<div id="postmessage_492764" class="t_msgfont">在火狐里 最好设置远程DNS解析<br />
可以防止DNS污染</div>

							
							
							
							
															<div id="post_rate_div_492764"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo492764_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=12254" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=38397&amp;repquote=492764&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 492764)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_4"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid492769" summary="pid492769" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12254" target="_blank" id="userinfo492769" class="dropmenu" onmouseover="showMenu(this.id)">gongchen713</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">gongchen713</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12254">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12254&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_5" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum492769" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=38397&page=1#pid492769', '话题链接已经复制到剪贴板')">6楼</strong>
													<em onclick="$('postmessage_492769').className='t_bigfont'">大</em>							<em onclick="$('postmessage_492769').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_492769').className='t_smallfont'">小</em>												发表于 2010-2-25 16:51&nbsp;																					<a href="viewthread.php?tid=38397&amp;page=1&amp;authorid=12254" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_5"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_5"></div><div id="ad_thread4_5"></div>
													<h2>回复 5楼 samzhang 的话题</h2>
						
						
																											<div id="postmessage_492769" class="t_msgfont">域名被DNS污染<br />
改hosts或者用open dns</div>

							
							
							
							
															<div id="post_rate_div_492769"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo492769_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=12254" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=38397&amp;repquote=492769&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 492769)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_5"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid492777" summary="pid492777" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=11493" target="_blank" id="userinfo492777" class="dropmenu" onmouseover="showMenu(this.id)">gzlxd</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">Twitter/@gzlxd</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=11493">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=11493&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_6" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum492777" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=38397&page=1#pid492777', '话题链接已经复制到剪贴板')">7楼</strong>
													<em onclick="$('postmessage_492777').className='t_bigfont'">大</em>							<em onclick="$('postmessage_492777').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_492777').className='t_smallfont'">小</em>												发表于 2010-2-25 16:55&nbsp;																					<a href="viewthread.php?tid=38397&amp;page=1&amp;authorid=11493" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_6"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_6"></div><div id="ad_thread4_6"></div>
						
						
																											<div id="postmessage_492777" class="t_msgfont">IE设置还是不行,火狐OK了,请楼主帮助一下</div>

							
							
							
							
															<div id="post_rate_div_492777"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo492777_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=11493" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=38397&amp;repquote=492777&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 492777)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_6"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid492888" summary="pid492888" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=11596" target="_blank" id="userinfo492888" class="dropmenu" onmouseover="showMenu(this.id)">samzhang</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=11596">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=11596&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_7" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum492888" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=38397&page=1#pid492888', '话题链接已经复制到剪贴板')">8楼</strong>
													<em onclick="$('postmessage_492888').className='t_bigfont'">大</em>							<em onclick="$('postmessage_492888').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_492888').className='t_smallfont'">小</em>												发表于 2010-2-25 18:09&nbsp;																					<a href="viewthread.php?tid=38397&amp;page=1&amp;authorid=11596" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_7"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_7"></div><div id="ad_thread4_7"></div>
						
						
																											<div id="postmessage_492888" class="t_msgfont">about:config里面network.proxy.socks_remote_dns设置为true，这样就会利用socks5主机解析域名而不通过本机设置的DNS</div>

							
							
							
							
															<div id="post_rate_div_492888"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo492888_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=11596" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=38397&amp;repquote=492888&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 492888)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_7"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid493031" summary="pid493031" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6860" target="_blank" id="userinfo493031" class="dropmenu" onmouseover="showMenu(this.id)">StoneFire</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6860">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6860&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_8" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum493031" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=38397&page=1#pid493031', '话题链接已经复制到剪贴板')">9楼</strong>
													<em onclick="$('postmessage_493031').className='t_bigfont'">大</em>							<em onclick="$('postmessage_493031').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_493031').className='t_smallfont'">小</em>												发表于 2010-2-25 20:22&nbsp;																					<a href="viewthread.php?tid=38397&amp;page=1&amp;authorid=6860" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_8"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_8"></div><div id="ad_thread4_8"></div>
						
						
																											<div id="postmessage_493031" class="t_msgfont">赞 Lz 最近一直在用这种方式翻墙 <br />
用自己blog的空间 非常稳定</div>

							
							
							
							
															<div id="post_rate_div_493031"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo493031_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=6860" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=38397&amp;repquote=493031&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 493031)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_8"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid494080" summary="pid494080" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=9517" target="_blank" id="userinfo494080" class="dropmenu" onmouseover="showMenu(this.id)">老西</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=9517">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=9517&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_9" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum494080" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=38397&page=1#pid494080', '话题链接已经复制到剪贴板')">10楼</strong>
													<em onclick="$('postmessage_494080').className='t_bigfont'">大</em>							<em onclick="$('postmessage_494080').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_494080').className='t_smallfont'">小</em>												发表于 2010-2-26 15:47&nbsp;																					<a href="viewthread.php?tid=38397&amp;page=1&amp;authorid=9517" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_9"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_9"></div><div id="ad_thread4_9"></div>
						
						
																											<div id="postmessage_494080" class="t_msgfont">袈裟专业帝～～</div>

							
							
							
							
															<div id="post_rate_div_494080"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo494080_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=9517" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=38397&amp;repquote=494080&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 494080)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_9"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid514510" summary="pid514510" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=9796" target="_blank" id="userinfo514510" class="dropmenu" onmouseover="showMenu(this.id)">奥巴驴</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=9796">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=9796&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_10" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum514510" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=38397&page=1#pid514510', '话题链接已经复制到剪贴板')">11楼</strong>
													<em onclick="$('postmessage_514510').className='t_bigfont'">大</em>							<em onclick="$('postmessage_514510').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_514510').className='t_smallfont'">小</em>												发表于 2010-3-13 00:11&nbsp;																					<a href="viewthread.php?tid=38397&amp;page=1&amp;authorid=9796" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_10"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_10"></div><div id="ad_thread4_10"></div>
						
						
																											<div id="postmessage_514510" class="t_msgfont">终于搞定了，win7系统，使用的是plink .累死了，花了近3小时。</div>

							
							
							
							
															<div id="post_rate_div_514510"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo514510_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=9796" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=38397&amp;repquote=514510&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 514510)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_10"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid662119" summary="pid662119" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=16129" target="_blank" id="userinfo662119" class="dropmenu" onmouseover="showMenu(this.id)">faith</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=16129">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=16129&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_11" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum662119" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=38397&page=1#pid662119', '话题链接已经复制到剪贴板')">12楼</strong>
													<em onclick="$('postmessage_662119').className='t_bigfont'">大</em>							<em onclick="$('postmessage_662119').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_662119').className='t_smallfont'">小</em>												发表于 2010-6-7 21:30&nbsp;																					<a href="viewthread.php?tid=38397&amp;page=1&amp;authorid=16129" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_11"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_11"></div><div id="ad_thread4_11"></div>
						
						
																											<div id="postmessage_662119" class="t_msgfont">多谢lz<br />
一个小问题请教下lz&nbsp;&nbsp;<a href="https://dl.getdropbox.com/u/873345/download/gfwlist.pac" target="_blank">https://dl.getdropbox.com/u/873345/download/gfwlist.pac</a>这个文件的更新是谁在维护啊，可以一直用吗。。。<br />
<br />
[<i> 本帖最后由 faith 于 2010-6-7 21:49 编辑 </i>]</div>

							
							
							
							
															<div id="post_rate_div_662119"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo662119_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=16129" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=38397&amp;repquote=662119&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 662119)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_11"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid662171" summary="pid662171" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7221" target="_blank" id="userinfo662171" class="dropmenu" onmouseover="showMenu(this.id)">8th.gua</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7221">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7221&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_12" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum662171" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=38397&page=1#pid662171', '话题链接已经复制到剪贴板')">13楼</strong>
													<em onclick="$('postmessage_662171').className='t_bigfont'">大</em>							<em onclick="$('postmessage_662171').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_662171').className='t_smallfont'">小</em>												发表于 2010-6-7 21:46&nbsp;																					<a href="viewthread.php?tid=38397&amp;page=1&amp;authorid=7221" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_12"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_12"></div><div id="ad_thread4_12"></div>
													<h2>回复 13楼 faith 的话题</h2>
						
						
																											<div id="postmessage_662171" class="t_msgfont">可以到这里下载最新的PAC文件<br />
<a href="http://autoproxy2pac.appspot.com/" target="_blank">http://autoproxy2pac.appspot.com/</a><br />
或<a href="https://autoproxy2pac.appspot.com/" target="_blank">https://autoproxy2pac.appspot.com/</a></div>

							
							
							
							
															<div id="post_rate_div_662171"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo662171_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=7221" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=38397&amp;repquote=662171&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 662171)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_12"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid662502" summary="pid662502" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1909" target="_blank" id="userinfo662502" class="dropmenu" onmouseover="showMenu(this.id)">单手扶墙</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">活了几十年年，没能为党为人民做点什么，每思及此，心神不宁。</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1909">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1909&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_13" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum662502" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=38397&page=1#pid662502', '话题链接已经复制到剪贴板')">14楼</strong>
													<em onclick="$('postmessage_662502').className='t_bigfont'">大</em>							<em onclick="$('postmessage_662502').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_662502').className='t_smallfont'">小</em>												发表于 2010-6-7 22:59&nbsp;																					<a href="viewthread.php?tid=38397&amp;page=1&amp;authorid=1909" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_13"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_13"></div><div id="ad_thread4_13"></div>
						
						
																											<div id="postmessage_662502" class="t_msgfont">向伟大的库库致敬</div>

							
							
							
							
															<div id="post_rate_div_662502"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo662502_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1909" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=38397&amp;repquote=662502&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 662502)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_13"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid682167" summary="pid682167" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8920" target="_blank" id="userinfo682167" class="dropmenu" onmouseover="showMenu(this.id)">watersword</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">FZL书呆子\数据控\r&amp;b-Cynicism\Britsh Rock is great\84呃党召集人</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8920">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8920&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_14" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum682167" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=38397&page=1#pid682167', '话题链接已经复制到剪贴板')">15楼</strong>
													<em onclick="$('postmessage_682167').className='t_bigfont'">大</em>							<em onclick="$('postmessage_682167').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_682167').className='t_smallfont'">小</em>												发表于 2010-6-14 15:23&nbsp;																					<a href="viewthread.php?tid=38397&amp;page=1&amp;authorid=8920" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_14"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_14"></div><div id="ad_thread4_14"></div>
						
						
																											<div id="postmessage_682167" class="t_msgfont">致敬...收藏学习</div>

							
							
							
							
															<div id="post_rate_div_682167"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo682167_menu" style="display: none;">
										<dl></dl>
											<p><a href="https://twitter.com/watertiwt" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=8920" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=38397&amp;repquote=682167&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 682167)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_14"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid697181" summary="pid697181" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=9949" target="_blank" id="userinfo697181" class="dropmenu" onmouseover="showMenu(this.id)">清风笑豪情</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">好读书人</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=9949">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=9949&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_15" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum697181" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=38397&page=1#pid697181', '话题链接已经复制到剪贴板')">16楼</strong>
													<em onclick="$('postmessage_697181').className='t_bigfont'">大</em>							<em onclick="$('postmessage_697181').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_697181').className='t_smallfont'">小</em>												发表于 2010-6-22 11:46&nbsp;																					<a href="viewthread.php?tid=38397&amp;page=1&amp;authorid=9949" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_15"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_15"></div><div id="ad_thread4_15"></div>
						
						
																											<div id="postmessage_697181" class="t_msgfont">反馈：<br />
<br />
第三批SSH名额。<br />
<br />
1、火狐配置成功，并访问顺畅。包括youtube 博讯均OK，只是访问google.com，还是自动跳转到hk<br />
<br />
2、IE使用SSH代理方法，按部就班操作，失败，所有网站无法访问。<br />
<br />
福建电信，报告完毕<br />
<br />
[<i> 本帖最后由 清风笑豪情 于 2010-6-22 11:48 编辑 </i>]</div>

							
							
							
							
															<div id="post_rate_div_697181"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo697181_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=9949" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=38397&amp;repquote=697181&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 697181)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_15"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid697218" summary="pid697218" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1960" target="_blank" id="userinfo697218" class="dropmenu" onmouseover="showMenu(this.id)">库存袈裟</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">@bruceku 想象力比知识更重要。</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1960">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1960&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_16" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum697218" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=38397&page=1#pid697218', '话题链接已经复制到剪贴板')">17楼</strong>
													<em onclick="$('postmessage_697218').className='t_bigfont'">大</em>							<em onclick="$('postmessage_697218').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_697218').className='t_smallfont'">小</em>												发表于 2010-6-22 11:59&nbsp;																					<a href="viewthread.php?tid=38397&amp;page=1&amp;authorid=1960" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_16"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_16"></div><div id="ad_thread4_16"></div>
													<h2>回复 16楼 清风笑豪情 的话题</h2>
						
						
																											<div id="postmessage_697218" class="t_msgfont">1.使用google.com/ncr 访问，再将“google.com”加入至autoproxy规则。<br />
2.请将IE自动配置脚本更新为以下地址：<br />
<a href="http://twiapp.alwaysdata.net/autoproxy.pac" target="_blank">http://twiapp.alwaysdata.net/autoproxy.pac</a><br />
<br />
=======================<br />
另，主楼已更新。</div>

							
							
							
							
															<div id="post_rate_div_697218"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo697218_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1960" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=38397&amp;repquote=697218&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 697218)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_16"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid698512" summary="pid698512" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=9949" target="_blank" id="userinfo698512" class="dropmenu" onmouseover="showMenu(this.id)">清风笑豪情</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">好读书人</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=9949">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=9949&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_17" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum698512" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=38397&page=1#pid698512', '话题链接已经复制到剪贴板')">18楼</strong>
													<em onclick="$('postmessage_698512').className='t_bigfont'">大</em>							<em onclick="$('postmessage_698512').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_698512').className='t_smallfont'">小</em>												发表于 2010-6-23 00:42&nbsp;																					<a href="viewthread.php?tid=38397&amp;page=1&amp;authorid=9949" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_17"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_17"></div><div id="ad_thread4_17"></div>
													<h2>回复 17楼 库存袈裟 的话题</h2>
						
						
																											<div id="postmessage_698512" class="t_msgfont">更新地址后，依然如故，无法访问。<br />
<br />
SSH正常。</div>

							
							
							
							
															<div id="post_rate_div_698512"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo698512_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=9949" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=38397&amp;repquote=698512&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 698512)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_17"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid699202" summary="pid699202" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12082" target="_blank" id="userinfo699202" class="dropmenu" onmouseover="showMenu(this.id)">qy3217</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">意甲冠军</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12082">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12082&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_18" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum699202" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=38397&page=1#pid699202', '话题链接已经复制到剪贴板')">19楼</strong>
													<em onclick="$('postmessage_699202').className='t_bigfont'">大</em>							<em onclick="$('postmessage_699202').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_699202').className='t_smallfont'">小</em>												发表于 2010-6-23 13:07&nbsp;																					<a href="viewthread.php?tid=38397&amp;page=1&amp;authorid=12082" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_18"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_18"></div><div id="ad_thread4_18"></div>
						
						
																											<div id="postmessage_699202" class="t_msgfont">这个好，要收藏一下</div>

							
							
							
							
															<div id="post_rate_div_699202"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo699202_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=12082" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=38397&amp;repquote=699202&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 699202)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_18"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid701462" summary="pid701462" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=4356" target="_blank" id="userinfo701462" class="dropmenu" onmouseover="showMenu(this.id)">bukubuku</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=4356">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=4356&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_19" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum701462" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=38397&page=1#pid701462', '话题链接已经复制到剪贴板')">20楼</strong>
													<em onclick="$('postmessage_701462').className='t_bigfont'">大</em>							<em onclick="$('postmessage_701462').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_701462').className='t_smallfont'">小</em>												发表于 2010-6-24 15:44&nbsp;																					<a href="viewthread.php?tid=38397&amp;page=1&amp;authorid=4356" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_19"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_19"></div><div id="ad_thread4_19"></div>
						
						
																											<div id="postmessage_701462" class="t_msgfont">感谢楼主</div>

							
							
							
							
															<div id="post_rate_div_701462"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo701462_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=4356" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=38397&amp;repquote=701462&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 701462)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_19"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid701527" summary="pid701527" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12463" target="_blank" id="userinfo701527" class="dropmenu" onmouseover="showMenu(this.id)">DaemonEye</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">不河蟹的围观团团员</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12463">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12463&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_20" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum701527" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=38397&page=1#pid701527', '话题链接已经复制到剪贴板')">21楼</strong>
													<em onclick="$('postmessage_701527').className='t_bigfont'">大</em>							<em onclick="$('postmessage_701527').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_701527').className='t_smallfont'">小</em>												发表于 2010-6-24 16:14&nbsp;																					<a href="viewthread.php?tid=38397&amp;page=1&amp;authorid=12463" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_20"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_20"></div><div id="ad_thread4_20"></div>
						
						
																											<div id="postmessage_701527" class="t_msgfont">袈裟 知道那些出售的ssh比较稳定不 我手头的ssh 一天至少一半时间断的 老是socks failed 据说是gfw？</div>

							
							
							
							
															<div id="post_rate_div_701527"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo701527_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=12463" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=38397&amp;repquote=701527&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 701527)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_20"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid701534" summary="pid701534" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1960" target="_blank" id="userinfo701534" class="dropmenu" onmouseover="showMenu(this.id)">库存袈裟</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">@bruceku 想象力比知识更重要。</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1960">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1960&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_21" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum701534" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=38397&page=1#pid701534', '话题链接已经复制到剪贴板')">22楼</strong>
													<em onclick="$('postmessage_701534').className='t_bigfont'">大</em>							<em onclick="$('postmessage_701534').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_701534').className='t_smallfont'">小</em>												发表于 2010-6-24 16:16&nbsp;																					<a href="viewthread.php?tid=38397&amp;page=1&amp;authorid=1960" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_21"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_21"></div><div id="ad_thread4_21"></div>
													<h2>回复 21楼 DaemonEye 的话题</h2>
						
						
																											<div id="postmessage_701534" class="t_msgfont">vps合租</div>

							
							
							
							
															<div id="post_rate_div_701534"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo701534_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1960" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=38397&amp;repquote=701534&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 701534)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_21"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid701593" summary="pid701593" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12463" target="_blank" id="userinfo701593" class="dropmenu" onmouseover="showMenu(this.id)">DaemonEye</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">不河蟹的围观团团员</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12463">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12463&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_22" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum701593" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=38397&page=1#pid701593', '话题链接已经复制到剪贴板')">23楼</strong>
													<em onclick="$('postmessage_701593').className='t_bigfont'">大</em>							<em onclick="$('postmessage_701593').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_701593').className='t_smallfont'">小</em>												发表于 2010-6-24 16:42&nbsp;																					<a href="viewthread.php?tid=38397&amp;page=1&amp;authorid=12463" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_22"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_22"></div><div id="ad_thread4_22"></div>
						
						
																											<div id="postmessage_701593" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>库存袈裟</i> 于 2010-6-24 16:16 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=701534&amp;ptid=38397" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
vps合租 </blockquote></div>那好像比买ssh要贵了不少啊.....我倒是愿意和人合租 一个月出个20也无所谓 不知道到哪里找人............</div>

							
							
							
							
															<div id="post_rate_div_701593"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo701593_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=12463" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=38397&amp;repquote=701593&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 701593)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_22"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid701671" summary="pid701671" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1960" target="_blank" id="userinfo701671" class="dropmenu" onmouseover="showMenu(this.id)">库存袈裟</a></cite>
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
						<strong title="复制话题链接到剪贴板" id="postnum701671" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=38397&page=1#pid701671', '话题链接已经复制到剪贴板')">24楼</strong>
													<em onclick="$('postmessage_701671').className='t_bigfont'">大</em>							<em onclick="$('postmessage_701671').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_701671').className='t_smallfont'">小</em>												发表于 2010-6-24 17:11&nbsp;																					<a href="viewthread.php?tid=38397&amp;page=1&amp;authorid=1960" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_23"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_23"></div><div id="ad_thread4_23"></div>
													<h2>回复 23楼 DaemonEye 的话题</h2>
						
						
																											<div id="postmessage_701671" class="t_msgfont">20，凑3，4个人够一个不错的vps了。</div>

							
							
							
							
															<div id="post_rate_div_701671"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo701671_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1960" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=38397&amp;repquote=701671&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 701671)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_23"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid701927" summary="pid701927" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12463" target="_blank" id="userinfo701927" class="dropmenu" onmouseover="showMenu(this.id)">DaemonEye</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">不河蟹的围观团团员</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12463">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12463&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_24" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum701927" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=38397&page=1#pid701927', '话题链接已经复制到剪贴板')">25楼</strong>
													<em onclick="$('postmessage_701927').className='t_bigfont'">大</em>							<em onclick="$('postmessage_701927').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_701927').className='t_smallfont'">小</em>												发表于 2010-6-24 19:21&nbsp;																					<a href="viewthread.php?tid=38397&amp;page=1&amp;authorid=12463" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_24"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_24"></div><div id="ad_thread4_24"></div>
						
						
																											<div id="postmessage_701927" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>库存袈裟</i> 于 2010-6-24 17:11 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=701671&amp;ptid=38397" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
20，凑3，4个人够一个不错的vps了。 </blockquote></div>有凑喊我 长期需要ssh....</div>

							
							
							
							
															<div id="post_rate_div_701927"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo701927_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=12463" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=38397&amp;repquote=701927&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 701927)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_24"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid702482" summary="pid702482" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8663" target="_blank" id="userinfo702482" class="dropmenu" onmouseover="showMenu(this.id)">man-eleven</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">&#9773;校叛徒、基本上冲锋在后、共产主义的坚定不信任者;运动控(喜欢巨大无比万人欢呼沸腾的场面比如足球赛)、热爱自由、容易怀旧伤感、会办事不会说话，俺们村最有文化的人，没有之一</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8663">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8663&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_25" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum702482" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=38397&page=1#pid702482', '话题链接已经复制到剪贴板')">26楼</strong>
													<em onclick="$('postmessage_702482').className='t_bigfont'">大</em>							<em onclick="$('postmessage_702482').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_702482').className='t_smallfont'">小</em>												发表于 2010-6-25 03:18&nbsp;																					<a href="viewthread.php?tid=38397&amp;page=1&amp;authorid=8663" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_25"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_25"></div><div id="ad_thread4_25"></div>
													<h2>回复 17楼 库存袈裟 的话题</h2>
						
						
																											<div id="postmessage_702482" class="t_msgfont">经测试，谷歌和ie都翻不过去</div>

							
							
							
							
															<div id="post_rate_div_702482"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo702482_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=8663" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=38397&amp;repquote=702482&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 702482)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_25"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid702802" summary="pid702802" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12463" target="_blank" id="userinfo702802" class="dropmenu" onmouseover="showMenu(this.id)">DaemonEye</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">不河蟹的围观团团员</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12463">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12463&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_26" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum702802" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=38397&page=1#pid702802', '话题链接已经复制到剪贴板')">27楼</strong>
													<em onclick="$('postmessage_702802').className='t_bigfont'">大</em>							<em onclick="$('postmessage_702802').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_702802').className='t_smallfont'">小</em>												发表于 2010-6-25 10:57&nbsp;																					<a href="viewthread.php?tid=38397&amp;page=1&amp;authorid=12463" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_26"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_26"></div><div id="ad_thread4_26"></div>
						
						
																											<div id="postmessage_702802" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>man-eleven</i> 于 2010-6-25 03:18 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=702482&amp;ptid=38397" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
经测试，谷歌和ie都翻不过去 </blockquote></div>能翻得我天天挂着呢 你看看ssh连接那边正常不</div>

							
							
							
							
															<div id="post_rate_div_702802"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo702802_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=12463" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=38397&amp;repquote=702802&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 702802)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_26"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid713846" summary="pid713846" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1960" target="_blank" id="userinfo713846" class="dropmenu" onmouseover="showMenu(this.id)">库存袈裟</a></cite>
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
						<strong title="复制话题链接到剪贴板" id="postnum713846" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=38397&page=1#pid713846', '话题链接已经复制到剪贴板')">28楼</strong>
													<em onclick="$('postmessage_713846').className='t_bigfont'">大</em>							<em onclick="$('postmessage_713846').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_713846').className='t_smallfont'">小</em>												发表于 2010-6-30 17:22&nbsp;																					<a href="viewthread.php?tid=38397&amp;page=1&amp;authorid=1960" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_27"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_27"></div><div id="ad_thread4_27"></div>
													<h2>免费SSH</h2>
						
						
																											<div id="postmessage_713846" class="t_msgfont"><a href="http://ssh.daili.vc/" target="_blank">http://ssh.daili.vc/</a></div>

							
							
							
							
															<div id="post_rate_div_713846"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo713846_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1960" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=38397&amp;repquote=713846&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 713846)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_27"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid718906" summary="pid718906" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6449" target="_blank" id="userinfo718906" class="dropmenu" onmouseover="showMenu(this.id)">倪秋</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">颂赞和诅咒从一个口里出来，我的兄弟们，这是不应当的。</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6449">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6449&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_28" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum718906" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=38397&page=1#pid718906', '话题链接已经复制到剪贴板')">29楼</strong>
													<em onclick="$('postmessage_718906').className='t_bigfont'">大</em>							<em onclick="$('postmessage_718906').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_718906').className='t_smallfont'">小</em>												发表于 2010-7-3 11:23&nbsp;																					<a href="viewthread.php?tid=38397&amp;page=1&amp;authorid=6449" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_28"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_28"></div><div id="ad_thread4_28"></div>
						
						
																											<div id="postmessage_718906" class="t_msgfont">关于chrome+proxy+ssh的翻墙教程推荐：<br />
<a href="http://bbs.vpser.net/thread-1371-1-1.html" target="_blank">http://bbs.vpser.net/thread-1371-1-1.html</a> <br />
======<br />
感觉设置较为简洁。</div>

							
							
							
							
															<div id="post_rate_div_718906"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo718906_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=6449" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=38397&amp;repquote=718906&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 718906)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_28"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid725716" summary="pid725716" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1960" target="_blank" id="userinfo725716" class="dropmenu" onmouseover="showMenu(this.id)">库存袈裟</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">@bruceku 想象力比知识更重要。</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1960">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1960&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_29" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum725716" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=38397&page=1#pid725716', '话题链接已经复制到剪贴板')">30楼</strong>
													<em onclick="$('postmessage_725716').className='t_bigfont'">大</em>							<em onclick="$('postmessage_725716').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_725716').className='t_smallfont'">小</em>												发表于 2010-7-7 12:16&nbsp;																					<a href="viewthread.php?tid=38397&amp;page=1&amp;authorid=1960" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_29"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_29"></div><div id="ad_thread4_29"></div>
						
						
																											<div id="postmessage_725716" class="t_msgfont"><a href="http://free.ssh.vpn.net.in/" target="_blank">http://free.ssh.vpn.net.in/</a></div>

							
							
							
							
															<div id="post_rate_div_725716"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo725716_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1960" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=38397&amp;repquote=725716&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 725716)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_29"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid725787" summary="pid725787" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=14239" target="_blank" id="userinfo725787" class="dropmenu" onmouseover="showMenu(this.id)">社音Cathy</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=14239">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=14239&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_30" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum725787" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=38397&page=1#pid725787', '话题链接已经复制到剪贴板')">31楼</strong>
													<em onclick="$('postmessage_725787').className='t_bigfont'">大</em>							<em onclick="$('postmessage_725787').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_725787').className='t_smallfont'">小</em>												发表于 2010-7-7 12:42&nbsp;																					<a href="viewthread.php?tid=38397&amp;page=1&amp;authorid=14239" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_30"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_30"></div><div id="ad_thread4_30"></div>
						
						
																											<div id="postmessage_725787" class="t_msgfont">按部就班做了前七步，第八步还是不行，可能是出了什么问题？</div>

							
							
							
							
															<div id="post_rate_div_725787"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo725787_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=14239" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=38397&amp;repquote=725787&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 725787)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_30"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid725831" summary="pid725831" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>																		john52712</cite>
							该用户已被删除
															</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum725831" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=38397&page=1#pid725831', '话题链接已经复制到剪贴板')">32楼</strong>
													<em onclick="$('postmessage_725831').className='t_bigfont'">大</em>							<em onclick="$('postmessage_725831').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_725831').className='t_smallfont'">小</em>												发表于 2010-7-7 12:55&nbsp;																					<a href="viewthread.php?tid=38397&amp;page=1&amp;authorid=11971" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_31"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_31"></div><div id="ad_thread4_31"></div>
						
						
																											<div id="postmessage_725831" class="t_msgfont">好文，可惜没有ssh帐号</div>

							
							
							
							
															<div id="post_rate_div_725831"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=38397&amp;repquote=725831&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 725831)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_31"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid727859" summary="pid727859" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6366" target="_blank" id="userinfo727859" class="dropmenu" onmouseover="showMenu(this.id)">帅得很无奈</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">想当年我也是青春逼人，如今青春已逝，就剩这么一逼人了……</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6366">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6366&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_32" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum727859" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=38397&page=1#pid727859', '话题链接已经复制到剪贴板')">33楼</strong>
													<em onclick="$('postmessage_727859').className='t_bigfont'">大</em>							<em onclick="$('postmessage_727859').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_727859').className='t_smallfont'">小</em>												发表于 2010-7-8 12:05&nbsp;																					<a href="viewthread.php?tid=38397&amp;page=1&amp;authorid=6366" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_32"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_32"></div><div id="ad_thread4_32"></div>
						
						
																											<div id="postmessage_727859" class="t_msgfont">花了两个多小时，终于ok了。哎，早知道就多念点书了。袈裟辛苦！</div>

							
							
							
							
															<div id="post_rate_div_727859"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo727859_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=6366" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=38397&amp;repquote=727859&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 727859)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_32"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid728358" summary="pid728358" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=13996" target="_blank" id="userinfo728358" class="dropmenu" onmouseover="showMenu(this.id)">smlovef4</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=13996">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=13996&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_33" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum728358" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=38397&page=1#pid728358', '话题链接已经复制到剪贴板')">34楼</strong>
													<em onclick="$('postmessage_728358').className='t_bigfont'">大</em>							<em onclick="$('postmessage_728358').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_728358').className='t_smallfont'">小</em>												发表于 2010-7-8 16:54&nbsp;																					<a href="viewthread.php?tid=38397&amp;page=1&amp;authorid=13996" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_33"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_33"></div><div id="ad_thread4_33"></div>
						
						
																											<div id="postmessage_728358" class="t_msgfont">一直用VPN的飘过<br />
VPN使用很简单为什么要用SHH呢</div>

							
							
							
							
															<div id="post_rate_div_728358"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo728358_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=13996" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=38397&amp;repquote=728358&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 728358)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_33"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid728387" summary="pid728387" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=14330" target="_blank" id="userinfo728387" class="dropmenu" onmouseover="showMenu(this.id)">中超冠军</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=14330">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=14330&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_34" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum728387" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=38397&page=1#pid728387', '话题链接已经复制到剪贴板')">35楼</strong>
													<em onclick="$('postmessage_728387').className='t_bigfont'">大</em>							<em onclick="$('postmessage_728387').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_728387').className='t_smallfont'">小</em>												发表于 2010-7-8 17:08&nbsp;																					<a href="viewthread.php?tid=38397&amp;page=1&amp;authorid=14330" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_34"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_34"></div><div id="ad_thread4_34"></div>
						
						
																											<div id="postmessage_728387" class="t_msgfont">不错，现在在用</div>

							
							
							
							
															<div id="post_rate_div_728387"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo728387_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=14330" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=38397&amp;repquote=728387&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 728387)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_34"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid752945" summary="pid752945" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1909" target="_blank" id="userinfo752945" class="dropmenu" onmouseover="showMenu(this.id)">单手扶墙</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">活了几十年年，没能为党为人民做点什么，每思及此，心神不宁。</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1909">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1909&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_35" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum752945" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=38397&page=1#pid752945', '话题链接已经复制到剪贴板')">36楼</strong>
													<em onclick="$('postmessage_752945').className='t_bigfont'">大</em>							<em onclick="$('postmessage_752945').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_752945').className='t_smallfont'">小</em>												发表于 2010-7-21 23:08&nbsp;																					<a href="viewthread.php?tid=38397&amp;page=1&amp;authorid=1909" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_35"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_35"></div><div id="ad_thread4_35"></div>
						
						
																											<div id="postmessage_752945" class="t_msgfont">库库是个好筒靴</div>

							
							
							
							
															<div id="post_rate_div_752945"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo752945_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1909" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=38397&amp;repquote=752945&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 752945)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_35"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid766899" summary="pid766899" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=14927" target="_blank" id="userinfo766899" class="dropmenu" onmouseover="showMenu(this.id)">zymysy</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=14927">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=14927&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_36" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum766899" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=38397&page=1#pid766899', '话题链接已经复制到剪贴板')">37楼</strong>
													<em onclick="$('postmessage_766899').className='t_bigfont'">大</em>							<em onclick="$('postmessage_766899').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_766899').className='t_smallfont'">小</em>												发表于 2010-7-31 12:51&nbsp;																					<a href="viewthread.php?tid=38397&amp;page=1&amp;authorid=14927" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_36"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_36"></div><div id="ad_thread4_36"></div>
						
						
																											<div id="postmessage_766899" class="t_msgfont">我低调的来了</div>

							
							
							
							
															<div id="post_rate_div_766899"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo766899_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=14927" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=38397&amp;repquote=766899&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 766899)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_36"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid800453" summary="pid800453" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=17398" target="_blank" id="userinfo800453" class="dropmenu" onmouseover="showMenu(this.id)">xihawangzi</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=17398">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=17398&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_37" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum800453" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=38397&page=1#pid800453', '话题链接已经复制到剪贴板')">38楼</strong>
													<em onclick="$('postmessage_800453').className='t_bigfont'">大</em>							<em onclick="$('postmessage_800453').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_800453').className='t_smallfont'">小</em>												发表于 2010-8-27 21:32&nbsp;																					<a href="viewthread.php?tid=38397&amp;page=1&amp;authorid=17398" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_37"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_37"></div><div id="ad_thread4_37"></div>
						
						
																											<div id="postmessage_800453" class="t_msgfont">使用MyEnTunnel，为什么每次进入都得要重新填写服务器 用户名 和密码呢？save没有起到作用啊</div>

							
							
							
							
															<div id="post_rate_div_800453"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo800453_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=17398" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=38397&amp;repquote=800453&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 800453)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_37"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid800461" summary="pid800461" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6974" target="_blank" id="userinfo800461" class="dropmenu" onmouseover="showMenu(this.id)">xiaohui</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">广告位出租</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6974">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6974&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_38" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum800461" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=38397&page=1#pid800461', '话题链接已经复制到剪贴板')">39楼</strong>
													<em onclick="$('postmessage_800461').className='t_bigfont'">大</em>							<em onclick="$('postmessage_800461').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_800461').className='t_smallfont'">小</em>												发表于 2010-8-27 21:35&nbsp;																					<a href="viewthread.php?tid=38397&amp;page=1&amp;authorid=6974" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_38"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_38"></div><div id="ad_thread4_38"></div>
						
						
																											<div id="postmessage_800461" class="t_msgfont">图挂了</div>

							
							
							
							
															<div id="post_rate_div_800461"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo800461_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=6974" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=38397&amp;repquote=800461&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 800461)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_38"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid800470" summary="pid800470" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=17398" target="_blank" id="userinfo800470" class="dropmenu" onmouseover="showMenu(this.id)">xihawangzi</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=17398">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=17398&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_39" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum800470" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=38397&page=1#pid800470', '话题链接已经复制到剪贴板')">40楼</strong>
													<em onclick="$('postmessage_800470').className='t_bigfont'">大</em>							<em onclick="$('postmessage_800470').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_800470').className='t_smallfont'">小</em>												发表于 2010-8-27 21:38&nbsp;																					<a href="viewthread.php?tid=38397&amp;page=1&amp;authorid=17398" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_39"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_39"></div><div id="ad_thread4_39"></div>
						
						
																											<div id="postmessage_800470" class="t_msgfont">需要翻墙看</div>

							
							
							
							
															<div id="post_rate_div_800470"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo800470_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=17398" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=38397&amp;repquote=800470&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 800470)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_39"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid800476" summary="pid800476" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10135" target="_blank" id="userinfo800476" class="dropmenu" onmouseover="showMenu(this.id)">偶佯疯</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">我是个读书人</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10135">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10135&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_40" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum800476" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=38397&page=1#pid800476', '话题链接已经复制到剪贴板')">41楼</strong>
													<em onclick="$('postmessage_800476').className='t_bigfont'">大</em>							<em onclick="$('postmessage_800476').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_800476').className='t_smallfont'">小</em>												发表于 2010-8-27 21:38&nbsp;																					<a href="viewthread.php?tid=38397&amp;page=1&amp;authorid=10135" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_40"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_40"></div><div id="ad_thread4_40"></div>
													<h2>回复 30楼 库存袈裟 的话题</h2>
						
						
																											<div id="postmessage_800476" class="t_msgfont">有没有便宜点的适合个人买的VPS</div>

							
							
							
							
															<div id="post_rate_div_800476"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo800476_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://izlf.info" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=10135" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=38397&amp;repquote=800476&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 800476)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_40"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid807500" summary="pid807500" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=5917" target="_blank" id="userinfo807500" class="dropmenu" onmouseover="showMenu(this.id)">南方木头</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=5917">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=5917&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_41" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum807500" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=38397&page=1#pid807500', '话题链接已经复制到剪贴板')">42楼</strong>
													<em onclick="$('postmessage_807500').className='t_bigfont'">大</em>							<em onclick="$('postmessage_807500').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_807500').className='t_smallfont'">小</em>												发表于 2010-9-1 17:28&nbsp;																					<a href="viewthread.php?tid=38397&amp;page=1&amp;authorid=5917" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_41"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_41"></div><div id="ad_thread4_41"></div>
						
						
																											<div id="postmessage_807500" class="t_msgfont">试了，ssh已经拨通了。但是firefox连接是这个提示：Firefox 尝试联系您指定的代理服务器时连接被拒绝<br />
高手请指教啊。</div>

							
							
							
							
															<div id="post_rate_div_807500"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo807500_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=5917" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=38397&amp;repquote=807500&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 807500)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_41"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid807511" summary="pid807511" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=5917" target="_blank" id="userinfo807511" class="dropmenu" onmouseover="showMenu(this.id)">南方木头</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=5917">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=5917&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_42" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum807511" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=38397&page=1#pid807511', '话题链接已经复制到剪贴板')">43楼</strong>
													<em onclick="$('postmessage_807511').className='t_bigfont'">大</em>							<em onclick="$('postmessage_807511').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_807511').className='t_smallfont'">小</em>												发表于 2010-9-1 17:35&nbsp;																					<a href="viewthread.php?tid=38397&amp;page=1&amp;authorid=5917" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_42"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_42"></div><div id="ad_thread4_42"></div>
						
						
																											<div id="postmessage_807511" class="t_msgfont">换了个服务器ip就可以了。速度不错，爽啊。多谢。</div>

							
							
							
							
															<div id="post_rate_div_807511"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo807511_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=5917" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=38397&amp;repquote=807511&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 807511)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_42"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid807516" summary="pid807516" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8663" target="_blank" id="userinfo807516" class="dropmenu" onmouseover="showMenu(this.id)">man-eleven</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">&#9773;校叛徒、基本上冲锋在后、共产主义的坚定不信任者;运动控(喜欢巨大无比万人欢呼沸腾的场面比如足球赛)、热爱自由、容易怀旧伤感、会办事不会说话，俺们村最有文化的人，没有之一</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8663">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8663&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_43" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum807516" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=38397&page=1#pid807516', '话题链接已经复制到剪贴板')">44楼</strong>
													<em onclick="$('postmessage_807516').className='t_bigfont'">大</em>							<em onclick="$('postmessage_807516').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_807516').className='t_smallfont'">小</em>												发表于 2010-9-1 17:38&nbsp;																					<a href="viewthread.php?tid=38397&amp;page=1&amp;authorid=8663" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_43"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_43"></div><div id="ad_thread4_43"></div>
						
						
																											<div id="postmessage_807516" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>xihawangzi</i> 于 2010-8-27 21:32 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=800453&amp;ptid=38397" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
使用MyEnTunnel，为什么每次进入都得要重新填写服务器 用户名 和密码呢？save没有起到作用啊 </blockquote></div>//用管理员身份</div>

							
							
							
							
															<div id="post_rate_div_807516"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo807516_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=8663" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=38397&amp;repquote=807516&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 807516)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_43"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid815913" summary="pid815913" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6129" target="_blank" id="userinfo815913" class="dropmenu" onmouseover="showMenu(this.id)">蹲看风起</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6129">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6129&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_44" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum815913" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=38397&page=1#pid815913', '话题链接已经复制到剪贴板')">45楼</strong>
													<em onclick="$('postmessage_815913').className='t_bigfont'">大</em>							<em onclick="$('postmessage_815913').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_815913').className='t_smallfont'">小</em>												发表于 2010-9-6 14:01&nbsp;																					<a href="viewthread.php?tid=38397&amp;page=1&amp;authorid=6129" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_44"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_44"></div><div id="ad_thread4_44"></div>
						
						
																											<div id="postmessage_815913" class="t_msgfont">最近不好用了 AutoProxy没有反应</div>

							
							
							
							
															<div id="post_rate_div_815913"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo815913_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=6129" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=38397&amp;repquote=815913&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 815913)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_44"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid816338" summary="pid816338" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12197" target="_blank" id="userinfo816338" class="dropmenu" onmouseover="showMenu(this.id)">曙光再现</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">&#9745;80后 &#9745;工科学生 &#9745;ACG fan &#9745;党龄八年 &#9745;喜外国商业大片 &#9745;喜翻墙 &#9745;喜GR &#9745;黑丝控 &#9745;美腿控 &#9745;时事控 &#9745;伪愤青 &#9745;草泥马军团预备团员&#9745;新人@ssg2006求fo</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12197">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12197&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_45" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum816338" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=38397&page=1#pid816338', '话题链接已经复制到剪贴板')">46楼</strong>
													<em onclick="$('postmessage_816338').className='t_bigfont'">大</em>							<em onclick="$('postmessage_816338').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_816338').className='t_smallfont'">小</em>												发表于 2010-9-6 18:47&nbsp;																					<a href="viewthread.php?tid=38397&amp;page=1&amp;authorid=12197" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_45"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_45"></div><div id="ad_thread4_45"></div>
						
						
																											<div id="postmessage_816338" class="t_msgfont">好久不翻墙了<br />
累了</div>

							
							
							
							
															<div id="post_rate_div_816338"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo816338_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=12197" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=38397&amp;repquote=816338&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 816338)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_45"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid834350" summary="pid834350" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 <a name="lastpost"></a>					<cite>											<a href="space.php?uid=18104" target="_blank" id="userinfo834350" class="dropmenu" onmouseover="showMenu(this.id)">leanch</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=18104">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=18104&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_46" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum834350" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=38397&page=1#pid834350', '话题链接已经复制到剪贴板')">47楼</strong>
													<em onclick="$('postmessage_834350').className='t_bigfont'">大</em>							<em onclick="$('postmessage_834350').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_834350').className='t_smallfont'">小</em>												发表于 2010-9-17 15:02&nbsp;																					<a href="viewthread.php?tid=38397&amp;page=1&amp;authorid=18104" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_46"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_46"></div><div id="ad_thread4_46"></div>
						
						
																											<div id="postmessage_834350" class="t_msgfont">有点麻烦，我觉得还是自由门最方便，即开即用</div>

							
							
							
							
															<div id="post_rate_div_834350"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo834350_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=18104" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=38397&amp;repquote=834350&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 834350)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_46"></div>				</div>
			</td>
		</tr>
		</table>
		</div>
</form>





<div class="pages_btns">
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=38397&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=38397&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
				<span class="postbtn" id="newspecialtmp" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=38397&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

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

	<form method="post" id="postform" action="post.php?action=reply&amp;fid=26&amp;tid=38397&amp;extra=&amp;replysubmit=yes" onSubmit="return validate(this)">
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
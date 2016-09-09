<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<title>gmail毫无安全性可言，劫持也许只需10秒/李铁 - 国家局域网研究所 -  1984bbs.com </title>
<meta name="keywords" content="" />
<meta name="MSSmartTagsPreventParsing" content="True" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<link rel="archives" title="1984bbs.com" href="https://1984bbs.com/archiver/" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_viewthread.css" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_common.css" />
<script type="text/javascript">
	var discuz_uid = 13019;var IMGDIR = 'images/default';var attackevasive = '0';var gid = 0;var STYLEID = '1';
	gid = parseInt('3');var fid = parseInt('26');var tid = parseInt('38558');
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
			<p><a href="index.php" id="forumlist" onmouseover="showMenu(this.id)" class="dropmenu">1984bbs.com</a> &raquo; <a href="forumdisplay.php?fid=26">国家局域网研究所</a> &raquo; gmail毫无安全性可言，劫持也许只需10秒/李铁</p>
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
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=38558&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=38558&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
				<span class="postbtn" id="newspecial" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=38558&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

	<ul class="popupmenu_popup newspecialmenu" id="newspecial_menu" style="display: none">
		<li><a href="post.php?action=newthread&amp;fid=26&amp;extra=">发新话题</a></li>
		<li class="poll"><a href="post.php?action=newthread&amp;fid=26&amp;extra=&amp;special=1">发布投票</a></li>													</ul>

<form method="post" name="modactions">
	<input type="hidden" name="formhash" value="823c9fa2" />
	<div class="mainbox viewthread">
		<span class="headactions">
					<a href="my.php?item=favorites&amp;tid=38558" id="ajax_favorite" onclick="ajaxmenu(event, this.id, 3000, 0)">收藏</a>
			<a href="my.php?item=subscriptions&amp;subadd=38558" id="ajax_subscription" onclick="ajaxmenu(event, this.id, 3000, null, 0)">订阅</a>
			<a href="misc.php?action=emailfriend&amp;tid=38558" id="emailfriend" onclick="ajaxmenu(event, this.id, 9000000, null, 0)">推荐</a>
				<a href="viewthread.php?action=printable&amp;tid=38558" target="_blank" class="notabs">打印</a>
				</span>
		<h1>gmail毫无安全性可言，劫持也许只需10秒/李铁		</h1>
							<table id="pid493548" summary="pid493548" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>																		qingzhuhaiya</cite>
							该用户已被删除
															</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum493548" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=38558&page=1#pid493548', '话题链接已经复制到剪贴板')">1楼</strong>
													<em onclick="$('postmessage_493548').className='t_bigfont'">大</em>							<em onclick="$('postmessage_493548').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_493548').className='t_smallfont'">小</em>												发表于 2010-2-26 09:43&nbsp;																					<a href="viewthread.php?tid=38558&amp;page=1&amp;authorid=11866" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_0"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_0"></div><div id="ad_thread4_0"></div>
													<h2>gmail毫无安全性可言，劫持也许只需10秒/李铁</h2>
						
						
																											<div id="postmessage_493548" class="t_msgfont">前阵子手机就经常收到gmail邮箱恢复代码信息，因为google和中国政府“吵架”，也就没太留意。<br />
<br />
今天去gmail.com上仔细看了一下，发现如果政府去劫持我们的gmail邮箱，技术上是一件非常容易的事情。<br />
大多数朋友的gmail邮箱应该已经绑定了一个国内的手机，在[找回密码]上，有一项是通过手机找回密码，找回后，找回码就发到我们的手机上。试想一下，手机公司截获和拦截这个码很容易，也就是说，如果需要的话，我们的邮箱可以被轻易的截获，然后可以查阅和使用。<br />
<br />
<br />
gmail是我一直以为相对安全的邮箱，除了被安插木马等情况，居然可以被这样轻易劫持。<br />
<img src="http://imgur.com/AHw1Y.jpg" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></div>

							
							
							
							
															<div id="post_rate_div_493548"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=38558&amp;repquote=493548&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 493548)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_0"></div>				</div>
			</td>
		</tr>
		</table>
		</div><div class="ad_column" id="ad_interthread"><a href="/viewthread.php?tid=54699" target="_blank" style="color:red;">1984bbs是一个非营利项目，它需要您的捐助！</font></a>		</div>
	<div class="mainbox viewthread">
			<table id="pid493568" summary="pid493568" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1333" target="_blank" id="userinfo493568" class="dropmenu" onmouseover="showMenu(this.id)">废种豆豉</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">死胎  @vanlulnav       http://www.bullock.cn/blogs/vanlulnav/</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1333">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1333&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_1" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum493568" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=38558&page=1#pid493568', '话题链接已经复制到剪贴板')">2楼</strong>
													<em onclick="$('postmessage_493568').className='t_bigfont'">大</em>							<em onclick="$('postmessage_493568').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_493568').className='t_smallfont'">小</em>												发表于 2010-2-26 09:56&nbsp;																					<a href="viewthread.php?tid=38558&amp;page=1&amp;authorid=1333" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_1"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_1"></div><div id="ad_thread4_1"></div>
						
						
																											<div id="postmessage_493568" class="t_msgfont">？？是么？？</div>

							
							
							
							
															<div id="post_rate_div_493568"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo493568_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://www.bullock.cn/blogs/vanlulnav/" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=1333" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=38558&amp;repquote=493568&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 493568)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_1"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid493570" summary="pid493570" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=9980" target="_blank" id="userinfo493570" class="dropmenu" onmouseover="showMenu(this.id)">陈志炜</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">祝你早 中 晚都安 &amp; 删回复和编辑帖子都是卑劣的行为</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=9980">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=9980&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_2" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum493570" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=38558&page=1#pid493570', '话题链接已经复制到剪贴板')">3楼</strong>
													<em onclick="$('postmessage_493570').className='t_bigfont'">大</em>							<em onclick="$('postmessage_493570').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_493570').className='t_smallfont'">小</em>												发表于 2010-2-26 10:01&nbsp;																					<a href="viewthread.php?tid=38558&amp;page=1&amp;authorid=9980" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_2"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_2"></div><div id="ad_thread4_2"></div>
						
						
																											<div id="postmessage_493570" class="t_msgfont">我前阵子经常收到飞信的验证码……</div>

							
							
							
							
															<div id="post_rate_div_493570"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo493570_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=9980" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=38558&amp;repquote=493570&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 493570)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_2"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid493579" summary="pid493579" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10563" target="_blank" id="userinfo493579" class="dropmenu" onmouseover="showMenu(this.id)">wuliaofei</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">哔~~~</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10563">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10563&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_3" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum493579" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=38558&page=1#pid493579', '话题链接已经复制到剪贴板')">4楼</strong>
													<em onclick="$('postmessage_493579').className='t_bigfont'">大</em>							<em onclick="$('postmessage_493579').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_493579').className='t_smallfont'">小</em>												发表于 2010-2-26 10:09&nbsp;																					<a href="viewthread.php?tid=38558&amp;page=1&amp;authorid=10563" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_3"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_3"></div><div id="ad_thread4_3"></div>
						
						
																											<div id="postmessage_493579" class="t_msgfont">不发表看法 只是想问 这个和手机绑在一起是干什么</div>

							
							
							
							
															<div id="post_rate_div_493579"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo493579_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=10563" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=38558&amp;repquote=493579&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 493579)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_3"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid493653" summary="pid493653" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=464" target="_blank" id="userinfo493653" class="dropmenu" onmouseover="showMenu(this.id)">Phillip</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">路边社特邀围观群众</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=464">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=464&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_4" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum493653" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=38558&page=1#pid493653', '话题链接已经复制到剪贴板')">5楼</strong>
													<em onclick="$('postmessage_493653').className='t_bigfont'">大</em>							<em onclick="$('postmessage_493653').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_493653').className='t_smallfont'">小</em>												发表于 2010-2-26 11:10&nbsp;																					<a href="viewthread.php?tid=38558&amp;page=1&amp;authorid=464" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_4"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_4"></div><div id="ad_thread4_4"></div>
						
						
																											<div id="postmessage_493653" class="t_msgfont">我没绑定啊</div>

							
							
							
							
															<div id="post_rate_div_493653"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo493653_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=464" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=38558&amp;repquote=493653&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 493653)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_4"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid493659" summary="pid493659" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=143" target="_blank" id="userinfo493659" class="dropmenu" onmouseover="showMenu(this.id)">syriana</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">FREE TALK 組長 1st Gen / 隱於市朝 &#8226; 與84諸兄相望江湖</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=143">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=143&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_5" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum493659" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=38558&page=1#pid493659', '话题链接已经复制到剪贴板')">6楼</strong>
													<em onclick="$('postmessage_493659').className='t_bigfont'">大</em>							<em onclick="$('postmessage_493659').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_493659').className='t_smallfont'">小</em>												发表于 2010-2-26 11:18&nbsp;																					<a href="viewthread.php?tid=38558&amp;page=1&amp;authorid=143" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_5"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_5"></div><div id="ad_thread4_5"></div>
						
						
																											<div id="postmessage_493659" class="t_msgfont">標題黨。不評論。閃人。</div>

							
							
							
							
															<div id="post_rate_div_493659"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo493659_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=143" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=38558&amp;repquote=493659&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 493659)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_5"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid493664" summary="pid493664" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=9517" target="_blank" id="userinfo493664" class="dropmenu" onmouseover="showMenu(this.id)">老西</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=9517">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=9517&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_6" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum493664" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=38558&page=1#pid493664', '话题链接已经复制到剪贴板')">7楼</strong>
													<em onclick="$('postmessage_493664').className='t_bigfont'">大</em>							<em onclick="$('postmessage_493664').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_493664').className='t_smallfont'">小</em>												发表于 2010-2-26 11:21&nbsp;																					<a href="viewthread.php?tid=38558&amp;page=1&amp;authorid=9517" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_6"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_6"></div><div id="ad_thread4_6"></div>
						
						
																											<div id="postmessage_493664" class="t_msgfont">有吗？？<br />
绑定国内手机？？？<br />
不明白楼主讲什么··········</div>

							
							
							
							
															<div id="post_rate_div_493664"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo493664_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=9517" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=38558&amp;repquote=493664&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 493664)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_6"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid493674" summary="pid493674" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=4668" target="_blank" id="userinfo493674" class="dropmenu" onmouseover="showMenu(this.id)">马尼超</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=4668">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=4668&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_7" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum493674" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=38558&page=1#pid493674', '话题链接已经复制到剪贴板')">8楼</strong>
													<em onclick="$('postmessage_493674').className='t_bigfont'">大</em>							<em onclick="$('postmessage_493674').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_493674').className='t_smallfont'">小</em>												发表于 2010-2-26 11:31&nbsp;																					<a href="viewthread.php?tid=38558&amp;page=1&amp;authorid=4668" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_7"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_7"></div><div id="ad_thread4_7"></div>
						
						
																											<div id="postmessage_493674" class="t_msgfont">gmail什么时候绑定手机了？<br />
楼主梦游吗？？？</div>

							
							
							
							
															<div id="post_rate_div_493674"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo493674_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=4668" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=38558&amp;repquote=493674&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 493674)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_7"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid493721" summary="pid493721" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=11761" target="_blank" id="userinfo493721" class="dropmenu" onmouseover="showMenu(this.id)">卞学道</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">@ahxxm </p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=11761">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=11761&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_8" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum493721" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=38558&page=1#pid493721', '话题链接已经复制到剪贴板')">9楼</strong>
													<em onclick="$('postmessage_493721').className='t_bigfont'">大</em>							<em onclick="$('postmessage_493721').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_493721').className='t_smallfont'">小</em>												发表于 2010-2-26 11:58&nbsp;																					<a href="viewthread.php?tid=38558&amp;page=1&amp;authorid=11761" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_8"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_8"></div><div id="ad_thread4_8"></div>
						
						
																											<div id="postmessage_493721" class="t_msgfont">E680 A780 A1200？</div>

							
							
							
							
															<div id="post_rate_div_493721"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo493721_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://ahxxm.blogspot.com" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=11761" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=38558&amp;repquote=493721&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 493721)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_8"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid499285" summary="pid499285" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12534" target="_blank" id="userinfo499285" class="dropmenu" onmouseover="showMenu(this.id)">yuqilin7</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12534">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12534&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_9" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum499285" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=38558&page=1#pid499285', '话题链接已经复制到剪贴板')">10楼</strong>
													<em onclick="$('postmessage_499285').className='t_bigfont'">大</em>							<em onclick="$('postmessage_499285').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_499285').className='t_smallfont'">小</em>												发表于 2010-3-2 19:27&nbsp;																					<a href="viewthread.php?tid=38558&amp;page=1&amp;authorid=12534" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_9"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_9"></div><div id="ad_thread4_9"></div>
						
						
																											<div id="postmessage_499285" class="t_msgfont">那你不绑定手机号码就是了<br />
这个绑定手机号码其实是google针对国内用户提供的一个找回gmail帐号密码的功能，我是从不用这个功能的。密码丢失了大不了再注册一个！</div>

							
							
							
							
															<div id="post_rate_div_499285"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo499285_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=12534" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=38558&amp;repquote=499285&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 499285)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_9"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid499295" summary="pid499295" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=9997" target="_blank" id="userinfo499295" class="dropmenu" onmouseover="showMenu(this.id)">河蟹好吃</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=9997">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=9997&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_10" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum499295" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=38558&page=1#pid499295', '话题链接已经复制到剪贴板')">11楼</strong>
													<em onclick="$('postmessage_499295').className='t_bigfont'">大</em>							<em onclick="$('postmessage_499295').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_499295').className='t_smallfont'">小</em>												发表于 2010-3-2 19:32&nbsp;																					<a href="viewthread.php?tid=38558&amp;page=1&amp;authorid=9997" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_10"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_10"></div><div id="ad_thread4_10"></div>
						
						
																											<div id="postmessage_499295" class="t_msgfont">我绑的是美国号码</div>

							
							
							
							
															<div id="post_rate_div_499295"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo499295_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://hiricx.com" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=9997" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=38558&amp;repquote=499295&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 499295)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_10"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid502359" summary="pid502359" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10661" target="_blank" id="userinfo502359" class="dropmenu" onmouseover="showMenu(this.id)">默雨游人</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">twitter：@dongwenqiang</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10661">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10661&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_11" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum502359" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=38558&page=1#pid502359', '话题链接已经复制到剪贴板')">12楼</strong>
													<em onclick="$('postmessage_502359').className='t_bigfont'">大</em>							<em onclick="$('postmessage_502359').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_502359').className='t_smallfont'">小</em>												发表于 2010-3-4 17:52&nbsp;																					<a href="viewthread.php?tid=38558&amp;page=1&amp;authorid=10661" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_11"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_11"></div><div id="ad_thread4_11"></div>
						
						
																											<div id="postmessage_502359" class="t_msgfont">没绑定。但以前有的人注册需要手机号，不知道是咋回事。</div>

							
							
							
							
															<div id="post_rate_div_502359"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo502359_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=10661" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=38558&amp;repquote=502359&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 502359)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_11"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid502393" summary="pid502393" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7968" target="_blank" id="userinfo502393" class="dropmenu" onmouseover="showMenu(this.id)">singlefabulous</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7968">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7968&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_12" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum502393" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=38558&page=1#pid502393', '话题链接已经复制到剪贴板')">13楼</strong>
													<em onclick="$('postmessage_502393').className='t_bigfont'">大</em>							<em onclick="$('postmessage_502393').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_502393').className='t_smallfont'">小</em>												发表于 2010-3-4 18:28&nbsp;																					<a href="viewthread.php?tid=38558&amp;page=1&amp;authorid=7968" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_12"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_12"></div><div id="ad_thread4_12"></div>
						
						
																											<div id="postmessage_502393" class="t_msgfont">没绑号码。。。。。。。。。</div>

							
							
							
							
															<div id="post_rate_div_502393"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo502393_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=7968" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=38558&amp;repquote=502393&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 502393)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_12"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid503560" summary="pid503560" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10671" target="_blank" id="userinfo503560" class="dropmenu" onmouseover="showMenu(this.id)">totozhu</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10671">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10671&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_13" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum503560" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=38558&page=1#pid503560', '话题链接已经复制到剪贴板')">14楼</strong>
													<em onclick="$('postmessage_503560').className='t_bigfont'">大</em>							<em onclick="$('postmessage_503560').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_503560').className='t_smallfont'">小</em>												发表于 2010-3-5 13:12&nbsp;																					<a href="viewthread.php?tid=38558&amp;page=1&amp;authorid=10671" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_13"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_13"></div><div id="ad_thread4_13"></div>
						
						
																											<div id="postmessage_503560" class="t_msgfont">绑定手机做什么</div>

							
							
							
							
															<div id="post_rate_div_503560"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo503560_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=10671" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=38558&amp;repquote=503560&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 503560)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_13"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid504309" summary="pid504309" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2213" target="_blank" id="userinfo504309" class="dropmenu" onmouseover="showMenu(this.id)">核子力量</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">Twitter.com/hzpower</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2213">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2213&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_14" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum504309" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=38558&page=1#pid504309', '话题链接已经复制到剪贴板')">15楼</strong>
													<em onclick="$('postmessage_504309').className='t_bigfont'">大</em>							<em onclick="$('postmessage_504309').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_504309').className='t_smallfont'">小</em>												发表于 2010-3-5 19:40&nbsp;																					<a href="viewthread.php?tid=38558&amp;page=1&amp;authorid=2213" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_14"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_14"></div><div id="ad_thread4_14"></div>
						
						
																											<div id="postmessage_504309" class="t_msgfont">后来注册的一般都绑定了，不用手机激活就不能用</div>

							
							
							
							
															<div id="post_rate_div_504309"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo504309_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://twitter.com/hzpower" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=2213" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=38558&amp;repquote=504309&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 504309)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_14"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid507905" summary="pid507905" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12201" target="_blank" id="userinfo507905" class="dropmenu" onmouseover="showMenu(this.id)">吃白饭先生</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12201">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12201&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_15" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum507905" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=38558&page=1#pid507905', '话题链接已经复制到剪贴板')">16楼</strong>
													<em onclick="$('postmessage_507905').className='t_bigfont'">大</em>							<em onclick="$('postmessage_507905').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_507905').className='t_smallfont'">小</em>												发表于 2010-3-8 13:46&nbsp;																					<a href="viewthread.php?tid=38558&amp;page=1&amp;authorid=12201" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_15"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_15"></div><div id="ad_thread4_15"></div>
						
						
																											<div id="postmessage_507905" class="t_msgfont">恩，gmail以前注册时是不需要手机绑定的，好像是去年的某月开始，要是用中文页面注册，就要绑定手机号。</div>

							
							
							
							
															<div id="post_rate_div_507905"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo507905_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=12201" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=38558&amp;repquote=507905&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 507905)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_15"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid507911" summary="pid507911" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7002" target="_blank" id="userinfo507911" class="dropmenu" onmouseover="showMenu(this.id)">luugoo</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">拖延心理学：向与生俱来的行为顽症宣战】https://1984bbs.com/viewthread.php?tid=60185</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7002">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7002&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_16" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum507911" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=38558&page=1#pid507911', '话题链接已经复制到剪贴板')">17楼</strong>
													<em onclick="$('postmessage_507911').className='t_bigfont'">大</em>							<em onclick="$('postmessage_507911').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_507911').className='t_smallfont'">小</em>												发表于 2010-3-8 13:49&nbsp;																					<a href="viewthread.php?tid=38558&amp;page=1&amp;authorid=7002" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_16"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_16"></div><div id="ad_thread4_16"></div>
						
						
																											<div id="postmessage_507911" class="t_msgfont">没绑定这个～<br />
去年注册一新帐号，也没用上手机</div>

							
							
							
							
															<div id="post_rate_div_507911"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo507911_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=7002" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=38558&amp;repquote=507911&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 507911)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_16"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid508260" summary="pid508260" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12577" target="_blank" id="userinfo508260" class="dropmenu" onmouseover="showMenu(this.id)">jqx</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">不明真相的群众</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12577">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12577&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_17" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum508260" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=38558&page=1#pid508260', '话题链接已经复制到剪贴板')">18楼</strong>
													<em onclick="$('postmessage_508260').className='t_bigfont'">大</em>							<em onclick="$('postmessage_508260').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_508260').className='t_smallfont'">小</em>												发表于 2010-3-8 17:52&nbsp;																					<a href="viewthread.php?tid=38558&amp;page=1&amp;authorid=12577" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_17"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_17"></div><div id="ad_thread4_17"></div>
						
						
																											<div id="postmessage_508260" class="t_msgfont">谁没事绑定手机号码呀？！</div>

							
							
							
							
															<div id="post_rate_div_508260"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo508260_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=12577" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=38558&amp;repquote=508260&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 508260)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_17"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid508365" summary="pid508365" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12581" target="_blank" id="userinfo508365" class="dropmenu" onmouseover="showMenu(this.id)">runner</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12581">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12581&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_18" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum508365" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=38558&page=1#pid508365', '话题链接已经复制到剪贴板')">19楼</strong>
													<em onclick="$('postmessage_508365').className='t_bigfont'">大</em>							<em onclick="$('postmessage_508365').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_508365').className='t_smallfont'">小</em>												发表于 2010-3-8 19:37&nbsp;																					<a href="viewthread.php?tid=38558&amp;page=1&amp;authorid=12581" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_18"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_18"></div><div id="ad_thread4_18"></div>
						
						
																											<div id="postmessage_508365" class="t_msgfont">这年头，没什么安全的了 ：（</div>

							
							
							
							
															<div id="post_rate_div_508365"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo508365_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=12581" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=38558&amp;repquote=508365&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 508365)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_18"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid508387" summary="pid508387" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=9491" target="_blank" id="userinfo508387" class="dropmenu" onmouseover="showMenu(this.id)">huangsi2001</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=9491">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=9491&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_19" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum508387" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=38558&page=1#pid508387', '话题链接已经复制到剪贴板')">20楼</strong>
													<em onclick="$('postmessage_508387').className='t_bigfont'">大</em>							<em onclick="$('postmessage_508387').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_508387').className='t_smallfont'">小</em>												发表于 2010-3-8 19:57&nbsp;																					<a href="viewthread.php?tid=38558&amp;page=1&amp;authorid=9491" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_19"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_19"></div><div id="ad_thread4_19"></div>
													<h2>没有这回事</h2>
						
						
																											<div id="postmessage_508387" class="t_msgfont">我注册gmail时候，正是闹矛盾的时候，很难登录注册，后来注册成功了，没有什么手机号码一说。<br />
倒是其它免费信箱盯着要手机号，没有手机好绑定，就说不安全，靠他姥姥，绑定手机就安全了？老子也没啥机密，安全不安全就那么回事，何况我不用手机，有一个，但号码我自己也记不清了。</div>

							
							
							
							
															<div id="post_rate_div_508387"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo508387_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=9491" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=38558&amp;repquote=508387&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 508387)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_19"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid508554" summary="pid508554" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10000" target="_blank" id="userinfo508554" class="dropmenu" onmouseover="showMenu(this.id)">vovz</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10000">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10000&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_20" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum508554" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=38558&page=1#pid508554', '话题链接已经复制到剪贴板')">21楼</strong>
													<em onclick="$('postmessage_508554').className='t_bigfont'">大</em>							<em onclick="$('postmessage_508554').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_508554').className='t_smallfont'">小</em>												发表于 2010-3-8 22:07&nbsp;																					<a href="viewthread.php?tid=38558&amp;page=1&amp;authorid=10000" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_20"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_20"></div><div id="ad_thread4_20"></div>
						
						
																											<div id="postmessage_508554" class="t_msgfont">一般都不会发到手机上的吧。。Ｇｍａｉｌ还是挺安全的</div>

							
							
							
							
															<div id="post_rate_div_508554"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo508554_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=10000" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=38558&amp;repquote=508554&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 508554)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_20"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid515100" summary="pid515100" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12612" target="_blank" id="userinfo515100" class="dropmenu" onmouseover="showMenu(this.id)">brokenmouse</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12612">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12612&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_21" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum515100" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=38558&page=1#pid515100', '话题链接已经复制到剪贴板')">22楼</strong>
													<em onclick="$('postmessage_515100').className='t_bigfont'">大</em>							<em onclick="$('postmessage_515100').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_515100').className='t_smallfont'">小</em>												发表于 2010-3-13 15:30&nbsp;																					<a href="viewthread.php?tid=38558&amp;page=1&amp;authorid=12612" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_21"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_21"></div><div id="ad_thread4_21"></div>
						
						
																											<div id="postmessage_515100" class="t_msgfont">你可以绑定你的附帐户的Google Voice号码</div>

							
							
							
							
															<div id="post_rate_div_515100"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo515100_menu" style="display: none;">
										<div class="imicons">
												<a href="http://wpa.qq.com/msgrd?V=1&amp;Uin=525763&amp;Site=1984bbs.com&amp;Menu=yes" target="_blank"><img src="images/default/qq.gif" alt="QQ" /></a>																							</div>
										<dl></dl>
											<p><a href="http://www.iliuzhen.com" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=12612" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=38558&amp;repquote=515100&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 515100)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_21"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid516532" summary="pid516532" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 <a name="lastpost"></a>					<cite>											<a href="space.php?uid=9863" target="_blank" id="userinfo516532" class="dropmenu" onmouseover="showMenu(this.id)">kysoft</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">fuck gfw</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=9863">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=9863&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_22" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum516532" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=38558&page=1#pid516532', '话题链接已经复制到剪贴板')">23楼</strong>
													<em onclick="$('postmessage_516532').className='t_bigfont'">大</em>							<em onclick="$('postmessage_516532').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_516532').className='t_smallfont'">小</em>												发表于 2010-3-14 21:37&nbsp;																					<a href="viewthread.php?tid=38558&amp;page=1&amp;authorid=9863" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_22"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_22"></div><div id="ad_thread4_22"></div>
						
						
																											<div id="postmessage_516532" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>老西</i> 于 2010-2-26 11:21 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=493664&amp;ptid=38558" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
有吗？？<br />
绑定国内手机？？？<br />
不明白楼主讲什么·········· </blockquote></div>现在注册Gmail需要短信验证</div>

							
							
							
							
															<div id="post_rate_div_516532"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo516532_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=9863" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=38558&amp;repquote=516532&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 516532)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_22"></div>				</div>
			</td>
		</tr>
		</table>
		</div>
</form>





<div class="pages_btns">
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=38558&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=38558&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
				<span class="postbtn" id="newspecialtmp" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=38558&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

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

	<form method="post" id="postform" action="post.php?action=reply&amp;fid=26&amp;tid=38558&amp;extra=&amp;replysubmit=yes" onSubmit="return validate(this)">
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
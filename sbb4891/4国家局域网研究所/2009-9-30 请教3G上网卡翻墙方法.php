<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<title>请教3G上网卡翻墙方法 - 国家局域网研究所 -  1984bbs.com </title>
<meta name="keywords" content="" />
<meta name="MSSmartTagsPreventParsing" content="True" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<link rel="archives" title="1984bbs.com" href="https://1984bbs.com/archiver/" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_viewthread.css" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_common.css" />
<script type="text/javascript">
	var discuz_uid = 13019;var IMGDIR = 'images/default';var attackevasive = '0';var gid = 0;var STYLEID = '1';
	gid = parseInt('3');var fid = parseInt('26');var tid = parseInt('23970');
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
			<p><a href="index.php" id="forumlist" onmouseover="showMenu(this.id)" class="dropmenu">1984bbs.com</a> &raquo; <a href="forumdisplay.php?fid=26">国家局域网研究所</a> &raquo; 请教3G上网卡翻墙方法</p>
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
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=23970&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=23970&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
				<span class="postbtn" id="newspecial" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=23970&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

	<ul class="popupmenu_popup newspecialmenu" id="newspecial_menu" style="display: none">
		<li><a href="post.php?action=newthread&amp;fid=26&amp;extra=">发新话题</a></li>
		<li class="poll"><a href="post.php?action=newthread&amp;fid=26&amp;extra=&amp;special=1">发布投票</a></li>													</ul>

<form method="post" name="modactions">
	<input type="hidden" name="formhash" value="823c9fa2" />
	<div class="mainbox viewthread">
		<span class="headactions">
					<a href="my.php?item=favorites&amp;tid=23970" id="ajax_favorite" onclick="ajaxmenu(event, this.id, 3000, 0)">收藏</a>
			<a href="my.php?item=subscriptions&amp;subadd=23970" id="ajax_subscription" onclick="ajaxmenu(event, this.id, 3000, null, 0)">订阅</a>
			<a href="misc.php?action=emailfriend&amp;tid=23970" id="emailfriend" onclick="ajaxmenu(event, this.id, 9000000, null, 0)">推荐</a>
				<a href="viewthread.php?action=printable&amp;tid=23970" target="_blank" class="notabs">打印</a>
				</span>
		<h1>请教3G上网卡翻墙方法		</h1>
							<table id="pid265288" summary="pid265288" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7" target="_blank" id="userinfo265288" class="dropmenu" onmouseover="showMenu(this.id)">张书记</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">http://twitter.com/SecretaryZhang</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_0" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum265288" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=23970&page=1#pid265288', '话题链接已经复制到剪贴板')">1楼</strong>
													<em onclick="$('postmessage_265288').className='t_bigfont'">大</em>							<em onclick="$('postmessage_265288').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_265288').className='t_smallfont'">小</em>												发表于 2009-9-30 21:08&nbsp;																					<a href="viewthread.php?tid=23970&amp;page=1&amp;authorid=7" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_0"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_0"></div><div id="ad_thread4_0"></div>
													<h2>请教3G上网卡翻墙方法</h2>
						
						
																											<div id="postmessage_265288" class="t_msgfont">注：3G上网卡（连笔记本的），不是手机……<br />
<br />
用什么翻墙比较好。VPN好像不行。</div>

							
							
							
							
															<div id="post_rate_div_265288"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo265288_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=7" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=23970&amp;repquote=265288&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 265288)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_0"></div>				</div>
			</td>
		</tr>
		</table>
		</div><div class="ad_column" id="ad_interthread"><a href="/viewthread.php?tid=54699" target="_blank" style="color:red;">1984bbs是一个非营利项目，它需要您的捐助！</font></a>		</div>
	<div class="mainbox viewthread">
			<table id="pid266384" summary="pid266384" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=4211" target="_blank" id="userinfo266384" class="dropmenu" onmouseover="showMenu(this.id)">躲猫猫粉丝</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=4211">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=4211&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_1" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum266384" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=23970&page=1#pid266384', '话题链接已经复制到剪贴板')">2楼</strong>
													<em onclick="$('postmessage_266384').className='t_bigfont'">大</em>							<em onclick="$('postmessage_266384').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_266384').className='t_smallfont'">小</em>												发表于 2009-10-1 12:40&nbsp;																					<a href="viewthread.php?tid=23970&amp;page=1&amp;authorid=4211" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_1"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_1"></div><div id="ad_thread4_1"></div>
						
						
																											<div id="postmessage_266384" class="t_msgfont">沙书记个发，同求！</div>

							
							
							
							
															<div id="post_rate_div_266384"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo266384_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=4211" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=23970&amp;repquote=266384&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 266384)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_1"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid266435" summary="pid266435" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8985" target="_blank" id="userinfo266435" class="dropmenu" onmouseover="showMenu(this.id)">xiaoming</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8985">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8985&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_2" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum266435" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=23970&page=1#pid266435', '话题链接已经复制到剪贴板')">3楼</strong>
													<em onclick="$('postmessage_266435').className='t_bigfont'">大</em>							<em onclick="$('postmessage_266435').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_266435').className='t_smallfont'">小</em>												发表于 2009-10-1 13:18&nbsp;																					<a href="viewthread.php?tid=23970&amp;page=1&amp;authorid=8985" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_2"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_2"></div><div id="ad_thread4_2"></div>
						
						
																											<div id="postmessage_266435" class="t_msgfont">3g +笔记本+ssh&nbsp;&nbsp;和adsl一样上。</div>

							
							
							
							
															<div id="post_rate_div_266435"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo266435_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=8985" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=23970&amp;repquote=266435&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 266435)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_2"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid266439" summary="pid266439" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1675" target="_blank" id="userinfo266439" class="dropmenu" onmouseover="showMenu(this.id)">b7t7</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1675">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1675&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_3" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum266439" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=23970&page=1#pid266439', '话题链接已经复制到剪贴板')">4楼</strong>
													<em onclick="$('postmessage_266439').className='t_bigfont'">大</em>							<em onclick="$('postmessage_266439').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_266439').className='t_smallfont'">小</em>												发表于 2009-10-1 13:21&nbsp;																					<a href="viewthread.php?tid=23970&amp;page=1&amp;authorid=1675" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_3"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_3"></div><div id="ad_thread4_3"></div>
						
						
																											<div id="postmessage_266439" class="t_msgfont">都一样吧</div>

							
							
							
							
															<div id="post_rate_div_266439"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo266439_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1675" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=23970&amp;repquote=266439&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 266439)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_3"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid266455" summary="pid266455" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8981" target="_blank" id="userinfo266455" class="dropmenu" onmouseover="showMenu(this.id)">bluekevin</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">屁民</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8981">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8981&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_4" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum266455" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=23970&page=1#pid266455', '话题链接已经复制到剪贴板')">5楼</strong>
													<em onclick="$('postmessage_266455').className='t_bigfont'">大</em>							<em onclick="$('postmessage_266455').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_266455').className='t_smallfont'">小</em>												发表于 2009-10-1 13:27&nbsp;																					<a href="viewthread.php?tid=23970&amp;page=1&amp;authorid=8981" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_4"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_4"></div><div id="ad_thread4_4"></div>
						
						
																											<div id="postmessage_266455" class="t_msgfont">3L 正解~</div>

							
							
							
							
															<div id="post_rate_div_266455"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo266455_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=8981" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=23970&amp;repquote=266455&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 266455)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_4"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid271769" summary="pid271769" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2154" target="_blank" id="userinfo271769" class="dropmenu" onmouseover="showMenu(this.id)">伯通</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">少壮不努力 长大搞IT</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2154">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2154&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_5" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum271769" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=23970&page=1#pid271769', '话题链接已经复制到剪贴板')">6楼</strong>
													<em onclick="$('postmessage_271769').className='t_bigfont'">大</em>							<em onclick="$('postmessage_271769').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_271769').className='t_smallfont'">小</em>												发表于 2009-10-6 16:01&nbsp;																					<a href="viewthread.php?tid=23970&amp;page=1&amp;authorid=2154" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_5"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_5"></div><div id="ad_thread4_5"></div>
						
						
																											<div id="postmessage_271769" class="t_msgfont">看来大家都用上3G了</div>

							
							
							
							
															<div id="post_rate_div_271769"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo271769_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=2154" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=23970&amp;repquote=271769&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 271769)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_5"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid273851" summary="pid273851" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6375" target="_blank" id="userinfo273851" class="dropmenu" onmouseover="showMenu(this.id)">zsfzxxx</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">你知道什么是潮吹吗</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6375">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6375&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_6" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum273851" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=23970&page=1#pid273851', '话题链接已经复制到剪贴板')">7楼</strong>
													<em onclick="$('postmessage_273851').className='t_bigfont'">大</em>							<em onclick="$('postmessage_273851').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_273851').className='t_smallfont'">小</em>												发表于 2009-10-8 15:23&nbsp;																					<a href="viewthread.php?tid=23970&amp;page=1&amp;authorid=6375" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_6"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_6"></div><div id="ad_thread4_6"></div>
						
						
																											<div id="postmessage_273851" class="t_msgfont">3G的延迟还是一个问题。。。。。<br />
ping 美国的一家游戏服务器延迟500+。。。什么都干不了<br />
网通250-300左右。丢失较小，0-1%<br />
电信200左右。丢失较大，0-3%</div>

							
							
							
							
															<div id="post_rate_div_273851"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo273851_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=6375" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=23970&amp;repquote=273851&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 273851)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_6"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid274190" summary="pid274190" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8530" target="_blank" id="userinfo274190" class="dropmenu" onmouseover="showMenu(this.id)">lwjef</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">twitter账号 lwjef</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8530">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8530&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_7" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum274190" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=23970&page=1#pid274190', '话题链接已经复制到剪贴板')">8楼</strong>
													<em onclick="$('postmessage_274190').className='t_bigfont'">大</em>							<em onclick="$('postmessage_274190').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_274190').className='t_smallfont'">小</em>												发表于 2009-10-8 21:14&nbsp;																					<a href="viewthread.php?tid=23970&amp;page=1&amp;authorid=8530" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_7"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_7"></div><div id="ad_thread4_7"></div>
						
						
																											<div id="postmessage_274190" class="t_msgfont">那啥？？难道不一样？？？晕~~~</div>

							
							
							
							
															<div id="post_rate_div_274190"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo274190_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=8530" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=23970&amp;repquote=274190&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 274190)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_7"></div>				</div>
			</td>
		</tr>
		</table>
		</div>
</form>





<div class="pages_btns">
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=23970&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=23970&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
				<span class="postbtn" id="newspecialtmp" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=23970&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

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

	<form method="post" id="postform" action="post.php?action=reply&amp;fid=26&amp;tid=23970&amp;extra=&amp;replysubmit=yes" onSubmit="return validate(this)">
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
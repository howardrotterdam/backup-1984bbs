<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<title>一个基于GAE的代理客户端，速度很快 - 国家局域网研究所 -  1984bbs.com </title>
<meta name="keywords" content="" />
<meta name="MSSmartTagsPreventParsing" content="True" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<link rel="archives" title="1984bbs.com" href="https://1984bbs.com/archiver/" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_viewthread.css" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_common.css" />
<script type="text/javascript">
	var discuz_uid = 13019;var IMGDIR = 'images/default';var attackevasive = '0';var gid = 0;var STYLEID = '1';
	gid = parseInt('3');var fid = parseInt('26');var tid = parseInt('42525');
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
			<p><a href="index.php" id="forumlist" onmouseover="showMenu(this.id)" class="dropmenu">1984bbs.com</a> &raquo; <a href="forumdisplay.php?fid=26">国家局域网研究所</a> &raquo; 一个基于GAE的代理客户端，速度很快</p>
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
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=42525&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=42525&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
				<span class="postbtn" id="newspecial" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=42525&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

	<ul class="popupmenu_popup newspecialmenu" id="newspecial_menu" style="display: none">
		<li><a href="post.php?action=newthread&amp;fid=26&amp;extra=">发新话题</a></li>
		<li class="poll"><a href="post.php?action=newthread&amp;fid=26&amp;extra=&amp;special=1">发布投票</a></li>													</ul>

<form method="post" name="modactions">
	<input type="hidden" name="formhash" value="823c9fa2" />
	<div class="mainbox viewthread">
		<span class="headactions">
					<a href="my.php?item=favorites&amp;tid=42525" id="ajax_favorite" onclick="ajaxmenu(event, this.id, 3000, 0)">收藏</a>
			<a href="my.php?item=subscriptions&amp;subadd=42525" id="ajax_subscription" onclick="ajaxmenu(event, this.id, 3000, null, 0)">订阅</a>
			<a href="misc.php?action=emailfriend&amp;tid=42525" id="emailfriend" onclick="ajaxmenu(event, this.id, 9000000, null, 0)">推荐</a>
				<a href="viewthread.php?action=printable&amp;tid=42525" target="_blank" class="notabs">打印</a>
				</span>
		<h1>一个基于GAE的代理客户端，速度很快		</h1>
							<table id="pid553953" summary="pid553953" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12808" target="_blank" id="userinfo553953" class="dropmenu" onmouseover="showMenu(this.id)">meselson</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">独立之精神，自由之思想</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12808">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12808&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_0" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum553953" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=42525&page=1#pid553953', '话题链接已经复制到剪贴板')">1楼</strong>
													<em onclick="$('postmessage_553953').className='t_bigfont'">大</em>							<em onclick="$('postmessage_553953').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_553953').className='t_smallfont'">小</em>												发表于 2010-4-8 11:30&nbsp;																					<a href="viewthread.php?tid=42525&amp;page=1&amp;authorid=12808" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_0"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_0"></div><div id="ad_thread4_0"></div>
													<h2>一个基于GAE的代理客户端，速度很快</h2>
						
						
																											<div id="postmessage_553953" class="t_msgfont">一个基于GAE的代理客户端，速度很快，欢迎使用！<br />
<a href="http://www.dbank.com/download.action?t=40&amp;k=MjE2NzYzODU=&amp;pcode=LCw0MTY1MjIsNDE2NTIy&amp;rnd=4" target="_blank">http://www.dbank.com/download.ac ... sNDE2NTIy&amp;rnd=4</a><br />
<br />
[<i> 本帖最后由 meselson 于 2010-5-1 21:09 编辑 </i>]</div>

							
							
							
							
															<div id="post_rate_div_553953"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo553953_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=12808" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=42525&amp;repquote=553953&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 553953)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_0"></div>				</div>
			</td>
		</tr>
		</table>
		</div><div class="ad_column" id="ad_interthread"><a href="/viewthread.php?tid=54699" target="_blank" style="color:red;">1984bbs是一个非营利项目，它需要您的捐助！</font></a>		</div>
	<div class="mainbox viewthread">
			<table id="pid554280" summary="pid554280" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=4964" target="_blank" id="userinfo554280" class="dropmenu" onmouseover="showMenu(this.id)">xifanliang</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">有事请Reply  @xifanliang</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=4964">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=4964&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_1" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum554280" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=42525&page=1#pid554280', '话题链接已经复制到剪贴板')">2楼</strong>
													<em onclick="$('postmessage_554280').className='t_bigfont'">大</em>							<em onclick="$('postmessage_554280').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_554280').className='t_smallfont'">小</em>												发表于 2010-4-8 14:19&nbsp;																					<a href="viewthread.php?tid=42525&amp;page=1&amp;authorid=4964" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_1"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_1"></div><div id="ad_thread4_1"></div>
						
						
																											<div id="postmessage_554280" class="t_msgfont">谢谢。</div>

							
							
							
							
															<div id="post_rate_div_554280"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo554280_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=4964" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=42525&amp;repquote=554280&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 554280)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_1"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid554300" summary="pid554300" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=11745" target="_blank" id="userinfo554300" class="dropmenu" onmouseover="showMenu(this.id)">风中凌乱</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=11745">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=11745&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_2" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum554300" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=42525&page=1#pid554300', '话题链接已经复制到剪贴板')">3楼</strong>
													<em onclick="$('postmessage_554300').className='t_bigfont'">大</em>							<em onclick="$('postmessage_554300').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_554300').className='t_smallfont'">小</em>												发表于 2010-4-8 14:35&nbsp;																					<a href="viewthread.php?tid=42525&amp;page=1&amp;authorid=11745" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_2"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_2"></div><div id="ad_thread4_2"></div>
						
						
																											<div id="postmessage_554300" class="t_msgfont">几百年前的东西了。。。</div>

							
							
							
							
															<div id="post_rate_div_554300"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo554300_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=11745" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=42525&amp;repquote=554300&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 554300)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_2"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid554495" summary="pid554495" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=9979" target="_blank" id="userinfo554495" class="dropmenu" onmouseover="showMenu(this.id)">Prague</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=9979">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=9979&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_3" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum554495" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=42525&page=1#pid554495', '话题链接已经复制到剪贴板')">4楼</strong>
													<em onclick="$('postmessage_554495').className='t_bigfont'">大</em>							<em onclick="$('postmessage_554495').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_554495').className='t_smallfont'">小</em>												发表于 2010-4-8 16:51&nbsp;																					<a href="viewthread.php?tid=42525&amp;page=1&amp;authorid=9979" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_3"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_3"></div><div id="ad_thread4_3"></div>
						
						
																											<div id="postmessage_554495" class="t_msgfont">这个几个月前已经是半残状态了</div>

							
							
							
							
															<div id="post_rate_div_554495"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo554495_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=9979" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=42525&amp;repquote=554495&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 554495)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_3"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid554538" summary="pid554538" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=11761" target="_blank" id="userinfo554538" class="dropmenu" onmouseover="showMenu(this.id)">卞学道</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">@ahxxm </p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=11761">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=11761&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_4" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum554538" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=42525&page=1#pid554538', '话题链接已经复制到剪贴板')">5楼</strong>
													<em onclick="$('postmessage_554538').className='t_bigfont'">大</em>							<em onclick="$('postmessage_554538').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_554538').className='t_smallfont'">小</em>												发表于 2010-4-8 17:13&nbsp;																					<a href="viewthread.php?tid=42525&amp;page=1&amp;authorid=11761" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_4"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_4"></div><div id="ad_thread4_4"></div>
						
						
																											<div id="postmessage_554538" class="t_msgfont">我不在線看youtube，這個速度特别快，够用，一直是首選。。</div>

							
							
							
							
															<div id="post_rate_div_554538"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo554538_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://ahxxm.blogspot.com" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=11761" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=42525&amp;repquote=554538&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 554538)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_4"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid555177" summary="pid555177" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=4964" target="_blank" id="userinfo555177" class="dropmenu" onmouseover="showMenu(this.id)">xifanliang</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">有事请Reply  @xifanliang</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=4964">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=4964&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_5" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum555177" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=42525&page=1#pid555177', '话题链接已经复制到剪贴板')">6楼</strong>
													<em onclick="$('postmessage_555177').className='t_bigfont'">大</em>							<em onclick="$('postmessage_555177').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_555177').className='t_smallfont'">小</em>												发表于 2010-4-8 23:22&nbsp;																					<a href="viewthread.php?tid=42525&amp;page=1&amp;authorid=4964" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_5"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_5"></div><div id="ad_thread4_5"></div>
						
						
																											<div id="postmessage_555177" class="t_msgfont">上推特有时会断掉，奇怪</div>

							
							
							
							
															<div id="post_rate_div_555177"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo555177_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=4964" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=42525&amp;repquote=555177&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 555177)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_5"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid591076" summary="pid591076" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=3887" target="_blank" id="userinfo591076" class="dropmenu" onmouseover="showMenu(this.id)">arboby</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=3887">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=3887&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_6" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum591076" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=42525&page=1#pid591076', '话题链接已经复制到剪贴板')">7楼</strong>
													<em onclick="$('postmessage_591076').className='t_bigfont'">大</em>							<em onclick="$('postmessage_591076').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_591076').className='t_smallfont'">小</em>												发表于 2010-4-30 14:38&nbsp;																					<a href="viewthread.php?tid=42525&amp;page=1&amp;authorid=3887" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_6"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_6"></div><div id="ad_thread4_6"></div>
						
						
																											<div id="postmessage_591076" class="t_msgfont">GAE追悼会开过很久了.痛哭.</div>

							
							
							
							
															<div id="post_rate_div_591076"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo591076_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=3887" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=42525&amp;repquote=591076&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 591076)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_6"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid592300" summary="pid592300" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12457" target="_blank" id="userinfo592300" class="dropmenu" onmouseover="showMenu(this.id)">houman</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12457">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12457&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_7" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum592300" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=42525&page=1#pid592300', '话题链接已经复制到剪贴板')">8楼</strong>
													<em onclick="$('postmessage_592300').className='t_bigfont'">大</em>							<em onclick="$('postmessage_592300').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_592300').className='t_smallfont'">小</em>												发表于 2010-5-1 10:40&nbsp;																					<a href="viewthread.php?tid=42525&amp;page=1&amp;authorid=12457" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_7"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_7"></div><div id="ad_thread4_7"></div>
						
						
																											<div id="postmessage_592300" class="t_msgfont">没有吧，我一直用gae的一个api在手机上上twitter</div>

							
							
							
							
															<div id="post_rate_div_592300"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo592300_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://www.mygamewiki.net" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=12457" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=42525&amp;repquote=592300&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 592300)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_7"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid600574" summary="pid600574" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=13287" target="_blank" id="userinfo600574" class="dropmenu" onmouseover="showMenu(this.id)">babyss92548</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=13287">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=13287&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_8" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum600574" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=42525&page=1#pid600574', '话题链接已经复制到剪贴板')">9楼</strong>
													<em onclick="$('postmessage_600574').className='t_bigfont'">大</em>							<em onclick="$('postmessage_600574').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_600574').className='t_smallfont'">小</em>												发表于 2010-5-6 14:06&nbsp;																					<a href="viewthread.php?tid=42525&amp;page=1&amp;authorid=13287" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_8"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_8"></div><div id="ad_thread4_8"></div>
						
						
																											<div id="postmessage_600574" class="t_msgfont">残废</div>

							
							
							
							
															<div id="post_rate_div_600574"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo600574_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=13287" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=42525&amp;repquote=600574&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 600574)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_8"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid601673" summary="pid601673" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12808" target="_blank" id="userinfo601673" class="dropmenu" onmouseover="showMenu(this.id)">meselson</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">独立之精神，自由之思想</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12808">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12808&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_9" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum601673" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=42525&page=1#pid601673', '话题链接已经复制到剪贴板')">10楼</strong>
													<em onclick="$('postmessage_601673').className='t_bigfont'">大</em>							<em onclick="$('postmessage_601673').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_601673').className='t_smallfont'">小</em>												发表于 2010-5-6 23:13&nbsp;																					<a href="viewthread.php?tid=42525&amp;page=1&amp;authorid=12808" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_9"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_9"></div><div id="ad_thread4_9"></div>
													<h2>回复 9楼 babyss92548 的话题</h2>
						
						
																											<div id="postmessage_601673" class="t_msgfont">怎么能说残废呢？Youtube可看，Twitter可上，Facebook可上，被墙的网站都可上，速度也不慢，哪里残废了呢？</div>

							
							
							
							
															<div id="post_rate_div_601673"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo601673_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=12808" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=42525&amp;repquote=601673&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 601673)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_9"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid603165" summary="pid603165" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6375" target="_blank" id="userinfo603165" class="dropmenu" onmouseover="showMenu(this.id)">zsfzxxx</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">你知道什么是潮吹吗</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6375">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6375&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_10" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum603165" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=42525&page=1#pid603165', '话题链接已经复制到剪贴板')">11楼</strong>
													<em onclick="$('postmessage_603165').className='t_bigfont'">大</em>							<em onclick="$('postmessage_603165').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_603165').className='t_smallfont'">小</em>												发表于 2010-5-7 17:36&nbsp;																					<a href="viewthread.php?tid=42525&amp;page=1&amp;authorid=6375" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_10"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_10"></div><div id="ad_thread4_10"></div>
						
						
																											<div id="postmessage_603165" class="t_msgfont">这东西一直在用，速度不错</div>

							
							
							
							
															<div id="post_rate_div_603165"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo603165_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=6375" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=42525&amp;repquote=603165&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 603165)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_10"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid606498" summary="pid606498" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=13068" target="_blank" id="userinfo606498" class="dropmenu" onmouseover="showMenu(this.id)">虾然蛙然</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">菜老师</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=13068">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=13068&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_11" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum606498" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=42525&page=1#pid606498', '话题链接已经复制到剪贴板')">12楼</strong>
													<em onclick="$('postmessage_606498').className='t_bigfont'">大</em>							<em onclick="$('postmessage_606498').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_606498').className='t_smallfont'">小</em>												发表于 2010-5-9 21:10&nbsp;																					<a href="viewthread.php?tid=42525&amp;page=1&amp;authorid=13068" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_11"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_11"></div><div id="ad_thread4_11"></div>
						
						
																											<div id="postmessage_606498" class="t_msgfont">这个代理对HTTPS的支持不是特别好</div>

							
							
							
							
															<div id="post_rate_div_606498"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo606498_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=13068" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=42525&amp;repquote=606498&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 606498)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_11"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid606509" summary="pid606509" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=13008" target="_blank" id="userinfo606509" class="dropmenu" onmouseover="showMenu(this.id)">lind</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=13008">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=13008&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_12" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum606509" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=42525&page=1#pid606509', '话题链接已经复制到剪贴板')">13楼</strong>
													<em onclick="$('postmessage_606509').className='t_bigfont'">大</em>							<em onclick="$('postmessage_606509').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_606509').className='t_smallfont'">小</em>												发表于 2010-5-9 21:17&nbsp;																					<a href="viewthread.php?tid=42525&amp;page=1&amp;authorid=13008" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_12"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_12"></div><div id="ad_thread4_12"></div>
						
						
																											<div id="postmessage_606509" class="t_msgfont">不要再残害GAE了</div>

							
							
							
							
															<div id="post_rate_div_606509"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo606509_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=13008" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=42525&amp;repquote=606509&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 606509)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_12"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid608851" summary="pid608851" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=11564" target="_blank" id="userinfo608851" class="dropmenu" onmouseover="showMenu(this.id)">myeii3</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=11564">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=11564&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_13" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum608851" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=42525&page=1#pid608851', '话题链接已经复制到剪贴板')">14楼</strong>
													<em onclick="$('postmessage_608851').className='t_bigfont'">大</em>							<em onclick="$('postmessage_608851').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_608851').className='t_smallfont'">小</em>												发表于 2010-5-11 08:38&nbsp;																					<a href="viewthread.php?tid=42525&amp;page=1&amp;authorid=11564" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_13"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_13"></div><div id="ad_thread4_13"></div>
						
						
																											<div id="postmessage_608851" class="t_msgfont">最近用gap打开的页面全部是空白一片…求高手…</div>

							
							
							
							
															<div id="post_rate_div_608851"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo608851_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=11564" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=42525&amp;repquote=608851&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 608851)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_13"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid616110" summary="pid616110" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 <a name="lastpost"></a>					<cite>											<a href="space.php?uid=13657" target="_blank" id="userinfo616110" class="dropmenu" onmouseover="showMenu(this.id)">朱较瘦</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=13657">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=13657&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_14" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum616110" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=42525&page=1#pid616110', '话题链接已经复制到剪贴板')">15楼</strong>
													<em onclick="$('postmessage_616110').className='t_bigfont'">大</em>							<em onclick="$('postmessage_616110').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_616110').className='t_smallfont'">小</em>												发表于 2010-5-15 00:37&nbsp;																					<a href="viewthread.php?tid=42525&amp;page=1&amp;authorid=13657" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_14"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_14"></div><div id="ad_thread4_14"></div>
						
						
																											<div id="postmessage_616110" class="t_msgfont">还没用过！下载 看看！</div>

							
							
							
							
															<div id="post_rate_div_616110"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo616110_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=13657" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=42525&amp;repquote=616110&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 616110)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_14"></div>				</div>
			</td>
		</tr>
		</table>
		</div>
</form>





<div class="pages_btns">
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=42525&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=42525&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
				<span class="postbtn" id="newspecialtmp" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=42525&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

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

	<form method="post" id="postform" action="post.php?action=reply&amp;fid=26&amp;tid=42525&amp;extra=&amp;replysubmit=yes" onSubmit="return validate(this)">
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
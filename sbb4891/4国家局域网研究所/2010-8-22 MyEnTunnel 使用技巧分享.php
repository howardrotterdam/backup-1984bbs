<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<title>MyEnTunnel 使用技巧分享 - 国家局域网研究所 -  1984bbs.com </title>
<meta name="keywords" content="" />
<meta name="MSSmartTagsPreventParsing" content="True" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<link rel="archives" title="1984bbs.com" href="https://1984bbs.com/archiver/" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_viewthread.css" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_common.css" />
<script type="text/javascript">
	var discuz_uid = 13019;var IMGDIR = 'images/default';var attackevasive = '0';var gid = 0;var STYLEID = '1';
	gid = parseInt('3');var fid = parseInt('26');var tid = parseInt('56199');
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
			<p><a href="index.php" id="forumlist" onmouseover="showMenu(this.id)" class="dropmenu">1984bbs.com</a> &raquo; <a href="forumdisplay.php?fid=26">国家局域网研究所</a> &raquo; MyEnTunnel 使用技巧分享</p>
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
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=56199&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=56199&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
				<span class="postbtn" id="newspecial" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=56199&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

	<ul class="popupmenu_popup newspecialmenu" id="newspecial_menu" style="display: none">
		<li><a href="post.php?action=newthread&amp;fid=26&amp;extra=">发新话题</a></li>
		<li class="poll"><a href="post.php?action=newthread&amp;fid=26&amp;extra=&amp;special=1">发布投票</a></li>													</ul>

<form method="post" name="modactions">
	<input type="hidden" name="formhash" value="823c9fa2" />
	<div class="mainbox viewthread">
		<span class="headactions">
					<a href="my.php?item=favorites&amp;tid=56199" id="ajax_favorite" onclick="ajaxmenu(event, this.id, 3000, 0)">收藏</a>
			<a href="my.php?item=subscriptions&amp;subadd=56199" id="ajax_subscription" onclick="ajaxmenu(event, this.id, 3000, null, 0)">订阅</a>
			<a href="misc.php?action=emailfriend&amp;tid=56199" id="emailfriend" onclick="ajaxmenu(event, this.id, 9000000, null, 0)">推荐</a>
				<a href="viewthread.php?action=printable&amp;tid=56199" target="_blank" class="notabs">打印</a>
				</span>
		<h1>MyEnTunnel 使用技巧分享		</h1>
				<ins>
						<a href="misc.php?action=viewthreadmod&amp;tid=56199" title="主题操作记录" target="_blank">本主题由 库存袈裟 于 2010-8-30 16:42 提升</a>								</ins>
							<table id="pid793003" summary="pid793003" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=3047" target="_blank" id="userinfo793003" class="dropmenu" onmouseover="showMenu(this.id)">charmrain</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">建筑民工</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=3047">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=3047&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_0" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum793003" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=56199&page=1#pid793003', '话题链接已经复制到剪贴板')">1楼</strong>
													<em onclick="$('postmessage_793003').className='t_bigfont'">大</em>							<em onclick="$('postmessage_793003').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_793003').className='t_smallfont'">小</em>												发表于 2010-8-22 21:00&nbsp;																					<a href="viewthread.php?tid=56199&amp;page=1&amp;authorid=3047" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_0"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_0"></div><div id="ad_thread4_0"></div>
													<h2>MyEnTunnel 使用技巧分享</h2>
						
						
																											<div id="postmessage_793003" class="t_msgfont">今天使用ssh+autoproxy+FF上网时，突然ssh账号登入不了，显示time out，更换账号后还是不行。<br />
请问这是否是myentunnel的问题。因为这几个月来，使用myentunnel 从未出现上述问题。<br />
<br />
显示如下<br />
[21:10:09 08/22] plink.exe: FATAL ERROR: Server sent disconnect message<br />
[21:10:09 08/22] plink.exe: type 2 (protocol error):<br />
[21:10:09 08/22] plink.exe: &quot;Too many authentication failures for xxxxx&quot;<br />
[21:10:09 08/22] Disconnected</div>

							
							
							
							
															<div id="post_rate_div_793003"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo793003_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=3047" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=56199&amp;repquote=793003&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 793003)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_0"></div>				</div>
			</td>
		</tr>
		</table>
		</div><div class="ad_column" id="ad_interthread"><a href="/viewthread.php?tid=54699" target="_blank" style="color:red;">1984bbs是一个非营利项目，它需要您的捐助！</font></a>		</div>
	<div class="mainbox viewthread">
			<table id="pid793071" summary="pid793071" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=464" target="_blank" id="userinfo793071" class="dropmenu" onmouseover="showMenu(this.id)">Phillip</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">路边社特邀围观群众</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=464">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=464&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_1" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum793071" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=56199&page=1#pid793071', '话题链接已经复制到剪贴板')">2楼</strong>
													<em onclick="$('postmessage_793071').className='t_bigfont'">大</em>							<em onclick="$('postmessage_793071').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_793071').className='t_smallfont'">小</em>												发表于 2010-8-22 22:02&nbsp;																					<a href="viewthread.php?tid=56199&amp;page=1&amp;authorid=464" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_1"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_1"></div><div id="ad_thread4_1"></div>
						
						
																											<div id="postmessage_793071" class="t_msgfont">是帐号的问题.</div>

							
							
							
							
															<div id="post_rate_div_793071"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo793071_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=464" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=56199&amp;repquote=793071&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 793071)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_1"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid794082" summary="pid794082" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=11493" target="_blank" id="userinfo794082" class="dropmenu" onmouseover="showMenu(this.id)">gzlxd</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">Twitter/@gzlxd</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=11493">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=11493&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_2" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum794082" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=56199&page=1#pid794082', '话题链接已经复制到剪贴板')">3楼</strong>
													<em onclick="$('postmessage_794082').className='t_bigfont'">大</em>							<em onclick="$('postmessage_794082').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_794082').className='t_smallfont'">小</em>												发表于 2010-8-23 17:14&nbsp;																					<a href="viewthread.php?tid=56199&amp;page=1&amp;authorid=11493" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_2"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_2"></div><div id="ad_thread4_2"></div>
						
						
																											<div id="postmessage_794082" class="t_msgfont">楼上正解</div>

							
							
							
							
															<div id="post_rate_div_794082"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo794082_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=11493" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=56199&amp;repquote=794082&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 794082)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_2"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid794125" summary="pid794125" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1960" target="_blank" id="userinfo794125" class="dropmenu" onmouseover="showMenu(this.id)">库存袈裟</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">@bruceku 想象力比知识更重要。</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1960">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1960&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_3" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum794125" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=56199&page=1#pid794125', '话题链接已经复制到剪贴板')">4楼</strong>
													<em onclick="$('postmessage_794125').className='t_bigfont'">大</em>							<em onclick="$('postmessage_794125').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_794125').className='t_smallfont'">小</em>												发表于 2010-8-23 17:41&nbsp;																					<a href="viewthread.php?tid=56199&amp;page=1&amp;authorid=1960" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_3"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_3"></div><div id="ad_thread4_3"></div>
													<h2>回复 1楼 charmrain 的话题</h2>
						
						
																											<div id="postmessage_794125" class="t_msgfont"><a href="http://www.profusehost.net/ipanel/order/index.php?step=3" target="_blank">http://www.profusehost.net/ipanel/order/index.php?step=3</a><br />
试试这家的免空sftp<br />
方法：<a href="https://1984bbs.com/viewthread.php?tid=31667" target="_blank">https://1984bbs.com/viewthread.php?tid=31667</a></div>

							
							
							
							
															<div id="post_rate_div_794125"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo794125_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1960" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=56199&amp;repquote=794125&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 794125)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_3"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid794128" summary="pid794128" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=15617" target="_blank" id="userinfo794128" class="dropmenu" onmouseover="showMenu(this.id)">xiaolee</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">草泥马一匹</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=15617">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=15617&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_4" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum794128" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=56199&page=1#pid794128', '话题链接已经复制到剪贴板')">5楼</strong>
													<em onclick="$('postmessage_794128').className='t_bigfont'">大</em>							<em onclick="$('postmessage_794128').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_794128').className='t_smallfont'">小</em>												发表于 2010-8-23 17:44&nbsp;																					<a href="viewthread.php?tid=56199&amp;page=1&amp;authorid=15617" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_4"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_4"></div><div id="ad_thread4_4"></div>
						
						
																											<div id="postmessage_794128" class="t_msgfont">是账号问题，不是软件问题，我经常遇到。</div>

							
							
							
							
															<div id="post_rate_div_794128"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo794128_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=15617" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=56199&amp;repquote=794128&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 794128)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_4"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid798282" summary="pid798282" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=18137" target="_blank" id="userinfo798282" class="dropmenu" onmouseover="showMenu(this.id)">Aragorn</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">三俗份子</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=18137">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=18137&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_5" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum798282" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=56199&page=1#pid798282', '话题链接已经复制到剪贴板')">6楼</strong>
													<em onclick="$('postmessage_798282').className='t_bigfont'">大</em>							<em onclick="$('postmessage_798282').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_798282').className='t_smallfont'">小</em>												发表于 2010-8-26 14:58&nbsp;																					<a href="viewthread.php?tid=56199&amp;page=1&amp;authorid=18137" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_5"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_5"></div><div id="ad_thread4_5"></div>
						
						
																											<div id="postmessage_798282" class="t_msgfont">myentunnel 应该淘汰掉,推荐个更好的程序给你 Tunnelier</div>

							
							
							
							
															<div id="post_rate_div_798282"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo798282_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=18137" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=56199&amp;repquote=798282&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 798282)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_5"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid798313" summary="pid798313" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=11595" target="_blank" id="userinfo798313" class="dropmenu" onmouseover="showMenu(this.id)">zzug</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=11595">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=11595&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_6" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum798313" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=56199&page=1#pid798313', '话题链接已经复制到剪贴板')">7楼</strong>
													<em onclick="$('postmessage_798313').className='t_bigfont'">大</em>							<em onclick="$('postmessage_798313').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_798313').className='t_smallfont'">小</em>												发表于 2010-8-26 15:20&nbsp;																					<a href="viewthread.php?tid=56199&amp;page=1&amp;authorid=11595" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_6"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_6"></div><div id="ad_thread4_6"></div>
													<h2>回复 6楼 Aragorn 的话题</h2>
						
						
																											<div id="postmessage_798313" class="t_msgfont">myentunnel和Tunnelier各有各的好处，怎么能说myentunnel 应该淘汰掉呢！<br />
myentunnel有中文界面，设置简单明了，是专为代理制作，可以配置多个帐号，使用方便，体积小便于传播……<br />
我感觉对于只用ssh做代理的人来说Tunnelier唯一的优点就是他支持设置代理服务器，不过一般也没人用这个功能！<br />
<br />
[<i> 本帖最后由 zzug 于 2010-8-26 15:26 编辑 </i>]</div>

							
							
							
							
															<div id="post_rate_div_798313"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo798313_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=11595" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=56199&amp;repquote=798313&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 798313)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_6"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid798365" summary="pid798365" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1960" target="_blank" id="userinfo798365" class="dropmenu" onmouseover="showMenu(this.id)">库存袈裟</a></cite>
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
						<strong title="复制话题链接到剪贴板" id="postnum798365" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=56199&page=1#pid798365', '话题链接已经复制到剪贴板')">8楼</strong>
													<em onclick="$('postmessage_798365').className='t_bigfont'">大</em>							<em onclick="$('postmessage_798365').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_798365').className='t_smallfont'">小</em>												发表于 2010-8-26 15:45&nbsp;																					<a href="viewthread.php?tid=56199&amp;page=1&amp;authorid=1960" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_7"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_7"></div><div id="ad_thread4_7"></div>
													<h2>回复 6楼 Aragorn 的话题</h2>
						
						
																											<div id="postmessage_798365" class="t_msgfont">已经讨论个此话题，Tunnelier是管理VPS/DS利器但用于翻墙大材小用，Tunnelier速度优与原版MyEnTunnel的原因是使用了Dev版本的plink，使用dev版本plink的MyEnTunnel代理速度和Tunnelier并无差别，且占内存更小，操作也更简易。何来淘汰之说？</div>

							
							
							
							
															<div id="post_rate_div_798365"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo798365_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1960" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=56199&amp;repquote=798365&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 798365)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_7"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid798366" summary="pid798366" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1960" target="_blank" id="userinfo798366" class="dropmenu" onmouseover="showMenu(this.id)">库存袈裟</a></cite>
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
						<strong title="复制话题链接到剪贴板" id="postnum798366" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=56199&page=1#pid798366', '话题链接已经复制到剪贴板')">9楼</strong>
													<em onclick="$('postmessage_798366').className='t_bigfont'">大</em>							<em onclick="$('postmessage_798366').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_798366').className='t_smallfont'">小</em>												发表于 2010-8-26 15:46&nbsp;																					<a href="viewthread.php?tid=56199&amp;page=1&amp;authorid=1960" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_8"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_8"></div><div id="ad_thread4_8"></div>
													<h2>回复 6楼 Aragorn 的话题</h2>
						
						
																											<div id="postmessage_798366" class="t_msgfont">你可以试试 MyEnTunnel 2010.3.22 优化加速版下载 <a href="http://twiapp.alwaysdata.net/myt.rar" target="_blank">http://twiapp.alwaysdata.net/myt.rar</a></div>

							
							
							
							
															<div id="post_rate_div_798366"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo798366_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1960" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=56199&amp;repquote=798366&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 798366)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_8"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid798706" summary="pid798706" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=18137" target="_blank" id="userinfo798706" class="dropmenu" onmouseover="showMenu(this.id)">Aragorn</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">三俗份子</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=18137">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=18137&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_9" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum798706" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=56199&page=1#pid798706', '话题链接已经复制到剪贴板')">10楼</strong>
													<em onclick="$('postmessage_798706').className='t_bigfont'">大</em>							<em onclick="$('postmessage_798706').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_798706').className='t_smallfont'">小</em>												发表于 2010-8-26 20:11&nbsp;																					<a href="viewthread.php?tid=56199&amp;page=1&amp;authorid=18137" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_9"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_9"></div><div id="ad_thread4_9"></div>
						
						
																											<div id="postmessage_798706" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>库存袈裟</i> 于 2010-8-26 15:46 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=798366&amp;ptid=56199" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
你可以试试 MyEnTunnel 2010.3.22 优化加速版下载 <a href="http://twiapp.alwaysdata.net/myt.rar" target="_blank">http://twiapp.alwaysdata.net/myt.rar</a> </blockquote></div>学习了,只想到Tunnelier功能的丰富性,没考虑到易用性和体积大小.<br />
谢谢推荐.</div>

							
							
							
							
															<div id="post_rate_div_798706"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo798706_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=18137" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=56199&amp;repquote=798706&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 798706)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_9"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid798899" summary="pid798899" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10135" target="_blank" id="userinfo798899" class="dropmenu" onmouseover="showMenu(this.id)">偶佯疯</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">我是个读书人</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10135">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10135&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_10" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum798899" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=56199&page=1#pid798899', '话题链接已经复制到剪贴板')">11楼</strong>
													<em onclick="$('postmessage_798899').className='t_bigfont'">大</em>							<em onclick="$('postmessage_798899').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_798899').className='t_smallfont'">小</em>												发表于 2010-8-26 22:08&nbsp;																					<a href="viewthread.php?tid=56199&amp;page=1&amp;authorid=10135" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_10"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_10"></div><div id="ad_thread4_10"></div>
													<h2>回复 7楼 zzug 的话题</h2>
						
						
																											<div id="postmessage_798899" class="t_msgfont">如何配制多个账户呢？求助</div>

							
							
							
							
															<div id="post_rate_div_798899"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo798899_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://izlf.info" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=10135" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=56199&amp;repquote=798899&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 798899)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_10"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid799197" summary="pid799197" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=18137" target="_blank" id="userinfo799197" class="dropmenu" onmouseover="showMenu(this.id)">Aragorn</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">三俗份子</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=18137">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=18137&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_11" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum799197" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=56199&page=1#pid799197', '话题链接已经复制到剪贴板')">12楼</strong>
													<em onclick="$('postmessage_799197').className='t_bigfont'">大</em>							<em onclick="$('postmessage_799197').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_799197').className='t_smallfont'">小</em>												发表于 2010-8-27 01:07&nbsp;																					<a href="viewthread.php?tid=56199&amp;page=1&amp;authorid=18137" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_11"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_11"></div><div id="ad_thread4_11"></div>
													<h2>MyEnTunnel 使用技巧分享</h2>
						
						
																											<div id="postmessage_799197" class="t_msgfont">得&quot;袈裟大师&quot;提醒,并在nemesis2.qx.net获知,plink development 相比 plink release 0.60而言对大数据的传递要来得快速,更加适合视频流和大文件的传递.请参考<a href="http://nemesis2.qx.net/pages/MyEnTunnel." target="_blank">http://nemesis2.qx.net/pages/MyEnTunnel.</a><br />
<br />
整理打包了截止2010.8.26为止MyEnTunnel官方网址公布的主要两个版本:<br />
<br />
1.International Unicode Development Version 3.5.2 <br />
主要支持多国语言.默认布置了中文语言包,并附带英文语言包english_language.txt,需要英文界面支持的话,请重命名或删除language.txt,并重命名目录中的english_language.txt为language.txt.集成plink Development r8981 <br />
下载 <a href="http://www.box.net/shared/xjv2xv57g0" target="_blank">http://www.box.net/shared/xjv2xv57g0</a> <br />
<br />
2.Stable Release 3.4.2.1 最新稳定版本. <br />
集成plink Development r8981 <br />
下载 <a href="http://www.box.net/shared/2kcbtyde1l" target="_blank">http://www.box.net/shared/2kcbtyde1l</a> <br />
<br />
3.plink2in1.rar中打包了plink Development r8981和plink Release 0.60两个版本的plink,以便随意切换版本,有需要的同学请解压覆盖plink.exe既可. <br />
下载 <a href="http://www.box.net/shared/ob3tb8l5ko" target="_blank">http://www.box.net/shared/ob3tb8l5ko</a> <br />
<br />
MyEnTunnel 和PuTTY参考网址. <br />
<a href="http://nemesis2.qx.net/pages/MyEnTunnel" target="_blank">http://nemesis2.qx.net/pages/MyEnTunnel</a> <br />
<a href="http://www.chiark.greenend.org.uk/~sgtatham/putty/download.html" target="_blank">http://www.chiark.greenend.org.uk/~sgtatham/putty/download.html</a> <br />
<br />
Aragorn 2010.8.26 <br />
Twitter@Arakung<br />
<br />
[<i> 本帖最后由 Aragorn 于 2010-9-18 17:16 编辑 </i>]</div>

							
							
							
							
															<div id="post_rate_div_799197"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo799197_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=18137" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=56199&amp;repquote=799197&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 799197)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_11"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid799634" summary="pid799634" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2271" target="_blank" id="userinfo799634" class="dropmenu" onmouseover="showMenu(this.id)">神仙一溜烟</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">杵君</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2271">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2271&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_12" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum799634" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=56199&page=1#pid799634', '话题链接已经复制到剪贴板')">13楼</strong>
													<em onclick="$('postmessage_799634').className='t_bigfont'">大</em>							<em onclick="$('postmessage_799634').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_799634').className='t_smallfont'">小</em>												发表于 2010-8-27 12:04&nbsp;																					<a href="viewthread.php?tid=56199&amp;page=1&amp;authorid=2271" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_12"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_12"></div><div id="ad_thread4_12"></div>
						
						
																											<div id="postmessage_799634" class="t_msgfont">我觉得另一个反面慢。</div>

							
							
							
							
															<div id="post_rate_div_799634"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo799634_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=2271" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=56199&amp;repquote=799634&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 799634)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_12"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid799701" summary="pid799701" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=11595" target="_blank" id="userinfo799701" class="dropmenu" onmouseover="showMenu(this.id)">zzug</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=11595">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=11595&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_13" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum799701" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=56199&page=1#pid799701', '话题链接已经复制到剪贴板')">14楼</strong>
													<em onclick="$('postmessage_799701').className='t_bigfont'">大</em>							<em onclick="$('postmessage_799701').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_799701').className='t_smallfont'">小</em>												发表于 2010-8-27 12:45&nbsp;																					<a href="viewthread.php?tid=56199&amp;page=1&amp;authorid=11595" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_13"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_13"></div><div id="ad_thread4_13"></div>
						
						
																											<div id="postmessage_799701" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>偶佯疯</i> 于 2010-8-26 22:08 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=798899&amp;ptid=56199" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
如何配制多个账户呢？求助 </blockquote></div>你看看这个 <a href="http://ssh.daili.vc/show-7-1.html" target="_blank">http://ssh.daili.vc/show-7-1.html</a><br />
如果不行你下载 <a href="http://sharesend.com/exx4z" target="_blank">http://sharesend.com/exx4z</a> 试试</div>

							
							
							
							
															<div id="post_rate_div_799701"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo799701_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=11595" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=56199&amp;repquote=799701&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 799701)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_13"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid799823" summary="pid799823" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12463" target="_blank" id="userinfo799823" class="dropmenu" onmouseover="showMenu(this.id)">DaemonEye</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">不河蟹的围观团团员</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12463">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12463&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_14" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum799823" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=56199&page=1#pid799823', '话题链接已经复制到剪贴板')">15楼</strong>
													<em onclick="$('postmessage_799823').className='t_bigfont'">大</em>							<em onclick="$('postmessage_799823').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_799823').className='t_smallfont'">小</em>												发表于 2010-8-27 14:38&nbsp;																					<a href="viewthread.php?tid=56199&amp;page=1&amp;authorid=12463" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_14"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_14"></div><div id="ad_thread4_14"></div>
						
						
																											<div id="postmessage_799823" class="t_msgfont">还是觉得Tunniler比较好 速度够快 效果也不错 英语不是问题 那点内存更不是问题....</div>

							
							
							
							
															<div id="post_rate_div_799823"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo799823_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=12463" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=56199&amp;repquote=799823&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 799823)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_14"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid799935" summary="pid799935" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10135" target="_blank" id="userinfo799935" class="dropmenu" onmouseover="showMenu(this.id)">偶佯疯</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">我是个读书人</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10135">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10135&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_15" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum799935" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=56199&page=1#pid799935', '话题链接已经复制到剪贴板')">16楼</strong>
													<em onclick="$('postmessage_799935').className='t_bigfont'">大</em>							<em onclick="$('postmessage_799935').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_799935').className='t_smallfont'">小</em>												发表于 2010-8-27 16:15&nbsp;																					<a href="viewthread.php?tid=56199&amp;page=1&amp;authorid=10135" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_15"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_15"></div><div id="ad_thread4_15"></div>
													<h2>回复 13楼 zzug 的话题</h2>
						
						
																											<div id="postmessage_799935" class="t_msgfont">谢谢配置成功</div>

							
							
							
							
															<div id="post_rate_div_799935"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo799935_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://izlf.info" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=10135" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=56199&amp;repquote=799935&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 799935)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_15"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid800272" summary="pid800272" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6361" target="_blank" id="userinfo800272" class="dropmenu" onmouseover="showMenu(this.id)">前列县县长</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">后进青年</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6361">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6361&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_16" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum800272" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=56199&page=1#pid800272', '话题链接已经复制到剪贴板')">17楼</strong>
													<em onclick="$('postmessage_800272').className='t_bigfont'">大</em>							<em onclick="$('postmessage_800272').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_800272').className='t_smallfont'">小</em>												发表于 2010-8-27 20:20&nbsp;																					<a href="viewthread.php?tid=56199&amp;page=1&amp;authorid=6361" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_16"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_16"></div><div id="ad_thread4_16"></div>
						
						
																											<div id="postmessage_800272" class="t_msgfont">freessh.us试试这里的账号吧。</div>

							
							
							
							
															<div id="post_rate_div_800272"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo800272_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=6361" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=56199&amp;repquote=800272&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 800272)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_16"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid800626" summary="pid800626" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=17398" target="_blank" id="userinfo800626" class="dropmenu" onmouseover="showMenu(this.id)">xihawangzi</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=17398">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=17398&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_17" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum800626" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=56199&page=1#pid800626', '话题链接已经复制到剪贴板')">18楼</strong>
													<em onclick="$('postmessage_800626').className='t_bigfont'">大</em>							<em onclick="$('postmessage_800626').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_800626').className='t_smallfont'">小</em>												发表于 2010-8-27 22:37&nbsp;																					<a href="viewthread.php?tid=56199&amp;page=1&amp;authorid=17398" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_17"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_17"></div><div id="ad_thread4_17"></div>
						
						
																											<div id="postmessage_800626" class="t_msgfont">是不是每次用myentunnel都得要输入用户名和密码啊？</div>

							
							
							
							
															<div id="post_rate_div_800626"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo800626_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=17398" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=56199&amp;repquote=800626&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 800626)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_17"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid801041" summary="pid801041" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=11595" target="_blank" id="userinfo801041" class="dropmenu" onmouseover="showMenu(this.id)">zzug</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=11595">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=11595&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_18" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum801041" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=56199&page=1#pid801041', '话题链接已经复制到剪贴板')">19楼</strong>
													<em onclick="$('postmessage_801041').className='t_bigfont'">大</em>							<em onclick="$('postmessage_801041').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_801041').className='t_smallfont'">小</em>												发表于 2010-8-28 08:55&nbsp;																					<a href="viewthread.php?tid=56199&amp;page=1&amp;authorid=11595" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_18"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_18"></div><div id="ad_thread4_18"></div>
						
						
																											<div id="postmessage_801041" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>xihawangzi</i> 于 2010-8-27 22:37 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=800626&amp;ptid=56199" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
是不是每次用myentunnel都得要输入用户名和密码啊？ </blockquote></div>不是的myentunnel可以记住用户名和密码只需输入一次以后都不用了！</div>

							
							
							
							
															<div id="post_rate_div_801041"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo801041_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=11595" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=56199&amp;repquote=801041&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 801041)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_18"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid801354" summary="pid801354" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=17398" target="_blank" id="userinfo801354" class="dropmenu" onmouseover="showMenu(this.id)">xihawangzi</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=17398">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=17398&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_19" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum801354" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=56199&page=1#pid801354', '话题链接已经复制到剪贴板')">20楼</strong>
													<em onclick="$('postmessage_801354').className='t_bigfont'">大</em>							<em onclick="$('postmessage_801354').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_801354').className='t_smallfont'">小</em>												发表于 2010-8-28 12:36&nbsp;																					<a href="viewthread.php?tid=56199&amp;page=1&amp;authorid=17398" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_19"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_19"></div><div id="ad_thread4_19"></div>
													<h2>回复 18楼 zzug 的话题</h2>
						
						
																											<div id="postmessage_801354" class="t_msgfont">那为什么下一次打开myentunnel时，服务器名，用户名，密码都是空白的呢，每次都要重新输入啊</div>

							
							
							
							
															<div id="post_rate_div_801354"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo801354_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=17398" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=56199&amp;repquote=801354&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 801354)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_19"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid801366" summary="pid801366" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=11595" target="_blank" id="userinfo801366" class="dropmenu" onmouseover="showMenu(this.id)">zzug</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=11595">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=11595&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_20" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum801366" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=56199&page=1#pid801366', '话题链接已经复制到剪贴板')">21楼</strong>
													<em onclick="$('postmessage_801366').className='t_bigfont'">大</em>							<em onclick="$('postmessage_801366').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_801366').className='t_smallfont'">小</em>												发表于 2010-8-28 12:53&nbsp;																					<a href="viewthread.php?tid=56199&amp;page=1&amp;authorid=11595" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_20"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_20"></div><div id="ad_thread4_20"></div>
													<h2>回复 19楼 xihawangzi 的话题</h2>
						
						
																											<div id="postmessage_801366" class="t_msgfont">你没有点击保存按钮吧？</div>

							
							
							
							
															<div id="post_rate_div_801366"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo801366_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=11595" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=56199&amp;repquote=801366&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 801366)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_20"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid802400" summary="pid802400" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12952" target="_blank" id="userinfo802400" class="dropmenu" onmouseover="showMenu(this.id)">极光掠天</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">理想：為天地立心，為生民立命，為往聖繼絕學，為萬世開太平。</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12952">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12952&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_21" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum802400" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=56199&page=1#pid802400', '话题链接已经复制到剪贴板')">22楼</strong>
													<em onclick="$('postmessage_802400').className='t_bigfont'">大</em>							<em onclick="$('postmessage_802400').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_802400').className='t_smallfont'">小</em>												发表于 2010-8-29 11:18&nbsp;																					<a href="viewthread.php?tid=56199&amp;page=1&amp;authorid=12952" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_21"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_21"></div><div id="ad_thread4_21"></div>
													<h2>求助 关于MyEntunnel问题</h2>
						
						
																											<div id="postmessage_802400" class="t_msgfont">网通的，原来是ADSL拨号，一直用着没问题，现在加了一个路由器，就出现下面的问题了<br />
<br />
[11:01:25 08/29] 加载plink核心中...<br />
[11:01:29 08/29] plink.exe: FATAL ERROR: Network error: Connection refused<br />
[11:01:29 08/29] 已断开<br />
<br />
重启了还是这个样子...没经过连接，直接上网MyEntunnel还不能识别吗？太奇怪了...<br />
<br />
==============================================================================<br />
今天刚发邮件了，没注意，ssh帐号关闭了...<br />
请小黑屋吧，麻烦大家了。<br />
<br />
[<i> 本帖最后由 极光掠天 于 2010-8-29 13:07 编辑 </i>]</div>

							
							
							
							
															<div id="post_rate_div_802400"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo802400_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=12952" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=56199&amp;repquote=802400&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 802400)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_21"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid802414" summary="pid802414" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=17519" target="_blank" id="userinfo802414" class="dropmenu" onmouseover="showMenu(this.id)">circle_square</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=17519">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=17519&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_22" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum802414" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=56199&page=1#pid802414', '话题链接已经复制到剪贴板')">23楼</strong>
													<em onclick="$('postmessage_802414').className='t_bigfont'">大</em>							<em onclick="$('postmessage_802414').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_802414').className='t_smallfont'">小</em>												发表于 2010-8-29 11:34&nbsp;																					<a href="viewthread.php?tid=56199&amp;page=1&amp;authorid=17519" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_22"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_22"></div><div id="ad_thread4_22"></div>
						
						
																											<div id="postmessage_802414" class="t_msgfont">用路由了，本来就已经相当于设置一层代理了~~</div>

							
							
							
							
															<div id="post_rate_div_802414"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo802414_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=17519" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=56199&amp;repquote=802414&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 802414)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_22"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid802441" summary="pid802441" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=11595" target="_blank" id="userinfo802441" class="dropmenu" onmouseover="showMenu(this.id)">zzug</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=11595">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=11595&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_23" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum802441" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=56199&page=1#pid802441', '话题链接已经复制到剪贴板')">24楼</strong>
													<em onclick="$('postmessage_802441').className='t_bigfont'">大</em>							<em onclick="$('postmessage_802441').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_802441').className='t_smallfont'">小</em>												发表于 2010-8-29 12:04&nbsp;																					<a href="viewthread.php?tid=56199&amp;page=1&amp;authorid=11595" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_23"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_23"></div><div id="ad_thread4_23"></div>
													<h2>回复 1楼 极光掠天 的话题</h2>
						
						
																											<div id="postmessage_802441" class="t_msgfont">你换其他ssh帐号试试，不行换Tunnelier试试</div>

							
							
							
							
															<div id="post_rate_div_802441"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo802441_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=11595" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=56199&amp;repquote=802441&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 802441)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_23"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid802523" summary="pid802523" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12952" target="_blank" id="userinfo802523" class="dropmenu" onmouseover="showMenu(this.id)">极光掠天</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">理想：為天地立心，為生民立命，為往聖繼絕學，為萬世開太平。</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12952">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12952&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_24" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum802523" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=56199&page=1#pid802523', '话题链接已经复制到剪贴板')">25楼</strong>
													<em onclick="$('postmessage_802523').className='t_bigfont'">大</em>							<em onclick="$('postmessage_802523').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_802523').className='t_smallfont'">小</em>												发表于 2010-8-29 13:08&nbsp;																					<a href="viewthread.php?tid=56199&amp;page=1&amp;authorid=12952" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_24"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_24"></div><div id="ad_thread4_24"></div>
													<h2>回复 3楼 zzug 的话题</h2>
						
						
																											<div id="postmessage_802523" class="t_msgfont">嗯，谢谢，原因是ssh帐号关闭了...</div>

							
							
							
							
															<div id="post_rate_div_802523"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo802523_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=12952" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=56199&amp;repquote=802523&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 802523)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_24"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid803595" summary="pid803595" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1960" target="_blank" id="userinfo803595" class="dropmenu" onmouseover="showMenu(this.id)">库存袈裟</a></cite>
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
						<strong title="复制话题链接到剪贴板" id="postnum803595" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=56199&page=1#pid803595', '话题链接已经复制到剪贴板')">26楼</strong>
													<em onclick="$('postmessage_803595').className='t_bigfont'">大</em>							<em onclick="$('postmessage_803595').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_803595').className='t_smallfont'">小</em>												发表于 2010-8-30 10:51&nbsp;																					<a href="viewthread.php?tid=56199&amp;page=1&amp;authorid=1960" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_25"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_25"></div><div id="ad_thread4_25"></div>
						
						
																											<div id="postmessage_803595" class="t_msgfont">Nice!加入本版精华。</div>

							
							
							
							
															<div id="post_rate_div_803595"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo803595_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1960" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=56199&amp;repquote=803595&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 803595)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_25"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid803736" summary="pid803736" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2213" target="_blank" id="userinfo803736" class="dropmenu" onmouseover="showMenu(this.id)">核子力量</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">Twitter.com/hzpower</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2213">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2213&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_26" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum803736" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=56199&page=1#pid803736', '话题链接已经复制到剪贴板')">27楼</strong>
													<em onclick="$('postmessage_803736').className='t_bigfont'">大</em>							<em onclick="$('postmessage_803736').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_803736').className='t_smallfont'">小</em>												发表于 2010-8-30 12:03&nbsp;																					<a href="viewthread.php?tid=56199&amp;page=1&amp;authorid=2213" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_26"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_26"></div><div id="ad_thread4_26"></div>
						
						
																											<div id="postmessage_803736" class="t_msgfont">很用心，辛苦了</div>

							
							
							
							
															<div id="post_rate_div_803736"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo803736_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://twitter.com/hzpower" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=2213" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=56199&amp;repquote=803736&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 803736)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_26"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid803746" summary="pid803746" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10054" target="_blank" id="userinfo803746" class="dropmenu" onmouseover="showMenu(this.id)">imus</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">升斗小民</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10054">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10054&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_27" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum803746" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=56199&page=1#pid803746', '话题链接已经复制到剪贴板')">28楼</strong>
													<em onclick="$('postmessage_803746').className='t_bigfont'">大</em>							<em onclick="$('postmessage_803746').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_803746').className='t_smallfont'">小</em>												发表于 2010-8-30 12:11&nbsp;																					<a href="viewthread.php?tid=56199&amp;page=1&amp;authorid=10054" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_27"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_27"></div><div id="ad_thread4_27"></div>
						
						
																											<div id="postmessage_803746" class="t_msgfont">用这个软件是不是一定要有ssh账号？</div>

							
							
							
							
															<div id="post_rate_div_803746"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo803746_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://imuspot.appspot.com/" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=10054" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=56199&amp;repquote=803746&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 803746)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_27"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid803948" summary="pid803948" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=18137" target="_blank" id="userinfo803948" class="dropmenu" onmouseover="showMenu(this.id)">Aragorn</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">三俗份子</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=18137">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=18137&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_28" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum803948" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=56199&page=1#pid803948', '话题链接已经复制到剪贴板')">29楼</strong>
													<em onclick="$('postmessage_803948').className='t_bigfont'">大</em>							<em onclick="$('postmessage_803948').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_803948').className='t_smallfont'">小</em>												发表于 2010-8-30 14:06&nbsp;																					<a href="viewthread.php?tid=56199&amp;page=1&amp;authorid=18137" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_28"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_28"></div><div id="ad_thread4_28"></div>
						
						
																											<div id="postmessage_803948" class="t_msgfont">感谢袈裟大师抬爱了.还是多亏你的提醒了</div>

							
							
							
							
															<div id="post_rate_div_803948"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo803948_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=18137" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=56199&amp;repquote=803948&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 803948)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_28"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid803949" summary="pid803949" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=18137" target="_blank" id="userinfo803949" class="dropmenu" onmouseover="showMenu(this.id)">Aragorn</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">三俗份子</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=18137">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=18137&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_29" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum803949" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=56199&page=1#pid803949', '话题链接已经复制到剪贴板')">30楼</strong>
													<em onclick="$('postmessage_803949').className='t_bigfont'">大</em>							<em onclick="$('postmessage_803949').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_803949').className='t_smallfont'">小</em>												发表于 2010-8-30 14:06&nbsp;																					<a href="viewthread.php?tid=56199&amp;page=1&amp;authorid=18137" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_29"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_29"></div><div id="ad_thread4_29"></div>
						
						
																											<div id="postmessage_803949" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>imus</i> 于 2010-8-30 12:11 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=803746&amp;ptid=56564" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
用这个软件是不是一定要有ssh账号？ </blockquote></div>SSH是必须的.</div>

							
							
							
							
															<div id="post_rate_div_803949"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo803949_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=18137" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=56199&amp;repquote=803949&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 803949)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_29"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid804137" summary="pid804137" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=11595" target="_blank" id="userinfo804137" class="dropmenu" onmouseover="showMenu(this.id)">zzug</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=11595">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=11595&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_30" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum804137" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=56199&page=1#pid804137', '话题链接已经复制到剪贴板')">31楼</strong>
													<em onclick="$('postmessage_804137').className='t_bigfont'">大</em>							<em onclick="$('postmessage_804137').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_804137').className='t_smallfont'">小</em>												发表于 2010-8-30 16:32&nbsp;																					<a href="viewthread.php?tid=56199&amp;page=1&amp;authorid=11595" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_30"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_30"></div><div id="ad_thread4_30"></div>
													<h2>MyEnTunnel 创建多个 SSH 账户</h2>
						
						
																											<div id="postmessage_804137" class="t_msgfont">不知有没人遇到跟我相同的情况，<a href="http://nemesis2.qx.net/pages/MyEnTunnel" target="_blank">MyEnTunnel</a> 3.5.2右键点击托盘图标，“配置”一项是不可选的，而在软件主界面中也没有任何创建新“配置”的选项。但3.4.1似乎就没有这个问题。如果你只有一个SSH账户，或你用的是3.4.1稳定版，请忽略本文。<br />
<img width="330" height="220" src="http://img.ilemoned.com/myentunnel-multi-ssh-acc.jpg" border="0" alt="" /><br />
<strong>解决方法如下：</strong><br />
Win+R，输入MyEnTunnel完整路径，空一格再加个新配置，如：<br />
<blockquote>D:\MyEnTunnel\myentunnel.exe MediaTemple<br />
</blockquote>（当然你也可以通过建立快捷方式并编辑之来达到相同目的，不赘述了。）<br />
编辑完SSH账户信息并保存后，程序目录会多出来3个配置文件。这时退出并再次运行 MyEnTunnel，“配置”一项即变为可选，也可以直接创建新账户了。<br />
再给个tips：MyEnTunnel的作者在主页上说了，<strong>使用dev build的plink.exe会快很多</strong>。我换了看youtube速度果然是质的飞跃。<a href="http://www.chiark.greenend.org.uk/%7Esgtatham/putty/download.html" target="_blank">PuTTY 官网</a>就能下载到，自己仔细找找。<br />
多配置dev build的plink.exe的MyEnTunnel下载&nbsp;&nbsp;<a href="http://sharesend.com/exx4z" target="_blank">http://sharesend.com/exx4z</a></div>

							
							
							
							
															<div id="post_rate_div_804137"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo804137_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=11595" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=56199&amp;repquote=804137&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 804137)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_30"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid806282" summary="pid806282" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 <a name="lastpost"></a>					<cite>											<a href="space.php?uid=14031" target="_blank" id="userinfo806282" class="dropmenu" onmouseover="showMenu(this.id)">明月照积雪</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=14031">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=14031&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_31" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum806282" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=56199&page=1#pid806282', '话题链接已经复制到剪贴板')">32楼</strong>
													<em onclick="$('postmessage_806282').className='t_bigfont'">大</em>							<em onclick="$('postmessage_806282').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_806282').className='t_smallfont'">小</em>												发表于 2010-8-31 23:05&nbsp;																					<a href="viewthread.php?tid=56199&amp;page=1&amp;authorid=14031" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_31"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_31"></div><div id="ad_thread4_31"></div>
						
						
																											<div id="postmessage_806282" class="t_msgfont">留个记号</div>

							
							
							
							
															<div id="post_rate_div_806282"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo806282_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=14031" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=56199&amp;repquote=806282&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 806282)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_31"></div>				</div>
			</td>
		</tr>
		</table>
		</div>
</form>





<div class="pages_btns">
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=56199&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=56199&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
				<span class="postbtn" id="newspecialtmp" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=56199&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

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

	<form method="post" id="postform" action="post.php?action=reply&amp;fid=26&amp;tid=56199&amp;extra=&amp;replysubmit=yes" onSubmit="return validate(this)">
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
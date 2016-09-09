<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<title>讨论下如何安全的运行QQ吧～ - 国家局域网研究所 -  1984bbs.com </title>
<meta name="keywords" content="" />
<meta name="MSSmartTagsPreventParsing" content="True" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<link rel="archives" title="1984bbs.com" href="https://1984bbs.com/archiver/" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_viewthread.css" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_common.css" />
<script type="text/javascript">
	var discuz_uid = 13019;var IMGDIR = 'images/default';var attackevasive = '0';var gid = 0;var STYLEID = '1';
	gid = parseInt('3');var fid = parseInt('26');var tid = parseInt('41423');
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
			<p><a href="index.php" id="forumlist" onmouseover="showMenu(this.id)" class="dropmenu">1984bbs.com</a> &raquo; <a href="forumdisplay.php?fid=26">国家局域网研究所</a> &raquo; 讨论下如何安全的运行QQ吧～</p>
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
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=41423&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=41423&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
	<div class="pages"><em>&nbsp;55&nbsp;</em><strong>1</strong><a href="viewthread.php?tid=41423&amp;extra=&amp;page=2">2</a><a href="viewthread.php?tid=41423&amp;extra=&amp;page=2" class="next">&rsaquo;&rsaquo;</a></div>			<span class="postbtn" id="newspecial" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=41423&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

	<ul class="popupmenu_popup newspecialmenu" id="newspecial_menu" style="display: none">
		<li><a href="post.php?action=newthread&amp;fid=26&amp;extra=">发新话题</a></li>
		<li class="poll"><a href="post.php?action=newthread&amp;fid=26&amp;extra=&amp;special=1">发布投票</a></li>													</ul>

<form method="post" name="modactions">
	<input type="hidden" name="formhash" value="823c9fa2" />
	<div class="mainbox viewthread">
		<span class="headactions">
					<a href="my.php?item=favorites&amp;tid=41423" id="ajax_favorite" onclick="ajaxmenu(event, this.id, 3000, 0)">收藏</a>
			<a href="my.php?item=subscriptions&amp;subadd=41423" id="ajax_subscription" onclick="ajaxmenu(event, this.id, 3000, null, 0)">订阅</a>
			<a href="misc.php?action=emailfriend&amp;tid=41423" id="emailfriend" onclick="ajaxmenu(event, this.id, 9000000, null, 0)">推荐</a>
				<a href="viewthread.php?action=printable&amp;tid=41423" target="_blank" class="notabs">打印</a>
				</span>
		<h1>讨论下如何安全的运行QQ吧～		</h1>
							<table id="pid534237" summary="pid534237" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12457" target="_blank" id="userinfo534237" class="dropmenu" onmouseover="showMenu(this.id)">houman</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12457">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12457&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_0" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum534237" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=41423&page=1#pid534237', '话题链接已经复制到剪贴板')">1楼</strong>
													<em onclick="$('postmessage_534237').className='t_bigfont'">大</em>							<em onclick="$('postmessage_534237').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_534237').className='t_smallfont'">小</em>												发表于 2010-3-26 18:19&nbsp;																					<a href="viewthread.php?tid=41423&amp;page=1&amp;authorid=12457" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_0"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_0"></div><div id="ad_thread4_0"></div>
													<h2>讨论下如何安全的运行QQ吧～</h2>
						
						
																											<div id="postmessage_534237" class="t_msgfont">不用QQ不现实，毕竟周围人都用。但是我很少在家里登QQ，虽然没有确切证据，不过QQ没事会访问硬盘是真的。有没有什么安全的方法运行，大概想了下无非就是虚拟机。不知道还有没有其他的办法。</div>

							
							
							
							
															<div id="post_rate_div_534237"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo534237_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://www.mygamewiki.net" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=12457" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=41423&amp;repquote=534237&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 534237)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_0"></div>				</div>
			</td>
		</tr>
		</table>
		</div><div class="ad_column" id="ad_interthread"><a href="/viewthread.php?tid=54699" target="_blank" style="color:red;">1984bbs是一个非营利项目，它需要您的捐助！</font></a>		</div>
	<div class="mainbox viewthread">
			<table id="pid534599" summary="pid534599" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10662" target="_blank" id="userinfo534599" class="dropmenu" onmouseover="showMenu(this.id)">Omnipotentgod</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10662">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10662&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_1" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum534599" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=41423&page=1#pid534599', '话题链接已经复制到剪贴板')">2楼</strong>
													<em onclick="$('postmessage_534599').className='t_bigfont'">大</em>							<em onclick="$('postmessage_534599').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_534599').className='t_smallfont'">小</em>												发表于 2010-3-26 22:41&nbsp;																					<a href="viewthread.php?tid=41423&amp;page=1&amp;authorid=10662" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_1"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_1"></div><div id="ad_thread4_1"></div>
						
						
																											<div id="postmessage_534599" class="t_msgfont">反正我是坚持开虚拟机QQ</div>

							
							
							
							
															<div id="post_rate_div_534599"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo534599_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=10662" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=41423&amp;repquote=534599&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 534599)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_1"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid534601" summary="pid534601" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7939" target="_blank" id="userinfo534601" class="dropmenu" onmouseover="showMenu(this.id)">刘项</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7939">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7939&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_2" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum534601" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=41423&page=1#pid534601', '话题链接已经复制到剪贴板')">3楼</strong>
													<em onclick="$('postmessage_534601').className='t_bigfont'">大</em>							<em onclick="$('postmessage_534601').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_534601').className='t_smallfont'">小</em>												发表于 2010-3-26 22:44&nbsp;																					<a href="viewthread.php?tid=41423&amp;page=1&amp;authorid=7939" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_2"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_2"></div><div id="ad_thread4_2"></div>
						
						
																											<div id="postmessage_534601" class="t_msgfont">webqq web.qq.com</div>

							
							
							
							
															<div id="post_rate_div_534601"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo534601_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=7939" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=41423&amp;repquote=534601&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 534601)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_2"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid534794" summary="pid534794" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=3308" target="_blank" id="userinfo534794" class="dropmenu" onmouseover="showMenu(this.id)">天衢居士</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">一小撮各種不明真相</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=3308">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=3308&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_3" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum534794" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=41423&page=1#pid534794', '话题链接已经复制到剪贴板')">4楼</strong>
													<em onclick="$('postmessage_534794').className='t_bigfont'">大</em>							<em onclick="$('postmessage_534794').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_534794').className='t_smallfont'">小</em>												发表于 2010-3-27 00:59&nbsp;																					<a href="viewthread.php?tid=41423&amp;page=1&amp;authorid=3308" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_3"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_3"></div><div id="ad_thread4_3"></div>
						
						
																											<div id="postmessage_534794" class="t_msgfont">3L的可以<br />
也可以用防火牆限制其與聊天無關的進程</div>

							
							
							
							
															<div id="post_rate_div_534794"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo534794_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=3308" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=41423&amp;repquote=534794&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 534794)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_3"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid535153" summary="pid535153" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2297" target="_blank" id="userinfo535153" class="dropmenu" onmouseover="showMenu(this.id)">阴影之剑</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2297">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2297&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_4" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum535153" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=41423&page=1#pid535153', '话题链接已经复制到剪贴板')">5楼</strong>
													<em onclick="$('postmessage_535153').className='t_bigfont'">大</em>							<em onclick="$('postmessage_535153').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_535153').className='t_smallfont'">小</em>												发表于 2010-3-27 14:46&nbsp;																					<a href="viewthread.php?tid=41423&amp;page=1&amp;authorid=2297" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_4"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_4"></div><div id="ad_thread4_4"></div>
						
						
																											<div id="postmessage_535153" class="t_msgfont">使用comodo的HIPS功能限制它</div>

							
							
							
							
															<div id="post_rate_div_535153"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo535153_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=2297" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=41423&amp;repquote=535153&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 535153)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_4"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid535241" summary="pid535241" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8525" target="_blank" id="userinfo535241" class="dropmenu" onmouseover="showMenu(this.id)">wtdd</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8525">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8525&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_5" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum535241" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=41423&page=1#pid535241', '话题链接已经复制到剪贴板')">6楼</strong>
													<em onclick="$('postmessage_535241').className='t_bigfont'">大</em>							<em onclick="$('postmessage_535241').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_535241').className='t_smallfont'">小</em>												发表于 2010-3-27 16:15&nbsp;																					<a href="viewthread.php?tid=41423&amp;page=1&amp;authorid=8525" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_5"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_5"></div><div id="ad_thread4_5"></div>
						
						
																											<div id="postmessage_535241" class="t_msgfont">sandbox，手机qq</div>

							
							
							
							
															<div id="post_rate_div_535241"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo535241_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=8525" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=41423&amp;repquote=535241&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 535241)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_5"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid535792" summary="pid535792" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6743" target="_blank" id="userinfo535792" class="dropmenu" onmouseover="showMenu(this.id)">鼠标土豆</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">古典自由主义土豆</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6743">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6743&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_6" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum535792" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=41423&page=1#pid535792', '话题链接已经复制到剪贴板')">7楼</strong>
													<em onclick="$('postmessage_535792').className='t_bigfont'">大</em>							<em onclick="$('postmessage_535792').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_535792').className='t_smallfont'">小</em>												发表于 2010-3-28 02:24&nbsp;																					<a href="viewthread.php?tid=41423&amp;page=1&amp;authorid=6743" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_6"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_6"></div><div id="ad_thread4_6"></div>
						
						
																											<div id="postmessage_535792" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>阴影之剑</i> 于 2010-3-27 14:46 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=535153&amp;ptid=41423" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
使用comodo的HIPS功能限制它 </blockquote></div>请问怎么设置？</div>

							
							
							
							
															<div id="post_rate_div_535792"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo535792_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=6743" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=41423&amp;repquote=535792&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 535792)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_6"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid535796" summary="pid535796" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12376" target="_blank" id="userinfo535796" class="dropmenu" onmouseover="showMenu(this.id)">elon</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">打飞机的老张</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12376">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12376&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_7" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum535796" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=41423&page=1#pid535796', '话题链接已经复制到剪贴板')">8楼</strong>
													<em onclick="$('postmessage_535796').className='t_bigfont'">大</em>							<em onclick="$('postmessage_535796').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_535796').className='t_smallfont'">小</em>												发表于 2010-3-28 02:38&nbsp;																					<a href="viewthread.php?tid=41423&amp;page=1&amp;authorid=12376" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_7"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_7"></div><div id="ad_thread4_7"></div>
						
						
																											<div id="postmessage_535796" class="t_msgfont">从我上个月重装系统之后，一直没装QQ，发现我活得挺好</div>

							
							
							
							
															<div id="post_rate_div_535796"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo535796_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=12376" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=41423&amp;repquote=535796&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 535796)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_7"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid535799" summary="pid535799" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=4135" target="_blank" id="userinfo535799" class="dropmenu" onmouseover="showMenu(this.id)">kronos1980</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">ziwu</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=4135">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=4135&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_8" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum535799" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=41423&page=1#pid535799', '话题链接已经复制到剪贴板')">9楼</strong>
													<em onclick="$('postmessage_535799').className='t_bigfont'">大</em>							<em onclick="$('postmessage_535799').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_535799').className='t_smallfont'">小</em>												发表于 2010-3-28 02:48&nbsp;																					<a href="viewthread.php?tid=41423&amp;page=1&amp;authorid=4135" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_8"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_8"></div><div id="ad_thread4_8"></div>
						
						
																											<div id="postmessage_535799" class="t_msgfont">恩，同意使用Web qq</div>

							
							
							
							
															<div id="post_rate_div_535799"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo535799_menu" style="display: none;">
										<div class="imicons">
												<a href="http://wpa.qq.com/msgrd?V=1&amp;Uin=304479145&amp;Site=1984bbs.com&amp;Menu=yes" target="_blank"><img src="images/default/qq.gif" alt="QQ" /></a>																							</div>
										<dl></dl>
										<p><a href="space.php?uid=4135" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=41423&amp;repquote=535799&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 535799)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_8"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid535908" summary="pid535908" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12254" target="_blank" id="userinfo535908" class="dropmenu" onmouseover="showMenu(this.id)">gongchen713</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">gongchen713</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12254">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12254&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_9" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum535908" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=41423&page=1#pid535908', '话题链接已经复制到剪贴板')">10楼</strong>
													<em onclick="$('postmessage_535908').className='t_bigfont'">大</em>							<em onclick="$('postmessage_535908').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_535908').className='t_smallfont'">小</em>												发表于 2010-3-28 09:24&nbsp;																					<a href="viewthread.php?tid=41423&amp;page=1&amp;authorid=12254" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_9"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_9"></div><div id="ad_thread4_9"></div>
						
						
																											<div id="postmessage_535908" class="t_msgfont">用英文版的qq很干净</div>

							
							
							
							
															<div id="post_rate_div_535908"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo535908_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=12254" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=41423&amp;repquote=535908&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 535908)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_9"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid535966" summary="pid535966" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10114" target="_blank" id="userinfo535966" class="dropmenu" onmouseover="showMenu(this.id)">m3g4</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10114">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10114&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_10" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum535966" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=41423&page=1#pid535966', '话题链接已经复制到剪贴板')">11楼</strong>
													<em onclick="$('postmessage_535966').className='t_bigfont'">大</em>							<em onclick="$('postmessage_535966').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_535966').className='t_smallfont'">小</em>												发表于 2010-3-28 10:16&nbsp;																					<a href="viewthread.php?tid=41423&amp;page=1&amp;authorid=10114" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_10"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_10"></div><div id="ad_thread4_10"></div>
						
						
																											<div id="postmessage_535966" class="t_msgfont">使用web.qq.com 应该好点</div>

							
							
							
							
															<div id="post_rate_div_535966"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo535966_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=10114" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=41423&amp;repquote=535966&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 535966)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_10"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid535997" summary="pid535997" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=11891" target="_blank" id="userinfo535997" class="dropmenu" onmouseover="showMenu(this.id)">bychurchill</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=11891">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=11891&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_11" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum535997" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=41423&page=1#pid535997', '话题链接已经复制到剪贴板')">12楼</strong>
													<em onclick="$('postmessage_535997').className='t_bigfont'">大</em>							<em onclick="$('postmessage_535997').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_535997').className='t_smallfont'">小</em>												发表于 2010-3-28 10:35&nbsp;																					<a href="viewthread.php?tid=41423&amp;page=1&amp;authorid=11891" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_11"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_11"></div><div id="ad_thread4_11"></div>
						
						
																											<div id="postmessage_535997" class="t_msgfont">英文版也要跳弹出窗。我现在电脑已经没Q了，但淘宝还在~</div>

							
							
							
							
															<div id="post_rate_div_535997"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo535997_menu" style="display: none;">
										<div class="imicons">
													<a target='_blank' href='http://settings.messenger.live.com/Conversation/IMMe.aspx?invitee=bychurchill@hotmail.com&mkt=zh-cn'><img style='border-style: none;' src='http://messenger.services.live.com/users/bychurchill@hotmail.com/presenceimage?mkt=zh-cn' width='16' height='16' /></a>
												<a href="http://wpa.qq.com/msgrd?V=1&amp;Uin=1043677216&amp;Site=1984bbs.com&amp;Menu=yes" target="_blank"><img src="images/default/qq.gif" alt="QQ" /></a>																							</div>
										<dl></dl>
										<p><a href="space.php?uid=11891" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=41423&amp;repquote=535997&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 535997)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_11"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid536021" summary="pid536021" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=9517" target="_blank" id="userinfo536021" class="dropmenu" onmouseover="showMenu(this.id)">老西</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=9517">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=9517&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_12" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum536021" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=41423&page=1#pid536021', '话题链接已经复制到剪贴板')">13楼</strong>
													<em onclick="$('postmessage_536021').className='t_bigfont'">大</em>							<em onclick="$('postmessage_536021').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_536021').className='t_smallfont'">小</em>												发表于 2010-3-28 10:54&nbsp;																					<a href="viewthread.php?tid=41423&amp;page=1&amp;authorid=9517" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_12"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_12"></div><div id="ad_thread4_12"></div>
						
						
																											<div id="postmessage_536021" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>elon</i> 于 2010-3-28 02:38 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=535796&amp;ptid=41423" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
从我上个月重装系统之后，一直没装QQ，发现我活得挺好 </blockquote></div>+1</div>

							
							
							
							
															<div id="post_rate_div_536021"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo536021_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=9517" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=41423&amp;repquote=536021&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 536021)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_12"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid536237" summary="pid536237" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12457" target="_blank" id="userinfo536237" class="dropmenu" onmouseover="showMenu(this.id)">houman</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12457">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12457&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_13" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum536237" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=41423&page=1#pid536237', '话题链接已经复制到剪贴板')">14楼</strong>
													<em onclick="$('postmessage_536237').className='t_bigfont'">大</em>							<em onclick="$('postmessage_536237').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_536237').className='t_smallfont'">小</em>												发表于 2010-3-28 13:30&nbsp;																					<a href="viewthread.php?tid=41423&amp;page=1&amp;authorid=12457" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_13"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_13"></div><div id="ad_thread4_13"></div>
						
						
																											<div id="postmessage_536237" class="t_msgfont">我是没办法不用QQ，感觉为了个QQ装个虚拟机太费事了。在单位装了ubuntu，结果linux下的QQ好友的都不全……</div>

							
							
							
							
															<div id="post_rate_div_536237"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo536237_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://www.mygamewiki.net" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=12457" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=41423&amp;repquote=536237&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 536237)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_13"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid536352" summary="pid536352" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12803" target="_blank" id="userinfo536352" class="dropmenu" onmouseover="showMenu(this.id)">翻上牆頭看紅杏</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12803">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12803&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_14" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum536352" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=41423&page=1#pid536352', '话题链接已经复制到剪贴板')">15楼</strong>
													<em onclick="$('postmessage_536352').className='t_bigfont'">大</em>							<em onclick="$('postmessage_536352').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_536352').className='t_smallfont'">小</em>												发表于 2010-3-28 14:31&nbsp;																					<a href="viewthread.php?tid=41423&amp;page=1&amp;authorid=12803" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_14"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_14"></div><div id="ad_thread4_14"></div>
						
						
																											<div id="postmessage_536352" class="t_msgfont">我與樓上的遭遇差不多，單位裝了Win+Ubuntu，但是老切換煩的很……</div>

							
							
							
							
															<div id="post_rate_div_536352"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo536352_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=12803" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=41423&amp;repquote=536352&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 536352)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_14"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid536374" summary="pid536374" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12804" target="_blank" id="userinfo536374" class="dropmenu" onmouseover="showMenu(this.id)">Caohexie</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12804">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12804&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_15" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum536374" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=41423&page=1#pid536374', '话题链接已经复制到剪贴板')">16楼</strong>
													<em onclick="$('postmessage_536374').className='t_bigfont'">大</em>							<em onclick="$('postmessage_536374').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_536374').className='t_smallfont'">小</em>												发表于 2010-3-28 14:44&nbsp;																					<a href="viewthread.php?tid=41423&amp;page=1&amp;authorid=12804" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_15"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_15"></div><div id="ad_thread4_15"></div>
						
						
																											<div id="postmessage_536374" class="t_msgfont">我卸载了两次，安装了三次。没办法，朋友们都在用那玩意，没几个习惯用邮箱联系的。</div>

							
							
							
							
															<div id="post_rate_div_536374"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo536374_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=12804" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=41423&amp;repquote=536374&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 536374)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_15"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid536580" summary="pid536580" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12805" target="_blank" id="userinfo536580" class="dropmenu" onmouseover="showMenu(this.id)">yypisces</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12805">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12805&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_16" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum536580" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=41423&page=1#pid536580', '话题链接已经复制到剪贴板')">17楼</strong>
													<em onclick="$('postmessage_536580').className='t_bigfont'">大</em>							<em onclick="$('postmessage_536580').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_536580').className='t_smallfont'">小</em>												发表于 2010-3-28 17:10&nbsp;																					<a href="viewthread.php?tid=41423&amp;page=1&amp;authorid=12805" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_16"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_16"></div><div id="ad_thread4_16"></div>
						
						
																											<div id="postmessage_536580" class="t_msgfont">没办法啊，朋友都用QQ，现在软件除了QQ，其余都非国产的了</div>

							
							
							
							
															<div id="post_rate_div_536580"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo536580_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=12805" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=41423&amp;repquote=536580&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 536580)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_16"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid537183" summary="pid537183" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12612" target="_blank" id="userinfo537183" class="dropmenu" onmouseover="showMenu(this.id)">brokenmouse</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12612">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12612&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_17" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum537183" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=41423&page=1#pid537183', '话题链接已经复制到剪贴板')">18楼</strong>
													<em onclick="$('postmessage_537183').className='t_bigfont'">大</em>							<em onclick="$('postmessage_537183').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_537183').className='t_smallfont'">小</em>												发表于 2010-3-29 06:31&nbsp;																					<a href="viewthread.php?tid=41423&amp;page=1&amp;authorid=12612" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_17"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_17"></div><div id="ad_thread4_17"></div>
						
						
																											<div id="postmessage_537183" class="t_msgfont">用沙箱...这个安全，效能也比虚拟机高。</div>

							
							
							
							
															<div id="post_rate_div_537183"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo537183_menu" style="display: none;">
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
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=41423&amp;repquote=537183&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 537183)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_17"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid537291" summary="pid537291" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12613" target="_blank" id="userinfo537291" class="dropmenu" onmouseover="showMenu(this.id)">东张西望</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12613">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12613&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_18" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum537291" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=41423&page=1#pid537291', '话题链接已经复制到剪贴板')">19楼</strong>
													<em onclick="$('postmessage_537291').className='t_bigfont'">大</em>							<em onclick="$('postmessage_537291').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_537291').className='t_smallfont'">小</em>												发表于 2010-3-29 09:29&nbsp;																					<a href="viewthread.php?tid=41423&amp;page=1&amp;authorid=12613" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_18"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_18"></div><div id="ad_thread4_18"></div>
						
						
																											<div id="postmessage_537291" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>brokenmouse</i> 于 2010-3-29 06:31 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=537183&amp;ptid=41423" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
用沙箱...这个安全，效能也比虚拟机高。 </blockquote></div>怎么用？</div>

							
							
							
							
															<div id="post_rate_div_537291"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo537291_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=12613" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=41423&amp;repquote=537291&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 537291)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_18"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid537435" summary="pid537435" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10029" target="_blank" id="userinfo537435" class="dropmenu" onmouseover="showMenu(this.id)">fangweng10</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">motherfuck</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10029">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10029&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_19" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum537435" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=41423&page=1#pid537435', '话题链接已经复制到剪贴板')">20楼</strong>
													<em onclick="$('postmessage_537435').className='t_bigfont'">大</em>							<em onclick="$('postmessage_537435').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_537435').className='t_smallfont'">小</em>												发表于 2010-3-29 10:46&nbsp;																					<a href="viewthread.php?tid=41423&amp;page=1&amp;authorid=10029" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_19"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_19"></div><div id="ad_thread4_19"></div>
						
						
																											<div id="postmessage_537435" class="t_msgfont">为什么不用pidgin，我用了很长时间。</div>

							
							
							
							
															<div id="post_rate_div_537435"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo537435_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=10029" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=41423&amp;repquote=537435&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 537435)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_19"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid537440" summary="pid537440" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=11636" target="_blank" id="userinfo537440" class="dropmenu" onmouseover="showMenu(this.id)">发粪涂墙</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=11636">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=11636&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_20" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum537440" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=41423&page=1#pid537440', '话题链接已经复制到剪贴板')">21楼</strong>
													<em onclick="$('postmessage_537440').className='t_bigfont'">大</em>							<em onclick="$('postmessage_537440').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_537440').className='t_smallfont'">小</em>												发表于 2010-3-29 10:47&nbsp;																					<a href="viewthread.php?tid=41423&amp;page=1&amp;authorid=11636" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_20"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_20"></div><div id="ad_thread4_20"></div>
						
						
																											<div id="postmessage_537440" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>鼠标土豆</i> 于 2010-3-28 02:24 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=535792&amp;ptid=41423" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
<br />
请问怎么设置？ </blockquote></div>同问，还不大会使COMODO。</div>

							
							
							
							
															<div id="post_rate_div_537440"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo537440_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=11636" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=41423&amp;repquote=537440&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 537440)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_20"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid537585" summary="pid537585" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=5779" target="_blank" id="userinfo537585" class="dropmenu" onmouseover="showMenu(this.id)">路上拾荒</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=5779">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=5779&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_21" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum537585" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=41423&page=1#pid537585', '话题链接已经复制到剪贴板')">22楼</strong>
													<em onclick="$('postmessage_537585').className='t_bigfont'">大</em>							<em onclick="$('postmessage_537585').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_537585').className='t_smallfont'">小</em>												发表于 2010-3-29 12:03&nbsp;																					<a href="viewthread.php?tid=41423&amp;page=1&amp;authorid=5779" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_21"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_21"></div><div id="ad_thread4_21"></div>
						
						
																											<div id="postmessage_537585" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>fangweng10</i> 于 2010-3-29 10:46 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=537435&amp;ptid=41423" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
为什么不用pidgin，我用了很长时间。 </blockquote></div>pidgin上的qq协议不是有问题么，我曾经在pidgin上登录过一次qq，结果qq提示异常登录，要到web上去申请解锁。</div>

							
							
							
							
															<div id="post_rate_div_537585"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo537585_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=5779" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=41423&amp;repquote=537585&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 537585)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_21"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid537838" summary="pid537838" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2297" target="_blank" id="userinfo537838" class="dropmenu" onmouseover="showMenu(this.id)">阴影之剑</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2297">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2297&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_22" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum537838" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=41423&page=1#pid537838', '话题链接已经复制到剪贴板')">23楼</strong>
													<em onclick="$('postmessage_537838').className='t_bigfont'">大</em>							<em onclick="$('postmessage_537838').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_537838').className='t_smallfont'">小</em>												发表于 2010-3-29 14:47&nbsp;																					<a href="viewthread.php?tid=41423&amp;page=1&amp;authorid=2297" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_22"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_22"></div><div id="ad_thread4_22"></div>
						
						
																											<div id="postmessage_537838" class="t_msgfont">COMODO<br />
较简单的设法：<br />
将其设为被隔离的应用程序<br />
然后详细栏里设置禁止访问物理磁盘，禁止挂钩子，禁止内存间访问，禁止加载驱动。并将其设为一直在沙盒里运行。</div>

							
							
							
							
															<div id="post_rate_div_537838"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo537838_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=2297" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=41423&amp;repquote=537838&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 537838)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_22"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid537843" summary="pid537843" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12457" target="_blank" id="userinfo537843" class="dropmenu" onmouseover="showMenu(this.id)">houman</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12457">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12457&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_23" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum537843" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=41423&page=1#pid537843', '话题链接已经复制到剪贴板')">24楼</strong>
													<em onclick="$('postmessage_537843').className='t_bigfont'">大</em>							<em onclick="$('postmessage_537843').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_537843').className='t_smallfont'">小</em>												发表于 2010-3-29 14:50&nbsp;																					<a href="viewthread.php?tid=41423&amp;page=1&amp;authorid=12457" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_23"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_23"></div><div id="ad_thread4_23"></div>
						
						
																											<div id="postmessage_537843" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>阴影之剑</i> 于 2010-3-29 14:47 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=537838&amp;ptid=41423" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
COMODO<br />
较简单的设法：<br />
将其设为被隔离的应用程序<br />
然后详细栏里设置禁止访问物理磁盘，禁止挂钩子，禁止内存间访问，禁止加载驱动。并将其设为一直在沙盒里运行。 </blockquote></div>麻烦详细说下，comodo的这些选项都找不到～</div>

							
							
							
							
															<div id="post_rate_div_537843"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo537843_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://www.mygamewiki.net" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=12457" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=41423&amp;repquote=537843&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 537843)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_23"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid537922" summary="pid537922" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=464" target="_blank" id="userinfo537922" class="dropmenu" onmouseover="showMenu(this.id)">Phillip</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">路边社特邀围观群众</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=464">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=464&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_24" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum537922" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=41423&page=1#pid537922', '话题链接已经复制到剪贴板')">25楼</strong>
													<em onclick="$('postmessage_537922').className='t_bigfont'">大</em>							<em onclick="$('postmessage_537922').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_537922').className='t_smallfont'">小</em>												发表于 2010-3-29 16:04&nbsp;																					<a href="viewthread.php?tid=41423&amp;page=1&amp;authorid=464" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_24"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_24"></div><div id="ad_thread4_24"></div>
													<h2>回复 23楼 阴影之剑 的话题</h2>
						
						
																											<div id="postmessage_537922" class="t_msgfont">Comodo 4 才有沙盒的吧, 3还没有</div>

							
							
							
							
															<div id="post_rate_div_537922"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo537922_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=464" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=41423&amp;repquote=537922&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 537922)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_24"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid537990" summary="pid537990" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8396" target="_blank" id="userinfo537990" class="dropmenu" onmouseover="showMenu(this.id)">youttiao</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">微博PM</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8396">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8396&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_25" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum537990" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=41423&page=1#pid537990', '话题链接已经复制到剪贴板')">26楼</strong>
													<em onclick="$('postmessage_537990').className='t_bigfont'">大</em>							<em onclick="$('postmessage_537990').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_537990').className='t_smallfont'">小</em>												发表于 2010-3-29 16:36&nbsp;																					<a href="viewthread.php?tid=41423&amp;page=1&amp;authorid=8396" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_25"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_25"></div><div id="ad_thread4_25"></div>
						
						
																											<div id="postmessage_537990" class="t_msgfont">我主要是用qq的截图程序</div>

							
							
							
							
															<div id="post_rate_div_537990"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo537990_menu" style="display: none;">
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
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=41423&amp;repquote=537990&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 537990)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_25"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid537993" summary="pid537993" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12457" target="_blank" id="userinfo537993" class="dropmenu" onmouseover="showMenu(this.id)">houman</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12457">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12457&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_26" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum537993" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=41423&page=1#pid537993', '话题链接已经复制到剪贴板')">27楼</strong>
													<em onclick="$('postmessage_537993').className='t_bigfont'">大</em>							<em onclick="$('postmessage_537993').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_537993').className='t_smallfont'">小</em>												发表于 2010-3-29 16:37&nbsp;																					<a href="viewthread.php?tid=41423&amp;page=1&amp;authorid=12457" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_26"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_26"></div><div id="ad_thread4_26"></div>
						
						
																											<div id="postmessage_537993" class="t_msgfont">我发现把qq放到沙盒里可能会造成输入法不能输入中文。</div>

							
							
							
							
															<div id="post_rate_div_537993"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo537993_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://www.mygamewiki.net" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=12457" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=41423&amp;repquote=537993&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 537993)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_26"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid538336" summary="pid538336" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12835" target="_blank" id="userinfo538336" class="dropmenu" onmouseover="showMenu(this.id)">Gooday</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12835">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12835&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_27" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum538336" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=41423&page=1#pid538336', '话题链接已经复制到剪贴板')">28楼</strong>
													<em onclick="$('postmessage_538336').className='t_bigfont'">大</em>							<em onclick="$('postmessage_538336').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_538336').className='t_smallfont'">小</em>												发表于 2010-3-29 20:07&nbsp;																					<a href="viewthread.php?tid=41423&amp;page=1&amp;authorid=12835" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_27"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_27"></div><div id="ad_thread4_27"></div>
						
						
																											<div id="postmessage_538336" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>yypisces</i> 于 2010-3-28 17:10 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=536580&amp;ptid=41423" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
没办法啊，朋友都用QQ，现在软件除了QQ，其余都非国产的了 </blockquote></div>嗯 对 其他人都用QQ 我想换成Gtalk的 但是不可能每个人都换 <br />
现在我用国际版的qq QQ International</div>

							
							
							
							
															<div id="post_rate_div_538336"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo538336_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=12835" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=41423&amp;repquote=538336&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 538336)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_27"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid538551" summary="pid538551" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=3447" target="_blank" id="userinfo538551" class="dropmenu" onmouseover="showMenu(this.id)">从不洗澡</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=3447">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=3447&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_28" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum538551" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=41423&page=1#pid538551', '话题链接已经复制到剪贴板')">29楼</strong>
													<em onclick="$('postmessage_538551').className='t_bigfont'">大</em>							<em onclick="$('postmessage_538551').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_538551').className='t_smallfont'">小</em>												发表于 2010-3-29 22:23&nbsp;																					<a href="viewthread.php?tid=41423&amp;page=1&amp;authorid=3447" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_28"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_28"></div><div id="ad_thread4_28"></div>
						
						
																											<div id="postmessage_538551" class="t_msgfont">台式机上网，本在旁边挂Q，本里没有敏感内容。</div>

							
							
							
							
															<div id="post_rate_div_538551"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo538551_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=3447" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=41423&amp;repquote=538551&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 538551)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_28"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid539086" summary="pid539086" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12848" target="_blank" id="userinfo539086" class="dropmenu" onmouseover="showMenu(this.id)">人民的眼睛</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12848">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12848&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_29" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum539086" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=41423&page=1#pid539086', '话题链接已经复制到剪贴板')">30楼</strong>
													<em onclick="$('postmessage_539086').className='t_bigfont'">大</em>							<em onclick="$('postmessage_539086').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_539086').className='t_smallfont'">小</em>												发表于 2010-3-30 10:45&nbsp;																					<a href="viewthread.php?tid=41423&amp;page=1&amp;authorid=12848" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_29"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_29"></div><div id="ad_thread4_29"></div>
						
						
																											<div id="postmessage_539086" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>brokenmouse</i> 于 2010-3-29 06:31 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=537183&amp;ptid=41423" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
用沙箱...这个安全，效能也比虚拟机高。 </blockquote></div>这个怎么用~~&nbsp; &nbsp;本配置低，装虚拟机忒卡了，我现在根本不敢用本上QQ，</div>

							
							
							
							
															<div id="post_rate_div_539086"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo539086_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=12848" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=41423&amp;repquote=539086&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 539086)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_29"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid540267" summary="pid540267" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12860" target="_blank" id="userinfo540267" class="dropmenu" onmouseover="showMenu(this.id)">masterchou</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12860">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12860&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_30" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum540267" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=41423&page=1#pid540267', '话题链接已经复制到剪贴板')">31楼</strong>
													<em onclick="$('postmessage_540267').className='t_bigfont'">大</em>							<em onclick="$('postmessage_540267').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_540267').className='t_smallfont'">小</em>												发表于 2010-3-30 21:21&nbsp;																					<a href="viewthread.php?tid=41423&amp;page=1&amp;authorid=12860" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_30"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_30"></div><div id="ad_thread4_30"></div>
						
						
																											<div id="postmessage_540267" class="t_msgfont">用QQ international</div>

							
							
							
							
															<div id="post_rate_div_540267"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo540267_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=12860" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=41423&amp;repquote=540267&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 540267)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_30"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid541946" summary="pid541946" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12307" target="_blank" id="userinfo541946" class="dropmenu" onmouseover="showMenu(this.id)">tywtyw2002</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12307">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12307&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_31" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum541946" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=41423&page=1#pid541946', '话题链接已经复制到剪贴板')">32楼</strong>
													<em onclick="$('postmessage_541946').className='t_bigfont'">大</em>							<em onclick="$('postmessage_541946').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_541946').className='t_smallfont'">小</em>												发表于 2010-3-31 22:08&nbsp;																					<a href="viewthread.php?tid=41423&amp;page=1&amp;authorid=12307" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_31"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_31"></div><div id="ad_thread4_31"></div>
						
						
																											<div id="postmessage_541946" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>masterchou</i> 于 2010-3-30 21:21 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=540267&amp;ptid=41423" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
用QQ international </blockquote></div>这个也有钩子。。。。 <br />
qq目前无解<br />
迅雷也监控</div>

							
							
							
							
															<div id="post_rate_div_541946"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo541946_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=12307" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=41423&amp;repquote=541946&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 541946)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_31"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid541972" summary="pid541972" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=9863" target="_blank" id="userinfo541972" class="dropmenu" onmouseover="showMenu(this.id)">kysoft</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">fuck gfw</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=9863">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=9863&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_32" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum541972" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=41423&page=1#pid541972', '话题链接已经复制到剪贴板')">33楼</strong>
													<em onclick="$('postmessage_541972').className='t_bigfont'">大</em>							<em onclick="$('postmessage_541972').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_541972').className='t_smallfont'">小</em>												发表于 2010-3-31 22:17&nbsp;																					<a href="viewthread.php?tid=41423&amp;page=1&amp;authorid=9863" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_32"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_32"></div><div id="ad_thread4_32"></div>
						
						
																											<div id="postmessage_541972" class="t_msgfont">TM2009 Beta 2.0以下版本 / TM2008 / QQ International + Sandboxie</div>

							
							
							
							
															<div id="post_rate_div_541972"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo541972_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=9863" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=41423&amp;repquote=541972&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 541972)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_32"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid542664" summary="pid542664" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=9861" target="_blank" id="userinfo542664" class="dropmenu" onmouseover="showMenu(this.id)">canaanyy</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">严肃不正经</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=9861">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=9861&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_33" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum542664" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=41423&page=1#pid542664', '话题链接已经复制到剪贴板')">34楼</strong>
													<em onclick="$('postmessage_542664').className='t_bigfont'">大</em>							<em onclick="$('postmessage_542664').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_542664').className='t_smallfont'">小</em>												发表于 2010-4-1 09:49&nbsp;																					<a href="viewthread.php?tid=41423&amp;page=1&amp;authorid=9861" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_33"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_33"></div><div id="ad_thread4_33"></div>
						
						
																											<div id="postmessage_542664" class="t_msgfont">少用吧 那就 虚拟机是个方法</div>

							
							
							
							
															<div id="post_rate_div_542664"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo542664_menu" style="display: none;">
										<div class="imicons">
													<a target='_blank' href='http://settings.messenger.live.com/Conversation/IMMe.aspx?invitee=canaanyy@hotmail.com&mkt=zh-cn'><img style='border-style: none;' src='http://messenger.services.live.com/users/canaanyy@hotmail.com/presenceimage?mkt=zh-cn' width='16' height='16' /></a>
												<a href="http://wpa.qq.com/msgrd?V=1&amp;Uin=328143865&amp;Site=1984bbs.com&amp;Menu=yes" target="_blank"><img src="images/default/qq.gif" alt="QQ" /></a>												<a href="http://edit.yahoo.com/config/send_webmesg?.target=canaanyy@yahoo.cn&amp;.src=pg" target="_blank"><img src="images/default/yahoo.gif" alt="Yahoo!"  /></a>											</div>
										<dl></dl>
											<p><a href="http://www.google.com/profiles/canaanyy" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=9861" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=41423&amp;repquote=542664&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 542664)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_33"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid543693" summary="pid543693" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12857" target="_blank" id="userinfo543693" class="dropmenu" onmouseover="showMenu(this.id)">平安剑客</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">少跟我扯民主的淡！漫漫人生，无解的时代，幸而一路有SIS和18P2P相伴。</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12857">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12857&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_34" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum543693" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=41423&page=1#pid543693', '话题链接已经复制到剪贴板')">35楼</strong>
													<em onclick="$('postmessage_543693').className='t_bigfont'">大</em>							<em onclick="$('postmessage_543693').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_543693').className='t_smallfont'">小</em>												发表于 2010-4-1 21:43&nbsp;																					<a href="viewthread.php?tid=41423&amp;page=1&amp;authorid=12857" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_34"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_34"></div><div id="ad_thread4_34"></div>
						
						
																											<div id="postmessage_543693" class="t_msgfont">照用不误，不爽的话请我去喝茶吧！</div>

							
							
							
							
															<div id="post_rate_div_543693"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo543693_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=12857" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=41423&amp;repquote=543693&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 543693)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_34"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid543697" summary="pid543697" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7176" target="_blank" id="userinfo543697" class="dropmenu" onmouseover="showMenu(this.id)">illus4</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">沉默的大多数</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7176">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7176&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_35" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum543697" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=41423&page=1#pid543697', '话题链接已经复制到剪贴板')">36楼</strong>
													<em onclick="$('postmessage_543697').className='t_bigfont'">大</em>							<em onclick="$('postmessage_543697').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_543697').className='t_smallfont'">小</em>												发表于 2010-4-1 21:44&nbsp;																					<a href="viewthread.php?tid=41423&amp;page=1&amp;authorid=7176" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_35"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_35"></div><div id="ad_thread4_35"></div>
						
						
																											<div id="postmessage_543697" class="t_msgfont">装入沙盘，限制目录的访问</div>

							
							
							
							
															<div id="post_rate_div_543697"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo543697_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=7176" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=41423&amp;repquote=543697&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 543697)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_35"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid544985" summary="pid544985" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8709" target="_blank" id="userinfo544985" class="dropmenu" onmouseover="showMenu(this.id)">szdos</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8709">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8709&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_36" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum544985" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=41423&page=1#pid544985', '话题链接已经复制到剪贴板')">37楼</strong>
													<em onclick="$('postmessage_544985').className='t_bigfont'">大</em>							<em onclick="$('postmessage_544985').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_544985').className='t_smallfont'">小</em>												发表于 2010-4-2 17:13&nbsp;																					<a href="viewthread.php?tid=41423&amp;page=1&amp;authorid=8709" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_36"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_36"></div><div id="ad_thread4_36"></div>
						
						
																											<div id="postmessage_544985" class="t_msgfont">pidgin+otr，把聊天信息加密</div>

							
							
							
							
															<div id="post_rate_div_544985"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo544985_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=8709" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=41423&amp;repquote=544985&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 544985)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_36"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid548755" summary="pid548755" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=5548" target="_blank" id="userinfo548755" class="dropmenu" onmouseover="showMenu(this.id)">伞兵游泳</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">说羽有奇功，舜亦重瞳。</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=5548">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=5548&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_37" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum548755" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=41423&page=1#pid548755', '话题链接已经复制到剪贴板')">38楼</strong>
													<em onclick="$('postmessage_548755').className='t_bigfont'">大</em>							<em onclick="$('postmessage_548755').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_548755').className='t_smallfont'">小</em>												发表于 2010-4-5 11:31&nbsp;																					<a href="viewthread.php?tid=41423&amp;page=1&amp;authorid=5548" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_37"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_37"></div><div id="ad_thread4_37"></div>
						
						
																											<div id="postmessage_548755" class="t_msgfont">webQQ怎么样？这个总会好很多吧？</div>

							
							
							
							
															<div id="post_rate_div_548755"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo548755_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=5548" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=41423&amp;repquote=548755&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 548755)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_37"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid548775" summary="pid548775" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10662" target="_blank" id="userinfo548775" class="dropmenu" onmouseover="showMenu(this.id)">Omnipotentgod</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10662">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10662&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_38" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum548775" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=41423&page=1#pid548775', '话题链接已经复制到剪贴板')">39楼</strong>
													<em onclick="$('postmessage_548775').className='t_bigfont'">大</em>							<em onclick="$('postmessage_548775').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_548775').className='t_smallfont'">小</em>												发表于 2010-4-5 11:45&nbsp;																					<a href="viewthread.php?tid=41423&amp;page=1&amp;authorid=10662" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_38"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_38"></div><div id="ad_thread4_38"></div>
						
						
																											<div id="postmessage_548775" class="t_msgfont">web qq最好</div>

							
							
							
							
															<div id="post_rate_div_548775"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo548775_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=10662" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=41423&amp;repquote=548775&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 548775)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_38"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid548998" summary="pid548998" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2476" target="_blank" id="userinfo548998" class="dropmenu" onmouseover="showMenu(this.id)">四不象</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2476">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2476&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_39" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum548998" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=41423&page=1#pid548998', '话题链接已经复制到剪贴板')">40楼</strong>
													<em onclick="$('postmessage_548998').className='t_bigfont'">大</em>							<em onclick="$('postmessage_548998').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_548998').className='t_smallfont'">小</em>												发表于 2010-4-5 13:30&nbsp;																					<a href="viewthread.php?tid=41423&amp;page=1&amp;authorid=2476" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_39"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_39"></div><div id="ad_thread4_39"></div>
						
						
																											<div id="postmessage_548998" class="t_msgfont">MirandaQQ</div>

							
							
							
							
															<div id="post_rate_div_548998"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo548998_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=2476" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=41423&amp;repquote=548998&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 548998)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_39"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid549180" summary="pid549180" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=3811" target="_blank" id="userinfo549180" class="dropmenu" onmouseover="showMenu(this.id)">day7th</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=3811">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=3811&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_40" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum549180" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=41423&page=1#pid549180', '话题链接已经复制到剪贴板')">41楼</strong>
													<em onclick="$('postmessage_549180').className='t_bigfont'">大</em>							<em onclick="$('postmessage_549180').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_549180').className='t_smallfont'">小</em>												发表于 2010-4-5 15:51&nbsp;																					<a href="viewthread.php?tid=41423&amp;page=1&amp;authorid=3811" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_40"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_40"></div><div id="ad_thread4_40"></div>
						
						
																											<div id="postmessage_549180" class="t_msgfont">web qq</div>

							
							
							
							
															<div id="post_rate_div_549180"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo549180_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=3811" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=41423&amp;repquote=549180&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 549180)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_40"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid549350" summary="pid549350" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12914" target="_blank" id="userinfo549350" class="dropmenu" onmouseover="showMenu(this.id)">drla</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">La Gioconda</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12914">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12914&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_41" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum549350" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=41423&page=1#pid549350', '话题链接已经复制到剪贴板')">42楼</strong>
													<em onclick="$('postmessage_549350').className='t_bigfont'">大</em>							<em onclick="$('postmessage_549350').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_549350').className='t_smallfont'">小</em>												发表于 2010-4-5 17:31&nbsp;																					<a href="viewthread.php?tid=41423&amp;page=1&amp;authorid=12914" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_41"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_41"></div><div id="ad_thread4_41"></div>
						
						
																											<div id="postmessage_549350" class="t_msgfont">換GTALK 試下</div>

							
							
							
							
															<div id="post_rate_div_549350"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo549350_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=12914" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=41423&amp;repquote=549350&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 549350)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_41"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid550249" summary="pid550249" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2684" target="_blank" id="userinfo550249" class="dropmenu" onmouseover="showMenu(this.id)">soundofu</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2684">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2684&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_42" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum550249" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=41423&page=1#pid550249', '话题链接已经复制到剪贴板')">43楼</strong>
													<em onclick="$('postmessage_550249').className='t_bigfont'">大</em>							<em onclick="$('postmessage_550249').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_550249').className='t_smallfont'">小</em>												发表于 2010-4-6 07:44&nbsp;																					<a href="viewthread.php?tid=41423&amp;page=1&amp;authorid=2684" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_42"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_42"></div><div id="ad_thread4_42"></div>
						
						
																											<div id="postmessage_550249" class="t_msgfont">WebQQ是明文传输，抓包就能看到内容。</div>

							
							
							
							
															<div id="post_rate_div_550249"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo550249_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=2684" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=41423&amp;repquote=550249&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 550249)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_42"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid550491" summary="pid550491" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=5548" target="_blank" id="userinfo550491" class="dropmenu" onmouseover="showMenu(this.id)">伞兵游泳</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">说羽有奇功，舜亦重瞳。</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=5548">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=5548&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_43" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum550491" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=41423&page=1#pid550491', '话题链接已经复制到剪贴板')">44楼</strong>
													<em onclick="$('postmessage_550491').className='t_bigfont'">大</em>							<em onclick="$('postmessage_550491').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_550491').className='t_smallfont'">小</em>												发表于 2010-4-6 11:02&nbsp;																					<a href="viewthread.php?tid=41423&amp;page=1&amp;authorid=5548" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_43"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_43"></div><div id="ad_thread4_43"></div>
						
						
																											<div id="postmessage_550491" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>四不象</i> 于 2010-4-5 13:30 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=548998&amp;ptid=41423" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
MirandaQQ </blockquote></div>这个搜搜去，有人评测了吗？我不懂</div>

							
							
							
							
															<div id="post_rate_div_550491"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo550491_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=5548" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=41423&amp;repquote=550491&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 550491)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_43"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid550500" summary="pid550500" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2213" target="_blank" id="userinfo550500" class="dropmenu" onmouseover="showMenu(this.id)">核子力量</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">Twitter.com/hzpower</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2213">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2213&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_44" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum550500" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=41423&page=1#pid550500', '话题链接已经复制到剪贴板')">45楼</strong>
													<em onclick="$('postmessage_550500').className='t_bigfont'">大</em>							<em onclick="$('postmessage_550500').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_550500').className='t_smallfont'">小</em>												发表于 2010-4-6 11:05&nbsp;																					<a href="viewthread.php?tid=41423&amp;page=1&amp;authorid=2213" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_44"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_44"></div><div id="ad_thread4_44"></div>
						
						
																											<div id="postmessage_550500" class="t_msgfont">我用的miranda登陆不上qq啊，试了几个插件都不行</div>

							
							
							
							
															<div id="post_rate_div_550500"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo550500_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://twitter.com/hzpower" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=2213" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=41423&amp;repquote=550500&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 550500)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_44"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid553444" summary="pid553444" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=4133" target="_blank" id="userinfo553444" class="dropmenu" onmouseover="showMenu(this.id)">很想吃花生</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=4133">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=4133&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_45" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum553444" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=41423&page=1#pid553444', '话题链接已经复制到剪贴板')">46楼</strong>
													<em onclick="$('postmessage_553444').className='t_bigfont'">大</em>							<em onclick="$('postmessage_553444').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_553444').className='t_smallfont'">小</em>												发表于 2010-4-7 21:45&nbsp;																					<a href="viewthread.php?tid=41423&amp;page=1&amp;authorid=4133" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_45"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_45"></div><div id="ad_thread4_45"></div>
						
						
																											<div id="postmessage_553444" class="t_msgfont"><a href="http://ep.cbifamily.com/2010/05/9/116053.html" target="_blank">http://ep.cbifamily.com/2010/05/9/116053.html</a><br />
这里。三招避免QQ再扫描自己的文件</div>

							
							
							
							
															<div id="post_rate_div_553444"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo553444_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=4133" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=41423&amp;repquote=553444&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 553444)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_45"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid553445" summary="pid553445" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=4133" target="_blank" id="userinfo553445" class="dropmenu" onmouseover="showMenu(this.id)">很想吃花生</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=4133">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=4133&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_46" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum553445" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=41423&page=1#pid553445', '话题链接已经复制到剪贴板')">47楼</strong>
													<em onclick="$('postmessage_553445').className='t_bigfont'">大</em>							<em onclick="$('postmessage_553445').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_553445').className='t_smallfont'">小</em>												发表于 2010-4-7 21:45&nbsp;																					<a href="viewthread.php?tid=41423&amp;page=1&amp;authorid=4133" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_46"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_46"></div><div id="ad_thread4_46"></div>
						
						
																											<div id="postmessage_553445" class="t_msgfont">有详细的操作方法。</div>

							
							
							
							
															<div id="post_rate_div_553445"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo553445_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=4133" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=41423&amp;repquote=553445&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 553445)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_46"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid554284" summary="pid554284" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=3308" target="_blank" id="userinfo554284" class="dropmenu" onmouseover="showMenu(this.id)">天衢居士</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">一小撮各種不明真相</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=3308">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=3308&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_47" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum554284" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=41423&page=1#pid554284', '话题链接已经复制到剪贴板')">48楼</strong>
													<em onclick="$('postmessage_554284').className='t_bigfont'">大</em>							<em onclick="$('postmessage_554284').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_554284').className='t_smallfont'">小</em>												发表于 2010-4-8 14:19&nbsp;																					<a href="viewthread.php?tid=41423&amp;page=1&amp;authorid=3308" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_47"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_47"></div><div id="ad_thread4_47"></div>
						
						
																											<div id="postmessage_554284" class="t_msgfont">Comodo限制 差不多就安全了</div>

							
							
							
							
															<div id="post_rate_div_554284"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo554284_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=3308" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=41423&amp;repquote=554284&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 554284)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_47"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid555122" summary="pid555122" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6743" target="_blank" id="userinfo555122" class="dropmenu" onmouseover="showMenu(this.id)">鼠标土豆</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">古典自由主义土豆</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6743">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6743&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_48" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum555122" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=41423&page=1#pid555122', '话题链接已经复制到剪贴板')">49楼</strong>
													<em onclick="$('postmessage_555122').className='t_bigfont'">大</em>							<em onclick="$('postmessage_555122').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_555122').className='t_smallfont'">小</em>												发表于 2010-4-8 22:40&nbsp;																					<a href="viewthread.php?tid=41423&amp;page=1&amp;authorid=6743" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_48"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_48"></div><div id="ad_thread4_48"></div>
						
						
																											<div id="postmessage_555122" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>阴影之剑</i> 于 2010-3-29 14:47 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=537838&amp;ptid=41423" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
COMODO<br />
较简单的设法：<br />
将其设为被隔离的应用程序<br />
然后详细栏里设置禁止访问物理磁盘，禁止挂钩子，禁止内存间访问，禁止加载驱动。并将其设为一直在沙盒里运行。 </blockquote></div>请问在沙盒里是设置为不信任、限制级、低权限还是无限制级别？</div>

							
							
							
							
															<div id="post_rate_div_555122"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo555122_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=6743" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=41423&amp;repquote=555122&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 555122)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_48"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid555149" summary="pid555149" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6743" target="_blank" id="userinfo555149" class="dropmenu" onmouseover="showMenu(this.id)">鼠标土豆</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">古典自由主义土豆</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6743">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6743&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_49" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum555149" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=41423&page=1#pid555149', '话题链接已经复制到剪贴板')">50楼</strong>
													<em onclick="$('postmessage_555149').className='t_bigfont'">大</em>							<em onclick="$('postmessage_555149').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_555149').className='t_smallfont'">小</em>												发表于 2010-4-8 23:00&nbsp;																					<a href="viewthread.php?tid=41423&amp;page=1&amp;authorid=6743" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_49"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_49"></div><div id="ad_thread4_49"></div>
						
						
																											<div id="postmessage_555149" class="t_msgfont">还有，怎么确定它是在沙盒里了？我看了任务管理器，应用程序里是找不到，但进程里还是有的</div>

							
							
							
							
															<div id="post_rate_div_555149"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo555149_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=6743" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=41423&amp;repquote=555149&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 555149)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_49"></div>				</div>
			</td>
		</tr>
		</table>
		</div>
</form>





<div class="pages_btns">
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=41423&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=41423&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
	<div class="pages"><em>&nbsp;55&nbsp;</em><strong>1</strong><a href="viewthread.php?tid=41423&amp;extra=&amp;page=2">2</a><a href="viewthread.php?tid=41423&amp;extra=&amp;page=2" class="next">&rsaquo;&rsaquo;</a></div>			<span class="postbtn" id="newspecialtmp" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=41423&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

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

	<form method="post" id="postform" action="post.php?action=reply&amp;fid=26&amp;tid=41423&amp;extra=&amp;replysubmit=yes" onSubmit="return validate(this)">
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
			window.location = 'viewthread.php?tid=41423&page=2';
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
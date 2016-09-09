<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<title>昨晚小组遭DDOS攻击，导致宕机 - 国家局域网研究所 -  1984bbs.com </title>
<meta name="keywords" content="" />
<meta name="MSSmartTagsPreventParsing" content="True" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<link rel="archives" title="1984bbs.com" href="https://1984bbs.com/archiver/" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_viewthread.css" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_common.css" />
<script type="text/javascript">
	var discuz_uid = 13019;var IMGDIR = 'images/default';var attackevasive = '0';var gid = 0;var STYLEID = '1';
	gid = parseInt('3');var fid = parseInt('26');var tid = parseInt('21370');
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
			<p><a href="index.php" id="forumlist" onmouseover="showMenu(this.id)" class="dropmenu">1984bbs.com</a> &raquo; <a href="forumdisplay.php?fid=26">国家局域网研究所</a> &raquo; 昨晚小组遭DDOS攻击，导致宕机</p>
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
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=21370&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=21370&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
	<div class="pages"><em>&nbsp;51&nbsp;</em><strong>1</strong><a href="viewthread.php?tid=21370&amp;extra=&amp;page=2">2</a><a href="viewthread.php?tid=21370&amp;extra=&amp;page=2" class="next">&rsaquo;&rsaquo;</a></div>			<span class="postbtn" id="newspecial" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=21370&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

	<ul class="popupmenu_popup newspecialmenu" id="newspecial_menu" style="display: none">
		<li><a href="post.php?action=newthread&amp;fid=26&amp;extra=">发新话题</a></li>
		<li class="poll"><a href="post.php?action=newthread&amp;fid=26&amp;extra=&amp;special=1">发布投票</a></li>													</ul>

<form method="post" name="modactions">
	<input type="hidden" name="formhash" value="823c9fa2" />
	<div class="mainbox viewthread">
		<span class="headactions">
					<a href="my.php?item=favorites&amp;tid=21370" id="ajax_favorite" onclick="ajaxmenu(event, this.id, 3000, 0)">收藏</a>
			<a href="my.php?item=subscriptions&amp;subadd=21370" id="ajax_subscription" onclick="ajaxmenu(event, this.id, 3000, null, 0)">订阅</a>
			<a href="misc.php?action=emailfriend&amp;tid=21370" id="emailfriend" onclick="ajaxmenu(event, this.id, 9000000, null, 0)">推荐</a>
				<a href="viewthread.php?action=printable&amp;tid=21370" target="_blank" class="notabs">打印</a>
				</span>
		<h1>昨晚小组遭DDOS攻击，导致宕机		</h1>
							<table id="pid226342" summary="pid226342" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1960" target="_blank" id="userinfo226342" class="dropmenu" onmouseover="showMenu(this.id)">库存袈裟</a></cite>
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
						<strong title="复制话题链接到剪贴板" id="postnum226342" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=21370&page=1#pid226342', '话题链接已经复制到剪贴板')">1楼</strong>
													<em onclick="$('postmessage_226342').className='t_bigfont'">大</em>							<em onclick="$('postmessage_226342').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_226342').className='t_smallfont'">小</em>												发表于 2009-9-4 09:30&nbsp;																					<a href="viewthread.php?tid=21370&amp;page=1&amp;authorid=1960" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_0"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_0"></div><div id="ad_thread4_0"></div>
													<h2>昨晚小组遭DDOS攻击，导致宕机</h2>
						
						
																											<div id="postmessage_226342" class="t_msgfont">小组昨晚22：30左右被服务商关闭，原因是CPU利用率超过100%，经查证由大量DDOS攻击引起。<br />
<br />
<br />
服务商来信：We received <strong>heavy</strong> DDOS on your account.<br />
<br />
<br />
另：今晚24点小组将关闭三个小时，进行数据转移。</div>

							
							
							
							
															<div id="post_rate_div_226342"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo226342_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1960" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=21370&amp;repquote=226342&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 226342)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_0"></div>				</div>
			</td>
		</tr>
		</table>
		</div><div class="ad_column" id="ad_interthread"><a href="/viewthread.php?tid=54699" target="_blank" style="color:red;">1984bbs是一个非营利项目，它需要您的捐助！</font></a>		</div>
	<div class="mainbox viewthread">
			<table id="pid226350" summary="pid226350" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1752" target="_blank" id="userinfo226350" class="dropmenu" onmouseover="showMenu(this.id)">peteryang84</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1752">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1752&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_1" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum226350" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=21370&page=1#pid226350', '话题链接已经复制到剪贴板')">2楼</strong>
													<em onclick="$('postmessage_226350').className='t_bigfont'">大</em>							<em onclick="$('postmessage_226350').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_226350').className='t_smallfont'">小</em>												发表于 2009-9-4 09:32&nbsp;																					<a href="viewthread.php?tid=21370&amp;page=1&amp;authorid=1752" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_1"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_1"></div><div id="ad_thread4_1"></div>
						
						
																											<div id="postmessage_226350" class="t_msgfont">查查IP</div>

							
							
							
							
															<div id="post_rate_div_226350"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo226350_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1752" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=21370&amp;repquote=226350&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 226350)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_1"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid226351" summary="pid226351" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2232" target="_blank" id="userinfo226351" class="dropmenu" onmouseover="showMenu(this.id)">老杂疫</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">猪流感携带者</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2232">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2232&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_2" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum226351" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=21370&page=1#pid226351', '话题链接已经复制到剪贴板')">3楼</strong>
													<em onclick="$('postmessage_226351').className='t_bigfont'">大</em>							<em onclick="$('postmessage_226351').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_226351').className='t_smallfont'">小</em>												发表于 2009-9-4 09:32&nbsp;																					<a href="viewthread.php?tid=21370&amp;page=1&amp;authorid=2232" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_2"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_2"></div><div id="ad_thread4_2"></div>
						
						
																											<div id="postmessage_226351" class="t_msgfont">来自哪里的三股势力？</div>

							
							
							
							
															<div id="post_rate_div_226351"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo226351_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=2232" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=21370&amp;repquote=226351&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 226351)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_2"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid226357" summary="pid226357" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1416" target="_blank" id="userinfo226357" class="dropmenu" onmouseover="showMenu(this.id)">nicky_hk</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">烤鸭党粉丝，十二点党粉丝.</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1416">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1416&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_3" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum226357" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=21370&page=1#pid226357', '话题链接已经复制到剪贴板')">4楼</strong>
													<em onclick="$('postmessage_226357').className='t_bigfont'">大</em>							<em onclick="$('postmessage_226357').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_226357').className='t_smallfont'">小</em>												发表于 2009-9-4 09:40&nbsp;																					<a href="viewthread.php?tid=21370&amp;page=1&amp;authorid=1416" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_3"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_3"></div><div id="ad_thread4_3"></div>
						
						
																											<div id="postmessage_226357" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>老杂疫</i> 于 2009-9-4 09:32 发表 <a href="http://1984bbs.com/redirect.php?goto=findpost&amp;pid=226351&amp;ptid=21370" target="_blank"><img src="http://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
来自哪里的三股势力？ </blockquote></div>势力可不止三股！！</div>

							
							
							
							
															<div id="post_rate_div_226357"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo226357_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1416" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=21370&amp;repquote=226357&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 226357)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_3"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid226360" summary="pid226360" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1770" target="_blank" id="userinfo226360" class="dropmenu" onmouseover="showMenu(this.id)">nustbobo</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">不明真相的群众，目睹俯卧撑、躲猫猫、撞墙死、临时工等一系列怪</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1770">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1770&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_4" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum226360" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=21370&page=1#pid226360', '话题链接已经复制到剪贴板')">5楼</strong>
													<em onclick="$('postmessage_226360').className='t_bigfont'">大</em>							<em onclick="$('postmessage_226360').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_226360').className='t_smallfont'">小</em>												发表于 2009-9-4 09:41&nbsp;																					<a href="viewthread.php?tid=21370&amp;page=1&amp;authorid=1770" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_4"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_4"></div><div id="ad_thread4_4"></div>
						
						
																											<div id="postmessage_226360" class="t_msgfont">境内三股势力：五毛，脑残，公物猿</div>

							
							
							
							
															<div id="post_rate_div_226360"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo226360_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1770" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=21370&amp;repquote=226360&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 226360)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_4"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid226365" summary="pid226365" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=169" target="_blank" id="userinfo226365" class="dropmenu" onmouseover="showMenu(this.id)">抑扬</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">小组男客服（Twitter @yiang_） </p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=169">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=169&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_5" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum226365" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=21370&page=1#pid226365', '话题链接已经复制到剪贴板')">6楼</strong>
													<em onclick="$('postmessage_226365').className='t_bigfont'">大</em>							<em onclick="$('postmessage_226365').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_226365').className='t_smallfont'">小</em>												发表于 2009-9-4 09:44&nbsp;																					<a href="viewthread.php?tid=21370&amp;page=1&amp;authorid=169" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_5"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_5"></div><div id="ad_thread4_5"></div>
						
						
																											<div id="postmessage_226365" class="t_msgfont">裟哥辛苦，像裟哥这么勤劳朴实善良又懂技术的帅哥一定能找个林志玲那样的老婆</div>

							
							
							
							
															<div id="post_rate_div_226365"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo226365_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=169" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=21370&amp;repquote=226365&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 226365)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_5"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid226368" summary="pid226368" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7871" target="_blank" id="userinfo226368" class="dropmenu" onmouseover="showMenu(this.id)">不死的流年</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">我的人生理想是：做一个靠谱的人！</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7871">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7871&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_6" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum226368" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=21370&page=1#pid226368', '话题链接已经复制到剪贴板')">7楼</strong>
													<em onclick="$('postmessage_226368').className='t_bigfont'">大</em>							<em onclick="$('postmessage_226368').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_226368').className='t_smallfont'">小</em>												发表于 2009-9-4 09:45&nbsp;																					<a href="viewthread.php?tid=21370&amp;page=1&amp;authorid=7871" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_6"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_6"></div><div id="ad_thread4_6"></div>
						
						
																											<div id="postmessage_226368" class="t_msgfont">袈裟们辛苦了。</div>

							
							
							
							
															<div id="post_rate_div_226368"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo226368_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=7871" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=21370&amp;repquote=226368&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 226368)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_6"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid226382" summary="pid226382" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=5588" target="_blank" id="userinfo226382" class="dropmenu" onmouseover="showMenu(this.id)">我家旺财有喜了</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=5588">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=5588&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_7" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum226382" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=21370&page=1#pid226382', '话题链接已经复制到剪贴板')">8楼</strong>
													<em onclick="$('postmessage_226382').className='t_bigfont'">大</em>							<em onclick="$('postmessage_226382').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_226382').className='t_smallfont'">小</em>												发表于 2009-9-4 09:55&nbsp;																					<a href="viewthread.php?tid=21370&amp;page=1&amp;authorid=5588" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_7"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_7"></div><div id="ad_thread4_7"></div>
						
						
																											<div id="postmessage_226382" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>抑扬</i> 于 2009-9-4 09:44 发表 <a href="http://1984bbs.com/redirect.php?goto=findpost&amp;pid=226365&amp;ptid=21370" target="_blank"><img src="http://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
裟哥辛苦，像裟哥这么勤劳朴实善良又懂技术的帅哥一定能找个林志玲那样的老婆 </blockquote></div>哈哈<br />
<br />
你还要看人家受得了那娃娃音不</div>

							
							
							
							
															<div id="post_rate_div_226382"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo226382_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=5588" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=21370&amp;repquote=226382&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 226382)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_7"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid226389" summary="pid226389" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6603" target="_blank" id="userinfo226389" class="dropmenu" onmouseover="showMenu(this.id)">aniu0917</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">我不是火星人</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6603">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6603&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_8" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum226389" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=21370&page=1#pid226389', '话题链接已经复制到剪贴板')">9楼</strong>
													<em onclick="$('postmessage_226389').className='t_bigfont'">大</em>							<em onclick="$('postmessage_226389').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_226389').className='t_smallfont'">小</em>												发表于 2009-9-4 10:01&nbsp;																					<a href="viewthread.php?tid=21370&amp;page=1&amp;authorid=6603" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_8"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_8"></div><div id="ad_thread4_8"></div>
						
						
																											<div id="postmessage_226389" class="t_msgfont">怪不得我昨晚上不了 嚇我一跳</div>

							
							
							
							
															<div id="post_rate_div_226389"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo226389_menu" style="display: none;">
										<div class="imicons">
													<a target='_blank' href='http://settings.messenger.live.com/Conversation/IMMe.aspx?invitee=minotaur.niu@hotmail.com&mkt=zh-cn'><img style='border-style: none;' src='http://messenger.services.live.com/users/minotaur.niu@hotmail.com/presenceimage?mkt=zh-cn' width='16' height='16' /></a>
																																			</div>
										<dl></dl>
										<p><a href="space.php?uid=6603" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=21370&amp;repquote=226389&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 226389)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_8"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid226400" summary="pid226400" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=3932" target="_blank" id="userinfo226400" class="dropmenu" onmouseover="showMenu(this.id)">magicbully</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=3932">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=3932&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_9" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum226400" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=21370&page=1#pid226400', '话题链接已经复制到剪贴板')">10楼</strong>
													<em onclick="$('postmessage_226400').className='t_bigfont'">大</em>							<em onclick="$('postmessage_226400').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_226400').className='t_smallfont'">小</em>												发表于 2009-9-4 10:06&nbsp;																					<a href="viewthread.php?tid=21370&amp;page=1&amp;authorid=3932" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_9"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_9"></div><div id="ad_thread4_9"></div>
						
						
																											<div id="postmessage_226400" class="t_msgfont">辛苦了！</div>

							
							
							
							
															<div id="post_rate_div_226400"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo226400_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=3932" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=21370&amp;repquote=226400&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 226400)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_9"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid226409" summary="pid226409" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7" target="_blank" id="userinfo226409" class="dropmenu" onmouseover="showMenu(this.id)">张书记</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">http://twitter.com/SecretaryZhang</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_10" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum226409" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=21370&page=1#pid226409', '话题链接已经复制到剪贴板')">11楼</strong>
													<em onclick="$('postmessage_226409').className='t_bigfont'">大</em>							<em onclick="$('postmessage_226409').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_226409').className='t_smallfont'">小</em>												发表于 2009-9-4 10:09&nbsp;																					<a href="viewthread.php?tid=21370&amp;page=1&amp;authorid=7" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_10"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_10"></div><div id="ad_thread4_10"></div>
						
						
																											<div id="postmessage_226409" class="t_msgfont">昨晚手机没电忘冲，今早手机忘带……</div>

							
							
							
							
															<div id="post_rate_div_226409"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo226409_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=7" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=21370&amp;repquote=226409&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 226409)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_10"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid226414" summary="pid226414" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1945" target="_blank" id="userinfo226414" class="dropmenu" onmouseover="showMenu(this.id)">guankeng</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1945">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1945&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_11" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum226414" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=21370&page=1#pid226414', '话题链接已经复制到剪贴板')">12楼</strong>
													<em onclick="$('postmessage_226414').className='t_bigfont'">大</em>							<em onclick="$('postmessage_226414').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_226414').className='t_smallfont'">小</em>												发表于 2009-9-4 10:13&nbsp;																					<a href="viewthread.php?tid=21370&amp;page=1&amp;authorid=1945" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_11"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_11"></div><div id="ad_thread4_11"></div>
						
						
																											<div id="postmessage_226414" class="t_msgfont">是說</div>

							
							
							
							
															<div id="post_rate_div_226414"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo226414_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1945" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=21370&amp;repquote=226414&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 226414)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_11"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid226428" summary="pid226428" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1906" target="_blank" id="userinfo226428" class="dropmenu" onmouseover="showMenu(this.id)">大祥云</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">松下问童子　　　　　　　　言师采药去　　　　　　　　只在此山中　　　　　　　　云深不知处</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1906">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1906&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_12" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum226428" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=21370&page=1#pid226428', '话题链接已经复制到剪贴板')">13楼</strong>
													<em onclick="$('postmessage_226428').className='t_bigfont'">大</em>							<em onclick="$('postmessage_226428').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_226428').className='t_smallfont'">小</em>												发表于 2009-9-4 10:20&nbsp;																					<a href="viewthread.php?tid=21370&amp;page=1&amp;authorid=1906" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_12"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_12"></div><div id="ad_thread4_12"></div>
						
						
																											<div id="postmessage_226428" class="t_msgfont">“CPU利用率超过100%”……-_-</div>

							
							
							
							
															<div id="post_rate_div_226428"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo226428_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1906" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=21370&amp;repquote=226428&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 226428)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_12"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid226437" summary="pid226437" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7101" target="_blank" id="userinfo226437" class="dropmenu" onmouseover="showMenu(this.id)">george</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">思想罪在逃犯　　　　　　　大洋之声轮值DJ</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7101">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7101&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_13" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum226437" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=21370&page=1#pid226437', '话题链接已经复制到剪贴板')">14楼</strong>
													<em onclick="$('postmessage_226437').className='t_bigfont'">大</em>							<em onclick="$('postmessage_226437').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_226437').className='t_smallfont'">小</em>												发表于 2009-9-4 10:25&nbsp;																					<a href="viewthread.php?tid=21370&amp;page=1&amp;authorid=7101" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_13"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_13"></div><div id="ad_thread4_13"></div>
						
						
																											<div id="postmessage_226437" class="t_msgfont">TG干的？可是TG想干掉小组直接封锁不久行了？当然了，这里的都是会翻墙的。。。。。。<br />
既然是DDOS，查IP是没用的，是大量IP干的，而且那些都是肉鸡。</div>

							
							
							
							
															<div id="post_rate_div_226437"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo226437_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=7101" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=21370&amp;repquote=226437&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 226437)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_13"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid226444" summary="pid226444" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=4209" target="_blank" id="userinfo226444" class="dropmenu" onmouseover="showMenu(this.id)">atpatp</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">后清非正统，依旧让汉明</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=4209">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=4209&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_14" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum226444" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=21370&page=1#pid226444', '话题链接已经复制到剪贴板')">15楼</strong>
													<em onclick="$('postmessage_226444').className='t_bigfont'">大</em>							<em onclick="$('postmessage_226444').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_226444').className='t_smallfont'">小</em>												发表于 2009-9-4 10:31&nbsp;																					<a href="viewthread.php?tid=21370&amp;page=1&amp;authorid=4209" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_14"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_14"></div><div id="ad_thread4_14"></div>
						
						
																											<div id="postmessage_226444" class="t_msgfont">活捉林志玲，献给党中央</div>

							
							
							
							
															<div id="post_rate_div_226444"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo226444_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=4209" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=21370&amp;repquote=226444&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 226444)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_14"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid226452" summary="pid226452" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2213" target="_blank" id="userinfo226452" class="dropmenu" onmouseover="showMenu(this.id)">核子力量</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">Twitter.com/hzpower</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2213">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2213&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_15" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum226452" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=21370&page=1#pid226452', '话题链接已经复制到剪贴板')">16楼</strong>
													<em onclick="$('postmessage_226452').className='t_bigfont'">大</em>							<em onclick="$('postmessage_226452').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_226452').className='t_smallfont'">小</em>												发表于 2009-9-4 10:39&nbsp;																					<a href="viewthread.php?tid=21370&amp;page=1&amp;authorid=2213" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_15"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_15"></div><div id="ad_thread4_15"></div>
						
						
																											<div id="postmessage_226452" class="t_msgfont">手段真是鄙劣</div>

							
							
							
							
															<div id="post_rate_div_226452"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo226452_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://twitter.com/hzpower" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=2213" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=21370&amp;repquote=226452&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 226452)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_15"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid226455" summary="pid226455" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=3723" target="_blank" id="userinfo226455" class="dropmenu" onmouseover="showMenu(this.id)">mason</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">糟共糟央整治局肠胃</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=3723">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=3723&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_16" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum226455" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=21370&page=1#pid226455', '话题链接已经复制到剪贴板')">17楼</strong>
													<em onclick="$('postmessage_226455').className='t_bigfont'">大</em>							<em onclick="$('postmessage_226455').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_226455').className='t_smallfont'">小</em>												发表于 2009-9-4 10:40&nbsp;																					<a href="viewthread.php?tid=21370&amp;page=1&amp;authorid=3723" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_16"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_16"></div><div id="ad_thread4_16"></div>
						
						
																											<div id="postmessage_226455" class="t_msgfont">没事儿就好，昨晚一宿没睡好</div>

							
							
							
							
															<div id="post_rate_div_226455"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo226455_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=3723" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=21370&amp;repquote=226455&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 226455)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_16"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid226473" summary="pid226473" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=3295" target="_blank" id="userinfo226473" class="dropmenu" onmouseover="showMenu(this.id)">滴滴</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=3295">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=3295&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_17" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum226473" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=21370&page=1#pid226473', '话题链接已经复制到剪贴板')">18楼</strong>
													<em onclick="$('postmessage_226473').className='t_bigfont'">大</em>							<em onclick="$('postmessage_226473').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_226473').className='t_smallfont'">小</em>												发表于 2009-9-4 10:51&nbsp;																					<a href="viewthread.php?tid=21370&amp;page=1&amp;authorid=3295" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_17"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_17"></div><div id="ad_thread4_17"></div>
													<h2>裟哥辛苦</h2>
						
						
																											<div id="postmessage_226473" class="t_msgfont">裟哥辛苦，像裟哥这么勤劳朴实善良又懂技术的帅哥一定能找个林志玲那样的老婆</div>

							
							
							
							
															<div id="post_rate_div_226473"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo226473_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=3295" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=21370&amp;repquote=226473&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 226473)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_17"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid226487" summary="pid226487" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2908" target="_blank" id="userinfo226487" class="dropmenu" onmouseover="showMenu(this.id)">Geona</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">做人少做亏心事，路见不平吃一惊。</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2908">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2908&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_18" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum226487" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=21370&page=1#pid226487', '话题链接已经复制到剪贴板')">19楼</strong>
													<em onclick="$('postmessage_226487').className='t_bigfont'">大</em>							<em onclick="$('postmessage_226487').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_226487').className='t_smallfont'">小</em>												发表于 2009-9-4 10:59&nbsp;																					<a href="viewthread.php?tid=21370&amp;page=1&amp;authorid=2908" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_18"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_18"></div><div id="ad_thread4_18"></div>
						
						
																											<div id="postmessage_226487" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>atpatp</i> 于 2009-9-4 10:31 发表 <a href="http://1984bbs.com/redirect.php?goto=findpost&amp;pid=226444&amp;ptid=21370" target="_blank"><img src="http://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
活捉林志玲，献给党中央 </blockquote></div>+1</div>

							
							
							
							
															<div id="post_rate_div_226487"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo226487_menu" style="display: none;">
										<div class="imicons">
												<a href="http://wpa.qq.com/msgrd?V=1&amp;Uin=147850034&amp;Site=1984bbs.com&amp;Menu=yes" target="_blank"><img src="images/default/qq.gif" alt="QQ" /></a>																							</div>
										<dl></dl>
										<p><a href="space.php?uid=2908" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=21370&amp;repquote=226487&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 226487)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_18"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid226512" summary="pid226512" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7766" target="_blank" id="userinfo226512" class="dropmenu" onmouseover="showMenu(this.id)">麦圆</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">Twitter @math2gold | 惊诧的火星友邦 |  咪咪是 /math2ogld　</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7766">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7766&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_19" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum226512" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=21370&page=1#pid226512', '话题链接已经复制到剪贴板')">20楼</strong>
													<em onclick="$('postmessage_226512').className='t_bigfont'">大</em>							<em onclick="$('postmessage_226512').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_226512').className='t_smallfont'">小</em>												发表于 2009-9-4 11:13&nbsp;																					<a href="viewthread.php?tid=21370&amp;page=1&amp;authorid=7766" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_19"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_19"></div><div id="ad_thread4_19"></div>
						
						
																											<div id="postmessage_226512" class="t_msgfont">哇！小組在伟光正心中的地位又提升了……<br />
<br />
莫非我們的twitter id也是因为受到ddos才变成奇怪活动？？！</div>

							
							
							
							
															<div id="post_rate_div_226512"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo226512_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://math2gold.com/" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=7766" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=21370&amp;repquote=226512&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 226512)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_19"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid226514" summary="pid226514" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=105" target="_blank" id="userinfo226514" class="dropmenu" onmouseover="showMenu(this.id)">黄阿狗</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">金玉其内 败絮其外</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=105">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=105&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_20" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum226514" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=21370&page=1#pid226514', '话题链接已经复制到剪贴板')">21楼</strong>
													<em onclick="$('postmessage_226514').className='t_bigfont'">大</em>							<em onclick="$('postmessage_226514').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_226514').className='t_smallfont'">小</em>												发表于 2009-9-4 11:13&nbsp;																					<a href="viewthread.php?tid=21370&amp;page=1&amp;authorid=105" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_20"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_20"></div><div id="ad_thread4_20"></div>
						
						
																											<div id="postmessage_226514" class="t_msgfont">裟哥辛苦，像裟哥这么勤劳朴实善良又懂技术的帅哥一定能找个林志玲那样的老婆<br />
<br />
<br />
+1</div>

							
							
							
							
															<div id="post_rate_div_226514"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo226514_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=105" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=21370&amp;repquote=226514&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 226514)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_20"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid226525" summary="pid226525" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7766" target="_blank" id="userinfo226525" class="dropmenu" onmouseover="showMenu(this.id)">麦圆</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">Twitter @math2gold | 惊诧的火星友邦 |  咪咪是 /math2ogld　</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7766">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7766&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_21" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum226525" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=21370&page=1#pid226525', '话题链接已经复制到剪贴板')">22楼</strong>
													<em onclick="$('postmessage_226525').className='t_bigfont'">大</em>							<em onclick="$('postmessage_226525').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_226525').className='t_smallfont'">小</em>												发表于 2009-9-4 11:18&nbsp;																					<a href="viewthread.php?tid=21370&amp;page=1&amp;authorid=7766" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_21"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_21"></div><div id="ad_thread4_21"></div>
						
						
																											<div id="postmessage_226525" class="t_msgfont">研究上一批被移除的那一批id比起研究ip来源可能更容易找到答案。</div>

							
							
							
							
															<div id="post_rate_div_226525"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo226525_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://math2gold.com/" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=7766" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=21370&amp;repquote=226525&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 226525)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_21"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid226531" summary="pid226531" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7695" target="_blank" id="userinfo226531" class="dropmenu" onmouseover="showMenu(this.id)">非典型土人</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus"> 家利而怪先，国兴而妖豫</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7695">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7695&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_22" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum226531" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=21370&page=1#pid226531', '话题链接已经复制到剪贴板')">23楼</strong>
													<em onclick="$('postmessage_226531').className='t_bigfont'">大</em>							<em onclick="$('postmessage_226531').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_226531').className='t_smallfont'">小</em>												发表于 2009-9-4 11:22&nbsp;																					<a href="viewthread.php?tid=21370&amp;page=1&amp;authorid=7695" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_22"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_22"></div><div id="ad_thread4_22"></div>
						
						
																											<div id="postmessage_226531" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>george</i> 于 2009-9-4 10:25 发表 <a href="http://1984bbs.com/redirect.php?goto=findpost&amp;pid=226437&amp;ptid=21370" target="_blank"><img src="http://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
TG干的？可是TG想干掉小组直接封锁不久行了？当然了，这里的都是会翻墙的。。。。。。<br />
既然是DDOS，查IP是没用的，是大量IP干的，而且那些都是肉鸡。 </blockquote></div>既然知道封锁不行，那就用些狠招呗。</div>

							
							
							
							
															<div id="post_rate_div_226531"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo226531_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=7695" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=21370&amp;repquote=226531&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 226531)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_22"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid226532" summary="pid226532" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1413" target="_blank" id="userinfo226532" class="dropmenu" onmouseover="showMenu(this.id)">马克西</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">五毛党路边社工作委员会书记</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1413">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1413&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_23" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum226532" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=21370&page=1#pid226532', '话题链接已经复制到剪贴板')">24楼</strong>
													<em onclick="$('postmessage_226532').className='t_bigfont'">大</em>							<em onclick="$('postmessage_226532').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_226532').className='t_smallfont'">小</em>												发表于 2009-9-4 11:22&nbsp;																					<a href="viewthread.php?tid=21370&amp;page=1&amp;authorid=1413" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_23"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_23"></div><div id="ad_thread4_23"></div>
						
						
																											<div id="postmessage_226532" class="t_msgfont">还以为被封了</div>

							
							
							
							
															<div id="post_rate_div_226532"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo226532_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1413" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=21370&amp;repquote=226532&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 226532)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_23"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid226544" summary="pid226544" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=3123" target="_blank" id="userinfo226544" class="dropmenu" onmouseover="showMenu(this.id)">byxmn</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=3123">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=3123&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_24" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum226544" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=21370&page=1#pid226544', '话题链接已经复制到剪贴板')">25楼</strong>
													<em onclick="$('postmessage_226544').className='t_bigfont'">大</em>							<em onclick="$('postmessage_226544').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_226544').className='t_smallfont'">小</em>												发表于 2009-9-4 11:27&nbsp;																					<a href="viewthread.php?tid=21370&amp;page=1&amp;authorid=3123" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_24"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_24"></div><div id="ad_thread4_24"></div>
						
						
																											<div id="postmessage_226544" class="t_msgfont"><img src="http://i30.tinypic.com/aka4o2.jpg" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></div>

							
							
							
							
															<div id="post_rate_div_226544"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo226544_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=3123" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=21370&amp;repquote=226544&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 226544)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_24"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid226547" summary="pid226547" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=3349" target="_blank" id="userinfo226547" class="dropmenu" onmouseover="showMenu(this.id)">michael.zy</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">美国游客到北京旅游，不慎摔进路边的施工水沟。愤怒地说：在美国，危险场所都会竖起红旗提示的！中方导游辩解到：先生，您在入境时没见到那么大的红旗插在海关吗？</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=3349">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=3349&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_25" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum226547" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=21370&page=1#pid226547', '话题链接已经复制到剪贴板')">26楼</strong>
													<em onclick="$('postmessage_226547').className='t_bigfont'">大</em>							<em onclick="$('postmessage_226547').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_226547').className='t_smallfont'">小</em>												发表于 2009-9-4 11:29&nbsp;																					<a href="viewthread.php?tid=21370&amp;page=1&amp;authorid=3349" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_25"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_25"></div><div id="ad_thread4_25"></div>
						
						
																											<div id="postmessage_226547" class="t_msgfont">像袈裟和伟大的奋战在抗敌一线的猴子们致敬!!!!!!!</div>

							
							
							
							
															<div id="post_rate_div_226547"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo226547_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=3349" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=21370&amp;repquote=226547&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 226547)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_25"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid226552" summary="pid226552" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1571" target="_blank" id="userinfo226552" class="dropmenu" onmouseover="showMenu(this.id)">沉。</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">真●和谐无双</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1571">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1571&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_26" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum226552" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=21370&page=1#pid226552', '话题链接已经复制到剪贴板')">27楼</strong>
													<em onclick="$('postmessage_226552').className='t_bigfont'">大</em>							<em onclick="$('postmessage_226552').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_226552').className='t_smallfont'">小</em>												发表于 2009-9-4 11:32&nbsp;																					<a href="viewthread.php?tid=21370&amp;page=1&amp;authorid=1571" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_26"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_26"></div><div id="ad_thread4_26"></div>
						
						
																											<div id="postmessage_226552" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>atpatp</i> 于 2009-9-4 10:31 发表 <a href="http://1984bbs.com/redirect.php?goto=findpost&amp;pid=226444&amp;ptid=21370" target="_blank"><img src="http://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
活捉林志玲，献给党中央 </blockquote></div>+2……</div>

							
							
							
							
															<div id="post_rate_div_226552"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo226552_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1571" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=21370&amp;repquote=226552&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 226552)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_26"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid226592" summary="pid226592" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6041" target="_blank" id="userinfo226592" class="dropmenu" onmouseover="showMenu(this.id)">beny.wang</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6041">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6041&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_27" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum226592" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=21370&page=1#pid226592', '话题链接已经复制到剪贴板')">28楼</strong>
													<em onclick="$('postmessage_226592').className='t_bigfont'">大</em>							<em onclick="$('postmessage_226592').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_226592').className='t_smallfont'">小</em>												发表于 2009-9-4 11:45&nbsp;																					<a href="viewthread.php?tid=21370&amp;page=1&amp;authorid=6041" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_27"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_27"></div><div id="ad_thread4_27"></div>
						
						
																											<div id="postmessage_226592" class="t_msgfont">裟哥辛苦，像裟哥这么勤劳朴实善良又懂技术的帅哥一定能找个林志玲那样的老婆<br />
<br />
+1</div>

							
							
							
							
															<div id="post_rate_div_226592"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo226592_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=6041" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=21370&amp;repquote=226592&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 226592)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_27"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid226596" summary="pid226596" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7592" target="_blank" id="userinfo226596" class="dropmenu" onmouseover="showMenu(this.id)">雷曼兄弟</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">@trotrotro</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7592">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7592&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_28" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum226596" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=21370&page=1#pid226596', '话题链接已经复制到剪贴板')">29楼</strong>
													<em onclick="$('postmessage_226596').className='t_bigfont'">大</em>							<em onclick="$('postmessage_226596').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_226596').className='t_smallfont'">小</em>												发表于 2009-9-4 11:47&nbsp;																					<a href="viewthread.php?tid=21370&amp;page=1&amp;authorid=7592" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_28"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_28"></div><div id="ad_thread4_28"></div>
						
						
																											<div id="postmessage_226596" class="t_msgfont">辛苦了！<br />
感谢！</div>

							
							
							
							
															<div id="post_rate_div_226596"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo226596_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=7592" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=21370&amp;repquote=226596&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 226596)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_28"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid226602" summary="pid226602" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=5276" target="_blank" id="userinfo226602" class="dropmenu" onmouseover="showMenu(this.id)">周游列国</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=5276">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=5276&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_29" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum226602" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=21370&page=1#pid226602', '话题链接已经复制到剪贴板')">30楼</strong>
													<em onclick="$('postmessage_226602').className='t_bigfont'">大</em>							<em onclick="$('postmessage_226602').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_226602').className='t_smallfont'">小</em>												发表于 2009-9-4 11:49&nbsp;																					<a href="viewthread.php?tid=21370&amp;page=1&amp;authorid=5276" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_29"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_29"></div><div id="ad_thread4_29"></div>
						
						
																											<div id="postmessage_226602" class="t_msgfont">势力可不止三股！！</div>

							
							
							
							
															<div id="post_rate_div_226602"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo226602_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=5276" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=21370&amp;repquote=226602&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 226602)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_29"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid226639" summary="pid226639" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7204" target="_blank" id="userinfo226639" class="dropmenu" onmouseover="showMenu(this.id)">佐拉拉</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">鸟人</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7204">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7204&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_30" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum226639" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=21370&page=1#pid226639', '话题链接已经复制到剪贴板')">31楼</strong>
													<em onclick="$('postmessage_226639').className='t_bigfont'">大</em>							<em onclick="$('postmessage_226639').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_226639').className='t_smallfont'">小</em>												发表于 2009-9-4 12:07&nbsp;																					<a href="viewthread.php?tid=21370&amp;page=1&amp;authorid=7204" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_30"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_30"></div><div id="ad_thread4_30"></div>
						
						
																											<div id="postmessage_226639" class="t_msgfont">昨晚还以为服务器挂了</div>

							
							
							
							
															<div id="post_rate_div_226639"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo226639_menu" style="display: none;">
										<div class="imicons">
													<a target='_blank' href='http://settings.messenger.live.com/Conversation/IMMe.aspx?invitee=zhc_yj@hotmail.com&mkt=zh-cn'><img style='border-style: none;' src='http://messenger.services.live.com/users/zhc_yj@hotmail.com/presenceimage?mkt=zh-cn' width='16' height='16' /></a>
												<a href="http://wpa.qq.com/msgrd?V=1&amp;Uin=7800688&amp;Site=1984bbs.com&amp;Menu=yes" target="_blank"><img src="images/default/qq.gif" alt="QQ" /></a>																							</div>
										<dl></dl>
										<p><a href="space.php?uid=7204" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=21370&amp;repquote=226639&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 226639)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_30"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid226648" summary="pid226648" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2232" target="_blank" id="userinfo226648" class="dropmenu" onmouseover="showMenu(this.id)">老杂疫</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">猪流感携带者</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2232">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2232&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_31" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum226648" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=21370&page=1#pid226648', '话题链接已经复制到剪贴板')">32楼</strong>
													<em onclick="$('postmessage_226648').className='t_bigfont'">大</em>							<em onclick="$('postmessage_226648').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_226648').className='t_smallfont'">小</em>												发表于 2009-9-4 12:11&nbsp;																					<a href="viewthread.php?tid=21370&amp;page=1&amp;authorid=2232" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_31"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_31"></div><div id="ad_thread4_31"></div>
						
						
																											<div id="postmessage_226648" class="t_msgfont"><img src="http://i30.tinypic.com/aka4o2.jpg" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
+5……</div>

							
							
							
							
															<div id="post_rate_div_226648"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo226648_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=2232" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=21370&amp;repquote=226648&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 226648)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_31"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid226664" summary="pid226664" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=5157" target="_blank" id="userinfo226664" class="dropmenu" onmouseover="showMenu(this.id)">Len</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">烂烂 @lennyrotten</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=5157">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=5157&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_32" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum226664" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=21370&page=1#pid226664', '话题链接已经复制到剪贴板')">33楼</strong>
													<em onclick="$('postmessage_226664').className='t_bigfont'">大</em>							<em onclick="$('postmessage_226664').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_226664').className='t_smallfont'">小</em>												发表于 2009-9-4 12:21&nbsp;																					<a href="viewthread.php?tid=21370&amp;page=1&amp;authorid=5157" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_32"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_32"></div><div id="ad_thread4_32"></div>
						
						
																											<div id="postmessage_226664" class="t_msgfont">袈裟，您辛苦了！<br />
<br />
志玲同志，您也辛苦了！</div>

							
							
							
							
															<div id="post_rate_div_226664"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo226664_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=5157" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=21370&amp;repquote=226664&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 226664)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_32"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid226668" summary="pid226668" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2428" target="_blank" id="userinfo226668" class="dropmenu" onmouseover="showMenu(this.id)">xiahua</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">业余打狗爱好者。新宇大校夸我书法好，锦涛叔叔赞我觉悟高</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2428">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2428&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_33" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum226668" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=21370&page=1#pid226668', '话题链接已经复制到剪贴板')">34楼</strong>
													<em onclick="$('postmessage_226668').className='t_bigfont'">大</em>							<em onclick="$('postmessage_226668').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_226668').className='t_smallfont'">小</em>												发表于 2009-9-4 12:22&nbsp;																					<a href="viewthread.php?tid=21370&amp;page=1&amp;authorid=2428" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_33"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_33"></div><div id="ad_thread4_33"></div>
						
						
																											<div id="postmessage_226668" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>麦圆</i> 于 2009-9-4 11:18 发表 <a href="http://1984bbs.com/redirect.php?goto=findpost&amp;pid=226525&amp;ptid=21370" target="_blank"><img src="http://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
研究上一批被移除的那一批id比起研究ip来源可能更容易找到答案。 </blockquote></div>某些未移除著名ID没准就是答案</div>

							
							
							
							
															<div id="post_rate_div_226668"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo226668_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=2428" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=21370&amp;repquote=226668&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 226668)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_33"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid226670" summary="pid226670" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2930" target="_blank" id="userinfo226670" class="dropmenu" onmouseover="showMenu(this.id)">SrAcer</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">党强加于人的世界观在无法理解它的人们那里最容易被接受。——《１９８４》</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2930">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2930&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_34" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum226670" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=21370&page=1#pid226670', '话题链接已经复制到剪贴板')">35楼</strong>
													<em onclick="$('postmessage_226670').className='t_bigfont'">大</em>							<em onclick="$('postmessage_226670').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_226670').className='t_smallfont'">小</em>												发表于 2009-9-4 12:22&nbsp;																					<a href="viewthread.php?tid=21370&amp;page=1&amp;authorid=2930" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_34"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_34"></div><div id="ad_thread4_34"></div>
						
						
																											<div id="postmessage_226670" class="t_msgfont">楼上的姐姐下半身发出祥瑞之光，我也想啊，请问是怎么做到的？</div>

							
							
							
							
															<div id="post_rate_div_226670"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo226670_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=2930" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=21370&amp;repquote=226670&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 226670)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_34"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid226685" summary="pid226685" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=5454" target="_blank" id="userinfo226685" class="dropmenu" onmouseover="showMenu(this.id)">xiangbei</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">一个致力于中国民间登山的非注册登记备案松散组织——“山语社”的资深跑堂，长期承接个性出游策划设计、攀冰攀岩技术指导、高山探险协作向导等业务，欢迎来人来电洽谈</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=5454">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=5454&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_35" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum226685" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=21370&page=1#pid226685', '话题链接已经复制到剪贴板')">36楼</strong>
													<em onclick="$('postmessage_226685').className='t_bigfont'">大</em>							<em onclick="$('postmessage_226685').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_226685').className='t_smallfont'">小</em>												发表于 2009-9-4 12:30&nbsp;																					<a href="viewthread.php?tid=21370&amp;page=1&amp;authorid=5454" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_35"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_35"></div><div id="ad_thread4_35"></div>
						
						
																											<div id="postmessage_226685" class="t_msgfont">裟组擦鼻血去鸟。。。。。。</div>

							
							
							
							
															<div id="post_rate_div_226685"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo226685_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://www.shanyushe.com/" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=5454" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=21370&amp;repquote=226685&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 226685)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_35"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid226691" summary="pid226691" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=3579" target="_blank" id="userinfo226691" class="dropmenu" onmouseover="showMenu(this.id)">Candice</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">镯控</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=3579">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=3579&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_36" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum226691" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=21370&page=1#pid226691', '话题链接已经复制到剪贴板')">37楼</strong>
													<em onclick="$('postmessage_226691').className='t_bigfont'">大</em>							<em onclick="$('postmessage_226691').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_226691').className='t_smallfont'">小</em>												发表于 2009-9-4 12:32&nbsp;																					<a href="viewthread.php?tid=21370&amp;page=1&amp;authorid=3579" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_36"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_36"></div><div id="ad_thread4_36"></div>
						
						
																											<div id="postmessage_226691" class="t_msgfont">再被黑了，去哪找组织？<br />
<br />
极度郁闷！</div>

							
							
							
							
															<div id="post_rate_div_226691"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo226691_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=3579" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=21370&amp;repquote=226691&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 226691)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_36"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid226693" summary="pid226693" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8099" target="_blank" id="userinfo226693" class="dropmenu" onmouseover="showMenu(this.id)">桉树1986</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8099">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8099&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_37" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum226693" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=21370&page=1#pid226693', '话题链接已经复制到剪贴板')">38楼</strong>
													<em onclick="$('postmessage_226693').className='t_bigfont'">大</em>							<em onclick="$('postmessage_226693').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_226693').className='t_smallfont'">小</em>												发表于 2009-9-4 12:33&nbsp;																					<a href="viewthread.php?tid=21370&amp;page=1&amp;authorid=8099" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_37"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_37"></div><div id="ad_thread4_37"></div>
						
						
																											<div id="postmessage_226693" class="t_msgfont">凶兆</div>

							
							
							
							
															<div id="post_rate_div_226693"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo226693_menu" style="display: none;">
										<div class="imicons">
													<a target='_blank' href='http://settings.messenger.live.com/Conversation/IMMe.aspx?invitee=zyguan@hotmail.com&mkt=zh-cn'><img style='border-style: none;' src='http://messenger.services.live.com/users/zyguan@hotmail.com/presenceimage?mkt=zh-cn' width='16' height='16' /></a>
												<a href="http://wpa.qq.com/msgrd?V=1&amp;Uin=460867804&amp;Site=1984bbs.com&amp;Menu=yes" target="_blank"><img src="images/default/qq.gif" alt="QQ" /></a>																							</div>
										<dl></dl>
											<p><a href="http://anshu0511.blog.163.com" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=8099" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=21370&amp;repquote=226693&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 226693)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_37"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid226706" summary="pid226706" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8421" target="_blank" id="userinfo226706" class="dropmenu" onmouseover="showMenu(this.id)">hakkpin</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8421">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8421&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_38" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum226706" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=21370&page=1#pid226706', '话题链接已经复制到剪贴板')">39楼</strong>
													<em onclick="$('postmessage_226706').className='t_bigfont'">大</em>							<em onclick="$('postmessage_226706').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_226706').className='t_smallfont'">小</em>												发表于 2009-9-4 12:38&nbsp;																					<a href="viewthread.php?tid=21370&amp;page=1&amp;authorid=8421" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_38"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_38"></div><div id="ad_thread4_38"></div>
						
						
																											<div id="postmessage_226706" class="t_msgfont">真是不容易</div>

							
							
							
							
															<div id="post_rate_div_226706"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo226706_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=8421" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=21370&amp;repquote=226706&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 226706)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_38"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid226718" summary="pid226718" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6014" target="_blank" id="userinfo226718" class="dropmenu" onmouseover="showMenu(this.id)">踏雪寻梅</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6014">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6014&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_39" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum226718" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=21370&page=1#pid226718', '话题链接已经复制到剪贴板')">40楼</strong>
													<em onclick="$('postmessage_226718').className='t_bigfont'">大</em>							<em onclick="$('postmessage_226718').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_226718').className='t_smallfont'">小</em>												发表于 2009-9-4 12:45&nbsp;																					<a href="viewthread.php?tid=21370&amp;page=1&amp;authorid=6014" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_39"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_39"></div><div id="ad_thread4_39"></div>
						
						
																											<div id="postmessage_226718" class="t_msgfont">向袈裟致敬。建议加强防范措施。</div>

							
							
							
							
															<div id="post_rate_div_226718"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo226718_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=6014" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=21370&amp;repquote=226718&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 226718)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_39"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid226729" summary="pid226729" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6293" target="_blank" id="userinfo226729" class="dropmenu" onmouseover="showMenu(this.id)">此时</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6293">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6293&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_40" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum226729" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=21370&page=1#pid226729', '话题链接已经复制到剪贴板')">41楼</strong>
													<em onclick="$('postmessage_226729').className='t_bigfont'">大</em>							<em onclick="$('postmessage_226729').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_226729').className='t_smallfont'">小</em>												发表于 2009-9-4 12:48&nbsp;																					<a href="viewthread.php?tid=21370&amp;page=1&amp;authorid=6293" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_40"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_40"></div><div id="ad_thread4_40"></div>
						
						
																											<div id="postmessage_226729" class="t_msgfont">不祥啊～</div>

							
							
							
							
															<div id="post_rate_div_226729"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo226729_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=6293" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=21370&amp;repquote=226729&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 226729)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_40"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid226735" summary="pid226735" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=4872" target="_blank" id="userinfo226735" class="dropmenu" onmouseover="showMenu(this.id)">冻结的黎明</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=4872">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=4872&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_41" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum226735" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=21370&page=1#pid226735', '话题链接已经复制到剪贴板')">42楼</strong>
													<em onclick="$('postmessage_226735').className='t_bigfont'">大</em>							<em onclick="$('postmessage_226735').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_226735').className='t_smallfont'">小</em>												发表于 2009-9-4 12:52&nbsp;																					<a href="viewthread.php?tid=21370&amp;page=1&amp;authorid=4872" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_41"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_41"></div><div id="ad_thread4_41"></div>
						
						
																											<div id="postmessage_226735" class="t_msgfont">我靠，都超频了，三股势力果非浪得虚名</div>

							
							
							
							
															<div id="post_rate_div_226735"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo226735_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=4872" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=21370&amp;repquote=226735&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 226735)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_41"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid226830" summary="pid226830" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2625" target="_blank" id="userinfo226830" class="dropmenu" onmouseover="showMenu(this.id)">田丰</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2625">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2625&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_42" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum226830" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=21370&page=1#pid226830', '话题链接已经复制到剪贴板')">43楼</strong>
													<em onclick="$('postmessage_226830').className='t_bigfont'">大</em>							<em onclick="$('postmessage_226830').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_226830').className='t_smallfont'">小</em>												发表于 2009-9-4 13:35&nbsp;																					<a href="viewthread.php?tid=21370&amp;page=1&amp;authorid=2625" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_42"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_42"></div><div id="ad_thread4_42"></div>
						
						
																											<div id="postmessage_226830" class="t_msgfont">袈裟辛苦了</div>

							
							
							
							
															<div id="post_rate_div_226830"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo226830_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=2625" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=21370&amp;repquote=226830&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 226830)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_42"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid226843" summary="pid226843" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7426" target="_blank" id="userinfo226843" class="dropmenu" onmouseover="showMenu(this.id)">蒙娜豆莎</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">喜欢烤鸭党^^^^</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7426">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7426&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_43" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum226843" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=21370&page=1#pid226843', '话题链接已经复制到剪贴板')">44楼</strong>
													<em onclick="$('postmessage_226843').className='t_bigfont'">大</em>							<em onclick="$('postmessage_226843').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_226843').className='t_smallfont'">小</em>												发表于 2009-9-4 13:38&nbsp;																					<a href="viewthread.php?tid=21370&amp;page=1&amp;authorid=7426" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_43"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_43"></div><div id="ad_thread4_43"></div>
						
						
																											<div id="postmessage_226843" class="t_msgfont">袈莎帅哥辛苦了,问候 <img src="http://i27.tinypic.com/2ldty6c_th.jpg" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><img src="http://i27.tinypic.com/2ldty6c_th.jpg" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><img src="http://i27.tinypic.com/2ldty6c_th.jpg" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></div>

							
							
							
							
															<div id="post_rate_div_226843"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo226843_menu" style="display: none;">
										<div class="imicons">
													<a target='_blank' href='http://settings.messenger.live.com/Conversation/IMMe.aspx?invitee=dou.sha@live.cn&mkt=zh-cn'><img style='border-style: none;' src='http://messenger.services.live.com/users/dou.sha@live.cn/presenceimage?mkt=zh-cn' width='16' height='16' /></a>
																																			</div>
										<dl></dl>
										<p><a href="space.php?uid=7426" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=21370&amp;repquote=226843&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 226843)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_43"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid226863" summary="pid226863" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2240" target="_blank" id="userinfo226863" class="dropmenu" onmouseover="showMenu(this.id)">14k</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2240">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2240&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_44" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum226863" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=21370&page=1#pid226863', '话题链接已经复制到剪贴板')">45楼</strong>
													<em onclick="$('postmessage_226863').className='t_bigfont'">大</em>							<em onclick="$('postmessage_226863').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_226863').className='t_smallfont'">小</em>												发表于 2009-9-4 13:44&nbsp;																					<a href="viewthread.php?tid=21370&amp;page=1&amp;authorid=2240" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_44"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_44"></div><div id="ad_thread4_44"></div>
						
						
																											<div id="postmessage_226863" class="t_msgfont">哈哈，我们原来漏网之语也享受过这种待遇。张书记做好喝茶的准备吧。</div>

							
							
							
							
															<div id="post_rate_div_226863"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo226863_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=2240" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=21370&amp;repquote=226863&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 226863)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_44"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid226876" summary="pid226876" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=4555" target="_blank" id="userinfo226876" class="dropmenu" onmouseover="showMenu(this.id)">mmikez</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">天天出差</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=4555">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=4555&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_45" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum226876" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=21370&page=1#pid226876', '话题链接已经复制到剪贴板')">46楼</strong>
													<em onclick="$('postmessage_226876').className='t_bigfont'">大</em>							<em onclick="$('postmessage_226876').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_226876').className='t_smallfont'">小</em>												发表于 2009-9-4 13:48&nbsp;																					<a href="viewthread.php?tid=21370&amp;page=1&amp;authorid=4555" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_45"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_45"></div><div id="ad_thread4_45"></div>
													<h2>辛苦</h2>
						
						
																											<div id="postmessage_226876" class="t_msgfont">辛苦</div>

							
							
							
							
															<div id="post_rate_div_226876"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo226876_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=4555" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=21370&amp;repquote=226876&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 226876)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_45"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid226884" summary="pid226884" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1474" target="_blank" id="userinfo226884" class="dropmenu" onmouseover="showMenu(this.id)">左岸←右岸</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">把你的子宫钉到我的墙上，这样我便会记得你。我们必须走了。明天，明天…</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1474">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1474&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_46" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum226884" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=21370&page=1#pid226884', '话题链接已经复制到剪贴板')">47楼</strong>
													<em onclick="$('postmessage_226884').className='t_bigfont'">大</em>							<em onclick="$('postmessage_226884').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_226884').className='t_smallfont'">小</em>												发表于 2009-9-4 13:51&nbsp;																					<a href="viewthread.php?tid=21370&amp;page=1&amp;authorid=1474" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_46"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_46"></div><div id="ad_thread4_46"></div>
						
						
																											<div id="postmessage_226884" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>抑扬</i> 于 2009-9-4 09:44 发表 <a href="http://1984bbs.com/redirect.php?goto=findpost&amp;pid=226365&amp;ptid=21370" target="_blank"><img src="http://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
裟哥辛苦，像裟哥这么勤劳朴实善良又懂技术的帅哥一定能找个林志玲那样的老婆 </blockquote></div>和尚···跟着爷还俗吧·····</div>

							
							
							
							
															<div id="post_rate_div_226884"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo226884_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1474" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=21370&amp;repquote=226884&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 226884)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_46"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid226896" summary="pid226896" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7760" target="_blank" id="userinfo226896" class="dropmenu" onmouseover="showMenu(this.id)">米西米西</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">老家大洋</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7760">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7760&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_47" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum226896" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=21370&page=1#pid226896', '话题链接已经复制到剪贴板')">48楼</strong>
													<em onclick="$('postmessage_226896').className='t_bigfont'">大</em>							<em onclick="$('postmessage_226896').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_226896').className='t_smallfont'">小</em>												发表于 2009-9-4 13:54&nbsp;																					<a href="viewthread.php?tid=21370&amp;page=1&amp;authorid=7760" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_47"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_47"></div><div id="ad_thread4_47"></div>
						
						
																											<div id="postmessage_226896" class="t_msgfont">大洋国又要打战了。</div>

							
							
							
							
															<div id="post_rate_div_226896"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo226896_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=7760" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=21370&amp;repquote=226896&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 226896)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_47"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid226922" summary="pid226922" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=4662" target="_blank" id="userinfo226922" class="dropmenu" onmouseover="showMenu(this.id)">askboy</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=4662">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=4662&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_48" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum226922" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=21370&page=1#pid226922', '话题链接已经复制到剪贴板')">49楼</strong>
													<em onclick="$('postmessage_226922').className='t_bigfont'">大</em>							<em onclick="$('postmessage_226922').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_226922').className='t_smallfont'">小</em>												发表于 2009-9-4 14:03&nbsp;																					<a href="viewthread.php?tid=21370&amp;page=1&amp;authorid=4662" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_48"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_48"></div><div id="ad_thread4_48"></div>
						
						
																											<div id="postmessage_226922" class="t_msgfont">经期结束，宫外孕开始</div>

							
							
							
							
															<div id="post_rate_div_226922"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo226922_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=4662" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=21370&amp;repquote=226922&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 226922)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_48"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid226961" summary="pid226961" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=5736" target="_blank" id="userinfo226961" class="dropmenu" onmouseover="showMenu(this.id)">外来务工人员</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">对你微笑，纯属礼貌</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=5736">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=5736&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_49" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum226961" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=21370&page=1#pid226961', '话题链接已经复制到剪贴板')">50楼</strong>
													<em onclick="$('postmessage_226961').className='t_bigfont'">大</em>							<em onclick="$('postmessage_226961').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_226961').className='t_smallfont'">小</em>												发表于 2009-9-4 14:19&nbsp;																					<a href="viewthread.php?tid=21370&amp;page=1&amp;authorid=5736" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_49"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_49"></div><div id="ad_thread4_49"></div>
						
						
																											<div id="postmessage_226961" class="t_msgfont">安全为上</div>

							
							
							
							
															<div id="post_rate_div_226961"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo226961_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=5736" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=21370&amp;repquote=226961&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 226961)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_49"></div>				</div>
			</td>
		</tr>
		</table>
		</div>
</form>





<div class="pages_btns">
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=21370&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=21370&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
	<div class="pages"><em>&nbsp;51&nbsp;</em><strong>1</strong><a href="viewthread.php?tid=21370&amp;extra=&amp;page=2">2</a><a href="viewthread.php?tid=21370&amp;extra=&amp;page=2" class="next">&rsaquo;&rsaquo;</a></div>			<span class="postbtn" id="newspecialtmp" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=21370&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

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

	<form method="post" id="postform" action="post.php?action=reply&amp;fid=26&amp;tid=21370&amp;extra=&amp;replysubmit=yes" onSubmit="return validate(this)">
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
			window.location = 'viewthread.php?tid=21370&page=2';
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
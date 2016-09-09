<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<title>怎么用 firefox+autoproxy+ssh 翻墙？ - 国家局域网研究所 -  1984bbs.com </title>
<meta name="keywords" content="" />
<meta name="MSSmartTagsPreventParsing" content="True" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<link rel="archives" title="1984bbs.com" href="https://1984bbs.com/archiver/" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_viewthread.css" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_common.css" />
<script type="text/javascript">
	var discuz_uid = 13019;var IMGDIR = 'images/default';var attackevasive = '0';var gid = 0;var STYLEID = '1';
	gid = parseInt('3');var fid = parseInt('26');var tid = parseInt('59509');
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
			<p><a href="index.php" id="forumlist" onmouseover="showMenu(this.id)" class="dropmenu">1984bbs.com</a> &raquo; <a href="forumdisplay.php?fid=26">国家局域网研究所</a> &raquo; 怎么用 firefox+autoproxy+ssh 翻墙？</p>
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
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=59509&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=59509&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
				<span class="postbtn" id="newspecial" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=59509&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

	<ul class="popupmenu_popup newspecialmenu" id="newspecial_menu" style="display: none">
		<li><a href="post.php?action=newthread&amp;fid=26&amp;extra=">发新话题</a></li>
		<li class="poll"><a href="post.php?action=newthread&amp;fid=26&amp;extra=&amp;special=1">发布投票</a></li>													</ul>

<form method="post" name="modactions">
	<input type="hidden" name="formhash" value="823c9fa2" />
	<div class="mainbox viewthread">
		<span class="headactions">
					<a href="my.php?item=favorites&amp;tid=59509" id="ajax_favorite" onclick="ajaxmenu(event, this.id, 3000, 0)">收藏</a>
			<a href="my.php?item=subscriptions&amp;subadd=59509" id="ajax_subscription" onclick="ajaxmenu(event, this.id, 3000, null, 0)">订阅</a>
			<a href="misc.php?action=emailfriend&amp;tid=59509" id="emailfriend" onclick="ajaxmenu(event, this.id, 9000000, null, 0)">推荐</a>
				<a href="viewthread.php?action=printable&amp;tid=59509" target="_blank" class="notabs">打印</a>
				</span>
		<h1>怎么用 firefox+autoproxy+ssh 翻墙？		</h1>
							<table id="pid845565" summary="pid845565" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=18864" target="_blank" id="userinfo845565" class="dropmenu" onmouseover="showMenu(this.id)">zhangsongq</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">Across the Great Firewall, you can reach every corner of the world.</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=18864">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=18864&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_0" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum845565" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=59509&page=1#pid845565', '话题链接已经复制到剪贴板')">1楼</strong>
													<em onclick="$('postmessage_845565').className='t_bigfont'">大</em>							<em onclick="$('postmessage_845565').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_845565').className='t_smallfont'">小</em>												发表于 2010-9-27 07:33&nbsp;																					<a href="viewthread.php?tid=59509&amp;page=1&amp;authorid=18864" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_0"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_0"></div><div id="ad_thread4_0"></div>
													<h2>怎么用 firefox+autoproxy+ssh 翻墙？</h2>
						
						
																											<div id="postmessage_845565" class="t_msgfont">怎么用 firefox+autoproxy+ssh 翻墙？<br />
<br />
1.我水平较低，请能人弄一个教程<br />
<br />
2.请能人详细说明每一步操作步骤，不要转载他人的文字，弄出你自己实际操作的方式方法<br />
<br />
3.使用规范pc术语，<br />
<br />
4.O(∩_∩)O谢谢</div>

							
							
							
							
															<div id="post_rate_div_845565"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo845565_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://没有" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=18864" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=59509&amp;repquote=845565&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 845565)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_0"></div>				</div>
			</td>
		</tr>
		</table>
		</div><div class="ad_column" id="ad_interthread"><a href="/viewthread.php?tid=54699" target="_blank" style="color:red;">1984bbs是一个非营利项目，它需要您的捐助！</font></a>		</div>
	<div class="mainbox viewthread">
			<table id="pid845572" summary="pid845572" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=17819" target="_blank" id="userinfo845572" class="dropmenu" onmouseover="showMenu(this.id)">紅色克格勃</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">KGB中校</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=17819">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=17819&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_1" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum845572" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=59509&page=1#pid845572', '话题链接已经复制到剪贴板')">2楼</strong>
													<em onclick="$('postmessage_845572').className='t_bigfont'">大</em>							<em onclick="$('postmessage_845572').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_845572').className='t_smallfont'">小</em>												发表于 2010-9-27 07:47&nbsp;																					<a href="viewthread.php?tid=59509&amp;page=1&amp;authorid=17819" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_1"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_1"></div><div id="ad_thread4_1"></div>
						
						
																											<div id="postmessage_845572" class="t_msgfont">同求。。。幫忙置頂。。</div>

							
							
							
							
															<div id="post_rate_div_845572"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo845572_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=17819" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=59509&amp;repquote=845572&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 845572)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_1"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid845594" summary="pid845594" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=18864" target="_blank" id="userinfo845594" class="dropmenu" onmouseover="showMenu(this.id)">zhangsongq</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">Across the Great Firewall, you can reach every corner of the world.</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=18864">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=18864&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_2" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum845594" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=59509&page=1#pid845594', '话题链接已经复制到剪贴板')">3楼</strong>
													<em onclick="$('postmessage_845594').className='t_bigfont'">大</em>							<em onclick="$('postmessage_845594').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_845594').className='t_smallfont'">小</em>												发表于 2010-9-27 08:16&nbsp;																					<a href="viewthread.php?tid=59509&amp;page=1&amp;authorid=18864" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_2"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_2"></div><div id="ad_thread4_2"></div>
						
						
																											<div id="postmessage_845594" class="t_msgfont">O(∩_∩)O谢谢楼上兄弟的大力支持</div>

							
							
							
							
															<div id="post_rate_div_845594"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo845594_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://没有" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=18864" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=59509&amp;repquote=845594&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 845594)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_2"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid845661" summary="pid845661" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1960" target="_blank" id="userinfo845661" class="dropmenu" onmouseover="showMenu(this.id)">库存袈裟</a></cite>
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
						<strong title="复制话题链接到剪贴板" id="postnum845661" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=59509&page=1#pid845661', '话题链接已经复制到剪贴板')">4楼</strong>
													<em onclick="$('postmessage_845661').className='t_bigfont'">大</em>							<em onclick="$('postmessage_845661').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_845661').className='t_smallfont'">小</em>												发表于 2010-9-27 09:28&nbsp;																					<a href="viewthread.php?tid=59509&amp;page=1&amp;authorid=1960" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_3"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_3"></div><div id="ad_thread4_3"></div>
													<h2>不翻帖子直接伸手索要？</h2>
						
						
																											<div id="postmessage_845661" class="t_msgfont">SSH+Chrome+Proxy Switchy!翻墙教程&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; <a href="https://1984bbs.com/viewthread.php?tid=51491" target="_blank">https://1984bbs.com/viewthread.php?tid=51491</a><br />
如何使用SSH翻墙&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;<a href="https://1984bbs.com/viewthread.php?tid=38397" target="_blank">https://1984bbs.com/viewthread.php?tid=38397</a><br />
使用SocksCap配合SSH翻墙&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<a href="https://1984bbs.com/viewthread.php?tid=40080" target="_blank">https://1984bbs.com/viewthread.php?tid=40080</a><br />
<a href="https://chinatopsex.com/index.php/archives/5/" target="_blank">https://chinatopsex.com/index.php/archives/5/</a></div>

							
							
							
							
															<div id="post_rate_div_845661"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo845661_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1960" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=59509&amp;repquote=845661&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 845661)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_3"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid845666" summary="pid845666" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1960" target="_blank" id="userinfo845666" class="dropmenu" onmouseover="showMenu(this.id)">库存袈裟</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">@bruceku 想象力比知识更重要。</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1960">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1960&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_4" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum845666" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=59509&page=1#pid845666', '话题链接已经复制到剪贴板')">5楼</strong>
													<em onclick="$('postmessage_845666').className='t_bigfont'">大</em>							<em onclick="$('postmessage_845666').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_845666').className='t_smallfont'">小</em>												发表于 2010-9-27 09:32&nbsp;																					<a href="viewthread.php?tid=59509&amp;page=1&amp;authorid=1960" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_4"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_4"></div><div id="ad_thread4_4"></div>
						
						
																											<div id="postmessage_845666" class="t_msgfont">“2.请能人详细说明每一步操作步骤，不要转载他人的文字，弄出你自己实际操作的方式方法”<br />
<br />
。。。。啧啧，还得要求找个体貌端正的青年翻墙培训师，手把手肉贴肉的一步步循序渐进深入浅出九浅一深是吧</div>

							
							
							
							
															<div id="post_rate_div_845666"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo845666_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1960" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=59509&amp;repquote=845666&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 845666)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_4"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid845687" summary="pid845687" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=18864" target="_blank" id="userinfo845687" class="dropmenu" onmouseover="showMenu(this.id)">zhangsongq</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">Across the Great Firewall, you can reach every corner of the world.</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=18864">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=18864&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_5" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum845687" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=59509&page=1#pid845687', '话题链接已经复制到剪贴板')">6楼</strong>
													<em onclick="$('postmessage_845687').className='t_bigfont'">大</em>							<em onclick="$('postmessage_845687').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_845687').className='t_smallfont'">小</em>												发表于 2010-9-27 09:48&nbsp;																					<a href="viewthread.php?tid=59509&amp;page=1&amp;authorid=18864" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_5"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_5"></div><div id="ad_thread4_5"></div>
						
						
																											<div id="postmessage_845687" class="t_msgfont">就是这个意思，我被弄得头昏脑胀，不得要领了。不要这样进行讽刺，……</div>

							
							
							
							
															<div id="post_rate_div_845687"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo845687_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://没有" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=18864" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=59509&amp;repquote=845687&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 845687)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_5"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid845705" summary="pid845705" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=13703" target="_blank" id="userinfo845705" class="dropmenu" onmouseover="showMenu(this.id)">feng1105</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">twitter:@feng1105</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=13703">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=13703&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_6" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum845705" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=59509&page=1#pid845705', '话题链接已经复制到剪贴板')">7楼</strong>
													<em onclick="$('postmessage_845705').className='t_bigfont'">大</em>							<em onclick="$('postmessage_845705').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_845705').className='t_smallfont'">小</em>												发表于 2010-9-27 09:59&nbsp;																					<a href="viewthread.php?tid=59509&amp;page=1&amp;authorid=13703" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_6"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_6"></div><div id="ad_thread4_6"></div>
						
						
																											<div id="postmessage_845705" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>库存袈裟</i> 于 2010-9-27 09:32 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=845666&amp;ptid=59509" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
“2.请能人详细说明每一步操作步骤，不要转载他人的文字，弄出你自己实际操作的方式方法”<br />
<br />
。。。。啧啧，还得要求找个体貌端正的青年翻墙培训师，手把手肉贴肉的一步步循序渐进深入浅出九浅一深是吧 </blockquote></div>哈哈，服务的好有赏啊<br />
<br />
LZ，库库的教程很详细，别灰心，翻墙神马的乐趣就在此</div>

							
							
							
							
															<div id="post_rate_div_845705"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo845705_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=13703" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=59509&amp;repquote=845705&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 845705)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_6"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid845706" summary="pid845706" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=11595" target="_blank" id="userinfo845706" class="dropmenu" onmouseover="showMenu(this.id)">zzug</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=11595">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=11595&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_7" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum845706" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=59509&page=1#pid845706', '话题链接已经复制到剪贴板')">8楼</strong>
													<em onclick="$('postmessage_845706').className='t_bigfont'">大</em>							<em onclick="$('postmessage_845706').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_845706').className='t_smallfont'">小</em>												发表于 2010-9-27 10:00&nbsp;																					<a href="viewthread.php?tid=59509&amp;page=1&amp;authorid=11595" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_7"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_7"></div><div id="ad_thread4_7"></div>
						
						
																											<div id="postmessage_845706" class="t_msgfont">“3.使用规范pc术语，”这个就不清楚了<br />
首先，在这<a href="http://ankeena.mozilla.org/pub/mozilla.org//firefox/releases/3.6.10/win32/zh-CN/Firefox%20Setup%203.6.10.exe" target="_blank">http://ankeena.mozilla.org/pub/m ... 0Setup%203.6.10.exe</a>下载firefox并安装<br />
然后，打开firefox在地址栏输入<a href="https://addons.mozilla.org/zh-CN/firefox/addon/11009/versions/" target="_blank">https://addons.mozilla.org/zh-CN/firefox/addon/11009/versions/</a>打开，安装autoproxy扩展，选择autoproxy代理为SSH -D<br />
最后，点击<a href="http://sharesend.com/8l1ar" target="_blank">http://sharesend.com/8l1ar</a>下载myentunnel，解压后双击打开myentunnel右键系统托盘的myentunnel图标，点击配置选择一个服务器开始连接，等myentunnel图标变成绿色后在Firefox浏览器里输入<a href="http://www.youtube.com" target="_blank">www.youtube.com</a>看看是不是打开了！<br />
（呵呵，我现场为你写的简单教程，如果有问题跟贴我回复你）<br />
<br />
[<i> 本帖最后由 zzug 于 2010-9-27 10:03 编辑 </i>]</div>

							
							
							
							
															<div id="post_rate_div_845706"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo845706_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=11595" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=59509&amp;repquote=845706&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 845706)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_7"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid845719" summary="pid845719" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1960" target="_blank" id="userinfo845719" class="dropmenu" onmouseover="showMenu(this.id)">库存袈裟</a></cite>
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
						<strong title="复制话题链接到剪贴板" id="postnum845719" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=59509&page=1#pid845719', '话题链接已经复制到剪贴板')">9楼</strong>
													<em onclick="$('postmessage_845719').className='t_bigfont'">大</em>							<em onclick="$('postmessage_845719').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_845719').className='t_smallfont'">小</em>												发表于 2010-9-27 10:11&nbsp;																					<a href="viewthread.php?tid=59509&amp;page=1&amp;authorid=1960" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_8"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_8"></div><div id="ad_thread4_8"></div>
													<h2>回复 8楼 zzug 的话题</h2>
						
						
																											<div id="postmessage_845719" class="t_msgfont">别宠惯伸手党。。。</div>

							
							
							
							
															<div id="post_rate_div_845719"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo845719_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1960" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=59509&amp;repquote=845719&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 845719)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_8"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid845738" summary="pid845738" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=11595" target="_blank" id="userinfo845738" class="dropmenu" onmouseover="showMenu(this.id)">zzug</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=11595">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=11595&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_9" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum845738" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=59509&page=1#pid845738', '话题链接已经复制到剪贴板')">10楼</strong>
													<em onclick="$('postmessage_845738').className='t_bigfont'">大</em>							<em onclick="$('postmessage_845738').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_845738').className='t_smallfont'">小</em>												发表于 2010-9-27 10:22&nbsp;																					<a href="viewthread.php?tid=59509&amp;page=1&amp;authorid=11595" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_9"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_9"></div><div id="ad_thread4_9"></div>
													<h2>回复 9楼 库存袈裟 的话题</h2>
						
						
																											<div id="postmessage_845738" class="t_msgfont">有时候有些地方不理解真的是很难突破的，毕竟不少人和我一样对不少东西都是一知半解的！</div>

							
							
							
							
															<div id="post_rate_div_845738"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo845738_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=11595" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=59509&amp;repquote=845738&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 845738)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_9"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid845767" summary="pid845767" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=18864" target="_blank" id="userinfo845767" class="dropmenu" onmouseover="showMenu(this.id)">zhangsongq</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">Across the Great Firewall, you can reach every corner of the world.</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=18864">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=18864&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_10" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum845767" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=59509&page=1#pid845767', '话题链接已经复制到剪贴板')">11楼</strong>
													<em onclick="$('postmessage_845767').className='t_bigfont'">大</em>							<em onclick="$('postmessage_845767').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_845767').className='t_smallfont'">小</em>												发表于 2010-9-27 10:52&nbsp;																					<a href="viewthread.php?tid=59509&amp;page=1&amp;authorid=18864" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_10"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_10"></div><div id="ad_thread4_10"></div>
						
						
																											<div id="postmessage_845767" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>zzug</i> 于 2010-9-27 10:00 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=845706&amp;ptid=59509" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
“3.使用规范pc术语，”这个就不清楚了<br />
首先，在这<a href="http://ankeena.mozilla.org/pub/mozilla.org//firefox/releases/3.6.10/win32/zh-CN/Firefox%20Setup%203.6.10.exe" target="_blank">http://ankeena.mozilla.org/pub/m ... 0Setup%203.6.10.exe</a>下载firefox并安装<br />
然后，打开firefox在地址栏 ... </blockquote></div>1.O(∩_∩)O谢谢你<br />
<br />
2.服务器地址：75.127.68.101；用户名：demo1；密码：pass；端口： 65321，其中，这个端口是否就是SSH port？<br />
<br />
3.完成后，是否需要在“福”里，进行设置？如何设置？</div>

							
							
							
							
															<div id="post_rate_div_845767"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo845767_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://没有" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=18864" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=59509&amp;repquote=845767&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 845767)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_10"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid845774" summary="pid845774" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=18864" target="_blank" id="userinfo845774" class="dropmenu" onmouseover="showMenu(this.id)">zhangsongq</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">Across the Great Firewall, you can reach every corner of the world.</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=18864">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=18864&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_11" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum845774" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=59509&page=1#pid845774', '话题链接已经复制到剪贴板')">12楼</strong>
													<em onclick="$('postmessage_845774').className='t_bigfont'">大</em>							<em onclick="$('postmessage_845774').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_845774').className='t_smallfont'">小</em>												发表于 2010-9-27 10:54&nbsp;																					<a href="viewthread.php?tid=59509&amp;page=1&amp;authorid=18864" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_11"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_11"></div><div id="ad_thread4_11"></div>
						
						
																											<div id="postmessage_845774" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>库存袈裟</i> 于 2010-9-27 10:11 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=845719&amp;ptid=59509" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
别宠惯伸手党。。。 </blockquote></div>我并不是伸手党，按照教程，弄了好久，搞不定，才来求助的，……，嘿嘿</div>

							
							
							
							
															<div id="post_rate_div_845774"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo845774_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://没有" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=18864" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=59509&amp;repquote=845774&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 845774)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_11"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid845784" summary="pid845784" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=13703" target="_blank" id="userinfo845784" class="dropmenu" onmouseover="showMenu(this.id)">feng1105</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">twitter:@feng1105</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=13703">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=13703&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_12" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum845784" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=59509&page=1#pid845784', '话题链接已经复制到剪贴板')">13楼</strong>
													<em onclick="$('postmessage_845784').className='t_bigfont'">大</em>							<em onclick="$('postmessage_845784').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_845784').className='t_smallfont'">小</em>												发表于 2010-9-27 11:01&nbsp;																					<a href="viewthread.php?tid=59509&amp;page=1&amp;authorid=13703" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_12"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_12"></div><div id="ad_thread4_12"></div>
													<h2>回复 11楼 zhangsongq 的话题</h2>
						
						
																											<div id="postmessage_845784" class="t_msgfont">选择autoproxy（你所说的“福”）代理为SSH -D</div>

							
							
							
							
															<div id="post_rate_div_845784"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo845784_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=13703" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=59509&amp;repquote=845784&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 845784)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_12"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid845794" summary="pid845794" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=11595" target="_blank" id="userinfo845794" class="dropmenu" onmouseover="showMenu(this.id)">zzug</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=11595">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=11595&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_13" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum845794" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=59509&page=1#pid845794', '话题链接已经复制到剪贴板')">14楼</strong>
													<em onclick="$('postmessage_845794').className='t_bigfont'">大</em>							<em onclick="$('postmessage_845794').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_845794').className='t_smallfont'">小</em>												发表于 2010-9-27 11:11&nbsp;																					<a href="viewthread.php?tid=59509&amp;page=1&amp;authorid=11595" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_13"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_13"></div><div id="ad_thread4_13"></div>
													<h2>回复 11楼 zhangsongq 的话题</h2>
						
						
																											<div id="postmessage_845794" class="t_msgfont">2、是的（myentunnel你用中文版吧，设置比较容易明白，我给的下载链接里的那个就是中文的）<br />
3、需要设置，设置你先看看<a href="http://fendou.org/2010/03/23/firefox-ssh-autoproxy/" target="_blank">http://fendou.org/2010/03/23/firefox-ssh-autoproxy/</a>很详细的，不明白跟贴再回复</div>

							
							
							
							
															<div id="post_rate_div_845794"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo845794_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=11595" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=59509&amp;repquote=845794&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 845794)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_13"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid845810" summary="pid845810" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1960" target="_blank" id="userinfo845810" class="dropmenu" onmouseover="showMenu(this.id)">库存袈裟</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">@bruceku 想象力比知识更重要。</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1960">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1960&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_14" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum845810" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=59509&page=1#pid845810', '话题链接已经复制到剪贴板')">15楼</strong>
													<em onclick="$('postmessage_845810').className='t_bigfont'">大</em>							<em onclick="$('postmessage_845810').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_845810').className='t_smallfont'">小</em>												发表于 2010-9-27 11:25&nbsp;																					<a href="viewthread.php?tid=59509&amp;page=1&amp;authorid=1960" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_14"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_14"></div><div id="ad_thread4_14"></div>
													<h2>回楼主，这是我自己写的亲身经验。在本组发过无数次</h2>
						
						
																											<div id="postmessage_845810" class="t_msgfont">另外提醒楼主，小组头顶有个“搜索”您看见没<br />
原文<br />
<a href="https://chinatopsex.com/index.php/archives/5/" target="_blank">https://chinatopsex.com/index.php/archives/5/</a><br />
<br />
<strong>SSH翻墙优点：<br />
</strong>1.SSH/SFTP资源丰富，封不尽查不绝<br />
2.加密压缩传输，安全<br />
3.连接速度快/稳定<br />
4.可指定使用代理网站，不影响使用国内服务<br />
<strong>一、下载并安装：</strong><br />
Firefox：<a href="http://www.mozilla.com/en-US/firefox/all.html" target="_blank">http://www.mozilla.com/en-US/firefox/all.html</a><br />
MyEntunnel：<a href="http://twiapp.alwaysdata.net/myt.rar" target="_blank">http://twiapp.alwaysdata.net/myt.rar</a> 使用dev版本plink，速度更快<strong><br />
二、获取SSH帐号：<br />
</strong>1.虚拟主机SFTP、VPS/独立服务器SSH，cPanel空间Demo SFTP <br />
2.互联网免费SSH帐号 如：<a href="http://freessh.us/" target="_blank">freessh.us</a> <a href="http://www.sitefrost.com/" target="_blank">SiteFrost.com</a> <a href="http://www.cjb.net/" target="_blank">cjb.net</a> <a href="http://shells.red-pill.eu/" target="_blank">shells.red-pill.eu</a> <a href="http://www.sshcenter.info/free-ssh-account.php" target="_blank">sshcenter</a> <a href="http://ssh.daili.vc/" target="_blank">ssh.daili.vc</a><br />
3.收费SSH帐号<strong><br />
三、MyEntunnel设置</strong><br />
如下图所示配置<br />
<img src="https://chinatopsex.com/pic/images/screenshot.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
PS.SSH Port为连接远端服务器端口一般为22，cPanel SFTP端口可能各有不同以后台显示为准。Port为本地转发端口，AutoProxy默认的SSH -d端口为7070，请在AutoProxy中核对。<br />
填写完毕，点击Connect连接<br />
<img src="https://www.chinatopsex.com/pic/images/14kwifl.png" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
切换至Status，弹出指纹确认，点YES，出现Connection is stable小锁变绿表示连接成功。<br />
<img src="https://chinatopsex.com/pic/images/nic9w.png" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
小锁图例：<br />
<img src="https://chinatopsex.com/pic/images/d.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
<strong><br />
四、安装与配置AutoProxy</strong><br />
运行火狐打开：<a href="http://autoproxy.mozdev.org/latest.xpi" target="_blank">http://autoproxy.mozdev.org/latest.xpi</a><br />
出现安全提示，点击“允许”<br />
<img src="https://chinatopsex.com/pic/images/e.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
确认安装<br />
<img src="https://chinatopsex.com/pic/images/f.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
安装完毕重启Firefox<br />
<img src="https://chinatopsex.com/pic/images/ne7v5v.png" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
重启Firefox后，将出现<br />
<img src="https://chinatopsex.com/pic/images/h.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
 选择gfwList，点击确认。嘿嘿，有点名气的被封网站都在这里列表里了，浏览时AutoProxy会依据浏览网址是否在gfwList/自定义规则列表中，判断是否启用代理访问，比起全局代理更方便。<br />
点击红色“福”字<br />
<img src="https://chinatopsex.com/pic/images/g.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
代理服务器，选择代理服务器<br />
<img src="https://chinatopsex.com/pic/images/screenshot.png" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
选中SSH -d为默认代理服务器<br />
<img src="https://chinatopsex.com/pic/images/screenjrj.png" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
<strong>五、测试与自定义规则</strong><br />
打开Youtube测试：<br />
<img src="https://chinatopsex.com/pic/images/screenoqo.png" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
成功！<br />
<strong>自定义规则</strong><br />
希望通过代理访问某站如：<br />
直接访问<a href="http://www.123cha.com" target="_blank">www.123cha.com</a>，其显示IP为真实IP<br />
<img src="https://chinatopsex.com/pic/images/iese.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
点击红色“福”字<br />
<img src="https://chinatopsex.com/pic/images/g.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
照下图配置：<br />
<img src="https://chinatopsex.com/pic/images/j.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
测试：<br />
<img src="https://chinatopsex.com/pic/images/k.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
用处：访问gfwList未列出被封网站；国内论坛发贴防跨省。<br />
Update:<br />
Sock5远程DNS解析(防DNS污染)设置方法<br />
在火狐地址栏输入<br />
<strong>about:config</strong><br />
<img src="https://chinatopsex.com/pic/images/l.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
点“我保证会小心”。<br />
在过滤器中输入<br />
<strong>network.proxy.socks_remote_dns</strong><br />
<img src="https://chinatopsex.com/pic/images/kyhy.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
双击，修改值为ture，关闭页面。<br />
==========================<br />
转载请注明原文链接</div>

							
							
							
							
															<div id="post_rate_div_845810"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo845810_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1960" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=59509&amp;repquote=845810&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 845810)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_14"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid845857" summary="pid845857" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=14031" target="_blank" id="userinfo845857" class="dropmenu" onmouseover="showMenu(this.id)">明月照积雪</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=14031">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=14031&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_15" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum845857" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=59509&page=1#pid845857', '话题链接已经复制到剪贴板')">16楼</strong>
													<em onclick="$('postmessage_845857').className='t_bigfont'">大</em>							<em onclick="$('postmessage_845857').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_845857').className='t_smallfont'">小</em>												发表于 2010-9-27 11:52&nbsp;																					<a href="viewthread.php?tid=59509&amp;page=1&amp;authorid=14031" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_15"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_15"></div><div id="ad_thread4_15"></div>
						
						
																											<div id="postmessage_845857" class="t_msgfont">像我这样的懒人，用法轮神功是最好的选择&nbsp; &nbsp;呵呵</div>

							
							
							
							
															<div id="post_rate_div_845857"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo845857_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=14031" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=59509&amp;repquote=845857&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 845857)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_15"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid845863" summary="pid845863" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=18864" target="_blank" id="userinfo845863" class="dropmenu" onmouseover="showMenu(this.id)">zhangsongq</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">Across the Great Firewall, you can reach every corner of the world.</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=18864">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=18864&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_16" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum845863" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=59509&page=1#pid845863', '话题链接已经复制到剪贴板')">17楼</strong>
													<em onclick="$('postmessage_845863').className='t_bigfont'">大</em>							<em onclick="$('postmessage_845863').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_845863').className='t_smallfont'">小</em>												发表于 2010-9-27 11:58&nbsp;																					<a href="viewthread.php?tid=59509&amp;page=1&amp;authorid=18864" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_16"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_16"></div><div id="ad_thread4_16"></div>
						
						
																											<div id="postmessage_845863" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>zzug</i> 于 2010-9-27 11:11 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=845794&amp;ptid=59509" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
2、是的（myentunnel你用中文版吧，设置比较容易明白，我给的下载链接里的那个就是中文的）<br />
3、需要设置，设置你先看看<a href="http://fendou.org/2010/03/23/firefox-ssh-autoproxy/" target="_blank">http://fendou.org/2010/03/23/firefox-ssh-autoproxy/</a>很详细的，不明白跟贴再回复 </blockquote></div>1.非常感激你耐心，而有效的指导；<br />
<br />
2.问题已经弄明白了，<br />
<br />
3.这个锁仍然是红色的，说明链接失效。估计是SSH的用户名、密码和端口失效了。<br />
<br />
4.如若可能，请你提供一个有效的SSH的用户名、密码和端口，供测试。<br />
<br />
5.我的邮箱是：<a href="mailto:zsq1946114@hotmail.com">zsq1946114@hotmail.com</a>，O(∩_∩)O谢谢!<br />
<br />
[<i> 本帖最后由 zhangsongq 于 2010-9-27 11:59 编辑 </i>]</div>

							
							
							
							
															<div id="post_rate_div_845863"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo845863_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://没有" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=18864" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=59509&amp;repquote=845863&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 845863)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_16"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid845873" summary="pid845873" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=11595" target="_blank" id="userinfo845873" class="dropmenu" onmouseover="showMenu(this.id)">zzug</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=11595">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=11595&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_17" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum845873" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=59509&page=1#pid845873', '话题链接已经复制到剪贴板')">18楼</strong>
													<em onclick="$('postmessage_845873').className='t_bigfont'">大</em>							<em onclick="$('postmessage_845873').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_845873').className='t_smallfont'">小</em>												发表于 2010-9-27 12:01&nbsp;																					<a href="viewthread.php?tid=59509&amp;page=1&amp;authorid=11595" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_17"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_17"></div><div id="ad_thread4_17"></div>
													<h2>回复 17楼 zhangsongq 的话题</h2>
						
						
																											<div id="postmessage_845873" class="t_msgfont">我给你提供的myentunnel已经设置好28个ssh帐号了，你可以试试，看看哪个快<br />
<a href="https://1984bbs.com/viewthread.php?tid=56554" target="_blank">https://1984bbs.com/viewthread.php?tid=56554</a> 这个帖子里有40个可用的</div>

							
							
							
							
															<div id="post_rate_div_845873"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo845873_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=11595" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=59509&amp;repquote=845873&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 845873)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_17"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid845952" summary="pid845952" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=18864" target="_blank" id="userinfo845952" class="dropmenu" onmouseover="showMenu(this.id)">zhangsongq</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">Across the Great Firewall, you can reach every corner of the world.</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=18864">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=18864&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_18" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum845952" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=59509&page=1#pid845952', '话题链接已经复制到剪贴板')">19楼</strong>
													<em onclick="$('postmessage_845952').className='t_bigfont'">大</em>							<em onclick="$('postmessage_845952').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_845952').className='t_smallfont'">小</em>												发表于 2010-9-27 12:42&nbsp;																					<a href="viewthread.php?tid=59509&amp;page=1&amp;authorid=18864" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_18"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_18"></div><div id="ad_thread4_18"></div>
						
						
																											<div id="postmessage_845952" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>zzug</i> 于 2010-9-27 12:01 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=845873&amp;ptid=59509" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
我给你提供的myentunnel已经设置好28个ssh帐号了，你可以试试，看看哪个快<br />
<a href="https://1984bbs.com/viewthread.php?tid=56554" target="_blank">https://1984bbs.com/viewthread.php?tid=56554</a> 这个帖子里有40个可用的 </blockquote></div><a href="http://sharesend.com/8l1ar" target="_blank">http://sharesend.com/8l1ar</a>下载myentunnel——点击“保存”和“链接”按钮后，需要“口令”。这个口令是什么？另外，用户名、密码和端口是否需要填写，还是它会自动进行，而不需要填写？<br />
<br />
谢谢，不好意思，多次麻烦你了，……</div>

							
							
							
							
															<div id="post_rate_div_845952"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo845952_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://没有" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=18864" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=59509&amp;repquote=845952&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 845952)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_18"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid846009" summary="pid846009" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=11595" target="_blank" id="userinfo846009" class="dropmenu" onmouseover="showMenu(this.id)">zzug</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=11595">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=11595&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_19" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum846009" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=59509&page=1#pid846009', '话题链接已经复制到剪贴板')">20楼</strong>
													<em onclick="$('postmessage_846009').className='t_bigfont'">大</em>							<em onclick="$('postmessage_846009').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_846009').className='t_smallfont'">小</em>												发表于 2010-9-27 13:05&nbsp;																					<a href="viewthread.php?tid=59509&amp;page=1&amp;authorid=11595" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_19"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_19"></div><div id="ad_thread4_19"></div>
													<h2>回复 19楼 zhangsongq 的话题</h2>
						
						
																											<div id="postmessage_846009" class="t_msgfont">“解压后双击打开myentunnel右键系统托盘的myentunnel图标，点击配置选择一个服务器开始连接”<br />
麻烦你仔细看看我的回复好吗？</div>

							
							
							
							
															<div id="post_rate_div_846009"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo846009_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=11595" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=59509&amp;repquote=846009&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 846009)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_19"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid846084" summary="pid846084" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=18864" target="_blank" id="userinfo846084" class="dropmenu" onmouseover="showMenu(this.id)">zhangsongq</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">Across the Great Firewall, you can reach every corner of the world.</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=18864">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=18864&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_20" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum846084" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=59509&page=1#pid846084', '话题链接已经复制到剪贴板')">21楼</strong>
													<em onclick="$('postmessage_846084').className='t_bigfont'">大</em>							<em onclick="$('postmessage_846084').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_846084').className='t_smallfont'">小</em>												发表于 2010-9-27 13:39&nbsp;																					<a href="viewthread.php?tid=59509&amp;page=1&amp;authorid=18864" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_20"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_20"></div><div id="ad_thread4_20"></div>
						
						
																											<div id="postmessage_846084" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>zzug</i> 于 2010-9-27 13:05 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=846009&amp;ptid=59509" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
“解压后双击打开myentunnel右键系统托盘的myentunnel图标，点击配置选择一个服务器开始连接”<br />
麻烦你仔细看看我的回复好吗？ </blockquote></div>水平差了，确实有困难，弄了一个上午，基本搞定，不再麻烦你了，O(∩_∩)O谢谢</div>

							
							
							
							
															<div id="post_rate_div_846084"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo846084_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://没有" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=18864" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=59509&amp;repquote=846084&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 846084)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_20"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid846113" summary="pid846113" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8663" target="_blank" id="userinfo846113" class="dropmenu" onmouseover="showMenu(this.id)">man-eleven</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">&#9773;校叛徒、基本上冲锋在后、共产主义的坚定不信任者;运动控(喜欢巨大无比万人欢呼沸腾的场面比如足球赛)、热爱自由、容易怀旧伤感、会办事不会说话，俺们村最有文化的人，没有之一</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8663">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8663&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_21" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum846113" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=59509&page=1#pid846113', '话题链接已经复制到剪贴板')">22楼</strong>
													<em onclick="$('postmessage_846113').className='t_bigfont'">大</em>							<em onclick="$('postmessage_846113').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_846113').className='t_smallfont'">小</em>												发表于 2010-9-27 13:57&nbsp;																					<a href="viewthread.php?tid=59509&amp;page=1&amp;authorid=8663" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_21"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_21"></div><div id="ad_thread4_21"></div>
						
						
																											<div id="postmessage_846113" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>库存袈裟</i> 于 2010-9-27 09:32 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=845666&amp;ptid=59509" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
“2.请能人详细说明每一步操作步骤，不要转载他人的文字，弄出你自己实际操作的方式方法”<br />
<br />
。。。。啧啧，还得要求找个体貌端正的青年翻墙培训师，手把手肉贴肉的一步步循序渐进深入浅出九浅一深是吧 </blockquote></div>//丫袈裟自恋，如此直接的表扬自己</div>

							
							
							
							
															<div id="post_rate_div_846113"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo846113_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=8663" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=59509&amp;repquote=846113&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 846113)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_21"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid846125" summary="pid846125" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 <a name="lastpost"></a>					<cite>											<a href="space.php?uid=12575" target="_blank" id="userinfo846125" class="dropmenu" onmouseover="showMenu(this.id)">ayayalover</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">呀呀大使</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12575">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12575&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_22" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum846125" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=59509&page=1#pid846125', '话题链接已经复制到剪贴板')">23楼</strong>
													<em onclick="$('postmessage_846125').className='t_bigfont'">大</em>							<em onclick="$('postmessage_846125').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_846125').className='t_smallfont'">小</em>												发表于 2010-9-27 14:00&nbsp;																					<a href="viewthread.php?tid=59509&amp;page=1&amp;authorid=12575" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_22"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_22"></div><div id="ad_thread4_22"></div>
						
						
																											<div id="postmessage_846125" class="t_msgfont">呵呵，按着楼上的方法我还真使用上了~~~就是有时候那个绿色在黄色中来回的转换，搞的我眼花~~</div>

							
							
							
							
															<div id="post_rate_div_846125"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo846125_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=12575" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=59509&amp;repquote=846125&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 846125)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_22"></div>				</div>
			</td>
		</tr>
		</table>
		</div>
</form>





<div class="pages_btns">
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=59509&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=59509&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
				<span class="postbtn" id="newspecialtmp" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=59509&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

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

	<form method="post" id="postform" action="post.php?action=reply&amp;fid=26&amp;tid=59509&amp;extra=&amp;replysubmit=yes" onSubmit="return validate(this)">
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
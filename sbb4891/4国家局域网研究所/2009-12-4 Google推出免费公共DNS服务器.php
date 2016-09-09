<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<title>Google推出免费公共DNS服务器 - 国家局域网研究所 -  1984bbs.com </title>
<meta name="keywords" content="" />
<meta name="MSSmartTagsPreventParsing" content="True" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<link rel="archives" title="1984bbs.com" href="https://1984bbs.com/archiver/" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_viewthread.css" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_common.css" />
<script type="text/javascript">
	var discuz_uid = 13019;var IMGDIR = 'images/default';var attackevasive = '0';var gid = 0;var STYLEID = '1';
	gid = parseInt('3');var fid = parseInt('26');var tid = parseInt('59512');
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
			<p><a href="index.php" id="forumlist" onmouseover="showMenu(this.id)" class="dropmenu">1984bbs.com</a> &raquo; <a href="forumdisplay.php?fid=26">国家局域网研究所</a> &raquo; Google推出免费公共DNS服务器</p>
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
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=59512&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=59512&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
				<span class="postbtn" id="newspecial" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=59512&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

	<ul class="popupmenu_popup newspecialmenu" id="newspecial_menu" style="display: none">
		<li><a href="post.php?action=newthread&amp;fid=26&amp;extra=">发新话题</a></li>
		<li class="poll"><a href="post.php?action=newthread&amp;fid=26&amp;extra=&amp;special=1">发布投票</a></li>													</ul>

<form method="post" name="modactions">
	<input type="hidden" name="formhash" value="823c9fa2" />
	<div class="mainbox viewthread">
		<span class="headactions">
					<a href="my.php?item=favorites&amp;tid=59512" id="ajax_favorite" onclick="ajaxmenu(event, this.id, 3000, 0)">收藏</a>
			<a href="my.php?item=subscriptions&amp;subadd=59512" id="ajax_subscription" onclick="ajaxmenu(event, this.id, 3000, null, 0)">订阅</a>
			<a href="misc.php?action=emailfriend&amp;tid=59512" id="emailfriend" onclick="ajaxmenu(event, this.id, 9000000, null, 0)">推荐</a>
				<a href="viewthread.php?action=printable&amp;tid=59512" target="_blank" class="notabs">打印</a>
				</span>
		<h1>Google推出免费公共DNS服务器		</h1>
				<ins>
						<a href="misc.php?action=viewthreadmod&amp;tid=59512" title="主题操作记录" target="_blank">本主题由 库存袈裟 于 2010-9-27 09:38 合并</a>								</ins>
							<table id="pid354951" summary="pid354951" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=5087" target="_blank" id="userinfo354951" class="dropmenu" onmouseover="showMenu(this.id)">嬉皮的朋克</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">@HippiePunkGoat@嬉皮的朋克</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=5087">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=5087&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_0" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum354951" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=59512&page=1#pid354951', '话题链接已经复制到剪贴板')">1楼</strong>
													<em onclick="$('postmessage_354951').className='t_bigfont'">大</em>							<em onclick="$('postmessage_354951').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_354951').className='t_smallfont'">小</em>												发表于 2009-12-4 09:05&nbsp;																					<a href="viewthread.php?tid=59512&amp;page=1&amp;authorid=5087" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_0"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_0"></div><div id="ad_thread4_0"></div>
													<h2>Google推出免费公共DNS服务器</h2>
						
						
																											<div id="postmessage_354951" class="t_msgfont">Google今天又给了我们一个惊喜，并沉重的打击了OpenDNS：他们刚刚宣布向所有的互联网用户提供一组快速，安全并且完全免费的DNS解析服务器，地址分别是：<br />
8.8.8.8<br />
8.8.4.4<br />
<br />
我想这组ip看过后没有人会忘记吧？各位读者们，赶紧去换DNS服务器吧！<br />
<br />
via googleblog</div>

							
							
							
							
															<div id="post_rate_div_354951"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo354951_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=5087" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=59512&amp;repquote=354951&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 354951)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_0"></div>				</div>
			</td>
		</tr>
		</table>
		</div><div class="ad_column" id="ad_interthread"><a href="/viewthread.php?tid=54699" target="_blank" style="color:red;">1984bbs是一个非营利项目，它需要您的捐助！</font></a>		</div>
	<div class="mainbox viewthread">
			<table id="pid354955" summary="pid354955" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1524" target="_blank" id="userinfo354955" class="dropmenu" onmouseover="showMenu(this.id)">kava</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">K </p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1524">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1524&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_1" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum354955" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=59512&page=1#pid354955', '话题链接已经复制到剪贴板')">2楼</strong>
													<em onclick="$('postmessage_354955').className='t_bigfont'">大</em>							<em onclick="$('postmessage_354955').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_354955').className='t_smallfont'">小</em>												发表于 2009-12-4 09:09&nbsp;																					<a href="viewthread.php?tid=59512&amp;page=1&amp;authorid=1524" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_1"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_1"></div><div id="ad_thread4_1"></div>
						
						
																											<div id="postmessage_354955" class="t_msgfont">ip真牛B<br />
<br />
会不会被封</div>

							
							
							
							
															<div id="post_rate_div_354955"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo354955_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1524" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=59512&amp;repquote=354955&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 354955)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_1"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid354958" summary="pid354958" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1524" target="_blank" id="userinfo354958" class="dropmenu" onmouseover="showMenu(this.id)">kava</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">K </p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1524">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1524&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_2" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum354958" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=59512&page=1#pid354958', '话题链接已经复制到剪贴板')">3楼</strong>
													<em onclick="$('postmessage_354958').className='t_bigfont'">大</em>							<em onclick="$('postmessage_354958').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_354958').className='t_smallfont'">小</em>												发表于 2009-12-4 09:11&nbsp;																					<a href="viewthread.php?tid=59512&amp;page=1&amp;authorid=1524" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_2"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_2"></div><div id="ad_thread4_2"></div>
						
						
																											<div id="postmessage_354958" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>kava</i> 于 2009-12-4 09:09 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=354955&amp;ptid=29852" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
ip真牛B<br />
<br />
会不会被封 </blockquote></div>现在只要网上出现了什么对咱上网有利的东西，我就在想这玩意能活多久，前两年还用过google的上网加速器，现在都没人记得了</div>

							
							
							
							
															<div id="post_rate_div_354958"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo354958_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1524" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=59512&amp;repquote=354958&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 354958)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_2"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid354961" summary="pid354961" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10054" target="_blank" id="userinfo354961" class="dropmenu" onmouseover="showMenu(this.id)">imus</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">升斗小民</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10054">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10054&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_3" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum354961" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=59512&page=1#pid354961', '话题链接已经复制到剪贴板')">4楼</strong>
													<em onclick="$('postmessage_354961').className='t_bigfont'">大</em>							<em onclick="$('postmessage_354961').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_354961').className='t_smallfont'">小</em>												发表于 2009-12-4 09:12&nbsp;																					<a href="viewthread.php?tid=59512&amp;page=1&amp;authorid=10054" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_3"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_3"></div><div id="ad_thread4_3"></div>
						
						
																											<div id="postmessage_354961" class="t_msgfont">我现在用的就是opendns</div>

							
							
							
							
															<div id="post_rate_div_354961"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo354961_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://imuspot.appspot.com/" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=10054" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=59512&amp;repquote=354961&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 354961)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_3"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid354967" summary="pid354967" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2213" target="_blank" id="userinfo354967" class="dropmenu" onmouseover="showMenu(this.id)">核子力量</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">Twitter.com/hzpower</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2213">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2213&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_4" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum354967" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=59512&page=1#pid354967', '话题链接已经复制到剪贴板')">5楼</strong>
													<em onclick="$('postmessage_354967').className='t_bigfont'">大</em>							<em onclick="$('postmessage_354967').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_354967').className='t_smallfont'">小</em>												发表于 2009-12-4 09:16&nbsp;																					<a href="viewthread.php?tid=59512&amp;page=1&amp;authorid=2213" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_4"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_4"></div><div id="ad_thread4_4"></div>
													<h2>Google 谈免费公共 DNS 服务器：一切为了速度</h2>
						
						
																											<div id="postmessage_354967" class="t_msgfont">Google 谈免费公共 DNS 服务器：一切为了速度<br />
从 谷奥——探寻谷歌的奥秘 作者：musiXboy<br />
有 5 人喜欢此条目<br />
<br />
google-dns 地址：8.8.8.8 / 8.8.4.4<br />
<br />
Google今天宣布开放免费的公共DNS服务器给大家使用，这是为啥呢？TechCrunch的阿灵顿与负责Google DNS的产品经理Prem Ramaswami聊了聊，他说Google DNS的目标是速度、安全性和有效性，它意味着完全没有劫持、没有阻截、没有过滤的DNS查询，而且速度飞快。在这个文档里可以了解到为什么Google DNS的速度更快。<br />
<br />
关于隐私保护也有专门的文档，其中说到Google会收集包括IP地址（48小时）、ISP信息和地理位置（2周）等信息。不过这些信息不会与你的Google账户有任何关联。平均每个用户每天可查询的次数现在限制在1000次。<br />
<br />
对了，别忘记，已经经营四年之久的OpenDNS每天会处理2千万次DNS查询，拥有1500万用户的他们在2008年里每天净赚2万美金——只是在DNS查询错误页面里放置广告而已。<br />
<br />
我们知道仅仅是一个DNS很难改变什么，为保护谷奥请河蟹评论，泄泄大家~~~~<br />
<br />
Via TechCrunch<br />
<br />
&#169; musiXboy 发表于 谷奥——探寻谷歌的奥秘 ( <a href="http://www.google.org.cn" target="_blank">http://www.google.org.cn</a> ), 2009. | 3 条评论 | 永久链接 | 关于谷奥 | 投稿/爆料<br />
Post tags: Google Public DNS, OpenDNS<br />
欢迎订阅谷安子站，关注Android新闻，技巧及更多 <br />
<br />
转自:<a href="http://www.google.org.cn/posts/google-talk-about-the-public-dns-all-just-for-speed.html" target="_blank">http://www.google.org.cn/posts/g ... just-for-speed.html</a><br />
<br />
Google今天又给了我们一个惊喜，并沉重的打击了OpenDNS：他们刚刚宣布向所有的互联网用户提供一组快速，安全并且完全免费的DNS解析服务器，地址分别是：<br />
<br />
&nbsp; &nbsp; * 8.8.8.8<br />
&nbsp; &nbsp; * 8.8.4.4<br />
<br />
我想这组ip看过后没有人会忘记吧？各位读者们，赶紧去换DNS服务器吧！<br />
<br />
via googleblog<br />
<br />
<a href="http://www.google.org.cn/posts/google-release-free-public-dns.html" target="_blank">http://www.google.org.cn/posts/g ... ree-public-dns.html</a></div>

							
							
							
							
															<div id="post_rate_div_354967"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo354967_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://twitter.com/hzpower" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=2213" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=59512&amp;repquote=354967&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 354967)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_4"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid354968" summary="pid354968" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=9591" target="_blank" id="userinfo354968" class="dropmenu" onmouseover="showMenu(this.id)">吃吃饭</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">想当文人</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=9591">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=9591&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_5" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum354968" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=59512&page=1#pid354968', '话题链接已经复制到剪贴板')">6楼</strong>
													<em onclick="$('postmessage_354968').className='t_bigfont'">大</em>							<em onclick="$('postmessage_354968').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_354968').className='t_smallfont'">小</em>												发表于 2009-12-4 09:16&nbsp;																					<a href="viewthread.php?tid=59512&amp;page=1&amp;authorid=9591" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_5"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_5"></div><div id="ad_thread4_5"></div>
						
						
																											<div id="postmessage_354968" class="t_msgfont">唉。。这种公司的服务就算是收钱也会用，这就是差距</div>

							
							
							
							
															<div id="post_rate_div_354968"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo354968_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=9591" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=59512&amp;repquote=354968&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 354968)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_5"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid354975" summary="pid354975" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=9908" target="_blank" id="userinfo354975" class="dropmenu" onmouseover="showMenu(this.id)">chumaiyishu</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=9908">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=9908&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_6" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum354975" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=59512&page=1#pid354975', '话题链接已经复制到剪贴板')">7楼</strong>
													<em onclick="$('postmessage_354975').className='t_bigfont'">大</em>							<em onclick="$('postmessage_354975').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_354975').className='t_smallfont'">小</em>												发表于 2009-12-4 09:23&nbsp;																					<a href="viewthread.php?tid=59512&amp;page=1&amp;authorid=9908" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_6"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_6"></div><div id="ad_thread4_6"></div>
						
						
																											<div id="postmessage_354975" class="t_msgfont">试了一下，还是需要翻墙，对我来说意义不大</div>

							
							
							
							
															<div id="post_rate_div_354975"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo354975_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=9908" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=59512&amp;repquote=354975&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 354975)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_6"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid354993" summary="pid354993" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2213" target="_blank" id="userinfo354993" class="dropmenu" onmouseover="showMenu(this.id)">核子力量</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">Twitter.com/hzpower</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2213">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2213&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_7" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum354993" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=59512&page=1#pid354993', '话题链接已经复制到剪贴板')">8楼</strong>
													<em onclick="$('postmessage_354993').className='t_bigfont'">大</em>							<em onclick="$('postmessage_354993').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_354993').className='t_smallfont'">小</em>												发表于 2009-12-4 09:33&nbsp;																					<a href="viewthread.php?tid=59512&amp;page=1&amp;authorid=2213" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_7"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_7"></div><div id="ad_thread4_7"></div>
													<h2>主流操作系统使用 Google DNS 快速设置教程</h2>
						
						
																											<div id="postmessage_354993" class="t_msgfont"><a href="http://www.google.org.cn/posts/how-to-setup-google-dns-under-osx-winxp-ubuntu-and-win7.html" target="_blank">http://www.google.org.cn/posts/h ... buntu-and-win7.html</a></div>

							
							
							
							
															<div id="post_rate_div_354993"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo354993_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://twitter.com/hzpower" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=2213" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=59512&amp;repquote=354993&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 354993)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_7"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid355070" summary="pid355070" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=4105" target="_blank" id="userinfo355070" class="dropmenu" onmouseover="showMenu(this.id)">只是看看</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=4105">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=4105&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_8" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum355070" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=59512&page=1#pid355070', '话题链接已经复制到剪贴板')">9楼</strong>
													<em onclick="$('postmessage_355070').className='t_bigfont'">大</em>							<em onclick="$('postmessage_355070').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_355070').className='t_smallfont'">小</em>												发表于 2009-12-4 10:24&nbsp;																					<a href="viewthread.php?tid=59512&amp;page=1&amp;authorid=4105" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_8"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_8"></div><div id="ad_thread4_8"></div>
						
						
																											<div id="postmessage_355070" class="t_msgfont">8.8.8.8可以<br />
8.8.4.4不行<br />
速度很快<br />
<br />
而且不会出现不能被解析的域名被劫持<br />
<br />
[<i> 本帖最后由 只是看看 于 2009-12-4 10:25 编辑 </i>]</div>

							
							
							
							
															<div id="post_rate_div_355070"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo355070_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=4105" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=59512&amp;repquote=355070&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 355070)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_8"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid355191" summary="pid355191" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6628" target="_blank" id="userinfo355191" class="dropmenu" onmouseover="showMenu(this.id)">lltgod</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">SavageGod</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6628">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6628&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_9" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum355191" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=59512&page=1#pid355191', '话题链接已经复制到剪贴板')">10楼</strong>
													<em onclick="$('postmessage_355191').className='t_bigfont'">大</em>							<em onclick="$('postmessage_355191').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_355191').className='t_smallfont'">小</em>												发表于 2009-12-4 11:24&nbsp;																					<a href="viewthread.php?tid=59512&amp;page=1&amp;authorid=6628" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_9"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_9"></div><div id="ad_thread4_9"></div>
						
						
																											<div id="postmessage_355191" class="t_msgfont">测试有效</div>

							
							
							
							
															<div id="post_rate_div_355191"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo355191_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=6628" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=59512&amp;repquote=355191&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 355191)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_9"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid355508" summary="pid355508" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=9835" target="_blank" id="userinfo355508" class="dropmenu" onmouseover="showMenu(this.id)">sean</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=9835">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=9835&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_10" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum355508" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=59512&page=1#pid355508', '话题链接已经复制到剪贴板')">11楼</strong>
													<em onclick="$('postmessage_355508').className='t_bigfont'">大</em>							<em onclick="$('postmessage_355508').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_355508').className='t_smallfont'">小</em>												发表于 2009-12-4 14:33&nbsp;																					<a href="viewthread.php?tid=59512&amp;page=1&amp;authorid=9835" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_10"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_10"></div><div id="ad_thread4_10"></div>
						
						
																											<div id="postmessage_355508" class="t_msgfont">要是哪天出来个8.9.6.4 ......</div>

							
							
							
							
															<div id="post_rate_div_355508"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo355508_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=9835" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=59512&amp;repquote=355508&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 355508)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_10"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid355541" summary="pid355541" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2441" target="_blank" id="userinfo355541" class="dropmenu" onmouseover="showMenu(this.id)">高渐离</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">组内伍毛全家死光</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2441">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2441&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_11" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum355541" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=59512&page=1#pid355541', '话题链接已经复制到剪贴板')">12楼</strong>
													<em onclick="$('postmessage_355541').className='t_bigfont'">大</em>							<em onclick="$('postmessage_355541').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_355541').className='t_smallfont'">小</em>												发表于 2009-12-4 14:47&nbsp;																					<a href="viewthread.php?tid=59512&amp;page=1&amp;authorid=2441" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_11"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_11"></div><div id="ad_thread4_11"></div>
						
						
																											<div id="postmessage_355541" class="t_msgfont">何时能够P2P方式的翻墙，我就不去炸掉方兴斌的祖坟了。</div>

							
							
							
							
															<div id="post_rate_div_355541"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo355541_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=2441" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=59512&amp;repquote=355541&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 355541)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_11"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid355605" summary="pid355605" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=9119" target="_blank" id="userinfo355605" class="dropmenu" onmouseover="showMenu(this.id)">unevery</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=9119">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=9119&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_12" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum355605" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=59512&page=1#pid355605', '话题链接已经复制到剪贴板')">13楼</strong>
													<em onclick="$('postmessage_355605').className='t_bigfont'">大</em>							<em onclick="$('postmessage_355605').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_355605').className='t_smallfont'">小</em>												发表于 2009-12-4 15:15&nbsp;																					<a href="viewthread.php?tid=59512&amp;page=1&amp;authorid=9119" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_12"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_12"></div><div id="ad_thread4_12"></div>
						
						
																											<div id="postmessage_355605" class="t_msgfont">支持google的速度</div>

							
							
							
							
															<div id="post_rate_div_355605"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo355605_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=9119" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=59512&amp;repquote=355605&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 355605)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_12"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid355852" summary="pid355852" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8710" target="_blank" id="userinfo355852" class="dropmenu" onmouseover="showMenu(this.id)">陈少举</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">国服六区海达西亚联盟暗夜精灵牧师/部落血精灵牧师/台服奥尼克西亚联盟暗夜精灵牧师</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8710">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8710&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_13" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum355852" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=59512&page=1#pid355852', '话题链接已经复制到剪贴板')">14楼</strong>
													<em onclick="$('postmessage_355852').className='t_bigfont'">大</em>							<em onclick="$('postmessage_355852').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_355852').className='t_smallfont'">小</em>												发表于 2009-12-4 17:48&nbsp;																					<a href="viewthread.php?tid=59512&amp;page=1&amp;authorid=8710" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_13"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_13"></div><div id="ad_thread4_13"></div>
						
						
																											<div id="postmessage_355852" class="t_msgfont">还有一个隐藏的， 4.3.2.1 ，也是Google的……</div>

							
							
							
							
															<div id="post_rate_div_355852"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo355852_menu" style="display: none;">
										<div class="imicons">
													<a target='_blank' href='http://settings.messenger.live.com/Conversation/IMMe.aspx?invitee=chenshaoju@hotmail.com&mkt=zh-cn'><img style='border-style: none;' src='http://messenger.services.live.com/users/chenshaoju@hotmail.com/presenceimage?mkt=zh-cn' width='16' height='16' /></a>
												<a href="http://wpa.qq.com/msgrd?V=1&amp;Uin=840748&amp;Site=1984bbs.com&amp;Menu=yes" target="_blank"><img src="images/default/qq.gif" alt="QQ" /></a>																							</div>
										<dl></dl>
											<p><a href="http://www.chenshaoju.com" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=8710" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=59512&amp;repquote=355852&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 355852)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_13"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid355978" summary="pid355978" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2930" target="_blank" id="userinfo355978" class="dropmenu" onmouseover="showMenu(this.id)">SrAcer</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">党强加于人的世界观在无法理解它的人们那里最容易被接受。——《１９８４》</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2930">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2930&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_14" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum355978" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=59512&page=1#pid355978', '话题链接已经复制到剪贴板')">15楼</strong>
													<em onclick="$('postmessage_355978').className='t_bigfont'">大</em>							<em onclick="$('postmessage_355978').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_355978').className='t_smallfont'">小</em>												发表于 2009-12-4 19:46&nbsp;																					<a href="viewthread.php?tid=59512&amp;page=1&amp;authorid=2930" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_14"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_14"></div><div id="ad_thread4_14"></div>
						
						
																											<div id="postmessage_355978" class="t_msgfont">比OpenDNS好记，太好了。</div>

							
							
							
							
															<div id="post_rate_div_355978"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo355978_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=2930" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=59512&amp;repquote=355978&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 355978)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_14"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid356023" summary="pid356023" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10195" target="_blank" id="userinfo356023" class="dropmenu" onmouseover="showMenu(this.id)">gasvin</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">人物山水</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10195">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10195&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_15" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum356023" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=59512&page=1#pid356023', '话题链接已经复制到剪贴板')">16楼</strong>
													<em onclick="$('postmessage_356023').className='t_bigfont'">大</em>							<em onclick="$('postmessage_356023').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_356023').className='t_smallfont'">小</em>												发表于 2009-12-4 20:22&nbsp;																					<a href="viewthread.php?tid=59512&amp;page=1&amp;authorid=10195" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_15"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_15"></div><div id="ad_thread4_15"></div>
						
						
																											<div id="postmessage_356023" class="t_msgfont">用上了，不错。</div>

							
							
							
							
															<div id="post_rate_div_356023"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo356023_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=10195" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=59512&amp;repquote=356023&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 356023)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_15"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid357409" summary="pid357409" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1162" target="_blank" id="userinfo357409" class="dropmenu" onmouseover="showMenu(this.id)">小龙人</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">草马族族民</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1162">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1162&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_16" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum357409" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=59512&page=1#pid357409', '话题链接已经复制到剪贴板')">17楼</strong>
													<em onclick="$('postmessage_357409').className='t_bigfont'">大</em>							<em onclick="$('postmessage_357409').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_357409').className='t_smallfont'">小</em>												发表于 2009-12-5 19:53&nbsp;																					<a href="viewthread.php?tid=59512&amp;page=1&amp;authorid=1162" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_16"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_16"></div><div id="ad_thread4_16"></div>
						
						
																											<div id="postmessage_357409" class="t_msgfont">用上了，速度真快！</div>

							
							
							
							
															<div id="post_rate_div_357409"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo357409_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1162" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=59512&amp;repquote=357409&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 357409)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_16"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid357440" summary="pid357440" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=5798" target="_blank" id="userinfo357440" class="dropmenu" onmouseover="showMenu(this.id)">Jyamolmiry</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">两岸猿声啼不住，党的政策亚克西。</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=5798">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=5798&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_17" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum357440" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=59512&page=1#pid357440', '话题链接已经复制到剪贴板')">18楼</strong>
													<em onclick="$('postmessage_357440').className='t_bigfont'">大</em>							<em onclick="$('postmessage_357440').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_357440').className='t_smallfont'">小</em>												发表于 2009-12-5 20:24&nbsp;																					<a href="viewthread.php?tid=59512&amp;page=1&amp;authorid=5798" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_17"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_17"></div><div id="ad_thread4_17"></div>
						
						
																											<div id="postmessage_357440" class="t_msgfont">怎样感觉到变快啊？我没有明显的感觉</div>

							
							
							
							
															<div id="post_rate_div_357440"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo357440_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=5798" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=59512&amp;repquote=357440&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 357440)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_17"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid357813" summary="pid357813" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8094" target="_blank" id="userinfo357813" class="dropmenu" onmouseover="showMenu(this.id)">oxygen</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8094">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8094&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_18" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum357813" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=59512&page=1#pid357813', '话题链接已经复制到剪贴板')">19楼</strong>
													<em onclick="$('postmessage_357813').className='t_bigfont'">大</em>							<em onclick="$('postmessage_357813').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_357813').className='t_smallfont'">小</em>												发表于 2009-12-6 00:00&nbsp;																					<a href="viewthread.php?tid=59512&amp;page=1&amp;authorid=8094" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_18"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_18"></div><div id="ad_thread4_18"></div>
						
						
																											<div id="postmessage_357813" class="t_msgfont">Google 威武。。。</div>

							
							
							
							
															<div id="post_rate_div_357813"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo357813_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=8094" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=59512&amp;repquote=357813&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 357813)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_18"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid357954" summary="pid357954" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=4090" target="_blank" id="userinfo357954" class="dropmenu" onmouseover="showMenu(this.id)">菜青虫</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">老蔡</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=4090">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=4090&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_19" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum357954" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=59512&page=1#pid357954', '话题链接已经复制到剪贴板')">20楼</strong>
													<em onclick="$('postmessage_357954').className='t_bigfont'">大</em>							<em onclick="$('postmessage_357954').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_357954').className='t_smallfont'">小</em>												发表于 2009-12-6 05:46&nbsp;																					<a href="viewthread.php?tid=59512&amp;page=1&amp;authorid=4090" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_19"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_19"></div><div id="ad_thread4_19"></div>
						
						
																											<div id="postmessage_357954" class="t_msgfont">哈哈哈 顶三楼的</div>

							
							
							
							
															<div id="post_rate_div_357954"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo357954_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=4090" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=59512&amp;repquote=357954&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 357954)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_19"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid358118" summary="pid358118" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=9214" target="_blank" id="userinfo358118" class="dropmenu" onmouseover="showMenu(this.id)">英雄贵姓</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">生活在一个由封建阶级统治的用资本主义生产方式发展的被定义为社会主义国家的奴隶制国家的屁民。</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=9214">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=9214&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_20" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum358118" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=59512&page=1#pid358118', '话题链接已经复制到剪贴板')">21楼</strong>
													<em onclick="$('postmessage_358118').className='t_bigfont'">大</em>							<em onclick="$('postmessage_358118').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_358118').className='t_smallfont'">小</em>												发表于 2009-12-6 11:25&nbsp;																					<a href="viewthread.php?tid=59512&amp;page=1&amp;authorid=9214" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_20"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_20"></div><div id="ad_thread4_20"></div>
						
						
																											<div id="postmessage_358118" class="t_msgfont">直接设置DNS就行了吗？</div>

							
							
							
							
															<div id="post_rate_div_358118"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo358118_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=9214" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=59512&amp;repquote=358118&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 358118)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_20"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid358237" summary="pid358237" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8580" target="_blank" id="userinfo358237" class="dropmenu" onmouseover="showMenu(this.id)">fuckcpc</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8580">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8580&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_21" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum358237" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=59512&page=1#pid358237', '话题链接已经复制到剪贴板')">22楼</strong>
													<em onclick="$('postmessage_358237').className='t_bigfont'">大</em>							<em onclick="$('postmessage_358237').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_358237').className='t_smallfont'">小</em>												发表于 2009-12-6 12:58&nbsp;																					<a href="viewthread.php?tid=59512&amp;page=1&amp;authorid=8580" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_21"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_21"></div><div id="ad_thread4_21"></div>
						
						
																											<div id="postmessage_358237" class="t_msgfont">慎用！&nbsp;&nbsp;我这边WiFI自动获取IP的，改了后，重新开机后，怎么也连不上网。修改成自动获取后就好了。&nbsp;&nbsp;我真没福气。</div>

							
							
							
							
															<div id="post_rate_div_358237"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo358237_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://twitter.com/fuckCPC" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=8580" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=59512&amp;repquote=358237&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 358237)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_21"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid359354" summary="pid359354" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7661" target="_blank" id="userinfo359354" class="dropmenu" onmouseover="showMenu(this.id)">CMGS</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">虚空中的神</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7661">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7661&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_22" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum359354" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=59512&page=1#pid359354', '话题链接已经复制到剪贴板')">23楼</strong>
													<em onclick="$('postmessage_359354').className='t_bigfont'">大</em>							<em onclick="$('postmessage_359354').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_359354').className='t_smallfont'">小</em>												发表于 2009-12-7 10:14&nbsp;																					<a href="viewthread.php?tid=59512&amp;page=1&amp;authorid=7661" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_22"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_22"></div><div id="ad_thread4_22"></div>
						
						
																											<div id="postmessage_359354" class="t_msgfont">我在这边测试的是Google的Public DNS解析速度没有Open DNS快。。</div>

							
							
							
							
															<div id="post_rate_div_359354"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo359354_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=7661" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=59512&amp;repquote=359354&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 359354)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_22"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid359415" summary="pid359415" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=658" target="_blank" id="userinfo359415" class="dropmenu" onmouseover="showMenu(this.id)">Cybertarian</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=658">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=658&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_23" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum359415" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=59512&page=1#pid359415', '话题链接已经复制到剪贴板')">24楼</strong>
													<em onclick="$('postmessage_359415').className='t_bigfont'">大</em>							<em onclick="$('postmessage_359415').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_359415').className='t_smallfont'">小</em>												发表于 2009-12-7 11:01&nbsp;																					<a href="viewthread.php?tid=59512&amp;page=1&amp;authorid=658" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_23"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_23"></div><div id="ad_thread4_23"></div>
						
						
																											<div id="postmessage_359415" class="t_msgfont">速度貌似慢了点。。。</div>

							
							
							
							
															<div id="post_rate_div_359415"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo359415_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=658" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=59512&amp;repquote=359415&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 359415)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_23"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid845591" summary="pid845591" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=18864" target="_blank" id="userinfo845591" class="dropmenu" onmouseover="showMenu(this.id)">zhangsongq</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">Across the Great Firewall, you can reach every corner of the world.</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=18864">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=18864&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_24" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum845591" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=59512&page=1#pid845591', '话题链接已经复制到剪贴板')">25楼</strong>
													<em onclick="$('postmessage_845591').className='t_bigfont'">大</em>							<em onclick="$('postmessage_845591').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_845591').className='t_smallfont'">小</em>												发表于 2010-9-27 08:15&nbsp;																					<a href="viewthread.php?tid=59512&amp;page=1&amp;authorid=18864" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_24"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_24"></div><div id="ad_thread4_24"></div>
													<h2>在firefox下，google的DNS怎么更换？</h2>
						
						
																											<div id="postmessage_845591" class="t_msgfont">在firefox下，google的DNS怎么更换？<br />
<br />
在firefox下，google的DNS怎么更换？<br />
<br />
1.详细说明操作步骤；<br />
<br />
2.O(∩_∩)O谢谢!</div>

							
							
							
							
															<div id="post_rate_div_845591"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo845591_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://没有" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=18864" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=59512&amp;repquote=845591&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 845591)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_24"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid845670" summary="pid845670" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1960" target="_blank" id="userinfo845670" class="dropmenu" onmouseover="showMenu(this.id)">库存袈裟</a></cite>
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
						<strong title="复制话题链接到剪贴板" id="postnum845670" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=59512&page=1#pid845670', '话题链接已经复制到剪贴板')">26楼</strong>
													<em onclick="$('postmessage_845670').className='t_bigfont'">大</em>							<em onclick="$('postmessage_845670').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_845670').className='t_smallfont'">小</em>												发表于 2010-9-27 09:35&nbsp;																					<a href="viewthread.php?tid=59512&amp;page=1&amp;authorid=1960" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_25"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_25"></div><div id="ad_thread4_25"></div>
						
						
																											<div id="postmessage_845670" class="t_msgfont">XP <a href="https://store.opendns.com/setup/operatingsystem/windows-xp" target="_blank">https://store.opendns.com/setup/operatingsystem/windows-xp</a><br />
vista <a href="https://store.opendns.com/setup/operatingsystem/windows-vista" target="_blank">https://store.opendns.com/setup/operatingsystem/windows-vista</a><br />
win7 <a href="https://store.opendns.com/setup/operatingsystem/windows-7" target="_blank">https://store.opendns.com/setup/operatingsystem/windows-7</a><br />
mac os <a href="https://store.opendns.com/setup/operatingsystem/apple-osx-leopard" target="_blank">https://store.opendns.com/setup/operatingsystem/apple-osx-leopard</a><br />
ubuntu <a href="https://store.opendns.com/setup/operatingsystem/ubuntu" target="_blank">https://store.opendns.com/setup/operatingsystem/ubuntu</a></div>

							
							
							
							
															<div id="post_rate_div_845670"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo845670_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1960" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=59512&amp;repquote=845670&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 845670)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_25"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid847289" summary="pid847289" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 <a name="lastpost"></a>					<cite>											<a href="space.php?uid=18864" target="_blank" id="userinfo847289" class="dropmenu" onmouseover="showMenu(this.id)">zhangsongq</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">Across the Great Firewall, you can reach every corner of the world.</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=18864">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=18864&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_26" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum847289" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=59512&page=1#pid847289', '话题链接已经复制到剪贴板')">27楼</strong>
													<em onclick="$('postmessage_847289').className='t_bigfont'">大</em>							<em onclick="$('postmessage_847289').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_847289').className='t_smallfont'">小</em>												发表于 2010-9-28 11:45&nbsp;																					<a href="viewthread.php?tid=59512&amp;page=1&amp;authorid=18864" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_26"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_26"></div><div id="ad_thread4_26"></div>
						
						
																											<div id="postmessage_847289" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>库存袈裟</i> 于 2010-9-27 09:35 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=845670&amp;ptid=59512" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
XP <a href="https://store.opendns.com/setup/operatingsystem/windows-xp" target="_blank">https://store.opendns.com/setup/operatingsystem/windows-xp</a><br />
vista <a href="https://store.opendns.com/setup/operatingsystem/windows-vista" target="_blank">https://store.opendns.com/setup/operatingsystem/windows-vista</a><br />
win7 <a href="https://store.opendns.com/setup/operatingsystem/windows-7" target="_blank">https://store.opendns.com/setup/operatingsystem/windows-7</a><br />
mac&nbsp;&nbsp;... </blockquote></div>O(∩_∩)O谢谢，……，就需要win7下的</div>

							
							
							
							
															<div id="post_rate_div_847289"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo847289_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://没有" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=18864" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=59512&amp;repquote=847289&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 847289)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_26"></div>				</div>
			</td>
		</tr>
		</table>
		</div>
</form>





<div class="pages_btns">
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=59512&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=59512&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
				<span class="postbtn" id="newspecialtmp" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=59512&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

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

	<form method="post" id="postform" action="post.php?action=reply&amp;fid=26&amp;tid=59512&amp;extra=&amp;replysubmit=yes" onSubmit="return validate(this)">
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
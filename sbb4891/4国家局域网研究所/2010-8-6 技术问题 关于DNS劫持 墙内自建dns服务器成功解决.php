<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<title>技术问题 关于DNS劫持  墙内自建dns服务器成功解决 - 国家局域网研究所 -  1984bbs.com </title>
<meta name="keywords" content="" />
<meta name="MSSmartTagsPreventParsing" content="True" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<link rel="archives" title="1984bbs.com" href="https://1984bbs.com/archiver/" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_viewthread.css" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_common.css" />
<script type="text/javascript">
	var discuz_uid = 13019;var IMGDIR = 'images/default';var attackevasive = '0';var gid = 0;var STYLEID = '1';
	gid = parseInt('3');var fid = parseInt('26');var tid = parseInt('54785');
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
			<p><a href="index.php" id="forumlist" onmouseover="showMenu(this.id)" class="dropmenu">1984bbs.com</a> &raquo; <a href="forumdisplay.php?fid=26">国家局域网研究所</a> &raquo; 技术问题 关于DNS劫持  墙内自建dns服务器成功解决</p>
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
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=54785&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=54785&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
				<span class="postbtn" id="newspecial" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=54785&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

	<ul class="popupmenu_popup newspecialmenu" id="newspecial_menu" style="display: none">
		<li><a href="post.php?action=newthread&amp;fid=26&amp;extra=">发新话题</a></li>
		<li class="poll"><a href="post.php?action=newthread&amp;fid=26&amp;extra=&amp;special=1">发布投票</a></li>													</ul>

<form method="post" name="modactions">
	<input type="hidden" name="formhash" value="823c9fa2" />
	<div class="mainbox viewthread">
		<span class="headactions">
					<a href="my.php?item=favorites&amp;tid=54785" id="ajax_favorite" onclick="ajaxmenu(event, this.id, 3000, 0)">收藏</a>
			<a href="my.php?item=subscriptions&amp;subadd=54785" id="ajax_subscription" onclick="ajaxmenu(event, this.id, 3000, null, 0)">订阅</a>
			<a href="misc.php?action=emailfriend&amp;tid=54785" id="emailfriend" onclick="ajaxmenu(event, this.id, 9000000, null, 0)">推荐</a>
				<a href="viewthread.php?action=printable&amp;tid=54785" target="_blank" class="notabs">打印</a>
				</span>
		<h1>技术问题 关于DNS劫持  墙内自建dns服务器成功解决		</h1>
							<table id="pid772205" summary="pid772205" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=16164" target="_blank" id="userinfo772205" class="dropmenu" onmouseover="showMenu(this.id)">linyan431</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">自建twitter API ｜ https://www.kuailewang.info/twitter</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=16164">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=16164&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_0" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum772205" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=54785&page=1#pid772205', '话题链接已经复制到剪贴板')">1楼</strong>
													<em onclick="$('postmessage_772205').className='t_bigfont'">大</em>							<em onclick="$('postmessage_772205').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_772205').className='t_smallfont'">小</em>												发表于 2010-8-6 17:18&nbsp;																					<a href="viewthread.php?tid=54785&amp;page=1&amp;authorid=16164" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_0"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_0"></div><div id="ad_thread4_0"></div>
													<h2>技术问题 关于DNS劫持  墙内自建dns服务器成功解决</h2>
						
						
																											<div id="postmessage_772205" class="t_msgfont">原来gfw在封掉域名以后 向墙外的dns服务器请求时<br />
<br />
会直接截断<br />
<br />
解决办法就是在墙内建一台dns服务器<br />
<br />
然后让你的用户把dns设置成这个服务器<br />
<br />
即使域名被墙 原有用户依然可以进论坛<br />
<br />
那么就可以告诉他们新的域名<br />
<br />
[<i> 本帖最后由 linyan431 于 2010-8-6 19:20 编辑 </i>]</div>

							
							
							
							
															<div id="post_rate_div_772205"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo772205_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=16164" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=54785&amp;repquote=772205&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 772205)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_0"></div>				</div>
			</td>
		</tr>
		</table>
		</div><div class="ad_column" id="ad_interthread"><a href="/viewthread.php?tid=54699" target="_blank" style="color:red;">1984bbs是一个非营利项目，它需要您的捐助！</font></a>		</div>
	<div class="mainbox viewthread">
			<table id="pid772209" summary="pid772209" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=17661" target="_blank" id="userinfo772209" class="dropmenu" onmouseover="showMenu(this.id)">Zipurmouth</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=17661">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=17661&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_1" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum772209" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=54785&page=1#pid772209', '话题链接已经复制到剪贴板')">2楼</strong>
													<em onclick="$('postmessage_772209').className='t_bigfont'">大</em>							<em onclick="$('postmessage_772209').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_772209').className='t_smallfont'">小</em>												发表于 2010-8-6 17:23&nbsp;																					<a href="viewthread.php?tid=54785&amp;page=1&amp;authorid=17661" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_1"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_1"></div><div id="ad_thread4_1"></div>
													<h2>回复 1楼 linyan431 的话题</h2>
						
						
																											<div id="postmessage_772209" class="t_msgfont">你论坛的服务器是电信的还是网通的？</div>

							
							
							
							
															<div id="post_rate_div_772209"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo772209_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=17661" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=54785&amp;repquote=772209&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 772209)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_1"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid772211" summary="pid772211" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1960" target="_blank" id="userinfo772211" class="dropmenu" onmouseover="showMenu(this.id)">库存袈裟</a></cite>
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
						<strong title="复制话题链接到剪贴板" id="postnum772211" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=54785&page=1#pid772211', '话题链接已经复制到剪贴板')">3楼</strong>
													<em onclick="$('postmessage_772211').className='t_bigfont'">大</em>							<em onclick="$('postmessage_772211').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_772211').className='t_smallfont'">小</em>												发表于 2010-8-6 17:23&nbsp;																					<a href="viewthread.php?tid=54785&amp;page=1&amp;authorid=1960" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_2"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_2"></div><div id="ad_thread4_2"></div>
						
						
																											<div id="postmessage_772211" class="t_msgfont">请PM网址，以便测试。</div>

							
							
							
							
															<div id="post_rate_div_772211"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo772211_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1960" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=54785&amp;repquote=772211&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 772211)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_2"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid772212" summary="pid772212" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=16164" target="_blank" id="userinfo772212" class="dropmenu" onmouseover="showMenu(this.id)">linyan431</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">自建twitter API ｜ https://www.kuailewang.info/twitter</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=16164">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=16164&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_3" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum772212" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=54785&page=1#pid772212', '话题链接已经复制到剪贴板')">4楼</strong>
													<em onclick="$('postmessage_772212').className='t_bigfont'">大</em>							<em onclick="$('postmessage_772212').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_772212').className='t_smallfont'">小</em>												发表于 2010-8-6 17:23&nbsp;																					<a href="viewthread.php?tid=54785&amp;page=1&amp;authorid=16164" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_3"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_3"></div><div id="ad_thread4_3"></div>
						
						
																											<div id="postmessage_772212" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>Zipurmouth</i> 于 2010-8-6 17:23 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=772209&amp;ptid=54785" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
你论坛的服务器是电信的还是网通的？ </blockquote></div>不是电信也不是网通 服务器在我自己家里<br />
<br />
我不在国内</div>

							
							
							
							
															<div id="post_rate_div_772212"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo772212_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=16164" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=54785&amp;repquote=772212&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 772212)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_3"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid772215" summary="pid772215" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=17661" target="_blank" id="userinfo772215" class="dropmenu" onmouseover="showMenu(this.id)">Zipurmouth</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=17661">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=17661&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_4" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum772215" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=54785&page=1#pid772215', '话题链接已经复制到剪贴板')">5楼</strong>
													<em onclick="$('postmessage_772215').className='t_bigfont'">大</em>							<em onclick="$('postmessage_772215').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_772215').className='t_smallfont'">小</em>												发表于 2010-8-6 17:25&nbsp;																					<a href="viewthread.php?tid=54785&amp;page=1&amp;authorid=17661" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_4"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_4"></div><div id="ad_thread4_4"></div>
													<h2>回复 4楼 linyan431 的话题</h2>
						
						
																											<div id="postmessage_772215" class="t_msgfont">有没有试过opendns?</div>

							
							
							
							
															<div id="post_rate_div_772215"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo772215_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=17661" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=54785&amp;repquote=772215&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 772215)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_4"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid772218" summary="pid772218" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=16164" target="_blank" id="userinfo772218" class="dropmenu" onmouseover="showMenu(this.id)">linyan431</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">自建twitter API ｜ https://www.kuailewang.info/twitter</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=16164">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=16164&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_5" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum772218" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=54785&page=1#pid772218', '话题链接已经复制到剪贴板')">6楼</strong>
													<em onclick="$('postmessage_772218').className='t_bigfont'">大</em>							<em onclick="$('postmessage_772218').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_772218').className='t_smallfont'">小</em>												发表于 2010-8-6 17:25&nbsp;																					<a href="viewthread.php?tid=54785&amp;page=1&amp;authorid=16164" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_5"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_5"></div><div id="ad_thread4_5"></div>
						
						
																											<div id="postmessage_772218" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>库存袈裟</i> 于 2010-8-6 17:23 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=772211&amp;ptid=54785" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
请PM网址，以便测试。 </blockquote></div>已pm 能得到1984技术大大的支持 <br />
<br />
觉得非常的荣欣 <br />
<br />
表示衷心的感谢</div>

							
							
							
							
															<div id="post_rate_div_772218"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo772218_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=16164" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=54785&amp;repquote=772218&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 772218)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_5"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid772220" summary="pid772220" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=16164" target="_blank" id="userinfo772220" class="dropmenu" onmouseover="showMenu(this.id)">linyan431</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">自建twitter API ｜ https://www.kuailewang.info/twitter</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=16164">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=16164&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_6" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum772220" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=54785&page=1#pid772220', '话题链接已经复制到剪贴板')">7楼</strong>
													<em onclick="$('postmessage_772220').className='t_bigfont'">大</em>							<em onclick="$('postmessage_772220').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_772220').className='t_smallfont'">小</em>												发表于 2010-8-6 17:26&nbsp;																					<a href="viewthread.php?tid=54785&amp;page=1&amp;authorid=16164" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_6"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_6"></div><div id="ad_thread4_6"></div>
						
						
																											<div id="postmessage_772220" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>Zipurmouth</i> 于 2010-8-6 17:25 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=772215&amp;ptid=54785" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
有没有试过opendns? </blockquote></div>我自己没有测试opendns 测试了google的 <br />
<br />
但是我在论坛服务器上自建了dns服务器 应该说不会受到污染</div>

							
							
							
							
															<div id="post_rate_div_772220"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo772220_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=16164" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=54785&amp;repquote=772220&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 772220)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_6"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid772233" summary="pid772233" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=17661" target="_blank" id="userinfo772233" class="dropmenu" onmouseover="showMenu(this.id)">Zipurmouth</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=17661">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=17661&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_7" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum772233" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=54785&page=1#pid772233', '话题链接已经复制到剪贴板')">8楼</strong>
													<em onclick="$('postmessage_772233').className='t_bigfont'">大</em>							<em onclick="$('postmessage_772233').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_772233').className='t_smallfont'">小</em>												发表于 2010-8-6 17:31&nbsp;																					<a href="viewthread.php?tid=54785&amp;page=1&amp;authorid=17661" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_7"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_7"></div><div id="ad_thread4_7"></div>
													<h2>回复 7楼 linyan431 的话题</h2>
						
						
																											<div id="postmessage_772233" class="t_msgfont">看看C:\WINDOWS\SYSTEM32\drivers\etc\hosts里<br />
nslookup和ipconfig/all 上来看看</div>

							
							
							
							
															<div id="post_rate_div_772233"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo772233_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=17661" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=54785&amp;repquote=772233&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 772233)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_7"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid772246" summary="pid772246" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=16164" target="_blank" id="userinfo772246" class="dropmenu" onmouseover="showMenu(this.id)">linyan431</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">自建twitter API ｜ https://www.kuailewang.info/twitter</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=16164">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=16164&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_8" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum772246" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=54785&page=1#pid772246', '话题链接已经复制到剪贴板')">9楼</strong>
													<em onclick="$('postmessage_772246').className='t_bigfont'">大</em>							<em onclick="$('postmessage_772246').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_772246').className='t_smallfont'">小</em>												发表于 2010-8-6 17:37&nbsp;																					<a href="viewthread.php?tid=54785&amp;page=1&amp;authorid=16164" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_8"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_8"></div><div id="ad_thread4_8"></div>
						
						
																											<div id="postmessage_772246" class="t_msgfont">C:\Documents and Settings\linyan431&gt;nslookup<br />
Default Server:&nbsp;&nbsp;p8bb6cc.tokynt01.ap.so-net.ne.jp<br />
Address:&nbsp;&nbsp;210.139.182.204<br />
<br />
Ethernet adapter 本地连接:<br />
<br />
&nbsp; &nbsp;Connection-specific DNS Suffix&nbsp;&nbsp;. :<br />
&nbsp; &nbsp;Description . . . . . . . . . . . : Broadcom NetXtreme Gigabit Ethernet<br />
&nbsp; &nbsp;Physical Address. . . . . . . . . : 00-14-5E-22-18-48<br />
&nbsp; &nbsp;DHCP Enabled. . . . . . . . . . . : No<br />
&nbsp; &nbsp;IP Address. . . . . . . . . . . . : 114.80.115.207<br />
&nbsp; &nbsp;Subnet Mask . . . . . . . . . . . : 255.255.255.128<br />
&nbsp; &nbsp;Default Gateway . . . . . . . . . : 114.80.115.129<br />
&nbsp; &nbsp;DNS Servers . . . . . . . . . . . : 210.139.182.204<br />
<br />
本地的hosts文件肯定没有问题 已经检查了</div>

							
							
							
							
															<div id="post_rate_div_772246"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo772246_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=16164" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=54785&amp;repquote=772246&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 772246)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_8"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid772259" summary="pid772259" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1960" target="_blank" id="userinfo772259" class="dropmenu" onmouseover="showMenu(this.id)">库存袈裟</a></cite>
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
						<strong title="复制话题链接到剪贴板" id="postnum772259" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=54785&page=1#pid772259', '话题链接已经复制到剪贴板')">10楼</strong>
													<em onclick="$('postmessage_772259').className='t_bigfont'">大</em>							<em onclick="$('postmessage_772259').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_772259').className='t_smallfont'">小</em>												发表于 2010-8-6 17:47&nbsp;																					<a href="viewthread.php?tid=54785&amp;page=1&amp;authorid=1960" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_9"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_9"></div><div id="ad_thread4_9"></div>
						
						
																											<div id="postmessage_772259" class="t_msgfont"><a href="http://www.dnsstuff.com/tools/tracert/?tool_id=68&amp;token=&amp;toolhandler_redirect=0&amp;ip=kuailewang.info" target="_blank">http://www.dnsstuff.com/tools/tr ... ;ip=kuailewang.info</a><br />
<br />
1.你的域名未配置正确，你的so-net是固定IP还是动态IP？使用的什么软件做的DNS<br />
2. klwbbs.info URL被过滤了<br />
3. 域名劫持可能性低，建议使用dns.he.net NS平台。GD自带的慢，而且不好用。</div>

							
							
							
							
															<div id="post_rate_div_772259"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo772259_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1960" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=54785&amp;repquote=772259&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 772259)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_9"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid772264" summary="pid772264" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=16164" target="_blank" id="userinfo772264" class="dropmenu" onmouseover="showMenu(this.id)">linyan431</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">自建twitter API ｜ https://www.kuailewang.info/twitter</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=16164">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=16164&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_10" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum772264" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=54785&page=1#pid772264', '话题链接已经复制到剪贴板')">11楼</strong>
													<em onclick="$('postmessage_772264').className='t_bigfont'">大</em>							<em onclick="$('postmessage_772264').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_772264').className='t_smallfont'">小</em>												发表于 2010-8-6 17:49&nbsp;																					<a href="viewthread.php?tid=54785&amp;page=1&amp;authorid=16164" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_10"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_10"></div><div id="ad_thread4_10"></div>
						
						
																											<div id="postmessage_772264" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>库存袈裟</i> 于 2010-8-6 17:47 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=772259&amp;ptid=54785" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
<a href="http://www.dnsstuff.com/tools/tracert/?tool_id=68&amp;token=&amp;toolhandler_redirect=0&amp;ip=kuailewang.info" target="_blank">http://www.dnsstuff.com/tools/tr ... ;ip=kuailewang.info</a><br />
<br />
1.你的域名未配置正确，你的so-net是固定IP还是动态IP？使用的什么软件做的DNS<br />
2. klwbbs.info URL被过滤 ... </blockquote></div>我的域名是用CNAME转发到一个dyndns的动态域名上的 动态IP 但是这个域名在墙外可以访问 一切正常<br />
URL被过滤指具体只什么？ <a href="http://www.klwbbs.info" target="_blank">www.klwbbs.info</a>确实已经成为了GFW的过滤词 如果我在墙外在百度搜索这个域名会受到复位</div>

							
							
							
							
															<div id="post_rate_div_772264"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo772264_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=16164" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=54785&amp;repquote=772264&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 772264)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_10"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid772288" summary="pid772288" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1960" target="_blank" id="userinfo772288" class="dropmenu" onmouseover="showMenu(this.id)">库存袈裟</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">@bruceku 想象力比知识更重要。</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1960">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1960&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_11" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum772288" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=54785&page=1#pid772288', '话题链接已经复制到剪贴板')">12楼</strong>
													<em onclick="$('postmessage_772288').className='t_bigfont'">大</em>							<em onclick="$('postmessage_772288').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_772288').className='t_smallfont'">小</em>												发表于 2010-8-6 18:01&nbsp;																					<a href="viewthread.php?tid=54785&amp;page=1&amp;authorid=1960" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_11"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_11"></div><div id="ad_thread4_11"></div>
													<h2>回复 11楼 linyan431 的话题</h2>
						
						
																											<div id="postmessage_772288" class="t_msgfont">URL是种常规的屏蔽手段，你可以理解为这个域名废了。<br />
根据我多个节点的Tracert，你的两个域名都未解析成功。请重新检查域名与服务器配置。</div>

							
							
							
							
															<div id="post_rate_div_772288"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo772288_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1960" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=54785&amp;repquote=772288&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 772288)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_11"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid772295" summary="pid772295" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=16164" target="_blank" id="userinfo772295" class="dropmenu" onmouseover="showMenu(this.id)">linyan431</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">自建twitter API ｜ https://www.kuailewang.info/twitter</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=16164">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=16164&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_12" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum772295" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=54785&page=1#pid772295', '话题链接已经复制到剪贴板')">13楼</strong>
													<em onclick="$('postmessage_772295').className='t_bigfont'">大</em>							<em onclick="$('postmessage_772295').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_772295').className='t_smallfont'">小</em>												发表于 2010-8-6 18:08&nbsp;																					<a href="viewthread.php?tid=54785&amp;page=1&amp;authorid=16164" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_12"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_12"></div><div id="ad_thread4_12"></div>
						
						
																											<div id="postmessage_772295" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>库存袈裟</i> 于 2010-8-6 18:01 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=772288&amp;ptid=54785" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
URL是种常规的屏蔽手段，你可以理解为这个域名废了。<br />
根据我多个节点的Tracert，你的两个域名都未解析成功。请重新检查域名与服务器配置。 </blockquote></div>刚才去看了下&nbsp;&nbsp;的确2个域名都是GFW的敏感词 但是第二个域名的DNS解析暂时正常<br />
<br />
是在上海的服务器上测试的&nbsp; &nbsp;第二个域名通过https还是可以访问</div>

							
							
							
							
															<div id="post_rate_div_772295"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo772295_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=16164" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=54785&amp;repquote=772295&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 772295)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_12"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid772296" summary="pid772296" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 <a name="lastpost"></a>					<cite>											<a href="space.php?uid=16164" target="_blank" id="userinfo772296" class="dropmenu" onmouseover="showMenu(this.id)">linyan431</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">自建twitter API ｜ https://www.kuailewang.info/twitter</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=16164">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=16164&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_13" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum772296" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=54785&page=1#pid772296', '话题链接已经复制到剪贴板')">14楼</strong>
													<em onclick="$('postmessage_772296').className='t_bigfont'">大</em>							<em onclick="$('postmessage_772296').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_772296').className='t_smallfont'">小</em>												发表于 2010-8-6 18:10&nbsp;																					<a href="viewthread.php?tid=54785&amp;page=1&amp;authorid=16164" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_13"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_13"></div><div id="ad_thread4_13"></div>
						
						
																											<div id="postmessage_772296" class="t_msgfont">突然想到一个问题 如果我在墙内的服务器上建立一个DNS服务器<br />
<br />
指向正确的IP地址 是否就可以不受GFW的干扰了？</div>

							
							
							
							
															<div id="post_rate_div_772296"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo772296_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=16164" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=54785&amp;repquote=772296&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 772296)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_13"></div>				</div>
			</td>
		</tr>
		</table>
		</div>
</form>





<div class="pages_btns">
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=54785&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=54785&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
				<span class="postbtn" id="newspecialtmp" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=54785&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

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

	<form method="post" id="postform" action="post.php?action=reply&amp;fid=26&amp;tid=54785&amp;extra=&amp;replysubmit=yes" onSubmit="return validate(this)">
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
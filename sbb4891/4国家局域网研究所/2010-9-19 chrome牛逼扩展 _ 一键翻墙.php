<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<title>chrome牛逼扩展 : 一键翻墙 - 国家局域网研究所 -  1984bbs.com </title>
<meta name="keywords" content="" />
<meta name="MSSmartTagsPreventParsing" content="True" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<link rel="archives" title="1984bbs.com" href="https://1984bbs.com/archiver/" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_viewthread.css" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_common.css" />
<script type="text/javascript">
	var discuz_uid = 13019;var IMGDIR = 'images/default';var attackevasive = '0';var gid = 0;var STYLEID = '1';
	gid = parseInt('3');var fid = parseInt('26');var tid = parseInt('58942');
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
			<p><a href="index.php" id="forumlist" onmouseover="showMenu(this.id)" class="dropmenu">1984bbs.com</a> &raquo; <a href="forumdisplay.php?fid=26">国家局域网研究所</a> &raquo; chrome牛逼扩展 : 一键翻墙</p>
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
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=58942&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=58942&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
				<span class="postbtn" id="newspecial" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=58942&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

	<ul class="popupmenu_popup newspecialmenu" id="newspecial_menu" style="display: none">
		<li><a href="post.php?action=newthread&amp;fid=26&amp;extra=">发新话题</a></li>
		<li class="poll"><a href="post.php?action=newthread&amp;fid=26&amp;extra=&amp;special=1">发布投票</a></li>													</ul>

<form method="post" name="modactions">
	<input type="hidden" name="formhash" value="823c9fa2" />
	<div class="mainbox viewthread">
		<span class="headactions">
					<a href="my.php?item=favorites&amp;tid=58942" id="ajax_favorite" onclick="ajaxmenu(event, this.id, 3000, 0)">收藏</a>
			<a href="my.php?item=subscriptions&amp;subadd=58942" id="ajax_subscription" onclick="ajaxmenu(event, this.id, 3000, null, 0)">订阅</a>
			<a href="misc.php?action=emailfriend&amp;tid=58942" id="emailfriend" onclick="ajaxmenu(event, this.id, 9000000, null, 0)">推荐</a>
				<a href="viewthread.php?action=printable&amp;tid=58942" target="_blank" class="notabs">打印</a>
				</span>
		<h1>chrome牛逼扩展 : 一键翻墙		</h1>
							<table id="pid836705" summary="pid836705" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10754" target="_blank" id="userinfo836705" class="dropmenu" onmouseover="showMenu(this.id)">uniqueethan</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">每当我勃起的时候 就会觉得这个世界好美</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10754">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10754&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_0" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum836705" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=58942&page=1#pid836705', '话题链接已经复制到剪贴板')">1楼</strong>
													<em onclick="$('postmessage_836705').className='t_bigfont'">大</em>							<em onclick="$('postmessage_836705').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_836705').className='t_smallfont'">小</em>												发表于 2010-9-19 01:39&nbsp;																					<a href="viewthread.php?tid=58942&amp;page=1&amp;authorid=10754" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_0"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_0"></div><div id="ad_thread4_0"></div>
													<h2>chrome牛逼扩展 : 一键翻墙</h2>
						
						
																											<div id="postmessage_836705" class="t_msgfont"><a href="https://chrome.google.com/extensions/detail/kjdehhkgdgjcekacdccoflccmhbkefce?hl=zh-cn" target="_blank">https://chrome.google.com/extens ... ccmhbkefce?hl=zh-cn</a><br />
<br />
<img src="http://i55.tinypic.com/2ut6xig.jpg" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
<br />
[<i> 本帖最后由 uniqueethan 于 2010-9-19 01:43 编辑 </i>]</div>

							
							
							
							
															<div id="post_rate_div_836705"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo836705_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://uniqueethan.blogspot.com/" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=10754" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=58942&amp;repquote=836705&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 836705)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_0"></div>				</div>
			</td>
		</tr>
		</table>
		</div><div class="ad_column" id="ad_interthread"><a href="/viewthread.php?tid=54699" target="_blank" style="color:red;">1984bbs是一个非营利项目，它需要您的捐助！</font></a>		</div>
	<div class="mainbox viewthread">
			<table id="pid836719" summary="pid836719" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=19174" target="_blank" id="userinfo836719" class="dropmenu" onmouseover="showMenu(this.id)">沈公子</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=19174">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=19174&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_1" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum836719" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=58942&page=1#pid836719', '话题链接已经复制到剪贴板')">2楼</strong>
													<em onclick="$('postmessage_836719').className='t_bigfont'">大</em>							<em onclick="$('postmessage_836719').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_836719').className='t_smallfont'">小</em>												发表于 2010-9-19 02:10&nbsp;																					<a href="viewthread.php?tid=58942&amp;page=1&amp;authorid=19174" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_1"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_1"></div><div id="ad_thread4_1"></div>
						
						
																											<div id="postmessage_836719" class="t_msgfont">1024！<br />
谢谢分享</div>

							
							
							
							
															<div id="post_rate_div_836719"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo836719_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=19174" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=58942&amp;repquote=836719&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 836719)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_1"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid836743" summary="pid836743" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7788" target="_blank" id="userinfo836743" class="dropmenu" onmouseover="showMenu(this.id)">何笔</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7788">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7788&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_2" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum836743" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=58942&page=1#pid836743', '话题链接已经复制到剪贴板')">3楼</strong>
													<em onclick="$('postmessage_836743').className='t_bigfont'">大</em>							<em onclick="$('postmessage_836743').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_836743').className='t_smallfont'">小</em>												发表于 2010-9-19 03:06&nbsp;																					<a href="viewthread.php?tid=58942&amp;page=1&amp;authorid=7788" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_2"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_2"></div><div id="ad_thread4_2"></div>
						
						
																											<div id="postmessage_836743" class="t_msgfont">真给力</div>

							
							
							
							
															<div id="post_rate_div_836743"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo836743_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=7788" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=58942&amp;repquote=836743&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 836743)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_2"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid836839" summary="pid836839" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=3969" target="_blank" id="userinfo836839" class="dropmenu" onmouseover="showMenu(this.id)">langhua9527</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">大家好吗，我是小浪花！大家好吗，我是小浪花！大家好吗，我是小浪花！大家好吗，我是小浪花！大家好吗，我是小浪花！大家好吗，我是小浪花！大家好吗，我是小浪花！大家好吗，我是小浪花！大家好吗，我是小浪花！大家好吗，我是小浪 ...</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=3969">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=3969&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_3" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum836839" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=58942&page=1#pid836839', '话题链接已经复制到剪贴板')">4楼</strong>
													<em onclick="$('postmessage_836839').className='t_bigfont'">大</em>							<em onclick="$('postmessage_836839').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_836839').className='t_smallfont'">小</em>												发表于 2010-9-19 09:02&nbsp;																					<a href="viewthread.php?tid=58942&amp;page=1&amp;authorid=3969" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_3"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_3"></div><div id="ad_thread4_3"></div>
						
						
																											<div id="postmessage_836839" class="t_msgfont">网页代理，鉴定完毕</div>

							
							
							
							
															<div id="post_rate_div_836839"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo836839_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=3969" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=58942&amp;repquote=836839&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 836839)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_3"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid836857" summary="pid836857" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=13202" target="_blank" id="userinfo836857" class="dropmenu" onmouseover="showMenu(this.id)">zhenniua</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=13202">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=13202&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_4" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum836857" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=58942&page=1#pid836857', '话题链接已经复制到剪贴板')">5楼</strong>
													<em onclick="$('postmessage_836857').className='t_bigfont'">大</em>							<em onclick="$('postmessage_836857').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_836857').className='t_smallfont'">小</em>												发表于 2010-9-19 09:19&nbsp;																					<a href="viewthread.php?tid=58942&amp;page=1&amp;authorid=13202" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_4"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_4"></div><div id="ad_thread4_4"></div>
						
						
																											<div id="postmessage_836857" class="t_msgfont">呵呵，用的是firefox</div>

							
							
							
							
															<div id="post_rate_div_836857"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo836857_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=13202" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=58942&amp;repquote=836857&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 836857)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_4"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid837895" summary="pid837895" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=250" target="_blank" id="userinfo837895" class="dropmenu" onmouseover="showMenu(this.id)">dada</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">不明真相群众</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=250">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=250&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_5" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum837895" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=58942&page=1#pid837895', '话题链接已经复制到剪贴板')">6楼</strong>
													<em onclick="$('postmessage_837895').className='t_bigfont'">大</em>							<em onclick="$('postmessage_837895').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_837895').className='t_smallfont'">小</em>												发表于 2010-9-21 00:16&nbsp;																					<a href="viewthread.php?tid=58942&amp;page=1&amp;authorid=250" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_5"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_5"></div><div id="ad_thread4_5"></div>
						
						
																											<div id="postmessage_837895" class="t_msgfont">這個給力。。。</div>

							
							
							
							
															<div id="post_rate_div_837895"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo837895_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=250" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=58942&amp;repquote=837895&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 837895)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_5"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid838687" summary="pid838687" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=15206" target="_blank" id="userinfo838687" class="dropmenu" onmouseover="showMenu(this.id)">sbb_x</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=15206">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=15206&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_6" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum838687" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=58942&page=1#pid838687', '话题链接已经复制到剪贴板')">7楼</strong>
													<em onclick="$('postmessage_838687').className='t_bigfont'">大</em>							<em onclick="$('postmessage_838687').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_838687').className='t_smallfont'">小</em>												发表于 2010-9-21 15:44&nbsp;																					<a href="viewthread.php?tid=58942&amp;page=1&amp;authorid=15206" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_6"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_6"></div><div id="ad_thread4_6"></div>
						
						
																											<div id="postmessage_838687" class="t_msgfont">这个牛啊~不知速度怎么样？</div>

							
							
							
							
															<div id="post_rate_div_838687"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo838687_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=15206" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=58942&amp;repquote=838687&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 838687)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_6"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid838721" summary="pid838721" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=9887" target="_blank" id="userinfo838721" class="dropmenu" onmouseover="showMenu(this.id)">围城</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">Famous Hypocrite</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=9887">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=9887&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_7" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum838721" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=58942&page=1#pid838721', '话题链接已经复制到剪贴板')">8楼</strong>
													<em onclick="$('postmessage_838721').className='t_bigfont'">大</em>							<em onclick="$('postmessage_838721').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_838721').className='t_smallfont'">小</em>												发表于 2010-9-21 16:11&nbsp;																					<a href="viewthread.php?tid=58942&amp;page=1&amp;authorid=9887" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_7"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_7"></div><div id="ad_thread4_7"></div>
						
						
																											<div id="postmessage_838721" class="t_msgfont">爽，天天高潮</div>

							
							
							
							
															<div id="post_rate_div_838721"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo838721_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=9887" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=58942&amp;repquote=838721&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 838721)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_7"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid838815" summary="pid838815" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2771" target="_blank" id="userinfo838815" class="dropmenu" onmouseover="showMenu(this.id)">Angelo</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2771">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2771&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_8" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum838815" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=58942&page=1#pid838815', '话题链接已经复制到剪贴板')">9楼</strong>
													<em onclick="$('postmessage_838815').className='t_bigfont'">大</em>							<em onclick="$('postmessage_838815').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_838815').className='t_smallfont'">小</em>												发表于 2010-9-21 17:39&nbsp;																					<a href="viewthread.php?tid=58942&amp;page=1&amp;authorid=2771" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_8"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_8"></div><div id="ad_thread4_8"></div>
						
						
																											<div id="postmessage_838815" class="t_msgfont">是网页代理啦～～</div>

							
							
							
							
															<div id="post_rate_div_838815"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo838815_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=2771" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=58942&amp;repquote=838815&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 838815)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_8"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid838885" summary="pid838885" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=13239" target="_blank" id="userinfo838885" class="dropmenu" onmouseover="showMenu(this.id)">1sk</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=13239">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=13239&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_9" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum838885" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=58942&page=1#pid838885', '话题链接已经复制到剪贴板')">10楼</strong>
													<em onclick="$('postmessage_838885').className='t_bigfont'">大</em>							<em onclick="$('postmessage_838885').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_838885').className='t_smallfont'">小</em>												发表于 2010-9-21 18:38&nbsp;																					<a href="viewthread.php?tid=58942&amp;page=1&amp;authorid=13239" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_9"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_9"></div><div id="ad_thread4_9"></div>
						
						
																											<div id="postmessage_838885" class="t_msgfont">没翻过 一直都觉得翻墙麻烦</div>

							
							
							
							
															<div id="post_rate_div_838885"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo838885_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=13239" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=58942&amp;repquote=838885&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 838885)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_9"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid838898" summary="pid838898" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=11002" target="_blank" id="userinfo838898" class="dropmenu" onmouseover="showMenu(this.id)">icefireboy1</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">还是本人最纯情</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=11002">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=11002&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_10" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum838898" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=58942&page=1#pid838898', '话题链接已经复制到剪贴板')">11楼</strong>
													<em onclick="$('postmessage_838898').className='t_bigfont'">大</em>							<em onclick="$('postmessage_838898').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_838898').className='t_smallfont'">小</em>												发表于 2010-9-21 18:48&nbsp;																					<a href="viewthread.php?tid=58942&amp;page=1&amp;authorid=11002" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_10"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_10"></div><div id="ad_thread4_10"></div>
						
						
																											<div id="postmessage_838898" class="t_msgfont">牛奔啊</div>

							
							
							
							
															<div id="post_rate_div_838898"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo838898_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=11002" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=58942&amp;repquote=838898&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 838898)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_10"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid838966" summary="pid838966" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10071" target="_blank" id="userinfo838966" class="dropmenu" onmouseover="showMenu(this.id)">open5235</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10071">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10071&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_11" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum838966" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=58942&page=1#pid838966', '话题链接已经复制到剪贴板')">12楼</strong>
													<em onclick="$('postmessage_838966').className='t_bigfont'">大</em>							<em onclick="$('postmessage_838966').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_838966').className='t_smallfont'">小</em>												发表于 2010-9-21 20:01&nbsp;																					<a href="viewthread.php?tid=58942&amp;page=1&amp;authorid=10071" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_11"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_11"></div><div id="ad_thread4_11"></div>
						
						
																											<div id="postmessage_838966" class="t_msgfont">收藏中</div>

							
							
							
							
															<div id="post_rate_div_838966"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo838966_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=10071" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=58942&amp;repquote=838966&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 838966)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_11"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid849363" summary="pid849363" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2441" target="_blank" id="userinfo849363" class="dropmenu" onmouseover="showMenu(this.id)">高渐离</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">组内伍毛全家死光</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2441">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2441&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_12" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum849363" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=58942&page=1#pid849363', '话题链接已经复制到剪贴板')">13楼</strong>
													<em onclick="$('postmessage_849363').className='t_bigfont'">大</em>							<em onclick="$('postmessage_849363').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_849363').className='t_smallfont'">小</em>												发表于 2010-9-29 19:30&nbsp;																					<a href="viewthread.php?tid=58942&amp;page=1&amp;authorid=2441" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_12"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_12"></div><div id="ad_thread4_12"></div>
						
						
																											<div id="postmessage_849363" class="t_msgfont">真给力～！谢谢楼主。</div>

							
							
							
							
															<div id="post_rate_div_849363"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo849363_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=2441" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=58942&amp;repquote=849363&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 849363)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_12"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid849410" summary="pid849410" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=19167" target="_blank" id="userinfo849410" class="dropmenu" onmouseover="showMenu(this.id)">wrthzy</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=19167">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=19167&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_13" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum849410" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=58942&page=1#pid849410', '话题链接已经复制到剪贴板')">14楼</strong>
													<em onclick="$('postmessage_849410').className='t_bigfont'">大</em>							<em onclick="$('postmessage_849410').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_849410').className='t_smallfont'">小</em>												发表于 2010-9-29 20:13&nbsp;																					<a href="viewthread.php?tid=58942&amp;page=1&amp;authorid=19167" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_13"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_13"></div><div id="ad_thread4_13"></div>
						
						
																											<div id="postmessage_849410" class="t_msgfont">赞呀<br />
<br />
我用教育网的 都可以翻出去</div>

							
							
							
							
															<div id="post_rate_div_849410"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo849410_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=19167" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=58942&amp;repquote=849410&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 849410)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_13"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid852871" summary="pid852871" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=9643" target="_blank" id="userinfo852871" class="dropmenu" onmouseover="showMenu(this.id)">常言笑</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=9643">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=9643&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_14" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum852871" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=58942&page=1#pid852871', '话题链接已经复制到剪贴板')">15楼</strong>
													<em onclick="$('postmessage_852871').className='t_bigfont'">大</em>							<em onclick="$('postmessage_852871').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_852871').className='t_smallfont'">小</em>												发表于 2010-10-2 19:21&nbsp;																					<a href="viewthread.php?tid=58942&amp;page=1&amp;authorid=9643" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_14"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_14"></div><div id="ad_thread4_14"></div>
						
						
																											<div id="postmessage_852871" class="t_msgfont">貌似不能发推啊。。。</div>

							
							
							
							
															<div id="post_rate_div_852871"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo852871_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=9643" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=58942&amp;repquote=852871&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 852871)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_14"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid854050" summary="pid854050" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=19241" target="_blank" id="userinfo854050" class="dropmenu" onmouseover="showMenu(this.id)">darkart000</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=19241">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=19241&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_15" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum854050" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=58942&page=1#pid854050', '话题链接已经复制到剪贴板')">16楼</strong>
													<em onclick="$('postmessage_854050').className='t_bigfont'">大</em>							<em onclick="$('postmessage_854050').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_854050').className='t_smallfont'">小</em>												发表于 2010-10-4 02:05&nbsp;																					<a href="viewthread.php?tid=58942&amp;page=1&amp;authorid=19241" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_15"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_15"></div><div id="ad_thread4_15"></div>
						
						
																											<div id="postmessage_854050" class="t_msgfont">哇靠~~~&nbsp;&nbsp;谁的作品，强悍。</div>

							
							
							
							
															<div id="post_rate_div_854050"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo854050_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=19241" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=58942&amp;repquote=854050&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 854050)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_15"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid854443" summary="pid854443" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=19364" target="_blank" id="userinfo854443" class="dropmenu" onmouseover="showMenu(this.id)">lsymichael</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=19364">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=19364&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_16" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum854443" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=58942&page=1#pid854443', '话题链接已经复制到剪贴板')">17楼</strong>
													<em onclick="$('postmessage_854443').className='t_bigfont'">大</em>							<em onclick="$('postmessage_854443').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_854443').className='t_smallfont'">小</em>												发表于 2010-10-4 14:25&nbsp;																					<a href="viewthread.php?tid=58942&amp;page=1&amp;authorid=19364" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_16"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_16"></div><div id="ad_thread4_16"></div>
													<h2>没法用新推啊</h2>
						
						
																											<div id="postmessage_854443" class="t_msgfont">无法加载</div>

							
							
							
							
															<div id="post_rate_div_854443"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo854443_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=19364" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=58942&amp;repquote=854443&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 854443)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_16"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid855608" summary="pid855608" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=9982" target="_blank" id="userinfo855608" class="dropmenu" onmouseover="showMenu(this.id)">huifox</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=9982">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=9982&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_17" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum855608" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=58942&page=1#pid855608', '话题链接已经复制到剪贴板')">18楼</strong>
													<em onclick="$('postmessage_855608').className='t_bigfont'">大</em>							<em onclick="$('postmessage_855608').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_855608').className='t_smallfont'">小</em>												发表于 2010-10-5 19:42&nbsp;																					<a href="viewthread.php?tid=58942&amp;page=1&amp;authorid=9982" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_17"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_17"></div><div id="ad_thread4_17"></div>
						
						
																											<div id="postmessage_855608" class="t_msgfont">被墙·的快，更新的也快</div>

							
							
							
							
															<div id="post_rate_div_855608"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo855608_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=9982" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=58942&amp;repquote=855608&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 855608)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_17"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid869445" summary="pid869445" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 <a name="lastpost"></a>					<cite>											<a href="space.php?uid=14010" target="_blank" id="userinfo869445" class="dropmenu" onmouseover="showMenu(this.id)">xiaoyuer</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=14010">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=14010&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_18" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum869445" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=58942&page=1#pid869445', '话题链接已经复制到剪贴板')">19楼</strong>
													<em onclick="$('postmessage_869445').className='t_bigfont'">大</em>							<em onclick="$('postmessage_869445').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_869445').className='t_smallfont'">小</em>												发表于 2010-10-11 22:00&nbsp;																					<a href="viewthread.php?tid=58942&amp;page=1&amp;authorid=14010" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_18"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_18"></div><div id="ad_thread4_18"></div>
						
						
																											<div id="postmessage_869445" class="t_msgfont">有puff就足够了啊。</div>

							
							
							
							
															<div id="post_rate_div_869445"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo869445_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=14010" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=58942&amp;repquote=869445&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 869445)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_18"></div>				</div>
			</td>
		</tr>
		</table>
		</div>
</form>





<div class="pages_btns">
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=58942&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=58942&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
				<span class="postbtn" id="newspecialtmp" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=58942&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

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

	<form method="post" id="postform" action="post.php?action=reply&amp;fid=26&amp;tid=58942&amp;extra=&amp;replysubmit=yes" onSubmit="return validate(this)">
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
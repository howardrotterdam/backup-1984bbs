<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<title>我打包的翻墙工具，欢迎下载使用。 - 国家局域网研究所 -  1984bbs.com </title>
<meta name="keywords" content="" />
<meta name="MSSmartTagsPreventParsing" content="True" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<link rel="archives" title="1984bbs.com" href="https://1984bbs.com/archiver/" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_viewthread.css" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_common.css" />
<script type="text/javascript">
	var discuz_uid = 13019;var IMGDIR = 'images/default';var attackevasive = '0';var gid = 0;var STYLEID = '1';
	gid = parseInt('3');var fid = parseInt('26');var tid = parseInt('46231');
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
			<p><a href="index.php" id="forumlist" onmouseover="showMenu(this.id)" class="dropmenu">1984bbs.com</a> &raquo; <a href="forumdisplay.php?fid=26">国家局域网研究所</a> &raquo; 我打包的翻墙工具，欢迎下载使用。</p>
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
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=46231&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=46231&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
				<span class="postbtn" id="newspecial" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=46231&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

	<ul class="popupmenu_popup newspecialmenu" id="newspecial_menu" style="display: none">
		<li><a href="post.php?action=newthread&amp;fid=26&amp;extra=">发新话题</a></li>
		<li class="poll"><a href="post.php?action=newthread&amp;fid=26&amp;extra=&amp;special=1">发布投票</a></li>													</ul>

<form method="post" name="modactions">
	<input type="hidden" name="formhash" value="823c9fa2" />
	<div class="mainbox viewthread">
		<span class="headactions">
					<a href="my.php?item=favorites&amp;tid=46231" id="ajax_favorite" onclick="ajaxmenu(event, this.id, 3000, 0)">收藏</a>
			<a href="my.php?item=subscriptions&amp;subadd=46231" id="ajax_subscription" onclick="ajaxmenu(event, this.id, 3000, null, 0)">订阅</a>
			<a href="misc.php?action=emailfriend&amp;tid=46231" id="emailfriend" onclick="ajaxmenu(event, this.id, 9000000, null, 0)">推荐</a>
				<a href="viewthread.php?action=printable&amp;tid=46231" target="_blank" class="notabs">打印</a>
				</span>
		<h1>我打包的翻墙工具，欢迎下载使用。		</h1>
							<table id="pid622664" summary="pid622664" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=13731" target="_blank" id="userinfo622664" class="dropmenu" onmouseover="showMenu(this.id)">余说</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=13731">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=13731&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_0" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum622664" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=46231&page=1#pid622664', '话题链接已经复制到剪贴板')">1楼</strong>
													<em onclick="$('postmessage_622664').className='t_bigfont'">大</em>							<em onclick="$('postmessage_622664').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_622664').className='t_smallfont'">小</em>												发表于 2010-5-18 13:01&nbsp;																					<a href="viewthread.php?tid=46231&amp;page=1&amp;authorid=13731" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_0"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_0"></div><div id="ad_thread4_0"></div>
													<h2>我打包的翻墙工具，欢迎下载使用。</h2>
						
						
																											<div id="postmessage_622664" class="t_msgfont">本工具使用的是绿色便携版Firefox与可长期稳定代理的门，已经设置好代理，不强制打开门的动态网主页。<br />
使用步骤：<br />
<br />
1.开门，<br />
2.打开FF浏览器，无需设置<br />
<br />
就这样，就可以用Firefox上网翻墙了。用Firefox的好处是，不影响平时的“IE核心浏览器”的使用，IE照常上国内的。<br />
内部也有使用说明。<br />
<br />
怀疑我弄木马什么的，其实我也没学会...记得自备杀毒软件。<br />
<br />
下载地址：<a href="http://tinyurl.com/2de756p" target="_blank">http://tinyurl.com/2de756p</a></div>

							
							
							
							
															<div id="post_rate_div_622664"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo622664_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=13731" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=46231&amp;repquote=622664&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 622664)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_0"></div>				</div>
			</td>
		</tr>
		</table>
		</div><div class="ad_column" id="ad_interthread"><a href="/viewthread.php?tid=54699" target="_blank" style="color:red;">1984bbs是一个非营利项目，它需要您的捐助！</font></a>		</div>
	<div class="mainbox viewthread">
			<table id="pid623091" summary="pid623091" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=13201" target="_blank" id="userinfo623091" class="dropmenu" onmouseover="showMenu(this.id)">sunaaron123</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=13201">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=13201&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_1" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum623091" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=46231&page=1#pid623091', '话题链接已经复制到剪贴板')">2楼</strong>
													<em onclick="$('postmessage_623091').className='t_bigfont'">大</em>							<em onclick="$('postmessage_623091').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_623091').className='t_smallfont'">小</em>												发表于 2010-5-18 16:48&nbsp;																					<a href="viewthread.php?tid=46231&amp;page=1&amp;authorid=13201" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_1"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_1"></div><div id="ad_thread4_1"></div>
						
						
																											<div id="postmessage_623091" class="t_msgfont">分享ing</div>

							
							
							
							
															<div id="post_rate_div_623091"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo623091_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=13201" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=46231&amp;repquote=623091&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 623091)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_1"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid625491" summary="pid625491" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=4534" target="_blank" id="userinfo625491" class="dropmenu" onmouseover="showMenu(this.id)">123ddw</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">逼事球办</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=4534">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=4534&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_2" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum625491" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=46231&page=1#pid625491', '话题链接已经复制到剪贴板')">3楼</strong>
													<em onclick="$('postmessage_625491').className='t_bigfont'">大</em>							<em onclick="$('postmessage_625491').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_625491').className='t_smallfont'">小</em>												发表于 2010-5-19 21:38&nbsp;																					<a href="viewthread.php?tid=46231&amp;page=1&amp;authorid=4534" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_2"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_2"></div><div id="ad_thread4_2"></div>
						
						
																											<div id="postmessage_625491" class="t_msgfont">不妨让我来做做小白鼠试试...</div>

							
							
							
							
															<div id="post_rate_div_625491"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo625491_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=4534" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=46231&amp;repquote=625491&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 625491)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_2"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid625504" summary="pid625504" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=13731" target="_blank" id="userinfo625504" class="dropmenu" onmouseover="showMenu(this.id)">余说</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=13731">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=13731&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_3" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum625504" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=46231&page=1#pid625504', '话题链接已经复制到剪贴板')">4楼</strong>
													<em onclick="$('postmessage_625504').className='t_bigfont'">大</em>							<em onclick="$('postmessage_625504').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_625504').className='t_smallfont'">小</em>												发表于 2010-5-19 21:43&nbsp;																					<a href="viewthread.php?tid=46231&amp;page=1&amp;authorid=13731" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_3"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_3"></div><div id="ad_thread4_3"></div>
						
						
																											<div id="postmessage_625504" class="t_msgfont">哈哈，欢迎反馈。</div>

							
							
							
							
															<div id="post_rate_div_625504"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo625504_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=13731" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=46231&amp;repquote=625504&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 625504)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_3"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid628000" summary="pid628000" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=5736" target="_blank" id="userinfo628000" class="dropmenu" onmouseover="showMenu(this.id)">外来务工人员</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">对你微笑，纯属礼貌</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=5736">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=5736&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_4" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum628000" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=46231&page=1#pid628000', '话题链接已经复制到剪贴板')">5楼</strong>
													<em onclick="$('postmessage_628000').className='t_bigfont'">大</em>							<em onclick="$('postmessage_628000').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_628000').className='t_smallfont'">小</em>												发表于 2010-5-21 00:19&nbsp;																					<a href="viewthread.php?tid=46231&amp;page=1&amp;authorid=5736" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_4"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_4"></div><div id="ad_thread4_4"></div>
						
						
																											<div id="postmessage_628000" class="t_msgfont">很好</div>

							
							
							
							
															<div id="post_rate_div_628000"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo628000_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=5736" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=46231&amp;repquote=628000&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 628000)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_4"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid628151" summary="pid628151" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=13117" target="_blank" id="userinfo628151" class="dropmenu" onmouseover="showMenu(this.id)">魯邦三世</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">车干大女马De忠实粉丝哟</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=13117">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=13117&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_5" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum628151" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=46231&page=1#pid628151', '话题链接已经复制到剪贴板')">6楼</strong>
													<em onclick="$('postmessage_628151').className='t_bigfont'">大</em>							<em onclick="$('postmessage_628151').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_628151').className='t_smallfont'">小</em>												发表于 2010-5-21 03:13&nbsp;																					<a href="viewthread.php?tid=46231&amp;page=1&amp;authorid=13117" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_5"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_5"></div><div id="ad_thread4_5"></div>
						
						
																											<div id="postmessage_628151" class="t_msgfont">mark</div>

							
							
							
							
															<div id="post_rate_div_628151"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo628151_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=13117" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=46231&amp;repquote=628151&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 628151)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_5"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid628186" summary="pid628186" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10827" target="_blank" id="userinfo628186" class="dropmenu" onmouseover="showMenu(this.id)">illtry</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10827">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10827&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_6" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum628186" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=46231&page=1#pid628186', '话题链接已经复制到剪贴板')">7楼</strong>
													<em onclick="$('postmessage_628186').className='t_bigfont'">大</em>							<em onclick="$('postmessage_628186').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_628186').className='t_smallfont'">小</em>												发表于 2010-5-21 06:13&nbsp;																					<a href="viewthread.php?tid=46231&amp;page=1&amp;authorid=10827" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_6"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_6"></div><div id="ad_thread4_6"></div>
						
						
																											<div id="postmessage_628186" class="t_msgfont">mark</div>

							
							
							
							
															<div id="post_rate_div_628186"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo628186_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=10827" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=46231&amp;repquote=628186&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 628186)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_6"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid628215" summary="pid628215" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12494" target="_blank" id="userinfo628215" class="dropmenu" onmouseover="showMenu(this.id)">晨光</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12494">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12494&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_7" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum628215" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=46231&page=1#pid628215', '话题链接已经复制到剪贴板')">8楼</strong>
													<em onclick="$('postmessage_628215').className='t_bigfont'">大</em>							<em onclick="$('postmessage_628215').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_628215').className='t_smallfont'">小</em>												发表于 2010-5-21 07:48&nbsp;																					<a href="viewthread.php?tid=46231&amp;page=1&amp;authorid=12494" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_7"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_7"></div><div id="ad_thread4_7"></div>
						
						
																											<div id="postmessage_628215" class="t_msgfont">马克</div>

							
							
							
							
															<div id="post_rate_div_628215"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo628215_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=12494" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=46231&amp;repquote=628215&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 628215)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_7"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid628239" summary="pid628239" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=11326" target="_blank" id="userinfo628239" class="dropmenu" onmouseover="showMenu(this.id)">flld</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=11326">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=11326&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_8" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum628239" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=46231&page=1#pid628239', '话题链接已经复制到剪贴板')">9楼</strong>
													<em onclick="$('postmessage_628239').className='t_bigfont'">大</em>							<em onclick="$('postmessage_628239').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_628239').className='t_smallfont'">小</em>												发表于 2010-5-21 08:08&nbsp;																					<a href="viewthread.php?tid=46231&amp;page=1&amp;authorid=11326" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_8"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_8"></div><div id="ad_thread4_8"></div>
						
						
																											<div id="postmessage_628239" class="t_msgfont">解压不成功</div>

							
							
							
							
															<div id="post_rate_div_628239"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo628239_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=11326" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=46231&amp;repquote=628239&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 628239)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_8"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid630032" summary="pid630032" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=13287" target="_blank" id="userinfo630032" class="dropmenu" onmouseover="showMenu(this.id)">babyss92548</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=13287">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=13287&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_9" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum630032" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=46231&page=1#pid630032', '话题链接已经复制到剪贴板')">10楼</strong>
													<em onclick="$('postmessage_630032').className='t_bigfont'">大</em>							<em onclick="$('postmessage_630032').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_630032').className='t_smallfont'">小</em>												发表于 2010-5-21 21:04&nbsp;																					<a href="viewthread.php?tid=46231&amp;page=1&amp;authorid=13287" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_9"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_9"></div><div id="ad_thread4_9"></div>
													<h2>回复 1楼 余说 的话题</h2>
						
						
																											<div id="postmessage_630032" class="t_msgfont">解压不成功</div>

							
							
							
							
															<div id="post_rate_div_630032"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo630032_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=13287" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=46231&amp;repquote=630032&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 630032)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_9"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid630192" summary="pid630192" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=13789" target="_blank" id="userinfo630192" class="dropmenu" onmouseover="showMenu(this.id)">爱喝茶的蚂蚁</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=13789">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=13789&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_10" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum630192" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=46231&page=1#pid630192', '话题链接已经复制到剪贴板')">11楼</strong>
													<em onclick="$('postmessage_630192').className='t_bigfont'">大</em>							<em onclick="$('postmessage_630192').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_630192').className='t_smallfont'">小</em>												发表于 2010-5-21 22:12&nbsp;																					<a href="viewthread.php?tid=46231&amp;page=1&amp;authorid=13789" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_10"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_10"></div><div id="ad_thread4_10"></div>
						
						
																											<div id="postmessage_630192" class="t_msgfont">可以正常解压啊。。。</div>

							
							
							
							
															<div id="post_rate_div_630192"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo630192_menu" style="display: none;">
										<div class="imicons">
													<a target='_blank' href='http://settings.messenger.live.com/Conversation/IMMe.aspx?invitee=yuhe_wind@hotmail.com&mkt=zh-cn'><img style='border-style: none;' src='http://messenger.services.live.com/users/yuhe_wind@hotmail.com/presenceimage?mkt=zh-cn' width='16' height='16' /></a>
																																			</div>
										<dl></dl>
										<p><a href="space.php?uid=13789" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=46231&amp;repquote=630192&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 630192)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_10"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid631952" summary="pid631952" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7747" target="_blank" id="userinfo631952" class="dropmenu" onmouseover="showMenu(this.id)">adingmao</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">低调低调...</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7747">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7747&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_11" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum631952" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=46231&page=1#pid631952', '话题链接已经复制到剪贴板')">12楼</strong>
													<em onclick="$('postmessage_631952').className='t_bigfont'">大</em>							<em onclick="$('postmessage_631952').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_631952').className='t_smallfont'">小</em>												发表于 2010-5-22 19:03&nbsp;																					<a href="viewthread.php?tid=46231&amp;page=1&amp;authorid=7747" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_11"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_11"></div><div id="ad_thread4_11"></div>
						
						
																											<div id="postmessage_631952" class="t_msgfont">好东西。。。</div>

							
							
							
							
															<div id="post_rate_div_631952"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo631952_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=7747" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=46231&amp;repquote=631952&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 631952)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_11"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid632033" summary="pid632033" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=13603" target="_blank" id="userinfo632033" class="dropmenu" onmouseover="showMenu(this.id)">圈桃</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=13603">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=13603&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_12" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum632033" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=46231&page=1#pid632033', '话题链接已经复制到剪贴板')">13楼</strong>
													<em onclick="$('postmessage_632033').className='t_bigfont'">大</em>							<em onclick="$('postmessage_632033').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_632033').className='t_smallfont'">小</em>												发表于 2010-5-22 19:55&nbsp;																					<a href="viewthread.php?tid=46231&amp;page=1&amp;authorid=13603" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_12"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_12"></div><div id="ad_thread4_12"></div>
						
						
																											<div id="postmessage_632033" class="t_msgfont">很好用，谢谢！</div>

							
							
							
							
															<div id="post_rate_div_632033"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo632033_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=13603" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=46231&amp;repquote=632033&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 632033)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_12"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid632336" summary="pid632336" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=9339" target="_blank" id="userinfo632336" class="dropmenu" onmouseover="showMenu(this.id)">walker</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=9339">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=9339&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_13" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum632336" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=46231&page=1#pid632336', '话题链接已经复制到剪贴板')">14楼</strong>
													<em onclick="$('postmessage_632336').className='t_bigfont'">大</em>							<em onclick="$('postmessage_632336').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_632336').className='t_smallfont'">小</em>												发表于 2010-5-22 23:03&nbsp;																					<a href="viewthread.php?tid=46231&amp;page=1&amp;authorid=9339" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_13"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_13"></div><div id="ad_thread4_13"></div>
						
						
																											<div id="postmessage_632336" class="t_msgfont">刚才试了下，很好用，谢谢楼主</div>

							
							
							
							
															<div id="post_rate_div_632336"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo632336_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=9339" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=46231&amp;repquote=632336&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 632336)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_13"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid632413" summary="pid632413" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=13807" target="_blank" id="userinfo632413" class="dropmenu" onmouseover="showMenu(this.id)">lalalabird</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=13807">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=13807&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_14" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum632413" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=46231&page=1#pid632413', '话题链接已经复制到剪贴板')">15楼</strong>
													<em onclick="$('postmessage_632413').className='t_bigfont'">大</em>							<em onclick="$('postmessage_632413').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_632413').className='t_smallfont'">小</em>												发表于 2010-5-22 23:37&nbsp;																					<a href="viewthread.php?tid=46231&amp;page=1&amp;authorid=13807" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_14"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_14"></div><div id="ad_thread4_14"></div>
						
						
																											<div id="postmessage_632413" class="t_msgfont">可以用吗？我试试</div>

							
							
							
							
															<div id="post_rate_div_632413"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo632413_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=13807" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=46231&amp;repquote=632413&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 632413)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_14"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid634034" summary="pid634034" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6985" target="_blank" id="userinfo634034" class="dropmenu" onmouseover="showMenu(this.id)">信手拈来一江山</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">真理部门卫 和平部锅炉工 友爱部清洁工 富裕部审计员 一夜七次狼  最近成功升级为一夜十次狼 </p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6985">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6985&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_15" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum634034" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=46231&page=1#pid634034', '话题链接已经复制到剪贴板')">16楼</strong>
													<em onclick="$('postmessage_634034').className='t_bigfont'">大</em>							<em onclick="$('postmessage_634034').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_634034').className='t_smallfont'">小</em>												发表于 2010-5-23 19:11&nbsp;																					<a href="viewthread.php?tid=46231&amp;page=1&amp;authorid=6985" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_15"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_15"></div><div id="ad_thread4_15"></div>
						
						
																											<div id="postmessage_634034" class="t_msgfont">马克，致谢</div>

							
							
							
							
															<div id="post_rate_div_634034"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo634034_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=6985" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=46231&amp;repquote=634034&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 634034)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_15"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid635403" summary="pid635403" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7695" target="_blank" id="userinfo635403" class="dropmenu" onmouseover="showMenu(this.id)">非典型土人</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus"> 家利而怪先，国兴而妖豫</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7695">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7695&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_16" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum635403" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=46231&page=1#pid635403', '话题链接已经复制到剪贴板')">17楼</strong>
													<em onclick="$('postmessage_635403').className='t_bigfont'">大</em>							<em onclick="$('postmessage_635403').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_635403').className='t_smallfont'">小</em>												发表于 2010-5-24 11:01&nbsp;																					<a href="viewthread.php?tid=46231&amp;page=1&amp;authorid=7695" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_16"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_16"></div><div id="ad_thread4_16"></div>
						
						
																											<div id="postmessage_635403" class="t_msgfont">好用，新的门速度还可以阿</div>

							
							
							
							
															<div id="post_rate_div_635403"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo635403_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=7695" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=46231&amp;repquote=635403&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 635403)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_16"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid637577" summary="pid637577" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2649" target="_blank" id="userinfo637577" class="dropmenu" onmouseover="showMenu(this.id)">四眼带鱼</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2649">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2649&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_17" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum637577" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=46231&page=1#pid637577', '话题链接已经复制到剪贴板')">18楼</strong>
													<em onclick="$('postmessage_637577').className='t_bigfont'">大</em>							<em onclick="$('postmessage_637577').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_637577').className='t_smallfont'">小</em>												发表于 2010-5-25 11:08&nbsp;																					<a href="viewthread.php?tid=46231&amp;page=1&amp;authorid=2649" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_17"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_17"></div><div id="ad_thread4_17"></div>
						
						
																											<div id="postmessage_637577" class="t_msgfont">谢谢楼主啊</div>

							
							
							
							
															<div id="post_rate_div_637577"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo637577_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=2649" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=46231&amp;repquote=637577&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 637577)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_17"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid642920" summary="pid642920" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=4912" target="_blank" id="userinfo642920" class="dropmenu" onmouseover="showMenu(this.id)">zolcom</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=4912">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=4912&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_18" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum642920" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=46231&page=1#pid642920', '话题链接已经复制到剪贴板')">19楼</strong>
													<em onclick="$('postmessage_642920').className='t_bigfont'">大</em>							<em onclick="$('postmessage_642920').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_642920').className='t_smallfont'">小</em>												发表于 2010-5-27 16:30&nbsp;																					<a href="viewthread.php?tid=46231&amp;page=1&amp;authorid=4912" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_18"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_18"></div><div id="ad_thread4_18"></div>
						
						
																											<div id="postmessage_642920" class="t_msgfont">谢谢</div>

							
							
							
							
															<div id="post_rate_div_642920"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo642920_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=4912" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=46231&amp;repquote=642920&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 642920)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_18"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid643135" summary="pid643135" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10991" target="_blank" id="userinfo643135" class="dropmenu" onmouseover="showMenu(this.id)">非羊</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">不明真相的群众</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10991">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10991&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_19" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum643135" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=46231&page=1#pid643135', '话题链接已经复制到剪贴板')">20楼</strong>
													<em onclick="$('postmessage_643135').className='t_bigfont'">大</em>							<em onclick="$('postmessage_643135').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_643135').className='t_smallfont'">小</em>												发表于 2010-5-27 18:08&nbsp;																					<a href="viewthread.php?tid=46231&amp;page=1&amp;authorid=10991" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_19"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_19"></div><div id="ad_thread4_19"></div>
						
						
																											<div id="postmessage_643135" class="t_msgfont">下载了楼主的文件，楼主没有清除自己的cookies吧？很危险的说。。。</div>

							
							
							
							
															<div id="post_rate_div_643135"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo643135_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://treenewbee.net" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=10991" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=46231&amp;repquote=643135&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 643135)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_19"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid644221" summary="pid644221" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=13731" target="_blank" id="userinfo644221" class="dropmenu" onmouseover="showMenu(this.id)">余说</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=13731">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=13731&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_20" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum644221" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=46231&page=1#pid644221', '话题链接已经复制到剪贴板')">21楼</strong>
													<em onclick="$('postmessage_644221').className='t_bigfont'">大</em>							<em onclick="$('postmessage_644221').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_644221').className='t_smallfont'">小</em>												发表于 2010-5-28 10:43&nbsp;																					<a href="viewthread.php?tid=46231&amp;page=1&amp;authorid=13731" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_20"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_20"></div><div id="ad_thread4_20"></div>
													<h2>回复 20楼 非羊 的话题</h2>
						
						
																											<div id="postmessage_644221" class="t_msgfont">我没登陆，只是开网站看看而已..</div>

							
							
							
							
															<div id="post_rate_div_644221"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo644221_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=13731" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=46231&amp;repquote=644221&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 644221)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_20"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid649407" summary="pid649407" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=4977" target="_blank" id="userinfo649407" class="dropmenu" onmouseover="showMenu(this.id)">adruich</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=4977">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=4977&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_21" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum649407" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=46231&page=1#pid649407', '话题链接已经复制到剪贴板')">22楼</strong>
													<em onclick="$('postmessage_649407').className='t_bigfont'">大</em>							<em onclick="$('postmessage_649407').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_649407').className='t_smallfont'">小</em>												发表于 2010-5-31 15:51&nbsp;																					<a href="viewthread.php?tid=46231&amp;page=1&amp;authorid=4977" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_21"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_21"></div><div id="ad_thread4_21"></div>
						
						
																											<div id="postmessage_649407" class="t_msgfont">已经使用，谢谢</div>

							
							
							
							
															<div id="post_rate_div_649407"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo649407_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=4977" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=46231&amp;repquote=649407&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 649407)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_21"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid654116" summary="pid654116" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1563" target="_blank" id="userinfo654116" class="dropmenu" onmouseover="showMenu(this.id)">chaim</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">熊猫 @imchaim</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1563">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1563&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_22" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum654116" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=46231&page=1#pid654116', '话题链接已经复制到剪贴板')">23楼</strong>
													<em onclick="$('postmessage_654116').className='t_bigfont'">大</em>							<em onclick="$('postmessage_654116').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_654116').className='t_smallfont'">小</em>												发表于 2010-6-2 21:22&nbsp;																					<a href="viewthread.php?tid=46231&amp;page=1&amp;authorid=1563" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_22"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_22"></div><div id="ad_thread4_22"></div>
						
						
																											<div id="postmessage_654116" class="t_msgfont">不错 谢谢</div>

							
							
							
							
															<div id="post_rate_div_654116"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo654116_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://chaime.me/" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=1563" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=46231&amp;repquote=654116&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 654116)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_22"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid657103" summary="pid657103" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=14207" target="_blank" id="userinfo657103" class="dropmenu" onmouseover="showMenu(this.id)">大漠</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=14207">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=14207&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_23" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum657103" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=46231&page=1#pid657103', '话题链接已经复制到剪贴板')">24楼</strong>
													<em onclick="$('postmessage_657103').className='t_bigfont'">大</em>							<em onclick="$('postmessage_657103').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_657103').className='t_smallfont'">小</em>												发表于 2010-6-6 21:22&nbsp;																					<a href="viewthread.php?tid=46231&amp;page=1&amp;authorid=14207" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_23"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_23"></div><div id="ad_thread4_23"></div>
						
						
																											<div id="postmessage_657103" class="t_msgfont">偶也当个小白鼠，试试看！</div>

							
							
							
							
															<div id="post_rate_div_657103"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo657103_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=14207" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=46231&amp;repquote=657103&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 657103)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_23"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid658097" summary="pid658097" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8169" target="_blank" id="userinfo658097" class="dropmenu" onmouseover="showMenu(this.id)">wundt</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">无事生非</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8169">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8169&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_24" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum658097" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=46231&page=1#pid658097', '话题链接已经复制到剪贴板')">25楼</strong>
													<em onclick="$('postmessage_658097').className='t_bigfont'">大</em>							<em onclick="$('postmessage_658097').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_658097').className='t_smallfont'">小</em>												发表于 2010-6-7 00:29&nbsp;																					<a href="viewthread.php?tid=46231&amp;page=1&amp;authorid=8169" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_24"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_24"></div><div id="ad_thread4_24"></div>
						
						
																											<div id="postmessage_658097" class="t_msgfont">感谢楼主</div>

							
							
							
							
															<div id="post_rate_div_658097"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo658097_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=8169" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=46231&amp;repquote=658097&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 658097)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_24"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid678090" summary="pid678090" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1408" target="_blank" id="userinfo678090" class="dropmenu" onmouseover="showMenu(this.id)">becom</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">“抢救运动”办公室借调人员、同萌会资深会员</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1408">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1408&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_25" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum678090" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=46231&page=1#pid678090', '话题链接已经复制到剪贴板')">26楼</strong>
													<em onclick="$('postmessage_678090').className='t_bigfont'">大</em>							<em onclick="$('postmessage_678090').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_678090').className='t_smallfont'">小</em>												发表于 2010-6-12 22:18&nbsp;																					<a href="viewthread.php?tid=46231&amp;page=1&amp;authorid=1408" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_25"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_25"></div><div id="ad_thread4_25"></div>
						
						
																											<div id="postmessage_678090" class="t_msgfont">mark</div>

							
							
							
							
															<div id="post_rate_div_678090"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo678090_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1408" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=46231&amp;repquote=678090&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 678090)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_25"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid678119" summary="pid678119" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=13368" target="_blank" id="userinfo678119" class="dropmenu" onmouseover="showMenu(this.id)">杀仁犯!</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=13368">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=13368&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_26" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum678119" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=46231&page=1#pid678119', '话题链接已经复制到剪贴板')">27楼</strong>
													<em onclick="$('postmessage_678119').className='t_bigfont'">大</em>							<em onclick="$('postmessage_678119').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_678119').className='t_smallfont'">小</em>												发表于 2010-6-12 22:30&nbsp;																					<a href="viewthread.php?tid=46231&amp;page=1&amp;authorid=13368" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_26"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_26"></div><div id="ad_thread4_26"></div>
						
						
																											<div id="postmessage_678119" class="t_msgfont">觉得 puff还挺不错.就先不换了.还是谢谢楼主</div>

							
							
							
							
															<div id="post_rate_div_678119"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo678119_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=13368" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=46231&amp;repquote=678119&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 678119)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_26"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid678752" summary="pid678752" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=15416" target="_blank" id="userinfo678752" class="dropmenu" onmouseover="showMenu(this.id)">天际幻影</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=15416">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=15416&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_27" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum678752" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=46231&page=1#pid678752', '话题链接已经复制到剪贴板')">28楼</strong>
													<em onclick="$('postmessage_678752').className='t_bigfont'">大</em>							<em onclick="$('postmessage_678752').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_678752').className='t_smallfont'">小</em>												发表于 2010-6-13 09:08&nbsp;																					<a href="viewthread.php?tid=46231&amp;page=1&amp;authorid=15416" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_27"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_27"></div><div id="ad_thread4_27"></div>
						
						
																											<div id="postmessage_678752" class="t_msgfont">还不错啊</div>

							
							
							
							
															<div id="post_rate_div_678752"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo678752_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=15416" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=46231&amp;repquote=678752&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 678752)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_27"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid678784" summary="pid678784" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=13930" target="_blank" id="userinfo678784" class="dropmenu" onmouseover="showMenu(this.id)">snow</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=13930">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=13930&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_28" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum678784" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=46231&page=1#pid678784', '话题链接已经复制到剪贴板')">29楼</strong>
													<em onclick="$('postmessage_678784').className='t_bigfont'">大</em>							<em onclick="$('postmessage_678784').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_678784').className='t_smallfont'">小</em>												发表于 2010-6-13 09:20&nbsp;																					<a href="viewthread.php?tid=46231&amp;page=1&amp;authorid=13930" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_28"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_28"></div><div id="ad_thread4_28"></div>
						
						
																											<div id="postmessage_678784" class="t_msgfont">谢谢！</div>

							
							
							
							
															<div id="post_rate_div_678784"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo678784_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=13930" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=46231&amp;repquote=678784&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 678784)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_28"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid678912" summary="pid678912" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=15783" target="_blank" id="userinfo678912" class="dropmenu" onmouseover="showMenu(this.id)">裝傻小Q</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">Twitter@chenqi4578</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=15783">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=15783&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_29" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum678912" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=46231&page=1#pid678912', '话题链接已经复制到剪贴板')">30楼</strong>
													<em onclick="$('postmessage_678912').className='t_bigfont'">大</em>							<em onclick="$('postmessage_678912').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_678912').className='t_smallfont'">小</em>												发表于 2010-6-13 10:14&nbsp;																					<a href="viewthread.php?tid=46231&amp;page=1&amp;authorid=15783" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_29"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_29"></div><div id="ad_thread4_29"></div>
						
						
																											<div id="postmessage_678912" class="t_msgfont">感谢</div>

							
							
							
							
															<div id="post_rate_div_678912"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo678912_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://chenqi4578.blogbus.com/" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=15783" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=46231&amp;repquote=678912&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 678912)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_29"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid680109" summary="pid680109" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 <a name="lastpost"></a>					<cite>											<a href="space.php?uid=10733" target="_blank" id="userinfo680109" class="dropmenu" onmouseover="showMenu(this.id)">pillarchang</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10733">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10733&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_30" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum680109" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=46231&page=1#pid680109', '话题链接已经复制到剪贴板')">31楼</strong>
													<em onclick="$('postmessage_680109').className='t_bigfont'">大</em>							<em onclick="$('postmessage_680109').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_680109').className='t_smallfont'">小</em>												发表于 2010-6-13 17:02&nbsp;																					<a href="viewthread.php?tid=46231&amp;page=1&amp;authorid=10733" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_30"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_30"></div><div id="ad_thread4_30"></div>
						
						
																											<div id="postmessage_680109" class="t_msgfont">不喜欢自由门</div>

							
							
							
							
															<div id="post_rate_div_680109"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo680109_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=10733" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=46231&amp;repquote=680109&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 680109)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_30"></div>				</div>
			</td>
		</tr>
		</table>
		</div>
</form>





<div class="pages_btns">
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=46231&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=46231&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
				<span class="postbtn" id="newspecialtmp" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=46231&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

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

	<form method="post" id="postform" action="post.php?action=reply&amp;fid=26&amp;tid=46231&amp;extra=&amp;replysubmit=yes" onSubmit="return validate(this)">
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
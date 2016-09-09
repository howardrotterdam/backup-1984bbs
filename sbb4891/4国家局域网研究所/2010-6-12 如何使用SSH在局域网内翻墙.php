<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<title>如何使用SSH在局域网内翻墙 - 国家局域网研究所 -  1984bbs.com </title>
<meta name="keywords" content="" />
<meta name="MSSmartTagsPreventParsing" content="True" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<link rel="archives" title="1984bbs.com" href="https://1984bbs.com/archiver/" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_viewthread.css" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_common.css" />
<script type="text/javascript">
	var discuz_uid = 13019;var IMGDIR = 'images/default';var attackevasive = '0';var gid = 0;var STYLEID = '1';
	gid = parseInt('3');var fid = parseInt('26');var tid = parseInt('49229');
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
			<p><a href="index.php" id="forumlist" onmouseover="showMenu(this.id)" class="dropmenu">1984bbs.com</a> &raquo; <a href="forumdisplay.php?fid=26">国家局域网研究所</a> &raquo; 如何使用SSH在局域网内翻墙</p>
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
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=49229&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=49229&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
				<span class="postbtn" id="newspecial" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=49229&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

	<ul class="popupmenu_popup newspecialmenu" id="newspecial_menu" style="display: none">
		<li><a href="post.php?action=newthread&amp;fid=26&amp;extra=">发新话题</a></li>
		<li class="poll"><a href="post.php?action=newthread&amp;fid=26&amp;extra=&amp;special=1">发布投票</a></li>													</ul>

<form method="post" name="modactions">
	<input type="hidden" name="formhash" value="823c9fa2" />
	<div class="mainbox viewthread">
		<span class="headactions">
					<a href="my.php?item=favorites&amp;tid=49229" id="ajax_favorite" onclick="ajaxmenu(event, this.id, 3000, 0)">收藏</a>
			<a href="my.php?item=subscriptions&amp;subadd=49229" id="ajax_subscription" onclick="ajaxmenu(event, this.id, 3000, null, 0)">订阅</a>
			<a href="misc.php?action=emailfriend&amp;tid=49229" id="emailfriend" onclick="ajaxmenu(event, this.id, 9000000, null, 0)">推荐</a>
				<a href="viewthread.php?action=printable&amp;tid=49229" target="_blank" class="notabs">打印</a>
				</span>
		<h1>如何使用SSH在局域网内翻墙		</h1>
							<table id="pid676710" summary="pid676710" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=4394" target="_blank" id="userinfo676710" class="dropmenu" onmouseover="showMenu(this.id)">imcol</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=4394">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=4394&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_0" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum676710" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=49229&page=1#pid676710', '话题链接已经复制到剪贴板')">1楼</strong>
													<em onclick="$('postmessage_676710').className='t_bigfont'">大</em>							<em onclick="$('postmessage_676710').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_676710').className='t_smallfont'">小</em>												发表于 2010-6-12 12:17&nbsp;																					<a href="viewthread.php?tid=49229&amp;page=1&amp;authorid=4394" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_0"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_0"></div><div id="ad_thread4_0"></div>
													<h2>如何使用SSH在局域网内翻墙</h2>
						
						
																											<div id="postmessage_676710" class="t_msgfont">求教技术达人。<br />
现在位于大局域网内的局域网，浏览器的proxy需要设置ip或link，如图1，2<br />
<img src="https://yopic.us/thumbs/1dxd.bmp" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
<img src="https://yopic.us/thumbs/2.bmp" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
<br />
运行MyEnTunnel出现fatal Error，图3<br />
<img src="https://yopic.us/thumbs/3.bmp" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
<br />
如何设置才能使用SSH翻墙？<br />
另外在命令行下使用 PLINK命令也不行。谢谢指教</div>

							
							
							
							
															<div id="post_rate_div_676710"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo676710_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=4394" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=49229&amp;repquote=676710&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 676710)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_0"></div>				</div>
			</td>
		</tr>
		</table>
		</div><div class="ad_column" id="ad_interthread"><a href="/viewthread.php?tid=54699" target="_blank" style="color:red;">1984bbs是一个非营利项目，它需要您的捐助！</font></a>		</div>
	<div class="mainbox viewthread">
			<table id="pid676784" summary="pid676784" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6873" target="_blank" id="userinfo676784" class="dropmenu" onmouseover="showMenu(this.id)">萧易寒</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6873">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6873&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_1" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum676784" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=49229&page=1#pid676784', '话题链接已经复制到剪贴板')">2楼</strong>
													<em onclick="$('postmessage_676784').className='t_bigfont'">大</em>							<em onclick="$('postmessage_676784').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_676784').className='t_smallfont'">小</em>												发表于 2010-6-12 12:42&nbsp;																					<a href="viewthread.php?tid=49229&amp;page=1&amp;authorid=6873" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_1"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_1"></div><div id="ad_thread4_1"></div>
						
						
																											<div id="postmessage_676784" class="t_msgfont"><a href="http://docs.google.com/View?id=dczkbptk_2gdrgtxdx" target="_blank">http://docs.google.com/View?id=dczkbptk_2gdrgtxdx</a></div>

							
							
							
							
															<div id="post_rate_div_676784"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo676784_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=6873" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=49229&amp;repquote=676784&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 676784)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_1"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid676913" summary="pid676913" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=4394" target="_blank" id="userinfo676913" class="dropmenu" onmouseover="showMenu(this.id)">imcol</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=4394">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=4394&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_2" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum676913" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=49229&page=1#pid676913', '话题链接已经复制到剪贴板')">3楼</strong>
													<em onclick="$('postmessage_676913').className='t_bigfont'">大</em>							<em onclick="$('postmessage_676913').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_676913').className='t_smallfont'">小</em>												发表于 2010-6-12 13:20&nbsp;																					<a href="viewthread.php?tid=49229&amp;page=1&amp;authorid=4394" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_2"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_2"></div><div id="ad_thread4_2"></div>
						
						
																											<div id="postmessage_676913" class="t_msgfont">谢谢你的文档，萧易寒<br />
问题是，现在在局域网内需要配置局域网的pac文件，无法使用外面的。</div>

							
							
							
							
															<div id="post_rate_div_676913"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo676913_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=4394" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=49229&amp;repquote=676913&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 676913)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_2"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid676974" summary="pid676974" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6873" target="_blank" id="userinfo676974" class="dropmenu" onmouseover="showMenu(this.id)">萧易寒</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6873">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6873&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_3" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum676974" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=49229&page=1#pid676974', '话题链接已经复制到剪贴板')">4楼</strong>
													<em onclick="$('postmessage_676974').className='t_bigfont'">大</em>							<em onclick="$('postmessage_676974').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_676974').className='t_smallfont'">小</em>												发表于 2010-6-12 13:39&nbsp;																					<a href="viewthread.php?tid=49229&amp;page=1&amp;authorid=6873" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_3"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_3"></div><div id="ad_thread4_3"></div>
													<h2>回复 3楼 imcol 的话题</h2>
						
						
																											<div id="postmessage_676974" class="t_msgfont">不太明白你的意思，pac文件可以使用本地的啊</div>

							
							
							
							
															<div id="post_rate_div_676974"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo676974_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=6873" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=49229&amp;repquote=676974&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 676974)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_3"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid678931" summary="pid678931" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=4394" target="_blank" id="userinfo678931" class="dropmenu" onmouseover="showMenu(this.id)">imcol</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=4394">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=4394&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_4" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum678931" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=49229&page=1#pid678931', '话题链接已经复制到剪贴板')">5楼</strong>
													<em onclick="$('postmessage_678931').className='t_bigfont'">大</em>							<em onclick="$('postmessage_678931').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_678931').className='t_smallfont'">小</em>												发表于 2010-6-13 10:23&nbsp;																					<a href="viewthread.php?tid=49229&amp;page=1&amp;authorid=4394" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_4"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_4"></div><div id="ad_thread4_4"></div>
						
						
																											<div id="postmessage_678931" class="t_msgfont">现在小局域网内的pac文件是在服务器中的，无法访问。<br />
能否将本机的pac和服务器的pac同时使用呢。<br />
谢谢</div>

							
							
							
							
															<div id="post_rate_div_678931"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo678931_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=4394" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=49229&amp;repquote=678931&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 678931)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_4"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid679035" summary="pid679035" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6873" target="_blank" id="userinfo679035" class="dropmenu" onmouseover="showMenu(this.id)">萧易寒</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6873">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6873&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_5" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum679035" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=49229&page=1#pid679035', '话题链接已经复制到剪贴板')">6楼</strong>
													<em onclick="$('postmessage_679035').className='t_bigfont'">大</em>							<em onclick="$('postmessage_679035').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_679035').className='t_smallfont'">小</em>												发表于 2010-6-13 11:08&nbsp;																					<a href="viewthread.php?tid=49229&amp;page=1&amp;authorid=6873" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_5"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_5"></div><div id="ad_thread4_5"></div>
													<h2>回复 5楼 imcol 的话题</h2>
						
						
																											<div id="postmessage_679035" class="t_msgfont">服务器上可以开个iis进程，然后局域网其他机器用<a href="http://192.168.0.1/xxx.pac" target="_blank">http://192.168.0.1/xxx.pac</a>这种形式访问</div>

							
							
							
							
															<div id="post_rate_div_679035"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo679035_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=6873" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=49229&amp;repquote=679035&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 679035)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_5"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid679157" summary="pid679157" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=4394" target="_blank" id="userinfo679157" class="dropmenu" onmouseover="showMenu(this.id)">imcol</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=4394">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=4394&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_6" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum679157" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=49229&page=1#pid679157', '话题链接已经复制到剪贴板')">7楼</strong>
													<em onclick="$('postmessage_679157').className='t_bigfont'">大</em>							<em onclick="$('postmessage_679157').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_679157').className='t_smallfont'">小</em>												发表于 2010-6-13 11:43&nbsp;																					<a href="viewthread.php?tid=49229&amp;page=1&amp;authorid=4394" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_6"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_6"></div><div id="ad_thread4_6"></div>
						
						
																											<div id="postmessage_679157" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>萧易寒</i> 于 2010-6-13 11:08 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=679035&amp;ptid=49229" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
服务器上可以开个iis进程，然后局域网其他机器用<a href="http://192.168.0.1/xxx.pac" target="_blank">http://192.168.0.1/xxx.pac</a>这种形式访问 </blockquote></div>问题是服务器的进程和权限一般淫不可以访问的。俺们不是二般淫</div>

							
							
							
							
															<div id="post_rate_div_679157"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo679157_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=4394" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=49229&amp;repquote=679157&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 679157)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_6"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid679195" summary="pid679195" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6873" target="_blank" id="userinfo679195" class="dropmenu" onmouseover="showMenu(this.id)">萧易寒</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6873">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6873&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_7" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum679195" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=49229&page=1#pid679195', '话题链接已经复制到剪贴板')">8楼</strong>
													<em onclick="$('postmessage_679195').className='t_bigfont'">大</em>							<em onclick="$('postmessage_679195').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_679195').className='t_smallfont'">小</em>												发表于 2010-6-13 11:51&nbsp;																					<a href="viewthread.php?tid=49229&amp;page=1&amp;authorid=6873" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_7"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_7"></div><div id="ad_thread4_7"></div>
													<h2>回复 7楼 imcol 的话题</h2>
						
						
																											<div id="postmessage_679195" class="t_msgfont">你们真纠结。。。。。<br />
那为什么不用本地pac呢？</div>

							
							
							
							
															<div id="post_rate_div_679195"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo679195_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=6873" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=49229&amp;repquote=679195&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 679195)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_7"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid679417" summary="pid679417" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=4394" target="_blank" id="userinfo679417" class="dropmenu" onmouseover="showMenu(this.id)">imcol</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=4394">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=4394&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_8" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum679417" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=49229&page=1#pid679417', '话题链接已经复制到剪贴板')">9楼</strong>
													<em onclick="$('postmessage_679417').className='t_bigfont'">大</em>							<em onclick="$('postmessage_679417').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_679417').className='t_smallfont'">小</em>												发表于 2010-6-13 13:16&nbsp;																					<a href="viewthread.php?tid=49229&amp;page=1&amp;authorid=4394" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_8"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_8"></div><div id="ad_thread4_8"></div>
						
						
																											<div id="postmessage_679417" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>萧易寒</i> 于 2010-6-13 11:51 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=679195&amp;ptid=49229" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
你们真纠结。。。。。<br />
那为什么不用本地pac呢？ </blockquote></div>这是公司策略吧，small potato能做什么呢，一般都接触不到网管的</div>

							
							
							
							
															<div id="post_rate_div_679417"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo679417_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=4394" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=49229&amp;repquote=679417&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 679417)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_8"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid679450" summary="pid679450" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=14626" target="_blank" id="userinfo679450" class="dropmenu" onmouseover="showMenu(this.id)">SysOp</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">馆里猿</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=14626">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=14626&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_9" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum679450" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=49229&page=1#pid679450', '话题链接已经复制到剪贴板')">10楼</strong>
													<em onclick="$('postmessage_679450').className='t_bigfont'">大</em>							<em onclick="$('postmessage_679450').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_679450').className='t_smallfont'">小</em>												发表于 2010-6-13 13:25&nbsp;																					<a href="viewthread.php?tid=49229&amp;page=1&amp;authorid=14626" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_9"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_9"></div><div id="ad_thread4_9"></div>
						
						
																											<div id="postmessage_679450" class="t_msgfont">你的图都挂了，所以不明白发生了什么事情。<br />
如果是需要pac的话，公司的pac一般实际上是个按情况走代理的配置，内部之类，外部走代理，能在浏览器指定pac，这个pac你是必然可以访问的。</div>

							
							
							
							
															<div id="post_rate_div_679450"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo679450_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=14626" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=49229&amp;repquote=679450&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 679450)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_9"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid679533" summary="pid679533" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=4394" target="_blank" id="userinfo679533" class="dropmenu" onmouseover="showMenu(this.id)">imcol</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=4394">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=4394&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_10" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum679533" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=49229&page=1#pid679533', '话题链接已经复制到剪贴板')">11楼</strong>
													<em onclick="$('postmessage_679533').className='t_bigfont'">大</em>							<em onclick="$('postmessage_679533').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_679533').className='t_smallfont'">小</em>												发表于 2010-6-13 13:55&nbsp;																					<a href="viewthread.php?tid=49229&amp;page=1&amp;authorid=4394" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_10"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_10"></div><div id="ad_thread4_10"></div>
						
						
																											<div id="postmessage_679533" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>SysOp</i> 于 2010-6-13 13:25 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=679450&amp;ptid=49229" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
你的图都挂了，所以不明白发生了什么事情。<br />
如果是需要pac的话，公司的pac一般实际上是个按情况走代理的配置，内部之类，外部走代理，能在浏览器指定pac，这个pac你是必然可以访问的。 </blockquote></div>使用了本地的pac；<br />
但是试图运行MyEnTunnel，network Fatal Error<br />
<br />
<img src="https://yopic.us/images/1sys.jpg" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
<br />
<br />
<a href="https://yopic.us/?v=2cjc.jpg" target="_blank"><img src="https://yopic.us/thumbs/2cjc.jpg" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
<br />
<img src="https://yopic.us/images/2cjc.jpg" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
<br />
[<i> 本帖最后由 imcol 于 2010-6-13 15:00 编辑 </i>]</div>

							
							
							
							
															<div id="post_rate_div_679533"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo679533_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=4394" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=49229&amp;repquote=679533&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 679533)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_10"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid680145" summary="pid680145" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10733" target="_blank" id="userinfo680145" class="dropmenu" onmouseover="showMenu(this.id)">pillarchang</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10733">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10733&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_11" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum680145" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=49229&page=1#pid680145', '话题链接已经复制到剪贴板')">12楼</strong>
													<em onclick="$('postmessage_680145').className='t_bigfont'">大</em>							<em onclick="$('postmessage_680145').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_680145').className='t_smallfont'">小</em>												发表于 2010-6-13 17:24&nbsp;																					<a href="viewthread.php?tid=49229&amp;page=1&amp;authorid=10733" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_11"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_11"></div><div id="ad_thread4_11"></div>
						
						
																											<div id="postmessage_680145" class="t_msgfont">我也遇到过这样的问题，也发贴问过，但是目前MS 没人搞定过</div>

							
							
							
							
															<div id="post_rate_div_680145"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo680145_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=10733" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=49229&amp;repquote=680145&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 680145)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_11"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid681694" summary="pid681694" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6873" target="_blank" id="userinfo681694" class="dropmenu" onmouseover="showMenu(this.id)">萧易寒</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6873">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6873&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_12" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum681694" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=49229&page=1#pid681694', '话题链接已经复制到剪贴板')">13楼</strong>
													<em onclick="$('postmessage_681694').className='t_bigfont'">大</em>							<em onclick="$('postmessage_681694').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_681694').className='t_smallfont'">小</em>												发表于 2010-6-14 10:38&nbsp;																					<a href="viewthread.php?tid=49229&amp;page=1&amp;authorid=6873" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_12"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_12"></div><div id="ad_thread4_12"></div>
													<h2>回复 11楼 imcol 的话题</h2>
						
						
																											<div id="postmessage_681694" class="t_msgfont">MyEntunnel连不上和pac有个屁关系啊<br />
检查MyEntunnel配置啊</div>

							
							
							
							
															<div id="post_rate_div_681694"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo681694_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=6873" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=49229&amp;repquote=681694&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 681694)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_12"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid681956" summary="pid681956" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10733" target="_blank" id="userinfo681956" class="dropmenu" onmouseover="showMenu(this.id)">pillarchang</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10733">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10733&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_13" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum681956" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=49229&page=1#pid681956', '话题链接已经复制到剪贴板')">14楼</strong>
													<em onclick="$('postmessage_681956').className='t_bigfont'">大</em>							<em onclick="$('postmessage_681956').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_681956').className='t_smallfont'">小</em>												发表于 2010-6-14 13:15&nbsp;																					<a href="viewthread.php?tid=49229&amp;page=1&amp;authorid=10733" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_13"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_13"></div><div id="ad_thread4_13"></div>
						
						
																											<div id="postmessage_681956" class="t_msgfont">我今天配置成功了，不过 用了个花钱的办法。<br />
<br />
我们公司使用代理服务器上网，并且封锁了SSH 端口，MyEntunnel 无法直接连接服务器。<br />
于是 我想到了用socksonline 作为二级代理服务器，使用Tunnelier 连接到Socksonline 上去，这样就成功的连上了SSH 服务器。<br />
然后将浏览器代理配置成127.0.0.1就OK了。<br />
<br />
这个方法缺点就是需要花钱， 因为socksonline 软件是收费的，其免费帐号网速慢且定时掉线。<br />
<br />
不知道1984BBS 有没有牛人有推荐另外好的方法，不需要花钱就直接能上～</div>

							
							
							
							
															<div id="post_rate_div_681956"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo681956_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=10733" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=49229&amp;repquote=681956&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 681956)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_13"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid682353" summary="pid682353" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6873" target="_blank" id="userinfo682353" class="dropmenu" onmouseover="showMenu(this.id)">萧易寒</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6873">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6873&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_14" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum682353" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=49229&page=1#pid682353', '话题链接已经复制到剪贴板')">15楼</strong>
													<em onclick="$('postmessage_682353').className='t_bigfont'">大</em>							<em onclick="$('postmessage_682353').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_682353').className='t_smallfont'">小</em>												发表于 2010-6-14 17:12&nbsp;																					<a href="viewthread.php?tid=49229&amp;page=1&amp;authorid=6873" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_14"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_14"></div><div id="ad_thread4_14"></div>
													<h2>回复 14楼 pillarchang 的话题</h2>
						
						
																											<div id="postmessage_682353" class="t_msgfont">选个非22端口的SSH服务器嘛</div>

							
							
							
							
															<div id="post_rate_div_682353"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo682353_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=6873" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=49229&amp;repquote=682353&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 682353)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_14"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid682864" summary="pid682864" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10000" target="_blank" id="userinfo682864" class="dropmenu" onmouseover="showMenu(this.id)">vovz</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10000">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10000&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_15" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum682864" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=49229&page=1#pid682864', '话题链接已经复制到剪贴板')">16楼</strong>
													<em onclick="$('postmessage_682864').className='t_bigfont'">大</em>							<em onclick="$('postmessage_682864').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_682864').className='t_smallfont'">小</em>												发表于 2010-6-14 23:01&nbsp;																					<a href="viewthread.php?tid=49229&amp;page=1&amp;authorid=10000" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_15"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_15"></div><div id="ad_thread4_15"></div>
						
						
																											<div id="postmessage_682864" class="t_msgfont">可以用Bitwise Tunnelier ，这个支持设置代理的~！</div>

							
							
							
							
															<div id="post_rate_div_682864"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo682864_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=10000" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=49229&amp;repquote=682864&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 682864)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_15"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid687518" summary="pid687518" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=4394" target="_blank" id="userinfo687518" class="dropmenu" onmouseover="showMenu(this.id)">imcol</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=4394">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=4394&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_16" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum687518" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=49229&page=1#pid687518', '话题链接已经复制到剪贴板')">17楼</strong>
													<em onclick="$('postmessage_687518').className='t_bigfont'">大</em>							<em onclick="$('postmessage_687518').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_687518').className='t_smallfont'">小</em>												发表于 2010-6-17 12:15&nbsp;																					<a href="viewthread.php?tid=49229&amp;page=1&amp;authorid=4394" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_16"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_16"></div><div id="ad_thread4_16"></div>
						
						
																											<div id="postmessage_687518" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>萧易寒</i> 于 2010-6-14 10:38 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=681694&amp;ptid=49229" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
MyEntunnel连不上和pac有个屁关系啊<br />
检查MyEntunnel配置啊 </blockquote></div>Pac的问题没有了，谢谢<br />
MyEnTunnel的配置貌似没有什么特别的啊。就是连不通<br />
用户名、密码、端口。。。<br />
<a href="https://yopic.us/?v=myentunnel.jpg" target="_blank"><img src="https://yopic.us/thumbs/myentunnel.jpg" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a></div>

							
							
							
							
															<div id="post_rate_div_687518"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo687518_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=4394" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=49229&amp;repquote=687518&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 687518)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_16"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid687726" summary="pid687726" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6873" target="_blank" id="userinfo687726" class="dropmenu" onmouseover="showMenu(this.id)">萧易寒</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6873">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6873&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_17" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum687726" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=49229&page=1#pid687726', '话题链接已经复制到剪贴板')">18楼</strong>
													<em onclick="$('postmessage_687726').className='t_bigfont'">大</em>							<em onclick="$('postmessage_687726').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_687726').className='t_smallfont'">小</em>												发表于 2010-6-17 13:43&nbsp;																					<a href="viewthread.php?tid=49229&amp;page=1&amp;authorid=6873" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_17"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_17"></div><div id="ad_thread4_17"></div>
													<h2>回复 17楼 imcol 的话题</h2>
						
						
																											<div id="postmessage_687726" class="t_msgfont">你这个出错提示好像是IP+端口的问题，还没到用户名/密码阶段呢</div>

							
							
							
							
															<div id="post_rate_div_687726"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo687726_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=6873" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=49229&amp;repquote=687726&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 687726)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_17"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid687820" summary="pid687820" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10733" target="_blank" id="userinfo687820" class="dropmenu" onmouseover="showMenu(this.id)">pillarchang</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10733">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10733&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_18" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum687820" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=49229&page=1#pid687820', '话题链接已经复制到剪贴板')">19楼</strong>
													<em onclick="$('postmessage_687820').className='t_bigfont'">大</em>							<em onclick="$('postmessage_687820').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_687820').className='t_smallfont'">小</em>												发表于 2010-6-17 14:20&nbsp;																					<a href="viewthread.php?tid=49229&amp;page=1&amp;authorid=10733" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_18"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_18"></div><div id="ad_thread4_18"></div>
													<h2>回复 萧易寒</h2>
						
						
																											<div id="postmessage_687820" class="t_msgfont">在我们公司 登录 SSH 是被禁的, 提示如下信息<br />
<img src="https://yopic.us/images/screenshot.jpg" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></div>

							
							
							
							
															<div id="post_rate_div_687820"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo687820_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=10733" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=49229&amp;repquote=687820&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 687820)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_18"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid687962" summary="pid687962" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6873" target="_blank" id="userinfo687962" class="dropmenu" onmouseover="showMenu(this.id)">萧易寒</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6873">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6873&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_19" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum687962" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=49229&page=1#pid687962', '话题链接已经复制到剪贴板')">20楼</strong>
													<em onclick="$('postmessage_687962').className='t_bigfont'">大</em>							<em onclick="$('postmessage_687962').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_687962').className='t_smallfont'">小</em>												发表于 2010-6-17 15:27&nbsp;																					<a href="viewthread.php?tid=49229&amp;page=1&amp;authorid=6873" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_19"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_19"></div><div id="ad_thread4_19"></div>
													<h2>回复 19楼 pillarchang 的话题</h2>
						
						
																											<div id="postmessage_687962" class="t_msgfont">pillarchang 和imcol是一个公司的吗？<br />
我都搞晕了。。。。。<br />
<br />
看提示应该是ISA Server阻止了22端口的连接？<br />
你们的网关或者上网服务器是怎么配置的？</div>

							
							
							
							
															<div id="post_rate_div_687962"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo687962_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=6873" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=49229&amp;repquote=687962&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 687962)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_19"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid688181" summary="pid688181" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=4394" target="_blank" id="userinfo688181" class="dropmenu" onmouseover="showMenu(this.id)">imcol</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=4394">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=4394&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_20" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum688181" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=49229&page=1#pid688181', '话题链接已经复制到剪贴板')">21楼</strong>
													<em onclick="$('postmessage_688181').className='t_bigfont'">大</em>							<em onclick="$('postmessage_688181').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_688181').className='t_smallfont'">小</em>												发表于 2010-6-17 16:34&nbsp;																					<a href="viewthread.php?tid=49229&amp;page=1&amp;authorid=4394" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_20"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_20"></div><div id="ad_thread4_20"></div>
						
						
																											<div id="postmessage_688181" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>萧易寒</i> 于 2010-6-17 15:27 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=687962&amp;ptid=49229" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
pillarchang 和imcol是一个公司的吗？<br />
我都搞晕了。。。。。<br />
<br />
看提示应该是ISA Server阻止了22端口的连接？<br />
你们的网关或者上网服务器是怎么配置的？ </blockquote></div>应该不会是同一个公司吧。<br />
我用楼上的同学推荐的 Bitvise Tunnelier，显示如图<br />
<img src="https://yopic.us/images/bitwisetun.jpg" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></div>

							
							
							
							
															<div id="post_rate_div_688181"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo688181_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=4394" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=49229&amp;repquote=688181&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 688181)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_20"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid688212" summary="pid688212" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1960" target="_blank" id="userinfo688212" class="dropmenu" onmouseover="showMenu(this.id)">库存袈裟</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">@bruceku 想象力比知识更重要。</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1960">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1960&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_21" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum688212" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=49229&page=1#pid688212', '话题链接已经复制到剪贴板')">22楼</strong>
													<em onclick="$('postmessage_688212').className='t_bigfont'">大</em>							<em onclick="$('postmessage_688212').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_688212').className='t_smallfont'">小</em>												发表于 2010-6-17 16:45&nbsp;																					<a href="viewthread.php?tid=49229&amp;page=1&amp;authorid=1960" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_21"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_21"></div><div id="ad_thread4_21"></div>
						
						
																											<div id="postmessage_688212" class="t_msgfont">简单表述下我的想法：<br />
SSH客户端--&gt;网关---&gt;SSH服务器---&gt;网站 （这是常规的过程）<br />
<br />
LZ的情况<br />
SSH客户端--&gt;企业网关（防火墙）---&gt;网关---&gt;SSH服务器---&gt;网站<br />
<br />
存在问题：<br />
1.LZ所在在企业网关（防火墙）向外连接过程需要经过企业pac文件指定代理<br />
2.不通过pac文件连接网关将无法访问外网<br />
3.SSH转发翻墙基于本机S5代理原理，与pac设置有冲突<br />
<br />
设想：<br />
1.分析企业pac文件，找到企业代理IP与端口<br />
2.寻找一个基于常规代理的连接工具如SocksCap<br />
3.配置SocksCap使用企业代理IP与端口，将MyEnTunnel添加到SocksCap中<br />
4.使用FireFox+autoproxy，将autoproxy默认代理设置为MyEnTunnel的本地转发地址</div>

							
							
							
							
															<div id="post_rate_div_688212"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo688212_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1960" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=49229&amp;repquote=688212&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 688212)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_21"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid689767" summary="pid689767" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10733" target="_blank" id="userinfo689767" class="dropmenu" onmouseover="showMenu(this.id)">pillarchang</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10733">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10733&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_22" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum689767" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=49229&page=1#pid689767', '话题链接已经复制到剪贴板')">23楼</strong>
													<em onclick="$('postmessage_689767').className='t_bigfont'">大</em>							<em onclick="$('postmessage_689767').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_689767').className='t_smallfont'">小</em>												发表于 2010-6-18 10:47&nbsp;																					<a href="viewthread.php?tid=49229&amp;page=1&amp;authorid=10733" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_22"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_22"></div><div id="ad_thread4_22"></div>
						
						
																											<div id="postmessage_689767" class="t_msgfont">针对袈裟的 设想&nbsp;&nbsp;3.配置SocksCap使用企业代理IP与端口，将MyEnTunnel添加到SocksCap中<br />
我实际验证了番。<br />
<br />
结果是失败的。因为在我们单位 提供的代理服务器是 http代理，但是 Sockscap需要使用socks代理，所以无法顺利连接。<br />
<br />
我是通过 付费的waysonline 软件作为本地代理，然后将Tunnelier 连上Socksonline 设定的代理端口使用。<br />
这样虽然能连上，但是网速相对慢些，而且需要交钱，所以划不来～</div>

							
							
							
							
															<div id="post_rate_div_689767"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo689767_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=10733" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=49229&amp;repquote=689767&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 689767)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_22"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid697396" summary="pid697396" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=4394" target="_blank" id="userinfo697396" class="dropmenu" onmouseover="showMenu(this.id)">imcol</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=4394">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=4394&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_23" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum697396" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=49229&page=1#pid697396', '话题链接已经复制到剪贴板')">24楼</strong>
													<em onclick="$('postmessage_697396').className='t_bigfont'">大</em>							<em onclick="$('postmessage_697396').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_697396').className='t_smallfont'">小</em>												发表于 2010-6-22 13:17&nbsp;																					<a href="viewthread.php?tid=49229&amp;page=1&amp;authorid=4394" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_23"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_23"></div><div id="ad_thread4_23"></div>
						
						
																											<div id="postmessage_697396" class="t_msgfont">使用socketcap后，MyEnTunnel可以运行，变绿，但是不稳定，经常掉线，墙没法翻过去。<br />
其他的设置根据袈裟提供的文档进行配置。<br />
现在是在浏览器中用企业proxy server，不知道该如何正确设置。<br />
谢谢技术帝能提供建议</div>

							
							
							
							
															<div id="post_rate_div_697396"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo697396_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=4394" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=49229&amp;repquote=697396&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 697396)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_23"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid697457" summary="pid697457" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=16496" target="_blank" id="userinfo697457" class="dropmenu" onmouseover="showMenu(this.id)">lehui99</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=16496">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=16496&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_24" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum697457" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=49229&page=1#pid697457', '话题链接已经复制到剪贴板')">25楼</strong>
													<em onclick="$('postmessage_697457').className='t_bigfont'">大</em>							<em onclick="$('postmessage_697457').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_697457').className='t_smallfont'">小</em>												发表于 2010-6-22 13:56&nbsp;																					<a href="viewthread.php?tid=49229&amp;page=1&amp;authorid=16496" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_24"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_24"></div><div id="ad_thread4_24"></div>
						
						
																											<div id="postmessage_697457" class="t_msgfont">其实这贴问题是：《如何在必须使用HTTP代理服务器访问外部网络的网络环境中使用外部SSH》<br />
<br />
其实，有HTTP代理转socks5代理的软件（比如CCProxy和很早之前的代理猎手），然后用sockscap就可以使用外部SSH了。</div>

							
							
							
							
															<div id="post_rate_div_697457"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo697457_menu" style="display: none;">
										<dl></dl>
											<p><a href="https://www.google.com/reader/shared/lehui99" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=16496" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=49229&amp;repquote=697457&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 697457)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_24"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid699040" summary="pid699040" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=4394" target="_blank" id="userinfo699040" class="dropmenu" onmouseover="showMenu(this.id)">imcol</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=4394">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=4394&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_25" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum699040" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=49229&page=1#pid699040', '话题链接已经复制到剪贴板')">26楼</strong>
													<em onclick="$('postmessage_699040').className='t_bigfont'">大</em>							<em onclick="$('postmessage_699040').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_699040').className='t_smallfont'">小</em>												发表于 2010-6-23 11:41&nbsp;																					<a href="viewthread.php?tid=49229&amp;page=1&amp;authorid=4394" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_25"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_25"></div><div id="ad_thread4_25"></div>
						
						
																											<div id="postmessage_699040" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>lehui99</i> 于 2010-6-22 13:56 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=697457&amp;ptid=49229" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
其实这贴问题是：《如何在必须使用HTTP代理服务器访问外部网络的网络环境中使用外部SSH》<br />
<br />
其实，有HTTP代理转socks5代理的软件（比如CCProxy和很早之前的代理猎手），然后用sockscap就可以使用外部SSH了。 </blockquote></div>没有用过CCproxy或代理猎手，是装在用户端的吗？谢谢</div>

							
							
							
							
															<div id="post_rate_div_699040"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo699040_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=4394" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=49229&amp;repquote=699040&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 699040)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_25"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid700124" summary="pid700124" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 <a name="lastpost"></a>					<cite>											<a href="space.php?uid=16496" target="_blank" id="userinfo700124" class="dropmenu" onmouseover="showMenu(this.id)">lehui99</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=16496">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=16496&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_26" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum700124" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=49229&page=1#pid700124', '话题链接已经复制到剪贴板')">27楼</strong>
													<em onclick="$('postmessage_700124').className='t_bigfont'">大</em>							<em onclick="$('postmessage_700124').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_700124').className='t_smallfont'">小</em>												发表于 2010-6-23 22:24&nbsp;																					<a href="viewthread.php?tid=49229&amp;page=1&amp;authorid=16496" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_26"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_26"></div><div id="ad_thread4_26"></div>
						
						
																											<div id="postmessage_700124" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>imcol</i> 于 2010-6-23 11:41 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=699040&amp;ptid=49229" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
<br />
没有用过CCproxy或代理猎手，是装在用户端的吗？谢谢 </blockquote></div>是的。自己去Google搜一下，有很多HTTP代理转socks代理的方法。</div>

							
							
							
							
															<div id="post_rate_div_700124"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo700124_menu" style="display: none;">
										<dl></dl>
											<p><a href="https://www.google.com/reader/shared/lehui99" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=16496" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=49229&amp;repquote=700124&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 700124)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_26"></div>				</div>
			</td>
		</tr>
		</table>
		</div>
</form>





<div class="pages_btns">
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=49229&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=49229&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
				<span class="postbtn" id="newspecialtmp" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=49229&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

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

	<form method="post" id="postform" action="post.php?action=reply&amp;fid=26&amp;tid=49229&amp;extra=&amp;replysubmit=yes" onSubmit="return validate(this)">
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
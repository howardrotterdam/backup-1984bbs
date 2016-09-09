<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<title>Google被墙后的解决办法 - 国家局域网研究所 -  1984bbs.com </title>
<meta name="keywords" content="" />
<meta name="MSSmartTagsPreventParsing" content="True" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<link rel="archives" title="1984bbs.com" href="https://1984bbs.com/archiver/" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_viewthread.css" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_common.css" />
<script type="text/javascript">
	var discuz_uid = 13019;var IMGDIR = 'images/default';var attackevasive = '0';var gid = 0;var STYLEID = '1';
	gid = parseInt('3');var fid = parseInt('26');var tid = parseInt('14848');
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
			<p><a href="index.php" id="forumlist" onmouseover="showMenu(this.id)" class="dropmenu">1984bbs.com</a> &raquo; <a href="forumdisplay.php?fid=26">国家局域网研究所</a> &raquo; Google被墙后的解决办法</p>
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
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=14848&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=14848&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
				<span class="postbtn" id="newspecial" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=14848&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

	<ul class="popupmenu_popup newspecialmenu" id="newspecial_menu" style="display: none">
		<li><a href="post.php?action=newthread&amp;fid=26&amp;extra=">发新话题</a></li>
		<li class="poll"><a href="post.php?action=newthread&amp;fid=26&amp;extra=&amp;special=1">发布投票</a></li>													</ul>

<form method="post" name="modactions">
	<input type="hidden" name="formhash" value="823c9fa2" />
	<div class="mainbox viewthread">
		<span class="headactions">
					<a href="my.php?item=favorites&amp;tid=14848" id="ajax_favorite" onclick="ajaxmenu(event, this.id, 3000, 0)">收藏</a>
			<a href="my.php?item=subscriptions&amp;subadd=14848" id="ajax_subscription" onclick="ajaxmenu(event, this.id, 3000, null, 0)">订阅</a>
			<a href="misc.php?action=emailfriend&amp;tid=14848" id="emailfriend" onclick="ajaxmenu(event, this.id, 9000000, null, 0)">推荐</a>
				<a href="viewthread.php?action=printable&amp;tid=14848" target="_blank" class="notabs">打印</a>
				</span>
		<h1>Google被墙后的解决办法		</h1>
							<table id="pid136745" summary="pid136745" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6007" target="_blank" id="userinfo136745" class="dropmenu" onmouseover="showMenu(this.id)">hexiecollege</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">北国</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6007">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6007&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_0" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum136745" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=14848&page=1#pid136745', '话题链接已经复制到剪贴板')">1楼</strong>
													<em onclick="$('postmessage_136745').className='t_bigfont'">大</em>							<em onclick="$('postmessage_136745').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_136745').className='t_smallfont'">小</em>												发表于 2009-6-25 14:49&nbsp;																					<a href="viewthread.php?tid=14848&amp;page=1&amp;authorid=6007" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_0"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_0"></div><div id="ad_thread4_0"></div>
													<h2>Google被墙后的解决办法</h2>
						
						
																											<div id="postmessage_136745" class="t_msgfont">从6月24日晚上开始，Google.com旗下的各类网站均无法访问，其中就有大陆网民阅读必备的Google Reader。原因很简单，Google.com以及Google Reader的域名的DNS被国家恐怖组织GFW劫持了。此组织通过技术手段，将Google的各类境外域名解析到一个错误的地址，使得Google.com无法访问。<br />
<br />
既然是域名劫持，那么解决方法也能简单。既然你不让我解析正确，那么我把Google域名的IP直接解析，跳过被劫持的DNS解析这个步骤，即可正常访问Google.com及Google Reader。<br />
<br />
你只需在你电脑C:\WINDOWS\system32\drivers\etc里面打开hosts文件(用Windows自带的记事本，写字板都可以)，另起一行加上以下的代码：<br />
<br />
208.67.219.231 <a href="http://www.google.com" target="_blank">www.google.com</a><br />
74.125.91.18 <a href="http://www.gmail.com" target="_blank">www.gmail.com</a><br />
72.14.203.103 blogsearch.google.com<br />
74.125.91.83 mail.google.com<br />
74.125.91.103 picasa.google.com<br />
66.249.89.100 books.google.com<br />
66.249.89.104 news.google.com<br />
72.14.203.100 groups.google.com<br />
66.249.89.100 docs.google.com<br />
66.249.89.104 images.google.com<br />
72.14.203.100 video.google.com<br />
66.249.89.104 maps.google.com<br />
72.14.203.103 scholar.google.com<br />
66.249.89.100 sites.google.com<br />
66.249.89.136 picasaweb.google.com<br />
66.249.89.104 <a href="http://www.google.com/finance" target="_blank">www.google.com/finance</a><br />
66.249.89.104 <a href="http://www.google.com/prdhp" target="_blank">www.google.com/prdhp</a><br />
66.249.89.104 <a href="http://www.google.com/calendar" target="_blank">www.google.com/calendar</a><br />
<br />
如果hosts文件不能修改，就取消这个文件的只读属性，经过这个步骤，所有Google服务均可访问。<br />
如果有疑问，可以用Twitter和我联系。我的Twitter：<a href="https://twitter.com/hexiecollege" target="_blank">https://twitter.com/hexiecollege</a><br />
<br />
其他联系方式：<br />
卧草集：<a href="http://hexiecollege.blogspot.com/" target="_blank">http://hexiecollege.blogspot.com/</a><br />
小组：<a href="https://groups.google.com/group/hexiecollege" target="_blank">https://groups.google.com/group/hexiecollege</a></div>

							
							
							
							
															<div id="post_rate_div_136745"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo136745_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://hexiecollege.blogspot.com/" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=6007" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=14848&amp;repquote=136745&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 136745)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_0"></div>				</div>
			</td>
		</tr>
		</table>
		</div><div class="ad_column" id="ad_interthread"><a href="/viewthread.php?tid=54699" target="_blank" style="color:red;">1984bbs是一个非营利项目，它需要您的捐助！</font></a>		</div>
	<div class="mainbox viewthread">
			<table id="pid136755" summary="pid136755" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=4490" target="_blank" id="userinfo136755" class="dropmenu" onmouseover="showMenu(this.id)">camour</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">此件发至县团级</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=4490">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=4490&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_1" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum136755" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=14848&page=1#pid136755', '话题链接已经复制到剪贴板')">2楼</strong>
													<em onclick="$('postmessage_136755').className='t_bigfont'">大</em>							<em onclick="$('postmessage_136755').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_136755').className='t_smallfont'">小</em>												发表于 2009-6-25 14:59&nbsp;																					<a href="viewthread.php?tid=14848&amp;page=1&amp;authorid=4490" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_1"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_1"></div><div id="ad_thread4_1"></div>
						
						
																											<div id="postmessage_136755" class="t_msgfont">不错，收藏起来</div>

							
							
							
							
															<div id="post_rate_div_136755"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo136755_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=4490" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=14848&amp;repquote=136755&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 136755)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_1"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid136806" summary="pid136806" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1746" target="_blank" id="userinfo136806" class="dropmenu" onmouseover="showMenu(this.id)">苏丹宏</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1746">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1746&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_2" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum136806" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=14848&page=1#pid136806', '话题链接已经复制到剪贴板')">3楼</strong>
													<em onclick="$('postmessage_136806').className='t_bigfont'">大</em>							<em onclick="$('postmessage_136806').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_136806').className='t_smallfont'">小</em>												发表于 2009-6-25 15:27&nbsp;																					<a href="viewthread.php?tid=14848&amp;page=1&amp;authorid=1746" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_2"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_2"></div><div id="ad_thread4_2"></div>
						
						
																											<div id="postmessage_136806" class="t_msgfont">问题：用什么程序打开这个文件？</div>

							
							
							
							
															<div id="post_rate_div_136806"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo136806_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1746" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=14848&amp;repquote=136806&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 136806)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_2"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid136809" summary="pid136809" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6007" target="_blank" id="userinfo136809" class="dropmenu" onmouseover="showMenu(this.id)">hexiecollege</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">北国</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6007">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6007&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_3" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum136809" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=14848&page=1#pid136809', '话题链接已经复制到剪贴板')">4楼</strong>
													<em onclick="$('postmessage_136809').className='t_bigfont'">大</em>							<em onclick="$('postmessage_136809').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_136809').className='t_smallfont'">小</em>												发表于 2009-6-25 15:29&nbsp;																					<a href="viewthread.php?tid=14848&amp;page=1&amp;authorid=6007" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_3"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_3"></div><div id="ad_thread4_3"></div>
						
						
																											<div id="postmessage_136809" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>苏丹宏</i> 于 2009-6-25 15:27 发表 <a href="http://1984bbs.com/redirect.php?goto=findpost&amp;pid=136806&amp;ptid=14848" target="_blank"><img src="http://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
问题：用什么程序打开这个文件？ </blockquote></div>用windows自带的记事本或者写字板都可。</div>

							
							
							
							
															<div id="post_rate_div_136809"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo136809_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://hexiecollege.blogspot.com/" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=6007" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=14848&amp;repquote=136809&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 136809)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_3"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid136872" summary="pid136872" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1371" target="_blank" id="userinfo136872" class="dropmenu" onmouseover="showMenu(this.id)">deathproof</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1371">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1371&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_4" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum136872" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=14848&page=1#pid136872', '话题链接已经复制到剪贴板')">5楼</strong>
													<em onclick="$('postmessage_136872').className='t_bigfont'">大</em>							<em onclick="$('postmessage_136872').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_136872').className='t_smallfont'">小</em>												发表于 2009-6-25 16:24&nbsp;																					<a href="viewthread.php?tid=14848&amp;page=1&amp;authorid=1371" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_4"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_4"></div><div id="ad_thread4_4"></div>
						
						
																											<div id="postmessage_136872" class="t_msgfont">很管用，3q！</div>

							
							
							
							
															<div id="post_rate_div_136872"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo136872_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1371" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=14848&amp;repquote=136872&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 136872)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_4"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid136976" summary="pid136976" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=3354" target="_blank" id="userinfo136976" class="dropmenu" onmouseover="showMenu(this.id)">SLBEE</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=3354">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=3354&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_5" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum136976" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=14848&page=1#pid136976', '话题链接已经复制到剪贴板')">6楼</strong>
													<em onclick="$('postmessage_136976').className='t_bigfont'">大</em>							<em onclick="$('postmessage_136976').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_136976').className='t_smallfont'">小</em>												发表于 2009-6-25 17:32&nbsp;																					<a href="viewthread.php?tid=14848&amp;page=1&amp;authorid=3354" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_5"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_5"></div><div id="ad_thread4_5"></div>
													<h2>刚刚改完，确实有效，非常感谢！</h2>
						
						
																											<div id="postmessage_136976" class="t_msgfont">改完就能打开GOOGLE了，非常感谢！今天折腾翻墙一天也没弄明白TOR什么的！汗颜呀！<br />
<br />
热烈熊抱一枚：））</div>

							
							
							
							
															<div id="post_rate_div_136976"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo136976_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=3354" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=14848&amp;repquote=136976&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 136976)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_5"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid137002" summary="pid137002" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=5798" target="_blank" id="userinfo137002" class="dropmenu" onmouseover="showMenu(this.id)">Jyamolmiry</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">两岸猿声啼不住，党的政策亚克西。</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=5798">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=5798&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_6" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum137002" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=14848&page=1#pid137002', '话题链接已经复制到剪贴板')">7楼</strong>
													<em onclick="$('postmessage_137002').className='t_bigfont'">大</em>							<em onclick="$('postmessage_137002').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_137002').className='t_smallfont'">小</em>												发表于 2009-6-25 17:54&nbsp;																					<a href="viewthread.php?tid=14848&amp;page=1&amp;authorid=5798" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_6"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_6"></div><div id="ad_thread4_6"></div>
						
						
																											<div id="postmessage_137002" class="t_msgfont">没有这个文件。vista没有</div>

							
							
							
							
															<div id="post_rate_div_137002"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo137002_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=5798" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=14848&amp;repquote=137002&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 137002)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_6"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid137014" summary="pid137014" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6007" target="_blank" id="userinfo137014" class="dropmenu" onmouseover="showMenu(this.id)">hexiecollege</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">北国</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6007">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6007&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_7" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum137014" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=14848&page=1#pid137014', '话题链接已经复制到剪贴板')">8楼</strong>
													<em onclick="$('postmessage_137014').className='t_bigfont'">大</em>							<em onclick="$('postmessage_137014').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_137014').className='t_smallfont'">小</em>												发表于 2009-6-25 18:04&nbsp;																					<a href="viewthread.php?tid=14848&amp;page=1&amp;authorid=6007" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_7"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_7"></div><div id="ad_thread4_7"></div>
						
						
																											<div id="postmessage_137014" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>Jyamolmiry</i> 于 2009-6-25 17:54 发表 <a href="http://1984bbs.com/redirect.php?goto=findpost&amp;pid=137002&amp;ptid=14848" target="_blank"><img src="http://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
没有这个文件。vista没有 </blockquote></div>Vista里也是有这个文件的。</div>

							
							
							
							
															<div id="post_rate_div_137014"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo137014_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://hexiecollege.blogspot.com/" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=6007" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=14848&amp;repquote=137014&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 137014)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_7"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid137025" summary="pid137025" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2971" target="_blank" id="userinfo137025" class="dropmenu" onmouseover="showMenu(this.id)">luckyray</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">不明真相</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2971">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2971&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_8" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum137025" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=14848&page=1#pid137025', '话题链接已经复制到剪贴板')">9楼</strong>
													<em onclick="$('postmessage_137025').className='t_bigfont'">大</em>							<em onclick="$('postmessage_137025').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_137025').className='t_smallfont'">小</em>												发表于 2009-6-25 18:10&nbsp;																					<a href="viewthread.php?tid=14848&amp;page=1&amp;authorid=2971" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_8"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_8"></div><div id="ad_thread4_8"></div>
						
						
																											<div id="postmessage_137025" class="t_msgfont">小组能人辈出啊</div>

							
							
							
							
															<div id="post_rate_div_137025"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo137025_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=2971" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=14848&amp;repquote=137025&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 137025)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_8"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid137164" summary="pid137164" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6909" target="_blank" id="userinfo137164" class="dropmenu" onmouseover="showMenu(this.id)">落沙</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6909">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6909&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_9" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum137164" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=14848&page=1#pid137164', '话题链接已经复制到剪贴板')">10楼</strong>
													<em onclick="$('postmessage_137164').className='t_bigfont'">大</em>							<em onclick="$('postmessage_137164').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_137164').className='t_smallfont'">小</em>												发表于 2009-6-25 19:15&nbsp;																					<a href="viewthread.php?tid=14848&amp;page=1&amp;authorid=6909" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_9"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_9"></div><div id="ad_thread4_9"></div>
						
						
																											<div id="postmessage_137164" class="t_msgfont">vista有，可是改不了啊。。。没有只读属性</div>

							
							
							
							
															<div id="post_rate_div_137164"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo137164_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=6909" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=14848&amp;repquote=137164&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 137164)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_9"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid137167" summary="pid137167" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6909" target="_blank" id="userinfo137167" class="dropmenu" onmouseover="showMenu(this.id)">落沙</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6909">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6909&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_10" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum137167" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=14848&page=1#pid137167', '话题链接已经复制到剪贴板')">11楼</strong>
													<em onclick="$('postmessage_137167').className='t_bigfont'">大</em>							<em onclick="$('postmessage_137167').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_137167').className='t_smallfont'">小</em>												发表于 2009-6-25 19:22&nbsp;																					<a href="viewthread.php?tid=14848&amp;page=1&amp;authorid=6909" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_10"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_10"></div><div id="ad_thread4_10"></div>
						
						
																											<div id="postmessage_137167" class="t_msgfont">解决了，是用户权限的问题，修改下ok了</div>

							
							
							
							
															<div id="post_rate_div_137167"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo137167_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=6909" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=14848&amp;repquote=137167&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 137167)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_10"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid137189" summary="pid137189" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=3354" target="_blank" id="userinfo137189" class="dropmenu" onmouseover="showMenu(this.id)">SLBEE</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=3354">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=3354&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_11" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum137189" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=14848&page=1#pid137189', '话题链接已经复制到剪贴板')">12楼</strong>
													<em onclick="$('postmessage_137189').className='t_bigfont'">大</em>							<em onclick="$('postmessage_137189').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_137189').className='t_smallfont'">小</em>												发表于 2009-6-25 19:41&nbsp;																					<a href="viewthread.php?tid=14848&amp;page=1&amp;authorid=3354" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_11"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_11"></div><div id="ad_thread4_11"></div>
													<h2>刚才登录GOOGLE时发现，又打不开了，唉！！</h2>
						
						
																											<div id="postmessage_137189" class="t_msgfont">刚才想登录时发现又打不开了！&nbsp;&nbsp;不知其他朋友怎么样了</div>

							
							
							
							
															<div id="post_rate_div_137189"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo137189_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=3354" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=14848&amp;repquote=137189&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 137189)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_11"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid137209" summary="pid137209" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=4751" target="_blank" id="userinfo137209" class="dropmenu" onmouseover="showMenu(this.id)">anonymous</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">我是傻逼</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=4751">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=4751&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_12" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum137209" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=14848&page=1#pid137209', '话题链接已经复制到剪贴板')">13楼</strong>
													<em onclick="$('postmessage_137209').className='t_bigfont'">大</em>							<em onclick="$('postmessage_137209').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_137209').className='t_smallfont'">小</em>												发表于 2009-6-25 19:54&nbsp;																					<a href="viewthread.php?tid=14848&amp;page=1&amp;authorid=4751" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_12"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_12"></div><div id="ad_thread4_12"></div>
						
						
																											<div id="postmessage_137209" class="t_msgfont"><a href="http://www.brsbox.com/filebox/down/fc/8db3ccfe8aff96ff6336bb84f1522ad4" target="_blank">http://www.brsbox.com/filebox/do ... 6ff6336bb84f1522ad4</a><br />
按照 hexiecollege 贴的地址做了批处理，不会手动添加的，下载下来直接运行就可以了。</div>

							
							
							
							
															<div id="post_rate_div_137209"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo137209_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=4751" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=14848&amp;repquote=137209&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 137209)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_12"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid137221" summary="pid137221" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=3354" target="_blank" id="userinfo137221" class="dropmenu" onmouseover="showMenu(this.id)">SLBEE</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=3354">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=3354&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_13" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum137221" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=14848&page=1#pid137221', '话题链接已经复制到剪贴板')">14楼</strong>
													<em onclick="$('postmessage_137221').className='t_bigfont'">大</em>							<em onclick="$('postmessage_137221').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_137221').className='t_smallfont'">小</em>												发表于 2009-6-25 20:02&nbsp;																					<a href="viewthread.php?tid=14848&amp;page=1&amp;authorid=3354" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_13"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_13"></div><div id="ad_thread4_13"></div>
													<h2>下午手工更改过ETC文件</h2>
						
						
																											<div id="postmessage_137221" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>anonymous</i> 于 2009-6-25 19:54 发表 <a href="http://1984bbs.com/redirect.php?goto=findpost&amp;pid=137209&amp;ptid=14848" target="_blank"><img src="http://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
<a href="http://www.brsbox.com/filebox/down/fc/8db3ccfe8aff96ff6336bb84f1522ad4" target="_blank">http://www.brsbox.com/filebox/do ... 6ff6336bb84f1522ad4</a><br />
按照 hexiecollege 贴的地址做了批处理，不会手动添加的，下载下来直接运行就可以了。 </blockquote></div>我下午曾经添加成功过，登录了一次，刚才再登录又不行了</div>

							
							
							
							
															<div id="post_rate_div_137221"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo137221_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=3354" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=14848&amp;repquote=137221&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 137221)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_13"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid137236" summary="pid137236" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=3014" target="_blank" id="userinfo137236" class="dropmenu" onmouseover="showMenu(this.id)">shage</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=3014">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=3014&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_14" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum137236" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=14848&page=1#pid137236', '话题链接已经复制到剪贴板')">15楼</strong>
													<em onclick="$('postmessage_137236').className='t_bigfont'">大</em>							<em onclick="$('postmessage_137236').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_137236').className='t_smallfont'">小</em>												发表于 2009-6-25 20:10&nbsp;																					<a href="viewthread.php?tid=14848&amp;page=1&amp;authorid=3014" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_14"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_14"></div><div id="ad_thread4_14"></div>
						
						
																											<div id="postmessage_137236" class="t_msgfont">谢谢啦</div>

							
							
							
							
															<div id="post_rate_div_137236"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo137236_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=3014" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=14848&amp;repquote=137236&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 137236)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_14"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid137393" summary="pid137393" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2958" target="_blank" id="userinfo137393" class="dropmenu" onmouseover="showMenu(this.id)">随便吧</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2958">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2958&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_15" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum137393" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=14848&page=1#pid137393', '话题链接已经复制到剪贴板')">16楼</strong>
													<em onclick="$('postmessage_137393').className='t_bigfont'">大</em>							<em onclick="$('postmessage_137393').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_137393').className='t_smallfont'">小</em>												发表于 2009-6-25 21:56&nbsp;																					<a href="viewthread.php?tid=14848&amp;page=1&amp;authorid=2958" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_15"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_15"></div><div id="ad_thread4_15"></div>
						
						
																											<div id="postmessage_137393" class="t_msgfont">请教下为什么我输入<a href="http://www.google.com打开的网页会自动跳转到" target="_blank">www.google.com打开的网页会自动跳转到[url]www.google.cn?</a>[/url]</div>

							
							
							
							
															<div id="post_rate_div_137393"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo137393_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=2958" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=14848&amp;repquote=137393&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 137393)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_15"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid137446" summary="pid137446" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=4751" target="_blank" id="userinfo137446" class="dropmenu" onmouseover="showMenu(this.id)">anonymous</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">我是傻逼</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=4751">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=4751&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_16" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum137446" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=14848&page=1#pid137446', '话题链接已经复制到剪贴板')">17楼</strong>
													<em onclick="$('postmessage_137446').className='t_bigfont'">大</em>							<em onclick="$('postmessage_137446').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_137446').className='t_smallfont'">小</em>												发表于 2009-6-25 22:36&nbsp;																					<a href="viewthread.php?tid=14848&amp;page=1&amp;authorid=4751" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_16"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_16"></div><div id="ad_thread4_16"></div>
						
						
																											<div id="postmessage_137446" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>随便吧</i> 于 2009-6-25 21:56 发表 <a href="http://1984bbs.com/redirect.php?goto=findpost&amp;pid=137393&amp;ptid=14848" target="_blank"><img src="http://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
请教下为什么我输入<a href="http://www.google.com" target="_blank">www.google.com</a> 打开的网页会自动跳转到 <a href="http://www.google.cn?" target="_blank">www.google.cn?</a> </blockquote></div>大陆用户都是这样的<br />
你可以访问这个<a href="http://www.google.com.hk/" target="_blank">http://www.google.com.hk/</a></div>

							
							
							
							
															<div id="post_rate_div_137446"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo137446_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=4751" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=14848&amp;repquote=137446&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 137446)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_16"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid137452" summary="pid137452" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=3354" target="_blank" id="userinfo137452" class="dropmenu" onmouseover="showMenu(this.id)">SLBEE</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=3354">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=3354&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_17" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum137452" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=14848&page=1#pid137452', '话题链接已经复制到剪贴板')">18楼</strong>
													<em onclick="$('postmessage_137452').className='t_bigfont'">大</em>							<em onclick="$('postmessage_137452').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_137452').className='t_smallfont'">小</em>												发表于 2009-6-25 22:41&nbsp;																					<a href="viewthread.php?tid=14848&amp;page=1&amp;authorid=3354" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_17"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_17"></div><div id="ad_thread4_17"></div>
													<h2>回复 16楼 随便吧 的话题</h2>
						
						
																											<div id="postmessage_137452" class="t_msgfont">GOOGLE正常时，你可以输入WWW。GOOGLE。COM/NCR&nbsp;&nbsp;就不会跳到CN了</div>

							
							
							
							
															<div id="post_rate_div_137452"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo137452_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=3354" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=14848&amp;repquote=137452&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 137452)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_17"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid137467" summary="pid137467" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2958" target="_blank" id="userinfo137467" class="dropmenu" onmouseover="showMenu(this.id)">随便吧</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2958">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2958&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_18" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum137467" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=14848&page=1#pid137467', '话题链接已经复制到剪贴板')">19楼</strong>
													<em onclick="$('postmessage_137467').className='t_bigfont'">大</em>							<em onclick="$('postmessage_137467').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_137467').className='t_smallfont'">小</em>												发表于 2009-6-25 22:51&nbsp;																					<a href="viewthread.php?tid=14848&amp;page=1&amp;authorid=2958" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_18"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_18"></div><div id="ad_thread4_18"></div>
													<h2>回复 18楼 SLBEE 的话题</h2>
						
						
																											<div id="postmessage_137467" class="t_msgfont">可以了。谢谢！</div>

							
							
							
							
															<div id="post_rate_div_137467"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo137467_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=2958" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=14848&amp;repquote=137467&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 137467)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_18"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid138012" summary="pid138012" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6007" target="_blank" id="userinfo138012" class="dropmenu" onmouseover="showMenu(this.id)">hexiecollege</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">北国</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6007">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6007&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_19" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum138012" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=14848&page=1#pid138012', '话题链接已经复制到剪贴板')">20楼</strong>
													<em onclick="$('postmessage_138012').className='t_bigfont'">大</em>							<em onclick="$('postmessage_138012').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_138012').className='t_smallfont'">小</em>												发表于 2009-6-26 11:15&nbsp;																					<a href="viewthread.php?tid=14848&amp;page=1&amp;authorid=6007" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_19"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_19"></div><div id="ad_thread4_19"></div>
						
						
																											<div id="postmessage_138012" class="t_msgfont">我这里今天可以访问Google.com 以及Google Reader了。联通线路。 <br />
不知其他人怎么样。</div>

							
							
							
							
															<div id="post_rate_div_138012"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo138012_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://hexiecollege.blogspot.com/" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=6007" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=14848&amp;repquote=138012&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 138012)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_19"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid138970" summary="pid138970" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 <a name="lastpost"></a>					<cite>											<a href="space.php?uid=5504" target="_blank" id="userinfo138970" class="dropmenu" onmouseover="showMenu(this.id)">jo.xixifusi</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=5504">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=5504&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_20" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum138970" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=14848&page=1#pid138970', '话题链接已经复制到剪贴板')">21楼</strong>
													<em onclick="$('postmessage_138970').className='t_bigfont'">大</em>							<em onclick="$('postmessage_138970').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_138970').className='t_smallfont'">小</em>												发表于 2009-6-27 08:43&nbsp;																					<a href="viewthread.php?tid=14848&amp;page=1&amp;authorid=5504" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_20"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_20"></div><div id="ad_thread4_20"></div>
						
						
																											<div id="postmessage_138970" class="t_msgfont">把DNS服务器改成国外的也能解决google.com被墙的问题。<br />
<br />
使用中文版google.com的办法：<br />
进入google.cn—点击下面的Google.com in English—Preference—选择Chinese Simplified—Save Preference</div>

							
							
							
							
															<div id="post_rate_div_138970"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo138970_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=5504" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=14848&amp;repquote=138970&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 138970)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_20"></div>				</div>
			</td>
		</tr>
		</table>
		</div>
</form>





<div class="pages_btns">
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=14848&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=14848&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
				<span class="postbtn" id="newspecialtmp" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=14848&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

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

	<form method="post" id="postform" action="post.php?action=reply&amp;fid=26&amp;tid=14848&amp;extra=&amp;replysubmit=yes" onSubmit="return validate(this)">
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
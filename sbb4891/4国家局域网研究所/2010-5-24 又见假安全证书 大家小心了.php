<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<title>又见假安全证书 大家小心了 - 国家局域网研究所 -  1984bbs.com </title>
<meta name="keywords" content="" />
<meta name="MSSmartTagsPreventParsing" content="True" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<link rel="archives" title="1984bbs.com" href="https://1984bbs.com/archiver/" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_viewthread.css" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_common.css" />
<script type="text/javascript">
	var discuz_uid = 13019;var IMGDIR = 'images/default';var attackevasive = '0';var gid = 0;var STYLEID = '1';
	gid = parseInt('3');var fid = parseInt('26');var tid = parseInt('47156');
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
			<p><a href="index.php" id="forumlist" onmouseover="showMenu(this.id)" class="dropmenu">1984bbs.com</a> &raquo; <a href="forumdisplay.php?fid=26">国家局域网研究所</a> &raquo; 又见假安全证书 大家小心了</p>
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
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=47156&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=47156&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
				<span class="postbtn" id="newspecial" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=47156&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

	<ul class="popupmenu_popup newspecialmenu" id="newspecial_menu" style="display: none">
		<li><a href="post.php?action=newthread&amp;fid=26&amp;extra=">发新话题</a></li>
		<li class="poll"><a href="post.php?action=newthread&amp;fid=26&amp;extra=&amp;special=1">发布投票</a></li>													</ul>

<form method="post" name="modactions">
	<input type="hidden" name="formhash" value="823c9fa2" />
	<div class="mainbox viewthread">
		<span class="headactions">
					<a href="my.php?item=favorites&amp;tid=47156" id="ajax_favorite" onclick="ajaxmenu(event, this.id, 3000, 0)">收藏</a>
			<a href="my.php?item=subscriptions&amp;subadd=47156" id="ajax_subscription" onclick="ajaxmenu(event, this.id, 3000, null, 0)">订阅</a>
			<a href="misc.php?action=emailfriend&amp;tid=47156" id="emailfriend" onclick="ajaxmenu(event, this.id, 9000000, null, 0)">推荐</a>
				<a href="viewthread.php?action=printable&amp;tid=47156" target="_blank" class="notabs">打印</a>
				</span>
		<h1>又见假安全证书 大家小心了		</h1>
				<ins>
						<a href="misc.php?action=viewthreadmod&amp;tid=47156" title="主题操作记录" target="_blank">本主题由 库存袈裟 于 2010-5-26 11:59 合并</a>								</ins>
							<table id="pid636884" summary="pid636884" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2213" target="_blank" id="userinfo636884" class="dropmenu" onmouseover="showMenu(this.id)">核子力量</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">Twitter.com/hzpower</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2213">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2213&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_0" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum636884" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=47156&page=1#pid636884', '话题链接已经复制到剪贴板')">1楼</strong>
													<em onclick="$('postmessage_636884').className='t_bigfont'">大</em>							<em onclick="$('postmessage_636884').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_636884').className='t_smallfont'">小</em>												发表于 2010-5-24 22:33&nbsp;																					<a href="viewthread.php?tid=47156&amp;page=1&amp;authorid=2213" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_0"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_0"></div><div id="ad_thread4_0"></div>
													<h2>又见假安全证书 大家小心了</h2>
						
						
																											<div id="postmessage_636884" class="t_msgfont">刚才一上小组就显示证书不可靠，跟以前不一样<br />
<br />
<img src="http://yopic.us/images/zhengshu1.jpg" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
<br />
有了上一次的教训，没敢添加这个证书<br />
挂上代理再登陆就没问题了</div>

							
							
							
							
															<div id="post_rate_div_636884"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo636884_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://twitter.com/hzpower" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=2213" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=47156&amp;repquote=636884&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 636884)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_0"></div>				</div>
			</td>
		</tr>
		</table>
		</div><div class="ad_column" id="ad_interthread"><a href="/viewthread.php?tid=54699" target="_blank" style="color:red;">1984bbs是一个非营利项目，它需要您的捐助！</font></a>		</div>
	<div class="mainbox viewthread">
			<table id="pid636897" summary="pid636897" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2973" target="_blank" id="userinfo636897" class="dropmenu" onmouseover="showMenu(this.id)">free1989</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">@photobluer</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2973">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2973&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_1" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum636897" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=47156&page=1#pid636897', '话题链接已经复制到剪贴板')">2楼</strong>
													<em onclick="$('postmessage_636897').className='t_bigfont'">大</em>							<em onclick="$('postmessage_636897').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_636897').className='t_smallfont'">小</em>												发表于 2010-5-24 22:40&nbsp;																					<a href="viewthread.php?tid=47156&amp;page=1&amp;authorid=2973" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_1"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_1"></div><div id="ad_thread4_1"></div>
						
						
																											<div id="postmessage_636897" class="t_msgfont">今天用Chrome上论坛，地址前面好几次都碰到骷髅头。</div>

							
							
							
							
															<div id="post_rate_div_636897"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo636897_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=2973" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=47156&amp;repquote=636897&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 636897)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_1"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid636926" summary="pid636926" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2213" target="_blank" id="userinfo636926" class="dropmenu" onmouseover="showMenu(this.id)">核子力量</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">Twitter.com/hzpower</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2213">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2213&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_2" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum636926" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=47156&page=1#pid636926', '话题链接已经复制到剪贴板')">3楼</strong>
													<em onclick="$('postmessage_636926').className='t_bigfont'">大</em>							<em onclick="$('postmessage_636926').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_636926').className='t_smallfont'">小</em>												发表于 2010-5-24 22:48&nbsp;																					<a href="viewthread.php?tid=47156&amp;page=1&amp;authorid=2213" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_2"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_2"></div><div id="ad_thread4_2"></div>
						
						
																											<div id="postmessage_636926" class="t_msgfont">正确的是这样的吗？<br />
<br />
<img src="http://yopic.us/images/zhengshu.jpg" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></div>

							
							
							
							
															<div id="post_rate_div_636926"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo636926_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://twitter.com/hzpower" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=2213" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=47156&amp;repquote=636926&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 636926)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_2"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid636941" summary="pid636941" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6098" target="_blank" id="userinfo636941" class="dropmenu" onmouseover="showMenu(this.id)">Guru</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6098">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6098&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_3" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum636941" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=47156&page=1#pid636941', '话题链接已经复制到剪贴板')">4楼</strong>
													<em onclick="$('postmessage_636941').className='t_bigfont'">大</em>							<em onclick="$('postmessage_636941').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_636941').className='t_smallfont'">小</em>												发表于 2010-5-24 22:55&nbsp;																					<a href="viewthread.php?tid=47156&amp;page=1&amp;authorid=6098" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_3"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_3"></div><div id="ad_thread4_3"></div>
						
						
																											<div id="postmessage_636941" class="t_msgfont">我也出现过骷髅头，我顶着那玩意上会不会被盗号。。</div>

							
							
							
							
															<div id="post_rate_div_636941"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo636941_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=6098" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=47156&amp;repquote=636941&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 636941)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_3"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid636960" summary="pid636960" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=9517" target="_blank" id="userinfo636960" class="dropmenu" onmouseover="showMenu(this.id)">老西</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=9517">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=9517&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_4" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum636960" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=47156&page=1#pid636960', '话题链接已经复制到剪贴板')">5楼</strong>
													<em onclick="$('postmessage_636960').className='t_bigfont'">大</em>							<em onclick="$('postmessage_636960').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_636960').className='t_smallfont'">小</em>												发表于 2010-5-24 23:03&nbsp;																					<a href="viewthread.php?tid=47156&amp;page=1&amp;authorid=9517" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_4"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_4"></div><div id="ad_thread4_4"></div>
													<h2>回复 3楼 核子力量 的话题</h2>
						
						
																											<div id="postmessage_636960" class="t_msgfont">Google浏览器是什么样子的啊············ =。=&nbsp;&nbsp;<br />
<br />
上次这个事情就没弄明白················<br />
好在我从来没遇见过这种事情·················<br />
<br />
<br />
<img src="http://www.sharepiks.com/imgz/klz1274713460m.png" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></div>

							
							
							
							
															<div id="post_rate_div_636960"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo636960_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=9517" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=47156&amp;repquote=636960&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 636960)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_4"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid636991" summary="pid636991" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2213" target="_blank" id="userinfo636991" class="dropmenu" onmouseover="showMenu(this.id)">核子力量</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">Twitter.com/hzpower</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2213">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2213&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_5" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum636991" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=47156&page=1#pid636991', '话题链接已经复制到剪贴板')">6楼</strong>
													<em onclick="$('postmessage_636991').className='t_bigfont'">大</em>							<em onclick="$('postmessage_636991').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_636991').className='t_smallfont'">小</em>												发表于 2010-5-24 23:25&nbsp;																					<a href="viewthread.php?tid=47156&amp;page=1&amp;authorid=2213" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_5"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_5"></div><div id="ad_thread4_5"></div>
						
						
																											<div id="postmessage_636991" class="t_msgfont">上次是什么rdware的假证书</div>

							
							
							
							
															<div id="post_rate_div_636991"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo636991_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://twitter.com/hzpower" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=2213" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=47156&amp;repquote=636991&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 636991)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_5"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid637032" summary="pid637032" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2973" target="_blank" id="userinfo637032" class="dropmenu" onmouseover="showMenu(this.id)">free1989</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">@photobluer</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2973">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2973&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_6" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum637032" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=47156&page=1#pid637032', '话题链接已经复制到剪贴板')">7楼</strong>
													<em onclick="$('postmessage_637032').className='t_bigfont'">大</em>							<em onclick="$('postmessage_637032').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_637032').className='t_smallfont'">小</em>												发表于 2010-5-24 23:55&nbsp;																					<a href="viewthread.php?tid=47156&amp;page=1&amp;authorid=2973" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_6"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_6"></div><div id="ad_thread4_6"></div>
						
						
																											<div id="postmessage_637032" class="t_msgfont">又出现了。。<br />
<img src="http://img.ly/system/uploads/000/316/031/original_haha.PNG" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></div>

							
							
							
							
															<div id="post_rate_div_637032"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo637032_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=2973" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=47156&amp;repquote=637032&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 637032)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_6"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid637048" summary="pid637048" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=13468" target="_blank" id="userinfo637048" class="dropmenu" onmouseover="showMenu(this.id)">C.C.</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=13468">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=13468&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_7" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum637048" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=47156&page=1#pid637048', '话题链接已经复制到剪贴板')">8楼</strong>
													<em onclick="$('postmessage_637048').className='t_bigfont'">大</em>							<em onclick="$('postmessage_637048').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_637048').className='t_smallfont'">小</em>												发表于 2010-5-25 00:09&nbsp;																					<a href="viewthread.php?tid=47156&amp;page=1&amp;authorid=13468" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_7"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_7"></div><div id="ad_thread4_7"></div>
						
						
																											<div id="postmessage_637048" class="t_msgfont">我没碰到这问题啊</div>

							
							
							
							
															<div id="post_rate_div_637048"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo637048_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=13468" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=47156&amp;repquote=637048&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 637048)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_7"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid637067" summary="pid637067" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=9517" target="_blank" id="userinfo637067" class="dropmenu" onmouseover="showMenu(this.id)">老西</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=9517">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=9517&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_8" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum637067" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=47156&page=1#pid637067', '话题链接已经复制到剪贴板')">9楼</strong>
													<em onclick="$('postmessage_637067').className='t_bigfont'">大</em>							<em onclick="$('postmessage_637067').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_637067').className='t_smallfont'">小</em>												发表于 2010-5-25 00:20&nbsp;																					<a href="viewthread.php?tid=47156&amp;page=1&amp;authorid=9517" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_8"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_8"></div><div id="ad_thread4_8"></div>
													<h2>回复 7楼 free1989 的话题</h2>
						
						
																											<div id="postmessage_637067" class="t_msgfont">我靠···········看见了··················<br />
<br />
我没出现过············</div>

							
							
							
							
															<div id="post_rate_div_637067"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo637067_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=9517" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=47156&amp;repquote=637067&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 637067)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_8"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid637078" summary="pid637078" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10698" target="_blank" id="userinfo637078" class="dropmenu" onmouseover="showMenu(this.id)">张白一</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">我等将成为牧羊人，为了你，我的主，为了你，从你手中继承权柄，我等的脚将迅捷地执行您的旨意，用他们的灵魂，让这条流向你的河流生生不息。以圣父、圣子、圣灵之名。” </p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10698">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10698&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_9" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum637078" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=47156&page=1#pid637078', '话题链接已经复制到剪贴板')">10楼</strong>
													<em onclick="$('postmessage_637078').className='t_bigfont'">大</em>							<em onclick="$('postmessage_637078').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_637078').className='t_smallfont'">小</em>												发表于 2010-5-25 00:29&nbsp;																					<a href="viewthread.php?tid=47156&amp;page=1&amp;authorid=10698" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_9"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_9"></div><div id="ad_thread4_9"></div>
						
						
																											<div id="postmessage_637078" class="t_msgfont">我的一直是网易的图标！<br />
这个后果严重吗？</div>

							
							
							
							
															<div id="post_rate_div_637078"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo637078_menu" style="display: none;">
										<div class="imicons">
												<a href="http://wpa.qq.com/msgrd?V=1&amp;Uin=168138973&amp;Site=1984bbs.com&amp;Menu=yes" target="_blank"><img src="images/default/qq.gif" alt="QQ" /></a>																							</div>
										<dl></dl>
										<p><a href="space.php?uid=10698" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=47156&amp;repquote=637078&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 637078)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_9"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid638001" summary="pid638001" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6743" target="_blank" id="userinfo638001" class="dropmenu" onmouseover="showMenu(this.id)">鼠标土豆</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">古典自由主义土豆</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6743">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6743&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_10" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum638001" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=47156&page=1#pid638001', '话题链接已经复制到剪贴板')">11楼</strong>
													<em onclick="$('postmessage_638001').className='t_bigfont'">大</em>							<em onclick="$('postmessage_638001').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_638001').className='t_smallfont'">小</em>												发表于 2010-5-25 14:13&nbsp;																					<a href="viewthread.php?tid=47156&amp;page=1&amp;authorid=6743" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_10"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_10"></div><div id="ad_thread4_10"></div>
						
						
																											<div id="postmessage_638001" class="t_msgfont">我现在还是骷髅头。。。。</div>

							
							
							
							
															<div id="post_rate_div_638001"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo638001_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=6743" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=47156&amp;repquote=638001&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 638001)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_10"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid639931" summary="pid639931" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=464" target="_blank" id="userinfo639931" class="dropmenu" onmouseover="showMenu(this.id)">Phillip</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">路边社特邀围观群众</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=464">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=464&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_11" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum639931" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=47156&page=1#pid639931', '话题链接已经复制到剪贴板')">12楼</strong>
													<em onclick="$('postmessage_639931').className='t_bigfont'">大</em>							<em onclick="$('postmessage_639931').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_639931').className='t_smallfont'">小</em>												发表于 2010-5-26 11:24&nbsp;																					<a href="viewthread.php?tid=47156&amp;page=1&amp;authorid=464" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_11"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_11"></div><div id="ad_thread4_11"></div>
													<h2>貌似证书又被劫持了</h2>
						
						
																											<div id="postmessage_639931" class="t_msgfont">这回证书机构是个台湾的组织 . 翻墙上来后就好了</div>

							
							
							
							
															<div id="post_rate_div_639931"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo639931_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=464" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=47156&amp;repquote=639931&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 639931)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_11"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid640063" summary="pid640063" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10135" target="_blank" id="userinfo640063" class="dropmenu" onmouseover="showMenu(this.id)">偶佯疯</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">我是个读书人</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10135">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10135&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_12" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum640063" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=47156&page=1#pid640063', '话题链接已经复制到剪贴板')">13楼</strong>
													<em onclick="$('postmessage_640063').className='t_bigfont'">大</em>							<em onclick="$('postmessage_640063').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_640063').className='t_smallfont'">小</em>												发表于 2010-5-26 12:04&nbsp;																					<a href="viewthread.php?tid=47156&amp;page=1&amp;authorid=10135" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_12"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_12"></div><div id="ad_thread4_12"></div>
						
						
																											<div id="postmessage_640063" class="t_msgfont">怪不得这几天出现了几次证书不安全的警告</div>

							
							
							
							
															<div id="post_rate_div_640063"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo640063_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://izlf.info" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=10135" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=47156&amp;repquote=640063&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 640063)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_12"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid640090" summary="pid640090" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2213" target="_blank" id="userinfo640090" class="dropmenu" onmouseover="showMenu(this.id)">核子力量</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">Twitter.com/hzpower</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2213">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2213&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_13" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum640090" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=47156&page=1#pid640090', '话题链接已经复制到剪贴板')">14楼</strong>
													<em onclick="$('postmessage_640090').className='t_bigfont'">大</em>							<em onclick="$('postmessage_640090').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_640090').className='t_smallfont'">小</em>												发表于 2010-5-26 12:17&nbsp;																					<a href="viewthread.php?tid=47156&amp;page=1&amp;authorid=2213" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_13"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_13"></div><div id="ad_thread4_13"></div>
						
						
																											<div id="postmessage_640090" class="t_msgfont"><a href="http://www.bb-in.com" target="_blank">www.bb-in.com</a> =&gt; 183.182.65.34<br />
本站主数据 &nbsp; &nbsp; &nbsp; &nbsp; 定位&nbsp; &nbsp; &nbsp; &nbsp; 菲律宾<br />
使用者&nbsp; &nbsp; &nbsp; &nbsp; N/A<br />
本站辅数据&nbsp; &nbsp; &nbsp; &nbsp; N/A<br />
参考数据一&nbsp; &nbsp; &nbsp; &nbsp; 亚太地区 <br />
参考数据二&nbsp; &nbsp; &nbsp; &nbsp; 伯利兹城</div>

							
							
							
							
															<div id="post_rate_div_640090"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo640090_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://twitter.com/hzpower" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=2213" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=47156&amp;repquote=640090&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 640090)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_13"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid640264" summary="pid640264" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=3100" target="_blank" id="userinfo640264" class="dropmenu" onmouseover="showMenu(this.id)">金属灰</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">GFW出没注意</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=3100">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=3100&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_14" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum640264" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=47156&page=1#pid640264', '话题链接已经复制到剪贴板')">15楼</strong>
													<em onclick="$('postmessage_640264').className='t_bigfont'">大</em>							<em onclick="$('postmessage_640264').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_640264').className='t_smallfont'">小</em>												发表于 2010-5-26 13:23&nbsp;																					<a href="viewthread.php?tid=47156&amp;page=1&amp;authorid=3100" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_14"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_14"></div><div id="ad_thread4_14"></div>
						
						
																											<div id="postmessage_640264" class="t_msgfont">一上午都是提示这个假证书，刚刚才正常Orz</div>

							
							
							
							
															<div id="post_rate_div_640264"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo640264_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=3100" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=47156&amp;repquote=640264&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 640264)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_14"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid640275" summary="pid640275" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2213" target="_blank" id="userinfo640275" class="dropmenu" onmouseover="showMenu(this.id)">核子力量</a></cite>
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
						<strong title="复制话题链接到剪贴板" id="postnum640275" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=47156&page=1#pid640275', '话题链接已经复制到剪贴板')">16楼</strong>
													<em onclick="$('postmessage_640275').className='t_bigfont'">大</em>							<em onclick="$('postmessage_640275').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_640275').className='t_smallfont'">小</em>												发表于 2010-5-26 13:28&nbsp;																					<a href="viewthread.php?tid=47156&amp;page=1&amp;authorid=2213" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_15"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_15"></div><div id="ad_thread4_15"></div>
													<h2>回复 15楼 金属灰 的话题</h2>
						
						
																											<div id="postmessage_640275" class="t_msgfont">翻墙状态下不会出现</div>

							
							
							
							
															<div id="post_rate_div_640275"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo640275_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://twitter.com/hzpower" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=2213" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=47156&amp;repquote=640275&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 640275)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_15"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid640294" summary="pid640294" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=3100" target="_blank" id="userinfo640294" class="dropmenu" onmouseover="showMenu(this.id)">金属灰</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">GFW出没注意</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=3100">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=3100&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_16" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum640294" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=47156&page=1#pid640294', '话题链接已经复制到剪贴板')">17楼</strong>
													<em onclick="$('postmessage_640294').className='t_bigfont'">大</em>							<em onclick="$('postmessage_640294').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_640294').className='t_smallfont'">小</em>												发表于 2010-5-26 13:34&nbsp;																					<a href="viewthread.php?tid=47156&amp;page=1&amp;authorid=3100" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_16"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_16"></div><div id="ad_thread4_16"></div>
													<h2>回复 16楼 核子力量 的话题</h2>
						
						
																											<div id="postmessage_640294" class="t_msgfont">原来如此<br />
下次再出现（希望不会）我试试。</div>

							
							
							
							
															<div id="post_rate_div_640294"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo640294_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=3100" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=47156&amp;repquote=640294&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 640294)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_16"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid640406" summary="pid640406" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7766" target="_blank" id="userinfo640406" class="dropmenu" onmouseover="showMenu(this.id)">麦圆</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">Twitter @math2gold | 惊诧的火星友邦 |  咪咪是 /math2ogld　</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7766">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7766&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_17" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum640406" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=47156&page=1#pid640406', '话题链接已经复制到剪贴板')">18楼</strong>
													<em onclick="$('postmessage_640406').className='t_bigfont'">大</em>							<em onclick="$('postmessage_640406').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_640406').className='t_smallfont'">小</em>												发表于 2010-5-26 14:10&nbsp;																					<a href="viewthread.php?tid=47156&amp;page=1&amp;authorid=7766" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_17"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_17"></div><div id="ad_thread4_17"></div>
						
						
																											<div id="postmessage_640406" class="t_msgfont">5月21日才申请的证书现在就拿来卡小組通信了。看来大家都应该学学使用嗅探器来分析数据包和证明谁在动手脚。</div>

							
							
							
							
															<div id="post_rate_div_640406"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo640406_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://math2gold.com/" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=7766" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=47156&amp;repquote=640406&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 640406)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_17"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid640560" summary="pid640560" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=4583" target="_blank" id="userinfo640560" class="dropmenu" onmouseover="showMenu(this.id)">乐一乐lyl</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">高中三年，大学四年，七年之痒，现求一女，止痒！</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=4583">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=4583&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_18" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum640560" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=47156&page=1#pid640560', '话题链接已经复制到剪贴板')">19楼</strong>
													<em onclick="$('postmessage_640560').className='t_bigfont'">大</em>							<em onclick="$('postmessage_640560').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_640560').className='t_smallfont'">小</em>												发表于 2010-5-26 15:09&nbsp;																					<a href="viewthread.php?tid=47156&amp;page=1&amp;authorid=4583" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_18"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_18"></div><div id="ad_thread4_18"></div>
						
						
																											<div id="postmessage_640560" class="t_msgfont">我中招了</div>

							
							
							
							
															<div id="post_rate_div_640560"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo640560_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://www.leyle.com" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=4583" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=47156&amp;repquote=640560&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 640560)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_18"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid640976" summary="pid640976" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12463" target="_blank" id="userinfo640976" class="dropmenu" onmouseover="showMenu(this.id)">DaemonEye</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">不河蟹的围观团团员</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12463">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12463&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_19" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum640976" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=47156&page=1#pid640976', '话题链接已经复制到剪贴板')">20楼</strong>
													<em onclick="$('postmessage_640976').className='t_bigfont'">大</em>							<em onclick="$('postmessage_640976').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_640976').className='t_smallfont'">小</em>												发表于 2010-5-26 17:48&nbsp;																					<a href="viewthread.php?tid=47156&amp;page=1&amp;authorid=12463" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_19"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_19"></div><div id="ad_thread4_19"></div>
						
						
																											<div id="postmessage_640976" class="t_msgfont">现在正常的证书貌似悲剧了 我日tmd的谁那么无聊拿假证书恶心人</div>

							
							
							
							
															<div id="post_rate_div_640976"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo640976_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=12463" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=47156&amp;repquote=640976&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 640976)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_19"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid641080" summary="pid641080" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6873" target="_blank" id="userinfo641080" class="dropmenu" onmouseover="showMenu(this.id)">萧易寒</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6873">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6873&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_20" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum641080" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=47156&page=1#pid641080', '话题链接已经复制到剪贴板')">21楼</strong>
													<em onclick="$('postmessage_641080').className='t_bigfont'">大</em>							<em onclick="$('postmessage_641080').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_641080').className='t_smallfont'">小</em>												发表于 2010-5-26 18:45&nbsp;																					<a href="viewthread.php?tid=47156&amp;page=1&amp;authorid=6873" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_20"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_20"></div><div id="ad_thread4_20"></div>
						
						
																											<div id="postmessage_641080" class="t_msgfont">TG在做手脚？干吗不直接墙了？</div>

							
							
							
							
															<div id="post_rate_div_641080"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo641080_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=6873" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=47156&amp;repquote=641080&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 641080)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_20"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid641214" summary="pid641214" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=11492" target="_blank" id="userinfo641214" class="dropmenu" onmouseover="showMenu(this.id)">我朝共产</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">内心抗争的屁民一个——“为什么要给畜牲自由？它们一代代的命运就是套上枷锁，接受鞭挞。” @huicn</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=11492">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=11492&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_21" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum641214" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=47156&page=1#pid641214', '话题链接已经复制到剪贴板')">22楼</strong>
													<em onclick="$('postmessage_641214').className='t_bigfont'">大</em>							<em onclick="$('postmessage_641214').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_641214').className='t_smallfont'">小</em>												发表于 2010-5-26 19:47&nbsp;																					<a href="viewthread.php?tid=47156&amp;page=1&amp;authorid=11492" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_21"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_21"></div><div id="ad_thread4_21"></div>
						
						
																											<div id="postmessage_641214" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>萧易寒</i> 于 2010-5-26 18:45 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=641080&amp;ptid=47156" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
TG在做手脚？干吗不直接墙了？ </blockquote></div>想看看我们在干吗，而且好定位嘛</div>

							
							
							
							
															<div id="post_rate_div_641214"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo641214_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://www.twitter.com/huicn" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=11492" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=47156&amp;repquote=641214&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 641214)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_21"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid641635" summary="pid641635" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=13507" target="_blank" id="userinfo641635" class="dropmenu" onmouseover="showMenu(this.id)">芥末</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">我要学Python</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=13507">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=13507&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_22" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum641635" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=47156&page=1#pid641635', '话题链接已经复制到剪贴板')">23楼</strong>
													<em onclick="$('postmessage_641635').className='t_bigfont'">大</em>							<em onclick="$('postmessage_641635').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_641635').className='t_smallfont'">小</em>												发表于 2010-5-26 23:22&nbsp;																					<a href="viewthread.php?tid=47156&amp;page=1&amp;authorid=13507" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_22"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_22"></div><div id="ad_thread4_22"></div>
						
						
																											<div id="postmessage_641635" class="t_msgfont">表示现在是Go Daddy 验证的 应该没问题吧？</div>

							
							
							
							
															<div id="post_rate_div_641635"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo641635_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=13507" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=47156&amp;repquote=641635&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 641635)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_22"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid642394" summary="pid642394" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=13028" target="_blank" id="userinfo642394" class="dropmenu" onmouseover="showMenu(this.id)">tiangelsp</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=13028">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=13028&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_23" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum642394" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=47156&page=1#pid642394', '话题链接已经复制到剪贴板')">24楼</strong>
													<em onclick="$('postmessage_642394').className='t_bigfont'">大</em>							<em onclick="$('postmessage_642394').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_642394').className='t_smallfont'">小</em>												发表于 2010-5-27 11:58&nbsp;																					<a href="viewthread.php?tid=47156&amp;page=1&amp;authorid=13028" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_23"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_23"></div><div id="ad_thread4_23"></div>
						
						
																											<div id="postmessage_642394" class="t_msgfont">谢谢提醒,得注意了.</div>

							
							
							
							
															<div id="post_rate_div_642394"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo642394_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=13028" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=47156&amp;repquote=642394&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 642394)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_23"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid646123" summary="pid646123" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 <a name="lastpost"></a>					<cite>											<a href="space.php?uid=2973" target="_blank" id="userinfo646123" class="dropmenu" onmouseover="showMenu(this.id)">free1989</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">@photobluer</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2973">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2973&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_24" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum646123" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=47156&page=1#pid646123', '话题链接已经复制到剪贴板')">25楼</strong>
													<em onclick="$('postmessage_646123').className='t_bigfont'">大</em>							<em onclick="$('postmessage_646123').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_646123').className='t_smallfont'">小</em>												发表于 2010-5-29 11:04&nbsp;																					<a href="viewthread.php?tid=47156&amp;page=1&amp;authorid=2973" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_24"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_24"></div><div id="ad_thread4_24"></div>
						
						
																											<div id="postmessage_646123" class="t_msgfont">今天又碰到了。。<br />
<img src="http://img.ly/system/uploads/000/327/472/original_a1.jpg" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></div>

							
							
							
							
															<div id="post_rate_div_646123"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo646123_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=2973" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=47156&amp;repquote=646123&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 646123)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_24"></div>				</div>
			</td>
		</tr>
		</table>
		</div>
</form>





<div class="pages_btns">
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=47156&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=47156&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
				<span class="postbtn" id="newspecialtmp" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=47156&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

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

	<form method="post" id="postform" action="post.php?action=reply&amp;fid=26&amp;tid=47156&amp;extra=&amp;replysubmit=yes" onSubmit="return validate(this)">
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
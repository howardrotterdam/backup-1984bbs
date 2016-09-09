<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<title>@关于翻墙软件安全性的讨论 - 国家局域网研究所 -  1984bbs.com </title>
<meta name="keywords" content="" />
<meta name="MSSmartTagsPreventParsing" content="True" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<link rel="archives" title="1984bbs.com" href="https://1984bbs.com/archiver/" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_viewthread.css" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_common.css" />
<script type="text/javascript">
	var discuz_uid = 13019;var IMGDIR = 'images/default';var attackevasive = '0';var gid = 0;var STYLEID = '1';
	gid = parseInt('3');var fid = parseInt('26');var tid = parseInt('36856');
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
			<p><a href="index.php" id="forumlist" onmouseover="showMenu(this.id)" class="dropmenu">1984bbs.com</a> &raquo; <a href="forumdisplay.php?fid=26">国家局域网研究所</a> &raquo; @关于翻墙软件安全性的讨论</p>
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
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=36856&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=36856&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
				<span class="postbtn" id="newspecial" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=36856&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

	<ul class="popupmenu_popup newspecialmenu" id="newspecial_menu" style="display: none">
		<li><a href="post.php?action=newthread&amp;fid=26&amp;extra=">发新话题</a></li>
		<li class="poll"><a href="post.php?action=newthread&amp;fid=26&amp;extra=&amp;special=1">发布投票</a></li>													</ul>

<form method="post" name="modactions">
	<input type="hidden" name="formhash" value="823c9fa2" />
	<div class="mainbox viewthread">
		<span class="headactions">
					<a href="my.php?item=favorites&amp;tid=36856" id="ajax_favorite" onclick="ajaxmenu(event, this.id, 3000, 0)">收藏</a>
			<a href="my.php?item=subscriptions&amp;subadd=36856" id="ajax_subscription" onclick="ajaxmenu(event, this.id, 3000, null, 0)">订阅</a>
			<a href="misc.php?action=emailfriend&amp;tid=36856" id="emailfriend" onclick="ajaxmenu(event, this.id, 9000000, null, 0)">推荐</a>
				<a href="viewthread.php?action=printable&amp;tid=36856" target="_blank" class="notabs">打印</a>
				</span>
		<h1>@关于翻墙软件安全性的讨论		</h1>
							<table id="pid466106" summary="pid466106" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12212" target="_blank" id="userinfo466106" class="dropmenu" onmouseover="showMenu(this.id)">yuechi</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12212">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12212&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_0" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum466106" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=36856&page=1#pid466106', '话题链接已经复制到剪贴板')">1楼</strong>
													<em onclick="$('postmessage_466106').className='t_bigfont'">大</em>							<em onclick="$('postmessage_466106').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_466106').className='t_smallfont'">小</em>												发表于 2010-2-4 12:20&nbsp;																					<a href="viewthread.php?tid=36856&amp;page=1&amp;authorid=12212" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_0"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_0"></div><div id="ad_thread4_0"></div>
													<h2>@关于翻墙软件安全性的讨论</h2>
						
						
																											<div id="postmessage_466106" class="t_msgfont">自由门，无界有这些软件翻墙很简单，但是总觉得GFW这么大一个工程就这样被藐视了，是不是太过于让人怀疑。<br />
&nbsp;&nbsp;自由门，无界等工具用来翻墙浏览安全性如何？</div>

							
							
							
							
															<div id="post_rate_div_466106"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo466106_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=12212" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=36856&amp;repquote=466106&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 466106)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_0"></div>				</div>
			</td>
		</tr>
		</table>
		</div><div class="ad_column" id="ad_interthread"><a href="/viewthread.php?tid=54699" target="_blank" style="color:red;">1984bbs是一个非营利项目，它需要您的捐助！</font></a>		</div>
	<div class="mainbox viewthread">
			<table id="pid466190" summary="pid466190" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=464" target="_blank" id="userinfo466190" class="dropmenu" onmouseover="showMenu(this.id)">Phillip</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">路边社特邀围观群众</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=464">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=464&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_1" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum466190" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=36856&page=1#pid466190', '话题链接已经复制到剪贴板')">2楼</strong>
													<em onclick="$('postmessage_466190').className='t_bigfont'">大</em>							<em onclick="$('postmessage_466190').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_466190').className='t_smallfont'">小</em>												发表于 2010-2-4 12:48&nbsp;																					<a href="viewthread.php?tid=36856&amp;page=1&amp;authorid=464" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_1"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_1"></div><div id="ad_thread4_1"></div>
						
						
																											<div id="postmessage_466190" class="t_msgfont">就看这些软件是否会记录并泄露使用者的ip地址了</div>

							
							
							
							
															<div id="post_rate_div_466190"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo466190_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=464" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=36856&amp;repquote=466190&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 466190)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_1"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid466527" summary="pid466527" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=4668" target="_blank" id="userinfo466527" class="dropmenu" onmouseover="showMenu(this.id)">马尼超</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=4668">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=4668&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_2" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum466527" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=36856&page=1#pid466527', '话题链接已经复制到剪贴板')">3楼</strong>
													<em onclick="$('postmessage_466527').className='t_bigfont'">大</em>							<em onclick="$('postmessage_466527').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_466527').className='t_smallfont'">小</em>												发表于 2010-2-4 16:37&nbsp;																					<a href="viewthread.php?tid=36856&amp;page=1&amp;authorid=4668" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_2"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_2"></div><div id="ad_thread4_2"></div>
						
						
																											<div id="postmessage_466527" class="t_msgfont">自由门和无界应该还是比较安全的，毕竟是法轮功出品的嘛</div>

							
							
							
							
															<div id="post_rate_div_466527"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo466527_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=4668" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=36856&amp;repquote=466527&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 466527)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_2"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid467043" summary="pid467043" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12235" target="_blank" id="userinfo467043" class="dropmenu" onmouseover="showMenu(this.id)">maxW</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12235">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12235&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_3" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum467043" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=36856&page=1#pid467043', '话题链接已经复制到剪贴板')">4楼</strong>
													<em onclick="$('postmessage_467043').className='t_bigfont'">大</em>							<em onclick="$('postmessage_467043').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_467043').className='t_smallfont'">小</em>												发表于 2010-2-4 22:02&nbsp;																					<a href="viewthread.php?tid=36856&amp;page=1&amp;authorid=12235" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_3"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_3"></div><div id="ad_thread4_3"></div>
						
						
																											<div id="postmessage_467043" class="t_msgfont">能连上服务器的时候应该是安全的，但是连不上的时候我觉得就有点危险了。<br />
前阵子看到动态网上还有揣测puff后台的文章，让人半信半疑，感觉如果tg真要钓鱼执法，还真是暗贱难防。</div>

							
							
							
							
															<div id="post_rate_div_467043"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo467043_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=12235" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=36856&amp;repquote=467043&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 467043)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_3"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid467175" summary="pid467175" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10846" target="_blank" id="userinfo467175" class="dropmenu" onmouseover="showMenu(this.id)">andyflhs</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10846">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10846&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_4" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum467175" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=36856&page=1#pid467175', '话题链接已经复制到剪贴板')">5楼</strong>
													<em onclick="$('postmessage_467175').className='t_bigfont'">大</em>							<em onclick="$('postmessage_467175').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_467175').className='t_smallfont'">小</em>												发表于 2010-2-4 23:23&nbsp;																					<a href="viewthread.php?tid=36856&amp;page=1&amp;authorid=10846" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_4"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_4"></div><div id="ad_thread4_4"></div>
						
						
																											<div id="postmessage_467175" class="t_msgfont">谁知道除了自由门和无界，还有什么是轮子出品的吗？或者和轮子有关的？想尽量避开这些，用别的。</div>

							
							
							
							
															<div id="post_rate_div_467175"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo467175_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=10846" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=36856&amp;repquote=467175&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 467175)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_4"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid467205" summary="pid467205" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6012" target="_blank" id="userinfo467205" class="dropmenu" onmouseover="showMenu(this.id)">agw</a></cite>
						<p>重复贴合并器，纯水贴删除机。</p>												<p><em></em></p>
						<p></p>
						<p class="customstatus">豆瓣ID：红尘梦羽    推特www.twitter.com/hcmy</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6012">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6012&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_5" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum467205" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=36856&page=1#pid467205', '话题链接已经复制到剪贴板')">6楼</strong>
													<em onclick="$('postmessage_467205').className='t_bigfont'">大</em>							<em onclick="$('postmessage_467205').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_467205').className='t_smallfont'">小</em>												发表于 2010-2-4 23:43&nbsp;																					<a href="viewthread.php?tid=36856&amp;page=1&amp;authorid=6012" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_5"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_5"></div><div id="ad_thread4_5"></div>
						
						
																											<div id="postmessage_467205" class="t_msgfont">还有火凤凰，世界通，莲花代理，逍遥游，花园什么的，都是轮子的。</div>

							
							
							
							
															<div id="post_rate_div_467205"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo467205_menu" style="display: none;">
										<div class="imicons">
												<a href="http://wpa.qq.com/msgrd?V=1&amp;Uin=106181327&amp;Site=1984bbs.com&amp;Menu=yes" target="_blank"><img src="images/default/qq.gif" alt="QQ" /></a>																							</div>
										<dl></dl>
											<p><a href="http://home.douban.us/10071" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=6012" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=36856&amp;repquote=467205&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 467205)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_5"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid467316" summary="pid467316" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=464" target="_blank" id="userinfo467316" class="dropmenu" onmouseover="showMenu(this.id)">Phillip</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">路边社特邀围观群众</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=464">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=464&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_6" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum467316" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=36856&page=1#pid467316', '话题链接已经复制到剪贴板')">7楼</strong>
													<em onclick="$('postmessage_467316').className='t_bigfont'">大</em>							<em onclick="$('postmessage_467316').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_467316').className='t_smallfont'">小</em>												发表于 2010-2-5 00:29&nbsp;																					<a href="viewthread.php?tid=36856&amp;page=1&amp;authorid=464" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_6"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_6"></div><div id="ad_thread4_6"></div>
						
						
																											<div id="postmessage_467316" class="t_msgfont">你看起得名字是中文的, 就很可疑</div>

							
							
							
							
															<div id="post_rate_div_467316"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo467316_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=464" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=36856&amp;repquote=467316&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 467316)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_6"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid467375" summary="pid467375" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12238" target="_blank" id="userinfo467375" class="dropmenu" onmouseover="showMenu(this.id)">萧振衣</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">振衣千仞岗，濯足万里流</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12238">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12238&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_7" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum467375" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=36856&page=1#pid467375', '话题链接已经复制到剪贴板')">8楼</strong>
													<em onclick="$('postmessage_467375').className='t_bigfont'">大</em>							<em onclick="$('postmessage_467375').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_467375').className='t_smallfont'">小</em>												发表于 2010-2-5 01:30&nbsp;																					<a href="viewthread.php?tid=36856&amp;page=1&amp;authorid=12238" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_7"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_7"></div><div id="ad_thread4_7"></div>
						
						
																											<div id="postmessage_467375" class="t_msgfont">俺用PUFF的，这也有问题？</div>

							
							
							
							
															<div id="post_rate_div_467375"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo467375_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=12238" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=36856&amp;repquote=467375&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 467375)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_7"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid467393" summary="pid467393" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=11492" target="_blank" id="userinfo467393" class="dropmenu" onmouseover="showMenu(this.id)">我朝共产</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">内心抗争的屁民一个——“为什么要给畜牲自由？它们一代代的命运就是套上枷锁，接受鞭挞。” @huicn</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=11492">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=11492&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_8" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum467393" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=36856&page=1#pid467393', '话题链接已经复制到剪贴板')">9楼</strong>
													<em onclick="$('postmessage_467393').className='t_bigfont'">大</em>							<em onclick="$('postmessage_467393').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_467393').className='t_smallfont'">小</em>												发表于 2010-2-5 02:46&nbsp;																					<a href="viewthread.php?tid=36856&amp;page=1&amp;authorid=11492" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_8"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_8"></div><div id="ad_thread4_8"></div>
													<h2>回复 1楼 yuechi 的话题</h2>
						
						
																											<div id="postmessage_467393" class="t_msgfont">很有必要找高手评估，鬼才知道我国会不会效仿东德秘密警察那样</div>

							
							
							
							
															<div id="post_rate_div_467393"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo467393_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://www.twitter.com/huicn" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=11492" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=36856&amp;repquote=467393&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 467393)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_8"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid467407" summary="pid467407" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2441" target="_blank" id="userinfo467407" class="dropmenu" onmouseover="showMenu(this.id)">高渐离</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">组内伍毛全家死光</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2441">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2441&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_9" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum467407" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=36856&page=1#pid467407', '话题链接已经复制到剪贴板')">10楼</strong>
													<em onclick="$('postmessage_467407').className='t_bigfont'">大</em>							<em onclick="$('postmessage_467407').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_467407').className='t_smallfont'">小</em>												发表于 2010-2-5 03:28&nbsp;																					<a href="viewthread.php?tid=36856&amp;page=1&amp;authorid=2441" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_9"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_9"></div><div id="ad_thread4_9"></div>
						
						
																											<div id="postmessage_467407" class="t_msgfont">PUFF到底有没有共匪背景？</div>

							
							
							
							
															<div id="post_rate_div_467407"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo467407_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=2441" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=36856&amp;repquote=467407&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 467407)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_9"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid468759" summary="pid468759" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12212" target="_blank" id="userinfo468759" class="dropmenu" onmouseover="showMenu(this.id)">yuechi</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12212">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12212&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_10" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum468759" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=36856&page=1#pid468759', '话题链接已经复制到剪贴板')">11楼</strong>
													<em onclick="$('postmessage_468759').className='t_bigfont'">大</em>							<em onclick="$('postmessage_468759').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_468759').className='t_smallfont'">小</em>												发表于 2010-2-5 23:02&nbsp;																					<a href="viewthread.php?tid=36856&amp;page=1&amp;authorid=12212" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_10"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_10"></div><div id="ad_thread4_10"></div>
						
						
																											<div id="postmessage_468759" class="t_msgfont">因为突然觉得天朝这长城就让咱们这样给翻了，是不是有什么不妥当的。</div>

							
							
							
							
															<div id="post_rate_div_468759"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo468759_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=12212" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=36856&amp;repquote=468759&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 468759)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_10"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid468760" summary="pid468760" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12212" target="_blank" id="userinfo468760" class="dropmenu" onmouseover="showMenu(this.id)">yuechi</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12212">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12212&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_11" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum468760" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=36856&page=1#pid468760', '话题链接已经复制到剪贴板')">12楼</strong>
													<em onclick="$('postmessage_468760').className='t_bigfont'">大</em>							<em onclick="$('postmessage_468760').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_468760').className='t_smallfont'">小</em>												发表于 2010-2-5 23:03&nbsp;																					<a href="viewthread.php?tid=36856&amp;page=1&amp;authorid=12212" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_11"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_11"></div><div id="ad_thread4_11"></div>
						
						
																											<div id="postmessage_468760" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>我朝共产</i> 于 2010-2-5 02:46 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=467393&amp;ptid=36856" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
很有必要找高手评估，鬼才知道我国会不会效仿东德秘密警察那样 </blockquote></div>就是很少看见对这些软件分析的文章。</div>

							
							
							
							
															<div id="post_rate_div_468760"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo468760_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=12212" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=36856&amp;repquote=468760&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 468760)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_11"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid468969" summary="pid468969" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8115" target="_blank" id="userinfo468969" class="dropmenu" onmouseover="showMenu(this.id)">OpenBL</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8115">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8115&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_12" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum468969" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=36856&page=1#pid468969', '话题链接已经复制到剪贴板')">13楼</strong>
													<em onclick="$('postmessage_468969').className='t_bigfont'">大</em>							<em onclick="$('postmessage_468969').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_468969').className='t_smallfont'">小</em>												发表于 2010-2-6 02:39&nbsp;																					<a href="viewthread.php?tid=36856&amp;page=1&amp;authorid=8115" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_12"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_12"></div><div id="ad_thread4_12"></div>
													<h2>回复 10楼 高渐离 的话题</h2>
						
						
																											<div id="postmessage_468969" class="t_msgfont">puff貌似是cmule开发的，一个墙外电驴论坛</div>

							
							
							
							
															<div id="post_rate_div_468969"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo468969_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=8115" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=36856&amp;repquote=468969&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 468969)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_12"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid468970" summary="pid468970" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8115" target="_blank" id="userinfo468970" class="dropmenu" onmouseover="showMenu(this.id)">OpenBL</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8115">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8115&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_13" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum468970" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=36856&page=1#pid468970', '话题链接已经复制到剪贴板')">14楼</strong>
													<em onclick="$('postmessage_468970').className='t_bigfont'">大</em>							<em onclick="$('postmessage_468970').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_468970').className='t_smallfont'">小</em>												发表于 2010-2-6 02:44&nbsp;																					<a href="viewthread.php?tid=36856&amp;page=1&amp;authorid=8115" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_13"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_13"></div><div id="ad_thread4_13"></div>
													<h2>回复 3楼 马尼超 的话题</h2>
						
						
																											<div id="postmessage_468970" class="t_msgfont">未必：即使轮子不主动出卖你，但：<br />
Twittter上有人说过自由门上twittter，打开主页进去发现是别人的页面。<br />
自由门技术上不像SSH，VPN那样简单，又不像Tor那样透明。<br />
漏洞我估计不少，上交有人毕业设计就是逆向工程自由门<br />
轮子内部可能有内奸<br />
综上，SSH，VPN比较安全</div>

							
							
							
							
															<div id="post_rate_div_468970"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo468970_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=8115" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=36856&amp;repquote=468970&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 468970)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_13"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid468971" summary="pid468971" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8115" target="_blank" id="userinfo468971" class="dropmenu" onmouseover="showMenu(this.id)">OpenBL</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8115">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8115&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_14" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum468971" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=36856&page=1#pid468971', '话题链接已经复制到剪贴板')">15楼</strong>
													<em onclick="$('postmessage_468971').className='t_bigfont'">大</em>							<em onclick="$('postmessage_468971').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_468971').className='t_smallfont'">小</em>												发表于 2010-2-6 02:45&nbsp;																					<a href="viewthread.php?tid=36856&amp;page=1&amp;authorid=8115" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_14"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_14"></div><div id="ad_thread4_14"></div>
													<h2>回复 2楼 Phillip 的话题</h2>
						
						
																											<div id="postmessage_468971" class="t_msgfont">这是肯定会泄漏的，除了Tor</div>

							
							
							
							
															<div id="post_rate_div_468971"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo468971_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=8115" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=36856&amp;repquote=468971&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 468971)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_14"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid468986" summary="pid468986" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1993" target="_blank" id="userinfo468986" class="dropmenu" onmouseover="showMenu(this.id)">鬼鬼</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">宽容、理性、建设</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1993">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1993&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_15" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum468986" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=36856&page=1#pid468986', '话题链接已经复制到剪贴板')">16楼</strong>
													<em onclick="$('postmessage_468986').className='t_bigfont'">大</em>							<em onclick="$('postmessage_468986').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_468986').className='t_smallfont'">小</em>												发表于 2010-2-6 03:21&nbsp;																					<a href="viewthread.php?tid=36856&amp;page=1&amp;authorid=1993" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_15"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_15"></div><div id="ad_thread4_15"></div>
						
						
																											<div id="postmessage_468986" class="t_msgfont">呵呵，只有有物理联网，就能翻墙。功夫网存在的意义不是为了屏蔽所有人访问敏感站点，而是让大多数人不知道有敏感站点的存在罢了。GFW，让懂翻墙的人都会习惯于它的存在而不去翻墙。<br />
<br />
事实上，无界、自由门之类软件的存在不仅帮助了1984里的这样的同志、翻墙看h网的同志，还帮助了广大五毛（网评员、信息员）。</div>

							
							
							
							
															<div id="post_rate_div_468986"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo468986_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1993" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=36856&amp;repquote=468986&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 468986)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_15"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid469203" summary="pid469203" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12212" target="_blank" id="userinfo469203" class="dropmenu" onmouseover="showMenu(this.id)">yuechi</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12212">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12212&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_16" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum469203" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=36856&page=1#pid469203', '话题链接已经复制到剪贴板')">17楼</strong>
													<em onclick="$('postmessage_469203').className='t_bigfont'">大</em>							<em onclick="$('postmessage_469203').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_469203').className='t_smallfont'">小</em>												发表于 2010-2-6 13:09&nbsp;																					<a href="viewthread.php?tid=36856&amp;page=1&amp;authorid=12212" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_16"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_16"></div><div id="ad_thread4_16"></div>
						
						
																											<div id="postmessage_469203" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>OpenBL</i> 于 2010-2-6 02:44 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=468970&amp;ptid=36856" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
未必：即使轮子不主动出卖你，但：<br />
Twittter上有人说过自由门上twittter，打开主页进去发现是别人的页面。<br />
自由门技术上不像SSH，VPN那样简单，又不像Tor那样透明。<br />
漏洞我估计不少，上交有人毕业设计就是逆向工程 ... </blockquote></div>有理<br />
轮子行为有些过激。自由门一上就是十分片面的强制消息。<br />
确诊为宣传工具。</div>

							
							
							
							
															<div id="post_rate_div_469203"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo469203_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=12212" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=36856&amp;repquote=469203&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 469203)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_16"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid471236" summary="pid471236" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=3308" target="_blank" id="userinfo471236" class="dropmenu" onmouseover="showMenu(this.id)">天衢居士</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">一小撮各種不明真相</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=3308">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=3308&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_17" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum471236" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=36856&page=1#pid471236', '话题链接已经复制到剪贴板')">18楼</strong>
													<em onclick="$('postmessage_471236').className='t_bigfont'">大</em>							<em onclick="$('postmessage_471236').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_471236').className='t_smallfont'">小</em>												发表于 2010-2-7 21:04&nbsp;																					<a href="viewthread.php?tid=36856&amp;page=1&amp;authorid=3308" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_17"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_17"></div><div id="ad_thread4_17"></div>
						
						
																											<div id="postmessage_471236" class="t_msgfont">据说是不安全的 但是还在用。。。。。</div>

							
							
							
							
															<div id="post_rate_div_471236"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo471236_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=3308" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=36856&amp;repquote=471236&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 471236)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_17"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid471264" summary="pid471264" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12174" target="_blank" id="userinfo471264" class="dropmenu" onmouseover="showMenu(this.id)">greenbyte</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12174">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12174&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_18" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum471264" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=36856&page=1#pid471264', '话题链接已经复制到剪贴板')">19楼</strong>
													<em onclick="$('postmessage_471264').className='t_bigfont'">大</em>							<em onclick="$('postmessage_471264').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_471264').className='t_smallfont'">小</em>												发表于 2010-2-7 21:27&nbsp;																					<a href="viewthread.php?tid=36856&amp;page=1&amp;authorid=12174" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_18"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_18"></div><div id="ad_thread4_18"></div>
						
						
																											<div id="postmessage_471264" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>高渐离</i> 于 2010-2-5 03:28 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=467407&amp;ptid=36856" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
PUFF到底有没有共匪背景？ </blockquote></div>我认为puff还是清白的吧，我在twitter上fo他了，应该是个在美国的华裔，还在卖商业版呢。那哥们挺有意思。</div>

							
							
							
							
															<div id="post_rate_div_471264"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo471264_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=12174" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=36856&amp;repquote=471264&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 471264)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_18"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid471269" summary="pid471269" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1944" target="_blank" id="userinfo471269" class="dropmenu" onmouseover="showMenu(this.id)">hargreaves</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1944">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1944&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_19" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum471269" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=36856&page=1#pid471269', '话题链接已经复制到剪贴板')">20楼</strong>
													<em onclick="$('postmessage_471269').className='t_bigfont'">大</em>							<em onclick="$('postmessage_471269').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_471269').className='t_smallfont'">小</em>												发表于 2010-2-7 21:37&nbsp;																					<a href="viewthread.php?tid=36856&amp;page=1&amp;authorid=1944" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_19"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_19"></div><div id="ad_thread4_19"></div>
						
						
																											<div id="postmessage_471269" class="t_msgfont">顶多就是让你访问不了，不会监控你什么东西的</div>

							
							
							
							
															<div id="post_rate_div_471269"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo471269_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1944" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=36856&amp;repquote=471269&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 471269)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_19"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid472812" summary="pid472812" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12101" target="_blank" id="userinfo472812" class="dropmenu" onmouseover="showMenu(this.id)">devymex</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">Devymex真身，Twitter: @devymex</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12101">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12101&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_20" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum472812" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=36856&page=1#pid472812', '话题链接已经复制到剪贴板')">21楼</strong>
													<em onclick="$('postmessage_472812').className='t_bigfont'">大</em>							<em onclick="$('postmessage_472812').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_472812').className='t_smallfont'">小</em>												发表于 2010-2-8 18:43&nbsp;																					<a href="viewthread.php?tid=36856&amp;page=1&amp;authorid=12101" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_20"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_20"></div><div id="ad_thread4_20"></div>
						
						
																											<div id="postmessage_472812" class="t_msgfont">美国已经立法帮助我们翻墙了，等等吧，会有好消息的。</div>

							
							
							
							
															<div id="post_rate_div_472812"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo472812_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=12101" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=36856&amp;repquote=472812&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 472812)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_20"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid473480" summary="pid473480" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=9858" target="_blank" id="userinfo473480" class="dropmenu" onmouseover="showMenu(this.id)">ciscoxp</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=9858">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=9858&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_21" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum473480" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=36856&page=1#pid473480', '话题链接已经复制到剪贴板')">22楼</strong>
													<em onclick="$('postmessage_473480').className='t_bigfont'">大</em>							<em onclick="$('postmessage_473480').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_473480').className='t_smallfont'">小</em>												发表于 2010-2-9 08:33&nbsp;																					<a href="viewthread.php?tid=36856&amp;page=1&amp;authorid=9858" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_21"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_21"></div><div id="ad_thread4_21"></div>
						
						
																											<div id="postmessage_473480" class="t_msgfont">目前来讲还是TOR、SSH、VPN比较安全</div>

							
							
							
							
															<div id="post_rate_div_473480"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo473480_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=9858" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=36856&amp;repquote=473480&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 473480)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_21"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid473659" summary="pid473659" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=11089" target="_blank" id="userinfo473659" class="dropmenu" onmouseover="showMenu(this.id)">l七月</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=11089">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=11089&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_22" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum473659" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=36856&page=1#pid473659', '话题链接已经复制到剪贴板')">23楼</strong>
													<em onclick="$('postmessage_473659').className='t_bigfont'">大</em>							<em onclick="$('postmessage_473659').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_473659').className='t_smallfont'">小</em>												发表于 2010-2-9 11:23&nbsp;																					<a href="viewthread.php?tid=36856&amp;page=1&amp;authorid=11089" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_22"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_22"></div><div id="ad_thread4_22"></div>
						
						
																											<div id="postmessage_473659" class="t_msgfont">Tor那些还不会用，目前只会用自由门无界来翻。</div>

							
							
							
							
															<div id="post_rate_div_473659"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo473659_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=11089" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=36856&amp;repquote=473659&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 473659)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_22"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid476540" summary="pid476540" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12295" target="_blank" id="userinfo476540" class="dropmenu" onmouseover="showMenu(this.id)">aesbovis</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">中共国十大特征：1、暴力拆迁的依法治国2、一党专政的民主政治3、以言治罪的思想解放4、国家调控的市场经济5、央企垄断的公平竞争6、官商一家的社会公正7、军费激增的和平崛起8、心虚维稳的刚性政权9、黑打红唱的和谐社会10、资源耗 ...</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12295">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12295&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_23" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum476540" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=36856&page=1#pid476540', '话题链接已经复制到剪贴板')">24楼</strong>
													<em onclick="$('postmessage_476540').className='t_bigfont'">大</em>							<em onclick="$('postmessage_476540').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_476540').className='t_smallfont'">小</em>												发表于 2010-2-11 11:15&nbsp;																					<a href="viewthread.php?tid=36856&amp;page=1&amp;authorid=12295" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_23"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_23"></div><div id="ad_thread4_23"></div>
						
						
																											<div id="postmessage_476540" class="t_msgfont">以前用过一段时间自由门,我也发现了凡是要登录的都会先登录到别人的账号上,而且不喜欢轮子的东西,和共匪一个鸟样<br />
<br />
现在用SSH,不过我美国的一个搞网络的教授朋友和我说过,就算用SSH,IP还是可见的.因为前些天我说要做网瘾战争的国外推广,他一直劝我不要,因为我在国内,太危险了.所以我现在也是翻译到一半停下来.<br />
<br />
VPN不清楚会不会安全一点,没研究过.</div>

							
							
							
							
															<div id="post_rate_div_476540"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo476540_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://biaes.com" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=12295" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=36856&amp;repquote=476540&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 476540)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_23"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid481106" summary="pid481106" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8580" target="_blank" id="userinfo481106" class="dropmenu" onmouseover="showMenu(this.id)">fuckcpc</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8580">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8580&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_24" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum481106" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=36856&page=1#pid481106', '话题链接已经复制到剪贴板')">25楼</strong>
													<em onclick="$('postmessage_481106').className='t_bigfont'">大</em>							<em onclick="$('postmessage_481106').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_481106').className='t_smallfont'">小</em>												发表于 2010-2-15 19:14&nbsp;																					<a href="viewthread.php?tid=36856&amp;page=1&amp;authorid=8580" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_24"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_24"></div><div id="ad_thread4_24"></div>
						
						
																											<div id="postmessage_481106" class="t_msgfont">Puff我不敢再用!<br />
我敢肯定它是大陆人弄的.到底是大陆谁,就不清楚了.为了安全,我还是尽可能避免大陆人弄的东西.</div>

							
							
							
							
															<div id="post_rate_div_481106"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo481106_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://twitter.com/fuckCPC" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=8580" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=36856&amp;repquote=481106&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 481106)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_24"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid497223" summary="pid497223" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 <a name="lastpost"></a>					<cite>											<a href="space.php?uid=12212" target="_blank" id="userinfo497223" class="dropmenu" onmouseover="showMenu(this.id)">yuechi</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12212">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12212&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_25" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum497223" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=36856&page=1#pid497223', '话题链接已经复制到剪贴板')">26楼</strong>
													<em onclick="$('postmessage_497223').className='t_bigfont'">大</em>							<em onclick="$('postmessage_497223').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_497223').className='t_smallfont'">小</em>												发表于 2010-3-1 11:35&nbsp;																					<a href="viewthread.php?tid=36856&amp;page=1&amp;authorid=12212" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_25"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_25"></div><div id="ad_thread4_25"></div>
						
						
																											<div id="postmessage_497223" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>aesbovis</i> 于 2010-2-11 11:15 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=476540&amp;ptid=36856" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
以前用过一段时间自由门,我也发现了凡是要登录的都会先登录到别人的账号上,而且不喜欢轮子的东西,和共匪一个鸟样<br />
<br />
现在用SSH,不过我美国的一个搞网络的教授朋友和我说过,就算用SSH,IP还是可见的.因为前些天我说要做 ... </blockquote></div>也许SSH是目前较好的了</div>

							
							
							
							
															<div id="post_rate_div_497223"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo497223_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=12212" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=36856&amp;repquote=497223&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 497223)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_25"></div>				</div>
			</td>
		</tr>
		</table>
		</div>
</form>





<div class="pages_btns">
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=36856&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=36856&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
				<span class="postbtn" id="newspecialtmp" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=36856&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

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

	<form method="post" id="postform" action="post.php?action=reply&amp;fid=26&amp;tid=36856&amp;extra=&amp;replysubmit=yes" onSubmit="return validate(this)">
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
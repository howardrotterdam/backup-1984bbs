<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<title>1984bbs遭GFW IP屏蔽与DNS污染 - 自由新闻社 -  1984bbs.com </title>
<meta name="keywords" content="" />
<meta name="MSSmartTagsPreventParsing" content="True" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<link rel="archives" title="1984bbs.com" href="https://1984bbs.com/archiver/" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_viewthread.css" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_common.css" />
<script type="text/javascript">
	var discuz_uid = 14169;var IMGDIR = 'images/default';var attackevasive = '0';var gid = 0;var STYLEID = '1';
	gid = parseInt('3');var fid = parseInt('2');var tid = parseInt('55280');
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
							<cite><a class="dropmenu" id="viewpro">wonderful</a></cite>
				<a href="logging.php?action=logout&amp;formhash=6b1c51a1">退出</a>
						</span>
					<ul>
			<li><a href="my.php?item=threads">话题</a></li>
			<li><a href="my.php?item=polls&amp;type=poll">投票</a></li>
			<li><a href="my.php?item=posts">回复</a></li>
			<li><a href="my.php?item=favorites&amp;type=thread">收藏</a></li>
			<li><a href="pm.php" id="pmnotice" onclick="pmwin('open')"><font style="color:#FF0000">您有新短消息</font></a></li>
									<li><a href="search.php?srchfid=2">搜索</a></li>									
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
			<p><a href="index.php" id="forumlist" onmouseover="showMenu(this.id)" class="dropmenu">1984bbs.com</a> &raquo; <a href="forumdisplay.php?fid=2">自由新闻社</a> &raquo; 1984bbs遭GFW IP屏蔽与DNS污染</p>
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
	<div class="threadflow"><a href="redirect.php?fid=2&amp;tid=55280&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=2&amp;tid=55280&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
	<div class="pages"><em>&nbsp;216&nbsp;</em><strong>1</strong><a href="viewthread.php?tid=55280&amp;extra=&amp;page=2">2</a><a href="viewthread.php?tid=55280&amp;extra=&amp;page=3">3</a><a href="viewthread.php?tid=55280&amp;extra=&amp;page=4">4</a><a href="viewthread.php?tid=55280&amp;extra=&amp;page=5">5</a><a href="viewthread.php?tid=55280&amp;extra=&amp;page=2" class="next">&rsaquo;&rsaquo;</a></div>		<span class="replybtn"><a href="post.php?action=reply&amp;fid=2&amp;tid=55280&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>


<form method="post" name="modactions">
	<input type="hidden" name="formhash" value="6b1c51a1" />
	<div class="mainbox viewthread">
		<span class="headactions">
					<a href="my.php?item=favorites&amp;tid=55280" id="ajax_favorite" onclick="ajaxmenu(event, this.id, 3000, 0)">收藏</a>
			<a href="my.php?item=subscriptions&amp;subadd=55280" id="ajax_subscription" onclick="ajaxmenu(event, this.id, 3000, null, 0)">订阅</a>
			<a href="misc.php?action=emailfriend&amp;tid=55280" id="emailfriend" onclick="ajaxmenu(event, this.id, 9000000, null, 0)">推荐</a>
				<a href="viewthread.php?action=printable&amp;tid=55280" target="_blank" class="notabs">打印</a>
				</span>
		<h1>1984bbs遭GFW IP屏蔽与DNS污染		</h1>
				<ins>
						<a href="misc.php?action=viewthreadmod&amp;tid=55280" title="主题操作记录" target="_blank">本主题由 张书记 于 2010-8-19 18:43 解除高亮</a>								</ins>
							<table id="pid780150" summary="pid780150" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1960" target="_blank" id="userinfo780150" class="dropmenu" onmouseover="showMenu(this.id)">库存袈裟</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">@bruceku 想象力比知识更重要。</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1960">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1960&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_0" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum780150" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=55280&page=1#pid780150', '话题链接已经复制到剪贴板')">1楼</strong>
													<em onclick="$('postmessage_780150').className='t_bigfont'">大</em>							<em onclick="$('postmessage_780150').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_780150').className='t_smallfont'">小</em>												发表于 2010-8-12 16:24&nbsp;																					<a href="viewthread.php?tid=55280&amp;page=1&amp;authorid=1960" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_0"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_0"></div><div id="ad_thread4_0"></div>
													<h2>1984bbs遭GFW IP屏蔽与DNS污染</h2>
						
						
																											<div id="postmessage_780150" class="t_msgfont">2010年8月12日下午3时（UTC+8），1984BBS在遭受10多天猛烈攻击后，被GFW IP封锁，经多方验证后确认。此次是自2008年8月建组以来第四次遭遇GFW封锁。<br />
技术组启用备用IP，现已经恢复访问；预料屏蔽不会就此结束，请诸位做好翻墙准备。<br />
<br />
<br />
管理组<br />
<br />
<br />
<br />
<strong>2010年8月16日更新：</strong><br />
<br />
未加密访问<a href="http://1984bbs.com" target="_blank">http://1984bbs.com</a> 已遭GFW屏蔽，请使用<a href="https://1984bbs.com" target="_blank">https://1984bbs.com</a> 访问本站。</div>

							
							
							
							
															<div id="post_rate_div_780150"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo780150_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1960" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=2&amp;tid=55280&amp;repquote=780150&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 780150)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_0"></div>				</div>
			</td>
		</tr>
		</table>
		</div><div class="ad_column" id="ad_interthread"><a href="/viewthread.php?tid=54699" target="_blank" style="color:red;">1984bbs是一个非营利项目，它需要您的捐助！</font></a>		</div>
	<div class="mainbox viewthread">
			<table id="pid780152" summary="pid780152" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6131" target="_blank" id="userinfo780152" class="dropmenu" onmouseover="showMenu(this.id)">人道空空</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6131">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6131&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_1" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum780152" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=55280&page=1#pid780152', '话题链接已经复制到剪贴板')">2楼</strong>
													<em onclick="$('postmessage_780152').className='t_bigfont'">大</em>							<em onclick="$('postmessage_780152').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_780152').className='t_smallfont'">小</em>												发表于 2010-8-12 16:25&nbsp;																					<a href="viewthread.php?tid=55280&amp;page=1&amp;authorid=6131" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_1"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_1"></div><div id="ad_thread4_1"></div>
						
						
																											<div id="postmessage_780152" class="t_msgfont">这一天终究会到来</div>

							
							
							
							
															<div id="post_rate_div_780152"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo780152_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=6131" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=2&amp;tid=55280&amp;repquote=780152&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 780152)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_1"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid780153" summary="pid780153" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=17912" target="_blank" id="userinfo780153" class="dropmenu" onmouseover="showMenu(this.id)">树袋熊</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=17912">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=17912&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_2" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum780153" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=55280&page=1#pid780153', '话题链接已经复制到剪贴板')">3楼</strong>
													<em onclick="$('postmessage_780153').className='t_bigfont'">大</em>							<em onclick="$('postmessage_780153').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_780153').className='t_smallfont'">小</em>												发表于 2010-8-12 16:27&nbsp;																					<a href="viewthread.php?tid=55280&amp;page=1&amp;authorid=17912" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_2"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_2"></div><div id="ad_thread4_2"></div>
						
						
																											<div id="postmessage_780153" class="t_msgfont">庆父不死，鲁难未已</div>

							
							
							
							
															<div id="post_rate_div_780153"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo780153_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=17912" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=2&amp;tid=55280&amp;repquote=780153&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 780153)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_2"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid780154" summary="pid780154" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=13992" target="_blank" id="userinfo780154" class="dropmenu" onmouseover="showMenu(this.id)">snail</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=13992">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=13992&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_3" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum780154" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=55280&page=1#pid780154', '话题链接已经复制到剪贴板')">4楼</strong>
													<em onclick="$('postmessage_780154').className='t_bigfont'">大</em>							<em onclick="$('postmessage_780154').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_780154').className='t_smallfont'">小</em>												发表于 2010-8-12 16:28&nbsp;																					<a href="viewthread.php?tid=55280&amp;page=1&amp;authorid=13992" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_3"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_3"></div><div id="ad_thread4_3"></div>
						
						
																											<div id="postmessage_780154" class="t_msgfont">被GFW认证的一天来到鸟</div>

							
							
							
							
															<div id="post_rate_div_780154"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo780154_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=13992" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=2&amp;tid=55280&amp;repquote=780154&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 780154)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_3"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid780155" summary="pid780155" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8663" target="_blank" id="userinfo780155" class="dropmenu" onmouseover="showMenu(this.id)">man-eleven</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">&#9773;校叛徒、基本上冲锋在后、共产主义的坚定不信任者;运动控(喜欢巨大无比万人欢呼沸腾的场面比如足球赛)、热爱自由、容易怀旧伤感、会办事不会说话，俺们村最有文化的人，没有之一</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8663">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8663&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_4" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum780155" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=55280&page=1#pid780155', '话题链接已经复制到剪贴板')">5楼</strong>
													<em onclick="$('postmessage_780155').className='t_bigfont'">大</em>							<em onclick="$('postmessage_780155').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_780155').className='t_smallfont'">小</em>												发表于 2010-8-12 16:28&nbsp;																					<a href="viewthread.php?tid=55280&amp;page=1&amp;authorid=8663" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_4"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_4"></div><div id="ad_thread4_4"></div>
						
						
																											<div id="postmessage_780155" class="t_msgfont">好像原来听你说过通过技术手段可以冲破gfw的吗</div>

							
							
							
							
															<div id="post_rate_div_780155"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo780155_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=8663" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=2&amp;tid=55280&amp;repquote=780155&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 780155)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_4"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid780156" summary="pid780156" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7253" target="_blank" id="userinfo780156" class="dropmenu" onmouseover="showMenu(this.id)">orz.z</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">上班比上坟还沉重</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7253">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7253&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_5" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum780156" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=55280&page=1#pid780156', '话题链接已经复制到剪贴板')">6楼</strong>
													<em onclick="$('postmessage_780156').className='t_bigfont'">大</em>							<em onclick="$('postmessage_780156').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_780156').className='t_smallfont'">小</em>												发表于 2010-8-12 16:29&nbsp;																					<a href="viewthread.php?tid=55280&amp;page=1&amp;authorid=7253" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_5"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_5"></div><div id="ad_thread4_5"></div>
						
						
																											<div id="postmessage_780156" class="t_msgfont">果断FOLLOW书记....<br />
局域网万岁</div>

							
							
							
							
															<div id="post_rate_div_780156"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo780156_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=7253" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=2&amp;tid=55280&amp;repquote=780156&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 780156)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_5"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid780164" summary="pid780164" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6980" target="_blank" id="userinfo780164" class="dropmenu" onmouseover="showMenu(this.id)">tanjilion</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6980">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6980&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_6" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum780164" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=55280&page=1#pid780164', '话题链接已经复制到剪贴板')">7楼</strong>
													<em onclick="$('postmessage_780164').className='t_bigfont'">大</em>							<em onclick="$('postmessage_780164').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_780164').className='t_smallfont'">小</em>												发表于 2010-8-12 16:33&nbsp;																					<a href="viewthread.php?tid=55280&amp;page=1&amp;authorid=6980" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_6"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_6"></div><div id="ad_thread4_6"></div>
						
						
																											<div id="postmessage_780164" class="t_msgfont">这么严重。。</div>

							
							
							
							
															<div id="post_rate_div_780164"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo780164_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=6980" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=2&amp;tid=55280&amp;repquote=780164&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 780164)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_6"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid780167" summary="pid780167" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=11463" target="_blank" id="userinfo780167" class="dropmenu" onmouseover="showMenu(this.id)">CCAV</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">CCAV隐藏大BOSS；坐等下次兴邦。</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=11463">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=11463&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_7" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum780167" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=55280&page=1#pid780167', '话题链接已经复制到剪贴板')">8楼</strong>
													<em onclick="$('postmessage_780167').className='t_bigfont'">大</em>							<em onclick="$('postmessage_780167').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_780167').className='t_smallfont'">小</em>												发表于 2010-8-12 16:34&nbsp;																					<a href="viewthread.php?tid=55280&amp;page=1&amp;authorid=11463" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_7"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_7"></div><div id="ad_thread4_7"></div>
						
						
																											<div id="postmessage_780167" class="t_msgfont">被墙了是不是就无法DDOS攻击了？<br />
记得很久之前说过，84被墙是迟早的事情。顺便fuck一下GFW</div>

							
							
							
							
															<div id="post_rate_div_780167"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo780167_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=11463" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=2&amp;tid=55280&amp;repquote=780167&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 780167)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_7"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid780168" summary="pid780168" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=9146" target="_blank" id="userinfo780168" class="dropmenu" onmouseover="showMenu(this.id)">fernando</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">疯人院院长</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=9146">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=9146&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_8" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum780168" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=55280&page=1#pid780168', '话题链接已经复制到剪贴板')">9楼</strong>
													<em onclick="$('postmessage_780168').className='t_bigfont'">大</em>							<em onclick="$('postmessage_780168').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_780168').className='t_smallfont'">小</em>												发表于 2010-8-12 16:35&nbsp;																					<a href="viewthread.php?tid=55280&amp;page=1&amp;authorid=9146" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_8"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_8"></div><div id="ad_thread4_8"></div>
						
						
																											<div id="postmessage_780168" class="t_msgfont">终于要翻墙了。。。SSH要频繁使用鸟</div>

							
							
							
							
															<div id="post_rate_div_780168"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo780168_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=9146" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=2&amp;tid=55280&amp;repquote=780168&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 780168)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_8"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid780172" summary="pid780172" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7102" target="_blank" id="userinfo780172" class="dropmenu" onmouseover="showMenu(this.id)">prague1982</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">皮皮蛋蛋</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7102">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7102&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_9" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum780172" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=55280&page=1#pid780172', '话题链接已经复制到剪贴板')">10楼</strong>
													<em onclick="$('postmessage_780172').className='t_bigfont'">大</em>							<em onclick="$('postmessage_780172').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_780172').className='t_smallfont'">小</em>												发表于 2010-8-12 16:37&nbsp;																					<a href="viewthread.php?tid=55280&amp;page=1&amp;authorid=7102" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_9"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_9"></div><div id="ad_thread4_9"></div>
						
						
																											<div id="postmessage_780172" class="t_msgfont">准备好武器弹药</div>

							
							
							
							
															<div id="post_rate_div_780172"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo780172_menu" style="display: none;">
										<div class="imicons">
												<a href="http://wpa.qq.com/msgrd?V=1&amp;Uin=185703&amp;Site=1984bbs.com&amp;Menu=yes" target="_blank"><img src="images/default/qq.gif" alt="QQ" /></a>																							</div>
										<dl></dl>
										<p><a href="space.php?uid=7102" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=2&amp;tid=55280&amp;repquote=780172&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 780172)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_9"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid780173" summary="pid780173" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7760" target="_blank" id="userinfo780173" class="dropmenu" onmouseover="showMenu(this.id)">米西米西</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">老家大洋</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7760">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7760&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_10" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum780173" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=55280&page=1#pid780173', '话题链接已经复制到剪贴板')">11楼</strong>
													<em onclick="$('postmessage_780173').className='t_bigfont'">大</em>							<em onclick="$('postmessage_780173').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_780173').className='t_smallfont'">小</em>												发表于 2010-8-12 16:38&nbsp;																					<a href="viewthread.php?tid=55280&amp;page=1&amp;authorid=7760" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_10"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_10"></div><div id="ad_thread4_10"></div>
						
						
																											<div id="postmessage_780173" class="t_msgfont">支持84</div>

							
							
							
							
															<div id="post_rate_div_780173"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo780173_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=7760" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=2&amp;tid=55280&amp;repquote=780173&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 780173)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_10"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid780176" summary="pid780176" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6873" target="_blank" id="userinfo780176" class="dropmenu" onmouseover="showMenu(this.id)">萧易寒</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6873">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6873&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_11" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum780176" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=55280&page=1#pid780176', '话题链接已经复制到剪贴板')">12楼</strong>
													<em onclick="$('postmessage_780176').className='t_bigfont'">大</em>							<em onclick="$('postmessage_780176').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_780176').className='t_smallfont'">小</em>												发表于 2010-8-12 16:41&nbsp;																					<a href="viewthread.php?tid=55280&amp;page=1&amp;authorid=6873" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_11"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_11"></div><div id="ad_thread4_11"></div>
						
						
																											<div id="postmessage_780176" class="t_msgfont">https+频繁换IP躲避GFW会导致 DNS污染，可以参考可能吧的案例 <br />
<br />
我觉得目前应大力普及翻墙教程、工具，教大家修改hosts文件，为将来做准备<br />
<br />
[<i> 本帖最后由 萧易寒 于 2010-8-12 16:44 编辑 </i>]</div>

							
							
							
							
															<div id="post_rate_div_780176"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo780176_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=6873" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=2&amp;tid=55280&amp;repquote=780176&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 780176)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_11"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid780177" summary="pid780177" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2213" target="_blank" id="userinfo780177" class="dropmenu" onmouseover="showMenu(this.id)">核子力量</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">Twitter.com/hzpower</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2213">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2213&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_12" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum780177" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=55280&page=1#pid780177', '话题链接已经复制到剪贴板')">13楼</strong>
													<em onclick="$('postmessage_780177').className='t_bigfont'">大</em>							<em onclick="$('postmessage_780177').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_780177').className='t_smallfont'">小</em>												发表于 2010-8-12 16:41&nbsp;																					<a href="viewthread.php?tid=55280&amp;page=1&amp;authorid=2213" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_12"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_12"></div><div id="ad_thread4_12"></div>
						
						
																											<div id="postmessage_780177" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>CCAV</i> 于 2010-8-12 16:34 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=780167&amp;ptid=55280" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
被墙了是不是就无法DDOS攻击了？ </blockquote></div>被墙和DDOS攻击是两回事，维权网早就被墙了，还是经常受到攻击</div>

							
							
							
							
															<div id="post_rate_div_780177"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo780177_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://twitter.com/hzpower" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=2213" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=2&amp;tid=55280&amp;repquote=780177&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 780177)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_12"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid780179" summary="pid780179" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6873" target="_blank" id="userinfo780179" class="dropmenu" onmouseover="showMenu(this.id)">萧易寒</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6873">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6873&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_13" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum780179" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=55280&page=1#pid780179', '话题链接已经复制到剪贴板')">14楼</strong>
													<em onclick="$('postmessage_780179').className='t_bigfont'">大</em>							<em onclick="$('postmessage_780179').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_780179').className='t_smallfont'">小</em>												发表于 2010-8-12 16:43&nbsp;																					<a href="viewthread.php?tid=55280&amp;page=1&amp;authorid=6873" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_13"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_13"></div><div id="ad_thread4_13"></div>
						
						
																											<div id="postmessage_780179" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>核子力量</i> 于 2010-8-12 16:41 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=780177&amp;ptid=55280" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
<br />
<br />
被墙和DDOS攻击是两回事，维权网早就被墙了，还是经常受到攻击 </blockquote></div>被墙了绝对可以阻挡DDOS，其它高端攻击就不一定了</div>

							
							
							
							
															<div id="post_rate_div_780179"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo780179_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=6873" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=2&amp;tid=55280&amp;repquote=780179&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 780179)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_13"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid780180" summary="pid780180" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2267" target="_blank" id="userinfo780180" class="dropmenu" onmouseover="showMenu(this.id)">ZBI</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2267">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2267&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_14" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum780180" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=55280&page=1#pid780180', '话题链接已经复制到剪贴板')">15楼</strong>
													<em onclick="$('postmessage_780180').className='t_bigfont'">大</em>							<em onclick="$('postmessage_780180').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_780180').className='t_smallfont'">小</em>												发表于 2010-8-12 16:43&nbsp;																					<a href="viewthread.php?tid=55280&amp;page=1&amp;authorid=2267" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_14"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_14"></div><div id="ad_thread4_14"></div>
						
						
																											<div id="postmessage_780180" class="t_msgfont">唉</div>

							
							
							
							
															<div id="post_rate_div_780180"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo780180_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=2267" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=2&amp;tid=55280&amp;repquote=780180&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 780180)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_14"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid780182" summary="pid780182" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12457" target="_blank" id="userinfo780182" class="dropmenu" onmouseover="showMenu(this.id)">houman</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12457">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12457&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_15" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum780182" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=55280&page=1#pid780182', '话题链接已经复制到剪贴板')">16楼</strong>
													<em onclick="$('postmessage_780182').className='t_bigfont'">大</em>							<em onclick="$('postmessage_780182').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_780182').className='t_smallfont'">小</em>												发表于 2010-8-12 16:44&nbsp;																					<a href="viewthread.php?tid=55280&amp;page=1&amp;authorid=12457" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_15"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_15"></div><div id="ad_thread4_15"></div>
						
						
																											<div id="postmessage_780182" class="t_msgfont">finally</div>

							
							
							
							
															<div id="post_rate_div_780182"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo780182_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://www.mygamewiki.net" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=12457" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=2&amp;tid=55280&amp;repquote=780182&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 780182)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_15"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid780184" summary="pid780184" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12412" target="_blank" id="userinfo780184" class="dropmenu" onmouseover="showMenu(this.id)">wangguoping</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">追寻光明</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12412">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12412&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_16" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum780184" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=55280&page=1#pid780184', '话题链接已经复制到剪贴板')">17楼</strong>
													<em onclick="$('postmessage_780184').className='t_bigfont'">大</em>							<em onclick="$('postmessage_780184').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_780184').className='t_smallfont'">小</em>												发表于 2010-8-12 16:45&nbsp;																					<a href="viewthread.php?tid=55280&amp;page=1&amp;authorid=12412" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_16"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_16"></div><div id="ad_thread4_16"></div>
						
						
																											<div id="postmessage_780184" class="t_msgfont">被屏蔽比被攻击得登陆不上还好一点</div>

							
							
							
							
															<div id="post_rate_div_780184"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo780184_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=12412" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=2&amp;tid=55280&amp;repquote=780184&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 780184)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_16"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid780186" summary="pid780186" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7994" target="_blank" id="userinfo780186" class="dropmenu" onmouseover="showMenu(this.id)">cheo2ng</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">十七 @cheo2ng</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7994">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7994&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_17" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum780186" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=55280&page=1#pid780186', '话题链接已经复制到剪贴板')">18楼</strong>
													<em onclick="$('postmessage_780186').className='t_bigfont'">大</em>							<em onclick="$('postmessage_780186').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_780186').className='t_smallfont'">小</em>												发表于 2010-8-12 16:48&nbsp;																					<a href="viewthread.php?tid=55280&amp;page=1&amp;authorid=7994" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_17"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_17"></div><div id="ad_thread4_17"></div>
						
						
																											<div id="postmessage_780186" class="t_msgfont">说明1984bbs是个好网站阿…</div>

							
							
							
							
															<div id="post_rate_div_780186"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo780186_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=7994" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=2&amp;tid=55280&amp;repquote=780186&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 780186)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_17"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid780197" summary="pid780197" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=3144" target="_blank" id="userinfo780197" class="dropmenu" onmouseover="showMenu(this.id)">北风</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=3144">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=3144&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_18" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum780197" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=55280&page=1#pid780197', '话题链接已经复制到剪贴板')">19楼</strong>
													<em onclick="$('postmessage_780197').className='t_bigfont'">大</em>							<em onclick="$('postmessage_780197').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_780197').className='t_smallfont'">小</em>												发表于 2010-8-12 16:55&nbsp;																					<a href="viewthread.php?tid=55280&amp;page=1&amp;authorid=3144" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_18"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_18"></div><div id="ad_thread4_18"></div>
						
						
																											<div id="postmessage_780197" class="t_msgfont">声援！</div>

							
							
							
							
															<div id="post_rate_div_780197"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo780197_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=3144" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=2&amp;tid=55280&amp;repquote=780197&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 780197)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_18"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid780200" summary="pid780200" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1490" target="_blank" id="userinfo780200" class="dropmenu" onmouseover="showMenu(this.id)">活不明白</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">一个尽心尽力潜水的老组员</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1490">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1490&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_19" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum780200" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=55280&page=1#pid780200', '话题链接已经复制到剪贴板')">20楼</strong>
													<em onclick="$('postmessage_780200').className='t_bigfont'">大</em>							<em onclick="$('postmessage_780200').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_780200').className='t_smallfont'">小</em>												发表于 2010-8-12 16:56&nbsp;																					<a href="viewthread.php?tid=55280&amp;page=1&amp;authorid=1490" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_19"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_19"></div><div id="ad_thread4_19"></div>
						
						
																											<div id="postmessage_780200" class="t_msgfont">已备好梯子，本以为08年都熬不过，竟然到现在。。也不易了</div>

							
							
							
							
															<div id="post_rate_div_780200"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo780200_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1490" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=2&amp;tid=55280&amp;repquote=780200&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 780200)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_19"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid780213" summary="pid780213" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=13476" target="_blank" id="userinfo780213" class="dropmenu" onmouseover="showMenu(this.id)">大史</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">草泥马专项办公室</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=13476">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=13476&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_20" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum780213" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=55280&page=1#pid780213', '话题链接已经复制到剪贴板')">21楼</strong>
													<em onclick="$('postmessage_780213').className='t_bigfont'">大</em>							<em onclick="$('postmessage_780213').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_780213').className='t_smallfont'">小</em>												发表于 2010-8-12 17:04&nbsp;																					<a href="viewthread.php?tid=55280&amp;page=1&amp;authorid=13476" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_20"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_20"></div><div id="ad_thread4_20"></div>
						
						
																											<div id="postmessage_780213" class="t_msgfont">维权网是不是彻底挂了</div>

							
							
							
							
															<div id="post_rate_div_780213"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo780213_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=13476" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=2&amp;tid=55280&amp;repquote=780213&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 780213)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_20"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid780228" summary="pid780228" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=9656" target="_blank" id="userinfo780228" class="dropmenu" onmouseover="showMenu(this.id)">shallwedance</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=9656">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=9656&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_21" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum780228" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=55280&page=1#pid780228', '话题链接已经复制到剪贴板')">22楼</strong>
													<em onclick="$('postmessage_780228').className='t_bigfont'">大</em>							<em onclick="$('postmessage_780228').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_780228').className='t_smallfont'">小</em>												发表于 2010-8-12 17:14&nbsp;																					<a href="viewthread.php?tid=55280&amp;page=1&amp;authorid=9656" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_21"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_21"></div><div id="ad_thread4_21"></div>
						
						
																											<div id="postmessage_780228" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>wangguoping</i> 于 2010-8-12 16:45 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=780184&amp;ptid=55280" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
被屏蔽比被攻击得登陆不上还好一点 </blockquote></div>Those who would trade in their freedom for their protection deserve neither.</div>

							
							
							
							
															<div id="post_rate_div_780228"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo780228_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=9656" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=2&amp;tid=55280&amp;repquote=780228&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 780228)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_21"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid780231" summary="pid780231" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=9656" target="_blank" id="userinfo780231" class="dropmenu" onmouseover="showMenu(this.id)">shallwedance</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=9656">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=9656&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_22" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum780231" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=55280&page=1#pid780231', '话题链接已经复制到剪贴板')">23楼</strong>
													<em onclick="$('postmessage_780231').className='t_bigfont'">大</em>							<em onclick="$('postmessage_780231').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_780231').className='t_smallfont'">小</em>												发表于 2010-8-12 17:15&nbsp;																					<a href="viewthread.php?tid=55280&amp;page=1&amp;authorid=9656" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_22"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_22"></div><div id="ad_thread4_22"></div>
						
						
																											<div id="postmessage_780231" class="t_msgfont">固然知道這樣對小組的維護人員來說是很任性的想法，我更樂意看到一個在牆內受攻擊的小組，就跟很多活躍的維權人士那樣。進小組的時間不是太長，見識長了很多，希望能看到擁有持續影響力的小組。</div>

							
							
							
							
															<div id="post_rate_div_780231"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo780231_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=9656" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=2&amp;tid=55280&amp;repquote=780231&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 780231)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_22"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid780238" summary="pid780238" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=9787" target="_blank" id="userinfo780238" class="dropmenu" onmouseover="showMenu(this.id)">Yak</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=9787">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=9787&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_23" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum780238" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=55280&page=1#pid780238', '话题链接已经复制到剪贴板')">24楼</strong>
													<em onclick="$('postmessage_780238').className='t_bigfont'">大</em>							<em onclick="$('postmessage_780238').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_780238').className='t_smallfont'">小</em>												发表于 2010-8-12 17:19&nbsp;																					<a href="viewthread.php?tid=55280&amp;page=1&amp;authorid=9787" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_23"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_23"></div><div id="ad_thread4_23"></div>
						
						
																											<div id="postmessage_780238" class="t_msgfont">被封不是好事，毕竟不是每个人都有工夫去翻墙的</div>

							
							
							
							
															<div id="post_rate_div_780238"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo780238_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=9787" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=2&amp;tid=55280&amp;repquote=780238&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 780238)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_23"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid780249" summary="pid780249" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=13518" target="_blank" id="userinfo780249" class="dropmenu" onmouseover="showMenu(this.id)">JackJones</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">无党派</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=13518">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=13518&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_24" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum780249" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=55280&page=1#pid780249', '话题链接已经复制到剪贴板')">25楼</strong>
													<em onclick="$('postmessage_780249').className='t_bigfont'">大</em>							<em onclick="$('postmessage_780249').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_780249').className='t_smallfont'">小</em>												发表于 2010-8-12 17:27&nbsp;																					<a href="viewthread.php?tid=55280&amp;page=1&amp;authorid=13518" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_24"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_24"></div><div id="ad_thread4_24"></div>
						
						
																											<div id="postmessage_780249" class="t_msgfont">这只是时间问题，GF不会就此罢休的</div>

							
							
							
							
															<div id="post_rate_div_780249"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo780249_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=13518" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=2&amp;tid=55280&amp;repquote=780249&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 780249)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_24"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid780252" summary="pid780252" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=5869" target="_blank" id="userinfo780252" class="dropmenu" onmouseover="showMenu(this.id)">老纪扶犁</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=5869">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=5869&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_25" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum780252" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=55280&page=1#pid780252', '话题链接已经复制到剪贴板')">26楼</strong>
													<em onclick="$('postmessage_780252').className='t_bigfont'">大</em>							<em onclick="$('postmessage_780252').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_780252').className='t_smallfont'">小</em>												发表于 2010-8-12 17:36&nbsp;																					<a href="viewthread.php?tid=55280&amp;page=1&amp;authorid=5869" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_25"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_25"></div><div id="ad_thread4_25"></div>
						
						
																											<div id="postmessage_780252" class="t_msgfont">俺要哭了.</div>

							
							
							
							
															<div id="post_rate_div_780252"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo780252_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=5869" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=2&amp;tid=55280&amp;repquote=780252&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 780252)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_25"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid780256" summary="pid780256" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6314" target="_blank" id="userinfo780256" class="dropmenu" onmouseover="showMenu(this.id)">hhbcl1414</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">一名八卦爱好者+春哥党+毅丝不挂+党员子弟+民主斗士+不明真相的围观群众 帝吧政治组QQ群86206303</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6314">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6314&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_26" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum780256" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=55280&page=1#pid780256', '话题链接已经复制到剪贴板')">27楼</strong>
													<em onclick="$('postmessage_780256').className='t_bigfont'">大</em>							<em onclick="$('postmessage_780256').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_780256').className='t_smallfont'">小</em>												发表于 2010-8-12 17:41&nbsp;																					<a href="viewthread.php?tid=55280&amp;page=1&amp;authorid=6314" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_26"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_26"></div><div id="ad_thread4_26"></div>
						
						
																											<div id="postmessage_780256" class="t_msgfont">1984BBS的网址有没有加入关键字限制？</div>

							
							
							
							
															<div id="post_rate_div_780256"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo780256_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=6314" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=2&amp;tid=55280&amp;repquote=780256&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 780256)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_26"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid780260" summary="pid780260" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=11191" target="_blank" id="userinfo780260" class="dropmenu" onmouseover="showMenu(this.id)">pagist</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=11191">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=11191&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_27" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum780260" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=55280&page=1#pid780260', '话题链接已经复制到剪贴板')">28楼</strong>
													<em onclick="$('postmessage_780260').className='t_bigfont'">大</em>							<em onclick="$('postmessage_780260').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_780260').className='t_smallfont'">小</em>												发表于 2010-8-12 17:45&nbsp;																					<a href="viewthread.php?tid=55280&amp;page=1&amp;authorid=11191" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_27"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_27"></div><div id="ad_thread4_27"></div>
						
						
																											<div id="postmessage_780260" class="t_msgfont">还不如让他被墙了，然后再公布IP，我们添加到hosts里面，再过段时间清理一下，小组又会清净下来，组员的数量回复到一个比较和谐的水平，不好么？</div>

							
							
							
							
															<div id="post_rate_div_780260"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo780260_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=11191" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=2&amp;tid=55280&amp;repquote=780260&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 780260)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_27"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid780263" summary="pid780263" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=16164" target="_blank" id="userinfo780263" class="dropmenu" onmouseover="showMenu(this.id)">linyan431</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">自建twitter API ｜ https://www.kuailewang.info/twitter</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=16164">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=16164&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_28" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum780263" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=55280&page=1#pid780263', '话题链接已经复制到剪贴板')">29楼</strong>
													<em onclick="$('postmessage_780263').className='t_bigfont'">大</em>							<em onclick="$('postmessage_780263').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_780263').className='t_smallfont'">小</em>												发表于 2010-8-12 17:46&nbsp;																					<a href="viewthread.php?tid=55280&amp;page=1&amp;authorid=16164" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_28"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_28"></div><div id="ad_thread4_28"></div>
						
						
																											<div id="postmessage_780263" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>hhbcl1414</i> 于 2010-8-12 17:41 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=780256&amp;ptid=55280" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
1984BBS的网址有没有加入关键字限制？ </blockquote></div>Safari 打不开页面“<a href="http://www.baidu.com/s?wd=1984bbs.com" target="_blank">http://www.baidu.com/s?wd=1984bbs.com</a>”，因为服务器意外中断了连接。这种情况在服务器忙时有时会出现。请等待几分钟，然后再试一次。<br />
<br />
有 在墙外在baidu搜索1984bbs.com的结果 被GFW切断</div>

							
							
							
							
															<div id="post_rate_div_780263"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo780263_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=16164" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=2&amp;tid=55280&amp;repquote=780263&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 780263)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_28"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid780307" summary="pid780307" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=17613" target="_blank" id="userinfo780307" class="dropmenu" onmouseover="showMenu(this.id)">prometheus</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">@ilearnben</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=17613">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=17613&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_29" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum780307" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=55280&page=1#pid780307', '话题链接已经复制到剪贴板')">30楼</strong>
													<em onclick="$('postmessage_780307').className='t_bigfont'">大</em>							<em onclick="$('postmessage_780307').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_780307').className='t_smallfont'">小</em>												发表于 2010-8-12 18:44&nbsp;																					<a href="viewthread.php?tid=55280&amp;page=1&amp;authorid=17613" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_29"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_29"></div><div id="ad_thread4_29"></div>
						
						
																											<div id="postmessage_780307" class="t_msgfont">下午有那么一会上不来，果然又出意外了，tg真是不肯善罢甘休啊</div>

							
							
							
							
															<div id="post_rate_div_780307"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo780307_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=17613" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=2&amp;tid=55280&amp;repquote=780307&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 780307)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_29"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid780308" summary="pid780308" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12494" target="_blank" id="userinfo780308" class="dropmenu" onmouseover="showMenu(this.id)">晨光</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12494">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12494&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_30" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum780308" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=55280&page=1#pid780308', '话题链接已经复制到剪贴板')">31楼</strong>
													<em onclick="$('postmessage_780308').className='t_bigfont'">大</em>							<em onclick="$('postmessage_780308').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_780308').className='t_smallfont'">小</em>												发表于 2010-8-12 18:47&nbsp;																					<a href="viewthread.php?tid=55280&amp;page=1&amp;authorid=12494" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_30"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_30"></div><div id="ad_thread4_30"></div>
						
						
																											<div id="postmessage_780308" class="t_msgfont">手机党表示鸭力很大</div>

							
							
							
							
															<div id="post_rate_div_780308"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo780308_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=12494" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=2&amp;tid=55280&amp;repquote=780308&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 780308)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_30"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid780347" summary="pid780347" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8920" target="_blank" id="userinfo780347" class="dropmenu" onmouseover="showMenu(this.id)">watersword</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">FZL书呆子\数据控\r&amp;b-Cynicism\Britsh Rock is great\84呃党召集人</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8920">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8920&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_31" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum780347" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=55280&page=1#pid780347', '话题链接已经复制到剪贴板')">32楼</strong>
													<em onclick="$('postmessage_780347').className='t_bigfont'">大</em>							<em onclick="$('postmessage_780347').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_780347').className='t_smallfont'">小</em>												发表于 2010-8-12 19:28&nbsp;																					<a href="viewthread.php?tid=55280&amp;page=1&amp;authorid=8920" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_31"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_31"></div><div id="ad_thread4_31"></div>
						
						
																											<div id="postmessage_780347" class="t_msgfont">这...</div>

							
							
							
							
															<div id="post_rate_div_780347"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo780347_menu" style="display: none;">
										<dl></dl>
											<p><a href="https://twitter.com/watertiwt" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=8920" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=2&amp;tid=55280&amp;repquote=780347&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 780347)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_31"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid780356" summary="pid780356" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=11814" target="_blank" id="userinfo780356" class="dropmenu" onmouseover="showMenu(this.id)">河殇</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">抱歉，根据相关法律法规和政策，本人目前只能低调，不能狂妄。推特@lxkrock </p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=11814">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=11814&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_32" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum780356" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=55280&page=1#pid780356', '话题链接已经复制到剪贴板')">33楼</strong>
													<em onclick="$('postmessage_780356').className='t_bigfont'">大</em>							<em onclick="$('postmessage_780356').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_780356').className='t_smallfont'">小</em>												发表于 2010-8-12 19:35&nbsp;																					<a href="viewthread.php?tid=55280&amp;page=1&amp;authorid=11814" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_32"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_32"></div><div id="ad_thread4_32"></div>
						
						
																											<div id="postmessage_780356" class="t_msgfont">我无能为力</div>

							
							
							
							
															<div id="post_rate_div_780356"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo780356_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=11814" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=2&amp;tid=55280&amp;repquote=780356&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 780356)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_32"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid780368" summary="pid780368" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=9057" target="_blank" id="userinfo780368" class="dropmenu" onmouseover="showMenu(this.id)">光明的格里高利</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">八卦爱好者</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=9057">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=9057&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_33" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum780368" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=55280&page=1#pid780368', '话题链接已经复制到剪贴板')">34楼</strong>
													<em onclick="$('postmessage_780368').className='t_bigfont'">大</em>							<em onclick="$('postmessage_780368').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_780368').className='t_smallfont'">小</em>												发表于 2010-8-12 19:48&nbsp;																					<a href="viewthread.php?tid=55280&amp;page=1&amp;authorid=9057" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_33"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_33"></div><div id="ad_thread4_33"></div>
						
						
																											<div id="postmessage_780368" class="t_msgfont">维护人员不容易啊</div>

							
							
							
							
															<div id="post_rate_div_780368"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo780368_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=9057" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=2&amp;tid=55280&amp;repquote=780368&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 780368)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_33"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid780373" summary="pid780373" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=13201" target="_blank" id="userinfo780373" class="dropmenu" onmouseover="showMenu(this.id)">sunaaron123</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=13201">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=13201&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_34" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum780373" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=55280&page=1#pid780373', '话题链接已经复制到剪贴板')">35楼</strong>
													<em onclick="$('postmessage_780373').className='t_bigfont'">大</em>							<em onclick="$('postmessage_780373').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_780373').className='t_smallfont'">小</em>												发表于 2010-8-12 19:53&nbsp;																					<a href="viewthread.php?tid=55280&amp;page=1&amp;authorid=13201" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_34"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_34"></div><div id="ad_thread4_34"></div>
						
						
																											<div id="postmessage_780373" class="t_msgfont">ding</div>

							
							
							
							
															<div id="post_rate_div_780373"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo780373_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=13201" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=2&amp;tid=55280&amp;repquote=780373&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 780373)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_34"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid780375" summary="pid780375" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=16415" target="_blank" id="userinfo780375" class="dropmenu" onmouseover="showMenu(this.id)">1919欢迎你</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=16415">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=16415&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_35" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum780375" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=55280&page=1#pid780375', '话题链接已经复制到剪贴板')">36楼</strong>
													<em onclick="$('postmessage_780375').className='t_bigfont'">大</em>							<em onclick="$('postmessage_780375').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_780375').className='t_smallfont'">小</em>												发表于 2010-8-12 19:54&nbsp;																					<a href="viewthread.php?tid=55280&amp;page=1&amp;authorid=16415" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_35"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_35"></div><div id="ad_thread4_35"></div>
						
						
																											<div id="postmessage_780375" class="t_msgfont">手机怎么翻墙啊～</div>

							
							
							
							
															<div id="post_rate_div_780375"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo780375_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=16415" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=2&amp;tid=55280&amp;repquote=780375&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 780375)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_35"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid780377" summary="pid780377" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=17327" target="_blank" id="userinfo780377" class="dropmenu" onmouseover="showMenu(this.id)">开水开水</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=17327">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=17327&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_36" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum780377" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=55280&page=1#pid780377', '话题链接已经复制到剪贴板')">37楼</strong>
													<em onclick="$('postmessage_780377').className='t_bigfont'">大</em>							<em onclick="$('postmessage_780377').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_780377').className='t_smallfont'">小</em>												发表于 2010-8-12 19:56&nbsp;																					<a href="viewthread.php?tid=55280&amp;page=1&amp;authorid=17327" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_36"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_36"></div><div id="ad_thread4_36"></div>
						
						
																											<div id="postmessage_780377" class="t_msgfont">偷偷问一句：GFW是虾米...</div>

							
							
							
							
															<div id="post_rate_div_780377"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo780377_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=17327" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=2&amp;tid=55280&amp;repquote=780377&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 780377)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_36"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid780382" summary="pid780382" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12920" target="_blank" id="userinfo780382" class="dropmenu" onmouseover="showMenu(this.id)">James.Raynor</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12920">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12920&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_37" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum780382" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=55280&page=1#pid780382', '话题链接已经复制到剪贴板')">38楼</strong>
													<em onclick="$('postmessage_780382').className='t_bigfont'">大</em>							<em onclick="$('postmessage_780382').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_780382').className='t_smallfont'">小</em>												发表于 2010-8-12 20:00&nbsp;																					<a href="viewthread.php?tid=55280&amp;page=1&amp;authorid=12920" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_37"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_37"></div><div id="ad_thread4_37"></div>
						
						
																											<div id="postmessage_780382" class="t_msgfont">呃……自从开始上小组就把URL扔进了FoxyProxy的自动翻墙列表中……居然完全没意识到被墙了…………</div>

							
							
							
							
															<div id="post_rate_div_780382"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo780382_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=12920" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=2&amp;tid=55280&amp;repquote=780382&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 780382)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_37"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid780389" summary="pid780389" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10135" target="_blank" id="userinfo780389" class="dropmenu" onmouseover="showMenu(this.id)">偶佯疯</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">我是个读书人</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10135">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10135&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_38" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum780389" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=55280&page=1#pid780389', '话题链接已经复制到剪贴板')">39楼</strong>
													<em onclick="$('postmessage_780389').className='t_bigfont'">大</em>							<em onclick="$('postmessage_780389').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_780389').className='t_smallfont'">小</em>												发表于 2010-8-12 20:08&nbsp;																					<a href="viewthread.php?tid=55280&amp;page=1&amp;authorid=10135" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_38"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_38"></div><div id="ad_thread4_38"></div>
						
						
																											<div id="postmessage_780389" class="t_msgfont">#gfwlist又要加上一条1984bbs了</div>

							
							
							
							
															<div id="post_rate_div_780389"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo780389_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://izlf.info" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=10135" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=2&amp;tid=55280&amp;repquote=780389&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 780389)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_38"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid780392" summary="pid780392" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12678" target="_blank" id="userinfo780392" class="dropmenu" onmouseover="showMenu(this.id)">压伤的芦苇</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">warden</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12678">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12678&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_39" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum780392" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=55280&page=1#pid780392', '话题链接已经复制到剪贴板')">40楼</strong>
													<em onclick="$('postmessage_780392').className='t_bigfont'">大</em>							<em onclick="$('postmessage_780392').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_780392').className='t_smallfont'">小</em>												发表于 2010-8-12 20:13&nbsp;																					<a href="viewthread.php?tid=55280&amp;page=1&amp;authorid=12678" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_39"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_39"></div><div id="ad_thread4_39"></div>
						
						
																											<div id="postmessage_780392" class="t_msgfont">若备用IP也被封，我就义无反顾地翻墙。</div>

							
							
							
							
															<div id="post_rate_div_780392"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo780392_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=12678" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=2&amp;tid=55280&amp;repquote=780392&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 780392)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_39"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid780402" summary="pid780402" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12307" target="_blank" id="userinfo780402" class="dropmenu" onmouseover="showMenu(this.id)">tywtyw2002</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12307">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12307&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_40" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum780402" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=55280&page=1#pid780402', '话题链接已经复制到剪贴板')">41楼</strong>
													<em onclick="$('postmessage_780402').className='t_bigfont'">大</em>							<em onclick="$('postmessage_780402').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_780402').className='t_smallfont'">小</em>												发表于 2010-8-12 20:27&nbsp;																					<a href="viewthread.php?tid=55280&amp;page=1&amp;authorid=12307" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_40"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_40"></div><div id="ad_thread4_40"></div>
						
						
																											<div id="postmessage_780402" class="t_msgfont">路由封鎖？&nbsp; &nbsp;&nbsp;&nbsp;null 0？</div>

							
							
							
							
															<div id="post_rate_div_780402"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo780402_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=12307" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=2&amp;tid=55280&amp;repquote=780402&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 780402)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_40"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid780408" summary="pid780408" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=17707" target="_blank" id="userinfo780408" class="dropmenu" onmouseover="showMenu(this.id)">轻轻的风</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=17707">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=17707&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_41" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum780408" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=55280&page=1#pid780408', '话题链接已经复制到剪贴板')">42楼</strong>
													<em onclick="$('postmessage_780408').className='t_bigfont'">大</em>							<em onclick="$('postmessage_780408').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_780408').className='t_smallfont'">小</em>												发表于 2010-8-12 20:35&nbsp;																					<a href="viewthread.php?tid=55280&amp;page=1&amp;authorid=17707" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_41"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_41"></div><div id="ad_thread4_41"></div>
						
						
																											<div id="postmessage_780408" class="t_msgfont">翻墙软件准备好了</div>

							
							
							
							
															<div id="post_rate_div_780408"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo780408_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=17707" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=2&amp;tid=55280&amp;repquote=780408&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 780408)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_41"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid780418" summary="pid780418" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1906" target="_blank" id="userinfo780418" class="dropmenu" onmouseover="showMenu(this.id)">大祥云</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">松下问童子　　　　　　　　言师采药去　　　　　　　　只在此山中　　　　　　　　云深不知处</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1906">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1906&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_42" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum780418" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=55280&page=1#pid780418', '话题链接已经复制到剪贴板')">43楼</strong>
													<em onclick="$('postmessage_780418').className='t_bigfont'">大</em>							<em onclick="$('postmessage_780418').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_780418').className='t_smallfont'">小</em>												发表于 2010-8-12 20:44&nbsp;																					<a href="viewthread.php?tid=55280&amp;page=1&amp;authorid=1906" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_42"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_42"></div><div id="ad_thread4_42"></div>
						
						
																											<div id="postmessage_780418" class="t_msgfont">1984bbs这种网站，早该被墙了！<div class="quote"><h5>引用:</h5><blockquote>国保表示不打算封锁和要求我关闭1984bbs（他们可以通过任何“手段”迫使我关闭1984bbs），说“不想站在对立面”，希望建立“沟通”，前提是“不对抗”。</blockquote></div></div>

							
							
							
							
															<div id="post_rate_div_780418"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo780418_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1906" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=2&amp;tid=55280&amp;repquote=780418&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 780418)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_42"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid780430" summary="pid780430" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7403" target="_blank" id="userinfo780430" class="dropmenu" onmouseover="showMenu(this.id)">olly2</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7403">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7403&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_43" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum780430" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=55280&page=1#pid780430', '话题链接已经复制到剪贴板')">44楼</strong>
													<em onclick="$('postmessage_780430').className='t_bigfont'">大</em>							<em onclick="$('postmessage_780430').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_780430').className='t_smallfont'">小</em>												发表于 2010-8-12 20:55&nbsp;																					<a href="viewthread.php?tid=55280&amp;page=1&amp;authorid=7403" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_43"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_43"></div><div id="ad_thread4_43"></div>
						
						
																											<div id="postmessage_780430" class="t_msgfont">刚翻墙进来……</div>

							
							
							
							
															<div id="post_rate_div_780430"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo780430_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=7403" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=2&amp;tid=55280&amp;repquote=780430&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 780430)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_43"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid780438" summary="pid780438" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=13205" target="_blank" id="userinfo780438" class="dropmenu" onmouseover="showMenu(this.id)">第一滴血</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=13205">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=13205&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_44" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum780438" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=55280&page=1#pid780438', '话题链接已经复制到剪贴板')">45楼</strong>
													<em onclick="$('postmessage_780438').className='t_bigfont'">大</em>							<em onclick="$('postmessage_780438').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_780438').className='t_smallfont'">小</em>												发表于 2010-8-12 21:00&nbsp;																					<a href="viewthread.php?tid=55280&amp;page=1&amp;authorid=13205" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_44"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_44"></div><div id="ad_thread4_44"></div>
						
						
																											<div id="postmessage_780438" class="t_msgfont">大家一起翻墙吧</div>

							
							
							
							
															<div id="post_rate_div_780438"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo780438_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=13205" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=2&amp;tid=55280&amp;repquote=780438&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 780438)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_44"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid780450" summary="pid780450" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=17226" target="_blank" id="userinfo780450" class="dropmenu" onmouseover="showMenu(this.id)">追风</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=17226">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=17226&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_45" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum780450" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=55280&page=1#pid780450', '话题链接已经复制到剪贴板')">46楼</strong>
													<em onclick="$('postmessage_780450').className='t_bigfont'">大</em>							<em onclick="$('postmessage_780450').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_780450').className='t_smallfont'">小</em>												发表于 2010-8-12 21:09&nbsp;																					<a href="viewthread.php?tid=55280&amp;page=1&amp;authorid=17226" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_45"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_45"></div><div id="ad_thread4_45"></div>
						
						
																											<div id="postmessage_780450" class="t_msgfont">害怕啊</div>

							
							
							
							
															<div id="post_rate_div_780450"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo780450_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=17226" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=2&amp;tid=55280&amp;repquote=780450&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 780450)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_45"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid780452" summary="pid780452" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=4209" target="_blank" id="userinfo780452" class="dropmenu" onmouseover="showMenu(this.id)">atpatp</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">后清非正统，依旧让汉明</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=4209">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=4209&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_46" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum780452" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=55280&page=1#pid780452', '话题链接已经复制到剪贴板')">47楼</strong>
													<em onclick="$('postmessage_780452').className='t_bigfont'">大</em>							<em onclick="$('postmessage_780452').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_780452').className='t_smallfont'">小</em>												发表于 2010-8-12 21:12&nbsp;																					<a href="viewthread.php?tid=55280&amp;page=1&amp;authorid=4209" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_46"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_46"></div><div id="ad_thread4_46"></div>
						
						
																											<div id="postmessage_780452" class="t_msgfont">不翻不舒服斯基</div>

							
							
							
							
															<div id="post_rate_div_780452"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo780452_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=4209" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=2&amp;tid=55280&amp;repquote=780452&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 780452)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_46"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid780460" summary="pid780460" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=11233" target="_blank" id="userinfo780460" class="dropmenu" onmouseover="showMenu(this.id)">最是那一瞬</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=11233">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=11233&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_47" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum780460" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=55280&page=1#pid780460', '话题链接已经复制到剪贴板')">48楼</strong>
													<em onclick="$('postmessage_780460').className='t_bigfont'">大</em>							<em onclick="$('postmessage_780460').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_780460').className='t_smallfont'">小</em>												发表于 2010-8-12 21:18&nbsp;																					<a href="viewthread.php?tid=55280&amp;page=1&amp;authorid=11233" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_47"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_47"></div><div id="ad_thread4_47"></div>
						
						
																											<div id="postmessage_780460" class="t_msgfont">狗共该死！</div>

							
							
							
							
															<div id="post_rate_div_780460"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo780460_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=11233" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=2&amp;tid=55280&amp;repquote=780460&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 780460)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_47"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid780461" summary="pid780461" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10346" target="_blank" id="userinfo780461" class="dropmenu" onmouseover="showMenu(this.id)">yollowpig</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10346">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10346&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_48" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum780461" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=55280&page=1#pid780461', '话题链接已经复制到剪贴板')">49楼</strong>
													<em onclick="$('postmessage_780461').className='t_bigfont'">大</em>							<em onclick="$('postmessage_780461').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_780461').className='t_smallfont'">小</em>												发表于 2010-8-12 21:18&nbsp;																					<a href="viewthread.php?tid=55280&amp;page=1&amp;authorid=10346" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_48"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_48"></div><div id="ad_thread4_48"></div>
						
						
																											<div id="postmessage_780461" class="t_msgfont">对看这个帖子国宝说一句<br />
墙掉1984，对TG没有一点好处<br />
我现在平时不大翻墙，就看看1984，你墙掉1984,我要翻墙了，那什么博讯啊、大纪元啊我都会去看一眼，这个对你们可是没有啥好处的啊</div>

							
							
							
							
															<div id="post_rate_div_780461"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo780461_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=10346" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=2&amp;tid=55280&amp;repquote=780461&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 780461)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_48"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid780480" summary="pid780480" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=3349" target="_blank" id="userinfo780480" class="dropmenu" onmouseover="showMenu(this.id)">michael.zy</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">美国游客到北京旅游，不慎摔进路边的施工水沟。愤怒地说：在美国，危险场所都会竖起红旗提示的！中方导游辩解到：先生，您在入境时没见到那么大的红旗插在海关吗？</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=3349">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=3349&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_49" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum780480" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=55280&page=1#pid780480', '话题链接已经复制到剪贴板')">50楼</strong>
													<em onclick="$('postmessage_780480').className='t_bigfont'">大</em>							<em onclick="$('postmessage_780480').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_780480').className='t_smallfont'">小</em>												发表于 2010-8-12 21:28&nbsp;																					<a href="viewthread.php?tid=55280&amp;page=1&amp;authorid=3349" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_49"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_49"></div><div id="ad_thread4_49"></div>
						
						
																											<div id="postmessage_780480" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>开水开水</i> 于 2010-8-12 19:56 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=780377&amp;ptid=55280" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
偷偷问一句：GFW是虾米... </blockquote></div>呃</div>

							
							
							
							
															<div id="post_rate_div_780480"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo780480_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=3349" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=2&amp;tid=55280&amp;repquote=780480&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 780480)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_49"></div>				</div>
			</td>
		</tr>
		</table>
		</div>
</form>





<div class="pages_btns">
	<div class="threadflow"><a href="redirect.php?fid=2&amp;tid=55280&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=2&amp;tid=55280&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
	<div class="pages"><em>&nbsp;216&nbsp;</em><strong>1</strong><a href="viewthread.php?tid=55280&amp;extra=&amp;page=2">2</a><a href="viewthread.php?tid=55280&amp;extra=&amp;page=3">3</a><a href="viewthread.php?tid=55280&amp;extra=&amp;page=4">4</a><a href="viewthread.php?tid=55280&amp;extra=&amp;page=5">5</a><a href="viewthread.php?tid=55280&amp;extra=&amp;page=2" class="next">&rsaquo;&rsaquo;</a></div>		<span class="replybtn"><a href="post.php?action=reply&amp;fid=2&amp;tid=55280&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

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

	<form method="post" id="postform" action="post.php?action=reply&amp;fid=2&amp;tid=55280&amp;extra=&amp;replysubmit=yes" onSubmit="return validate(this)">
		<input type="hidden" name="formhash" value="6b1c51a1" />
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
		<dl><dt><a href="index.php?gid=3">沙龙</a></dt><dd><ul><li class="current"><a href="forumdisplay.php?fid=2">自由新闻社</a></li><li><a href="forumdisplay.php?fid=37">雅典学院</a></li><li><a href="forumdisplay.php?fid=21">开放社会资料室</a></li><li><a href="forumdisplay.php?fid=26">国家局域网研究所</a></li><li><a href="forumdisplay.php?fid=35">罗马假日公寓</a></li><li><a href="forumdisplay.php?fid=40">Live!大讲堂</a></li></ul></dd></dl><dl><dt><a href="index.php?gid=11">站务</a></dt><dd><ul><li><a href="forumdisplay.php?fid=9">多功能小黑屋</a></li></ul></dd></dl>	</div>

<script type="text/javascript">
var maxpage = 5;
if(maxpage > 1) {
	document.onkeyup = function(e){
		e = e ? e : window.event;
		var tagname = is_ie ? e.srcElement.tagName : e.target.tagName;
		if(tagname == 'INPUT' || tagname == 'TEXTAREA') return;
		actualCode = e.keyCode ? e.keyCode : e.charCode;
				if(actualCode == 39) {
			window.location = 'viewthread.php?tid=55280&page=2';
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
				<a href="viewthread.php?tid=23826" target="_blank">浏览器支持说明</a>　|　<a href="member.php?action=clearcookies&amp;formhash=6b1c51a1">清除 Cookies</a>
				
							</p>
		</div>
		<p id="copyright">
			CopyRight &#169; 1984bbs.com </p><p id="debuginfo">Processed in  second(s),  queries, Gzip enabled.</p>

	</div>
</div>
</body>
</html>
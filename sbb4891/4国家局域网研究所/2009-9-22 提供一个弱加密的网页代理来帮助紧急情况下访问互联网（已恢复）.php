<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<title>提供一个弱加密的网页代理来帮助紧急情况下访问互联网（已恢复） - 国家局域网研究所 -  1984bbs.com </title>
<meta name="keywords" content="" />
<meta name="MSSmartTagsPreventParsing" content="True" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<link rel="archives" title="1984bbs.com" href="https://1984bbs.com/archiver/" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_viewthread.css" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_common.css" />
<script type="text/javascript">
	var discuz_uid = 13019;var IMGDIR = 'images/default';var attackevasive = '0';var gid = 0;var STYLEID = '1';
	gid = parseInt('3');var fid = parseInt('26');var tid = parseInt('22983');
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
			<p><a href="index.php" id="forumlist" onmouseover="showMenu(this.id)" class="dropmenu">1984bbs.com</a> &raquo; <a href="forumdisplay.php?fid=26">国家局域网研究所</a> &raquo; 提供一个弱加密的网页代理来帮助紧急情况下访问互联网（已恢复）</p>
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
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=22983&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=22983&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
	<div class="pages"><em>&nbsp;53&nbsp;</em><strong>1</strong><a href="viewthread.php?tid=22983&amp;extra=&amp;page=2">2</a><a href="viewthread.php?tid=22983&amp;extra=&amp;page=2" class="next">&rsaquo;&rsaquo;</a></div>			<span class="postbtn" id="newspecial" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=22983&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

	<ul class="popupmenu_popup newspecialmenu" id="newspecial_menu" style="display: none">
		<li><a href="post.php?action=newthread&amp;fid=26&amp;extra=">发新话题</a></li>
		<li class="poll"><a href="post.php?action=newthread&amp;fid=26&amp;extra=&amp;special=1">发布投票</a></li>													</ul>

<form method="post" name="modactions">
	<input type="hidden" name="formhash" value="823c9fa2" />
	<div class="mainbox viewthread">
		<span class="headactions">
					<a href="my.php?item=favorites&amp;tid=22983" id="ajax_favorite" onclick="ajaxmenu(event, this.id, 3000, 0)">收藏</a>
			<a href="my.php?item=subscriptions&amp;subadd=22983" id="ajax_subscription" onclick="ajaxmenu(event, this.id, 3000, null, 0)">订阅</a>
			<a href="misc.php?action=emailfriend&amp;tid=22983" id="emailfriend" onclick="ajaxmenu(event, this.id, 9000000, null, 0)">推荐</a>
				<a href="viewthread.php?action=printable&amp;tid=22983" target="_blank" class="notabs">打印</a>
				</span>
		<h1>提供一个弱加密的网页代理来帮助紧急情况下访问互联网（已恢复）		</h1>
				<ins>
						<a href="misc.php?action=viewthreadmod&amp;tid=22983" title="主题操作记录" target="_blank">本主题由 库存袈裟 于 2009-12-22 16:01 分类</a>								</ins>
							<table id="pid252336" summary="pid252336" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8710" target="_blank" id="userinfo252336" class="dropmenu" onmouseover="showMenu(this.id)">陈少举</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">国服六区海达西亚联盟暗夜精灵牧师/部落血精灵牧师/台服奥尼克西亚联盟暗夜精灵牧师</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8710">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8710&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_0" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum252336" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=22983&page=1#pid252336', '话题链接已经复制到剪贴板')">1楼</strong>
													<em onclick="$('postmessage_252336').className='t_bigfont'">大</em>							<em onclick="$('postmessage_252336').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_252336').className='t_smallfont'">小</em>												发表于 2009-9-22 09:49&nbsp;																					<a href="viewthread.php?tid=22983&amp;page=1&amp;authorid=8710" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_0"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_0"></div><div id="ad_thread4_0"></div>
													<h2>提供一个弱加密的网页代理来帮助紧急情况下访问互联网（已恢复）</h2>
						
						
																											<div id="postmessage_252336" class="t_msgfont">地址已迁移，请访问：<br />
<a href="https://1984bbs.com/viewthread.php?tid=32745" target="_blank">https://1984bbs.com/viewthread.php?tid=32745</a><br />
<br />
[<i> 本帖最后由 陈少举 于 2009-12-28 10:53 编辑 </i>]</div>

							
							
							
							
															<div id="post_rate_div_252336"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo252336_menu" style="display: none;">
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
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=22983&amp;repquote=252336&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 252336)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_0"></div>				</div>
			</td>
		</tr>
		</table>
		</div><div class="ad_column" id="ad_interthread"><a href="/viewthread.php?tid=54699" target="_blank" style="color:red;">1984bbs是一个非营利项目，它需要您的捐助！</font></a>		</div>
	<div class="mainbox viewthread">
			<table id="pid252402" summary="pid252402" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7002" target="_blank" id="userinfo252402" class="dropmenu" onmouseover="showMenu(this.id)">luugoo</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">拖延心理学：向与生俱来的行为顽症宣战】https://1984bbs.com/viewthread.php?tid=60185</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7002">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7002&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_1" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum252402" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=22983&page=1#pid252402', '话题链接已经复制到剪贴板')">2楼</strong>
													<em onclick="$('postmessage_252402').className='t_bigfont'">大</em>							<em onclick="$('postmessage_252402').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_252402').className='t_smallfont'">小</em>												发表于 2009-9-22 10:30&nbsp;																					<a href="viewthread.php?tid=22983&amp;page=1&amp;authorid=7002" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_1"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_1"></div><div id="ad_thread4_1"></div>
						
						
																											<div id="postmessage_252402" class="t_msgfont">速度不错，赞一个~</div>

							
							
							
							
															<div id="post_rate_div_252402"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo252402_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=7002" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=22983&amp;repquote=252402&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 252402)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_1"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid252408" summary="pid252408" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6518" target="_blank" id="userinfo252408" class="dropmenu" onmouseover="showMenu(this.id)">id已被绿坝屏蔽</a></cite>
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
						<strong title="复制话题链接到剪贴板" id="postnum252408" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=22983&page=1#pid252408', '话题链接已经复制到剪贴板')">3楼</strong>
													<em onclick="$('postmessage_252408').className='t_bigfont'">大</em>							<em onclick="$('postmessage_252408').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_252408').className='t_smallfont'">小</em>												发表于 2009-9-22 10:32&nbsp;																					<a href="viewthread.php?tid=22983&amp;page=1&amp;authorid=6518" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_2"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_2"></div><div id="ad_thread4_2"></div>
						
						
																											<div id="postmessage_252408" class="t_msgfont">囧。。。我也是dreamhost+glype</div>

							
							
							
							
															<div id="post_rate_div_252408"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo252408_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=6518" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=22983&amp;repquote=252408&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 252408)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_2"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid252409" summary="pid252409" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6518" target="_blank" id="userinfo252409" class="dropmenu" onmouseover="showMenu(this.id)">id已被绿坝屏蔽</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">闃呭悗鍗崇剼</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6518">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6518&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_3" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum252409" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=22983&page=1#pid252409', '话题链接已经复制到剪贴板')">4楼</strong>
													<em onclick="$('postmessage_252409').className='t_bigfont'">大</em>							<em onclick="$('postmessage_252409').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_252409').className='t_smallfont'">小</em>												发表于 2009-9-22 10:33&nbsp;																					<a href="viewthread.php?tid=22983&amp;page=1&amp;authorid=6518" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_3"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_3"></div><div id="ad_thread4_3"></div>
						
						
																											<div id="postmessage_252409" class="t_msgfont">囧。原来楼猪是陈少举</div>

							
							
							
							
															<div id="post_rate_div_252409"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo252409_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=6518" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=22983&amp;repquote=252409&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 252409)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_3"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid252424" summary="pid252424" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1909" target="_blank" id="userinfo252424" class="dropmenu" onmouseover="showMenu(this.id)">单手扶墙</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">活了几十年年，没能为党为人民做点什么，每思及此，心神不宁。</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1909">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1909&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_4" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum252424" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=22983&page=1#pid252424', '话题链接已经复制到剪贴板')">5楼</strong>
													<em onclick="$('postmessage_252424').className='t_bigfont'">大</em>							<em onclick="$('postmessage_252424').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_252424').className='t_smallfont'">小</em>												发表于 2009-9-22 10:41&nbsp;																					<a href="viewthread.php?tid=22983&amp;page=1&amp;authorid=1909" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_4"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_4"></div><div id="ad_thread4_4"></div>
						
						
																											<div id="postmessage_252424" class="t_msgfont">不错。。测试了。。不过要能晓得准确网址了。。我也就已经翻墙出去了啊。。</div>

							
							
							
							
															<div id="post_rate_div_252424"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo252424_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1909" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=22983&amp;repquote=252424&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 252424)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_4"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid252618" summary="pid252618" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2213" target="_blank" id="userinfo252618" class="dropmenu" onmouseover="showMenu(this.id)">核子力量</a></cite>
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
						<strong title="复制话题链接到剪贴板" id="postnum252618" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=22983&page=1#pid252618', '话题链接已经复制到剪贴板')">6楼</strong>
													<em onclick="$('postmessage_252618').className='t_bigfont'">大</em>							<em onclick="$('postmessage_252618').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_252618').className='t_smallfont'">小</em>												发表于 2009-9-22 12:50&nbsp;																					<a href="viewthread.php?tid=22983&amp;page=1&amp;authorid=2213" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_5"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_5"></div><div id="ad_thread4_5"></div>
						
						
																											<div id="postmessage_252618" class="t_msgfont">多谢楼主</div>

							
							
							
							
															<div id="post_rate_div_252618"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo252618_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://twitter.com/hzpower" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=2213" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=22983&amp;repquote=252618&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 252618)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_5"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid252638" summary="pid252638" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7853" target="_blank" id="userinfo252638" class="dropmenu" onmouseover="showMenu(this.id)">智障大师Elsker</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">三民主义,吾党所宗</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7853">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7853&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_6" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum252638" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=22983&page=1#pid252638', '话题链接已经复制到剪贴板')">7楼</strong>
													<em onclick="$('postmessage_252638').className='t_bigfont'">大</em>							<em onclick="$('postmessage_252638').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_252638').className='t_smallfont'">小</em>												发表于 2009-9-22 13:01&nbsp;																					<a href="viewthread.php?tid=22983&amp;page=1&amp;authorid=7853" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_6"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_6"></div><div id="ad_thread4_6"></div>
													<h2>做个记号</h2>
						
						
																											<div id="postmessage_252638" class="t_msgfont">哈哈</div>

							
							
							
							
															<div id="post_rate_div_252638"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo252638_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=7853" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=22983&amp;repquote=252638&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 252638)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_6"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid253056" summary="pid253056" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=250" target="_blank" id="userinfo253056" class="dropmenu" onmouseover="showMenu(this.id)">dada</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">不明真相群众</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=250">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=250&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_7" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum253056" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=22983&page=1#pid253056', '话题链接已经复制到剪贴板')">8楼</strong>
													<em onclick="$('postmessage_253056').className='t_bigfont'">大</em>							<em onclick="$('postmessage_253056').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_253056').className='t_smallfont'">小</em>												发表于 2009-9-22 19:07&nbsp;																					<a href="viewthread.php?tid=22983&amp;page=1&amp;authorid=250" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_7"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_7"></div><div id="ad_thread4_7"></div>
						
						
																											<div id="postmessage_253056" class="t_msgfont">这个东东不错</div>

							
							
							
							
															<div id="post_rate_div_253056"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo253056_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=250" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=22983&amp;repquote=253056&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 253056)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_7"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid253065" summary="pid253065" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2930" target="_blank" id="userinfo253065" class="dropmenu" onmouseover="showMenu(this.id)">SrAcer</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">党强加于人的世界观在无法理解它的人们那里最容易被接受。——《１９８４》</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2930">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2930&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_8" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum253065" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=22983&page=1#pid253065', '话题链接已经复制到剪贴板')">9楼</strong>
													<em onclick="$('postmessage_253065').className='t_bigfont'">大</em>							<em onclick="$('postmessage_253065').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_253065').className='t_smallfont'">小</em>												发表于 2009-9-22 19:13&nbsp;																					<a href="viewthread.php?tid=22983&amp;page=1&amp;authorid=2930" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_8"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_8"></div><div id="ad_thread4_8"></div>
						
						
																											<div id="postmessage_253065" class="t_msgfont">这是白痴贴的遗迹<br />
<br />
[<i> 本帖最后由 SrAcer 于 2009-9-23 00:44 编辑 </i>]</div>

							
							
							
							
															<div id="post_rate_div_253065"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo253065_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=2930" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=22983&amp;repquote=253065&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 253065)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_8"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid253132" summary="pid253132" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7500" target="_blank" id="userinfo253132" class="dropmenu" onmouseover="showMenu(this.id)">喵喵呜</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">农村驻城市观察员，二舅母驻城联络处主任，村书记指定网络潜伏工作者……</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7500">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7500&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_9" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum253132" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=22983&page=1#pid253132', '话题链接已经复制到剪贴板')">10楼</strong>
													<em onclick="$('postmessage_253132').className='t_bigfont'">大</em>							<em onclick="$('postmessage_253132').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_253132').className='t_smallfont'">小</em>												发表于 2009-9-22 20:26&nbsp;																					<a href="viewthread.php?tid=22983&amp;page=1&amp;authorid=7500" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_9"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_9"></div><div id="ad_thread4_9"></div>
						
						
																											<div id="postmessage_253132" class="t_msgfont">太感谢了</div>

							
							
							
							
															<div id="post_rate_div_253132"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo253132_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=7500" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=22983&amp;repquote=253132&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 253132)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_9"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid253350" summary="pid253350" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8705" target="_blank" id="userinfo253350" class="dropmenu" onmouseover="showMenu(this.id)">littail</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">防火防盗防政府</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8705">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8705&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_10" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum253350" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=22983&page=1#pid253350', '话题链接已经复制到剪贴板')">11楼</strong>
													<em onclick="$('postmessage_253350').className='t_bigfont'">大</em>							<em onclick="$('postmessage_253350').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_253350').className='t_smallfont'">小</em>												发表于 2009-9-22 23:37&nbsp;																					<a href="viewthread.php?tid=22983&amp;page=1&amp;authorid=8705" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_10"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_10"></div><div id="ad_thread4_10"></div>
						
						
																											<div id="postmessage_253350" class="t_msgfont">连明会网都可以打开</div>

							
							
							
							
															<div id="post_rate_div_253350"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo253350_menu" style="display: none;">
										<div class="imicons">
													<a target='_blank' href='http://settings.messenger.live.com/Conversation/IMMe.aspx?invitee=yangmengfan@hotmail.com&mkt=zh-cn'><img style='border-style: none;' src='http://messenger.services.live.com/users/yangmengfan@hotmail.com/presenceimage?mkt=zh-cn' width='16' height='16' /></a>
												<a href="http://wpa.qq.com/msgrd?V=1&amp;Uin=136812409&amp;Site=1984bbs.com&amp;Menu=yes" target="_blank"><img src="images/default/qq.gif" alt="QQ" /></a>												<a href="http://edit.yahoo.com/config/send_webmesg?.target=littail2004@yahoo.com.cn&amp;.src=pg" target="_blank"><img src="images/default/yahoo.gif" alt="Yahoo!"  /></a>											</div>
										<dl></dl>
										<p><a href="space.php?uid=8705" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=22983&amp;repquote=253350&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 253350)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_10"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid253418" summary="pid253418" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=3886" target="_blank" id="userinfo253418" class="dropmenu" onmouseover="showMenu(this.id)">tolo</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=3886">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=3886&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_11" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum253418" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=22983&page=1#pid253418', '话题链接已经复制到剪贴板')">12楼</strong>
													<em onclick="$('postmessage_253418').className='t_bigfont'">大</em>							<em onclick="$('postmessage_253418').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_253418').className='t_smallfont'">小</em>												发表于 2009-9-23 02:13&nbsp;																					<a href="viewthread.php?tid=22983&amp;page=1&amp;authorid=3886" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_11"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_11"></div><div id="ad_thread4_11"></div>
						
						
																											<div id="postmessage_253418" class="t_msgfont">速度不错</div>

							
							
							
							
															<div id="post_rate_div_253418"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo253418_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=3886" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=22983&amp;repquote=253418&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 253418)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_11"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid253433" summary="pid253433" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7813" target="_blank" id="userinfo253433" class="dropmenu" onmouseover="showMenu(this.id)">qybear</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7813">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7813&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_12" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum253433" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=22983&page=1#pid253433', '话题链接已经复制到剪贴板')">13楼</strong>
													<em onclick="$('postmessage_253433').className='t_bigfont'">大</em>							<em onclick="$('postmessage_253433').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_253433').className='t_smallfont'">小</em>												发表于 2009-9-23 03:18&nbsp;																					<a href="viewthread.php?tid=22983&amp;page=1&amp;authorid=7813" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_12"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_12"></div><div id="ad_thread4_12"></div>
						
						
																											<div id="postmessage_253433" class="t_msgfont">收藏了，谢谢。</div>

							
							
							
							
															<div id="post_rate_div_253433"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo253433_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=7813" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=22983&amp;repquote=253433&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 253433)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_12"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid253460" summary="pid253460" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=239" target="_blank" id="userinfo253460" class="dropmenu" onmouseover="showMenu(this.id)">冷眼看世界</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">用我自己的眼睛看清这个黑白不明的世界。</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=239">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=239&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_13" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum253460" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=22983&page=1#pid253460', '话题链接已经复制到剪贴板')">14楼</strong>
													<em onclick="$('postmessage_253460').className='t_bigfont'">大</em>							<em onclick="$('postmessage_253460').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_253460').className='t_smallfont'">小</em>												发表于 2009-9-23 07:58&nbsp;																					<a href="viewthread.php?tid=22983&amp;page=1&amp;authorid=239" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_13"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_13"></div><div id="ad_thread4_13"></div>
						
						
																											<div id="postmessage_253460" class="t_msgfont">速度不错，收藏了。</div>

							
							
							
							
															<div id="post_rate_div_253460"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo253460_menu" style="display: none;">
										<div class="imicons">
												<a href="http://wpa.qq.com/msgrd?V=1&amp;Uin=641133856&amp;Site=1984bbs.com&amp;Menu=yes" target="_blank"><img src="images/default/qq.gif" alt="QQ" /></a>												<a href="http://edit.yahoo.com/config/send_webmesg?.target=dhj641133856@yahoo.com.cn&amp;.src=pg" target="_blank"><img src="images/default/yahoo.gif" alt="Yahoo!"  /></a>											</div>
										<dl></dl>
										<p><a href="space.php?uid=239" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=22983&amp;repquote=253460&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 253460)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_13"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid253490" summary="pid253490" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7002" target="_blank" id="userinfo253490" class="dropmenu" onmouseover="showMenu(this.id)">luugoo</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">拖延心理学：向与生俱来的行为顽症宣战】https://1984bbs.com/viewthread.php?tid=60185</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7002">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7002&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_14" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum253490" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=22983&page=1#pid253490', '话题链接已经复制到剪贴板')">15楼</strong>
													<em onclick="$('postmessage_253490').className='t_bigfont'">大</em>							<em onclick="$('postmessage_253490').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_253490').className='t_smallfont'">小</em>												发表于 2009-9-23 08:50&nbsp;																					<a href="viewthread.php?tid=22983&amp;page=1&amp;authorid=7002" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_14"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_14"></div><div id="ad_thread4_14"></div>
						
						
																											<div id="postmessage_253490" class="t_msgfont">今天访问<a href="http://www.mingpao.com" target="_blank">http://www.mingpao.com</a>，怎么都是乱码呐？</div>

							
							
							
							
															<div id="post_rate_div_253490"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo253490_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=7002" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=22983&amp;repquote=253490&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 253490)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_14"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid255129" summary="pid255129" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8710" target="_blank" id="userinfo255129" class="dropmenu" onmouseover="showMenu(this.id)">陈少举</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">国服六区海达西亚联盟暗夜精灵牧师/部落血精灵牧师/台服奥尼克西亚联盟暗夜精灵牧师</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8710">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8710&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_15" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum255129" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=22983&page=1#pid255129', '话题链接已经复制到剪贴板')">16楼</strong>
													<em onclick="$('postmessage_255129').className='t_bigfont'">大</em>							<em onclick="$('postmessage_255129').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_255129').className='t_smallfont'">小</em>												发表于 2009-9-24 11:25&nbsp;																					<a href="viewthread.php?tid=22983&amp;page=1&amp;authorid=8710" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_15"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_15"></div><div id="ad_thread4_15"></div>
						
						
																											<div id="postmessage_255129" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>luugoo</i> 于 2009-9-23 08:50 发表 <a href="http://www.1984bbs.com/redirect.php?goto=findpost&amp;pid=253490&amp;ptid=22983" target="_blank"><img src="http://www.1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
今天访问<a href="http://www.mingpao.com" target="_blank">http://www.mingpao.com</a>，怎么都是乱码呐？ </blockquote></div>这说明网页的编码可能有问题……GP代理是UTF-8的，可能Mingpao是其他编码……你可以手动设定浏览器的编码方式。</div>

							
							
							
							
															<div id="post_rate_div_255129"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo255129_menu" style="display: none;">
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
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=22983&amp;repquote=255129&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 255129)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_15"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid255155" summary="pid255155" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2930" target="_blank" id="userinfo255155" class="dropmenu" onmouseover="showMenu(this.id)">SrAcer</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">党强加于人的世界观在无法理解它的人们那里最容易被接受。——《１９８４》</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2930">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2930&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_16" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum255155" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=22983&page=1#pid255155', '话题链接已经复制到剪贴板')">17楼</strong>
													<em onclick="$('postmessage_255155').className='t_bigfont'">大</em>							<em onclick="$('postmessage_255155').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_255155').className='t_smallfont'">小</em>												发表于 2009-9-24 11:47&nbsp;																					<a href="viewthread.php?tid=22983&amp;page=1&amp;authorid=2930" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_16"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_16"></div><div id="ad_thread4_16"></div>
						
						
																											<div id="postmessage_255155" class="t_msgfont">打不开牛博呀。</div>

							
							
							
							
															<div id="post_rate_div_255155"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo255155_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=2930" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=22983&amp;repquote=255155&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 255155)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_16"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid255206" summary="pid255206" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=4510" target="_blank" id="userinfo255206" class="dropmenu" onmouseover="showMenu(this.id)">winxp</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">一獨眼人誤吞了自己的假眼，卡在了肛門，肛门科太夫張書記拿著放大鏡檢查，被嚇暈了過去，醒來以後說，我他媽看了一輩子的屁眼兒，沒想到今天被屁眼兒看了一眼。</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=4510">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=4510&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_17" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum255206" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=22983&page=1#pid255206', '话题链接已经复制到剪贴板')">18楼</strong>
													<em onclick="$('postmessage_255206').className='t_bigfont'">大</em>							<em onclick="$('postmessage_255206').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_255206').className='t_smallfont'">小</em>												发表于 2009-9-24 12:14&nbsp;																					<a href="viewthread.php?tid=22983&amp;page=1&amp;authorid=4510" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_17"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_17"></div><div id="ad_thread4_17"></div>
						
						
																											<div id="postmessage_255206" class="t_msgfont">幸會，訂閲過樓主的博客：）</div>

							
							
							
							
															<div id="post_rate_div_255206"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo255206_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=4510" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=22983&amp;repquote=255206&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 255206)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_17"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid255248" summary="pid255248" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8710" target="_blank" id="userinfo255248" class="dropmenu" onmouseover="showMenu(this.id)">陈少举</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">国服六区海达西亚联盟暗夜精灵牧师/部落血精灵牧师/台服奥尼克西亚联盟暗夜精灵牧师</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8710">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8710&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_18" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum255248" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=22983&page=1#pid255248', '话题链接已经复制到剪贴板')">19楼</strong>
													<em onclick="$('postmessage_255248').className='t_bigfont'">大</em>							<em onclick="$('postmessage_255248').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_255248').className='t_smallfont'">小</em>												发表于 2009-9-24 12:47&nbsp;																					<a href="viewthread.php?tid=22983&amp;page=1&amp;authorid=8710" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_18"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_18"></div><div id="ad_thread4_18"></div>
													<h2>回复 17楼 SrAcer 的话题</h2>
						
						
																											<div id="postmessage_255248" class="t_msgfont">牛博首页好像是打不开，但是打开具体的页面内容，比如： <a href="http://www.bullogger.com/blogs/yeeyan/archives/342538.aspx" target="_blank">http://www.bullogger.com/blogs/yeeyan/archives/342538.aspx</a> 就可以，好像什么地方有问题。</div>

							
							
							
							
															<div id="post_rate_div_255248"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo255248_menu" style="display: none;">
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
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=22983&amp;repquote=255248&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 255248)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_18"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid255792" summary="pid255792" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7710" target="_blank" id="userinfo255792" class="dropmenu" onmouseover="showMenu(this.id)">czj620621</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7710">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7710&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_19" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum255792" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=22983&page=1#pid255792', '话题链接已经复制到剪贴板')">20楼</strong>
													<em onclick="$('postmessage_255792').className='t_bigfont'">大</em>							<em onclick="$('postmessage_255792').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_255792').className='t_smallfont'">小</em>												发表于 2009-9-24 18:29&nbsp;																					<a href="viewthread.php?tid=22983&amp;page=1&amp;authorid=7710" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_19"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_19"></div><div id="ad_thread4_19"></div>
						
						
																											<div id="postmessage_255792" class="t_msgfont">哈，，谢谢</div>

							
							
							
							
															<div id="post_rate_div_255792"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo255792_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=7710" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=22983&amp;repquote=255792&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 255792)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_19"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid255864" summary="pid255864" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=3354" target="_blank" id="userinfo255864" class="dropmenu" onmouseover="showMenu(this.id)">SLBEE</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=3354">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=3354&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_20" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum255864" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=22983&page=1#pid255864', '话题链接已经复制到剪贴板')">21楼</strong>
													<em onclick="$('postmessage_255864').className='t_bigfont'">大</em>							<em onclick="$('postmessage_255864').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_255864').className='t_smallfont'">小</em>												发表于 2009-9-24 19:12&nbsp;																					<a href="viewthread.php?tid=22983&amp;page=1&amp;authorid=3354" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_20"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_20"></div><div id="ad_thread4_20"></div>
						
						
																											<div id="postmessage_255864" class="t_msgfont">刚才试的，用CHROME打不开，用FF试了也不行</div>

							
							
							
							
															<div id="post_rate_div_255864"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo255864_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=3354" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=22983&amp;repquote=255864&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 255864)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_20"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid255919" summary="pid255919" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7939" target="_blank" id="userinfo255919" class="dropmenu" onmouseover="showMenu(this.id)">刘项</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7939">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7939&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_21" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum255919" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=22983&page=1#pid255919', '话题链接已经复制到剪贴板')">22楼</strong>
													<em onclick="$('postmessage_255919').className='t_bigfont'">大</em>							<em onclick="$('postmessage_255919').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_255919').className='t_smallfont'">小</em>												发表于 2009-9-24 19:47&nbsp;																					<a href="viewthread.php?tid=22983&amp;page=1&amp;authorid=7939" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_21"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_21"></div><div id="ad_thread4_21"></div>
						
						
																											<div id="postmessage_255919" class="t_msgfont">太感谢了，一天之内，我所有的翻墙家什都玩了，就楼主这个还可以！</div>

							
							
							
							
															<div id="post_rate_div_255919"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo255919_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=7939" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=22983&amp;repquote=255919&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 255919)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_21"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid256978" summary="pid256978" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=479" target="_blank" id="userinfo256978" class="dropmenu" onmouseover="showMenu(this.id)">无机客</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=479">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=479&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_22" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum256978" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=22983&page=1#pid256978', '话题链接已经复制到剪贴板')">23楼</strong>
													<em onclick="$('postmessage_256978').className='t_bigfont'">大</em>							<em onclick="$('postmessage_256978').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_256978').className='t_smallfont'">小</em>												发表于 2009-9-25 12:08&nbsp;																					<a href="viewthread.php?tid=22983&amp;page=1&amp;authorid=479" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_22"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_22"></div><div id="ad_thread4_22"></div>
						
						
																											<div id="postmessage_256978" class="t_msgfont">楼主，贡献了一个大好的东西！</div>

							
							
							
							
															<div id="post_rate_div_256978"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo256978_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=479" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=22983&amp;repquote=256978&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 256978)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_22"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid258819" summary="pid258819" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=4231" target="_blank" id="userinfo258819" class="dropmenu" onmouseover="showMenu(this.id)">dangqu</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=4231">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=4231&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_23" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum258819" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=22983&page=1#pid258819', '话题链接已经复制到剪贴板')">24楼</strong>
													<em onclick="$('postmessage_258819').className='t_bigfont'">大</em>							<em onclick="$('postmessage_258819').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_258819').className='t_smallfont'">小</em>												发表于 2009-9-26 15:17&nbsp;																					<a href="viewthread.php?tid=22983&amp;page=1&amp;authorid=4231" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_23"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_23"></div><div id="ad_thread4_23"></div>
						
						
																											<div id="postmessage_258819" class="t_msgfont">大家最好轻易别用，注意保密</div>

							
							
							
							
															<div id="post_rate_div_258819"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo258819_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=4231" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=22983&amp;repquote=258819&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 258819)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_23"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid258893" summary="pid258893" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6327" target="_blank" id="userinfo258893" class="dropmenu" onmouseover="showMenu(this.id)">chandler0819</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">@chandler0819</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6327">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6327&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_24" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum258893" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=22983&page=1#pid258893', '话题链接已经复制到剪贴板')">25楼</strong>
													<em onclick="$('postmessage_258893').className='t_bigfont'">大</em>							<em onclick="$('postmessage_258893').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_258893').className='t_smallfont'">小</em>												发表于 2009-9-26 17:00&nbsp;																					<a href="viewthread.php?tid=22983&amp;page=1&amp;authorid=6327" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_24"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_24"></div><div id="ad_thread4_24"></div>
						
						
																											<div id="postmessage_258893" class="t_msgfont">chrome正常使用<br />
谢楼主!</div>

							
							
							
							
															<div id="post_rate_div_258893"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo258893_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=6327" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=22983&amp;repquote=258893&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 258893)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_24"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid259567" summary="pid259567" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=4497" target="_blank" id="userinfo259567" class="dropmenu" onmouseover="showMenu(this.id)">janetYan</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=4497">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=4497&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_25" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum259567" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=22983&page=1#pid259567', '话题链接已经复制到剪贴板')">26楼</strong>
													<em onclick="$('postmessage_259567').className='t_bigfont'">大</em>							<em onclick="$('postmessage_259567').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_259567').className='t_smallfont'">小</em>												发表于 2009-9-27 07:32&nbsp;																					<a href="viewthread.php?tid=22983&amp;page=1&amp;authorid=4497" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_25"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_25"></div><div id="ad_thread4_25"></div>
						
						
																											<div id="postmessage_259567" class="t_msgfont">楼主是好人，nnd，老gong连vim.wikia.com也封，丧心病狂啊</div>

							
							
							
							
															<div id="post_rate_div_259567"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo259567_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=4497" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=22983&amp;repquote=259567&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 259567)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_25"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid259871" summary="pid259871" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7002" target="_blank" id="userinfo259871" class="dropmenu" onmouseover="showMenu(this.id)">luugoo</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">拖延心理学：向与生俱来的行为顽症宣战】https://1984bbs.com/viewthread.php?tid=60185</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7002">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7002&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_26" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum259871" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=22983&page=1#pid259871', '话题链接已经复制到剪贴板')">27楼</strong>
													<em onclick="$('postmessage_259871').className='t_bigfont'">大</em>							<em onclick="$('postmessage_259871').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_259871').className='t_smallfont'">小</em>												发表于 2009-9-27 11:40&nbsp;																					<a href="viewthread.php?tid=22983&amp;page=1&amp;authorid=7002" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_26"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_26"></div><div id="ad_thread4_26"></div>
						
						
																											<div id="postmessage_259871" class="t_msgfont">靠，封了</div>

							
							
							
							
															<div id="post_rate_div_259871"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo259871_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=7002" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=22983&amp;repquote=259871&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 259871)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_26"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid263141" summary="pid263141" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8710" target="_blank" id="userinfo263141" class="dropmenu" onmouseover="showMenu(this.id)">陈少举</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">国服六区海达西亚联盟暗夜精灵牧师/部落血精灵牧师/台服奥尼克西亚联盟暗夜精灵牧师</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8710">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8710&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_27" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum263141" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=22983&page=1#pid263141', '话题链接已经复制到剪贴板')">28楼</strong>
													<em onclick="$('postmessage_263141').className='t_bigfont'">大</em>							<em onclick="$('postmessage_263141').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_263141').className='t_smallfont'">小</em>												发表于 2009-9-29 13:51&nbsp;																					<a href="viewthread.php?tid=22983&amp;page=1&amp;authorid=8710" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_27"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_27"></div><div id="ad_thread4_27"></div>
						
						
																											<div id="postmessage_263141" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>luugoo</i> 于 2009-9-27 11:40 发表 <a href="http://www.1984bbs.com/redirect.php?goto=findpost&amp;pid=259871&amp;ptid=22983" target="_blank"><img src="http://www.1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
靠，封了 </blockquote></div>唔，北京电信还能打开……</div>

							
							
							
							
															<div id="post_rate_div_263141"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo263141_menu" style="display: none;">
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
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=22983&amp;repquote=263141&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 263141)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_27"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid303691" summary="pid303691" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8710" target="_blank" id="userinfo303691" class="dropmenu" onmouseover="showMenu(this.id)">陈少举</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">国服六区海达西亚联盟暗夜精灵牧师/部落血精灵牧师/台服奥尼克西亚联盟暗夜精灵牧师</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8710">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8710&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_28" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum303691" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=22983&page=1#pid303691', '话题链接已经复制到剪贴板')">29楼</strong>
													<em onclick="$('postmessage_303691').className='t_bigfont'">大</em>							<em onclick="$('postmessage_303691').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_303691').className='t_smallfont'">小</em>												发表于 2009-10-28 15:55&nbsp;																					<a href="viewthread.php?tid=22983&amp;page=1&amp;authorid=8710" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_28"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_28"></div><div id="ad_thread4_28"></div>
						
						
																											<div id="postmessage_303691" class="t_msgfont">代理地址于今天更新～</div>

							
							
							
							
															<div id="post_rate_div_303691"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo303691_menu" style="display: none;">
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
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=22983&amp;repquote=303691&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 303691)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_28"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid304800" summary="pid304800" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=479" target="_blank" id="userinfo304800" class="dropmenu" onmouseover="showMenu(this.id)">无机客</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=479">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=479&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_29" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum304800" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=22983&page=1#pid304800', '话题链接已经复制到剪贴板')">30楼</strong>
													<em onclick="$('postmessage_304800').className='t_bigfont'">大</em>							<em onclick="$('postmessage_304800').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_304800').className='t_smallfont'">小</em>												发表于 2009-10-29 11:59&nbsp;																					<a href="viewthread.php?tid=22983&amp;page=1&amp;authorid=479" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_29"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_29"></div><div id="ad_thread4_29"></div>
						
						
																											<div id="postmessage_304800" class="t_msgfont">谢谢楼主！</div>

							
							
							
							
															<div id="post_rate_div_304800"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo304800_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=479" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=22983&amp;repquote=304800&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 304800)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_29"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid313814" summary="pid313814" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=479" target="_blank" id="userinfo313814" class="dropmenu" onmouseover="showMenu(this.id)">无机客</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=479">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=479&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_30" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum313814" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=22983&page=1#pid313814', '话题链接已经复制到剪贴板')">31楼</strong>
													<em onclick="$('postmessage_313814').className='t_bigfont'">大</em>							<em onclick="$('postmessage_313814').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_313814').className='t_smallfont'">小</em>												发表于 2009-11-4 22:52&nbsp;																					<a href="viewthread.php?tid=22983&amp;page=1&amp;authorid=479" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_30"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_30"></div><div id="ad_thread4_30"></div>
						
						
																											<div id="postmessage_313814" class="t_msgfont">楼主，访问这个代理遇上busy，是正常情况么？</div>

							
							
							
							
															<div id="post_rate_div_313814"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo313814_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=479" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=22983&amp;repquote=313814&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 313814)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_30"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid313824" summary="pid313824" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=479" target="_blank" id="userinfo313824" class="dropmenu" onmouseover="showMenu(this.id)">无机客</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=479">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=479&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_31" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum313824" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=22983&page=1#pid313824', '话题链接已经复制到剪贴板')">32楼</strong>
													<em onclick="$('postmessage_313824').className='t_bigfont'">大</em>							<em onclick="$('postmessage_313824').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_313824').className='t_smallfont'">小</em>												发表于 2009-11-4 23:07&nbsp;																					<a href="viewthread.php?tid=22983&amp;page=1&amp;authorid=479" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_31"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_31"></div><div id="ad_thread4_31"></div>
						
						
																											<div id="postmessage_313824" class="t_msgfont">The server is currently busy and unable to process your request. Please try again in a few minutes. We apologise for any inconvenience.</div>

							
							
							
							
															<div id="post_rate_div_313824"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo313824_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=479" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=22983&amp;repquote=313824&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 313824)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_31"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid318080" summary="pid318080" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8710" target="_blank" id="userinfo318080" class="dropmenu" onmouseover="showMenu(this.id)">陈少举</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">国服六区海达西亚联盟暗夜精灵牧师/部落血精灵牧师/台服奥尼克西亚联盟暗夜精灵牧师</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8710">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8710&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_32" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum318080" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=22983&page=1#pid318080', '话题链接已经复制到剪贴板')">33楼</strong>
													<em onclick="$('postmessage_318080').className='t_bigfont'">大</em>							<em onclick="$('postmessage_318080').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_318080').className='t_smallfont'">小</em>												发表于 2009-11-8 00:55&nbsp;																					<a href="viewthread.php?tid=22983&amp;page=1&amp;authorid=8710" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_32"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_32"></div><div id="ad_thread4_32"></div>
						
						
																											<div id="postmessage_318080" class="t_msgfont">可能用的人比较多……所以……<br />
<br />
我已经调高了服务器的负载，应该会好些了。</div>

							
							
							
							
															<div id="post_rate_div_318080"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo318080_menu" style="display: none;">
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
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=22983&amp;repquote=318080&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 318080)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_32"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid318631" summary="pid318631" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8567" target="_blank" id="userinfo318631" class="dropmenu" onmouseover="showMenu(this.id)">笑颜莫改</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8567">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8567&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_33" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum318631" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=22983&page=1#pid318631', '话题链接已经复制到剪贴板')">34楼</strong>
													<em onclick="$('postmessage_318631').className='t_bigfont'">大</em>							<em onclick="$('postmessage_318631').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_318631').className='t_smallfont'">小</em>												发表于 2009-11-8 15:55&nbsp;																					<a href="viewthread.php?tid=22983&amp;page=1&amp;authorid=8567" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_33"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_33"></div><div id="ad_thread4_33"></div>
						
						
																											<div id="postmessage_318631" class="t_msgfont">感觉lz太牛逼了。。又干净又快</div>

							
							
							
							
															<div id="post_rate_div_318631"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo318631_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=8567" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=22983&amp;repquote=318631&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 318631)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_33"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid323752" summary="pid323752" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=479" target="_blank" id="userinfo323752" class="dropmenu" onmouseover="showMenu(this.id)">无机客</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=479">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=479&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_34" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum323752" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=22983&page=1#pid323752', '话题链接已经复制到剪贴板')">35楼</strong>
													<em onclick="$('postmessage_323752').className='t_bigfont'">大</em>							<em onclick="$('postmessage_323752').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_323752').className='t_smallfont'">小</em>												发表于 2009-11-12 09:29&nbsp;																					<a href="viewthread.php?tid=22983&amp;page=1&amp;authorid=479" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_34"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_34"></div><div id="ad_thread4_34"></div>
						
						
																											<div id="postmessage_323752" class="t_msgfont">向可敬的楼主报告，现在的地址似乎被墙了。</div>

							
							
							
							
															<div id="post_rate_div_323752"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo323752_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=479" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=22983&amp;repquote=323752&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 323752)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_34"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid324879" summary="pid324879" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6523" target="_blank" id="userinfo324879" class="dropmenu" onmouseover="showMenu(this.id)">自由西瓜</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6523">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6523&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_35" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum324879" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=22983&page=1#pid324879', '话题链接已经复制到剪贴板')">36楼</strong>
													<em onclick="$('postmessage_324879').className='t_bigfont'">大</em>							<em onclick="$('postmessage_324879').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_324879').className='t_smallfont'">小</em>												发表于 2009-11-12 23:50&nbsp;																					<a href="viewthread.php?tid=22983&amp;page=1&amp;authorid=6523" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_35"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_35"></div><div id="ad_thread4_35"></div>
						
						
																											<div id="postmessage_324879" class="t_msgfont">相当好用！但貌视现在这个也404了，期待少举兄的新地址！</div>

							
							
							
							
															<div id="post_rate_div_324879"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo324879_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=6523" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=22983&amp;repquote=324879&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 324879)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_35"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid325272" summary="pid325272" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=9611" target="_blank" id="userinfo325272" class="dropmenu" onmouseover="showMenu(this.id)">ericrazy</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">民工丙</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=9611">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=9611&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_36" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum325272" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=22983&page=1#pid325272', '话题链接已经复制到剪贴板')">37楼</strong>
													<em onclick="$('postmessage_325272').className='t_bigfont'">大</em>							<em onclick="$('postmessage_325272').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_325272').className='t_smallfont'">小</em>												发表于 2009-11-13 11:50&nbsp;																					<a href="viewthread.php?tid=22983&amp;page=1&amp;authorid=9611" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_36"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_36"></div><div id="ad_thread4_36"></div>
						
						
																											<div id="postmessage_325272" class="t_msgfont">噢妈妈维亚~打不开</div>

							
							
							
							
															<div id="post_rate_div_325272"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo325272_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=9611" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=22983&amp;repquote=325272&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 325272)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_36"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid328086" summary="pid328086" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6523" target="_blank" id="userinfo328086" class="dropmenu" onmouseover="showMenu(this.id)">自由西瓜</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6523">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6523&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_37" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum328086" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=22983&page=1#pid328086', '话题链接已经复制到剪贴板')">38楼</strong>
													<em onclick="$('postmessage_328086').className='t_bigfont'">大</em>							<em onclick="$('postmessage_328086').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_328086').className='t_smallfont'">小</em>												发表于 2009-11-15 21:05&nbsp;																					<a href="viewthread.php?tid=22983&amp;page=1&amp;authorid=6523" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_37"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_37"></div><div id="ad_thread4_37"></div>
						
						
																											<div id="postmessage_328086" class="t_msgfont">少举兄，期待你再弄一个出来呀！真的很好用。</div>

							
							
							
							
															<div id="post_rate_div_328086"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo328086_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=6523" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=22983&amp;repquote=328086&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 328086)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_37"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid328108" summary="pid328108" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8710" target="_blank" id="userinfo328108" class="dropmenu" onmouseover="showMenu(this.id)">陈少举</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">国服六区海达西亚联盟暗夜精灵牧师/部落血精灵牧师/台服奥尼克西亚联盟暗夜精灵牧师</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8710">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8710&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_38" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum328108" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=22983&page=1#pid328108', '话题链接已经复制到剪贴板')">39楼</strong>
													<em onclick="$('postmessage_328108').className='t_bigfont'">大</em>							<em onclick="$('postmessage_328108').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_328108').className='t_smallfont'">小</em>												发表于 2009-11-15 21:17&nbsp;																					<a href="viewthread.php?tid=22983&amp;page=1&amp;authorid=8710" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_38"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_38"></div><div id="ad_thread4_38"></div>
						
						
																											<div id="postmessage_328108" class="t_msgfont">已经恢复～服务器迁移到另一个国家了～</div>

							
							
							
							
															<div id="post_rate_div_328108"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo328108_menu" style="display: none;">
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
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=22983&amp;repquote=328108&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 328108)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_38"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid328303" summary="pid328303" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6523" target="_blank" id="userinfo328303" class="dropmenu" onmouseover="showMenu(this.id)">自由西瓜</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6523">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6523&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_39" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum328303" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=22983&page=1#pid328303', '话题链接已经复制到剪贴板')">40楼</strong>
													<em onclick="$('postmessage_328303').className='t_bigfont'">大</em>							<em onclick="$('postmessage_328303').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_328303').className='t_smallfont'">小</em>												发表于 2009-11-15 23:22&nbsp;																					<a href="viewthread.php?tid=22983&amp;page=1&amp;authorid=6523" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_39"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_39"></div><div id="ad_thread4_39"></div>
						
						
																											<div id="postmessage_328303" class="t_msgfont">非常感谢少举兄，我用来浏览图片网站真是很好用。开图很快！</div>

							
							
							
							
															<div id="post_rate_div_328303"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo328303_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=6523" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=22983&amp;repquote=328303&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 328303)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_39"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid328782" summary="pid328782" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8710" target="_blank" id="userinfo328782" class="dropmenu" onmouseover="showMenu(this.id)">陈少举</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">国服六区海达西亚联盟暗夜精灵牧师/部落血精灵牧师/台服奥尼克西亚联盟暗夜精灵牧师</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8710">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8710&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_40" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum328782" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=22983&page=1#pid328782', '话题链接已经复制到剪贴板')">41楼</strong>
													<em onclick="$('postmessage_328782').className='t_bigfont'">大</em>							<em onclick="$('postmessage_328782').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_328782').className='t_smallfont'">小</em>												发表于 2009-11-16 11:48&nbsp;																					<a href="viewthread.php?tid=22983&amp;page=1&amp;authorid=8710" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_40"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_40"></div><div id="ad_thread4_40"></div>
						
						
																											<div id="postmessage_328782" class="t_msgfont">11月16日添加更多地址。</div>

							
							
							
							
															<div id="post_rate_div_328782"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo328782_menu" style="display: none;">
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
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=22983&amp;repquote=328782&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 328782)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_40"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid338816" summary="pid338816" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7500" target="_blank" id="userinfo338816" class="dropmenu" onmouseover="showMenu(this.id)">喵喵呜</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">农村驻城市观察员，二舅母驻城联络处主任，村书记指定网络潜伏工作者……</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7500">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7500&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_41" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum338816" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=22983&page=1#pid338816', '话题链接已经复制到剪贴板')">42楼</strong>
													<em onclick="$('postmessage_338816').className='t_bigfont'">大</em>							<em onclick="$('postmessage_338816').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_338816').className='t_smallfont'">小</em>												发表于 2009-11-23 18:43&nbsp;																					<a href="viewthread.php?tid=22983&amp;page=1&amp;authorid=7500" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_41"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_41"></div><div id="ad_thread4_41"></div>
						
						
																											<div id="postmessage_338816" class="t_msgfont">多谢啊&nbsp; &nbsp;还好用呢</div>

							
							
							
							
															<div id="post_rate_div_338816"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo338816_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=7500" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=22983&amp;repquote=338816&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 338816)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_41"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid354539" summary="pid354539" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7500" target="_blank" id="userinfo354539" class="dropmenu" onmouseover="showMenu(this.id)">喵喵呜</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">农村驻城市观察员，二舅母驻城联络处主任，村书记指定网络潜伏工作者……</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7500">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7500&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_42" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum354539" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=22983&page=1#pid354539', '话题链接已经复制到剪贴板')">43楼</strong>
													<em onclick="$('postmessage_354539').className='t_bigfont'">大</em>							<em onclick="$('postmessage_354539').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_354539').className='t_smallfont'">小</em>												发表于 2009-12-3 22:50&nbsp;																					<a href="viewthread.php?tid=22983&amp;page=1&amp;authorid=7500" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_42"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_42"></div><div id="ad_thread4_42"></div>
						
						
																											<div id="postmessage_354539" class="t_msgfont">这个链接很好用 ，为什么会沉下去？！</div>

							
							
							
							
															<div id="post_rate_div_354539"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo354539_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=7500" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=22983&amp;repquote=354539&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 354539)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_42"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid355116" summary="pid355116" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=9235" target="_blank" id="userinfo355116" class="dropmenu" onmouseover="showMenu(this.id)">饭饭</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=9235">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=9235&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_43" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum355116" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=22983&page=1#pid355116', '话题链接已经复制到剪贴板')">44楼</strong>
													<em onclick="$('postmessage_355116').className='t_bigfont'">大</em>							<em onclick="$('postmessage_355116').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_355116').className='t_smallfont'">小</em>												发表于 2009-12-4 10:50&nbsp;																					<a href="viewthread.php?tid=22983&amp;page=1&amp;authorid=9235" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_43"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_43"></div><div id="ad_thread4_43"></div>
						
						
																											<div id="postmessage_355116" class="t_msgfont">晚上回家试试看铁通到底行不行，最近翻不过去很郁闷啊~~~</div>

							
							
							
							
															<div id="post_rate_div_355116"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo355116_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=9235" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=22983&amp;repquote=355116&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 355116)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_43"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid364972" summary="pid364972" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6523" target="_blank" id="userinfo364972" class="dropmenu" onmouseover="showMenu(this.id)">自由西瓜</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6523">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6523&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_44" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum364972" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=22983&page=1#pid364972', '话题链接已经复制到剪贴板')">45楼</strong>
													<em onclick="$('postmessage_364972').className='t_bigfont'">大</em>							<em onclick="$('postmessage_364972').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_364972').className='t_smallfont'">小</em>												发表于 2009-12-10 00:34&nbsp;																					<a href="viewthread.php?tid=22983&amp;page=1&amp;authorid=6523" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_44"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_44"></div><div id="ad_thread4_44"></div>
						
						
																											<div id="postmessage_364972" class="t_msgfont">第一组和第二组好像不能用了。。。</div>

							
							
							
							
															<div id="post_rate_div_364972"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo364972_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=6523" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=22983&amp;repquote=364972&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 364972)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_44"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid365173" summary="pid365173" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6327" target="_blank" id="userinfo365173" class="dropmenu" onmouseover="showMenu(this.id)">chandler0819</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">@chandler0819</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6327">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6327&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_45" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum365173" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=22983&page=1#pid365173', '话题链接已经复制到剪贴板')">46楼</strong>
													<em onclick="$('postmessage_365173').className='t_bigfont'">大</em>							<em onclick="$('postmessage_365173').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_365173').className='t_smallfont'">小</em>												发表于 2009-12-10 09:07&nbsp;																					<a href="viewthread.php?tid=22983&amp;page=1&amp;authorid=6327" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_45"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_45"></div><div id="ad_thread4_45"></div>
						
						
																											<div id="postmessage_365173" class="t_msgfont">速度非常快<br />
<br />
thx!</div>

							
							
							
							
															<div id="post_rate_div_365173"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo365173_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=6327" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=22983&amp;repquote=365173&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 365173)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_45"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid365640" summary="pid365640" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2395" target="_blank" id="userinfo365640" class="dropmenu" onmouseover="showMenu(this.id)">伪菌子</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">王命之徒</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2395">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2395&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_46" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum365640" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=22983&page=1#pid365640', '话题链接已经复制到剪贴板')">47楼</strong>
													<em onclick="$('postmessage_365640').className='t_bigfont'">大</em>							<em onclick="$('postmessage_365640').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_365640').className='t_smallfont'">小</em>												发表于 2009-12-10 13:08&nbsp;																					<a href="viewthread.php?tid=22983&amp;page=1&amp;authorid=2395" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_46"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_46"></div><div id="ad_thread4_46"></div>
						
						
																											<div id="postmessage_365640" class="t_msgfont">好久没翻墙啦．．．</div>

							
							
							
							
															<div id="post_rate_div_365640"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo365640_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=2395" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=22983&amp;repquote=365640&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 365640)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_46"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid369991" summary="pid369991" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7500" target="_blank" id="userinfo369991" class="dropmenu" onmouseover="showMenu(this.id)">喵喵呜</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">农村驻城市观察员，二舅母驻城联络处主任，村书记指定网络潜伏工作者……</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7500">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7500&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_47" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum369991" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=22983&page=1#pid369991', '话题链接已经复制到剪贴板')">48楼</strong>
													<em onclick="$('postmessage_369991').className='t_bigfont'">大</em>							<em onclick="$('postmessage_369991').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_369991').className='t_smallfont'">小</em>												发表于 2009-12-12 23:20&nbsp;																					<a href="viewthread.php?tid=22983&amp;page=1&amp;authorid=7500" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_47"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_47"></div><div id="ad_thread4_47"></div>
						
						
																											<div id="postmessage_369991" class="t_msgfont">报告楼主，前两个弟兄牺牲了！</div>

							
							
							
							
															<div id="post_rate_div_369991"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo369991_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=7500" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=22983&amp;repquote=369991&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 369991)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_47"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid376545" summary="pid376545" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6523" target="_blank" id="userinfo376545" class="dropmenu" onmouseover="showMenu(this.id)">自由西瓜</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6523">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6523&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_48" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum376545" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=22983&page=1#pid376545', '话题链接已经复制到剪贴板')">49楼</strong>
													<em onclick="$('postmessage_376545').className='t_bigfont'">大</em>							<em onclick="$('postmessage_376545').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_376545').className='t_smallfont'">小</em>												发表于 2009-12-16 12:53&nbsp;																					<a href="viewthread.php?tid=22983&amp;page=1&amp;authorid=6523" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_48"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_48"></div><div id="ad_thread4_48"></div>
						
						
																											<div id="postmessage_376545" class="t_msgfont">第3个汉化版也没以前好用了。。。。。 期待楼主再出手</div>

							
							
							
							
															<div id="post_rate_div_376545"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo376545_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=6523" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=22983&amp;repquote=376545&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 376545)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_48"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid377714" summary="pid377714" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=9287" target="_blank" id="userinfo377714" class="dropmenu" onmouseover="showMenu(this.id)">一人一</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">良心</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=9287">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=9287&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_49" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum377714" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=22983&page=1#pid377714', '话题链接已经复制到剪贴板')">50楼</strong>
													<em onclick="$('postmessage_377714').className='t_bigfont'">大</em>							<em onclick="$('postmessage_377714').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_377714').className='t_smallfont'">小</em>												发表于 2009-12-17 00:09&nbsp;																					<a href="viewthread.php?tid=22983&amp;page=1&amp;authorid=9287" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_49"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_49"></div><div id="ad_thread4_49"></div>
						
						
																											<div id="postmessage_377714" class="t_msgfont">太感谢了</div>

							
							
							
							
															<div id="post_rate_div_377714"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo377714_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=9287" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=22983&amp;repquote=377714&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 377714)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_49"></div>				</div>
			</td>
		</tr>
		</table>
		</div>
</form>





<div class="pages_btns">
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=22983&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=22983&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
	<div class="pages"><em>&nbsp;53&nbsp;</em><strong>1</strong><a href="viewthread.php?tid=22983&amp;extra=&amp;page=2">2</a><a href="viewthread.php?tid=22983&amp;extra=&amp;page=2" class="next">&rsaquo;&rsaquo;</a></div>			<span class="postbtn" id="newspecialtmp" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=22983&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

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

	<form method="post" id="postform" action="post.php?action=reply&amp;fid=26&amp;tid=22983&amp;extra=&amp;replysubmit=yes" onSubmit="return validate(this)">
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
			window.location = 'viewthread.php?tid=22983&page=2';
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
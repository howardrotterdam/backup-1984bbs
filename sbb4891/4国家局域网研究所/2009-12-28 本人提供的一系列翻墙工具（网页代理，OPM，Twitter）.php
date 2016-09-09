<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<title>本人提供的一系列翻墙工具（网页代理，OPM，Twitter） - 国家局域网研究所 -  1984bbs.com </title>
<meta name="keywords" content="" />
<meta name="MSSmartTagsPreventParsing" content="True" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<link rel="archives" title="1984bbs.com" href="https://1984bbs.com/archiver/" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_viewthread.css" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_common.css" />
<script type="text/javascript">
	var discuz_uid = 13019;var IMGDIR = 'images/default';var attackevasive = '0';var gid = 0;var STYLEID = '1';
	gid = parseInt('3');var fid = parseInt('26');var tid = parseInt('32745');
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
			<p><a href="index.php" id="forumlist" onmouseover="showMenu(this.id)" class="dropmenu">1984bbs.com</a> &raquo; <a href="forumdisplay.php?fid=26">国家局域网研究所</a> &raquo; 本人提供的一系列翻墙工具（网页代理，OPM，Twitter）</p>
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
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=32745&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=32745&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
				<span class="postbtn" id="newspecial" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=32745&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

	<ul class="popupmenu_popup newspecialmenu" id="newspecial_menu" style="display: none">
		<li><a href="post.php?action=newthread&amp;fid=26&amp;extra=">发新话题</a></li>
		<li class="poll"><a href="post.php?action=newthread&amp;fid=26&amp;extra=&amp;special=1">发布投票</a></li>													</ul>

<form method="post" name="modactions">
	<input type="hidden" name="formhash" value="823c9fa2" />
	<div class="mainbox viewthread">
		<span class="headactions">
					<a href="my.php?item=favorites&amp;tid=32745" id="ajax_favorite" onclick="ajaxmenu(event, this.id, 3000, 0)">收藏</a>
			<a href="my.php?item=subscriptions&amp;subadd=32745" id="ajax_subscription" onclick="ajaxmenu(event, this.id, 3000, null, 0)">订阅</a>
			<a href="misc.php?action=emailfriend&amp;tid=32745" id="emailfriend" onclick="ajaxmenu(event, this.id, 9000000, null, 0)">推荐</a>
				<a href="viewthread.php?action=printable&amp;tid=32745" target="_blank" class="notabs">打印</a>
				</span>
		<h1>本人提供的一系列翻墙工具（网页代理，OPM，Twitter）		</h1>
							<table id="pid400895" summary="pid400895" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8710" target="_blank" id="userinfo400895" class="dropmenu" onmouseover="showMenu(this.id)">陈少举</a></cite>
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
						<strong title="复制话题链接到剪贴板" id="postnum400895" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=32745&page=1#pid400895', '话题链接已经复制到剪贴板')">1楼</strong>
													<em onclick="$('postmessage_400895').className='t_bigfont'">大</em>							<em onclick="$('postmessage_400895').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_400895').className='t_smallfont'">小</em>												发表于 2009-12-28 10:53&nbsp;																					<a href="viewthread.php?tid=32745&amp;page=1&amp;authorid=8710" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_0"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_0"></div><div id="ad_thread4_0"></div>
													<h2>本人提供的一系列翻墙工具（网页代理，OPM，Twitter）</h2>
						
						
																											<div id="postmessage_400895" class="t_msgfont">注意，以下代理群屏蔽了以下IP，请使用前访问 <a href="http://www.ip.cn" target="_blank">http://www.ip.cn</a> 或 <a href="http://www.ip138.com" target="_blank">http://www.ip138.com</a> 核对你的IP地址是否在以下列表中：<div class="quote"><h5>引用:</h5><blockquote>deny from 121.10.0.0/16<br />
deny from 217.150.0.0/16<br />
deny from 218.66.0.0/16<br />
deny from 219.142.0.0/16<br />
deny from 221.198.0.0/16<br />
deny from 222.66.0.0/16</blockquote></div><strong>切记：请不要散布以下地址，否则会被和谐！</strong><br />
<br />
Twitter：<br />
　　国内版推特中文圈： <a href="http://twitese.chenshaoju.com/" target="_blank">http://twitese.chenshaoju.com/</a><br />
　　国际版推特中文圈： <a href="http://server3.chenshaoju.com/twitese/" target="_blank">http://server3.chenshaoju.com/twitese/</a><br />
　　手机用Dabr： <a href="http://server3.chenshaoju.com/dabr/" target="_blank">http://server3.chenshaoju.com/dabr/</a><br />
　　手机用奶瓶腿： <a href="http://server3.chenshaoju.com/netputer/" target="_blank">http://server3.chenshaoju.com/netputer/</a><br />
　　Twitter API代理： <a href="http://server3.chenshaoju.com/twip/" target="_blank">http://server3.chenshaoju.com/twip/</a><br />
<br />
网页代理：<br />
　　电脑用网页代理： <a href="http://server3.chenshaoju.com/proxy/" target="_blank">http://server3.chenshaoju.com/proxy/</a><br />
　　手机用OperaMini 4/5：&nbsp;&nbsp;<a href="http://www.uushare.com/user/chenshaoju/files/2126608" target="_blank">http://www.uushare.com/user/chenshaoju/files/2126608</a><br />
<br />
[<i> 本帖最后由 陈少举 于 2009-12-28 17:25 编辑 </i>]</div>

							
							
							
							
															<div id="post_rate_div_400895"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo400895_menu" style="display: none;">
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
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=32745&amp;repquote=400895&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 400895)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_0"></div>				</div>
			</td>
		</tr>
		</table>
		</div><div class="ad_column" id="ad_interthread"><a href="/viewthread.php?tid=54699" target="_blank" style="color:red;">1984bbs是一个非营利项目，它需要您的捐助！</font></a>		</div>
	<div class="mainbox viewthread">
			<table id="pid401365" summary="pid401365" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10722" target="_blank" id="userinfo401365" class="dropmenu" onmouseover="showMenu(this.id)">jencoxu</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10722">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10722&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_1" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum401365" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=32745&page=1#pid401365', '话题链接已经复制到剪贴板')">2楼</strong>
													<em onclick="$('postmessage_401365').className='t_bigfont'">大</em>							<em onclick="$('postmessage_401365').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_401365').className='t_smallfont'">小</em>												发表于 2009-12-28 14:28&nbsp;																					<a href="viewthread.php?tid=32745&amp;page=1&amp;authorid=10722" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_1"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_1"></div><div id="ad_thread4_1"></div>
						
						
																											<div id="postmessage_401365" class="t_msgfont">速度不错，支持一下，备用</div>

							
							
							
							
															<div id="post_rate_div_401365"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo401365_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=10722" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=32745&amp;repquote=401365&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 401365)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_1"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid401381" summary="pid401381" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=11149" target="_blank" id="userinfo401381" class="dropmenu" onmouseover="showMenu(this.id)">大力夯</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=11149">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=11149&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_2" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum401381" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=32745&page=1#pid401381', '话题链接已经复制到剪贴板')">3楼</strong>
													<em onclick="$('postmessage_401381').className='t_bigfont'">大</em>							<em onclick="$('postmessage_401381').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_401381').className='t_smallfont'">小</em>												发表于 2009-12-28 14:35&nbsp;																					<a href="viewthread.php?tid=32745&amp;page=1&amp;authorid=11149" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_2"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_2"></div><div id="ad_thread4_2"></div>
						
						
																											<div id="postmessage_401381" class="t_msgfont">速度很快~赞！！</div>

							
							
							
							
															<div id="post_rate_div_401381"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo401381_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=11149" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=32745&amp;repquote=401381&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 401381)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_2"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid401424" summary="pid401424" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8732" target="_blank" id="userinfo401424" class="dropmenu" onmouseover="showMenu(this.id)">crime</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8732">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8732&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_3" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum401424" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=32745&page=1#pid401424', '话题链接已经复制到剪贴板')">4楼</strong>
													<em onclick="$('postmessage_401424').className='t_bigfont'">大</em>							<em onclick="$('postmessage_401424').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_401424').className='t_smallfont'">小</em>												发表于 2009-12-28 14:54&nbsp;																					<a href="viewthread.php?tid=32745&amp;page=1&amp;authorid=8732" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_3"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_3"></div><div id="ad_thread4_3"></div>
						
						
																											<div id="postmessage_401424" class="t_msgfont">mark~~~<br />
为什么Google SYNC不能同步记事本呢。。。</div>

							
							
							
							
															<div id="post_rate_div_401424"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo401424_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=8732" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=32745&amp;repquote=401424&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 401424)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_3"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid401427" summary="pid401427" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6012" target="_blank" id="userinfo401427" class="dropmenu" onmouseover="showMenu(this.id)">agw</a></cite>
						<p>重复贴合并器，纯水贴删除机。</p>												<p><em></em></p>
						<p></p>
						<p class="customstatus">豆瓣ID：红尘梦羽    推特www.twitter.com/hcmy</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6012">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6012&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_4" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum401427" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=32745&page=1#pid401427', '话题链接已经复制到剪贴板')">5楼</strong>
													<em onclick="$('postmessage_401427').className='t_bigfont'">大</em>							<em onclick="$('postmessage_401427').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_401427').className='t_smallfont'">小</em>												发表于 2009-12-28 14:54&nbsp;																					<a href="viewthread.php?tid=32745&amp;page=1&amp;authorid=6012" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_4"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_4"></div><div id="ad_thread4_4"></div>
						
						
																											<div id="postmessage_401427" class="t_msgfont">估计过几天就又被墙了。</div>

							
							
							
							
															<div id="post_rate_div_401427"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo401427_menu" style="display: none;">
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
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=32745&amp;repquote=401427&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 401427)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_4"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid401805" summary="pid401805" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8583" target="_blank" id="userinfo401805" class="dropmenu" onmouseover="showMenu(this.id)">Joshua</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8583">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8583&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_5" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum401805" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=32745&page=1#pid401805', '话题链接已经复制到剪贴板')">6楼</strong>
													<em onclick="$('postmessage_401805').className='t_bigfont'">大</em>							<em onclick="$('postmessage_401805').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_401805').className='t_smallfont'">小</em>												发表于 2009-12-28 17:27&nbsp;																					<a href="viewthread.php?tid=32745&amp;page=1&amp;authorid=8583" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_5"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_5"></div><div id="ad_thread4_5"></div>
						
						
																											<div id="postmessage_401805" class="t_msgfont">谢谢分享，下次ubuntu可以用在线工具了，每天翻墙，有益健康</div>

							
							
							
							
															<div id="post_rate_div_401805"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo401805_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=8583" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=32745&amp;repquote=401805&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 401805)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_5"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid402001" summary="pid402001" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=11413" target="_blank" id="userinfo402001" class="dropmenu" onmouseover="showMenu(this.id)">sortex77</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=11413">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=11413&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_6" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum402001" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=32745&page=1#pid402001', '话题链接已经复制到剪贴板')">7楼</strong>
													<em onclick="$('postmessage_402001').className='t_bigfont'">大</em>							<em onclick="$('postmessage_402001').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_402001').className='t_smallfont'">小</em>												发表于 2009-12-28 19:01&nbsp;																					<a href="viewthread.php?tid=32745&amp;page=1&amp;authorid=11413" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_6"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_6"></div><div id="ad_thread4_6"></div>
						
						
																											<div id="postmessage_402001" class="t_msgfont">very good，mark~</div>

							
							
							
							
															<div id="post_rate_div_402001"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo402001_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=11413" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=32745&amp;repquote=402001&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 402001)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_6"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid402208" summary="pid402208" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=9992" target="_blank" id="userinfo402208" class="dropmenu" onmouseover="showMenu(this.id)">大豆</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=9992">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=9992&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_7" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum402208" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=32745&page=1#pid402208', '话题链接已经复制到剪贴板')">8楼</strong>
													<em onclick="$('postmessage_402208').className='t_bigfont'">大</em>							<em onclick="$('postmessage_402208').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_402208').className='t_smallfont'">小</em>												发表于 2009-12-28 20:56&nbsp;																					<a href="viewthread.php?tid=32745&amp;page=1&amp;authorid=9992" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_7"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_7"></div><div id="ad_thread4_7"></div>
						
						
																											<div id="postmessage_402208" class="t_msgfont">支持，饭否de好像要暗号了，暗号要发邮件，而且不是自动回复的，很慢</div>

							
							
							
							
															<div id="post_rate_div_402208"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo402208_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=9992" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=32745&amp;repquote=402208&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 402208)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_7"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid402294" summary="pid402294" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=11190" target="_blank" id="userinfo402294" class="dropmenu" onmouseover="showMenu(this.id)">fegle</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=11190">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=11190&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_8" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum402294" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=32745&page=1#pid402294', '话题链接已经复制到剪贴板')">9楼</strong>
													<em onclick="$('postmessage_402294').className='t_bigfont'">大</em>							<em onclick="$('postmessage_402294').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_402294').className='t_smallfont'">小</em>												发表于 2009-12-28 21:46&nbsp;																					<a href="viewthread.php?tid=32745&amp;page=1&amp;authorid=11190" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_8"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_8"></div><div id="ad_thread4_8"></div>
						
						
																											<div id="postmessage_402294" class="t_msgfont">非常感谢，希望时常更新，因为很容易被墙。</div>

							
							
							
							
															<div id="post_rate_div_402294"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo402294_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=11190" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=32745&amp;repquote=402294&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 402294)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_8"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid402393" summary="pid402393" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=11089" target="_blank" id="userinfo402393" class="dropmenu" onmouseover="showMenu(this.id)">l七月</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=11089">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=11089&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_9" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum402393" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=32745&page=1#pid402393', '话题链接已经复制到剪贴板')">10楼</strong>
													<em onclick="$('postmessage_402393').className='t_bigfont'">大</em>							<em onclick="$('postmessage_402393').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_402393').className='t_smallfont'">小</em>												发表于 2009-12-28 22:41&nbsp;																					<a href="viewthread.php?tid=32745&amp;page=1&amp;authorid=11089" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_9"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_9"></div><div id="ad_thread4_9"></div>
						
						
																											<div id="postmessage_402393" class="t_msgfont">每日一翻，强身健体。<br />
谢谢LZ分享。</div>

							
							
							
							
															<div id="post_rate_div_402393"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo402393_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=11089" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=32745&amp;repquote=402393&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 402393)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_9"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid402836" summary="pid402836" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10897" target="_blank" id="userinfo402836" class="dropmenu" onmouseover="showMenu(this.id)">stroll</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10897">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10897&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_10" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum402836" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=32745&page=1#pid402836', '话题链接已经复制到剪贴板')">11楼</strong>
													<em onclick="$('postmessage_402836').className='t_bigfont'">大</em>							<em onclick="$('postmessage_402836').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_402836').className='t_smallfont'">小</em>												发表于 2009-12-29 10:15&nbsp;																					<a href="viewthread.php?tid=32745&amp;page=1&amp;authorid=10897" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_10"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_10"></div><div id="ad_thread4_10"></div>
						
						
																											<div id="postmessage_402836" class="t_msgfont">竟然还有备案。。速度快，注意安全哦</div>

							
							
							
							
															<div id="post_rate_div_402836"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo402836_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=10897" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=32745&amp;repquote=402836&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 402836)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_10"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid403681" summary="pid403681" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8357" target="_blank" id="userinfo403681" class="dropmenu" onmouseover="showMenu(this.id)">kevin20700</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8357">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8357&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_11" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum403681" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=32745&page=1#pid403681', '话题链接已经复制到剪贴板')">12楼</strong>
													<em onclick="$('postmessage_403681').className='t_bigfont'">大</em>							<em onclick="$('postmessage_403681').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_403681').className='t_smallfont'">小</em>												发表于 2009-12-29 17:36&nbsp;																					<a href="viewthread.php?tid=32745&amp;page=1&amp;authorid=8357" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_11"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_11"></div><div id="ad_thread4_11"></div>
						
						
																											<div id="postmessage_403681" class="t_msgfont">非常感谢，支持一下，备用</div>

							
							
							
							
															<div id="post_rate_div_403681"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo403681_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=8357" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=32745&amp;repquote=403681&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 403681)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_11"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid403710" summary="pid403710" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6920" target="_blank" id="userinfo403710" class="dropmenu" onmouseover="showMenu(this.id)">淮月</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">翻墙痴迷者 雄性文青  @qhgy</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6920">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6920&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_12" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum403710" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=32745&page=1#pid403710', '话题链接已经复制到剪贴板')">13楼</strong>
													<em onclick="$('postmessage_403710').className='t_bigfont'">大</em>							<em onclick="$('postmessage_403710').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_403710').className='t_smallfont'">小</em>												发表于 2009-12-29 17:53&nbsp;																					<a href="viewthread.php?tid=32745&amp;page=1&amp;authorid=6920" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_12"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_12"></div><div id="ad_thread4_12"></div>
						
						
																											<div id="postmessage_403710" class="t_msgfont">支持</div>

							
							
							
							
															<div id="post_rate_div_403710"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo403710_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://twitter.com/qhgy" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=6920" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=32745&amp;repquote=403710&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 403710)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_12"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid404150" summary="pid404150" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=3886" target="_blank" id="userinfo404150" class="dropmenu" onmouseover="showMenu(this.id)">tolo</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=3886">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=3886&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_13" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum404150" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=32745&page=1#pid404150', '话题链接已经复制到剪贴板')">14楼</strong>
													<em onclick="$('postmessage_404150').className='t_bigfont'">大</em>							<em onclick="$('postmessage_404150').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_404150').className='t_smallfont'">小</em>												发表于 2009-12-29 23:13&nbsp;																					<a href="viewthread.php?tid=32745&amp;page=1&amp;authorid=3886" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_13"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_13"></div><div id="ad_thread4_13"></div>
						
						
																											<div id="postmessage_404150" class="t_msgfont">感谢楼主，好人一生平安。</div>

							
							
							
							
															<div id="post_rate_div_404150"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo404150_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=3886" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=32745&amp;repquote=404150&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 404150)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_13"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid404200" summary="pid404200" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7500" target="_blank" id="userinfo404200" class="dropmenu" onmouseover="showMenu(this.id)">喵喵呜</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">农村驻城市观察员，二舅母驻城联络处主任，村书记指定网络潜伏工作者……</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7500">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7500&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_14" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum404200" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=32745&page=1#pid404200', '话题链接已经复制到剪贴板')">15楼</strong>
													<em onclick="$('postmessage_404200').className='t_bigfont'">大</em>							<em onclick="$('postmessage_404200').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_404200').className='t_smallfont'">小</em>												发表于 2009-12-29 23:58&nbsp;																					<a href="viewthread.php?tid=32745&amp;page=1&amp;authorid=7500" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_14"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_14"></div><div id="ad_thread4_14"></div>
						
						
																											<div id="postmessage_404200" class="t_msgfont">好用啊&nbsp; &nbsp;楼主辛苦了</div>

							
							
							
							
															<div id="post_rate_div_404200"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo404200_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=7500" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=32745&amp;repquote=404200&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 404200)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_14"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid404507" summary="pid404507" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7831" target="_blank" id="userinfo404507" class="dropmenu" onmouseover="showMenu(this.id)">文一撮</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">vincnd, 真理追寻者</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7831">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7831&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_15" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum404507" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=32745&page=1#pid404507', '话题链接已经复制到剪贴板')">16楼</strong>
													<em onclick="$('postmessage_404507').className='t_bigfont'">大</em>							<em onclick="$('postmessage_404507').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_404507').className='t_smallfont'">小</em>												发表于 2009-12-30 10:22&nbsp;																					<a href="viewthread.php?tid=32745&amp;page=1&amp;authorid=7831" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_15"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_15"></div><div id="ad_thread4_15"></div>
						
						
																											<div id="postmessage_404507" class="t_msgfont">貌似所有server3.chenshaoju.com 下的已经失效了</div>

							
							
							
							
															<div id="post_rate_div_404507"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo404507_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=7831" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=32745&amp;repquote=404507&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 404507)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_15"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid404648" summary="pid404648" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=5937" target="_blank" id="userinfo404648" class="dropmenu" onmouseover="showMenu(this.id)">bateauivregh</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=5937">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=5937&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_16" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum404648" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=32745&page=1#pid404648', '话题链接已经复制到剪贴板')">17楼</strong>
													<em onclick="$('postmessage_404648').className='t_bigfont'">大</em>							<em onclick="$('postmessage_404648').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_404648').className='t_smallfont'">小</em>												发表于 2009-12-30 11:31&nbsp;																					<a href="viewthread.php?tid=32745&amp;page=1&amp;authorid=5937" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_16"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_16"></div><div id="ad_thread4_16"></div>
						
						
																											<div id="postmessage_404648" class="t_msgfont">太强大了，多谢！</div>

							
							
							
							
															<div id="post_rate_div_404648"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo404648_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=5937" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=32745&amp;repquote=404648&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 404648)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_16"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid406586" summary="pid406586" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6449" target="_blank" id="userinfo406586" class="dropmenu" onmouseover="showMenu(this.id)">倪秋</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">颂赞和诅咒从一个口里出来，我的兄弟们，这是不应当的。</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6449">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6449&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_17" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum406586" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=32745&page=1#pid406586', '话题链接已经复制到剪贴板')">18楼</strong>
													<em onclick="$('postmessage_406586').className='t_bigfont'">大</em>							<em onclick="$('postmessage_406586').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_406586').className='t_smallfont'">小</em>												发表于 2009-12-31 12:59&nbsp;																					<a href="viewthread.php?tid=32745&amp;page=1&amp;authorid=6449" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_17"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_17"></div><div id="ad_thread4_17"></div>
						
						
																											<div id="postmessage_406586" class="t_msgfont">特感谢</div>

							
							
							
							
															<div id="post_rate_div_406586"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo406586_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=6449" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=32745&amp;repquote=406586&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 406586)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_17"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid406683" summary="pid406683" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=4534" target="_blank" id="userinfo406683" class="dropmenu" onmouseover="showMenu(this.id)">123ddw</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">逼事球办</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=4534">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=4534&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_18" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum406683" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=32745&page=1#pid406683', '话题链接已经复制到剪贴板')">19楼</strong>
													<em onclick="$('postmessage_406683').className='t_bigfont'">大</em>							<em onclick="$('postmessage_406683').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_406683').className='t_smallfont'">小</em>												发表于 2009-12-31 13:33&nbsp;																					<a href="viewthread.php?tid=32745&amp;page=1&amp;authorid=4534" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_18"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_18"></div><div id="ad_thread4_18"></div>
						
						
																											<div id="postmessage_406683" class="t_msgfont">马克之，顶楼主新年大发/</div>

							
							
							
							
															<div id="post_rate_div_406683"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo406683_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=4534" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=32745&amp;repquote=406683&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 406683)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_18"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid409854" summary="pid409854" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8798" target="_blank" id="userinfo409854" class="dropmenu" onmouseover="showMenu(this.id)">e_pu</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8798">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8798&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_19" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum409854" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=32745&page=1#pid409854', '话题链接已经复制到剪贴板')">20楼</strong>
													<em onclick="$('postmessage_409854').className='t_bigfont'">大</em>							<em onclick="$('postmessage_409854').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_409854').className='t_smallfont'">小</em>												发表于 2010-1-2 15:11&nbsp;																					<a href="viewthread.php?tid=32745&amp;page=1&amp;authorid=8798" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_19"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_19"></div><div id="ad_thread4_19"></div>
						
						
																											<div id="postmessage_409854" class="t_msgfont">mark 之</div>

							
							
							
							
															<div id="post_rate_div_409854"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo409854_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=8798" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=32745&amp;repquote=409854&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 409854)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_19"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid410577" summary="pid410577" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2908" target="_blank" id="userinfo410577" class="dropmenu" onmouseover="showMenu(this.id)">Geona</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">做人少做亏心事，路见不平吃一惊。</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2908">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2908&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_20" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum410577" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=32745&page=1#pid410577', '话题链接已经复制到剪贴板')">21楼</strong>
													<em onclick="$('postmessage_410577').className='t_bigfont'">大</em>							<em onclick="$('postmessage_410577').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_410577').className='t_smallfont'">小</em>												发表于 2010-1-2 22:23&nbsp;																					<a href="viewthread.php?tid=32745&amp;page=1&amp;authorid=2908" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_20"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_20"></div><div id="ad_thread4_20"></div>
						
						
																											<div id="postmessage_410577" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>e_pu</i> 于 2010-1-2 15:11 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=409854&amp;ptid=32745" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
mark 之 </blockquote></div>+1<br />
谢之~</div>

							
							
							
							
															<div id="post_rate_div_410577"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo410577_menu" style="display: none;">
										<div class="imicons">
												<a href="http://wpa.qq.com/msgrd?V=1&amp;Uin=147850034&amp;Site=1984bbs.com&amp;Menu=yes" target="_blank"><img src="images/default/qq.gif" alt="QQ" /></a>																							</div>
										<dl></dl>
										<p><a href="space.php?uid=2908" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=32745&amp;repquote=410577&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 410577)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_20"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid410801" summary="pid410801" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=11185" target="_blank" id="userinfo410801" class="dropmenu" onmouseover="showMenu(this.id)">韩非</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=11185">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=11185&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_21" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum410801" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=32745&page=1#pid410801', '话题链接已经复制到剪贴板')">22楼</strong>
													<em onclick="$('postmessage_410801').className='t_bigfont'">大</em>							<em onclick="$('postmessage_410801').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_410801').className='t_smallfont'">小</em>												发表于 2010-1-3 00:06&nbsp;																					<a href="viewthread.php?tid=32745&amp;page=1&amp;authorid=11185" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_21"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_21"></div><div id="ad_thread4_21"></div>
						
						
																											<div id="postmessage_410801" class="t_msgfont">谢 ！</div>

							
							
							
							
															<div id="post_rate_div_410801"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo410801_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=11185" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=32745&amp;repquote=410801&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 410801)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_21"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid411279" summary="pid411279" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8357" target="_blank" id="userinfo411279" class="dropmenu" onmouseover="showMenu(this.id)">kevin20700</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8357">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8357&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_22" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum411279" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=32745&page=1#pid411279', '话题链接已经复制到剪贴板')">23楼</strong>
													<em onclick="$('postmessage_411279').className='t_bigfont'">大</em>							<em onclick="$('postmessage_411279').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_411279').className='t_smallfont'">小</em>												发表于 2010-1-3 11:54&nbsp;																					<a href="viewthread.php?tid=32745&amp;page=1&amp;authorid=8357" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_22"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_22"></div><div id="ad_thread4_22"></div>
						
						
																											<div id="postmessage_411279" class="t_msgfont">非常感谢，支持一下，备用</div>

							
							
							
							
															<div id="post_rate_div_411279"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo411279_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=8357" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=32745&amp;repquote=411279&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 411279)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_22"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid411724" summary="pid411724" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=9030" target="_blank" id="userinfo411724" class="dropmenu" onmouseover="showMenu(this.id)">890604</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=9030">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=9030&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_23" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum411724" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=32745&page=1#pid411724', '话题链接已经复制到剪贴板')">24楼</strong>
													<em onclick="$('postmessage_411724').className='t_bigfont'">大</em>							<em onclick="$('postmessage_411724').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_411724').className='t_smallfont'">小</em>												发表于 2010-1-3 16:24&nbsp;																					<a href="viewthread.php?tid=32745&amp;page=1&amp;authorid=9030" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_23"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_23"></div><div id="ad_thread4_23"></div>
						
						
																											<div id="postmessage_411724" class="t_msgfont">感谢，mark</div>

							
							
							
							
															<div id="post_rate_div_411724"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo411724_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=9030" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=32745&amp;repquote=411724&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 411724)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_23"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid414594" summary="pid414594" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10201" target="_blank" id="userinfo414594" class="dropmenu" onmouseover="showMenu(this.id)">jt_inside</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">@JT_inside 中出帝</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10201">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10201&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_24" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum414594" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=32745&page=1#pid414594', '话题链接已经复制到剪贴板')">25楼</strong>
													<em onclick="$('postmessage_414594').className='t_bigfont'">大</em>							<em onclick="$('postmessage_414594').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_414594').className='t_smallfont'">小</em>												发表于 2010-1-5 09:36&nbsp;																					<a href="viewthread.php?tid=32745&amp;page=1&amp;authorid=10201" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_24"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_24"></div><div id="ad_thread4_24"></div>
						
						
																											<div id="postmessage_414594" class="t_msgfont">感谢，收藏了</div>

							
							
							
							
															<div id="post_rate_div_414594"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo414594_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=10201" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=32745&amp;repquote=414594&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 414594)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_24"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid431685" summary="pid431685" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=11506" target="_blank" id="userinfo431685" class="dropmenu" onmouseover="showMenu(this.id)">傻瓜</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">笨死的</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=11506">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=11506&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_25" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum431685" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=32745&page=1#pid431685', '话题链接已经复制到剪贴板')">26楼</strong>
													<em onclick="$('postmessage_431685').className='t_bigfont'">大</em>							<em onclick="$('postmessage_431685').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_431685').className='t_smallfont'">小</em>												发表于 2010-1-14 19:53&nbsp;																					<a href="viewthread.php?tid=32745&amp;page=1&amp;authorid=11506" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_25"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_25"></div><div id="ad_thread4_25"></div>
						
						
																											<div id="postmessage_431685" class="t_msgfont">太感谢了 先用着</div>

							
							
							
							
															<div id="post_rate_div_431685"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo431685_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=11506" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=32745&amp;repquote=431685&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 431685)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_25"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid431799" summary="pid431799" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=9515" target="_blank" id="userinfo431799" class="dropmenu" onmouseover="showMenu(this.id)">waiting_it</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=9515">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=9515&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_26" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum431799" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=32745&page=1#pid431799', '话题链接已经复制到剪贴板')">27楼</strong>
													<em onclick="$('postmessage_431799').className='t_bigfont'">大</em>							<em onclick="$('postmessage_431799').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_431799').className='t_smallfont'">小</em>												发表于 2010-1-14 21:01&nbsp;																					<a href="viewthread.php?tid=32745&amp;page=1&amp;authorid=9515" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_26"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_26"></div><div id="ad_thread4_26"></div>
													<h2>少举同学真的很不错</h2>
						
						
																											<div id="postmessage_431799" class="t_msgfont">谢谢</div>

							
							
							
							
															<div id="post_rate_div_431799"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo431799_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=9515" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=32745&amp;repquote=431799&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 431799)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_26"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid431970" summary="pid431970" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=9515" target="_blank" id="userinfo431970" class="dropmenu" onmouseover="showMenu(this.id)">waiting_it</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=9515">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=9515&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_27" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum431970" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=32745&page=1#pid431970', '话题链接已经复制到剪贴板')">28楼</strong>
													<em onclick="$('postmessage_431970').className='t_bigfont'">大</em>							<em onclick="$('postmessage_431970').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_431970').className='t_smallfont'">小</em>												发表于 2010-1-14 22:49&nbsp;																					<a href="viewthread.php?tid=32745&amp;page=1&amp;authorid=9515" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_27"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_27"></div><div id="ad_thread4_27"></div>
						
						
																											<div id="postmessage_431970" class="t_msgfont">刚刚试用国内推特中文圈，首页可访问，输入密码后，提示含有色情类过滤词。</div>

							
							
							
							
															<div id="post_rate_div_431970"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo431970_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=9515" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=32745&amp;repquote=431970&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 431970)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_27"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid431980" summary="pid431980" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=9515" target="_blank" id="userinfo431980" class="dropmenu" onmouseover="showMenu(this.id)">waiting_it</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=9515">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=9515&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_28" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum431980" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=32745&page=1#pid431980', '话题链接已经复制到剪贴板')">29楼</strong>
													<em onclick="$('postmessage_431980').className='t_bigfont'">大</em>							<em onclick="$('postmessage_431980').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_431980').className='t_smallfont'">小</em>												发表于 2010-1-14 22:56&nbsp;																					<a href="viewthread.php?tid=32745&amp;page=1&amp;authorid=9515" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_28"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_28"></div><div id="ad_thread4_28"></div>
						
						
																											<div id="postmessage_431980" class="t_msgfont">技术外行的我粗浅地认为，没有https等加密的推特第三方，用不了几分钟，就会因过滤敏感词而被重置。</div>

							
							
							
							
															<div id="post_rate_div_431980"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo431980_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=9515" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=32745&amp;repquote=431980&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 431980)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_28"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid432891" summary="pid432891" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6539" target="_blank" id="userinfo432891" class="dropmenu" onmouseover="showMenu(this.id)">rockliu</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6539">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6539&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_29" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum432891" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=32745&page=1#pid432891', '话题链接已经复制到剪贴板')">30楼</strong>
													<em onclick="$('postmessage_432891').className='t_bigfont'">大</em>							<em onclick="$('postmessage_432891').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_432891').className='t_smallfont'">小</em>												发表于 2010-1-15 14:45&nbsp;																					<a href="viewthread.php?tid=32745&amp;page=1&amp;authorid=6539" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_29"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_29"></div><div id="ad_thread4_29"></div>
						
						
																											<div id="postmessage_432891" class="t_msgfont"><a href="http://twitese.chenshaoju.com/index.php" target="_blank">http://twitese.chenshaoju.com/index.php</a><br />
(关键词:专制) 您浏览的页面或提交的数据包含敏感关键词信息,该关键词已经被过滤</div>

							
							
							
							
															<div id="post_rate_div_432891"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo432891_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=6539" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=32745&amp;repquote=432891&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 432891)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_29"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid434324" summary="pid434324" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=9515" target="_blank" id="userinfo434324" class="dropmenu" onmouseover="showMenu(this.id)">waiting_it</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=9515">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=9515&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_30" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum434324" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=32745&page=1#pid434324', '话题链接已经复制到剪贴板')">31楼</strong>
													<em onclick="$('postmessage_434324').className='t_bigfont'">大</em>							<em onclick="$('postmessage_434324').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_434324').className='t_smallfont'">小</em>												发表于 2010-1-16 11:46&nbsp;																					<a href="viewthread.php?tid=32745&amp;page=1&amp;authorid=9515" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_30"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_30"></div><div id="ad_thread4_30"></div>
						
						
																											<div id="postmessage_434324" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>rockliu</i> 于 2010-1-15 14:45 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=432891&amp;ptid=32745" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
<a href="http://twitese.chenshaoju.com/index.php" target="_blank">http://twitese.chenshaoju.com/index.php</a><br />
(关键词:专制) 您浏览的页面或提交的数据包含敏感关键词信息,该关键词已经被过滤 </blockquote></div>我碰到的是“色情”和“88”</div>

							
							
							
							
															<div id="post_rate_div_434324"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo434324_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=9515" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=32745&amp;repquote=434324&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 434324)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_30"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid434329" summary="pid434329" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=9515" target="_blank" id="userinfo434329" class="dropmenu" onmouseover="showMenu(this.id)">waiting_it</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=9515">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=9515&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_31" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum434329" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=32745&page=1#pid434329', '话题链接已经复制到剪贴板')">32楼</strong>
													<em onclick="$('postmessage_434329').className='t_bigfont'">大</em>							<em onclick="$('postmessage_434329').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_434329').className='t_smallfont'">小</em>												发表于 2010-1-16 11:47&nbsp;																					<a href="viewthread.php?tid=32745&amp;page=1&amp;authorid=9515" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_31"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_31"></div><div id="ad_thread4_31"></div>
						
						
																											<div id="postmessage_434329" class="t_msgfont">感谢楼主，我自己在免费空间搭建的API现在用不了。正在使用楼主提供的。</div>

							
							
							
							
															<div id="post_rate_div_434329"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo434329_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=9515" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=32745&amp;repquote=434329&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 434329)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_31"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid517061" summary="pid517061" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6523" target="_blank" id="userinfo517061" class="dropmenu" onmouseover="showMenu(this.id)">自由西瓜</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6523">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6523&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_32" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum517061" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=32745&page=1#pid517061', '话题链接已经复制到剪贴板')">33楼</strong>
													<em onclick="$('postmessage_517061').className='t_bigfont'">大</em>							<em onclick="$('postmessage_517061').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_517061').className='t_smallfont'">小</em>												发表于 2010-3-15 11:29&nbsp;																					<a href="viewthread.php?tid=32745&amp;page=1&amp;authorid=6523" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_32"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_32"></div><div id="ad_thread4_32"></div>
						
						
																											<div id="postmessage_517061" class="t_msgfont">少举兄，重新弄一个吧。好像有问题了。。</div>

							
							
							
							
															<div id="post_rate_div_517061"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo517061_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=6523" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=32745&amp;repquote=517061&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 517061)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_32"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid517502" summary="pid517502" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=479" target="_blank" id="userinfo517502" class="dropmenu" onmouseover="showMenu(this.id)">无机客</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=479">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=479&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_33" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum517502" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=32745&page=1#pid517502', '话题链接已经复制到剪贴板')">34楼</strong>
													<em onclick="$('postmessage_517502').className='t_bigfont'">大</em>							<em onclick="$('postmessage_517502').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_517502').className='t_smallfont'">小</em>												发表于 2010-3-15 17:18&nbsp;																					<a href="viewthread.php?tid=32745&amp;page=1&amp;authorid=479" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_33"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_33"></div><div id="ad_thread4_33"></div>
						
						
																											<div id="postmessage_517502" class="t_msgfont">出问题了。</div>

							
							
							
							
															<div id="post_rate_div_517502"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo517502_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=479" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=32745&amp;repquote=517502&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 517502)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_33"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid518781" summary="pid518781" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12118" target="_blank" id="userinfo518781" class="dropmenu" onmouseover="showMenu(this.id)">flyfish</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12118">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12118&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_34" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum518781" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=32745&page=1#pid518781', '话题链接已经复制到剪贴板')">35楼</strong>
													<em onclick="$('postmessage_518781').className='t_bigfont'">大</em>							<em onclick="$('postmessage_518781').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_518781').className='t_smallfont'">小</em>												发表于 2010-3-16 15:22&nbsp;																					<a href="viewthread.php?tid=32745&amp;page=1&amp;authorid=12118" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_34"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_34"></div><div id="ad_thread4_34"></div>
						
						
																											<div id="postmessage_518781" class="t_msgfont">每天翻墙，有益健康</div>

							
							
							
							
															<div id="post_rate_div_518781"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo518781_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=12118" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=32745&amp;repquote=518781&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 518781)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_34"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid518801" summary="pid518801" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=919" target="_blank" id="userinfo518801" class="dropmenu" onmouseover="showMenu(this.id)">wistreer</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">推特：@wistreer</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=919">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=919&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_35" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum518801" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=32745&page=1#pid518801', '话题链接已经复制到剪贴板')">36楼</strong>
													<em onclick="$('postmessage_518801').className='t_bigfont'">大</em>							<em onclick="$('postmessage_518801').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_518801').className='t_smallfont'">小</em>												发表于 2010-3-16 15:32&nbsp;																					<a href="viewthread.php?tid=32745&amp;page=1&amp;authorid=919" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_35"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_35"></div><div id="ad_thread4_35"></div>
						
						
																											<div id="postmessage_518801" class="t_msgfont">谢谢了。</div>

							
							
							
							
															<div id="post_rate_div_518801"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo518801_menu" style="display: none;">
										<div class="imicons">
												<a href="http://wpa.qq.com/msgrd?V=1&amp;Uin=459586935&amp;Site=1984bbs.com&amp;Menu=yes" target="_blank"><img src="images/default/qq.gif" alt="QQ" /></a>																							</div>
										<dl></dl>
										<p><a href="space.php?uid=919" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=32745&amp;repquote=518801&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 518801)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_35"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid640217" summary="pid640217" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6961" target="_blank" id="userinfo640217" class="dropmenu" onmouseover="showMenu(this.id)">sin</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">群众</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6961">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6961&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_36" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum640217" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=32745&page=1#pid640217', '话题链接已经复制到剪贴板')">37楼</strong>
													<em onclick="$('postmessage_640217').className='t_bigfont'">大</em>							<em onclick="$('postmessage_640217').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_640217').className='t_smallfont'">小</em>												发表于 2010-5-26 13:01&nbsp;																					<a href="viewthread.php?tid=32745&amp;page=1&amp;authorid=6961" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_36"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_36"></div><div id="ad_thread4_36"></div>
						
						
																											<div id="postmessage_640217" class="t_msgfont">支持</div>

							
							
							
							
															<div id="post_rate_div_640217"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo640217_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=6961" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=32745&amp;repquote=640217&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 640217)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_36"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid648012" summary="pid648012" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=13898" target="_blank" id="userinfo648012" class="dropmenu" onmouseover="showMenu(this.id)">布鲁斯</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">八零后，已婚男，未就业，无收入。</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=13898">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=13898&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_37" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum648012" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=32745&page=1#pid648012', '话题链接已经复制到剪贴板')">38楼</strong>
													<em onclick="$('postmessage_648012').className='t_bigfont'">大</em>							<em onclick="$('postmessage_648012').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_648012').className='t_smallfont'">小</em>												发表于 2010-5-30 19:56&nbsp;																					<a href="viewthread.php?tid=32745&amp;page=1&amp;authorid=13898" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_37"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_37"></div><div id="ad_thread4_37"></div>
						
						
																											<div id="postmessage_648012" class="t_msgfont">server5的最新版无法使用</div>

							
							
							
							
															<div id="post_rate_div_648012"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo648012_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=13898" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=32745&amp;repquote=648012&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 648012)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_37"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid648041" summary="pid648041" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=11233" target="_blank" id="userinfo648041" class="dropmenu" onmouseover="showMenu(this.id)">最是那一瞬</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=11233">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=11233&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_38" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum648041" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=32745&page=1#pid648041', '话题链接已经复制到剪贴板')">39楼</strong>
													<em onclick="$('postmessage_648041').className='t_bigfont'">大</em>							<em onclick="$('postmessage_648041').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_648041').className='t_smallfont'">小</em>												发表于 2010-5-30 20:05&nbsp;																					<a href="viewthread.php?tid=32745&amp;page=1&amp;authorid=11233" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_38"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_38"></div><div id="ad_thread4_38"></div>
						
						
																											<div id="postmessage_648041" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>文一撮</i> 于 2009-12-30 10:22 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=404507&amp;ptid=32745" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
貌似所有server3.chenshaoju.com 下的已经失效了 </blockquote></div>是的,上不了了</div>

							
							
							
							
															<div id="post_rate_div_648041"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo648041_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=11233" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=32745&amp;repquote=648041&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 648041)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_38"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid651023" summary="pid651023" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=13979" target="_blank" id="userinfo651023" class="dropmenu" onmouseover="showMenu(this.id)">yhy96</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=13979">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=13979&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_39" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum651023" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=32745&page=1#pid651023', '话题链接已经复制到剪贴板')">40楼</strong>
													<em onclick="$('postmessage_651023').className='t_bigfont'">大</em>							<em onclick="$('postmessage_651023').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_651023').className='t_smallfont'">小</em>												发表于 2010-6-1 13:07&nbsp;																					<a href="viewthread.php?tid=32745&amp;page=1&amp;authorid=13979" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_39"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_39"></div><div id="ad_thread4_39"></div>
						
						
																											<div id="postmessage_651023" class="t_msgfont">很多已经上不了了....</div>

							
							
							
							
															<div id="post_rate_div_651023"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo651023_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=13979" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=32745&amp;repquote=651023&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 651023)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_39"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid676036" summary="pid676036" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10114" target="_blank" id="userinfo676036" class="dropmenu" onmouseover="showMenu(this.id)">m3g4</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10114">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10114&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_40" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum676036" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=32745&page=1#pid676036', '话题链接已经复制到剪贴板')">41楼</strong>
													<em onclick="$('postmessage_676036').className='t_bigfont'">大</em>							<em onclick="$('postmessage_676036').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_676036').className='t_smallfont'">小</em>												发表于 2010-6-12 06:27&nbsp;																					<a href="viewthread.php?tid=32745&amp;page=1&amp;authorid=10114" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_40"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_40"></div><div id="ad_thread4_40"></div>
						
						
																											<div id="postmessage_676036" class="t_msgfont">支持</div>

							
							
							
							
															<div id="post_rate_div_676036"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo676036_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=10114" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=32745&amp;repquote=676036&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 676036)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_40"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid676282" summary="pid676282" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=14947" target="_blank" id="userinfo676282" class="dropmenu" onmouseover="showMenu(this.id)">top</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=14947">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=14947&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_41" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum676282" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=32745&page=1#pid676282', '话题链接已经复制到剪贴板')">42楼</strong>
													<em onclick="$('postmessage_676282').className='t_bigfont'">大</em>							<em onclick="$('postmessage_676282').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_676282').className='t_smallfont'">小</em>												发表于 2010-6-12 09:50&nbsp;																					<a href="viewthread.php?tid=32745&amp;page=1&amp;authorid=14947" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_41"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_41"></div><div id="ad_thread4_41"></div>
						
						
																											<div id="postmessage_676282" class="t_msgfont">基本不用，谢谢提供</div>

							
							
							
							
															<div id="post_rate_div_676282"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo676282_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=14947" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=32745&amp;repquote=676282&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 676282)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_41"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid676582" summary="pid676582" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=16377" target="_blank" id="userinfo676582" class="dropmenu" onmouseover="showMenu(this.id)">逍遥独醒</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">孤单的思念</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=16377">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=16377&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_42" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum676582" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=32745&page=1#pid676582', '话题链接已经复制到剪贴板')">43楼</strong>
													<em onclick="$('postmessage_676582').className='t_bigfont'">大</em>							<em onclick="$('postmessage_676582').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_676582').className='t_smallfont'">小</em>												发表于 2010-6-12 11:20&nbsp;																					<a href="viewthread.php?tid=32745&amp;page=1&amp;authorid=16377" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_42"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_42"></div><div id="ad_thread4_42"></div>
						
						
																											<div id="postmessage_676582" class="t_msgfont">翻墙就是为了看 youtube</div>

							
							
							
							
															<div id="post_rate_div_676582"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo676582_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=16377" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=32745&amp;repquote=676582&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 676582)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_42"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid676764" summary="pid676764" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=16366" target="_blank" id="userinfo676764" class="dropmenu" onmouseover="showMenu(this.id)">hillet</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">小学一年级成为少先队员，初二推优入团。高中没有教过团费,但还是团员;大学没有教过团费,不知道还是不是团圆;目前最高政治地位还是团员(现在应该超龄了吧)</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=16366">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=16366&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_43" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum676764" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=32745&page=1#pid676764', '话题链接已经复制到剪贴板')">44楼</strong>
													<em onclick="$('postmessage_676764').className='t_bigfont'">大</em>							<em onclick="$('postmessage_676764').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_676764').className='t_smallfont'">小</em>												发表于 2010-6-12 12:36&nbsp;																					<a href="viewthread.php?tid=32745&amp;page=1&amp;authorid=16366" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_43"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_43"></div><div id="ad_thread4_43"></div>
						
						
																											<div id="postmessage_676764" class="t_msgfont">mark,当备用 感谢楼主</div>

							
							
							
							
															<div id="post_rate_div_676764"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo676764_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://none" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=16366" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=32745&amp;repquote=676764&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 676764)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_43"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid717272" summary="pid717272" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=5861" target="_blank" id="userinfo717272" class="dropmenu" onmouseover="showMenu(this.id)">8卦8卦</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=5861">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=5861&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_44" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum717272" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=32745&page=1#pid717272', '话题链接已经复制到剪贴板')">45楼</strong>
													<em onclick="$('postmessage_717272').className='t_bigfont'">大</em>							<em onclick="$('postmessage_717272').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_717272').className='t_smallfont'">小</em>												发表于 2010-7-2 12:28&nbsp;																					<a href="viewthread.php?tid=32745&amp;page=1&amp;authorid=5861" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_44"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_44"></div><div id="ad_thread4_44"></div>
						
						
																											<div id="postmessage_717272" class="t_msgfont">翻翻更健康哈</div>

							
							
							
							
															<div id="post_rate_div_717272"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo717272_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=5861" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=32745&amp;repquote=717272&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 717272)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_44"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid719862" summary="pid719862" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8425" target="_blank" id="userinfo719862" class="dropmenu" onmouseover="showMenu(this.id)">lijia_fly</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8425">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8425&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_45" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum719862" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=32745&page=1#pid719862', '话题链接已经复制到剪贴板')">46楼</strong>
													<em onclick="$('postmessage_719862').className='t_bigfont'">大</em>							<em onclick="$('postmessage_719862').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_719862').className='t_smallfont'">小</em>												发表于 2010-7-4 00:22&nbsp;																					<a href="viewthread.php?tid=32745&amp;page=1&amp;authorid=8425" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_45"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_45"></div><div id="ad_thread4_45"></div>
						
						
																											<div id="postmessage_719862" class="t_msgfont">上不了！</div>

							
							
							
							
															<div id="post_rate_div_719862"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo719862_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=8425" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=32745&amp;repquote=719862&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 719862)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_45"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid725544" summary="pid725544" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 <a name="lastpost"></a>					<cite>											<a href="space.php?uid=16974" target="_blank" id="userinfo725544" class="dropmenu" onmouseover="showMenu(this.id)">微晨</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=16974">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=16974&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_46" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum725544" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=32745&page=1#pid725544', '话题链接已经复制到剪贴板')">47楼</strong>
													<em onclick="$('postmessage_725544').className='t_bigfont'">大</em>							<em onclick="$('postmessage_725544').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_725544').className='t_smallfont'">小</em>												发表于 2010-7-7 11:08&nbsp;																					<a href="viewthread.php?tid=32745&amp;page=1&amp;authorid=16974" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_46"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_46"></div><div id="ad_thread4_46"></div>
						
						
																											<div id="postmessage_725544" class="t_msgfont">很宝贵的资源,感谢分享.</div>

							
							
							
							
															<div id="post_rate_div_725544"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo725544_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=16974" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=32745&amp;repquote=725544&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 725544)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_46"></div>				</div>
			</td>
		</tr>
		</table>
		</div>
</form>





<div class="pages_btns">
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=32745&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=32745&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
				<span class="postbtn" id="newspecialtmp" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=32745&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

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

	<form method="post" id="postform" action="post.php?action=reply&amp;fid=26&amp;tid=32745&amp;extra=&amp;replysubmit=yes" onSubmit="return validate(this)">
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
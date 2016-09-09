<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<title>Opera Mini 4.2实验室版，可自定义代理服务器 - 国家局域网研究所 -  1984bbs.com </title>
<meta name="keywords" content="" />
<meta name="MSSmartTagsPreventParsing" content="True" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<link rel="archives" title="1984bbs.com" href="https://1984bbs.com/archiver/" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_viewthread.css" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_common.css" />
<script type="text/javascript">
	var discuz_uid = 13019;var IMGDIR = 'images/default';var attackevasive = '0';var gid = 0;var STYLEID = '1';
	gid = parseInt('3');var fid = parseInt('26');var tid = parseInt('31433');
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
			<p><a href="index.php" id="forumlist" onmouseover="showMenu(this.id)" class="dropmenu">1984bbs.com</a> &raquo; <a href="forumdisplay.php?fid=26">国家局域网研究所</a> &raquo; Opera Mini 4.2实验室版，可自定义代理服务器</p>
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
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=31433&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=31433&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
				<span class="postbtn" id="newspecial" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=31433&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

	<ul class="popupmenu_popup newspecialmenu" id="newspecial_menu" style="display: none">
		<li><a href="post.php?action=newthread&amp;fid=26&amp;extra=">发新话题</a></li>
		<li class="poll"><a href="post.php?action=newthread&amp;fid=26&amp;extra=&amp;special=1">发布投票</a></li>													</ul>

<form method="post" name="modactions">
	<input type="hidden" name="formhash" value="823c9fa2" />
	<div class="mainbox viewthread">
		<span class="headactions">
					<a href="my.php?item=favorites&amp;tid=31433" id="ajax_favorite" onclick="ajaxmenu(event, this.id, 3000, 0)">收藏</a>
			<a href="my.php?item=subscriptions&amp;subadd=31433" id="ajax_subscription" onclick="ajaxmenu(event, this.id, 3000, null, 0)">订阅</a>
			<a href="misc.php?action=emailfriend&amp;tid=31433" id="emailfriend" onclick="ajaxmenu(event, this.id, 9000000, null, 0)">推荐</a>
				<a href="viewthread.php?action=printable&amp;tid=31433" target="_blank" class="notabs">打印</a>
				</span>
		<h1>Opera Mini 4.2实验室版，可自定义代理服务器		</h1>
							<table id="pid378414" summary="pid378414" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10875" target="_blank" id="userinfo378414" class="dropmenu" onmouseover="showMenu(this.id)">曾默之</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10875">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10875&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_0" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum378414" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=31433&page=1#pid378414', '话题链接已经复制到剪贴板')">1楼</strong>
													<em onclick="$('postmessage_378414').className='t_bigfont'">大</em>							<em onclick="$('postmessage_378414').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_378414').className='t_smallfont'">小</em>												发表于 2009-12-17 13:05&nbsp;																					<a href="viewthread.php?tid=31433&amp;page=1&amp;authorid=10875" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_0"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_0"></div><div id="ad_thread4_0"></div>
													<h2>Opera Mini 4.2实验室版，可自定义代理服务器</h2>
						
						
																											<div id="postmessage_378414" class="t_msgfont">国人的修改版本，可0键导航，自定义代理服务器，内置了5、6个代理服务器，手机翻墙的利器。<br />
Nokia s60 3rd测试没问题，其他机型兼容性不详，请自行测试！<br />
下载链接：<a href="http://public.blu.livefilestore.com/y1pjteR_RSsING863eKGyWbLlww8x0TRXzFEXp_5aF0V16yaEj63wzyuP0Oykq2QF2CCAidFpA9oROPOlRtMGY3rw/Opera%20Mini%E5%AE%9E%E9%AA%8C%E5%AE%A4%E7%89%88.jar?download" target="_blank">http://public.blu.livefilestore. ... %89%88.jar?download</a><br />
<br />
[<i> 本帖最后由 曾默之 于 2009-12-17 13:07 编辑 </i>]</div>

							
							
							
							
															<div id="post_rate_div_378414"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo378414_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=10875" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=31433&amp;repquote=378414&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 378414)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_0"></div>				</div>
			</td>
		</tr>
		</table>
		</div><div class="ad_column" id="ad_interthread"><a href="/viewthread.php?tid=54699" target="_blank" style="color:red;">1984bbs是一个非营利项目，它需要您的捐助！</font></a>		</div>
	<div class="mainbox viewthread">
			<table id="pid378715" summary="pid378715" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10282" target="_blank" id="userinfo378715" class="dropmenu" onmouseover="showMenu(this.id)">北极燕鸥</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">长期在阳光下潜伏</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10282">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10282&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_1" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum378715" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=31433&page=1#pid378715', '话题链接已经复制到剪贴板')">2楼</strong>
													<em onclick="$('postmessage_378715').className='t_bigfont'">大</em>							<em onclick="$('postmessage_378715').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_378715').className='t_smallfont'">小</em>												发表于 2009-12-17 15:57&nbsp;																					<a href="viewthread.php?tid=31433&amp;page=1&amp;authorid=10282" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_1"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_1"></div><div id="ad_thread4_1"></div>
						
						
																											<div id="postmessage_378715" class="t_msgfont">顶起 先测试一哈</div>

							
							
							
							
															<div id="post_rate_div_378715"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo378715_menu" style="display: none;">
										<div class="imicons">
													<a target='_blank' href='http://settings.messenger.live.com/Conversation/IMMe.aspx?invitee=lxiaozhang@hotmail.com&mkt=zh-cn'><img style='border-style: none;' src='http://messenger.services.live.com/users/lxiaozhang@hotmail.com/presenceimage?mkt=zh-cn' width='16' height='16' /></a>
																																			</div>
										<dl></dl>
										<p><a href="space.php?uid=10282" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=31433&amp;repquote=378715&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 378715)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_1"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid378721" summary="pid378721" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10282" target="_blank" id="userinfo378721" class="dropmenu" onmouseover="showMenu(this.id)">北极燕鸥</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">长期在阳光下潜伏</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10282">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10282&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_2" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum378721" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=31433&page=1#pid378721', '话题链接已经复制到剪贴板')">3楼</strong>
													<em onclick="$('postmessage_378721').className='t_bigfont'">大</em>							<em onclick="$('postmessage_378721').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_378721').className='t_smallfont'">小</em>												发表于 2009-12-17 15:59&nbsp;																					<a href="viewthread.php?tid=31433&amp;page=1&amp;authorid=10282" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_2"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_2"></div><div id="ad_thread4_2"></div>
						
						
																											<div id="postmessage_378721" class="t_msgfont">晕啊 怎么下不了呢</div>

							
							
							
							
															<div id="post_rate_div_378721"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo378721_menu" style="display: none;">
										<div class="imicons">
													<a target='_blank' href='http://settings.messenger.live.com/Conversation/IMMe.aspx?invitee=lxiaozhang@hotmail.com&mkt=zh-cn'><img style='border-style: none;' src='http://messenger.services.live.com/users/lxiaozhang@hotmail.com/presenceimage?mkt=zh-cn' width='16' height='16' /></a>
																																			</div>
										<dl></dl>
										<p><a href="space.php?uid=10282" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=31433&amp;repquote=378721&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 378721)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_2"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid379358" summary="pid379358" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10875" target="_blank" id="userinfo379358" class="dropmenu" onmouseover="showMenu(this.id)">曾默之</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10875">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10875&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_3" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum379358" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=31433&page=1#pid379358', '话题链接已经复制到剪贴板')">4楼</strong>
													<em onclick="$('postmessage_379358').className='t_bigfont'">大</em>							<em onclick="$('postmessage_379358').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_379358').className='t_smallfont'">小</em>												发表于 2009-12-17 20:21&nbsp;																					<a href="viewthread.php?tid=31433&amp;page=1&amp;authorid=10875" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_3"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_3"></div><div id="ad_thread4_3"></div>
						
						
																											<div id="postmessage_379358" class="t_msgfont">新的下载地址：<br />
<a href="http://opm.kuruan.net/show.asp?id=93" target="_blank">http://opm.kuruan.net/show.asp?id=93</a></div>

							
							
							
							
															<div id="post_rate_div_379358"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo379358_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=10875" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=31433&amp;repquote=379358&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 379358)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_3"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid379548" summary="pid379548" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=11060" target="_blank" id="userinfo379548" class="dropmenu" onmouseover="showMenu(this.id)">lanfeng</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=11060">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=11060&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_4" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum379548" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=31433&page=1#pid379548', '话题链接已经复制到剪贴板')">5楼</strong>
													<em onclick="$('postmessage_379548').className='t_bigfont'">大</em>							<em onclick="$('postmessage_379548').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_379548').className='t_smallfont'">小</em>												发表于 2009-12-17 21:08&nbsp;																					<a href="viewthread.php?tid=31433&amp;page=1&amp;authorid=11060" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_4"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_4"></div><div id="ad_thread4_4"></div>
						
						
																											<div id="postmessage_379548" class="t_msgfont">哇，去下载了！&nbsp;&nbsp;谢谢分享啦</div>

							
							
							
							
															<div id="post_rate_div_379548"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo379548_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=11060" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=31433&amp;repquote=379548&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 379548)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_4"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid379637" summary="pid379637" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=11067" target="_blank" id="userinfo379637" class="dropmenu" onmouseover="showMenu(this.id)">残月</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">残月</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=11067">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=11067&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_5" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum379637" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=31433&page=1#pid379637', '话题链接已经复制到剪贴板')">6楼</strong>
													<em onclick="$('postmessage_379637').className='t_bigfont'">大</em>							<em onclick="$('postmessage_379637').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_379637').className='t_smallfont'">小</em>												发表于 2009-12-17 21:26&nbsp;																					<a href="viewthread.php?tid=31433&amp;page=1&amp;authorid=11067" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_5"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_5"></div><div id="ad_thread4_5"></div>
						
						
																											<div id="postmessage_379637" class="t_msgfont">为什么我装在手机卡里面却找不到？</div>

							
							
							
							
															<div id="post_rate_div_379637"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo379637_menu" style="display: none;">
										<div class="imicons">
												<a href="http://wpa.qq.com/msgrd?V=1&amp;Uin=421238162&amp;Site=1984bbs.com&amp;Menu=yes" target="_blank"><img src="images/default/qq.gif" alt="QQ" /></a>																							</div>
										<dl></dl>
										<p><a href="space.php?uid=11067" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=31433&amp;repquote=379637&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 379637)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_5"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid379829" summary="pid379829" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10875" target="_blank" id="userinfo379829" class="dropmenu" onmouseover="showMenu(this.id)">曾默之</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10875">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10875&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_6" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum379829" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=31433&page=1#pid379829', '话题链接已经复制到剪贴板')">7楼</strong>
													<em onclick="$('postmessage_379829').className='t_bigfont'">大</em>							<em onclick="$('postmessage_379829').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_379829').className='t_smallfont'">小</em>												发表于 2009-12-17 22:38&nbsp;																					<a href="viewthread.php?tid=31433&amp;page=1&amp;authorid=10875" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_6"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_6"></div><div id="ad_thread4_6"></div>
						
						
																											<div id="postmessage_379829" class="t_msgfont">你的手机是什么品牌的？什么型号？</div>

							
							
							
							
															<div id="post_rate_div_379829"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo379829_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=10875" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=31433&amp;repquote=379829&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 379829)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_6"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid382118" summary="pid382118" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=11133" target="_blank" id="userinfo382118" class="dropmenu" onmouseover="showMenu(this.id)">Zhurong</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=11133">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=11133&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_7" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum382118" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=31433&page=1#pid382118', '话题链接已经复制到剪贴板')">8楼</strong>
													<em onclick="$('postmessage_382118').className='t_bigfont'">大</em>							<em onclick="$('postmessage_382118').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_382118').className='t_smallfont'">小</em>												发表于 2009-12-19 00:46&nbsp;																					<a href="viewthread.php?tid=31433&amp;page=1&amp;authorid=11133" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_7"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_7"></div><div id="ad_thread4_7"></div>
						
						
																											<div id="postmessage_382118" class="t_msgfont">哈，Opera mini代理服务器地址公布（09.12.07更新）<br />
<a href="http://www.bbercn.com/opera-mini-proxy-server-address-released.html" target="_blank">http://www.bbercn.com/opera-mini ... dress-released.html</a></div>

							
							
							
							
															<div id="post_rate_div_382118"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo382118_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=11133" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=31433&amp;repquote=382118&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 382118)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_7"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid385225" summary="pid385225" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10875" target="_blank" id="userinfo385225" class="dropmenu" onmouseover="showMenu(this.id)">曾默之</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10875">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10875&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_8" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum385225" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=31433&page=1#pid385225', '话题链接已经复制到剪贴板')">9楼</strong>
													<em onclick="$('postmessage_385225').className='t_bigfont'">大</em>							<em onclick="$('postmessage_385225').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_385225').className='t_smallfont'">小</em>												发表于 2009-12-21 00:42&nbsp;																					<a href="viewthread.php?tid=31433&amp;page=1&amp;authorid=10875" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_8"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_8"></div><div id="ad_thread4_8"></div>
						
						
																											<div id="postmessage_385225" class="t_msgfont">公布了的代理服务器估计用不久就会挂掉。最好自己建一个，申请免费的空间，上传一个几十K的php文件就行。</div>

							
							
							
							
															<div id="post_rate_div_385225"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo385225_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=10875" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=31433&amp;repquote=385225&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 385225)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_8"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid391405" summary="pid391405" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=11060" target="_blank" id="userinfo391405" class="dropmenu" onmouseover="showMenu(this.id)">lanfeng</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=11060">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=11060&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_9" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum391405" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=31433&page=1#pid391405', '话题链接已经复制到剪贴板')">10楼</strong>
													<em onclick="$('postmessage_391405').className='t_bigfont'">大</em>							<em onclick="$('postmessage_391405').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_391405').className='t_smallfont'">小</em>												发表于 2009-12-23 20:10&nbsp;																					<a href="viewthread.php?tid=31433&amp;page=1&amp;authorid=11060" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_9"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_9"></div><div id="ad_thread4_9"></div>
						
						
																											<div id="postmessage_391405" class="t_msgfont">moto e680i 测试无法进入界面。</div>

							
							
							
							
															<div id="post_rate_div_391405"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo391405_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=11060" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=31433&amp;repquote=391405&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 391405)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_9"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid395193" summary="pid395193" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6749" target="_blank" id="userinfo395193" class="dropmenu" onmouseover="showMenu(this.id)">sam3327</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6749">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6749&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_10" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum395193" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=31433&page=1#pid395193', '话题链接已经复制到剪贴板')">11楼</strong>
													<em onclick="$('postmessage_395193').className='t_bigfont'">大</em>							<em onclick="$('postmessage_395193').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_395193').className='t_smallfont'">小</em>												发表于 2009-12-25 14:54&nbsp;																					<a href="viewthread.php?tid=31433&amp;page=1&amp;authorid=6749" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_10"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_10"></div><div id="ad_thread4_10"></div>
						
						
																											<div id="postmessage_395193" class="t_msgfont">nokia e63 实验成功，太棒了</div>

							
							
							
							
															<div id="post_rate_div_395193"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo395193_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=6749" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=31433&amp;repquote=395193&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 395193)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_10"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid396189" summary="pid396189" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1404" target="_blank" id="userinfo396189" class="dropmenu" onmouseover="showMenu(this.id)">qisaiman</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">路边社长工专业维修神7神6返回舱以上保证全行业服务质量最好价</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1404">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1404&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_11" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum396189" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=31433&page=1#pid396189', '话题链接已经复制到剪贴板')">12楼</strong>
													<em onclick="$('postmessage_396189').className='t_bigfont'">大</em>							<em onclick="$('postmessage_396189').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_396189').className='t_smallfont'">小</em>												发表于 2009-12-25 22:12&nbsp;																					<a href="viewthread.php?tid=31433&amp;page=1&amp;authorid=1404" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_11"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_11"></div><div id="ad_thread4_11"></div>
						
						
																											<div id="postmessage_396189" class="t_msgfont">能做个cod版本么，我的8700装jad很烦</div>

							
							
							
							
															<div id="post_rate_div_396189"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo396189_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1404" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=31433&amp;repquote=396189&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 396189)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_11"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid398774" summary="pid398774" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10875" target="_blank" id="userinfo398774" class="dropmenu" onmouseover="showMenu(this.id)">曾默之</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10875">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10875&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_12" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum398774" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=31433&page=1#pid398774', '话题链接已经复制到剪贴板')">13楼</strong>
													<em onclick="$('postmessage_398774').className='t_bigfont'">大</em>							<em onclick="$('postmessage_398774').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_398774').className='t_smallfont'">小</em>												发表于 2009-12-27 01:50&nbsp;																					<a href="viewthread.php?tid=31433&amp;page=1&amp;authorid=10875" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_12"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_12"></div><div id="ad_thread4_12"></div>
						
						
																											<div id="postmessage_398774" class="t_msgfont">黑莓有专门的修改版，兄台自行搜索一下。</div>

							
							
							
							
															<div id="post_rate_div_398774"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo398774_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=10875" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=31433&amp;repquote=398774&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 398774)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_12"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid401964" summary="pid401964" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=11398" target="_blank" id="userinfo401964" class="dropmenu" onmouseover="showMenu(this.id)">西伯尔的兔子</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">I love acting. It is so much more real than life.     twitter:@batilo</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=11398">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=11398&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_13" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum401964" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=31433&page=1#pid401964', '话题链接已经复制到剪贴板')">14楼</strong>
													<em onclick="$('postmessage_401964').className='t_bigfont'">大</em>							<em onclick="$('postmessage_401964').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_401964').className='t_smallfont'">小</em>												发表于 2009-12-28 18:36&nbsp;																					<a href="viewthread.php?tid=31433&amp;page=1&amp;authorid=11398" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_13"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_13"></div><div id="ad_thread4_13"></div>
						
						
																											<div id="postmessage_401964" class="t_msgfont">我搭建了一个中转服务器- -&nbsp;&nbsp;可是发现没法使用诶。貌似原来的主域名就已经被屏蔽了。囧RZ</div>

							
							
							
							
															<div id="post_rate_div_401964"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo401964_menu" style="display: none;">
										<div class="imicons">
													<a target='_blank' href='http://settings.messenger.live.com/Conversation/IMMe.aspx?invitee=Batilo@soweb.me&mkt=zh-cn'><img style='border-style: none;' src='http://messenger.services.live.com/users/Batilo@soweb.me/presenceimage?mkt=zh-cn' width='16' height='16' /></a>
												<a href="http://wpa.qq.com/msgrd?V=1&amp;Uin=16159296&amp;Site=1984bbs.com&amp;Menu=yes" target="_blank"><img src="images/default/qq.gif" alt="QQ" /></a>																							</div>
										<dl></dl>
											<p><a href="http://4ashes.me" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=11398" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=31433&amp;repquote=401964&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 401964)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_13"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid403840" summary="pid403840" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=250" target="_blank" id="userinfo403840" class="dropmenu" onmouseover="showMenu(this.id)">dada</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">不明真相群众</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=250">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=250&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_14" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum403840" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=31433&page=1#pid403840', '话题链接已经复制到剪贴板')">15楼</strong>
													<em onclick="$('postmessage_403840').className='t_bigfont'">大</em>							<em onclick="$('postmessage_403840').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_403840').className='t_smallfont'">小</em>												发表于 2009-12-29 19:14&nbsp;																					<a href="viewthread.php?tid=31433&amp;page=1&amp;authorid=250" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_14"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_14"></div><div id="ad_thread4_14"></div>
						
						
																											<div id="postmessage_403840" class="t_msgfont">下不了了！</div>

							
							
							
							
															<div id="post_rate_div_403840"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo403840_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=250" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=31433&amp;repquote=403840&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 403840)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_14"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid403865" summary="pid403865" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=250" target="_blank" id="userinfo403865" class="dropmenu" onmouseover="showMenu(this.id)">dada</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">不明真相群众</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=250">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=250&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_15" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum403865" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=31433&page=1#pid403865', '话题链接已经复制到剪贴板')">16楼</strong>
													<em onclick="$('postmessage_403865').className='t_bigfont'">大</em>							<em onclick="$('postmessage_403865').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_403865').className='t_smallfont'">小</em>												发表于 2009-12-29 19:36&nbsp;																					<a href="viewthread.php?tid=31433&amp;page=1&amp;authorid=250" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_15"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_15"></div><div id="ad_thread4_15"></div>
						
						
																											<div id="postmessage_403865" class="t_msgfont"><a href="https://1984bbs.com/viewthread.php?tid=32509&amp;pid=403864&amp;page=1&amp;extra=page%3D1#pid403864" target="_blank">https://1984bbs.com/viewthread.p ... =page%3D1#pid403864</a><br />
<br />
看上面</div>

							
							
							
							
															<div id="post_rate_div_403865"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo403865_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=250" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=31433&amp;repquote=403865&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 403865)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_15"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid409185" summary="pid409185" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6349" target="_blank" id="userinfo409185" class="dropmenu" onmouseover="showMenu(this.id)">水产先锋</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">形势一骗大好</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6349">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6349&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_16" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum409185" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=31433&page=1#pid409185', '话题链接已经复制到剪贴板')">17楼</strong>
													<em onclick="$('postmessage_409185').className='t_bigfont'">大</em>							<em onclick="$('postmessage_409185').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_409185').className='t_smallfont'">小</em>												发表于 2010-1-2 01:18&nbsp;																					<a href="viewthread.php?tid=31433&amp;page=1&amp;authorid=6349" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_16"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_16"></div><div id="ad_thread4_16"></div>
						
						
																											<div id="postmessage_409185" class="t_msgfont">wap可用否？</div>

							
							
							
							
															<div id="post_rate_div_409185"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo409185_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=6349" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=31433&amp;repquote=409185&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 409185)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_16"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid409395" summary="pid409395" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10059" target="_blank" id="userinfo409395" class="dropmenu" onmouseover="showMenu(this.id)">hjinexe</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">独立运转公车控</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10059">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10059&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_17" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum409395" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=31433&page=1#pid409395', '话题链接已经复制到剪贴板')">18楼</strong>
													<em onclick="$('postmessage_409395').className='t_bigfont'">大</em>							<em onclick="$('postmessage_409395').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_409395').className='t_smallfont'">小</em>												发表于 2010-1-2 10:37&nbsp;																					<a href="viewthread.php?tid=31433&amp;page=1&amp;authorid=10059" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_17"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_17"></div><div id="ad_thread4_17"></div>
						
						
																											<div id="postmessage_409395" class="t_msgfont">需要WIFI的黑莓版</div>

							
							
							
							
															<div id="post_rate_div_409395"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo409395_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=10059" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=31433&amp;repquote=409395&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 409395)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_17"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid409587" summary="pid409587" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 <a name="lastpost"></a>					<cite>											<a href="space.php?uid=11423" target="_blank" id="userinfo409587" class="dropmenu" onmouseover="showMenu(this.id)">4dmx</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=11423">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=11423&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_18" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum409587" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=31433&page=1#pid409587', '话题链接已经复制到剪贴板')">19楼</strong>
													<em onclick="$('postmessage_409587').className='t_bigfont'">大</em>							<em onclick="$('postmessage_409587').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_409587').className='t_smallfont'">小</em>												发表于 2010-1-2 12:56&nbsp;																					<a href="viewthread.php?tid=31433&amp;page=1&amp;authorid=11423" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_18"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_18"></div><div id="ad_thread4_18"></div>
						
						
																											<div id="postmessage_409587" class="t_msgfont">不是有德服中文的吗,我正在用,速度很快,我的手机是黑莓8820</div>

							
							
							
							
															<div id="post_rate_div_409587"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo409587_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=11423" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=31433&amp;repquote=409587&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 409587)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_18"></div>				</div>
			</td>
		</tr>
		</table>
		</div>
</form>





<div class="pages_btns">
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=31433&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=31433&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
				<span class="postbtn" id="newspecialtmp" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=31433&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

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

	<form method="post" id="postform" action="post.php?action=reply&amp;fid=26&amp;tid=31433&amp;extra=&amp;replysubmit=yes" onSubmit="return validate(this)">
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
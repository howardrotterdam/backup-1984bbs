<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<title>用ssh免费空间的注意了，有人向官方论坛举报要求关闭ssh tunnel - 国家局域网研究所 -  1984bbs.com </title>
<meta name="keywords" content="" />
<meta name="MSSmartTagsPreventParsing" content="True" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<link rel="archives" title="1984bbs.com" href="https://1984bbs.com/archiver/" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_viewthread.css" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_common.css" />
<script type="text/javascript">
	var discuz_uid = 13019;var IMGDIR = 'images/default';var attackevasive = '0';var gid = 0;var STYLEID = '1';
	gid = parseInt('3');var fid = parseInt('26');var tid = parseInt('34598');
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
			<p><a href="index.php" id="forumlist" onmouseover="showMenu(this.id)" class="dropmenu">1984bbs.com</a> &raquo; <a href="forumdisplay.php?fid=26">国家局域网研究所</a> &raquo; 用ssh免费空间的注意了，有人向官方论坛举报要求关闭ssh tunnel</p>
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
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=34598&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=34598&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
				<span class="postbtn" id="newspecial" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=34598&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

	<ul class="popupmenu_popup newspecialmenu" id="newspecial_menu" style="display: none">
		<li><a href="post.php?action=newthread&amp;fid=26&amp;extra=">发新话题</a></li>
		<li class="poll"><a href="post.php?action=newthread&amp;fid=26&amp;extra=&amp;special=1">发布投票</a></li>													</ul>

<form method="post" name="modactions">
	<input type="hidden" name="formhash" value="823c9fa2" />
	<div class="mainbox viewthread">
		<span class="headactions">
					<a href="my.php?item=favorites&amp;tid=34598" id="ajax_favorite" onclick="ajaxmenu(event, this.id, 3000, 0)">收藏</a>
			<a href="my.php?item=subscriptions&amp;subadd=34598" id="ajax_subscription" onclick="ajaxmenu(event, this.id, 3000, null, 0)">订阅</a>
			<a href="misc.php?action=emailfriend&amp;tid=34598" id="emailfriend" onclick="ajaxmenu(event, this.id, 9000000, null, 0)">推荐</a>
				<a href="viewthread.php?action=printable&amp;tid=34598" target="_blank" class="notabs">打印</a>
				</span>
		<h1>用ssh免费空间的注意了，有人向官方论坛举报要求关闭ssh tunnel		</h1>
							<table id="pid429799" summary="pid429799" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10114" target="_blank" id="userinfo429799" class="dropmenu" onmouseover="showMenu(this.id)">m3g4</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10114">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10114&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_0" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum429799" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=34598&page=1#pid429799', '话题链接已经复制到剪贴板')">1楼</strong>
													<em onclick="$('postmessage_429799').className='t_bigfont'">大</em>							<em onclick="$('postmessage_429799').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_429799').className='t_smallfont'">小</em>												发表于 2010-1-13 21:04&nbsp;																					<a href="viewthread.php?tid=34598&amp;page=1&amp;authorid=10114" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_0"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_0"></div><div id="ad_thread4_0"></div>
													<h2>用ssh免费空间的注意了，有人向官方论坛举报要求关闭ssh tunnel</h2>
						
						
																											<div id="postmessage_429799" class="t_msgfont">前一阵子在推特上看见的，是个极品，今天又看到了，推号emules (cmule)， 言论如下，有兴趣可以去围观。&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;emules 回复 私信 收藏转发 14:42<br />
写信给xjwebs，叫他们关闭tunnel，他也给我回信说关掉了,效率不错。 通过 web<br />
emules 回复 私信 收藏转发 14:43<br />
我会继续在twitter 上搜索免费支持ssh 的空间，写信叫他们关闭tunnel，thanks通过 web&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;emules 回复 私信 收藏转发 00:14<br />
showmywebsite.com 关掉 ssh tunnel，不错， 通过 web<br />
emules 回复 私信 收藏 转发 3 小时前<br />
<a href="http://www.openwebster.com/forums/viewtopic.php?f=16&amp;t=87" target="_blank">http://www.openwebster.com/forums/viewtopic.php?f=16&amp;t=87</a> openwebster 关闭 SSH tunnel ，不 错，效率很高。 通过 web&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;emules 回复 私信 收藏转发 3 小时前<br />
@williamlong支持SSH的免费空间: 方便大家申请SSH账户。 <a href="http://goo.gl/fb/1Irr//" target="_blank">http://goo.gl/fb/1Irr//</a> 谢谢整理，我会一个一个举报 <a href="http://www.openwebster.com/forums/viewtopic.php?f=16&amp;t=87" target="_blank">http://www.openwebster.com/forums/viewtopic.php?f=16&amp;t=87</a> 通过 web 回复 williamlong<br />
<br />
[<i> 本帖最后由 m3g4 于 2010-1-13 21:09 编辑 </i>]</div>

							
							
							
							
															<div id="post_rate_div_429799"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo429799_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=10114" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=34598&amp;repquote=429799&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 429799)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_0"></div>				</div>
			</td>
		</tr>
		</table>
		</div><div class="ad_column" id="ad_interthread"><a href="/viewthread.php?tid=54699" target="_blank" style="color:red;">1984bbs是一个非营利项目，它需要您的捐助！</font></a>		</div>
	<div class="mainbox viewthread">
			<table id="pid429854" summary="pid429854" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=464" target="_blank" id="userinfo429854" class="dropmenu" onmouseover="showMenu(this.id)">Phillip</a></cite>
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
						<strong title="复制话题链接到剪贴板" id="postnum429854" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=34598&page=1#pid429854', '话题链接已经复制到剪贴板')">2楼</strong>
													<em onclick="$('postmessage_429854').className='t_bigfont'">大</em>							<em onclick="$('postmessage_429854').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_429854').className='t_smallfont'">小</em>												发表于 2010-1-13 21:40&nbsp;																					<a href="viewthread.php?tid=34598&amp;page=1&amp;authorid=464" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_1"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_1"></div><div id="ad_thread4_1"></div>
						
						
																											<div id="postmessage_429854" class="t_msgfont">emules 找到支持SSH tunnel 的空间，你们自己用就行了，如果发出来，我就会去举报。 你们都用免费的了，那些卖ssh 和VPN 的要喝西北风了。 <br />
通过 web <br />
约4小时前</div>

							
							
							
							
															<div id="post_rate_div_429854"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo429854_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=464" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=34598&amp;repquote=429854&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 429854)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_1"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid429861" summary="pid429861" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=464" target="_blank" id="userinfo429861" class="dropmenu" onmouseover="showMenu(this.id)">Phillip</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">路边社特邀围观群众</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=464">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=464&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_2" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum429861" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=34598&page=1#pid429861', '话题链接已经复制到剪贴板')">3楼</strong>
													<em onclick="$('postmessage_429861').className='t_bigfont'">大</em>							<em onclick="$('postmessage_429861').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_429861').className='t_smallfont'">小</em>												发表于 2010-1-13 21:42&nbsp;																					<a href="viewthread.php?tid=34598&amp;page=1&amp;authorid=464" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_2"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_2"></div><div id="ad_thread4_2"></div>
						
						
																											<div id="postmessage_429861" class="t_msgfont">showmywebsite.com 关掉 ssh tunnel，不错， <br />
通过 web<br />
2010-01-01 09:14:00<br />
@zzug 而且用空间做代理，要是被GFW 盯上，整个空间的IP 都会被封掉，那么用空间正规做站的人不都被你们给拖累？ <br />
对 zzug 的回复 <br />
通过 web<br />
2009-12-29 20:27:20<br />
@zzug 不可能听你的，他们是有商业利益的是有竞争的，顺便问一句，你为什么这么做？RT// 用空间做代理，自己用用就行了，但你们却把他们公布出来，成千上万用户去注册，来做SSH 代理，这对空间来说无异于DDOS 攻击，而且你们都是做代理不做站，滥用空间，还有理么？ <br />
对 zzug 的回复 <br />
通过 web<br />
2009-12-29 20:24:13<br />
我会继续在twitter 上搜索免费支持ssh 的空间，写信叫他们关闭tunnel，thanks <br />
通过 web<br />
2009-12-28 23:43:36<br />
写信给xjwebs，叫他们关闭tunnel，他也给我回信说关掉了,效率不错。 <br />
通过 web<br />
2009-12-28 23:42:16</div>

							
							
							
							
															<div id="post_rate_div_429861"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo429861_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=464" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=34598&amp;repquote=429861&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 429861)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_2"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid429865" summary="pid429865" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=464" target="_blank" id="userinfo429865" class="dropmenu" onmouseover="showMenu(this.id)">Phillip</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">路边社特邀围观群众</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=464">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=464&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_3" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum429865" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=34598&page=1#pid429865', '话题链接已经复制到剪贴板')">4楼</strong>
													<em onclick="$('postmessage_429865').className='t_bigfont'">大</em>							<em onclick="$('postmessage_429865').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_429865').className='t_smallfont'">小</em>												发表于 2010-1-13 21:44&nbsp;																					<a href="viewthread.php?tid=34598&amp;page=1&amp;authorid=464" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_3"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_3"></div><div id="ad_thread4_3"></div>
						
						
																											<div id="postmessage_429865" class="t_msgfont">我注册的时候已经碰到过有空间拒绝中国IP的注册, 原因是被举报abuse</div>

							
							
							
							
															<div id="post_rate_div_429865"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo429865_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=464" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=34598&amp;repquote=429865&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 429865)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_3"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid429998" summary="pid429998" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1162" target="_blank" id="userinfo429998" class="dropmenu" onmouseover="showMenu(this.id)">小龙人</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">草马族族民</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1162">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1162&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_4" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum429998" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=34598&page=1#pid429998', '话题链接已经复制到剪贴板')">5楼</strong>
													<em onclick="$('postmessage_429998').className='t_bigfont'">大</em>							<em onclick="$('postmessage_429998').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_429998').className='t_smallfont'">小</em>												发表于 2010-1-13 22:52&nbsp;																					<a href="viewthread.php?tid=34598&amp;page=1&amp;authorid=1162" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_4"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_4"></div><div id="ad_thread4_4"></div>
						
						
																											<div id="postmessage_429998" class="t_msgfont">五毛发展迅速啊，跟上了twitter了</div>

							
							
							
							
															<div id="post_rate_div_429998"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo429998_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1162" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=34598&amp;repquote=429998&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 429998)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_4"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid430045" summary="pid430045" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1960" target="_blank" id="userinfo430045" class="dropmenu" onmouseover="showMenu(this.id)">库存袈裟</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">@bruceku 想象力比知识更重要。</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1960">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1960&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_5" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum430045" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=34598&page=1#pid430045', '话题链接已经复制到剪贴板')">6楼</strong>
													<em onclick="$('postmessage_430045').className='t_bigfont'">大</em>							<em onclick="$('postmessage_430045').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_430045').className='t_smallfont'">小</em>												发表于 2010-1-13 23:15&nbsp;																					<a href="viewthread.php?tid=34598&amp;page=1&amp;authorid=1960" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_5"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_5"></div><div id="ad_thread4_5"></div>
						
						
																											<div id="postmessage_430045" class="t_msgfont">他是做SSH/VPN生意，免费SSH影响了他的生意。</div>

							
							
							
							
															<div id="post_rate_div_430045"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo430045_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1960" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=34598&amp;repquote=430045&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 430045)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_5"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid430100" summary="pid430100" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=464" target="_blank" id="userinfo430100" class="dropmenu" onmouseover="showMenu(this.id)">Phillip</a></cite>
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
						<strong title="复制话题链接到剪贴板" id="postnum430100" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=34598&page=1#pid430100', '话题链接已经复制到剪贴板')">7楼</strong>
													<em onclick="$('postmessage_430100').className='t_bigfont'">大</em>							<em onclick="$('postmessage_430100').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_430100').className='t_smallfont'">小</em>												发表于 2010-1-13 23:52&nbsp;																					<a href="viewthread.php?tid=34598&amp;page=1&amp;authorid=464" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_6"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_6"></div><div id="ad_thread4_6"></div>
						
						
																											<div id="postmessage_430100" class="t_msgfont">确实有点不合适, 免费主机不知有多少网站共用一个ip, 要是因为翻墙被封了, 上面的众多网站一起受害</div>

							
							
							
							
															<div id="post_rate_div_430100"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo430100_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=464" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=34598&amp;repquote=430100&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 430100)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_6"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid430253" summary="pid430253" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2589" target="_blank" id="userinfo430253" class="dropmenu" onmouseover="showMenu(this.id)">nicegoal</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">本人懒得加头衔</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2589">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2589&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_7" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum430253" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=34598&page=1#pid430253', '话题链接已经复制到剪贴板')">8楼</strong>
													<em onclick="$('postmessage_430253').className='t_bigfont'">大</em>							<em onclick="$('postmessage_430253').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_430253').className='t_smallfont'">小</em>												发表于 2010-1-14 02:51&nbsp;																					<a href="viewthread.php?tid=34598&amp;page=1&amp;authorid=2589" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_7"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_7"></div><div id="ad_thread4_7"></div>
						
						
																											<div id="postmessage_430253" class="t_msgfont">mwzaf.com已经关闭ssh了</div>

							
							
							
							
															<div id="post_rate_div_430253"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo430253_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=2589" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=34598&amp;repquote=430253&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 430253)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_7"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid430320" summary="pid430320" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10282" target="_blank" id="userinfo430320" class="dropmenu" onmouseover="showMenu(this.id)">北极燕鸥</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">长期在阳光下潜伏</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10282">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10282&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_8" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum430320" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=34598&page=1#pid430320', '话题链接已经复制到剪贴板')">9楼</strong>
													<em onclick="$('postmessage_430320').className='t_bigfont'">大</em>							<em onclick="$('postmessage_430320').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_430320').className='t_smallfont'">小</em>												发表于 2010-1-14 06:15&nbsp;																					<a href="viewthread.php?tid=34598&amp;page=1&amp;authorid=10282" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_8"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_8"></div><div id="ad_thread4_8"></div>
						
						
																											<div id="postmessage_430320" class="t_msgfont">居然也有这等货色 拉出去碎尸</div>

							
							
							
							
															<div id="post_rate_div_430320"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo430320_menu" style="display: none;">
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
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=34598&amp;repquote=430320&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 430320)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_8"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid430401" summary="pid430401" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8351" target="_blank" id="userinfo430401" class="dropmenu" onmouseover="showMenu(this.id)">isonomy</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8351">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8351&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_9" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum430401" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=34598&page=1#pid430401', '话题链接已经复制到剪贴板')">10楼</strong>
													<em onclick="$('postmessage_430401').className='t_bigfont'">大</em>							<em onclick="$('postmessage_430401').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_430401').className='t_smallfont'">小</em>												发表于 2010-1-14 09:04&nbsp;																					<a href="viewthread.php?tid=34598&amp;page=1&amp;authorid=8351" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_9"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_9"></div><div id="ad_thread4_9"></div>
						
						
																											<div id="postmessage_430401" class="t_msgfont">我天朝特色，要输出到全世界</div>

							
							
							
							
															<div id="post_rate_div_430401"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo430401_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=8351" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=34598&amp;repquote=430401&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 430401)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_9"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid430470" summary="pid430470" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6375" target="_blank" id="userinfo430470" class="dropmenu" onmouseover="showMenu(this.id)">zsfzxxx</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">你知道什么是潮吹吗</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6375">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6375&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_10" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum430470" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=34598&page=1#pid430470', '话题链接已经复制到剪贴板')">11楼</strong>
													<em onclick="$('postmessage_430470').className='t_bigfont'">大</em>							<em onclick="$('postmessage_430470').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_430470').className='t_smallfont'">小</em>												发表于 2010-1-14 09:40&nbsp;																					<a href="viewthread.php?tid=34598&amp;page=1&amp;authorid=6375" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_10"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_10"></div><div id="ad_thread4_10"></div>
						
						
																											<div id="postmessage_430470" class="t_msgfont">麻痹的，就为每月几百块钱就举报，典型的SB<br />
<br />
大家一起攻破他那傻逼网站</div>

							
							
							
							
															<div id="post_rate_div_430470"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo430470_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=6375" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=34598&amp;repquote=430470&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 430470)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_10"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid430473" summary="pid430473" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10722" target="_blank" id="userinfo430473" class="dropmenu" onmouseover="showMenu(this.id)">jencoxu</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10722">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10722&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_11" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum430473" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=34598&page=1#pid430473', '话题链接已经复制到剪贴板')">12楼</strong>
													<em onclick="$('postmessage_430473').className='t_bigfont'">大</em>							<em onclick="$('postmessage_430473').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_430473').className='t_smallfont'">小</em>												发表于 2010-1-14 09:41&nbsp;																					<a href="viewthread.php?tid=34598&amp;page=1&amp;authorid=10722" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_11"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_11"></div><div id="ad_thread4_11"></div>
						
						
																											<div id="postmessage_430473" class="t_msgfont">我靠，太阳了</div>

							
							
							
							
															<div id="post_rate_div_430473"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo430473_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=10722" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=34598&amp;repquote=430473&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 430473)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_11"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid430631" summary="pid430631" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=11595" target="_blank" id="userinfo430631" class="dropmenu" onmouseover="showMenu(this.id)">zzug</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=11595">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=11595&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_12" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum430631" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=34598&page=1#pid430631', '话题链接已经复制到剪贴板')">13楼</strong>
													<em onclick="$('postmessage_430631').className='t_bigfont'">大</em>							<em onclick="$('postmessage_430631').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_430631').className='t_smallfont'">小</em>												发表于 2010-1-14 10:55&nbsp;																					<a href="viewthread.php?tid=34598&amp;page=1&amp;authorid=11595" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_12"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_12"></div><div id="ad_thread4_12"></div>
						
						
																											<div id="postmessage_430631" class="t_msgfont">有没有解决办法呀？</div>

							
							
							
							
															<div id="post_rate_div_430631"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo430631_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=11595" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=34598&amp;repquote=430631&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 430631)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_12"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid430643" summary="pid430643" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1960" target="_blank" id="userinfo430643" class="dropmenu" onmouseover="showMenu(this.id)">库存袈裟</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">@bruceku 想象力比知识更重要。</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1960">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1960&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_13" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum430643" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=34598&page=1#pid430643', '话题链接已经复制到剪贴板')">14楼</strong>
													<em onclick="$('postmessage_430643').className='t_bigfont'">大</em>							<em onclick="$('postmessage_430643').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_430643').className='t_smallfont'">小</em>												发表于 2010-1-14 11:00&nbsp;																					<a href="viewthread.php?tid=34598&amp;page=1&amp;authorid=1960" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_13"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_13"></div><div id="ad_thread4_13"></div>
													<h2>回复 13楼 zzug 的话题</h2>
						
						
																											<div id="postmessage_430643" class="t_msgfont">日后我不公开发布支持SSH的免费空间了，欢迎在小组PM我，或在Twitter DM我。</div>

							
							
							
							
															<div id="post_rate_div_430643"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo430643_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1960" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=34598&amp;repquote=430643&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 430643)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_13"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid430684" summary="pid430684" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10114" target="_blank" id="userinfo430684" class="dropmenu" onmouseover="showMenu(this.id)">m3g4</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10114">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10114&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_14" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum430684" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=34598&page=1#pid430684', '话题链接已经复制到剪贴板')">15楼</strong>
													<em onclick="$('postmessage_430684').className='t_bigfont'">大</em>							<em onclick="$('postmessage_430684').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_430684').className='t_smallfont'">小</em>												发表于 2010-1-14 11:13&nbsp;																					<a href="viewthread.php?tid=34598&amp;page=1&amp;authorid=10114" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_14"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_14"></div><div id="ad_thread4_14"></div>
						
						
																											<div id="postmessage_430684" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>库存袈裟</i> 于 2010-1-14 11:00 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=430643&amp;ptid=34598" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
日后我不公开发布支持SSH的免费空间了，欢迎在小组PM我，或在Twitter DM我。 </blockquote></div>这个支持，以免有人闲的蛋疼</div>

							
							
							
							
															<div id="post_rate_div_430684"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo430684_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=10114" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=34598&amp;repquote=430684&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 430684)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_14"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid431564" summary="pid431564" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=11745" target="_blank" id="userinfo431564" class="dropmenu" onmouseover="showMenu(this.id)">风中凌乱</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=11745">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=11745&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_15" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum431564" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=34598&page=1#pid431564', '话题链接已经复制到剪贴板')">16楼</strong>
													<em onclick="$('postmessage_431564').className='t_bigfont'">大</em>							<em onclick="$('postmessage_431564').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_431564').className='t_smallfont'">小</em>												发表于 2010-1-14 18:21&nbsp;																					<a href="viewthread.php?tid=34598&amp;page=1&amp;authorid=11745" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_15"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_15"></div><div id="ad_thread4_15"></div>
						
						
																											<div id="postmessage_431564" class="t_msgfont">既有GFW ，又有这种人，翻个墙可真难啊。</div>

							
							
							
							
															<div id="post_rate_div_431564"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo431564_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=11745" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=34598&amp;repquote=431564&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 431564)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_15"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid433160" summary="pid433160" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=11493" target="_blank" id="userinfo433160" class="dropmenu" onmouseover="showMenu(this.id)">gzlxd</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">Twitter/@gzlxd</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=11493">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=11493&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_16" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum433160" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=34598&page=1#pid433160', '话题链接已经复制到剪贴板')">17楼</strong>
													<em onclick="$('postmessage_433160').className='t_bigfont'">大</em>							<em onclick="$('postmessage_433160').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_433160').className='t_smallfont'">小</em>												发表于 2010-1-15 18:00&nbsp;																					<a href="viewthread.php?tid=34598&amp;page=1&amp;authorid=11493" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_16"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_16"></div><div id="ad_thread4_16"></div>
						
						
																											<div id="postmessage_433160" class="t_msgfont">我两个SSH账号被灭了,才申请了几天</div>

							
							
							
							
															<div id="post_rate_div_433160"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo433160_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=11493" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=34598&amp;repquote=433160&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 433160)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_16"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid434691" summary="pid434691" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=11709" target="_blank" id="userinfo434691" class="dropmenu" onmouseover="showMenu(this.id)">nsdown</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=11709">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=11709&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_17" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum434691" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=34598&page=1#pid434691', '话题链接已经复制到剪贴板')">18楼</strong>
													<em onclick="$('postmessage_434691').className='t_bigfont'">大</em>							<em onclick="$('postmessage_434691').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_434691').className='t_smallfont'">小</em>												发表于 2010-1-16 14:34&nbsp;																					<a href="viewthread.php?tid=34598&amp;page=1&amp;authorid=11709" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_17"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_17"></div><div id="ad_thread4_17"></div>
						
						
																											<div id="postmessage_434691" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>库存袈裟</i> 于 2010-1-14 11:00 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=430643&amp;ptid=34598" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
日后我不公开发布支持SSH的免费空间了，欢迎在小组PM我，或在Twitter DM我。 </blockquote></div>这也不是个办法，万一那个举报的人伪装成普通用户，请你提供免费的支持SSH的空间，你能分辨出来吗？</div>

							
							
							
							
															<div id="post_rate_div_434691"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo434691_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=11709" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=34598&amp;repquote=434691&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 434691)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_17"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid435206" summary="pid435206" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=11780" target="_blank" id="userinfo435206" class="dropmenu" onmouseover="showMenu(this.id)">...</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=11780">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=11780&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_18" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum435206" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=34598&page=1#pid435206', '话题链接已经复制到剪贴板')">19楼</strong>
													<em onclick="$('postmessage_435206').className='t_bigfont'">大</em>							<em onclick="$('postmessage_435206').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_435206').className='t_smallfont'">小</em>												发表于 2010-1-16 19:23&nbsp;																					<a href="viewthread.php?tid=34598&amp;page=1&amp;authorid=11780" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_18"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_18"></div><div id="ad_thread4_18"></div>
						
						
																											<div id="postmessage_435206" class="t_msgfont">原来openwebster真的关闭了啊，怪不得！</div>

							
							
							
							
															<div id="post_rate_div_435206"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo435206_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=11780" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=34598&amp;repquote=435206&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 435206)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_18"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid435217" summary="pid435217" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1960" target="_blank" id="userinfo435217" class="dropmenu" onmouseover="showMenu(this.id)">库存袈裟</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">@bruceku 想象力比知识更重要。</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1960">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1960&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_19" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum435217" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=34598&page=1#pid435217', '话题链接已经复制到剪贴板')">20楼</strong>
													<em onclick="$('postmessage_435217').className='t_bigfont'">大</em>							<em onclick="$('postmessage_435217').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_435217').className='t_smallfont'">小</em>												发表于 2010-1-16 19:29&nbsp;																					<a href="viewthread.php?tid=34598&amp;page=1&amp;authorid=1960" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_19"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_19"></div><div id="ad_thread4_19"></div>
													<h2>回复 18楼 nsdown 的话题</h2>
						
						
																											<div id="postmessage_435217" class="t_msgfont">两害取其轻</div>

							
							
							
							
															<div id="post_rate_div_435217"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo435217_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1960" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=34598&amp;repquote=435217&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 435217)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_19"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid435289" summary="pid435289" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=5404" target="_blank" id="userinfo435289" class="dropmenu" onmouseover="showMenu(this.id)">江南的雨季</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">My Blog:Jitler.Com  Twitter:@yxzjn</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=5404">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=5404&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_20" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum435289" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=34598&page=1#pid435289', '话题链接已经复制到剪贴板')">21楼</strong>
													<em onclick="$('postmessage_435289').className='t_bigfont'">大</em>							<em onclick="$('postmessage_435289').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_435289').className='t_smallfont'">小</em>												发表于 2010-1-16 20:03&nbsp;																					<a href="viewthread.php?tid=34598&amp;page=1&amp;authorid=5404" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_20"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_20"></div><div id="ad_thread4_20"></div>
						
						
																											<div id="postmessage_435289" class="t_msgfont">唉。。。什么人啊。。</div>

							
							
							
							
															<div id="post_rate_div_435289"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo435289_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://jitler.com" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=5404" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=34598&amp;repquote=435289&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 435289)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_20"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid441285" summary="pid441285" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6920" target="_blank" id="userinfo441285" class="dropmenu" onmouseover="showMenu(this.id)">淮月</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">翻墙痴迷者 雄性文青  @qhgy</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6920">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6920&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_21" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum441285" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=34598&page=1#pid441285', '话题链接已经复制到剪贴板')">22楼</strong>
													<em onclick="$('postmessage_441285').className='t_bigfont'">大</em>							<em onclick="$('postmessage_441285').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_441285').className='t_smallfont'">小</em>												发表于 2010-1-20 00:14&nbsp;																					<a href="viewthread.php?tid=34598&amp;page=1&amp;authorid=6920" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_21"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_21"></div><div id="ad_thread4_21"></div>
						
						
																											<div id="postmessage_441285" class="t_msgfont">无耻 我要在twitter上举报它</div>

							
							
							
							
															<div id="post_rate_div_441285"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo441285_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://twitter.com/qhgy" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=6920" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=34598&amp;repquote=441285&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 441285)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_21"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid746337" summary="pid746337" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8968" target="_blank" id="userinfo746337" class="dropmenu" onmouseover="showMenu(this.id)">mercutysoul</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8968">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8968&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_22" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum746337" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=34598&page=1#pid746337', '话题链接已经复制到剪贴板')">23楼</strong>
													<em onclick="$('postmessage_746337').className='t_bigfont'">大</em>							<em onclick="$('postmessage_746337').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_746337').className='t_smallfont'">小</em>												发表于 2010-7-18 02:51&nbsp;																					<a href="viewthread.php?tid=34598&amp;page=1&amp;authorid=8968" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_22"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_22"></div><div id="ad_thread4_22"></div>
						
						
																											<div id="postmessage_746337" class="t_msgfont">这两天准备买个国外主机 居然国内二道贩子连推特的api都不允许搭！tmd还阵阵有词！提出各种要求！<br />
后来发现。。。国内二道贩子大多都是如此<br />
随便找个人的帖一下吧 <a href="http://imhost.org/imhost-agreement/" target="_blank">http://imhost.org/imhost-agreement/</a></div>

							
							
							
							
															<div id="post_rate_div_746337"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo746337_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=8968" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=34598&amp;repquote=746337&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 746337)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_22"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid746359" summary="pid746359" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2973" target="_blank" id="userinfo746359" class="dropmenu" onmouseover="showMenu(this.id)">free1989</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">@photobluer</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2973">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2973&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_23" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum746359" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=34598&page=1#pid746359', '话题链接已经复制到剪贴板')">24楼</strong>
													<em onclick="$('postmessage_746359').className='t_bigfont'">大</em>							<em onclick="$('postmessage_746359').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_746359').className='t_smallfont'">小</em>												发表于 2010-7-18 07:24&nbsp;																					<a href="viewthread.php?tid=34598&amp;page=1&amp;authorid=2973" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_23"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_23"></div><div id="ad_thread4_23"></div>
						
						
																											<div id="postmessage_746359" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>mercutysoul</i> 于 2010-7-18 02:51 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=746337&amp;ptid=34598" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
这两天准备买个国外主机 居然国内二道贩子连推特的api都不允许搭！tmd还阵阵有词！提出各种要求！<br />
后来发现。。。国内二道贩子大多都是如此<br />
随便找个人的帖一下吧 <a href="http://imhost.org/imhost-agreement/" target="_blank">http://imhost.org/imhost-agreement/</a> </blockquote></div>有免费空间的，用twip建个api很快。</div>

							
							
							
							
															<div id="post_rate_div_746359"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo746359_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=2973" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=34598&amp;repquote=746359&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 746359)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_23"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid746560" summary="pid746560" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6518" target="_blank" id="userinfo746560" class="dropmenu" onmouseover="showMenu(this.id)">id已被绿坝屏蔽</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">闃呭悗鍗崇剼</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6518">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6518&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_24" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum746560" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=34598&page=1#pid746560', '话题链接已经复制到剪贴板')">25楼</strong>
													<em onclick="$('postmessage_746560').className='t_bigfont'">大</em>							<em onclick="$('postmessage_746560').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_746560').className='t_smallfont'">小</em>												发表于 2010-7-18 11:16&nbsp;																					<a href="viewthread.php?tid=34598&amp;page=1&amp;authorid=6518" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_24"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_24"></div><div id="ad_thread4_24"></div>
						
						
																											<div id="postmessage_746560" class="t_msgfont">免费ssh的确属于滥用，但是举报有点缺德</div>

							
							
							
							
															<div id="post_rate_div_746560"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo746560_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=6518" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=34598&amp;repquote=746560&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 746560)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_24"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid747227" summary="pid747227" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10114" target="_blank" id="userinfo747227" class="dropmenu" onmouseover="showMenu(this.id)">m3g4</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10114">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10114&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_25" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum747227" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=34598&page=1#pid747227', '话题链接已经复制到剪贴板')">26楼</strong>
													<em onclick="$('postmessage_747227').className='t_bigfont'">大</em>							<em onclick="$('postmessage_747227').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_747227').className='t_smallfont'">小</em>												发表于 2010-7-18 20:08&nbsp;																					<a href="viewthread.php?tid=34598&amp;page=1&amp;authorid=10114" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_25"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_25"></div><div id="ad_thread4_25"></div>
						
						
																											<div id="postmessage_747227" class="t_msgfont">老帖又被翻出来了</div>

							
							
							
							
															<div id="post_rate_div_747227"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo747227_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=10114" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=34598&amp;repquote=747227&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 747227)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_25"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid747992" summary="pid747992" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 <a name="lastpost"></a>					<cite>											<a href="space.php?uid=6597" target="_blank" id="userinfo747992" class="dropmenu" onmouseover="showMenu(this.id)">一枚硬币</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">什么东东？</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6597">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6597&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_26" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum747992" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=34598&page=1#pid747992', '话题链接已经复制到剪贴板')">27楼</strong>
													<em onclick="$('postmessage_747992').className='t_bigfont'">大</em>							<em onclick="$('postmessage_747992').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_747992').className='t_smallfont'">小</em>												发表于 2010-7-19 11:42&nbsp;																					<a href="viewthread.php?tid=34598&amp;page=1&amp;authorid=6597" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_26"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_26"></div><div id="ad_thread4_26"></div>
						
						
																											<div id="postmessage_747992" class="t_msgfont">我的ssh啊，都被挂了</div>

							
							
							
							
															<div id="post_rate_div_747992"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo747992_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=6597" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=34598&amp;repquote=747992&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 747992)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_26"></div>				</div>
			</td>
		</tr>
		</table>
		</div>
</form>





<div class="pages_btns">
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=34598&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=34598&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
				<span class="postbtn" id="newspecialtmp" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=34598&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

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

	<form method="post" id="postform" action="post.php?action=reply&amp;fid=26&amp;tid=34598&amp;extra=&amp;replysubmit=yes" onSubmit="return validate(this)">
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
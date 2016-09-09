<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<title>Google今天频繁撞墙的原因 - 国家局域网研究所 -  1984bbs.com </title>
<meta name="keywords" content="" />
<meta name="MSSmartTagsPreventParsing" content="True" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<link rel="archives" title="1984bbs.com" href="https://1984bbs.com/archiver/" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_viewthread.css" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_common.css" />
<script type="text/javascript">
	var discuz_uid = 13019;var IMGDIR = 'images/default';var attackevasive = '0';var gid = 0;var STYLEID = '1';
	gid = parseInt('3');var fid = parseInt('26');var tid = parseInt('41763');
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
			<p><a href="index.php" id="forumlist" onmouseover="showMenu(this.id)" class="dropmenu">1984bbs.com</a> &raquo; <a href="forumdisplay.php?fid=26">国家局域网研究所</a> &raquo; Google今天频繁撞墙的原因</p>
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
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=41763&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=41763&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
				<span class="postbtn" id="newspecial" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=41763&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

	<ul class="popupmenu_popup newspecialmenu" id="newspecial_menu" style="display: none">
		<li><a href="post.php?action=newthread&amp;fid=26&amp;extra=">发新话题</a></li>
		<li class="poll"><a href="post.php?action=newthread&amp;fid=26&amp;extra=&amp;special=1">发布投票</a></li>													</ul>

<form method="post" name="modactions">
	<input type="hidden" name="formhash" value="823c9fa2" />
	<div class="mainbox viewthread">
		<span class="headactions">
					<a href="my.php?item=favorites&amp;tid=41763" id="ajax_favorite" onclick="ajaxmenu(event, this.id, 3000, 0)">收藏</a>
			<a href="my.php?item=subscriptions&amp;subadd=41763" id="ajax_subscription" onclick="ajaxmenu(event, this.id, 3000, null, 0)">订阅</a>
			<a href="misc.php?action=emailfriend&amp;tid=41763" id="emailfriend" onclick="ajaxmenu(event, this.id, 9000000, null, 0)">推荐</a>
				<a href="viewthread.php?action=printable&amp;tid=41763" target="_blank" class="notabs">打印</a>
				</span>
		<h1>Google今天频繁撞墙的原因		</h1>
				<ins>
						<a href="misc.php?action=viewthreadmod&amp;tid=41763" title="主题操作记录" target="_blank">本主题由 库存袈裟 于 2010-3-31 20:55 合并</a>								</ins>
							<table id="pid539910" summary="pid539910" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12549" target="_blank" id="userinfo539910" class="dropmenu" onmouseover="showMenu(this.id)">corndog</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12549">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12549&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_0" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum539910" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=41763&page=1#pid539910', '话题链接已经复制到剪贴板')">1楼</strong>
													<em onclick="$('postmessage_539910').className='t_bigfont'">大</em>							<em onclick="$('postmessage_539910').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_539910').className='t_smallfont'">小</em>												发表于 2010-3-30 18:28&nbsp;																					<a href="viewthread.php?tid=41763&amp;page=1&amp;authorid=12549" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_0"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_0"></div><div id="ad_thread4_0"></div>
													<h2>Google今天频繁撞墙的原因</h2>
						
						
																											<div id="postmessage_539910" class="t_msgfont">据路边社消息，<br />
是&amp;gs_rfai=这个参数触发了GFW<br />
而rfa和某keyword一样<br />
删掉这个参数后再搜索就可以显示了<br />
另外，用FireFox内置的google搜索正常<br />
因为，没有这个参数</div>

							
							
							
							
															<div id="post_rate_div_539910"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo539910_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=12549" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=41763&amp;repquote=539910&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 539910)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_0"></div>				</div>
			</td>
		</tr>
		</table>
		</div><div class="ad_column" id="ad_interthread"><a href="/viewthread.php?tid=54699" target="_blank" style="color:red;">1984bbs是一个非营利项目，它需要您的捐助！</font></a>		</div>
	<div class="mainbox viewthread">
			<table id="pid539911" summary="pid539911" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12835" target="_blank" id="userinfo539911" class="dropmenu" onmouseover="showMenu(this.id)">Gooday</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12835">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12835&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_1" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum539911" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=41763&page=1#pid539911', '话题链接已经复制到剪贴板')">2楼</strong>
													<em onclick="$('postmessage_539911').className='t_bigfont'">大</em>							<em onclick="$('postmessage_539911').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_539911').className='t_smallfont'">小</em>												发表于 2010-3-30 18:29&nbsp;																					<a href="viewthread.php?tid=41763&amp;page=1&amp;authorid=12835" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_1"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_1"></div><div id="ad_thread4_1"></div>
						
						
																											<div id="postmessage_539911" class="t_msgfont">如何删？麻烦附上傻瓜教程</div>

							
							
							
							
															<div id="post_rate_div_539911"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo539911_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=12835" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=41763&amp;repquote=539911&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 539911)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_1"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid539933" summary="pid539933" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=5355" target="_blank" id="userinfo539933" class="dropmenu" onmouseover="showMenu(this.id)">hikui</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=5355">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=5355&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_2" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum539933" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=41763&page=1#pid539933', '话题链接已经复制到剪贴板')">3楼</strong>
													<em onclick="$('postmessage_539933').className='t_bigfont'">大</em>							<em onclick="$('postmessage_539933').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_539933').className='t_smallfont'">小</em>												发表于 2010-3-30 18:42&nbsp;																					<a href="viewthread.php?tid=41763&amp;page=1&amp;authorid=5355" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_2"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_2"></div><div id="ad_thread4_2"></div>
						
						
																											<div id="postmessage_539933" class="t_msgfont">rfa是什么？</div>

							
							
							
							
															<div id="post_rate_div_539933"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo539933_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=5355" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=41763&amp;repquote=539933&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 539933)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_2"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid539946" summary="pid539946" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10054" target="_blank" id="userinfo539946" class="dropmenu" onmouseover="showMenu(this.id)">imus</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">升斗小民</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10054">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10054&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_3" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum539946" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=41763&page=1#pid539946', '话题链接已经复制到剪贴板')">4楼</strong>
													<em onclick="$('postmessage_539946').className='t_bigfont'">大</em>							<em onclick="$('postmessage_539946').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_539946').className='t_smallfont'">小</em>												发表于 2010-3-30 18:48&nbsp;																					<a href="viewthread.php?tid=41763&amp;page=1&amp;authorid=10054" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_3"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_3"></div><div id="ad_thread4_3"></div>
						
						
																											<div id="postmessage_539946" class="t_msgfont">Radio Free Asia (RFA)</div>

							
							
							
							
															<div id="post_rate_div_539946"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo539946_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://imuspot.appspot.com/" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=10054" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=41763&amp;repquote=539946&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 539946)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_3"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid539958" summary="pid539958" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=5355" target="_blank" id="userinfo539958" class="dropmenu" onmouseover="showMenu(this.id)">hikui</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=5355">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=5355&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_4" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum539958" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=41763&page=1#pid539958', '话题链接已经复制到剪贴板')">5楼</strong>
													<em onclick="$('postmessage_539958').className='t_bigfont'">大</em>							<em onclick="$('postmessage_539958').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_539958').className='t_smallfont'">小</em>												发表于 2010-3-30 18:52&nbsp;																					<a href="viewthread.php?tid=41763&amp;page=1&amp;authorid=5355" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_4"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_4"></div><div id="ad_thread4_4"></div>
						
						
																											<div id="postmessage_539958" class="t_msgfont">为什么以前没有被墙，今天被墙?</div>

							
							
							
							
															<div id="post_rate_div_539958"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo539958_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=5355" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=41763&amp;repquote=539958&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 539958)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_4"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid539965" summary="pid539965" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12212" target="_blank" id="userinfo539965" class="dropmenu" onmouseover="showMenu(this.id)">yuechi</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12212">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12212&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_5" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum539965" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=41763&page=1#pid539965', '话题链接已经复制到剪贴板')">6楼</strong>
													<em onclick="$('postmessage_539965').className='t_bigfont'">大</em>							<em onclick="$('postmessage_539965').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_539965').className='t_smallfont'">小</em>												发表于 2010-3-30 18:57&nbsp;																					<a href="viewthread.php?tid=41763&amp;page=1&amp;authorid=12212" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_5"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_5"></div><div id="ad_thread4_5"></div>
						
						
																											<div id="postmessage_539965" class="t_msgfont">上教程</div>

							
							
							
							
															<div id="post_rate_div_539965"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo539965_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=12212" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=41763&amp;repquote=539965&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 539965)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_5"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid539966" summary="pid539966" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10054" target="_blank" id="userinfo539966" class="dropmenu" onmouseover="showMenu(this.id)">imus</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">升斗小民</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10054">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10054&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_6" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum539966" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=41763&page=1#pid539966', '话题链接已经复制到剪贴板')">7楼</strong>
													<em onclick="$('postmessage_539966').className='t_bigfont'">大</em>							<em onclick="$('postmessage_539966').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_539966').className='t_smallfont'">小</em>												发表于 2010-3-30 18:58&nbsp;																					<a href="viewthread.php?tid=41763&amp;page=1&amp;authorid=10054" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_6"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_6"></div><div id="ad_thread4_6"></div>
						
						
																											<div id="postmessage_539966" class="t_msgfont">以前是否有这个参数不知道<br />
<br />
其实大家可以用直接输入的方式搜索：<br />
比如搜索1984<br />
直接输入 <a href="http://www.google.com/search?q=1984" target="_blank">http://www.google.com/search?q=1984</a>就可以了<br />
<br />
<a href="http://www.google.com/search?q=" target="_blank">http://www.google.com/search?q=</a> 然后是你想搜索的内容</div>

							
							
							
							
															<div id="post_rate_div_539966"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo539966_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://imuspot.appspot.com/" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=10054" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=41763&amp;repquote=539966&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 539966)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_6"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid539987" summary="pid539987" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10054" target="_blank" id="userinfo539987" class="dropmenu" onmouseover="showMenu(this.id)">imus</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">升斗小民</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10054">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10054&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_7" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum539987" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=41763&page=1#pid539987', '话题链接已经复制到剪贴板')">8楼</strong>
													<em onclick="$('postmessage_539987').className='t_bigfont'">大</em>							<em onclick="$('postmessage_539987').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_539987').className='t_smallfont'">小</em>												发表于 2010-3-30 19:09&nbsp;																					<a href="viewthread.php?tid=41763&amp;page=1&amp;authorid=10054" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_7"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_7"></div><div id="ad_thread4_7"></div>
						
						
																											<div id="postmessage_539987" class="t_msgfont">哦，再说一句<br />
当你的 <a href="http://www.google.com/" target="_blank">http://www.google.com/</a> 的界面语言为英文或者其他什么语言的时候<br />
用我7L提供的方法可能在某些情况下搜索中文内容会乱码<br />
<br />
解决的方法是点右上角的Setting 选 Search setting<br />
<br />
然后&nbsp;&nbsp;在页面的<br />
Interface Language：&nbsp; &nbsp;Display Google tips and messages in:<br />
下拉列表里选择Chinese(simplified)<br />
<br />
然后点右上角的Save preferences （保存设置）<br />
<br />
OK 大功告成 用我在7L说的方法就可以搜索中文内容了～<br />
<br />
（To6L&nbsp;&nbsp;教程够傻瓜了吧）～～</div>

							
							
							
							
															<div id="post_rate_div_539987"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo539987_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://imuspot.appspot.com/" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=10054" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=41763&amp;repquote=539987&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 539987)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_7"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid539999" summary="pid539999" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12212" target="_blank" id="userinfo539999" class="dropmenu" onmouseover="showMenu(this.id)">yuechi</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12212">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12212&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_8" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum539999" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=41763&page=1#pid539999', '话题链接已经复制到剪贴板')">9楼</strong>
													<em onclick="$('postmessage_539999').className='t_bigfont'">大</em>							<em onclick="$('postmessage_539999').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_539999').className='t_smallfont'">小</em>												发表于 2010-3-30 19:13&nbsp;																					<a href="viewthread.php?tid=41763&amp;page=1&amp;authorid=12212" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_8"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_8"></div><div id="ad_thread4_8"></div>
													<h2>&amp;gs_rfai=参数暴露GFW工作机制</h2>
						
						
																											<div id="postmessage_539999" class="t_msgfont">一个参数引出来的问题。<br />
目前谷歌搜索无法正常使用us/tw也是一样。问题就出在&amp;gs_rfai=这个参数<br />
只要将地址栏里的&amp;gs_rfai=删除然后进入，搜索结果就会出现。<br />
这似乎是GFW的一个失误。<br />
=</div>

							
							
							
							
															<div id="post_rate_div_539999"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo539999_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=12212" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=41763&amp;repquote=539999&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 539999)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_8"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid540002" summary="pid540002" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10054" target="_blank" id="userinfo540002" class="dropmenu" onmouseover="showMenu(this.id)">imus</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">升斗小民</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10054">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10054&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_9" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum540002" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=41763&page=1#pid540002', '话题链接已经复制到剪贴板')">10楼</strong>
													<em onclick="$('postmessage_540002').className='t_bigfont'">大</em>							<em onclick="$('postmessage_540002').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_540002').className='t_smallfont'">小</em>												发表于 2010-3-30 19:14&nbsp;																					<a href="viewthread.php?tid=41763&amp;page=1&amp;authorid=10054" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_9"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_9"></div><div id="ad_thread4_9"></div>
						
						
																											<div id="postmessage_540002" class="t_msgfont">宁可错杀一千么，一直是这样的。</div>

							
							
							
							
															<div id="post_rate_div_540002"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo540002_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://imuspot.appspot.com/" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=10054" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=41763&amp;repquote=540002&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 540002)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_9"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid540162" summary="pid540162" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6906" target="_blank" id="userinfo540162" class="dropmenu" onmouseover="showMenu(this.id)">jaychu128</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6906">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6906&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_10" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum540162" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=41763&page=1#pid540162', '话题链接已经复制到剪贴板')">11楼</strong>
													<em onclick="$('postmessage_540162').className='t_bigfont'">大</em>							<em onclick="$('postmessage_540162').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_540162').className='t_smallfont'">小</em>												发表于 2010-3-30 20:28&nbsp;																					<a href="viewthread.php?tid=41763&amp;page=1&amp;authorid=6906" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_10"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_10"></div><div id="ad_thread4_10"></div>
						
						
																											<div id="postmessage_540162" class="t_msgfont">url过滤</div>

							
							
							
							
															<div id="post_rate_div_540162"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo540162_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=6906" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=41763&amp;repquote=540162&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 540162)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_10"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid540319" summary="pid540319" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12463" target="_blank" id="userinfo540319" class="dropmenu" onmouseover="showMenu(this.id)">DaemonEye</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">不河蟹的围观团团员</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12463">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12463&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_11" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum540319" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=41763&page=1#pid540319', '话题链接已经复制到剪贴板')">12楼</strong>
													<em onclick="$('postmessage_540319').className='t_bigfont'">大</em>							<em onclick="$('postmessage_540319').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_540319').className='t_smallfont'">小</em>												发表于 2010-3-30 21:48&nbsp;																					<a href="viewthread.php?tid=41763&amp;page=1&amp;authorid=12463" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_11"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_11"></div><div id="ad_thread4_11"></div>
						
						
																											<div id="postmessage_540319" class="t_msgfont">说明那帮人的字符串匹配做得太简单了...按这样做 迟早类似海口交警的也得被屏蔽 技术水准不行啊</div>

							
							
							
							
															<div id="post_rate_div_540319"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo540319_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=12463" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=41763&amp;repquote=540319&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 540319)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_11"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid540401" summary="pid540401" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=9259" target="_blank" id="userinfo540401" class="dropmenu" onmouseover="showMenu(this.id)">吕蕤冰</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=9259">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=9259&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_12" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum540401" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=41763&page=1#pid540401', '话题链接已经复制到剪贴板')">13楼</strong>
													<em onclick="$('postmessage_540401').className='t_bigfont'">大</em>							<em onclick="$('postmessage_540401').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_540401').className='t_smallfont'">小</em>												发表于 2010-3-30 22:30&nbsp;																					<a href="viewthread.php?tid=41763&amp;page=1&amp;authorid=9259" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_12"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_12"></div><div id="ad_thread4_12"></div>
						
						
																											<div id="postmessage_540401" class="t_msgfont">你说的方法很好用，经试用有效。<br />
但是还是不知道怎么删除参数……其实我们更想知道的是这个~</div>

							
							
							
							
															<div id="post_rate_div_540401"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo540401_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=9259" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=41763&amp;repquote=540401&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 540401)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_12"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid540493" summary="pid540493" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6327" target="_blank" id="userinfo540493" class="dropmenu" onmouseover="showMenu(this.id)">chandler0819</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">@chandler0819</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6327">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6327&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_13" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum540493" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=41763&page=1#pid540493', '话题链接已经复制到剪贴板')">14楼</strong>
													<em onclick="$('postmessage_540493').className='t_bigfont'">大</em>							<em onclick="$('postmessage_540493').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_540493').className='t_smallfont'">小</em>												发表于 2010-3-30 23:30&nbsp;																					<a href="viewthread.php?tid=41763&amp;page=1&amp;authorid=6327" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_13"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_13"></div><div id="ad_thread4_13"></div>
						
						
																											<div id="postmessage_540493" class="t_msgfont">在Google首页右上角的“设置 - 搜索设置”，选择“不在搜索框内提供查询建议”，就可以暂时解决无法搜索的问题，那个附加字符串就是搜索建议功能生成的。</div>

							
							
							
							
															<div id="post_rate_div_540493"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo540493_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=6327" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=41763&amp;repquote=540493&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 540493)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_13"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid540582" summary="pid540582" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12577" target="_blank" id="userinfo540582" class="dropmenu" onmouseover="showMenu(this.id)">jqx</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">不明真相的群众</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12577">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12577&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_14" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum540582" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=41763&page=1#pid540582', '话题链接已经复制到剪贴板')">15楼</strong>
													<em onclick="$('postmessage_540582').className='t_bigfont'">大</em>							<em onclick="$('postmessage_540582').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_540582').className='t_smallfont'">小</em>												发表于 2010-3-31 00:34&nbsp;																					<a href="viewthread.php?tid=41763&amp;page=1&amp;authorid=12577" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_14"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_14"></div><div id="ad_thread4_14"></div>
						
						
																											<div id="postmessage_540582" class="t_msgfont">原来这样，还以为被墙掉了那</div>

							
							
							
							
															<div id="post_rate_div_540582"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo540582_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=12577" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=41763&amp;repquote=540582&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 540582)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_14"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid540600" summary="pid540600" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=9417" target="_blank" id="userinfo540600" class="dropmenu" onmouseover="showMenu(this.id)">nailking</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=9417">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=9417&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_15" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum540600" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=41763&page=1#pid540600', '话题链接已经复制到剪贴板')">16楼</strong>
													<em onclick="$('postmessage_540600').className='t_bigfont'">大</em>							<em onclick="$('postmessage_540600').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_540600').className='t_smallfont'">小</em>												发表于 2010-3-31 01:05&nbsp;																					<a href="viewthread.php?tid=41763&amp;page=1&amp;authorid=9417" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_15"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_15"></div><div id="ad_thread4_15"></div>
						
						
																											<div id="postmessage_540600" class="t_msgfont">一会行一会不行.</div>

							
							
							
							
															<div id="post_rate_div_540600"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo540600_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=9417" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=41763&amp;repquote=540600&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 540600)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_15"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid540604" summary="pid540604" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=9417" target="_blank" id="userinfo540604" class="dropmenu" onmouseover="showMenu(this.id)">nailking</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=9417">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=9417&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_16" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum540604" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=41763&page=1#pid540604', '话题链接已经复制到剪贴板')">17楼</strong>
													<em onclick="$('postmessage_540604').className='t_bigfont'">大</em>							<em onclick="$('postmessage_540604').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_540604').className='t_smallfont'">小</em>												发表于 2010-3-31 01:08&nbsp;																					<a href="viewthread.php?tid=41763&amp;page=1&amp;authorid=9417" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_16"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_16"></div><div id="ad_thread4_16"></div>
						
						
																											<div id="postmessage_540604" class="t_msgfont">封了就是封了,我设置了也不行.</div>

							
							
							
							
															<div id="post_rate_div_540604"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo540604_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=9417" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=41763&amp;repquote=540604&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 540604)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_16"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid540840" summary="pid540840" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12307" target="_blank" id="userinfo540840" class="dropmenu" onmouseover="showMenu(this.id)">tywtyw2002</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12307">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12307&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_17" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum540840" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=41763&page=1#pid540840', '话题链接已经复制到剪贴板')">18楼</strong>
													<em onclick="$('postmessage_540840').className='t_bigfont'">大</em>							<em onclick="$('postmessage_540840').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_540840').className='t_smallfont'">小</em>												发表于 2010-3-31 10:06&nbsp;																					<a href="viewthread.php?tid=41763&amp;page=1&amp;authorid=12307" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_17"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_17"></div><div id="ad_thread4_17"></div>
						
						
																											<div id="postmessage_540840" class="t_msgfont">get 后面的信息过滤 查询http头</div>

							
							
							
							
															<div id="post_rate_div_540840"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo540840_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=12307" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=41763&amp;repquote=540840&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 540840)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_17"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid540908" summary="pid540908" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=4292" target="_blank" id="userinfo540908" class="dropmenu" onmouseover="showMenu(this.id)">02304H</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">10001100000100B</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=4292">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=4292&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_18" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum540908" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=41763&page=1#pid540908', '话题链接已经复制到剪贴板')">19楼</strong>
													<em onclick="$('postmessage_540908').className='t_bigfont'">大</em>							<em onclick="$('postmessage_540908').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_540908').className='t_smallfont'">小</em>												发表于 2010-3-31 10:48&nbsp;																					<a href="viewthread.php?tid=41763&amp;page=1&amp;authorid=4292" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_18"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_18"></div><div id="ad_thread4_18"></div>
						
						
																											<div id="postmessage_540908" class="t_msgfont">rfa关键字貌似去掉了</div>

							
							
							
							
															<div id="post_rate_div_540908"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo540908_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=4292" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=41763&amp;repquote=540908&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 540908)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_18"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid541744" summary="pid541744" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 <a name="lastpost"></a>					<cite>											<a href="space.php?uid=9863" target="_blank" id="userinfo541744" class="dropmenu" onmouseover="showMenu(this.id)">kysoft</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">fuck gfw</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=9863">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=9863&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_19" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum541744" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=41763&page=1#pid541744', '话题链接已经复制到剪贴板')">20楼</strong>
													<em onclick="$('postmessage_541744').className='t_bigfont'">大</em>							<em onclick="$('postmessage_541744').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_541744').className='t_smallfont'">小</em>												发表于 2010-3-31 20:07&nbsp;																					<a href="viewthread.php?tid=41763&amp;page=1&amp;authorid=9863" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_19"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_19"></div><div id="ad_thread4_19"></div>
						
						
																											<div id="postmessage_541744" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>DaemonEye</i> 于 2010-3-30 21:48 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=540319&amp;ptid=41770" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
说明那帮人的字符串匹配做得太简单了...按这样做 迟早类似海口交警的也得被屏蔽 技术水准不行啊 </blockquote></div>哈哈哈</div>

							
							
							
							
															<div id="post_rate_div_541744"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo541744_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=9863" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=41763&amp;repquote=541744&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 541744)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_19"></div>				</div>
			</td>
		</tr>
		</table>
		</div>
</form>





<div class="pages_btns">
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=41763&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=41763&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
				<span class="postbtn" id="newspecialtmp" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=41763&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

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

	<form method="post" id="postform" action="post.php?action=reply&amp;fid=26&amp;tid=41763&amp;extra=&amp;replysubmit=yes" onSubmit="return validate(this)">
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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<title>好消息！Tweetdeck 0.34.1支持API啦 - 国家局域网研究所 -  1984bbs.com </title>
<meta name="keywords" content="" />
<meta name="MSSmartTagsPreventParsing" content="True" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<link rel="archives" title="1984bbs.com" href="https://1984bbs.com/archiver/" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_viewthread.css" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_common.css" />
<script type="text/javascript">
	var discuz_uid = 13019;var IMGDIR = 'images/default';var attackevasive = '0';var gid = 0;var STYLEID = '1';
	gid = parseInt('3');var fid = parseInt('26');var tid = parseInt('46537');
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
			<p><a href="index.php" id="forumlist" onmouseover="showMenu(this.id)" class="dropmenu">1984bbs.com</a> &raquo; <a href="forumdisplay.php?fid=26">国家局域网研究所</a> &raquo; 好消息！Tweetdeck 0.34.1支持API啦</p>
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
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=46537&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=46537&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
				<span class="postbtn" id="newspecial" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=46537&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

	<ul class="popupmenu_popup newspecialmenu" id="newspecial_menu" style="display: none">
		<li><a href="post.php?action=newthread&amp;fid=26&amp;extra=">发新话题</a></li>
		<li class="poll"><a href="post.php?action=newthread&amp;fid=26&amp;extra=&amp;special=1">发布投票</a></li>													</ul>

<form method="post" name="modactions">
	<input type="hidden" name="formhash" value="823c9fa2" />
	<div class="mainbox viewthread">
		<span class="headactions">
					<a href="my.php?item=favorites&amp;tid=46537" id="ajax_favorite" onclick="ajaxmenu(event, this.id, 3000, 0)">收藏</a>
			<a href="my.php?item=subscriptions&amp;subadd=46537" id="ajax_subscription" onclick="ajaxmenu(event, this.id, 3000, null, 0)">订阅</a>
			<a href="misc.php?action=emailfriend&amp;tid=46537" id="emailfriend" onclick="ajaxmenu(event, this.id, 9000000, null, 0)">推荐</a>
				<a href="viewthread.php?action=printable&amp;tid=46537" target="_blank" class="notabs">打印</a>
				</span>
		<h1>好消息！Tweetdeck 0.34.1支持API啦		</h1>
							<table id="pid628139" summary="pid628139" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=13769" target="_blank" id="userinfo628139" class="dropmenu" onmouseover="showMenu(this.id)">lonion</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">入门草泥马</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=13769">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=13769&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_0" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum628139" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=46537&page=1#pid628139', '话题链接已经复制到剪贴板')">1楼</strong>
													<em onclick="$('postmessage_628139').className='t_bigfont'">大</em>							<em onclick="$('postmessage_628139').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_628139').className='t_smallfont'">小</em>												发表于 2010-5-21 02:43&nbsp;																					<a href="viewthread.php?tid=46537&amp;page=1&amp;authorid=13769" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_0"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_0"></div><div id="ad_thread4_0"></div>
													<h2>好消息！Tweetdeck 0.34.1支持API啦</h2>
						
						
																											<div id="postmessage_628139" class="t_msgfont">Tweetdeck是偶比较喜欢的twitter客户端之一，界面大气，功能齐全，支持Facebook，google buzz等，主要特点是浏览twitter的信息量巨大，旧版本不支持API，要上的话，只能翻墙，比较麻烦，最新的0.34.1版本终于支持api啦，这样不用翻墙就能纵观twitter天下鸟…………详情可登陆官网了解<a href="http://www.tweetdeck.com/desktop/?ref=client" target="_blank">http://www.tweetdeck.com/desktop/?ref=client</a><br />
<br />
[<i> 本帖最后由 lonion 于 2010-5-21 09:39 编辑 </i>]</div>

							
							
							
							
															<div id="post_rate_div_628139"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo628139_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://lonion.wordpress.com" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=13769" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=46537&amp;repquote=628139&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 628139)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_0"></div>				</div>
			</td>
		</tr>
		</table>
		</div><div class="ad_column" id="ad_interthread"><a href="/viewthread.php?tid=54699" target="_blank" style="color:red;">1984bbs是一个非营利项目，它需要您的捐助！</font></a>		</div>
	<div class="mainbox viewthread">
			<table id="pid628261" summary="pid628261" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=13468" target="_blank" id="userinfo628261" class="dropmenu" onmouseover="showMenu(this.id)">C.C.</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=13468">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=13468&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_1" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum628261" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=46537&page=1#pid628261', '话题链接已经复制到剪贴板')">2楼</strong>
													<em onclick="$('postmessage_628261').className='t_bigfont'">大</em>							<em onclick="$('postmessage_628261').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_628261').className='t_smallfont'">小</em>												发表于 2010-5-21 08:32&nbsp;																					<a href="viewthread.php?tid=46537&amp;page=1&amp;authorid=13468" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_1"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_1"></div><div id="ad_thread4_1"></div>
						
						
																											<div id="postmessage_628261" class="t_msgfont">不错，以前那个mixero感觉太吃内存</div>

							
							
							
							
															<div id="post_rate_div_628261"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo628261_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=13468" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=46537&amp;repquote=628261&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 628261)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_1"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid628356" summary="pid628356" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10587" target="_blank" id="userinfo628356" class="dropmenu" onmouseover="showMenu(this.id)">dongbeta</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10587">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10587&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_2" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum628356" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=46537&page=1#pid628356', '话题链接已经复制到剪贴板')">3楼</strong>
													<em onclick="$('postmessage_628356').className='t_bigfont'">大</em>							<em onclick="$('postmessage_628356').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_628356').className='t_smallfont'">小</em>												发表于 2010-5-21 09:25&nbsp;																					<a href="viewthread.php?tid=46537&amp;page=1&amp;authorid=10587" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_2"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_2"></div><div id="ad_thread4_2"></div>
						
						
																											<div id="postmessage_628356" class="t_msgfont">终于支持了 我在几个月前给作者提了意见。一个是中文显示不全，对方表示会在下一个版本改进。后来又提出支持API，看来作者也同意了！高兴！</div>

							
							
							
							
															<div id="post_rate_div_628356"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo628356_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=10587" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=46537&amp;repquote=628356&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 628356)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_2"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid628417" summary="pid628417" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10587" target="_blank" id="userinfo628417" class="dropmenu" onmouseover="showMenu(this.id)">dongbeta</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10587">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10587&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_3" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum628417" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=46537&page=1#pid628417', '话题链接已经复制到剪贴板')">4楼</strong>
													<em onclick="$('postmessage_628417').className='t_bigfont'">大</em>							<em onclick="$('postmessage_628417').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_628417').className='t_smallfont'">小</em>												发表于 2010-5-21 09:44&nbsp;																					<a href="viewthread.php?tid=46537&amp;page=1&amp;authorid=10587" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_3"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_3"></div><div id="ad_thread4_3"></div>
						
						
																											<div id="postmessage_628417" class="t_msgfont">accounts-&gt;点击用户-》选择高级选项-》设置base Url</div>

							
							
							
							
															<div id="post_rate_div_628417"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo628417_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=10587" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=46537&amp;repquote=628417&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 628417)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_3"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid628479" summary="pid628479" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7221" target="_blank" id="userinfo628479" class="dropmenu" onmouseover="showMenu(this.id)">8th.gua</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7221">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7221&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_4" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum628479" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=46537&page=1#pid628479', '话题链接已经复制到剪贴板')">5楼</strong>
													<em onclick="$('postmessage_628479').className='t_bigfont'">大</em>							<em onclick="$('postmessage_628479').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_628479').className='t_smallfont'">小</em>												发表于 2010-5-21 10:04&nbsp;																					<a href="viewthread.php?tid=46537&amp;page=1&amp;authorid=7221" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_4"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_4"></div><div id="ad_thread4_4"></div>
						
						
																											<div id="postmessage_628479" class="t_msgfont">问题是要先登入进去吧？刚开始登不进去怎么办？</div>

							
							
							
							
															<div id="post_rate_div_628479"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo628479_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=7221" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=46537&amp;repquote=628479&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 628479)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_4"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid628514" summary="pid628514" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=11177" target="_blank" id="userinfo628514" class="dropmenu" onmouseover="showMenu(this.id)">ChrisDempsey</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">球迷-職業球迷-體育評論者-愛好自由的人 Twitter:@Chris_dempsey</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=11177">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=11177&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_5" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum628514" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=46537&page=1#pid628514', '话题链接已经复制到剪贴板')">6楼</strong>
													<em onclick="$('postmessage_628514').className='t_bigfont'">大</em>							<em onclick="$('postmessage_628514').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_628514').className='t_smallfont'">小</em>												发表于 2010-5-21 10:16&nbsp;																					<a href="viewthread.php?tid=46537&amp;page=1&amp;authorid=11177" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_5"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_5"></div><div id="ad_thread4_5"></div>
													<h2>回复 5楼 8th.gua 的话题</h2>
						
						
																											<div id="postmessage_628514" class="t_msgfont">可以先使用VPN登錄<br />
推薦這個免費VPN（<a href="http://www.macrovpn.com/" target="_blank">http://www.macrovpn.com/</a>），速度很快，登錄之後設置好api就ok了</div>

							
							
							
							
															<div id="post_rate_div_628514"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo628514_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=11177" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=46537&amp;repquote=628514&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 628514)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_5"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid628638" summary="pid628638" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12457" target="_blank" id="userinfo628638" class="dropmenu" onmouseover="showMenu(this.id)">houman</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12457">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12457&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_6" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum628638" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=46537&page=1#pid628638', '话题链接已经复制到剪贴板')">7楼</strong>
													<em onclick="$('postmessage_628638').className='t_bigfont'">大</em>							<em onclick="$('postmessage_628638').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_628638').className='t_smallfont'">小</em>												发表于 2010-5-21 11:02&nbsp;																					<a href="viewthread.php?tid=46537&amp;page=1&amp;authorid=12457" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_6"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_6"></div><div id="ad_thread4_6"></div>
						
						
																											<div id="postmessage_628638" class="t_msgfont">怎么不显示中文啊</div>

							
							
							
							
															<div id="post_rate_div_628638"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo628638_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://www.mygamewiki.net" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=12457" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=46537&amp;repquote=628638&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 628638)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_6"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid628691" summary="pid628691" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=11177" target="_blank" id="userinfo628691" class="dropmenu" onmouseover="showMenu(this.id)">ChrisDempsey</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">球迷-職業球迷-體育評論者-愛好自由的人 Twitter:@Chris_dempsey</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=11177">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=11177&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_7" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum628691" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=46537&page=1#pid628691', '话题链接已经复制到剪贴板')">8楼</strong>
													<em onclick="$('postmessage_628691').className='t_bigfont'">大</em>							<em onclick="$('postmessage_628691').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_628691').className='t_smallfont'">小</em>												发表于 2010-5-21 11:21&nbsp;																					<a href="viewthread.php?tid=46537&amp;page=1&amp;authorid=11177" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_7"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_7"></div><div id="ad_thread4_7"></div>
													<h2>回复 7楼 houman 的话题</h2>
						
						
																											<div id="postmessage_628691" class="t_msgfont">單擊右上角的settings（扳手圖標）——colors/fonts——單擊下方“international font/TwitterKey”<br />
<br />
就可以顯示中文了</div>

							
							
							
							
															<div id="post_rate_div_628691"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo628691_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=11177" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=46537&amp;repquote=628691&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 628691)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_7"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid628719" summary="pid628719" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12305" target="_blank" id="userinfo628719" class="dropmenu" onmouseover="showMenu(this.id)">guy84</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12305">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12305&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_8" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum628719" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=46537&page=1#pid628719', '话题链接已经复制到剪贴板')">9楼</strong>
													<em onclick="$('postmessage_628719').className='t_bigfont'">大</em>							<em onclick="$('postmessage_628719').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_628719').className='t_smallfont'">小</em>												发表于 2010-5-21 11:29&nbsp;																					<a href="viewthread.php?tid=46537&amp;page=1&amp;authorid=12305" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_8"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_8"></div><div id="ad_thread4_8"></div>
						
						
																											<div id="postmessage_628719" class="t_msgfont">不错，但是还是觉得客户端太麻烦。。。</div>

							
							
							
							
															<div id="post_rate_div_628719"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo628719_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=12305" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=46537&amp;repquote=628719&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 628719)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_8"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid628952" summary="pid628952" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8716" target="_blank" id="userinfo628952" class="dropmenu" onmouseover="showMenu(this.id)">木羊犬</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8716">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8716&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_9" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum628952" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=46537&page=1#pid628952', '话题链接已经复制到剪贴板')">10楼</strong>
													<em onclick="$('postmessage_628952').className='t_bigfont'">大</em>							<em onclick="$('postmessage_628952').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_628952').className='t_smallfont'">小</em>												发表于 2010-5-21 13:12&nbsp;																					<a href="viewthread.php?tid=46537&amp;page=1&amp;authorid=8716" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_9"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_9"></div><div id="ad_thread4_9"></div>
						
						
																											<div id="postmessage_628952" class="t_msgfont">不错，已经用上啦</div>

							
							
							
							
															<div id="post_rate_div_628952"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo628952_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=8716" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=46537&amp;repquote=628952&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 628952)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_9"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid629426" summary="pid629426" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8357" target="_blank" id="userinfo629426" class="dropmenu" onmouseover="showMenu(this.id)">kevin20700</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8357">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8357&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_10" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum629426" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=46537&page=1#pid629426', '话题链接已经复制到剪贴板')">11楼</strong>
													<em onclick="$('postmessage_629426').className='t_bigfont'">大</em>							<em onclick="$('postmessage_629426').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_629426').className='t_smallfont'">小</em>												发表于 2010-5-21 16:36&nbsp;																					<a href="viewthread.php?tid=46537&amp;page=1&amp;authorid=8357" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_10"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_10"></div><div id="ad_thread4_10"></div>
						
						
																											<div id="postmessage_629426" class="t_msgfont">真的不错，已经用上，谢谢！</div>

							
							
							
							
															<div id="post_rate_div_629426"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo629426_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=8357" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=46537&amp;repquote=629426&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 629426)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_10"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid629480" summary="pid629480" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=13769" target="_blank" id="userinfo629480" class="dropmenu" onmouseover="showMenu(this.id)">lonion</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">入门草泥马</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=13769">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=13769&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_11" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum629480" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=46537&page=1#pid629480', '话题链接已经复制到剪贴板')">12楼</strong>
													<em onclick="$('postmessage_629480').className='t_bigfont'">大</em>							<em onclick="$('postmessage_629480').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_629480').className='t_smallfont'">小</em>												发表于 2010-5-21 16:53&nbsp;																					<a href="viewthread.php?tid=46537&amp;page=1&amp;authorid=13769" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_11"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_11"></div><div id="ad_thread4_11"></div>
						
						
																											<div id="postmessage_629480" class="t_msgfont">嗯嗯，大家能用上了，高兴。偶遇到了一个问题，就是写推的时候，写完一个词，光标会自动往后跳两个字符，不知道是输入法的问题，还是软件的问题捏？</div>

							
							
							
							
															<div id="post_rate_div_629480"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo629480_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://lonion.wordpress.com" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=13769" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=46537&amp;repquote=629480&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 629480)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_11"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid629575" summary="pid629575" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8395" target="_blank" id="userinfo629575" class="dropmenu" onmouseover="showMenu(this.id)">laoyang</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">尘世中一个迷途小书童</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8395">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8395&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_12" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum629575" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=46537&page=1#pid629575', '话题链接已经复制到剪贴板')">13楼</strong>
													<em onclick="$('postmessage_629575').className='t_bigfont'">大</em>							<em onclick="$('postmessage_629575').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_629575').className='t_smallfont'">小</em>												发表于 2010-5-21 17:21&nbsp;																					<a href="viewthread.php?tid=46537&amp;page=1&amp;authorid=8395" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_12"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_12"></div><div id="ad_thread4_12"></div>
						
						
																											<div id="postmessage_629575" class="t_msgfont">跳字是bug，我也遇到了。登录的时候不能用API这很郁闷，还有注册了他一个帐户，一直说密码有误，我网页上都能登录。奇怪了</div>

							
							
							
							
															<div id="post_rate_div_629575"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo629575_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=8395" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=46537&amp;repquote=629575&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 629575)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_12"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid629648" summary="pid629648" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12322" target="_blank" id="userinfo629648" class="dropmenu" onmouseover="showMenu(this.id)">Shuangyan</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">爱IT，更爱Animations &amp; Cosmics . 爱RPG &amp; RTS，更爱暴雪出品。 爱《Animal Farm》，更爱 《Canon in D major》. 爱《1812序曲》，更爱《1984》. 爱Nonviolence Revolution，更爱Social Democracy. 我是ShuangYan，我与你分享 ...</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12322">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12322&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_13" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum629648" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=46537&page=1#pid629648', '话题链接已经复制到剪贴板')">14楼</strong>
													<em onclick="$('postmessage_629648').className='t_bigfont'">大</em>							<em onclick="$('postmessage_629648').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_629648').className='t_smallfont'">小</em>												发表于 2010-5-21 17:45&nbsp;																					<a href="viewthread.php?tid=46537&amp;page=1&amp;authorid=12322" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_13"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_13"></div><div id="ad_thread4_13"></div>
						
						
																											<div id="postmessage_629648" class="t_msgfont">使用自定义API的时候总是停留在验证状态</div>

							
							
							
							
															<div id="post_rate_div_629648"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo629648_menu" style="display: none;">
										<dl></dl>
											<p><a href="https://twitter.com/shuangyan" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=12322" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=46537&amp;repquote=629648&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 629648)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_13"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid630334" summary="pid630334" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8622" target="_blank" id="userinfo630334" class="dropmenu" onmouseover="showMenu(this.id)">kofai</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8622">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8622&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_14" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum630334" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=46537&page=1#pid630334', '话题链接已经复制到剪贴板')">15楼</strong>
													<em onclick="$('postmessage_630334').className='t_bigfont'">大</em>							<em onclick="$('postmessage_630334').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_630334').className='t_smallfont'">小</em>												发表于 2010-5-21 23:11&nbsp;																					<a href="viewthread.php?tid=46537&amp;page=1&amp;authorid=8622" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_14"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_14"></div><div id="ad_thread4_14"></div>
						
						
																											<div id="postmessage_630334" class="t_msgfont">谁有API地址提供下<br />
谢谢</div>

							
							
							
							
															<div id="post_rate_div_630334"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo630334_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=8622" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=46537&amp;repquote=630334&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 630334)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_14"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid631718" summary="pid631718" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=13769" target="_blank" id="userinfo631718" class="dropmenu" onmouseover="showMenu(this.id)">lonion</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">入门草泥马</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=13769">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=13769&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_15" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum631718" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=46537&page=1#pid631718', '话题链接已经复制到剪贴板')">16楼</strong>
													<em onclick="$('postmessage_631718').className='t_bigfont'">大</em>							<em onclick="$('postmessage_631718').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_631718').className='t_smallfont'">小</em>												发表于 2010-5-22 16:41&nbsp;																					<a href="viewthread.php?tid=46537&amp;page=1&amp;authorid=13769" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_15"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_15"></div><div id="ad_thread4_15"></div>
													<h2>回复 15楼 kofai 的话题</h2>
						
						
																											<div id="postmessage_631718" class="t_msgfont">自架设API，此处有教程，用的是谷歌美眉的app产品，<a href="https://imi.appspot.com/goto?url=http://twitbrowser.net/blog/fq/2010/04/09/467" target="_blank">https://imi.appspot.com/goto?url ... g/fq/2010/04/09/467</a>，嘻嘻</div>

							
							
							
							
															<div id="post_rate_div_631718"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo631718_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://lonion.wordpress.com" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=13769" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=46537&amp;repquote=631718&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 631718)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_15"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid633154" summary="pid633154" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=13626" target="_blank" id="userinfo633154" class="dropmenu" onmouseover="showMenu(this.id)">daxia</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">Get off the internet, I'll see you in the streets!</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=13626">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=13626&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_16" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum633154" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=46537&page=1#pid633154', '话题链接已经复制到剪贴板')">17楼</strong>
													<em onclick="$('postmessage_633154').className='t_bigfont'">大</em>							<em onclick="$('postmessage_633154').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_633154').className='t_smallfont'">小</em>												发表于 2010-5-23 11:03&nbsp;																					<a href="viewthread.php?tid=46537&amp;page=1&amp;authorid=13626" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_16"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_16"></div><div id="ad_thread4_16"></div>
						
						
																											<div id="postmessage_633154" class="t_msgfont">api建议自己去架设，更安全，更环保，网上教程很多。</div>

							
							
							
							
															<div id="post_rate_div_633154"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo633154_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=13626" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=46537&amp;repquote=633154&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 633154)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_16"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid637043" summary="pid637043" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7964" target="_blank" id="userinfo637043" class="dropmenu" onmouseover="showMenu(this.id)">Journeyman</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7964">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7964&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_17" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum637043" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=46537&page=1#pid637043', '话题链接已经复制到剪贴板')">18楼</strong>
													<em onclick="$('postmessage_637043').className='t_bigfont'">大</em>							<em onclick="$('postmessage_637043').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_637043').className='t_smallfont'">小</em>												发表于 2010-5-25 00:05&nbsp;																					<a href="viewthread.php?tid=46537&amp;page=1&amp;authorid=7964" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_17"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_17"></div><div id="ad_thread4_17"></div>
						
						
																											<div id="postmessage_637043" class="t_msgfont">才知道这个好消息~~~</div>

							
							
							
							
															<div id="post_rate_div_637043"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo637043_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://twitter.com/saintony" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=7964" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=46537&amp;repquote=637043&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 637043)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_17"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid637874" summary="pid637874" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=4964" target="_blank" id="userinfo637874" class="dropmenu" onmouseover="showMenu(this.id)">xifanliang</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">有事请Reply  @xifanliang</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=4964">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=4964&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_18" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum637874" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=46537&page=1#pid637874', '话题链接已经复制到剪贴板')">19楼</strong>
													<em onclick="$('postmessage_637874').className='t_bigfont'">大</em>							<em onclick="$('postmessage_637874').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_637874').className='t_smallfont'">小</em>												发表于 2010-5-25 13:19&nbsp;																					<a href="viewthread.php?tid=46537&amp;page=1&amp;authorid=4964" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_18"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_18"></div><div id="ad_thread4_18"></div>
						
						
																											<div id="postmessage_637874" class="t_msgfont">已经搞定，感觉速度比twhirl快不少。<br />
<br />
[<i> 本帖最后由 xifanliang 于 2010-5-25 13:57 编辑 </i>]</div>

							
							
							
							
															<div id="post_rate_div_637874"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo637874_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=4964" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=46537&amp;repquote=637874&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 637874)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_18"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid637962" summary="pid637962" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=13139" target="_blank" id="userinfo637962" class="dropmenu" onmouseover="showMenu(this.id)">wnb0310</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">芸芸众生</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=13139">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=13139&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_19" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum637962" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=46537&page=1#pid637962', '话题链接已经复制到剪贴板')">20楼</strong>
													<em onclick="$('postmessage_637962').className='t_bigfont'">大</em>							<em onclick="$('postmessage_637962').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_637962').className='t_smallfont'">小</em>												发表于 2010-5-25 14:00&nbsp;																					<a href="viewthread.php?tid=46537&amp;page=1&amp;authorid=13139" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_19"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_19"></div><div id="ad_thread4_19"></div>
						
						
																											<div id="postmessage_637962" class="t_msgfont">不会弄</div>

							
							
							
							
															<div id="post_rate_div_637962"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo637962_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=13139" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=46537&amp;repquote=637962&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 637962)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_19"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid638036" summary="pid638036" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7221" target="_blank" id="userinfo638036" class="dropmenu" onmouseover="showMenu(this.id)">8th.gua</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7221">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7221&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_20" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum638036" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=46537&page=1#pid638036', '话题链接已经复制到剪贴板')">21楼</strong>
													<em onclick="$('postmessage_638036').className='t_bigfont'">大</em>							<em onclick="$('postmessage_638036').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_638036').className='t_smallfont'">小</em>												发表于 2010-5-25 14:29&nbsp;																					<a href="viewthread.php?tid=46537&amp;page=1&amp;authorid=7221" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_20"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_20"></div><div id="ad_thread4_20"></div>
						
						
																											<div id="postmessage_638036" class="t_msgfont">tweetdeck该怎么上Facebook？</div>

							
							
							
							
															<div id="post_rate_div_638036"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo638036_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=7221" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=46537&amp;repquote=638036&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 638036)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_20"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid638418" summary="pid638418" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 <a name="lastpost"></a>					<cite>											<a href="space.php?uid=11003" target="_blank" id="userinfo638418" class="dropmenu" onmouseover="showMenu(this.id)">是我阿</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=11003">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=11003&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_21" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum638418" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=46537&page=1#pid638418', '话题链接已经复制到剪贴板')">22楼</strong>
													<em onclick="$('postmessage_638418').className='t_bigfont'">大</em>							<em onclick="$('postmessage_638418').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_638418').className='t_smallfont'">小</em>												发表于 2010-5-25 18:15&nbsp;																					<a href="viewthread.php?tid=46537&amp;page=1&amp;authorid=11003" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_21"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_21"></div><div id="ad_thread4_21"></div>
						
						
																											<div id="postmessage_638418" class="t_msgfont">这个软件不错, 我也用上了</div>

							
							
							
							
															<div id="post_rate_div_638418"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo638418_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=11003" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=46537&amp;repquote=638418&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 638418)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_21"></div>				</div>
			</td>
		</tr>
		</table>
		</div>
</form>





<div class="pages_btns">
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=46537&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=46537&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
				<span class="postbtn" id="newspecialtmp" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=46537&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

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

	<form method="post" id="postform" action="post.php?action=reply&amp;fid=26&amp;tid=46537&amp;extra=&amp;replysubmit=yes" onSubmit="return validate(this)">
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
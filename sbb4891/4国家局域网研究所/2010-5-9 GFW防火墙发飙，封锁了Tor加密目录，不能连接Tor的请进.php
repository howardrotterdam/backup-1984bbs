<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<title>GFW防火墙发飙，封锁了Tor加密目录，不能连接Tor的请进 - 国家局域网研究所 -  1984bbs.com </title>
<meta name="keywords" content="" />
<meta name="MSSmartTagsPreventParsing" content="True" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<link rel="archives" title="1984bbs.com" href="https://1984bbs.com/archiver/" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_viewthread.css" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_common.css" />
<script type="text/javascript">
	var discuz_uid = 13019;var IMGDIR = 'images/default';var attackevasive = '0';var gid = 0;var STYLEID = '1';
	gid = parseInt('3');var fid = parseInt('26');var tid = parseInt('45336');
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
			<p><a href="index.php" id="forumlist" onmouseover="showMenu(this.id)" class="dropmenu">1984bbs.com</a> &raquo; <a href="forumdisplay.php?fid=26">国家局域网研究所</a> &raquo; GFW防火墙发飙，封锁了Tor加密目录，不能连接Tor的请进</p>
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
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=45336&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=45336&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
				<span class="postbtn" id="newspecial" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=45336&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

	<ul class="popupmenu_popup newspecialmenu" id="newspecial_menu" style="display: none">
		<li><a href="post.php?action=newthread&amp;fid=26&amp;extra=">发新话题</a></li>
		<li class="poll"><a href="post.php?action=newthread&amp;fid=26&amp;extra=&amp;special=1">发布投票</a></li>													</ul>

<form method="post" name="modactions">
	<input type="hidden" name="formhash" value="823c9fa2" />
	<div class="mainbox viewthread">
		<span class="headactions">
					<a href="my.php?item=favorites&amp;tid=45336" id="ajax_favorite" onclick="ajaxmenu(event, this.id, 3000, 0)">收藏</a>
			<a href="my.php?item=subscriptions&amp;subadd=45336" id="ajax_subscription" onclick="ajaxmenu(event, this.id, 3000, null, 0)">订阅</a>
			<a href="misc.php?action=emailfriend&amp;tid=45336" id="emailfriend" onclick="ajaxmenu(event, this.id, 9000000, null, 0)">推荐</a>
				<a href="viewthread.php?action=printable&amp;tid=45336" target="_blank" class="notabs">打印</a>
				</span>
		<h1>GFW防火墙发飙，封锁了Tor加密目录，不能连接Tor的请进		</h1>
							<table id="pid606657" summary="pid606657" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=11493" target="_blank" id="userinfo606657" class="dropmenu" onmouseover="showMenu(this.id)">gzlxd</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">Twitter/@gzlxd</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=11493">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=11493&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_0" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum606657" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=45336&page=1#pid606657', '话题链接已经复制到剪贴板')">1楼</strong>
													<em onclick="$('postmessage_606657').className='t_bigfont'">大</em>							<em onclick="$('postmessage_606657').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_606657').className='t_smallfont'">小</em>												发表于 2010-5-9 22:24&nbsp;																					<a href="viewthread.php?tid=45336&amp;page=1&amp;authorid=11493" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_0"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_0"></div><div id="ad_thread4_0"></div>
													<h2>GFW防火墙发飙，封锁了Tor加密目录，不能连接Tor的请进</h2>
						
						
																											<div id="postmessage_606657" class="t_msgfont">昨天开始，GFW防火墙发飙了，所有的ISP封锁了Tor加密目录，所有的Tor都无法登录.....<br />
<br />
别急,请按照俺的方法一布一步操作,我会让你的Tor变绿<br />
<br />
首先来到这个网站 <a href="http://proxy-list.org/en/index.php?pp=any&amp;pt=any&amp;pc=any&amp;ps=any&amp;submit=Filter+Proxy" target="_blank">http://proxy-list.org/en/index.p ... submit=Filter+Proxy</a>&nbsp; &nbsp;输入验证码，找到代理。<br />
<br />
如 xxx.xxx.xxx.xxx ：8080<br />
<br />
然后再回到Tor的设置里加入你找到的代理连接添加，按确定; 如图<br />
<br />
<img src="http://i43.tinypic.com/a5exzl.jpg" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
<br />
稍等片刻！ 咱们的Tor又变成绿色了！！<br />
<br />
<img src="http://i44.tinypic.com/maf6hk.jpg" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></div>

							
							
							
							
															<div id="post_rate_div_606657"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo606657_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=11493" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=45336&amp;repquote=606657&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 606657)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_0"></div>				</div>
			</td>
		</tr>
		</table>
		</div><div class="ad_column" id="ad_interthread"><a href="/viewthread.php?tid=54699" target="_blank" style="color:red;">1984bbs是一个非营利项目，它需要您的捐助！</font></a>		</div>
	<div class="mainbox viewthread">
			<table id="pid606667" summary="pid606667" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12463" target="_blank" id="userinfo606667" class="dropmenu" onmouseover="showMenu(this.id)">DaemonEye</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">不河蟹的围观团团员</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12463">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12463&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_1" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum606667" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=45336&page=1#pid606667', '话题链接已经复制到剪贴板')">2楼</strong>
													<em onclick="$('postmessage_606667').className='t_bigfont'">大</em>							<em onclick="$('postmessage_606667').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_606667').className='t_smallfont'">小</em>												发表于 2010-5-9 22:34&nbsp;																					<a href="viewthread.php?tid=45336&amp;page=1&amp;authorid=12463" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_1"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_1"></div><div id="ad_thread4_1"></div>
						
						
																											<div id="postmessage_606667" class="t_msgfont">什么叫封锁加密目录 我没想通 tor这样多级转发怎么堵住的...</div>

							
							
							
							
															<div id="post_rate_div_606667"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo606667_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=12463" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=45336&amp;repquote=606667&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 606667)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_1"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid606674" summary="pid606674" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=5450" target="_blank" id="userinfo606674" class="dropmenu" onmouseover="showMenu(this.id)">zby2009cx</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=5450">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=5450&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_2" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum606674" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=45336&page=1#pid606674', '话题链接已经复制到剪贴板')">3楼</strong>
													<em onclick="$('postmessage_606674').className='t_bigfont'">大</em>							<em onclick="$('postmessage_606674').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_606674').className='t_smallfont'">小</em>												发表于 2010-5-9 22:39&nbsp;																					<a href="viewthread.php?tid=45336&amp;page=1&amp;authorid=5450" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_2"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_2"></div><div id="ad_thread4_2"></div>
						
						
																											<div id="postmessage_606674" class="t_msgfont">谢谢楼主，试了两次，成功变绿！</div>

							
							
							
							
															<div id="post_rate_div_606674"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo606674_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=5450" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=45336&amp;repquote=606674&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 606674)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_2"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid606696" summary="pid606696" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2281" target="_blank" id="userinfo606696" class="dropmenu" onmouseover="showMenu(this.id)">calvino</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2281">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2281&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_3" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum606696" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=45336&page=1#pid606696', '话题链接已经复制到剪贴板')">4楼</strong>
													<em onclick="$('postmessage_606696').className='t_bigfont'">大</em>							<em onclick="$('postmessage_606696').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_606696').className='t_smallfont'">小</em>												发表于 2010-5-9 22:53&nbsp;																					<a href="viewthread.php?tid=45336&amp;page=1&amp;authorid=2281" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_3"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_3"></div><div id="ad_thread4_3"></div>
						
						
																											<div id="postmessage_606696" class="t_msgfont">那代理失效了又要换，不就跟直接设置浏览器使用代理一样麻烦了</div>

							
							
							
							
															<div id="post_rate_div_606696"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo606696_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=2281" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=45336&amp;repquote=606696&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 606696)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_3"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid606916" summary="pid606916" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=13464" target="_blank" id="userinfo606916" class="dropmenu" onmouseover="showMenu(this.id)">xujunhua</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=13464">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=13464&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_4" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum606916" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=45336&page=1#pid606916', '话题链接已经复制到剪贴板')">5楼</strong>
													<em onclick="$('postmessage_606916').className='t_bigfont'">大</em>							<em onclick="$('postmessage_606916').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_606916').className='t_smallfont'">小</em>												发表于 2010-5-10 01:15&nbsp;																					<a href="viewthread.php?tid=45336&amp;page=1&amp;authorid=13464" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_4"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_4"></div><div id="ad_thread4_4"></div>
						
						
																											<div id="postmessage_606916" class="t_msgfont">好久不用tor了啊</div>

							
							
							
							
															<div id="post_rate_div_606916"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo606916_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=13464" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=45336&amp;repquote=606916&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 606916)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_4"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid607039" summary="pid607039" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=11245" target="_blank" id="userinfo607039" class="dropmenu" onmouseover="showMenu(this.id)">shysun</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">wanderer @sunshier</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=11245">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=11245&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_5" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum607039" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=45336&page=1#pid607039', '话题链接已经复制到剪贴板')">6楼</strong>
													<em onclick="$('postmessage_607039').className='t_bigfont'">大</em>							<em onclick="$('postmessage_607039').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_607039').className='t_smallfont'">小</em>												发表于 2010-5-10 08:40&nbsp;																					<a href="viewthread.php?tid=45336&amp;page=1&amp;authorid=11245" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_5"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_5"></div><div id="ad_thread4_5"></div>
						
						
																											<div id="postmessage_607039" class="t_msgfont">谢了，这方法真管用～</div>

							
							
							
							
															<div id="post_rate_div_607039"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo607039_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=11245" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=45336&amp;repquote=607039&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 607039)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_5"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid607297" summary="pid607297" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=13553" target="_blank" id="userinfo607297" class="dropmenu" onmouseover="showMenu(this.id)">彩云之巅</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">乌合之众</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=13553">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=13553&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_6" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum607297" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=45336&page=1#pid607297', '话题链接已经复制到剪贴板')">7楼</strong>
													<em onclick="$('postmessage_607297').className='t_bigfont'">大</em>							<em onclick="$('postmessage_607297').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_607297').className='t_smallfont'">小</em>												发表于 2010-5-10 10:50&nbsp;																					<a href="viewthread.php?tid=45336&amp;page=1&amp;authorid=13553" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_6"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_6"></div><div id="ad_thread4_6"></div>
						
						
																											<div id="postmessage_607297" class="t_msgfont">如果这个获取代理的网站被墙了怎么办？<br />
<br />
为什么现在设了网桥也不管用了？</div>

							
							
							
							
															<div id="post_rate_div_607297"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo607297_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=13553" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=45336&amp;repquote=607297&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 607297)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_6"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid607608" summary="pid607608" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7592" target="_blank" id="userinfo607608" class="dropmenu" onmouseover="showMenu(this.id)">雷曼兄弟</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">@trotrotro</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7592">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7592&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_7" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum607608" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=45336&page=1#pid607608', '话题链接已经复制到剪贴板')">8楼</strong>
													<em onclick="$('postmessage_607608').className='t_bigfont'">大</em>							<em onclick="$('postmessage_607608').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_607608').className='t_smallfont'">小</em>												发表于 2010-5-10 13:33&nbsp;																					<a href="viewthread.php?tid=45336&amp;page=1&amp;authorid=7592" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_7"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_7"></div><div id="ad_thread4_7"></div>
						
						
																											<div id="postmessage_607608" class="t_msgfont">感谢楼主！</div>

							
							
							
							
															<div id="post_rate_div_607608"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo607608_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=7592" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=45336&amp;repquote=607608&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 607608)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_7"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid608007" summary="pid608007" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=4394" target="_blank" id="userinfo608007" class="dropmenu" onmouseover="showMenu(this.id)">imcol</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=4394">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=4394&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_8" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum608007" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=45336&page=1#pid608007', '话题链接已经复制到剪贴板')">9楼</strong>
													<em onclick="$('postmessage_608007').className='t_bigfont'">大</em>							<em onclick="$('postmessage_608007').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_608007').className='t_smallfont'">小</em>												发表于 2010-5-10 17:12&nbsp;																					<a href="viewthread.php?tid=45336&amp;page=1&amp;authorid=4394" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_8"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_8"></div><div id="ad_thread4_8"></div>
						
						
																											<div id="postmessage_608007" class="t_msgfont">但是这个网站不能访问。。。<br />
求助！<br />
谢谢！</div>

							
							
							
							
															<div id="post_rate_div_608007"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo608007_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=4394" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=45336&amp;repquote=608007&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 608007)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_8"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid608046" summary="pid608046" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7592" target="_blank" id="userinfo608046" class="dropmenu" onmouseover="showMenu(this.id)">雷曼兄弟</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">@trotrotro</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7592">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7592&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_9" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum608046" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=45336&page=1#pid608046', '话题链接已经复制到剪贴板')">10楼</strong>
													<em onclick="$('postmessage_608046').className='t_bigfont'">大</em>							<em onclick="$('postmessage_608046').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_608046').className='t_smallfont'">小</em>												发表于 2010-5-10 17:31&nbsp;																					<a href="viewthread.php?tid=45336&amp;page=1&amp;authorid=7592" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_9"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_9"></div><div id="ad_thread4_9"></div>
													<h2>用了一下午了，再次感谢楼主</h2>
						
						
																											<div id="postmessage_608046" class="t_msgfont">速度不快，但开个推特是足够了<br />
<br />
发现tor的network选项里可以打三个勾，第三个isp那个，已经不行了，第二个跟翻墙似乎是没多大关系，现在只剩下最后一个了。诶<br />
不知道今后tor能不能继续用啊</div>

							
							
							
							
															<div id="post_rate_div_608046"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo608046_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=7592" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=45336&amp;repquote=608046&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 608046)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_9"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid608129" summary="pid608129" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=4394" target="_blank" id="userinfo608129" class="dropmenu" onmouseover="showMenu(this.id)">imcol</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=4394">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=4394&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_10" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum608129" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=45336&page=1#pid608129', '话题链接已经复制到剪贴板')">11楼</strong>
													<em onclick="$('postmessage_608129').className='t_bigfont'">大</em>							<em onclick="$('postmessage_608129').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_608129').className='t_smallfont'">小</em>												发表于 2010-5-10 18:27&nbsp;																					<a href="viewthread.php?tid=45336&amp;page=1&amp;authorid=4394" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_10"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_10"></div><div id="ad_thread4_10"></div>
						
						
																											<div id="postmessage_608129" class="t_msgfont">雷曼兄弟，能否发个proxy过来用用？谢谢</div>

							
							
							
							
															<div id="post_rate_div_608129"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo608129_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=4394" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=45336&amp;repquote=608129&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 608129)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_10"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid608178" summary="pid608178" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=13522" target="_blank" id="userinfo608178" class="dropmenu" onmouseover="showMenu(this.id)">jojolao</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">只要有一面青天白日滿地紅的國旗插在我們中國領土之上，那就是我黃帝子孫獨立自由的標識。</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=13522">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=13522&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_11" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum608178" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=45336&page=1#pid608178', '话题链接已经复制到剪贴板')">12楼</strong>
													<em onclick="$('postmessage_608178').className='t_bigfont'">大</em>							<em onclick="$('postmessage_608178').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_608178').className='t_smallfont'">小</em>												发表于 2010-5-10 18:57&nbsp;																					<a href="viewthread.php?tid=45336&amp;page=1&amp;authorid=13522" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_11"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_11"></div><div id="ad_thread4_11"></div>
						
						
																											<div id="postmessage_608178" class="t_msgfont">极端情况下，三个钩都不打，是可以上的。不过更极端的情况是，TOR被破坏，无法启动（我遇到3次）。<br />
所以，留着TOR的安装文件，记下找“桥”的网址，在找一个线上代理（baidu能找到，真讽刺）。<br />
当TOR被破坏后，重装，之后用线上代理找“桥”。</div>

							
							
							
							
															<div id="post_rate_div_608178"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo608178_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=13522" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=45336&amp;repquote=608178&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 608178)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_11"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid611894" summary="pid611894" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=5450" target="_blank" id="userinfo611894" class="dropmenu" onmouseover="showMenu(this.id)">zby2009cx</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=5450">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=5450&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_12" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum611894" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=45336&page=1#pid611894', '话题链接已经复制到剪贴板')">13楼</strong>
													<em onclick="$('postmessage_611894').className='t_bigfont'">大</em>							<em onclick="$('postmessage_611894').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_611894').className='t_smallfont'">小</em>												发表于 2010-5-12 19:06&nbsp;																					<a href="viewthread.php?tid=45336&amp;page=1&amp;authorid=5450" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_12"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_12"></div><div id="ad_thread4_12"></div>
						
						
																											<div id="postmessage_611894" class="t_msgfont">楼主，今天本方法又失效了，还有啥新招没？</div>

							
							
							
							
															<div id="post_rate_div_611894"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo611894_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=5450" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=45336&amp;repquote=611894&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 611894)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_12"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid611924" summary="pid611924" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=11493" target="_blank" id="userinfo611924" class="dropmenu" onmouseover="showMenu(this.id)">gzlxd</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">Twitter/@gzlxd</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=11493">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=11493&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_13" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum611924" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=45336&page=1#pid611924', '话题链接已经复制到剪贴板')">14楼</strong>
													<em onclick="$('postmessage_611924').className='t_bigfont'">大</em>							<em onclick="$('postmessage_611924').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_611924').className='t_smallfont'">小</em>												发表于 2010-5-12 19:24&nbsp;																					<a href="viewthread.php?tid=45336&amp;page=1&amp;authorid=11493" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_13"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_13"></div><div id="ad_thread4_13"></div>
						
						
																											<div id="postmessage_611924" class="t_msgfont">有效中哦</div>

							
							
							
							
															<div id="post_rate_div_611924"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo611924_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=11493" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=45336&amp;repquote=611924&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 611924)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_13"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid611947" summary="pid611947" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=5450" target="_blank" id="userinfo611947" class="dropmenu" onmouseover="showMenu(this.id)">zby2009cx</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=5450">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=5450&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_14" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum611947" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=45336&page=1#pid611947', '话题链接已经复制到剪贴板')">15楼</strong>
													<em onclick="$('postmessage_611947').className='t_bigfont'">大</em>							<em onclick="$('postmessage_611947').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_611947').className='t_smallfont'">小</em>												发表于 2010-5-12 19:44&nbsp;																					<a href="viewthread.php?tid=45336&amp;page=1&amp;authorid=5450" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_14"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_14"></div><div id="ad_thread4_14"></div>
						
						
																											<div id="postmessage_611947" class="t_msgfont">一连试了七八个代理，还是显示“没有可用链路”，咋回事呢？</div>

							
							
							
							
															<div id="post_rate_div_611947"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo611947_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=5450" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=45336&amp;repquote=611947&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 611947)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_14"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid611987" summary="pid611987" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=4594" target="_blank" id="userinfo611987" class="dropmenu" onmouseover="showMenu(this.id)">sky</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=4594">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=4594&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_15" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum611987" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=45336&page=1#pid611987', '话题链接已经复制到剪贴板')">16楼</strong>
													<em onclick="$('postmessage_611987').className='t_bigfont'">大</em>							<em onclick="$('postmessage_611987').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_611987').className='t_smallfont'">小</em>												发表于 2010-5-12 20:12&nbsp;																					<a href="viewthread.php?tid=45336&amp;page=1&amp;authorid=4594" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_15"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_15"></div><div id="ad_thread4_15"></div>
						
						
																											<div id="postmessage_611987" class="t_msgfont">感谢感谢，确实有效！</div>

							
							
							
							
															<div id="post_rate_div_611987"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo611987_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=4594" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=45336&amp;repquote=611987&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 611987)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_15"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid612849" summary="pid612849" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=3899" target="_blank" id="userinfo612849" class="dropmenu" onmouseover="showMenu(this.id)">饭碗</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=3899">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=3899&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_16" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum612849" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=45336&page=1#pid612849', '话题链接已经复制到剪贴板')">17楼</strong>
													<em onclick="$('postmessage_612849').className='t_bigfont'">大</em>							<em onclick="$('postmessage_612849').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_612849').className='t_smallfont'">小</em>												发表于 2010-5-13 09:58&nbsp;																					<a href="viewthread.php?tid=45336&amp;page=1&amp;authorid=3899" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_16"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_16"></div><div id="ad_thread4_16"></div>
						
						
																											<div id="postmessage_612849" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>jojolao</i> 于 2010-5-10 18:57 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=608178&amp;ptid=45336" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
极端情况下，三个钩都不打，是可以上的。不过更极端的情况是，TOR被破坏，无法启动（我遇到3次）。<br />
所以，留着TOR的安装文件，记下找“桥”的网址，在找一个线上代理（baidu能找到，真讽刺）。<br />
当TOR被破坏后，重装 ... </blockquote></div>这个法子在我这边可用。确实是网桥一开反而连不上！<br />
<br />
<br />
江苏网通</div>

							
							
							
							
															<div id="post_rate_div_612849"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo612849_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=3899" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=45336&amp;repquote=612849&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 612849)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_16"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid614214" summary="pid614214" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=5450" target="_blank" id="userinfo614214" class="dropmenu" onmouseover="showMenu(this.id)">zby2009cx</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=5450">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=5450&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_17" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum614214" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=45336&page=1#pid614214', '话题链接已经复制到剪贴板')">18楼</strong>
													<em onclick="$('postmessage_614214').className='t_bigfont'">大</em>							<em onclick="$('postmessage_614214').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_614214').className='t_smallfont'">小</em>												发表于 2010-5-13 22:20&nbsp;																					<a href="viewthread.php?tid=45336&amp;page=1&amp;authorid=5450" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_17"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_17"></div><div id="ad_thread4_17"></div>
						
						
																											<div id="postmessage_614214" class="t_msgfont">今天全盘清理了一次，总算又连上了！</div>

							
							
							
							
															<div id="post_rate_div_614214"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo614214_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=5450" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=45336&amp;repquote=614214&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 614214)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_17"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid614309" summary="pid614309" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=11385" target="_blank" id="userinfo614309" class="dropmenu" onmouseover="showMenu(this.id)">senine</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=11385">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=11385&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_18" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum614309" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=45336&page=1#pid614309', '话题链接已经复制到剪贴板')">19楼</strong>
													<em onclick="$('postmessage_614309').className='t_bigfont'">大</em>							<em onclick="$('postmessage_614309').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_614309').className='t_smallfont'">小</em>												发表于 2010-5-13 23:20&nbsp;																					<a href="viewthread.php?tid=45336&amp;page=1&amp;authorid=11385" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_18"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_18"></div><div id="ad_thread4_18"></div>
						
						
																											<div id="postmessage_614309" class="t_msgfont">果然有效。谢谢！</div>

							
							
							
							
															<div id="post_rate_div_614309"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo614309_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=11385" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=45336&amp;repquote=614309&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 614309)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_18"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid615121" summary="pid615121" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=4394" target="_blank" id="userinfo615121" class="dropmenu" onmouseover="showMenu(this.id)">imcol</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=4394">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=4394&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_19" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum615121" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=45336&page=1#pid615121', '话题链接已经复制到剪贴板')">20楼</strong>
													<em onclick="$('postmessage_615121').className='t_bigfont'">大</em>							<em onclick="$('postmessage_615121').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_615121').className='t_smallfont'">小</em>												发表于 2010-5-14 14:54&nbsp;																					<a href="viewthread.php?tid=45336&amp;page=1&amp;authorid=4394" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_19"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_19"></div><div id="ad_thread4_19"></div>
						
						
																											<div id="postmessage_615121" class="t_msgfont">很意外，今天用网桥又能上去了，<br />
难道是专门封5/12?</div>

							
							
							
							
															<div id="post_rate_div_615121"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo615121_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=4394" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=45336&amp;repquote=615121&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 615121)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_19"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid621157" summary="pid621157" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=13713" target="_blank" id="userinfo621157" class="dropmenu" onmouseover="showMenu(this.id)">xiha678</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=13713">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=13713&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_20" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum621157" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=45336&page=1#pid621157', '话题链接已经复制到剪贴板')">21楼</strong>
													<em onclick="$('postmessage_621157').className='t_bigfont'">大</em>							<em onclick="$('postmessage_621157').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_621157').className='t_smallfont'">小</em>												发表于 2010-5-17 19:19&nbsp;																					<a href="viewthread.php?tid=45336&amp;page=1&amp;authorid=13713" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_20"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_20"></div><div id="ad_thread4_20"></div>
						
						
																											<div id="postmessage_621157" class="t_msgfont">话说俺用的tor傻了近两个星期，突然间又自己好了</div>

							
							
							
							
															<div id="post_rate_div_621157"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo621157_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=13713" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=45336&amp;repquote=621157&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 621157)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_20"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid621487" summary="pid621487" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2281" target="_blank" id="userinfo621487" class="dropmenu" onmouseover="showMenu(this.id)">calvino</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2281">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2281&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_21" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum621487" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=45336&page=1#pid621487', '话题链接已经复制到剪贴板')">22楼</strong>
													<em onclick="$('postmessage_621487').className='t_bigfont'">大</em>							<em onclick="$('postmessage_621487').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_621487').className='t_smallfont'">小</em>												发表于 2010-5-17 21:51&nbsp;																					<a href="viewthread.php?tid=45336&amp;page=1&amp;authorid=2281" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_21"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_21"></div><div id="ad_thread4_21"></div>
						
						
																											<div id="postmessage_621487" class="t_msgfont">又绿了，这到底是怎么回事，到底是什么意思？</div>

							
							
							
							
															<div id="post_rate_div_621487"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo621487_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=2281" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=45336&amp;repquote=621487&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 621487)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_21"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid622225" summary="pid622225" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=13622" target="_blank" id="userinfo622225" class="dropmenu" onmouseover="showMenu(this.id)">禾夜</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=13622">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=13622&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_22" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum622225" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=45336&page=1#pid622225', '话题链接已经复制到剪贴板')">23楼</strong>
													<em onclick="$('postmessage_622225').className='t_bigfont'">大</em>							<em onclick="$('postmessage_622225').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_622225').className='t_smallfont'">小</em>												发表于 2010-5-18 10:12&nbsp;																					<a href="viewthread.php?tid=45336&amp;page=1&amp;authorid=13622" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_22"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_22"></div><div id="ad_thread4_22"></div>
						
						
																											<div id="postmessage_622225" class="t_msgfont">要是亮了请楼主吃饭</div>

							
							
							
							
															<div id="post_rate_div_622225"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo622225_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=13622" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=45336&amp;repquote=622225&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 622225)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_22"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid626238" summary="pid626238" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6046" target="_blank" id="userinfo626238" class="dropmenu" onmouseover="showMenu(this.id)">killyou</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6046">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6046&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_23" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum626238" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=45336&page=1#pid626238', '话题链接已经复制到剪贴板')">24楼</strong>
													<em onclick="$('postmessage_626238').className='t_bigfont'">大</em>							<em onclick="$('postmessage_626238').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_626238').className='t_smallfont'">小</em>												发表于 2010-5-20 09:41&nbsp;																					<a href="viewthread.php?tid=45336&amp;page=1&amp;authorid=6046" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_23"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_23"></div><div id="ad_thread4_23"></div>
						
						
																											<div id="postmessage_626238" class="t_msgfont">太缺德了，好好的又给封了。我要诅咒</div>

							
							
							
							
															<div id="post_rate_div_626238"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo626238_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=6046" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=45336&amp;repquote=626238&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 626238)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_23"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid626256" summary="pid626256" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6046" target="_blank" id="userinfo626256" class="dropmenu" onmouseover="showMenu(this.id)">killyou</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6046">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6046&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_24" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum626256" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=45336&page=1#pid626256', '话题链接已经复制到剪贴板')">25楼</strong>
													<em onclick="$('postmessage_626256').className='t_bigfont'">大</em>							<em onclick="$('postmessage_626256').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_626256').className='t_smallfont'">小</em>												发表于 2010-5-20 09:45&nbsp;																					<a href="viewthread.php?tid=45336&amp;page=1&amp;authorid=6046" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_24"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_24"></div><div id="ad_thread4_24"></div>
						
						
																											<div id="postmessage_626256" class="t_msgfont">果然好用，收藏先</div>

							
							
							
							
															<div id="post_rate_div_626256"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo626256_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=6046" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=45336&amp;repquote=626256&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 626256)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_24"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid627129" summary="pid627129" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12197" target="_blank" id="userinfo627129" class="dropmenu" onmouseover="showMenu(this.id)">曙光再现</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">&#9745;80后 &#9745;工科学生 &#9745;ACG fan &#9745;党龄八年 &#9745;喜外国商业大片 &#9745;喜翻墙 &#9745;喜GR &#9745;黑丝控 &#9745;美腿控 &#9745;时事控 &#9745;伪愤青 &#9745;草泥马军团预备团员&#9745;新人@ssg2006求fo</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12197">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12197&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_25" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum627129" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=45336&page=1#pid627129', '话题链接已经复制到剪贴板')">26楼</strong>
													<em onclick="$('postmessage_627129').className='t_bigfont'">大</em>							<em onclick="$('postmessage_627129').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_627129').className='t_smallfont'">小</em>												发表于 2010-5-20 16:46&nbsp;																					<a href="viewthread.php?tid=45336&amp;page=1&amp;authorid=12197" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_25"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_25"></div><div id="ad_thread4_25"></div>
						
						
																											<div id="postmessage_627129" class="t_msgfont">谢谢楼主，半个月了终于又亮了。决定以后每日定推这个方法</div>

							
							
							
							
															<div id="post_rate_div_627129"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo627129_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=12197" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=45336&amp;repquote=627129&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 627129)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_25"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid627757" summary="pid627757" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10012" target="_blank" id="userinfo627757" class="dropmenu" onmouseover="showMenu(this.id)">nkskyshn</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10012">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10012&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_26" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum627757" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=45336&page=1#pid627757', '话题链接已经复制到剪贴板')">27楼</strong>
													<em onclick="$('postmessage_627757').className='t_bigfont'">大</em>							<em onclick="$('postmessage_627757').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_627757').className='t_smallfont'">小</em>												发表于 2010-5-20 22:15&nbsp;																					<a href="viewthread.php?tid=45336&amp;page=1&amp;authorid=10012" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_26"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_26"></div><div id="ad_thread4_26"></div>
						
						
																											<div id="postmessage_627757" class="t_msgfont">试试</div>

							
							
							
							
															<div id="post_rate_div_627757"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo627757_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=10012" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=45336&amp;repquote=627757&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 627757)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_26"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid629413" summary="pid629413" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=13662" target="_blank" id="userinfo629413" class="dropmenu" onmouseover="showMenu(this.id)">caitihu</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=13662">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=13662&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_27" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum629413" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=45336&page=1#pid629413', '话题链接已经复制到剪贴板')">28楼</strong>
													<em onclick="$('postmessage_629413').className='t_bigfont'">大</em>							<em onclick="$('postmessage_629413').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_629413').className='t_smallfont'">小</em>												发表于 2010-5-21 16:33&nbsp;																					<a href="viewthread.php?tid=45336&amp;page=1&amp;authorid=13662" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_27"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_27"></div><div id="ad_thread4_27"></div>
						
						
																											<div id="postmessage_629413" class="t_msgfont">用自由门不好吗？</div>

							
							
							
							
															<div id="post_rate_div_629413"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo629413_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=13662" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=45336&amp;repquote=629413&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 629413)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_27"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid629760" summary="pid629760" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=13788" target="_blank" id="userinfo629760" class="dropmenu" onmouseover="showMenu(this.id)">柴子</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=13788">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=13788&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_28" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum629760" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=45336&page=1#pid629760', '话题链接已经复制到剪贴板')">29楼</strong>
													<em onclick="$('postmessage_629760').className='t_bigfont'">大</em>							<em onclick="$('postmessage_629760').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_629760').className='t_smallfont'">小</em>												发表于 2010-5-21 18:49&nbsp;																					<a href="viewthread.php?tid=45336&amp;page=1&amp;authorid=13788" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_28"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_28"></div><div id="ad_thread4_28"></div>
													<h2>回复 28楼 caitihu 的话题</h2>
						
						
																											<div id="postmessage_629760" class="t_msgfont">老是捆绑轮子的意识形态，不是很喜欢</div>

							
							
							
							
															<div id="post_rate_div_629760"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo629760_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=13788" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=45336&amp;repquote=629760&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 629760)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_28"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid629856" summary="pid629856" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12963" target="_blank" id="userinfo629856" class="dropmenu" onmouseover="showMenu(this.id)">占领陆地的鱼</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12963">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12963&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_29" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum629856" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=45336&page=1#pid629856', '话题链接已经复制到剪贴板')">30楼</strong>
													<em onclick="$('postmessage_629856').className='t_bigfont'">大</em>							<em onclick="$('postmessage_629856').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_629856').className='t_smallfont'">小</em>												发表于 2010-5-21 19:46&nbsp;																					<a href="viewthread.php?tid=45336&amp;page=1&amp;authorid=12963" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_29"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_29"></div><div id="ad_thread4_29"></div>
													<h2>回复 29楼 柴子 的话题</h2>
						
						
																											<div id="postmessage_629856" class="t_msgfont">可以设置主页不打开。没强制看</div>

							
							
							
							
															<div id="post_rate_div_629856"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo629856_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=12963" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=45336&amp;repquote=629856&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 629856)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_29"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid629957" summary="pid629957" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=11891" target="_blank" id="userinfo629957" class="dropmenu" onmouseover="showMenu(this.id)">bychurchill</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=11891">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=11891&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_30" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum629957" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=45336&page=1#pid629957', '话题链接已经复制到剪贴板')">31楼</strong>
													<em onclick="$('postmessage_629957').className='t_bigfont'">大</em>							<em onclick="$('postmessage_629957').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_629957').className='t_smallfont'">小</em>												发表于 2010-5-21 20:34&nbsp;																					<a href="viewthread.php?tid=45336&amp;page=1&amp;authorid=11891" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_30"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_30"></div><div id="ad_thread4_30"></div>
						
						
																											<div id="postmessage_629957" class="t_msgfont">不用tor久已</div>

							
							
							
							
															<div id="post_rate_div_629957"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo629957_menu" style="display: none;">
										<div class="imicons">
													<a target='_blank' href='http://settings.messenger.live.com/Conversation/IMMe.aspx?invitee=bychurchill@hotmail.com&mkt=zh-cn'><img style='border-style: none;' src='http://messenger.services.live.com/users/bychurchill@hotmail.com/presenceimage?mkt=zh-cn' width='16' height='16' /></a>
												<a href="http://wpa.qq.com/msgrd?V=1&amp;Uin=1043677216&amp;Site=1984bbs.com&amp;Menu=yes" target="_blank"><img src="images/default/qq.gif" alt="QQ" /></a>																							</div>
										<dl></dl>
										<p><a href="space.php?uid=11891" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=45336&amp;repquote=629957&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 629957)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_30"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid696012" summary="pid696012" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=9146" target="_blank" id="userinfo696012" class="dropmenu" onmouseover="showMenu(this.id)">fernando</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">疯人院院长</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=9146">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=9146&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_31" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum696012" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=45336&page=1#pid696012', '话题链接已经复制到剪贴板')">32楼</strong>
													<em onclick="$('postmessage_696012').className='t_bigfont'">大</em>							<em onclick="$('postmessage_696012').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_696012').className='t_smallfont'">小</em>												发表于 2010-6-21 20:05&nbsp;																					<a href="viewthread.php?tid=45336&amp;page=1&amp;authorid=9146" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_31"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_31"></div><div id="ad_thread4_31"></div>
						
						
																											<div id="postmessage_696012" class="t_msgfont">虽然付了点钱，不过SSH翻墙翻起来很爽</div>

							
							
							
							
															<div id="post_rate_div_696012"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo696012_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=9146" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=45336&amp;repquote=696012&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 696012)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_31"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid696039" summary="pid696039" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=14913" target="_blank" id="userinfo696039" class="dropmenu" onmouseover="showMenu(this.id)">deeperthink</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=14913">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=14913&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_32" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum696039" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=45336&page=1#pid696039', '话题链接已经复制到剪贴板')">33楼</strong>
													<em onclick="$('postmessage_696039').className='t_bigfont'">大</em>							<em onclick="$('postmessage_696039').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_696039').className='t_smallfont'">小</em>												发表于 2010-6-21 20:21&nbsp;																					<a href="viewthread.php?tid=45336&amp;page=1&amp;authorid=14913" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_32"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_32"></div><div id="ad_thread4_32"></div>
						
						
																											<div id="postmessage_696039" class="t_msgfont">tor的速度还是太慢</div>

							
							
							
							
															<div id="post_rate_div_696039"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo696039_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=14913" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=45336&amp;repquote=696039&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 696039)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_32"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid700724" summary="pid700724" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=16384" target="_blank" id="userinfo700724" class="dropmenu" onmouseover="showMenu(this.id)">zzwz</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=16384">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=16384&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_33" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum700724" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=45336&page=1#pid700724', '话题链接已经复制到剪贴板')">34楼</strong>
													<em onclick="$('postmessage_700724').className='t_bigfont'">大</em>							<em onclick="$('postmessage_700724').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_700724').className='t_smallfont'">小</em>												发表于 2010-6-24 10:23&nbsp;																					<a href="viewthread.php?tid=45336&amp;page=1&amp;authorid=16384" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_33"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_33"></div><div id="ad_thread4_33"></div>
						
						
																											<div id="postmessage_700724" class="t_msgfont">多谢帮助。。。哈哈&nbsp;&nbsp;谢谢</div>

							
							
							
							
															<div id="post_rate_div_700724"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo700724_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=16384" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=45336&amp;repquote=700724&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 700724)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_33"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid700975" summary="pid700975" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=11230" target="_blank" id="userinfo700975" class="dropmenu" onmouseover="showMenu(this.id)">耶亡尚</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">非不明真相的群众</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=11230">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=11230&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_34" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum700975" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=45336&page=1#pid700975', '话题链接已经复制到剪贴板')">35楼</strong>
													<em onclick="$('postmessage_700975').className='t_bigfont'">大</em>							<em onclick="$('postmessage_700975').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_700975').className='t_smallfont'">小</em>												发表于 2010-6-24 11:59&nbsp;																					<a href="viewthread.php?tid=45336&amp;page=1&amp;authorid=11230" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_34"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_34"></div><div id="ad_thread4_34"></div>
						
						
																											<div id="postmessage_700975" class="t_msgfont">早就不能用了，楼主人才</div>

							
							
							
							
															<div id="post_rate_div_700975"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo700975_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=11230" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=45336&amp;repquote=700975&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 700975)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_34"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid737711" summary="pid737711" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=11493" target="_blank" id="userinfo737711" class="dropmenu" onmouseover="showMenu(this.id)">gzlxd</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">Twitter/@gzlxd</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=11493">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=11493&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_35" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum737711" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=45336&page=1#pid737711', '话题链接已经复制到剪贴板')">36楼</strong>
													<em onclick="$('postmessage_737711').className='t_bigfont'">大</em>							<em onclick="$('postmessage_737711').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_737711').className='t_smallfont'">小</em>												发表于 2010-7-13 18:17&nbsp;																					<a href="viewthread.php?tid=45336&amp;page=1&amp;authorid=11493" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_35"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_35"></div><div id="ad_thread4_35"></div>
						
						
																											<div id="postmessage_737711" class="t_msgfont">用不了TOR的请看此贴</div>

							
							
							
							
															<div id="post_rate_div_737711"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo737711_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=11493" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=45336&amp;repquote=737711&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 737711)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_35"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid758757" summary="pid758757" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 <a name="lastpost"></a>					<cite>											<a href="space.php?uid=4534" target="_blank" id="userinfo758757" class="dropmenu" onmouseover="showMenu(this.id)">123ddw</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">逼事球办</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=4534">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=4534&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_36" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum758757" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=45336&page=1#pid758757', '话题链接已经复制到剪贴板')">37楼</strong>
													<em onclick="$('postmessage_758757').className='t_bigfont'">大</em>							<em onclick="$('postmessage_758757').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_758757').className='t_smallfont'">小</em>												发表于 2010-7-26 00:05&nbsp;																					<a href="viewthread.php?tid=45336&amp;page=1&amp;authorid=4534" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_36"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_36"></div><div id="ad_thread4_36"></div>
						
						
																											<div id="postmessage_758757" class="t_msgfont">牛X</div>

							
							
							
							
															<div id="post_rate_div_758757"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo758757_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=4534" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=45336&amp;repquote=758757&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 758757)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_36"></div>				</div>
			</td>
		</tr>
		</table>
		</div>
</form>





<div class="pages_btns">
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=45336&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=45336&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
				<span class="postbtn" id="newspecialtmp" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=45336&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

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

	<form method="post" id="postform" action="post.php?action=reply&amp;fid=26&amp;tid=45336&amp;extra=&amp;replysubmit=yes" onSubmit="return validate(this)">
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
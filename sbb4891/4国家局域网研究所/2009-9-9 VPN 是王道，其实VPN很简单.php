<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<title>VPN 是王道，其实VPN很简单 - 国家局域网研究所 -  1984bbs.com </title>
<meta name="keywords" content="" />
<meta name="MSSmartTagsPreventParsing" content="True" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<link rel="archives" title="1984bbs.com" href="https://1984bbs.com/archiver/" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_viewthread.css" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_common.css" />
<script type="text/javascript">
	var discuz_uid = 13019;var IMGDIR = 'images/default';var attackevasive = '0';var gid = 0;var STYLEID = '1';
	gid = parseInt('3');var fid = parseInt('26');var tid = parseInt('21749');
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
			<p><a href="index.php" id="forumlist" onmouseover="showMenu(this.id)" class="dropmenu">1984bbs.com</a> &raquo; <a href="forumdisplay.php?fid=26">国家局域网研究所</a> &raquo; VPN 是王道，其实VPN很简单</p>
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
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=21749&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=21749&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
				<span class="postbtn" id="newspecial" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=21749&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

	<ul class="popupmenu_popup newspecialmenu" id="newspecial_menu" style="display: none">
		<li><a href="post.php?action=newthread&amp;fid=26&amp;extra=">发新话题</a></li>
		<li class="poll"><a href="post.php?action=newthread&amp;fid=26&amp;extra=&amp;special=1">发布投票</a></li>													</ul>

<form method="post" name="modactions">
	<input type="hidden" name="formhash" value="823c9fa2" />
	<div class="mainbox viewthread">
		<span class="headactions">
					<a href="my.php?item=favorites&amp;tid=21749" id="ajax_favorite" onclick="ajaxmenu(event, this.id, 3000, 0)">收藏</a>
			<a href="my.php?item=subscriptions&amp;subadd=21749" id="ajax_subscription" onclick="ajaxmenu(event, this.id, 3000, null, 0)">订阅</a>
			<a href="misc.php?action=emailfriend&amp;tid=21749" id="emailfriend" onclick="ajaxmenu(event, this.id, 9000000, null, 0)">推荐</a>
				<a href="viewthread.php?action=printable&amp;tid=21749" target="_blank" class="notabs">打印</a>
				</span>
		<h1>VPN 是王道，其实VPN很简单		</h1>
							<table id="pid233504" summary="pid233504" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6375" target="_blank" id="userinfo233504" class="dropmenu" onmouseover="showMenu(this.id)">zsfzxxx</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">你知道什么是潮吹吗</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6375">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6375&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_0" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum233504" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=21749&page=1#pid233504', '话题链接已经复制到剪贴板')">1楼</strong>
													<em onclick="$('postmessage_233504').className='t_bigfont'">大</em>							<em onclick="$('postmessage_233504').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_233504').className='t_smallfont'">小</em>												发表于 2009-9-9 15:31&nbsp;																					<a href="viewthread.php?tid=21749&amp;page=1&amp;authorid=6375" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_0"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_0"></div><div id="ad_thread4_0"></div>
													<h2>VPN 是王道，其实VPN很简单</h2>
						
						
																											<div id="postmessage_233504" class="t_msgfont">免费高速简单易用加密无需客户端的VPN<br />
比用XX门放心<br />
<br />
<a href="http://www.ebecn.com/viewthread.php?tid=55410&amp;extra=page%3D2" target="_blank">http://www.ebecn.com/viewthread.php?tid=55410&amp;extra=page%3D2</a><br />
<br />
<br />
首先登陆<a href="http://www.itshidden.com" target="_blank">www.itshidden.com</a>，然后点击上方的“Free Signup”，接着点击“Free”进入注册页面，也可以直接点击这里进入注册页面。在注册页面填上你的用户名，邮箱和密码，然后选上“I accept the terms and condition.”再点击“Register”提交。<br />
<br />
因为itshidden.com没有专门的VPN登录器，所以我们要自行设置下<br />
<br />
Windows7<br />
<br />
<br />
打开网络和共享中心，然后点击“设置新的连接或网络”，选择“连接到工作区”。<br />
<br />
然后选择创建一个新连接。<br />
<br />
选择“使用我的Internet连接（VPN）”。<br />
<br />
在“Interner地址”处填上vpn.itshidden.com，名称随便。<br />
<br />
用户名和密码就填你注册时候的Username和Password。<br />
<br />
点击“连接”即可通过itshidden.com的VPN上网了。<br />
<br />
XP下的设置步骤，控制面板—网络连接—创建一个新的连接—连接到我的工作场所的网络—虚拟专用网络连接—公司名随便填—填上vpn.itshidden.com—创建快捷方式—然后拨号就行了<br />
<br />
<br />
查询下现在的IP，到美国了。可以自己设置加密<br />
以上</div>

							
							
							
							
															<div id="post_rate_div_233504"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo233504_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=6375" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=21749&amp;repquote=233504&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 233504)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_0"></div>				</div>
			</td>
		</tr>
		</table>
		</div><div class="ad_column" id="ad_interthread"><a href="/viewthread.php?tid=54699" target="_blank" style="color:red;">1984bbs是一个非营利项目，它需要您的捐助！</font></a>		</div>
	<div class="mainbox viewthread">
			<table id="pid233632" summary="pid233632" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8351" target="_blank" id="userinfo233632" class="dropmenu" onmouseover="showMenu(this.id)">isonomy</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8351">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8351&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_1" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum233632" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=21749&page=1#pid233632', '话题链接已经复制到剪贴板')">2楼</strong>
													<em onclick="$('postmessage_233632').className='t_bigfont'">大</em>							<em onclick="$('postmessage_233632').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_233632').className='t_smallfont'">小</em>												发表于 2009-9-9 16:41&nbsp;																					<a href="viewthread.php?tid=21749&amp;page=1&amp;authorid=8351" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_1"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_1"></div><div id="ad_thread4_1"></div>
						
						
																											<div id="postmessage_233632" class="t_msgfont">是个好东东，但用的人多了，怕是要被GFW了</div>

							
							
							
							
															<div id="post_rate_div_233632"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo233632_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=8351" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=21749&amp;repquote=233632&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 233632)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_1"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid233716" summary="pid233716" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=3195" target="_blank" id="userinfo233716" class="dropmenu" onmouseover="showMenu(this.id)">dlb2825</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=3195">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=3195&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_2" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum233716" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=21749&page=1#pid233716', '话题链接已经复制到剪贴板')">3楼</strong>
													<em onclick="$('postmessage_233716').className='t_bigfont'">大</em>							<em onclick="$('postmessage_233716').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_233716').className='t_smallfont'">小</em>												发表于 2009-9-9 17:39&nbsp;																					<a href="viewthread.php?tid=21749&amp;page=1&amp;authorid=3195" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_2"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_2"></div><div id="ad_thread4_2"></div>
						
						
																											<div id="postmessage_233716" class="t_msgfont">mark</div>

							
							
							
							
															<div id="post_rate_div_233716"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo233716_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=3195" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=21749&amp;repquote=233716&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 233716)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_2"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid233725" summary="pid233725" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8144" target="_blank" id="userinfo233725" class="dropmenu" onmouseover="showMenu(this.id)">ktzkcn</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">新话社特邀评论员,不发帖只回复</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8144">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8144&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_3" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum233725" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=21749&page=1#pid233725', '话题链接已经复制到剪贴板')">4楼</strong>
													<em onclick="$('postmessage_233725').className='t_bigfont'">大</em>							<em onclick="$('postmessage_233725').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_233725').className='t_smallfont'">小</em>												发表于 2009-9-9 17:47&nbsp;																					<a href="viewthread.php?tid=21749&amp;page=1&amp;authorid=8144" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_3"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_3"></div><div id="ad_thread4_3"></div>
						
						
																											<div id="postmessage_233725" class="t_msgfont">用了，爽！</div>

							
							
							
							
															<div id="post_rate_div_233725"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo233725_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=8144" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=21749&amp;repquote=233725&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 233725)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_3"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid233786" summary="pid233786" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8016" target="_blank" id="userinfo233786" class="dropmenu" onmouseover="showMenu(this.id)">路边社特约记者</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">心中有佛看谁都像佛,心中有狗屎看谁都像狗屎,可是后来我发现我看谁都像BL...</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8016">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8016&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_4" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum233786" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=21749&page=1#pid233786', '话题链接已经复制到剪贴板')">5楼</strong>
													<em onclick="$('postmessage_233786').className='t_bigfont'">大</em>							<em onclick="$('postmessage_233786').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_233786').className='t_smallfont'">小</em>												发表于 2009-9-9 18:24&nbsp;																					<a href="viewthread.php?tid=21749&amp;page=1&amp;authorid=8016" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_4"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_4"></div><div id="ad_thread4_4"></div>
						
						
																											<div id="postmessage_233786" class="t_msgfont">VPN太麻烦了&nbsp; &nbsp; 用它就不能同时干别的事了</div>

							
							
							
							
															<div id="post_rate_div_233786"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo233786_menu" style="display: none;">
										<dl></dl>
											<p><a href="https://bear.1984blog.com/" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=8016" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=21749&amp;repquote=233786&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 233786)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_4"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid233842" summary="pid233842" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=464" target="_blank" id="userinfo233842" class="dropmenu" onmouseover="showMenu(this.id)">Phillip</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">路边社特邀围观群众</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=464">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=464&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_5" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum233842" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=21749&page=1#pid233842', '话题链接已经复制到剪贴板')">6楼</strong>
													<em onclick="$('postmessage_233842').className='t_bigfont'">大</em>							<em onclick="$('postmessage_233842').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_233842').className='t_smallfont'">小</em>												发表于 2009-9-9 19:01&nbsp;																					<a href="viewthread.php?tid=21749&amp;page=1&amp;authorid=464" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_5"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_5"></div><div id="ad_thread4_5"></div>
						
						
																											<div id="postmessage_233842" class="t_msgfont">我经常开着emule下东西, VPN转换网络环境有点碍事</div>

							
							
							
							
															<div id="post_rate_div_233842"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo233842_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=464" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=21749&amp;repquote=233842&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 233842)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_5"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid234137" summary="pid234137" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7821" target="_blank" id="userinfo234137" class="dropmenu" onmouseover="showMenu(this.id)">歪歪打酱油</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7821">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7821&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_6" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum234137" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=21749&page=1#pid234137', '话题链接已经复制到剪贴板')">7楼</strong>
													<em onclick="$('postmessage_234137').className='t_bigfont'">大</em>							<em onclick="$('postmessage_234137').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_234137').className='t_smallfont'">小</em>												发表于 2009-9-9 23:13&nbsp;																					<a href="viewthread.php?tid=21749&amp;page=1&amp;authorid=7821" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_6"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_6"></div><div id="ad_thread4_6"></div>
						
						
																											<div id="postmessage_234137" class="t_msgfont">免費的東西用的人多了肯定速度下來的,服務器還在美國.</div>

							
							
							
							
															<div id="post_rate_div_234137"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo234137_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=7821" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=21749&amp;repquote=234137&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 234137)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_6"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid234569" summary="pid234569" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6449" target="_blank" id="userinfo234569" class="dropmenu" onmouseover="showMenu(this.id)">倪秋</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">颂赞和诅咒从一个口里出来，我的兄弟们，这是不应当的。</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6449">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6449&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_7" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum234569" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=21749&page=1#pid234569', '话题链接已经复制到剪贴板')">8楼</strong>
													<em onclick="$('postmessage_234569').className='t_bigfont'">大</em>							<em onclick="$('postmessage_234569').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_234569').className='t_smallfont'">小</em>												发表于 2009-9-10 10:06&nbsp;																					<a href="viewthread.php?tid=21749&amp;page=1&amp;authorid=6449" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_7"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_7"></div><div id="ad_thread4_7"></div>
						
						
																											<div id="postmessage_234569" class="t_msgfont">VPN影响MSN\QQ\EMULE的使用，MSN和QQ掉个不停~EMULE、RF速度上不去~</div>

							
							
							
							
															<div id="post_rate_div_234569"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo234569_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=6449" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=21749&amp;repquote=234569&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 234569)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_7"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid234586" summary="pid234586" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8493" target="_blank" id="userinfo234586" class="dropmenu" onmouseover="showMenu(this.id)">Key</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">FuckBinxing</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8493">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8493&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_8" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum234586" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=21749&page=1#pid234586', '话题链接已经复制到剪贴板')">9楼</strong>
													<em onclick="$('postmessage_234586').className='t_bigfont'">大</em>							<em onclick="$('postmessage_234586').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_234586').className='t_smallfont'">小</em>												发表于 2009-9-10 10:11&nbsp;																					<a href="viewthread.php?tid=21749&amp;page=1&amp;authorid=8493" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_8"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_8"></div><div id="ad_thread4_8"></div>
						
						
																											<div id="postmessage_234586" class="t_msgfont">个人认为目前最佳翻墙方式为 SSH Tunnel……<br />
目前我用的是一年 12 刀的，IPv4/IPv6 双栈，很稳定，当然附带个人主页服务，需要的自己找找</div>

							
							
							
							
															<div id="post_rate_div_234586"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo234586_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=8493" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=21749&amp;repquote=234586&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 234586)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_8"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid234860" summary="pid234860" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2297" target="_blank" id="userinfo234860" class="dropmenu" onmouseover="showMenu(this.id)">阴影之剑</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2297">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2297&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_9" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum234860" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=21749&page=1#pid234860', '话题链接已经复制到剪贴板')">10楼</strong>
													<em onclick="$('postmessage_234860').className='t_bigfont'">大</em>							<em onclick="$('postmessage_234860').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_234860').className='t_smallfont'">小</em>												发表于 2009-9-10 13:00&nbsp;																					<a href="viewthread.php?tid=21749&amp;page=1&amp;authorid=2297" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_9"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_9"></div><div id="ad_thread4_9"></div>
						
						
																											<div id="postmessage_234860" class="t_msgfont">免费VPN的主要功能是看看网页</div>

							
							
							
							
															<div id="post_rate_div_234860"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo234860_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=2297" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=21749&amp;repquote=234860&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 234860)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_9"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid244184" summary="pid244184" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8520" target="_blank" id="userinfo244184" class="dropmenu" onmouseover="showMenu(this.id)">小猪熊</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8520">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8520&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_10" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum244184" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=21749&page=1#pid244184', '话题链接已经复制到剪贴板')">11楼</strong>
													<em onclick="$('postmessage_244184').className='t_bigfont'">大</em>							<em onclick="$('postmessage_244184').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_244184').className='t_smallfont'">小</em>												发表于 2009-9-16 19:47&nbsp;																					<a href="viewthread.php?tid=21749&amp;page=1&amp;authorid=8520" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_10"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_10"></div><div id="ad_thread4_10"></div>
						
						
																											<div id="postmessage_244184" class="t_msgfont">我博客也介绍过这个VPN&nbsp; &nbsp; 我这里还给出了详细的使用说明呢&nbsp;&nbsp;<br />
<br />
<a href="http://www.zhukun.net/archives/2455" target="_blank">http://www.zhukun.net/archives/2455</a></div>

							
							
							
							
															<div id="post_rate_div_244184"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo244184_menu" style="display: none;">
										<div class="imicons">
													<a target='_blank' href='http://settings.messenger.live.com/Conversation/IMMe.aspx?invitee=8964@fuck.com&mkt=zh-cn'><img style='border-style: none;' src='http://messenger.services.live.com/users/8964@fuck.com/presenceimage?mkt=zh-cn' width='16' height='16' /></a>
												<a href="http://wpa.qq.com/msgrd?V=1&amp;Uin=8964520&amp;Site=1984bbs.com&amp;Menu=yes" target="_blank"><img src="images/default/qq.gif" alt="QQ" /></a>																							</div>
										<dl></dl>
											<p><a href="http://www.gov.cn" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=8520" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=21749&amp;repquote=244184&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 244184)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_10"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid244297" summary="pid244297" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=483" target="_blank" id="userinfo244297" class="dropmenu" onmouseover="showMenu(this.id)">huaxlee</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=483">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=483&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_11" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum244297" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=21749&page=1#pid244297', '话题链接已经复制到剪贴板')">12楼</strong>
													<em onclick="$('postmessage_244297').className='t_bigfont'">大</em>							<em onclick="$('postmessage_244297').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_244297').className='t_smallfont'">小</em>												发表于 2009-9-16 21:09&nbsp;																					<a href="viewthread.php?tid=21749&amp;page=1&amp;authorid=483" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_11"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_11"></div><div id="ad_thread4_11"></div>
						
						
																											<div id="postmessage_244297" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>Key</i> 于 2009-9-10 10:11 发表 <a href="http://1984bbs.com/redirect.php?goto=findpost&amp;pid=234586&amp;ptid=21749" target="_blank"><img src="http://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
个人认为目前最佳翻墙方式为 SSH Tunnel……<br />
目前我用的是一年 12 刀的，IPv4/IPv6 双栈，很稳定，当然附带个人主页服务，需要的自己找找 </blockquote></div>我也用SSH。几个人全租个 dreamhost。</div>

							
							
							
							
															<div id="post_rate_div_244297"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo244297_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=483" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=21749&amp;repquote=244297&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 244297)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_11"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid244765" summary="pid244765" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8442" target="_blank" id="userinfo244765" class="dropmenu" onmouseover="showMenu(this.id)">rogerlan</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">寻找中国</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8442">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8442&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_12" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum244765" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=21749&page=1#pid244765', '话题链接已经复制到剪贴板')">13楼</strong>
													<em onclick="$('postmessage_244765').className='t_bigfont'">大</em>							<em onclick="$('postmessage_244765').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_244765').className='t_smallfont'">小</em>												发表于 2009-9-17 10:02&nbsp;																					<a href="viewthread.php?tid=21749&amp;page=1&amp;authorid=8442" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_12"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_12"></div><div id="ad_thread4_12"></div>
						
						
																											<div id="postmessage_244765" class="t_msgfont">請多介紹一下SSH，國外服務器如何付費呢？</div>

							
							
							
							
															<div id="post_rate_div_244765"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo244765_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://www.findingchina.com" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=8442" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=21749&amp;repquote=244765&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 244765)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_12"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid245751" summary="pid245751" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7076" target="_blank" id="userinfo245751" class="dropmenu" onmouseover="showMenu(this.id)">BlackDream</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7076">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7076&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_13" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum245751" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=21749&page=1#pid245751', '话题链接已经复制到剪贴板')">14楼</strong>
													<em onclick="$('postmessage_245751').className='t_bigfont'">大</em>							<em onclick="$('postmessage_245751').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_245751').className='t_smallfont'">小</em>												发表于 2009-9-17 19:18&nbsp;																					<a href="viewthread.php?tid=21749&amp;page=1&amp;authorid=7076" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_13"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_13"></div><div id="ad_thread4_13"></div>
													<h2>回复 9楼 Key 的话题</h2>
						
						
																											<div id="postmessage_245751" class="t_msgfont">哪家的服务，说一下吗，感觉很便宜啊！</div>

							
							
							
							
															<div id="post_rate_div_245751"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo245751_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=7076" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=21749&amp;repquote=245751&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 245751)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_13"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid245982" summary="pid245982" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=5779" target="_blank" id="userinfo245982" class="dropmenu" onmouseover="showMenu(this.id)">路上拾荒</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=5779">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=5779&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_14" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum245982" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=21749&page=1#pid245982', '话题链接已经复制到剪贴板')">15楼</strong>
													<em onclick="$('postmessage_245982').className='t_bigfont'">大</em>							<em onclick="$('postmessage_245982').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_245982').className='t_smallfont'">小</em>												发表于 2009-9-17 22:07&nbsp;																					<a href="viewthread.php?tid=21749&amp;page=1&amp;authorid=5779" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_14"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_14"></div><div id="ad_thread4_14"></div>
						
						
																											<div id="postmessage_245982" class="t_msgfont">原来一直用tor的，目前很不稳定，改用jap了，速度快。</div>

							
							
							
							
															<div id="post_rate_div_245982"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo245982_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=5779" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=21749&amp;repquote=245982&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 245982)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_14"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid255600" summary="pid255600" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8307" target="_blank" id="userinfo255600" class="dropmenu" onmouseover="showMenu(this.id)">醉酒的马儿</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">自由无职业者</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8307">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8307&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_15" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum255600" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=21749&page=1#pid255600', '话题链接已经复制到剪贴板')">16楼</strong>
													<em onclick="$('postmessage_255600').className='t_bigfont'">大</em>							<em onclick="$('postmessage_255600').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_255600').className='t_smallfont'">小</em>												发表于 2009-9-24 16:24&nbsp;																					<a href="viewthread.php?tid=21749&amp;page=1&amp;authorid=8307" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_15"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_15"></div><div id="ad_thread4_15"></div>
						
						
																											<div id="postmessage_255600" class="t_msgfont">报告：又被和谐了。</div>

							
							
							
							
															<div id="post_rate_div_255600"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo255600_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=8307" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=21749&amp;repquote=255600&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 255600)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_15"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid458733" summary="pid458733" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6869" target="_blank" id="userinfo458733" class="dropmenu" onmouseover="showMenu(this.id)">lclok</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6869">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6869&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_16" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum458733" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=21749&page=1#pid458733', '话题链接已经复制到剪贴板')">17楼</strong>
													<em onclick="$('postmessage_458733').className='t_bigfont'">大</em>							<em onclick="$('postmessage_458733').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_458733').className='t_smallfont'">小</em>												发表于 2010-1-30 16:14&nbsp;																					<a href="viewthread.php?tid=21749&amp;page=1&amp;authorid=6869" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_16"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_16"></div><div id="ad_thread4_16"></div>
						
						
																											<div id="postmessage_458733" class="t_msgfont">avast报告网站有病毒。</div>

							
							
							
							
															<div id="post_rate_div_458733"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo458733_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=6869" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=21749&amp;repquote=458733&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 458733)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_16"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid460073" summary="pid460073" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 <a name="lastpost"></a>					<cite>											<a href="space.php?uid=5404" target="_blank" id="userinfo460073" class="dropmenu" onmouseover="showMenu(this.id)">江南的雨季</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">My Blog:Jitler.Com  Twitter:@yxzjn</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=5404">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=5404&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_17" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum460073" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=21749&page=1#pid460073', '话题链接已经复制到剪贴板')">18楼</strong>
													<em onclick="$('postmessage_460073').className='t_bigfont'">大</em>							<em onclick="$('postmessage_460073').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_460073').className='t_smallfont'">小</em>												发表于 2010-1-31 19:33&nbsp;																					<a href="viewthread.php?tid=21749&amp;page=1&amp;authorid=5404" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_17"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_17"></div><div id="ad_thread4_17"></div>
						
						
																											<div id="postmessage_460073" class="t_msgfont">mark</div>

							
							
							
							
															<div id="post_rate_div_460073"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo460073_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://jitler.com" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=5404" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=21749&amp;repquote=460073&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 460073)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_17"></div>				</div>
			</td>
		</tr>
		</table>
		</div>
</form>





<div class="pages_btns">
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=21749&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=21749&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
				<span class="postbtn" id="newspecialtmp" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=21749&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

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

	<form method="post" id="postform" action="post.php?action=reply&amp;fid=26&amp;tid=21749&amp;extra=&amp;replysubmit=yes" onSubmit="return validate(this)">
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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<title>大家可能有所忽略的翻墙相关的安全问题 - 国家局域网研究所 -  1984bbs.com </title>
<meta name="keywords" content="" />
<meta name="MSSmartTagsPreventParsing" content="True" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<link rel="archives" title="1984bbs.com" href="https://1984bbs.com/archiver/" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_viewthread.css" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_common.css" />
<script type="text/javascript">
	var discuz_uid = 13019;var IMGDIR = 'images/default';var attackevasive = '0';var gid = 0;var STYLEID = '1';
	gid = parseInt('3');var fid = parseInt('26');var tid = parseInt('11548');
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
			<p><a href="index.php" id="forumlist" onmouseover="showMenu(this.id)" class="dropmenu">1984bbs.com</a> &raquo; <a href="forumdisplay.php?fid=26">国家局域网研究所</a> &raquo; 大家可能有所忽略的翻墙相关的安全问题</p>
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
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=11548&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=11548&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
				<span class="postbtn" id="newspecial" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=11548&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

	<ul class="popupmenu_popup newspecialmenu" id="newspecial_menu" style="display: none">
		<li><a href="post.php?action=newthread&amp;fid=26&amp;extra=">发新话题</a></li>
		<li class="poll"><a href="post.php?action=newthread&amp;fid=26&amp;extra=&amp;special=1">发布投票</a></li>													</ul>

<form method="post" name="modactions">
	<input type="hidden" name="formhash" value="823c9fa2" />
	<div class="mainbox viewthread">
		<span class="headactions">
					<a href="my.php?item=favorites&amp;tid=11548" id="ajax_favorite" onclick="ajaxmenu(event, this.id, 3000, 0)">收藏</a>
			<a href="my.php?item=subscriptions&amp;subadd=11548" id="ajax_subscription" onclick="ajaxmenu(event, this.id, 3000, null, 0)">订阅</a>
			<a href="misc.php?action=emailfriend&amp;tid=11548" id="emailfriend" onclick="ajaxmenu(event, this.id, 9000000, null, 0)">推荐</a>
				<a href="viewthread.php?action=printable&amp;tid=11548" target="_blank" class="notabs">打印</a>
				</span>
		<h1>大家可能有所忽略的翻墙相关的安全问题		</h1>
							<table id="pid99113" summary="pid99113" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=4285" target="_blank" id="userinfo99113" class="dropmenu" onmouseover="showMenu(this.id)">wowo_steve</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">披着羊皮的喔喔狼  @wowo_steve</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=4285">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=4285&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_0" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum99113" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=11548&page=1#pid99113', '话题链接已经复制到剪贴板')">1楼</strong>
													<em onclick="$('postmessage_99113').className='t_bigfont'">大</em>							<em onclick="$('postmessage_99113').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_99113').className='t_smallfont'">小</em>												发表于 2009-5-21 22:27&nbsp;																					<a href="viewthread.php?tid=11548&amp;page=1&amp;authorid=4285" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_0"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_0"></div><div id="ad_thread4_0"></div>
													<h2>大家可能有所忽略的翻墙相关的安全问题</h2>
						
						
																											<div id="postmessage_99113" class="t_msgfont">我希望各位特别注意这个问题，哪怕是用Mac或者Linux的同学也不要忽视。先讲个小故事：Mac OS X提供了一个FileVault功能，可以把每个用户的私人文件夹部分进行整体加密，别人即使有超级管理员权限也动不得。然而我们的CGX同学，存了那么多定时炸弹般的艳照，却什么保护都不做就把自己的PowerBook交给修理店了。他的下场我们大家都很清楚。再好的防盗门，你至少也要把门关上才行吧。<br />
<br />
一般而言，国产的Win平台软件都多少充斥着后门程序。它们多数是为了下载广告，偷偷进行P2P分享以提高BT速度等等，但是在贵国政策的要求下，难以保证这些后门不被利用；即使商家没有主动配合，这些后门被GuoAn被动利用的可能性也是存在的。所以，大家要始终留个心眼，你可以考虑用Pidgin这种集成通讯软件代替QQ、MSN，可以考虑用Foobar代替千千静听，用uTorrent而不是BitComet来进行BT。总之，那些开源软件的安全性相对要有保障的多。<br />
<br />
说到这里，就不得不提一下聊天软件的安全问题。在我们常用的聊天软件中，GTalk和MSN默认是不会加密的。很多公司要求员工用MSN，正是因为这样可以监督员工的对话，追踪公司商业信息是否被泄露。GTalk虽然默认不带加密，但是可以选择很多种加密插件，并且在Pidgin、Adium（Mac）这样的集成聊天软件中已经准备好了一些加密方式。<br />
<br />
QQ的聊天信息虽然是加密的，但是在服务器端有敏感字过滤程序（甚至过滤少数民族文字），不过这只是妨碍聊天，还不至于影响安全。QQ群被认为是有背景程序的，在QQ群中谈论关键字，据说会触发后门并将谈话内容上载，这就影响安全了。<br />
<br />
Skype的加密是没有问题的，但是，中国的Tom Skype有后门程序，将文字信息中出现敏感字的账户信息提交到专门的服务器共GuoAn审查，此事曾遭一美国黑客破解并公布。所以，安全的做法是下载Skype原版程序，而绝不能用Tom版。一般人直接访问Skype网站，会被强行转到Tom Skype的页面，不过如果你直接访问Skype原版的下载页面，就不会遭到劫持。该页面是：<a href="http://www.skype.com/download/" target="_blank">http://www.skype.com/download/</a> ，在该页面下你也容易找到Mac版的下载。<br />
<br />
访问Google Reader和Gmail的时候，尽量使用https连接，不要用http。其它支持https的网站，例如Twitter、Wordpress（在没封的间隙）等，也尽量请用https登陆。<br />
<br />
Tor的安全性还是不错的，虽然有GuoAn专门搭建假节点，还有人发现一种可能的数据来源分析方式，然而总体的安全性还是很高的，而且GuoAn未必有如此精力对Tor网络投入大量资源。大家可以用Tor的图形化软件包Vidalia套装里的工具（此软件包适合一般人使用，但地址被墙，<a href="https://www.torproject.org/vidalia/" target="_blank">https://www.torproject.org/vidalia/</a>），把北京的那个Tor服务器给删了了事。就我所知，国内有假Tor节点嫌疑的就北京的一个，你可以在Vidalia的服务器世界地图里面看到，那个节点的连续运行时间明显很长很稳定，就跟GuoAn叔叔不会去找它麻烦一样，其身份昭然若揭。我以前遇见过头一次删掉它，第二次登陆又重新连上这个SB服务器的bug，还请专家详解如何操作比较妥当。<br />
<br />
有一个翻墙软件和Tor的机理很类似，叫Your Freedom，跨平台的。大家google它的主页，看看软件介绍就好用了，我不多说。加密性和稳定性略优于Tor。这东西免费使用的速度上限是64K，其实比Tor多数时候还快点的说...好吧它们都似乎慢了点。<br />
<br />
少用WU界、自由门这些软件。我绝没有说他们不NB的意思，然而它们太受关注了，GuoAn们天天分析这些软件的特征码，安全性和其它翻墙方式相比反而变差了不少。也不是说就不能用了，但最好不要拿来当主力翻墙工具。没边和自由门从性质上来说，属于VPN类的翻墙软件，这种机理的软件我推荐AncherFree出品的Hotspot Shield。有人说Hotspot老是有广告，但是：那个广告可以用Adblock这种东西（包括Safari Adblock）给屏蔽掉；如果你用Opera浏览网页，更是不会显示的。<br />
<br />
最后，Mac用户们请注意，在系统偏好设置的安全设置里，你可以在防火墙中选择“秘密行动”模式，此模式使得对方连你的电脑是否存在的信息都无法获得，值得大家翻墙时使用。不知道Win和Linux有无类似选项，请牛人补充。<br />
<br />
PS：小组啥时候流行替换关键字了？WU界同学泪流满面。<br />
<br />
[<i> 本帖最后由 wowo_steve 于 2009-5-21 22:30 编辑 </i>]</div>

							
							
							
							
															<div id="post_rate_div_99113"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo99113_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=4285" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=11548&amp;repquote=99113&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 99113)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_0"></div>				</div>
			</td>
		</tr>
		</table>
		</div><div class="ad_column" id="ad_interthread"><a href="/viewthread.php?tid=54699" target="_blank" style="color:red;">1984bbs是一个非营利项目，它需要您的捐助！</font></a>		</div>
	<div class="mainbox viewthread">
			<table id="pid99493" summary="pid99493" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=5404" target="_blank" id="userinfo99493" class="dropmenu" onmouseover="showMenu(this.id)">江南的雨季</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">My Blog:Jitler.Com  Twitter:@yxzjn</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=5404">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=5404&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_1" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum99493" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=11548&page=1#pid99493', '话题链接已经复制到剪贴板')">2楼</strong>
													<em onclick="$('postmessage_99493').className='t_bigfont'">大</em>							<em onclick="$('postmessage_99493').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_99493').className='t_smallfont'">小</em>												发表于 2009-5-22 12:47&nbsp;																					<a href="viewthread.php?tid=11548&amp;page=1&amp;authorid=5404" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_1"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_1"></div><div id="ad_thread4_1"></div>
						
						
																											<div id="postmessage_99493" class="t_msgfont">Pidgin中文版安全么？</div>

							
							
							
							
															<div id="post_rate_div_99493"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo99493_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://jitler.com" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=5404" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=11548&amp;repquote=99493&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 99493)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_1"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid99552" summary="pid99552" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6007" target="_blank" id="userinfo99552" class="dropmenu" onmouseover="showMenu(this.id)">hexiecollege</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">北国</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6007">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6007&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_2" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum99552" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=11548&page=1#pid99552', '话题链接已经复制到剪贴板')">3楼</strong>
													<em onclick="$('postmessage_99552').className='t_bigfont'">大</em>							<em onclick="$('postmessage_99552').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_99552').className='t_smallfont'">小</em>												发表于 2009-5-22 13:44&nbsp;																					<a href="viewthread.php?tid=11548&amp;page=1&amp;authorid=6007" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_2"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_2"></div><div id="ad_thread4_2"></div>
						
						
																											<div id="postmessage_99552" class="t_msgfont">学习了。</div>

							
							
							
							
															<div id="post_rate_div_99552"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo99552_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://hexiecollege.blogspot.com/" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=6007" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=11548&amp;repquote=99552&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 99552)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_2"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid100604" summary="pid100604" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=3022" target="_blank" id="userinfo100604" class="dropmenu" onmouseover="showMenu(this.id)">qdq</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">@qdq</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=3022">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=3022&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_3" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum100604" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=11548&page=1#pid100604', '话题链接已经复制到剪贴板')">4楼</strong>
													<em onclick="$('postmessage_100604').className='t_bigfont'">大</em>							<em onclick="$('postmessage_100604').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_100604').className='t_smallfont'">小</em>												发表于 2009-5-23 20:54&nbsp;																					<a href="viewthread.php?tid=11548&amp;page=1&amp;authorid=3022" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_3"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_3"></div><div id="ad_thread4_3"></div>
						
						
																											<div id="postmessage_100604" class="t_msgfont">收到~</div>

							
							
							
							
															<div id="post_rate_div_100604"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo100604_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=3022" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=11548&amp;repquote=100604&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 100604)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_3"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid100611" summary="pid100611" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2971" target="_blank" id="userinfo100611" class="dropmenu" onmouseover="showMenu(this.id)">luckyray</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">不明真相</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2971">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2971&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_4" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum100611" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=11548&page=1#pid100611', '话题链接已经复制到剪贴板')">5楼</strong>
													<em onclick="$('postmessage_100611').className='t_bigfont'">大</em>							<em onclick="$('postmessage_100611').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_100611').className='t_smallfont'">小</em>												发表于 2009-5-23 21:07&nbsp;																					<a href="viewthread.php?tid=11548&amp;page=1&amp;authorid=2971" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_4"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_4"></div><div id="ad_thread4_4"></div>
						
						
																											<div id="postmessage_100611" class="t_msgfont">可惜别的找不到，也不会用，只会用自由门：（</div>

							
							
							
							
															<div id="post_rate_div_100611"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo100611_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=2971" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=11548&amp;repquote=100611&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 100611)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_4"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid101419" summary="pid101419" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2973" target="_blank" id="userinfo101419" class="dropmenu" onmouseover="showMenu(this.id)">free1989</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">@photobluer</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2973">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2973&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_5" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum101419" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=11548&page=1#pid101419', '话题链接已经复制到剪贴板')">6楼</strong>
													<em onclick="$('postmessage_101419').className='t_bigfont'">大</em>							<em onclick="$('postmessage_101419').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_101419').className='t_smallfont'">小</em>												发表于 2009-5-25 00:11&nbsp;																					<a href="viewthread.php?tid=11548&amp;page=1&amp;authorid=2973" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_5"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_5"></div><div id="ad_thread4_5"></div>
						
						
																											<div id="postmessage_101419" class="t_msgfont">wujie只用过一次，一打开电脑就重启。之后没用这个了。</div>

							
							
							
							
															<div id="post_rate_div_101419"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo101419_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=2973" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=11548&amp;repquote=101419&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 101419)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_5"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid106123" summary="pid106123" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2012" target="_blank" id="userinfo106123" class="dropmenu" onmouseover="showMenu(this.id)">jlxygun</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2012">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2012&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_6" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum106123" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=11548&page=1#pid106123', '话题链接已经复制到剪贴板')">7楼</strong>
													<em onclick="$('postmessage_106123').className='t_bigfont'">大</em>							<em onclick="$('postmessage_106123').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_106123').className='t_smallfont'">小</em>												发表于 2009-5-31 17:53&nbsp;																					<a href="viewthread.php?tid=11548&amp;page=1&amp;authorid=2012" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_6"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_6"></div><div id="ad_thread4_6"></div>
						
						
																											<div id="postmessage_106123" class="t_msgfont">纠正一下，foobar不是开源软件，请看foobar中文网站介绍。<a href="http://www.foobar2000.com.cn/help.aspx#h_88_89" target="_blank">http://www.foobar2000.com.cn/help.aspx#h_88_89</a><br />
<br />
&quot;FB2K是开源软件吗？<br />
FOOBAR2000本身并不是开源软件，但有相当数量的组件遵循BSD许可证（Berkeley Software Distribution license）开源。除了开发团队，一般不能在公开场合获取foobar2000的源代码。<br />
之所以有人认为FB2K开源，是对其“开放的组件体系”的一种误解，任何人被允许获取它的开放组件体系源码来扩展FB2K的功能。&quot;</div>

							
							
							
							
															<div id="post_rate_div_106123"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo106123_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=2012" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=11548&amp;repquote=106123&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 106123)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_6"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid106139" summary="pid106139" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=464" target="_blank" id="userinfo106139" class="dropmenu" onmouseover="showMenu(this.id)">Phillip</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">路边社特邀围观群众</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=464">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=464&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_7" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum106139" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=11548&page=1#pid106139', '话题链接已经复制到剪贴板')">8楼</strong>
													<em onclick="$('postmessage_106139').className='t_bigfont'">大</em>							<em onclick="$('postmessage_106139').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_106139').className='t_smallfont'">小</em>												发表于 2009-5-31 18:04&nbsp;																					<a href="viewthread.php?tid=11548&amp;page=1&amp;authorid=464" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_7"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_7"></div><div id="ad_thread4_7"></div>
						
						
																											<div id="postmessage_106139" class="t_msgfont">那个SKYPE下载页面在不翻墙的状态下仍然会被劫持到tom</div>

							
							
							
							
															<div id="post_rate_div_106139"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo106139_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=464" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=11548&amp;repquote=106139&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 106139)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_7"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid106222" summary="pid106222" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=4285" target="_blank" id="userinfo106222" class="dropmenu" onmouseover="showMenu(this.id)">wowo_steve</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">披着羊皮的喔喔狼  @wowo_steve</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=4285">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=4285&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_8" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum106222" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=11548&page=1#pid106222', '话题链接已经复制到剪贴板')">9楼</strong>
													<em onclick="$('postmessage_106222').className='t_bigfont'">大</em>							<em onclick="$('postmessage_106222').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_106222').className='t_smallfont'">小</em>												发表于 2009-5-31 20:17&nbsp;																					<a href="viewthread.php?tid=11548&amp;page=1&amp;authorid=4285" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_8"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_8"></div><div id="ad_thread4_8"></div>
													<h2>回复 7楼 jlxygun 的话题</h2>
						
						
																											<div id="postmessage_106222" class="t_msgfont">恩，个人对license这个东西比较晕...维基新换的license更是名字长的变态</div>

							
							
							
							
															<div id="post_rate_div_106222"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo106222_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=4285" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=11548&amp;repquote=106222&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 106222)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_8"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid106224" summary="pid106224" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=4285" target="_blank" id="userinfo106224" class="dropmenu" onmouseover="showMenu(this.id)">wowo_steve</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">披着羊皮的喔喔狼  @wowo_steve</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=4285">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=4285&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_9" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum106224" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=11548&page=1#pid106224', '话题链接已经复制到剪贴板')">10楼</strong>
													<em onclick="$('postmessage_106224').className='t_bigfont'">大</em>							<em onclick="$('postmessage_106224').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_106224').className='t_smallfont'">小</em>												发表于 2009-5-31 20:18&nbsp;																					<a href="viewthread.php?tid=11548&amp;page=1&amp;authorid=4285" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_9"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_9"></div><div id="ad_thread4_9"></div>
													<h2>回复 8楼 Phillip 的话题</h2>
						
						
																											<div id="postmessage_106224" class="t_msgfont">试着google一下skype mac版的下载页面，然后从这个页面再点到windows版下载页面，可行否？</div>

							
							
							
							
															<div id="post_rate_div_106224"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo106224_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=4285" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=11548&amp;repquote=106224&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 106224)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_9"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid108210" summary="pid108210" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2238" target="_blank" id="userinfo108210" class="dropmenu" onmouseover="showMenu(this.id)">过客</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2238">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2238&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_10" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum108210" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=11548&page=1#pid108210', '话题链接已经复制到剪贴板')">11楼</strong>
													<em onclick="$('postmessage_108210').className='t_bigfont'">大</em>							<em onclick="$('postmessage_108210').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_108210').className='t_smallfont'">小</em>												发表于 2009-6-2 19:33&nbsp;																					<a href="viewthread.php?tid=11548&amp;page=1&amp;authorid=2238" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_10"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_10"></div><div id="ad_thread4_10"></div>
						
						
																											<div id="postmessage_108210" class="t_msgfont">有点晕。麻烦啊</div>

							
							
							
							
															<div id="post_rate_div_108210"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo108210_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=2238" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=11548&amp;repquote=108210&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 108210)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_10"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid109110" summary="pid109110" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=3811" target="_blank" id="userinfo109110" class="dropmenu" onmouseover="showMenu(this.id)">day7th</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=3811">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=3811&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_11" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum109110" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=11548&page=1#pid109110', '话题链接已经复制到剪贴板')">12楼</strong>
													<em onclick="$('postmessage_109110').className='t_bigfont'">大</em>							<em onclick="$('postmessage_109110').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_109110').className='t_smallfont'">小</em>												发表于 2009-6-3 16:48&nbsp;																					<a href="viewthread.php?tid=11548&amp;page=1&amp;authorid=3811" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_11"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_11"></div><div id="ad_thread4_11"></div>
						
						
																											<div id="postmessage_109110" class="t_msgfont">一般都用firefox+gladder</div>

							
							
							
							
															<div id="post_rate_div_109110"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo109110_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=3811" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=11548&amp;repquote=109110&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 109110)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_11"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid114308" summary="pid114308" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=3904" target="_blank" id="userinfo114308" class="dropmenu" onmouseover="showMenu(this.id)">lts</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=3904">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=3904&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_12" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum114308" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=11548&page=1#pid114308', '话题链接已经复制到剪贴板')">13楼</strong>
													<em onclick="$('postmessage_114308').className='t_bigfont'">大</em>							<em onclick="$('postmessage_114308').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_114308').className='t_smallfont'">小</em>												发表于 2009-6-7 15:55&nbsp;																					<a href="viewthread.php?tid=11548&amp;page=1&amp;authorid=3904" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_12"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_12"></div><div id="ad_thread4_12"></div>
													<h2>回复 8楼 Phillip 的话题</h2>
						
						
																											<div id="postmessage_114308" class="t_msgfont"><a href="http://www.skype.com/download/skype/windows/" target="_blank">http://www.skype.com/download/skype/windows/</a><br />
试试这个</div>

							
							
							
							
															<div id="post_rate_div_114308"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo114308_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=3904" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=11548&amp;repquote=114308&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 114308)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_12"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid116921" summary="pid116921" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2360" target="_blank" id="userinfo116921" class="dropmenu" onmouseover="showMenu(this.id)">liuropot</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">我们是共匪。</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2360">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2360&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_13" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum116921" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=11548&page=1#pid116921', '话题链接已经复制到剪贴板')">14楼</strong>
													<em onclick="$('postmessage_116921').className='t_bigfont'">大</em>							<em onclick="$('postmessage_116921').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_116921').className='t_smallfont'">小</em>												发表于 2009-6-9 21:52&nbsp;																					<a href="viewthread.php?tid=11548&amp;page=1&amp;authorid=2360" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_13"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_13"></div><div id="ad_thread4_13"></div>
						
						
																											<div id="postmessage_116921" class="t_msgfont"><a href="http://code.google.com/p/gappproxy/downloads/list" target="_blank">http://code.google.com/p/gappproxy/downloads/list</a></div>

							
							
							
							
															<div id="post_rate_div_116921"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo116921_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=2360" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=11548&amp;repquote=116921&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 116921)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_13"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid159714" summary="pid159714" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7570" target="_blank" id="userinfo159714" class="dropmenu" onmouseover="showMenu(this.id)">妖娆男</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7570">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7570&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_14" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum159714" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=11548&page=1#pid159714', '话题链接已经复制到剪贴板')">15楼</strong>
													<em onclick="$('postmessage_159714').className='t_bigfont'">大</em>							<em onclick="$('postmessage_159714').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_159714').className='t_smallfont'">小</em>												发表于 2009-7-12 22:35&nbsp;																					<a href="viewthread.php?tid=11548&amp;page=1&amp;authorid=7570" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_14"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_14"></div><div id="ad_thread4_14"></div>
						
						
																											<div id="postmessage_159714" class="t_msgfont">我用的是<br />
\AnchorFreeHotspotShield-v1.14\Hotspot Shield\bin<br />
速度很好<br />
还可看xtube呢</div>

							
							
							
							
															<div id="post_rate_div_159714"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo159714_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=7570" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=11548&amp;repquote=159714&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 159714)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_14"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid159766" summary="pid159766" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=801" target="_blank" id="userinfo159766" class="dropmenu" onmouseover="showMenu(this.id)">Auo</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">一脸迷惘</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=801">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=801&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_15" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum159766" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=11548&page=1#pid159766', '话题链接已经复制到剪贴板')">16楼</strong>
													<em onclick="$('postmessage_159766').className='t_bigfont'">大</em>							<em onclick="$('postmessage_159766').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_159766').className='t_smallfont'">小</em>												发表于 2009-7-12 23:26&nbsp;																					<a href="viewthread.php?tid=11548&amp;page=1&amp;authorid=801" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_15"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_15"></div><div id="ad_thread4_15"></div>
						
						
																											<div id="postmessage_159766" class="t_msgfont">对 那个Skype Tom版特别恶心 玩域名劫持 无耻到家了</div>

							
							
							
							
															<div id="post_rate_div_159766"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo159766_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=801" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=11548&amp;repquote=159766&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 159766)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_15"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid162486" summary="pid162486" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7213" target="_blank" id="userinfo162486" class="dropmenu" onmouseover="showMenu(this.id)">花样小正太</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">乖乖小男生</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7213">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7213&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_16" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum162486" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=11548&page=1#pid162486', '话题链接已经复制到剪贴板')">17楼</strong>
													<em onclick="$('postmessage_162486').className='t_bigfont'">大</em>							<em onclick="$('postmessage_162486').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_162486').className='t_smallfont'">小</em>												发表于 2009-7-14 20:34&nbsp;																					<a href="viewthread.php?tid=11548&amp;page=1&amp;authorid=7213" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_16"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_16"></div><div id="ad_thread4_16"></div>
						
						
																											<div id="postmessage_162486" class="t_msgfont">受教了<br />
楼主哥哥辛苦啦</div>

							
							
							
							
															<div id="post_rate_div_162486"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo162486_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=7213" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=11548&amp;repquote=162486&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 162486)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_16"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid162551" summary="pid162551" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=5355" target="_blank" id="userinfo162551" class="dropmenu" onmouseover="showMenu(this.id)">hikui</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=5355">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=5355&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_17" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum162551" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=11548&page=1#pid162551', '话题链接已经复制到剪贴板')">18楼</strong>
													<em onclick="$('postmessage_162551').className='t_bigfont'">大</em>							<em onclick="$('postmessage_162551').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_162551').className='t_smallfont'">小</em>												发表于 2009-7-14 21:18&nbsp;																					<a href="viewthread.php?tid=11548&amp;page=1&amp;authorid=5355" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_17"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_17"></div><div id="ad_thread4_17"></div>
						
						
																											<div id="postmessage_162551" class="t_msgfont">pidgin可能不是很安全的说~而且qq for linux看起来是非常不安全的，有没有牛人去测试一下，反正我觉得他的协议和win下的qq协议不一样，貌似要通过服务器转发信息的而不是点对点。</div>

							
							
							
							
															<div id="post_rate_div_162551"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo162551_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=5355" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=11548&amp;repquote=162551&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 162551)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_17"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid165998" summary="pid165998" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=5444" target="_blank" id="userinfo165998" class="dropmenu" onmouseover="showMenu(this.id)">渡江云</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=5444">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=5444&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_18" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum165998" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=11548&page=1#pid165998', '话题链接已经复制到剪贴板')">19楼</strong>
													<em onclick="$('postmessage_165998').className='t_bigfont'">大</em>							<em onclick="$('postmessage_165998').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_165998').className='t_smallfont'">小</em>												发表于 2009-7-17 15:19&nbsp;																					<a href="viewthread.php?tid=11548&amp;page=1&amp;authorid=5444" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_18"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_18"></div><div id="ad_thread4_18"></div>
						
						
																											<div id="postmessage_165998" class="t_msgfont">一直有个疑问，应该用哪一个浏览器？</div>

							
							
							
							
															<div id="post_rate_div_165998"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo165998_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=5444" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=11548&amp;repquote=165998&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 165998)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_18"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid234315" summary="pid234315" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7964" target="_blank" id="userinfo234315" class="dropmenu" onmouseover="showMenu(this.id)">Journeyman</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7964">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7964&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_19" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum234315" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=11548&page=1#pid234315', '话题链接已经复制到剪贴板')">20楼</strong>
													<em onclick="$('postmessage_234315').className='t_bigfont'">大</em>							<em onclick="$('postmessage_234315').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_234315').className='t_smallfont'">小</em>												发表于 2009-9-10 01:33&nbsp;																					<a href="viewthread.php?tid=11548&amp;page=1&amp;authorid=7964" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_19"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_19"></div><div id="ad_thread4_19"></div>
													<h2>回复 20楼 渡江云 的话题</h2>
						
						
																											<div id="postmessage_234315" class="t_msgfont">使用哪种浏览器是个单纯的喜好问题，只不过我更爱用火狐。可以很轻松的切换代理。</div>

							
							
							
							
															<div id="post_rate_div_234315"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo234315_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://twitter.com/saintony" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=7964" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=11548&amp;repquote=234315&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 234315)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_19"></div>				</div>
			</td>
		</tr>
		</table>
		</div>
</form>





<div class="pages_btns">
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=11548&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=11548&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
				<span class="postbtn" id="newspecialtmp" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=11548&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

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

	<form method="post" id="postform" action="post.php?action=reply&amp;fid=26&amp;tid=11548&amp;extra=&amp;replysubmit=yes" onSubmit="return validate(this)">
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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<title>申请He.net的IPv6和VPN的教程 - 国家局域网研究所 -  1984bbs.com </title>
<meta name="keywords" content="" />
<meta name="MSSmartTagsPreventParsing" content="True" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<link rel="archives" title="1984bbs.com" href="https://1984bbs.com/archiver/" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_viewthread.css" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_common.css" />
<script type="text/javascript">
	var discuz_uid = 13019;var IMGDIR = 'images/default';var attackevasive = '0';var gid = 0;var STYLEID = '1';
	gid = parseInt('3');var fid = parseInt('26');var tid = parseInt('50451');
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
			<p><a href="index.php" id="forumlist" onmouseover="showMenu(this.id)" class="dropmenu">1984bbs.com</a> &raquo; <a href="forumdisplay.php?fid=26">国家局域网研究所</a> &raquo; 申请He.net的IPv6和VPN的教程</p>
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
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=50451&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=50451&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
				<span class="postbtn" id="newspecial" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=50451&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

	<ul class="popupmenu_popup newspecialmenu" id="newspecial_menu" style="display: none">
		<li><a href="post.php?action=newthread&amp;fid=26&amp;extra=">发新话题</a></li>
		<li class="poll"><a href="post.php?action=newthread&amp;fid=26&amp;extra=&amp;special=1">发布投票</a></li>													</ul>

<form method="post" name="modactions">
	<input type="hidden" name="formhash" value="823c9fa2" />
	<div class="mainbox viewthread">
		<span class="headactions">
					<a href="my.php?item=favorites&amp;tid=50451" id="ajax_favorite" onclick="ajaxmenu(event, this.id, 3000, 0)">收藏</a>
			<a href="my.php?item=subscriptions&amp;subadd=50451" id="ajax_subscription" onclick="ajaxmenu(event, this.id, 3000, null, 0)">订阅</a>
			<a href="misc.php?action=emailfriend&amp;tid=50451" id="emailfriend" onclick="ajaxmenu(event, this.id, 9000000, null, 0)">推荐</a>
				<a href="viewthread.php?action=printable&amp;tid=50451" target="_blank" class="notabs">打印</a>
				</span>
		<h1>申请He.net的IPv6和VPN的教程		</h1>
				<ins>
						<a href="misc.php?action=viewthreadmod&amp;tid=50451" title="主题操作记录" target="_blank">本主题由 alix001 于 2010-6-23 09:38 移动</a>								</ins>
							<table id="pid698604" summary="pid698604" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=14875" target="_blank" id="userinfo698604" class="dropmenu" onmouseover="showMenu(this.id)">Absurd</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">麦卡锡主义者与五毛类同</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=14875">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=14875&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_0" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum698604" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=50451&page=1#pid698604', '话题链接已经复制到剪贴板')">1楼</strong>
													<em onclick="$('postmessage_698604').className='t_bigfont'">大</em>							<em onclick="$('postmessage_698604').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_698604').className='t_smallfont'">小</em>												发表于 2010-6-23 04:09&nbsp;																					<a href="viewthread.php?tid=50451&amp;page=1&amp;authorid=14875" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_0"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_0"></div><div id="ad_thread4_0"></div>
													<h2>申请He.net的IPv6和VPN的教程</h2>
						
						
																											<div id="postmessage_698604" class="t_msgfont">he.net这个公司，还是不说，自己GOOLGE，he.net提供的免费DNS就不说了，主要给大家说下：he.net提供的免费ipv6 IP地址和隧道服务！<br />
<br />
对he.net提供的这个东西，主要是喜欢他的ipv6和免费代理就能访问不能访问的站（VPN隧道服务）<br />
<br />
IPv6地址多的吓死人，所以不怕申请不到。别跟免费空间一样，申请N个收藏，没必要的事！<br />
<br />
首先去<a href="http://www.tunnelbroker.net" target="_blank">http://www.tunnelbroker.net</a>申请个账号，直接申请可以立刻得到账号，密码去自己的邮箱查看，然后登陆，在右边点击Tunnelbroker可以看到属于自己的IPv6地址。<br />
左下角点击Create Regular Tunnel创建（图一）<br />
<br />
<img src="http://image161.poco.cn/mypoco/myphoto/20100613/19/5533688320100613194510046_165.jpg" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
<br />
<img src="http://image161.poco.cn/mypoco/myphoto/20100613/19/5533688320100613195359018_640.jpg" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
<br />
确认后你会得到<br />
<br />
<img src="http://image161.poco.cn/mypoco/myphoto/20100613/20/5533688320100613200158091_640.jpg" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
<br />
<br />
安装上面的信息就可以得到IPv6的地址和VPN的信息了。然后安装IPv6。安装后要重启电脑。<br />
<br />
下面说说这个VPN的用法！<br />
<br />
在电脑网络里建立新的VPN连接，信息就是图片上说明的！但是要注意的是新建VPN后<br />
<br />
进入新建VPN连接的属性-安全选项，把（要求数据加密￥%￥%#）这一项的对勾去掉！<br />
<br />
OK，你可以看youtube.com了！<br />
<br />
小知识：IPv6地址是固定的，你可以一直用同一个ipv6地址，在任何时候，任何地点！<br />
<br />
PS：验证IPv6的成功与否，请ping ipv6.google.com,通了那就恭喜你，不通你就在回头看下！<br />
<br />
祝你IPv6之旅成功！<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
原帖地址：<br />
<a href="http://www.leomy.com/he-net-ipv6-vpn.html" target="_blank">http://www.leomy.com/he-net-ipv6-vpn.html</a></div>

							
							
							
							
															<div id="post_rate_div_698604"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo698604_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=14875" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=50451&amp;repquote=698604&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 698604)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_0"></div>				</div>
			</td>
		</tr>
		</table>
		</div><div class="ad_column" id="ad_interthread"><a href="/viewthread.php?tid=54699" target="_blank" style="color:red;">1984bbs是一个非营利项目，它需要您的捐助！</font></a>		</div>
	<div class="mainbox viewthread">
			<table id="pid698643" summary="pid698643" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2441" target="_blank" id="userinfo698643" class="dropmenu" onmouseover="showMenu(this.id)">高渐离</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">组内伍毛全家死光</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2441">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2441&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_1" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum698643" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=50451&page=1#pid698643', '话题链接已经复制到剪贴板')">2楼</strong>
													<em onclick="$('postmessage_698643').className='t_bigfont'">大</em>							<em onclick="$('postmessage_698643').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_698643').className='t_smallfont'">小</em>												发表于 2010-6-23 07:04&nbsp;																					<a href="viewthread.php?tid=50451&amp;page=1&amp;authorid=2441" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_1"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_1"></div><div id="ad_thread4_1"></div>
						
						
																											<div id="postmessage_698643" class="t_msgfont">感谢，感谢，～！！<br />
奇怪，上去了，查IP是美国，<br />
结果上国内网站速度快，YOUTUBE，BBC 之类反而还慢，<br />
难道不成是赤匪控股的？<br />
<br />
[<i> 本帖最后由 高渐离 于 2010-6-23 07:10 编辑 </i>]</div>

							
							
							
							
															<div id="post_rate_div_698643"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo698643_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=2441" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=50451&amp;repquote=698643&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 698643)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_1"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid698651" summary="pid698651" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6107" target="_blank" id="userinfo698651" class="dropmenu" onmouseover="showMenu(this.id)">Adon</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6107">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6107&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_2" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum698651" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=50451&page=1#pid698651', '话题链接已经复制到剪贴板')">3楼</strong>
													<em onclick="$('postmessage_698651').className='t_bigfont'">大</em>							<em onclick="$('postmessage_698651').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_698651').className='t_smallfont'">小</em>												发表于 2010-6-23 07:28&nbsp;																					<a href="viewthread.php?tid=50451&amp;page=1&amp;authorid=6107" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_2"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_2"></div><div id="ad_thread4_2"></div>
						
						
																											<div id="postmessage_698651" class="t_msgfont">好贴，收藏。</div>

							
							
							
							
															<div id="post_rate_div_698651"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo698651_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=6107" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=50451&amp;repquote=698651&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 698651)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_2"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid698754" summary="pid698754" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=14875" target="_blank" id="userinfo698754" class="dropmenu" onmouseover="showMenu(this.id)">Absurd</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">麦卡锡主义者与五毛类同</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=14875">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=14875&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_3" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum698754" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=50451&page=1#pid698754', '话题链接已经复制到剪贴板')">4楼</strong>
													<em onclick="$('postmessage_698754').className='t_bigfont'">大</em>							<em onclick="$('postmessage_698754').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_698754').className='t_smallfont'">小</em>												发表于 2010-6-23 09:32&nbsp;																					<a href="viewthread.php?tid=50451&amp;page=1&amp;authorid=14875" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_3"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_3"></div><div id="ad_thread4_3"></div>
													<h2>回复 2楼 高渐离 的话题</h2>
						
						
																											<div id="postmessage_698754" class="t_msgfont">换个服务器试试也许会更快点= =</div>

							
							
							
							
															<div id="post_rate_div_698754"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo698754_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=14875" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=50451&amp;repquote=698754&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 698754)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_3"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid698816" summary="pid698816" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1960" target="_blank" id="userinfo698816" class="dropmenu" onmouseover="showMenu(this.id)">库存袈裟</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">@bruceku 想象力比知识更重要。</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1960">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1960&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_4" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum698816" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=50451&page=1#pid698816', '话题链接已经复制到剪贴板')">5楼</strong>
													<em onclick="$('postmessage_698816').className='t_bigfont'">大</em>							<em onclick="$('postmessage_698816').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_698816').className='t_smallfont'">小</em>												发表于 2010-6-23 09:54&nbsp;																					<a href="viewthread.php?tid=50451&amp;page=1&amp;authorid=1960" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_4"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_4"></div><div id="ad_thread4_4"></div>
						
						
																											<div id="postmessage_698816" class="t_msgfont">之前尝试用过这个VPN，但局域网内可能需要打开远程访问权限。。。路由太烂，未遂放弃。<br />
传说这个VPN速度不错到底是he的线路。</div>

							
							
							
							
															<div id="post_rate_div_698816"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo698816_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1960" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=50451&amp;repquote=698816&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 698816)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_4"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid698887" summary="pid698887" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=5816" target="_blank" id="userinfo698887" class="dropmenu" onmouseover="showMenu(this.id)">okkokk007</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">“华风之弊，八字尽之：始于作伪，终于无耻。”——严复</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=5816">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=5816&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_5" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum698887" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=50451&page=1#pid698887', '话题链接已经复制到剪贴板')">6楼</strong>
													<em onclick="$('postmessage_698887').className='t_bigfont'">大</em>							<em onclick="$('postmessage_698887').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_698887').className='t_smallfont'">小</em>												发表于 2010-6-23 10:26&nbsp;																					<a href="viewthread.php?tid=50451&amp;page=1&amp;authorid=5816" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_5"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_5"></div><div id="ad_thread4_5"></div>
						
						
																											<div id="postmessage_698887" class="t_msgfont">成功了，但感觉还是没有自由门快。不过又多了一条突破的途径，还是很感谢啦！！</div>

							
							
							
							
															<div id="post_rate_div_698887"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo698887_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=5816" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=50451&amp;repquote=698887&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 698887)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_5"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid698889" summary="pid698889" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=5816" target="_blank" id="userinfo698889" class="dropmenu" onmouseover="showMenu(this.id)">okkokk007</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">“华风之弊，八字尽之：始于作伪，终于无耻。”——严复</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=5816">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=5816&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_6" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum698889" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=50451&page=1#pid698889', '话题链接已经复制到剪贴板')">7楼</strong>
													<em onclick="$('postmessage_698889').className='t_bigfont'">大</em>							<em onclick="$('postmessage_698889').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_698889').className='t_smallfont'">小</em>												发表于 2010-6-23 10:26&nbsp;																					<a href="viewthread.php?tid=50451&amp;page=1&amp;authorid=5816" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_6"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_6"></div><div id="ad_thread4_6"></div>
						
						
																											<div id="postmessage_698889" class="t_msgfont">换个服务器试试</div>

							
							
							
							
															<div id="post_rate_div_698889"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo698889_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=5816" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=50451&amp;repquote=698889&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 698889)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_6"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid700921" summary="pid700921" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10403" target="_blank" id="userinfo700921" class="dropmenu" onmouseover="showMenu(this.id)">毅丝不挂</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">14 思密达</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10403">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10403&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_7" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum700921" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=50451&page=1#pid700921', '话题链接已经复制到剪贴板')">8楼</strong>
													<em onclick="$('postmessage_700921').className='t_bigfont'">大</em>							<em onclick="$('postmessage_700921').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_700921').className='t_smallfont'">小</em>												发表于 2010-6-24 11:39&nbsp;																					<a href="viewthread.php?tid=50451&amp;page=1&amp;authorid=10403" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_7"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_7"></div><div id="ad_thread4_7"></div>
						
						
																											<div id="postmessage_700921" class="t_msgfont">图挂了 求指导</div>

							
							
							
							
															<div id="post_rate_div_700921"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo700921_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=10403" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=50451&amp;repquote=700921&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 700921)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_7"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid700931" summary="pid700931" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10403" target="_blank" id="userinfo700931" class="dropmenu" onmouseover="showMenu(this.id)">毅丝不挂</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">14 思密达</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10403">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10403&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_8" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum700931" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=50451&page=1#pid700931', '话题链接已经复制到剪贴板')">9楼</strong>
													<em onclick="$('postmessage_700931').className='t_bigfont'">大</em>							<em onclick="$('postmessage_700931').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_700931').className='t_smallfont'">小</em>												发表于 2010-6-24 11:42&nbsp;																					<a href="viewthread.php?tid=50451&amp;page=1&amp;authorid=10403" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_8"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_8"></div><div id="ad_thread4_8"></div>
						
						
																											<div id="postmessage_700931" class="t_msgfont">用户名和密码就填注册的时候的吗</div>

							
							
							
							
															<div id="post_rate_div_700931"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo700931_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=10403" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=50451&amp;repquote=700931&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 700931)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_8"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid702048" summary="pid702048" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=11595" target="_blank" id="userinfo702048" class="dropmenu" onmouseover="showMenu(this.id)">zzug</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=11595">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=11595&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_9" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum702048" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=50451&page=1#pid702048', '话题链接已经复制到剪贴板')">10楼</strong>
													<em onclick="$('postmessage_702048').className='t_bigfont'">大</em>							<em onclick="$('postmessage_702048').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_702048').className='t_smallfont'">小</em>												发表于 2010-6-24 20:44&nbsp;																					<a href="viewthread.php?tid=50451&amp;page=1&amp;authorid=11595" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_9"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_9"></div><div id="ad_thread4_9"></div>
													<h2>回复 10楼 毅丝不挂 的话题</h2>
						
						
																											<div id="postmessage_702048" class="t_msgfont">不是，他给你了用户名，你自己可以设置密码！</div>

							
							
							
							
															<div id="post_rate_div_702048"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo702048_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=11595" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=50451&amp;repquote=702048&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 702048)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_9"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid702392" summary="pid702392" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=13622" target="_blank" id="userinfo702392" class="dropmenu" onmouseover="showMenu(this.id)">禾夜</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=13622">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=13622&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_10" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum702392" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=50451&page=1#pid702392', '话题链接已经复制到剪贴板')">11楼</strong>
													<em onclick="$('postmessage_702392').className='t_bigfont'">大</em>							<em onclick="$('postmessage_702392').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_702392').className='t_smallfont'">小</em>												发表于 2010-6-25 00:19&nbsp;																					<a href="viewthread.php?tid=50451&amp;page=1&amp;authorid=13622" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_10"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_10"></div><div id="ad_thread4_10"></div>
						
						
																											<div id="postmessage_702392" class="t_msgfont">。。。。校园网求指导</div>

							
							
							
							
															<div id="post_rate_div_702392"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo702392_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=13622" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=50451&amp;repquote=702392&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 702392)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_10"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid702419" summary="pid702419" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10071" target="_blank" id="userinfo702419" class="dropmenu" onmouseover="showMenu(this.id)">open5235</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10071">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10071&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_11" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum702419" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=50451&page=1#pid702419', '话题链接已经复制到剪贴板')">12楼</strong>
													<em onclick="$('postmessage_702419').className='t_bigfont'">大</em>							<em onclick="$('postmessage_702419').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_702419').className='t_smallfont'">小</em>												发表于 2010-6-25 00:42&nbsp;																					<a href="viewthread.php?tid=50451&amp;page=1&amp;authorid=10071" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_11"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_11"></div><div id="ad_thread4_11"></div>
						
						
																											<div id="postmessage_702419" class="t_msgfont">mark</div>

							
							
							
							
															<div id="post_rate_div_702419"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo702419_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=10071" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=50451&amp;repquote=702419&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 702419)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_11"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid704267" summary="pid704267" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=4021" target="_blank" id="userinfo704267" class="dropmenu" onmouseover="showMenu(this.id)">alexander982</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">肆零贰壹号组员//道貌岸然的知心大哥//伪爱情专家//傻*英雄主义者//一个烤鸭的传说</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=4021">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=4021&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_12" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum704267" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=50451&page=1#pid704267', '话题链接已经复制到剪贴板')">13楼</strong>
													<em onclick="$('postmessage_704267').className='t_bigfont'">大</em>							<em onclick="$('postmessage_704267').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_704267').className='t_smallfont'">小</em>												发表于 2010-6-26 01:03&nbsp;																					<a href="viewthread.php?tid=50451&amp;page=1&amp;authorid=4021" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_12"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_12"></div><div id="ad_thread4_12"></div>
						
						
																											<div id="postmessage_704267" class="t_msgfont">顺利申请，速度贼拉的快! 爽极! 深度感谢楼主！<br />
<br />
[<i> 本帖最后由 alexander982 于 2010-6-26 01:04 编辑 </i>]</div>

							
							
							
							
															<div id="post_rate_div_704267"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo704267_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=4021" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=50451&amp;repquote=704267&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 704267)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_12"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid704482" summary="pid704482" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12368" target="_blank" id="userinfo704482" class="dropmenu" onmouseover="showMenu(this.id)">cinderellaok</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12368">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12368&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_13" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum704482" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=50451&page=1#pid704482', '话题链接已经复制到剪贴板')">14楼</strong>
													<em onclick="$('postmessage_704482').className='t_bigfont'">大</em>							<em onclick="$('postmessage_704482').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_704482').className='t_smallfont'">小</em>												发表于 2010-6-26 09:01&nbsp;																					<a href="viewthread.php?tid=50451&amp;page=1&amp;authorid=12368" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_13"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_13"></div><div id="ad_thread4_13"></div>
						
						
																											<div id="postmessage_704482" class="t_msgfont">感谢楼主分享~~~感觉VPN比SSH用着方便</div>

							
							
							
							
															<div id="post_rate_div_704482"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo704482_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=12368" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=50451&amp;repquote=704482&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 704482)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_13"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid704491" summary="pid704491" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=14900" target="_blank" id="userinfo704491" class="dropmenu" onmouseover="showMenu(this.id)">fyi151</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=14900">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=14900&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_14" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum704491" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=50451&page=1#pid704491', '话题链接已经复制到剪贴板')">15楼</strong>
													<em onclick="$('postmessage_704491').className='t_bigfont'">大</em>							<em onclick="$('postmessage_704491').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_704491').className='t_smallfont'">小</em>												发表于 2010-6-26 09:05&nbsp;																					<a href="viewthread.php?tid=50451&amp;page=1&amp;authorid=14900" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_14"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_14"></div><div id="ad_thread4_14"></div>
						
						
																											<div id="postmessage_704491" class="t_msgfont">试用下再说~</div>

							
							
							
							
															<div id="post_rate_div_704491"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo704491_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=14900" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=50451&amp;repquote=704491&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 704491)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_14"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid705170" summary="pid705170" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10679" target="_blank" id="userinfo705170" class="dropmenu" onmouseover="showMenu(this.id)">fantamine</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10679">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10679&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_15" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum705170" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=50451&page=1#pid705170', '话题链接已经复制到剪贴板')">16楼</strong>
													<em onclick="$('postmessage_705170').className='t_bigfont'">大</em>							<em onclick="$('postmessage_705170').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_705170').className='t_smallfont'">小</em>												发表于 2010-6-26 16:56&nbsp;																					<a href="viewthread.php?tid=50451&amp;page=1&amp;authorid=10679" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_15"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_15"></div><div id="ad_thread4_15"></div>
						
						
																											<div id="postmessage_705170" class="t_msgfont">我的怎么没有显示VPN信息啊</div>

							
							
							
							
															<div id="post_rate_div_705170"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo705170_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=10679" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=50451&amp;repquote=705170&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 705170)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_15"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid705400" summary="pid705400" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10679" target="_blank" id="userinfo705400" class="dropmenu" onmouseover="showMenu(this.id)">fantamine</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10679">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10679&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_16" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum705400" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=50451&page=1#pid705400', '话题链接已经复制到剪贴板')">17楼</strong>
													<em onclick="$('postmessage_705400').className='t_bigfont'">大</em>							<em onclick="$('postmessage_705400').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_705400').className='t_smallfont'">小</em>												发表于 2010-6-26 20:04&nbsp;																					<a href="viewthread.php?tid=50451&amp;page=1&amp;authorid=10679" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_16"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_16"></div><div id="ad_thread4_16"></div>
						
						
																											<div id="postmessage_705400" class="t_msgfont">哈哈 成功了 速度很快 谢谢了</div>

							
							
							
							
															<div id="post_rate_div_705400"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo705400_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=10679" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=50451&amp;repquote=705400&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 705400)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_16"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid705425" summary="pid705425" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10162" target="_blank" id="userinfo705425" class="dropmenu" onmouseover="showMenu(this.id)">流水不争先</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10162">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10162&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_17" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum705425" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=50451&page=1#pid705425', '话题链接已经复制到剪贴板')">18楼</strong>
													<em onclick="$('postmessage_705425').className='t_bigfont'">大</em>							<em onclick="$('postmessage_705425').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_705425').className='t_smallfont'">小</em>												发表于 2010-6-26 20:24&nbsp;																					<a href="viewthread.php?tid=50451&amp;page=1&amp;authorid=10162" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_17"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_17"></div><div id="ad_thread4_17"></div>
						
						
																											<div id="postmessage_705425" class="t_msgfont">成功，谢谢！！！</div>

							
							
							
							
															<div id="post_rate_div_705425"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo705425_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=10162" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=50451&amp;repquote=705425&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 705425)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_17"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid705438" summary="pid705438" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=13081" target="_blank" id="userinfo705438" class="dropmenu" onmouseover="showMenu(this.id)">tbiyt</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=13081">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=13081&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_18" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum705438" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=50451&page=1#pid705438', '话题链接已经复制到剪贴板')">19楼</strong>
													<em onclick="$('postmessage_705438').className='t_bigfont'">大</em>							<em onclick="$('postmessage_705438').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_705438').className='t_smallfont'">小</em>												发表于 2010-6-26 20:38&nbsp;																					<a href="viewthread.php?tid=50451&amp;page=1&amp;authorid=13081" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_18"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_18"></div><div id="ad_thread4_18"></div>
						
						
																											<div id="postmessage_705438" class="t_msgfont">我的是adsl ip不稳定 如何设置啊</div>

							
							
							
							
															<div id="post_rate_div_705438"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo705438_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=13081" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=50451&amp;repquote=705438&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 705438)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_18"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid705451" summary="pid705451" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=13081" target="_blank" id="userinfo705451" class="dropmenu" onmouseover="showMenu(this.id)">tbiyt</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=13081">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=13081&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_19" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum705451" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=50451&page=1#pid705451', '话题链接已经复制到剪贴板')">20楼</strong>
													<em onclick="$('postmessage_705451').className='t_bigfont'">大</em>							<em onclick="$('postmessage_705451').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_705451').className='t_smallfont'">小</em>												发表于 2010-6-26 20:48&nbsp;																					<a href="viewthread.php?tid=50451&amp;page=1&amp;authorid=13081" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_19"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_19"></div><div id="ad_thread4_19"></div>
						
						
																											<div id="postmessage_705451" class="t_msgfont">Your IPv4 endpoint is unreachable or unstable. Please make sure ICMP is not blocked. If you are blocking ICMP, please allow xx.xxx.x.xx through your firewall.</div>

							
							
							
							
															<div id="post_rate_div_705451"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo705451_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=13081" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=50451&amp;repquote=705451&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 705451)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_19"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid706000" summary="pid706000" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=4021" target="_blank" id="userinfo706000" class="dropmenu" onmouseover="showMenu(this.id)">alexander982</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">肆零贰壹号组员//道貌岸然的知心大哥//伪爱情专家//傻*英雄主义者//一个烤鸭的传说</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=4021">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=4021&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_20" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum706000" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=50451&page=1#pid706000', '话题链接已经复制到剪贴板')">21楼</strong>
													<em onclick="$('postmessage_706000').className='t_bigfont'">大</em>							<em onclick="$('postmessage_706000').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_706000').className='t_smallfont'">小</em>												发表于 2010-6-27 08:01&nbsp;																					<a href="viewthread.php?tid=50451&amp;page=1&amp;authorid=4021" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_20"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_20"></div><div id="ad_thread4_20"></div>
						
						
																											<div id="postmessage_706000" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>tbiyt</i> 于 2010-6-26 20:48 发表 <a href="https://bbs.1984bbs.com/redirect.php?goto=findpost&amp;pid=705451&amp;ptid=50451" target="_blank"><img src="https://bbs.1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
Your IPv4 endpoint is unreachable or unstable. Please make sure ICMP is not blocked. If you are blocking ICMP, please allow xx.xxx.x.xx through your firewall. </blockquote></div>降低防火墙级别Or添加允许规则</div>

							
							
							
							
															<div id="post_rate_div_706000"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo706000_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=4021" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=50451&amp;repquote=706000&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 706000)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_20"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid706227" summary="pid706227" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=9603" target="_blank" id="userinfo706227" class="dropmenu" onmouseover="showMenu(this.id)">hy1226</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=9603">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=9603&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_21" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum706227" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=50451&page=1#pid706227', '话题链接已经复制到剪贴板')">22楼</strong>
													<em onclick="$('postmessage_706227').className='t_bigfont'">大</em>							<em onclick="$('postmessage_706227').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_706227').className='t_smallfont'">小</em>												发表于 2010-6-27 11:04&nbsp;																					<a href="viewthread.php?tid=50451&amp;page=1&amp;authorid=9603" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_21"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_21"></div><div id="ad_thread4_21"></div>
						
						
																											<div id="postmessage_706227" class="t_msgfont">在输入第二个命令时说元素找不到，怎么解决？</div>

							
							
							
							
															<div id="post_rate_div_706227"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo706227_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=9603" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=50451&amp;repquote=706227&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 706227)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_21"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid706254" summary="pid706254" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=13081" target="_blank" id="userinfo706254" class="dropmenu" onmouseover="showMenu(this.id)">tbiyt</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=13081">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=13081&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_22" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum706254" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=50451&page=1#pid706254', '话题链接已经复制到剪贴板')">23楼</strong>
													<em onclick="$('postmessage_706254').className='t_bigfont'">大</em>							<em onclick="$('postmessage_706254').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_706254').className='t_smallfont'">小</em>												发表于 2010-6-27 11:24&nbsp;																					<a href="viewthread.php?tid=50451&amp;page=1&amp;authorid=13081" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_22"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_22"></div><div id="ad_thread4_22"></div>
						
						
																											<div id="postmessage_706254" class="t_msgfont">哦 谢谢啊</div>

							
							
							
							
															<div id="post_rate_div_706254"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo706254_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=13081" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=50451&amp;repquote=706254&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 706254)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_22"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid706288" summary="pid706288" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=13081" target="_blank" id="userinfo706288" class="dropmenu" onmouseover="showMenu(this.id)">tbiyt</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=13081">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=13081&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_23" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum706288" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=50451&page=1#pid706288', '话题链接已经复制到剪贴板')">24楼</strong>
													<em onclick="$('postmessage_706288').className='t_bigfont'">大</em>							<em onclick="$('postmessage_706288').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_706288').className='t_smallfont'">小</em>												发表于 2010-6-27 11:56&nbsp;																					<a href="viewthread.php?tid=50451&amp;page=1&amp;authorid=13081" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_23"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_23"></div><div id="ad_thread4_23"></div>
						
						
																											<div id="postmessage_706288" class="t_msgfont">为什么我的显示 ：由于目标计算机积极拒绝，无法连接。<br />
&nbsp;&nbsp;弄了一会又显示 由于连接方在一段时间后没有正确答复或连接的主机没有反应，连接尝试失败。<br />
<br />
[<i> 本帖最后由 tbiyt 于 2010-6-27 12:47 编辑 </i>]</div>

							
							
							
							
															<div id="post_rate_div_706288"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo706288_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=13081" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=50451&amp;repquote=706288&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 706288)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_23"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid753941" summary="pid753941" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10991" target="_blank" id="userinfo753941" class="dropmenu" onmouseover="showMenu(this.id)">非羊</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">不明真相的群众</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10991">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10991&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_24" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum753941" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=50451&page=1#pid753941', '话题链接已经复制到剪贴板')">25楼</strong>
													<em onclick="$('postmessage_753941').className='t_bigfont'">大</em>							<em onclick="$('postmessage_753941').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_753941').className='t_smallfont'">小</em>												发表于 2010-7-22 14:00&nbsp;																					<a href="viewthread.php?tid=50451&amp;page=1&amp;authorid=10991" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_24"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_24"></div><div id="ad_thread4_24"></div>
													<h2>回复 1楼 Absurd 的话题</h2>
						
						
																											<div id="postmessage_753941" class="t_msgfont">mark</div>

							
							
							
							
															<div id="post_rate_div_753941"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo753941_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://treenewbee.net" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=10991" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=50451&amp;repquote=753941&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 753941)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_24"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid754657" summary="pid754657" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10247" target="_blank" id="userinfo754657" class="dropmenu" onmouseover="showMenu(this.id)">scorpion</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">斯德哥尔摩症患者</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10247">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10247&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_25" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum754657" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=50451&page=1#pid754657', '话题链接已经复制到剪贴板')">26楼</strong>
													<em onclick="$('postmessage_754657').className='t_bigfont'">大</em>							<em onclick="$('postmessage_754657').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_754657').className='t_smallfont'">小</em>												发表于 2010-7-22 22:14&nbsp;																					<a href="viewthread.php?tid=50451&amp;page=1&amp;authorid=10247" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_25"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_25"></div><div id="ad_thread4_25"></div>
						
						
																											<div id="postmessage_754657" class="t_msgfont">感谢国家，感谢楼主，又一个翻墙秘技，成功！</div>

							
							
							
							
															<div id="post_rate_div_754657"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo754657_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=10247" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=50451&amp;repquote=754657&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 754657)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_25"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid757250" summary="pid757250" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=9656" target="_blank" id="userinfo757250" class="dropmenu" onmouseover="showMenu(this.id)">shallwedance</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=9656">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=9656&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_26" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum757250" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=50451&page=1#pid757250', '话题链接已经复制到剪贴板')">27楼</strong>
													<em onclick="$('postmessage_757250').className='t_bigfont'">大</em>							<em onclick="$('postmessage_757250').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_757250').className='t_smallfont'">小</em>												发表于 2010-7-24 22:21&nbsp;																					<a href="viewthread.php?tid=50451&amp;page=1&amp;authorid=9656" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_26"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_26"></div><div id="ad_thread4_26"></div>
						
						
																											<div id="postmessage_757250" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>tbiyt</i> 于 2010-6-27 11:56 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=706288&amp;ptid=50451" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
为什么我的显示 ：由于目标计算机积极拒绝，无法连接。<br />
&nbsp;&nbsp;弄了一会又显示 由于连接方在一段时间后没有正确答复或连接的主机没有反应，连接尝试失败。 </blockquote></div>我也一样，成功解决。原文有提到“VPN连接的属性-安全选项，把（要求数据加密￥%￥%#）这一项的对勾去掉！“，按这个做就行了，估计是服务器不接受数据加密什么的。</div>

							
							
							
							
															<div id="post_rate_div_757250"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo757250_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=9656" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=50451&amp;repquote=757250&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 757250)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_26"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid757878" summary="pid757878" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=9656" target="_blank" id="userinfo757878" class="dropmenu" onmouseover="showMenu(this.id)">shallwedance</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=9656">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=9656&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_27" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum757878" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=50451&page=1#pid757878', '话题链接已经复制到剪贴板')">28楼</strong>
													<em onclick="$('postmessage_757878').className='t_bigfont'">大</em>							<em onclick="$('postmessage_757878').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_757878').className='t_smallfont'">小</em>												发表于 2010-7-25 13:54&nbsp;																					<a href="viewthread.php?tid=50451&amp;page=1&amp;authorid=9656" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_27"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_27"></div><div id="ad_thread4_27"></div>
						
						
																											<div id="postmessage_757878" class="t_msgfont">不好用，速度很好，但是每隔几分钟就断开重连一次，放弃了。</div>

							
							
							
							
															<div id="post_rate_div_757878"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo757878_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=9656" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=50451&amp;repquote=757878&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 757878)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_27"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid761332" summary="pid761332" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=719" target="_blank" id="userinfo761332" class="dropmenu" onmouseover="showMenu(this.id)">Zenu</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">资深潜水员</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=719">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=719&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_28" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum761332" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=50451&page=1#pid761332', '话题链接已经复制到剪贴板')">29楼</strong>
													<em onclick="$('postmessage_761332').className='t_bigfont'">大</em>							<em onclick="$('postmessage_761332').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_761332').className='t_smallfont'">小</em>												发表于 2010-7-27 20:43&nbsp;																					<a href="viewthread.php?tid=50451&amp;page=1&amp;authorid=719" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_28"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_28"></div><div id="ad_thread4_28"></div>
						
						
																											<div id="postmessage_761332" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>alexander982</i> 于 2010-6-27 08:01 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=706000&amp;ptid=50451" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
<br />
降低防火墙级别Or添加允许规则 </blockquote></div>请问如何添加允许规则？我一直出这个提示，关了防火墙还不行……我用的是KIS 9。</div>

							
							
							
							
															<div id="post_rate_div_761332"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo761332_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=719" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=50451&amp;repquote=761332&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 761332)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_28"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid765670" summary="pid765670" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=17262" target="_blank" id="userinfo765670" class="dropmenu" onmouseover="showMenu(this.id)">didiaowang</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=17262">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=17262&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_29" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum765670" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=50451&page=1#pid765670', '话题链接已经复制到剪贴板')">30楼</strong>
													<em onclick="$('postmessage_765670').className='t_bigfont'">大</em>							<em onclick="$('postmessage_765670').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_765670').className='t_smallfont'">小</em>												发表于 2010-7-30 16:38&nbsp;																					<a href="viewthread.php?tid=50451&amp;page=1&amp;authorid=17262" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_29"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_29"></div><div id="ad_thread4_29"></div>
						
						
																											<div id="postmessage_765670" class="t_msgfont">mark一下，备用</div>

							
							
							
							
															<div id="post_rate_div_765670"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo765670_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=17262" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=50451&amp;repquote=765670&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 765670)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_29"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid765724" summary="pid765724" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=13081" target="_blank" id="userinfo765724" class="dropmenu" onmouseover="showMenu(this.id)">tbiyt</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=13081">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=13081&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_30" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum765724" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=50451&page=1#pid765724', '话题链接已经复制到剪贴板')">31楼</strong>
													<em onclick="$('postmessage_765724').className='t_bigfont'">大</em>							<em onclick="$('postmessage_765724').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_765724').className='t_smallfont'">小</em>												发表于 2010-7-30 17:15&nbsp;																					<a href="viewthread.php?tid=50451&amp;page=1&amp;authorid=13081" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_30"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_30"></div><div id="ad_thread4_30"></div>
						
						
																											<div id="postmessage_765724" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>scorpion</i> 于 2010-7-22 22:14 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=754657&amp;ptid=50451" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
感谢国家，感谢楼主，又一个翻墙秘技，成功！ </blockquote></div>我再试试</div>

							
							
							
							
															<div id="post_rate_div_765724"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo765724_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=13081" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=50451&amp;repquote=765724&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 765724)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_30"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid765812" summary="pid765812" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2973" target="_blank" id="userinfo765812" class="dropmenu" onmouseover="showMenu(this.id)">free1989</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">@photobluer</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2973">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2973&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_31" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum765812" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=50451&page=1#pid765812', '话题链接已经复制到剪贴板')">32楼</strong>
													<em onclick="$('postmessage_765812').className='t_bigfont'">大</em>							<em onclick="$('postmessage_765812').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_765812').className='t_smallfont'">小</em>												发表于 2010-7-30 17:56&nbsp;																					<a href="viewthread.php?tid=50451&amp;page=1&amp;authorid=2973" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_31"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_31"></div><div id="ad_thread4_31"></div>
						
						
																											<div id="postmessage_765812" class="t_msgfont">He的VPN不限流量，速度也快，确实好用。</div>

							
							
							
							
															<div id="post_rate_div_765812"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo765812_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=2973" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=50451&amp;repquote=765812&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 765812)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_31"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid770023" summary="pid770023" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12412" target="_blank" id="userinfo770023" class="dropmenu" onmouseover="showMenu(this.id)">wangguoping</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">追寻光明</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12412">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12412&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_32" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum770023" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=50451&page=1#pid770023', '话题链接已经复制到剪贴板')">33楼</strong>
													<em onclick="$('postmessage_770023').className='t_bigfont'">大</em>							<em onclick="$('postmessage_770023').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_770023').className='t_smallfont'">小</em>												发表于 2010-8-3 15:30&nbsp;																					<a href="viewthread.php?tid=50451&amp;page=1&amp;authorid=12412" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_32"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_32"></div><div id="ad_thread4_32"></div>
						
						
																											<div id="postmessage_770023" class="t_msgfont">为何香港的不显示VPN信息</div>

							
							
							
							
															<div id="post_rate_div_770023"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo770023_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=12412" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=50451&amp;repquote=770023&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 770023)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_32"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid770029" summary="pid770029" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10005" target="_blank" id="userinfo770029" class="dropmenu" onmouseover="showMenu(this.id)">foodpizza</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10005">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10005&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_33" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum770029" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=50451&page=1#pid770029', '话题链接已经复制到剪贴板')">34楼</strong>
													<em onclick="$('postmessage_770029').className='t_bigfont'">大</em>							<em onclick="$('postmessage_770029').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_770029').className='t_smallfont'">小</em>												发表于 2010-8-3 15:32&nbsp;																					<a href="viewthread.php?tid=50451&amp;page=1&amp;authorid=10005" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_33"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_33"></div><div id="ad_thread4_33"></div>
						
						
																											<div id="postmessage_770029" class="t_msgfont">ipv6是个好东西</div>

							
							
							
							
															<div id="post_rate_div_770029"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo770029_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=10005" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=50451&amp;repquote=770029&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 770029)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_33"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid833287" summary="pid833287" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=13539" target="_blank" id="userinfo833287" class="dropmenu" onmouseover="showMenu(this.id)">没存在感的U.D.</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">哇啦哇刚大木</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=13539">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=13539&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_34" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum833287" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=50451&page=1#pid833287', '话题链接已经复制到剪贴板')">35楼</strong>
													<em onclick="$('postmessage_833287').className='t_bigfont'">大</em>							<em onclick="$('postmessage_833287').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_833287').className='t_smallfont'">小</em>												发表于 2010-9-16 22:43&nbsp;																					<a href="viewthread.php?tid=50451&amp;page=1&amp;authorid=13539" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_34"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_34"></div><div id="ad_thread4_34"></div>
						
						
																											<div id="postmessage_833287" class="t_msgfont">mark</div>

							
							
							
							
															<div id="post_rate_div_833287"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo833287_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=13539" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=50451&amp;repquote=833287&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 833287)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_34"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid834844" summary="pid834844" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10530" target="_blank" id="userinfo834844" class="dropmenu" onmouseover="showMenu(this.id)">老矛头</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10530">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10530&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_35" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum834844" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=50451&page=1#pid834844', '话题链接已经复制到剪贴板')">36楼</strong>
													<em onclick="$('postmessage_834844').className='t_bigfont'">大</em>							<em onclick="$('postmessage_834844').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_834844').className='t_smallfont'">小</em>												发表于 2010-9-17 20:40&nbsp;																					<a href="viewthread.php?tid=50451&amp;page=1&amp;authorid=10530" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_35"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_35"></div><div id="ad_thread4_35"></div>
						
						
																											<div id="postmessage_834844" class="t_msgfont">打个叉</div>

							
							
							
							
															<div id="post_rate_div_834844"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo834844_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=10530" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=50451&amp;repquote=834844&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 834844)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_35"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid840867" summary="pid840867" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=19122" target="_blank" id="userinfo840867" class="dropmenu" onmouseover="showMenu(this.id)">Pearly</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">If he died that night, he must have died happy, because he was loved.</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=19122">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=19122&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_36" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum840867" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=50451&page=1#pid840867', '话题链接已经复制到剪贴板')">37楼</strong>
													<em onclick="$('postmessage_840867').className='t_bigfont'">大</em>							<em onclick="$('postmessage_840867').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_840867').className='t_smallfont'">小</em>												发表于 2010-9-23 12:52&nbsp;																					<a href="viewthread.php?tid=50451&amp;page=1&amp;authorid=19122" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_36"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_36"></div><div id="ad_thread4_36"></div>
													<h2>回复 1楼 Absurd 的话题</h2>
						
						
																											<div id="postmessage_840867" class="t_msgfont">楼主……我刚申请了一个，为啥只给了ipv6,没给VPN呀？你第三张图跟我的不一样，我的到Routed...那一段就截止了，没有下面IPv4 VPN。。。那一部分。</div>

							
							
							
							
															<div id="post_rate_div_840867"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo840867_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=19122" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=50451&amp;repquote=840867&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 840867)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_36"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid840954" summary="pid840954" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=11595" target="_blank" id="userinfo840954" class="dropmenu" onmouseover="showMenu(this.id)">zzug</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=11595">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=11595&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_37" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum840954" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=50451&page=1#pid840954', '话题链接已经复制到剪贴板')">38楼</strong>
													<em onclick="$('postmessage_840954').className='t_bigfont'">大</em>							<em onclick="$('postmessage_840954').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_840954').className='t_smallfont'">小</em>												发表于 2010-9-23 14:02&nbsp;																					<a href="viewthread.php?tid=50451&amp;page=1&amp;authorid=11595" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_37"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_37"></div><div id="ad_thread4_37"></div>
													<h2>回复 37楼 Pearly 的话题</h2>
						
						
																											<div id="postmessage_840954" class="t_msgfont">他有的线路有VPN有的线路没有VPN你换一个线路试试</div>

							
							
							
							
															<div id="post_rate_div_840954"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo840954_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=11595" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=50451&amp;repquote=840954&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 840954)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_37"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid842354" summary="pid842354" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=19122" target="_blank" id="userinfo842354" class="dropmenu" onmouseover="showMenu(this.id)">Pearly</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">If he died that night, he must have died happy, because he was loved.</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=19122">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=19122&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_38" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum842354" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=50451&page=1#pid842354', '话题链接已经复制到剪贴板')">39楼</strong>
													<em onclick="$('postmessage_842354').className='t_bigfont'">大</em>							<em onclick="$('postmessage_842354').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_842354').className='t_smallfont'">小</em>												发表于 2010-9-24 16:41&nbsp;																					<a href="viewthread.php?tid=50451&amp;page=1&amp;authorid=19122" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_38"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_38"></div><div id="ad_thread4_38"></div>
						
						
																											<div id="postmessage_842354" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>zzug</i> 于 2010-9-23 14:02 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=840954&amp;ptid=50451" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
他有的线路有VPN有的线路没有VPN你换一个线路试试 </blockquote></div>不好意思……菜菜地问一下……咋换线路？不要鄙视我……</div>

							
							
							
							
															<div id="post_rate_div_842354"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo842354_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=19122" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=50451&amp;repquote=842354&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 842354)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_38"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid843770" summary="pid843770" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8351" target="_blank" id="userinfo843770" class="dropmenu" onmouseover="showMenu(this.id)">isonomy</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8351">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8351&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_39" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum843770" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=50451&page=1#pid843770', '话题链接已经复制到剪贴板')">40楼</strong>
													<em onclick="$('postmessage_843770').className='t_bigfont'">大</em>							<em onclick="$('postmessage_843770').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_843770').className='t_smallfont'">小</em>												发表于 2010-9-25 18:52&nbsp;																					<a href="viewthread.php?tid=50451&amp;page=1&amp;authorid=8351" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_39"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_39"></div><div id="ad_thread4_39"></div>
						
						
																											<div id="postmessage_843770" class="t_msgfont">一路下来都正常，但连接上vpn后什么也打不开<br />
我用的是win7</div>

							
							
							
							
															<div id="post_rate_div_843770"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo843770_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=8351" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=50451&amp;repquote=843770&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 843770)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_39"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid843831" summary="pid843831" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=14271" target="_blank" id="userinfo843831" class="dropmenu" onmouseover="showMenu(this.id)">bucht</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=14271">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=14271&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_40" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum843831" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=50451&page=1#pid843831', '话题链接已经复制到剪贴板')">41楼</strong>
													<em onclick="$('postmessage_843831').className='t_bigfont'">大</em>							<em onclick="$('postmessage_843831').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_843831').className='t_smallfont'">小</em>												发表于 2010-9-25 19:47&nbsp;																					<a href="viewthread.php?tid=50451&amp;page=1&amp;authorid=14271" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_40"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_40"></div><div id="ad_thread4_40"></div>
						
						
																											<div id="postmessage_843831" class="t_msgfont">校园网表示完全悲剧</div>

							
							
							
							
															<div id="post_rate_div_843831"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo843831_menu" style="display: none;">
										<div class="imicons">
												<a href="http://wpa.qq.com/msgrd?V=1&amp;Uin=853568189&amp;Site=1984bbs.com&amp;Menu=yes" target="_blank"><img src="images/default/qq.gif" alt="QQ" /></a>																							</div>
										<dl></dl>
										<p><a href="space.php?uid=14271" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=50451&amp;repquote=843831&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 843831)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_40"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid848375" summary="pid848375" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12671" target="_blank" id="userinfo848375" class="dropmenu" onmouseover="showMenu(this.id)">谢桥</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12671">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12671&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_41" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum848375" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=50451&page=1#pid848375', '话题链接已经复制到剪贴板')">42楼</strong>
													<em onclick="$('postmessage_848375').className='t_bigfont'">大</em>							<em onclick="$('postmessage_848375').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_848375').className='t_smallfont'">小</em>												发表于 2010-9-29 00:25&nbsp;																					<a href="viewthread.php?tid=50451&amp;page=1&amp;authorid=12671" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_41"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_41"></div><div id="ad_thread4_41"></div>
						
						
																											<div id="postmessage_848375" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>tbiyt</i> 于 2010-6-26 20:48 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=705451&amp;ptid=50451" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
Your IPv4 endpoint is unreachable or unstable. Please make sure ICMP is not blocked. If you are blocking ICMP, please allow xx.xxx.x.xx through your firewall. </blockquote></div>也是这个错误信息，求高手指点！在防火墙里找了半天，没有任何头绪。</div>

							
							
							
							
															<div id="post_rate_div_848375"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo848375_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=12671" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=50451&amp;repquote=848375&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 848375)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_41"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid849809" summary="pid849809" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=18225" target="_blank" id="userinfo849809" class="dropmenu" onmouseover="showMenu(this.id)">关乎</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=18225">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=18225&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_42" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum849809" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=50451&page=1#pid849809', '话题链接已经复制到剪贴板')">43楼</strong>
													<em onclick="$('postmessage_849809').className='t_bigfont'">大</em>							<em onclick="$('postmessage_849809').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_849809').className='t_smallfont'">小</em>												发表于 2010-9-30 01:45&nbsp;																					<a href="viewthread.php?tid=50451&amp;page=1&amp;authorid=18225" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_42"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_42"></div><div id="ad_thread4_42"></div>
						
						
																											<div id="postmessage_849809" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>谢桥</i> 于 2010-9-29 00:25 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=848375&amp;ptid=50451" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
<br />
<br />
也是这个错误信息，求高手指点！在防火墙里找了半天，没有任何头绪。 </blockquote></div>这个提示说明你的IP不允许从公网上ping测。如果你的电脑是直接拨号上网，有可能是机器防火墙设置的问题，如果是通过路由器，比如无线路由，那可能是你路由器上设置了禁止从公网的发来的ICMP回应。</div>

							
							
							
							
															<div id="post_rate_div_849809"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo849809_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=18225" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=50451&amp;repquote=849809&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 849809)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_42"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid850303" summary="pid850303" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=14381" target="_blank" id="userinfo850303" class="dropmenu" onmouseover="showMenu(this.id)">过滤嘴</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=14381">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=14381&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_43" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum850303" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=50451&page=1#pid850303', '话题链接已经复制到剪贴板')">44楼</strong>
													<em onclick="$('postmessage_850303').className='t_bigfont'">大</em>							<em onclick="$('postmessage_850303').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_850303').className='t_smallfont'">小</em>												发表于 2010-9-30 12:53&nbsp;																					<a href="viewthread.php?tid=50451&amp;page=1&amp;authorid=14381" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_43"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_43"></div><div id="ad_thread4_43"></div>
													<h2>谢谢，真的很不错</h2>
						
						
																											<div id="postmessage_850303" class="t_msgfont">很棒··<br />
使用Tokyo的那个成功登陆非死不可··<br />
呵呵··<br />
谢谢教程··</div>

							
							
							
							
															<div id="post_rate_div_850303"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo850303_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=14381" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=50451&amp;repquote=850303&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 850303)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_43"></div>				</div>
			</td>
		</tr>
		</table>
		</div>
</form>





<div class="pages_btns">
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=50451&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=50451&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
				<span class="postbtn" id="newspecialtmp" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=50451&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

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

	<form method="post" id="postform" action="post.php?action=reply&amp;fid=26&amp;tid=50451&amp;extra=&amp;replysubmit=yes" onSubmit="return validate(this)">
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
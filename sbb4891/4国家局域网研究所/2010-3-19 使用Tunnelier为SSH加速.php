<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<title>使用Tunnelier为SSH加速 - 国家局域网研究所 -  1984bbs.com </title>
<meta name="keywords" content="" />
<meta name="MSSmartTagsPreventParsing" content="True" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<link rel="archives" title="1984bbs.com" href="https://1984bbs.com/archiver/" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_viewthread.css" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_common.css" />
<script type="text/javascript">
	var discuz_uid = 13019;var IMGDIR = 'images/default';var attackevasive = '0';var gid = 0;var STYLEID = '1';
	gid = parseInt('3');var fid = parseInt('26');var tid = parseInt('40710');
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
			<p><a href="index.php" id="forumlist" onmouseover="showMenu(this.id)" class="dropmenu">1984bbs.com</a> &raquo; <a href="forumdisplay.php?fid=26">国家局域网研究所</a> &raquo; 使用Tunnelier为SSH加速</p>
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
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=40710&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=40710&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
				<span class="postbtn" id="newspecial" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=40710&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

	<ul class="popupmenu_popup newspecialmenu" id="newspecial_menu" style="display: none">
		<li><a href="post.php?action=newthread&amp;fid=26&amp;extra=">发新话题</a></li>
		<li class="poll"><a href="post.php?action=newthread&amp;fid=26&amp;extra=&amp;special=1">发布投票</a></li>													</ul>

<form method="post" name="modactions">
	<input type="hidden" name="formhash" value="823c9fa2" />
	<div class="mainbox viewthread">
		<span class="headactions">
					<a href="my.php?item=favorites&amp;tid=40710" id="ajax_favorite" onclick="ajaxmenu(event, this.id, 3000, 0)">收藏</a>
			<a href="my.php?item=subscriptions&amp;subadd=40710" id="ajax_subscription" onclick="ajaxmenu(event, this.id, 3000, null, 0)">订阅</a>
			<a href="misc.php?action=emailfriend&amp;tid=40710" id="emailfriend" onclick="ajaxmenu(event, this.id, 9000000, null, 0)">推荐</a>
				<a href="viewthread.php?action=printable&amp;tid=40710" target="_blank" class="notabs">打印</a>
				</span>
		<h1>使用Tunnelier为SSH加速		</h1>
							<table id="pid523006" summary="pid523006" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=11939" target="_blank" id="userinfo523006" class="dropmenu" onmouseover="showMenu(this.id)">shanyun</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=11939">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=11939&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_0" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum523006" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=40710&page=1#pid523006', '话题链接已经复制到剪贴板')">1楼</strong>
													<em onclick="$('postmessage_523006').className='t_bigfont'">大</em>							<em onclick="$('postmessage_523006').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_523006').className='t_smallfont'">小</em>												发表于 2010-3-19 17:26&nbsp;																					<a href="viewthread.php?tid=40710&amp;page=1&amp;authorid=11939" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_0"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_0"></div><div id="ad_thread4_0"></div>
													<h2>使用Tunnelier为SSH加速</h2>
						
						
																											<div id="postmessage_523006" class="t_msgfont">首先声明，我是转载的文章，感谢原文作者的奉献，Lenmore Blog &#187; 建议用Tunnelier代替MyEnTunnel翻墙 <br />
<br />
MyEnTunnel实际上是plink的 gui前端而已，可以避免记忆复杂的命令行，还可以安全的保存密码。很多人用MyEnTunnel做为windows下的ssh客户端翻墙。<br />
<br />
但是有个问题，通过MyEnTunnel或者plink下载或者看视频速度很慢，最高不超过35KB/s。<br />
<br />
我尝试修改sshd的配置，给openssh-server打补丁(参考一,参考二)，优化TCP参数，都无济于事。然后在本地的Linux虚拟机上运行ssh -D …命令，发现速度飞快，没有任何限制了。原来问题在客户端，可能是plink or putty做了什么限制吧。<br />
<br />
推荐Tunnelier，另一款ssh客户端，对个人用户免费。下载地址：<a href="http://www.bitvise.com/tunnelier-download" target="_blank">http://www.bitvise.com/tunnelier-download</a><br />
<br />
软件设置比较简单：<br />
Login选项卡，输入ssh服务器的登录信息。<br />
Options选项卡，On Login部分把几个勾都去掉，只是翻墙的话用不上。<br />
Services选项卡，SOCKS/HTTP Proxy Forwarding部分 Enabled，修改本地监听端口。<br />
然后Save Profile As另存配置<br />
<br />
Tips:<br />
可以从命令行运行 Tunnelier：tunnelier -profile=profilename.tlp -loginOnStartup<br />
可以把上面的命令做成快捷方式放到启动里面<br />
<br />
--------------------------------------------------------------------------------------------------------------------------------<br />
<br />
经过试用，速度和以前使用MyEnTunnel来说，绝对是质的飞跃，看YouTube一点都不卡，看720的YouTube缓冲也非常快速，几乎不卡。<br />
<br />
最后想问下使用SSH的同学，你们的服务器ping指一般在多少，我的在196左右徘徊，这个速度快吗?6元/月的，反正对我来说足够用了，更多消息请参看<a href="http://ratoo.tk/bitvise-tunnelier-tutorial" target="_blank">http://ratoo.tk/bitvise-tunnelier-tutorial</a></div>

							
							
							
							
															<div id="post_rate_div_523006"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo523006_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=11939" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=40710&amp;repquote=523006&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 523006)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_0"></div>				</div>
			</td>
		</tr>
		</table>
		</div><div class="ad_column" id="ad_interthread"><a href="/viewthread.php?tid=54699" target="_blank" style="color:red;">1984bbs是一个非营利项目，它需要您的捐助！</font></a>		</div>
	<div class="mainbox viewthread">
			<table id="pid523010" summary="pid523010" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2213" target="_blank" id="userinfo523010" class="dropmenu" onmouseover="showMenu(this.id)">核子力量</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">Twitter.com/hzpower</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2213">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2213&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_1" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum523010" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=40710&page=1#pid523010', '话题链接已经复制到剪贴板')">2楼</strong>
													<em onclick="$('postmessage_523010').className='t_bigfont'">大</em>							<em onclick="$('postmessage_523010').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_523010').className='t_smallfont'">小</em>												发表于 2010-3-19 17:30&nbsp;																					<a href="viewthread.php?tid=40710&amp;page=1&amp;authorid=2213" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_1"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_1"></div><div id="ad_thread4_1"></div>
						
						
																											<div id="postmessage_523010" class="t_msgfont">前两天twitter上好多人在说 ，小众软件也推荐了</div>

							
							
							
							
															<div id="post_rate_div_523010"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo523010_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://twitter.com/hzpower" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=2213" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=40710&amp;repquote=523010&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 523010)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_1"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid523084" summary="pid523084" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=169" target="_blank" id="userinfo523084" class="dropmenu" onmouseover="showMenu(this.id)">抑扬</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">小组男客服（Twitter @yiang_） </p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=169">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=169&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_2" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum523084" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=40710&page=1#pid523084', '话题链接已经复制到剪贴板')">3楼</strong>
													<em onclick="$('postmessage_523084').className='t_bigfont'">大</em>							<em onclick="$('postmessage_523084').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_523084').className='t_smallfont'">小</em>												发表于 2010-3-19 19:04&nbsp;																					<a href="viewthread.php?tid=40710&amp;page=1&amp;authorid=169" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_2"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_2"></div><div id="ad_thread4_2"></div>
						
						
																											<div id="postmessage_523084" class="t_msgfont">在库库的指导下设置成功，内牛满面</div>

							
							
							
							
															<div id="post_rate_div_523084"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo523084_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=169" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=40710&amp;repquote=523084&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 523084)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_2"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid523107" summary="pid523107" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8249" target="_blank" id="userinfo523107" class="dropmenu" onmouseover="showMenu(this.id)">freewushi</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">东厂、真理部、GFW、宫刑部爱好者，经常在不和谐的地方出没，围观群众一个</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8249">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8249&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_3" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum523107" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=40710&page=1#pid523107', '话题链接已经复制到剪贴板')">4楼</strong>
													<em onclick="$('postmessage_523107').className='t_bigfont'">大</em>							<em onclick="$('postmessage_523107').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_523107').className='t_smallfont'">小</em>												发表于 2010-3-19 19:51&nbsp;																					<a href="viewthread.php?tid=40710&amp;page=1&amp;authorid=8249" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_3"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_3"></div><div id="ad_thread4_3"></div>
						
						
																											<div id="postmessage_523107" class="t_msgfont">本地机ping 代理服务器是170ms，代理服务器ping google.com才2.7ms..感觉还不错</div>

							
							
							
							
															<div id="post_rate_div_523107"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo523107_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=8249" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=40710&amp;repquote=523107&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 523107)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_3"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid523113" summary="pid523113" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=9858" target="_blank" id="userinfo523113" class="dropmenu" onmouseover="showMenu(this.id)">ciscoxp</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=9858">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=9858&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_4" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum523113" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=40710&page=1#pid523113', '话题链接已经复制到剪贴板')">5楼</strong>
													<em onclick="$('postmessage_523113').className='t_bigfont'">大</em>							<em onclick="$('postmessage_523113').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_523113').className='t_smallfont'">小</em>												发表于 2010-3-19 19:58&nbsp;																					<a href="viewthread.php?tid=40710&amp;page=1&amp;authorid=9858" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_4"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_4"></div><div id="ad_thread4_4"></div>
						
						
																											<div id="postmessage_523113" class="t_msgfont">试了一下，果然快多了。谢谢楼主！</div>

							
							
							
							
															<div id="post_rate_div_523113"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo523113_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=9858" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=40710&amp;repquote=523113&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 523113)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_4"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid523241" summary="pid523241" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8351" target="_blank" id="userinfo523241" class="dropmenu" onmouseover="showMenu(this.id)">isonomy</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8351">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8351&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_5" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum523241" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=40710&page=1#pid523241', '话题链接已经复制到剪贴板')">6楼</strong>
													<em onclick="$('postmessage_523241').className='t_bigfont'">大</em>							<em onclick="$('postmessage_523241').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_523241').className='t_smallfont'">小</em>												发表于 2010-3-19 21:28&nbsp;																					<a href="viewthread.php?tid=40710&amp;page=1&amp;authorid=8351" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_5"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_5"></div><div id="ad_thread4_5"></div>
						
						
																											<div id="postmessage_523241" class="t_msgfont">确实不错</div>

							
							
							
							
															<div id="post_rate_div_523241"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo523241_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=8351" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=40710&amp;repquote=523241&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 523241)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_5"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid523296" summary="pid523296" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6873" target="_blank" id="userinfo523296" class="dropmenu" onmouseover="showMenu(this.id)">萧易寒</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6873">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6873&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_6" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum523296" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=40710&page=1#pid523296', '话题链接已经复制到剪贴板')">7楼</strong>
													<em onclick="$('postmessage_523296').className='t_bigfont'">大</em>							<em onclick="$('postmessage_523296').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_523296').className='t_smallfont'">小</em>												发表于 2010-3-19 22:06&nbsp;																					<a href="viewthread.php?tid=40710&amp;page=1&amp;authorid=6873" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_6"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_6"></div><div id="ad_thread4_6"></div>
						
						
																											<div id="postmessage_523296" class="t_msgfont">楼主的ssh端口号是4位以上的吧？<br />
貌似MyEntunnel对高端口号的SSH有bug</div>

							
							
							
							
															<div id="post_rate_div_523296"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo523296_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=6873" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=40710&amp;repquote=523296&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 523296)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_6"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid523308" summary="pid523308" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1960" target="_blank" id="userinfo523308" class="dropmenu" onmouseover="showMenu(this.id)">库存袈裟</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">@bruceku 想象力比知识更重要。</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1960">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1960&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_7" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum523308" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=40710&page=1#pid523308', '话题链接已经复制到剪贴板')">8楼</strong>
													<em onclick="$('postmessage_523308').className='t_bigfont'">大</em>							<em onclick="$('postmessage_523308').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_523308').className='t_smallfont'">小</em>												发表于 2010-3-19 22:15&nbsp;																					<a href="viewthread.php?tid=40710&amp;page=1&amp;authorid=1960" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_7"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_7"></div><div id="ad_thread4_7"></div>
													<h2>回复 1楼 shanyun 的话题</h2>
						
						
																											<div id="postmessage_523308" class="t_msgfont">196ms很快了 我的PR机房ping 210-240ms也是西海岸</div>

							
							
							
							
															<div id="post_rate_div_523308"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo523308_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1960" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=40710&amp;repquote=523308&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 523308)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_7"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid523346" summary="pid523346" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=4021" target="_blank" id="userinfo523346" class="dropmenu" onmouseover="showMenu(this.id)">alexander982</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">肆零贰壹号组员//道貌岸然的知心大哥//伪爱情专家//傻*英雄主义者//一个烤鸭的传说</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=4021">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=4021&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_8" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum523346" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=40710&page=1#pid523346', '话题链接已经复制到剪贴板')">9楼</strong>
													<em onclick="$('postmessage_523346').className='t_bigfont'">大</em>							<em onclick="$('postmessage_523346').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_523346').className='t_smallfont'">小</em>												发表于 2010-3-19 22:46&nbsp;																					<a href="viewthread.php?tid=40710&amp;page=1&amp;authorid=4021" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_8"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_8"></div><div id="ad_thread4_8"></div>
													<h2>速度确实快了些</h2>
						
						
																											<div id="postmessage_523346" class="t_msgfont">怎样使用多个配置？<br />
<br />
盼高手汉化<br />
<br />
[<i> 本帖最后由 alexander982 于 2010-3-19 22:48 编辑 </i>]</div>

							
							
							
							
															<div id="post_rate_div_523346"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo523346_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=4021" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=40710&amp;repquote=523346&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 523346)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_8"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid523351" summary="pid523351" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=11939" target="_blank" id="userinfo523351" class="dropmenu" onmouseover="showMenu(this.id)">shanyun</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=11939">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=11939&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_9" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum523351" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=40710&page=1#pid523351', '话题链接已经复制到剪贴板')">10楼</strong>
													<em onclick="$('postmessage_523351').className='t_bigfont'">大</em>							<em onclick="$('postmessage_523351').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_523351').className='t_smallfont'">小</em>												发表于 2010-3-19 22:49&nbsp;																					<a href="viewthread.php?tid=40710&amp;page=1&amp;authorid=11939" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_9"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_9"></div><div id="ad_thread4_9"></div>
						
						
																											<div id="postmessage_523351" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>萧易寒</i> 于 2010-3-19 22:06 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=523296&amp;ptid=40710" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
楼主的ssh端口号是4位以上的吧？<br />
貌似MyEntunnel对高端口号的SSH有bug </blockquote></div>我的服务器开放了4个端口，我用的是22端口。淘宝买的，才22个人在使用，6元一月，很不错。</div>

							
							
							
							
															<div id="post_rate_div_523351"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo523351_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=11939" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=40710&amp;repquote=523351&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 523351)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_9"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid523355" summary="pid523355" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=11939" target="_blank" id="userinfo523355" class="dropmenu" onmouseover="showMenu(this.id)">shanyun</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=11939">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=11939&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_10" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum523355" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=40710&page=1#pid523355', '话题链接已经复制到剪贴板')">11楼</strong>
													<em onclick="$('postmessage_523355').className='t_bigfont'">大</em>							<em onclick="$('postmessage_523355').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_523355').className='t_smallfont'">小</em>												发表于 2010-3-19 22:50&nbsp;																					<a href="viewthread.php?tid=40710&amp;page=1&amp;authorid=11939" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_10"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_10"></div><div id="ad_thread4_10"></div>
						
						
																											<div id="postmessage_523355" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>alexander982</i> 于 2010-3-19 22:46 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=523346&amp;ptid=40710" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
怎样使用多个配置？<br />
<br />
盼高手汉化 </blockquote></div>傻瓜软件，不用汉化了吧，设置很简单的，就是功能比MyT多，所以就觉得有点难度，其实光使用代理的话，很多功能都用不上的。</div>

							
							
							
							
															<div id="post_rate_div_523355"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo523355_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=11939" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=40710&amp;repquote=523355&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 523355)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_10"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid523398" summary="pid523398" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=4021" target="_blank" id="userinfo523398" class="dropmenu" onmouseover="showMenu(this.id)">alexander982</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">肆零贰壹号组员//道貌岸然的知心大哥//伪爱情专家//傻*英雄主义者//一个烤鸭的传说</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=4021">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=4021&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_11" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum523398" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=40710&page=1#pid523398', '话题链接已经复制到剪贴板')">12楼</strong>
													<em onclick="$('postmessage_523398').className='t_bigfont'">大</em>							<em onclick="$('postmessage_523398').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_523398').className='t_smallfont'">小</em>												发表于 2010-3-19 23:19&nbsp;																					<a href="viewthread.php?tid=40710&amp;page=1&amp;authorid=4021" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_11"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_11"></div><div id="ad_thread4_11"></div>
						
						
																											<div id="postmessage_523398" class="t_msgfont">上次裟组提供的8条demo，刚才验证了一下只有四条能有了。<br />
<br />
服务器地址：207.182.151.19<br />
用户名：demobye<br />
密码：password<br />
端口： 27015<br />
<br />
服务器地址：206.212.253.54<br />
用户名：demo<br />
密码：input-button<br />
端口： 5205<br />
<br />
服务器地址：204.124.181.194<br />
用户名：cpdemo<br />
密码：demopass<br />
端口： 22<br />
<br />
服务器地址：67.228.94.72<br />
用户名：demoweb<br />
密码：zaq1xsw2<br />
端口： 7277</div>

							
							
							
							
															<div id="post_rate_div_523398"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo523398_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=4021" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=40710&amp;repquote=523398&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 523398)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_11"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid523605" summary="pid523605" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=11595" target="_blank" id="userinfo523605" class="dropmenu" onmouseover="showMenu(this.id)">zzug</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=11595">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=11595&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_12" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum523605" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=40710&page=1#pid523605', '话题链接已经复制到剪贴板')">13楼</strong>
													<em onclick="$('postmessage_523605').className='t_bigfont'">大</em>							<em onclick="$('postmessage_523605').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_523605').className='t_smallfont'">小</em>												发表于 2010-3-20 08:37&nbsp;																					<a href="viewthread.php?tid=40710&amp;page=1&amp;authorid=11595" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_12"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_12"></div><div id="ad_thread4_12"></div>
						
						
																											<div id="postmessage_523605" class="t_msgfont">给大家说个好消息，plink最新开发版解决了速度慢的这个问题，使用最新开发板的myentunnel速度和tunnelier一样快了，大家可以继续使用myentunnel而不必忍受tnnelier了，详情请看<a href="http://igfw.tk/archives/166" target="_blank">http://igfw.tk/archives/166</a></div>

							
							
							
							
															<div id="post_rate_div_523605"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo523605_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=11595" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=40710&amp;repquote=523605&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 523605)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_12"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid524440" summary="pid524440" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2213" target="_blank" id="userinfo524440" class="dropmenu" onmouseover="showMenu(this.id)">核子力量</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">Twitter.com/hzpower</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2213">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2213&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_13" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum524440" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=40710&page=1#pid524440', '话题链接已经复制到剪贴板')">14楼</strong>
													<em onclick="$('postmessage_524440').className='t_bigfont'">大</em>							<em onclick="$('postmessage_524440').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_524440').className='t_smallfont'">小</em>												发表于 2010-3-20 22:40&nbsp;																					<a href="viewthread.php?tid=40710&amp;page=1&amp;authorid=2213" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_13"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_13"></div><div id="ad_thread4_13"></div>
						
						
																											<div id="postmessage_524440" class="t_msgfont">Bitvise Tunnelier 官方推荐便携版(绿色版)下载地址：<a href="http://tp.vbap.com.au/download" target="_blank">http://tp.vbap.com.au/download</a> （需翻墙）<br />
在小众软件找到的</div>

							
							
							
							
															<div id="post_rate_div_524440"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo524440_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://twitter.com/hzpower" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=2213" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=40710&amp;repquote=524440&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 524440)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_13"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid524631" summary="pid524631" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7221" target="_blank" id="userinfo524631" class="dropmenu" onmouseover="showMenu(this.id)">8th.gua</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7221">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7221&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_14" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum524631" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=40710&page=1#pid524631', '话题链接已经复制到剪贴板')">15楼</strong>
													<em onclick="$('postmessage_524631').className='t_bigfont'">大</em>							<em onclick="$('postmessage_524631').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_524631').className='t_smallfont'">小</em>												发表于 2010-3-21 01:54&nbsp;																					<a href="viewthread.php?tid=40710&amp;page=1&amp;authorid=7221" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_14"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_14"></div><div id="ad_thread4_14"></div>
						
						
																											<div id="postmessage_524631" class="t_msgfont">测试完毕：<br />
在此处下载plink dev版：<a href="http://tartarus.org/~simon/putty-snapshots/x86/plink.exe" target="_blank">http://tartarus.org/~simon/putty-snapshots/x86/plink.exe</a><br />
下载完后，将此文件替换MyEnTunnel安装文件夹里的plink.exe<br />
然后照常运行MyEnTunnel<br />
<br />
youtube视频速度明显提高<br />
<br />
[<i> 本帖最后由 8th.gua 于 2010-3-21 01:56 编辑 </i>]</div>

							
							
							
							
															<div id="post_rate_div_524631"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo524631_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=7221" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=40710&amp;repquote=524631&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 524631)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_14"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid525263" summary="pid525263" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6873" target="_blank" id="userinfo525263" class="dropmenu" onmouseover="showMenu(this.id)">萧易寒</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6873">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6873&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_15" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum525263" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=40710&page=1#pid525263', '话题链接已经复制到剪贴板')">16楼</strong>
													<em onclick="$('postmessage_525263').className='t_bigfont'">大</em>							<em onclick="$('postmessage_525263').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_525263').className='t_smallfont'">小</em>												发表于 2010-3-21 16:09&nbsp;																					<a href="viewthread.php?tid=40710&amp;page=1&amp;authorid=6873" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_15"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_15"></div><div id="ad_thread4_15"></div>
													<h2>回复 15楼 8th.gua 的话题</h2>
						
						
																											<div id="postmessage_525263" class="t_msgfont">putty和plink停止开发好多年了，最后的版本就是0.60beta<br />
哪来的dev版？</div>

							
							
							
							
															<div id="post_rate_div_525263"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo525263_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=6873" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=40710&amp;repquote=525263&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 525263)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_15"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid525270" summary="pid525270" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10562" target="_blank" id="userinfo525270" class="dropmenu" onmouseover="showMenu(this.id)">lzk800</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10562">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10562&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_16" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum525270" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=40710&page=1#pid525270', '话题链接已经复制到剪贴板')">17楼</strong>
													<em onclick="$('postmessage_525270').className='t_bigfont'">大</em>							<em onclick="$('postmessage_525270').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_525270').className='t_smallfont'">小</em>												发表于 2010-3-21 16:11&nbsp;																					<a href="viewthread.php?tid=40710&amp;page=1&amp;authorid=10562" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_16"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_16"></div><div id="ad_thread4_16"></div>
						
						
																											<div id="postmessage_525270" class="t_msgfont">嗯 plink换成dev版就ok了</div>

							
							
							
							
															<div id="post_rate_div_525270"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo525270_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=10562" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=40710&amp;repquote=525270&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 525270)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_16"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid525491" summary="pid525491" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=11595" target="_blank" id="userinfo525491" class="dropmenu" onmouseover="showMenu(this.id)">zzug</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=11595">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=11595&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_17" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum525491" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=40710&page=1#pid525491', '话题链接已经复制到剪贴板')">18楼</strong>
													<em onclick="$('postmessage_525491').className='t_bigfont'">大</em>							<em onclick="$('postmessage_525491').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_525491').className='t_smallfont'">小</em>												发表于 2010-3-21 18:57&nbsp;																					<a href="viewthread.php?tid=40710&amp;page=1&amp;authorid=11595" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_17"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_17"></div><div id="ad_thread4_17"></div>
						
						
																											<div id="postmessage_525491" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>萧易寒</i> 于 2010-3-21 16:09 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=525263&amp;ptid=40710" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
putty和plink停止开发好多年了，最后的版本就是0.60beta<br />
哪来的dev版？ </blockquote></div>你仔细看看 <a href="http://putty.very.rulez.org/download.html" target="_blank">http://putty.very.rulez.org/download.html</a> 这个页面然后下载比较下就明白了！</div>

							
							
							
							
															<div id="post_rate_div_525491"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo525491_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=11595" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=40710&amp;repquote=525491&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 525491)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_17"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid525651" summary="pid525651" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 <a name="lastpost"></a>					<cite>											<a href="space.php?uid=6873" target="_blank" id="userinfo525651" class="dropmenu" onmouseover="showMenu(this.id)">萧易寒</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6873">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6873&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_18" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum525651" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=40710&page=1#pid525651', '话题链接已经复制到剪贴板')">19楼</strong>
													<em onclick="$('postmessage_525651').className='t_bigfont'">大</em>							<em onclick="$('postmessage_525651').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_525651').className='t_smallfont'">小</em>												发表于 2010-3-21 20:33&nbsp;																					<a href="viewthread.php?tid=40710&amp;page=1&amp;authorid=6873" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_18"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_18"></div><div id="ad_thread4_18"></div>
													<h2>回复 18楼 zzug 的话题</h2>
						
						
																											<div id="postmessage_525651" class="t_msgfont">看到了，<br />
试过了，不好意思原来是我搞错了<br />
测试了一下，plink 0.6 beta在高端口下下载会断线，低端口不会<br />
plink 0.6 dev很正常，不会断线，网速感觉也有提升<br />
谢谢</div>

							
							
							
							
															<div id="post_rate_div_525651"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo525651_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=6873" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=40710&amp;repquote=525651&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 525651)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_18"></div>				</div>
			</td>
		</tr>
		</table>
		</div>
</form>





<div class="pages_btns">
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=40710&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=40710&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
				<span class="postbtn" id="newspecialtmp" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=40710&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

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

	<form method="post" id="postform" action="post.php?action=reply&amp;fid=26&amp;tid=40710&amp;extra=&amp;replysubmit=yes" onSubmit="return validate(this)">
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
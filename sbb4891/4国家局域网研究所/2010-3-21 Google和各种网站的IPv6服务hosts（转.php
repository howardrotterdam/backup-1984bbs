<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<title>Google和各种网站的IPv6服务hosts（转 - 国家局域网研究所 -  1984bbs.com </title>
<meta name="keywords" content="" />
<meta name="MSSmartTagsPreventParsing" content="True" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<link rel="archives" title="1984bbs.com" href="https://1984bbs.com/archiver/" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_viewthread.css" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_common.css" />
<script type="text/javascript">
	var discuz_uid = 13019;var IMGDIR = 'images/default';var attackevasive = '0';var gid = 0;var STYLEID = '1';
	gid = parseInt('3');var fid = parseInt('26');var tid = parseInt('40830');
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
			<p><a href="index.php" id="forumlist" onmouseover="showMenu(this.id)" class="dropmenu">1984bbs.com</a> &raquo; <a href="forumdisplay.php?fid=26">国家局域网研究所</a> &raquo; Google和各种网站的IPv6服务hosts（转</p>
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
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=40830&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=40830&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
				<span class="postbtn" id="newspecial" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=40830&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

	<ul class="popupmenu_popup newspecialmenu" id="newspecial_menu" style="display: none">
		<li><a href="post.php?action=newthread&amp;fid=26&amp;extra=">发新话题</a></li>
		<li class="poll"><a href="post.php?action=newthread&amp;fid=26&amp;extra=&amp;special=1">发布投票</a></li>													</ul>

<form method="post" name="modactions">
	<input type="hidden" name="formhash" value="823c9fa2" />
	<div class="mainbox viewthread">
		<span class="headactions">
					<a href="my.php?item=favorites&amp;tid=40830" id="ajax_favorite" onclick="ajaxmenu(event, this.id, 3000, 0)">收藏</a>
			<a href="my.php?item=subscriptions&amp;subadd=40830" id="ajax_subscription" onclick="ajaxmenu(event, this.id, 3000, null, 0)">订阅</a>
			<a href="misc.php?action=emailfriend&amp;tid=40830" id="emailfriend" onclick="ajaxmenu(event, this.id, 9000000, null, 0)">推荐</a>
				<a href="viewthread.php?action=printable&amp;tid=40830" target="_blank" class="notabs">打印</a>
				</span>
		<h1>Google和各种网站的IPv6服务hosts（转		</h1>
							<table id="pid524745" summary="pid524745" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=11326" target="_blank" id="userinfo524745" class="dropmenu" onmouseover="showMenu(this.id)">flld</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=11326">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=11326&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_0" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum524745" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=40830&page=1#pid524745', '话题链接已经复制到剪贴板')">1楼</strong>
													<em onclick="$('postmessage_524745').className='t_bigfont'">大</em>							<em onclick="$('postmessage_524745').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_524745').className='t_smallfont'">小</em>												发表于 2010-3-21 09:32&nbsp;																					<a href="viewthread.php?tid=40830&amp;page=1&amp;authorid=11326" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_0"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_0"></div><div id="ad_thread4_0"></div>
													<h2>Google和各种网站的IPv6服务hosts（转</h2>
						
						
																											<div id="postmessage_524745" class="t_msgfont">笔者是使用的网络是普通家庭用ADSL，Windows7操作系统，无须任何设置添加即可使用。<br />
XP默认是没有安装ipv6的，所以要运行 ipv6 /install 进行安装。<br />
想要利用ipv6访问某个网站，就需要该网站本身拥有ipv6地址，照hosts文件内容格式添加即可。<br />
-----------------------------------------------------------------------------------------<br />
看到好多朋友都在用puff，其实如果用ipv6就可以直接连接了，不需要什么翻墙代理。并非原创，只是看到大家似乎更新的比较辛苦。。。<br />
把hosts.rar中的文件放到C:\windows\system32\drivers\etc下覆盖即可。<br />
hosts文件内容来自 谷歌文档： Google和各种网站的IPv6服务hosts&nbsp;&nbsp;<br />
不过可能有些朋友连 Google Docs 也进不去。。。因此直接把完好的hosts文件打包上传了。 <br />
嗯，看 youtube，上Twitter都很正常。<br />
<br />
我在自己机器Windows7上一直使用的很好，不过据说XP要用 ipv6 /install 后才能使用。。。<br />
下面是部分 hosts 内容。。。。<br />
#Google和各种网站的IPv6服务hosts <br />
#利用IPv6技术翻墙，保证Google服务可用，校园网用户使用IPv6应该不收取上网费用（至少我们学校如此）<br />
#最下方有各种网站的IPv6hosts列表<br />
#欢迎转载，请注明来源，谢谢 <br />
#本文的发布地址：<a href="http://docs.google.com/View?id=dfkdmxnt_61d9ck9ffq" target="_blank">http://docs.google.com/View?id=dfkdmxnt_61d9ck9ffq</a><br />
#本文的共享链接：<a href="http://docs.google.com/Doc?docid=0ARhAbsvps1PlZGZrZG14bnRfNjFkOWNrOWZmcQ&amp;hl=zh_CN" target="_blank">http://docs.google.com/Doc?docid ... OWZmcQ&amp;hl=zh_CN</a><br />
#表格版的host列表地址：<a href="http://spreadsheets.google.com/ccc?key=0AhhAbsvps1PldEVXVzBkR3hBaWFnbEQ0OWIwMU5ycmc&amp;hl=zh_CN" target="_blank">http://spreadsheets.google.com/c ... U5ycmc&amp;hl=zh_CN</a><br />
#有新的Google地址需要添加？请在这里提交，帮助我完善此列表，谢谢～<br />
#欢迎穿越传阅<br />
#大幅更新！请往下看！所有GoogleIPv6地址变更！支持https加密！<br />
<br />
<br />
<br />
#hosts文件位置： <br />
#C:\Windows\System32\drivers\etc （Windows中） <br />
#/etc （Linux中） <br />
#用文本打开hosts文件，复制以下内容到hosts文件中，保存即可（hosts文件没有后缀）<br />
#关闭某个IPv6的转发请在那一行的最前面添加#号，启用请去除最前面#号，每行中间的#号是为了区分地址和注释，不用理睬- -<br />
<br />
<br />
<br />
# Copyright (c) 1993-2006 Microsoft Corp. <br />
# <br />
# This is a sample HOSTS file used by Microsoft TCP/IP for Windows. <br />
# <br />
# This file contains the mappings of IP addresses to host names. Each <br />
# entry should be kept on an individual line. The IP address should <br />
# be placed in the first column followed by the corresponding host name. <br />
# The IP address and the host name should be separated by at least one <br />
# space. <br />
# <br />
# Additionally, comments (such as these) may be inserted on individual <br />
# lines or following the machine name denoted by a '#' symbol. <br />
# <br />
# For example: <br />
# <br />
# 102.54.94.97 rhino.acme.com # source server <br />
# 38.25.63.10 x.acme.com # x client host <br />
<br />
<br />
127.0.0.1 localhost <br />
::1 localhost<br />
<br />
<br />
<br />
<br />
<br />
###Google网站<br />
<br />
<br />
<br />
#下列红色地址为官方给出的准确地址，可以使用正确的https加密连接<br />
#以下列表中地址以亚洲太平洋服务器Address (Asia-Pacific)为主（2001:4860:8004::*）<br />
##Google.com Google.com<br />
2001:4860:8004::62 google.com #主页<br />
2001:4860:8004::c1 m.google.com #Google移动版<br />
2001:4860:8004::54 accounts.google.com #帐户<br />
2001:4860:8004::62 id.google.com #帐号登录<br />
2001:4860:8004::62 id.l.google.com #<br />
2001:4860:8004::62 gg.google.com #广告？ <br />
2001:4860:8004::62 safebrowsing.clients.google.com #安全浏览客户端服务器<br />
2001:4860:8004::62 ns1.google.com #域名系统服务器ns-soa/ns<br />
2001:4860:8004::62 ns2.google.com #域名系统服务器ns<br />
2001:4860:8004::62 ns3.google.com #域名系统服务器ns<br />
2001:4860:8004::62 ns4.google.com #域名系统服务器ns<br />
2001:4860:8004::62 services.google.com #服务申请<br />
2001:4860:8004::62 feedproxy.google.com #Feed代理<br />
2001:4860:8004::d2 jmt0.google.com #未知<br />
2001:4860:8004::62 googlemashups.l.google.com #位置<br />
##Google.cn 谷歌<br />
2401:3800:c001::2c <a href="http://www.google.cn" target="_blank">www.google.cn</a> #主页<br />
2401:3800:c001::2c g.cn #主页<br />
<br />
2401:3800:c001::2c google.cn #主页<br />
<br />
2401:3800:c001::2c ipv6cn.l.google.com <br />
#IPv6：ipv6.google.cn<br />
##Google.com.tw Google台湾<br />
2001:4860:8004::2f <a href="http://www.google.com.tw" target="_blank">www.google.com.tw</a> #主页<br />
2001:4860:8004::2f picasaweb.google.com.tw #picasaweb<br />
<br />
##Google.co.jp Google日本<br />
2a00:1450:8006::30 <a href="http://www.google.co.jp" target="_blank">www.google.co.jp</a><br />
#IPv6：ipv6.google.co.jp<br />
完整hosts&nbsp; &nbsp;文件打包下载：<a href="http://freakshare.net/files/r9g7l2cj/Google------------------IPv6------hosts.rar.html" target="_blank">http://freakshare.net/files/r9g7 ... -----hosts.rar.html</a></div>

							
							
							
							
															<div id="post_rate_div_524745"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo524745_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=11326" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=40830&amp;repquote=524745&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 524745)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_0"></div>				</div>
			</td>
		</tr>
		</table>
		</div><div class="ad_column" id="ad_interthread"><a href="/viewthread.php?tid=54699" target="_blank" style="color:red;">1984bbs是一个非营利项目，它需要您的捐助！</font></a>		</div>
	<div class="mainbox viewthread">
			<table id="pid556023" summary="pid556023" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=4534" target="_blank" id="userinfo556023" class="dropmenu" onmouseover="showMenu(this.id)">123ddw</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">逼事球办</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=4534">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=4534&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_1" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum556023" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=40830&page=1#pid556023', '话题链接已经复制到剪贴板')">2楼</strong>
													<em onclick="$('postmessage_556023').className='t_bigfont'">大</em>							<em onclick="$('postmessage_556023').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_556023').className='t_smallfont'">小</em>												发表于 2010-4-9 16:17&nbsp;																					<a href="viewthread.php?tid=40830&amp;page=1&amp;authorid=4534" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_1"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_1"></div><div id="ad_thread4_1"></div>
						
						
																											<div id="postmessage_556023" class="t_msgfont">真找这个嘞，顶起！</div>

							
							
							
							
															<div id="post_rate_div_556023"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo556023_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=4534" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=40830&amp;repquote=556023&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 556023)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_1"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid556340" summary="pid556340" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2930" target="_blank" id="userinfo556340" class="dropmenu" onmouseover="showMenu(this.id)">SrAcer</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">党强加于人的世界观在无法理解它的人们那里最容易被接受。——《１９８４》</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2930">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2930&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_2" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum556340" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=40830&page=1#pid556340', '话题链接已经复制到剪贴板')">3楼</strong>
													<em onclick="$('postmessage_556340').className='t_bigfont'">大</em>							<em onclick="$('postmessage_556340').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_556340').className='t_smallfont'">小</em>												发表于 2010-4-9 20:25&nbsp;																					<a href="viewthread.php?tid=40830&amp;page=1&amp;authorid=2930" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_2"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_2"></div><div id="ad_thread4_2"></div>
						
						
																											<div id="postmessage_556340" class="t_msgfont">谢谢！赞！</div>

							
							
							
							
															<div id="post_rate_div_556340"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo556340_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=2930" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=40830&amp;repquote=556340&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 556340)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_2"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid558358" summary="pid558358" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=11939" target="_blank" id="userinfo558358" class="dropmenu" onmouseover="showMenu(this.id)">shanyun</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=11939">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=11939&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_3" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum558358" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=40830&page=1#pid558358', '话题链接已经复制到剪贴板')">4楼</strong>
													<em onclick="$('postmessage_558358').className='t_bigfont'">大</em>							<em onclick="$('postmessage_558358').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_558358').className='t_smallfont'">小</em>												发表于 2010-4-11 12:49&nbsp;																					<a href="viewthread.php?tid=40830&amp;page=1&amp;authorid=11939" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_3"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_3"></div><div id="ad_thread4_3"></div>
						
						
																											<div id="postmessage_558358" class="t_msgfont">赞一个&nbsp;&nbsp;虽然我不用IP6</div>

							
							
							
							
															<div id="post_rate_div_558358"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo558358_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=11939" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=40830&amp;repquote=558358&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 558358)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_3"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid558484" summary="pid558484" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8351" target="_blank" id="userinfo558484" class="dropmenu" onmouseover="showMenu(this.id)">isonomy</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8351">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8351&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_4" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum558484" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=40830&page=1#pid558484', '话题链接已经复制到剪贴板')">5楼</strong>
													<em onclick="$('postmessage_558484').className='t_bigfont'">大</em>							<em onclick="$('postmessage_558484').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_558484').className='t_smallfont'">小</em>												发表于 2010-4-11 14:57&nbsp;																					<a href="viewthread.php?tid=40830&amp;page=1&amp;authorid=8351" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_4"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_4"></div><div id="ad_thread4_4"></div>
						
						
																											<div id="postmessage_558484" class="t_msgfont">试用成功</div>

							
							
							
							
															<div id="post_rate_div_558484"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo558484_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=8351" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=40830&amp;repquote=558484&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 558484)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_4"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid558642" summary="pid558642" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2271" target="_blank" id="userinfo558642" class="dropmenu" onmouseover="showMenu(this.id)">神仙一溜烟</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">杵君</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2271">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2271&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_5" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum558642" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=40830&page=1#pid558642', '话题链接已经复制到剪贴板')">6楼</strong>
													<em onclick="$('postmessage_558642').className='t_bigfont'">大</em>							<em onclick="$('postmessage_558642').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_558642').className='t_smallfont'">小</em>												发表于 2010-4-11 17:25&nbsp;																					<a href="viewthread.php?tid=40830&amp;page=1&amp;authorid=2271" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_5"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_5"></div><div id="ad_thread4_5"></div>
						
						
																											<div id="postmessage_558642" class="t_msgfont">如果原先能翻墙的， 再用这个会不能翻墙。</div>

							
							
							
							
															<div id="post_rate_div_558642"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo558642_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=2271" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=40830&amp;repquote=558642&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 558642)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_5"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid559610" summary="pid559610" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=4662" target="_blank" id="userinfo559610" class="dropmenu" onmouseover="showMenu(this.id)">askboy</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=4662">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=4662&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_6" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum559610" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=40830&page=1#pid559610', '话题链接已经复制到剪贴板')">7楼</strong>
													<em onclick="$('postmessage_559610').className='t_bigfont'">大</em>							<em onclick="$('postmessage_559610').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_559610').className='t_smallfont'">小</em>												发表于 2010-4-12 12:31&nbsp;																					<a href="viewthread.php?tid=40830&amp;page=1&amp;authorid=4662" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_6"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_6"></div><div id="ad_thread4_6"></div>
						
						
																											<div id="postmessage_559610" class="t_msgfont">2001:4860:8004::62这种类似的就是ipv6地址&nbsp;&nbsp;<br />
是否与之前的ipv4地址一样&nbsp;&nbsp;可以直接复制到地址栏进入&nbsp; &nbsp; 测试当前网络是否支持ipv6</div>

							
							
							
							
															<div id="post_rate_div_559610"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo559610_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=4662" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=40830&amp;repquote=559610&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 559610)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_6"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid563142" summary="pid563142" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=13029" target="_blank" id="userinfo563142" class="dropmenu" onmouseover="showMenu(this.id)">寂寞的影子</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=13029">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=13029&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_7" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum563142" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=40830&page=1#pid563142', '话题链接已经复制到剪贴板')">8楼</strong>
													<em onclick="$('postmessage_563142').className='t_bigfont'">大</em>							<em onclick="$('postmessage_563142').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_563142').className='t_smallfont'">小</em>												发表于 2010-4-14 18:36&nbsp;																					<a href="viewthread.php?tid=40830&amp;page=1&amp;authorid=13029" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_7"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_7"></div><div id="ad_thread4_7"></div>
						
						
																											<div id="postmessage_563142" class="t_msgfont">有点技术性的文章，做下好好看看</div>

							
							
							
							
															<div id="post_rate_div_563142"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo563142_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=13029" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=40830&amp;repquote=563142&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 563142)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_7"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid563145" summary="pid563145" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=11745" target="_blank" id="userinfo563145" class="dropmenu" onmouseover="showMenu(this.id)">风中凌乱</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=11745">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=11745&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_8" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum563145" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=40830&page=1#pid563145', '话题链接已经复制到剪贴板')">9楼</strong>
													<em onclick="$('postmessage_563145').className='t_bigfont'">大</em>							<em onclick="$('postmessage_563145').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_563145').className='t_smallfont'">小</em>												发表于 2010-4-14 18:38&nbsp;																					<a href="viewthread.php?tid=40830&amp;page=1&amp;authorid=11745" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_8"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_8"></div><div id="ad_thread4_8"></div>
						
						
																											<div id="postmessage_563145" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>那个谁</i> 于 2010-4-14 12:58 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=562659&amp;ptid=40830" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
有没有xp 装好了的？我用 ipv6 install 了之后还是不行。网上文章　<a href="http://ipv6.jx.edu.cn/ipv6-cfgXP.htm" target="_blank">http://ipv6.jx.edu.cn/ipv6-cfgXP.htm</a>　说还要做隧道连接，，，这个要连到哪里啊？<br />
<br />
　　4、如果你是在IPV4网络中，你需要与IPV6网络进行隧道连 ... </blockquote></div>直接把命令敲进去就可以了</div>

							
							
							
							
															<div id="post_rate_div_563145"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo563145_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=11745" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=40830&amp;repquote=563145&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 563145)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_8"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid563483" summary="pid563483" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=11051" target="_blank" id="userinfo563483" class="dropmenu" onmouseover="showMenu(this.id)">听到涛声</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=11051">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=11051&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_9" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum563483" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=40830&page=1#pid563483', '话题链接已经复制到剪贴板')">10楼</strong>
													<em onclick="$('postmessage_563483').className='t_bigfont'">大</em>							<em onclick="$('postmessage_563483').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_563483').className='t_smallfont'">小</em>												发表于 2010-4-14 22:23&nbsp;																					<a href="viewthread.php?tid=40830&amp;page=1&amp;authorid=11051" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_9"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_9"></div><div id="ad_thread4_9"></div>
						
						
																											<div id="postmessage_563483" class="t_msgfont">ipv6果然是好东东，ipv4的hosts出一个封一个……</div>

							
							
							
							
															<div id="post_rate_div_563483"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo563483_menu" style="display: none;">
										<div class="imicons">
												<a href="http://wpa.qq.com/msgrd?V=1&amp;Uin=401881046&amp;Site=1984bbs.com&amp;Menu=yes" target="_blank"><img src="images/default/qq.gif" alt="QQ" /></a>																							</div>
										<dl></dl>
										<p><a href="space.php?uid=11051" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=40830&amp;repquote=563483&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 563483)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_9"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid581772" summary="pid581772" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=13287" target="_blank" id="userinfo581772" class="dropmenu" onmouseover="showMenu(this.id)">babyss92548</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=13287">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=13287&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_10" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum581772" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=40830&page=1#pid581772', '话题链接已经复制到剪贴板')">11楼</strong>
													<em onclick="$('postmessage_581772').className='t_bigfont'">大</em>							<em onclick="$('postmessage_581772').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_581772').className='t_smallfont'">小</em>												发表于 2010-4-25 00:17&nbsp;																					<a href="viewthread.php?tid=40830&amp;page=1&amp;authorid=13287" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_10"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_10"></div><div id="ad_thread4_10"></div>
						
						
																											<div id="postmessage_581772" class="t_msgfont">更新了吗&nbsp;&nbsp;twitter上不去吧</div>

							
							
							
							
															<div id="post_rate_div_581772"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo581772_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=13287" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=40830&amp;repquote=581772&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 581772)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_10"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid581866" summary="pid581866" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12126" target="_blank" id="userinfo581866" class="dropmenu" onmouseover="showMenu(this.id)">ottovon</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">@ottovonconstant </p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12126">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12126&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_11" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum581866" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=40830&page=1#pid581866', '话题链接已经复制到剪贴板')">12楼</strong>
													<em onclick="$('postmessage_581866').className='t_bigfont'">大</em>							<em onclick="$('postmessage_581866').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_581866').className='t_smallfont'">小</em>												发表于 2010-4-25 02:03&nbsp;																					<a href="viewthread.php?tid=40830&amp;page=1&amp;authorid=12126" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_11"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_11"></div><div id="ad_thread4_11"></div>
						
						
																											<div id="postmessage_581866" class="t_msgfont">留中，IPV6很快要来了~</div>

							
							
							
							
															<div id="post_rate_div_581866"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo581866_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://www.liuzijian.com" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=12126" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=40830&amp;repquote=581866&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 581866)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_11"></div>				</div>
			</td>
		</tr>
		</table>
		</div>
</form>





<div class="pages_btns">
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=40830&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=40830&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
				<span class="postbtn" id="newspecialtmp" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=40830&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

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

	<form method="post" id="postform" action="post.php?action=reply&amp;fid=26&amp;tid=40830&amp;extra=&amp;replysubmit=yes" onSubmit="return validate(this)">
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
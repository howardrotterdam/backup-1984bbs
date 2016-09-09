<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<title>做个低俗的翻墙人系列教程—VPN篇 【0611更新】 - 国家局域网研究所 -  1984bbs.com </title>
<meta name="keywords" content="" />
<meta name="MSSmartTagsPreventParsing" content="True" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<link rel="archives" title="1984bbs.com" href="https://1984bbs.com/archiver/" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_viewthread.css" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_common.css" />
<script type="text/javascript">
	var discuz_uid = 13019;var IMGDIR = 'images/default';var attackevasive = '0';var gid = 0;var STYLEID = '1';
	gid = parseInt('3');var fid = parseInt('26');var tid = parseInt('7648');
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
			<p><a href="index.php" id="forumlist" onmouseover="showMenu(this.id)" class="dropmenu">1984bbs.com</a> &raquo; <a href="forumdisplay.php?fid=26">国家局域网研究所</a> &raquo; 做个低俗的翻墙人系列教程—VPN篇 【0611更新】</p>
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
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=7648&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=7648&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
				<span class="postbtn" id="newspecial" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=7648&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

	<ul class="popupmenu_popup newspecialmenu" id="newspecial_menu" style="display: none">
		<li><a href="post.php?action=newthread&amp;fid=26&amp;extra=">发新话题</a></li>
		<li class="poll"><a href="post.php?action=newthread&amp;fid=26&amp;extra=&amp;special=1">发布投票</a></li>													</ul>

<form method="post" name="modactions">
	<input type="hidden" name="formhash" value="823c9fa2" />
	<div class="mainbox viewthread">
		<span class="headactions">
					<a href="my.php?item=favorites&amp;tid=7648" id="ajax_favorite" onclick="ajaxmenu(event, this.id, 3000, 0)">收藏</a>
			<a href="my.php?item=subscriptions&amp;subadd=7648" id="ajax_subscription" onclick="ajaxmenu(event, this.id, 3000, null, 0)">订阅</a>
			<a href="misc.php?action=emailfriend&amp;tid=7648" id="emailfriend" onclick="ajaxmenu(event, this.id, 9000000, null, 0)">推荐</a>
				<a href="viewthread.php?action=printable&amp;tid=7648" target="_blank" class="notabs">打印</a>
				</span>
		<h1>做个低俗的翻墙人系列教程—VPN篇 【0611更新】		</h1>
							<table id="pid59297" summary="pid59297" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1960" target="_blank" id="userinfo59297" class="dropmenu" onmouseover="showMenu(this.id)">库存袈裟</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">@bruceku 想象力比知识更重要。</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1960">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1960&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_0" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum59297" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=7648&page=1#pid59297', '话题链接已经复制到剪贴板')">1楼</strong>
													<em onclick="$('postmessage_59297').className='t_bigfont'">大</em>							<em onclick="$('postmessage_59297').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_59297').className='t_smallfont'">小</em>												发表于 2009-3-23 12:20&nbsp;																					<a href="viewthread.php?tid=7648&amp;page=1&amp;authorid=1960" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_0"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_0"></div><div id="ad_thread4_0"></div>
													<h2>做个低俗的翻墙人系列教程—VPN篇 【0611更新】</h2>
						
						
																											<div id="postmessage_59297" class="t_msgfont">难度系数：★★☆<br />
<br />
1.什么是VPN?<br />
虚拟专用网络，Virtual Private Network，一种通过加密通道协议链接的企业团体私人网络方案。最大特点是可靠，安全。<br />
<br />
Wiki的比喻很有意思：“虚拟私人网络就像：甲公司某部门的某甲想寄信去乙公司某部门的某乙。某甲已知某乙的地址及部门，但公司与公司之间的信不能注明部门名称。于是，某甲请自己的秘书把指定某乙所收部门的信(某甲可以选择是否以密码与某乙通讯)放在寄去某乙公司地址的大信封中。当乙公司的秘书收到从甲公司寄到乙公司的信件后，该秘书便会把放在该大信封内的指定部门信件以公司内部邮件方式寄给某乙。同样地，某乙会以同样的方式回信给某甲。”<br />
<br />
2．VPN 有什么优点？ <br />
a. 安全、匿名的加密通道。 <br />
b. 防止ISP监听与劫持 。 <br />
c. 访问被封锁的网站、访问不能用代理访问的被屏蔽网站。<br />
d. 无需对每个软件进行代理设置，一旦接入VPN，网络软件的接入都经由VPN接入。<br />
<br />
3.如何设置一个VPN ？ <br />
Windows XP (演示视频：<a href="http://ch.strongvpn.com/vpn_win.shtml" target="_blank">http://ch.strongvpn.com/vpn_win.shtml</a>)<br />
a. 开始菜单 &gt; 设置 &gt;控制面板&gt; 网络链接&gt;创建一个新的链接<br />
<br />
<img src="http://i41.tinypic.com/ighgfn.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
<br />
<img src="http://i40.tinypic.com/2vbo8ip.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
<br />
b. 选择连接到我的工作场所的网络<br />
<br />
<img src="http://i41.tinypic.com/j98uv6.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
<br />
<br />
c. 选择虚拟专用网络连接<br />
<br />
<img src="http://i42.tinypic.com/dwwb5g.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
<br />
d. 给链接起名<br />
<br />
<img src="http://i42.tinypic.com/ifzgxz.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
<br />
e. 如果不是使用拨号上网请选择“不拨初始连接”<br />
<img src="http://i42.tinypic.com/k0t3jn.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
<br />
f. 输入VPN服务器IP 地址（或者网址）<br />
<br />
<img src="http://i41.tinypic.com/2mw9tlg.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
<br />
g. 输入用户名密码 如拨号一般点链接使用吧<br />
<br />
<img src="http://i40.tinypic.com/287ds5.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
<br />
<img src="http://i39.tinypic.com/24gr589.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
<br />
<br />
Windows Vista (演示视频：<a href="http://ch.strongvpn.com/vpn_vista.shtml" target="_blank">http://ch.strongvpn.com/vpn_vista.shtml</a>)<br />
<br />
a. 开始菜单&gt;右击网络<br />
b. 属性<br />
<br />
<img src="http://www.aplusproxy.com/vpn/vpn_vista_001.jpg" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
<br />
c. 下一步, &quot;连接到我的工作场所的网络&quot;<br />
<br />
<img src="http://www.aplusproxy.com/vpn/vpn_vista_002.jpg" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
<br />
d . 输入找到的VPN服务器IP 地址（或者网址）并为链接命名<br />
<br />
<img src="http://www.aplusproxy.com/vpn/vpn_vista_003.jpg" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
<br />
e. 输入用户名、密码<br />
<br />
<img src="http://www.aplusproxy.com/vpn/vpn_vista_004.jpg" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
<br />
f. 点击链接，完成。 <br />
<br />
Mac OS安装示范：<br />
<a href="http://ch.strongvpn.com/vpn_mac.shtml" target="_blank">http://ch.strongvpn.com/vpn_mac.shtml</a><br />
<br />
<br />
<br />
从哪弄免费的VPN ？ <br />
(1). <a href="http://vpn.daili.name/viewthread.php?tid=1" target="_blank">http://vpn.daili.name/viewthread.php?tid=1</a> （需注册） 免费vpn代理(openvpn)使用方法!<br />
<br />
(2). <a href="http://www.relakks.com" target="_blank">www.relakks.com</a> 免费30天的VPN试用 。 <br />
<br />
(3). Hotspot Shield免费的VPN客户端软件 。简单易用速度一般，有广告(Firefox用户使用Adblock可以屏蔽HS的顶部广告)，流量限制5G下载： <a href="http://anchorfree.com/downloads/hotspot-shield/" target="_blank">http://anchorfree.com/downloads/hotspot-shield/</a> 。 <br />
<br />
(4).FirePhoenix轮子出品，谨慎使用。<br />
下载： <a href="http://firephoenix.edoors.com/cms/download.html" target="_blank">http://firephoenix.edoors.com/cms/download.html</a> <br />
说明：<a href="http://firephoenix.edoors.com/cms/documentation-cn.html" target="_blank">http://firephoenix.edoors.com/cms/documentation-cn.html</a><br />
<br />
(5).免费的公共VPN服务的Loki 。 <br />
类似openvpn的共享计划：<a href="http://www.projectloki.com/" target="_blank">http://www.projectloki.com/</a> <br />
下载：<a href="http://www.projectloki.com/download/LokiVPNClientSetup.zip" target="_blank">http://www.projectloki.com/download/LokiVPNClientSetup.zip</a><br />
<br />
(6). VPN123免费测试帐户<br />
国内一加速软件，提供的测试帐户。<br />
下载：<a href="http://www.vpn123.com/download.php" target="_blank">http://www.vpn123.com/download.php</a><br />
帐户发布页面：<a href="http://www.vpn123.com/freetest.php" target="_blank">http://www.vpn123.com/freetest.php</a><br />
国内加速测试账户用满30分钟自动断开,美国|亚洲测试账户用满20分钟自动断开<br />
所有测试账户断开后等待5分钟才能再次登陆<br />
所有测试账户同一IP一天只能登陆三次<br />
<br />
(7). gbridge<br />
<a href="http://www.appinn.com/gbridge/" target="_blank">http://www.appinn.com/gbridge/</a> （来自小众软件）<br />
<br />
(8).VPNshare <br />
VPN接入 PC端，无需手动设置自动检索免费VPN，右击即可接入。<br />
下载地址：<a href="http://download.8558.org/soft/66.htm" target="_blank">http://download.8558.org/soft/66.htm</a><br />
<br />
(9).无名指免费VPN<br />
<br />
论坛版块：<a href="http://bbs.8558.org/forum-41-1.html" target="_blank">http://bbs.8558.org/forum-41-1.html</a><br />
<br />
<br />
(10).UltraVPN<br />
免费，高速，无流量限制<br />
注册 <a href="https://www.ultravpn.fr/account.htm" target="_blank">https://www.ultravpn.fr/account.htm</a> <br />
下载 <a href="https://www.ultravpn.fr/download.htm" target="_blank">https://www.ultravpn.fr/download.htm</a><br />
<br />
(11).CyberGhost VPN <br />
速度不错，连接时有14秒广告，需注册，流量10G/月<br />
<br />
下载 <a href="http://www.cyberghostvpn.com/files/download.php" target="_blank">http://www.cyberghostvpn.com/files/download.php</a><br />
<br />
(12).Alonweb VPN<br />
基于Open VPN，1G/月，速度不错<br />
下载 <a href="http://static.alonweb.com/downloads/openvpn.exe" target="_blank">http://static.alonweb.com/downloads/openvpn.exe</a><br />
注册 <a href="http://www.alonweb.com/user/register" target="_blank">http://www.alonweb.com/user/register</a> （第一项：用户名 第二项：邮箱 第三项、第四项：密码、密码验证 第五项：验证码&lt;区分大小写&gt;，点击完成，去邮箱收信，点击链接确认。使用方法：<a href="http://www.alonweb.com/node/3" target="_blank">http://www.alonweb.com/node/3</a>）<br />
登陆后可在Connection settings选择链接服务器。择优选择速度较快的那个。<br />
<br />
未完待续<br />
<br />
-----------------------------<br />
<br />
上一篇：做个低俗的翻墙人系列教程—在线代理篇 <a href="http://1984bbs.com/viewthread.php?tid=4127" target="_blank">http://1984bbs.com/viewthread.php?tid=4127</a></div>

							
							
							
							
															<div id="post_rate_div_59297"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo59297_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1960" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=7648&amp;repquote=59297&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 59297)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_0"></div>				</div>
			</td>
		</tr>
		</table>
		</div><div class="ad_column" id="ad_interthread"><a href="/viewthread.php?tid=54699" target="_blank" style="color:red;">1984bbs是一个非营利项目，它需要您的捐助！</font></a>		</div>
	<div class="mainbox viewthread">
			<table id="pid59566" summary="pid59566" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=5338" target="_blank" id="userinfo59566" class="dropmenu" onmouseover="showMenu(this.id)">无常</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=5338">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=5338&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_1" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum59566" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=7648&page=1#pid59566', '话题链接已经复制到剪贴板')">2楼</strong>
													<em onclick="$('postmessage_59566').className='t_bigfont'">大</em>							<em onclick="$('postmessage_59566').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_59566').className='t_smallfont'">小</em>												发表于 2009-3-23 17:53&nbsp;																					<a href="viewthread.php?tid=7648&amp;page=1&amp;authorid=5338" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_1"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_1"></div><div id="ad_thread4_1"></div>
						
						
																											<div id="postmessage_59566" class="t_msgfont">我没牛博ip，基本没用，对吧</div>

							
							
							
							
															<div id="post_rate_div_59566"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo59566_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=5338" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=7648&amp;repquote=59566&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 59566)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_1"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid59875" summary="pid59875" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=3149" target="_blank" id="userinfo59875" class="dropmenu" onmouseover="showMenu(this.id)">Raymonda</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">优派幼儿园小班男生</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=3149">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=3149&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_2" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum59875" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=7648&page=1#pid59875', '话题链接已经复制到剪贴板')">3楼</strong>
													<em onclick="$('postmessage_59875').className='t_bigfont'">大</em>							<em onclick="$('postmessage_59875').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_59875').className='t_smallfont'">小</em>												发表于 2009-3-24 00:34&nbsp;																					<a href="viewthread.php?tid=7648&amp;page=1&amp;authorid=3149" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_2"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_2"></div><div id="ad_thread4_2"></div>
						
						
																											<div id="postmessage_59875" class="t_msgfont">非常有价值&nbsp;&nbsp;学习了！</div>

							
							
							
							
															<div id="post_rate_div_59875"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo59875_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=3149" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=7648&amp;repquote=59875&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 59875)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_2"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid59917" summary="pid59917" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2982" target="_blank" id="userinfo59917" class="dropmenu" onmouseover="showMenu(this.id)">olalala</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2982">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2982&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_3" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum59917" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=7648&page=1#pid59917', '话题链接已经复制到剪贴板')">4楼</strong>
													<em onclick="$('postmessage_59917').className='t_bigfont'">大</em>							<em onclick="$('postmessage_59917').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_59917').className='t_smallfont'">小</em>												发表于 2009-3-24 03:11&nbsp;																					<a href="viewthread.php?tid=7648&amp;page=1&amp;authorid=2982" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_3"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_3"></div><div id="ad_thread4_3"></div>
						
						
																											<div id="postmessage_59917" class="t_msgfont">轮子的那些VPN和翻墙软件少用为好，简直就是一个小型的GFW<br />
深度透露出他们和CPC是一个路数，但更为脑残</div>

							
							
							
							
															<div id="post_rate_div_59917"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo59917_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=2982" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=7648&amp;repquote=59917&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 59917)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_3"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid60724" summary="pid60724" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2973" target="_blank" id="userinfo60724" class="dropmenu" onmouseover="showMenu(this.id)">free1989</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">@photobluer</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2973">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2973&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_4" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum60724" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=7648&page=1#pid60724', '话题链接已经复制到剪贴板')">5楼</strong>
													<em onclick="$('postmessage_60724').className='t_bigfont'">大</em>							<em onclick="$('postmessage_60724').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_60724').className='t_smallfont'">小</em>												发表于 2009-3-24 23:49&nbsp;																					<a href="viewthread.php?tid=7648&amp;page=1&amp;authorid=2973" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_4"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_4"></div><div id="ad_thread4_4"></div>
						
						
																											<div id="postmessage_60724" class="t_msgfont">LokiVPN不错。</div>

							
							
							
							
															<div id="post_rate_div_60724"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo60724_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=2973" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=7648&amp;repquote=60724&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 60724)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_4"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid60917" summary="pid60917" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2428" target="_blank" id="userinfo60917" class="dropmenu" onmouseover="showMenu(this.id)">xiahua</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">业余打狗爱好者。新宇大校夸我书法好，锦涛叔叔赞我觉悟高</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2428">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2428&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_5" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum60917" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=7648&page=1#pid60917', '话题链接已经复制到剪贴板')">6楼</strong>
													<em onclick="$('postmessage_60917').className='t_bigfont'">大</em>							<em onclick="$('postmessage_60917').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_60917').className='t_smallfont'">小</em>												发表于 2009-3-25 10:05&nbsp;																					<a href="viewthread.php?tid=7648&amp;page=1&amp;authorid=2428" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_5"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_5"></div><div id="ad_thread4_5"></div>
						
						
																											<div id="postmessage_60917" class="t_msgfont">GBridge 实战效果远不如 hamachi</div>

							
							
							
							
															<div id="post_rate_div_60917"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo60917_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=2428" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=7648&amp;repquote=60917&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 60917)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_5"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid61214" summary="pid61214" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=4619" target="_blank" id="userinfo61214" class="dropmenu" onmouseover="showMenu(this.id)">ac54321</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">小道消息控制薯薯长</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=4619">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=4619&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_6" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum61214" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=7648&page=1#pid61214', '话题链接已经复制到剪贴板')">7楼</strong>
													<em onclick="$('postmessage_61214').className='t_bigfont'">大</em>							<em onclick="$('postmessage_61214').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_61214').className='t_smallfont'">小</em>												发表于 2009-3-25 14:59&nbsp;																					<a href="viewthread.php?tid=7648&amp;page=1&amp;authorid=4619" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_6"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_6"></div><div id="ad_thread4_6"></div>
						
						
																											<div id="postmessage_61214" class="t_msgfont">用GAppProxy感觉很不错，但不知安全性怎么样？<br />
开始安装设置稍微有些麻烦，可参看 <a href="http://steelsnarl.blogspot.com/2009/02/gappproxy.html" target="_blank">http://steelsnarl.blogspot.com/2009/02/gappproxy.html</a></div>

							
							
							
							
															<div id="post_rate_div_61214"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo61214_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=4619" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=7648&amp;repquote=61214&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 61214)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_6"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid114943" summary="pid114943" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1960" target="_blank" id="userinfo114943" class="dropmenu" onmouseover="showMenu(this.id)">库存袈裟</a></cite>
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
						<strong title="复制话题链接到剪贴板" id="postnum114943" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=7648&page=1#pid114943', '话题链接已经复制到剪贴板')">8楼</strong>
													<em onclick="$('postmessage_114943').className='t_bigfont'">大</em>							<em onclick="$('postmessage_114943').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_114943').className='t_smallfont'">小</em>												发表于 2009-6-8 11:02&nbsp;																					<a href="viewthread.php?tid=7648&amp;page=1&amp;authorid=1960" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_7"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_7"></div><div id="ad_thread4_7"></div>
						
						
																											<div id="postmessage_114943" class="t_msgfont">新增两款VPN软件<br />
<br />
09.06.08</div>

							
							
							
							
															<div id="post_rate_div_114943"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo114943_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1960" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=7648&amp;repquote=114943&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 114943)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_7"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid117000" summary="pid117000" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=4373" target="_blank" id="userinfo117000" class="dropmenu" onmouseover="showMenu(this.id)">天屎</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">*#06#</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=4373">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=4373&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_8" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum117000" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=7648&page=1#pid117000', '话题链接已经复制到剪贴板')">9楼</strong>
													<em onclick="$('postmessage_117000').className='t_bigfont'">大</em>							<em onclick="$('postmessage_117000').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_117000').className='t_smallfont'">小</em>												发表于 2009-6-9 23:17&nbsp;																					<a href="viewthread.php?tid=7648&amp;page=1&amp;authorid=4373" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_8"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_8"></div><div id="ad_thread4_8"></div>
						
						
																											<div id="postmessage_117000" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>库存袈裟</i> 于 2009-6-8 11:02 发表 <a href="http://1984bbs.com/redirect.php?goto=findpost&amp;pid=114943&amp;ptid=7648" target="_blank"><img src="http://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
新增两款VPN软件<br />
<br />
09.06.08 </blockquote></div>标题上也加上0608更新吧<br />
<br />
差点错过了</div>

							
							
							
							
															<div id="post_rate_div_117000"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo117000_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=4373" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=7648&amp;repquote=117000&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 117000)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_8"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid118429" summary="pid118429" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1960" target="_blank" id="userinfo118429" class="dropmenu" onmouseover="showMenu(this.id)">库存袈裟</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">@bruceku 想象力比知识更重要。</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1960">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1960&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_9" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum118429" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=7648&page=1#pid118429', '话题链接已经复制到剪贴板')">10楼</strong>
													<em onclick="$('postmessage_118429').className='t_bigfont'">大</em>							<em onclick="$('postmessage_118429').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_118429').className='t_smallfont'">小</em>												发表于 2009-6-11 09:10&nbsp;																					<a href="viewthread.php?tid=7648&amp;page=1&amp;authorid=1960" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_9"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_9"></div><div id="ad_thread4_9"></div>
						
						
																											<div id="postmessage_118429" class="t_msgfont">(12).Alonweb VPN<br />
基于Open VPN，1G流量，速度不错<br />
下载 <a href="http://static.alonweb.com/downloads/openvpn.exe" target="_blank">http://static.alonweb.com/downloads/openvpn.exe</a><br />
注册 <a href="http://www.alonweb.com/user/register" target="_blank">http://www.alonweb.com/user/register</a> （第一项：用户名 第二项：邮箱 第三项、第四项：密码、密码验证 第五项：验证码&lt;区分大小写&gt;，点击完成，去邮箱收信，点击链接确认。使用方法：<a href="http://www.alonweb.com/node/3" target="_blank">http://www.alonweb.com/node/3</a>）<br />
登陆后可在Connection settings选择链接服务器。择优选择速度较快的那个。</div>

							
							
							
							
															<div id="post_rate_div_118429"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo118429_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1960" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=7648&amp;repquote=118429&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 118429)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_9"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid120838" summary="pid120838" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=4676" target="_blank" id="userinfo120838" class="dropmenu" onmouseover="showMenu(this.id)">cqibong</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=4676">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=4676&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_10" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum120838" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=7648&page=1#pid120838', '话题链接已经复制到剪贴板')">11楼</strong>
													<em onclick="$('postmessage_120838').className='t_bigfont'">大</em>							<em onclick="$('postmessage_120838').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_120838').className='t_smallfont'">小</em>												发表于 2009-6-13 09:09&nbsp;																					<a href="viewthread.php?tid=7648&amp;page=1&amp;authorid=4676" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_10"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_10"></div><div id="ad_thread4_10"></div>
						
						
																											<div id="postmessage_120838" class="t_msgfont">这个UltraVPN真是太好用了！</div>

							
							
							
							
															<div id="post_rate_div_120838"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo120838_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=4676" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=7648&amp;repquote=120838&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 120838)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_10"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid135971" summary="pid135971" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=5586" target="_blank" id="userinfo135971" class="dropmenu" onmouseover="showMenu(this.id)">蚂蚁，蚂蚁</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=5586">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=5586&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_11" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum135971" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=7648&page=1#pid135971', '话题链接已经复制到剪贴板')">12楼</strong>
													<em onclick="$('postmessage_135971').className='t_bigfont'">大</em>							<em onclick="$('postmessage_135971').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_135971').className='t_smallfont'">小</em>												发表于 2009-6-25 08:25&nbsp;																					<a href="viewthread.php?tid=7648&amp;page=1&amp;authorid=5586" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_11"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_11"></div><div id="ad_thread4_11"></div>
						
						
																											<div id="postmessage_135971" class="t_msgfont">急寻！支持64位系统的VPN客户端</div>

							
							
							
							
															<div id="post_rate_div_135971"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo135971_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=5586" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=7648&amp;repquote=135971&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 135971)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_11"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid165245" summary="pid165245" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7723" target="_blank" id="userinfo165245" class="dropmenu" onmouseover="showMenu(this.id)">Mclovin</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7723">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7723&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_12" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum165245" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=7648&page=1#pid165245', '话题链接已经复制到剪贴板')">13楼</strong>
													<em onclick="$('postmessage_165245').className='t_bigfont'">大</em>							<em onclick="$('postmessage_165245').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_165245').className='t_smallfont'">小</em>												发表于 2009-7-17 00:20&nbsp;																					<a href="viewthread.php?tid=7648&amp;page=1&amp;authorid=7723" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_12"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_12"></div><div id="ad_thread4_12"></div>
						
						
																											<div id="postmessage_165245" class="t_msgfont">同楼上.......<br />
曾经用了一段时间64位系统,结果各类翻墙软件统统用不了.....只有在线代理...</div>

							
							
							
							
															<div id="post_rate_div_165245"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo165245_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=7723" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=7648&amp;repquote=165245&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 165245)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_12"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid165278" summary="pid165278" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=3026" target="_blank" id="userinfo165278" class="dropmenu" onmouseover="showMenu(this.id)">malie0</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=3026">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=3026&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_13" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum165278" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=7648&page=1#pid165278', '话题链接已经复制到剪贴板')">14楼</strong>
													<em onclick="$('postmessage_165278').className='t_bigfont'">大</em>							<em onclick="$('postmessage_165278').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_165278').className='t_smallfont'">小</em>												发表于 2009-7-17 01:10&nbsp;																					<a href="viewthread.php?tid=7648&amp;page=1&amp;authorid=3026" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_13"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_13"></div><div id="ad_thread4_13"></div>
						
						
																											<div id="postmessage_165278" class="t_msgfont">为什么我用UltraVPN连接得到IP后还是不能打开墙外的网站，好象根本没起作用</div>

							
							
							
							
															<div id="post_rate_div_165278"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo165278_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=3026" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=7648&amp;repquote=165278&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 165278)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_13"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid165392" summary="pid165392" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=5851" target="_blank" id="userinfo165392" class="dropmenu" onmouseover="showMenu(this.id)">二氧化碳</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">没有英雄的时代里的一个人</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=5851">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=5851&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_14" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum165392" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=7648&page=1#pid165392', '话题链接已经复制到剪贴板')">15楼</strong>
													<em onclick="$('postmessage_165392').className='t_bigfont'">大</em>							<em onclick="$('postmessage_165392').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_165392').className='t_smallfont'">小</em>												发表于 2009-7-17 09:01&nbsp;																					<a href="viewthread.php?tid=7648&amp;page=1&amp;authorid=5851" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_14"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_14"></div><div id="ad_thread4_14"></div>
						
						
																											<div id="postmessage_165392" class="t_msgfont">UltraVPN使用后能上twitter,但没法登录?</div>

							
							
							
							
															<div id="post_rate_div_165392"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo165392_menu" style="display: none;">
										<div class="imicons">
													<a target='_blank' href='http://settings.messenger.live.com/Conversation/IMMe.aspx?invitee=cheongyiufung@gmail.com&mkt=zh-cn'><img style='border-style: none;' src='http://messenger.services.live.com/users/cheongyiufung@gmail.com/presenceimage?mkt=zh-cn' width='16' height='16' /></a>
																																			</div>
										<dl></dl>
											<p><a href="http://contr4il.spaces.live.com" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=5851" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=7648&amp;repquote=165392&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 165392)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_14"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid167284" summary="pid167284" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7857" target="_blank" id="userinfo167284" class="dropmenu" onmouseover="showMenu(this.id)">alian</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7857">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7857&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_15" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum167284" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=7648&page=1#pid167284', '话题链接已经复制到剪贴板')">16楼</strong>
													<em onclick="$('postmessage_167284').className='t_bigfont'">大</em>							<em onclick="$('postmessage_167284').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_167284').className='t_smallfont'">小</em>												发表于 2009-7-18 12:56&nbsp;																					<a href="viewthread.php?tid=7648&amp;page=1&amp;authorid=7857" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_15"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_15"></div><div id="ad_thread4_15"></div>
						
						
																											<div id="postmessage_167284" class="t_msgfont">不催的推荐</div>

							
							
							
							
															<div id="post_rate_div_167284"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo167284_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=7857" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=7648&amp;repquote=167284&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 167284)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_15"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid167530" summary="pid167530" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2336" target="_blank" id="userinfo167530" class="dropmenu" onmouseover="showMenu(this.id)">不敬神的YODA</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">五毛你好，五毛再见</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2336">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2336&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_16" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum167530" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=7648&page=1#pid167530', '话题链接已经复制到剪贴板')">17楼</strong>
													<em onclick="$('postmessage_167530').className='t_bigfont'">大</em>							<em onclick="$('postmessage_167530').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_167530').className='t_smallfont'">小</em>												发表于 2009-7-18 16:43&nbsp;																					<a href="viewthread.php?tid=7648&amp;page=1&amp;authorid=2336" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_16"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_16"></div><div id="ad_thread4_16"></div>
						
						
																											<div id="postmessage_167530" class="t_msgfont">这个UltraVPN真是太好用了！<br />
<br />
同意~简单易用速度快</div>

							
							
							
							
															<div id="post_rate_div_167530"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo167530_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://www.douban.com/people/Yodagf/" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=2336" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=7648&amp;repquote=167530&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 167530)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_16"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid204598" summary="pid204598" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=5638" target="_blank" id="userinfo204598" class="dropmenu" onmouseover="showMenu(this.id)">小猪依人</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">一小撮</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=5638">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=5638&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_17" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum204598" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=7648&page=1#pid204598', '话题链接已经复制到剪贴板')">18楼</strong>
													<em onclick="$('postmessage_204598').className='t_bigfont'">大</em>							<em onclick="$('postmessage_204598').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_204598').className='t_smallfont'">小</em>												发表于 2009-8-15 22:03&nbsp;																					<a href="viewthread.php?tid=7648&amp;page=1&amp;authorid=5638" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_17"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_17"></div><div id="ad_thread4_17"></div>
						
						
																											<div id="postmessage_204598" class="t_msgfont">Open VPN用了,为什迅雷登不上了?</div>

							
							
							
							
															<div id="post_rate_div_204598"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo204598_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=5638" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=7648&amp;repquote=204598&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 204598)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_17"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid204605" summary="pid204605" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2213" target="_blank" id="userinfo204605" class="dropmenu" onmouseover="showMenu(this.id)">核子力量</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">Twitter.com/hzpower</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2213">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2213&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_18" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum204605" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=7648&page=1#pid204605', '话题链接已经复制到剪贴板')">19楼</strong>
													<em onclick="$('postmessage_204605').className='t_bigfont'">大</em>							<em onclick="$('postmessage_204605').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_204605').className='t_smallfont'">小</em>												发表于 2009-8-15 22:11&nbsp;																					<a href="viewthread.php?tid=7648&amp;page=1&amp;authorid=2213" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_18"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_18"></div><div id="ad_thread4_18"></div>
													<h2>回复 18楼 小猪依人 的话题</h2>
						
						
																											<div id="postmessage_204605" class="t_msgfont">用了vpn就相当于在国外了，迅雷的服务器在国内，连接网速太慢就登陆不上了</div>

							
							
							
							
															<div id="post_rate_div_204605"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo204605_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://twitter.com/hzpower" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=2213" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=7648&amp;repquote=204605&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 204605)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_18"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid225273" summary="pid225273" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=5706" target="_blank" id="userinfo225273" class="dropmenu" onmouseover="showMenu(this.id)">safin0609</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=5706">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=5706&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_19" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum225273" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=7648&page=1#pid225273', '话题链接已经复制到剪贴板')">20楼</strong>
													<em onclick="$('postmessage_225273').className='t_bigfont'">大</em>							<em onclick="$('postmessage_225273').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_225273').className='t_smallfont'">小</em>												发表于 2009-9-3 14:43&nbsp;																					<a href="viewthread.php?tid=7648&amp;page=1&amp;authorid=5706" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_19"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_19"></div><div id="ad_thread4_19"></div>
						
						
																											<div id="postmessage_225273" class="t_msgfont">留名，念经中……</div>

							
							
							
							
															<div id="post_rate_div_225273"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo225273_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=5706" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=7648&amp;repquote=225273&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 225273)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_19"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid240616" summary="pid240616" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1835" target="_blank" id="userinfo240616" class="dropmenu" onmouseover="showMenu(this.id)">aidonal</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">卖tee的钢爷：http://aidonal.tk  淘宝店：mytwitter.taobao.com</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1835">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1835&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_20" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum240616" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=7648&page=1#pid240616', '话题链接已经复制到剪贴板')">21楼</strong>
													<em onclick="$('postmessage_240616').className='t_bigfont'">大</em>							<em onclick="$('postmessage_240616').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_240616').className='t_smallfont'">小</em>												发表于 2009-9-14 20:22&nbsp;																					<a href="viewthread.php?tid=7648&amp;page=1&amp;authorid=1835" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_20"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_20"></div><div id="ad_thread4_20"></div>
													<h2>求助</h2>
						
						
																											<div id="postmessage_240616" class="t_msgfont">使用校园网要认证后上网，貌似用不了VPN，求教</div>

							
							
							
							
															<div id="post_rate_div_240616"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo240616_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1835" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=7648&amp;repquote=240616&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 240616)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_20"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid278163" summary="pid278163" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=37" target="_blank" id="userinfo278163" class="dropmenu" onmouseover="showMenu(this.id)">毛茸茸</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=37">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=37&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_21" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum278163" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=7648&page=1#pid278163', '话题链接已经复制到剪贴板')">22楼</strong>
													<em onclick="$('postmessage_278163').className='t_bigfont'">大</em>							<em onclick="$('postmessage_278163').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_278163').className='t_smallfont'">小</em>												发表于 2009-10-12 11:38&nbsp;																					<a href="viewthread.php?tid=7648&amp;page=1&amp;authorid=37" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_21"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_21"></div><div id="ad_thread4_21"></div>
						
						
																											<div id="postmessage_278163" class="t_msgfont">我的ultraVPN一直黄色connecting状态<br />
绿不了了。。<br />
咋回事呢。。</div>

							
							
							
							
															<div id="post_rate_div_278163"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo278163_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=37" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=7648&amp;repquote=278163&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 278163)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_21"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid283988" summary="pid283988" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 <a name="lastpost"></a>					<cite>											<a href="space.php?uid=4347" target="_blank" id="userinfo283988" class="dropmenu" onmouseover="showMenu(this.id)">那时花谢</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=4347">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=4347&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_22" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum283988" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=7648&page=1#pid283988', '话题链接已经复制到剪贴板')">23楼</strong>
													<em onclick="$('postmessage_283988').className='t_bigfont'">大</em>							<em onclick="$('postmessage_283988').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_283988').className='t_smallfont'">小</em>												发表于 2009-10-15 23:03&nbsp;																					<a href="viewthread.php?tid=7648&amp;page=1&amp;authorid=4347" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_22"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_22"></div><div id="ad_thread4_22"></div>
						
						
																											<div id="postmessage_283988" class="t_msgfont">我的ultraVPN一直黄色connecting状态<br />
绿不了了。。<br />
咋回事呢。。<br />
-----------------------------------------------------------<br />
<br />
同问，在公司和在家都一样，登不上。</div>

							
							
							
							
															<div id="post_rate_div_283988"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo283988_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=4347" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=7648&amp;repquote=283988&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 283988)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_22"></div>				</div>
			</td>
		</tr>
		</table>
		</div>
</form>





<div class="pages_btns">
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=7648&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=7648&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
				<span class="postbtn" id="newspecialtmp" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=7648&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

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

	<form method="post" id="postform" action="post.php?action=reply&amp;fid=26&amp;tid=7648&amp;extra=&amp;replysubmit=yes" onSubmit="return validate(this)">
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
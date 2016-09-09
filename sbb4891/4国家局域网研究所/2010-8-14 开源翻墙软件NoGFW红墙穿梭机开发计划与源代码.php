<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<title>开源翻墙软件NoGFW红墙穿梭机开发计划与源代码 - 国家局域网研究所 -  1984bbs.com </title>
<meta name="keywords" content="" />
<meta name="MSSmartTagsPreventParsing" content="True" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<link rel="archives" title="1984bbs.com" href="https://1984bbs.com/archiver/" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_viewthread.css" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_common.css" />
<script type="text/javascript">
	var discuz_uid = 13019;var IMGDIR = 'images/default';var attackevasive = '0';var gid = 0;var STYLEID = '1';
	gid = parseInt('3');var fid = parseInt('26');var tid = parseInt('55452');
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
			<p><a href="index.php" id="forumlist" onmouseover="showMenu(this.id)" class="dropmenu">1984bbs.com</a> &raquo; <a href="forumdisplay.php?fid=26">国家局域网研究所</a> &raquo; 开源翻墙软件NoGFW红墙穿梭机开发计划与源代码</p>
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
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=55452&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=55452&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
				<span class="postbtn" id="newspecial" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=55452&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

	<ul class="popupmenu_popup newspecialmenu" id="newspecial_menu" style="display: none">
		<li><a href="post.php?action=newthread&amp;fid=26&amp;extra=">发新话题</a></li>
		<li class="poll"><a href="post.php?action=newthread&amp;fid=26&amp;extra=&amp;special=1">发布投票</a></li>													</ul>

<form method="post" name="modactions">
	<input type="hidden" name="formhash" value="823c9fa2" />
	<div class="mainbox viewthread">
		<span class="headactions">
					<a href="my.php?item=favorites&amp;tid=55452" id="ajax_favorite" onclick="ajaxmenu(event, this.id, 3000, 0)">收藏</a>
			<a href="my.php?item=subscriptions&amp;subadd=55452" id="ajax_subscription" onclick="ajaxmenu(event, this.id, 3000, null, 0)">订阅</a>
			<a href="misc.php?action=emailfriend&amp;tid=55452" id="emailfriend" onclick="ajaxmenu(event, this.id, 9000000, null, 0)">推荐</a>
				<a href="viewthread.php?action=printable&amp;tid=55452" target="_blank" class="notabs">打印</a>
				</span>
		<h1>开源翻墙软件NoGFW红墙穿梭机开发计划与源代码		</h1>
							<table id="pid782945" summary="pid782945" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=17434" target="_blank" id="userinfo782945" class="dropmenu" onmouseover="showMenu(this.id)">贝立</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=17434">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=17434&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_0" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum782945" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=55452&page=1#pid782945', '话题链接已经复制到剪贴板')">1楼</strong>
													<em onclick="$('postmessage_782945').className='t_bigfont'">大</em>							<em onclick="$('postmessage_782945').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_782945').className='t_smallfont'">小</em>												发表于 2010-8-14 20:29&nbsp;																					<a href="viewthread.php?tid=55452&amp;page=1&amp;authorid=17434" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_0"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_0"></div><div id="ad_thread4_0"></div>
													<h2>开源翻墙软件NoGFW红墙穿梭机开发计划与源代码</h2>
						
						
																											<div id="postmessage_782945" class="t_msgfont">对抗GFW所面临的问题：<br />
目前针对GFW的代理方案大多具有明显缺陷，最主要的就是代理地址不足和容易被封锁，如赛风，自由门等是由机构来提供IP代理地址，这就需要有付出高昂的费用购买IP地址，甚至不停的更换域名，https证书等。<br />
<br />
而tor由匿名上网的支持者志愿提供IP代理地址，可供用来代理的IP相对充足，可又会因中央节点被封锁而无法找到新的代理。<br />
<br />
vpn等新的代理服务又由于绝大多数是收费的而局限了使用范围。<br />
<br />
解决现有问题的计划：<br />
<br />
为此，我们计划针对GFW封锁，打造一款由全球反网络审查志愿者被封禁志愿提供IP代理，中央节点不能封锁，同时保障信息自由和网络安全的NoGFW Shuttle（NoGFW红墙穿梭机）。<br />
<br />
同时通过此软件也能很有力的吸引翻墙者参与到我们的反gfw网聚中。<br />
<br />
所需开发人才<br />
<br />
为此我们诚邀懂得以下编程技术的自由网民参与此自由软件的开发：<br />
（参与开发与测试请联系<a href="mailto:nogfw.cn@gmail.com">nogfw.cn@gmail.com</a>）<br />
<br />
a.&nbsp; &nbsp; 熟悉网络socket编程的C/C++程序员。<br />
b.&nbsp; &nbsp;&nbsp;&nbsp;熟悉php或jsp或asp.net，会生成图片验证码、会socket编程的程序员。<br />
c.&nbsp; &nbsp; 熟悉网络，熟悉各种网络软件配置及其原理的人员（一般是在各个公司的IT部门担任网络管理原的职责）。d. 熟悉图形界面开发的技术人员<br />
<br />
e.&nbsp; &nbsp; 熟悉嵌入式系统的技术人员。（本软件有向硬件发展的潜力）。<br />
f.&nbsp;&nbsp;即使不掌握以上技术，但仍愿意提供开发建议，创新思维的翻墙客，并参与软件的试用活动。<br />
（参与开发与测试请联系<a href="mailto:nogfw.cn@gmail.com">nogfw.cn@gmail.com</a>）<br />
<br />
NOGFW加密代理软件技术构想<br />
<br />
1.&nbsp; &nbsp; 目标<br />
　　打造一个分布式、中央节点难以被封锁、服务提供者和服务使用者多元化的加密代理系统。<br />
2.&nbsp; &nbsp; 设想<br />
　　为了实现我们的目标，我们初步设想由网络审查比较少的国家的普通大众提供服务，使得服务得以是分布式的；服务提供者把其提供服务的信息发布到难以封锁的中央节点中，服务使用者即可从中央节点中获取服务信息即可使用服务；服务提供者可以在计算机中安装软件提供服务，也可以使用定制的嵌入式设备提供服务，使得服务提供者多元化；服务使用者只要使用支持HTTP(S)代理服务器协议的软件即可使用服务，使得服务使用者多元化。<br />
3.&nbsp; &nbsp; 架构<br />
这个项目分四部分：<br />
一、IP代理提供方软件，将志愿提供者的互联网接入变成翻墙客的翻墙通道。<br />
二、第三方发布点（可提供RSS feed，Email，IM发布功能的服务）将服务提供者代理IP加密公布。<br />
三、中央节点，进行信息的交换，解析，验证将双方连接。<br />
四、服务使用者所需软件，解密接收到的代理地址，建立翻墙通道。<br />
<br />
　　服务使用者运行客户端软件后，自动从中央节点获取服务提供者的信息，从而可以使用服务。自动把其信息发送给第三方信息发布点，由第三方信息发布点统一把信息发布到中央节点中。服务提供者运行客户端软件后，自动从中央节点获取服务提供者的信息，从而可以使用服务。<br />
<br />
（参与开发与测试请联系<a href="mailto:nogfw.cn@gmail.com">nogfw.cn@gmail.com</a>）<br />
软件的开发步骤<br />
<br />
第一阶段<br />
起步&nbsp;&nbsp;实现点对点的加密连接 允许代理服务的提供者和使用方可以直接建立加密的代理通道 实现一对一乃至N对一的翻墙功能。<br />
<br />
第二阶段<br />
适用于小规模用户的项目开发，在得到一定规模的代理服务提供者后，在能够以有限的人工发布IP资源的条件下，设置第三方发布点，手动的收集整理服务提供者的IP带宽等信息以RSS feed，Email，IM等方式将服务提供者的信息加密公布。<br />
设置中央节点，进行信息的交换，解析，验证将双方连接。四、服务使用者所需软件，解密接收到的代理地址，建立翻墙通道。<br />
<br />
第三阶段<br />
适应于大规模用户的项目开发，在得到大量的代理服务提供者后，需要更加合理的平均分配代理资源，此时设置专业的目录服务器（或邮件服务器）对资源进行整理归类并均衡的将资源加密发布，同时加以人工辅助进行合理的分析判断以防范攻击和资源被浪费或闲置。<br />
服务提供者由单层向双层发展，以避免ip被封，设置中央服务器均衡的将服务提供者的代理资源分为进口节点（连接服务使用者）和出口节点（连接服务使用者所要访问的网站）。<br />
------------<br />
设立嵌入式设备开发项目 ：<br />
为服务提供者开发一个廉价便捷的微型设备，只需连接到路由器上就可以自动的提供24/7不间断代理服务。<br />
------------<br />
本项目与Tor(anonymity network全匿名路由)的同异比较：<br />
 <br />
相同性： 同为由志愿者为主体提供代理服务的网络，通过多层连接实现代理翻墙的功能。<br />
<br />
不同处（优点）： Tor是以提供完全匿名的互联网接入为目的，通过多层穿越达到绝对隐藏使用者身份的效果，其用户群遍及全球各地。Tor必须由至少一台中央目录服务器来进行资源分配，这就导致tor很容易被GFW封锁。<br />
<br />
而翻墙穿梭机，是在针对性的为实行苛刻的互联网封锁审查的国家的网民提供突破封锁服务，服务的使用者不需要去连接目录服务器，而可以用RSS feed订阅，Email，IM，sns（twitter）等方式去获得可用的代理资源，避免了中央节点被封锁。另一方面，我们提供与其他专业翻墙软件同级或更高级的用户信息保护而非绝对的匿名服务，以防止被利用做为网络欺诈，或成为反恐漏洞。<br />
<br />
（参与开发与测试请联系<a href="mailto:nogfw.cn@gmail.com">nogfw.cn@gmail.com</a>）<br />
<br />
本方案常见问题：<br />
<br />
a.&nbsp; &nbsp; Q：如何使得中央节点难以被封锁？<br />
A：我们可以利用发布RSS feed 如 Google Reader，或IM，Buzz等发布。如：由于Google Reader可以使用https协议进行浏览，并且是架设在Google的主域<a href="http://www.google.com" target="_blank">www.google.com</a>上的，导致如果封锁Google Reader就等于封锁了几乎所有需要登陆才能使用的Google服务（包括Gmail）。<br />
<br />
b.&nbsp; &nbsp; Q：为何有了安装在电脑中的软件提供服务，还要提供嵌入式设备提供服务？<br />
A：1、提供嵌入式设备提供服务使得普通大众不需要一直开着自己的电脑即可提供服务，有利于提供不间断地服务；2、使用嵌入式设备提供服务有利于服务提供者的电脑安全，更有利于推广。3嵌入式设备实际上比整天开着电脑来提供代理服务的成本要低廉许多。<br />
<br />
c.&nbsp; &nbsp;&nbsp;&nbsp;Q：如何能获得更多的IP地址用来提供代理服务？<br />
A： 国际上反对中国网络封锁的声音越来越大，美国，欧盟对此反应非常强烈，鼓励言论信息自由的非政府机构也非常活跃，还有越来越多的企业，个人开始关注并参与到反GFW的行动中，这为我们提供了庞大的可利用资源。与国际友人谈到这个问题时，我经常听到的回应就是“How can we help?”<br />
<br />
d.&nbsp; &nbsp; Q：如何使得中央节点中的信息不被破解而被自动封锁？<br />
A：我们可以把服务提供者的信息加密后发送到中央节点中。不过这样就必须不公开这个解密的过程，软件也就无法开源。另一种办法是发布的信息以验证码方式提供，这样就无法自动解密自动封锁。不过这样就需要服务使用者每次获得信息的时候都需要输入验证码。<br />
<br />
e.&nbsp; &nbsp; Q：有了中央节点，为何还需要第三方信息发布点？<br />
A：1、如果要把信息发布到Google Reader中，通过提供RSS feeds来发布信息，也可以通过固定的twitter,IM，邮件组帐号发布信息。2、第三方信息发布点可以验证服务提供者的配置是否正确。<br />
（参与开发与测试请联系<a href="mailto:nogfw.cn@gmail.com">nogfw.cn@gmail.com</a>）<br />
-- <br />
在组内做首次发布：<br />
NoGFW Shuttle（翻墙穿梭机）的第一测试版本（第一阶段P2P） 及源代码<br />
<br />
声明：《此开源软件的源代码以GPLv3 License发布》<br />
<br />
nogfw20100802_abcdefg.zip(262.00k) 是第一版程序（p2p版），下载链接： <br />
<a href="http://nogfw.googlegroups.com/attach/cf4d7e32d5382df9/nogfw20100802_abcdefg.zip?gda=FHplfEcAAAALnbNOJzOlwhliyu8fmiHmzDKhuiFgRZa7JeQaqlCPiMWh6cwLyDYCB2g0z1pcuGobQwFxJw55cVwemAxM-EWmeV4duv6pDMGhhhZdjQlNAw&amp;gsc=Ll8fkQsAAAA5Fy_lHupIVZKQ4BmuzMbQ&amp;part=4&amp;hl=zh-CN_US" target="_blank">http://nogfw.googlegroups.com/at ... t=4&amp;hl=zh-CN_US</a> <br />
=============================== <br />
encryptedtunnel_7z.zip (4k) 是源代码，下载链接： <br />
<a href="http://nogfw.googlegroups.com/attach/cf4d7e32d5382df9/encryptedtunnel_7z.zip?gda=87BfskcAAAALnbNOJzOlwhliyu8fmiHmzDKhuiFgRZa7JeQaqlCPiPkeNSgtK9ZcM5AflwDF-HgbQwFxJw55cVwemAxM-EWmeV4duv6pDMGhhhZdjQlNAw&amp;part=5&amp;hl=zh-CN_US" target="_blank">http://nogfw.googlegroups.com/at ... t=5&amp;hl=zh-CN_US</a> <br />
 <br />
软件的的使用手册是程序压缩包中的manual.txt文件<br />
（参与开发与测试请联系<a href="mailto:nogfw.cn@gmail.com">nogfw.cn@gmail.com</a>）<br />
<br />
源代码为0.01 demo版，只是做了一个核心功能的模型。程序语言为C++，使用了STL和boost。计划后续版本做如下改进：<br />
<br />
1、现阶段是命令行版本，需要做一个图形化界面；<br />
<br />
2、现阶段不会自动发布服务者的IP、端口和SecretKey，以后不仅会自动发布服务者的信息到是否被封锁无关紧要的信息发布点，信息发布点还会反过来验证服务提供者的配置是否正确；<br />
<br />
3、现阶段加密只是使用了简单的异或操作，以后打算使用ECC+AES+SHA1+序列号的方式，防止传输的信息被破解而被截获（不是防止破解软件，软件本身是开源的）；<br />
<br />
4、现阶段服务提供者需要手动配置路由器和防火墙，以后打算使用UPnP自动端口映射+NAT穿越+自动配置Windows防火墙；<br />
<br />
5、以后会考虑流量混淆的方式，防止根据流量分析找出服务者的IP；<br />
<br />
6、以后或许还会考虑把实时流量加入知名网站的https证书所加密的数据中（不需要得到其私钥，具体方法比较复杂，暂不讨论）；<br />
<br />
7、考虑到我们的总体目标，还需要根据这个总体目标增加很多功能，在此就不一一列举了。<br />
（参与开发与测试请联系<a href="mailto:nogfw.cn@gmail.com">nogfw.cn@gmail.com</a>）<br />
<br />
运行本软件的最低系统要求：<br />
<br />
x86/32位/Windows 2000或更新版本的兼容机，<br />
开发人员也可在Linux下自行编译<br />
 <br />
本程序为测试版，无偿授权，共测试和开发使用，程序是在win2000和win xp平台上开发，未在其他平台测试，所以无法保证软件在其他平台的稳定性，可能会导致问题，希望研发人员和使用者及时反馈可能出现的问题，bug。对运转此软件可能会出现的问题，开发人员不负担责任。修改、发布程序的人员对使用该程序所出现的问题不负有责任。<br />
（参与开发与测试请联系<a href="mailto:nogfw.cn@gmail.com">nogfw.cn@gmail.com</a>）<br />
 <br />
8月8日公告： <br />
已建成NoGFW 红墙穿梭机（Red Wall Shuttle）在Google Code和SourceForge上的研发平台 <br />
<a href="http://code.google.com/p/nogfw-red-wall-shuttle/" target="_blank">http://code.google.com/p/nogfw-red-wall-shuttle/</a> <br />
<a href="https://sourceforge.net/projects/gfwshuttle/" target="_blank">https://sourceforge.net/projects/gfwshuttle/</a> <br />
直接浏览源代码: <br />
<a href="http://code.google.com/p/nogfw-red-wall-shuttle/source/browse/" target="_blank">http://code.google.com/p/nogfw-red-wall-shuttle/source/browse/</a> <br />
<a href="http://gfwshuttle.svn.sourceforge.net/viewvc/gfwshuttle/encryptedtunnel/" target="_blank">http://gfwshuttle.svn.sourceforg ... le/encryptedtunnel/</a><br />
软件的公开讨论网址是：<a href="https://www.google.com/buzz/greenpartycn/c8Bqkd3VY2F/GFW-%E6%88%91%E4%BB%AC%E4%B8%8D%E9%AB%98%E5%85%B4-%E8%A1%8C%E5%8A%A8%E7%BB%84%E6%AD%A3%E5%BC%8F%E5%8F%91%E5%B8%83" target="_blank">https://www.google.com/buzz/gree ... F%E5%8F%91%E5%B8%83</a><br />
<br />
诚请编程技术人员加盟开发, 也希望您能积极宣传一下,让更多人参与进来. <br />
<br />
人人为我，我为人人！ <br />
谢谢<br />
<br />
================================== <br />
<br />
本软件开发项目是《GFW，我们不高兴！网聚百万人反GFW审查》网络行动的一部分，详情请查阅<a href="https://groups.google.com/group/nogfw?hl=zh-CN" target="_blank">https://groups.google.com/group/nogfw?hl=zh-CN</a><br />
<br />
<strong>请响应《GFW，我们不高兴！Say NO to GFW, 網聚百万人反GFW审查大呛声》</strong>，终结无休止的筑墙与翻墙，中国人决不能再做蒙着眼转磨、逆来顺受的驴！<br />
<br />
GFW，我们不高兴！<br />
我们的主题是：反GFW封锁，反互联网审查，反上网实名制，反雇佣5毛，反对侵犯隐私权，监视公民邮信，电脑！GFW，我们不高兴！<br />
<br />
副标语：我要看Youtube，我要推Twitter，我要上Facebook找朋友，我要用Wikipedia学知识，我要赚外汇！GFW，我们不高兴！<br />
<br />
以Google为例，当局坚持过滤搜索引擎从而逼走Google，这并不是一起对某1 个外国公司的孤立事件，它告示，当局否定互联网的价值：自由与开放。否定我们生而享有的信息与交流的基本权利：自由与开放。为此我们必须表达： GFW，我们不高兴！<br />
<br />
为了能挽留和解封优秀的网络服务请响应我们自发的《GFW，我们不高兴！Say NO! to GFW，百万人反GFW审查大呛声》，让当局搞清楚，我们不高兴！请当局刀下留Google，如此宰割下去，早晚会砍在我们每个人的身上！ 早晚会把监控芯片种到我们头颅里！<br />
<br />
<strong>您需要做的只是发送一次电邮至 nogfw+<a href="mailto:subscribe@googlegroups.com">subscribe@googlegroups.com</a> 便是在响应，实名/匿名都可以。</strong>欢迎访问论坛：<a href="http://www.google.hk/group/nogfw/" target="_blank">www.google.hk/group/nogfw/</a> ，收到您的响应邮件后，论坛会自动统计人数。此后再参与网上交流只需要回复邮件至<a href="mailto:nogfw@googlegroups.com">nogfw@googlegroups.com</a> 即可，无需一直翻墙。<br />
<br />
让这个7位数数字早日出现吧！我不相信当局会对上百万人下手，那无异于再次发动文革，是对社会稳定的最大破坏。我更不相信不高兴GFW审查的人连1 百万都没有，不然，“绿坝”又怎能被我们击溃？<br />
<br />
GFW，我们不高兴！<br />
<br />
我们在<a href="http://www.facebook.com/nogfw.cn" target="_blank">www.facebook.com/nogfw.cn</a> ，twitter ID @no_gfw ，服务Gmail/Gtalk：<a href="mailto:nogfw.cn@gmail.com">nogfw.cn@gmail.com</a><br />
<br />
GFW ,We are not happy ! （ GFW is Great Firewall of China’s Internet Censorship, it is the symbol of suppress the rights of speech and rights to know)<br />
<br />
I belive a million people will join together to say No! to GFW<br />
<br />
Our aims are:<br />
<br />
Anti-GFW (it blocking websites ) Anti-Internet censorship Anti-identity registration for use Internet Anti-paid commentator to manipulate public opinions Anti-infringe privacy Anti-tapping on people’s communications, Email, telephone,computer<br />
-- <br />
Max贝立<br />
*《GFW，我们不高兴！Say NO!&nbsp;&nbsp;to GFW 百万人反GFW审查大呛声》：之主题：反GFW封锁，反互联网审查，反上网实名制，反雇佣5毛，反对侵犯隐私权，监视公民邮信，电脑！GFW，我们不高兴！<br />
<br />
请帮助Re推下面的微博短文，谢谢<br />
<br />
<strong> #nogfw 我相信能召集百万人反GFW审查：请电邮[/email]nogfw+<a href="mailto:subscribe@googlegroups.com">subscribe@googlegroups.com</a>[/email]响应，汇集百万呼吁，<a href="http://www.google.hk/group/nogfw/" target="_blank">www.google.hk/group/nogfw/</a> 将自动统计人数。 #GFW，我们不高兴！请RT 成功就在指尖！</strong><br />
<br />
[<i> 本帖最后由 贝立 于 2010-8-20 08:25 编辑 </i>]</div>

							
							
							
							
															<div id="post_rate_div_782945"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo782945_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://groups.google.com/group/nogfw" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=17434" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=55452&amp;repquote=782945&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 782945)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_0"></div>				</div>
			</td>
		</tr>
		</table>
		</div><div class="ad_column" id="ad_interthread"><a href="/viewthread.php?tid=54699" target="_blank" style="color:red;">1984bbs是一个非营利项目，它需要您的捐助！</font></a>		</div>
	<div class="mainbox viewthread">
			<table id="pid782963" summary="pid782963" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=17937" target="_blank" id="userinfo782963" class="dropmenu" onmouseover="showMenu(this.id)">o987654321</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">一炮走红,是形容女艺人的</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=17937">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=17937&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_1" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum782963" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=55452&page=1#pid782963', '话题链接已经复制到剪贴板')">2楼</strong>
													<em onclick="$('postmessage_782963').className='t_bigfont'">大</em>							<em onclick="$('postmessage_782963').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_782963').className='t_smallfont'">小</em>												发表于 2010-8-14 20:38&nbsp;																					<a href="viewthread.php?tid=55452&amp;page=1&amp;authorid=17937" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_1"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_1"></div><div id="ad_thread4_1"></div>
						
						
																											<div id="postmessage_782963" class="t_msgfont">呵呵，比较特别</div>

							
							
							
							
															<div id="post_rate_div_782963"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo782963_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=17937" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=55452&amp;repquote=782963&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 782963)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_1"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid782984" summary="pid782984" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=11906" target="_blank" id="userinfo782984" class="dropmenu" onmouseover="showMenu(this.id)">我的青春党做主</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=11906">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=11906&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_2" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum782984" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=55452&page=1#pid782984', '话题链接已经复制到剪贴板')">3楼</strong>
													<em onclick="$('postmessage_782984').className='t_bigfont'">大</em>							<em onclick="$('postmessage_782984').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_782984').className='t_smallfont'">小</em>												发表于 2010-8-14 20:49&nbsp;																					<a href="viewthread.php?tid=55452&amp;page=1&amp;authorid=11906" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_2"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_2"></div><div id="ad_thread4_2"></div>
						
						
																											<div id="postmessage_782984" class="t_msgfont">让gfw见鬼去吧</div>

							
							
							
							
															<div id="post_rate_div_782984"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo782984_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=11906" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=55452&amp;repquote=782984&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 782984)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_2"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid783000" summary="pid783000" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=16391" target="_blank" id="userinfo783000" class="dropmenu" onmouseover="showMenu(this.id)">块头</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=16391">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=16391&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_3" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum783000" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=55452&page=1#pid783000', '话题链接已经复制到剪贴板')">4楼</strong>
													<em onclick="$('postmessage_783000').className='t_bigfont'">大</em>							<em onclick="$('postmessage_783000').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_783000').className='t_smallfont'">小</em>												发表于 2010-8-14 21:02&nbsp;																					<a href="viewthread.php?tid=55452&amp;page=1&amp;authorid=16391" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_3"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_3"></div><div id="ad_thread4_3"></div>
						
						
																											<div id="postmessage_783000" class="t_msgfont">祝成功。</div>

							
							
							
							
															<div id="post_rate_div_783000"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo783000_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=16391" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=55452&amp;repquote=783000&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 783000)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_3"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid783063" summary="pid783063" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6873" target="_blank" id="userinfo783063" class="dropmenu" onmouseover="showMenu(this.id)">萧易寒</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6873">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6873&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_4" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum783063" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=55452&page=1#pid783063', '话题链接已经复制到剪贴板')">5楼</strong>
													<em onclick="$('postmessage_783063').className='t_bigfont'">大</em>							<em onclick="$('postmessage_783063').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_783063').className='t_smallfont'">小</em>												发表于 2010-8-14 22:06&nbsp;																					<a href="viewthread.php?tid=55452&amp;page=1&amp;authorid=6873" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_4"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_4"></div><div id="ad_thread4_4"></div>
						
						
																											<div id="postmessage_783063" class="t_msgfont">中央节点，进行信息的交换，解析，验证将双方连接。<br />
<br />
a.&nbsp; &nbsp; Q：如何使得中央节点难以被封锁？<br />
A：我们可以利用发布RSS feed 如 Google Reader，或IM，Buzz等发布。如：由于Google Reader可以使用https协议进行浏览，并且是架设在Google的主域<a href="http://www.google.com" target="_blank">www.google.com</a>上的，导致如果封锁Google Reader就等于封锁了几乎所有需要登陆才能使用的Google服务（包括Gmail）。<br />
<br />
没看明白，中央节点上要跑自己的程序吧？这样如何防止不被封IP？</div>

							
							
							
							
															<div id="post_rate_div_783063"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo783063_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=6873" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=55452&amp;repquote=783063&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 783063)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_4"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid783177" summary="pid783177" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=11493" target="_blank" id="userinfo783177" class="dropmenu" onmouseover="showMenu(this.id)">gzlxd</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">Twitter/@gzlxd</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=11493">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=11493&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_5" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum783177" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=55452&page=1#pid783177', '话题链接已经复制到剪贴板')">6楼</strong>
													<em onclick="$('postmessage_783177').className='t_bigfont'">大</em>							<em onclick="$('postmessage_783177').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_783177').className='t_smallfont'">小</em>												发表于 2010-8-14 23:51&nbsp;																					<a href="viewthread.php?tid=55452&amp;page=1&amp;authorid=11493" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_5"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_5"></div><div id="ad_thread4_5"></div>
						
						
																											<div id="postmessage_783177" class="t_msgfont">支持一下。留个记号</div>

							
							
							
							
															<div id="post_rate_div_783177"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo783177_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=11493" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=55452&amp;repquote=783177&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 783177)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_5"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid783198" summary="pid783198" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=320" target="_blank" id="userinfo783198" class="dropmenu" onmouseover="showMenu(this.id)">bluegobin</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=320">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=320&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_6" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum783198" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=55452&page=1#pid783198', '话题链接已经复制到剪贴板')">7楼</strong>
													<em onclick="$('postmessage_783198').className='t_bigfont'">大</em>							<em onclick="$('postmessage_783198').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_783198').className='t_smallfont'">小</em>												发表于 2010-8-15 00:08&nbsp;																					<a href="viewthread.php?tid=55452&amp;page=1&amp;authorid=320" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_6"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_6"></div><div id="ad_thread4_6"></div>
													<h2>回复 5楼 萧易寒 的话题</h2>
						
						
																											<div id="postmessage_783198" class="t_msgfont">这个是没有中央节点的，但可以寄生在如GR上进行发布信息。<br />
这个封锁IP的话除非把Google封掉，就是赌不敢封Google。<br />
当然如果Google被封锁了，其他的RSS工具同样可以完成任务。基本上不太可能完全封掉。</div>

							
							
							
							
															<div id="post_rate_div_783198"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo783198_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=320" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=55452&amp;repquote=783198&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 783198)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_6"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid783248" summary="pid783248" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=15480" target="_blank" id="userinfo783248" class="dropmenu" onmouseover="showMenu(this.id)">败亦枭雄</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">坚决BS五毛党和宝宝</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=15480">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=15480&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_7" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum783248" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=55452&page=1#pid783248', '话题链接已经复制到剪贴板')">8楼</strong>
													<em onclick="$('postmessage_783248').className='t_bigfont'">大</em>							<em onclick="$('postmessage_783248').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_783248').className='t_smallfont'">小</em>												发表于 2010-8-15 00:49&nbsp;																					<a href="viewthread.php?tid=55452&amp;page=1&amp;authorid=15480" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_7"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_7"></div><div id="ad_thread4_7"></div>
						
						
																											<div id="postmessage_783248" class="t_msgfont">不懂这些，只能前来支持了。。</div>

							
							
							
							
															<div id="post_rate_div_783248"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo783248_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=15480" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=55452&amp;repquote=783248&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 783248)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_7"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid783260" summary="pid783260" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=14016" target="_blank" id="userinfo783260" class="dropmenu" onmouseover="showMenu(this.id)">myparty</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=14016">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=14016&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_8" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum783260" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=55452&page=1#pid783260', '话题链接已经复制到剪贴板')">9楼</strong>
													<em onclick="$('postmessage_783260').className='t_bigfont'">大</em>							<em onclick="$('postmessage_783260').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_783260').className='t_smallfont'">小</em>												发表于 2010-8-15 01:10&nbsp;																					<a href="viewthread.php?tid=55452&amp;page=1&amp;authorid=14016" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_8"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_8"></div><div id="ad_thread4_8"></div>
													<h2>支持一个！</h2>
						
						
																											<div id="postmessage_783260" class="t_msgfont">不讨论政治！不讨论文化！不讨论国际局势不讨论……只说我们要自由！我们要民主！真正的！！！！现在的我还很胆怯，在这样压力的环境下我甚至没有勇气参加测试小组……害死人啊！！！</div>

							
							
							
							
															<div id="post_rate_div_783260"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo783260_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=14016" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=55452&amp;repquote=783260&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 783260)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_8"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid783307" summary="pid783307" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=17434" target="_blank" id="userinfo783307" class="dropmenu" onmouseover="showMenu(this.id)">贝立</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=17434">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=17434&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_9" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum783307" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=55452&page=1#pid783307', '话题链接已经复制到剪贴板')">10楼</strong>
													<em onclick="$('postmessage_783307').className='t_bigfont'">大</em>							<em onclick="$('postmessage_783307').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_783307').className='t_smallfont'">小</em>												发表于 2010-8-15 02:24&nbsp;																					<a href="viewthread.php?tid=55452&amp;page=1&amp;authorid=17434" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_9"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_9"></div><div id="ad_thread4_9"></div>
													<h2>支持的朋友歡迎加入《GFW，我们不高兴！网聚百万人反GFW审查》网络行动</h2>
						
						
																											<div id="postmessage_783307" class="t_msgfont">本软件开发项目是《GFW，我们不高兴！网聚百万人反GFW审查》网络行动的一部分，详情请查阅<a href="https://groups.google.com/group/nogfw?hl=zh-CN" target="_blank">https://groups.google.com/group/nogfw?hl=zh-CN</a><br />
<br />
请响应《GFW，我们不高兴！Say NO to GFW, 網聚百万人反GFW审查大呛声》，终结无休止的筑墙与翻墙，中国人决不能再做蒙着眼转磨、逆来顺受的驴！<br />
<br />
GFW，我们不高兴！<br />
我们的主题是：反GFW封锁，反互联网审查，反上网实名制，反雇佣5毛，反对侵犯隐私权，监视公民邮信，电脑！GFW，我们不高兴！<br />
<br />
副标语：我要看Youtube，我要推Twitter，我要上Facebook找朋友，我要用Wikipedia学知识，我要赚外汇！GFW，我们不高兴！<br />
<br />
以Google为例，当局坚持过滤搜索引擎从而逼走Google，这并不是一起对某1 个外国公司的孤立事件，它告示，当局否定互联网的价值：自由与开放。否定我们生而享有的信息与交流的基本权利：自由与开放。为此我们必须表达： GFW，我们不高兴！<br />
<br />
为了能挽留和解封优秀的网络服务请响应我们自发的《GFW，我们不高兴！Say NO! to GFW，百万人反GFW审查大呛声》，让当局搞清楚，我们不高兴！请当局刀下留Google，如此宰割下去，早晚会砍在我们每个人的身上！ 早晚会把监控芯片种到我们头颅里！<br />
<br />
您需要做的只是发送一次电邮至 nogfw+<a href="mailto:subscribe@googlegroups.com">subscribe@googlegroups.com</a> 便是在响应，实名/匿名都可以。欢迎访问论坛：<a href="http://www.google.hk/group/nogfw/" target="_blank">www.google.hk/group/nogfw/</a> ，收到您的响应邮件后，论坛会自动统计人数。此后再参与网上交流只需要回复邮件至<a href="mailto:nogfw@googlegroups.com">nogfw@googlegroups.com</a> 即可，无需一直翻墙。<br />
<br />
让这个7位数数字早日出现吧！我不相信当局会对上百万人下手，那无异于再次发动文革，是对社会稳定的最大破坏。我更不相信不高兴GFW审查的人连1 百万都没有，不然，“绿坝”又怎能被我们击溃？<br />
<br />
GFW，我们不高兴！<br />
<br />
我们在<a href="http://www.facebook.com/nogfw.cn" target="_blank">www.facebook.com/nogfw.cn</a> ，twitter ID @no_gfw ，服务Gmail/Gtalk：<a href="mailto:nogfw.cn@gmail.com">nogfw.cn@gmail.com</a><br />
<br />
GFW ,We are not happy ! （ GFW is Great Firewall of China’s Internet Censorship, it is the symbol of suppress the rights of speech and rights to know)<br />
<br />
I belive a million people will join together to say No! to GFW<br />
<br />
Our aims are:<br />
<br />
Anti-GFW (it blocking websites ) Anti-Internet censorship Anti-identity registration for use Internet Anti-paid commentator to manipulate public opinions Anti-infringe privacy Anti-tapping on people’s communications, Email, telephone,computer<br />
-- <br />
Max贝立<br />
*《GFW，我们不高兴！Say NO!&nbsp;&nbsp;to GFW 百万人反GFW审查大呛声》：之主题：反GFW封锁，反互联网审查，反上网实名制，反雇佣5毛，反对侵犯隐私权，监视公民邮信，电脑！GFW，我们不高兴！<br />
<br />
请帮助Re推下面的微博短文，谢谢<br />
<br />
#nogfw 我相信能召集百万人反GFW审查：请电邮nogfw+<a href="mailto:subscribe@googlegroups.com">subscribe@googlegroups.com</a>响应，汇集百万呼吁，<a href="http://www.google.hk/group/nogfw/" target="_blank">www.google.hk/group/nogfw/</a> 将自动统计人数。 #GFW，我们不高兴！请RT 成功就在指尖！<br />
编辑 引用 回复 TOP</div>

							
							
							
							
															<div id="post_rate_div_783307"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo783307_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://groups.google.com/group/nogfw" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=17434" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=55452&amp;repquote=783307&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 783307)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_9"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid783371" summary="pid783371" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=17218" target="_blank" id="userinfo783371" class="dropmenu" onmouseover="showMenu(this.id)">八宝饭</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=17218">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=17218&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_10" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum783371" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=55452&page=1#pid783371', '话题链接已经复制到剪贴板')">11楼</strong>
													<em onclick="$('postmessage_783371').className='t_bigfont'">大</em>							<em onclick="$('postmessage_783371').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_783371').className='t_smallfont'">小</em>												发表于 2010-8-15 08:07&nbsp;																					<a href="viewthread.php?tid=55452&amp;page=1&amp;authorid=17218" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_10"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_10"></div><div id="ad_thread4_10"></div>
						
						
																											<div id="postmessage_783371" class="t_msgfont">希望不只是口号，象之前的西厢计划，雷声大雨点小，贵在坚持，坚持会让你们获得更多的支持。</div>

							
							
							
							
															<div id="post_rate_div_783371"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo783371_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=17218" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=55452&amp;repquote=783371&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 783371)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_10"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid783711" summary="pid783711" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=17434" target="_blank" id="userinfo783711" class="dropmenu" onmouseover="showMenu(this.id)">贝立</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=17434">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=17434&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_11" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum783711" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=55452&page=1#pid783711', '话题链接已经复制到剪贴板')">12楼</strong>
													<em onclick="$('postmessage_783711').className='t_bigfont'">大</em>							<em onclick="$('postmessage_783711').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_783711').className='t_smallfont'">小</em>												发表于 2010-8-15 12:09&nbsp;																					<a href="viewthread.php?tid=55452&amp;page=1&amp;authorid=17434" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_11"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_11"></div><div id="ad_thread4_11"></div>
													<h2>急需图形界面开发人员，和asp.net或jsp开发人员以实现中央节点的功能</h2>
						
						
																											<div id="postmessage_783711" class="t_msgfont">做图形界面，因为要跨平台是QT是理想选择，如果人手不足wxWidgets、GTK+、python也可以。<br />
<br />
今后还需要美工，Photoshop绘图<br />
<br />
请联系Gmail/Gtalk：<a href="mailto:nogfw.cn@gmail.com">nogfw.cn@gmail.com</a><br />
<br />
谢谢</div>

							
							
							
							
															<div id="post_rate_div_783711"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo783711_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://groups.google.com/group/nogfw" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=17434" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=55452&amp;repquote=783711&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 783711)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_11"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid783737" summary="pid783737" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12307" target="_blank" id="userinfo783737" class="dropmenu" onmouseover="showMenu(this.id)">tywtyw2002</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12307">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12307&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_12" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum783737" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=55452&page=1#pid783737', '话题链接已经复制到剪贴板')">13楼</strong>
													<em onclick="$('postmessage_783737').className='t_bigfont'">大</em>							<em onclick="$('postmessage_783737').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_783737').className='t_smallfont'">小</em>												发表于 2010-8-15 12:25&nbsp;																					<a href="viewthread.php?tid=55452&amp;page=1&amp;authorid=12307" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_12"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_12"></div><div id="ad_thread4_12"></div>
						
						
																											<div id="postmessage_783737" class="t_msgfont">加油</div>

							
							
							
							
															<div id="post_rate_div_783737"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo783737_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=12307" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=55452&amp;repquote=783737&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 783737)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_12"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid784094" summary="pid784094" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8538" target="_blank" id="userinfo784094" class="dropmenu" onmouseover="showMenu(this.id)">halfbogey</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">I don’t need sex. The goverment fucks me everyday.</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8538">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8538&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_13" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum784094" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=55452&page=1#pid784094', '话题链接已经复制到剪贴板')">14楼</strong>
													<em onclick="$('postmessage_784094').className='t_bigfont'">大</em>							<em onclick="$('postmessage_784094').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_784094').className='t_smallfont'">小</em>												发表于 2010-8-15 16:40&nbsp;																					<a href="viewthread.php?tid=55452&amp;page=1&amp;authorid=8538" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_13"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_13"></div><div id="ad_thread4_13"></div>
						
						
																											<div id="postmessage_784094" class="t_msgfont">支持，看非计算机专业的咱能帮点啥忙不</div>

							
							
							
							
															<div id="post_rate_div_784094"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo784094_menu" style="display: none;">
										<div class="imicons">
													<a target='_blank' href='http://settings.messenger.live.com/Conversation/IMMe.aspx?invitee=zxl1412@hotmail.com&mkt=zh-cn'><img style='border-style: none;' src='http://messenger.services.live.com/users/zxl1412@hotmail.com/presenceimage?mkt=zh-cn' width='16' height='16' /></a>
																																			</div>
										<dl></dl>
										<p><a href="space.php?uid=8538" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=55452&amp;repquote=784094&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 784094)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_13"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid784161" summary="pid784161" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2271" target="_blank" id="userinfo784161" class="dropmenu" onmouseover="showMenu(this.id)">神仙一溜烟</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">杵君</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2271">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2271&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_14" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum784161" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=55452&page=1#pid784161', '话题链接已经复制到剪贴板')">15楼</strong>
													<em onclick="$('postmessage_784161').className='t_bigfont'">大</em>							<em onclick="$('postmessage_784161').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_784161').className='t_smallfont'">小</em>												发表于 2010-8-15 17:43&nbsp;																					<a href="viewthread.php?tid=55452&amp;page=1&amp;authorid=2271" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_14"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_14"></div><div id="ad_thread4_14"></div>
						
						
																											<div id="postmessage_784161" class="t_msgfont">tor不就是分布式的么？</div>

							
							
							
							
															<div id="post_rate_div_784161"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo784161_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=2271" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=55452&amp;repquote=784161&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 784161)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_14"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid784251" summary="pid784251" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=17434" target="_blank" id="userinfo784251" class="dropmenu" onmouseover="showMenu(this.id)">贝立</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=17434">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=17434&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_15" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum784251" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=55452&page=1#pid784251', '话题链接已经复制到剪贴板')">16楼</strong>
													<em onclick="$('postmessage_784251').className='t_bigfont'">大</em>							<em onclick="$('postmessage_784251').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_784251').className='t_smallfont'">小</em>												发表于 2010-8-15 19:07&nbsp;																					<a href="viewthread.php?tid=55452&amp;page=1&amp;authorid=17434" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_15"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_15"></div><div id="ad_thread4_15"></div>
						
						
																											<div id="postmessage_784251" class="t_msgfont">打开tor后需要先连接到目录服务器去获取可用代理资源的信息</div>

							
							
							
							
															<div id="post_rate_div_784251"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo784251_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://groups.google.com/group/nogfw" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=17434" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=55452&amp;repquote=784251&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 784251)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_15"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid784326" summary="pid784326" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10259" target="_blank" id="userinfo784326" class="dropmenu" onmouseover="showMenu(this.id)">darrenlee</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10259">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10259&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_16" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum784326" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=55452&page=1#pid784326', '话题链接已经复制到剪贴板')">17楼</strong>
													<em onclick="$('postmessage_784326').className='t_bigfont'">大</em>							<em onclick="$('postmessage_784326').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_784326').className='t_smallfont'">小</em>												发表于 2010-8-15 19:57&nbsp;																					<a href="viewthread.php?tid=55452&amp;page=1&amp;authorid=10259" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_16"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_16"></div><div id="ad_thread4_16"></div>
						
						
																											<div id="postmessage_784326" class="t_msgfont">直接把i2p拿来用吧 ，对中国线路优化一下</div>

							
							
							
							
															<div id="post_rate_div_784326"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo784326_menu" style="display: none;">
										<dl></dl>
											<p><a href="https://twitter.com/darrenlee3" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=10259" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=55452&amp;repquote=784326&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 784326)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_16"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid784329" summary="pid784329" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=14831" target="_blank" id="userinfo784329" class="dropmenu" onmouseover="showMenu(this.id)">zhexing_lin</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=14831">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=14831&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_17" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum784329" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=55452&page=1#pid784329', '话题链接已经复制到剪贴板')">18楼</strong>
													<em onclick="$('postmessage_784329').className='t_bigfont'">大</em>							<em onclick="$('postmessage_784329').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_784329').className='t_smallfont'">小</em>												发表于 2010-8-15 19:58&nbsp;																					<a href="viewthread.php?tid=55452&amp;page=1&amp;authorid=14831" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_17"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_17"></div><div id="ad_thread4_17"></div>
						
						
																											<div id="postmessage_784329" class="t_msgfont">强力顶一个~虽然不懂但是希望这个东西能早点出来！</div>

							
							
							
							
															<div id="post_rate_div_784329"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo784329_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=14831" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=55452&amp;repquote=784329&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 784329)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_17"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid784372" summary="pid784372" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2804" target="_blank" id="userinfo784372" class="dropmenu" onmouseover="showMenu(this.id)">musicool</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2804">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2804&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_18" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum784372" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=55452&page=1#pid784372', '话题链接已经复制到剪贴板')">19楼</strong>
													<em onclick="$('postmessage_784372').className='t_bigfont'">大</em>							<em onclick="$('postmessage_784372').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_784372').className='t_smallfont'">小</em>												发表于 2010-8-15 20:37&nbsp;																					<a href="viewthread.php?tid=55452&amp;page=1&amp;authorid=2804" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_18"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_18"></div><div id="ad_thread4_18"></div>
						
						
																											<div id="postmessage_784372" class="t_msgfont">内网用户解决方案有没有？</div>

							
							
							
							
															<div id="post_rate_div_784372"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo784372_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=2804" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=55452&amp;repquote=784372&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 784372)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_18"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid784394" summary="pid784394" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6873" target="_blank" id="userinfo784394" class="dropmenu" onmouseover="showMenu(this.id)">萧易寒</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6873">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6873&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_19" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum784394" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=55452&page=1#pid784394', '话题链接已经复制到剪贴板')">20楼</strong>
													<em onclick="$('postmessage_784394').className='t_bigfont'">大</em>							<em onclick="$('postmessage_784394').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_784394').className='t_smallfont'">小</em>												发表于 2010-8-15 20:59&nbsp;																					<a href="viewthread.php?tid=55452&amp;page=1&amp;authorid=6873" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_19"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_19"></div><div id="ad_thread4_19"></div>
						
						
																											<div id="postmessage_784394" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>bluegobin</i> 于 2010-8-15 00:08 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=783198&amp;ptid=55452" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
这个是没有中央节点的，但可以寄生在如GR上进行发布信息。<br />
这个封锁IP的话除非把Google封掉，就是赌不敢封Google。<br />
当然如果Google被封锁了，其他的RSS工具同样可以完成任务。基本上不太可能完全封掉。 </blockquote></div>类似于和无界一样通过google doc获取服务器IP？<br />
一样可以定点清除啊</div>

							
							
							
							
															<div id="post_rate_div_784394"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo784394_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=6873" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=55452&amp;repquote=784394&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 784394)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_19"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid784690" summary="pid784690" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=16496" target="_blank" id="userinfo784690" class="dropmenu" onmouseover="showMenu(this.id)">lehui99</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=16496">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=16496&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_20" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum784690" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=55452&page=1#pid784690', '话题链接已经复制到剪贴板')">21楼</strong>
													<em onclick="$('postmessage_784690').className='t_bigfont'">大</em>							<em onclick="$('postmessage_784690').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_784690').className='t_smallfont'">小</em>												发表于 2010-8-16 01:01&nbsp;																					<a href="viewthread.php?tid=55452&amp;page=1&amp;authorid=16496" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_20"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_20"></div><div id="ad_thread4_20"></div>
						
						
																											<div id="postmessage_784690" class="t_msgfont">不是doc，而是reader,而且还需要输入图片验证码</div>

							
							
							
							
															<div id="post_rate_div_784690"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo784690_menu" style="display: none;">
										<dl></dl>
											<p><a href="https://www.google.com/reader/shared/lehui99" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=16496" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=55452&amp;repquote=784690&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 784690)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_20"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid785317" summary="pid785317" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6873" target="_blank" id="userinfo785317" class="dropmenu" onmouseover="showMenu(this.id)">萧易寒</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6873">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6873&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_21" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum785317" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=55452&page=1#pid785317', '话题链接已经复制到剪贴板')">22楼</strong>
													<em onclick="$('postmessage_785317').className='t_bigfont'">大</em>							<em onclick="$('postmessage_785317').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_785317').className='t_smallfont'">小</em>												发表于 2010-8-16 15:30&nbsp;																					<a href="viewthread.php?tid=55452&amp;page=1&amp;authorid=6873" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_21"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_21"></div><div id="ad_thread4_21"></div>
						
						
																											<div id="postmessage_785317" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>lehui99</i> 于 2010-8-16 01:01 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=784690&amp;ptid=55452" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
不是doc，而是reader,而且还需要输入图片验证码 </blockquote></div>google reader现在不是已经经常被重置了吗？</div>

							
							
							
							
															<div id="post_rate_div_785317"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo785317_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=6873" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=55452&amp;repquote=785317&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 785317)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_21"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid785506" summary="pid785506" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=17434" target="_blank" id="userinfo785506" class="dropmenu" onmouseover="showMenu(this.id)">贝立</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=17434">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=17434&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_22" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum785506" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=55452&page=1#pid785506', '话题链接已经复制到剪贴板')">23楼</strong>
													<em onclick="$('postmessage_785506').className='t_bigfont'">大</em>							<em onclick="$('postmessage_785506').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_785506').className='t_smallfont'">小</em>												发表于 2010-8-16 18:11&nbsp;																					<a href="viewthread.php?tid=55452&amp;page=1&amp;authorid=17434" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_22"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_22"></div><div id="ad_thread4_22"></div>
						
						
																											<div id="postmessage_785506" class="t_msgfont">RSS Feed不止是用Google reader，很多方法订阅的，包括邮箱订阅</div>

							
							
							
							
															<div id="post_rate_div_785506"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo785506_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://groups.google.com/group/nogfw" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=17434" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=55452&amp;repquote=785506&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 785506)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_22"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid785517" summary="pid785517" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=16496" target="_blank" id="userinfo785517" class="dropmenu" onmouseover="showMenu(this.id)">lehui99</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=16496">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=16496&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_23" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum785517" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=55452&page=1#pid785517', '话题链接已经复制到剪贴板')">24楼</strong>
													<em onclick="$('postmessage_785517').className='t_bigfont'">大</em>							<em onclick="$('postmessage_785517').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_785517').className='t_smallfont'">小</em>												发表于 2010-8-16 18:22&nbsp;																					<a href="viewthread.php?tid=55452&amp;page=1&amp;authorid=16496" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_23"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_23"></div><div id="ad_thread4_23"></div>
						
						
																											<div id="postmessage_785517" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>萧易寒</i> 于 2010-8-16 15:30 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=785317&amp;ptid=55452" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
<br />
<br />
google reader现在不是已经经常被重置了吗？ </blockquote></div>https的google reader从来不会被重置。</div>

							
							
							
							
															<div id="post_rate_div_785517"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo785517_menu" style="display: none;">
										<dl></dl>
											<p><a href="https://www.google.com/reader/shared/lehui99" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=16496" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=55452&amp;repquote=785517&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 785517)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_23"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid785569" summary="pid785569" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>																		john52712</cite>
							该用户已被删除
															</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum785569" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=55452&page=1#pid785569', '话题链接已经复制到剪贴板')">25楼</strong>
													<em onclick="$('postmessage_785569').className='t_bigfont'">大</em>							<em onclick="$('postmessage_785569').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_785569').className='t_smallfont'">小</em>												发表于 2010-8-16 19:41&nbsp;																					<a href="viewthread.php?tid=55452&amp;page=1&amp;authorid=11971" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_24"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_24"></div><div id="ad_thread4_24"></div>
						
						
																											<div id="postmessage_785569" class="t_msgfont">五毛看好了，滚回去报告你们的主子吧</div>

							
							
							
							
															<div id="post_rate_div_785569"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=55452&amp;repquote=785569&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 785569)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_24"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid785579" summary="pid785579" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6873" target="_blank" id="userinfo785579" class="dropmenu" onmouseover="showMenu(this.id)">萧易寒</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6873">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6873&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_25" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum785579" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=55452&page=1#pid785579', '话题链接已经复制到剪贴板')">26楼</strong>
													<em onclick="$('postmessage_785579').className='t_bigfont'">大</em>							<em onclick="$('postmessage_785579').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_785579').className='t_smallfont'">小</em>												发表于 2010-8-16 19:56&nbsp;																					<a href="viewthread.php?tid=55452&amp;page=1&amp;authorid=6873" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_25"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_25"></div><div id="ad_thread4_25"></div>
						
						
																											<div id="postmessage_785579" class="t_msgfont">RSS不是一样要有地址？直接屏蔽RSS的地址，这样你就必须用墙外的Reader才能获取，有点麻烦。<br />
中央节点为什么不考虑IPv6的地址？</div>

							
							
							
							
															<div id="post_rate_div_785579"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo785579_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=6873" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=55452&amp;repquote=785579&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 785579)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_25"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid785677" summary="pid785677" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=16496" target="_blank" id="userinfo785677" class="dropmenu" onmouseover="showMenu(this.id)">lehui99</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=16496">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=16496&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_26" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum785677" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=55452&page=1#pid785677', '话题链接已经复制到剪贴板')">27楼</strong>
													<em onclick="$('postmessage_785677').className='t_bigfont'">大</em>							<em onclick="$('postmessage_785677').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_785677').className='t_smallfont'">小</em>												发表于 2010-8-16 21:37&nbsp;																					<a href="viewthread.php?tid=55452&amp;page=1&amp;authorid=16496" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_26"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_26"></div><div id="ad_thread4_26"></div>
						
						
																											<div id="postmessage_785677" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>萧易寒</i> 于 2010-8-16 19:56 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=785579&amp;ptid=55452" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
RSS不是一样要有地址？直接屏蔽RSS的地址，这样你就必须用墙外的Reader才能获取，有点麻烦。<br />
中央节点为什么不考虑IPv6的地址？ </blockquote></div>没看明白什么意思。RSS地址本来就希望GFW屏蔽的。</div>

							
							
							
							
															<div id="post_rate_div_785677"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo785677_menu" style="display: none;">
										<dl></dl>
											<p><a href="https://www.google.com/reader/shared/lehui99" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=16496" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=55452&amp;repquote=785677&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 785677)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_26"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid785756" summary="pid785756" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6873" target="_blank" id="userinfo785756" class="dropmenu" onmouseover="showMenu(this.id)">萧易寒</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6873">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6873&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_27" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum785756" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=55452&page=1#pid785756', '话题链接已经复制到剪贴板')">28楼</strong>
													<em onclick="$('postmessage_785756').className='t_bigfont'">大</em>							<em onclick="$('postmessage_785756').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_785756').className='t_smallfont'">小</em>												发表于 2010-8-16 22:48&nbsp;																					<a href="viewthread.php?tid=55452&amp;page=1&amp;authorid=6873" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_27"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_27"></div><div id="ad_thread4_27"></div>
													<h2>回复 27楼 lehui99 的话题</h2>
						
						
																											<div id="postmessage_785756" class="t_msgfont">a.&nbsp; &nbsp; Q：如何使得中央节点难以被封锁？<br />
A：我们可以利用发布RSS feed 如 Google Reader，或IM，Buzz等发布。如：由于Google Reader可以使用https协议进行浏览，并且是架设在Google的主域<a href="http://www.google.com" target="_blank">www.google.com</a>上的，导致如果封锁Google Reader就等于封锁了几乎所有需要登陆才能使用的Google服务（包括Gmail）。</div>

							
							
							
							
															<div id="post_rate_div_785756"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo785756_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=6873" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=55452&amp;repquote=785756&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 785756)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_27"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid785997" summary="pid785997" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6518" target="_blank" id="userinfo785997" class="dropmenu" onmouseover="showMenu(this.id)">id已被绿坝屏蔽</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">闃呭悗鍗崇剼</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6518">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6518&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_28" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum785997" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=55452&page=1#pid785997', '话题链接已经复制到剪贴板')">29楼</strong>
													<em onclick="$('postmessage_785997').className='t_bigfont'">大</em>							<em onclick="$('postmessage_785997').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_785997').className='t_smallfont'">小</em>												发表于 2010-8-17 09:10&nbsp;																					<a href="viewthread.php?tid=55452&amp;page=1&amp;authorid=6518" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_28"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_28"></div><div id="ad_thread4_28"></div>
						
						
																											<div id="postmessage_785997" class="t_msgfont">支持这样的软件，但是鄙视寄生Google的人。你们希望G Reader被封了才安心么？<br />
<br />
还有用了G Reader作为中央节点就不要宣称自己没有中央节点。在ipv4架构下没有supernode的纯平p2p网络是不可能存在的。因为有万恶的NAT。<br />
<br />
[<i> 本帖最后由 id已被绿坝屏蔽 于 2010-8-17 09:11 编辑 </i>]</div>

							
							
							
							
															<div id="post_rate_div_785997"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo785997_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=6518" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=55452&amp;repquote=785997&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 785997)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_28"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid786234" summary="pid786234" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=16496" target="_blank" id="userinfo786234" class="dropmenu" onmouseover="showMenu(this.id)">lehui99</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=16496">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=16496&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_29" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum786234" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=55452&page=1#pid786234', '话题链接已经复制到剪贴板')">30楼</strong>
													<em onclick="$('postmessage_786234').className='t_bigfont'">大</em>							<em onclick="$('postmessage_786234').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_786234').className='t_smallfont'">小</em>												发表于 2010-8-17 11:54&nbsp;																					<a href="viewthread.php?tid=55452&amp;page=1&amp;authorid=16496" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_29"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_29"></div><div id="ad_thread4_29"></div>
						
						
																											<div id="postmessage_786234" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>萧易寒</i> 于 2010-8-16 22:48 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=785756&amp;ptid=55452" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
a.&nbsp; &nbsp; Q：如何使得中央节点难以被封锁？<br />
A：我们可以利用发布RSS feed 如 Google Reader，或IM，Buzz等发布。如：由于Google Reader可以使用https协议进行浏览，并且是架设在Google的主域<a href="http://www.google.com" target="_blank">www.google.com</a>上的，导致如 ... </blockquote></div>嗯，所以希望RSS被封。<div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>id已被绿坝屏蔽</i> 于 2010-8-17 09:10 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=785997&amp;ptid=55452" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
支持这样的软件，但是鄙视寄生Google的人。你们希望G Reader被封了才安心么？<br />
<br />
还有用了G Reader作为中央节点就不要宣称自己没有中央节点。在ipv4架构下没有supernode的纯平p2p网络是不可能存在的。因为有万恶的NA ... </blockquote></div>GReader只是一个例子，可以利用很多类似GReader的其他服务。<br />
好像从来没有宣称自己没有中央节点过。</div>

							
							
							
							
															<div id="post_rate_div_786234"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo786234_menu" style="display: none;">
										<dl></dl>
											<p><a href="https://www.google.com/reader/shared/lehui99" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=16496" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=55452&amp;repquote=786234&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 786234)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_29"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid786246" summary="pid786246" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=17755" target="_blank" id="userinfo786246" class="dropmenu" onmouseover="showMenu(this.id)">faydao</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">小刀周远 faydao@twitter.com</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=17755">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=17755&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_30" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum786246" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=55452&page=1#pid786246', '话题链接已经复制到剪贴板')">31楼</strong>
													<em onclick="$('postmessage_786246').className='t_bigfont'">大</em>							<em onclick="$('postmessage_786246').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_786246').className='t_smallfont'">小</em>												发表于 2010-8-17 12:03&nbsp;																					<a href="viewthread.php?tid=55452&amp;page=1&amp;authorid=17755" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_30"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_30"></div><div id="ad_thread4_30"></div>
						
						
																											<div id="postmessage_786246" class="t_msgfont">LZ画个流程图不就挺能说明问题了嘛。。。</div>

							
							
							
							
															<div id="post_rate_div_786246"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo786246_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://faydao.com" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=17755" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=55452&amp;repquote=786246&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 786246)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_30"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid786252" summary="pid786252" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12197" target="_blank" id="userinfo786252" class="dropmenu" onmouseover="showMenu(this.id)">曙光再现</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">&#9745;80后 &#9745;工科学生 &#9745;ACG fan &#9745;党龄八年 &#9745;喜外国商业大片 &#9745;喜翻墙 &#9745;喜GR &#9745;黑丝控 &#9745;美腿控 &#9745;时事控 &#9745;伪愤青 &#9745;草泥马军团预备团员&#9745;新人@ssg2006求fo</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12197">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12197&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_31" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum786252" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=55452&page=1#pid786252', '话题链接已经复制到剪贴板')">32楼</strong>
													<em onclick="$('postmessage_786252').className='t_bigfont'">大</em>							<em onclick="$('postmessage_786252').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_786252').className='t_smallfont'">小</em>												发表于 2010-8-17 12:07&nbsp;																					<a href="viewthread.php?tid=55452&amp;page=1&amp;authorid=12197" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_31"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_31"></div><div id="ad_thread4_31"></div>
						
						
																											<div id="postmessage_786252" class="t_msgfont">不懂技术，常带套，帮顶</div>

							
							
							
							
															<div id="post_rate_div_786252"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo786252_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=12197" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=55452&amp;repquote=786252&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 786252)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_31"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid786256" summary="pid786256" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=16496" target="_blank" id="userinfo786256" class="dropmenu" onmouseover="showMenu(this.id)">lehui99</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=16496">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=16496&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_32" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum786256" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=55452&page=1#pid786256', '话题链接已经复制到剪贴板')">33楼</strong>
													<em onclick="$('postmessage_786256').className='t_bigfont'">大</em>							<em onclick="$('postmessage_786256').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_786256').className='t_smallfont'">小</em>												发表于 2010-8-17 12:09&nbsp;																					<a href="viewthread.php?tid=55452&amp;page=1&amp;authorid=16496" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_32"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_32"></div><div id="ad_thread4_32"></div>
						
						
																											<div id="postmessage_786256" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>faydao</i> 于 2010-8-17 12:03 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=786246&amp;ptid=55452" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
LZ画个流程图不就挺能说明问题了嘛。。。 </blockquote></div>流程图已经有了，需要加入nogfw的Google Group才能看到。</div>

							
							
							
							
															<div id="post_rate_div_786256"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo786256_menu" style="display: none;">
										<dl></dl>
											<p><a href="https://www.google.com/reader/shared/lehui99" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=16496" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=55452&amp;repquote=786256&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 786256)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_32"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid786998" summary="pid786998" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12307" target="_blank" id="userinfo786998" class="dropmenu" onmouseover="showMenu(this.id)">tywtyw2002</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12307">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12307&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_33" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum786998" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=55452&page=1#pid786998', '话题链接已经复制到剪贴板')">34楼</strong>
													<em onclick="$('postmessage_786998').className='t_bigfont'">大</em>							<em onclick="$('postmessage_786998').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_786998').className='t_smallfont'">小</em>												发表于 2010-8-18 04:18&nbsp;																					<a href="viewthread.php?tid=55452&amp;page=1&amp;authorid=12307" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_33"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_33"></div><div id="ad_thread4_33"></div>
						
						
																											<div id="postmessage_786998" class="t_msgfont">kad 可以考慮下</div>

							
							
							
							
															<div id="post_rate_div_786998"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo786998_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=12307" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=55452&amp;repquote=786998&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 786998)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_33"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid787761" summary="pid787761" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=16496" target="_blank" id="userinfo787761" class="dropmenu" onmouseover="showMenu(this.id)">lehui99</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=16496">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=16496&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_34" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum787761" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=55452&page=1#pid787761', '话题链接已经复制到剪贴板')">35楼</strong>
													<em onclick="$('postmessage_787761').className='t_bigfont'">大</em>							<em onclick="$('postmessage_787761').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_787761').className='t_smallfont'">小</em>												发表于 2010-8-18 17:18&nbsp;																					<a href="viewthread.php?tid=55452&amp;page=1&amp;authorid=16496" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_34"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_34"></div><div id="ad_thread4_34"></div>
						
						
																											<div id="postmessage_787761" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>tywtyw2002</i> 于 2010-8-18 04:18 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=786998&amp;ptid=55452" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
kad 可以考慮下 </blockquote></div>kad已经在google groups中讨论过了，具体可以加入google group查看讨论内容。</div>

							
							
							
							
															<div id="post_rate_div_787761"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo787761_menu" style="display: none;">
										<dl></dl>
											<p><a href="https://www.google.com/reader/shared/lehui99" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=16496" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=55452&amp;repquote=787761&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 787761)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_34"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid787895" summary="pid787895" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10135" target="_blank" id="userinfo787895" class="dropmenu" onmouseover="showMenu(this.id)">偶佯疯</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">我是个读书人</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10135">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10135&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_35" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum787895" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=55452&page=1#pid787895', '话题链接已经复制到剪贴板')">36楼</strong>
													<em onclick="$('postmessage_787895').className='t_bigfont'">大</em>							<em onclick="$('postmessage_787895').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_787895').className='t_smallfont'">小</em>												发表于 2010-8-18 20:02&nbsp;																					<a href="viewthread.php?tid=55452&amp;page=1&amp;authorid=10135" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_35"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_35"></div><div id="ad_thread4_35"></div>
						
						
																											<div id="postmessage_787895" class="t_msgfont">无能为力呀，没技术。表示支持</div>

							
							
							
							
															<div id="post_rate_div_787895"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo787895_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://izlf.info" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=10135" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=55452&amp;repquote=787895&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 787895)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_35"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid788580" summary="pid788580" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12463" target="_blank" id="userinfo788580" class="dropmenu" onmouseover="showMenu(this.id)">DaemonEye</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">不河蟹的围观团团员</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12463">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12463&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_36" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum788580" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=55452&page=1#pid788580', '话题链接已经复制到剪贴板')">37楼</strong>
													<em onclick="$('postmessage_788580').className='t_bigfont'">大</em>							<em onclick="$('postmessage_788580').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_788580').className='t_smallfont'">小</em>												发表于 2010-8-19 12:08&nbsp;																					<a href="viewthread.php?tid=55452&amp;page=1&amp;authorid=12463" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_36"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_36"></div><div id="ad_thread4_36"></div>
						
						
																											<div id="postmessage_788580" class="t_msgfont">感觉中央那个点和无界的思路有点像 利用开源服务+加密 无成本扩展还让你不好封锁</div>

							
							
							
							
															<div id="post_rate_div_788580"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo788580_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=12463" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=55452&amp;repquote=788580&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 788580)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_36"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid789618" summary="pid789618" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 <a name="lastpost"></a>					<cite>											<a href="space.php?uid=17434" target="_blank" id="userinfo789618" class="dropmenu" onmouseover="showMenu(this.id)">贝立</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=17434">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=17434&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_37" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum789618" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=55452&page=1#pid789618', '话题链接已经复制到剪贴板')">38楼</strong>
													<em onclick="$('postmessage_789618').className='t_bigfont'">大</em>							<em onclick="$('postmessage_789618').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_789618').className='t_smallfont'">小</em>												发表于 2010-8-20 08:18&nbsp;																					<a href="viewthread.php?tid=55452&amp;page=1&amp;authorid=17434" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_37"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_37"></div><div id="ad_thread4_37"></div>
						
						
																											<div id="postmessage_789618" class="t_msgfont">开发软件只是我们《网聚百万人反GFW审查》整体计划中的一部分，推广这个活动我们还需要做很多方面的，文宣，策划，美工，翻译，只要您觉得您能使得上劲就有能力帮助，一同拆墙。<div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>偶佯疯</i> 于 2010-8-18 20:02 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=787895&amp;ptid=55452" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
无能为力呀，没技术。表示支持 </blockquote></div>请响应《GFW，我们不高兴！Say NO to GFW, 網聚百万人反GFW审查大呛声》，终结无休止的筑墙与翻墙，中国人决不能再做蒙着眼转磨、逆来顺受的驴！<br />
<br />
GFW，我们不高兴！<br />
我们的主题是：反GFW封锁，反互联网审查，反上网实名制，反雇佣5毛，反对侵犯隐私权，监视公民邮信，电脑！GFW，我们不高兴！<br />
<br />
副标语：我要看Youtube，我要推Twitter，我要上Facebook找朋友，我要用Wikipedia学知识，我要赚外汇！GFW，我们不高兴！<br />
<br />
以Google为例，当局坚持过滤搜索引擎从而逼走Google，这并不是一起对某1 个外国公司的孤立事件，它告示，当局否定互联网的价值：自由与开放。否定我们生而享有的信息与交流的基本权利：自由与开放。为此我们必须表达： GFW，我们不高兴！<br />
<br />
为了能挽留和解封优秀的网络服务请响应我们自发的《GFW，我们不高兴！Say NO! to GFW，百万人反GFW审查大呛声》，让当局搞清楚，我们不高兴！请当局刀下留Google，如此宰割下去，早晚会砍在我们每个人的身上！ 早晚会把监控芯片种到我们头颅里！<br />
<br />
您需要做的只是发送一次电邮至 nogfw+<a href="mailto:subscribe@googlegroups.com">subscribe@googlegroups.com</a> 便是在响应，实名/匿名都可以。欢迎访问论坛：<a href="http://www.google.hk/group/nogfw/" target="_blank">www.google.hk/group/nogfw/</a> ，收到您的响应邮件后，论坛会自动统计人数。此后再参与网上交流只需要回复邮件至<a href="mailto:nogfw@googlegroups.com">nogfw@googlegroups.com</a> 即可，无需一直翻墙。<br />
<br />
让这个7位数数字早日出现吧！我不相信当局会对上百万人下手，那无异于再次发动文革，是对社会稳定的最大破坏。我更不相信不高兴GFW审查的人连1 百万都没有，不然，“绿坝”又怎能被我们击溃？<br />
<br />
GFW，我们不高兴！<br />
<br />
我们在<a href="http://www.facebook.com/nogfw.cn" target="_blank">www.facebook.com/nogfw.cn</a> ，twitter ID @no_gfw ，服务Gmail/Gtalk：<a href="mailto:nogfw.cn@gmail.com">nogfw.cn@gmail.com</a><br />
<br />
GFW ,We are not happy ! （ GFW is Great Firewall of China’s Internet Censorship, it is the symbol of suppress the rights of speech and rights to know)<br />
<br />
I belive a million people will join together to say No! to GFW<br />
<br />
Our aims are:<br />
<br />
Anti-GFW (it blocking websites ) Anti-Internet censorship Anti-identity registration for use Internet Anti-paid commentator to manipulate public opinions Anti-infringe privacy Anti-tapping on people’s communications, Email, telephone,computer<br />
-- <br />
Max贝立<br />
*《GFW，我们不高兴！Say NO!&nbsp;&nbsp;to GFW 百万人反GFW审查大呛声》：之主题：反GFW封锁，反互联网审查，反上网实名制，反雇佣5毛，反对侵犯隐私权，监视公民邮信，电脑！GFW，我们不高兴！<br />
<br />
请帮助Re推下面的微博短文，谢谢<br />
<br />
#nogfw 我相信能召集百万人反GFW审查：请电邮nogfw+<a href="mailto:subscribe@googlegroups.com">subscribe@googlegroups.com</a>响应，汇集百万呼吁，<a href="http://www.google.hk/group/nogfw/" target="_blank">www.google.hk/group/nogfw/</a> 将自动统计人数。 #GFW，我们不高兴！请RT 成功就在指尖！</div>

							
							
							
							
															<div id="post_rate_div_789618"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo789618_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://groups.google.com/group/nogfw" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=17434" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=55452&amp;repquote=789618&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 789618)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_37"></div>				</div>
			</td>
		</tr>
		</table>
		</div>
</form>





<div class="pages_btns">
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=55452&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=55452&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
				<span class="postbtn" id="newspecialtmp" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=55452&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

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

	<form method="post" id="postform" action="post.php?action=reply&amp;fid=26&amp;tid=55452&amp;extra=&amp;replysubmit=yes" onSubmit="return validate(this)">
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
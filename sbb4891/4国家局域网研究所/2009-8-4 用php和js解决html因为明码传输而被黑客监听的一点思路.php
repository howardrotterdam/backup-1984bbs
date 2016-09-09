<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<title>用php和js解决html因为明码传输而被黑客监听的一点思路 - 国家局域网研究所 -  1984bbs.com </title>
<meta name="keywords" content="" />
<meta name="MSSmartTagsPreventParsing" content="True" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<link rel="archives" title="1984bbs.com" href="https://1984bbs.com/archiver/" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_viewthread.css" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_common.css" />
<script type="text/javascript">
	var discuz_uid = 13019;var IMGDIR = 'images/default';var attackevasive = '0';var gid = 0;var STYLEID = '1';
	gid = parseInt('3');var fid = parseInt('26');var tid = parseInt('18805');
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
			<p><a href="index.php" id="forumlist" onmouseover="showMenu(this.id)" class="dropmenu">1984bbs.com</a> &raquo; <a href="forumdisplay.php?fid=26">国家局域网研究所</a> &raquo; 用php和js解决html因为明码传输而被黑客监听的一点思路</p>
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
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=18805&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=18805&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
				<span class="postbtn" id="newspecial" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=18805&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

	<ul class="popupmenu_popup newspecialmenu" id="newspecial_menu" style="display: none">
		<li><a href="post.php?action=newthread&amp;fid=26&amp;extra=">发新话题</a></li>
		<li class="poll"><a href="post.php?action=newthread&amp;fid=26&amp;extra=&amp;special=1">发布投票</a></li>													</ul>

<form method="post" name="modactions">
	<input type="hidden" name="formhash" value="823c9fa2" />
	<div class="mainbox viewthread">
		<span class="headactions">
					<a href="my.php?item=favorites&amp;tid=18805" id="ajax_favorite" onclick="ajaxmenu(event, this.id, 3000, 0)">收藏</a>
			<a href="my.php?item=subscriptions&amp;subadd=18805" id="ajax_subscription" onclick="ajaxmenu(event, this.id, 3000, null, 0)">订阅</a>
			<a href="misc.php?action=emailfriend&amp;tid=18805" id="emailfriend" onclick="ajaxmenu(event, this.id, 9000000, null, 0)">推荐</a>
				<a href="viewthread.php?action=printable&amp;tid=18805" target="_blank" class="notabs">打印</a>
				</span>
		<h1>用php和js解决html因为明码传输而被黑客监听的一点思路		</h1>
							<table id="pid190696" summary="pid190696" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1296" target="_blank" id="userinfo190696" class="dropmenu" onmouseover="showMenu(this.id)">低调の华丽</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">伪摇滚青年</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1296">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1296&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_0" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum190696" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=18805&page=1#pid190696', '话题链接已经复制到剪贴板')">1楼</strong>
													<em onclick="$('postmessage_190696').className='t_bigfont'">大</em>							<em onclick="$('postmessage_190696').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_190696').className='t_smallfont'">小</em>												发表于 2009-8-4 23:35&nbsp;																					<a href="viewthread.php?tid=18805&amp;page=1&amp;authorid=1296" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_0"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_0"></div><div id="ad_thread4_0"></div>
													<h2>用php和js解决html因为明码传输而被黑客监听的一点思路</h2>
						
						
																											<div id="postmessage_190696" class="t_msgfont">转自：csdn <a href="http://topic.csdn.net/u/20070616/20/9b0c254a-d4c9-42e2-b1bb-ccd5386db35f.html" target="_blank">http://topic.csdn.net/u/20070616 ... b-ccd5386db35f.html</a><br />
tcp&nbsp; &nbsp;+&nbsp; &nbsp;html页面因为是明码传送，内容很容易被黑客监听和截获 <br />
为了安全起见，特别是一些电子商务类站点要解决这个问题一般采用ssl传输，但ssl的速度比较慢，一般只用在涉及密码和金钱的传输处 <br />
<br />
解决这个问题简单方法是用轻型加密算法，将要传输的内容转换成密文，兼容于大部分浏览器 <br />
<br />
这里遇到两个问题： <br />
1&nbsp; &nbsp;服务器端将数据加密，客户端要有能力解密，并且效率要高 <br />
2&nbsp; &nbsp;加密用的密码要安全，保证密码不会被第三方解密 <br />
<br />
问题1&nbsp; &nbsp;可以用xxtea算法加密，只需要很少的代码就能将字符串加密和解密，也可以用其他标准算法，php在加密方面有很强的扩展，可以查看手册，但必须有js的解密程序 <br />
问题2&nbsp; &nbsp;可应用Diffie-Hellman密钥交换算法，这种算法目前还算安全，它是建立在基于有限域中计算离散对数的困难性问题之上 <br />
<br />
整理一下思路，客户端先用Diffie-Hellman交换密钥，然后用xxtea类似的算法加密传输，客户端用js解密显示。 <br />
<br />
但这些似乎比较麻烦，但是如今web2.0盛行，用ajax技术可以有效减少需要传输的数据量，即只更新需要更新的层 <br />
<br />
遇到验证密码的地方可以用js在客户端就计算md5的哈希值，再通过加密的通道传输，基本就能基本杜绝监听 <br />
<br />
也许你读后会觉得有些麻烦，但这是有效的替代ssl复杂传输协议的思路，平衡了速度和安全性。 <br />
<br />
最后：搜索引擎不能运行js所以蜘蛛就不能爬了，对付这个问题&nbsp; &nbsp;程序里可以根据客户端或者ip所在地提供不同的内容，比如服务器放在国外，对国外的ip不加密，对国内或未知的ip进行加密。</div>

							
							
							
							
															<div id="post_rate_div_190696"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo190696_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1296" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=18805&amp;repquote=190696&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 190696)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_0"></div>				</div>
			</td>
		</tr>
		</table>
		</div><div class="ad_column" id="ad_interthread"><a href="/viewthread.php?tid=54699" target="_blank" style="color:red;">1984bbs是一个非营利项目，它需要您的捐助！</font></a>		</div>
	<div class="mainbox viewthread">
			<table id="pid190697" summary="pid190697" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1296" target="_blank" id="userinfo190697" class="dropmenu" onmouseover="showMenu(this.id)">低调の华丽</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">伪摇滚青年</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1296">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1296&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_1" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum190697" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=18805&page=1#pid190697', '话题链接已经复制到剪贴板')">2楼</strong>
													<em onclick="$('postmessage_190697').className='t_bigfont'">大</em>							<em onclick="$('postmessage_190697').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_190697').className='t_smallfont'">小</em>												发表于 2009-8-4 23:36&nbsp;																					<a href="viewthread.php?tid=18805&amp;page=1&amp;authorid=1296" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_1"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_1"></div><div id="ad_thread4_1"></div>
						
						
																											<div id="postmessage_190697" class="t_msgfont">如何避过GFW的关键字过滤<br />
<br />
首先声明，本人憎恨FLG，拥护国家对互联网敏感信息进行过滤的政策。本文所阐述的方法是为了保证守法公民浏览合法网站的权利。<br />
<br />
根据目前对GFW特点的研究，GFW会对HTTP协议中的文字信息进行关键字过滤，如果HTTP流中包含了敏感关键字，GFW就会断开这条HTTP连接。如果把HTTP协议中传输的文字信息进行简单加密就可以避过GFW。方法如下：<br />
<br />
1.用户向服务器提交文字信息时使用js对提交内容进行简单加密(如移位),然后再提交给服务器<br />
2.服务器收到加密后的文字信息,存放到数据库或文件<br />
3.用户浏览页面时,服务器传回加密的数据,客户端浏览器使用js进行解密,然后将解密出的明文显示给用户<br />
<br />
<br />
特点:<br />
1.客户端和服务器均不需要额外安装任何软件<br />
2.加密/解密全部在客户端浏览器中使用js操作,不会增加服务器负担<br />
3.整个过程对用户完全透明,不需要客户干预<br />
4.只需对用户提交信息进行加/解密,其他信息可以不变</div>

							
							
							
							
															<div id="post_rate_div_190697"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo190697_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1296" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=18805&amp;repquote=190697&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 190697)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_1"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid190879" summary="pid190879" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=5449" target="_blank" id="userinfo190879" class="dropmenu" onmouseover="showMenu(this.id)">huge</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=5449">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=5449&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_2" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum190879" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=18805&page=1#pid190879', '话题链接已经复制到剪贴板')">3楼</strong>
													<em onclick="$('postmessage_190879').className='t_bigfont'">大</em>							<em onclick="$('postmessage_190879').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_190879').className='t_smallfont'">小</em>												发表于 2009-8-5 05:46&nbsp;																					<a href="viewthread.php?tid=18805&amp;page=1&amp;authorid=5449" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_2"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_2"></div><div id="ad_thread4_2"></div>
						
						
																											<div id="postmessage_190879" class="t_msgfont">我早就做了一个。</div>

							
							
							
							
															<div id="post_rate_div_190879"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo190879_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=5449" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=18805&amp;repquote=190879&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 190879)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_2"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid191162" summary="pid191162" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6873" target="_blank" id="userinfo191162" class="dropmenu" onmouseover="showMenu(this.id)">萧易寒</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6873">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6873&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_3" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum191162" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=18805&page=1#pid191162', '话题链接已经复制到剪贴板')">4楼</strong>
													<em onclick="$('postmessage_191162').className='t_bigfont'">大</em>							<em onclick="$('postmessage_191162').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_191162').className='t_smallfont'">小</em>												发表于 2009-8-5 10:44&nbsp;																					<a href="viewthread.php?tid=18805&amp;page=1&amp;authorid=6873" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_3"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_3"></div><div id="ad_thread4_3"></div>
						
						
																											<div id="postmessage_191162" class="t_msgfont">标准的gzip压缩方式已经对最新的GFW无效了</div>

							
							
							
							
															<div id="post_rate_div_191162"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo191162_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=6873" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=18805&amp;repquote=191162&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 191162)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_3"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid191279" summary="pid191279" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6592" target="_blank" id="userinfo191279" class="dropmenu" onmouseover="showMenu(this.id)">heifenbrug</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">沉渣泛起，流毒不淺</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6592">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6592&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_4" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum191279" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=18805&page=1#pid191279', '话题链接已经复制到剪贴板')">5楼</strong>
													<em onclick="$('postmessage_191279').className='t_bigfont'">大</em>							<em onclick="$('postmessage_191279').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_191279').className='t_smallfont'">小</em>												发表于 2009-8-5 14:55&nbsp;																					<a href="viewthread.php?tid=18805&amp;page=1&amp;authorid=6592" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_4"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_4"></div><div id="ad_thread4_4"></div>
						
						
																											<div id="postmessage_191279" class="t_msgfont">沒什么用 還是申請ssl證書好</div>

							
							
							
							
															<div id="post_rate_div_191279"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo191279_menu" style="display: none;">
										<div class="imicons">
													<a target='_blank' href='http://settings.messenger.live.com/Conversation/IMMe.aspx?invitee=yze.von@gmail.com&mkt=zh-cn'><img style='border-style: none;' src='http://messenger.services.live.com/users/yze.von@gmail.com/presenceimage?mkt=zh-cn' width='16' height='16' /></a>
																																			</div>
										<dl></dl>
											<p><a href="http://www.fan-gong.com" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=6592" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=18805&amp;repquote=191279&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 191279)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_4"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid191399" summary="pid191399" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1296" target="_blank" id="userinfo191399" class="dropmenu" onmouseover="showMenu(this.id)">低调の华丽</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">伪摇滚青年</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1296">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1296&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_5" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum191399" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=18805&page=1#pid191399', '话题链接已经复制到剪贴板')">6楼</strong>
													<em onclick="$('postmessage_191399').className='t_bigfont'">大</em>							<em onclick="$('postmessage_191399').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_191399').className='t_smallfont'">小</em>												发表于 2009-8-5 17:17&nbsp;																					<a href="viewthread.php?tid=18805&amp;page=1&amp;authorid=1296" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_5"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_5"></div><div id="ad_thread4_5"></div>
													<h2>回复 3楼 huge 的话题</h2>
						
						
																											<div id="postmessage_191399" class="t_msgfont">胡戈老师，你的那个工具能不能共享出来，我研究研究，新浪的页面貌似已经被和谐掉了<br />
<br />
[<i> 本帖最后由 低调の华丽 于 2009-8-5 17:24 编辑 </i>]</div>

							
							
							
							
															<div id="post_rate_div_191399"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo191399_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1296" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=18805&amp;repquote=191399&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 191399)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_5"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid192991" summary="pid192991" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=5449" target="_blank" id="userinfo192991" class="dropmenu" onmouseover="showMenu(this.id)">huge</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=5449">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=5449&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_6" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum192991" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=18805&page=1#pid192991', '话题链接已经复制到剪贴板')">7楼</strong>
													<em onclick="$('postmessage_192991').className='t_bigfont'">大</em>							<em onclick="$('postmessage_192991').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_192991').className='t_smallfont'">小</em>												发表于 2009-8-6 19:16&nbsp;																					<a href="viewthread.php?tid=18805&amp;page=1&amp;authorid=5449" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_6"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_6"></div><div id="ad_thread4_6"></div>
						
						
																											<div id="postmessage_192991" class="t_msgfont">这里：<br />
<br />
<a href="http://www.discuz.net/viewthread.php?tid=1242337" target="_blank">http://www.discuz.net/viewthread.php?tid=1242337</a><br />
<br />
<a href="http://www.discuz.net/viewthread.php?tid=1233024" target="_blank">http://www.discuz.net/viewthread.php?tid=1233024</a></div>

							
							
							
							
															<div id="post_rate_div_192991"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo192991_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=5449" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=18805&amp;repquote=192991&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 192991)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_6"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid193055" summary="pid193055" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7766" target="_blank" id="userinfo193055" class="dropmenu" onmouseover="showMenu(this.id)">麦圆</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">Twitter @math2gold | 惊诧的火星友邦 |  咪咪是 /math2ogld　</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7766">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7766&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_7" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum193055" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=18805&page=1#pid193055', '话题链接已经复制到剪贴板')">8楼</strong>
													<em onclick="$('postmessage_193055').className='t_bigfont'">大</em>							<em onclick="$('postmessage_193055').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_193055').className='t_smallfont'">小</em>												发表于 2009-8-6 19:59&nbsp;																					<a href="viewthread.php?tid=18805&amp;page=1&amp;authorid=7766" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_7"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_7"></div><div id="ad_thread4_7"></div>
						
						
																											<div id="postmessage_193055" class="t_msgfont">这个技术上可以搞的，js已经有很多现成的代码。不过在合租空间搞的话，对应的cgi相对会消耗很多资源。如果是有自己的独立服务器，那干脆ssl算了。因此，问题还是在资源问题上。当然，希望LZ出手搞一下，虽然目前可能受制于资源问题，但是深入之后也许会有新发现。<br />
<br />
另，“最后”那个问题不可做了，既然要加密，当然可以让搜索知道了，即便搜索不因门技术封你，最后五毛也会发现问题，只要他们一搜索或者打开网页什么都知道了。所以要保密还是立心保密好。</div>

							
							
							
							
															<div id="post_rate_div_193055"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo193055_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://math2gold.com/" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=7766" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=18805&amp;repquote=193055&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 193055)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_7"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid195680" summary="pid195680" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1296" target="_blank" id="userinfo195680" class="dropmenu" onmouseover="showMenu(this.id)">低调の华丽</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">伪摇滚青年</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1296">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1296&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_8" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum195680" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=18805&page=1#pid195680', '话题链接已经复制到剪贴板')">9楼</strong>
													<em onclick="$('postmessage_195680').className='t_bigfont'">大</em>							<em onclick="$('postmessage_195680').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_195680').className='t_smallfont'">小</em>												发表于 2009-8-8 21:28&nbsp;																					<a href="viewthread.php?tid=18805&amp;page=1&amp;authorid=1296" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_8"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_8"></div><div id="ad_thread4_8"></div>
													<h2>回复 8楼 麦圆 的话题</h2>
						
						
																											<div id="postmessage_195680" class="t_msgfont">楼上说的对</div>

							
							
							
							
															<div id="post_rate_div_195680"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo195680_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1296" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=18805&amp;repquote=195680&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 195680)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_8"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid195978" summary="pid195978" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 <a name="lastpost"></a>					<cite>											<a href="space.php?uid=7766" target="_blank" id="userinfo195978" class="dropmenu" onmouseover="showMenu(this.id)">麦圆</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">Twitter @math2gold | 惊诧的火星友邦 |  咪咪是 /math2ogld　</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7766">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7766&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_9" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum195978" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=18805&page=1#pid195978', '话题链接已经复制到剪贴板')">10楼</strong>
													<em onclick="$('postmessage_195978').className='t_bigfont'">大</em>							<em onclick="$('postmessage_195978').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_195978').className='t_smallfont'">小</em>												发表于 2009-8-9 01:36&nbsp;																					<a href="viewthread.php?tid=18805&amp;page=1&amp;authorid=7766" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_9"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_9"></div><div id="ad_thread4_9"></div>
						
						
																											<div id="postmessage_195978" class="t_msgfont">是了，想到个能用的方法，可以把加密解密端都在js上完成，服务器上纯粹存放密文。这样就不消耗资源，也达到目的了。</div>

							
							
							
							
															<div id="post_rate_div_195978"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo195978_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://math2gold.com/" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=7766" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=18805&amp;repquote=195978&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 195978)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_9"></div>				</div>
			</td>
		</tr>
		</table>
		</div>
</form>





<div class="pages_btns">
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=18805&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=18805&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
				<span class="postbtn" id="newspecialtmp" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=18805&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

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

	<form method="post" id="postform" action="post.php?action=reply&amp;fid=26&amp;tid=18805&amp;extra=&amp;replysubmit=yes" onSubmit="return validate(this)">
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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<title>GFW发飙，SSL窃听? - 国家局域网研究所 -  1984bbs.com </title>
<meta name="keywords" content="" />
<meta name="MSSmartTagsPreventParsing" content="True" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<link rel="archives" title="1984bbs.com" href="https://1984bbs.com/archiver/" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_viewthread.css" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_common.css" />
<script type="text/javascript">
	var discuz_uid = 13019;var IMGDIR = 'images/default';var attackevasive = '0';var gid = 0;var STYLEID = '1';
	gid = parseInt('3');var fid = parseInt('26');var tid = parseInt('23442');
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
			<p><a href="index.php" id="forumlist" onmouseover="showMenu(this.id)" class="dropmenu">1984bbs.com</a> &raquo; <a href="forumdisplay.php?fid=26">国家局域网研究所</a> &raquo; GFW发飙，SSL窃听?</p>
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
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=23442&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=23442&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
				<span class="postbtn" id="newspecial" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=23442&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

	<ul class="popupmenu_popup newspecialmenu" id="newspecial_menu" style="display: none">
		<li><a href="post.php?action=newthread&amp;fid=26&amp;extra=">发新话题</a></li>
		<li class="poll"><a href="post.php?action=newthread&amp;fid=26&amp;extra=&amp;special=1">发布投票</a></li>													</ul>

<form method="post" name="modactions">
	<input type="hidden" name="formhash" value="823c9fa2" />
	<div class="mainbox viewthread">
		<span class="headactions">
					<a href="my.php?item=favorites&amp;tid=23442" id="ajax_favorite" onclick="ajaxmenu(event, this.id, 3000, 0)">收藏</a>
			<a href="my.php?item=subscriptions&amp;subadd=23442" id="ajax_subscription" onclick="ajaxmenu(event, this.id, 3000, null, 0)">订阅</a>
			<a href="misc.php?action=emailfriend&amp;tid=23442" id="emailfriend" onclick="ajaxmenu(event, this.id, 9000000, null, 0)">推荐</a>
				<a href="viewthread.php?action=printable&amp;tid=23442" target="_blank" class="notabs">打印</a>
				</span>
		<h1>GFW发飙，SSL窃听?		</h1>
							<table id="pid258228" summary="pid258228" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8529" target="_blank" id="userinfo258228" class="dropmenu" onmouseover="showMenu(this.id)">shelly</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8529">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8529&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_0" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum258228" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=23442&page=1#pid258228', '话题链接已经复制到剪贴板')">1楼</strong>
													<em onclick="$('postmessage_258228').className='t_bigfont'">大</em>							<em onclick="$('postmessage_258228').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_258228').className='t_smallfont'">小</em>												发表于 2009-9-25 23:31&nbsp;																					<a href="viewthread.php?tid=23442&amp;page=1&amp;authorid=8529" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_0"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_0"></div><div id="ad_thread4_0"></div>
													<h2>GFW发飙，SSL窃听?</h2>
						
						
																											<div id="postmessage_258228" class="t_msgfont">GFW发飙，SSL窃听?<br />
Published on Fri 25 Sep 2009 12:09 ( 2 hours, 11 minutes ago)<br />
GFW(Great Fire Wall)<br />
<br />
据说GFW发飙了，大部分翻墙措施，包括Tor都被攻陷了。via @iGFW<br />
<br />
&nbsp; &nbsp; # GFW今天发飙了，各路翻墙楼梯将被锯掉，#GFW<br />
&nbsp; &nbsp; # PUFF 倒下 #GFW<br />
&nbsp; &nbsp; # UltraVPN、AlwaysVPN、AlonwebVPN、YourFreedom倒下 #GFW<br />
&nbsp; &nbsp; # Hotspot、Itshidden、CybeyghostVPN倒下 #GFW<br />
&nbsp; &nbsp; # 大量PHproxy、GlypeProxy、Appspot.com上的Proxy、Psiphon倒下<br />
&nbsp; &nbsp; # Freedur、Skydur倒下<br />
&nbsp; &nbsp; # Gladder、Phzilla倒下<br />
&nbsp; &nbsp; # Skydur倒下 #gfw<br />
&nbsp; &nbsp; # Tor、JAP正慢慢倒下<br />
&nbsp; &nbsp; # Phproxy类Web代理被群奸，建议嵌套一次用。用一个Web代理套另一Web代理再操 #GFW<br />
&nbsp; &nbsp; # JAP也就是现在的Jondo，和Tor是共用节点和桥的<br />
&nbsp; &nbsp; # glype已经和phproxy一起废了<br />
&nbsp; &nbsp; # 用Mirrorrr在GAE上搭建的众多Proxy倒得差不多了<br />
&nbsp; &nbsp; # Tor已完全倒下，套都破了<br />
&nbsp; &nbsp; # Tor死的很惨，目录服务器、桥服务、国外第一条节点等均被破解，就算将Tor套上代理成功启动（洋葱变绿）都是徒劳。<br />
&nbsp; &nbsp; # Puff 惨遭 #gfw 追杀，最新0.03b2版本倒下<br />
<br />
无独有偶，看到一个前Netscreen出来的创业公司的产品的介绍，其中谈到它能够截获SSL通讯并进行“审计”，相当恐怖：<br />
<br />
&nbsp; &nbsp; 对外发信息进行审计，防止机密外泄及不必要的法律纠纷，是UTM Plus中上网行为管理模块的另一大作用。该模块对HTTP、FTP、SMTP和主流即时通信类应用提供了由信令到内容层面的审计能力，莫说论坛发帖，就连163、Hotmail、Gmail、QQ邮箱等国内应用比较广泛的Webmail发信都被囊括在内。妄想使用Gmail等采用HTTPS登录的Webmail逃避检查也是徒劳的，UTM&nbsp;&nbsp;Plus内置的SSL代理可以截断所有单向验证的SSL请求，对解密后的内容进行控制、审计。也就是说，利用这个代理，一切基于SSL隧道的应用协议都被纳入控管范围，不会再有漏网之鱼。不过，我们也注意到内容审计功能开启时，客户端并不会得到任何提示，山石网科称会在产品正式发布时以告警提示和法律免责申明的方式加以完善。<br />
<br />
不知道其技术实现具体细节如何，貌似是通过一个“SSL代理”来做到的，但是这个代理是对用户透明的吗？ 如果是代理如何欺骗用户端的证书认证的呢？ <br />
<br />
 <br />
<br />
如果这个技术是真实有效而且透明的，一旦被GFW利用后果不堪设想啊。</div>

							
							
							
							
															<div id="post_rate_div_258228"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo258228_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=8529" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=23442&amp;repquote=258228&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 258228)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_0"></div>				</div>
			</td>
		</tr>
		</table>
		</div><div class="ad_column" id="ad_interthread"><a href="/viewthread.php?tid=54699" target="_blank" style="color:red;">1984bbs是一个非营利项目，它需要您的捐助！</font></a>		</div>
	<div class="mainbox viewthread">
			<table id="pid258271" summary="pid258271" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8493" target="_blank" id="userinfo258271" class="dropmenu" onmouseover="showMenu(this.id)">Key</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">FuckBinxing</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8493">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8493&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_1" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum258271" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=23442&page=1#pid258271', '话题链接已经复制到剪贴板')">2楼</strong>
													<em onclick="$('postmessage_258271').className='t_bigfont'">大</em>							<em onclick="$('postmessage_258271').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_258271').className='t_smallfont'">小</em>												发表于 2009-9-26 00:06&nbsp;																					<a href="viewthread.php?tid=23442&amp;page=1&amp;authorid=8493" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_1"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_1"></div><div id="ad_thread4_1"></div>
						
						
																											<div id="postmessage_258271" class="t_msgfont">SSL 代理不可能做到透明，除非丫跟某家 CA 关系非同一般，或在客户端以病毒或强制捆绑安装方式更改信任 CA 证书，否则客户端一定会知道证书被置换（小白用户的情况不予考虑）。</div>

							
							
							
							
															<div id="post_rate_div_258271"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo258271_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=8493" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=23442&amp;repquote=258271&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 258271)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_1"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid258272" summary="pid258272" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8493" target="_blank" id="userinfo258272" class="dropmenu" onmouseover="showMenu(this.id)">Key</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">FuckBinxing</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8493">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8493&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_2" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum258272" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=23442&page=1#pid258272', '话题链接已经复制到剪贴板')">3楼</strong>
													<em onclick="$('postmessage_258272').className='t_bigfont'">大</em>							<em onclick="$('postmessage_258272').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_258272').className='t_smallfont'">小</em>												发表于 2009-9-26 00:08&nbsp;																					<a href="viewthread.php?tid=23442&amp;page=1&amp;authorid=8493" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_2"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_2"></div><div id="ad_thread4_2"></div>
						
						
																											<div id="postmessage_258272" class="t_msgfont">P.S. 为了避免 SSH 中间人攻击，我已然背过服务器指纹了 - -。。。。算心墙么。。</div>

							
							
							
							
															<div id="post_rate_div_258272"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo258272_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=8493" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=23442&amp;repquote=258272&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 258272)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_2"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid258284" summary="pid258284" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1416" target="_blank" id="userinfo258284" class="dropmenu" onmouseover="showMenu(this.id)">nicky_hk</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">烤鸭党粉丝，十二点党粉丝.</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1416">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1416&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_3" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum258284" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=23442&page=1#pid258284', '话题链接已经复制到剪贴板')">4楼</strong>
													<em onclick="$('postmessage_258284').className='t_bigfont'">大</em>							<em onclick="$('postmessage_258284').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_258284').className='t_smallfont'">小</em>												发表于 2009-9-26 00:14&nbsp;																					<a href="viewthread.php?tid=23442&amp;page=1&amp;authorid=1416" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_3"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_3"></div><div id="ad_thread4_3"></div>
						
						
																											<div id="postmessage_258284" class="t_msgfont">说实话,这次把这么多软件封掉，我对中国的计算机人才的水平刮目相看</div>

							
							
							
							
															<div id="post_rate_div_258284"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo258284_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1416" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=23442&amp;repquote=258284&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 258284)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_3"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid258287" summary="pid258287" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=3032" target="_blank" id="userinfo258287" class="dropmenu" onmouseover="showMenu(this.id)">暗夜独行</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=3032">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=3032&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_4" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum258287" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=23442&page=1#pid258287', '话题链接已经复制到剪贴板')">5楼</strong>
													<em onclick="$('postmessage_258287').className='t_bigfont'">大</em>							<em onclick="$('postmessage_258287').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_258287').className='t_smallfont'">小</em>												发表于 2009-9-26 00:21&nbsp;																					<a href="viewthread.php?tid=23442&amp;page=1&amp;authorid=3032" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_4"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_4"></div><div id="ad_thread4_4"></div>
						
						
																											<div id="postmessage_258287" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>nicky_hk</i> 于 2009-9-26 00:14 发表 <a href="http://1984bbs.com/redirect.php?goto=findpost&amp;pid=258284&amp;ptid=23442" target="_blank"><img src="http://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
说实话,这次把这么多软件封掉，我对中国的计算机人才的水平刮目相看 </blockquote></div>同感</div>

							
							
							
							
															<div id="post_rate_div_258287"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo258287_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=3032" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=23442&amp;repquote=258287&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 258287)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_4"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid258390" summary="pid258390" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2441" target="_blank" id="userinfo258390" class="dropmenu" onmouseover="showMenu(this.id)">高渐离</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">组内伍毛全家死光</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2441">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2441&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_5" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum258390" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=23442&page=1#pid258390', '话题链接已经复制到剪贴板')">6楼</strong>
													<em onclick="$('postmessage_258390').className='t_bigfont'">大</em>							<em onclick="$('postmessage_258390').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_258390').className='t_smallfont'">小</em>												发表于 2009-9-26 06:03&nbsp;																					<a href="viewthread.php?tid=23442&amp;page=1&amp;authorid=2441" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_5"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_5"></div><div id="ad_thread4_5"></div>
						
						
																											<div id="postmessage_258390" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>nicky_hk</i> 于 2009-9-26 00:14 发表 <a href="http://1984bbs.com/redirect.php?goto=findpost&amp;pid=258284&amp;ptid=23442" target="_blank"><img src="http://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
说实话,这次把这么多软件封掉，我对中国的计算机人才的水平刮目相看 </blockquote></div>你真以为是中国人才？赛门铁克算哪门？</div>

							
							
							
							
															<div id="post_rate_div_258390"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo258390_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=2441" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=23442&amp;repquote=258390&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 258390)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_5"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid259467" summary="pid259467" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8644" target="_blank" id="userinfo259467" class="dropmenu" onmouseover="showMenu(this.id)">蛋美</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">西北草泥马一只</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8644">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8644&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_6" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum259467" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=23442&page=1#pid259467', '话题链接已经复制到剪贴板')">7楼</strong>
													<em onclick="$('postmessage_259467').className='t_bigfont'">大</em>							<em onclick="$('postmessage_259467').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_259467').className='t_smallfont'">小</em>												发表于 2009-9-27 00:54&nbsp;																					<a href="viewthread.php?tid=23442&amp;page=1&amp;authorid=8644" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_6"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_6"></div><div id="ad_thread4_6"></div>
						
						
																											<div id="postmessage_259467" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>暗夜独行</i> 于 2009-9-26 00:21 发表 <a href="http://1984bbs.com/redirect.php?goto=findpost&amp;pid=258287&amp;ptid=23442" target="_blank"><img src="http://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
<br />
同感 </blockquote></div>同感 +1</div>

							
							
							
							
															<div id="post_rate_div_259467"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo259467_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=8644" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=23442&amp;repquote=259467&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 259467)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_6"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid259840" summary="pid259840" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2930" target="_blank" id="userinfo259840" class="dropmenu" onmouseover="showMenu(this.id)">SrAcer</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">党强加于人的世界观在无法理解它的人们那里最容易被接受。——《１９８４》</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2930">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2930&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_7" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum259840" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=23442&page=1#pid259840', '话题链接已经复制到剪贴板')">8楼</strong>
													<em onclick="$('postmessage_259840').className='t_bigfont'">大</em>							<em onclick="$('postmessage_259840').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_259840').className='t_smallfont'">小</em>												发表于 2009-9-27 11:27&nbsp;																					<a href="viewthread.php?tid=23442&amp;page=1&amp;authorid=2930" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_7"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_7"></div><div id="ad_thread4_7"></div>
						
						
																											<div id="postmessage_259840" class="t_msgfont">赛门铁克？思科吧。</div>

							
							
							
							
															<div id="post_rate_div_259840"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo259840_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=2930" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=23442&amp;repquote=259840&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 259840)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_7"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid259879" summary="pid259879" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7766" target="_blank" id="userinfo259879" class="dropmenu" onmouseover="showMenu(this.id)">麦圆</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">Twitter @math2gold | 惊诧的火星友邦 |  咪咪是 /math2ogld　</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7766">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7766&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_8" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum259879" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=23442&page=1#pid259879', '话题链接已经复制到剪贴板')">9楼</strong>
													<em onclick="$('postmessage_259879').className='t_bigfont'">大</em>							<em onclick="$('postmessage_259879').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_259879').className='t_smallfont'">小</em>												发表于 2009-9-27 11:42&nbsp;																					<a href="viewthread.php?tid=23442&amp;page=1&amp;authorid=7766" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_8"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_8"></div><div id="ad_thread4_8"></div>
						
						
																											<div id="postmessage_259879" class="t_msgfont">要截断SSL层监听的话，只有是伪造假证书或者使用一样的证书。前者的话，指纹会不同的，因此如果提示你更换证书的话，里面就有问题。至于后者，这个恐怕是证书持有人泄密了、被黑等的可能才能做到。</div>

							
							
							
							
															<div id="post_rate_div_259879"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo259879_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://math2gold.com/" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=7766" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=23442&amp;repquote=259879&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 259879)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_8"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid259980" summary="pid259980" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7766" target="_blank" id="userinfo259980" class="dropmenu" onmouseover="showMenu(this.id)">麦圆</a></cite>
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
						<strong title="复制话题链接到剪贴板" id="postnum259980" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=23442&page=1#pid259980', '话题链接已经复制到剪贴板')">10楼</strong>
													<em onclick="$('postmessage_259980').className='t_bigfont'">大</em>							<em onclick="$('postmessage_259980').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_259980').className='t_smallfont'">小</em>												发表于 2009-9-27 12:28&nbsp;																					<a href="viewthread.php?tid=23442&amp;page=1&amp;authorid=7766" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_9"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_9"></div><div id="ad_thread4_9"></div>
						
						
																											<div id="postmessage_259980" class="t_msgfont">在推特上看到这个，正好能说明问题：<br />
@imusiq RT @shizhao: 理解SSL窃听 <a href="http://j.mp/12abVv" target="_blank">http://j.mp/12abVv</a></div>

							
							
							
							
															<div id="post_rate_div_259980"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo259980_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://math2gold.com/" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=7766" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=23442&amp;repquote=259980&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 259980)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_9"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid259987" summary="pid259987" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6107" target="_blank" id="userinfo259987" class="dropmenu" onmouseover="showMenu(this.id)">Adon</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6107">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6107&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_10" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum259987" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=23442&page=1#pid259987', '话题链接已经复制到剪贴板')">11楼</strong>
													<em onclick="$('postmessage_259987').className='t_bigfont'">大</em>							<em onclick="$('postmessage_259987').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_259987').className='t_smallfont'">小</em>												发表于 2009-9-27 12:34&nbsp;																					<a href="viewthread.php?tid=23442&amp;page=1&amp;authorid=6107" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_10"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_10"></div><div id="ad_thread4_10"></div>
						
						
																											<div id="postmessage_259987" class="t_msgfont">代理人攻击。<br />
<br />
我朝最大的黑客到底是谁？</div>

							
							
							
							
															<div id="post_rate_div_259987"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo259987_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=6107" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=23442&amp;repquote=259987&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 259987)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_10"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid263617" summary="pid263617" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8316" target="_blank" id="userinfo263617" class="dropmenu" onmouseover="showMenu(this.id)">glok</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8316">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8316&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_11" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum263617" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=23442&page=1#pid263617', '话题链接已经复制到剪贴板')">12楼</strong>
													<em onclick="$('postmessage_263617').className='t_bigfont'">大</em>							<em onclick="$('postmessage_263617').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_263617').className='t_smallfont'">小</em>												发表于 2009-9-29 18:59&nbsp;																					<a href="viewthread.php?tid=23442&amp;page=1&amp;authorid=8316" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_11"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_11"></div><div id="ad_thread4_11"></div>
						
						
																											<div id="postmessage_263617" class="t_msgfont">看见不正常的证书不继续浏览就是了</div>

							
							
							
							
															<div id="post_rate_div_263617"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo263617_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=8316" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=23442&amp;repquote=263617&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 263617)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_11"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid264077" summary="pid264077" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8493" target="_blank" id="userinfo264077" class="dropmenu" onmouseover="showMenu(this.id)">Key</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">FuckBinxing</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8493">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8493&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_12" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum264077" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=23442&page=1#pid264077', '话题链接已经复制到剪贴板')">13楼</strong>
													<em onclick="$('postmessage_264077').className='t_bigfont'">大</em>							<em onclick="$('postmessage_264077').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_264077').className='t_smallfont'">小</em>												发表于 2009-9-30 01:26&nbsp;																					<a href="viewthread.php?tid=23442&amp;page=1&amp;authorid=8493" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_12"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_12"></div><div id="ad_thread4_12"></div>
													<h2>回复 12楼 glok 的话题</h2>
						
						
																											<div id="postmessage_264077" class="t_msgfont">关键问题是，很多地方本来就不用正规的证书（很贵），比如小组</div>

							
							
							
							
															<div id="post_rate_div_264077"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo264077_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=8493" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=23442&amp;repquote=264077&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 264077)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_12"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid264523" summary="pid264523" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7939" target="_blank" id="userinfo264523" class="dropmenu" onmouseover="showMenu(this.id)">刘项</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7939">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7939&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_13" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum264523" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=23442&page=1#pid264523', '话题链接已经复制到剪贴板')">14楼</strong>
													<em onclick="$('postmessage_264523').className='t_bigfont'">大</em>							<em onclick="$('postmessage_264523').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_264523').className='t_smallfont'">小</em>												发表于 2009-9-30 12:05&nbsp;																					<a href="viewthread.php?tid=23442&amp;page=1&amp;authorid=7939" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_13"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_13"></div><div id="ad_thread4_13"></div>
						
						
																											<div id="postmessage_264523" class="t_msgfont">广发英雄帖，让全球小黑和gfw PK一下</div>

							
							
							
							
															<div id="post_rate_div_264523"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo264523_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=7939" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=23442&amp;repquote=264523&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 264523)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_13"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid267548" summary="pid267548" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>																		libcurl</cite>
							该用户已被删除
															</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum267548" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=23442&page=1#pid267548', '话题链接已经复制到剪贴板')">15楼</strong>
													<em onclick="$('postmessage_267548').className='t_bigfont'">大</em>							<em onclick="$('postmessage_267548').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_267548').className='t_smallfont'">小</em>												发表于 2009-10-2 01:28&nbsp;																					<a href="viewthread.php?tid=23442&amp;page=1&amp;authorid=9158" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_14"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_14"></div><div id="ad_thread4_14"></div>
						
						
																											<div id="postmessage_267548" class="t_msgfont">中间人攻击 在07年就有人提出了 某个安全会议上 有人演示过 不知真假 但迄今为止 还没有出现过相关案例<br />
<br />
gfw窃取证书的可能性不大 它的目的在于封锁 而非窃听</div>

							
							
							
							
															<div id="post_rate_div_267548"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=23442&amp;repquote=267548&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 267548)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_14"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid268430" summary="pid268430" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 <a name="lastpost"></a>					<cite>											<a href="space.php?uid=9050" target="_blank" id="userinfo268430" class="dropmenu" onmouseover="showMenu(this.id)">SethVerlo</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=9050">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=9050&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_15" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum268430" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=23442&page=1#pid268430', '话题链接已经复制到剪贴板')">16楼</strong>
													<em onclick="$('postmessage_268430').className='t_bigfont'">大</em>							<em onclick="$('postmessage_268430').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_268430').className='t_smallfont'">小</em>												发表于 2009-10-2 17:09&nbsp;																					<a href="viewthread.php?tid=23442&amp;page=1&amp;authorid=9050" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_15"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_15"></div><div id="ad_thread4_15"></div>
						
						
																											<div id="postmessage_268430" class="t_msgfont">可能性可以忽略不计……</div>

							
							
							
							
															<div id="post_rate_div_268430"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo268430_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=9050" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=23442&amp;repquote=268430&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 268430)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_15"></div>				</div>
			</td>
		</tr>
		</table>
		</div>
</form>





<div class="pages_btns">
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=23442&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=23442&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
				<span class="postbtn" id="newspecialtmp" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=23442&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

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

	<form method="post" id="postform" action="post.php?action=reply&amp;fid=26&amp;tid=23442&amp;extra=&amp;replysubmit=yes" onSubmit="return validate(this)">
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
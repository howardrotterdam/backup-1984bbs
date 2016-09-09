<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<title>[2010/08/13] QQ侦探 1.1.0 正式版发布 - 国家局域网研究所 -  1984bbs.com </title>
<meta name="keywords" content="" />
<meta name="MSSmartTagsPreventParsing" content="True" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<link rel="archives" title="1984bbs.com" href="https://1984bbs.com/archiver/" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_viewthread.css" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_common.css" />
<script type="text/javascript">
	var discuz_uid = 13019;var IMGDIR = 'images/default';var attackevasive = '0';var gid = 0;var STYLEID = '1';
	gid = parseInt('3');var fid = parseInt('26');var tid = parseInt('48048');
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
			<p><a href="index.php" id="forumlist" onmouseover="showMenu(this.id)" class="dropmenu">1984bbs.com</a> &raquo; <a href="forumdisplay.php?fid=26">国家局域网研究所</a> &raquo; [2010/08/13] QQ侦探 1.1.0 正式版发布</p>
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
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=48048&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=48048&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
				<span class="postbtn" id="newspecial" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=48048&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

	<ul class="popupmenu_popup newspecialmenu" id="newspecial_menu" style="display: none">
		<li><a href="post.php?action=newthread&amp;fid=26&amp;extra=">发新话题</a></li>
		<li class="poll"><a href="post.php?action=newthread&amp;fid=26&amp;extra=&amp;special=1">发布投票</a></li>													</ul>

<form method="post" name="modactions">
	<input type="hidden" name="formhash" value="823c9fa2" />
	<div class="mainbox viewthread">
		<span class="headactions">
					<a href="my.php?item=favorites&amp;tid=48048" id="ajax_favorite" onclick="ajaxmenu(event, this.id, 3000, 0)">收藏</a>
			<a href="my.php?item=subscriptions&amp;subadd=48048" id="ajax_subscription" onclick="ajaxmenu(event, this.id, 3000, null, 0)">订阅</a>
			<a href="misc.php?action=emailfriend&amp;tid=48048" id="emailfriend" onclick="ajaxmenu(event, this.id, 9000000, null, 0)">推荐</a>
				<a href="viewthread.php?action=printable&amp;tid=48048" target="_blank" class="notabs">打印</a>
				</span>
		<h1>[2010/08/13] QQ侦探 1.1.0 正式版发布		</h1>
				<ins>
						<a href="misc.php?action=viewthreadmod&amp;tid=48048" title="主题操作记录" target="_blank">本主题由 库存袈裟 于 2010-6-2 17:46 合并</a>								</ins>
							<table id="pid652020" summary="pid652020" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=13468" target="_blank" id="userinfo652020" class="dropmenu" onmouseover="showMenu(this.id)">C.C.</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=13468">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=13468&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_0" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum652020" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=48048&page=1#pid652020', '话题链接已经复制到剪贴板')">1楼</strong>
													<em onclick="$('postmessage_652020').className='t_bigfont'">大</em>							<em onclick="$('postmessage_652020').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_652020').className='t_smallfont'">小</em>												发表于 2010-6-1 19:59&nbsp;																					<a href="viewthread.php?tid=48048&amp;page=1&amp;authorid=13468" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_0"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_0"></div><div id="ad_thread4_0"></div>
													<h2>[2010/08/13] QQ侦探 1.1.0 正式版发布</h2>
						
						
																											<div id="postmessage_652020" class="t_msgfont">来源：<a href="http://hi.baidu.com/kernone/blog/item/8ab0a687b41a933367096ef0.html" target="_blank">http://hi.baidu.com/kernone/blog ... 1a933367096ef0.html</a><br />
<br />
<br />
广大的朋友们，大家好。历经这几天没日没夜的开发，稳定、简单的QQ侦探终于出炉了！本版定为正式版！<br />
<br />
本版QQ侦探完全重写了代码，程序更加简洁、稳定、高效。彻底解决了前版会带来的蓝屏问题，建议所有用户都进行更新。另外，本版加入对搜狗输入法、微软拼音2010等软件的兼容，您再也不会因为输入法的问题而“盲打”了。<br />
<br />
新版的QQ侦探完全去除了前版中的一些功能，因为我发现很多用户就只需要文件拦截功能就够了，不管这是不是HIPS。所以我去除了一些功能，当然，这些被去除的功能也无关痛痒，最重要的功能肯定会被保留下来。下面这是新版的QQ侦探界面截图：<br />
<br />
<img src="http://hiphotos.baidu.com/kernone/pic/item/fd66a9d2cc5c7177970a169b.jpg" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
<br />
新版的程序更加简洁，如果您在使用QQ中遇到什么问题，只需要临时禁用“文件内容扫描”功能，一切问题应该可以解决。<br />
<br />
另一个重大的更新是QQ侦探事件簿。由于驱动程序中的改进，不会再频繁的申请和释放内存，因此性能大幅度提高，因此本版的事件簿加入了任务托盘图标，您完全可以全天候关注这只“小畜牲”，了解它一整天都在干什么。本版完全向您展现出QQ访问的所有文件（前版的QQ侦探没有展现所有的文件访问），对于正常的文件访问，事件簿中会标注该动作是正常的，对于可疑的文件访问，事件簿中也会为您标注出来。这是QQ侦探事件簿的截图：<br />
<br />
<img src="http://hiphotos.baidu.com/kernone/pic/item/ff774afa8aa29b27024f566f.jpg" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
<br />
最后对于本版的QQ侦探，您完全可以放心使用。由于重写了驱动程序的代码，现在已经完全避免了死亡蓝屏的发生，您可以和死亡蓝屏彻底说拜拜了！下面是BSODHOOK测试截图：<br />
<br />
<img src="http://hiphotos.baidu.com/kernone/pic/item/ffba7c1f83483eb71ad5766b.jpg" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
<br />
如何传送文件？<br />
<br />
文件传送是QQ用户经常使用的功能之一，在使用QQ侦探后，您就无法随意传送文件。但是新版提供一个解决方法，就是在您要传送文件的目录下，新建一个名为TEMP的文件夹，然后将您要传送的文件移动到TEMP目录中，最后在通过鼠标拖拽的方式将文件拖入到聊天窗口中，QQ就会进行传送文件。<br />
<br />
支持系统：<br />
<br />
Windows XP/Vista/7 32位<br />
<br />
如果您很喜欢该软件，您可以对我进行捐赠，不管您捐赠1元，2元还是10元，我都会在一篇感谢日志中列出您的姓名表示感谢。<br />
<br />
另外，如果您想要学习本软件的驱动源代码，我建议您能购买我写的“驱动详细注释版源码包”。该源码包里有详细的注释，每一行都会有注释，如果您有基础，您完全能够看懂驱动程序的开发思路。注释版的定价完全由您来定，我个人建议售价5元/份，当然，如果您只愿意出1元、2元或者10元，我也完全出售给您，给您最大的自由定价权利！<br />
<br />
<br />
购买方式：通过向我的支付宝中汇款（支付宝地址：<a href="mailto:kernone@live.com">kernone@live.com</a>，汇多少完全由您定），并留下您的邮箱，在我看到您的留言之后，我会尽快发送注释版源码包给您，如果由于我的疏忽，没有及时发送注释版源码包给您，请您见谅，还请您能够向我的邮箱发送邮件，催促我给您发送源码包。谢谢。<br />
<br />
下载列表：<br />
<br />
QQ侦探 1.1.0 正式版：<a href="http://www.dbank.com/download.action?t=40&amp;k=NDgwODcwMTM=&amp;pcode=LCwzMTE1ODIsMzExNTgy&amp;rnd=4" target="_blank">http://www.dbank.com/download.ac ... sMzExNTgy&amp;rnd=4</a><br />
<br />
QQ侦探 1.1.0 源代码（无任何注释）：<a href="http://www.dbank.com/download.action?t=40&amp;k=NDgwODcwODc=&amp;pcode=LCwzMTE1ODIsMzExNTgy&amp;rnd=4" target="_blank">http://www.dbank.com/download.ac ... sMzExNTgy&amp;rnd=4</a><br />
<br />
QQ侦探 1.1.0 源代码（驱动详细注释版）：个人建议价5元/份（实际交易价格完全由您定）<br />
<br />
请您注意，下载本程序一定要到本博客指定下载地址，由于是开源软件，可能其他网友也会自行编译源代码，制作发行版程序。本人并不保证他人发行的程序是否有恶意代码或者其他问题，因此，请您一定要在本博客指定地址下载程序！您下载之后，请核对文件信息：<br />
<br />
版本信息：<br />
<br />
2010-8-12 版本号：1.1.0 （正式版）<br />
&nbsp; &nbsp;1.QQ侦探所有代码全部重写，彻底解决蓝屏问题<br />
&nbsp; &nbsp;2.大幅度提高驱动程序的性能<br />
&nbsp; &nbsp;3.全新的事件簿，增加任务托盘图标，方便您查看事件<br />
&nbsp; &nbsp;4.增加与其它软件的兼容：搜狗输入法、世界之窗浏览器、微软拼音2010、Opera浏览器<br />
&nbsp; &nbsp;5.如果您需要学习驱动程序代码，建议您购买由原作者写的“驱动程序详细注释版”，价格由您决定<br />
<br />
QQDetective.exe<br />
<br />
MD5 - a0d68bff167e7f2e8419bd41bef831ad<br />
<br />
SHA1 - b248b8d04f22d85c81ebc3d81072c0186bb26db4<br />
<br />
MiniLog.exe<br />
<br />
MD5 - 77c7ceb3df046192579b6b9751c01fd0<br />
<br />
SHA1 - fd5cfa863fcacf7687b9d77b73f1f61d8d7f711c<br />
<br />
作者声明：<br />
<br />
本程序的原开作者是Kernone，本软件完全免费、开源。本软件采用GPL开源协议，您可以随意修改源码，或者重复使用源码。如果您将本程序源码应用于具有商业目的的项目中，由于使用GPL开源协议，因此请将您的项目完全开源，否则您将会列入由原作者的耻辱榜。请您对原作者的劳动表示应有的尊重。<br />
<br />
联系方式：<br />
<br />
QQ：515782505<br />
<br />
Email：<a href="mailto:kernone@foxmail.com">kernone@foxmail.com</a><br />
<br />
支付宝捐赠：<a href="mailto:kernone@live.com">kernone@live.com</a><br />
<br />
[<i> 本帖最后由 C.C. 于 2010-8-15 10:47 编辑 </i>]</div>

							
							
							
							
															<div id="post_rate_div_652020"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo652020_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=13468" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=48048&amp;repquote=652020&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 652020)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_0"></div>				</div>
			</td>
		</tr>
		</table>
		</div><div class="ad_column" id="ad_interthread"><a href="/viewthread.php?tid=54699" target="_blank" style="color:red;">1984bbs是一个非营利项目，它需要您的捐助！</font></a>		</div>
	<div class="mainbox viewthread">
			<table id="pid652304" summary="pid652304" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6920" target="_blank" id="userinfo652304" class="dropmenu" onmouseover="showMenu(this.id)">淮月</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">翻墙痴迷者 雄性文青  @qhgy</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6920">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6920&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_1" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum652304" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=48048&page=1#pid652304', '话题链接已经复制到剪贴板')">2楼</strong>
													<em onclick="$('postmessage_652304').className='t_bigfont'">大</em>							<em onclick="$('postmessage_652304').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_652304').className='t_smallfont'">小</em>												发表于 2010-6-1 22:27&nbsp;																					<a href="viewthread.php?tid=48048&amp;page=1&amp;authorid=6920" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_1"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_1"></div><div id="ad_thread4_1"></div>
						
						
																											<div id="postmessage_652304" class="t_msgfont">好东西</div>

							
							
							
							
															<div id="post_rate_div_652304"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo652304_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://twitter.com/qhgy" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=6920" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=48048&amp;repquote=652304&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 652304)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_1"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid652314" summary="pid652314" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=11292" target="_blank" id="userinfo652314" class="dropmenu" onmouseover="showMenu(this.id)">Amigo</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=11292">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=11292&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_2" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum652314" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=48048&page=1#pid652314', '话题链接已经复制到剪贴板')">3楼</strong>
													<em onclick="$('postmessage_652314').className='t_bigfont'">大</em>							<em onclick="$('postmessage_652314').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_652314').className='t_smallfont'">小</em>												发表于 2010-6-1 22:31&nbsp;																					<a href="viewthread.php?tid=48048&amp;page=1&amp;authorid=11292" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_2"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_2"></div><div id="ad_thread4_2"></div>
						
						
																											<div id="postmessage_652314" class="t_msgfont">没有提示安装？这是为什么？</div>

							
							
							
							
															<div id="post_rate_div_652314"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo652314_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=11292" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=48048&amp;repquote=652314&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 652314)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_2"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid652350" summary="pid652350" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=13077" target="_blank" id="userinfo652350" class="dropmenu" onmouseover="showMenu(this.id)">xykz</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=13077">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=13077&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_3" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum652350" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=48048&page=1#pid652350', '话题链接已经复制到剪贴板')">4楼</strong>
													<em onclick="$('postmessage_652350').className='t_bigfont'">大</em>							<em onclick="$('postmessage_652350').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_652350').className='t_smallfont'">小</em>												发表于 2010-6-1 22:47&nbsp;																					<a href="viewthread.php?tid=48048&amp;page=1&amp;authorid=13077" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_3"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_3"></div><div id="ad_thread4_3"></div>
						
						
																											<div id="postmessage_652350" class="t_msgfont">哈，前几天刚在推上看了，还是用低权限用户运行比较好</div>

							
							
							
							
															<div id="post_rate_div_652350"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo652350_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=13077" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=48048&amp;repquote=652350&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 652350)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_3"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid652632" summary="pid652632" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6743" target="_blank" id="userinfo652632" class="dropmenu" onmouseover="showMenu(this.id)">鼠标土豆</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">古典自由主义土豆</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6743">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6743&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_4" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum652632" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=48048&page=1#pid652632', '话题链接已经复制到剪贴板')">5楼</strong>
													<em onclick="$('postmessage_652632').className='t_bigfont'">大</em>							<em onclick="$('postmessage_652632').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_652632').className='t_smallfont'">小</em>												发表于 2010-6-2 03:21&nbsp;																					<a href="viewthread.php?tid=48048&amp;page=1&amp;authorid=6743" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_4"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_4"></div><div id="ad_thread4_4"></div>
						
						
																											<div id="postmessage_652632" class="t_msgfont">用comodo就不用再装这个了吧？</div>

							
							
							
							
															<div id="post_rate_div_652632"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo652632_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=6743" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=48048&amp;repquote=652632&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 652632)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_4"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid652636" summary="pid652636" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6778" target="_blank" id="userinfo652636" class="dropmenu" onmouseover="showMenu(this.id)">1984sb</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">哭著喊著奔幸福   @zj8nb  Bio 最是那一甩鼻涕的溫柔，仿佛一朵野菊花不勝菊爆的嬌羞。</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6778">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6778&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_5" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum652636" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=48048&page=1#pid652636', '话题链接已经复制到剪贴板')">6楼</strong>
													<em onclick="$('postmessage_652636').className='t_bigfont'">大</em>							<em onclick="$('postmessage_652636').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_652636').className='t_smallfont'">小</em>												发表于 2010-6-2 03:59&nbsp;																					<a href="viewthread.php?tid=48048&amp;page=1&amp;authorid=6778" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_5"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_5"></div><div id="ad_thread4_5"></div>
						
						
																											<div id="postmessage_652636" class="t_msgfont">QQ聊天时，无法使用输入法：这是由于《QQ侦探》的“拦截QQ访问其它进程”功能所引起的（经过测试，您使用系统自带的输入法是没有任何问题的），此时您只需关闭“拦截QQ访问其它进程”功能即可。<br />
----------------<br />
这个还是不行。搜狗输入法还是会被拦截！</div>

							
							
							
							
															<div id="post_rate_div_652636"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo652636_menu" style="display: none;">
										<div class="imicons">
													<a target='_blank' href='http://settings.messenger.live.com/Conversation/IMMe.aspx?invitee=nc.evil@live.cn&mkt=zh-cn'><img style='border-style: none;' src='http://messenger.services.live.com/users/nc.evil@live.cn/presenceimage?mkt=zh-cn' width='16' height='16' /></a>
												<a href="http://wpa.qq.com/msgrd?V=1&amp;Uin=695222232&amp;Site=1984bbs.com&amp;Menu=yes" target="_blank"><img src="images/default/qq.gif" alt="QQ" /></a>																							</div>
										<dl></dl>
											<p><a href="http://zj8nb.blogspot.com/" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=6778" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=48048&amp;repquote=652636&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 652636)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_5"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid652927" summary="pid652927" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6518" target="_blank" id="userinfo652927" class="dropmenu" onmouseover="showMenu(this.id)">id已被绿坝屏蔽</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">闃呭悗鍗崇剼</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6518">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6518&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_6" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum652927" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=48048&page=1#pid652927', '话题链接已经复制到剪贴板')">7楼</strong>
													<em onclick="$('postmessage_652927').className='t_bigfont'">大</em>							<em onclick="$('postmessage_652927').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_652927').className='t_smallfont'">小</em>												发表于 2010-6-2 10:27&nbsp;																					<a href="viewthread.php?tid=48048&amp;page=1&amp;authorid=6518" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_6"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_6"></div><div id="ad_thread4_6"></div>
						
						
																											<div id="postmessage_652927" class="t_msgfont">输入法一直是问题</div>

							
							
							
							
															<div id="post_rate_div_652927"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo652927_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=6518" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=48048&amp;repquote=652927&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 652927)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_6"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid652949" summary="pid652949" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=13103" target="_blank" id="userinfo652949" class="dropmenu" onmouseover="showMenu(this.id)">jazz19</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">各种控~</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=13103">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=13103&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_7" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum652949" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=48048&page=1#pid652949', '话题链接已经复制到剪贴板')">8楼</strong>
													<em onclick="$('postmessage_652949').className='t_bigfont'">大</em>							<em onclick="$('postmessage_652949').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_652949').className='t_smallfont'">小</em>												发表于 2010-6-2 10:35&nbsp;																					<a href="viewthread.php?tid=48048&amp;page=1&amp;authorid=13103" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_7"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_7"></div><div id="ad_thread4_7"></div>
						
						
																											<div id="postmessage_652949" class="t_msgfont">看来win7普及很快啊 - -#</div>

							
							
							
							
															<div id="post_rate_div_652949"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo652949_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=13103" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=48048&amp;repquote=652949&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 652949)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_7"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid653119" summary="pid653119" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=13694" target="_blank" id="userinfo653119" class="dropmenu" onmouseover="showMenu(this.id)">matt1089</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=13694">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=13694&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_8" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum653119" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=48048&page=1#pid653119', '话题链接已经复制到剪贴板')">9楼</strong>
													<em onclick="$('postmessage_653119').className='t_bigfont'">大</em>							<em onclick="$('postmessage_653119').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_653119').className='t_smallfont'">小</em>												发表于 2010-6-2 11:50&nbsp;																					<a href="viewthread.php?tid=48048&amp;page=1&amp;authorid=13694" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_8"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_8"></div><div id="ad_thread4_8"></div>
						
						
																											<div id="postmessage_653119" class="t_msgfont">已经用上鸟</div>

							
							
							
							
															<div id="post_rate_div_653119"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo653119_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=13694" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=48048&amp;repquote=653119&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 653119)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_8"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid653211" summary="pid653211" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=14003" target="_blank" id="userinfo653211" class="dropmenu" onmouseover="showMenu(this.id)">湿身事小</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=14003">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=14003&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_9" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum653211" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=48048&page=1#pid653211', '话题链接已经复制到剪贴板')">10楼</strong>
													<em onclick="$('postmessage_653211').className='t_bigfont'">大</em>							<em onclick="$('postmessage_653211').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_653211').className='t_smallfont'">小</em>												发表于 2010-6-2 12:26&nbsp;																					<a href="viewthread.php?tid=48048&amp;page=1&amp;authorid=14003" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_9"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_9"></div><div id="ad_thread4_9"></div>
						
						
																											<div id="postmessage_653211" class="t_msgfont">个人感觉没多大用处.</div>

							
							
							
							
															<div id="post_rate_div_653211"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo653211_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=14003" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=48048&amp;repquote=653211&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 653211)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_9"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid653618" summary="pid653618" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=13517" target="_blank" id="userinfo653618" class="dropmenu" onmouseover="showMenu(this.id)">gaoxsh</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=13517">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=13517&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_10" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum653618" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=48048&page=1#pid653618', '话题链接已经复制到剪贴板')">11楼</strong>
													<em onclick="$('postmessage_653618').className='t_bigfont'">大</em>							<em onclick="$('postmessage_653618').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_653618').className='t_smallfont'">小</em>												发表于 2010-6-2 16:38&nbsp;																					<a href="viewthread.php?tid=48048&amp;page=1&amp;authorid=13517" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_10"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_10"></div><div id="ad_thread4_10"></div>
						
						
																											<div id="postmessage_653618" class="t_msgfont">建议使用 web.qq.com 就懒得用臃肿又流氓的QQ软件了</div>

							
							
							
							
															<div id="post_rate_div_653618"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo653618_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=13517" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=48048&amp;repquote=653618&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 653618)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_10"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid653661" summary="pid653661" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12857" target="_blank" id="userinfo653661" class="dropmenu" onmouseover="showMenu(this.id)">平安剑客</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">少跟我扯民主的淡！漫漫人生，无解的时代，幸而一路有SIS和18P2P相伴。</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12857">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12857&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_11" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum653661" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=48048&page=1#pid653661', '话题链接已经复制到剪贴板')">12楼</strong>
													<em onclick="$('postmessage_653661').className='t_bigfont'">大</em>							<em onclick="$('postmessage_653661').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_653661').className='t_smallfont'">小</em>												发表于 2010-6-2 16:59&nbsp;																					<a href="viewthread.php?tid=48048&amp;page=1&amp;authorid=12857" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_11"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_11"></div><div id="ad_thread4_11"></div>
						
						
																											<div id="postmessage_653661" class="t_msgfont">comodo如何设置拦截，知道的朋友请简单说一下</div>

							
							
							
							
															<div id="post_rate_div_653661"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo653661_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=12857" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=48048&amp;repquote=653661&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 653661)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_11"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid653771" summary="pid653771" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=13071" target="_blank" id="userinfo653771" class="dropmenu" onmouseover="showMenu(this.id)">mop</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">屏蔽</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=13071">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=13071&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_12" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum653771" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=48048&page=1#pid653771', '话题链接已经复制到剪贴板')">13楼</strong>
													<em onclick="$('postmessage_653771').className='t_bigfont'">大</em>							<em onclick="$('postmessage_653771').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_653771').className='t_smallfont'">小</em>												发表于 2010-6-2 17:44&nbsp;																					<a href="viewthread.php?tid=48048&amp;page=1&amp;authorid=13071" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_12"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_12"></div><div id="ad_thread4_12"></div>
													<h2>关于QQ</h2>
						
						
																											<div id="postmessage_653771" class="t_msgfont">原文地址：<a href="http://hi.baidu.com/kernone/blog/item/db7218d9c1756f3933fa1cb5.html" target="_blank">http://hi.baidu.com/kernone/blog ... 756f3933fa1cb5.html</a><br />
<a href="http://hi.baidu.com/kernone/blog/item/0a77d8f8cc3f8255252df2ff.html" target="_blank">http://hi.baidu.com/kernone/blog ... 3f8255252df2ff.html</a><br />
<br />
1、拒绝腾讯官方QQ客户端<br />
网友已经证明腾讯官方的QQ客户端（Windows）会扫描用户的上网记录、文档，并会将数据上传到服务器。<br />
<br />
<br />
<br />
听起来很恐怖？<br />
<br />
是的，真的很恐怖。<br />
<br />
试想你的浏览历史全部都会被收集起来，你浏览器保存的密码也有可能被收集到腾讯的服务器。<br />
<br />
要让一个人放弃使用QQ是很难的，如果你必须要使用QQ，可以尝试使用WebQQ，也可以安装这个由网友编写的QQ侦探，它会阻止QQ对电脑的扫描。<br />
<br />
2、公用电脑上使用隐私浏览模式<br />
现在，最新版本的Firefox、Chrome、Safari等都有“隐私浏览模式”，如果你需要在公用电脑上使用浏览器，最好使用隐私模式。<br />
<br />
3、使用可信的翻墙工具<br />
在翻墙调查里我了解到，很多人使用无界浏览、自由门等翻墙软件。这些软件使用方便，而且免费，所以用户群很庞大。<br />
<br />
但是，这些翻墙软件不一定能很好地保护你的隐私，虽然没有明显的证据证明这些软件会做“坏事”，但如果你能更好地掌控你的翻墙工具，不是更安全么？<br />
<br />
除了Tor，我不推荐其它免费的翻墙工具（有时候Tor也不一定安全），除非你在翻墙的过程中不输入任何登录信息。<br />
<br />
我更推荐有翻墙需求的人购买信得过的VPN或SSH，又或者自己购买一个外国空间，架设代理自己使用。一年花费一两百在翻墙上并不算多。<br />
<br />
<br />
<br />
-----------------------------------------我不是发广告的分割线------------------------------------------------------------------<br />
<br />
<br />
<br />
QQ，我们每天都在使用，不论您是用手机还是PC登陆，QQ早已溶入我们的生活。而您知道QQ背后的故事吗？我将会连载本系列日志，为您揭露QQ的真相。<br />
<br />
收集QQ行为截图，作为取证之用。下面，我将给您展现我收集的部分QQ行为记录截图。<br />
<br />
 <br />
<br />
<br />
这幅图片记录下来了QQ正在枚举磁盘上的文件，并且以只读权限打开（如果您疑惑我是怎么知道QQ以只读权限打开文件，请您继续向下看，您就会知道令人震惊的秘密）。<br />
<br />
下面来几张相同意义的图片，但是更加震撼：<br />
<br />
<br />
<br />
<br />
<br />
<br />
还有很多截图，但是基本上都是记录QQ扫描用户文件的，我就不一一展示了。您可以在卡饭论坛上查找相关的贴子。<br />
<br />
这里，我还找到了一个记录下珊瑚虫QQ扫描注册表的附件，当然，我还是以截图展示：<br />
<br />
<br />
<br />
<br />
事件篇就到此，主要目的就是让您了解QQ会扫描文件内容等罪行。<br />
<br />
2010/5/27增加续图<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
首先，QQ的安装目录中，基本上所有的文件都是经过数字签名，不得不佩服TX办事很认真！而在安装目录中有个Common.dll的动态链接库文件，下面是该动态链接库调用的函数截图，其中就有枚举磁盘文件所用的FindFirstFile、FindNextFile、FindClose三个组合函数。<br />
<br />
<br />
<br />
<br />
函数在此，我相信是最有力的证据！当然，具体拿这个函数是枚举磁盘所有文件，还是用于其它目的，我不清楚。注意，这是直接调用Find***系列函数，而不是经过User32.dll调用，User32.dll调用这对函数很正常，因为通用对话框必须要使用这对函数进行枚举文件。 <br />
<br />
下图，应该可以说明问题 <br />
<br />
<br />
<br />
<br />
由图可以看到，QQ访问Messenger目录，我的TOOLS目录，但是访问这些目录的用意就不清楚了。至少，如果我要开发一款软件，我想我是不会跑去枚举跟我不相关的目录文件。 <br />
<br />
下图是QQ打开Messenger文件截图，我实在是搞不懂，为什么要打开EXE以及其它PE文件。难道是为了确认某个文件是PE格式或者TXT格式或者其它格式，而采用某种算法进行文件分析？ <br />
<br />
<br />
<br />
<br />
在分析QQ过程中，我还写了一段代码来模仿QQ行为，结果，我可以完全认定，QQ调用OpenFile函数打开文件，并且读取文件内容（不管是二进制文件还是其它类型文件）。截图为证： <br />
<br />
请将该截图与上一篇（事件篇）中的图片对比，非常相似。 <br />
<br />
<br />
<br />
<br />
证明篇就写到这里，我认为，以上分析完全足以证明QQ的罪证。或许，可能是我最先胡乱猜想导致后面的推测与事实不符。但是，有这些证据，我估计我的猜想也不会有很大出入。 <br />
<br />
大家也可以回想，为什么很多人都在怀疑QQ，为什么曾经国外杀软刚进入中国都“误报”QQ是病毒？这些还需要您自己去体会。<br />
<br />
通过《事件篇》和《证明篇》两篇日志，我估计您已经了解了一些QQ的罪行。现在，为了解决这个问题，历时半个多月的开发，并且在卡饭论坛内部测试，受到大量卡饭童鞋们好评的《QQ侦探》，现在公开下载！<br />
<br />
首先，为了不吊您胃口，附上主界面截图：<br />
<br />
 <br />
<br />
由于是类HIPS，可能您的QQ客户端会受到功能限制，您可以调整保护级别来自行设置。<br />
<br />
下面开始介绍《QQ侦探》<br />
<br />
《QQ侦探》是一款专为腾讯IM系列软件打造的轻量级智能型“类HIPS”，其主要功能是拦截QQ（包括TM）的一些程序行为，让您的系统更加安全。（注：HIPS即主机入侵防御系统，类HIPS是我自己叫出来的啦，也就是有HIPS的模型但是又不是传统意义上的HIPS）<br />
<br />
《QQ侦探》的开发目标是：不需要您过多干涉，只需要双击程序图标安装驱动保护模块，以后您便可以高枕无忧了。专为普通计算机用户打造的轻量级智能型类HIPS。<br />
<br />
 <br />
<br />
《QQ侦探》采用内核驱动的方式拦截QQ行为，因此，您可以在不启动任何《QQ侦探》进程的情况下，QQ的行为也会受到限制。您启用了《QQ侦探》的保护模块之后，您不会感觉到您的系统和之前有任何不同，《QQ侦探》已经在内部为您做了大量的工作。因此您只需要双击“QQDetective.exe”（QQ侦探配置程序）自动安装保护模块然后退出即可。当然，您也可以通过“QQDetective.exe”进行自己的个性化设置。另外，您还可以使用“QDLog.exe”查看当前QQ的行为拦截记录。<br />
<br />
<br />
《QQ侦探》的主要功能：<br />
<br />
1.拦截文件内容扫描（核心功能）<br />
2.监控QQ操作注册表关键信息（《QQ侦探》不会拦截QQ对注册表的操作）<br />
3.拦截QQ访问其他进程虚拟内存<br />
4.拦截QQ创建进程动作<br />
<br />
《QQ侦探》使用方法：<br />
<br />
安装与卸载：<br />
双击&quot;QQDetective.exe&quot;，第一次运行会要求您提升为管理员权限（以后就不再需要管理员权限了），程序会进行初始化设置并且自动为您安装保护模块。安装完成之后，您就会进入主界面，此时您可以自行配置程序的设置。设置完成之后，您可以单击“确定”按钮关闭配置程序。现在，您已经处于《QQ侦探》的保护之下了！如果您要卸载《QQ侦探》请以管理员权限运行“QQDetective.exe”，切换到“系统管理”选项卡，单击“卸载”按钮，程序会为您卸载驱动保护模块，此时，您一定要关闭“QQ侦探事件簿”，否则不能卸载成功。<br />
<br />
 <br />
<br />
程序的使用：<br />
在使用《QQ侦探》的过程中，您似乎不会感觉到您的系统和以往有什么异同。但是，您计算机上的QQ已经无法做一些“小动作”了，您可以通过“QQ侦探事件簿”查看QQ的行为信息。而且您可能会感觉到无法使用QQ的某些功能，当然，您可以自行设置拦截级别，从而达到让您满意的保护状态。 <br />
<br />
 <br />
<br />
如果在使用中出现下列情况，请按照以下方法解决：<br />
<br />
1.QQ聊天时，无法使用输入法：这是由于《QQ侦探》的“拦截QQ访问其它进程”功能所引起的（经过测试，您使用系统自带的输入法是没有任何问题的），此时您只需关闭“拦截QQ访问其它进程”功能即可。<br />
<br />
2.无法通过QQ主面板打开QQ空间、QQ邮箱、QQ游戏等附带功能：这是由于《QQ侦探》的“拦截QQ创建进程”功能所引起的。您可以选择关闭“QQ创建进程”功能，也可以先打开一款浏览器，再点击QQ空间、邮箱图标即可进入。如果您要使用QQ游戏、音乐等，请从“开始”菜单打开程序。<br />
<br />
3.无法使用文件传送功能给好友传送文件：这是由于《QQ侦探》的“拦截QQ扫描文件内容”功能引起的。“拦截QQ扫描文件内容”是本软件的核心功能，启用该功能，您的文件内容信息将会受到保护。但是，您也无法通过QQ传送某些文件。解决方法是：1.您可以暂时停用“拦截QQ扫描文件内容”功能；2.将文件移动至“我的文档”目录下，即Documents目录中，这时候再使用QQ的文件传送功能向好友传送文件。<br />
<br />
4.如果由于未知因素，导致您的系统崩溃、蓝屏。请您开机按下F8，通过“安全模式”或者“最后一次正确配置”功能进入系统，然后卸载《QQ侦探》（《QQ侦探》经过仔细测试，并且在卡饭论坛内测，反馈情况较好；在您正常的操作中一般来说是不会引起系统崩溃的）。如果卸载后任然蓝屏，请检查您的计算机自身设置情况。<br />
<br />
支持系统：Windows XP/Vista/7 32bit<br />
<br />
最新版本：1.0.2 beta<br />
<br />
下载地址：<a href="http://www.dbank.com/download.action?t=40&amp;k=MzE2MjQ3NDk=&amp;pcode=LCwzMTE1ODIsMzExNTgy&amp;rnd=4" target="_blank">http://www.dbank.com/download.ac ... sMzExNTgy&amp;rnd=4</a><br />
<br />
-------------------<br />
<br />
<br />
原文地址：<a href="http://hi.baidu.com/kernone/blog/item/db7218d9c1756f3933fa1cb5.html" target="_blank">http://hi.baidu.com/kernone/blog ... 756f3933fa1cb5.html</a><br />
<a href="http://hi.baidu.com/kernone/blog/item/0a77d8f8cc3f8255252df2ff.html" target="_blank">http://hi.baidu.com/kernone/blog ... 3f8255252df2ff.html</a><br />
<br />
[<i> 本帖最后由 mop 于 2010-6-2 17:48 编辑 </i>]</div>

							
							
							
							
															<div id="post_rate_div_653771"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo653771_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=13071" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=48048&amp;repquote=653771&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 653771)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_12"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid654212" summary="pid654212" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=13898" target="_blank" id="userinfo654212" class="dropmenu" onmouseover="showMenu(this.id)">布鲁斯</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">八零后，已婚男，未就业，无收入。</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=13898">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=13898&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_13" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum654212" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=48048&page=1#pid654212', '话题链接已经复制到剪贴板')">14楼</strong>
													<em onclick="$('postmessage_654212').className='t_bigfont'">大</em>							<em onclick="$('postmessage_654212').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_654212').className='t_smallfont'">小</em>												发表于 2010-6-2 21:57&nbsp;																					<a href="viewthread.php?tid=48048&amp;page=1&amp;authorid=13898" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_13"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_13"></div><div id="ad_thread4_13"></div>
						
						
																											<div id="postmessage_654212" class="t_msgfont">我今晚用了这个软件，WINXP SP3导致系统自动重启。</div>

							
							
							
							
															<div id="post_rate_div_654212"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo654212_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=13898" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=48048&amp;repquote=654212&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 654212)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_13"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid654244" summary="pid654244" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6985" target="_blank" id="userinfo654244" class="dropmenu" onmouseover="showMenu(this.id)">信手拈来一江山</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">真理部门卫 和平部锅炉工 友爱部清洁工 富裕部审计员 一夜七次狼  最近成功升级为一夜十次狼 </p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6985">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6985&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_14" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum654244" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=48048&page=1#pid654244', '话题链接已经复制到剪贴板')">15楼</strong>
													<em onclick="$('postmessage_654244').className='t_bigfont'">大</em>							<em onclick="$('postmessage_654244').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_654244').className='t_smallfont'">小</em>												发表于 2010-6-2 22:19&nbsp;																					<a href="viewthread.php?tid=48048&amp;page=1&amp;authorid=6985" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_14"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_14"></div><div id="ad_thread4_14"></div>
						
						
																											<div id="postmessage_654244" class="t_msgfont">科莫多也可以拦截的~</div>

							
							
							
							
															<div id="post_rate_div_654244"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo654244_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=6985" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=48048&amp;repquote=654244&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 654244)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_14"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid655365" summary="pid655365" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=4885" target="_blank" id="userinfo655365" class="dropmenu" onmouseover="showMenu(this.id)">旧居烧炭</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=4885">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=4885&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_15" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum655365" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=48048&page=1#pid655365', '话题链接已经复制到剪贴板')">16楼</strong>
													<em onclick="$('postmessage_655365').className='t_bigfont'">大</em>							<em onclick="$('postmessage_655365').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_655365').className='t_smallfont'">小</em>												发表于 2010-6-3 14:41&nbsp;																					<a href="viewthread.php?tid=48048&amp;page=1&amp;authorid=4885" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_15"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_15"></div><div id="ad_thread4_15"></div>
						
						
																											<div id="postmessage_655365" class="t_msgfont">用了这个之后GDI++无法渲染QQ字体</div>

							
							
							
							
															<div id="post_rate_div_655365"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo655365_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=4885" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=48048&amp;repquote=655365&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 655365)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_15"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid658757" summary="pid658757" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=11948" target="_blank" id="userinfo658757" class="dropmenu" onmouseover="showMenu(this.id)">旺财</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=11948">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=11948&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_16" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum658757" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=48048&page=1#pid658757', '话题链接已经复制到剪贴板')">17楼</strong>
													<em onclick="$('postmessage_658757').className='t_bigfont'">大</em>							<em onclick="$('postmessage_658757').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_658757').className='t_smallfont'">小</em>												发表于 2010-6-7 09:19&nbsp;																					<a href="viewthread.php?tid=48048&amp;page=1&amp;authorid=11948" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_16"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_16"></div><div id="ad_thread4_16"></div>
						
						
																											<div id="postmessage_658757" class="t_msgfont">刚试了了一下，用Google拼音正常输入</div>

							
							
							
							
															<div id="post_rate_div_658757"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo658757_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=11948" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=48048&amp;repquote=658757&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 658757)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_16"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid659299" summary="pid659299" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=15155" target="_blank" id="userinfo659299" class="dropmenu" onmouseover="showMenu(this.id)">gxrrll</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=15155">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=15155&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_17" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum659299" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=48048&page=1#pid659299', '话题链接已经复制到剪贴板')">18楼</strong>
													<em onclick="$('postmessage_659299').className='t_bigfont'">大</em>							<em onclick="$('postmessage_659299').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_659299').className='t_smallfont'">小</em>												发表于 2010-6-7 11:00&nbsp;																					<a href="viewthread.php?tid=48048&amp;page=1&amp;authorid=15155" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_17"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_17"></div><div id="ad_thread4_17"></div>
						
						
																											<div id="postmessage_659299" class="t_msgfont">用web.qq.com吧，这样就不用安装qq软件，也就没有什么顾虑了</div>

							
							
							
							
															<div id="post_rate_div_659299"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo659299_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=15155" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=48048&amp;repquote=659299&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 659299)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_17"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid659446" summary="pid659446" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2973" target="_blank" id="userinfo659446" class="dropmenu" onmouseover="showMenu(this.id)">free1989</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">@photobluer</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2973">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2973&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_18" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum659446" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=48048&page=1#pid659446', '话题链接已经复制到剪贴板')">19楼</strong>
													<em onclick="$('postmessage_659446').className='t_bigfont'">大</em>							<em onclick="$('postmessage_659446').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_659446').className='t_smallfont'">小</em>												发表于 2010-6-7 11:16&nbsp;																					<a href="viewthread.php?tid=48048&amp;page=1&amp;authorid=2973" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_18"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_18"></div><div id="ad_thread4_18"></div>
						
						
																											<div id="postmessage_659446" class="t_msgfont">昨天试了试那个“概念版”，结果:<br />
<br />
<img src="http://i50.tinypic.com/qx6kh1.jpg" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></div>

							
							
							
							
															<div id="post_rate_div_659446"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo659446_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=2973" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=48048&amp;repquote=659446&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 659446)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_18"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid659895" summary="pid659895" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12290" target="_blank" id="userinfo659895" class="dropmenu" onmouseover="showMenu(this.id)">hanhan</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">今天，你钓鱼了吗？</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12290">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12290&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_19" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum659895" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=48048&page=1#pid659895', '话题链接已经复制到剪贴板')">20楼</strong>
													<em onclick="$('postmessage_659895').className='t_bigfont'">大</em>							<em onclick="$('postmessage_659895').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_659895').className='t_smallfont'">小</em>												发表于 2010-6-7 12:29&nbsp;																					<a href="viewthread.php?tid=48048&amp;page=1&amp;authorid=12290" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_19"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_19"></div><div id="ad_thread4_19"></div>
						
						
																											<div id="postmessage_659895" class="t_msgfont">防QQ用处不大啊<br />
防的住MSN&nbsp;&nbsp;防的住迅雷给TG报信吗？</div>

							
							
							
							
															<div id="post_rate_div_659895"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo659895_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=12290" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=48048&amp;repquote=659895&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 659895)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_19"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid667388" summary="pid667388" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10114" target="_blank" id="userinfo667388" class="dropmenu" onmouseover="showMenu(this.id)">m3g4</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10114">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10114&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_20" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum667388" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=48048&page=1#pid667388', '话题链接已经复制到剪贴板')">21楼</strong>
													<em onclick="$('postmessage_667388').className='t_bigfont'">大</em>							<em onclick="$('postmessage_667388').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_667388').className='t_smallfont'">小</em>												发表于 2010-6-9 04:02&nbsp;																					<a href="viewthread.php?tid=48048&amp;page=1&amp;authorid=10114" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_20"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_20"></div><div id="ad_thread4_20"></div>
						
						
																											<div id="postmessage_667388" class="t_msgfont">好东西啊</div>

							
							
							
							
															<div id="post_rate_div_667388"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo667388_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=10114" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=48048&amp;repquote=667388&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 667388)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_20"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid710130" summary="pid710130" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=11814" target="_blank" id="userinfo710130" class="dropmenu" onmouseover="showMenu(this.id)">河殇</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">抱歉，根据相关法律法规和政策，本人目前只能低调，不能狂妄。推特@lxkrock </p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=11814">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=11814&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_21" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum710130" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=48048&page=1#pid710130', '话题链接已经复制到剪贴板')">22楼</strong>
													<em onclick="$('postmessage_710130').className='t_bigfont'">大</em>							<em onclick="$('postmessage_710130').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_710130').className='t_smallfont'">小</em>												发表于 2010-6-29 12:23&nbsp;																					<a href="viewthread.php?tid=48048&amp;page=1&amp;authorid=11814" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_21"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_21"></div><div id="ad_thread4_21"></div>
						
						
																											<div id="postmessage_710130" class="t_msgfont">好东西！！！</div>

							
							
							
							
															<div id="post_rate_div_710130"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo710130_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=11814" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=48048&amp;repquote=710130&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 710130)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_21"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid783569" summary="pid783569" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=13468" target="_blank" id="userinfo783569" class="dropmenu" onmouseover="showMenu(this.id)">C.C.</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=13468">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=13468&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_22" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum783569" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=48048&page=1#pid783569', '话题链接已经复制到剪贴板')">23楼</strong>
													<em onclick="$('postmessage_783569').className='t_bigfont'">大</em>							<em onclick="$('postmessage_783569').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_783569').className='t_smallfont'">小</em>												发表于 2010-8-15 10:45&nbsp;																					<a href="viewthread.php?tid=48048&amp;page=1&amp;authorid=13468" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_22"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_22"></div><div id="ad_thread4_22"></div>
						
						
																											<div id="postmessage_783569" class="t_msgfont">2010/08/13 更新QQ侦探 1.1.0 正式版</div>

							
							
							
							
															<div id="post_rate_div_783569"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo783569_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=13468" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=48048&amp;repquote=783569&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 783569)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_22"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid783810" summary="pid783810" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10114" target="_blank" id="userinfo783810" class="dropmenu" onmouseover="showMenu(this.id)">m3g4</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10114">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10114&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_23" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum783810" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=48048&page=1#pid783810', '话题链接已经复制到剪贴板')">24楼</strong>
													<em onclick="$('postmessage_783810').className='t_bigfont'">大</em>							<em onclick="$('postmessage_783810').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_783810').className='t_smallfont'">小</em>												发表于 2010-8-15 13:12&nbsp;																					<a href="viewthread.php?tid=48048&amp;page=1&amp;authorid=10114" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_23"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_23"></div><div id="ad_thread4_23"></div>
						
						
																											<div id="postmessage_783810" class="t_msgfont">更新了更新了</div>

							
							
							
							
															<div id="post_rate_div_783810"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo783810_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=10114" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=48048&amp;repquote=783810&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 783810)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_23"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid784007" summary="pid784007" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=11814" target="_blank" id="userinfo784007" class="dropmenu" onmouseover="showMenu(this.id)">河殇</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">抱歉，根据相关法律法规和政策，本人目前只能低调，不能狂妄。推特@lxkrock </p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=11814">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=11814&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_24" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum784007" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=48048&page=1#pid784007', '话题链接已经复制到剪贴板')">25楼</strong>
													<em onclick="$('postmessage_784007').className='t_bigfont'">大</em>							<em onclick="$('postmessage_784007').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_784007').className='t_smallfont'">小</em>												发表于 2010-8-15 15:27&nbsp;																					<a href="viewthread.php?tid=48048&amp;page=1&amp;authorid=11814" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_24"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_24"></div><div id="ad_thread4_24"></div>
						
						
																											<div id="postmessage_784007" class="t_msgfont">昨天更新的<br />
与新版的qq冲突很大<br />
<br />
打开qq就崩溃<br />
然后自动重启～～</div>

							
							
							
							
															<div id="post_rate_div_784007"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo784007_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=11814" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=48048&amp;repquote=784007&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 784007)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_24"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid784103" summary="pid784103" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=17661" target="_blank" id="userinfo784103" class="dropmenu" onmouseover="showMenu(this.id)">Zipurmouth</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=17661">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=17661&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_25" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum784103" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=48048&page=1#pid784103', '话题链接已经复制到剪贴板')">26楼</strong>
													<em onclick="$('postmessage_784103').className='t_bigfont'">大</em>							<em onclick="$('postmessage_784103').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_784103').className='t_smallfont'">小</em>												发表于 2010-8-15 16:50&nbsp;																					<a href="viewthread.php?tid=48048&amp;page=1&amp;authorid=17661" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_25"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_25"></div><div id="ad_thread4_25"></div>
						
						
																											<div id="postmessage_784103" class="t_msgfont">原来用的1.03没事，今天更新了会蓝屏～</div>

							
							
							
							
															<div id="post_rate_div_784103"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo784103_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=17661" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=48048&amp;repquote=784103&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 784103)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_25"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid784337" summary="pid784337" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 <a name="lastpost"></a>					<cite>											<a href="space.php?uid=14831" target="_blank" id="userinfo784337" class="dropmenu" onmouseover="showMenu(this.id)">zhexing_lin</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=14831">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=14831&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_26" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum784337" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=48048&page=1#pid784337', '话题链接已经复制到剪贴板')">27楼</strong>
													<em onclick="$('postmessage_784337').className='t_bigfont'">大</em>							<em onclick="$('postmessage_784337').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_784337').className='t_smallfont'">小</em>												发表于 2010-8-15 20:02&nbsp;																					<a href="viewthread.php?tid=48048&amp;page=1&amp;authorid=14831" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_26"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_26"></div><div id="ad_thread4_26"></div>
						
						
																											<div id="postmessage_784337" class="t_msgfont">好东西啊~</div>

							
							
							
							
															<div id="post_rate_div_784337"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo784337_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=14831" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=48048&amp;repquote=784337&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 784337)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_26"></div>				</div>
			</td>
		</tr>
		</table>
		</div>
</form>





<div class="pages_btns">
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=48048&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=48048&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
				<span class="postbtn" id="newspecialtmp" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=48048&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

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

	<form method="post" id="postform" action="post.php?action=reply&amp;fid=26&amp;tid=48048&amp;extra=&amp;replysubmit=yes" onSubmit="return validate(this)">
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
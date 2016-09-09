<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<title>使用免费cPanel空间的SFTP翻墙 [图文教程] - 国家局域网研究所 -  1984bbs.com </title>
<meta name="keywords" content="" />
<meta name="MSSmartTagsPreventParsing" content="True" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<link rel="archives" title="1984bbs.com" href="https://1984bbs.com/archiver/" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_viewthread.css" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_common.css" />
<script type="text/javascript">
	var discuz_uid = 13019;var IMGDIR = 'images/default';var attackevasive = '0';var gid = 0;var STYLEID = '1';
	gid = parseInt('3');var fid = parseInt('26');var tid = parseInt('31667');
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
			<p><a href="index.php" id="forumlist" onmouseover="showMenu(this.id)" class="dropmenu">1984bbs.com</a> &raquo; <a href="forumdisplay.php?fid=26">国家局域网研究所</a> &raquo; 使用免费cPanel空间的SFTP翻墙 [图文教程]</p>
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
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=31667&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=31667&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
	<div class="pages"><em>&nbsp;266&nbsp;</em><strong>1</strong><a href="viewthread.php?tid=31667&amp;extra=&amp;page=2">2</a><a href="viewthread.php?tid=31667&amp;extra=&amp;page=3">3</a><a href="viewthread.php?tid=31667&amp;extra=&amp;page=4">4</a><a href="viewthread.php?tid=31667&amp;extra=&amp;page=5">5</a><a href="viewthread.php?tid=31667&amp;extra=&amp;page=6">6</a><a href="viewthread.php?tid=31667&amp;extra=&amp;page=2" class="next">&rsaquo;&rsaquo;</a></div>			<span class="postbtn" id="newspecial" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=31667&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

	<ul class="popupmenu_popup newspecialmenu" id="newspecial_menu" style="display: none">
		<li><a href="post.php?action=newthread&amp;fid=26&amp;extra=">发新话题</a></li>
		<li class="poll"><a href="post.php?action=newthread&amp;fid=26&amp;extra=&amp;special=1">发布投票</a></li>													</ul>

<form method="post" name="modactions">
	<input type="hidden" name="formhash" value="823c9fa2" />
	<div class="mainbox viewthread">
		<span class="headactions">
					<a href="my.php?item=favorites&amp;tid=31667" id="ajax_favorite" onclick="ajaxmenu(event, this.id, 3000, 0)">收藏</a>
			<a href="my.php?item=subscriptions&amp;subadd=31667" id="ajax_subscription" onclick="ajaxmenu(event, this.id, 3000, null, 0)">订阅</a>
			<a href="misc.php?action=emailfriend&amp;tid=31667" id="emailfriend" onclick="ajaxmenu(event, this.id, 9000000, null, 0)">推荐</a>
				<a href="viewthread.php?action=printable&amp;tid=31667" target="_blank" class="notabs">打印</a>
				</span>
		<h1>使用免费cPanel空间的SFTP翻墙 [图文教程]		</h1>
				<ins>
						<a href="misc.php?action=viewthreadmod&amp;tid=31667" title="主题操作记录" target="_blank">本主题由 库存袈裟 于 2009-12-22 16:01 分类</a>								</ins>
							<table id="pid359499" summary="pid359499" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1960" target="_blank" id="userinfo359499" class="dropmenu" onmouseover="showMenu(this.id)">库存袈裟</a></cite>
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
						<strong title="复制话题链接到剪贴板" id="postnum359499" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=31667&page=1#pid359499', '话题链接已经复制到剪贴板')">1楼</strong>
													<em onclick="$('postmessage_359499').className='t_bigfont'">大</em>							<em onclick="$('postmessage_359499').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_359499').className='t_smallfont'">小</em>												发表于 2009-12-7 11:58&nbsp;																					<a href="viewthread.php?tid=31667&amp;page=1&amp;authorid=1960" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_0"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_0"></div><div id="ad_thread4_0"></div>
													<h2>使用免费cPanel空间的SFTP翻墙 [图文教程]</h2>
						
						
																											<div id="postmessage_359499" class="t_msgfont"><strong>1.前往FreeWebSpace寻找cPanel的免费空间</strong><br />
FreeWebSpace论坛Free hosting offers 板块：<br />
<a href="http://www.freewebspace.net/forums/forumdisplay.php?f=32" target="_blank">http://www.freewebspace.net/forums/forumdisplay.php?f=32</a><br />
<br />
注意事项：<br />
1.注意分清cPanel/iPanel/LayeredPanel/VistaPanel/DirectAdmin，本教程仅对<strong>部分</strong>cPanel空间有效<br />
2.并非所有cPanel都支持SSH转发，需测试<br />
3.尽量不要在发帖得空间（post4host/P4H/P2H）这类免费空间上消耗太多时间<br />
4.申请到的空间除了用来翻墙外不要闲置，放个twitter api或者wordpress吧。<br />
twitter api下载地址：<br />
<strong>乌鸦嘴</strong> <a href="http://btchina.bos.ru/ssh/tw.zip" target="_blank">http://btchina.bos.ru/ssh/tw.zip</a><br />
<strong>kwestion</strong> <a href="http://code.google.com/p/kwestion/" target="_blank">http://code.google.com/p/kwestion/</a><br />
<br />
<br />
<strong>下面以某免费空间申请过程简单讲解</strong><br />
<br />
<strong>2.选择免费空间</strong><br />
<br />
找到免费空间后，前往申请界面，一般cPanel空间即时申请有WHCMS/iPanel两种，步骤与填写内容基本相似，下面我们以WHCMS例：<br />
<br />
Shopping Cart<br />
<img src="http://btchina.bos.ru/ssh/00.jpg" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
<br />
<strong>3.选择域名</strong><br />
<br />
<img src="http://btchina.bos.ru/ssh/01.jpg" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
<br />
这一步WHCMS和iPanel的区别：WHCMS此步输入的域名（无论是顶级域名还是二级域名）将成为后面登录用的CP用户名，而iPanel则在最后一步自行选择用户名。<br />
<br />
<strong>4.附件选项</strong><br />
<br />
<img src="http://btchina.bos.ru/ssh/02.jpg" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
<br />
基本上没啥可选，往往此步都是收费项目<br />
<br />
<strong>5.购物车</strong><br />
<br />
<img src="http://btchina.bos.ru/ssh/03.jpg" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
<br />
确认无误，checkout<br />
<br />
<strong>6.完善注册信息</strong><br />
<br />
<img src="http://btchina.bos.ru/ssh/04.jpg" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
切记：根据实际网络接入所属地域填写，若通过北京网通申请而填写华盛顿的地址，管理员审查时会根据IP地址判定为欺诈驳回申请。具体到街道门牌号可不如实。<br />
<br />
<img src="http://btchina.bos.ru/ssh/05.jpg" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
<br />
<strong>7.前往邮箱收信</strong><br />
<br />
<img src="http://btchina.bos.ru/ssh/06.jpg" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
<br />
这一步WHCMS和iPanel的区别：WHCMS此步多数不会收到一封带有激活链接的邮件，而iPanel则会收到一封带有激活链接的邮件，以防SPAM。但无论WHCMS还是iPanel都有可能等待管理员人工才能开通。所以第六步中的信息真实性格外重要。<br />
<br />
有人工审核的空间，此步将不能即时收到第三封邮件，审核通过后方可收到。<br />
<br />
<strong>8.账户信息邮件</strong><br />
<br />
<img src="http://btchina.bos.ru/ssh/07.jpg" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
<br />
<strong>9.登录cPanel</strong><br />
<br />
<img src="http://btchina.bos.ru/ssh/08.jpg" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
<br />
<img src="http://btchina.bos.ru/ssh/09.jpg" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
<br />
左侧展开后<br />
<img src="http://btchina.bos.ru/ssh/10.jpg" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
<br />
点击FTP Accounts<br />
<img src="http://btchina.bos.ru/ssh/12.jpg" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
<br />
点击Configure FTP Client<br />
<img src="http://btchina.bos.ru/ssh/13.jpg" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
<br />
修改密码<br />
<img src="http://btchina.bos.ru/ssh/11.jpg" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
<br />
<br />
<strong>下面的步骤与下载软件请参考</strong><br />
<a href="https://1984bbs.com/viewthread.php?tid=38397" target="_blank">https://1984bbs.com/viewthread.php?tid=38397</a><br />
<br />
<strong>10.运行MyEnTunnel并填写如下信息</strong><br />
<img src="http://btchina.bos.ru/ssh/14.jpg" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
<br />
确认指纹警告<br />
<img src="http://btchina.bos.ru/ssh/15.jpg" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
<br />
<br />
==========================================<br />
1984BBS原创教程</div>

							
							
							
							
															<div id="post_rate_div_359499"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo359499_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1960" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=31667&amp;repquote=359499&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 359499)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_0"></div>				</div>
			</td>
		</tr>
		</table>
		</div><div class="ad_column" id="ad_interthread"><a href="/viewthread.php?tid=54699" target="_blank" style="color:red;">1984bbs是一个非营利项目，它需要您的捐助！</font></a>		</div>
	<div class="mainbox viewthread">
			<table id="pid359565" summary="pid359565" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=3432" target="_blank" id="userinfo359565" class="dropmenu" onmouseover="showMenu(this.id)">lynnstar</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=3432">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=3432&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_1" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum359565" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=31667&page=1#pid359565', '话题链接已经复制到剪贴板')">2楼</strong>
													<em onclick="$('postmessage_359565').className='t_bigfont'">大</em>							<em onclick="$('postmessage_359565').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_359565').className='t_smallfont'">小</em>												发表于 2009-12-7 12:44&nbsp;																					<a href="viewthread.php?tid=31667&amp;page=1&amp;authorid=3432" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_1"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_1"></div><div id="ad_thread4_1"></div>
						
						
																											<div id="postmessage_359565" class="t_msgfont">mark</div>

							
							
							
							
															<div id="post_rate_div_359565"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo359565_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=3432" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=31667&amp;repquote=359565&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 359565)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_1"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid359626" summary="pid359626" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10335" target="_blank" id="userinfo359626" class="dropmenu" onmouseover="showMenu(this.id)">rex5652</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10335">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10335&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_2" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum359626" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=31667&page=1#pid359626', '话题链接已经复制到剪贴板')">3楼</strong>
													<em onclick="$('postmessage_359626').className='t_bigfont'">大</em>							<em onclick="$('postmessage_359626').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_359626').className='t_smallfont'">小</em>												发表于 2009-12-7 13:10&nbsp;																					<a href="viewthread.php?tid=31667&amp;page=1&amp;authorid=10335" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_2"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_2"></div><div id="ad_thread4_2"></div>
						
						
																											<div id="postmessage_359626" class="t_msgfont">支持支持！已经有了SSH了…呵呵</div>

							
							
							
							
															<div id="post_rate_div_359626"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo359626_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=10335" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=31667&amp;repquote=359626&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 359626)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_2"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid359629" summary="pid359629" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10054" target="_blank" id="userinfo359629" class="dropmenu" onmouseover="showMenu(this.id)">imus</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">升斗小民</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10054">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10054&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_3" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum359629" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=31667&page=1#pid359629', '话题链接已经复制到剪贴板')">4楼</strong>
													<em onclick="$('postmessage_359629').className='t_bigfont'">大</em>							<em onclick="$('postmessage_359629').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_359629').className='t_smallfont'">小</em>												发表于 2009-12-7 13:11&nbsp;																					<a href="viewthread.php?tid=31667&amp;page=1&amp;authorid=10054" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_3"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_3"></div><div id="ad_thread4_3"></div>
						
						
																											<div id="postmessage_359629" class="t_msgfont">记号.</div>

							
							
							
							
															<div id="post_rate_div_359629"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo359629_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://imuspot.appspot.com/" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=10054" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=31667&amp;repquote=359629&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 359629)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_3"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid359632" summary="pid359632" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=3932" target="_blank" id="userinfo359632" class="dropmenu" onmouseover="showMenu(this.id)">magicbully</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=3932">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=3932&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_4" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum359632" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=31667&page=1#pid359632', '话题链接已经复制到剪贴板')">5楼</strong>
													<em onclick="$('postmessage_359632').className='t_bigfont'">大</em>							<em onclick="$('postmessage_359632').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_359632').className='t_smallfont'">小</em>												发表于 2009-12-7 13:14&nbsp;																					<a href="viewthread.php?tid=31667&amp;page=1&amp;authorid=3932" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_4"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_4"></div><div id="ad_thread4_4"></div>
						
						
																											<div id="postmessage_359632" class="t_msgfont">看看。袈裟辛苦了。</div>

							
							
							
							
															<div id="post_rate_div_359632"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo359632_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=3932" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=31667&amp;repquote=359632&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 359632)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_4"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid359644" summary="pid359644" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6871" target="_blank" id="userinfo359644" class="dropmenu" onmouseover="showMenu(this.id)">法不阿Quei</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">我活在世上，无非是想明白些道理，看见些有趣的事情。</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6871">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6871&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_5" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum359644" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=31667&page=1#pid359644', '话题链接已经复制到剪贴板')">6楼</strong>
													<em onclick="$('postmessage_359644').className='t_bigfont'">大</em>							<em onclick="$('postmessage_359644').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_359644').className='t_smallfont'">小</em>												发表于 2009-12-7 13:18&nbsp;																					<a href="viewthread.php?tid=31667&amp;page=1&amp;authorid=6871" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_5"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_5"></div><div id="ad_thread4_5"></div>
						
						
																											<div id="postmessage_359644" class="t_msgfont">TOR VPN PUFF 和门界什么的都用了 就差这个了</div>

							
							
							
							
															<div id="post_rate_div_359644"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo359644_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=6871" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=31667&amp;repquote=359644&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 359644)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_5"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid359651" summary="pid359651" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10073" target="_blank" id="userinfo359651" class="dropmenu" onmouseover="showMenu(this.id)">jkgtw</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10073">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10073&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_6" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum359651" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=31667&page=1#pid359651', '话题链接已经复制到剪贴板')">7楼</strong>
													<em onclick="$('postmessage_359651').className='t_bigfont'">大</em>							<em onclick="$('postmessage_359651').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_359651').className='t_smallfont'">小</em>												发表于 2009-12-7 13:22&nbsp;																					<a href="viewthread.php?tid=31667&amp;page=1&amp;authorid=10073" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_6"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_6"></div><div id="ad_thread4_6"></div>
						
						
																											<div id="postmessage_359651" class="t_msgfont">太棒了！做个记号～</div>

							
							
							
							
															<div id="post_rate_div_359651"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo359651_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=10073" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=31667&amp;repquote=359651&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 359651)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_6"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid359653" summary="pid359653" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10247" target="_blank" id="userinfo359653" class="dropmenu" onmouseover="showMenu(this.id)">scorpion</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">斯德哥尔摩症患者</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10247">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10247&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_7" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum359653" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=31667&page=1#pid359653', '话题链接已经复制到剪贴板')">8楼</strong>
													<em onclick="$('postmessage_359653').className='t_bigfont'">大</em>							<em onclick="$('postmessage_359653').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_359653').className='t_smallfont'">小</em>												发表于 2009-12-7 13:23&nbsp;																					<a href="viewthread.php?tid=31667&amp;page=1&amp;authorid=10247" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_7"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_7"></div><div id="ad_thread4_7"></div>
						
						
																											<div id="postmessage_359653" class="t_msgfont">做个记号，有备无患。</div>

							
							
							
							
															<div id="post_rate_div_359653"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo359653_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=10247" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=31667&amp;repquote=359653&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 359653)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_7"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid359715" summary="pid359715" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1739" target="_blank" id="userinfo359715" class="dropmenu" onmouseover="showMenu(this.id)">savagekw</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1739">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1739&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_8" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum359715" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=31667&page=1#pid359715', '话题链接已经复制到剪贴板')">9楼</strong>
													<em onclick="$('postmessage_359715').className='t_bigfont'">大</em>							<em onclick="$('postmessage_359715').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_359715').className='t_smallfont'">小</em>												发表于 2009-12-7 13:52&nbsp;																					<a href="viewthread.php?tid=31667&amp;page=1&amp;authorid=1739" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_8"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_8"></div><div id="ad_thread4_8"></div>
						
						
																											<div id="postmessage_359715" class="t_msgfont">袈裟兄果然凶猛</div>

							
							
							
							
															<div id="post_rate_div_359715"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo359715_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1739" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=31667&amp;repquote=359715&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 359715)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_8"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid359728" summary="pid359728" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2213" target="_blank" id="userinfo359728" class="dropmenu" onmouseover="showMenu(this.id)">核子力量</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">Twitter.com/hzpower</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2213">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2213&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_9" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum359728" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=31667&page=1#pid359728', '话题链接已经复制到剪贴板')">10楼</strong>
													<em onclick="$('postmessage_359728').className='t_bigfont'">大</em>							<em onclick="$('postmessage_359728').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_359728').className='t_smallfont'">小</em>												发表于 2009-12-7 13:59&nbsp;																					<a href="viewthread.php?tid=31667&amp;page=1&amp;authorid=2213" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_9"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_9"></div><div id="ad_thread4_9"></div>
						
						
																											<div id="postmessage_359728" class="t_msgfont">这个目前来看是最好的，小众，分散<br />
<br />
另求指点，myentunnel面板里面的“启用压缩”选项是干什么的，勾上之后有效果吗<br />
还有“启用慢速轮询“”动态socks“都是什么意思，麻烦高人解释一下，多谢</div>

							
							
							
							
															<div id="post_rate_div_359728"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo359728_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://twitter.com/hzpower" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=2213" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=31667&amp;repquote=359728&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 359728)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_9"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid359746" summary="pid359746" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10114" target="_blank" id="userinfo359746" class="dropmenu" onmouseover="showMenu(this.id)">m3g4</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10114">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10114&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_10" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum359746" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=31667&page=1#pid359746', '话题链接已经复制到剪贴板')">11楼</strong>
													<em onclick="$('postmessage_359746').className='t_bigfont'">大</em>							<em onclick="$('postmessage_359746').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_359746').className='t_smallfont'">小</em>												发表于 2009-12-7 14:09&nbsp;																					<a href="viewthread.php?tid=31667&amp;page=1&amp;authorid=10114" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_10"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_10"></div><div id="ad_thread4_10"></div>
						
						
																											<div id="postmessage_359746" class="t_msgfont">刚在推特上看到北风发了，被RT了很多次</div>

							
							
							
							
															<div id="post_rate_div_359746"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo359746_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=10114" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=31667&amp;repquote=359746&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 359746)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_10"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid359756" summary="pid359756" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8556" target="_blank" id="userinfo359756" class="dropmenu" onmouseover="showMenu(this.id)">huntou</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8556">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8556&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_11" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum359756" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=31667&page=1#pid359756', '话题链接已经复制到剪贴板')">12楼</strong>
													<em onclick="$('postmessage_359756').className='t_bigfont'">大</em>							<em onclick="$('postmessage_359756').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_359756').className='t_smallfont'">小</em>												发表于 2009-12-7 14:17&nbsp;																					<a href="viewthread.php?tid=31667&amp;page=1&amp;authorid=8556" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_11"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_11"></div><div id="ad_thread4_11"></div>
						
						
																											<div id="postmessage_359756" class="t_msgfont">遭党国记恨的东西</div>

							
							
							
							
															<div id="post_rate_div_359756"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo359756_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=8556" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=31667&amp;repquote=359756&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 359756)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_11"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid359773" summary="pid359773" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=464" target="_blank" id="userinfo359773" class="dropmenu" onmouseover="showMenu(this.id)">Phillip</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">路边社特邀围观群众</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=464">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=464&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_12" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum359773" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=31667&page=1#pid359773', '话题链接已经复制到剪贴板')">13楼</strong>
													<em onclick="$('postmessage_359773').className='t_bigfont'">大</em>							<em onclick="$('postmessage_359773').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_359773').className='t_smallfont'">小</em>												发表于 2009-12-7 14:25&nbsp;																					<a href="viewthread.php?tid=31667&amp;page=1&amp;authorid=464" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_12"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_12"></div><div id="ad_thread4_12"></div>
													<h2>哈哈</h2>
						
						
																											<div id="postmessage_359773" class="t_msgfont">现在翻墙的方式已经发展到分散化去和中心化, 更加隐蔽. 封锁难度越来越大了.</div>

							
							
							
							
															<div id="post_rate_div_359773"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo359773_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=464" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=31667&amp;repquote=359773&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 359773)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_12"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid359796" summary="pid359796" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=9698" target="_blank" id="userinfo359796" class="dropmenu" onmouseover="showMenu(this.id)">psuidt</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">我的血是热的</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=9698">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=9698&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_13" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum359796" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=31667&page=1#pid359796', '话题链接已经复制到剪贴板')">14楼</strong>
													<em onclick="$('postmessage_359796').className='t_bigfont'">大</em>							<em onclick="$('postmessage_359796').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_359796').className='t_smallfont'">小</em>												发表于 2009-12-7 14:37&nbsp;																					<a href="viewthread.php?tid=31667&amp;page=1&amp;authorid=9698" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_13"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_13"></div><div id="ad_thread4_13"></div>
						
						
																											<div id="postmessage_359796" class="t_msgfont">奇怪,我注册登录后,在左侧，没有找到Shared Ip Addres</div>

							
							
							
							
															<div id="post_rate_div_359796"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo359796_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=9698" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=31667&amp;repquote=359796&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 359796)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_13"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid359807" summary="pid359807" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10135" target="_blank" id="userinfo359807" class="dropmenu" onmouseover="showMenu(this.id)">偶佯疯</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">我是个读书人</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10135">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10135&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_14" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum359807" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=31667&page=1#pid359807', '话题链接已经复制到剪贴板')">15楼</strong>
													<em onclick="$('postmessage_359807').className='t_bigfont'">大</em>							<em onclick="$('postmessage_359807').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_359807').className='t_smallfont'">小</em>												发表于 2009-12-7 14:40&nbsp;																					<a href="viewthread.php?tid=31667&amp;page=1&amp;authorid=10135" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_14"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_14"></div><div id="ad_thread4_14"></div>
						
						
																											<div id="postmessage_359807" class="t_msgfont">哈哈，成功翻过</div>

							
							
							
							
															<div id="post_rate_div_359807"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo359807_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://izlf.info" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=10135" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=31667&amp;repquote=359807&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 359807)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_14"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid359809" summary="pid359809" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10071" target="_blank" id="userinfo359809" class="dropmenu" onmouseover="showMenu(this.id)">open5235</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10071">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10071&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_15" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum359809" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=31667&page=1#pid359809', '话题链接已经复制到剪贴板')">16楼</strong>
													<em onclick="$('postmessage_359809').className='t_bigfont'">大</em>							<em onclick="$('postmessage_359809').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_359809').className='t_smallfont'">小</em>												发表于 2009-12-7 14:41&nbsp;																					<a href="viewthread.php?tid=31667&amp;page=1&amp;authorid=10071" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_15"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_15"></div><div id="ad_thread4_15"></div>
						
						
																											<div id="postmessage_359809" class="t_msgfont">收藏先，再来看</div>

							
							
							
							
															<div id="post_rate_div_359809"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo359809_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=10071" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=31667&amp;repquote=359809&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 359809)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_15"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid359814" summary="pid359814" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=9611" target="_blank" id="userinfo359814" class="dropmenu" onmouseover="showMenu(this.id)">ericrazy</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">民工丙</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=9611">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=9611&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_16" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum359814" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=31667&page=1#pid359814', '话题链接已经复制到剪贴板')">17楼</strong>
													<em onclick="$('postmessage_359814').className='t_bigfont'">大</em>							<em onclick="$('postmessage_359814').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_359814').className='t_smallfont'">小</em>												发表于 2009-12-7 14:42&nbsp;																					<a href="viewthread.php?tid=31667&amp;page=1&amp;authorid=9611" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_16"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_16"></div><div id="ad_thread4_16"></div>
						
						
																											<div id="postmessage_359814" class="t_msgfont">正在试验中</div>

							
							
							
							
															<div id="post_rate_div_359814"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo359814_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=9611" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=31667&amp;repquote=359814&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 359814)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_16"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid359832" summary="pid359832" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10100" target="_blank" id="userinfo359832" class="dropmenu" onmouseover="showMenu(this.id)">Dean_H</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">火星人</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10100">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10100&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_17" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum359832" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=31667&page=1#pid359832', '话题链接已经复制到剪贴板')">18楼</strong>
													<em onclick="$('postmessage_359832').className='t_bigfont'">大</em>							<em onclick="$('postmessage_359832').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_359832').className='t_smallfont'">小</em>												发表于 2009-12-7 14:48&nbsp;																					<a href="viewthread.php?tid=31667&amp;page=1&amp;authorid=10100" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_17"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_17"></div><div id="ad_thread4_17"></div>
						
						
																											<div id="postmessage_359832" class="t_msgfont">这就去自己的空间试试。</div>

							
							
							
							
															<div id="post_rate_div_359832"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo359832_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=10100" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=31667&amp;repquote=359832&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 359832)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_17"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid359843" summary="pid359843" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=4344" target="_blank" id="userinfo359843" class="dropmenu" onmouseover="showMenu(this.id)">穆木</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=4344">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=4344&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_18" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum359843" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=31667&page=1#pid359843', '话题链接已经复制到剪贴板')">19楼</strong>
													<em onclick="$('postmessage_359843').className='t_bigfont'">大</em>							<em onclick="$('postmessage_359843').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_359843').className='t_smallfont'">小</em>												发表于 2009-12-7 14:51&nbsp;																					<a href="viewthread.php?tid=31667&amp;page=1&amp;authorid=4344" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_18"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_18"></div><div id="ad_thread4_18"></div>
						
						
																											<div id="postmessage_359843" class="t_msgfont">好，学习一下，马上实践。</div>

							
							
							
							
															<div id="post_rate_div_359843"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo359843_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=4344" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=31667&amp;repquote=359843&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 359843)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_18"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid359851" summary="pid359851" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6149" target="_blank" id="userinfo359851" class="dropmenu" onmouseover="showMenu(this.id)">ilili</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">该用户已被删除</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6149">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6149&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_19" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum359851" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=31667&page=1#pid359851', '话题链接已经复制到剪贴板')">20楼</strong>
													<em onclick="$('postmessage_359851').className='t_bigfont'">大</em>							<em onclick="$('postmessage_359851').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_359851').className='t_smallfont'">小</em>												发表于 2009-12-7 14:55&nbsp;																					<a href="viewthread.php?tid=31667&amp;page=1&amp;authorid=6149" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_19"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_19"></div><div id="ad_thread4_19"></div>
						
						
																											<div id="postmessage_359851" class="t_msgfont">已經用上了,很好用,可以忘了輪子那些軟體了</div>

							
							
							
							
															<div id="post_rate_div_359851"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo359851_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=6149" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=31667&amp;repquote=359851&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 359851)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_19"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid359856" summary="pid359856" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10356" target="_blank" id="userinfo359856" class="dropmenu" onmouseover="showMenu(this.id)">iwanderer</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">leslie</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10356">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10356&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_20" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum359856" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=31667&page=1#pid359856', '话题链接已经复制到剪贴板')">21楼</strong>
													<em onclick="$('postmessage_359856').className='t_bigfont'">大</em>							<em onclick="$('postmessage_359856').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_359856').className='t_smallfont'">小</em>												发表于 2009-12-7 14:56&nbsp;																					<a href="viewthread.php?tid=31667&amp;page=1&amp;authorid=10356" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_20"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_20"></div><div id="ad_thread4_20"></div>
						
						
																											<div id="postmessage_359856" class="t_msgfont">两个注册连接还有效吗？我这怎么都404NOT FOUND了</div>

							
							
							
							
															<div id="post_rate_div_359856"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo359856_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=10356" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=31667&amp;repquote=359856&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 359856)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_20"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid359867" summary="pid359867" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=9471" target="_blank" id="userinfo359867" class="dropmenu" onmouseover="showMenu(this.id)">heran168</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=9471">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=9471&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_21" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum359867" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=31667&page=1#pid359867', '话题链接已经复制到剪贴板')">22楼</strong>
													<em onclick="$('postmessage_359867').className='t_bigfont'">大</em>							<em onclick="$('postmessage_359867').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_359867').className='t_smallfont'">小</em>												发表于 2009-12-7 14:59&nbsp;																					<a href="viewthread.php?tid=31667&amp;page=1&amp;authorid=9471" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_21"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_21"></div><div id="ad_thread4_21"></div>
													<h2>回复 14楼 psuidt 的话题</h2>
						
						
																											<div id="postmessage_359867" class="t_msgfont">不知道怎么登陆cPanel后台，没有找到Shared Ip Addres。请哪位师兄指点。</div>

							
							
							
							
															<div id="post_rate_div_359867"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo359867_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=9471" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=31667&amp;repquote=359867&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 359867)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_21"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid359882" summary="pid359882" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=9611" target="_blank" id="userinfo359882" class="dropmenu" onmouseover="showMenu(this.id)">ericrazy</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">民工丙</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=9611">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=9611&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_22" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum359882" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=31667&page=1#pid359882', '话题链接已经复制到剪贴板')">23楼</strong>
													<em onclick="$('postmessage_359882').className='t_bigfont'">大</em>							<em onclick="$('postmessage_359882').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_359882').className='t_smallfont'">小</em>												发表于 2009-12-7 15:06&nbsp;																					<a href="viewthread.php?tid=31667&amp;page=1&amp;authorid=9611" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_22"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_22"></div><div id="ad_thread4_22"></div>
						
						
																											<div id="postmessage_359882" class="t_msgfont">试了几个注册到后面都是要钱的啊？&nbsp;&nbsp;还是我英语太烂了 找错地方了</div>

							
							
							
							
															<div id="post_rate_div_359882"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo359882_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=9611" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=31667&amp;repquote=359882&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 359882)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_22"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid359887" summary="pid359887" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1960" target="_blank" id="userinfo359887" class="dropmenu" onmouseover="showMenu(this.id)">库存袈裟</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">@bruceku 想象力比知识更重要。</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1960">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1960&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_23" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum359887" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=31667&page=1#pid359887', '话题链接已经复制到剪贴板')">24楼</strong>
													<em onclick="$('postmessage_359887').className='t_bigfont'">大</em>							<em onclick="$('postmessage_359887').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_359887').className='t_smallfont'">小</em>												发表于 2009-12-7 15:10&nbsp;																					<a href="viewthread.php?tid=31667&amp;page=1&amp;authorid=1960" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_23"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_23"></div><div id="ad_thread4_23"></div>
						
						
																											<div id="postmessage_359887" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>ericrazy</i> 于 2009-12-7 15:06 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=359882&amp;ptid=30176" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
试了几个注册到后面都是要钱的啊？&nbsp;&nbsp;还是我英语太烂了 找错地方了 </blockquote></div><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>iwanderer</i> 于 2009-12-7 14:56 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=359856&amp;ptid=30176" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
两个注册连接还有效吗？我这怎么都404NOT FOUND了 </blockquote></div>试试这个<br />
<a href="http://hostaider.com/tht/order/" target="_blank">http://hostaider.com/tht/order/</a></div>

							
							
							
							
															<div id="post_rate_div_359887"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo359887_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1960" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=31667&amp;repquote=359887&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 359887)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_23"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid359893" summary="pid359893" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10241" target="_blank" id="userinfo359893" class="dropmenu" onmouseover="showMenu(this.id)">orange0422</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">orange0422</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10241">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10241&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_24" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum359893" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=31667&page=1#pid359893', '话题链接已经复制到剪贴板')">25楼</strong>
													<em onclick="$('postmessage_359893').className='t_bigfont'">大</em>							<em onclick="$('postmessage_359893').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_359893').className='t_smallfont'">小</em>												发表于 2009-12-7 15:12&nbsp;																					<a href="viewthread.php?tid=31667&amp;page=1&amp;authorid=10241" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_24"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_24"></div><div id="ad_thread4_24"></div>
						
						
																											<div id="postmessage_359893" class="t_msgfont">我两个带cPanel功能的国外空间0fees.net和byteact.com。可是都找不到Shared Ip Address在哪，楼主能不能放两张截图</div>

							
							
							
							
															<div id="post_rate_div_359893"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo359893_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://www.orange0422.com" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=10241" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=31667&amp;repquote=359893&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 359893)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_24"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid359897" summary="pid359897" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8716" target="_blank" id="userinfo359897" class="dropmenu" onmouseover="showMenu(this.id)">木羊犬</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8716">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8716&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_25" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum359897" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=31667&page=1#pid359897', '话题链接已经复制到剪贴板')">26楼</strong>
													<em onclick="$('postmessage_359897').className='t_bigfont'">大</em>							<em onclick="$('postmessage_359897').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_359897').className='t_smallfont'">小</em>												发表于 2009-12-7 15:13&nbsp;																					<a href="viewthread.php?tid=31667&amp;page=1&amp;authorid=8716" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_25"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_25"></div><div id="ad_thread4_25"></div>
						
						
																											<div id="postmessage_359897" class="t_msgfont">在byethost.com 注册的，可是登入<a href="http://cpanel.byethost14.com" target="_blank">http://cpanel.byethost14.com</a>后在control panel下没有看见Shared Ip Address这个选项，有成功的提点下啊，最好有图解，看的明明白白。</div>

							
							
							
							
															<div id="post_rate_div_359897"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo359897_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=8716" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=31667&amp;repquote=359897&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 359897)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_25"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid359902" summary="pid359902" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1960" target="_blank" id="userinfo359902" class="dropmenu" onmouseover="showMenu(this.id)">库存袈裟</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">@bruceku 想象力比知识更重要。</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1960">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1960&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_26" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum359902" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=31667&page=1#pid359902', '话题链接已经复制到剪贴板')">27楼</strong>
													<em onclick="$('postmessage_359902').className='t_bigfont'">大</em>							<em onclick="$('postmessage_359902').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_359902').className='t_smallfont'">小</em>												发表于 2009-12-7 15:14&nbsp;																					<a href="viewthread.php?tid=31667&amp;page=1&amp;authorid=1960" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_26"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_26"></div><div id="ad_thread4_26"></div>
													<h2>回复 26楼 木羊犬 的话题</h2>
						
						
																											<div id="postmessage_359902" class="t_msgfont">byethost是vista panel<br />
经常会有鸡贼的主机商拿免费的vista panel写成control panel企图冒充cPanel，鱼目混珠。</div>

							
							
							
							
															<div id="post_rate_div_359902"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo359902_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1960" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=31667&amp;repquote=359902&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 359902)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_26"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid359903" summary="pid359903" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10356" target="_blank" id="userinfo359903" class="dropmenu" onmouseover="showMenu(this.id)">iwanderer</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">leslie</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10356">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10356&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_27" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum359903" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=31667&page=1#pid359903', '话题链接已经复制到剪贴板')">28楼</strong>
													<em onclick="$('postmessage_359903').className='t_bigfont'">大</em>							<em onclick="$('postmessage_359903').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_359903').className='t_smallfont'">小</em>												发表于 2009-12-7 15:15&nbsp;																					<a href="viewthread.php?tid=31667&amp;page=1&amp;authorid=10356" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_27"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_27"></div><div id="ad_thread4_27"></div>
						
						
																											<div id="postmessage_359903" class="t_msgfont">还是不行。。<br />
看来是我这里电信的问题了。。</div>

							
							
							
							
															<div id="post_rate_div_359903"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo359903_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=10356" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=31667&amp;repquote=359903&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 359903)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_27"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid359912" summary="pid359912" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1960" target="_blank" id="userinfo359912" class="dropmenu" onmouseover="showMenu(this.id)">库存袈裟</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">@bruceku 想象力比知识更重要。</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1960">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1960&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_28" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum359912" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=31667&page=1#pid359912', '话题链接已经复制到剪贴板')">29楼</strong>
													<em onclick="$('postmessage_359912').className='t_bigfont'">大</em>							<em onclick="$('postmessage_359912').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_359912').className='t_smallfont'">小</em>												发表于 2009-12-7 15:20&nbsp;																					<a href="viewthread.php?tid=31667&amp;page=1&amp;authorid=1960" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_28"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_28"></div><div id="ad_thread4_28"></div>
													<h2>找不到 cPanel免费空间？来这里</h2>
						
						
																											<div id="postmessage_359912" class="t_msgfont"><a href="http://www.freewebhostingtalk.com/forumdisplay.php?f=3" target="_blank">http://www.freewebhostingtalk.com/forumdisplay.php?f=3</a><br />
<br />
<a href="http://www.freewebspace.net/forums/forumdisplay.php?f=32" target="_blank">http://www.freewebspace.net/forums/forumdisplay.php?f=32</a><br />
<br />
<a href="http://www.hostbidder.com/forumdisplay.php?&amp;f=14" target="_blank">http://www.hostbidder.com/forumdisplay.php?&amp;f=14</a><br />
<br />
技巧：<br />
1. 确认是cPanel空间，control panel 不等于cPanel<br />
2. 无视post2host<br />
3. 不要在乎空间与流量，SSH流量很少会被记入总流量<br />
4. 节省资源每个免费空间最多申请一个可用的，留点子弹给别人</div>

							
							
							
							
															<div id="post_rate_div_359912"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo359912_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1960" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=31667&amp;repquote=359912&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 359912)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_28"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid359948" summary="pid359948" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10241" target="_blank" id="userinfo359948" class="dropmenu" onmouseover="showMenu(this.id)">orange0422</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">orange0422</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10241">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10241&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_29" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum359948" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=31667&page=1#pid359948', '话题链接已经复制到剪贴板')">30楼</strong>
													<em onclick="$('postmessage_359948').className='t_bigfont'">大</em>							<em onclick="$('postmessage_359948').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_359948').className='t_smallfont'">小</em>												发表于 2009-12-7 15:31&nbsp;																					<a href="viewthread.php?tid=31667&amp;page=1&amp;authorid=10241" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_29"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_29"></div><div id="ad_thread4_29"></div>
													<h2>回复 27楼 库存袈裟 的话题</h2>
						
						
																											<div id="postmessage_359948" class="t_msgfont">果然我那两个都是vistapanel...在<a href="http://hostaider.com/tht/order/" target="_blank">http://hostaider.com/tht/order/</a>成功了，可翻墙，速度50K/s左右，目前用puff能有200K/S，这个作为备用翻墙手段...感谢楼主</div>

							
							
							
							
															<div id="post_rate_div_359948"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo359948_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://www.orange0422.com" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=10241" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=31667&amp;repquote=359948&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 359948)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_29"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid359975" summary="pid359975" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2508" target="_blank" id="userinfo359975" class="dropmenu" onmouseover="showMenu(this.id)">yuishy</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">保尔</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2508">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2508&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_30" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum359975" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=31667&page=1#pid359975', '话题链接已经复制到剪贴板')">31楼</strong>
													<em onclick="$('postmessage_359975').className='t_bigfont'">大</em>							<em onclick="$('postmessage_359975').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_359975').className='t_smallfont'">小</em>												发表于 2009-12-7 15:45&nbsp;																					<a href="viewthread.php?tid=31667&amp;page=1&amp;authorid=2508" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_30"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_30"></div><div id="ad_thread4_30"></div>
													<h2>回复 24楼 库存袈裟 的话题</h2>
						
						
																											<div id="postmessage_359975" class="t_msgfont">得到了IP地址和SFTP端口，怎么使用<br />
ssh -qTfnN -D 7070 <a href="mailto:username@sshserver.com">username@sshserver.com</a><br />
这类命令呢？</div>

							
							
							
							
															<div id="post_rate_div_359975"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo359975_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://yuishy.com" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=2508" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=31667&amp;repquote=359975&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 359975)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_30"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid359985" summary="pid359985" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10070" target="_blank" id="userinfo359985" class="dropmenu" onmouseover="showMenu(this.id)">bressanon84</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10070">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10070&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_31" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum359985" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=31667&page=1#pid359985', '话题链接已经复制到剪贴板')">32楼</strong>
													<em onclick="$('postmessage_359985').className='t_bigfont'">大</em>							<em onclick="$('postmessage_359985').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_359985').className='t_smallfont'">小</em>												发表于 2009-12-7 15:47&nbsp;																					<a href="viewthread.php?tid=31667&amp;page=1&amp;authorid=10070" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_31"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_31"></div><div id="ad_thread4_31"></div>
						
						
																											<div id="postmessage_359985" class="t_msgfont">不错不错，收藏之</div>

							
							
							
							
															<div id="post_rate_div_359985"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo359985_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=10070" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=31667&amp;repquote=359985&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 359985)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_31"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid360002" summary="pid360002" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1960" target="_blank" id="userinfo360002" class="dropmenu" onmouseover="showMenu(this.id)">库存袈裟</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">@bruceku 想象力比知识更重要。</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1960">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1960&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_32" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum360002" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=31667&page=1#pid360002', '话题链接已经复制到剪贴板')">33楼</strong>
													<em onclick="$('postmessage_360002').className='t_bigfont'">大</em>							<em onclick="$('postmessage_360002').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_360002').className='t_smallfont'">小</em>												发表于 2009-12-7 15:54&nbsp;																					<a href="viewthread.php?tid=31667&amp;page=1&amp;authorid=1960" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_32"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_32"></div><div id="ad_thread4_32"></div>
						
						
																											<div id="postmessage_360002" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>yuishy</i> 于 2009-12-7 15:45 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=359975&amp;ptid=30176" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
得到了IP地址和SFTP端口，怎么使用<br />
ssh -qTfnN -D 7070 <a href="mailto:username@sshserver.com">username@sshserver.com</a><br />
这类命令呢？ </blockquote></div><a href="https://dl.getdropbox.com/u/873345/howto/windows+firefox.html" target="_blank">https://dl.getdropbox.com/u/873345/howto/windows+firefox.html</a></div>

							
							
							
							
															<div id="post_rate_div_360002"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo360002_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1960" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=31667&amp;repquote=360002&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 360002)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_32"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid360013" summary="pid360013" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10241" target="_blank" id="userinfo360013" class="dropmenu" onmouseover="showMenu(this.id)">orange0422</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">orange0422</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10241">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10241&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_33" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum360013" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=31667&page=1#pid360013', '话题链接已经复制到剪贴板')">34楼</strong>
													<em onclick="$('postmessage_360013').className='t_bigfont'">大</em>							<em onclick="$('postmessage_360013').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_360013').className='t_smallfont'">小</em>												发表于 2009-12-7 15:59&nbsp;																					<a href="viewthread.php?tid=31667&amp;page=1&amp;authorid=10241" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_33"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_33"></div><div id="ad_thread4_33"></div>
						
						
																											<div id="postmessage_360013" class="t_msgfont">另外请问楼主如何能把网页架设到dropbox的空间上？</div>

							
							
							
							
															<div id="post_rate_div_360013"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo360013_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://www.orange0422.com" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=10241" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=31667&amp;repquote=360013&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 360013)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_33"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid360031" summary="pid360031" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1809" target="_blank" id="userinfo360031" class="dropmenu" onmouseover="showMenu(this.id)">srainlx</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1809">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1809&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_34" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum360031" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=31667&page=1#pid360031', '话题链接已经复制到剪贴板')">35楼</strong>
													<em onclick="$('postmessage_360031').className='t_bigfont'">大</em>							<em onclick="$('postmessage_360031').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_360031').className='t_smallfont'">小</em>												发表于 2009-12-7 16:04&nbsp;																					<a href="viewthread.php?tid=31667&amp;page=1&amp;authorid=1809" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_34"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_34"></div><div id="ad_thread4_34"></div>
						
						
																											<div id="postmessage_360031" class="t_msgfont">这应该属于人民战争的范畴了吧，嘿嘿 MARK一个！</div>

							
							
							
							
															<div id="post_rate_div_360031"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo360031_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1809" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=31667&amp;repquote=360031&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 360031)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_34"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid360043" summary="pid360043" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8440" target="_blank" id="userinfo360043" class="dropmenu" onmouseover="showMenu(this.id)">kidywd</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8440">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8440&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_35" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum360043" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=31667&page=1#pid360043', '话题链接已经复制到剪贴板')">36楼</strong>
													<em onclick="$('postmessage_360043').className='t_bigfont'">大</em>							<em onclick="$('postmessage_360043').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_360043').className='t_smallfont'">小</em>												发表于 2009-12-7 16:11&nbsp;																					<a href="viewthread.php?tid=31667&amp;page=1&amp;authorid=8440" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_35"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_35"></div><div id="ad_thread4_35"></div>
						
						
																											<div id="postmessage_360043" class="t_msgfont">奇怪,我注册登录后,在左侧，没有找到Shared Ip Addres</div>

							
							
							
							
															<div id="post_rate_div_360043"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo360043_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=8440" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=31667&amp;repquote=360043&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 360043)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_35"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid360063" summary="pid360063" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2941" target="_blank" id="userinfo360063" class="dropmenu" onmouseover="showMenu(this.id)">鞋带么</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">谦谦君子 温润如玉 我TMD 还需努力</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2941">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2941&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_36" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum360063" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=31667&page=1#pid360063', '话题链接已经复制到剪贴板')">37楼</strong>
													<em onclick="$('postmessage_360063').className='t_bigfont'">大</em>							<em onclick="$('postmessage_360063').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_360063').className='t_smallfont'">小</em>												发表于 2009-12-7 16:24&nbsp;																					<a href="viewthread.php?tid=31667&amp;page=1&amp;authorid=2941" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_36"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_36"></div><div id="ad_thread4_36"></div>
						
						
																											<div id="postmessage_360063" class="t_msgfont">记号，收藏备用。</div>

							
							
							
							
															<div id="post_rate_div_360063"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo360063_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=2941" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=31667&amp;repquote=360063&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 360063)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_36"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid360070" summary="pid360070" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10299" target="_blank" id="userinfo360070" class="dropmenu" onmouseover="showMenu(this.id)">chenshu</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10299">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10299&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_37" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum360070" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=31667&page=1#pid360070', '话题链接已经复制到剪贴板')">38楼</strong>
													<em onclick="$('postmessage_360070').className='t_bigfont'">大</em>							<em onclick="$('postmessage_360070').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_360070').className='t_smallfont'">小</em>												发表于 2009-12-7 16:28&nbsp;																					<a href="viewthread.php?tid=31667&amp;page=1&amp;authorid=10299" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_37"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_37"></div><div id="ad_thread4_37"></div>
						
						
																											<div id="postmessage_360070" class="t_msgfont">收啊<br />
<br />
回去再试</div>

							
							
							
							
															<div id="post_rate_div_360070"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo360070_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=10299" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=31667&amp;repquote=360070&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 360070)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_37"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid360075" summary="pid360075" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=9611" target="_blank" id="userinfo360075" class="dropmenu" onmouseover="showMenu(this.id)">ericrazy</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">民工丙</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=9611">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=9611&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_38" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum360075" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=31667&page=1#pid360075', '话题链接已经复制到剪贴板')">39楼</strong>
													<em onclick="$('postmessage_360075').className='t_bigfont'">大</em>							<em onclick="$('postmessage_360075').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_360075').className='t_smallfont'">小</em>												发表于 2009-12-7 16:31&nbsp;																					<a href="viewthread.php?tid=31667&amp;page=1&amp;authorid=9611" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_38"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_38"></div><div id="ad_thread4_38"></div>
													<h2>回复 30楼 orange0422 的话题</h2>
						
						
																											<div id="postmessage_360075" class="t_msgfont">现在用上puff了 谢谢orange0422</div>

							
							
							
							
															<div id="post_rate_div_360075"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo360075_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=9611" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=31667&amp;repquote=360075&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 360075)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_38"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid360095" summary="pid360095" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1960" target="_blank" id="userinfo360095" class="dropmenu" onmouseover="showMenu(this.id)">库存袈裟</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">@bruceku 想象力比知识更重要。</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1960">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1960&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_39" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum360095" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=31667&page=1#pid360095', '话题链接已经复制到剪贴板')">40楼</strong>
													<em onclick="$('postmessage_360095').className='t_bigfont'">大</em>							<em onclick="$('postmessage_360095').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_360095').className='t_smallfont'">小</em>												发表于 2009-12-7 16:42&nbsp;																					<a href="viewthread.php?tid=31667&amp;page=1&amp;authorid=1960" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_39"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_39"></div><div id="ad_thread4_39"></div>
						
						
																											<div id="postmessage_360095" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>psuidt</i> 于 2009-12-7 14:37 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=359796&amp;ptid=30176" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
奇怪,我注册登录后,在左侧，没有找到Shared Ip Addres </blockquote></div><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>kidywd</i> 于 2009-12-7 16:11 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=360043&amp;ptid=30176" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
奇怪,我注册登录后,在左侧，没有找到Shared Ip Addres </blockquote></div><a href="http://www.freewebspace.net/free/AdvSearchR/1/22" target="_blank">http://www.freewebspace.net/free/AdvSearchR/1/22</a>&nbsp;&nbsp;和 <a href="http://www.free-webhosts.com/search-webhosts.php?SA=cPanel" target="_blank">http://www.free-webhosts.com/search-webhosts.php?SA=cPanel</a> <br />
为免费空间资讯网站并不提供免费空间，请在这两处寻找合适的空间并前往注册、申请。</div>

							
							
							
							
															<div id="post_rate_div_360095"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo360095_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1960" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=31667&amp;repquote=360095&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 360095)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_39"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid360104" summary="pid360104" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1960" target="_blank" id="userinfo360104" class="dropmenu" onmouseover="showMenu(this.id)">库存袈裟</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">@bruceku 想象力比知识更重要。</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1960">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1960&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_40" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum360104" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=31667&page=1#pid360104', '话题链接已经复制到剪贴板')">41楼</strong>
													<em onclick="$('postmessage_360104').className='t_bigfont'">大</em>							<em onclick="$('postmessage_360104').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_360104').className='t_smallfont'">小</em>												发表于 2009-12-7 16:44&nbsp;																					<a href="viewthread.php?tid=31667&amp;page=1&amp;authorid=1960" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_40"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_40"></div><div id="ad_thread4_40"></div>
						
						
																											<div id="postmessage_360104" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>orange0422</i> 于 2009-12-7 15:59 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=360013&amp;ptid=30176" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
另外请问楼主如何能把网页架设到dropbox的空间上？ </blockquote></div>将网页文件存储至Public文件夹即可。</div>

							
							
							
							
															<div id="post_rate_div_360104"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo360104_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1960" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=31667&amp;repquote=360104&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 360104)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_40"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid360139" summary="pid360139" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2274" target="_blank" id="userinfo360139" class="dropmenu" onmouseover="showMenu(this.id)">主席下一小兵</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">https://twitter.com/yixiaobing</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2274">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2274&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_41" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum360139" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=31667&page=1#pid360139', '话题链接已经复制到剪贴板')">42楼</strong>
													<em onclick="$('postmessage_360139').className='t_bigfont'">大</em>							<em onclick="$('postmessage_360139').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_360139').className='t_smallfont'">小</em>												发表于 2009-12-7 17:04&nbsp;																					<a href="viewthread.php?tid=31667&amp;page=1&amp;authorid=2274" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_41"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_41"></div><div id="ad_thread4_41"></div>
						
						
																											<div id="postmessage_360139" class="t_msgfont">我没有摸出来怎么用，主要是前面的注册账号和获取ip没有搞出来。教程对没有用过SSH的人来说有点太简化了，建议搞个详细一点的帖子。</div>

							
							
							
							
															<div id="post_rate_div_360139"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo360139_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://twitter.com/yixiaobing" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=2274" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=31667&amp;repquote=360139&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 360139)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_41"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid360142" summary="pid360142" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2274" target="_blank" id="userinfo360142" class="dropmenu" onmouseover="showMenu(this.id)">主席下一小兵</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">https://twitter.com/yixiaobing</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2274">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2274&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_42" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum360142" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=31667&page=1#pid360142', '话题链接已经复制到剪贴板')">43楼</strong>
													<em onclick="$('postmessage_360142').className='t_bigfont'">大</em>							<em onclick="$('postmessage_360142').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_360142').className='t_smallfont'">小</em>												发表于 2009-12-7 17:05&nbsp;																					<a href="viewthread.php?tid=31667&amp;page=1&amp;authorid=2274" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_42"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_42"></div><div id="ad_thread4_42"></div>
						
						
																											<div id="postmessage_360142" class="t_msgfont">恩，还有后面的上传空间什么的，对于没干过这些的人来说有点困难，最好有个示意图。</div>

							
							
							
							
															<div id="post_rate_div_360142"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo360142_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://twitter.com/yixiaobing" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=2274" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=31667&amp;repquote=360142&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 360142)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_42"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid360190" summary="pid360190" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8396" target="_blank" id="userinfo360190" class="dropmenu" onmouseover="showMenu(this.id)">youttiao</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">微博PM</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8396">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8396&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_43" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum360190" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=31667&page=1#pid360190', '话题链接已经复制到剪贴板')">44楼</strong>
													<em onclick="$('postmessage_360190').className='t_bigfont'">大</em>							<em onclick="$('postmessage_360190').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_360190').className='t_smallfont'">小</em>												发表于 2009-12-7 17:36&nbsp;																					<a href="viewthread.php?tid=31667&amp;page=1&amp;authorid=8396" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_43"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_43"></div><div id="ad_thread4_43"></div>
						
						
																											<div id="postmessage_360190" class="t_msgfont">hostaider经常掉线啊，不知道怎么回事</div>

							
							
							
							
															<div id="post_rate_div_360190"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo360190_menu" style="display: none;">
										<div class="imicons">
													<a target='_blank' href='http://settings.messenger.live.com/Conversation/IMMe.aspx?invitee=youtiao.5@gmail.com&mkt=zh-cn'><img style='border-style: none;' src='http://messenger.services.live.com/users/youtiao.5@gmail.com/presenceimage?mkt=zh-cn' width='16' height='16' /></a>
												<a href="http://wpa.qq.com/msgrd?V=1&amp;Uin=344408183&amp;Site=1984bbs.com&amp;Menu=yes" target="_blank"><img src="images/default/qq.gif" alt="QQ" /></a>												<a href="http://edit.yahoo.com/config/send_webmesg?.target=youtiao_5@yahoo.com&amp;.src=pg" target="_blank"><img src="images/default/yahoo.gif" alt="Yahoo!"  /></a>						<script type="text/javascript">document.write('<a target="_blank" href="http://amos1.taobao.com/msg.ww?v=2&amp;uid='+encodeURIComponent('countermars')+'&amp;s=2"><img src="images/default/taobao.gif" alt="阿里旺旺" /></a>');</script>					</div>
										<dl></dl>
										<p><a href="space.php?uid=8396" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=31667&amp;repquote=360190&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 360190)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_43"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid360199" summary="pid360199" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=464" target="_blank" id="userinfo360199" class="dropmenu" onmouseover="showMenu(this.id)">Phillip</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">路边社特邀围观群众</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=464">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=464&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_44" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum360199" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=31667&page=1#pid360199', '话题链接已经复制到剪贴板')">45楼</strong>
													<em onclick="$('postmessage_360199').className='t_bigfont'">大</em>							<em onclick="$('postmessage_360199').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_360199').className='t_smallfont'">小</em>												发表于 2009-12-7 17:42&nbsp;																					<a href="viewthread.php?tid=31667&amp;page=1&amp;authorid=464" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_44"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_44"></div><div id="ad_thread4_44"></div>
													<h2>回复 40楼 库存袈裟 的话题</h2>
						
						
																											<div id="postmessage_360199" class="t_msgfont">我在hostaider 注冊了, 但為啥2082端口登錄進不去? 用戶名密碼都正確. 是不是被墻了?<br />
我去掉端口直接輸入地址, 是一片空白, 但翻墻可以看到默認示例的Index頁面. 如果這樣的話是不是不能用這個翻墻了?</div>

							
							
							
							
															<div id="post_rate_div_360199"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo360199_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=464" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=31667&amp;repquote=360199&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 360199)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_44"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid360218" summary="pid360218" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=464" target="_blank" id="userinfo360218" class="dropmenu" onmouseover="showMenu(this.id)">Phillip</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">路边社特邀围观群众</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=464">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=464&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_45" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum360218" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=31667&page=1#pid360218', '话题链接已经复制到剪贴板')">46楼</strong>
													<em onclick="$('postmessage_360218').className='t_bigfont'">大</em>							<em onclick="$('postmessage_360218').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_360218').className='t_smallfont'">小</em>												发表于 2009-12-7 17:56&nbsp;																					<a href="viewthread.php?tid=31667&amp;page=1&amp;authorid=464" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_45"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_45"></div><div id="ad_thread4_45"></div>
													<h2>回复 44楼 youttiao 的话题</h2>
						
						
																											<div id="postmessage_360218" class="t_msgfont">你能登錄你的cpanel嗎?　我的一直登陸不了</div>

							
							
							
							
															<div id="post_rate_div_360218"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo360218_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=464" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=31667&amp;repquote=360218&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 360218)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_45"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid360330" summary="pid360330" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8198" target="_blank" id="userinfo360330" class="dropmenu" onmouseover="showMenu(this.id)">farfatfay</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8198">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8198&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_46" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum360330" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=31667&page=1#pid360330', '话题链接已经复制到剪贴板')">47楼</strong>
													<em onclick="$('postmessage_360330').className='t_bigfont'">大</em>							<em onclick="$('postmessage_360330').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_360330').className='t_smallfont'">小</em>												发表于 2009-12-7 19:24&nbsp;																					<a href="viewthread.php?tid=31667&amp;page=1&amp;authorid=8198" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_46"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_46"></div><div id="ad_thread4_46"></div>
						
						
																											<div id="postmessage_360330" class="t_msgfont">我用的hostaider的那个,myentunnel小锁已经绿色了,按照win+firefox那篇设置的,还是没法翻墙,不知是什么原因?</div>

							
							
							
							
															<div id="post_rate_div_360330"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo360330_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=8198" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=31667&amp;repquote=360330&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 360330)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_46"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid360336" summary="pid360336" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=3871" target="_blank" id="userinfo360336" class="dropmenu" onmouseover="showMenu(this.id)">wodeid</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=3871">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=3871&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_47" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum360336" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=31667&page=1#pid360336', '话题链接已经复制到剪贴板')">48楼</strong>
													<em onclick="$('postmessage_360336').className='t_bigfont'">大</em>							<em onclick="$('postmessage_360336').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_360336').className='t_smallfont'">小</em>												发表于 2009-12-7 19:30&nbsp;																					<a href="viewthread.php?tid=31667&amp;page=1&amp;authorid=3871" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_47"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_47"></div><div id="ad_thread4_47"></div>
						
						
																											<div id="postmessage_360336" class="t_msgfont">非常感谢</div>

							
							
							
							
															<div id="post_rate_div_360336"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo360336_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=3871" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=31667&amp;repquote=360336&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 360336)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_47"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid360355" summary="pid360355" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10215" target="_blank" id="userinfo360355" class="dropmenu" onmouseover="showMenu(this.id)">uinstriv</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10215">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10215&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_48" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum360355" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=31667&page=1#pid360355', '话题链接已经复制到剪贴板')">49楼</strong>
													<em onclick="$('postmessage_360355').className='t_bigfont'">大</em>							<em onclick="$('postmessage_360355').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_360355').className='t_smallfont'">小</em>												发表于 2009-12-7 19:44&nbsp;																					<a href="viewthread.php?tid=31667&amp;page=1&amp;authorid=10215" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_48"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_48"></div><div id="ad_thread4_48"></div>
						
						
																											<div id="postmessage_360355" class="t_msgfont">喜欢SSH</div>

							
							
							
							
															<div id="post_rate_div_360355"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo360355_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=10215" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=31667&amp;repquote=360355&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 360355)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_48"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid360482" summary="pid360482" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10319" target="_blank" id="userinfo360482" class="dropmenu" onmouseover="showMenu(this.id)">马蜂</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10319">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10319&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_49" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum360482" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=31667&page=1#pid360482', '话题链接已经复制到剪贴板')">50楼</strong>
													<em onclick="$('postmessage_360482').className='t_bigfont'">大</em>							<em onclick="$('postmessage_360482').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_360482').className='t_smallfont'">小</em>												发表于 2009-12-7 21:21&nbsp;																					<a href="viewthread.php?tid=31667&amp;page=1&amp;authorid=10319" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_49"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_49"></div><div id="ad_thread4_49"></div>
													<h2>两眼一抹黑～</h2>
						
						
																											<div id="postmessage_360482" class="t_msgfont">我对英文完全不懂，但是这么好的机会不趁机申请一个就会后悔莫及！<br />
有请技术控同学帮忙申请一个，顺便搭一个奶瓶腿，本人愿意用适当银钱作为酬谢。<br />
求好心人帮忙申请一个私人专用ssh，站内消息联系。<br />
<br />
这里有搭建奶瓶腿教程：<a href="http://zou.lu/diy-your-twitter-clients/" target="_blank">http://zou.lu/diy-your-twitter-clients/</a><br />
<br />
[<i> 本帖最后由 马蜂 于 2009-12-7 21:22 编辑 </i>]</div>

							
							
							
							
															<div id="post_rate_div_360482"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo360482_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=10319" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=31667&amp;repquote=360482&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 360482)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_49"></div>				</div>
			</td>
		</tr>
		</table>
		</div>
</form>





<div class="pages_btns">
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=31667&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=31667&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
	<div class="pages"><em>&nbsp;266&nbsp;</em><strong>1</strong><a href="viewthread.php?tid=31667&amp;extra=&amp;page=2">2</a><a href="viewthread.php?tid=31667&amp;extra=&amp;page=3">3</a><a href="viewthread.php?tid=31667&amp;extra=&amp;page=4">4</a><a href="viewthread.php?tid=31667&amp;extra=&amp;page=5">5</a><a href="viewthread.php?tid=31667&amp;extra=&amp;page=6">6</a><a href="viewthread.php?tid=31667&amp;extra=&amp;page=2" class="next">&rsaquo;&rsaquo;</a></div>			<span class="postbtn" id="newspecialtmp" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=31667&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

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

	<form method="post" id="postform" action="post.php?action=reply&amp;fid=26&amp;tid=31667&amp;extra=&amp;replysubmit=yes" onSubmit="return validate(this)">
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
var maxpage = 6;
if(maxpage > 1) {
	document.onkeyup = function(e){
		e = e ? e : window.event;
		var tagname = is_ie ? e.srcElement.tagName : e.target.tagName;
		if(tagname == 'INPUT' || tagname == 'TEXTAREA') return;
		actualCode = e.keyCode ? e.keyCode : e.charCode;
				if(actualCode == 39) {
			window.location = 'viewthread.php?tid=31667&page=2';
		}
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
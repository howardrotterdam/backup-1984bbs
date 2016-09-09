<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<title>自建墙内的推特第三方很简单 - 国家局域网研究所 -  1984bbs.com </title>
<meta name="keywords" content="" />
<meta name="MSSmartTagsPreventParsing" content="True" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<link rel="archives" title="1984bbs.com" href="https://1984bbs.com/archiver/" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_viewthread.css" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_common.css" />
<script type="text/javascript">
	var discuz_uid = 13019;var IMGDIR = 'images/default';var attackevasive = '0';var gid = 0;var STYLEID = '1';
	gid = parseInt('3');var fid = parseInt('26');var tid = parseInt('53619');
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
			<p><a href="index.php" id="forumlist" onmouseover="showMenu(this.id)" class="dropmenu">1984bbs.com</a> &raquo; <a href="forumdisplay.php?fid=26">国家局域网研究所</a> &raquo; 自建墙内的推特第三方很简单</p>
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
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=53619&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=53619&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
				<span class="postbtn" id="newspecial" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=53619&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

	<ul class="popupmenu_popup newspecialmenu" id="newspecial_menu" style="display: none">
		<li><a href="post.php?action=newthread&amp;fid=26&amp;extra=">发新话题</a></li>
		<li class="poll"><a href="post.php?action=newthread&amp;fid=26&amp;extra=&amp;special=1">发布投票</a></li>													</ul>

<form method="post" name="modactions">
	<input type="hidden" name="formhash" value="823c9fa2" />
	<div class="mainbox viewthread">
		<span class="headactions">
					<a href="my.php?item=favorites&amp;tid=53619" id="ajax_favorite" onclick="ajaxmenu(event, this.id, 3000, 0)">收藏</a>
			<a href="my.php?item=subscriptions&amp;subadd=53619" id="ajax_subscription" onclick="ajaxmenu(event, this.id, 3000, null, 0)">订阅</a>
			<a href="misc.php?action=emailfriend&amp;tid=53619" id="emailfriend" onclick="ajaxmenu(event, this.id, 9000000, null, 0)">推荐</a>
				<a href="viewthread.php?action=printable&amp;tid=53619" target="_blank" class="notabs">打印</a>
				</span>
		<h1>自建墙内的推特第三方很简单		</h1>
							<table id="pid753599" summary="pid753599" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7592" target="_blank" id="userinfo753599" class="dropmenu" onmouseover="showMenu(this.id)">雷曼兄弟</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">@trotrotro</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7592">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7592&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_0" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum753599" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=53619&page=1#pid753599', '话题链接已经复制到剪贴板')">1楼</strong>
													<em onclick="$('postmessage_753599').className='t_bigfont'">大</em>							<em onclick="$('postmessage_753599').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_753599').className='t_smallfont'">小</em>												发表于 2010-7-22 11:09&nbsp;																					<a href="viewthread.php?tid=53619&amp;page=1&amp;authorid=7592" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_0"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_0"></div><div id="ad_thread4_0"></div>
													<h2>自建墙内的推特第三方很简单</h2>
						
						
																											<div id="postmessage_753599" class="t_msgfont">昨天我用了一个下午加晚上的事情，从零开始，从理论到实践，成功搞掂了一个，至少现在不担心被墙，呵呵。基本上就是靠谷歌搜索办法。<br />
<br />
感谢国家！为了学习兲朝向周边国家输出核技术的国际主义精神，我现在也无偿分享推特第三方墙内建站技术，需要自建墙内推特第三方的可以找我，基本上一两个小时（取决于我的表达能力，你的学习能力、运气、网速）就能让你的手机和PC轻松墙内上推特。</div>

							
							
							
							
															<div id="post_rate_div_753599"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo753599_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=7592" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=53619&amp;repquote=753599&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 753599)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_0"></div>				</div>
			</td>
		</tr>
		</table>
		</div><div class="ad_column" id="ad_interthread"><a href="/viewthread.php?tid=54699" target="_blank" style="color:red;">1984bbs是一个非营利项目，它需要您的捐助！</font></a>		</div>
	<div class="mainbox viewthread">
			<table id="pid753817" summary="pid753817" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=4391" target="_blank" id="userinfo753817" class="dropmenu" onmouseover="showMenu(this.id)">杨东根</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=4391">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=4391&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_1" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum753817" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=53619&page=1#pid753817', '话题链接已经复制到剪贴板')">2楼</strong>
													<em onclick="$('postmessage_753817').className='t_bigfont'">大</em>							<em onclick="$('postmessage_753817').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_753817').className='t_smallfont'">小</em>												发表于 2010-7-22 12:45&nbsp;																					<a href="viewthread.php?tid=53619&amp;page=1&amp;authorid=4391" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_1"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_1"></div><div id="ad_thread4_1"></div>
													<h2>天才大佬啊  求赐教</h2>
						
						
																											<div id="postmessage_753817" class="t_msgfont">天才大佬啊&nbsp;&nbsp;求赐教&nbsp; &nbsp;<a href="mailto:lionel8521@gmail.com">lionel8521@gmail.com</a>&nbsp; &nbsp;在线</div>

							
							
							
							
															<div id="post_rate_div_753817"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo753817_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=4391" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=53619&amp;repquote=753817&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 753817)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_1"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid753940" summary="pid753940" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7592" target="_blank" id="userinfo753940" class="dropmenu" onmouseover="showMenu(this.id)">雷曼兄弟</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">@trotrotro</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7592">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7592&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_2" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum753940" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=53619&page=1#pid753940', '话题链接已经复制到剪贴板')">3楼</strong>
													<em onclick="$('postmessage_753940').className='t_bigfont'">大</em>							<em onclick="$('postmessage_753940').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_753940').className='t_smallfont'">小</em>												发表于 2010-7-22 14:00&nbsp;																					<a href="viewthread.php?tid=53619&amp;page=1&amp;authorid=7592" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_2"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_2"></div><div id="ad_thread4_2"></div>
													<h2>修改了一下，增加P2.3，漏掉一步，抱歉</h2>
						
						
																											<div id="postmessage_753940" class="t_msgfont">非oauth环境下的twitter第三方<br />
（不解释什么是oauth，也不解释twitter，等有了oauth我会弄出来的）<br />
<br />
本文是基于&nbsp;&nbsp;<a href="http://goo.gl/QZ7L" target="_blank">http://goo.gl/QZ7L</a>&nbsp;&nbsp;的内容，以下所有的，只是这个地址稍微详细一点的解释与抄袭<br />
一共分三部分<br />
P1&nbsp;&nbsp;GAE<br />
P2&nbsp;&nbsp;java和jtweet<br />
P3&nbsp;&nbsp;把jtweet加到GAE上<br />
<br />
<br />
PART 1 GAE<br />
详细的图解请参考 <a href="http://goo.gl/IeGl" target="_blank">http://goo.gl/IeGl</a><br />
<br />
P1.1申请谷歌帐户<br />
P1.2谷歌APP<br />
P1.3手机验证<br />
P1.4建立GAE应用<br />
<a href="http://wkernuser.appspot.com" target="_blank">http://wkernuser.appspot.com</a><br />
（请自己确定wkernuser，或者别的什么名字，这个词我随便编派的）<br />
<br />
<br />
Part 2 java的推特利器Jtweet<br />
<br />
P2.1java环境，70多兆，下载并安装，一般来说会装载系统盘\program files\java文件夹里<br />
<a href="http://goo.gl/t3G4" target="_blank">http://goo.gl/t3G4</a><br />
<br />
P2.2Jtweet下载，10多兆，下载后解压缩<br />
<a href="http://goo.gl/yOm4" target="_blank">http://goo.gl/yOm4</a><br />
<br />
P2.3 下载把Jtweet上传到GAE的工具<br />
<a href="http://googleappengine.googlecode.com/files/appengine-java-sdk-1.3.5.zip" target="_blank">http://googleappengine.googlecod ... -java-sdk-1.3.5.zip</a><br />
下载后解压缩，<br />
<br />
<br />
Part 3 把Jtweet装到GAE上<br />
<br />
P3.1开始——运行——输入cmd 进入dos&nbsp;&nbsp;进入&nbsp;&nbsp;盘符:\xxx\appengine-java-sdk-1.3.x\bin<br />
　关联java库，在提示符下输入&nbsp;&nbsp;set PATH=x:\xxx\Java\jdk1.6.0_x\bin 回车 （也就是P2.1的路径）<br />
<br />
P3.2.把P2.2 jtweet下的war文件copy至P2.3下载的 \xxx\appengine-java-sdk-1.3.x\bin&nbsp;&nbsp;里面<br />
<br />
P3.3.修改P2.2&nbsp;&nbsp;war\WEB-INF下的appengine-web.xml,把&lt;application&gt;javatweet&lt;/application&gt;<br />
　里的javatweet改成你在Google App Engine申請的應用名（比如P1.4的wkernuser）<br />
<br />
P3.4.运行cmd 进入&nbsp;&nbsp;x:\xxx\appengine-java-sdk-1.3.x\bin<br />
<br />
P3.5.输入appcfg.cmd update war 按提示输入P1.1的邮箱名和密码（输入密码的时候dos上不会显示的，但你照常输入后回车就可以了）<br />
<br />
完成<br />
进入你的<a href="http://wkernuser.appspot.com" target="_blank">http://wkernuser.appspot.com</a>，就可以用了<br />
<br />
[<i> 本帖最后由 雷曼兄弟 于 2010-7-23 17:32 编辑 </i>]</div>

							
							
							
							
															<div id="post_rate_div_753940"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo753940_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=7592" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=53619&amp;repquote=753940&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 753940)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_2"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid755084" summary="pid755084" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6557" target="_blank" id="userinfo755084" class="dropmenu" onmouseover="showMenu(this.id)">杨炳佳</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6557">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6557&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_3" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum755084" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=53619&page=1#pid755084', '话题链接已经复制到剪贴板')">4楼</strong>
													<em onclick="$('postmessage_755084').className='t_bigfont'">大</em>							<em onclick="$('postmessage_755084').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_755084').className='t_smallfont'">小</em>												发表于 2010-7-23 10:15&nbsp;																					<a href="viewthread.php?tid=53619&amp;page=1&amp;authorid=6557" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_3"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_3"></div><div id="ad_thread4_3"></div>
													<h2>提问：</h2>
						
						
																											<div id="postmessage_755084" class="t_msgfont">P3.1开始——运行——输入cmd 进入dos&nbsp;&nbsp;进入&nbsp;&nbsp;盘符:\xxx\appengine-java-sdk-1.3.x\bin<br />
　关联java库，在提示符下输入&nbsp;&nbsp;set PATH=x:\xxx\Java\jdk1.6.0_x\bin 回车 （也就是P2.1的路径）<br />
<br />
这个步骤是一步还是两步？我怎么找不到盘符:\xxx\appengine-java-sdk-1.3.x\bin，当然也进不去</div>

							
							
							
							
															<div id="post_rate_div_755084"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo755084_menu" style="display: none;">
										<div class="imicons">
												<a href="http://wpa.qq.com/msgrd?V=1&amp;Uin=857129737&amp;Site=1984bbs.com&amp;Menu=yes" target="_blank"><img src="images/default/qq.gif" alt="QQ" /></a>																							</div>
										<dl></dl>
										<p><a href="space.php?uid=6557" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=53619&amp;repquote=755084&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 755084)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_3"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid755115" summary="pid755115" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7592" target="_blank" id="userinfo755115" class="dropmenu" onmouseover="showMenu(this.id)">雷曼兄弟</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">@trotrotro</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7592">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7592&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_4" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum755115" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=53619&page=1#pid755115', '话题链接已经复制到剪贴板')">5楼</strong>
													<em onclick="$('postmessage_755115').className='t_bigfont'">大</em>							<em onclick="$('postmessage_755115').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_755115').className='t_smallfont'">小</em>												发表于 2010-7-23 10:37&nbsp;																					<a href="viewthread.php?tid=53619&amp;page=1&amp;authorid=7592" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_4"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_4"></div><div id="ad_thread4_4"></div>
						
						
																											<div id="postmessage_755115" class="t_msgfont">P3.1开始——运行——输入cmd 进入dos&nbsp;&nbsp;进入&nbsp;&nbsp;盘符:\xxx\appengine-java-sdk-1.3.x\bin<br />
　关联java库，在提示符下输入&nbsp;&nbsp;set PATH=x:\xxx\Java\jdk1.6.0_x\bin 回车 （也就是P2.1的路径）<br />
<br />
这个步骤是一步还是两步？我怎么找不到盘符:\xxx\appengine-java-sdk-1.3.x\bin，当然也进不去<br />
<br />
是两步 <br />
第一步，用dos命令进入&nbsp;&nbsp;盘符:\xxx\appengine-java-sdk-1.3.x\bin<br />
<br />
第二步，就是在第一步进入目录后，输入dos命令&nbsp; &nbsp;&nbsp;&nbsp;set path=........<br />
path 等于号后面的东西，就是P2.1 下载完了安装的那个java库的路径<br />
比如我的就是 c:\program files\java\jdk 1.6.0_x\bin<br />
<br />
:\xxx\appengine-java-sdk-1.3.x\bin<br />
应该是在下载<br />
<a href="http://googleappengine.googlecode.com/files/appengine-java-sdk-1.3.5.zip" target="_blank">http://googleappengine.googlecod ... -java-sdk-1.3.5.zip</a><br />
解压缩后的路径<br />
（非常抱歉，在原文里没有提到，我要修改下了）</div>

							
							
							
							
															<div id="post_rate_div_755115"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo755115_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=7592" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=53619&amp;repquote=755115&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 755115)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_4"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid755214" summary="pid755214" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6557" target="_blank" id="userinfo755214" class="dropmenu" onmouseover="showMenu(this.id)">杨炳佳</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6557">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6557&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_5" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum755214" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=53619&page=1#pid755214', '话题链接已经复制到剪贴板')">6楼</strong>
													<em onclick="$('postmessage_755214').className='t_bigfont'">大</em>							<em onclick="$('postmessage_755214').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_755214').className='t_smallfont'">小</em>												发表于 2010-7-23 11:28&nbsp;																					<a href="viewthread.php?tid=53619&amp;page=1&amp;authorid=6557" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_5"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_5"></div><div id="ad_thread4_5"></div>
						
						
																											<div id="postmessage_755214" class="t_msgfont">该下载哪些文件，哪些又需要安装？那个appengine我怎么安装不了？windowsxp（2002 sp3）版本。</div>

							
							
							
							
															<div id="post_rate_div_755214"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo755214_menu" style="display: none;">
										<div class="imicons">
												<a href="http://wpa.qq.com/msgrd?V=1&amp;Uin=857129737&amp;Site=1984bbs.com&amp;Menu=yes" target="_blank"><img src="images/default/qq.gif" alt="QQ" /></a>																							</div>
										<dl></dl>
										<p><a href="space.php?uid=6557" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=53619&amp;repquote=755214&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 755214)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_5"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid755259" summary="pid755259" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=11891" target="_blank" id="userinfo755259" class="dropmenu" onmouseover="showMenu(this.id)">bychurchill</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=11891">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=11891&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_6" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum755259" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=53619&page=1#pid755259', '话题链接已经复制到剪贴板')">7楼</strong>
													<em onclick="$('postmessage_755259').className='t_bigfont'">大</em>							<em onclick="$('postmessage_755259').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_755259').className='t_smallfont'">小</em>												发表于 2010-7-23 11:55&nbsp;																					<a href="viewthread.php?tid=53619&amp;page=1&amp;authorid=11891" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_6"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_6"></div><div id="ad_thread4_6"></div>
						
						
																											<div id="postmessage_755259" class="t_msgfont">牛逼啊，晚上回去试试</div>

							
							
							
							
															<div id="post_rate_div_755259"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo755259_menu" style="display: none;">
										<div class="imicons">
													<a target='_blank' href='http://settings.messenger.live.com/Conversation/IMMe.aspx?invitee=bychurchill@hotmail.com&mkt=zh-cn'><img style='border-style: none;' src='http://messenger.services.live.com/users/bychurchill@hotmail.com/presenceimage?mkt=zh-cn' width='16' height='16' /></a>
												<a href="http://wpa.qq.com/msgrd?V=1&amp;Uin=1043677216&amp;Site=1984bbs.com&amp;Menu=yes" target="_blank"><img src="images/default/qq.gif" alt="QQ" /></a>																							</div>
										<dl></dl>
										<p><a href="space.php?uid=11891" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=53619&amp;repquote=755259&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 755259)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_6"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid755334" summary="pid755334" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=13024" target="_blank" id="userinfo755334" class="dropmenu" onmouseover="showMenu(this.id)">wzz1111</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=13024">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=13024&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_7" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum755334" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=53619&page=1#pid755334', '话题链接已经复制到剪贴板')">8楼</strong>
													<em onclick="$('postmessage_755334').className='t_bigfont'">大</em>							<em onclick="$('postmessage_755334').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_755334').className='t_smallfont'">小</em>												发表于 2010-7-23 12:38&nbsp;																					<a href="viewthread.php?tid=53619&amp;page=1&amp;authorid=13024" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_7"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_7"></div><div id="ad_thread4_7"></div>
						
						
																											<div id="postmessage_755334" class="t_msgfont">来学习下</div>

							
							
							
							
															<div id="post_rate_div_755334"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo755334_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=13024" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=53619&amp;repquote=755334&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 755334)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_7"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid755395" summary="pid755395" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10661" target="_blank" id="userinfo755395" class="dropmenu" onmouseover="showMenu(this.id)">默雨游人</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">twitter：@dongwenqiang</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10661">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10661&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_8" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum755395" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=53619&page=1#pid755395', '话题链接已经复制到剪贴板')">9楼</strong>
													<em onclick="$('postmessage_755395').className='t_bigfont'">大</em>							<em onclick="$('postmessage_755395').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_755395').className='t_smallfont'">小</em>												发表于 2010-7-23 13:01&nbsp;																					<a href="viewthread.php?tid=53619&amp;page=1&amp;authorid=10661" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_8"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_8"></div><div id="ad_thread4_8"></div>
						
						
																											<div id="postmessage_755395" class="t_msgfont">应用倒是传上去了，但是点登录之后是错误500</div>

							
							
							
							
															<div id="post_rate_div_755395"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo755395_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=10661" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=53619&amp;repquote=755395&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 755395)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_8"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid755726" summary="pid755726" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7592" target="_blank" id="userinfo755726" class="dropmenu" onmouseover="showMenu(this.id)">雷曼兄弟</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">@trotrotro</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7592">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7592&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_9" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum755726" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=53619&page=1#pid755726', '话题链接已经复制到剪贴板')">10楼</strong>
													<em onclick="$('postmessage_755726').className='t_bigfont'">大</em>							<em onclick="$('postmessage_755726').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_755726').className='t_smallfont'">小</em>												发表于 2010-7-23 17:41&nbsp;																					<a href="viewthread.php?tid=53619&amp;page=1&amp;authorid=7592" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_9"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_9"></div><div id="ad_thread4_9"></div>
						
						
																											<div id="postmessage_755726" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>杨炳佳</i> 于 2010-7-23 11:28 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=755214&amp;ptid=53619" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
该下载哪些文件，哪些又需要安装？那个appengine我怎么安装不了？windowsxp（2002 sp3）版本。 </blockquote></div>需要下载有我上文分段的P2.1 P2.2&nbsp;&nbsp;P2.3三个东西<br />
要安装的只有P2.1</div>

							
							
							
							
															<div id="post_rate_div_755726"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo755726_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=7592" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=53619&amp;repquote=755726&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 755726)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_9"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid755729" summary="pid755729" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7592" target="_blank" id="userinfo755729" class="dropmenu" onmouseover="showMenu(this.id)">雷曼兄弟</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">@trotrotro</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7592">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7592&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_10" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum755729" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=53619&page=1#pid755729', '话题链接已经复制到剪贴板')">11楼</strong>
													<em onclick="$('postmessage_755729').className='t_bigfont'">大</em>							<em onclick="$('postmessage_755729').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_755729').className='t_smallfont'">小</em>												发表于 2010-7-23 17:43&nbsp;																					<a href="viewthread.php?tid=53619&amp;page=1&amp;authorid=7592" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_10"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_10"></div><div id="ad_thread4_10"></div>
						
						
																											<div id="postmessage_755729" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>默雨游人</i> 于 2010-7-23 13:01 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=755395&amp;ptid=53619" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
应用倒是传上去了，但是点登录之后是错误500 </blockquote></div>我大概算运气好的，完全按照说明书做，上传成功了就能用</div>

							
							
							
							
															<div id="post_rate_div_755729"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo755729_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=7592" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=53619&amp;repquote=755729&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 755729)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_10"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid755801" summary="pid755801" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6557" target="_blank" id="userinfo755801" class="dropmenu" onmouseover="showMenu(this.id)">杨炳佳</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6557">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6557&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_11" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum755801" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=53619&page=1#pid755801', '话题链接已经复制到剪贴板')">12楼</strong>
													<em onclick="$('postmessage_755801').className='t_bigfont'">大</em>							<em onclick="$('postmessage_755801').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_755801').className='t_smallfont'">小</em>												发表于 2010-7-23 18:40&nbsp;																					<a href="viewthread.php?tid=53619&amp;page=1&amp;authorid=6557" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_11"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_11"></div><div id="ad_thread4_11"></div>
						
						
																											<div id="postmessage_755801" class="t_msgfont">P3.1 就是进不去</div>

							
							
							
							
															<div id="post_rate_div_755801"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo755801_menu" style="display: none;">
										<div class="imicons">
												<a href="http://wpa.qq.com/msgrd?V=1&amp;Uin=857129737&amp;Site=1984bbs.com&amp;Menu=yes" target="_blank"><img src="images/default/qq.gif" alt="QQ" /></a>																							</div>
										<dl></dl>
										<p><a href="space.php?uid=6557" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=53619&amp;repquote=755801&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 755801)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_11"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid755851" summary="pid755851" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6557" target="_blank" id="userinfo755851" class="dropmenu" onmouseover="showMenu(this.id)">杨炳佳</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6557">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6557&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_12" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum755851" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=53619&page=1#pid755851', '话题链接已经复制到剪贴板')">13楼</strong>
													<em onclick="$('postmessage_755851').className='t_bigfont'">大</em>							<em onclick="$('postmessage_755851').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_755851').className='t_smallfont'">小</em>												发表于 2010-7-23 19:32&nbsp;																					<a href="viewthread.php?tid=53619&amp;page=1&amp;authorid=6557" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_12"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_12"></div><div id="ad_thread4_12"></div>
						
						
																											<div id="postmessage_755851" class="t_msgfont">搞清楚了，原来 进入某文件夹的dos命令 就是 cd</div>

							
							
							
							
															<div id="post_rate_div_755851"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo755851_menu" style="display: none;">
										<div class="imicons">
												<a href="http://wpa.qq.com/msgrd?V=1&amp;Uin=857129737&amp;Site=1984bbs.com&amp;Menu=yes" target="_blank"><img src="images/default/qq.gif" alt="QQ" /></a>																							</div>
										<dl></dl>
										<p><a href="space.php?uid=6557" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=53619&amp;repquote=755851&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 755851)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_12"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid755862" summary="pid755862" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6557" target="_blank" id="userinfo755862" class="dropmenu" onmouseover="showMenu(this.id)">杨炳佳</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6557">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6557&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_13" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum755862" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=53619&page=1#pid755862', '话题链接已经复制到剪贴板')">14楼</strong>
													<em onclick="$('postmessage_755862').className='t_bigfont'">大</em>							<em onclick="$('postmessage_755862').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_755862').className='t_smallfont'">小</em>												发表于 2010-7-23 19:44&nbsp;																					<a href="viewthread.php?tid=53619&amp;page=1&amp;authorid=6557" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_13"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_13"></div><div id="ad_thread4_13"></div>
						
						
																											<div id="postmessage_755862" class="t_msgfont">剩最后一步了，咋输入 邮箱名和密码？举下例子嘛</div>

							
							
							
							
															<div id="post_rate_div_755862"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo755862_menu" style="display: none;">
										<div class="imicons">
												<a href="http://wpa.qq.com/msgrd?V=1&amp;Uin=857129737&amp;Site=1984bbs.com&amp;Menu=yes" target="_blank"><img src="images/default/qq.gif" alt="QQ" /></a>																							</div>
										<dl></dl>
										<p><a href="space.php?uid=6557" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=53619&amp;repquote=755862&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 755862)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_13"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid755886" summary="pid755886" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6557" target="_blank" id="userinfo755886" class="dropmenu" onmouseover="showMenu(this.id)">杨炳佳</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6557">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6557&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_14" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum755886" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=53619&page=1#pid755886', '话题链接已经复制到剪贴板')">15楼</strong>
													<em onclick="$('postmessage_755886').className='t_bigfont'">大</em>							<em onclick="$('postmessage_755886').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_755886').className='t_smallfont'">小</em>												发表于 2010-7-23 20:13&nbsp;																					<a href="viewthread.php?tid=53619&amp;page=1&amp;authorid=6557" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_14"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_14"></div><div id="ad_thread4_14"></div>
						
						
																											<div id="postmessage_755886" class="t_msgfont">P1.4，建立GAE应用只要申请个用户名就可以，还是要一直搞到这个链接<a href="http://wkernuser.appspot.com/" target="_blank">http://wkernuser.appspot.com/</a>生效才行？</div>

							
							
							
							
															<div id="post_rate_div_755886"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo755886_menu" style="display: none;">
										<div class="imicons">
												<a href="http://wpa.qq.com/msgrd?V=1&amp;Uin=857129737&amp;Site=1984bbs.com&amp;Menu=yes" target="_blank"><img src="images/default/qq.gif" alt="QQ" /></a>																							</div>
										<dl></dl>
										<p><a href="space.php?uid=6557" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=53619&amp;repquote=755886&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 755886)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_14"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid756533" summary="pid756533" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7592" target="_blank" id="userinfo756533" class="dropmenu" onmouseover="showMenu(this.id)">雷曼兄弟</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">@trotrotro</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7592">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7592&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_15" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum756533" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=53619&page=1#pid756533', '话题链接已经复制到剪贴板')">16楼</strong>
													<em onclick="$('postmessage_756533').className='t_bigfont'">大</em>							<em onclick="$('postmessage_756533').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_756533').className='t_smallfont'">小</em>												发表于 2010-7-24 10:11&nbsp;																					<a href="viewthread.php?tid=53619&amp;page=1&amp;authorid=7592" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_15"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_15"></div><div id="ad_thread4_15"></div>
						
						
																											<div id="postmessage_756533" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>杨炳佳</i> 于 2010-7-23 20:13 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=755886&amp;ptid=53619" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
P1.4，建立GAE应用只要申请个用户名就可以，还是要一直搞到这个链接<a href="http://wkernuser.appspot.com/" target="_blank">http://wkernuser.appspot.com/</a>生效才行？ </blockquote></div>是一共四步<br />
到了第四步，搞到了这个<a href="http://wkernuser.appspot.com/" target="_blank">http://wkernuser.appspot.com/</a>才算成功<br />
因为以后你就要靠<a href="http://wkernuser.appspot.com/" target="_blank">http://wkernuser.appspot.com/</a>来访问推特的<br />
<br />
你申请成功了，还需要注入java，这个就是P2和P3 的事情了</div>

							
							
							
							
															<div id="post_rate_div_756533"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo756533_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=7592" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=53619&amp;repquote=756533&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 756533)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_15"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid756534" summary="pid756534" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7592" target="_blank" id="userinfo756534" class="dropmenu" onmouseover="showMenu(this.id)">雷曼兄弟</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">@trotrotro</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7592">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7592&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_16" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum756534" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=53619&page=1#pid756534', '话题链接已经复制到剪贴板')">17楼</strong>
													<em onclick="$('postmessage_756534').className='t_bigfont'">大</em>							<em onclick="$('postmessage_756534').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_756534').className='t_smallfont'">小</em>												发表于 2010-7-24 10:12&nbsp;																					<a href="viewthread.php?tid=53619&amp;page=1&amp;authorid=7592" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_16"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_16"></div><div id="ad_thread4_16"></div>
						
						
																											<div id="postmessage_756534" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>杨炳佳</i> 于 2010-7-23 19:44 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=755862&amp;ptid=53619" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
剩最后一步了，咋输入 邮箱名和密码？举下例子嘛 </blockquote></div>也都是dos状态下的<br />
他会有提示语句出来的，让你输入邮箱名，你输入完了回车<br />
然后要你输入密码，一样输入回车，但输入密码的时候，是不会显示出来的</div>

							
							
							
							
															<div id="post_rate_div_756534"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo756534_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=7592" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=53619&amp;repquote=756534&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 756534)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_16"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid756558" summary="pid756558" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6557" target="_blank" id="userinfo756558" class="dropmenu" onmouseover="showMenu(this.id)">杨炳佳</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6557">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6557&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_17" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum756558" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=53619&page=1#pid756558', '话题链接已经复制到剪贴板')">18楼</strong>
													<em onclick="$('postmessage_756558').className='t_bigfont'">大</em>							<em onclick="$('postmessage_756558').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_756558').className='t_smallfont'">小</em>												发表于 2010-7-24 10:34&nbsp;																					<a href="viewthread.php?tid=53619&amp;page=1&amp;authorid=6557" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_17"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_17"></div><div id="ad_thread4_17"></div>
													<h2>嘢，成功了！</h2>
						
						
																											<div id="postmessage_756558" class="t_msgfont">谢谢 雷曼兄弟，好兄弟啊！再也不怕被墙了，只是这个只能自己用，别人不能用，对吧？要不也不用输入自己的账号和密码了。。。。<br />
<br />
[<i> 本帖最后由 杨炳佳 于 2010-7-24 10:37 编辑 </i>]</div>

							
							
							
							
															<div id="post_rate_div_756558"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo756558_menu" style="display: none;">
										<div class="imicons">
												<a href="http://wpa.qq.com/msgrd?V=1&amp;Uin=857129737&amp;Site=1984bbs.com&amp;Menu=yes" target="_blank"><img src="images/default/qq.gif" alt="QQ" /></a>																							</div>
										<dl></dl>
										<p><a href="space.php?uid=6557" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=53619&amp;repquote=756558&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 756558)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_17"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid756565" summary="pid756565" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 <a name="lastpost"></a>					<cite>											<a href="space.php?uid=7592" target="_blank" id="userinfo756565" class="dropmenu" onmouseover="showMenu(this.id)">雷曼兄弟</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">@trotrotro</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7592">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7592&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_18" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum756565" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=53619&page=1#pid756565', '话题链接已经复制到剪贴板')">19楼</strong>
													<em onclick="$('postmessage_756565').className='t_bigfont'">大</em>							<em onclick="$('postmessage_756565').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_756565').className='t_smallfont'">小</em>												发表于 2010-7-24 10:44&nbsp;																					<a href="viewthread.php?tid=53619&amp;page=1&amp;authorid=7592" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_18"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_18"></div><div id="ad_thread4_18"></div>
						
						
																											<div id="postmessage_756565" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>杨炳佳</i> 于 2010-7-24 10:34 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=756558&amp;ptid=53619" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
谢谢 雷曼兄弟，好兄弟啊！再也不怕被墙了，只是这个只能自己用，别人不能用，对吧？要不也不用输入自己的账号和密码了。。。。 </blockquote></div>呵呵，恭喜<br />
这个，你别把地址<a href="http://XXXXX.appspot.com" target="_blank">http://XXXXX.appspot.com</a>的那个xxxxxx告诉别人就可以了，反正我是没打算告诉过别人，嘿嘿<br />
而且谷歌可以让你一个手机号建十个应用，建了以后，还可以关掉，甚至删除，保密和备用性能都不错的，所以只要谷歌（就是那个appspot）应用不被封，应该没多大问题的，但不知道党妈会留appspot多久，呵呵<br />
<br />
另外，昨天这个应用就出问题了，我也找来自己几个懂程序的朋友研究一整天都没用，今天一早才知道是谷歌方面或者推特方面有问题</div>

							
							
							
							
															<div id="post_rate_div_756565"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo756565_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=7592" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=53619&amp;repquote=756565&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 756565)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_18"></div>				</div>
			</td>
		</tr>
		</table>
		</div>
</form>





<div class="pages_btns">
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=53619&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=53619&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
				<span class="postbtn" id="newspecialtmp" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=53619&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

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

	<form method="post" id="postform" action="post.php?action=reply&amp;fid=26&amp;tid=53619&amp;extra=&amp;replysubmit=yes" onSubmit="return validate(this)">
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
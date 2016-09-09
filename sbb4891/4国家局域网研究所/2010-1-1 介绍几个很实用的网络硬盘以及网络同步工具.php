<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<title>介绍几个很实用的网络硬盘以及网络同步工具 - 国家局域网研究所 -  1984bbs.com </title>
<meta name="keywords" content="" />
<meta name="MSSmartTagsPreventParsing" content="True" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<link rel="archives" title="1984bbs.com" href="https://1984bbs.com/archiver/" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_viewthread.css" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_common.css" />
<script type="text/javascript">
	var discuz_uid = 13019;var IMGDIR = 'images/default';var attackevasive = '0';var gid = 0;var STYLEID = '1';
	gid = parseInt('3');var fid = parseInt('26');var tid = parseInt('33203');
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
			<p><a href="index.php" id="forumlist" onmouseover="showMenu(this.id)" class="dropmenu">1984bbs.com</a> &raquo; <a href="forumdisplay.php?fid=26">国家局域网研究所</a> &raquo; 介绍几个很实用的网络硬盘以及网络同步工具</p>
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
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=33203&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=33203&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
				<span class="postbtn" id="newspecial" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=33203&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

	<ul class="popupmenu_popup newspecialmenu" id="newspecial_menu" style="display: none">
		<li><a href="post.php?action=newthread&amp;fid=26&amp;extra=">发新话题</a></li>
		<li class="poll"><a href="post.php?action=newthread&amp;fid=26&amp;extra=&amp;special=1">发布投票</a></li>													</ul>

<form method="post" name="modactions">
	<input type="hidden" name="formhash" value="823c9fa2" />
	<div class="mainbox viewthread">
		<span class="headactions">
					<a href="my.php?item=favorites&amp;tid=33203" id="ajax_favorite" onclick="ajaxmenu(event, this.id, 3000, 0)">收藏</a>
			<a href="my.php?item=subscriptions&amp;subadd=33203" id="ajax_subscription" onclick="ajaxmenu(event, this.id, 3000, null, 0)">订阅</a>
			<a href="misc.php?action=emailfriend&amp;tid=33203" id="emailfriend" onclick="ajaxmenu(event, this.id, 9000000, null, 0)">推荐</a>
				<a href="viewthread.php?action=printable&amp;tid=33203" target="_blank" class="notabs">打印</a>
				</span>
		<h1>介绍几个很实用的网络硬盘以及网络同步工具		</h1>
							<table id="pid408320" summary="pid408320" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1204" target="_blank" id="userinfo408320" class="dropmenu" onmouseover="showMenu(this.id)">hippies</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1204">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1204&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_0" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum408320" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=33203&page=1#pid408320', '话题链接已经复制到剪贴板')">1楼</strong>
													<em onclick="$('postmessage_408320').className='t_bigfont'">大</em>							<em onclick="$('postmessage_408320').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_408320').className='t_smallfont'">小</em>												发表于 2010-1-1 15:34&nbsp;																					<a href="viewthread.php?tid=33203&amp;page=1&amp;authorid=1204" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_0"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_0"></div><div id="ad_thread4_0"></div>
													<h2>介绍几个很实用的网络硬盘以及网络同步工具</h2>
						
						
																											<div id="postmessage_408320" class="t_msgfont">看到有朋友在问gmail driver的事情，想起来和大家介绍几个还不错的网络硬盘<br />
1.&nbsp; &nbsp; &nbsp; &nbsp; SugarSync 免费版本起始容量2G最大10G。 具有同步功能。支持外部音视频连接，上传文件大小不限。<br />
支持多台电脑直接的文件夹同步，比如公司电脑和家里的电脑的文件夹，这样工作文档聊天记录这些就可以在这两台电脑之间同步起来，不用把公司电脑扛回家或者带U盘这些东西了。把重要的文件夹同步到SugarSync万一电脑挂了，也可以从网上恢复过来。<br />
SugarSync支持windows、Mac两种电脑操作系统，也支持黑莓、iphone、android、WM几种手机操作。<br />
我一直用的就是这一个，速度很不错，前两天用一个上午把700M的一个视频传上去了。要不是收费功能实在太贵（30G年USD$50），我就注册收费的了，google20G以你那也才USD$5而已啊！！<br />
试一下用他的MP3外链功能：<br />
name=&quot;FlashVars&quot;/&gt;&lt;param value=&quot;high&quot; name=&quot;quality&quot;/&gt;&lt;param value=&quot;false&quot; name=&quot;menu&quot;/&gt;&lt;param value=&quot;transparent&quot; name=&quot;wmode&quot;/&gt;&lt;/object&gt;&lt;p&gt;&lt;a href=&quot;https://82050989.sugarsync.com/getfiles/c2y3ah7p694yy/548579_2624/%E8%A7%89%E9%86%92.mp3&quot; target=&quot;_blank&quot;&gt;媒体文件地址&lt;/a&gt;&lt;/p&gt;&lt;/div&gt;<br />
SugarSync可以通过邀请朋友注册使用来增大免费容量，每邀请一个朋友使用就可以增加250M的空间，而通过邀请注册的朋友可以得到原始容量为2.25G的免费空间。所以大家如果需要注册也顺便帮个忙，通过我的邀请地址注册，这样我也可以增长空间，下面是我的两个账户的邀请地址，随便点一个就行：^_^<br />
<br />
<a href="https://www.sugarsync.com/referral?rf=cpwarqorphaso" target="_blank">https://www.sugarsync.com/referral?rf=cpwarqorphaso</a><br />
<br />
<a href="https://www.sugarsync.com/referral?rf=e7jtofgggxsec" target="_blank">https://www.sugarsync.com/referral?rf=e7jtofgggxsec</a><br />
<br />
2. Dropbox<br />
和SugarSync很类似，也提供2G初始免费空间，通过邀请可以增加250M空间。不一样的地方是Dropbox还没有中文版本，不能和SugarSync一样随便子定义同步文件夹，只能在它规定的文件夹同步文件。好处是多了linux版本，同一文档支持多种版本，SugarSync免费空间只支持2种版本，而Dropbox则支持多次版本，还有就是Dropbox免费版可以支持N部电脑同步，而SugarSync免费版只能两部电脑同步。<br />
我现在Dropbox和SugarSync都在用，双重备份<br />
也通过我的邀请注册把，哈哈<br />
<a href="https://www.dropbox.com/referrals/NTM3NjE4NzQ5" target="_blank">https://www.dropbox.com/referrals/NTM3NjE4NzQ5</a><br />
<br />
3.g.ho.st<br />
&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;一个Web OS，模仿XP操作系统界面，提供15G免费空间，不能同步，不提供外链，通过邀请注册据说有人已经有1000G的空间了，大家可以试试看。<br />
<br />
<a href="http://g.ho.st/?referral=hippies" target="_blank">http://g.ho.st/?referral=hippies</a><br />
&nbsp; &nbsp; &nbsp; &nbsp; <br />
上面几个都是国外公司出品，应该现在和天朝还没啥关系，所以暂时还应该是安全滴。以后如果google正式推出Gdriver那当然就更好用了，不过google现在已经具备了成为老大哥的技术，如果哪天丫和大家翻脸。。。。那<br />
<br />
[<i> 本帖最后由 hippies 于 2010-1-4 00:21 编辑 </i>]</div>

							
							
							
							
															<div id="post_rate_div_408320"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo408320_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1204" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=33203&amp;repquote=408320&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 408320)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_0"></div>				</div>
			</td>
		</tr>
		</table>
		</div><div class="ad_column" id="ad_interthread"><a href="/viewthread.php?tid=54699" target="_blank" style="color:red;">1984bbs是一个非营利项目，它需要您的捐助！</font></a>		</div>
	<div class="mainbox viewthread">
			<table id="pid408466" summary="pid408466" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6871" target="_blank" id="userinfo408466" class="dropmenu" onmouseover="showMenu(this.id)">法不阿Quei</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">我活在世上，无非是想明白些道理，看见些有趣的事情。</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6871">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6871&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_1" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum408466" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=33203&page=1#pid408466', '话题链接已经复制到剪贴板')">2楼</strong>
													<em onclick="$('postmessage_408466').className='t_bigfont'">大</em>							<em onclick="$('postmessage_408466').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_408466').className='t_smallfont'">小</em>												发表于 2010-1-1 16:47&nbsp;																					<a href="viewthread.php?tid=33203&amp;page=1&amp;authorid=6871" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_1"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_1"></div><div id="ad_thread4_1"></div>
						
						
																											<div id="postmessage_408466" class="t_msgfont">mark</div>

							
							
							
							
															<div id="post_rate_div_408466"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo408466_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=6871" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=33203&amp;repquote=408466&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 408466)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_1"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid408536" summary="pid408536" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1204" target="_blank" id="userinfo408536" class="dropmenu" onmouseover="showMenu(this.id)">hippies</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1204">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1204&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_2" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum408536" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=33203&page=1#pid408536', '话题链接已经复制到剪贴板')">3楼</strong>
													<em onclick="$('postmessage_408536').className='t_bigfont'">大</em>							<em onclick="$('postmessage_408536').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_408536').className='t_smallfont'">小</em>												发表于 2010-1-1 17:49&nbsp;																					<a href="viewthread.php?tid=33203&amp;page=1&amp;authorid=1204" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_2"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_2"></div><div id="ad_thread4_2"></div>
						
						
																											<div id="postmessage_408536" class="t_msgfont">呃，不知道怎么在咱们坛子里弄直接播放MP3文件，哪位朋友帮弄一下</div>

							
							
							
							
															<div id="post_rate_div_408536"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo408536_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1204" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=33203&amp;repquote=408536&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 408536)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_2"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid408873" summary="pid408873" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=11459" target="_blank" id="userinfo408873" class="dropmenu" onmouseover="showMenu(this.id)">再世关羽</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=11459">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=11459&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_3" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum408873" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=33203&page=1#pid408873', '话题链接已经复制到剪贴板')">4楼</strong>
													<em onclick="$('postmessage_408873').className='t_bigfont'">大</em>							<em onclick="$('postmessage_408873').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_408873').className='t_smallfont'">小</em>												发表于 2010-1-1 22:09&nbsp;																					<a href="viewthread.php?tid=33203&amp;page=1&amp;authorid=11459" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_3"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_3"></div><div id="ad_thread4_3"></div>
						
						
																											<div id="postmessage_408873" class="t_msgfont">3.g.ho.st<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; 一个Web OS，模仿XP操作系统界面，提供15G免费空间，不能同步，不提供外链，通过邀请注册据说有人已经有1000G的空间了，大家可以试试看。<br />
<br />
挺好，就是卡</div>

							
							
							
							
															<div id="post_rate_div_408873"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo408873_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=11459" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=33203&amp;repquote=408873&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 408873)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_3"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid408974" summary="pid408974" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10215" target="_blank" id="userinfo408974" class="dropmenu" onmouseover="showMenu(this.id)">uinstriv</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10215">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10215&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_4" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum408974" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=33203&page=1#pid408974', '话题链接已经复制到剪贴板')">5楼</strong>
													<em onclick="$('postmessage_408974').className='t_bigfont'">大</em>							<em onclick="$('postmessage_408974').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_408974').className='t_smallfont'">小</em>												发表于 2010-1-1 22:54&nbsp;																					<a href="viewthread.php?tid=33203&amp;page=1&amp;authorid=10215" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_4"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_4"></div><div id="ad_thread4_4"></div>
						
						
																											<div id="postmessage_408974" class="t_msgfont">这样吗<br />
<object width="290" height="24" id="audioplayer2" data="player.swf" type="application/x-shockwave-flash"><param value="player.swf" name="movie"/><param value="playerID=2&autostart=no&soundFile=https://82050989.sugarsync.com/getfiles/c2y3ah7p694yy/548579_2624/%E8%A7%89%E9%86%92.mp3" name="FlashVars"/><param value="high" name="quality"/><param value="false" name="menu"/><param value="transparent" name="wmode"/></object><p><a href="https://82050989.sugarsync.com/getfiles/c2y3ah7p694yy/548579_2624/%E8%A7%89%E9%86%92.mp3" target="_blank">媒体文件地址</a></p></div>

							
							
							
							
															<div id="post_rate_div_408974"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo408974_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=10215" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=33203&amp;repquote=408974&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 408974)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_4"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid409095" summary="pid409095" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=11181" target="_blank" id="userinfo409095" class="dropmenu" onmouseover="showMenu(this.id)">Anguu</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">我也爱你们</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=11181">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=11181&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_5" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum409095" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=33203&page=1#pid409095', '话题链接已经复制到剪贴板')">6楼</strong>
													<em onclick="$('postmessage_409095').className='t_bigfont'">大</em>							<em onclick="$('postmessage_409095').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_409095').className='t_smallfont'">小</em>												发表于 2010-1-2 00:12&nbsp;																					<a href="viewthread.php?tid=33203&amp;page=1&amp;authorid=11181" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_5"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_5"></div><div id="ad_thread4_5"></div>
						
						
																											<div id="postmessage_409095" class="t_msgfont">g.ho.st这个真棒!</div>

							
							
							
							
															<div id="post_rate_div_409095"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo409095_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://vellyempire.blogspot.com" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=11181" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=33203&amp;repquote=409095&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 409095)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_5"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid409106" summary="pid409106" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1204" target="_blank" id="userinfo409106" class="dropmenu" onmouseover="showMenu(this.id)">hippies</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1204">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1204&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_6" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum409106" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=33203&page=1#pid409106', '话题链接已经复制到剪贴板')">7楼</strong>
													<em onclick="$('postmessage_409106').className='t_bigfont'">大</em>							<em onclick="$('postmessage_409106').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_409106').className='t_smallfont'">小</em>												发表于 2010-1-2 00:21&nbsp;																					<a href="viewthread.php?tid=33203&amp;page=1&amp;authorid=1204" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_6"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_6"></div><div id="ad_thread4_6"></div>
						
						
																											<div id="postmessage_409106" class="t_msgfont">uinstriv,是的，怎么我是试过N种方法都不行捏，郁闷1<br />
给个代码我把！感谢<br />
<br />
[<i> 本帖最后由 hippies 于 2010-1-2 00:51 编辑 </i>]</div>

							
							
							
							
															<div id="post_rate_div_409106"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo409106_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1204" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=33203&amp;repquote=409106&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 409106)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_6"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid409306" summary="pid409306" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10114" target="_blank" id="userinfo409306" class="dropmenu" onmouseover="showMenu(this.id)">m3g4</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10114">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10114&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_7" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum409306" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=33203&page=1#pid409306', '话题链接已经复制到剪贴板')">8楼</strong>
													<em onclick="$('postmessage_409306').className='t_bigfont'">大</em>							<em onclick="$('postmessage_409306').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_409306').className='t_smallfont'">小</em>												发表于 2010-1-2 06:29&nbsp;																					<a href="viewthread.php?tid=33203&amp;page=1&amp;authorid=10114" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_7"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_7"></div><div id="ad_thread4_7"></div>
						
						
																											<div id="postmessage_409306" class="t_msgfont">前两种我都在用，双保险</div>

							
							
							
							
															<div id="post_rate_div_409306"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo409306_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=10114" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=33203&amp;repquote=409306&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 409306)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_7"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid409362" summary="pid409362" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=11328" target="_blank" id="userinfo409362" class="dropmenu" onmouseover="showMenu(this.id)">dangelo</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">@ren_xd</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=11328">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=11328&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_8" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum409362" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=33203&page=1#pid409362', '话题链接已经复制到剪贴板')">9楼</strong>
													<em onclick="$('postmessage_409362').className='t_bigfont'">大</em>							<em onclick="$('postmessage_409362').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_409362').className='t_smallfont'">小</em>												发表于 2010-1-2 10:12&nbsp;																					<a href="viewthread.php?tid=33203&amp;page=1&amp;authorid=11328" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_8"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_8"></div><div id="ad_thread4_8"></div>
						
						
																											<div id="postmessage_409362" class="t_msgfont">谢谢 留个脚印</div>

							
							
							
							
															<div id="post_rate_div_409362"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo409362_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=11328" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=33203&amp;repquote=409362&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 409362)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_8"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid412056" summary="pid412056" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=11245" target="_blank" id="userinfo412056" class="dropmenu" onmouseover="showMenu(this.id)">shysun</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">wanderer @sunshier</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=11245">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=11245&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_9" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum412056" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=33203&page=1#pid412056', '话题链接已经复制到剪贴板')">10楼</strong>
													<em onclick="$('postmessage_412056').className='t_bigfont'">大</em>							<em onclick="$('postmessage_412056').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_412056').className='t_smallfont'">小</em>												发表于 2010-1-3 19:35&nbsp;																					<a href="viewthread.php?tid=33203&amp;page=1&amp;authorid=11245" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_9"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_9"></div><div id="ad_thread4_9"></div>
						
						
																											<div id="postmessage_412056" class="t_msgfont">G.ho.st真是一款不错的OS</div>

							
							
							
							
															<div id="post_rate_div_412056"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo412056_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=11245" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=33203&amp;repquote=412056&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 412056)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_9"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid412098" summary="pid412098" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=9517" target="_blank" id="userinfo412098" class="dropmenu" onmouseover="showMenu(this.id)">老西</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=9517">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=9517&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_10" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum412098" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=33203&page=1#pid412098', '话题链接已经复制到剪贴板')">11楼</strong>
													<em onclick="$('postmessage_412098').className='t_bigfont'">大</em>							<em onclick="$('postmessage_412098').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_412098').className='t_smallfont'">小</em>												发表于 2010-1-3 20:04&nbsp;																					<a href="viewthread.php?tid=33203&amp;page=1&amp;authorid=9517" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_10"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_10"></div><div id="ad_thread4_10"></div>
						
						
																											<div id="postmessage_412098" class="t_msgfont">谢谢楼主～～<br />
<br />
收藏了～～</div>

							
							
							
							
															<div id="post_rate_div_412098"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo412098_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=9517" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=33203&amp;repquote=412098&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 412098)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_10"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid412345" summary="pid412345" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1204" target="_blank" id="userinfo412345" class="dropmenu" onmouseover="showMenu(this.id)">hippies</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1204">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1204&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_11" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum412345" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=33203&page=1#pid412345', '话题链接已经复制到剪贴板')">12楼</strong>
													<em onclick="$('postmessage_412345').className='t_bigfont'">大</em>							<em onclick="$('postmessage_412345').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_412345').className='t_smallfont'">小</em>												发表于 2010-1-3 23:11&nbsp;																					<a href="viewthread.php?tid=33203&amp;page=1&amp;authorid=1204" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_11"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_11"></div><div id="ad_thread4_11"></div>
						
						
																											<div id="postmessage_412345" class="t_msgfont">如果G.ho.st能把浏览器做的好些，并里面能有好的翻墙工具，那么一毛不拔关于女朋友的问题就能搞定啦 嘿嘿</div>

							
							
							
							
															<div id="post_rate_div_412345"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo412345_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1204" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=33203&amp;repquote=412345&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 412345)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_11"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid412457" summary="pid412457" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10735" target="_blank" id="userinfo412457" class="dropmenu" onmouseover="showMenu(this.id)">lucker</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10735">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10735&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_12" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum412457" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=33203&page=1#pid412457', '话题链接已经复制到剪贴板')">13楼</strong>
													<em onclick="$('postmessage_412457').className='t_bigfont'">大</em>							<em onclick="$('postmessage_412457').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_412457').className='t_smallfont'">小</em>												发表于 2010-1-4 00:11&nbsp;																					<a href="viewthread.php?tid=33203&amp;page=1&amp;authorid=10735" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_12"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_12"></div><div id="ad_thread4_12"></div>
						
						
																											<div id="postmessage_412457" class="t_msgfont">g.ho.st 这个很不错..推荐一下.. <br />
附我的邀请链接..<br />
<a href="http://g.ho.st/?referral=lucker" target="_blank">http://g.ho.st/?referral=lucker</a></div>

							
							
							
							
															<div id="post_rate_div_412457"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo412457_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=10735" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=33203&amp;repquote=412457&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 412457)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_12"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid425243" summary="pid425243" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6449" target="_blank" id="userinfo425243" class="dropmenu" onmouseover="showMenu(this.id)">倪秋</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">颂赞和诅咒从一个口里出来，我的兄弟们，这是不应当的。</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6449">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6449&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_13" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum425243" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=33203&page=1#pid425243', '话题链接已经复制到剪贴板')">14楼</strong>
													<em onclick="$('postmessage_425243').className='t_bigfont'">大</em>							<em onclick="$('postmessage_425243').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_425243').className='t_smallfont'">小</em>												发表于 2010-1-11 16:39&nbsp;																					<a href="viewthread.php?tid=33203&amp;page=1&amp;authorid=6449" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_13"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_13"></div><div id="ad_thread4_13"></div>
						
						
																											<div id="postmessage_425243" class="t_msgfont">注册了g.ho.st，谢谢。</div>

							
							
							
							
															<div id="post_rate_div_425243"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo425243_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=6449" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=33203&amp;repquote=425243&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 425243)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_13"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid425245" summary="pid425245" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2770" target="_blank" id="userinfo425245" class="dropmenu" onmouseover="showMenu(this.id)">蟹帅</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">国保大兄弟你好 </p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2770">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2770&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_14" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum425245" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=33203&page=1#pid425245', '话题链接已经复制到剪贴板')">15楼</strong>
													<em onclick="$('postmessage_425245').className='t_bigfont'">大</em>							<em onclick="$('postmessage_425245').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_425245').className='t_smallfont'">小</em>												发表于 2010-1-11 16:40&nbsp;																					<a href="viewthread.php?tid=33203&amp;page=1&amp;authorid=2770" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_14"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_14"></div><div id="ad_thread4_14"></div>
						
						
																											<div id="postmessage_425245" class="t_msgfont"><a href="http://z-o-o-m.eu/" target="_blank">http://z-o-o-m.eu/</a><br />
<br />
这个软件提供数百个在线网盘的批量上传</div>

							
							
							
							
															<div id="post_rate_div_425245"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo425245_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://is.gd/fDzMS" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=2770" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=33203&amp;repquote=425245&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 425245)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_14"></div>				</div>
			</td>
		</tr>
		</table>
		</div>
</form>





<div class="pages_btns">
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=33203&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=33203&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
				<span class="postbtn" id="newspecialtmp" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=33203&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

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

	<form method="post" id="postform" action="post.php?action=reply&amp;fid=26&amp;tid=33203&amp;extra=&amp;replysubmit=yes" onSubmit="return validate(this)">
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
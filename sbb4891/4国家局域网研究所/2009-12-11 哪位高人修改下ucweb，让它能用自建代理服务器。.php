<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<title>哪位高人修改下ucweb，让它能用自建代理服务器。 - 国家局域网研究所 -  1984bbs.com </title>
<meta name="keywords" content="" />
<meta name="MSSmartTagsPreventParsing" content="True" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<link rel="archives" title="1984bbs.com" href="https://1984bbs.com/archiver/" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_viewthread.css" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_common.css" />
<script type="text/javascript">
	var discuz_uid = 13019;var IMGDIR = 'images/default';var attackevasive = '0';var gid = 0;var STYLEID = '1';
	gid = parseInt('3');var fid = parseInt('26');var tid = parseInt('30721');
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
			<p><a href="index.php" id="forumlist" onmouseover="showMenu(this.id)" class="dropmenu">1984bbs.com</a> &raquo; <a href="forumdisplay.php?fid=26">国家局域网研究所</a> &raquo; 哪位高人修改下ucweb，让它能用自建代理服务器。</p>
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
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=30721&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=30721&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
				<span class="postbtn" id="newspecial" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=30721&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

	<ul class="popupmenu_popup newspecialmenu" id="newspecial_menu" style="display: none">
		<li><a href="post.php?action=newthread&amp;fid=26&amp;extra=">发新话题</a></li>
		<li class="poll"><a href="post.php?action=newthread&amp;fid=26&amp;extra=&amp;special=1">发布投票</a></li>													</ul>

<form method="post" name="modactions">
	<input type="hidden" name="formhash" value="823c9fa2" />
	<div class="mainbox viewthread">
		<span class="headactions">
					<a href="my.php?item=favorites&amp;tid=30721" id="ajax_favorite" onclick="ajaxmenu(event, this.id, 3000, 0)">收藏</a>
			<a href="my.php?item=subscriptions&amp;subadd=30721" id="ajax_subscription" onclick="ajaxmenu(event, this.id, 3000, null, 0)">订阅</a>
			<a href="misc.php?action=emailfriend&amp;tid=30721" id="emailfriend" onclick="ajaxmenu(event, this.id, 9000000, null, 0)">推荐</a>
				<a href="viewthread.php?action=printable&amp;tid=30721" target="_blank" class="notabs">打印</a>
				</span>
		<h1>哪位高人修改下ucweb，让它能用自建代理服务器。		</h1>
							<table id="pid367637" summary="pid367637" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6920" target="_blank" id="userinfo367637" class="dropmenu" onmouseover="showMenu(this.id)">淮月</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">翻墙痴迷者 雄性文青  @qhgy</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6920">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6920&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_0" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum367637" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=30721&page=1#pid367637', '话题链接已经复制到剪贴板')">1楼</strong>
													<em onclick="$('postmessage_367637').className='t_bigfont'">大</em>							<em onclick="$('postmessage_367637').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_367637').className='t_smallfont'">小</em>												发表于 2009-12-11 14:15&nbsp;																					<a href="viewthread.php?tid=30721&amp;page=1&amp;authorid=6920" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_0"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_0"></div><div id="ad_thread4_0"></div>
													<h2>哪位高人修改下ucweb，让它能用自建代理服务器。</h2>
						
						
																											<div id="postmessage_367637" class="t_msgfont">像opera mini一样。此事功德无量。</div>

							
							
							
							
															<div id="post_rate_div_367637"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo367637_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://twitter.com/qhgy" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=6920" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=30721&amp;repquote=367637&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 367637)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_0"></div>				</div>
			</td>
		</tr>
		</table>
		</div><div class="ad_column" id="ad_interthread"><a href="/viewthread.php?tid=54699" target="_blank" style="color:red;">1984bbs是一个非营利项目，它需要您的捐助！</font></a>		</div>
	<div class="mainbox viewthread">
			<table id="pid367646" summary="pid367646" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6920" target="_blank" id="userinfo367646" class="dropmenu" onmouseover="showMenu(this.id)">淮月</a></cite>
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
						<strong title="复制话题链接到剪贴板" id="postnum367646" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=30721&page=1#pid367646', '话题链接已经复制到剪贴板')">2楼</strong>
													<em onclick="$('postmessage_367646').className='t_bigfont'">大</em>							<em onclick="$('postmessage_367646').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_367646').className='t_smallfont'">小</em>												发表于 2009-12-11 14:18&nbsp;																					<a href="viewthread.php?tid=30721&amp;page=1&amp;authorid=6920" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_1"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_1"></div><div id="ad_thread4_1"></div>
						
						
																											<div id="postmessage_367646" class="t_msgfont">支持的来顶</div>

							
							
							
							
															<div id="post_rate_div_367646"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo367646_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://twitter.com/qhgy" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=6920" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=30721&amp;repquote=367646&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 367646)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_1"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid367665" summary="pid367665" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7002" target="_blank" id="userinfo367665" class="dropmenu" onmouseover="showMenu(this.id)">luugoo</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">拖延心理学：向与生俱来的行为顽症宣战】https://1984bbs.com/viewthread.php?tid=60185</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7002">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7002&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_2" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum367665" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=30721&page=1#pid367665', '话题链接已经复制到剪贴板')">3楼</strong>
													<em onclick="$('postmessage_367665').className='t_bigfont'">大</em>							<em onclick="$('postmessage_367665').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_367665').className='t_smallfont'">小</em>												发表于 2009-12-11 14:35&nbsp;																					<a href="viewthread.php?tid=30721&amp;page=1&amp;authorid=7002" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_2"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_2"></div><div id="ad_thread4_2"></div>
						
						
																											<div id="postmessage_367665" class="t_msgfont">没技术的来支持一个~</div>

							
							
							
							
															<div id="post_rate_div_367665"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo367665_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=7002" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=30721&amp;repquote=367665&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 367665)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_2"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid367698" summary="pid367698" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6556" target="_blank" id="userinfo367698" class="dropmenu" onmouseover="showMenu(this.id)">紫小指</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">思想放荡身体纯洁的外星姑娘；在大叔面前是伪Loli，在正太面前是御姐；温和派；@daisycao</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6556">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6556&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_3" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum367698" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=30721&page=1#pid367698', '话题链接已经复制到剪贴板')">4楼</strong>
													<em onclick="$('postmessage_367698').className='t_bigfont'">大</em>							<em onclick="$('postmessage_367698').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_367698').className='t_smallfont'">小</em>												发表于 2009-12-11 14:56&nbsp;																					<a href="viewthread.php?tid=30721&amp;page=1&amp;authorid=6556" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_3"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_3"></div><div id="ad_thread4_3"></div>
						
						
																											<div id="postmessage_367698" class="t_msgfont">　何为穿墙？我不能说太露了，不然又通不过审核。<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;墙是什么？中国有个墙，一些人或者组织不想你看到的东西都在墙后，你要看就得翻墙，<br />
好了，进正题。<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;测试机型N70（S60V2）。<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;应该三版也是如此，请自测。<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;工具：“汉化风暴”，少许手机流量，手指。<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;1·汉化风暴最新版为2.0是网友“雨中彩虹”汉化的。建议手机上wap.waptw.com设置机型搜索下载。<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;2·下载并安装汉化风暴，打开软件按照以下步骤操作。<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;3·左键-开始-十六进制-C/E/system/apps/Ucweb60-Ucweb60.app-确认键-直接修改文件。<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;4·进入了修改页面。左键-编辑-查找-十六进制-输入3900390039-确认。<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;5·关键的地方来了，确认后，找到了第一处，把最后几位方框框住的900修改为300，修改方法就是按上下左右键移动右边的小方框到数字上，确认键-输入数字就行了。<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;6·重复第4和第5步，加上前面一次一共是4次。<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;7·修改完毕后，按左键-保存-保存-右键-右键-退出汉化风暴。<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;8·重启手机。<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;9·UC菜单选择更新软件，提示 your&nbsp;&nbsp;version is the latest one 就表示修改成功了，如果显示“您的版本已是最新版”则修改失败，请重复上面步骤。<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;update：第三步十六进制后面之所以是C\E，是因为有人把UC安在C盘（电话），有些是在E盘（内存卡）。最新版的UC是UC7.0beta2的，C/E/system/apps/Ucweb60-Ucweb60.app这个文件大概是1M大小，注意识别。<br />
　　　　此文在QQ空间被光荣河蟹。我就发到新浪来了，方法是在一个手机论坛看来的，但是写得很迷糊，我整理了下，尽量写得通俗详细。欢迎各位推友ＦＯ我　＠shortimes .<br />
<br />
转自：<a href="http://blog.sina.com.cn/s/blog_495c6f1a0100fgn9.html" target="_blank">http://blog.sina.com.cn/s/blog_495c6f1a0100fgn9.html</a><br />
======================================================================================<br />
<br />
前两天看到的，还灭来得及试，有人有空的话就试下吧。</div>

							
							
							
							
															<div id="post_rate_div_367698"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo367698_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://http://" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=6556" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=30721&amp;repquote=367698&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 367698)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_3"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid368215" summary="pid368215" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6920" target="_blank" id="userinfo368215" class="dropmenu" onmouseover="showMenu(this.id)">淮月</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">翻墙痴迷者 雄性文青  @qhgy</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6920">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6920&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_4" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum368215" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=30721&page=1#pid368215', '话题链接已经复制到剪贴板')">5楼</strong>
													<em onclick="$('postmessage_368215').className='t_bigfont'">大</em>							<em onclick="$('postmessage_368215').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_368215').className='t_smallfont'">小</em>												发表于 2009-12-11 20:18&nbsp;																					<a href="viewthread.php?tid=30721&amp;page=1&amp;authorid=6920" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_4"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_4"></div><div id="ad_thread4_4"></div>
						
						
																											<div id="postmessage_368215" class="t_msgfont">楼上方法已经失效&nbsp;&nbsp;uc英文版能翻墙时这方法才管用</div>

							
							
							
							
															<div id="post_rate_div_368215"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo368215_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://twitter.com/qhgy" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=6920" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=30721&amp;repquote=368215&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 368215)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_4"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid368350" summary="pid368350" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10670" target="_blank" id="userinfo368350" class="dropmenu" onmouseover="showMenu(this.id)">小小白蚁</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10670">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10670&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_5" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum368350" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=30721&page=1#pid368350', '话题链接已经复制到剪贴板')">6楼</strong>
													<em onclick="$('postmessage_368350').className='t_bigfont'">大</em>							<em onclick="$('postmessage_368350').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_368350').className='t_smallfont'">小</em>												发表于 2009-12-11 22:02&nbsp;																					<a href="viewthread.php?tid=30721&amp;page=1&amp;authorid=10670" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_5"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_5"></div><div id="ad_thread4_5"></div>
						
						
																											<div id="postmessage_368350" class="t_msgfont">怀念uc英文版啊~现在手机上都没东西翻墙了！</div>

							
							
							
							
															<div id="post_rate_div_368350"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo368350_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=10670" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=30721&amp;repquote=368350&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 368350)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_5"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid369179" summary="pid369179" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=956" target="_blank" id="userinfo369179" class="dropmenu" onmouseover="showMenu(this.id)">joe7eoj</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=956">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=956&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_6" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum369179" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=30721&page=1#pid369179', '话题链接已经复制到剪贴板')">7楼</strong>
													<em onclick="$('postmessage_369179').className='t_bigfont'">大</em>							<em onclick="$('postmessage_369179').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_369179').className='t_smallfont'">小</em>												发表于 2009-12-12 14:36&nbsp;																					<a href="viewthread.php?tid=30721&amp;page=1&amp;authorid=956" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_6"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_6"></div><div id="ad_thread4_6"></div>
						
						
																											<div id="postmessage_369179" class="t_msgfont">uc英文基本废了。。。</div>

							
							
							
							
															<div id="post_rate_div_369179"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo369179_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=956" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=30721&amp;repquote=369179&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 369179)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_6"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid370383" summary="pid370383" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10282" target="_blank" id="userinfo370383" class="dropmenu" onmouseover="showMenu(this.id)">北极燕鸥</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">长期在阳光下潜伏</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10282">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10282&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_7" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum370383" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=30721&page=1#pid370383', '话题链接已经复制到剪贴板')">8楼</strong>
													<em onclick="$('postmessage_370383').className='t_bigfont'">大</em>							<em onclick="$('postmessage_370383').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_370383').className='t_smallfont'">小</em>												发表于 2009-12-13 08:21&nbsp;																					<a href="viewthread.php?tid=30721&amp;page=1&amp;authorid=10282" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_7"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_7"></div><div id="ad_thread4_7"></div>
						
						
																											<div id="postmessage_370383" class="t_msgfont">不知道鲨鱼还能撑多久</div>

							
							
							
							
															<div id="post_rate_div_370383"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo370383_menu" style="display: none;">
										<div class="imicons">
													<a target='_blank' href='http://settings.messenger.live.com/Conversation/IMMe.aspx?invitee=lxiaozhang@hotmail.com&mkt=zh-cn'><img style='border-style: none;' src='http://messenger.services.live.com/users/lxiaozhang@hotmail.com/presenceimage?mkt=zh-cn' width='16' height='16' /></a>
																																			</div>
										<dl></dl>
										<p><a href="space.php?uid=10282" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=30721&amp;repquote=370383&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 370383)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_7"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid370744" summary="pid370744" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10686" target="_blank" id="userinfo370744" class="dropmenu" onmouseover="showMenu(this.id)">周扒皮</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10686">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10686&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_8" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum370744" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=30721&page=1#pid370744', '话题链接已经复制到剪贴板')">9楼</strong>
													<em onclick="$('postmessage_370744').className='t_bigfont'">大</em>							<em onclick="$('postmessage_370744').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_370744').className='t_smallfont'">小</em>												发表于 2009-12-13 12:55&nbsp;																					<a href="viewthread.php?tid=30721&amp;page=1&amp;authorid=10686" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_8"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_8"></div><div id="ad_thread4_8"></div>
						
						
																											<div id="postmessage_370744" class="t_msgfont">已经换用opera mini了～～～</div>

							
							
							
							
															<div id="post_rate_div_370744"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo370744_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=10686" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=30721&amp;repquote=370744&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 370744)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_8"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid371721" summary="pid371721" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10319" target="_blank" id="userinfo371721" class="dropmenu" onmouseover="showMenu(this.id)">马蜂</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10319">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10319&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_9" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum371721" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=30721&page=1#pid371721', '话题链接已经复制到剪贴板')">10楼</strong>
													<em onclick="$('postmessage_371721').className='t_bigfont'">大</em>							<em onclick="$('postmessage_371721').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_371721').className='t_smallfont'">小</em>												发表于 2009-12-13 22:16&nbsp;																					<a href="viewthread.php?tid=30721&amp;page=1&amp;authorid=10319" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_9"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_9"></div><div id="ad_thread4_9"></div>
						
						
																											<div id="postmessage_371721" class="t_msgfont">UC翻墙新法：先找国外匿名的HTTP 代理，这个网上有很多。然后设置手机网络连接，索爱手机设置方法是：手机设定-连接-互联网设定-互联网模式，新建一个模式，名字随便，如GPRS，然后选择这个新建的模式，再按更多-设置，“是否用代理”选是，之后在代地址和端口号填入网上找到的代理<br />
此方法为推友 ＠supernetizen 原创，因为我用黑莓就没有测试，功效未知。</div>

							
							
							
							
															<div id="post_rate_div_371721"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo371721_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=10319" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=30721&amp;repquote=371721&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 371721)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_9"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid373909" summary="pid373909" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6920" target="_blank" id="userinfo373909" class="dropmenu" onmouseover="showMenu(this.id)">淮月</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">翻墙痴迷者 雄性文青  @qhgy</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6920">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6920&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_10" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum373909" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=30721&page=1#pid373909', '话题链接已经复制到剪贴板')">11楼</strong>
													<em onclick="$('postmessage_373909').className='t_bigfont'">大</em>							<em onclick="$('postmessage_373909').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_373909').className='t_smallfont'">小</em>												发表于 2009-12-15 00:36&nbsp;																					<a href="viewthread.php?tid=30721&amp;page=1&amp;authorid=6920" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_10"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_10"></div><div id="ad_thread4_10"></div>
						
						
																											<div id="postmessage_373909" class="t_msgfont">顶起&nbsp;&nbsp;盼高人</div>

							
							
							
							
															<div id="post_rate_div_373909"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo373909_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://twitter.com/qhgy" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=6920" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=30721&amp;repquote=373909&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 373909)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_10"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid379741" summary="pid379741" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=11067" target="_blank" id="userinfo379741" class="dropmenu" onmouseover="showMenu(this.id)">残月</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">残月</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=11067">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=11067&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_11" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum379741" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=30721&page=1#pid379741', '话题链接已经复制到剪贴板')">12楼</strong>
													<em onclick="$('postmessage_379741').className='t_bigfont'">大</em>							<em onclick="$('postmessage_379741').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_379741').className='t_smallfont'">小</em>												发表于 2009-12-17 22:03&nbsp;																					<a href="viewthread.php?tid=30721&amp;page=1&amp;authorid=11067" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_11"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_11"></div><div id="ad_thread4_11"></div>
						
						
																											<div id="postmessage_379741" class="t_msgfont">顶一个&nbsp; &nbsp; 求高人支招。</div>

							
							
							
							
															<div id="post_rate_div_379741"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo379741_menu" style="display: none;">
										<div class="imicons">
												<a href="http://wpa.qq.com/msgrd?V=1&amp;Uin=421238162&amp;Site=1984bbs.com&amp;Menu=yes" target="_blank"><img src="images/default/qq.gif" alt="QQ" /></a>																							</div>
										<dl></dl>
										<p><a href="space.php?uid=11067" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=30721&amp;repquote=379741&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 379741)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_11"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid389322" summary="pid389322" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10760" target="_blank" id="userinfo389322" class="dropmenu" onmouseover="showMenu(this.id)">自由风</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10760">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10760&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_12" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum389322" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=30721&page=1#pid389322', '话题链接已经复制到剪贴板')">13楼</strong>
													<em onclick="$('postmessage_389322').className='t_bigfont'">大</em>							<em onclick="$('postmessage_389322').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_389322').className='t_smallfont'">小</em>												发表于 2009-12-22 21:12&nbsp;																					<a href="viewthread.php?tid=30721&amp;page=1&amp;authorid=10760" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_12"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_12"></div><div id="ad_thread4_12"></div>
						
						
																											<div id="postmessage_389322" class="t_msgfont">我已经把几乎所有网上现存的方法都试过了，折腾一整天，两眼冒金星了，，，，，看来都不行，但是UC7的界面是最好的，不能翻墙可惜了。顶起，中国网民是最厉害的，高人哪，快来吧！！！！！</div>

							
							
							
							
															<div id="post_rate_div_389322"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo389322_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://www.yangtienan.net" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=10760" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=30721&amp;repquote=389322&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 389322)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_12"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid391144" summary="pid391144" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 <a name="lastpost"></a>					<cite>											<a href="space.php?uid=10113" target="_blank" id="userinfo391144" class="dropmenu" onmouseover="showMenu(this.id)">BillGates</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">C:\Windows\Japanese Operating System\Adult video</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10113">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10113&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_13" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum391144" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=30721&page=1#pid391144', '话题链接已经复制到剪贴板')">14楼</strong>
													<em onclick="$('postmessage_391144').className='t_bigfont'">大</em>							<em onclick="$('postmessage_391144').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_391144').className='t_smallfont'">小</em>												发表于 2009-12-23 18:16&nbsp;																					<a href="viewthread.php?tid=30721&amp;page=1&amp;authorid=10113" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_13"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_13"></div><div id="ad_thread4_13"></div>
													<h2>回复 1楼 淮月 的话题</h2>
						
						
																											<div id="postmessage_391144" class="t_msgfont">直接使用opm不就是了,为什么要使用uc的呢?</div>

							
							
							
							
															<div id="post_rate_div_391144"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo391144_menu" style="display: none;">
										<div class="imicons">
													<a target='_blank' href='http://settings.messenger.live.com/Conversation/IMMe.aspx?invitee=Bill.Gates@hotmail.de&mkt=zh-cn'><img style='border-style: none;' src='http://messenger.services.live.com/users/Bill.Gates@hotmail.de/presenceimage?mkt=zh-cn' width='16' height='16' /></a>
																																			</div>
										<dl></dl>
											<p><a href="http://www.microsoft.com" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=10113" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=30721&amp;repquote=391144&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 391144)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_13"></div>				</div>
			</td>
		</tr>
		</table>
		</div>
</form>





<div class="pages_btns">
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=30721&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=30721&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
				<span class="postbtn" id="newspecialtmp" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=30721&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

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

	<form method="post" id="postform" action="post.php?action=reply&amp;fid=26&amp;tid=30721&amp;extra=&amp;replysubmit=yes" onSubmit="return validate(this)">
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
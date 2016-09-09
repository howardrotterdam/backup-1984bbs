<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<title>我做的论坛反监测工具，适用于Discuz论坛 - 国家局域网研究所 -  1984bbs.com </title>
<meta name="keywords" content="" />
<meta name="MSSmartTagsPreventParsing" content="True" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<link rel="archives" title="1984bbs.com" href="https://1984bbs.com/archiver/" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_viewthread.css" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_common.css" />
<script type="text/javascript">
	var discuz_uid = 13019;var IMGDIR = 'images/default';var attackevasive = '0';var gid = 0;var STYLEID = '1';
	gid = parseInt('3');var fid = parseInt('26');var tid = parseInt('7420');
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
			<p><a href="index.php" id="forumlist" onmouseover="showMenu(this.id)" class="dropmenu">1984bbs.com</a> &raquo; <a href="forumdisplay.php?fid=26">国家局域网研究所</a> &raquo; 我做的论坛反监测工具，适用于Discuz论坛</p>
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
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=7420&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=7420&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
				<span class="postbtn" id="newspecial" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=7420&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

	<ul class="popupmenu_popup newspecialmenu" id="newspecial_menu" style="display: none">
		<li><a href="post.php?action=newthread&amp;fid=26&amp;extra=">发新话题</a></li>
		<li class="poll"><a href="post.php?action=newthread&amp;fid=26&amp;extra=&amp;special=1">发布投票</a></li>													</ul>

<form method="post" name="modactions">
	<input type="hidden" name="formhash" value="823c9fa2" />
	<div class="mainbox viewthread">
		<span class="headactions">
					<a href="my.php?item=favorites&amp;tid=7420" id="ajax_favorite" onclick="ajaxmenu(event, this.id, 3000, 0)">收藏</a>
			<a href="my.php?item=subscriptions&amp;subadd=7420" id="ajax_subscription" onclick="ajaxmenu(event, this.id, 3000, null, 0)">订阅</a>
			<a href="misc.php?action=emailfriend&amp;tid=7420" id="emailfriend" onclick="ajaxmenu(event, this.id, 9000000, null, 0)">推荐</a>
				<a href="viewthread.php?action=printable&amp;tid=7420" target="_blank" class="notabs">打印</a>
				</span>
		<h1>我做的论坛反监测工具，适用于Discuz论坛		</h1>
							<table id="pid56948" summary="pid56948" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=5449" target="_blank" id="userinfo56948" class="dropmenu" onmouseover="showMenu(this.id)">huge</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=5449">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=5449&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_0" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum56948" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=7420&page=1#pid56948', '话题链接已经复制到剪贴板')">1楼</strong>
													<em onclick="$('postmessage_56948').className='t_bigfont'">大</em>							<em onclick="$('postmessage_56948').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_56948').className='t_smallfont'">小</em>												发表于 2009-3-19 19:17&nbsp;																					<a href="viewthread.php?tid=7420&amp;page=1&amp;authorid=5449" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_0"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_0"></div><div id="ad_thread4_0"></div>
													<h2>我做的论坛反监测工具，适用于Discuz论坛</h2>
						
						
																											<div id="postmessage_56948" class="t_msgfont">看看我们是不是需要装一个。我可以帮忙安装。<br />
<br />
如果论坛在国内，那么机房出口都有监测程序，会自动监测一些关键字。<br />
<br />
如果论坛在国外，那就更惨了，进出中国都有监测。<br />
<br />
我的工具可以让这些监测程序找不到关键字，成为瞎子，使一篇充满关键字的页面成为一个“合法”页面。<br />
<br />
<a href="http://blog.sina.com.cn/s/blog_4888f5070100cez5.html" target="_blank">http://blog.sina.com.cn/s/blog_4888f5070100cez5.html</a></div>

							
							
							
							
															<div id="post_rate_div_56948"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo56948_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=5449" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=7420&amp;repquote=56948&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 56948)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_0"></div>				</div>
			</td>
		</tr>
		</table>
		</div><div class="ad_column" id="ad_interthread"><a href="/viewthread.php?tid=54699" target="_blank" style="color:red;">1984bbs是一个非营利项目，它需要您的捐助！</font></a>		</div>
	<div class="mainbox viewthread">
			<table id="pid56963" summary="pid56963" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2770" target="_blank" id="userinfo56963" class="dropmenu" onmouseover="showMenu(this.id)">蟹帅</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">国保大兄弟你好 </p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2770">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2770&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_1" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum56963" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=7420&page=1#pid56963', '话题链接已经复制到剪贴板')">2楼</strong>
													<em onclick="$('postmessage_56963').className='t_bigfont'">大</em>							<em onclick="$('postmessage_56963').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_56963').className='t_smallfont'">小</em>												发表于 2009-3-19 19:32&nbsp;																					<a href="viewthread.php?tid=7420&amp;page=1&amp;authorid=2770" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_1"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_1"></div><div id="ad_thread4_1"></div>
						
						
																											<div id="postmessage_56963" class="t_msgfont">处女贴，破之~~</div>

							
							
							
							
															<div id="post_rate_div_56963"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo56963_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://is.gd/fDzMS" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=2770" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=7420&amp;repquote=56963&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 56963)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_1"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid56966" summary="pid56966" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2752" target="_blank" id="userinfo56966" class="dropmenu" onmouseover="showMenu(this.id)">Fuchicom</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">讓網絡和政府一樣高尚和諧</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2752">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2752&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_2" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum56966" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=7420&page=1#pid56966', '话题链接已经复制到剪贴板')">3楼</strong>
													<em onclick="$('postmessage_56966').className='t_bigfont'">大</em>							<em onclick="$('postmessage_56966').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_56966').className='t_smallfont'">小</em>												发表于 2009-3-19 19:37&nbsp;																					<a href="viewthread.php?tid=7420&amp;page=1&amp;authorid=2752" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_2"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_2"></div><div id="ad_thread4_2"></div>
						
						
																											<div id="postmessage_56966" class="t_msgfont">囧，LZ是胡戈啊。</div>

							
							
							
							
															<div id="post_rate_div_56966"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo56966_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=2752" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=7420&amp;repquote=56966&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 56966)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_2"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid56968" summary="pid56968" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2557" target="_blank" id="userinfo56968" class="dropmenu" onmouseover="showMenu(this.id)">阑夕</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2557">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2557&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_3" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum56968" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=7420&page=1#pid56968', '话题链接已经复制到剪贴板')">4楼</strong>
													<em onclick="$('postmessage_56968').className='t_bigfont'">大</em>							<em onclick="$('postmessage_56968').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_56968').className='t_smallfont'">小</em>												发表于 2009-3-19 19:38&nbsp;																					<a href="viewthread.php?tid=7420&amp;page=1&amp;authorid=2557" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_3"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_3"></div><div id="ad_thread4_3"></div>
						
						
																											<div id="postmessage_56968" class="t_msgfont">牛B</div>

							
							
							
							
															<div id="post_rate_div_56968"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo56968_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=2557" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=7420&amp;repquote=56968&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 56968)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_3"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid56970" summary="pid56970" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2557" target="_blank" id="userinfo56970" class="dropmenu" onmouseover="showMenu(this.id)">阑夕</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2557">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2557&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_4" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum56970" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=7420&page=1#pid56970', '话题链接已经复制到剪贴板')">5楼</strong>
													<em onclick="$('postmessage_56970').className='t_bigfont'">大</em>							<em onclick="$('postmessage_56970').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_56970').className='t_smallfont'">小</em>												发表于 2009-3-19 19:39&nbsp;																					<a href="viewthread.php?tid=7420&amp;page=1&amp;authorid=2557" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_4"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_4"></div><div id="ad_thread4_4"></div>
						
						
																											<div id="postmessage_56970" class="t_msgfont">我靠？<br />
楼主真是胡戈！？</div>

							
							
							
							
															<div id="post_rate_div_56970"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo56970_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=2557" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=7420&amp;repquote=56970&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 56970)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_4"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid56973" summary="pid56973" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=4872" target="_blank" id="userinfo56973" class="dropmenu" onmouseover="showMenu(this.id)">冻结的黎明</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=4872">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=4872&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_5" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum56973" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=7420&page=1#pid56973', '话题链接已经复制到剪贴板')">6楼</strong>
													<em onclick="$('postmessage_56973').className='t_bigfont'">大</em>							<em onclick="$('postmessage_56973').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_56973').className='t_smallfont'">小</em>												发表于 2009-3-19 19:46&nbsp;																					<a href="viewthread.php?tid=7420&amp;page=1&amp;authorid=4872" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_5"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_5"></div><div id="ad_thread4_5"></div>
						
						
																											<div id="postmessage_56973" class="t_msgfont">胡哥改技术流了?</div>

							
							
							
							
															<div id="post_rate_div_56973"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo56973_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=4872" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=7420&amp;repquote=56973&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 56973)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_5"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid56977" summary="pid56977" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2213" target="_blank" id="userinfo56977" class="dropmenu" onmouseover="showMenu(this.id)">核子力量</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">Twitter.com/hzpower</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2213">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2213&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_6" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum56977" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=7420&page=1#pid56977', '话题链接已经复制到剪贴板')">7楼</strong>
													<em onclick="$('postmessage_56977').className='t_bigfont'">大</em>							<em onclick="$('postmessage_56977').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_56977').className='t_smallfont'">小</em>												发表于 2009-3-19 19:48&nbsp;																					<a href="viewthread.php?tid=7420&amp;page=1&amp;authorid=2213" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_6"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_6"></div><div id="ad_thread4_6"></div>
						
						
																											<div id="postmessage_56977" class="t_msgfont">呵，胡戈也来这了</div>

							
							
							
							
															<div id="post_rate_div_56977"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo56977_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://twitter.com/hzpower" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=2213" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=7420&amp;repquote=56977&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 56977)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_6"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid56980" summary="pid56980" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2221" target="_blank" id="userinfo56980" class="dropmenu" onmouseover="showMenu(this.id)">巫婆</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">酒局局长兼饭局书记</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2221">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2221&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_7" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum56980" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=7420&page=1#pid56980', '话题链接已经复制到剪贴板')">8楼</strong>
													<em onclick="$('postmessage_56980').className='t_bigfont'">大</em>							<em onclick="$('postmessage_56980').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_56980').className='t_smallfont'">小</em>												发表于 2009-3-19 19:54&nbsp;																					<a href="viewthread.php?tid=7420&amp;page=1&amp;authorid=2221" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_7"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_7"></div><div id="ad_thread4_7"></div>
						
						
																											<div id="postmessage_56980" class="t_msgfont">不恶搞，改行搞技术了。</div>

							
							
							
							
															<div id="post_rate_div_56980"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo56980_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=2221" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=7420&amp;repquote=56980&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 56980)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_7"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid56981" summary="pid56981" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2221" target="_blank" id="userinfo56981" class="dropmenu" onmouseover="showMenu(this.id)">巫婆</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">酒局局长兼饭局书记</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2221">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2221&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_8" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum56981" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=7420&page=1#pid56981', '话题链接已经复制到剪贴板')">9楼</strong>
													<em onclick="$('postmessage_56981').className='t_bigfont'">大</em>							<em onclick="$('postmessage_56981').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_56981').className='t_smallfont'">小</em>												发表于 2009-3-19 19:56&nbsp;																					<a href="viewthread.php?tid=7420&amp;page=1&amp;authorid=2221" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_8"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_8"></div><div id="ad_thread4_8"></div>
						
						
																											<div id="postmessage_56981" class="t_msgfont">下来用一下，尽管我的论坛是教育类的。</div>

							
							
							
							
															<div id="post_rate_div_56981"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo56981_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=2221" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=7420&amp;repquote=56981&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 56981)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_8"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid57092" summary="pid57092" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7" target="_blank" id="userinfo57092" class="dropmenu" onmouseover="showMenu(this.id)">张书记</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">http://twitter.com/SecretaryZhang</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_9" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum57092" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=7420&page=1#pid57092', '话题链接已经复制到剪贴板')">10楼</strong>
													<em onclick="$('postmessage_57092').className='t_bigfont'">大</em>							<em onclick="$('postmessage_57092').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_57092').className='t_smallfont'">小</em>												发表于 2009-3-19 22:25&nbsp;																					<a href="viewthread.php?tid=7420&amp;page=1&amp;authorid=7" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_9"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_9"></div><div id="ad_thread4_9"></div>
						
						
																											<div id="postmessage_57092" class="t_msgfont">前来拜见胡总。</div>

							
							
							
							
															<div id="post_rate_div_57092"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo57092_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=7" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=7420&amp;repquote=57092&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 57092)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_9"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid57098" summary="pid57098" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1960" target="_blank" id="userinfo57098" class="dropmenu" onmouseover="showMenu(this.id)">库存袈裟</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">@bruceku 想象力比知识更重要。</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1960">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1960&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_10" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum57098" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=7420&page=1#pid57098', '话题链接已经复制到剪贴板')">11楼</strong>
													<em onclick="$('postmessage_57098').className='t_bigfont'">大</em>							<em onclick="$('postmessage_57098').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_57098').className='t_smallfont'">小</em>												发表于 2009-3-19 22:28&nbsp;																					<a href="viewthread.php?tid=7420&amp;page=1&amp;authorid=1960" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_10"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_10"></div><div id="ad_thread4_10"></div>
						
						
																											<div id="postmessage_57098" class="t_msgfont">胡core这玩意揍是JS加密的干活？？<br />
 我测试下装个玩玩。谢谢老！</div>

							
							
							
							
															<div id="post_rate_div_57098"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo57098_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1960" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=7420&amp;repquote=57098&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 57098)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_10"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid57109" summary="pid57109" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=3305" target="_blank" id="userinfo57109" class="dropmenu" onmouseover="showMenu(this.id)">your_j</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">小枯：真相只有n个！</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=3305">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=3305&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_11" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum57109" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=7420&page=1#pid57109', '话题链接已经复制到剪贴板')">12楼</strong>
													<em onclick="$('postmessage_57109').className='t_bigfont'">大</em>							<em onclick="$('postmessage_57109').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_57109').className='t_smallfont'">小</em>												发表于 2009-3-19 22:38&nbsp;																					<a href="viewthread.php?tid=7420&amp;page=1&amp;authorid=3305" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_11"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_11"></div><div id="ad_thread4_11"></div>
						
						
																											<div id="postmessage_57109" class="t_msgfont">书记，上茶。</div>

							
							
							
							
															<div id="post_rate_div_57109"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo57109_menu" style="display: none;">
										<div class="imicons">
													<a target='_blank' href='http://settings.messenger.live.com/Conversation/IMMe.aspx?invitee=your_j@hotmail.com&mkt=zh-cn'><img style='border-style: none;' src='http://messenger.services.live.com/users/your_j@hotmail.com/presenceimage?mkt=zh-cn' width='16' height='16' /></a>
																																			</div>
										<dl></dl>
										<p><a href="space.php?uid=3305" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=7420&amp;repquote=57109&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 57109)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_11"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid57225" summary="pid57225" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2240" target="_blank" id="userinfo57225" class="dropmenu" onmouseover="showMenu(this.id)">14k</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2240">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2240&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_12" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum57225" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=7420&page=1#pid57225', '话题链接已经复制到剪贴板')">13楼</strong>
													<em onclick="$('postmessage_57225').className='t_bigfont'">大</em>							<em onclick="$('postmessage_57225').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_57225').className='t_smallfont'">小</em>												发表于 2009-3-20 01:03&nbsp;																					<a href="viewthread.php?tid=7420&amp;page=1&amp;authorid=2240" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_12"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_12"></div><div id="ad_thread4_12"></div>
						
						
																											<div id="postmessage_57225" class="t_msgfont">小组先试验，我再用。谢谢老大！</div>

							
							
							
							
															<div id="post_rate_div_57225"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo57225_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=2240" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=7420&amp;repquote=57225&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 57225)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_12"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid57608" summary="pid57608" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2154" target="_blank" id="userinfo57608" class="dropmenu" onmouseover="showMenu(this.id)">伯通</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">少壮不努力 长大搞IT</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2154">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2154&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_13" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum57608" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=7420&page=1#pid57608', '话题链接已经复制到剪贴板')">14楼</strong>
													<em onclick="$('postmessage_57608').className='t_bigfont'">大</em>							<em onclick="$('postmessage_57608').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_57608').className='t_smallfont'">小</em>												发表于 2009-3-20 14:29&nbsp;																					<a href="viewthread.php?tid=7420&amp;page=1&amp;authorid=2154" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_13"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_13"></div><div id="ad_thread4_13"></div>
						
						
																											<div id="postmessage_57608" class="t_msgfont">HUGE HUGEGE……</div>

							
							
							
							
															<div id="post_rate_div_57608"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo57608_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=2154" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=7420&amp;repquote=57608&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 57608)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_13"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid58192" summary="pid58192" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2868" target="_blank" id="userinfo58192" class="dropmenu" onmouseover="showMenu(this.id)">用裤衩思考</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">路边社社员</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2868">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2868&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_14" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum58192" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=7420&page=1#pid58192', '话题链接已经复制到剪贴板')">15楼</strong>
													<em onclick="$('postmessage_58192').className='t_bigfont'">大</em>							<em onclick="$('postmessage_58192').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_58192').className='t_smallfont'">小</em>												发表于 2009-3-21 12:50&nbsp;																					<a href="viewthread.php?tid=7420&amp;page=1&amp;authorid=2868" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_14"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_14"></div><div id="ad_thread4_14"></div>
						
						
																											<div id="postmessage_58192" class="t_msgfont">拜见胡总，问安。</div>

							
							
							
							
															<div id="post_rate_div_58192"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo58192_menu" style="display: none;">
										<div class="imicons">
													<a target='_blank' href='http://settings.messenger.live.com/Conversation/IMMe.aspx?invitee=specialword@hotmail.com&mkt=zh-cn'><img style='border-style: none;' src='http://messenger.services.live.com/users/specialword@hotmail.com/presenceimage?mkt=zh-cn' width='16' height='16' /></a>
												<a href="http://wpa.qq.com/msgrd?V=1&amp;Uin=5191595&amp;Site=1984bbs.com&amp;Menu=yes" target="_blank"><img src="images/default/qq.gif" alt="QQ" /></a>																							</div>
										<dl></dl>
										<p><a href="space.php?uid=2868" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=7420&amp;repquote=58192&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 58192)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_14"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid58536" summary="pid58536" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2971" target="_blank" id="userinfo58536" class="dropmenu" onmouseover="showMenu(this.id)">luckyray</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">不明真相</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2971">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2971&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_15" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum58536" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=7420&page=1#pid58536', '话题链接已经复制到剪贴板')">16楼</strong>
													<em onclick="$('postmessage_58536').className='t_bigfont'">大</em>							<em onclick="$('postmessage_58536').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_58536').className='t_smallfont'">小</em>												发表于 2009-3-22 01:40&nbsp;																					<a href="viewthread.php?tid=7420&amp;page=1&amp;authorid=2971" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_15"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_15"></div><div id="ad_thread4_15"></div>
						
						
																											<div id="postmessage_58536" class="t_msgfont">小组处处有高人啊，开心</div>

							
							
							
							
															<div id="post_rate_div_58536"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo58536_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=2971" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=7420&amp;repquote=58536&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 58536)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_15"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid58559" summary="pid58559" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1296" target="_blank" id="userinfo58559" class="dropmenu" onmouseover="showMenu(this.id)">低调の华丽</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">伪摇滚青年</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1296">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1296&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_16" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum58559" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=7420&page=1#pid58559', '话题链接已经复制到剪贴板')">17楼</strong>
													<em onclick="$('postmessage_58559').className='t_bigfont'">大</em>							<em onclick="$('postmessage_58559').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_58559').className='t_smallfont'">小</em>												发表于 2009-3-22 07:39&nbsp;																					<a href="viewthread.php?tid=7420&amp;page=1&amp;authorid=1296" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_16"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_16"></div><div id="ad_thread4_16"></div>
						
						
																											<div id="postmessage_58559" class="t_msgfont">能不能做个dz7.0的，貌似现在的论坛版本都升级啦。<br />
胡Core是我的偶像，膜拜啊！</div>

							
							
							
							
															<div id="post_rate_div_58559"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo58559_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1296" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=7420&amp;repquote=58559&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 58559)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_16"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid58584" summary="pid58584" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=5404" target="_blank" id="userinfo58584" class="dropmenu" onmouseover="showMenu(this.id)">江南的雨季</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">My Blog:Jitler.Com  Twitter:@yxzjn</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=5404">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=5404&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_17" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum58584" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=7420&page=1#pid58584', '话题链接已经复制到剪贴板')">18楼</strong>
													<em onclick="$('postmessage_58584').className='t_bigfont'">大</em>							<em onclick="$('postmessage_58584').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_58584').className='t_smallfont'">小</em>												发表于 2009-3-22 09:13&nbsp;																					<a href="viewthread.php?tid=7420&amp;page=1&amp;authorid=5404" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_17"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_17"></div><div id="ad_thread4_17"></div>
						
						
																											<div id="postmessage_58584" class="t_msgfont">唉...用于 Discuz 6.0，GBK编码..</div>

							
							
							
							
															<div id="post_rate_div_58584"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo58584_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://jitler.com" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=5404" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=7420&amp;repquote=58584&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 58584)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_17"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid59135" summary="pid59135" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2240" target="_blank" id="userinfo59135" class="dropmenu" onmouseover="showMenu(this.id)">14k</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2240">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2240&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_18" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum59135" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=7420&page=1#pid59135', '话题链接已经复制到剪贴板')">19楼</strong>
													<em onclick="$('postmessage_59135').className='t_bigfont'">大</em>							<em onclick="$('postmessage_59135').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_59135').className='t_smallfont'">小</em>												发表于 2009-3-23 01:48&nbsp;																					<a href="viewthread.php?tid=7420&amp;page=1&amp;authorid=2240" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_18"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_18"></div><div id="ad_thread4_18"></div>
						
						
																											<div id="postmessage_59135" class="t_msgfont">我们网站出现一种非常牛逼的河蟹状态。一个域名子目录被屏蔽，之后我们使用其他子域名又可以使用。但是网站出现一个情况，有些帖子进去后会出现图片是红叉，之后出来后就会出现整个网站打不开，链接不上。稍等片刻后再上，又可以打开网站。请问高人们这是什么原因。谢谢。。</div>

							
							
							
							
															<div id="post_rate_div_59135"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo59135_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=2240" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=7420&amp;repquote=59135&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 59135)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_18"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid59842" summary="pid59842" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2930" target="_blank" id="userinfo59842" class="dropmenu" onmouseover="showMenu(this.id)">SrAcer</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">党强加于人的世界观在无法理解它的人们那里最容易被接受。——《１９８４》</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2930">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2930&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_19" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum59842" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=7420&page=1#pid59842', '话题链接已经复制到剪贴板')">20楼</strong>
													<em onclick="$('postmessage_59842').className='t_bigfont'">大</em>							<em onclick="$('postmessage_59842').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_59842').className='t_smallfont'">小</em>												发表于 2009-3-23 23:39&nbsp;																					<a href="viewthread.php?tid=7420&amp;page=1&amp;authorid=2930" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_19"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_19"></div><div id="ad_thread4_19"></div>
						
						
																											<div id="postmessage_59842" class="t_msgfont">用了技术不高深的巧办法啊，妙哉妙哉。嘻嘻</div>

							
							
							
							
															<div id="post_rate_div_59842"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo59842_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=2930" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=7420&amp;repquote=59842&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 59842)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_19"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid61306" summary="pid61306" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=3785" target="_blank" id="userinfo61306" class="dropmenu" onmouseover="showMenu(this.id)">xu198601</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=3785">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=3785&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_20" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum61306" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=7420&page=1#pid61306', '话题链接已经复制到剪贴板')">21楼</strong>
													<em onclick="$('postmessage_61306').className='t_bigfont'">大</em>							<em onclick="$('postmessage_61306').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_61306').className='t_smallfont'">小</em>												发表于 2009-3-25 16:29&nbsp;																					<a href="viewthread.php?tid=7420&amp;page=1&amp;authorid=3785" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_20"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_20"></div><div id="ad_thread4_20"></div>
						
						
																											<div id="postmessage_61306" class="t_msgfont">确实是很强大的工具</div>

							
							
							
							
															<div id="post_rate_div_61306"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo61306_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=3785" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=7420&amp;repquote=61306&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 61306)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_20"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid61573" summary="pid61573" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2908" target="_blank" id="userinfo61573" class="dropmenu" onmouseover="showMenu(this.id)">Geona</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">做人少做亏心事，路见不平吃一惊。</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2908">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2908&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_21" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum61573" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=7420&page=1#pid61573', '话题链接已经复制到剪贴板')">22楼</strong>
													<em onclick="$('postmessage_61573').className='t_bigfont'">大</em>							<em onclick="$('postmessage_61573').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_61573').className='t_smallfont'">小</em>												发表于 2009-3-25 20:46&nbsp;																					<a href="viewthread.php?tid=7420&amp;page=1&amp;authorid=2908" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_21"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_21"></div><div id="ad_thread4_21"></div>
						
						
																											<div id="postmessage_61573" class="t_msgfont">唉..读的书少..不懂z....</div>

							
							
							
							
															<div id="post_rate_div_61573"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo61573_menu" style="display: none;">
										<div class="imicons">
												<a href="http://wpa.qq.com/msgrd?V=1&amp;Uin=147850034&amp;Site=1984bbs.com&amp;Menu=yes" target="_blank"><img src="images/default/qq.gif" alt="QQ" /></a>																							</div>
										<dl></dl>
										<p><a href="space.php?uid=2908" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=7420&amp;repquote=61573&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 61573)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_21"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid62969" summary="pid62969" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=4176" target="_blank" id="userinfo62969" class="dropmenu" onmouseover="showMenu(this.id)">天生往万</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">Human beings are members of a whole,  In creation of one essence and soul.  If one member is afflicted with pain,  Other members uneasy will remain.  If you have no sympathy for human pain,  The name of human you ca ...</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=4176">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=4176&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_22" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum62969" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=7420&page=1#pid62969', '话题链接已经复制到剪贴板')">23楼</strong>
													<em onclick="$('postmessage_62969').className='t_bigfont'">大</em>							<em onclick="$('postmessage_62969').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_62969').className='t_smallfont'">小</em>												发表于 2009-3-27 10:45&nbsp;																					<a href="viewthread.php?tid=7420&amp;page=1&amp;authorid=4176" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_22"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_22"></div><div id="ad_thread4_22"></div>
						
						
																											<div id="postmessage_62969" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>14k</i> 于 2009-3-23 01:48 发表 <a href="http://1984bbs.com/redirect.php?goto=findpost&amp;pid=59135&amp;ptid=7420" target="_blank"><img src="http://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
我们网站出现一种非常牛逼的河蟹状态。一个域名子目录被屏蔽，之后我们使用其他子域名又可以使用。但是网站出现一个情况，有些帖子进去后会出现图片是红叉，之后出来后就会出现整个网站打不开，链接不上。稍等片刻后 ... </blockquote></div>你是国外嫖客访问国内小姐的情形？那一准儿是碰上gfw的敏感点了，人家要脱离接触一下下，等高潮过后才能继续啦。</div>

							
							
							
							
															<div id="post_rate_div_62969"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo62969_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=4176" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=7420&amp;repquote=62969&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 62969)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_22"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid166461" summary="pid166461" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7821" target="_blank" id="userinfo166461" class="dropmenu" onmouseover="showMenu(this.id)">歪歪打酱油</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7821">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7821&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_23" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum166461" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=7420&page=1#pid166461', '话题链接已经复制到剪贴板')">24楼</strong>
													<em onclick="$('postmessage_166461').className='t_bigfont'">大</em>							<em onclick="$('postmessage_166461').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_166461').className='t_smallfont'">小</em>												发表于 2009-7-17 20:47&nbsp;																					<a href="viewthread.php?tid=7420&amp;page=1&amp;authorid=7821" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_23"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_23"></div><div id="ad_thread4_23"></div>
						
						
																											<div id="postmessage_166461" class="t_msgfont">哈哈</div>

							
							
							
							
															<div id="post_rate_div_166461"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo166461_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=7821" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=7420&amp;repquote=166461&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 166461)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_23"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid166666" summary="pid166666" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7723" target="_blank" id="userinfo166666" class="dropmenu" onmouseover="showMenu(this.id)">Mclovin</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7723">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7723&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_24" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum166666" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=7420&page=1#pid166666', '话题链接已经复制到剪贴板')">25楼</strong>
													<em onclick="$('postmessage_166666').className='t_bigfont'">大</em>							<em onclick="$('postmessage_166666').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_166666').className='t_smallfont'">小</em>												发表于 2009-7-17 22:37&nbsp;																					<a href="viewthread.php?tid=7420&amp;page=1&amp;authorid=7723" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_24"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_24"></div><div id="ad_thread4_24"></div>
						
						
																											<div id="postmessage_166666" class="t_msgfont">帖子被和谐了....看不到....哎....</div>

							
							
							
							
															<div id="post_rate_div_166666"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo166666_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=7723" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=7420&amp;repquote=166666&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 166666)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_24"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid233646" summary="pid233646" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8139" target="_blank" id="userinfo233646" class="dropmenu" onmouseover="showMenu(this.id)">zorro</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">没根的人</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8139">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8139&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_25" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum233646" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=7420&page=1#pid233646', '话题链接已经复制到剪贴板')">26楼</strong>
													<em onclick="$('postmessage_233646').className='t_bigfont'">大</em>							<em onclick="$('postmessage_233646').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_233646').className='t_smallfont'">小</em>												发表于 2009-9-9 16:50&nbsp;																					<a href="viewthread.php?tid=7420&amp;page=1&amp;authorid=8139" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_25"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_25"></div><div id="ad_thread4_25"></div>
						
						
																											<div id="postmessage_233646" class="t_msgfont">看不到了，不知道是什么东西……</div>

							
							
							
							
															<div id="post_rate_div_233646"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo233646_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=8139" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=7420&amp;repquote=233646&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 233646)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_25"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid233672" summary="pid233672" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7766" target="_blank" id="userinfo233672" class="dropmenu" onmouseover="showMenu(this.id)">麦圆</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">Twitter @math2gold | 惊诧的火星友邦 |  咪咪是 /math2ogld　</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7766">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7766&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_26" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum233672" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=7420&page=1#pid233672', '话题链接已经复制到剪贴板')">27楼</strong>
													<em onclick="$('postmessage_233672').className='t_bigfont'">大</em>							<em onclick="$('postmessage_233672').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_233672').className='t_smallfont'">小</em>												发表于 2009-9-9 17:03&nbsp;																					<a href="viewthread.php?tid=7420&amp;page=1&amp;authorid=7766" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_26"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_26"></div><div id="ad_thread4_26"></div>
						
						
																											<div id="postmessage_233672" class="t_msgfont">..........貌似被删除了……hu core直接传上来这里啊。</div>

							
							
							
							
															<div id="post_rate_div_233672"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo233672_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://math2gold.com/" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=7766" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=7420&amp;repquote=233672&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 233672)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_26"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid233675" summary="pid233675" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 <a name="lastpost"></a>					<cite>											<a href="space.php?uid=4668" target="_blank" id="userinfo233675" class="dropmenu" onmouseover="showMenu(this.id)">马尼超</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=4668">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=4668&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_27" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum233675" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=7420&page=1#pid233675', '话题链接已经复制到剪贴板')">28楼</strong>
													<em onclick="$('postmessage_233675').className='t_bigfont'">大</em>							<em onclick="$('postmessage_233675').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_233675').className='t_smallfont'">小</em>												发表于 2009-9-9 17:05&nbsp;																					<a href="viewthread.php?tid=7420&amp;page=1&amp;authorid=4668" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_27"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_27"></div><div id="ad_thread4_27"></div>
						
						
																											<div id="postmessage_233675" class="t_msgfont">呃，已经看不到了<br />
建议楼主放在墙外，方便下载</div>

							
							
							
							
															<div id="post_rate_div_233675"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo233675_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=4668" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=7420&amp;repquote=233675&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 233675)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_27"></div>				</div>
			</td>
		</tr>
		</table>
		</div>
</form>





<div class="pages_btns">
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=7420&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=7420&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
				<span class="postbtn" id="newspecialtmp" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=7420&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

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

	<form method="post" id="postform" action="post.php?action=reply&amp;fid=26&amp;tid=7420&amp;extra=&amp;replysubmit=yes" onSubmit="return validate(this)">
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
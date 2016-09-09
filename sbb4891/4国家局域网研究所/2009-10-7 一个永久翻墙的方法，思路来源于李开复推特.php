<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<title>一个永久翻墙的方法，思路来源于李开复推特 - 国家局域网研究所 -  1984bbs.com </title>
<meta name="keywords" content="" />
<meta name="MSSmartTagsPreventParsing" content="True" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<link rel="archives" title="1984bbs.com" href="https://1984bbs.com/archiver/" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_viewthread.css" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_common.css" />
<script type="text/javascript">
	var discuz_uid = 13019;var IMGDIR = 'images/default';var attackevasive = '0';var gid = 0;var STYLEID = '1';
	gid = parseInt('3');var fid = parseInt('26');var tid = parseInt('24441');
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
			<p><a href="index.php" id="forumlist" onmouseover="showMenu(this.id)" class="dropmenu">1984bbs.com</a> &raquo; <a href="forumdisplay.php?fid=26">国家局域网研究所</a> &raquo; 一个永久翻墙的方法，思路来源于李开复推特</p>
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
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=24441&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=24441&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
				<span class="postbtn" id="newspecial" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=24441&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

	<ul class="popupmenu_popup newspecialmenu" id="newspecial_menu" style="display: none">
		<li><a href="post.php?action=newthread&amp;fid=26&amp;extra=">发新话题</a></li>
		<li class="poll"><a href="post.php?action=newthread&amp;fid=26&amp;extra=&amp;special=1">发布投票</a></li>													</ul>

<form method="post" name="modactions">
	<input type="hidden" name="formhash" value="823c9fa2" />
	<div class="mainbox viewthread">
		<span class="headactions">
					<a href="my.php?item=favorites&amp;tid=24441" id="ajax_favorite" onclick="ajaxmenu(event, this.id, 3000, 0)">收藏</a>
			<a href="my.php?item=subscriptions&amp;subadd=24441" id="ajax_subscription" onclick="ajaxmenu(event, this.id, 3000, null, 0)">订阅</a>
			<a href="misc.php?action=emailfriend&amp;tid=24441" id="emailfriend" onclick="ajaxmenu(event, this.id, 9000000, null, 0)">推荐</a>
				<a href="viewthread.php?action=printable&amp;tid=24441" target="_blank" class="notabs">打印</a>
				</span>
		<h1>一个永久翻墙的方法，思路来源于李开复推特		</h1>
							<table id="pid272458" summary="pid272458" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=4544" target="_blank" id="userinfo272458" class="dropmenu" onmouseover="showMenu(this.id)">袜子自己洗</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">书到用时方恨少 想要嘿时没有套 心情就会很不好</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=4544">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=4544&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_0" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum272458" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=24441&page=1#pid272458', '话题链接已经复制到剪贴板')">1楼</strong>
													<em onclick="$('postmessage_272458').className='t_bigfont'">大</em>							<em onclick="$('postmessage_272458').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_272458').className='t_smallfont'">小</em>												发表于 2009-10-7 10:03&nbsp;																					<a href="viewthread.php?tid=24441&amp;page=1&amp;authorid=4544" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_0"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_0"></div><div id="ad_thread4_0"></div>
													<h2>一个永久翻墙的方法，思路来源于李开复推特</h2>
						
						
																											<div id="postmessage_272458" class="t_msgfont">kaifulee 前一阵太忙，在中国不方便上twitter，现在终于来美国了。<br />
<br />
<br />
所以啊各位童鞋们啊，与其不停的研究TOR,FREEGATE什么的，不如好好学习英语，出国好了，不要再CARE这个远东小农国家了，学英语是最大的翻墙，出国就是永远的翻墙。</div>

							
							
							
							
															<div id="post_rate_div_272458"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo272458_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=4544" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=24441&amp;repquote=272458&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 272458)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_0"></div>				</div>
			</td>
		</tr>
		</table>
		</div><div class="ad_column" id="ad_interthread"><a href="/viewthread.php?tid=54699" target="_blank" style="color:red;">1984bbs是一个非营利项目，它需要您的捐助！</font></a>		</div>
	<div class="mainbox viewthread">
			<table id="pid272471" summary="pid272471" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2971" target="_blank" id="userinfo272471" class="dropmenu" onmouseover="showMenu(this.id)">luckyray</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">不明真相</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2971">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2971&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_1" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum272471" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=24441&page=1#pid272471', '话题链接已经复制到剪贴板')">2楼</strong>
													<em onclick="$('postmessage_272471').className='t_bigfont'">大</em>							<em onclick="$('postmessage_272471').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_272471').className='t_smallfont'">小</em>												发表于 2009-10-7 10:18&nbsp;																					<a href="viewthread.php?tid=24441&amp;page=1&amp;authorid=2971" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_1"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_1"></div><div id="ad_thread4_1"></div>
						
						
																											<div id="postmessage_272471" class="t_msgfont">+1</div>

							
							
							
							
															<div id="post_rate_div_272471"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo272471_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=2971" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=24441&amp;repquote=272471&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 272471)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_1"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid272500" summary="pid272500" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=464" target="_blank" id="userinfo272500" class="dropmenu" onmouseover="showMenu(this.id)">Phillip</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">路边社特邀围观群众</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=464">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=464&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_2" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum272500" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=24441&page=1#pid272500', '话题链接已经复制到剪贴板')">3楼</strong>
													<em onclick="$('postmessage_272500').className='t_bigfont'">大</em>							<em onclick="$('postmessage_272500').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_272500').className='t_smallfont'">小</em>												发表于 2009-10-7 10:48&nbsp;																					<a href="viewthread.php?tid=24441&amp;page=1&amp;authorid=464" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_2"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_2"></div><div id="ad_thread4_2"></div>
						
						
																											<div id="postmessage_272500" class="t_msgfont">这还用得着李开复提醒吗...</div>

							
							
							
							
															<div id="post_rate_div_272500"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo272500_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=464" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=24441&amp;repquote=272500&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 272500)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_2"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid272885" summary="pid272885" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8126" target="_blank" id="userinfo272885" class="dropmenu" onmouseover="showMenu(this.id)">gaojians</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8126">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8126&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_3" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum272885" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=24441&page=1#pid272885', '话题链接已经复制到剪贴板')">4楼</strong>
													<em onclick="$('postmessage_272885').className='t_bigfont'">大</em>							<em onclick="$('postmessage_272885').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_272885').className='t_smallfont'">小</em>												发表于 2009-10-7 18:32&nbsp;																					<a href="viewthread.php?tid=24441&amp;page=1&amp;authorid=8126" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_3"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_3"></div><div id="ad_thread4_3"></div>
						
						
																											<div id="postmessage_272885" class="t_msgfont">出国要钱啊。</div>

							
							
							
							
															<div id="post_rate_div_272885"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo272885_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=8126" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=24441&amp;repquote=272885&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 272885)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_3"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid272918" summary="pid272918" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=9210" target="_blank" id="userinfo272918" class="dropmenu" onmouseover="showMenu(this.id)">chommy</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">砖家(书记别删我)</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=9210">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=9210&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_4" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum272918" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=24441&page=1#pid272918', '话题链接已经复制到剪贴板')">5楼</strong>
													<em onclick="$('postmessage_272918').className='t_bigfont'">大</em>							<em onclick="$('postmessage_272918').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_272918').className='t_smallfont'">小</em>												发表于 2009-10-7 19:02&nbsp;																					<a href="viewthread.php?tid=24441&amp;page=1&amp;authorid=9210" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_4"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_4"></div><div id="ad_thread4_4"></div>
						
						
																											<div id="postmessage_272918" class="t_msgfont">移民到米国是梦想。</div>

							
							
							
							
															<div id="post_rate_div_272918"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo272918_menu" style="display: none;">
										<dl></dl>
											<p><a href="https://twitter.com/e4gle" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=9210" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=24441&amp;repquote=272918&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 272918)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_4"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid272921" summary="pid272921" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7592" target="_blank" id="userinfo272921" class="dropmenu" onmouseover="showMenu(this.id)">雷曼兄弟</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">@trotrotro</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7592">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7592&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_5" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum272921" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=24441&page=1#pid272921', '话题链接已经复制到剪贴板')">6楼</strong>
													<em onclick="$('postmessage_272921').className='t_bigfont'">大</em>							<em onclick="$('postmessage_272921').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_272921').className='t_smallfont'">小</em>												发表于 2009-10-7 19:04&nbsp;																					<a href="viewthread.php?tid=24441&amp;page=1&amp;authorid=7592" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_5"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_5"></div><div id="ad_thread4_5"></div>
						
						
																											<div id="postmessage_272921" class="t_msgfont">这个是肉体翻墙，不是网络翻墙</div>

							
							
							
							
															<div id="post_rate_div_272921"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo272921_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=7592" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=24441&amp;repquote=272921&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 272921)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_5"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid272923" summary="pid272923" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=9185" target="_blank" id="userinfo272923" class="dropmenu" onmouseover="showMenu(this.id)">saytesnake</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">只关心小问题~</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=9185">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=9185&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_6" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum272923" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=24441&page=1#pid272923', '话题链接已经复制到剪贴板')">7楼</strong>
													<em onclick="$('postmessage_272923').className='t_bigfont'">大</em>							<em onclick="$('postmessage_272923').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_272923').className='t_smallfont'">小</em>												发表于 2009-10-7 19:05&nbsp;																					<a href="viewthread.php?tid=24441&amp;page=1&amp;authorid=9185" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_6"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_6"></div><div id="ad_thread4_6"></div>
						
						
																											<div id="postmessage_272923" class="t_msgfont">额..居然是源自于李开复..</div>

							
							
							
							
															<div id="post_rate_div_272923"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo272923_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=9185" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=24441&amp;repquote=272923&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 272923)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_6"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid272993" summary="pid272993" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8399" target="_blank" id="userinfo272993" class="dropmenu" onmouseover="showMenu(this.id)">以地之名</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8399">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8399&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_7" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum272993" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=24441&page=1#pid272993', '话题链接已经复制到剪贴板')">8楼</strong>
													<em onclick="$('postmessage_272993').className='t_bigfont'">大</em>							<em onclick="$('postmessage_272993').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_272993').className='t_smallfont'">小</em>												发表于 2009-10-7 20:13&nbsp;																					<a href="viewthread.php?tid=24441&amp;page=1&amp;authorid=8399" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_7"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_7"></div><div id="ad_thread4_7"></div>
						
						
																											<div id="postmessage_272993" class="t_msgfont">此“翻墙”方法跟李开复有什么关系。。。</div>

							
							
							
							
															<div id="post_rate_div_272993"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo272993_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=8399" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=24441&amp;repquote=272993&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 272993)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_7"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid273047" summary="pid273047" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2241" target="_blank" id="userinfo273047" class="dropmenu" onmouseover="showMenu(this.id)">阿文强</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2241">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2241&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_8" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum273047" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=24441&page=1#pid273047', '话题链接已经复制到剪贴板')">9楼</strong>
													<em onclick="$('postmessage_273047').className='t_bigfont'">大</em>							<em onclick="$('postmessage_273047').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_273047').className='t_smallfont'">小</em>												发表于 2009-10-7 21:15&nbsp;																					<a href="viewthread.php?tid=24441&amp;page=1&amp;authorid=2241" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_8"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_8"></div><div id="ad_thread4_8"></div>
						
						
																											<div id="postmessage_273047" class="t_msgfont">翻墙的最高境界。</div>

							
							
							
							
															<div id="post_rate_div_273047"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo273047_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=2241" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=24441&amp;repquote=273047&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 273047)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_8"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid273077" summary="pid273077" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8441" target="_blank" id="userinfo273077" class="dropmenu" onmouseover="showMenu(this.id)">sunzerg</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">非激进主义人士</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8441">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8441&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_9" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum273077" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=24441&page=1#pid273077', '话题链接已经复制到剪贴板')">10楼</strong>
													<em onclick="$('postmessage_273077').className='t_bigfont'">大</em>							<em onclick="$('postmessage_273077').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_273077').className='t_smallfont'">小</em>												发表于 2009-10-7 21:36&nbsp;																					<a href="viewthread.php?tid=24441&amp;page=1&amp;authorid=8441" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_9"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_9"></div><div id="ad_thread4_9"></div>
						
						
																											<div id="postmessage_273077" class="t_msgfont">去火星得了，地球人爱咋得瑟咋得瑟。</div>

							
							
							
							
															<div id="post_rate_div_273077"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo273077_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=8441" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=24441&amp;repquote=273077&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 273077)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_9"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid273079" summary="pid273079" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=9106" target="_blank" id="userinfo273079" class="dropmenu" onmouseover="showMenu(this.id)">碎碎</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=9106">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=9106&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_10" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum273079" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=24441&page=1#pid273079', '话题链接已经复制到剪贴板')">11楼</strong>
													<em onclick="$('postmessage_273079').className='t_bigfont'">大</em>							<em onclick="$('postmessage_273079').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_273079').className='t_smallfont'">小</em>												发表于 2009-10-7 21:38&nbsp;																					<a href="viewthread.php?tid=24441&amp;page=1&amp;authorid=9106" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_10"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_10"></div><div id="ad_thread4_10"></div>
						
						
																											<div id="postmessage_273079" class="t_msgfont">翻社会主义高墙</div>

							
							
							
							
															<div id="post_rate_div_273079"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo273079_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=9106" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=24441&amp;repquote=273079&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 273079)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_10"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid273149" summary="pid273149" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7939" target="_blank" id="userinfo273149" class="dropmenu" onmouseover="showMenu(this.id)">刘项</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7939">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7939&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_11" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum273149" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=24441&page=1#pid273149', '话题链接已经复制到剪贴板')">12楼</strong>
													<em onclick="$('postmessage_273149').className='t_bigfont'">大</em>							<em onclick="$('postmessage_273149').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_273149').className='t_smallfont'">小</em>												发表于 2009-10-7 22:22&nbsp;																					<a href="viewthread.php?tid=24441&amp;page=1&amp;authorid=7939" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_11"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_11"></div><div id="ad_thread4_11"></div>
						
						
																											<div id="postmessage_273149" class="t_msgfont">走，拎上家伙，解救美国人民去</div>

							
							
							
							
															<div id="post_rate_div_273149"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo273149_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=7939" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=24441&amp;repquote=273149&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 273149)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_11"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid275087" summary="pid275087" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6920" target="_blank" id="userinfo275087" class="dropmenu" onmouseover="showMenu(this.id)">淮月</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">翻墙痴迷者 雄性文青  @qhgy</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6920">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6920&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_12" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum275087" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=24441&page=1#pid275087', '话题链接已经复制到剪贴板')">13楼</strong>
													<em onclick="$('postmessage_275087').className='t_bigfont'">大</em>							<em onclick="$('postmessage_275087').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_275087').className='t_smallfont'">小</em>												发表于 2009-10-9 16:49&nbsp;																					<a href="viewthread.php?tid=24441&amp;page=1&amp;authorid=6920" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_12"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_12"></div><div id="ad_thread4_12"></div>
						
						
																											<div id="postmessage_275087" class="t_msgfont">日</div>

							
							
							
							
															<div id="post_rate_div_275087"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo275087_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://twitter.com/qhgy" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=6920" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=24441&amp;repquote=275087&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 275087)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_12"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid275169" summary="pid275169" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8520" target="_blank" id="userinfo275169" class="dropmenu" onmouseover="showMenu(this.id)">小猪熊</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8520">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8520&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_13" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum275169" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=24441&page=1#pid275169', '话题链接已经复制到剪贴板')">14楼</strong>
													<em onclick="$('postmessage_275169').className='t_bigfont'">大</em>							<em onclick="$('postmessage_275169').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_275169').className='t_smallfont'">小</em>												发表于 2009-10-9 17:34&nbsp;																					<a href="viewthread.php?tid=24441&amp;page=1&amp;authorid=8520" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_13"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_13"></div><div id="ad_thread4_13"></div>
						
						
																											<div id="postmessage_275169" class="t_msgfont">这个方法好是好&nbsp;&nbsp;关键是心有余而力不足啊</div>

							
							
							
							
															<div id="post_rate_div_275169"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo275169_menu" style="display: none;">
										<div class="imicons">
													<a target='_blank' href='http://settings.messenger.live.com/Conversation/IMMe.aspx?invitee=8964@fuck.com&mkt=zh-cn'><img style='border-style: none;' src='http://messenger.services.live.com/users/8964@fuck.com/presenceimage?mkt=zh-cn' width='16' height='16' /></a>
												<a href="http://wpa.qq.com/msgrd?V=1&amp;Uin=8964520&amp;Site=1984bbs.com&amp;Menu=yes" target="_blank"><img src="images/default/qq.gif" alt="QQ" /></a>																							</div>
										<dl></dl>
											<p><a href="http://www.gov.cn" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=8520" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=24441&amp;repquote=275169&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 275169)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_13"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid275180" summary="pid275180" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2676" target="_blank" id="userinfo275180" class="dropmenu" onmouseover="showMenu(this.id)">只看不说话</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">有时装逼有时牛逼有时傻逼。推特号：@shuxiangyuan</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2676">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2676&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_14" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum275180" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=24441&page=1#pid275180', '话题链接已经复制到剪贴板')">15楼</strong>
													<em onclick="$('postmessage_275180').className='t_bigfont'">大</em>							<em onclick="$('postmessage_275180').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_275180').className='t_smallfont'">小</em>												发表于 2009-10-9 17:45&nbsp;																					<a href="viewthread.php?tid=24441&amp;page=1&amp;authorid=2676" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_14"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_14"></div><div id="ad_thread4_14"></div>
						
						
																											<div id="postmessage_275180" class="t_msgfont">楼主有办法来解救我不：）</div>

							
							
							
							
															<div id="post_rate_div_275180"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo275180_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=2676" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=24441&amp;repquote=275180&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 275180)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_14"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid275191" summary="pid275191" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=3579" target="_blank" id="userinfo275191" class="dropmenu" onmouseover="showMenu(this.id)">Candice</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">镯控</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=3579">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=3579&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_15" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum275191" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=24441&page=1#pid275191', '话题链接已经复制到剪贴板')">16楼</strong>
													<em onclick="$('postmessage_275191').className='t_bigfont'">大</em>							<em onclick="$('postmessage_275191').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_275191').className='t_smallfont'">小</em>												发表于 2009-10-9 17:53&nbsp;																					<a href="viewthread.php?tid=24441&amp;page=1&amp;authorid=3579" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_15"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_15"></div><div id="ad_thread4_15"></div>
						
						
																											<div id="postmessage_275191" class="t_msgfont">怎样学好英语啊，觉得好难。。好难。。难。。是我太懒了吧。</div>

							
							
							
							
															<div id="post_rate_div_275191"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo275191_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=3579" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=24441&amp;repquote=275191&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 275191)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_15"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid280996" summary="pid280996" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7552" target="_blank" id="userinfo280996" class="dropmenu" onmouseover="showMenu(this.id)">c41c41</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7552">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7552&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_16" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum280996" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=24441&page=1#pid280996', '话题链接已经复制到剪贴板')">17楼</strong>
													<em onclick="$('postmessage_280996').className='t_bigfont'">大</em>							<em onclick="$('postmessage_280996').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_280996').className='t_smallfont'">小</em>												发表于 2009-10-14 03:11&nbsp;																					<a href="viewthread.php?tid=24441&amp;page=1&amp;authorid=7552" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_16"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_16"></div><div id="ad_thread4_16"></div>
						
						
																											<div id="postmessage_280996" class="t_msgfont">说这话的人太白痴了，还是愚民的心态。</div>

							
							
							
							
															<div id="post_rate_div_280996"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo280996_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=7552" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=24441&amp;repquote=280996&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 280996)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_16"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid281108" summary="pid281108" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2396" target="_blank" id="userinfo281108" class="dropmenu" onmouseover="showMenu(this.id)">绝不付账</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">人妻党外宣部主任</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2396">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2396&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_17" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum281108" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=24441&page=1#pid281108', '话题链接已经复制到剪贴板')">18楼</strong>
													<em onclick="$('postmessage_281108').className='t_bigfont'">大</em>							<em onclick="$('postmessage_281108').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_281108').className='t_smallfont'">小</em>												发表于 2009-10-14 09:27&nbsp;																					<a href="viewthread.php?tid=24441&amp;page=1&amp;authorid=2396" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_17"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_17"></div><div id="ad_thread4_17"></div>
						
						
																											<div id="postmessage_281108" class="t_msgfont">被骗进来了。。。。</div>

							
							
							
							
															<div id="post_rate_div_281108"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo281108_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=2396" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=24441&amp;repquote=281108&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 281108)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_17"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid281126" summary="pid281126" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=624" target="_blank" id="userinfo281126" class="dropmenu" onmouseover="showMenu(this.id)">左岸拾荒</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=624">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=624&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_18" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum281126" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=24441&page=1#pid281126', '话题链接已经复制到剪贴板')">19楼</strong>
													<em onclick="$('postmessage_281126').className='t_bigfont'">大</em>							<em onclick="$('postmessage_281126').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_281126').className='t_smallfont'">小</em>												发表于 2009-10-14 09:44&nbsp;																					<a href="viewthread.php?tid=24441&amp;page=1&amp;authorid=624" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_18"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_18"></div><div id="ad_thread4_18"></div>
						
						
																											<div id="postmessage_281126" class="t_msgfont">挖社会主义墙角。。。</div>

							
							
							
							
															<div id="post_rate_div_281126"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo281126_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=624" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=24441&amp;repquote=281126&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 281126)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_18"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid281252" summary="pid281252" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8834" target="_blank" id="userinfo281252" class="dropmenu" onmouseover="showMenu(this.id)">路小路</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8834">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8834&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_19" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum281252" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=24441&page=1#pid281252', '话题链接已经复制到剪贴板')">20楼</strong>
													<em onclick="$('postmessage_281252').className='t_bigfont'">大</em>							<em onclick="$('postmessage_281252').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_281252').className='t_smallfont'">小</em>												发表于 2009-10-14 11:15&nbsp;																					<a href="viewthread.php?tid=24441&amp;page=1&amp;authorid=8834" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_19"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_19"></div><div id="ad_thread4_19"></div>
						
						
																											<div id="postmessage_281252" class="t_msgfont">没钱啊。我靠。</div>

							
							
							
							
															<div id="post_rate_div_281252"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo281252_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=8834" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=24441&amp;repquote=281252&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 281252)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_19"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid281592" summary="pid281592" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1434" target="_blank" id="userinfo281592" class="dropmenu" onmouseover="showMenu(this.id)">nononothing</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">地上最强</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1434">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1434&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_20" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum281592" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=24441&page=1#pid281592', '话题链接已经复制到剪贴板')">21楼</strong>
													<em onclick="$('postmessage_281592').className='t_bigfont'">大</em>							<em onclick="$('postmessage_281592').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_281592').className='t_smallfont'">小</em>												发表于 2009-10-14 13:44&nbsp;																					<a href="viewthread.php?tid=24441&amp;page=1&amp;authorid=1434" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_20"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_20"></div><div id="ad_thread4_20"></div>
						
						
																											<div id="postmessage_281592" class="t_msgfont">呵呵 ～～～LZ幽默</div>

							
							
							
							
															<div id="post_rate_div_281592"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo281592_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1434" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=24441&amp;repquote=281592&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 281592)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_20"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid281648" summary="pid281648" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8793" target="_blank" id="userinfo281648" class="dropmenu" onmouseover="showMenu(this.id)">冇二</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">@bocaidingding欢迎follow</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8793">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8793&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_21" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum281648" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=24441&page=1#pid281648', '话题链接已经复制到剪贴板')">22楼</strong>
													<em onclick="$('postmessage_281648').className='t_bigfont'">大</em>							<em onclick="$('postmessage_281648').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_281648').className='t_smallfont'">小</em>												发表于 2009-10-14 14:07&nbsp;																					<a href="viewthread.php?tid=24441&amp;page=1&amp;authorid=8793" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_21"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_21"></div><div id="ad_thread4_21"></div>
						
						
																											<div id="postmessage_281648" class="t_msgfont">呃。。。原来是物理翻墙</div>

							
							
							
							
															<div id="post_rate_div_281648"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo281648_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=8793" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=24441&amp;repquote=281648&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 281648)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_21"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid287130" summary="pid287130" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=4016" target="_blank" id="userinfo287130" class="dropmenu" onmouseover="showMenu(this.id)">潜行者</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=4016">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=4016&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_22" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum287130" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=24441&page=1#pid287130', '话题链接已经复制到剪贴板')">23楼</strong>
													<em onclick="$('postmessage_287130').className='t_bigfont'">大</em>							<em onclick="$('postmessage_287130').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_287130').className='t_smallfont'">小</em>												发表于 2009-10-17 20:38&nbsp;																					<a href="viewthread.php?tid=24441&amp;page=1&amp;authorid=4016" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_22"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_22"></div><div id="ad_thread4_22"></div>
						
						
																											<div id="postmessage_287130" class="t_msgfont">此法无敌</div>

							
							
							
							
															<div id="post_rate_div_287130"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo287130_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=4016" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=24441&amp;repquote=287130&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 287130)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_22"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid287151" summary="pid287151" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=9456" target="_blank" id="userinfo287151" class="dropmenu" onmouseover="showMenu(this.id)">jinchang</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">一个常识健全和逻辑正常的人生活在天朝，那是一件多么痛苦并快乐着的事。 twitter@jinchang_</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=9456">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=9456&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_23" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum287151" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=24441&page=1#pid287151', '话题链接已经复制到剪贴板')">24楼</strong>
													<em onclick="$('postmessage_287151').className='t_bigfont'">大</em>							<em onclick="$('postmessage_287151').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_287151').className='t_smallfont'">小</em>												发表于 2009-10-17 20:51&nbsp;																					<a href="viewthread.php?tid=24441&amp;page=1&amp;authorid=9456" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_23"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_23"></div><div id="ad_thread4_23"></div>
						
						
																											<div id="postmessage_287151" class="t_msgfont">已翻出。</div>

							
							
							
							
															<div id="post_rate_div_287151"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo287151_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://blog.sina.com.cn/jinchangatsina" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=9456" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=24441&amp;repquote=287151&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 287151)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_23"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid287308" summary="pid287308" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=4546" target="_blank" id="userinfo287308" class="dropmenu" onmouseover="showMenu(this.id)">五机</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">逆足精度7的play-maker@yebayiren</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=4546">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=4546&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_24" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum287308" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=24441&page=1#pid287308', '话题链接已经复制到剪贴板')">25楼</strong>
													<em onclick="$('postmessage_287308').className='t_bigfont'">大</em>							<em onclick="$('postmessage_287308').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_287308').className='t_smallfont'">小</em>												发表于 2009-10-17 21:49&nbsp;																					<a href="viewthread.php?tid=24441&amp;page=1&amp;authorid=4546" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_24"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_24"></div><div id="ad_thread4_24"></div>
						
						
																											<div id="postmessage_287308" class="t_msgfont">标题党</div>

							
							
							
							
															<div id="post_rate_div_287308"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo287308_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://yebayiren.blogspot.com" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=4546" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=24441&amp;repquote=287308&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 287308)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_24"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid287344" summary="pid287344" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=3463" target="_blank" id="userinfo287344" class="dropmenu" onmouseover="showMenu(this.id)">未分级</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">NG17</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=3463">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=3463&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_25" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum287344" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=24441&page=1#pid287344', '话题链接已经复制到剪贴板')">26楼</strong>
													<em onclick="$('postmessage_287344').className='t_bigfont'">大</em>							<em onclick="$('postmessage_287344').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_287344').className='t_smallfont'">小</em>												发表于 2009-10-17 22:00&nbsp;																					<a href="viewthread.php?tid=24441&amp;page=1&amp;authorid=3463" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_25"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_25"></div><div id="ad_thread4_25"></div>
						
						
																											<div id="postmessage_287344" class="t_msgfont">什么时候墙垮了，也就不用翻了。</div>

							
							
							
							
															<div id="post_rate_div_287344"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo287344_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=3463" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=24441&amp;repquote=287344&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 287344)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_25"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid287361" summary="pid287361" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=9316" target="_blank" id="userinfo287361" class="dropmenu" onmouseover="showMenu(this.id)">天路客</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=9316">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=9316&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_26" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum287361" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=24441&page=1#pid287361', '话题链接已经复制到剪贴板')">27楼</strong>
													<em onclick="$('postmessage_287361').className='t_bigfont'">大</em>							<em onclick="$('postmessage_287361').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_287361').className='t_smallfont'">小</em>												发表于 2009-10-17 22:04&nbsp;																					<a href="viewthread.php?tid=24441&amp;page=1&amp;authorid=9316" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_26"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_26"></div><div id="ad_thread4_26"></div>
						
						
																											<div id="postmessage_287361" class="t_msgfont">逃走？！</div>

							
							
							
							
															<div id="post_rate_div_287361"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo287361_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=9316" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=24441&amp;repquote=287361&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 287361)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_26"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid287375" summary="pid287375" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6412" target="_blank" id="userinfo287375" class="dropmenu" onmouseover="showMenu(this.id)">立夏</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6412">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6412&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_27" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum287375" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=24441&page=1#pid287375', '话题链接已经复制到剪贴板')">28楼</strong>
													<em onclick="$('postmessage_287375').className='t_bigfont'">大</em>							<em onclick="$('postmessage_287375').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_287375').className='t_smallfont'">小</em>												发表于 2009-10-17 22:09&nbsp;																					<a href="viewthread.php?tid=24441&amp;page=1&amp;authorid=6412" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_27"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_27"></div><div id="ad_thread4_27"></div>
						
						
																											<div id="postmessage_287375" class="t_msgfont">标题党。被骗了，哎……</div>

							
							
							
							
															<div id="post_rate_div_287375"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo287375_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=6412" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=24441&amp;repquote=287375&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 287375)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_27"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid287890" summary="pid287890" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8530" target="_blank" id="userinfo287890" class="dropmenu" onmouseover="showMenu(this.id)">lwjef</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">twitter账号 lwjef</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8530">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8530&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_28" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum287890" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=24441&page=1#pid287890', '话题链接已经复制到剪贴板')">29楼</strong>
													<em onclick="$('postmessage_287890').className='t_bigfont'">大</em>							<em onclick="$('postmessage_287890').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_287890').className='t_smallfont'">小</em>												发表于 2009-10-18 08:38&nbsp;																					<a href="viewthread.php?tid=24441&amp;page=1&amp;authorid=8530" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_28"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_28"></div><div id="ad_thread4_28"></div>
						
						
																											<div id="postmessage_287890" class="t_msgfont">楼主你太坏了~~</div>

							
							
							
							
															<div id="post_rate_div_287890"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo287890_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=8530" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=24441&amp;repquote=287890&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 287890)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_28"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid287959" summary="pid287959" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=9050" target="_blank" id="userinfo287959" class="dropmenu" onmouseover="showMenu(this.id)">SethVerlo</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=9050">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=9050&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_29" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum287959" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=24441&page=1#pid287959', '话题链接已经复制到剪贴板')">30楼</strong>
													<em onclick="$('postmessage_287959').className='t_bigfont'">大</em>							<em onclick="$('postmessage_287959').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_287959').className='t_smallfont'">小</em>												发表于 2009-10-18 10:06&nbsp;																					<a href="viewthread.php?tid=24441&amp;page=1&amp;authorid=9050" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_29"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_29"></div><div id="ad_thread4_29"></div>
						
						
																											<div id="postmessage_287959" class="t_msgfont">标题党……+1</div>

							
							
							
							
															<div id="post_rate_div_287959"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo287959_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=9050" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=24441&amp;repquote=287959&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 287959)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_29"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid288276" summary="pid288276" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=9254" target="_blank" id="userinfo288276" class="dropmenu" onmouseover="showMenu(this.id)">matrixcollapse</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=9254">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=9254&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_30" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum288276" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=24441&page=1#pid288276', '话题链接已经复制到剪贴板')">31楼</strong>
													<em onclick="$('postmessage_288276').className='t_bigfont'">大</em>							<em onclick="$('postmessage_288276').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_288276').className='t_smallfont'">小</em>												发表于 2009-10-18 14:27&nbsp;																					<a href="viewthread.php?tid=24441&amp;page=1&amp;authorid=9254" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_30"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_30"></div><div id="ad_thread4_30"></div>
						
						
																											<div id="postmessage_288276" class="t_msgfont">楼主呀，这里翻墙的同学，部分是因为舍不得这个国家呀。。。<br />
<br />
就算是有难题，可是中国共产党的开国元勋们，也没有离开中国呀。</div>

							
							
							
							
															<div id="post_rate_div_288276"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo288276_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=9254" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=24441&amp;repquote=288276&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 288276)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_30"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid288280" summary="pid288280" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7076" target="_blank" id="userinfo288280" class="dropmenu" onmouseover="showMenu(this.id)">BlackDream</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7076">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7076&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_31" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum288280" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=24441&page=1#pid288280', '话题链接已经复制到剪贴板')">32楼</strong>
													<em onclick="$('postmessage_288280').className='t_bigfont'">大</em>							<em onclick="$('postmessage_288280').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_288280').className='t_smallfont'">小</em>												发表于 2009-10-18 14:29&nbsp;																					<a href="viewthread.php?tid=24441&amp;page=1&amp;authorid=7076" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_31"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_31"></div><div id="ad_thread4_31"></div>
						
						
																											<div id="postmessage_288280" class="t_msgfont">看标题应该就知道是想说移民！</div>

							
							
							
							
															<div id="post_rate_div_288280"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo288280_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=7076" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=24441&amp;repquote=288280&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 288280)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_31"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid288314" summary="pid288314" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=4544" target="_blank" id="userinfo288314" class="dropmenu" onmouseover="showMenu(this.id)">袜子自己洗</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">书到用时方恨少 想要嘿时没有套 心情就会很不好</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=4544">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=4544&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_32" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum288314" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=24441&page=1#pid288314', '话题链接已经复制到剪贴板')">33楼</strong>
													<em onclick="$('postmessage_288314').className='t_bigfont'">大</em>							<em onclick="$('postmessage_288314').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_288314').className='t_smallfont'">小</em>												发表于 2009-10-18 15:10&nbsp;																					<a href="viewthread.php?tid=24441&amp;page=1&amp;authorid=4544" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_32"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_32"></div><div id="ad_thread4_32"></div>
													<h2>回复 16楼 只看不说话 的话题</h2>
						
						
																											<div id="postmessage_288314" class="t_msgfont">如果愿意，教你外语</div>

							
							
							
							
															<div id="post_rate_div_288314"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo288314_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=4544" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=24441&amp;repquote=288314&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 288314)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_32"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid288316" summary="pid288316" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=4544" target="_blank" id="userinfo288316" class="dropmenu" onmouseover="showMenu(this.id)">袜子自己洗</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">书到用时方恨少 想要嘿时没有套 心情就会很不好</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=4544">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=4544&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_33" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum288316" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=24441&page=1#pid288316', '话题链接已经复制到剪贴板')">34楼</strong>
													<em onclick="$('postmessage_288316').className='t_bigfont'">大</em>							<em onclick="$('postmessage_288316').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_288316').className='t_smallfont'">小</em>												发表于 2009-10-18 15:11&nbsp;																					<a href="viewthread.php?tid=24441&amp;page=1&amp;authorid=4544" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_33"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_33"></div><div id="ad_thread4_33"></div>
						
						
																											<div id="postmessage_288316" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>未分级</i> 于 2009-10-17 22:00 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=287344&amp;ptid=24441" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
什么时候墙垮了，也就不用翻了。 </blockquote></div>悲观的认为，还要等60年</div>

							
							
							
							
															<div id="post_rate_div_288316"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo288316_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=4544" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=24441&amp;repquote=288316&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 288316)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_33"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid288317" summary="pid288317" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=4544" target="_blank" id="userinfo288317" class="dropmenu" onmouseover="showMenu(this.id)">袜子自己洗</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">书到用时方恨少 想要嘿时没有套 心情就会很不好</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=4544">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=4544&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_34" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum288317" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=24441&page=1#pid288317', '话题链接已经复制到剪贴板')">35楼</strong>
													<em onclick="$('postmessage_288317').className='t_bigfont'">大</em>							<em onclick="$('postmessage_288317').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_288317').className='t_smallfont'">小</em>												发表于 2009-10-18 15:12&nbsp;																					<a href="viewthread.php?tid=24441&amp;page=1&amp;authorid=4544" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_34"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_34"></div><div id="ad_thread4_34"></div>
						
						
																											<div id="postmessage_288317" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>BlackDream</i> 于 2009-10-18 14:29 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=288280&amp;ptid=24441" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
看标题应该就知道是想说移民！ </blockquote></div>我喜欢聪明的组员</div>

							
							
							
							
															<div id="post_rate_div_288317"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo288317_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=4544" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=24441&amp;repquote=288317&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 288317)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_34"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid288322" summary="pid288322" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=4544" target="_blank" id="userinfo288322" class="dropmenu" onmouseover="showMenu(this.id)">袜子自己洗</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">书到用时方恨少 想要嘿时没有套 心情就会很不好</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=4544">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=4544&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_35" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum288322" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=24441&page=1#pid288322', '话题链接已经复制到剪贴板')">36楼</strong>
													<em onclick="$('postmessage_288322').className='t_bigfont'">大</em>							<em onclick="$('postmessage_288322').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_288322').className='t_smallfont'">小</em>												发表于 2009-10-18 15:14&nbsp;																					<a href="viewthread.php?tid=24441&amp;page=1&amp;authorid=4544" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_35"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_35"></div><div id="ad_thread4_35"></div>
						
						
																											<div id="postmessage_288322" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>matrixcollapse</i> 于 2009-10-18 14:27 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=288276&amp;ptid=24441" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
楼主呀，这里翻墙的同学，部分是因为舍不得这个国家呀。。。<br />
<br />
就算是有难题，可是中国共产党的开国元勋们，也没有离开中国呀。 </blockquote></div>麻烦告诉我，为什么舍不得这个国家？这个国家好在哪里了？环境优美？拜托，中国的环境污染不要我说吧？人民善良？Come on! 一个普通的人倒霉时候有许多人袖手旁观这样的情况还少吗？</div>

							
							
							
							
															<div id="post_rate_div_288322"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo288322_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=4544" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=24441&amp;repquote=288322&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 288322)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_35"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid288324" summary="pid288324" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=4544" target="_blank" id="userinfo288324" class="dropmenu" onmouseover="showMenu(this.id)">袜子自己洗</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">书到用时方恨少 想要嘿时没有套 心情就会很不好</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=4544">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=4544&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_36" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum288324" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=24441&page=1#pid288324', '话题链接已经复制到剪贴板')">37楼</strong>
													<em onclick="$('postmessage_288324').className='t_bigfont'">大</em>							<em onclick="$('postmessage_288324').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_288324').className='t_smallfont'">小</em>												发表于 2009-10-18 15:15&nbsp;																					<a href="viewthread.php?tid=24441&amp;page=1&amp;authorid=4544" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_36"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_36"></div><div id="ad_thread4_36"></div>
						
						
																											<div id="postmessage_288324" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>立夏</i> 于 2009-10-17 22:09 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=287375&amp;ptid=24441" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
标题党。被骗了，哎…… </blockquote></div>没骗你，我认真的说</div>

							
							
							
							
															<div id="post_rate_div_288324"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo288324_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=4544" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=24441&amp;repquote=288324&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 288324)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_36"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid288327" summary="pid288327" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=4544" target="_blank" id="userinfo288327" class="dropmenu" onmouseover="showMenu(this.id)">袜子自己洗</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">书到用时方恨少 想要嘿时没有套 心情就会很不好</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=4544">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=4544&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_37" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum288327" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=24441&page=1#pid288327', '话题链接已经复制到剪贴板')">38楼</strong>
													<em onclick="$('postmessage_288327').className='t_bigfont'">大</em>							<em onclick="$('postmessage_288327').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_288327').className='t_smallfont'">小</em>												发表于 2009-10-18 15:16&nbsp;																					<a href="viewthread.php?tid=24441&amp;page=1&amp;authorid=4544" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_37"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_37"></div><div id="ad_thread4_37"></div>
						
						
																											<div id="postmessage_288327" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>lwjef</i> 于 2009-10-18 08:38 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=287890&amp;ptid=24441" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
楼主你太坏了~~ </blockquote></div>本人忠厚老实善良，没人说过我坏，哈哈</div>

							
							
							
							
															<div id="post_rate_div_288327"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo288327_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=4544" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=24441&amp;repquote=288327&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 288327)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_37"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid288333" summary="pid288333" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8449" target="_blank" id="userinfo288333" class="dropmenu" onmouseover="showMenu(this.id)">芝华士</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8449">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8449&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_38" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum288333" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=24441&page=1#pid288333', '话题链接已经复制到剪贴板')">39楼</strong>
													<em onclick="$('postmessage_288333').className='t_bigfont'">大</em>							<em onclick="$('postmessage_288333').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_288333').className='t_smallfont'">小</em>												发表于 2009-10-18 15:19&nbsp;																					<a href="viewthread.php?tid=24441&amp;page=1&amp;authorid=8449" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_38"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_38"></div><div id="ad_thread4_38"></div>
						
						
																											<div id="postmessage_288333" class="t_msgfont">物理翻墙难度是要大些</div>

							
							
							
							
															<div id="post_rate_div_288333"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo288333_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=8449" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=24441&amp;repquote=288333&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 288333)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_38"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid288348" summary="pid288348" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7836" target="_blank" id="userinfo288348" class="dropmenu" onmouseover="showMenu(this.id)">Scheherenzade</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7836">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7836&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_39" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum288348" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=24441&page=1#pid288348', '话题链接已经复制到剪贴板')">40楼</strong>
													<em onclick="$('postmessage_288348').className='t_bigfont'">大</em>							<em onclick="$('postmessage_288348').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_288348').className='t_smallfont'">小</em>												发表于 2009-10-18 15:34&nbsp;																					<a href="viewthread.php?tid=24441&amp;page=1&amp;authorid=7836" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_39"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_39"></div><div id="ad_thread4_39"></div>
						
						
																											<div id="postmessage_288348" class="t_msgfont">想着都是这</div>

							
							
							
							
															<div id="post_rate_div_288348"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo288348_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=7836" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=24441&amp;repquote=288348&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 288348)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_39"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid288901" summary="pid288901" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=658" target="_blank" id="userinfo288901" class="dropmenu" onmouseover="showMenu(this.id)">Cybertarian</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=658">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=658&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_40" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum288901" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=24441&page=1#pid288901', '话题链接已经复制到剪贴板')">41楼</strong>
													<em onclick="$('postmessage_288901').className='t_bigfont'">大</em>							<em onclick="$('postmessage_288901').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_288901').className='t_smallfont'">小</em>												发表于 2009-10-18 22:06&nbsp;																					<a href="viewthread.php?tid=24441&amp;page=1&amp;authorid=658" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_40"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_40"></div><div id="ad_thread4_40"></div>
						
						
																											<div id="postmessage_288901" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>袜子自己洗</i> 于 2009-10-18 15:14 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=288322&amp;ptid=24441" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
<br />
<br />
麻烦告诉我，为什么舍不得这个国家？这个国家好在哪里了？环境优美？拜托，中国的环境污染不要我说吧？人民善良？Come on! 一个普通的人倒霉时候有许多人袖手旁观这样的情况还少吗？ </blockquote></div>既然他舍不得自然有他自己的考虑。。。人各有志嘛</div>

							
							
							
							
															<div id="post_rate_div_288901"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo288901_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=658" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=24441&amp;repquote=288901&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 288901)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_40"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid288925" summary="pid288925" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2930" target="_blank" id="userinfo288925" class="dropmenu" onmouseover="showMenu(this.id)">SrAcer</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">党强加于人的世界观在无法理解它的人们那里最容易被接受。——《１９８４》</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2930">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2930&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_41" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum288925" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=24441&page=1#pid288925', '话题链接已经复制到剪贴板')">42楼</strong>
													<em onclick="$('postmessage_288925').className='t_bigfont'">大</em>							<em onclick="$('postmessage_288925').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_288925').className='t_smallfont'">小</em>												发表于 2009-10-18 22:30&nbsp;																					<a href="viewthread.php?tid=24441&amp;page=1&amp;authorid=2930" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_41"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_41"></div><div id="ad_thread4_41"></div>
						
						
																											<div id="postmessage_288925" class="t_msgfont">干掉TG反华集团后再去。</div>

							
							
							
							
															<div id="post_rate_div_288925"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo288925_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=2930" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=24441&amp;repquote=288925&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 288925)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_41"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid289163" summary="pid289163" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=263" target="_blank" id="userinfo289163" class="dropmenu" onmouseover="showMenu(this.id)">WJ87</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">无产阶级煽动家</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=263">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=263&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_42" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum289163" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=24441&page=1#pid289163', '话题链接已经复制到剪贴板')">43楼</strong>
													<em onclick="$('postmessage_289163').className='t_bigfont'">大</em>							<em onclick="$('postmessage_289163').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_289163').className='t_smallfont'">小</em>												发表于 2009-10-19 01:49&nbsp;																					<a href="viewthread.php?tid=24441&amp;page=1&amp;authorid=263" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_42"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_42"></div><div id="ad_thread4_42"></div>
						
						
																											<div id="postmessage_289163" class="t_msgfont">那个谁怎么说的，中国人跑出去个几千万都会闹的全球黄祸了<br />
<br />
[<i> 本帖最后由 WJ87 于 2009-10-19 01:51 编辑 </i>]</div>

							
							
							
							
															<div id="post_rate_div_289163"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo289163_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=263" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=24441&amp;repquote=289163&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 289163)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_42"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid289365" summary="pid289365" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8119" target="_blank" id="userinfo289365" class="dropmenu" onmouseover="showMenu(this.id)">软笛</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8119">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8119&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_43" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum289365" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=24441&page=1#pid289365', '话题链接已经复制到剪贴板')">44楼</strong>
													<em onclick="$('postmessage_289365').className='t_bigfont'">大</em>							<em onclick="$('postmessage_289365').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_289365').className='t_smallfont'">小</em>												发表于 2009-10-19 10:16&nbsp;																					<a href="viewthread.php?tid=24441&amp;page=1&amp;authorid=8119" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_43"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_43"></div><div id="ad_thread4_43"></div>
						
						
																											<div id="postmessage_289365" class="t_msgfont">标题党！！小心被党国河蟹。肉身赴米国不叫翻墙，叫跳墙</div>

							
							
							
							
															<div id="post_rate_div_289365"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo289365_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=8119" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=24441&amp;repquote=289365&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 289365)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_43"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid296235" summary="pid296235" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=4090" target="_blank" id="userinfo296235" class="dropmenu" onmouseover="showMenu(this.id)">菜青虫</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">老蔡</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=4090">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=4090&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_44" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum296235" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=24441&page=1#pid296235', '话题链接已经复制到剪贴板')">45楼</strong>
													<em onclick="$('postmessage_296235').className='t_bigfont'">大</em>							<em onclick="$('postmessage_296235').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_296235').className='t_smallfont'">小</em>												发表于 2009-10-22 23:51&nbsp;																					<a href="viewthread.php?tid=24441&amp;page=1&amp;authorid=4090" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_44"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_44"></div><div id="ad_thread4_44"></div>
						
						
																											<div id="postmessage_296235" class="t_msgfont">兰州是邪恶的标题党</div>

							
							
							
							
															<div id="post_rate_div_296235"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo296235_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=4090" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=24441&amp;repquote=296235&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 296235)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_44"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid297309" summary="pid297309" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=5515" target="_blank" id="userinfo297309" class="dropmenu" onmouseover="showMenu(this.id)">石井武濑</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">网界暴徒</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=5515">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=5515&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_45" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum297309" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=24441&page=1#pid297309', '话题链接已经复制到剪贴板')">46楼</strong>
													<em onclick="$('postmessage_297309').className='t_bigfont'">大</em>							<em onclick="$('postmessage_297309').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_297309').className='t_smallfont'">小</em>												发表于 2009-10-23 17:37&nbsp;																					<a href="viewthread.php?tid=24441&amp;page=1&amp;authorid=5515" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_45"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_45"></div><div id="ad_thread4_45"></div>
						
						
																											<div id="postmessage_297309" class="t_msgfont">我肏，说到点子上了</div>

							
							
							
							
															<div id="post_rate_div_297309"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo297309_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=5515" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=24441&amp;repquote=297309&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 297309)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_45"></div>				</div>
			</td>
		</tr>
		</table>
		</div>
</form>





<div class="pages_btns">
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=24441&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=24441&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
				<span class="postbtn" id="newspecialtmp" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=24441&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

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

	<form method="post" id="postform" action="post.php?action=reply&amp;fid=26&amp;tid=24441&amp;extra=&amp;replysubmit=yes" onSubmit="return validate(this)">
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
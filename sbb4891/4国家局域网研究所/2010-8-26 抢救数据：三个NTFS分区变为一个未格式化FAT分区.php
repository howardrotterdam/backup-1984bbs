<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<title>抢救数据：三个NTFS分区变为一个未格式化FAT分区 - 国家局域网研究所 -  1984bbs.com </title>
<meta name="keywords" content="" />
<meta name="MSSmartTagsPreventParsing" content="True" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<link rel="archives" title="1984bbs.com" href="https://1984bbs.com/archiver/" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_viewthread.css" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_common.css" />
<script type="text/javascript">
	var discuz_uid = 13019;var IMGDIR = 'images/default';var attackevasive = '0';var gid = 0;var STYLEID = '1';
	gid = parseInt('3');var fid = parseInt('26');var tid = parseInt('56527');
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
			<p><a href="index.php" id="forumlist" onmouseover="showMenu(this.id)" class="dropmenu">1984bbs.com</a> &raquo; <a href="forumdisplay.php?fid=26">国家局域网研究所</a> &raquo; 抢救数据：三个NTFS分区变为一个未格式化FAT分区</p>
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
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=56527&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=56527&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
				<span class="postbtn" id="newspecial" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=56527&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

	<ul class="popupmenu_popup newspecialmenu" id="newspecial_menu" style="display: none">
		<li><a href="post.php?action=newthread&amp;fid=26&amp;extra=">发新话题</a></li>
		<li class="poll"><a href="post.php?action=newthread&amp;fid=26&amp;extra=&amp;special=1">发布投票</a></li>													</ul>

<form method="post" name="modactions">
	<input type="hidden" name="formhash" value="823c9fa2" />
	<div class="mainbox viewthread">
		<span class="headactions">
					<a href="my.php?item=favorites&amp;tid=56527" id="ajax_favorite" onclick="ajaxmenu(event, this.id, 3000, 0)">收藏</a>
			<a href="my.php?item=subscriptions&amp;subadd=56527" id="ajax_subscription" onclick="ajaxmenu(event, this.id, 3000, null, 0)">订阅</a>
			<a href="misc.php?action=emailfriend&amp;tid=56527" id="emailfriend" onclick="ajaxmenu(event, this.id, 9000000, null, 0)">推荐</a>
				<a href="viewthread.php?action=printable&amp;tid=56527" target="_blank" class="notabs">打印</a>
				</span>
		<h1>抢救数据：三个NTFS分区变为一个未格式化FAT分区		</h1>
							<table id="pid798477" summary="pid798477" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6354" target="_blank" id="userinfo798477" class="dropmenu" onmouseover="showMenu(this.id)">北国游子</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">真诚、坦荡，狂热、执着，无怨无悔、嫉恶如仇</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6354">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6354&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_0" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum798477" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=56527&page=1#pid798477', '话题链接已经复制到剪贴板')">1楼</strong>
													<em onclick="$('postmessage_798477').className='t_bigfont'">大</em>							<em onclick="$('postmessage_798477').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_798477').className='t_smallfont'">小</em>												发表于 2010-8-26 16:55&nbsp;																					<a href="viewthread.php?tid=56527&amp;page=1&amp;authorid=6354" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_0"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_0"></div><div id="ad_thread4_0"></div>
													<h2>抢救数据：三个NTFS分区变为一个未格式化FAT分区</h2>
						
						
																											<div id="postmessage_798477" class="t_msgfont">我十多年收集的资料和备用程序，放在一个40G硬盘。今天用DELL Memory Key Boot Utility制作启动U盘的时候点错为这个盘符，且选成FAT，但该程序最后说该盘写保护（？并未对该盘采用任何保护措施）所以没成功。<br />
现在，该盘三个NTFS分区变为一个未格式化FAT分区，且这个盘在资源管理器无法读取，插入该盘后，资源管理器没有响应，但系统其他正常。<br />
用Norton PMagicNT转换格式，在DOS下恢复每个文件的错误链接成功，但几个小时后说空间不足没有完成。（一个教训是：严格遵守每个盘留有15%自由空间！）Norton PMagicNT建议“Windows CheckDisk”，同样在DOS下做了几个小时最后说空间不足没有完成。<br />
估计该盘内容应该还在。也许转换格式后一切就正常了。<br />
<br />
求助：什么软件可以恢复这个盘的数据！<br />
<br />
这可是我十多年收集的所有资料！！！谢谢了！<br />
<br />
[<i> 本帖最后由 北国游子 于 2010-8-27 10:40 编辑 </i>]</div>

							
							
							
							
															<div id="post_rate_div_798477"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo798477_menu" style="display: none;">
										<div class="imicons">
													<a target='_blank' href='http://settings.messenger.live.com/Conversation/IMMe.aspx?invitee=bgyzhm@hotmail.com&mkt=zh-cn'><img style='border-style: none;' src='http://messenger.services.live.com/users/bgyzhm@hotmail.com/presenceimage?mkt=zh-cn' width='16' height='16' /></a>
																																			</div>
										<dl></dl>
										<p><a href="space.php?uid=6354" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=56527&amp;repquote=798477&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 798477)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_0"></div>				</div>
			</td>
		</tr>
		</table>
		</div><div class="ad_column" id="ad_interthread"><a href="/viewthread.php?tid=54699" target="_blank" style="color:red;">1984bbs是一个非营利项目，它需要您的捐助！</font></a>		</div>
	<div class="mainbox viewthread">
			<table id="pid798484" summary="pid798484" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2213" target="_blank" id="userinfo798484" class="dropmenu" onmouseover="showMenu(this.id)">核子力量</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">Twitter.com/hzpower</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2213">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2213&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_1" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum798484" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=56527&page=1#pid798484', '话题链接已经复制到剪贴板')">2楼</strong>
													<em onclick="$('postmessage_798484').className='t_bigfont'">大</em>							<em onclick="$('postmessage_798484').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_798484').className='t_smallfont'">小</em>												发表于 2010-8-26 16:59&nbsp;																					<a href="viewthread.php?tid=56527&amp;page=1&amp;authorid=2213" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_1"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_1"></div><div id="ad_thread4_1"></div>
						
						
																											<div id="postmessage_798484" class="t_msgfont">在找到靠谱方法前先不要再尝试，避免数据再受损</div>

							
							
							
							
															<div id="post_rate_div_798484"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo798484_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://twitter.com/hzpower" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=2213" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=56527&amp;repquote=798484&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 798484)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_1"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid798494" summary="pid798494" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1429" target="_blank" id="userinfo798494" class="dropmenu" onmouseover="showMenu(this.id)">朝南生</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">奉旨革命</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1429">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1429&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_2" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum798494" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=56527&page=1#pid798494', '话题链接已经复制到剪贴板')">3楼</strong>
													<em onclick="$('postmessage_798494').className='t_bigfont'">大</em>							<em onclick="$('postmessage_798494').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_798494').className='t_smallfont'">小</em>												发表于 2010-8-26 17:05&nbsp;																					<a href="viewthread.php?tid=56527&amp;page=1&amp;authorid=1429" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_2"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_2"></div><div id="ad_thread4_2"></div>
						
						
																											<div id="postmessage_798494" class="t_msgfont">recuva<br />
格式化后启动深度搜索<br />
都能找回来</div>

							
							
							
							
															<div id="post_rate_div_798494"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo798494_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1429" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=56527&amp;repquote=798494&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 798494)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_2"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid798513" summary="pid798513" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6354" target="_blank" id="userinfo798513" class="dropmenu" onmouseover="showMenu(this.id)">北国游子</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">真诚、坦荡，狂热、执着，无怨无悔、嫉恶如仇</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6354">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6354&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_3" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum798513" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=56527&page=1#pid798513', '话题链接已经复制到剪贴板')">4楼</strong>
													<em onclick="$('postmessage_798513').className='t_bigfont'">大</em>							<em onclick="$('postmessage_798513').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_798513').className='t_smallfont'">小</em>												发表于 2010-8-26 17:16&nbsp;																					<a href="viewthread.php?tid=56527&amp;page=1&amp;authorid=6354" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_3"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_3"></div><div id="ad_thread4_3"></div>
						
						
																											<div id="postmessage_798513" class="t_msgfont">recuva试过了，深度搜索到四张图片而已。<br />
<br />
格式化？然后再搜索？有点恐怖哦</div>

							
							
							
							
															<div id="post_rate_div_798513"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo798513_menu" style="display: none;">
										<div class="imicons">
													<a target='_blank' href='http://settings.messenger.live.com/Conversation/IMMe.aspx?invitee=bgyzhm@hotmail.com&mkt=zh-cn'><img style='border-style: none;' src='http://messenger.services.live.com/users/bgyzhm@hotmail.com/presenceimage?mkt=zh-cn' width='16' height='16' /></a>
																																			</div>
										<dl></dl>
										<p><a href="space.php?uid=6354" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=56527&amp;repquote=798513&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 798513)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_3"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid798516" summary="pid798516" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=9517" target="_blank" id="userinfo798516" class="dropmenu" onmouseover="showMenu(this.id)">老西</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=9517">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=9517&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_4" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum798516" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=56527&page=1#pid798516', '话题链接已经复制到剪贴板')">5楼</strong>
													<em onclick="$('postmessage_798516').className='t_bigfont'">大</em>							<em onclick="$('postmessage_798516').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_798516').className='t_smallfont'">小</em>												发表于 2010-8-26 17:17&nbsp;																					<a href="viewthread.php?tid=56527&amp;page=1&amp;authorid=9517" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_4"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_4"></div><div id="ad_thread4_4"></div>
													<h2>不要草率···········</h2>
						
						
																											<div id="postmessage_798516" class="t_msgfont">要是非找回来不可数据，最好去专业的数据恢复公司·····找大一点的····<br />
最好一次恢复成功·······<br />
要是中间再换公司做···很少有做成的········</div>

							
							
							
							
															<div id="post_rate_div_798516"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo798516_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=9517" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=56527&amp;repquote=798516&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 798516)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_4"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid798521" summary="pid798521" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=9517" target="_blank" id="userinfo798521" class="dropmenu" onmouseover="showMenu(this.id)">老西</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=9517">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=9517&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_5" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum798521" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=56527&page=1#pid798521', '话题链接已经复制到剪贴板')">6楼</strong>
													<em onclick="$('postmessage_798521').className='t_bigfont'">大</em>							<em onclick="$('postmessage_798521').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_798521').className='t_smallfont'">小</em>												发表于 2010-8-26 17:19&nbsp;																					<a href="viewthread.php?tid=56527&amp;page=1&amp;authorid=9517" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_5"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_5"></div><div id="ad_thread4_5"></div>
													<h2>回复 4楼 北国游子 的话题</h2>
						
						
																											<div id="postmessage_798521" class="t_msgfont">没看清···是你老哥啊········<br />
<br />
唉唉唉·············你的东西要找个靠的住的人帮你恢复···········<br />
不要用他的盘帮你倒数据··········切切··········<br />
<br />
—— 你最好盯着···········</div>

							
							
							
							
															<div id="post_rate_div_798521"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo798521_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=9517" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=56527&amp;repquote=798521&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 798521)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_5"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid798554" summary="pid798554" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10259" target="_blank" id="userinfo798554" class="dropmenu" onmouseover="showMenu(this.id)">darrenlee</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10259">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10259&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_6" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum798554" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=56527&page=1#pid798554', '话题链接已经复制到剪贴板')">7楼</strong>
													<em onclick="$('postmessage_798554').className='t_bigfont'">大</em>							<em onclick="$('postmessage_798554').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_798554').className='t_smallfont'">小</em>												发表于 2010-8-26 17:50&nbsp;																					<a href="viewthread.php?tid=56527&amp;page=1&amp;authorid=10259" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_6"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_6"></div><div id="ad_thread4_6"></div>
						
						
																											<div id="postmessage_798554" class="t_msgfont"><a href="http://www.cgsecurity.org/wiki/TestDisk" target="_blank">http://www.cgsecurity.org/wiki/TestDisk</a> <br />
<br />
快去试试</div>

							
							
							
							
															<div id="post_rate_div_798554"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo798554_menu" style="display: none;">
										<dl></dl>
											<p><a href="https://twitter.com/darrenlee3" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=10259" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=56527&amp;repquote=798554&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 798554)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_6"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid798561" summary="pid798561" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1960" target="_blank" id="userinfo798561" class="dropmenu" onmouseover="showMenu(this.id)">库存袈裟</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">@bruceku 想象力比知识更重要。</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1960">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1960&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_7" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum798561" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=56527&page=1#pid798561', '话题链接已经复制到剪贴板')">8楼</strong>
													<em onclick="$('postmessage_798561').className='t_bigfont'">大</em>							<em onclick="$('postmessage_798561').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_798561').className='t_smallfont'">小</em>												发表于 2010-8-26 17:56&nbsp;																					<a href="viewthread.php?tid=56527&amp;page=1&amp;authorid=1960" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_7"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_7"></div><div id="ad_thread4_7"></div>
						
						
																											<div id="postmessage_798561" class="t_msgfont">直接送数据恢复公司吧。别折腾了。</div>

							
							
							
							
															<div id="post_rate_div_798561"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo798561_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1960" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=56527&amp;repquote=798561&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 798561)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_7"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid798564" summary="pid798564" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10259" target="_blank" id="userinfo798564" class="dropmenu" onmouseover="showMenu(this.id)">darrenlee</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10259">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10259&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_8" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum798564" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=56527&page=1#pid798564', '话题链接已经复制到剪贴板')">9楼</strong>
													<em onclick="$('postmessage_798564').className='t_bigfont'">大</em>							<em onclick="$('postmessage_798564').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_798564').className='t_smallfont'">小</em>												发表于 2010-8-26 18:02&nbsp;																					<a href="viewthread.php?tid=56527&amp;page=1&amp;authorid=10259" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_8"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_8"></div><div id="ad_thread4_8"></div>
						
						
																											<div id="postmessage_798564" class="t_msgfont">你不用Norton PMagicNT转，而直接找软件进行恢复就好办多。<br />
<br />
Norton PMagicNT不知道是否重写了MFT，里面的元数据要是没了，你的数据很难找回来，总不能用winhex扒着硬盘上得每一个字节去对应着找。。。。<br />
<br />
[<i> 本帖最后由 darrenlee 于 2010-8-26 18:17 编辑 </i>]</div>

							
							
							
							
															<div id="post_rate_div_798564"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo798564_menu" style="display: none;">
										<dl></dl>
											<p><a href="https://twitter.com/darrenlee3" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=10259" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=56527&amp;repquote=798564&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 798564)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_8"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid798567" summary="pid798567" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10259" target="_blank" id="userinfo798567" class="dropmenu" onmouseover="showMenu(this.id)">darrenlee</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10259">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10259&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_9" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum798567" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=56527&page=1#pid798567', '话题链接已经复制到剪贴板')">10楼</strong>
													<em onclick="$('postmessage_798567').className='t_bigfont'">大</em>							<em onclick="$('postmessage_798567').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_798567').className='t_smallfont'">小</em>												发表于 2010-8-26 18:04&nbsp;																					<a href="viewthread.php?tid=56527&amp;page=1&amp;authorid=10259" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_9"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_9"></div><div id="ad_thread4_9"></div>
						
						
																											<div id="postmessage_798567" class="t_msgfont">数据恢复公司都是狮子大开口，企业重要信息还值得一去，个人的数据，楼主舍得花那个钱么</div>

							
							
							
							
															<div id="post_rate_div_798567"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo798567_menu" style="display: none;">
										<dl></dl>
											<p><a href="https://twitter.com/darrenlee3" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=10259" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=56527&amp;repquote=798567&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 798567)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_9"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid798584" summary="pid798584" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=9517" target="_blank" id="userinfo798584" class="dropmenu" onmouseover="showMenu(this.id)">老西</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=9517">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=9517&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_10" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum798584" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=56527&page=1#pid798584', '话题链接已经复制到剪贴板')">11楼</strong>
													<em onclick="$('postmessage_798584').className='t_bigfont'">大</em>							<em onclick="$('postmessage_798584').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_798584').className='t_smallfont'">小</em>												发表于 2010-8-26 18:18&nbsp;																					<a href="viewthread.php?tid=56527&amp;page=1&amp;authorid=9517" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_10"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_10"></div><div id="ad_thread4_10"></div>
													<h2>回复 10楼 darrenlee 的话题</h2>
						
						
																											<div id="postmessage_798584" class="t_msgfont">从数据恢复而言········任何恢复都是有风险的··········<br />
但是，自己折腾的风险更大一些····一旦失手，更多的情况是无法逆转的数据彻底丢失·············<br />
那时，就算是花再多的钱，数据恢复公司同样是无能为力了·······<br />
<br />
所以······如何解决，让楼主自己决定吧··············<br />
<br />
PS ：本人严重不赞成自己恢复数据，除非你本来就是干这个的···············<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;还有，同样一块数据损伤的盘，不同的数据恢复工程师，思路不一样，那么，数据恢复的结果也不一样··········<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;这方面没有什么专家可言·············运气的成分很高········唯一可依赖的就是实际操作经验···········<br />
<br />
—— 楼主的盘是逻辑损伤·······找回来的几率还是很大的········<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;目前关键是要保持硬盘的原始状态，不要再运行工作了··············</div>

							
							
							
							
															<div id="post_rate_div_798584"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo798584_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=9517" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=56527&amp;repquote=798584&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 798584)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_10"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid798593" summary="pid798593" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10259" target="_blank" id="userinfo798593" class="dropmenu" onmouseover="showMenu(this.id)">darrenlee</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10259">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10259&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_11" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum798593" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=56527&page=1#pid798593', '话题链接已经复制到剪贴板')">12楼</strong>
													<em onclick="$('postmessage_798593').className='t_bigfont'">大</em>							<em onclick="$('postmessage_798593').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_798593').className='t_smallfont'">小</em>												发表于 2010-8-26 18:28&nbsp;																					<a href="viewthread.php?tid=56527&amp;page=1&amp;authorid=10259" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_11"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_11"></div><div id="ad_thread4_11"></div>
													<h2>回复 11楼 老西 的话题</h2>
						
						
																											<div id="postmessage_798593" class="t_msgfont">对，就是钱的问题<br />
<br />
以前我在lvm下缩一个ext4分区，size没算好，多缩了1G空间，重新mount上，少了10G的文件，那个伤心那，，，，，本来想去数据恢复公司的，一问： 最少2000。。。。。。不去了，后来直接把lvm又扩到原来的大小，ext4 resize到最大，数据又完整的回来了 ，看来lvm，resize的时候都没有破坏文件系统的数据结构，虚惊一场。<br />
<br />
[<i> 本帖最后由 darrenlee 于 2010-8-26 18:30 编辑 </i>]</div>

							
							
							
							
															<div id="post_rate_div_798593"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo798593_menu" style="display: none;">
										<dl></dl>
											<p><a href="https://twitter.com/darrenlee3" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=10259" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=56527&amp;repquote=798593&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 798593)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_11"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid798603" summary="pid798603" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6354" target="_blank" id="userinfo798603" class="dropmenu" onmouseover="showMenu(this.id)">北国游子</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">真诚、坦荡，狂热、执着，无怨无悔、嫉恶如仇</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6354">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6354&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_12" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum798603" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=56527&page=1#pid798603', '话题链接已经复制到剪贴板')">13楼</strong>
													<em onclick="$('postmessage_798603').className='t_bigfont'">大</em>							<em onclick="$('postmessage_798603').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_798603').className='t_smallfont'">小</em>												发表于 2010-8-26 18:41&nbsp;																					<a href="viewthread.php?tid=56527&amp;page=1&amp;authorid=6354" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_12"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_12"></div><div id="ad_thread4_12"></div>
						
						
																											<div id="postmessage_798603" class="t_msgfont">testdisk_win.exe处理过了，没结果。<br />
<br />
之前也用PTDD分区表医生，重建分区表不成功。可以用这个来修复或重建引导记录吗？</div>

							
							
							
							
															<div id="post_rate_div_798603"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo798603_menu" style="display: none;">
										<div class="imicons">
													<a target='_blank' href='http://settings.messenger.live.com/Conversation/IMMe.aspx?invitee=bgyzhm@hotmail.com&mkt=zh-cn'><img style='border-style: none;' src='http://messenger.services.live.com/users/bgyzhm@hotmail.com/presenceimage?mkt=zh-cn' width='16' height='16' /></a>
																																			</div>
										<dl></dl>
										<p><a href="space.php?uid=6354" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=56527&amp;repquote=798603&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 798603)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_12"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid798606" summary="pid798606" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=9517" target="_blank" id="userinfo798606" class="dropmenu" onmouseover="showMenu(this.id)">老西</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=9517">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=9517&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_13" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum798606" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=56527&page=1#pid798606', '话题链接已经复制到剪贴板')">14楼</strong>
													<em onclick="$('postmessage_798606').className='t_bigfont'">大</em>							<em onclick="$('postmessage_798606').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_798606').className='t_smallfont'">小</em>												发表于 2010-8-26 18:44&nbsp;																					<a href="viewthread.php?tid=56527&amp;page=1&amp;authorid=9517" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_13"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_13"></div><div id="ad_thread4_13"></div>
													<h2>回复 12楼 darrenlee 的话题</h2>
						
						
																											<div id="postmessage_798606" class="t_msgfont">你这是运气好··············<br />
<br />
既然你懂一点，那就去看看这篇帖子·······或许能给你今后一点帮助：<br />
<br />
<a href="http://goo.gl/U6zH" target="_blank">http://goo.gl/U6zH</a></div>

							
							
							
							
															<div id="post_rate_div_798606"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo798606_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=9517" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=56527&amp;repquote=798606&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 798606)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_13"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid798625" summary="pid798625" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10259" target="_blank" id="userinfo798625" class="dropmenu" onmouseover="showMenu(this.id)">darrenlee</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10259">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10259&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_14" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum798625" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=56527&page=1#pid798625', '话题链接已经复制到剪贴板')">15楼</strong>
													<em onclick="$('postmessage_798625').className='t_bigfont'">大</em>							<em onclick="$('postmessage_798625').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_798625').className='t_smallfont'">小</em>												发表于 2010-8-26 19:02&nbsp;																					<a href="viewthread.php?tid=56527&amp;page=1&amp;authorid=10259" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_14"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_14"></div><div id="ad_thread4_14"></div>
													<h2>回复 14楼 老西 的话题</h2>
						
						
																											<div id="postmessage_798625" class="t_msgfont">我是cmule的老人了，2006初就注册了<br />
那帖子写的挺细致，不过都是针对window/dos下文件系统，<br />
<br />
以后有兴趣的时候再研究研究<br />
<br />
对了，那帖子楼主可以看看，也许有帮助</div>

							
							
							
							
															<div id="post_rate_div_798625"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo798625_menu" style="display: none;">
										<dl></dl>
											<p><a href="https://twitter.com/darrenlee3" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=10259" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=56527&amp;repquote=798625&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 798625)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_14"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid798631" summary="pid798631" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10259" target="_blank" id="userinfo798631" class="dropmenu" onmouseover="showMenu(this.id)">darrenlee</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10259">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10259&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_15" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum798631" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=56527&page=1#pid798631', '话题链接已经复制到剪贴板')">16楼</strong>
													<em onclick="$('postmessage_798631').className='t_bigfont'">大</em>							<em onclick="$('postmessage_798631').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_798631').className='t_smallfont'">小</em>												发表于 2010-8-26 19:07&nbsp;																					<a href="viewthread.php?tid=56527&amp;page=1&amp;authorid=10259" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_15"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_15"></div><div id="ad_thread4_15"></div>
						
						
																											<div id="postmessage_798631" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>北国游子</i> 于 2010-8-26 18:41 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=798603&amp;ptid=56527" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
testdisk_win.exe处理过了，没结果。<br />
<br />
之前也用PTDD分区表医生，重建分区表不成功。可以用这个来修复或重建引导记录吗？ </blockquote></div>TestDisk can<br />
Fix partition table, recover deleted partition<br />
<br />
<a href="http://www.cgsecurity.org/wiki/TestDisk" target="_blank">http://www.cgsecurity.org/wiki/TestDisk</a></div>

							
							
							
							
															<div id="post_rate_div_798631"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo798631_menu" style="display: none;">
										<dl></dl>
											<p><a href="https://twitter.com/darrenlee3" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=10259" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=56527&amp;repquote=798631&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 798631)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_15"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid798648" summary="pid798648" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6354" target="_blank" id="userinfo798648" class="dropmenu" onmouseover="showMenu(this.id)">北国游子</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">真诚、坦荡，狂热、执着，无怨无悔、嫉恶如仇</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6354">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6354&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_16" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum798648" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=56527&page=1#pid798648', '话题链接已经复制到剪贴板')">17楼</strong>
													<em onclick="$('postmessage_798648').className='t_bigfont'">大</em>							<em onclick="$('postmessage_798648').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_798648').className='t_smallfont'">小</em>												发表于 2010-8-26 19:32&nbsp;																					<a href="viewthread.php?tid=56527&amp;page=1&amp;authorid=6354" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_16"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_16"></div><div id="ad_thread4_16"></div>
						
						
																											<div id="postmessage_798648" class="t_msgfont">老西的帖子草草浏览了。<br />
<br />
我的盘现在看就是将原来的NTFS改为了FAT，造成无法读取数据，而且忽略了原来的分区。盘中的内容绝对没有动，我也不可能再写入。<br />
<br />
现在就是想，有没有什么软件可以修改格式，然后应该一般的恢复软件都可以恢复，甚至直接就好了。<br />
<br />
老西那个帖主介绍的两个软件等下我去找找看。另，能否拜托那位老弟帮帮忙。我是给穷人，但我可以共享我所有的收藏资料，还是蛮有价值的。当然看对方如何看待。大致说，近百年的重大事件都有了。文字上亿，还有视频和图片。单单89的文字也有数百万，照片数千，还有视频。</div>

							
							
							
							
															<div id="post_rate_div_798648"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo798648_menu" style="display: none;">
										<div class="imicons">
													<a target='_blank' href='http://settings.messenger.live.com/Conversation/IMMe.aspx?invitee=bgyzhm@hotmail.com&mkt=zh-cn'><img style='border-style: none;' src='http://messenger.services.live.com/users/bgyzhm@hotmail.com/presenceimage?mkt=zh-cn' width='16' height='16' /></a>
																																			</div>
										<dl></dl>
										<p><a href="space.php?uid=6354" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=56527&amp;repquote=798648&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 798648)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_16"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid798653" summary="pid798653" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6354" target="_blank" id="userinfo798653" class="dropmenu" onmouseover="showMenu(this.id)">北国游子</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">真诚、坦荡，狂热、执着，无怨无悔、嫉恶如仇</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6354">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6354&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_17" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum798653" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=56527&page=1#pid798653', '话题链接已经复制到剪贴板')">18楼</strong>
													<em onclick="$('postmessage_798653').className='t_bigfont'">大</em>							<em onclick="$('postmessage_798653').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_798653').className='t_smallfont'">小</em>												发表于 2010-8-26 19:35&nbsp;																					<a href="viewthread.php?tid=56527&amp;page=1&amp;authorid=6354" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_17"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_17"></div><div id="ad_thread4_17"></div>
													<h2>回复 16楼 darrenlee 的话题</h2>
						
						
																											<div id="postmessage_798653" class="t_msgfont">我就是这里下的：testdisk-6.12-WIP.win.zip。<br />
<br />
是运行testdisk_win.exe吗？选择“create”？能否稍微具体些指导下？<br />
<br />
多谢！</div>

							
							
							
							
															<div id="post_rate_div_798653"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo798653_menu" style="display: none;">
										<div class="imicons">
													<a target='_blank' href='http://settings.messenger.live.com/Conversation/IMMe.aspx?invitee=bgyzhm@hotmail.com&mkt=zh-cn'><img style='border-style: none;' src='http://messenger.services.live.com/users/bgyzhm@hotmail.com/presenceimage?mkt=zh-cn' width='16' height='16' /></a>
																																			</div>
										<dl></dl>
										<p><a href="space.php?uid=6354" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=56527&amp;repquote=798653&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 798653)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_17"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid798694" summary="pid798694" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=18137" target="_blank" id="userinfo798694" class="dropmenu" onmouseover="showMenu(this.id)">Aragorn</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">三俗份子</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=18137">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=18137&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_18" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum798694" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=56527&page=1#pid798694', '话题链接已经复制到剪贴板')">19楼</strong>
													<em onclick="$('postmessage_798694').className='t_bigfont'">大</em>							<em onclick="$('postmessage_798694').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_798694').className='t_smallfont'">小</em>												发表于 2010-8-26 20:03&nbsp;																					<a href="viewthread.php?tid=56527&amp;page=1&amp;authorid=18137" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_18"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_18"></div><div id="ad_thread4_18"></div>
						
						
																											<div id="postmessage_798694" class="t_msgfont">试一下diskgen</div>

							
							
							
							
															<div id="post_rate_div_798694"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo798694_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=18137" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=56527&amp;repquote=798694&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 798694)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_18"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid798696" summary="pid798696" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=18137" target="_blank" id="userinfo798696" class="dropmenu" onmouseover="showMenu(this.id)">Aragorn</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">三俗份子</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=18137">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=18137&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_19" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum798696" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=56527&page=1#pid798696', '话题链接已经复制到剪贴板')">20楼</strong>
													<em onclick="$('postmessage_798696').className='t_bigfont'">大</em>							<em onclick="$('postmessage_798696').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_798696').className='t_smallfont'">小</em>												发表于 2010-8-26 20:04&nbsp;																					<a href="viewthread.php?tid=56527&amp;page=1&amp;authorid=18137" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_19"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_19"></div><div id="ad_thread4_19"></div>
						
						
																											<div id="postmessage_798696" class="t_msgfont">对了,现在改名叫 Disk Genius</div>

							
							
							
							
															<div id="post_rate_div_798696"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo798696_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=18137" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=56527&amp;repquote=798696&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 798696)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_19"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid798700" summary="pid798700" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10259" target="_blank" id="userinfo798700" class="dropmenu" onmouseover="showMenu(this.id)">darrenlee</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10259">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10259&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_20" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum798700" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=56527&page=1#pid798700', '话题链接已经复制到剪贴板')">21楼</strong>
													<em onclick="$('postmessage_798700').className='t_bigfont'">大</em>							<em onclick="$('postmessage_798700').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_798700').className='t_smallfont'">小</em>												发表于 2010-8-26 20:07&nbsp;																					<a href="viewthread.php?tid=56527&amp;page=1&amp;authorid=10259" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_20"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_20"></div><div id="ad_thread4_20"></div>
													<h2>回复 18楼 北国游子 的话题</h2>
						
						
																											<div id="postmessage_798700" class="t_msgfont">testdisk 我没用过，因为linux的数据恢复很多人都推荐它，开源的嘛。<br />
<br />
绿盟 xdowns.com 里 都能找到 老西 转的那篇帖子最后面所说的三款商业软件，你试一下吧<br />
<br />
数据恢复这东西，靠经验和独有的技术，不是专门搞这个的人恐怕没这个经验和技术<br />
<br />
Sorry , you are on your own ,buddy.</div>

							
							
							
							
															<div id="post_rate_div_798700"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo798700_menu" style="display: none;">
										<dl></dl>
											<p><a href="https://twitter.com/darrenlee3" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=10259" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=56527&amp;repquote=798700&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 798700)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_20"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid798921" summary="pid798921" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6354" target="_blank" id="userinfo798921" class="dropmenu" onmouseover="showMenu(this.id)">北国游子</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">真诚、坦荡，狂热、执着，无怨无悔、嫉恶如仇</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6354">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6354&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_21" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum798921" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=56527&page=1#pid798921', '话题链接已经复制到剪贴板')">22楼</strong>
													<em onclick="$('postmessage_798921').className='t_bigfont'">大</em>							<em onclick="$('postmessage_798921').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_798921').className='t_smallfont'">小</em>												发表于 2010-8-26 22:16&nbsp;																					<a href="viewthread.php?tid=56527&amp;page=1&amp;authorid=6354" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_21"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_21"></div><div id="ad_thread4_21"></div>
													<h2>回复 19楼 Aragorn 的话题</h2>
						
						
																											<div id="postmessage_798921" class="t_msgfont">DiskGenius.exe<br />
选择工具-重建分区表，按柱面高级交互方式，依次出现下列选择：<br />
<br />
1、0柱面：37.3GB，FAT32，未格式化(0)——忽略<br />
2、0柱面：37.3GB，FAT32，主分区(0)——忽略<br />
3、2柱面：扩展分区表，3个逻辑分区——<br />
4、2柱面：8.9G，NTFS，FREEDOM(4)——<br />
5、1165柱面：扩展分区表，1个逻辑分区——<br />
6、1165柱面：8.8G，NTFS，PROGRAM(4)——<br />
7、1568柱面：7.0G，FAT32，逻辑分区(4)——<br />
8、2314柱面：扩展分区表，1个逻辑分区——<br />
9、2314柱面：19.5G，NTFS，MEDIA(4)——<br />
<br />
其中4、6、9正是我丢失的分区。但7是我所不知的。<br />
1、2、选择“忽略”，3、4、5、6、8、9选择“保留”。但7怎么办？选择“保留”，会对其他正确分区主要是9那个分区会产生影响吗？如果选择“忽略”呢？</div>

							
							
							
							
															<div id="post_rate_div_798921"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo798921_menu" style="display: none;">
										<div class="imicons">
													<a target='_blank' href='http://settings.messenger.live.com/Conversation/IMMe.aspx?invitee=bgyzhm@hotmail.com&mkt=zh-cn'><img style='border-style: none;' src='http://messenger.services.live.com/users/bgyzhm@hotmail.com/presenceimage?mkt=zh-cn' width='16' height='16' /></a>
																																			</div>
										<dl></dl>
										<p><a href="space.php?uid=6354" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=56527&amp;repquote=798921&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 798921)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_21"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid799146" summary="pid799146" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6354" target="_blank" id="userinfo799146" class="dropmenu" onmouseover="showMenu(this.id)">北国游子</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">真诚、坦荡，狂热、执着，无怨无悔、嫉恶如仇</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6354">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6354&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_22" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum799146" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=56527&page=1#pid799146', '话题链接已经复制到剪贴板')">23楼</strong>
													<em onclick="$('postmessage_799146').className='t_bigfont'">大</em>							<em onclick="$('postmessage_799146').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_799146').className='t_smallfont'">小</em>												发表于 2010-8-27 00:24&nbsp;																					<a href="viewthread.php?tid=56527&amp;page=1&amp;authorid=6354" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_22"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_22"></div><div id="ad_thread4_22"></div>
													<h2>哈，成功！</h2>
						
						
																											<div id="postmessage_799146" class="t_msgfont">DiskGenius<br />
选择工具-重建分区表，高级交互方式、按柱面。其实全部按默认选择。过程如下：<br />
1、0柱面：37.3GB，FAT32，未格式化(0)——错误<br />
2、0柱面：37.3GB，FAT32，主分区(0)——错误<br />
3、2柱面：扩展分区表，3个逻辑分区——正确<br />
4、2柱面：8.9G，NTFS，FREEDOM(4)——正确<br />
5、1165柱面：扩展分区表，1个逻辑分区——正确<br />
6、1165柱面：8.8G，NTFS，PROGRAM(4)——正确<br />
7、1568柱面：7.0G，FAT32，逻辑分区(4)——错误<br />
8、2314柱面：扩展分区表，1个逻辑分区——正确<br />
9、2314柱面：19.5G，NTFS，MEDIA(4)——正确<br />
<br />
先全部选择“忽略”，把整个盘的分区结构看一下。注意：每到一个选项出现的时候，DiskGenius主窗口会出现按此选择在该盘出现的内容，可依次判断该选项是否正确。经多次反复这个过程，最后发现：0柱面判断整盘容量37.3GB，而4、6、7、9三项判断的分区总量达到44.2G！决定放弃“7、1568柱面：7.0G，FAT32，逻辑分区(4)”。<br />
也选择过“按磁道”和“按扇区”，其实只是DiskGenius检测得更细致，时间会长很多，结果相同。如果是分区问题，需要检测修正的应该在柱面前端；如果是分区内的文件问题，选择“按磁道”和“按扇区”或许更有效。选中“检测时包含其他相关扇区”时程序没有响应！<br />
当“3、2柱面：扩展分区表，3个逻辑分区”选择“保留”后，DiskGenius马上按这个选择执行，其实后面的选项是无效的。之后保存分区表，即刻生效。全部文件，至少现在看根目录全部都在。<br />
<br />
谢谢Aragorn推荐的软件！也谢谢所有关心的朋友！<br />
此结果供某些需要的朋友参考。但祝愿不要有人遇到这个问题，就像律师不能说“再见”：）<br />
<br />
再说明一下：<br />
那个“7、1568柱面：7.0G，FAT32，逻辑分区(4)”可能源于此：该盘最前端我留了15.7M的未分配空间，为了防止病毒修改分区表。<br />
<br />
补充谢谢老西！尽管老西的建议没被采取，却是善意的。除非老西是某数据抢救公司的托：）但好像没有什么可行性，也未见老西有此动向：）<br />
<br />
[<i> 本帖最后由 北国游子 于 2010-8-27 11:20 编辑 </i>]</div>

							
							
							
							
															<div id="post_rate_div_799146"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo799146_menu" style="display: none;">
										<div class="imicons">
													<a target='_blank' href='http://settings.messenger.live.com/Conversation/IMMe.aspx?invitee=bgyzhm@hotmail.com&mkt=zh-cn'><img style='border-style: none;' src='http://messenger.services.live.com/users/bgyzhm@hotmail.com/presenceimage?mkt=zh-cn' width='16' height='16' /></a>
																																			</div>
										<dl></dl>
										<p><a href="space.php?uid=6354" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=56527&amp;repquote=799146&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 799146)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_22"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid799168" summary="pid799168" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=18137" target="_blank" id="userinfo799168" class="dropmenu" onmouseover="showMenu(this.id)">Aragorn</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">三俗份子</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=18137">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=18137&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_23" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum799168" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=56527&page=1#pid799168', '话题链接已经复制到剪贴板')">24楼</strong>
													<em onclick="$('postmessage_799168').className='t_bigfont'">大</em>							<em onclick="$('postmessage_799168').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_799168').className='t_smallfont'">小</em>												发表于 2010-8-27 00:41&nbsp;																					<a href="viewthread.php?tid=56527&amp;page=1&amp;authorid=18137" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_23"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_23"></div><div id="ad_thread4_23"></div>
						
						
																											<div id="postmessage_799168" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>北国游子</i> 于 2010-8-27 00:24 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=799146&amp;ptid=56527" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
哈，成功！<br />
DiskGenius<br />
选择工具-重建分区表，按柱面高级交互方式，“检测时包含其他相关扇区”这项选了以后程序死机。其实全部按默认选择。<br />
1、0柱面：37.3GB，FAT32，未格式化(0)——忽略<br />
2、0柱面：37.3GB，F ... </blockquote></div>恭喜你失而复得.这个软体,是我U盘常驻的硬盘维护工具,帮我处理了很多硬盘问题,性能卓越,不用谢我,感谢作者吧,要是觉得好的话,就捐赠一下他吧.</div>

							
							
							
							
															<div id="post_rate_div_799168"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo799168_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=18137" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=56527&amp;repquote=799168&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 799168)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_23"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid799191" summary="pid799191" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6354" target="_blank" id="userinfo799191" class="dropmenu" onmouseover="showMenu(this.id)">北国游子</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">真诚、坦荡，狂热、执着，无怨无悔、嫉恶如仇</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6354">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6354&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_24" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum799191" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=56527&page=1#pid799191', '话题链接已经复制到剪贴板')">25楼</strong>
													<em onclick="$('postmessage_799191').className='t_bigfont'">大</em>							<em onclick="$('postmessage_799191').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_799191').className='t_smallfont'">小</em>												发表于 2010-8-27 00:59&nbsp;																					<a href="viewthread.php?tid=56527&amp;page=1&amp;authorid=6354" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_24"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_24"></div><div id="ad_thread4_24"></div>
						
						
																											<div id="postmessage_799191" class="t_msgfont">这些是我十多年几乎全职所为。说比命值钱有些过，说是我自认为的个人价值所在差不多。真丢了，还真不知道怎么办……经常备份其实很难操作，每次添加新资料都备份一次吗，不过是减少损失而已。<br />
<br />
这个软件真不错，本身体积很小，但启动非常慢，可能是在扫描整个电脑所有硬盘信息吧。使用中经常显示“没有反映”，但过一段比较长的时间后仍能工作，但这可能是系统的功劳。作者当然要谢，只是谢不上，捐赠就免了，我只有微薄的社保养老而已。心敬了！</div>

							
							
							
							
															<div id="post_rate_div_799191"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo799191_menu" style="display: none;">
										<div class="imicons">
													<a target='_blank' href='http://settings.messenger.live.com/Conversation/IMMe.aspx?invitee=bgyzhm@hotmail.com&mkt=zh-cn'><img style='border-style: none;' src='http://messenger.services.live.com/users/bgyzhm@hotmail.com/presenceimage?mkt=zh-cn' width='16' height='16' /></a>
																																			</div>
										<dl></dl>
										<p><a href="space.php?uid=6354" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=56527&amp;repquote=799191&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 799191)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_24"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid799208" summary="pid799208" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=18137" target="_blank" id="userinfo799208" class="dropmenu" onmouseover="showMenu(this.id)">Aragorn</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">三俗份子</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=18137">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=18137&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_25" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum799208" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=56527&page=1#pid799208', '话题链接已经复制到剪贴板')">26楼</strong>
													<em onclick="$('postmessage_799208').className='t_bigfont'">大</em>							<em onclick="$('postmessage_799208').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_799208').className='t_smallfont'">小</em>												发表于 2010-8-27 01:20&nbsp;																					<a href="viewthread.php?tid=56527&amp;page=1&amp;authorid=18137" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_25"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_25"></div><div id="ad_thread4_25"></div>
						
						
																											<div id="postmessage_799208" class="t_msgfont">对于捐赠,你或许想得太多了,十元起就可以捐赠了.多少随意.当然这个纯个人自愿了.要不就不叫捐赠了.<br />
另外关于启动慢,还有显示“没有反映”,你可以用dos版本.dos很老,但是做维护工作,还是首选.<br />
备份操作,对于很重要的资料,还是必要的,麻烦点总比丢了的好.买个移动硬盘,装个软体做数据同步.一周一次或者根据实际情况操作.也不会用你多长时间.</div>

							
							
							
							
															<div id="post_rate_div_799208"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo799208_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=18137" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=56527&amp;repquote=799208&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 799208)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_25"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid799213" summary="pid799213" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6354" target="_blank" id="userinfo799213" class="dropmenu" onmouseover="showMenu(this.id)">北国游子</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">真诚、坦荡，狂热、执着，无怨无悔、嫉恶如仇</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6354">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6354&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_26" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum799213" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=56527&page=1#pid799213', '话题链接已经复制到剪贴板')">27楼</strong>
													<em onclick="$('postmessage_799213').className='t_bigfont'">大</em>							<em onclick="$('postmessage_799213').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_799213').className='t_smallfont'">小</em>												发表于 2010-8-27 01:26&nbsp;																					<a href="viewthread.php?tid=56527&amp;page=1&amp;authorid=6354" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_26"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_26"></div><div id="ad_thread4_26"></div>
						
						
																											<div id="postmessage_799213" class="t_msgfont">我就是一直放在移动硬盘的。但可以考虑用两个盘。<br />
<br />
干脆也推荐一个同步软件吧。</div>

							
							
							
							
															<div id="post_rate_div_799213"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo799213_menu" style="display: none;">
										<div class="imicons">
													<a target='_blank' href='http://settings.messenger.live.com/Conversation/IMMe.aspx?invitee=bgyzhm@hotmail.com&mkt=zh-cn'><img style='border-style: none;' src='http://messenger.services.live.com/users/bgyzhm@hotmail.com/presenceimage?mkt=zh-cn' width='16' height='16' /></a>
																																			</div>
										<dl></dl>
										<p><a href="space.php?uid=6354" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=56527&amp;repquote=799213&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 799213)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_26"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid799217" summary="pid799217" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=18137" target="_blank" id="userinfo799217" class="dropmenu" onmouseover="showMenu(this.id)">Aragorn</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">三俗份子</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=18137">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=18137&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_27" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum799217" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=56527&page=1#pid799217', '话题链接已经复制到剪贴板')">28楼</strong>
													<em onclick="$('postmessage_799217').className='t_bigfont'">大</em>							<em onclick="$('postmessage_799217').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_799217').className='t_smallfont'">小</em>												发表于 2010-8-27 01:33&nbsp;																					<a href="viewthread.php?tid=56527&amp;page=1&amp;authorid=18137" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_27"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_27"></div><div id="ad_thread4_27"></div>
						
						
																											<div id="postmessage_799217" class="t_msgfont">Second Copy</div>

							
							
							
							
															<div id="post_rate_div_799217"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo799217_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=18137" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=56527&amp;repquote=799217&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 799217)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_27"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid799413" summary="pid799413" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2213" target="_blank" id="userinfo799413" class="dropmenu" onmouseover="showMenu(this.id)">核子力量</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">Twitter.com/hzpower</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2213">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2213&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_28" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum799413" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=56527&page=1#pid799413', '话题链接已经复制到剪贴板')">29楼</strong>
													<em onclick="$('postmessage_799413').className='t_bigfont'">大</em>							<em onclick="$('postmessage_799413').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_799413').className='t_smallfont'">小</em>												发表于 2010-8-27 09:56&nbsp;																					<a href="viewthread.php?tid=56527&amp;page=1&amp;authorid=2213" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_28"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_28"></div><div id="ad_thread4_28"></div>
						
						
																											<div id="postmessage_799413" class="t_msgfont">这么宝贵的资料还是用安全的方式和大家分享吧，放在很多人的硬盘里比放在一个硬盘里保险，毕竟是多年的心血辛苦搜集的，万一毁于一旦岂不可惜</div>

							
							
							
							
															<div id="post_rate_div_799413"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo799413_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://twitter.com/hzpower" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=2213" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=56527&amp;repquote=799413&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 799413)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_28"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid799419" summary="pid799419" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1960" target="_blank" id="userinfo799419" class="dropmenu" onmouseover="showMenu(this.id)">库存袈裟</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">@bruceku 想象力比知识更重要。</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1960">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1960&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_29" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum799419" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=56527&page=1#pid799419', '话题链接已经复制到剪贴板')">30楼</strong>
													<em onclick="$('postmessage_799419').className='t_bigfont'">大</em>							<em onclick="$('postmessage_799419').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_799419').className='t_smallfont'">小</em>												发表于 2010-8-27 09:59&nbsp;																					<a href="viewthread.php?tid=56527&amp;page=1&amp;authorid=1960" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_29"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_29"></div><div id="ad_thread4_29"></div>
						
						
																											<div id="postmessage_799419" class="t_msgfont">LZ改下标题吧，本帖存档入库，与众组员分享</div>

							
							
							
							
															<div id="post_rate_div_799419"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo799419_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1960" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=56527&amp;repquote=799419&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 799419)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_29"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid799691" summary="pid799691" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=3195" target="_blank" id="userinfo799691" class="dropmenu" onmouseover="showMenu(this.id)">dlb2825</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=3195">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=3195&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_30" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum799691" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=56527&page=1#pid799691', '话题链接已经复制到剪贴板')">31楼</strong>
													<em onclick="$('postmessage_799691').className='t_bigfont'">大</em>							<em onclick="$('postmessage_799691').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_799691').className='t_smallfont'">小</em>												发表于 2010-8-27 12:39&nbsp;																					<a href="viewthread.php?tid=56527&amp;page=1&amp;authorid=3195" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_30"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_30"></div><div id="ad_thread4_30"></div>
						
						
																											<div id="postmessage_799691" class="t_msgfont">恩恩！看到了，当时我为了装黑苹果也需要走这一步的，要不然没法启动。用的是香山红叶PE里面的分区表恢复工具。具体哪个我忘记了。<br />
<br />
[<i> 本帖最后由 dlb2825 于 2010-8-27 12:42 编辑 </i>]</div>

							
							
							
							
															<div id="post_rate_div_799691"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo799691_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=3195" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=56527&amp;repquote=799691&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 799691)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_30"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid799697" summary="pid799697" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 <a name="lastpost"></a>					<cite>											<a href="space.php?uid=1906" target="_blank" id="userinfo799697" class="dropmenu" onmouseover="showMenu(this.id)">大祥云</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">松下问童子　　　　　　　　言师采药去　　　　　　　　只在此山中　　　　　　　　云深不知处</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1906">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1906&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_31" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum799697" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=56527&page=1#pid799697', '话题链接已经复制到剪贴板')">32楼</strong>
													<em onclick="$('postmessage_799697').className='t_bigfont'">大</em>							<em onclick="$('postmessage_799697').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_799697').className='t_smallfont'">小</em>												发表于 2010-8-27 12:43&nbsp;																					<a href="viewthread.php?tid=56527&amp;page=1&amp;authorid=1906" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_31"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_31"></div><div id="ad_thread4_31"></div>
						
						
																											<div id="postmessage_799697" class="t_msgfont">看了楼主的帖子，马上想到——李大海的“磁盘精灵”（也就是DiskGenius）<br />
<br />
继续往下看，果真是用此软件修复！<br />
<br />
DiskGenius是一款极棒的软件，它恢复分区表损坏的硬盘里的数据时很好用。<br />
<br />
类似的软件还有R-Studio，也不错。</div>

							
							
							
							
															<div id="post_rate_div_799697"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo799697_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1906" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=56527&amp;repquote=799697&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 799697)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_31"></div>				</div>
			</td>
		</tr>
		</table>
		</div>
</form>





<div class="pages_btns">
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=56527&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=56527&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
				<span class="postbtn" id="newspecialtmp" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=56527&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

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

	<form method="post" id="postform" action="post.php?action=reply&amp;fid=26&amp;tid=56527&amp;extra=&amp;replysubmit=yes" onSubmit="return validate(this)">
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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<title>这是一份介绍GFW的幻灯片。 - 国家局域网研究所 -  1984bbs.com </title>
<meta name="keywords" content="" />
<meta name="MSSmartTagsPreventParsing" content="True" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<link rel="archives" title="1984bbs.com" href="https://1984bbs.com/archiver/" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_viewthread.css" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_common.css" />
<script type="text/javascript">
	var discuz_uid = 13019;var IMGDIR = 'images/default';var attackevasive = '0';var gid = 0;var STYLEID = '1';
	gid = parseInt('3');var fid = parseInt('26');var tid = parseInt('46762');
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
			<p><a href="index.php" id="forumlist" onmouseover="showMenu(this.id)" class="dropmenu">1984bbs.com</a> &raquo; <a href="forumdisplay.php?fid=26">国家局域网研究所</a> &raquo; 这是一份介绍GFW的幻灯片。</p>
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
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=46762&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=46762&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
				<span class="postbtn" id="newspecial" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=46762&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

	<ul class="popupmenu_popup newspecialmenu" id="newspecial_menu" style="display: none">
		<li><a href="post.php?action=newthread&amp;fid=26&amp;extra=">发新话题</a></li>
		<li class="poll"><a href="post.php?action=newthread&amp;fid=26&amp;extra=&amp;special=1">发布投票</a></li>													</ul>

<form method="post" name="modactions">
	<input type="hidden" name="formhash" value="823c9fa2" />
	<div class="mainbox viewthread">
		<span class="headactions">
					<a href="my.php?item=favorites&amp;tid=46762" id="ajax_favorite" onclick="ajaxmenu(event, this.id, 3000, 0)">收藏</a>
			<a href="my.php?item=subscriptions&amp;subadd=46762" id="ajax_subscription" onclick="ajaxmenu(event, this.id, 3000, null, 0)">订阅</a>
			<a href="misc.php?action=emailfriend&amp;tid=46762" id="emailfriend" onclick="ajaxmenu(event, this.id, 9000000, null, 0)">推荐</a>
				<a href="viewthread.php?action=printable&amp;tid=46762" target="_blank" class="notabs">打印</a>
				</span>
		<h1>这是一份介绍GFW的幻灯片。		</h1>
				<ins>
						<a href="misc.php?action=viewthreadmod&amp;tid=46762" title="主题操作记录" target="_blank">本主题由 张书记 于 2010-6-23 16:09 移动</a>								</ins>
							<table id="pid632273" summary="pid632273" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10553" target="_blank" id="userinfo632273" class="dropmenu" onmouseover="showMenu(this.id)">shfaylei</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">@shfaylei</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10553">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10553&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_0" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum632273" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=46762&page=1#pid632273', '话题链接已经复制到剪贴板')">1楼</strong>
													<em onclick="$('postmessage_632273').className='t_bigfont'">大</em>							<em onclick="$('postmessage_632273').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_632273').className='t_smallfont'">小</em>												发表于 2010-5-22 22:33&nbsp;																					<a href="viewthread.php?tid=46762&amp;page=1&amp;authorid=10553" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_0"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_0"></div><div id="ad_thread4_0"></div>
													<h2>这是一份介绍GFW的幻灯片。</h2>
						
						
																											<div id="postmessage_632273" class="t_msgfont">转帖自<a href="http://blog.wzyboy.im/post/160.html" target="_blank">http://blog.wzyboy.im/post/160.html</a><br />
这份幻灯片其实是我们通技课的作业。<br />
我很早就有一个想法，就是要做一份介绍GFW的幻灯片，但腹稿打好之后一直没有付诸实践。前一段时间，我们的通技课作业恰好是要做一份幻灯片，泛主题的，然后上台演讲，我就打算做这个了。<br />
我打开了SlideShare，想找找有没有前人已经做过类似的幻灯片了，一搜，果然有，做得很简洁，但意思很明了，翻到最后一张，发现是 @jiehanzheng 同学做的，时间比我早了整整一年，而他的年纪也比我小了三岁，后生可畏啊！<br />
后来又过了几天，在Google Reader Shared Items里看到GFW BLOG上的一篇文章（原文），竟然又是一个介绍GFW的幻灯片，那就是 @SkySub0 同学做的，顿时觉得前方的道路更加光明了。 ^_^<br />
于是我终于开始动手做了，平时学业繁忙，也只有周末的时候能抽出时间来做幻灯片，但要做就要做好，于是磨啊磨，精打细磨之后，这个幻灯片终于在5月下旬出炉了，全幻灯片一共40多张，这是概览图：<br />
这份幻灯片已经于2010年5月20号在全班同学面前演示过了，同学们的反响还不错，这让我对自己的幻灯片有了一些信心。<br />
<br />
整个幻灯片的思路和两位先驱差不多，但内容更加丰富了，一些界面也更加美化了。希望大家能喜欢。<br />
<br />
废话这么多，该出下载链接了，狡兔三窟，我这里准备了N个窟：<br />
<br />
&nbsp; &nbsp; * SkyDrive <a href="http://cid-e656c35bdee6a9e0.skydrive.live.com/self.aspx/Public/whats-gfw-2010-05.7z" target="_blank">http://cid-e656c35bdee6a9e0.skyd ... hats-gfw-2010-05.7z</a><br />
&nbsp; &nbsp; * Google Docs <a href="http://docs.google.com/leaf?id=0B5-cNAnEo3nZMjczYmU3MGUtMDRjMi00NmQ3LWI0NTAtYzk0NDYxMjU5ODJi&amp;hl=en" target="_blank">http://docs.google.com/leaf?id=0 ... xMjU5ODJi&amp;hl=en</a><br />
&nbsp; &nbsp; * 115 网盘 （有时间限制，提取码f8b72ebeca）<a href="http://u.115.com/file/f8b72ebeca%20%E9%80%9A%E6%8A%80%E4%BD%9C%E4%B8%9A.7z" target="_blank">http://u.115.com/file/f8b72ebeca ... 4%BD%9C%E4%B8%9A.7z</a><br />
&nbsp; &nbsp; * Dropbox→被墙了，算了吧<br />
&nbsp; &nbsp; * 讯6&nbsp; &nbsp;<a href="http://www.xun6.com/file/733899529/whats-gfw-2010-05.7z.html" target="_blank">http://www.xun6.com/file/733899529/whats-gfw-2010-05.7z.html</a><br />
&nbsp; &nbsp; * Box.net <a href="http://www.box.net/shared/zsnt7v7ng2" target="_blank">http://www.box.net/shared/zsnt7v7ng2</a><br />
&nbsp; &nbsp; * RapidShare <a href="http://rapidshare.com/files/390294839/whats-gfw-2010-05.7z" target="_blank">http://rapidshare.com/files/390294839/whats-gfw-2010-05.7z</a><br />
&nbsp; &nbsp; * wzyboy.info （感谢@newsinchina提供便宜的无限流量空间！） <a href="http://wzyboy.info/homework.zip" target="_blank">http://wzyboy.info/homework.zip</a><br />
<br />
希望这些链接够用，不要都超流量什么的……讨厌。<br />
<br />
文件是7-zip压缩的，大小3.86MiB。解压密码是本站的主域名 wzyboy.im<br />
<br />
注意：本幻灯片的目的不是给电脑老鸟看的，而是给那些电脑菜鸟看的，希望你能够马上行动起来，把此幻灯片传播出去，传播给更多的人，尤其是那些电脑菜鸟。<br />
<br />
你可以：<br />
<br />
&nbsp; &nbsp;1. 把文件下载下来之后保存在U盘里，拷贝给别人。<br />
&nbsp; &nbsp;2. 如果你现在是在Google Reader里看到这篇文章，不妨按下键盘上的Shift+S快捷键或者是L键，把这篇文章分享出去。<br />
&nbsp; &nbsp;3. 如果你现在是在Google Reader里，你可以直接通过按下键盘上的E键来把这篇文章寄出去。<br />
&nbsp; &nbsp;4. 如果你有自己的博客，你可以转载此文章，但要注明此文章的原文地址（ <a href="http://blog.wzyboy.im/post/160.html" target="_blank">http://blog.wzyboy.im/post/160.html</a> ）<br />
&nbsp; &nbsp;5. 当你转载的时候，不妨也把幻灯片作为附件上传上去，以确保在上述链接都被墙之后读者还能继续下载。（当然这可能性很低）<br />
<br />
总之，谢谢各位！</div>

							
							
							
							
															<div id="post_rate_div_632273"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo632273_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=10553" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=46762&amp;repquote=632273&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 632273)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_0"></div>				</div>
			</td>
		</tr>
		</table>
		</div><div class="ad_column" id="ad_interthread"><a href="/viewthread.php?tid=54699" target="_blank" style="color:red;">1984bbs是一个非营利项目，它需要您的捐助！</font></a>		</div>
	<div class="mainbox viewthread">
			<table id="pid632344" summary="pid632344" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=13152" target="_blank" id="userinfo632344" class="dropmenu" onmouseover="showMenu(this.id)">tonglesky</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=13152">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=13152&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_1" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum632344" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=46762&page=1#pid632344', '话题链接已经复制到剪贴板')">2楼</strong>
													<em onclick="$('postmessage_632344').className='t_bigfont'">大</em>							<em onclick="$('postmessage_632344').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_632344').className='t_smallfont'">小</em>												发表于 2010-5-22 23:06&nbsp;																					<a href="viewthread.php?tid=46762&amp;page=1&amp;authorid=13152" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_1"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_1"></div><div id="ad_thread4_1"></div>
						
						
																											<div id="postmessage_632344" class="t_msgfont">幻灯片做得很好。</div>

							
							
							
							
															<div id="post_rate_div_632344"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo632344_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=13152" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=46762&amp;repquote=632344&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 632344)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_1"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid632581" summary="pid632581" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2019" target="_blank" id="userinfo632581" class="dropmenu" onmouseover="showMenu(this.id)">ren2kk</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">土鳖男twitter@ren2kk</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2019">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2019&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_2" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum632581" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=46762&page=1#pid632581', '话题链接已经复制到剪贴板')">3楼</strong>
													<em onclick="$('postmessage_632581').className='t_bigfont'">大</em>							<em onclick="$('postmessage_632581').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_632581').className='t_smallfont'">小</em>												发表于 2010-5-23 00:44&nbsp;																					<a href="viewthread.php?tid=46762&amp;page=1&amp;authorid=2019" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_2"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_2"></div><div id="ad_thread4_2"></div>
						
						
																											<div id="postmessage_632581" class="t_msgfont">很棒呢。推之~</div>

							
							
							
							
															<div id="post_rate_div_632581"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo632581_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=2019" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=46762&amp;repquote=632581&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 632581)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_2"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid632633" summary="pid632633" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=9517" target="_blank" id="userinfo632633" class="dropmenu" onmouseover="showMenu(this.id)">老西</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=9517">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=9517&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_3" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum632633" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=46762&page=1#pid632633', '话题链接已经复制到剪贴板')">4楼</strong>
													<em onclick="$('postmessage_632633').className='t_bigfont'">大</em>							<em onclick="$('postmessage_632633').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_632633').className='t_smallfont'">小</em>												发表于 2010-5-23 01:40&nbsp;																					<a href="viewthread.php?tid=46762&amp;page=1&amp;authorid=9517" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_3"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_3"></div><div id="ad_thread4_3"></div>
						
						
																											<div id="postmessage_632633" class="t_msgfont">不错的···········</div>

							
							
							
							
															<div id="post_rate_div_632633"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo632633_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=9517" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=46762&amp;repquote=632633&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 632633)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_3"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid632674" summary="pid632674" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=11167" target="_blank" id="userinfo632674" class="dropmenu" onmouseover="showMenu(this.id)">龙马奔走</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">@LoneMark</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=11167">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=11167&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_4" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum632674" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=46762&page=1#pid632674', '话题链接已经复制到剪贴板')">5楼</strong>
													<em onclick="$('postmessage_632674').className='t_bigfont'">大</em>							<em onclick="$('postmessage_632674').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_632674').className='t_smallfont'">小</em>												发表于 2010-5-23 02:44&nbsp;																					<a href="viewthread.php?tid=46762&amp;page=1&amp;authorid=11167" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_4"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_4"></div><div id="ad_thread4_4"></div>
						
						
																											<div id="postmessage_632674" class="t_msgfont">保存了，放进google wave中</div>

							
							
							
							
															<div id="post_rate_div_632674"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo632674_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=11167" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=46762&amp;repquote=632674&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 632674)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_4"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid632735" summary="pid632735" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=11398" target="_blank" id="userinfo632735" class="dropmenu" onmouseover="showMenu(this.id)">西伯尔的兔子</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">I love acting. It is so much more real than life.     twitter:@batilo</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=11398">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=11398&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_5" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum632735" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=46762&page=1#pid632735', '话题链接已经复制到剪贴板')">6楼</strong>
													<em onclick="$('postmessage_632735').className='t_bigfont'">大</em>							<em onclick="$('postmessage_632735').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_632735').className='t_smallfont'">小</em>												发表于 2010-5-23 05:17&nbsp;																					<a href="viewthread.php?tid=46762&amp;page=1&amp;authorid=11398" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_5"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_5"></div><div id="ad_thread4_5"></div>
						
						
																											<div id="postmessage_632735" class="t_msgfont">好东西。</div>

							
							
							
							
															<div id="post_rate_div_632735"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo632735_menu" style="display: none;">
										<div class="imicons">
													<a target='_blank' href='http://settings.messenger.live.com/Conversation/IMMe.aspx?invitee=Batilo@soweb.me&mkt=zh-cn'><img style='border-style: none;' src='http://messenger.services.live.com/users/Batilo@soweb.me/presenceimage?mkt=zh-cn' width='16' height='16' /></a>
												<a href="http://wpa.qq.com/msgrd?V=1&amp;Uin=16159296&amp;Site=1984bbs.com&amp;Menu=yes" target="_blank"><img src="images/default/qq.gif" alt="QQ" /></a>																							</div>
										<dl></dl>
											<p><a href="http://4ashes.me" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=11398" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=46762&amp;repquote=632735&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 632735)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_5"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid633052" summary="pid633052" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12495" target="_blank" id="userinfo633052" class="dropmenu" onmouseover="showMenu(this.id)">望水一鱼</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12495">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12495&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_6" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum633052" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=46762&page=1#pid633052', '话题链接已经复制到剪贴板')">7楼</strong>
													<em onclick="$('postmessage_633052').className='t_bigfont'">大</em>							<em onclick="$('postmessage_633052').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_633052').className='t_smallfont'">小</em>												发表于 2010-5-23 10:19&nbsp;																					<a href="viewthread.php?tid=46762&amp;page=1&amp;authorid=12495" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_6"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_6"></div><div id="ad_thread4_6"></div>
						
						
																											<div id="postmessage_633052" class="t_msgfont">好东西&nbsp;&nbsp;顶顶顶顶顶顶顶顶顶顶</div>

							
							
							
							
															<div id="post_rate_div_633052"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo633052_menu" style="display: none;">
										<div class="imicons">
												<a href="http://wpa.qq.com/msgrd?V=1&amp;Uin=1030627902&amp;Site=1984bbs.com&amp;Menu=yes" target="_blank"><img src="images/default/qq.gif" alt="QQ" /></a>																							</div>
										<dl></dl>
										<p><a href="space.php?uid=12495" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=46762&amp;repquote=633052&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 633052)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_6"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid633161" summary="pid633161" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=13811" target="_blank" id="userinfo633161" class="dropmenu" onmouseover="showMenu(this.id)">公民3-邪</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">自由与美国</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=13811">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=13811&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_7" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum633161" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=46762&page=1#pid633161', '话题链接已经复制到剪贴板')">8楼</strong>
													<em onclick="$('postmessage_633161').className='t_bigfont'">大</em>							<em onclick="$('postmessage_633161').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_633161').className='t_smallfont'">小</em>												发表于 2010-5-23 11:06&nbsp;																					<a href="viewthread.php?tid=46762&amp;page=1&amp;authorid=13811" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_7"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_7"></div><div id="ad_thread4_7"></div>
						
						
																											<div id="postmessage_633161" class="t_msgfont">谢谢了，已下载，不过墙外有许多网站，如“gfw blog”、&quot;可能吧&quot;之类的，不妨去看看。</div>

							
							
							
							
															<div id="post_rate_div_633161"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo633161_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=13811" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=46762&amp;repquote=633161&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 633161)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_7"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid633230" summary="pid633230" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12596" target="_blank" id="userinfo633230" class="dropmenu" onmouseover="showMenu(this.id)">yangharrylg</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12596">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12596&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_8" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum633230" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=46762&page=1#pid633230', '话题链接已经复制到剪贴板')">9楼</strong>
													<em onclick="$('postmessage_633230').className='t_bigfont'">大</em>							<em onclick="$('postmessage_633230').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_633230').className='t_smallfont'">小</em>												发表于 2010-5-23 11:36&nbsp;																					<a href="viewthread.php?tid=46762&amp;page=1&amp;authorid=12596" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_8"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_8"></div><div id="ad_thread4_8"></div>
						
						
																											<div id="postmessage_633230" class="t_msgfont">不错，希望每个网络高手都能以这样轻松和简便的方式为我们传播翻墙知识，提高我们的认识水平，另第20张和第23张出现了文字重合的问题，那些具体方法貌似看不太清，请补足！</div>

							
							
							
							
															<div id="post_rate_div_633230"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo633230_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=12596" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=46762&amp;repquote=633230&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 633230)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_8"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid633492" summary="pid633492" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=11411" target="_blank" id="userinfo633492" class="dropmenu" onmouseover="showMenu(this.id)">csxiangqian</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=11411">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=11411&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_9" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum633492" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=46762&page=1#pid633492', '话题链接已经复制到剪贴板')">10楼</strong>
													<em onclick="$('postmessage_633492').className='t_bigfont'">大</em>							<em onclick="$('postmessage_633492').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_633492').className='t_smallfont'">小</em>												发表于 2010-5-23 13:33&nbsp;																					<a href="viewthread.php?tid=46762&amp;page=1&amp;authorid=11411" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_9"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_9"></div><div id="ad_thread4_9"></div>
						
						
																											<div id="postmessage_633492" class="t_msgfont">很好，感谢，收藏传播之</div>

							
							
							
							
															<div id="post_rate_div_633492"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo633492_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=11411" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=46762&amp;repquote=633492&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 633492)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_9"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid639750" summary="pid639750" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=13575" target="_blank" id="userinfo639750" class="dropmenu" onmouseover="showMenu(this.id)">emanth</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=13575">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=13575&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_10" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum639750" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=46762&page=1#pid639750', '话题链接已经复制到剪贴板')">11楼</strong>
													<em onclick="$('postmessage_639750').className='t_bigfont'">大</em>							<em onclick="$('postmessage_639750').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_639750').className='t_smallfont'">小</em>												发表于 2010-5-26 10:18&nbsp;																					<a href="viewthread.php?tid=46762&amp;page=1&amp;authorid=13575" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_10"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_10"></div><div id="ad_thread4_10"></div>
						
						
																											<div id="postmessage_639750" class="t_msgfont">我无法通过以上链接下载。哪位可以发给我一个可用地址？twitter上的@emanth</div>

							
							
							
							
															<div id="post_rate_div_639750"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo639750_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=13575" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=46762&amp;repquote=639750&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 639750)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_10"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid642494" summary="pid642494" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12661" target="_blank" id="userinfo642494" class="dropmenu" onmouseover="showMenu(this.id)">542027128</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">受人鼓动的一小撮不明真相的群众之一 </p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12661">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12661&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_11" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum642494" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=46762&page=1#pid642494', '话题链接已经复制到剪贴板')">12楼</strong>
													<em onclick="$('postmessage_642494').className='t_bigfont'">大</em>							<em onclick="$('postmessage_642494').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_642494').className='t_smallfont'">小</em>												发表于 2010-5-27 12:40&nbsp;																					<a href="viewthread.php?tid=46762&amp;page=1&amp;authorid=12661" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_11"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_11"></div><div id="ad_thread4_11"></div>
						
						
																											<div id="postmessage_642494" class="t_msgfont">lz注意改正其中的一个错误,主席是胡,不是温</div>

							
							
							
							
															<div id="post_rate_div_642494"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo642494_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=12661" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=46762&amp;repquote=642494&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 642494)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_11"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid643606" summary="pid643606" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8070" target="_blank" id="userinfo643606" class="dropmenu" onmouseover="showMenu(this.id)">19890604</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8070">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8070&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_12" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum643606" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=46762&page=1#pid643606', '话题链接已经复制到剪贴板')">13楼</strong>
													<em onclick="$('postmessage_643606').className='t_bigfont'">大</em>							<em onclick="$('postmessage_643606').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_643606').className='t_smallfont'">小</em>												发表于 2010-5-27 22:13&nbsp;																					<a href="viewthread.php?tid=46762&amp;page=1&amp;authorid=8070" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_12"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_12"></div><div id="ad_thread4_12"></div>
						
						
																											<div id="postmessage_643606" class="t_msgfont">已收藏，谢谢！</div>

							
							
							
							
															<div id="post_rate_div_643606"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo643606_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=8070" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=46762&amp;repquote=643606&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 643606)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_12"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid643623" summary="pid643623" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=13611" target="_blank" id="userinfo643623" class="dropmenu" onmouseover="showMenu(this.id)">自由派</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">跟帖者</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=13611">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=13611&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_13" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum643623" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=46762&page=1#pid643623', '话题链接已经复制到剪贴板')">14楼</strong>
													<em onclick="$('postmessage_643623').className='t_bigfont'">大</em>							<em onclick="$('postmessage_643623').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_643623').className='t_smallfont'">小</em>												发表于 2010-5-27 22:24&nbsp;																					<a href="viewthread.php?tid=46762&amp;page=1&amp;authorid=13611" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_13"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_13"></div><div id="ad_thread4_13"></div>
						
						
																											<div id="postmessage_643623" class="t_msgfont">解压密码是错的吧</div>

							
							
							
							
															<div id="post_rate_div_643623"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo643623_menu" style="display: none;">
										<div class="imicons">
												<a href="http://wpa.qq.com/msgrd?V=1&amp;Uin=584627292&amp;Site=1984bbs.com&amp;Menu=yes" target="_blank"><img src="images/default/qq.gif" alt="QQ" /></a>																							</div>
										<dl></dl>
											<p><a href="http://no" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=13611" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=46762&amp;repquote=643623&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 643623)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_13"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid643630" summary="pid643630" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2159" target="_blank" id="userinfo643630" class="dropmenu" onmouseover="showMenu(this.id)">王祖贤</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2159">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2159&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_14" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum643630" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=46762&page=1#pid643630', '话题链接已经复制到剪贴板')">15楼</strong>
													<em onclick="$('postmessage_643630').className='t_bigfont'">大</em>							<em onclick="$('postmessage_643630').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_643630').className='t_smallfont'">小</em>												发表于 2010-5-27 22:31&nbsp;																					<a href="viewthread.php?tid=46762&amp;page=1&amp;authorid=2159" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_14"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_14"></div><div id="ad_thread4_14"></div>
						
						
																											<div id="postmessage_643630" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>yangharrylg</i> 于 2010-5-23 11:36 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=633230&amp;ptid=46762" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
不错，希望每个网络高手都能以这样轻松和简便的方式为我们传播翻墙知识，提高我们的认识水平，另第20张和第23张出现了文字重合的问题，那些具体方法貌似看不太清，请补足！ </blockquote></div>放映幻灯片即可</div>

							
							
							
							
															<div id="post_rate_div_643630"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo643630_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=2159" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=46762&amp;repquote=643630&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 643630)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_14"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid646539" summary="pid646539" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=11868" target="_blank" id="userinfo646539" class="dropmenu" onmouseover="showMenu(this.id)">dannie</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=11868">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=11868&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_15" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum646539" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=46762&page=1#pid646539', '话题链接已经复制到剪贴板')">16楼</strong>
													<em onclick="$('postmessage_646539').className='t_bigfont'">大</em>							<em onclick="$('postmessage_646539').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_646539').className='t_smallfont'">小</em>												发表于 2010-5-29 15:39&nbsp;																					<a href="viewthread.php?tid=46762&amp;page=1&amp;authorid=11868" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_15"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_15"></div><div id="ad_thread4_15"></div>
						
						
																											<div id="postmessage_646539" class="t_msgfont">漂亮，做得很漂亮。<br />
<br />
<br />
请问通技课是？</div>

							
							
							
							
															<div id="post_rate_div_646539"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo646539_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=11868" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=46762&amp;repquote=646539&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 646539)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_15"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid699307" summary="pid699307" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6449" target="_blank" id="userinfo699307" class="dropmenu" onmouseover="showMenu(this.id)">倪秋</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">颂赞和诅咒从一个口里出来，我的兄弟们，这是不应当的。</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6449">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6449&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_16" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum699307" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=46762&page=1#pid699307', '话题链接已经复制到剪贴板')">17楼</strong>
													<em onclick="$('postmessage_699307').className='t_bigfont'">大</em>							<em onclick="$('postmessage_699307').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_699307').className='t_smallfont'">小</em>												发表于 2010-6-23 13:58&nbsp;																					<a href="viewthread.php?tid=46762&amp;page=1&amp;authorid=6449" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_16"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_16"></div><div id="ad_thread4_16"></div>
						
						
																											<div id="postmessage_699307" class="t_msgfont">今天还有人文的GFW，很好</div>

							
							
							
							
															<div id="post_rate_div_699307"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo699307_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=6449" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=46762&amp;repquote=699307&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 699307)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_16"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid699491" summary="pid699491" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=13517" target="_blank" id="userinfo699491" class="dropmenu" onmouseover="showMenu(this.id)">gaoxsh</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=13517">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=13517&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_17" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum699491" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=46762&page=1#pid699491', '话题链接已经复制到剪贴板')">18楼</strong>
													<em onclick="$('postmessage_699491').className='t_bigfont'">大</em>							<em onclick="$('postmessage_699491').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_699491').className='t_smallfont'">小</em>												发表于 2010-6-23 15:43&nbsp;																					<a href="viewthread.php?tid=46762&amp;page=1&amp;authorid=13517" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_17"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_17"></div><div id="ad_thread4_17"></div>
						
						
																											<div id="postmessage_699491" class="t_msgfont">好资料，谢谢楼主</div>

							
							
							
							
															<div id="post_rate_div_699491"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo699491_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=13517" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=46762&amp;repquote=699491&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 699491)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_17"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid699546" summary="pid699546" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2971" target="_blank" id="userinfo699546" class="dropmenu" onmouseover="showMenu(this.id)">luckyray</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">不明真相</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2971">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2971&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_18" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum699546" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=46762&page=1#pid699546', '话题链接已经复制到剪贴板')">19楼</strong>
													<em onclick="$('postmessage_699546').className='t_bigfont'">大</em>							<em onclick="$('postmessage_699546').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_699546').className='t_smallfont'">小</em>												发表于 2010-6-23 16:16&nbsp;																					<a href="viewthread.php?tid=46762&amp;page=1&amp;authorid=2971" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_18"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_18"></div><div id="ad_thread4_18"></div>
						
						
																											<div id="postmessage_699546" class="t_msgfont">呵呵……不错，如果能把VPN和SSH的获取途径详细说说就更好了。</div>

							
							
							
							
															<div id="post_rate_div_699546"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo699546_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=2971" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=46762&amp;repquote=699546&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 699546)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_18"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid699633" summary="pid699633" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=146" target="_blank" id="userinfo699633" class="dropmenu" onmouseover="showMenu(this.id)">wtno1</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">0.10 路人张三，李四，王五，赵六等不明真相的群众持续围观中</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=146">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=146&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_19" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum699633" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=46762&page=1#pid699633', '话题链接已经复制到剪贴板')">20楼</strong>
													<em onclick="$('postmessage_699633').className='t_bigfont'">大</em>							<em onclick="$('postmessage_699633').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_699633').className='t_smallfont'">小</em>												发表于 2010-6-23 17:03&nbsp;																					<a href="viewthread.php?tid=46762&amp;page=1&amp;authorid=146" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_19"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_19"></div><div id="ad_thread4_19"></div>
						
						
																											<div id="postmessage_699633" class="t_msgfont">非常好的资料，谢谢楼主</div>

							
							
							
							
															<div id="post_rate_div_699633"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo699633_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=146" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=46762&amp;repquote=699633&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 699633)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_19"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid699712" summary="pid699712" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10135" target="_blank" id="userinfo699712" class="dropmenu" onmouseover="showMenu(this.id)">偶佯疯</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">我是个读书人</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10135">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10135&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_20" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum699712" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=46762&page=1#pid699712', '话题链接已经复制到剪贴板')">21楼</strong>
													<em onclick="$('postmessage_699712').className='t_bigfont'">大</em>							<em onclick="$('postmessage_699712').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_699712').className='t_smallfont'">小</em>												发表于 2010-6-23 17:40&nbsp;																					<a href="viewthread.php?tid=46762&amp;page=1&amp;authorid=10135" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_20"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_20"></div><div id="ad_thread4_20"></div>
						
						
																											<div id="postmessage_699712" class="t_msgfont">看过了，还不错，应该大力普及</div>

							
							
							
							
															<div id="post_rate_div_699712"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo699712_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://izlf.info" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=10135" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=46762&amp;repquote=699712&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 699712)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_20"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid702918" summary="pid702918" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12773" target="_blank" id="userinfo702918" class="dropmenu" onmouseover="showMenu(this.id)">Joystyle</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12773">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12773&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_21" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum702918" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=46762&page=1#pid702918', '话题链接已经复制到剪贴板')">22楼</strong>
													<em onclick="$('postmessage_702918').className='t_bigfont'">大</em>							<em onclick="$('postmessage_702918').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_702918').className='t_smallfont'">小</em>												发表于 2010-6-25 11:49&nbsp;																					<a href="viewthread.php?tid=46762&amp;page=1&amp;authorid=12773" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_21"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_21"></div><div id="ad_thread4_21"></div>
						
						
																											<div id="postmessage_702918" class="t_msgfont">看过了，不错。有几页的文字有重叠。</div>

							
							
							
							
															<div id="post_rate_div_702918"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo702918_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=12773" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=46762&amp;repquote=702918&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 702918)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_21"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid706673" summary="pid706673" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 <a name="lastpost"></a>					<cite>											<a href="space.php?uid=4885" target="_blank" id="userinfo706673" class="dropmenu" onmouseover="showMenu(this.id)">旧居烧炭</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=4885">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=4885&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_22" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum706673" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=46762&page=1#pid706673', '话题链接已经复制到剪贴板')">23楼</strong>
													<em onclick="$('postmessage_706673').className='t_bigfont'">大</em>							<em onclick="$('postmessage_706673').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_706673').className='t_smallfont'">小</em>												发表于 2010-6-27 16:26&nbsp;																					<a href="viewthread.php?tid=46762&amp;page=1&amp;authorid=4885" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_22"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_22"></div><div id="ad_thread4_22"></div>
						
						
																											<div id="postmessage_706673" class="t_msgfont">ppt做得很漂亮。。。</div>

							
							
							
							
															<div id="post_rate_div_706673"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo706673_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=4885" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=46762&amp;repquote=706673&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 706673)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_22"></div>				</div>
			</td>
		</tr>
		</table>
		</div>
</form>





<div class="pages_btns">
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=46762&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=46762&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
				<span class="postbtn" id="newspecialtmp" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=46762&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

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

	<form method="post" id="postform" action="post.php?action=reply&amp;fid=26&amp;tid=46762&amp;extra=&amp;replysubmit=yes" onSubmit="return validate(this)">
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
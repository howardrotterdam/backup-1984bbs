<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<title>无需折腾即可使用的第三方Twitter客户端 - 国家局域网研究所 -  1984bbs.com </title>
<meta name="keywords" content="" />
<meta name="MSSmartTagsPreventParsing" content="True" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<link rel="archives" title="1984bbs.com" href="https://1984bbs.com/archiver/" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_viewthread.css" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_common.css" />
<script type="text/javascript">
	var discuz_uid = 13019;var IMGDIR = 'images/default';var attackevasive = '0';var gid = 0;var STYLEID = '1';
	gid = parseInt('3');var fid = parseInt('26');var tid = parseInt('13174');
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
			<p><a href="index.php" id="forumlist" onmouseover="showMenu(this.id)" class="dropmenu">1984bbs.com</a> &raquo; <a href="forumdisplay.php?fid=26">国家局域网研究所</a> &raquo; 无需折腾即可使用的第三方Twitter客户端</p>
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
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=13174&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=13174&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
				<span class="postbtn" id="newspecial" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=13174&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

	<ul class="popupmenu_popup newspecialmenu" id="newspecial_menu" style="display: none">
		<li><a href="post.php?action=newthread&amp;fid=26&amp;extra=">发新话题</a></li>
		<li class="poll"><a href="post.php?action=newthread&amp;fid=26&amp;extra=&amp;special=1">发布投票</a></li>													</ul>

<form method="post" name="modactions">
	<input type="hidden" name="formhash" value="823c9fa2" />
	<div class="mainbox viewthread">
		<span class="headactions">
					<a href="my.php?item=favorites&amp;tid=13174" id="ajax_favorite" onclick="ajaxmenu(event, this.id, 3000, 0)">收藏</a>
			<a href="my.php?item=subscriptions&amp;subadd=13174" id="ajax_subscription" onclick="ajaxmenu(event, this.id, 3000, null, 0)">订阅</a>
			<a href="misc.php?action=emailfriend&amp;tid=13174" id="emailfriend" onclick="ajaxmenu(event, this.id, 9000000, null, 0)">推荐</a>
				<a href="viewthread.php?action=printable&amp;tid=13174" target="_blank" class="notabs">打印</a>
				</span>
		<h1>无需折腾即可使用的第三方Twitter客户端		</h1>
				<ins>
						<a href="misc.php?action=viewthreadmod&amp;tid=13174" title="主题操作记录" target="_blank">本主题由 张书记 于 2009-10-13 10:14 解除置顶</a>								</ins>
							<table id="pid117445" summary="pid117445" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2360" target="_blank" id="userinfo117445" class="dropmenu" onmouseover="showMenu(this.id)">liuropot</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">我们是共匪。</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2360">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2360&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_0" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum117445" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=13174&page=1#pid117445', '话题链接已经复制到剪贴板')">1楼</strong>
													<em onclick="$('postmessage_117445').className='t_bigfont'">大</em>							<em onclick="$('postmessage_117445').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_117445').className='t_smallfont'">小</em>												发表于 2009-6-10 13:18&nbsp;																					<a href="viewthread.php?tid=13174&amp;page=1&amp;authorid=2360" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_0"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_0"></div><div id="ad_thread4_0"></div>
													<h2>无需折腾即可使用的第三方Twitter客户端</h2>
						
						
																											<div id="postmessage_117445" class="t_msgfont">一、外国Twitter网页端<br />
<br />
1、<a href="http://itweet.net/web/" target="_blank">http://itweet.net/web/</a><br />
2、<a href="http://m.tweete.net/login" target="_blank">http://m.tweete.net/login</a><br />
3、<a href="http://twitzap.com/" target="_blank">http://twitzap.com/</a><br />
4、<a href="http://tweetree.com/" target="_blank">http://tweetree.com/</a><br />
5、<a href="https://filttr.com/" target="_blank">https://filttr.com/</a><br />
6、<a href="http://twaitter.com/" target="_blank">http://twaitter.com/</a><br />
二、第三方Dabr<br />
<br />
这些是在网上收集的基于开源的Dabr建立的Twitter网页端，未验证是否全部都建立在外国服务器。<br />
0、官方Dabr：<a href="http://dabr.co.uk" target="_blank">http://dabr.co.uk</a><br />
1、@neolee&nbsp;&nbsp;<a href="http://t.neolee.cn/" target="_blank">http://t.neolee.cn/</a><br />
2、@Ksky&nbsp;&nbsp;<a href="http://t.ydo.me/" target="_blank">http://t.ydo.me/</a><br />
3、@Chada&nbsp;&nbsp;<a href="http://funp.org/" target="_blank">http://funp.org/</a><br />
4、@ikemi&nbsp;&nbsp;<a href="http://t.ikemi.org/" target="_blank">http://t.ikemi.org/</a><br />
5、@xzzxyd: <a href="http://t.zhe.la/" target="_blank">http://t.zhe.la/</a><br />
6、@wzy： <a href="http://t.80sfamily.com" target="_blank">http://t.80sfamily.com</a><br />
7、@billzhong： <a href="http://heix.pp.ru/" target="_blank">http://heix.pp.ru/</a><br />
8、@shizhao： <a href="http://shizhao.org/dabr/" target="_blank">http://shizhao.org/dabr/</a><br />
9、 @Kevin: <a href="http://okevin.net/twitter/" target="_blank">http://okevin.net/twitter/</a><br />
10、@Sofish： <a href="http://g.happinesz.cn/" target="_blank">http://g.happinesz.cn/</a><br />
11、@zhutouinfo：<a href="http://t.zhutou.info/" target="_blank">http://t.zhutou.info/</a><br />
12、@jason5ng32: <a href="http://chanmao.ws/dabr/" target="_blank">http://chanmao.ws/dabr/</a><br />
13、@tinn: <a href="http://touke.net/t/" target="_blank">http://touke.net/t/</a><br />
14、@zuola: <a href="http://s.zuo.la/" target="_blank">http://s.zuo.la/</a><br />
15、@Herock: <a href="http://wespeaker.com/t/" target="_blank">http://wespeaker.com/t/</a><br />
16、@haitai: <a href="http://t.huhaitai.com/" target="_blank">http://t.huhaitai.com/</a><br />
17、@noirz: <a href="http://oaic.cn/mu/" target="_blank">http://oaic.cn/mu/</a><br />
18、@xzheng：<a href="http://t.16class.cn/" target="_blank">http://t.16class.cn/</a><br />
有兴趣自己搭建Dabr的朋友可以看这篇文章。<br />
三、最有效的方法<br />
<br />
目前依然有效的、最方便快捷的方法是修改hosts文件，在里面加入twitter服务器的IP。为了twitter不会再次因为“故障”而不能访问，我用图片公布这个IP地址，如果无法看到图片，请移步中文推友讨论组。<br />
<br />
这不是广告，这是为了安全。<br />
对于windows来说，hosts文件位于：c:\windows\system32\drivers\etc\hosts ，用记事本打开即可。<br />
四、更多方法<br />
<br />
更多的方法大家可以加入到中文推友讨论组里和其他人一起探讨，这篇文章之后不会再更新，更多的、更新的方法将会更新到群组里的列表。<br />
如果你有其它无需“折腾”（例如“跳过围栏”）的方法，请发邮件告知我，或在群组里和其他人分享。<br />
为了更好地保护我们的隐私，群组设置了不公开。<br />
五、twitter并不孤独<br />
<br />
和Twitter一起出现“故障”的还有刚推出的微软bing、著名相册Flickr、hotmail（登录过程）。<br />
读者在本文的后续留言请注意自己的情绪，切勿过于兴奋。<br />
Tags: Twitter, 中国<br />
除非注明，本博客文章均为原创，转载请以链接形式标明本文地址 <br />
本文地址：<a href="http://www.kenengba.com/post/1136.html" target="_blank">http://www.kenengba.com/post/1136.html</a><br />
Trackback地址：<a href="http://www.kenengba.com/post/1136.html/trackback" target="_blank">http://www.kenengba.com/post/1136.html/trackback</a></div>

							
							
							
							
															<div id="post_rate_div_117445"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo117445_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=2360" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=13174&amp;repquote=117445&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 117445)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_0"></div>				</div>
			</td>
		</tr>
		</table>
		</div><div class="ad_column" id="ad_interthread"><a href="/viewthread.php?tid=54699" target="_blank" style="color:red;">1984bbs是一个非营利项目，它需要您的捐助！</font></a>		</div>
	<div class="mainbox viewthread">
			<table id="pid265523" summary="pid265523" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6825" target="_blank" id="userinfo265523" class="dropmenu" onmouseover="showMenu(this.id)">褪色FADEAWAY</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">幽幽一滩脏水洼</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6825">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6825&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_1" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum265523" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=13174&page=1#pid265523', '话题链接已经复制到剪贴板')">2楼</strong>
													<em onclick="$('postmessage_265523').className='t_bigfont'">大</em>							<em onclick="$('postmessage_265523').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_265523').className='t_smallfont'">小</em>												发表于 2009-9-30 23:32&nbsp;																					<a href="viewthread.php?tid=13174&amp;page=1&amp;authorid=6825" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_1"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_1"></div><div id="ad_thread4_1"></div>
						
						
																											<div id="postmessage_265523" class="t_msgfont">好东西，存了先。多谢LZ。。。</div>

							
							
							
							
															<div id="post_rate_div_265523"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo265523_menu" style="display: none;">
										<div class="imicons">
												<a href="http://wpa.qq.com/msgrd?V=1&amp;Uin=42711356&amp;Site=1984bbs.com&amp;Menu=yes" target="_blank"><img src="images/default/qq.gif" alt="QQ" /></a>																							</div>
										<dl></dl>
											<p><a href="http://blog.sina.com.cn/hundan" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=6825" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=13174&amp;repquote=265523&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 265523)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_1"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid266788" summary="pid266788" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8530" target="_blank" id="userinfo266788" class="dropmenu" onmouseover="showMenu(this.id)">lwjef</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">twitter账号 lwjef</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8530">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8530&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_2" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum266788" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=13174&page=1#pid266788', '话题链接已经复制到剪贴板')">3楼</strong>
													<em onclick="$('postmessage_266788').className='t_bigfont'">大</em>							<em onclick="$('postmessage_266788').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_266788').className='t_smallfont'">小</em>												发表于 2009-10-1 17:39&nbsp;																					<a href="viewthread.php?tid=13174&amp;page=1&amp;authorid=8530" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_2"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_2"></div><div id="ad_thread4_2"></div>
						
						
																											<div id="postmessage_266788" class="t_msgfont">奶瓶腿被墙很遗憾啊~~~</div>

							
							
							
							
															<div id="post_rate_div_266788"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo266788_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=8530" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=13174&amp;repquote=266788&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 266788)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_2"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid266918" summary="pid266918" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=9137" target="_blank" id="userinfo266918" class="dropmenu" onmouseover="showMenu(this.id)">七年</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">不明真相的围观群众一枚。</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=9137">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=9137&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_3" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum266918" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=13174&page=1#pid266918', '话题链接已经复制到剪贴板')">4楼</strong>
													<em onclick="$('postmessage_266918').className='t_bigfont'">大</em>							<em onclick="$('postmessage_266918').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_266918').className='t_smallfont'">小</em>												发表于 2009-10-1 19:15&nbsp;																					<a href="viewthread.php?tid=13174&amp;page=1&amp;authorid=9137" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_3"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_3"></div><div id="ad_thread4_3"></div>
						
						
																											<div id="postmessage_266918" class="t_msgfont">推特是我的不死之身。。。</div>

							
							
							
							
															<div id="post_rate_div_266918"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo266918_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=9137" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=13174&amp;repquote=266918&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 266918)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_3"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid267347" summary="pid267347" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=9282" target="_blank" id="userinfo267347" class="dropmenu" onmouseover="showMenu(this.id)">xstone</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=9282">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=9282&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_4" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum267347" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=13174&page=1#pid267347', '话题链接已经复制到剪贴板')">5楼</strong>
													<em onclick="$('postmessage_267347').className='t_bigfont'">大</em>							<em onclick="$('postmessage_267347').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_267347').className='t_smallfont'">小</em>												发表于 2009-10-1 23:02&nbsp;																					<a href="viewthread.php?tid=13174&amp;page=1&amp;authorid=9282" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_4"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_4"></div><div id="ad_thread4_4"></div>
						
						
																											<div id="postmessage_267347" class="t_msgfont">特推，推些特别的，特别是不能推的时候更要坚持。谢谢分享经验。</div>

							
							
							
							
															<div id="post_rate_div_267347"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo267347_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=9282" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=13174&amp;repquote=267347&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 267347)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_4"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid267778" summary="pid267778" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8775" target="_blank" id="userinfo267778" class="dropmenu" onmouseover="showMenu(this.id)">cfsalex</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">真理,即使被践踏在地,也会站起来:上帝永恒的岁月属于他;但谬误一旦受伤,便会就地打滚,然后在其崇拜者中间咽气</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8775">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8775&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_5" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum267778" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=13174&page=1#pid267778', '话题链接已经复制到剪贴板')">6楼</strong>
													<em onclick="$('postmessage_267778').className='t_bigfont'">大</em>							<em onclick="$('postmessage_267778').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_267778').className='t_smallfont'">小</em>												发表于 2009-10-2 10:28&nbsp;																					<a href="viewthread.php?tid=13174&amp;page=1&amp;authorid=8775" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_5"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_5"></div><div id="ad_thread4_5"></div>
						
						
																											<div id="postmessage_267778" class="t_msgfont">八哥客户端很好用</div>

							
							
							
							
															<div id="post_rate_div_267778"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo267778_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=8775" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=13174&amp;repquote=267778&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 267778)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_5"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid271036" summary="pid271036" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 <a name="lastpost"></a>					<cite>											<a href="space.php?uid=250" target="_blank" id="userinfo271036" class="dropmenu" onmouseover="showMenu(this.id)">dada</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">不明真相群众</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=250">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=250&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_6" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum271036" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=13174&page=1#pid271036', '话题链接已经复制到剪贴板')">7楼</strong>
													<em onclick="$('postmessage_271036').className='t_bigfont'">大</em>							<em onclick="$('postmessage_271036').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_271036').className='t_smallfont'">小</em>												发表于 2009-10-5 18:07&nbsp;																					<a href="viewthread.php?tid=13174&amp;page=1&amp;authorid=250" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_6"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_6"></div><div id="ad_thread4_6"></div>
						
						
																											<div id="postmessage_271036" class="t_msgfont">下了，做啥自己的客户端还比它好用，可以截图。twitter用的还可以，不用翻墙了。</div>

							
							
							
							
															<div id="post_rate_div_271036"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo271036_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=250" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=13174&amp;repquote=271036&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 271036)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_6"></div>				</div>
			</td>
		</tr>
		</table>
		</div>
</form>





<div class="pages_btns">
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=13174&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=13174&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
				<span class="postbtn" id="newspecialtmp" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=13174&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

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

	<form method="post" id="postform" action="post.php?action=reply&amp;fid=26&amp;tid=13174&amp;extra=&amp;replysubmit=yes" onSubmit="return validate(this)">
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
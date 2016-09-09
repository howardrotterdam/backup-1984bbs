<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<title>SSH翻墙：申请与使用教程 - 国家局域网研究所 -  1984bbs.com </title>
<meta name="keywords" content="" />
<meta name="MSSmartTagsPreventParsing" content="True" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<link rel="archives" title="1984bbs.com" href="https://1984bbs.com/archiver/" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_viewthread.css" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_common.css" />
<script type="text/javascript">
	var discuz_uid = 13019;var IMGDIR = 'images/default';var attackevasive = '0';var gid = 0;var STYLEID = '1';
	gid = parseInt('3');var fid = parseInt('26');var tid = parseInt('28421');
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
			<p><a href="index.php" id="forumlist" onmouseover="showMenu(this.id)" class="dropmenu">1984bbs.com</a> &raquo; <a href="forumdisplay.php?fid=26">国家局域网研究所</a> &raquo; SSH翻墙：申请与使用教程</p>
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
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=28421&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=28421&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
	<div class="pages"><em>&nbsp;83&nbsp;</em><strong>1</strong><a href="viewthread.php?tid=28421&amp;extra=&amp;page=2">2</a><a href="viewthread.php?tid=28421&amp;extra=&amp;page=2" class="next">&rsaquo;&rsaquo;</a></div>			<span class="postbtn" id="newspecial" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=28421&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

	<ul class="popupmenu_popup newspecialmenu" id="newspecial_menu" style="display: none">
		<li><a href="post.php?action=newthread&amp;fid=26&amp;extra=">发新话题</a></li>
		<li class="poll"><a href="post.php?action=newthread&amp;fid=26&amp;extra=&amp;special=1">发布投票</a></li>													</ul>

<form method="post" name="modactions">
	<input type="hidden" name="formhash" value="823c9fa2" />
	<div class="mainbox viewthread">
		<span class="headactions">
					<a href="my.php?item=favorites&amp;tid=28421" id="ajax_favorite" onclick="ajaxmenu(event, this.id, 3000, 0)">收藏</a>
			<a href="my.php?item=subscriptions&amp;subadd=28421" id="ajax_subscription" onclick="ajaxmenu(event, this.id, 3000, null, 0)">订阅</a>
			<a href="misc.php?action=emailfriend&amp;tid=28421" id="emailfriend" onclick="ajaxmenu(event, this.id, 9000000, null, 0)">推荐</a>
				<a href="viewthread.php?action=printable&amp;tid=28421" target="_blank" class="notabs">打印</a>
				</span>
		<h1>SSH翻墙：申请与使用教程		</h1>
				<ins>
						<a href="misc.php?action=viewthreadmod&amp;tid=28421" title="主题操作记录" target="_blank">本主题由 库存袈裟 于 2009-11-18 22:58 合并</a>								</ins>
							<table id="pid327722" summary="pid327722" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6920" target="_blank" id="userinfo327722" class="dropmenu" onmouseover="showMenu(this.id)">淮月</a></cite>
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
						<strong title="复制话题链接到剪贴板" id="postnum327722" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=28421&page=1#pid327722', '话题链接已经复制到剪贴板')">1楼</strong>
													<em onclick="$('postmessage_327722').className='t_bigfont'">大</em>							<em onclick="$('postmessage_327722').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_327722').className='t_smallfont'">小</em>												发表于 2009-11-15 14:50&nbsp;																					<a href="viewthread.php?tid=28421&amp;page=1&amp;authorid=6920" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_0"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_0"></div><div id="ad_thread4_0"></div>
													<h2>SSH翻墙：申请与使用教程</h2>
						
						
																											<div id="postmessage_327722" class="t_msgfont"><a href="http://www.openwebster.com" target="_blank">www.openwebster.com</a>提供带ssh账号的免费空间。&nbsp;&nbsp;详情 ：<a href="http://www.win7.comlu.com/wordpress/?p=53" target="_blank">http://www.win7.comlu.com/wordpress/?p=53</a><br />
1.注册<a href="http://crm.ilabors.com/cart.php?a=add&amp;pid=1" target="_blank">http://crm.ilabors.com/cart.php?a=add&amp;pid=1</a>&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;账号信息会发到你的注册邮箱。<br />
2.下载myentunnel，运行。<br />
myentunnel设置，SSH服务器：<a href="http://www.openwebster.com" target="_blank">www.openwebster.com</a><br />
SSH端口：22&nbsp; &nbsp;&nbsp;&nbsp;用户名和密码填你得到的。重试延迟：3 端口：7070。 在“启动后就连接”“不限重试次数”“掉线后自动重连”“启用动态SOCKS”前打勾。<br />
4.大功告成！<br />
5.使用火狐，安装插件autoproxy。代理服务器选SSH-D&nbsp; &nbsp;详情：<a href="http://blog.sina.com.cn/s/blog_5da3507f0100dv85.html" target="_blank">http://blog.sina.com.cn/s/blog_5da3507f0100dv85.html</a>&nbsp; &nbsp;<br />
6.OK!<br />
<br />
11.16 更新 另一个提供免费ssh账号的空间 申请地址：<a href="http://www.mwzaf.com" target="_blank">http://www.mwzaf.com</a><br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; 详情 <a href="http://www.win7.comlu.com/wordpress/?p=11" target="_blank">http://www.win7.comlu.com/wordpress/?p=11</a><br />
11.18更新 几十个提供免费SSH账号的免费空间<br />
全在这里 <a href="http://www.win7.comlu.com/wordpress/?p=100" target="_blank">http://www.win7.comlu.com/wordpress/?p=100</a><br />
感谢库存袈裟<br />
<br />
11.19更新 有人回复：“注册了空间之后只是用ssh不干别的，服务商可能 会封停账号 最好建个wordpress博客&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;还可以架设一个twitter代理的API具体参看&nbsp;&nbsp;<a href="http://code.google.com/p/kwestion" target="_blank">http://code.google.com/p/kwestion</a>”<br />
<br />
11.27日更新&nbsp;&nbsp;这几天废寝忘食，弄了一个论坛：爱推特。提供大量翻墙工具和推特第三方，介绍自建推特第三方，自架代理服务器的方法。欢迎大家来访！<a href="http://itt.cz.cc" target="_blank">http://itt.cz.cc</a><br />
<br />
[<i> 本帖最后由 淮月 于 2009-11-27 20:18 编辑 </i>]</div>

							
							
							
							
															<div id="post_rate_div_327722"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo327722_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://twitter.com/qhgy" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=6920" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=28421&amp;repquote=327722&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 327722)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_0"></div>				</div>
			</td>
		</tr>
		</table>
		</div><div class="ad_column" id="ad_interthread"><a href="/viewthread.php?tid=54699" target="_blank" style="color:red;">1984bbs是一个非营利项目，它需要您的捐助！</font></a>		</div>
	<div class="mainbox viewthread">
			<table id="pid327730" summary="pid327730" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2213" target="_blank" id="userinfo327730" class="dropmenu" onmouseover="showMenu(this.id)">核子力量</a></cite>
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
						<strong title="复制话题链接到剪贴板" id="postnum327730" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=28421&page=1#pid327730', '话题链接已经复制到剪贴板')">2楼</strong>
													<em onclick="$('postmessage_327730').className='t_bigfont'">大</em>							<em onclick="$('postmessage_327730').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_327730').className='t_smallfont'">小</em>												发表于 2009-11-15 15:02&nbsp;																					<a href="viewthread.php?tid=28421&amp;page=1&amp;authorid=2213" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_1"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_1"></div><div id="ad_thread4_1"></div>
						
						
																											<div id="postmessage_327730" class="t_msgfont">前几天也看到一个<br />
<a href="http://xiaoqian0612.blogbus.com/logs/49131289.html" target="_blank">http://xiaoqian0612.blogbus.com/logs/49131289.html</a></div>

							
							
							
							
															<div id="post_rate_div_327730"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo327730_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://twitter.com/hzpower" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=2213" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=28421&amp;repquote=327730&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 327730)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_1"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid327739" summary="pid327739" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6920" target="_blank" id="userinfo327739" class="dropmenu" onmouseover="showMenu(this.id)">淮月</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">翻墙痴迷者 雄性文青  @qhgy</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6920">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6920&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_2" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum327739" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=28421&page=1#pid327739', '话题链接已经复制到剪贴板')">3楼</strong>
													<em onclick="$('postmessage_327739').className='t_bigfont'">大</em>							<em onclick="$('postmessage_327739').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_327739').className='t_smallfont'">小</em>												发表于 2009-11-15 15:08&nbsp;																					<a href="viewthread.php?tid=28421&amp;page=1&amp;authorid=6920" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_2"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_2"></div><div id="ad_thread4_2"></div>
						
						
																											<div id="postmessage_327739" class="t_msgfont">楼上的链接很不错</div>

							
							
							
							
															<div id="post_rate_div_327739"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo327739_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://twitter.com/qhgy" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=6920" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=28421&amp;repquote=327739&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 327739)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_2"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid327805" summary="pid327805" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1757" target="_blank" id="userinfo327805" class="dropmenu" onmouseover="showMenu(this.id)">再见安打</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1757">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1757&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_3" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum327805" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=28421&page=1#pid327805', '话题链接已经复制到剪贴板')">4楼</strong>
													<em onclick="$('postmessage_327805').className='t_bigfont'">大</em>							<em onclick="$('postmessage_327805').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_327805').className='t_smallfont'">小</em>												发表于 2009-11-15 16:25&nbsp;																					<a href="viewthread.php?tid=28421&amp;page=1&amp;authorid=1757" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_3"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_3"></div><div id="ad_thread4_3"></div>
						
						
																											<div id="postmessage_327805" class="t_msgfont">我低调的来了</div>

							
							
							
							
															<div id="post_rate_div_327805"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo327805_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1757" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=28421&amp;repquote=327805&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 327805)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_3"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid327837" summary="pid327837" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=4546" target="_blank" id="userinfo327837" class="dropmenu" onmouseover="showMenu(this.id)">五机</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">逆足精度7的play-maker@yebayiren</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=4546">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=4546&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_4" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum327837" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=28421&page=1#pid327837', '话题链接已经复制到剪贴板')">5楼</strong>
													<em onclick="$('postmessage_327837').className='t_bigfont'">大</em>							<em onclick="$('postmessage_327837').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_327837').className='t_smallfont'">小</em>												发表于 2009-11-15 17:01&nbsp;																					<a href="viewthread.php?tid=28421&amp;page=1&amp;authorid=4546" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_4"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_4"></div><div id="ad_thread4_4"></div>
						
						
																											<div id="postmessage_327837" class="t_msgfont">总是显示 too many authentication failures</div>

							
							
							
							
															<div id="post_rate_div_327837"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo327837_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://yebayiren.blogspot.com" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=4546" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=28421&amp;repquote=327837&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 327837)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_4"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid327846" summary="pid327846" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1757" target="_blank" id="userinfo327846" class="dropmenu" onmouseover="showMenu(this.id)">再见安打</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1757">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1757&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_5" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum327846" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=28421&page=1#pid327846', '话题链接已经复制到剪贴板')">6楼</strong>
													<em onclick="$('postmessage_327846').className='t_bigfont'">大</em>							<em onclick="$('postmessage_327846').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_327846').className='t_smallfont'">小</em>												发表于 2009-11-15 17:11&nbsp;																					<a href="viewthread.php?tid=28421&amp;page=1&amp;authorid=1757" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_5"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_5"></div><div id="ad_thread4_5"></div>
						
						
																											<div id="postmessage_327846" class="t_msgfont">成功了<br />
<br />
楼上的再仔细检查一下设置吧，尤其是服务器、用户名和密码什么的</div>

							
							
							
							
															<div id="post_rate_div_327846"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo327846_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1757" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=28421&amp;repquote=327846&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 327846)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_5"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid327913" summary="pid327913" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=4546" target="_blank" id="userinfo327913" class="dropmenu" onmouseover="showMenu(this.id)">五机</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">逆足精度7的play-maker@yebayiren</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=4546">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=4546&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_6" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum327913" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=28421&page=1#pid327913', '话题链接已经复制到剪贴板')">7楼</strong>
													<em onclick="$('postmessage_327913').className='t_bigfont'">大</em>							<em onclick="$('postmessage_327913').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_327913').className='t_smallfont'">小</em>												发表于 2009-11-15 18:33&nbsp;																					<a href="viewthread.php?tid=28421&amp;page=1&amp;authorid=4546" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_6"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_6"></div><div id="ad_thread4_6"></div>
						
						
																											<div id="postmessage_327913" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>再见安打</i> 于 2009-11-15 17:11 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=327846&amp;ptid=28102" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
成功了<br />
<br />
楼上的再仔细检查一下设置吧，尤其是服务器、用户名和密码什么的 </blockquote></div>楼上大哥，就是用户名密码出错，用户名是注册时用的邮箱还是别的？</div>

							
							
							
							
															<div id="post_rate_div_327913"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo327913_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://yebayiren.blogspot.com" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=4546" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=28421&amp;repquote=327913&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 327913)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_6"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid328331" summary="pid328331" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1757" target="_blank" id="userinfo328331" class="dropmenu" onmouseover="showMenu(this.id)">再见安打</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1757">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1757&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_7" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum328331" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=28421&page=1#pid328331', '话题链接已经复制到剪贴板')">8楼</strong>
													<em onclick="$('postmessage_328331').className='t_bigfont'">大</em>							<em onclick="$('postmessage_328331').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_328331').className='t_smallfont'">小</em>												发表于 2009-11-15 23:42&nbsp;																					<a href="viewthread.php?tid=28421&amp;page=1&amp;authorid=1757" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_7"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_7"></div><div id="ad_thread4_7"></div>
						
						
																											<div id="postmessage_328331" class="t_msgfont">不是自己设置的那个，是系统给你的<br />
给你发的邮件里，“New Account Info”标题下的Username和Password:</div>

							
							
							
							
															<div id="post_rate_div_328331"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo328331_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1757" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=28421&amp;repquote=328331&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 328331)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_7"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid328556" summary="pid328556" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8351" target="_blank" id="userinfo328556" class="dropmenu" onmouseover="showMenu(this.id)">isonomy</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8351">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8351&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_8" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum328556" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=28421&page=1#pid328556', '话题链接已经复制到剪贴板')">9楼</strong>
													<em onclick="$('postmessage_328556').className='t_bigfont'">大</em>							<em onclick="$('postmessage_328556').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_328556').className='t_smallfont'">小</em>												发表于 2009-11-16 08:35&nbsp;																					<a href="viewthread.php?tid=28421&amp;page=1&amp;authorid=8351" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_8"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_8"></div><div id="ad_thread4_8"></div>
						
						
																											<div id="postmessage_328556" class="t_msgfont">出现如下错误：plink.exe:fatal error:server sent disconnect message<br />
不知何故</div>

							
							
							
							
															<div id="post_rate_div_328556"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo328556_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=8351" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=28421&amp;repquote=328556&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 328556)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_8"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid328561" summary="pid328561" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=4546" target="_blank" id="userinfo328561" class="dropmenu" onmouseover="showMenu(this.id)">五机</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">逆足精度7的play-maker@yebayiren</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=4546">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=4546&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_9" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum328561" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=28421&page=1#pid328561', '话题链接已经复制到剪贴板')">10楼</strong>
													<em onclick="$('postmessage_328561').className='t_bigfont'">大</em>							<em onclick="$('postmessage_328561').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_328561').className='t_smallfont'">小</em>												发表于 2009-11-16 08:45&nbsp;																					<a href="viewthread.php?tid=28421&amp;page=1&amp;authorid=4546" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_9"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_9"></div><div id="ad_thread4_9"></div>
						
						
																											<div id="postmessage_328561" class="t_msgfont">没有收到标题为&nbsp;&nbsp;new account info&nbsp;&nbsp;的邮件，只有一封Welcome</div>

							
							
							
							
															<div id="post_rate_div_328561"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo328561_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://yebayiren.blogspot.com" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=4546" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=28421&amp;repquote=328561&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 328561)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_9"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid328587" summary="pid328587" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1757" target="_blank" id="userinfo328587" class="dropmenu" onmouseover="showMenu(this.id)">再见安打</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1757">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1757&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_10" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum328587" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=28421&page=1#pid328587', '话题链接已经复制到剪贴板')">11楼</strong>
													<em onclick="$('postmessage_328587').className='t_bigfont'">大</em>							<em onclick="$('postmessage_328587').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_328587').className='t_smallfont'">小</em>												发表于 2009-11-16 09:11&nbsp;																					<a href="viewthread.php?tid=28421&amp;page=1&amp;authorid=1757" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_10"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_10"></div><div id="ad_thread4_10"></div>
						
						
																											<div id="postmessage_328587" class="t_msgfont">我收到3封邮件，最后一封的主题就是New Account Information</div>

							
							
							
							
															<div id="post_rate_div_328587"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo328587_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1757" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=28421&amp;repquote=328587&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 328587)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_10"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid328670" summary="pid328670" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8351" target="_blank" id="userinfo328670" class="dropmenu" onmouseover="showMenu(this.id)">isonomy</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8351">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8351&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_11" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum328670" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=28421&page=1#pid328670', '话题链接已经复制到剪贴板')">12楼</strong>
													<em onclick="$('postmessage_328670').className='t_bigfont'">大</em>							<em onclick="$('postmessage_328670').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_328670').className='t_smallfont'">小</em>												发表于 2009-11-16 10:21&nbsp;																					<a href="viewthread.php?tid=28421&amp;page=1&amp;authorid=8351" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_11"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_11"></div><div id="ad_thread4_11"></div>
						
						
																											<div id="postmessage_328670" class="t_msgfont">终于搞定了，谢了<br />
又多了一个翻墙工具了</div>

							
							
							
							
															<div id="post_rate_div_328670"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo328670_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=8351" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=28421&amp;repquote=328670&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 328670)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_11"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid329643" summary="pid329643" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=679" target="_blank" id="userinfo329643" class="dropmenu" onmouseover="showMenu(this.id)">8ger</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">我还是低调点比较好</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=679">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=679&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_12" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum329643" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=28421&page=1#pid329643', '话题链接已经复制到剪贴板')">13楼</strong>
													<em onclick="$('postmessage_329643').className='t_bigfont'">大</em>							<em onclick="$('postmessage_329643').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_329643').className='t_smallfont'">小</em>												发表于 2009-11-16 20:53&nbsp;																					<a href="viewthread.php?tid=28421&amp;page=1&amp;authorid=679" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_12"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_12"></div><div id="ad_thread4_12"></div>
						
						
																											<div id="postmessage_329643" class="t_msgfont">成功了<br />
只是上facebook好像很不稳定啊，页面经常只能打开一半</div>

							
							
							
							
															<div id="post_rate_div_329643"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo329643_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=679" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=28421&amp;repquote=329643&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 329643)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_12"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid329755" summary="pid329755" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6920" target="_blank" id="userinfo329755" class="dropmenu" onmouseover="showMenu(this.id)">淮月</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">翻墙痴迷者 雄性文青  @qhgy</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6920">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6920&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_13" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum329755" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=28421&page=1#pid329755', '话题链接已经复制到剪贴板')">14楼</strong>
													<em onclick="$('postmessage_329755').className='t_bigfont'">大</em>							<em onclick="$('postmessage_329755').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_329755').className='t_smallfont'">小</em>												发表于 2009-11-16 22:00&nbsp;																					<a href="viewthread.php?tid=28421&amp;page=1&amp;authorid=6920" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_13"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_13"></div><div id="ad_thread4_13"></div>
						
						
																											<div id="postmessage_329755" class="t_msgfont">换第二个空间试试</div>

							
							
							
							
															<div id="post_rate_div_329755"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo329755_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://twitter.com/qhgy" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=6920" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=28421&amp;repquote=329755&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 329755)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_13"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid330005" summary="pid330005" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2428" target="_blank" id="userinfo330005" class="dropmenu" onmouseover="showMenu(this.id)">xiahua</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">业余打狗爱好者。新宇大校夸我书法好，锦涛叔叔赞我觉悟高</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2428">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2428&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_14" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum330005" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=28421&page=1#pid330005', '话题链接已经复制到剪贴板')">15楼</strong>
													<em onclick="$('postmessage_330005').className='t_bigfont'">大</em>							<em onclick="$('postmessage_330005').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_330005').className='t_smallfont'">小</em>												发表于 2009-11-17 01:10&nbsp;																					<a href="viewthread.php?tid=28421&amp;page=1&amp;authorid=2428" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_14"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_14"></div><div id="ad_thread4_14"></div>
						
						
																											<div id="postmessage_330005" class="t_msgfont">占座待编辑</div>

							
							
							
							
															<div id="post_rate_div_330005"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo330005_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=2428" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=28421&amp;repquote=330005&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 330005)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_14"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid330080" summary="pid330080" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1146" target="_blank" id="userinfo330080" class="dropmenu" onmouseover="showMenu(this.id)">olindays</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1146">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1146&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_15" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum330080" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=28421&page=1#pid330080', '话题链接已经复制到剪贴板')">16楼</strong>
													<em onclick="$('postmessage_330080').className='t_bigfont'">大</em>							<em onclick="$('postmessage_330080').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_330080').className='t_smallfont'">小</em>												发表于 2009-11-17 07:46&nbsp;																					<a href="viewthread.php?tid=28421&amp;page=1&amp;authorid=1146" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_15"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_15"></div><div id="ad_thread4_15"></div>
						
						
																											<div id="postmessage_330080" class="t_msgfont">我这里上的还挺不错的<br />
速度稍微有点儿慢<br />
不过打开美国网页很快<br />
我开msn共享空间直接把页面语言切换成英文了</div>

							
							
							
							
															<div id="post_rate_div_330080"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo330080_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1146" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=28421&amp;repquote=330080&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 330080)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_15"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid330089" summary="pid330089" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2718" target="_blank" id="userinfo330089" class="dropmenu" onmouseover="showMenu(this.id)">harrygg</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2718">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2718&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_16" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum330089" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=28421&page=1#pid330089', '话题链接已经复制到剪贴板')">17楼</strong>
													<em onclick="$('postmessage_330089').className='t_bigfont'">大</em>							<em onclick="$('postmessage_330089').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_330089').className='t_smallfont'">小</em>												发表于 2009-11-17 08:24&nbsp;																					<a href="viewthread.php?tid=28421&amp;page=1&amp;authorid=2718" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_16"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_16"></div><div id="ad_thread4_16"></div>
						
						
																											<div id="postmessage_330089" class="t_msgfont">ssh客户端各平台都有，所以这种翻墙方式时候所有人</div>

							
							
							
							
															<div id="post_rate_div_330089"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo330089_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=2718" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=28421&amp;repquote=330089&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 330089)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_16"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid330249" summary="pid330249" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1757" target="_blank" id="userinfo330249" class="dropmenu" onmouseover="showMenu(this.id)">再见安打</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1757">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1757&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_17" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum330249" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=28421&page=1#pid330249', '话题链接已经复制到剪贴板')">18楼</strong>
													<em onclick="$('postmessage_330249').className='t_bigfont'">大</em>							<em onclick="$('postmessage_330249').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_330249').className='t_smallfont'">小</em>												发表于 2009-11-17 11:09&nbsp;																					<a href="viewthread.php?tid=28421&amp;page=1&amp;authorid=1757" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_17"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_17"></div><div id="ad_thread4_17"></div>
						
						
																											<div id="postmessage_330249" class="t_msgfont">怎么判断免费空间是否提供ssh帐号</div>

							
							
							
							
															<div id="post_rate_div_330249"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo330249_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1757" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=28421&amp;repquote=330249&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 330249)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_17"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid330507" summary="pid330507" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1960" target="_blank" id="userinfo330507" class="dropmenu" onmouseover="showMenu(this.id)">库存袈裟</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">@bruceku 想象力比知识更重要。</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1960">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1960&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_18" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum330507" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=28421&page=1#pid330507', '话题链接已经复制到剪贴板')">19楼</strong>
													<em onclick="$('postmessage_330507').className='t_bigfont'">大</em>							<em onclick="$('postmessage_330507').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_330507').className='t_smallfont'">小</em>												发表于 2009-11-17 13:39&nbsp;																					<a href="viewthread.php?tid=28421&amp;page=1&amp;authorid=1960" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_18"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_18"></div><div id="ad_thread4_18"></div>
						
						
																											<div id="postmessage_330507" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>再见安打</i> 于 2009-11-17 11:09 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=330249&amp;ptid=28102" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
怎么判断免费空间是否提供ssh帐号 </blockquote></div>一般CP空间支持的可能性比较大，在主机规格资料仔细查找。</div>

							
							
							
							
															<div id="post_rate_div_330507"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo330507_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1960" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=28421&amp;repquote=330507&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 330507)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_18"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid332205" summary="pid332205" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8249" target="_blank" id="userinfo332205" class="dropmenu" onmouseover="showMenu(this.id)">freewushi</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">东厂、真理部、GFW、宫刑部爱好者，经常在不和谐的地方出没，围观群众一个</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8249">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8249&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_19" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum332205" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=28421&page=1#pid332205', '话题链接已经复制到剪贴板')">20楼</strong>
													<em onclick="$('postmessage_332205').className='t_bigfont'">大</em>							<em onclick="$('postmessage_332205').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_332205').className='t_smallfont'">小</em>												发表于 2009-11-18 15:35&nbsp;																					<a href="viewthread.php?tid=28421&amp;page=1&amp;authorid=8249" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_19"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_19"></div><div id="ad_thread4_19"></div>
						
						
																											<div id="postmessage_332205" class="t_msgfont">第一个貌似需要邀请码..哪位淫才有啊？</div>

							
							
							
							
															<div id="post_rate_div_332205"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo332205_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=8249" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=28421&amp;repquote=332205&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 332205)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_19"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid332236" summary="pid332236" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1960" target="_blank" id="userinfo332236" class="dropmenu" onmouseover="showMenu(this.id)">库存袈裟</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">@bruceku 想象力比知识更重要。</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1960">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1960&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_20" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum332236" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=28421&page=1#pid332236', '话题链接已经复制到剪贴板')">21楼</strong>
													<em onclick="$('postmessage_332236').className='t_bigfont'">大</em>							<em onclick="$('postmessage_332236').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_332236').className='t_smallfont'">小</em>												发表于 2009-11-18 15:57&nbsp;																					<a href="viewthread.php?tid=28421&amp;page=1&amp;authorid=1960" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_20"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_20"></div><div id="ad_thread4_20"></div>
													<h2>补充一个，支持SSH的免费空间</h2>
						
						
																											<div id="postmessage_332236" class="t_msgfont"><a href="https://www.hostingforfree.us/cart.php" target="_blank">https://www.hostingforfree.us/cart.php</a></div>

							
							
							
							
															<div id="post_rate_div_332236"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo332236_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1960" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=28421&amp;repquote=332236&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 332236)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_20"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid332524" summary="pid332524" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=9863" target="_blank" id="userinfo332524" class="dropmenu" onmouseover="showMenu(this.id)">kysoft</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">fuck gfw</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=9863">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=9863&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_21" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum332524" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=28421&page=1#pid332524', '话题链接已经复制到剪贴板')">22楼</strong>
													<em onclick="$('postmessage_332524').className='t_bigfont'">大</em>							<em onclick="$('postmessage_332524').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_332524').className='t_smallfont'">小</em>												发表于 2009-11-18 18:30&nbsp;																					<a href="viewthread.php?tid=28421&amp;page=1&amp;authorid=9863" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_21"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_21"></div><div id="ad_thread4_21"></div>
						
						
																											<div id="postmessage_332524" class="t_msgfont">用SSH翻墙很好，各平台通用性很棒</div>

							
							
							
							
															<div id="post_rate_div_332524"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo332524_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=9863" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=28421&amp;repquote=332524&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 332524)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_21"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid332683" summary="pid332683" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=9892" target="_blank" id="userinfo332683" class="dropmenu" onmouseover="showMenu(this.id)">kwedo</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">可味豆</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=9892">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=9892&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_22" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum332683" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=28421&page=1#pid332683', '话题链接已经复制到剪贴板')">23楼</strong>
													<em onclick="$('postmessage_332683').className='t_bigfont'">大</em>							<em onclick="$('postmessage_332683').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_332683').className='t_smallfont'">小</em>												发表于 2009-11-18 20:15&nbsp;																					<a href="viewthread.php?tid=28421&amp;page=1&amp;authorid=9892" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_22"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_22"></div><div id="ad_thread4_22"></div>
						
						
																											<div id="postmessage_332683" class="t_msgfont">低调的收藏</div>

							
							
							
							
															<div id="post_rate_div_332683"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo332683_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://riveriver.com" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=9892" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=28421&amp;repquote=332683&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 332683)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_22"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid332704" summary="pid332704" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1960" target="_blank" id="userinfo332704" class="dropmenu" onmouseover="showMenu(this.id)">库存袈裟</a></cite>
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
						<strong title="复制话题链接到剪贴板" id="postnum332704" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=28421&page=1#pid332704', '话题链接已经复制到剪贴板')">24楼</strong>
													<em onclick="$('postmessage_332704').className='t_bigfont'">大</em>							<em onclick="$('postmessage_332704').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_332704').className='t_smallfont'">小</em>												发表于 2009-11-18 20:26&nbsp;																					<a href="viewthread.php?tid=28421&amp;page=1&amp;authorid=1960" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_23"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_23"></div><div id="ad_thread4_23"></div>
						
						
																											<div id="postmessage_332704" class="t_msgfont">hostingforfree和openwebster都有Request Cancellation功能，如若您觉得SSH速度慢，或者已经有更好的翻墙资源，请取消，将资源留给更需要的人。</div>

							
							
							
							
															<div id="post_rate_div_332704"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo332704_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1960" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=28421&amp;repquote=332704&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 332704)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_23"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid332723" summary="pid332723" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1960" target="_blank" id="userinfo332723" class="dropmenu" onmouseover="showMenu(this.id)">库存袈裟</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">@bruceku 想象力比知识更重要。</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1960">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1960&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_24" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum332723" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=28421&page=1#pid332723', '话题链接已经复制到剪贴板')">25楼</strong>
													<em onclick="$('postmessage_332723').className='t_bigfont'">大</em>							<em onclick="$('postmessage_332723').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_332723').className='t_smallfont'">小</em>												发表于 2009-11-18 20:41&nbsp;																					<a href="viewthread.php?tid=28421&amp;page=1&amp;authorid=1960" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_24"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_24"></div><div id="ad_thread4_24"></div>
													<h2>需2.5美元的安装费支持SSH免费空间</h2>
						
						
																											<div id="postmessage_332723" class="t_msgfont"><a href="http://www.justfreespace.com/free-services/free-cpanel-hosting.html" target="_blank">http://www.justfreespace.com/fre ... cpanel-hosting.html</a><br />
<br />
速度还不错。</div>

							
							
							
							
															<div id="post_rate_div_332723"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo332723_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1960" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=28421&amp;repquote=332723&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 332723)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_24"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid332732" summary="pid332732" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1960" target="_blank" id="userinfo332732" class="dropmenu" onmouseover="showMenu(this.id)">库存袈裟</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">@bruceku 想象力比知识更重要。</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1960">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1960&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_25" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum332732" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=28421&page=1#pid332732', '话题链接已经复制到剪贴板')">26楼</strong>
													<em onclick="$('postmessage_332732').className='t_bigfont'">大</em>							<em onclick="$('postmessage_332732').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_332732').className='t_smallfont'">小</em>												发表于 2009-11-18 20:48&nbsp;																					<a href="viewthread.php?tid=28421&amp;page=1&amp;authorid=1960" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_25"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_25"></div><div id="ad_thread4_25"></div>
													<h2>继续补充</h2>
						
						
																											<div id="postmessage_332732" class="t_msgfont"><a href="http://do.outshinesolutions.com/cart.php?a=add&amp;pid=46" target="_blank">http://do.outshinesolutions.com/cart.php?a=add&amp;pid=46</a><br />
<br />
流量小，速度稍慢，申请需人工审核。</div>

							
							
							
							
															<div id="post_rate_div_332732"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo332732_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1960" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=28421&amp;repquote=332732&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 332732)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_25"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid332822" summary="pid332822" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1960" target="_blank" id="userinfo332822" class="dropmenu" onmouseover="showMenu(this.id)">库存袈裟</a></cite>
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
						<strong title="复制话题链接到剪贴板" id="postnum332822" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=28421&page=1#pid332822', '话题链接已经复制到剪贴板')">27楼</strong>
													<em onclick="$('postmessage_332822').className='t_bigfont'">大</em>							<em onclick="$('postmessage_332822').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_332822').className='t_smallfont'">小</em>												发表于 2009-11-18 22:03&nbsp;																					<a href="viewthread.php?tid=28421&amp;page=1&amp;authorid=1960" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_26"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_26"></div><div id="ad_thread4_26"></div>
													<h2>Windows下Firefox SSH翻墙方法</h2>
						
						
																											<div id="postmessage_332822" class="t_msgfont">操作系统：Windows XP/Vista/7<br />
浏览器：<a href="http://www.mozilla.com/firefox" target="_blank">Firefox &#187;</a><br />
优点：开机自动连接(可选)、断线自动重连、智能判断网址并切换代理。<br />
第一步：配置MyEnTunnel软件<br />
下载并安装MyEnTunnel，该软件全名为My Encrypted Tunnel。<br />
软件一键下载：<a href="https://dl.getdropbox.com/u/873345/download/myentunnel.exe" target="_blank">MyEnTunnel &#187;</a><br />
<br />
<img src="http://photos.smugmug.com/photos/497956295_FRKXY-O.jpg" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
<br />
<br />
按照上图将自己的SSH帐号信息填写到相应的地方后，点击<br />
<br />
<img src="http://photos.smugmug.com/photos/497956305_GuUqV-O.jpg" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
<br />
按钮，再点击<br />
<br />
<img src="http://photos.smugmug.com/photos/497956257_vDBHg-O.jpg" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
<br />
按钮。<br />
第一次连接过程中会出现一个认证对话框，按照提示确认即可。以后的自动连接中将不再出现此认证对话框。<br />
最后点击<br />
<br />
<img src="http://photos.smugmug.com/photos/497956277_uqUyE-O.jpg" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
<br />
按钮，使对话框隐藏到系统任务栏中。<br />
提示：<br />
为MyEntunnel创建一个快捷方式，将其复制到系统的【启动】（C:\Documents and Settings\当前用户名（需要修改成你自己的）\「开始」菜单\程序\启动）文件夹中，今后开机便可自动启动软件，并自动连接服务器。<br />
<img src="http://photos.smugmug.com/photos/497956351_pNNkc-O.png" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
绿色代表连接成功且稳定；黄色代表正在连接或重新连接；红色代表连接失败。<br />
<br />
第二步：配置Firefox浏览器<br />
假设你正使用<a href="http://www.mozilla.com/firefox" target="_blank">Firefox &#187;</a>浏览器阅读本文。<br />
扩展一键安装：<a href="http://autoproxy.mozdev.org/latest.xpi" target="_blank">AutoProxy &#187;</a><br />
<br />
一般情况下，页面上方会出现下图提示是否允许安装，请点击“允许”。<br />
<br />
<img src="http://photos.smugmug.com/photos/706268944_HgQqf-O.jpg" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
<br />
<img src="http://photos.smugmug.com/photos/498951512_XzxSh-O.png" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
<br />
点击立即安装，安装后，重新启动Firefox。然后你会看到如下对话框，按照下图依次进行选择，最后点击“确定”。<br />
<img src="http://photos.smugmug.com/photos/706264039_UrNRn-M.jpg" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
<br />
至此配置已全部就绪。<br />
版权信息：您可以自由复制、传播、演绎本作品且无需署名、无需注明原始出处。<br />
<br />
转自：<a href="https://dl.dropbox.com/u/873345/index.html" target="_blank">https://dl.dropbox.com/u/873345/index.html</a></div>

							
							
							
							
															<div id="post_rate_div_332822"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo332822_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1960" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=28421&amp;repquote=332822&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 332822)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_26"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid332836" summary="pid332836" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1757" target="_blank" id="userinfo332836" class="dropmenu" onmouseover="showMenu(this.id)">再见安打</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1757">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1757&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_27" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum332836" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=28421&page=1#pid332836', '话题链接已经复制到剪贴板')">28楼</strong>
													<em onclick="$('postmessage_332836').className='t_bigfont'">大</em>							<em onclick="$('postmessage_332836').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_332836').className='t_smallfont'">小</em>												发表于 2009-11-18 22:13&nbsp;																					<a href="viewthread.php?tid=28421&amp;page=1&amp;authorid=1757" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_27"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_27"></div><div id="ad_thread4_27"></div>
						
						
																											<div id="postmessage_332836" class="t_msgfont"><a href="http://www.openwebster.com" target="_blank">www.openwebster.com</a>好像连不上了</div>

							
							
							
							
															<div id="post_rate_div_332836"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo332836_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1757" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=28421&amp;repquote=332836&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 332836)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_27"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid332851" summary="pid332851" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6920" target="_blank" id="userinfo332851" class="dropmenu" onmouseover="showMenu(this.id)">淮月</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">翻墙痴迷者 雄性文青  @qhgy</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6920">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6920&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_28" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum332851" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=28421&page=1#pid332851', '话题链接已经复制到剪贴板')">29楼</strong>
													<em onclick="$('postmessage_332851').className='t_bigfont'">大</em>							<em onclick="$('postmessage_332851').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_332851').className='t_smallfont'">小</em>												发表于 2009-11-18 22:28&nbsp;																					<a href="viewthread.php?tid=28421&amp;page=1&amp;authorid=6920" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_28"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_28"></div><div id="ad_thread4_28"></div>
						
						
																											<div id="postmessage_332851" class="t_msgfont">狡兔三窟 多申请几个 备用</div>

							
							
							
							
															<div id="post_rate_div_332851"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo332851_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://twitter.com/qhgy" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=6920" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=28421&amp;repquote=332851&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 332851)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_28"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid332869" summary="pid332869" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1909" target="_blank" id="userinfo332869" class="dropmenu" onmouseover="showMenu(this.id)">单手扶墙</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">活了几十年年，没能为党为人民做点什么，每思及此，心神不宁。</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1909">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1909&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_29" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum332869" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=28421&page=1#pid332869', '话题链接已经复制到剪贴板')">30楼</strong>
													<em onclick="$('postmessage_332869').className='t_bigfont'">大</em>							<em onclick="$('postmessage_332869').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_332869').className='t_smallfont'">小</em>												发表于 2009-11-18 22:43&nbsp;																					<a href="viewthread.php?tid=28421&amp;page=1&amp;authorid=1909" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_29"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_29"></div><div id="ad_thread4_29"></div>
						
						
																											<div id="postmessage_332869" class="t_msgfont">已有。。这里再谢。。</div>

							
							
							
							
															<div id="post_rate_div_332869"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo332869_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1909" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=28421&amp;repquote=332869&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 332869)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_29"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid332871" summary="pid332871" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=4021" target="_blank" id="userinfo332871" class="dropmenu" onmouseover="showMenu(this.id)">alexander982</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">肆零贰壹号组员//道貌岸然的知心大哥//伪爱情专家//傻*英雄主义者//一个烤鸭的传说</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=4021">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=4021&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_30" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum332871" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=28421&page=1#pid332871', '话题链接已经复制到剪贴板')">31楼</strong>
													<em onclick="$('postmessage_332871').className='t_bigfont'">大</em>							<em onclick="$('postmessage_332871').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_332871').className='t_smallfont'">小</em>												发表于 2009-11-18 22:44&nbsp;																					<a href="viewthread.php?tid=28421&amp;page=1&amp;authorid=4021" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_30"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_30"></div><div id="ad_thread4_30"></div>
						
						
																											<div id="postmessage_332871" class="t_msgfont">熊抱狼吻楼主以示感谢！</div>

							
							
							
							
															<div id="post_rate_div_332871"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo332871_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=4021" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=28421&amp;repquote=332871&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 332871)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_30"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid332884" summary="pid332884" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6920" target="_blank" id="userinfo332884" class="dropmenu" onmouseover="showMenu(this.id)">淮月</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">翻墙痴迷者 雄性文青  @qhgy</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6920">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6920&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_31" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum332884" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=28421&page=1#pid332884', '话题链接已经复制到剪贴板')">32楼</strong>
													<em onclick="$('postmessage_332884').className='t_bigfont'">大</em>							<em onclick="$('postmessage_332884').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_332884').className='t_smallfont'">小</em>												发表于 2009-11-18 22:55&nbsp;																					<a href="viewthread.php?tid=28421&amp;page=1&amp;authorid=6920" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_31"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_31"></div><div id="ad_thread4_31"></div>
													<h2>几十个提供免费SSH账号的免费空间</h2>
						
						
																											<div id="postmessage_332884" class="t_msgfont">全在这里<a href="http://www.freewebspace.net/free/AdvSearchR/1/343" target="_blank">http://www.freewebspace.net/free/AdvSearchR/1/343</a> 我的博客有一些文章可以参考&nbsp;&nbsp;<a href="http://www.win7.comlu.com/wordpress/?p=100" target="_blank">http://www.win7.comlu.com/wordpress/?p=100</a><br />
<br />
感谢库存袈裟<br />
<br />
[<i> 本帖最后由 淮月 于 2009-11-18 23:00 编辑 </i>]</div>

							
							
							
							
															<div id="post_rate_div_332884"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo332884_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://twitter.com/qhgy" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=6920" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=28421&amp;repquote=332884&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 332884)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_31"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid332888" summary="pid332888" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1960" target="_blank" id="userinfo332888" class="dropmenu" onmouseover="showMenu(this.id)">库存袈裟</a></cite>
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
						<strong title="复制话题链接到剪贴板" id="postnum332888" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=28421&page=1#pid332888', '话题链接已经复制到剪贴板')">33楼</strong>
													<em onclick="$('postmessage_332888').className='t_bigfont'">大</em>							<em onclick="$('postmessage_332888').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_332888').className='t_smallfont'">小</em>												发表于 2009-11-18 22:55&nbsp;																					<a href="viewthread.php?tid=28421&amp;page=1&amp;authorid=1960" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_32"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_32"></div><div id="ad_thread4_32"></div>
						
						
																											<div id="postmessage_332888" class="t_msgfont">openwebster.com被整挂了。。。人多力量大<br />
<br />
再说一次哈：一般CP空间的bill系统里都有Request Cancellation功能，如若您觉得SSH速度慢，或者已经有更好的翻墙资源，请取消，将资源留给更需要的人。恳请勿重复申请。</div>

							
							
							
							
															<div id="post_rate_div_332888"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo332888_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1960" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=28421&amp;repquote=332888&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 332888)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_32"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid332889" summary="pid332889" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1960" target="_blank" id="userinfo332889" class="dropmenu" onmouseover="showMenu(this.id)">库存袈裟</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">@bruceku 想象力比知识更重要。</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1960">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1960&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_33" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum332889" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=28421&page=1#pid332889', '话题链接已经复制到剪贴板')">34楼</strong>
													<em onclick="$('postmessage_332889').className='t_bigfont'">大</em>							<em onclick="$('postmessage_332889').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_332889').className='t_smallfont'">小</em>												发表于 2009-11-18 22:57&nbsp;																					<a href="viewthread.php?tid=28421&amp;page=1&amp;authorid=1960" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_33"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_33"></div><div id="ad_thread4_33"></div>
						
						
																											<div id="postmessage_332889" class="t_msgfont">freewebspace上列出来的空间属性不一定准，需要自己审核是否支持；<br />
而且一般支持SSH的稳定空间都是Post2Host，贼麻烦。</div>

							
							
							
							
															<div id="post_rate_div_332889"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo332889_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1960" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=28421&amp;repquote=332889&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 332889)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_33"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid332898" summary="pid332898" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6920" target="_blank" id="userinfo332898" class="dropmenu" onmouseover="showMenu(this.id)">淮月</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">翻墙痴迷者 雄性文青  @qhgy</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6920">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6920&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_34" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum332898" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=28421&page=1#pid332898', '话题链接已经复制到剪贴板')">35楼</strong>
													<em onclick="$('postmessage_332898').className='t_bigfont'">大</em>							<em onclick="$('postmessage_332898').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_332898').className='t_smallfont'">小</em>												发表于 2009-11-18 23:07&nbsp;																					<a href="viewthread.php?tid=28421&amp;page=1&amp;authorid=6920" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_34"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_34"></div><div id="ad_thread4_34"></div>
						
						
																											<div id="postmessage_332898" class="t_msgfont"><a href="http://www.mwzaf.com/" target="_blank">http://www.mwzaf.com/</a> 这个不错</div>

							
							
							
							
															<div id="post_rate_div_332898"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo332898_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://twitter.com/qhgy" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=6920" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=28421&amp;repquote=332898&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 332898)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_34"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid332956" summary="pid332956" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=4021" target="_blank" id="userinfo332956" class="dropmenu" onmouseover="showMenu(this.id)">alexander982</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">肆零贰壹号组员//道貌岸然的知心大哥//伪爱情专家//傻*英雄主义者//一个烤鸭的传说</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=4021">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=4021&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_35" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum332956" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=28421&page=1#pid332956', '话题链接已经复制到剪贴板')">36楼</strong>
													<em onclick="$('postmessage_332956').className='t_bigfont'">大</em>							<em onclick="$('postmessage_332956').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_332956').className='t_smallfont'">小</em>												发表于 2009-11-19 00:02&nbsp;																					<a href="viewthread.php?tid=28421&amp;page=1&amp;authorid=4021" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_35"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_35"></div><div id="ad_thread4_35"></div>
													<h2>求助</h2>
						
						
																											<div id="postmessage_332956" class="t_msgfont">在<a href="http://www.mwzaf.com/" target="_blank">http://www.mwzaf.com/</a>申请了空间，但用myentunnel连接时得到如下错误信息<br />
[23:59:20 11/18] plink.exe: &quot;Too many authentication failures for 我的用户名&quot;<br />
[23:59:20 11/18] 已断开<br />
[23:59:20 11/18] 严重错误: SSH 链接意外终止<br />
<br />
解决了，我自己设置的问题，<br />
mwzaf很爽，除了看youtube卡外，目前测试各项近乎完美<br />
<br />
11/23 ： youtube解决，用fierfox浏览器搭配AutoProxy观看短暂缓冲后顺畅观看。<br />
<br />
[<i> 本帖最后由 alexander982 于 2009-11-23 12:19 编辑 </i>]</div>

							
							
							
							
															<div id="post_rate_div_332956"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo332956_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=4021" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=28421&amp;repquote=332956&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 332956)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_35"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid333053" summary="pid333053" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=9665" target="_blank" id="userinfo333053" class="dropmenu" onmouseover="showMenu(this.id)">mickeywaley</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=9665">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=9665&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_36" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum333053" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=28421&page=1#pid333053', '话题链接已经复制到剪贴板')">37楼</strong>
													<em onclick="$('postmessage_333053').className='t_bigfont'">大</em>							<em onclick="$('postmessage_333053').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_333053').className='t_smallfont'">小</em>												发表于 2009-11-19 07:46&nbsp;																					<a href="viewthread.php?tid=28421&amp;page=1&amp;authorid=9665" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_36"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_36"></div><div id="ad_thread4_36"></div>
						
						
																											<div id="postmessage_333053" class="t_msgfont">不错。WINE的MyEntunnel能链接，直接LINUX下就是不行，真郁闷<br />
<br />
bind: Address already in use<br />
Shell access is not enabled on your accou<br />
If you need shell access please contact s<br />
Connection to ********** closed.<br />
<br />
<a href="http://www.hostingforfree.us" target="_blank">www.hostingforfree.us</a> 的连接上了 无法访问网页<br />
<br />
[<i> 本帖最后由 mickeywaley 于 2009-11-19 07:48 编辑 </i>]</div>

							
							
							
							
															<div id="post_rate_div_333053"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo333053_menu" style="display: none;">
										<div class="imicons">
													<a target='_blank' href='http://settings.messenger.live.com/Conversation/IMMe.aspx?invitee=mickeywaley@gmail.com&mkt=zh-cn'><img style='border-style: none;' src='http://messenger.services.live.com/users/mickeywaley@gmail.com/presenceimage?mkt=zh-cn' width='16' height='16' /></a>
																																			</div>
										<dl></dl>
										<p><a href="space.php?uid=9665" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=28421&amp;repquote=333053&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 333053)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_36"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid333094" summary="pid333094" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6920" target="_blank" id="userinfo333094" class="dropmenu" onmouseover="showMenu(this.id)">淮月</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">翻墙痴迷者 雄性文青  @qhgy</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6920">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6920&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_37" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum333094" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=28421&page=1#pid333094', '话题链接已经复制到剪贴板')">38楼</strong>
													<em onclick="$('postmessage_333094').className='t_bigfont'">大</em>							<em onclick="$('postmessage_333094').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_333094').className='t_smallfont'">小</em>												发表于 2009-11-19 08:54&nbsp;																					<a href="viewthread.php?tid=28421&amp;page=1&amp;authorid=6920" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_37"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_37"></div><div id="ad_thread4_37"></div>
						
						
																											<div id="postmessage_333094" class="t_msgfont">看youtube..... 真奢侈啊</div>

							
							
							
							
															<div id="post_rate_div_333094"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo333094_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://twitter.com/qhgy" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=6920" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=28421&amp;repquote=333094&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 333094)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_37"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid333113" summary="pid333113" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1960" target="_blank" id="userinfo333113" class="dropmenu" onmouseover="showMenu(this.id)">库存袈裟</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">@bruceku 想象力比知识更重要。</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1960">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1960&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_38" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum333113" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=28421&page=1#pid333113', '话题链接已经复制到剪贴板')">39楼</strong>
													<em onclick="$('postmessage_333113').className='t_bigfont'">大</em>							<em onclick="$('postmessage_333113').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_333113').className='t_smallfont'">小</em>												发表于 2009-11-19 09:19&nbsp;																					<a href="viewthread.php?tid=28421&amp;page=1&amp;authorid=1960" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_38"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_38"></div><div id="ad_thread4_38"></div>
													<h2>再发一个（已测试SSH可用）</h2>
						
						
																											<div id="postmessage_333113" class="t_msgfont">&#187; cPanel<br />
&#187; 15GB Storage Space<br />
<a href="http://host-blaster.com/" target="_blank">http://host-blaster.com/</a></div>

							
							
							
							
															<div id="post_rate_div_333113"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo333113_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1960" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=28421&amp;repquote=333113&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 333113)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_38"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid333126" summary="pid333126" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6920" target="_blank" id="userinfo333126" class="dropmenu" onmouseover="showMenu(this.id)">淮月</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">翻墙痴迷者 雄性文青  @qhgy</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6920">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6920&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_39" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum333126" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=28421&page=1#pid333126', '话题链接已经复制到剪贴板')">40楼</strong>
													<em onclick="$('postmessage_333126').className='t_bigfont'">大</em>							<em onclick="$('postmessage_333126').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_333126').className='t_smallfont'">小</em>												发表于 2009-11-19 09:29&nbsp;																					<a href="viewthread.php?tid=28421&amp;page=1&amp;authorid=6920" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_39"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_39"></div><div id="ad_thread4_39"></div>
						
						
																											<div id="postmessage_333126" class="t_msgfont">这个空间真大<br />
<br />
袈裟兄 支持ssl的空间是不是都能开启ssl加密？如何开启？</div>

							
							
							
							
															<div id="post_rate_div_333126"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo333126_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://twitter.com/qhgy" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=6920" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=28421&amp;repquote=333126&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 333126)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_39"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid333135" summary="pid333135" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1960" target="_blank" id="userinfo333135" class="dropmenu" onmouseover="showMenu(this.id)">库存袈裟</a></cite>
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
						<strong title="复制话题链接到剪贴板" id="postnum333135" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=28421&page=1#pid333135', '话题链接已经复制到剪贴板')">41楼</strong>
													<em onclick="$('postmessage_333135').className='t_bigfont'">大</em>							<em onclick="$('postmessage_333135').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_333135').className='t_smallfont'">小</em>												发表于 2009-11-19 09:41&nbsp;																					<a href="viewthread.php?tid=28421&amp;page=1&amp;authorid=1960" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_40"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_40"></div><div id="ad_thread4_40"></div>
													<h2>回复 40楼 淮月 的话题</h2>
						
						
																											<div id="postmessage_333135" class="t_msgfont">SSL证书需要购买生成，Godaddy现在有特价SSL证书13美元，也可以去 <a href="https://www.startssl.com/" target="_blank">https://www.startssl.com/</a> 申请免费SSL证书。<br />
另外安装独立证书需要独立IP，免费主机几乎不可能提供独立IP。<br />
<br />
一般免费空间商是不提供共享SSL的，需要之前查看主机规格；确定有SSL支持后，查看或询问管理员共享SSL访问路径；<br />
常见的方式一般是：https://你的 域名和https://ssl.所属服务器/~你的ID</div>

							
							
							
							
															<div id="post_rate_div_333135"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo333135_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1960" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=28421&amp;repquote=333135&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 333135)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_40"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid333140" summary="pid333140" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2213" target="_blank" id="userinfo333140" class="dropmenu" onmouseover="showMenu(this.id)">核子力量</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">Twitter.com/hzpower</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2213">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2213&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_41" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum333140" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=28421&page=1#pid333140', '话题链接已经复制到剪贴板')">42楼</strong>
													<em onclick="$('postmessage_333140').className='t_bigfont'">大</em>							<em onclick="$('postmessage_333140').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_333140').className='t_smallfont'">小</em>												发表于 2009-11-19 09:43&nbsp;																					<a href="viewthread.php?tid=28421&amp;page=1&amp;authorid=2213" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_41"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_41"></div><div id="ad_thread4_41"></div>
													<h2>回复 39楼 库存袈裟 的话题</h2>
						
						
																											<div id="postmessage_333140" class="t_msgfont">这个申请的速度很快，多谢</div>

							
							
							
							
															<div id="post_rate_div_333140"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo333140_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://twitter.com/hzpower" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=2213" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=28421&amp;repquote=333140&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 333140)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_41"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid333158" summary="pid333158" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1960" target="_blank" id="userinfo333158" class="dropmenu" onmouseover="showMenu(this.id)">库存袈裟</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">@bruceku 想象力比知识更重要。</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1960">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1960&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_42" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum333158" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=28421&page=1#pid333158', '话题链接已经复制到剪贴板')">43楼</strong>
													<em onclick="$('postmessage_333158').className='t_bigfont'">大</em>							<em onclick="$('postmessage_333158').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_333158').className='t_smallfont'">小</em>												发表于 2009-11-19 09:57&nbsp;																					<a href="viewthread.php?tid=28421&amp;page=1&amp;authorid=1960" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_42"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_42"></div><div id="ad_thread4_42"></div>
						
						
																											<div id="postmessage_333158" class="t_msgfont"><a href="http://www.parahosting.net/free" target="_blank">http://www.parahosting.net/free</a><br />
<br />
经测试SSH可用<br />
空间：150 MB-300MB<br />
流量： &nbsp; &nbsp; &nbsp; &nbsp; 3 GB-5 GB<br />
<br />
有人工审核</div>

							
							
							
							
															<div id="post_rate_div_333158"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo333158_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1960" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=28421&amp;repquote=333158&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 333158)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_42"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid333195" summary="pid333195" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8798" target="_blank" id="userinfo333195" class="dropmenu" onmouseover="showMenu(this.id)">e_pu</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8798">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8798&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_43" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum333195" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=28421&page=1#pid333195', '话题链接已经复制到剪贴板')">44楼</strong>
													<em onclick="$('postmessage_333195').className='t_bigfont'">大</em>							<em onclick="$('postmessage_333195').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_333195').className='t_smallfont'">小</em>												发表于 2009-11-19 10:23&nbsp;																					<a href="viewthread.php?tid=28421&amp;page=1&amp;authorid=8798" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_43"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_43"></div><div id="ad_thread4_43"></div>
						
						
																											<div id="postmessage_333195" class="t_msgfont">收藏先</div>

							
							
							
							
															<div id="post_rate_div_333195"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo333195_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=8798" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=28421&amp;repquote=333195&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 333195)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_43"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid333217" summary="pid333217" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6920" target="_blank" id="userinfo333217" class="dropmenu" onmouseover="showMenu(this.id)">淮月</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">翻墙痴迷者 雄性文青  @qhgy</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6920">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6920&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_44" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum333217" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=28421&page=1#pid333217', '话题链接已经复制到剪贴板')">45楼</strong>
													<em onclick="$('postmessage_333217').className='t_bigfont'">大</em>							<em onclick="$('postmessage_333217').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_333217').className='t_smallfont'">小</em>												发表于 2009-11-19 10:44&nbsp;																					<a href="viewthread.php?tid=28421&amp;page=1&amp;authorid=6920" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_44"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_44"></div><div id="ad_thread4_44"></div>
						
						
																											<div id="postmessage_333217" class="t_msgfont">这种方式一劳永逸</div>

							
							
							
							
															<div id="post_rate_div_333217"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo333217_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://twitter.com/qhgy" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=6920" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=28421&amp;repquote=333217&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 333217)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_44"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid333222" summary="pid333222" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8798" target="_blank" id="userinfo333222" class="dropmenu" onmouseover="showMenu(this.id)">e_pu</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8798">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8798&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_45" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum333222" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=28421&page=1#pid333222', '话题链接已经复制到剪贴板')">46楼</strong>
													<em onclick="$('postmessage_333222').className='t_bigfont'">大</em>							<em onclick="$('postmessage_333222').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_333222').className='t_smallfont'">小</em>												发表于 2009-11-19 10:47&nbsp;																					<a href="viewthread.php?tid=28421&amp;page=1&amp;authorid=8798" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_45"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_45"></div><div id="ad_thread4_45"></div>
						
						
																											<div id="postmessage_333222" class="t_msgfont">英语太烂，这个网址打开了<a href="http://www.openwebster.com/plans" target="_blank">http://www.openwebster.com/plans</a>，<br />
可是不知道如何注册，哪位师傅教教，贴图出来最好。<br />
跪谢</div>

							
							
							
							
															<div id="post_rate_div_333222"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo333222_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=8798" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=28421&amp;repquote=333222&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 333222)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_45"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid333347" summary="pid333347" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6920" target="_blank" id="userinfo333347" class="dropmenu" onmouseover="showMenu(this.id)">淮月</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">翻墙痴迷者 雄性文青  @qhgy</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6920">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6920&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_46" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum333347" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=28421&page=1#pid333347', '话题链接已经复制到剪贴板')">47楼</strong>
													<em onclick="$('postmessage_333347').className='t_bigfont'">大</em>							<em onclick="$('postmessage_333347').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_333347').className='t_smallfont'">小</em>												发表于 2009-11-19 12:18&nbsp;																					<a href="viewthread.php?tid=28421&amp;page=1&amp;authorid=6920" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_46"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_46"></div><div id="ad_thread4_46"></div>
						
						
																											<div id="postmessage_333347" class="t_msgfont"><a href="http://crm.ilabors.com/cart.php?a=add&amp;pid=1" target="_blank">http://crm.ilabors.com/cart.php?a=add&amp;pid=1</a> 打开这儿 可选中文 该网页中下部Language: 选Chinese</div>

							
							
							
							
															<div id="post_rate_div_333347"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo333347_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://twitter.com/qhgy" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=6920" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=28421&amp;repquote=333347&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 333347)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_46"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid333350" summary="pid333350" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2213" target="_blank" id="userinfo333350" class="dropmenu" onmouseover="showMenu(this.id)">核子力量</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">Twitter.com/hzpower</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2213">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2213&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_47" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum333350" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=28421&page=1#pid333350', '话题链接已经复制到剪贴板')">48楼</strong>
													<em onclick="$('postmessage_333350').className='t_bigfont'">大</em>							<em onclick="$('postmessage_333350').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_333350').className='t_smallfont'">小</em>												发表于 2009-11-19 12:21&nbsp;																					<a href="viewthread.php?tid=28421&amp;page=1&amp;authorid=2213" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_47"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_47"></div><div id="ad_thread4_47"></div>
						
						
																											<div id="postmessage_333350" class="t_msgfont">请教一下，如果注册了空间之后只是用ssh不干别的，服务商会不会封停账号？用不用往上面传几个网页</div>

							
							
							
							
															<div id="post_rate_div_333350"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo333350_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://twitter.com/hzpower" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=2213" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=28421&amp;repquote=333350&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 333350)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_47"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid333415" summary="pid333415" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1960" target="_blank" id="userinfo333415" class="dropmenu" onmouseover="showMenu(this.id)">库存袈裟</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">@bruceku 想象力比知识更重要。</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1960">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1960&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_48" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum333415" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=28421&page=1#pid333415', '话题链接已经复制到剪贴板')">49楼</strong>
													<em onclick="$('postmessage_333415').className='t_bigfont'">大</em>							<em onclick="$('postmessage_333415').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_333415').className='t_smallfont'">小</em>												发表于 2009-11-19 13:03&nbsp;																					<a href="viewthread.php?tid=28421&amp;page=1&amp;authorid=1960" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_48"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_48"></div><div id="ad_thread4_48"></div>
													<h2>回复 48楼 核子力量 的话题</h2>
						
						
																											<div id="postmessage_333415" class="t_msgfont">会，放个discuz论坛或者wordpress博客吧</div>

							
							
							
							
															<div id="post_rate_div_333415"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo333415_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1960" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=28421&amp;repquote=333415&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 333415)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_48"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid333417" summary="pid333417" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=4021" target="_blank" id="userinfo333417" class="dropmenu" onmouseover="showMenu(this.id)">alexander982</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">肆零贰壹号组员//道貌岸然的知心大哥//伪爱情专家//傻*英雄主义者//一个烤鸭的传说</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=4021">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=4021&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_49" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum333417" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=28421&page=1#pid333417', '话题链接已经复制到剪贴板')">50楼</strong>
													<em onclick="$('postmessage_333417').className='t_bigfont'">大</em>							<em onclick="$('postmessage_333417').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_333417').className='t_smallfont'">小</em>												发表于 2009-11-19 13:04&nbsp;																					<a href="viewthread.php?tid=28421&amp;page=1&amp;authorid=4021" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_49"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_49"></div><div id="ad_thread4_49"></div>
													<h2>回复 48楼 核子力量 的话题</h2>
						
						
																											<div id="postmessage_333417" class="t_msgfont">可能性极大，所以还是上传点东西吧，我就搞了个博客。</div>

							
							
							
							
															<div id="post_rate_div_333417"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo333417_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=4021" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=28421&amp;repquote=333417&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 333417)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_49"></div>				</div>
			</td>
		</tr>
		</table>
		</div>
</form>





<div class="pages_btns">
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=28421&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=28421&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
	<div class="pages"><em>&nbsp;83&nbsp;</em><strong>1</strong><a href="viewthread.php?tid=28421&amp;extra=&amp;page=2">2</a><a href="viewthread.php?tid=28421&amp;extra=&amp;page=2" class="next">&rsaquo;&rsaquo;</a></div>			<span class="postbtn" id="newspecialtmp" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=28421&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

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

	<form method="post" id="postform" action="post.php?action=reply&amp;fid=26&amp;tid=28421&amp;extra=&amp;replysubmit=yes" onSubmit="return validate(this)">
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
var maxpage = 2;
if(maxpage > 1) {
	document.onkeyup = function(e){
		e = e ? e : window.event;
		var tagname = is_ie ? e.srcElement.tagName : e.target.tagName;
		if(tagname == 'INPUT' || tagname == 'TEXTAREA') return;
		actualCode = e.keyCode ? e.keyCode : e.charCode;
				if(actualCode == 39) {
			window.location = 'viewthread.php?tid=28421&page=2';
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
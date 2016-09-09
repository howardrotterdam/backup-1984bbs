<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<title>让GAppProxy能够登录 能够看youtube的简单方法 [更新地址] - 国家局域网研究所 -  1984bbs.com </title>
<meta name="keywords" content="" />
<meta name="MSSmartTagsPreventParsing" content="True" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<link rel="archives" title="1984bbs.com" href="https://1984bbs.com/archiver/" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_viewthread.css" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_common.css" />
<script type="text/javascript">
	var discuz_uid = 13019;var IMGDIR = 'images/default';var attackevasive = '0';var gid = 0;var STYLEID = '1';
	gid = parseInt('3');var fid = parseInt('26');var tid = parseInt('25674');
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
			<p><a href="index.php" id="forumlist" onmouseover="showMenu(this.id)" class="dropmenu">1984bbs.com</a> &raquo; <a href="forumdisplay.php?fid=26">国家局域网研究所</a> &raquo; 让GAppProxy能够登录 能够看youtube的简单方法 [更新地址]</p>
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
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=25674&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=25674&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
				<span class="postbtn" id="newspecial" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=25674&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

	<ul class="popupmenu_popup newspecialmenu" id="newspecial_menu" style="display: none">
		<li><a href="post.php?action=newthread&amp;fid=26&amp;extra=">发新话题</a></li>
		<li class="poll"><a href="post.php?action=newthread&amp;fid=26&amp;extra=&amp;special=1">发布投票</a></li>													</ul>

<form method="post" name="modactions">
	<input type="hidden" name="formhash" value="823c9fa2" />
	<div class="mainbox viewthread">
		<span class="headactions">
					<a href="my.php?item=favorites&amp;tid=25674" id="ajax_favorite" onclick="ajaxmenu(event, this.id, 3000, 0)">收藏</a>
			<a href="my.php?item=subscriptions&amp;subadd=25674" id="ajax_subscription" onclick="ajaxmenu(event, this.id, 3000, null, 0)">订阅</a>
			<a href="misc.php?action=emailfriend&amp;tid=25674" id="emailfriend" onclick="ajaxmenu(event, this.id, 9000000, null, 0)">推荐</a>
				<a href="viewthread.php?action=printable&amp;tid=25674" target="_blank" class="notabs">打印</a>
				</span>
		<h1>让GAppProxy能够登录 能够看youtube的简单方法 [更新地址]		</h1>
				<ins>
						<a href="misc.php?action=viewthreadmod&amp;tid=25674" title="主题操作记录" target="_blank">本主题由 库存袈裟 于 2009-12-22 16:01 分类</a>								</ins>
							<table id="pid290891" summary="pid290891" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7001" target="_blank" id="userinfo290891" class="dropmenu" onmouseover="showMenu(this.id)">fans</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">木有头衔</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7001">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7001&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_0" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum290891" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=25674&page=1#pid290891', '话题链接已经复制到剪贴板')">1楼</strong>
													<em onclick="$('postmessage_290891').className='t_bigfont'">大</em>							<em onclick="$('postmessage_290891').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_290891').className='t_smallfont'">小</em>												发表于 2009-10-20 01:26&nbsp;																					<a href="viewthread.php?tid=25674&amp;page=1&amp;authorid=7001" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_0"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_0"></div><div id="ad_thread4_0"></div>
													<h2>让GAppProxy能够登录 能够看youtube的简单方法 [更新地址]</h2>
						
						
																											<div id="postmessage_290891" class="t_msgfont">其实GAppProxy作者早就更新了代码使之能够登录，能够看youtube了<br />
但是不知道居于何种原因一直没有放出用最新proxy.py编译的gui.exe和proxy.exe<br />
于是在某个夜黑风高的夜晚，我终于下定决心自己折腾编译出来<br />
不过杯具的是，我编译出来第二天就有人放出他编译的了···害我折腾好几个小时装了4～5安装程序···<br />
话不多说，其实我自己也没什么好写的，无非是把别人的帖子汇集一下，打个包而已···<br />
好吧，我承认我只是个打包党···<br />
<br />
有问题可以提，虽然我不一定能给出满意的答案···<br />
注：<br />
以下下载链接中是：一个保存为mht网页的教程和里面提到的所有需要用到的文件和软件我都一起打包了<br />
<br />
<u>fetchserver文件夹已经放到了SDUpload文件夹里面了，省得你们到时候上传的时候出错了，要改app.yaml的时候的就到那里找</u><br />
<br />
如果已经有自己的GAE的同学下下来更新fetch.py就行，也就是按照之前建立的说话一样上传一次就行<br />
目前就想到这么多，明天再来编辑<div class="quote"><h5>引用:</h5><blockquote> <br />
如果是你用FF浏览器，有可能浏览器会有一个询问“证书不安全”，切记不要点选‘取消’而是要点右上方的X关闭，否则明明已经连接但火狐浏览器只给你看白板。这里是否可以手动修改尚在钻研中。<br />
&nbsp; &nbsp;&nbsp; &nbsp;在gappproxy界面里输入你代理服务器的网址是 &quot;你的名字.appspot.com/fetch.py&quot; 而不是&nbsp;&nbsp;&quot;你的名字.appspot.com/fetch.pyoxy &quot;我特别想知道是否有人和我一样犯了这样白痴的错误？<br />
切记：<br />
应该是 http://*.appspot.com/fetch.py&nbsp;&nbsp;<u>是http，不要填https</u>，填了https反而不能上</blockquote></div>下载链接：<br />
gappproxy.zip 2010-02-08更新<br />
<a href="http://u.115.com/file/f2326519da" target="_blank">http://u.115.com/file/f2326519da</a><br />
<br />
回复#21&nbsp;&nbsp;#22&nbsp;&nbsp;#24&nbsp;&nbsp;#25楼：<br />
下载了我提供的那个还需要更新服务器端的<br />
就是重新上传一次<br />
我在压缩包里面放的是比较新的（因为后来又更新了）能看youtube的fetchserver文件夹<br />
按照压缩包里面的教程上传一次就行了<div class="quote"><h5>引用:</h5><blockquote>Error 409: --- begin server output ---<br />
这是什么缘故？</blockquote></div>这个我也不知道了，没碰到过，可以搜索一下<br />
<br />
PS:前几天没怎么上网，才上84来晃晃<br />
<br />
[<i> 本帖最后由 fans 于 2010-2-8 21:48 编辑 </i>]</div>

							
							
							
							
															<div id="post_rate_div_290891"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo290891_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=7001" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=25674&amp;repquote=290891&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 290891)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_0"></div>				</div>
			</td>
		</tr>
		</table>
		</div><div class="ad_column" id="ad_interthread"><a href="/viewthread.php?tid=54699" target="_blank" style="color:red;">1984bbs是一个非营利项目，它需要您的捐助！</font></a>		</div>
	<div class="mainbox viewthread">
			<table id="pid290892" summary="pid290892" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7001" target="_blank" id="userinfo290892" class="dropmenu" onmouseover="showMenu(this.id)">fans</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">木有头衔</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7001">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7001&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_1" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum290892" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=25674&page=1#pid290892', '话题链接已经复制到剪贴板')">2楼</strong>
													<em onclick="$('postmessage_290892').className='t_bigfont'">大</em>							<em onclick="$('postmessage_290892').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_290892').className='t_smallfont'">小</em>												发表于 2009-10-20 01:26&nbsp;																					<a href="viewthread.php?tid=25674&amp;page=1&amp;authorid=7001" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_1"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_1"></div><div id="ad_thread4_1"></div>
						
						
																											<div id="postmessage_290892" class="t_msgfont">江湖规矩，自沙有理<br />
·····················<br />
自检程序：<br />
按照步骤搞定后，看看你的GAE地址<br />
http://×××.appspot.com/fetch.py<br />
是不是显示成 <br />
<br />
GAppProxy/<u>1.2.0 </u>beta 已经在工作了<br />
<br />
那么服务器端就没问题了<br />
自己电脑端use fetchserver填上以后要save然后把程序重启一次应该就可以了<br />
再就是设置代理的问题了，不多说了<br />
<br />
[<i> 本帖最后由 fans 于 2009-10-21 15:57 编辑 </i>]</div>

							
							
							
							
															<div id="post_rate_div_290892"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo290892_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=7001" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=25674&amp;repquote=290892&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 290892)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_1"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid290933" summary="pid290933" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6349" target="_blank" id="userinfo290933" class="dropmenu" onmouseover="showMenu(this.id)">水产先锋</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">形势一骗大好</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6349">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6349&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_2" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum290933" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=25674&page=1#pid290933', '话题链接已经复制到剪贴板')">3楼</strong>
													<em onclick="$('postmessage_290933').className='t_bigfont'">大</em>							<em onclick="$('postmessage_290933').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_290933').className='t_smallfont'">小</em>												发表于 2009-10-20 02:00&nbsp;																					<a href="viewthread.php?tid=25674&amp;page=1&amp;authorid=6349" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_2"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_2"></div><div id="ad_thread4_2"></div>
						
						
																											<div id="postmessage_290933" class="t_msgfont">code.google.com被和谐了</div>

							
							
							
							
															<div id="post_rate_div_290933"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo290933_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=6349" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=25674&amp;repquote=290933&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 290933)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_2"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid290967" summary="pid290967" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7001" target="_blank" id="userinfo290967" class="dropmenu" onmouseover="showMenu(this.id)">fans</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">木有头衔</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7001">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7001&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_3" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum290967" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=25674&page=1#pid290967', '话题链接已经复制到剪贴板')">4楼</strong>
													<em onclick="$('postmessage_290967').className='t_bigfont'">大</em>							<em onclick="$('postmessage_290967').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_290967').className='t_smallfont'">小</em>												发表于 2009-10-20 02:23&nbsp;																					<a href="viewthread.php?tid=25674&amp;page=1&amp;authorid=7001" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_3"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_3"></div><div id="ad_thread4_3"></div>
						
						
																											<div id="postmessage_290967" class="t_msgfont">河蟹了翻过去嘛<br />
就是考虑到很多教程啊啥子的都河蟹了才一起打包的咯<br />
不过如果你没有任何翻墙的方法也没有建立gae那我就没办法了···<br />
<br />
[<i> 本帖最后由 fans 于 2009-10-20 02:30 编辑 </i>]</div>

							
							
							
							
															<div id="post_rate_div_290967"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo290967_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=7001" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=25674&amp;repquote=290967&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 290967)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_3"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid291041" summary="pid291041" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6349" target="_blank" id="userinfo291041" class="dropmenu" onmouseover="showMenu(this.id)">水产先锋</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">形势一骗大好</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6349">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6349&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_4" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum291041" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=25674&page=1#pid291041', '话题链接已经复制到剪贴板')">5楼</strong>
													<em onclick="$('postmessage_291041').className='t_bigfont'">大</em>							<em onclick="$('postmessage_291041').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_291041').className='t_smallfont'">小</em>												发表于 2009-10-20 03:20&nbsp;																					<a href="viewthread.php?tid=25674&amp;page=1&amp;authorid=6349" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_4"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_4"></div><div id="ad_thread4_4"></div>
						
						
																											<div id="postmessage_291041" class="t_msgfont">上传之后，https://*.appspot.com/fetch.py显示GAppProxy/1.2.0 beta 已经在工作了<br />
gui.exe也设置了，ie设好127.0.0.1：8000后，任何网站都打不开……</div>

							
							
							
							
															<div id="post_rate_div_291041"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo291041_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=6349" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=25674&amp;repquote=291041&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 291041)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_4"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid291222" summary="pid291222" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8066" target="_blank" id="userinfo291222" class="dropmenu" onmouseover="showMenu(this.id)">不靠谱</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8066">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8066&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_5" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum291222" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=25674&page=1#pid291222', '话题链接已经复制到剪贴板')">6楼</strong>
													<em onclick="$('postmessage_291222').className='t_bigfont'">大</em>							<em onclick="$('postmessage_291222').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_291222').className='t_smallfont'">小</em>												发表于 2009-10-20 09:35&nbsp;																					<a href="viewthread.php?tid=25674&amp;page=1&amp;authorid=8066" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_5"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_5"></div><div id="ad_thread4_5"></div>
						
						
																											<div id="postmessage_291222" class="t_msgfont">已成功，编辑掉。<br />
但youtube的速度实在让人无法恭维……<br />
这版本最大的好处是解决了登录问题，多谢楼主<br />
<br />
[<i> 本帖最后由 不靠谱 于 2009-10-20 10:27 编辑 </i>]</div>

							
							
							
							
															<div id="post_rate_div_291222"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo291222_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=8066" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=25674&amp;repquote=291222&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 291222)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_5"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid291882" summary="pid291882" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=4277" target="_blank" id="userinfo291882" class="dropmenu" onmouseover="showMenu(this.id)">g512984124</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">不明真相围观群众</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=4277">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=4277&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_6" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum291882" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=25674&page=1#pid291882', '话题链接已经复制到剪贴板')">7楼</strong>
													<em onclick="$('postmessage_291882').className='t_bigfont'">大</em>							<em onclick="$('postmessage_291882').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_291882').className='t_smallfont'">小</em>												发表于 2009-10-20 17:33&nbsp;																					<a href="viewthread.php?tid=25674&amp;page=1&amp;authorid=4277" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_6"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_6"></div><div id="ad_thread4_6"></div>
						
						
																											<div id="postmessage_291882" class="t_msgfont">打不开任何网页。。。</div>

							
							
							
							
															<div id="post_rate_div_291882"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo291882_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=4277" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=25674&amp;repquote=291882&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 291882)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_6"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid291915" summary="pid291915" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=4021" target="_blank" id="userinfo291915" class="dropmenu" onmouseover="showMenu(this.id)">alexander982</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">肆零贰壹号组员//道貌岸然的知心大哥//伪爱情专家//傻*英雄主义者//一个烤鸭的传说</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=4021">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=4021&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_7" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum291915" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=25674&page=1#pid291915', '话题链接已经复制到剪贴板')">8楼</strong>
													<em onclick="$('postmessage_291915').className='t_bigfont'">大</em>							<em onclick="$('postmessage_291915').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_291915').className='t_smallfont'">小</em>												发表于 2009-10-20 18:01&nbsp;																					<a href="viewthread.php?tid=25674&amp;page=1&amp;authorid=4021" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_7"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_7"></div><div id="ad_thread4_7"></div>
						
						
																											<div id="postmessage_291915" class="t_msgfont">历经十余小时的奋战经历，提示几个比较容易忽略的细节。<br />
&nbsp; &nbsp;&nbsp; &nbsp;按照楼主提供的第三方上传工具方式，把fetchserver包解压为一个文件夹，把整个文件拷贝到SDUpload文件夹下。cmd的时候别忘了命令和文件夹的名称要统一。<br />
&nbsp; &nbsp;&nbsp; &nbsp;如果是你用FF浏览器，有可能浏览器会有一个询问“证书不安全”，切记不要点选‘取消’而是要点右上方的X关闭，否则明明已经连接但火狐浏览器只给你看白板。这里是否可以手动修改尚在钻研中。<br />
&nbsp; &nbsp;&nbsp; &nbsp;在gappproxy界面里输入你代理服务器的网址是 &quot;你的名字.appspot.com/fetch.py&quot; 而不是&nbsp;&nbsp;&quot;你的名字.appspot.com/fetch.pyoxy &quot;我特别想知道是否有人和我一样犯了这样白痴的错误？╮(╯▽╰)╭<br />
<br />
[<i> 本帖最后由 alexander982 于 2009-10-20 18:05 编辑 </i>]</div>

							
							
							
							
															<div id="post_rate_div_291915"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo291915_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=4021" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=25674&amp;repquote=291915&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 291915)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_7"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid291970" summary="pid291970" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7001" target="_blank" id="userinfo291970" class="dropmenu" onmouseover="showMenu(this.id)">fans</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">木有头衔</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7001">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7001&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_8" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum291970" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=25674&page=1#pid291970', '话题链接已经复制到剪贴板')">9楼</strong>
													<em onclick="$('postmessage_291970').className='t_bigfont'">大</em>							<em onclick="$('postmessage_291970').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_291970').className='t_smallfont'">小</em>												发表于 2009-10-20 18:52&nbsp;																					<a href="viewthread.php?tid=25674&amp;page=1&amp;authorid=7001" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_8"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_8"></div><div id="ad_thread4_8"></div>
						
						
																											<div id="postmessage_291970" class="t_msgfont">@alexander982 (8楼)<br />
我已经把最新的fetchserver放到了sdupload文件夹里面了哦<br />
后面两个我给引用到主楼<br />
<br />
@水产先锋 （5楼） &amp;&nbsp;&nbsp;@g512984124 （7楼）<br />
如果其它地方没用问题，那么切记：<br />
应该是 http://*.appspot.com/fetch.py&nbsp;&nbsp;是http，不要填https，填了https反而不能上<br />
<br />
@不靠谱 （6楼）<br />
youtube速度很快啊，我2m铁通能稳定在170k左右，开始了基本就没卡过</div>

							
							
							
							
															<div id="post_rate_div_291970"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo291970_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=7001" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=25674&amp;repquote=291970&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 291970)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_8"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid292236" summary="pid292236" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=4408" target="_blank" id="userinfo292236" class="dropmenu" onmouseover="showMenu(this.id)">迷路的田鼠</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=4408">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=4408&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_9" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum292236" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=25674&page=1#pid292236', '话题链接已经复制到剪贴板')">10楼</strong>
													<em onclick="$('postmessage_292236').className='t_bigfont'">大</em>							<em onclick="$('postmessage_292236').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_292236').className='t_smallfont'">小</em>												发表于 2009-10-20 21:59&nbsp;																					<a href="viewthread.php?tid=25674&amp;page=1&amp;authorid=4408" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_9"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_9"></div><div id="ad_thread4_9"></div>
						
						
																											<div id="postmessage_292236" class="t_msgfont">照着做了 <br />
但网页仍然无法打开<br />
<br />
[<i> 本帖最后由 迷路的田鼠 于 2009-10-20 22:14 编辑 </i>]</div>

							
							
							
							
															<div id="post_rate_div_292236"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo292236_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=4408" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=25674&amp;repquote=292236&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 292236)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_9"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid292280" summary="pid292280" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6920" target="_blank" id="userinfo292280" class="dropmenu" onmouseover="showMenu(this.id)">淮月</a></cite>
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
						<strong title="复制话题链接到剪贴板" id="postnum292280" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=25674&page=1#pid292280', '话题链接已经复制到剪贴板')">11楼</strong>
													<em onclick="$('postmessage_292280').className='t_bigfont'">大</em>							<em onclick="$('postmessage_292280').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_292280').className='t_smallfont'">小</em>												发表于 2009-10-20 22:19&nbsp;																					<a href="viewthread.php?tid=25674&amp;page=1&amp;authorid=6920" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_10"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_10"></div><div id="ad_thread4_10"></div>
						
						
																											<div id="postmessage_292280" class="t_msgfont">在gap网上论坛看到过 下载了 多谢</div>

							
							
							
							
															<div id="post_rate_div_292280"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo292280_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://twitter.com/qhgy" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=6920" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=25674&amp;repquote=292280&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 292280)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_10"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid292308" summary="pid292308" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6920" target="_blank" id="userinfo292308" class="dropmenu" onmouseover="showMenu(this.id)">淮月</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">翻墙痴迷者 雄性文青  @qhgy</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6920">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6920&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_11" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum292308" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=25674&page=1#pid292308', '话题链接已经复制到剪贴板')">12楼</strong>
													<em onclick="$('postmessage_292308').className='t_bigfont'">大</em>							<em onclick="$('postmessage_292308').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_292308').className='t_smallfont'">小</em>												发表于 2009-10-20 22:29&nbsp;																					<a href="viewthread.php?tid=25674&amp;page=1&amp;authorid=6920" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_11"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_11"></div><div id="ad_thread4_11"></div>
						
						
																											<div id="postmessage_292308" class="t_msgfont">刚试了下 gap速度很快</div>

							
							
							
							
															<div id="post_rate_div_292308"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo292308_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://twitter.com/qhgy" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=6920" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=25674&amp;repquote=292308&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 292308)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_11"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid293254" summary="pid293254" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6961" target="_blank" id="userinfo293254" class="dropmenu" onmouseover="showMenu(this.id)">sin</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">群众</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6961">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6961&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_12" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum293254" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=25674&page=1#pid293254', '话题链接已经复制到剪贴板')">13楼</strong>
													<em onclick="$('postmessage_293254').className='t_bigfont'">大</em>							<em onclick="$('postmessage_293254').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_293254').className='t_smallfont'">小</em>												发表于 2009-10-21 13:02&nbsp;																					<a href="viewthread.php?tid=25674&amp;page=1&amp;authorid=6961" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_12"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_12"></div><div id="ad_thread4_12"></div>
						
						
																											<div id="postmessage_293254" class="t_msgfont">貌似被墙了<br />
<a href="http://gappproxy.googlecode.com/files/GAppProxy-1.0.0beta.exe" target="_blank">http://gappproxy.googlecode.com/files/GAppProxy-1.0.0beta.exe</a><br />
下载地址，直接用迅雷就可以</div>

							
							
							
							
															<div id="post_rate_div_293254"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo293254_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=6961" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=25674&amp;repquote=293254&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 293254)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_12"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid293661" summary="pid293661" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6349" target="_blank" id="userinfo293661" class="dropmenu" onmouseover="showMenu(this.id)">水产先锋</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">形势一骗大好</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6349">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6349&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_13" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum293661" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=25674&page=1#pid293661', '话题链接已经复制到剪贴板')">14楼</strong>
													<em onclick="$('postmessage_293661').className='t_bigfont'">大</em>							<em onclick="$('postmessage_293661').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_293661').className='t_smallfont'">小</em>												发表于 2009-10-21 15:22&nbsp;																					<a href="viewthread.php?tid=25674&amp;page=1&amp;authorid=6349" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_13"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_13"></div><div id="ad_thread4_13"></div>
						
						
																											<div id="postmessage_293661" class="t_msgfont">感谢楼主，我已出墙，感觉良好</div>

							
							
							
							
															<div id="post_rate_div_293661"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo293661_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=6349" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=25674&amp;repquote=293661&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 293661)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_13"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid293729" summary="pid293729" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7001" target="_blank" id="userinfo293729" class="dropmenu" onmouseover="showMenu(this.id)">fans</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">木有头衔</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7001">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7001&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_14" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum293729" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=25674&page=1#pid293729', '话题链接已经复制到剪贴板')">15楼</strong>
													<em onclick="$('postmessage_293729').className='t_bigfont'">大</em>							<em onclick="$('postmessage_293729').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_293729').className='t_smallfont'">小</em>												发表于 2009-10-21 15:48&nbsp;																					<a href="viewthread.php?tid=25674&amp;page=1&amp;authorid=7001" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_14"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_14"></div><div id="ad_thread4_14"></div>
						
						
																											<div id="postmessage_293729" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>sin</i> 于 2009-10-21 13:02 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=293254&amp;ptid=25674" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
貌似被墙了<br />
<a href="http://gappproxy.googlecode.com/files/GAppProxy-1.0.0beta.exe" target="_blank">http://gappproxy.googlecode.com/files/GAppProxy-1.0.0beta.exe</a><br />
下载地址，直接用迅雷就可以 </blockquote></div>你这个是不能看youtube的哦<br />
不然我干嘛自己编译啊</div>

							
							
							
							
															<div id="post_rate_div_293729"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo293729_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=7001" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=25674&amp;repquote=293729&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 293729)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_14"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid294044" summary="pid294044" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8862" target="_blank" id="userinfo294044" class="dropmenu" onmouseover="showMenu(this.id)">Hackman</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">The times they are a changin'</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8862">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8862&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_15" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum294044" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=25674&page=1#pid294044', '话题链接已经复制到剪贴板')">16楼</strong>
													<em onclick="$('postmessage_294044').className='t_bigfont'">大</em>							<em onclick="$('postmessage_294044').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_294044').className='t_smallfont'">小</em>												发表于 2009-10-21 18:32&nbsp;																					<a href="viewthread.php?tid=25674&amp;page=1&amp;authorid=8862" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_15"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_15"></div><div id="ad_thread4_15"></div>
						
						
																											<div id="postmessage_294044" class="t_msgfont">为啥还是打不来网页...已按LZ的方法设置</div>

							
							
							
							
															<div id="post_rate_div_294044"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo294044_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=8862" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=25674&amp;repquote=294044&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 294044)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_15"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid294056" summary="pid294056" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8862" target="_blank" id="userinfo294056" class="dropmenu" onmouseover="showMenu(this.id)">Hackman</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">The times they are a changin'</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8862">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8862&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_16" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum294056" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=25674&page=1#pid294056', '话题链接已经复制到剪贴板')">17楼</strong>
													<em onclick="$('postmessage_294056').className='t_bigfont'">大</em>							<em onclick="$('postmessage_294056').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_294056').className='t_smallfont'">小</em>												发表于 2009-10-21 18:42&nbsp;																					<a href="viewthread.php?tid=25674&amp;page=1&amp;authorid=8862" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_16"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_16"></div><div id="ad_thread4_16"></div>
						
						
																											<div id="postmessage_294056" class="t_msgfont">问题已经解决，感谢LZ</div>

							
							
							
							
															<div id="post_rate_div_294056"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo294056_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=8862" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=25674&amp;repquote=294056&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 294056)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_16"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid295662" summary="pid295662" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6961" target="_blank" id="userinfo295662" class="dropmenu" onmouseover="showMenu(this.id)">sin</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">群众</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6961">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6961&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_17" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum295662" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=25674&page=1#pid295662', '话题链接已经复制到剪贴板')">18楼</strong>
													<em onclick="$('postmessage_295662').className='t_bigfont'">大</em>							<em onclick="$('postmessage_295662').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_295662').className='t_smallfont'">小</em>												发表于 2009-10-22 17:15&nbsp;																					<a href="viewthread.php?tid=25674&amp;page=1&amp;authorid=6961" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_17"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_17"></div><div id="ad_thread4_17"></div>
													<h2>回复 15楼 fans 的话题</h2>
						
						
																											<div id="postmessage_295662" class="t_msgfont">--！标题看错了……</div>

							
							
							
							
															<div id="post_rate_div_295662"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo295662_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=6961" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=25674&amp;repquote=295662&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 295662)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_17"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid296227" summary="pid296227" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=4601" target="_blank" id="userinfo296227" class="dropmenu" onmouseover="showMenu(this.id)">mzm</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">槑怎么</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=4601">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=4601&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_18" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum296227" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=25674&page=1#pid296227', '话题链接已经复制到剪贴板')">19楼</strong>
													<em onclick="$('postmessage_296227').className='t_bigfont'">大</em>							<em onclick="$('postmessage_296227').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_296227').className='t_smallfont'">小</em>												发表于 2009-10-22 23:45&nbsp;																					<a href="viewthread.php?tid=25674&amp;page=1&amp;authorid=4601" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_18"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_18"></div><div id="ad_thread4_18"></div>
						
						
																											<div id="postmessage_296227" class="t_msgfont">更新了一下，非常好用。谢谢楼主，youtube一点儿不卡。:)</div>

							
							
							
							
															<div id="post_rate_div_296227"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo296227_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=4601" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=25674&amp;repquote=296227&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 296227)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_18"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid297503" summary="pid297503" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6886" target="_blank" id="userinfo297503" class="dropmenu" onmouseover="showMenu(this.id)">宪哥</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6886">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6886&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_19" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum297503" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=25674&page=1#pid297503', '话题链接已经复制到剪贴板')">20楼</strong>
													<em onclick="$('postmessage_297503').className='t_bigfont'">大</em>							<em onclick="$('postmessage_297503').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_297503').className='t_smallfont'">小</em>												发表于 2009-10-23 20:30&nbsp;																					<a href="viewthread.php?tid=25674&amp;page=1&amp;authorid=6886" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_19"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_19"></div><div id="ad_thread4_19"></div>
						
						
																											<div id="postmessage_297503" class="t_msgfont">支持一下，好东西！</div>

							
							
							
							
															<div id="post_rate_div_297503"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo297503_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=6886" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=25674&amp;repquote=297503&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 297503)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_19"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid297797" summary="pid297797" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=4723" target="_blank" id="userinfo297797" class="dropmenu" onmouseover="showMenu(this.id)">sanqia</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=4723">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=4723&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_20" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum297797" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=25674&page=1#pid297797', '话题链接已经复制到剪贴板')">21楼</strong>
													<em onclick="$('postmessage_297797').className='t_bigfont'">大</em>							<em onclick="$('postmessage_297797').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_297797').className='t_smallfont'">小</em>												发表于 2009-10-23 23:40&nbsp;																					<a href="viewthread.php?tid=25674&amp;page=1&amp;authorid=4723" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_20"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_20"></div><div id="ad_thread4_20"></div>
						
						
																											<div id="postmessage_297797" class="t_msgfont">下了用了，翻墙正常，但是youtube视频还是看不了，页面可以打开，视频看不了，load一会就提示An error occurred, please try again later.</div>

							
							
							
							
															<div id="post_rate_div_297797"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo297797_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=4723" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=25674&amp;repquote=297797&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 297797)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_20"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid297825" summary="pid297825" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1915" target="_blank" id="userinfo297825" class="dropmenu" onmouseover="showMenu(this.id)">东北大米</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1915">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1915&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_21" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum297825" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=25674&page=1#pid297825', '话题链接已经复制到剪贴板')">22楼</strong>
													<em onclick="$('postmessage_297825').className='t_bigfont'">大</em>							<em onclick="$('postmessage_297825').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_297825').className='t_smallfont'">小</em>												发表于 2009-10-23 23:57&nbsp;																					<a href="viewthread.php?tid=25674&amp;page=1&amp;authorid=1915" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_21"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_21"></div><div id="ad_thread4_21"></div>
						
						
																											<div id="postmessage_297825" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>sanqia</i> 于 2009-10-23 23:40 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=297797&amp;ptid=25674" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
下了用了，翻墙正常，但是youtube视频还是看不了，页面可以打开，视频看不了，load一会就提示An error occurred, please try again later. </blockquote></div>一样</div>

							
							
							
							
															<div id="post_rate_div_297825"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo297825_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1915" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=25674&amp;repquote=297825&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 297825)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_21"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid297920" summary="pid297920" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7001" target="_blank" id="userinfo297920" class="dropmenu" onmouseover="showMenu(this.id)">fans</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">木有头衔</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7001">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7001&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_22" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum297920" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=25674&page=1#pid297920', '话题链接已经复制到剪贴板')">23楼</strong>
													<em onclick="$('postmessage_297920').className='t_bigfont'">大</em>							<em onclick="$('postmessage_297920').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_297920').className='t_smallfont'">小</em>												发表于 2009-10-24 01:33&nbsp;																					<a href="viewthread.php?tid=25674&amp;page=1&amp;authorid=7001" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_22"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_22"></div><div id="ad_thread4_22"></div>
						
						
																											<div id="postmessage_297920" class="t_msgfont">21&nbsp;&nbsp;22楼是没有更新服务器端吧</div>

							
							
							
							
															<div id="post_rate_div_297920"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo297920_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=7001" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=25674&amp;repquote=297920&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 297920)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_22"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid299461" summary="pid299461" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8556" target="_blank" id="userinfo299461" class="dropmenu" onmouseover="showMenu(this.id)">huntou</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8556">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8556&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_23" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum299461" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=25674&page=1#pid299461', '话题链接已经复制到剪贴板')">24楼</strong>
													<em onclick="$('postmessage_299461').className='t_bigfont'">大</em>							<em onclick="$('postmessage_299461').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_299461').className='t_smallfont'">小</em>												发表于 2009-10-25 13:37&nbsp;																					<a href="viewthread.php?tid=25674&amp;page=1&amp;authorid=8556" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_23"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_23"></div><div id="ad_thread4_23"></div>
													<h2>回复 22楼 东北大米 的话题</h2>
						
						
																											<div id="postmessage_299461" class="t_msgfont">我一样，看不了</div>

							
							
							
							
															<div id="post_rate_div_299461"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo299461_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=8556" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=25674&amp;repquote=299461&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 299461)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_23"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid300367" summary="pid300367" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8437" target="_blank" id="userinfo300367" class="dropmenu" onmouseover="showMenu(this.id)">27501777</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8437">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8437&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_24" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum300367" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=25674&page=1#pid300367', '话题链接已经复制到剪贴板')">25楼</strong>
													<em onclick="$('postmessage_300367').className='t_bigfont'">大</em>							<em onclick="$('postmessage_300367').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_300367').className='t_smallfont'">小</em>												发表于 2009-10-26 09:07&nbsp;																					<a href="viewthread.php?tid=25674&amp;page=1&amp;authorid=8437" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_24"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_24"></div><div id="ad_thread4_24"></div>
						
						
																											<div id="postmessage_300367" class="t_msgfont">我只想知道为什么我的appspot页面打开后显示的是：GAppProxy/1.0.0 beta 已经在工作了<br />
<br />
而你们的都是：GAppProxy/1.2.0 beta 已经在工作了<br />
<br />
<br />
为什么我的1.0&nbsp;&nbsp;你们的1.2？</div>

							
							
							
							
															<div id="post_rate_div_300367"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo300367_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=8437" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=25674&amp;repquote=300367&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 300367)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_24"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid301448" summary="pid301448" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6961" target="_blank" id="userinfo301448" class="dropmenu" onmouseover="showMenu(this.id)">sin</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">群众</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6961">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6961&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_25" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum301448" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=25674&page=1#pid301448', '话题链接已经复制到剪贴板')">26楼</strong>
													<em onclick="$('postmessage_301448').className='t_bigfont'">大</em>							<em onclick="$('postmessage_301448').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_301448').className='t_smallfont'">小</em>												发表于 2009-10-26 22:22&nbsp;																					<a href="viewthread.php?tid=25674&amp;page=1&amp;authorid=6961" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_25"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_25"></div><div id="ad_thread4_25"></div>
						
						
																											<div id="postmessage_301448" class="t_msgfont">Error 409: --- begin server output ---<br />
这是什么缘故？</div>

							
							
							
							
															<div id="post_rate_div_301448"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo301448_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=6961" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=25674&amp;repquote=301448&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 301448)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_25"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid305396" summary="pid305396" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8687" target="_blank" id="userinfo305396" class="dropmenu" onmouseover="showMenu(this.id)">远景</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8687">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8687&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_26" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum305396" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=25674&page=1#pid305396', '话题链接已经复制到剪贴板')">27楼</strong>
													<em onclick="$('postmessage_305396').className='t_bigfont'">大</em>							<em onclick="$('postmessage_305396').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_305396').className='t_smallfont'">小</em>												发表于 2009-10-29 17:34&nbsp;																					<a href="viewthread.php?tid=25674&amp;page=1&amp;authorid=8687" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_26"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_26"></div><div id="ad_thread4_26"></div>
						
						
																											<div id="postmessage_305396" class="t_msgfont">终于可以看了，谢谢楼主。</div>

							
							
							
							
															<div id="post_rate_div_305396"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo305396_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=8687" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=25674&amp;repquote=305396&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 305396)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_26"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid309955" summary="pid309955" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7001" target="_blank" id="userinfo309955" class="dropmenu" onmouseover="showMenu(this.id)">fans</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">木有头衔</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7001">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7001&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_27" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum309955" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=25674&page=1#pid309955', '话题链接已经复制到剪贴板')">28楼</strong>
													<em onclick="$('postmessage_309955').className='t_bigfont'">大</em>							<em onclick="$('postmessage_309955').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_309955').className='t_smallfont'">小</em>												发表于 2009-11-2 00:53&nbsp;																					<a href="viewthread.php?tid=25674&amp;page=1&amp;authorid=7001" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_27"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_27"></div><div id="ad_thread4_27"></div>
						
						
																											<div id="postmessage_309955" class="t_msgfont">回复#21&nbsp;&nbsp;#22&nbsp;&nbsp;#24&nbsp;&nbsp;#25<br />
下载了我提供的那个还需要更新服务器端的<br />
就是重新上传一次<br />
我在压缩包里面放的是比较新的（因为后来又更新了）能看youtube的fetchserver文件夹<br />
按照压缩包里面的教程上传一次就行了</div>

							
							
							
							
															<div id="post_rate_div_309955"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo309955_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=7001" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=25674&amp;repquote=309955&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 309955)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_27"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid312304" summary="pid312304" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=4723" target="_blank" id="userinfo312304" class="dropmenu" onmouseover="showMenu(this.id)">sanqia</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=4723">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=4723&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_28" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum312304" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=25674&page=1#pid312304', '话题链接已经复制到剪贴板')">29楼</strong>
													<em onclick="$('postmessage_312304').className='t_bigfont'">大</em>							<em onclick="$('postmessage_312304').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_312304').className='t_smallfont'">小</em>												发表于 2009-11-3 21:27&nbsp;																					<a href="viewthread.php?tid=25674&amp;page=1&amp;authorid=4723" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_28"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_28"></div><div id="ad_thread4_28"></div>
						
						
																											<div id="postmessage_312304" class="t_msgfont">楼上的哥们，你的网盘提示提取码过期了下载不了啊</div>

							
							
							
							
															<div id="post_rate_div_312304"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo312304_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=4723" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=25674&amp;repquote=312304&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 312304)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_28"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid312361" summary="pid312361" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7859" target="_blank" id="userinfo312361" class="dropmenu" onmouseover="showMenu(this.id)">jimmy_xu_wrk</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7859">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7859&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_29" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum312361" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=25674&page=1#pid312361', '话题链接已经复制到剪贴板')">30楼</strong>
													<em onclick="$('postmessage_312361').className='t_bigfont'">大</em>							<em onclick="$('postmessage_312361').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_312361').className='t_smallfont'">小</em>												发表于 2009-11-3 22:09&nbsp;																					<a href="viewthread.php?tid=25674&amp;page=1&amp;authorid=7859" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_29"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_29"></div><div id="ad_thread4_29"></div>
													<h2>回复 26楼 sin 的话题</h2>
						
						
																											<div id="postmessage_312361" class="t_msgfont">把index.yaml用文本编辑器打开，只留下第一行。</div>

							
							
							
							
															<div id="post_rate_div_312361"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo312361_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=7859" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=25674&amp;repquote=312361&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 312361)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_29"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid312377" summary="pid312377" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=9665" target="_blank" id="userinfo312377" class="dropmenu" onmouseover="showMenu(this.id)">mickeywaley</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=9665">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=9665&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_30" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum312377" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=25674&page=1#pid312377', '话题链接已经复制到剪贴板')">31楼</strong>
													<em onclick="$('postmessage_312377').className='t_bigfont'">大</em>							<em onclick="$('postmessage_312377').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_312377').className='t_smallfont'">小</em>												发表于 2009-11-3 22:22&nbsp;																					<a href="viewthread.php?tid=25674&amp;page=1&amp;authorid=9665" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_30"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_30"></div><div id="ad_thread4_30"></div>
						
						
																											<div id="postmessage_312377" class="t_msgfont">在LINUX下上传的，很方便。<br />
直接<br />
svn checkout <a href="http://gappproxy.googlecode.com/svn/trunk/" target="_blank">http://gappproxy.googlecode.com/svn/trunk/</a> gappproxy-read-only<br />
的。</div>

							
							
							
							
															<div id="post_rate_div_312377"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo312377_menu" style="display: none;">
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
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=25674&amp;repquote=312377&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 312377)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_30"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid349405" summary="pid349405" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7001" target="_blank" id="userinfo349405" class="dropmenu" onmouseover="showMenu(this.id)">fans</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">木有头衔</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7001">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7001&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_31" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum349405" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=25674&page=1#pid349405', '话题链接已经复制到剪贴板')">32楼</strong>
													<em onclick="$('postmessage_349405').className='t_bigfont'">大</em>							<em onclick="$('postmessage_349405').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_349405').className='t_smallfont'">小</em>												发表于 2009-12-1 01:53&nbsp;																					<a href="viewthread.php?tid=25674&amp;page=1&amp;authorid=7001" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_31"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_31"></div><div id="ad_thread4_31"></div>
						
						
																											<div id="postmessage_349405" class="t_msgfont">不好意思，最近上网困难<br />
上小组更困难（书签存错了···囧）<br />
我这就是更新链接去</div>

							
							
							
							
															<div id="post_rate_div_349405"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo349405_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=7001" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=25674&amp;repquote=349405&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 349405)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_31"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid356248" summary="pid356248" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10000" target="_blank" id="userinfo356248" class="dropmenu" onmouseover="showMenu(this.id)">vovz</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10000">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10000&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_32" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum356248" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=25674&page=1#pid356248', '话题链接已经复制到剪贴板')">33楼</strong>
													<em onclick="$('postmessage_356248').className='t_bigfont'">大</em>							<em onclick="$('postmessage_356248').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_356248').className='t_smallfont'">小</em>												发表于 2009-12-4 22:54&nbsp;																					<a href="viewthread.php?tid=25674&amp;page=1&amp;authorid=10000" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_32"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_32"></div><div id="ad_thread4_32"></div>
						
						
																											<div id="postmessage_356248" class="t_msgfont">Error response<br />
<br />
Error code 503.<br />
<br />
Message: Service Unavailable.<br />
<br />
Error code explanation: 503 = The server cannot process the request due to a high load. <br />
------------<br />
都是这个错误！</div>

							
							
							
							
															<div id="post_rate_div_356248"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo356248_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=10000" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=25674&amp;repquote=356248&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 356248)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_32"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid356742" summary="pid356742" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8957" target="_blank" id="userinfo356742" class="dropmenu" onmouseover="showMenu(this.id)">wiz</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8957">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8957&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_33" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum356742" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=25674&page=1#pid356742', '话题链接已经复制到剪贴板')">34楼</strong>
													<em onclick="$('postmessage_356742').className='t_bigfont'">大</em>							<em onclick="$('postmessage_356742').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_356742').className='t_smallfont'">小</em>												发表于 2009-12-5 10:01&nbsp;																					<a href="viewthread.php?tid=25674&amp;page=1&amp;authorid=8957" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_33"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_33"></div><div id="ad_thread4_33"></div>
						
						
																											<div id="postmessage_356742" class="t_msgfont">试试，多谢楼主了！</div>

							
							
							
							
															<div id="post_rate_div_356742"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo356742_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=8957" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=25674&amp;repquote=356742&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 356742)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_33"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid368237" summary="pid368237" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8363" target="_blank" id="userinfo368237" class="dropmenu" onmouseover="showMenu(this.id)">g8888c</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8363">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8363&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_34" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum368237" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=25674&page=1#pid368237', '话题链接已经复制到剪贴板')">35楼</strong>
													<em onclick="$('postmessage_368237').className='t_bigfont'">大</em>							<em onclick="$('postmessage_368237').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_368237').className='t_smallfont'">小</em>												发表于 2009-12-11 20:39&nbsp;																					<a href="viewthread.php?tid=25674&amp;page=1&amp;authorid=8363" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_34"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_34"></div><div id="ad_thread4_34"></div>
						
						
																											<div id="postmessage_368237" class="t_msgfont">谢谢LZ，已经成功</div>

							
							
							
							
															<div id="post_rate_div_368237"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo368237_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=8363" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=25674&amp;repquote=368237&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 368237)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_34"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid368562" summary="pid368562" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8556" target="_blank" id="userinfo368562" class="dropmenu" onmouseover="showMenu(this.id)">huntou</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8556">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8556&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_35" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum368562" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=25674&page=1#pid368562', '话题链接已经复制到剪贴板')">36楼</strong>
													<em onclick="$('postmessage_368562').className='t_bigfont'">大</em>							<em onclick="$('postmessage_368562').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_368562').className='t_smallfont'">小</em>												发表于 2009-12-12 01:09&nbsp;																					<a href="viewthread.php?tid=25674&amp;page=1&amp;authorid=8556" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_35"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_35"></div><div id="ad_thread4_35"></div>
						
						
																											<div id="postmessage_368562" class="t_msgfont">好像忘记了反馈：事实上第二天就成功观看了youtube视频</div>

							
							
							
							
															<div id="post_rate_div_368562"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo368562_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=8556" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=25674&amp;repquote=368562&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 368562)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_35"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid368637" summary="pid368637" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10663" target="_blank" id="userinfo368637" class="dropmenu" onmouseover="showMenu(this.id)">枫飘彧嶺</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">新手中的菜鸟</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10663">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10663&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_36" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum368637" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=25674&page=1#pid368637', '话题链接已经复制到剪贴板')">37楼</strong>
													<em onclick="$('postmessage_368637').className='t_bigfont'">大</em>							<em onclick="$('postmessage_368637').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_368637').className='t_smallfont'">小</em>												发表于 2009-12-12 02:57&nbsp;																					<a href="viewthread.php?tid=25674&amp;page=1&amp;authorid=10663" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_36"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_36"></div><div id="ad_thread4_36"></div>
						
						
																											<div id="postmessage_368637" class="t_msgfont">还是羡慕我自己啊！</div>

							
							
							
							
															<div id="post_rate_div_368637"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo368637_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://www.urstories.cn" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=10663" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=25674&amp;repquote=368637&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 368637)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_36"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid373330" summary="pid373330" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10722" target="_blank" id="userinfo373330" class="dropmenu" onmouseover="showMenu(this.id)">jencoxu</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10722">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10722&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_37" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum373330" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=25674&page=1#pid373330', '话题链接已经复制到剪贴板')">38楼</strong>
													<em onclick="$('postmessage_373330').className='t_bigfont'">大</em>							<em onclick="$('postmessage_373330').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_373330').className='t_smallfont'">小</em>												发表于 2009-12-14 19:54&nbsp;																					<a href="viewthread.php?tid=25674&amp;page=1&amp;authorid=10722" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_37"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_37"></div><div id="ad_thread4_37"></div>
						
						
																											<div id="postmessage_373330" class="t_msgfont">更新了，速度非常理想</div>

							
							
							
							
															<div id="post_rate_div_373330"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo373330_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=10722" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=25674&amp;repquote=373330&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 373330)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_37"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid379611" summary="pid379611" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=11060" target="_blank" id="userinfo379611" class="dropmenu" onmouseover="showMenu(this.id)">lanfeng</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=11060">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=11060&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_38" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum379611" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=25674&page=1#pid379611', '话题链接已经复制到剪贴板')">39楼</strong>
													<em onclick="$('postmessage_379611').className='t_bigfont'">大</em>							<em onclick="$('postmessage_379611').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_379611').className='t_smallfont'">小</em>												发表于 2009-12-17 21:21&nbsp;																					<a href="viewthread.php?tid=25674&amp;page=1&amp;authorid=11060" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_38"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_38"></div><div id="ad_thread4_38"></div>
						
						
																											<div id="postmessage_379611" class="t_msgfont">正在实验，如果成功就太要感谢楼主了！</div>

							
							
							
							
															<div id="post_rate_div_379611"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo379611_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=11060" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=25674&amp;repquote=379611&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 379611)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_38"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid380316" summary="pid380316" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8351" target="_blank" id="userinfo380316" class="dropmenu" onmouseover="showMenu(this.id)">isonomy</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8351">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8351&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_39" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum380316" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=25674&page=1#pid380316', '话题链接已经复制到剪贴板')">40楼</strong>
													<em onclick="$('postmessage_380316').className='t_bigfont'">大</em>							<em onclick="$('postmessage_380316').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_380316').className='t_smallfont'">小</em>												发表于 2009-12-18 10:25&nbsp;																					<a href="viewthread.php?tid=25674&amp;page=1&amp;authorid=8351" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_39"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_39"></div><div id="ad_thread4_39"></div>
						
						
																											<div id="postmessage_380316" class="t_msgfont">可以登录了，但看youtube时，总是显示有错误，请稍候再试，试过多次，问题依旧</div>

							
							
							
							
															<div id="post_rate_div_380316"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo380316_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=8351" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=25674&amp;repquote=380316&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 380316)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_39"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid431035" summary="pid431035" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10722" target="_blank" id="userinfo431035" class="dropmenu" onmouseover="showMenu(this.id)">jencoxu</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10722">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10722&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_40" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum431035" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=25674&page=1#pid431035', '话题链接已经复制到剪贴板')">41楼</strong>
													<em onclick="$('postmessage_431035').className='t_bigfont'">大</em>							<em onclick="$('postmessage_431035').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_431035').className='t_smallfont'">小</em>												发表于 2010-1-14 13:28&nbsp;																					<a href="viewthread.php?tid=25674&amp;page=1&amp;authorid=10722" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_40"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_40"></div><div id="ad_thread4_40"></div>
						
						
																											<div id="postmessage_431035" class="t_msgfont">这个不好使了吗？</div>

							
							
							
							
															<div id="post_rate_div_431035"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo431035_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=10722" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=25674&amp;repquote=431035&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 431035)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_40"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid431570" summary="pid431570" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=11745" target="_blank" id="userinfo431570" class="dropmenu" onmouseover="showMenu(this.id)">风中凌乱</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=11745">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=11745&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_41" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum431570" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=25674&page=1#pid431570', '话题链接已经复制到剪贴板')">42楼</strong>
													<em onclick="$('postmessage_431570').className='t_bigfont'">大</em>							<em onclick="$('postmessage_431570').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_431570').className='t_smallfont'">小</em>												发表于 2010-1-14 18:26&nbsp;																					<a href="viewthread.php?tid=25674&amp;page=1&amp;authorid=11745" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_41"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_41"></div><div id="ad_thread4_41"></div>
						
						
																											<div id="postmessage_431570" class="t_msgfont">我不喜欢编译的，喜欢直接用源码翻墙。<br />
不过今天貌似看不了YouTube了，昨天还可以。</div>

							
							
							
							
															<div id="post_rate_div_431570"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo431570_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=11745" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=25674&amp;repquote=431570&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 431570)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_41"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid432016" summary="pid432016" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6473" target="_blank" id="userinfo432016" class="dropmenu" onmouseover="showMenu(this.id)">sylens</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6473">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6473&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_42" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum432016" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=25674&page=1#pid432016', '话题链接已经复制到剪贴板')">43楼</strong>
													<em onclick="$('postmessage_432016').className='t_bigfont'">大</em>							<em onclick="$('postmessage_432016').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_432016').className='t_smallfont'">小</em>												发表于 2010-1-14 23:24&nbsp;																					<a href="viewthread.php?tid=25674&amp;page=1&amp;authorid=6473" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_42"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_42"></div><div id="ad_thread4_42"></div>
						
						
																											<div id="postmessage_432016" class="t_msgfont">今天怎么一直是503错误？<br />
<br />
Error response<br />
<br />
Error code 503.<br />
<br />
Message: Service Unavailable.<br />
<br />
Error code explanation: 503 = The server cannot process the request due to a high load.</div>

							
							
							
							
															<div id="post_rate_div_432016"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo432016_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=6473" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=25674&amp;repquote=432016&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 432016)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_42"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid845483" summary="pid845483" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 <a name="lastpost"></a>					<cite>											<a href="space.php?uid=13691" target="_blank" id="userinfo845483" class="dropmenu" onmouseover="showMenu(this.id)">chenyongnan</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=13691">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=13691&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_43" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum845483" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=25674&page=1#pid845483', '话题链接已经复制到剪贴板')">44楼</strong>
													<em onclick="$('postmessage_845483').className='t_bigfont'">大</em>							<em onclick="$('postmessage_845483').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_845483').className='t_smallfont'">小</em>												发表于 2010-9-27 00:48&nbsp;																					<a href="viewthread.php?tid=25674&amp;page=1&amp;authorid=13691" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_43"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_43"></div><div id="ad_thread4_43"></div>
						
						
																											<div id="postmessage_845483" class="t_msgfont">这么好的帖子居然才看到，终于解决了这个问题，感激楼主！！！</div>

							
							
							
							
															<div id="post_rate_div_845483"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo845483_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=13691" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=25674&amp;repquote=845483&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 845483)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_43"></div>				</div>
			</td>
		</tr>
		</table>
		</div>
</form>





<div class="pages_btns">
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=25674&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=25674&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
				<span class="postbtn" id="newspecialtmp" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=25674&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

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

	<form method="post" id="postform" action="post.php?action=reply&amp;fid=26&amp;tid=25674&amp;extra=&amp;replysubmit=yes" onSubmit="return validate(this)">
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
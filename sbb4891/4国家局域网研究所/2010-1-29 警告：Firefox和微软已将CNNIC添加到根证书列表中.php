<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<title>警告：Firefox和微软已将CNNIC添加到根证书列表中 - 国家局域网研究所 -  1984bbs.com </title>
<meta name="keywords" content="" />
<meta name="MSSmartTagsPreventParsing" content="True" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<link rel="archives" title="1984bbs.com" href="https://1984bbs.com/archiver/" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_viewthread.css" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_common.css" />
<script type="text/javascript">
	var discuz_uid = 13019;var IMGDIR = 'images/default';var attackevasive = '0';var gid = 0;var STYLEID = '1';
	gid = parseInt('3');var fid = parseInt('26');var tid = parseInt('36657');
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
			<p><a href="index.php" id="forumlist" onmouseover="showMenu(this.id)" class="dropmenu">1984bbs.com</a> &raquo; <a href="forumdisplay.php?fid=26">国家局域网研究所</a> &raquo; 警告：Firefox和微软已将CNNIC添加到根证书列表中</p>
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
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=36657&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=36657&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
				<span class="postbtn" id="newspecial" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=36657&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

	<ul class="popupmenu_popup newspecialmenu" id="newspecial_menu" style="display: none">
		<li><a href="post.php?action=newthread&amp;fid=26&amp;extra=">发新话题</a></li>
		<li class="poll"><a href="post.php?action=newthread&amp;fid=26&amp;extra=&amp;special=1">发布投票</a></li>													</ul>

<form method="post" name="modactions">
	<input type="hidden" name="formhash" value="823c9fa2" />
	<div class="mainbox viewthread">
		<span class="headactions">
					<a href="my.php?item=favorites&amp;tid=36657" id="ajax_favorite" onclick="ajaxmenu(event, this.id, 3000, 0)">收藏</a>
			<a href="my.php?item=subscriptions&amp;subadd=36657" id="ajax_subscription" onclick="ajaxmenu(event, this.id, 3000, null, 0)">订阅</a>
			<a href="misc.php?action=emailfriend&amp;tid=36657" id="emailfriend" onclick="ajaxmenu(event, this.id, 9000000, null, 0)">推荐</a>
				<a href="viewthread.php?action=printable&amp;tid=36657" target="_blank" class="notabs">打印</a>
				</span>
		<h1>警告：Firefox和微软已将CNNIC添加到根证书列表中		</h1>
				<ins>
						<a href="misc.php?action=viewthreadmod&amp;tid=36657" title="主题操作记录" target="_blank">本主题由 张书记 于 2010-2-4 12:28 合并</a>								</ins>
							<table id="pid456475" summary="pid456475" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1136" target="_blank" id="userinfo456475" class="dropmenu" onmouseover="showMenu(this.id)">bbscn</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">长期不明真相的围观群众</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1136">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1136&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_0" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum456475" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=36657&page=1#pid456475', '话题链接已经复制到剪贴板')">1楼</strong>
													<em onclick="$('postmessage_456475').className='t_bigfont'">大</em>							<em onclick="$('postmessage_456475').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_456475').className='t_smallfont'">小</em>												发表于 2010-1-29 05:34&nbsp;																					<a href="viewthread.php?tid=36657&amp;page=1&amp;authorid=1136" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_0"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_0"></div><div id="ad_thread4_0"></div>
													<h2>警告：Firefox和微软已将CNNIC添加到根证书列表中</h2>
						
						
																											<div id="postmessage_456475" class="t_msgfont">源地址：<a href="http://www.cnbeta.com/articles/103170.htm" target="_blank">http://www.cnbeta.com/articles/103170.htm</a><br />
感谢流氓不可怕，就怕流氓有证实的投递<br />
SummerWa 写道 &quot;Microsoft和Firefox已经将CNNIC作为根证书颁发机构添加到证书列表中……&quot;<br />
IE 8, Firefox 3.6以及Chrome都会受到影响，可证实该消息的来源：<br />
<br />
Microsoft 的PDF<br />
<a href="https://bugzilla.mozilla.org/show_bug.cgi?id=47676" target="_blank">https://bugzilla.mozilla.org/show_bug.cgi?id=47676</a> 6<br />
<a href="https://bugzilla.mozilla.org/show_bug.cgi?id=52500" target="_blank">https://bugzilla.mozilla.org/show_bug.cgi?id=52500</a> 8<br />
<br />
如果不信任该证书，可以按这里的方法操作。<br />
<br />
新闻来源:solidot<br />
<br />
<br />
<br />
+++++++++++++++++++++++++氧化钙GFW的分割线+++++++++++++++++++++++++<br />
<br />
<br />
源地址：<a href="http://felixcat.net/2010/01/throw-out-cnnic/" target="_blank">http://felixcat.net/2010/01/throw-out-cnnic/</a><br />
<br />
<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<br />
<br />
CNNIC，我不信任你！ ——从“受信任的根证书”里赶走CNNIC<br />
Posted by Felix Yan in Uncategorized on 27-01-2010<br />
<br />
在Twitter上惊闻“微软把CNNIC列为根证书发布者”，赶紧Google一把，发现 Mozilla同样也已经在3.6版的Firefox里这么做了。<br />
<br />
出于对CNNIC深深的不信任，我决定将CNNIC ROOT从“受信任”的列表里赶出去。<br />
<br />
因为IE/Chrome采用微软的CA目录，而微软现在暂未将CNNIC加入，因此需要先从Firefox中导出这几个证书，再添加到Windows的“不信任”列表(更新：现在可以直接从Windows里导入再导入了，操作类似)，以防范于未然。下面便是具体的步骤了（包括IE/Chrome/Firefox）：<br />
<br />
1、如果没有安装Firefox浏览器的3.6最新版，或者在下面的操作中没有找到相应的证书，可以从这里下载这三个证书，然后跳到第5步：CNNICROOT.crt CNNICSSL.crt Entrust.netSecureServerCertificationAuthority.crt<br />
<br />
2、打开Firefox浏览器，工具(Tools)-&gt;选项(Options)-&gt;高级(Advanced)-&gt;加密 (Encryption)-&gt;查看证书(View Certificates)<br />
<br />
3、在证书机构(Authorites)标签页中找到”CNNIC“组的”CNNIC ROOT“项，按导出(Export)（备份到本地），然后删除 (Delete)。（RT JimmyXu:在Firefox里对自带根证书执行“删除”操作就相当于是禁用其所有目的，并不会将其删除。）<br />
<br />
4、在”Entrust.net“组中找到”Entrust.net Secure Server Certification Authority“(序列号37:4A:D2:43的)和”CNNIC SSL“证书，同样导出并删除。（注：Entrust.net这个也是验证CNNIC所用的证书）<br />
<br />
&#65279;<br />
<br />
5、打开开始菜单-&gt;运行（或者直接按Win-R）<br />
<br />
6、输入certmgr.msc，打开Windows 的证书管理器。<br />
<br />
7、展开”不受信任的证书(Untrusted Certificates)“，右键单击其下”证书(Certificates)“项，在”所有任务(All Tasks)“子菜单下单击”导入(Import)…“<br />
<br />
8、分别找到刚才保存的三个证书，依次导入(Next-&gt;Browse…(找到相应文件)-&gt;Next-&gt;Next-&gt;Finish)。<br />
<br />
9、将导入的证书复制(Ctrl-C)，然后粘贴(Ctrl-V)到受信任的证书颁发者(Trusted Root Certification Authorities)中，然后在这个窗口中分别右键单击粘贴过来的3个证书，选择“属性(Properties)”，然后单击“停用这个证书的所有目的(Disable all purposes for this certificate)”。<br />
<br />
（感谢 Jimmy Xu 供图）<br />
<br />
想检验操作是否成功？在浏览器里访问 <a href="https://www.enum.cn/" target="_blank">https://www.enum.cn/</a> ，如果提示证书被拒绝，就证明操作成功了！<br />
<br />
——————7:30 PM更新——————<br />
<br />
不需要关闭自动更新，上述步骤多了第9步，请注意！<br />
<br />
——————6:15 PM更新！！——————<br />
<br />
0、在默认情况下，微软会自动连接到Windows Update服务器更新CA列表，这样会导致以下操作对IE/chrome失效，具体解决方法：<br />
<br />
0a:对于Windows XP用户：控制面板(Control Panel)-&gt;添加/删除程序(Add/Remove Programs)-&gt;添加/删除windows组件(Add/Remove Windows Components)-&gt;取消勾选“更新根目录证书(Update Root Certificates)”<br />
<br />
（感谢推友@tOmMyanG供图！）<br />
<br />
0b:对于Windows Vista/Windows 7用户：组策略(运行-&gt;gpedit.msc)-&gt;计算机配置(Computer Configuration)-&gt;管理模板(Administrative Templates)-&gt;系统(System)-&gt;Internet 通信管理(Internet Communication Management)-&gt;Internet 通信设置(Internet Communication settings)，启用(Enable)“关闭自动根证书更新(Turn off Automatic Root Certificates Update)”<br />
<br />
十分感谢推友 @Ratoo 和 @jimmy_xu_wrk 在这个问题上对我的帮助：）<br />
<br />
（另：十分感谢使用中文版系统的朋友告诉我相应选项在中文版中的名字，谢谢！）<br />
<br />
参考资料：<a href="http://www.networkworld.com/community/node/17703" target="_blank">http://www.networkworld.com/community/node/17703</a><br />
<br />
[<i> 本帖最后由 bbscn 于 2010-1-29 05:36 编辑 </i>]</div>

							
							
							
							
															<div id="post_rate_div_456475"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo456475_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1136" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=36657&amp;repquote=456475&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 456475)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_0"></div>				</div>
			</td>
		</tr>
		</table>
		</div><div class="ad_column" id="ad_interthread"><a href="/viewthread.php?tid=54699" target="_blank" style="color:red;">1984bbs是一个非营利项目，它需要您的捐助！</font></a>		</div>
	<div class="mainbox viewthread">
			<table id="pid458741" summary="pid458741" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1136" target="_blank" id="userinfo458741" class="dropmenu" onmouseover="showMenu(this.id)">bbscn</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">长期不明真相的围观群众</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1136">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1136&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_1" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum458741" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=36657&page=1#pid458741', '话题链接已经复制到剪贴板')">2楼</strong>
													<em onclick="$('postmessage_458741').className='t_bigfont'">大</em>							<em onclick="$('postmessage_458741').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_458741').className='t_smallfont'">小</em>												发表于 2010-1-30 16:21&nbsp;																					<a href="viewthread.php?tid=36657&amp;page=1&amp;authorid=1136" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_1"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_1"></div><div id="ad_thread4_1"></div>
						
						
																											<div id="postmessage_458741" class="t_msgfont">没人关注啊，我来解释一下吧。难保有那么一天，TG劫持dns，做个假的GMAIL.COM，你在不知情的情况下把密码就告诉他了。</div>

							
							
							
							
															<div id="post_rate_div_458741"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo458741_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1136" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=36657&amp;repquote=458741&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 458741)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_1"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid458874" summary="pid458874" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10733" target="_blank" id="userinfo458874" class="dropmenu" onmouseover="showMenu(this.id)">pillarchang</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10733">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10733&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_2" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum458874" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=36657&page=1#pid458874', '话题链接已经复制到剪贴板')">3楼</strong>
													<em onclick="$('postmessage_458874').className='t_bigfont'">大</em>							<em onclick="$('postmessage_458874').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_458874').className='t_smallfont'">小</em>												发表于 2010-1-30 18:47&nbsp;																					<a href="viewthread.php?tid=36657&amp;page=1&amp;authorid=10733" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_2"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_2"></div><div id="ad_thread4_2"></div>
						
						
																											<div id="postmessage_458874" class="t_msgfont">记号～ 有点繁琐</div>

							
							
							
							
															<div id="post_rate_div_458874"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo458874_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=10733" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=36657&amp;repquote=458874&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 458874)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_2"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid458877" summary="pid458877" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=9191" target="_blank" id="userinfo458877" class="dropmenu" onmouseover="showMenu(this.id)">jason32</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=9191">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=9191&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_3" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum458877" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=36657&page=1#pid458877', '话题链接已经复制到剪贴板')">4楼</strong>
													<em onclick="$('postmessage_458877').className='t_bigfont'">大</em>							<em onclick="$('postmessage_458877').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_458877').className='t_smallfont'">小</em>												发表于 2010-1-30 18:54&nbsp;																					<a href="viewthread.php?tid=36657&amp;page=1&amp;authorid=9191" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_3"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_3"></div><div id="ad_thread4_3"></div>
						
						
																											<div id="postmessage_458877" class="t_msgfont">自从删完那个 我的ＦＦ就打不开任何网页了</div>

							
							
							
							
															<div id="post_rate_div_458877"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo458877_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=9191" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=36657&amp;repquote=458877&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 458877)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_3"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid459033" summary="pid459033" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=464" target="_blank" id="userinfo459033" class="dropmenu" onmouseover="showMenu(this.id)">Phillip</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">路边社特邀围观群众</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=464">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=464&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_4" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum459033" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=36657&page=1#pid459033', '话题链接已经复制到剪贴板')">5楼</strong>
													<em onclick="$('postmessage_459033').className='t_bigfont'">大</em>							<em onclick="$('postmessage_459033').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_459033').className='t_smallfont'">小</em>												发表于 2010-1-30 21:31&nbsp;																					<a href="viewthread.php?tid=36657&amp;page=1&amp;authorid=464" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_4"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_4"></div><div id="ad_thread4_4"></div>
						
						
																											<div id="postmessage_459033" class="t_msgfont">有个副作用, 就是网易的邮箱无法SSL安全登录了, 因为用的就是CNNIC的证书<br />
<br />
不过也无所谓, 网易邮箱就是不存什么重要信息的.</div>

							
							
							
							
															<div id="post_rate_div_459033"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo459033_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=464" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=36657&amp;repquote=459033&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 459033)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_4"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid459324" summary="pid459324" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7990" target="_blank" id="userinfo459324" class="dropmenu" onmouseover="showMenu(this.id)">王九蛋</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7990">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7990&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_5" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum459324" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=36657&page=1#pid459324', '话题链接已经复制到剪贴板')">6楼</strong>
													<em onclick="$('postmessage_459324').className='t_bigfont'">大</em>							<em onclick="$('postmessage_459324').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_459324').className='t_smallfont'">小</em>												发表于 2010-1-31 00:23&nbsp;																					<a href="viewthread.php?tid=36657&amp;page=1&amp;authorid=7990" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_5"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_5"></div><div id="ad_thread4_5"></div>
						
						
																											<div id="postmessage_459324" class="t_msgfont">删除CNNIC根证书，附方法<br />
文章提交者：灵鹫山 加帖在 猫眼看人 【凯迪网络】 <a href="http://www.kdnet.net" target="_blank">http://www.kdnet.net</a><br />
<br />
&nbsp; &nbsp;&quot;Microsoft和Firefox已经将CNNIC作为根证书颁发机构添加到证书列表中……&quot;IE 8, Firefox 3.6以及Chrome都会受到影响。我是非常不信任这个CNNIC的根证书的，立刻检查系统，已经手动将这个“CNNIC ROOT”，给删除出受信任列表了。<br />
&nbsp; &nbsp; 最简单办法，打开IE或者TT浏览器，工具-----intenet选项------内容------受信任证书，在列表之下把全部c字母开头的根证书里，很容易就能把颁发机构为CNNIC的根证书揪出来，然后删除它！<br />
&nbsp; &nbsp; 如果你是用的是Firefox浏览器，按照如下详细设置办法可以将CNNIC颁发的根证书全部列禁！<br />
&nbsp; &nbsp; <a href="http://felixcat.net/2010/01/throw-out-cnnic/" target="_blank">http://felixcat.net/2010/01/throw-out-cnnic/</a><br />
&nbsp; &nbsp; 和莫名其妙的可能监控以及流氓软件有关的根证书，给我滚！<br />
&nbsp; &nbsp;注：操作完毕之后，记得进入控制面板----添加或删除程序-------添加或删除windows组件，找出更新根证书目录，把那钩去掉，点击下一步，彻底把CNNIC死气掰咧给你自动植入的通路给封锁掉，要不你前脚删除，后脚他有它又偷偷给你安上。<br />
&nbsp; &nbsp;&nbsp;&nbsp;还有一种情况，可能您的电脑里有和cnnic有关的赖皮软件隐藏着，您发现多次删除，cnnic还在偷偷给您植入证书，那您采取如下狠招对付它：<br />
&nbsp; &nbsp; 运行certmgr.msc，然后，受信任的证书颁发机构，然后，cnnic root双击，然后，详细信息，然后 编辑属性， 最后下狠手，停用这个证书的所有目的！</div>

							
							
							
							
															<div id="post_rate_div_459324"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo459324_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=7990" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=36657&amp;repquote=459324&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 459324)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_5"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid459341" summary="pid459341" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=803" target="_blank" id="userinfo459341" class="dropmenu" onmouseover="showMenu(this.id)">weke</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">挪威.奥斯陆</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=803">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=803&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_6" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum459341" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=36657&page=1#pid459341', '话题链接已经复制到剪贴板')">7楼</strong>
													<em onclick="$('postmessage_459341').className='t_bigfont'">大</em>							<em onclick="$('postmessage_459341').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_459341').className='t_smallfont'">小</em>												发表于 2010-1-31 00:37&nbsp;																					<a href="viewthread.php?tid=36657&amp;page=1&amp;authorid=803" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_6"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_6"></div><div id="ad_thread4_6"></div>
						
						
																											<div id="postmessage_459341" class="t_msgfont">just巳全删所有证书，不影响上网。</div>

							
							
							
							
															<div id="post_rate_div_459341"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo459341_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=803" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=36657&amp;repquote=459341&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 459341)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_6"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid460396" summary="pid460396" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6988" target="_blank" id="userinfo460396" class="dropmenu" onmouseover="showMenu(this.id)">fp456789</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6988">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6988&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_7" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum460396" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=36657&page=1#pid460396', '话题链接已经复制到剪贴板')">8楼</strong>
													<em onclick="$('postmessage_460396').className='t_bigfont'">大</em>							<em onclick="$('postmessage_460396').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_460396').className='t_smallfont'">小</em>												发表于 2010-1-31 22:21&nbsp;																					<a href="viewthread.php?tid=36657&amp;page=1&amp;authorid=6988" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_7"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_7"></div><div id="ad_thread4_7"></div>
													<h2>SSL会话将恐遭遇劫持，Firefox和微软已将CNNIC添加到根证书列表中！</h2>
						
						
																											<div id="postmessage_460396" class="t_msgfont">从cnBeta上看到的消息（<a href="http://www.cnbeta.com/articles/103170.htm" target="_blank">http://www.cnbeta.com/articles/103170.htm</a>）：<br />
<br />
<br />
SummerWa 写道 &quot;Microsoft和Firefox已经将CNNIC作为根证书颁发机构添加到证书列表中……&quot;<br />
IE 8, Firefox 3.6以及Chrome都会受到影响，可证实该消息的来源：<br />
<br />
Microsoft 的PDF ：<a href="http://docs.google.com/viewer?url=http://download.microsoft.com/download/1/4/f/14f7067b-69d3-473a-ba5e-70d04aea5929/windows%2520root%2520certificate%2520program%2520members%2520november%25202009.pdf" target="_blank">http://docs.google.com/viewer?ur ... vember%25202009.pdf</a><br />
<a href="https://bugzilla.mozilla.org/show_bug.cgi?id=47676 6" target="_blank">https://bugzilla.mozilla.org/show_bug.cgi?id=47676 6</a> <br />
<a href="https://bugzilla.mozilla.org/show_bug.cgi?id=52500 8" target="_blank">https://bugzilla.mozilla.org/show_bug.cgi?id=52500 8</a><br />
<br />
如果不信任该证书，可以按这里的方法操作。<br />
<br />
新闻来源:solidot<br />
<br />
附：<br />
除去CNNIC证书的方法：<strong>CNNIC，我不信任你！——从“受信任的根证书”里赶走CNNIC</strong> <a href="http://felixcat.net/2010/01/throw-out-cnnic/" target="_blank">http://felixcat.net/2010/01/throw-out-cnnic/</a><br />
<br />
[<i> 本帖最后由 fp456789 于 2010-1-31 22:43 编辑 </i>]</div>

							
							
							
							
															<div id="post_rate_div_460396"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo460396_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=6988" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=36657&amp;repquote=460396&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 460396)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_7"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid460468" summary="pid460468" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=11467" target="_blank" id="userinfo460468" class="dropmenu" onmouseover="showMenu(this.id)">飞牛</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=11467">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=11467&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_8" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum460468" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=36657&page=1#pid460468', '话题链接已经复制到剪贴板')">9楼</strong>
													<em onclick="$('postmessage_460468').className='t_bigfont'">大</em>							<em onclick="$('postmessage_460468').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_460468').className='t_smallfont'">小</em>												发表于 2010-1-31 23:10&nbsp;																					<a href="viewthread.php?tid=36657&amp;page=1&amp;authorid=11467" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_8"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_8"></div><div id="ad_thread4_8"></div>
						
						
																											<div id="postmessage_460468" class="t_msgfont">标记学习</div>

							
							
							
							
															<div id="post_rate_div_460468"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo460468_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=11467" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=36657&amp;repquote=460468&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 460468)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_8"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid460475" summary="pid460475" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=548" target="_blank" id="userinfo460475" class="dropmenu" onmouseover="showMenu(this.id)">坚壁清野</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=548">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=548&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_9" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum460475" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=36657&page=1#pid460475', '话题链接已经复制到剪贴板')">10楼</strong>
													<em onclick="$('postmessage_460475').className='t_bigfont'">大</em>							<em onclick="$('postmessage_460475').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_460475').className='t_smallfont'">小</em>												发表于 2010-1-31 23:12&nbsp;																					<a href="viewthread.php?tid=36657&amp;page=1&amp;authorid=548" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_9"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_9"></div><div id="ad_thread4_9"></div>
						
						
																											<div id="postmessage_460475" class="t_msgfont">学习。</div>

							
							
							
							
															<div id="post_rate_div_460475"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo460475_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=548" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=36657&amp;repquote=460475&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 460475)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_9"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid461908" summary="pid461908" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12175" target="_blank" id="userinfo461908" class="dropmenu" onmouseover="showMenu(this.id)">kurverse</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12175">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12175&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_10" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum461908" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=36657&page=1#pid461908', '话题链接已经复制到剪贴板')">11楼</strong>
													<em onclick="$('postmessage_461908').className='t_bigfont'">大</em>							<em onclick="$('postmessage_461908').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_461908').className='t_smallfont'">小</em>												发表于 2010-2-1 19:42&nbsp;																					<a href="viewthread.php?tid=36657&amp;page=1&amp;authorid=12175" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_10"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_10"></div><div id="ad_thread4_10"></div>
						
						
																											<div id="postmessage_461908" class="t_msgfont">学习了</div>

							
							
							
							
															<div id="post_rate_div_461908"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo461908_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=12175" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=36657&amp;repquote=461908&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 461908)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_10"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid462639" summary="pid462639" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=300" target="_blank" id="userinfo462639" class="dropmenu" onmouseover="showMenu(this.id)">rationalcrow</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">拆呐拆呐不拆怎么成china</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=300">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=300&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_11" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum462639" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=36657&page=1#pid462639', '话题链接已经复制到剪贴板')">12楼</strong>
													<em onclick="$('postmessage_462639').className='t_bigfont'">大</em>							<em onclick="$('postmessage_462639').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_462639').className='t_smallfont'">小</em>												发表于 2010-2-2 10:01&nbsp;																					<a href="viewthread.php?tid=36657&amp;page=1&amp;authorid=300" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_11"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_11"></div><div id="ad_thread4_11"></div>
													<h2>AutoProxy 作者WCM《CNNIC CA：最最最严重安全警告！》</h2>
						
						
																											<div id="postmessage_462639" class="t_msgfont"><a href="http://autoproxy.org/zh-CN/node/66" target="_blank">http://autoproxy.org/zh-CN/node/66</a><br />
最新进展：<br />
受DDOS 攻击下线，存档： <a href="https://docs.google.com/View?id=d5j3s7p_7f9r489fg" target="_blank">https://docs.google.com/View?id=d5j3s7p_7f9r489fg</a><br />
<br />
各位，虽然此事与 AutoProxy 无关，但它对所有（也包括 AutoProxy）用户都是一个非常严重的安全威胁。我，<a href="http://twitter.com/WCM" target="_blank">WCM</a>，AutoProxy 作者，以个人名誉强烈建议您认真阅读并采取措施。<br />
 <br />
<font size="10">背景知识</font><br />
<br />
网上传输的任何信息都有可能被恶意截获。尽管如此，我们仍然在网上保存着很多重要的资料，比如私人邮件、银行交易。这是因为，有一个叫着 SSL/TLS/HTTPS 的东西在保障我们的信息安全，它将我们和网站服务器的通信加密起来。<br />
<br />
如果网站觉得它的用户资料很敏感，打算使用 SSL/TLS/HTTPS 加密，必须先向有 CA (Certificate Authority) 权限的公司/组织申请一个证书。有 CA 权限的公司/组织都是经过全球审核，值得信赖的。<br />
<br />
 <br />
<font size="14">发生了什么事</font><br />
<br />
最近，CNNIC——对，就是那个臭名昭著的利用系统漏洞发布流氓软件的、就是那个使劲忽悠 CN 域名又突然停止域名解析的 CNNIC (中国互联网络信息中心)，它——偷偷地获得了 CA 权限！在所有中文用户被隐瞒的情况下！<br />
<br />
 <br />
<font size="14">意味着什么</font><br />
<br />
意味着 CNNIC 可以随意造一个假的证书给任何网站，替换网站真正的证书，从而盗取我们的任何资料！<br />
<br />
这就是传说中的 SSL MITM 攻击。以前这个攻击不重要是因为攻击的证书是假的，浏览器会告诉我们真相；现在，因为 CNNIC 有了 CA 权限，浏览器对它的证书完全信任，不会给我们任何警告，即使是造假的证书！<br />
<br />
你信任 CNNIC (中国互联网络信息中心) 吗？你相信它有了权限，会安守本分，不会偷偷地干坏事吗？<br />
我对此有3个疑问：<br />
<br />
&nbsp; &nbsp;1. 某 party 对 GMail 兴趣浓厚，GFW 苦练 SSL 内功多年，无大进展。如今有了 CA，若 GFW 令下，CNNIC 敢不从否？<br />
&nbsp; &nbsp;2. CNNIC 当年利用所谓官方头衔，制流氓软件祸害网民。如今有了 CA，如何相信它不会故伎重演？<br />
&nbsp; &nbsp;3. 为了得到指定网站的合法证书，其它流氓公司抛出钱权交易，面对诱惑，CNNIC 是否有足够的职业操守？<br />
<br />
 <br />
<font size="14">影响范围</font><br />
<br />
基本上所有浏览器的所有用户均受影响！<br />
<br />
 <br />
<font size="14">行动第一步：立即安全防御</font><br />
<br />
在此只介绍 Firefox 浏览器的防御方法，其它浏览器的用户请自行 Google，原理类似。<br />
<br />
&nbsp; &nbsp; * 菜单栏：工具/编辑-&gt;首选项-&gt;高级-&gt;加密-&gt;查看证书-&gt;证书机构(Authorites)<br />
&nbsp; &nbsp; * 这是一个很长的列表，按照字母顺序，你应该能找到一个叫着 &quot;CNNIC ROOT&quot; 的记录，就是这个东西，告诉 Firefox，我们不信任它！<br />
&nbsp; &nbsp; * 选中 CNNIC ROOT，点击下面的“编辑”按钮，弹出一个框，应该有3个选项，把所有选项的勾都去掉！保存。<br />
&nbsp; &nbsp; * 还没有完，狡兔有三窟。<br />
&nbsp; &nbsp; * 接着往下找，有一个叫着 Entrust.net 的组，这个组里应该有一个 &quot;CNNIC SSL&quot; (如果没有，访问一下<a href="https://tns-fsverify.cnnic.cn/" target="_blank"> 这个网站</a> 就有了)<br />
&nbsp; &nbsp; * 别急着下手，这回情况不一样，这个证书是 Entrust 签名的。我们信任 Entrust，Entrust 说它信任 CNNIC，所以我们就被迫信任 CNNIC SSL 了。找到 &quot;Entrust.net Secure Server Certification Authority&quot; 这一条，同上面一样，把3个选项的勾都去掉，保存（提示：取消了对 Entrust 的信任以后，可能会没法打开它签名的某些正常网站。至于哪个网站用了它的签名，随便试了一下，没找到例子）。<br />
&nbsp; &nbsp; * 最后，让我们验证一下。重启 Firefox，打开<a href="https://tns-fsverify.cnnic.cn/" target="_blank"> 这个</a> 和<a href="https://www.enum.cn/" target="_blank"> 这个</a> 网站，如果Firefox 对这两个网站都给出了安全警告，而非正常浏览，恭喜，您已经摆脱了 CNNIC CA 的安全威胁！<br />
<br />
 <br />
<font size="14">行动第二步：治标还需治本</font><br />
<br />
几天前听到这个消息的时候，我简单地、轻蔑地将 CNNIC 删除了事。可是这个周末，我忽然觉得这样很不好。因为只要它存在，始终会有大部分的用户受到威胁。和写 AutoProxy 时同样的想法：如果大部分人都处于安全威胁当中，一个人苟且偷安又有什么意义？如果不能将自由与安全的门槛降低一点点，所谓的技术又有什么好侥幸的？<br />
<br />
所以我呼吁大家，贡献一点时间和知识，团结起来说服各浏览器取消 CNNIC 的 CA 权限。这种事不可能有公司来推动，只有我们社区。<br />
<br />
首先推荐的是 Firefox，作为一个公益组织 Mozilla 的决策过程更为开放、更愿意听取社区的声音。<a href="https://bugzilla.mozilla.org/show_bug.cgi?id=476766" target="_blank">Bug 476766</a> 记录了事件的全过程。<a href="https://bugzilla.mozilla.org/show_bug.cgi?id=542689" target="_blank">Bug 542689</a> 和 <a href="http://groups.google.com/group/mozilla.dev.security.policy/browse_thread/thread/17be3bd7e0b33e8c/d69aea4eb35c5ee3" target="_blank">Mozilla.dev.security.policy</a> 进行着现在的讨论（注意，你可以把自己添加到 Bugzilla 的 CC List 以表达你对此事的关切。但是不要随便说一些不靠谱的话，免遭讨厌。强调政治、GFW 的之类的不管用，必须就事论事。比如它在申请过程中采取欺骗、隐瞒的手段，或者申请成功后的某些行为违反了 Mozilla 的 CA 政策；比如它的属性和过往行为表明它不会忠于自己的职责，而(帮助)做出 MITM 这种 CA 共愤的事情）。<br />
<br />
其次是 Entrust，它说它信任，导致了我们也被迫信任 CNNIC SSL。不妨 <a href="http://www.entrust.com/contact/index.htm" target="_blank">告诉 Entrust 此事很严重</a>，因为它错误地信任了 CNNIC，大量用户不得不删除它的 CA。如果能找到使用 Entrust 证书的网站更好。给这些网站写信，因为此次事件我们不得不删除了 Entrust 的 CA，请求他们另选别家认证。如果反响强烈，势必给 Entrust 造成很大压力。<br />
<br />
除此之外，<a href="https://spreadsheets.google.com/viewform?formkey=dGctTVY0Y3VxX3lrXzZoeG90WDFBVXc6MA" target="_blank">来投个票吧</a>（<a href="https://spreadsheets.google.com/pub?key=tg-MV4cuq_yk_6hxotX1AUw&amp;output=html" target="_blank">结果统计</a>）！<br />
<br />
最后，强烈建议大家，发现证书警告的时候最好直接关掉，不要轻易添加例外。证书的信任体系是一级依赖一级的，一不小心你可能就会连带信任一个不想信任的 CA。上面用于验证的两个网站，不妨定期（每周/每月）测一测，如果哪天你发现其中的任何一个网站没有证书警告，就要注意了！<br />
<br />
各位：<br />
DNS 劫持已然成为常态，不要让 SSL 劫持再次普及！此事刚刚发布，尚有评议空间。待时间流逝，你我皆成温水中之青蛙！<br />
<br />
[<i> 本帖最后由 rationalcrow 于 2010-2-2 10:14 编辑 </i>]</div>

							
							
							
							
															<div id="post_rate_div_462639"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo462639_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=300" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=36657&amp;repquote=462639&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 462639)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_11"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid462653" summary="pid462653" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=4884" target="_blank" id="userinfo462653" class="dropmenu" onmouseover="showMenu(this.id)">albert_qhd</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=4884">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=4884&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_12" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum462653" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=36657&page=1#pid462653', '话题链接已经复制到剪贴板')">13楼</strong>
													<em onclick="$('postmessage_462653').className='t_bigfont'">大</em>							<em onclick="$('postmessage_462653').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_462653').className='t_smallfont'">小</em>												发表于 2010-2-2 10:11&nbsp;																					<a href="viewthread.php?tid=36657&amp;page=1&amp;authorid=4884" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_12"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_12"></div><div id="ad_thread4_12"></div>
						
						
																											<div id="postmessage_462653" class="t_msgfont">同意！已删除之</div>

							
							
							
							
															<div id="post_rate_div_462653"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo462653_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=4884" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=36657&amp;repquote=462653&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 462653)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_12"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid462656" summary="pid462656" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=300" target="_blank" id="userinfo462656" class="dropmenu" onmouseover="showMenu(this.id)">rationalcrow</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">拆呐拆呐不拆怎么成china</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=300">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=300&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_13" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum462656" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=36657&page=1#pid462656', '话题链接已经复制到剪贴板')">14楼</strong>
													<em onclick="$('postmessage_462656').className='t_bigfont'">大</em>							<em onclick="$('postmessage_462656').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_462656').className='t_smallfont'">小</em>												发表于 2010-2-2 10:12&nbsp;																					<a href="viewthread.php?tid=36657&amp;page=1&amp;authorid=300" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_13"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_13"></div><div id="ad_thread4_13"></div>
						
						
																											<div id="postmessage_462656" class="t_msgfont">AutoProxy 官网因为 CNNIC 一文被 DDOS 服务器下线，以下是存档： <a href="https://docs.google.com/View?id=d5j3s7p_7f9r489fg" target="_blank">https://docs.google.com/View?id=d5j3s7p_7f9r489fg</a></div>

							
							
							
							
															<div id="post_rate_div_462656"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo462656_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=300" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=36657&amp;repquote=462656&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 462656)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_13"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid462675" summary="pid462675" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=300" target="_blank" id="userinfo462675" class="dropmenu" onmouseover="showMenu(this.id)">rationalcrow</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">拆呐拆呐不拆怎么成china</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=300">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=300&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_14" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum462675" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=36657&page=1#pid462675', '话题链接已经复制到剪贴板')">15楼</strong>
													<em onclick="$('postmessage_462675').className='t_bigfont'">大</em>							<em onclick="$('postmessage_462675').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_462675').className='t_smallfont'">小</em>												发表于 2010-2-2 10:23&nbsp;																					<a href="viewthread.php?tid=36657&amp;page=1&amp;authorid=300" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_14"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_14"></div><div id="ad_thread4_14"></div>
						
						
																											<div id="postmessage_462675" class="t_msgfont">发现有2条“Entrust.net Secure Server Certification Authority”，都处理掉</div>

							
							
							
							
															<div id="post_rate_div_462675"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo462675_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=300" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=36657&amp;repquote=462675&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 462675)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_14"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid462759" summary="pid462759" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=300" target="_blank" id="userinfo462759" class="dropmenu" onmouseover="showMenu(this.id)">rationalcrow</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">拆呐拆呐不拆怎么成china</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=300">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=300&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_15" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum462759" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=36657&page=1#pid462759', '话题链接已经复制到剪贴板')">16楼</strong>
													<em onclick="$('postmessage_462759').className='t_bigfont'">大</em>							<em onclick="$('postmessage_462759').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_462759').className='t_smallfont'">小</em>												发表于 2010-2-2 11:15&nbsp;																					<a href="viewthread.php?tid=36657&amp;page=1&amp;authorid=300" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_15"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_15"></div><div id="ad_thread4_15"></div>
						
						
																											<div id="postmessage_462759" class="t_msgfont">警告：CNNIC，我不信任你！——从“受信任的根证书”里赶走CNNIC（Win7/Vista/Xp）<br />
<br />
本文转自：<a href="http://felixcat.net/2010/01/throw-out-cnnic/#comment-970" target="_blank">http://felixcat.net/2010/01/throw-out-cnnic/#comment-970</a><br />
<br />
<font color="DarkOrange"><strong>注意：做到第9步时就不用关闭根证书自动更新了。</strong></font><br />
<br />
在Twitter上惊闻“微软把CNNIC列为根证书发布者”，赶紧Google一把，发现 Mozilla同样也已经在3.6版的Firefox里这么做了。<br />
出于对CNNIC深深的不信任，我决定将CNNIC ROOT从“受信任”的列表里赶出去。<br />
因为IE/Chrome采用微软的CA目录，而微软现在暂未将CNNIC加入，因此需要先从Firefox中导出这几个证书，再添加到Windows的 “不信任”列表(更新：现在可以直接从Windows里导入再导入了，操作类似)，以防范于未然。下面便是具体的步骤了（包括IE/Chrome /Firefox）：<br />
<br />
1、如果没有安装Firefox浏览器的3.6最新版，或者在下面的操作中没有找到相应的证书，可以从这里下载这三个证书，然后跳到第5 步：CNNICROOT.crt CNNICSSL.crt Entrust.netSecureServerCertificationAuthority.crt<br />
<br />
2、打开Firefox浏览器，工具(Tools)-&gt;选项(Options)-&gt;高级(Advanced)-&gt;加密 (Encryption)-&gt;查看证书(View Certificates)<br />
<img src="http://felixcat.net/wp-content/uploads/2010/01/2010-01-27-17-26-58.png" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
3、在证书机构(Authorites)标签页中找到”CNNIC“组的”CNNIC ROOT“项，按导出(Export)（备份到本地），然后删除 (Delete)。（RT JimmyXu:在Firefox里对自带根证书执行“删除”操作就相当于是禁用其所有目的，并不会将其删除。）<br />
<img src="http://felixcat.net/wp-content/uploads/2010/01/2010-01-27-17-29-47.png" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
4、在”Entrust.net“组中找到”Entrust.net Secure Server Certification Authority“(序列号37:4A:D2:43的)和”CNNIC SSL“证书，同样导出并删除。（注：Entrust.net这个也是验证CNNIC所用的证书）<br />
<img src="http://felixcat.net/wp-content/uploads/2010/01/2010-01-27-17-31-46.png" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
5、打开开始菜单-&gt;运行（或者直接按Win-R）<br />
<br />
6、输入certmgr.msc，打开Windows 的证书管理器。<br />
<br />
7、展开”不受信任的证书(Untrusted Certificates)“，右键单击其下”证书(Certificates)“项，在”所有任务(All Tasks)“子菜单下单击”导入(Import)…“<br />
<img src="http://felixcat.net/wp-content/uploads/2010/01/2010-01-27-17-33-09.png" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
8、分别找到刚才保存的三个证书，依次导入(Next-&gt;Browse…(找到相应文件)-&gt;Next-&gt;Next-&gt;Finish)。<br />
<br />
9、将导入的证书复制(Ctrl-C)，然后粘贴(Ctrl-V)到受信任的证书颁发者(Trusted Root Certification Authorities)中，然后在这个窗口中分别右键单击粘贴过来的3个证书，选择“属性(Properties)”，然后单击“停用这个证书的所有目的(Disable all purposes for this certificate)”。<br />
[attach]2270020[/attach]<br />
（感谢 Jimmy Xu 供图）<br />
<br />
想检验操作是否成功？在浏览器里访问 <a href="https://www.enum.cn/" target="_blank">https://www.enum.cn/</a> ，如果提示证书被拒绝，就证明操作成功了！<br />
<img src="http://felixcat.net/wp-content/uploads/2010/01/2010-01-27-17-34-19.png" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
<br />
<img src="http://felixcat.net/wp-content/uploads/2010/01/2010-01-27-17-35-16.png" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
<br />
<img src="http://felixcat.net/wp-content/uploads/2010/01/2010-01-27-17-36-22.png" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
<br />
不需要关闭自动更新<br />
<br />
参考资料：<a href="http://www.networkworld.com/community/node/17703" target="_blank">http://www.networkworld.com/community/node/17703</a></div>

							
							
							
							
															<div id="post_rate_div_462759"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo462759_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=300" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=36657&amp;repquote=462759&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 462759)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_15"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid462965" summary="pid462965" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6873" target="_blank" id="userinfo462965" class="dropmenu" onmouseover="showMenu(this.id)">萧易寒</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6873">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6873&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_16" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum462965" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=36657&page=1#pid462965', '话题链接已经复制到剪贴板')">17楼</strong>
													<em onclick="$('postmessage_462965').className='t_bigfont'">大</em>							<em onclick="$('postmessage_462965').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_462965').className='t_smallfont'">小</em>												发表于 2010-2-2 13:38&nbsp;																					<a href="viewthread.php?tid=36657&amp;page=1&amp;authorid=6873" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_16"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_16"></div><div id="ad_thread4_16"></div>
						
						
																											<div id="postmessage_462965" class="t_msgfont">顶作者，自己删除没有用的，还有99%的用户没有删除</div>

							
							
							
							
															<div id="post_rate_div_462965"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo462965_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=6873" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=36657&amp;repquote=462965&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 462965)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_16"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid463117" summary="pid463117" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10639" target="_blank" id="userinfo463117" class="dropmenu" onmouseover="showMenu(this.id)">reborn</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">嗷嗷嗷</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10639">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10639&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_17" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum463117" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=36657&page=1#pid463117', '话题链接已经复制到剪贴板')">18楼</strong>
													<em onclick="$('postmessage_463117').className='t_bigfont'">大</em>							<em onclick="$('postmessage_463117').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_463117').className='t_smallfont'">小</em>												发表于 2010-2-2 15:16&nbsp;																					<a href="viewthread.php?tid=36657&amp;page=1&amp;authorid=10639" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_17"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_17"></div><div id="ad_thread4_17"></div>
						
						
																											<div id="postmessage_463117" class="t_msgfont">这个要学习</div>

							
							
							
							
															<div id="post_rate_div_463117"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo463117_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=10639" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=36657&amp;repquote=463117&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 463117)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_17"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid463391" summary="pid463391" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=464" target="_blank" id="userinfo463391" class="dropmenu" onmouseover="showMenu(this.id)">Phillip</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">路边社特邀围观群众</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=464">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=464&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_18" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum463391" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=36657&page=1#pid463391', '话题链接已经复制到剪贴板')">19楼</strong>
													<em onclick="$('postmessage_463391').className='t_bigfont'">大</em>							<em onclick="$('postmessage_463391').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_463391').className='t_smallfont'">小</em>												发表于 2010-2-2 18:06&nbsp;																					<a href="viewthread.php?tid=36657&amp;page=1&amp;authorid=464" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_18"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_18"></div><div id="ad_thread4_18"></div>
													<h2>回复 6楼 萧易寒 的话题</h2>
						
						
																											<div id="postmessage_463391" class="t_msgfont">只要有人给相关机构写信, 让他们在新版本浏览器操作系统里去掉CNNIC的信任就行了</div>

							
							
							
							
															<div id="post_rate_div_463391"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo463391_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=464" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=36657&amp;repquote=463391&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 463391)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_18"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid463405" summary="pid463405" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=719" target="_blank" id="userinfo463405" class="dropmenu" onmouseover="showMenu(this.id)">Zenu</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">资深潜水员</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=719">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=719&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_19" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum463405" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=36657&page=1#pid463405', '话题链接已经复制到剪贴板')">20楼</strong>
													<em onclick="$('postmessage_463405').className='t_bigfont'">大</em>							<em onclick="$('postmessage_463405').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_463405').className='t_smallfont'">小</em>												发表于 2010-2-2 18:15&nbsp;																					<a href="viewthread.php?tid=36657&amp;page=1&amp;authorid=719" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_19"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_19"></div><div id="ad_thread4_19"></div>
						
						
																											<div id="postmessage_463405" class="t_msgfont">感谢!已经彻底禁用了CNNIC这个流氓...希望Entrust尽快吊销对流氓之信任...<br />
分享一个IE用户彻杀CNNIC的方法<br />
<a href="http://hi.baidu.com/litiejun/blog/item/8c6d38d8409a3f3e32fa1c73.html" target="_blank">http://hi.baidu.com/litiejun/blo ... 9a3f3e32fa1c73.html</a></div>

							
							
							
							
															<div id="post_rate_div_463405"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo463405_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=719" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=36657&amp;repquote=463405&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 463405)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_19"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid463566" summary="pid463566" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10733" target="_blank" id="userinfo463566" class="dropmenu" onmouseover="showMenu(this.id)">pillarchang</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10733">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10733&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_20" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum463566" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=36657&page=1#pid463566', '话题链接已经复制到剪贴板')">21楼</strong>
													<em onclick="$('postmessage_463566').className='t_bigfont'">大</em>							<em onclick="$('postmessage_463566').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_463566').className='t_smallfont'">小</em>												发表于 2010-2-2 20:18&nbsp;																					<a href="viewthread.php?tid=36657&amp;page=1&amp;authorid=10733" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_20"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_20"></div><div id="ad_thread4_20"></div>
						
						
																											<div id="postmessage_463566" class="t_msgfont">mark</div>

							
							
							
							
															<div id="post_rate_div_463566"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo463566_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=10733" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=36657&amp;repquote=463566&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 463566)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_20"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid463727" summary="pid463727" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=5186" target="_blank" id="userinfo463727" class="dropmenu" onmouseover="showMenu(this.id)">胺氰聚三郎</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">怪组员</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=5186">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=5186&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_21" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum463727" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=36657&page=1#pid463727', '话题链接已经复制到剪贴板')">22楼</strong>
													<em onclick="$('postmessage_463727').className='t_bigfont'">大</em>							<em onclick="$('postmessage_463727').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_463727').className='t_smallfont'">小</em>												发表于 2010-2-2 21:29&nbsp;																					<a href="viewthread.php?tid=36657&amp;page=1&amp;authorid=5186" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_21"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_21"></div><div id="ad_thread4_21"></div>
						
						
																											<div id="postmessage_463727" class="t_msgfont">* 菜单栏：工具/编辑-&gt;首选项-&gt;高级-&gt;加密-&gt;查看证书-&gt;证书机构(Authorites)<br />
&nbsp; &nbsp; * 这是一个很长的列表，按照字母顺序，你应该能找到一个叫着 &quot;CNNIC ROOT&quot; 的记录，就是这个东西，告诉 Firefox，我们不信任它！<br />
===================<br />
不理解<br />
我就没找到<br />
是电脑问题吗</div>

							
							
							
							
															<div id="post_rate_div_463727"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo463727_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=5186" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=36657&amp;repquote=463727&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 463727)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_21"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid463730" summary="pid463730" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=5186" target="_blank" id="userinfo463730" class="dropmenu" onmouseover="showMenu(this.id)">胺氰聚三郎</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">怪组员</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=5186">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=5186&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_22" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum463730" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=36657&page=1#pid463730', '话题链接已经复制到剪贴板')">23楼</strong>
													<em onclick="$('postmessage_463730').className='t_bigfont'">大</em>							<em onclick="$('postmessage_463730').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_463730').className='t_smallfont'">小</em>												发表于 2010-2-2 21:33&nbsp;																					<a href="viewthread.php?tid=36657&amp;page=1&amp;authorid=5186" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_22"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_22"></div><div id="ad_thread4_22"></div>
						
						
																											<div id="postmessage_463730" class="t_msgfont">是点<br />
工具——internet选项——内容——证书<br />
那里找吗</div>

							
							
							
							
															<div id="post_rate_div_463730"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo463730_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=5186" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=36657&amp;repquote=463730&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 463730)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_22"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid463775" summary="pid463775" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12068" target="_blank" id="userinfo463775" class="dropmenu" onmouseover="showMenu(this.id)">winddeer</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">天朝有风险，投胎须谨慎</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12068">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12068&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_23" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum463775" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=36657&page=1#pid463775', '话题链接已经复制到剪贴板')">24楼</strong>
													<em onclick="$('postmessage_463775').className='t_bigfont'">大</em>							<em onclick="$('postmessage_463775').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_463775').className='t_smallfont'">小</em>												发表于 2010-2-2 21:50&nbsp;																					<a href="viewthread.php?tid=36657&amp;page=1&amp;authorid=12068" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_23"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_23"></div><div id="ad_thread4_23"></div>
						
						
																											<div id="postmessage_463775" class="t_msgfont">开始——运行——certmgr.msc，然后，受信任的证书颁发机构，然后，cnnic root双击，然后，详细信息，然后 编辑属性， 最后下狠手，停用这个证书的所有目的！</div>

							
							
							
							
															<div id="post_rate_div_463775"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo463775_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=12068" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=36657&amp;repquote=463775&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 463775)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_23"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid463839" summary="pid463839" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=4292" target="_blank" id="userinfo463839" class="dropmenu" onmouseover="showMenu(this.id)">02304H</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">10001100000100B</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=4292">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=4292&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_24" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum463839" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=36657&page=1#pid463839', '话题链接已经复制到剪贴板')">25楼</strong>
													<em onclick="$('postmessage_463839').className='t_bigfont'">大</em>							<em onclick="$('postmessage_463839').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_463839').className='t_smallfont'">小</em>												发表于 2010-2-2 22:21&nbsp;																					<a href="viewthread.php?tid=36657&amp;page=1&amp;authorid=4292" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_24"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_24"></div><div id="ad_thread4_24"></div>
													<h2>回复 11楼 胺氰聚三郎 的话题</h2>
						
						
																											<div id="postmessage_463839" class="t_msgfont">你用的ie吧，那文里说的是firefox</div>

							
							
							
							
															<div id="post_rate_div_463839"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo463839_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=4292" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=36657&amp;repquote=463839&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 463839)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_24"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid464148" summary="pid464148" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6262" target="_blank" id="userinfo464148" class="dropmenu" onmouseover="showMenu(this.id)">unloop</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">不特别的一人</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6262">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6262&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_25" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum464148" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=36657&page=1#pid464148', '话题链接已经复制到剪贴板')">26楼</strong>
													<em onclick="$('postmessage_464148').className='t_bigfont'">大</em>							<em onclick="$('postmessage_464148').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_464148').className='t_smallfont'">小</em>												发表于 2010-2-3 06:07&nbsp;																					<a href="viewthread.php?tid=36657&amp;page=1&amp;authorid=6262" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_25"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_25"></div><div id="ad_thread4_25"></div>
						
						
																											<div id="postmessage_464148" class="t_msgfont">删除Entrust 的CA后，这个网站的加密访问受到影响 <a href="http://www.worldcommunitygrid.org/" target="_blank">http://www.worldcommunitygrid.org/</a><br />
是无奈的连带伤害么～～</div>

							
							
							
							
															<div id="post_rate_div_464148"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo464148_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=6262" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=36657&amp;repquote=464148&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 464148)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_25"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid464332" summary="pid464332" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2238" target="_blank" id="userinfo464332" class="dropmenu" onmouseover="showMenu(this.id)">过客</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2238">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2238&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_26" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum464332" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=36657&page=1#pid464332', '话题链接已经复制到剪贴板')">27楼</strong>
													<em onclick="$('postmessage_464332').className='t_bigfont'">大</em>							<em onclick="$('postmessage_464332').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_464332').className='t_smallfont'">小</em>												发表于 2010-2-3 10:33&nbsp;																					<a href="viewthread.php?tid=36657&amp;page=1&amp;authorid=2238" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_26"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_26"></div><div id="ad_thread4_26"></div>
						
						
																											<div id="postmessage_464332" class="t_msgfont">按给出的方法做了，杀不死这个流氓，当时清除干净一重启又出现了！－－IE浏览器</div>

							
							
							
							
															<div id="post_rate_div_464332"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo464332_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=2238" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=36657&amp;repquote=464332&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 464332)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_26"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid464784" summary="pid464784" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=202" target="_blank" id="userinfo464784" class="dropmenu" onmouseover="showMenu(this.id)">investigate</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">围观圣手</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=202">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=202&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_27" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum464784" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=36657&page=1#pid464784', '话题链接已经复制到剪贴板')">28楼</strong>
													<em onclick="$('postmessage_464784').className='t_bigfont'">大</em>							<em onclick="$('postmessage_464784').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_464784').className='t_smallfont'">小</em>												发表于 2010-2-3 15:12&nbsp;																					<a href="viewthread.php?tid=36657&amp;page=1&amp;authorid=202" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_27"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_27"></div><div id="ad_thread4_27"></div>
						
						
																											<div id="postmessage_464784" class="t_msgfont">找不到。。。。。</div>

							
							
							
							
															<div id="post_rate_div_464784"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo464784_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=202" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=36657&amp;repquote=464784&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 464784)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_27"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid464855" summary="pid464855" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=9689" target="_blank" id="userinfo464855" class="dropmenu" onmouseover="showMenu(this.id)">精彩在wall</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=9689">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=9689&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_28" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum464855" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=36657&page=1#pid464855', '话题链接已经复制到剪贴板')">29楼</strong>
													<em onclick="$('postmessage_464855').className='t_bigfont'">大</em>							<em onclick="$('postmessage_464855').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_464855').className='t_smallfont'">小</em>												发表于 2010-2-3 15:46&nbsp;																					<a href="viewthread.php?tid=36657&amp;page=1&amp;authorid=9689" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_28"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_28"></div><div id="ad_thread4_28"></div>
						
						
																											<div id="postmessage_464855" class="t_msgfont">我试了好几次，按照文中的步骤，但是一旦访问那2个验证网站，CNNIC root证书又会出现在信任证书列表里，烦不胜烦。</div>

							
							
							
							
															<div id="post_rate_div_464855"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo464855_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=9689" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=36657&amp;repquote=464855&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 464855)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_28"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid464949" summary="pid464949" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6743" target="_blank" id="userinfo464949" class="dropmenu" onmouseover="showMenu(this.id)">鼠标土豆</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">古典自由主义土豆</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6743">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6743&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_29" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum464949" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=36657&page=1#pid464949', '话题链接已经复制到剪贴板')">30楼</strong>
													<em onclick="$('postmessage_464949').className='t_bigfont'">大</em>							<em onclick="$('postmessage_464949').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_464949').className='t_smallfont'">小</em>												发表于 2010-2-3 16:47&nbsp;																					<a href="viewthread.php?tid=36657&amp;page=1&amp;authorid=6743" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_29"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_29"></div><div id="ad_thread4_29"></div>
						
						
																											<div id="postmessage_464949" class="t_msgfont">请教高手：刚才把CNNIC的证书全开除了，结果163的邮箱就不能用SSL安全登录了，那么火狐浏览器会自动加密吗？</div>

							
							
							
							
															<div id="post_rate_div_464949"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo464949_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=6743" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=36657&amp;repquote=464949&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 464949)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_29"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid466131" summary="pid466131" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7" target="_blank" id="userinfo466131" class="dropmenu" onmouseover="showMenu(this.id)">张书记</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">http://twitter.com/SecretaryZhang</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_30" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum466131" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=36657&page=1#pid466131', '话题链接已经复制到剪贴板')">31楼</strong>
													<em onclick="$('postmessage_466131').className='t_bigfont'">大</em>							<em onclick="$('postmessage_466131').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_466131').className='t_smallfont'">小</em>												发表于 2010-2-4 12:29&nbsp;																					<a href="viewthread.php?tid=36657&amp;page=1&amp;authorid=7" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_30"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_30"></div><div id="ad_thread4_30"></div>
						
						
																											<div id="postmessage_466131" class="t_msgfont">RT @WCM: 手机号被 CNNIC 翻出来了，聊了一个小时，对方很客气。如果我要去喝茶，已做好准备。</div>

							
							
							
							
															<div id="post_rate_div_466131"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo466131_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=7" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=36657&amp;repquote=466131&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 466131)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_30"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid468973" summary="pid468973" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8115" target="_blank" id="userinfo468973" class="dropmenu" onmouseover="showMenu(this.id)">OpenBL</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8115">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8115&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_31" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum468973" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=36657&page=1#pid468973', '话题链接已经复制到剪贴板')">32楼</strong>
													<em onclick="$('postmessage_468973').className='t_bigfont'">大</em>							<em onclick="$('postmessage_468973').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_468973').className='t_smallfont'">小</em>												发表于 2010-2-6 02:50&nbsp;																					<a href="viewthread.php?tid=36657&amp;page=1&amp;authorid=8115" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_31"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_31"></div><div id="ad_thread4_31"></div>
													<h2>回复 19楼 Phillip 的话题</h2>
						
						
																											<div id="postmessage_468973" class="t_msgfont">微软会鸟你屁民，火狐都难</div>

							
							
							
							
															<div id="post_rate_div_468973"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo468973_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=8115" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=36657&amp;repquote=468973&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 468973)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_31"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid469207" summary="pid469207" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10190" target="_blank" id="userinfo469207" class="dropmenu" onmouseover="showMenu(this.id)">wkh</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10190">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10190&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_32" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum469207" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=36657&page=1#pid469207', '话题链接已经复制到剪贴板')">33楼</strong>
													<em onclick="$('postmessage_469207').className='t_bigfont'">大</em>							<em onclick="$('postmessage_469207').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_469207').className='t_smallfont'">小</em>												发表于 2010-2-6 13:13&nbsp;																					<a href="viewthread.php?tid=36657&amp;page=1&amp;authorid=10190" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_32"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_32"></div><div id="ad_thread4_32"></div>
						
						
																											<div id="postmessage_469207" class="t_msgfont">学习了</div>

							
							
							
							
															<div id="post_rate_div_469207"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo469207_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=10190" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=36657&amp;repquote=469207&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 469207)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_32"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid469923" summary="pid469923" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 <a name="lastpost"></a>					<cite>											<a href="space.php?uid=9617" target="_blank" id="userinfo469923" class="dropmenu" onmouseover="showMenu(this.id)">paradox</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=9617">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=9617&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_33" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum469923" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=36657&page=1#pid469923', '话题链接已经复制到剪贴板')">34楼</strong>
													<em onclick="$('postmessage_469923').className='t_bigfont'">大</em>							<em onclick="$('postmessage_469923').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_469923').className='t_smallfont'">小</em>												发表于 2010-2-6 22:50&nbsp;																					<a href="viewthread.php?tid=36657&amp;page=1&amp;authorid=9617" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_33"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_33"></div><div id="ad_thread4_33"></div>
						
						
																											<div id="postmessage_469923" class="t_msgfont">求教，chrome怎么改呢？</div>

							
							
							
							
															<div id="post_rate_div_469923"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo469923_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=9617" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=36657&amp;repquote=469923&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 469923)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_33"></div>				</div>
			</td>
		</tr>
		</table>
		</div>
</form>





<div class="pages_btns">
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=36657&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=36657&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
				<span class="postbtn" id="newspecialtmp" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=36657&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

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

	<form method="post" id="postform" action="post.php?action=reply&amp;fid=26&amp;tid=36657&amp;extra=&amp;replysubmit=yes" onSubmit="return validate(this)">
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
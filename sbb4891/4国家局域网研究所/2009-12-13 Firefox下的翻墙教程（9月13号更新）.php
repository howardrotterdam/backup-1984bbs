<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<title>Firefox下的翻墙教程（9月13号更新） - 国家局域网研究所 -  1984bbs.com </title>
<meta name="keywords" content="" />
<meta name="MSSmartTagsPreventParsing" content="True" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<link rel="archives" title="1984bbs.com" href="https://1984bbs.com/archiver/" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_viewthread.css" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_common.css" />
<script type="text/javascript">
	var discuz_uid = 13019;var IMGDIR = 'images/default';var attackevasive = '0';var gid = 0;var STYLEID = '1';
	gid = parseInt('3');var fid = parseInt('26');var tid = parseInt('52586');
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
			<p><a href="index.php" id="forumlist" onmouseover="showMenu(this.id)" class="dropmenu">1984bbs.com</a> &raquo; <a href="forumdisplay.php?fid=26">国家局域网研究所</a> &raquo; Firefox下的翻墙教程（9月13号更新）</p>
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
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=52586&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=52586&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
				<span class="postbtn" id="newspecial" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=52586&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

	<ul class="popupmenu_popup newspecialmenu" id="newspecial_menu" style="display: none">
		<li><a href="post.php?action=newthread&amp;fid=26&amp;extra=">发新话题</a></li>
		<li class="poll"><a href="post.php?action=newthread&amp;fid=26&amp;extra=&amp;special=1">发布投票</a></li>													</ul>

<form method="post" name="modactions">
	<input type="hidden" name="formhash" value="823c9fa2" />
	<div class="mainbox viewthread">
		<span class="headactions">
					<a href="my.php?item=favorites&amp;tid=52586" id="ajax_favorite" onclick="ajaxmenu(event, this.id, 3000, 0)">收藏</a>
			<a href="my.php?item=subscriptions&amp;subadd=52586" id="ajax_subscription" onclick="ajaxmenu(event, this.id, 3000, null, 0)">订阅</a>
			<a href="misc.php?action=emailfriend&amp;tid=52586" id="emailfriend" onclick="ajaxmenu(event, this.id, 9000000, null, 0)">推荐</a>
				<a href="viewthread.php?action=printable&amp;tid=52586" target="_blank" class="notabs">打印</a>
				</span>
		<h1>Firefox下的翻墙教程（9月13号更新）		</h1>
				<ins>
						<a href="misc.php?action=viewthreadmod&amp;tid=52586" title="主题操作记录" target="_blank">本主题由 库存袈裟 于 2010-9-14 13:10 合并</a>								</ins>
							<table id="pid370377" summary="pid370377" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7006" target="_blank" id="userinfo370377" class="dropmenu" onmouseover="showMenu(this.id)">liu114365143</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">@liulei</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7006">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7006&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_0" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum370377" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=52586&page=1#pid370377', '话题链接已经复制到剪贴板')">1楼</strong>
													<em onclick="$('postmessage_370377').className='t_bigfont'">大</em>							<em onclick="$('postmessage_370377').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_370377').className='t_smallfont'">小</em>												发表于 2009-12-13 08:09&nbsp;																					<a href="viewthread.php?tid=52586&amp;page=1&amp;authorid=7006" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_0"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_0"></div><div id="ad_thread4_0"></div>
													<h2>Firefox下的翻墙教程（9月13号更新）</h2>
						
						
																											<div id="postmessage_370377" class="t_msgfont"><a href="http://www.bullock.cn/blogs/liulei/archives/124180.aspx" target="_blank">http://www.bullock.cn/blogs/liulei/archives/124180.aspx</a><br />
“那些时不时就在推上吼Fuck GFW的人，都是懒蛋。学学翻墙那么费劲吗？现在的“翻墙教程”都傻瓜到令人发指的地步了。”——今天在推上写的。<br />
如果你真不愿（哪怕是尝试一下）使用Firefox（且固执的说，“我已经习惯了IE或360浏览器，不想再换了，麻烦！”），就不用继续看下去了。<br />
一、安装并导入Firefox配置文件夹<br />
1、下载Firefox并安装：<a href="http://www.mozilla.com/en-US/products/download.html?product=firefox-3.6.9&amp;os=win&amp;lang=zh-CN" target="_blank">Firefox(3.6.9)</a> <br />
2、下载我的这个<a href="http://ifile.it/lm2i4bu" target="_blank"> Firefox配置文件夹</a>，解压后放到某个非系统盘里。<br />
问：如何下载这个Firefox配置文件夹？<br />
答：点击前面的链接，在随后进入的页面下端你讲看到“request download ticket”按钮，点它，稍后它会变成“download”按钮，再点即可。（下同）<br />
3、对Firefox进行“自定义”设置，具体步骤如下：<br />
a）关闭所有已运行的Firefox浏览器窗口后，点“开始”——“运行”——在“打开”中输入“firefox –P”（注意，firefox与减号之间要有一个空格）如下图。&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<br />
<img src="http://www.bullock.cn/blogs/liulei/files/%E5%9B%BE%E7%89%871.png" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
b）在“选择用户配置文件”窗口中点击“创建配置文件”。如下图。&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;<br />
<img src="http://www.bullock.cn/blogs/liulei/files/%E5%9B%BE%E7%89%872.png" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
c）按照以下三个图中的标记的步骤完成操作。其中，1处可以随意命名，如“NewProfile”。<br />
<img src="http://www.bullock.cn/blogs/liulei/files/%E5%9B%BE%E7%89%873.png" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
<img src="http://www.bullock.cn/blogs/liulei/files/%E5%9B%BE%E7%89%874.png" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
<img src="http://www.bullock.cn/blogs/liulei/files/%E5%9B%BE%E7%89%875.png" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
二、“喂鸽子”<br />
首先，<a href="http://ifile.it/hncm9zf" target="_blank">下载小鸽子</a>。解压后，把这个文件夹放入某个非系统盘，右击鸽子fg7.04p——“发送到桌面快捷方式”。以后在打开Firefox之前先启动它就行了。PS:我在设置时让小鸽子“开机启动”了，你也可以在设置里把该项前的对勾点掉。<br />
三、关于“福”<br />
按照第一部分的说明配置了Firefox后，你会在Firefox浏览器窗口右下端的状态栏里看一个红色“福”字。在以后碰到无法访问的网站时，如，<a href="http://www.aiweiweiblog.com" target="_blank">www.aiweiweiblog.com</a>，右击“福”，选择“对aiweweiblog.com全站启用代理”，刷新后即可正常访问。<br />
至此，你已经成功设置好“Firefox +小鸽子”翻墙套装了。让小鸽子带你飞吧。墙，对于你，已成往事。<br />
如果你对这个“手把手教程”还有问题，可以在Twitter上给我留言，我是<a href="https://twitter.com/liulei" target="_blank">@liulei</a> 。<br />
最后，我的Firefox个人配置文件夹里已经包含了很多非常实用的扩展，详细使用方法可以到<a href="http://www.lixiaolai.com/" target="_blank">笑来老师</a>（<a href="https://twitter.com/xiaolai" target="_blank">@xiaolai</a>）的网站去看。</div>

							
							
							
							
															<div id="post_rate_div_370377"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo370377_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://www.twitter.com/liulei" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=7006" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=52586&amp;repquote=370377&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 370377)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_0"></div>				</div>
			</td>
		</tr>
		</table>
		</div><div class="ad_column" id="ad_interthread"><a href="/viewthread.php?tid=54699" target="_blank" style="color:red;">1984bbs是一个非营利项目，它需要您的捐助！</font></a>		</div>
	<div class="mainbox viewthread">
			<table id="pid371883" summary="pid371883" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10656" target="_blank" id="userinfo371883" class="dropmenu" onmouseover="showMenu(this.id)">lxh1943</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10656">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10656&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_1" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum371883" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=52586&page=1#pid371883', '话题链接已经复制到剪贴板')">2楼</strong>
													<em onclick="$('postmessage_371883').className='t_bigfont'">大</em>							<em onclick="$('postmessage_371883').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_371883').className='t_smallfont'">小</em>												发表于 2009-12-13 23:48&nbsp;																					<a href="viewthread.php?tid=52586&amp;page=1&amp;authorid=10656" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_1"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_1"></div><div id="ad_thread4_1"></div>
						
						
																											<div id="postmessage_371883" class="t_msgfont">首页看见曾哥了&nbsp; &nbsp;真潇洒</div>

							
							
							
							
															<div id="post_rate_div_371883"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo371883_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=10656" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=52586&amp;repquote=371883&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 371883)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_1"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid372921" summary="pid372921" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=202" target="_blank" id="userinfo372921" class="dropmenu" onmouseover="showMenu(this.id)">investigate</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">围观圣手</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=202">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=202&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_2" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum372921" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=52586&page=1#pid372921', '话题链接已经复制到剪贴板')">3楼</strong>
													<em onclick="$('postmessage_372921').className='t_bigfont'">大</em>							<em onclick="$('postmessage_372921').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_372921').className='t_smallfont'">小</em>												发表于 2009-12-14 15:32&nbsp;																					<a href="viewthread.php?tid=52586&amp;page=1&amp;authorid=202" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_2"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_2"></div><div id="ad_thread4_2"></div>
						
						
																											<div id="postmessage_372921" class="t_msgfont">已经被删除了</div>

							
							
							
							
															<div id="post_rate_div_372921"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo372921_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=202" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=52586&amp;repquote=372921&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 372921)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_2"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid600409" summary="pid600409" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=11092" target="_blank" id="userinfo600409" class="dropmenu" onmouseover="showMenu(this.id)">赵三皮</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=11092">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=11092&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_3" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum600409" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=52586&page=1#pid600409', '话题链接已经复制到剪贴板')">4楼</strong>
													<em onclick="$('postmessage_600409').className='t_bigfont'">大</em>							<em onclick="$('postmessage_600409').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_600409').className='t_smallfont'">小</em>												发表于 2010-5-6 12:45&nbsp;																					<a href="viewthread.php?tid=52586&amp;page=1&amp;authorid=11092" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_3"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_3"></div><div id="ad_thread4_3"></div>
						
						
																											<div id="postmessage_600409" class="t_msgfont">用PUFF很多时候连不上呢？还有其它方法吗？</div>

							
							
							
							
															<div id="post_rate_div_600409"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo600409_menu" style="display: none;">
										<div class="imicons">
												<a href="http://wpa.qq.com/msgrd?V=1&amp;Uin=11312542&amp;Site=1984bbs.com&amp;Menu=yes" target="_blank"><img src="images/default/qq.gif" alt="QQ" /></a>																		<script type="text/javascript">document.write('<a target="_blank" href="http://amos1.taobao.com/msg.ww?v=2&amp;uid='+encodeURIComponent('耳_朵')+'&amp;s=2"><img src="images/default/taobao.gif" alt="阿里旺旺" /></a>');</script>					</div>
										<dl></dl>
										<p><a href="space.php?uid=11092" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=52586&amp;repquote=600409&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 600409)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_3"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid735609" summary="pid735609" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1960" target="_blank" id="userinfo735609" class="dropmenu" onmouseover="showMenu(this.id)">库存袈裟</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">@bruceku 想象力比知识更重要。</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1960">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1960&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_4" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum735609" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=52586&page=1#pid735609', '话题链接已经复制到剪贴板')">5楼</strong>
													<em onclick="$('postmessage_735609').className='t_bigfont'">大</em>							<em onclick="$('postmessage_735609').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_735609').className='t_smallfont'">小</em>												发表于 2010-7-12 15:32&nbsp;																					<a href="viewthread.php?tid=52586&amp;page=1&amp;authorid=1960" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_4"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_4"></div><div id="ad_thread4_4"></div>
						
						
																											<div id="postmessage_735609" class="t_msgfont">曾经写过一篇“手把手教你翻墙（Firefox版）”，效果不错，据我所知，它至少帮助了两位童鞋（其中一个就是勤奋好学的王伟伟童鞋。向王伟伟童鞋学习！^_^）学会了用“<strong>Firefox + </strong><strong>小鸽子</strong>”顺畅的翻墙。希望这次能让还不会翻墙或不能方便翻墙的你了解如何跳出Chinternet（中华人民共和网）进入Internet。<br />
说明一点：自从开始用Firefox以来，GFW对我从未再起过作用（回想以前自己上不了Twitter急的抓头挠腮的样子，真想对当时的自己说，“让你用IE，活该！”），而且从未遇到过“反向撞墙”（开“小鸽子”后，就无法正常访问国内的网站了，这种现象叫“翻墙撞墙”）。所以，在这里我只谈自己非常喜欢的“<strong>Firefox + </strong><strong>小鸽子</strong>”翻墙方法。<strong>如果你真不愿</strong><strong>（哪怕是尝试一下）使用Firefox（且固执的说，“我已经习惯了IE或360浏览器，不想再换了，麻烦！”），就不用继续看下去了。</strong><br />
一、装置Firefox<br />
1、下载Firefox并安装：<a href="http://www.mozilla.com/en-US/products/download.html?product=firefox-3.6.6&amp;os=win&amp;lang=zh-CN" target="_blank">Firefox(3.6.6)</a><a href="http://www.mozilla.com/en-US/products/download.html?product=firefox-3.6.6&amp;os=win&amp;lang=zh-CN" target="_blank">[/url]<br />
2、下载我的这个[url=http://ifile.it/9sealvp]Firefox</a><a href="http://ifile.it/9sealvp" target="_blank">自定义版</a>，解压后放到某个非系统盘里。<br />
&nbsp; &nbsp;问：如何下载这个<a href="http://ifile.it/9sealvp" target="_blank">Firefox</a><a href="http://ifile.it/9sealvp" target="_blank">自定义版</a>？<br />
&nbsp; &nbsp;答：点击前面的链接，在随后进入的页面下端你讲看到“request download ticket”按钮，点它，稍后它会变成“download”按钮，再点即可。<br />
3、对Firefox进行“自定义”设置，具体步骤如下：<br />
a）关闭所有已运行的Firefox浏览器窗口后，点“开始”——“运行”——在“打开”中输入“firefox –P”（注意，firefox与减号之间要空格，P一定要大写）如下图。&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;<br />
<img src="http://www.bullock.cn/blogs/liulei/files/1-1146.bmp" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
b）在“选择用户配置文件”窗口中点击“创建配置文件”。如下图。&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<br />
<img src="http://www.bullock.cn/blogs/liulei/files/2-3314.bmp" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
c）按照以下三个图中的标记的步骤完成操作。其中，1处可以随意命名，如“NewProfile”。<br />
<img src="http://www.bullock.cn/blogs/liulei/files/3-8454.bmp" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
<img src="http://www.bullock.cn/blogs/liulei/files/4-5786.bmp" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
<img src="http://www.bullock.cn/blogs/liulei/files/5-9708.bmp" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
二、“喂鸽子”<br />
1、 <a href="http://ifile.it/cosjhrw" target="_blank">下载“小鸽子”</a>。解压后，你会看到两只鸽子和一把金锁，每一个都能用。<br />
2、设置<a href="http://ifile.it/cosjhrw" target="_blank">“小鸽子”</a>：<br />
&nbsp; &nbsp; 我们这里以鸽子7.00p为例，进行设置。解压后，放入某个非系统盘，右击鸽子7.00P——“发送到桌面快捷方式”。然后运行。运行后，在“设置”一项里，如下图，把“程序退出时自动清除IE的历史记录”、“程序启动时不自动打开浏览器”、“程序启动时跳过代理设置”和“不使用IE不设置IE代理”这几项前面都打上对勾。每次运行小鸽子后，把它最小化（它将自动缩小到系统托盘），就好了。 <br />
<img src="http://www.bullock.cn/blogs/liulei/files/7-9472.bmp" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
<strong>PS：</strong>Firefox浏览器窗口下端的状态栏里有一个红色“<strong>福</strong>”字。单击它，你将看到如下图。相关的设置已经完成（无需再设置了）。但以后，如果你遇到某个网站无法访问，如，牛博国际bullogger.com，你通过“增加规则”把bullogger.com粘贴到“自定义规则”后，确定即可。<br />
<img src="http://www.bullock.cn/blogs/liulei/files/6-2607.bmp" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
“自定义规则里”我曾添加过这些：<br />
yting.com<br />
chinesepen.org<br />
twibbon.com<br />
science.discovery.com<br />
video.google.com<br />
overseas.btchina.net<br />
huping.net<br />
1bao.org<br />
zaobao.com<br />
bt.tjgame.enorth.com.cn<br />
aoisola.cocolog-nifty.com<br />
jeffreymiron.com<br />
nature.com<br />
twivert.com<br />
youmeworks.com<br />
log.keso.cn<br />
w.sns.ly<br />
foursquare.com<br />
live.neverforget8964.org<br />
zh-cn.justin.tv<br />
hootsuite.com<br />
bullogger.com<br />
spreadsheets.google.com<br />
laowai-talk.com<br />
jidao.net<br />
docs.google.com<br />
wordpress.com<br />
coolaler.com<br />
img2.pict.com<br />
dingtv.com<br />
youthforhumanrights.org<br />
whackmaterial.com<br />
coay.com<br />
howtonetworking.com<br />
twitgoo.com<br />
southparkstudios.com<br />
myvideo.de<br />
forum-network.org<br />
taweet.com<br />
<strong>至此，你已经成功设置好“Firefox + 小鸽子”翻墙套装了。让小鸽子带你飞吧。墙，对于你，已成往事。</strong><br />
如果你对这个“手把手教程”还有问题，在下面留言吧。<br />
最后，我还是要再一次谢谢<a href="http://www.lixiaolai.com/" target="_blank">笑来老师</a>（<a href="https://twitter.com/xiaolai" target="_blank">@xiaolai</a>）。</div>

							
							
							
							
															<div id="post_rate_div_735609"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo735609_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1960" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=52586&amp;repquote=735609&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 735609)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_4"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid736499" summary="pid736499" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7497" target="_blank" id="userinfo736499" class="dropmenu" onmouseover="showMenu(this.id)">mafanpk</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7497">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7497&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_5" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum736499" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=52586&page=1#pid736499', '话题链接已经复制到剪贴板')">6楼</strong>
													<em onclick="$('postmessage_736499').className='t_bigfont'">大</em>							<em onclick="$('postmessage_736499').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_736499').className='t_smallfont'">小</em>												发表于 2010-7-13 02:32&nbsp;																					<a href="viewthread.php?tid=52586&amp;page=1&amp;authorid=7497" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_5"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_5"></div><div id="ad_thread4_5"></div>
						
						
																											<div id="postmessage_736499" class="t_msgfont">马克</div>

							
							
							
							
															<div id="post_rate_div_736499"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo736499_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=7497" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=52586&amp;repquote=736499&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 736499)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_5"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid736563" summary="pid736563" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=11493" target="_blank" id="userinfo736563" class="dropmenu" onmouseover="showMenu(this.id)">gzlxd</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">Twitter/@gzlxd</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=11493">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=11493&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_6" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum736563" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=52586&page=1#pid736563', '话题链接已经复制到剪贴板')">7楼</strong>
													<em onclick="$('postmessage_736563').className='t_bigfont'">大</em>							<em onclick="$('postmessage_736563').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_736563').className='t_smallfont'">小</em>												发表于 2010-7-13 08:30&nbsp;																					<a href="viewthread.php?tid=52586&amp;page=1&amp;authorid=11493" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_6"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_6"></div><div id="ad_thread4_6"></div>
						
						
																											<div id="postmessage_736563" class="t_msgfont">留个记号</div>

							
							
							
							
															<div id="post_rate_div_736563"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo736563_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=11493" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=52586&amp;repquote=736563&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 736563)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_6"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid736566" summary="pid736566" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=16795" target="_blank" id="userinfo736566" class="dropmenu" onmouseover="showMenu(this.id)">风来疏竹</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=16795">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=16795&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_7" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum736566" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=52586&page=1#pid736566', '话题链接已经复制到剪贴板')">8楼</strong>
													<em onclick="$('postmessage_736566').className='t_bigfont'">大</em>							<em onclick="$('postmessage_736566').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_736566').className='t_smallfont'">小</em>												发表于 2010-7-13 08:31&nbsp;																					<a href="viewthread.php?tid=52586&amp;page=1&amp;authorid=16795" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_7"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_7"></div><div id="ad_thread4_7"></div>
						
						
																											<div id="postmessage_736566" class="t_msgfont">谢谢鸟~~~</div>

							
							
							
							
															<div id="post_rate_div_736566"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo736566_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=16795" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=52586&amp;repquote=736566&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 736566)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_7"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid736773" summary="pid736773" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1906" target="_blank" id="userinfo736773" class="dropmenu" onmouseover="showMenu(this.id)">大祥云</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">松下问童子　　　　　　　　言师采药去　　　　　　　　只在此山中　　　　　　　　云深不知处</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1906">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1906&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_8" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum736773" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=52586&page=1#pid736773', '话题链接已经复制到剪贴板')">9楼</strong>
													<em onclick="$('postmessage_736773').className='t_bigfont'">大</em>							<em onclick="$('postmessage_736773').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_736773').className='t_smallfont'">小</em>												发表于 2010-7-13 10:59&nbsp;																					<a href="viewthread.php?tid=52586&amp;page=1&amp;authorid=1906" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_8"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_8"></div><div id="ad_thread4_8"></div>
						
						
																											<div id="postmessage_736773" class="t_msgfont">我更爱用X号鸽子，很少用P号鸽子，X号的鸽子可以指定浏览器~~~^_^</div>

							
							
							
							
															<div id="post_rate_div_736773"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo736773_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1906" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=52586&amp;repquote=736773&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 736773)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_8"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid748356" summary="pid748356" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7497" target="_blank" id="userinfo748356" class="dropmenu" onmouseover="showMenu(this.id)">mafanpk</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7497">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7497&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_9" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum748356" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=52586&page=1#pid748356', '话题链接已经复制到剪贴板')">10楼</strong>
													<em onclick="$('postmessage_748356').className='t_bigfont'">大</em>							<em onclick="$('postmessage_748356').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_748356').className='t_smallfont'">小</em>												发表于 2010-7-19 15:02&nbsp;																					<a href="viewthread.php?tid=52586&amp;page=1&amp;authorid=7497" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_9"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_9"></div><div id="ad_thread4_9"></div>
						
						
																											<div id="postmessage_748356" class="t_msgfont">已用这方法安装 可是在用谷歌HK搜索诸如“共产党”此类的敏感词 出来是空白的窗口</div>

							
							
							
							
															<div id="post_rate_div_748356"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo748356_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=7497" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=52586&amp;repquote=748356&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 748356)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_9"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid748797" summary="pid748797" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=16535" target="_blank" id="userinfo748797" class="dropmenu" onmouseover="showMenu(this.id)">polotu</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">@polotu</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=16535">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=16535&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_10" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum748797" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=52586&page=1#pid748797', '话题链接已经复制到剪贴板')">11楼</strong>
													<em onclick="$('postmessage_748797').className='t_bigfont'">大</em>							<em onclick="$('postmessage_748797').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_748797').className='t_smallfont'">小</em>												发表于 2010-7-19 18:20&nbsp;																					<a href="viewthread.php?tid=52586&amp;page=1&amp;authorid=16535" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_10"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_10"></div><div id="ad_thread4_10"></div>
						
						
																											<div id="postmessage_748797" class="t_msgfont">为什么要用Firefox自定义版？原有的firefox浏览器不行么？<br />
<br />
我现在使用自由门7.00仍然打不开很多网页<br />
<br />
----------------------问题已解决，是autoproxy没设置好。。。<br />
<br />
[<i> 本帖最后由 polotu 于 2010-7-19 19:17 编辑 </i>]</div>

							
							
							
							
															<div id="post_rate_div_748797"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo748797_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=16535" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=52586&amp;repquote=748797&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 748797)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_10"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid785496" summary="pid785496" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=17659" target="_blank" id="userinfo785496" class="dropmenu" onmouseover="showMenu(this.id)">爱的房子</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=17659">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=17659&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_11" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum785496" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=52586&page=1#pid785496', '话题链接已经复制到剪贴板')">12楼</strong>
													<em onclick="$('postmessage_785496').className='t_bigfont'">大</em>							<em onclick="$('postmessage_785496').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_785496').className='t_smallfont'">小</em>												发表于 2010-8-16 18:03&nbsp;																					<a href="viewthread.php?tid=52586&amp;page=1&amp;authorid=17659" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_11"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_11"></div><div id="ad_thread4_11"></div>
						
						
																											<div id="postmessage_785496" class="t_msgfont">拥抱一下</div>

							
							
							
							
															<div id="post_rate_div_785496"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo785496_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=17659" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=52586&amp;repquote=785496&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 785496)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_11"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid787082" summary="pid787082" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=18019" target="_blank" id="userinfo787082" class="dropmenu" onmouseover="showMenu(this.id)">后凤凰</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=18019">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=18019&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_12" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum787082" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=52586&page=1#pid787082', '话题链接已经复制到剪贴板')">13楼</strong>
													<em onclick="$('postmessage_787082').className='t_bigfont'">大</em>							<em onclick="$('postmessage_787082').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_787082').className='t_smallfont'">小</em>												发表于 2010-8-18 08:56&nbsp;																					<a href="viewthread.php?tid=52586&amp;page=1&amp;authorid=18019" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_12"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_12"></div><div id="ad_thread4_12"></div>
						
						
																											<div id="postmessage_787082" class="t_msgfont">为什么我什么都没有设置&nbsp; &nbsp;也可以用呢&nbsp; &nbsp; 只是把软件都安装了一遍就可以用了啊&nbsp;&nbsp;有没有什么风险呢？</div>

							
							
							
							
															<div id="post_rate_div_787082"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo787082_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=18019" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=52586&amp;repquote=787082&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 787082)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_12"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid829219" summary="pid829219" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1960" target="_blank" id="userinfo829219" class="dropmenu" onmouseover="showMenu(this.id)">库存袈裟</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">@bruceku 想象力比知识更重要。</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1960">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1960&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_13" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum829219" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=52586&page=1#pid829219', '话题链接已经复制到剪贴板')">14楼</strong>
													<em onclick="$('postmessage_829219').className='t_bigfont'">大</em>							<em onclick="$('postmessage_829219').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_829219').className='t_smallfont'">小</em>												发表于 2010-9-14 13:09&nbsp;																					<a href="viewthread.php?tid=52586&amp;page=1&amp;authorid=1960" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_13"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_13"></div><div id="ad_thread4_13"></div>
													<h2>LZ这帖子发的可真懒</h2>
						
						
																											<div id="postmessage_829219" class="t_msgfont">“那些时不时就在推上吼Fuck GFW的人，都是懒蛋。学学翻墙那么费劲吗？现在的“翻墙教程”都傻瓜到令人发指的地步了。”——今天在推上写的。<br />
如果你真不愿（哪怕是尝试一下）使用Firefox（且固执的说，“我已经习惯了IE或360浏览器，不想再换了，麻烦！”），就不用继续看下去了。<br />
<strong>一、安装并导入Firefox配置文件夹</strong><br />
1、下载Firefox并安装：<a href="http://www.mozilla.com/en-US/products/download.html?product=firefox-3.6.9&amp;os=win&amp;lang=zh-CN" target="_blank">Firefox(3.6.9)</a><br />
2、下载我的这个<a href="http://ifile.it/lm2i4bu" target="_blank">Firefox</a><a href="http://ifile.it/lm2i4bu" target="_blank">配置文件夹</a>，解压后放到某个非系统盘里。<br />
问：如何下载这个Firefox配置文件夹？<br />
答：点击前面的链接，在随后进入的页面下端你讲看到“request download ticket”按钮，点它，稍后它会变成“download”按钮，再点即可。（下同）<br />
3、对Firefox进行“自定义”设置，具体步骤如下：<br />
a）关闭所有已运行的Firefox浏览器窗口后，点“开始”——“运行”——在“打开”中输入“firefox –P”（注意，firefox与减号之间要有一个空格）如下图。&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<br />
<img src="http://www.bullock.cn/blogs/liulei/files/%e5%9b%be%e7%89%871.png" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
b）在“选择用户配置文件”窗口中点击“创建配置文件”。如下图。&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; <br />
<img src="http://www.bullock.cn/blogs/liulei/files/%e5%9b%be%e7%89%872.png" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
c）按照以下三个图中的标记的步骤完成操作。其中，1处可以随意命名，如“NewProfile”。<br />
<img src="http://www.bullock.cn/blogs/liulei/files/%e5%9b%be%e7%89%873.png" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
<img src="http://www.bullock.cn/blogs/liulei/files/%e5%9b%be%e7%89%874.png" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
<img src="http://www.bullock.cn/blogs/liulei/files/%e5%9b%be%e7%89%875.png" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
<strong>二、“喂鸽子”</strong><br />
首先，<a href="http://ifile.it/hncm9zf" target="_blank">下载小鸽子</a>。解压后，把这个文件夹放入某个非系统盘，右击鸽子fg7.04p——“发送到桌面快捷方式”。以后在打开Firefox之前先启动它就行了。PS:我在设置时让小鸽子“开机启动”了，你也可以在设置里把该项前的对勾点掉。<br />
三、关于“福”<br />
按照第一部分的说明配置了Firefox后，你会在Firefox浏览器窗口右下端的状态栏里看一个红色“福”字。在以后碰到无法访问的网站时，如，<a href="http://www.aiweiweiblog.com/" target="_blank">www.aiweiweiblog.com</a>，右击“福”，选择“对aiweweiblog.com全站启用代理”，刷新后即可正常访问。<br />
至此，你已经成功设置好“Firefox +小鸽子”翻墙套装了。让小鸽子带你飞吧。墙，对于你，已成往事。<br />
如果你对这个“手把手教程”还有问题，可以在Twitter上给我留言，我是<a href="https://twitter.com/liulei" target="_blank">@liulei</a>。<br />
最后，我的Firefox个人配置文件夹里已经包含了很多非常实用的扩展，详细使用方法可以到<a href="http://www.lixiaolai.com/" target="_blank">笑来老师</a>（<a href="https://twitter.com/xiaolai" target="_blank">@xiaolai</a>）的网站去看。</div>

							
							
							
							
															<div id="post_rate_div_829219"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo829219_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1960" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=52586&amp;repquote=829219&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 829219)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_13"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid829387" summary="pid829387" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=14954" target="_blank" id="userinfo829387" class="dropmenu" onmouseover="showMenu(this.id)">冬天开窗户</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=14954">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=14954&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_14" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum829387" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=52586&page=1#pid829387', '话题链接已经复制到剪贴板')">15楼</strong>
													<em onclick="$('postmessage_829387').className='t_bigfont'">大</em>							<em onclick="$('postmessage_829387').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_829387').className='t_smallfont'">小</em>												发表于 2010-9-14 15:18&nbsp;																					<a href="viewthread.php?tid=52586&amp;page=1&amp;authorid=14954" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_14"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_14"></div><div id="ad_thread4_14"></div>
						
						
																											<div id="postmessage_829387" class="t_msgfont">先学习一下，谢谢</div>

							
							
							
							
															<div id="post_rate_div_829387"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo829387_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=14954" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=52586&amp;repquote=829387&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 829387)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_14"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid831018" summary="pid831018" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7002" target="_blank" id="userinfo831018" class="dropmenu" onmouseover="showMenu(this.id)">luugoo</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">拖延心理学：向与生俱来的行为顽症宣战】https://1984bbs.com/viewthread.php?tid=60185</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7002">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7002&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_15" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum831018" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=52586&page=1#pid831018', '话题链接已经复制到剪贴板')">16楼</strong>
													<em onclick="$('postmessage_831018').className='t_bigfont'">大</em>							<em onclick="$('postmessage_831018').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_831018').className='t_smallfont'">小</em>												发表于 2010-9-15 16:42&nbsp;																					<a href="viewthread.php?tid=52586&amp;page=1&amp;authorid=7002" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_15"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_15"></div><div id="ad_thread4_15"></div>
						
						
																											<div id="postmessage_831018" class="t_msgfont">感谢！！</div>

							
							
							
							
															<div id="post_rate_div_831018"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo831018_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=7002" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=52586&amp;repquote=831018&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 831018)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_15"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid832115" summary="pid832115" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=9967" target="_blank" id="userinfo832115" class="dropmenu" onmouseover="showMenu(this.id)">圣西面</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">How do you tell a communist? Well, it's someone who reads Marx and Lenin. And how do you tell an anti-Communist? It's someone who understands Marx and Lenin. -Ronald Reagan</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=9967">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=9967&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_16" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum832115" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=52586&page=1#pid832115', '话题链接已经复制到剪贴板')">17楼</strong>
													<em onclick="$('postmessage_832115').className='t_bigfont'">大</em>							<em onclick="$('postmessage_832115').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_832115').className='t_smallfont'">小</em>												发表于 2010-9-16 10:54&nbsp;																					<a href="viewthread.php?tid=52586&amp;page=1&amp;authorid=9967" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_16"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_16"></div><div id="ad_thread4_16"></div>
						
						
																											<div id="postmessage_832115" class="t_msgfont">很好用哈，速度还挺快。好久没翻墙了。</div>

							
							
							
							
															<div id="post_rate_div_832115"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo832115_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=9967" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=52586&amp;repquote=832115&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 832115)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_16"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid832309" summary="pid832309" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7006" target="_blank" id="userinfo832309" class="dropmenu" onmouseover="showMenu(this.id)">liu114365143</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">@liulei</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7006">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7006&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_17" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum832309" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=52586&page=1#pid832309', '话题链接已经复制到剪贴板')">18楼</strong>
													<em onclick="$('postmessage_832309').className='t_bigfont'">大</em>							<em onclick="$('postmessage_832309').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_832309').className='t_smallfont'">小</em>												发表于 2010-9-16 12:22&nbsp;																					<a href="viewthread.php?tid=52586&amp;page=1&amp;authorid=7006" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_17"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_17"></div><div id="ad_thread4_17"></div>
													<h2>1楼的是最新的。看那个就行。5楼和14楼的是@bruceku先前帮搬过来的。</h2>
						
						
																											<div id="postmessage_832309" class="t_msgfont">RT</div>

							
							
							
							
															<div id="post_rate_div_832309"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo832309_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://www.twitter.com/liulei" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=7006" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=52586&amp;repquote=832309&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 832309)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_17"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid833072" summary="pid833072" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=4434" target="_blank" id="userinfo833072" class="dropmenu" onmouseover="showMenu(this.id)">区区柯克</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=4434">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=4434&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_18" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum833072" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=52586&page=1#pid833072', '话题链接已经复制到剪贴板')">19楼</strong>
													<em onclick="$('postmessage_833072').className='t_bigfont'">大</em>							<em onclick="$('postmessage_833072').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_833072').className='t_smallfont'">小</em>												发表于 2010-9-16 20:37&nbsp;																					<a href="viewthread.php?tid=52586&amp;page=1&amp;authorid=4434" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_18"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_18"></div><div id="ad_thread4_18"></div>
						
						
																											<div id="postmessage_833072" class="t_msgfont">原来我用proxy还行，刚才试了下主贴里的方法。装完以后网站都上不去了，貌似只能进84，不知道啥情况。</div>

							
							
							
							
															<div id="post_rate_div_833072"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo833072_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=4434" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=52586&amp;repquote=833072&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 833072)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_18"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid836159" summary="pid836159" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7006" target="_blank" id="userinfo836159" class="dropmenu" onmouseover="showMenu(this.id)">liu114365143</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">@liulei</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7006">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7006&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_19" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum836159" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=52586&page=1#pid836159', '话题链接已经复制到剪贴板')">20楼</strong>
													<em onclick="$('postmessage_836159').className='t_bigfont'">大</em>							<em onclick="$('postmessage_836159').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_836159').className='t_smallfont'">小</em>												发表于 2010-9-18 18:12&nbsp;																					<a href="viewthread.php?tid=52586&amp;page=1&amp;authorid=7006" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_19"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_19"></div><div id="ad_thread4_19"></div>
													<h2>回复 19楼 区区柯克 的话题</h2>
						
						
																											<div id="postmessage_836159" class="t_msgfont">怎么可能？你按照步骤的先后顺序设置了吗？确定正确导入Firefox配置文件夹后，启动自由门了？</div>

							
							
							
							
															<div id="post_rate_div_836159"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo836159_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://www.twitter.com/liulei" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=7006" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=52586&amp;repquote=836159&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 836159)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_19"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid836303" summary="pid836303" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=13583" target="_blank" id="userinfo836303" class="dropmenu" onmouseover="showMenu(this.id)">cfreebomc</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=13583">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=13583&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_20" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum836303" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=52586&page=1#pid836303', '话题链接已经复制到剪贴板')">21楼</strong>
													<em onclick="$('postmessage_836303').className='t_bigfont'">大</em>							<em onclick="$('postmessage_836303').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_836303').className='t_smallfont'">小</em>												发表于 2010-9-18 20:06&nbsp;																					<a href="viewthread.php?tid=52586&amp;page=1&amp;authorid=13583" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_20"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_20"></div><div id="ad_thread4_20"></div>
						
						
																											<div id="postmessage_836303" class="t_msgfont">随便说下，我在win7下运行“firefox –P”总是调出网页，而且打不开，后来在firefox后面加上“.exe”就可以了＝.＝</div>

							
							
							
							
															<div id="post_rate_div_836303"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo836303_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=13583" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=52586&amp;repquote=836303&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 836303)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_20"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid841262" summary="pid841262" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=18981" target="_blank" id="userinfo841262" class="dropmenu" onmouseover="showMenu(this.id)">ccccty</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=18981">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=18981&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_21" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum841262" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=52586&page=1#pid841262', '话题链接已经复制到剪贴板')">22楼</strong>
													<em onclick="$('postmessage_841262').className='t_bigfont'">大</em>							<em onclick="$('postmessage_841262').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_841262').className='t_smallfont'">小</em>												发表于 2010-9-23 18:09&nbsp;																					<a href="viewthread.php?tid=52586&amp;page=1&amp;authorid=18981" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_21"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_21"></div><div id="ad_thread4_21"></div>
						
						
																											<div id="postmessage_841262" class="t_msgfont">系统XP，在开始”——“运行”——输入“firefox –P“打不来任何页面，咋回事啊，请高手指点谢谢</div>

							
							
							
							
															<div id="post_rate_div_841262"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo841262_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=18981" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=52586&amp;repquote=841262&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 841262)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_21"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid841274" summary="pid841274" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=4434" target="_blank" id="userinfo841274" class="dropmenu" onmouseover="showMenu(this.id)">区区柯克</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=4434">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=4434&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_22" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum841274" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=52586&page=1#pid841274', '话题链接已经复制到剪贴板')">23楼</strong>
													<em onclick="$('postmessage_841274').className='t_bigfont'">大</em>							<em onclick="$('postmessage_841274').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_841274').className='t_smallfont'">小</em>												发表于 2010-9-23 18:26&nbsp;																					<a href="viewthread.php?tid=52586&amp;page=1&amp;authorid=4434" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_22"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_22"></div><div id="ad_thread4_22"></div>
													<h2>回复 20楼 liu114365143 的话题</h2>
						
						
																											<div id="postmessage_841274" class="t_msgfont">恩。不过我换回来原来那个了，直接proxy+自由门，貌似一样。呵呵。</div>

							
							
							
							
															<div id="post_rate_div_841274"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo841274_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=4434" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=52586&amp;repquote=841274&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 841274)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_22"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid842677" summary="pid842677" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7006" target="_blank" id="userinfo842677" class="dropmenu" onmouseover="showMenu(this.id)">liu114365143</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">@liulei</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7006">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7006&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_23" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum842677" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=52586&page=1#pid842677', '话题链接已经复制到剪贴板')">24楼</strong>
													<em onclick="$('postmessage_842677').className='t_bigfont'">大</em>							<em onclick="$('postmessage_842677').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_842677').className='t_smallfont'">小</em>												发表于 2010-9-24 22:38&nbsp;																					<a href="viewthread.php?tid=52586&amp;page=1&amp;authorid=7006" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_23"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_23"></div><div id="ad_thread4_23"></div>
													<h2>关于“firefox -P”</h2>
						
						
																											<div id="postmessage_842677" class="t_msgfont">我的是Win7，运行这个没问题。<br />
难道需要在安装Firefox时，让它默认安装在C盘而不去改它的安装路径？<br />
PS：运行“firefox -P”有问题的童鞋，你们的电脑里是不是没有安装Firefox啊？<br />
<br />
[<i> 本帖最后由 liu114365143 于 2010-9-24 22:39 编辑 </i>]</div>

							
							
							
							
															<div id="post_rate_div_842677"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo842677_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://www.twitter.com/liulei" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=7006" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=52586&amp;repquote=842677&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 842677)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_23"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid845115" summary="pid845115" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=18864" target="_blank" id="userinfo845115" class="dropmenu" onmouseover="showMenu(this.id)">zhangsongq</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">Across the Great Firewall, you can reach every corner of the world.</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=18864">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=18864&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_24" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum845115" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=52586&page=1#pid845115', '话题链接已经复制到剪贴板')">25楼</strong>
													<em onclick="$('postmessage_845115').className='t_bigfont'">大</em>							<em onclick="$('postmessage_845115').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_845115').className='t_smallfont'">小</em>												发表于 2010-9-26 19:17&nbsp;																					<a href="viewthread.php?tid=52586&amp;page=1&amp;authorid=18864" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_24"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_24"></div><div id="ad_thread4_24"></div>
						
						
																											<div id="postmessage_845115" class="t_msgfont">好东西，……学习，O(∩_∩)O谢谢</div>

							
							
							
							
															<div id="post_rate_div_845115"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo845115_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://没有" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=18864" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=52586&amp;repquote=845115&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 845115)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_24"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid846389" summary="pid846389" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=11149" target="_blank" id="userinfo846389" class="dropmenu" onmouseover="showMenu(this.id)">大力夯</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=11149">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=11149&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_25" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum846389" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=52586&page=1#pid846389', '话题链接已经复制到剪贴板')">26楼</strong>
													<em onclick="$('postmessage_846389').className='t_bigfont'">大</em>							<em onclick="$('postmessage_846389').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_846389').className='t_smallfont'">小</em>												发表于 2010-9-27 16:51&nbsp;																					<a href="viewthread.php?tid=52586&amp;page=1&amp;authorid=11149" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_25"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_25"></div><div id="ad_thread4_25"></div>
						
						
																											<div id="postmessage_846389" class="t_msgfont">速度怎么呢</div>

							
							
							
							
															<div id="post_rate_div_846389"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo846389_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=11149" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=52586&amp;repquote=846389&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 846389)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_25"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid849514" summary="pid849514" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 <a name="lastpost"></a>					<cite>											<a href="space.php?uid=13177" target="_blank" id="userinfo849514" class="dropmenu" onmouseover="showMenu(this.id)">小熊</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=13177">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=13177&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_26" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum849514" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=52586&page=1#pid849514', '话题链接已经复制到剪贴板')">27楼</strong>
													<em onclick="$('postmessage_849514').className='t_bigfont'">大</em>							<em onclick="$('postmessage_849514').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_849514').className='t_smallfont'">小</em>												发表于 2010-9-29 21:40&nbsp;																					<a href="viewthread.php?tid=52586&amp;page=1&amp;authorid=13177" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_26"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_26"></div><div id="ad_thread4_26"></div>
						
						
																											<div id="postmessage_849514" class="t_msgfont">需要这么复杂么？？？<br />
直接安装autoproxy 配置 端口为 8580 就完全OK了，还用 运行firefox -P ？？？是不是你这个技术过时了？</div>

							
							
							
							
															<div id="post_rate_div_849514"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo849514_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=13177" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=52586&amp;repquote=849514&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 849514)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_26"></div>				</div>
			</td>
		</tr>
		</table>
		</div>
</form>





<div class="pages_btns">
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=52586&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=52586&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
				<span class="postbtn" id="newspecialtmp" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=52586&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

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

	<form method="post" id="postform" action="post.php?action=reply&amp;fid=26&amp;tid=52586&amp;extra=&amp;replysubmit=yes" onSubmit="return validate(this)">
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
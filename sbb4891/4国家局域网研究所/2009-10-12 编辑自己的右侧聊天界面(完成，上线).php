<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<title>编辑自己的右侧聊天界面(完成，上线) - 国家局域网研究所 -  1984bbs.com </title>
<meta name="keywords" content="" />
<meta name="MSSmartTagsPreventParsing" content="True" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<link rel="archives" title="1984bbs.com" href="https://1984bbs.com/archiver/" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_viewthread.css" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_common.css" />
<script type="text/javascript">
	var discuz_uid = 13019;var IMGDIR = 'images/default';var attackevasive = '0';var gid = 0;var STYLEID = '1';
	gid = parseInt('3');var fid = parseInt('26');var tid = parseInt('25003');
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
			<p><a href="index.php" id="forumlist" onmouseover="showMenu(this.id)" class="dropmenu">1984bbs.com</a> &raquo; <a href="forumdisplay.php?fid=26">国家局域网研究所</a> &raquo; 编辑自己的右侧聊天界面(完成，上线)</p>
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
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=25003&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=25003&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
				<span class="postbtn" id="newspecial" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=25003&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

	<ul class="popupmenu_popup newspecialmenu" id="newspecial_menu" style="display: none">
		<li><a href="post.php?action=newthread&amp;fid=26&amp;extra=">发新话题</a></li>
		<li class="poll"><a href="post.php?action=newthread&amp;fid=26&amp;extra=&amp;special=1">发布投票</a></li>													</ul>

<form method="post" name="modactions">
	<input type="hidden" name="formhash" value="823c9fa2" />
	<div class="mainbox viewthread">
		<span class="headactions">
					<a href="my.php?item=favorites&amp;tid=25003" id="ajax_favorite" onclick="ajaxmenu(event, this.id, 3000, 0)">收藏</a>
			<a href="my.php?item=subscriptions&amp;subadd=25003" id="ajax_subscription" onclick="ajaxmenu(event, this.id, 3000, null, 0)">订阅</a>
			<a href="misc.php?action=emailfriend&amp;tid=25003" id="emailfriend" onclick="ajaxmenu(event, this.id, 9000000, null, 0)">推荐</a>
				<a href="viewthread.php?action=printable&amp;tid=25003" target="_blank" class="notabs">打印</a>
				</span>
		<h1>编辑自己的右侧聊天界面(完成，上线)		</h1>
				<ins>
						<a href="misc.php?action=viewthreadmod&amp;tid=25003" title="主题操作记录" target="_blank">本主题由 张书记 于 2009-10-16 19:37 解除置顶</a>								</ins>
							<table id="pid278917" summary="pid278917" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7766" target="_blank" id="userinfo278917" class="dropmenu" onmouseover="showMenu(this.id)">麦圆</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">Twitter @math2gold | 惊诧的火星友邦 |  咪咪是 /math2ogld　</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7766">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7766&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_0" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum278917" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=25003&page=1#pid278917', '话题链接已经复制到剪贴板')">1楼</strong>
													<em onclick="$('postmessage_278917').className='t_bigfont'">大</em>							<em onclick="$('postmessage_278917').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_278917').className='t_smallfont'">小</em>												发表于 2009-10-12 21:21&nbsp;																					<a href="viewthread.php?tid=25003&amp;page=1&amp;authorid=7766" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_0"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_0"></div><div id="ad_thread4_0"></div>
													<h2>编辑自己的右侧聊天界面(完成，上线)</h2>
						
						
																											<div id="postmessage_278917" class="t_msgfont">最新版本将在这里更新：<a href="http://code.google.com/p/project41984/w/edit/SelfDefChatUI" target="_blank">http://code.google.com/p/project41984/w/edit/SelfDefChatUI</a>&nbsp; &nbsp;(如果无法打開就看本帖) <br />
<br />
<strong> *** 欢迎把设计好自己想要的界面的同学，建新标题为“我的自定义聊天代码”的文章，然后把代码贴到里面去，跟大家分享。 *** </strong><br />
<br />
由于每人都有自己创意和风格。选美工也不容易，還是把美工的设定交给每个人自己设置吧。希望美工能搞好的人能积极参与自定义设计，然后能把自己的作品供出以给大家挑选出做公共页面的。<br />
<br />
如果感觉后面的内容太复杂了，可以看看这两个例子，稍懂javascript和html的兄弟，应该不用看说明就知道如何修改了：<br />
　例子一：（如果无法打開，请参照９楼）<a href="http://code.google.com/p/project41984/wiki/Ex1" target="_blank">http://code.google.com/p/project41984/wiki/Ex1</a><br />
　例子二：（如果无法打開，请参照８楼）<a href="http://code.google.com/p/project41984/wiki/Ex2" target="_blank">http://code.google.com/p/project41984/wiki/Ex2</a><br />
<br />
<strong>自定义页面</strong><br />
<br />
如下是几个可以用用户登录后自定义的页面，每人登录后只看见自己的那个页的。<div class="quote"><h5>引用:</h5><blockquote><a href="https://1984bbs.com/edit_file.php?page=chat_html" target="_blank">https://1984bbs.com/edit_file.php?page=chat_html</a><br />
<a href="https://1984bbs.com/edit_file.php?page=chat_js" target="_blank">https://1984bbs.com/edit_file.php?page=chat_js</a><br />
<a href="https://1984bbs.com/edit_file.php?page=chat_css" target="_blank">https://1984bbs.com/edit_file.php?page=chat_css</a></blockquote></div>要编辑这几个页面可访问如下几个对应的地址<div class="quote"><h5>引用:</h5><blockquote><a href="https://1984bbs.com/edit_file.html?chat_html" target="_blank">https://1984bbs.com/edit_file.html?chat_html</a><br />
<a href="https://1984bbs.com/edit_file.html?chat_js" target="_blank">https://1984bbs.com/edit_file.html?chat_js</a><br />
<a href="https://1984bbs.com/edit_file.html?chat_css" target="_blank">https://1984bbs.com/edit_file.html?chat_css</a></blockquote></div>编辑好点submit就行了。<br />
强烈建议把css放置在 <a href="https://1984bbs.com/edit_file.php?page=chat_css" target="_blank">https://1984bbs.com/edit_file.php?page=chat_css</a> ， javascript代码放置在&nbsp;&nbsp;<a href="https://1984bbs.com/edit_file.php?page=chat_js" target="_blank">https://1984bbs.com/edit_file.php?page=chat_js</a> ，然后在<a href="https://1984bbs.com/edit_file.php?page=chat_html" target="_blank">https://1984bbs.com/edit_file.php?page=chat_html</a>通过代码引入。<br />
<br />
<strong>初级编辑</strong><br />
为避免直接重新设计整个聊天浏览器客户端而带来麻烦，現在提供一个比较初级的系统，所有人只要引用这个系统，对界面风格做修改即可。<br />
<br />
如下是整个代码示例。后面介绍如何修改。<div class="quote"><h5>引用:</h5><blockquote>&lt;html&gt;<br />
&lt;head&gt;<br />
&lt;meta http-equiv=&quot;Content-Type&quot; content=&quot;text/html; charset=gbk&quot; /&gt;<br />
&lt;script type=&quot;text/javascript&quot; language=&quot;javascript&quot;&gt;<br />
<br />
function runClearChatBox()<br />
{<br />
 document.getElementById('chat_msg').value = &quot;&quot;;<br />
}<br />
<br />
function sendChatCommentButtonObjct(o)<br />
{<br />
<br />
}<br />
<br />
function getChatItemWriteString(Id,Sender,Msg,Time,Reply)<br />
{<br />
&nbsp; &nbsp;h=&quot;:&quot;+Sender+&quot;:&quot;+Time+&quot;:&quot;+Msg+&quot;&lt;br /&gt;&quot;;<br />
&nbsp; &nbsp;return h;<br />
}<br />
<br />
function getChatItemWriteStart()<br />
{<br />
&nbsp;&nbsp;return &quot;&lt;b&gt;&quot;;<br />
}<br />
<br />
function getChatItemWriteEnd()<br />
{<br />
 return &quot;&lt;/b&gt;&quot;;<br />
}<br />
<br />
function getChatListLimit(i)<br />
{<br />
&nbsp; &nbsp; &nbsp; &nbsp; return i+1;<br />
}<br />
&lt;/script&gt;<br />
&lt;script type=&quot;text/javascript&quot; language=&quot;javascript&quot; src=&quot;../OnlineChat/port.for1984.OnlineChat.nocache.js&quot;&gt;&lt;/script&gt;<br />
&lt;/head&gt;<br />
&lt;body&gt;<br />
&lt;iframe src=&quot;javascript:''&quot; id=&quot;__gwt_historyFrame&quot; tabIndex='-1' style=&quot;position:absolute;width:0;height:0;border:0&quot;&gt;&lt;/iframe&gt;<br />
&lt;form&gt;<br />
&lt;textarea id='chat_msg'&gt;<br />
&lt;/textarea&gt;<br />
&lt;/form&gt;<br />
&lt;span id='chatAutoRefreshBox'&gt;&lt;/span&gt;<br />
&lt;span id='chatSubmitBox'&gt;&lt;/span&gt;<br />
<br />
&lt;hr /&gt;<br />
&lt;span id='chatListBox'&gt;&lt;/span&gt;<br />
&lt;/body&gt;<br />
&lt;/html&gt;</blockquote></div>以上示例，在html中插入js代码<i>../OnlineChat/port.for1984.OnlineChat.nocache.js</i><br />
即引入了基础系统。<div class="quote"><h5>引用:</h5><blockquote>&lt;script type=&quot;text/javascript&quot; language=&quot;javascript&quot; src=&quot;../OnlineChat/port.for1984.OnlineChat.nocache.js&quot;&gt;&lt;/script&gt;</blockquote></div>加入<div class="quote"><h5>引用:</h5><blockquote>&lt;script type=&quot;text/javascript&quot; language=&quot;javascript&quot;&gt;<br />
<br />
function runClearChatBox()<br />
{<br />
 document.getElementById('chat_msg').value = &quot;&quot;;<br />
}<br />
<br />
function sendChatCommentButtonObjct(o)<br />
{<br />
<br />
}<br />
<br />
function getChatItemWriteString(Id,Sender,Msg,Time,Reply)<br />
{<br />
&nbsp; &nbsp;h=&quot;:&quot;+Sender+&quot;:&quot;+Time+&quot;:&quot;+Msg+&quot;&lt;br /&gt;&quot;;<br />
&nbsp; &nbsp;return h;<br />
}<br />
<br />
function getChatItemWriteStart()<br />
{<br />
&nbsp;&nbsp;return &quot;&lt;b&gt;&quot;;<br />
}<br />
<br />
function getChatItemWriteEnd()<br />
{<br />
 return &quot;&lt;/b&gt;&quot;;<br />
}<br />
<br />
function getChatListLimit(i)<br />
{<br />
&nbsp; &nbsp; &nbsp; &nbsp; return i+1;<br />
}<br />
&lt;/script&gt;</blockquote></div>就是引入，javascript部分的接口。除了防止布局和css风格外，主要的界面内容就是通过修改这一块代码来修改的。其含义如下:<br />
<br />
<i>初级界面修改</i><br />
<br />
如下函数是打印每一条消息时会被调用，要求返回改消息组织的html代码。<div class="quote"><h5>引用:</h5><blockquote>function getChatItemWriteString(Id,Sender,Msg,Time,Reply)<br />
{<br />
&nbsp; &nbsp;h=&quot;:&quot;+Sender+&quot;:&quot;+Time+&quot;:&quot;+Msg+&quot;&lt;br /&gt;&quot;;<br />
&nbsp; &nbsp;return h;<br />
}</blockquote></div>开始输出消息时会被用到，此函数要求返回消息块的头部内容。如下两条示例是把消息内容加粗。<div class="quote"><h5>引用:</h5><blockquote>function getChatItemWriteStart()<br />
{<br />
&nbsp;&nbsp;return &quot;&lt;b&gt;&quot;;<br />
}</blockquote></div>结束输出消息时会被用到，此函数要求返回消息块的尾部内容。<div class="quote"><h5>引用:</h5><blockquote>function getChatItemWriteEnd()<br />
{<br />
 return &quot;&lt;/b&gt;&quot;;<br />
}</blockquote></div><i>深入一点</i><br />
打印消息内容的循环限制函数，如果是return i+1，则有多少显示多少，如果是return 10，则只显示最新10条消息。<div class="quote"><h5>引用:</h5><blockquote>function getChatListLimit(i)</blockquote></div>如下函数负责清除文本框内容，每次消息发送成功后则会被调用：<div class="quote"><h5>引用:</h5><blockquote>function runClearChatBox()</blockquote></div>初始化界面的时候会把发送Button的对象传递到这个函数，如果需要把文本框电击的動作和button关联起来，只要通过它获取按钮对象则可：<div class="quote"><h5>引用:</h5><blockquote>function sendChatCommentButtonObjct(send_button)</blockquote></div><i>布局修改</i><br />
<br />
整体html文档的布局上，通过id为chat_msg , chatAutoRefreshBox , chatSubmitBox , chatListBox进行设置。<br />
<br />
如下代码表示文本消息输入框用textarea表示，实际上可以用input代替，只要是id为chat_msg即可。<div class="quote"><h5>引用:</h5><blockquote>&lt;textarea id='chat_msg'&gt;<br />
&lt;/textarea&gt;</blockquote></div>代码是标记放置自动刷新ClickBox的位置。与后面2个一样，不一定要使用span，如div等的其他元素标签亦可。<div class="quote"><h5>引用:</h5><blockquote>&lt;span id='chatAutoRefreshBox'&gt;&lt;/span&gt;</blockquote></div>代码是标记放置发送按钮的位置。<div class="quote"><h5>引用:</h5><blockquote>&lt;span id='chatSubmitBox'&gt;&lt;/span&gt;</blockquote></div>代码是标记放置消息列表的位置。<div class="quote"><h5>引用:</h5><blockquote>&lt;span id='chatListBox'&gt;&lt;/span&gt;</blockquote></div>－－－－－－－－－－－－－－－－－－－－－－－－<br />
Update: 20091013<br />
<br />
<strong>新增接口:</strong><br />
<br />
1、回调函数setMyChatNickName，系统初始化时会把获得的用户名username传递给函数。通过它可以获取用户名。<div class="quote"><h5>引用:</h5><blockquote>function setMyChatNickName(username)</blockquote></div>获取用户名后，可作存储起来，在显示聊天列表时可判断消息是否为自己所发出的。例如：<div class="quote"><h5>引用:</h5><blockquote>var mynickname;<br />
function setMyChatNickName(o)<br />
{<br />
 mynickname=o;<br />
}</blockquote></div>2、利用getMakeWriteRedefine()设置自定义输出<br />
增加代码：<div class="quote"><h5>引用:</h5><blockquote>function getMakeWriteRedefine()<br />
{<br />
 return true;<br />
}</blockquote></div>可以把聊天对话输出设置为自定义模式，这样如果不想按照原来的顺序输出，而希望最新的放置在最下面的话，在增加上述代码后，把 getChatItemWriteString修改成如下（增加Str参数）：<div class="quote"><h5>引用:</h5><blockquote>function getChatItemWriteString(Id,Sender,Msg,Time,Reply,Str)<br />
{<br />
var h;<br />
&nbsp; &nbsp;if (Sender==mynickname)<br />
&nbsp; &nbsp;{<br />
&nbsp; &nbsp;h=&quot;me:&quot;+Time+&quot;:&quot;+Msg+&quot;&lt;br /&gt;&quot;;<br />
&nbsp; &nbsp;}<br />
else<br />
&nbsp;&nbsp;{<br />
&nbsp; &nbsp;h=&quot;:[&quot;+Sender+&quot;]:&quot;+Time+&quot;:&quot;+Msg+&quot;&lt;br /&gt;&quot;;<br />
&nbsp;&nbsp;}<br />
&nbsp; &nbsp;return h+Str;<br />
}</blockquote></div>最后不是return h，而是return h+Str，让显示的顺序反过来。</div>

							
							
							
							
															<div id="post_rate_div_278917"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo278917_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://math2gold.com/" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=7766" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=25003&amp;repquote=278917&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 278917)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_0"></div>				</div>
			</td>
		</tr>
		</table>
		</div><div class="ad_column" id="ad_interthread"><a href="/viewthread.php?tid=54699" target="_blank" style="color:red;">1984bbs是一个非营利项目，它需要您的捐助！</font></a>		</div>
	<div class="mainbox viewthread">
			<table id="pid279008" summary="pid279008" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1960" target="_blank" id="userinfo279008" class="dropmenu" onmouseover="showMenu(this.id)">库存袈裟</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">@bruceku 想象力比知识更重要。</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1960">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1960&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_1" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum279008" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=25003&page=1#pid279008', '话题链接已经复制到剪贴板')">2楼</strong>
													<em onclick="$('postmessage_279008').className='t_bigfont'">大</em>							<em onclick="$('postmessage_279008').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_279008').className='t_smallfont'">小</em>												发表于 2009-10-12 22:35&nbsp;																					<a href="viewthread.php?tid=25003&amp;page=1&amp;authorid=1960" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_1"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_1"></div><div id="ad_thread4_1"></div>
						
						
																											<div id="postmessage_279008" class="t_msgfont">真详尽。辛苦了。麦总</div>

							
							
							
							
															<div id="post_rate_div_279008"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo279008_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1960" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=25003&amp;repquote=279008&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 279008)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_1"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid279027" summary="pid279027" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7766" target="_blank" id="userinfo279027" class="dropmenu" onmouseover="showMenu(this.id)">麦圆</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">Twitter @math2gold | 惊诧的火星友邦 |  咪咪是 /math2ogld　</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7766">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7766&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_2" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum279027" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=25003&page=1#pid279027', '话题链接已经复制到剪贴板')">3楼</strong>
													<em onclick="$('postmessage_279027').className='t_bigfont'">大</em>							<em onclick="$('postmessage_279027').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_279027').className='t_smallfont'">小</em>												发表于 2009-10-12 22:47&nbsp;																					<a href="viewthread.php?tid=25003&amp;page=1&amp;authorid=7766" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_2"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_2"></div><div id="ad_thread4_2"></div>
													<h2>回复 2楼 库存袈裟 的话题</h2>
						
						
																											<div id="postmessage_279027" class="t_msgfont">汗个……总字也上了，万一被人盯上，我说这是库总对我的特称哈。谢库总。</div>

							
							
							
							
															<div id="post_rate_div_279027"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo279027_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://math2gold.com/" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=7766" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=25003&amp;repquote=279027&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 279027)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_2"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid280088" summary="pid280088" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=9423" target="_blank" id="userinfo280088" class="dropmenu" onmouseover="showMenu(this.id)">stonehoo</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">this is bullshit</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=9423">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=9423&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_3" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum280088" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=25003&page=1#pid280088', '话题链接已经复制到剪贴板')">4楼</strong>
													<em onclick="$('postmessage_280088').className='t_bigfont'">大</em>							<em onclick="$('postmessage_280088').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_280088').className='t_smallfont'">小</em>												发表于 2009-10-13 15:04&nbsp;																					<a href="viewthread.php?tid=25003&amp;page=1&amp;authorid=9423" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_3"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_3"></div><div id="ad_thread4_3"></div>
						
						
																											<div id="postmessage_280088" class="t_msgfont">顶一个 对美工不懂啊</div>

							
							
							
							
															<div id="post_rate_div_280088"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo280088_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://sthoo.com" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=9423" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=25003&amp;repquote=280088&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 280088)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_3"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid280141" summary="pid280141" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8793" target="_blank" id="userinfo280141" class="dropmenu" onmouseover="showMenu(this.id)">冇二</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">@bocaidingding欢迎follow</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8793">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8793&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_4" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum280141" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=25003&page=1#pid280141', '话题链接已经复制到剪贴板')">5楼</strong>
													<em onclick="$('postmessage_280141').className='t_bigfont'">大</em>							<em onclick="$('postmessage_280141').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_280141').className='t_smallfont'">小</em>												发表于 2009-10-13 15:27&nbsp;																					<a href="viewthread.php?tid=25003&amp;page=1&amp;authorid=8793" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_4"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_4"></div><div id="ad_thread4_4"></div>
						
						
																											<div id="postmessage_280141" class="t_msgfont">要是能做成gtalk网页内嵌模式那样就不错了<br />
ps：bbs要是能直接贴图多好~~~</div>

							
							
							
							
															<div id="post_rate_div_280141"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo280141_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=8793" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=25003&amp;repquote=280141&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 280141)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_4"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid280691" summary="pid280691" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8228" target="_blank" id="userinfo280691" class="dropmenu" onmouseover="showMenu(this.id)">多毛猫</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">http://www.duomaocat.com/</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8228">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8228&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_5" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum280691" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=25003&page=1#pid280691', '话题链接已经复制到剪贴板')">6楼</strong>
													<em onclick="$('postmessage_280691').className='t_bigfont'">大</em>							<em onclick="$('postmessage_280691').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_280691').className='t_smallfont'">小</em>												发表于 2009-10-13 21:38&nbsp;																					<a href="viewthread.php?tid=25003&amp;page=1&amp;authorid=8228" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_5"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_5"></div><div id="ad_thread4_5"></div>
						
						
																											<div id="postmessage_280691" class="t_msgfont">麦总、库总，二位老总辛苦了。</div>

							
							
							
							
															<div id="post_rate_div_280691"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo280691_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://www.duomaocat.com/" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=8228" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=25003&amp;repquote=280691&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 280691)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_5"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid280698" summary="pid280698" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8585" target="_blank" id="userinfo280698" class="dropmenu" onmouseover="showMenu(this.id)">绝望的落支撑</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">10年，文艺复兴                      Twitter @luozc</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8585">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8585&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_6" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum280698" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=25003&page=1#pid280698', '话题链接已经复制到剪贴板')">7楼</strong>
													<em onclick="$('postmessage_280698').className='t_bigfont'">大</em>							<em onclick="$('postmessage_280698').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_280698').className='t_smallfont'">小</em>												发表于 2009-10-13 21:45&nbsp;																					<a href="viewthread.php?tid=25003&amp;page=1&amp;authorid=8585" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_6"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_6"></div><div id="ad_thread4_6"></div>
						
						
																											<div id="postmessage_280698" class="t_msgfont">真不容易啊～<br />
<br />
辛苦了！</div>

							
							
							
							
															<div id="post_rate_div_280698"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo280698_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://loooz.blogbus.com" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=8585" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=25003&amp;repquote=280698&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 280698)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_6"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid280920" summary="pid280920" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7766" target="_blank" id="userinfo280920" class="dropmenu" onmouseover="showMenu(this.id)">麦圆</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">Twitter @math2gold | 惊诧的火星友邦 |  咪咪是 /math2ogld　</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7766">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7766&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_7" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum280920" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=25003&page=1#pid280920', '话题链接已经复制到剪贴板')">8楼</strong>
													<em onclick="$('postmessage_280920').className='t_bigfont'">大</em>							<em onclick="$('postmessage_280920').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_280920').className='t_smallfont'">小</em>												发表于 2009-10-14 00:42&nbsp;																					<a href="viewthread.php?tid=25003&amp;page=1&amp;authorid=7766" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_7"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_7"></div><div id="ad_thread4_7"></div>
													<h2>自定义聊天界面——例子（２）</h2>
						
						
																											<div id="postmessage_280920" class="t_msgfont">打開页面 <a href="https://1984bbs.com/edit_file.html?chat_html" target="_blank">https://1984bbs.com/edit_file.html?chat_html</a>，输入后面的代码，点击Submit按钮保存。<br />
然后打開页面 <a href="https://1984bbs.com/edit_file.php?page=chat_html" target="_blank">https://1984bbs.com/edit_file.php?page=chat_html</a> 进行聊天。<br />
<br />
本例子实现：　<br />
１、把对话输入框放到最下面<br />
２、自动换行　（通过上网搜索代码略加修改实现）<br />
３、只显示１０行<br />
４、把我的聊天内容和别人的聊天内容区分<br />
５、最后面的一条消息是最新消息<div class="quote"><h5>引用:</h5><blockquote>&lt;html&gt;<br />
&lt;head&gt;<br />
&lt;meta http-equiv=&quot;Content-Type&quot; content=&quot;text/html; charset=gbk&quot; /&gt;<br />
&lt;script type=&quot;text/javascript&quot; language=&quot;javascript&quot;&gt;<br />
<br />
//网上搜索出来的自动换行函数<br />
function AutoLn(sStr,iPerLineLen){&nbsp;&nbsp;<br />
&nbsp;&nbsp;<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;if(sStr.replace(/[^\x00-\xff]/g,&quot;xx&quot;).length &lt;= iPerLineLen){&nbsp;&nbsp;<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;return sStr;&nbsp;&nbsp;<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;}&nbsp;&nbsp;<br />
&nbsp; &nbsp;&nbsp; &nbsp;<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;var str=&quot;&quot;;&nbsp;&nbsp;<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;var l=0;&nbsp;&nbsp;<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;var schar;&nbsp;&nbsp;<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;for(var i=0;schar=sStr.charAt(i);i++){&nbsp;&nbsp;<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;str+=schar;&nbsp;&nbsp;<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;l+=(schar.match(/[^\x00-\xff]/)!=null?2:1);&nbsp;&nbsp;<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;if(l&gt;= iPerLineLen){&nbsp;&nbsp;<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; str+=&quot;\n&quot;;&nbsp;&nbsp;<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; l=0;&nbsp;&nbsp;<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;}&nbsp;&nbsp;<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;}&nbsp;&nbsp;<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;return str;<br />
}&nbsp;&nbsp;<br />
<br />
<br />
var mynickname;<br />
function setMyChatNickName(o)<br />
{<br />
 mynickname=o;<br />
}<br />
<br />
function runClearChatBox()<br />
{<br />
 document.getElementById('chat_msg').value = &quot;&quot;;<br />
}<br />
<br />
function sendChatCommentButtonObjct(o)<br />
{<br />
<br />
}<br />
<br />
function getMakeWriteRedefine()<br />
{<br />
&nbsp; &nbsp;&nbsp;&nbsp;<br />
 return true;<br />
}<br />
<br />
function getChatItemWriteString(Id,Sender,Msg,Time,Reply,Str)<br />
{<br />
var h;<br />
<br />
&nbsp;&nbsp;//设置自动换行<br />
&nbsp;&nbsp;var msg=AutoLn(Msg,80);<br />
<br />
&nbsp; &nbsp;if (Sender==mynickname)<br />
&nbsp; &nbsp;{<br />
&nbsp; &nbsp;//消息是我发出的<br />
&nbsp; &nbsp;h=&quot;我:&quot;+Time+&quot;:&quot;+msg+&quot;&lt;br /&gt;&quot;;<br />
&nbsp; &nbsp;}<br />
&nbsp; &nbsp;else<br />
&nbsp;&nbsp;{<br />
&nbsp; &nbsp;//消息是别人发出的<br />
&nbsp; &nbsp;h=&quot;:[&quot;+Sender+&quot;]:&quot;+Time+&quot;:&quot;+msg+&quot;&lt;br /&gt;&quot;;<br />
&nbsp;&nbsp;}<br />
&nbsp; &nbsp;return h+Str;<br />
}<br />
<br />
function getChatItemWriteStart()<br />
{<br />
&nbsp;&nbsp;return &quot;&lt;b&gt;&quot;;<br />
}<br />
<br />
function getChatItemWriteEnd()<br />
{<br />
 return &quot;&lt;/b&gt;&quot;;<br />
}<br />
<br />
function getChatListLimit(i)<br />
{<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;//只显示10行<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;return 10;<br />
}<br />
&lt;/script&gt;<br />
&lt;script type=&quot;text/javascript&quot; language=&quot;javascript&quot; src=&quot;../OnlineChat/port.for1984.OnlineChat.nocache.js&quot;&gt;&lt;/script&gt;<br />
&lt;/head&gt;<br />
&lt;body&gt;<br />
&lt;span id='chatListBox'&gt;&lt;/span&gt;<br />
&lt;hr /&gt;<br />
&lt;form&gt;<br />
&lt;textarea id='chat_msg' cols=50 rows=3&gt;<br />
&lt;/textarea&gt;<br />
&lt;/form&gt;<br />
&lt;span id='chatAutoRefreshBox'&gt;&lt;/span&gt;<br />
&lt;span id='chatSubmitBox'&gt;&lt;/span&gt;<br />
&lt;/body&gt;<br />
&lt;/html&gt;</blockquote></div></div>

							
							
							
							
															<div id="post_rate_div_280920"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo280920_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://math2gold.com/" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=7766" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=25003&amp;repquote=280920&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 280920)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_7"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid280941" summary="pid280941" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7766" target="_blank" id="userinfo280941" class="dropmenu" onmouseover="showMenu(this.id)">麦圆</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">Twitter @math2gold | 惊诧的火星友邦 |  咪咪是 /math2ogld　</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7766">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7766&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_8" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum280941" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=25003&page=1#pid280941', '话题链接已经复制到剪贴板')">9楼</strong>
													<em onclick="$('postmessage_280941').className='t_bigfont'">大</em>							<em onclick="$('postmessage_280941').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_280941').className='t_smallfont'">小</em>												发表于 2009-10-14 01:00&nbsp;																					<a href="viewthread.php?tid=25003&amp;page=1&amp;authorid=7766" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_8"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_8"></div><div id="ad_thread4_8"></div>
													<h2>自定义聊天界面——例子（１）</h2>
						
						
																											<div id="postmessage_280941" class="t_msgfont">打開页面 <a href="https://1984bbs.com/edit_file.html?chat_html" target="_blank">https://1984bbs.com/edit_file.html?chat_html</a>，输入后面的代码，点击Submit按钮保存。<br />
然后打開页面 <a href="https://1984bbs.com/edit_file.php?page=chat_html" target="_blank">https://1984bbs.com/edit_file.php?page=chat_html</a> 进行聊天。<br />
<br />
本例子是最简化实现自己的聊天界面，在上面的基础上稍作修改就好了。<div class="quote"><h5>引用:</h5><blockquote>&lt;html&gt;<br />
&lt;head&gt;<br />
&lt;meta http-equiv=&quot;Content-Type&quot; content=&quot;text/html; charset=gbk&quot; /&gt;<br />
&lt;script type=&quot;text/javascript&quot; language=&quot;javascript&quot;&gt;<br />
<br />
function runClearChatBox()<br />
{<br />
 //发送后清除输入的聊天内容<br />
 document.getElementById('chat_msg').value = &quot;&quot;;<br />
}<br />
<br />
function getChatItemWriteStart()<br />
{<br />
 return &quot;&quot;;<br />
}<br />
<br />
function getChatItemWriteString(Id,Sender,Msg,Time,Reply,Str)<br />
{<br />
&nbsp; &nbsp;return &quot;:[&quot;+Sender+&quot;]:&quot;+Time+&quot;:&quot;+Msg+&quot;&lt;br /&gt;&quot;;<br />
}<br />
<br />
function getChatItemWriteEnd()<br />
{<br />
 return &quot;&quot;;<br />
}<br />
<br />
function getChatListLimit(i)<br />
{<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;return i+1;<br />
}<br />
&lt;/script&gt;<br />
&lt;script type=&quot;text/javascript&quot; language=&quot;javascript&quot; src=&quot;../OnlineChat/port.for1984.OnlineChat.nocache.js&quot;&gt;&lt;/script&gt;<br />
&lt;/head&gt;<br />
&lt;!-- html 部分--&gt;<br />
&lt;body&gt;<br />
&lt;form&gt;<br />
&lt;input type=text id='chat_msg' size=60 /&gt;&lt;span id='chatAutoRefreshBox'&gt;&lt;!--自动刷新选项--&gt;&lt;/span&gt;&lt;span id='chatSubmitBox'&gt;&lt;!--发送按钮--&gt;&lt;/span&gt;<br />
&lt;/form&gt;<br />
&lt;br /&gt;<br />
<br />
&lt;span id='chatListBox'&gt;&lt;!--内容列表--&gt;&lt;/span&gt;<br />
&lt;/body&gt;<br />
<br />
&lt;/html&gt;</blockquote></div></div>

							
							
							
							
															<div id="post_rate_div_280941"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo280941_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://math2gold.com/" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=7766" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=25003&amp;repquote=280941&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 280941)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_8"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid281143" summary="pid281143" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7661" target="_blank" id="userinfo281143" class="dropmenu" onmouseover="showMenu(this.id)">CMGS</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">虚空中的神</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7661">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7661&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_9" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum281143" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=25003&page=1#pid281143', '话题链接已经复制到剪贴板')">10楼</strong>
													<em onclick="$('postmessage_281143').className='t_bigfont'">大</em>							<em onclick="$('postmessage_281143').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_281143').className='t_smallfont'">小</em>												发表于 2009-10-14 09:57&nbsp;																					<a href="viewthread.php?tid=25003&amp;page=1&amp;authorid=7661" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_9"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_9"></div><div id="ad_thread4_9"></div>
						
						
																											<div id="postmessage_281143" class="t_msgfont">mark下。。。最近找工作ing。。。保佑百度网易金山不刷了咱=。=</div>

							
							
							
							
															<div id="post_rate_div_281143"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo281143_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=7661" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=25003&amp;repquote=281143&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 281143)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_9"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid281726" summary="pid281726" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8853" target="_blank" id="userinfo281726" class="dropmenu" onmouseover="showMenu(this.id)">sinanjj</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8853">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8853&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_10" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum281726" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=25003&page=1#pid281726', '话题链接已经复制到剪贴板')">11楼</strong>
													<em onclick="$('postmessage_281726').className='t_bigfont'">大</em>							<em onclick="$('postmessage_281726').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_281726').className='t_smallfont'">小</em>												发表于 2009-10-14 14:38&nbsp;																					<a href="viewthread.php?tid=25003&amp;page=1&amp;authorid=8853" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_10"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_10"></div><div id="ad_thread4_10"></div>
													<h2>一会仔细看看</h2>
						
						
																											<div id="postmessage_281726" class="t_msgfont">一会仔细看看</div>

							
							
							
							
															<div id="post_rate_div_281726"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo281726_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=8853" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=25003&amp;repquote=281726&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 281726)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_10"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid281804" summary="pid281804" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 <a name="lastpost"></a>					<cite>											<a href="space.php?uid=7435" target="_blank" id="userinfo281804" class="dropmenu" onmouseover="showMenu(this.id)">zhubq</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7435">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7435&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_11" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum281804" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=25003&page=1#pid281804', '话题链接已经复制到剪贴板')">12楼</strong>
													<em onclick="$('postmessage_281804').className='t_bigfont'">大</em>							<em onclick="$('postmessage_281804').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_281804').className='t_smallfont'">小</em>												发表于 2009-10-14 15:30&nbsp;																					<a href="viewthread.php?tid=25003&amp;page=1&amp;authorid=7435" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_11"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_11"></div><div id="ad_thread4_11"></div>
						
						
																											<div id="postmessage_281804" class="t_msgfont">我们正学,NET呢&nbsp; &nbsp;晚上仔细研究下</div>

							
							
							
							
															<div id="post_rate_div_281804"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo281804_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=7435" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=25003&amp;repquote=281804&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 281804)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_11"></div>				</div>
			</td>
		</tr>
		</table>
		</div>
</form>





<div class="pages_btns">
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=25003&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=25003&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
				<span class="postbtn" id="newspecialtmp" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=25003&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

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

	<form method="post" id="postform" action="post.php?action=reply&amp;fid=26&amp;tid=25003&amp;extra=&amp;replysubmit=yes" onSubmit="return validate(this)">
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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<title>教你加密访问Google搜索（不会触碰G点） - 国家局域网研究所 -  1984bbs.com </title>
<meta name="keywords" content="" />
<meta name="MSSmartTagsPreventParsing" content="True" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<link rel="archives" title="1984bbs.com" href="https://1984bbs.com/archiver/" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_viewthread.css" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_common.css" />
<script type="text/javascript">
	var discuz_uid = 13019;var IMGDIR = 'images/default';var attackevasive = '0';var gid = 0;var STYLEID = '1';
	gid = parseInt('3');var fid = parseInt('26');var tid = parseInt('41513');
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
			<p><a href="index.php" id="forumlist" onmouseover="showMenu(this.id)" class="dropmenu">1984bbs.com</a> &raquo; <a href="forumdisplay.php?fid=26">国家局域网研究所</a> &raquo; 教你加密访问Google搜索（不会触碰G点）</p>
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
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=41513&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=41513&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
				<span class="postbtn" id="newspecial" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=41513&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

	<ul class="popupmenu_popup newspecialmenu" id="newspecial_menu" style="display: none">
		<li><a href="post.php?action=newthread&amp;fid=26&amp;extra=">发新话题</a></li>
		<li class="poll"><a href="post.php?action=newthread&amp;fid=26&amp;extra=&amp;special=1">发布投票</a></li>													</ul>

<form method="post" name="modactions">
	<input type="hidden" name="formhash" value="823c9fa2" />
	<div class="mainbox viewthread">
		<span class="headactions">
					<a href="my.php?item=favorites&amp;tid=41513" id="ajax_favorite" onclick="ajaxmenu(event, this.id, 3000, 0)">收藏</a>
			<a href="my.php?item=subscriptions&amp;subadd=41513" id="ajax_subscription" onclick="ajaxmenu(event, this.id, 3000, null, 0)">订阅</a>
			<a href="misc.php?action=emailfriend&amp;tid=41513" id="emailfriend" onclick="ajaxmenu(event, this.id, 9000000, null, 0)">推荐</a>
				<a href="viewthread.php?action=printable&amp;tid=41513" target="_blank" class="notabs">打印</a>
				</span>
		<h1>教你加密访问Google搜索（不会触碰G点）		</h1>
							<table id="pid535531" summary="pid535531" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>																		qingzhuhaiya</cite>
							该用户已被删除
															</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum535531" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=41513&page=1#pid535531', '话题链接已经复制到剪贴板')">1楼</strong>
													<em onclick="$('postmessage_535531').className='t_bigfont'">大</em>							<em onclick="$('postmessage_535531').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_535531').className='t_smallfont'">小</em>												发表于 2010-3-27 21:08&nbsp;																					<a href="viewthread.php?tid=41513&amp;page=1&amp;authorid=11866" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_0"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_0"></div><div id="ad_thread4_0"></div>
													<h2>教你加密访问Google搜索（不会触碰G点）</h2>
						
						
																											<div id="postmessage_535531" class="t_msgfont">RT <a href="https://javatweet.appspot.com/user?id=rtmeme" target="_blank"><font color="#0f83f8">@rtmeme</font></a>: RT <a href="https://javatweet.appspot.com/user?id=xbin999" target="_blank"><font color="#0f83f8">@xbin999</font></a> RT <a href="https://javatweet.appspot.com/user?id=CorndogCN" target="_blank"><font color="#0f83f8">@CorndogCN</font></a>: 2010年3月25日下午5时46分，Google热榜发来贺电，恭喜<font color="#ff0000"><strong>胡萝卜</strong></font>，<strong><font color="#ff0000">学习</font></strong>，<strong><font color="#ff0000">温习</font></strong>，<font color="#ff0000"><strong>温度</strong></font>成为上升最快关键词！<br />
<br />
<img src="http://imgur.com/mpARQ.jpg" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
<br />
搜索这些关键词，<strong><font color="#ff0000">Google</font></strong>会<strong><font color="#ff0000">连接被重置</font></strong>一段时间，俗称，<font color="#ff0000"><strong>撞墙</strong></font>了。<strong>好疼！！！</strong><br />
<strong>———————————————————————————————</strong><br />
<strong><font color="#ff0000">怎样使用Google搜索而连接不会重置呢？</font></strong><br />
不用代理，直接连接Google就可以搜索任何关键字，这可能么？<br />
回答是肯定的！当然能，关键是<font color="#ff0000"><strong>加密传输</strong></font>！<div class="quote"><h5>引用:</h5><blockquote> <br />
普通的<strong>Google搜索</strong>使用<font color="#ff0000"><strong>http://</strong></font>搜索搜索信息，所以很容易被截获信息，导致撞墙。我们设法使用<font color="#ff0000"><strong>https://</strong></font>搜索信息即可！</blockquote></div>1、拥有Google的<a href="https://mail.google.com/mail/" target="_blank"><font color="#0f83f8">Gmail</font></a>邮箱（全世界最安全稳定的邮箱，绝对保障个人隐私，不会随随便便把隐私交给某组织（<strong><font color="#ff0000">Yahoo</font></strong>注目））<br />
2、Gmail邮箱的<strong>右上角</strong>有小烧杯（Gmail实验室标致），请点开。【<strong>如果没有，请切换到英文Gmail模式</strong>】<br />
<img src="http://imgur.com/h91To.jpg" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
3、在实验室项目中找到Google搜索，并开启该服务。<br />
<img src="http://imgur.com/hfOme.jpg" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
4、Gmai左侧侧边栏出现【<strong>网页搜索</strong>】项目（可以点击+展开该项目）<br />
<img src="http://imgur.com/wnENT.jpg" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
5、在搜索框搜索任何关键字，譬如：<strong>胡萝卜</strong>。<br />
<img src="http://imgur.com/v1jWH.jpg" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
6、点击上图展开全屏，看一下网址。【<font color="#ff0000"><strong>https://</strong></font>】加密！<br />
<img src="http://imgur.com/G5OSF.jpg" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
7、<font color="#ff0000"><strong>连接没有被重置</strong></font>吧！大家还可以更暴力测试关键词，<font color="#ff0000">因为加密，所以美丽！</font><br />
——————————————————————————————— [p=30, 2, left]<font color="#ff0000"><font color="#000000"><strong>UpDate</strong>：</font></font><font color="#ff0000"><font color="#000000">没有<font color="#000000"><strong>Gmail</strong></font>的童鞋可以使用</font><a href="https://www.google.com/uds/samples/apidocs/helloworld.html" target="_blank"><font color="#0f83f8"> [url=https://www.google.com/uds/samples/apidocs/helloworld.html]https://www.google.com/uds/samples/apidocs/helloworld.html</a></font>[/url]</font>[/p]<br />
<font color="#ff0000"><font color="#000000"><font color="#000000"><strong><font color="#ff0000">无审核，HTTPS加密的谷歌搜索</font></strong></font>，搜啥都不撞墙，搜啥出来的都是真相！</font></font><br />
———————————————————————————————<br />
最后，祝大家Google搜索愉快！<br />
假如<strong>Google</strong>最终<strong>被</strong>离开了我们，我们依旧可以通过此方法访问Google搜索，使用<strong><font color="#ff0000">无过滤无审查</font></strong>的Google搜索引擎！<i> [p=30, 2, left]<strong>原创文章，转载请注明：</strong> 转载自<a href="http://zkaip.com/" target="_blank"><font color="#0f83f8">来自火星的一枚话痨</font></a>[/p][p=30, 2, left]<strong>本文链接地址:</strong> <a href="http://zkaip.com/2010/03/25/teach-you-visit-google-search-connections-not-be-reset/" target="_blank"><font color="#0f83f8">教你加密访问Google搜索（连接不会被重置）</font></a>[/p]</i></div>

							
							
							
							
															<div id="post_rate_div_535531"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=41513&amp;repquote=535531&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 535531)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_0"></div>				</div>
			</td>
		</tr>
		</table>
		</div><div class="ad_column" id="ad_interthread"><a href="/viewthread.php?tid=54699" target="_blank" style="color:red;">1984bbs是一个非营利项目，它需要您的捐助！</font></a>		</div>
	<div class="mainbox viewthread">
			<table id="pid535543" summary="pid535543" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=719" target="_blank" id="userinfo535543" class="dropmenu" onmouseover="showMenu(this.id)">Zenu</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">资深潜水员</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=719">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=719&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_1" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum535543" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=41513&page=1#pid535543', '话题链接已经复制到剪贴板')">2楼</strong>
													<em onclick="$('postmessage_535543').className='t_bigfont'">大</em>							<em onclick="$('postmessage_535543').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_535543').className='t_smallfont'">小</em>												发表于 2010-3-27 21:15&nbsp;																					<a href="viewthread.php?tid=41513&amp;page=1&amp;authorid=719" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_1"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_1"></div><div id="ad_thread4_1"></div>
						
						
																											<div id="postmessage_535543" class="t_msgfont">感谢楼主分享，很实用。</div>

							
							
							
							
															<div id="post_rate_div_535543"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo535543_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=719" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=41513&amp;repquote=535543&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 535543)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_1"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid535556" summary="pid535556" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10451" target="_blank" id="userinfo535556" class="dropmenu" onmouseover="showMenu(this.id)">mrstation</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10451">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10451&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_2" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum535556" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=41513&page=1#pid535556', '话题链接已经复制到剪贴板')">3楼</strong>
													<em onclick="$('postmessage_535556').className='t_bigfont'">大</em>							<em onclick="$('postmessage_535556').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_535556').className='t_smallfont'">小</em>												发表于 2010-3-27 21:29&nbsp;																					<a href="viewthread.php?tid=41513&amp;page=1&amp;authorid=10451" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_2"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_2"></div><div id="ad_thread4_2"></div>
						
						
																											<div id="postmessage_535556" class="t_msgfont">为什么搜这些词会撞墙？</div>

							
							
							
							
															<div id="post_rate_div_535556"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo535556_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=10451" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=41513&amp;repquote=535556&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 535556)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_2"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid535558" summary="pid535558" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=9417" target="_blank" id="userinfo535558" class="dropmenu" onmouseover="showMenu(this.id)">nailking</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=9417">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=9417&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_3" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum535558" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=41513&page=1#pid535558', '话题链接已经复制到剪贴板')">4楼</strong>
													<em onclick="$('postmessage_535558').className='t_bigfont'">大</em>							<em onclick="$('postmessage_535558').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_535558').className='t_smallfont'">小</em>												发表于 2010-3-27 21:29&nbsp;																					<a href="viewthread.php?tid=41513&amp;page=1&amp;authorid=9417" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_3"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_3"></div><div id="ad_thread4_3"></div>
						
						
																											<div id="postmessage_535558" class="t_msgfont">学习了.哈哈.</div>

							
							
							
							
															<div id="post_rate_div_535558"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo535558_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=9417" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=41513&amp;repquote=535558&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 535558)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_3"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid535564" summary="pid535564" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12434" target="_blank" id="userinfo535564" class="dropmenu" onmouseover="showMenu(this.id)">kai058</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12434">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12434&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_4" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum535564" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=41513&page=1#pid535564', '话题链接已经复制到剪贴板')">5楼</strong>
													<em onclick="$('postmessage_535564').className='t_bigfont'">大</em>							<em onclick="$('postmessage_535564').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_535564').className='t_smallfont'">小</em>												发表于 2010-3-27 21:40&nbsp;																					<a href="viewthread.php?tid=41513&amp;page=1&amp;authorid=12434" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_4"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_4"></div><div id="ad_thread4_4"></div>
						
						
																											<div id="postmessage_535564" class="t_msgfont">感谢楼主分享</div>

							
							
							
							
															<div id="post_rate_div_535564"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo535564_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=12434" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=41513&amp;repquote=535564&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 535564)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_4"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid535567" summary="pid535567" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=3932" target="_blank" id="userinfo535567" class="dropmenu" onmouseover="showMenu(this.id)">magicbully</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=3932">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=3932&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_5" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum535567" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=41513&page=1#pid535567', '话题链接已经复制到剪贴板')">6楼</strong>
													<em onclick="$('postmessage_535567').className='t_bigfont'">大</em>							<em onclick="$('postmessage_535567').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_535567').className='t_smallfont'">小</em>												发表于 2010-3-27 21:47&nbsp;																					<a href="viewthread.php?tid=41513&amp;page=1&amp;authorid=3932" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_5"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_5"></div><div id="ad_thread4_5"></div>
						
						
																											<div id="postmessage_535567" class="t_msgfont">经实践证明，可行。</div>

							
							
							
							
															<div id="post_rate_div_535567"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo535567_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=3932" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=41513&amp;repquote=535567&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 535567)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_5"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid535580" summary="pid535580" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=3656" target="_blank" id="userinfo535580" class="dropmenu" onmouseover="showMenu(this.id)">jerrylee1987</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">雄关漫道真如铁，而今迈步从头越</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=3656">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=3656&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_6" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum535580" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=41513&page=1#pid535580', '话题链接已经复制到剪贴板')">7楼</strong>
													<em onclick="$('postmessage_535580').className='t_bigfont'">大</em>							<em onclick="$('postmessage_535580').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_535580').className='t_smallfont'">小</em>												发表于 2010-3-27 21:56&nbsp;																					<a href="viewthread.php?tid=41513&amp;page=1&amp;authorid=3656" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_6"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_6"></div><div id="ad_thread4_6"></div>
						
						
																											<div id="postmessage_535580" class="t_msgfont">但是只能搜索，无法打开搜索出来的网页……</div>

							
							
							
							
															<div id="post_rate_div_535580"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo535580_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=3656" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=41513&amp;repquote=535580&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 535580)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_6"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid535584" summary="pid535584" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12037" target="_blank" id="userinfo535584" class="dropmenu" onmouseover="showMenu(this.id)">Diablo</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">封锁带来觉醒，黑暗衬托光明。</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12037">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12037&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_7" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum535584" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=41513&page=1#pid535584', '话题链接已经复制到剪贴板')">8楼</strong>
													<em onclick="$('postmessage_535584').className='t_bigfont'">大</em>							<em onclick="$('postmessage_535584').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_535584').className='t_smallfont'">小</em>												发表于 2010-3-27 21:59&nbsp;																					<a href="viewthread.php?tid=41513&amp;page=1&amp;authorid=12037" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_7"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_7"></div><div id="ad_thread4_7"></div>
						
						
																											<div id="postmessage_535584" class="t_msgfont">胡萝卜，学习，温习，温度为什么会成为上升最快关键词？</div>

							
							
							
							
															<div id="post_rate_div_535584"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo535584_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=12037" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=41513&amp;repquote=535584&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 535584)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_7"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid535589" summary="pid535589" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12037" target="_blank" id="userinfo535589" class="dropmenu" onmouseover="showMenu(this.id)">Diablo</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">封锁带来觉醒，黑暗衬托光明。</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12037">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12037&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_8" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum535589" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=41513&page=1#pid535589', '话题链接已经复制到剪贴板')">9楼</strong>
													<em onclick="$('postmessage_535589').className='t_bigfont'">大</em>							<em onclick="$('postmessage_535589').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_535589').className='t_smallfont'">小</em>												发表于 2010-3-27 22:03&nbsp;																					<a href="viewthread.php?tid=41513&amp;page=1&amp;authorid=12037" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_8"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_8"></div><div id="ad_thread4_8"></div>
						
						
																											<div id="postmessage_535589" class="t_msgfont">搜索在这里面没什么意义啊，你一点链接又打开新窗口还是撞墙。</div>

							
							
							
							
															<div id="post_rate_div_535589"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo535589_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=12037" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=41513&amp;repquote=535589&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 535589)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_8"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid536442" summary="pid536442" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12385" target="_blank" id="userinfo536442" class="dropmenu" onmouseover="showMenu(this.id)">elephantdancing</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12385">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12385&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_9" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum536442" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=41513&page=1#pid536442', '话题链接已经复制到剪贴板')">10楼</strong>
													<em onclick="$('postmessage_536442').className='t_bigfont'">大</em>							<em onclick="$('postmessage_536442').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_536442').className='t_smallfont'">小</em>												发表于 2010-3-28 15:38&nbsp;																					<a href="viewthread.php?tid=41513&amp;page=1&amp;authorid=12385" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_9"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_9"></div><div id="ad_thread4_9"></div>
						
						
																											<div id="postmessage_536442" class="t_msgfont">胡萝卜也敏感了？咋回事？</div>

							
							
							
							
															<div id="post_rate_div_536442"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo536442_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=12385" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=41513&amp;repquote=536442&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 536442)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_9"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid537012" summary="pid537012" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=3747" target="_blank" id="userinfo537012" class="dropmenu" onmouseover="showMenu(this.id)">kiwi16</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=3747">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=3747&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_10" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum537012" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=41513&page=1#pid537012', '话题链接已经复制到剪贴板')">11楼</strong>
													<em onclick="$('postmessage_537012').className='t_bigfont'">大</em>							<em onclick="$('postmessage_537012').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_537012').className='t_smallfont'">小</em>												发表于 2010-3-28 23:00&nbsp;																					<a href="viewthread.php?tid=41513&amp;page=1&amp;authorid=3747" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_10"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_10"></div><div id="ad_thread4_10"></div>
													<h2>回复 10楼 elephantdancing 的话题</h2>
						
						
																											<div id="postmessage_537012" class="t_msgfont">啊，都成热榜了啊，因为任何含有 胡，温，习，贾，周，李的TG党魁的姓氏的字眼都会撞墙导致google被重置。</div>

							
							
							
							
															<div id="post_rate_div_537012"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo537012_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=3747" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=41513&amp;repquote=537012&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 537012)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_10"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid537023" summary="pid537023" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12794" target="_blank" id="userinfo537023" class="dropmenu" onmouseover="showMenu(this.id)">Designer</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12794">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12794&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_11" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum537023" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=41513&page=1#pid537023', '话题链接已经复制到剪贴板')">12楼</strong>
													<em onclick="$('postmessage_537023').className='t_bigfont'">大</em>							<em onclick="$('postmessage_537023').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_537023').className='t_smallfont'">小</em>												发表于 2010-3-28 23:09&nbsp;																					<a href="viewthread.php?tid=41513&amp;page=1&amp;authorid=12794" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_11"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_11"></div><div id="ad_thread4_11"></div>
						
						
																											<div id="postmessage_537023" class="t_msgfont">试试看</div>

							
							
							
							
															<div id="post_rate_div_537023"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo537023_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=12794" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=41513&amp;repquote=537023&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 537023)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_11"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid537060" summary="pid537060" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=11515" target="_blank" id="userinfo537060" class="dropmenu" onmouseover="showMenu(this.id)">spectabilis</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=11515">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=11515&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_12" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum537060" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=41513&page=1#pid537060', '话题链接已经复制到剪贴板')">13楼</strong>
													<em onclick="$('postmessage_537060').className='t_bigfont'">大</em>							<em onclick="$('postmessage_537060').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_537060').className='t_smallfont'">小</em>												发表于 2010-3-28 23:44&nbsp;																					<a href="viewthread.php?tid=41513&amp;page=1&amp;authorid=11515" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_12"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_12"></div><div id="ad_thread4_12"></div>
						
						
																											<div id="postmessage_537060" class="t_msgfont">搜出来也打不开啊~谁能打开！</div>

							
							
							
							
															<div id="post_rate_div_537060"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo537060_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=11515" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=41513&amp;repquote=537060&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 537060)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_12"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid537104" summary="pid537104" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12238" target="_blank" id="userinfo537104" class="dropmenu" onmouseover="showMenu(this.id)">萧振衣</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">振衣千仞岗，濯足万里流</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12238">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12238&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_13" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum537104" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=41513&page=1#pid537104', '话题链接已经复制到剪贴板')">14楼</strong>
													<em onclick="$('postmessage_537104').className='t_bigfont'">大</em>							<em onclick="$('postmessage_537104').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_537104').className='t_smallfont'">小</em>												发表于 2010-3-29 00:27&nbsp;																					<a href="viewthread.php?tid=41513&amp;page=1&amp;authorid=12238" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_13"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_13"></div><div id="ad_thread4_13"></div>
						
						
																											<div id="postmessage_537104" class="t_msgfont">对啊，搜出来打不开有什么用呢</div>

							
							
							
							
															<div id="post_rate_div_537104"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo537104_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=12238" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=41513&amp;repquote=537104&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 537104)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_13"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid537112" summary="pid537112" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2441" target="_blank" id="userinfo537112" class="dropmenu" onmouseover="showMenu(this.id)">高渐离</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">组内伍毛全家死光</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2441">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2441&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_14" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum537112" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=41513&page=1#pid537112', '话题链接已经复制到剪贴板')">15楼</strong>
													<em onclick="$('postmessage_537112').className='t_bigfont'">大</em>							<em onclick="$('postmessage_537112').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_537112').className='t_smallfont'">小</em>												发表于 2010-3-29 00:34&nbsp;																					<a href="viewthread.php?tid=41513&amp;page=1&amp;authorid=2441" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_14"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_14"></div><div id="ad_thread4_14"></div>
						
						
																											<div id="postmessage_537112" class="t_msgfont">劳神哈，这是给不会翻墙的P民做启发的，<br />
其实一翻墙全解决</div>

							
							
							
							
															<div id="post_rate_div_537112"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo537112_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=2441" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=41513&amp;repquote=537112&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 537112)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_14"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid537526" summary="pid537526" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=5779" target="_blank" id="userinfo537526" class="dropmenu" onmouseover="showMenu(this.id)">路上拾荒</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=5779">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=5779&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_15" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum537526" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=41513&page=1#pid537526', '话题链接已经复制到剪贴板')">16楼</strong>
													<em onclick="$('postmessage_537526').className='t_bigfont'">大</em>							<em onclick="$('postmessage_537526').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_537526').className='t_smallfont'">小</em>												发表于 2010-3-29 11:26&nbsp;																					<a href="viewthread.php?tid=41513&amp;page=1&amp;authorid=5779" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_15"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_15"></div><div id="ad_thread4_15"></div>
						
						
																											<div id="postmessage_537526" class="t_msgfont">没有小烧杯，切换到英文版也没有<br />
<br />
嗯，点【设置】，然后点【实验室】，只有启用了某个实验室功能，才会有小烧杯。<br />
<br />
[<i> 本帖最后由 路上拾荒 于 2010-3-29 11:32 编辑 </i>]</div>

							
							
							
							
															<div id="post_rate_div_537526"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo537526_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=5779" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=41513&amp;repquote=537526&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 537526)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_15"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid538116" summary="pid538116" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=11636" target="_blank" id="userinfo538116" class="dropmenu" onmouseover="showMenu(this.id)">发粪涂墙</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=11636">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=11636&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_16" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum538116" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=41513&page=1#pid538116', '话题链接已经复制到剪贴板')">17楼</strong>
													<em onclick="$('postmessage_538116').className='t_bigfont'">大</em>							<em onclick="$('postmessage_538116').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_538116').className='t_smallfont'">小</em>												发表于 2010-3-29 17:44&nbsp;																					<a href="viewthread.php?tid=41513&amp;page=1&amp;authorid=11636" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_16"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_16"></div><div id="ad_thread4_16"></div>
						
						
																											<div id="postmessage_538116" class="t_msgfont">受教了，谢谢分享。</div>

							
							
							
							
															<div id="post_rate_div_538116"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo538116_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=11636" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=41513&amp;repquote=538116&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 538116)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_16"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid538244" summary="pid538244" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10792" target="_blank" id="userinfo538244" class="dropmenu" onmouseover="showMenu(this.id)">lawzhang</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10792">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10792&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_17" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum538244" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=41513&page=1#pid538244', '话题链接已经复制到剪贴板')">18楼</strong>
													<em onclick="$('postmessage_538244').className='t_bigfont'">大</em>							<em onclick="$('postmessage_538244').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_538244').className='t_smallfont'">小</em>												发表于 2010-3-29 19:18&nbsp;																					<a href="viewthread.php?tid=41513&amp;page=1&amp;authorid=10792" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_17"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_17"></div><div id="ad_thread4_17"></div>
						
						
																											<div id="postmessage_538244" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>qingzhuhaiya</i> 于 2010-3-27 21:08 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=535531&amp;ptid=41513" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
RT @rtmeme: RT @xbin999 RT @CorndogCN: 2010年3月25日下午5时46分，Google热榜发来贺电，恭喜胡萝卜，学习，温习，温度成为上升最快关键词！<br />
<br />
<img src="http://imgur.com/mpARQ.jpg" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
<br />
搜索这些关键词，Google会连接被重置 ... </blockquote></div>受教了</div>

							
							
							
							
															<div id="post_rate_div_538244"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo538244_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=10792" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=41513&amp;repquote=538244&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 538244)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_17"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid538276" summary="pid538276" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=5515" target="_blank" id="userinfo538276" class="dropmenu" onmouseover="showMenu(this.id)">石井武濑</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">网界暴徒</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=5515">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=5515&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_18" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum538276" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=41513&page=1#pid538276', '话题链接已经复制到剪贴板')">19楼</strong>
													<em onclick="$('postmessage_538276').className='t_bigfont'">大</em>							<em onclick="$('postmessage_538276').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_538276').className='t_smallfont'">小</em>												发表于 2010-3-29 19:30&nbsp;																					<a href="viewthread.php?tid=41513&amp;page=1&amp;authorid=5515" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_18"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_18"></div><div id="ad_thread4_18"></div>
						
						
																											<div id="postmessage_538276" class="t_msgfont">无用</div>

							
							
							
							
															<div id="post_rate_div_538276"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo538276_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=5515" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=41513&amp;repquote=538276&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 538276)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_18"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid538401" summary="pid538401" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1333" target="_blank" id="userinfo538401" class="dropmenu" onmouseover="showMenu(this.id)">废种豆豉</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">死胎  @vanlulnav       http://www.bullock.cn/blogs/vanlulnav/</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1333">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1333&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_19" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum538401" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=41513&page=1#pid538401', '话题链接已经复制到剪贴板')">20楼</strong>
													<em onclick="$('postmessage_538401').className='t_bigfont'">大</em>							<em onclick="$('postmessage_538401').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_538401').className='t_smallfont'">小</em>												发表于 2010-3-29 20:49&nbsp;																					<a href="viewthread.php?tid=41513&amp;page=1&amp;authorid=1333" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_19"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_19"></div><div id="ad_thread4_19"></div>
						
						
																											<div id="postmessage_538401" class="t_msgfont">搜索出來還是要翻牆過去看 不如翻了再搜</div>

							
							
							
							
															<div id="post_rate_div_538401"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo538401_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://www.bullock.cn/blogs/vanlulnav/" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=1333" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=41513&amp;repquote=538401&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 538401)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_19"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid544710" summary="pid544710" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=9515" target="_blank" id="userinfo544710" class="dropmenu" onmouseover="showMenu(this.id)">waiting_it</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=9515">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=9515&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_20" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum544710" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=41513&page=1#pid544710', '话题链接已经复制到剪贴板')">21楼</strong>
													<em onclick="$('postmessage_544710').className='t_bigfont'">大</em>							<em onclick="$('postmessage_544710').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_544710').className='t_smallfont'">小</em>												发表于 2010-4-2 14:47&nbsp;																					<a href="viewthread.php?tid=41513&amp;page=1&amp;authorid=9515" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_20"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_20"></div><div id="ad_thread4_20"></div>
						
						
																											<div id="postmessage_544710" class="t_msgfont">这个有用，如果在gmail页面可以浏览网页就更好了。</div>

							
							
							
							
															<div id="post_rate_div_544710"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo544710_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=9515" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=41513&amp;repquote=544710&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 544710)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_20"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid550581" summary="pid550581" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=3889" target="_blank" id="userinfo550581" class="dropmenu" onmouseover="showMenu(this.id)">zuoang</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=3889">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=3889&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_21" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum550581" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=41513&page=1#pid550581', '话题链接已经复制到剪贴板')">22楼</strong>
													<em onclick="$('postmessage_550581').className='t_bigfont'">大</em>							<em onclick="$('postmessage_550581').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_550581').className='t_smallfont'">小</em>												发表于 2010-4-6 11:35&nbsp;																					<a href="viewthread.php?tid=41513&amp;page=1&amp;authorid=3889" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_21"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_21"></div><div id="ad_thread4_21"></div>
						
						
																											<div id="postmessage_550581" class="t_msgfont">很实用，呵呵</div>

							
							
							
							
															<div id="post_rate_div_550581"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo550581_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=3889" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=41513&amp;repquote=550581&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 550581)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_21"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid550785" summary="pid550785" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12774" target="_blank" id="userinfo550785" class="dropmenu" onmouseover="showMenu(this.id)">张之谷</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">少年</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12774">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12774&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_22" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum550785" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=41513&page=1#pid550785', '话题链接已经复制到剪贴板')">23楼</strong>
													<em onclick="$('postmessage_550785').className='t_bigfont'">大</em>							<em onclick="$('postmessage_550785').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_550785').className='t_smallfont'">小</em>												发表于 2010-4-6 13:01&nbsp;																					<a href="viewthread.php?tid=41513&amp;page=1&amp;authorid=12774" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_22"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_22"></div><div id="ad_thread4_22"></div>
						
						
																											<div id="postmessage_550785" class="t_msgfont">https是http的安全模式，我上reader就是这样上的</div>

							
							
							
							
															<div id="post_rate_div_550785"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo550785_menu" style="display: none;">
										<div class="imicons">
												<a href="http://wpa.qq.com/msgrd?V=1&amp;Uin=859189653&amp;Site=1984bbs.com&amp;Menu=yes" target="_blank"><img src="images/default/qq.gif" alt="QQ" /></a>																							</div>
										<dl></dl>
										<p><a href="space.php?uid=12774" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=41513&amp;repquote=550785&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 550785)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_22"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid552886" summary="pid552886" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 <a name="lastpost"></a>					<cite>											<a href="space.php?uid=749" target="_blank" id="userinfo552886" class="dropmenu" onmouseover="showMenu(this.id)">gossip</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=749">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=749&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_23" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum552886" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=41513&page=1#pid552886', '话题链接已经复制到剪贴板')">24楼</strong>
													<em onclick="$('postmessage_552886').className='t_bigfont'">大</em>							<em onclick="$('postmessage_552886').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_552886').className='t_smallfont'">小</em>												发表于 2010-4-7 15:43&nbsp;																					<a href="viewthread.php?tid=41513&amp;page=1&amp;authorid=749" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_23"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_23"></div><div id="ad_thread4_23"></div>
						
						
																											<div id="postmessage_552886" class="t_msgfont">我以前可以直接上GOOGLE 的https不知道现在为啥不行了</div>

							
							
							
							
															<div id="post_rate_div_552886"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo552886_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=749" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=41513&amp;repquote=552886&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 552886)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_23"></div>				</div>
			</td>
		</tr>
		</table>
		</div>
</form>





<div class="pages_btns">
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=41513&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=41513&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
				<span class="postbtn" id="newspecialtmp" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=41513&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

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

	<form method="post" id="postform" action="post.php?action=reply&amp;fid=26&amp;tid=41513&amp;extra=&amp;replysubmit=yes" onSubmit="return validate(this)">
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
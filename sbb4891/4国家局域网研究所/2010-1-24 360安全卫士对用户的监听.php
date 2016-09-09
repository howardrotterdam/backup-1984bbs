<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<title>360安全卫士对用户的监听 - 国家局域网研究所 -  1984bbs.com </title>
<meta name="keywords" content="" />
<meta name="MSSmartTagsPreventParsing" content="True" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<link rel="archives" title="1984bbs.com" href="https://1984bbs.com/archiver/" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_viewthread.css" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_common.css" />
<script type="text/javascript">
	var discuz_uid = 13019;var IMGDIR = 'images/default';var attackevasive = '0';var gid = 0;var STYLEID = '1';
	gid = parseInt('3');var fid = parseInt('26');var tid = parseInt('35809');
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
			<p><a href="index.php" id="forumlist" onmouseover="showMenu(this.id)" class="dropmenu">1984bbs.com</a> &raquo; <a href="forumdisplay.php?fid=26">国家局域网研究所</a> &raquo; 360安全卫士对用户的监听</p>
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
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=35809&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=35809&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
				<span class="postbtn" id="newspecial" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=35809&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

	<ul class="popupmenu_popup newspecialmenu" id="newspecial_menu" style="display: none">
		<li><a href="post.php?action=newthread&amp;fid=26&amp;extra=">发新话题</a></li>
		<li class="poll"><a href="post.php?action=newthread&amp;fid=26&amp;extra=&amp;special=1">发布投票</a></li>													</ul>

<form method="post" name="modactions">
	<input type="hidden" name="formhash" value="823c9fa2" />
	<div class="mainbox viewthread">
		<span class="headactions">
					<a href="my.php?item=favorites&amp;tid=35809" id="ajax_favorite" onclick="ajaxmenu(event, this.id, 3000, 0)">收藏</a>
			<a href="my.php?item=subscriptions&amp;subadd=35809" id="ajax_subscription" onclick="ajaxmenu(event, this.id, 3000, null, 0)">订阅</a>
			<a href="misc.php?action=emailfriend&amp;tid=35809" id="emailfriend" onclick="ajaxmenu(event, this.id, 9000000, null, 0)">推荐</a>
				<a href="viewthread.php?action=printable&amp;tid=35809" target="_blank" class="notabs">打印</a>
				</span>
		<h1>360安全卫士对用户的监听		</h1>
				<ins>
						<a href="misc.php?action=viewthreadmod&amp;tid=35809" title="主题操作记录" target="_blank">本主题由 张书记 于 2010-1-25 00:10 合并</a>								</ins>
							<table id="pid448678" summary="pid448678" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7" target="_blank" id="userinfo448678" class="dropmenu" onmouseover="showMenu(this.id)">张书记</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">http://twitter.com/SecretaryZhang</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_0" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum448678" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=35809&page=1#pid448678', '话题链接已经复制到剪贴板')">1楼</strong>
													<em onclick="$('postmessage_448678').className='t_bigfont'">大</em>							<em onclick="$('postmessage_448678').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_448678').className='t_smallfont'">小</em>												发表于 2010-1-24 00:49&nbsp;																					<a href="viewthread.php?tid=35809&amp;page=1&amp;authorid=7" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_0"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_0"></div><div id="ad_thread4_0"></div>
													<h2>360安全卫士对用户的监听</h2>
						
						
																											<div id="postmessage_448678" class="t_msgfont"><a href="http://gfwrev.blogspot.com/2010/01/blog-post.html" target="_blank">http://gfwrev.blogspot.com/2010/01/blog-post.html</a><br />
<br />
看到一则不起眼的资料：<br />
<br />
&nbsp; &nbsp; 搜索引擎安全管理系统<br />
&nbsp; &nbsp; 完成人：刘欣然；方滨兴；齐向东；李伍峰；石晓虹；刘正荣；杨臻；丁丽；张鸿；陈斌<br />
&nbsp; &nbsp; 单位： 国家计算机网络与信息安全管理中心；北京三际无限网络科技有限公司；国务院新闻办公室互联网新闻研究中心<br />
&nbsp; &nbsp; 日期：2005年2月2日<br />
&nbsp; &nbsp; 简介：该系统提供了第三方的基于HTTP标准的规范高性能过滤接口，在输入和输出两个环节分三级进行有效的信息过滤；提供了统一管理平台，可以远程进行管理，经单点配置过滤策略即可实现全局同时生效，且策略下发过程可保证对过滤目标的保密要求系统可以采用分布式或集中式的部署结构。系统接入简单，易于部署，适用于绝大多数现有的搜索引擎，可以满足现有国内日查询量的处理要求。该系统已实际部署一些国内较大的搜索引擎，取得了良好的使用效果。全面推广和部署该系统，将为净化国内互联网空间提供有力保障。<br />
<br />
一点事实：当时刘欣然、方滨兴是安管中心的研究人员和负责人，而安管中心是GFW的运维单位；李伍峰、刘正荣是中国最大网络审查机构国新办的网络部门负责人；齐向东、石晓虹是三际无限公司的高管，而该公司则是360安全卫士的开发者。<br />
<br />
我们知道国内的搜索引擎都有关键词过滤，通常认为这是搜索引擎的自我审查。然而最近有一些案例发现在某些情况下不同搜索引擎的“自我审查”会同时失效，说明背后并不简单。以上资料说明了这样几个事实：<br />
<br />
&nbsp; &nbsp;1. 存在一个对国内搜索引擎进行统一关键词过滤的审查管理系统，其被称为“搜索引擎安全管理系统”；<br />
&nbsp; &nbsp;2. 这个系统是主要由GFW的运维单位安管中心（CNCERT/CC）开发；<br />
&nbsp; &nbsp;3. 这个系统主要需求和日常使用来自国新办，有密级；<br />
&nbsp; &nbsp;4. 国内搜索引擎的关键词过滤有一部分是由国新办直接操作的“非自我审查”；<br />
&nbsp; &nbsp;5. 360安全卫士的开发者三际无限公司也参与了这个系统的开发。<br />
<br />
三际无限公司的所作所为已经不仅仅是“将用户隐私信息交给政府安全部门”；它协助CNCERT、积极参与建设对国内互联网的审查机制，为长城添砖加瓦，这已经超出作恶的范畴，可称得上助纣为虐。加之之前报道称360安全卫士将自由门等软件检测为恶意软件，这个公司的道德水准已经昭然若揭。请丝毫不要怀疑三际无限与审查部门和安全部门的良好关系，请丝毫不要惊讶安全部门会通过360安全卫士对用户进行监听。<br />
<br />
另引用双想范文 [huanqiu.com] 一段：<br />
<br />
&nbsp; &nbsp; 为掩人耳目，中情局成立了一家高科技公司，以民间身分为幌子与谷硅高科技公司合作开发能够从互联网上获取任何内容的间谍软件。间谍软件以捆绑方式和其他软件一起当用户安装实用软件时它悄悄地进行自动安装。</div>

							
							
							
							
															<div id="post_rate_div_448678"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo448678_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=7" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=35809&amp;repquote=448678&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 448678)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_0"></div>				</div>
			</td>
		</tr>
		</table>
		</div><div class="ad_column" id="ad_interthread"><a href="/viewthread.php?tid=54699" target="_blank" style="color:red;">1984bbs是一个非营利项目，它需要您的捐助！</font></a>		</div>
	<div class="mainbox viewthread">
			<table id="pid448683" summary="pid448683" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=9943" target="_blank" id="userinfo448683" class="dropmenu" onmouseover="showMenu(this.id)">nitrogen</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=9943">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=9943&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_1" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum448683" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=35809&page=1#pid448683', '话题链接已经复制到剪贴板')">2楼</strong>
													<em onclick="$('postmessage_448683').className='t_bigfont'">大</em>							<em onclick="$('postmessage_448683').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_448683').className='t_smallfont'">小</em>												发表于 2010-1-24 00:54&nbsp;																					<a href="viewthread.php?tid=35809&amp;page=1&amp;authorid=9943" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_1"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_1"></div><div id="ad_thread4_1"></div>
						
						
																											<div id="postmessage_448683" class="t_msgfont">360肯定有鬼，现在的免费杀毒我认为很有问题</div>

							
							
							
							
															<div id="post_rate_div_448683"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo448683_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=9943" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=35809&amp;repquote=448683&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 448683)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_1"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid448722" summary="pid448722" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=3699" target="_blank" id="userinfo448722" class="dropmenu" onmouseover="showMenu(this.id)">Leonhardt</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">阿赖耶识研讨会 澳洲支部 现组员 准人参负犬一只兼法广搬运工(无薪,不定时)</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=3699">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=3699&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_2" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum448722" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=35809&page=1#pid448722', '话题链接已经复制到剪贴板')">3楼</strong>
													<em onclick="$('postmessage_448722').className='t_bigfont'">大</em>							<em onclick="$('postmessage_448722').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_448722').className='t_smallfont'">小</em>												发表于 2010-1-24 01:59&nbsp;																					<a href="viewthread.php?tid=35809&amp;page=1&amp;authorid=3699" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_2"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_2"></div><div id="ad_thread4_2"></div>
						
						
																											<div id="postmessage_448722" class="t_msgfont">糟了，360用了很长时间。。。</div>

							
							
							
							
															<div id="post_rate_div_448722"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo448722_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=3699" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=35809&amp;repquote=448722&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 448722)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_2"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid448726" summary="pid448726" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2441" target="_blank" id="userinfo448726" class="dropmenu" onmouseover="showMenu(this.id)">高渐离</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">组内伍毛全家死光</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2441">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2441&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_3" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum448726" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=35809&page=1#pid448726', '话题链接已经复制到剪贴板')">4楼</strong>
													<em onclick="$('postmessage_448726').className='t_bigfont'">大</em>							<em onclick="$('postmessage_448726').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_448726').className='t_smallfont'">小</em>												发表于 2010-1-24 02:19&nbsp;																					<a href="viewthread.php?tid=35809&amp;page=1&amp;authorid=2441" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_3"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_3"></div><div id="ad_thread4_3"></div>
						
						
																											<div id="postmessage_448726" class="t_msgfont">朋友用360 ，PUFF翻墙翻不了</div>

							
							
							
							
															<div id="post_rate_div_448726"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo448726_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=2441" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=35809&amp;repquote=448726&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 448726)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_3"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid448805" summary="pid448805" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10114" target="_blank" id="userinfo448805" class="dropmenu" onmouseover="showMenu(this.id)">m3g4</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10114">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10114&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_4" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum448805" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=35809&page=1#pid448805', '话题链接已经复制到剪贴板')">5楼</strong>
													<em onclick="$('postmessage_448805').className='t_bigfont'">大</em>							<em onclick="$('postmessage_448805').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_448805').className='t_smallfont'">小</em>												发表于 2010-1-24 08:50&nbsp;																					<a href="viewthread.php?tid=35809&amp;page=1&amp;authorid=10114" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_4"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_4"></div><div id="ad_thread4_4"></div>
						
						
																											<div id="postmessage_448805" class="t_msgfont">趁早给卸了，也鼓励周围的人不要再装360</div>

							
							
							
							
															<div id="post_rate_div_448805"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo448805_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=10114" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=35809&amp;repquote=448805&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 448805)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_4"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid449466" summary="pid449466" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=4359" target="_blank" id="userinfo449466" class="dropmenu" onmouseover="showMenu(this.id)">实验小白鼠B</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=4359">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=4359&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_5" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum449466" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=35809&page=1#pid449466', '话题链接已经复制到剪贴板')">6楼</strong>
													<em onclick="$('postmessage_449466').className='t_bigfont'">大</em>							<em onclick="$('postmessage_449466').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_449466').className='t_smallfont'">小</em>												发表于 2010-1-24 17:09&nbsp;																					<a href="viewthread.php?tid=35809&amp;page=1&amp;authorid=4359" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_5"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_5"></div><div id="ad_thread4_5"></div>
													<h2>珍爱生命 远离360 天朝新推搜索引擎安全管理系统</h2>
						
						
																											<div id="postmessage_449466" class="t_msgfont">搜索引擎安全管理系统<br />
作者：gfwrev&nbsp; &nbsp;来源：<a href="http://gfwrev.blogspot.com/2010/01/blog-post.html" target="_blank">http://gfwrev.blogspot.com/2010/01/blog-post.html</a><br />
 <br />
看到一则不起眼的资料：<br />
 <br />
搜索引擎安全管理系统<br />
 <br />
完成人：刘欣然；方滨兴；齐向东；李伍峰；石晓虹；刘正荣；杨臻；丁丽；张鸿；陈斌<br />
单位： 国家计算机网络与信息安全管理中心；北京三际无限网络科技有限公司；国务院新闻办公室互联网新闻研究中心<br />
日期：2005年2月2日<br />
简介：该系统提供了第三方的基于HTTP标准的规范高性能过滤接口，在输入和输出两个环节分三级进行有效的信息过滤；提供了统一管理平台，可以远程进行管理，经单点配置过滤策略即可实现全局同时生效，且策略下发过程可保证对过滤目标的保密要求系统可以采用分布式或集中式的部署结构。系统接入简单，易于部署，适用于绝大多数现有的搜索引擎，可以满足现有国内日查询量的处理要求。该系统已实际部署一些国内较大的搜索引擎，取得了良好的使用效果。全面推广和部署该系统，将为净化国内互联网空间提供有力保障。<br />
 <br />
一点事实：当时刘欣然、方滨兴是安管中心的研究人员和负责人，而安管中心是GFW的运维单位；李伍峰、刘正荣是中国最大网络审查机构国新办的网络部门负责人；齐向东、石晓虹是三际无限公司的高管，而该公司则是360安全卫士的开发者。<br />
 <br />
我们知道国内的搜索引擎都有关键词过滤，通常认为这是搜索引擎的自我审查。然而最近有一些案例发现在某些情况下不同搜索引擎的“自我审查”会同时失效，说明背后并不简单。以上资料说明了这样几个事实：<br />
 <br />
存在一个对国内搜索引擎进行统一关键词过滤的审查管理系统，其被称为“搜索引擎安全管理系统”；<br />
这个系统是主要由GFW的运维单位安管中心（CNCERT/CC）开发；<br />
这个系统主要需求和日常使用来自国新办，有密级；<br />
国内搜索引擎的关键词过滤有一部分是由国新办直接操作的“非自我审查”；<br />
360安全卫士的开发者三际无限公司也参与了这个系统的开发。<br />
三际无限公司的所作所为已经不仅仅是“将用户隐私信息交给政府安全部门”；它协助CNCERT、积极参与建设对国内互联网的审查机制，为长城添砖加瓦，这已经超出作恶的范畴，可称得上助纣为虐。加之之前报道称360安全卫士将自由门等软件检测为恶意软件，这个公司的道德水准已经昭然若揭。请丝毫不要怀疑三际无限与审查部门和安全部门的良好关系，请丝毫不要惊讶安全部门会通过360安全卫士对用户进行监听。<br />
 <br />
另引用双想范文<a href="http://opinion.huanqiu.com/roll/2010-01/696893.html" target="_blank">http://opinion.huanqiu.com/roll/2010-01/696893.html</a> [huanqiu.com] 一段：<br />
 <br />
为掩人耳目，中情局成立了一家高科技公司，以民间身分为幌子与谷硅高科技公司合作开发能够从互联网上获取任何内容的间谍软件。间谍软件以捆绑方式和其他软件一起当用户安装实用软件时它悄悄地进行自动安装。<br />
 <br />
哼哼。<br />
<br />
[<i> 本帖最后由 实验小白鼠B 于 2010-1-24 17:12 编辑 </i>]</div>

							
							
							
							
															<div id="post_rate_div_449466"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo449466_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=4359" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=35809&amp;repquote=449466&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 449466)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_5"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid449495" summary="pid449495" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=11953" target="_blank" id="userinfo449495" class="dropmenu" onmouseover="showMenu(this.id)">铜球</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=11953">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=11953&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_6" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum449495" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=35809&page=1#pid449495', '话题链接已经复制到剪贴板')">7楼</strong>
													<em onclick="$('postmessage_449495').className='t_bigfont'">大</em>							<em onclick="$('postmessage_449495').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_449495').className='t_smallfont'">小</em>												发表于 2010-1-24 17:39&nbsp;																					<a href="viewthread.php?tid=35809&amp;page=1&amp;authorid=11953" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_6"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_6"></div><div id="ad_thread4_6"></div>
						
						
																											<div id="postmessage_449495" class="t_msgfont">我前两天刚从AVAST换到了360杀毒，因为前者把我的PUFF认定是恶意程序………………</div>

							
							
							
							
															<div id="post_rate_div_449495"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo449495_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=11953" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=35809&amp;repquote=449495&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 449495)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_6"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid449496" summary="pid449496" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1845" target="_blank" id="userinfo449496" class="dropmenu" onmouseover="showMenu(this.id)">skeet</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">西瓜射射将</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1845">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1845&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_7" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum449496" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=35809&page=1#pid449496', '话题链接已经复制到剪贴板')">8楼</strong>
													<em onclick="$('postmessage_449496').className='t_bigfont'">大</em>							<em onclick="$('postmessage_449496').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_449496').className='t_smallfont'">小</em>												发表于 2010-1-24 17:39&nbsp;																					<a href="viewthread.php?tid=35809&amp;page=1&amp;authorid=1845" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_7"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_7"></div><div id="ad_thread4_7"></div>
						
						
																											<div id="postmessage_449496" class="t_msgfont">马勒隔壁</div>

							
							
							
							
															<div id="post_rate_div_449496"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo449496_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1845" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=35809&amp;repquote=449496&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 449496)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_7"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid449539" summary="pid449539" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8405" target="_blank" id="userinfo449539" class="dropmenu" onmouseover="showMenu(this.id)">depthsky</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">www.depthsky.com</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8405">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8405&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_8" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum449539" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=35809&page=1#pid449539', '话题链接已经复制到剪贴板')">9楼</strong>
													<em onclick="$('postmessage_449539').className='t_bigfont'">大</em>							<em onclick="$('postmessage_449539').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_449539').className='t_smallfont'">小</em>												发表于 2010-1-24 18:24&nbsp;																					<a href="viewthread.php?tid=35809&amp;page=1&amp;authorid=8405" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_8"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_8"></div><div id="ad_thread4_8"></div>
						
						
																											<div id="postmessage_449539" class="t_msgfont">不用360很多年。。。。。</div>

							
							
							
							
															<div id="post_rate_div_449539"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo449539_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://www.depthsky.com" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=8405" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=35809&amp;repquote=449539&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 449539)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_8"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid449541" summary="pid449541" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7842" target="_blank" id="userinfo449541" class="dropmenu" onmouseover="showMenu(this.id)">mcalcnxqd</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7842">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7842&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_9" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum449541" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=35809&page=1#pid449541', '话题链接已经复制到剪贴板')">10楼</strong>
													<em onclick="$('postmessage_449541').className='t_bigfont'">大</em>							<em onclick="$('postmessage_449541').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_449541').className='t_smallfont'">小</em>												发表于 2010-1-24 18:29&nbsp;																					<a href="viewthread.php?tid=35809&amp;page=1&amp;authorid=7842" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_9"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_9"></div><div id="ad_thread4_9"></div>
						
						
																											<div id="postmessage_449541" class="t_msgfont">哪位高人可推荐一个替代360的软件啊，可以补漏洞，清垃圾之类的，<br />
兲朝的东西真TMD可疑</div>

							
							
							
							
															<div id="post_rate_div_449541"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo449541_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=7842" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=35809&amp;repquote=449541&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 449541)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_9"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid449569" summary="pid449569" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=760" target="_blank" id="userinfo449569" class="dropmenu" onmouseover="showMenu(this.id)">Tempo808</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">蛋蛋</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=760">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=760&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_10" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum449569" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=35809&page=1#pid449569', '话题链接已经复制到剪贴板')">11楼</strong>
													<em onclick="$('postmessage_449569').className='t_bigfont'">大</em>							<em onclick="$('postmessage_449569').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_449569').className='t_smallfont'">小</em>												发表于 2010-1-24 19:24&nbsp;																					<a href="viewthread.php?tid=35809&amp;page=1&amp;authorid=760" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_10"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_10"></div><div id="ad_thread4_10"></div>
						
						
																											<div id="postmessage_449569" class="t_msgfont">avg 相当不错</div>

							
							
							
							
															<div id="post_rate_div_449569"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo449569_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=760" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=35809&amp;repquote=449569&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 449569)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_10"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid449620" summary="pid449620" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=11657" target="_blank" id="userinfo449620" class="dropmenu" onmouseover="showMenu(this.id)">神隐之左手</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">附庸的附庸</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=11657">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=11657&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_11" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum449620" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=35809&page=1#pid449620', '话题链接已经复制到剪贴板')">12楼</strong>
													<em onclick="$('postmessage_449620').className='t_bigfont'">大</em>							<em onclick="$('postmessage_449620').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_449620').className='t_smallfont'">小</em>												发表于 2010-1-24 20:13&nbsp;																					<a href="viewthread.php?tid=35809&amp;page=1&amp;authorid=11657" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_11"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_11"></div><div id="ad_thread4_11"></div>
						
						
																											<div id="postmessage_449620" class="t_msgfont">日期：2005年2月2日<br />
??????</div>

							
							
							
							
															<div id="post_rate_div_449620"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo449620_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=11657" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=35809&amp;repquote=449620&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 449620)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_11"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid449629" summary="pid449629" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=5706" target="_blank" id="userinfo449629" class="dropmenu" onmouseover="showMenu(this.id)">safin0609</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=5706">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=5706&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_12" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum449629" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=35809&page=1#pid449629', '话题链接已经复制到剪贴板')">13楼</strong>
													<em onclick="$('postmessage_449629').className='t_bigfont'">大</em>							<em onclick="$('postmessage_449629').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_449629').className='t_smallfont'">小</em>												发表于 2010-1-24 20:21&nbsp;																					<a href="viewthread.php?tid=35809&amp;page=1&amp;authorid=5706" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_12"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_12"></div><div id="ad_thread4_12"></div>
						
						
																											<div id="postmessage_449629" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>mcalcnxqd</i> 于 2010-1-24 18:29 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=449541&amp;ptid=35809" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
哪位高人可推荐一个替代360的软件啊，可以补漏洞，清垃圾之类的，<br />
兲朝的东西真TMD可疑 </blockquote></div>超级兔子，您试试</div>

							
							
							
							
															<div id="post_rate_div_449629"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo449629_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=5706" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=35809&amp;repquote=449629&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 449629)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_12"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid449702" summary="pid449702" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1408" target="_blank" id="userinfo449702" class="dropmenu" onmouseover="showMenu(this.id)">becom</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">“抢救运动”办公室借调人员、同萌会资深会员</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1408">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1408&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_13" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum449702" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=35809&page=1#pid449702', '话题链接已经复制到剪贴板')">14楼</strong>
													<em onclick="$('postmessage_449702').className='t_bigfont'">大</em>							<em onclick="$('postmessage_449702').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_449702').className='t_smallfont'">小</em>												发表于 2010-1-24 21:30&nbsp;																					<a href="viewthread.php?tid=35809&amp;page=1&amp;authorid=1408" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_13"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_13"></div><div id="ad_thread4_13"></div>
						
						
																											<div id="postmessage_449702" class="t_msgfont">齐向东、石晓虹是三际无限公司的高管，而该公司则是360安全卫士的开发者。<br />
<br />
???<br />
<br />
360安全卫士不是奇虎科技的周鸿伟开发的吗？这哥们原来是玩3721流氓软件的，后来反戈一击耍流氓了。</div>

							
							
							
							
															<div id="post_rate_div_449702"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo449702_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1408" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=35809&amp;repquote=449702&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 449702)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_13"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid449713" summary="pid449713" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=4359" target="_blank" id="userinfo449713" class="dropmenu" onmouseover="showMenu(this.id)">实验小白鼠B</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=4359">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=4359&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_14" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum449713" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=35809&page=1#pid449713', '话题链接已经复制到剪贴板')">15楼</strong>
													<em onclick="$('postmessage_449713').className='t_bigfont'">大</em>							<em onclick="$('postmessage_449713').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_449713').className='t_smallfont'">小</em>												发表于 2010-1-24 21:38&nbsp;																					<a href="viewthread.php?tid=35809&amp;page=1&amp;authorid=4359" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_14"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_14"></div><div id="ad_thread4_14"></div>
													<h2>回复 9楼 becom 的话题</h2>
						
						
																											<div id="postmessage_449713" class="t_msgfont">不不不，是奇虎科技的产品，开发是三际无限公司<br />
哥们，看这个<a href="http://www.lawtime.cn/info/anli/jjfdzswf/2008111452911.html" target="_blank">http://www.lawtime.cn/info/anli/jjfdzswf/2008111452911.html</a><br />
原告百度网讯、原告百度在线共同诉称，百度超级搜霸软件（以下简称超级搜霸）和百度搜索伴侣软件（以下简称搜索伴侣）均系由我二公司共同开发完成。三际无限开发的360安全卫士软件（以下简称安全卫士）V1.5、V3.0 Beta2、V3.0 Beta3、V3.1、V3.2、V3.3等版本将超级搜霸和搜索伴侣描述为恶意软件或危险软件，并将超级搜霸和搜索伴侣描述为强制安装、浏览器劫持、干扰其他软件运行和无法彻底删除等，如按照安全卫士之提示进行操作可以在默认情况下删除超级搜霸和搜索伴侣，且三际无限在网址为<a href="http://www.360safe.com" target="_blank">www.360safe.com</a>的网站将超级搜霸和搜索伴侣描述为恶意软件。</div>

							
							
							
							
															<div id="post_rate_div_449713"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo449713_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=4359" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=35809&amp;repquote=449713&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 449713)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_14"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid449741" summary="pid449741" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=3659" target="_blank" id="userinfo449741" class="dropmenu" onmouseover="showMenu(this.id)">baobaoseu</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">思想罪犯</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=3659">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=3659&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_15" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum449741" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=35809&page=1#pid449741', '话题链接已经复制到剪贴板')">16楼</strong>
													<em onclick="$('postmessage_449741').className='t_bigfont'">大</em>							<em onclick="$('postmessage_449741').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_449741').className='t_smallfont'">小</em>												发表于 2010-1-24 22:04&nbsp;																					<a href="viewthread.php?tid=35809&amp;page=1&amp;authorid=3659" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_15"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_15"></div><div id="ad_thread4_15"></div>
						
						
																											<div id="postmessage_449741" class="t_msgfont">强烈推荐微软免费杀软MSE，评测可与卡巴等收费杀软媲美，前提是通过正版验证，深度，雨木等XP可通过验证，缺点稍吃内存，个人推荐内存2G起</div>

							
							
							
							
															<div id="post_rate_div_449741"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo449741_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=3659" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=35809&amp;repquote=449741&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 449741)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_15"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid449745" summary="pid449745" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=3195" target="_blank" id="userinfo449745" class="dropmenu" onmouseover="showMenu(this.id)">dlb2825</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=3195">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=3195&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_16" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum449745" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=35809&page=1#pid449745', '话题链接已经复制到剪贴板')">17楼</strong>
													<em onclick="$('postmessage_449745').className='t_bigfont'">大</em>							<em onclick="$('postmessage_449745').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_449745').className='t_smallfont'">小</em>												发表于 2010-1-24 22:06&nbsp;																					<a href="viewthread.php?tid=35809&amp;page=1&amp;authorid=3195" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_16"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_16"></div><div id="ad_thread4_16"></div>
						
						
																											<div id="postmessage_449745" class="t_msgfont">小红伞 9</div>

							
							
							
							
															<div id="post_rate_div_449745"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo449745_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=3195" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=35809&amp;repquote=449745&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 449745)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_16"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid449753" summary="pid449753" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6340" target="_blank" id="userinfo449753" class="dropmenu" onmouseover="showMenu(this.id)">kloser</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">國民革命軍長城部隊</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6340">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6340&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_17" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum449753" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=35809&page=1#pid449753', '话题链接已经复制到剪贴板')">18楼</strong>
													<em onclick="$('postmessage_449753').className='t_bigfont'">大</em>							<em onclick="$('postmessage_449753').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_449753').className='t_smallfont'">小</em>												发表于 2010-1-24 22:09&nbsp;																					<a href="viewthread.php?tid=35809&amp;page=1&amp;authorid=6340" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_17"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_17"></div><div id="ad_thread4_17"></div>
						
						
																											<div id="postmessage_449753" class="t_msgfont">马勒隔壁</div>

							
							
							
							
															<div id="post_rate_div_449753"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo449753_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=6340" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=35809&amp;repquote=449753&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 449753)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_17"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid449764" summary="pid449764" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8033" target="_blank" id="userinfo449764" class="dropmenu" onmouseover="showMenu(this.id)">张公子</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">非官方华人</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8033">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8033&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_18" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum449764" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=35809&page=1#pid449764', '话题链接已经复制到剪贴板')">19楼</strong>
													<em onclick="$('postmessage_449764').className='t_bigfont'">大</em>							<em onclick="$('postmessage_449764').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_449764').className='t_smallfont'">小</em>												发表于 2010-1-24 22:21&nbsp;																					<a href="viewthread.php?tid=35809&amp;page=1&amp;authorid=8033" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_18"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_18"></div><div id="ad_thread4_18"></div>
						
						
																											<div id="postmessage_449764" class="t_msgfont">360虽然令人惊讶，但也是可能的。</div>

							
							
							
							
															<div id="post_rate_div_449764"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo449764_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://qiuin.com" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=8033" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=35809&amp;repquote=449764&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 449764)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_18"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid449811" summary="pid449811" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7842" target="_blank" id="userinfo449811" class="dropmenu" onmouseover="showMenu(this.id)">mcalcnxqd</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7842">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7842&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_19" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum449811" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=35809&page=1#pid449811', '话题链接已经复制到剪贴板')">20楼</strong>
													<em onclick="$('postmessage_449811').className='t_bigfont'">大</em>							<em onclick="$('postmessage_449811').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_449811').className='t_smallfont'">小</em>												发表于 2010-1-24 23:21&nbsp;																					<a href="viewthread.php?tid=35809&amp;page=1&amp;authorid=7842" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_19"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_19"></div><div id="ad_thread4_19"></div>
						
						
																											<div id="postmessage_449811" class="t_msgfont">谢谢楼上各位，折腾了一个晚上，装了FIREFOX， NOD32，CCLEANER，<br />
希望哪天不小心落到TG手里的时候，他们看不到太多东西</div>

							
							
							
							
															<div id="post_rate_div_449811"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo449811_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=7842" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=35809&amp;repquote=449811&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 449811)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_19"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid449816" summary="pid449816" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2930" target="_blank" id="userinfo449816" class="dropmenu" onmouseover="showMenu(this.id)">SrAcer</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">党强加于人的世界观在无法理解它的人们那里最容易被接受。——《１９８４》</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2930">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2930&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_20" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum449816" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=35809&page=1#pid449816', '话题链接已经复制到剪贴板')">21楼</strong>
													<em onclick="$('postmessage_449816').className='t_bigfont'">大</em>							<em onclick="$('postmessage_449816').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_449816').className='t_smallfont'">小</em>												发表于 2010-1-24 23:25&nbsp;																					<a href="viewthread.php?tid=35809&amp;page=1&amp;authorid=2930" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_20"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_20"></div><div id="ad_thread4_20"></div>
						
						
																											<div id="postmessage_449816" class="t_msgfont">微软的Security Essentials对很多注册机敏感，好在还可以选不动作，关系不大。</div>

							
							
							
							
															<div id="post_rate_div_449816"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo449816_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=2930" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=35809&amp;repquote=449816&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 449816)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_20"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid449824" summary="pid449824" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=9522" target="_blank" id="userinfo449824" class="dropmenu" onmouseover="showMenu(this.id)">九段</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=9522">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=9522&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_21" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum449824" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=35809&page=1#pid449824', '话题链接已经复制到剪贴板')">22楼</strong>
													<em onclick="$('postmessage_449824').className='t_bigfont'">大</em>							<em onclick="$('postmessage_449824').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_449824').className='t_smallfont'">小</em>												发表于 2010-1-24 23:41&nbsp;																					<a href="viewthread.php?tid=35809&amp;page=1&amp;authorid=9522" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_21"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_21"></div><div id="ad_thread4_21"></div>
						
						
																											<div id="postmessage_449824" class="t_msgfont">用优化大师吧。个人做的东西应该不会有啥东东。</div>

							
							
							
							
															<div id="post_rate_div_449824"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo449824_menu" style="display: none;">
										<div class="imicons">
													<a target='_blank' href='http://settings.messenger.live.com/Conversation/IMMe.aspx?invitee=lulutiger1116@hotmail.com&mkt=zh-cn'><img style='border-style: none;' src='http://messenger.services.live.com/users/lulutiger1116@hotmail.com/presenceimage?mkt=zh-cn' width='16' height='16' /></a>
																																			</div>
										<dl></dl>
										<p><a href="space.php?uid=9522" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=35809&amp;repquote=449824&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 449824)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_21"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid449838" summary="pid449838" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10576" target="_blank" id="userinfo449838" class="dropmenu" onmouseover="showMenu(this.id)">夜奔</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10576">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10576&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_22" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum449838" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=35809&page=1#pid449838', '话题链接已经复制到剪贴板')">23楼</strong>
													<em onclick="$('postmessage_449838').className='t_bigfont'">大</em>							<em onclick="$('postmessage_449838').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_449838').className='t_smallfont'">小</em>												发表于 2010-1-25 00:05&nbsp;																					<a href="viewthread.php?tid=35809&amp;page=1&amp;authorid=10576" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_22"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_22"></div><div id="ad_thread4_22"></div>
						
						
																											<div id="postmessage_449838" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>baobaoseu</i> 于 2010-1-24 22:04 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=449741&amp;ptid=35809" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
强烈推荐微软免费杀软MSE，评测可与卡巴等收费杀软媲美，前提是通过正版验证，深度，雨木等XP可通过验证，缺点稍吃内存，个人推荐内存2G起 </blockquote></div>MSE作为款合格的杀软 路还长着呢 <br />
不单是吃资源的问题，清除病毒的过程也很慢，更不用说全屏扫描是多么让人抓狂了<br />
还有简单到简陋的设置...强制安装在系统盘<br />
恩&nbsp;&nbsp;最重要的是杀毒能力并没有某些评测中那么好，自保护功能也缺失。<br />
<br />
免费的杀软还是小红伞好<br />
收费的推荐nod32</div>

							
							
							
							
															<div id="post_rate_div_449838"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo449838_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=10576" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=35809&amp;repquote=449838&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 449838)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_22"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid450708" summary="pid450708" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1909" target="_blank" id="userinfo450708" class="dropmenu" onmouseover="showMenu(this.id)">单手扶墙</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">活了几十年年，没能为党为人民做点什么，每思及此，心神不宁。</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1909">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1909&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_23" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum450708" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=35809&page=1#pid450708', '话题链接已经复制到剪贴板')">24楼</strong>
													<em onclick="$('postmessage_450708').className='t_bigfont'">大</em>							<em onclick="$('postmessage_450708').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_450708').className='t_smallfont'">小</em>												发表于 2010-1-25 17:36&nbsp;																					<a href="viewthread.php?tid=35809&amp;page=1&amp;authorid=1909" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_23"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_23"></div><div id="ad_thread4_23"></div>
						
						
																											<div id="postmessage_450708" class="t_msgfont"><a href="http://tinyurl.com/yeln4sj" target="_blank">http://tinyurl.com/yeln4sj</a><br />
<br />
<br />
只用360的下载补丁行不行？</div>

							
							
							
							
															<div id="post_rate_div_450708"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo450708_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1909" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=35809&amp;repquote=450708&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 450708)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_23"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid451856" summary="pid451856" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1044" target="_blank" id="userinfo451856" class="dropmenu" onmouseover="showMenu(this.id)">eselang</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">我来自火星、水星、金星、木星、土星、冥王星以及推特星。</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1044">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1044&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_24" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum451856" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=35809&page=1#pid451856', '话题链接已经复制到剪贴板')">25楼</strong>
													<em onclick="$('postmessage_451856').className='t_bigfont'">大</em>							<em onclick="$('postmessage_451856').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_451856').className='t_smallfont'">小</em>												发表于 2010-1-26 11:52&nbsp;																					<a href="viewthread.php?tid=35809&amp;page=1&amp;authorid=1044" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_24"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_24"></div><div id="ad_thread4_24"></div>
						
						
																											<div id="postmessage_451856" class="t_msgfont">免费的可以考虑Avast。</div>

							
							
							
							
															<div id="post_rate_div_451856"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo451856_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1044" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=35809&amp;repquote=451856&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 451856)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_24"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid454722" summary="pid454722" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10413" target="_blank" id="userinfo454722" class="dropmenu" onmouseover="showMenu(this.id)">yury</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">不爱国人士</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10413">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10413&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_25" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum454722" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=35809&page=1#pid454722', '话题链接已经复制到剪贴板')">26楼</strong>
													<em onclick="$('postmessage_454722').className='t_bigfont'">大</em>							<em onclick="$('postmessage_454722').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_454722').className='t_smallfont'">小</em>												发表于 2010-1-27 22:02&nbsp;																					<a href="viewthread.php?tid=35809&amp;page=1&amp;authorid=10413" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_25"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_25"></div><div id="ad_thread4_25"></div>
						
						
																											<div id="postmessage_454722" class="t_msgfont">360最佳替代者个人认为是comodo，世界第一的防火墙，不过功能太强大，一般人恐怕用不转。</div>

							
							
							
							
															<div id="post_rate_div_454722"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo454722_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=10413" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=35809&amp;repquote=454722&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 454722)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_25"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid455405" summary="pid455405" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=11564" target="_blank" id="userinfo455405" class="dropmenu" onmouseover="showMenu(this.id)">myeii3</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=11564">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=11564&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_26" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum455405" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=35809&page=1#pid455405', '话题链接已经复制到剪贴板')">27楼</strong>
													<em onclick="$('postmessage_455405').className='t_bigfont'">大</em>							<em onclick="$('postmessage_455405').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_455405').className='t_smallfont'">小</em>												发表于 2010-1-28 12:28&nbsp;																					<a href="viewthread.php?tid=35809&amp;page=1&amp;authorid=11564" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_26"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_26"></div><div id="ad_thread4_26"></div>
						
						
																											<div id="postmessage_455405" class="t_msgfont">已经卸了360很久，360和comodo比还是抬举了360啊...</div>

							
							
							
							
															<div id="post_rate_div_455405"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo455405_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=11564" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=35809&amp;repquote=455405&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 455405)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_26"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid455577" summary="pid455577" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=4125" target="_blank" id="userinfo455577" class="dropmenu" onmouseover="showMenu(this.id)">吃河蟹的草泥馬</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=4125">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=4125&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_27" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum455577" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=35809&page=1#pid455577', '话题链接已经复制到剪贴板')">28楼</strong>
													<em onclick="$('postmessage_455577').className='t_bigfont'">大</em>							<em onclick="$('postmessage_455577').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_455577').className='t_smallfont'">小</em>												发表于 2010-1-28 13:45&nbsp;																					<a href="viewthread.php?tid=35809&amp;page=1&amp;authorid=4125" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_27"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_27"></div><div id="ad_thread4_27"></div>
						
						
																											<div id="postmessage_455577" class="t_msgfont">这台电脑上用的360也用不了puff</div>

							
							
							
							
															<div id="post_rate_div_455577"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo455577_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=4125" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=35809&amp;repquote=455577&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 455577)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_27"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid455613" summary="pid455613" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2241" target="_blank" id="userinfo455613" class="dropmenu" onmouseover="showMenu(this.id)">阿文强</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2241">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2241&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_28" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum455613" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=35809&page=1#pid455613', '话题链接已经复制到剪贴板')">29楼</strong>
													<em onclick="$('postmessage_455613').className='t_bigfont'">大</em>							<em onclick="$('postmessage_455613').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_455613').className='t_smallfont'">小</em>												发表于 2010-1-28 14:06&nbsp;																					<a href="viewthread.php?tid=35809&amp;page=1&amp;authorid=2241" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_28"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_28"></div><div id="ad_thread4_28"></div>
						
						
																											<div id="postmessage_455613" class="t_msgfont">我赶紧卸载360.</div>

							
							
							
							
															<div id="post_rate_div_455613"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo455613_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=2241" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=35809&amp;repquote=455613&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 455613)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_28"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid455660" summary="pid455660" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2241" target="_blank" id="userinfo455660" class="dropmenu" onmouseover="showMenu(this.id)">阿文强</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2241">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2241&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_29" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum455660" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=35809&page=1#pid455660', '话题链接已经复制到剪贴板')">30楼</strong>
													<em onclick="$('postmessage_455660').className='t_bigfont'">大</em>							<em onclick="$('postmessage_455660').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_455660').className='t_smallfont'">小</em>												发表于 2010-1-28 14:42&nbsp;																					<a href="viewthread.php?tid=35809&amp;page=1&amp;authorid=2241" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_29"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_29"></div><div id="ad_thread4_29"></div>
						
						
																											<div id="postmessage_455660" class="t_msgfont">泄了360.按上小红伞，超级兔子。长出一口气。</div>

							
							
							
							
															<div id="post_rate_div_455660"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo455660_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=2241" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=35809&amp;repquote=455660&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 455660)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_29"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid455661" summary="pid455661" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2241" target="_blank" id="userinfo455661" class="dropmenu" onmouseover="showMenu(this.id)">阿文强</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2241">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2241&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_30" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum455661" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=35809&page=1#pid455661', '话题链接已经复制到剪贴板')">31楼</strong>
													<em onclick="$('postmessage_455661').className='t_bigfont'">大</em>							<em onclick="$('postmessage_455661').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_455661').className='t_smallfont'">小</em>												发表于 2010-1-28 14:43&nbsp;																					<a href="viewthread.php?tid=35809&amp;page=1&amp;authorid=2241" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_30"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_30"></div><div id="ad_thread4_30"></div>
													<h2>回复 26楼 yury 的话题</h2>
						
						
																											<div id="postmessage_455661" class="t_msgfont">谢谢。我试试。</div>

							
							
							
							
															<div id="post_rate_div_455661"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo455661_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=2241" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=35809&amp;repquote=455661&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 455661)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_30"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid456045" summary="pid456045" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12037" target="_blank" id="userinfo456045" class="dropmenu" onmouseover="showMenu(this.id)">Diablo</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">封锁带来觉醒，黑暗衬托光明。</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12037">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12037&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_31" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum456045" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=35809&page=1#pid456045', '话题链接已经复制到剪贴板')">32楼</strong>
													<em onclick="$('postmessage_456045').className='t_bigfont'">大</em>							<em onclick="$('postmessage_456045').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_456045').className='t_smallfont'">小</em>												发表于 2010-1-28 19:41&nbsp;																					<a href="viewthread.php?tid=35809&amp;page=1&amp;authorid=12037" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_31"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_31"></div><div id="ad_thread4_31"></div>
						
						
																											<div id="postmessage_456045" class="t_msgfont">360就是个渣渣！老牌流氓软件。<br />
<br />
Avast免费、占用资源少，推荐。</div>

							
							
							
							
															<div id="post_rate_div_456045"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo456045_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=12037" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=35809&amp;repquote=456045&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 456045)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_31"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid456180" summary="pid456180" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8097" target="_blank" id="userinfo456180" class="dropmenu" onmouseover="showMenu(this.id)">G.S.Alex</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8097">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8097&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_32" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum456180" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=35809&page=1#pid456180', '话题链接已经复制到剪贴板')">33楼</strong>
													<em onclick="$('postmessage_456180').className='t_bigfont'">大</em>							<em onclick="$('postmessage_456180').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_456180').className='t_smallfont'">小</em>												发表于 2010-1-28 21:24&nbsp;																					<a href="viewthread.php?tid=35809&amp;page=1&amp;authorid=8097" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_32"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_32"></div><div id="ad_thread4_32"></div>
						
						
																											<div id="postmessage_456180" class="t_msgfont">为什么要用360打补丁?难道系统做不到吗?</div>

							
							
							
							
															<div id="post_rate_div_456180"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo456180_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://blog.gsalex.net" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=8097" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=35809&amp;repquote=456180&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 456180)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_32"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid456467" summary="pid456467" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=627" target="_blank" id="userinfo456467" class="dropmenu" onmouseover="showMenu(this.id)">pppppooooo21</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=627">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=627&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_33" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum456467" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=35809&page=1#pid456467', '话题链接已经复制到剪贴板')">34楼</strong>
													<em onclick="$('postmessage_456467').className='t_bigfont'">大</em>							<em onclick="$('postmessage_456467').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_456467').className='t_smallfont'">小</em>												发表于 2010-1-29 03:54&nbsp;																					<a href="viewthread.php?tid=35809&amp;page=1&amp;authorid=627" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_33"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_33"></div><div id="ad_thread4_33"></div>
						
						
																											<div id="postmessage_456467" class="t_msgfont">操，马上泄掉</div>

							
							
							
							
															<div id="post_rate_div_456467"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo456467_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=627" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=35809&amp;repquote=456467&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 456467)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_33"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid457230" summary="pid457230" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12135" target="_blank" id="userinfo457230" class="dropmenu" onmouseover="showMenu(this.id)">Howmuch</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12135">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12135&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_34" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum457230" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=35809&page=1#pid457230', '话题链接已经复制到剪贴板')">35楼</strong>
													<em onclick="$('postmessage_457230').className='t_bigfont'">大</em>							<em onclick="$('postmessage_457230').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_457230').className='t_smallfont'">小</em>												发表于 2010-1-29 15:39&nbsp;																					<a href="viewthread.php?tid=35809&amp;page=1&amp;authorid=12135" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_34"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_34"></div><div id="ad_thread4_34"></div>
						
						
																											<div id="postmessage_457230" class="t_msgfont">真的假的，用360很长时间了</div>

							
							
							
							
															<div id="post_rate_div_457230"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo457230_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=12135" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=35809&amp;repquote=457230&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 457230)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_34"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid457283" summary="pid457283" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12134" target="_blank" id="userinfo457283" class="dropmenu" onmouseover="showMenu(this.id)">小土著</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12134">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12134&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_35" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum457283" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=35809&page=1#pid457283', '话题链接已经复制到剪贴板')">36楼</strong>
													<em onclick="$('postmessage_457283').className='t_bigfont'">大</em>							<em onclick="$('postmessage_457283').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_457283').className='t_smallfont'">小</em>												发表于 2010-1-29 16:07&nbsp;																					<a href="viewthread.php?tid=35809&amp;page=1&amp;authorid=12134" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_35"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_35"></div><div id="ad_thread4_35"></div>
													<h2>我觉得360很好用</h2>
						
						
																											<div id="postmessage_457283" class="t_msgfont">360很久了 很好用 其它的我不懂 但我会接着用 不懂的部分 你们继续发掘 讨论 我只是觉得360很好用</div>

							
							
							
							
															<div id="post_rate_div_457283"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo457283_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=12134" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=35809&amp;repquote=457283&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 457283)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_35"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid457323" summary="pid457323" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10158" target="_blank" id="userinfo457323" class="dropmenu" onmouseover="showMenu(this.id)">凡随悦</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10158">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10158&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_36" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum457323" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=35809&page=1#pid457323', '话题链接已经复制到剪贴板')">37楼</strong>
													<em onclick="$('postmessage_457323').className='t_bigfont'">大</em>							<em onclick="$('postmessage_457323').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_457323').className='t_smallfont'">小</em>												发表于 2010-1-29 16:24&nbsp;																					<a href="viewthread.php?tid=35809&amp;page=1&amp;authorid=10158" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_36"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_36"></div><div id="ad_thread4_36"></div>
						
						
																											<div id="postmessage_457323" class="t_msgfont">建议用linux，更加安全。</div>

							
							
							
							
															<div id="post_rate_div_457323"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo457323_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=10158" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=35809&amp;repquote=457323&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 457323)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_36"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid457557" summary="pid457557" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=11747" target="_blank" id="userinfo457557" class="dropmenu" onmouseover="showMenu(this.id)">after1990s</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=11747">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=11747&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_37" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum457557" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=35809&page=1#pid457557', '话题链接已经复制到剪贴板')">38楼</strong>
													<em onclick="$('postmessage_457557').className='t_bigfont'">大</em>							<em onclick="$('postmessage_457557').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_457557').className='t_smallfont'">小</em>												发表于 2010-1-29 19:01&nbsp;																					<a href="viewthread.php?tid=35809&amp;page=1&amp;authorid=11747" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_37"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_37"></div><div id="ad_thread4_37"></div>
						
						
																											<div id="postmessage_457557" class="t_msgfont">上面说的对。就是不知道有几个人有那么多时间折腾。</div>

							
							
							
							
															<div id="post_rate_div_457557"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo457557_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=11747" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=35809&amp;repquote=457557&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 457557)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_37"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid457773" summary="pid457773" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12132" target="_blank" id="userinfo457773" class="dropmenu" onmouseover="showMenu(this.id)">forever1983</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12132">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12132&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_38" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum457773" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=35809&page=1#pid457773', '话题链接已经复制到剪贴板')">39楼</strong>
													<em onclick="$('postmessage_457773').className='t_bigfont'">大</em>							<em onclick="$('postmessage_457773').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_457773').className='t_smallfont'">小</em>												发表于 2010-1-29 21:04&nbsp;																					<a href="viewthread.php?tid=35809&amp;page=1&amp;authorid=12132" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_38"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_38"></div><div id="ad_thread4_38"></div>
						
						
																											<div id="postmessage_457773" class="t_msgfont">建议斑竹组织力量对一些可以软件进行逆向分析，比如，QQ，360，还有一些拼音输入法</div>

							
							
							
							
															<div id="post_rate_div_457773"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo457773_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=12132" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=35809&amp;repquote=457773&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 457773)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_38"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid458693" summary="pid458693" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1906" target="_blank" id="userinfo458693" class="dropmenu" onmouseover="showMenu(this.id)">大祥云</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">松下问童子　　　　　　　　言师采药去　　　　　　　　只在此山中　　　　　　　　云深不知处</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1906">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1906&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_39" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum458693" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=35809&page=1#pid458693', '话题链接已经复制到剪贴板')">40楼</strong>
													<em onclick="$('postmessage_458693').className='t_bigfont'">大</em>							<em onclick="$('postmessage_458693').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_458693').className='t_smallfont'">小</em>												发表于 2010-1-30 15:27&nbsp;																					<a href="viewthread.php?tid=35809&amp;page=1&amp;authorid=1906" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_39"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_39"></div><div id="ad_thread4_39"></div>
						
						
																											<div id="postmessage_458693" class="t_msgfont">360安全卫士保存在——C:\WINDOWS\system32\drivers——下的文件统统删掉，软件竟然还能用……鬼知道这些文件的功能……XD<br />
<br />
【光荣榜】<br />
360AntiARP.sys<br />
360SelfProtection.sys<br />
bfsdrv.sys<br />
bregdrv.sys<br />
EfiMon.sys<br />
hookport.sys<br />
ProtoDrv.sys<br />
qutmdrv.sys<br />
qutmipc.sys<br />
SafeBoxKrnl.sys<br />
<br />
这些文件不仅要删除，还要用同名文件夹替换，为了防止同名文件夹被删除，文件夹里用——md （文件夹名）..\——创建一个无法删除的文件夹~~~~~~<br />
<br />
搞定收工！</div>

							
							
							
							
															<div id="post_rate_div_458693"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo458693_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1906" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=35809&amp;repquote=458693&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 458693)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_39"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid459357" summary="pid459357" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=803" target="_blank" id="userinfo459357" class="dropmenu" onmouseover="showMenu(this.id)">weke</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">挪威.奥斯陆</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=803">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=803&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_40" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum459357" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=35809&page=1#pid459357', '话题链接已经复制到剪贴板')">41楼</strong>
													<em onclick="$('postmessage_459357').className='t_bigfont'">大</em>							<em onclick="$('postmessage_459357').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_459357').className='t_smallfont'">小</em>												发表于 2010-1-31 00:46&nbsp;																					<a href="viewthread.php?tid=35809&amp;page=1&amp;authorid=803" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_40"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_40"></div><div id="ad_thread4_40"></div>
						
						
																											<div id="postmessage_459357" class="t_msgfont">国产垃圾杀软一装全进注册表呆着狂吃应盘，赶不走。操他妈的！</div>

							
							
							
							
															<div id="post_rate_div_459357"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo459357_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=803" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=35809&amp;repquote=459357&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 459357)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_40"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid459898" summary="pid459898" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12126" target="_blank" id="userinfo459898" class="dropmenu" onmouseover="showMenu(this.id)">ottovon</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">@ottovonconstant </p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12126">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12126&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_41" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum459898" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=35809&page=1#pid459898', '话题链接已经复制到剪贴板')">42楼</strong>
													<em onclick="$('postmessage_459898').className='t_bigfont'">大</em>							<em onclick="$('postmessage_459898').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_459898').className='t_smallfont'">小</em>												发表于 2010-1-31 16:56&nbsp;																					<a href="viewthread.php?tid=35809&amp;page=1&amp;authorid=12126" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_41"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_41"></div><div id="ad_thread4_41"></div>
						
						
																											<div id="postmessage_459898" class="t_msgfont">日了，我用的全套360...</div>

							
							
							
							
															<div id="post_rate_div_459898"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo459898_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://www.liuzijian.com" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=12126" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=35809&amp;repquote=459898&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 459898)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_41"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid460254" summary="pid460254" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8033" target="_blank" id="userinfo460254" class="dropmenu" onmouseover="showMenu(this.id)">张公子</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">非官方华人</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8033">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8033&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_42" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum460254" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=35809&page=1#pid460254', '话题链接已经复制到剪贴板')">43楼</strong>
													<em onclick="$('postmessage_460254').className='t_bigfont'">大</em>							<em onclick="$('postmessage_460254').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_460254').className='t_smallfont'">小</em>												发表于 2010-1-31 21:00&nbsp;																					<a href="viewthread.php?tid=35809&amp;page=1&amp;authorid=8033" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_42"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_42"></div><div id="ad_thread4_42"></div>
						
						
																											<div id="postmessage_460254" class="t_msgfont">已卸载360，用Avast就足够了</div>

							
							
							
							
															<div id="post_rate_div_460254"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo460254_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://qiuin.com" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=8033" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=35809&amp;repquote=460254&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 460254)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_42"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid460282" summary="pid460282" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=11855" target="_blank" id="userinfo460282" class="dropmenu" onmouseover="showMenu(this.id)">创新娱乐</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=11855">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=11855&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_43" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum460282" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=35809&page=1#pid460282', '话题链接已经复制到剪贴板')">44楼</strong>
													<em onclick="$('postmessage_460282').className='t_bigfont'">大</em>							<em onclick="$('postmessage_460282').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_460282').className='t_smallfont'">小</em>												发表于 2010-1-31 21:09&nbsp;																					<a href="viewthread.php?tid=35809&amp;page=1&amp;authorid=11855" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_43"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_43"></div><div id="ad_thread4_43"></div>
						
						
																											<div id="postmessage_460282" class="t_msgfont">360好恶心啊。</div>

							
							
							
							
															<div id="post_rate_div_460282"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo460282_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=11855" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=35809&amp;repquote=460282&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 460282)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_43"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid462517" summary="pid462517" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10748" target="_blank" id="userinfo462517" class="dropmenu" onmouseover="showMenu(this.id)">xiaose</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10748">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10748&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_44" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum462517" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=35809&page=1#pid462517', '话题链接已经复制到剪贴板')">45楼</strong>
													<em onclick="$('postmessage_462517').className='t_bigfont'">大</em>							<em onclick="$('postmessage_462517').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_462517').className='t_smallfont'">小</em>												发表于 2010-2-2 08:03&nbsp;																					<a href="viewthread.php?tid=35809&amp;page=1&amp;authorid=10748" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_44"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_44"></div><div id="ad_thread4_44"></div>
						
						
																											<div id="postmessage_462517" class="t_msgfont">折腾吧！</div>

							
							
							
							
															<div id="post_rate_div_462517"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo462517_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=10748" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=35809&amp;repquote=462517&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 462517)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_44"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid465149" summary="pid465149" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8191" target="_blank" id="userinfo465149" class="dropmenu" onmouseover="showMenu(this.id)">gfanslee</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">我试试这个功能~</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8191">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8191&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_45" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum465149" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=35809&page=1#pid465149', '话题链接已经复制到剪贴板')">46楼</strong>
													<em onclick="$('postmessage_465149').className='t_bigfont'">大</em>							<em onclick="$('postmessage_465149').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_465149').className='t_smallfont'">小</em>												发表于 2010-2-3 19:04&nbsp;																					<a href="viewthread.php?tid=35809&amp;page=1&amp;authorid=8191" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_45"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_45"></div><div id="ad_thread4_45"></div>
						
						
																											<div id="postmessage_465149" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>mcalcnxqd</i> 于 2010-1-24 18:29 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=449541&amp;ptid=35809" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
哪位高人可推荐一个替代360的软件啊，可以补漏洞，清垃圾之类的，<br />
兲朝的东西真TMD可疑 </blockquote></div>确实很想找个比较好的替代软件咧~~</div>

							
							
							
							
															<div id="post_rate_div_465149"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo465149_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=8191" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=35809&amp;repquote=465149&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 465149)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_45"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid465302" summary="pid465302" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7994" target="_blank" id="userinfo465302" class="dropmenu" onmouseover="showMenu(this.id)">cheo2ng</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">十七 @cheo2ng</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7994">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7994&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_46" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum465302" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=35809&page=1#pid465302', '话题链接已经复制到剪贴板')">47楼</strong>
													<em onclick="$('postmessage_465302').className='t_bigfont'">大</em>							<em onclick="$('postmessage_465302').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_465302').className='t_smallfont'">小</em>												发表于 2010-2-3 20:42&nbsp;																					<a href="viewthread.php?tid=35809&amp;page=1&amp;authorid=7994" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_46"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_46"></div><div id="ad_thread4_46"></div>
						
						
																											<div id="postmessage_465302" class="t_msgfont">卸载时卡巴斯基提醒360程序尝试放某个木马在windows文件夹下,按了隔离,卸载停止了,留下一大堆残渣在注册表.<br />
这360......</div>

							
							
							
							
															<div id="post_rate_div_465302"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo465302_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=7994" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=35809&amp;repquote=465302&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 465302)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_46"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid473906" summary="pid473906" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=11493" target="_blank" id="userinfo473906" class="dropmenu" onmouseover="showMenu(this.id)">gzlxd</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">Twitter/@gzlxd</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=11493">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=11493&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_47" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum473906" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=35809&page=1#pid473906', '话题链接已经复制到剪贴板')">48楼</strong>
													<em onclick="$('postmessage_473906').className='t_bigfont'">大</em>							<em onclick="$('postmessage_473906').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_473906').className='t_smallfont'">小</em>												发表于 2010-2-9 14:07&nbsp;																					<a href="viewthread.php?tid=35809&amp;page=1&amp;authorid=11493" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_47"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_47"></div><div id="ad_thread4_47"></div>
						
						
																											<div id="postmessage_473906" class="t_msgfont">我用的是IObit security 360,&nbsp;&nbsp;美国软件免费版</div>

							
							
							
							
															<div id="post_rate_div_473906"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo473906_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=11493" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=35809&amp;repquote=473906&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 473906)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_47"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid474213" summary="pid474213" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1993" target="_blank" id="userinfo474213" class="dropmenu" onmouseover="showMenu(this.id)">鬼鬼</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">宽容、理性、建设</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1993">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1993&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_48" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum474213" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=35809&page=1#pid474213', '话题链接已经复制到剪贴板')">49楼</strong>
													<em onclick="$('postmessage_474213').className='t_bigfont'">大</em>							<em onclick="$('postmessage_474213').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_474213').className='t_smallfont'">小</em>												发表于 2010-2-9 17:43&nbsp;																					<a href="viewthread.php?tid=35809&amp;page=1&amp;authorid=1993" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_48"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_48"></div><div id="ad_thread4_48"></div>
						
						
																											<div id="postmessage_474213" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>roc</i> 于 2010-2-4 00:06 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=465581&amp;ptid=35809" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
补漏洞用迅雷 清垃圾就更多了 自己小心点垃圾也不回来<br />
360的主要一个工程师以前在网上了解过 就是个一手写360 一手写rookit病毒的人渣 <br />
不是360不窥私 而是窥私到的他们还不屑来牟利暂时<br />
<br />
奇虎本身也是个流氓软件 ... </blockquote></div>周鸿祎是迅雷的大股东，呵呵</div>

							
							
							
							
															<div id="post_rate_div_474213"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo474213_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1993" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=35809&amp;repquote=474213&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 474213)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_48"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid474220" summary="pid474220" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 <a name="lastpost"></a>					<cite>											<a href="space.php?uid=12254" target="_blank" id="userinfo474220" class="dropmenu" onmouseover="showMenu(this.id)">gongchen713</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">gongchen713</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12254">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12254&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_49" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum474220" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=35809&page=1#pid474220', '话题链接已经复制到剪贴板')">50楼</strong>
													<em onclick="$('postmessage_474220').className='t_bigfont'">大</em>							<em onclick="$('postmessage_474220').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_474220').className='t_smallfont'">小</em>												发表于 2010-2-9 17:49&nbsp;																					<a href="viewthread.php?tid=35809&amp;page=1&amp;authorid=12254" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_49"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_49"></div><div id="ad_thread4_49"></div>
						
						
																											<div id="postmessage_474220" class="t_msgfont">用ProcessMonitor监测 TM,QQ发现会读取迅雷、电驴、Skyep、QVOD、Office、chrome目录 <br />
<br />
只好用hips软件限制其活动</div>

							
							
							
							
															<div id="post_rate_div_474220"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo474220_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=12254" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=35809&amp;repquote=474220&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 474220)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_49"></div>				</div>
			</td>
		</tr>
		</table>
		</div>
</form>





<div class="pages_btns">
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=35809&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=35809&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
				<span class="postbtn" id="newspecialtmp" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=35809&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

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

	<form method="post" id="postform" action="post.php?action=reply&amp;fid=26&amp;tid=35809&amp;extra=&amp;replysubmit=yes" onSubmit="return validate(this)">
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
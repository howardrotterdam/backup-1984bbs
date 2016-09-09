<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<title>Discuz 7.0 被曝通过后门抓取用户数据 - 国家局域网研究所 -  1984bbs.com </title>
<meta name="keywords" content="" />
<meta name="MSSmartTagsPreventParsing" content="True" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<link rel="archives" title="1984bbs.com" href="https://1984bbs.com/archiver/" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_viewthread.css" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_common.css" />
<script type="text/javascript">
	var discuz_uid = 13019;var IMGDIR = 'images/default';var attackevasive = '0';var gid = 0;var STYLEID = '1';
	gid = parseInt('3');var fid = parseInt('26');var tid = parseInt('56338');
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
			<p><a href="index.php" id="forumlist" onmouseover="showMenu(this.id)" class="dropmenu">1984bbs.com</a> &raquo; <a href="forumdisplay.php?fid=26">国家局域网研究所</a> &raquo; Discuz 7.0 被曝通过后门抓取用户数据</p>
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
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=56338&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=56338&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
				<span class="postbtn" id="newspecial" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=56338&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

	<ul class="popupmenu_popup newspecialmenu" id="newspecial_menu" style="display: none">
		<li><a href="post.php?action=newthread&amp;fid=26&amp;extra=">发新话题</a></li>
		<li class="poll"><a href="post.php?action=newthread&amp;fid=26&amp;extra=&amp;special=1">发布投票</a></li>													</ul>

<form method="post" name="modactions">
	<input type="hidden" name="formhash" value="823c9fa2" />
	<div class="mainbox viewthread">
		<span class="headactions">
					<a href="my.php?item=favorites&amp;tid=56338" id="ajax_favorite" onclick="ajaxmenu(event, this.id, 3000, 0)">收藏</a>
			<a href="my.php?item=subscriptions&amp;subadd=56338" id="ajax_subscription" onclick="ajaxmenu(event, this.id, 3000, null, 0)">订阅</a>
			<a href="misc.php?action=emailfriend&amp;tid=56338" id="emailfriend" onclick="ajaxmenu(event, this.id, 9000000, null, 0)">推荐</a>
				<a href="viewthread.php?action=printable&amp;tid=56338" target="_blank" class="notabs">打印</a>
				</span>
		<h1>Discuz 7.0 被曝通过后门抓取用户数据		</h1>
							<table id="pid795346" summary="pid795346" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1960" target="_blank" id="userinfo795346" class="dropmenu" onmouseover="showMenu(this.id)">库存袈裟</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">@bruceku 想象力比知识更重要。</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1960">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1960&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_0" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum795346" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=56338&page=1#pid795346', '话题链接已经复制到剪贴板')">1楼</strong>
													<em onclick="$('postmessage_795346').className='t_bigfont'">大</em>							<em onclick="$('postmessage_795346').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_795346').className='t_smallfont'">小</em>												发表于 2010-8-24 15:53&nbsp;																					<a href="viewthread.php?tid=56338&amp;page=1&amp;authorid=1960" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_0"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_0"></div><div id="ad_thread4_0"></div>
													<h2>Discuz 7.0 被曝通过后门抓取用户数据</h2>
						
						
																											<div id="postmessage_795346" class="t_msgfont"><a href="http://www.sunboyu.cn/2009/12/10/discuz-hole.shtml" target="_blank">http://www.sunboyu.cn/2009/12/10/discuz-hole.shtml</a><br />
<br />
使用开源产品，的确能加快我们的产品实现进度，我们也感谢那些提供免费开源产品的人。当然，我个人也喜欢开源技术。<br />
<br />
但如果开源的产品中给你下个后门，抓取你的数据，你还能高兴么？<br />
<br />
现在分析 discuz 7.0 的几段代码：<div class="blockcode"><em onclick="copycode($('code0'));">复制内容到剪贴板</em><h5>代码:</h5><code id="code0">&nbsp; &nbsp;1. if($adminid == 1 &amp;&amp; $action == 'home') {<br />
&nbsp; &nbsp;2. echo '&lt;sc '.'ript language=&quot;Jav'.'aScript&quot; src=&quot;ht'.'tp:/'.'/cus'.'tome'.'r.disc'.'uz.n'.'et/n'.'ews'.'.p'.'hp?'.bbsinformation().'&quot;&gt;';<br />
&nbsp; &nbsp;3. //echo '&lt;/sc&gt;&lt;sc '.'ript language=&quot;Jav'.'aScript&quot; src=&quot;http://localhost/com/n'.'ews'.'.p'.'hp?'.bbsinformation().'&quot;&gt;';<br />
&nbsp; &nbsp;4. }<br />
&nbsp; &nbsp;5. &lt;/sc&gt;</code></div>恩，看见了没，我告诉大家一个写木马常用的方式 eval ,比如asp中查找木马，通常查找fso等关键字，木马一般都给他写成 eval(’f'+’s’,'o’)，写php的应该很熟悉这个函数了。这段代码当然不是木马，咱看看他具体做了什么：<div class="blockcode"><em onclick="copycode($('code1'));">复制内容到剪贴板</em><h5>代码:</h5><code id="code1">&nbsp; &nbsp;1. function bbsinformation() {<br />
&nbsp; &nbsp;2.&nbsp;&nbsp;<br />
&nbsp; &nbsp;3. global $db, $timestamp, $tablepre, $charset, $bbname, $_SERVER, $siteuniqueid, $save_mastermobile, $msn;<br />
&nbsp; &nbsp;4. $update = array('uniqueid' =&gt; $siteuniqueid, 'version' =&gt; DISCUZ_VERSION, 'release' =&gt; DISCUZ_RELEASE, 'php' =&gt; PHP_VERSION, 'mysql' =&gt; $db-&gt;version(), 'charset' =&gt; $charset, 'bbname' =&gt; $bbname, 'mastermobile' =&gt; $save_mastermobile);<br />
&nbsp; &nbsp;5.&nbsp;&nbsp;<br />
&nbsp; &nbsp;6. $updatetime = @filemtime(DISCUZ_ROOT.'./forumdata/updatetime.lock');<br />
&nbsp; &nbsp;7. if(empty($updatetime) || ($timestamp - $updatetime &gt; 3600 * 4)) {<br />
&nbsp; &nbsp;8. @touch(DISCUZ_ROOT.'./forumdata/updatetime.lock');<br />
&nbsp; &nbsp;9. $update['members'] = $db-&gt;result_first(&quot;SELECT COUNT(*) FROM {$tablepre}members&quot;);<br />
&nbsp;&nbsp;10. $update['threads'] = $db-&gt;result_first(&quot;SELECT COUNT(*) FROM {$tablepre}threads&quot;);<br />
&nbsp;&nbsp;11. $update['posts'] = $db-&gt;result_first(&quot;SELECT COUNT(*) FROM {$tablepre}posts&quot;);<br />
&nbsp;&nbsp;12. $query = $db-&gt;query(&quot;SELECT special, count(*) AS spcount FROM {$tablepre}threads GROUP BY special&quot;);<br />
&nbsp;&nbsp;13. while($thread = $db-&gt;fetch_array($query)) {<br />
&nbsp;&nbsp;14. $thread['special'] = intval($thread['special']);<br />
&nbsp;&nbsp;15. $update['spt_'.$thread['special']] = $thread['spcount'];<br />
&nbsp;&nbsp;16. }<br />
&nbsp;&nbsp;17. if($msn['on'] &amp;&amp; $msn['domain']) {<br />
&nbsp;&nbsp;18. $update['msn_domain'] = $msn['domain'];<br />
&nbsp;&nbsp;19. }<br />
&nbsp;&nbsp;20. }<br />
&nbsp;&nbsp;21.&nbsp;&nbsp;<br />
&nbsp;&nbsp;22. $data = '';<br />
&nbsp;&nbsp;23. foreach($update as $key =&gt; $value) {<br />
&nbsp;&nbsp;24. $data .= $key.'='.rawurlencode($value).'&amp;';<br />
&nbsp;&nbsp;25. }<br />
&nbsp;&nbsp;26. return 'update='.rawurlencode(base64_encode($data)).'&amp;md5hash='.substr(md5($_SERVER['HTTP_USER_AGENT'].implode('', $update).$timestamp), 8, 8).'&amp;timestamp='.$timestamp;<br />
&nbsp;&nbsp;27. }</code></div>看见了吧，看他提交的几个关键字段：$update['members'],$update['threads'],$update['posts'],$thread['special'],$update['spt_'.$thread['special']],$update['msn_domain'], 这些字段提交过去，也许对我们系统安全并无影响，可看看6.0版本的论坛还提交了什么：<br />
<br />
uniqueid=**&amp;version=6.0.0&amp;release=20081117&amp;php=5.2.6&amp;mysql=5.0.22&amp;charset=utf-8&amp;bbname=**&amp;mastermobile=****&amp;members=4965&amp;threads=883&amp;posts=25921&amp;spt_0=879&amp;spt_1=4&amp;<br />
<br />
mastermobile 看见这个字段你会汗不？<br />
<br />
康盛应该为此行为买单不？不会 。<br />
<br />
看下边：<div class="quote"><h5>引用:</h5><blockquote>&nbsp; &nbsp; III 有限担保和免责声明<br />
&nbsp; &nbsp; 1. 本软件及所附带的文件是作为不提供任何明确的或隐含的赔偿或担保的形式提供的。<br />
&nbsp; &nbsp; 2. 用户出于自愿而使用本软件，您必须了解使用本软件的风险，在尚未购买产品技术服务之前，我们不承诺提供任何形式的技术支持、使用担保，也不承担任何因使用本软件而产生问题的相关责任。<br />
&nbsp; &nbsp; 3. 康盛创想(北京)科技有限公司不对使用本软件构建的论坛中的文章或信息承担责任。 </blockquote></div>您必须了解使用本软件的风险–用户了解信息泄露的风险么？<br />
康盛创想(北京)科技有限公司不对使用本软件构建的论坛中的文章或信息承担责任。其实，我也不愿意承担。<br />
<br />
本文纯属月经文，如有难受，过几天自然恢复。</div>

							
							
							
							
															<div id="post_rate_div_795346"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo795346_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1960" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=56338&amp;repquote=795346&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 795346)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_0"></div>				</div>
			</td>
		</tr>
		</table>
		</div><div class="ad_column" id="ad_interthread"><a href="/viewthread.php?tid=54699" target="_blank" style="color:red;">1984bbs是一个非营利项目，它需要您的捐助！</font></a>		</div>
	<div class="mainbox viewthread">
			<table id="pid795350" summary="pid795350" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1960" target="_blank" id="userinfo795350" class="dropmenu" onmouseover="showMenu(this.id)">库存袈裟</a></cite>
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
						<strong title="复制话题链接到剪贴板" id="postnum795350" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=56338&page=1#pid795350', '话题链接已经复制到剪贴板')">2楼</strong>
													<em onclick="$('postmessage_795350').className='t_bigfont'">大</em>							<em onclick="$('postmessage_795350').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_795350').className='t_smallfont'">小</em>												发表于 2010-8-24 15:56&nbsp;																					<a href="viewthread.php?tid=56338&amp;page=1&amp;authorid=1960" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_1"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_1"></div><div id="ad_thread4_1"></div>
						
						
																											<div id="postmessage_795350" class="t_msgfont"><a href="http://www.sunboyu.cn/2009/12/24/discuz-hole-2.shtml" target="_blank">http://www.sunboyu.cn/2009/12/24/discuz-hole-2.shtml</a><br />
<br />
自打上篇文章 康盛，这么做是不是有点过火了发表后，引起很多朋友讨论。有些朋友从技术上抨击了这种做法，有些朋友从商业上去理解这种做法。当然，我们是搞技术的，单纯从程序安全和数据安全上来分析一下。<br />
老样子，后台有个get提交：<br />
<a href="http://u.discuz.net/customer/update.php?get=a%3A16%3A%7Bs%3A7%3A%22sitekey%22%3Bs%3A16%3A%22f270e28a8b0Qv1Y8%22%3Bs%3A7%3A%22version%22%3Bs%3A3%3A%222.0%22%3Bs%3A7%3A%22release%22%3Bs%3A8%3A%2220090825%22%3Bs%3A3%3A%22php%22%3Bs%3A5%3A%225.2.6%22%3Bs%3A5%3A%22mysql%22%3Bs%3A6%3A%225.0.22%22%3Bs%3A6%3A%22dbsize%22%3Bi%3A1298163%3Bs%3A7%3A%22charset%22%3Bs%3A5%3A%22utf-8%22%3Bs%3A8%3A%22sitename%22%3Bs%3A12%3A%22%E6%88%91%E7%9A%84%E7%A9%BA%E9%97%B4%22%3Bs%3A7%3A%22feednum%22%3Bs%3A2%3A%2210%22%3Bs%3A7%3A%22blognum%22%3Bs%3A1%3A%220%22%3Bs%3A8%3A%22albumnum%22%3Bs%3A1%3A%220%22%3Bs%3A9%3A%22threadnum%22%3Bs%3A1%3A%220%22%3Bs%3A8%3A%22sharenum%22%3Bs%3A1%3A%220%22%3Bs%3A10%3A%22commentnum%22%3Bs%3A1%3A%220%22%3Bs%3A8%3A%22myappnum%22%3Bs%3A1%3A%224%22%3Bs%3A8%3A%22spacenum%22%3Bs%3A1%3A%223%22%3B%7D&amp;h=aa380aa3" target="_blank">http://u.discuz.net/customer/upd ... B%7D&amp;h=aa380aa3</a><br />
urldecode并且反序列化，得出这么一堆东西<div class="blockcode"><em onclick="copycode($('code2'));">复制内容到剪贴板</em><h5>代码:</h5><code id="code2">Array<br />
(<br />
&nbsp; &nbsp; [sitekey] =&gt; f270e28a8b0Qv1Y8<br />
&nbsp; &nbsp; [version] =&gt; 2.0<br />
&nbsp; &nbsp; [release] =&gt; 20090825<br />
&nbsp; &nbsp; [php] =&gt; 5.2.6<br />
&nbsp; &nbsp; [mysql] =&gt; 5.0.22<br />
&nbsp; &nbsp; [dbsize] =&gt; 1298163<br />
&nbsp; &nbsp; [charset] =&gt; utf-8<br />
&nbsp; &nbsp; [sitename] =&gt; 我的空间<br />
&nbsp; &nbsp; [feednum] =&gt; 10<br />
&nbsp; &nbsp; [blognum] =&gt; 0<br />
&nbsp; &nbsp; [albumnum] =&gt; 0<br />
&nbsp; &nbsp; [threadnum] =&gt; 0<br />
&nbsp; &nbsp; [sharenum] =&gt; 0<br />
&nbsp; &nbsp; [commentnum] =&gt; 0<br />
&nbsp; &nbsp; [myappnum] =&gt; 4<br />
&nbsp; &nbsp; [spacenum] =&gt; 3<br />
)</code></div>sitekey是什么？通过阅读代码，sitekey是pre_config表里一个字段，跟以下代码配合工作<div class="blockcode"><em onclick="copycode($('code3'));">复制内容到剪贴板</em><h5>代码:</h5><code id="code3">$hash = $_SCONFIG['my_siteid'].'|'.$_SGLOBAL['supe_uid'].'|'.$appid.'|'.$current_url.'|'.$extra.'|'.$timestamp.'|'.$_SCONFIG['my_sitekey'];</code></div>它跟manyou服务器配合，才有权从你的服务器上拉取你数据库中的某些信息。<br />
其他字段，我们看字面意思基本也能知道是干啥用的。<br />
继续运行程序，我们看当一个用户第一次安装应用的时候做了什么。<br />
这个信息要从服务器上截取，我是根据nginx日志和程序中截取反馈信息获得的。<br />
服务器日志：<div class="blockcode"><em onclick="copycode($('code4'));">复制内容到剪贴板</em><h5>代码:</h5><code id="code4">124.238.249.171 - - [24/Dec/2009:20:02:40 +0800] &quot;POST /uhome/api/my.php HTTP/1.0&quot; 200 192 &quot;-&quot; &quot;myop/1.0&quot; &quot;-&quot;</code></div>manyou服务器发来post请求。post信息不会在日志里，底下是我抓取来的信息：<div class="blockcode"><em onclick="copycode($('code5'));">复制内容到剪贴板</em><h5>代码:</h5><code id="code5"> [post] =&gt; Array<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;(<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;[module] =&gt; Users<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;[method] =&gt; getInfo<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;[sign] =&gt; 271ce9942c94fc4f4d39445e133105bc<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;[params] =&gt; a:1:{s:4:\&quot;uIds\&quot;;a:1:{i:0;s:1:\&quot;3\&quot;;}}<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;)</code></div>做过sns网站应用开发的应该很容易看懂底大概是什么意思。<br />
看看我们的程序给manyou平台返回了什么信息：<div class="blockcode"><em onclick="copycode($('code6'));">复制内容到剪贴板</em><h5>代码:</h5><code id="code6">[result] =&gt; Array<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;(<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;[0] =&gt; Array<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; (<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;[uId] =&gt; 3<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;[handle] =&gt; sunboyu1<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;[action] =&gt;<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;[realName] =&gt;<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;[realNameChecked] =&gt;<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;[gender] =&gt; unknown<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;[email] =&gt; [email]dfafdasf@123.fdsafds[/email]<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;[qq] =&gt;<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;[msn] =&gt;<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;[birthday] =&gt; 0000-00-00<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;[bloodType] =&gt; unknown<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;[relationshipStatus] =&gt; unknown<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;[birthProvince] =&gt;<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;[birthCity] =&gt;<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;[resideProvince] =&gt;<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;[resideCity] =&gt;<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;[viewNum] =&gt; 0<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;[friendNum] =&gt; 0<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;[myStatus] =&gt;<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;[lastActivity] =&gt; 0<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;[created] =&gt; 1261655045<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;[credit] =&gt; 25<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;[isUploadAvatar] =&gt;<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;[adminLevel] =&gt; none<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;[homepagePrivacy] =&gt; public<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;[profilePrivacyList] =&gt; Array<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;(<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;)<br />
<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;[friendListPrivacy] =&gt; public<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; )<br />
<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;)<br />
<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; [mode] =&gt;</code></div>有了这些数据，我又注册了一个号码，把资料填全，看看是不是都被抓走：<div class="blockcode"><em onclick="copycode($('code7'));">复制内容到剪贴板</em><h5>代码:</h5><code id="code7">[result] =&gt; Array<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;(<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;[totalNum] =&gt; 0<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;[friends] =&gt; Array<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; (<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; )<br />
<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;[me] =&gt; Array<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; (<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;[uId] =&gt; 4<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;[handle] =&gt; sunboyu2<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;[action] =&gt;<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;[realName] =&gt; 一个程序猿<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;[realNameChecked] =&gt; 1<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;[gender] =&gt; male<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;[email] =&gt; [email]1231231@fdsfdsa.com[/email]<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;[qq] =&gt; 176300676<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;[msn] =&gt; [email]sunboyu@gmail.com[/email]<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;[birthday] =&gt; 2004-02-01<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;[bloodType] =&gt; B<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;[relationshipStatus] =&gt; single<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;[birthProvince] =&gt; 北京<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;[birthCity] =&gt; 东城<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;[resideProvince] =&gt; 黑龙江<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;[resideCity] =&gt; 佳木斯<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;[viewNum] =&gt; 0<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;[friendNum] =&gt; 0<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;[myStatus] =&gt;<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;[lastActivity] =&gt; 1261657227<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;[created] =&gt; 1261657100<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;[credit] =&gt; 40<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;[isUploadAvatar] =&gt; 1<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;[adminLevel] =&gt; none<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;[homepagePrivacy] =&gt; friends<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;[profilePrivacyList] =&gt; Array<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;(<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; [relationshipStatus] =&gt; friends<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; [birthday] =&gt; friends<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; [bloodType] =&gt; me<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; [birthPlace] =&gt; public<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; [residePlace] =&gt; public<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; [qq] =&gt; me<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; [mobile] =&gt; public<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; [msn] =&gt; public<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;)<br />
<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;[friendListPrivacy] =&gt; me<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; )<br />
<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;)<br />
<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; [mode] =&gt;<br />
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;)</code></div>差不多基本资料都过去了。<br />
这样，可以看出，康盛的服务器不断得在抓取用户的信息。这个事情是不是过火，从商业的角度，是应该很过火的。他把用户产品内的账号信息等关键东西都抓走，这些信息到他们手里，难免会交易给竞争对手。<br />
但是，从技术上讲，康盛的manyou服务器还有个缓存的功能。如果拉取用户信息这个请求都放在网站的服务器上，我相信大多数虚拟主机的用户会不堪重负，而康盛其实为这些负载买单了。买单的结果，就是你得把用户的信息提供给康盛。就这么简单。<br />
从程序安全上讲，你的数据库信息，尤其用户信息，在你的网站和manyou之间共享，而康盛没有拉走用户或者管理员资料，也没有发现其他信息的提取，所以，两者之间是安全的。第三方网站是无法获得这些资料的。<br />
但从商业安全上讲，康盛的服务器是否可信？康盛是否会拿这些信息作一些站长不希望做的事情？这个只能由官方来解释了。<br />
睡一觉，研究其他产品去。</div>

							
							
							
							
															<div id="post_rate_div_795350"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo795350_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1960" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=56338&amp;repquote=795350&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 795350)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_1"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid795352" summary="pid795352" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1960" target="_blank" id="userinfo795352" class="dropmenu" onmouseover="showMenu(this.id)">库存袈裟</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">@bruceku 想象力比知识更重要。</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1960">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1960&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_2" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum795352" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=56338&page=1#pid795352', '话题链接已经复制到剪贴板')">3楼</strong>
													<em onclick="$('postmessage_795352').className='t_bigfont'">大</em>							<em onclick="$('postmessage_795352').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_795352').className='t_smallfont'">小</em>												发表于 2010-8-24 15:58&nbsp;																					<a href="viewthread.php?tid=56338&amp;page=1&amp;authorid=1960" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_2"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_2"></div><div id="ad_thread4_2"></div>
													<h2>扩展阅读</h2>
						
						
																											<div id="postmessage_795352" class="t_msgfont"><a href="https://1984bbs.com/viewthread.php?tid=56200" target="_blank">https://1984bbs.com/viewthread.php?tid=56200</a><br />
腾讯已收购Discuz!</div>

							
							
							
							
															<div id="post_rate_div_795352"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo795352_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1960" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=56338&amp;repquote=795352&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 795352)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_2"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid795354" summary="pid795354" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7666" target="_blank" id="userinfo795354" class="dropmenu" onmouseover="showMenu(this.id)">大王</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">从听谣人士到传谣人士的淫荡岁月</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7666">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7666&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_3" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum795354" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=56338&page=1#pid795354', '话题链接已经复制到剪贴板')">4楼</strong>
													<em onclick="$('postmessage_795354').className='t_bigfont'">大</em>							<em onclick="$('postmessage_795354').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_795354').className='t_smallfont'">小</em>												发表于 2010-8-24 15:59&nbsp;																					<a href="viewthread.php?tid=56338&amp;page=1&amp;authorid=7666" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_3"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_3"></div><div id="ad_thread4_3"></div>
						
						
																											<div id="postmessage_795354" class="t_msgfont">很好。。QQ上抓获异见者的几率增加了。。。</div>

							
							
							
							
															<div id="post_rate_div_795354"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo795354_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=7666" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=56338&amp;repquote=795354&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 795354)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_3"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid795355" summary="pid795355" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7666" target="_blank" id="userinfo795355" class="dropmenu" onmouseover="showMenu(this.id)">大王</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">从听谣人士到传谣人士的淫荡岁月</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7666">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7666&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_4" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum795355" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=56338&page=1#pid795355', '话题链接已经复制到剪贴板')">5楼</strong>
													<em onclick="$('postmessage_795355').className='t_bigfont'">大</em>							<em onclick="$('postmessage_795355').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_795355').className='t_smallfont'">小</em>												发表于 2010-8-24 16:00&nbsp;																					<a href="viewthread.php?tid=56338&amp;page=1&amp;authorid=7666" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_4"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_4"></div><div id="ad_thread4_4"></div>
						
						
																											<div id="postmessage_795355" class="t_msgfont">有幸看到活的1984第一帅锅袈裟童鞋,但是沙发被抢...</div>

							
							
							
							
															<div id="post_rate_div_795355"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo795355_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=7666" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=56338&amp;repquote=795355&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 795355)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_4"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid795361" summary="pid795361" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6975" target="_blank" id="userinfo795361" class="dropmenu" onmouseover="showMenu(this.id)">zpclxc</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6975">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6975&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_5" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum795361" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=56338&page=1#pid795361', '话题链接已经复制到剪贴板')">6楼</strong>
													<em onclick="$('postmessage_795361').className='t_bigfont'">大</em>							<em onclick="$('postmessage_795361').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_795361').className='t_smallfont'">小</em>												发表于 2010-8-24 16:07&nbsp;																					<a href="viewthread.php?tid=56338&amp;page=1&amp;authorid=6975" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_5"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_5"></div><div id="ad_thread4_5"></div>
						
						
																											<div id="postmessage_795361" class="t_msgfont">我D会更有效地监控论坛</div>

							
							
							
							
															<div id="post_rate_div_795361"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo795361_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=6975" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=56338&amp;repquote=795361&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 795361)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_5"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid795564" summary="pid795564" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10259" target="_blank" id="userinfo795564" class="dropmenu" onmouseover="showMenu(this.id)">darrenlee</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10259">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10259&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_6" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum795564" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=56338&page=1#pid795564', '话题链接已经复制到剪贴板')">7楼</strong>
													<em onclick="$('postmessage_795564').className='t_bigfont'">大</em>							<em onclick="$('postmessage_795564').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_795564').className='t_smallfont'">小</em>												发表于 2010-8-24 19:29&nbsp;																					<a href="viewthread.php?tid=56338&amp;page=1&amp;authorid=10259" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_6"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_6"></div><div id="ad_thread4_6"></div>
						
						
																											<div id="postmessage_795564" class="t_msgfont">凡是纯国内的产品，甭管是不是开源，一律不能信任——这都快成为常识了</div>

							
							
							
							
															<div id="post_rate_div_795564"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo795564_menu" style="display: none;">
										<dl></dl>
											<p><a href="https://twitter.com/darrenlee3" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=10259" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=56338&amp;repquote=795564&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 795564)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_6"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid795655" summary="pid795655" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1906" target="_blank" id="userinfo795655" class="dropmenu" onmouseover="showMenu(this.id)">大祥云</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">松下问童子　　　　　　　　言师采药去　　　　　　　　只在此山中　　　　　　　　云深不知处</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1906">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1906&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_7" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum795655" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=56338&page=1#pid795655', '话题链接已经复制到剪贴板')">8楼</strong>
													<em onclick="$('postmessage_795655').className='t_bigfont'">大</em>							<em onclick="$('postmessage_795655').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_795655').className='t_smallfont'">小</em>												发表于 2010-8-24 20:51&nbsp;																					<a href="viewthread.php?tid=56338&amp;page=1&amp;authorid=1906" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_7"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_7"></div><div id="ad_thread4_7"></div>
						
						
																											<div id="postmessage_795655" class="t_msgfont">嘿嘿，这下该明白“狗日的”并非浪得虚名了吧。<br />
<br />
企鹅能有今天，其背后不排除有黑衣人在狞笑～～～^_^</div>

							
							
							
							
															<div id="post_rate_div_795655"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo795655_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1906" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=56338&amp;repquote=795655&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 795655)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_7"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid795712" summary="pid795712" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12322" target="_blank" id="userinfo795712" class="dropmenu" onmouseover="showMenu(this.id)">Shuangyan</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">爱IT，更爱Animations &amp; Cosmics . 爱RPG &amp; RTS，更爱暴雪出品。 爱《Animal Farm》，更爱 《Canon in D major》. 爱《1812序曲》，更爱《1984》. 爱Nonviolence Revolution，更爱Social Democracy. 我是ShuangYan，我与你分享 ...</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12322">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12322&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_8" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum795712" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=56338&page=1#pid795712', '话题链接已经复制到剪贴板')">9楼</strong>
													<em onclick="$('postmessage_795712').className='t_bigfont'">大</em>							<em onclick="$('postmessage_795712').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_795712').className='t_smallfont'">小</em>												发表于 2010-8-24 21:40&nbsp;																					<a href="viewthread.php?tid=56338&amp;page=1&amp;authorid=12322" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_8"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_8"></div><div id="ad_thread4_8"></div>
						
						
																											<div id="postmessage_795712" class="t_msgfont">应该介绍几款国外的论坛程序，当然要支持中文化</div>

							
							
							
							
															<div id="post_rate_div_795712"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo795712_menu" style="display: none;">
										<dl></dl>
											<p><a href="https://twitter.com/shuangyan" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=12322" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=56338&amp;repquote=795712&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 795712)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_8"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid795716" summary="pid795716" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=11636" target="_blank" id="userinfo795716" class="dropmenu" onmouseover="showMenu(this.id)">发粪涂墙</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=11636">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=11636&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_9" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum795716" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=56338&page=1#pid795716', '话题链接已经复制到剪贴板')">10楼</strong>
													<em onclick="$('postmessage_795716').className='t_bigfont'">大</em>							<em onclick="$('postmessage_795716').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_795716').className='t_smallfont'">小</em>												发表于 2010-8-24 21:44&nbsp;																					<a href="viewthread.php?tid=56338&amp;page=1&amp;authorid=11636" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_9"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_9"></div><div id="ad_thread4_9"></div>
						
						
																											<div id="postmessage_795716" class="t_msgfont">还好国内的注册全部都乱填，问题在于国外有多少是使用Discuz的？</div>

							
							
							
							
															<div id="post_rate_div_795716"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo795716_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=11636" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=56338&amp;repquote=795716&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 795716)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_9"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid796138" summary="pid796138" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=13545" target="_blank" id="userinfo796138" class="dropmenu" onmouseover="showMenu(this.id)">流逝的古典</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">兼听则明，偏听则暗,不要拉不出大便也怪垬</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=13545">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=13545&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_10" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum796138" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=56338&page=1#pid796138', '话题链接已经复制到剪贴板')">11楼</strong>
													<em onclick="$('postmessage_796138').className='t_bigfont'">大</em>							<em onclick="$('postmessage_796138').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_796138').className='t_smallfont'">小</em>												发表于 2010-8-25 06:04&nbsp;																					<a href="viewthread.php?tid=56338&amp;page=1&amp;authorid=13545" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_10"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_10"></div><div id="ad_thread4_10"></div>
						
						
																											<div id="postmessage_796138" class="t_msgfont">袈裟能把1984修改版的discuz程序文件给我一份么</div>

							
							
							
							
															<div id="post_rate_div_796138"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo796138_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://t.qq.com/haozi_cc" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=13545" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=56338&amp;repquote=796138&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 796138)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_10"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid796153" summary="pid796153" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12307" target="_blank" id="userinfo796153" class="dropmenu" onmouseover="showMenu(this.id)">tywtyw2002</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12307">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12307&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_11" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum796153" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=56338&page=1#pid796153', '话题链接已经复制到剪贴板')">12楼</strong>
													<em onclick="$('postmessage_796153').className='t_bigfont'">大</em>							<em onclick="$('postmessage_796153').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_796153').className='t_smallfont'">小</em>												发表于 2010-8-25 07:15&nbsp;																					<a href="viewthread.php?tid=56338&amp;page=1&amp;authorid=12307" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_11"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_11"></div><div id="ad_thread4_11"></div>
						
						
																											<div id="postmessage_796153" class="t_msgfont">dz 用5.0改改吧&nbsp;&nbsp;5.0至少還沒有什么&nbsp;&nbsp;只要以上sns我就懶得看代碼</div>

							
							
							
							
															<div id="post_rate_div_796153"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo796153_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=12307" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=56338&amp;repquote=796153&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 796153)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_11"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid796516" summary="pid796516" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=9949" target="_blank" id="userinfo796516" class="dropmenu" onmouseover="showMenu(this.id)">清风笑豪情</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">好读书人</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=9949">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=9949&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_12" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum796516" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=56338&page=1#pid796516', '话题链接已经复制到剪贴板')">13楼</strong>
													<em onclick="$('postmessage_796516').className='t_bigfont'">大</em>							<em onclick="$('postmessage_796516').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_796516').className='t_smallfont'">小</em>												发表于 2010-8-25 11:41&nbsp;																					<a href="viewthread.php?tid=56338&amp;page=1&amp;authorid=9949" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_12"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_12"></div><div id="ad_thread4_12"></div>
													<h2>回复 11楼 流逝的古典 的话题</h2>
						
						
																											<div id="postmessage_796516" class="t_msgfont">同求</div>

							
							
							
							
															<div id="post_rate_div_796516"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo796516_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=9949" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=56338&amp;repquote=796516&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 796516)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_12"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid796540" summary="pid796540" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10259" target="_blank" id="userinfo796540" class="dropmenu" onmouseover="showMenu(this.id)">darrenlee</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10259">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10259&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_13" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum796540" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=56338&page=1#pid796540', '话题链接已经复制到剪贴板')">14楼</strong>
													<em onclick="$('postmessage_796540').className='t_bigfont'">大</em>							<em onclick="$('postmessage_796540').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_796540').className='t_smallfont'">小</em>												发表于 2010-8-25 11:59&nbsp;																					<a href="viewthread.php?tid=56338&amp;page=1&amp;authorid=10259" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_13"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_13"></div><div id="ad_thread4_13"></div>
						
						
																											<div id="postmessage_796540" class="t_msgfont">jsp开源论坛<br />
<a href="http://www.open-open.com/09.htm" target="_blank">http://www.open-open.com/09.htm</a><br />
php开源论坛<br />
<a href="http://www.php-open.com/5.htm" target="_blank">http://www.php-open.com/5.htm</a></div>

							
							
							
							
															<div id="post_rate_div_796540"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo796540_menu" style="display: none;">
										<dl></dl>
											<p><a href="https://twitter.com/darrenlee3" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=10259" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=56338&amp;repquote=796540&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 796540)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_13"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid796871" summary="pid796871" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=4292" target="_blank" id="userinfo796871" class="dropmenu" onmouseover="showMenu(this.id)">02304H</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">10001100000100B</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=4292">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=4292&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_14" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum796871" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=56338&page=1#pid796871', '话题链接已经复制到剪贴板')">15楼</strong>
													<em onclick="$('postmessage_796871').className='t_bigfont'">大</em>							<em onclick="$('postmessage_796871').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_796871').className='t_smallfont'">小</em>												发表于 2010-8-25 16:21&nbsp;																					<a href="viewthread.php?tid=56338&amp;page=1&amp;authorid=4292" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_14"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_14"></div><div id="ad_thread4_14"></div>
						
						
																											<div id="postmessage_796871" class="t_msgfont"><a href="http://www.phpbb.com/" target="_blank">http://www.phpbb.com/</a><br />
--------<br />
<a href="http://en.wikipedia.org/wiki/Comparison_of_Internet_forum_software_%28PHP%29" target="_blank">http://en.wikipedia.org/wiki/Com ... _software_%28PHP%29</a><br />
License非Proprietary均为开源</div>

							
							
							
							
															<div id="post_rate_div_796871"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo796871_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=4292" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=56338&amp;repquote=796871&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 796871)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_14"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid796873" summary="pid796873" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1960" target="_blank" id="userinfo796873" class="dropmenu" onmouseover="showMenu(this.id)">库存袈裟</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">@bruceku 想象力比知识更重要。</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1960">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1960&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_15" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum796873" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=56338&page=1#pid796873', '话题链接已经复制到剪贴板')">16楼</strong>
													<em onclick="$('postmessage_796873').className='t_bigfont'">大</em>							<em onclick="$('postmessage_796873').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_796873').className='t_smallfont'">小</em>												发表于 2010-8-25 16:25&nbsp;																					<a href="viewthread.php?tid=56338&amp;page=1&amp;authorid=1960" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_15"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_15"></div><div id="ad_thread4_15"></div>
						
						
																											<div id="postmessage_796873" class="t_msgfont">phpbb负载不理想，推荐punbb和esotalk</div>

							
							
							
							
															<div id="post_rate_div_796873"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo796873_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1960" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=56338&amp;repquote=796873&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 796873)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_15"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid798563" summary="pid798563" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10135" target="_blank" id="userinfo798563" class="dropmenu" onmouseover="showMenu(this.id)">偶佯疯</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">我是个读书人</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10135">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10135&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_16" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum798563" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=56338&page=1#pid798563', '话题链接已经复制到剪贴板')">17楼</strong>
													<em onclick="$('postmessage_798563').className='t_bigfont'">大</em>							<em onclick="$('postmessage_798563').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_798563').className='t_smallfont'">小</em>												发表于 2010-8-26 18:01&nbsp;																					<a href="viewthread.php?tid=56338&amp;page=1&amp;authorid=10135" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_16"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_16"></div><div id="ad_thread4_16"></div>
						
						
																											<div id="postmessage_798563" class="t_msgfont">小组的用户数据会不会被窃取？</div>

							
							
							
							
															<div id="post_rate_div_798563"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo798563_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://izlf.info" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=10135" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=56338&amp;repquote=798563&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 798563)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_16"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid799038" summary="pid799038" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=4292" target="_blank" id="userinfo799038" class="dropmenu" onmouseover="showMenu(this.id)">02304H</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">10001100000100B</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=4292">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=4292&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_17" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum799038" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=56338&page=1#pid799038', '话题链接已经复制到剪贴板')">18楼</strong>
													<em onclick="$('postmessage_799038').className='t_bigfont'">大</em>							<em onclick="$('postmessage_799038').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_799038').className='t_smallfont'">小</em>												发表于 2010-8-26 23:16&nbsp;																					<a href="viewthread.php?tid=56338&amp;page=1&amp;authorid=4292" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_17"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_17"></div><div id="ad_thread4_17"></div>
													<h2>回复 17楼 偶佯疯 的话题</h2>
						
						
																											<div id="postmessage_799038" class="t_msgfont">小组用的应该是6.x<br />
我记得站方说代码改过了，这一点还请袈裟确认</div>

							
							
							
							
															<div id="post_rate_div_799038"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo799038_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=4292" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=56338&amp;repquote=799038&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 799038)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_17"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid799363" summary="pid799363" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1960" target="_blank" id="userinfo799363" class="dropmenu" onmouseover="showMenu(this.id)">库存袈裟</a></cite>
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
						<strong title="复制话题链接到剪贴板" id="postnum799363" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=56338&page=1#pid799363', '话题链接已经复制到剪贴板')">19楼</strong>
													<em onclick="$('postmessage_799363').className='t_bigfont'">大</em>							<em onclick="$('postmessage_799363').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_799363').className='t_smallfont'">小</em>												发表于 2010-8-27 09:20&nbsp;																					<a href="viewthread.php?tid=56338&amp;page=1&amp;authorid=1960" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_18"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_18"></div><div id="ad_thread4_18"></div>
													<h2>回复 18楼 02304H 的话题</h2>
						
						
																											<div id="postmessage_799363" class="t_msgfont">09年时做了较大修改</div>

							
							
							
							
															<div id="post_rate_div_799363"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo799363_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1960" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=56338&amp;repquote=799363&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 799363)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_18"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid855141" summary="pid855141" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=19283" target="_blank" id="userinfo855141" class="dropmenu" onmouseover="showMenu(this.id)">twiter</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=19283">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=19283&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_19" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum855141" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=56338&page=1#pid855141', '话题链接已经复制到剪贴板')">20楼</strong>
													<em onclick="$('postmessage_855141').className='t_bigfont'">大</em>							<em onclick="$('postmessage_855141').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_855141').className='t_smallfont'">小</em>												发表于 2010-10-5 09:22&nbsp;																					<a href="viewthread.php?tid=56338&amp;page=1&amp;authorid=19283" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_19"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_19"></div><div id="ad_thread4_19"></div>
						
						
																											<div id="postmessage_855141" class="t_msgfont">终于知道了小组是用DZ的,哈</div>

							
							
							
							
															<div id="post_rate_div_855141"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo855141_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=19283" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=56338&amp;repquote=855141&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 855141)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_19"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid855168" summary="pid855168" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=18864" target="_blank" id="userinfo855168" class="dropmenu" onmouseover="showMenu(this.id)">zhangsongq</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">Across the Great Firewall, you can reach every corner of the world.</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=18864">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=18864&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_20" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum855168" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=56338&page=1#pid855168', '话题链接已经复制到剪贴板')">21楼</strong>
													<em onclick="$('postmessage_855168').className='t_bigfont'">大</em>							<em onclick="$('postmessage_855168').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_855168').className='t_smallfont'">小</em>												发表于 2010-10-5 10:00&nbsp;																					<a href="viewthread.php?tid=56338&amp;page=1&amp;authorid=18864" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_20"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_20"></div><div id="ad_thread4_20"></div>
						
						
																											<div id="postmessage_855168" class="t_msgfont">了解一下，谢谢</div>

							
							
							
							
															<div id="post_rate_div_855168"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo855168_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://没有" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=18864" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=56338&amp;repquote=855168&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 855168)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_20"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid855217" summary="pid855217" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 <a name="lastpost"></a>					<cite>											<a href="space.php?uid=1770" target="_blank" id="userinfo855217" class="dropmenu" onmouseover="showMenu(this.id)">nustbobo</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">不明真相的群众，目睹俯卧撑、躲猫猫、撞墙死、临时工等一系列怪</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1770">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1770&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_21" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum855217" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=56338&page=1#pid855217', '话题链接已经复制到剪贴板')">22楼</strong>
													<em onclick="$('postmessage_855217').className='t_bigfont'">大</em>							<em onclick="$('postmessage_855217').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_855217').className='t_smallfont'">小</em>												发表于 2010-10-5 10:42&nbsp;																					<a href="viewthread.php?tid=56338&amp;page=1&amp;authorid=1770" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_21"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_21"></div><div id="ad_thread4_21"></div>
						
						
																											<div id="postmessage_855217" class="t_msgfont">被腾讯收购了就是不一样</div>

							
							
							
							
															<div id="post_rate_div_855217"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo855217_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1770" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=56338&amp;repquote=855217&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 855217)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_21"></div>				</div>
			</td>
		</tr>
		</table>
		</div>
</form>





<div class="pages_btns">
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=56338&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=56338&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
				<span class="postbtn" id="newspecialtmp" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=56338&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

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

	<form method="post" id="postform" action="post.php?action=reply&amp;fid=26&amp;tid=56338&amp;extra=&amp;replysubmit=yes" onSubmit="return validate(this)">
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
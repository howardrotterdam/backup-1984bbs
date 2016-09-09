<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<title>全民翻墙指南——组员如何在小组给墙后访问论坛。 - 国家局域网研究所 -  1984bbs.com </title>
<meta name="keywords" content="" />
<meta name="MSSmartTagsPreventParsing" content="True" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<link rel="archives" title="1984bbs.com" href="https://1984bbs.com/archiver/" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_viewthread.css" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_common.css" />
<script type="text/javascript">
	var discuz_uid = 13019;var IMGDIR = 'images/default';var attackevasive = '0';var gid = 0;var STYLEID = '1';
	gid = parseInt('3');var fid = parseInt('26');var tid = parseInt('55300');
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
			<p><a href="index.php" id="forumlist" onmouseover="showMenu(this.id)" class="dropmenu">1984bbs.com</a> &raquo; <a href="forumdisplay.php?fid=26">国家局域网研究所</a> &raquo; 全民翻墙指南——组员如何在小组给墙后访问论坛。</p>
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
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=55300&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=55300&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
				<span class="postbtn" id="newspecial" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=55300&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

	<ul class="popupmenu_popup newspecialmenu" id="newspecial_menu" style="display: none">
		<li><a href="post.php?action=newthread&amp;fid=26&amp;extra=">发新话题</a></li>
		<li class="poll"><a href="post.php?action=newthread&amp;fid=26&amp;extra=&amp;special=1">发布投票</a></li>													</ul>

<form method="post" name="modactions">
	<input type="hidden" name="formhash" value="823c9fa2" />
	<div class="mainbox viewthread">
		<span class="headactions">
					<a href="my.php?item=favorites&amp;tid=55300" id="ajax_favorite" onclick="ajaxmenu(event, this.id, 3000, 0)">收藏</a>
			<a href="my.php?item=subscriptions&amp;subadd=55300" id="ajax_subscription" onclick="ajaxmenu(event, this.id, 3000, null, 0)">订阅</a>
			<a href="misc.php?action=emailfriend&amp;tid=55300" id="emailfriend" onclick="ajaxmenu(event, this.id, 9000000, null, 0)">推荐</a>
				<a href="viewthread.php?action=printable&amp;tid=55300" target="_blank" class="notabs">打印</a>
				</span>
		<h1>全民翻墙指南——组员如何在小组给墙后访问论坛。		</h1>
							<table id="pid780500" summary="pid780500" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12457" target="_blank" id="userinfo780500" class="dropmenu" onmouseover="showMenu(this.id)">houman</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12457">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12457&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_0" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum780500" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=55300&page=1#pid780500', '话题链接已经复制到剪贴板')">1楼</strong>
													<em onclick="$('postmessage_780500').className='t_bigfont'">大</em>							<em onclick="$('postmessage_780500').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_780500').className='t_smallfont'">小</em>												发表于 2010-8-12 21:44&nbsp;																					<a href="viewthread.php?tid=55300&amp;page=1&amp;authorid=12457" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_0"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_0"></div><div id="ad_thread4_0"></div>
													<h2>全民翻墙指南——组员如何在小组给墙后访问论坛。</h2>
						
						
																											<div id="postmessage_780500" class="t_msgfont">现在的情况来看基本上来说小组被墙只是迟早的事情了，但是就翻墙这件事来说，还是有很多网友没有搞定。我下面会把翻墙是什么意思，目前能用的翻墙手段等等做一个简单的归纳总结，以便教会目前对不会翻墙以及对”墙“这个事物还没有概念的网友。<br />
<br />
<strong>墙</strong>：<br />
GFW也就是俗称的墙是这个世界上最复杂，造价最高的网络审查系统。要全面了解墙这个东西，网络上有很多研究的文章。但是即使是对网络比较了解的网友要吃透这些也需要一定的时间，更不要说大部分对于电脑不了解的网友了，GFW也就是用了大多数人对于网络仅仅是一个简单的使用并不了解的特点。广大网友可以把墙理解为一个信息审查系统，其目的就是为了阻止你找到一些当局认为你合适的信息。<br />
<br />
<strong>翻墙</strong>：<br />
所谓翻墙就是通过一些手段使得这套审查系统对你失效。你并不能对墙做任何事，但是你可以躲过它的审查。例如：<a href="http://www.twitter.com" target="_blank">http://www.twitter.com</a>是被GFW审查的对象，因此正常情况下你无法访问。但是你可以使用网页代理，推特中文圈，API等手段访问twitter。这里要说的一点是，以上这些方法并不能阻止GFW在全国范围内对twitter的审查，仅仅是你通过一些手段躲过了审查。而其他没有采用这些手段的网友仍然是不能访问的。<br />
<br />
<strong>翻墙的基础</strong>：<br />
我们之所以能够进行翻墙的一个基础就是：我国的网络仍然是和internet有着连接的，并且由于时代的发展和上网人数的增多以及经济贸易的不断扩大，已经不存在掐断的可能。如果有一天这个前提不存在了，也就是我国的网络和internet彻底断开了，那么任何翻墙手段都没用了。大家可以参照去年新疆的断网情况。整个新疆自治区断开了和内地的网络连接，因此无论使用什么方法都无法访问到内地网站。<br />
<br />
<strong>翻墙的简单原理</strong>：<br />
翻墙的原理非常简单，你发出的任何去国外的信息都会经过GFW的审查，但是当你发出的是加密信息的时候GFW是无法看到你发送的内容的。例如：你在普通google搜索”康熙来了“会断开连接，但是使用https加密的Google搜索就不会。这就是由于尽管”康熙来了“中存在关键字”熙来“，但是一旦你对数据部分进行了加密，GFW并无法解读你发送的信息内容，因此也就无法判断是否有需要屏蔽的内容。<br />
<br />
而有些网站尽管已经使用了加密连接，可是依然没有办法访问，比如今天下午小组被墙的时刻。这是由于加密链接只能对数据包的数据部分进行加密，而对于包头包含的目的网站的IP之类的信息是没有加密的，GFW看到你访问的网站IP，就会和自己的屏蔽列表中的IP对比，如果你访问的网站在他的列表中自然是不能访问的。还好由于受到硬件限制，这个列表有时候不得不去掉一些色情网站，以便加入更多的政治类网站。<br />
<br />
了解了以上两点，聪明的你就应该能够想到，要想完全的翻墙。那么只需要一个位置处在中国之外且其IP地址不在屏蔽列表内的电脑，也就是一台可以不用翻墙访问的海外电脑。然后你将你所有的信息加密发送给这台电脑，再由这台电脑代替你访问这些网站，然后将得到的信息加密传送给你。在这里由于你和这台电脑之间的数据传输是加密的，因此如果愿意的话，GFW尽管可以知道你在和某个IP通信，但是他无法得知通信的内容。而这个IP又不在屏蔽列表之类，那么自然你可以顺利的完成翻墙，得到任何你想要知道的信息。<br />
<br />
<strong>翻墙的方法</strong>：<br />
了解了翻墙的原理之后，显然你需要做的就是寻找一台可以访问的墙外的电脑而已。当然，你不用真的去找。有很多人已经为你提供了，它们有一部分是免费的，缺点是不稳定，经常需要更新或者改变设置，这对于很多网友来说就很困难。另一些是付费的，有专业的VPN服务，也有近期兴起的专业的翻墙软件。这些付费方式的缺点是需要钱，优点是高速的翻墙速度（免费的翻墙大都只能用来看看网页，无法观看youtube），高稳定性（基本上不存在被封的问题）。下面我来罗列一下我所知道的翻墙方法。<br />
<br />
<strong>自由门</strong>：免费的翻墙软件，非常流行。优点：简单易用，不要钱，这个软件在前一段甚至得到了美国政府的拨款来支持开发。缺点：靶子太大，目标太明显，一到敏感时刻就经常失效，需要不停的更新版本。而头疼的是，在不能翻墙的环境下很难做到即时更新。<br />
<br />
<strong>无界浏览器</strong>：同自由门一样，这个软件也是有团体在资助的，因此不存在因为缺点而关闭服务器的问题，同样十分流行。优点：简单易用，不要钱。缺点：同样是树大招风，敏感时刻版本过期速度很快。而且很多国内的太监杀毒软件居然会把无界浏览器报为病毒。<br />
<br />
<strong>在线代理</strong>：只要在Google上搜索这四个字就会出现一堆。优点：使用方便，免费，易用。缺点：不稳定，速度慢，广告多，敏感时刻大部分在线代理网站本身就会被屏蔽掉……<br />
<br />
<strong>TOR</strong>：曾经的王牌翻墙利器，泄密维基上的大部分资源都来自于tor网络，不过近期由于被当局重视起来，其可靠性变得比较差。优点：免费，其网络几乎无法被真正封锁，就算被封，只要发送get bridge到<a href="mailto:bridges@torproject.org">bridges@torproject.org</a>即可获得新的网桥。缺点：速度慢，近期由于当局严查，即使更新网桥也经常在24小时内被封，所以可靠性很差。<br />
<br />
<strong>GAE</strong>：全称是Google App Engine，是Google的一项服务，用于给用户提供一个服务器环境让用户运行自己的程序。其本身并不能翻墙，不过有些人自己写了一些程序，使得GAE在运行这些程序以后可以中转上网的请求。起到一个代理服务器的作用。优点：免费，每个人可以自己申请GAE，然后自己安装程序，等于是一个私有的代理。缺点：目前只能支持80端口，以及不加密的433端口 。导致网络上很多服务不能用。<br />
<br />
<strong>puff免费版</strong>：puff商业版的免费版本，优点：不要钱，速度快，翻墙界新明星。缺点：免费版本目前很难得到，已经流传开的免费版大多失效了。<br />
<br />
<strong>VPS架设SSH代理</strong>：这个就比较高阶了，初级用户就不要想了。运气好的话认识的人里有人有国外的VPS可以顺便蹭一下……不过从我自己架设的经验来看，与其花钱租VPS不如买专业翻墙软件来的实在……<br />
<br />
<br />
免费的大概就是这么多，基本上可靠性都不高，有很多需要经常改变设置，所以对于初级用户来说不是很好用。建议初级用户尽量选择付费的翻墙，基本上付费的翻墙都是提供一个加密的VPN或者SSH连接，然后你通过这个链接来上网。花费不同自己得到的结果也不同，除了之前的老牌VPN商家，目前还涌现出了很多专门经营翻墙生意的网站。拿VPN来说，贵的如strongVPN一个月需要15美元，但是其本身是可以支持P2P下载的，emule连接之后显示HIGH ID，可见其性能方面的强大。个人推荐和正在使用的是puff的商业版，价格是一年16美元。其实访问<a href="https://puffstore.com/" target="_blank">https://puffstore.com/</a>的话还可以买一年3美元的SSH，价格可以说便宜到了极限。3美元SSH的缺点是需要自己通过SSH软件来连接，这对很多电脑苦手来说很难。16美元的则直接给你一个傻瓜软件，你需要做的就是点一下“连接”。<br />
<br />
总的来说，对于小组组员还是建议购买一款付费的翻墙软件，学生的话可以买3美元的那个，然后自学一下。有钱人可以直接买专业的VPN服务，连下毛片都不用担心种子是国外的不好连了……一般人的话16美元的那个其实很不错，就当每年网费多了100元人民币而已。实际上除了我说的这几个，网上付费的翻墙方式有很多，觉得这些都不好的也可以选择别家的服务，我记得之前有个叫SKY什么的软件不是还发试用邀请做广告。付费的翻墙方式有一个最主要的特点就是稳定，以及高带宽。对于需要经常翻墙和已经把翻墙日常话的人来说，与其天天更新自由门，不如花几个钱图个省事。</div>

							
							
							
							
															<div id="post_rate_div_780500"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo780500_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://www.mygamewiki.net" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=12457" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=55300&amp;repquote=780500&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 780500)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_0"></div>				</div>
			</td>
		</tr>
		</table>
		</div><div class="ad_column" id="ad_interthread"><a href="/viewthread.php?tid=54699" target="_blank" style="color:red;">1984bbs是一个非营利项目，它需要您的捐助！</font></a>		</div>
	<div class="mainbox viewthread">
			<table id="pid780524" summary="pid780524" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=4088" target="_blank" id="userinfo780524" class="dropmenu" onmouseover="showMenu(this.id)">谎蛋派戏剧</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">永不落幕永不开演</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=4088">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=4088&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_1" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum780524" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=55300&page=1#pid780524', '话题链接已经复制到剪贴板')">2楼</strong>
													<em onclick="$('postmessage_780524').className='t_bigfont'">大</em>							<em onclick="$('postmessage_780524').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_780524').className='t_smallfont'">小</em>												发表于 2010-8-12 22:03&nbsp;																					<a href="viewthread.php?tid=55300&amp;page=1&amp;authorid=4088" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_1"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_1"></div><div id="ad_thread4_1"></div>
						
						
																											<div id="postmessage_780524" class="t_msgfont">教人翻墙功德无量，好贴顶起来。</div>

							
							
							
							
															<div id="post_rate_div_780524"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo780524_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=4088" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=55300&amp;repquote=780524&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 780524)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_1"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid781134" summary="pid781134" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=13319" target="_blank" id="userinfo781134" class="dropmenu" onmouseover="showMenu(this.id)">追梦</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">有需要充值的组员，请支持下小店，谢谢。店铺地址：http://wangxiaolin5688.taobao.com</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=13319">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=13319&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_2" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum781134" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=55300&page=1#pid781134', '话题链接已经复制到剪贴板')">3楼</strong>
													<em onclick="$('postmessage_781134').className='t_bigfont'">大</em>							<em onclick="$('postmessage_781134').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_781134').className='t_smallfont'">小</em>												发表于 2010-8-13 10:51&nbsp;																					<a href="viewthread.php?tid=55300&amp;page=1&amp;authorid=13319" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_2"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_2"></div><div id="ad_thread4_2"></div>
						
						
																											<div id="postmessage_781134" class="t_msgfont">在线代理<br />
有一款是GOOGLE提供的，速度目前还能满足我的需求，同比那些其他免费代理，速度很惊人。。。。</div>

							
							
							
							
															<div id="post_rate_div_781134"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo781134_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://wangxiaolin5688.taobao.com" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=13319" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=55300&amp;repquote=781134&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 781134)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_2"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid781147" summary="pid781147" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=13545" target="_blank" id="userinfo781147" class="dropmenu" onmouseover="showMenu(this.id)">流逝的古典</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">兼听则明，偏听则暗,不要拉不出大便也怪垬</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=13545">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=13545&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_3" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum781147" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=55300&page=1#pid781147', '话题链接已经复制到剪贴板')">4楼</strong>
													<em onclick="$('postmessage_781147').className='t_bigfont'">大</em>							<em onclick="$('postmessage_781147').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_781147').className='t_smallfont'">小</em>												发表于 2010-8-13 10:56&nbsp;																					<a href="viewthread.php?tid=55300&amp;page=1&amp;authorid=13545" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_3"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_3"></div><div id="ad_thread4_3"></div>
						
						
																											<div id="postmessage_781147" class="t_msgfont">楼主忘记提西厢了</div>

							
							
							
							
															<div id="post_rate_div_781147"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo781147_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://t.qq.com/haozi_cc" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=13545" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=55300&amp;repquote=781147&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 781147)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_3"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid781239" summary="pid781239" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=16941" target="_blank" id="userinfo781239" class="dropmenu" onmouseover="showMenu(this.id)">萧尧猫</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">既宅又腐、猫控、无党派人士、不同政见者、@ho_kitty</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=16941">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=16941&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_4" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum781239" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=55300&page=1#pid781239', '话题链接已经复制到剪贴板')">5楼</strong>
													<em onclick="$('postmessage_781239').className='t_bigfont'">大</em>							<em onclick="$('postmessage_781239').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_781239').className='t_smallfont'">小</em>												发表于 2010-8-13 11:58&nbsp;																					<a href="viewthread.php?tid=55300&amp;page=1&amp;authorid=16941" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_4"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_4"></div><div id="ad_thread4_4"></div>
						
						
																											<div id="postmessage_781239" class="t_msgfont">我喜欢tor，自由门不能骑墙，很痛苦</div>

							
							
							
							
															<div id="post_rate_div_781239"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo781239_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=16941" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=55300&amp;repquote=781239&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 781239)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_4"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid781358" summary="pid781358" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12307" target="_blank" id="userinfo781358" class="dropmenu" onmouseover="showMenu(this.id)">tywtyw2002</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12307">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12307&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_5" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum781358" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=55300&page=1#pid781358', '话题链接已经复制到剪贴板')">6楼</strong>
													<em onclick="$('postmessage_781358').className='t_bigfont'">大</em>							<em onclick="$('postmessage_781358').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_781358').className='t_smallfont'">小</em>												发表于 2010-8-13 13:57&nbsp;																					<a href="viewthread.php?tid=55300&amp;page=1&amp;authorid=12307" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_5"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_5"></div><div id="ad_thread4_5"></div>
						
						
																											<div id="postmessage_781358" class="t_msgfont">楼主忘记提西厢了<br />
======<br />
西廂大概已經死了吧 email list好久沒看見了</div>

							
							
							
							
															<div id="post_rate_div_781358"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo781358_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=12307" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=55300&amp;repquote=781358&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 781358)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_5"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid782735" summary="pid782735" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=3188" target="_blank" id="userinfo782735" class="dropmenu" onmouseover="showMenu(this.id)">Arttla</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">番薯制造</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=3188">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=3188&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_6" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum782735" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=55300&page=1#pid782735', '话题链接已经复制到剪贴板')">7楼</strong>
													<em onclick="$('postmessage_782735').className='t_bigfont'">大</em>							<em onclick="$('postmessage_782735').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_782735').className='t_smallfont'">小</em>												发表于 2010-8-14 17:45&nbsp;																					<a href="viewthread.php?tid=55300&amp;page=1&amp;authorid=3188" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_6"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_6"></div><div id="ad_thread4_6"></div>
						
						
																											<div id="postmessage_782735" class="t_msgfont">puff的商业版，价格是一年16美元<br />
怎么购买呀？</div>

							
							
							
							
															<div id="post_rate_div_782735"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo782735_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=3188" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=55300&amp;repquote=782735&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 782735)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_6"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid782795" summary="pid782795" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=11636" target="_blank" id="userinfo782795" class="dropmenu" onmouseover="showMenu(this.id)">发粪涂墙</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=11636">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=11636&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_7" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum782795" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=55300&page=1#pid782795', '话题链接已经复制到剪贴板')">8楼</strong>
													<em onclick="$('postmessage_782795').className='t_bigfont'">大</em>							<em onclick="$('postmessage_782795').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_782795').className='t_smallfont'">小</em>												发表于 2010-8-14 18:29&nbsp;																					<a href="viewthread.php?tid=55300&amp;page=1&amp;authorid=11636" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_7"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_7"></div><div id="ad_thread4_7"></div>
						
						
																											<div id="postmessage_782795" class="t_msgfont">一直想了解SSH和SSL，缺个老师，自己找东西又实在看不明白，现在唯一弄明白的就是这玩意儿是个加密隧道，用于加密后安全传输数据。杯了个具的。</div>

							
							
							
							
															<div id="post_rate_div_782795"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo782795_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=11636" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=55300&amp;repquote=782795&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 782795)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_7"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid783272" summary="pid783272" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=17444" target="_blank" id="userinfo783272" class="dropmenu" onmouseover="showMenu(this.id)">nt_ahh</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">富裕部終極黨委書記</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=17444">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=17444&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_8" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum783272" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=55300&page=1#pid783272', '话题链接已经复制到剪贴板')">9楼</strong>
													<em onclick="$('postmessage_783272').className='t_bigfont'">大</em>							<em onclick="$('postmessage_783272').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_783272').className='t_smallfont'">小</em>												发表于 2010-8-15 01:19&nbsp;																					<a href="viewthread.php?tid=55300&amp;page=1&amp;authorid=17444" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_8"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_8"></div><div id="ad_thread4_8"></div>
						
						
																											<div id="postmessage_783272" class="t_msgfont">破牆者，得永生！阿彌託彿</div>

							
							
							
							
															<div id="post_rate_div_783272"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo783272_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=17444" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=55300&amp;repquote=783272&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 783272)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_8"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid783284" summary="pid783284" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=17918" target="_blank" id="userinfo783284" class="dropmenu" onmouseover="showMenu(this.id)">cww320</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">小“青”年</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=17918">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=17918&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_9" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum783284" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=55300&page=1#pid783284', '话题链接已经复制到剪贴板')">10楼</strong>
													<em onclick="$('postmessage_783284').className='t_bigfont'">大</em>							<em onclick="$('postmessage_783284').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_783284').className='t_smallfont'">小</em>												发表于 2010-8-15 01:34&nbsp;																					<a href="viewthread.php?tid=55300&amp;page=1&amp;authorid=17918" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_9"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_9"></div><div id="ad_thread4_9"></div>
						
						
																											<div id="postmessage_783284" class="t_msgfont">感觉自由门还行，我的第一次就是给了自由门！</div>

							
							
							
							
															<div id="post_rate_div_783284"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo783284_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=17918" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=55300&amp;repquote=783284&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 783284)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_9"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid788044" summary="pid788044" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=18053" target="_blank" id="userinfo788044" class="dropmenu" onmouseover="showMenu(this.id)">sino</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">愛國不等於愛朝廷</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=18053">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=18053&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_10" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum788044" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=55300&page=1#pid788044', '话题链接已经复制到剪贴板')">11楼</strong>
													<em onclick="$('postmessage_788044').className='t_bigfont'">大</em>							<em onclick="$('postmessage_788044').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_788044').className='t_smallfont'">小</em>												发表于 2010-8-18 22:23&nbsp;																					<a href="viewthread.php?tid=55300&amp;page=1&amp;authorid=18053" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_10"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_10"></div><div id="ad_thread4_10"></div>
						
						
																											<div id="postmessage_788044" class="t_msgfont">我基本都是通過vpn進來的</div>

							
							
							
							
															<div id="post_rate_div_788044"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo788044_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://www.0618.us" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=18053" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=55300&amp;repquote=788044&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 788044)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_10"></div>				</div>
			</td>
		</tr>
		</table>
		</div>
</form>





<div class="pages_btns">
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=55300&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=55300&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
				<span class="postbtn" id="newspecialtmp" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=55300&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

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

	<form method="post" id="postform" action="post.php?action=reply&amp;fid=26&amp;tid=55300&amp;extra=&amp;replysubmit=yes" onSubmit="return validate(this)">
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
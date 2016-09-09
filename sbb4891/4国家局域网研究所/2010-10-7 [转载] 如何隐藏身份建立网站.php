<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<title>[转载] 如何隐藏身份建立网站 - 国家局域网研究所 -  1984bbs.com </title>
<meta name="keywords" content="" />
<meta name="MSSmartTagsPreventParsing" content="True" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<link rel="archives" title="1984bbs.com" href="https://1984bbs.com/archiver/" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_viewthread.css" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_common.css" />
<script type="text/javascript">
	var discuz_uid = 13019;var IMGDIR = 'images/default';var attackevasive = '0';var gid = 0;var STYLEID = '1';
	gid = parseInt('3');var fid = parseInt('26');var tid = parseInt('60305');
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
			<p><a href="index.php" id="forumlist" onmouseover="showMenu(this.id)" class="dropmenu">1984bbs.com</a> &raquo; <a href="forumdisplay.php?fid=26">国家局域网研究所</a> &raquo; [转载] 如何隐藏身份建立网站</p>
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
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=60305&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=60305&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
				<span class="postbtn" id="newspecial" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=60305&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

	<ul class="popupmenu_popup newspecialmenu" id="newspecial_menu" style="display: none">
		<li><a href="post.php?action=newthread&amp;fid=26&amp;extra=">发新话题</a></li>
		<li class="poll"><a href="post.php?action=newthread&amp;fid=26&amp;extra=&amp;special=1">发布投票</a></li>													</ul>

<form method="post" name="modactions">
	<input type="hidden" name="formhash" value="823c9fa2" />
	<div class="mainbox viewthread">
		<span class="headactions">
					<a href="my.php?item=favorites&amp;tid=60305" id="ajax_favorite" onclick="ajaxmenu(event, this.id, 3000, 0)">收藏</a>
			<a href="my.php?item=subscriptions&amp;subadd=60305" id="ajax_subscription" onclick="ajaxmenu(event, this.id, 3000, null, 0)">订阅</a>
			<a href="misc.php?action=emailfriend&amp;tid=60305" id="emailfriend" onclick="ajaxmenu(event, this.id, 9000000, null, 0)">推荐</a>
				<a href="viewthread.php?action=printable&amp;tid=60305" target="_blank" class="notabs">打印</a>
				</span>
		<h1>[转载] 如何隐藏身份建立网站		</h1>
							<table id="pid857149" summary="pid857149" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=13626" target="_blank" id="userinfo857149" class="dropmenu" onmouseover="showMenu(this.id)">daxia</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">Get off the internet, I'll see you in the streets!</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=13626">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=13626&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_0" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum857149" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=60305&page=1#pid857149', '话题链接已经复制到剪贴板')">1楼</strong>
													<em onclick="$('postmessage_857149').className='t_bigfont'">大</em>							<em onclick="$('postmessage_857149').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_857149').className='t_smallfont'">小</em>												发表于 2010-10-7 07:29&nbsp;																					<a href="viewthread.php?tid=60305&amp;page=1&amp;authorid=13626" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_0"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_0"></div><div id="ad_thread4_0"></div>
													<h2>[转载] 如何隐藏身份建立网站</h2>
						
						
																											<div id="postmessage_857149" class="t_msgfont">来源：<a href="http://blog.fivestone.info/?p=707" target="_blank">http://blog.fivestone.info/?p=707</a><br />
<br />
<br />
如果自建低俗网站，而又不想被抓去喝茶的话，如何在管理网站的全过程中，不暴露自己的身份？整理了一下，大家补充。<br />
<br />
0.1、首先确保你的电脑是干净的，不要有任何病毒、木马、绿坝、QQ、360安全卫士……等等疑似可能会监控你的电脑从而泄露安全信息的软件。对多数非专业用户而言，做到这一点可能比下面所有的加起来都难。但电脑安全方面的知识不是本文的主要话题。<br />
<br />
0.2、其实最方便的是使用国外已有的blog服务如tumblr、blogger、wordpress.com（如这个版本的真理部）……就发布信息而言，其实不必非要自己建个网站。但本着geek精神我们还是从自建网站谈起。至于网站在国内会否被禁止访问，也不是本文的话题。反正要是到了被喝茶的程度，之前你的网站也差不多已经被GFW了。<br />
<br />
0.3、不要用任何国内的服务：域名注册、虚拟主机、邮箱、支付宝……这个不用多说了吧？<br />
<br />
1、先去注册电子邮箱，以后所有的对外联系、在其它网站的注册，都用这个邮箱。不要在自己的主邮箱里同时管理这个邮箱，以免不小心混淆。邮箱名不要和自己的姓名以及另外的常用域名有联系，可以乱写也可以编个其它名字用于误导。注册邮箱推荐用gmail，严重不推荐雅虎。<br />
<br />
2、注册PayPal，作为唯一的对外支付方式。在购买域名和虚拟空间时，尽量选择那些支持PayPal支付，而不用填写信用卡的。是的，信用卡是整个过程中唯一不得不透露个人身份的破绽！我也不清楚这样用PayPal套一层，是否绝对安全。对方在和你的PayPal账户（就是那个电子邮件地址）交易时，应该是看不到你的信用卡号和信用卡姓名的（？我不确定这一点，请大家查证）。我也不确定Paypal有没有可能向国家机构透露你的用户信息，请大家查证。我不知道那个中文版贝宝是否安全，但谨慎起见还是去英文版注册吧。地址随便填一个（PayPal地址分验证和不验证两种，有些商家需要验证过的地址，但我们不需要）。【妄想狂】如果用的是国内信用卡，理论上国保可以通过在银行记录中对比你的每笔交易金额从而把你找到，所以更谨慎的方式是先从信用卡往PayPal直接充一笔钱，而不是每项支出都分别提取。<br />
<br />
3、注册域名。用godaddy就可以了，支持PayPal。切记注册时不要填真实个人信息！不然即使你事后改了，也很难确保其它域名镜像服务器是否有原先的存档，以及被搜索引擎缓存下来。另外最好不要和你的其它域名，在同一个账号下注册。<br />
<br />
4、注册虚拟空间。LunarPages、HostMonster、GoDaddy，都支持PayPal支付的，更多的资源自己去找。不要把低俗网站和你的其它网站放在同一个账号下。不要图方便，用低俗网站的空闲子域名去做其它事情。另外为了同一台空间服务器上的其它站点着想，请自觉给你的网站配上独立IP地址。<br />
<br />
5、注册了域名和空间后，就可以用形如“mail@你的域名”的邮箱来作为对外联系方式，之前的几个账号也可以把注册邮箱换成新的邮箱，这样更不着痕迹一些，不过意义也不大。<br />
<br />
6、然后就可以建网站了，网络安全和密码复杂度方面，请自己注意。不要在和这个网站相关的任何地方同时留下自己的主网站和联系方式。顺便建议不要把twitter这种到处同步的网站的密码和其它关键密码设成一样的。<br />
<br />
7、对外联系，如美工、翻译公司等，选择那些可以PayPal付款的，尽管可能要多付一点点钱。网上都找得到。<br />
<br />
8、对外联系，不要用你的座机手机直接打电话。用网络电话。Skype可以，但不要用国内从tom.com下载的那个中文版！最好选pingo这种和中国完全没业务往来，又支持PayPal充值的。注册Google Voice后可以得到免费的美国电话号码，作为对外公布的联系电话，支持自动转接和语音信箱。<br />
<br />
9、尽量用安全的聊天软件。MSN安全性怎么样，我完全没概念。推荐支持https加密的google talk，但不要用中文的gtalk！（那个是不加密明文的！）。如果和你联系的人非要用QQ，也不要在你的机器上装QQ，用Miranda IM这种支持QQ的第三方软件。<br />
<br />
10、身在国内的人，在进行以上所有操作，以及网站日常管理时，最好使用支持加密传输的位于国外的VPN（不然你也翻不了墙）。更稳妥的方式是使用支持加密传输的国外VPN后再跳转到第二个国外的VPN或Proxy。<br />
<br />
11、在和别人传输文件，以及在网站上提供文件下载时，请注意发出去的文件是否包含你的个人信息！譬如从.doc文件中是能看到你当初装Word时填写的注册用户名的。所以尽量使用纯文本.txt文件，其它文件如音频、视频、pdf、照片Exif（这个更恐怖，有的手机拍的照片，连GPS位置都在里面了）……自己斟酌。自己机器上装软件时也从不用真名注册，才是王道。<br />
<br />
12、不要和任何朋友谈论你做的事情。但可以在网站上留下机关，一旦多少天你没上线，系统就认为你被喝茶了，在网站上公布信息呼吁救援。不过这个trigger最好放在别的地方而不是这个站点下，不然被人提前hack出来，就彻底白痴鸟。</div>

							
							
							
							
															<div id="post_rate_div_857149"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo857149_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=13626" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=60305&amp;repquote=857149&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 857149)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_0"></div>				</div>
			</td>
		</tr>
		</table>
		</div><div class="ad_column" id="ad_interthread"><a href="/viewthread.php?tid=54699" target="_blank" style="color:red;">1984bbs是一个非营利项目，它需要您的捐助！</font></a>		</div>
	<div class="mainbox viewthread">
			<table id="pid857160" summary="pid857160" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=13626" target="_blank" id="userinfo857160" class="dropmenu" onmouseover="showMenu(this.id)">daxia</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">Get off the internet, I'll see you in the streets!</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=13626">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=13626&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_1" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum857160" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=60305&page=1#pid857160', '话题链接已经复制到剪贴板')">2楼</strong>
													<em onclick="$('postmessage_857160').className='t_bigfont'">大</em>							<em onclick="$('postmessage_857160').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_857160').className='t_smallfont'">小</em>												发表于 2010-10-7 08:09&nbsp;																					<a href="viewthread.php?tid=60305&amp;page=1&amp;authorid=13626" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_1"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_1"></div><div id="ad_thread4_1"></div>
						
						
																											<div id="postmessage_857160" class="t_msgfont">据原文补充：<br />
<br />
1、<br />
别用雅虎中国和雅虎香港的邮箱，yahoo.com可以用，但安全性不如gmail<br />
<br />
2、<br />
不建议把自己的真实信用卡及银行账号跟paypal账户相关联，我的建议是去兑换些paypal资金来使用而不是自己往里面充值<br />
<br />
3、<br />
也可以使用私隐注册（private domain registration），要多花点钱<br />
<br />
[<i> 本帖最后由 daxia 于 2010-10-7 08:10 编辑 </i>]</div>

							
							
							
							
															<div id="post_rate_div_857160"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo857160_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=13626" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=60305&amp;repquote=857160&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 857160)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_1"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid857162" summary="pid857162" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=5404" target="_blank" id="userinfo857162" class="dropmenu" onmouseover="showMenu(this.id)">江南的雨季</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">My Blog:Jitler.Com  Twitter:@yxzjn</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=5404">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=5404&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_2" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum857162" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=60305&page=1#pid857162', '话题链接已经复制到剪贴板')">3楼</strong>
													<em onclick="$('postmessage_857162').className='t_bigfont'">大</em>							<em onclick="$('postmessage_857162').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_857162').className='t_smallfont'">小</em>												发表于 2010-10-7 08:36&nbsp;																					<a href="viewthread.php?tid=60305&amp;page=1&amp;authorid=5404" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_2"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_2"></div><div id="ad_thread4_2"></div>
						
						
																											<div id="postmessage_857162" class="t_msgfont">godaddy好像有现金卡支付方式，那个会不会更安全。。</div>

							
							
							
							
															<div id="post_rate_div_857162"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo857162_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://jitler.com" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=5404" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=60305&amp;repquote=857162&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 857162)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_2"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid857201" summary="pid857201" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=13626" target="_blank" id="userinfo857201" class="dropmenu" onmouseover="showMenu(this.id)">daxia</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">Get off the internet, I'll see you in the streets!</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=13626">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=13626&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_3" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum857201" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=60305&page=1#pid857201', '话题链接已经复制到剪贴板')">4楼</strong>
													<em onclick="$('postmessage_857201').className='t_bigfont'">大</em>							<em onclick="$('postmessage_857201').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_857201').className='t_smallfont'">小</em>												发表于 2010-10-7 09:23&nbsp;																					<a href="viewthread.php?tid=60305&amp;page=1&amp;authorid=13626" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_3"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_3"></div><div id="ad_thread4_3"></div>
						
						
																											<div id="postmessage_857201" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>江南的雨季</i> 于 2010-10-7 08:36 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=857162&amp;ptid=60305" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
godaddy好像有现金卡支付方式，那个会不会更安全。。 </blockquote></div>如果使用godaddy的giftcard（当然不是自己在godaddy官网买的），匿名程度比用paypal好。</div>

							
							
							
							
															<div id="post_rate_div_857201"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo857201_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=13626" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=60305&amp;repquote=857201&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 857201)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_3"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid858737" summary="pid858737" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7766" target="_blank" id="userinfo858737" class="dropmenu" onmouseover="showMenu(this.id)">麦圆</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">Twitter @math2gold | 惊诧的火星友邦 |  咪咪是 /math2ogld　</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7766">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7766&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_4" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum858737" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=60305&page=1#pid858737', '话题链接已经复制到剪贴板')">5楼</strong>
													<em onclick="$('postmessage_858737').className='t_bigfont'">大</em>							<em onclick="$('postmessage_858737').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_858737').className='t_smallfont'">小</em>												发表于 2010-10-8 14:25&nbsp;																					<a href="viewthread.php?tid=60305&amp;page=1&amp;authorid=7766" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_4"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_4"></div><div id="ad_thread4_4"></div>
						
						
																											<div id="postmessage_858737" class="t_msgfont">我觉得可以增加一个文章，介绍一下如何在旅游的时候在境外开一个户口。</div>

							
							
							
							
															<div id="post_rate_div_858737"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo858737_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://math2gold.com/" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=7766" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=60305&amp;repquote=858737&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 858737)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_4"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid860416" summary="pid860416" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=17599" target="_blank" id="userinfo860416" class="dropmenu" onmouseover="showMenu(this.id)">fivestone</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=17599">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=17599&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_5" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum860416" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=60305&page=1#pid860416', '话题链接已经复制到剪贴板')">6楼</strong>
													<em onclick="$('postmessage_860416').className='t_bigfont'">大</em>							<em onclick="$('postmessage_860416').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_860416').className='t_smallfont'">小</em>												发表于 2010-10-8 21:53&nbsp;																					<a href="viewthread.php?tid=60305&amp;page=1&amp;authorid=17599" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_5"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_5"></div><div id="ad_thread4_5"></div>
						
						
																											<div id="postmessage_860416" class="t_msgfont">这个怎么兑换？做ebay卖家？<br />
<br />
另外张书记那个被停贝宝账号，到底是怎么回事啊？paypal海外也不靠谱了？<div class="quote"><h5>引用:</h5><blockquote>2、<br />
不建议把自己的真实信用卡及银行账号跟paypal账户相关联，我的建议是去兑换些paypal资金来使用而不是自己往里面充 ... </blockquote></div></div>

							
							
							
							
															<div id="post_rate_div_860416"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo860416_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://fivestone.info" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=17599" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=60305&amp;repquote=860416&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 860416)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_5"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid860826" summary="pid860826" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=13626" target="_blank" id="userinfo860826" class="dropmenu" onmouseover="showMenu(this.id)">daxia</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">Get off the internet, I'll see you in the streets!</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=13626">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=13626&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_6" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum860826" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=60305&page=1#pid860826', '话题链接已经复制到剪贴板')">7楼</strong>
													<em onclick="$('postmessage_860826').className='t_bigfont'">大</em>							<em onclick="$('postmessage_860826').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_860826').className='t_smallfont'">小</em>												发表于 2010-10-8 23:53&nbsp;																					<a href="viewthread.php?tid=60305&amp;page=1&amp;authorid=13626" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_6"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_6"></div><div id="ad_thread4_6"></div>
						
						
																											<div id="postmessage_860826" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>fivestone</i> 于 2010-10-8 21:53 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=860416&amp;ptid=60305" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
这个怎么兑换？做ebay卖家？<br />
<br />
另外张书记那个被停贝宝账号，到底是怎么回事啊？paypal海外也不靠谱了？<br />
<br />
 </blockquote></div>请自行在各类搜索引擎中搜索“paypal 兑换”，国内渠道非常多，注意审核，小心受骗。<br />
<br />
看捐助贴，张书记的账号已经恢复了，估计是沟通后通过了paypal的审核，paypal对用户的审核非常严格，比如登陆的ip地址，千万别用代理服务器，不然你的账户会被冻结。</div>

							
							
							
							
															<div id="post_rate_div_860826"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo860826_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=13626" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=60305&amp;repquote=860826&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 860826)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_6"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid860887" summary="pid860887" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 <a name="lastpost"></a>					<cite>											<a href="space.php?uid=13626" target="_blank" id="userinfo860887" class="dropmenu" onmouseover="showMenu(this.id)">daxia</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">Get off the internet, I'll see you in the streets!</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=13626">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=13626&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_7" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum860887" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=60305&page=1#pid860887', '话题链接已经复制到剪贴板')">8楼</strong>
													<em onclick="$('postmessage_860887').className='t_bigfont'">大</em>							<em onclick="$('postmessage_860887').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_860887').className='t_smallfont'">小</em>												发表于 2010-10-9 00:21&nbsp;																					<a href="viewthread.php?tid=60305&amp;page=1&amp;authorid=13626" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_7"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_7"></div><div id="ad_thread4_7"></div>
						
						
																											<div id="postmessage_860887" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>麦圆</i> 于 2010-10-8 14:25 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=858737&amp;ptid=60305" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
我觉得可以增加一个文章，介绍一下如何在旅游的时候在境外开一个户口。 </blockquote></div>对大陆人来说，去香港旅游时开个香港银行的户口比较方便，而且，paypal账户里的款项能直接撤到香港银行的户口里，手续费低过电汇，具体开户方法搜索下吧。</div>

							
							
							
							
															<div id="post_rate_div_860887"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo860887_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=13626" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=60305&amp;repquote=860887&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 860887)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_7"></div>				</div>
			</td>
		</tr>
		</table>
		</div>
</form>





<div class="pages_btns">
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=60305&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=60305&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
				<span class="postbtn" id="newspecialtmp" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=60305&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

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

	<form method="post" id="postform" action="post.php?action=reply&amp;fid=26&amp;tid=60305&amp;extra=&amp;replysubmit=yes" onSubmit="return validate(this)">
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
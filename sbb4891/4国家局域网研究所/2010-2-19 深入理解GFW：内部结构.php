<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<title>深入理解GFW：内部结构 - 国家局域网研究所 -  1984bbs.com </title>
<meta name="keywords" content="" />
<meta name="MSSmartTagsPreventParsing" content="True" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<link rel="archives" title="1984bbs.com" href="https://1984bbs.com/archiver/" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_viewthread.css" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_common.css" />
<script type="text/javascript">
	var discuz_uid = 13019;var IMGDIR = 'images/default';var attackevasive = '0';var gid = 0;var STYLEID = '1';
	gid = parseInt('3');var fid = parseInt('26');var tid = parseInt('38029');
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
			<p><a href="index.php" id="forumlist" onmouseover="showMenu(this.id)" class="dropmenu">1984bbs.com</a> &raquo; <a href="forumdisplay.php?fid=26">国家局域网研究所</a> &raquo; 深入理解GFW：内部结构</p>
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
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=38029&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=38029&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
				<span class="postbtn" id="newspecial" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=38029&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

	<ul class="popupmenu_popup newspecialmenu" id="newspecial_menu" style="display: none">
		<li><a href="post.php?action=newthread&amp;fid=26&amp;extra=">发新话题</a></li>
		<li class="poll"><a href="post.php?action=newthread&amp;fid=26&amp;extra=&amp;special=1">发布投票</a></li>													</ul>

<form method="post" name="modactions">
	<input type="hidden" name="formhash" value="823c9fa2" />
	<div class="mainbox viewthread">
		<span class="headactions">
					<a href="my.php?item=favorites&amp;tid=38029" id="ajax_favorite" onclick="ajaxmenu(event, this.id, 3000, 0)">收藏</a>
			<a href="my.php?item=subscriptions&amp;subadd=38029" id="ajax_subscription" onclick="ajaxmenu(event, this.id, 3000, null, 0)">订阅</a>
			<a href="misc.php?action=emailfriend&amp;tid=38029" id="emailfriend" onclick="ajaxmenu(event, this.id, 9000000, null, 0)">推荐</a>
				<a href="viewthread.php?action=printable&amp;tid=38029" target="_blank" class="notabs">打印</a>
				</span>
		<h1>深入理解GFW：内部结构		</h1>
							<table id="pid484804" summary="pid484804" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7" target="_blank" id="userinfo484804" class="dropmenu" onmouseover="showMenu(this.id)">张书记</a></cite>
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
						<strong title="复制话题链接到剪贴板" id="postnum484804" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=38029&page=1#pid484804', '话题链接已经复制到剪贴板')">1楼</strong>
													<em onclick="$('postmessage_484804').className='t_bigfont'">大</em>							<em onclick="$('postmessage_484804').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_484804').className='t_smallfont'">小</em>												发表于 2010-2-19 13:13&nbsp;																					<a href="viewthread.php?tid=38029&amp;page=1&amp;authorid=7" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_0"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_0"></div><div id="ad_thread4_0"></div>
													<h2>深入理解GFW：内部结构</h2>
						
						
																											<div id="postmessage_484804" class="t_msgfont"><a href="http://gfwrev.blogspot.com/2010/02/gfw.html" target="_blank">http://gfwrev.blogspot.com/2010/02/gfw.html</a>&nbsp;&nbsp;<br />
<br />
之前我们对GFW进行了大量的黑箱测试，尽管大多数实验数据都得到了良好的解释，但是还是有些数据或者体现出的规律性（不规律性）没有得到合理的解释。比如TCP连接的各项超时时间，比如Google的443端口被无状态阻断时，继发状态的持续跟源IP相关的问题。比如一般TCP连接的继发阻断时，窗口尺寸和TTL的连续变化特性。这些问题已经超出纯协议的范畴，需要对GFW的内部结构进行进一步了解才能明白其原因。所以在这一章介绍GFW的实现和内部结构。<br />
<br />
总的来说，GFW是一个建立在高性能计算集群上规模庞大的分布式入侵检测系统。其分布式架构带来了很高的可伸缩性，对骨干网一点上庞大流量的处理问题被成功转换成购买超级计算机堆砌处理能力的问题。它目前有能力对中国大陆全部国际网络流量进行复杂和深度的检测，而且处理能力“还有很大潜力” （2009年8月）<br />
<br />
线路接入<br />
典型意义下GFW线路拓扑<br />
svg<br />
<br />
对于GFW在网络上的位置，有很模糊的认知：“在三个国际出口作旁路监听”。然而还希望对在出国之前最后一跳之前发生了什么有详细了解。<br />
<br />
GFW希望对不同线路的链路异构性进行耦合，并研究了快速以太网、低速WAN、光纤、专用信号多种类型链路的耦合技术。[03b]而根据《国际通信出入口局管理办法》，几大ISP有自己的国际出入口局，最后在公用国际光缆处汇合，比如在海缆登陆站之前汇合。据已有的资料，安管中心（CNNISC）有独立的交换中心，而且有报道说各个ISP是分别接入其交换中心。这样几个材料就可以形成一致的解释：为了适应不同ISP不同的链路规格，GFW自己的交换中心需要对不同的链路进行整合，不同的ISP分别引出旁路接入GFW。而没有接入GFW的线路则被称为“防外线”[来源不可靠]，不受GFW影响。接入的线路类型应该主要是光纤线路，因此通常称此接入方式为分光。这就是“旁路分光”。另外实验发现，GFW的接入地点并不一定紧靠最后一跳，因此图中以虚线表示。需要注意GFW的响应流量重新接回网络的地点难以确认，这里只是假设是与接出的地点相同。<br />
负载平衡<br />
<br />
面对多条骨干监测线路接入产生的巨大不均匀流量，不能直接接到处理集群，而是要先进行汇聚然后再负载均衡分流成均匀的小流量，分别送给处理集群并行处理。首先需要将网络设备通信接口（Pos、ATM、E1等）转换成节点可用的主机通信接口（FE、GE等）。处理负载均衡的算法经过仔细考虑，希望实现：流量均匀分布、对于有连接协议保持连接约束、算法简单。连接约束是指：一对地址端口对之间的一个连接全部通信都要保证调度到同一个节点。[03b][03a][05a]<br />
<br />
GFW关于负载平衡的文章中主要提出两种算法。一种是轮转调度，对于TCP，当SYN到达时，以最近分配的节点号取模再加1，并将连接存入hash 表，当后继流量到达时就能查询hash表获得目标节点号。[03a]另一种是基于连接参数的散列，对于N个输出端口调度输出端口号是H(源地址, 目标地址, 源端口, 目标端口) mod N[03b]，这个H函数可以是xor[05a]。<br />
<br />
而之前的某个实验中我们碰到一种特殊的模式，负载平衡在解释其现象中起到了重要作用，下面专门分出一节详细说明。<br />
一个关于窗口值的实验<br />
<br />
实验步骤：发送含有关键词的特制包通过GFW，并接收GFW返回的阻断响应包。因为触发阻断之后，同地址对和同目标端口的连接都会受到继发阻断，为了消除这种干扰，一般采取顺序改变目标端口的扫描式方法。通过前期一些实验，我们已经发现和确认某类（二型）阻断响应包中的TTL和id都跟窗口大小有线性关系，我们认为窗口是基本量（二型窗口为5042时id发生了溢出，只有在id根据窗口算出时才会发生此种情况）。<br />
<br />
然而在顺序扫描中有一种特殊的模式无法用现有证据解释。进一步的实验步骤是：在源、目标地址不变的情况下，顺序扫描目标端口，记录返回的阻断响应包的窗口。数据如下图，横轴是时间（秒），纵轴是端口号，每个点代表一次阻断触发事件中观测者收到的阻断包的窗口值。<br />
实验图像<br />
<br />
可以明显看出一种线性增加的趋势。图像取局部放大看：<br />
实验图像局部<br />
<br />
可以看出，在同一时间有13根较连续的线。这样产生了几个问题：为什么有独立可区分的不同的线？这些线表示了什么？为什么有13根？为什么每根线是递增的？<br />
<br />
&nbsp; &nbsp; * 为什么有独立可区分的不同的线？现象具有明显的可以继续划分的子模式，而不是一个整体的随机量，并且每个子模式都有良好的连续增加的性质。因此可以推测产生此现象的内在机制不是一块铁板，而是多个独立的实体。进一步的实验事实是，如果顺序扫描端口每次增加13，那么只会产生一条较连续的线而排除其他的线。这直接证明了模13同余端口产生结果的不可分性、实体性，以及同余类间的独立性。<br />
&nbsp; &nbsp; * 这些线表示了什么？我们猜想，这13根线就表征了背后有13个独立实体分别根据某个内在的状态产生阻断响应，窗口值就是其内在状态的直接表现。<br />
&nbsp; &nbsp; * 为什么有13个？而不是1个2个？这个时候，负载平衡就是对此事实的一种解释良好的模型。如果GFW有13个节点在线，由于希望将流量平均分配到每个节点，那么根据前面论文所述，便采用模的方式，在源、目标地址不变时，根据目标端口模13分配流量，目标端口模13同余的包会进入同一个节点。实际上更早的时候的一次实验是发现有15根线，同理可以猜测有15个节点在线。<br />
&nbsp; &nbsp; * 为什么每根线是递增的？实验中发现，每次阻断GFW会分别向连接双方发送窗口值依次增加的两组阻断包，这样对于每方来说，每次阻断就会使窗口值增加2。每根线会递增正是说明节点在不断产生阻断包增加窗口值，一部分是实验观察者的观测行为触发的，另一部分则是普通网络流量造成的。如果对数据做差分并扣除观测造成的影响，甚至还可以对每节点产生阻断的速率有所估计。<br />
&nbsp; &nbsp; * 但是为什么要让窗口递增？这背后的动机难以找到很合理的解释，可能这个窗口值有计数器的作用，也可能是为了在ip.id上对不同节点产生的包进行区分。事实上，一型的窗口值就是几乎随机但ip.id固定，窗口递增并非是必须的。<br />
<br />
然而进一步的实验发现，如果目标端口、源地址不变，而目标地址顺序变化，图像就显得比较紊乱，找不出规律。虽然如此，仍然在局部可以识别出同时存在 13根线的情况，进一步证实“13个节点在线”的猜测。这个实验的意义在于，通过对现象的分解约化，分离出GFW内部的某种独立实体结构，对论文中主张的负载平衡算法有进一步的实践证实，对GFW的内部结构得到进一步的认识。<li><br />
数据处理<br />
<br />
当数据流通过当数据总线到达终端节点之后，需要将其从物理层提取出来供上层进一步分析，这个部分称为报文捕获。普通的做法，先网卡中断一次通知内核来取，然后控制DMA传到内核空间，然后用户用read()，让内核copy_to_user()将 sk_buff的数据复制到用户空间，但是这样复制一次就带来了无谓开销。因此GFW设计环状队列缓存，以半轮询半中断机制减少频繁中断的系统调用开销，用mmap实现zero-copy，把数据直接从网卡DMA到用户空间。这样性能提高很多（耦合也提高很多）。[**]<br />
<br />
链路层数据到怀里了，接下来要将数据上交给TCP/IP栈。论文中多次提到libnids（这个库我们也是第一眼就瞟到了，后来发现对诊断没什么用），将其作为基准，（甚至可能符合国情地）以其为蓝本改进，开发出了一种多线程的TCP/IP（自动机）。后面又在考虑对其进一步做自动机分解优化。后来又再次提出一种两级连接状态记录表，一级轻量级环状hash表可以缓解大量无效连接和SYN Flood的情况，二级表才真正存储连接的信息。实验结果与此相符：发送SYN之后的超时时间要比发送第一个ACK之后的超时时间短得多。文献中还提到 libnids的half_stream，从实际的情况上看，GFW的TCP栈的确具有鲜明的半连接特性，也就是说：一个方向的TCP栈只检测客户端到服务端的数据，或者反之。这样一个直接的后果就是，即使服务端根本不在线没响应，客户端照样可以假装三次握手然后触发一堆RST。往好的方向看，也许是因为多线程TCP栈还原全连接时不想处理数据共享控制的问题。总而言之，GFW有一种非常轻量级的TCP/IP栈，刚好能够处理大多数遵守RFC的连接。如果用户稍微精明一点就能穿过去，GFW要么坐视不管，要么重写TCP栈。[***]<br />
<br />
TCP/IP栈将数据分片重组，流重组之后交给应用层解析。应用层由很多插件模块组成，耦合松，部署易。其应用层插件包括“HTTP、 TELNET、FTP、SMTP、POP3、FREENET、IMAP、FREEGATE、TRIBOY”。[05a]有意思的是，这是首次官方确认GFW与Freegate、Freenet、Triboy的敌对关系。应用层的协议大家都很熟悉不用多解释，不过应用层问题比传输层更多了。好几个模块都有一些小毛病，比如某类HTTP模块只认得CRLF作为EOL，换作LF便呆了。再比如某类DNS模块，发的DNS干扰包，十有五六都校验和错误，查询AAAA也返回A，还不如关掉。多数模块都是得过且过，刚好可以工作，一点都不完善。这里列出的、发现的问题按照软件设计一般规律也只是冰山一角。由此推断，GFW的设计哲学是：better is worse。<br />
<br />
不过在可以生产论文的话题上，GFW绝不含糊，就是模式匹配。应用层模块把应用层协议解析好了，然后就要看是不是哪里有关键词，字符串匹配。搞了一堆论文出来，改进AC算法和BM算法，就差汇编的干活了，得出某种基于有限状态自动机的多模式匹配算法，特别适合GFW这种预定义关键词的需求。总之复杂度是线性的，攻击匹配算法消耗CPU什么的就不要想了。<br />
响应机制<br />
<br />
如果匹配到一个关键词了，要积极响应阻断之。响应的手段其他地方已经说得太多，手懒，特此剽窃一段，欢迎举报学术不正之风：<br />
<br />
&nbsp; &nbsp; 响应机制的发展已经经历IP包过滤（静态IP包过滤、动态IP包过滤）、连接欺骗（传输层连接欺骗、应用层连接欺骗）两个阶段，并且形成了针对不同的应用多种方式共存的现状。<br />
<br />
&nbsp; &nbsp; 静态IP包过滤是IDS通过和被保护网络与外部网络之间的连通边的端点网络层设备（路由器、三层交换机等）进行联动，在其上设置访问控制列表（ACL）或静态路由表来实现对指定IP地址的过滤。由于需要过滤的IP地址数量很大，大多数的网络层设备上对ACL大小和性能的支持不能满足要求，因此，实际工作中大多采用静态路由的方式。使用该种方式，信息入侵检测系统只能通过专用客户端程序静态写入的方式进行访问控制，粒度大（IP地址级），响应时间慢，容量较小，但是可以静态写入路由设备的配置文件中，是非易失的。<br />
<br />
&nbsp; &nbsp; 动态IP包过滤是指入侵检测系统采用动态路由协议（BGP，OSPF等）和关键路由设备进行路由扩散，将需要过滤的IP地址扩散到路由设备中的路由表中，特点是响应时间快、容量大，但是只能动态地写入路由设备内存（RAM）中的路由表中，是易失的，同样粒度大。<br />
<br />
&nbsp; &nbsp; 连接欺骗指信息入侵检测系统在敏感连接传输过程中伪造连接结束信令（RST，FIN）发送给连接的源和目的地址，以中断该连接。特点是实时性强、粒度小（连接级），可以针对某一次敏感连接进行阻断。缺点是对分析系统工作状态依赖较强，需要向业务网上发送数据包，易受DoS攻击。<br />
<br />
&nbsp; &nbsp; 通过和连接级防火墙设备进行联动，可以针对连接五元组（传输协议类型、源地址、源端口、目的地址、目的端口）对数据流进行过滤。可以针对指定的任意五元以内的组合条件进行过滤，实时性强、粒度小。<br />
<br />
后来又加上了DNS劫持/污染，不过这个手动设置的机制已经不能算一个入侵检测系统的响应了。<br />
日志记录<br />
<br />
GFW有日志。这意味着什么？这就意味着当你芬兰国的时候，你的所作所为都记录在案。不光是你一个人，其他所有人都经常芬兰国。但据统计 87.53%的人（361之316）都是无意之中芬兰国，从统计理论上看，记录在案的无效信息过多会造成信息难以利用。因此GFW后期一直在做“数据融合、聚类、分类的研究”，鸭子硬上弓，各种神经网络、概率模型、人工智能的论文整了一大堆，效果如何呢？<br />
<br />
GFW的日志应该会记录这样一些事件信息：起始时间、结束时间、源地址、目标地址、目标端口、服务类型、敏感类型。[null]信息难以利用不等于不能利用，如果日志被翻出来了而且用户没有用代理，那么根据常识，从IP地址对应到人也只是时间问题。这就是说，GFW即使不能阻断，最差也是一个巨型监听设备。<br />
规模估计<br />
<br />
问题：<br />
&nbsp; &nbsp; GFW的软硬件配置？<br />
事实：<br />
<br />
&nbsp; &nbsp; “虚拟计算环境实验床”是由国家计算机网络应急技术处理协调中心（CNCERT/CC）和哈尔滨工业大学（HIT）协作建设，以国家计算机网络应急技术处理协调中心遍布全国31个省份的网络基础设施及计算资源为基础，对分布自治资源进行集成和综合利用，构建起的一个开放、安全、动态、可控的大规模虚拟计算环境实验平台，研究并验证虚拟计算环境聚合与协同机理。2005年此平台配置如下：[05b]<br />
&nbsp; &nbsp; CNCERT/CC&nbsp; &nbsp; &nbsp; &nbsp; 北京&nbsp; &nbsp; &nbsp; &nbsp; 曙光4000L&nbsp; &nbsp; &nbsp; &nbsp; 128节点&nbsp; &nbsp; &nbsp; &nbsp; 2*Xeon 2.4G&nbsp; &nbsp; &nbsp; &nbsp; RAM2G<br />
&nbsp; &nbsp; HIT&nbsp; &nbsp; &nbsp; &nbsp; 哈尔滨&nbsp; &nbsp; &nbsp; &nbsp; 曙光服务器&nbsp; &nbsp; &nbsp; &nbsp; 32节点&nbsp; &nbsp; &nbsp; &nbsp; 2*Xeon 2.4G&nbsp; &nbsp; &nbsp; &nbsp; RAM2G<br />
&nbsp; &nbsp; CNCERT/CC&nbsp; &nbsp; &nbsp; &nbsp; 上海&nbsp; &nbsp; &nbsp; &nbsp; Beowulf集群&nbsp; &nbsp; &nbsp; &nbsp; 64节点&nbsp; &nbsp; &nbsp; &nbsp; 2*AMD Athlon 1.5G&nbsp; &nbsp; &nbsp; &nbsp; RAM2G<br />
结论：<br />
&nbsp; &nbsp; GFW（北京）使用曙光4000L机群，操作系统Red Hat系列（从7.2[03a]到7.3[05a]到AS 4），周边软件见曙光4000L一般配置；GFW实验室（哈工大）使用曙光服务器[05b]，Red Hat系列；GFW（上海）使用Beowulf集群（攒的？）。<br />
<br />
问题：<br />
&nbsp; &nbsp; GFW与曙光是什么关系？<br />
事实：<br />
<br />
&nbsp; &nbsp; 换句话说，是先有了用户的应用需求（蛋），才有了曙光4000L的研制（鸡）。这其实不难想像，一套价值几千万元的系统，如果纯是为了填补科学空白，将会延长产品市场化的时间。曙光4000L充分体现了中科院计算所在科研成果市场化方面的运作能力。……而曙光4000L这套系统就是针对国家信息化的实际应用而设计的。<br />
<br />
&nbsp; &nbsp; 曙光4000L的研制……曙光公司从事了工程任务和产品化工作，国防科技大学从事了机群数据库中间件的开发工作，哈尔滨工业大学开发了应用软件。<br />
<br />
&nbsp; &nbsp; 哈尔滨工业大学（威海）网络与信息安全技术研究中心日前成立，……方滨兴……揭牌。……曙光……向研究中心赠送了一套价值40万元的刀片服务器。<br />
结论：<br />
&nbsp; &nbsp; GFW是曙光4000L的主要需求来源、研究发起者、客户、股东、共同开发者。是不是应该打一点折？（曙光公司=中科院计算所）<br />
<br />
问题：<br />
&nbsp; &nbsp; GFW计算规模有多大？<br />
事实：<br />
<br />
&nbsp; &nbsp; 2007年机群规模进一步扩大，北京增至360节点，上海增至128节点，哈尔滨增至64节点，共计552节点。机群间星型千兆互联。[null]计划节点数上千。[null]<br />
<br />
&nbsp; &nbsp; 曙光4000L……系统节点数为322节点，可扩展到640节点。根据功能的不同，曙光4000L可以分为服务节点、计算节点和数据库节点三类。每个计算节点2个2.4GHZ的Intel Xeon CPU，内存2GB。<br />
<br />
&nbsp; &nbsp; 2005年国家计算机网络与信息安全管理中心（北京）就已经建立了一套384*16节点的集群用于网络内容过滤（005工程）和短信过滤（016工程）。[来源不可靠]<br />
<br />
&nbsp; &nbsp; 64个节点、128个处理器（主频为2.8GHz）的曙光4000L……包括系统软件、管理软件、输入输出设备和存储设备，采购金额近千万。<br />
<br />
&nbsp; &nbsp; 才有了曙光4000L的研制……一套价值几千万元的系统。<br />
<br />
&nbsp; &nbsp; 国家信息安全重大项目“国家信息安全管理系统”（005工程）经费4.9亿。<br />
猜测：<br />
&nbsp; &nbsp; GFW（北京）拥有16套曙光4000L，每套384节点，其中24个服务和数据库节点，360个计算节点。每套价格约两千万到三千万，占 005工程经费的主要部分。有3套（将）用于虚拟计算环境实验床，计千余节点。13套用于骨干网络过滤。总计6144节点，12288CPU，12288GB内存，峰值计算速度48万亿次（定义不明，GFW不做浮点运算，2003年top500排名榜首地球模拟器5120 个CPU）。<br />
<br />
问题：<br />
&nbsp; &nbsp; GFW吞吐量有多大？<br />
事实：<br />
<br />
&nbsp; &nbsp; 2GHz CPU的主机Linux操作系统下可达到600Kpps以上的捕包率。通过骨干网实验，配置16个数据流总线即可以线速处理八路OC48接口网络数据。[03b]<br />
<br />
&nbsp; &nbsp; 曙光4000L单结点的接入能力为每秒65万数据包，整个系统能够满足32Gbp的实时数据流的并发接入要求。<br />
猜测：<br />
&nbsp; &nbsp; 512Gbps（北京）。<br />
<br />
结论<br />
<br />
噫吁嚱！危乎高哉！……<br />
注释<br />
<br />
&nbsp; &nbsp; * null引用有特殊含义。<br />
&nbsp; &nbsp; * <li> 因为性能要求，负载平衡的完整算法必然很简单，不过我们一下子也没有猜出来。由于这个算法是易变的，即使猜出来公布在这里就立刻失效了，因此也没有在这个方向再费精力。<br />
&nbsp; &nbsp; * [**] 顺便指出论文中存在的一种硬伤。论文中反复把libpcap当反面教材作为性能低下的代表，称其是“传统TCP/IP栈之上的用户层函数库”“基于传统 TCP/IP栈的libpcap”。可是人家libpcap从2001年1月的0.6版本就开始用2.2以上版本内核提供的packet(7) socket，这个跟TCP/IP一点关系都没有。怪罪的对象错了，要怪的是packet(7)而不是libpcap。后来2004年PF_RING出来，设计很相似，libpcap用上一样nb。不过这个时候GFW也已经研发完了。<br />
&nbsp; &nbsp; * [***] 如果将其视为bug而不是feature的话，漏洞实在太多，打一两个补丁不解决问题，非重做不可。另外IP碎片和TCP流重组没有做特别研究，即使有漏洞实用性也不会很高。<br />
&nbsp; &nbsp; * [03a] 杨武, 方滨兴, 云晓春, 张宏莉. 基于骨干网的并行集群入侵检测系统. 哈尔滨工业大学学报. 2003-5-15.<br />
&nbsp; &nbsp; * [03b] 陈训逊, 方滨兴, 李蕾. 高速网络环境下入侵检测系统结构研究. 计算机研究与发展. 2003-7-15.<br />
&nbsp; &nbsp; * [05a] 张兆心, 方滨兴, 胡铭曾. 支持IDS的高速网络信息获取体系结构. 北京邮电大学学报. 2005-2-25.<br />
&nbsp; &nbsp; * [05b] 张伟哲, 方滨兴, 胡铭曾, 刘欣然, 张宏莉, 高雷. 计算网格环境下基于多址协同的作业级任务调度算法. 中国科学 E辑：信息科学. 2005-12-25.<br />
&nbsp; &nbsp; * 猜测之数字准确性无担保，请自行把握。</div>

							
							
							
							
															<div id="post_rate_div_484804"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo484804_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=7" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=38029&amp;repquote=484804&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 484804)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_0"></div>				</div>
			</td>
		</tr>
		</table>
		</div><div class="ad_column" id="ad_interthread"><a href="/viewthread.php?tid=54699" target="_blank" style="color:red;">1984bbs是一个非营利项目，它需要您的捐助！</font></a>		</div>
	<div class="mainbox viewthread">
			<table id="pid485146" summary="pid485146" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=3696" target="_blank" id="userinfo485146" class="dropmenu" onmouseover="showMenu(this.id)">frick</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">恐怖的共产主义宅男 @frickjifang</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=3696">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=3696&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_1" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum485146" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=38029&page=1#pid485146', '话题链接已经复制到剪贴板')">2楼</strong>
													<em onclick="$('postmessage_485146').className='t_bigfont'">大</em>							<em onclick="$('postmessage_485146').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_485146').className='t_smallfont'">小</em>												发表于 2010-2-19 20:11&nbsp;																					<a href="viewthread.php?tid=38029&amp;page=1&amp;authorid=3696" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_1"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_1"></div><div id="ad_thread4_1"></div>
						
						
																											<div id="postmessage_485146" class="t_msgfont">技术派，看不懂。感叹一下，果然隔行如隔山。</div>

							
							
							
							
															<div id="post_rate_div_485146"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo485146_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=3696" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=38029&amp;repquote=485146&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 485146)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_1"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid485158" summary="pid485158" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=7277" target="_blank" id="userinfo485158" class="dropmenu" onmouseover="showMenu(this.id)">一向低调</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">我是爱党的良民</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=7277">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=7277&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_2" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum485158" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=38029&page=1#pid485158', '话题链接已经复制到剪贴板')">3楼</strong>
													<em onclick="$('postmessage_485158').className='t_bigfont'">大</em>							<em onclick="$('postmessage_485158').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_485158').className='t_smallfont'">小</em>												发表于 2010-2-19 20:33&nbsp;																					<a href="viewthread.php?tid=38029&amp;page=1&amp;authorid=7277" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_2"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_2"></div><div id="ad_thread4_2"></div>
						
						
																											<div id="postmessage_485158" class="t_msgfont">技术贴，不明真相的飘过~~~~</div>

							
							
							
							
															<div id="post_rate_div_485158"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo485158_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=7277" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=38029&amp;repquote=485158&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 485158)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_2"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid485207" summary="pid485207" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=11814" target="_blank" id="userinfo485207" class="dropmenu" onmouseover="showMenu(this.id)">河殇</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">抱歉，根据相关法律法规和政策，本人目前只能低调，不能狂妄。推特@lxkrock </p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=11814">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=11814&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_3" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum485207" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=38029&page=1#pid485207', '话题链接已经复制到剪贴板')">4楼</strong>
													<em onclick="$('postmessage_485207').className='t_bigfont'">大</em>							<em onclick="$('postmessage_485207').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_485207').className='t_smallfont'">小</em>												发表于 2010-2-19 21:22&nbsp;																					<a href="viewthread.php?tid=38029&amp;page=1&amp;authorid=11814" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_3"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_3"></div><div id="ad_thread4_3"></div>
						
						
																											<div id="postmessage_485207" class="t_msgfont">真复杂啊。。。。。<br />
看不懂</div>

							
							
							
							
															<div id="post_rate_div_485207"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo485207_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=11814" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=38029&amp;repquote=485207&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 485207)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_3"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid485220" summary="pid485220" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6873" target="_blank" id="userinfo485220" class="dropmenu" onmouseover="showMenu(this.id)">萧易寒</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6873">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6873&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_4" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum485220" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=38029&page=1#pid485220', '话题链接已经复制到剪贴板')">5楼</strong>
													<em onclick="$('postmessage_485220').className='t_bigfont'">大</em>							<em onclick="$('postmessage_485220').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_485220').className='t_smallfont'">小</em>												发表于 2010-2-19 21:32&nbsp;																					<a href="viewthread.php?tid=38029&amp;page=1&amp;authorid=6873" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_4"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_4"></div><div id="ad_thread4_4"></div>
						
						
																											<div id="postmessage_485220" class="t_msgfont">楼主写的已经不是技术文章了，技术文章不是这样的<br />
有点神乎其神的味道<br />
<br />
[<i> 本帖最后由 萧易寒 于 2010-2-19 21:33 编辑 </i>]</div>

							
							
							
							
															<div id="post_rate_div_485220"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo485220_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=6873" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=38029&amp;repquote=485220&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 485220)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_4"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid486104" summary="pid486104" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8351" target="_blank" id="userinfo486104" class="dropmenu" onmouseover="showMenu(this.id)">isonomy</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8351">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8351&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_5" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum486104" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=38029&page=1#pid486104', '话题链接已经复制到剪贴板')">6楼</strong>
													<em onclick="$('postmessage_486104').className='t_bigfont'">大</em>							<em onclick="$('postmessage_486104').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_486104').className='t_smallfont'">小</em>												发表于 2010-2-20 18:57&nbsp;																					<a href="viewthread.php?tid=38029&amp;page=1&amp;authorid=8351" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_5"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_5"></div><div id="ad_thread4_5"></div>
						
						
																											<div id="postmessage_486104" class="t_msgfont">看过，希望对GFW的研究越来越多</div>

							
							
							
							
															<div id="post_rate_div_486104"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo486104_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=8351" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=38029&amp;repquote=486104&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 486104)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_5"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid490156" summary="pid490156" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=11788" target="_blank" id="userinfo490156" class="dropmenu" onmouseover="showMenu(this.id)">纠结的不是猫</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=11788">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=11788&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_6" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum490156" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=38029&page=1#pid490156', '话题链接已经复制到剪贴板')">7楼</strong>
													<em onclick="$('postmessage_490156').className='t_bigfont'">大</em>							<em onclick="$('postmessage_490156').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_490156').className='t_smallfont'">小</em>												发表于 2010-2-23 19:46&nbsp;																					<a href="viewthread.php?tid=38029&amp;page=1&amp;authorid=11788" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_6"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_6"></div><div id="ad_thread4_6"></div>
						
						
																											<div id="postmessage_490156" class="t_msgfont">- -太难懂了…几乎是跳着看的…</div>

							
							
							
							
															<div id="post_rate_div_490156"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo490156_menu" style="display: none;">
										<div class="imicons">
													<a target='_blank' href='http://settings.messenger.live.com/Conversation/IMMe.aspx?invitee=hzjsama@msn.cn&mkt=zh-cn'><img style='border-style: none;' src='http://messenger.services.live.com/users/hzjsama@msn.cn/presenceimage?mkt=zh-cn' width='16' height='16' /></a>
												<a href="http://wpa.qq.com/msgrd?V=1&amp;Uin=532500986&amp;Site=1984bbs.com&amp;Menu=yes" target="_blank"><img src="images/default/qq.gif" alt="QQ" /></a>																							</div>
										<dl></dl>
											<p><a href="http://www.douban.com/people/1499714/" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=11788" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=38029&amp;repquote=490156&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 490156)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_6"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid501090" summary="pid501090" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>																		柳叶眉</cite>
							该用户已被删除
															</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum501090" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=38029&page=1#pid501090', '话题链接已经复制到剪贴板')">8楼</strong>
													<em onclick="$('postmessage_501090').className='t_bigfont'">大</em>							<em onclick="$('postmessage_501090').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_501090').className='t_smallfont'">小</em>												发表于 2010-3-3 22:15&nbsp;																					<a href="viewthread.php?tid=38029&amp;page=1&amp;authorid=9557" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_7"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_7"></div><div id="ad_thread4_7"></div>
						
						
																											<div id="postmessage_501090" class="t_msgfont">完全不知所云。书记好神秘啊。</div>

							
							
							
							
															<div id="post_rate_div_501090"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=38029&amp;repquote=501090&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 501090)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_7"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid507435" summary="pid507435" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=11245" target="_blank" id="userinfo507435" class="dropmenu" onmouseover="showMenu(this.id)">shysun</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">wanderer @sunshier</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=11245">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=11245&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_8" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum507435" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=38029&page=1#pid507435', '话题链接已经复制到剪贴板')">9楼</strong>
													<em onclick="$('postmessage_507435').className='t_bigfont'">大</em>							<em onclick="$('postmessage_507435').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_507435').className='t_smallfont'">小</em>												发表于 2010-3-8 08:26&nbsp;																					<a href="viewthread.php?tid=38029&amp;page=1&amp;authorid=11245" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_8"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_8"></div><div id="ad_thread4_8"></div>
						
						
																											<div id="postmessage_507435" class="t_msgfont">只知道GFW规模和花销巨大，其他技术的不懂～</div>

							
							
							
							
															<div id="post_rate_div_507435"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo507435_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=11245" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=38029&amp;repquote=507435&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 507435)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_8"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid507530" summary="pid507530" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 <a name="lastpost"></a>					<cite>											<a href="space.php?uid=3195" target="_blank" id="userinfo507530" class="dropmenu" onmouseover="showMenu(this.id)">dlb2825</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=3195">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=3195&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_9" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum507530" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=38029&page=1#pid507530', '话题链接已经复制到剪贴板')">10楼</strong>
													<em onclick="$('postmessage_507530').className='t_bigfont'">大</em>							<em onclick="$('postmessage_507530').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_507530').className='t_smallfont'">小</em>												发表于 2010-3-8 09:53&nbsp;																					<a href="viewthread.php?tid=38029&amp;page=1&amp;authorid=3195" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_9"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_9"></div><div id="ad_thread4_9"></div>
						
						
																											<div id="postmessage_507530" class="t_msgfont">mark!!!!!!!!!!!</div>

							
							
							
							
															<div id="post_rate_div_507530"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo507530_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=3195" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=26&amp;tid=38029&amp;repquote=507530&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 507530)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_9"></div>				</div>
			</td>
		</tr>
		</table>
		</div>
</form>





<div class="pages_btns">
	<div class="threadflow"><a href="redirect.php?fid=26&amp;tid=38029&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=26&amp;tid=38029&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
				<span class="postbtn" id="newspecialtmp" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=26&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=26&amp;tid=38029&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

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

	<form method="post" id="postform" action="post.php?action=reply&amp;fid=26&amp;tid=38029&amp;extra=&amp;replysubmit=yes" onSubmit="return validate(this)">
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
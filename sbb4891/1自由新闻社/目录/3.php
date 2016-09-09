<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<title>自由新闻社 -  1984bbs.com </title>
<meta name="keywords" content="自由新闻社" />
<meta name="MSSmartTagsPreventParsing" content="True" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<link rel="archives" title="1984bbs.com" href="https://1984bbs.com/archiver/" />
<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_common.css" />
<script type="text/javascript">
	var discuz_uid = 13019;var IMGDIR = 'images/default';var attackevasive = '0';var gid = 0;var STYLEID = '1';
	gid = parseInt('3');var fid = parseInt('2');var tid = parseInt('0');
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
									<li><a href="search.php?srchfid=2">搜索</a></li>									
				<li><a href="memcp.php?action=profile">个人资料</a></li>				<li><a href="invite.php">邀请</a></li>																<!--				<li><a href="faq.php">关于我们</a></li> -->
			</ul>
		</div>

<div id="foruminfo">
	<div id="headsearch">
	
				<p>
				通过<a href="viewthread.php?tid=54699" style="color:red;">直接捐助</a>或在<a href="http://www.amazon.cn/?source=freetalkgroup" target=_blank style="color:red;">卓越亚马逊</a>购物赞助1984bbs

					</p>
	</div>
	<div id="nav">
		<div class="userinfolist">
			<p><a id="forumlist" href="index.php" class="dropmenu" onmouseover="showMenu(this.id)">1984bbs.com</a> &raquo; 自由新闻社</p>
			<!--- <p>组长: *空缺中*</p> --->
		</div>
	</div>
</div>

	<div class="popupmenu_popup" id="forumlist_menu" style="display: none">
		<dl><dt><a href="index.php?gid=3">沙龙</a></dt><dd><ul><li class="current"><a href="forumdisplay.php?fid=2">自由新闻社</a></li><li><a href="forumdisplay.php?fid=37">雅典学院</a></li><li><a href="forumdisplay.php?fid=21">开放社会资料室</a></li><li><a href="forumdisplay.php?fid=26">国家局域网研究所</a></li><li><a href="forumdisplay.php?fid=35">罗马假日公寓</a></li><li><a href="forumdisplay.php?fid=40">Live!大讲堂</a></li></ul></dd></dl><dl><dt><a href="index.php?gid=11">站务</a></dt><dd><ul><li><a href="forumdisplay.php?fid=9">多功能小黑屋</a></li></ul></dd></dl>	</div>
<script type="text/javascript">
var maxpage = 1;
if(maxpage > 1) {
	document.onkeyup = function(e){
		e = e ? e : window.event;
		var tagname = is_ie ? e.srcElement.tagName : e.target.tagName;
		if(tagname == 'INPUT' || tagname == 'TEXTAREA') return;
		actualCode = e.keyCode ? e.keyCode : e.charCode;
						if(actualCode == 37) {
			window.location = 'forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&page=2';
		}
			}
}
</script>



<div class="ad_text" id="ad_text"><table summary="Text Ad" cellpadding="0" cellspacing="1"><tr><td width="100%"><b>发布新话题与讨论建议及审查说明</b><br>
欢迎发布有讨论和阅读价值的话题；不欢迎嘲弄宗教、种族、地缘、性取向等话题。<br> 
推崇布拉格公民论坛《对话守则》：对话的目的是寻求真理，不是为了斗争；不做人身攻击；保持主题；辩论时要用证据；要分清对话与只准自己讲话的区别；尽量理解对方。<br>
遵循《世界人权宣言》第十九条不对用户已发表言论进行删除处理；用户有权限删除本人已发表言论；编辑会合并重复话题。</td></tr>
</table></div>
<div class="pages_btns" style="width:79%;float:left">
<div class="pages"><em>&nbsp;22278&nbsp;</em><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=2" class="prev">&lsaquo;&lsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=1">1</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=2">2</a><strong>3</strong><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=4">4</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=5">5</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=6">6</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=7">7</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=8">8</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=9">9</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=10">10</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=4" class="next">&rsaquo;&rsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=349" class="last">... 349</a><kbd><input type="text" name="custompage" size="3" onkeydown="if(event.keyCode==13) {window.location='forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page='+this.value; return false;}" /></kbd></div></div>

<div style="float:left;border:1px solid #CCC; border-bottom:none;;width:218px; background: url(/imgs/1984radio.jpg) 200px 2px no-repeat;padding:5px 0 5px 12px;margin:0px 0 0 13px">

<p><b><a href="/radio/index.php" target="_blank">1984FM</a></b><br /><b><a href="https://voxli.com/1984bbs" target="_blank">1984Chat</a></b>&nbsp;</p> 
</div>

<div style="clear:both;height:0px;width:100%;font-size:1px;">&nbsp;</div>

	<ul class="popupmenu_popup newspecialmenu" id="newspecial_menu" style="display: none">
		<li><a href="post.php?action=newthread&amp;fid=2&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">发新话题</a></li>		<li class="poll"><a href="post.php?action=newthread&amp;fid=2&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;special=1">发布投票</a></li>													</ul>
	<div id="infosidemain">

<div id="headfilter">

	<ul class="tabs">
		<li  class="current" ><a href="forumdisplay.php?fid=2">全部</a></li>
		<!--<li ><a href="forumdisplay.php?fid=2&amp;filter=digest">火星帖</a></li>-->
													</ul>
</div>


<div class="mainbox threadlist">
	
<ul style="padding:4px 10px; float: right;">
	<form method="get" action="forumdisplay.php">
		<input type="hidden" name="fid" value="2" />
					查看 <select name="filter">
				<option value="0" selected="selected">全部主题</option>
				<option value="86400" >1 天以来主题</option>
				<option value="172800" >2 天以来主题</option>
				<option value="604800" >1 周以来主题</option>
				<option value="2592000" >1 个月以来主题</option>
				<option value="7948800" >3 个月以来主题</option>
				<option value="15897600" >6 个月以来主题</option>
				<option value="31536000" >1 年以来主题</option>
			</select>
				排序方式
		<select name="orderby">
			<option value="lastpost" >回复时间</option>
			<option value="dateline" >发布时间</option>
			<option value="replies" selected="selected">回复数量</option>
			<option value="views" >浏览次数</option>
		</select>
		<select name="ascdesc">
			<option value="DESC" selected="selected">按降序排列</option>
			<option value="ASC" >按升序排列</option>
		</select>&nbsp;&nbsp;&nbsp;&nbsp;
		 <button type="submit">提交</button>
	</form>
</ul>



	<h1>
		<a href="forumdisplay.php?fid=2" class="bold">自由新闻社</a>
	</h1>
	<form method="post" name="moderate" action="topicadmin.php?action=moderate&amp;fid=2">
		<input type="hidden" name="formhash" value="823c9fa2" />
		<table summary="forum_2" id="forum_2" cellspacing="0" cellpadding="0">
			<thead class="category">
				<tr>
					<td class="folder"> </td>
					<td class="icon"> </td>
					<th>标题</th>
					<td class="author">作者</td>
					<td class="nums">回复/查看</td>
					<td class="lastpost">最后发表</td>
				</tr>
			</thead>

					<tbody id="normalthread_29501" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=29501&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_29501"><a href="viewthread.php?tid=29501&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">泰国拳王叫嚣秒杀中国高手 少林寺不接招</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=29501&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=29501&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=29501&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> <a href="viewthread.php?tid=29501&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=4">4</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8789">完颜阿骨打</a>
										</cite>
					<em>2009-11-26</em>
				</td>
				<td class="nums"><strong>162</strong> / <em>3401</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=29501&goto=lastpost#lastpost">2009-12-2 16:53</a></em>
					<cite>by <a href="space.php?username=ralphguo">ralphguo</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_51163" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=51163&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_51163"><a href="viewthread.php?tid=51163&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">高盛董事胡祖六：罢工也不能给中国农民工涨工资</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=51163&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=51163&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=51163&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> <a href="viewthread.php?tid=51163&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=4">4</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=12393">uxxy2000</a>
										</cite>
					<em>2010-6-29</em>
				</td>
				<td class="nums"><strong>161</strong> / <em>2406</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=51163&goto=lastpost#lastpost">2010-7-4 21:02</a></em>
					<cite>by <a href="space.php?username=%B2%F0%C7%A8%B0%EC">拆迁办</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_12917" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=12917&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_12917"><a href="viewthread.php?tid=12917&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">我是一名高三学生，我志愿揭露高考黑幕</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=12917&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=12917&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=12917&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> <a href="viewthread.php?tid=12917&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=4">4</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2016">火疖子</a>
										</cite>
					<em>2009-6-7</em>
				</td>
				<td class="nums"><strong>160</strong> / <em>3709</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=12917&goto=lastpost#lastpost">2009-6-10 19:55</a></em>
					<cite>by <a href="space.php?username=%B0%EB%B4%F2%C0%B1%BD%B7%BD%B4">半打辣椒酱</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_58028" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=58028&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_58028"><a href="viewthread.php?tid=58028&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">方舟子：在公共卫生问题上一定要相信卫生部</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=58028&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=58028&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=58028&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> <a href="viewthread.php?tid=58028&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=4">4</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=11478">中山首里</a>
										</cite>
					<em>2010-9-10</em>
				</td>
				<td class="nums"><strong>160</strong> / <em>2829</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=58028&goto=lastpost#lastpost">2010-9-15 15:17</a></em>
					<cite>by <a href="space.php?username=%AF%82%C9%AE">瘋僧</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_49430" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=49430&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_49430"><a href="viewthread.php?tid=49430&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传胡锦涛说“撂摊子不干”</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=49430&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=49430&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=49430&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> <a href="viewthread.php?tid=49430&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=4">4</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=12609">自由花盛开</a>
										</cite>
					<em>2010-6-13</em>
				</td>
				<td class="nums"><strong>160</strong> / <em>10192</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=49430&goto=lastpost#lastpost">2010-10-11 22:51</a></em>
					<cite>by <a href="space.php?username=byxmn">byxmn</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_27419" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=27419&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_27419"><a href="viewthread.php?tid=27419&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">京郊八大处的杨佳纪念碑</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=27419&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=27419&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=27419&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> <a href="viewthread.php?tid=27419&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=4">4</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5454">xiangbei</a>
										</cite>
					<em>2009-11-7</em>
				</td>
				<td class="nums"><strong>159</strong> / <em>3702</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=27419&goto=lastpost#lastpost">2009-11-19 03:48</a></em>
					<cite>by <a href="space.php?username=%B1%B1%BE%A9%C6%E5%C3%D4">北京棋迷</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_28358" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=28358&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_28358"><a href="viewthread.php?tid=28358&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">陶韡烁的回应：“这就是我，一个中国共产党党员的选择”</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=28358&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=28358&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=28358&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> <a href="viewthread.php?tid=28358&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=4">4</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4638">江湖席</a>
										</cite>
					<em>2009-11-18</em>
				</td>
				<td class="nums"><strong>159</strong> / <em>3661</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=28358&goto=lastpost#lastpost">2009-11-21 22:18</a></em>
					<cite>by <a href="space.php?username=chengp001">chengp001</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_45407" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=45407&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_45407"><a href="viewthread.php?tid=45407&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">毛泽东众粉丝围攻袁腾飞所在学校</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=45407&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=45407&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=45407&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> <a href="viewthread.php?tid=45407&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=4">4</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7">张书记</a>
										</cite>
					<em>2010-5-10</em>
				</td>
				<td class="nums"><strong>158</strong> / <em>4104</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=45407&goto=lastpost#lastpost">2010-5-17 22:24</a></em>
					<cite>by <a href="space.php?username=mcdull">mcdull</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_57630" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=57630&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_57630"><a href="viewthread.php?tid=57630&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">法轮大法6千人纽约法会 李洪志莅临</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=57630&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=57630&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=57630&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> <a href="viewthread.php?tid=57630&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=4">4</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=15411">ghgws</a>
										</cite>
					<em>2010-9-6</em>
				</td>
				<td class="nums"><strong>157</strong> / <em>4247</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=57630&goto=lastpost#lastpost">2010-9-12 16:31</a></em>
					<cite>by <a href="space.php?username=ipqsnsy">ipqsnsy</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_54502" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=54502&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_54502"><a href="viewthread.php?tid=54502&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">湖北省委门口维稳办领导家属被便衣误作信访对象暴打</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=54502&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=54502&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=54502&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> <a href="viewthread.php?tid=54502&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=4">4</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=13992">snail</a>
										</cite>
					<em>2010-7-18</em>
				</td>
				<td class="nums"><strong>157</strong> / <em>3566</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=54502&goto=lastpost#lastpost">2010-8-1 16:48</a></em>
					<cite>by <a href="space.php?username=%B7%E7%C0%B4%CA%E8%D6%F1">风来疏竹</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_46251" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=46251&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_46251"><a href="viewthread.php?tid=46251&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">上海世博主题曲涉嫌抄袭日本歌曲</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=46251&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=46251&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=46251&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> <a href="viewthread.php?tid=46251&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=4">4</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=10369">风餐露宿</a>
										</cite>
					<em>2010-4-14</em>
				</td>
				<td class="nums"><strong>156</strong> / <em>3721</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=46251&goto=lastpost#lastpost">2010-5-18 18:44</a></em>
					<cite>by <a href="space.php?username=vookeno">vookeno</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_22173" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=22173&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_22173"><a href="viewthread.php?tid=22173&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">抵制和平演变，九一二美国民众再上街头</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=22173&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=22173&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=22173&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> <a href="viewthread.php?tid=22173&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=4">4</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6689">dogfree</a>
										</cite>
					<em>2009-9-14</em>
				</td>
				<td class="nums"><strong>156</strong> / <em>2313</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=22173&goto=lastpost#lastpost">2009-10-5 12:54</a></em>
					<cite>by <a href="space.php?username=%B6%FE%D2%AF">二爷</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_56791" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=56791&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_56791"><a href="viewthread.php?tid=56791&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传温家宝与张培莉离婚</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=56791&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=56791&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=56791&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> <a href="viewthread.php?tid=56791&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=4">4</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4575">老大哥</a>
										</cite>
					<em>2010-1-20</em>
				</td>
				<td class="nums"><strong>155</strong> / <em>9048</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=56791&goto=lastpost#lastpost">2010-8-31 19:52</a></em>
					<cite>by <a href="space.php?username=%CD%F5%D0%A1%B3%D8">王小池</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_12623" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=12623&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_12623"><a href="viewthread.php?tid=12623&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">迎陆肆保和谐：世界第八大奇迹“国家防火墙”修缮工作正式启动</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=12623&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=12623&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=12623&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> <a href="viewthread.php?tid=12623&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=4">4</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2804">musicool</a>
										</cite>
					<em>2009-6-2</em>
				</td>
				<td class="nums"><strong>155</strong> / <em>4216</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=12623&goto=lastpost#lastpost">2009-6-4 13:41</a></em>
					<cite>by <a href="space.php?username=%BF%E2%B4%E6%F4%C2%F4%C4">库存袈裟</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_47483" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=47483&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_47483"><a href="viewthread.php?tid=47483&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">朝方判断朝韩战争即将爆发</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=47483&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=47483&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=47483&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> <a href="viewthread.php?tid=47483&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=4">4</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=11470">zcgme</a>
										</cite>
					<em>2010-5-28</em>
				</td>
				<td class="nums"><strong>154</strong> / <em>4503</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=47483&goto=lastpost#lastpost">2010-6-1 19:31</a></em>
					<cite>by <a href="space.php?username=zcgme">zcgme</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_51837" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=51837&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_51837"><a href="viewthread.php?tid=51837&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">《独唱团》全国上市 各地书店抢货</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=51837&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=51837&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=51837&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> <a href="viewthread.php?tid=51837&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=4">4</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6679">尼采</a>
										</cite>
					<em>2010-7-6</em>
				</td>
				<td class="nums"><strong>154</strong> / <em>4406</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=51837&goto=lastpost#lastpost">2010-7-11 21:34</a></em>
					<cite>by <a href="space.php?username=chuhu">chuhu</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_26269" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=26269&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_26269"><a href="viewthread.php?tid=26269&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">贾甲回国，天命开启</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=26269&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=26269&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=26269&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> <a href="viewthread.php?tid=26269&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=4">4</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1162">小龙人</a>
										</cite>
					<em>2009-10-22</em>
				</td>
				<td class="nums"><strong>153</strong> / <em>3180</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=26269&goto=lastpost#lastpost">2009-11-3 04:17</a></em>
					<cite>by <a href="space.php?username=%D1%C7%C9%AA">亚瑟</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_22547" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=22547&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_22547"><a href="viewthread.php?tid=22547&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">周永康批广东黑暗批汪洋黃华华 汪黄向中央告状</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=22547&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=22547&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=22547&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> <a href="viewthread.php?tid=22547&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=4">4</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5588">我家旺财有喜了</a>
										</cite>
					<em>2009-9-17</em>
				</td>
				<td class="nums"><strong>153</strong> / <em>4265</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=22547&goto=lastpost#lastpost">2010-9-8 20:22</a></em>
					<cite>by <a href="space.php?username=Cena">Cena</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_43397" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=43397&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_43397"><a href="viewthread.php?tid=43397&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">闽三网友诬告陷害案宣判 范燕琼两年游精佑吴华英一年</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=43397&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=43397&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=43397&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> <a href="viewthread.php?tid=43397&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=4">4</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=11112">昭文</a>
										</cite>
					<em>2010-4-15</em>
				</td>
				<td class="nums"><strong>152</strong> / <em>3030</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=43397&goto=lastpost#lastpost">2010-4-20 22:57</a></em>
					<cite>by <a href="space.php?username=%CD%F5%BE%C5%B5%B0">王九蛋</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_27056" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=27056&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_27056"><a href="viewthread.php?tid=27056&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">1800同性恋者聚香港游行呼吁外界勿歧视</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=27056&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=27056&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=27056&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> <a href="viewthread.php?tid=27056&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=4">4</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1946">qiushuihan</a>
										</cite>
					<em>2009-11-3</em>
				</td>
				<td class="nums"><strong>152</strong> / <em>1700</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=27056&goto=lastpost#lastpost">2009-11-23 09:50</a></em>
					<cite>by <a href="space.php?username=hik">hik</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_57041" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=57041&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_57041"><a href="viewthread.php?tid=57041&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">李敖之子李戡北大报到称“台湾的自由是假的”</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=57041&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=57041&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=57041&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> <a href="viewthread.php?tid=57041&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=4">4</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=852">未来他老爸</a>
										</cite>
					<em>2010-9-1</em>
				</td>
				<td class="nums"><strong>151</strong> / <em>2723</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=57041&goto=lastpost#lastpost">2010-9-8 22:18</a></em>
					<cite>by <a href="space.php?username=msdfc">msdfc</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_22515" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=22515&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_22515"><a href="viewthread.php?tid=22515&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">RFA：1984BBS是“新兴的大陆民间时事论坛”</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=22515&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=22515&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=22515&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> <a href="viewthread.php?tid=22515&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=4">4</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1258">路边社记者</a>
										</cite>
					<em>2009-9-17</em>
				</td>
				<td class="nums"><strong>150</strong> / <em>3006</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=22515&goto=lastpost#lastpost">2009-9-20 10:32</a></em>
					<cite>by <a href="space.php?username=kiki111">kiki111</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_57274" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=57274&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_57274"><a href="viewthread.php?tid=57274&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">毛新宇透露将被授予少将军衔</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=57274&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=57274&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=57274&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4570">我卖糕的</a>
										</cite>
					<em>2010-3-4</em>
				</td>
				<td class="nums"><strong>149</strong> / <em>3522</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=57274&goto=lastpost#lastpost">2010-9-3 16:01</a></em>
					<cite>by <a href="space.php?username=%CE%B4%C0%B4%CB%FB%C0%CF%B0%D6">未来他老爸</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_22065" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=22065&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_22065"><a href="viewthread.php?tid=22065&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">九月三日 大汉天威赫赫</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=22065&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=22065&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=22065&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2132">花想容</a>
										</cite>
					<em>2009-9-9</em>
				</td>
				<td class="nums"><strong>148</strong> / <em>2790</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=22065&goto=lastpost#lastpost">2009-9-14 09:27</a></em>
					<cite>by <a href="space.php?username=ak74">ak74</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_22558" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=22558&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_22558"><a href="viewthread.php?tid=22558&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">北京前门发生血案</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=22558&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=22558&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=22558&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8066">不靠谱</a>
										</cite>
					<em>2009-9-17</em>
				</td>
				<td class="nums"><strong>148</strong> / <em>5781</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=22558&goto=lastpost#lastpost">2009-9-19 20:44</a></em>
					<cite>by <a href="space.php?username=%B7%E8%BA%CD%C9%D0">疯和尚</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_31377" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=31377&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_31377"><a href="viewthread.php?tid=31377&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">CCTV采访专家：劲舞团的人设“爆乳、巨臀、蜂腰”</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=31377&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=31377&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=31377&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1310">小宸宸</a>
										</cite>
					<em>2009-12-17</em>
				</td>
				<td class="nums"><strong>148</strong> / <em>2945</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=31377&goto=lastpost#lastpost">2009-12-22 13:54</a></em>
					<cite>by <a href="space.php?username=%D4%C2%D6%AE%B0%B5%C3%E6">月之暗面</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_57506" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=57506&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_57506"><a href="viewthread.php?tid=57506&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">文化部长蔡武参观钱穆故居</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=57506&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=57506&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=57506&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=134">丁丁</a>
										</cite>
					<em>2010-9-5</em>
				</td>
				<td class="nums"><strong>147</strong> / <em>1516</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=57506&goto=lastpost#lastpost">2010-9-8 12:23</a></em>
					<cite>by <a href="space.php?username=strongwind13">strongwind13</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_31102" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=31102&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_31102"><a href="viewthread.php?tid=31102&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传，因储君上位受阻江大病</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=31102&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=31102&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=31102&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5588">我家旺财有喜了</a>
										</cite>
					<em>2009-12-13</em>
				</td>
				<td class="nums"><strong>147</strong> / <em>5864</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=31102&goto=lastpost#lastpost">2010-1-7 20:29</a></em>
					<cite>by <a href="space.php?username=weke">weke</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_15402" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=15402&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_15402"><a href="viewthread.php?tid=15402&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">各位组员如何看待艾未未的七一罢网倡议？</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=15402&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=15402&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=15402&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5867">宋石男</a>
										</cite>
					<em>2009-6-23</em>
				</td>
				<td class="nums"><strong>147</strong> / <em>2211</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=15402&goto=lastpost#lastpost">2009-7-2 15:39</a></em>
					<cite>by <a href="space.php?username=youthfilm">youthfilm</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_26722" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=26722&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_26722"><a href="viewthread.php?tid=26722&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">上海南湖暴力熊事件</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=26722&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=26722&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=26722&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1333">废种豆豉</a>
										</cite>
					<em>2009-10-25</em>
				</td>
				<td class="nums"><strong>146</strong> / <em>4703</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=26722&goto=lastpost#lastpost">2009-11-1 14:06</a></em>
					<cite>by <a href="space.php?username=%CE%F7%C3%C5%B4%B5%C5%A3">西门吹牛</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_29740" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=29740&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_29740"><a href="viewthread.php?tid=29740&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传，四省书记变化</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=29740&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=29740&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=29740&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6824">右满舵</a>
										</cite>
					<em>2009-11-24</em>
				</td>
				<td class="nums"><strong>146</strong> / <em>5060</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=29740&goto=lastpost#lastpost">2009-12-3 13:13</a></em>
					<cite>by <a href="space.php?username=%D7%F3%B0%B6%A1%FB%D3%D2%B0%B6">左岸←右岸</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_7704" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=7704&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_7704"><a href="viewthread.php?tid=7704&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">一位藏人：我们面对的不仅仅是一个政府……</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=7704&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=7704&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=7704&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1686">奧斯卡金</a>
										</cite>
					<em>2009-3-24</em>
				</td>
				<td class="nums"><strong>146</strong> / <em>1697</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=7704&goto=lastpost#lastpost">2009-3-30 22:04</a></em>
					<cite>by <a href="space.php?username=%CF%B2%D6%AE%C0%C9">喜之郎</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_53298" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=53298&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_53298"><a href="viewthread.php?tid=53298&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">中科院专家预测：中国30年后超美国</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=53298&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=53298&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=53298&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=12412">wangguoping</a>
										</cite>
					<em>2010-7-19</em>
				</td>
				<td class="nums"><strong>146</strong> / <em>1673</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=53298&goto=lastpost#lastpost">2010-9-7 19:06</a></em>
					<cite>by <a href="space.php?username=grandmoon">grandmoon</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_44959" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=44959&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_44959"><a href="viewthread.php?tid=44959&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传上级要求网评员批判袁腾飞</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=44959&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=44959&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=44959&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4415">ljb166</a>
										</cite>
					<em>2010-5-3</em>
				</td>
				<td class="nums"><strong>145</strong> / <em>5752</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=44959&goto=lastpost#lastpost">2010-5-6 14:57</a></em>
					<cite>by <a href="space.php?username=beiou">beiou</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_30188" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=30188&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_30188"><a href="viewthread.php?tid=30188&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">朝鲜军队加强戒备 准备镇压民众骚乱</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=30188&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=30188&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=30188&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4570">我卖糕的</a>
										</cite>
					<em>2009-12-4</em>
				</td>
				<td class="nums"><strong>145</strong> / <em>4064</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=30188&goto=lastpost#lastpost">2009-12-8 14:58</a></em>
					<cite>by <a href="space.php?username=waiting_it">waiting_it</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_27221" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=27221&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_27221"><a href="viewthread.php?tid=27221&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">魔兽GAME OVER！新闻出版总署vs.文化部</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=27221&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=27221&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=27221&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=144">mfs0616</a>
										</cite>
					<em>2009-10-20</em>
				</td>
				<td class="nums"><strong>144</strong> / <em>4703</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=27221&goto=lastpost#lastpost">2009-11-6 08:32</a></em>
					<cite>by <a href="space.php?username=isonomy">isonomy</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_50337" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=50337&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_50337"><a href="viewthread.php?tid=50337&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">导演鄢颇被砍伤  脚筋被挑断</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=50337&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=50337&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=50337&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3404">礼拜九</a>
										</cite>
					<em>2010-6-10</em>
				</td>
				<td class="nums"><strong>144</strong> / <em>5877</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=50337&goto=lastpost#lastpost">2010-6-22 10:22</a></em>
					<cite>by <a href="space.php?username=xrt007">xrt007</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_59413" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=59413&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_59413"><a href="viewthread.php?tid=59413&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">被越野车多次碾压 江苏新沂3岁儿童死亡</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=59413&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=59413&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=59413&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=17291">菜包</a>
										</cite>
					<em>2010-9-13</em>
				</td>
				<td class="nums"><strong>144</strong> / <em>2616</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=59413&goto=lastpost#lastpost">2010-9-26 00:02</a></em>
					<cite>by <a href="space.php?username=w1984">w1984</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_28877" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=28877&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_28877"><a href="viewthread.php?tid=28877&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">《2012》吹捧中国救地球 内地观众极度亢奋</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=28877&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=28877&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=28877&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1686">奧斯卡金</a>
										</cite>
					<em>2009-11-13</em>
				</td>
				<td class="nums"><strong>143</strong> / <em>3489</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=28877&goto=lastpost#lastpost">2009-11-25 14:57</a></em>
					<cite>by <a href="space.php?username=daxa">daxa</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_22798" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=22798&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_22798"><a href="viewthread.php?tid=22798&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">鲁豫有约：走进真实的薄瓜瓜</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=22798&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=22798&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=22798&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3723">mason</a>
										</cite>
					<em>2009-9-20</em>
				</td>
				<td class="nums"><strong>143</strong> / <em>3375</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=22798&goto=lastpost#lastpost">2009-10-7 19:14</a></em>
					<cite>by <a href="space.php?username=ch1b1">ch1b1</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_47918" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=47918&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_47918"><a href="viewthread.php?tid=47918&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">国保询问“不锈钢老鼠”是否代言1984bbs“六四文化衫”</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=47918&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=47918&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=47918&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7">张书记</a>
										</cite>
					<em>2010-6-1</em>
				</td>
				<td class="nums"><strong>143</strong> / <em>4784</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=47918&goto=lastpost#lastpost">2010-6-12 11:12</a></em>
					<cite>by <a href="space.php?username=hillet">hillet</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_30459" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=30459&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_30459"><a href="viewthread.php?tid=30459&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">成都一女企业家因拆迁自焚</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=30459&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=30459&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=30459&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=10071">open5235</a>
										</cite>
					<em>2009-11-26</em>
				</td>
				<td class="nums"><strong>142</strong> / <em>2713</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=30459&goto=lastpost#lastpost">2009-12-10 17:21</a></em>
					<cite>by <a href="space.php?username=%CD%FA%B2%C6%CA%C7%CC%F5%B9%B7">旺财是条狗</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_60245" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=60245&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_60245"><a href="viewthread.php?tid=60245&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">中国渔船在钓鱼岛海域与两日本巡逻船相撞 中方船长被扣押</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=60245&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=60245&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=60245&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=15406">兽性大发小白兔</a>
										</cite>
					<em>2010-9-7</em>
				</td>
				<td class="nums"><strong>142</strong> / <em>3360</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=60245&goto=lastpost#lastpost">2010-10-6 11:22</a></em>
					<cite>by <a href="space.php?username=hhbcl1414">hhbcl1414</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_36485" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=36485&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_36485"><a href="viewthread.php?tid=36485&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">香港五区公投开战 1月27日总辞</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=36485&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=36485&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=36485&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7002">luugoo</a>
										</cite>
					<em>2010-1-12</em>
				</td>
				<td class="nums"><strong>141</strong> / <em>2990</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=36485&goto=lastpost#lastpost">2010-2-23 10:47</a></em>
					<cite>by <a href="space.php?username=luugoo">luugoo</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_41322" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=41322&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_41322"><a href="viewthread.php?tid=41322&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">谷歌创始人布林主导摊牌 称反对极权势力</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=41322&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=41322&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=41322&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8301">lqunl</a>
										</cite>
					<em>2010-3-24</em>
				</td>
				<td class="nums"><strong>141</strong> / <em>3521</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=41322&goto=lastpost#lastpost">2010-3-31 07:21</a></em>
					<cite>by <a href="space.php?username=%D5%D5%B9%CB%BA%C3%C4%E3">照顾好你</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_37998" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=37998&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_37998"><a href="viewthread.php?tid=37998&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">奥巴马会见达赖，北京扬言报复</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=37998&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=37998&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=37998&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4963">memoryz</a>
										</cite>
					<em>2010-2-19</em>
				</td>
				<td class="nums"><strong>140</strong> / <em>3158</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=37998&goto=lastpost#lastpost">2010-2-23 18:56</a></em>
					<cite>by <a href="space.php?username=pwcpp">pwcpp</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_21752" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=21752&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_21752"><a href="viewthread.php?tid=21752&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传，GFW或将1984BSS列为A类封禁网站</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=21752&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=21752&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=21752&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=144">mfs0616</a>
										</cite>
					<em>2009-9-9</em>
				</td>
				<td class="nums"><strong>140</strong> / <em>4078</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=21752&goto=lastpost#lastpost">2009-9-21 02:36</a></em>
					<cite>by <a href="space.php?username=%C0%E4%D1%D4%C0%E4%D3%EF%C0%E4%D7%D4%D3%C9">冷言冷语冷自由</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_56057" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=56057&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_56057"><a href="viewthread.php?tid=56057&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">《挟尸要价》照片全票夺中国新闻摄影金镜头奖</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=56057&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=56057&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=56057&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4963">memoryz</a>
										</cite>
					<em>2010-8-19</em>
				</td>
				<td class="nums"><strong>140</strong> / <em>3713</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=56057&goto=lastpost#lastpost">2010-8-23 01:29</a></em>
					<cite>by <a href="space.php?username=deathproof">deathproof</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_54889" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=54889&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_54889"><a href="viewthread.php?tid=54889&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">德云社内部自查暂停演出</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=54889&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=54889&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=54889&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2274">主席下一小兵</a>
										</cite>
					<em>2010-8-7</em>
				</td>
				<td class="nums"><strong>138</strong> / <em>3243</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=54889&goto=lastpost#lastpost">2010-8-13 04:06</a></em>
					<cite>by <a href="space.php?username=dqianfei">dqianfei</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_31545" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=31545&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_31545"><a href="viewthread.php?tid=31545&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传，信管局传达工信部命令，将关闭所有论坛</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=31545&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=31545&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=31545&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=10076">mckon</a>
										</cite>
					<em>2009-12-18</em>
				</td>
				<td class="nums"><strong>138</strong> / <em>4353</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=31545&goto=lastpost#lastpost">2009-12-21 13:15</a></em>
					<cite>by <a href="space.php?username=ac54321">ac54321</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_17455" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=17455&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_17455"><a href="viewthread.php?tid=17455&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">河蟹大举进攻，利爪伸向魔兽</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=17455&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=17455&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=17455&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=17">eat.eat</a>
										</cite>
					<em>2009-6-30</em>
				</td>
				<td class="nums"><strong>138</strong> / <em>4136</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=17455&goto=lastpost#lastpost">2009-7-23 15:24</a></em>
					<cite>by <a href="space.php?username=%D1%F4%B9%E2%C0%EF%B5%C4%D4%BF%B3%D7">阳光里的钥匙</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_51674" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=51674&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_51674"><a href="viewthread.php?tid=51674&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">芬兰颁布新法规：公民网速必须达到1Mbps</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=51674&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=51674&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=51674&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7458">路边社网评员</a>
										</cite>
					<em>2010-7-2</em>
				</td>
				<td class="nums"><strong>138</strong> / <em>1726</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=51674&goto=lastpost#lastpost">2010-7-11 19:45</a></em>
					<cite>by <a href="space.php?username=%F4%94%B0%EE%C8%FD%CA%C0">魯邦三世</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_22167" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=22167&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_22167"><a href="viewthread.php?tid=22167&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">央视二套开始播放《六个“为什么”》系列节目</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=22167&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=22167&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=22167&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5434">忆剑</a>
										</cite>
					<em>2009-9-14</em>
				</td>
				<td class="nums"><strong>138</strong> / <em>3201</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=22167&goto=lastpost#lastpost">2009-9-19 12:18</a></em>
					<cite>by <a href="space.php?username=martine">martine</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_43814" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=43814&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_43814"><a href="viewthread.php?tid=43814&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">汪洋势压习薄 团派推继位胡锦涛人选</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=43814&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=43814&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=43814&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5588">我家旺财有喜了</a>
										</cite>
					<em>2010-4-20</em>
				</td>
				<td class="nums"><strong>138</strong> / <em>3946</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=43814&goto=lastpost#lastpost">2010-4-22 22:44</a></em>
					<cite>by <a href="space.php?username=gyakuden">gyakuden</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_41771" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=41771&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_41771"><a href="viewthread.php?tid=41771&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">山西多名学生注射疫苗致死致残 举报者被人身威胁</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=41771&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=41771&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=41771&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4570">我卖糕的</a>
										</cite>
					<em>2010-3-17</em>
				</td>
				<td class="nums"><strong>137</strong> / <em>3357</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=41771&goto=lastpost#lastpost">2010-3-31 00:14</a></em>
					<cite>by <a href="space.php?username=%CE%D2%C2%F4%B8%E2%B5%C4">我卖糕的</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_17551" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=17551&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_17551"><a href="viewthread.php?tid=17551&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传，他卷入Namibia贪腐案——需翻墙打开此帖</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=17551&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=17551&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=17551&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1258">路边社记者</a>
										</cite>
					<em>2009-7-20</em>
				</td>
				<td class="nums"><strong>136</strong> / <em>6869</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=17551&goto=lastpost#lastpost">2009-7-28 00:43</a></em>
					<cite>by <a href="space.php?username=%CE%E5%B4%FA%CD%B7%C4%BF%CF%AE%BD%FC%C6%BF">五代头目袭近瓶</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_30339" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=30339&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_30339"><a href="viewthread.php?tid=30339&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">译言沦陷</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=30339&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=30339&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=30339&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7101">george</a>
										</cite>
					<em>2009-11-30</em>
				</td>
				<td class="nums"><strong>136</strong> / <em>3603</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=30339&goto=lastpost#lastpost">2009-12-9 14:24</a></em>
					<cite>by <a href="space.php?username=%C6%D0%CC%E1%D2%BB%D2%B6">菩提一叶</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_16524" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=16524&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_16524"><a href="viewthread.php?tid=16524&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">黄章晋：再见，伊力哈木</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=16524&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=16524&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=16524&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4490">camour</a>
										</cite>
					<em>2009-7-10</em>
				</td>
				<td class="nums"><strong>136</strong> / <em>3625</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=16524&goto=lastpost#lastpost">2009-7-15 01:43</a></em>
					<cite>by <a href="space.php?username=luckyray">luckyray</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_21260" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=21260&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_21260"><a href="viewthread.php?tid=21260&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传，近日乌鲁木齐维族人针扎病菌报复</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=21260&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=21260&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=21260&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6906">jaychu128</a>
										</cite>
					<em>2009-9-2</em>
				</td>
				<td class="nums"><strong>135</strong> / <em>3693</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=21260&goto=lastpost#lastpost">2009-9-5 21:14</a></em>
					<cite>by <a href="space.php?username=pointbreak">pointbreak</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_35821" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=35821&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_35821"><a href="viewthread.php?tid=35821&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">真理部最新指令：不报道“海地遇难的中国人是出国观光”一事</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=35821&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=35821&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=35821&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=21">大仙儿</a>
										</cite>
					<em>2010-1-22</em>
				</td>
				<td class="nums"><strong>135</strong> / <em>4986</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=35821&goto=lastpost#lastpost">2010-1-25 16:17</a></em>
					<cite>by <a href="space.php?username=%C0%CF%CD%CF">老拖</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_35591" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=35591&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_35591"><a href="viewthread.php?tid=35591&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">北京警方粗暴干涉艺术展 群众反抗</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=35591&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=35591&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=35591&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2315">写实</a>
										</cite>
					<em>2010-1-13</em>
				</td>
				<td class="nums"><strong>134</strong> / <em>3077</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=35591&goto=lastpost#lastpost">2010-1-25 12:17</a></em>
					<cite>by <a href="space.php?username=littail">littail</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_15562" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=15562&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_15562"><a href="viewthread.php?tid=15562&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">港人七一大游行 护党派与民主派街头冷战</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=15562&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=15562&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=15562&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7">张书记</a>
										</cite>
					<em>2009-7-1</em>
				</td>
				<td class="nums"><strong>133</strong> / <em>5529</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=15562&goto=lastpost#lastpost">2009-7-6 10:40</a></em>
					<cite>by <a href="space.php?username=quaestor">quaestor</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_59003" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=59003&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_59003"><a href="viewthread.php?tid=59003&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">宜黄一人因强拆自焚 县长带队深夜抢尸</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=59003&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=59003&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=59003&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6571">十年砍柴</a>
										</cite>
					<em>2010-9-16</em>
				</td>
				<td class="nums"><strong>132</strong> / <em>2707</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=59003&goto=lastpost#lastpost">2010-9-21 22:07</a></em>
					<cite>by <a href="space.php?username=Howlion">Howlion</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_60440" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=60440&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_60440"><a href="viewthread.php?tid=60440&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">中共外交部发言人：刘晓波亵渎了诺贝尔和平奖</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=60440&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=60440&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=60440&amp;extra=page%3D3%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7">张书记</a>
										</cite>
					<em>2010-10-8</em>
				</td>
				<td class="nums"><strong>132</strong> / <em>4279</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=60440&goto=lastpost#lastpost">2010-10-9 20:36</a></em>
					<cite>by <a href="space.php?username=hippies">hippies</a></cite>
				</td>
			</tr>
		</tbody></table>

</form>
</div>
	</div><div id="infoside">
<!--<div style="border-style: solid ; border-width:1px ; border-color: #cccccc ; width:230px " >
<div style="border-width:0px ; margin:12px;" id='1984act'>
<b>三角地</b><br><P align=left><script src="https://1984bbs.com/api/javascript.php?key=threads_IoX" type="text/javascript"></script></P>
</div>
</div>
<div style='clear:both;height:10px;'></div>-->
<!-- Include the Google Friend Connect javascript library. -->
<div style="border-style: solid ; border-width:1px ; border-color: #cccccc ; width:230px " >
<div style="border-width:0px ; margin:12px;" id='online_chat_loading'>正在加载：<br /><p style='margin-top:5px;'><b>民主墙</b> </p> <br /> 如果长时间加载未成又或者无法加载，请访问《<a href="https://1984bbs.com/viewthread.php?tid=37237">Online Chat 的 建议和Bug 收集</a>》一贴</div>
<div style="border-width:0px ; margin:12px;visibility: hidden" id='online_chat_box'>
<p style='margin-top:5px;' ><b>民主墙</b> </p> 
<form>
<textarea id='chat_msg' style='width:200px;' onchange="handleChatChange();" onkeypress="return handleChatEnterKey(event)">
</textarea>
</form>
<div style='width:200px;padding:1px;margin-righxt:0px;border-width:0px;border-style:solid;border-color:#000000'>
<span id='chatAutoRefreshBox' style='float:left;margin-right:0px;'></span>
<span style="float:right" style="margin-right:0px;">
<span id='chat_msg_length'></span>
<span id='chatSubmitBox' style='margin-right:0px;padding:0px'></span>
</span>
<div style='clear:both;height:10px;'></div>
</div>


<div id='chatListBox' style='width:200px;white-space:normal; word-break:break-all;overflow:hidden;word-wrap:break-word !important;OVERFLOW-X:hidden !important;'><!--内容列表--></div>
<span id='chatRefreshBox' style='display: none;visibility: hidden'></span>
<a href="#" id='chat_next_page' onclick="chat_page_next();">上一页</a>
<a href="#" id='chat_prev_page' onclick="chat_page_prev()">下一页</a>

</div>
</div>

<br></br>
	</div>

<div class="pages_btns">
	<div class="pages"><em>&nbsp;22278&nbsp;</em><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=2" class="prev">&lsaquo;&lsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=1">1</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=2">2</a><strong>3</strong><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=4">4</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=5">5</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=6">6</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=7">7</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=8">8</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=9">9</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=10">10</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=4" class="next">&rsaquo;&rsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=349" class="last">... 349</a><kbd><input type="text" name="custompage" size="3" onkeydown="if(event.keyCode==13) {window.location='forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page='+this.value; return false;}" /></kbd></div>	</div>

  
	<div class="box">
			<span class="headactions"><a href="forumdisplay.php?fid=2&amp;page=3&amp;showoldetails=yes#online" class="nobdr"><img src="images/default/collapsed_yes.gif" alt="" /></a></span>
		<h4>正在浏览此版块的会员</h4>
	</div>
</div>	<div class="ad_footerbanner" id="ad_footerbanner1"></div>
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
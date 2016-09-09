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
			window.location = 'forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&page=4';
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
<div class="pages"><em>&nbsp;22278&nbsp;</em><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=1" class="first">1 ...</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=4" class="prev">&lsaquo;&lsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=3">3</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=4">4</a><strong>5</strong><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=6">6</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=7">7</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=8">8</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=9">9</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=10">10</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=11">11</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=12">12</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=6" class="next">&rsaquo;&rsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=349" class="last">... 349</a><kbd><input type="text" name="custompage" size="3" onkeydown="if(event.keyCode==13) {window.location='forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page='+this.value; return false;}" /></kbd></div></div>

<div style="float:left;border:1px solid #CCC; border-bottom:none;;width:218px; background: url(/imgs/1984radio.jpg) 200px 2px no-repeat;padding:5px 0 5px 12px;margin:0px 0 0 13px">

<p><b><a href="/radio/index.php" target="_blank">1984FM</a></b><br /><b><a href="https://voxli.com/1984bbs" target="_blank">1984Chat</a></b>&nbsp;</p> 
</div>

<div style="clear:both;height:0px;width:100%;font-size:1px;">&nbsp;</div>

	<ul class="popupmenu_popup newspecialmenu" id="newspecial_menu" style="display: none">
		<li><a href="post.php?action=newthread&amp;fid=2&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">发新话题</a></li>		<li class="poll"><a href="post.php?action=newthread&amp;fid=2&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;special=1">发布投票</a></li>													</ul>
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

					<tbody id="normalthread_58864" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=58864&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_58864"><a href="viewthread.php?tid=58864&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传北京拟批准反日示威</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=58864&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=58864&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=58864&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=24">wang3</a>
										</cite>
					<em>2010-9-15</em>
				</td>
				<td class="nums"><strong>116</strong> / <em>3108</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=58864&goto=lastpost#lastpost">2010-9-27 09:42</a></em>
					<cite>by <a href="space.php?username=%D7%D4%D3%C9%D7%D4%D4%DA%B7%E7">自由自在风</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_57186" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=57186&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_57186"><a href="viewthread.php?tid=57186&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">韩人不满中修历史 声称古朝鲜远比中国强</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=57186&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=57186&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=57186&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5464">上海帅哥</a>
										</cite>
					<em>2010-9-2</em>
				</td>
				<td class="nums"><strong>116</strong> / <em>1992</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=57186&goto=lastpost#lastpost">2010-9-27 10:10</a></em>
					<cite>by <a href="space.php?username=CCAV">CCAV</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_14761" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=14761&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_14761"><a href="viewthread.php?tid=14761&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">各位亲爱的组员如何看待今晚GOOGLE短暂被墙事件？</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=14761&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=14761&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=14761&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5867">宋石男</a>
										</cite>
					<em>2009-6-24</em>
				</td>
				<td class="nums"><strong>116</strong> / <em>1726</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=14761&goto=lastpost#lastpost">2009-6-27 21:20</a></em>
					<cite>by <a href="space.php?username=%B4%F3%C8%CB%A3%AC%D3%D0%D0%D8%C6%F7">大人，有胸器</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_45968" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=45968&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_45968"><a href="viewthread.php?tid=45968&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">温家宝在川震中使用器物被陈列展出</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=45968&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=45968&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=45968&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7">张书记</a>
										</cite>
					<em>2009-5-14</em>
				</td>
				<td class="nums"><strong>116</strong> / <em>3951</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=45968&goto=lastpost#lastpost">2010-5-18 16:36</a></em>
					<cite>by <a href="space.php?username=%C6%EF%B6%EC%C2%C3%D0%D0">骑鹅旅行</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_30123" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=30123&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_30123"><a href="viewthread.php?tid=30123&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">文强曾想包宋祖英</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=30123&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=30123&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=30123&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2495">深入裙中</a>
										</cite>
					<em>2009-12-6</em>
				</td>
				<td class="nums"><strong>116</strong> / <em>4334</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=30123&goto=lastpost#lastpost">2009-12-31 09:25</a></em>
					<cite>by <a href="space.php?username=alexwen34">alexwen34</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_37732" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=37732&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_37732"><a href="viewthread.php?tid=37732&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">桂半数男生抽检精液异常，疑系转基因玉米偷种</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=37732&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=37732&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=37732&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=10890">xiaohe1120</a>
										</cite>
					<em>2010-2-5</em>
				</td>
				<td class="nums"><strong>116</strong> / <em>2745</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=37732&goto=lastpost#lastpost">2010-2-20 21:54</a></em>
					<cite>by <a href="space.php?username=bunnyqoo">bunnyqoo</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_36061" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=36061&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_36061"><a href="viewthread.php?tid=36061&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">真理部最新指令：禁止炒作《阿凡达》，为《孔子》让道</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=36061&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=36061&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=36061&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8767">xazei</a>
										</cite>
					<em>2010-1-17</em>
				</td>
				<td class="nums"><strong>115</strong> / <em>4325</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=36061&goto=lastpost#lastpost">2010-1-27 18:13</a></em>
					<cite>by <a href="space.php?username=yury">yury</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_41124" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=41124&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_41124"><a href="viewthread.php?tid=41124&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">中国网民在谷歌公司门口献花 与警方国保发生冲突</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=41124&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=41124&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=41124&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2071">上肛上腺</a>
										</cite>
					<em>2010-3-23</em>
				</td>
				<td class="nums"><strong>115</strong> / <em>4196</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=41124&goto=lastpost#lastpost">2010-3-25 10:43</a></em>
					<cite>by <a href="space.php?username=luugoo">luugoo</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_29955" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=29955&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_29955"><a href="viewthread.php?tid=29955&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">FIFA公布世界杯抽签流程</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=29955&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=29955&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=29955&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7">张书记</a>
										</cite>
					<em>2009-12-4</em>
				</td>
				<td class="nums"><strong>115</strong> / <em>940</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=29955&goto=lastpost#lastpost">2009-12-5 13:31</a></em>
					<cite>by <a href="space.php?username=YOYO">YOYO</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_24946" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=24946&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_24946"><a href="viewthread.php?tid=24946&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">团长夫人逛莫高窟……</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=24946&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=24946&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=24946&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=778">jezad</a>
										</cite>
					<em>2009-10-7</em>
				</td>
				<td class="nums"><strong>115</strong> / <em>3742</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=24946&goto=lastpost#lastpost">2009-10-15 15:36</a></em>
					<cite>by <a href="space.php?username=Archanfel">Archanfel</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_26408" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=26408&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_26408"><a href="viewthread.php?tid=26408&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">中共以“颠覆国家政权罪”终审判处郭泉有期徒刑10年</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=26408&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=26408&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=26408&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1258">路边社记者</a>
										</cite>
					<em>2009-10-16</em>
				</td>
				<td class="nums"><strong>114</strong> / <em>2712</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=26408&goto=lastpost#lastpost">2009-12-29 15:20</a></em>
					<cite>by <a href="space.php?username=%C0%F1%B0%DD%BE%C5">礼拜九</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_48784" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=48784&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_48784"><a href="viewthread.php?tid=48784&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">江苏常州女医生开一毛钱处方将病人治愈</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=48784&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=48784&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=48784&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=10480">自由中国</a>
										</cite>
					<em>2010-6-9</em>
				</td>
				<td class="nums"><strong>114</strong> / <em>2038</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=48784&goto=lastpost#lastpost">2010-6-19 14:31</a></em>
					<cite>by <a href="space.php?username=%B5%A5%CA%D6%B7%F6%C7%BD">单手扶墙</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_57190" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=57190&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_57190"><a href="viewthread.php?tid=57190&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">金正日再次访华</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=57190&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=57190&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=57190&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=14556">nanalonely</a>
										</cite>
					<em>2010-8-26</em>
				</td>
				<td class="nums"><strong>114</strong> / <em>4304</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=57190&goto=lastpost#lastpost">2010-9-2 22:54</a></em>
					<cite>by <a href="space.php?username=741275952">741275952</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_54552" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=54552&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_54552"><a href="viewthread.php?tid=54552&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">丹东一交警当街被杀</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=54552&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=54552&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=54552&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=10890">xiaohe1120</a>
										</cite>
					<em>2010-7-31</em>
				</td>
				<td class="nums"><strong>113</strong> / <em>3953</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=54552&goto=lastpost#lastpost">2010-8-11 09:58</a></em>
					<cite>by <a href="space.php?username=%B4%BA%B7%E7%C2%A5%D6%F7">春风楼主</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_52735" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=52735&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_52735"><a href="viewthread.php?tid=52735&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">吴邦国出访餐饮单流出-更新总统套房</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=52735&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=52735&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=52735&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=17327">开水开水</a>
										</cite>
					<em>2010-7-14</em>
				</td>
				<td class="nums"><strong>113</strong> / <em>5006</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=52735&goto=lastpost#lastpost">2010-7-18 23:51</a></em>
					<cite>by <a href="space.php?username=jiucaibao">jiucaibao</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_53716" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=53716&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_53716"><a href="viewthread.php?tid=53716&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">习近平：坚决反对任何歪曲丑化中共历史的错误倾向</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=53716&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=53716&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=53716&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2804">musicool</a>
										</cite>
					<em>2010-7-21</em>
				</td>
				<td class="nums"><strong>113</strong> / <em>2906</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=53716&goto=lastpost#lastpost">2010-7-27 10:53</a></em>
					<cite>by <a href="space.php?username=lili">lili</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_55409" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=55409&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_55409"><a href="viewthread.php?tid=55409&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">8月15日举行全国哀悼活动</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=55409&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=55409&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=55409&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=12609">自由花盛开</a>
										</cite>
					<em>2010-8-14</em>
				</td>
				<td class="nums"><strong>112</strong> / <em>2781</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=55409&goto=lastpost#lastpost">2010-8-17 21:35</a></em>
					<cite>by <a href="space.php?username=lym1988">lym1988</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_46056" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=46056&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_46056"><a href="viewthread.php?tid=46056&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">宋祖英儿子照片流出 活泼可爱眉目俊秀</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=46056&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=46056&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=46056&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=852">未来他老爸</a>
										</cite>
					<em>2010-5-17</em>
				</td>
				<td class="nums"><strong>112</strong> / <em>3807</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=46056&goto=lastpost#lastpost">2010-5-21 20:33</a></em>
					<cite>by <a href="space.php?username=sandorsong">sandorsong</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_47166" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=47166&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_47166"><a href="viewthread.php?tid=47166&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">朝鲜宣布与韩国断交</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=47166&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=47166&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=47166&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2513">dudu</a>
										</cite>
					<em>2010-5-25</em>
				</td>
				<td class="nums"><strong>112</strong> / <em>2503</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=47166&goto=lastpost#lastpost">2010-5-27 09:18</a></em>
					<cite>by <a href="space.php?username=%D0%F9%B6%F9MM">轩儿MM</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_17602" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=17602&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_17602"><a href="viewthread.php?tid=17602&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">中国导演宣布退出第58届墨尔本国际电影节</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=17602&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=17602&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=17602&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4964">xifanliang</a>
										</cite>
					<em>2009-7-23</em>
				</td>
				<td class="nums"><strong>112</strong> / <em>1980</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=17602&goto=lastpost#lastpost">2009-7-25 20:39</a></em>
					<cite>by <a href="space.php?username=%D7%A8%D2%B5%CE%A7%B9%DB">专业围观</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_19959" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=19959&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_19959"><a href="viewthread.php?tid=19959&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传，前领导人万里告诫执政党遵守政治伦理</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=19959&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=19959&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=19959&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1249">xies</a>
										</cite>
					<em>2009-7-31</em>
				</td>
				<td class="nums"><strong>112</strong> / <em>3928</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=19959&goto=lastpost#lastpost">2009-8-18 03:11</a></em>
					<cite>by <a href="space.php?username=%D4%BB%B6%FA%D3%D6">曰耳又</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_20328" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=20328&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_20328"><a href="viewthread.php?tid=20328&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">谁能扒一下安利的后台</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=20328&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=20328&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=20328&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6402">paulsusu</a>
										</cite>
					<em>2009-8-15</em>
				</td>
				<td class="nums"><strong>112</strong> / <em>3102</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=20328&goto=lastpost#lastpost">2009-8-22 21:36</a></em>
					<cite>by <a href="space.php?username=numberscis">numberscis</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_27437" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=27437&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_27437"><a href="viewthread.php?tid=27437&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">“湖北三名大学生救人溺亡英勇事迹”另有隐情</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=27437&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=27437&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=27437&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2835">青青子衿</a>
										</cite>
					<em>2009-10-27</em>
				</td>
				<td class="nums"><strong>112</strong> / <em>3476</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=27437&goto=lastpost#lastpost">2009-11-8 12:23</a></em>
					<cite>by <a href="space.php?username=wodeid">wodeid</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_27401" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=27401&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_27401"><a href="viewthread.php?tid=27401&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">他向布什扔只鞋，房子车子妻子全解决</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=27401&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=27401&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=27401&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2315">写实</a>
										</cite>
					<em>2009-11-7</em>
				</td>
				<td class="nums"><strong>112</strong> / <em>1799</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=27401&goto=lastpost#lastpost">2009-11-21 19:57</a></em>
					<cite>by <a href="space.php?username=cooldoit%40126.co">cooldoit@126.co</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_32075" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=32075&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_32075"><a href="viewthread.php?tid=32075&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">人民网推出微博服务 两小时后阵亡</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=32075&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=32075&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=32075&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7002">luugoo</a>
										</cite>
					<em>2009-12-22</em>
				</td>
				<td class="nums"><strong>112</strong> / <em>3854</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=32075&goto=lastpost#lastpost">2009-12-23 23:08</a></em>
					<cite>by <a href="space.php?username=%B8%C9%CF%BA%B6%F9">干虾儿</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_10783" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=10783&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_10783"><a href="viewthread.php?tid=10783&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">碰到知音了——我认为江是仅次于邓的伟大领导人</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=10783&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=10783&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=10783&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5186">胺氰聚三郎</a>
										</cite>
					<em>2009-5-12</em>
				</td>
				<td class="nums"><strong>112</strong> / <em>2161</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=10783&goto=lastpost#lastpost">2009-5-16 00:55</a></em>
					<cite>by <a href="space.php?username=%B0%B7%C7%E8%BE%DB%C8%FD%C0%C9">胺氰聚三郎</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_59285" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=59285&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_59285"><a href="viewthread.php?tid=59285&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">日本释放中国被拘留船长</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=59285&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=59285&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=59285&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8721">strongwind13</a>
										</cite>
					<em>2010-9-24</em>
				</td>
				<td class="nums"><strong>111</strong> / <em>2533</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=59285&goto=lastpost#lastpost">2010-10-3 14:35</a></em>
					<cite>by <a href="space.php?username=%CF%E3%BD%B6%B8%F6%B0%CD%C0%D6">香蕉个巴乐</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_49429" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=49429&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_49429"><a href="viewthread.php?tid=49429&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">安徽官员殴打群众后被市委书记现场开除党籍</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=49429&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=49429&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=49429&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5886">gu8902</a>
										</cite>
					<em>2010-6-12</em>
				</td>
				<td class="nums"><strong>111</strong> / <em>2990</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=49429&goto=lastpost#lastpost">2010-6-15 17:27</a></em>
					<cite>by <a href="space.php?username=%B6%C0%B9%C2%D1%C6%D1%D4">独孤哑言</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_50560" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=50560&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_50560"><a href="viewthread.php?tid=50560&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">浙江文科状元最爱看《参考消息》《环球时报》</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=50560&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=50560&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=50560&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=11076">有颜色</a>
										</cite>
					<em>2010-6-23</em>
				</td>
				<td class="nums"><strong>111</strong> / <em>1842</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=50560&goto=lastpost#lastpost">2010-6-26 11:29</a></em>
					<cite>by <a href="space.php?username=%C4%B3%C4%B3%C4%F1%C8%CB">某某鸟人</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_27306" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=27306&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_27306"><a href="viewthread.php?tid=27306&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">南京儿童医院医生值班玩QQ游戏 延误时机致婴儿死亡</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=27306&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=27306&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=27306&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3202">glim</a>
										</cite>
					<em>2009-11-6</em>
				</td>
				<td class="nums"><strong>111</strong> / <em>1821</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=27306&goto=lastpost#lastpost">2009-11-20 23:55</a></em>
					<cite>by <a href="space.php?username=MARS0079">MARS0079</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_26595" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=26595&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_26595"><a href="viewthread.php?tid=26595&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传，上万维族人“失踪”</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=26595&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=26595&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=26595&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8301">lqunl</a>
										</cite>
					<em>2009-10-29</em>
				</td>
				<td class="nums"><strong>110</strong> / <em>2395</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=26595&goto=lastpost#lastpost">2009-11-12 22:47</a></em>
					<cite>by <a href="space.php?username=%E1%C0%C9%BD%D1%FD%B5%C0">崂山妖道</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_55645" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=55645&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_55645"><a href="viewthread.php?tid=55645&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">余杰新书《中国影帝温家宝》将在港出版</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=55645&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=55645&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=55645&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4004">ttrendr</a>
										</cite>
					<em>2010-8-6</em>
				</td>
				<td class="nums"><strong>110</strong> / <em>3879</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=55645&goto=lastpost#lastpost">2010-8-25 10:22</a></em>
					<cite>by <a href="space.php?username=%D4%AD%B5%E3">原点</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_10086" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=10086&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_10086"><a href="viewthread.php?tid=10086&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">墨西哥宣布在中国撤侨，香港确诊H1N1流感</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=10086&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=10086&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=10086&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5140">kakagoing</a>
										</cite>
					<em>2009-5-1</em>
				</td>
				<td class="nums"><strong>110</strong> / <em>1150</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=10086&goto=lastpost#lastpost">2009-5-5 17:12</a></em>
					<cite>by <a href="space.php?username=kakagoing">kakagoing</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_41855" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=41855&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_41855"><a href="viewthread.php?tid=41855&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">《科幻世界》内部改制</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=41855&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=41855&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=41855&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=9883">水为之</a>
										</cite>
					<em>2010-3-21</em>
				</td>
				<td class="nums"><strong>110</strong> / <em>3664</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=41855&goto=lastpost#lastpost">2010-4-2 09:47</a></em>
					<cite>by <a href="space.php?username=cslovejia">cslovejia</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_43690" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=43690&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_43690"><a href="viewthread.php?tid=43690&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">重庆成功挫败一起“毛共党”反宣图谋</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=43690&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=43690&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=43690&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=344">路过</a>
										</cite>
					<em>2009-11-4</em>
				</td>
				<td class="nums"><strong>110</strong> / <em>3586</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=43690&goto=lastpost#lastpost">2010-4-23 09:41</a></em>
					<cite>by <a href="space.php?username=dangqu">dangqu</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_42924" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=42924&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_42924"><a href="viewthread.php?tid=42924&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">总政治部少将向外媒透露：解放军已成不稳定的火药桶</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=42924&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=42924&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=42924&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8301">lqunl</a>
										</cite>
					<em>2010-4-13</em>
				</td>
				<td class="nums"><strong>110</strong> / <em>3777</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=42924&goto=lastpost#lastpost">2010-4-28 23:34</a></em>
					<cite>by <a href="space.php?username=shsmtz">shsmtz</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_44225" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=44225&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_44225"><a href="viewthread.php?tid=44225&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">宋祖德：许晴在日本做女体盛</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=44225&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=44225&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=44225&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8638">dark</a>
										</cite>
					<em>2010-4-12</em>
				</td>
				<td class="nums"><strong>110</strong> / <em>3949</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=44225&goto=lastpost#lastpost">2010-4-29 11:36</a></em>
					<cite>by <a href="space.php?username=zyz1987">zyz1987</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_35951" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=35951&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_35951"><a href="viewthread.php?tid=35951&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">虎年春晚首个审查通过节目：新疆歌舞《党的政策亚克西》</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=35951&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=35951&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=35951&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7002">luugoo</a>
										</cite>
					<em>2009-12-8</em>
				</td>
				<td class="nums"><strong>110</strong> / <em>2995</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=35951&goto=lastpost#lastpost">2010-1-27 10:26</a></em>
					<cite>by <a href="space.php?username=iorikaka">iorikaka</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_29885" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=29885&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_29885"><a href="viewthread.php?tid=29885&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">影帝：我的每一粒灰烬都是爱国的</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=29885&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=29885&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=29885&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2804">musicool</a>
										</cite>
					<em>2009-12-4</em>
				</td>
				<td class="nums"><strong>110</strong> / <em>2451</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=29885&goto=lastpost#lastpost">2010-1-28 03:25</a></em>
					<cite>by <a href="space.php?username=%D4%D3%CA%B3">杂食</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_38435" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=38435&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_38435"><a href="viewthread.php?tid=38435&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">新泰6名80后副局长被指含高官家属，当事人否认亦遭驳</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=38435&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=38435&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=38435&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8658">skycheung</a>
										</cite>
					<em>2010-2-22</em>
				</td>
				<td class="nums"><strong>110</strong> / <em>3578</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=38435&goto=lastpost#lastpost">2010-3-1 10:28</a></em>
					<cite>by <a href="space.php?username=lostime">lostime</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_39535" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=39535&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_39535"><a href="viewthread.php?tid=39535&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">政协委员严琦建议取缔社会网吧</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=39535&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=39535&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=39535&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2311">空空追梦</a>
										</cite>
					<em>2010-3-2</em>
				</td>
				<td class="nums"><strong>110</strong> / <em>2353</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=39535&goto=lastpost#lastpost">2010-3-10 15:37</a></em>
					<cite>by <a href="space.php?username=%CD%B8%C2%B6%C9%E7%BC%C7%D5%DF">透露社记者</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_21590" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=21590&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_21590"><a href="viewthread.php?tid=21590&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">手中没有针管 一样被剜目虐杀</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=21590&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=21590&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=21590&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2132">花想容</a>
										</cite>
					<em>2009-9-7</em>
				</td>
				<td class="nums"><strong>110</strong> / <em>2317</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=21590&goto=lastpost#lastpost">2009-9-9 08:35</a></em>
					<cite>by <a href="space.php?username=%D0%A1%B2%D4%D3%AC">小苍蝇</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_24466" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=24466&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_24466"><a href="viewthread.php?tid=24466&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传说中的重庆“亮点茶楼”二三事</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=24466&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=24466&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=24466&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2928">canadian</a>
										</cite>
					<em>2009-10-7</em>
				</td>
				<td class="nums"><strong>110</strong> / <em>4447</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=24466&goto=lastpost#lastpost">2009-10-22 00:40</a></em>
					<cite>by <a href="space.php?username=%B1%B1%BE%A9%C6%E5%C3%D4">北京棋迷</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_51150" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=51150&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_51150"><a href="viewthread.php?tid=51150&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">多部纪录片香港获奖大陆遭禁</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=51150&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=51150&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=51150&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=624">左岸拾荒</a>
										</cite>
					<em>2010-6-29</em>
				</td>
				<td class="nums"><strong>110</strong> / <em>3142</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=51150&goto=lastpost#lastpost">2010-7-9 23:29</a></em>
					<cite>by <a href="space.php?username=%C0%B4%D2%B2">来也</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_48749" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=48749&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_48749"><a href="viewthread.php?tid=48749&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传江泽民住进301医院</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=48749&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=48749&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=48749&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3588">blueglen</a>
										</cite>
					<em>2010-6-8</em>
				</td>
				<td class="nums"><strong>109</strong> / <em>4102</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=48749&goto=lastpost#lastpost">2010-6-9 10:08</a></em>
					<cite>by <a href="space.php?username=dataonliner">dataonliner</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_60297" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=60297&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_60297"><a href="viewthread.php?tid=60297&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">博彩公司为刘晓波获诺奖先行赔付</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=60297&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=60297&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=60297&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6587">alix001</a>
										</cite>
					<em>2010-10-6</em>
				</td>
				<td class="nums"><strong>109</strong> / <em>3858</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=60297&goto=lastpost#lastpost">2010-10-8 19:20</a></em>
					<cite>by <a href="space.php?username=Candice">Candice</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_44049" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=44049&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_44049"><a href="viewthread.php?tid=44049&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">郑渊洁宣布退出中国作协</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=44049&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=44049&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=44049&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=10890">xiaohe1120</a>
										</cite>
					<em>2010-4-25</em>
				</td>
				<td class="nums"><strong>109</strong> / <em>2317</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=44049&goto=lastpost#lastpost">2010-4-28 19:19</a></em>
					<cite>by <a href="space.php?username=xpoken">xpoken</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_44449" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=44449&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_44449"><a href="viewthread.php?tid=44449&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">美国警察冲进中国驻休斯敦领馆 铐走副总领事</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=44449&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=44449&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=44449&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4817">firedragoon</a>
										</cite>
					<em>2010-4-30</em>
				</td>
				<td class="nums"><strong>109</strong> / <em>2897</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=44449&goto=lastpost#lastpost">2010-5-2 20:51</a></em>
					<cite>by <a href="space.php?username=iridiumcao">iridiumcao</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_42948" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=42948&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_42948"><a href="viewthread.php?tid=42948&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">日本女优苍井空登陆Twitter 中国粉丝翻墙追捧</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=42948&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=42948&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=42948&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=10890">xiaohe1120</a>
										</cite>
					<em>2010-4-11</em>
				</td>
				<td class="nums"><strong>108</strong> / <em>3470</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=42948&goto=lastpost#lastpost">2010-4-14 18:19</a></em>
					<cite>by <a href="space.php?username=%D0%A1%B2%D4%D3%AC">小苍蝇</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_46611" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=46611&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_46611"><a href="viewthread.php?tid=46611&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">北京“天上人间”等4家夜总会被停业整顿半年</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=46611&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=46611&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=46611&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6001">金陵布衣</a>
										</cite>
					<em>2010-5-13</em>
				</td>
				<td class="nums"><strong>108</strong> / <em>2768</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=46611&goto=lastpost#lastpost">2010-5-21 18:58</a></em>
					<cite>by <a href="space.php?username=jeansea">jeansea</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_56596" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=56596&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_56596"><a href="viewthread.php?tid=56596&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">南京多人疑食用小龙虾致肌肉溶解</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=56596&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=56596&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=56596&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=14291">MozillaTG</a>
										</cite>
					<em>2010-8-23</em>
				</td>
				<td class="nums"><strong>108</strong> / <em>2173</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=56596&goto=lastpost#lastpost">2010-8-28 11:49</a></em>
					<cite>by <a href="space.php?username=%B1%B1%BE%A9%C6%E5%C3%D4">北京棋迷</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_45755" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=45755&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_45755"><a href="viewthread.php?tid=45755&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">美国务院资助法轮功150万美元用于“无界”“自由门”研发</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=45755&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=45755&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=45755&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7">张书记</a>
										</cite>
					<em>2010-5-13</em>
				</td>
				<td class="nums"><strong>108</strong> / <em>2049</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=45755&goto=lastpost#lastpost">2010-6-9 12:46</a></em>
					<cite>by <a href="space.php?username=hailand">hailand</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_53183" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=53183&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_53183"><a href="viewthread.php?tid=53183&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">公民因提议线下活动 遭国保“钓鱼”绑架殴打</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=53183&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=53183&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=53183&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=11098">爱我所爱</a>
										</cite>
					<em>2010-7-18</em>
				</td>
				<td class="nums"><strong>107</strong> / <em>2839</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=53183&goto=lastpost#lastpost">2010-7-20 11:54</a></em>
					<cite>by <a href="space.php?username=nathansam">nathansam</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_21587" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=21587&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_21587"><a href="viewthread.php?tid=21587&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">9月6日北京夜：稍有常识的人再次见证我们的铁骑在保持克制</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=21587&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=21587&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=21587&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7">张书记</a>
										</cite>
					<em>2009-9-7</em>
				</td>
				<td class="nums"><strong>107</strong> / <em>3763</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=21587&goto=lastpost#lastpost">2009-9-10 22:30</a></em>
					<cite>by <a href="space.php?username=%B0%D7%C3%D7%C9%D5%BC%A6">白米烧鸡</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_42505" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=42505&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_42505"><a href="viewthread.php?tid=42505&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">高智晟决定为了家人放弃维权活动</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=42505&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=42505&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=42505&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8811">大衛王飯店</a>
										</cite>
					<em>2010-4-8</em>
				</td>
				<td class="nums"><strong>106</strong> / <em>2050</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=42505&goto=lastpost#lastpost">2010-4-11 20:01</a></em>
					<cite>by <a href="space.php?username=%C0%D7%CE%C41970">雷文1970</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_16803" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=16803&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_16803"><a href="viewthread.php?tid=16803&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">秦刚新语：“他们一个是女的，一个是男的”</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=16803&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=16803&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=16803&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6837">amoiist</a>
										</cite>
					<em>2009-7-15</em>
				</td>
				<td class="nums"><strong>106</strong> / <em>2801</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=16803&goto=lastpost#lastpost">2009-7-17 22:15</a></em>
					<cite>by <a href="space.php?username=%D7%ED%C9%FA%C3%CE%CB%C0">醉生梦死</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_48754" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=48754&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_48754"><a href="viewthread.php?tid=48754&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">江泽民现身国家大剧院 李长春陪同</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=48754&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=48754&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=48754&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=10890">xiaohe1120</a>
										</cite>
					<em>2010-6-9</em>
				</td>
				<td class="nums"><strong>106</strong> / <em>3519</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=48754&goto=lastpost#lastpost">2010-6-17 14:57</a></em>
					<cite>by <a href="space.php?username=nunu">nunu</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_51534" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=51534&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_51534"><a href="viewthread.php?tid=51534&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">香港将举行2010七一游行 诉求“双普选”</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=51534&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=51534&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=51534&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7002">luugoo</a>
										</cite>
					<em>2010-6-28</em>
				</td>
				<td class="nums"><strong>106</strong> / <em>1759</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=51534&goto=lastpost#lastpost">2010-7-2 20:43</a></em>
					<cite>by <a href="space.php?username=hippie">hippie</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_53600" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=53600&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_53600"><a href="viewthread.php?tid=53600&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">台湾主持陈文茜批韩寒没文化 望其珍惜话语权</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=53600&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=53600&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=53600&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=12717">风生水起</a>
										</cite>
					<em>2010-7-22</em>
				</td>
				<td class="nums"><strong>106</strong> / <em>2420</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=53600&goto=lastpost#lastpost">2010-7-28 17:02</a></em>
					<cite>by <a href="space.php?username=howejiang">howejiang</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_20885" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=20885&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_20885"><a href="viewthread.php?tid=20885&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">阅兵彩排</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=20885&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=20885&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=20885&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6838">锅匠</a>
										</cite>
					<em>2009-8-28</em>
				</td>
				<td class="nums"><strong>106</strong> / <em>3700</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=20885&goto=lastpost#lastpost">2009-9-3 01:40</a></em>
					<cite>by <a href="space.php?username=%CE%F7%C3%C5%B4%B5%C5%A3">西门吹牛</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_44473" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=44473&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_44473"><a href="viewthread.php?tid=44473&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传温家宝出现严重高原反应</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=44473&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=44473&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=44473&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5276">周游列国</a>
										</cite>
					<em>2010-4-18</em>
				</td>
				<td class="nums"><strong>105</strong> / <em>4025</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=44473&goto=lastpost#lastpost">2010-4-30 11:06</a></em>
					<cite>by <a href="space.php?username=%D2%D6%D1%EF">抑扬</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_36157" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=36157&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_36157"><a href="viewthread.php?tid=36157&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">哈维尔等向中驻捷领馆递交致胡的公开信  抗议监禁刘晓波</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=36157&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=36157&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=36157&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1946">qiushuihan</a>
										</cite>
					<em>2010-1-6</em>
				</td>
				<td class="nums"><strong>105</strong> / <em>2247</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=36157&goto=lastpost#lastpost">2010-1-28 16:46</a></em>
					<cite>by <a href="space.php?username=woyan2s5">woyan2s5</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_54763" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=54763&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_54763"><a href="viewthread.php?tid=54763&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">克林顿披露美轰炸中国大使馆是既定目标</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=54763&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=54763&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=54763&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4963">memoryz</a>
										</cite>
					<em>2010-8-6</em>
				</td>
				<td class="nums"><strong>105</strong> / <em>3050</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=54763&goto=lastpost#lastpost">2010-8-16 12:55</a></em>
					<cite>by <a href="space.php?username=dangqu">dangqu</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_56391" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=56391&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_56391"><a href="viewthread.php?tid=56391&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">黑龙江伊春一架客机失事</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=56391&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=56391&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=56391&amp;extra=page%3D5%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=11863">gongsundayun</a>
										</cite>
					<em>2010-8-24</em>
				</td>
				<td class="nums"><strong>105</strong> / <em>2495</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=56391&goto=lastpost#lastpost">2010-8-27 08:44</a></em>
					<cite>by <a href="space.php?username=nkpoper">nkpoper</a></cite>
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
	<div class="pages"><em>&nbsp;22278&nbsp;</em><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=1" class="first">1 ...</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=4" class="prev">&lsaquo;&lsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=3">3</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=4">4</a><strong>5</strong><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=6">6</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=7">7</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=8">8</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=9">9</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=10">10</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=11">11</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=12">12</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=6" class="next">&rsaquo;&rsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=349" class="last">... 349</a><kbd><input type="text" name="custompage" size="3" onkeydown="if(event.keyCode==13) {window.location='forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page='+this.value; return false;}" /></kbd></div>	</div>

  
	<div class="box">
			<span class="headactions"><a href="forumdisplay.php?fid=2&amp;page=5&amp;showoldetails=yes#online" class="nobdr"><img src="images/default/collapsed_yes.gif" alt="" /></a></span>
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
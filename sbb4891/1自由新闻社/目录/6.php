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
			window.location = 'forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&page=5';
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
<div class="pages"><em>&nbsp;22278&nbsp;</em><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=1" class="first">1 ...</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=5" class="prev">&lsaquo;&lsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=4">4</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=5">5</a><strong>6</strong><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=7">7</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=8">8</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=9">9</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=10">10</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=11">11</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=12">12</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=13">13</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=7" class="next">&rsaquo;&rsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=349" class="last">... 349</a><kbd><input type="text" name="custompage" size="3" onkeydown="if(event.keyCode==13) {window.location='forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page='+this.value; return false;}" /></kbd></div></div>

<div style="float:left;border:1px solid #CCC; border-bottom:none;;width:218px; background: url(/imgs/1984radio.jpg) 200px 2px no-repeat;padding:5px 0 5px 12px;margin:0px 0 0 13px">

<p><b><a href="/radio/index.php" target="_blank">1984FM</a></b><br /><b><a href="https://voxli.com/1984bbs" target="_blank">1984Chat</a></b>&nbsp;</p> 
</div>

<div style="clear:both;height:0px;width:100%;font-size:1px;">&nbsp;</div>

	<ul class="popupmenu_popup newspecialmenu" id="newspecial_menu" style="display: none">
		<li><a href="post.php?action=newthread&amp;fid=2&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">发新话题</a></li>		<li class="poll"><a href="post.php?action=newthread&amp;fid=2&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;special=1">发布投票</a></li>													</ul>
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

					<tbody id="normalthread_47865" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=47865&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_47865"><a href="viewthread.php?tid=47865&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">世博会发生踩踏事故</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=47865&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=47865&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=47865&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=9991">duck_1984</a>
										</cite>
					<em>2010-5-30</em>
				</td>
				<td class="nums"><strong>105</strong> / <em>3767</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=47865&goto=lastpost#lastpost">2010-6-3 00:43</a></em>
					<cite>by <a href="space.php?username=CCAV">CCAV</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_46983" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=46983&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_46983"><a href="viewthread.php?tid=46983&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">杰出华人代表薄瓜瓜英伦生活被披露</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=46983&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=46983&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=46983&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=21">大仙儿</a>
										</cite>
					<em>2009-5-13</em>
				</td>
				<td class="nums"><strong>105</strong> / <em>5836</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=46983&goto=lastpost#lastpost">2010-6-3 01:07</a></em>
					<cite>by <a href="space.php?username=2biu">2biu</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_16109" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=16109&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_16109"><a href="viewthread.php?tid=16109&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传，广东一些工厂发生汉维冲突</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=16109&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=16109&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=16109&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6824">右满舵</a>
										</cite>
					<em>2009-7-8</em>
				</td>
				<td class="nums"><strong>105</strong> / <em>2450</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=16109&goto=lastpost#lastpost">2009-7-9 22:54</a></em>
					<cite>by <a href="space.php?username=MARS0079">MARS0079</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_6207" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=6207&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_6207"><a href="viewthread.php?tid=6207&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">李小琳严重伤害了中国人民的感情</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=6207&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=6207&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=6207&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3838">IP黨精神領袖</a>
										</cite>
					<em>2009-3-4</em>
				</td>
				<td class="nums"><strong>105</strong> / <em>2687</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=6207&goto=lastpost#lastpost">2009-3-10 21:52</a></em>
					<cite>by <a href="space.php?username=%C5%A3%C5%A3%CB%D5%B4%F2">牛牛苏打</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_30035" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=30035&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_30035"><a href="viewthread.php?tid=30035&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">BTChina被维护</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=30035&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=30035&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=30035&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3120">maurois</a>
										</cite>
					<em>2009-12-4</em>
				</td>
				<td class="nums"><strong>104</strong> / <em>2538</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=30035&goto=lastpost#lastpost">2009-12-7 12:20</a></em>
					<cite>by <a href="space.php?username=prosup">prosup</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_11581" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=11581&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_11581"><a href="viewthread.php?tid=11581&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">《南方都市报》：邓贵大是个纯朴的人！</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=11581&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=11581&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=11581&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4053">leaflet</a>
										</cite>
					<em>2009-5-22</em>
				</td>
				<td class="nums"><strong>104</strong> / <em>2165</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=11581&goto=lastpost#lastpost">2009-5-25 15:43</a></em>
					<cite>by <a href="space.php?username=Adon">Adon</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_41787" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=41787&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_41787"><a href="viewthread.php?tid=41787&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">《反恐24小时》播完第八季将终结</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=41787&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=41787&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=41787&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=11459">再世关羽</a>
										</cite>
					<em>2010-3-30</em>
				</td>
				<td class="nums"><strong>104</strong> / <em>1762</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=41787&goto=lastpost#lastpost">2010-6-1 17:34</a></em>
					<cite>by <a href="space.php?username=michaelsun1990">michaelsun1990</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_48452" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=48452&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_48452"><a href="viewthread.php?tid=48452&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">朝鲜向中国走私船开火 造成中方1死1伤</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=48452&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=48452&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=48452&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3202">glim</a>
										</cite>
					<em>2010-6-7</em>
				</td>
				<td class="nums"><strong>104</strong> / <em>2602</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=48452&goto=lastpost#lastpost">2010-6-8 22:18</a></em>
					<cite>by <a href="space.php?username=wahaha">wahaha</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_53583" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=53583&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_53583"><a href="viewthread.php?tid=53583&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">苏州通安发生强拆引发群众抗议</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=53583&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=53583&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=53583&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=9214">英雄贵姓</a>
										</cite>
					<em>2010-7-17</em>
				</td>
				<td class="nums"><strong>104</strong> / <em>3361</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=53583&goto=lastpost#lastpost">2010-7-23 08:32</a></em>
					<cite>by <a href="space.php?username=moatiger">moatiger</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_45688" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=45688&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_45688"><a href="viewthread.php?tid=45688&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">大学生在博客微辞世博会被“喝茶”</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=45688&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=45688&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=45688&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2213">核子力量</a>
										</cite>
					<em>2010-5-13</em>
				</td>
				<td class="nums"><strong>104</strong> / <em>3444</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=45688&goto=lastpost#lastpost">2010-8-18 14:46</a></em>
					<cite>by <a href="space.php?username=%B3%AC%BC%B6%C2%F3%D1%BF%CC%C7">超级麦芽糖</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_57435" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=57435&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_57435"><a href="viewthread.php?tid=57435&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">电影《建党伟业》众多明星加盟</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=57435&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=57435&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=57435&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=11814">河殇</a>
										</cite>
					<em>2010-7-11</em>
				</td>
				<td class="nums"><strong>104</strong> / <em>2658</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=57435&goto=lastpost#lastpost">2010-9-4 21:50</a></em>
					<cite>by <a href="space.php?username=C.C.">C.C.</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_57908" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=57908&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_57908"><a href="viewthread.php?tid=57908&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">各地民众纪念毛泽东亡故三十四周年</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=57908&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=57908&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=57908&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7">张书记</a>
										</cite>
					<em>2010-9-9</em>
				</td>
				<td class="nums"><strong>103</strong> / <em>1837</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=57908&goto=lastpost#lastpost">2010-9-26 14:19</a></em>
					<cite>by <a href="space.php?username=Passionate30">Passionate30</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_27177" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=27177&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_27177"><a href="viewthread.php?tid=27177&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">周济被免去教育部部长职务</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=27177&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=27177&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=27177&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4570">我卖糕的</a>
										</cite>
					<em>2009-10-31</em>
				</td>
				<td class="nums"><strong>103</strong> / <em>3088</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=27177&goto=lastpost#lastpost">2009-11-5 18:51</a></em>
					<cite>by <a href="space.php?username=%C2%ED%C2%B9">马鹿</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_28685" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=28685&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_28685"><a href="viewthread.php?tid=28685&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">“钉子户”夫妇向强拆者扔燃烧瓶</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=28685&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=28685&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=28685&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5978">散光</a>
										</cite>
					<em>2009-11-3</em>
				</td>
				<td class="nums"><strong>103</strong> / <em>2010</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=28685&goto=lastpost#lastpost">2009-11-22 19:58</a></em>
					<cite>by <a href="space.php?username=neversay">neversay</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_31592" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=31592&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_31592"><a href="viewthread.php?tid=31592&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">Twitter被伊朗黑客攻陷</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=31592&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=31592&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=31592&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8307">醉酒的马儿</a>
										</cite>
					<em>2009-12-18</em>
				</td>
				<td class="nums"><strong>103</strong> / <em>1874</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=31592&goto=lastpost#lastpost">2009-12-21 10:14</a></em>
					<cite>by <a href="space.php?username=%C0%CF%C8%FD%BD%C7">老三角</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_34555" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=34555&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_34555"><a href="viewthread.php?tid=34555&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">百度域名解析出问题  和twitter被攻击手法一样</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=34555&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=34555&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=34555&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2908">Geona</a>
										</cite>
					<em>2010-1-12</em>
				</td>
				<td class="nums"><strong>103</strong> / <em>2289</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=34555&goto=lastpost#lastpost">2010-1-13 15:17</a></em>
					<cite>by <a href="space.php?username=lilytw">lilytw</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_35801" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=35801&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_35801"><a href="viewthread.php?tid=35801&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">《孔子》票房惨淡 官方包场救援</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=35801&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=35801&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=35801&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2472">Noel</a>
										</cite>
					<em>2010-1-24</em>
				</td>
				<td class="nums"><strong>103</strong> / <em>2790</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=35801&goto=lastpost#lastpost">2010-1-29 20:05</a></em>
					<cite>by <a href="space.php?username=%BA%A3%B7%E7">海风</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_22311" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=22311&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_22311"><a href="viewthread.php?tid=22311&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">我国新兵种：瞪眼兵</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=22311&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=22311&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=22311&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=811">老胡</a>
										</cite>
					<em>2009-9-15</em>
				</td>
				<td class="nums"><strong>103</strong> / <em>2410</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=22311&goto=lastpost#lastpost">2009-9-21 17:12</a></em>
					<cite>by <a href="space.php?username=%D5%FD%D4%DA%B5%F4%C2%E4%B5%C4%D6%ED">正在掉落的猪</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_25019" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=25019&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_25019"><a href="viewthread.php?tid=25019&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">快讯：GFW加紧封锁</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=25019&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=25019&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=25019&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8705">littail</a>
										</cite>
					<em>2009-10-13</em>
				</td>
				<td class="nums"><strong>103</strong> / <em>2356</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=25019&goto=lastpost#lastpost">2009-10-16 00:57</a></em>
					<cite>by <a href="space.php?username=%B2%BB%EE%BF%D3%EB%BF%ED%C8%DD">不羁与宽容</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_13688" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=13688&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_13688"><a href="viewthread.php?tid=13688&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">钱组烈宪的案子有说法了</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=13688&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=13688&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=13688&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2804">musicool</a>
										</cite>
					<em>2009-6-12</em>
				</td>
				<td class="nums"><strong>103</strong> / <em>3406</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=13688&goto=lastpost#lastpost">2009-6-18 08:20</a></em>
					<cite>by <a href="space.php?username=xuduoly">xuduoly</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_15091" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=15091&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_15091"><a href="viewthread.php?tid=15091&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">奥特曼请注意，上海市闵行区出现不明怪兽</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=15091&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=15091&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=15091&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4963">memoryz</a>
										</cite>
					<em>2009-6-27</em>
				</td>
				<td class="nums"><strong>103</strong> / <em>2802</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=15091&goto=lastpost#lastpost">2009-6-30 18:45</a></em>
					<cite>by <a href="space.php?username=Jyamolmiry">Jyamolmiry</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_26411" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=26411&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_26411"><a href="viewthread.php?tid=26411&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">中共高层同床异梦 要求薄熙来不要搞红色恐怖</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=26411&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=26411&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=26411&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5759">路边社刊要</a>
										</cite>
					<em>2009-10-27</em>
				</td>
				<td class="nums"><strong>102</strong> / <em>5838</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=26411&goto=lastpost#lastpost">2009-12-30 16:38</a></em>
					<cite>by <a href="space.php?username=nightmare">nightmare</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_19819" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=19819&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_19819"><a href="viewthread.php?tid=19819&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">广电总局封杀“军械所”乐队</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=19819&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=19819&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=19819&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6327">chandler0819</a>
										</cite>
					<em>2009-8-13</em>
				</td>
				<td class="nums"><strong>102</strong> / <em>2669</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=19819&goto=lastpost#lastpost">2010-1-21 23:47</a></em>
					<cite>by <a href="space.php?username=%CD%F5%BE%C5%B5%B0">王九蛋</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_57408" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=57408&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_57408"><a href="viewthread.php?tid=57408&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">《光明日报》谈深圳政改称要问清“由谁统治”</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=57408&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=57408&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=57408&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=17047">壹玖捌肆</a>
										</cite>
					<em>2010-9-4</em>
				</td>
				<td class="nums"><strong>102</strong> / <em>2329</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=57408&goto=lastpost#lastpost">2010-9-9 20:09</a></em>
					<cite>by <a href="space.php?username=brady_huang">brady_huang</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_57860" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=57860&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_57860"><a href="viewthread.php?tid=57860&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">美国教会不顾反对执意要焚烧可兰经</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=57860&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=57860&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=57860&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=9517">老西</a>
										</cite>
					<em>2010-9-8</em>
				</td>
				<td class="nums"><strong>102</strong> / <em>1639</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=57860&goto=lastpost#lastpost">2010-9-13 14:10</a></em>
					<cite>by <a href="space.php?username=trortd">trortd</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_60727" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=60727&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_60727"><a href="viewthread.php?tid=60727&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">北京上海庆祝刘晓波获诺奖聚会被警方干扰 多人被拘捕</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=60727&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=60727&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=60727&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=19189">马玛</a>
										</cite>
					<em>2010-10-9</em>
				</td>
				<td class="nums"><strong>102</strong> / <em>5319</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=60727&goto=lastpost#lastpost">2010-10-11 21:24</a></em>
					<cite>by <a href="space.php?username=much">much</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_17670" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=17670&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_17670"><a href="viewthread.php?tid=17670&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">易中天称提问愚蠢拒绝回答 主持人被噎到无语</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=17670&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=17670&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=17670&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5464">上海帅哥</a>
										</cite>
					<em>2009-7-22</em>
				</td>
				<td class="nums"><strong>102</strong> / <em>2188</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=17670&goto=lastpost#lastpost">2009-7-26 18:09</a></em>
					<cite>by <a href="space.php?username=%B2%BB%D4%D9%BA%DE%CB%AE%B3%A4%B6%AB">不再恨水长东</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_6763" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=6763&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_6763"><a href="viewthread.php?tid=6763&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">几大BBS左右倾向及流量分析</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=6763&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=6763&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=6763&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1261">轻轻地想</a>
										</cite>
					<em>2009-3-10</em>
				</td>
				<td class="nums"><strong>102</strong> / <em>1982</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=6763&goto=lastpost#lastpost">2009-3-16 13:21</a></em>
					<cite>by <a href="space.php?username=liuwhores">liuwhores</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_45346" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=45346&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_45346"><a href="viewthread.php?tid=45346&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">袁腾飞称相信党相信政府</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=45346&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=45346&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=45346&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5464">上海帅哥</a>
										</cite>
					<em>2010-5-9</em>
				</td>
				<td class="nums"><strong>102</strong> / <em>3625</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=45346&goto=lastpost#lastpost">2010-5-15 14:29</a></em>
					<cite>by <a href="space.php?username=%CD%B8%C2%B6%C9%E7%BC%C7%D5%DF">透露社记者</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_24046" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=24046&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_24046"><a href="viewthread.php?tid=24046&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">母亲为不影响儿子参加阅兵隐瞒父亲死讯54天</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=24046&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=24046&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=24046&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2232">老杂疫</a>
										</cite>
					<em>2009-10-1</em>
				</td>
				<td class="nums"><strong>102</strong> / <em>1773</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=24046&goto=lastpost#lastpost">2009-10-10 21:04</a></em>
					<cite>by <a href="space.php?username=Loze">Loze</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_12731" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=12731&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_12731"><a href="viewthread.php?tid=12731&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">报个平安</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=12731&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=12731&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=12731&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5867">宋石男</a>
										</cite>
					<em>2009-6-5</em>
				</td>
				<td class="nums"><strong>102</strong> / <em>2036</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=12731&goto=lastpost#lastpost">2009-6-7 12:56</a></em>
					<cite>by <a href="space.php?username=%C0%CF%BA%FD%CD%BF%CB%B5">老糊涂说</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_34967" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=34967&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_34967"><a href="viewthread.php?tid=34967&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">上影厂专家：国内只花6000万人民币就能做出《阿凡达》的效果</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=34967&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=34967&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=34967&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=9591">吃吃饭</a>
										</cite>
					<em>2010-1-16</em>
				</td>
				<td class="nums"><strong>101</strong> / <em>2430</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=34967&goto=lastpost#lastpost">2010-2-2 10:24</a></em>
					<cite>by <a href="space.php?username=%CE%D2%B0%AE%B4%F2%B7%C9%BB%FA">我爱打飞机</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_29116" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=29116&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_29116"><a href="viewthread.php?tid=29116&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">农夫山泉水溶C100和统一蜜桃多汁不能食用</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=29116&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=29116&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=29116&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7">张书记</a>
										</cite>
					<em>2009-11-26</em>
				</td>
				<td class="nums"><strong>101</strong> / <em>2489</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=29116&goto=lastpost#lastpost">2009-12-3 09:41</a></em>
					<cite>by <a href="space.php?username=jt_inside">jt_inside</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_23785" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=23785&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_23785"><a href="viewthread.php?tid=23785&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">联大上的独裁者们</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=23785&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=23785&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=23785&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7">张书记</a>
										</cite>
					<em>2009-9-24</em>
				</td>
				<td class="nums"><strong>101</strong> / <em>2890</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=23785&goto=lastpost#lastpost">2009-9-29 10:43</a></em>
					<cite>by <a href="space.php?username=%BD%AD%BA%FE%CF%AF">江湖席</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_45232" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=45232&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_45232"><a href="viewthread.php?tid=45232&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">金正日访华</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=45232&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=45232&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=45232&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7919">路边社门卫</a>
										</cite>
					<em>2010-5-3</em>
				</td>
				<td class="nums"><strong>101</strong> / <em>3646</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=45232&goto=lastpost#lastpost">2010-5-9 05:24</a></em>
					<cite>by <a href="space.php?username=%B8%DF%BA%F4%BF%DA%BA%C5">高呼口号</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_45067" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=45067&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_45067"><a href="viewthread.php?tid=45067&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">左派网站声称袁腾飞涉危害国家罪被捕</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=45067&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=45067&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=45067&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=11478">中山首里</a>
										</cite>
					<em>2010-5-6</em>
				</td>
				<td class="nums"><strong>101</strong> / <em>2799</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=45067&goto=lastpost#lastpost">2010-5-9 10:17</a></em>
					<cite>by <a href="space.php?username=%CB%AC%CD%E1%CD%E1">爽歪歪</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_37585" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=37585&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_37585"><a href="viewthread.php?tid=37585&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">冯正虎回国，众网友接机</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=37585&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=37585&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=37585&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=9737">剁辣椒</a>
										</cite>
					<em>2010-2-12</em>
				</td>
				<td class="nums"><strong>100</strong> / <em>3413</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=37585&goto=lastpost#lastpost">2010-2-22 19:04</a></em>
					<cite>by <a href="space.php?username=dada">dada</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_17905" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=17905&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_17905"><a href="viewthread.php?tid=17905&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">全国整治互联网低俗之风专项行动成果喜人 传谣类网站全军覆没</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=17905&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=17905&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=17905&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2963">huangqinfeifei</a>
										</cite>
					<em>2009-7-22</em>
				</td>
				<td class="nums"><strong>100</strong> / <em>2620</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=17905&goto=lastpost#lastpost">2009-7-30 12:09</a></em>
					<cite>by <a href="space.php?username=%D0%A1%C2%ED%B8%E7">小马哥</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_26942" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=26942&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_26942"><a href="viewthread.php?tid=26942&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">警车护送下转运700只猫</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=26942&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=26942&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=26942&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7379">aiweiwei</a>
										</cite>
					<em>2009-11-2</em>
				</td>
				<td class="nums"><strong>100</strong> / <em>1337</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=26942&goto=lastpost#lastpost">2009-11-6 18:47</a></em>
					<cite>by <a href="space.php?username=shell.x">shell.x</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_32317" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=32317&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_32317"><a href="viewthread.php?tid=32317&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">1220台中绿营游行 抗议陈云林访台</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=32317&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=32317&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=32317&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=9991">duck_1984</a>
										</cite>
					<em>2009-12-21</em>
				</td>
				<td class="nums"><strong>100</strong> / <em>1717</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=32317&goto=lastpost#lastpost">2009-12-24 23:19</a></em>
					<cite>by <a href="space.php?username=%B3%D4%BA%C8%CD%E6%C0%D6">吃喝玩乐</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_29295" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=29295&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_29295"><a href="viewthread.php?tid=29295&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">波兰禁共产标志 乌克兰拟取缔共产党</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=29295&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=29295&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=29295&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7939">刘项</a>
										</cite>
					<em>2009-11-28</em>
				</td>
				<td class="nums"><strong>100</strong> / <em>2323</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=29295&goto=lastpost#lastpost">2010-6-26 03:37</a></em>
					<cite>by <a href="space.php?username=%B8%DF%BD%A5%C0%EB">高渐离</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_52269" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=52269&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_52269"><a href="viewthread.php?tid=52269&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传中宣部已发出《独唱团》北京出售禁令</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=52269&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=52269&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=52269&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7">张书记</a>
										</cite>
					<em>2010-7-9</em>
				</td>
				<td class="nums"><strong>100</strong> / <em>3894</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=52269&goto=lastpost#lastpost">2010-7-17 00:22</a></em>
					<cite>by <a href="space.php?username=%D6%D0%CF%B7%C5%AE%C9%FA%D3%D0%B6%BE">中戏女生有毒</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_5703" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=5703&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_5703"><a href="viewthread.php?tid=5703&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">诚贺钱烈宪先生康复出院</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=5703&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=5703&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=5703&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1886">gjlawyer</a>
										</cite>
					<em>2009-2-25</em>
				</td>
				<td class="nums"><strong>100</strong> / <em>1572</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=5703&goto=lastpost#lastpost">2009-3-9 05:23</a></em>
					<cite>by <a href="space.php?username=Rorshark">Rorshark</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_15710" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=15710&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_15710"><a href="viewthread.php?tid=15710&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">外交部成火爆舌战擂台 BBC记者对秦刚将计就计</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=15710&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=15710&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3156">helleon</a>
										</cite>
					<em>2009-7-2</em>
				</td>
				<td class="nums"><strong>99</strong> / <em>3678</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=15710&goto=lastpost#lastpost">2009-7-6 10:16</a></em>
					<cite>by <a href="space.php?username=%B3%C2%D3%E8%D2%C0">陈予依</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_43385" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=43385&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_43385"><a href="viewthread.php?tid=43385&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">宋祖德预测薄熙来将任常委政法委书记</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=43385&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=43385&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4638">江湖席</a>
										</cite>
					<em>2010-4-18</em>
				</td>
				<td class="nums"><strong>99</strong> / <em>2183</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=43385&goto=lastpost#lastpost">2010-4-21 17:59</a></em>
					<cite>by <a href="space.php?username=%BC%E2%BC%E2%BD%C7">尖尖角</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_22309" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=22309&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_22309"><a href="viewthread.php?tid=22309&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">毛太孙女周岁生日庆典活动在京隆重举行</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=22309&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=22309&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4570">我卖糕的</a>
										</cite>
					<em>2009-9-15</em>
				</td>
				<td class="nums"><strong>99</strong> / <em>1996</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=22309&goto=lastpost#lastpost">2009-9-19 14:11</a></em>
					<cite>by <a href="space.php?username=%CE%F7%C3%C5%B4%B5%C5%A3">西门吹牛</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_60411" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=60411&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_60411"><a href="viewthread.php?tid=60411&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">真理部最新指令：各网站删除诺贝尔奖专题</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=60411&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=60411&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=12310">炽鸢侯</a>
										</cite>
					<em>2010-10-8</em>
				</td>
				<td class="nums"><strong>98</strong> / <em>3942</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=60411&goto=lastpost#lastpost">2010-10-9 14:24</a></em>
					<cite>by <a href="space.php?username=Ramesses">Ramesses</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_44313" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=44313&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_44313"><a href="viewthread.php?tid=44313&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传中国股市要暴跌</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=44313&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=44313&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3969">langhua9527</a>
										</cite>
					<em>2010-4-28</em>
				</td>
				<td class="nums"><strong>98</strong> / <em>4298</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=44313&goto=lastpost#lastpost">2010-4-30 20:15</a></em>
					<cite>by <a href="space.php?username=YAFEI">YAFEI</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_46282" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=46282&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_46282"><a href="viewthread.php?tid=46282&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">内急女子在上海街头就地脱裤便溺</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=46282&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=46282&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4570">我卖糕的</a>
										</cite>
					<em>2010-5-18</em>
				</td>
				<td class="nums"><strong>98</strong> / <em>2650</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=46282&goto=lastpost#lastpost">2010-5-20 18:41</a></em>
					<cite>by <a href="space.php?username=FIFA%BB%E1%D4%B1">FIFA会员</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_53051" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=53051&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_53051"><a href="viewthread.php?tid=53051&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传国内各大报社将被禁止交换稿 一律采用新华社稿件</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=53051&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=53051&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=14632">轮回摆脱</a>
										</cite>
					<em>2010-7-13</em>
				</td>
				<td class="nums"><strong>98</strong> / <em>2200</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=53051&goto=lastpost#lastpost">2010-7-16 19:18</a></em>
					<cite>by <a href="space.php?username=kkk">kkk</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_28510" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=28510&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_28510"><a href="viewthread.php?tid=28510&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传，李鹏病危</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=28510&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=28510&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=9737">剁辣椒</a>
										</cite>
					<em>2009-11-17</em>
				</td>
				<td class="nums"><strong>98</strong> / <em>3335</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=28510&goto=lastpost#lastpost">2009-11-20 23:32</a></em>
					<cite>by <a href="space.php?username=%C6%D0%CC%E1%D2%BB%D2%B6">菩提一叶</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_28808" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=28808&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_28808"><a href="viewthread.php?tid=28808&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">解放军发出警告：大陆已仁至义尽 容忍马英九不是无限的</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=28808&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=28808&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2132">花想容</a>
										</cite>
					<em>2009-11-23</em>
				</td>
				<td class="nums"><strong>98</strong> / <em>2201</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=28808&goto=lastpost#lastpost">2009-11-30 11:51</a></em>
					<cite>by <a href="space.php?username=%B7%E8%BA%CD%C9%D0">疯和尚</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_28342" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=28342&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_28342"><a href="viewthread.php?tid=28342&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">复旦研究生陶韡烁向外媒表示“中国人有网络自由”</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=28342&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=28342&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6481">墙倒众人推</a>
										</cite>
					<em>2009-11-17</em>
				</td>
				<td class="nums"><strong>97</strong> / <em>2252</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=28342&goto=lastpost#lastpost">2009-11-19 19:29</a></em>
					<cite>by <a href="space.php?username=%D1%D5%C8%E7%D3%F1">颜如玉</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_21479" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=21479&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_21479"><a href="viewthread.php?tid=21479&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">七旬老太拒下公交车被乘客一脚踹下</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=21479&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=21479&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7919">路边社门卫</a>
										</cite>
					<em>2009-9-6</em>
				</td>
				<td class="nums"><strong>97</strong> / <em>1542</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=21479&goto=lastpost#lastpost">2009-9-8 21:05</a></em>
					<cite>by <a href="space.php?username=pinocchio">pinocchio</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_22160" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=22160&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_22160"><a href="viewthread.php?tid=22160&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">关于公盟税案所涉庄璐责任的意见</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=22160&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=22160&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7967">yuanshichao</a>
										</cite>
					<em>2009-9-12</em>
				</td>
				<td class="nums"><strong>97</strong> / <em>1690</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=22160&goto=lastpost#lastpost">2009-9-22 14:00</a></em>
					<cite>by <a href="space.php?username=%C7%E0%CA%AF">青石</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_36101" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=36101&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_36101"><a href="viewthread.php?tid=36101&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">我国或规定食用猫肉狗肉罚款五千拘留15天</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=36101&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=36101&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=852">未来他老爸</a>
										</cite>
					<em>2010-1-26</em>
				</td>
				<td class="nums"><strong>97</strong> / <em>1273</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=36101&goto=lastpost#lastpost">2010-1-29 12:14</a></em>
					<cite>by <a href="space.php?username=littail">littail</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_9279" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=9279&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_9279"><a href="viewthread.php?tid=9279&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">温总第三次訪广东 剑指粤港经济</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=9279&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=9279&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5140">kakagoing</a>
										</cite>
					<em>2009-4-18</em>
				</td>
				<td class="nums"><strong>97</strong> / <em>1222</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=9279&goto=lastpost#lastpost">2009-5-1 06:59</a></em>
					<cite>by <a href="space.php?username=kakagoing">kakagoing</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_17295" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=17295&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_17295"><a href="viewthread.php?tid=17295&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">新华社在乌鲁木齐拍新戏 群众演员热烈响应</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=17295&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=17295&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5464">上海帅哥</a>
										</cite>
					<em>2009-7-8</em>
				</td>
				<td class="nums"><strong>97</strong> / <em>2696</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=17295&goto=lastpost#lastpost">2009-7-21 14:10</a></em>
					<cite>by <a href="space.php?username=mo5298">mo5298</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_42791" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=42791&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_42791"><a href="viewthread.php?tid=42791&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">波兰总统乘坐的飞机在俄机场坠毁</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=42791&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=42791&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7231">海风</a>
										</cite>
					<em>2010-4-10</em>
				</td>
				<td class="nums"><strong>97</strong> / <em>2823</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=42791&goto=lastpost#lastpost">2010-4-12 07:04</a></em>
					<cite>by <a href="space.php?username=%D2%F9%C3%F1%C1%A6%C1%BF">淫民力量</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_42826" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=42826&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_42826"><a href="viewthread.php?tid=42826&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传，李洪志已病逝</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=42826&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=42826&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3884">一点五</a>
										</cite>
					<em>2010-4-12</em>
				</td>
				<td class="nums"><strong>97</strong> / <em>4624</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=42826&goto=lastpost#lastpost">2010-4-25 22:01</a></em>
					<cite>by <a href="space.php?username=hkxc">hkxc</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_46409" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=46409&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_46409"><a href="viewthread.php?tid=46409&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">达赖确认十一世班禅喇嘛已被软禁15年</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=46409&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=46409&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=9517">老西</a>
										</cite>
					<em>2010-5-20</em>
				</td>
				<td class="nums"><strong>97</strong> / <em>2715</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=46409&goto=lastpost#lastpost">2010-5-26 01:50</a></em>
					<cite>by <a href="space.php?username=%B3%E6%B6%B4%B6%B4">虫洞洞</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_42424" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=42424&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_42424"><a href="viewthread.php?tid=42424&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">央视转播屏蔽外文缩略词 从此不再&quot;NBA&quot;和&quot;CBA&quot;</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=42424&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=42424&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=10780">咧咧嘴</a>
										</cite>
					<em>2010-4-6</em>
				</td>
				<td class="nums"><strong>96</strong> / <em>2049</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=42424&goto=lastpost#lastpost">2010-4-11 22:10</a></em>
					<cite>by <a href="space.php?username=happy.c">happy.c</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_23830" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=23830&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_23830"><a href="viewthread.php?tid=23830&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">《锦州晚报》被停刊整顿</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=23830&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=23830&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6725">康宁</a>
										</cite>
					<em>2009-9-29</em>
				</td>
				<td class="nums"><strong>96</strong> / <em>3380</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=23830&goto=lastpost#lastpost">2009-10-4 21:00</a></em>
					<cite>by <a href="space.php?username=%D2%FD%D0%C4%B9%AB%D7%D3">引心公子</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_46447" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=46447&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_46447"><a href="viewthread.php?tid=46447&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">日本副外相：不承认台湾是中国的一部分</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=46447&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=46447&amp;extra=page%3D6%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6314">hhbcl1414</a>
										</cite>
					<em>2010-5-20</em>
				</td>
				<td class="nums"><strong>96</strong> / <em>1754</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=46447&goto=lastpost#lastpost">2010-5-28 15:04</a></em>
					<cite>by <a href="space.php?username=huixiong2lao">huixiong2lao</a></cite>
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
	<div class="pages"><em>&nbsp;22278&nbsp;</em><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=1" class="first">1 ...</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=5" class="prev">&lsaquo;&lsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=4">4</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=5">5</a><strong>6</strong><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=7">7</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=8">8</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=9">9</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=10">10</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=11">11</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=12">12</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=13">13</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=7" class="next">&rsaquo;&rsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=349" class="last">... 349</a><kbd><input type="text" name="custompage" size="3" onkeydown="if(event.keyCode==13) {window.location='forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page='+this.value; return false;}" /></kbd></div>	</div>

  
	<div class="box">
			<span class="headactions"><a href="forumdisplay.php?fid=2&amp;page=6&amp;showoldetails=yes#online" class="nobdr"><img src="images/default/collapsed_yes.gif" alt="" /></a></span>
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
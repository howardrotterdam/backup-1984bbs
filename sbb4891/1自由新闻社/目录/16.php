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
			window.location = 'forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&page=15';
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
<div class="pages"><em>&nbsp;22278&nbsp;</em><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=1" class="first">1 ...</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=15" class="prev">&lsaquo;&lsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=14">14</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=15">15</a><strong>16</strong><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=17">17</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=18">18</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=19">19</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=20">20</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=21">21</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=22">22</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=23">23</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=17" class="next">&rsaquo;&rsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=349" class="last">... 349</a><kbd><input type="text" name="custompage" size="3" onkeydown="if(event.keyCode==13) {window.location='forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page='+this.value; return false;}" /></kbd></div></div>

<div style="float:left;border:1px solid #CCC; border-bottom:none;;width:218px; background: url(/imgs/1984radio.jpg) 200px 2px no-repeat;padding:5px 0 5px 12px;margin:0px 0 0 13px">

<p><b><a href="/radio/index.php" target="_blank">1984FM</a></b><br /><b><a href="https://voxli.com/1984bbs" target="_blank">1984Chat</a></b>&nbsp;</p> 
</div>

<div style="clear:both;height:0px;width:100%;font-size:1px;">&nbsp;</div>

	<ul class="popupmenu_popup newspecialmenu" id="newspecial_menu" style="display: none">
		<li><a href="post.php?action=newthread&amp;fid=2&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">发新话题</a></li>		<li class="poll"><a href="post.php?action=newthread&amp;fid=2&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;special=1">发布投票</a></li>													</ul>
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

					<tbody id="normalthread_51462" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=51462&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_51462"><a href="viewthread.php?tid=51462&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">教授建议朱自清《背影》从课本中删除</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=51462&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=51462&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=13166">牛怒怒</a>
										</cite>
					<em>2010-7-2</em>
				</td>
				<td class="nums"><strong>62</strong> / <em>1636</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=51462&goto=lastpost#lastpost">2010-7-6 14:40</a></em>
					<cite>by <a href="space.php?username=%C0%EE%CE%A2%B0%BD">李微敖</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_32941" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=32941&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_32941"><a href="viewthread.php?tid=32941&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">《新京报》刊载李长江复出政治漫画</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=32941&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=32941&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8643">nikon</a>
										</cite>
					<em>2009-12-29</em>
				</td>
				<td class="nums"><strong>62</strong> / <em>2074</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=32941&goto=lastpost#lastpost">2010-1-2 12:55</a></em>
					<cite>by <a href="space.php?username=4dmx">4dmx</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_4541" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=4541&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_4541"><a href="viewthread.php?tid=4541&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传，胡可能失势</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=4541&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=4541&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2769">摇滚龙虾</a>
										</cite>
					<em>2009-2-10</em>
				</td>
				<td class="nums"><strong>62</strong> / <em>2211</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=4541&goto=lastpost#lastpost">2009-2-18 10:45</a></em>
					<cite>by <a href="space.php?username=peteryang84">peteryang84</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_5409" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=5409&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_5409"><a href="viewthread.php?tid=5409&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">我的好朋友文怀沙</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=5409&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=5409&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4030">和菜头</a>
										</cite>
					<em>2009-2-22</em>
				</td>
				<td class="nums"><strong>62</strong> / <em>1291</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=5409&goto=lastpost#lastpost">2009-2-28 22:41</a></em>
					<cite>by <a href="space.php?username=longum">longum</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_54691" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=54691&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_54691"><a href="viewthread.php?tid=54691&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">胡锦涛：文化工作者要坚决抵制庸俗低俗媚俗之风</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=54691&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=54691&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4570">我卖糕的</a>
										</cite>
					<em>2010-7-23</em>
				</td>
				<td class="nums"><strong>62</strong> / <em>1414</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=54691&goto=lastpost#lastpost">2010-8-7 11:41</a></em>
					<cite>by <a href="space.php?username=%C9%BD%C4%B7%B0%AE%B3%D4%CD%C1%B6%B9">山姆爱吃土豆</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_55453" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=55453&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_55453"><a href="viewthread.php?tid=55453&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">正版AV成大学性扫盲教材 女生主动索取</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=55453&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=55453&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=12952">极光掠天</a>
										</cite>
					<em>2010-8-14</em>
				</td>
				<td class="nums"><strong>62</strong> / <em>1994</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=55453&goto=lastpost#lastpost">2010-8-17 15:04</a></em>
					<cite>by <a href="space.php?username=%CE%E5%B4%FA%CD%B7%C4%BF%CF%AE%BD%FC%C6%BF">五代头目袭近瓶</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_7495" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=7495&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_7495"><a href="viewthread.php?tid=7495&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">重庆石桥铺一哨兵被打死 枪被抢 全城搜查</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=7495&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=7495&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2752">Fuchicom</a>
										</cite>
					<em>2009-3-20</em>
				</td>
				<td class="nums"><strong>62</strong> / <em>1851</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=7495&goto=lastpost#lastpost">2009-3-23 00:50</a></em>
					<cite>by <a href="space.php?username=%C4%D0%F7%C8%C4%D1%C3%C2">男魅难寐</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_8329" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=8329&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_8329"><a href="viewthread.php?tid=8329&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">郭德纲刚刚被新浪删掉的博文《人在江湖》</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=8329&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=8329&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2341">雾风</a>
										</cite>
					<em>2009-3-31</em>
				</td>
				<td class="nums"><strong>62</strong> / <em>1675</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=8329&goto=lastpost#lastpost">2009-4-3 07:25</a></em>
					<cite>by <a href="space.php?username=%B1%CC%D1%AA%CF%B4%D2%F8%C7%B9">碧血洗银枪</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_15342" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=15342&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_15342"><a href="viewthread.php?tid=15342&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">牛逼闪闪的三个卫生间</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=15342&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=15342&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=169">抑扬</a>
										</cite>
					<em>2009-6-29</em>
				</td>
				<td class="nums"><strong>62</strong> / <em>1630</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=15342&goto=lastpost#lastpost">2009-7-1 16:19</a></em>
					<cite>by <a href="space.php?username=%B3%B4%B7%B9">炒饭</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_15755" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=15755&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_15755"><a href="viewthread.php?tid=15755&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">九十多岁老领导的训斥</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=15755&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=15755&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4761">magicben</a>
										</cite>
					<em>2009-7-4</em>
				</td>
				<td class="nums"><strong>62</strong> / <em>2048</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=15755&goto=lastpost#lastpost">2009-7-6 17:19</a></em>
					<cite>by <a href="space.php?username=zq19871127">zq19871127</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_17065" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=17065&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_17065"><a href="viewthread.php?tid=17065&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">刚听同学说WW来内地了</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=17065&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=17065&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6709">andgzy</a>
										</cite>
					<em>2009-7-17</em>
				</td>
				<td class="nums"><strong>62</strong> / <em>1864</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=17065&goto=lastpost#lastpost">2009-7-19 00:40</a></em>
					<cite>by <a href="space.php?username=%B2%BB%BE%B4%C9%F1%B5%C4YODA">不敬神的YODA</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_45943" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=45943&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_45943"><a href="viewthread.php?tid=45943&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">马总统表示拒绝与伪政权合办“辛亥百年”</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=45943&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=45943&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3349">michael.zy</a>
										</cite>
					<em>2010-5-15</em>
				</td>
				<td class="nums"><strong>62</strong> / <em>1545</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=45943&goto=lastpost#lastpost">2010-5-18 07:49</a></em>
					<cite>by <a href="space.php?username=jimine">jimine</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_46116" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=46116&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_46116"><a href="viewthread.php?tid=46116&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">袁腾飞参观上海世博会</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=46116&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=46116&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4449">mj_luck13</a>
										</cite>
					<em>2010-5-17</em>
				</td>
				<td class="nums"><strong>62</strong> / <em>2305</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=46116&goto=lastpost#lastpost">2010-5-21 17:55</a></em>
					<cite>by <a href="space.php?username=gewei">gewei</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_40930" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=40930&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_40930"><a href="viewthread.php?tid=40930&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">影帝云南粉丝会：我不能喝你们的茶</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=40930&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=40930&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4570">我卖糕的</a>
										</cite>
					<em>2010-3-21</em>
				</td>
				<td class="nums"><strong>61</strong> / <em>1781</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=40930&goto=lastpost#lastpost">2010-3-23 22:05</a></em>
					<cite>by <a href="space.php?username=Candice">Candice</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_42961" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=42961&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_42961"><a href="viewthread.php?tid=42961&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">闾丘露薇主持凤凰台节目被“下课” 或因当局施压</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=42961&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=42961&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=80">国家罗汉</a>
										</cite>
					<em>2010-4-13</em>
				</td>
				<td class="nums"><strong>61</strong> / <em>1870</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=42961&goto=lastpost#lastpost">2010-4-16 14:43</a></em>
					<cite>by <a href="space.php?username=joexu">joexu</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_46764" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=46764&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_46764"><a href="viewthread.php?tid=46764&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">世博关注度急降70%</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=46764&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=46764&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8343">假装很青春</a>
										</cite>
					<em>2010-5-14</em>
				</td>
				<td class="nums"><strong>61</strong> / <em>2420</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=46764&goto=lastpost#lastpost">2010-5-23 15:39</a></em>
					<cite>by <a href="space.php?username=SalvadorDali">SalvadorDali</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_27703" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=27703&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_27703"><a href="viewthread.php?tid=27703&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">南京林业大学设校园红袖章干涉情侣亲昵行为</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=27703&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=27703&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8871">庄三水</a>
										</cite>
					<em>2009-11-9</em>
				</td>
				<td class="nums"><strong>61</strong> / <em>926</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=27703&goto=lastpost#lastpost">2009-11-16 14:15</a></em>
					<cite>by <a href="space.php?username=%C6%D0%CC%E1%D2%BB%D2%B6">菩提一叶</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_28822" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=28822&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_28822"><a href="viewthread.php?tid=28822&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">记者暗访甘肃“摸吧” 10块钱吧女可随便摸</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=28822&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=28822&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4570">我卖糕的</a>
										</cite>
					<em>2009-11-23</em>
				</td>
				<td class="nums"><strong>61</strong> / <em>1846</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=28822&goto=lastpost#lastpost">2009-11-26 08:43</a></em>
					<cite>by <a href="space.php?username=%B2%D8%E9%E1%D0%D6">藏獒兄</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_29281" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=29281&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_29281"><a href="viewthread.php?tid=29281&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">360发声明要求金山杀毒免费</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=29281&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=29281&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5464">上海帅哥</a>
										</cite>
					<em>2009-11-28</em>
				</td>
				<td class="nums"><strong>61</strong> / <em>1192</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=29281&goto=lastpost#lastpost">2009-12-3 00:50</a></em>
					<cite>by <a href="space.php?username=RunStop">RunStop</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_29506" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=29506&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_29506"><a href="viewthread.php?tid=29506&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">20岁女兵遭吉林省军区高官奸污再被灭口</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=29506&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=29506&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4591">bafield</a>
										</cite>
					<em>2009-12-1</em>
				</td>
				<td class="nums"><strong>61</strong> / <em>2716</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=29506&goto=lastpost#lastpost">2009-12-28 16:59</a></em>
					<cite>by <a href="space.php?username=milandodo">milandodo</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_22333" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=22333&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_22333"><a href="viewthread.php?tid=22333&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">北京开始要求异见人士在国庆前离京</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=22333&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=22333&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=21">大仙儿</a>
										</cite>
					<em>2009-9-15</em>
				</td>
				<td class="nums"><strong>61</strong> / <em>2303</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=22333&goto=lastpost#lastpost">2009-9-22 16:40</a></em>
					<cite>by <a href="space.php?username=%C6%BD%CB%AE%CC%C3">平水堂</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_17733" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=17733&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_17733"><a href="viewthread.php?tid=17733&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">真理部下令惩处新浪网易和讯泄密者</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=17733&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=17733&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1258">路边社记者</a>
										</cite>
					<em>2009-7-24</em>
				</td>
				<td class="nums"><strong>61</strong> / <em>2289</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=17733&goto=lastpost#lastpost">2009-7-27 12:03</a></em>
					<cite>by <a href="space.php?username=%BA%CE%B1%CA">何笔</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_3009" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=3009&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_3009"><a href="viewthread.php?tid=3009&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">你的捐款去哪儿啦？震后绵阳拟整修山寨美国国会</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=3009&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=3009&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2232">老杂疫</a>
										</cite>
					<em>2009-1-7</em>
				</td>
				<td class="nums"><strong>61</strong> / <em>1412</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=3009&goto=lastpost#lastpost">2009-8-14 17:10</a></em>
					<cite>by <a href="space.php?username=%CE%A7%B9%DB%B5%C4%C8%BA%D6%DA">围观的群众</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_19053" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=19053&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_19053"><a href="viewthread.php?tid=19053&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">爱国青年被“国旗大裤衩”伤害了感情</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=19053&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=19053&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2035">熊貓大仙</a>
										</cite>
					<em>2009-8-7</em>
				</td>
				<td class="nums"><strong>61</strong> / <em>1304</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=19053&goto=lastpost#lastpost">2009-8-17 18:51</a></em>
					<cite>by <a href="space.php?username=ilili">ilili</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_20038" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=20038&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_20038"><a href="viewthread.php?tid=20038&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">央音乐学院梁教授承认潜规则女生</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=20038&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=20038&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5720">zhuhexie2004</a>
										</cite>
					<em>2009-8-15</em>
				</td>
				<td class="nums"><strong>61</strong> / <em>2144</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=20038&goto=lastpost#lastpost">2009-8-19 09:35</a></em>
					<cite>by <a href="space.php?username=%CD%CF%B0%D1">拖把</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_35750" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=35750&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_35750"><a href="viewthread.php?tid=35750&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">中移动称转发&quot;黄段子&quot;短信功能将被停</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=35750&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=35750&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2398">遥子</a>
										</cite>
					<em>2010-1-13</em>
				</td>
				<td class="nums"><strong>61</strong> / <em>1092</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=35750&goto=lastpost#lastpost">2010-1-23 21:11</a></em>
					<cite>by <a href="space.php?username=musicool">musicool</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_38153" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=38153&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_38153"><a href="viewthread.php?tid=38153&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传，大同将独立出山西单独成为一个省</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=38153&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=38153&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=144">mfs0616</a>
										</cite>
					<em>2010-2-21</em>
				</td>
				<td class="nums"><strong>61</strong> / <em>2135</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=38153&goto=lastpost#lastpost">2010-3-5 18:37</a></em>
					<cite>by <a href="space.php?username=FreeRxs">FreeRxs</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_9652" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=9652&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_9652"><a href="viewthread.php?tid=9652&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">《南京！南京！》公映，日本不高兴</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=9652&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=9652&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5720">zhuhexie2004</a>
										</cite>
					<em>2009-4-24</em>
				</td>
				<td class="nums"><strong>61</strong> / <em>1038</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=9652&goto=lastpost#lastpost">2009-4-28 17:12</a></em>
					<cite>by <a href="space.php?username=%D6%BB%BF%B4%B2%BB%CB%B5%BB%B0">只看不说话</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_47235" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=47235&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_47235"><a href="viewthread.php?tid=47235&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">朝鲜在朝中边境部署迫击炮和火箭炮</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=47235&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=47235&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=11493">gzlxd</a>
										</cite>
					<em>2010-5-26</em>
				</td>
				<td class="nums"><strong>61</strong> / <em>2102</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=47235&goto=lastpost#lastpost">2010-5-30 11:02</a></em>
					<cite>by <a href="space.php?username=syll">syll</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_52556" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=52556&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_52556"><a href="viewthread.php?tid=52556&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传西安已被确定为第5个直辖市</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=52556&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=52556&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4570">我卖糕的</a>
										</cite>
					<em>2010-7-8</em>
				</td>
				<td class="nums"><strong>61</strong> / <em>1710</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=52556&goto=lastpost#lastpost">2010-7-12 11:08</a></em>
					<cite>by <a href="space.php?username=1980s">1980s</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_54213" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=54213&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_54213"><a href="viewthread.php?tid=54213&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">张艺谋新片《山楂树之恋》看哭审片领导</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=54213&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=54213&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=852">未来他老爸</a>
										</cite>
					<em>2010-7-29</em>
				</td>
				<td class="nums"><strong>61</strong> / <em>1959</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=54213&goto=lastpost#lastpost">2010-8-5 15:34</a></em>
					<cite>by <a href="space.php?username=luoboker">luoboker</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_15889" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=15889&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_15889"><a href="viewthread.php?tid=15889&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">影帝这回不炒菜了，改下煤井吃馒头了</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=15889&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=15889&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4570">我卖糕的</a>
										</cite>
					<em>2009-7-6</em>
				</td>
				<td class="nums"><strong>61</strong> / <em>1488</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=15889&goto=lastpost#lastpost">2009-7-8 21:22</a></em>
					<cite>by <a href="space.php?username=%B2%BB%BE%B4%C9%F1%B5%C4YODA">不敬神的YODA</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_55092" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=55092&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_55092"><a href="viewthread.php?tid=55092&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">一周图片新闻 8.9-8.15</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=55092&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=55092&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2232">老杂疫</a>
										</cite>
					<em>2010-8-10</em>
				</td>
				<td class="nums"><strong>61</strong> / <em>1513</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=55092&goto=lastpost#lastpost">2010-8-16 17:13</a></em>
					<cite>by <a href="space.php?username=%D7%F3%B0%B6%CA%B0%BB%C4">左岸拾荒</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_56522" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=56522&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_56522"><a href="viewthread.php?tid=56522&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">广东学者呼吁建立政治特区</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=56522&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=56522&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6612">无穷无尽</a>
										</cite>
					<em>2010-7-31</em>
				</td>
				<td class="nums"><strong>61</strong> / <em>1352</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=56522&goto=lastpost#lastpost">2010-8-26 22:06</a></em>
					<cite>by <a href="space.php?username=%C1%D6%D0%A6%D2%E2">林笑意</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_56266" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=56266&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_56266"><a href="viewthread.php?tid=56266&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">美国民众集会游行  抗议世贸遗址附近建清真寺</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=56266&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=56266&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2907">无言的山丘</a>
										</cite>
					<em>2010-8-23</em>
				</td>
				<td class="nums"><strong>61</strong> / <em>1027</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=56266&goto=lastpost#lastpost">2010-8-28 18:01</a></em>
					<cite>by <a href="space.php?username=roleyzhang">roleyzhang</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_56734" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=56734&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_56734"><a href="viewthread.php?tid=56734&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">李敖：爱台湾就承认它是中国一部分</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=56734&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=56734&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=852">未来他老爸</a>
										</cite>
					<em>2010-8-29</em>
				</td>
				<td class="nums"><strong>61</strong> / <em>877</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=56734&goto=lastpost#lastpost">2010-8-30 19:56</a></em>
					<cite>by <a href="space.php?username=lixing000">lixing000</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_57611" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=57611&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_57611"><a href="viewthread.php?tid=57611&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">胡锦涛：经济特区要办下去 要办得更好</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=57611&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=57611&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=15406">兽性大发小白兔</a>
										</cite>
					<em>2010-9-6</em>
				</td>
				<td class="nums"><strong>61</strong> / <em>1415</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=57611&goto=lastpost#lastpost">2010-9-7 13:35</a></em>
					<cite>by <a href="space.php?username=%B7%CA%C3%A8">肥猫</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_59673" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=59673&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_59673"><a href="viewthread.php?tid=59673&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">国美大选 陈黄双方疯狂拉票</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=59673&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=59673&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=15783">裝傻小Q</a>
										</cite>
					<em>2010-9-28</em>
				</td>
				<td class="nums"><strong>61</strong> / <em>1479</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=59673&goto=lastpost#lastpost">2010-10-1 08:03</a></em>
					<cite>by <a href="space.php?username=one">one</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_59691" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=59691&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_59691"><a href="viewthread.php?tid=59691&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传薄熙来十八大后将接李长春</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=59691&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=59691&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2744">王小西</a>
										</cite>
					<em>2010-9-29</em>
				</td>
				<td class="nums"><strong>61</strong> / <em>2130</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=59691&goto=lastpost#lastpost">2010-10-7 21:49</a></em>
					<cite>by <a href="space.php?username=%C2%DD%F2%CF%B7%DB">螺蛳粉</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_6959" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=6959&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_6959"><a href="viewthread.php?tid=6959&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">因涉嫌辱华 韩剧《该隐与亚伯》中文字幕组悲愤停工</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=6959&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=6959&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1864">jjcolor</a>
										</cite>
					<em>2009-3-13</em>
				</td>
				<td class="nums"><strong>61</strong> / <em>1112</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=6959&goto=lastpost#lastpost">2009-3-15 10:04</a></em>
					<cite>by <a href="space.php?username=%B9%D6%B9%D6%CE%EF">怪怪物</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_660" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=660&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_660"><a href="viewthread.php?tid=660&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">为宋太妃献礼 国家草台大剧院上演春宫戏</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=660&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=660&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=754">韶山带毛肉</a>
										</cite>
					<em>2008-10-29</em>
				</td>
				<td class="nums"><strong>60</strong> / <em>1918</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=660&goto=lastpost#lastpost">2009-5-10 20:58</a></em>
					<cite>by <a href="space.php?username=weke">weke</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_27760" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=27760&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_27760"><a href="viewthread.php?tid=27760&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">韩国辱华影片获大奖 充斥对中华的刻骨仇恨</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=27760&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=27760&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7002">luugoo</a>
										</cite>
					<em>2009-11-11</em>
				</td>
				<td class="nums"><strong>60</strong> / <em>1321</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=27760&goto=lastpost#lastpost">2009-11-14 23:08</a></em>
					<cite>by <a href="space.php?username=%CE%F7%C3%C5%B4%B5%C5%A3">西门吹牛</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_28382" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=28382&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_28382"><a href="viewthread.php?tid=28382&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">当东莞政府向《南方日报》记者塞了5万元……</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=28382&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=28382&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5831">yaoloucun</a>
										</cite>
					<em>2009-11-18</em>
				</td>
				<td class="nums"><strong>60</strong> / <em>1878</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=28382&goto=lastpost#lastpost">2009-11-22 14:52</a></em>
					<cite>by <a href="space.php?username=hello">hello</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_29124" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=29124&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_29124"><a href="viewthread.php?tid=29124&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">黑龙江鹤岗煤矿爆炸 139人被困井下</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=29124&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=29124&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2160">浣尘</a>
										</cite>
					<em>2009-11-21</em>
				</td>
				<td class="nums"><strong>60</strong> / <em>845</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=29124&goto=lastpost#lastpost">2009-11-28 16:09</a></em>
					<cite>by <a href="space.php?username=%BB%C6%B0%A2%B9%B7">黄阿狗</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_29550" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=29550&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_29550"><a href="viewthread.php?tid=29550&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传，中央将正式定位上海为金融中心</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=29550&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=29550&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8922">阳光不锈</a>
										</cite>
					<em>2009-12-1</em>
				</td>
				<td class="nums"><strong>60</strong> / <em>1625</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=29550&goto=lastpost#lastpost">2009-12-3 14:21</a></em>
					<cite>by <a href="space.php?username=%C1%F5%B1%A6%B8%BB">刘宝富</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_28848" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=28848&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_28848"><a href="viewthread.php?tid=28848&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">杨宪益先生逝世</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=28848&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=28848&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=476">会飞的猪</a>
										</cite>
					<em>2009-11-23</em>
				</td>
				<td class="nums"><strong>60</strong> / <em>1243</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=28848&goto=lastpost#lastpost">2009-12-18 15:09</a></em>
					<cite>by <a href="space.php?username=ZBI">ZBI</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_39910" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=39910&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_39910"><a href="viewthread.php?tid=39910&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">人大代表刘庆宁建议信访喊口号、静坐应该判刑</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=39910&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=39910&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3202">glim</a>
										</cite>
					<em>2010-3-11</em>
				</td>
				<td class="nums"><strong>60</strong> / <em>1154</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=39910&goto=lastpost#lastpost">2010-3-17 12:30</a></em>
					<cite>by <a href="space.php?username=dj9735215">dj9735215</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_40768" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=40768&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_40768"><a href="viewthread.php?tid=40768&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传，中共开始限制网络海外出口的流量</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=40768&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=40768&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=144">mfs0616</a>
										</cite>
					<em>2010-3-20</em>
				</td>
				<td class="nums"><strong>60</strong> / <em>2282</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=40768&goto=lastpost#lastpost">2010-3-22 21:32</a></em>
					<cite>by <a href="space.php?username=%CE%E5%B4%FA%CD%B7%C4%BF%CF%AE%BD%FC%C6%BF">五代头目袭近瓶</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_46511" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=46511&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_46511"><a href="viewthread.php?tid=46511&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">公民因身着“敏感T恤”参加世博会被谈话</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=46511&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=46511&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8709">szdos</a>
										</cite>
					<em>2010-5-20</em>
				</td>
				<td class="nums"><strong>60</strong> / <em>2410</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=46511&goto=lastpost#lastpost">2010-5-23 23:06</a></em>
					<cite>by <a href="space.php?username=%E3%C2%C8%BB%CE%DE%D6%AA">懵然无知</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_46730" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=46730&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_46730"><a href="viewthread.php?tid=46730&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">俄伏尔加河大桥发生“蛇形共振”</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=46730&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=46730&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=10890">xiaohe1120</a>
										</cite>
					<em>2010-5-22</em>
				</td>
				<td class="nums"><strong>60</strong> / <em>1864</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=46730&goto=lastpost#lastpost">2010-5-25 08:46</a></em>
					<cite>by <a href="space.php?username=xiaohe1120">xiaohe1120</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_34832" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=34832&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_34832"><a href="viewthread.php?tid=34832&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">美国将台湾列为免签证国家</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=34832&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=34832&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6314">hhbcl1414</a>
										</cite>
					<em>2010-1-15</em>
				</td>
				<td class="nums"><strong>60</strong> / <em>1629</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=34832&goto=lastpost#lastpost">2010-1-21 22:21</a></em>
					<cite>by <a href="space.php?username=%CE%F7%C3%C5%B4%B5%C5%A3">西门吹牛</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_34251" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=34251&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_34251"><a href="viewthread.php?tid=34251&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">陈巧文被警员带走调查陈景辉等将声援</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=34251&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=34251&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5301">ipodyoung</a>
										</cite>
					<em>2010-1-9</em>
				</td>
				<td class="nums"><strong>60</strong> / <em>881</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=34251&goto=lastpost#lastpost">2010-1-27 12:34</a></em>
					<cite>by <a href="space.php?username=malonso">malonso</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_38684" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=38684&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_38684"><a href="viewthread.php?tid=38684&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">河南鲁山警方称感冒冲剂致犯人生殖器损伤并死亡</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=38684&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=38684&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=10890">xiaohe1120</a>
										</cite>
					<em>2010-2-25</em>
				</td>
				<td class="nums"><strong>60</strong> / <em>1599</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=38684&goto=lastpost#lastpost">2010-2-27 23:06</a></em>
					<cite>by <a href="space.php?username=ChrisDempsey">ChrisDempsey</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_39244" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=39244&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_39244"><a href="viewthread.php?tid=39244&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">倪萍委员客串娱记 冯小刚牛皮癣发飙</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=39244&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=39244&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2232">老杂疫</a>
										</cite>
					<em>2010-3-5</em>
				</td>
				<td class="nums"><strong>60</strong> / <em>1732</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=39244&goto=lastpost#lastpost">2010-3-9 18:23</a></em>
					<cite>by <a href="space.php?username=%D6%DA%B5%E4%BE%A8%F6%EF">众典鲸鲲</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_39643" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=39643&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_39643"><a href="viewthread.php?tid=39643&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">体育副总局长：夺冠后应先谢国家再谢爹妈</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=39643&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=39643&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=9991">duck_1984</a>
										</cite>
					<em>2010-3-8</em>
				</td>
				<td class="nums"><strong>60</strong> / <em>1254</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=39643&goto=lastpost#lastpost">2010-3-11 15:45</a></em>
					<cite>by <a href="space.php?username=bigman510">bigman510</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_21710" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=21710&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_21710"><a href="viewthread.php?tid=21710&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">储君与薄熙来的竞争 沉稳蛰伏终出头</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=21710&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=21710&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=80">国家罗汉</a>
										</cite>
					<em>2009-9-9</em>
				</td>
				<td class="nums"><strong>60</strong> / <em>3149</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=21710&goto=lastpost#lastpost">2009-9-18 08:52</a></em>
					<cite>by <a href="space.php?username=anitalan">anitalan</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_23038" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=23038&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_23038"><a href="viewthread.php?tid=23038&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">乌有之乡：《建国大业》是反动派的《亡国挽歌》</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=23038&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=23038&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3843">尼古拉</a>
										</cite>
					<em>2009-9-22</em>
				</td>
				<td class="nums"><strong>60</strong> / <em>1501</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=23038&goto=lastpost#lastpost">2009-9-25 01:26</a></em>
					<cite>by <a href="space.php?username=%CE%F7%C3%C5%B4%B5%C5%A3">西门吹牛</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_23451" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=23451&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_23451"><a href="viewthread.php?tid=23451&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">毛新宇称应将开国领袖诞辰列入法定假日</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=23451&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=23451&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8301">lqunl</a>
										</cite>
					<em>2009-9-26</em>
				</td>
				<td class="nums"><strong>60</strong> / <em>1040</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=23451&goto=lastpost#lastpost">2009-9-27 12:08</a></em>
					<cite>by <a href="space.php?username=c6658">c6658</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_23475" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=23475&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_23475"><a href="viewthread.php?tid=23475&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">孙中山画像亮相天安门</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=23475&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=23475&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7093">elfix</a>
										</cite>
					<em>2009-9-26</em>
				</td>
				<td class="nums"><strong>60</strong> / <em>1493</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=23475&goto=lastpost#lastpost">2009-9-28 20:37</a></em>
					<cite>by <a href="space.php?username=%BB%A8%CF%EB%C8%DD">花想容</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_25176" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=25176&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_25176"><a href="viewthread.php?tid=25176&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">56根民族团结柱将有望永久矗立天安门广场</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=25176&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=25176&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5464">上海帅哥</a>
										</cite>
					<em>2009-10-5</em>
				</td>
				<td class="nums"><strong>60</strong> / <em>1267</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=25176&goto=lastpost#lastpost">2009-10-15 21:20</a></em>
					<cite>by <a href="space.php?username=astding">astding</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_17236" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=17236&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_17236"><a href="viewthread.php?tid=17236&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">302期的《新周刊》很反动</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=17236&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=17236&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7913">hug</a>
										</cite>
					<em>2009-7-19</em>
				</td>
				<td class="nums"><strong>60</strong> / <em>1969</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=17236&goto=lastpost#lastpost">2009-7-23 18:47</a></em>
					<cite>by <a href="space.php?username=%BA%CE%B1%CA">何笔</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_5193" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=5193&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																					<img src="images/default/digest_1.gif" alt="火星帖 1" />
										 </label>
																				<span id="thread_5193"><a href="viewthread.php?tid=5193&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">澳洲SBS：一群登山者拍到的……</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=5193&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=5193&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2701">gossipeveryday</a>
										</cite>
					<em>2009-2-19</em>
				</td>
				<td class="nums"><strong>60</strong> / <em>2943</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=5193&goto=lastpost#lastpost">2009-9-3 16:38</a></em>
					<cite>by <a href="space.php?username=HENGXIN">HENGXIN</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_54919" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=54919&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_54919"><a href="viewthread.php?tid=54919&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">薄熙来与百所高校学生会主席座谈唱红歌</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=54919&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=54919&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4570">我卖糕的</a>
										</cite>
					<em>2010-8-8</em>
				</td>
				<td class="nums"><strong>60</strong> / <em>997</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=54919&goto=lastpost#lastpost">2010-8-16 12:15</a></em>
					<cite>by <a href="space.php?username=%CE%AA%C1%CB%C1%FA%B9%AB%BE%F4">为了龙公爵</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_56588" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=56588&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_56588"><a href="viewthread.php?tid=56588&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">四川外语学院排练8国语言诵读《共产党宣言》</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=56588&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=56588&amp;extra=page%3D16%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7">张书记</a>
										</cite>
					<em>2010-8-27</em>
				</td>
				<td class="nums"><strong>60</strong> / <em>1041</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=56588&goto=lastpost#lastpost">2010-8-30 08:08</a></em>
					<cite>by <a href="space.php?username=%B0%A2V">阿V</a></cite>
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
	<div class="pages"><em>&nbsp;22278&nbsp;</em><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=1" class="first">1 ...</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=15" class="prev">&lsaquo;&lsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=14">14</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=15">15</a><strong>16</strong><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=17">17</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=18">18</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=19">19</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=20">20</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=21">21</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=22">22</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=23">23</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=17" class="next">&rsaquo;&rsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=349" class="last">... 349</a><kbd><input type="text" name="custompage" size="3" onkeydown="if(event.keyCode==13) {window.location='forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page='+this.value; return false;}" /></kbd></div>	</div>

  
	<div class="box">
			<span class="headactions"><a href="forumdisplay.php?fid=2&amp;page=16&amp;showoldetails=yes#online" class="nobdr"><img src="images/default/collapsed_yes.gif" alt="" /></a></span>
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
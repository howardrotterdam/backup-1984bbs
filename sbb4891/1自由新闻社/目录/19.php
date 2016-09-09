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
			window.location = 'forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&page=18';
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
<div class="pages"><em>&nbsp;22278&nbsp;</em><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=1" class="first">1 ...</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=18" class="prev">&lsaquo;&lsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=17">17</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=18">18</a><strong>19</strong><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=20">20</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=21">21</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=22">22</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=23">23</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=24">24</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=25">25</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=26">26</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=20" class="next">&rsaquo;&rsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=349" class="last">... 349</a><kbd><input type="text" name="custompage" size="3" onkeydown="if(event.keyCode==13) {window.location='forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page='+this.value; return false;}" /></kbd></div></div>

<div style="float:left;border:1px solid #CCC; border-bottom:none;;width:218px; background: url(/imgs/1984radio.jpg) 200px 2px no-repeat;padding:5px 0 5px 12px;margin:0px 0 0 13px">

<p><b><a href="/radio/index.php" target="_blank">1984FM</a></b><br /><b><a href="https://voxli.com/1984bbs" target="_blank">1984Chat</a></b>&nbsp;</p> 
</div>

<div style="clear:both;height:0px;width:100%;font-size:1px;">&nbsp;</div>

	<ul class="popupmenu_popup newspecialmenu" id="newspecial_menu" style="display: none">
		<li><a href="post.php?action=newthread&amp;fid=2&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">发新话题</a></li>		<li class="poll"><a href="post.php?action=newthread&amp;fid=2&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;special=1">发布投票</a></li>													</ul>
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

					<tbody id="normalthread_7862" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=7862&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_7862"><a href="viewthread.php?tid=7862&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">唯色：这个7分多钟的视频啊……</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=7862&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=7862&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4088">谎蛋派戏剧</a>
										</cite>
					<em>2009-3-26</em>
				</td>
				<td class="nums"><strong>57</strong> / <em>2109</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=7862&goto=lastpost#lastpost">2009-3-30 02:28</a></em>
					<cite>by <a href="space.php?username=dingxx">dingxx</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_8247" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=8247&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_8247"><a href="viewthread.php?tid=8247&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">北京西山福田公墓</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=8247&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=8247&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4449">mj_luck13</a>
										</cite>
					<em>2009-3-28</em>
				</td>
				<td class="nums"><strong>57</strong> / <em>1428</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=8247&goto=lastpost#lastpost">2009-4-3 00:39</a></em>
					<cite>by <a href="space.php?username=luckyray">luckyray</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_13038" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=13038&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_13038"><a href="viewthread.php?tid=13038&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">2009年6月：兲朝八路誓死剿灭侵华日军！</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=13038&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=13038&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4259">栏杆拍遍</a>
										</cite>
					<em>2009-6-8</em>
				</td>
				<td class="nums"><strong>57</strong> / <em>1071</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=13038&goto=lastpost#lastpost">2009-6-12 00:06</a></em>
					<cite>by <a href="space.php?username=%B4%F3%C8%CB%A3%AC%D3%D0%D0%D8%C6%F7">大人，有胸器</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_15548" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=15548&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_15548"><a href="viewthread.php?tid=15548&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">为北大国庆方阵，校内又吵上了</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=15548&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=15548&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6295">君宝同学</a>
										</cite>
					<em>2009-7-1</em>
				</td>
				<td class="nums"><strong>57</strong> / <em>2035</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=15548&goto=lastpost#lastpost">2009-7-16 01:08</a></em>
					<cite>by <a href="space.php?username=%CE%A7%B9%DB%B5%C4%C8%BA%D6%DA">围观的群众</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_42602" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=42602&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_42602"><a href="viewthread.php?tid=42602&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">全国普遍地区无法正常访问互联网</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=42602&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=42602&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=10448">棉胎</a>
										</cite>
					<em>2010-4-9</em>
				</td>
				<td class="nums"><strong>57</strong> / <em>1755</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=42602&goto=lastpost#lastpost">2010-4-10 00:52</a></em>
					<cite>by <a href="space.php?username=nxalp325">nxalp325</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_42359" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=42359&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_42359"><a href="viewthread.php?tid=42359&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">艾未未去成都西安路派出所报案</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=42359&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=42359&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=10708">dishikun</a>
										</cite>
					<em>2010-4-6</em>
				</td>
				<td class="nums"><strong>57</strong> / <em>2044</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=42359&goto=lastpost#lastpost">2010-4-30 12:41</a></em>
					<cite>by <a href="space.php?username=Yhard">Yhard</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_19539" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=19539&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_19539"><a href="viewthread.php?tid=19539&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">2009年7月17日公盟被抄视频</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=19539&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=19539&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4231">dangqu</a>
										</cite>
					<em>2009-8-13</em>
				</td>
				<td class="nums"><strong>57</strong> / <em>996</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=19539&goto=lastpost#lastpost">2009-8-14 15:16</a></em>
					<cite>by <a href="space.php?username=%BB%A8%CF%EB%C8%DD">花想容</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_19401" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=19401&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_19401"><a href="viewthread.php?tid=19401&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">党开始密谋处理公盟捐款事</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=19401&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=19401&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1786">拆迁办</a>
										</cite>
					<em>2009-8-11</em>
				</td>
				<td class="nums"><strong>57</strong> / <em>1586</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=19401&goto=lastpost#lastpost">2009-8-14 18:18</a></em>
					<cite>by <a href="space.php?username=anja">anja</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_21327" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=21327&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_21327"><a href="viewthread.php?tid=21327&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">快讯：Google被墙</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=21327&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=21327&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2359">天翼</a>
										</cite>
					<em>2009-9-3</em>
				</td>
				<td class="nums"><strong>57</strong> / <em>1032</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=21327&goto=lastpost#lastpost">2009-9-4 11:45</a></em>
					<cite>by <a href="space.php?username=safin0609">safin0609</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_18596" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=18596&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_18596"><a href="viewthread.php?tid=18596&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">东突威胁我天朝</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=18596&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=18596&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6892">project2501</a>
										</cite>
					<em>2009-8-2</em>
				</td>
				<td class="nums"><strong>56</strong> / <em>903</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=18596&goto=lastpost#lastpost">2009-8-3 23:30</a></em>
					<cite>by <a href="space.php?username=%D7%F3%B0%B6%A1%FB%D3%D2%B0%B6">左岸←右岸</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_18922" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=18922&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_18922"><a href="viewthread.php?tid=18922&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">真理部最新指令：删除访民被强奸事件文章</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=18922&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=18922&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5759">路边社刊要</a>
										</cite>
					<em>2009-8-5</em>
				</td>
				<td class="nums"><strong>56</strong> / <em>1871</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=18922&goto=lastpost#lastpost">2009-8-8 12:25</a></em>
					<cite>by <a href="space.php?username=syriana">syriana</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_19770" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=19770&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_19770"><a href="viewthread.php?tid=19770&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">河南省卫生厅秋后算账 郑大一附院未经许可泄漏“开胸验肺”</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=19770&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=19770&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1770">nustbobo</a>
										</cite>
					<em>2009-8-13</em>
				</td>
				<td class="nums"><strong>56</strong> / <em>1138</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=19770&goto=lastpost#lastpost">2009-8-15 19:22</a></em>
					<cite>by <a href="space.php?username=%D7%F3%B0%B6%A1%FB%D3%D2%B0%B6">左岸←右岸</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_20164" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=20164&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_20164"><a href="viewthread.php?tid=20164&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">真理部最新指令：迅速屏蔽与央视大楼有关的词组搜索</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=20164&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=20164&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=448">路边社总编室</a>
										</cite>
					<em>2009-8-20</em>
				</td>
				<td class="nums"><strong>56</strong> / <em>1754</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=20164&goto=lastpost#lastpost">2009-8-24 12:11</a></em>
					<cite>by <a href="space.php?username=WJ87">WJ87</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_20804" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=20804&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_20804"><a href="viewthread.php?tid=20804&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">前《文汇报》驻大连记者姜维平回忆薄熙来</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=20804&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=20804&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5588">我家旺财有喜了</a>
										</cite>
					<em>2009-8-27</em>
				</td>
				<td class="nums"><strong>56</strong> / <em>1818</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=20804&goto=lastpost#lastpost">2009-9-4 13:48</a></em>
					<cite>by <a href="space.php?username=%CE%D2%BC%D2%CD%FA%B2%C6%D3%D0%CF%B2%C1%CB">我家旺财有喜了</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_20379" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=20379&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_20379"><a href="viewthread.php?tid=20379&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">南京一位自称“大腕级政治犯”的成都奇遇</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=20379&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=20379&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3996">羊皮鬼</a>
										</cite>
					<em>2009-8-23</em>
				</td>
				<td class="nums"><strong>56</strong> / <em>2245</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=20379&goto=lastpost#lastpost">2009-9-13 23:36</a></em>
					<cite>by <a href="space.php?username=kingwxd">kingwxd</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_23598" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=23598&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_23598"><a href="viewthread.php?tid=23598&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传，由电子科大研发的即时通讯和邮件监控即将全国部署</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=23598&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=23598&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6652">刻录光盘</a>
										</cite>
					<em>2009-9-27</em>
				</td>
				<td class="nums"><strong>56</strong> / <em>1462</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=23598&goto=lastpost#lastpost">2009-9-29 16:21</a></em>
					<cite>by <a href="space.php?username=%D7%F3%B0%B6%A1%FB%D3%D2%B0%B6">左岸←右岸</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_25087" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=25087&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_25087"><a href="viewthread.php?tid=25087&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">饭否即将回归</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=25087&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=25087&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=263">WJ87</a>
										</cite>
					<em>2009-10-14</em>
				</td>
				<td class="nums"><strong>56</strong> / <em>1610</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=25087&goto=lastpost#lastpost">2009-10-19 13:15</a></em>
					<cite>by <a href="space.php?username=liuropot">liuropot</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_26139" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=26139&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_26139"><a href="viewthread.php?tid=26139&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">六四受害者方政重新站立 被邀请参加美国众议院舞会</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=26139&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=26139&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6988">fp456789</a>
										</cite>
					<em>2009-10-25</em>
				</td>
				<td class="nums"><strong>56</strong> / <em>1658</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=26139&goto=lastpost#lastpost">2009-10-28 09:40</a></em>
					<cite>by <a href="space.php?username=depthsky">depthsky</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_48008" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=48008&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_48008"><a href="viewthread.php?tid=48008&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">日本首相鸠山由纪夫将辞职</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=48008&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=48008&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4638">江湖席</a>
										</cite>
					<em>2010-6-2</em>
				</td>
				<td class="nums"><strong>56</strong> / <em>984</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=48008&goto=lastpost#lastpost">2010-6-2 22:35</a></em>
					<cite>by <a href="space.php?username=%C6%D0%CC%E1%D2%BB%D2%B6">菩提一叶</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_43002" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=43002&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_43002"><a href="viewthread.php?tid=43002&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">中国青年政治学院副教授杨支柱拒绝服从计划生育被解聘</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=43002&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=43002&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1254">任方言</a>
										</cite>
					<em>2010-4-3</em>
				</td>
				<td class="nums"><strong>56</strong> / <em>1474</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=43002&goto=lastpost#lastpost">2010-6-11 01:12</a></em>
					<cite>by <a href="space.php?username=colaman">colaman</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_49368" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=49368&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_49368"><a href="viewthread.php?tid=49368&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">共军夜间射击在枪支准星涂荧光粉等革新遭剔除</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=49368&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=49368&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1157">bester89</a>
										</cite>
					<em>2010-6-13</em>
				</td>
				<td class="nums"><strong>56</strong> / <em>2177</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=49368&goto=lastpost#lastpost">2010-6-15 13:23</a></em>
					<cite>by <a href="space.php?username=%CC%D8%C7%E9%C8%CB%D4%B1">特情人员</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_50233" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=50233&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_50233"><a href="viewthread.php?tid=50233&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">美参议院欲授权总统紧急状态下关闭互联网</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=50233&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=50233&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2804">musicool</a>
										</cite>
					<em>2009-9-28</em>
				</td>
				<td class="nums"><strong>56</strong> / <em>1239</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=50233&goto=lastpost#lastpost">2010-6-22 02:37</a></em>
					<cite>by <a href="space.php?username=DaemonEye">DaemonEye</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_50093" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=50093&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_50093"><a href="viewthread.php?tid=50093&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">赵本山：我不是“老江湖” 国内不存在黑社会</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=50093&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=50093&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=17">eat.eat</a>
										</cite>
					<em>2010-6-19</em>
				</td>
				<td class="nums"><strong>56</strong> / <em>1132</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=50093&goto=lastpost#lastpost">2010-6-22 17:53</a></em>
					<cite>by <a href="space.php?username=qsIHSIN">qsIHSIN</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_50855" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=50855&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_50855"><a href="viewthread.php?tid=50855&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传朝鲜主教练被定性现行反革命 球员或遭枪决</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=50855&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=50855&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=13117">魯邦三世</a>
										</cite>
					<em>2010-6-26</em>
				</td>
				<td class="nums"><strong>56</strong> / <em>2478</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=50855&goto=lastpost#lastpost">2010-6-29 00:28</a></em>
					<cite>by <a href="space.php?username=chosun">chosun</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_54093" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=54093&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_54093"><a href="viewthread.php?tid=54093&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">美韩刺激 青岛满天战机</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=54093&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=54093&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8301">lqunl</a>
										</cite>
					<em>2010-7-27</em>
				</td>
				<td class="nums"><strong>56</strong> / <em>1715</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=54093&goto=lastpost#lastpost">2010-7-28 18:04</a></em>
					<cite>by <a href="space.php?username=%B0%A2%CE%C4%C7%BF">阿文强</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_33054" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=33054&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_33054"><a href="viewthread.php?tid=33054&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">国务委员刘延东独女赴港诞千金</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=33054&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=33054&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7">张书记</a>
										</cite>
					<em>2009-12-2</em>
				</td>
				<td class="nums"><strong>56</strong> / <em>1748</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=33054&goto=lastpost#lastpost">2009-12-31 09:46</a></em>
					<cite>by <a href="space.php?username=%B0%A2%B0%CD%D1%C7%B0%CD%B6%C8">阿巴亚巴度</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_34157" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=34157&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_34157"><a href="viewthread.php?tid=34157&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">因吻别导致美国机场关闭  一中国男子在美国被捕</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=34157&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=34157&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1408">becom</a>
										</cite>
					<em>2010-1-9</em>
				</td>
				<td class="nums"><strong>56</strong> / <em>1265</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=34157&goto=lastpost#lastpost">2010-1-12 23:30</a></em>
					<cite>by <a href="space.php?username=%CE%F7%C3%C5%B4%B5%C5%A3">西门吹牛</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_36234" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=36234&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_36234"><a href="viewthread.php?tid=36234&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">政协委员回忆与胡主席握手 激动一整天舍不得洗手</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=36234&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=36234&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7">张书记</a>
										</cite>
					<em>2010-1-28</em>
				</td>
				<td class="nums"><strong>56</strong> / <em>846</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=36234&goto=lastpost#lastpost">2010-1-29 23:05</a></em>
					<cite>by <a href="space.php?username=%D3%AA%D1%F8%C3%D7%B7%DB">营养米粉</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_36379" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=36379&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_36379"><a href="viewthread.php?tid=36379&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">沈阳小贩“残忍”屠戮两城管 被判死刑</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=36379&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=36379&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2311">空空追梦</a>
										</cite>
					<em>2009-12-22</em>
				</td>
				<td class="nums"><strong>56</strong> / <em>1806</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=36379&goto=lastpost#lastpost">2010-2-2 14:59</a></em>
					<cite>by <a href="space.php?username=%B7%CF%D6%D6%B6%B9%F4%F9">废种豆豉</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_36749" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=36749&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_36749"><a href="viewthread.php?tid=36749&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">影帝：大学须具有独立思考自由表达的灵魂</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=36749&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=36749&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8301">lqunl</a>
										</cite>
					<em>2010-2-2</em>
				</td>
				<td class="nums"><strong>56</strong> / <em>1441</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=36749&goto=lastpost#lastpost">2010-2-3 11:18</a></em>
					<cite>by <a href="space.php?username=%B2%D3%B6%FB%B9%FE%B2%E9%CB%D5">灿尔哈查苏</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_38811" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=38811&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_38811"><a href="viewthread.php?tid=38811&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">全国13家报纸发表共同社论敦促加速户籍改革</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=38811&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=38811&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7760">米西米西</a>
										</cite>
					<em>2010-3-1</em>
				</td>
				<td class="nums"><strong>56</strong> / <em>1330</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=38811&goto=lastpost#lastpost">2010-3-8 23:32</a></em>
					<cite>by <a href="space.php?username=%C2%ED%B5%C2%B1%CF">马德毕</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_29267" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=29267&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_29267"><a href="viewthread.php?tid=29267&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">“剩女”陆家嘴发传单觅男友 非北大清华硕士不嫁</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=29267&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=29267&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5464">上海帅哥</a>
										</cite>
					<em>2009-11-28</em>
				</td>
				<td class="nums"><strong>56</strong> / <em>1153</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=29267&goto=lastpost#lastpost">2009-12-3 16:34</a></em>
					<cite>by <a href="space.php?username=mtx22">mtx22</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_29709" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=29709&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_29709"><a href="viewthread.php?tid=29709&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">网站备案前夜：开封告急，郑州告急，许昌告急， 洛阳沦陷</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=29709&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=29709&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1960">库存袈裟</a>
										</cite>
					<em>2009-12-2</em>
				</td>
				<td class="nums"><strong>56</strong> / <em>1951</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=29709&goto=lastpost#lastpost">2009-12-4 22:11</a></em>
					<cite>by <a href="space.php?username=%BA%D3%D0%B7%BA%C3%B3%D4">河蟹好吃</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_29364" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=29364&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_29364"><a href="viewthread.php?tid=29364&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">QQ农场月收入5000万</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=29364&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=29364&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7919">路边社门卫</a>
										</cite>
					<em>2009-11-29</em>
				</td>
				<td class="nums"><strong>56</strong> / <em>1433</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=29364&goto=lastpost#lastpost">2009-12-6 10:31</a></em>
					<cite>by <a href="space.php?username=%D0%A1%C2%ED%B9%FD%BA%D3">小马过河</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_30194" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=30194&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_30194"><a href="viewthread.php?tid=30194&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">太祖下巴上的痣符合大多数中国人的意见</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=30194&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=30194&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3202">glim</a>
										</cite>
					<em>2009-12-7</em>
				</td>
				<td class="nums"><strong>56</strong> / <em>1185</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=30194&goto=lastpost#lastpost">2009-12-10 20:36</a></em>
					<cite>by <a href="space.php?username=%B5%B3%D3%D3%D6%D0%B9%FA">党佑中国</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_30656" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=30656&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_30656"><a href="viewthread.php?tid=30656&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">国新办网络管理局学习材料流出</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=30656&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=30656&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8789">完颜阿骨打</a>
										</cite>
					<em>2009-12-10</em>
				</td>
				<td class="nums"><strong>56</strong> / <em>1560</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=30656&goto=lastpost#lastpost">2009-12-14 11:07</a></em>
					<cite>by <a href="space.php?username=%CE%D2%CA%C7%B2%A4%C2%DC%C3%DB">我是菠萝蜜</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_54351" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=54351&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_54351"><a href="viewthread.php?tid=54351&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">钱伟长逝世</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=54351&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=54351&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=852">未来他老爸</a>
										</cite>
					<em>2010-7-30</em>
				</td>
				<td class="nums"><strong>56</strong> / <em>1168</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=54351&goto=lastpost#lastpost">2010-8-12 00:50</a></em>
					<cite>by <a href="space.php?username=nanalonely">nanalonely</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_56058" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=56058&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_56058"><a href="viewthread.php?tid=56058&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">日本贴中文标语抗中国游客如厕陋习</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=56058&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=56058&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=12412">wangguoping</a>
										</cite>
					<em>2010-8-21</em>
				</td>
				<td class="nums"><strong>56</strong> / <em>1668</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=56058&goto=lastpost#lastpost">2010-8-24 16:43</a></em>
					<cite>by <a href="space.php?username=aassaa">aassaa</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_57925" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=57925&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_57925"><a href="viewthread.php?tid=57925&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">胡锦涛：把握党对学校意识形态主导权 推进社会主义理论进头脑</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=57925&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=57925&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4764">我爱你家</a>
										</cite>
					<em>2010-9-9</em>
				</td>
				<td class="nums"><strong>56</strong> / <em>1177</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=57925&goto=lastpost#lastpost">2010-9-19 11:19</a></em>
					<cite>by <a href="space.php?username=%C4%BF%CC%EF">目田</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_59221" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=59221&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_59221"><a href="viewthread.php?tid=59221&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">温家宝宣布中国向巴基斯坦提供2亿美元援助</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=59221&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=59221&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6314">hhbcl1414</a>
										</cite>
					<em>2010-9-23</em>
				</td>
				<td class="nums"><strong>56</strong> / <em>969</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=59221&goto=lastpost#lastpost">2010-9-25 01:06</a></em>
					<cite>by <a href="space.php?username=%B8%DF%BD%A5%C0%EB">高渐离</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_59223" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=59223&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_59223"><a href="viewthread.php?tid=59223&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">温家宝：政改可创造宽松政治环境 共产党政权被宪法约束尚需时间</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=59223&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=59223&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4570">我卖糕的</a>
										</cite>
					<em>2010-9-23</em>
				</td>
				<td class="nums"><strong>56</strong> / <em>1651</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=59223&goto=lastpost#lastpost">2010-9-26 15:32</a></em>
					<cite>by <a href="space.php?username=gzlxd">gzlxd</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_57932" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=57932&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_57932"><a href="viewthread.php?tid=57932&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">公司规定员工上班需拥抱女总裁   敷衍者罚款50</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=57932&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=57932&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=852">未来他老爸</a>
										</cite>
					<em>2010-9-9</em>
				</td>
				<td class="nums"><strong>56</strong> / <em>1444</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=57932&goto=lastpost#lastpost">2010-9-27 15:23</a></em>
					<cite>by <a href="space.php?username=%D7%D4%D3%C9%D7%D4%D4%DA%B7%E7">自由自在风</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_58263" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=58263&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_58263"><a href="viewthread.php?tid=58263&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">青年农民下书公开挑战清华北大博导</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=58263&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=58263&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=14112">ClutchBear</a>
										</cite>
					<em>2010-9-12</em>
				</td>
				<td class="nums"><strong>56</strong> / <em>1210</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=58263&goto=lastpost#lastpost">2010-9-27 15:37</a></em>
					<cite>by <a href="space.php?username=%D7%D4%D3%C9%D7%D4%D4%DA%B7%E7">自由自在风</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_59824" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=59824&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_59824"><a href="viewthread.php?tid=59824&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">邓亚萍：人民搜索要做“人民的搜索”</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=59824&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=59824&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=9755">闲人莫入</a>
										</cite>
					<em>2010-9-30</em>
				</td>
				<td class="nums"><strong>56</strong> / <em>1142</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=59824&goto=lastpost#lastpost">2010-10-8 10:40</a></em>
					<cite>by <a href="space.php?username=%C5W%C5W%D1%F2">臰臰羊</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_3157" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=3157&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_3157"><a href="viewthread.php?tid=3157&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">CCAV出丑！专访诺贝尔奖得主美籍华人丁肇中</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=3157&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=3157&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2095">姑娘</a>
										</cite>
					<em>2009-1-11</em>
				</td>
				<td class="nums"><strong>56</strong> / <em>1228</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=3157&goto=lastpost#lastpost">2009-2-26 19:21</a></em>
					<cite>by <a href="space.php?username=%CB%AC%CD%E1%CD%E1">爽歪歪</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_40589" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=40589&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_40589"><a href="viewthread.php?tid=40589&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">山东济南5名大学生掏粪工 经半年试用后正式上岗</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=40589&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=40589&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7666">大王</a>
										</cite>
					<em>2010-3-3</em>
				</td>
				<td class="nums"><strong>56</strong> / <em>845</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=40589&goto=lastpost#lastpost">2010-3-18 17:27</a></em>
					<cite>by <a href="space.php?username=%B7%A8%BF%CB%88%98">法克垬</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_40998" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=40998&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_40998"><a href="viewthread.php?tid=40998&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">日网民嘲讽地沟油事件：中国人生存能力堪比蟑螂</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=40998&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=40998&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4570">我卖糕的</a>
										</cite>
					<em>2010-3-23</em>
				</td>
				<td class="nums"><strong>56</strong> / <em>1328</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=40998&goto=lastpost#lastpost">2010-3-24 22:01</a></em>
					<cite>by <a href="space.php?username=%D0%B4%CA%B5">写实</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_40915" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=40915&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_40915"><a href="viewthread.php?tid=40915&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">西南大旱：河枯竭 井见底 地龟裂</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=40915&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=40915&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7002">luugoo</a>
										</cite>
					<em>2010-3-22</em>
				</td>
				<td class="nums"><strong>56</strong> / <em>1230</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=40915&goto=lastpost#lastpost">2010-3-29 11:33</a></em>
					<cite>by <a href="space.php?username=%B2%BB%D6%AA%BD%D0%CA%B2%C3%B4">不知叫什么</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_42357" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=42357&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_42357"><a href="viewthread.php?tid=42357&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">王兆山出新作 赞影帝泪似茅台</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=42357&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=42357&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8301">lqunl</a>
										</cite>
					<em>2010-4-6</em>
				</td>
				<td class="nums"><strong>56</strong> / <em>1709</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=42357&goto=lastpost#lastpost">2010-4-10 00:00</a></em>
					<cite>by <a href="space.php?username=miniq">miniq</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_42639" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=42639&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_42639"><a href="viewthread.php?tid=42639&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">真理部最新指令：不推荐关于韩寒的网络专题</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=42639&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=42639&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1258">路边社记者</a>
										</cite>
					<em>2010-4-9</em>
				</td>
				<td class="nums"><strong>56</strong> / <em>2063</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=42639&goto=lastpost#lastpost">2010-4-11 22:21</a></em>
					<cite>by <a href="space.php?username=%D0%C4%CB%E6%C4%E3%B6%AF">心随你动</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_44160" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=44160&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_44160"><a href="viewthread.php?tid=44160&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">《时代》2010影响力候选人物 韩寒薄熙来刘晓波入围</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=44160&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=44160&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4638">江湖席</a>
										</cite>
					<em>2010-4-3</em>
				</td>
				<td class="nums"><strong>56</strong> / <em>1834</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=44160&goto=lastpost#lastpost">2010-4-26 20:28</a></em>
					<cite>by <a href="space.php?username=%CB%E9%CB%E9">碎碎</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_44994" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=44994&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_44994"><a href="viewthread.php?tid=44994&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">为防泄漏健康状态 金正日在华大小便运回国</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=44994&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=44994&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6367">underwear</a>
										</cite>
					<em>2010-5-6</em>
				</td>
				<td class="nums"><strong>56</strong> / <em>1805</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=44994&goto=lastpost#lastpost">2010-5-8 14:07</a></em>
					<cite>by <a href="space.php?username=%C7%AE%B2%BB%CA%C7%CE%CA%CC%E2">钱不是问题</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_45186" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=45186&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_45186"><a href="viewthread.php?tid=45186&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">任志强大连论坛遭听众扔鞋 称遇总统待遇</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=45186&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=45186&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3347">法克垬</a>
										</cite>
					<em>2010-5-8</em>
				</td>
				<td class="nums"><strong>56</strong> / <em>912</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=45186&goto=lastpost#lastpost">2010-5-11 00:38</a></em>
					<cite>by <a href="space.php?username=%CB%EA%D4%C2%B5%C4%C5%DD%C4%AD">岁月的泡沫</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_45383" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=45383&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_45383"><a href="viewthread.php?tid=45383&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">胡锦涛：中俄要共同倡导正确历史观</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=45383&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=45383&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=11478">中山首里</a>
										</cite>
					<em>2010-5-8</em>
				</td>
				<td class="nums"><strong>56</strong> / <em>1147</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=45383&goto=lastpost#lastpost">2010-5-11 13:36</a></em>
					<cite>by <a href="space.php?username=%D6%D0%C9%BD%CA%D7%C0%EF">中山首里</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_45801" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=45801&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_45801"><a href="viewthread.php?tid=45801&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">涉嫌强奸女大学生 山木老总疑遭通缉</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=45801&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=45801&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1162">小龙人</a>
										</cite>
					<em>2010-5-12</em>
				</td>
				<td class="nums"><strong>56</strong> / <em>1877</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=45801&goto=lastpost#lastpost">2010-5-15 11:24</a></em>
					<cite>by <a href="space.php?username=%B4%F3%CF%E9%D4%C6">大祥云</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_46856" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=46856&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_46856"><a href="viewthread.php?tid=46856&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">世博会游客不耐等待   大骂德国人为纳粹</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=46856&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=46856&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=13468">C.C.</a>
										</cite>
					<em>2010-5-20</em>
				</td>
				<td class="nums"><strong>56</strong> / <em>1668</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=46856&goto=lastpost#lastpost">2010-5-25 12:56</a></em>
					<cite>by <a href="space.php?username=scstriker">scstriker</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_47025" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=47025&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_47025"><a href="viewthread.php?tid=47025&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">80后夫妻拒当房奴拟租房10年  家长高血压发作欲断绝关系</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=47025&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=47025&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=852">未来他老爸</a>
										</cite>
					<em>2010-5-25</em>
				</td>
				<td class="nums"><strong>56</strong> / <em>1264</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=47025&goto=lastpost#lastpost">2010-5-27 06:35</a></em>
					<cite>by <a href="space.php?username=Guru">Guru</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_10620" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=10620&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_10620"><a href="viewthread.php?tid=10620&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">上海滑稽演员周立波模仿影帝</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=10620&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=10620&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2519">泡面007</a>
										</cite>
					<em>2009-5-10</em>
				</td>
				<td class="nums"><strong>56</strong> / <em>2070</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=10620&goto=lastpost#lastpost">2009-5-12 20:58</a></em>
					<cite>by <a href="space.php?username=%C5%DD%C3%E6007">泡面007</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_12920" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=12920&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_12920"><a href="viewthread.php?tid=12920&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">六·四当日，我的经历</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=12920&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=12920&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4686">曰耳又</a>
										</cite>
					<em>2009-6-7</em>
				</td>
				<td class="nums"><strong>56</strong> / <em>1509</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=12920&goto=lastpost#lastpost">2009-6-10 16:56</a></em>
					<cite>by <a href="space.php?username=%D7%F3%CA%D6%B5%C4%D7%F3">左手的左</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_12938" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=12938&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_12938"><a href="viewthread.php?tid=12938&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">我发现潘石屹家里有一本紫阳真人的新书……</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=12938&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=12938&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5588">我家旺财有喜了</a>
										</cite>
					<em>2009-6-7</em>
				</td>
				<td class="nums"><strong>56</strong> / <em>2120</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=12938&goto=lastpost#lastpost">2009-6-25 23:54</a></em>
					<cite>by <a href="space.php?username=%CE%D2%BC%D2%CD%FA%B2%C6%D3%D0%CF%B2%C1%CB">我家旺财有喜了</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_16354" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=16354&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_16354"><a href="viewthread.php?tid=16354&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">毛太孙女惊艳面世：我要把外公输出到台湾去</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=16354&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=16354&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3202">glim</a>
										</cite>
					<em>2009-7-10</em>
				</td>
				<td class="nums"><strong>56</strong> / <em>2409</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=16354&goto=lastpost#lastpost">2009-7-20 09:23</a></em>
					<cite>by <a href="space.php?username=ye1226">ye1226</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_16567" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=16567&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_16567"><a href="viewthread.php?tid=16567&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">亲历劫后的乌鲁木齐</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=16567&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=16567&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1408">becom</a>
										</cite>
					<em>2009-7-10</em>
				</td>
				<td class="nums"><strong>55</strong> / <em>1736</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=16567&goto=lastpost#lastpost">2009-7-15 16:22</a></em>
					<cite>by <a href="space.php?username=%C7%E9%E8%C9%B5%C4%C0%E8%C3%F7">情枭的黎明</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_17027" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=17027&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_17027"><a href="viewthread.php?tid=17027&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">网友呛连岳</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=17027&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=17027&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1371">deathproof</a>
										</cite>
					<em>2009-7-17</em>
				</td>
				<td class="nums"><strong>55</strong> / <em>1270</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=17027&goto=lastpost#lastpost">2009-7-18 00:44</a></em>
					<cite>by <a href="space.php?username=a625446312">a625446312</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_55079" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=55079&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_55079"><a href="viewthread.php?tid=55079&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">习近平独生女将报考哈佛大学</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=55079&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=55079&amp;extra=page%3D19%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=17435">@k2</a>
										</cite>
					<em>2010-8-10</em>
				</td>
				<td class="nums"><strong>55</strong> / <em>2345</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=55079&goto=lastpost#lastpost">2010-8-11 23:57</a></em>
					<cite>by <a href="space.php?username=one">one</a></cite>
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
	<div class="pages"><em>&nbsp;22278&nbsp;</em><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=1" class="first">1 ...</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=18" class="prev">&lsaquo;&lsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=17">17</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=18">18</a><strong>19</strong><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=20">20</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=21">21</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=22">22</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=23">23</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=24">24</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=25">25</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=26">26</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=20" class="next">&rsaquo;&rsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=349" class="last">... 349</a><kbd><input type="text" name="custompage" size="3" onkeydown="if(event.keyCode==13) {window.location='forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page='+this.value; return false;}" /></kbd></div>	</div>

  
	<div class="box">
			<span class="headactions"><a href="forumdisplay.php?fid=2&amp;page=19&amp;showoldetails=yes#online" class="nobdr"><img src="images/default/collapsed_yes.gif" alt="" /></a></span>
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
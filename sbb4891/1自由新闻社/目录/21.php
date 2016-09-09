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
			window.location = 'forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&page=20';
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
<div class="pages"><em>&nbsp;22278&nbsp;</em><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=1" class="first">1 ...</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=20" class="prev">&lsaquo;&lsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=19">19</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=20">20</a><strong>21</strong><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=22">22</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=23">23</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=24">24</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=25">25</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=26">26</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=27">27</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=28">28</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=22" class="next">&rsaquo;&rsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=349" class="last">... 349</a><kbd><input type="text" name="custompage" size="3" onkeydown="if(event.keyCode==13) {window.location='forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page='+this.value; return false;}" /></kbd></div></div>

<div style="float:left;border:1px solid #CCC; border-bottom:none;;width:218px; background: url(/imgs/1984radio.jpg) 200px 2px no-repeat;padding:5px 0 5px 12px;margin:0px 0 0 13px">

<p><b><a href="/radio/index.php" target="_blank">1984FM</a></b><br /><b><a href="https://voxli.com/1984bbs" target="_blank">1984Chat</a></b>&nbsp;</p> 
</div>

<div style="clear:both;height:0px;width:100%;font-size:1px;">&nbsp;</div>

	<ul class="popupmenu_popup newspecialmenu" id="newspecial_menu" style="display: none">
		<li><a href="post.php?action=newthread&amp;fid=2&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">发新话题</a></li>		<li class="poll"><a href="post.php?action=newthread&amp;fid=2&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;special=1">发布投票</a></li>													</ul>
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

					<tbody id="normalthread_14434" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=14434&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_14434"><a href="viewthread.php?tid=14434&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">29岁的湖北宜城市长</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=14434&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=14434&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4836">louy0427</a>
										</cite>
					<em>2009-6-22</em>
				</td>
				<td class="nums"><strong>54</strong> / <em>1706</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=14434&goto=lastpost#lastpost">2009-6-27 12:30</a></em>
					<cite>by <a href="space.php?username=yizhu0512">yizhu0512</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_14621" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=14621&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_14621"><a href="viewthread.php?tid=14621&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">We want freedom,Tehran!</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=14621&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=14621&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2804">musicool</a>
										</cite>
					<em>2009-6-21</em>
				</td>
				<td class="nums"><strong>54</strong> / <em>2513</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=14621&goto=lastpost#lastpost">2009-6-28 15:15</a></em>
					<cite>by <a href="space.php?username=%B5%A5%CA%D6%B7%F6%C7%BD">单手扶墙</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_8620" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=8620&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_8620"><a href="viewthread.php?tid=8620&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">十里洗浴中心与千年古刹</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=8620&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=8620&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4998">牛妈妈</a>
										</cite>
					<em>2009-4-2</em>
				</td>
				<td class="nums"><strong>54</strong> / <em>1584</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=8620&goto=lastpost#lastpost">2009-7-11 00:04</a></em>
					<cite>by <a href="space.php?username=damncheater">damncheater</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_57046" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=57046&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_57046"><a href="viewthread.php?tid=57046&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">体育学教授痛心疾呼：“网络游戏要毁灭整个中国”</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=57046&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=57046&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3202">glim</a>
										</cite>
					<em>2010-9-1</em>
				</td>
				<td class="nums"><strong>54</strong> / <em>1232</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=57046&goto=lastpost#lastpost">2010-9-8 23:51</a></em>
					<cite>by <a href="space.php?username=Auo">Auo</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_57882" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=57882&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_57882"><a href="viewthread.php?tid=57882&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">大学生欲共同抵制食堂涨价 校方出面劝阻</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=57882&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=57882&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=15660">东去长江空逝水</a>
										</cite>
					<em>2010-9-7</em>
				</td>
				<td class="nums"><strong>54</strong> / <em>1311</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=57882&goto=lastpost#lastpost">2010-9-9 13:06</a></em>
					<cite>by <a href="space.php?username=%B2%CB%B5%F9">菜爹</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_57643" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=57643&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_57643"><a href="viewthread.php?tid=57643&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">海尔冰箱半年内致两少女触电身亡</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=57643&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=57643&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1640">超级麦芽糖</a>
										</cite>
					<em>2010-9-6</em>
				</td>
				<td class="nums"><strong>54</strong> / <em>870</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=57643&goto=lastpost#lastpost">2010-9-9 19:49</a></em>
					<cite>by <a href="space.php?username=%CC%C1%B6%EC">塘鹅</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_58079" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=58079&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_58079"><a href="viewthread.php?tid=58079&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">一头大熊猫在日本死亡</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=58079&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=58079&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=16525">Aurora2008</a>
										</cite>
					<em>2010-9-10</em>
				</td>
				<td class="nums"><strong>54</strong> / <em>1197</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=58079&goto=lastpost#lastpost">2010-9-13 09:17</a></em>
					<cite>by <a href="space.php?username=blue_sky">blue_sky</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_60064" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=60064&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_60064"><a href="viewthread.php?tid=60064&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">支持刘晓波获奖者出现分歧 有人撤签</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=60064&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=60064&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=9517">老西</a>
										</cite>
					<em>2010-10-3</em>
				</td>
				<td class="nums"><strong>54</strong> / <em>1975</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=60064&goto=lastpost#lastpost">2010-10-8 10:35</a></em>
					<cite>by <a href="space.php?username=%C5W%C5W%D1%F2">臰臰羊</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_26830" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=26830&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_26830"><a href="viewthread.php?tid=26830&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">真理部最新指令：不得透露钱学森真实死因</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=26830&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=26830&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5588">我家旺财有喜了</a>
										</cite>
					<em>2009-11-1</em>
				</td>
				<td class="nums"><strong>54</strong> / <em>2775</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=26830&goto=lastpost#lastpost">2009-11-5 15:39</a></em>
					<cite>by <a href="space.php?username=olly2">olly2</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_27685" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=27685&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_27685"><a href="viewthread.php?tid=27685&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">成都市血液中心的血浆可当肥料用</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=27685&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=27685&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3969">langhua9527</a>
										</cite>
					<em>2009-11-8</em>
				</td>
				<td class="nums"><strong>54</strong> / <em>1386</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=27685&goto=lastpost#lastpost">2009-11-15 16:21</a></em>
					<cite>by <a href="space.php?username=%D0%A1%B4%D0%B4%F3%CB%E2">小葱大蒜</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_28819" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=28819&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_28819"><a href="viewthread.php?tid=28819&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">六部长“共享”一情妇 金人庆案扯上李肇星</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=28819&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=28819&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8709">szdos</a>
										</cite>
					<em>2009-11-22</em>
				</td>
				<td class="nums"><strong>54</strong> / <em>2166</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=28819&goto=lastpost#lastpost">2009-11-25 00:30</a></em>
					<cite>by <a href="space.php?username=nailking">nailking</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_28690" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=28690&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_28690"><a href="viewthread.php?tid=28690&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">法国第一夫人裸照流出</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=28690&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=28690&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2232">老杂疫</a>
										</cite>
					<em>2009-11-22</em>
				</td>
				<td class="nums"><strong>54</strong> / <em>2217</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=28690&goto=lastpost#lastpost">2009-11-25 16:36</a></em>
					<cite>by <a href="space.php?username=mckon">mckon</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_29744" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=29744&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_29744"><a href="viewthread.php?tid=29744&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">天津东亚运动会吉祥物出笼</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=29744&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=29744&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2311">空空追梦</a>
										</cite>
					<em>2009-12-3</em>
				</td>
				<td class="nums"><strong>54</strong> / <em>848</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=29744&goto=lastpost#lastpost">2009-12-8 18:29</a></em>
					<cite>by <a href="space.php?username=xia">xia</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_30918" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=30918&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_30918"><a href="viewthread.php?tid=30918&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">热比亚：世维大会的最终目标是维族人自决</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=30918&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=30918&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7002">luugoo</a>
										</cite>
					<em>2009-12-13</em>
				</td>
				<td class="nums"><strong>54</strong> / <em>729</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=30918&goto=lastpost#lastpost">2009-12-17 12:59</a></em>
					<cite>by <a href="space.php?username=%B5%CD%CB%D7%D6%AE%B7%E7%F3%DD">低俗之风筝</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_7318" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=7318&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_7318"><a href="viewthread.php?tid=7318&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">真理部最新指令：封杀草泥马</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=7318&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=7318&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2428">xiahua</a>
										</cite>
					<em>2009-3-18</em>
				</td>
				<td class="nums"><strong>54</strong> / <em>1624</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=7318&goto=lastpost#lastpost">2009-3-24 14:45</a></em>
					<cite>by <a href="space.php?username=wowo_steve">wowo_steve</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_17763" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=17763&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_17763"><a href="viewthread.php?tid=17763&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">饶谨：Anti-cnn将成为中国的《纽约时报》</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=17763&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=17763&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=613">五花肉</a>
										</cite>
					<em>2009-7-24</em>
				</td>
				<td class="nums"><strong>54</strong> / <em>770</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=17763&goto=lastpost#lastpost">2009-7-25 12:18</a></em>
					<cite>by <a href="space.php?username=Phillip">Phillip</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_17704" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=17704&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_17704"><a href="viewthread.php?tid=17704&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">网易财经因造谣污蔑中粮集团23晚被关闭   24日早上恢复</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=17704&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=17704&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=448">路边社总编室</a>
										</cite>
					<em>2009-7-23</em>
				</td>
				<td class="nums"><strong>54</strong> / <em>1508</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=17704&goto=lastpost#lastpost">2009-7-26 13:26</a></em>
					<cite>by <a href="space.php?username=balian">balian</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_18015" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=18015&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_18015"><a href="viewthread.php?tid=18015&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传，温州出租车司机拟罢工</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=18015&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=18015&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4331">鬼哭神嚎</a>
										</cite>
					<em>2009-7-27</em>
				</td>
				<td class="nums"><strong>54</strong> / <em>1421</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=18015&goto=lastpost#lastpost">2009-7-29 05:54</a></em>
					<cite>by <a href="space.php?username=%C9%CF%B8%D8%C9%CF%CF%D9">上肛上腺</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_18048" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=18048&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_18048"><a href="viewthread.php?tid=18048&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传，东莞六扇门总捕头花事败露</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=18048&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=18048&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5454">xiangbei</a>
										</cite>
					<em>2009-7-28</em>
				</td>
				<td class="nums"><strong>54</strong> / <em>1521</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=18048&goto=lastpost#lastpost">2009-7-30 10:21</a></em>
					<cite>by <a href="space.php?username=xuebowee">xuebowee</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_17362" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=17362&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_17362"><a href="viewthread.php?tid=17362&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">我朝巡幸安全手册摘要</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=17362&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=17362&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6385">openearth</a>
										</cite>
					<em>2009-7-21</em>
				</td>
				<td class="nums"><strong>54</strong> / <em>1670</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=17362&goto=lastpost#lastpost">2009-7-31 17:46</a></em>
					<cite>by <a href="space.php?username=%D2%AA%BE%CD%B0%CB%D8%D4">要就八卦</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_10241" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=10241&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_10241"><a href="viewthread.php?tid=10241&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">外交部：我国有充分的新闻报道自由</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=10241&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=10241&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4570">我卖糕的</a>
										</cite>
					<em>2009-5-4</em>
				</td>
				<td class="nums"><strong>54</strong> / <em>1547</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=10241&goto=lastpost#lastpost">2009-8-5 17:44</a></em>
					<cite>by <a href="space.php?username=%89%F2%D9v%BA%C8%D1%AA%C9%E4%C0L">夠賤喝血射繪</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_20170" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=20170&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_20170"><a href="viewthread.php?tid=20170&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">亚洲周刊：维权拒绝悲情 艾未未和他的战友们</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=20170&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=20170&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1770">nustbobo</a>
										</cite>
					<em>2009-8-20</em>
				</td>
				<td class="nums"><strong>54</strong> / <em>1425</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=20170&goto=lastpost#lastpost">2009-8-25 02:05</a></em>
					<cite>by <a href="space.php?username=%B4%F3%C8%CB%A3%AC%D3%D0%D0%D8%C6%F7">大人，有胸器</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_6292" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=6292&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_6292"><a href="viewthread.php?tid=6292&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">《财经》杂志刊登“老鼠和风箱故事”遭查禁</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=6292&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=6292&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1249">xies</a>
										</cite>
					<em>2009-3-4</em>
				</td>
				<td class="nums"><strong>54</strong> / <em>2219</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=6292&goto=lastpost#lastpost">2009-5-6 16:56</a></em>
					<cite>by <a href="space.php?username=%D4%AD%D7%D3%CA%B1%B4%FA">原子时代</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_9906" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=9906&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_9906"><a href="viewthread.php?tid=9906&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">前天，几名著名法学家号啕大哭</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=9906&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=9906&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=803">weke</a>
										</cite>
					<em>2009-4-29</em>
				</td>
				<td class="nums"><strong>54</strong> / <em>1466</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=9906&goto=lastpost#lastpost">2009-5-11 23:53</a></em>
					<cite>by <a href="space.php?username=%D0%A1%E5%B7%E5%B7">小宸宸</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_12614" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=12614&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_12614"><a href="viewthread.php?tid=12614&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">今天</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=12614&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=12614&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5867">宋石男</a>
										</cite>
					<em>2009-6-4</em>
				</td>
				<td class="nums"><strong>54</strong> / <em>1557</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=12614&goto=lastpost#lastpost">2009-6-5 00:39</a></em>
					<cite>by <a href="space.php?username=dahuilangzl">dahuilangzl</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_6253" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=6253&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_6253"><a href="viewthread.php?tid=6253&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">Armani对我来说非常合适</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=6253&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=6253&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4082">连岳</a>
										</cite>
					<em>2009-3-4</em>
				</td>
				<td class="nums"><strong>54</strong> / <em>1233</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=6253&goto=lastpost#lastpost">2009-3-8 14:59</a></em>
					<cite>by <a href="space.php?username=%BE%CD%C3%FE%C4%E3">就摸你</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_4733" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=4733&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_4733"><a href="viewthread.php?tid=4733&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">高层绝密文件流出 曝南方系媒体被整肃始末</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=4733&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=4733&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2777">myyznl</a>
										</cite>
					<em>2009-2-13</em>
				</td>
				<td class="nums"><strong>54</strong> / <em>2709</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=4733&goto=lastpost#lastpost">2008-1-6 13:08</a></em>
					<cite>by <a href="space.php?username=%CB%CE%CA%AF%C4%D0">宋石男</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_32568" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=32568&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_32568"><a href="viewthread.php?tid=32568&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">“我和毛新宇都是独生子女，没有违反计划生育”</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=32568&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=32568&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3202">glim</a>
										</cite>
					<em>2009-12-26</em>
				</td>
				<td class="nums"><strong>54</strong> / <em>1820</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=32568&goto=lastpost#lastpost">2009-12-28 21:41</a></em>
					<cite>by <a href="space.php?username=ATCG">ATCG</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_32590" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=32590&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_32590"><a href="viewthread.php?tid=32590&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传，江苏城管强拆兵营</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=32590&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=32590&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1157">bester89</a>
										</cite>
					<em>2009-12-26</em>
				</td>
				<td class="nums"><strong>54</strong> / <em>1555</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=32590&goto=lastpost#lastpost">2009-12-30 16:19</a></em>
					<cite>by <a href="space.php?username=%B0%A2%B4%F4">阿呆</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_34020" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=34020&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_34020"><a href="viewthread.php?tid=34020&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">深圳一新疆饭馆里，汉人扎死一维人</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=34020&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=34020&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5124">zeaver</a>
										</cite>
					<em>2010-1-8</em>
				</td>
				<td class="nums"><strong>54</strong> / <em>1411</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=34020&goto=lastpost#lastpost">2010-1-12 17:22</a></em>
					<cite>by <a href="space.php?username=%C9%F1%D2%FE%D6%AE%D7%F3%CA%D6">神隐之左手</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_36551" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=36551&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_36551"><a href="viewthread.php?tid=36551&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">深圳首班春运列车上座率不足8%，站方称或因旅客请不到假致</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=36551&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=36551&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=105">黄阿狗</a>
										</cite>
					<em>2010-2-1</em>
				</td>
				<td class="nums"><strong>54</strong> / <em>1373</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=36551&goto=lastpost#lastpost">2010-2-5 14:39</a></em>
					<cite>by <a href="space.php?username=%C2%ED%C2%B9">马鹿</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_38827" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=38827&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_38827"><a href="viewthread.php?tid=38827&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">林妙可被狠批 杨沛宜翻身</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=38827&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=38827&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=10890">xiaohe1120</a>
										</cite>
					<em>2010-3-1</em>
				</td>
				<td class="nums"><strong>54</strong> / <em>2338</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=38827&goto=lastpost#lastpost">2010-3-4 20:38</a></em>
					<cite>by <a href="space.php?username=forever1983">forever1983</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_39628" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=39628&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_39628"><a href="viewthread.php?tid=39628&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">伊朗总统：“9·11”是大骗局</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=39628&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=39628&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=852">未来他老爸</a>
										</cite>
					<em>2010-3-8</em>
				</td>
				<td class="nums"><strong>54</strong> / <em>936</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=39628&goto=lastpost#lastpost">2010-3-10 16:09</a></em>
					<cite>by <a href="space.php?username=%B0%A2%CE%C4%C7%BF">阿文强</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_39081" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=39081&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_39081"><a href="viewthread.php?tid=39081&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">贾庆林：坚决抵御西方多党制和两院制影响</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=39081&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=39081&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4570">我卖糕的</a>
										</cite>
					<em>2010-3-3</em>
				</td>
				<td class="nums"><strong>54</strong> / <em>1117</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=39081&goto=lastpost#lastpost">2010-3-11 01:37</a></em>
					<cite>by <a href="space.php?username=nodike">nodike</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_34046" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=34046&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_34046"><a href="viewthread.php?tid=34046&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">只会写自己名字的港大院士</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=34046&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=34046&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=9323">bengle</a>
										</cite>
					<em>2010-1-8</em>
				</td>
				<td class="nums"><strong>53</strong> / <em>1543</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=34046&goto=lastpost#lastpost">2010-1-16 18:53</a></em>
					<cite>by <a href="space.php?username=brightyaoyao">brightyaoyao</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_35143" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=35143&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_35143"><a href="viewthread.php?tid=35143&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">总书记上海体验银联卡消费</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=35143&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=35143&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3202">glim</a>
										</cite>
					<em>2010-1-18</em>
				</td>
				<td class="nums"><strong>53</strong> / <em>1531</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=35143&goto=lastpost#lastpost">2010-1-21 21:36</a></em>
					<cite>by <a href="space.php?username=kyosugi">kyosugi</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_34768" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=34768&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_34768"><a href="viewthread.php?tid=34768&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">他一口气检举了100个成人网站</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=34768&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=34768&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3326">c31068</a>
										</cite>
					<em>2010-1-15</em>
				</td>
				<td class="nums"><strong>53</strong> / <em>1482</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=34768&goto=lastpost#lastpost">2010-1-23 17:40</a></em>
					<cite>by <a href="space.php?username=%D4%D9%CA%C0%B9%D8%D3%F0">再世关羽</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_35624" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=35624&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_35624"><a href="viewthread.php?tid=35624&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">外交部：反对美方影射中国限制互联网自由</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=35624&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=35624&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7919">路边社门卫</a>
										</cite>
					<em>2010-1-22</em>
				</td>
				<td class="nums"><strong>53</strong> / <em>1055</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=35624&goto=lastpost#lastpost">2010-1-24 14:58</a></em>
					<cite>by <a href="space.php?username=%CE%F7%C3%C5%B4%B5%C5%A3">西门吹牛</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_35581" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=35581&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_35581"><a href="viewthread.php?tid=35581&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">14岁少女钻错被窝遭强奸 处女膜仍完整</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=35581&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=35581&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7879">清風笑</a>
										</cite>
					<em>2010-1-22</em>
				</td>
				<td class="nums"><strong>53</strong> / <em>2327</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=35581&goto=lastpost#lastpost">2010-1-28 09:14</a></em>
					<cite>by <a href="space.php?username=%C9%B5%D7%D3%BF%B4%C9%E7%BB%E1">傻子看社会</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_38560" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=38560&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_38560"><a href="viewthread.php?tid=38560&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">黄健翔披露外交部曾多次干扰主持人解说</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=38560&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=38560&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5464">上海帅哥</a>
										</cite>
					<em>2010-2-26</em>
				</td>
				<td class="nums"><strong>53</strong> / <em>2439</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=38560&goto=lastpost#lastpost">2010-3-1 10:54</a></em>
					<cite>by <a href="space.php?username=%B2%CB%B5%F9">菜爹</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_6759" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=6759&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_6759"><a href="viewthread.php?tid=6759&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">委员长：绝对不能学西方那一套！</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=6759&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=6759&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2428">xiahua</a>
										</cite>
					<em>2009-3-9</em>
				</td>
				<td class="nums"><strong>53</strong> / <em>841</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=6759&goto=lastpost#lastpost">2009-3-11 00:29</a></em>
					<cite>by <a href="space.php?username=Candice">Candice</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_21273" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=21273&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_21273"><a href="viewthread.php?tid=21273&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">储君发表“五个必须的”广大网民纷纷大赞</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=21273&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=21273&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4570">我卖糕的</a>
										</cite>
					<em>2009-9-3</em>
				</td>
				<td class="nums"><strong>53</strong> / <em>1534</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=21273&goto=lastpost#lastpost">2009-9-7 17:45</a></em>
					<cite>by <a href="space.php?username=luugoo">luugoo</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_21896" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=21896&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_21896"><a href="viewthread.php?tid=21896&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">衡山县一镇长：我们只讲党性不讲人性</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=21896&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=21896&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2428">xiahua</a>
										</cite>
					<em>2009-8-1</em>
				</td>
				<td class="nums"><strong>53</strong> / <em>1204</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=21896&goto=lastpost#lastpost">2009-9-12 21:58</a></em>
					<cite>by <a href="space.php?username=Phillip">Phillip</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_23103" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=23103&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_23103"><a href="viewthread.php?tid=23103&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">一周图片新闻 9.21-9.27</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=23103&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=23103&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2232">老杂疫</a>
										</cite>
					<em>2009-9-21</em>
				</td>
				<td class="nums"><strong>53</strong> / <em>1337</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=23103&goto=lastpost#lastpost">2009-9-25 18:00</a></em>
					<cite>by <a href="space.php?username=%C0%CF%D4%D3%D2%DF">老杂疫</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_23170" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=23170&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_23170"><a href="viewthread.php?tid=23170&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">麦当娜世界巡演宣传片中将影帝描述成希特勒</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=23170&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=23170&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8709">szdos</a>
										</cite>
					<em>2009-9-23</em>
				</td>
				<td class="nums"><strong>53</strong> / <em>2162</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=23170&goto=lastpost#lastpost">2009-9-29 14:56</a></em>
					<cite>by <a href="space.php?username=%D6%D0%D1%EB%D7%DC%CA%FA%BC%A6">中央总竖鸡</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_22623" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=22623&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_22623"><a href="viewthread.php?tid=22623&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">瑞士的国庆游行</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=22623&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=22623&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4854">jiucaibao</a>
										</cite>
					<em>2009-9-18</em>
				</td>
				<td class="nums"><strong>53</strong> / <em>1563</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=22623&goto=lastpost#lastpost">2009-10-6 18:27</a></em>
					<cite>by <a href="space.php?username=badou">badou</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_24841" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=24841&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_24841"><a href="viewthread.php?tid=24841&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">我驻新西兰使馆重要指示：如何抗议热比亚蹿访</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=24841&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=24841&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2428">xiahua</a>
										</cite>
					<em>2009-10-12</em>
				</td>
				<td class="nums"><strong>53</strong> / <em>1281</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=24841&goto=lastpost#lastpost">2009-10-15 18:13</a></em>
					<cite>by <a href="space.php?username=%CE%D2%C2%F4%B8%E2%B5%C4">我卖糕的</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_40124" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=40124&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_40124"><a href="viewthread.php?tid=40124&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">湖北省长李鸿忠：我不道歉</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=40124&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=40124&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2472">Noel</a>
										</cite>
					<em>2010-3-11</em>
				</td>
				<td class="nums"><strong>53</strong> / <em>1862</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=40124&goto=lastpost#lastpost">2010-3-15 14:44</a></em>
					<cite>by <a href="space.php?username=af0926">af0926</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_40584" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=40584&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_40584"><a href="viewthread.php?tid=40584&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">韩媒称朝鲜前货币改革总指挥朴南基被枪决</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=40584&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=40584&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4647">offacer</a>
										</cite>
					<em>2010-3-18</em>
				</td>
				<td class="nums"><strong>53</strong> / <em>1524</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=40584&goto=lastpost#lastpost">2010-3-20 14:02</a></em>
					<cite>by <a href="space.php?username=winddeer">winddeer</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_40701" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=40701&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_40701"><a href="viewthread.php?tid=40701&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">“水木清华”事件5周年 大学言论封杀更甚</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=40701&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=40701&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7002">luugoo</a>
										</cite>
					<em>2010-3-19</em>
				</td>
				<td class="nums"><strong>53</strong> / <em>2123</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=40701&goto=lastpost#lastpost">2010-3-23 01:33</a></em>
					<cite>by <a href="space.php?username=kaidisanshu">kaidisanshu</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_41553" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=41553&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_41553"><a href="viewthread.php?tid=41553&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">昆明城管与小贩冲突 多辆执法车被烧被掀</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=41553&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=41553&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4570">我卖糕的</a>
										</cite>
					<em>2010-3-27</em>
				</td>
				<td class="nums"><strong>53</strong> / <em>1518</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=41553&goto=lastpost#lastpost">2010-3-30 00:09</a></em>
					<cite>by <a href="space.php?username=%B6%D7%BF%B4%B7%E7%C6%F0">蹲看风起</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_41896" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=41896&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_41896"><a href="viewthread.php?tid=41896&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">新兵失误手榴弹回弹爆炸 队长3.5秒弹下救人</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=41896&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=41896&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=10890">xiaohe1120</a>
										</cite>
					<em>2010-4-1</em>
				</td>
				<td class="nums"><strong>53</strong> / <em>1247</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=41896&goto=lastpost#lastpost">2010-4-2 19:36</a></em>
					<cite>by <a href="space.php?username=%B0%A2%B4%F4">阿呆</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_42077" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=42077&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_42077"><a href="viewthread.php?tid=42077&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传，中共“解放军”更名为“国防军”</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=42077&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=42077&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5464">上海帅哥</a>
										</cite>
					<em>2010-4-2</em>
				</td>
				<td class="nums"><strong>53</strong> / <em>2210</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=42077&goto=lastpost#lastpost">2010-4-4 23:58</a></em>
					<cite>by <a href="space.php?username=%B7%A8%BF%CB%88%98">法克垬</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_43459" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=43459&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_43459"><a href="viewthread.php?tid=43459&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传，4月20号是全国哀悼日</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=43459&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=43459&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6314">hhbcl1414</a>
										</cite>
					<em>2010-4-19</em>
				</td>
				<td class="nums"><strong>53</strong> / <em>1775</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=43459&goto=lastpost#lastpost">2010-4-21 11:01</a></em>
					<cite>by <a href="space.php?username=%CC%EC%D6%AE%B0%D4%CD%F5">天之霸王</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_43604" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=43604&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_43604"><a href="viewthread.php?tid=43604&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">薄熙来：95%的中国人是真心歌唱祖国</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=43604&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=43604&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3202">glim</a>
										</cite>
					<em>2010-4-20</em>
				</td>
				<td class="nums"><strong>53</strong> / <em>923</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=43604&goto=lastpost#lastpost">2010-4-26 17:06</a></em>
					<cite>by <a href="space.php?username=forever1983">forever1983</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_44006" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=44006&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_44006"><a href="viewthread.php?tid=44006&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传，记者采访玉树地震并非死于高原反应</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=44006&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=44006&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=9953">大师</a>
										</cite>
					<em>2010-4-24</em>
				</td>
				<td class="nums"><strong>53</strong> / <em>1985</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=44006&goto=lastpost#lastpost">2010-4-28 17:25</a></em>
					<cite>by <a href="space.php?username=viEcho">viEcho</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_44803" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=44803&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_44803"><a href="viewthread.php?tid=44803&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">武汉特警首次持九五式突击步枪公开巡逻</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=44803&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=44803&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=9323">bengle</a>
										</cite>
					<em>2010-5-4</em>
				</td>
				<td class="nums"><strong>53</strong> / <em>998</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=44803&goto=lastpost#lastpost">2010-5-7 06:16</a></em>
					<cite>by <a href="space.php?username=%B0%AE%CE%D2%CB%F9%B0%AE">爱我所爱</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_44881" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=44881&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_44881"><a href="viewthread.php?tid=44881&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传宋平病危</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=44881&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=44881&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3202">glim</a>
										</cite>
					<em>2010-5-3</em>
				</td>
				<td class="nums"><strong>53</strong> / <em>2265</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=44881&goto=lastpost#lastpost">2010-5-8 22:17</a></em>
					<cite>by <a href="space.php?username=yuechi">yuechi</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_46580" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=46580&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_46580"><a href="viewthread.php?tid=46580&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">江泽民在扬州夜宴李光耀</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=46580&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=46580&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=13201">sunaaron123</a>
										</cite>
					<em>2010-5-21</em>
				</td>
				<td class="nums"><strong>53</strong> / <em>1820</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=46580&goto=lastpost#lastpost">2010-5-27 15:42</a></em>
					<cite>by <a href="space.php?username=gundamwang">gundamwang</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_48232" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=48232&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_48232"><a href="viewthread.php?tid=48232&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">“可能吧”站长被约“喝茶”</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=48232&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=48232&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=14021">王书记</a>
										</cite>
					<em>2010-6-6</em>
				</td>
				<td class="nums"><strong>53</strong> / <em>2101</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=48232&goto=lastpost#lastpost">2010-6-8 17:47</a></em>
					<cite>by <a href="space.php?username=%BA%CB%D7%D3%C1%A6%C1%BF">核子力量</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_48180" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=48180&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_48180"><a href="viewthread.php?tid=48180&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">深圳卫视因播出“六四要平反”画面遭处分</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=48180&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=48180&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2303">饭岛爱</a>
										</cite>
					<em>2010-6-3</em>
				</td>
				<td class="nums"><strong>53</strong> / <em>2625</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=48180&goto=lastpost#lastpost">2010-6-8 19:53</a></em>
					<cite>by <a href="space.php?username=%B3%AC%BC%B6%B4%F3%B7%B9%CD%B0">超级大饭桶</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_48979" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=48979&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_48979"><a href="viewthread.php?tid=48979&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">网监支队成功阻止QQ网友“恐怖约定”</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=48979&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=48979&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4004">ttrendr</a>
										</cite>
					<em>2010-6-10</em>
				</td>
				<td class="nums"><strong>53</strong> / <em>1628</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=48979&goto=lastpost#lastpost">2010-6-12 13:12</a></em>
					<cite>by <a href="space.php?username=%B2%CB%D0%C4%B3%E6">菜心虫</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_48885" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=48885&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_48885"><a href="viewthread.php?tid=48885&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">京城将军之女脖子挂父亲遗像上访</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=48885&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=48885&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=13406">fbnqxs</a>
										</cite>
					<em>2010-6-9</em>
				</td>
				<td class="nums"><strong>53</strong> / <em>1818</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=48885&goto=lastpost#lastpost">2010-6-14 23:47</a></em>
					<cite>by <a href="space.php?username=%C4%E3%D6%AA%B5%C0%B5%C4">你知道的</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_51364" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=51364&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_51364"><a href="viewthread.php?tid=51364&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">百度须在首页向“海运女”连续道歉三天</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=51364&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=51364&amp;extra=page%3D21%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=15783">裝傻小Q</a>
										</cite>
					<em>2010-7-1</em>
				</td>
				<td class="nums"><strong>53</strong> / <em>2235</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=51364&goto=lastpost#lastpost">2010-7-4 10:26</a></em>
					<cite>by <a href="space.php?username=%B7%CF%D6%D6%B6%B9%F4%F9">废种豆豉</a></cite>
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
	<div class="pages"><em>&nbsp;22278&nbsp;</em><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=1" class="first">1 ...</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=20" class="prev">&lsaquo;&lsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=19">19</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=20">20</a><strong>21</strong><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=22">22</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=23">23</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=24">24</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=25">25</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=26">26</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=27">27</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=28">28</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=22" class="next">&rsaquo;&rsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=349" class="last">... 349</a><kbd><input type="text" name="custompage" size="3" onkeydown="if(event.keyCode==13) {window.location='forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page='+this.value; return false;}" /></kbd></div>	</div>

  
	<div class="box">
			<span class="headactions"><a href="forumdisplay.php?fid=2&amp;page=21&amp;showoldetails=yes#online" class="nobdr"><img src="images/default/collapsed_yes.gif" alt="" /></a></span>
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
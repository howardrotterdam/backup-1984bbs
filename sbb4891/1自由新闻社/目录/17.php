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
			window.location = 'forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&page=16';
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
<div class="pages"><em>&nbsp;22278&nbsp;</em><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=1" class="first">1 ...</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=16" class="prev">&lsaquo;&lsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=15">15</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=16">16</a><strong>17</strong><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=18">18</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=19">19</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=20">20</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=21">21</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=22">22</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=23">23</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=24">24</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=18" class="next">&rsaquo;&rsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=349" class="last">... 349</a><kbd><input type="text" name="custompage" size="3" onkeydown="if(event.keyCode==13) {window.location='forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page='+this.value; return false;}" /></kbd></div></div>

<div style="float:left;border:1px solid #CCC; border-bottom:none;;width:218px; background: url(/imgs/1984radio.jpg) 200px 2px no-repeat;padding:5px 0 5px 12px;margin:0px 0 0 13px">

<p><b><a href="/radio/index.php" target="_blank">1984FM</a></b><br /><b><a href="https://voxli.com/1984bbs" target="_blank">1984Chat</a></b>&nbsp;</p> 
</div>

<div style="clear:both;height:0px;width:100%;font-size:1px;">&nbsp;</div>

	<ul class="popupmenu_popup newspecialmenu" id="newspecial_menu" style="display: none">
		<li><a href="post.php?action=newthread&amp;fid=2&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">发新话题</a></li>		<li class="poll"><a href="post.php?action=newthread&amp;fid=2&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;special=1">发布投票</a></li>													</ul>
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

					<tbody id="normalthread_58510" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=58510&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_58510"><a href="viewthread.php?tid=58510&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">法参院通过伊斯兰面纱禁令</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=58510&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=58510&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=9517">老西</a>
										</cite>
					<em>2010-9-15</em>
				</td>
				<td class="nums"><strong>60</strong> / <em>819</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=58510&goto=lastpost#lastpost">2010-9-22 21:41</a></em>
					<cite>by <a href="space.php?username=frick">frick</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_47995" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=47995&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_47995"><a href="viewthread.php?tid=47995&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">黑龙江富锦村民堵铁路爆冲突</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=47995&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=47995&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8911">硬硬</a>
										</cite>
					<em>2010-5-1</em>
				</td>
				<td class="nums"><strong>60</strong> / <em>2662</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=47995&goto=lastpost#lastpost">2010-6-2 12:04</a></em>
					<cite>by <a href="space.php?username=%C6%AF%C1%C1%CD%DE%CD%DE">漂亮娃娃</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_47712" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=47712&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_47712"><a href="viewthread.php?tid=47712&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">刘晓波被送往辽宁锦州监狱服刑</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=47712&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=47712&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6887">不锈钢老鼠</a>
										</cite>
					<em>2010-5-30</em>
				</td>
				<td class="nums"><strong>60</strong> / <em>1868</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=47712&goto=lastpost#lastpost">2010-6-6 20:34</a></em>
					<cite>by <a href="space.php?username=%CB%AC%CD%E1%CD%E1">爽歪歪</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_51381" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=51381&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_51381"><a href="viewthread.php?tid=51381&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">艾未未冯正虎半裸会见</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=51381&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=51381&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=10130">西风</a>
										</cite>
					<em>2010-7-1</em>
				</td>
				<td class="nums"><strong>60</strong> / <em>2240</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=51381&goto=lastpost#lastpost">2010-7-3 12:07</a></em>
					<cite>by <a href="space.php?username=%BA%CC%D2%B9">禾夜</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_51548" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=51548&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_51548"><a href="viewthread.php?tid=51548&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">欧美记者建议世界杯和奥运应固定在中国办</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=51548&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=51548&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2947">生年不满百</a>
										</cite>
					<em>2010-7-2</em>
				</td>
				<td class="nums"><strong>60</strong> / <em>1282</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=51548&goto=lastpost#lastpost">2010-7-4 05:03</a></em>
					<cite>by <a href="space.php?username=%BA%FC%C0%EA%BF%A8%BF%A8">狐狸卡卡</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_51432" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=51432&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_51432"><a href="viewthread.php?tid=51432&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">洪门总会长称统一是洪门的最终目标</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=51432&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=51432&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=9991">duck_1984</a>
										</cite>
					<em>2010-7-1</em>
				</td>
				<td class="nums"><strong>60</strong> / <em>1472</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=51432&goto=lastpost#lastpost">2010-7-4 20:37</a></em>
					<cite>by <a href="space.php?username=2008.">2008.</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_52635" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=52635&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_52635"><a href="viewthread.php?tid=52635&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">一周图片新闻 7.12-7.18</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=52635&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=52635&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2232">老杂疫</a>
										</cite>
					<em>2010-7-13</em>
				</td>
				<td class="nums"><strong>60</strong> / <em>1433</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=52635&goto=lastpost#lastpost">2010-7-17 17:44</a></em>
					<cite>by <a href="space.php?username=tjy0101">tjy0101</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_16852" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=16852&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_16852"><a href="viewthread.php?tid=16852&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">喉舌自家房屋被拆 媒体不睬无奈上诉网络</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=16852&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=16852&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=105">黄阿狗</a>
										</cite>
					<em>2009-7-15</em>
				</td>
				<td class="nums"><strong>60</strong> / <em>1215</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=16852&goto=lastpost#lastpost">2009-7-20 19:35</a></em>
					<cite>by <a href="space.php?username=%B4%F3%CF%E9%D4%C6">大祥云</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_13487" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=13487&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_13487"><a href="viewthread.php?tid=13487&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">罗京追悼会组图：神秘男现场亮相  众喇叭兔死狐悲</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=13487&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=13487&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=852">未来他老爸</a>
										</cite>
					<em>2009-6-13</em>
				</td>
				<td class="nums"><strong>59</strong> / <em>1877</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=13487&goto=lastpost#lastpost">2009-6-16 12:44</a></em>
					<cite>by <a href="space.php?username=%CE%B4%C0%B4%CB%FB%C0%CF%B0%D6">未来他老爸</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_16265" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=16265&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_16265"><a href="viewthread.php?tid=16265&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">胡提前结束访问回国</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=16265&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=16265&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3588">blueglen</a>
										</cite>
					<em>2009-7-8</em>
				</td>
				<td class="nums"><strong>59</strong> / <em>2965</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=16265&goto=lastpost#lastpost">2009-7-10 00:12</a></em>
					<cite>by <a href="space.php?username=%CD%E1%CD%E1">歪歪</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_21106" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=21106&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_21106"><a href="viewthread.php?tid=21106&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">一周图片新闻 8.31-9.6</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=21106&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=21106&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2232">老杂疫</a>
										</cite>
					<em>2009-9-1</em>
				</td>
				<td class="nums"><strong>59</strong> / <em>1593</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=21106&goto=lastpost#lastpost">2009-9-7 00:29</a></em>
					<cite>by <a href="space.php?username=b7t7">b7t7</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_21269" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=21269&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_21269"><a href="viewthread.php?tid=21269&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">达赖喇嘛：台湾的抗议者这么爱中国，有机会不妨赴中国争民主</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=21269&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=21269&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=134">丁丁</a>
										</cite>
					<em>2009-9-3</em>
				</td>
				<td class="nums"><strong>59</strong> / <em>1470</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=21269&goto=lastpost#lastpost">2009-9-8 13:36</a></em>
					<cite>by <a href="space.php?username=%CF%E3%C7%EF%B6%E0%BC%AA">香秋多吉</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_24868" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=24868&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_24868"><a href="viewthread.php?tid=24868&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">颐和园“临幸门”后续 老太太网上求艳照</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=24868&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=24868&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7">张书记</a>
										</cite>
					<em>2009-10-12</em>
				</td>
				<td class="nums"><strong>59</strong> / <em>1734</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=24868&goto=lastpost#lastpost">2009-10-13 21:19</a></em>
					<cite>by <a href="space.php?username=%BB%D1%B5%B0%C5%C9%CF%B7%BE%E7">谎蛋派戏剧</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_25480" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=25480&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_25480"><a href="viewthread.php?tid=25480&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">诺贝尔文学奖得主：世界远未认识共产恐怖暴行</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=25480&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=25480&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1686">奧斯卡金</a>
										</cite>
					<em>2009-10-15</em>
				</td>
				<td class="nums"><strong>59</strong> / <em>2027</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=25480&goto=lastpost#lastpost">2009-10-18 23:24</a></em>
					<cite>by <a href="space.php?username=%CF%C4%C8%D5%BF%FB">夏日葵</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_26145" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=26145&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_26145"><a href="viewthread.php?tid=26145&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">李源潮：干部要把好欲望关 不许涉足低俗场所</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=26145&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=26145&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5978">散光</a>
										</cite>
					<em>2009-10-22</em>
				</td>
				<td class="nums"><strong>59</strong> / <em>1451</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=26145&goto=lastpost#lastpost">2009-10-27 03:14</a></em>
					<cite>by <a href="space.php?username=Candice">Candice</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_9890" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=9890&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_9890"><a href="viewthread.php?tid=9890&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">中国内地疑似感染猪流感</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=9890&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=9890&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5140">kakagoing</a>
										</cite>
					<em>2009-4-28</em>
				</td>
				<td class="nums"><strong>59</strong> / <em>1045</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=9890&goto=lastpost#lastpost">2009-5-1 08:16</a></em>
					<cite>by <a href="space.php?username=kakagoing">kakagoing</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_6454" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=6454&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_6454"><a href="viewthread.php?tid=6454&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">低俗扩大化运动蓬勃开展 搜索A片方面取得重大成果</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=6454&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=6454&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2028">猪肘</a>
										</cite>
					<em>2009-3-6</em>
				</td>
				<td class="nums"><strong>59</strong> / <em>2346</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=6454&goto=lastpost#lastpost">2009-5-5 23:49</a></em>
					<cite>by <a href="space.php?username=wufeng33">wufeng33</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_2449" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=2449&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_2449"><a href="viewthread.php?tid=2449&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">多图：最可爱的人保持了最大的克制</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=2449&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=2449&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=85">王五毛</a>
										</cite>
					<em>2008-11-21</em>
				</td>
				<td class="nums"><strong>59</strong> / <em>1569</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=2449&goto=lastpost#lastpost">2009-1-24 22:06</a></em>
					<cite>by <a href="space.php?username=%C2%DE%B7%D7%B7%D7">罗纷纷</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_32765" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=32765&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_32765"><a href="viewthread.php?tid=32765&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">26岁男被13岁女同居涉嫌强奸被捕</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=32765&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=32765&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=852">未来他老爸</a>
										</cite>
					<em>2009-12-28</em>
				</td>
				<td class="nums"><strong>59</strong> / <em>1664</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=32765&goto=lastpost#lastpost">2009-12-29 18:00</a></em>
					<cite>by <a href="space.php?username=weke">weke</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_33987" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=33987&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_33987"><a href="viewthread.php?tid=33987&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">李鹏爷爷给我们寄贺卡了</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=33987&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=33987&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3202">glim</a>
										</cite>
					<em>2010-1-8</em>
				</td>
				<td class="nums"><strong>59</strong> / <em>1571</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=33987&goto=lastpost#lastpost">2010-1-12 01:22</a></em>
					<cite>by <a href="space.php?username=%B1%F0%D3%D0%D3%C3%D0%C4%B5%C4%C8%CB">别有用心的人</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_34805" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=34805&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_34805"><a href="viewthread.php?tid=34805&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">宾馆放毫无剧情黄片 房客考研发挥失常</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=34805&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=34805&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4991">sixapostle</a>
										</cite>
					<em>2010-1-15</em>
				</td>
				<td class="nums"><strong>59</strong> / <em>1671</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=34805&goto=lastpost#lastpost">2010-1-18 11:05</a></em>
					<cite>by <a href="space.php?username=%BA%FC%C0%EA%BF%A8%BF%A8">狐狸卡卡</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_37491" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=37491&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_37491"><a href="viewthread.php?tid=37491&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">朝鲜要求持手机的人民自首</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=37491&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=37491&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3308">天衢居士</a>
										</cite>
					<em>2010-2-11</em>
				</td>
				<td class="nums"><strong>59</strong> / <em>1945</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=37491&goto=lastpost#lastpost">2010-2-23 19:20</a></em>
					<cite>by <a href="space.php?username=pwcpp">pwcpp</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_38330" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=38330&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_38330"><a href="viewthread.php?tid=38330&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">政府采购了6999元的500G移动硬盘</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=38330&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=38330&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7919">路边社门卫</a>
										</cite>
					<em>2010-2-23</em>
				</td>
				<td class="nums"><strong>59</strong> / <em>1965</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=38330&goto=lastpost#lastpost">2010-2-25 17:58</a></em>
					<cite>by <a href="space.php?username=%CB%BF%CB%BF%CD%C3">丝丝兔</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_26752" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=26752&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_26752"><a href="viewthread.php?tid=26752&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">薄熙来：我们要从从贺国强、汪洋手里接过打黑接力棒！</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=26752&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=26752&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3202">glim</a>
										</cite>
					<em>2009-10-29</em>
				</td>
				<td class="nums"><strong>59</strong> / <em>1609</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=26752&goto=lastpost#lastpost">2009-10-31 20:12</a></em>
					<cite>by <a href="space.php?username=%D2%D4%B5%D8%D6%AE%C3%FB">以地之名</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_25831" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=25831&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_25831"><a href="viewthread.php?tid=25831&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">普京压制苏共政治迫害史研究 一名历史学家被捕</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=25831&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=25831&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7002">luugoo</a>
										</cite>
					<em>2009-10-21</em>
				</td>
				<td class="nums"><strong>59</strong> / <em>1171</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=25831&goto=lastpost#lastpost">2009-11-1 21:52</a></em>
					<cite>by <a href="space.php?username=%D7%D3%D4%BB">子曰</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_28830" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=28830&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_28830"><a href="viewthread.php?tid=28830&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">留美博士后“归国报效” 摆地摊睡大街</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=28830&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=28830&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5063">deidei</a>
										</cite>
					<em>2009-11-16</em>
				</td>
				<td class="nums"><strong>59</strong> / <em>1362</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=28830&goto=lastpost#lastpost">2009-11-23 20:08</a></em>
					<cite>by <a href="space.php?username=%D0%A1%C1%FA%C8%CB">小龙人</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_27826" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=27826&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_27826"><a href="viewthread.php?tid=27826&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传，北京电视台因错误的播放“政治权力排序”台长被撤职</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=27826&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=27826&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=21">大仙儿</a>
										</cite>
					<em>2009-11-11</em>
				</td>
				<td class="nums"><strong>59</strong> / <em>3257</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=27826&goto=lastpost#lastpost">2009-11-25 15:50</a></em>
					<cite>by <a href="space.php?username=%CD%EA%D1%D5%B0%A2%B9%C7%B4%F2">完颜阿骨打</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_30478" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=30478&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_30478"><a href="viewthread.php?tid=30478&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">“奥女郎”王紫菲脱衣花了20万</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=30478&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=30478&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2564">老卡</a>
										</cite>
					<em>2009-12-4</em>
				</td>
				<td class="nums"><strong>59</strong> / <em>2437</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=30478&goto=lastpost#lastpost">2009-12-10 20:11</a></em>
					<cite>by <a href="space.php?username=vookeno">vookeno</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_30647" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=30647&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_30647"><a href="viewthread.php?tid=30647&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传，高层要求广电停止关停BT，近日恢复大部分站点</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=30647&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=30647&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7093">elfix</a>
										</cite>
					<em>2009-12-10</em>
				</td>
				<td class="nums"><strong>59</strong> / <em>2137</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=30647&goto=lastpost#lastpost">2009-12-12 00:51</a></em>
					<cite>by <a href="space.php?username=%C0%B3%D2%F2%B9%FE%CC%D8">莱因哈特</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_30515" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=30515&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_30515"><a href="viewthread.php?tid=30515&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">我是处男，你是处女，我爱你</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=30515&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=30515&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4544">袜子自己洗</a>
										</cite>
					<em>2009-12-9</em>
				</td>
				<td class="nums"><strong>59</strong> / <em>1772</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=30515&goto=lastpost#lastpost">2009-12-13 10:29</a></em>
					<cite>by <a href="space.php?username=zhuhexie2004">zhuhexie2004</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_31286" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=31286&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_31286"><a href="viewthread.php?tid=31286&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">75%台湾青年人自认是台湾人，不是中国人</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=31286&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=31286&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=134">丁丁</a>
										</cite>
					<em>2009-12-16</em>
				</td>
				<td class="nums"><strong>59</strong> / <em>1091</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=31286&goto=lastpost#lastpost">2009-12-18 00:11</a></em>
					<cite>by <a href="space.php?username=DarkStar">DarkStar</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_31217" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=31217&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_31217"><a href="viewthread.php?tid=31217&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">美报评选的2009世界独裁者排行出炉</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=31217&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=31217&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=9487">darrell</a>
										</cite>
					<em>2009-12-15</em>
				</td>
				<td class="nums"><strong>59</strong> / <em>2179</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=31217&goto=lastpost#lastpost">2009-12-24 21:19</a></em>
					<cite>by <a href="space.php?username=platism">platism</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_40928" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=40928&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_40928"><a href="viewthread.php?tid=40928&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">郭敬明：没兴趣像韩寒那样做公共知识分子</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=40928&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=40928&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4705">dreamingly</a>
										</cite>
					<em>2010-3-22</em>
				</td>
				<td class="nums"><strong>59</strong> / <em>1863</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=40928&goto=lastpost#lastpost">2010-3-23 21:39</a></em>
					<cite>by <a href="space.php?username=%D1%B9%C9%CB%B5%C4%C2%AB%CE%AD">压伤的芦苇</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_41667" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=41667&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_41667"><a href="viewthread.php?tid=41667&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">上海世博期间购买菜刀等需凭身份证</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=41667&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=41667&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8173">shsmtz</a>
										</cite>
					<em>2010-3-29</em>
				</td>
				<td class="nums"><strong>59</strong> / <em>1061</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=41667&goto=lastpost#lastpost">2010-4-5 19:14</a></em>
					<cite>by <a href="space.php?username=mason">mason</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_41804" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=41804&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_41804"><a href="viewthread.php?tid=41804&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">当局开审赵连海 法院将不公开开庭</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=41804&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=41804&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=9737">剁辣椒</a>
										</cite>
					<em>2010-3-30</em>
				</td>
				<td class="nums"><strong>59</strong> / <em>1267</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=41804&goto=lastpost#lastpost">2010-4-14 16:55</a></em>
					<cite>by <a href="space.php?username=%B2%CB%B5%F9">菜爹</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_43295" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=43295&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_43295"><a href="viewthread.php?tid=43295&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">曾子墨父亲曾庆瑞直言《爱情》低俗 赵本山恼羞成怒</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=43295&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=43295&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5588">我家旺财有喜了</a>
										</cite>
					<em>2010-4-16</em>
				</td>
				<td class="nums"><strong>59</strong> / <em>1855</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=43295&goto=lastpost#lastpost">2010-4-21 23:36</a></em>
					<cite>by <a href="space.php?username=snip3r">snip3r</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_44020" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=44020&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_44020"><a href="viewthread.php?tid=44020&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">消防战士口含矿泉水喷灭东方明珠明火</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=44020&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=44020&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4705">dreamingly</a>
										</cite>
					<em>2010-4-25</em>
				</td>
				<td class="nums"><strong>59</strong> / <em>1739</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=44020&goto=lastpost#lastpost">2010-4-26 19:38</a></em>
					<cite>by <a href="space.php?username=%CE%DE%D1%D4%B5%C4%C9%BD%C7%F0">无言的山丘</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_44016" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=44016&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_44016"><a href="viewthread.php?tid=44016&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传，张春贤将治疆</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=44016&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=44016&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=12310">炽鸢侯</a>
										</cite>
					<em>2010-4-23</em>
				</td>
				<td class="nums"><strong>59</strong> / <em>2353</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=44016&goto=lastpost#lastpost">2010-4-27 16:25</a></em>
					<cite>by <a href="space.php?username=outsight">outsight</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_44218" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=44218&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_44218"><a href="viewthread.php?tid=44218&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">南京澄清6月13日将有大地震谣言 拘捕女发帖人</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=44218&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=44218&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1258">路边社记者</a>
										</cite>
					<em>2010-4-27</em>
				</td>
				<td class="nums"><strong>59</strong> / <em>1076</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=44218&goto=lastpost#lastpost">2010-4-28 20:02</a></em>
					<cite>by <a href="space.php?username=%CE%DE%D1%D4%B5%C4%C9%BD%C7%F0">无言的山丘</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_44271" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=44271&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_44271"><a href="viewthread.php?tid=44271&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">江泽民游览无锡 露面闹市街区</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=44271&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=44271&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=9953">大师</a>
										</cite>
					<em>2010-4-27</em>
				</td>
				<td class="nums"><strong>59</strong> / <em>2012</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=44271&goto=lastpost#lastpost">2010-4-28 23:02</a></em>
					<cite>by <a href="space.php?username=vimalakirti">vimalakirti</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_44380" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=44380&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_44380"><a href="viewthread.php?tid=44380&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">真理部最新指令：“泰兴幼儿园砍杀事件”不对网民开放评论</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=44380&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=44380&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1258">路边社记者</a>
										</cite>
					<em>2010-4-29</em>
				</td>
				<td class="nums"><strong>59</strong> / <em>1626</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=44380&goto=lastpost#lastpost">2010-4-30 11:51</a></em>
					<cite>by <a href="space.php?username=%C9%CF%B8%D8%C9%CF%CF%D9">上肛上腺</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_44918" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=44918&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_44918"><a href="viewthread.php?tid=44918&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">钱文忠热切赞美世博会讴歌俞书记</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=44918&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=44918&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=223">透露社记者</a>
										</cite>
					<em>2010-5-5</em>
				</td>
				<td class="nums"><strong>59</strong> / <em>1326</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=44918&goto=lastpost#lastpost">2010-5-8 00:25</a></em>
					<cite>by <a href="space.php?username=%CD%B8%C2%B6%C9%E7%BC%C7%D5%DF">透露社记者</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_46207" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=46207&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_46207"><a href="viewthread.php?tid=46207&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">温家宝暗示金正日要自力更生改革开放 不能吃白食</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=46207&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=46207&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=852">未来他老爸</a>
										</cite>
					<em>2010-5-9</em>
				</td>
				<td class="nums"><strong>59</strong> / <em>3154</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=46207&goto=lastpost#lastpost">2010-5-18 11:05</a></em>
					<cite>by <a href="space.php?username=%C6%D0%C6%D0">菩菩</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_48695" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=48695&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_48695"><a href="viewthread.php?tid=48695&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传上海当局对韩寒袁腾飞下达媒体封杀令</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=48695&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=48695&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6723">卡哥</a>
										</cite>
					<em>2010-6-8</em>
				</td>
				<td class="nums"><strong>59</strong> / <em>1908</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=48695&goto=lastpost#lastpost">2010-6-10 10:48</a></em>
					<cite>by <a href="space.php?username=%C3%D7%D1%BD%C3%D7%D1%BD">米呀米呀</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_50447" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=50447&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_50447"><a href="viewthread.php?tid=50447&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">美国杂志评选出“全世界最坏的23名独裁者”</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=50447&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=50447&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=624">左岸拾荒</a>
										</cite>
					<em>2010-6-22</em>
				</td>
				<td class="nums"><strong>59</strong> / <em>2165</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=50447&goto=lastpost#lastpost">2010-6-24 15:12</a></em>
					<cite>by <a href="space.php?username=%E5%C8%B2%A9">迦博</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_50493" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=50493&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_50493"><a href="viewthread.php?tid=50493&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">公安部将通报破获重大恐怖组织案件情况</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=50493&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=50493&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=10890">xiaohe1120</a>
										</cite>
					<em>2010-6-22</em>
				</td>
				<td class="nums"><strong>59</strong> / <em>1675</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=50493&goto=lastpost#lastpost">2010-6-24 21:16</a></em>
					<cite>by <a href="space.php?username=%D0%A1%B9%ED%BF%AA%B5%EA">小鬼开店</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_51402" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=51402&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_51402"><a href="viewthread.php?tid=51402&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">中共建党89周年 网络评论员造势</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=51402&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=51402&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2973">free1989</a>
										</cite>
					<em>2010-7-1</em>
				</td>
				<td class="nums"><strong>59</strong> / <em>1044</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=51402&goto=lastpost#lastpost">2010-7-2 12:15</a></em>
					<cite>by <a href="space.php?username=%BC%E1%B1%DA%C7%E5%D2%B0">坚壁清野</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_53215" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=53215&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_53215"><a href="viewthread.php?tid=53215&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">中共成立“李鹏日记泄密专案组”</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=53215&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=53215&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1258">路边社记者</a>
										</cite>
					<em>2010-6-24</em>
				</td>
				<td class="nums"><strong>59</strong> / <em>3312</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=53215&goto=lastpost#lastpost">2010-7-18 21:54</a></em>
					<cite>by <a href="space.php?username=%BA%CB%D7%D3%C1%A6%C1%BF">核子力量</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_54251" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=54251&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_54251"><a href="viewthread.php?tid=54251&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传中宣部新闻协调小组组长万武义出逃英国</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=54251&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=54251&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=11493">gzlxd</a>
										</cite>
					<em>2010-7-26</em>
				</td>
				<td class="nums"><strong>59</strong> / <em>2510</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=54251&goto=lastpost#lastpost">2010-7-29 11:36</a></em>
					<cite>by <a href="space.php?username=strongwind13">strongwind13</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_17254" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=17254&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_17254"><a href="viewthread.php?tid=17254&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">江西将建世界最大钟塔——“和谐钟塔”</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=17254&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=17254&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=169">抑扬</a>
										</cite>
					<em>2009-7-19</em>
				</td>
				<td class="nums"><strong>59</strong> / <em>913</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=17254&goto=lastpost#lastpost">2009-7-22 15:04</a></em>
					<cite>by <a href="space.php?username=%BE%CD%C3%FE%C4%E3">就摸你</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_18435" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=18435&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_18435"><a href="viewthread.php?tid=18435&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">广东省委书记汪洋：中国从不缺言论自由</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=18435&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=18435&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2810">zhangxupage</a>
										</cite>
					<em>2009-7-31</em>
				</td>
				<td class="nums"><strong>59</strong> / <em>1031</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=18435&goto=lastpost#lastpost">2009-8-2 16:01</a></em>
					<cite>by <a href="space.php?username=McPhone">McPhone</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_18932" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=18932&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_18932"><a href="viewthread.php?tid=18932&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">真理部：“91%富豪是高干子女”系扯淡 全网清剿相关文章</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=18932&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=18932&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1770">nustbobo</a>
										</cite>
					<em>2009-8-5</em>
				</td>
				<td class="nums"><strong>59</strong> / <em>2073</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=18932&goto=lastpost#lastpost">2009-8-10 15:42</a></em>
					<cite>by <a href="space.php?username=anitalan">anitalan</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_19205" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=19205&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_19205"><a href="viewthread.php?tid=19205&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">天朝年度最佳科幻喜剧群P政治伦理大片</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=19205&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=19205&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5119">夠賤喝血射繪</a>
										</cite>
					<em>2009-8-4</em>
				</td>
				<td class="nums"><strong>59</strong> / <em>1421</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=19205&goto=lastpost#lastpost">2009-8-10 20:35</a></em>
					<cite>by <a href="space.php?username=Bane">Bane</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_19635" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=19635&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_19635"><a href="viewthread.php?tid=19635&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">“我想登台唱这首歌，但我是共产党的县委书记”</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=19635&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=19635&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4686">曰耳又</a>
										</cite>
					<em>2009-8-14</em>
				</td>
				<td class="nums"><strong>59</strong> / <em>1511</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=19635&goto=lastpost#lastpost">2009-8-18 23:58</a></em>
					<cite>by <a href="space.php?username=5%C3%AB%C3%C3">5毛妹</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_55311" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=55311&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_55311"><a href="viewthread.php?tid=55311&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">泉州地震局长：国外预测我国地震必须按照我国法律进行</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=55311&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=55311&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=11463">CCAV</a>
										</cite>
					<em>2010-8-12</em>
				</td>
				<td class="nums"><strong>59</strong> / <em>1318</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=55311&goto=lastpost#lastpost">2010-8-16 21:33</a></em>
					<cite>by <a href="space.php?username=realsun">realsun</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_55933" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=55933&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_55933"><a href="viewthread.php?tid=55933&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">李敖新书《阳痿美国》大陆发行  痛批美帝</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=55933&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=55933&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2804">musicool</a>
										</cite>
					<em>2010-8-19</em>
				</td>
				<td class="nums"><strong>59</strong> / <em>980</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=55933&goto=lastpost#lastpost">2010-8-20 20:08</a></em>
					<cite>by <a href="space.php?username=etsail">etsail</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_56366" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=56366&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_56366"><a href="viewthread.php?tid=56366&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">《惩治汉奸言论法》提案人喻权域病亡</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=56366&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=56366&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7">张书记</a>
										</cite>
					<em>2010-8-25</em>
				</td>
				<td class="nums"><strong>59</strong> / <em>1297</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=56366&goto=lastpost#lastpost">2010-8-27 12:39</a></em>
					<cite>by <a href="space.php?username=%CF%F4%D2%A2%C3%A8">萧尧猫</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_56464" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=56464&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_56464"><a href="viewthread.php?tid=56464&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">成龙微博宣称 在菲人质被杀香港没有憎恨</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=56464&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=56464&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=17327">开水开水</a>
										</cite>
					<em>2010-8-25</em>
				</td>
				<td class="nums"><strong>59</strong> / <em>1554</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=56464&goto=lastpost#lastpost">2010-8-29 13:05</a></em>
					<cite>by <a href="space.php?username=%D0%C4%CB%E6%C4%E3%B6%AF">心随你动</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_56849" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=56849&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_56849"><a href="viewthread.php?tid=56849&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">真理部最新指令：不报道“越共总书记实行差额选举”</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=56849&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=56849&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5831">yaoloucun</a>
										</cite>
					<em>2010-8-30</em>
				</td>
				<td class="nums"><strong>59</strong> / <em>1987</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=56849&goto=lastpost#lastpost">2010-9-2 14:00</a></em>
					<cite>by <a href="space.php?username=senine">senine</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_58424" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=58424&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_58424"><a href="viewthread.php?tid=58424&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">李连杰称壹基金无法取得合法身份或面临中断</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=58424&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=58424&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4124">倔牛</a>
										</cite>
					<em>2010-9-14</em>
				</td>
				<td class="nums"><strong>59</strong> / <em>1316</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=58424&goto=lastpost#lastpost">2010-9-16 22:58</a></em>
					<cite>by <a href="space.php?username=%BD%E2%CE%F2">解悟</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_58990" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=58990&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_58990"><a href="viewthread.php?tid=58990&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传金正日妹妹金敬姬将接班</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=58990&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=58990&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=12310">炽鸢侯</a>
										</cite>
					<em>2010-9-20</em>
				</td>
				<td class="nums"><strong>59</strong> / <em>1899</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=58990&goto=lastpost#lastpost">2010-9-25 17:21</a></em>
					<cite>by <a href="space.php?username=%D7%D4%D3%C9%D7%D4%D4%DA%B7%E7">自由自在风</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_57913" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=57913&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_57913"><a href="viewthread.php?tid=57913&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">一周图片新闻 9.6-9.12</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=57913&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=57913&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2232">老杂疫</a>
										</cite>
					<em>2010-9-9</em>
				</td>
				<td class="nums"><strong>59</strong> / <em>1269</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=57913&goto=lastpost#lastpost">2010-9-27 15:01</a></em>
					<cite>by <a href="space.php?username=%D7%D4%D3%C9%D7%D4%D4%DA%B7%E7">自由自在风</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_60669" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=60669&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_60669"><a href="viewthread.php?tid=60669&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">广州亚运会“采火圣女”康辰晨 展示火种</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=60669&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=60669&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=852">未来他老爸</a>
										</cite>
					<em>2010-10-10</em>
				</td>
				<td class="nums"><strong>59</strong> / <em>1454</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=60669&goto=lastpost#lastpost">2010-10-11 21:58</a></em>
					<cite>by <a href="space.php?username=%CE%D2%D0%A6%CE%D2">我笑我</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_54903" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=54903&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_54903"><a href="viewthread.php?tid=54903&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">解放军中将指出中共不改革就会灭亡</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=54903&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=54903&amp;extra=page%3D17%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6314">hhbcl1414</a>
										</cite>
					<em>2010-8-7</em>
				</td>
				<td class="nums"><strong>58</strong> / <em>2248</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=54903&goto=lastpost#lastpost">2010-8-12 10:55</a></em>
					<cite>by <a href="space.php?username=ynkhpp">ynkhpp</a></cite>
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
	<div class="pages"><em>&nbsp;22278&nbsp;</em><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=1" class="first">1 ...</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=16" class="prev">&lsaquo;&lsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=15">15</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=16">16</a><strong>17</strong><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=18">18</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=19">19</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=20">20</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=21">21</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=22">22</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=23">23</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=24">24</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=18" class="next">&rsaquo;&rsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=349" class="last">... 349</a><kbd><input type="text" name="custompage" size="3" onkeydown="if(event.keyCode==13) {window.location='forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page='+this.value; return false;}" /></kbd></div>	</div>

  
	<div class="box">
			<span class="headactions"><a href="forumdisplay.php?fid=2&amp;page=17&amp;showoldetails=yes#online" class="nobdr"><img src="images/default/collapsed_yes.gif" alt="" /></a></span>
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
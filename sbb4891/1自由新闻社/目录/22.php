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
			window.location = 'forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&page=21';
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
<div class="pages"><em>&nbsp;22278&nbsp;</em><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=1" class="first">1 ...</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=21" class="prev">&lsaquo;&lsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=20">20</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=21">21</a><strong>22</strong><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=23">23</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=24">24</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=25">25</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=26">26</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=27">27</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=28">28</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=29">29</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=23" class="next">&rsaquo;&rsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=349" class="last">... 349</a><kbd><input type="text" name="custompage" size="3" onkeydown="if(event.keyCode==13) {window.location='forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page='+this.value; return false;}" /></kbd></div></div>

<div style="float:left;border:1px solid #CCC; border-bottom:none;;width:218px; background: url(/imgs/1984radio.jpg) 200px 2px no-repeat;padding:5px 0 5px 12px;margin:0px 0 0 13px">

<p><b><a href="/radio/index.php" target="_blank">1984FM</a></b><br /><b><a href="https://voxli.com/1984bbs" target="_blank">1984Chat</a></b>&nbsp;</p> 
</div>

<div style="clear:both;height:0px;width:100%;font-size:1px;">&nbsp;</div>

	<ul class="popupmenu_popup newspecialmenu" id="newspecial_menu" style="display: none">
		<li><a href="post.php?action=newthread&amp;fid=2&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">发新话题</a></li>		<li class="poll"><a href="post.php?action=newthread&amp;fid=2&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;special=1">发布投票</a></li>													</ul>
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

					<tbody id="normalthread_53099" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=53099&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_53099"><a href="viewthread.php?tid=53099&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">中宣部失误 最高层内部讲话流出</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=53099&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=53099&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=15617">xiaolee</a>
										</cite>
					<em>2010-7-17</em>
				</td>
				<td class="nums"><strong>53</strong> / <em>2551</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=53099&goto=lastpost#lastpost">2010-7-19 02:15</a></em>
					<cite>by <a href="space.php?username=huanglei1983">huanglei1983</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_27563" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=27563&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_27563"><a href="viewthread.php?tid=27563&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">北京守望教会遭当局打压 上千信众户外冒雪举行礼拜</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=27563&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=27563&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8434">私闻联播</a>
										</cite>
					<em>2009-11-9</em>
				</td>
				<td class="nums"><strong>53</strong> / <em>1294</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=27563&goto=lastpost#lastpost">2009-11-13 15:52</a></em>
					<cite>by <a href="space.php?username=%C4%DF%C7%EF">倪秋</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_27637" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=27637&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_27637"><a href="viewthread.php?tid=27637&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">中国主题墙制止了“多米诺柏林墙”的全部倒塌</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=27637&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=27637&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2428">xiahua</a>
										</cite>
					<em>2009-11-10</em>
				</td>
				<td class="nums"><strong>53</strong> / <em>2071</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=27637&goto=lastpost#lastpost">2009-11-16 09:08</a></em>
					<cite>by <a href="space.php?username=%B7%C5%D6%F0">放逐</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_28229" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=28229&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_28229"><a href="viewthread.php?tid=28229&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">帝都十一月满天飞雪</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=28229&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=28229&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8871">庄三水</a>
										</cite>
					<em>2009-11-1</em>
				</td>
				<td class="nums"><strong>53</strong> / <em>1318</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=28229&goto=lastpost#lastpost">2009-11-16 23:14</a></em>
					<cite>by <a href="space.php?username=luugoo">luugoo</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_27707" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=27707&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_27707"><a href="viewthread.php?tid=27707&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">少林寺官网再次被黑，公示释永信大和尚悔过书</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=27707&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=27707&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=24">wang3</a>
										</cite>
					<em>2009-11-10</em>
				</td>
				<td class="nums"><strong>53</strong> / <em>1793</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=27707&goto=lastpost#lastpost">2009-11-21 22:28</a></em>
					<cite>by <a href="space.php?username=%C2%D2%C2%EB1%2F2">乱码1/2</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_28687" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=28687&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_28687"><a href="viewthread.php?tid=28687&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">储君忆插队：扛200斤麦子十里山路不换肩！</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=28687&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=28687&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3809">丫吃饱了没事干</a>
										</cite>
					<em>2009-11-22</em>
				</td>
				<td class="nums"><strong>53</strong> / <em>1065</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=28687&goto=lastpost#lastpost">2009-11-24 23:58</a></em>
					<cite>by <a href="space.php?username=%B5%A5%CA%D6%B7%F6%C7%BD">单手扶墙</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_28743" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=28743&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_28743"><a href="viewthread.php?tid=28743&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">7名开封犹太人后裔移居以色列</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=28743&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=28743&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8709">szdos</a>
										</cite>
					<em>2009-11-22</em>
				</td>
				<td class="nums"><strong>53</strong> / <em>1058</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=28743&goto=lastpost#lastpost">2009-11-26 17:32</a></em>
					<cite>by <a href="space.php?username=%B4%F3%D0l%CD%F5%EF%88%B5%EA">大衛王飯店</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_29660" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=29660&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_29660"><a href="viewthread.php?tid=29660&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">男子迷奸16岁女孩 被其亲属当街打死</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=29660&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=29660&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5464">上海帅哥</a>
										</cite>
					<em>2009-12-2</em>
				</td>
				<td class="nums"><strong>53</strong> / <em>1190</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=29660&goto=lastpost#lastpost">2009-12-4 11:47</a></em>
					<cite>by <a href="space.php?username=%B1%B1%B7%BD%D0%FE%CE%E5">北方玄五</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_30576" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=30576&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_30576"><a href="viewthread.php?tid=30576&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">她和总书记有个约定</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=30576&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=30576&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3202">glim</a>
										</cite>
					<em>2009-10-10</em>
				</td>
				<td class="nums"><strong>53</strong> / <em>1474</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=30576&goto=lastpost#lastpost">2009-12-10 21:22</a></em>
					<cite>by <a href="space.php?username=%D1%D5%C8%E7%D3%F1">颜如玉</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_13725" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=13725&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_13725"><a href="viewthread.php?tid=13725&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">想就太子党的问题讨论一下</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=13725&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=13725&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4747">raul1943</a>
										</cite>
					<em>2009-6-16</em>
				</td>
				<td class="nums"><strong>53</strong> / <em>1345</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=13725&goto=lastpost#lastpost">2009-6-19 01:20</a></em>
					<cite>by <a href="space.php?username=%BA%CB%D7%D3%C1%A6%C1%BF">核子力量</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_15966" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=15966&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_15966"><a href="viewthread.php?tid=15966&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">关于乌鲁木齐的一些传言</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=15966&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=15966&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2428">xiahua</a>
										</cite>
					<em>2009-7-6</em>
				</td>
				<td class="nums"><strong>53</strong> / <em>1998</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=15966&goto=lastpost#lastpost">2009-7-7 12:52</a></em>
					<cite>by <a href="space.php?username=%C9%A6%B5%BD%CC%EC%B5%D8%CE%DE%C2%D7">搔到天地无伦</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_15510" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=15510&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_15510"><a href="viewthread.php?tid=15510&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">广电总局：为保障《建国大业》的票房，三个月不放其他电影</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=15510&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=15510&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6314">hhbcl1414</a>
										</cite>
					<em>2009-7-1</em>
				</td>
				<td class="nums"><strong>53</strong> / <em>1503</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=15510&goto=lastpost#lastpost">2009-7-8 21:22</a></em>
					<cite>by <a href="space.php?username=jysky">jysky</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_56559" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=56559&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_56559"><a href="viewthread.php?tid=56559&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">真理部最新指令：删除《南方周末》关于高耀洁的文章</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=56559&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=56559&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5588">我家旺财有喜了</a>
										</cite>
					<em>2010-8-26</em>
				</td>
				<td class="nums"><strong>53</strong> / <em>2261</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=56559&goto=lastpost#lastpost">2010-8-30 20:17</a></em>
					<cite>by <a href="space.php?username=%BF%B5%C4%FE">康宁</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_58953" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=58953&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_58953"><a href="viewthread.php?tid=58953&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">解放军驻津巴布韦钻石矿 勾结穆加贝 军火换血钻</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=58953&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=58953&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2564">老卡</a>
										</cite>
					<em>2010-9-19</em>
				</td>
				<td class="nums"><strong>53</strong> / <em>1186</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=58953&goto=lastpost#lastpost">2010-9-21 14:26</a></em>
					<cite>by <a href="space.php?username=Absurd">Absurd</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_59085" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=59085&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_59085"><a href="viewthread.php?tid=59085&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">方舟子遇袭案告破</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=59085&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=59085&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1350">wayshall</a>
										</cite>
					<em>2010-9-21</em>
				</td>
				<td class="nums"><strong>53</strong> / <em>1369</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=59085&goto=lastpost#lastpost">2010-9-22 23:41</a></em>
					<cite>by <a href="space.php?username=Angelo">Angelo</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_59052" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=59052&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_59052"><a href="viewthread.php?tid=59052&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">一周图片新闻 9.13-9.19</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=59052&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=59052&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2232">老杂疫</a>
										</cite>
					<em>2010-9-21</em>
				</td>
				<td class="nums"><strong>53</strong> / <em>1060</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=59052&goto=lastpost#lastpost">2010-9-23 23:41</a></em>
					<cite>by <a href="space.php?username=%D1%EE%B1%FE%BC%D1">杨炳佳</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_59514" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=59514&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_59514"><a href="viewthread.php?tid=59514&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">中共发布人权白皮书称信访量持续下降 互联网上言论自由</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=59514&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=59514&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=12310">炽鸢侯</a>
										</cite>
					<em>2010-9-26</em>
				</td>
				<td class="nums"><strong>53</strong> / <em>902</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=59514&goto=lastpost#lastpost">2010-9-27 13:08</a></em>
					<cite>by <a href="space.php?username=qdhydxzgrmdx">qdhydxzgrmdx</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_59832" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=59832&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_59832"><a href="viewthread.php?tid=59832&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">东莞警方刑拘桑拿题材网络小说作者</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=59832&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=59832&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2213">核子力量</a>
										</cite>
					<em>2010-9-28</em>
				</td>
				<td class="nums"><strong>53</strong> / <em>1336</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=59832&goto=lastpost#lastpost">2010-9-30 13:42</a></em>
					<cite>by <a href="space.php?username=muke">muke</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_59566" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=59566&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_59566"><a href="viewthread.php?tid=59566&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">妻子每日唱红色歌曲唤醒植物人丈夫</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=59566&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=59566&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2804">musicool</a>
										</cite>
					<em>2010-9-27</em>
				</td>
				<td class="nums"><strong>53</strong> / <em>1042</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=59566&goto=lastpost#lastpost">2010-10-2 12:04</a></em>
					<cite>by <a href="space.php?username=%BF%D5%BF%D5%D7%B7%C3%CE">空空追梦</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_60385" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=60385&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_60385"><a href="viewthread.php?tid=60385&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">温家宝在中共建国招待会再提政改</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=60385&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=60385&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6314">hhbcl1414</a>
										</cite>
					<em>2010-9-30</em>
				</td>
				<td class="nums"><strong>53</strong> / <em>1638</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=60385&goto=lastpost#lastpost">2010-10-8 16:20</a></em>
					<cite>by <a href="space.php?username=%B7%A2%C7%F0%CC%EC%B9%D9">发丘天官</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_60700" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=60700&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_60700"><a href="viewthread.php?tid=60700&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">亚洲大学篮球赛中国队因见中华民国国旗弃夺冠离台</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=60700&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=60700&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2232">老杂疫</a>
										</cite>
					<em>2010-10-10</em>
				</td>
				<td class="nums"><strong>53</strong> / <em>1415</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=60700&goto=lastpost#lastpost">2010-10-11 22:46</a></em>
					<cite>by <a href="space.php?username=iiiiii">iiiiii</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_9003" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=9003&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_9003"><a href="viewthread.php?tid=9003&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">我打入了敌人内部，大家一起来围观，去分化他们的思想</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=9003&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=9003&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2676">只看不说话</a>
										</cite>
					<em>2009-4-14</em>
				</td>
				<td class="nums"><strong>53</strong> / <em>1865</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=9003&goto=lastpost#lastpost">2009-4-28 15:55</a></em>
					<cite>by <a href="space.php?username=%BB%FA%C6%F7%C3%A8%B0%A2%B8%A3">机器猫阿福</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_10849" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=10849&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_10849"><a href="viewthread.php?tid=10849&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">信不信由你：83年严打，有些人是这样死的</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=10849&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=10849&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2160">浣尘</a>
										</cite>
					<em>2009-5-13</em>
				</td>
				<td class="nums"><strong>53</strong> / <em>1281</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=10849&goto=lastpost#lastpost">2009-5-17 17:34</a></em>
					<cite>by <a href="space.php?username=%C0%CF%BE%C5%B5%C4%B7%DB%CB%BF">老九的粉丝</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_12104" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=12104&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_12104"><a href="viewthread.php?tid=12104&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">艾未未新浪博客被强制关闭 附最后一篇博文及网页</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=12104&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=12104&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2028">猪肘</a>
										</cite>
					<em>2009-5-29</em>
				</td>
				<td class="nums"><strong>53</strong> / <em>1613</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=12104&goto=lastpost#lastpost">2009-5-31 17:27</a></em>
					<cite>by <a href="space.php?username=%BF%B5%B2%A8">康波</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_5296" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=5296&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_5296"><a href="viewthread.php?tid=5296&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">南都临时工作品欣赏“这样添屁沟我很激动会上”</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=5296&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=5296&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=59">care</a>
										</cite>
					<em>2009-2-20</em>
				</td>
				<td class="nums"><strong>53</strong> / <em>1171</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=5296&goto=lastpost#lastpost">2009-2-22 18:39</a></em>
					<cite>by <a href="space.php?username=cjsh986">cjsh986</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_6023" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=6023&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_6023"><a href="viewthread.php?tid=6023&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">秦晖《亚洲周刊》撰文 谈“新宪章运动”</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=6023&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=6023&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=17">eat.eat</a>
										</cite>
					<em>2009-3-1</em>
				</td>
				<td class="nums"><strong>53</strong> / <em>1231</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=6023&goto=lastpost#lastpost">2009-3-5 19:04</a></em>
					<cite>by <a href="space.php?username=yushuaaa1980">yushuaaa1980</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_5311" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=5311&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_5311"><a href="viewthread.php?tid=5311&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">深度八卦：皇子还是皇孙？宇宇身世考</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=5311&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=5311&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2828">五毛五</a>
										</cite>
					<em>2009-2-20</em>
				</td>
				<td class="nums"><strong>52</strong> / <em>1065</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=5311&goto=lastpost#lastpost">2009-2-25 20:56</a></em>
					<cite>by <a href="space.php?username=%BE%C6%C2%7D">酒聖</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_6518" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=6518&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_6518"><a href="viewthread.php?tid=6518&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">快讯：北京长安街发生3人自焚事件</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=6518&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=6518&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2316">自由之春</a>
										</cite>
					<em>2009-2-25</em>
				</td>
				<td class="nums"><strong>52</strong> / <em>1268</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=6518&goto=lastpost#lastpost">2009-3-7 19:56</a></em>
					<cite>by <a href="space.php?username=raul1943">raul1943</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_12536" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=12536&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_12536"><a href="viewthread.php?tid=12536&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">锦衣卫· 捕快· 御林军——三方联合保卫6月3日的天安门广场</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=12536&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=12536&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7">张书记</a>
										</cite>
					<em>2009-6-3</em>
				</td>
				<td class="nums"><strong>52</strong> / <em>1864</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=12536&goto=lastpost#lastpost">2009-6-21 20:16</a></em>
					<cite>by <a href="space.php?username=%CC%D2%D7%D3%C3%A8%C2%E9">桃子猫麻</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_14274" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=14274&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_14274"><a href="viewthread.php?tid=14274&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">被强奸了也别哭，给你个研究生上上</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=14274&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=14274&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4570">我卖糕的</a>
										</cite>
					<em>2009-6-20</em>
				</td>
				<td class="nums"><strong>52</strong> / <em>1364</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=14274&goto=lastpost#lastpost">2009-6-23 10:02</a></em>
					<cite>by <a href="space.php?username=%C4%AA%B2%BB%CA%C7">莫不是</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_14567" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=14567&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_14567"><a href="viewthread.php?tid=14567&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">关于高层人事变动的官方消息</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=14567&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=14567&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2971">luckyray</a>
										</cite>
					<em>2009-6-23</em>
				</td>
				<td class="nums"><strong>52</strong> / <em>1601</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=14567&goto=lastpost#lastpost">2009-6-24 09:21</a></em>
					<cite>by <a href="space.php?username=%BA%EF%D7%D3">猴子</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_14786" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=14786&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_14786"><a href="viewthread.php?tid=14786&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">毛新宇：很希望中国首航母以我爷爷的名字命名</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=14786&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=14786&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5464">上海帅哥</a>
										</cite>
					<em>2009-6-25</em>
				</td>
				<td class="nums"><strong>52</strong> / <em>839</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=14786&goto=lastpost#lastpost">2009-6-26 18:44</a></em>
					<cite>by <a href="space.php?username=ak74">ak74</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_14840" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=14840&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_14840"><a href="viewthread.php?tid=14840&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">朝鲜：我们有能力将美国从地球上抹掉</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=14840&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=14840&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=272">Fan</a>
										</cite>
					<em>2009-6-25</em>
				</td>
				<td class="nums"><strong>52</strong> / <em>888</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=14840&goto=lastpost#lastpost">2009-6-27 20:08</a></em>
					<cite>by <a href="space.php?username=%B4%F3%C8%CB%A3%AC%D3%D0%D0%D8%C6%F7">大人，有胸器</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_22886" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=22886&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_22886"><a href="viewthread.php?tid=22886&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传，北京一辆公共汽车爆炸</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=22886&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=22886&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4021">alexander982</a>
										</cite>
					<em>2009-9-21</em>
				</td>
				<td class="nums"><strong>52</strong> / <em>2075</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=22886&goto=lastpost#lastpost">2009-9-23 17:02</a></em>
					<cite>by <a href="space.php?username=%CA%C0%CD%E2%C0%CF%C8%CB">世外老人</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_23081" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=23081&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_23081"><a href="viewthread.php?tid=23081&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">网评员：毛新宇晋升为少将有何不可？</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=23081&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=23081&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6723">卡哥</a>
										</cite>
					<em>2009-9-23</em>
				</td>
				<td class="nums"><strong>52</strong> / <em>927</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=23081&goto=lastpost#lastpost">2009-9-25 00:39</a></em>
					<cite>by <a href="space.php?username=ljb166">ljb166</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_23656" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=23656&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_23656"><a href="viewthread.php?tid=23656&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">香港“红色摇滚音乐会”引发混乱</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=23656&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=23656&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7002">luugoo</a>
										</cite>
					<em>2009-9-28</em>
				</td>
				<td class="nums"><strong>52</strong> / <em>1653</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=23656&goto=lastpost#lastpost">2009-10-2 20:17</a></em>
					<cite>by <a href="space.php?username=%B9%E2%C3%F7%B5%C4%B8%F1%C0%EF%B8%DF%C0%FB">光明的格里高利</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_26559" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=26559&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_26559"><a href="viewthread.php?tid=26559&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">腾讯研发副总监咋把小三给惹了？</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=26559&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=26559&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1102">九王爷</a>
										</cite>
					<em>2009-10-29</em>
				</td>
				<td class="nums"><strong>52</strong> / <em>1744</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=26559&goto=lastpost#lastpost">2009-10-30 14:34</a></em>
					<cite>by <a href="space.php?username=nustbobo">nustbobo</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_19482" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=19482&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_19482"><a href="viewthread.php?tid=19482&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">斯伟江、郭莲辉：郭泉案一审辩护词</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=19482&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=19482&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3996">羊皮鬼</a>
										</cite>
					<em>2009-8-12</em>
				</td>
				<td class="nums"><strong>52</strong> / <em>1137</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=19482&goto=lastpost#lastpost">2009-12-29 19:50</a></em>
					<cite>by <a href="space.php?username=%C0%FA%CA%B7%CF%B5%B0%DC%C0%E0">历史系败类</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_33010" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=33010&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_33010"><a href="viewthread.php?tid=33010&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">国新办：来年我们还要更开放</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=33010&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=33010&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3202">glim</a>
										</cite>
					<em>2009-12-23</em>
				</td>
				<td class="nums"><strong>52</strong> / <em>1209</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=33010&goto=lastpost#lastpost">2009-12-30 23:08</a></em>
					<cite>by <a href="space.php?username=%B2%CA%BA%E7%BF%A7%B7%C8%B9%DD">彩虹咖啡馆</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_34269" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=34269&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_34269"><a href="viewthread.php?tid=34269&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">宗凤鸣去世</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=34269&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=34269&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7002">luugoo</a>
										</cite>
					<em>2010-1-11</em>
				</td>
				<td class="nums"><strong>52</strong> / <em>1181</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=34269&goto=lastpost#lastpost">2010-1-13 10:21</a></em>
					<cite>by <a href="space.php?username=wndl2761">wndl2761</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_35313" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=35313&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_35313"><a href="viewthread.php?tid=35313&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">乡干部与女教师玩车震 违反社会主义道德被撤职</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=35313&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=35313&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=11459">再世关羽</a>
										</cite>
					<em>2010-1-14</em>
				</td>
				<td class="nums"><strong>52</strong> / <em>2864</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=35313&goto=lastpost#lastpost">2010-1-21 22:36</a></em>
					<cite>by <a href="space.php?username=%CE%F7%C3%C5%B4%B5%C5%A3">西门吹牛</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_36722" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=36722&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_36722"><a href="viewthread.php?tid=36722&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">影星丁嘉丽痛陈自身堕胎经历劝诫少女自爱</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=36722&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=36722&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1408">becom</a>
										</cite>
					<em>2010-2-2</em>
				</td>
				<td class="nums"><strong>52</strong> / <em>1824</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=36722&goto=lastpost#lastpost">2010-2-8 07:48</a></em>
					<cite>by <a href="space.php?username=m3g4">m3g4</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_37315" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=37315&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_37315"><a href="viewthread.php?tid=37315&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">有人在北京地铁发放《老妈蹄花》光盘</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=37315&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=37315&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7772">六死一伤</a>
										</cite>
					<em>2010-2-9</em>
				</td>
				<td class="nums"><strong>52</strong> / <em>2065</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=37315&goto=lastpost#lastpost">2010-2-18 21:36</a></em>
					<cite>by <a href="space.php?username=%C7%E0%C9%AB%C6%D0%CC%E1%CA%F7">青色菩提树</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_38619" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=38619&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_38619"><a href="viewthread.php?tid=38619&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">前广东省长儿子朱小丹升广东副省长</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=38619&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=38619&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2564">老卡</a>
										</cite>
					<em>2010-2-26</em>
				</td>
				<td class="nums"><strong>52</strong> / <em>1678</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=38619&goto=lastpost#lastpost">2010-3-3 12:21</a></em>
					<cite>by <a href="space.php?username=%C3%C0%D1%BF">美芽</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_39133" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=39133&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_39133"><a href="viewthread.php?tid=39133&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">中国作者称《阿凡达》抄袭 要索赔10亿人民币</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=39133&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=39133&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8658">skycheung</a>
										</cite>
					<em>2010-3-4</em>
				</td>
				<td class="nums"><strong>52</strong> / <em>1332</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=39133&goto=lastpost#lastpost">2010-3-5 23:40</a></em>
					<cite>by <a href="space.php?username=%B9%E2%C3%F7%B5%C4%B8%F1%C0%EF%B8%DF%C0%FB">光明的格里高利</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_8496" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=8496&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_8496"><a href="viewthread.php?tid=8496&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">今日，皇上及诸大臣辛苦了</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=8496&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=8496&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2071">上肛上腺</a>
										</cite>
					<em>2009-4-5</em>
				</td>
				<td class="nums"><strong>52</strong> / <em>1278</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=8496&goto=lastpost#lastpost">2009-4-10 15:50</a></em>
					<cite>by <a href="space.php?username=%D0%A1%DB%AD">小郗</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_8941" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=8941&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_8941"><a href="viewthread.php?tid=8941&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">暹罗72小时——泰国反独裁民主运动</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=8941&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=8941&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3434">低和</a>
										</cite>
					<em>2009-4-13</em>
				</td>
				<td class="nums"><strong>52</strong> / <em>897</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=8941&goto=lastpost#lastpost">2009-4-18 11:54</a></em>
					<cite>by <a href="space.php?username=sixapostle">sixapostle</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_26648" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=26648&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_26648"><a href="viewthread.php?tid=26648&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">32岁美女副市长将由财政部空降昆明</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=26648&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=26648&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=852">未来他老爸</a>
										</cite>
					<em>2009-10-30</em>
				</td>
				<td class="nums"><strong>52</strong> / <em>1456</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=26648&goto=lastpost#lastpost">2009-11-1 13:14</a></em>
					<cite>by <a href="space.php?username=%CE%F7%C3%C5%B4%B5%C5%A3">西门吹牛</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_27302" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=27302&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_27302"><a href="viewthread.php?tid=27302&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">北大医师惨死在北大医院</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=27302&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=27302&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=852">未来他老爸</a>
										</cite>
					<em>2009-11-4</em>
				</td>
				<td class="nums"><strong>52</strong> / <em>1196</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=27302&goto=lastpost#lastpost">2009-11-7 22:32</a></em>
					<cite>by <a href="space.php?username=%C1%F8%D2%B6%C3%BC">柳叶眉</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_26968" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=26968&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_26968"><a href="viewthread.php?tid=26968&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">零八宪章签署人再次集体荣获国际民主人权奖</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=26968&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=26968&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2472">Noel</a>
										</cite>
					<em>2009-11-2</em>
				</td>
				<td class="nums"><strong>52</strong> / <em>1084</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=26968&goto=lastpost#lastpost">2009-11-9 13:05</a></em>
					<cite>by <a href="space.php?username=%C3%C9%C9%AF">蒙莎</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_18560" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=18560&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_18560"><a href="viewthread.php?tid=18560&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">生死拆迁之“玩煤气罐的人”</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=18560&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=18560&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3969">langhua9527</a>
										</cite>
					<em>2009-8-2</em>
				</td>
				<td class="nums"><strong>52</strong> / <em>1864</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=18560&goto=lastpost#lastpost">2009-11-25 12:52</a></em>
					<cite>by <a href="space.php?username=canadian">canadian</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_28820" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=28820&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_28820"><a href="viewthread.php?tid=28820&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">释永信回应奢靡传闻：每天生活标准7块钱</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=28820&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=28820&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4570">我卖糕的</a>
										</cite>
					<em>2009-11-23</em>
				</td>
				<td class="nums"><strong>52</strong> / <em>1230</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=28820&goto=lastpost#lastpost">2009-11-27 23:55</a></em>
					<cite>by <a href="space.php?username=cyon">cyon</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_29670" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=29670&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_29670"><a href="viewthread.php?tid=29670&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">广州发生特大恶性枪击案</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=29670&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=29670&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8301">lqunl</a>
										</cite>
					<em>2009-12-2</em>
				</td>
				<td class="nums"><strong>52</strong> / <em>1154</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=29670&goto=lastpost#lastpost">2009-12-4 18:58</a></em>
					<cite>by <a href="space.php?username=FIFA%BB%E1%D4%B1">FIFA会员</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_30108" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=30108&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_30108"><a href="viewthread.php?tid=30108&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">又一轮陷害Google的行动正在进行</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=30108&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=30108&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3630">elzzird</a>
										</cite>
					<em>2009-12-5</em>
				</td>
				<td class="nums"><strong>52</strong> / <em>1478</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=30108&goto=lastpost#lastpost">2009-12-7 17:07</a></em>
					<cite>by <a href="space.php?username=peteryang84">peteryang84</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_28967" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=28967&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_28967"><a href="viewthread.php?tid=28967&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">江苏14岁“作文篇篇是满分”女生被推荐上北大</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=28967&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=28967&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=852">未来他老爸</a>
										</cite>
					<em>2009-11-25</em>
				</td>
				<td class="nums"><strong>52</strong> / <em>1143</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=28967&goto=lastpost#lastpost">2009-12-12 21:04</a></em>
					<cite>by <a href="space.php?username=Jleofedericker">Jleofedericker</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_31809" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=31809&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_31809"><a href="viewthread.php?tid=31809&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">男子醉酒冻死家门 同事送其回家被判赔10万</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=31809&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=31809&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8903">猪大肠</a>
										</cite>
					<em>2009-12-19</em>
				</td>
				<td class="nums"><strong>52</strong> / <em>916</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=31809&goto=lastpost#lastpost">2009-12-22 18:26</a></em>
					<cite>by <a href="space.php?username=FIFA%BB%E1%D4%B1">FIFA会员</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_31806" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=31806&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_31806"><a href="viewthread.php?tid=31806&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">刘晓波下周三在一中院开庭</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=31806&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=31806&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6887">不锈钢老鼠</a>
										</cite>
					<em>2009-12-20</em>
				</td>
				<td class="nums"><strong>52</strong> / <em>862</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=31806&goto=lastpost#lastpost">2009-12-22 21:08</a></em>
					<cite>by <a href="space.php?username=%B6%A1%B4%BA%C7%EF">丁春秋</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_31801" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=31801&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_31801"><a href="viewthread.php?tid=31801&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">温家宝退席欧巴马发飙 峰会闹剧险破局</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=31801&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=31801&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5798">Jyamolmiry</a>
										</cite>
					<em>2009-12-20</em>
				</td>
				<td class="nums"><strong>52</strong> / <em>1982</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=31801&goto=lastpost#lastpost">2009-12-22 22:09</a></em>
					<cite>by <a href="space.php?username=rosemad">rosemad</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_41683" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=41683&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_41683"><a href="viewthread.php?tid=41683&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">一周图片新闻 3.29-4.4</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=41683&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=41683&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2232">老杂疫</a>
										</cite>
					<em>2010-3-29</em>
				</td>
				<td class="nums"><strong>52</strong> / <em>1335</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=41683&goto=lastpost#lastpost">2010-4-3 17:59</a></em>
					<cite>by <a href="space.php?username=%D2%D6%D1%EF">抑扬</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_43332" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=43332&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_43332"><a href="viewthread.php?tid=43332&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">南昌县三岁半女童幼儿园被强暴</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=43332&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=43332&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=10890">xiaohe1120</a>
										</cite>
					<em>2010-4-17</em>
				</td>
				<td class="nums"><strong>52</strong> / <em>1261</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=43332&goto=lastpost#lastpost">2010-4-21 13:49</a></em>
					<cite>by <a href="space.php?username=evan">evan</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_43602" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=43602&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_43602"><a href="viewthread.php?tid=43602&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">日本色情业输出招多国不满</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=43602&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=43602&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=10890">xiaohe1120</a>
										</cite>
					<em>2010-4-20</em>
				</td>
				<td class="nums"><strong>52</strong> / <em>1735</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=43602&goto=lastpost#lastpost">2010-4-26 12:09</a></em>
					<cite>by <a href="space.php?username=znzc1997">znzc1997</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_43941" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=43941&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_43941"><a href="viewthread.php?tid=43941&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">美国女记者指控中国馆及海宝涉嫌抄袭</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=43941&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=43941&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=10369">风餐露宿</a>
										</cite>
					<em>2010-4-23</em>
				</td>
				<td class="nums"><strong>52</strong> / <em>1276</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=43941&goto=lastpost#lastpost">2010-4-26 23:42</a></em>
					<cite>by <a href="space.php?username=dqianfei">dqianfei</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_44489" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=44489&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_44489"><a href="viewthread.php?tid=44489&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">潍坊发生袭击幼童案</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=44489&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=44489&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=9557">柳叶眉</a>
										</cite>
					<em>2010-4-30</em>
				</td>
				<td class="nums"><strong>52</strong> / <em>1835</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=44489&goto=lastpost#lastpost">2010-5-1 10:34</a></em>
					<cite>by <a href="space.php?username=Loze">Loze</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_45306" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=45306&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_45306"><a href="viewthread.php?tid=45306&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">Google已经获得baidu.com.sb域名</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=45306&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=45306&amp;extra=page%3D22%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5494">肉の包包</a>
										</cite>
					<em>2010-5-9</em>
				</td>
				<td class="nums"><strong>52</strong> / <em>1838</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=45306&goto=lastpost#lastpost">2010-5-11 19:10</a></em>
					<cite>by <a href="space.php?username=lind">lind</a></cite>
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
	<div class="pages"><em>&nbsp;22278&nbsp;</em><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=1" class="first">1 ...</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=21" class="prev">&lsaquo;&lsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=20">20</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=21">21</a><strong>22</strong><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=23">23</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=24">24</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=25">25</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=26">26</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=27">27</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=28">28</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=29">29</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=23" class="next">&rsaquo;&rsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=349" class="last">... 349</a><kbd><input type="text" name="custompage" size="3" onkeydown="if(event.keyCode==13) {window.location='forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page='+this.value; return false;}" /></kbd></div>	</div>

  
	<div class="box">
			<span class="headactions"><a href="forumdisplay.php?fid=2&amp;page=22&amp;showoldetails=yes#online" class="nobdr"><img src="images/default/collapsed_yes.gif" alt="" /></a></span>
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
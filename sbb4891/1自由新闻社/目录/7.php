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
			window.location = 'forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&page=6';
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
<div class="pages"><em>&nbsp;22278&nbsp;</em><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=1" class="first">1 ...</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=6" class="prev">&lsaquo;&lsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=5">5</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=6">6</a><strong>7</strong><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=8">8</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=9">9</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=10">10</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=11">11</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=12">12</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=13">13</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=14">14</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=8" class="next">&rsaquo;&rsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=349" class="last">... 349</a><kbd><input type="text" name="custompage" size="3" onkeydown="if(event.keyCode==13) {window.location='forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page='+this.value; return false;}" /></kbd></div></div>

<div style="float:left;border:1px solid #CCC; border-bottom:none;;width:218px; background: url(/imgs/1984radio.jpg) 200px 2px no-repeat;padding:5px 0 5px 12px;margin:0px 0 0 13px">

<p><b><a href="/radio/index.php" target="_blank">1984FM</a></b><br /><b><a href="https://voxli.com/1984bbs" target="_blank">1984Chat</a></b>&nbsp;</p> 
</div>

<div style="clear:both;height:0px;width:100%;font-size:1px;">&nbsp;</div>

	<ul class="popupmenu_popup newspecialmenu" id="newspecial_menu" style="display: none">
		<li><a href="post.php?action=newthread&amp;fid=2&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">发新话题</a></li>		<li class="poll"><a href="post.php?action=newthread&amp;fid=2&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;special=1">发布投票</a></li>													</ul>
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

					<tbody id="normalthread_58324" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=58324&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_58324"><a href="viewthread.php?tid=58324&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">日驻华大使当场拒绝国务委员戴秉国严正要求</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=58324&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=58324&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5464">上海帅哥</a>
										</cite>
					<em>2010-9-12</em>
				</td>
				<td class="nums"><strong>96</strong> / <em>2844</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=58324&goto=lastpost#lastpost">2010-9-15 13:47</a></em>
					<cite>by <a href="space.php?username=huangqinfeifei">huangqinfeifei</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_40238" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=40238&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_40238"><a href="viewthread.php?tid=40238&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传，韩寒在比赛中出车祸</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=40238&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=40238&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3227">快乐流浪汉</a>
										</cite>
					<em>2010-3-14</em>
				</td>
				<td class="nums"><strong>95</strong> / <em>2642</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=40238&goto=lastpost#lastpost">2010-3-17 12:34</a></em>
					<cite>by <a href="space.php?username=%BC%D6%D3%D0%B2%C6">贾有财</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_43701" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=43701&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_43701"><a href="viewthread.php?tid=43701&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">马来西亚艺人王光良遭遇爱国青年网络围攻</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=43701&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=43701&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7">张书记</a>
										</cite>
					<em>2010-4-21</em>
				</td>
				<td class="nums"><strong>95</strong> / <em>2464</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=43701&goto=lastpost#lastpost">2010-4-26 09:09</a></em>
					<cite>by <a href="space.php?username=%D3%A2%D0%DB%B9%F3%D0%D5">英雄贵姓</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_27225" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=27225&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_27225"><a href="viewthread.php?tid=27225&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">浦志强住院</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=27225&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=27225&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7">张书记</a>
										</cite>
					<em>2009-11-5</em>
				</td>
				<td class="nums"><strong>95</strong> / <em>1547</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=27225&goto=lastpost#lastpost">2009-11-8 12:09</a></em>
					<cite>by <a href="space.php?username=%C6%D6%D6%BE%C7%BF">浦志强</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_16016" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=16016&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_16016"><a href="viewthread.php?tid=16016&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">原来一个“硬盘”的死这么好笑？</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=16016&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=16016&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3202">glim</a>
										</cite>
					<em>2009-7-7</em>
				</td>
				<td class="nums"><strong>95</strong> / <em>1675</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=16016&goto=lastpost#lastpost">2009-7-8 17:29</a></em>
					<cite>by <a href="space.php?username=shell.x">shell.x</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_48080" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=48080&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_48080"><a href="viewthread.php?tid=48080&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">湖南师大出现“民主墙” 校团委书记当众撕毁“反动文章”</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=48080&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=48080&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=11814">河殇</a>
										</cite>
					<em>2010-6-2</em>
				</td>
				<td class="nums"><strong>95</strong> / <em>2799</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=48080&goto=lastpost#lastpost">2010-6-3 20:42</a></em>
					<cite>by <a href="space.php?username=coeus">coeus</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_49387" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=49387&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_49387"><a href="viewthread.php?tid=49387&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">胡锦涛在玉树题字黑板被收藏</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=49387&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=49387&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=11307">minusone</a>
										</cite>
					<em>2010-4-29</em>
				</td>
				<td class="nums"><strong>95</strong> / <em>2082</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=49387&goto=lastpost#lastpost">2010-7-12 19:35</a></em>
					<cite>by <a href="space.php?username=%D1%D5%C8%E7%D3%F1">颜如玉</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_24104" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=24104&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_24104"><a href="viewthread.php?tid=24104&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传，新疆库车地区火车被砸</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=24104&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=24104&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3932">magicbully</a>
										</cite>
					<em>2009-10-2</em>
				</td>
				<td class="nums"><strong>95</strong> / <em>2363</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=24104&goto=lastpost#lastpost">2009-10-6 16:49</a></em>
					<cite>by <a href="space.php?username=mxemklh">mxemklh</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_12786" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=12786&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_12786"><a href="viewthread.php?tid=12786&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">小市民奇遇记</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=12786&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=12786&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4048">不过很但是</a>
										</cite>
					<em>2009-6-5</em>
				</td>
				<td class="nums"><strong>95</strong> / <em>2032</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=12786&goto=lastpost#lastpost">2009-6-10 09:30</a></em>
					<cite>by <a href="space.php?username=leo_zhao">leo_zhao</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_27269" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=27269&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_27269"><a href="viewthread.php?tid=27269&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">长沙开展性禁锢运动 集中销毁性爱淫具</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=27269&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=27269&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4686">曰耳又</a>
										</cite>
					<em>2009-11-6</em>
				</td>
				<td class="nums"><strong>94</strong> / <em>2308</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=27269&goto=lastpost#lastpost">2009-11-10 16:58</a></em>
					<cite>by <a href="space.php?username=heifenbrug">heifenbrug</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_28837" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=28837&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_28837"><a href="viewthread.php?tid=28837&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">这个孩子是他爸爸的作品</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=28837&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=28837&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6778">1984sb</a>
										</cite>
					<em>2009-11-23</em>
				</td>
				<td class="nums"><strong>94</strong> / <em>3240</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=28837&goto=lastpost#lastpost">2009-12-11 12:33</a></em>
					<cite>by <a href="space.php?username=nicky_hk">nicky_hk</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_57471" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=57471&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_57471"><a href="viewthread.php?tid=57471&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">英国摇滚歌手骂中国人是亚种人</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=57471&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=57471&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6314">hhbcl1414</a>
										</cite>
					<em>2010-9-5</em>
				</td>
				<td class="nums"><strong>94</strong> / <em>1891</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=57471&goto=lastpost#lastpost">2010-9-10 00:52</a></em>
					<cite>by <a href="space.php?username=%BC%AA%CB%C4%C1%F9">吉四六</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_46259" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=46259&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_46259"><a href="viewthread.php?tid=46259&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">上海烈士遗属向北京海淀公安分局呈交对袁腾飞的控告状</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=46259&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=46259&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8395">laoyang</a>
										</cite>
					<em>2010-5-18</em>
				</td>
				<td class="nums"><strong>94</strong> / <em>1850</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=46259&goto=lastpost#lastpost">2010-5-20 16:09</a></em>
					<cite>by <a href="space.php?username=%CB%BF%CB%BF%CD%C3">丝丝兔</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_46468" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=46468&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_46468"><a href="viewthread.php?tid=46468&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">飞行员为免飞机坠落济南市区 放弃跳伞牺牲</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=46468&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=46468&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=13517">gaoxsh</a>
										</cite>
					<em>2010-5-20</em>
				</td>
				<td class="nums"><strong>94</strong> / <em>2120</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=46468&goto=lastpost#lastpost">2010-5-23 13:23</a></em>
					<cite>by <a href="space.php?username=Designer">Designer</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_32203" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=32203&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_32203"><a href="viewthread.php?tid=32203&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">卓越25元门被指欺诈，豆瓣用户高举法律大旗</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=32203&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=32203&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7660">wahaha</a>
										</cite>
					<em>2009-12-23</em>
				</td>
				<td class="nums"><strong>94</strong> / <em>2125</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=32203&goto=lastpost#lastpost">2009-12-30 09:25</a></em>
					<cite>by <a href="space.php?username=%C9%A2%B9%E2">散光</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_32926" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=32926&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_32926"><a href="viewthread.php?tid=32926&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">福建网民范燕琼、游精佑、吴华英诬告陷害案开庭</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=32926&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=32926&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7919">路边社门卫</a>
										</cite>
					<em>2009-11-8</em>
				</td>
				<td class="nums"><strong>94</strong> / <em>1895</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=32926&goto=lastpost#lastpost">2010-1-6 22:33</a></em>
					<cite>by <a href="space.php?username=%C7%D8%EAP%D4%C2">秦關月</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_5946" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=5946&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_5946"><a href="viewthread.php?tid=5946&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">异见网站关停时 影帝上网演民主</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=5946&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=5946&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3202">glim</a>
										</cite>
					<em>2009-2-28</em>
				</td>
				<td class="nums"><strong>94</strong> / <em>2517</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=5946&goto=lastpost#lastpost">2009-3-5 17:00</a></em>
					<cite>by <a href="space.php?username=%C4%C7%CA%B1%BB%A8%D0%BB">那时花谢</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_24396" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=24396&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_24396"><a href="viewthread.php?tid=24396&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">中日商“东亚共同体”：免签证 设亚元</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=24396&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=24396&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7002">luugoo</a>
										</cite>
					<em>2009-10-6</em>
				</td>
				<td class="nums"><strong>94</strong> / <em>1389</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=24396&goto=lastpost#lastpost">2009-10-12 01:35</a></em>
					<cite>by <a href="space.php?username=%CE%B1%BE%FD%D7%D3">伪君子</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_18272" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=18272&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_18272"><a href="viewthread.php?tid=18272&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">真理部工作人员：那些微博不可能重开了</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=18272&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=18272&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=21">大仙儿</a>
										</cite>
					<em>2009-7-30</em>
				</td>
				<td class="nums"><strong>94</strong> / <em>2135</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=18272&goto=lastpost#lastpost">2009-8-1 02:38</a></em>
					<cite>by <a href="space.php?username=%BF%EC%C0%D6%C1%F7%C0%CB%BA%BA">快乐流浪汉</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_51060" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=51060&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_51060"><a href="viewthread.php?tid=51060&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">世界杯德国队4比1战胜英格兰</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=51060&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=51060&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=12310">炽鸢侯</a>
										</cite>
					<em>2010-6-27</em>
				</td>
				<td class="nums"><strong>94</strong> / <em>1419</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=51060&goto=lastpost#lastpost">2010-6-29 22:15</a></em>
					<cite>by <a href="space.php?username=bufan">bufan</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_53179" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=53179&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_53179"><a href="viewthread.php?tid=53179&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">汪洋回应“普白之争”：粤人“富之”后须“教之”</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=53179&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=53179&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=9737">剁辣椒</a>
										</cite>
					<em>2010-7-18</em>
				</td>
				<td class="nums"><strong>93</strong> / <em>1783</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=53179&goto=lastpost#lastpost">2010-7-27 22:29</a></em>
					<cite>by <a href="space.php?username=pandade">pandade</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_36704" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=36704&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_36704"><a href="viewthread.php?tid=36704&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">中共高级干部为刘晓波鸣不平</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=36704&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=36704&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6988">fp456789</a>
										</cite>
					<em>2010-1-17</em>
				</td>
				<td class="nums"><strong>93</strong> / <em>3569</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=36704&goto=lastpost#lastpost">2010-2-3 13:35</a></em>
					<cite>by <a href="space.php?username=%C1%E3%B6%C8">零度</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_12752" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=12752&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_12752"><a href="viewthread.php?tid=12752&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">昨天柴玲女侠在干甚么</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=12752&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=12752&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5306">江小婷</a>
										</cite>
					<em>2009-6-5</em>
				</td>
				<td class="nums"><strong>93</strong> / <em>1950</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=12752&goto=lastpost#lastpost">2009-6-7 17:19</a></em>
					<cite>by <a href="space.php?username=%B7%A8%BF%CB%88%98">法克垬</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_42664" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=42664&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_42664"><a href="viewthread.php?tid=42664&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">真理部最新指令：不报道“王益与王小丫的关系”</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=42664&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=42664&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=11076">有颜色</a>
										</cite>
					<em>2010-4-8</em>
				</td>
				<td class="nums"><strong>93</strong> / <em>3207</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=42664&goto=lastpost#lastpost">2010-4-11 22:11</a></em>
					<cite>by <a href="space.php?username=happy.c">happy.c</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_45841" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=45841&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_45841"><a href="viewthread.php?tid=45841&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传宁浩新片《无人区》或被禁映</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=45841&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=45841&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8143">关节炎</a>
										</cite>
					<em>2010-3-17</em>
				</td>
				<td class="nums"><strong>93</strong> / <em>3982</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=45841&goto=lastpost#lastpost">2010-5-15 14:19</a></em>
					<cite>by <a href="space.php?username=Designer">Designer</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_29824" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=29824&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_29824"><a href="viewthread.php?tid=29824&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">北京艺术家赵赵被捕</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=29824&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=29824&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1258">路边社记者</a>
										</cite>
					<em>2009-12-3</em>
				</td>
				<td class="nums"><strong>93</strong> / <em>2586</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=29824&goto=lastpost#lastpost">2009-12-6 19:06</a></em>
					<cite>by <a href="space.php?username=%C5%BC%D1%F0%B7%E8">偶佯疯</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_56223" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=56223&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_56223"><a href="viewthread.php?tid=56223&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">温家宝：只有坚持改革开放 国家才有光明前途</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=56223&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=56223&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=13979">yhy96</a>
										</cite>
					<em>2010-8-21</em>
				</td>
				<td class="nums"><strong>93</strong> / <em>2128</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=56223&goto=lastpost#lastpost">2010-8-26 11:46</a></em>
					<cite>by <a href="space.php?username=Carbon14">Carbon14</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_58108" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=58108&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_58108"><a href="viewthread.php?tid=58108&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">胡锦涛视察腾讯QQ公司 鼓励其自主创新</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=58108&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=58108&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=15406">兽性大发小白兔</a>
										</cite>
					<em>2010-9-7</em>
				</td>
				<td class="nums"><strong>93</strong> / <em>2066</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=58108&goto=lastpost#lastpost">2010-9-10 22:50</a></em>
					<cite>by <a href="space.php?username=feng169">feng169</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_52498" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=52498&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_52498"><a href="viewthread.php?tid=52498&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">共军将激光笔改造为95式步枪瞄准系统</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=52498&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=52498&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=803">weke</a>
										</cite>
					<em>2010-7-11</em>
				</td>
				<td class="nums"><strong>93</strong> / <em>2639</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=52498&goto=lastpost#lastpost">2010-9-24 20:45</a></em>
					<cite>by <a href="space.php?username=%C2%B7%B1%DF%C9%E7%CC%D8%D4%BC%BC%C7%D5%DF">路边社特约记者</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_60213" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=60213&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_60213"><a href="viewthread.php?tid=60213&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">温家宝接受CNN专访称人民决定未来</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=60213&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=60213&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7946">马德毕</a>
										</cite>
					<em>2010-10-4</em>
				</td>
				<td class="nums"><strong>93</strong> / <em>2135</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=60213&goto=lastpost#lastpost">2010-10-7 12:13</a></em>
					<cite>by <a href="space.php?username=%CE%D2%C2%F4%B8%E2%B5%C4">我卖糕的</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_60690" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=60690&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_60690"><a href="viewthread.php?tid=60690&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">真理部最新指令：刘晓波获得诺奖通稿照发 所有媒体不得登载</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=60690&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=60690&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6131">人道空空</a>
										</cite>
					<em>2010-10-8</em>
				</td>
				<td class="nums"><strong>93</strong> / <em>5195</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=60690&goto=lastpost#lastpost">2010-10-11 03:57</a></em>
					<cite>by <a href="space.php?username=Mac">Mac</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_27677" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=27677&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_27677"><a href="viewthread.php?tid=27677&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">谭作人与律师浦志强在看守所会面</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=27677&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=27677&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7379">aiweiwei</a>
										</cite>
					<em>2009-11-9</em>
				</td>
				<td class="nums"><strong>92</strong> / <em>2065</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=27677&goto=lastpost#lastpost">2009-11-21 18:36</a></em>
					<cite>by <a href="space.php?username=%B0%B3%CF%B1%B8%BE%D4%F4%B0%DC%BC%D2">俺媳妇贼败家</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_49565" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=49565&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_49565"><a href="viewthread.php?tid=49565&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">本田在华工厂因工人持续罢工全部停产</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=49565&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=49565&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=12255">zhenhdong</a>
										</cite>
					<em>2010-5-27</em>
				</td>
				<td class="nums"><strong>92</strong> / <em>2392</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=49565&goto=lastpost#lastpost">2010-6-15 14:02</a></em>
					<cite>by <a href="space.php?username=%D5%D5%B9%CB%BA%C3%C4%E3">照顾好你</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_50360" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=50360&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_50360"><a href="viewthread.php?tid=50360&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">猫扑网“大杂烩”被关闭</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=50360&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=50360&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7">张书记</a>
										</cite>
					<em>2010-6-22</em>
				</td>
				<td class="nums"><strong>92</strong> / <em>2833</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=50360&goto=lastpost#lastpost">2010-7-3 22:08</a></em>
					<cite>by <a href="space.php?username=8ger">8ger</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_8491" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=8491&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_8491"><a href="viewthread.php?tid=8491&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">精卫填海： 让大家慢慢习惯</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=8491&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=8491&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4886">专业围观</a>
										</cite>
					<em>2009-4-4</em>
				</td>
				<td class="nums"><strong>92</strong> / <em>1920</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=8491&goto=lastpost#lastpost">2009-4-6 19:16</a></em>
					<cite>by <a href="space.php?username=%B2%AE%CD%A8">伯通</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_43383" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=43383&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_43383"><a href="viewthread.php?tid=43383&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">文强一审被判死刑 亲自起草上诉书求活路</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=43383&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=43383&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=10800">张愚</a>
										</cite>
					<em>2010-4-14</em>
				</td>
				<td class="nums"><strong>92</strong> / <em>2204</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=43383&goto=lastpost#lastpost">2010-4-22 12:27</a></em>
					<cite>by <a href="space.php?username=chengp001">chengp001</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_43390" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=43390&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_43390"><a href="viewthread.php?tid=43390&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传，《南方都市报》编辑因编发一篇评论被停职</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=43390&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=43390&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2804">musicool</a>
										</cite>
					<em>2010-4-18</em>
				</td>
				<td class="nums"><strong>92</strong> / <em>2573</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=43390&goto=lastpost#lastpost">2010-4-22 23:00</a></em>
					<cite>by <a href="space.php?username=abu">abu</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_45012" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=45012&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_45012"><a href="viewthread.php?tid=45012&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">影帝访问北大</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=45012&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=45012&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4638">江湖席</a>
										</cite>
					<em>2010-5-4</em>
				</td>
				<td class="nums"><strong>92</strong> / <em>2891</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=45012&goto=lastpost#lastpost">2010-5-8 06:38</a></em>
					<cite>by <a href="space.php?username=fp456789">fp456789</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_35528" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=35528&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_35528"><a href="viewthread.php?tid=35528&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">贵州关岭县派出所所长执法中开枪打死两村民</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=35528&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=35528&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4570">我卖糕的</a>
										</cite>
					<em>2010-1-13</em>
				</td>
				<td class="nums"><strong>92</strong> / <em>1808</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=35528&goto=lastpost#lastpost">2010-1-21 22:12</a></em>
					<cite>by <a href="space.php?username=%C6%D0%C6%D0">菩菩</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_36742" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=36742&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_36742"><a href="viewthread.php?tid=36742&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">影帝留下饭钱，群众演员夸“实诚人”</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=36742&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=36742&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3202">glim</a>
										</cite>
					<em>2010-2-3</em>
				</td>
				<td class="nums"><strong>92</strong> / <em>2069</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=36742&goto=lastpost#lastpost">2010-2-10 12:34</a></em>
					<cite>by <a href="space.php?username=%D4%D3%CA%B3">杂食</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_18296" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=18296&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_18296"><a href="viewthread.php?tid=18296&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">网易历史频道被关闭</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=18296&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=18296&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5867">宋石男</a>
										</cite>
					<em>2009-7-30</em>
				</td>
				<td class="nums"><strong>92</strong> / <em>2351</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=18296&goto=lastpost#lastpost">2009-8-2 07:46</a></em>
					<cite>by <a href="space.php?username=raul1943">raul1943</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_22968" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=22968&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_22968"><a href="viewthread.php?tid=22968&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">毛新宇晋升全球最年轻将军</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=22968&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=22968&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=811">老胡</a>
										</cite>
					<em>2009-9-21</em>
				</td>
				<td class="nums"><strong>92</strong> / <em>1982</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=22968&goto=lastpost#lastpost">2009-9-22 21:49</a></em>
					<cite>by <a href="space.php?username=YOYO">YOYO</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_29302" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=29302&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_29302"><a href="viewthread.php?tid=29302&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传，阳光卫视被封杀</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=29302&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=29302&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=21">大仙儿</a>
										</cite>
					<em>2009-11-27</em>
				</td>
				<td class="nums"><strong>91</strong> / <em>2502</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=29302&goto=lastpost#lastpost">2009-12-15 10:56</a></em>
					<cite>by <a href="space.php?username=stevenking">stevenking</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_33823" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=33823&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_33823"><a href="viewthread.php?tid=33823&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传，真理部刘延东下令要求华东政法解除张雪忠讲师职务</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=33823&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=33823&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1258">路边社记者</a>
										</cite>
					<em>2010-1-6</em>
				</td>
				<td class="nums"><strong>91</strong> / <em>2533</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=33823&goto=lastpost#lastpost">2010-1-10 22:37</a></em>
					<cite>by <a href="space.php?username=%BB%C6%B0%A2%B9%B7">黄阿狗</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_35316" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=35316&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_35316"><a href="viewthread.php?tid=35316&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">国务院：香港个别组织发动“公投”挑战基本法</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=35316&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=35316&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8102">wwwecjt</a>
										</cite>
					<em>2010-1-15</em>
				</td>
				<td class="nums"><strong>90</strong> / <em>2226</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=35316&goto=lastpost#lastpost">2010-1-20 09:58</a></em>
					<cite>by <a href="space.php?username=%CE%D2%C2%F4%B8%E2%B5%C4">我卖糕的</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_37573" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=37573&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_37573"><a href="viewthread.php?tid=37573&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">中美政经摩擦升级，各自制裁对方肉鸡缎带等商品</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=37573&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=37573&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=11866">qingzhuhaiya</a>
										</cite>
					<em>2010-2-4</em>
				</td>
				<td class="nums"><strong>90</strong> / <em>2364</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=37573&goto=lastpost#lastpost">2010-2-12 11:34</a></em>
					<cite>by <a href="space.php?username=inspirer">inspirer</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_37525" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=37525&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_37525"><a href="viewthread.php?tid=37525&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">外交部：中国没有不同意政府政策的人，只有罪犯</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=37525&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=37525&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=85">王五毛</a>
										</cite>
					<em>2010-2-11</em>
				</td>
				<td class="nums"><strong>90</strong> / <em>2307</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=37525&goto=lastpost#lastpost">2010-2-23 09:38</a></em>
					<cite>by <a href="space.php?username=%C0%FA%CA%B7%CF%B5%B0%DC%C0%E0">历史系败类</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_40215" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=40215&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_40215"><a href="viewthread.php?tid=40215&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">湖北省长李鸿忠被问到邓玉娇案时抢记者录音笔</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=40215&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=40215&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=10890">xiaohe1120</a>
										</cite>
					<em>2010-3-7</em>
				</td>
				<td class="nums"><strong>90</strong> / <em>3039</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=40215&goto=lastpost#lastpost">2010-3-14 15:15</a></em>
					<cite>by <a href="space.php?username=aassaa">aassaa</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_56814" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=56814&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_56814"><a href="viewthread.php?tid=56814&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">菲律宾仇华气氛急剧蔓延</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=56814&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=56814&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7946">马德毕</a>
										</cite>
					<em>2010-8-30</em>
				</td>
				<td class="nums"><strong>90</strong> / <em>2573</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=56814&goto=lastpost#lastpost">2010-9-2 12:05</a></em>
					<cite>by <a href="space.php?username=whxjhj">whxjhj</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_58326" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=58326&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_58326"><a href="viewthread.php?tid=58326&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">两名韩国中学生因吃狗肉遭群殴</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=58326&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=58326&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5464">上海帅哥</a>
										</cite>
					<em>2010-9-13</em>
				</td>
				<td class="nums"><strong>90</strong> / <em>2214</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=58326&goto=lastpost#lastpost">2010-9-25 15:19</a></em>
					<cite>by <a href="space.php?username=%CF%F4%D2%A2%C3%A8">萧尧猫</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_49306" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=49306&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_49306"><a href="viewthread.php?tid=49306&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">动漫片《雷锋的故事》将登陆央视少儿频道</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=49306&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=49306&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7">张书记</a>
										</cite>
					<em>2010-6-7</em>
				</td>
				<td class="nums"><strong>90</strong> / <em>1163</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=49306&goto=lastpost#lastpost">2010-6-13 12:33</a></em>
					<cite>by <a href="space.php?username=%B5%A5%CA%D6%B7%F6%C7%BD">单手扶墙</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_52064" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=52064&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_52064"><a href="viewthread.php?tid=52064&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">4游客因拒绝在香港购物被郑州中青旅抛弃</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=52064&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=52064&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=852">未来他老爸</a>
										</cite>
					<em>2010-7-7</em>
				</td>
				<td class="nums"><strong>90</strong> / <em>1741</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=52064&goto=lastpost#lastpost">2010-7-13 23:24</a></em>
					<cite>by <a href="space.php?username=NERV">NERV</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_12555" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=12555&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_12555"><a href="viewthread.php?tid=12555&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">6月3日晚北京木樨地有烛光晚会</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=12555&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=12555&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5953">dadyisman</a>
										</cite>
					<em>2009-6-3</em>
				</td>
				<td class="nums"><strong>90</strong> / <em>4057</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=12555&goto=lastpost#lastpost">2009-6-5 03:00</a></em>
					<cite>by <a href="space.php?username=Koney">Koney</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_28194" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=28194&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_28194"><a href="viewthread.php?tid=28194&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传，俞正声视察途中遭遇车祸</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=28194&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=28194&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=21">大仙儿</a>
										</cite>
					<em>2009-9-25</em>
				</td>
				<td class="nums"><strong>90</strong> / <em>4277</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=28194&goto=lastpost#lastpost">2009-11-18 17:35</a></em>
					<cite>by <a href="space.php?username=roleyzhang">roleyzhang</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_17237" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=17237&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_17237"><a href="viewthread.php?tid=17237&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">山东东明的哭诉</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=17237&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=17237&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5721">soplari</a>
										</cite>
					<em>2009-6-18</em>
				</td>
				<td class="nums"><strong>90</strong> / <em>2682</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=17237&goto=lastpost#lastpost">2009-7-19 21:28</a></em>
					<cite>by <a href="space.php?username=mcalcnxqd">mcalcnxqd</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_11177" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=11177&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_11177"><a href="viewthread.php?tid=11177&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">T恤有风险，出行需谨慎</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=11177&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=11177&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4088">谎蛋派戏剧</a>
										</cite>
					<em>2009-5-18</em>
				</td>
				<td class="nums"><strong>90</strong> / <em>2905</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=11177&goto=lastpost#lastpost">2009-7-21 13:59</a></em>
					<cite>by <a href="space.php?username=%CB%A4%CB%A4">摔摔</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_19886" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=19886&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_19886"><a href="viewthread.php?tid=19886&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">真理部“247人名单”</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=19886&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=19886&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1258">路边社记者</a>
										</cite>
					<em>2009-8-17</em>
				</td>
				<td class="nums"><strong>90</strong> / <em>3581</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=19886&goto=lastpost#lastpost">2009-8-26 06:03</a></em>
					<cite>by <a href="space.php?username=%D5%C5%C0%B4%B8%A3">张来福</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_21230" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=21230&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_21230"><a href="viewthread.php?tid=21230&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">深圳警察12枪击毙劫匪</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=21230&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=21230&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1121">小荷1120</a>
										</cite>
					<em>2009-9-2</em>
				</td>
				<td class="nums"><strong>89</strong> / <em>1290</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=21230&goto=lastpost#lastpost">2009-9-3 20:24</a></em>
					<cite>by <a href="space.php?username=paul">paul</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_50653" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=50653&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_50653"><a href="viewthread.php?tid=50653&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">香港立法会通过特首选举办法决议案</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=50653&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=50653&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8920">watersword</a>
										</cite>
					<em>2010-6-24</em>
				</td>
				<td class="nums"><strong>89</strong> / <em>804</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=50653&goto=lastpost#lastpost">2010-6-27 20:13</a></em>
					<cite>by <a href="space.php?username=%B7%CF%D6%D6%B6%B9%F4%F9">废种豆豉</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_52999" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=52999&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_52999"><a href="viewthread.php?tid=52999&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">霸王和飘柔洗发水被指含致癌物二恶烷</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=52999&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=52999&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1960">库存袈裟</a>
										</cite>
					<em>2010-7-14</em>
				</td>
				<td class="nums"><strong>89</strong> / <em>1581</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=52999&goto=lastpost#lastpost">2010-7-16 18:04</a></em>
					<cite>by <a href="space.php?username=%CD%A9%BE%FD">桐君</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_33450" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=33450&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_33450"><a href="viewthread.php?tid=33450&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">部分地区短时间解封Youtube等敏感网站</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=33450&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=33450&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6327">chandler0819</a>
										</cite>
					<em>2010-1-3</em>
				</td>
				<td class="nums"><strong>89</strong> / <em>1904</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=33450&goto=lastpost#lastpost">2010-1-4 19:18</a></em>
					<cite>by <a href="space.php?username=ping">ping</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_32285" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=32285&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_32285"><a href="viewthread.php?tid=32285&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">宋祖德：赵忠祥曾对董卿耍过流氓</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=32285&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=32285&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=9991">duck_1984</a>
										</cite>
					<em>2009-12-24</em>
				</td>
				<td class="nums"><strong>89</strong> / <em>2922</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=32285&goto=lastpost#lastpost">2010-2-25 20:44</a></em>
					<cite>by <a href="space.php?username=111111">111111</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_24749" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=24749&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_24749"><a href="viewthread.php?tid=24749&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">人权是外国人发明的，你要人权到外国去要，中国没有人权！</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=24749&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=24749&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6471">八卦标兵</a>
										</cite>
					<em>2009-7-2</em>
				</td>
				<td class="nums"><strong>89</strong> / <em>2911</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=24749&goto=lastpost#lastpost">2009-10-11 10:09</a></em>
					<cite>by <a href="space.php?username=lamp">lamp</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_56412" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=56412&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_56412"><a href="viewthread.php?tid=56412&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">作家张一一起诉韩寒剽窃</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=56412&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=56412&amp;extra=page%3D7%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2907">无言的山丘</a>
										</cite>
					<em>2010-8-25</em>
				</td>
				<td class="nums"><strong>89</strong> / <em>2416</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=56412&goto=lastpost#lastpost">2010-8-30 00:35</a></em>
					<cite>by <a href="space.php?username=cnalbert">cnalbert</a></cite>
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
	<div class="pages"><em>&nbsp;22278&nbsp;</em><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=1" class="first">1 ...</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=6" class="prev">&lsaquo;&lsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=5">5</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=6">6</a><strong>7</strong><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=8">8</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=9">9</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=10">10</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=11">11</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=12">12</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=13">13</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=14">14</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=8" class="next">&rsaquo;&rsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=349" class="last">... 349</a><kbd><input type="text" name="custompage" size="3" onkeydown="if(event.keyCode==13) {window.location='forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page='+this.value; return false;}" /></kbd></div>	</div>

  
	<div class="box">
			<span class="headactions"><a href="forumdisplay.php?fid=2&amp;page=7&amp;showoldetails=yes#online" class="nobdr"><img src="images/default/collapsed_yes.gif" alt="" /></a></span>
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
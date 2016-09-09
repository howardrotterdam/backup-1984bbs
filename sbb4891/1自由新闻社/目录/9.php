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
			window.location = 'forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&page=8';
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
<div class="pages"><em>&nbsp;22278&nbsp;</em><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=1" class="first">1 ...</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=8" class="prev">&lsaquo;&lsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=7">7</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=8">8</a><strong>9</strong><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=10">10</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=11">11</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=12">12</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=13">13</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=14">14</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=15">15</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=16">16</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=10" class="next">&rsaquo;&rsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=349" class="last">... 349</a><kbd><input type="text" name="custompage" size="3" onkeydown="if(event.keyCode==13) {window.location='forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page='+this.value; return false;}" /></kbd></div></div>

<div style="float:left;border:1px solid #CCC; border-bottom:none;;width:218px; background: url(/imgs/1984radio.jpg) 200px 2px no-repeat;padding:5px 0 5px 12px;margin:0px 0 0 13px">

<p><b><a href="/radio/index.php" target="_blank">1984FM</a></b><br /><b><a href="https://voxli.com/1984bbs" target="_blank">1984Chat</a></b>&nbsp;</p> 
</div>

<div style="clear:both;height:0px;width:100%;font-size:1px;">&nbsp;</div>

	<ul class="popupmenu_popup newspecialmenu" id="newspecial_menu" style="display: none">
		<li><a href="post.php?action=newthread&amp;fid=2&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">发新话题</a></li>		<li class="poll"><a href="post.php?action=newthread&amp;fid=2&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;special=1">发布投票</a></li>													</ul>
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

					<tbody id="normalthread_42471" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=42471&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_42471"><a href="viewthread.php?tid=42471&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">伊利：坚决抵制西方婴幼儿奶粉标准的影响</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=42471&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=42471&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2495">深入裙中</a>
										</cite>
					<em>2010-4-7</em>
				</td>
				<td class="nums"><strong>83</strong> / <em>2248</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=42471&goto=lastpost#lastpost">2010-7-15 15:29</a></em>
					<cite>by <a href="space.php?username=%B9%F8%BD%B3">锅匠</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_28545" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=28545&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_28545"><a href="viewthread.php?tid=28545&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">《财经》人事大地震</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=28545&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=28545&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2467">魔鬼教官</a>
										</cite>
					<em>2009-10-11</em>
				</td>
				<td class="nums"><strong>83</strong> / <em>3417</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=28545&goto=lastpost#lastpost">2009-11-22 18:47</a></em>
					<cite>by <a href="space.php?username=Tony">Tony</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_32205" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=32205&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_32205"><a href="viewthread.php?tid=32205&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">校内网清剿“黄丝带运动”参与者</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=32205&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=32205&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=9106">碎碎</a>
										</cite>
					<em>2009-12-23</em>
				</td>
				<td class="nums"><strong>83</strong> / <em>3406</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=32205&goto=lastpost#lastpost">2009-12-28 18:19</a></em>
					<cite>by <a href="space.php?username=Hackman">Hackman</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_34518" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=34518&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_34518"><a href="viewthread.php?tid=34518&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">全家都是地产商 杭州书记王国平家产80亿</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=34518&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=34518&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8560">zuoshoucp</a>
										</cite>
					<em>2009-12-5</em>
				</td>
				<td class="nums"><strong>83</strong> / <em>2802</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=34518&goto=lastpost#lastpost">2010-1-17 23:51</a></em>
					<cite>by <a href="space.php?username=19890604">19890604</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_37464" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=37464&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_37464"><a href="viewthread.php?tid=37464&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传，薄熙来患癌症</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=37464&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=37464&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1162">小龙人</a>
										</cite>
					<em>2010-2-11</em>
				</td>
				<td class="nums"><strong>83</strong> / <em>3258</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=37464&goto=lastpost#lastpost">2010-2-20 11:25</a></em>
					<cite>by <a href="space.php?username=%B7%C5%D6%F0">放逐</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_40235" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=40235&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_40235"><a href="viewthread.php?tid=40235&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">女记者挽两会高官换采访</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=40235&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=40235&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=10890">xiaohe1120</a>
										</cite>
					<em>2010-3-9</em>
				</td>
				<td class="nums"><strong>83</strong> / <em>2360</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=40235&goto=lastpost#lastpost">2010-3-16 10:41</a></em>
					<cite>by <a href="space.php?username=%D5%E6%D5%FD%B5%C4%C9%EE%C8%EB%C7%B3%B3%F6">真正的深入浅出</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_40945" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=40945&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_40945"><a href="viewthread.php?tid=40945&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">满载男同性恋者的大型豪华游船从上海启航</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=40945&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=40945&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=12527">ytqz1988y</a>
										</cite>
					<em>2010-3-22</em>
				</td>
				<td class="nums"><strong>83</strong> / <em>1508</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=40945&goto=lastpost#lastpost">2010-3-25 21:23</a></em>
					<cite>by <a href="space.php?username=%B1%B1%BE%A9%C6%E5%C3%D4">北京棋迷</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_21486" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=21486&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_21486"><a href="viewthread.php?tid=21486&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">中国90后爱国红客拟消灭反动网站为国庆献礼</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=21486&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=21486&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7919">路边社门卫</a>
										</cite>
					<em>2009-9-6</em>
				</td>
				<td class="nums"><strong>83</strong> / <em>1943</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=21486&goto=lastpost#lastpost">2009-9-11 14:16</a></em>
					<cite>by <a href="space.php?username=Phillip">Phillip</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_24956" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=24956&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_24956"><a href="viewthread.php?tid=24956&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">一周图片新闻 10.12-10.18</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=24956&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=24956&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2232">老杂疫</a>
										</cite>
					<em>2009-10-12</em>
				</td>
				<td class="nums"><strong>83</strong> / <em>2342</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=24956&goto=lastpost#lastpost">2009-10-19 14:45</a></em>
					<cite>by <a href="space.php?username=%C9%A2%B9%E2">散光</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_7382" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=7382&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_7382"><a href="viewthread.php?tid=7382&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">他如何成为影帝</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=7382&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=7382&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3928">panbin</a>
										</cite>
					<em>2009-3-19</em>
				</td>
				<td class="nums"><strong>83</strong> / <em>1696</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=7382&goto=lastpost#lastpost">2009-3-24 17:56</a></em>
					<cite>by <a href="space.php?username=%B9%ED%BD%A7%B3%EE">鬼涧愁</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_8722" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=8722&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_8722"><a href="viewthread.php?tid=8722&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">拒绝造英雄，造烈女</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=8722&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=8722&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=484">江湖专政</a>
										</cite>
					<em>2009-4-7</em>
				</td>
				<td class="nums"><strong>83</strong> / <em>1607</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=8722&goto=lastpost#lastpost">2009-4-9 23:32</a></em>
					<cite>by <a href="space.php?username=%BD%AD%BA%FE%D7%A8%D5%FE">江湖专政</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_6542" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=6542&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_6542"><a href="viewthread.php?tid=6542&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">海事局副局长呼吁整顿互联网 保住林嘉祥这样的好干部</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=6542&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=6542&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3838">IP黨精神領袖</a>
										</cite>
					<em>2009-3-6</em>
				</td>
				<td class="nums"><strong>83</strong> / <em>1789</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=6542&goto=lastpost#lastpost">2009-3-10 08:33</a></em>
					<cite>by <a href="space.php?username=dev">dev</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_18208" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=18208&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_18208"><a href="viewthread.php?tid=18208&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">热比娅很失望美国对乌鲁木齐事件反应冷淡</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=18208&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=18208&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6314">hhbcl1414</a>
										</cite>
					<em>2009-7-29</em>
				</td>
				<td class="nums"><strong>83</strong> / <em>1066</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=18208&goto=lastpost#lastpost">2009-8-3 17:26</a></em>
					<cite>by <a href="space.php?username=wdwxl2008">wdwxl2008</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_55945" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=55945&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_55945"><a href="viewthread.php?tid=55945&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">网友传吉林洪水实际死亡人数超过两万</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=55945&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=55945&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=10862">冥河纤夫</a>
										</cite>
					<em>2010-8-20</em>
				</td>
				<td class="nums"><strong>83</strong> / <em>2644</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=55945&goto=lastpost#lastpost">2010-8-30 17:39</a></em>
					<cite>by <a href="space.php?username=%BF%AA%CB%AE%BF%AA%CB%AE">开水开水</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_60510" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=60510&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_60510"><a href="viewthread.php?tid=60510&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">中国召见挪威驻华大使</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=60510&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=60510&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=16525">Aurora2008</a>
										</cite>
					<em>2010-10-8</em>
				</td>
				<td class="nums"><strong>83</strong> / <em>3068</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=60510&goto=lastpost#lastpost">2010-10-10 23:53</a></em>
					<cite>by <a href="space.php?username=pugatory">pugatory</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_59511" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=59511&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_59511"><a href="viewthread.php?tid=59511&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">中国艺术家艾未未获得卡塞尔公民奖</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=59511&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=59511&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=18649">wenjb</a>
										</cite>
					<em>2010-9-27</em>
				</td>
				<td class="nums"><strong>82</strong> / <em>1547</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=59511&goto=lastpost#lastpost">2010-10-3 15:03</a></em>
					<cite>by <a href="space.php?username=zzgg">zzgg</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_8035" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=8035&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_8035"><a href="viewthread.php?tid=8035&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">女孩拒给老人让座遭男乘客用钞票抽脸</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=8035&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=8035&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4673">threeight</a>
										</cite>
					<em>2009-3-28</em>
				</td>
				<td class="nums"><strong>82</strong> / <em>1119</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=8035&goto=lastpost#lastpost">2009-3-31 15:42</a></em>
					<cite>by <a href="space.php?username=leaflet">leaflet</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_28023" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=28023&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_28023"><a href="viewthread.php?tid=28023&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">德国纪念柏林墙倒二十年 推墙三巨头重聚 默克尔发表重要讲话</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=28023&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=28023&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7">张书记</a>
										</cite>
					<em>2009-11-1</em>
				</td>
				<td class="nums"><strong>82</strong> / <em>2700</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=28023&goto=lastpost#lastpost">2009-11-14 12:01</a></em>
					<cite>by <a href="space.php?username=%D0%A1%C6%F8%B9%ED">小气鬼</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_30156" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=30156&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_30156"><a href="viewthread.php?tid=30156&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">汪洋率广东党政代表团赴重庆考察</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=30156&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=30156&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2202">ccjing123</a>
										</cite>
					<em>2009-12-1</em>
				</td>
				<td class="nums"><strong>82</strong> / <em>2408</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=30156&goto=lastpost#lastpost">2009-12-10 08:55</a></em>
					<cite>by <a href="space.php?username=%B1%A1%BA%C9">薄荷</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_48245" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=48245&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_48245"><a href="viewthread.php?tid=48245&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">中国坚决反对美“六四声明”</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=48245&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=48245&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2973">free1989</a>
										</cite>
					<em>2010-6-6</em>
				</td>
				<td class="nums"><strong>82</strong> / <em>3104</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=48245&goto=lastpost#lastpost">2010-6-7 20:45</a></em>
					<cite>by <a href="space.php?username=%D7%D4%D3%C9%BB%A8%CA%A2%BF%AA">自由花盛开</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_45635" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=45635&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_45635"><a href="viewthread.php?tid=45635&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">佛山警方以“没有记者证拍摄”为由抓捕公民</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=45635&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=45635&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7">张书记</a>
										</cite>
					<em>2010-5-12</em>
				</td>
				<td class="nums"><strong>82</strong> / <em>1745</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=45635&goto=lastpost#lastpost">2010-6-21 01:10</a></em>
					<cite>by <a href="space.php?username=duzhqi">duzhqi</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_51695" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=51695&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_51695"><a href="viewthread.php?tid=51695&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">广电总局发言人：凤姐等低俗文化应叫停</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=51695&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=51695&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2804">musicool</a>
										</cite>
					<em>2010-7-2</em>
				</td>
				<td class="nums"><strong>82</strong> / <em>1531</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=51695&goto=lastpost#lastpost">2010-7-6 01:23</a></em>
					<cite>by <a href="space.php?username=%DA%A4%BA%D3%CF%CB%B7%F2">冥河纤夫</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_52935" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=52935&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_52935"><a href="viewthread.php?tid=52935&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">冯小刚提议恢复两个繁体字</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=52935&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=52935&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6314">hhbcl1414</a>
										</cite>
					<em>2010-7-15</em>
				</td>
				<td class="nums"><strong>82</strong> / <em>2697</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=52935&goto=lastpost#lastpost">2010-7-17 23:01</a></em>
					<cite>by <a href="space.php?username=satanla">satanla</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_53383" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=53383&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_53383"><a href="viewthread.php?tid=53383&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">四川绵阳8l岁老人建毛主席庙</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=53383&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=53383&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=13108">四夕亚日</a>
										</cite>
					<em>2010-7-20</em>
				</td>
				<td class="nums"><strong>82</strong> / <em>1368</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=53383&goto=lastpost#lastpost">2010-7-26 13:41</a></em>
					<cite>by <a href="space.php?username=%B7%B4%C4%D4%B2%D0%D6%BE%D4%B8%D5%DF">反脑残志愿者</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_53987" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=53987&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_53987"><a href="viewthread.php?tid=53987&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">党媒盛赞大连原油污染 称创造世界火灾扑救奇迹</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=53987&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=53987&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=15020">digbone</a>
										</cite>
					<em>2010-7-26</em>
				</td>
				<td class="nums"><strong>82</strong> / <em>1480</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=53987&goto=lastpost#lastpost">2010-7-31 01:34</a></em>
					<cite>by <a href="space.php?username=%CB%BC%CF%EB%D7%EF">思想罪</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_53522" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=53522&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_53522"><a href="viewthread.php?tid=53522&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">性从业者身着共军军服接客</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=53522&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=53522&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=852">未来他老爸</a>
										</cite>
					<em>2010-7-21</em>
				</td>
				<td class="nums"><strong>82</strong> / <em>3250</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=53522&goto=lastpost#lastpost">2010-8-1 23:01</a></em>
					<cite>by <a href="space.php?username=ArenAYu">ArenAYu</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_21589" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=21589&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_21589"><a href="viewthread.php?tid=21589&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传，乌鲁木齐到北京的火车发生爆炸</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=21589&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=21589&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3144">北风</a>
										</cite>
					<em>2009-9-7</em>
				</td>
				<td class="nums"><strong>82</strong> / <em>5099</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=21589&goto=lastpost#lastpost">2009-9-9 20:02</a></em>
					<cite>by <a href="space.php?username=ksi">ksi</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_23408" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=23408&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_23408"><a href="viewthread.php?tid=23408&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">快讯：成都天府广场的国庆纪念花圈发生燃烧</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=23408&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=23408&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2438">反革命手淫犯</a>
										</cite>
					<em>2009-9-25</em>
				</td>
				<td class="nums"><strong>82</strong> / <em>2570</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=23408&goto=lastpost#lastpost">2009-9-28 09:00</a></em>
					<cite>by <a href="space.php?username=%CD%A9%BE%FD">桐君</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_25181" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=25181&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_25181"><a href="viewthread.php?tid=25181&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">缺席60庆典 万里天津露面</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=25181&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=25181&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8343">假装很青春</a>
										</cite>
					<em>2009-10-12</em>
				</td>
				<td class="nums"><strong>82</strong> / <em>3107</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=25181&goto=lastpost#lastpost">2009-10-16 00:10</a></em>
					<cite>by <a href="space.php?username=Jyamolmiry">Jyamolmiry</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_34694" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=34694&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_34694"><a href="viewthread.php?tid=34694&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">环球网称关于Google的投票结果遭“干扰”</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=34694&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=34694&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5464">上海帅哥</a>
										</cite>
					<em>2010-1-14</em>
				</td>
				<td class="nums"><strong>82</strong> / <em>2469</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=34694&goto=lastpost#lastpost">2010-1-23 19:12</a></em>
					<cite>by <a href="space.php?username=%B0%E5%C0%F5fisha">板栗fisha</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_39401" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=39401&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_39401"><a href="viewthread.php?tid=39401&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">贾庆林孙女亮相巴黎名媛舞会</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=39401&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=39401&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4570">我卖糕的</a>
										</cite>
					<em>2009-12-2</em>
				</td>
				<td class="nums"><strong>82</strong> / <em>3399</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=39401&goto=lastpost#lastpost">2010-3-6 13:22</a></em>
					<cite>by <a href="space.php?username=%CC%C1%B6%EC">塘鹅</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_43549" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=43549&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_43549"><a href="viewthread.php?tid=43549&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">广州大学城焚书500本 郭敬明小说首当其冲</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=43549&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=43549&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=11886">木乔庄</a>
										</cite>
					<em>2010-4-20</em>
				</td>
				<td class="nums"><strong>82</strong> / <em>1394</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=43549&goto=lastpost#lastpost">2010-4-21 04:29</a></em>
					<cite>by <a href="space.php?username=%C1%D9%D6%D5%C9%CF%B5%DB">临终上帝</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_44161" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=44161&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_44161"><a href="viewthread.php?tid=44161&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">河南15岁少女被全班同学投票赶走投河自尽</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=44161&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=44161&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=11478">中山首里</a>
										</cite>
					<em>2010-4-26</em>
				</td>
				<td class="nums"><strong>82</strong> / <em>1452</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=44161&goto=lastpost#lastpost">2010-4-30 10:07</a></em>
					<cite>by <a href="space.php?username=%BB%F0%CE%E4%D2%AB%D1%EF">火武耀扬</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_20737" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=20737&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_20737"><a href="viewthread.php?tid=20737&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">“扛得过开发商，扛不过新娘子”：80后成中国购房主力</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=20737&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=20737&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=852">未来他老爸</a>
										</cite>
					<em>2009-8-27</em>
				</td>
				<td class="nums"><strong>82</strong> / <em>1570</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=20737&goto=lastpost#lastpost">2009-9-2 22:52</a></em>
					<cite>by <a href="space.php?username=cnalbert">cnalbert</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_12647" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=12647&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_12647"><a href="viewthread.php?tid=12647&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">咱爷们儿今天去逛逛</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=12647&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=12647&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4983">zama</a>
										</cite>
					<em>2009-6-4</em>
				</td>
				<td class="nums"><strong>82</strong> / <em>1393</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=12647&goto=lastpost#lastpost">2009-6-5 01:34</a></em>
					<cite>by <a href="space.php?username=zama">zama</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_32894" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=32894&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_32894"><a href="viewthread.php?tid=32894&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">影帝每天上网 FACEBOOK粉丝过10万</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=32894&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=32894&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7093">elfix</a>
										</cite>
					<em>2009-12-29</em>
				</td>
				<td class="nums"><strong>81</strong> / <em>2217</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=32894&goto=lastpost#lastpost">2010-1-1 20:34</a></em>
					<cite>by <a href="space.php?username=shelly">shelly</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_35584" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=35584&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_35584"><a href="viewthread.php?tid=35584&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">薄熙来向高校学生喊话 要求赞成打黑唱红歌</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=35584&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=35584&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4570">我卖糕的</a>
										</cite>
					<em>2010-1-18</em>
				</td>
				<td class="nums"><strong>81</strong> / <em>1813</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=35584&goto=lastpost#lastpost">2010-1-22 09:44</a></em>
					<cite>by <a href="space.php?username=becom">becom</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_37947" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=37947&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_37947"><a href="viewthread.php?tid=37947&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">刘谦回应韩寒博文</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=37947&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=37947&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7277">一向低调</a>
										</cite>
					<em>2010-2-16</em>
				</td>
				<td class="nums"><strong>81</strong> / <em>2493</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=37947&goto=lastpost#lastpost">2010-2-21 03:00</a></em>
					<cite>by <a href="space.php?username=billdc">billdc</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_23498" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=23498&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_23498"><a href="viewthread.php?tid=23498&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">北京7万辆出租车被当局监听</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=23498&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=23498&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8555">idea.fly</a>
										</cite>
					<em>2009-9-24</em>
				</td>
				<td class="nums"><strong>81</strong> / <em>2023</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=23498&goto=lastpost#lastpost">2009-9-27 11:46</a></em>
					<cite>by <a href="space.php?username=luugoo">luugoo</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_28328" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=28328&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_28328"><a href="viewthread.php?tid=28328&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">上海交大六名学生入选“向奥巴马提问团”  被限制自由</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=28328&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=28328&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1770">nustbobo</a>
										</cite>
					<em>2009-11-12</em>
				</td>
				<td class="nums"><strong>81</strong> / <em>2536</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=28328&goto=lastpost#lastpost">2009-11-17 22:51</a></em>
					<cite>by <a href="space.php?username=conradlyn">conradlyn</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_30756" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=30756&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_30756"><a href="viewthread.php?tid=30756&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">一名深受网络淫秽色情侵害大学生的举报信</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=30756&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=30756&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8721">strongwind13</a>
										</cite>
					<em>2009-12-11</em>
				</td>
				<td class="nums"><strong>81</strong> / <em>1581</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=30756&goto=lastpost#lastpost">2009-12-17 11:12</a></em>
					<cite>by <a href="space.php?username=%B7%C5%D6%F0">放逐</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_48887" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=48887&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_48887"><a href="viewthread.php?tid=48887&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">浙江传媒大学游行</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=48887&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=48887&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=12700">罐头</a>
										</cite>
					<em>2010-6-9</em>
				</td>
				<td class="nums"><strong>81</strong> / <em>2601</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=48887&goto=lastpost#lastpost">2010-6-10 22:48</a></em>
					<cite>by <a href="space.php?username=pattonmeng">pattonmeng</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_48944" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=48944&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_48944"><a href="viewthread.php?tid=48944&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">澳洲总理陆克文：那些中国混蛋想搞死我们</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=48944&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=48944&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=624">左岸拾荒</a>
										</cite>
					<em>2010-6-10</em>
				</td>
				<td class="nums"><strong>81</strong> / <em>2444</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=48944&goto=lastpost#lastpost">2010-6-11 19:47</a></em>
					<cite>by <a href="space.php?username=%BA%AE%C3%B7">寒梅</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_51139" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=51139&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_51139"><a href="viewthread.php?tid=51139&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">武汉农民自制土炮轰退百人强拆队</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=51139&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=51139&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=13254">智商七十</a>
										</cite>
					<em>2010-6-7</em>
				</td>
				<td class="nums"><strong>81</strong> / <em>1551</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=51139&goto=lastpost#lastpost">2010-6-30 08:05</a></em>
					<cite>by <a href="space.php?username=stevenking">stevenking</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_53155" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=53155&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_53155"><a href="viewthread.php?tid=53155&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">高中生写敏感题材作文被评自毁前程 已出版小说</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=53155&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=53155&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=15783">裝傻小Q</a>
										</cite>
					<em>2010-7-16</em>
				</td>
				<td class="nums"><strong>81</strong> / <em>2116</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=53155&goto=lastpost#lastpost">2010-7-23 02:17</a></em>
					<cite>by <a href="space.php?username=%CD%F8%C2%E7%B5%CD%CB%D7%B7%E7">网络低俗风</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_20663" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=20663&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_20663"><a href="viewthread.php?tid=20663&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">柴静：我在临沂网戒中心遭遇最高强度掌声</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=20663&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=20663&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1121">小荷1120</a>
										</cite>
					<em>2009-8-26</em>
				</td>
				<td class="nums"><strong>81</strong> / <em>1824</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=20663&goto=lastpost#lastpost">2009-9-1 15:51</a></em>
					<cite>by <a href="space.php?username=%C0%BB%CF%A6">阑夕</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_13949" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=13949&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_13949"><a href="viewthread.php?tid=13949&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">伊朗“绿色革命”</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=13949&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=13949&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7">张书记</a>
										</cite>
					<em>2009-6-16</em>
				</td>
				<td class="nums"><strong>81</strong> / <em>1831</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=13949&goto=lastpost#lastpost">2009-6-22 16:12</a></em>
					<cite>by <a href="space.php?username=%BF%E2%B4%E6%F4%C2%F4%C4">库存袈裟</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_14746" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=14746&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_14746"><a href="viewthread.php?tid=14746&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">不锈钢老鼠与杨恒均对话全文</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=14746&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=14746&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5186">胺氰聚三郎</a>
										</cite>
					<em>2009-6-24</em>
				</td>
				<td class="nums"><strong>81</strong> / <em>1433</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=14746&goto=lastpost#lastpost">2009-6-27 15:30</a></em>
					<cite>by <a href="space.php?username=heifenbrug">heifenbrug</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_14103" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=14103&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_14103"><a href="viewthread.php?tid=14103&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">益智找碴：副局长标准像涉嫌侵犯今上肖像权</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=14103&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=14103&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7">张书记</a>
										</cite>
					<em>2009-6-17</em>
				</td>
				<td class="nums"><strong>80</strong> / <em>2088</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=14103&goto=lastpost#lastpost">2009-6-21 19:38</a></em>
					<cite>by <a href="space.php?username=%CC%D2%D7%D3%C3%A8%C2%E9">桃子猫麻</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_27454" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=27454&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_27454"><a href="viewthread.php?tid=27454&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">我把法院院长的儿子杀了要赔多少钱，院长说“赔丧葬费即可”</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=27454&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=27454&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1261">轻轻地想</a>
										</cite>
					<em>2009-11-8</em>
				</td>
				<td class="nums"><strong>80</strong> / <em>1539</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=27454&goto=lastpost#lastpost">2009-11-9 13:04</a></em>
					<cite>by <a href="space.php?username=%B9%E2%C3%F7%B5%C4%B8%F1%C0%EF%B8%DF%C0%FB">光明的格里高利</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_27460" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=27460&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_27460"><a href="viewthread.php?tid=27460&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">我挺好的：快出院了，烟也戒了</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=27460&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=27460&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8792">浦志强</a>
										</cite>
					<em>2009-11-8</em>
				</td>
				<td class="nums"><strong>80</strong> / <em>1368</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=27460&goto=lastpost#lastpost">2009-11-10 10:43</a></em>
					<cite>by <a href="space.php?username=%B4%F3%D1%EE%CA%F7">大杨树</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_27455" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=27455&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_27455"><a href="viewthread.php?tid=27455&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">郑念女士去世</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=27455&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=27455&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7919">路边社门卫</a>
										</cite>
					<em>2009-11-8</em>
				</td>
				<td class="nums"><strong>80</strong> / <em>1632</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=27455&goto=lastpost#lastpost">2009-11-16 02:54</a></em>
					<cite>by <a href="space.php?username=%CE%F7%C3%C5%B4%B5%C5%A3">西门吹牛</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_28317" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=28317&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_28317"><a href="viewthread.php?tid=28317&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">胡改变发型有玄机</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=28317&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=28317&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4400">gzx</a>
										</cite>
					<em>2009-11-17</em>
				</td>
				<td class="nums"><strong>80</strong> / <em>3318</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=28317&goto=lastpost#lastpost">2009-11-25 15:05</a></em>
					<cite>by <a href="space.php?username=%B7%CF%D6%D6%B6%B9%F4%F9">废种豆豉</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_55138" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=55138&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_55138"><a href="viewthread.php?tid=55138&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">长沙爆炸案疑犯作案缘由被披露</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=55138&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=55138&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4449">mj_luck13</a>
										</cite>
					<em>2010-8-8</em>
				</td>
				<td class="nums"><strong>80</strong> / <em>2862</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=55138&goto=lastpost#lastpost">2010-8-11 11:42</a></em>
					<cite>by <a href="space.php?username=hellgate">hellgate</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_58888" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=58888&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_58888"><a href="viewthread.php?tid=58888&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">毛新宇在毛泽东祭日接受人民网专访</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=58888&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=58888&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6314">hhbcl1414</a>
										</cite>
					<em>2010-9-9</em>
				</td>
				<td class="nums"><strong>80</strong> / <em>1970</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=58888&goto=lastpost#lastpost">2010-9-27 09:38</a></em>
					<cite>by <a href="space.php?username=%D7%D4%D3%C9%D7%D4%D4%DA%B7%E7">自由自在风</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_23711" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=23711&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_23711"><a href="viewthread.php?tid=23711&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">视频辟谣：新科少将不是假新闻，人家去年就是了</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=23711&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=23711&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8792">浦志强</a>
										</cite>
					<em>2009-9-25</em>
				</td>
				<td class="nums"><strong>80</strong> / <em>1425</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=23711&goto=lastpost#lastpost">2009-9-28 20:31</a></em>
					<cite>by <a href="space.php?username=%B9%F9%DC%BD%C8%D8%BD%E3%BD%E3">郭芙蓉姐姐</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_23891" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=23891&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_23891"><a href="viewthread.php?tid=23891&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">武汉街头一幕……</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=23891&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=23891&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8831">旮旯旭</a>
										</cite>
					<em>2009-9-30</em>
				</td>
				<td class="nums"><strong>80</strong> / <em>3385</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=23891&goto=lastpost#lastpost">2009-10-9 11:29</a></em>
					<cite>by <a href="space.php?username=satanla">satanla</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_35005" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=35005&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_35005"><a href="viewthread.php?tid=35005&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">苏州工业园发生暴动</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=35005&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=35005&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=10913">发条人</a>
										</cite>
					<em>2010-1-15</em>
				</td>
				<td class="nums"><strong>80</strong> / <em>3399</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=35005&goto=lastpost#lastpost">2010-1-19 20:40</a></em>
					<cite>by <a href="space.php?username=%CE%D2%B2%BB%CA%C7%CE%A7%B9%DB%D5%DF">我不是围观者</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_37049" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=37049&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_37049"><a href="viewthread.php?tid=37049&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">二审一开庭，李庄就认罪</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=37049&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=37049&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3227">快乐流浪汉</a>
										</cite>
					<em>2010-2-2</em>
				</td>
				<td class="nums"><strong>80</strong> / <em>2175</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=37049&goto=lastpost#lastpost">2010-2-6 19:43</a></em>
					<cite>by <a href="space.php?username=lqunl">lqunl</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_10257" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=10257&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_10257"><a href="viewthread.php?tid=10257&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">已申请删帖</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=10257&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=10257&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4507">vookeno</a>
										</cite>
					<em>2009-3-26</em>
				</td>
				<td class="nums"><strong>80</strong> / <em>2870</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=10257&goto=lastpost#lastpost">2009-8-31 21:00</a></em>
					<cite>by <a href="space.php?username=tonya">tonya</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_47979" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=47979&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_47979"><a href="viewthread.php?tid=47979&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">平顶山棉纺织集团工人罢工 要求“请共产党母亲给碗饭吃”</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=47979&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=47979&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7968">singlefabulous</a>
										</cite>
					<em>2010-5-29</em>
				</td>
				<td class="nums"><strong>80</strong> / <em>1967</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=47979&goto=lastpost#lastpost">2010-6-2 17:59</a></em>
					<cite>by <a href="space.php?username=lind">lind</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_52791" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=52791&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_52791"><a href="viewthread.php?tid=52791&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传中宣部整肃国内微博服务 网易搜狐被维护</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=52791&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=52791&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=465">余含泪</a>
										</cite>
					<em>2010-7-10</em>
				</td>
				<td class="nums"><strong>80</strong> / <em>2339</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=52791&goto=lastpost#lastpost">2010-7-16 00:23</a></em>
					<cite>by <a href="space.php?username=naryao">naryao</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_52398" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=52398&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_52398"><a href="viewthread.php?tid=52398&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">宁沪高铁需求不振 无限期停驶</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=52398&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=52398&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=10619">voasia</a>
										</cite>
					<em>2010-7-10</em>
				</td>
				<td class="nums"><strong>80</strong> / <em>2258</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=52398&goto=lastpost#lastpost">2010-7-25 00:40</a></em>
					<cite>by <a href="space.php?username=saintdragon">saintdragon</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_40370" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=40370&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_40370"><a href="viewthread.php?tid=40370&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">倪萍：我爱国，从不反对或弃权，我太能代表老百姓了</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=40370&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=40370&amp;extra=page%3D9%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2564">老卡</a>
										</cite>
					<em>2010-3-6</em>
				</td>
				<td class="nums"><strong>80</strong> / <em>2503</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=40370&goto=lastpost#lastpost">2010-3-16 23:58</a></em>
					<cite>by <a href="space.php?username=%C8%F4%CE%A2">若微</a></cite>
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
	<div class="pages"><em>&nbsp;22278&nbsp;</em><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=1" class="first">1 ...</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=8" class="prev">&lsaquo;&lsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=7">7</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=8">8</a><strong>9</strong><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=10">10</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=11">11</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=12">12</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=13">13</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=14">14</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=15">15</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=16">16</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=10" class="next">&rsaquo;&rsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=349" class="last">... 349</a><kbd><input type="text" name="custompage" size="3" onkeydown="if(event.keyCode==13) {window.location='forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page='+this.value; return false;}" /></kbd></div>	</div>

  
	<div class="box">
			<span class="headactions"><a href="forumdisplay.php?fid=2&amp;page=9&amp;showoldetails=yes#online" class="nobdr"><img src="images/default/collapsed_yes.gif" alt="" /></a></span>
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
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
			window.location = 'forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&page=7';
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
<div class="pages"><em>&nbsp;22278&nbsp;</em><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=1" class="first">1 ...</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=7" class="prev">&lsaquo;&lsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=6">6</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=7">7</a><strong>8</strong><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=9">9</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=10">10</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=11">11</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=12">12</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=13">13</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=14">14</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=15">15</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=9" class="next">&rsaquo;&rsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=349" class="last">... 349</a><kbd><input type="text" name="custompage" size="3" onkeydown="if(event.keyCode==13) {window.location='forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page='+this.value; return false;}" /></kbd></div></div>

<div style="float:left;border:1px solid #CCC; border-bottom:none;;width:218px; background: url(/imgs/1984radio.jpg) 200px 2px no-repeat;padding:5px 0 5px 12px;margin:0px 0 0 13px">

<p><b><a href="/radio/index.php" target="_blank">1984FM</a></b><br /><b><a href="https://voxli.com/1984bbs" target="_blank">1984Chat</a></b>&nbsp;</p> 
</div>

<div style="clear:both;height:0px;width:100%;font-size:1px;">&nbsp;</div>

	<ul class="popupmenu_popup newspecialmenu" id="newspecial_menu" style="display: none">
		<li><a href="post.php?action=newthread&amp;fid=2&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">发新话题</a></li>		<li class="poll"><a href="post.php?action=newthread&amp;fid=2&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;special=1">发布投票</a></li>													</ul>
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

					<tbody id="normalthread_56919" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=56919&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_56919"><a href="viewthread.php?tid=56919&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">武汉少女遭拆迁人员轮奸 爆发大规模堵路</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=56919&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=56919&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=18152">非虎即猫</a>
										</cite>
					<em>2010-8-31</em>
				</td>
				<td class="nums"><strong>89</strong> / <em>3519</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=56919&goto=lastpost#lastpost">2010-9-6 20:10</a></em>
					<cite>by <a href="space.php?username=%D3%F1%D4%F3">玉泽</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_58670" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=58670&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_58670"><a href="viewthread.php?tid=58670&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">吁释刘晓波冰岛市长激怒刘淇</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=58670&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=58670&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7002">luugoo</a>
										</cite>
					<em>2010-9-16</em>
				</td>
				<td class="nums"><strong>89</strong> / <em>3301</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=58670&goto=lastpost#lastpost">2010-10-9 11:40</a></em>
					<cite>by <a href="space.php?username=liuropot">liuropot</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_39249" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=39249&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_39249"><a href="viewthread.php?tid=39249&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">武汉活埋拆迁业主  政府公布处理结果</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=39249&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=39249&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8544">百丽</a>
										</cite>
					<em>2010-3-4</em>
				</td>
				<td class="nums"><strong>89</strong> / <em>2867</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=39249&goto=lastpost#lastpost">2010-3-14 18:00</a></em>
					<cite>by <a href="space.php?username=%B3%BD%D3%EA%C3%FA">辰雨铭</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_41533" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=41533&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_41533"><a href="viewthread.php?tid=41533&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">深圳男子驾车被警察击毙 家属围堵派出所</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=41533&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=41533&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4570">我卖糕的</a>
										</cite>
					<em>2010-3-28</em>
				</td>
				<td class="nums"><strong>89</strong> / <em>1473</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=41533&goto=lastpost#lastpost">2010-3-31 01:38</a></em>
					<cite>by <a href="space.php?username=nkpoper">nkpoper</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_6345" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=6345&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_6345"><a href="viewthread.php?tid=6345&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">九常委闲庭信步 神奇走位如身临T台</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=6345&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=6345&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2152">关键鹚</a>
										</cite>
					<em>2009-3-5</em>
				</td>
				<td class="nums"><strong>89</strong> / <em>1960</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=6345&goto=lastpost#lastpost">2009-3-8 11:04</a></em>
					<cite>by <a href="space.php?username=%C7%F3%CE%C4%BD%DC">求文杰</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_59732" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=59732&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_59732"><a href="viewthread.php?tid=59732&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">六四学生领袖李禄随巴菲特来华</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=59732&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=59732&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=18649">wenjb</a>
										</cite>
					<em>2010-9-28</em>
				</td>
				<td class="nums"><strong>88</strong> / <em>3665</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=59732&goto=lastpost#lastpost">2010-10-2 21:29</a></em>
					<cite>by <a href="space.php?username=makaay22">makaay22</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_48010" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=48010&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_48010"><a href="viewthread.php?tid=48010&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">中国钢铁侠现身艺术节 被捕艺术家仍在关押</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=48010&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=48010&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2315">写实</a>
										</cite>
					<em>2010-6-2</em>
				</td>
				<td class="nums"><strong>88</strong> / <em>2295</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=48010&goto=lastpost#lastpost">2010-7-14 12:52</a></em>
					<cite>by <a href="space.php?username=Cena">Cena</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_17090" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=17090&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_17090"><a href="viewthread.php?tid=17090&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">最新饭否的官方回复</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=17090&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=17090&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6778">1984sb</a>
										</cite>
					<em>2009-7-18</em>
				</td>
				<td class="nums"><strong>88</strong> / <em>3016</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=17090&goto=lastpost#lastpost">2009-8-21 23:02</a></em>
					<cite>by <a href="space.php?username=%E6%D2%C6%A4%B5%C4%C5%F3%BF%CB">嬉皮的朋克</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_20377" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=20377&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_20377"><a href="viewthread.php?tid=20377&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">《老同志的讲话》是伪造的？</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=20377&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=20377&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2703">billdc</a>
										</cite>
					<em>2009-8-18</em>
				</td>
				<td class="nums"><strong>88</strong> / <em>2471</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=20377&goto=lastpost#lastpost">2009-8-24 10:27</a></em>
					<cite>by <a href="space.php?username=peteryang84">peteryang84</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_21577" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=21577&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_21577"><a href="viewthread.php?tid=21577&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传，上海有针扎事件</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=21577&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=21577&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2169">treeofmercury</a>
										</cite>
					<em>2009-9-7</em>
				</td>
				<td class="nums"><strong>88</strong> / <em>2993</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=21577&goto=lastpost#lastpost">2009-9-9 14:51</a></em>
					<cite>by <a href="space.php?username=CHR">CHR</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_21192" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=21192&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_21192"><a href="viewthread.php?tid=21192&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">前中堂出书</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=21192&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=21192&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4570">我卖糕的</a>
										</cite>
					<em>2009-9-1</em>
				</td>
				<td class="nums"><strong>88</strong> / <em>2137</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=21192&goto=lastpost#lastpost">2009-9-19 23:25</a></em>
					<cite>by <a href="space.php?username=SKSC">SKSC</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_22260" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=22260&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_22260"><a href="viewthread.php?tid=22260&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">90后新生的母亲：“我女儿身体里的每一个细胞都需要空调！”</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=22260&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=22260&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5736">外来务工人员</a>
										</cite>
					<em>2009-9-14</em>
				</td>
				<td class="nums"><strong>88</strong> / <em>1699</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=22260&goto=lastpost#lastpost">2009-9-20 11:02</a></em>
					<cite>by <a href="space.php?username=%D6%BB%CA%C7%BF%B4%BF%B4">只是看看</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_33137" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=33137&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_33137"><a href="viewthread.php?tid=33137&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">中国支付4百万美元 赎回被劫货轮及船员</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=33137&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=33137&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7919">路边社门卫</a>
										</cite>
					<em>2009-12-27</em>
				</td>
				<td class="nums"><strong>88</strong> / <em>1850</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=33137&goto=lastpost#lastpost">2010-1-2 19:10</a></em>
					<cite>by <a href="space.php?username=%CD%F5%BE%C5%B5%B0">王九蛋</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_16148" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=16148&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_16148"><a href="viewthread.php?tid=16148&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">贺卫方老师对艾大爷的评价</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=16148&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=16148&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4449">mj_luck13</a>
										</cite>
					<em>2009-7-8</em>
				</td>
				<td class="nums"><strong>88</strong> / <em>1907</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=16148&goto=lastpost#lastpost">2009-7-9 21:29</a></em>
					<cite>by <a href="space.php?username=%D0%A1%B4%E5">小村</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_10982" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=10982&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_10982"><a href="viewthread.php?tid=10982&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">赵紫阳回忆录《国家的囚徒》购买信息及内页图</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=10982&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=10982&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7">张书记</a>
										</cite>
					<em>2009-5-15</em>
				</td>
				<td class="nums"><strong>87</strong> / <em>2924</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=10982&goto=lastpost#lastpost">2009-6-25 21:29</a></em>
					<cite>by <a href="space.php?username=%D6%DC%D3%CE%C1%D0%B9%FA">周游列国</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_15535" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=15535&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_15535"><a href="viewthread.php?tid=15535&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">LIFE杂志泄露滤霸核心机密</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=15535&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=15535&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2804">musicool</a>
										</cite>
					<em>2009-7-1</em>
				</td>
				<td class="nums"><strong>87</strong> / <em>2162</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=15535&goto=lastpost#lastpost">2009-7-6 17:26</a></em>
					<cite>by <a href="space.php?username=sixapostle">sixapostle</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_15137" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=15137&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_15137"><a href="viewthread.php?tid=15137&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">理想因为远大而不好意思说</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=15137&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=15137&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2868">用裤衩思考</a>
										</cite>
					<em>2009-6-28</em>
				</td>
				<td class="nums"><strong>87</strong> / <em>1647</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=15137&goto=lastpost#lastpost">2009-7-20 20:53</a></em>
					<cite>by <a href="space.php?username=freenet">freenet</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_25781" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=25781&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_25781"><a href="viewthread.php?tid=25781&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">郭泉母亲法庭直言“儿子，我为你骄傲”</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=25781&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=25781&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4415">ljb166</a>
										</cite>
					<em>2009-8-11</em>
				</td>
				<td class="nums"><strong>87</strong> / <em>2143</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=25781&goto=lastpost#lastpost">2009-10-21 13:27</a></em>
					<cite>by <a href="space.php?username=%CD%F8%D2%B3%CE%DE%B7%A8%CF%D4%CA%BE">网页无法显示</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_25758" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=25758&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_25758"><a href="viewthread.php?tid=25758&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">艾未未回京 家门口被装了两只“老大哥”</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=25758&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=25758&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3227">快乐流浪汉</a>
										</cite>
					<em>2009-10-20</em>
				</td>
				<td class="nums"><strong>87</strong> / <em>2877</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=25758&goto=lastpost#lastpost">2009-10-28 14:18</a></em>
					<cite>by <a href="space.php?username=%D7%C6%D1%DB%A4%CESABER">灼眼のSABER</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_59351" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=59351&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_59351"><a href="viewthread.php?tid=59351&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">朝鲜媒体发文纪念黄继光</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=59351&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=59351&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4764">我爱你家</a>
										</cite>
					<em>2010-9-25</em>
				</td>
				<td class="nums"><strong>87</strong> / <em>1484</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=59351&goto=lastpost#lastpost">2010-9-30 22:30</a></em>
					<cite>by <a href="space.php?username=%D0%C4%CB%E6%C4%E3%B6%AF">心随你动</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_60778" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=60778&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_60778"><a href="viewthread.php?tid=60778&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传江泽民现身北京颐和园东门酒店</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=60778&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=60778&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2232">老杂疫</a>
										</cite>
					<em>2010-10-11</em>
				</td>
				<td class="nums"><strong>87</strong> / <em>3940</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=60778&goto=lastpost#lastpost">2010-10-11 20:56</a></em>
					<cite>by <a href="space.php?username=%B8%F7%B8%F7%CB%FB">各各他</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_5917" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=5917&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_5917"><a href="viewthread.php?tid=5917&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">吃饱了没事干的鬼佬，储君要教导你们！</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=5917&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=5917&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2034">一小撮阴毛</a>
										</cite>
					<em>2009-2-12</em>
				</td>
				<td class="nums"><strong>87</strong> / <em>2403</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=5917&goto=lastpost#lastpost">2009-2-28 12:14</a></em>
					<cite>by <a href="space.php?username=bison">bison</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_20321" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=20321&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_20321"><a href="viewthread.php?tid=20321&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">曾庆红不满景、影帝大搞文字狱</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=20321&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=20321&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7920">路边社前台妹</a>
										</cite>
					<em>2009-8-22</em>
				</td>
				<td class="nums"><strong>87</strong> / <em>2927</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=20321&goto=lastpost#lastpost">2009-8-26 03:53</a></em>
					<cite>by <a href="space.php?username=%CE%F7%C3%C5%B4%B5%C5%A3">西门吹牛</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_48763" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=48763&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_48763"><a href="viewthread.php?tid=48763&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">广西梧州六名法官遭泼硫酸 法院院长受重伤</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=48763&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=48763&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=15056">lovinbo</a>
										</cite>
					<em>2010-6-8</em>
				</td>
				<td class="nums"><strong>87</strong> / <em>1549</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=48763&goto=lastpost#lastpost">2010-6-10 01:11</a></em>
					<cite>by <a href="space.php?username=Zuiker">Zuiker</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_39340" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=39340&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_39340"><a href="viewthread.php?tid=39340&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">李银河建议取消聚众淫乱罪</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=39340&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=39340&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=852">未来他老爸</a>
										</cite>
					<em>2010-3-5</em>
				</td>
				<td class="nums"><strong>87</strong> / <em>1570</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=39340&goto=lastpost#lastpost">2010-3-8 20:45</a></em>
					<cite>by <a href="space.php?username=%CE%B4%C0%B4%CB%FB%C0%CF%B0%D6">未来他老爸</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_44118" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=44118&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_44118"><a href="viewthread.php?tid=44118&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">霍金警告外星人肯定存在 应尽量避免接触</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=44118&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=44118&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=10890">xiaohe1120</a>
										</cite>
					<em>2010-4-26</em>
				</td>
				<td class="nums"><strong>87</strong> / <em>1866</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=44118&goto=lastpost#lastpost">2010-4-29 00:31</a></em>
					<cite>by <a href="space.php?username=%CE%DE%D1%D4%B5%C4%C9%BD%C7%F0">无言的山丘</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_43943" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=43943&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_43943"><a href="viewthread.php?tid=43943&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">俄罗斯人建议将列宁遗体送给北京</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=43943&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=43943&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8301">lqunl</a>
										</cite>
					<em>2010-4-23</em>
				</td>
				<td class="nums"><strong>87</strong> / <em>2399</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=43943&goto=lastpost#lastpost">2010-5-1 23:03</a></em>
					<cite>by <a href="space.php?username=%CC%EC%B1%DF%D2%BB%B6%E4%D4%C6">天边一朵云</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_31383" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=31383&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_31383"><a href="viewthread.php?tid=31383&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">储君强见天皇，日媒哗然</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=31383&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=31383&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5464">上海帅哥</a>
										</cite>
					<em>2009-12-14</em>
				</td>
				<td class="nums"><strong>87</strong> / <em>3363</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=31383&goto=lastpost#lastpost">2009-12-17 21:55</a></em>
					<cite>by <a href="space.php?username=%B5%A5%CA%D6%B7%F6%C7%BD">单手扶墙</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_30780" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=30780&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_30780"><a href="viewthread.php?tid=30780&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">西北政法大学发生骚乱</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=30780&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=30780&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=10660">豆爷</a>
										</cite>
					<em>2009-12-12</em>
				</td>
				<td class="nums"><strong>87</strong> / <em>3015</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=30780&goto=lastpost#lastpost">2009-12-18 16:46</a></em>
					<cite>by <a href="space.php?username=%CE%ED%B7%E7">雾风</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_32393" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=32393&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_32393"><a href="viewthread.php?tid=32393&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">影帝拒见奥巴马遣低级代表会谈</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=32393&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=32393&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8823">jason_jiang</a>
										</cite>
					<em>2009-12-20</em>
				</td>
				<td class="nums"><strong>87</strong> / <em>1764</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=32393&goto=lastpost#lastpost">2009-12-26 21:11</a></em>
					<cite>by <a href="space.php?username=iridiumcao">iridiumcao</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_18951" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=18951&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_18951"><a href="viewthread.php?tid=18951&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">刺伤钱烈宪的凶手被判4年半 孔庆东称并不知情</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=18951&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=18951&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1258">路边社记者</a>
										</cite>
					<em>2009-8-6</em>
				</td>
				<td class="nums"><strong>86</strong> / <em>1973</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=18951&goto=lastpost#lastpost">2009-8-13 13:46</a></em>
					<cite>by <a href="space.php?username=%B0%D7%C3%D7%C9%D5%BC%A6">白米烧鸡</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_26123" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=26123&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_26123"><a href="viewthread.php?tid=26123&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">文强利用女星隐私恐吓上床</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=26123&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=26123&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4570">我卖糕的</a>
										</cite>
					<em>2009-10-19</em>
				</td>
				<td class="nums"><strong>86</strong> / <em>3885</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=26123&goto=lastpost#lastpost">2009-10-28 21:57</a></em>
					<cite>by <a href="space.php?username=%CE%F7%C3%C5%B4%B5%C5%A3">西门吹牛</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_57828" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=57828&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_57828"><a href="viewthread.php?tid=57828&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">Dior新广告被指涉嫌辱华</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=57828&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=57828&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7002">luugoo</a>
										</cite>
					<em>2010-9-8</em>
				</td>
				<td class="nums"><strong>86</strong> / <em>2714</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=57828&goto=lastpost#lastpost">2010-9-16 12:09</a></em>
					<cite>by <a href="space.php?username=%C9%BD%C4%B7%B0%AE%B3%D4%CD%C1%B6%B9">山姆爱吃土豆</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_47110" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=47110&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_47110"><a href="viewthread.php?tid=47110&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">《环球时报》记者称卢安克有“恋童癖”倾向</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=47110&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=47110&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=9907">yoyominnie</a>
										</cite>
					<em>2010-5-24</em>
				</td>
				<td class="nums"><strong>86</strong> / <em>1731</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=47110&goto=lastpost#lastpost">2010-5-26 00:30</a></em>
					<cite>by <a href="space.php?username=C.C.">C.C.</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_47174" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=47174&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_47174"><a href="viewthread.php?tid=47174&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传余秋雨病逝</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=47174&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=47174&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8077">yhuse</a>
										</cite>
					<em>2010-5-26</em>
				</td>
				<td class="nums"><strong>86</strong> / <em>2515</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=47174&goto=lastpost#lastpost">2010-5-28 15:42</a></em>
					<cite>by <a href="space.php?username=sztcyhf">sztcyhf</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_47845" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=47845&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_47845"><a href="viewthread.php?tid=47845&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">香港警方没收六四艺术展品</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=47845&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=47845&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=9517">老西</a>
										</cite>
					<em>2010-5-30</em>
				</td>
				<td class="nums"><strong>86</strong> / <em>1960</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=47845&goto=lastpost#lastpost">2010-6-1 15:04</a></em>
					<cite>by <a href="space.php?username=%B7%C5%D6%F0">放逐</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_48427" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=48427&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_48427"><a href="viewthread.php?tid=48427&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">高考北京卷作文题目《仰望星空与脚踏实地》</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=48427&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=48427&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4638">江湖席</a>
										</cite>
					<em>2010-6-7</em>
				</td>
				<td class="nums"><strong>86</strong> / <em>2070</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=48427&goto=lastpost#lastpost">2010-6-8 21:49</a></em>
					<cite>by <a href="space.php?username=huifox">huifox</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_53185" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=53185&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_53185"><a href="viewthread.php?tid=53185&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">美国公布最新“被奴役国家黑名单”</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=53185&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=53185&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7277">一向低调</a>
										</cite>
					<em>2010-7-18</em>
				</td>
				<td class="nums"><strong>86</strong> / <em>2038</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=53185&goto=lastpost#lastpost">2010-7-20 11:04</a></em>
					<cite>by <a href="space.php?username=%CB%A7%B5%C3%BA%DC%CE%DE%C4%CE">帅得很无奈</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_33732" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=33732&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_33732"><a href="viewthread.php?tid=33732&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">捍卫中共尊严 陆川再退国际影展</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=33732&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=33732&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7">张书记</a>
										</cite>
					<em>2010-1-6</em>
				</td>
				<td class="nums"><strong>86</strong> / <em>2032</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=33732&goto=lastpost#lastpost">2010-1-11 13:21</a></em>
					<cite>by <a href="space.php?username=%CB%AE%CE%AA%D6%AE">水为之</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_26352" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=26352&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_26352"><a href="viewthread.php?tid=26352&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">党报悍然占领帝都报刊亭 加量不加价群众纷纷表示满意</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=26352&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=26352&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4867">asico001</a>
										</cite>
					<em>2009-7-14</em>
				</td>
				<td class="nums"><strong>86</strong> / <em>2402</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=26352&goto=lastpost#lastpost">2010-1-15 11:25</a></em>
					<cite>by <a href="space.php?username=abu">abu</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_37506" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=37506&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_37506"><a href="viewthread.php?tid=37506&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传，文强和主持人周涛有染</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=37506&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=37506&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8638">dark</a>
										</cite>
					<em>2010-2-11</em>
				</td>
				<td class="nums"><strong>86</strong> / <em>3251</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=37506&goto=lastpost#lastpost">2010-2-20 13:16</a></em>
					<cite>by <a href="space.php?username=wistreer">wistreer</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_32199" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=32199&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_32199"><a href="viewthread.php?tid=32199&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">阿沛&#8226;阿旺晋美逝世</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=32199&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=32199&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=9991">duck_1984</a>
										</cite>
					<em>2009-12-23</em>
				</td>
				<td class="nums"><strong>85</strong> / <em>2345</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=32199&goto=lastpost#lastpost">2010-1-9 23:00</a></em>
					<cite>by <a href="space.php?username=%B6%C0%B9%C2%D1%C6%D1%D4">独孤哑言</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_17099" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=17099&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_17099"><a href="viewthread.php?tid=17099&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">解放军年底大动作——减陆军70万，海空军各增25万</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=17099&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=17099&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1408">becom</a>
										</cite>
					<em>2009-7-18</em>
				</td>
				<td class="nums"><strong>85</strong> / <em>1727</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=17099&goto=lastpost#lastpost">2009-8-2 15:05</a></em>
					<cite>by <a href="space.php?username=%CE%E7%D2%B9%B7%E7%B1%A9">午夜风暴</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_20427" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=20427&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_20427"><a href="viewthread.php?tid=20427&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">快讯：许志永被取保候审，刚刚获得自由</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=20427&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=20427&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4490">camour</a>
										</cite>
					<em>2009-8-23</em>
				</td>
				<td class="nums"><strong>85</strong> / <em>1536</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=20427&goto=lastpost#lastpost">2009-8-26 12:36</a></em>
					<cite>by <a href="space.php?username=%BB%A8%CF%EB%C8%DD">花想容</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_51045" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=51045&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_51045"><a href="viewthread.php?tid=51045&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">江苏理科生骈体作文获高分 专家称看不全懂</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=51045&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=51045&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=852">未来他老爸</a>
										</cite>
					<em>2010-6-28</em>
				</td>
				<td class="nums"><strong>85</strong> / <em>1896</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=51045&goto=lastpost#lastpost">2010-7-1 01:14</a></em>
					<cite>by <a href="space.php?username=phokaur">phokaur</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_53251" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=53251&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_53251"><a href="viewthread.php?tid=53251&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">甘肃重大车祸 上海大众总经理一行全部遇难</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=53251&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=53251&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7938">1980s</a>
										</cite>
					<em>2010-7-19</em>
				</td>
				<td class="nums"><strong>85</strong> / <em>2945</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=53251&goto=lastpost#lastpost">2010-7-21 19:20</a></em>
					<cite>by <a href="space.php?username=blue">blue</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_58264" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=58264&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_58264"><a href="viewthread.php?tid=58264&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">江西抚州强行拆迁导致三人自焚</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=58264&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=58264&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=10890">xiaohe1120</a>
										</cite>
					<em>2010-9-11</em>
				</td>
				<td class="nums"><strong>85</strong> / <em>1624</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=58264&goto=lastpost#lastpost">2010-9-14 12:07</a></em>
					<cite>by <a href="space.php?username=%C2%C0%D4%F4">吕贼</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_57673" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=57673&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_57673"><a href="viewthread.php?tid=57673&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">中共将在全国范围内实施无线电管制</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=57673&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=57673&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1981">黑衣大葛格</a>
										</cite>
					<em>2010-9-6</em>
				</td>
				<td class="nums"><strong>85</strong> / <em>2373</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=57673&goto=lastpost#lastpost">2010-10-1 17:19</a></em>
					<cite>by <a href="space.php?username=hugebao">hugebao</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_40632" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=40632&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_40632"><a href="viewthread.php?tid=40632&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">合肥街头一裸男抗议“万恶丑陋的现代化社会”</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=40632&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=40632&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=688">cielsun</a>
										</cite>
					<em>2010-3-18</em>
				</td>
				<td class="nums"><strong>85</strong> / <em>2466</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=40632&goto=lastpost#lastpost">2010-3-22 23:56</a></em>
					<cite>by <a href="space.php?username=%C0%CF%BA%FD%CD%BF%CB%B5">老糊涂说</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_41556" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=41556&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_41556"><a href="viewthread.php?tid=41556&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">调查称全国一成半大学生承认已失身</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=41556&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=41556&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3202">glim</a>
										</cite>
					<em>2010-3-28</em>
				</td>
				<td class="nums"><strong>84</strong> / <em>1795</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=41556&goto=lastpost#lastpost">2010-3-31 00:55</a></em>
					<cite>by <a href="space.php?username=%B9%DB%C6%E5%B2%BB%D3%EF">观棋不语</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_41930" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=41930&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_41930"><a href="viewthread.php?tid=41930&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">梁咏琪遭勒令删去新浪微博文章</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=41930&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=41930&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7002">luugoo</a>
										</cite>
					<em>2010-4-1</em>
				</td>
				<td class="nums"><strong>84</strong> / <em>3349</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=41930&goto=lastpost#lastpost">2010-4-13 19:52</a></em>
					<cite>by <a href="space.php?username=vookeno">vookeno</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_46451" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=46451&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_46451"><a href="viewthread.php?tid=46451&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">中国留美女学生在纽约闹市遭强暴殴打致死 路人视若无睹</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=46451&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=46451&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1408">becom</a>
										</cite>
					<em>2010-5-20</em>
				</td>
				<td class="nums"><strong>84</strong> / <em>2032</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=46451&goto=lastpost#lastpost">2010-5-26 16:26</a></em>
					<cite>by <a href="space.php?username=quaestor">quaestor</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_37189" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=37189&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_37189"><a href="viewthread.php?tid=37189&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">赵文卓给女儿起名“紫阳”</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=37189&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=37189&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8958">临终上帝</a>
										</cite>
					<em>2010-2-8</em>
				</td>
				<td class="nums"><strong>84</strong> / <em>2824</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=37189&goto=lastpost#lastpost">2010-2-11 17:11</a></em>
					<cite>by <a href="space.php?username=%CC%FA%D0%A1%CA%F7">铁小树</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_38658" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=38658&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_38658"><a href="viewthread.php?tid=38658&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">港媒播出高耀洁美国流亡专访</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=38658&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=38658&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5464">上海帅哥</a>
										</cite>
					<em>2010-2-22</em>
				</td>
				<td class="nums"><strong>84</strong> / <em>1958</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=38658&goto=lastpost#lastpost">2010-2-27 02:32</a></em>
					<cite>by <a href="space.php?username=singlefabulous">singlefabulous</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_27747" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=27747&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_27747"><a href="viewthread.php?tid=27747&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">北航军训致一人患甲流亡   世卫质疑中国死亡人数     上级指示病例上报需谨慎</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=27747&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=27747&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2025">asswar</a>
										</cite>
					<em>2009-10-28</em>
				</td>
				<td class="nums"><strong>84</strong> / <em>2588</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=27747&goto=lastpost#lastpost">2009-11-11 13:27</a></em>
					<cite>by <a href="space.php?username=%B6%FE%D2%AF">二爷</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_15555" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=15555&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_15555"><a href="viewthread.php?tid=15555&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">连载：天朝锦衣卫和红朝提刑官的那些事儿</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=15555&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=15555&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5464">上海帅哥</a>
										</cite>
					<em>2009-6-29</em>
				</td>
				<td class="nums"><strong>84</strong> / <em>2703</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=15555&goto=lastpost#lastpost">2009-7-5 15:42</a></em>
					<cite>by <a href="space.php?username=fred9113">fred9113</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_57367" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=57367&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_57367"><a href="viewthread.php?tid=57367&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">薄熙来：为穷人办事是共产党和人民政府的本分</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=57367&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=57367&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3202">glim</a>
										</cite>
					<em>2010-9-2</em>
				</td>
				<td class="nums"><strong>84</strong> / <em>1639</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=57367&goto=lastpost#lastpost">2010-9-5 12:50</a></em>
					<cite>by <a href="space.php?username=%AF%82%C9%AE">瘋僧</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_59602" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=59602&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_59602"><a href="viewthread.php?tid=59602&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">朝鲜劳动党代会召开 金正银被钦定为最高权力接班人</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=59602&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=59602&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=144">mfs0616</a>
										</cite>
					<em>2010-9-27</em>
				</td>
				<td class="nums"><strong>84</strong> / <em>2395</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=59602&goto=lastpost#lastpost">2010-9-30 00:34</a></em>
					<cite>by <a href="space.php?username=mindormood">mindormood</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_59917" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=59917&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_59917"><a href="viewthread.php?tid=59917&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">朝鲜媒体公布金正银照片</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=59917&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=59917&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=17047">壹玖捌肆</a>
										</cite>
					<em>2010-9-30</em>
				</td>
				<td class="nums"><strong>84</strong> / <em>2297</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=59917&goto=lastpost#lastpost">2010-10-6 23:43</a></em>
					<cite>by <a href="space.php?username=mc5">mc5</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_18758" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=18758&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_18758"><a href="viewthread.php?tid=18758&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">刘沙沙因抗议许志永被捕而被捕 传关押场所发生强奸案</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=18758&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=18758&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3227">快乐流浪汉</a>
										</cite>
					<em>2009-8-3</em>
				</td>
				<td class="nums"><strong>84</strong> / <em>3114</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=18758&goto=lastpost#lastpost">2009-8-7 10:52</a></em>
					<cite>by <a href="space.php?username=%B9%AB%C3%F11776">公民1776</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_47547" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=47547&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_47547"><a href="viewthread.php?tid=47547&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">富士康员工工资单流出</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=47547&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=47547&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2907">无言的山丘</a>
										</cite>
					<em>2010-5-26</em>
				</td>
				<td class="nums"><strong>84</strong> / <em>2756</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=47547&goto=lastpost#lastpost">2010-5-29 10:48</a></em>
					<cite>by <a href="space.php?username=%BF%AA%D0%C4">开心</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_48033" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=48033&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_48033"><a href="viewthread.php?tid=48033&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">真理部最新指令：法国网球公开赛“不报道小分”</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=48033&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=48033&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5588">我家旺财有喜了</a>
										</cite>
					<em>2010-6-2</em>
				</td>
				<td class="nums"><strong>84</strong> / <em>2882</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=48033&goto=lastpost#lastpost">2010-6-7 00:59</a></em>
					<cite>by <a href="space.php?username=%C0%B6%C0%B6%C2%B7">蓝蓝路</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_50955" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=50955&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_50955"><a href="viewthread.php?tid=50955&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">10岁男童高考获566分 开发自己的操作系统</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=50955&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=50955&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6889">阿牛</a>
										</cite>
					<em>2010-6-27</em>
				</td>
				<td class="nums"><strong>84</strong> / <em>1824</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=50955&goto=lastpost#lastpost">2010-7-8 20:57</a></em>
					<cite>by <a href="space.php?username=%BA%AE%C3%B7">寒梅</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_49312" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=49312&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_49312"><a href="viewthread.php?tid=49312&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">真理部最新指令：不炒作“甘肃张掖假羊肉”</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=49312&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=49312&amp;extra=page%3D8%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=21">大仙儿</a>
										</cite>
					<em>2010-6-12</em>
				</td>
				<td class="nums"><strong>83</strong> / <em>2428</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=49312&goto=lastpost#lastpost">2010-6-14 16:25</a></em>
					<cite>by <a href="space.php?username=%D1%EF%B7%AB%CE%AA%D4%B6%BA%BD">扬帆为远航</a></cite>
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
	<div class="pages"><em>&nbsp;22278&nbsp;</em><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=1" class="first">1 ...</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=7" class="prev">&lsaquo;&lsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=6">6</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=7">7</a><strong>8</strong><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=9">9</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=10">10</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=11">11</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=12">12</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=13">13</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=14">14</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=15">15</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=9" class="next">&rsaquo;&rsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=349" class="last">... 349</a><kbd><input type="text" name="custompage" size="3" onkeydown="if(event.keyCode==13) {window.location='forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page='+this.value; return false;}" /></kbd></div>	</div>

  
	<div class="box">
			<span class="headactions"><a href="forumdisplay.php?fid=2&amp;page=8&amp;showoldetails=yes#online" class="nobdr"><img src="images/default/collapsed_yes.gif" alt="" /></a></span>
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
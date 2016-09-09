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
			window.location = 'forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&page=24';
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
<div class="pages"><em>&nbsp;22278&nbsp;</em><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=1" class="first">1 ...</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=24" class="prev">&lsaquo;&lsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=23">23</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=24">24</a><strong>25</strong><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=26">26</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=27">27</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=28">28</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=29">29</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=30">30</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=31">31</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=32">32</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=26" class="next">&rsaquo;&rsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=349" class="last">... 349</a><kbd><input type="text" name="custompage" size="3" onkeydown="if(event.keyCode==13) {window.location='forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page='+this.value; return false;}" /></kbd></div></div>

<div style="float:left;border:1px solid #CCC; border-bottom:none;;width:218px; background: url(/imgs/1984radio.jpg) 200px 2px no-repeat;padding:5px 0 5px 12px;margin:0px 0 0 13px">

<p><b><a href="/radio/index.php" target="_blank">1984FM</a></b><br /><b><a href="https://voxli.com/1984bbs" target="_blank">1984Chat</a></b>&nbsp;</p> 
</div>

<div style="clear:both;height:0px;width:100%;font-size:1px;">&nbsp;</div>

	<ul class="popupmenu_popup newspecialmenu" id="newspecial_menu" style="display: none">
		<li><a href="post.php?action=newthread&amp;fid=2&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">发新话题</a></li>		<li class="poll"><a href="post.php?action=newthread&amp;fid=2&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;special=1">发布投票</a></li>													</ul>
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

					<tbody id="normalthread_24745" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=24745&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_24745"><a href="viewthread.php?tid=24745&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">习近平警告：如脱离群众将丧失执政权</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=24745&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=24745&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8301">lqunl</a>
										</cite>
					<em>2009-10-11</em>
				</td>
				<td class="nums"><strong>50</strong> / <em>1249</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=24745&goto=lastpost#lastpost">2009-10-13 08:47</a></em>
					<cite>by <a href="space.php?username=luugoo">luugoo</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_24894" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=24894&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_24894"><a href="viewthread.php?tid=24894&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">天安门广场的便衣</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=24894&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=24894&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8201">yijiubasi</a>
										</cite>
					<em>2009-10-11</em>
				</td>
				<td class="nums"><strong>50</strong> / <em>1976</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=24894&goto=lastpost#lastpost">2009-10-14 00:10</a></em>
					<cite>by <a href="space.php?username=liujiaz">liujiaz</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_24872" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=24872&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_24872"><a href="viewthread.php?tid=24872&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">偷运毒品来华的英国男子面临处决</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=24872&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=24872&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7101">george</a>
										</cite>
					<em>2009-10-12</em>
				</td>
				<td class="nums"><strong>50</strong> / <em>871</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=24872&goto=lastpost#lastpost">2009-10-15 09:21</a></em>
					<cite>by <a href="space.php?username=qinghe1987">qinghe1987</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_13168" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=13168&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_13168"><a href="viewthread.php?tid=13168&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">该帖已被LZ删除</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=13168&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=13168&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3404">礼拜九</a>
										</cite>
					<em>2009-6-10</em>
				</td>
				<td class="nums"><strong>50</strong> / <em>1169</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=13168&goto=lastpost#lastpost">2009-6-15 13:21</a></em>
					<cite>by <a href="space.php?username=%C1%F7%B7%E7">流风</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_14413" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=14413&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_14413"><a href="viewthread.php?tid=14413&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">影帝乘坐一趟并不存在的列车</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=14413&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=14413&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5391">wikings</a>
										</cite>
					<em>2009-6-21</em>
				</td>
				<td class="nums"><strong>50</strong> / <em>1839</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=14413&goto=lastpost#lastpost">2009-6-25 20:22</a></em>
					<cite>by <a href="space.php?username=weke">weke</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_14550" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=14550&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_14550"><a href="viewthread.php?tid=14550&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">郑渊洁宣布退出北京作家协会</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=14550&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=14550&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1886">gjlawyer</a>
										</cite>
					<em>2009-6-23</em>
				</td>
				<td class="nums"><strong>50</strong> / <em>1144</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=14550&goto=lastpost#lastpost">2009-6-25 21:02</a></em>
					<cite>by <a href="space.php?username=%C2%B7%B9%FD%F2%DF%F2%D1">路过蜻蜓</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_16790" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=16790&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_16790"><a href="viewthread.php?tid=16790&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">有党在，我谁也不怕</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=16790&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=16790&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3202">glim</a>
										</cite>
					<em>2009-7-15</em>
				</td>
				<td class="nums"><strong>50</strong> / <em>980</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=16790&goto=lastpost#lastpost">2009-7-17 16:21</a></em>
					<cite>by <a href="space.php?username=Geona">Geona</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_17281" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=17281&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_17281"><a href="viewthread.php?tid=17281&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传，中国红十字基金会涉嫌洗钱员工被抓</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=17281&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=17281&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=202">investigate</a>
										</cite>
					<em>2009-7-20</em>
				</td>
				<td class="nums"><strong>50</strong> / <em>963</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=17281&goto=lastpost#lastpost">2009-7-20 23:22</a></em>
					<cite>by <a href="space.php?username=%CE%B4%C0%B4%CB%FB%C0%CF%B0%D6">未来他老爸</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_47621" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=47621&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_47621"><a href="viewthread.php?tid=47621&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">大陆游客：民国国歌有精神</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=47621&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=47621&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=10619">voasia</a>
										</cite>
					<em>2010-5-29</em>
				</td>
				<td class="nums"><strong>50</strong> / <em>1453</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=47621&goto=lastpost#lastpost">2010-6-2 07:37</a></em>
					<cite>by <a href="space.php?username=Cena">Cena</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_47878" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=47878&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_47878"><a href="viewthread.php?tid=47878&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">山西拟用“王家岭奇迹”题材拍电影歌颂党和政府</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=47878&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=47878&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3202">glim</a>
										</cite>
					<em>2010-5-31</em>
				</td>
				<td class="nums"><strong>50</strong> / <em>745</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=47878&goto=lastpost#lastpost">2010-6-2 22:19</a></em>
					<cite>by <a href="space.php?username=%F4%94%B0%EE%C8%FD%CA%C0">魯邦三世</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_48582" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=48582&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_48582"><a href="viewthread.php?tid=48582&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">成龙投资二亿拍《智取威虎山》将演主角杨子荣</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=48582&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=48582&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8638">dark</a>
										</cite>
					<em>2010-6-8</em>
				</td>
				<td class="nums"><strong>50</strong> / <em>705</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=48582&goto=lastpost#lastpost">2010-6-9 09:28</a></em>
					<cite>by <a href="space.php?username=mimi69">mimi69</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_49641" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=49641&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_49641"><a href="viewthread.php?tid=49641&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">NGO人士苏雨桐被抄家</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=49641&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=49641&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3385">coeus</a>
										</cite>
					<em>2010-6-16</em>
				</td>
				<td class="nums"><strong>50</strong> / <em>1610</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=49641&goto=lastpost#lastpost">2010-6-17 12:49</a></em>
					<cite>by <a href="space.php?username=nunu">nunu</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_49711" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=49711&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_49711"><a href="viewthread.php?tid=49711&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">留学生失信频发引关注 美国导师拒收中国学生</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=49711&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=49711&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7946">马德毕</a>
										</cite>
					<em>2010-6-16</em>
				</td>
				<td class="nums"><strong>50</strong> / <em>1099</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=49711&goto=lastpost#lastpost">2010-6-17 19:49</a></em>
					<cite>by <a href="space.php?username=inga">inga</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_51401" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=51401&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_51401"><a href="viewthread.php?tid=51401&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">李鹏对北理工70周年校庆表示祝贺</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=51401&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=51401&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3202">glim</a>
										</cite>
					<em>2010-6-30</em>
				</td>
				<td class="nums"><strong>50</strong> / <em>1080</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=51401&goto=lastpost#lastpost">2010-7-2 21:34</a></em>
					<cite>by <a href="space.php?username=Jyamolmiry">Jyamolmiry</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_51812" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=51812&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_51812"><a href="viewthread.php?tid=51812&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">作家余杰遭到警察传唤</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=51812&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=51812&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=12310">炽鸢侯</a>
										</cite>
					<em>2010-7-5</em>
				</td>
				<td class="nums"><strong>50</strong> / <em>1564</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=51812&goto=lastpost#lastpost">2010-7-8 05:43</a></em>
					<cite>by <a href="space.php?username=%CE%F7%C3%C5%B4%B5%C5%A3">西门吹牛</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_54057" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=54057&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_54057"><a href="viewthread.php?tid=54057&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">《巫妖王之怒》通过上海新闻出版局审查</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=54057&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=54057&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4291">badan</a>
										</cite>
					<em>2010-7-27</em>
				</td>
				<td class="nums"><strong>50</strong> / <em>1248</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=54057&goto=lastpost#lastpost">2010-7-29 17:00</a></em>
					<cite>by <a href="space.php?username=lingfeitx">lingfeitx</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_9059" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=9059&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_9059"><a href="viewthread.php?tid=9059&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">南都社论：以人权的名义公开震亡者大名单</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=9059&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=9059&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3996">羊皮鬼</a>
										</cite>
					<em>2009-4-15</em>
				</td>
				<td class="nums"><strong>50</strong> / <em>1076</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=9059&goto=lastpost#lastpost">2009-4-20 15:09</a></em>
					<cite>by <a href="space.php?username=%D5%FD%D4%DA%B5%F4%C2%E4%B5%C4%D6%ED">正在掉落的猪</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_17835" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=17835&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_17835"><a href="viewthread.php?tid=17835&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">连岳：我们的警察，不在抓捕网民，就是在抓捕网民的路上</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=17835&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=17835&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=919">wistreer</a>
										</cite>
					<em>2009-7-25</em>
				</td>
				<td class="nums"><strong>50</strong> / <em>1174</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=17835&goto=lastpost#lastpost">2009-7-28 16:10</a></em>
					<cite>by <a href="space.php?username=numberscis">numberscis</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_17158" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=17158&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_17158"><a href="viewthread.php?tid=17158&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">南都周刊：翻墙，突破各类限制的尝试</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=17158&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=17158&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1886">gjlawyer</a>
										</cite>
					<em>2009-7-18</em>
				</td>
				<td class="nums"><strong>50</strong> / <em>1539</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=17158&goto=lastpost#lastpost">2009-8-2 23:35</a></em>
					<cite>by <a href="space.php?username=%D0%A1%D6%ED%D2%C0%C8%CB">小猪依人</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_18055" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=18055&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_18055"><a href="viewthread.php?tid=18055&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">最高检主任法医师王雪梅就“黄静案”发声！</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=18055&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=18055&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3996">羊皮鬼</a>
										</cite>
					<em>2009-7-28</em>
				</td>
				<td class="nums"><strong>50</strong> / <em>1165</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=18055&goto=lastpost#lastpost">2009-8-3 21:45</a></em>
					<cite>by <a href="space.php?username=numberscis">numberscis</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_18833" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=18833&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_18833"><a href="viewthread.php?tid=18833&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">90后：只要曾哥快乐，宁愿汶川再地震一次</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=18833&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=18833&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3805">何金水</a>
										</cite>
					<em>2009-8-5</em>
				</td>
				<td class="nums"><strong>50</strong> / <em>918</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=18833&goto=lastpost#lastpost">2009-8-9 22:50</a></em>
					<cite>by <a href="space.php?username=hhbcl1414">hhbcl1414</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_20549" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=20549&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_20549"><a href="viewthread.php?tid=20549&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">一周图片新闻 8.24—8.30</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=20549&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=20549&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2232">老杂疫</a>
										</cite>
					<em>2009-8-25</em>
				</td>
				<td class="nums"><strong>50</strong> / <em>1392</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=20549&goto=lastpost#lastpost">2009-8-31 00:18</a></em>
					<cite>by <a href="space.php?username=ghostfj">ghostfj</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_18171" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=18171&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_18171"><a href="viewthread.php?tid=18171&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">摩罗向左转：爱国主义为什么遭到围剿</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3996">羊皮鬼</a>
										</cite>
					<em>2009-7-29</em>
				</td>
				<td class="nums"><strong>49</strong> / <em>811</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=18171&goto=lastpost#lastpost">2009-7-31 22:55</a></em>
					<cite>by <a href="space.php?username=%D1%F2%C6%A4%B9%ED">羊皮鬼</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_19089" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=19089&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_19089"><a href="viewthread.php?tid=19089&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">腾讯网给六十大寿的第一份礼：三年饿死数千万</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3580">白牛</a>
										</cite>
					<em>2009-8-7</em>
				</td>
				<td class="nums"><strong>49</strong> / <em>1666</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=19089&goto=lastpost#lastpost">2009-8-11 09:31</a></em>
					<cite>by <a href="space.php?username=%C2%B7%B1%DF%C9%E7%CC%D8%D4%BC%BC%C7%D5%DF">路边社特约记者</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_19843" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=19843&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_19843"><a href="viewthread.php?tid=19843&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">深度八卦后景帝时代</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4719">咸鱼干</a>
										</cite>
					<em>2009-8-16</em>
				</td>
				<td class="nums"><strong>49</strong> / <em>1572</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=19843&goto=lastpost#lastpost">2009-8-19 11:00</a></em>
					<cite>by <a href="space.php?username=%CE%D2%BC%D2%CD%FA%B2%C6%D3%D0%CF%B2%C1%CB">我家旺财有喜了</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_20386" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=20386&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_20386"><a href="viewthread.php?tid=20386&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">真理部颁布《国庆前互联网舆论的操作细则》</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6734">造谣社泄密员</a>
										</cite>
					<em>2009-8-23</em>
				</td>
				<td class="nums"><strong>49</strong> / <em>1410</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=20386&goto=lastpost#lastpost">2009-8-26 08:28</a></em>
					<cite>by <a href="space.php?username=%BA%A3%B7%E7">海风</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_20318" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=20318&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_20318"><a href="viewthread.php?tid=20318&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">成都军车逆行撞上公交，3死8伤</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5867">宋石男</a>
										</cite>
					<em>2009-8-21</em>
				</td>
				<td class="nums"><strong>49</strong> / <em>1359</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=20318&goto=lastpost#lastpost">2009-8-26 14:22</a></em>
					<cite>by <a href="space.php?username=%C0%CF%BA%FA">老胡</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_21039" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=21039&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_21039"><a href="viewthread.php?tid=21039&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">朝鲜抗议中国媒体纪录片说真话</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1310">小宸宸</a>
										</cite>
					<em>2009-8-31</em>
				</td>
				<td class="nums"><strong>49</strong> / <em>1075</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=21039&goto=lastpost#lastpost">2009-9-3 04:23</a></em>
					<cite>by <a href="space.php?username=%CE%F7%C3%C5%B4%B5%C5%A3">西门吹牛</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_21307" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=21307&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_21307"><a href="viewthread.php?tid=21307&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">利比亚各界群众喜迎卡扎菲独裁统治40周年</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=930">贱人渐智</a>
										</cite>
					<em>2009-9-2</em>
				</td>
				<td class="nums"><strong>49</strong> / <em>902</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=21307&goto=lastpost#lastpost">2009-9-3 21:15</a></em>
					<cite>by <a href="space.php?username=%B0%A2%CE%C4%C7%BF">阿文强</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_21639" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=21639&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_21639"><a href="viewthread.php?tid=21639&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">派薄熙来同志到乌鲁木齐去是可行性的</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6837">amoiist</a>
										</cite>
					<em>2009-9-8</em>
				</td>
				<td class="nums"><strong>49</strong> / <em>1570</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=21639&goto=lastpost#lastpost">2009-9-9 10:26</a></em>
					<cite>by <a href="space.php?username=%B0%D7%D2%B9%D0%D0">白夜行</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_21508" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=21508&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_21508"><a href="viewthread.php?tid=21508&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">各大门户网站实名制正式启动</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4021">alexander982</a>
										</cite>
					<em>2009-9-6</em>
				</td>
				<td class="nums"><strong>49</strong> / <em>1459</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=21508&goto=lastpost#lastpost">2009-9-9 21:12</a></em>
					<cite>by <a href="space.php?username=Jyamolmiry">Jyamolmiry</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_22691" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=22691&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_22691"><a href="viewthread.php?tid=22691&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">日本共同社记者在京采访遭殴</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2789">RFI曹国星</a>
										</cite>
					<em>2009-9-19</em>
				</td>
				<td class="nums"><strong>49</strong> / <em>1545</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=22691&goto=lastpost#lastpost">2009-9-21 09:04</a></em>
					<cite>by <a href="space.php?username=huanglei1983">huanglei1983</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_24340" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=24340&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_24340"><a href="viewthread.php?tid=24340&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">《争鸣》杂志预测十八大：储君部分接班 胡预谋监国</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8301">lqunl</a>
										</cite>
					<em>2009-10-5</em>
				</td>
				<td class="nums"><strong>49</strong> / <em>1872</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=24340&goto=lastpost#lastpost">2009-10-13 13:05</a></em>
					<cite>by <a href="space.php?username=boboxia">boboxia</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_42568" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=42568&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_42568"><a href="viewthread.php?tid=42568&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">美国智库称中国普选还需等两代人</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8301">lqunl</a>
										</cite>
					<em>2010-4-8</em>
				</td>
				<td class="nums"><strong>49</strong> / <em>1030</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=42568&goto=lastpost#lastpost">2010-4-11 20:59</a></em>
					<cite>by <a href="space.php?username=dadaomsb">dadaomsb</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_42825" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=42825&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_42825"><a href="viewthread.php?tid=42825&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">胡佳疑患肝癌 曾金燕申请保外就医</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=10069">orangeking</a>
										</cite>
					<em>2010-4-8</em>
				</td>
				<td class="nums"><strong>49</strong> / <em>1021</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=42825&goto=lastpost#lastpost">2010-4-12 16:27</a></em>
					<cite>by <a href="space.php?username=beijingppl">beijingppl</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_43033" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=43033&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_43033"><a href="viewthread.php?tid=43033&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">湖北当阳市公安局被炸</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5494">肉の包包</a>
										</cite>
					<em>2010-4-14</em>
				</td>
				<td class="nums"><strong>49</strong> / <em>1355</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=43033&goto=lastpost#lastpost">2010-4-15 21:29</a></em>
					<cite>by <a href="space.php?username=symart">symart</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_43531" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=43531&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_43531"><a href="viewthread.php?tid=43531&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">汤唯被封杀仍未完全解禁</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=9514">nomura123</a>
										</cite>
					<em>2010-4-19</em>
				</td>
				<td class="nums"><strong>49</strong> / <em>1853</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=43531&goto=lastpost#lastpost">2010-4-23 15:46</a></em>
					<cite>by <a href="space.php?username=%B9%DB%C6%E5%B2%BB%D3%EF">观棋不语</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_44320" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=44320&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																					<img src="images/default/digest_1.gif" alt="火星帖 1" />
										 </label>
																				<span id="thread_44320"><a href="viewthread.php?tid=44320&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传，大批《南方周末》资深记者集体辞职</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2495">深入裙中</a>
										</cite>
					<em>2010-4-28</em>
				</td>
				<td class="nums"><strong>49</strong> / <em>2014</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=44320&goto=lastpost#lastpost">2010-4-29 18:24</a></em>
					<cite>by <a href="space.php?username=%CC%C6%BB%F6%BB%F6">唐祸祸</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_45628" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=45628&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_45628"><a href="viewthread.php?tid=45628&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">真理部最新指令：正确报道“陕西杀童案”</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=21">大仙儿</a>
										</cite>
					<em>2010-5-12</em>
				</td>
				<td class="nums"><strong>49</strong> / <em>1886</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=45628&goto=lastpost#lastpost">2010-5-13 11:04</a></em>
					<cite>by <a href="space.php?username=aqxxg">aqxxg</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_46612" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=46612&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_46612"><a href="viewthread.php?tid=46612&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">温家宝在西安交大坐过座位被陈列展出</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8800">qusibaichi</a>
										</cite>
					<em>2010-5-21</em>
				</td>
				<td class="nums"><strong>49</strong> / <em>851</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=46612&goto=lastpost#lastpost">2010-5-22 17:54</a></em>
					<cite>by <a href="space.php?username=%B5%DA%D2%BB%B5%CE%D1%AA">第一滴血</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_32575" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=32575&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_32575"><a href="viewthread.php?tid=32575&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">离休将领的产权房面临强拆</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=11326">flld</a>
										</cite>
					<em>2009-12-26</em>
				</td>
				<td class="nums"><strong>49</strong> / <em>904</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=32575&goto=lastpost#lastpost">2010-1-1 10:55</a></em>
					<cite>by <a href="space.php?username=%CE%D2%D2%AA%B5%CD%CB%D7%C8%A8">我要低俗权</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_34597" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=34597&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_34597"><a href="viewthread.php?tid=34597&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">中国毕业生向耶鲁大学捐款888万8888美元</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4570">我卖糕的</a>
										</cite>
					<em>2010-1-9</em>
				</td>
				<td class="nums"><strong>49</strong> / <em>1535</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=34597&goto=lastpost#lastpost">2010-1-13 22:54</a></em>
					<cite>by <a href="space.php?username=%C0%E4%B1%F8%C6%F7">冷兵器</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_34724" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=34724&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_34724"><a href="viewthread.php?tid=34724&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">外交部回应Google退出中国：中国的互联网是开放的</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8301">lqunl</a>
										</cite>
					<em>2010-1-14</em>
				</td>
				<td class="nums"><strong>49</strong> / <em>1248</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=34724&goto=lastpost#lastpost">2010-1-16 22:18</a></em>
					<cite>by <a href="space.php?username=boboxia">boboxia</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_36281" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=36281&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_36281"><a href="viewthread.php?tid=36281&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">广州规定2/3住户同意可强拆</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=11159">一九八五</a>
										</cite>
					<em>2010-1-29</em>
				</td>
				<td class="nums"><strong>49</strong> / <em>585</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=36281&goto=lastpost#lastpost">2010-1-31 19:10</a></em>
					<cite>by <a href="space.php?username=%B7%CF%D6%D6%B6%B9%F4%F9">废种豆豉</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_27388" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=27388&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_27388"><a href="viewthread.php?tid=27388&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">见到洛阳“太祖仰卧石”李讷公主小声道：“像，真像！”</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8638">dark</a>
										</cite>
					<em>2009-11-7</em>
				</td>
				<td class="nums"><strong>49</strong> / <em>1730</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=27388&goto=lastpost#lastpost">2009-11-15 00:29</a></em>
					<cite>by <a href="space.php?username=%CE%F7%C3%C5%B4%B5%C5%A3">西门吹牛</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_27920" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=27920&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_27920"><a href="viewthread.php?tid=27920&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">影帝赴河北暴雪地区考察</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5978">散光</a>
										</cite>
					<em>2009-11-13</em>
				</td>
				<td class="nums"><strong>49</strong> / <em>811</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=27920&goto=lastpost#lastpost">2009-11-17 20:20</a></em>
					<cite>by <a href="space.php?username=%CD%E1%CD%E1">歪歪</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_30162" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=30162&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_30162"><a href="viewthread.php?tid=30162&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">中央决定王鸿举不再任重庆市长 黄奇帆为候选人</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2344">junhe</a>
										</cite>
					<em>2009-11-30</em>
				</td>
				<td class="nums"><strong>49</strong> / <em>1581</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=30162&goto=lastpost#lastpost">2009-12-7 11:10</a></em>
					<cite>by <a href="space.php?username=%D0%A1%B2%D9">小操</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_3217" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=3217&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_3217"><a href="viewthread.php?tid=3217&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">这就是咱中国：一年一度春节大迁徙</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7">张书记</a>
										</cite>
					<em>2009-1-12</em>
				</td>
				<td class="nums"><strong>49</strong> / <em>648</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=3217&goto=lastpost#lastpost">2009-1-21 01:07</a></em>
					<cite>by <a href="space.php?username=vodkaorlsd">vodkaorlsd</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_4771" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=4771&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_4771"><a href="viewthread.php?tid=4771&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">韩寒的末日</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=971">sus</a>
										</cite>
					<em>2009-2-13</em>
				</td>
				<td class="nums"><strong>49</strong> / <em>1864</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=4771&goto=lastpost#lastpost">2009-2-17 10:19</a></em>
					<cite>by <a href="space.php?username=%D2%BB%D0%A1%B4%E9%D2%F5%C3%AB">一小撮阴毛</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_5320" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=5320&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_5320"><a href="viewthread.php?tid=5320&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">详实的“躲猫猫”调查报告</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=169">抑扬</a>
										</cite>
					<em>2009-2-20</em>
				</td>
				<td class="nums"><strong>49</strong> / <em>936</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=5320&goto=lastpost#lastpost">2009-2-25 14:27</a></em>
					<cite>by <a href="space.php?username=%D5%FD%D4%DA%B5%F4%C2%E4%B5%C4%D6%ED">正在掉落的猪</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_5761" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=5761&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_5761"><a href="viewthread.php?tid=5761&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">监察局李主任的猜想题：大家扒一下是哪个企业？</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3238">jiaxin</a>
										</cite>
					<em>2009-2-26</em>
				</td>
				<td class="nums"><strong>49</strong> / <em>1138</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=5761&goto=lastpost#lastpost">2009-2-28 14:51</a></em>
					<cite>by <a href="space.php?username=wojiushinierday">wojiushinierday</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_59078" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=59078&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_59078"><a href="viewthread.php?tid=59078&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传解放军在长兴岛船厂开工建6艘航母</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4570">我卖糕的</a>
										</cite>
					<em>2010-9-21</em>
				</td>
				<td class="nums"><strong>49</strong> / <em>1288</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=59078&goto=lastpost#lastpost">2010-9-26 09:45</a></em>
					<cite>by <a href="space.php?username=%C9%D0%C9%C6%C8%F4%CB%AE">尚善若水</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_13619" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=13619&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_13619"><a href="viewthread.php?tid=13619&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">轮到你拦不住我了</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3156">helleon</a>
										</cite>
					<em>2009-6-14</em>
				</td>
				<td class="nums"><strong>49</strong> / <em>1021</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=13619&goto=lastpost#lastpost">2009-6-16 12:38</a></em>
					<cite>by <a href="space.php?username=%BD%F0%C1%EA%B2%BC%D2%C2">金陵布衣</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_13708" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=13708&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_13708"><a href="viewthread.php?tid=13708&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">关于“影帝”的</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5037">julyice205</a>
										</cite>
					<em>2009-6-15</em>
				</td>
				<td class="nums"><strong>49</strong> / <em>1935</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=13708&goto=lastpost#lastpost">2009-6-21 21:33</a></em>
					<cite>by <a href="space.php?username=nowave">nowave</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_14458" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=14458&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_14458"><a href="viewthread.php?tid=14458&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">大片预告：今晚书法家新宇将与您进行亲密交流</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2971">luckyray</a>
										</cite>
					<em>2009-6-22</em>
				</td>
				<td class="nums"><strong>49</strong> / <em>1152</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=14458&goto=lastpost#lastpost">2009-6-25 12:36</a></em>
					<cite>by <a href="space.php?username=louy0427">louy0427</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_16182" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=16182&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_16182"><a href="viewthread.php?tid=16182&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">《人民日报》记者遭上百人埋伏袭击</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3339">机器猫阿福</a>
										</cite>
					<em>2009-7-8</em>
				</td>
				<td class="nums"><strong>49</strong> / <em>1129</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=16182&goto=lastpost#lastpost">2009-7-9 15:42</a></em>
					<cite>by <a href="space.php?username=nustbobo">nustbobo</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_16323" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=16323&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_16323"><a href="viewthread.php?tid=16323&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">热比娅在某电视台的讲话就一定是造假吗？</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3969">langhua9527</a>
										</cite>
					<em>2009-7-9</em>
				</td>
				<td class="nums"><strong>49</strong> / <em>918</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=16323&goto=lastpost#lastpost">2009-7-10 16:44</a></em>
					<cite>by <a href="space.php?username=%B6%A1%B6%A1">丁丁</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_16020" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=16020&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_16020"><a href="viewthread.php?tid=16020&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">请对他们说一句“yahximusiz”</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=9">鬼涧愁</a>
										</cite>
					<em>2009-7-7</em>
				</td>
				<td class="nums"><strong>49</strong> / <em>2119</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=16020&goto=lastpost#lastpost">2009-7-10 22:02</a></em>
					<cite>by <a href="space.php?username=A.K.">A.K.</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_8272" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=8272&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_8272"><a href="viewthread.php?tid=8272&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">百度搜索 吕加平宋祖英看看会发现什么？</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4085">黑执事</a>
										</cite>
					<em>2009-4-1</em>
				</td>
				<td class="nums"><strong>49</strong> / <em>2602</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=8272&goto=lastpost#lastpost">2009-7-13 15:06</a></em>
					<cite>by <a href="space.php?username=wise8002">wise8002</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_16923" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=16923&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_16923"><a href="viewthread.php?tid=16923&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">沈阳“红卫兵”婚礼</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1121">小荷1120</a>
										</cite>
					<em>2009-7-12</em>
				</td>
				<td class="nums"><strong>49</strong> / <em>1035</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=16923&goto=lastpost#lastpost">2009-7-16 17:27</a></em>
					<cite>by <a href="space.php?username=ye1226">ye1226</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_16654" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=16654&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_16654"><a href="viewthread.php?tid=16654&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">真理部要把太阳也管起来</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2744">王小西</a>
										</cite>
					<em>2009-7-13</em>
				</td>
				<td class="nums"><strong>49</strong> / <em>1175</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=16654&goto=lastpost#lastpost">2009-7-20 18:10</a></em>
					<cite>by <a href="space.php?username=%C3%D7%CE%F7%C3%D7%CE%F7">米西米西</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_47542" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=47542&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_47542"><a href="viewthread.php?tid=47542&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">精神病院未经警方同意不得收治正常人</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3194">zhangqian1896</a>
										</cite>
					<em>2010-5-28</em>
				</td>
				<td class="nums"><strong>49</strong> / <em>651</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=47542&goto=lastpost#lastpost">2010-5-29 10:55</a></em>
					<cite>by <a href="space.php?username=ChrisDempsey">ChrisDempsey</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_48509" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=48509&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_48509"><a href="viewthread.php?tid=48509&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传有学生因扰乱高考考场秩序被抓</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3969">langhua9527</a>
										</cite>
					<em>2010-6-7</em>
				</td>
				<td class="nums"><strong>49</strong> / <em>1845</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=48509&goto=lastpost#lastpost">2010-6-9 10:17</a></em>
					<cite>by <a href="space.php?username=%CD%CA%C9%ABFADEAWAY">褪色FADEAWAY</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_50031" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=50031&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_50031"><a href="viewthread.php?tid=50031&amp;extra=page%3D25%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">四川德阳一考生考场内自慰受到处分</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1408">becom</a>
										</cite>
					<em>2010-6-19</em>
				</td>
				<td class="nums"><strong>49</strong> / <em>2118</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=50031&goto=lastpost#lastpost">2010-6-20 18:51</a></em>
					<cite>by <a href="space.php?username=2s903">2s903</a></cite>
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
	<div class="pages"><em>&nbsp;22278&nbsp;</em><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=1" class="first">1 ...</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=24" class="prev">&lsaquo;&lsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=23">23</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=24">24</a><strong>25</strong><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=26">26</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=27">27</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=28">28</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=29">29</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=30">30</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=31">31</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=32">32</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=26" class="next">&rsaquo;&rsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=349" class="last">... 349</a><kbd><input type="text" name="custompage" size="3" onkeydown="if(event.keyCode==13) {window.location='forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page='+this.value; return false;}" /></kbd></div>	</div>

  
	<div class="box">
			<span class="headactions"><a href="forumdisplay.php?fid=2&amp;page=25&amp;showoldetails=yes#online" class="nobdr"><img src="images/default/collapsed_yes.gif" alt="" /></a></span>
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
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
			window.location = 'forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&page=32';
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
<div class="pages"><em>&nbsp;22278&nbsp;</em><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=1" class="first">1 ...</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=32" class="prev">&lsaquo;&lsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=31">31</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=32">32</a><strong>33</strong><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=34">34</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=35">35</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=36">36</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=37">37</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=38">38</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=39">39</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=40">40</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=34" class="next">&rsaquo;&rsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=349" class="last">... 349</a><kbd><input type="text" name="custompage" size="3" onkeydown="if(event.keyCode==13) {window.location='forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page='+this.value; return false;}" /></kbd></div></div>

<div style="float:left;border:1px solid #CCC; border-bottom:none;;width:218px; background: url(/imgs/1984radio.jpg) 200px 2px no-repeat;padding:5px 0 5px 12px;margin:0px 0 0 13px">

<p><b><a href="/radio/index.php" target="_blank">1984FM</a></b><br /><b><a href="https://voxli.com/1984bbs" target="_blank">1984Chat</a></b>&nbsp;</p> 
</div>

<div style="clear:both;height:0px;width:100%;font-size:1px;">&nbsp;</div>

	<ul class="popupmenu_popup newspecialmenu" id="newspecial_menu" style="display: none">
		<li><a href="post.php?action=newthread&amp;fid=2&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">发新话题</a></li>		<li class="poll"><a href="post.php?action=newthread&amp;fid=2&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;special=1">发布投票</a></li>													</ul>
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

					<tbody id="normalthread_12732" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=12732&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_12732"><a href="viewthread.php?tid=12732&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">2009年6月4日，天安门广场游记</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3081">Koney</a>
										</cite>
					<em>2009-6-5</em>
				</td>
				<td class="nums"><strong>43</strong> / <em>1086</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=12732&goto=lastpost#lastpost">2009-6-6 15:44</a></em>
					<cite>by <a href="space.php?username=%C2%B7%B1%DF%CE%A7%B9%DB">路边围观</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_3252" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=3252&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_3252"><a href="viewthread.php?tid=3252&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">牛博被迫关闭 反CNN爱国网友对诗连夜庆贺</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1995">果冻猪</a>
										</cite>
					<em>2009-1-13</em>
				</td>
				<td class="nums"><strong>43</strong> / <em>677</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=3252&goto=lastpost#lastpost">2009-1-15 13:59</a></em>
					<cite>by <a href="space.php?username=%B9%FE%C0%BC">哈兰</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_4282" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=4282&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_4282"><a href="viewthread.php?tid=4282&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">深度八卦：北京网管办的副处长是个什么样的东西？</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2084">小康元年</a>
										</cite>
					<em>2009-1-22</em>
				</td>
				<td class="nums"><strong>43</strong> / <em>705</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=4282&goto=lastpost#lastpost">2009-2-5 14:03</a></em>
					<cite>by <a href="space.php?username=jaec">jaec</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_4103" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=4103&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_4103"><a href="viewthread.php?tid=4103&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">快讯：牛博国际被和谐</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1886">gjlawyer</a>
										</cite>
					<em>2009-2-1</em>
				</td>
				<td class="nums"><strong>42</strong> / <em>601</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=4103&goto=lastpost#lastpost">2009-2-4 11:17</a></em>
					<cite>by <a href="space.php?username=Chery">Chery</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_5325" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=5325&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_5325"><a href="viewthread.php?tid=5325&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传，冯导和凤凰女主持人背着徐帆折腾了一宿……</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1258">路边社记者</a>
										</cite>
					<em>2009-2-21</em>
				</td>
				<td class="nums"><strong>42</strong> / <em>1201</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=5325&goto=lastpost#lastpost">2009-2-23 22:52</a></em>
					<cite>by <a href="space.php?username=%D2%BB%B5%E3%CE%E5">一点五</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_15602" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=15602&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_15602"><a href="viewthread.php?tid=15602&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">昨晚上海城管出事了</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=214">veroniquexu</a>
										</cite>
					<em>2009-6-30</em>
				</td>
				<td class="nums"><strong>42</strong> / <em>1383</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=15602&goto=lastpost#lastpost">2009-7-2 11:31</a></em>
					<cite>by <a href="space.php?username=%D0%A1%E5%B7%E5%B7">小宸宸</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_16500" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=16500&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_16500"><a href="viewthread.php?tid=16500&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">解放军“电脑毒王” 一“毒”胜千军</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1121">小荷1120</a>
										</cite>
					<em>2009-7-11</em>
				</td>
				<td class="nums"><strong>42</strong> / <em>1059</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=16500&goto=lastpost#lastpost">2009-7-14 12:46</a></em>
					<cite>by <a href="space.php?username=satanla">satanla</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_17015" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=17015&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_17015"><a href="viewthread.php?tid=17015&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">《环球时报》：九成网友赞成中国推“反骚乱法”</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1413">马克西</a>
										</cite>
					<em>2009-7-17</em>
				</td>
				<td class="nums"><strong>42</strong> / <em>648</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=17015&goto=lastpost#lastpost">2009-7-18 06:58</a></em>
					<cite>by <a href="space.php?username=%C0%CF%BA%FA">老胡</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_22532" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=22532&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_22532"><a href="viewthread.php?tid=22532&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">文汇报：幸好香港没普选</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1686">奧斯卡金</a>
										</cite>
					<em>2009-9-17</em>
				</td>
				<td class="nums"><strong>42</strong> / <em>1274</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=22532&goto=lastpost#lastpost">2009-9-19 13:51</a></em>
					<cite>by <a href="space.php?username=%C0%B0%D4%C2%D8%A5%B0%CB">腊月廿八</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_22833" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=22833&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_22833"><a href="viewthread.php?tid=22833&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">刘翔希望老佛爷向世界宣战</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=134">丁丁</a>
										</cite>
					<em>2009-9-20</em>
				</td>
				<td class="nums"><strong>42</strong> / <em>1151</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=22833&goto=lastpost#lastpost">2009-9-22 12:56</a></em>
					<cite>by <a href="space.php?username=zuoshoucp">zuoshoucp</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_23777" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=23777&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_23777"><a href="viewthread.php?tid=23777&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">我统战系统在香港招募国庆游街临时工</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1770">nustbobo</a>
										</cite>
					<em>2009-9-25</em>
				</td>
				<td class="nums"><strong>42</strong> / <em>1552</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=23777&goto=lastpost#lastpost">2009-9-29 13:44</a></em>
					<cite>by <a href="space.php?username=%83%D3%B6%FE">冇二</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_23064" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=23064&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_23064"><a href="viewthread.php?tid=23064&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">高丽国饥荒加剧</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4570">我卖糕的</a>
										</cite>
					<em>2009-9-22</em>
				</td>
				<td class="nums"><strong>42</strong> / <em>1152</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=23064&goto=lastpost#lastpost">2009-9-29 15:55</a></em>
					<cite>by <a href="space.php?username=mojojo">mojojo</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_24465" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=24465&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_24465"><a href="viewthread.php?tid=24465&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">中国的自由派不怕绿坝——《中国猛博》出版</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1686">奧斯卡金</a>
										</cite>
					<em>2009-10-7</em>
				</td>
				<td class="nums"><strong>42</strong> / <em>2079</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=24465&goto=lastpost#lastpost">2009-10-10 12:21</a></em>
					<cite>by <a href="space.php?username=%BF%DD%CC%D9%C0%CF%CA%F7">枯藤老树</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_24733" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=24733&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_24733"><a href="viewthread.php?tid=24733&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">持批评观点的中国作家处境堪忧</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7002">luugoo</a>
										</cite>
					<em>2009-10-11</em>
				</td>
				<td class="nums"><strong>42</strong> / <em>753</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=24733&goto=lastpost#lastpost">2009-10-12 07:23</a></em>
					<cite>by <a href="space.php?username=%B1%DF%D4%B5%B9%B9%BC%FE">边缘构件</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_25179" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=25179&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_25179"><a href="viewthread.php?tid=25179&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">江Core专著再遭三折抛售</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8301">lqunl</a>
										</cite>
					<em>2009-10-15</em>
				</td>
				<td class="nums"><strong>42</strong> / <em>964</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=25179&goto=lastpost#lastpost">2009-10-16 12:18</a></em>
					<cite>by <a href="space.php?username=%B5%A5%CA%D6%B7%F6%C7%BD">单手扶墙</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_10302" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=10302&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_10302"><a href="viewthread.php?tid=10302&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">龙配龙，凤配凤，天朝公仆配婢女</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=163">71152689</a>
										</cite>
					<em>2009-5-5</em>
				</td>
				<td class="nums"><strong>42</strong> / <em>1735</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=10302&goto=lastpost#lastpost">2009-10-20 19:10</a></em>
					<cite>by <a href="space.php?username=%C3%C9%C9%AF">蒙莎</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_25699" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=25699&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_25699"><a href="viewthread.php?tid=25699&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">呼和浩特第二监狱四名越狱囚犯被击毙1名、抓获3名</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=9214">英雄贵姓</a>
										</cite>
					<em>2009-10-20</em>
				</td>
				<td class="nums"><strong>42</strong> / <em>732</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=25699&goto=lastpost#lastpost">2009-10-22 16:33</a></em>
					<cite>by <a href="space.php?username=%C4%D6%C1%CB%B8%F6%D4%CB">闹了个运</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_17485" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=17485&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_17485"><a href="viewthread.php?tid=17485&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">法院工作人员：身体发胖是因为其在看守所中的生活比较有规律</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3805">何金水</a>
										</cite>
					<em>2009-7-22</em>
				</td>
				<td class="nums"><strong>42</strong> / <em>832</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=17485&goto=lastpost#lastpost">2009-7-23 23:17</a></em>
					<cite>by <a href="space.php?username=Candice">Candice</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_17093" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=17093&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_17093"><a href="viewthread.php?tid=17093&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">空前壮观的《建国大业》演员表</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3575">雷子</a>
										</cite>
					<em>2009-7-18</em>
				</td>
				<td class="nums"><strong>42</strong> / <em>1133</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=17093&goto=lastpost#lastpost">2009-7-29 08:05</a></em>
					<cite>by <a href="space.php?username=xuebowee">xuebowee</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_18043" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=18043&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_18043"><a href="viewthread.php?tid=18043&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">热大妈有去任何地方的自由</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5306">江小婷</a>
										</cite>
					<em>2009-7-28</em>
				</td>
				<td class="nums"><strong>42</strong> / <em>663</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=18043&goto=lastpost#lastpost">2009-7-31 23:07</a></em>
					<cite>by <a href="space.php?username=Kakulupia">Kakulupia</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_18270" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=18270&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_18270"><a href="viewthread.php?tid=18270&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">太皇太后晚年借钱捐款</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7919">路边社门卫</a>
										</cite>
					<em>2009-7-30</em>
				</td>
				<td class="nums"><strong>42</strong> / <em>1155</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=18270&goto=lastpost#lastpost">2009-8-3 17:56</a></em>
					<cite>by <a href="space.php?username=%B2%E8%C9%AB%B2%A3%C1%A7">茶色玻璃</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_19414" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=19414&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_19414"><a href="viewthread.php?tid=19414&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">太上皇近日巡察 击破住院谣言</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2393">蚊驱</a>
										</cite>
					<em>2009-8-11</em>
				</td>
				<td class="nums"><strong>42</strong> / <em>1360</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=19414&goto=lastpost#lastpost">2009-8-15 16:19</a></em>
					<cite>by <a href="space.php?username=%BE%C8%CA%EA%B5%C4%C2%C3%B3%CC">救赎的旅程</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_19760" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=19760&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_19760"><a href="viewthread.php?tid=19760&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">台湾老百姓：不可能腐败</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5823">康波</a>
										</cite>
					<em>2009-8-15</em>
				</td>
				<td class="nums"><strong>42</strong> / <em>661</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=19760&goto=lastpost#lastpost">2009-8-17 09:33</a></em>
					<cite>by <a href="space.php?username=sixapostle">sixapostle</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_20029" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=20029&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_20029"><a href="viewthread.php?tid=20029&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">反法美女艺术家归国后觉醒</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2315">写实</a>
										</cite>
					<em>2009-8-18</em>
				</td>
				<td class="nums"><strong>42</strong> / <em>1087</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=20029&goto=lastpost#lastpost">2009-8-19 20:02</a></em>
					<cite>by <a href="space.php?username=%D0%B4%CA%B5">写实</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_20166" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=20166&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_20166"><a href="viewthread.php?tid=20166&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">天朝举人秀才衙役庶民等500人演绎新版公车上书</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=930">贱人渐智</a>
										</cite>
					<em>2009-8-19</em>
				</td>
				<td class="nums"><strong>42</strong> / <em>780</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=20166&goto=lastpost#lastpost">2009-8-20 13:52</a></em>
					<cite>by <a href="space.php?username=%B7%A8%BF%CB%88%98">法克垬</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_16673" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=16673&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_16673"><a href="viewthread.php?tid=16673&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">南方人物周刊：秦刚的“四两”拨得动“千斤”吗？</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7102">prague1982</a>
										</cite>
					<em>2009-7-13</em>
				</td>
				<td class="nums"><strong>42</strong> / <em>1352</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=16673&goto=lastpost#lastpost">2009-9-3 03:53</a></em>
					<cite>by <a href="space.php?username=%CE%F7%C3%C5%B4%B5%C5%A3">西门吹牛</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_21415" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=21415&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_21415"><a href="viewthread.php?tid=21415&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传，四中全会将着力党内民主</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6314">hhbcl1414</a>
										</cite>
					<em>2009-9-5</em>
				</td>
				<td class="nums"><strong>42</strong> / <em>907</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=21415&goto=lastpost#lastpost">2009-9-6 00:44</a></em>
					<cite>by <a href="space.php?username=alexw">alexw</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_33300" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=33300&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_33300"><a href="viewthread.php?tid=33300&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">北京教授萧瀚遭政治停职</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=11326">flld</a>
										</cite>
					<em>2010-1-2</em>
				</td>
				<td class="nums"><strong>42</strong> / <em>1570</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=33300&goto=lastpost#lastpost">2010-1-5 19:52</a></em>
					<cite>by <a href="space.php?username=%D3%D0%C7%AE%BE%CD%D2%C6%C3%F1">有钱就移民</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_33345" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=33345&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_33345"><a href="viewthread.php?tid=33345&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">北京科技大学一女生在校外被杀</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=10685">qq800as</a>
										</cite>
					<em>2010-1-2</em>
				</td>
				<td class="nums"><strong>42</strong> / <em>1433</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=33345&goto=lastpost#lastpost">2010-1-7 22:14</a></em>
					<cite>by <a href="space.php?username=zhangdsh">zhangdsh</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_35264" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=35264&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_35264"><a href="viewthread.php?tid=35264&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">党媒批百度越扫越黄</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7111">feng200186</a>
										</cite>
					<em>2010-1-19</em>
				</td>
				<td class="nums"><strong>42</strong> / <em>1365</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=35264&goto=lastpost#lastpost">2010-1-20 13:00</a></em>
					<cite>by <a href="space.php?username=YOYO">YOYO</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_35080" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=35080&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_35080"><a href="viewthread.php?tid=35080&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">一周图片新闻 2010.1.18-1.24</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2232">老杂疫</a>
										</cite>
					<em>2010-1-17</em>
				</td>
				<td class="nums"><strong>42</strong> / <em>994</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=35080&goto=lastpost#lastpost">2010-1-23 14:37</a></em>
					<cite>by <a href="space.php?username=fscrazymouse">fscrazymouse</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_35614" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=35614&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_35614"><a href="viewthread.php?tid=35614&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">美国斥巨资扶持“网络汉奸”渗透中国互联网</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=11911">kobezhangchina</a>
										</cite>
					<em>2010-1-22</em>
				</td>
				<td class="nums"><strong>42</strong> / <em>1154</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=35614&goto=lastpost#lastpost">2010-1-25 22:45</a></em>
					<cite>by <a href="space.php?username=%BD%AD%C4%CF%B5%C4%D3%EA%BC%BE">江南的雨季</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_35190" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=35190&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_35190"><a href="viewthread.php?tid=35190&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">昆明官渡一中11男围殴1女生</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3969">langhua9527</a>
										</cite>
					<em>2010-1-18</em>
				</td>
				<td class="nums"><strong>42</strong> / <em>1084</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=35190&goto=lastpost#lastpost">2010-1-28 21:17</a></em>
					<cite>by <a href="space.php?username=%D4%D9%CA%C0%B9%D8%D3%F0">再世关羽</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_37200" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=37200&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_37200"><a href="viewthread.php?tid=37200&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">外交部部长杨洁篪：中国百姓了解到的新闻比西方媒体还全面</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3202">glim</a>
										</cite>
					<em>2010-2-8</em>
				</td>
				<td class="nums"><strong>42</strong> / <em>857</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=37200&goto=lastpost#lastpost">2010-2-10 15:45</a></em>
					<cite>by <a href="space.php?username=%C1%FA%B7%C9">龙飞</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_38895" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=38895&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_38895"><a href="viewthread.php?tid=38895&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">新闻出版总署副署长：网络记者是非法职业</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=9924">吉四六</a>
										</cite>
					<em>2010-3-2</em>
				</td>
				<td class="nums"><strong>42</strong> / <em>1032</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=38895&goto=lastpost#lastpost">2010-3-5 17:54</a></em>
					<cite>by <a href="space.php?username=%D4%AA%C4%A9%C7%E5%B3%F5">元末清初</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_39145" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=39145&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_39145"><a href="viewthread.php?tid=39145&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">新浪微博一女生及其家人因惹高官亲戚直播被杀</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=12494">晨光</a>
										</cite>
					<em>2010-3-4</em>
				</td>
				<td class="nums"><strong>42</strong> / <em>2130</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=39145&goto=lastpost#lastpost">2010-3-5 20:25</a></em>
					<cite>by <a href="space.php?username=%D6%F1%B1%BE%CE%DE%D0%C4">竹本无心</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_39288" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=39288&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_39288"><a href="viewthread.php?tid=39288&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">冯小宁：中国是唯一没有被美国大片压垮的电影大国</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3202">glim</a>
										</cite>
					<em>2010-3-5</em>
				</td>
				<td class="nums"><strong>42</strong> / <em>736</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=39288&goto=lastpost#lastpost">2010-3-7 10:25</a></em>
					<cite>by <a href="space.php?username=%C8%CB%C3%F1%C8%BA%D6%DA">人民群众</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_39322" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=39322&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_39322"><a href="viewthread.php?tid=39322&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">重庆人大代表沈长富建议给所有手机电脑装监控软件</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7919">路边社门卫</a>
										</cite>
					<em>2010-3-5</em>
				</td>
				<td class="nums"><strong>42</strong> / <em>778</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=39322&goto=lastpost#lastpost">2010-3-8 05:07</a></em>
					<cite>by <a href="space.php?username=bester">bester</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_27944" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=27944&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_27944"><a href="viewthread.php?tid=27944&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">钓鱼案受害者张晖收到恐吓信</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8643">nikon</a>
										</cite>
					<em>2009-11-12</em>
				</td>
				<td class="nums"><strong>42</strong> / <em>733</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=27944&goto=lastpost#lastpost">2009-11-14 22:00</a></em>
					<cite>by <a href="space.php?username=%CE%F7%C3%C5%B4%B5%C5%A3">西门吹牛</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_27925" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=27925&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_27925"><a href="viewthread.php?tid=27925&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">满文军首谈牢狱生活：最开心的是看《新闻联播》</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7919">路边社门卫</a>
										</cite>
					<em>2009-11-13</em>
				</td>
				<td class="nums"><strong>42</strong> / <em>900</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=27925&goto=lastpost#lastpost">2009-11-18 09:27</a></em>
					<cite>by <a href="space.php?username=cityglass">cityglass</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_28218" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=28218&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_28218"><a href="viewthread.php?tid=28218&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">一周图片新闻 11.16-11.22</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2232">老杂疫</a>
										</cite>
					<em>2009-11-16</em>
				</td>
				<td class="nums"><strong>42</strong> / <em>1144</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=28218&goto=lastpost#lastpost">2009-11-22 12:09</a></em>
					<cite>by <a href="space.php?username=albert0707">albert0707</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_29735" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=29735&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_29735"><a href="viewthread.php?tid=29735&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">新一轮筑墙工作即将展开</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7">张书记</a>
										</cite>
					<em>2009-12-3</em>
				</td>
				<td class="nums"><strong>42</strong> / <em>1080</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=29735&goto=lastpost#lastpost">2009-12-5 10:26</a></em>
					<cite>by <a href="space.php?username=nkskyshn">nkskyshn</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_29685" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=29685&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_29685"><a href="viewthread.php?tid=29685&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">广州“小姐”集体发誓：谁不用套就不和他做！</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=9991">duck_1984</a>
										</cite>
					<em>2009-12-2</em>
				</td>
				<td class="nums"><strong>42</strong> / <em>1250</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=29685&goto=lastpost#lastpost">2009-12-6 23:37</a></em>
					<cite>by <a href="space.php?username=skyking0752">skyking0752</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_31249" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=31249&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_31249"><a href="viewthread.php?tid=31249&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">真理部最新指令：广州番禺放射源事件禁止报道</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5759">路边社刊要</a>
										</cite>
					<em>2009-12-15</em>
				</td>
				<td class="nums"><strong>42</strong> / <em>1121</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=31249&goto=lastpost#lastpost">2009-12-16 20:09</a></em>
					<cite>by <a href="space.php?username=toms1023">toms1023</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_31765" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=31765&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_31765"><a href="viewthread.php?tid=31765&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">央视网“爱西柚”和“爱布谷”视频产品上线</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=10241">orange0422</a>
										</cite>
					<em>2009-12-9</em>
				</td>
				<td class="nums"><strong>42</strong> / <em>1486</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=31765&goto=lastpost#lastpost">2009-12-20 03:18</a></em>
					<cite>by <a href="space.php?username=chandler0819">chandler0819</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_31434" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=31434&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_31434"><a href="viewthread.php?tid=31434&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">烟台暴发大规模退伍军人抗议行动</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4231">dangqu</a>
										</cite>
					<em>2009-12-17</em>
				</td>
				<td class="nums"><strong>42</strong> / <em>1630</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=31434&goto=lastpost#lastpost">2009-12-23 20:47</a></em>
					<cite>by <a href="space.php?username=xiong13">xiong13</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_32215" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=32215&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_32215"><a href="viewthread.php?tid=32215&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">风水在北大是科学</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2202">ccjing123</a>
										</cite>
					<em>2009-12-23</em>
				</td>
				<td class="nums"><strong>42</strong> / <em>766</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=32215&goto=lastpost#lastpost">2009-12-25 16:38</a></em>
					<cite>by <a href="space.php?username=%CE%F7%C3%C5%B4%B5%C5%A3">西门吹牛</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_6926" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=6926&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_6926"><a href="viewthread.php?tid=6926&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">100%赞成！候选人金正日众望所归</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3202">glim</a>
										</cite>
					<em>2009-3-10</em>
				</td>
				<td class="nums"><strong>42</strong> / <em>961</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=6926&goto=lastpost#lastpost">2009-3-13 18:18</a></em>
					<cite>by <a href="space.php?username=%B2%E9%C0%ED%C3%CD%B8%C9">查理猛干</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_7678" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=7678&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_7678"><a href="viewthread.php?tid=7678&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">我应该回大陆么</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5521">中央总竖鸡</a>
										</cite>
					<em>2009-3-23</em>
				</td>
				<td class="nums"><strong>42</strong> / <em>690</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=7678&goto=lastpost#lastpost">2009-3-25 09:47</a></em>
					<cite>by <a href="space.php?username=akira1110">akira1110</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_9256" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=9256&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_9256"><a href="viewthread.php?tid=9256&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">王丹：致部分不了解真相的香港大学生的兩封信</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1686">奧斯卡金</a>
										</cite>
					<em>2009-4-18</em>
				</td>
				<td class="nums"><strong>42</strong> / <em>759</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=9256&goto=lastpost#lastpost">2009-4-20 15:47</a></em>
					<cite>by <a href="space.php?username=%B2%BB%CD%D5%CF%C8%C9%FA">不驼先生</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_55631" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=55631&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_55631"><a href="viewthread.php?tid=55631&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">胡锦涛等同全国人民一起深切哀悼舟曲遇难同胞</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=12720">阿帅</a>
										</cite>
					<em>2010-8-15</em>
				</td>
				<td class="nums"><strong>42</strong> / <em>1048</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=55631&goto=lastpost#lastpost">2010-8-17 10:08</a></em>
					<cite>by <a href="space.php?username=zhenhdong">zhenhdong</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_55482" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=55482&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_55482"><a href="viewthread.php?tid=55482&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">国土部：中国遭本世纪最严重地质灾害</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7002">luugoo</a>
										</cite>
					<em>2010-8-15</em>
				</td>
				<td class="nums"><strong>42</strong> / <em>780</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=55482&goto=lastpost#lastpost">2010-8-19 00:32</a></em>
					<cite>by <a href="space.php?username=%E7%BF%9Bh">缈沨</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_53837" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=53837&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_53837"><a href="viewthread.php?tid=53837&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">飞虎队老兵垂危无钱医治 曾64次驾驶战机重创日寇</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4570">我卖糕的</a>
										</cite>
					<em>2010-7-24</em>
				</td>
				<td class="nums"><strong>42</strong> / <em>878</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=53837&goto=lastpost#lastpost">2010-8-21 01:11</a></em>
					<cite>by <a href="space.php?username=%CA%A6%D6%AE%D7%F9">师之座</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_56137" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=56137&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_56137"><a href="viewthread.php?tid=56137&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">18岁舟曲男孩徒手掰断钢筋逃生</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3969">langhua9527</a>
										</cite>
					<em>2010-8-21</em>
				</td>
				<td class="nums"><strong>42</strong> / <em>1060</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=56137&goto=lastpost#lastpost">2010-8-24 19:18</a></em>
					<cite>by <a href="space.php?username=FIFA%BB%E1%D4%B1">FIFA会员</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_57283" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=57283&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_57283"><a href="viewthread.php?tid=57283&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">暑假结束医院人流手术室前又现学生潮</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=144">mfs0616</a>
										</cite>
					<em>2010-9-3</em>
				</td>
				<td class="nums"><strong>42</strong> / <em>887</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=57283&goto=lastpost#lastpost">2010-9-4 22:37</a></em>
					<cite>by <a href="space.php?username=%CF%F4%D2%A2%C3%A8">萧尧猫</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_60149" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=60149&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_60149"><a href="viewthread.php?tid=60149&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">刘晓波获和平奖呼声高 刘霞不抱希望</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1333">废种豆豉</a>
										</cite>
					<em>2010-10-4</em>
				</td>
				<td class="nums"><strong>42</strong> / <em>1265</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=60149&goto=lastpost#lastpost">2010-10-7 00:12</a></em>
					<cite>by <a href="space.php?username=%D4%C2%BD%E1%C7%E5%CE%D2">月结清我</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_59861" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=59861&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_59861"><a href="viewthread.php?tid=59861&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">胡锦涛就正确处理人民内部矛盾提3个&quot;最大限度&quot;</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2804">musicool</a>
										</cite>
					<em>2010-9-29</em>
				</td>
				<td class="nums"><strong>42</strong> / <em>1446</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=59861&goto=lastpost#lastpost">2010-10-7 14:53</a></em>
					<cite>by <a href="space.php?username=%B0%D9%BA%CF">百合</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_60610" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=60610&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_60610"><a href="viewthread.php?tid=60610&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">警察要带刘晓波妻子刘霞离开北京</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=9517">老西</a>
										</cite>
					<em>2010-10-8</em>
				</td>
				<td class="nums"><strong>42</strong> / <em>2166</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=60610&goto=lastpost#lastpost">2010-10-10 15:19</a></em>
					<cite>by <a href="space.php?username=dongzemao">dongzemao</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_60685" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=60685&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_60685"><a href="viewthread.php?tid=60685&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">潘基文就2010年诺贝尔和平奖的颁发发表声明</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=144">mfs0616</a>
										</cite>
					<em>2010-10-10</em>
				</td>
				<td class="nums"><strong>42</strong> / <em>2371</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=60685&goto=lastpost#lastpost">2010-10-11 23:38</a></em>
					<cite>by <a href="space.php?username=hhbcl1414">hhbcl1414</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_60386" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=60386&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_60386"><a href="viewthread.php?tid=60386&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">北大附中50年校庆 毛新宇当选杰出校友</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8301">lqunl</a>
										</cite>
					<em>2010-10-7</em>
				</td>
				<td class="nums"><strong>42</strong> / <em>1036</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=60386&goto=lastpost#lastpost">2010-10-12 00:51</a></em>
					<cite>by <a href="space.php?username=kingdom_dong">kingdom_dong</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_10082" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=10082&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_10082"><a href="viewthread.php?tid=10082&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">台湾游客对俺说：我可不是你的同胞</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2213">核子力量</a>
										</cite>
					<em>2009-5-1</em>
				</td>
				<td class="nums"><strong>42</strong> / <em>955</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=10082&goto=lastpost#lastpost">2009-5-4 16:11</a></em>
					<cite>by <a href="space.php?username=%C0%E4%B9%C4">冷鼓</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_10664" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=10664&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_10664"><a href="viewthread.php?tid=10664&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">韩寒谈杭州富家子弟“飞车门”</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1886">gjlawyer</a>
										</cite>
					<em>2009-5-11</em>
				</td>
				<td class="nums"><strong>42</strong> / <em>1178</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=10664&goto=lastpost#lastpost">2009-5-13 21:51</a></em>
					<cite>by <a href="space.php?username=zhousi01">zhousi01</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_10756" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=10756&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_10756"><a href="viewthread.php?tid=10756&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">北川中学的豆腐渣教学楼是这样做成的</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1770">nustbobo</a>
										</cite>
					<em>2009-5-12</em>
				</td>
				<td class="nums"><strong>42</strong> / <em>1290</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=10756&goto=lastpost#lastpost">2009-5-15 14:06</a></em>
					<cite>by <a href="space.php?username=%CE%D2%C2%F4%B8%E2%B5%C4">我卖糕的</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_11182" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=11182&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_11182"><a href="viewthread.php?tid=11182&amp;extra=page%3D33%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">要看的赶早——南京练摊大学生和城管对殴</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2907">无言的山丘</a>
										</cite>
					<em>2009-5-18</em>
				</td>
				<td class="nums"><strong>42</strong> / <em>914</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=11182&goto=lastpost#lastpost">2009-5-19 17:33</a></em>
					<cite>by <a href="space.php?username=%D0%A1%BF%B5%D4%AA%C4%EA">小康元年</a></cite>
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
	<div class="pages"><em>&nbsp;22278&nbsp;</em><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=1" class="first">1 ...</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=32" class="prev">&lsaquo;&lsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=31">31</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=32">32</a><strong>33</strong><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=34">34</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=35">35</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=36">36</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=37">37</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=38">38</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=39">39</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=40">40</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=34" class="next">&rsaquo;&rsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=349" class="last">... 349</a><kbd><input type="text" name="custompage" size="3" onkeydown="if(event.keyCode==13) {window.location='forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page='+this.value; return false;}" /></kbd></div>	</div>

  
	<div class="box">
			<span class="headactions"><a href="forumdisplay.php?fid=2&amp;page=33&amp;showoldetails=yes#online" class="nobdr"><img src="images/default/collapsed_yes.gif" alt="" /></a></span>
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
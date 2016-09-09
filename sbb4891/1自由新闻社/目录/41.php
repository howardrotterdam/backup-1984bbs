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
			window.location = 'forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&page=40';
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
<div class="pages"><em>&nbsp;22278&nbsp;</em><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=1" class="first">1 ...</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=40" class="prev">&lsaquo;&lsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=39">39</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=40">40</a><strong>41</strong><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=42">42</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=43">43</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=44">44</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=45">45</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=46">46</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=47">47</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=48">48</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=42" class="next">&rsaquo;&rsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=349" class="last">... 349</a><kbd><input type="text" name="custompage" size="3" onkeydown="if(event.keyCode==13) {window.location='forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page='+this.value; return false;}" /></kbd></div></div>

<div style="float:left;border:1px solid #CCC; border-bottom:none;;width:218px; background: url(/imgs/1984radio.jpg) 200px 2px no-repeat;padding:5px 0 5px 12px;margin:0px 0 0 13px">

<p><b><a href="/radio/index.php" target="_blank">1984FM</a></b><br /><b><a href="https://voxli.com/1984bbs" target="_blank">1984Chat</a></b>&nbsp;</p> 
</div>

<div style="clear:both;height:0px;width:100%;font-size:1px;">&nbsp;</div>

	<ul class="popupmenu_popup newspecialmenu" id="newspecial_menu" style="display: none">
		<li><a href="post.php?action=newthread&amp;fid=2&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">发新话题</a></li>		<li class="poll"><a href="post.php?action=newthread&amp;fid=2&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;special=1">发布投票</a></li>													</ul>
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

					<tbody id="normalthread_50816" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=50816&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_50816"><a href="viewthread.php?tid=50816&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">朝鲜神秘美女啦啦队 人人是厅级 21人被劳教</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=14174">duzhqi</a>
										</cite>
					<em>2010-6-26</em>
				</td>
				<td class="nums"><strong>37</strong> / <em>2250</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=50816&goto=lastpost#lastpost">2010-7-6 22:33</a></em>
					<cite>by <a href="space.php?username=%D7%F3%CA%D6%B5%C4%D7%F3">左手的左</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_51932" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=51932&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_51932"><a href="viewthread.php?tid=51932&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">上海地铁2号线一乘客强行登车被夹致死</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=13517">gaoxsh</a>
										</cite>
					<em>2010-7-6</em>
				</td>
				<td class="nums"><strong>37</strong> / <em>1056</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=51932&goto=lastpost#lastpost">2010-7-9 00:51</a></em>
					<cite>by <a href="space.php?username=sniperhyx">sniperhyx</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_51974" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=51974&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_51974"><a href="viewthread.php?tid=51974&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">李敖儿子出书批教育体制 想弃台大读北大</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=9737">剁辣椒</a>
										</cite>
					<em>2010-7-7</em>
				</td>
				<td class="nums"><strong>37</strong> / <em>781</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=51974&goto=lastpost#lastpost">2010-7-9 02:15</a></em>
					<cite>by <a href="space.php?username=%B9%D1%C8%CB%D3%D0%BC%B2%D2%D3">寡人有疾矣</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_52157" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=52157&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_52157"><a href="viewthread.php?tid=52157&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">任志强驾大奔撞翻三轮车  一女子受伤</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=9737">剁辣椒</a>
										</cite>
					<em>2010-7-8</em>
				</td>
				<td class="nums"><strong>37</strong> / <em>950</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=52157&goto=lastpost#lastpost">2010-7-10 06:13</a></em>
					<cite>by <a href="space.php?username=redares">redares</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_52209" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=52209&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_52209"><a href="viewthread.php?tid=52209&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">青海发现问题奶粉三聚氰胺超标500余倍</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=16463">思想罪</a>
										</cite>
					<em>2010-7-8</em>
				</td>
				<td class="nums"><strong>37</strong> / <em>547</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=52209&goto=lastpost#lastpost">2010-7-11 16:54</a></em>
					<cite>by <a href="space.php?username=wangguoping">wangguoping</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_53322" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=53322&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_53322"><a href="viewthread.php?tid=53322&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">北京军区司令员房峰辉等11人晋升上将军衔</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8301">lqunl</a>
										</cite>
					<em>2010-7-19</em>
				</td>
				<td class="nums"><strong>37</strong> / <em>1155</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=53322&goto=lastpost#lastpost">2010-7-21 04:01</a></em>
					<cite>by <a href="space.php?username=2190247">2190247</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_53066" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=53066&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_53066"><a href="viewthread.php?tid=53066&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传共军保密形势严峻</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4817">firedragoon</a>
										</cite>
					<em>2010-7-16</em>
				</td>
				<td class="nums"><strong>37</strong> / <em>1566</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=53066&goto=lastpost#lastpost">2010-7-24 18:42</a></em>
					<cite>by <a href="space.php?username=%CE%AC%CC%D8%B8%F9%CB%B9%CC%B9">维特根斯坦</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_53971" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=53971&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_53971"><a href="viewthread.php?tid=53971&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">中国海关将对邮购境外安全奶粉进行征税</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3202">glim</a>
										</cite>
					<em>2010-7-26</em>
				</td>
				<td class="nums"><strong>37</strong> / <em>820</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=53971&goto=lastpost#lastpost">2010-7-28 11:43</a></em>
					<cite>by <a href="space.php?username=davysky">davysky</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_21844" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=21844&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_21844"><a href="viewthread.php?tid=21844&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">富女400万买藏獒    30辆奔驰机场列队迎候</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=852">未来他老爸</a>
										</cite>
					<em>2009-9-10</em>
				</td>
				<td class="nums"><strong>37</strong> / <em>968</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=21844&goto=lastpost#lastpost">2009-9-14 09:45</a></em>
					<cite>by <a href="space.php?username=%B1%B1%B7%BD%D0%FE%CE%E5">北方玄五</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_22310" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=22310&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_22310"><a href="viewthread.php?tid=22310&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">热比娅的前夫自述：一个不忠的妻子、不合格的母亲</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4522">Menphis</a>
										</cite>
					<em>2009-9-15</em>
				</td>
				<td class="nums"><strong>37</strong> / <em>788</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=22310&goto=lastpost#lastpost">2009-9-17 13:07</a></em>
					<cite>by <a href="space.php?username=%D0%A1%C1%FA%C8%CB">小龙人</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_22492" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=22492&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_22492"><a href="viewthread.php?tid=22492&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">互联网协会理事长：你做了坏事老大哥就可以找到你</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1258">路边社记者</a>
										</cite>
					<em>2009-9-17</em>
				</td>
				<td class="nums"><strong>37</strong> / <em>982</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=22492&goto=lastpost#lastpost">2009-9-19 13:09</a></em>
					<cite>by <a href="space.php?username=%CE%F7%C3%C5%B4%B5%C5%A3">西门吹牛</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_23516" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=23516&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_23516"><a href="viewthread.php?tid=23516&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">铁血观点：梁光烈的罕见表态暗示中国有能力与任何国家抗衡</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8301">lqunl</a>
										</cite>
					<em>2009-9-26</em>
				</td>
				<td class="nums"><strong>37</strong> / <em>836</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=23516&goto=lastpost#lastpost">2009-9-27 21:21</a></em>
					<cite>by <a href="space.php?username=WJ87">WJ87</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_24889" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=24889&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_24889"><a href="viewthread.php?tid=24889&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">一针双黄连注射液最快2分钟内夺命</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4570">我卖糕的</a>
										</cite>
					<em>2009-10-12</em>
				</td>
				<td class="nums"><strong>37</strong> / <em>1316</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=24889&goto=lastpost#lastpost">2009-10-14 18:29</a></em>
					<cite>by <a href="space.php?username=atpatp">atpatp</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_25728" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=25728&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_25728"><a href="viewthread.php?tid=25728&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">奥巴马被赤化成“奥巴毛”</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4570">我卖糕的</a>
										</cite>
					<em>2009-9-25</em>
				</td>
				<td class="nums"><strong>37</strong> / <em>1368</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=25728&goto=lastpost#lastpost">2009-10-23 12:33</a></em>
					<cite>by <a href="space.php?username=%C1%D9%D6%D5%C9%CF%B5%DB">临终上帝</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_26362" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=26362&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_26362"><a href="viewthread.php?tid=26362&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传，天朝特种部队突袭索马里海贼村</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5464">上海帅哥</a>
										</cite>
					<em>2009-10-27</em>
				</td>
				<td class="nums"><strong>37</strong> / <em>1183</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=26362&goto=lastpost#lastpost">2009-10-28 12:17</a></em>
					<cite>by <a href="space.php?username=luckyray">luckyray</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_26548" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=26548&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_26548"><a href="viewthread.php?tid=26548&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">为了不影响“班级荣誉”，老师强行剪掉她的长发</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3202">glim</a>
										</cite>
					<em>2009-10-29</em>
				</td>
				<td class="nums"><strong>37</strong> / <em>668</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=26548&goto=lastpost#lastpost">2009-10-31 00:12</a></em>
					<cite>by <a href="space.php?username=openearth">openearth</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_3224" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=3224&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_3224"><a href="viewthread.php?tid=3224&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">世界独裁者漫画精选</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7">张书记</a>
										</cite>
					<em>2009-1-12</em>
				</td>
				<td class="nums"><strong>37</strong> / <em>440</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=3224&goto=lastpost#lastpost">2009-1-12 22:57</a></em>
					<cite>by <a href="space.php?username=%B0%A7%CC%BE">哀叹</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_39889" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=39889&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_39889"><a href="viewthread.php?tid=39889&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">女主播袁鸣为韩正市长产下一子</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4705">dreamingly</a>
										</cite>
					<em>2010-3-11</em>
				</td>
				<td class="nums"><strong>37</strong> / <em>2431</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=39889&goto=lastpost#lastpost">2010-3-12 21:44</a></em>
					<cite>by <a href="space.php?username=freehost01">freehost01</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_39999" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=39999&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_39999"><a href="viewthread.php?tid=39999&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">最高院：百姓要少打官司，不要敢打官司</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5415">LXS</a>
										</cite>
					<em>2010-3-12</em>
				</td>
				<td class="nums"><strong>37</strong> / <em>735</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=39999&goto=lastpost#lastpost">2010-3-15 10:51</a></em>
					<cite>by <a href="space.php?username=%BF%EC%D4%D5%B7%E788">快哉风88</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_41175" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=41175&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_41175"><a href="viewthread.php?tid=41175&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">富士康武汉招聘考俯卧撑   男生做不到20个被淘汰</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=852">未来他老爸</a>
										</cite>
					<em>2010-3-24</em>
				</td>
				<td class="nums"><strong>37</strong> / <em>850</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=41175&goto=lastpost#lastpost">2010-3-26 09:01</a></em>
					<cite>by <a href="space.php?username=Geona">Geona</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_41167" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=41167&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_41167"><a href="viewthread.php?tid=41167&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">一周图片新闻 3.22-3.28</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2232">老杂疫</a>
										</cite>
					<em>2010-3-24</em>
				</td>
				<td class="nums"><strong>37</strong> / <em>905</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=41167&goto=lastpost#lastpost">2010-3-27 10:53</a></em>
					<cite>by <a href="space.php?username=%C0%CF%D4%D3%D2%DF">老杂疫</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_41307" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=41307&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_41307"><a href="viewthread.php?tid=41307&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">Google在华市场份额暂时超越百度</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2495">深入裙中</a>
										</cite>
					<em>2010-3-25</em>
				</td>
				<td class="nums"><strong>37</strong> / <em>1274</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=41307&goto=lastpost#lastpost">2010-3-27 12:02</a></em>
					<cite>by <a href="space.php?username=zhuanwan">zhuanwan</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_41407" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=41407&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_41407"><a href="viewthread.php?tid=41407&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">朝鲜男子看《2012》被捕 或判5年监禁</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4705">dreamingly</a>
										</cite>
					<em>2010-3-26</em>
				</td>
				<td class="nums"><strong>37</strong> / <em>1027</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=41407&goto=lastpost#lastpost">2010-3-27 17:52</a></em>
					<cite>by <a href="space.php?username=%BA%CE%B1%CA">何笔</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_42600" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=42600&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_42600"><a href="viewthread.php?tid=42600&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传，深圳出现“飞鸽炸弹”</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=10970">prejudice</a>
										</cite>
					<em>2010-4-8</em>
				</td>
				<td class="nums"><strong>37</strong> / <em>1763</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=42600&goto=lastpost#lastpost">2010-4-10 21:55</a></em>
					<cite>by <a href="space.php?username=%C8%CB%B5%C4%C6%A8%B9%C9%B1%C8%C1%B3%B4%F3">人的屁股比脸大</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_42530" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=42530&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_42530"><a href="viewthread.php?tid=42530&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">广东佛山发生枪战事件 百余人员用长刀互相砍杀</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4570">我卖糕的</a>
										</cite>
					<em>2010-4-8</em>
				</td>
				<td class="nums"><strong>37</strong> / <em>1077</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=42530&goto=lastpost#lastpost">2010-4-11 12:19</a></em>
					<cite>by <a href="space.php?username=lanjingyun">lanjingyun</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_42912" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=42912&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_42912"><a href="viewthread.php?tid=42912&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">中国耗资近5亿在珠穆朗玛峰附近建机场</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=852">未来他老爸</a>
										</cite>
					<em>2010-4-12</em>
				</td>
				<td class="nums"><strong>37</strong> / <em>860</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=42912&goto=lastpost#lastpost">2010-4-14 21:19</a></em>
					<cite>by <a href="space.php?username=%B2%BB%BE%B4%C9%F1%B5%C4YODA">不敬神的YODA</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_43592" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=43592&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_43592"><a href="viewthread.php?tid=43592&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">达赖喇嘛：青海是我的家乡 渴望前往灾区</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8544">百丽</a>
										</cite>
					<em>2010-4-20</em>
				</td>
				<td class="nums"><strong>37</strong> / <em>1141</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=43592&goto=lastpost#lastpost">2010-4-23 21:48</a></em>
					<cite>by <a href="space.php?username=%D7%F7%CC%D8%C1%CB">作特了</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_44403" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=44403&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_44403"><a href="viewthread.php?tid=44403&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">美卫星偷拍中国航母建造 遭中国反卫星武器攻击</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5494">肉の包包</a>
										</cite>
					<em>2010-4-29</em>
				</td>
				<td class="nums"><strong>37</strong> / <em>1322</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=44403&goto=lastpost#lastpost">2010-5-2 01:44</a></em>
					<cite>by <a href="space.php?username=olalala">olalala</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_45116" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=45116&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_45116"><a href="viewthread.php?tid=45116&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">李源潮称3年内将有效遏制买官卖官等不正之风</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2804">musicool</a>
										</cite>
					<em>2010-5-7</em>
				</td>
				<td class="nums"><strong>37</strong> / <em>552</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=45116&goto=lastpost#lastpost">2010-5-10 08:38</a></em>
					<cite>by <a href="space.php?username=%CC%EF%B7%E1">田丰</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_45353" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=45353&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_45353"><a href="viewthread.php?tid=45353&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">中国剖腹产率上升引发担忧</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7968">singlefabulous</a>
										</cite>
					<em>2010-5-10</em>
				</td>
				<td class="nums"><strong>37</strong> / <em>671</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=45353&goto=lastpost#lastpost">2010-5-10 21:26</a></em>
					<cite>by <a href="space.php?username=atpatp">atpatp</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_45587" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=45587&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_45587"><a href="viewthread.php?tid=45587&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">人大女副委员长巴黎遇劫</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8343">假装很青春</a>
										</cite>
					<em>2010-5-12</em>
				</td>
				<td class="nums"><strong>37</strong> / <em>1467</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=45587&goto=lastpost#lastpost">2010-5-15 14:12</a></em>
					<cite>by <a href="space.php?username=seoul">seoul</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_46128" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=46128&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_46128"><a href="viewthread.php?tid=46128&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">朝鲜女难民在中国沦为商品</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7002">luugoo</a>
										</cite>
					<em>2010-5-15</em>
				</td>
				<td class="nums"><strong>37</strong> / <em>1598</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=46128&goto=lastpost#lastpost">2010-5-17 19:18</a></em>
					<cite>by <a href="space.php?username=%B4%E5%CE%AF%BB%E1%B5%C4%C3%A8">村委会的猫</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_45976" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=45976&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_45976"><a href="viewthread.php?tid=45976&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">义务潜水员未找回失踪者被家属打成肾出血</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1408">becom</a>
										</cite>
					<em>2010-5-16</em>
				</td>
				<td class="nums"><strong>37</strong> / <em>875</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=45976&goto=lastpost#lastpost">2010-5-22 05:31</a></em>
					<cite>by <a href="space.php?username=DarkStar">DarkStar</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_46898" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=46898&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_46898"><a href="viewthread.php?tid=46898&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">台湾拒绝“中国台湾省制造”的标签</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=13406">fbnqxs</a>
										</cite>
					<em>2010-5-24</em>
				</td>
				<td class="nums"><strong>37</strong> / <em>679</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=46898&goto=lastpost#lastpost">2010-5-25 09:56</a></em>
					<cite>by <a href="space.php?username=arzmok">arzmok</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_47152" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=47152&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_47152"><a href="viewthread.php?tid=47152&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">加拿大与朝鲜断交</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=9829">多吉</a>
										</cite>
					<em>2010-5-26</em>
				</td>
				<td class="nums"><strong>37</strong> / <em>1314</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=47152&goto=lastpost#lastpost">2010-5-27 09:10</a></em>
					<cite>by <a href="space.php?username=Havel">Havel</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_26021" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=26021&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_26021"><a href="viewthread.php?tid=26021&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">吕秀莲曝：国共两党计划三年内和平统一中国</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7584">张居右</a>
										</cite>
					<em>2009-10-23</em>
				</td>
				<td class="nums"><strong>37</strong> / <em>919</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=26021&goto=lastpost#lastpost">2009-11-2 08:37</a></em>
					<cite>by <a href="space.php?username=%CC%EF%B7%E1">田丰</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_26943" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=26943&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_26943"><a href="viewthread.php?tid=26943&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">一周图片新闻 11.2-11.8</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2232">老杂疫</a>
										</cite>
					<em>2009-11-2</em>
				</td>
				<td class="nums"><strong>37</strong> / <em>1166</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=26943&goto=lastpost#lastpost">2009-11-8 13:38</a></em>
					<cite>by <a href="space.php?username=%C0%CF%D4%D3%D2%DF">老杂疫</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_27782" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=27782&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_27782"><a href="viewthread.php?tid=27782&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">夫妇用&quot;烙刑&quot;虐待6岁女儿 父亲被行政拘留5天</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5978">散光</a>
										</cite>
					<em>2009-11-11</em>
				</td>
				<td class="nums"><strong>37</strong> / <em>427</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=27782&goto=lastpost#lastpost">2009-11-14 23:05</a></em>
					<cite>by <a href="space.php?username=%CE%F7%C3%C5%B4%B5%C5%A3">西门吹牛</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_27791" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=27791&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_27791"><a href="viewthread.php?tid=27791&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">北大医院千余职工重温《入党誓言》保证医德高尚</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7919">路边社门卫</a>
										</cite>
					<em>2009-11-11</em>
				</td>
				<td class="nums"><strong>37</strong> / <em>330</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=27791&goto=lastpost#lastpost">2009-11-14 23:08</a></em>
					<cite>by <a href="space.php?username=%CE%F7%C3%C5%B4%B5%C5%A3">西门吹牛</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_28346" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=28346&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_28346"><a href="viewthread.php?tid=28346&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">个人私装“卫星锅”罚5000元</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2202">ccjing123</a>
										</cite>
					<em>2009-11-18</em>
				</td>
				<td class="nums"><strong>37</strong> / <em>880</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=28346&goto=lastpost#lastpost">2009-11-21 13:16</a></em>
					<cite>by <a href="space.php?username=jiucaibao">jiucaibao</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_28725" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=28725&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_28725"><a href="viewthread.php?tid=28725&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">《倚天屠龙记》《西游记》多处被广电篡改和谐</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6518">id已被绿坝屏蔽</a>
										</cite>
					<em>2009-10-27</em>
				</td>
				<td class="nums"><strong>37</strong> / <em>1699</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=28725&goto=lastpost#lastpost">2009-11-23 12:29</a></em>
					<cite>by <a href="space.php?username=%C1%A2%B3%A1%B2%BB%BC%E1%B6%A8%B5%C4%C8%CB">立场不坚定的人</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_28479" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=28479&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_28479"><a href="viewthread.php?tid=28479&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">首名校长推荐北大学生现身南京师大附中</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=852">未来他老爸</a>
										</cite>
					<em>2009-11-19</em>
				</td>
				<td class="nums"><strong>37</strong> / <em>620</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=28479&goto=lastpost#lastpost">2009-11-30 12:16</a></em>
					<cite>by <a href="space.php?username=%CE%B4%C0%B4%CB%FB%C0%CF%B0%D6">未来他老爸</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_29532" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=29532&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_29532"><a href="viewthread.php?tid=29532&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传，梁光烈上书主张军队国家化</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8721">strongwind13</a>
										</cite>
					<em>2009-12-1</em>
				</td>
				<td class="nums"><strong>37</strong> / <em>1439</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=29532&goto=lastpost#lastpost">2009-12-3 11:50</a></em>
					<cite>by <a href="space.php?username=Neverever">Neverever</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_29566" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=29566&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_29566"><a href="viewthread.php?tid=29566&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">中国彩票业又出离奇事</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2681">daddle</a>
										</cite>
					<em>2009-11-30</em>
				</td>
				<td class="nums"><strong>37</strong> / <em>1403</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=29566&goto=lastpost#lastpost">2009-12-3 22:28</a></em>
					<cite>by <a href="space.php?username=%B6%B3%BD%E1%B5%C4%C0%E8%C3%F7">冻结的黎明</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_30423" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=30423&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_30423"><a href="viewthread.php?tid=30423&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">彭丽媛、张艺谋、成龙等荣膺60位“人民喜爱的艺术家”</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3202">glim</a>
										</cite>
					<em>2009-12-9</em>
				</td>
				<td class="nums"><strong>37</strong> / <em>495</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=30423&goto=lastpost#lastpost">2009-12-10 16:45</a></em>
					<cite>by <a href="space.php?username=%B7%BD%D2%CA%C3%F9">方沂鸣</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_30870" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=30870&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_30870"><a href="viewthread.php?tid=30870&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">前中国工程院院长证实中国在建航母</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4570">我卖糕的</a>
										</cite>
					<em>2009-12-11</em>
				</td>
				<td class="nums"><strong>37</strong> / <em>778</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=30870&goto=lastpost#lastpost">2009-12-13 01:50</a></em>
					<cite>by <a href="space.php?username=%BF%CC%C2%BC%B9%E2%C5%CC">刻录光盘</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_31151" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=31151&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_31151"><a href="viewthread.php?tid=31151&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">河北拆迁公司工头开卡车故意压死村民</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=10244">shredonk</a>
										</cite>
					<em>2009-12-13</em>
				</td>
				<td class="nums"><strong>37</strong> / <em>536</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=31151&goto=lastpost#lastpost">2009-12-17 18:17</a></em>
					<cite>by <a href="space.php?username=lning">lning</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_31463" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=31463&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_31463"><a href="viewthread.php?tid=31463&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">气候峰会入场受阻，中国代表团团长连续三天不高兴</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5503">紫川云</a>
										</cite>
					<em>2009-12-10</em>
				</td>
				<td class="nums"><strong>37</strong> / <em>1239</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=31463&goto=lastpost#lastpost">2009-12-17 18:22</a></em>
					<cite>by <a href="space.php?username=%CE%B4%C0%B4%CB%FB%C0%CF%B0%D6">未来他老爸</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_32025" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=32025&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_32025"><a href="viewthread.php?tid=32025&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">WTO二次认定中国违规限制美娱乐产品销售 我商务部表示遗憾</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4817">firedragoon</a>
										</cite>
					<em>2009-12-22</em>
				</td>
				<td class="nums"><strong>37</strong> / <em>857</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=32025&goto=lastpost#lastpost">2009-12-24 10:45</a></em>
					<cite>by <a href="space.php?username=zama">zama</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_32300" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=32300&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_32300"><a href="viewthread.php?tid=32300&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">三姘头聚首纪念毛诞辰</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4570">我卖糕的</a>
										</cite>
					<em>2009-12-24</em>
				</td>
				<td class="nums"><strong>37</strong> / <em>1683</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=32300&goto=lastpost#lastpost">2009-12-27 20:41</a></em>
					<cite>by <a href="space.php?username=%CA%F7%C9%CF%B4%BA%B4%E5">树上春村</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_9636" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=9636&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_9636"><a href="viewthread.php?tid=9636&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">八卦高级教程之：邱少云</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2234">袖手看热闹</a>
										</cite>
					<em>2009-4-24</em>
				</td>
				<td class="nums"><strong>37</strong> / <em>861</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=9636&goto=lastpost#lastpost">2009-4-27 22:21</a></em>
					<cite>by <a href="space.php?username=aston">aston</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_9798" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=9798&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_9798"><a href="viewthread.php?tid=9798&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">江core儿子疑似涉嫌受贿</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3424">mmqmmm</a>
										</cite>
					<em>2009-4-27</em>
				</td>
				<td class="nums"><strong>37</strong> / <em>1361</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=9798&goto=lastpost#lastpost">2009-4-29 22:04</a></em>
					<cite>by <a href="space.php?username=RFI%B2%DC%B9%FA%D0%C7">RFI曹国星</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_11042" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=11042&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_11042"><a href="viewthread.php?tid=11042&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">奥巴马涉暴力、偷窥、被围殴等照片流出</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=852">未来他老爸</a>
										</cite>
					<em>2009-5-16</em>
				</td>
				<td class="nums"><strong>37</strong> / <em>778</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=11042&goto=lastpost#lastpost">2009-5-17 18:35</a></em>
					<cite>by <a href="space.php?username=raul1943">raul1943</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_11088" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=11088&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_11088"><a href="viewthread.php?tid=11088&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">关注邓玉娇——公盟援助律师 实时更新（23日）</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1886">gjlawyer</a>
										</cite>
					<em>2009-5-17</em>
				</td>
				<td class="nums"><strong>37</strong> / <em>963</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=11088&goto=lastpost#lastpost">2009-5-23 06:48</a></em>
					<cite>by <a href="space.php?username=a625446312">a625446312</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_12387" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=12387&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_12387"><a href="viewthread.php?tid=12387&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">陆肆的各种写法</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4691">巳已己</a>
										</cite>
					<em>2009-6-1</em>
				</td>
				<td class="nums"><strong>37</strong> / <em>1018</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=12387&goto=lastpost#lastpost">2009-6-4 23:15</a></em>
					<cite>by <a href="space.php?username=%CC%A4%D1%A9%D1%B0%C3%B7">踏雪寻梅</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_12804" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=12804&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_12804"><a href="viewthread.php?tid=12804&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">影帝先生，对不起，我属于8%的那一小撮</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4570">我卖糕的</a>
										</cite>
					<em>2009-6-5</em>
				</td>
				<td class="nums"><strong>37</strong> / <em>1060</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=12804&goto=lastpost#lastpost">2009-6-8 17:26</a></em>
					<cite>by <a href="space.php?username=%BE%F8%B2%BB%B8%B6%D5%CB">绝不付账</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_2976" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=2976&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_2976"><a href="viewthread.php?tid=2976&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">贺岁强档：爹亲娘亲不如党亲 “送温暖”演技大比拼</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2071">上肛上腺</a>
										</cite>
					<em>2009-1-7</em>
				</td>
				<td class="nums"><strong>37</strong> / <em>520</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=2976&goto=lastpost#lastpost">2009-1-15 19:17</a></em>
					<cite>by <a href="space.php?username=%C8%CB%C3%F1%C8%BA%D6%DA">人民群众</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_5272" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=5272&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_5272"><a href="viewthread.php?tid=5272&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">文怀沙问题快速解析</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4030">和菜头</a>
										</cite>
					<em>2009-2-20</em>
				</td>
				<td class="nums"><strong>37</strong> / <em>659</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=5272&goto=lastpost#lastpost">2009-2-22 00:57</a></em>
					<cite>by <a href="space.php?username=%D6%D0%B9%FA%B2%A9%C6%F0">中国博起</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_5660" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=5660&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_5660"><a href="viewthread.php?tid=5660&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">南开大学食堂伙夫：给总理盛饭很紧张</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=59">care</a>
										</cite>
					<em>2009-2-17</em>
				</td>
				<td class="nums"><strong>37</strong> / <em>645</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=5660&goto=lastpost#lastpost">2009-2-25 13:42</a></em>
					<cite>by <a href="space.php?username=%B0%D7%C5%A3">白牛</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_6337" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=6337&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_6337"><a href="viewthread.php?tid=6337&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">每年春天都会有这样一个煞笔标题“两会报道的美女记者”</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=613">五花肉</a>
										</cite>
					<em>2009-3-5</em>
				</td>
				<td class="nums"><strong>37</strong> / <em>1003</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=6337&goto=lastpost#lastpost">2009-3-10 11:03</a></em>
					<cite>by <a href="space.php?username=crazydj555">crazydj555</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_6734" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=6734&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_6734"><a href="viewthread.php?tid=6734&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">外交部副部长：我们看不惯外国人那种小声嘀嘀咕咕</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3202">glim</a>
										</cite>
					<em>2009-3-9</em>
				</td>
				<td class="nums"><strong>37</strong> / <em>774</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=6734&goto=lastpost#lastpost">2009-3-10 14:02</a></em>
					<cite>by <a href="space.php?username=%B3%D4%B1%A5%C3%BB%CA%C2%B8%C9">吃饱没事干</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_6841" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=6841&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_6841"><a href="viewthread.php?tid=6841&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">苦练演技终获殊荣 影帝成功拿下新闻摄影界“小金人”</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1258">路边社记者</a>
										</cite>
					<em>2009-3-11</em>
				</td>
				<td class="nums"><strong>37</strong> / <em>769</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=6841&goto=lastpost#lastpost">2009-3-13 15:42</a></em>
					<cite>by <a href="space.php?username=zhsh_710">zhsh_710</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_6925" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=6925&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_6925"><a href="viewthread.php?tid=6925&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">尔冬升：审查制度让香港电影失去特征走向和谐</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3630">elzzird</a>
										</cite>
					<em>2009-3-12</em>
				</td>
				<td class="nums"><strong>37</strong> / <em>863</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=6925&goto=lastpost#lastpost">2009-3-15 01:46</a></em>
					<cite>by <a href="space.php?username=ruffio">ruffio</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_7209" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=7209&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_7209"><a href="viewthread.php?tid=7209&amp;extra=page%3D41%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">李锐等人“九零上书” 呼吁当局尊重民主自由人权</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3977">耗子</a>
										</cite>
					<em>2009-2-20</em>
				</td>
				<td class="nums"><strong>37</strong> / <em>1099</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=7209&goto=lastpost#lastpost">2009-3-18 18:01</a></em>
					<cite>by <a href="space.php?username=%B4%F7%BC%D2%C0%CF%B0%D6">戴家老爸</a></cite>
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
	<div class="pages"><em>&nbsp;22278&nbsp;</em><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=1" class="first">1 ...</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=40" class="prev">&lsaquo;&lsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=39">39</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=40">40</a><strong>41</strong><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=42">42</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=43">43</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=44">44</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=45">45</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=46">46</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=47">47</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=48">48</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=42" class="next">&rsaquo;&rsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=349" class="last">... 349</a><kbd><input type="text" name="custompage" size="3" onkeydown="if(event.keyCode==13) {window.location='forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page='+this.value; return false;}" /></kbd></div>	</div>

  
	<div class="box">
			<span class="headactions"><a href="forumdisplay.php?fid=2&amp;page=41&amp;showoldetails=yes#online" class="nobdr"><img src="images/default/collapsed_yes.gif" alt="" /></a></span>
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
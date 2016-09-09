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
			window.location = 'forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&page=39';
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
<div class="pages"><em>&nbsp;22278&nbsp;</em><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=1" class="first">1 ...</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=39" class="prev">&lsaquo;&lsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=38">38</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=39">39</a><strong>40</strong><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=41">41</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=42">42</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=43">43</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=44">44</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=45">45</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=46">46</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=47">47</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=41" class="next">&rsaquo;&rsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=349" class="last">... 349</a><kbd><input type="text" name="custompage" size="3" onkeydown="if(event.keyCode==13) {window.location='forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page='+this.value; return false;}" /></kbd></div></div>

<div style="float:left;border:1px solid #CCC; border-bottom:none;;width:218px; background: url(/imgs/1984radio.jpg) 200px 2px no-repeat;padding:5px 0 5px 12px;margin:0px 0 0 13px">

<p><b><a href="/radio/index.php" target="_blank">1984FM</a></b><br /><b><a href="https://voxli.com/1984bbs" target="_blank">1984Chat</a></b>&nbsp;</p> 
</div>

<div style="clear:both;height:0px;width:100%;font-size:1px;">&nbsp;</div>

	<ul class="popupmenu_popup newspecialmenu" id="newspecial_menu" style="display: none">
		<li><a href="post.php?action=newthread&amp;fid=2&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">发新话题</a></li>		<li class="poll"><a href="post.php?action=newthread&amp;fid=2&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;special=1">发布投票</a></li>													</ul>
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

					<tbody id="normalthread_53054" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=53054&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_53054"><a href="viewthread.php?tid=53054&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">北韩中国开枪互射  边境局势紧张</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8301">lqunl</a>
										</cite>
					<em>2010-7-16</em>
				</td>
				<td class="nums"><strong>38</strong> / <em>1867</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=53054&goto=lastpost#lastpost">2010-7-21 11:13</a></em>
					<cite>by <a href="space.php?username=fanqiangsanhao">fanqiangsanhao</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_53321" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=53321&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_53321"><a href="viewthread.php?tid=53321&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">上海年均薪63549元 冠全国</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8301">lqunl</a>
										</cite>
					<em>2010-7-19</em>
				</td>
				<td class="nums"><strong>38</strong> / <em>706</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=53321&goto=lastpost#lastpost">2010-7-22 09:37</a></em>
					<cite>by <a href="space.php?username=qdpan">qdpan</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_53201" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=53201&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_53201"><a href="viewthread.php?tid=53201&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">解放军罗少将：美已对我朝形成“满月形”包围</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=852">未来他老爸</a>
										</cite>
					<em>2010-7-18</em>
				</td>
				<td class="nums"><strong>38</strong> / <em>776</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=53201&goto=lastpost#lastpost">2010-7-22 10:43</a></em>
					<cite>by <a href="space.php?username=csxiangqian">csxiangqian</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_54522" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=54522&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_54522"><a href="viewthread.php?tid=54522&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">中国正研制真空高速列车 时速可达1000公里</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4570">我卖糕的</a>
										</cite>
					<em>2010-8-1</em>
				</td>
				<td class="nums"><strong>38</strong> / <em>765</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=54522&goto=lastpost#lastpost">2010-8-3 15:38</a></em>
					<cite>by <a href="space.php?username=l%C6%DF%D4%C2">l七月</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_54574" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=54574&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_54574"><a href="viewthread.php?tid=54574&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">“中国妓女节”发起人被公安传唤</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7002">luugoo</a>
										</cite>
					<em>2010-8-2</em>
				</td>
				<td class="nums"><strong>38</strong> / <em>998</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=54574&goto=lastpost#lastpost">2010-8-6 10:33</a></em>
					<cite>by <a href="space.php?username=maillel">maillel</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_18392" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=18392&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_18392"><a href="viewthread.php?tid=18392&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">中国超级富豪每年生活费一亿</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4570">我卖糕的</a>
										</cite>
					<em>2009-7-31</em>
				</td>
				<td class="nums"><strong>38</strong> / <em>762</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=18392&goto=lastpost#lastpost">2009-8-3 16:49</a></em>
					<cite>by <a href="space.php?username=EASY">EASY</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_18395" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=18395&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_18395"><a href="viewthread.php?tid=18395&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">天朝GDP惊现灵异事件：各省GDP之和多出全国1.4万亿</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4570">我卖糕的</a>
										</cite>
					<em>2009-7-31</em>
				</td>
				<td class="nums"><strong>38</strong> / <em>954</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=18395&goto=lastpost#lastpost">2009-8-6 11:20</a></em>
					<cite>by <a href="space.php?username=sukip">sukip</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_18889" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=18889&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_18889"><a href="viewthread.php?tid=18889&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">郭宇宽：异端的见证</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1925">兽小明</a>
										</cite>
					<em>2009-8-6</em>
				</td>
				<td class="nums"><strong>38</strong> / <em>514</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=18889&goto=lastpost#lastpost">2009-8-7 11:52</a></em>
					<cite>by <a href="space.php?username=%CF%E3%C7%EF%B6%E0%BC%AA">香秋多吉</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_19094" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=19094&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_19094"><a href="viewthread.php?tid=19094&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">山东采访惊魂记</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3928">panbin</a>
										</cite>
					<em>2009-8-7</em>
				</td>
				<td class="nums"><strong>38</strong> / <em>1085</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=19094&goto=lastpost#lastpost">2009-8-11 09:23</a></em>
					<cite>by <a href="space.php?username=1980s">1980s</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_19131" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=19131&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_19131"><a href="viewthread.php?tid=19131&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">王丹回国出庭作证？</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5823">康波</a>
										</cite>
					<em>2009-8-8</em>
				</td>
				<td class="nums"><strong>38</strong> / <em>995</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=19131&goto=lastpost#lastpost">2009-8-11 10:59</a></em>
					<cite>by <a href="space.php?username=%BF%B5%B2%A8">康波</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_19660" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=19660&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_19660"><a href="viewthread.php?tid=19660&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">GFW之父方滨兴：应尽快实行网络实名制</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6975">zpclxc</a>
										</cite>
					<em>2009-8-14</em>
				</td>
				<td class="nums"><strong>38</strong> / <em>801</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=19660&goto=lastpost#lastpost">2009-8-16 22:33</a></em>
					<cite>by <a href="space.php?username=lowd">lowd</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_19756" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=19756&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_19756"><a href="viewthread.php?tid=19756&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">谭作人妻女文章选登</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2804">musicool</a>
										</cite>
					<em>2009-8-15</em>
				</td>
				<td class="nums"><strong>38</strong> / <em>740</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=19756&goto=lastpost#lastpost">2009-8-18 16:56</a></em>
					<cite>by <a href="space.php?username=%8AW%CB%B9%BF%A8%BD%F0">奧斯卡金</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_19944" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=19944&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_19944"><a href="viewthread.php?tid=19944&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">前10个最差着装的世界领袖</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6327">chandler0819</a>
										</cite>
					<em>2009-8-17</em>
				</td>
				<td class="nums"><strong>38</strong> / <em>1098</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=19944&goto=lastpost#lastpost">2009-8-18 20:30</a></em>
					<cite>by <a href="space.php?username=olindays">olindays</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_20519" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=20519&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_20519"><a href="viewthread.php?tid=20519&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">真理部指定门户推荐：好消息让生活更甜蜜</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8235">路边社男公关</a>
										</cite>
					<em>2009-8-24</em>
				</td>
				<td class="nums"><strong>38</strong> / <em>1166</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=20519&goto=lastpost#lastpost">2009-8-26 09:42</a></em>
					<cite>by <a href="space.php?username=%CE%D2%CA%C7%C1%F7%C3%A5%CE%D2%C5%C2%CB%AD">我是流氓我怕谁</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_20474" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=20474&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_20474"><a href="viewthread.php?tid=20474&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">出版审查反暴力标准：三国斩将不能见首级落地</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4527">灼眼のSABER</a>
										</cite>
					<em>2009-8-24</em>
				</td>
				<td class="nums"><strong>38</strong> / <em>918</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=20474&goto=lastpost#lastpost">2009-8-30 12:26</a></em>
					<cite>by <a href="space.php?username=%C2%B7%B1%DF%C9%E7%CC%D8%D4%BC%BC%C7%D5%DF">路边社特约记者</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_21240" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=21240&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_21240"><a href="viewthread.php?tid=21240&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">2009年全球新闻自由度排名出炉 中国蝉联181位</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4515">litongling</a>
										</cite>
					<em>2009-8-5</em>
				</td>
				<td class="nums"><strong>38</strong> / <em>788</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=21240&goto=lastpost#lastpost">2009-9-3 10:28</a></em>
					<cite>by <a href="space.php?username=liuropot">liuropot</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_21276" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=21276&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_21276"><a href="viewthread.php?tid=21276&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">龙应台寄语胡：国庆致辞说“对不起”</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7">张书记</a>
										</cite>
					<em>2009-9-3</em>
				</td>
				<td class="nums"><strong>38</strong> / <em>1106</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=21276&goto=lastpost#lastpost">2009-9-4 11:14</a></em>
					<cite>by <a href="space.php?username=%CE%E5%B4%FA%CD%B7%C4%BF%CF%AE%BD%FC%C6%BF">五代头目袭近瓶</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_13502" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=13502&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_13502"><a href="viewthread.php?tid=13502&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">著名作家卫慧被警方带走……</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2799">clothshoes</a>
										</cite>
					<em>2009-6-13</em>
				</td>
				<td class="nums"><strong>38</strong> / <em>1752</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=13502&goto=lastpost#lastpost">2009-6-19 13:11</a></em>
					<cite>by <a href="space.php?username=lisha0711">lisha0711</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_14023" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=14023&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_14023"><a href="viewthread.php?tid=14023&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">伊朗军管互联网了，我仿佛看到了我们的未来</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2907">无言的山丘</a>
										</cite>
					<em>2009-6-18</em>
				</td>
				<td class="nums"><strong>38</strong> / <em>609</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=14023&goto=lastpost#lastpost">2009-6-19 22:40</a></em>
					<cite>by <a href="space.php?username=%CE%B4%B7%D6%BC%B6">未分级</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_14429" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=14429&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_14429"><a href="viewthread.php?tid=14429&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">进城六十年阅兵机 很红很暴力</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1680">robin</a>
										</cite>
					<em>2009-6-21</em>
				</td>
				<td class="nums"><strong>38</strong> / <em>1053</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=14429&goto=lastpost#lastpost">2009-6-22 19:09</a></em>
					<cite>by <a href="space.php?username=%CE%B6%BE%AB">味精</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_14319" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=14319&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_14319"><a href="viewthread.php?tid=14319&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">真理部关于石首事件的最新指示</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2804">musicool</a>
										</cite>
					<em>2009-6-20</em>
				</td>
				<td class="nums"><strong>38</strong> / <em>2326</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=14319&goto=lastpost#lastpost">2009-6-24 16:33</a></em>
					<cite>by <a href="space.php?username=%B2%BB%BE%B4%C9%F1%B5%C4YODA">不敬神的YODA</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_14522" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=14522&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_14522"><a href="viewthread.php?tid=14522&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">南京工业技工学生暴动事件已经持续四天</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4415">ljb166</a>
										</cite>
					<em>2009-6-22</em>
				</td>
				<td class="nums"><strong>38</strong> / <em>1566</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=14522&goto=lastpost#lastpost">2009-6-25 11:43</a></em>
					<cite>by <a href="space.php?username=beny.wang">beny.wang</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_14793" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=14793&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_14793"><a href="viewthread.php?tid=14793&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">校内网脑残一枚</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2699">ShoooooooootYou</a>
										</cite>
					<em>2009-6-25</em>
				</td>
				<td class="nums"><strong>38</strong> / <em>1092</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=14793&goto=lastpost#lastpost">2009-6-27 11:59</a></em>
					<cite>by <a href="space.php?username=yizhu0512">yizhu0512</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_15262" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=15262&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_15262"><a href="viewthread.php?tid=15262&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">网络审查人员：我们真的为自己干的事情感到特别恶心……</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2428">xiahua</a>
										</cite>
					<em>2009-6-28</em>
				</td>
				<td class="nums"><strong>38</strong> / <em>1967</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=15262&goto=lastpost#lastpost">2009-7-6 17:26</a></em>
					<cite>by <a href="space.php?username=zq19871127">zq19871127</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_16898" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=16898&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_16898"><a href="viewthread.php?tid=16898&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">独裁者遭遇蛋糕袭击</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7">张书记</a>
										</cite>
					<em>2009-7-16</em>
				</td>
				<td class="nums"><strong>38</strong> / <em>909</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=16898&goto=lastpost#lastpost">2009-7-16 18:17</a></em>
					<cite>by <a href="space.php?username=%D0%A1%E5%B7%E5%B7">小宸宸</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_16749" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=16749&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_16749"><a href="viewthread.php?tid=16749&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">赴台招生遭冷眼，台高中生称北大口味太重</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4867">asico001</a>
										</cite>
					<em>2009-7-14</em>
				</td>
				<td class="nums"><strong>38</strong> / <em>1109</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=16749&goto=lastpost#lastpost">2009-7-17 11:27</a></em>
					<cite>by <a href="space.php?username=hellgate">hellgate</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_16748" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=16748&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_16748"><a href="viewthread.php?tid=16748&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">广东省或宣布独立</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1752">peteryang84</a>
										</cite>
					<em>2009-7-14</em>
				</td>
				<td class="nums"><strong>38</strong> / <em>1518</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=16748&goto=lastpost#lastpost">2009-7-17 14:32</a></em>
					<cite>by <a href="space.php?username=Acrystalau">Acrystalau</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_33066" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=33066&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_33066"><a href="viewthread.php?tid=33066&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">上海世博双语指南</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2907">无言的山丘</a>
										</cite>
					<em>2009-12-31</em>
				</td>
				<td class="nums"><strong>38</strong> / <em>853</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=33066&goto=lastpost#lastpost">2010-1-2 16:49</a></em>
					<cite>by <a href="space.php?username=%BC%E1%B1%DA%C7%E5%D2%B0">坚壁清野</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_33197" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=33197&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_33197"><a href="viewthread.php?tid=33197&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">2009公款消费喜破万亿</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3227">快乐流浪汉</a>
										</cite>
					<em>2010-1-1</em>
				</td>
				<td class="nums"><strong>38</strong> / <em>852</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=33197&goto=lastpost#lastpost">2010-1-4 12:49</a></em>
					<cite>by <a href="space.php?username=%C3%D7%CE%F7%C3%D7%CE%F7">米西米西</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_34322" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=34322&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_34322"><a href="viewthread.php?tid=34322&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">秋雨铁凝韩寒等当选中小学生最喜爱当代作家</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=852">未来他老爸</a>
										</cite>
					<em>2010-1-11</em>
				</td>
				<td class="nums"><strong>38</strong> / <em>709</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=34322&goto=lastpost#lastpost">2010-1-20 13:15</a></em>
					<cite>by <a href="space.php?username=xytdyg">xytdyg</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_35622" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=35622&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_35622"><a href="viewthread.php?tid=35622&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">影帝与奥地利总统笑忆“啤酒馆往事”</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8644">蛋美</a>
										</cite>
					<em>2010-1-22</em>
				</td>
				<td class="nums"><strong>38</strong> / <em>1044</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=35622&goto=lastpost#lastpost">2010-1-24 20:21</a></em>
					<cite>by <a href="space.php?username=alexwen34">alexwen34</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_35883" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=35883&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_35883"><a href="viewthread.php?tid=35883&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">财务部划款670万做中国工会网3520万做孔子学院网</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=10536">小操</a>
										</cite>
					<em>2010-1-20</em>
				</td>
				<td class="nums"><strong>38</strong> / <em>666</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=35883&goto=lastpost#lastpost">2010-1-25 21:11</a></em>
					<cite>by <a href="space.php?username=%D5%FD%B0%E6%C7%C5365%CB%EA">正版桥365岁</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_35248" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=35248&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_35248"><a href="viewthread.php?tid=35248&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">国家高层密约各界专家赴中南海授课</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4570">我卖糕的</a>
										</cite>
					<em>2010-1-19</em>
				</td>
				<td class="nums"><strong>38</strong> / <em>1275</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=35248&goto=lastpost#lastpost">2010-1-25 23:57</a></em>
					<cite>by <a href="space.php?username=%CD%B8%C2%B6%C9%E7%BC%C7%D5%DF">透露社记者</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_29614" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=29614&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_29614"><a href="viewthread.php?tid=29614&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">秦刚答记者问：向缅甸施压 回避冯正虎入境</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=852">未来他老爸</a>
										</cite>
					<em>2009-11-27</em>
				</td>
				<td class="nums"><strong>38</strong> / <em>1513</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=29614&goto=lastpost#lastpost">2010-1-26 21:42</a></em>
					<cite>by <a href="space.php?username=shsmtz">shsmtz</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_35949" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=35949&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_35949"><a href="viewthread.php?tid=35949&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">海关根据新闻出版总局审查指令扣查网购书籍</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=11092">赵三皮</a>
										</cite>
					<em>2010-1-25</em>
				</td>
				<td class="nums"><strong>38</strong> / <em>1077</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=35949&goto=lastpost#lastpost">2010-1-27 13:03</a></em>
					<cite>by <a href="space.php?username=%B2%E9%C0%ED%C3%CD%B8%C9">查理猛干</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_36137" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=36137&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_36137"><a href="viewthread.php?tid=36137&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">东莞“双刀男”</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1979">某某鸟人</a>
										</cite>
					<em>2010-1-27</em>
				</td>
				<td class="nums"><strong>38</strong> / <em>1239</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=36137&goto=lastpost#lastpost">2010-1-29 14:06</a></em>
					<cite>by <a href="space.php?username=YOYO">YOYO</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_36918" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=36918&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_36918"><a href="viewthread.php?tid=36918&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传，央视春晚门票一张一万</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4705">dreamingly</a>
										</cite>
					<em>2010-2-5</em>
				</td>
				<td class="nums"><strong>38</strong> / <em>817</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=36918&goto=lastpost#lastpost">2010-2-8 16:36</a></em>
					<cite>by <a href="space.php?username=%C4%DF%C7%EF">倪秋</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_38150" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=38150&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_38150"><a href="viewthread.php?tid=38150&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">中国遥感卫星“风云1号”被发现碎裂</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=144">mfs0616</a>
										</cite>
					<em>2010-2-21</em>
				</td>
				<td class="nums"><strong>38</strong> / <em>1505</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=38150&goto=lastpost#lastpost">2010-3-1 15:48</a></em>
					<cite>by <a href="space.php?username=%CF%F4%D5%F1%D2%C2">萧振衣</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_38700" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=38700&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_38700"><a href="viewthread.php?tid=38700&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">专家称传播兽兽不雅视频40次将可判刑两年</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3349">michael.zy</a>
										</cite>
					<em>2010-2-27</em>
				</td>
				<td class="nums"><strong>38</strong> / <em>1103</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=38700&goto=lastpost#lastpost">2010-3-2 10:23</a></em>
					<cite>by <a href="space.php?username=%CE%E5%B4%FA%CD%B7%C4%BF%CF%AE%BD%FC%C6%BF">五代头目袭近瓶</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_39089" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=39089&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_39089"><a href="viewthread.php?tid=39089&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">《环球时报》老总：英文版唯一禁区是领导人私生活</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=10069">orangeking</a>
										</cite>
					<em>2010-3-3</em>
				</td>
				<td class="nums"><strong>38</strong> / <em>1324</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=39089&goto=lastpost#lastpost">2010-3-4 22:15</a></em>
					<cite>by <a href="space.php?username=kiwi16">kiwi16</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_6475" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=6475&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_6475"><a href="viewthread.php?tid=6475&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">张海迪姐姐很不负责的提案</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2229">[17]堂吉柯德</a>
										</cite>
					<em>2009-3-7</em>
				</td>
				<td class="nums"><strong>38</strong> / <em>1152</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=6475&goto=lastpost#lastpost">2009-3-11 00:00</a></em>
					<cite>by <a href="space.php?username=Candice">Candice</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_6740" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=6740&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_6740"><a href="viewthread.php?tid=6740&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">骑上他老人家的脖子 舒适安全称心</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1565">bison</a>
										</cite>
					<em>2009-2-19</em>
				</td>
				<td class="nums"><strong>38</strong> / <em>768</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=6740&goto=lastpost#lastpost">2009-3-11 10:28</a></em>
					<cite>by <a href="space.php?username=shasha42">shasha42</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_7098" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=7098&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_7098"><a href="viewthread.php?tid=7098&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">南海疆域丢失 中国为何不敢用兵？</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4276">HENGXIN</a>
										</cite>
					<em>2009-3-15</em>
				</td>
				<td class="nums"><strong>38</strong> / <em>843</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=7098&goto=lastpost#lastpost">2009-3-19 03:17</a></em>
					<cite>by <a href="space.php?username=WJ87">WJ87</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_55722" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=55722&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_55722"><a href="viewthread.php?tid=55722&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">北京特大卖淫集团培训小姐免费服务警察</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=803">weke</a>
										</cite>
					<em>2010-8-17</em>
				</td>
				<td class="nums"><strong>38</strong> / <em>1516</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=55722&goto=lastpost#lastpost">2010-8-19 08:31</a></em>
					<cite>by <a href="space.php?username=%C4%C3%B4%D0%C4%C7%CE%BB%B4%F3%C9%F4">拿葱那位大婶</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_50361" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=50361&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_50361"><a href="viewthread.php?tid=50361&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">南京将成为首个进行党内公推直选的城市</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=12596">yangharrylg</a>
										</cite>
					<em>2010-6-22</em>
				</td>
				<td class="nums"><strong>38</strong> / <em>1093</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=50361&goto=lastpost#lastpost">2010-8-21 06:49</a></em>
					<cite>by <a href="space.php?username=%BC%BC%B9%A4">技工</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_56074" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=56074&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_56074"><a href="viewthread.php?tid=56074&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">厦门捣毁一鼓吹“性自由”集体淫乱邪教窝点</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2232">老杂疫</a>
										</cite>
					<em>2010-8-21</em>
				</td>
				<td class="nums"><strong>38</strong> / <em>1543</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=56074&goto=lastpost#lastpost">2010-8-25 09:36</a></em>
					<cite>by <a href="space.php?username=one">one</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_56735" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=56735&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_56735"><a href="viewthread.php?tid=56735&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">摇滚英雄演唱会在工体举行</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=852">未来他老爸</a>
										</cite>
					<em>2010-8-29</em>
				</td>
				<td class="nums"><strong>38</strong> / <em>836</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=56735&goto=lastpost#lastpost">2010-8-30 16:12</a></em>
					<cite>by <a href="space.php?username=GELI">GELI</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_58044" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=58044&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_58044"><a href="viewthread.php?tid=58044&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">湖北一村民在自家后山挖出金矿被政府依法掠走</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4570">我卖糕的</a>
										</cite>
					<em>2010-9-10</em>
				</td>
				<td class="nums"><strong>38</strong> / <em>1014</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=58044&goto=lastpost#lastpost">2010-9-12 13:00</a></em>
					<cite>by <a href="space.php?username=%B8%DF%BA%F4%BF%DA%BA%C5">高呼口号</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_57894" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=57894&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_57894"><a href="viewthread.php?tid=57894&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">宗庆后婉拒巴菲特邀请：光捐钱非真慈善</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4570">我卖糕的</a>
										</cite>
					<em>2010-9-9</em>
				</td>
				<td class="nums"><strong>38</strong> / <em>812</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=57894&goto=lastpost#lastpost">2010-9-12 22:55</a></em>
					<cite>by <a href="space.php?username=coeus">coeus</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_58395" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=58395&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_58395"><a href="viewthread.php?tid=58395&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">天津市津南区日本人学校保安室遭枪击</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=13468">C.C.</a>
										</cite>
					<em>2010-9-13</em>
				</td>
				<td class="nums"><strong>38</strong> / <em>1044</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=58395&goto=lastpost#lastpost">2010-9-15 10:24</a></em>
					<cite>by <a href="space.php?username=%CD%B8%C2%B6%C9%E7%BC%C7%D5%DF">透露社记者</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_58930" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=58930&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_58930"><a href="viewthread.php?tid=58930&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">温家宝下令全力追查海外媒体对其和其家族的负面报导</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=18649">wenjb</a>
										</cite>
					<em>2010-9-18</em>
				</td>
				<td class="nums"><strong>38</strong> / <em>1687</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=58930&goto=lastpost#lastpost">2010-9-21 08:27</a></em>
					<cite>by <a href="space.php?username=likeanime">likeanime</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_60790" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=60790&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_60790"><a href="viewthread.php?tid=60790&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">俄媒称诺贝尔和平奖沦为西方政治工具</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=19018">苍狼栖月</a>
										</cite>
					<em>2010-10-10</em>
				</td>
				<td class="nums"><strong>38</strong> / <em>972</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=60790&goto=lastpost#lastpost">2010-10-11 21:01</a></em>
					<cite>by <a href="space.php?username=%CD%B8%C2%B6%C9%E7%BC%C7%D5%DF">透露社记者</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_54517" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=54517&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_54517"><a href="viewthread.php?tid=54517&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">八旬老军人救落水老妇 要获救者找媒体宣传</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=13098">石沉溪洞</a>
										</cite>
					<em>2010-8-1</em>
				</td>
				<td class="nums"><strong>37</strong> / <em>667</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=54517&goto=lastpost#lastpost">2010-8-6 11:42</a></em>
					<cite>by <a href="space.php?username=sus">sus</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_55074" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=55074&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_55074"><a href="viewthread.php?tid=55074&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传北京市文化局正式吊销德云社演出许可证</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=12310">炽鸢侯</a>
										</cite>
					<em>2010-8-9</em>
				</td>
				<td class="nums"><strong>37</strong> / <em>1238</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=55074&goto=lastpost#lastpost">2010-8-11 19:22</a></em>
					<cite>by <a href="space.php?username=%B7%A2%B7%E0%CD%BF%C7%BD">发粪涂墙</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_55538" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=55538&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_55538"><a href="viewthread.php?tid=55538&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">天津市盲人协会组织盲人免费“观看”唐山大地震</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8379">Yhard</a>
										</cite>
					<em>2010-8-15</em>
				</td>
				<td class="nums"><strong>37</strong> / <em>821</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=55538&goto=lastpost#lastpost">2010-8-18 10:55</a></em>
					<cite>by <a href="space.php?username=%C9%A2%B9%E2">散光</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_55613" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=55613&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_55613"><a href="viewthread.php?tid=55613&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">朝鲜高干子弟无视当局禁令 热捧韩国组合</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7002">luugoo</a>
										</cite>
					<em>2010-8-16</em>
				</td>
				<td class="nums"><strong>37</strong> / <em>1292</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=55613&goto=lastpost#lastpost">2010-8-18 17:03</a></em>
					<cite>by <a href="space.php?username=%C0%B4%D2%B2">来也</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_56142" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=56142&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_56142"><a href="viewthread.php?tid=56142&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">江西乐安大规模警民冲突 副局长被打跪地求饶</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=17927">nik10000</a>
										</cite>
					<em>2010-8-22</em>
				</td>
				<td class="nums"><strong>37</strong> / <em>1469</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=56142&goto=lastpost#lastpost">2010-8-24 10:02</a></em>
					<cite>by <a href="space.php?username=%CB%FB%C9%BD%D6%AE%CA%AF">他山之石</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_58194" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=58194&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_58194"><a href="viewthread.php?tid=58194&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">林昭与张志新铜雕正式发布</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=13149">dier</a>
										</cite>
					<em>2010-9-10</em>
				</td>
				<td class="nums"><strong>37</strong> / <em>1023</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=58194&goto=lastpost#lastpost">2010-9-13 23:33</a></em>
					<cite>by <a href="space.php?username=%CE%C4%C9%BD%B0%CB%CA%C2">文山八事</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_59230" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=59230&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_59230"><a href="viewthread.php?tid=59230&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">薄熙来感叹月饼价格高</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=17047">壹玖捌肆</a>
										</cite>
					<em>2010-9-23</em>
				</td>
				<td class="nums"><strong>37</strong> / <em>1164</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=59230&goto=lastpost#lastpost">2010-9-26 09:17</a></em>
					<cite>by <a href="space.php?username=dfyfhqs">dfyfhqs</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_60142" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=60142&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_60142"><a href="viewthread.php?tid=60142&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">日本足球队山东遭抢国旗</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6314">hhbcl1414</a>
										</cite>
					<em>2010-10-4</em>
				</td>
				<td class="nums"><strong>37</strong> / <em>914</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=60142&goto=lastpost#lastpost">2010-10-7 15:41</a></em>
					<cite>by <a href="space.php?username=kb24">kb24</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_60378" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=60378&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_60378"><a href="viewthread.php?tid=60378&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">上海出台楼市调控细则：居民限购一套房</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=12412">wangguoping</a>
										</cite>
					<em>2010-10-8</em>
				</td>
				<td class="nums"><strong>37</strong> / <em>769</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=60378&goto=lastpost#lastpost">2010-10-11 15:27</a></em>
					<cite>by <a href="space.php?username=%B0%A2%C4%BD">阿慕</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_48006" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=48006&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_48006"><a href="viewthread.php?tid=48006&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">温家宝将接受日本NHK电视台专访</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=12412">wangguoping</a>
										</cite>
					<em>2010-5-29</em>
				</td>
				<td class="nums"><strong>37</strong> / <em>1372</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=48006&goto=lastpost#lastpost">2010-6-3 15:58</a></em>
					<cite>by <a href="space.php?username=%BA%CD%D0%B3%C5%C6%BA%D3%D0%B7">和谐牌河蟹</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_48340" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=48340&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_48340"><a href="viewthread.php?tid=48340&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">北大教授孙东东：记者没文化 《人民日报》的除外</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=852">未来他老爸</a>
										</cite>
					<em>2010-6-7</em>
				</td>
				<td class="nums"><strong>37</strong> / <em>691</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=48340&goto=lastpost#lastpost">2010-6-8 01:18</a></em>
					<cite>by <a href="space.php?username=%CA%AF%B7%F2">石夫</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_51778" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=51778&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_51778"><a href="viewthread.php?tid=51778&amp;extra=page%3D40%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">谷歌在中国执照获续期</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1752">peteryang84</a>
										</cite>
					<em>2010-6-30</em>
				</td>
				<td class="nums"><strong>37</strong> / <em>1235</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=51778&goto=lastpost#lastpost">2010-7-6 11:15</a></em>
					<cite>by <a href="space.php?username=kisspussy">kisspussy</a></cite>
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
	<div class="pages"><em>&nbsp;22278&nbsp;</em><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=1" class="first">1 ...</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=39" class="prev">&lsaquo;&lsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=38">38</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=39">39</a><strong>40</strong><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=41">41</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=42">42</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=43">43</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=44">44</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=45">45</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=46">46</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=47">47</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=41" class="next">&rsaquo;&rsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=349" class="last">... 349</a><kbd><input type="text" name="custompage" size="3" onkeydown="if(event.keyCode==13) {window.location='forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page='+this.value; return false;}" /></kbd></div>	</div>

  
	<div class="box">
			<span class="headactions"><a href="forumdisplay.php?fid=2&amp;page=40&amp;showoldetails=yes#online" class="nobdr"><img src="images/default/collapsed_yes.gif" alt="" /></a></span>
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
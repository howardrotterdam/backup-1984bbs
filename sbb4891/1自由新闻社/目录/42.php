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
			window.location = 'forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&page=41';
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
<div class="pages"><em>&nbsp;22278&nbsp;</em><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=1" class="first">1 ...</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=41" class="prev">&lsaquo;&lsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=40">40</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=41">41</a><strong>42</strong><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=43">43</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=44">44</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=45">45</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=46">46</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=47">47</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=48">48</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=49">49</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=43" class="next">&rsaquo;&rsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=349" class="last">... 349</a><kbd><input type="text" name="custompage" size="3" onkeydown="if(event.keyCode==13) {window.location='forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page='+this.value; return false;}" /></kbd></div></div>

<div style="float:left;border:1px solid #CCC; border-bottom:none;;width:218px; background: url(/imgs/1984radio.jpg) 200px 2px no-repeat;padding:5px 0 5px 12px;margin:0px 0 0 13px">

<p><b><a href="/radio/index.php" target="_blank">1984FM</a></b><br /><b><a href="https://voxli.com/1984bbs" target="_blank">1984Chat</a></b>&nbsp;</p> 
</div>

<div style="clear:both;height:0px;width:100%;font-size:1px;">&nbsp;</div>

	<ul class="popupmenu_popup newspecialmenu" id="newspecial_menu" style="display: none">
		<li><a href="post.php?action=newthread&amp;fid=2&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">发新话题</a></li>		<li class="poll"><a href="post.php?action=newthread&amp;fid=2&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;special=1">发布投票</a></li>													</ul>
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

					<tbody id="normalthread_7725" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=7725&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_7725"><a href="viewthread.php?tid=7725&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">哈维尔会见徐友渔、莫少平、崔卫平</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=476">会飞的猪</a>
										</cite>
					<em>2009-3-16</em>
				</td>
				<td class="nums"><strong>37</strong> / <em>1075</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=7725&goto=lastpost#lastpost">2009-3-24 22:33</a></em>
					<cite>by <a href="space.php?username=leaflet">leaflet</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_7650" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=7650&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_7650"><a href="viewthread.php?tid=7650&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">反政府地下教会成立</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7">张书记</a>
										</cite>
					<em>2009-3-23</em>
				</td>
				<td class="nums"><strong>37</strong> / <em>816</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=7650&goto=lastpost#lastpost">2009-3-25 12:40</a></em>
					<cite>by <a href="space.php?username=%B3%D4%BA%D3%D0%B7%B5%C4%B2%DD%C4%E0%F1R">吃河蟹的草泥馬</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_8222" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=8222&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_8222"><a href="viewthread.php?tid=8222&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">关于嫖娼那些事儿</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1418">lingfeitx</a>
										</cite>
					<em>2009-4-1</em>
				</td>
				<td class="nums"><strong>37</strong> / <em>1389</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=8222&goto=lastpost#lastpost">2009-4-3 14:37</a></em>
					<cite>by <a href="space.php?username=lyf98023">lyf98023</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_8268" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=8268&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_8268"><a href="viewthread.php?tid=8268&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">与解放军同学的聊天</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1121">小荷1120</a>
										</cite>
					<em>2009-4-1</em>
				</td>
				<td class="nums"><strong>37</strong> / <em>968</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=8268&goto=lastpost#lastpost">2009-4-6 00:45</a></em>
					<cite>by <a href="space.php?username=%D4%C6%C1%EB%C5%A9%B3%A1%D6%F7">云岭农场主</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_8507" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=8507&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_8507"><a href="viewthread.php?tid=8507&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">中国建航母你愿意捐多少</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3202">glim</a>
										</cite>
					<em>2009-4-4</em>
				</td>
				<td class="nums"><strong>37</strong> / <em>607</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=8507&goto=lastpost#lastpost">2009-4-7 00:12</a></em>
					<cite>by <a href="space.php?username=%BA%CE%BD%F0%CB%AE">何金水</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_8323" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=8323&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_8323"><a href="viewthread.php?tid=8323&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">罕见的国际分析强文，读后拨云见日清新心志</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5269">12楼的运气</a>
										</cite>
					<em>2009-4-2</em>
				</td>
				<td class="nums"><strong>37</strong> / <em>934</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=8323&goto=lastpost#lastpost">2009-4-9 10:03</a></em>
					<cite>by <a href="space.php?username=%BE%F8%B2%BB%B8%B6%D5%CB">绝不付账</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_8725" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=8725&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_8725"><a href="viewthread.php?tid=8725&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">泄密一个惊天坏消息</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3339">机器猫阿福</a>
										</cite>
					<em>2009-4-9</em>
				</td>
				<td class="nums"><strong>37</strong> / <em>1329</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=8725&goto=lastpost#lastpost">2009-4-11 17:08</a></em>
					<cite>by <a href="space.php?username=%C0%D7%CB%C0%B2%BB%B3%A5%C3%FC">雷死不偿命</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_13379" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=13379&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_13379"><a href="viewthread.php?tid=13379&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">可靠信源称：许市长的相好是汤唯</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2789">RFI曹国星</a>
										</cite>
					<em>2009-6-12</em>
				</td>
				<td class="nums"><strong>37</strong> / <em>1491</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=13379&goto=lastpost#lastpost">2009-6-13 02:05</a></em>
					<cite>by <a href="space.php?username=%D4%C6%C1%EB%C5%A9%B3%A1%D6%F7">云岭农场主</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_10846" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=10846&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_10846"><a href="viewthread.php?tid=10846&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">未经真理部美化的民间拍摄川震现场</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7">张书记</a>
										</cite>
					<em>2009-5-13</em>
				</td>
				<td class="nums"><strong>37</strong> / <em>1289</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=10846&goto=lastpost#lastpost">2009-6-21 21:09</a></em>
					<cite>by <a href="space.php?username=%CC%D2%D7%D3%C3%A8%C2%E9">桃子猫麻</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_15450" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=15450&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_15450"><a href="viewthread.php?tid=15450&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">日本人评价上海大厦倒塌：真是童话般国家</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=910">朱翠</a>
										</cite>
					<em>2009-6-30</em>
				</td>
				<td class="nums"><strong>37</strong> / <em>1262</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=15450&goto=lastpost#lastpost">2009-7-5 10:04</a></em>
					<cite>by <a href="space.php?username=ilikecunny">ilikecunny</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_15724" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=15724&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_15724"><a href="viewthread.php?tid=15724&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">黑龙江边防官兵向老猎手学习伪装和射击技能</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2495">深入裙中</a>
										</cite>
					<em>2009-7-3</em>
				</td>
				<td class="nums"><strong>37</strong> / <em>599</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=15724&goto=lastpost#lastpost">2009-7-6 20:15</a></em>
					<cite>by <a href="space.php?username=qqceo">qqceo</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_16378" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=16378&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_16378"><a href="viewthread.php?tid=16378&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">武警指战员由上海各机场开赴西北某地军演</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5759">路边社刊要</a>
										</cite>
					<em>2009-7-10</em>
				</td>
				<td class="nums"><strong>37</strong> / <em>937</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=16378&goto=lastpost#lastpost">2009-7-12 01:15</a></em>
					<cite>by <a href="space.php?username=philips478">philips478</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_16364" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=16364&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_16364"><a href="viewthread.php?tid=16364&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">杭州市区出现多辆军用卡车运送装甲车</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3463">未分级</a>
										</cite>
					<em>2009-7-10</em>
				</td>
				<td class="nums"><strong>37</strong> / <em>1090</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=16364&goto=lastpost#lastpost">2009-7-12 18:43</a></em>
					<cite>by <a href="space.php?username=ccjing123">ccjing123</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_17808" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=17808&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_17808"><a href="viewthread.php?tid=17808&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">滕彪：公盟不死</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3227">快乐流浪汉</a>
										</cite>
					<em>2009-7-25</em>
				</td>
				<td class="nums"><strong>37</strong> / <em>511</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=17808&goto=lastpost#lastpost">2009-7-28 12:29</a></em>
					<cite>by <a href="space.php?username=%D0%A1%B4%E5">小村</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_18032" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=18032&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_18032"><a href="viewthread.php?tid=18032&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">情妇达人徐其耀：儿子，知识会害了你</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=134">丁丁</a>
										</cite>
					<em>2009-7-28</em>
				</td>
				<td class="nums"><strong>37</strong> / <em>899</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=18032&goto=lastpost#lastpost">2009-7-29 19:57</a></em>
					<cite>by <a href="space.php?username=%D7%F3%B0%B6%A1%FB%D3%D2%B0%B6">左岸←右岸</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_19704" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=19704&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_19704"><a href="viewthread.php?tid=19704&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">党内最近出来的一份毛泽东秘密档案否定“辉煌60年”</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5588">我家旺财有喜了</a>
										</cite>
					<em>2009-8-14</em>
				</td>
				<td class="nums"><strong>37</strong> / <em>1468</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=19704&goto=lastpost#lastpost">2009-8-17 11:10</a></em>
					<cite>by <a href="space.php?username=wangjiu-9">wangjiu-9</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_19832" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=19832&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_19832"><a href="viewthread.php?tid=19832&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">不许联想之：张书记李市长，我们爱您</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=448">路边社总编室</a>
										</cite>
					<em>2009-8-15</em>
				</td>
				<td class="nums"><strong>37</strong> / <em>1077</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=19832&goto=lastpost#lastpost">2009-8-17 23:13</a></em>
					<cite>by <a href="space.php?username=mingyuejihe">mingyuejihe</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_20033" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=20033&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_20033"><a href="viewthread.php?tid=20033&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">国民之痛：抗生素的滥用</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7774">littlesun888</a>
										</cite>
					<em>2009-8-18</em>
				</td>
				<td class="nums"><strong>37</strong> / <em>649</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=20033&goto=lastpost#lastpost">2009-8-21 13:13</a></em>
					<cite>by <a href="space.php?username=LOVSSE">LOVSSE</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_15978" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=15978&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_15978"><a href="viewthread.php?tid=15978&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">快讯：Twitter被墙</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2428">xiahua</a>
										</cite>
					<em>2009-7-6</em>
				</td>
				<td class="nums"><strong>37</strong> / <em>941</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=15978&goto=lastpost#lastpost">2009-8-24 16:29</a></em>
					<cite>by <a href="space.php?username=feng200186">feng200186</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_20539" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=20539&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_20539"><a href="viewthread.php?tid=20539&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">真理部最新指令：各网删除《古老魔咒》</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1258">路边社记者</a>
										</cite>
					<em>2009-8-25</em>
				</td>
				<td class="nums"><strong>37</strong> / <em>911</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=20539&goto=lastpost#lastpost">2009-8-26 03:13</a></em>
					<cite>by <a href="space.php?username=%CE%F7%C3%C5%B4%B5%C5%A3">西门吹牛</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_20465" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=20465&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_20465"><a href="viewthread.php?tid=20465&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">真理部最新指令：各网务必用大块儿红色营造国庆喜庆气氛</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5759">路边社刊要</a>
										</cite>
					<em>2009-8-24</em>
				</td>
				<td class="nums"><strong>37</strong> / <em>983</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=20465&goto=lastpost#lastpost">2009-8-26 09:39</a></em>
					<cite>by <a href="space.php?username=missixthed">missixthed</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_33723" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=33723&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_33723"><a href="viewthread.php?tid=33723&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">深圳公安称副局长嫁女花49万收3.6万不算敛财</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7231">海风</a>
										</cite>
					<em>2010-1-6</em>
				</td>
				<td class="nums"><strong>37</strong> / <em>552</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=33723&goto=lastpost#lastpost">2010-1-7 19:16</a></em>
					<cite>by <a href="space.php?username=%CE%F7%C3%C5%B4%B5%C5%A3">西门吹牛</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_33400" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=33400&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_33400"><a href="viewthread.php?tid=33400&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">大陆人新年希望：买新房 看得起病 有工作</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6314">hhbcl1414</a>
										</cite>
					<em>2010-1-3</em>
				</td>
				<td class="nums"><strong>37</strong> / <em>620</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=33400&goto=lastpost#lastpost">2010-1-11 12:21</a></em>
					<cite>by <a href="space.php?username=quegai361">quegai361</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_34450" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=34450&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_34450"><a href="viewthread.php?tid=34450&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">党媒：Twitter导致谋杀案，流毒甚广</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7211">foxtaugh</a>
										</cite>
					<em>2010-1-12</em>
				</td>
				<td class="nums"><strong>37</strong> / <em>1261</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=34450&goto=lastpost#lastpost">2010-1-13 17:49</a></em>
					<cite>by <a href="space.php?username=%C0%CF%B8%C9%B2%BF">老干部</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_35136" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=35136&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_35136"><a href="viewthread.php?tid=35136&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">马云：愿意提供中国政府所要求的任何信息</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3202">glim</a>
										</cite>
					<em>2010-1-17</em>
				</td>
				<td class="nums"><strong>37</strong> / <em>1426</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=35136&goto=lastpost#lastpost">2010-1-19 10:17</a></em>
					<cite>by <a href="space.php?username=lxr1207">lxr1207</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_36082" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=36082&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_36082"><a href="viewthread.php?tid=36082&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">关于英语退出高考的构想引起关注</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7002">luugoo</a>
										</cite>
					<em>2010-1-27</em>
				</td>
				<td class="nums"><strong>37</strong> / <em>770</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=36082&goto=lastpost#lastpost">2010-1-28 13:44</a></em>
					<cite>by <a href="space.php?username=pinkerbean">pinkerbean</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_36874" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=36874&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_36874"><a href="viewthread.php?tid=36874&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">李克强出席纪念姬鹏飞诞辰100周年座谈会</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=852">未来他老爸</a>
										</cite>
					<em>2010-2-3</em>
				</td>
				<td class="nums"><strong>37</strong> / <em>1315</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=36874&goto=lastpost#lastpost">2010-2-8 21:17</a></em>
					<cite>by <a href="space.php?username=%C4%C7%B8%F6%CB%AD">那个谁</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_37283" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=37283&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_37283"><a href="viewthread.php?tid=37283&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">川震维权人士黄琦因“非法持有国家机密罪”罪被判刑3年</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2160">浣尘</a>
										</cite>
					<em>2009-11-23</em>
				</td>
				<td class="nums"><strong>37</strong> / <em>816</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=37283&goto=lastpost#lastpost">2010-2-9 11:32</a></em>
					<cite>by <a href="space.php?username=%CE%D2%B1%BE%D2%AE%CB%D6">我本耶酥</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_33600" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=33600&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_33600"><a href="viewthread.php?tid=33600&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">国务院批准海南试水博彩业 建国际旅游岛</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1770">nustbobo</a>
										</cite>
					<em>2010-1-5</em>
				</td>
				<td class="nums"><strong>36</strong> / <em>782</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=33600&goto=lastpost#lastpost">2010-1-6 19:49</a></em>
					<cite>by <a href="space.php?username=YOYO">YOYO</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_33577" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=33577&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_33577"><a href="viewthread.php?tid=33577&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">宝马不满被超逼停出租车 众的哥将其掀翻</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4570">我卖糕的</a>
										</cite>
					<em>2010-1-4</em>
				</td>
				<td class="nums"><strong>36</strong> / <em>1253</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=33577&goto=lastpost#lastpost">2010-1-8 14:14</a></em>
					<cite>by <a href="space.php?username=%B4%F3%C8%CB%A3%AC%D3%D0%D0%D8%C6%F7">大人，有胸器</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_34261" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=34261&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_34261"><a href="viewthread.php?tid=34261&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">民族团结柱 难觅安身处</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7002">luugoo</a>
										</cite>
					<em>2010-1-11</em>
				</td>
				<td class="nums"><strong>36</strong> / <em>718</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=34261&goto=lastpost#lastpost">2010-1-13 12:46</a></em>
					<cite>by <a href="space.php?username=matnux">matnux</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_34297" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=34297&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_34297"><a href="viewthread.php?tid=34297&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">刘翔：跟着党走就可以</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3202">glim</a>
										</cite>
					<em>2010-1-11</em>
				</td>
				<td class="nums"><strong>36</strong> / <em>1125</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=34297&goto=lastpost#lastpost">2010-1-13 16:27</a></em>
					<cite>by <a href="space.php?username=%D2%AE%CD%F6%C9%D0">耶亡尚</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_34719" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=34719&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_34719"><a href="viewthread.php?tid=34719&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">真理部最新指令：各网删除网友为谷歌中国公司献花的图片</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5588">我家旺财有喜了</a>
										</cite>
					<em>2010-1-14</em>
				</td>
				<td class="nums"><strong>36</strong> / <em>1604</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=34719&goto=lastpost#lastpost">2010-1-15 23:07</a></em>
					<cite>by <a href="space.php?username=%CD%B8%C2%B6%C9%E7%BC%C7%D5%DF">透露社记者</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_35141" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=35141&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_35141"><a href="viewthread.php?tid=35141&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">CCTV搜索引擎上线</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=11636">发粪涂墙</a>
										</cite>
					<em>2010-1-14</em>
				</td>
				<td class="nums"><strong>36</strong> / <em>1061</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=35141&goto=lastpost#lastpost">2010-1-18 10:11</a></em>
					<cite>by <a href="space.php?username=offacer">offacer</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_35511" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=35511&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_35511"><a href="viewthread.php?tid=35511&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">成龙向中国遇难维和警察家属和部队捐赠500万</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8575">opeliu</a>
										</cite>
					<em>2010-1-21</em>
				</td>
				<td class="nums"><strong>36</strong> / <em>571</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=35511&goto=lastpost#lastpost">2010-1-25 23:25</a></em>
					<cite>by <a href="space.php?username=mafanpk">mafanpk</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_36238" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=36238&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_36238"><a href="viewthread.php?tid=36238&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">上海访民维权抗暴 高喊打倒共产党</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=11422">jimine</a>
										</cite>
					<em>2010-1-28</em>
				</td>
				<td class="nums"><strong>36</strong> / <em>1654</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=36238&goto=lastpost#lastpost">2010-1-29 20:58</a></em>
					<cite>by <a href="space.php?username=woaixumai">woaixumai</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_36337" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=36337&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_36337"><a href="viewthread.php?tid=36337&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">86岁囚犯服刑半个世纪跟不上时代不愿出狱</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2362">呼噜必烈</a>
										</cite>
					<em>2010-1-29</em>
				</td>
				<td class="nums"><strong>36</strong> / <em>920</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=36337&goto=lastpost#lastpost">2010-2-4 13:38</a></em>
					<cite>by <a href="space.php?username=%D0%A1%D6%ED%D2%C0%C8%CB">小猪依人</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_36695" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=36695&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_36695"><a href="viewthread.php?tid=36695&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">统战部：中央对达赖提出“四个不容”</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6740">wangjiu-9</a>
										</cite>
					<em>2010-2-2</em>
				</td>
				<td class="nums"><strong>36</strong> / <em>839</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=36695&goto=lastpost#lastpost">2010-2-5 16:28</a></em>
					<cite>by <a href="space.php?username=%B5%A5%CA%D6%B7%F6%C7%BD">单手扶墙</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_37074" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=37074&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_37074"><a href="viewthread.php?tid=37074&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">胡家乡泰州街头标语</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1408">becom</a>
										</cite>
					<em>2010-2-6</em>
				</td>
				<td class="nums"><strong>36</strong> / <em>1473</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=37074&goto=lastpost#lastpost">2010-2-8 13:00</a></em>
					<cite>by <a href="space.php?username=ChrisDempsey">ChrisDempsey</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_37245" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=37245&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_37245"><a href="viewthread.php?tid=37245&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">全日空要冯正虎“深刻反省”方可搭乘</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8301">lqunl</a>
										</cite>
					<em>2010-2-7</em>
				</td>
				<td class="nums"><strong>36</strong> / <em>1055</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=37245&goto=lastpost#lastpost">2010-2-9 21:00</a></em>
					<cite>by <a href="space.php?username=platism">platism</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_37438" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=37438&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_37438"><a href="viewthread.php?tid=37438&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">司徒华患肺癌晚期，愿带病回乡探望谭作人刘晓波</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=9508">interstate</a>
										</cite>
					<em>2010-2-6</em>
				</td>
				<td class="nums"><strong>36</strong> / <em>825</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=37438&goto=lastpost#lastpost">2010-2-11 23:10</a></em>
					<cite>by <a href="space.php?username=fly8karen">fly8karen</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_38154" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=38154&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_38154"><a href="viewthread.php?tid=38154&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">美国中情局在华文媒体登广告招募亚裔员工</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=9991">duck_1984</a>
										</cite>
					<em>2010-2-21</em>
				</td>
				<td class="nums"><strong>36</strong> / <em>833</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=38154&goto=lastpost#lastpost">2010-2-24 19:57</a></em>
					<cite>by <a href="space.php?username=nicegoal">nicegoal</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_10888" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=10888&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_10888"><a href="viewthread.php?tid=10888&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">王勇：国民党当年所谓白色恐怖究竟有多恐怖？</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2234">袖手看热闹</a>
										</cite>
					<em>2009-5-14</em>
				</td>
				<td class="nums"><strong>36</strong> / <em>639</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=10888&goto=lastpost#lastpost">2009-5-15 22:12</a></em>
					<cite>by <a href="space.php?username=%D7%F8%BF%B4%D4%C6%C6%F0">坐看云起</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_12035" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=12035&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_12035"><a href="viewthread.php?tid=12035&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传，北京南湖一条游船上匪首们召开不明会议</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3404">礼拜九</a>
										</cite>
					<em>2009-5-17</em>
				</td>
				<td class="nums"><strong>36</strong> / <em>1488</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=12035&goto=lastpost#lastpost">2009-5-28 23:54</a></em>
					<cite>by <a href="space.php?username=leaflet">leaflet</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_21447" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=21447&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_21447"><a href="viewthread.php?tid=21447&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">访民称：给影帝写信100次，无一回复</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7002">luugoo</a>
										</cite>
					<em>2009-9-5</em>
				</td>
				<td class="nums"><strong>36</strong> / <em>1016</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=21447&goto=lastpost#lastpost">2009-9-10 16:02</a></em>
					<cite>by <a href="space.php?username=one">one</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_21950" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=21950&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_21950"><a href="viewthread.php?tid=21950&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">新华网公布一亿群众投票结果</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=930">贱人渐智</a>
										</cite>
					<em>2009-9-11</em>
				</td>
				<td class="nums"><strong>36</strong> / <em>993</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=21950&goto=lastpost#lastpost">2009-9-14 22:11</a></em>
					<cite>by <a href="space.php?username=raymanic">raymanic</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_22338" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=22338&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_22338"><a href="viewthread.php?tid=22338&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">爱国者剃毛迎国庆</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7">张书记</a>
										</cite>
					<em>2009-9-15</em>
				</td>
				<td class="nums"><strong>36</strong> / <em>726</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=22338&goto=lastpost#lastpost">2009-9-16 12:52</a></em>
					<cite>by <a href="space.php?username=takfiri">takfiri</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_23248" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=23248&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_23248"><a href="viewthread.php?tid=23248&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">太妃上海排练素颜近照</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6421">耶律王其</a>
										</cite>
					<em>2009-9-24</em>
				</td>
				<td class="nums"><strong>36</strong> / <em>1691</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=23248&goto=lastpost#lastpost">2009-9-27 13:47</a></em>
					<cite>by <a href="space.php?username=green5206">green5206</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_22477" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=22477&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_22477"><a href="viewthread.php?tid=22477&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">受审因说“放屁”，青年遭法警当庭“拍脸”</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2907">无言的山丘</a>
										</cite>
					<em>2009-9-17</em>
				</td>
				<td class="nums"><strong>36</strong> / <em>882</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=22477&goto=lastpost#lastpost">2009-9-28 15:17</a></em>
					<cite>by <a href="space.php?username=%CD%CA%C9%ABFADEAWAY">褪色FADEAWAY</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_23747" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=23747&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_23747"><a href="viewthread.php?tid=23747&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">政府操劳，为翻墙网民人均补贴3万多</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2160">浣尘</a>
										</cite>
					<em>2009-9-28</em>
				</td>
				<td class="nums"><strong>36</strong> / <em>963</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=23747&goto=lastpost#lastpost">2009-9-30 09:29</a></em>
					<cite>by <a href="space.php?username=%BA%DC%CF%EB%B3%D4%BB%A8%C9%FA">很想吃花生</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_24661" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=24661&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_24661"><a href="viewthread.php?tid=24661&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">为十八大人事布局暗战 胡江斗左</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1686">奧斯卡金</a>
										</cite>
					<em>2009-10-10</em>
				</td>
				<td class="nums"><strong>36</strong> / <em>1837</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=24661&goto=lastpost#lastpost">2009-10-21 13:24</a></em>
					<cite>by <a href="space.php?username=waiting_it">waiting_it</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_55174" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=55174&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_55174"><a href="viewthread.php?tid=55174&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">《计算机世界》就封面报道向腾讯公司致歉</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=15783">裝傻小Q</a>
										</cite>
					<em>2010-8-11</em>
				</td>
				<td class="nums"><strong>36</strong> / <em>918</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=55174&goto=lastpost#lastpost">2010-8-13 23:33</a></em>
					<cite>by <a href="space.php?username=seabug">seabug</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_55983" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=55983&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_55983"><a href="viewthread.php?tid=55983&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">台湾将承认大陆40余所大学学历</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=16455">shiny</a>
										</cite>
					<em>2010-8-20</em>
				</td>
				<td class="nums"><strong>36</strong> / <em>735</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=55983&goto=lastpost#lastpost">2010-8-24 19:35</a></em>
					<cite>by <a href="space.php?username=%B7%A2%B7%E0%CD%BF%C7%BD">发粪涂墙</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_58043" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=58043&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_58043"><a href="viewthread.php?tid=58043&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">《春风沉醉的夜晚》在台湾“未审先禁”</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7002">luugoo</a>
										</cite>
					<em>2010-9-10</em>
				</td>
				<td class="nums"><strong>36</strong> / <em>1490</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=58043&goto=lastpost#lastpost">2010-9-14 09:29</a></em>
					<cite>by <a href="space.php?username=%C7%EF%C7%A7">秋千</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_53265" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=53265&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_53265"><a href="viewthread.php?tid=53265&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传温家宝女婿为内地金融界名流刘春航</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=803">weke</a>
										</cite>
					<em>2010-7-18</em>
				</td>
				<td class="nums"><strong>36</strong> / <em>2024</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=53265&goto=lastpost#lastpost">2010-9-18 11:24</a></em>
					<cite>by <a href="space.php?username=%D4%C2%C7%F2%D4%DA%CB%D5%D0%D1">月球在苏醒</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_58910" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=58910&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_58910"><a href="viewthread.php?tid=58910&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">马英九总统声援保钓</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=18239">showchina</a>
										</cite>
					<em>2010-9-18</em>
				</td>
				<td class="nums"><strong>36</strong> / <em>866</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=58910&goto=lastpost#lastpost">2010-9-23 00:37</a></em>
					<cite>by <a href="space.php?username=%C0%EE%CE%A2%B0%BD">李微敖</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_59903" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=59903&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_59903"><a href="viewthread.php?tid=59903&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">国税总局局长称“中国税负痛苦全球第二”是恶搞</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4570">我卖糕的</a>
										</cite>
					<em>2010-10-1</em>
				</td>
				<td class="nums"><strong>36</strong> / <em>1056</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=59903&goto=lastpost#lastpost">2010-10-4 23:43</a></em>
					<cite>by <a href="space.php?username=%CB%FB%C9%BD%D6%AE%CA%AF">他山之石</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_59995" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=59995&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_59995"><a href="viewthread.php?tid=59995&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">日本右翼发起全国示威行动</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=9517">老西</a>
										</cite>
					<em>2010-10-2</em>
				</td>
				<td class="nums"><strong>36</strong> / <em>2155</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=59995&goto=lastpost#lastpost">2010-10-5 00:08</a></em>
					<cite>by <a href="space.php?username=%B4%F3%D0l%CD%F5%EF%88%B5%EA">大衛王飯店</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_59984" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=59984&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_59984"><a href="viewthread.php?tid=59984&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">外企在江西高价收粮 当地数千粮企倒闭</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=12412">wangguoping</a>
										</cite>
					<em>2010-10-2</em>
				</td>
				<td class="nums"><strong>36</strong> / <em>917</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=59984&goto=lastpost#lastpost">2010-10-6 14:38</a></em>
					<cite>by <a href="space.php?username=%C7%EF%C7%A7">秋千</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_60559" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=60559&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_60559"><a href="viewthread.php?tid=60559&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">广西靖西县政府证实发生群众冲突</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=10890">xiaohe1120</a>
										</cite>
					<em>2010-7-14</em>
				</td>
				<td class="nums"><strong>36</strong> / <em>936</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=60559&goto=lastpost#lastpost">2010-10-9 11:09</a></em>
					<cite>by <a href="space.php?username=zhenhdong">zhenhdong</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_47525" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=47525&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_47525"><a href="viewthread.php?tid=47525&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">六四临近 呼吁关注刘晓波和胡佳等良心犯</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6887">不锈钢老鼠</a>
										</cite>
					<em>2010-5-28</em>
				</td>
				<td class="nums"><strong>36</strong> / <em>717</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=47525&goto=lastpost#lastpost">2010-5-31 10:51</a></em>
					<cite>by <a href="space.php?username=my2003sky">my2003sky</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_47546" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=47546&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_47546"><a href="viewthread.php?tid=47546&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">中国将精选100词向世界推广中华文化</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3202">glim</a>
										</cite>
					<em>2010-5-29</em>
				</td>
				<td class="nums"><strong>36</strong> / <em>550</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=47546&goto=lastpost#lastpost">2010-5-31 17:04</a></em>
					<cite>by <a href="space.php?username=eat7%C6%A4">eat7皮</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_48882" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=48882&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_48882"><a href="viewthread.php?tid=48882&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">四川谭作人“煽动颠覆”案终审维持原判</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=11098">爱我所爱</a>
										</cite>
					<em>2010-6-9</em>
				</td>
				<td class="nums"><strong>36</strong> / <em>712</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=48882&goto=lastpost#lastpost">2010-6-10 10:46</a></em>
					<cite>by <a href="space.php?username=chosun">chosun</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_48654" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=48654&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_48654"><a href="viewthread.php?tid=48654&amp;extra=page%3D42%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">真理部最新指令：各书店将刘鉴强《天珠》下架处理</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7497">mafanpk</a>
										</cite>
					<em>2010-6-8</em>
				</td>
				<td class="nums"><strong>36</strong> / <em>1649</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=48654&goto=lastpost#lastpost">2010-6-13 13:58</a></em>
					<cite>by <a href="space.php?username=qino">qino</a></cite>
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
	<div class="pages"><em>&nbsp;22278&nbsp;</em><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=1" class="first">1 ...</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=41" class="prev">&lsaquo;&lsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=40">40</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=41">41</a><strong>42</strong><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=43">43</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=44">44</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=45">45</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=46">46</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=47">47</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=48">48</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=49">49</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=43" class="next">&rsaquo;&rsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=349" class="last">... 349</a><kbd><input type="text" name="custompage" size="3" onkeydown="if(event.keyCode==13) {window.location='forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page='+this.value; return false;}" /></kbd></div>	</div>

  
	<div class="box">
			<span class="headactions"><a href="forumdisplay.php?fid=2&amp;page=42&amp;showoldetails=yes#online" class="nobdr"><img src="images/default/collapsed_yes.gif" alt="" /></a></span>
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
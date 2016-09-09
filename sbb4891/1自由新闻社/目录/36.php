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
			window.location = 'forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&page=35';
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
<div class="pages"><em>&nbsp;22278&nbsp;</em><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=1" class="first">1 ...</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=35" class="prev">&lsaquo;&lsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=34">34</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=35">35</a><strong>36</strong><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=37">37</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=38">38</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=39">39</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=40">40</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=41">41</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=42">42</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=43">43</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=37" class="next">&rsaquo;&rsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=349" class="last">... 349</a><kbd><input type="text" name="custompage" size="3" onkeydown="if(event.keyCode==13) {window.location='forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page='+this.value; return false;}" /></kbd></div></div>

<div style="float:left;border:1px solid #CCC; border-bottom:none;;width:218px; background: url(/imgs/1984radio.jpg) 200px 2px no-repeat;padding:5px 0 5px 12px;margin:0px 0 0 13px">

<p><b><a href="/radio/index.php" target="_blank">1984FM</a></b><br /><b><a href="https://voxli.com/1984bbs" target="_blank">1984Chat</a></b>&nbsp;</p> 
</div>

<div style="clear:both;height:0px;width:100%;font-size:1px;">&nbsp;</div>

	<ul class="popupmenu_popup newspecialmenu" id="newspecial_menu" style="display: none">
		<li><a href="post.php?action=newthread&amp;fid=2&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">发新话题</a></li>		<li class="poll"><a href="post.php?action=newthread&amp;fid=2&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;special=1">发布投票</a></li>													</ul>
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

					<tbody id="normalthread_47540" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=47540&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_47540"><a href="viewthread.php?tid=47540&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">北京要在新疆大力推行普通话教育</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=9517">老西</a>
										</cite>
					<em>2010-5-29</em>
				</td>
				<td class="nums"><strong>40</strong> / <em>471</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=47540&goto=lastpost#lastpost">2010-5-30 17:58</a></em>
					<cite>by <a href="space.php?username=%C2%ED%BF%CB%CE%F7">马克西</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_48198" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=48198&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_48198"><a href="viewthread.php?tid=48198&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">“天安门母亲” 发声明批中共</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8301">lqunl</a>
										</cite>
					<em>2010-6-3</em>
				</td>
				<td class="nums"><strong>40</strong> / <em>1257</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=48198&goto=lastpost#lastpost">2010-6-8 18:06</a></em>
					<cite>by <a href="space.php?username=investigate">investigate</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_48403" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=48403&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_48403"><a href="viewthread.php?tid=48403&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">殡葬用品店“寿衣模特”吓翻路人 警方介入</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8811">大衛王飯店</a>
										</cite>
					<em>2010-6-7</em>
				</td>
				<td class="nums"><strong>40</strong> / <em>1826</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=48403&goto=lastpost#lastpost">2010-6-12 14:26</a></em>
					<cite>by <a href="space.php?username=%D1%EF%B7%AB%CE%AA%D4%B6%BA%BD">扬帆为远航</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_49692" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=49692&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_49692"><a href="viewthread.php?tid=49692&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">世界杯朝鲜队五大离奇传闻多虚假</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3809">丫吃饱了没事干</a>
										</cite>
					<em>2010-6-16</em>
				</td>
				<td class="nums"><strong>40</strong> / <em>1471</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=49692&goto=lastpost#lastpost">2010-6-19 01:37</a></em>
					<cite>by <a href="space.php?username=%C9%F1%D2%FE%D6%AE%D7%F3%CA%D6">神隐之左手</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_50237" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=50237&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_50237"><a href="viewthread.php?tid=50237&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">习近平出访随行人员与支持西藏独立者发生肢体冲突</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8638">dark</a>
										</cite>
					<em>2010-6-18</em>
				</td>
				<td class="nums"><strong>40</strong> / <em>1777</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=50237&goto=lastpost#lastpost">2010-6-21 11:53</a></em>
					<cite>by <a href="space.php?username=aassaa">aassaa</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_50092" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=50092&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_50092"><a href="viewthread.php?tid=50092&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">河北高院副院长意外死亡 四个老婆抢尸体</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6723">卡哥</a>
										</cite>
					<em>2010-6-19</em>
				</td>
				<td class="nums"><strong>40</strong> / <em>1422</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=50092&goto=lastpost#lastpost">2010-6-21 21:22</a></em>
					<cite>by <a href="space.php?username=liufeihh">liufeihh</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_50260" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=50260&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_50260"><a href="viewthread.php?tid=50260&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">人民币兑美元创08年9月来最高水平&#8206;</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=14746">不再犹豫</a>
										</cite>
					<em>2010-6-21</em>
				</td>
				<td class="nums"><strong>40</strong> / <em>1163</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=50260&goto=lastpost#lastpost">2010-6-22 11:36</a></em>
					<cite>by <a href="space.php?username=elfix">elfix</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_51231" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=51231&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_51231"><a href="viewthread.php?tid=51231&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">巴拉圭点球大战战胜日本队</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=12310">炽鸢侯</a>
										</cite>
					<em>2010-6-30</em>
				</td>
				<td class="nums"><strong>40</strong> / <em>523</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=51231&goto=lastpost#lastpost">2010-7-2 14:51</a></em>
					<cite>by <a href="space.php?username=nathansam">nathansam</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_52860" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=52860&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_52860"><a href="viewthread.php?tid=52860&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">长沙理工大学挂标语 邀校长去食堂吃饭</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=13166">牛怒怒</a>
										</cite>
					<em>2010-7-15</em>
				</td>
				<td class="nums"><strong>40</strong> / <em>1486</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=52860&goto=lastpost#lastpost">2010-7-17 20:48</a></em>
					<cite>by <a href="space.php?username=%D6%CE%C9%A5%CE%AF%D4%B1%BB%E1">治丧委员会</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_54065" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=54065&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_54065"><a href="viewthread.php?tid=54065&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">真理部最新指令：立即进行网络专项整治行动</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1408">becom</a>
										</cite>
					<em>2010-7-27</em>
				</td>
				<td class="nums"><strong>40</strong> / <em>1366</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=54065&goto=lastpost#lastpost">2010-7-28 14:45</a></em>
					<cite>by <a href="space.php?username=xuanya">xuanya</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_54051" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=54051&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_54051"><a href="viewthread.php?tid=54051&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">中国海军首艘航母被指将铺设龙骨</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=17098">忽然不得零</a>
										</cite>
					<em>2010-7-27</em>
				</td>
				<td class="nums"><strong>40</strong> / <em>971</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=54051&goto=lastpost#lastpost">2010-7-29 21:52</a></em>
					<cite>by <a href="space.php?username=freehost01">freehost01</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_54240" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=54240&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_54240"><a href="viewthread.php?tid=54240&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">Facebook删伊斯兰教网页 2500万穆斯林欲退出</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1157">bester89</a>
										</cite>
					<em>2010-7-29</em>
				</td>
				<td class="nums"><strong>40</strong> / <em>955</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=54240&goto=lastpost#lastpost">2010-8-6 11:27</a></em>
					<cite>by <a href="space.php?username=%C2%E4%C9%B3">落沙</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_17677" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=17677&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_17677"><a href="viewthread.php?tid=17677&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">看看高丽国的野蛮无序  我朝确实好五倍……</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=852">未来他老爸</a>
										</cite>
					<em>2009-7-23</em>
				</td>
				<td class="nums"><strong>40</strong> / <em>945</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=17677&goto=lastpost#lastpost">2009-7-26 16:56</a></em>
					<cite>by <a href="space.php?username=%D0%A1%E5%B7%E5%B7">小宸宸</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_18231" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=18231&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_18231"><a href="viewthread.php?tid=18231&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">台湾用心险恶的要求：媒体对等开放 解除新闻管制</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2789">RFI曹国星</a>
										</cite>
					<em>2009-7-29</em>
				</td>
				<td class="nums"><strong>40</strong> / <em>708</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=18231&goto=lastpost#lastpost">2009-7-31 16:09</a></em>
					<cite>by <a href="space.php?username=%D3%F9%BD%A3%C7%F3%D4%B5">御剑求缘</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_18345" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=18345&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_18345"><a href="viewthread.php?tid=18345&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">《建国大业》将在中华民国上映</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6314">hhbcl1414</a>
										</cite>
					<em>2009-7-30</em>
				</td>
				<td class="nums"><strong>40</strong> / <em>666</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=18345&goto=lastpost#lastpost">2009-8-1 00:43</a></em>
					<cite>by <a href="space.php?username=chaewi">chaewi</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_19023" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=19023&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_19023"><a href="viewthread.php?tid=19023&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">庆十一主旋律又谱新篇章，大制作《天安门》隆重上映</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2428">xiahua</a>
										</cite>
					<em>2009-8-6</em>
				</td>
				<td class="nums"><strong>40</strong> / <em>606</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=19023&goto=lastpost#lastpost">2009-8-7 09:55</a></em>
					<cite>by <a href="space.php?username=SPNaCl">SPNaCl</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_18990" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=18990&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_18990"><a href="viewthread.php?tid=18990&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">中国首届妓女节</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=852">未来他老爸</a>
										</cite>
					<em>2009-8-6</em>
				</td>
				<td class="nums"><strong>40</strong> / <em>1346</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=18990&goto=lastpost#lastpost">2009-8-10 09:55</a></em>
					<cite>by <a href="space.php?username=%C2%B7%B1%DF%C9%E7%CC%D8%D4%BC%BC%C7%D5%DF">路边社特约记者</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_19681" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=19681&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_19681"><a href="viewthread.php?tid=19681&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">关于四川的国保头子</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=21">大仙儿</a>
										</cite>
					<em>2009-8-14</em>
				</td>
				<td class="nums"><strong>40</strong> / <em>1103</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=19681&goto=lastpost#lastpost">2009-8-16 05:05</a></em>
					<cite>by <a href="space.php?username=%BF%EC%C0%D6%C1%F7%C0%CB%BA%BA">快乐流浪汉</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_20664" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=20664&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_20664"><a href="viewthread.php?tid=20664&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">打黑风暴后 薄熙来横行在马路中央……</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1121">小荷1120</a>
										</cite>
					<em>2009-8-26</em>
				</td>
				<td class="nums"><strong>40</strong> / <em>1576</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=20664&goto=lastpost#lastpost">2009-8-28 13:07</a></em>
					<cite>by <a href="space.php?username=%B7%DF%C7%F2">愤球</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_21306" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=21306&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_21306"><a href="viewthread.php?tid=21306&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">新华网健康栏目：日本A片和欧美A片深度比较</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2428">xiahua</a>
										</cite>
					<em>2009-9-3</em>
				</td>
				<td class="nums"><strong>40</strong> / <em>1649</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=21306&goto=lastpost#lastpost">2009-9-7 16:59</a></em>
					<cite>by <a href="space.php?username=WaitingForDeath">WaitingForDeath</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_21892" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=21892&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_21892"><a href="viewthread.php?tid=21892&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">一周图片新闻精选 9.7-9.13</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2232">老杂疫</a>
										</cite>
					<em>2009-9-10</em>
				</td>
				<td class="nums"><strong>40</strong> / <em>1119</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=21892&goto=lastpost#lastpost">2009-9-14 11:16</a></em>
					<cite>by <a href="space.php?username=%C8%F8%B8%F1%C0%AD%CB%B9">萨格拉斯</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_22299" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=22299&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_22299"><a href="viewthread.php?tid=22299&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">广州“骑警”演练冲散群体事件 骑警队待批准</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4647">offacer</a>
										</cite>
					<em>2009-9-15</em>
				</td>
				<td class="nums"><strong>40</strong> / <em>640</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=22299&goto=lastpost#lastpost">2009-9-16 13:36</a></em>
					<cite>by <a href="space.php?username=LAOHOU">LAOHOU</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_21706" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=21706&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_21706"><a href="viewthread.php?tid=21706&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">乌市新闻办指被扣香港记者煽动闹事</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2564">老卡</a>
										</cite>
					<em>2009-9-8</em>
				</td>
				<td class="nums"><strong>40</strong> / <em>1323</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=21706&goto=lastpost#lastpost">2009-9-17 21:48</a></em>
					<cite>by <a href="space.php?username=%D7%F3%B0%B6%A1%FB%D3%D2%B0%B6">左岸←右岸</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_22980" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=22980&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_22980"><a href="viewthread.php?tid=22980&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">《喜羊羊与灰太狼》获得“五个一工程”大奖</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4991">sixapostle</a>
										</cite>
					<em>2009-9-22</em>
				</td>
				<td class="nums"><strong>40</strong> / <em>651</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=22980&goto=lastpost#lastpost">2009-9-23 21:41</a></em>
					<cite>by <a href="space.php?username=FIFA%BB%E1%D4%B1">FIFA会员</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_22946" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=22946&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_22946"><a href="viewthread.php?tid=22946&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">张发财的作品在奥地利电子艺术节上</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2576">阿啃1919</a>
										</cite>
					<em>2009-9-21</em>
				</td>
				<td class="nums"><strong>40</strong> / <em>1417</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=22946&goto=lastpost#lastpost">2009-9-25 07:16</a></em>
					<cite>by <a href="space.php?username=daxigua888">daxigua888</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_23126" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=23126&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_23126"><a href="viewthread.php?tid=23126&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">毛新宇被授将是假新闻</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1207">drifterq</a>
										</cite>
					<em>2009-9-23</em>
				</td>
				<td class="nums"><strong>40</strong> / <em>1224</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=23126&goto=lastpost#lastpost">2009-9-27 17:34</a></em>
					<cite>by <a href="space.php?username=%C7%D4%C7%D4%CB%BD%D3%EF">窃窃私语</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_24782" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=24782&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_24782"><a href="viewthread.php?tid=24782&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">中共四中全会闭幕</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7002">luugoo</a>
										</cite>
					<em>2009-9-18</em>
				</td>
				<td class="nums"><strong>40</strong> / <em>1280</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=24782&goto=lastpost#lastpost">2009-10-11 17:05</a></em>
					<cite>by <a href="space.php?username=nicegoal">nicegoal</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_25533" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=25533&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_25533"><a href="viewthread.php?tid=25533&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">京V·02009车内饰</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5464">上海帅哥</a>
										</cite>
					<em>2009-10-18</em>
				</td>
				<td class="nums"><strong>40</strong> / <em>1684</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=25533&goto=lastpost#lastpost">2009-10-21 12:39</a></em>
					<cite>by <a href="space.php?username=ch1b1">ch1b1</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_39949" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=39949&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_39949"><a href="viewthread.php?tid=39949&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">影帝与德国外长的男朋友握手</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8709">szdos</a>
										</cite>
					<em>2010-2-1</em>
				</td>
				<td class="nums"><strong>40</strong> / <em>1426</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=39949&goto=lastpost#lastpost">2010-3-14 11:50</a></em>
					<cite>by <a href="space.php?username=%D6%D0%C0%CF%C4%EA%C5%F3%D3%D1">中老年朋友</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_40619" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=40619&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_40619"><a href="viewthread.php?tid=40619&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">Twitter正在建设中文版</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3308">天衢居士</a>
										</cite>
					<em>2010-3-16</em>
				</td>
				<td class="nums"><strong>40</strong> / <em>1241</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=40619&goto=lastpost#lastpost">2010-3-18 19:19</a></em>
					<cite>by <a href="space.php?username=flld">flld</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_42406" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=42406&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_42406"><a href="viewthread.php?tid=42406&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">中国腾讯与俄国公司竞购ICQ</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=12393">uxxy2000</a>
										</cite>
					<em>2010-4-6</em>
				</td>
				<td class="nums"><strong>40</strong> / <em>877</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=42406&goto=lastpost#lastpost">2010-4-10 15:09</a></em>
					<cite>by <a href="space.php?username=qiecuo2">qiecuo2</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_45140" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=45140&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_45140"><a href="viewthread.php?tid=45140&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">买票冲突 清大学生与北大教授互殴</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8301">lqunl</a>
										</cite>
					<em>2010-5-7</em>
				</td>
				<td class="nums"><strong>40</strong> / <em>1196</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=45140&goto=lastpost#lastpost">2010-5-10 14:27</a></em>
					<cite>by <a href="space.php?username=%C0%D7%C2%FC%D0%D6%B5%DC">雷曼兄弟</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_45358" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=45358&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_45358"><a href="viewthread.php?tid=45358&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">清华公共管理学院教授强调绝不能搞“三权分立”</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=13387">寒梅</a>
										</cite>
					<em>2010-5-10</em>
				</td>
				<td class="nums"><strong>40</strong> / <em>930</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=45358&goto=lastpost#lastpost">2010-5-11 14:28</a></em>
					<cite>by <a href="space.php?username=%D0%EB%D7%F4%D6%AE%C4%D0">须佐之男</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_45390" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=45390&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_45390"><a href="viewthread.php?tid=45390&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">北京爱知行研究所所长万延海流亡美国</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7268">田思明</a>
										</cite>
					<em>2010-5-10</em>
				</td>
				<td class="nums"><strong>40</strong> / <em>1101</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=45390&goto=lastpost#lastpost">2010-5-12 15:18</a></em>
					<cite>by <a href="space.php?username=%BA%CB%D7%D3%C1%A6%C1%BF">核子力量</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_45890" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=45890&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_45890"><a href="viewthread.php?tid=45890&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">美中商业促进会会长列车“偶遇”温家宝</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6723">卡哥</a>
										</cite>
					<em>2010-5-15</em>
				</td>
				<td class="nums"><strong>40</strong> / <em>923</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=45890&goto=lastpost#lastpost">2010-5-18 08:21</a></em>
					<cite>by <a href="space.php?username=%B4%F3%CD%F5">大王</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_45723" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=45723&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_45723"><a href="viewthread.php?tid=45723&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">海南局长女儿公务员考试近满分 回应称靠本事</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=852">未来他老爸</a>
										</cite>
					<em>2010-5-13</em>
				</td>
				<td class="nums"><strong>40</strong> / <em>1089</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=45723&goto=lastpost#lastpost">2010-5-19 21:43</a></em>
					<cite>by <a href="space.php?username=strongwind13">strongwind13</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_46308" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=46308&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_46308"><a href="viewthread.php?tid=46308&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">马英九精神导师王晓波：马的方向就是“终极统一”</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=134">丁丁</a>
										</cite>
					<em>2010-5-19</em>
				</td>
				<td class="nums"><strong>40</strong> / <em>932</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=46308&goto=lastpost#lastpost">2010-5-20 10:12</a></em>
					<cite>by <a href="space.php?username=weke">weke</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_46850" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=46850&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_46850"><a href="viewthread.php?tid=46850&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传广电总局禁止国内影院电视台播放外语原声影片</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6314">hhbcl1414</a>
										</cite>
					<em>2010-5-23</em>
				</td>
				<td class="nums"><strong>40</strong> / <em>1194</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=46850&goto=lastpost#lastpost">2010-5-25 01:30</a></em>
					<cite>by <a href="space.php?username=man-eleven">man-eleven</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_46808" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=46808&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_46808"><a href="viewthread.php?tid=46808&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">全国高校BBS论坛有望整合</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7555">baopeng_1221</a>
										</cite>
					<em>2010-5-23</em>
				</td>
				<td class="nums"><strong>40</strong> / <em>942</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=46808&goto=lastpost#lastpost">2010-5-26 15:20</a></em>
					<cite>by <a href="space.php?username=quaestor">quaestor</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_7873" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=7873&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_7873"><a href="viewthread.php?tid=7873&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">为了中国人不受魅族M8欺骗所发表</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5075">ziyi</a>
										</cite>
					<em>2009-3-26</em>
				</td>
				<td class="nums"><strong>40</strong> / <em>865</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=7873&goto=lastpost#lastpost">2009-3-29 23:38</a></em>
					<cite>by <a href="space.php?username=free1989">free1989</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_8607" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=8607&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_8607"><a href="viewthread.php?tid=8607&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">《清明上河图之城管来了》</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=169">抑扬</a>
										</cite>
					<em>2009-4-7</em>
				</td>
				<td class="nums"><strong>40</strong> / <em>870</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=8607&goto=lastpost#lastpost">2009-4-9 12:05</a></em>
					<cite>by <a href="space.php?username=%D3%D0%C7%AE%BE%CD%D2%C6%C3%F1">有钱就移民</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_8476" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=8476&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_8476"><a href="viewthread.php?tid=8476&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">这回清楚了吧？</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2868">用裤衩思考</a>
										</cite>
					<em>2009-4-5</em>
				</td>
				<td class="nums"><strong>40</strong> / <em>969</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=8476&goto=lastpost#lastpost">2009-4-10 10:46</a></em>
					<cite>by <a href="space.php?username=%CD%A9%BE%FD">桐君</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_25815" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=25815&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_25815"><a href="viewthread.php?tid=25815&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">中国已免除非洲32个国家150笔到期对华债务</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4570">我卖糕的</a>
										</cite>
					<em>2009-10-21</em>
				</td>
				<td class="nums"><strong>40</strong> / <em>578</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=25815&goto=lastpost#lastpost">2009-11-1 12:43</a></em>
					<cite>by <a href="space.php?username=hhbcl1414">hhbcl1414</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_27347" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=27347&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_27347"><a href="viewthread.php?tid=27347&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">谷牧辞世</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8867">lusi</a>
										</cite>
					<em>2009-11-6</em>
				</td>
				<td class="nums"><strong>40</strong> / <em>1059</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=27347&goto=lastpost#lastpost">2009-11-7 23:03</a></em>
					<cite>by <a href="space.php?username=whocare">whocare</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_27577" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=27577&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_27577"><a href="viewthread.php?tid=27577&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">一周图片新闻 11.9-11.15</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2232">老杂疫</a>
										</cite>
					<em>2009-11-9</em>
				</td>
				<td class="nums"><strong>40</strong> / <em>1266</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=27577&goto=lastpost#lastpost">2009-11-16 07:53</a></em>
					<cite>by <a href="space.php?username=vip001">vip001</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_28552" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=28552&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_28552"><a href="viewthread.php?tid=28552&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">广州5名城管被6人连砍</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4570">我卖糕的</a>
										</cite>
					<em>2009-11-20</em>
				</td>
				<td class="nums"><strong>40</strong> / <em>731</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=28552&goto=lastpost#lastpost">2009-11-22 16:19</a></em>
					<cite>by <a href="space.php?username=%7C%C1%A2%B4%BA%7C">|立春|</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_20344" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=20344&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_20344"><a href="viewthread.php?tid=20344&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">美新驻华大使向中国网民问好</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1886">gjlawyer</a>
										</cite>
					<em>2009-8-22</em>
				</td>
				<td class="nums"><strong>40</strong> / <em>1106</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=20344&goto=lastpost#lastpost">2009-11-25 00:56</a></em>
					<cite>by <a href="space.php?username=ZHH">ZHH</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_28813" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=28813&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_28813"><a href="viewthread.php?tid=28813&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">拿什么来爱你，我的总理</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2495">深入裙中</a>
										</cite>
					<em>2009-11-23</em>
				</td>
				<td class="nums"><strong>40</strong> / <em>1399</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=28813&goto=lastpost#lastpost">2009-11-25 23:21</a></em>
					<cite>by <a href="space.php?username=Xining">Xining</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_29181" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=29181&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_29181"><a href="viewthread.php?tid=29181&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">浙江上虞的“少先队城管”</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4570">我卖糕的</a>
										</cite>
					<em>2009-11-27</em>
				</td>
				<td class="nums"><strong>40</strong> / <em>615</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=29181&goto=lastpost#lastpost">2009-11-28 22:33</a></em>
					<cite>by <a href="space.php?username=Jyamolmiry">Jyamolmiry</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_28341" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=28341&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_28341"><a href="viewthread.php?tid=28341&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">德国学生示威游行反对收学费</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3050">夏日葵</a>
										</cite>
					<em>2009-11-18</em>
				</td>
				<td class="nums"><strong>40</strong> / <em>550</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=28341&goto=lastpost#lastpost">2009-11-30 09:31</a></em>
					<cite>by <a href="space.php?username=Cybertarian">Cybertarian</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_29862" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=29862&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_29862"><a href="viewthread.php?tid=29862&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">40公斤以上电动车将划入机动车 上路或需考驾照</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6050">暖暖</a>
										</cite>
					<em>2009-12-3</em>
				</td>
				<td class="nums"><strong>40</strong> / <em>548</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=29862&goto=lastpost#lastpost">2009-12-8 17:01</a></em>
					<cite>by <a href="space.php?username=%7C%C1%A2%B4%BA%7C">|立春|</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_31042" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=31042&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_31042"><a href="viewthread.php?tid=31042&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">国安人员称“中国已处在境外情报机构的网络围攻之中”</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1258">路边社记者</a>
										</cite>
					<em>2009-12-14</em>
				</td>
				<td class="nums"><strong>40</strong> / <em>952</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=31042&goto=lastpost#lastpost">2009-12-15 01:41</a></em>
					<cite>by <a href="space.php?username=luugoo">luugoo</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_32348" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=32348&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_32348"><a href="viewthread.php?tid=32348&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">最高法：媒体恶意报道在审案件将追责</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=10116">八卦小牛</a>
										</cite>
					<em>2009-12-23</em>
				</td>
				<td class="nums"><strong>40</strong> / <em>612</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=32348&goto=lastpost#lastpost">2009-12-25 17:00</a></em>
					<cite>by <a href="space.php?username=%CE%F7%C3%C5%B4%B5%C5%A3">西门吹牛</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_32537" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=32537&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_32537"><a href="viewthread.php?tid=32537&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">微软Live Space被封 Bing主页纪念毛诞辰</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=10568">Almanac29</a>
										</cite>
					<em>2009-12-26</em>
				</td>
				<td class="nums"><strong>40</strong> / <em>1327</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=32537&goto=lastpost#lastpost">2009-12-27 11:59</a></em>
					<cite>by <a href="space.php?username=hhbcl1414">hhbcl1414</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_3143" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=3143&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_3143"><a href="viewthread.php?tid=3143&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">罗永浩：我将若无其事地归来开放</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1886">gjlawyer</a>
										</cite>
					<em>2009-1-11</em>
				</td>
				<td class="nums"><strong>40</strong> / <em>631</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=3143&goto=lastpost#lastpost">2009-1-19 23:55</a></em>
					<cite>by <a href="space.php?username=fffan">fffan</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_5853" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=5853&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_5853"><a href="viewthread.php?tid=5853&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">西夷米国干涉我朝人权 我朝逆袭干涉米国人权</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3202">glim</a>
										</cite>
					<em>2009-2-26</em>
				</td>
				<td class="nums"><strong>40</strong> / <em>859</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=5853&goto=lastpost#lastpost">2009-2-28 15:54</a></em>
					<cite>by <a href="space.php?username=%B2%BB%CA%C7%CE%D2%B8%C9%B5%C4">不是我干的</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_5623" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=5623&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_5623"><a href="viewthread.php?tid=5623&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">中国曾“输出革命”的国家开始审判前独裁领导人</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7">张书记</a>
										</cite>
					<em>2009-2-18</em>
				</td>
				<td class="nums"><strong>40</strong> / <em>803</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=5623&goto=lastpost#lastpost">2009-3-6 21:22</a></em>
					<cite>by <a href="space.php?username=erbia">erbia</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_13557" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=13557&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_13557"><a href="viewthread.php?tid=13557&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">喉舌网也忍不住了</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2973">free1989</a>
										</cite>
					<em>2009-6-13</em>
				</td>
				<td class="nums"><strong>40</strong> / <em>1007</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=13557&goto=lastpost#lastpost">2009-6-14 11:38</a></em>
					<cite>by <a href="space.php?username=%C0%D6%D2%BB%C0%D6lyl">乐一乐lyl</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_13627" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=13627&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_13627"><a href="viewthread.php?tid=13627&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">快讯：牛博国际的国内网正式开通测试</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1886">gjlawyer</a>
										</cite>
					<em>2009-6-14</em>
				</td>
				<td class="nums"><strong>40</strong> / <em>1368</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=13627&goto=lastpost#lastpost">2009-6-16 17:01</a></em>
					<cite>by <a href="space.php?username=xjzgch">xjzgch</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_14156" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=14156&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_14156"><a href="viewthread.php?tid=14156&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">谷歌的反击</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=24">wang3</a>
										</cite>
					<em>2009-6-19</em>
				</td>
				<td class="nums"><strong>40</strong> / <em>1197</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=14156&goto=lastpost#lastpost">2009-6-20 12:58</a></em>
					<cite>by <a href="space.php?username=hhbcl1414">hhbcl1414</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_11156" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=11156&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_11156"><a href="viewthread.php?tid=11156&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">欧美情色大片 太祖被参演一个重要角色</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7">张书记</a>
										</cite>
					<em>2009-5-18</em>
				</td>
				<td class="nums"><strong>40</strong> / <em>1798</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=11156&goto=lastpost#lastpost">2009-6-21 21:10</a></em>
					<cite>by <a href="space.php?username=%B7%A8%BF%CB%88%98">法克垬</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_14692" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=14692&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_14692"><a href="viewthread.php?tid=14692&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">《2009匿名网民宣言》</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4088">谎蛋派戏剧</a>
										</cite>
					<em>2009-6-23</em>
				</td>
				<td class="nums"><strong>40</strong> / <em>1150</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=14692&goto=lastpost#lastpost">2009-6-25 09:02</a></em>
					<cite>by <a href="space.php?username=%B7%C5%D6%F0">放逐</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_13894" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=13894&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_13894"><a href="viewthread.php?tid=13894&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">北京大学生猥亵抗日英雄赵一曼</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4570">我卖糕的</a>
										</cite>
					<em>2009-6-17</em>
				</td>
				<td class="nums"><strong>40</strong> / <em>1390</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=13894&goto=lastpost#lastpost">2009-6-27 13:10</a></em>
					<cite>by <a href="space.php?username=kiki111">kiki111</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_14757" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=14757&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_14757"><a href="viewthread.php?tid=14757&amp;extra=page%3D36%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">Google请滚出中国</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6769">Tuzki</a>
										</cite>
					<em>2009-6-24</em>
				</td>
				<td class="nums"><strong>40</strong> / <em>1048</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=14757&goto=lastpost#lastpost">2009-6-28 10:18</a></em>
					<cite>by <a href="space.php?username=badou">badou</a></cite>
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
	<div class="pages"><em>&nbsp;22278&nbsp;</em><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=1" class="first">1 ...</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=35" class="prev">&lsaquo;&lsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=34">34</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=35">35</a><strong>36</strong><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=37">37</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=38">38</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=39">39</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=40">40</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=41">41</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=42">42</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=43">43</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=37" class="next">&rsaquo;&rsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=349" class="last">... 349</a><kbd><input type="text" name="custompage" size="3" onkeydown="if(event.keyCode==13) {window.location='forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page='+this.value; return false;}" /></kbd></div>	</div>

  
	<div class="box">
			<span class="headactions"><a href="forumdisplay.php?fid=2&amp;page=36&amp;showoldetails=yes#online" class="nobdr"><img src="images/default/collapsed_yes.gif" alt="" /></a></span>
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
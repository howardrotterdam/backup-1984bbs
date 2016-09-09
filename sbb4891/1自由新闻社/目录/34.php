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
			window.location = 'forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&page=33';
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
<div class="pages"><em>&nbsp;22278&nbsp;</em><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=1" class="first">1 ...</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=33" class="prev">&lsaquo;&lsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=32">32</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=33">33</a><strong>34</strong><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=35">35</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=36">36</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=37">37</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=38">38</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=39">39</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=40">40</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=41">41</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=35" class="next">&rsaquo;&rsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=349" class="last">... 349</a><kbd><input type="text" name="custompage" size="3" onkeydown="if(event.keyCode==13) {window.location='forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page='+this.value; return false;}" /></kbd></div></div>

<div style="float:left;border:1px solid #CCC; border-bottom:none;;width:218px; background: url(/imgs/1984radio.jpg) 200px 2px no-repeat;padding:5px 0 5px 12px;margin:0px 0 0 13px">

<p><b><a href="/radio/index.php" target="_blank">1984FM</a></b><br /><b><a href="https://voxli.com/1984bbs" target="_blank">1984Chat</a></b>&nbsp;</p> 
</div>

<div style="clear:both;height:0px;width:100%;font-size:1px;">&nbsp;</div>

	<ul class="popupmenu_popup newspecialmenu" id="newspecial_menu" style="display: none">
		<li><a href="post.php?action=newthread&amp;fid=2&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">发新话题</a></li>		<li class="poll"><a href="post.php?action=newthread&amp;fid=2&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;special=1">发布投票</a></li>													</ul>
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

					<tbody id="normalthread_12138" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=12138&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_12138"><a href="viewthread.php?tid=12138&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">外交部：20年前我们军事干预是对的 道歉并不合适</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=476">会飞的猪</a>
										</cite>
					<em>2009-5-29</em>
				</td>
				<td class="nums"><strong>42</strong> / <em>1328</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=12138&goto=lastpost#lastpost">2009-6-1 13:46</a></em>
					<cite>by <a href="space.php?username=qmagicworld">qmagicworld</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_12763" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=12763&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_12763"><a href="viewthread.php?tid=12763&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">2009年6月3日，天朝卫士采用雨伞战术抗击CNN的反共宣传</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2928">canadian</a>
										</cite>
					<em>2009-6-4</em>
				</td>
				<td class="nums"><strong>42</strong> / <em>2414</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=12763&goto=lastpost#lastpost">2009-6-8 12:16</a></em>
					<cite>by <a href="space.php?username=lim77sure%40yahoo">lim77sure@yahoo</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_47631" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=47631&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_47631"><a href="viewthread.php?tid=47631&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">汪洋坐镇胡温批示  富士康大整改在即</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=852">未来他老爸</a>
										</cite>
					<em>2010-5-30</em>
				</td>
				<td class="nums"><strong>42</strong> / <em>1911</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=47631&goto=lastpost#lastpost">2010-5-31 21:19</a></em>
					<cite>by <a href="space.php?username=YOYO">YOYO</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_48041" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=48041&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_48041"><a href="viewthread.php?tid=48041&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">VISA组织发通知封堵中国银联境外通道</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3202">glim</a>
										</cite>
					<em>2010-6-2</em>
				</td>
				<td class="nums"><strong>42</strong> / <em>975</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=48041&goto=lastpost#lastpost">2010-6-7 08:25</a></em>
					<cite>by <a href="space.php?username=%B7%A2%B7%E0%CD%BF%C7%BD">发粪涂墙</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_48804" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=48804&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_48804"><a href="viewthread.php?tid=48804&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">朝鲜“接班人” 金正银留学照片被公开</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1333">废种豆豉</a>
										</cite>
					<em>2010-6-9</em>
				</td>
				<td class="nums"><strong>42</strong> / <em>1997</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=48804&goto=lastpost#lastpost">2010-6-10 19:34</a></em>
					<cite>by <a href="space.php?username=lx5885">lx5885</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_49808" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=49808&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_49808"><a href="viewthread.php?tid=49808&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">真理部最新指令：不得以世界杯报道名义嘲笑中国足球</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=21">大仙儿</a>
										</cite>
					<em>2010-6-17</em>
				</td>
				<td class="nums"><strong>42</strong> / <em>1306</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=49808&goto=lastpost#lastpost">2010-6-18 14:45</a></em>
					<cite>by <a href="space.php?username=%D7%D4%D3%C9%BB%A8%CA%A2%BF%AA">自由花盛开</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_49506" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=49506&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_49506"><a href="viewthread.php?tid=49506&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">大陆台资加薪 引中共情报机关关注</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=803">weke</a>
										</cite>
					<em>2010-6-14</em>
				</td>
				<td class="nums"><strong>42</strong> / <em>1172</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=49506&goto=lastpost#lastpost">2010-6-20 00:25</a></em>
					<cite>by <a href="space.php?username=%B7%C7%C6%BB%B9%FB%B2%BB%C8%A2">非苹果不娶</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_50553" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=50553&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_50553"><a href="viewthread.php?tid=50553&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">台湾拒绝给四名大陆人“政治庇护”</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6314">hhbcl1414</a>
										</cite>
					<em>2010-6-23</em>
				</td>
				<td class="nums"><strong>42</strong> / <em>1467</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=50553&goto=lastpost#lastpost">2010-6-25 17:58</a></em>
					<cite>by <a href="space.php?username=hongjianpeng">hongjianpeng</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_51294" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=51294&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_51294"><a href="viewthread.php?tid=51294&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">一周图片新闻 6.28-7.4</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2232">老杂疫</a>
										</cite>
					<em>2010-6-30</em>
				</td>
				<td class="nums"><strong>42</strong> / <em>1291</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=51294&goto=lastpost#lastpost">2010-7-9 11:01</a></em>
					<cite>by <a href="space.php?username=project2501">project2501</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_51999" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=51999&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_51999"><a href="viewthread.php?tid=51999&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">任志强父亲任泉生曾任商业部副部长</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4570">我卖糕的</a>
										</cite>
					<em>2010-7-7</em>
				</td>
				<td class="nums"><strong>42</strong> / <em>799</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=51999&goto=lastpost#lastpost">2010-7-9 19:30</a></em>
					<cite>by <a href="space.php?username=dove7807">dove7807</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_52284" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=52284&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_52284"><a href="viewthread.php?tid=52284&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">“父母皆祸害”讨论组由一个极端走向另一个极端</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7946">马德毕</a>
										</cite>
					<em>2010-7-9</em>
				</td>
				<td class="nums"><strong>42</strong> / <em>929</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=52284&goto=lastpost#lastpost">2010-7-11 18:24</a></em>
					<cite>by <a href="space.php?username=toaoman">toaoman</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_54139" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=54139&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_54139"><a href="viewthread.php?tid=54139&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">真理部最新指令：删除“质疑高层领导人学历”的内容</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=21">大仙儿</a>
										</cite>
					<em>2010-7-16</em>
				</td>
				<td class="nums"><strong>42</strong> / <em>1592</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=54139&goto=lastpost#lastpost">2010-7-29 22:30</a></em>
					<cite>by <a href="space.php?username=%C8%CB%B8%F1%D4%DA%C4%C4%C0%EF">人格在哪里</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_2061" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=2061&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_2061"><a href="viewthread.php?tid=2061&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">三十年江湖英雄会上的众生相</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7">张书记</a>
										</cite>
					<em>2008-12-18</em>
				</td>
				<td class="nums"><strong>42</strong> / <em>729</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=2061&goto=lastpost#lastpost">2008-12-20 20:24</a></em>
					<cite>by <a href="space.php?username=guan.jarod">guan.jarod</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_40029" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=40029&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_40029"><a href="viewthread.php?tid=40029&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">政协委员李延声建议毛笔写高考作文可实行加分</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=10286">qibo</a>
										</cite>
					<em>2010-3-12</em>
				</td>
				<td class="nums"><strong>42</strong> / <em>509</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=40029&goto=lastpost#lastpost">2010-3-16 21:09</a></em>
					<cite>by <a href="space.php?username=%CC%EC%D0%FD%B5%D8%D7%AA">天旋地转</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_40536" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=40536&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_40536"><a href="viewthread.php?tid=40536&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">影帝翻译成网民新宠</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6314">hhbcl1414</a>
										</cite>
					<em>2010-3-17</em>
				</td>
				<td class="nums"><strong>42</strong> / <em>1344</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=40536&goto=lastpost#lastpost">2010-3-23 01:16</a></em>
					<cite>by <a href="space.php?username=kaidisanshu">kaidisanshu</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_21001" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=21001&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_21001"><a href="viewthread.php?tid=21001&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">最高院院长要求法官审案从党和国家大局出发</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8244">gfw444</a>
										</cite>
					<em>2009-8-30</em>
				</td>
				<td class="nums"><strong>42</strong> / <em>622</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=21001&goto=lastpost#lastpost">2010-3-29 01:24</a></em>
					<cite>by <a href="space.php?username=liuropot">liuropot</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_42872" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=42872&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_42872"><a href="viewthread.php?tid=42872&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">《重庆时报》致歉中国作协 解聘记者张晓禾</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3194">zhangqian1896</a>
										</cite>
					<em>2010-4-12</em>
				</td>
				<td class="nums"><strong>42</strong> / <em>1065</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=42872&goto=lastpost#lastpost">2010-4-13 20:47</a></em>
					<cite>by <a href="space.php?username=%D0%A1%C1%FA%C8%CB">小龙人</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_43324" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=43324&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_43324"><a href="viewthread.php?tid=43324&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">房祖名：我用摇滚来爱国</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3202">glim</a>
										</cite>
					<em>2010-4-17</em>
				</td>
				<td class="nums"><strong>42</strong> / <em>959</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=43324&goto=lastpost#lastpost">2010-4-20 15:07</a></em>
					<cite>by <a href="space.php?username=%D6%BB%CA%C7%BF%B4%BF%B4">只是看看</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_44927" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=44927&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_44927"><a href="viewthread.php?tid=44927&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">成都蛤蟆上街 专家辟谣地震前兆</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4583">乐一乐lyl</a>
										</cite>
					<em>2010-5-5</em>
				</td>
				<td class="nums"><strong>42</strong> / <em>771</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=44927&goto=lastpost#lastpost">2010-5-6 21:18</a></em>
					<cite>by <a href="space.php?username=NERV">NERV</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_45224" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=45224&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_45224"><a href="viewthread.php?tid=45224&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">奥巴马批评中国限制新闻自由 外交部驳斥</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4570">我卖糕的</a>
										</cite>
					<em>2010-5-7</em>
				</td>
				<td class="nums"><strong>42</strong> / <em>963</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=45224&goto=lastpost#lastpost">2010-5-9 11:28</a></em>
					<cite>by <a href="space.php?username=%B8%A1%D4%C6">浮云</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_45973" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=45973&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_45973"><a href="viewthread.php?tid=45973&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">首尔国际食品展 中国展区无人问津</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4570">我卖糕的</a>
										</cite>
					<em>2010-5-16</em>
				</td>
				<td class="nums"><strong>42</strong> / <em>1358</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=45973&goto=lastpost#lastpost">2010-5-18 10:41</a></em>
					<cite>by <a href="space.php?username=%D5%C5%CA%E9%BC%C7">张书记</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_46573" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=46573&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_46573"><a href="viewthread.php?tid=46573&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">二审宣判维持死刑   文强称死后会被怀念</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=852">未来他老爸</a>
										</cite>
					<em>2010-5-21</em>
				</td>
				<td class="nums"><strong>42</strong> / <em>992</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=46573&goto=lastpost#lastpost">2010-5-22 19:05</a></em>
					<cite>by <a href="space.php?username=%CE%DE%D1%D4%B5%C4%C9%BD%C7%F0">无言的山丘</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_46489" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=46489&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_46489"><a href="viewthread.php?tid=46489&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">产妇生下四胞胎拟起名为“感谢祖国”</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3202">glim</a>
										</cite>
					<em>2010-5-20</em>
				</td>
				<td class="nums"><strong>42</strong> / <em>892</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=46489&goto=lastpost#lastpost">2010-5-23 19:30</a></em>
					<cite>by <a href="space.php?username=%BB%F0%F0%DC%D7%D3">火疖子</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_47158" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=47158&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_47158"><a href="viewthread.php?tid=47158&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">澳门人呼吁“5.1”上街游行</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7002">luugoo</a>
										</cite>
					<em>2010-4-1</em>
				</td>
				<td class="nums"><strong>42</strong> / <em>1289</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=47158&goto=lastpost#lastpost">2010-5-26 13:20</a></em>
					<cite>by <a href="space.php?username=luugoo">luugoo</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_40657" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=40657&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_40657"><a href="viewthread.php?tid=40657&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">重庆将启动网络实名制 QQ群微博短信纳入警方监管</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7">张书记</a>
										</cite>
					<em>2010-3-19</em>
				</td>
				<td class="nums"><strong>41</strong> / <em>653</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=40657&goto=lastpost#lastpost">2010-3-21 01:46</a></em>
					<cite>by <a href="space.php?username=%D4%D3%CA%B3">杂食</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_41270" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=41270&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_41270"><a href="viewthread.php?tid=41270&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">美国欲宣布中国政府操纵汇率，想让人民币升值</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4587">萨格拉斯</a>
										</cite>
					<em>2010-3-25</em>
				</td>
				<td class="nums"><strong>41</strong> / <em>489</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=41270&goto=lastpost#lastpost">2010-3-26 06:49</a></em>
					<cite>by <a href="space.php?username=%D2%F9%C3%F1%C1%A6%C1%BF">淫民力量</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_17044" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=17044&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_17044"><a href="viewthread.php?tid=17044&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">真理部最新指令：尽快删除严晓玲相关内容</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=21">大仙儿</a>
										</cite>
					<em>2009-7-17</em>
				</td>
				<td class="nums"><strong>41</strong> / <em>1698</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=17044&goto=lastpost#lastpost">2010-3-26 11:51</a></em>
					<cite>by <a href="space.php?username=shsmtz">shsmtz</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_41308" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=41308&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_41308"><a href="viewthread.php?tid=41308&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">厦门解放军叔叔的居住地</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1408">becom</a>
										</cite>
					<em>2010-3-25</em>
				</td>
				<td class="nums"><strong>41</strong> / <em>2068</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=41308&goto=lastpost#lastpost">2010-3-29 09:48</a></em>
					<cite>by <a href="space.php?username=lane">lane</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_41588" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=41588&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_41588"><a href="viewthread.php?tid=41588&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">马化腾等建言互联网实行“特区制”</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3349">michael.zy</a>
										</cite>
					<em>2010-3-28</em>
				</td>
				<td class="nums"><strong>41</strong> / <em>1218</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=41588&goto=lastpost#lastpost">2010-4-1 02:00</a></em>
					<cite>by <a href="space.php?username=%BF%D5%D0%C4%B2%CB">空心菜</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_41961" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=41961&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_41961"><a href="viewthread.php?tid=41961&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">上海发给常驻居民每户一张世博门参观券和交通卡</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4638">江湖席</a>
										</cite>
					<em>2010-4-1</em>
				</td>
				<td class="nums"><strong>41</strong> / <em>817</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=41961&goto=lastpost#lastpost">2010-4-2 13:51</a></em>
					<cite>by <a href="space.php?username=%B0%A2%C4%BD">阿慕</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_33556" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=33556&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_33556"><a href="viewthread.php?tid=33556&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">中星九号加密 山寨卫星锅将无法解析</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=9991">duck_1984</a>
										</cite>
					<em>2010-1-4</em>
				</td>
				<td class="nums"><strong>41</strong> / <em>1249</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=33556&goto=lastpost#lastpost">2010-4-6 13:14</a></em>
					<cite>by <a href="space.php?username=%D2%F5%D3%B0%D6%AE%BD%A3">阴影之剑</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_42454" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=42454&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_42454"><a href="viewthread.php?tid=42454&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">真理部最新指令：不报道“世博会后各国展馆如何处理问题”</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5588">我家旺财有喜了</a>
										</cite>
					<em>2010-4-7</em>
				</td>
				<td class="nums"><strong>41</strong> / <em>1336</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=42454&goto=lastpost#lastpost">2010-4-8 20:25</a></em>
					<cite>by <a href="space.php?username=%C2%F3%D4%B2">麦圆</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_43919" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=43919&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_43919"><a href="viewthread.php?tid=43919&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">蒙牛牛奶致学生集体中毒 金元公关要求网媒撤稿</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4004">ttrendr</a>
										</cite>
					<em>2010-4-23</em>
				</td>
				<td class="nums"><strong>41</strong> / <em>1374</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=43919&goto=lastpost#lastpost">2010-4-25 10:02</a></em>
					<cite>by <a href="space.php?username=%D5%D5%B9%CB%BA%C3%C4%E3">照顾好你</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_44192" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=44192&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_44192"><a href="viewthread.php?tid=44192&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">北京部分流动人口较多村庄将建围墙封闭管理</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5547">北方玄五</a>
										</cite>
					<em>2010-4-26</em>
				</td>
				<td class="nums"><strong>41</strong> / <em>669</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=44192&goto=lastpost#lastpost">2010-4-28 18:47</a></em>
					<cite>by <a href="space.php?username=zq19871127">zq19871127</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_44273" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=44273&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_44273"><a href="viewthread.php?tid=44273&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">胡锦涛：让广大民众实现体面劳动</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5494">肉の包包</a>
										</cite>
					<em>2010-4-27</em>
				</td>
				<td class="nums"><strong>41</strong> / <em>877</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=44273&goto=lastpost#lastpost">2010-4-30 21:39</a></em>
					<cite>by <a href="space.php?username=Designer">Designer</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_44472" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=44472&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_44472"><a href="viewthread.php?tid=44472&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">“纪念林昭座谈会”在京成功举办</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2315">写实</a>
										</cite>
					<em>2010-4-30</em>
				</td>
				<td class="nums"><strong>41</strong> / <em>735</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=44472&goto=lastpost#lastpost">2010-5-1 19:55</a></em>
					<cite>by <a href="space.php?username=%D0%B4%CA%B5">写实</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_44733" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=44733&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_44733"><a href="viewthread.php?tid=44733&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">四川自贡工业学校藏汉学生冲突 一死三伤</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8301">lqunl</a>
										</cite>
					<em>2010-4-30</em>
				</td>
				<td class="nums"><strong>41</strong> / <em>1580</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=44733&goto=lastpost#lastpost">2010-5-4 09:06</a></em>
					<cite>by <a href="space.php?username=nattywang">nattywang</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_45281" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=45281&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_45281"><a href="viewthread.php?tid=45281&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">国新办称网络跟帖实名制取得成效</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2804">musicool</a>
										</cite>
					<em>2010-5-2</em>
				</td>
				<td class="nums"><strong>41</strong> / <em>1130</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=45281&goto=lastpost#lastpost">2010-5-10 10:38</a></em>
					<cite>by <a href="space.php?username=darrenlee">darrenlee</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_46825" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=46825&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_46825"><a href="viewthread.php?tid=46825&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">宋祖英被烟花惊吓花容失色</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=9591">吃吃饭</a>
										</cite>
					<em>2010-5-23</em>
				</td>
				<td class="nums"><strong>41</strong> / <em>1665</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=46825&goto=lastpost#lastpost">2010-5-26 01:46</a></em>
					<cite>by <a href="space.php?username=%CB%BC%CF%EB%D5%DFlonely">思想者lonely</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_47127" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=47127&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_47127"><a href="viewthread.php?tid=47127&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">奥巴马重申全力支持韩国 要求美军做好军事准备</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2907">无言的山丘</a>
										</cite>
					<em>2010-5-26</em>
				</td>
				<td class="nums"><strong>41</strong> / <em>753</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=47127&goto=lastpost#lastpost">2010-5-26 19:03</a></em>
					<cite>by <a href="space.php?username=nailking">nailking</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_7343" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=7343&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_7343"><a href="viewthread.php?tid=7343&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">林妙可：我就是一名少先队员</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2428">xiahua</a>
										</cite>
					<em>2009-3-18</em>
				</td>
				<td class="nums"><strong>41</strong> / <em>799</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=7343&goto=lastpost#lastpost">2009-3-24 17:30</a></em>
					<cite>by <a href="space.php?username=care">care</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_8069" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=8069&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_8069"><a href="viewthread.php?tid=8069&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">右粪的五大荒谬观点！左愤的五大经典表现！</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1886">gjlawyer</a>
										</cite>
					<em>2009-3-29</em>
				</td>
				<td class="nums"><strong>41</strong> / <em>763</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=8069&goto=lastpost#lastpost">2009-3-31 08:34</a></em>
					<cite>by <a href="space.php?username=%D0%E4%CA%D6%BF%B4%C8%C8%C4%D6">袖手看热闹</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_8359" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=8359&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_8359"><a href="viewthread.php?tid=8359&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">关于是否取缔小姐的讨论</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=9">鬼涧愁</a>
										</cite>
					<em>2009-4-3</em>
				</td>
				<td class="nums"><strong>41</strong> / <em>647</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=8359&goto=lastpost#lastpost">2009-4-5 14:29</a></em>
					<cite>by <a href="space.php?username=%B5%A5%CA%D6%B7%F6%C7%BD">单手扶墙</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_8413" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=8413&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_8413"><a href="viewthread.php?tid=8413&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">国产动画志</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4183">男妇女主任</a>
										</cite>
					<em>2009-4-4</em>
				</td>
				<td class="nums"><strong>41</strong> / <em>951</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=8413&goto=lastpost#lastpost">2009-4-12 08:26</a></em>
					<cite>by <a href="space.php?username=%C4%A3%C0%E2%C1%BD%BF%C9">模棱两可</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_8780" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=8780&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_8780"><a href="viewthread.php?tid=8780&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">给领导打伞是一门学问</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=169">抑扬</a>
										</cite>
					<em>2009-4-10</em>
				</td>
				<td class="nums"><strong>41</strong> / <em>855</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=8780&goto=lastpost#lastpost">2009-4-12 23:55</a></em>
					<cite>by <a href="space.php?username=mcdull">mcdull</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_8772" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=8772&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_8772"><a href="viewthread.php?tid=8772&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">重庆悬案续：警方通缉军方！</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3557">胡曰曰</a>
										</cite>
					<em>2009-4-10</em>
				</td>
				<td class="nums"><strong>41</strong> / <em>1145</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=8772&goto=lastpost#lastpost">2009-4-14 10:36</a></em>
					<cite>by <a href="space.php?username=%C0%E4%BF%E1%B5%C4%D0%C4">冷酷的心</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_9111" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=9111&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_9111"><a href="viewthread.php?tid=9111&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">广东政协主席陈绍基、浙江纪委书记王华元被双规</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5140">kakagoing</a>
										</cite>
					<em>2009-4-15</em>
				</td>
				<td class="nums"><strong>41</strong> / <em>1031</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=9111&goto=lastpost#lastpost">2009-4-23 11:57</a></em>
					<cite>by <a href="space.php?username=%CD%DE%CC%A4%C2%E4">娃踏落</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_21712" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=21712&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_21712"><a href="viewthread.php?tid=21712&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">买七百利斧大批木棍，维人扬言血洗乌市</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1353">边缘构件</a>
										</cite>
					<em>2009-9-9</em>
				</td>
				<td class="nums"><strong>41</strong> / <em>1573</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=21712&goto=lastpost#lastpost">2009-9-10 20:04</a></em>
					<cite>by <a href="space.php?username=%D2%D4%B5%D8%D6%AE%C3%FB">以地之名</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_21924" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=21924&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_21924"><a href="viewthread.php?tid=21924&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">阿里巴巴10周年庆典晚会上的马云</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7">张书记</a>
										</cite>
					<em>2009-9-11</em>
				</td>
				<td class="nums"><strong>41</strong> / <em>824</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=21924&goto=lastpost#lastpost">2009-9-11 22:29</a></em>
					<cite>by <a href="space.php?username=jiajia-mail">jiajia-mail</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_22210" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=22210&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_22210"><a href="viewthread.php?tid=22210&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">德国徕卡照相机公司推出“红色国庆版”</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=17">eat.eat</a>
										</cite>
					<em>2009-9-14</em>
				</td>
				<td class="nums"><strong>41</strong> / <em>893</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=22210&goto=lastpost#lastpost">2009-9-16 08:27</a></em>
					<cite>by <a href="space.php?username=%D6%C7%C9%CC%C1%F9%CA%AE">智商六十</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_22350" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=22350&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_22350"><a href="viewthread.php?tid=22350&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">新麦田怪圈</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8144">ktzkcn</a>
										</cite>
					<em>2009-9-15</em>
				</td>
				<td class="nums"><strong>41</strong> / <em>1065</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=22350&goto=lastpost#lastpost">2009-9-16 16:38</a></em>
					<cite>by <a href="space.php?username=%C5%D3%B1%B4%B3%C7%CD%F6%C1%E9">庞贝城亡灵</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_21724" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=21724&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_21724"><a href="viewthread.php?tid=21724&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">日媒称金正云将改名 被誉为军事英才</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4570">我卖糕的</a>
										</cite>
					<em>2009-9-9</em>
				</td>
				<td class="nums"><strong>41</strong> / <em>923</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=21724&goto=lastpost#lastpost">2009-9-19 18:32</a></em>
					<cite>by <a href="space.php?username=%B6%FE%B9%B7">二狗</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_22923" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=22923&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_22923"><a href="viewthread.php?tid=22923&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">美帝校长嘲讽我朝没有真正的教育家</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3202">glim</a>
										</cite>
					<em>2009-9-21</em>
				</td>
				<td class="nums"><strong>41</strong> / <em>835</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=22923&goto=lastpost#lastpost">2009-9-22 09:24</a></em>
					<cite>by <a href="space.php?username=wangjiu-9">wangjiu-9</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_24186" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=24186&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_24186"><a href="viewthread.php?tid=24186&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">北京刚刚似乎发生了地震</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7">张书记</a>
										</cite>
					<em>2009-10-3</em>
				</td>
				<td class="nums"><strong>41</strong> / <em>1575</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=24186&goto=lastpost#lastpost">2009-10-4 09:54</a></em>
					<cite>by <a href="space.php?username=%B7%CF%D6%D6%B6%B9%F4%F9">废种豆豉</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_24413" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=24413&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_24413"><a href="viewthread.php?tid=24413&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">我二炮导弹可“无缝覆盖”全球</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=852">未来他老爸</a>
										</cite>
					<em>2009-9-16</em>
				</td>
				<td class="nums"><strong>41</strong> / <em>1034</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=24413&goto=lastpost#lastpost">2009-10-8 21:31</a></em>
					<cite>by <a href="space.php?username=qinghe1987">qinghe1987</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_25636" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=25636&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_25636"><a href="viewthread.php?tid=25636&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">薄熙来：是黑恶势力你们逼我出手的</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8301">lqunl</a>
										</cite>
					<em>2009-10-17</em>
				</td>
				<td class="nums"><strong>41</strong> / <em>1299</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=25636&goto=lastpost#lastpost">2009-10-20 22:57</a></em>
					<cite>by <a href="space.php?username=%D3%D0%C7%AE%BE%CD%D2%C6%C3%F1">有钱就移民</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_25528" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=25528&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_25528"><a href="viewthread.php?tid=25528&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">中南海新华门附近发生恶性辱华事件</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=304">囧rz</a>
										</cite>
					<em>2009-10-18</em>
				</td>
				<td class="nums"><strong>41</strong> / <em>2337</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=25528&goto=lastpost#lastpost">2009-10-21 13:02</a></em>
					<cite>by <a href="space.php?username=%C6%D0%CC%E1%D2%BB%D2%B6">菩提一叶</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_3638" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=3638&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_3638"><a href="viewthread.php?tid=3638&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">国资局消费账单（已经肉出来了）</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2071">上肛上腺</a>
										</cite>
					<em>2009-1-19</em>
				</td>
				<td class="nums"><strong>41</strong> / <em>788</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=3638&goto=lastpost#lastpost">2009-1-22 16:05</a></em>
					<cite>by <a href="space.php?username=atea">atea</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_11101" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=11101&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_11101"><a href="viewthread.php?tid=11101&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">马英九亲共之路遇阻——台湾总统府前爆发“反倾中&#8231;护台湾”大规模抗议示威</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7">张书记</a>
										</cite>
					<em>2009-5-17</em>
				</td>
				<td class="nums"><strong>41</strong> / <em>677</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=11101&goto=lastpost#lastpost">2009-6-21 21:07</a></em>
					<cite>by <a href="space.php?username=%CC%D2%D7%D3%C3%A8%C2%E9">桃子猫麻</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_14064" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=14064&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_14064"><a href="viewthread.php?tid=14064&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">北京新闻办公室招募万名“志愿者”监控网络</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2971">luckyray</a>
										</cite>
					<em>2009-6-18</em>
				</td>
				<td class="nums"><strong>41</strong> / <em>958</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=14064&goto=lastpost#lastpost">2009-6-23 12:42</a></em>
					<cite>by <a href="space.php?username=%C6%A8%C3%F1">屁民</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_14627" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=14627&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_14627"><a href="viewthread.php?tid=14627&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">江湖谣传：80后市长的背景</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3049">falve</a>
										</cite>
					<em>2009-6-23</em>
				</td>
				<td class="nums"><strong>41</strong> / <em>1297</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=14627&goto=lastpost#lastpost">2009-6-24 19:43</a></em>
					<cite>by <a href="space.php?username=%CE%D2%C2%F4%B8%E2%B5%C4">我卖糕的</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_14751" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=14751&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_14751"><a href="viewthread.php?tid=14751&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">快讯：Gmail解封</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6206">燕西</a>
										</cite>
					<em>2009-6-24</em>
				</td>
				<td class="nums"><strong>41</strong> / <em>679</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=14751&goto=lastpost#lastpost">2009-6-25 12:31</a></em>
					<cite>by <a href="space.php?username=shasha42">shasha42</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_15174" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=15174&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_15174"><a href="viewthread.php?tid=15174&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">瓜瓜北大演讲称不想当官经商</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2202">ccjing123</a>
										</cite>
					<em>2009-6-28</em>
				</td>
				<td class="nums"><strong>41</strong> / <em>767</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=15174&goto=lastpost#lastpost">2009-6-28 19:17</a></em>
					<cite>by <a href="space.php?username=peteryang84">peteryang84</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_15533" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=15533&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_15533"><a href="viewthread.php?tid=15533&amp;extra=page%3D34%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">奥威尔的“真理部”在中国成为敏感词</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=464">Phillip</a>
										</cite>
					<em>2009-7-1</em>
				</td>
				<td class="nums"><strong>41</strong> / <em>1032</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=15533&goto=lastpost#lastpost">2009-7-4 10:39</a></em>
					<cite>by <a href="space.php?username=%C7%FA%C6%DF">曲七</a></cite>
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
	<div class="pages"><em>&nbsp;22278&nbsp;</em><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=1" class="first">1 ...</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=33" class="prev">&lsaquo;&lsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=32">32</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=33">33</a><strong>34</strong><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=35">35</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=36">36</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=37">37</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=38">38</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=39">39</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=40">40</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=41">41</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=35" class="next">&rsaquo;&rsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=349" class="last">... 349</a><kbd><input type="text" name="custompage" size="3" onkeydown="if(event.keyCode==13) {window.location='forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page='+this.value; return false;}" /></kbd></div>	</div>

  
	<div class="box">
			<span class="headactions"><a href="forumdisplay.php?fid=2&amp;page=34&amp;showoldetails=yes#online" class="nobdr"><img src="images/default/collapsed_yes.gif" alt="" /></a></span>
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
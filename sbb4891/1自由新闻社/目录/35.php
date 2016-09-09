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
			window.location = 'forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&page=34';
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
<div class="pages"><em>&nbsp;22278&nbsp;</em><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=1" class="first">1 ...</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=34" class="prev">&lsaquo;&lsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=33">33</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=34">34</a><strong>35</strong><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=36">36</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=37">37</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=38">38</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=39">39</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=40">40</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=41">41</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=42">42</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=36" class="next">&rsaquo;&rsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=349" class="last">... 349</a><kbd><input type="text" name="custompage" size="3" onkeydown="if(event.keyCode==13) {window.location='forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page='+this.value; return false;}" /></kbd></div></div>

<div style="float:left;border:1px solid #CCC; border-bottom:none;;width:218px; background: url(/imgs/1984radio.jpg) 200px 2px no-repeat;padding:5px 0 5px 12px;margin:0px 0 0 13px">

<p><b><a href="/radio/index.php" target="_blank">1984FM</a></b><br /><b><a href="https://voxli.com/1984bbs" target="_blank">1984Chat</a></b>&nbsp;</p> 
</div>

<div style="clear:both;height:0px;width:100%;font-size:1px;">&nbsp;</div>

	<ul class="popupmenu_popup newspecialmenu" id="newspecial_menu" style="display: none">
		<li><a href="post.php?action=newthread&amp;fid=2&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">发新话题</a></li>		<li class="poll"><a href="post.php?action=newthread&amp;fid=2&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;special=1">发布投票</a></li>													</ul>
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

					<tbody id="normalthread_15792" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=15792&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_15792"><a href="viewthread.php?tid=15792&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">外国佬谈贵国</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6314">hhbcl1414</a>
										</cite>
					<em>2009-7-4</em>
				</td>
				<td class="nums"><strong>41</strong> / <em>1200</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=15792&goto=lastpost#lastpost">2009-7-6 17:10</a></em>
					<cite>by <a href="space.php?username=zq19871127">zq19871127</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_16001" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=16001&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_16001"><a href="viewthread.php?tid=16001&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">王力雄：新疆追记</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=300">rationalcrow</a>
										</cite>
					<em>2009-7-7</em>
				</td>
				<td class="nums"><strong>41</strong> / <em>1281</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=16001&goto=lastpost#lastpost">2009-7-9 21:56</a></em>
					<cite>by <a href="space.php?username=%D7%F3%B0%B6%A1%FB%D3%D2%B0%B6">左岸←右岸</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_16317" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=16317&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_16317"><a href="viewthread.php?tid=16317&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">乌鲁木齐人：过去现在和未来</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7171">vitozhu</a>
										</cite>
					<em>2009-7-8</em>
				</td>
				<td class="nums"><strong>41</strong> / <em>1672</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=16317&goto=lastpost#lastpost">2009-7-12 21:38</a></em>
					<cite>by <a href="space.php?username=%B6%FE%D1%F5%BB%AF%CC%BC">二氧化碳</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_16241" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=16241&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_16241"><a href="viewthread.php?tid=16241&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">冉云飞：我对新疆问题的态度</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4490">camour</a>
										</cite>
					<em>2009-7-9</em>
				</td>
				<td class="nums"><strong>41</strong> / <em>1237</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=16241&goto=lastpost#lastpost">2009-7-13 00:20</a></em>
					<cite>by <a href="space.php?username=%DF%F7%DF%F7%CE%D8">喵喵呜</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_16665" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=16665&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_16665"><a href="viewthread.php?tid=16665&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">逝世未获今上哀悼，季氏排序急转任下</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=428">方沂鸣</a>
										</cite>
					<em>2009-7-13</em>
				</td>
				<td class="nums"><strong>41</strong> / <em>1630</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=16665&goto=lastpost#lastpost">2009-7-14 20:37</a></em>
					<cite>by <a href="space.php?username=%CB%C4%B2%BB%CF%F3">四不象</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_16671" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=16671&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_16671"><a href="viewthread.php?tid=16671&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">国军神炮手蒙羞：靶车不再走直线</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6503">豆子</a>
										</cite>
					<em>2009-7-13</em>
				</td>
				<td class="nums"><strong>41</strong> / <em>1086</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=16671&goto=lastpost#lastpost">2009-7-16 14:31</a></em>
					<cite>by <a href="space.php?username=%B5%A5%CA%D6%B7%F6%C7%BD">单手扶墙</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_16760" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=16760&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_16760"><a href="viewthread.php?tid=16760&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">一个流浪汉在北京的四天</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=689">yimo0198</a>
										</cite>
					<em>2009-7-13</em>
				</td>
				<td class="nums"><strong>41</strong> / <em>1216</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=16760&goto=lastpost#lastpost">2009-7-16 18:24</a></em>
					<cite>by <a href="space.php?username=%BB%A8%CF%EB%C8%DD">花想容</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_16816" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=16816&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_16816"><a href="viewthread.php?tid=16816&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">《红色意志的胜利》在京开拍，十万童子军参加彩排</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=852">未来他老爸</a>
										</cite>
					<em>2009-7-15</em>
				</td>
				<td class="nums"><strong>41</strong> / <em>739</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=16816&goto=lastpost#lastpost">2009-7-16 22:36</a></em>
					<cite>by <a href="space.php?username=Mr.Bigflowercat">Mr.Bigflowercat</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_26630" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=26630&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_26630"><a href="viewthread.php?tid=26630&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">西方敌对国家又在造谣中伤河蟹国海军</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8643">nikon</a>
										</cite>
					<em>2009-10-30</em>
				</td>
				<td class="nums"><strong>41</strong> / <em>876</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=26630&goto=lastpost#lastpost">2009-11-2 11:47</a></em>
					<cite>by <a href="space.php?username=hellgate">hellgate</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_27999" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=27999&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_27999"><a href="viewthread.php?tid=27999&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">胡称“中国发展所遇问题世界罕见”</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4570">我卖糕的</a>
										</cite>
					<em>2009-11-14</em>
				</td>
				<td class="nums"><strong>41</strong> / <em>756</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=27999&goto=lastpost#lastpost">2009-11-18 23:05</a></em>
					<cite>by <a href="space.php?username=%CC%A4%D1%A9%D1%B0%C3%B7">踏雪寻梅</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_29596" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=29596&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_29596"><a href="viewthread.php?tid=29596&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">公安部长孟建柱：网络成反华势力主手段 拟建设“天罗地网”</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4570">我卖糕的</a>
										</cite>
					<em>2009-12-1</em>
				</td>
				<td class="nums"><strong>41</strong> / <em>959</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=29596&goto=lastpost#lastpost">2009-12-2 20:03</a></em>
					<cite>by <a href="space.php?username=%D1%F4%B9%E2%B2%BB%D0%E2">阳光不锈</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_30081" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=30081&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_30081"><a href="viewthread.php?tid=30081&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">重庆落马官员乌小青在看守所畏罪上吊自杀</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3339">机器猫阿福</a>
										</cite>
					<em>2009-11-29</em>
				</td>
				<td class="nums"><strong>41</strong> / <em>938</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=30081&goto=lastpost#lastpost">2009-12-6 11:44</a></em>
					<cite>by <a href="space.php?username=wistreer">wistreer</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_29438" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=29438&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_29438"><a href="viewthread.php?tid=29438&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">成龙：我虽然是中国人，但我是属于全世界人民的</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3202">glim</a>
										</cite>
					<em>2009-11-30</em>
				</td>
				<td class="nums"><strong>41</strong> / <em>863</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=29438&goto=lastpost#lastpost">2009-12-14 19:30</a></em>
					<cite>by <a href="space.php?username=%B5%B3%D3%D3%D6%D0%B9%FA">党佑中国</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_31031" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=31031&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_31031"><a href="viewthread.php?tid=31031&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">CNNIC停止个人用户域名注册</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5404">江南的雨季</a>
										</cite>
					<em>2009-12-12</em>
				</td>
				<td class="nums"><strong>41</strong> / <em>696</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=31031&goto=lastpost#lastpost">2009-12-15 11:14</a></em>
					<cite>by <a href="space.php?username=mayflower">mayflower</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_31756" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=31756&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_31756"><a href="viewthread.php?tid=31756&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">重庆全面监控歌厅 点唱低俗歌曲将自动报警</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4570">我卖糕的</a>
										</cite>
					<em>2009-12-19</em>
				</td>
				<td class="nums"><strong>41</strong> / <em>833</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=31756&goto=lastpost#lastpost">2009-12-20 20:44</a></em>
					<cite>by <a href="space.php?username=jo.xixifusi">jo.xixifusi</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_31453" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=31453&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_31453"><a href="viewthread.php?tid=31453&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">河南拆迁户的孩子被扔下楼</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=144">mfs0616</a>
										</cite>
					<em>2009-12-17</em>
				</td>
				<td class="nums"><strong>41</strong> / <em>1161</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=31453&goto=lastpost#lastpost">2009-12-23 22:26</a></em>
					<cite>by <a href="space.php?username=xuyuan415">xuyuan415</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_32137" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=32137&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_32137"><a href="viewthread.php?tid=32137&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">罚站学生被冻死 老师称其死得很安详</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4638">江湖席</a>
										</cite>
					<em>2009-12-23</em>
				</td>
				<td class="nums"><strong>41</strong> / <em>881</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=32137&goto=lastpost#lastpost">2009-12-25 20:53</a></em>
					<cite>by <a href="space.php?username=JudahXIII">JudahXIII</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_17086" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=17086&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_17086"><a href="viewthread.php?tid=17086&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">真理部联合信产部要求切断反动带宽</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2071">上肛上腺</a>
										</cite>
					<em>2009-7-18</em>
				</td>
				<td class="nums"><strong>41</strong> / <em>1187</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=17086&goto=lastpost#lastpost">2009-7-21 17:01</a></em>
					<cite>by <a href="space.php?username=M%B5%AF">M弹</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_17050" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=17050&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_17050"><a href="viewthread.php?tid=17050&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">海派清口的政治讽刺 周立波调侃“伟光正”</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4673">threeight</a>
										</cite>
					<em>2009-7-17</em>
				</td>
				<td class="nums"><strong>41</strong> / <em>1581</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=17050&goto=lastpost#lastpost">2009-7-23 09:56</a></em>
					<cite>by <a href="space.php?username=shzztt1688">shzztt1688</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_19000" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=19000&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_19000"><a href="viewthread.php?tid=19000&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">石家庄市楼房被雷倒 目前死者情绪稳定</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4570">我卖糕的</a>
										</cite>
					<em>2009-8-4</em>
				</td>
				<td class="nums"><strong>41</strong> / <em>1068</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=19000&goto=lastpost#lastpost">2009-8-7 17:37</a></em>
					<cite>by <a href="space.php?username=iancool">iancool</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_19073" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=19073&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_19073"><a href="viewthread.php?tid=19073&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">律师要讲政治正确 并努力实现党的工作对律师行业的全覆盖</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2578">闹了个运</a>
										</cite>
					<em>2009-8-7</em>
				</td>
				<td class="nums"><strong>41</strong> / <em>570</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=19073&goto=lastpost#lastpost">2009-8-7 17:52</a></em>
					<cite>by <a href="space.php?username=wang3">wang3</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_19829" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=19829&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_19829"><a href="viewthread.php?tid=19829&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">求一则新闻细节：军用手榴弹用于清除“钉子户”</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2132">花想容</a>
										</cite>
					<em>2009-8-16</em>
				</td>
				<td class="nums"><strong>41</strong> / <em>795</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=19829&goto=lastpost#lastpost">2009-8-17 23:05</a></em>
					<cite>by <a href="space.php?username=mmllkk">mmllkk</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_32976" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=32976&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_32976"><a href="viewthread.php?tid=32976&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">我国规定养老保险今后不得办理退保</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7666">大王</a>
										</cite>
					<em>2009-12-30</em>
				</td>
				<td class="nums"><strong>41</strong> / <em>821</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=32976&goto=lastpost#lastpost">2010-1-6 14:54</a></em>
					<cite>by <a href="space.php?username=%C1%BC%C3%F1">良民</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_33338" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=33338&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_33338"><a href="viewthread.php?tid=33338&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">彭宇案中的“南京徐老太”逝世</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3900">mcdull</a>
										</cite>
					<em>2010-1-2</em>
				</td>
				<td class="nums"><strong>41</strong> / <em>1565</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=33338&goto=lastpost#lastpost">2010-1-7 20:55</a></em>
					<cite>by <a href="space.php?username=%CE%F7%C3%C5%B4%B5%C5%A3">西门吹牛</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_33569" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=33569&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_33569"><a href="viewthread.php?tid=33569&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">胡舒立入主《新世纪周刊》后的第一期杂志已出刊</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=9953">大师</a>
										</cite>
					<em>2010-1-3</em>
				</td>
				<td class="nums"><strong>41</strong> / <em>1509</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=33569&goto=lastpost#lastpost">2010-1-8 22:32</a></em>
					<cite>by <a href="space.php?username=%C0%EE%CE%A2%B0%BD">李微敖</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_34382" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=34382&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_34382"><a href="viewthread.php?tid=34382&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">一线城市二手房成交量全线崩溃</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4570">我卖糕的</a>
										</cite>
					<em>2010-1-12</em>
				</td>
				<td class="nums"><strong>41</strong> / <em>1306</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=34382&goto=lastpost#lastpost">2010-1-13 10:56</a></em>
					<cite>by <a href="space.php?username=jason32">jason32</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_34185" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=34185&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_34185"><a href="viewthread.php?tid=34185&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">金正日决心改善民生 让人民吃上米饭喝上肉汤</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4570">我卖糕的</a>
										</cite>
					<em>2010-1-10</em>
				</td>
				<td class="nums"><strong>41</strong> / <em>1036</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=34185&goto=lastpost#lastpost">2010-1-14 13:00</a></em>
					<cite>by <a href="space.php?username=nightmare">nightmare</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_35199" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=35199&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_35199"><a href="viewthread.php?tid=35199&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">重庆一公民：薄书记，请你到酉阳县江丰乡反黑</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6065">流风</a>
										</cite>
					<em>2010-1-18</em>
				</td>
				<td class="nums"><strong>41</strong> / <em>617</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=35199&goto=lastpost#lastpost">2010-1-21 00:22</a></em>
					<cite>by <a href="space.php?username=zhangqian1896">zhangqian1896</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_35255" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=35255&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_35255"><a href="viewthread.php?tid=35255&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">中国演艺名人道德修养指数榜发布 宋祖英居首</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3194">zhangqian1896</a>
										</cite>
					<em>2010-1-19</em>
				</td>
				<td class="nums"><strong>41</strong> / <em>1003</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=35255&goto=lastpost#lastpost">2010-1-21 09:03</a></em>
					<cite>by <a href="space.php?username=DarkStar">DarkStar</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_36275" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=36275&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_36275"><a href="viewthread.php?tid=36275&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">湖南规定湘菜标准 毛氏红烧肉须取自宁乡猪</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=11159">一九八五</a>
										</cite>
					<em>2010-1-28</em>
				</td>
				<td class="nums"><strong>41</strong> / <em>645</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=36275&goto=lastpost#lastpost">2010-1-31 23:36</a></em>
					<cite>by <a href="space.php?username=astding">astding</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_36633" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=36633&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_36633"><a href="viewthread.php?tid=36633&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">金正银的生日被朝鲜指定为民族最大节庆</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=11076">有颜色</a>
										</cite>
					<em>2010-1-9</em>
				</td>
				<td class="nums"><strong>41</strong> / <em>1257</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=36633&goto=lastpost#lastpost">2010-2-2 21:25</a></em>
					<cite>by <a href="space.php?username=halfbogey">halfbogey</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_36461" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=36461&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_36461"><a href="viewthread.php?tid=36461&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传，胡在电影博物馆包场观看IMAX《阿凡达》</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=9591">吃吃饭</a>
										</cite>
					<em>2010-1-31</em>
				</td>
				<td class="nums"><strong>41</strong> / <em>2580</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=36461&goto=lastpost#lastpost">2010-2-2 22:22</a></em>
					<cite>by <a href="space.php?username=%CB%AE%CE%AA%D6%AE">水为之</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_36881" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=36881&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_36881"><a href="viewthread.php?tid=36881&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">耶鲁校长：中国顶尖大学25年内将跻身世界十大</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8301">lqunl</a>
										</cite>
					<em>2010-2-4</em>
				</td>
				<td class="nums"><strong>41</strong> / <em>705</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=36881&goto=lastpost#lastpost">2010-2-10 16:12</a></em>
					<cite>by <a href="space.php?username=%C3%CE%D0%D1%CB%E6%D3%F6">梦醒随遇</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_37958" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=37958&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_37958"><a href="viewthread.php?tid=37958&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">农民画家吴广巨为影帝画像</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1408">becom</a>
										</cite>
					<em>2010-2-18</em>
				</td>
				<td class="nums"><strong>41</strong> / <em>982</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=37958&goto=lastpost#lastpost">2010-2-22 13:23</a></em>
					<cite>by <a href="space.php?username=NiRMcBride">NiRMcBride</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_38978" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=38978&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_38978"><a href="viewthread.php?tid=38978&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">洪晃透露某大导演好让女人舔脚趾头</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8301">lqunl</a>
										</cite>
					<em>2010-3-2</em>
				</td>
				<td class="nums"><strong>41</strong> / <em>2236</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=38978&goto=lastpost#lastpost">2010-3-4 22:26</a></em>
					<cite>by <a href="space.php?username=caoyi7070">caoyi7070</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_39619" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=39619&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_39619"><a href="viewthread.php?tid=39619&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">毛新宇开通人民微薄</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8638">dark</a>
										</cite>
					<em>2010-3-8</em>
				</td>
				<td class="nums"><strong>41</strong> / <em>848</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=39619&goto=lastpost#lastpost">2010-3-10 02:16</a></em>
					<cite>by <a href="space.php?username=%B2%BB%BE%B4%C9%F1%B5%C4YODA">不敬神的YODA</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_39688" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=39688&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_39688"><a href="viewthread.php?tid=39688&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">人大代表沈长富建议屏蔽“囧”字</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3202">glim</a>
										</cite>
					<em>2010-3-9</em>
				</td>
				<td class="nums"><strong>41</strong> / <em>847</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=39688&goto=lastpost#lastpost">2010-3-11 06:39</a></em>
					<cite>by <a href="space.php?username=%D2%F9%C3%F1%C1%A6%C1%BF">淫民力量</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_2336" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=2336&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_2336"><a href="viewthread.php?tid=2336&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">中国性启蒙导师饭岛爱女士逝世</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1258">路边社记者</a>
										</cite>
					<em>2008-12-24</em>
				</td>
				<td class="nums"><strong>41</strong> / <em>534</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=2336&goto=lastpost#lastpost">2008-12-25 09:23</a></em>
					<cite>by <a href="space.php?username=guankeng">guankeng</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_10067" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=10067&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_10067"><a href="viewthread.php?tid=10067&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">拥护中国敏感词过滤的领导</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2472">Noel</a>
										</cite>
					<em>2009-4-30</em>
				</td>
				<td class="nums"><strong>41</strong> / <em>1164</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=10067&goto=lastpost#lastpost">2009-5-2 00:58</a></em>
					<cite>by <a href="space.php?username=%5B17%5D%CC%C3%BC%AA%BF%C2%B5%C2">[17]堂吉柯德</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_11090" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=11090&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_11090"><a href="viewthread.php?tid=11090&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">预测下今年的六三六五</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5913">1776a</a>
										</cite>
					<em>2009-5-17</em>
				</td>
				<td class="nums"><strong>41</strong> / <em>769</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=11090&goto=lastpost#lastpost">2009-5-18 13:46</a></em>
					<cite>by <a href="space.php?username=ireno">ireno</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_12155" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=12155&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_12155"><a href="viewthread.php?tid=12155&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">一个90后眼中的535</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3202">glim</a>
										</cite>
					<em>2009-5-29</em>
				</td>
				<td class="nums"><strong>41</strong> / <em>995</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=12155&goto=lastpost#lastpost">2009-5-31 18:17</a></em>
					<cite>by <a href="space.php?username=eat.eat">eat.eat</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_12461" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=12461&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_12461"><a href="viewthread.php?tid=12461&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">法航客机遇难人员中有辽宁省长的夫人？</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1408">becom</a>
										</cite>
					<em>2009-6-2</em>
				</td>
				<td class="nums"><strong>41</strong> / <em>1212</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=12461&goto=lastpost#lastpost">2009-6-3 23:43</a></em>
					<cite>by <a href="space.php?username=%B5%A5%CA%D6%B7%F6%C7%BD">单手扶墙</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_55019" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=55019&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_55019"><a href="viewthread.php?tid=55019&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">中国拍摄国家形象宣传片 宋祖英等诸明星参与</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8301">lqunl</a>
										</cite>
					<em>2010-8-5</em>
				</td>
				<td class="nums"><strong>41</strong> / <em>712</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=55019&goto=lastpost#lastpost">2010-8-9 10:49</a></em>
					<cite>by <a href="space.php?username=peteryang84">peteryang84</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_55788" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=55788&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_55788"><a href="viewthread.php?tid=55788&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">国民党吴伯雄因被指“认贼作父” 状告作者</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=134">丁丁</a>
										</cite>
					<em>2010-8-18</em>
				</td>
				<td class="nums"><strong>41</strong> / <em>391</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=55788&goto=lastpost#lastpost">2010-8-18 18:38</a></em>
					<cite>by <a href="space.php?username=%D2%BB%BE%C5%B0%CB%CE%E5">一九八五</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_56256" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=56256&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_56256"><a href="viewthread.php?tid=56256&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">中科院专家：与外星人接触需知己知彼勿主动挑衅</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=12412">wangguoping</a>
										</cite>
					<em>2010-8-23</em>
				</td>
				<td class="nums"><strong>41</strong> / <em>1101</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=56256&goto=lastpost#lastpost">2010-8-26 10:18</a></em>
					<cite>by <a href="space.php?username=%C8%CB%C3%F1%C8%BA%D6%DA">人民群众</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_58123" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=58123&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_58123"><a href="viewthread.php?tid=58123&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">全国各地卖家继续在淘宝总部抗议</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=17927">nik10000</a>
										</cite>
					<em>2010-9-11</em>
				</td>
				<td class="nums"><strong>41</strong> / <em>1596</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=58123&goto=lastpost#lastpost">2010-9-15 14:41</a></em>
					<cite>by <a href="space.php?username=%D0%A1%C2%ED%B9%FD%BA%D3">小马过河</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_58846" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=58846&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_58846"><a href="viewthread.php?tid=58846&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">清扬洗发水被疑不安全</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=12310">炽鸢侯</a>
										</cite>
					<em>2010-9-17</em>
				</td>
				<td class="nums"><strong>41</strong> / <em>792</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=58846&goto=lastpost#lastpost">2010-9-21 12:26</a></em>
					<cite>by <a href="space.php?username=%CE%D2%CA%C7%B2%A4%C2%DC%C3%DB">我是菠萝蜜</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_59123" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=59123&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_59123"><a href="viewthread.php?tid=59123&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传广电总局拟封杀美剧</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6314">hhbcl1414</a>
										</cite>
					<em>2010-9-22</em>
				</td>
				<td class="nums"><strong>41</strong> / <em>1695</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=59123&goto=lastpost#lastpost">2010-9-26 19:45</a></em>
					<cite>by <a href="space.php?username=%B7%A2%B7%E0%CD%BF%C7%BD">发粪涂墙</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_58776" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=58776&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_58776"><a href="viewthread.php?tid=58776&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">日本记者质疑台湾：为什么不向中国主张尖阁列岛主权</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=134">丁丁</a>
										</cite>
					<em>2010-9-17</em>
				</td>
				<td class="nums"><strong>41</strong> / <em>1174</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=58776&goto=lastpost#lastpost">2010-9-27 00:15</a></em>
					<cite>by <a href="space.php?username=%D4%C2%C7%F2%D4%DA%CB%D5%D0%D1">月球在苏醒</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_57698" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=57698&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_57698"><a href="viewthread.php?tid=57698&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">亚洲留学生在澳洲卖淫成风 周可赚10000澳元</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3202">glim</a>
										</cite>
					<em>2010-9-7</em>
				</td>
				<td class="nums"><strong>41</strong> / <em>1897</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=57698&goto=lastpost#lastpost">2010-9-27 18:24</a></em>
					<cite>by <a href="space.php?username=DD6677">DD6677</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_59778" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=59778&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_59778"><a href="viewthread.php?tid=59778&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">真理部最新指令：各报刊不得报道陈光标的负面新闻</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5588">我家旺财有喜了</a>
										</cite>
					<em>2010-9-29</em>
				</td>
				<td class="nums"><strong>41</strong> / <em>2190</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=59778&goto=lastpost#lastpost">2010-10-11 00:15</a></em>
					<cite>by <a href="space.php?username=%C2%F3%D4%B2">麦圆</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_60724" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=60724&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_60724"><a href="viewthread.php?tid=60724&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">人大教授周孝正因批毛遭封杀</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7002">luugoo</a>
										</cite>
					<em>2010-10-10</em>
				</td>
				<td class="nums"><strong>41</strong> / <em>1982</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=60724&goto=lastpost#lastpost">2010-10-11 23:53</a></em>
					<cite>by <a href="space.php?username=darkart000">darkart000</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_47012" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=47012&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_47012"><a href="viewthread.php?tid=47012&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">日本74岁僧人卢沟桥叩首谢罪</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2907">无言的山丘</a>
										</cite>
					<em>2010-5-25</em>
				</td>
				<td class="nums"><strong>41</strong> / <em>636</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=47012&goto=lastpost#lastpost">2010-5-28 02:27</a></em>
					<cite>by <a href="space.php?username=quaestor">quaestor</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_47566" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=47566&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_47566"><a href="viewthread.php?tid=47566&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">真理部最新指令：正确报道“富士康连环跳楼”</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=9737">剁辣椒</a>
										</cite>
					<em>2010-5-27</em>
				</td>
				<td class="nums"><strong>41</strong> / <em>1496</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=47566&goto=lastpost#lastpost">2010-5-29 12:43</a></em>
					<cite>by <a href="space.php?username=%C7%E0%C9%D9%C4%EA%B7%B4%D0%D4%C1%AA%C3%CB">青少年反性联盟</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_47146" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=47146&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_47146"><a href="viewthread.php?tid=47146&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">印度大学拒收中国独生子女</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3202">glim</a>
										</cite>
					<em>2010-5-26</em>
				</td>
				<td class="nums"><strong>41</strong> / <em>904</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=47146&goto=lastpost#lastpost">2010-6-1 00:18</a></em>
					<cite>by <a href="space.php?username=%BA%C3%CF%EB%BB%D8%BC%D2">好想回家</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_48796" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=48796&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_48796"><a href="viewthread.php?tid=48796&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">金正日实施第五次“血的肃清”</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2316">自由之春</a>
										</cite>
					<em>2010-6-9</em>
				</td>
				<td class="nums"><strong>41</strong> / <em>1566</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=48796&goto=lastpost#lastpost">2010-6-10 19:41</a></em>
					<cite>by <a href="space.php?username=lx5885">lx5885</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_51560" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=51560&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_51560"><a href="viewthread.php?tid=51560&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">国新办称谷歌必须遵守中国法律 回避许可证问题</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=144">mfs0616</a>
										</cite>
					<em>2010-7-1</em>
				</td>
				<td class="nums"><strong>41</strong> / <em>701</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=51560&goto=lastpost#lastpost">2010-7-3 10:09</a></em>
					<cite>by <a href="space.php?username=DaemonEye">DaemonEye</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_50588" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=50588&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_50588"><a href="viewthread.php?tid=50588&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">澳洲发生“无血政变” 陆克文下台</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7968">singlefabulous</a>
										</cite>
					<em>2010-6-24</em>
				</td>
				<td class="nums"><strong>41</strong> / <em>1589</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=50588&goto=lastpost#lastpost">2010-7-4 21:03</a></em>
					<cite>by <a href="space.php?username=%CF%C4%C2%E4%C2%ED">夏落马</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_52086" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=52086&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_52086"><a href="viewthread.php?tid=52086&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">美国全面反思转基因技术 医生提示避免食用</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5415">LXS</a>
										</cite>
					<em>2010-7-8</em>
				</td>
				<td class="nums"><strong>41</strong> / <em>769</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=52086&goto=lastpost#lastpost">2010-7-14 10:34</a></em>
					<cite>by <a href="space.php?username=uwen">uwen</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_53022" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=53022&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_53022"><a href="viewthread.php?tid=53022&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">中国接受WTO裁决 将开放娱乐产品市场</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=14174">duzhqi</a>
										</cite>
					<em>2010-7-15</em>
				</td>
				<td class="nums"><strong>41</strong> / <em>1044</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=53022&goto=lastpost#lastpost">2010-7-19 10:57</a></em>
					<cite>by <a href="space.php?username=walkjim">walkjim</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_53230" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=53230&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_53230"><a href="viewthread.php?tid=53230&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">长江委官员称今年不排除出现98式大洪水</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4764">我爱你家</a>
										</cite>
					<em>2010-7-13</em>
				</td>
				<td class="nums"><strong>41</strong> / <em>978</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=53230&goto=lastpost#lastpost">2010-7-19 21:40</a></em>
					<cite>by <a href="space.php?username=%D6%D0%C9%BD%CA%D7%C0%EF">中山首里</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_53484" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=53484&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_53484"><a href="viewthread.php?tid=53484&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">男子被当强奸犯枪决后真凶落网</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4570">我卖糕的</a>
										</cite>
					<em>2010-7-21</em>
				</td>
				<td class="nums"><strong>41</strong> / <em>1182</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=53484&goto=lastpost#lastpost">2010-7-23 21:39</a></em>
					<cite>by <a href="space.php?username=%C9%F1%D2%FE%D6%AE%D7%F3%CA%D6">神隐之左手</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_47081" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=47081&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_47081"><a href="viewthread.php?tid=47081&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">韩国称“李白是韩国人”的报导全是子虚乌有</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=134">丁丁</a>
										</cite>
					<em>2010-5-21</em>
				</td>
				<td class="nums"><strong>40</strong> / <em>983</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=47081&goto=lastpost#lastpost">2010-5-27 23:02</a></em>
					<cite>by <a href="space.php?username=huanglei1983">huanglei1983</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_46981" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=46981&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_46981"><a href="viewthread.php?tid=46981&amp;extra=page%3D35%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">一周图片新闻 5.24-5.30</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2232">老杂疫</a>
										</cite>
					<em>2010-5-25</em>
				</td>
				<td class="nums"><strong>40</strong> / <em>1167</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=46981&goto=lastpost#lastpost">2010-5-29 15:23</a></em>
					<cite>by <a href="space.php?username=%D2%D4%B5%D8%D6%AE%C3%FB">以地之名</a></cite>
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
	<div class="pages"><em>&nbsp;22278&nbsp;</em><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=1" class="first">1 ...</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=34" class="prev">&lsaquo;&lsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=33">33</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=34">34</a><strong>35</strong><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=36">36</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=37">37</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=38">38</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=39">39</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=40">40</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=41">41</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=42">42</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=36" class="next">&rsaquo;&rsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=349" class="last">... 349</a><kbd><input type="text" name="custompage" size="3" onkeydown="if(event.keyCode==13) {window.location='forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page='+this.value; return false;}" /></kbd></div>	</div>

  
	<div class="box">
			<span class="headactions"><a href="forumdisplay.php?fid=2&amp;page=35&amp;showoldetails=yes#online" class="nobdr"><img src="images/default/collapsed_yes.gif" alt="" /></a></span>
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
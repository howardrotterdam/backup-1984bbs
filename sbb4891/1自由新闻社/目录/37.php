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
			window.location = 'forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&page=36';
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
<div class="pages"><em>&nbsp;22278&nbsp;</em><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=1" class="first">1 ...</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=36" class="prev">&lsaquo;&lsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=35">35</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=36">36</a><strong>37</strong><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=38">38</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=39">39</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=40">40</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=41">41</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=42">42</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=43">43</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=44">44</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=38" class="next">&rsaquo;&rsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=349" class="last">... 349</a><kbd><input type="text" name="custompage" size="3" onkeydown="if(event.keyCode==13) {window.location='forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page='+this.value; return false;}" /></kbd></div></div>

<div style="float:left;border:1px solid #CCC; border-bottom:none;;width:218px; background: url(/imgs/1984radio.jpg) 200px 2px no-repeat;padding:5px 0 5px 12px;margin:0px 0 0 13px">

<p><b><a href="/radio/index.php" target="_blank">1984FM</a></b><br /><b><a href="https://voxli.com/1984bbs" target="_blank">1984Chat</a></b>&nbsp;</p> 
</div>

<div style="clear:both;height:0px;width:100%;font-size:1px;">&nbsp;</div>

	<ul class="popupmenu_popup newspecialmenu" id="newspecial_menu" style="display: none">
		<li><a href="post.php?action=newthread&amp;fid=2&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">发新话题</a></li>		<li class="poll"><a href="post.php?action=newthread&amp;fid=2&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;special=1">发布投票</a></li>													</ul>
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

					<tbody id="normalthread_16372" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=16372&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_16372"><a href="viewthread.php?tid=16372&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">我朝让敌人肝胆俱裂的肉喇叭正式退休</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2071">上肛上腺</a>
										</cite>
					<em>2009-7-9</em>
				</td>
				<td class="nums"><strong>40</strong> / <em>1247</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=16372&goto=lastpost#lastpost">2009-7-12 21:48</a></em>
					<cite>by <a href="space.php?username=%CE%F7%C3%C5%B4%B5%C5%A3">西门吹牛</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_16551" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=16551&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_16551"><a href="viewthread.php?tid=16551&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">大学生下乡为留守儿童装“绿坝”</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1680">robin</a>
										</cite>
					<em>2009-7-12</em>
				</td>
				<td class="nums"><strong>40</strong> / <em>653</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=16551&goto=lastpost#lastpost">2009-7-18 10:03</a></em>
					<cite>by <a href="space.php?username=%B0%A2%C5%A3">阿牛</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_54796" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=54796&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_54796"><a href="viewthread.php?tid=54796&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">百度CEO：我们也不喜欢审查</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8301">lqunl</a>
										</cite>
					<em>2010-8-6</em>
				</td>
				<td class="nums"><strong>40</strong> / <em>1238</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=54796&goto=lastpost#lastpost">2010-8-9 13:44</a></em>
					<cite>by <a href="space.php?username=lakespurs23">lakespurs23</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_57981" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=57981&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_57981"><a href="viewthread.php?tid=57981&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">温家宝：我是球迷 年轻玩棒球篮球 如今玩柔力球</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=18884">人民网评</a>
										</cite>
					<em>2010-9-9</em>
				</td>
				<td class="nums"><strong>40</strong> / <em>881</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=57981&goto=lastpost#lastpost">2010-9-13 08:20</a></em>
					<cite>by <a href="space.php?username=glim">glim</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_57147" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=57147&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_57147"><a href="viewthread.php?tid=57147&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">陕西渭南警方进京抓作家 称其出书涉非法经营</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2804">musicool</a>
										</cite>
					<em>2010-9-1</em>
				</td>
				<td class="nums"><strong>40</strong> / <em>604</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=57147&goto=lastpost#lastpost">2010-9-13 22:22</a></em>
					<cite>by <a href="space.php?username=musicool">musicool</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_58881" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=58881&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_58881"><a href="viewthread.php?tid=58881&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">孙丹丹纽约起诉温家宝 中共高层作出反应</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=803">weke</a>
										</cite>
					<em>2010-9-18</em>
				</td>
				<td class="nums"><strong>40</strong> / <em>2347</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=58881&goto=lastpost#lastpost">2010-9-25 21:30</a></em>
					<cite>by <a href="space.php?username=cllc">cllc</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_59595" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=59595&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_59595"><a href="viewthread.php?tid=59595&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">腾讯公司回应指责：我们绝对没有窥探用户隐私</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=12310">炽鸢侯</a>
										</cite>
					<em>2010-9-27</em>
				</td>
				<td class="nums"><strong>40</strong> / <em>1300</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=59595&goto=lastpost#lastpost">2010-10-3 02:16</a></em>
					<cite>by <a href="space.php?username=stlazy">stlazy</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_59972" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=59972&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_59972"><a href="viewthread.php?tid=59972&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">辽宁5名警察检察院门口遭工作人员殴打</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4570">我卖糕的</a>
										</cite>
					<em>2010-10-2</em>
				</td>
				<td class="nums"><strong>40</strong> / <em>790</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=59972&goto=lastpost#lastpost">2010-10-5 17:54</a></em>
					<cite>by <a href="space.php?username=%D0%C4%BA%A3%C7%D9%D2%F4">心海琴音</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_18881" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=18881&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																					<img src="images/default/digest_1.gif" alt="火星帖 1" />
										 </label>
																				<span id="thread_18881"><a href="viewthread.php?tid=18881&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">李敖：我和你们一样</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=852">未来他老爸</a>
										</cite>
					<em>2009-8-5</em>
				</td>
				<td class="nums"><strong>40</strong> / <em>757</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=18881&goto=lastpost#lastpost">2007-8-8 11:58</a></em>
					<cite>by <a href="space.php?username=shzztt1688">shzztt1688</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_43671" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=43671&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_43671"><a href="viewthread.php?tid=43671&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">上海东方明珠顶部起火</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5494">肉の包包</a>
										</cite>
					<em>2010-4-13</em>
				</td>
				<td class="nums"><strong>40</strong> / <em>919</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=43671&goto=lastpost#lastpost">2008-4-21 12:11</a></em>
					<cite>by <a href="space.php?username=%CE%B4%C0%B4%CB%FB%C0%CF%B0%D6">未来他老爸</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_32475" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=32475&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_32475"><a href="viewthread.php?tid=32475&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">罗京借搜狐新闻还魂  称头发长出来需要时间</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=144">mfs0616</a>
										</cite>
					<em>2009-12-25</em>
				</td>
				<td class="nums"><strong>40</strong> / <em>1249</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=32475&goto=lastpost#lastpost">2009-12-28 21:53</a></em>
					<cite>by <a href="space.php?username=%CE%F7%C3%C5%B4%B5%C5%A3">西门吹牛</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_32848" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=32848&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_32848"><a href="viewthread.php?tid=32848&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">影帝接受新华社独家专访</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4638">江湖席</a>
										</cite>
					<em>2009-12-27</em>
				</td>
				<td class="nums"><strong>40</strong> / <em>1209</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=32848&goto=lastpost#lastpost">2009-12-29 08:55</a></em>
					<cite>by <a href="space.php?username=mason">mason</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_10424" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=10424&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_10424"><a href="viewthread.php?tid=10424&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">深度八卦填空题：破解中国高层迷局</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2789">RFI曹国星</a>
										</cite>
					<em>2009-5-6</em>
				</td>
				<td class="nums"><strong>40</strong> / <em>2602</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=10424&goto=lastpost#lastpost">2010-1-2 01:12</a></em>
					<cite>by <a href="space.php?username=%89%F2%D9v%BA%C8%D1%AA%C9%E4%C0L">夠賤喝血射繪</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_33022" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=33022&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_33022"><a href="viewthread.php?tid=33022&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">党媒报道秦城监狱现状 披露陈希同处于直肠癌晚期</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4449">mj_luck13</a>
										</cite>
					<em>2009-12-29</em>
				</td>
				<td class="nums"><strong>40</strong> / <em>1342</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=33022&goto=lastpost#lastpost">2010-1-2 14:44</a></em>
					<cite>by <a href="space.php?username=%B2%CB%D0%C4%B3%E6">菜心虫</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_2735" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=2735&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_2735"><a href="viewthread.php?tid=2735&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">《炎黄春秋》接到要杀杨继绳的恐吓电话</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=22">abu</a>
										</cite>
					<em>2009-1-2</em>
				</td>
				<td class="nums"><strong>40</strong> / <em>1706</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=2735&goto=lastpost#lastpost">2010-1-10 01:58</a></em>
					<cite>by <a href="space.php?username=%D7%F3%B0%B6%A1%FB%D3%D2%B0%B6">左岸←右岸</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_35045" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=35045&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_35045"><a href="viewthread.php?tid=35045&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">国资委主任李荣融抱怨奥迪公司不把他当上帝</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=24">wang3</a>
										</cite>
					<em>2010-1-11</em>
				</td>
				<td class="nums"><strong>40</strong> / <em>1238</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=35045&goto=lastpost#lastpost">2010-1-20 17:49</a></em>
					<cite>by <a href="space.php?username=zhangdsh">zhangdsh</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_35256" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=35256&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_35256"><a href="viewthread.php?tid=35256&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">成龙谭晶同唱《接你回家》迎接维和儿女</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=9214">英雄贵姓</a>
										</cite>
					<em>2010-1-19</em>
				</td>
				<td class="nums"><strong>40</strong> / <em>636</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=35256&goto=lastpost#lastpost">2010-1-20 18:01</a></em>
					<cite>by <a href="space.php?username=%D0%CB%C8%A4%D0%A1%BD%E3">兴趣小姐</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_35931" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=35931&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_35931"><a href="viewthread.php?tid=35931&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">巨浪二型试射又失败 潜舰差点沉没</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8301">lqunl</a>
										</cite>
					<em>2010-1-25</em>
				</td>
				<td class="nums"><strong>40</strong> / <em>1344</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=35931&goto=lastpost#lastpost">2010-1-27 03:02</a></em>
					<cite>by <a href="space.php?username=%BA%F4%BA%F4%C3%A8">呼呼猫</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_36344" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=36344&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_36344"><a href="viewthread.php?tid=36344&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">Twitter CEO：希望用技术对抗中共审查</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2441">高渐离</a>
										</cite>
					<em>2010-1-28</em>
				</td>
				<td class="nums"><strong>40</strong> / <em>1634</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=36344&goto=lastpost#lastpost">2010-2-2 00:02</a></em>
					<cite>by <a href="space.php?username=giantwoo">giantwoo</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_36837" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=36837&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_36837"><a href="viewthread.php?tid=36837&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">真理部“妈妈评审团”：寻黄是个技术活</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3202">glim</a>
										</cite>
					<em>2010-2-4</em>
				</td>
				<td class="nums"><strong>40</strong> / <em>743</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=36837&goto=lastpost#lastpost">2010-2-5 11:04</a></em>
					<cite>by <a href="space.php?username=Evey">Evey</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_36873" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=36873&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_36873"><a href="viewthread.php?tid=36873&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">可口可乐称北京汞中毒雪碧系人为恶意添加</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=10619">voasia</a>
										</cite>
					<em>2010-2-2</em>
				</td>
				<td class="nums"><strong>40</strong> / <em>1145</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=36873&goto=lastpost#lastpost">2010-2-10 23:33</a></em>
					<cite>by <a href="space.php?username=waiting_it">waiting_it</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_38894" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=38894&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_38894"><a href="viewthread.php?tid=38894&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传，中组部公布离退中央领导待遇</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7">张书记</a>
										</cite>
					<em>2010-2-25</em>
				</td>
				<td class="nums"><strong>40</strong> / <em>1880</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=38894&goto=lastpost#lastpost">2010-3-3 09:26</a></em>
					<cite>by <a href="space.php?username=%CB%AE%CE%AA%D6%AE">水为之</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_39025" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=39025&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_39025"><a href="viewthread.php?tid=39025&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">用友致远软件行贿记录清单流出</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=10890">xiaohe1120</a>
										</cite>
					<em>2010-3-3</em>
				</td>
				<td class="nums"><strong>40</strong> / <em>1163</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=39025&goto=lastpost#lastpost">2010-3-4 15:06</a></em>
					<cite>by <a href="space.php?username=%D0%A1%C1%FA%C8%CB">小龙人</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_9815" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=9815&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_9815"><a href="viewthread.php?tid=9815&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">司马平邦：我无法容忍诺奖没有颁给温总理而颁给婊子</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7">张书记</a>
										</cite>
					<em>2008-9-27</em>
				</td>
				<td class="nums"><strong>40</strong> / <em>1017</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=9815&goto=lastpost#lastpost">2009-4-29 10:56</a></em>
					<cite>by <a href="space.php?username=%B7%C5%D6%F0">放逐</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_9889" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=9889&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_9889"><a href="viewthread.php?tid=9889&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">柴玲：俺是被诽谤的</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2441">高渐离</a>
										</cite>
					<em>2009-4-28</em>
				</td>
				<td class="nums"><strong>40</strong> / <em>943</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=9889&goto=lastpost#lastpost">2009-5-1 22:07</a></em>
					<cite>by <a href="space.php?username=%CD%F1%CD%F1">婉婉</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_10464" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=10464&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_10464"><a href="viewthread.php?tid=10464&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">广州电视记者文章 引起很有水平的争论</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5140">kakagoing</a>
										</cite>
					<em>2009-5-7</em>
				</td>
				<td class="nums"><strong>40</strong> / <em>1035</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=10464&goto=lastpost#lastpost">2009-5-16 12:25</a></em>
					<cite>by <a href="space.php?username=dadyisman">dadyisman</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_10649" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=10649&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_10649"><a href="viewthread.php?tid=10649&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">医药代表群P大夫，HIV满院传播</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2071">上肛上腺</a>
										</cite>
					<em>2009-5-9</em>
				</td>
				<td class="nums"><strong>40</strong> / <em>1463</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=10649&goto=lastpost#lastpost">2009-5-17 22:10</a></em>
					<cite>by <a href="space.php?username=%C8%A1%B8%F6%C3%FB%D7%D6%BA%C3%BC%C7%B5%C4">取个名字好记的</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_11086" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=11086&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_11086"><a href="viewthread.php?tid=11086&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">戛纳艳影</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2232">老杂疫</a>
										</cite>
					<em>2009-5-17</em>
				</td>
				<td class="nums"><strong>40</strong> / <em>1148</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=11086&goto=lastpost#lastpost">2009-5-18 21:32</a></em>
					<cite>by <a href="space.php?username=paranoiac">paranoiac</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_10891" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=10891&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_10891"><a href="viewthread.php?tid=10891&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">菊与刀：一场色情与政治的当代隐喻</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2028">猪肘</a>
										</cite>
					<em>2009-5-12</em>
				</td>
				<td class="nums"><strong>39</strong> / <em>1491</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=10891&goto=lastpost#lastpost">2009-5-14 22:20</a></em>
					<cite>by <a href="space.php?username=%CB%C0%D5%DF%BC%D2%CA%F4">死者家属</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_12543" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=12543&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_12543"><a href="viewthread.php?tid=12543&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">特殊时期，宿舍内部学习资料流出</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1310">小宸宸</a>
										</cite>
					<em>2009-6-3</em>
				</td>
				<td class="nums"><strong>39</strong> / <em>1571</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=12543&goto=lastpost#lastpost">2009-6-4 18:57</a></em>
					<cite>by <a href="space.php?username=Adon">Adon</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_12945" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=12945&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_12945"><a href="viewthread.php?tid=12945&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">赌场</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2232">老杂疫</a>
										</cite>
					<em>2009-6-7</em>
				</td>
				<td class="nums"><strong>39</strong> / <em>761</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=12945&goto=lastpost#lastpost">2009-6-9 23:23</a></em>
					<cite>by <a href="space.php?username=ak74">ak74</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_13065" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=13065&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_13065"><a href="viewthread.php?tid=13065&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">自杀新技术，许大官人“吞筷子”</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2564">老卡</a>
										</cite>
					<em>2009-6-9</em>
				</td>
				<td class="nums"><strong>39</strong> / <em>1206</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=13065&goto=lastpost#lastpost">2009-6-10 20:51</a></em>
					<cite>by <a href="space.php?username=%C3%C0%C3%CE%B7%B7%C2%F4%BB%FA">美梦贩卖机</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_5694" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=5694&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_5694"><a href="viewthread.php?tid=5694&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">为响应储君“吃饱了没事干”讲话精神 爱国青年毅然跳进冰窟窿</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=80">国家罗汉</a>
										</cite>
					<em>2009-2-25</em>
				</td>
				<td class="nums"><strong>39</strong> / <em>706</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=5694&goto=lastpost#lastpost">2009-2-26 17:39</a></em>
					<cite>by <a href="space.php?username=3978686">3978686</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_6131" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=6131&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_6131"><a href="viewthread.php?tid=6131&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">萧瀚：关于“六三六五”真相与和解的建议书</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2576">阿啃1919</a>
										</cite>
					<em>2009-3-3</em>
				</td>
				<td class="nums"><strong>39</strong> / <em>834</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=6131&goto=lastpost#lastpost">2009-3-7 21:07</a></em>
					<cite>by <a href="space.php?username=%B0%D7%B2%E8">白茶</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_21593" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=21593&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_21593"><a href="viewthread.php?tid=21593&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">明报：打针党再现群众高呼“打死她”</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8525">wtdd</a>
										</cite>
					<em>2009-9-7</em>
				</td>
				<td class="nums"><strong>39</strong> / <em>1178</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=21593&goto=lastpost#lastpost">2009-9-9 13:53</a></em>
					<cite>by <a href="space.php?username=eagles">eagles</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_21200" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=21200&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_21200"><a href="viewthread.php?tid=21200&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">蓝坝即将推出？色情下载将被斩断 碟商喜笑颜开</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=105">黄阿狗</a>
										</cite>
					<em>2009-9-2</em>
				</td>
				<td class="nums"><strong>39</strong> / <em>1285</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=21200&goto=lastpost#lastpost">2009-9-16 23:21</a></em>
					<cite>by <a href="space.php?username=Jyamolmiry">Jyamolmiry</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_22328" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=22328&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_22328"><a href="viewthread.php?tid=22328&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">北京今起禁飞 鸽子风筝纳入禁飞范围</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2234">袖手看热闹</a>
										</cite>
					<em>2009-9-15</em>
				</td>
				<td class="nums"><strong>39</strong> / <em>599</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=22328&goto=lastpost#lastpost">2009-9-18 16:43</a></em>
					<cite>by <a href="space.php?username=yijiubasi">yijiubasi</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_22481" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=22481&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_22481"><a href="viewthread.php?tid=22481&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">跨年级交女朋友是违法行为</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=144">mfs0616</a>
										</cite>
					<em>2009-9-17</em>
				</td>
				<td class="nums"><strong>39</strong> / <em>1159</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=22481&goto=lastpost#lastpost">2009-9-20 08:52</a></em>
					<cite>by <a href="space.php?username=%CA%F7%C9%CF%B4%BA%B4%E5">树上春村</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_22783" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=22783&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_22783"><a href="viewthread.php?tid=22783&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">北京65辆国庆彩车大赏</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2232">老杂疫</a>
										</cite>
					<em>2009-9-20</em>
				</td>
				<td class="nums"><strong>39</strong> / <em>617</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=22783&goto=lastpost#lastpost">2009-9-21 20:57</a></em>
					<cite>by <a href="space.php?username=id%D2%D1%B1%BB%C2%CC%B0%D3%C6%C1%B1%CE">id已被绿坝屏蔽</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_15874" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=15874&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_15874"><a href="viewthread.php?tid=15874&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">天朝官员为何只在机场发表讲话？</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4207">skyking0752</a>
										</cite>
					<em>2009-7-5</em>
				</td>
				<td class="nums"><strong>39</strong> / <em>1257</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=15874&goto=lastpost#lastpost">2009-9-25 00:49</a></em>
					<cite>by <a href="space.php?username=skyking0752">skyking0752</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_23268" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=23268&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_23268"><a href="viewthread.php?tid=23268&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">90后爱国妹为60大寿献上“女体盛”</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=852">未来他老爸</a>
										</cite>
					<em>2009-9-24</em>
				</td>
				<td class="nums"><strong>39</strong> / <em>1447</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=23268&goto=lastpost#lastpost">2009-9-25 14:59</a></em>
					<cite>by <a href="space.php?username=wistreer">wistreer</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_21926" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=21926&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_21926"><a href="viewthread.php?tid=21926&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">香港愤怒了</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2557">阑夕</a>
										</cite>
					<em>2009-9-10</em>
				</td>
				<td class="nums"><strong>39</strong> / <em>1955</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=21926&goto=lastpost#lastpost">2009-9-27 11:59</a></em>
					<cite>by <a href="space.php?username=%C3%C9%C9%AF">蒙莎</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_23868" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=23868&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_23868"><a href="viewthread.php?tid=23868&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">山东某技院发生群体事件</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2664">kingsilent</a>
										</cite>
					<em>2009-9-29</em>
				</td>
				<td class="nums"><strong>39</strong> / <em>1284</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=23868&goto=lastpost#lastpost">2009-10-2 14:42</a></em>
					<cite>by <a href="space.php?username=xuanya">xuanya</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_21815" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=21815&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_21815"><a href="viewthread.php?tid=21815&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">陈专家再度辟谣：三峡跟地震么关系</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3202">glim</a>
										</cite>
					<em>2009-9-10</em>
				</td>
				<td class="nums"><strong>39</strong> / <em>960</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=21815&goto=lastpost#lastpost">2009-10-2 16:34</a></em>
					<cite>by <a href="space.php?username=%D0%A1%C2%A5">小楼</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_24076" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=24076&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_24076"><a href="viewthread.php?tid=24076&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">北京火车站一妇女高喊“中国万岁”被警方制止</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7">张书记</a>
										</cite>
					<em>2009-10-1</em>
				</td>
				<td class="nums"><strong>39</strong> / <em>1751</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=24076&goto=lastpost#lastpost">2009-10-4 14:51</a></em>
					<cite>by <a href="space.php?username=%B6%DF%C0%B2%CF%B8%B0%FB">哆啦细胞</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_24183" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=24183&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_24183"><a href="viewthread.php?tid=24183&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">2016奥运会举办城市竞标</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2531">查理猛干</a>
										</cite>
					<em>2009-10-2</em>
				</td>
				<td class="nums"><strong>39</strong> / <em>590</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=24183&goto=lastpost#lastpost">2009-10-6 16:51</a></em>
					<cite>by <a href="space.php?username=Jyamolmiry">Jyamolmiry</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_23590" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=23590&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_23590"><a href="viewthread.php?tid=23590&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">波兰立法：对强奸儿童者施“化学阉割”</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8343">假装很青春</a>
										</cite>
					<em>2009-9-27</em>
				</td>
				<td class="nums"><strong>39</strong> / <em>1040</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=23590&goto=lastpost#lastpost">2009-10-8 19:11</a></em>
					<cite>by <a href="space.php?username=%C9%A3%C7%F0">桑丘</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_25050" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=25050&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_25050"><a href="viewthread.php?tid=25050&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传，普京访华车队途径处有自焚事件</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7">张书记</a>
										</cite>
					<em>2009-10-14</em>
				</td>
				<td class="nums"><strong>39</strong> / <em>1213</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=25050&goto=lastpost#lastpost">2009-10-15 08:54</a></em>
					<cite>by <a href="space.php?username=direction">direction</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_25420" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=25420&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_25420"><a href="viewthread.php?tid=25420&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">真理部最新指令：电视剧中日本人坏蛋名字禁用鸠山</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8301">lqunl</a>
										</cite>
					<em>2009-10-16</em>
				</td>
				<td class="nums"><strong>39</strong> / <em>1209</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=25420&goto=lastpost#lastpost">2009-10-20 10:20</a></em>
					<cite>by <a href="space.php?username=%D5%E6%CF%E0%D4%DA%C4%C4%C0%EF">真相在哪里</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_25443" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=25443&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_25443"><a href="viewthread.php?tid=25443&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">美国国会中国问题委员会公布1279名中国政治犯名单</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2798">astding</a>
										</cite>
					<em>2009-10-17</em>
				</td>
				<td class="nums"><strong>39</strong> / <em>1528</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=25443&goto=lastpost#lastpost">2009-10-20 17:22</a></em>
					<cite>by <a href="space.php?username=%CE%E5%B4%FA%CD%B7%C4%BF%CF%AE%BD%FC%C6%BF">五代头目袭近瓶</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_25401" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=25401&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_25401"><a href="viewthread.php?tid=25401&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">胡向凤凰卫视开炮：如果你们再这样，干脆关门吧！</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8301">lqunl</a>
										</cite>
					<em>2009-10-17</em>
				</td>
				<td class="nums"><strong>39</strong> / <em>2149</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=25401&goto=lastpost#lastpost">2009-10-20 22:38</a></em>
					<cite>by <a href="space.php?username=nicegoal">nicegoal</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_25666" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=25666&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_25666"><a href="viewthread.php?tid=25666&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">北大经院五门不及格照样保研……</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8709">szdos</a>
										</cite>
					<em>2009-10-19</em>
				</td>
				<td class="nums"><strong>39</strong> / <em>970</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=25666&goto=lastpost#lastpost">2009-10-22 00:44</a></em>
					<cite>by <a href="space.php?username=%BB%F0%F0%DC%D7%D3">火疖子</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_26516" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=26516&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_26516"><a href="viewthread.php?tid=26516&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">南京代市长大搞形象工程</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2987">mayflower</a>
										</cite>
					<em>2009-10-28</em>
				</td>
				<td class="nums"><strong>39</strong> / <em>972</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=26516&goto=lastpost#lastpost">2009-10-30 14:38</a></em>
					<cite>by <a href="space.php?username=jason32">jason32</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_47647" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=47647&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_47647"><a href="viewthread.php?tid=47647&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">电子科技大学发生严重警民冲突</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=13445">随遇而安</a>
										</cite>
					<em>2010-5-30</em>
				</td>
				<td class="nums"><strong>39</strong> / <em>1582</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=47647&goto=lastpost#lastpost">2010-5-31 12:22</a></em>
					<cite>by <a href="space.php?username=%C4%E3%D6%AA%B5%C0%B5%C4">你知道的</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_47280" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=47280&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_47280"><a href="viewthread.php?tid=47280&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">女作家棉棉向谷歌索赔6.1万</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3202">glim</a>
										</cite>
					<em>2010-5-27</em>
				</td>
				<td class="nums"><strong>39</strong> / <em>901</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=47280&goto=lastpost#lastpost">2010-5-31 19:28</a></em>
					<cite>by <a href="space.php?username=%D1%F6%CC%EC%D0%A6">仰天笑</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_47778" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=47778&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_47778"><a href="viewthread.php?tid=47778&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">六四临近 天安门警察换战斗帽严阵以待</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=13334">颜色</a>
										</cite>
					<em>2010-5-31</em>
				</td>
				<td class="nums"><strong>39</strong> / <em>1891</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=47778&goto=lastpost#lastpost">2010-6-1 15:16</a></em>
					<cite>by <a href="space.php?username=%CE%B4%C0%B4%CB%FB%C0%CF%B0%D6">未来他老爸</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_48035" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=48035&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_48035"><a href="viewthread.php?tid=48035&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">真理部最新指令：各网删除央视中关于袁腾飞的节目</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5928">佐佐鼬鼬</a>
										</cite>
					<em>2010-6-2</em>
				</td>
				<td class="nums"><strong>39</strong> / <em>1355</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=48035&goto=lastpost#lastpost">2010-6-8 12:49</a></em>
					<cite>by <a href="space.php?username=grassmudccp">grassmudccp</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_48894" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=48894&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_48894"><a href="viewthread.php?tid=48894&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">外交部指北韩边防军枪杀3名中国人</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4604">napalm613</a>
										</cite>
					<em>2010-6-8</em>
				</td>
				<td class="nums"><strong>39</strong> / <em>904</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=48894&goto=lastpost#lastpost">2010-6-9 23:53</a></em>
					<cite>by <a href="space.php?username=nicegoal">nicegoal</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_49551" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=49551&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_49551"><a href="viewthread.php?tid=49551&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">朝鲜主帅：用战术击败巴西 进16强做民族英雄</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=11814">河殇</a>
										</cite>
					<em>2010-6-15</em>
				</td>
				<td class="nums"><strong>39</strong> / <em>952</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=49551&goto=lastpost#lastpost">2010-6-16 19:06</a></em>
					<cite>by <a href="space.php?username=%CB%BF%CB%BF%CD%C3">丝丝兔</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_49665" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=49665&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_49665"><a href="viewthread.php?tid=49665&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">共军培育出“不怕鹰的军鸽”</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4619">ac54321</a>
										</cite>
					<em>2010-6-16</em>
				</td>
				<td class="nums"><strong>39</strong> / <em>883</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=49665&goto=lastpost#lastpost">2010-6-17 01:58</a></em>
					<cite>by <a href="space.php?username=niuability">niuability</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_49780" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=49780&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_49780"><a href="viewthread.php?tid=49780&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">中国耗巨资参与“人造太阳”计划 20年后见成效</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=12700">罐头</a>
										</cite>
					<em>2010-6-17</em>
				</td>
				<td class="nums"><strong>39</strong> / <em>633</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=49780&goto=lastpost#lastpost">2010-6-19 10:29</a></em>
					<cite>by <a href="space.php?username=%B7%E7%B2%CD%C2%B6%CB%DE">风餐露宿</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_49899" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=49899&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_49899"><a href="viewthread.php?tid=49899&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">洛杉矶湖人获得2010年NBA总冠军</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=12310">炽鸢侯</a>
										</cite>
					<em>2010-6-18</em>
				</td>
				<td class="nums"><strong>39</strong> / <em>481</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=49899&goto=lastpost#lastpost">2010-6-22 13:11</a></em>
					<cite>by <a href="space.php?username=lyf98023">lyf98023</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_50866" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=50866&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_50866"><a href="viewthread.php?tid=50866&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">国内航企欲试水飞机上打手机 预计每分钟15元</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2202">ccjing123</a>
										</cite>
					<em>2010-6-24</em>
				</td>
				<td class="nums"><strong>39</strong> / <em>629</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=50866&goto=lastpost#lastpost">2010-6-26 18:35</a></em>
					<cite>by <a href="space.php?username=%B9%B7%CE%B2%BA%FC%C0%EA%BE%AB">狗尾狐狸精</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_50247" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=50247&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_50247"><a href="viewthread.php?tid=50247&amp;extra=page%3D37%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">成都闹市路面突然隆起 涌出褐色泥浆</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4587">萨格拉斯</a>
										</cite>
					<em>2010-6-18</em>
				</td>
				<td class="nums"><strong>39</strong> / <em>1188</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=50247&goto=lastpost#lastpost">2010-6-28 17:00</a></em>
					<cite>by <a href="space.php?username=%D2%BB%C3%B6%D3%B2%B1%D2">一枚硬币</a></cite>
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
	<div class="pages"><em>&nbsp;22278&nbsp;</em><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=1" class="first">1 ...</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=36" class="prev">&lsaquo;&lsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=35">35</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=36">36</a><strong>37</strong><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=38">38</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=39">39</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=40">40</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=41">41</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=42">42</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=43">43</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=44">44</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=38" class="next">&rsaquo;&rsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=349" class="last">... 349</a><kbd><input type="text" name="custompage" size="3" onkeydown="if(event.keyCode==13) {window.location='forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page='+this.value; return false;}" /></kbd></div>	</div>

  
	<div class="box">
			<span class="headactions"><a href="forumdisplay.php?fid=2&amp;page=37&amp;showoldetails=yes#online" class="nobdr"><img src="images/default/collapsed_yes.gif" alt="" /></a></span>
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
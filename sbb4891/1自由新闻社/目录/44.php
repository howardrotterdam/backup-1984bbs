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
			window.location = 'forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&page=43';
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
<div class="pages"><em>&nbsp;22278&nbsp;</em><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=1" class="first">1 ...</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=43" class="prev">&lsaquo;&lsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=42">42</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=43">43</a><strong>44</strong><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=45">45</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=46">46</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=47">47</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=48">48</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=49">49</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=50">50</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=51">51</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=45" class="next">&rsaquo;&rsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=349" class="last">... 349</a><kbd><input type="text" name="custompage" size="3" onkeydown="if(event.keyCode==13) {window.location='forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page='+this.value; return false;}" /></kbd></div></div>

<div style="float:left;border:1px solid #CCC; border-bottom:none;;width:218px; background: url(/imgs/1984radio.jpg) 200px 2px no-repeat;padding:5px 0 5px 12px;margin:0px 0 0 13px">

<p><b><a href="/radio/index.php" target="_blank">1984FM</a></b><br /><b><a href="https://voxli.com/1984bbs" target="_blank">1984Chat</a></b>&nbsp;</p> 
</div>

<div style="clear:both;height:0px;width:100%;font-size:1px;">&nbsp;</div>

	<ul class="popupmenu_popup newspecialmenu" id="newspecial_menu" style="display: none">
		<li><a href="post.php?action=newthread&amp;fid=2&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">发新话题</a></li>		<li class="poll"><a href="post.php?action=newthread&amp;fid=2&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;special=1">发布投票</a></li>													</ul>
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

					<tbody id="normalthread_15356" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=15356&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_15356"><a href="viewthread.php?tid=15356&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">北大：赤裸裸地向权力献媚</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3996">羊皮鬼</a>
										</cite>
					<em>2009-6-29</em>
				</td>
				<td class="nums"><strong>35</strong> / <em>1135</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=15356&goto=lastpost#lastpost">2009-7-7 17:25</a></em>
					<cite>by <a href="space.php?username=zq19871127">zq19871127</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_15926" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=15926&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_15926"><a href="viewthread.php?tid=15926&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">盛世奇观：供党领导视察专用“门面房”</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=169">抑扬</a>
										</cite>
					<em>2009-7-6</em>
				</td>
				<td class="nums"><strong>35</strong> / <em>1164</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=15926&goto=lastpost#lastpost">2009-7-14 00:52</a></em>
					<cite>by <a href="space.php?username=dyf22">dyf22</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_16508" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=16508&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_16508"><a href="viewthread.php?tid=16508&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">维族思想家真的太一般了</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=787">sogoood</a>
										</cite>
					<em>2009-7-11</em>
				</td>
				<td class="nums"><strong>35</strong> / <em>1128</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=16508&goto=lastpost#lastpost">2009-7-18 14:00</a></em>
					<cite>by <a href="space.php?username=%B0%A2%CE%C4%C7%BF">阿文强</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_17006" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=17006&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_17006"><a href="viewthread.php?tid=17006&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">秦刚：澳国有关言论是在干预中国司法独立</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5549">撒泼打滚</a>
										</cite>
					<em>2009-7-17</em>
				</td>
				<td class="nums"><strong>35</strong> / <em>583</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=17006&goto=lastpost#lastpost">2009-7-18 20:42</a></em>
					<cite>by <a href="space.php?username=enzokwok">enzokwok</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_17083" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=17083&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_17083"><a href="viewthread.php?tid=17083&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">天益网也辞世了？</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5157">Len</a>
										</cite>
					<em>2009-7-16</em>
				</td>
				<td class="nums"><strong>35</strong> / <em>851</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=17083&goto=lastpost#lastpost">2009-7-19 14:21</a></em>
					<cite>by <a href="space.php?username=%D0%A1%C1%FA%C8%CB">小龙人</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_2244" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=2244&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_2244"><a href="viewthread.php?tid=2244&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">北航牛女</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1770">nustbobo</a>
										</cite>
					<em>2008-12-22</em>
				</td>
				<td class="nums"><strong>35</strong> / <em>568</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=2244&goto=lastpost#lastpost">2008-12-25 00:43</a></em>
					<cite>by <a href="space.php?username=vera">vera</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_20918" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=20918&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_20918"><a href="viewthread.php?tid=20918&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">我爸被困在街对面过不来</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2963">huangqinfeifei</a>
										</cite>
					<em>2009-8-29</em>
				</td>
				<td class="nums"><strong>35</strong> / <em>1251</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=20918&goto=lastpost#lastpost">2009-9-9 11:02</a></em>
					<cite>by <a href="space.php?username=%C7%EF%C7%A7">秋千</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_21908" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=21908&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_21908"><a href="viewthread.php?tid=21908&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">成龙：其实我想演的是毛泽东</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3202">glim</a>
										</cite>
					<em>2009-9-11</em>
				</td>
				<td class="nums"><strong>35</strong> / <em>1003</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=21908&goto=lastpost#lastpost">2009-9-16 16:36</a></em>
					<cite>by <a href="space.php?username=wistreer">wistreer</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_22006" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=22006&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_22006"><a href="viewthread.php?tid=22006&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">真理部最新指令：各网务必安排显著位置刊登“中国一日”</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5759">路边社刊要</a>
										</cite>
					<em>2009-9-12</em>
				</td>
				<td class="nums"><strong>35</strong> / <em>1257</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=22006&goto=lastpost#lastpost">2009-9-18 17:40</a></em>
					<cite>by <a href="space.php?username=gyakuden">gyakuden</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_22789" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=22789&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_22789"><a href="viewthread.php?tid=22789&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">对影帝的个人建议</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4291">badan</a>
										</cite>
					<em>2009-9-10</em>
				</td>
				<td class="nums"><strong>35</strong> / <em>1999</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=22789&goto=lastpost#lastpost">2009-9-20 15:04</a></em>
					<cite>by <a href="space.php?username=%B4%F3%CD%F5">大王</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_22787" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=22787&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_22787"><a href="viewthread.php?tid=22787&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">毛新宇称只及爷爷千分之一</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3749">弓长天</a>
										</cite>
					<em>2009-9-20</em>
				</td>
				<td class="nums"><strong>35</strong> / <em>703</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=22787&goto=lastpost#lastpost">2009-9-23 11:44</a></em>
					<cite>by <a href="space.php?username=%C3%D7%CE%F7%C3%D7%CE%F7">米西米西</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_23161" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=23161&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_23161"><a href="viewthread.php?tid=23161&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">汪洋向南方报业喊话 盛赞“你们都做到了”</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7674">面瓜</a>
										</cite>
					<em>2009-9-23</em>
				</td>
				<td class="nums"><strong>35</strong> / <em>1264</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=23161&goto=lastpost#lastpost">2009-9-25 17:46</a></em>
					<cite>by <a href="space.php?username=%D2%E4%BD%A3">忆剑</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_23401" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=23401&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_23401"><a href="viewthread.php?tid=23401&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传，北京管庄发生公交车爆炸</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1258">路边社记者</a>
										</cite>
					<em>2009-9-25</em>
				</td>
				<td class="nums"><strong>35</strong> / <em>1318</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=23401&goto=lastpost#lastpost">2009-9-25 23:15</a></em>
					<cite>by <a href="space.php?username=%BD%F4%D2%AF">紧爷</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_23676" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=23676&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_23676"><a href="viewthread.php?tid=23676&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">青岛某高校处理不文明男女交往行为</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6723">卡哥</a>
										</cite>
					<em>2009-9-28</em>
				</td>
				<td class="nums"><strong>35</strong> / <em>1190</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=23676&goto=lastpost#lastpost">2009-9-30 09:23</a></em>
					<cite>by <a href="space.php?username=howejiang">howejiang</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_23973" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=23973&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_23973"><a href="viewthread.php?tid=23973&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">快讯：北京正在催雨</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1960">库存袈裟</a>
										</cite>
					<em>2009-9-30</em>
				</td>
				<td class="nums"><strong>35</strong> / <em>890</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=23973&goto=lastpost#lastpost">2009-10-1 12:53</a></em>
					<cite>by <a href="space.php?username=mercutysoul">mercutysoul</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_24259" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=24259&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_24259"><a href="viewthread.php?tid=24259&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">党媒组建阅兵网民方阵</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6861">清晨的碾核</a>
										</cite>
					<em>2009-9-30</em>
				</td>
				<td class="nums"><strong>35</strong> / <em>862</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=24259&goto=lastpost#lastpost">2009-10-4 12:50</a></em>
					<cite>by <a href="space.php?username=%BC%E1%B1%DA%C7%E5%D2%B0">坚壁清野</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_24376" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=24376&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_24376"><a href="viewthread.php?tid=24376&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">世界日报：英译“CHINA”一词必须弃用</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6314">hhbcl1414</a>
										</cite>
					<em>2009-10-6</em>
				</td>
				<td class="nums"><strong>35</strong> / <em>1283</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=24376&goto=lastpost#lastpost">2009-10-10 13:20</a></em>
					<cite>by <a href="space.php?username=prosup">prosup</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_24572" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=24572&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_24572"><a href="viewthread.php?tid=24572&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">总书记一句“让我们一起来打拼”创造白话新风尚</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3202">glim</a>
										</cite>
					<em>2009-10-9</em>
				</td>
				<td class="nums"><strong>35</strong> / <em>931</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=24572&goto=lastpost#lastpost">2009-10-11 00:22</a></em>
					<cite>by <a href="space.php?username=Yhard">Yhard</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_25078" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=25078&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_25078"><a href="viewthread.php?tid=25078&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">影帝和中国地图出版社互扛</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8301">lqunl</a>
										</cite>
					<em>2009-10-14</em>
				</td>
				<td class="nums"><strong>35</strong> / <em>867</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=25078&goto=lastpost#lastpost">2009-10-16 09:04</a></em>
					<cite>by <a href="space.php?username=%C4%AA%D6%AE%D0%ED">莫之许</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_25481" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=25481&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_25481"><a href="viewthread.php?tid=25481&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">热比娅：维族被告判死加深矛盾</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7002">luugoo</a>
										</cite>
					<em>2009-10-15</em>
				</td>
				<td class="nums"><strong>35</strong> / <em>651</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=25481&goto=lastpost#lastpost">2009-10-18 10:54</a></em>
					<cite>by <a href="space.php?username=luugoo">luugoo</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_25724" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=25724&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_25724"><a href="viewthread.php?tid=25724&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">湖南相声演员大兵成副处级官员</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4570">我卖糕的</a>
										</cite>
					<em>2009-10-20</em>
				</td>
				<td class="nums"><strong>35</strong> / <em>765</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=25724&goto=lastpost#lastpost">2009-10-23 03:02</a></em>
					<cite>by <a href="space.php?username=%C4%D6%C1%CB%B8%F6%D4%CB">闹了个运</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_25968" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=25968&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_25968"><a href="viewthread.php?tid=25968&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">大学生校内办私人会所 有钱有权有貌成入会门槛</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4570">我卖糕的</a>
										</cite>
					<em>2009-10-23</em>
				</td>
				<td class="nums"><strong>35</strong> / <em>928</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=25968&goto=lastpost#lastpost">2009-10-25 13:55</a></em>
					<cite>by <a href="space.php?username=%C9%CF%BA%A3%CB%A7%B8%E7">上海帅哥</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_33006" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=33006&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_33006"><a href="viewthread.php?tid=33006&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">伍皓：我不是五毛 是党委政府形象雕塑师</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2908">Geona</a>
										</cite>
					<em>2009-12-30</em>
				</td>
				<td class="nums"><strong>35</strong> / <em>803</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=33006&goto=lastpost#lastpost">2010-1-2 01:45</a></em>
					<cite>by <a href="space.php?username=%CE%F7%C3%C5%B4%B5%C5%A3">西门吹牛</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_32969" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=32969&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_32969"><a href="viewthread.php?tid=32969&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">山西不顾阻拦强行修建水库 截断河北40万人水源</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4570">我卖糕的</a>
										</cite>
					<em>2009-12-30</em>
				</td>
				<td class="nums"><strong>35</strong> / <em>710</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=32969&goto=lastpost#lastpost">2010-1-2 02:07</a></em>
					<cite>by <a href="space.php?username=%CE%F7%C3%C5%B4%B5%C5%A3">西门吹牛</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_34923" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=34923&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_34923"><a href="viewthread.php?tid=34923&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">朝鲜对韩发表“圣战”声明 称将端掉韩国总统府</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4570">我卖糕的</a>
										</cite>
					<em>2010-1-16</em>
				</td>
				<td class="nums"><strong>35</strong> / <em>1044</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=34923&goto=lastpost#lastpost">2010-1-18 00:00</a></em>
					<cite>by <a href="space.php?username=%C2%ED%B5%C2%B1%CF">马德毕</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_34707" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=34707&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_34707"><a href="viewthread.php?tid=34707&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">清华大学生举报《环球时报》谷歌新闻造假</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=787">sogoood</a>
										</cite>
					<em>2010-1-14</em>
				</td>
				<td class="nums"><strong>35</strong> / <em>1625</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=34707&goto=lastpost#lastpost">2010-1-18 12:48</a></em>
					<cite>by <a href="space.php?username=%D0%C5%D4%F8%B8%E7%D4%AD%B5%D8%B8%B4%BB%EE">信曾哥原地复活</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_35236" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=35236&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_35236"><a href="viewthread.php?tid=35236&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">长征火箭从天降，贵州人民疏散忙</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3723">mason</a>
										</cite>
					<em>2010-1-19</em>
				</td>
				<td class="nums"><strong>35</strong> / <em>992</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=35236&goto=lastpost#lastpost">2010-1-20 07:27</a></em>
					<cite>by <a href="space.php?username=lxr1207">lxr1207</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_34025" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=34025&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_34025"><a href="viewthread.php?tid=34025&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">温哥华耸起“毛小姐要在列宁头上站稳”雕像</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3202">glim</a>
										</cite>
					<em>2010-1-4</em>
				</td>
				<td class="nums"><strong>35</strong> / <em>2025</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=34025&goto=lastpost#lastpost">2010-1-21 12:55</a></em>
					<cite>by <a href="space.php?username=skyking0752">skyking0752</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_35853" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=35853&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_35853"><a href="viewthread.php?tid=35853&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">军方将领调整 李先念女婿刘亚洲升职</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5926">oldstreet</a>
										</cite>
					<em>2009-12-20</em>
				</td>
				<td class="nums"><strong>35</strong> / <em>1678</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=35853&goto=lastpost#lastpost">2010-1-25 16:11</a></em>
					<cite>by <a href="space.php?username=%BB%A8%CF%EB%C8%DD">花想容</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_36040" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=36040&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_36040"><a href="viewthread.php?tid=36040&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">外交部马朝旭：我十分同情你的遭遇</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=10886">JoanofArc</a>
										</cite>
					<em>2010-1-26</em>
				</td>
				<td class="nums"><strong>35</strong> / <em>1361</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=36040&goto=lastpost#lastpost">2010-1-28 14:00</a></em>
					<cite>by <a href="space.php?username=%B5%A5%CA%D6%B7%F6%C7%BD">单手扶墙</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_36217" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=36217&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_36217"><a href="viewthread.php?tid=36217&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">知情人：南勇被传讯时怀揣600万元银行卡</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=852">未来他老爸</a>
										</cite>
					<em>2010-1-28</em>
				</td>
				<td class="nums"><strong>35</strong> / <em>1438</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=36217&goto=lastpost#lastpost">2010-1-30 10:13</a></em>
					<cite>by <a href="space.php?username=%C0%E4%D1%DB%BF%B4%CA%C0%BD%E7">冷眼看世界</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_36849" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=36849&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_36849"><a href="viewthread.php?tid=36849&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传，工信部已加入360安全卫士研发</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=12101">devymex</a>
										</cite>
					<em>2010-2-4</em>
				</td>
				<td class="nums"><strong>35</strong> / <em>1105</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=36849&goto=lastpost#lastpost">2010-2-5 23:36</a></em>
					<cite>by <a href="space.php?username=%CC%D8%B0%BA">特昂</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_37104" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=37104&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_37104"><a href="viewthread.php?tid=37104&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">美人权组织选最不自由国家，朝鲜第一中国紧随</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=9991">duck_1984</a>
										</cite>
					<em>2010-2-7</em>
				</td>
				<td class="nums"><strong>35</strong> / <em>1118</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=37104&goto=lastpost#lastpost">2010-2-8 12:46</a></em>
					<cite>by <a href="space.php?username=%CE%D2%CA%C7%B2%A4%C2%DC%C3%DB">我是菠萝蜜</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_38361" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=38361&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_38361"><a href="viewthread.php?tid=38361&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">19岁父亲砸死半岁儿子后狂打网游4小时</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=852">未来他老爸</a>
										</cite>
					<em>2010-2-23</em>
				</td>
				<td class="nums"><strong>35</strong> / <em>1106</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=38361&goto=lastpost#lastpost">2010-2-25 22:04</a></em>
					<cite>by <a href="space.php?username=%D7%F3%B0%B6%A1%FB%D3%D2%B0%B6">左岸←右岸</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_38776" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=38776&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_38776"><a href="viewthread.php?tid=38776&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">工信部通知加强网站备案：站长需当面拍照核验</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7760">米西米西</a>
										</cite>
					<em>2010-2-23</em>
				</td>
				<td class="nums"><strong>35</strong> / <em>908</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=38776&goto=lastpost#lastpost">2010-3-2 15:30</a></em>
					<cite>by <a href="space.php?username=daddle">daddle</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_39424" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=39424&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_39424"><a href="viewthread.php?tid=39424&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传，武汉市地方海事局局长迷奸女大学生</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=10890">xiaohe1120</a>
										</cite>
					<em>2010-3-6</em>
				</td>
				<td class="nums"><strong>35</strong> / <em>1075</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=39424&goto=lastpost#lastpost">2010-3-8 08:59</a></em>
					<cite>by <a href="space.php?username=%B6%A1%B4%BA%C7%EF">丁春秋</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_24681" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=24681&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_24681"><a href="viewthread.php?tid=24681&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">《劫后天府泪纵横》入围奥斯卡纪录短片初选名单</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4757">Loze</a>
										</cite>
					<em>2009-10-10</em>
				</td>
				<td class="nums"><strong>35</strong> / <em>1171</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=24681&goto=lastpost#lastpost">2010-3-8 18:15</a></em>
					<cite>by <a href="space.php?username=Fangio">Fangio</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_39363" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=39363&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_39363"><a href="viewthread.php?tid=39363&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">外媒披露李克强夫人是首都经贸外语系研究员</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8203">熬不过的黑夜</a>
										</cite>
					<em>2010-2-8</em>
				</td>
				<td class="nums"><strong>35</strong> / <em>1244</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=39363&goto=lastpost#lastpost">2010-3-9 09:47</a></em>
					<cite>by <a href="space.php?username=ralphguo">ralphguo</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_4513" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=4513&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_4513"><a href="viewthread.php?tid=4513&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">柴静《新闻1+1》爆全国公务员每年消耗9000亿公款</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=11">八阕</a>
										</cite>
					<em>2008-11-29</em>
				</td>
				<td class="nums"><strong>35</strong> / <em>905</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=4513&goto=lastpost#lastpost">2009-4-27 00:42</a></em>
					<cite>by <a href="space.php?username=jiajia-mail">jiajia-mail</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_9917" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=9917&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_9917"><a href="viewthread.php?tid=9917&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传，前直隶总督陈希同病入膏肓……</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=465">余含泪</a>
										</cite>
					<em>2009-4-27</em>
				</td>
				<td class="nums"><strong>35</strong> / <em>1246</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=9917&goto=lastpost#lastpost">2009-5-3 14:32</a></em>
					<cite>by <a href="space.php?username=%BB%D1%B5%B0%C5%C9%CF%B7%BE%E7">谎蛋派戏剧</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_10688" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=10688&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_10688"><a href="viewthread.php?tid=10688&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">我认识的薄一波的孙子……</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=611">NBHH</a>
										</cite>
					<em>2009-5-11</em>
				</td>
				<td class="nums"><strong>35</strong> / <em>1383</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=10688&goto=lastpost#lastpost">2009-5-14 13:06</a></em>
					<cite>by <a href="space.php?username=%BA%FA%87%E5%CC%CE">胡囧涛</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_10618" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=10618&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_10618"><a href="viewthread.php?tid=10618&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">老照片：未下台的“废帝”接见未上台的太上皇</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2564">老卡</a>
										</cite>
					<em>2009-5-9</em>
				</td>
				<td class="nums"><strong>35</strong> / <em>1349</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=10618&goto=lastpost#lastpost">2009-5-15 13:06</a></em>
					<cite>by <a href="space.php?username=%BA%FA%CC%CE%BC%D0%D7%D3">胡涛夹子</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_11106" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=11106&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_11106"><a href="viewthread.php?tid=11106&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">采访一下八卦小组的同仁们</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5867">宋石男</a>
										</cite>
					<em>2009-5-18</em>
				</td>
				<td class="nums"><strong>35</strong> / <em>891</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=11106&goto=lastpost#lastpost">2009-5-20 14:58</a></em>
					<cite>by <a href="space.php?username=srgle">srgle</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_11599" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=11599&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_11599"><a href="viewthread.php?tid=11599&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">小道消息：侠女律师遭暗算</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=971">sus</a>
										</cite>
					<em>2009-5-22</em>
				</td>
				<td class="nums"><strong>35</strong> / <em>733</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=11599&goto=lastpost#lastpost">2009-5-22 16:21</a></em>
					<cite>by <a href="space.php?username=bmcli">bmcli</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_12453" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=12453&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_12453"><a href="viewthread.php?tid=12453&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">这年头，狗也沧桑</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1162">小龙人</a>
										</cite>
					<em>2009-6-2</em>
				</td>
				<td class="nums"><strong>35</strong> / <em>663</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=12453&goto=lastpost#lastpost">2009-6-4 11:44</a></em>
					<cite>by <a href="space.php?username=%C9%B5%D7%D3%BF%B4%C9%E7%BB%E1">傻子看社会</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_27196" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=27196&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_27196"><a href="viewthread.php?tid=27196&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">卖水果老汉连收4张假钞气死街头 水果遭哄抢</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=9565">Buenos</a>
										</cite>
					<em>2009-11-4</em>
				</td>
				<td class="nums"><strong>35</strong> / <em>824</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=27196&goto=lastpost#lastpost">2009-11-6 10:18</a></em>
					<cite>by <a href="space.php?username=rogerlan">rogerlan</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_28934" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=28934&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_28934"><a href="viewthread.php?tid=28934&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">《上海证券报》等媒体因泄露中共高干子弟收入被处罚</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8789">完颜阿骨打</a>
										</cite>
					<em>2009-11-24</em>
				</td>
				<td class="nums"><strong>35</strong> / <em>1109</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=28934&goto=lastpost#lastpost">2009-11-25 13:39</a></em>
					<cite>by <a href="space.php?username=lynnstar">lynnstar</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_29146" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=29146&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_29146"><a href="viewthread.php?tid=29146&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">谷歌手机将可免费打电话 被指冲击通信业</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=9535">隋言</a>
										</cite>
					<em>2009-11-26</em>
				</td>
				<td class="nums"><strong>35</strong> / <em>1182</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=29146&goto=lastpost#lastpost">2009-11-28 13:10</a></em>
					<cite>by <a href="space.php?username=toms1023">toms1023</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_29927" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=29927&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_29927"><a href="viewthread.php?tid=29927&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传，陆克文被架空了</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=9991">duck_1984</a>
										</cite>
					<em>2009-12-4</em>
				</td>
				<td class="nums"><strong>35</strong> / <em>1402</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=29927&goto=lastpost#lastpost">2009-12-6 17:28</a></em>
					<cite>by <a href="space.php?username=%CE%F7%C3%C5%B4%B5%C5%A3">西门吹牛</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_29888" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=29888&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_29888"><a href="viewthread.php?tid=29888&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">胡锦涛儿子清华当官 父促弃商从政免招麻烦</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=10202">qiangning</a>
										</cite>
					<em>2009-12-4</em>
				</td>
				<td class="nums"><strong>35</strong> / <em>1492</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=29888&goto=lastpost#lastpost">2009-12-6 17:47</a></em>
					<cite>by <a href="space.php?username=DarkStar">DarkStar</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_30020" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=30020&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_30020"><a href="viewthread.php?tid=30020&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">上海某小学某班的一张黑板报</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5464">上海帅哥</a>
										</cite>
					<em>2009-12-5</em>
				</td>
				<td class="nums"><strong>35</strong> / <em>1315</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=30020&goto=lastpost#lastpost">2009-12-6 21:08</a></em>
					<cite>by <a href="space.php?username=%83%D3%B6%FE">冇二</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_30083" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=30083&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_30083"><a href="viewthread.php?tid=30083&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">中科院院士向江绵恒说不 未能通过最后一关</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7919">路边社门卫</a>
										</cite>
					<em>2009-12-6</em>
				</td>
				<td class="nums"><strong>35</strong> / <em>1405</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=30083&goto=lastpost#lastpost">2009-12-7 18:22</a></em>
					<cite>by <a href="space.php?username=jeansea">jeansea</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_30649" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=30649&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_30649"><a href="viewthread.php?tid=30649&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">霍公公透露霍副团长与郭晶晶婚期：东运结束就办事</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=852">未来他老爸</a>
										</cite>
					<em>2009-12-6</em>
				</td>
				<td class="nums"><strong>35</strong> / <em>563</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=30649&goto=lastpost#lastpost">2009-12-11 10:43</a></em>
					<cite>by <a href="space.php?username=ebuluo">ebuluo</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_30607" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=30607&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_30607"><a href="viewthread.php?tid=30607&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">一周图片新闻 12.7-12.13</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2232">老杂疫</a>
										</cite>
					<em>2009-12-10</em>
				</td>
				<td class="nums"><strong>35</strong> / <em>932</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=30607&goto=lastpost#lastpost">2009-12-13 19:41</a></em>
					<cite>by <a href="space.php?username=lyf98023">lyf98023</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_30937" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=30937&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_30937"><a href="viewthread.php?tid=30937&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">李肇星：我在厕所与麻生太郎交流了20分钟</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3202">glim</a>
										</cite>
					<em>2009-12-13</em>
				</td>
				<td class="nums"><strong>35</strong> / <em>1141</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=30937&goto=lastpost#lastpost">2009-12-15 10:09</a></em>
					<cite>by <a href="space.php?username=%D7%D4%D3%C9%D6%D0%B9%FA">自由中国</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_32229" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=32229&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_32229"><a href="viewthread.php?tid=32229&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">见义勇为男子用自行车砸翻飞车抢匪</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7660">wahaha</a>
										</cite>
					<em>2009-12-24</em>
				</td>
				<td class="nums"><strong>35</strong> / <em>683</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=32229&goto=lastpost#lastpost">2009-12-25 21:08</a></em>
					<cite>by <a href="space.php?username=%C2%ED%B7%E4">马蜂</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_32478" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=32478&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_32478"><a href="viewthread.php?tid=32478&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">摇滚乐队顶马招到相关部门的封杀 演出被取消</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8576">byterain</a>
										</cite>
					<em>2009-12-25</em>
				</td>
				<td class="nums"><strong>35</strong> / <em>896</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=32478&goto=lastpost#lastpost">2009-12-27 22:06</a></em>
					<cite>by <a href="space.php?username=ranxf007">ranxf007</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_55227" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=55227&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_55227"><a href="viewthread.php?tid=55227&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">贵州两台二战时美国发电机使用至今 一直正常发电</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=9842">shnikov</a>
										</cite>
					<em>2010-8-12</em>
				</td>
				<td class="nums"><strong>35</strong> / <em>1117</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=55227&goto=lastpost#lastpost">2010-8-16 17:52</a></em>
					<cite>by <a href="space.php?username=ksi">ksi</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_56197" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=56197&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_56197"><a href="viewthread.php?tid=56197&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">新疆阿克苏发生爆炸 7死12伤</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4880">donghao43</a>
										</cite>
					<em>2010-8-19</em>
				</td>
				<td class="nums"><strong>35</strong> / <em>1193</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=56197&goto=lastpost#lastpost">2010-8-23 13:13</a></em>
					<cite>by <a href="space.php?username=luugoo">luugoo</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_56432" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=56432&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_56432"><a href="viewthread.php?tid=56432&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">一周图片新闻 8.23-8.29</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2232">老杂疫</a>
										</cite>
					<em>2010-8-25</em>
				</td>
				<td class="nums"><strong>35</strong> / <em>1020</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=56432&goto=lastpost#lastpost">2010-8-30 09:16</a></em>
					<cite>by <a href="space.php?username=dangqu">dangqu</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_56631" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=56631&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_56631"><a href="viewthread.php?tid=56631&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">成龙为不当言论道歉</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=13468">C.C.</a>
										</cite>
					<em>2010-8-27</em>
				</td>
				<td class="nums"><strong>35</strong> / <em>1237</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=56631&goto=lastpost#lastpost">2010-8-30 10:32</a></em>
					<cite>by <a href="space.php?username=MozillaTG">MozillaTG</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_57790" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=57790&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_57790"><a href="viewthread.php?tid=57790&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">《光明日报》强调胡锦涛总揽全局负责政改 批民主普适性</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7">张书记</a>
										</cite>
					<em>2010-9-8</em>
				</td>
				<td class="nums"><strong>35</strong> / <em>1022</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=57790&goto=lastpost#lastpost">2010-9-9 13:51</a></em>
					<cite>by <a href="space.php?username=%B7%CF%D6%D6%B6%B9%F4%F9">废种豆豉</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_57612" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=57612&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_57612"><a href="viewthread.php?tid=57612&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">王兵新作《夹边沟》加入逐狮大战</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4291">badan</a>
										</cite>
					<em>2010-9-6</em>
				</td>
				<td class="nums"><strong>35</strong> / <em>804</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=57612&goto=lastpost#lastpost">2010-9-17 15:53</a></em>
					<cite>by <a href="space.php?username=%B9%C8%B8%E7%B9%C8%B8%E8">谷哥谷歌</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_59901" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=59901&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_59901"><a href="viewthread.php?tid=59901&amp;extra=page%3D44%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">胡锦涛等九常委向人民英雄纪念碑敬献花篮</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=852">未来他老爸</a>
										</cite>
					<em>2010-10-1</em>
				</td>
				<td class="nums"><strong>35</strong> / <em>646</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=59901&goto=lastpost#lastpost">2010-10-5 17:22</a></em>
					<cite>by <a href="space.php?username=nywanghu">nywanghu</a></cite>
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
	<div class="pages"><em>&nbsp;22278&nbsp;</em><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=1" class="first">1 ...</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=43" class="prev">&lsaquo;&lsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=42">42</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=43">43</a><strong>44</strong><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=45">45</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=46">46</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=47">47</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=48">48</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=49">49</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=50">50</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=51">51</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=45" class="next">&rsaquo;&rsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=349" class="last">... 349</a><kbd><input type="text" name="custompage" size="3" onkeydown="if(event.keyCode==13) {window.location='forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page='+this.value; return false;}" /></kbd></div>	</div>

  
	<div class="box">
			<span class="headactions"><a href="forumdisplay.php?fid=2&amp;page=44&amp;showoldetails=yes#online" class="nobdr"><img src="images/default/collapsed_yes.gif" alt="" /></a></span>
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
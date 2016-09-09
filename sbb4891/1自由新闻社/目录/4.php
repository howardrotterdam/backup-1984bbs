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
			window.location = 'forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&page=3';
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
<div class="pages"><em>&nbsp;22278&nbsp;</em><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=1" class="first">1 ...</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=3" class="prev">&lsaquo;&lsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=2">2</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=3">3</a><strong>4</strong><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=5">5</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=6">6</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=7">7</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=8">8</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=9">9</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=10">10</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=11">11</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=5" class="next">&rsaquo;&rsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=349" class="last">... 349</a><kbd><input type="text" name="custompage" size="3" onkeydown="if(event.keyCode==13) {window.location='forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page='+this.value; return false;}" /></kbd></div></div>

<div style="float:left;border:1px solid #CCC; border-bottom:none;;width:218px; background: url(/imgs/1984radio.jpg) 200px 2px no-repeat;padding:5px 0 5px 12px;margin:0px 0 0 13px">

<p><b><a href="/radio/index.php" target="_blank">1984FM</a></b><br /><b><a href="https://voxli.com/1984bbs" target="_blank">1984Chat</a></b>&nbsp;</p> 
</div>

<div style="clear:both;height:0px;width:100%;font-size:1px;">&nbsp;</div>

	<ul class="popupmenu_popup newspecialmenu" id="newspecial_menu" style="display: none">
		<li><a href="post.php?action=newthread&amp;fid=2&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">发新话题</a></li>		<li class="poll"><a href="post.php?action=newthread&amp;fid=2&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;special=1">发布投票</a></li>													</ul>
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

					<tbody id="normalthread_27185" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=27185&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_27185"><a href="viewthread.php?tid=27185&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">郑州扫黄 性服务从业者被警方制服</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=27185&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=27185&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=27185&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6489">九月九狂欢</a>
										</cite>
					<em>2009-11-3</em>
				</td>
				<td class="nums"><strong>132</strong> / <em>3867</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=27185&goto=lastpost#lastpost">2009-11-9 12:14</a></em>
					<cite>by <a href="space.php?username=kaikai177">kaikai177</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_43241" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=43241&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_43241"><a href="viewthread.php?tid=43241&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">江泽民高调现身上海外滩</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=43241&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=43241&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=43241&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4817">firedragoon</a>
										</cite>
					<em>2010-4-5</em>
				</td>
				<td class="nums"><strong>132</strong> / <em>5510</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=43241&goto=lastpost#lastpost">2010-4-16 19:18</a></em>
					<cite>by <a href="space.php?username=%C2%B7%B1%DF%C9%E7%CC%D8%D4%BC%BC%C7%D5%DF">路边社特约记者</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_44086" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=44086&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_44086"><a href="viewthread.php?tid=44086&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">上海世博会试运行 国内游客感受好外国游客感受差</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=44086&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=44086&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=44086&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4638">江湖席</a>
										</cite>
					<em>2010-4-21</em>
				</td>
				<td class="nums"><strong>131</strong> / <em>3708</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=44086&goto=lastpost#lastpost">2010-4-27 00:28</a></em>
					<cite>by <a href="space.php?username=%CC%EC%D6%AE%B0%D4%CD%F5">天之霸王</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_28209" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=28209&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_28209"><a href="viewthread.php?tid=28209&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">复旦女学生：中国领导人逊于欧巴马</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=28209&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=28209&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=28209&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5464">上海帅哥</a>
										</cite>
					<em>2009-11-16</em>
				</td>
				<td class="nums"><strong>131</strong> / <em>4515</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=28209&goto=lastpost#lastpost">2009-11-26 12:55</a></em>
					<cite>by <a href="space.php?username=tarafora">tarafora</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_12655" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=12655&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_12655"><a href="viewthread.php?tid=12655&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">快讯：香港维园，台湾自由广场几十万烛光照耀夜空！</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=12655&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=12655&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=12655&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5140">kakagoing</a>
										</cite>
					<em>2009-6-4</em>
				</td>
				<td class="nums"><strong>131</strong> / <em>3938</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=12655&goto=lastpost#lastpost">2009-6-7 13:14</a></em>
					<cite>by <a href="space.php?username=stranger86">stranger86</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_55252" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=55252&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_55252"><a href="viewthread.php?tid=55252&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">甘肃舟曲泥石流已致1144人死亡 600人失踪</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=55252&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=55252&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=55252&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=16987">npchao</a>
										</cite>
					<em>2010-8-8</em>
				</td>
				<td class="nums"><strong>131</strong> / <em>2126</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=55252&goto=lastpost#lastpost">2010-8-17 15:59</a></em>
					<cite>by <a href="space.php?username=luugoo">luugoo</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_29637" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=29637&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_29637"><a href="viewthread.php?tid=29637&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">高耀洁在美披露中国艾滋病疫情 称当局“抗艾保官”</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=29637&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=29637&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=29637&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=9991">duck_1984</a>
										</cite>
					<em>2009-12-1</em>
				</td>
				<td class="nums"><strong>130</strong> / <em>3140</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=29637&goto=lastpost#lastpost">2010-8-27 16:56</a></em>
					<cite>by <a href="space.php?username=%9A%EA%C0%E4%BE%C6">氷冷酒</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_58657" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=58657&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_58657"><a href="viewthread.php?tid=58657&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">一架朝鲜战斗机在辽宁抚顺坠落</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=58657&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=58657&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=58657&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=17927">nik10000</a>
										</cite>
					<em>2010-8-17</em>
				</td>
				<td class="nums"><strong>130</strong> / <em>5932</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=58657&goto=lastpost#lastpost">2010-9-27 09:47</a></em>
					<cite>by <a href="space.php?username=%D7%D4%D3%C9%D7%D4%D4%DA%B7%E7">自由自在风</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_33119" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=33119&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_33119"><a href="viewthread.php?tid=33119&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">中国处死涉毒英国公民 台湾查获4.4公斤大麻</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=33119&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=33119&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=33119&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=9991">duck_1984</a>
										</cite>
					<em>2009-12-23</em>
				</td>
				<td class="nums"><strong>130</strong> / <em>2752</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=33119&goto=lastpost#lastpost">2010-1-2 01:44</a></em>
					<cite>by <a href="space.php?username=M%B5%AF">M弹</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_30723" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=30723&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_30723"><a href="viewthread.php?tid=30723&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">中国日报网执行总编周黎明公开叫板韩寒</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=30723&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=30723&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=30723&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8119">软笛</a>
										</cite>
					<em>2009-12-4</em>
				</td>
				<td class="nums"><strong>130</strong> / <em>3390</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=30723&goto=lastpost#lastpost">2009-12-16 20:20</a></em>
					<cite>by <a href="space.php?username=fermi">fermi</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_19546" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=19546&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_19546"><a href="viewthread.php?tid=19546&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">760亿地震捐赠80%流入政府财政专户 政府回应“NGO不可信”</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=19546&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=19546&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=19546&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2341">雾风</a>
										</cite>
					<em>2009-8-12</em>
				</td>
				<td class="nums"><strong>130</strong> / <em>2521</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=19546&goto=lastpost#lastpost">2009-8-18 15:40</a></em>
					<cite>by <a href="space.php?username=nightdogg">nightdogg</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_40579" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=40579&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_40579"><a href="viewthread.php?tid=40579&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">来宾市烟草局长日记流出</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=40579&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=40579&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=40579&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7990">王九蛋</a>
										</cite>
					<em>2010-2-27</em>
				</td>
				<td class="nums"><strong>129</strong> / <em>5886</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=40579&goto=lastpost#lastpost">2010-3-19 02:56</a></em>
					<cite>by <a href="space.php?username=%C0%F1%B0%DD%BE%C5">礼拜九</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_55038" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=55038&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_55038"><a href="viewthread.php?tid=55038&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">华裔女医生遭塔利班枪决 本打算8号结婚</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=55038&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=55038&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=55038&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2315">写实</a>
										</cite>
					<em>2010-8-9</em>
				</td>
				<td class="nums"><strong>129</strong> / <em>2207</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=55038&goto=lastpost#lastpost">2010-8-20 23:09</a></em>
					<cite>by <a href="space.php?username=%D0%B4%CA%B5">写实</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_14766" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=14766&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_14766"><a href="viewthread.php?tid=14766&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">求证：Gmail是否被和谐？</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=14766&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=14766&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=14766&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2359">天翼</a>
										</cite>
					<em>2009-6-24</em>
				</td>
				<td class="nums"><strong>129</strong> / <em>1467</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=14766&goto=lastpost#lastpost">2009-6-25 11:27</a></em>
					<cite>by <a href="space.php?username=qiushuihan">qiushuihan</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_28459" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=28459&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_28459"><a href="viewthread.php?tid=28459&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">我对四川公安施暴的投诉 对方不怕把事闹大 含电话录音和对方答复</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=28459&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=28459&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=28459&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7379">aiweiwei</a>
										</cite>
					<em>2009-11-16</em>
				</td>
				<td class="nums"><strong>129</strong> / <em>2202</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=28459&goto=lastpost#lastpost">2009-11-21 13:56</a></em>
					<cite>by <a href="space.php?username=amieangel">amieangel</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_34281" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=34281&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_34281"><a href="viewthread.php?tid=34281&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">山西大学生举报32个色情网站 党奖励其一万元</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=34281&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=34281&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=34281&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=10044">为所难</a>
										</cite>
					<em>2010-1-7</em>
				</td>
				<td class="nums"><strong>128</strong> / <em>2716</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=34281&goto=lastpost#lastpost">2010-1-14 00:18</a></em>
					<cite>by <a href="space.php?username=%B3%AC%BC%B6%B4%F3%B7%B9%CD%B0">超级大饭桶</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_36831" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=36831&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_36831"><a href="viewthread.php?tid=36831&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传，六四将在两年内有限度平反</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=36831&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=36831&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=36831&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6497">汪达</a>
										</cite>
					<em>2010-2-4</em>
				</td>
				<td class="nums"><strong>128</strong> / <em>3906</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=36831&goto=lastpost#lastpost">2010-2-8 13:52</a></em>
					<cite>by <a href="space.php?username=%D0%A1%B9%ED%B6%F9">小鬼儿</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_38326" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=38326&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_38326"><a href="viewthread.php?tid=38326&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">达赖喇嘛：可以结束转世制度</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=38326&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=38326&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=38326&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=10619">voasia</a>
										</cite>
					<em>2010-2-23</em>
				</td>
				<td class="nums"><strong>128</strong> / <em>3703</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=38326&goto=lastpost#lastpost">2010-2-28 18:34</a></em>
					<cite>by <a href="space.php?username=%BA%D3%E9%E4">河殇</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_20387" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=20387&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_20387"><a href="viewthread.php?tid=20387&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">1984BBS被墙</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=20387&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=20387&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=20387&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2016">火疖子</a>
										</cite>
					<em>2009-8-23</em>
				</td>
				<td class="nums"><strong>128</strong> / <em>2340</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=20387&goto=lastpost#lastpost">2009-8-25 23:06</a></em>
					<cite>by <a href="space.php?username=wobuwuliaoa">wobuwuliaoa</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_15477" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=15477&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_15477"><a href="viewthread.php?tid=15477&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">读卖新闻：江氏夫妇在那趟列车里？</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=15477&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=15477&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=15477&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7">张书记</a>
										</cite>
					<em>2009-6-29</em>
				</td>
				<td class="nums"><strong>128</strong> / <em>4472</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=15477&goto=lastpost#lastpost">2009-7-1 08:20</a></em>
					<cite>by <a href="space.php?username=aniu0917">aniu0917</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_16310" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=16310&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_16310"><a href="viewthread.php?tid=16310&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">新疆留学生谈乌鲁木齐暴力事件</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=16310&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=16310&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=16310&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2132">花想容</a>
										</cite>
					<em>2009-7-9</em>
				</td>
				<td class="nums"><strong>128</strong> / <em>1852</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=16310&goto=lastpost#lastpost">2009-7-11 00:40</a></em>
					<cite>by <a href="space.php?username=%B0%D7%C5%A3">白牛</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_60545" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=60545&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_60545"><a href="viewthread.php?tid=60545&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">负责监视刘晓波妻子刘霞的中共国保伸出侮辱性手势</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=60545&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=60545&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=60545&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=803">weke</a>
										</cite>
					<em>2010-10-9</em>
				</td>
				<td class="nums"><strong>126</strong> / <em>5380</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=60545&goto=lastpost#lastpost">2010-10-11 15:15</a></em>
					<cite>by <a href="space.php?username=leviscc">leviscc</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_30742" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=30742&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_30742"><a href="viewthread.php?tid=30742&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">上海海事大学硕士因贫困自杀 校方称没钱就不该来读书</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=30742&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=30742&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=30742&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6327">chandler0819</a>
										</cite>
					<em>2009-12-8</em>
				</td>
				<td class="nums"><strong>126</strong> / <em>2562</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=30742&goto=lastpost#lastpost">2009-12-23 08:56</a></em>
					<cite>by <a href="space.php?username=uwen">uwen</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_45928" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=45928&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_45928"><a href="viewthread.php?tid=45928&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">香港“五区公投” 开始</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=45928&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=45928&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=45928&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7002">luugoo</a>
										</cite>
					<em>2010-5-15</em>
				</td>
				<td class="nums"><strong>126</strong> / <em>2743</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=45928&goto=lastpost#lastpost">2010-5-17 23:02</a></em>
					<cite>by <a href="space.php?username=Shepherd">Shepherd</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_18695" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=18695&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_18695"><a href="viewthread.php?tid=18695&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">新疆孽杀</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=18695&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=18695&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=18695&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5464">上海帅哥</a>
										</cite>
					<em>2009-8-3</em>
				</td>
				<td class="nums"><strong>126</strong> / <em>2344</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=18695&goto=lastpost#lastpost">2009-8-6 18:31</a></em>
					<cite>by <a href="space.php?username=Candice">Candice</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_30266" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=30266&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_30266"><a href="viewthread.php?tid=30266&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">《中国的污染》获人道主义摄影奖</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=30266&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=30266&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=30266&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2804">musicool</a>
										</cite>
					<em>2009-10-15</em>
				</td>
				<td class="nums"><strong>125</strong> / <em>2606</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=30266&goto=lastpost#lastpost">2009-12-8 13:19</a></em>
					<cite>by <a href="space.php?username=%B2%BC%3F%B9%CF%3F%C4%E3...">布?瓜?你...</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_50210" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=50210&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_50210"><a href="viewthread.php?tid=50210&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">温家宝烈日下察看汛情 泥地里赤手清理砖块</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=50210&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=50210&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=50210&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2311">空空追梦</a>
										</cite>
					<em>2010-6-21</em>
				</td>
				<td class="nums"><strong>125</strong> / <em>3765</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=50210&goto=lastpost#lastpost">2010-8-11 10:13</a></em>
					<cite>by <a href="space.php?username=CCAV">CCAV</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_39914" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=39914&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_39914"><a href="viewthread.php?tid=39914&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">艾未未宣布竞选人大代表</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=39914&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=39914&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=39914&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=9321">kiko</a>
										</cite>
					<em>2010-3-11</em>
				</td>
				<td class="nums"><strong>125</strong> / <em>3204</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=39914&goto=lastpost#lastpost">2010-3-17 17:16</a></em>
					<cite>by <a href="space.php?username=abc">abc</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_23943" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=23943&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_23943"><a href="viewthread.php?tid=23943&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">十四岁小孩被喝茶</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=23943&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=23943&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=23943&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1310">小宸宸</a>
										</cite>
					<em>2009-9-30</em>
				</td>
				<td class="nums"><strong>125</strong> / <em>3485</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=23943&goto=lastpost#lastpost">2009-10-5 14:29</a></em>
					<cite>by <a href="space.php?username=%BB%A8%CF%EB%C8%DD">花想容</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_23222" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=23222&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_23222"><a href="viewthread.php?tid=23222&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">国家防火墙今日将升级</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=23222&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=23222&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=23222&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=144">mfs0616</a>
										</cite>
					<em>2009-9-24</em>
				</td>
				<td class="nums"><strong>124</strong> / <em>2774</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=23222&goto=lastpost#lastpost">2009-9-25 21:21</a></em>
					<cite>by <a href="space.php?username=leaflet">leaflet</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_45620" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=45620&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_45620"><a href="viewthread.php?tid=45620&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传江泽民已被监视居住</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=45620&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=45620&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=45620&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5588">我家旺财有喜了</a>
										</cite>
					<em>2010-5-12</em>
				</td>
				<td class="nums"><strong>123</strong> / <em>4731</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=45620&goto=lastpost#lastpost">2010-5-21 22:05</a></em>
					<cite>by <a href="space.php?username=cashcool">cashcool</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_28716" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=28716&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_28716"><a href="viewthread.php?tid=28716&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">在真理部领导的监督下 《南方周末》专访了奥巴马</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=28716&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=28716&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=28716&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5759">路边社刊要</a>
										</cite>
					<em>2009-11-18</em>
				</td>
				<td class="nums"><strong>122</strong> / <em>3927</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=28716&goto=lastpost#lastpost">2009-11-23 17:32</a></em>
					<cite>by <a href="space.php?username=%CC%AB%B1%E4">太变</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_36195" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=36195&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_36195"><a href="viewthread.php?tid=36195&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传，章子怡遭泼墨的背后主使人是叶剑英家族成员</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=36195&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=36195&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=36195&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6703">竹青夫人</a>
										</cite>
					<em>2010-1-9</em>
				</td>
				<td class="nums"><strong>122</strong> / <em>7497</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=36195&goto=lastpost#lastpost">2010-2-15 10:41</a></em>
					<cite>by <a href="space.php?username=%BF%DD%CC%D9%C0%CF%CA%F7">枯藤老树</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_22431" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=22431&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_22431"><a href="viewthread.php?tid=22431&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">红三代叶家公主大婚 紫禁城内皇室气氛浓重</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=22431&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=22431&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=22431&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=144">mfs0616</a>
										</cite>
					<em>2009-9-16</em>
				</td>
				<td class="nums"><strong>122</strong> / <em>3942</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=22431&goto=lastpost#lastpost">2009-9-23 15:45</a></em>
					<cite>by <a href="space.php?username=drifterq">drifterq</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_25427" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=25427&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_25427"><a href="viewthread.php?tid=25427&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">刘晓波在狱中与律师谈三点感触</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=25427&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=25427&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=25427&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8301">lqunl</a>
										</cite>
					<em>2009-10-17</em>
				</td>
				<td class="nums"><strong>122</strong> / <em>2375</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=25427&goto=lastpost#lastpost">2009-10-24 21:25</a></em>
					<cite>by <a href="space.php?username=%D4%AC%C6%F4%C7%E5">袁启清</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_53489" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=53489&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_53489"><a href="viewthread.php?tid=53489&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">长江水利委：不能把希望都寄托在三峡大坝上</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=53489&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=53489&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=53489&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=9146">fernando</a>
										</cite>
					<em>2010-7-20</em>
				</td>
				<td class="nums"><strong>122</strong> / <em>2750</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=53489&goto=lastpost#lastpost">2010-7-22 08:47</a></em>
					<cite>by <a href="space.php?username=%CB%D5%C2%E9%C0%EB%C7%E0">苏麻离青</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_9366" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=9366&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_9366"><a href="viewthread.php?tid=9366&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">成龙：中国人受监控是天经地义</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=9366&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=9366&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=9366&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2428">xiahua</a>
										</cite>
					<em>2009-4-18</em>
				</td>
				<td class="nums"><strong>122</strong> / <em>2413</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=9366&goto=lastpost#lastpost">2009-4-25 02:01</a></em>
					<cite>by <a href="space.php?username=%CA%AF%BE%AE%CE%E4%E4%FE">石井武濑</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_58817" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=58817&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_58817"><a href="viewthread.php?tid=58817&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">暨南大学教师公开讲述六四后辞职</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=58817&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=58817&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=58817&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7002">luugoo</a>
										</cite>
					<em>2010-9-16</em>
				</td>
				<td class="nums"><strong>122</strong> / <em>3290</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=58817&goto=lastpost#lastpost">2010-9-22 15:38</a></em>
					<cite>by <a href="space.php?username=%B7%FB%BA%C5">符号</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_60794" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=60794&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_60794"><a href="viewthread.php?tid=60794&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">孕妇被医院宣布死亡1小时后开口呼救 丈夫跪求救人</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=60794&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=60794&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=60794&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
																<a href="redirect.php?tid=60794&amp;goto=newpost#newpost" class="new">New</a>
									</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=14875">Absurd</a>
										</cite>
					<em>2010-10-11</em>
				</td>
				<td class="nums"><strong>122</strong> / <em>1125</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=60794&goto=lastpost#lastpost">2010-10-12 01:41</a></em>
					<cite>by <a href="space.php?username=%BB%A8%C4%BE%C0%B6">花木蓝</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_27398" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=27398&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_27398"><a href="viewthread.php?tid=27398&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">河南1彩民176元独揽3.599亿</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=27398&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=27398&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=27398&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=105">黄阿狗</a>
										</cite>
					<em>2009-10-9</em>
				</td>
				<td class="nums"><strong>121</strong> / <em>4032</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=27398&goto=lastpost#lastpost">2009-11-8 22:29</a></em>
					<cite>by <a href="space.php?username=%D6%BB%CA%C7%BF%B4%BF%B4">只是看看</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_6173" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=6173&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_6173"><a href="viewthread.php?tid=6173&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">政协委员折腾汉字</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=6173&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=6173&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=6173&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2811">不能扔鞋的河蟹</a>
										</cite>
					<em>2009-3-3</em>
				</td>
				<td class="nums"><strong>121</strong> / <em>2171</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=6173&goto=lastpost#lastpost">2009-3-5 09:27</a></em>
					<cite>by <a href="space.php?username=%D7%F1%D2%E5%CD%DE%B6%F9">遵义娃儿</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_24500" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=24500&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_24500"><a href="viewthread.php?tid=24500&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">影帝高丽国巡演 粉丝疯狂捧场</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=24500&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=24500&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=24500&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8519">上天在我胸膛</a>
										</cite>
					<em>2009-10-5</em>
				</td>
				<td class="nums"><strong>121</strong> / <em>3219</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=24500&goto=lastpost#lastpost">2009-10-8 15:06</a></em>
					<cite>by <a href="space.php?username=%CD%EA%D1%D5%B0%A2%B9%C7%B4%F2">完颜阿骨打</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_49972" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=49972&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_49972"><a href="viewthread.php?tid=49972&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传朝鲜4名球员失踪 疑似叛逃</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=49972&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=49972&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=49972&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8705">littail</a>
										</cite>
					<em>2010-6-17</em>
				</td>
				<td class="nums"><strong>121</strong> / <em>4435</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=49972&goto=lastpost#lastpost">2010-6-22 19:31</a></em>
					<cite>by <a href="space.php?username=%D0%A6%BF%B4">笑看</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_30500" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=30500&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_30500"><a href="viewthread.php?tid=30500&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传，广电总局即将关停的“涉及盗版影视传播”网站名单</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=30500&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=30500&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=30500&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5464">上海帅哥</a>
										</cite>
					<em>2009-12-7</em>
				</td>
				<td class="nums"><strong>120</strong> / <em>2610</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=30500&goto=lastpost#lastpost">2009-12-10 02:44</a></em>
					<cite>by <a href="space.php?username=watersword">watersword</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_43950" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=43950&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_43950"><a href="viewthread.php?tid=43950&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传，周永康对于“三个代表”升级为“江思想”投弃权票</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=43950&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=43950&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=43950&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5588">我家旺财有喜了</a>
										</cite>
					<em>2010-4-24</em>
				</td>
				<td class="nums"><strong>120</strong> / <em>3380</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=43950&goto=lastpost#lastpost">2010-4-29 21:32</a></em>
					<cite>by <a href="space.php?username=%CC%EC%D6%AE%B0%D4%CD%F5">天之霸王</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_56466" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=56466&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_56466"><a href="viewthread.php?tid=56466&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">深圳研制“立体快巴”</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=56466&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=56466&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=56466&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=852">未来他老爸</a>
										</cite>
					<em>2010-8-25</em>
				</td>
				<td class="nums"><strong>120</strong> / <em>2903</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=56466&goto=lastpost#lastpost">2010-8-31 12:15</a></em>
					<cite>by <a href="space.php?username=%B7%CF%D6%D6%B6%B9%F4%F9">废种豆豉</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_56326" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=56326&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_56326"><a href="viewthread.php?tid=56326&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">真理部最新指令：请各视频网站清理《好摸不过少妇腿》</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=56326&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=56326&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=56326&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5588">我家旺财有喜了</a>
										</cite>
					<em>2010-8-24</em>
				</td>
				<td class="nums"><strong>120</strong> / <em>4380</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=56326&goto=lastpost#lastpost">2010-8-31 14:20</a></em>
					<cite>by <a href="space.php?username=%C2%ED%B7%E4">马蜂</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_14941" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=14941&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_14941"><a href="viewthread.php?tid=14941&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">Michael Jackson病逝</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=14941&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=14941&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=14941&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=306">万奶淫北京</a>
										</cite>
					<em>2009-6-26</em>
				</td>
				<td class="nums"><strong>120</strong> / <em>2517</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=14941&goto=lastpost#lastpost">2009-6-29 15:58</a></em>
					<cite>by <a href="space.php?username=%B0%A2%CE%C4%C7%BF">阿文强</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_54284" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=54284&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_54284"><a href="viewthread.php?tid=54284&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">真理部最新指令：删除“大连帮”相关内容</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=54284&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=54284&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=54284&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4094">坐看云起</a>
										</cite>
					<em>2010-7-29</em>
				</td>
				<td class="nums"><strong>119</strong> / <em>6012</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=54284&goto=lastpost#lastpost">2010-8-6 17:23</a></em>
					<cite>by <a href="space.php?username=lwb881225">lwb881225</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_55133" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=55133&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_55133"><a href="viewthread.php?tid=55133&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">艾未未等人赴成都再次被打</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=55133&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=55133&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=55133&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4575">老大哥</a>
										</cite>
					<em>2010-8-10</em>
				</td>
				<td class="nums"><strong>119</strong> / <em>4070</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=55133&goto=lastpost#lastpost">2010-8-21 17:38</a></em>
					<cite>by <a href="space.php?username=%B3%FE%BF%F1%CB%A5%B7%EF">楚狂衰凤</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_56059" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=56059&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_56059"><a href="viewthread.php?tid=56059&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">卫生部发布会称圣元奶粉与女婴性早熟无关</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=56059&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=56059&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=56059&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=12310">炽鸢侯</a>
										</cite>
					<em>2010-8-15</em>
				</td>
				<td class="nums"><strong>119</strong> / <em>1908</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=56059&goto=lastpost#lastpost">2010-8-24 14:25</a></em>
					<cite>by <a href="space.php?username=frick">frick</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_49856" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=49856&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_49856"><a href="viewthread.php?tid=49856&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">朝鲜队前任主帅：他们若失败将被派遣去工地挖煤</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=49856&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=49856&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=49856&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=9574">雾中悟</a>
										</cite>
					<em>2010-6-11</em>
				</td>
				<td class="nums"><strong>119</strong> / <em>2811</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=49856&goto=lastpost#lastpost">2010-6-17 23:46</a></em>
					<cite>by <a href="space.php?username=%BB%C6%B0%A2%B9%B7">黄阿狗</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_12766" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=12766&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_12766"><a href="viewthread.php?tid=12766&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">6月5日成都公交车燃烧，死伤惨重，不排除人为纵火</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=12766&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=12766&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=12766&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4591">bafield</a>
										</cite>
					<em>2009-6-5</em>
				</td>
				<td class="nums"><strong>119</strong> / <em>3541</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=12766&goto=lastpost#lastpost">2009-6-9 12:40</a></em>
					<cite>by <a href="space.php?username=ccjing123">ccjing123</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_25550" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=25550&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_25550"><a href="viewthread.php?tid=25550&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">各界群众被组织观看《建国大业》</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=25550&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=25550&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=25550&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2907">无言的山丘</a>
										</cite>
					<em>2009-9-18</em>
				</td>
				<td class="nums"><strong>119</strong> / <em>3195</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=25550&goto=lastpost#lastpost">2009-10-18 23:05</a></em>
					<cite>by <a href="space.php?username=%CC%EF%CF%FE%D2%FA">田晓寅</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_37547" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=37547&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_37547"><a href="viewthread.php?tid=37547&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">川震维权人士谭作人因发表“六四日记”被判5年</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=37547&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=37547&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=37547&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6314">hhbcl1414</a>
										</cite>
					<em>2009-11-24</em>
				</td>
				<td class="nums"><strong>119</strong> / <em>2916</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=37547&goto=lastpost#lastpost">2010-2-24 14:19</a></em>
					<cite>by <a href="space.php?username=%B7%E7%D6%D0%B5%C4%CA%F7%CC%A1">风中的树獭</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_39316" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=39316&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_39316"><a href="viewthread.php?tid=39316&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传，两会上央视记者与新华社记者发生互殴</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=39316&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=39316&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=39316&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7">张书记</a>
										</cite>
					<em>2010-3-5</em>
				</td>
				<td class="nums"><strong>118</strong> / <em>4553</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=39316&goto=lastpost#lastpost">2010-3-9 12:49</a></em>
					<cite>by <a href="space.php?username=%D3%EA%C3%CE">雨梦</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_49643" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=49643&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_49643"><a href="viewthread.php?tid=49643&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">玉树爆发大规模藏人抗议活动 大批军警与民对峙</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=49643&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=49643&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=49643&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3385">coeus</a>
										</cite>
					<em>2010-6-16</em>
				</td>
				<td class="nums"><strong>118</strong> / <em>3020</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=49643&goto=lastpost#lastpost">2010-6-18 00:03</a></em>
					<cite>by <a href="space.php?username=%B4%F2%BA%D3%D0%B7">打河蟹</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_49666" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=49666&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_49666"><a href="viewthread.php?tid=49666&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">巴朝赛前奏朝鲜国歌郑大世唱国歌泪流满面</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=49666&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=49666&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=49666&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2907">无言的山丘</a>
										</cite>
					<em>2010-6-16</em>
				</td>
				<td class="nums"><strong>118</strong> / <em>2500</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=49666&goto=lastpost#lastpost">2010-6-21 12:34</a></em>
					<cite>by <a href="space.php?username=34050217">34050217</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_59097" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=59097&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_59097"><a href="viewthread.php?tid=59097&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">韩寒新书上市 限量版赠送黄金10克</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=59097&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=59097&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=59097&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2907">无言的山丘</a>
										</cite>
					<em>2010-9-15</em>
				</td>
				<td class="nums"><strong>118</strong> / <em>4381</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=59097&goto=lastpost#lastpost">2010-9-25 21:07</a></em>
					<cite>by <a href="space.php?username=TRAVIS">TRAVIS</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_42492" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=42492&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_42492"><a href="viewthread.php?tid=42492&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">天安门毛像被泼墨</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=42492&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=42492&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=42492&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=9321">kiko</a>
										</cite>
					<em>2010-4-6</em>
				</td>
				<td class="nums"><strong>118</strong> / <em>6546</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=42492&goto=lastpost#lastpost">2010-4-14 16:59</a></em>
					<cite>by <a href="space.php?username=Evey">Evey</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_38442" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=38442&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_38442"><a href="viewthread.php?tid=38442&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">连载：公民调查震区日记</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=38442&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=38442&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=38442&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2804">musicool</a>
										</cite>
					<em>2009-4-1</em>
				</td>
				<td class="nums"><strong>117</strong> / <em>3262</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=38442&goto=lastpost#lastpost">2010-2-25 00:27</a></em>
					<cite>by <a href="space.php?username=lailaiovo">lailaiovo</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_49130" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=49130&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_49130"><a href="viewthread.php?tid=49130&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">温家宝在河南考察 驾驶拖拉机在麦地耕种</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=49130&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=49130&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=49130&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=10890">xiaohe1120</a>
										</cite>
					<em>2010-6-11</em>
				</td>
				<td class="nums"><strong>117</strong> / <em>1994</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=49130&goto=lastpost#lastpost">2010-6-13 13:44</a></em>
					<cite>by <a href="space.php?username=%B5%A5%CA%D6%B7%F6%C7%BD">单手扶墙</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_32423" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=32423&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_32423"><a href="viewthread.php?tid=32423&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传，西南政法学生因声援刘晓波被警方带走</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=32423&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=32423&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=32423&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8585">绝望的落支撑</a>
										</cite>
					<em>2009-12-25</em>
				</td>
				<td class="nums"><strong>117</strong> / <em>3077</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=32423&goto=lastpost#lastpost">2009-12-28 14:32</a></em>
					<cite>by <a href="space.php?username=iiiiii">iiiiii</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_16996" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=16996&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_hot.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="hot" >
					<label>
																				 </label>
																				<span id="thread_16996"><a href="viewthread.php?tid=16996&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">广西师大出版社真的停业整顿三个月？</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=16996&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=16996&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> <a href="viewthread.php?tid=16996&amp;extra=page%3D4%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=3">3</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=134">丁丁</a>
										</cite>
					<em>2009-7-17</em>
				</td>
				<td class="nums"><strong>117</strong> / <em>3036</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=16996&goto=lastpost#lastpost">2009-7-31 01:33</a></em>
					<cite>by <a href="space.php?username=kiki111">kiki111</a></cite>
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
	<div class="pages"><em>&nbsp;22278&nbsp;</em><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=1" class="first">1 ...</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=3" class="prev">&lsaquo;&lsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=2">2</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=3">3</a><strong>4</strong><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=5">5</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=6">6</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=7">7</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=8">8</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=9">9</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=10">10</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=11">11</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=5" class="next">&rsaquo;&rsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=349" class="last">... 349</a><kbd><input type="text" name="custompage" size="3" onkeydown="if(event.keyCode==13) {window.location='forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page='+this.value; return false;}" /></kbd></div>	</div>

  
	<div class="box">
			<span class="headactions"><a href="forumdisplay.php?fid=2&amp;page=4&amp;showoldetails=yes#online" class="nobdr"><img src="images/default/collapsed_yes.gif" alt="" /></a></span>
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
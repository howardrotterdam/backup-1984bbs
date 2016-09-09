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
			window.location = 'forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&page=12';
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
<div class="pages"><em>&nbsp;22278&nbsp;</em><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=1" class="first">1 ...</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=12" class="prev">&lsaquo;&lsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=11">11</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=12">12</a><strong>13</strong><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=14">14</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=15">15</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=16">16</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=17">17</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=18">18</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=19">19</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=20">20</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=14" class="next">&rsaquo;&rsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=349" class="last">... 349</a><kbd><input type="text" name="custompage" size="3" onkeydown="if(event.keyCode==13) {window.location='forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page='+this.value; return false;}" /></kbd></div></div>

<div style="float:left;border:1px solid #CCC; border-bottom:none;;width:218px; background: url(/imgs/1984radio.jpg) 200px 2px no-repeat;padding:5px 0 5px 12px;margin:0px 0 0 13px">

<p><b><a href="/radio/index.php" target="_blank">1984FM</a></b><br /><b><a href="https://voxli.com/1984bbs" target="_blank">1984Chat</a></b>&nbsp;</p> 
</div>

<div style="clear:both;height:0px;width:100%;font-size:1px;">&nbsp;</div>

	<ul class="popupmenu_popup newspecialmenu" id="newspecial_menu" style="display: none">
		<li><a href="post.php?action=newthread&amp;fid=2&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">发新话题</a></li>		<li class="poll"><a href="post.php?action=newthread&amp;fid=2&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;special=1">发布投票</a></li>													</ul>
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

					<tbody id="normalthread_56097" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=56097&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_56097"><a href="viewthread.php?tid=56097&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">人人影视被关停 服务器被没收</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=56097&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=56097&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=12952">极光掠天</a>
										</cite>
					<em>2010-8-20</em>
				</td>
				<td class="nums"><strong>69</strong> / <em>2253</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=56097&goto=lastpost#lastpost">2010-8-23 06:36</a></em>
					<cite>by <a href="space.php?username=bbb31313">bbb31313</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_59402" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=59402&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_59402"><a href="viewthread.php?tid=59402&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">中国版WikiLeaks维基解密即将上线</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=59402&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=59402&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8351">isonomy</a>
										</cite>
					<em>2010-9-25</em>
				</td>
				<td class="nums"><strong>69</strong> / <em>1611</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=59402&goto=lastpost#lastpost">2010-9-28 01:18</a></em>
					<cite>by <a href="space.php?username=RPKAK47">RPKAK47</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_59532" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=59532&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_59532"><a href="viewthread.php?tid=59532&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">360发布隐私保护软件 针对腾讯QQ</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=59532&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=59532&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=13703">feng1105</a>
										</cite>
					<em>2010-9-27</em>
				</td>
				<td class="nums"><strong>69</strong> / <em>1838</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=59532&goto=lastpost#lastpost">2010-9-29 15:37</a></em>
					<cite>by <a href="space.php?username=%B1%B1%BE%A9%C9%EE%C0%B6">北京深蓝</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_33508" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=33508&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_33508"><a href="viewthread.php?tid=33508&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">上海逸仙路遭遇新疆人抢劫</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=33508&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=33508&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5464">上海帅哥</a>
										</cite>
					<em>2010-1-4</em>
				</td>
				<td class="nums"><strong>69</strong> / <em>1656</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=33508&goto=lastpost#lastpost">2010-1-7 21:12</a></em>
					<cite>by <a href="space.php?username=%CE%F7%C3%C5%B4%B5%C5%A3">西门吹牛</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_35282" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=35282&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_35282"><a href="viewthread.php?tid=35282&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">海地发生强震 致10-20万人死亡</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=35282&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=35282&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=852">未来他老爸</a>
										</cite>
					<em>2010-1-13</em>
				</td>
				<td class="nums"><strong>69</strong> / <em>1526</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=35282&goto=lastpost#lastpost">2010-1-19 15:02</a></em>
					<cite>by <a href="space.php?username=%D2%D6%D1%EF">抑扬</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_35742" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=35742&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_35742"><a href="viewthread.php?tid=35742&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传，比南勇等人更高级别的人员被警方盯上</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=35742&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=35742&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8543">blancpain</a>
										</cite>
					<em>2010-1-23</em>
				</td>
				<td class="nums"><strong>69</strong> / <em>3006</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=35742&goto=lastpost#lastpost">2010-2-3 21:50</a></em>
					<cite>by <a href="space.php?username=lx5885">lx5885</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_43151" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=43151&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_43151"><a href="viewthread.php?tid=43151&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">温云松计划筹资10亿美元投资大陆上市企业</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=43151&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=43151&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1258">路边社记者</a>
										</cite>
					<em>2010-1-26</em>
				</td>
				<td class="nums"><strong>69</strong> / <em>2573</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=43151&goto=lastpost#lastpost">2010-4-15 18:19</a></em>
					<cite>by <a href="space.php?username=%B7%CF%D6%D6%B6%B9%F4%F9">废种豆豉</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_44420" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=44420&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_44420"><a href="viewthread.php?tid=44420&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">胡锦涛汪洋皆好《张居正》</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=44420&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=44420&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5588">我家旺财有喜了</a>
										</cite>
					<em>2009-9-27</em>
				</td>
				<td class="nums"><strong>69</strong> / <em>2414</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=44420&goto=lastpost#lastpost">2010-4-29 17:52</a></em>
					<cite>by <a href="space.php?username=%BB%FA%C6%F7%C3%A8%B0%A2%B8%A3">机器猫阿福</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_44948" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=44948&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_44948"><a href="viewthread.php?tid=44948&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">南平血案校门前纪念花墙及横幅被强拆</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=44948&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=44948&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6327">chandler0819</a>
										</cite>
					<em>2010-3-26</em>
				</td>
				<td class="nums"><strong>69</strong> / <em>1788</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=44948&goto=lastpost#lastpost">2010-5-6 10:42</a></em>
					<cite>by <a href="space.php?username=CCAV">CCAV</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_45421" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=45421&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_45421"><a href="viewthread.php?tid=45421&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">国家防火墙将升级</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=45421&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=45421&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7">张书记</a>
										</cite>
					<em>2010-5-10</em>
				</td>
				<td class="nums"><strong>69</strong> / <em>2345</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=45421&goto=lastpost#lastpost">2010-5-11 21:24</a></em>
					<cite>by <a href="space.php?username=8%D8%D48%D8%D4">8卦8卦</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_7984" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=7984&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_7984"><a href="viewthread.php?tid=7984&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">揭密：太子党们艰苦朴素的生活作风，从不乱花爹妈和纳税人的钱</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=7984&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=7984&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1261">轻轻地想</a>
										</cite>
					<em>2009-2-17</em>
				</td>
				<td class="nums"><strong>69</strong> / <em>2945</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=7984&goto=lastpost#lastpost">2009-6-3 11:44</a></em>
					<cite>by <a href="space.php?username=ziyi">ziyi</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_14145" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=14145&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_14145"><a href="viewthread.php?tid=14145&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">高也博客</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=14145&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=14145&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6297">ohdodo</a>
										</cite>
					<em>2009-6-19</em>
				</td>
				<td class="nums"><strong>69</strong> / <em>1456</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=14145&goto=lastpost#lastpost">2009-6-20 11:41</a></em>
					<cite>by <a href="space.php?username=%B5%A5%CA%D6%B7%F6%C7%BD">单手扶墙</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_16272" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=16272&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_16272"><a href="viewthread.php?tid=16272&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传，李副总理的两个秘书被抓</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=16272&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=16272&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1353">边缘构件</a>
										</cite>
					<em>2009-7-9</em>
				</td>
				<td class="nums"><strong>69</strong> / <em>2957</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=16272&goto=lastpost#lastpost">2009-7-10 20:24</a></em>
					<cite>by <a href="space.php?username=%CE%E5%B4%FA%CD%B7%C4%BF%CF%AE%BD%FC%C6%BF">五代头目袭近瓶</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_21993" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=21993&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_21993"><a href="viewthread.php?tid=21993&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">不堪忍受军训，大学生跳楼死亡</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=21993&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=21993&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2315">写实</a>
										</cite>
					<em>2009-9-11</em>
				</td>
				<td class="nums"><strong>69</strong> / <em>1507</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=21993&goto=lastpost#lastpost">2009-9-15 15:42</a></em>
					<cite>by <a href="space.php?username=davysky">davysky</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_22211" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=22211&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_22211"><a href="viewthread.php?tid=22211&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">一周图片新闻 9.14-9.20</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=22211&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=22211&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2232">老杂疫</a>
										</cite>
					<em>2009-9-14</em>
				</td>
				<td class="nums"><strong>69</strong> / <em>1840</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=22211&goto=lastpost#lastpost">2009-9-21 01:38</a></em>
					<cite>by <a href="space.php?username=wobuwuliaoa">wobuwuliaoa</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_47284" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=47284&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_47284"><a href="viewthread.php?tid=47284&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">邓玉娇已隐姓埋名孤独生活 拿省级财政工资</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=47284&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=47284&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=9591">吃吃饭</a>
										</cite>
					<em>2010-5-27</em>
				</td>
				<td class="nums"><strong>69</strong> / <em>1614</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=47284&goto=lastpost#lastpost">2010-5-28 12:23</a></em>
					<cite>by <a href="space.php?username=cityhurt">cityhurt</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_48151" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=48151&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_48151"><a href="viewthread.php?tid=48151&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">男子借8辆奥迪迎亲遭拒 新娘称要宝马才上车</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=48151&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=48151&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=9591">吃吃饭</a>
										</cite>
					<em>2010-6-3</em>
				</td>
				<td class="nums"><strong>69</strong> / <em>1547</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=48151&goto=lastpost#lastpost">2010-6-9 19:26</a></em>
					<cite>by <a href="space.php?username=%B3%AC%BC%B6%B4%F3%B7%B9%CD%B0">超级大饭桶</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_49376" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=49376&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_49376"><a href="viewthread.php?tid=49376&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">韩国“性感武器” Wonder Girls心战朝鲜</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=49376&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=49376&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7002">luugoo</a>
										</cite>
					<em>2010-6-13</em>
				</td>
				<td class="nums"><strong>69</strong> / <em>2821</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=49376&goto=lastpost#lastpost">2010-6-20 23:18</a></em>
					<cite>by <a href="space.php?username=newkou">newkou</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_52392" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=52392&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_52392"><a href="viewthread.php?tid=52392&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">拘留15个月 河北主教获释</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=52392&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=52392&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7002">luugoo</a>
										</cite>
					<em>2010-7-10</em>
				</td>
				<td class="nums"><strong>69</strong> / <em>1192</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=52392&goto=lastpost#lastpost">2010-7-13 21:15</a></em>
					<cite>by <a href="space.php?username=Cybertarian">Cybertarian</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_38749" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=38749&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_38749"><a href="viewthread.php?tid=38749&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">好莱坞影片《被出卖的台湾》在美上映</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=38749&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=38749&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7002">luugoo</a>
										</cite>
					<em>2010-2-28</em>
				</td>
				<td class="nums"><strong>69</strong> / <em>2567</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=38749&goto=lastpost#lastpost">2010-7-14 19:38</a></em>
					<cite>by <a href="space.php?username=%C6%D0%CC%E1%D2%BB%D2%B6">菩提一叶</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_53048" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=53048&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_53048"><a href="viewthread.php?tid=53048&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">卡斯特罗：台湾有权加入联合国</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=53048&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=53048&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=134">丁丁</a>
										</cite>
					<em>2010-7-16</em>
				</td>
				<td class="nums"><strong>69</strong> / <em>1919</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=53048&goto=lastpost#lastpost">2010-7-19 00:53</a></em>
					<cite>by <a href="space.php?username=zouke">zouke</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_54297" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=54297&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_54297"><a href="viewthread.php?tid=54297&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">《经济观察报》记者因报道负面新闻遭警方通缉</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=54297&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=54297&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4575">老大哥</a>
										</cite>
					<em>2010-7-27</em>
				</td>
				<td class="nums"><strong>69</strong> / <em>1811</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=54297&goto=lastpost#lastpost">2010-8-1 18:52</a></em>
					<cite>by <a href="space.php?username=zzc198316">zzc198316</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_19879" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=19879&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_19879"><a href="viewthread.php?tid=19879&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">蒙古新纳粹：针对中国的纳粹党徽</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=19879&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=19879&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2316">自由之春</a>
										</cite>
					<em>2009-7-21</em>
				</td>
				<td class="nums"><strong>69</strong> / <em>1712</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=19879&goto=lastpost#lastpost">2009-8-21 20:15</a></em>
					<cite>by <a href="space.php?username=Husky">Husky</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_26931" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=26931&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_26931"><a href="viewthread.php?tid=26931&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">大三女生独自看房 惨遭轮奸30小时</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=26931&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=26931&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1408">becom</a>
										</cite>
					<em>2009-11-2</em>
				</td>
				<td class="nums"><strong>69</strong> / <em>2515</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=26931&goto=lastpost#lastpost">2009-11-4 22:41</a></em>
					<cite>by <a href="space.php?username=Guru">Guru</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_31734" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=31734&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_31734"><a href="viewthread.php?tid=31734&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">台湾发生6.8级地震</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=31734&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=31734&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1640">超级麦芽糖</a>
										</cite>
					<em>2009-12-19</em>
				</td>
				<td class="nums"><strong>69</strong> / <em>1096</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=31734&goto=lastpost#lastpost">2009-12-21 09:10</a></em>
					<cite>by <a href="space.php?username=%CB%BF%CB%BF%CD%C3">丝丝兔</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_31621" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=31621&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_31621"><a href="viewthread.php?tid=31621&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传，大刘《三体》被禁</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=31621&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=31621&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=9991">duck_1984</a>
										</cite>
					<em>2009-12-18</em>
				</td>
				<td class="nums"><strong>69</strong> / <em>1763</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=31621&goto=lastpost#lastpost">2009-12-22 16:31</a></em>
					<cite>by <a href="space.php?username=13951639">13951639</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_7924" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=7924&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_7924"><a href="viewthread.php?tid=7924&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">继《中国可以说不》后又一部民族主义巨作——《中国不高兴》</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=7924&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=7924&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1960">库存袈裟</a>
										</cite>
					<em>2009-3-11</em>
				</td>
				<td class="nums"><strong>69</strong> / <em>1623</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=7924&goto=lastpost#lastpost">2009-3-27 17:34</a></em>
					<cite>by <a href="space.php?username=southleaf">southleaf</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_4849" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=4849&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_4849"><a href="viewthread.php?tid=4849&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">梁文道：诵经回向徐来及凶手</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=4849&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=4849&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2028">猪肘</a>
										</cite>
					<em>2009-2-15</em>
				</td>
				<td class="nums"><strong>69</strong> / <em>1125</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=4849&goto=lastpost#lastpost">2009-2-18 22:46</a></em>
					<cite>by <a href="space.php?username=Chery">Chery</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_3122" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=3122&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_3122"><a href="viewthread.php?tid=3122&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">零八县长签名名单（实时更新）</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=3122&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=3122&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2093">路边社主编</a>
										</cite>
					<em>2008-12-10</em>
				</td>
				<td class="nums"><strong>68</strong> / <em>2346</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=3122&goto=lastpost#lastpost">2009-2-18 09:04</a></em>
					<cite>by <a href="space.php?username=vip001">vip001</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_22300" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=22300&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_22300"><a href="viewthread.php?tid=22300&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">党报新大楼设计方案确认</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=22300&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=22300&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5464">上海帅哥</a>
										</cite>
					<em>2009-9-8</em>
				</td>
				<td class="nums"><strong>68</strong> / <em>1577</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=22300&goto=lastpost#lastpost">2009-9-15 17:52</a></em>
					<cite>by <a href="space.php?username=%CF%E7%CF%C2%C8%CB">乡下人</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_22459" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=22459&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_22459"><a href="viewthread.php?tid=22459&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">主动脱离中国籍的《建国大业》演员们</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=22459&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=22459&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2428">xiahua</a>
										</cite>
					<em>2009-8-4</em>
				</td>
				<td class="nums"><strong>68</strong> / <em>2009</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=22459&goto=lastpost#lastpost">2009-9-17 09:22</a></em>
					<cite>by <a href="space.php?username=%B0%B2%CB%B3">安顺</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_20498" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=20498&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_20498"><a href="viewthread.php?tid=20498&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">国庆献礼巨片《天安门》片头字体居然……</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=20498&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=20498&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5348">rio21cn</a>
										</cite>
					<em>2009-8-24</em>
				</td>
				<td class="nums"><strong>68</strong> / <em>2959</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=20498&goto=lastpost#lastpost">2009-9-26 10:12</a></em>
					<cite>by <a href="space.php?username=%C3%C9%C9%AF">蒙莎</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_23667" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=23667&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_23667"><a href="viewthread.php?tid=23667&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">北京晚报：一些不负责任的论坛说出租车里有窃听器</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=23667&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=23667&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3202">glim</a>
										</cite>
					<em>2009-9-28</em>
				</td>
				<td class="nums"><strong>68</strong> / <em>1920</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=23667&goto=lastpost#lastpost">2009-10-7 23:07</a></em>
					<cite>by <a href="space.php?username=%C1%F5%B5%C2%BE%FC">刘德军</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_26279" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=26279&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_26279"><a href="viewthread.php?tid=26279&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">重庆扎针者被围殴致死 真理部要求死者身份由吸毒者变小偷</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=26279&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=26279&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=9163">赵行德</a>
										</cite>
					<em>2009-10-25</em>
				</td>
				<td class="nums"><strong>68</strong> / <em>2505</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=26279&goto=lastpost#lastpost">2009-10-29 13:32</a></em>
					<cite>by <a href="space.php?username=%D0%DC%D8%88%B4%F3%CF%C9">熊貓大仙</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_34964" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=34964&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_34964"><a href="viewthread.php?tid=34964&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">教育部发出通知春节期间组织学生网上向祖国拜年</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=34964&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=34964&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1946">qiushuihan</a>
										</cite>
					<em>2010-1-16</em>
				</td>
				<td class="nums"><strong>68</strong> / <em>1210</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=34964&goto=lastpost#lastpost">2010-1-19 13:39</a></em>
					<cite>by <a href="space.php?username=%CE%DE%D2%E2%CF%F9%D5%C5">无意嚣张</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_36901" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=36901&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_36901"><a href="viewthread.php?tid=36901&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">温州一名校校长嫖娼被抓</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=36901&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=36901&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3119">DD6677</a>
										</cite>
					<em>2010-2-5</em>
				</td>
				<td class="nums"><strong>68</strong> / <em>1428</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=36901&goto=lastpost#lastpost">2010-2-20 17:07</a></em>
					<cite>by <a href="space.php?username=%B2%CB%B5%F9">菜爹</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_38859" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=38859&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_38859"><a href="viewthread.php?tid=38859&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">政协委员张晓梅建议“婚内男方支付女方工资”</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=38859&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=38859&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2362">呼噜必烈</a>
										</cite>
					<em>2010-3-1</em>
				</td>
				<td class="nums"><strong>68</strong> / <em>1201</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=38859&goto=lastpost#lastpost">2010-3-7 11:31</a></em>
					<cite>by <a href="space.php?username=%D1%C7%C9%AA">亚瑟</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_59775" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=59775&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_59775"><a href="viewthread.php?tid=59775&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">真理部最新指令：《凤凰周刊》下架处理</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=59775&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=59775&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5588">我家旺财有喜了</a>
										</cite>
					<em>2010-9-29</em>
				</td>
				<td class="nums"><strong>68</strong> / <em>2844</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=59775&goto=lastpost#lastpost">2010-10-8 07:20</a></em>
					<cite>by <a href="space.php?username=chyhui">chyhui</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_12232" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=12232&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_12232"><a href="viewthread.php?tid=12232&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">如果有一天政党轮替，TG下野，其结果会是怎么样？</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=12232&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=12232&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4207">skyking0752</a>
										</cite>
					<em>2009-5-30</em>
				</td>
				<td class="nums"><strong>68</strong> / <em>1506</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=12232&goto=lastpost#lastpost">2009-6-11 16:18</a></em>
					<cite>by <a href="space.php?username=frogg">frogg</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_14789" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=14789&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_14789"><a href="viewthread.php?tid=14789&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">邓小平经济改革已告失败 中国91%亿元户是中共高干子女</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=14789&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=14789&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7">张书记</a>
										</cite>
					<em>2009-6-25</em>
				</td>
				<td class="nums"><strong>68</strong> / <em>1843</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=14789&goto=lastpost#lastpost">2009-6-27 08:01</a></em>
					<cite>by <a href="space.php?username=bison">bison</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_39984" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=39984&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_39984"><a href="viewthread.php?tid=39984&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">兰州一名特警出警时被枪杀</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=39984&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=39984&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7777">愤球</a>
										</cite>
					<em>2010-3-10</em>
				</td>
				<td class="nums"><strong>68</strong> / <em>2509</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=39984&goto=lastpost#lastpost">2010-3-12 19:21</a></em>
					<cite>by <a href="space.php?username=XuHangBoy">XuHangBoy</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_45155" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=45155&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_45155"><a href="viewthread.php?tid=45155&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">山东品牌花生油不用花生就能产 中国邮政助纣为虐</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=45155&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=45155&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4570">我卖糕的</a>
										</cite>
					<em>2010-5-7</em>
				</td>
				<td class="nums"><strong>68</strong> / <em>1886</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=45155&goto=lastpost#lastpost">2010-5-16 22:19</a></em>
					<cite>by <a href="space.php?username=%B9%DB%C6%E5%B2%BB%D3%EF">观棋不语</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_46163" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=46163&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_46163"><a href="viewthread.php?tid=46163&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">香港民主派拉票如过街老鼠 被民众痛骂“做骚”“汉奸”</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=46163&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=46163&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6314">hhbcl1414</a>
										</cite>
					<em>2010-5-17</em>
				</td>
				<td class="nums"><strong>68</strong> / <em>2087</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=46163&goto=lastpost#lastpost">2010-5-26 13:53</a></em>
					<cite>by <a href="space.php?username=blisdom">blisdom</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_11079" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=11079&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_11079"><a href="viewthread.php?tid=11079&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">薄书记要求用毛主席语录占领手机短信阵地</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=11079&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=11079&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1408">becom</a>
										</cite>
					<em>2009-4-29</em>
				</td>
				<td class="nums"><strong>68</strong> / <em>1643</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=11079&goto=lastpost#lastpost">2009-5-18 11:56</a></em>
					<cite>by <a href="space.php?username=%B0%D7%C5%A3">白牛</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_18650" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=18650&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_18650"><a href="viewthread.php?tid=18650&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">境内亲属给热比娅的信</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=18650&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=18650&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2071">上肛上腺</a>
										</cite>
					<em>2009-8-3</em>
				</td>
				<td class="nums"><strong>68</strong> / <em>1014</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=18650&goto=lastpost#lastpost">2009-8-5 16:24</a></em>
					<cite>by <a href="space.php?username=cwyalpha">cwyalpha</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_20802" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=20802&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_20802"><a href="viewthread.php?tid=20802&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">美联社拍到的党国庆学生方阵训练</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=20802&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=20802&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7">张书记</a>
										</cite>
					<em>2009-8-28</em>
				</td>
				<td class="nums"><strong>68</strong> / <em>2137</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=20802&goto=lastpost#lastpost">2009-9-3 04:11</a></em>
					<cite>by <a href="space.php?username=%CE%F7%C3%C5%B4%B5%C5%A3">西门吹牛</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_49929" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=49929&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_49929"><a href="viewthread.php?tid=49929&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">陈良宇被安排保释 在杭州静养</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=49929&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=49929&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3884">一点五</a>
										</cite>
					<em>2010-6-18</em>
				</td>
				<td class="nums"><strong>68</strong> / <em>2348</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=49929&goto=lastpost#lastpost">2010-6-20 06:47</a></em>
					<cite>by <a href="space.php?username=%B2%BB%BF%DE%CB%C0%C9%F1">不哭死神</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_50462" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=50462&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_50462"><a href="viewthread.php?tid=50462&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">广电总局整治相亲节目</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=50462&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=50462&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2028">猪肘</a>
										</cite>
					<em>2010-6-7</em>
				</td>
				<td class="nums"><strong>68</strong> / <em>1630</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=50462&goto=lastpost#lastpost">2010-6-23 11:07</a></em>
					<cite>by <a href="space.php?username=shjGTX">shjGTX</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_51806" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=51806&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_51806"><a href="viewthread.php?tid=51806&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">演员贾宏声跳楼自杀</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=51806&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=51806&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6723">卡哥</a>
										</cite>
					<em>2010-7-5</em>
				</td>
				<td class="nums"><strong>68</strong> / <em>1992</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=51806&goto=lastpost#lastpost">2010-7-6 19:02</a></em>
					<cite>by <a href="space.php?username=%D0%B4%CA%B5">写实</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_54220" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=54220&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_54220"><a href="viewthread.php?tid=54220&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">山东粮食局12人一顿饭吃掉14800元</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=54220&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=54220&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=852">未来他老爸</a>
										</cite>
					<em>2010-6-22</em>
				</td>
				<td class="nums"><strong>68</strong> / <em>1363</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=54220&goto=lastpost#lastpost">2010-7-29 15:55</a></em>
					<cite>by <a href="space.php?username=%BA%FA%CC%CE%BC%D0%D7%D3">胡涛夹子</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_29863" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=29863&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_29863"><a href="viewthread.php?tid=29863&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">国庆期间网络信息安全的通告</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=29863&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=29863&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6873">萧易寒</a>
										</cite>
					<em>2009-12-4</em>
				</td>
				<td class="nums"><strong>68</strong> / <em>1553</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=29863&goto=lastpost#lastpost">2009-12-14 03:02</a></em>
					<cite>by <a href="space.php?username=agw">agw</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_32023" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=32023&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_32023"><a href="viewthread.php?tid=32023&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">工信部将推境外域名“白名单”制度</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=32023&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=32023&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6988">fp456789</a>
										</cite>
					<em>2009-12-21</em>
				</td>
				<td class="nums"><strong>68</strong> / <em>1461</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=32023&goto=lastpost#lastpost">2009-12-22 15:20</a></em>
					<cite>by <a href="space.php?username=WJ87">WJ87</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_28972" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=28972&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_28972"><a href="viewthread.php?tid=28972&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">真理部最新指令：各网禁止推荐和讨论电视剧《蜗居》</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=28972&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=28972&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=21">大仙儿</a>
										</cite>
					<em>2009-11-19</em>
				</td>
				<td class="nums"><strong>67</strong> / <em>2867</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=28972&goto=lastpost#lastpost">2009-11-25 16:43</a></em>
					<cite>by <a href="space.php?username=sigh">sigh</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_29418" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=29418&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_29418"><a href="viewthread.php?tid=29418&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">党媒批《财经》系境外势力代言人 重申确保新闻“忠于党”</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=29418&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=29418&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1770">nustbobo</a>
										</cite>
					<em>2009-11-24</em>
				</td>
				<td class="nums"><strong>67</strong> / <em>1718</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=29418&goto=lastpost#lastpost">2009-12-7 17:30</a></em>
					<cite>by <a href="space.php?username=%B5%B0%B6%A8%B5%C4%C2%B7%C8%CB">蛋定的路人</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_40036" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=40036&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_40036"><a href="viewthread.php?tid=40036&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">苏州大学生课上批评中国政治制度视频遭当局删除</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=40036&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=40036&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7002">luugoo</a>
										</cite>
					<em>2010-3-12</em>
				</td>
				<td class="nums"><strong>67</strong> / <em>3355</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=40036&goto=lastpost#lastpost">2010-3-23 09:58</a></em>
					<cite>by <a href="space.php?username=kiki111">kiki111</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_40537" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=40537&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_40537"><a href="viewthread.php?tid=40537&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">卢安克入籍再度被拒黯然离华</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=40537&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=40537&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3694">沧海月明</a>
										</cite>
					<em>2010-3-17</em>
				</td>
				<td class="nums"><strong>67</strong> / <em>1912</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=40537&goto=lastpost#lastpost">2010-3-25 08:40</a></em>
					<cite>by <a href="space.php?username=beiou">beiou</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_22016" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=22016&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_22016"><a href="viewthread.php?tid=22016&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">党中央、国务院联合发布贺寿标准用语</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=22016&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=22016&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2071">上肛上腺</a>
										</cite>
					<em>2009-9-12</em>
				</td>
				<td class="nums"><strong>67</strong> / <em>1373</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=22016&goto=lastpost#lastpost">2009-9-14 08:49</a></em>
					<cite>by <a href="space.php?username=%C0%CF%BE%C5">老九</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_23682" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=23682&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_23682"><a href="viewthread.php?tid=23682&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">林希翎女士去世</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=23682&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=23682&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=476">会飞的猪</a>
										</cite>
					<em>2009-9-21</em>
				</td>
				<td class="nums"><strong>67</strong> / <em>2122</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=23682&goto=lastpost#lastpost">2009-9-29 17:56</a></em>
					<cite>by <a href="space.php?username=%BF%B5%B2%A8">康波</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_25771" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=25771&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_25771"><a href="viewthread.php?tid=25771&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">常熟国保强行购买本人T恤纪实</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=25771&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=25771&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6887">不锈钢老鼠</a>
										</cite>
					<em>2009-10-21</em>
				</td>
				<td class="nums"><strong>67</strong> / <em>1753</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=25771&goto=lastpost#lastpost">2009-10-23 22:55</a></em>
					<cite>by <a href="space.php?username=%B5%A5%CA%D6%B7%F6%C7%BD">单手扶墙</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_27510" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=27510&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_27510"><a href="viewthread.php?tid=27510&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">湖北咸宁学院450名女大学生同浴温泉创世界纪录</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=27510&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=27510&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8871">庄三水</a>
										</cite>
					<em>2009-11-8</em>
				</td>
				<td class="nums"><strong>67</strong> / <em>2792</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=27510&goto=lastpost#lastpost">2008-4-2 12:52</a></em>
					<cite>by <a href="space.php?username=%C8%CB%C3%F1%C8%BA%D6%DA">人民群众</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_14785" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=14785&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_14785"><a href="viewthread.php?tid=14785&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">梁文道：韩寒是下一个鲁迅 读经典能读成于丹</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=14785&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=14785&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3339">机器猫阿福</a>
										</cite>
					<em>2009-6-25</em>
				</td>
				<td class="nums"><strong>67</strong> / <em>1494</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=14785&goto=lastpost#lastpost">2009-6-27 21:36</a></em>
					<cite>by <a href="space.php?username=%B3%AF%D1%D5">朝颜</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_15069" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=15069&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_15069"><a href="viewthread.php?tid=15069&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">李彦宏心神不宁了</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=15069&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=15069&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2973">free1989</a>
										</cite>
					<em>2009-6-27</em>
				</td>
				<td class="nums"><strong>67</strong> / <em>1499</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=15069&goto=lastpost#lastpost">2009-6-28 10:31</a></em>
					<cite>by <a href="space.php?username=peteryang84">peteryang84</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_16072" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=16072&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_16072"><a href="viewthread.php?tid=16072&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">民进党谴责中国血腥镇压新疆人民</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=16072&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=16072&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6314">hhbcl1414</a>
										</cite>
					<em>2009-7-7</em>
				</td>
				<td class="nums"><strong>67</strong> / <em>1434</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=16072&goto=lastpost#lastpost">2009-7-9 17:45</a></em>
					<cite>by <a href="space.php?username=uwen">uwen</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_16512" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=16512&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_16512"><a href="viewthread.php?tid=16512&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">他向组织发誓再也不看《华尔街日报》 随后WSJ中文被封锁</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=16512&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=16512&amp;extra=page%3D13%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3202">glim</a>
										</cite>
					<em>2009-7-11</em>
				</td>
				<td class="nums"><strong>67</strong> / <em>1972</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=16512&goto=lastpost#lastpost">2009-7-17 20:20</a></em>
					<cite>by <a href="space.php?username=%D5%D5%B9%CB%BA%C3%C4%E3">照顾好你</a></cite>
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
	<div class="pages"><em>&nbsp;22278&nbsp;</em><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=1" class="first">1 ...</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=12" class="prev">&lsaquo;&lsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=11">11</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=12">12</a><strong>13</strong><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=14">14</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=15">15</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=16">16</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=17">17</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=18">18</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=19">19</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=20">20</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=14" class="next">&rsaquo;&rsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=349" class="last">... 349</a><kbd><input type="text" name="custompage" size="3" onkeydown="if(event.keyCode==13) {window.location='forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page='+this.value; return false;}" /></kbd></div>	</div>

  
	<div class="box">
			<span class="headactions"><a href="forumdisplay.php?fid=2&amp;page=13&amp;showoldetails=yes#online" class="nobdr"><img src="images/default/collapsed_yes.gif" alt="" /></a></span>
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
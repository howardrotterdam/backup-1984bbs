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
			window.location = 'forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&page=11';
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
<div class="pages"><em>&nbsp;22278&nbsp;</em><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=1" class="first">1 ...</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=11" class="prev">&lsaquo;&lsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=10">10</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=11">11</a><strong>12</strong><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=13">13</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=14">14</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=15">15</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=16">16</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=17">17</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=18">18</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=19">19</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=13" class="next">&rsaquo;&rsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=349" class="last">... 349</a><kbd><input type="text" name="custompage" size="3" onkeydown="if(event.keyCode==13) {window.location='forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page='+this.value; return false;}" /></kbd></div></div>

<div style="float:left;border:1px solid #CCC; border-bottom:none;;width:218px; background: url(/imgs/1984radio.jpg) 200px 2px no-repeat;padding:5px 0 5px 12px;margin:0px 0 0 13px">

<p><b><a href="/radio/index.php" target="_blank">1984FM</a></b><br /><b><a href="https://voxli.com/1984bbs" target="_blank">1984Chat</a></b>&nbsp;</p> 
</div>

<div style="clear:both;height:0px;width:100%;font-size:1px;">&nbsp;</div>

	<ul class="popupmenu_popup newspecialmenu" id="newspecial_menu" style="display: none">
		<li><a href="post.php?action=newthread&amp;fid=2&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">发新话题</a></li>		<li class="poll"><a href="post.php?action=newthread&amp;fid=2&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;special=1">发布投票</a></li>													</ul>
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

					<tbody id="normalthread_30074" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=30074&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_30074"><a href="viewthread.php?tid=30074&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">本地市民在北京应享受更低房价</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=30074&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=30074&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4817">firedragoon</a>
										</cite>
					<em>2009-12-6</em>
				</td>
				<td class="nums"><strong>73</strong> / <em>996</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=30074&goto=lastpost#lastpost">2009-12-11 14:09</a></em>
					<cite>by <a href="space.php?username=ebuluo">ebuluo</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_30897" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=30897&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_30897"><a href="viewthread.php?tid=30897&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">上海高校医科专业学生散步计划</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=30897&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=30897&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3630">elzzird</a>
										</cite>
					<em>2009-12-13</em>
				</td>
				<td class="nums"><strong>73</strong> / <em>1664</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=30897&goto=lastpost#lastpost">2009-12-18 23:33</a></em>
					<cite>by <a href="space.php?username=%D1%F4%B9%E2%B2%BB%D0%E2">阳光不锈</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_12402" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=12402&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_12402"><a href="viewthread.php?tid=12402&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">王怡是怎么回事？</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=12402&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=12402&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1925">兽小明</a>
										</cite>
					<em>2009-6-2</em>
				</td>
				<td class="nums"><strong>73</strong> / <em>2017</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=12402&goto=lastpost#lastpost">2009-6-11 15:20</a></em>
					<cite>by <a href="space.php?username=%D0%A1%B2%D4%D3%AC">小苍蝇</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_13609" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=13609&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_13609"><a href="viewthread.php?tid=13609&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">北京书店老板因印发圣经而被判刑</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=13609&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=13609&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=795">satanla</a>
										</cite>
					<em>2009-6-14</em>
				</td>
				<td class="nums"><strong>73</strong> / <em>1960</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=13609&goto=lastpost#lastpost">2009-6-19 13:41</a></em>
					<cite>by <a href="space.php?username=%CC%D2%D7%D3%C3%A8%C2%E9">桃子猫麻</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_17242" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=17242&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_17242"><a href="viewthread.php?tid=17242&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">北风等人 已平安归来</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=17242&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=17242&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7871">不死的流年</a>
										</cite>
					<em>2009-7-19</em>
				</td>
				<td class="nums"><strong>72</strong> / <em>1831</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=17242&goto=lastpost#lastpost">2009-7-22 00:07</a></em>
					<cite>by <a href="space.php?username=littledodo">littledodo</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_17665" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=17665&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_17665"><a href="viewthread.php?tid=17665&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">刘霞感谢各界关注</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=17665&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=17665&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7645">温克坚</a>
										</cite>
					<em>2009-7-23</em>
				</td>
				<td class="nums"><strong>72</strong> / <em>1443</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=17665&goto=lastpost#lastpost">2009-7-27 02:30</a></em>
					<cite>by <a href="space.php?username=%C0%E4%D1%D4%C0%E4%D3%EF%C0%E4%D7%D4%D3%C9">冷言冷语冷自由</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_18989" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=18989&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_18989"><a href="viewthread.php?tid=18989&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">克林顿赴朝鲜营救，美女记者获释</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=18989&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=18989&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3095">iridiumcao</a>
										</cite>
					<em>2009-8-4</em>
				</td>
				<td class="nums"><strong>72</strong> / <em>1485</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=18989&goto=lastpost#lastpost">2009-8-7 11:03</a></em>
					<cite>by <a href="space.php?username=unicef1984">unicef1984</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_20053" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=20053&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_20053"><a href="viewthread.php?tid=20053&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">上海天降神兵！</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=20053&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=20053&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6523">自由西瓜</a>
										</cite>
					<em>2009-8-4</em>
				</td>
				<td class="nums"><strong>72</strong> / <em>3213</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=20053&goto=lastpost#lastpost">2009-8-19 17:40</a></em>
					<cite>by <a href="space.php?username=YOYO">YOYO</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_24172" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=24172&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_24172"><a href="viewthread.php?tid=24172&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">马克思主义美学之“马上拍到您，请别看镜头”</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=24172&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=24172&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8643">nikon</a>
										</cite>
					<em>2009-10-2</em>
				</td>
				<td class="nums"><strong>72</strong> / <em>3075</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=24172&goto=lastpost#lastpost">2009-10-9 09:55</a></em>
					<cite>by <a href="space.php?username=fred9113">fred9113</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_38702" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=38702&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_38702"><a href="viewthread.php?tid=38702&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">邮政总局发布最新禁书名单</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=38702&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=38702&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=428">方沂鸣</a>
										</cite>
					<em>2010-2-27</em>
				</td>
				<td class="nums"><strong>72</strong> / <em>2738</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=38702&goto=lastpost#lastpost">2010-3-3 00:40</a></em>
					<cite>by <a href="space.php?username=%AE%85%D7%D3%C4%AC">畢子默</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_42956" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=42956&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_42956"><a href="viewthread.php?tid=42956&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">上海为世博大范围网络解封</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=42956&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=42956&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8119">软笛</a>
										</cite>
					<em>2010-4-13</em>
				</td>
				<td class="nums"><strong>72</strong> / <em>2404</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=42956&goto=lastpost#lastpost">2010-4-19 12:48</a></em>
					<cite>by <a href="space.php?username=roleyzhang">roleyzhang</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_43767" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=43767&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_43767"><a href="viewthread.php?tid=43767&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">爱国青年在天安门广场喊“中国加油”被警方带走</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=43767&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=43767&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7">张书记</a>
										</cite>
					<em>2010-4-22</em>
				</td>
				<td class="nums"><strong>72</strong> / <em>2131</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=43767&goto=lastpost#lastpost">2010-4-23 21:49</a></em>
					<cite>by <a href="space.php?username=%CE%A8%BA%C6">唯浩</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_44388" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=44388&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_44388"><a href="viewthread.php?tid=44388&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">22国参展世博 可能与台湾断交</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=44388&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=44388&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6314">hhbcl1414</a>
										</cite>
					<em>2010-4-29</em>
				</td>
				<td class="nums"><strong>72</strong> / <em>1745</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=44388&goto=lastpost#lastpost">2010-5-3 10:43</a></em>
					<cite>by <a href="space.php?username=zdb666">zdb666</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_26853" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=26853&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_26853"><a href="viewthread.php?tid=26853&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">中央社会主义学院出现反胡标语</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=26853&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=26853&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8301">lqunl</a>
										</cite>
					<em>2009-10-31</em>
				</td>
				<td class="nums"><strong>72</strong> / <em>2786</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=26853&goto=lastpost#lastpost">2009-11-4 09:10</a></em>
					<cite>by <a href="space.php?username=%B0%B7%C7%E8%BE%DB%C8%FD%C0%C9">胺氰聚三郎</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_27561" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=27561&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_27561"><a href="viewthread.php?tid=27561&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">四川实外、成外老师大罢工</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=27561&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=27561&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8871">庄三水</a>
										</cite>
					<em>2009-11-5</em>
				</td>
				<td class="nums"><strong>72</strong> / <em>2436</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=27561&goto=lastpost#lastpost">2009-11-9 21:29</a></em>
					<cite>by <a href="space.php?username=%C7%E1%C7%E1%B5%D8%CF%EB">轻轻地想</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_29324" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=29324&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_29324"><a href="viewthread.php?tid=29324&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">网友因在学校讲“GFW是什么”被喝茶</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=29324&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=29324&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=10388">liweixin</a>
										</cite>
					<em>2009-11-29</em>
				</td>
				<td class="nums"><strong>72</strong> / <em>2326</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=29324&goto=lastpost#lastpost">2009-12-1 12:13</a></em>
					<cite>by <a href="space.php?username=nustbobo">nustbobo</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_30158" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=30158&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_30158"><a href="viewthread.php?tid=30158&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">朱军在《艺术人生》中给观众下跪</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=30158&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=30158&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8721">strongwind13</a>
										</cite>
					<em>2009-12-4</em>
				</td>
				<td class="nums"><strong>72</strong> / <em>2459</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=30158&goto=lastpost#lastpost">2009-12-8 16:42</a></em>
					<cite>by <a href="space.php?username=%C0%CF%CD%CF">老拖</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_56032" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=56032&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_56032"><a href="viewthread.php?tid=56032&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">真理部最新指令：重庆媒体一律不得报道李一相关新闻</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=56032&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=56032&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5588">我家旺财有喜了</a>
										</cite>
					<em>2010-8-12</em>
				</td>
				<td class="nums"><strong>72</strong> / <em>2465</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=56032&goto=lastpost#lastpost">2010-8-20 20:03</a></em>
					<cite>by <a href="space.php?username=%CA%DE%D0%D4%B4%F3%B7%A2%D0%A1%B0%D7%CD%C3">兽性大发小白兔</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_57915" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=57915&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_57915"><a href="viewthread.php?tid=57915&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">周恩来武汉旧居残破不堪无人问津 网友呼吁保护</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=57915&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=57915&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3202">glim</a>
										</cite>
					<em>2010-9-9</em>
				</td>
				<td class="nums"><strong>72</strong> / <em>1212</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=57915&goto=lastpost#lastpost">2010-9-11 20:35</a></em>
					<cite>by <a href="space.php?username=shsmtz">shsmtz</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_59830" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=59830&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_59830"><a href="viewthread.php?tid=59830&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">涉嫌擅闯军管区 四日本人被捉</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=59830&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=59830&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=17047">壹玖捌肆</a>
										</cite>
					<em>2010-9-23</em>
				</td>
				<td class="nums"><strong>72</strong> / <em>1911</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=59830&goto=lastpost#lastpost">2010-9-30 13:48</a></em>
					<cite>by <a href="space.php?username=%90%DB%D4%DA%CE%C1%D2%DF%C2%FB%D1%D3%95r">愛在瘟疫蔓延時</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_47129" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=47129&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_47129"><a href="viewthread.php?tid=47129&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">中方向美承诺完善收入分配格局 改革垄断行业</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=47129&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=47129&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2907">无言的山丘</a>
										</cite>
					<em>2010-5-26</em>
				</td>
				<td class="nums"><strong>72</strong> / <em>840</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=47129&goto=lastpost#lastpost">2010-5-28 02:56</a></em>
					<cite>by <a href="space.php?username=quaestor">quaestor</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_49424" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=49424&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_49424"><a href="viewthread.php?tid=49424&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">长安街沿线戒备森严</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=49424&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=49424&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=803">weke</a>
										</cite>
					<em>2010-6-13</em>
				</td>
				<td class="nums"><strong>71</strong> / <em>4676</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=49424&goto=lastpost#lastpost">2010-6-18 09:12</a></em>
					<cite>by <a href="space.php?username=clarkwzr">clarkwzr</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_40905" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=40905&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_40905"><a href="viewthread.php?tid=40905&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">男子下载色情图片在家看被罚3000元</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=40905&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=40905&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=10286">qibo</a>
										</cite>
					<em>2010-3-22</em>
				</td>
				<td class="nums"><strong>71</strong> / <em>1726</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=40905&goto=lastpost#lastpost">2010-6-22 22:19</a></em>
					<cite>by <a href="space.php?username=%B4%F3%CD%F5">大王</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_51975" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=51975&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_51975"><a href="viewthread.php?tid=51975&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">欧洲宇航局发布首张宇宙全景图</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=51975&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=51975&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=13517">gaoxsh</a>
										</cite>
					<em>2010-7-7</em>
				</td>
				<td class="nums"><strong>71</strong> / <em>1695</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=51975&goto=lastpost#lastpost">2010-7-10 23:09</a></em>
					<cite>by <a href="space.php?username=Designer">Designer</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_33226" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=33226&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_33226"><a href="viewthread.php?tid=33226&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">毛新宇在雍和宫</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=33226&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=33226&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7226">zyl1989</a>
										</cite>
					<em>2010-1-1</em>
				</td>
				<td class="nums"><strong>71</strong> / <em>3534</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=33226&goto=lastpost#lastpost">2010-1-7 11:48</a></em>
					<cite>by <a href="space.php?username=hunter">hunter</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_29552" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=29552&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_29552"><a href="viewthread.php?tid=29552&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">新闻出版署即将封杀淘宝书籍买卖客户</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=29552&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=29552&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2160">浣尘</a>
										</cite>
					<em>2009-12-1</em>
				</td>
				<td class="nums"><strong>71</strong> / <em>2061</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=29552&goto=lastpost#lastpost">2010-1-29 23:26</a></em>
					<cite>by <a href="space.php?username=%CC%C6%D5%F9">唐争</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_37193" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=37193&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_37193"><a href="viewthread.php?tid=37193&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传，美国将公布中国180万官员国外子女档案</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=37193&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=37193&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=11820">imagine</a>
										</cite>
					<em>2010-2-8</em>
				</td>
				<td class="nums"><strong>71</strong> / <em>2499</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=37193&goto=lastpost#lastpost">2010-2-22 08:42</a></em>
					<cite>by <a href="space.php?username=direction">direction</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_15633" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=15633&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_15633"><a href="viewthread.php?tid=15633&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">党的好儿子时佩璞辞世 曾以女儿身为党工作</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=15633&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=15633&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2132">花想容</a>
										</cite>
					<em>2009-7-2</em>
				</td>
				<td class="nums"><strong>71</strong> / <em>1748</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=15633&goto=lastpost#lastpost">2009-7-5 15:47</a></em>
					<cite>by <a href="space.php?username=%D2%D6%D1%EF">抑扬</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_26395" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=26395&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_26395"><a href="viewthread.php?tid=26395&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">陕西警卫局一处长私车撞死幼童 殴打死者父亲</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=26395&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=26395&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6205">姚白白</a>
										</cite>
					<em>2009-10-27</em>
				</td>
				<td class="nums"><strong>71</strong> / <em>1746</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=26395&goto=lastpost#lastpost">2009-10-29 17:45</a></em>
					<cite>by <a href="space.php?username=%CE%B4%B7%D6%BC%B6">未分级</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_17097" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=17097&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_17097"><a href="viewthread.php?tid=17097&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">让国旗带着我一起火化</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=17097&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=17097&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1831">浮灰</a>
										</cite>
					<em>2009-7-18</em>
				</td>
				<td class="nums"><strong>71</strong> / <em>1054</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=17097&goto=lastpost#lastpost">2009-7-22 13:06</a></em>
					<cite>by <a href="space.php?username=cheo2ng">cheo2ng</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_18104" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=18104&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_18104"><a href="viewthread.php?tid=18104&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">假如TG对台动武</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=18104&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=18104&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=263">WJ87</a>
										</cite>
					<em>2009-7-28</em>
				</td>
				<td class="nums"><strong>71</strong> / <em>982</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=18104&goto=lastpost#lastpost">2009-7-29 23:57</a></em>
					<cite>by <a href="space.php?username=Jyamolmiry">Jyamolmiry</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_19776" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=19776&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_19776"><a href="viewthread.php?tid=19776&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">河南安阳林钢工人暴动 武警镇压</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=19776&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=19776&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1772">evan</a>
										</cite>
					<em>2009-8-13</em>
				</td>
				<td class="nums"><strong>71</strong> / <em>3226</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=19776&goto=lastpost#lastpost">2009-8-17 09:42</a></em>
					<cite>by <a href="space.php?username=%DF%F7%DF%F7%CE%D8">喵喵呜</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_18182" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=18182&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_18182"><a href="viewthread.php?tid=18182&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">快讯：沪指暴泻跌穿3200点 百只个股跌停</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=18182&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=18182&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7">张书记</a>
										</cite>
					<em>2009-7-29</em>
				</td>
				<td class="nums"><strong>71</strong> / <em>2225</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=18182&goto=lastpost#lastpost">2009-8-17 22:04</a></em>
					<cite>by <a href="space.php?username=swing">swing</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_26767" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=26767&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_26767"><a href="viewthread.php?tid=26767&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传，歌手陈琳跳楼自杀 或与重庆打黑有关</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=26767&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=26767&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1121">小荷1120</a>
										</cite>
					<em>2009-10-31</em>
				</td>
				<td class="nums"><strong>71</strong> / <em>2766</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=26767&goto=lastpost#lastpost">2009-11-3 17:30</a></em>
					<cite>by <a href="space.php?username=%D2%BB%D0%A1%B4%E9%D2%F5%C3%AB">一小撮阴毛</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_29394" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=29394&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_29394"><a href="viewthread.php?tid=29394&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">瑞士公投支持“清真寺尖塔禁令”</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=29394&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=29394&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=9517">老西</a>
										</cite>
					<em>2009-11-30</em>
				</td>
				<td class="nums"><strong>71</strong> / <em>1195</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=29394&goto=lastpost#lastpost">2009-12-4 14:34</a></em>
					<cite>by <a href="space.php?username=%C1%D9%D6%D5%C9%CF%B5%DB">临终上帝</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_34879" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=34879&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_34879"><a href="viewthread.php?tid=34879&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传，GOOGLE公司将推行全球卫星无线上网</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=34879&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=34879&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=9287">一人一</a>
										</cite>
					<em>2010-1-16</em>
				</td>
				<td class="nums"><strong>71</strong> / <em>2542</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=34879&goto=lastpost#lastpost">2010-4-2 18:21</a></em>
					<cite>by <a href="space.php?username=hhbcl1414">hhbcl1414</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_41845" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=41845&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_41845"><a href="viewthread.php?tid=41845&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">湖北志愿者送水到云南灾区遭勒索6000元</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=41845&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=41845&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=9991">duck_1984</a>
										</cite>
					<em>2010-3-31</em>
				</td>
				<td class="nums"><strong>71</strong> / <em>1124</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=41845&goto=lastpost#lastpost">2010-4-3 00:40</a></em>
					<cite>by <a href="space.php?username=%CE%C4%C9%BD%B0%CB%CA%C2">文山八事</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_41974" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=41974&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_41974"><a href="viewthread.php?tid=41974&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">浙江女干部潜规则男大学生村官</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=41974&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=41974&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=10890">xiaohe1120</a>
										</cite>
					<em>2010-4-1</em>
				</td>
				<td class="nums"><strong>71</strong> / <em>1996</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=41974&goto=lastpost#lastpost">2010-4-4 20:01</a></em>
					<cite>by <a href="space.php?username=voyage620">voyage620</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_44039" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=44039&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_44039"><a href="viewthread.php?tid=44039&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">大连庄河千人下跪政府门前 求见市长未果</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=44039&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=44039&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7">张书记</a>
										</cite>
					<em>2010-4-16</em>
				</td>
				<td class="nums"><strong>71</strong> / <em>1375</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=44039&goto=lastpost#lastpost">2010-4-25 22:44</a></em>
					<cite>by <a href="space.php?username=Auo">Auo</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_45817" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=45817&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_45817"><a href="viewthread.php?tid=45817&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">海淀区有关部门对袁腾飞的处理意见和结果流出</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=45817&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=45817&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1408">becom</a>
										</cite>
					<em>2010-5-12</em>
				</td>
				<td class="nums"><strong>71</strong> / <em>2873</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=45817&goto=lastpost#lastpost">2010-5-15 20:47</a></em>
					<cite>by <a href="space.php?username=%BA%AE%C3%B7">寒梅</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_46626" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=46626&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_46626"><a href="viewthread.php?tid=46626&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">北京长安街豪车狂飙撞菲亚特轿车致一死两伤</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=46626&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=46626&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=13079">qsIHSIN</a>
										</cite>
					<em>2010-5-14</em>
				</td>
				<td class="nums"><strong>71</strong> / <em>2493</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=46626&goto=lastpost#lastpost">2010-5-24 12:40</a></em>
					<cite>by <a href="space.php?username=roleyzhang">roleyzhang</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_40231" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=40231&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_40231"><a href="viewthread.php?tid=40231&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">新闻界学界就李鸿忠事件报全国人大书</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=40231&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=40231&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2472">Noel</a>
										</cite>
					<em>2010-3-13</em>
				</td>
				<td class="nums"><strong>70</strong> / <em>2092</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=40231&goto=lastpost#lastpost">2010-3-14 17:32</a></em>
					<cite>by <a href="space.php?username=shanyun">shanyun</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_41335" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=41335&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_41335"><a href="viewthread.php?tid=41335&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">人人网删除大量注册用户 或收到当局指令</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=41335&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=41335&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6899">网络低俗风</a>
										</cite>
					<em>2010-3-25</em>
				</td>
				<td class="nums"><strong>70</strong> / <em>2612</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=41335&goto=lastpost#lastpost">2010-3-29 06:02</a></em>
					<cite>by <a href="space.php?username=QuasarX">QuasarX</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_44844" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=44844&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_44844"><a href="viewthread.php?tid=44844&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">上海世博开幕 外国游客称场面庞大前所未有</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=44844&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=44844&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=852">未来他老爸</a>
										</cite>
					<em>2010-5-1</em>
				</td>
				<td class="nums"><strong>70</strong> / <em>2386</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=44844&goto=lastpost#lastpost">2010-5-6 10:53</a></em>
					<cite>by <a href="space.php?username=%D5%C5%CA%E9%BC%C7">张书记</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_45137" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=45137&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_45137"><a href="viewthread.php?tid=45137&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">上海百姓抵制世博形成趋势 江南造船厂送票没人去</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=45137&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=45137&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=11794">十岗</a>
										</cite>
					<em>2010-5-7</em>
				</td>
				<td class="nums"><strong>70</strong> / <em>2309</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=45137&goto=lastpost#lastpost">2010-5-10 13:25</a></em>
					<cite>by <a href="space.php?username=%B5%A5%CA%D6%B7%F6%C7%BD">单手扶墙</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_22146" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=22146&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_22146"><a href="viewthread.php?tid=22146&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">戴晴在法兰克福书展讨论会发言 中方代表一度离场</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=22146&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=22146&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7002">luugoo</a>
										</cite>
					<em>2009-9-13</em>
				</td>
				<td class="nums"><strong>70</strong> / <em>1946</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=22146&goto=lastpost#lastpost">2009-9-26 10:12</a></em>
					<cite>by <a href="space.php?username=luugoo">luugoo</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_48235" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=48235&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_48235"><a href="viewthread.php?tid=48235&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">可能吧封杀升级 1984BBS遭到攻击</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=48235&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=48235&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=11493">gzlxd</a>
										</cite>
					<em>2010-5-7</em>
				</td>
				<td class="nums"><strong>70</strong> / <em>3552</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=48235&goto=lastpost#lastpost">2010-6-9 11:55</a></em>
					<cite>by <a href="space.php?username=maxvictory">maxvictory</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_13183" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=13183&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_13183"><a href="viewthread.php?tid=13183&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">外交部敬告外媒：你有孩子吗？中国的互联网是开放的</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=13183&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=13183&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3985">色空鸟</a>
										</cite>
					<em>2009-6-9</em>
				</td>
				<td class="nums"><strong>70</strong> / <em>1436</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=13183&goto=lastpost#lastpost">2009-6-11 08:56</a></em>
					<cite>by <a href="space.php?username=%CE%ED%B7%E7">雾风</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_15661" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=15661&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_15661"><a href="viewthread.php?tid=15661&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">毛粉统计数据：中国西奴榜 胡主席首席辅佐谋士入选</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=15661&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=15661&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7">张书记</a>
										</cite>
					<em>2008-11-28</em>
				</td>
				<td class="nums"><strong>70</strong> / <em>1945</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=15661&goto=lastpost#lastpost">2009-7-6 10:25</a></em>
					<cite>by <a href="space.php?username=%C7%E0%B4%BA%B5%C4%BD%C5%B2%BD">青春的脚步</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_15925" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=15925&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_15925"><a href="viewthread.php?tid=15925&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">7·6社论：必须旗帜鲜明地反对新疆动乱</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=15925&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=15925&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=852">未来他老爸</a>
										</cite>
					<em>2009-7-6</em>
				</td>
				<td class="nums"><strong>70</strong> / <em>1944</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=15925&goto=lastpost#lastpost">2009-7-9 18:32</a></em>
					<cite>by <a href="space.php?username=ai%CC%EC%CF%C2%D6%AE%D3%F1">ai天下之玉</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_15523" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=15523&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_15523"><a href="viewthread.php?tid=15523&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">胡代表党中央向全国共产党员致以节日问候</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=15523&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=15523&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3580">白牛</a>
										</cite>
					<em>2009-7-1</em>
				</td>
				<td class="nums"><strong>70</strong> / <em>1113</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=15523&goto=lastpost#lastpost">2009-7-9 21:59</a></em>
					<cite>by <a href="space.php?username=%D2%BB%CF%F2%B5%CD%B5%F7">一向低调</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_32849" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=32849&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_32849"><a href="viewthread.php?tid=32849&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">香港学生黄平欣等30人携《宪章签署书》至罗湖关投案</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=32849&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=32849&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2564">老卡</a>
										</cite>
					<em>2009-12-27</em>
				</td>
				<td class="nums"><strong>70</strong> / <em>2451</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=32849&goto=lastpost#lastpost">2009-12-30 17:20</a></em>
					<cite>by <a href="space.php?username=%BF%B5%B2%A8">康波</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_33602" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=33602&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_33602"><a href="viewthread.php?tid=33602&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">太妃低胸亮相宣传新碟</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=33602&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=33602&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4977">adruich</a>
										</cite>
					<em>2010-1-5</em>
				</td>
				<td class="nums"><strong>70</strong> / <em>3043</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=33602&goto=lastpost#lastpost">2010-1-15 15:00</a></em>
					<cite>by <a href="space.php?username=%D2%C1%CC%D9%D5%5C">伊藤誠</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_34192" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=34192&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_34192"><a href="viewthread.php?tid=34192&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">《图书公平交易规则》出台新书网售不低于八五折</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=34192&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=34192&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4408">迷路的田鼠</a>
										</cite>
					<em>2010-1-10</em>
				</td>
				<td class="nums"><strong>70</strong> / <em>1160</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=34192&goto=lastpost#lastpost">2010-1-17 23:57</a></em>
					<cite>by <a href="space.php?username=daxigua888">daxigua888</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_6900" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=6900&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_6900"><a href="viewthread.php?tid=6900&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">Dalai Lama在“和平抗暴五十周年纪念日”上的讲话</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=6900&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=6900&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=465">余含泪</a>
										</cite>
					<em>2009-3-12</em>
				</td>
				<td class="nums"><strong>70</strong> / <em>1305</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=6900&goto=lastpost#lastpost">2009-3-27 00:08</a></em>
					<cite>by <a href="space.php?username=ghostfj">ghostfj</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_31550" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=31550&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_31550"><a href="viewthread.php?tid=31550&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">正确预测汶川地震专家被迫提前退休</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=31550&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=31550&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1786">拆迁办</a>
										</cite>
					<em>2009-12-18</em>
				</td>
				<td class="nums"><strong>70</strong> / <em>1207</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=31550&goto=lastpost#lastpost">2009-12-20 22:06</a></em>
					<cite>by <a href="space.php?username=%C4%BE%CD%B7">木头</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_32401" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=32401&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_32401"><a href="viewthread.php?tid=32401&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">真理部最新指令：各搜索引擎提供商将“11年”设为一级屏蔽词</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=32401&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=32401&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=21">大仙儿</a>
										</cite>
					<em>2009-12-25</em>
				</td>
				<td class="nums"><strong>70</strong> / <em>2598</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=32401&goto=lastpost#lastpost">2009-12-26 12:39</a></em>
					<cite>by <a href="space.php?username=nailking">nailking</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_17910" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=17910&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_17910"><a href="viewthread.php?tid=17910&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">美国新驻华大使正在培育下一代和平演变力量</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=17910&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=17910&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3227">快乐流浪汉</a>
										</cite>
					<em>2009-7-26</em>
				</td>
				<td class="nums"><strong>70</strong> / <em>1004</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=17910&goto=lastpost#lastpost">2009-7-28 12:07</a></em>
					<cite>by <a href="space.php?username=shell.x">shell.x</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_17815" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=17815&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_17815"><a href="viewthread.php?tid=17815&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">贾樟柯等的政治意淫纲要</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=17815&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=17815&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4587">萨格拉斯</a>
										</cite>
					<em>2009-7-25</em>
				</td>
				<td class="nums"><strong>70</strong> / <em>1260</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=17815&goto=lastpost#lastpost">2009-7-28 13:18</a></em>
					<cite>by <a href="space.php?username=%C8%F8%B8%F1%C0%AD%CB%B9">萨格拉斯</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_18152" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=18152&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_18152"><a href="viewthread.php?tid=18152&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">河南发生核泄漏 网友因在网上转载相关消息被拘捕</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=18152&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=18152&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2495">深入裙中</a>
										</cite>
					<em>2009-7-17</em>
				</td>
				<td class="nums"><strong>70</strong> / <em>2519</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=18152&goto=lastpost#lastpost">2009-7-29 13:53</a></em>
					<cite>by <a href="space.php?username=%D7%F3%B0%B6%A1%FB%D3%D2%B0%B6">左岸←右岸</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_12510" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=12510&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_12510"><a href="viewthread.php?tid=12510&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">真理部思想控制局出品洗脑新药：中国“六个不能搞”</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=12510&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=12510&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3202">glim</a>
										</cite>
					<em>2009-5-31</em>
				</td>
				<td class="nums"><strong>70</strong> / <em>2072</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=12510&goto=lastpost#lastpost">2009-8-17 02:04</a></em>
					<cite>by <a href="space.php?username=%B7%A8%B2%BB%B0%A2Quei">法不阿Quei</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_21127" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=21127&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_21127"><a href="viewthread.php?tid=21127&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传，今晚12点将提油价</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=21127&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=21127&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7">张书记</a>
										</cite>
					<em>2009-9-1</em>
				</td>
				<td class="nums"><strong>70</strong> / <em>1225</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=21127&goto=lastpost#lastpost">2009-9-2 13:39</a></em>
					<cite>by <a href="space.php?username=%C0%CF%D4%D3%D2%DF">老杂疫</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_56876" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=56876&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_56876"><a href="viewthread.php?tid=56876&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">王小丫拍卖习作绘画 4800万被买走</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=56876&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=56876&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2495">深入裙中</a>
										</cite>
					<em>2010-8-30</em>
				</td>
				<td class="nums"><strong>70</strong> / <em>2083</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=56876&goto=lastpost#lastpost">2010-9-3 06:38</a></em>
					<cite>by <a href="space.php?username=%CD%B3%D2%BB%BF%DA%BE%B6">统一口径</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_57910" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=57910&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_57910"><a href="viewthread.php?tid=57910&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">江苏版语文教材删除《阿Q正传》《纪念刘和珍君》等文</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=57910&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=57910&amp;extra=page%3D12%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4570">我卖糕的</a>
										</cite>
					<em>2010-9-7</em>
				</td>
				<td class="nums"><strong>70</strong> / <em>1368</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=57910&goto=lastpost#lastpost">2010-9-27 21:14</a></em>
					<cite>by <a href="space.php?username=%D0%C4%C8%E7%D6%B9%CB%AE">心如止水</a></cite>
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
	<div class="pages"><em>&nbsp;22278&nbsp;</em><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=1" class="first">1 ...</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=11" class="prev">&lsaquo;&lsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=10">10</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=11">11</a><strong>12</strong><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=13">13</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=14">14</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=15">15</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=16">16</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=17">17</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=18">18</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=19">19</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=13" class="next">&rsaquo;&rsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=349" class="last">... 349</a><kbd><input type="text" name="custompage" size="3" onkeydown="if(event.keyCode==13) {window.location='forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page='+this.value; return false;}" /></kbd></div>	</div>

  
	<div class="box">
			<span class="headactions"><a href="forumdisplay.php?fid=2&amp;page=12&amp;showoldetails=yes#online" class="nobdr"><img src="images/default/collapsed_yes.gif" alt="" /></a></span>
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
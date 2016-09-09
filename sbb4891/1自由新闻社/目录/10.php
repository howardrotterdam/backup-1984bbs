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
			window.location = 'forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&page=9';
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
<div class="pages"><em>&nbsp;22278&nbsp;</em><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=1" class="first">1 ...</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=9" class="prev">&lsaquo;&lsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=8">8</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=9">9</a><strong>10</strong><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=11">11</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=12">12</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=13">13</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=14">14</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=15">15</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=16">16</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=17">17</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=11" class="next">&rsaquo;&rsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=349" class="last">... 349</a><kbd><input type="text" name="custompage" size="3" onkeydown="if(event.keyCode==13) {window.location='forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page='+this.value; return false;}" /></kbd></div></div>

<div style="float:left;border:1px solid #CCC; border-bottom:none;;width:218px; background: url(/imgs/1984radio.jpg) 200px 2px no-repeat;padding:5px 0 5px 12px;margin:0px 0 0 13px">

<p><b><a href="/radio/index.php" target="_blank">1984FM</a></b><br /><b><a href="https://voxli.com/1984bbs" target="_blank">1984Chat</a></b>&nbsp;</p> 
</div>

<div style="clear:both;height:0px;width:100%;font-size:1px;">&nbsp;</div>

	<ul class="popupmenu_popup newspecialmenu" id="newspecial_menu" style="display: none">
		<li><a href="post.php?action=newthread&amp;fid=2&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">发新话题</a></li>		<li class="poll"><a href="post.php?action=newthread&amp;fid=2&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;special=1">发布投票</a></li>													</ul>
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

					<tbody id="normalthread_40292" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=40292&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_40292"><a href="viewthread.php?tid=40292&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">影帝答中外记者问时以楚辞明志</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=40292&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=40292&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=852">未来他老爸</a>
										</cite>
					<em>2010-3-14</em>
				</td>
				<td class="nums"><strong>80</strong> / <em>2419</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=40292&goto=lastpost#lastpost">2010-3-21 14:29</a></em>
					<cite>by <a href="space.php?username=talk2sam">talk2sam</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_42583" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=42583&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_42583"><a href="viewthread.php?tid=42583&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">吉尔吉斯爆发反独裁抗议  警察枪杀多名示威者</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=42583&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=42583&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4570">我卖糕的</a>
										</cite>
					<em>2010-4-7</em>
				</td>
				<td class="nums"><strong>80</strong> / <em>1670</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=42583&goto=lastpost#lastpost">2010-4-9 15:19</a></em>
					<cite>by <a href="space.php?username=%D0%B4%CA%B5">写实</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_43503" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=43503&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_43503"><a href="viewthread.php?tid=43503&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">教育部副部长鲁昕在玉树灾区发飙</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=43503&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=43503&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8709">szdos</a>
										</cite>
					<em>2010-4-19</em>
				</td>
				<td class="nums"><strong>79</strong> / <em>2585</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=43503&goto=lastpost#lastpost">2010-4-22 08:40</a></em>
					<cite>by <a href="space.php?username=Perfect.W">Perfect.W</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_43673" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=43673&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_43673"><a href="viewthread.php?tid=43673&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">国务院：4月21日为全国哀悼日 停止所有网上娱乐</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=43673&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=43673&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8752">bioada11</a>
										</cite>
					<em>2010-4-20</em>
				</td>
				<td class="nums"><strong>79</strong> / <em>2354</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=43673&goto=lastpost#lastpost">2010-4-22 09:15</a></em>
					<cite>by <a href="space.php?username=%B7%C5%D6%F0">放逐</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_24283" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=24283&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_24283"><a href="viewthread.php?tid=24283&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">阅兵观礼台上的垃圾</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=24283&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=24283&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=9146">fernando</a>
										</cite>
					<em>2009-10-4</em>
				</td>
				<td class="nums"><strong>79</strong> / <em>3144</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=24283&goto=lastpost#lastpost">2009-10-13 14:49</a></em>
					<cite>by <a href="space.php?username=%5E-%5E">^-^</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_24909" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=24909&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_24909"><a href="viewthread.php?tid=24909&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">洪晃为爱国撒泼打滚 北京泼妇原形毕露</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=24909&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=24909&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2132">花想容</a>
										</cite>
					<em>2009-10-13</em>
				</td>
				<td class="nums"><strong>79</strong> / <em>2389</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=24909&goto=lastpost#lastpost">2009-10-16 14:21</a></em>
					<cite>by <a href="space.php?username=%BD%AD%B1%DF%D1%F3%D7%D3">江边洋子</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_13537" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=13537&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_13537"><a href="viewthread.php?tid=13537&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">苍天有眼刽子手同传病危  举国同庆屁民欲燃竹庆贺</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=13537&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=13537&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5468">patheic</a>
										</cite>
					<em>2009-6-13</em>
				</td>
				<td class="nums"><strong>79</strong> / <em>2621</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=13537&goto=lastpost#lastpost">2009-6-23 21:30</a></em>
					<cite>by <a href="space.php?username=mafeng">mafeng</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_16477" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=16477&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_16477"><a href="viewthread.php?tid=16477&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">土耳其总理：中国在新疆灭族</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=16477&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=16477&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=134">丁丁</a>
										</cite>
					<em>2009-7-11</em>
				</td>
				<td class="nums"><strong>79</strong> / <em>1837</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=16477&goto=lastpost#lastpost">2009-7-15 15:50</a></em>
					<cite>by <a href="space.php?username=Kakulupia">Kakulupia</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_6251" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=6251&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_6251"><a href="viewthread.php?tid=6251&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">东方牡丹手挽GUCCI包 素颜上朝</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=6251&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=6251&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3202">glim</a>
										</cite>
					<em>2009-3-4</em>
				</td>
				<td class="nums"><strong>79</strong> / <em>2919</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=6251&goto=lastpost#lastpost">2009-3-19 22:41</a></em>
					<cite>by <a href="space.php?username=%CD%E1%CD%E1">歪歪</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_27815" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=27815&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_27815"><a href="viewthread.php?tid=27815&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">央视主持人邱启明：中国老百姓工资足够高了</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=27815&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=27815&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3363">千山五道</a>
										</cite>
					<em>2009-11-12</em>
				</td>
				<td class="nums"><strong>79</strong> / <em>1612</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=27815&goto=lastpost#lastpost">2009-11-14 21:42</a></em>
					<cite>by <a href="space.php?username=%CE%F7%C3%C5%B4%B5%C5%A3">西门吹牛</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_48160" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=48160&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_48160"><a href="viewthread.php?tid=48160&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">台湾美少女穿国旗装看世博 险被公安逮捕</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=48160&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=48160&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3227">快乐流浪汉</a>
										</cite>
					<em>2010-6-3</em>
				</td>
				<td class="nums"><strong>79</strong> / <em>2940</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=48160&goto=lastpost#lastpost">2010-6-12 01:03</a></em>
					<cite>by <a href="space.php?username=josefish">josefish</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_51026" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=51026&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_51026"><a href="viewthread.php?tid=51026&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">北京状元申请美国十一所名校被拒</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=51026&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=51026&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8705">littail</a>
										</cite>
					<em>2010-6-28</em>
				</td>
				<td class="nums"><strong>79</strong> / <em>1865</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=51026&goto=lastpost#lastpost">2010-6-29 12:06</a></em>
					<cite>by <a href="space.php?username=%B4%F3%C0%CF%CB%CE">大老宋</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_19481" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=19481&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_19481"><a href="viewthread.php?tid=19481&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">前有王兆山，今有李发模</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=19481&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=19481&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2362">呼噜必烈</a>
										</cite>
					<em>2009-7-14</em>
				</td>
				<td class="nums"><strong>79</strong> / <em>1986</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=19481&goto=lastpost#lastpost">2009-8-16 16:25</a></em>
					<cite>by <a href="space.php?username=%C9%A3%C7%F0">桑丘</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_32527" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=32527&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_32527"><a href="viewthread.php?tid=32527&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">韶山市举行“万人同吃‘福寿面’”纪念毛诞辰</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=32527&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=32527&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7">张书记</a>
										</cite>
					<em>2009-12-26</em>
				</td>
				<td class="nums"><strong>79</strong> / <em>1604</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=32527&goto=lastpost#lastpost">2010-1-1 22:34</a></em>
					<cite>by <a href="space.php?username=sandorsong">sandorsong</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_36941" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=36941&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_36941"><a href="viewthread.php?tid=36941&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">计生委：计划生育无强迫性，不违犯人权</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=36941&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=36941&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8033">张公子</a>
										</cite>
					<em>2010-2-5</em>
				</td>
				<td class="nums"><strong>79</strong> / <em>1481</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=36941&goto=lastpost#lastpost">2010-2-24 16:50</a></em>
					<cite>by <a href="space.php?username=%CE%DE%BF%C9%C4%CE%BA%CE">无可奈何</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_35651" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=35651&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_35651"><a href="viewthread.php?tid=35651&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">衡阳市网络评论员补贴制度：每篇评论奖励1毛</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=35651&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=35651&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2564">老卡</a>
										</cite>
					<em>2010-1-21</em>
				</td>
				<td class="nums"><strong>78</strong> / <em>1867</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=35651&goto=lastpost#lastpost">2010-1-24 15:13</a></em>
					<cite>by <a href="space.php?username=%CE%F7%C3%C5%B4%B5%C5%A3">西门吹牛</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_21280" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=21280&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_21280"><a href="viewthread.php?tid=21280&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">腾讯网编辑因发布June Fourth图片 被真理部下令开除</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=21280&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=21280&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1258">路边社记者</a>
										</cite>
					<em>2009-9-3</em>
				</td>
				<td class="nums"><strong>78</strong> / <em>2424</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=21280&goto=lastpost#lastpost">2009-9-8 21:59</a></em>
					<cite>by <a href="space.php?username=halfbogey">halfbogey</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_22819" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=22819&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_22819"><a href="viewthread.php?tid=22819&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">北京连锁超市刀具下架 传与国庆安全有关</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=22819&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=22819&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2103">omegalee</a>
										</cite>
					<em>2009-9-19</em>
				</td>
				<td class="nums"><strong>78</strong> / <em>1813</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=22819&goto=lastpost#lastpost">2009-9-22 07:25</a></em>
					<cite>by <a href="space.php?username=kaikai177">kaikai177</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_23741" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=23741&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_23741"><a href="viewthread.php?tid=23741&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">一周新闻图片 09.9.28-10.4</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=23741&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=23741&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2232">老杂疫</a>
										</cite>
					<em>2009-9-28</em>
				</td>
				<td class="nums"><strong>78</strong> / <em>1951</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=23741&goto=lastpost#lastpost">2009-10-3 21:41</a></em>
					<cite>by <a href="space.php?username=elfix">elfix</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_25544" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=25544&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_25544"><a href="viewthread.php?tid=25544&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">上海人民广场国庆孝服喊冤女</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=25544&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=25544&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=263">WJ87</a>
										</cite>
					<em>2009-10-18</em>
				</td>
				<td class="nums"><strong>78</strong> / <em>1895</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=25544&goto=lastpost#lastpost">2009-10-21 11:27</a></em>
					<cite>by <a href="space.php?username=evan">evan</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_25096" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=25096&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_25096"><a href="viewthread.php?tid=25096&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">铁凝主席反问：啥是书报检查制度？</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=25096&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=25096&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3900">mcdull</a>
										</cite>
					<em>2009-10-14</em>
				</td>
				<td class="nums"><strong>78</strong> / <em>2172</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=25096&goto=lastpost#lastpost">2009-10-24 21:11</a></em>
					<cite>by <a href="space.php?username=%B4%AD%CB%CC">喘颂</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_40065" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=40065&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_40065"><a href="viewthread.php?tid=40065&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">真理部最新指令：谷歌即将退出中国一事不报道</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=40065&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=40065&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1258">路边社记者</a>
										</cite>
					<em>2010-3-12</em>
				</td>
				<td class="nums"><strong>78</strong> / <em>2585</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=40065&goto=lastpost#lastpost">2010-3-16 13:54</a></em>
					<cite>by <a href="space.php?username=mafanpk">mafanpk</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_41849" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=41849&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_41849"><a href="viewthread.php?tid=41849&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">GFW工程导致中国用户无法使用Google服务</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=41849&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=41849&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7946">马德毕</a>
										</cite>
					<em>2010-3-31</em>
				</td>
				<td class="nums"><strong>78</strong> / <em>2813</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=41849&goto=lastpost#lastpost">2010-4-1 17:20</a></em>
					<cite>by <a href="space.php?username=%B2%CB%B5%F9">菜爹</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_45896" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=45896&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_45896"><a href="viewthread.php?tid=45896&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传北大勺园发生命案</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=45896&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=45896&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7337">karlmarx</a>
										</cite>
					<em>2010-5-15</em>
				</td>
				<td class="nums"><strong>78</strong> / <em>1768</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=45896&goto=lastpost#lastpost">2010-5-16 22:05</a></em>
					<cite>by <a href="space.php?username=hannfonn">hannfonn</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_54751" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=54751&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_54751"><a href="viewthread.php?tid=54751&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">山东淄博市博山区试验幼儿园4名儿童被杀害</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=54751&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=54751&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=12310">炽鸢侯</a>
										</cite>
					<em>2010-8-5</em>
				</td>
				<td class="nums"><strong>78</strong> / <em>2414</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=54751&goto=lastpost#lastpost">2010-9-3 21:01</a></em>
					<cite>by <a href="space.php?username=frick">frick</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_49524" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=49524&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_49524"><a href="viewthread.php?tid=49524&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">手牵胡锦涛 少年不舍洗手</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=49524&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=49524&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=13626">daxia</a>
										</cite>
					<em>2010-6-3</em>
				</td>
				<td class="nums"><strong>78</strong> / <em>1650</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=49524&goto=lastpost#lastpost">2010-6-15 00:53</a></em>
					<cite>by <a href="space.php?username=blue_sky">blue_sky</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_49931" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=49931&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_49931"><a href="viewthread.php?tid=49931&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">香港举行政改电视辩论 建制派人士突纷纷改变立场</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=49931&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=49931&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2963">huangqinfeifei</a>
										</cite>
					<em>2010-6-16</em>
				</td>
				<td class="nums"><strong>78</strong> / <em>1976</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=49931&goto=lastpost#lastpost">2010-6-20 13:54</a></em>
					<cite>by <a href="space.php?username=ipodyoung">ipodyoung</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_53405" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=53405&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_53405"><a href="viewthread.php?tid=53405&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">中国近百知名博客被封</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=53405&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=53405&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7946">马德毕</a>
										</cite>
					<em>2010-7-17</em>
				</td>
				<td class="nums"><strong>78</strong> / <em>2988</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=53405&goto=lastpost#lastpost">2010-7-21 11:59</a></em>
					<cite>by <a href="space.php?username=%B2%D8%E9%E1%D0%D6">藏獒兄</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_54006" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=54006&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_54006"><a href="viewthread.php?tid=54006&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传一女在上海世博会场馆自杀</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=54006&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=54006&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8823">jason_jiang</a>
										</cite>
					<em>2010-7-26</em>
				</td>
				<td class="nums"><strong>78</strong> / <em>3427</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=54006&goto=lastpost#lastpost">2010-7-28 11:01</a></em>
					<cite>by <a href="space.php?username=%D3%E9%C0%D6%D6%C1%CB%C0">娱乐至死</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_28269" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=28269&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_28269"><a href="viewthread.php?tid=28269&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">毛的“替代品”在腊肉前摆出了中国人集体记忆中的POSE</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=28269&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=28269&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=787">sogoood</a>
										</cite>
					<em>2009-11-6</em>
				</td>
				<td class="nums"><strong>78</strong> / <em>1947</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=28269&goto=lastpost#lastpost">2009-11-17 18:14</a></em>
					<cite>by <a href="space.php?username=%B9%FD%BF%CD">过客</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_29454" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=29454&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_29454"><a href="viewthread.php?tid=29454&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">中国流浪猫难逃“盘中餐”命运</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=29454&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=29454&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5464">上海帅哥</a>
										</cite>
					<em>2009-11-30</em>
				</td>
				<td class="nums"><strong>78</strong> / <em>855</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=29454&goto=lastpost#lastpost">2009-12-5 21:01</a></em>
					<cite>by <a href="space.php?username=chro">chro</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_1606" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=1606&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_1606"><a href="viewthread.php?tid=1606&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">群尸玩过界！湖南话剧团“超级太祖”选秀赛</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=1606&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=1606&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7">张书记</a>
										</cite>
					<em>2008-12-10</em>
				</td>
				<td class="nums"><strong>77</strong> / <em>1582</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=1606&goto=lastpost#lastpost">2009-11-10 07:28</a></em>
					<cite>by <a href="space.php?username=xuebowee">xuebowee</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_27818" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=27818&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_27818"><a href="viewthread.php?tid=27818&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">中国学生勤工俭学新方式：告密</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=27818&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=27818&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4048">不过很但是</a>
										</cite>
					<em>2009-11-12</em>
				</td>
				<td class="nums"><strong>77</strong> / <em>2128</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=27818&goto=lastpost#lastpost">2009-11-20 15:47</a></em>
					<cite>by <a href="space.php?username=%B1%BB%C4%D4%B4%FC%BC%D0%C1%CB%B5%C4%C3%C5">被脑袋夹了的门</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_42522" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=42522&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_42522"><a href="viewthread.php?tid=42522&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传，中纪委委员的别墅藏7000万欧元现金</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=42522&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=42522&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2232">老杂疫</a>
										</cite>
					<em>2009-10-15</em>
				</td>
				<td class="nums"><strong>77</strong> / <em>3281</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=42522&goto=lastpost#lastpost">2010-4-13 14:29</a></em>
					<cite>by <a href="space.php?username=%D5%FD%D4%DA%B5%F4%C2%E4%B5%C4%D6%ED">正在掉落的猪</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_45389" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=45389&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_45389"><a href="viewthread.php?tid=45389&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">洛阳毛泽东粉丝街头支持一党专制被抓捕审讯</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=45389&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=45389&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7">张书记</a>
										</cite>
					<em>2010-5-10</em>
				</td>
				<td class="nums"><strong>77</strong> / <em>2402</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=45389&goto=lastpost#lastpost">2010-5-15 17:20</a></em>
					<cite>by <a href="space.php?username=%CE%D2%C2%F4%B8%E2%B5%C4">我卖糕的</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_35795" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=35795&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_35795"><a href="viewthread.php?tid=35795&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">周润发：看《孔子》不落泪的不是人</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=35795&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=35795&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=10947">割下你好</a>
										</cite>
					<em>2010-1-24</em>
				</td>
				<td class="nums"><strong>77</strong> / <em>1602</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=35795&goto=lastpost#lastpost">2010-1-28 10:12</a></em>
					<cite>by <a href="space.php?username=enjoycunt">enjoycunt</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_33760" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=33760&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_33760"><a href="viewthread.php?tid=33760&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">湖南武冈市常务副市长家中身亡</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=33760&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=33760&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4570">我卖糕的</a>
										</cite>
					<em>2009-11-27</em>
				</td>
				<td class="nums"><strong>77</strong> / <em>1886</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=33760&goto=lastpost#lastpost">2010-2-9 08:45</a></em>
					<cite>by <a href="space.php?username=%CC%D2%BB%A8%B5%BA%D6%F7">桃花岛主</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_8577" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=8577&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_8577"><a href="viewthread.php?tid=8577&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">天朝种姓制度出炉     看看你是第几等</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=8577&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=8577&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=465">余含泪</a>
										</cite>
					<em>2009-1-11</em>
				</td>
				<td class="nums"><strong>77</strong> / <em>1445</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=8577&goto=lastpost#lastpost">2007-4-9 16:35</a></em>
					<cite>by <a href="space.php?username=%BE%C8%CA%EA%B5%C4%C2%C3%B3%CC">救赎的旅程</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_21746" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=21746&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_21746"><a href="viewthread.php?tid=21746&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">《老妈蹄花》中派出所邱勇所长给刘艳萍女士的“维稳”电话及艾未未的质询</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=21746&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=21746&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8478">小船长</a>
										</cite>
					<em>2009-9-9</em>
				</td>
				<td class="nums"><strong>77</strong> / <em>2691</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=21746&goto=lastpost#lastpost">2009-9-13 12:32</a></em>
					<cite>by <a href="space.php?username=%B0%BE%B2%BB%B9%FD%B5%C4%BA%DA%D2%B9">熬不过的黑夜</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_22456" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=22456&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_22456"><a href="viewthread.php?tid=22456&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">《建国大业》今日首映，你是否准备贡献票房？</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=22456&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=22456&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2681">daddle</a>
										</cite>
					<em>2009-9-16</em>
				</td>
				<td class="nums"><strong>77</strong> / <em>985</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=22456&goto=lastpost#lastpost">2009-9-17 07:40</a></em>
					<cite>by <a href="space.php?username=%B2%BB%B0%AE%B9%FA%D5%DF">不爱国者</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_24004" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=24004&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_24004"><a href="viewthread.php?tid=24004&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">党国大办喜宴 政治局大食堂内觥筹交错</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=24004&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=24004&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2495">深入裙中</a>
										</cite>
					<em>2009-9-30</em>
				</td>
				<td class="nums"><strong>77</strong> / <em>2461</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=24004&goto=lastpost#lastpost">2009-10-2 23:25</a></em>
					<cite>by <a href="space.php?username=freehost01">freehost01</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_24495" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=24495&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_24495"><a href="viewthread.php?tid=24495&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">胡窜访帝都 妇女们惊声尖叫“真幸福！真幸福！”</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=24495&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=24495&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7">张书记</a>
										</cite>
					<em>2009-10-7</em>
				</td>
				<td class="nums"><strong>77</strong> / <em>1935</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=24495&goto=lastpost#lastpost">2009-10-10 10:42</a></em>
					<cite>by <a href="space.php?username=zyxyz">zyxyz</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_25235" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=25235&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_25235"><a href="viewthread.php?tid=25235&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">上海闵行区建交委交通科承认花钱雇人“放倒钩” 附录音</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=25235&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=25235&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1310">小宸宸</a>
										</cite>
					<em>2009-9-13</em>
				</td>
				<td class="nums"><strong>77</strong> / <em>2729</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=25235&goto=lastpost#lastpost">2009-10-17 14:04</a></em>
					<cite>by <a href="space.php?username=whocare">whocare</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_25986" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=25986&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_25986"><a href="viewthread.php?tid=25986&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传，Google开始撤退</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=25986&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=25986&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2362">呼噜必烈</a>
										</cite>
					<em>2009-10-23</em>
				</td>
				<td class="nums"><strong>77</strong> / <em>2497</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=25986&goto=lastpost#lastpost">2009-10-26 02:31</a></em>
					<cite>by <a href="space.php?username=jason32">jason32</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_12885" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=12885&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_12885"><a href="viewthread.php?tid=12885&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">阮次山评价陆肆：党国第一，人权第二</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=12885&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=12885&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2028">猪肘</a>
										</cite>
					<em>2009-6-5</em>
				</td>
				<td class="nums"><strong>77</strong> / <em>1725</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=12885&goto=lastpost#lastpost">2009-6-13 04:48</a></em>
					<cite>by <a href="space.php?username=%C8%CB%C3%F1%D3%A2%D0%DB%BCo%C4%EE%B1%AE">人民英雄紀念碑</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_56901" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=56901&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_56901"><a href="viewthread.php?tid=56901&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">大陆大学生被指生活奢侈成风</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=56901&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=56901&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=12412">wangguoping</a>
										</cite>
					<em>2010-8-31</em>
				</td>
				<td class="nums"><strong>77</strong> / <em>2058</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=56901&goto=lastpost#lastpost">2010-9-4 01:10</a></em>
					<cite>by <a href="space.php?username=%B2%BB%B5%B9%CE%CC">不倒翁</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_57080" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=57080&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_57080"><a href="viewthread.php?tid=57080&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">唐福珍案件数名当事人因车祸死亡</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=57080&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=57080&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=17927">nik10000</a>
										</cite>
					<em>2010-9-2</em>
				</td>
				<td class="nums"><strong>77</strong> / <em>2311</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=57080&goto=lastpost#lastpost">2010-9-9 13:19</a></em>
					<cite>by <a href="space.php?username=shaohuayin">shaohuayin</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_60086" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=60086&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_60086"><a href="viewthread.php?tid=60086&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">温家宝在希腊议会演讲 获最高荣誉奖章</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=60086&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=60086&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=12412">wangguoping</a>
										</cite>
					<em>2010-10-4</em>
				</td>
				<td class="nums"><strong>77</strong> / <em>1235</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=60086&goto=lastpost#lastpost">2010-10-7 03:35</a></em>
					<cite>by <a href="space.php?username=%C6%D3%B1%A7%D2%BB">朴抱一</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_19195" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=19195&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_19195"><a href="viewthread.php?tid=19195&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">不锈钢老鼠盛赞北风等为左派</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=19195&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=19195&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2132">花想容</a>
										</cite>
					<em>2009-8-9</em>
				</td>
				<td class="nums"><strong>77</strong> / <em>1417</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=19195&goto=lastpost#lastpost">2009-8-12 18:07</a></em>
					<cite>by <a href="space.php?username=%B2%BB%D0%E2%B8%D6%C0%CF%CA%F3">不锈钢老鼠</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_20123" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=20123&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_20123"><a href="viewthread.php?tid=20123&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">六月的逃兵</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=20123&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=20123&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2804">musicool</a>
										</cite>
					<em>2009-6-6</em>
				</td>
				<td class="nums"><strong>77</strong> / <em>2771</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=20123&goto=lastpost#lastpost">2009-8-28 10:21</a></em>
					<cite>by <a href="space.php?username=wangjiu-9">wangjiu-9</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_20983" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=20983&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_20983"><a href="viewthread.php?tid=20983&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">孤身一人阻挡坦打炮车开进的大学生</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=20983&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=20983&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2495">深入裙中</a>
										</cite>
					<em>2009-8-30</em>
				</td>
				<td class="nums"><strong>77</strong> / <em>2752</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=20983&goto=lastpost#lastpost">2009-9-4 13:29</a></em>
					<cite>by <a href="space.php?username=%E8%F1%CA%F71986">桉树1986</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_12761" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=12761&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_12761"><a href="viewthread.php?tid=12761&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">那一天，那个人</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=12761&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=12761&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6080">路边围观</a>
										</cite>
					<em>2009-6-5</em>
				</td>
				<td class="nums"><strong>76</strong> / <em>2839</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=12761&goto=lastpost#lastpost">2009-8-14 14:18</a></em>
					<cite>by <a href="space.php?username=%BB%A8%CF%EB%C8%DD">花想容</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_20607" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=20607&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_20607"><a href="viewthread.php?tid=20607&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">胡承认当前网络失控 要求有效的铁腕管制</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=20607&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=20607&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7002">luugoo</a>
										</cite>
					<em>2009-8-8</em>
				</td>
				<td class="nums"><strong>76</strong> / <em>2317</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=20607&goto=lastpost#lastpost">2009-8-26 08:55</a></em>
					<cite>by <a href="space.php?username=direction">direction</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_20910" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=20910&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_20910"><a href="viewthread.php?tid=20910&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">南方有事，愤青要组志愿军</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=20910&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=20910&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4570">我卖糕的</a>
										</cite>
					<em>2009-8-29</em>
				</td>
				<td class="nums"><strong>76</strong> / <em>1546</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=20910&goto=lastpost#lastpost">2009-8-31 14:35</a></em>
					<cite>by <a href="space.php?username=nustbobo">nustbobo</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_21356" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=21356&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_21356"><a href="viewthread.php?tid=21356&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">首经贸一小撮宣布罢训</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=21356&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=21356&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4527">灼眼のSABER</a>
										</cite>
					<em>2009-9-2</em>
				</td>
				<td class="nums"><strong>76</strong> / <em>2576</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=21356&goto=lastpost#lastpost">2009-9-4 00:51</a></em>
					<cite>by <a href="space.php?username=%C0%CF%BB%C6">老黄</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_21536" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=21536&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_21536"><a href="viewthread.php?tid=21536&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">寿礼预言亲历记：误闯敏感带，被困五小时</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=21536&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=21536&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6316">redares</a>
										</cite>
					<em>2009-9-7</em>
				</td>
				<td class="nums"><strong>76</strong> / <em>2300</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=21536&goto=lastpost#lastpost">2009-9-10 11:43</a></em>
					<cite>by <a href="space.php?username=%C0%CF%BA%FA">老胡</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_22689" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=22689&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_22689"><a href="viewthread.php?tid=22689&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">主旋律电影《天安门》票房惨淡 导演上火气急骂娘</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=22689&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=22689&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1408">becom</a>
										</cite>
					<em>2009-9-19</em>
				</td>
				<td class="nums"><strong>76</strong> / <em>2159</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=22689&goto=lastpost#lastpost">2009-9-22 08:43</a></em>
					<cite>by <a href="space.php?username=hanyujia">hanyujia</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_24175" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=24175&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_24175"><a href="viewthread.php?tid=24175&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">快讯：豆瓣无法访问</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=24175&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=24175&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7277">一向低调</a>
										</cite>
					<em>2009-10-2</em>
				</td>
				<td class="nums"><strong>76</strong> / <em>1783</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=24175&goto=lastpost#lastpost">2009-10-6 13:18</a></em>
					<cite>by <a href="space.php?username=eat.eat">eat.eat</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_43915" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=43915&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_43915"><a href="viewthread.php?tid=43915&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">日本女优苍井空网上为玉树灾区募捐</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=43915&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=43915&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3871">wodeid</a>
										</cite>
					<em>2010-4-23</em>
				</td>
				<td class="nums"><strong>76</strong> / <em>2146</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=43915&goto=lastpost#lastpost">2010-5-4 21:20</a></em>
					<cite>by <a href="space.php?username=chipsnowman">chipsnowman</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_3208" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=3208&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_3208"><a href="viewthread.php?tid=3208&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">互联网救中国新论</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=3208&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=3208&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=17">eat.eat</a>
										</cite>
					<em>2009-1-12</em>
				</td>
				<td class="nums"><strong>76</strong> / <em>742</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=3208&goto=lastpost#lastpost">2009-1-13 17:13</a></em>
					<cite>by <a href="space.php?username=yangdc">yangdc</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_33349" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=33349&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_33349"><a href="viewthread.php?tid=33349&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">影帝远赴黑龙江吃了一小碗米饭</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=33349&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=33349&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4570">我卖糕的</a>
										</cite>
					<em>2010-1-3</em>
				</td>
				<td class="nums"><strong>76</strong> / <em>1983</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=33349&goto=lastpost#lastpost">2010-1-8 11:43</a></em>
					<cite>by <a href="space.php?username=%D6%D0%D1%EB%D7%DC%CA%FA%BC%A6">中央总竖鸡</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_34430" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=34430&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_34430"><a href="viewthread.php?tid=34430&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">中国红客开始进攻伊朗网站</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=34430&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=34430&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8638">dark</a>
										</cite>
					<em>2010-1-12</em>
				</td>
				<td class="nums"><strong>76</strong> / <em>1704</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=34430&goto=lastpost#lastpost">2010-1-14 20:25</a></em>
					<cite>by <a href="space.php?username=%D5%D4%C8%FD%C6%A4">赵三皮</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_21491" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=21491&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_21491"><a href="viewthread.php?tid=21491&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传，Google拟退出神州</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=21491&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=21491&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=105">黄阿狗</a>
										</cite>
					<em>2009-9-6</em>
				</td>
				<td class="nums"><strong>76</strong> / <em>2794</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=21491&goto=lastpost#lastpost">2010-1-16 11:29</a></em>
					<cite>by <a href="space.php?username=%D0%E4%CA%D6%BF%B4%C8%C8%C4%D6">袖手看热闹</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_21855" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=21855&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_21855"><a href="viewthread.php?tid=21855&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传北京网管办副处长身患脑癌</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=21855&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=21855&amp;extra=page%3D10%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=21">大仙儿</a>
										</cite>
					<em>2009-9-10</em>
				</td>
				<td class="nums"><strong>76</strong> / <em>3453</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=21855&goto=lastpost#lastpost">2010-2-20 17:37</a></em>
					<cite>by <a href="space.php?username=%CD%BC%CD%BC">图图</a></cite>
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
	<div class="pages"><em>&nbsp;22278&nbsp;</em><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=1" class="first">1 ...</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=9" class="prev">&lsaquo;&lsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=8">8</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=9">9</a><strong>10</strong><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=11">11</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=12">12</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=13">13</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=14">14</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=15">15</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=16">16</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=17">17</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=11" class="next">&rsaquo;&rsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=349" class="last">... 349</a><kbd><input type="text" name="custompage" size="3" onkeydown="if(event.keyCode==13) {window.location='forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page='+this.value; return false;}" /></kbd></div>	</div>

  
	<div class="box">
			<span class="headactions"><a href="forumdisplay.php?fid=2&amp;page=10&amp;showoldetails=yes#online" class="nobdr"><img src="images/default/collapsed_yes.gif" alt="" /></a></span>
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
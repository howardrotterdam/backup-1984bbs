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
			window.location = 'forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&page=29';
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
<div class="pages"><em>&nbsp;22278&nbsp;</em><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=1" class="first">1 ...</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=29" class="prev">&lsaquo;&lsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=28">28</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=29">29</a><strong>30</strong><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=31">31</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=32">32</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=33">33</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=34">34</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=35">35</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=36">36</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=37">37</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=31" class="next">&rsaquo;&rsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=349" class="last">... 349</a><kbd><input type="text" name="custompage" size="3" onkeydown="if(event.keyCode==13) {window.location='forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page='+this.value; return false;}" /></kbd></div></div>

<div style="float:left;border:1px solid #CCC; border-bottom:none;;width:218px; background: url(/imgs/1984radio.jpg) 200px 2px no-repeat;padding:5px 0 5px 12px;margin:0px 0 0 13px">

<p><b><a href="/radio/index.php" target="_blank">1984FM</a></b><br /><b><a href="https://voxli.com/1984bbs" target="_blank">1984Chat</a></b>&nbsp;</p> 
</div>

<div style="clear:both;height:0px;width:100%;font-size:1px;">&nbsp;</div>

	<ul class="popupmenu_popup newspecialmenu" id="newspecial_menu" style="display: none">
		<li><a href="post.php?action=newthread&amp;fid=2&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">发新话题</a></li>		<li class="poll"><a href="post.php?action=newthread&amp;fid=2&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;special=1">发布投票</a></li>													</ul>
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

					<tbody id="normalthread_59065" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=59065&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_59065"><a href="viewthread.php?tid=59065&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">美国政府认为钓鱼岛撞船系中国政府蓄意挑衅</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=134">丁丁</a>
										</cite>
					<em>2010-9-21</em>
				</td>
				<td class="nums"><strong>45</strong> / <em>1448</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=59065&goto=lastpost#lastpost">2010-9-23 15:59</a></em>
					<cite>by <a href="space.php?username=pugatory">pugatory</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_56500" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=56500&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_56500"><a href="viewthread.php?tid=56500&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">台湾儿童的国家认同让中国记者直冒冷汗</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=134">丁丁</a>
										</cite>
					<em>2010-8-26</em>
				</td>
				<td class="nums"><strong>45</strong> / <em>2215</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=56500&goto=lastpost#lastpost">2010-9-27 16:55</a></em>
					<cite>by <a href="space.php?username=hippies">hippies</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_56704" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=56704&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_56704"><a href="viewthread.php?tid=56704&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">北京饭店披露秦城监狱伙食里有鱼翅</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8301">lqunl</a>
										</cite>
					<em>2010-8-28</em>
				</td>
				<td class="nums"><strong>45</strong> / <em>3098</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=56704&goto=lastpost#lastpost">2010-10-11 16:54</a></em>
					<cite>by <a href="space.php?username=Yhard">Yhard</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_41363" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=41363&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_41363"><a href="viewthread.php?tid=41363&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">团中央要求全国团员及少先队员每人捐一瓶水</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=11245">shysun</a>
										</cite>
					<em>2010-3-26</em>
				</td>
				<td class="nums"><strong>45</strong> / <em>750</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=41363&goto=lastpost#lastpost">2010-4-1 11:37</a></em>
					<cite>by <a href="space.php?username=%BF%B5%D4%F2%D1%F4">康则阳</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_42137" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=42137&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_42137"><a href="viewthread.php?tid=42137&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">谷歌今日正式改名为“Google中国”</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7772">六死一伤</a>
										</cite>
					<em>2010-4-3</em>
				</td>
				<td class="nums"><strong>45</strong> / <em>1624</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=42137&goto=lastpost#lastpost">2010-4-4 16:06</a></em>
					<cite>by <a href="space.php?username=%B7%E7%D6%D0%B5%C4%CA%F7%CC%A1">风中的树獭</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_42888" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=42888&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_42888"><a href="viewthread.php?tid=42888&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">湖南省公安厅网监总队长傅和平跳楼身亡</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8638">dark</a>
										</cite>
					<em>2010-4-12</em>
				</td>
				<td class="nums"><strong>45</strong> / <em>1277</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=42888&goto=lastpost#lastpost">2010-4-14 08:16</a></em>
					<cite>by <a href="space.php?username=%B6%A1%B4%BA%C7%EF">丁春秋</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_44519" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=44519&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_44519"><a href="viewthread.php?tid=44519&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">真理部最新指令：不勾结西方媒体批评世博 开幕会严禁有质疑声音</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3352">刘偷</a>
										</cite>
					<em>2010-4-30</em>
				</td>
				<td class="nums"><strong>45</strong> / <em>1428</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=44519&goto=lastpost#lastpost">2010-5-4 14:19</a></em>
					<cite>by <a href="space.php?username=%B5%B0%B5%B0%B6%F9">蛋蛋儿</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_44962" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=44962&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_44962"><a href="viewthread.php?tid=44962&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">影帝缺席世博开幕引不满 被政治局攻击为作秀</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1981">黑衣大葛格</a>
										</cite>
					<em>2010-5-5</em>
				</td>
				<td class="nums"><strong>45</strong> / <em>2076</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=44962&goto=lastpost#lastpost">2010-5-7 08:16</a></em>
					<cite>by <a href="space.php?username=%D5%D5%B9%CB%BA%C3%C4%E3">照顾好你</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_45004" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=45004&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_45004"><a href="viewthread.php?tid=45004&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">薄熙来称到农村实践不亚于读研</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7879">清風笑</a>
										</cite>
					<em>2010-5-6</em>
				</td>
				<td class="nums"><strong>45</strong> / <em>791</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=45004&goto=lastpost#lastpost">2010-5-8 10:29</a></em>
					<cite>by <a href="space.php?username=beiou">beiou</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_45111" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=45111&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_45111"><a href="viewthread.php?tid=45111&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">央视当家花旦甩男友夜会富豪</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4719">咸鱼干</a>
										</cite>
					<em>2010-5-7</em>
				</td>
				<td class="nums"><strong>45</strong> / <em>2629</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=45111&goto=lastpost#lastpost">2010-5-12 22:40</a></em>
					<cite>by <a href="space.php?username=%C7%B1%D0%D0%D5%DF">潜行者</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_45608" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=45608&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_45608"><a href="viewthread.php?tid=45608&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">天津滨海新区的党委副书记之子网上威胁同学</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8379">Yhard</a>
										</cite>
					<em>2010-5-12</em>
				</td>
				<td class="nums"><strong>45</strong> / <em>1315</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=45608&goto=lastpost#lastpost">2010-5-21 23:21</a></em>
					<cite>by <a href="space.php?username=%CA%F7%C9%CF%B4%BA%B4%E5">树上春村</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_46929" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=46929&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_46929"><a href="viewthread.php?tid=46929&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">新疆喀纳斯湖怪现身 四条巨大黑影时隐时现</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=10890">xiaohe1120</a>
										</cite>
					<em>2010-5-24</em>
				</td>
				<td class="nums"><strong>45</strong> / <em>1284</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=46929&goto=lastpost#lastpost">2010-5-25 15:25</a></em>
					<cite>by <a href="space.php?username=chandler0819">chandler0819</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_47151" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=47151&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_47151"><a href="viewthread.php?tid=47151&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">蔡英文公开声明“中华民国是流亡政府”</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=134">丁丁</a>
										</cite>
					<em>2010-5-26</em>
				</td>
				<td class="nums"><strong>45</strong> / <em>988</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=47151&goto=lastpost#lastpost">2010-5-27 08:59</a></em>
					<cite>by <a href="space.php?username=%B4%F3%D0l%CD%F5%EF%88%B5%EA">大衛王飯店</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_17561" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=17561&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_17561"><a href="viewthread.php?tid=17561&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">不许嘀咕</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2071">上肛上腺</a>
										</cite>
					<em>2009-7-21</em>
				</td>
				<td class="nums"><strong>45</strong> / <em>1146</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=17561&goto=lastpost#lastpost">2009-7-22 21:00</a></em>
					<cite>by <a href="space.php?username=hotwinter">hotwinter</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_19614" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=19614&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_19614"><a href="viewthread.php?tid=19614&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">余杰：Hu Jintao为何拒绝这根救命的稻草？</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5823">康波</a>
										</cite>
					<em>2009-8-13</em>
				</td>
				<td class="nums"><strong>45</strong> / <em>1475</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=19614&goto=lastpost#lastpost">2009-8-14 20:44</a></em>
					<cite>by <a href="space.php?username=%BF%B5%B2%A8">康波</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_19952" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=19952&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_19952"><a href="viewthread.php?tid=19952&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传，许宗衡二次自杀并获得成功</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4977">adruich</a>
										</cite>
					<em>2009-8-17</em>
				</td>
				<td class="nums"><strong>45</strong> / <em>1463</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=19952&goto=lastpost#lastpost">2009-8-20 10:35</a></em>
					<cite>by <a href="space.php?username=%C0%D7%C2%FC%D0%D6%B5%DC">雷曼兄弟</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_20131" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=20131&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_20131"><a href="viewthread.php?tid=20131&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">中国男人在非洲留下大量黑色私生子</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1408">becom</a>
										</cite>
					<em>2009-8-19</em>
				</td>
				<td class="nums"><strong>45</strong> / <em>1578</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=20131&goto=lastpost#lastpost">2009-8-22 20:27</a></em>
					<cite>by <a href="space.php?username=%D4%C6%C1%EB%C5%A9%B3%A1%D6%F7">云岭农场主</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_20445" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=20445&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_20445"><a href="viewthread.php?tid=20445&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">路遇湖南农民进京为国庆献宝</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1121">小荷1120</a>
										</cite>
					<em>2009-8-24</em>
				</td>
				<td class="nums"><strong>45</strong> / <em>849</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=20445&goto=lastpost#lastpost">2009-8-26 14:08</a></em>
					<cite>by <a href="space.php?username=%CA%AE%C4%EA%BF%B3%B2%F1">十年砍柴</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_20825" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=20825&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_20825"><a href="viewthread.php?tid=20825&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">北理工学生研制节能汽车 1升油可跑1200公里</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=144">mfs0616</a>
										</cite>
					<em>2009-8-28</em>
				</td>
				<td class="nums"><strong>45</strong> / <em>725</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=20825&goto=lastpost#lastpost">2009-8-29 09:29</a></em>
					<cite>by <a href="space.php?username=lingfeitx">lingfeitx</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_3839" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=3839&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_3839"><a href="viewthread.php?tid=3839&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">奥巴马涉嫌辱华：“对付法西斯主义和共产主义要靠信念”</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7">张书记</a>
										</cite>
					<em>2009-1-21</em>
				</td>
				<td class="nums"><strong>45</strong> / <em>583</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=3839&goto=lastpost#lastpost">2009-1-22 12:30</a></em>
					<cite>by <a href="space.php?username=eat.eat">eat.eat</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_5194" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=5194&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_5194"><a href="viewthread.php?tid=5194&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">天朝抗干扰局局长昨日跳楼身亡</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2828">五毛五</a>
										</cite>
					<em>2009-2-18</em>
				</td>
				<td class="nums"><strong>45</strong> / <em>1113</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=5194&goto=lastpost#lastpost">2009-2-22 13:55</a></em>
					<cite>by <a href="space.php?username=x.man">x.man</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_5628" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=5628&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_5628"><a href="viewthread.php?tid=5628&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">低俗整肃运动扩大化 未备案网站将一律关停</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=169">抑扬</a>
										</cite>
					<em>2009-2-23</em>
				</td>
				<td class="nums"><strong>45</strong> / <em>957</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=5628&goto=lastpost#lastpost">2009-2-26 16:45</a></em>
					<cite>by <a href="space.php?username=licufa">licufa</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_5774" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=5774&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_5774"><a href="viewthread.php?tid=5774&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">毛新宇大校语录 附毛博士墨宝</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=169">抑扬</a>
										</cite>
					<em>2009-2-26</em>
				</td>
				<td class="nums"><strong>45</strong> / <em>854</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=5774&goto=lastpost#lastpost">2009-2-28 00:05</a></em>
					<cite>by <a href="space.php?username=%B4%F7%BC%D2%C0%CF%B0%D6">戴家老爸</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_7938" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=7938&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_7938"><a href="viewthread.php?tid=7938&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传，成都又发抢枪案</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=202">investigate</a>
										</cite>
					<em>2009-3-27</em>
				</td>
				<td class="nums"><strong>45</strong> / <em>1180</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=7938&goto=lastpost#lastpost">2009-3-28 12:27</a></em>
					<cite>by <a href="space.php?username=%B5%CD%BA%CD">低和</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_8539" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=8539&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_8539"><a href="viewthread.php?tid=8539&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">肌肤白净前凸后翘 北体大校花拍动人写真</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1121">小荷1120</a>
										</cite>
					<em>2009-4-6</em>
				</td>
				<td class="nums"><strong>45</strong> / <em>1147</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=8539&goto=lastpost#lastpost">2009-4-7 23:43</a></em>
					<cite>by <a href="space.php?username=%BC%E1%B1%DA%C7%E5%D2%B0">坚壁清野</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_8858" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=8858&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_8858"><a href="viewthread.php?tid=8858&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">北京大学外“精神病和平抗议组织”被镇压</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7">张书记</a>
										</cite>
					<em>2009-4-11</em>
				</td>
				<td class="nums"><strong>45</strong> / <em>919</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=8858&goto=lastpost#lastpost">2009-4-15 10:50</a></em>
					<cite>by <a href="space.php?username=%B1%B1%B7%BD%D0%FE%CE%E5">北方玄五</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_7782" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=7782&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_7782"><a href="viewthread.php?tid=7782&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">解放军军官将大幅加薪振士气</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=852">未来他老爸</a>
										</cite>
					<em>2009-3-8</em>
				</td>
				<td class="nums"><strong>44</strong> / <em>1140</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=7782&goto=lastpost#lastpost">2009-3-25 22:39</a></em>
					<cite>by <a href="space.php?username=%D0%A1%B5%BA%D0%A1%CF%AA">小岛小溪</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_8378" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=8378&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_8378"><a href="viewthread.php?tid=8378&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">章诒和：冯亦代在章家卧底史</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=910">朱翠</a>
										</cite>
					<em>2009-4-3</em>
				</td>
				<td class="nums"><strong>44</strong> / <em>976</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=8378&goto=lastpost#lastpost">2009-4-8 22:18</a></em>
					<cite>by <a href="space.php?username=%CB%AF%BE%F5%B5%C4%CA%F7">睡觉的树</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_9007" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=9007&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_9007"><a href="viewthread.php?tid=9007&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">太祖成安全套代言人 爱国青年很受伤很愤怒</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4570">我卖糕的</a>
										</cite>
					<em>2009-4-14</em>
				</td>
				<td class="nums"><strong>44</strong> / <em>1072</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=9007&goto=lastpost#lastpost">2009-4-15 01:15</a></em>
					<cite>by <a href="space.php?username=xialixun">xialixun</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_55286" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=55286&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_55286"><a href="viewthread.php?tid=55286&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">美航母将赴黄海军演 中共少将表示人若犯我我必犯人</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8301">lqunl</a>
										</cite>
					<em>2010-8-12</em>
				</td>
				<td class="nums"><strong>44</strong> / <em>700</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=55286&goto=lastpost#lastpost">2010-8-16 18:21</a></em>
					<cite>by <a href="space.php?username=%B7%CB%C3%FB%C0%B2">匪名啦</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_54311" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=54311&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_54311"><a href="viewthread.php?tid=54311&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">中国印尼军舰对峙 动用大口径机枪</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=17435">@k2</a>
										</cite>
					<em>2010-7-30</em>
				</td>
				<td class="nums"><strong>44</strong> / <em>1721</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=54311&goto=lastpost#lastpost">2010-8-25 12:14</a></em>
					<cite>by <a href="space.php?username=%C4%DC%B5%C7%C2%E9%C3%C0%D7%D3">能登麻美子</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_57345" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=57345&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_57345"><a href="viewthread.php?tid=57345&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">谭作人分到雅安名山县城边雅安第四监区印刷厂</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8544">百丽</a>
										</cite>
					<em>2010-9-4</em>
				</td>
				<td class="nums"><strong>44</strong> / <em>1006</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=57345&goto=lastpost#lastpost">2010-9-7 17:34</a></em>
					<cite>by <a href="space.php?username=%B6%AB%B7%BD%B0%B2%C0%BD">东方安澜</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_57674" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=57674&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_57674"><a href="viewthread.php?tid=57674&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">安庆学生游行抗议法院一起交通事故不公处理</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3339">机器猫阿福</a>
										</cite>
					<em>2010-9-7</em>
				</td>
				<td class="nums"><strong>44</strong> / <em>981</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=57674&goto=lastpost#lastpost">2010-9-8 15:12</a></em>
					<cite>by <a href="space.php?username=%CC%FD%D3%EF">听语</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_57387" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=57387&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_57387"><a href="viewthread.php?tid=57387&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">大陆网站抗议胡锦涛擅改抗战胜利日</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=803">weke</a>
										</cite>
					<em>2010-9-4</em>
				</td>
				<td class="nums"><strong>44</strong> / <em>1953</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=57387&goto=lastpost#lastpost">2010-9-16 09:55</a></em>
					<cite>by <a href="space.php?username=fhzmaj1980">fhzmaj1980</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_59416" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=59416&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_59416"><a href="viewthread.php?tid=59416&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">北京楼市再现千人哄抢   大兴楼盘交20万定金不退</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=852">未来他老爸</a>
										</cite>
					<em>2010-9-26</em>
				</td>
				<td class="nums"><strong>44</strong> / <em>1055</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=59416&goto=lastpost#lastpost">2010-9-27 00:31</a></em>
					<cite>by <a href="space.php?username=%B2%BB%BE%B4%C9%F1%B5%C4YODA">不敬神的YODA</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_60204" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=60204&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_60204"><a href="viewthread.php?tid=60204&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">“中国廉政文物展”暂停开放 馆方称原因不便透露</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=12310">炽鸢侯</a>
										</cite>
					<em>2010-9-27</em>
				</td>
				<td class="nums"><strong>44</strong> / <em>1206</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=60204&goto=lastpost#lastpost">2010-10-6 23:44</a></em>
					<cite>by <a href="space.php?username=%D7%EE%CA%C7%C4%C7%D2%BB%CB%B2">最是那一瞬</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_21521" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=21521&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_21521"><a href="viewthread.php?tid=21521&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">据同学消息，某大学可能暴发H1N1</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2703">billdc</a>
										</cite>
					<em>2009-9-6</em>
				</td>
				<td class="nums"><strong>44</strong> / <em>1371</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=21521&goto=lastpost#lastpost">2009-9-8 15:25</a></em>
					<cite>by <a href="space.php?username=%B5%C0%CC%FD%CD%BE%CB%B5">道听途说</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_22651" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=22651&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_22651"><a href="viewthread.php?tid=22651&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">快讯：受国庆彩排影响 北京交通大堵塞</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7">张书记</a>
										</cite>
					<em>2009-9-18</em>
				</td>
				<td class="nums"><strong>44</strong> / <em>933</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=22651&goto=lastpost#lastpost">2009-9-18 23:13</a></em>
					<cite>by <a href="space.php?username=%89%F2%D9v%BA%C8%D1%AA%C9%E4%C0L">夠賤喝血射繪</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_23200" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=23200&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_23200"><a href="viewthread.php?tid=23200&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">北京市出现14例接种甲流疫苗不良反应</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4719">咸鱼干</a>
										</cite>
					<em>2009-9-23</em>
				</td>
				<td class="nums"><strong>44</strong> / <em>1699</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=23200&goto=lastpost#lastpost">2009-10-11 00:03</a></em>
					<cite>by <a href="space.php?username=%B8%A1%D4%C6">浮云</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_24996" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=24996&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_24996"><a href="viewthread.php?tid=24996&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">今天凤凰台的内容被掐播……</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3158">tonyer</a>
										</cite>
					<em>2009-10-13</em>
				</td>
				<td class="nums"><strong>44</strong> / <em>1719</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=24996&goto=lastpost#lastpost">2009-10-15 14:43</a></em>
					<cite>by <a href="space.php?username=%D0%B4%CA%B5">写实</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_25252" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=25252&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_25252"><a href="viewthread.php?tid=25252&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">乌鲁木齐骚乱事件6人判死刑</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8301">lqunl</a>
										</cite>
					<em>2009-10-12</em>
				</td>
				<td class="nums"><strong>44</strong> / <em>529</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=25252&goto=lastpost#lastpost">2009-10-17 20:59</a></em>
					<cite>by <a href="space.php?username=qinghe1987">qinghe1987</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_25070" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=25070&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_25070"><a href="viewthread.php?tid=25070&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">因向国旗下跪夫妇双双被劳教</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8301">lqunl</a>
										</cite>
					<em>2009-10-14</em>
				</td>
				<td class="nums"><strong>44</strong> / <em>1276</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=25070&goto=lastpost#lastpost">2009-10-17 22:35</a></em>
					<cite>by <a href="space.php?username=%CE%F7%C3%C5%B4%B5%C5%A3">西门吹牛</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_25363" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=25363&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_25363"><a href="viewthread.php?tid=25363&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">储君发言时发生抗议 “刘晓波和谭作人在哪里？”</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3194">zhangqian1896</a>
										</cite>
					<em>2009-10-17</em>
				</td>
				<td class="nums"><strong>44</strong> / <em>1438</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=25363&goto=lastpost#lastpost">2009-10-18 20:37</a></em>
					<cite>by <a href="space.php?username=%CE%F7%C3%C5%B4%B5%C5%A3">西门吹牛</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_25777" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=25777&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_25777"><a href="viewthread.php?tid=25777&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">文强扬言“什么都要说出来”</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8301">lqunl</a>
										</cite>
					<em>2009-10-21</em>
				</td>
				<td class="nums"><strong>44</strong> / <em>1058</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=25777&goto=lastpost#lastpost">2009-10-22 12:44</a></em>
					<cite>by <a href="space.php?username=%B7%A8%BF%CB%88%98">法克垬</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_25800" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=25800&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_25800"><a href="viewthread.php?tid=25800&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">浙江大学1020BBS站长门事件</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2798">astding</a>
										</cite>
					<em>2009-10-21</em>
				</td>
				<td class="nums"><strong>44</strong> / <em>1449</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=25800&goto=lastpost#lastpost">2009-10-22 17:07</a></em>
					<cite>by <a href="space.php?username=dxxd">dxxd</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_26367" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=26367&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_26367"><a href="viewthread.php?tid=26367&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">京沪未来十余年房价已被透支 房价收入比超30倍</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4570">我卖糕的</a>
										</cite>
					<em>2009-10-27</em>
				</td>
				<td class="nums"><strong>44</strong> / <em>684</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=26367&goto=lastpost#lastpost">2009-10-28 18:03</a></em>
					<cite>by <a href="space.php?username=threeight">threeight</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_13104" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=13104&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_13104"><a href="viewthread.php?tid=13104&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">老外坦白Tienamen, Tibet, Olympics和中国政府问题了……</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1405">est</a>
										</cite>
					<em>2009-6-9</em>
				</td>
				<td class="nums"><strong>44</strong> / <em>1209</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=13104&goto=lastpost#lastpost">2009-6-12 16:22</a></em>
					<cite>by <a href="space.php?username=arzmok">arzmok</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_10833" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=10833&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_10833"><a href="viewthread.php?tid=10833&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">最新免责声明，请书记组织众童鞋学习！</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2229">[17]堂吉柯德</a>
										</cite>
					<em>2009-5-7</em>
				</td>
				<td class="nums"><strong>44</strong> / <em>1297</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=10833&goto=lastpost#lastpost">2009-6-14 17:35</a></em>
					<cite>by <a href="space.php?username=%D7%F3%B0%B6%A1%FB%D3%D2%B0%B6">左岸←右岸</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_13284" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=13284&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_13284"><a href="viewthread.php?tid=13284&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">真理部下发关于滤霸事件的重要通知</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2071">上肛上腺</a>
										</cite>
					<em>2009-6-11</em>
				</td>
				<td class="nums"><strong>44</strong> / <em>1775</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=13284&goto=lastpost#lastpost">2009-6-15 10:13</a></em>
					<cite>by <a href="space.php?username=u238z">u238z</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_13176" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=13176&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_13176"><a href="viewthread.php?tid=13176&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">格格这条热裤销魂吗？</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7">张书记</a>
										</cite>
					<em>2009-6-10</em>
				</td>
				<td class="nums"><strong>44</strong> / <em>1703</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=13176&goto=lastpost#lastpost">2009-6-21 19:58</a></em>
					<cite>by <a href="space.php?username=%CC%D2%D7%D3%C3%A8%C2%E9">桃子猫麻</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_14643" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=14643&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_14643"><a href="viewthread.php?tid=14643&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">中青报：谷歌“无辜”姿态蒙蔽了多少人？</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5391">wikings</a>
										</cite>
					<em>2009-6-24</em>
				</td>
				<td class="nums"><strong>44</strong> / <em>663</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=14643&goto=lastpost#lastpost">2009-6-24 22:19</a></em>
					<cite>by <a href="space.php?username=zyxyz">zyxyz</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_14779" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=14779&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_14779"><a href="viewthread.php?tid=14779&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">法医专家鉴定结论：石首事件中涂远高为高坠自杀死亡</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6601">学究</a>
										</cite>
					<em>2009-6-25</em>
				</td>
				<td class="nums"><strong>44</strong> / <em>750</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=14779&goto=lastpost#lastpost">2009-6-27 11:18</a></em>
					<cite>by <a href="space.php?username=yizhu0512">yizhu0512</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_14969" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=14969&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_14969"><a href="viewthread.php?tid=14969&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">聚星国际砸下2000万  韩寒百万年薪成大陆主编身价第一人</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=852">未来他老爸</a>
										</cite>
					<em>2009-6-26</em>
				</td>
				<td class="nums"><strong>44</strong> / <em>884</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=14969&goto=lastpost#lastpost">2009-6-28 09:54</a></em>
					<cite>by <a href="space.php?username=%D0%A1%E5%B7%E5%B7">小宸宸</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_12358" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=12358&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_12358"><a href="viewthread.php?tid=12358&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">你们猜：小记者系哪家滴孩子？</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=49">jaec</a>
										</cite>
					<em>2009-6-1</em>
				</td>
				<td class="nums"><strong>44</strong> / <em>1841</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=12358&goto=lastpost#lastpost">2009-7-1 19:59</a></em>
					<cite>by <a href="space.php?username=%CE%F7%C3%C5%B4%B5%C5%A3">西门吹牛</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_16522" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=16522&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_16522"><a href="viewthread.php?tid=16522&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">影帝翘班赶到医院……</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=169">抑扬</a>
										</cite>
					<em>2009-7-12</em>
				</td>
				<td class="nums"><strong>44</strong> / <em>1167</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=16522&goto=lastpost#lastpost">2009-7-13 15:09</a></em>
					<cite>by <a href="space.php?username=CHR">CHR</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_47428" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=47428&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_47428"><a href="viewthread.php?tid=47428&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">国新办组织网媒高层赴重庆签署《红岩宣言》</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2804">musicool</a>
										</cite>
					<em>2010-5-25</em>
				</td>
				<td class="nums"><strong>44</strong> / <em>503</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=47428&goto=lastpost#lastpost">2010-5-28 23:20</a></em>
					<cite>by <a href="space.php?username=%CD%B3%D2%BB%BF%DA%BE%B6">统一口径</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_48086" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=48086&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_48086"><a href="viewthread.php?tid=48086&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">张召忠：美军航母进入波斯湾会被伊朗关门打狗</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=803">weke</a>
										</cite>
					<em>2010-6-2</em>
				</td>
				<td class="nums"><strong>44</strong> / <em>827</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=48086&goto=lastpost#lastpost">2010-6-7 00:49</a></em>
					<cite>by <a href="space.php?username=%BD%A3%D0%A5%CC%EC%CF%C2">剑啸天下</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_50659" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=50659&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_50659"><a href="viewthread.php?tid=50659&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">粤女生遭迷魂离奇身在内蒙</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6314">hhbcl1414</a>
										</cite>
					<em>2010-6-24</em>
				</td>
				<td class="nums"><strong>44</strong> / <em>1468</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=50659&goto=lastpost#lastpost">2010-6-27 22:10</a></em>
					<cite>by <a href="space.php?username=%B0%DC%D2%E0%E8%C9%D0%DB">败亦枭雄</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_51278" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=51278&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_51278"><a href="viewthread.php?tid=51278&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">华裔高官骆家辉：美将尽一切手段敲掉中国贸易壁垒</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=13201">sunaaron123</a>
										</cite>
					<em>2010-6-30</em>
				</td>
				<td class="nums"><strong>44</strong> / <em>1264</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=51278&goto=lastpost#lastpost">2010-7-3 13:56</a></em>
					<cite>by <a href="space.php?username=weke">weke</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_51529" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=51529&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_51529"><a href="viewthread.php?tid=51529&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">绵竹“抗八级地震”在建安居房垮塌</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2071">上肛上腺</a>
										</cite>
					<em>2010-7-1</em>
				</td>
				<td class="nums"><strong>44</strong> / <em>988</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=51529&goto=lastpost#lastpost">2010-7-3 21:09</a></em>
					<cite>by <a href="space.php?username=%BC%D1%C4%DC">佳能</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_51608" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=51608&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_51608"><a href="viewthread.php?tid=51608&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">李肇星：我们要爱自己的祖国 这是最重要的</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3202">glim</a>
										</cite>
					<em>2010-7-3</em>
				</td>
				<td class="nums"><strong>44</strong> / <em>826</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=51608&goto=lastpost#lastpost">2010-7-5 10:56</a></em>
					<cite>by <a href="space.php?username=%C6%CF%CC%D1">葡萄</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_51502" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=51502&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_51502"><a href="viewthread.php?tid=51502&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">中国一支雪糕含19种添加剂</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4570">我卖糕的</a>
										</cite>
					<em>2010-7-2</em>
				</td>
				<td class="nums"><strong>44</strong> / <em>1327</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=51502&goto=lastpost#lastpost">2010-7-9 13:27</a></em>
					<cite>by <a href="space.php?username=%B1%AF%B4%DF">悲催</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_52568" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=52568&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_52568"><a href="viewthread.php?tid=52568&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">南方报业收购美国《新闻周刊》遭拒</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=9737">剁辣椒</a>
										</cite>
					<em>2010-6-16</em>
				</td>
				<td class="nums"><strong>44</strong> / <em>1239</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=52568&goto=lastpost#lastpost">2010-7-12 15:04</a></em>
					<cite>by <a href="space.php?username=%C9%BF%B7%E7%B5%E3%BB%F0">煽风点火</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_53194" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=53194&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_53194"><a href="viewthread.php?tid=53194&amp;extra=page%3D30%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">国新办官员大骂搜狐张朝阳 指责其阴险</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=13979">yhy96</a>
										</cite>
					<em>2010-7-18</em>
				</td>
				<td class="nums"><strong>44</strong> / <em>1904</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=53194&goto=lastpost#lastpost">2010-7-21 13:52</a></em>
					<cite>by <a href="space.php?username=NBHH">NBHH</a></cite>
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
	<div class="pages"><em>&nbsp;22278&nbsp;</em><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=1" class="first">1 ...</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=29" class="prev">&lsaquo;&lsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=28">28</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=29">29</a><strong>30</strong><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=31">31</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=32">32</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=33">33</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=34">34</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=35">35</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=36">36</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=37">37</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=31" class="next">&rsaquo;&rsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=349" class="last">... 349</a><kbd><input type="text" name="custompage" size="3" onkeydown="if(event.keyCode==13) {window.location='forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page='+this.value; return false;}" /></kbd></div>	</div>

  
	<div class="box">
			<span class="headactions"><a href="forumdisplay.php?fid=2&amp;page=30&amp;showoldetails=yes#online" class="nobdr"><img src="images/default/collapsed_yes.gif" alt="" /></a></span>
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
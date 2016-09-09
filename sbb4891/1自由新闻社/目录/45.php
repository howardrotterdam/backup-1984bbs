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
			window.location = 'forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&page=44';
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
<div class="pages"><em>&nbsp;22278&nbsp;</em><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=1" class="first">1 ...</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=44" class="prev">&lsaquo;&lsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=43">43</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=44">44</a><strong>45</strong><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=46">46</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=47">47</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=48">48</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=49">49</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=50">50</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=51">51</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=52">52</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=46" class="next">&rsaquo;&rsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=349" class="last">... 349</a><kbd><input type="text" name="custompage" size="3" onkeydown="if(event.keyCode==13) {window.location='forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page='+this.value; return false;}" /></kbd></div></div>

<div style="float:left;border:1px solid #CCC; border-bottom:none;;width:218px; background: url(/imgs/1984radio.jpg) 200px 2px no-repeat;padding:5px 0 5px 12px;margin:0px 0 0 13px">

<p><b><a href="/radio/index.php" target="_blank">1984FM</a></b><br /><b><a href="https://voxli.com/1984bbs" target="_blank">1984Chat</a></b>&nbsp;</p> 
</div>

<div style="clear:both;height:0px;width:100%;font-size:1px;">&nbsp;</div>

	<ul class="popupmenu_popup newspecialmenu" id="newspecial_menu" style="display: none">
		<li><a href="post.php?action=newthread&amp;fid=2&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">发新话题</a></li>		<li class="poll"><a href="post.php?action=newthread&amp;fid=2&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;special=1">发布投票</a></li>													</ul>
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

					<tbody id="normalthread_47508" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=47508&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_47508"><a href="viewthread.php?tid=47508&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">南京16岁女孩怀孕做人流  “5个爹”平摊医药费</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=13485">方鸿渐</a>
										</cite>
					<em>2010-5-28</em>
				</td>
				<td class="nums"><strong>35</strong> / <em>1387</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=47508&goto=lastpost#lastpost">2010-5-31 17:35</a></em>
					<cite>by <a href="space.php?username=%CB%BF%CB%BF%CD%C3">丝丝兔</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_48328" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=48328&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_48328"><a href="viewthread.php?tid=48328&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">新疆首次出现六月降暴雪 部分地区绝收</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2929">foxy</a>
										</cite>
					<em>2010-6-7</em>
				</td>
				<td class="nums"><strong>35</strong> / <em>724</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=48328&goto=lastpost#lastpost">2010-6-8 10:58</a></em>
					<cite>by <a href="space.php?username=liuopq">liuopq</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_48381" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=48381&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_48381"><a href="viewthread.php?tid=48381&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">中国取得量子态隐形传输技术突破 超时空穿越或实现</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2117">瘟酒吧</a>
										</cite>
					<em>2010-6-7</em>
				</td>
				<td class="nums"><strong>35</strong> / <em>761</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=48381&goto=lastpost#lastpost">2010-6-8 19:41</a></em>
					<cite>by <a href="space.php?username=%D1%EE%C4%E1%BF%CB">杨尼克</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_49003" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=49003&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_49003"><a href="viewthread.php?tid=49003&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">韩国网民提议架设“金正日喇叭”</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1157">bester89</a>
										</cite>
					<em>2010-6-10</em>
				</td>
				<td class="nums"><strong>35</strong> / <em>743</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=49003&goto=lastpost#lastpost">2010-6-11 19:26</a></em>
					<cite>by <a href="space.php?username=nkpoper">nkpoper</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_50435" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=50435&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_50435"><a href="viewthread.php?tid=50435&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">拟建国际化都市 西安要求半数市民会说英文懂普希金</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=9737">剁辣椒</a>
										</cite>
					<em>2010-6-22</em>
				</td>
				<td class="nums"><strong>35</strong> / <em>463</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=50435&goto=lastpost#lastpost">2010-6-24 16:47</a></em>
					<cite>by <a href="space.php?username=%C0%CF%CD%CF">老拖</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_52001" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=52001&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_52001"><a href="viewthread.php?tid=52001&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">不忍妻子遭罪 丈夫将病妻活埋</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4570">我卖糕的</a>
										</cite>
					<em>2010-7-7</em>
				</td>
				<td class="nums"><strong>35</strong> / <em>627</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=52001&goto=lastpost#lastpost">2010-7-11 16:14</a></em>
					<cite>by <a href="space.php?username=%D1%D5%C9%DB%D4%A8">颜邵渊</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_53284" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=53284&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_53284"><a href="viewthread.php?tid=53284&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">北京普通家庭25年收入能买一套房</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2071">上肛上腺</a>
										</cite>
					<em>2010-7-18</em>
				</td>
				<td class="nums"><strong>35</strong> / <em>545</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=53284&goto=lastpost#lastpost">2010-7-21 11:16</a></em>
					<cite>by <a href="space.php?username=fanqiangsanhao">fanqiangsanhao</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_3363" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=3363&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_3363"><a href="viewthread.php?tid=3363&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">10个漂亮的中国男人</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2382">绝对靠谱</a>
										</cite>
					<em>2009-1-14</em>
				</td>
				<td class="nums"><strong>35</strong> / <em>484</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=3363&goto=lastpost#lastpost">2009-1-17 13:25</a></em>
					<cite>by <a href="space.php?username=gjlawyer">gjlawyer</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_5030" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=5030&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_5030"><a href="viewthread.php?tid=5030&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">2月15日上海地铁裸奔事件</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1661">ne_ne6</a>
										</cite>
					<em>2009-2-18</em>
				</td>
				<td class="nums"><strong>35</strong> / <em>747</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=5030&goto=lastpost#lastpost">2009-2-18 21:08</a></em>
					<cite>by <a href="space.php?username=fffan">fffan</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_577" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=577&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_577"><a href="viewthread.php?tid=577&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">新“二十三条”再现 邓“一国两制”说正式破产</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7">张书记</a>
										</cite>
					<em>2008-10-20</em>
				</td>
				<td class="nums"><strong>35</strong> / <em>1755</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=577&goto=lastpost#lastpost">2009-2-27 13:50</a></em>
					<cite>by <a href="space.php?username=%D7%EF%B6%F1%D6%AE%B3%C7">罪恶之城</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_5868" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=5868&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_5868"><a href="viewthread.php?tid=5868&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">三女强奸一男至精尽人险亡</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2719">gyakuden</a>
										</cite>
					<em>2009-2-27</em>
				</td>
				<td class="nums"><strong>35</strong> / <em>856</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=5868&goto=lastpost#lastpost">2009-2-28 08:42</a></em>
					<cite>by <a href="space.php?username=%CB%D5%B5%A4%BA%EA">苏丹宏</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_17372" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=17372&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_17372"><a href="viewthread.php?tid=17372&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">成都下令：日全食时不得加油喝彩</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4638">江湖席</a>
										</cite>
					<em>2009-7-21</em>
				</td>
				<td class="nums"><strong>35</strong> / <em>1269</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=17372&goto=lastpost#lastpost">2009-7-22 09:45</a></em>
					<cite>by <a href="space.php?username=%DA%A4%D8%AE">冥禺</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_17622" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=17622&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_17622"><a href="viewthread.php?tid=17622&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">大学美女相信做爱驱魔 被骗财又骗色</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7277">一向低调</a>
										</cite>
					<em>2009-7-23</em>
				</td>
				<td class="nums"><strong>35</strong> / <em>1177</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=17622&goto=lastpost#lastpost">2009-7-24 15:25</a></em>
					<cite>by <a href="space.php?username=simatong">simatong</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_17289" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=17289&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_17289"><a href="viewthread.php?tid=17289&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">追悼会上北大神秘女突然大喊：钱文忠要偷季老的乌龟</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6115">whatcow</a>
										</cite>
					<em>2009-7-20</em>
				</td>
				<td class="nums"><strong>35</strong> / <em>1548</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=17289&goto=lastpost#lastpost">2009-7-25 21:37</a></em>
					<cite>by <a href="space.php?username=whatcow">whatcow</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_18279" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=18279&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_18279"><a href="viewthread.php?tid=18279&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">新词汇 盒谐</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5310">darkwanderer</a>
										</cite>
					<em>2009-7-30</em>
				</td>
				<td class="nums"><strong>35</strong> / <em>904</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=18279&goto=lastpost#lastpost">2009-7-31 11:47</a></em>
					<cite>by <a href="space.php?username=%B2%BB%BE%B4%C9%F1%B5%C4YODA">不敬神的YODA</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_18706" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=18706&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_18706"><a href="viewthread.php?tid=18706&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">CCAV7的军事解说让皇军泪流满面</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5464">上海帅哥</a>
										</cite>
					<em>2009-8-4</em>
				</td>
				<td class="nums"><strong>35</strong> / <em>1191</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=18706&goto=lastpost#lastpost">2009-8-5 17:05</a></em>
					<cite>by <a href="space.php?username=%D7%A8%D2%B5%CE%A7%B9%DB">专业围观</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_18811" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=18811&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_18811"><a href="viewthread.php?tid=18811&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">一周图片新闻集萃09.8.3-8.9</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2232">老杂疫</a>
										</cite>
					<em>2009-8-5</em>
				</td>
				<td class="nums"><strong>35</strong> / <em>883</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=18811&goto=lastpost#lastpost">2009-8-8 10:18</a></em>
					<cite>by <a href="space.php?username=%D0%E4%CA%D6%BF%B4%C8%C8%C4%D6">袖手看热闹</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_19392" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=19392&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_19392"><a href="viewthread.php?tid=19392&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">环球网：87%的中国网民要求抵制赴澳旅游和留学</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5464">上海帅哥</a>
										</cite>
					<em>2009-8-11</em>
				</td>
				<td class="nums"><strong>35</strong> / <em>544</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=19392&goto=lastpost#lastpost">2009-8-12 09:43</a></em>
					<cite>by <a href="space.php?username=ktzkcn">ktzkcn</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_19968" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=19968&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_19968"><a href="viewthread.php?tid=19968&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">中华民国停办今年国庆，全力救灾</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7920">路边社前台妹</a>
										</cite>
					<em>2009-8-18</em>
				</td>
				<td class="nums"><strong>35</strong> / <em>691</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=19968&goto=lastpost#lastpost">2009-8-19 15:24</a></em>
					<cite>by <a href="space.php?username=iridiumcao">iridiumcao</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_19926" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=19926&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_19926"><a href="viewthread.php?tid=19926&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">西安77岁老太申请入党60年终获批</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1770">nustbobo</a>
										</cite>
					<em>2009-8-17</em>
				</td>
				<td class="nums"><strong>35</strong> / <em>501</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=19926&goto=lastpost#lastpost">2009-8-20 13:40</a></em>
					<cite>by <a href="space.php?username=glim">glim</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_20330" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=20330&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_20330"><a href="viewthread.php?tid=20330&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">天朝网络新闻检查方面世界领先 美帝居心破坏</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4570">我卖糕的</a>
										</cite>
					<em>2009-8-18</em>
				</td>
				<td class="nums"><strong>35</strong> / <em>1402</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=20330&goto=lastpost#lastpost">2009-8-22 20:13</a></em>
					<cite>by <a href="space.php?username=Phillip">Phillip</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_20222" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=20222&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_20222"><a href="viewthread.php?tid=20222&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">各位童鞋，你们当地的最高头头都住什么样的房子啊？</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3289">旺财是条狗</a>
										</cite>
					<em>2009-8-20</em>
				</td>
				<td class="nums"><strong>35</strong> / <em>773</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=20222&goto=lastpost#lastpost">2009-8-23 23:21</a></em>
					<cite>by <a href="space.php?username=%C9%A2%B9%E2">散光</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_21026" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=21026&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_21026"><a href="viewthread.php?tid=21026&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">沪指重挫跌逾5%逼近2700</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7">张书记</a>
										</cite>
					<em>2009-8-31</em>
				</td>
				<td class="nums"><strong>35</strong> / <em>616</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=21026&goto=lastpost#lastpost">2009-9-1 18:13</a></em>
					<cite>by <a href="space.php?username=douz">douz</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_40074" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=40074&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_40074"><a href="viewthread.php?tid=40074&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">中共发表《2009年美国的人权纪录》</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7771">照顾好你</a>
										</cite>
					<em>2010-3-12</em>
				</td>
				<td class="nums"><strong>35</strong> / <em>650</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=40074&goto=lastpost#lastpost">2010-3-14 00:03</a></em>
					<cite>by <a href="space.php?username=%CE%B4%C0%B4%CB%FB%C0%CF%B0%D6">未来他老爸</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_40775" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=40775&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_40775"><a href="viewthread.php?tid=40775&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">浙江一公民建议温家宝总理带头公布个人资产</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=9991">duck_1984</a>
										</cite>
					<em>2010-3-20</em>
				</td>
				<td class="nums"><strong>35</strong> / <em>1088</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=40775&goto=lastpost#lastpost">2010-3-21 16:08</a></em>
					<cite>by <a href="space.php?username=xiong13">xiong13</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_40887" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=40887&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_40887"><a href="viewthread.php?tid=40887&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">真理部最新指令：各网删除“山西问题疫苗”报道</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=11971">john52712</a>
										</cite>
					<em>2010-3-21</em>
				</td>
				<td class="nums"><strong>35</strong> / <em>1110</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=40887&goto=lastpost#lastpost">2010-3-22 22:24</a></em>
					<cite>by <a href="space.php?username=%B7%BD%D2%CA%C3%F9">方沂鸣</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_40837" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=40837&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_40837"><a href="viewthread.php?tid=40837&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">朝鲜手机全部中国制造 输入领袖名字自动加粗</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4570">我卖糕的</a>
										</cite>
					<em>2010-3-21</em>
				</td>
				<td class="nums"><strong>35</strong> / <em>764</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=40837&goto=lastpost#lastpost">2010-3-23 11:58</a></em>
					<cite>by <a href="space.php?username=bioada11">bioada11</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_40911" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=40911&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_40911"><a href="viewthread.php?tid=40911&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">真理部最新指令：封堵《透视中国》等信息</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5928">佐佐鼬鼬</a>
										</cite>
					<em>2010-3-22</em>
				</td>
				<td class="nums"><strong>35</strong> / <em>1714</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=40911&goto=lastpost#lastpost">2010-3-24 02:55</a></em>
					<cite>by <a href="space.php?username=jiajia-mail">jiajia-mail</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_41371" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=41371&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_41371"><a href="viewthread.php?tid=41371&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">武汉拟填东湖450亩水面建酒店</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6725">康宁</a>
										</cite>
					<em>2010-3-26</em>
				</td>
				<td class="nums"><strong>35</strong> / <em>499</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=41371&goto=lastpost#lastpost">2010-3-27 23:26</a></em>
					<cite>by <a href="space.php?username=bengle">bengle</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_43424" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=43424&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_43424"><a href="viewthread.php?tid=43424&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传，江南大学澡堂使用炼钢废水食堂供应陈化粮</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7">张书记</a>
										</cite>
					<em>2010-4-18</em>
				</td>
				<td class="nums"><strong>35</strong> / <em>921</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=43424&goto=lastpost#lastpost">2010-4-19 18:04</a></em>
					<cite>by <a href="space.php?username=%D7%F3%B0%B6%A1%FB%D3%D2%B0%B6">左岸←右岸</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_44247" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=44247&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_44247"><a href="viewthread.php?tid=44247&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">重庆作家透露薄熙来与铁凝谈话内容</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5588">我家旺财有喜了</a>
										</cite>
					<em>2010-4-27</em>
				</td>
				<td class="nums"><strong>35</strong> / <em>1652</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=44247&goto=lastpost#lastpost">2010-4-28 22:00</a></em>
					<cite>by <a href="space.php?username=%C9%B3%D3%E6%B1%F9">沙渔冰</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_44500" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=44500&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_44500"><a href="viewthread.php?tid=44500&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">真理部最新指令：不报道“袭童案”</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7">张书记</a>
										</cite>
					<em>2010-4-30</em>
				</td>
				<td class="nums"><strong>35</strong> / <em>959</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=44500&goto=lastpost#lastpost">2010-5-1 19:27</a></em>
					<cite>by <a href="space.php?username=%D0%FB%CD%B3">宣统</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_45104" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=45104&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_45104"><a href="viewthread.php?tid=45104&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">世博会日本馆不升国旗</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4587">萨格拉斯</a>
										</cite>
					<em>2010-5-7</em>
				</td>
				<td class="nums"><strong>35</strong> / <em>1156</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=45104&goto=lastpost#lastpost">2010-5-9 11:21</a></em>
					<cite>by <a href="space.php?username=%B8%A1%D4%C6">浮云</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_45454" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=45454&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_45454"><a href="viewthread.php?tid=45454&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">国外著名网络存储服务Dropbox被中共封锁</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=10027">wuzhiwo</a>
										</cite>
					<em>2010-5-10</em>
				</td>
				<td class="nums"><strong>35</strong> / <em>1270</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=45454&goto=lastpost#lastpost">2010-5-12 22:31</a></em>
					<cite>by <a href="space.php?username=forever1983">forever1983</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_45513" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=45513&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_45513"><a href="viewthread.php?tid=45513&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">港媒刊文治权不能落在西方代理人手上</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3202">glim</a>
										</cite>
					<em>2010-5-11</em>
				</td>
				<td class="nums"><strong>35</strong> / <em>732</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=45513&goto=lastpost#lastpost">2010-5-13 10:42</a></em>
					<cite>by <a href="space.php?username=%CC%AB%B1%E4">太变</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_45624" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=45624&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_45624"><a href="viewthread.php?tid=45624&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">福建规定教师在课堂散布严重错误言论将被解聘</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4647">offacer</a>
										</cite>
					<em>2010-5-12</em>
				</td>
				<td class="nums"><strong>35</strong> / <em>745</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=45624&goto=lastpost#lastpost">2010-5-13 18:48</a></em>
					<cite>by <a href="space.php?username=zhongyan">zhongyan</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_45843" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=45843&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_45843"><a href="viewthread.php?tid=45843&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">赵本山起诉谷歌利用肖像侵权 索赔405万元</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2907">无言的山丘</a>
										</cite>
					<em>2010-5-14</em>
				</td>
				<td class="nums"><strong>35</strong> / <em>1023</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=45843&goto=lastpost#lastpost">2010-5-16 10:10</a></em>
					<cite>by <a href="space.php?username=%B2%C9%D2%A9">采药</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_45284" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=45284&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_45284"><a href="viewthread.php?tid=45284&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">河南大蒜暴涨100倍超猪肉价格</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=852">未来他老爸</a>
										</cite>
					<em>2010-5-9</em>
				</td>
				<td class="nums"><strong>35</strong> / <em>825</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=45284&goto=lastpost#lastpost">2010-5-16 12:34</a></em>
					<cite>by <a href="space.php?username=forever1983">forever1983</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_46279" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=46279&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_46279"><a href="viewthread.php?tid=46279&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传北京日报社社长梅宁华举报袁腾飞</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2160">浣尘</a>
										</cite>
					<em>2010-5-17</em>
				</td>
				<td class="nums"><strong>35</strong> / <em>1577</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=46279&goto=lastpost#lastpost">2010-5-21 14:22</a></em>
					<cite>by <a href="space.php?username=%87%E5%CD%DE%B5%C4%CC%EC%BF%D5">囧娃的天空</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_46715" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=46715&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_46715"><a href="viewthread.php?tid=46715&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">公民在新华社上海分社下跪抗议集资诈骗</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=10890">xiaohe1120</a>
										</cite>
					<em>2010-5-22</em>
				</td>
				<td class="nums"><strong>35</strong> / <em>1055</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=46715&goto=lastpost#lastpost">2010-5-23 20:35</a></em>
					<cite>by <a href="space.php?username=mmikez">mmikez</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_46669" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=46669&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_46669"><a href="viewthread.php?tid=46669&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传山西煤老板用20万1元纸币付饭钱</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2311">空空追梦</a>
										</cite>
					<em>2010-5-22</em>
				</td>
				<td class="nums"><strong>35</strong> / <em>923</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=46669&goto=lastpost#lastpost">2010-5-24 17:48</a></em>
					<cite>by <a href="space.php?username=%B2%BB%D0%E2%B8%D6%C0%CF%CA%F3">不锈钢老鼠</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_46384" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=46384&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_46384"><a href="viewthread.php?tid=46384&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">山东日照现役军人遭党支部书记暴力袭击</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=13703">feng1105</a>
										</cite>
					<em>2010-5-19</em>
				</td>
				<td class="nums"><strong>35</strong> / <em>1188</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=46384&goto=lastpost#lastpost">2010-5-25 01:15</a></em>
					<cite>by <a href="space.php?username=CCAV">CCAV</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_6908" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=6908&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_6908"><a href="viewthread.php?tid=6908&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">开放二胎新宇“首当其生” 郡主毛甜甜即将降生</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1413">马克西</a>
										</cite>
					<em>2009-3-11</em>
				</td>
				<td class="nums"><strong>35</strong> / <em>1049</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=6908&goto=lastpost#lastpost">2009-3-14 00:51</a></em>
					<cite>by <a href="space.php?username=%D0%A1%E5%B7%E5%B7">小宸宸</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_6837" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=6837&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_6837"><a href="viewthread.php?tid=6837&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">《凤凰周刊》：为洗清负面形象 政府耗资450亿与外媒争话语权</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=22">abu</a>
										</cite>
					<em>2009-3-11</em>
				</td>
				<td class="nums"><strong>35</strong> / <em>783</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=6837&goto=lastpost#lastpost">2009-3-14 03:16</a></em>
					<cite>by <a href="space.php?username=%B4%F3%C8%CB%A3%AC%D3%D0%D0%D8%C6%F7">大人，有胸器</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_6952" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=6952&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_6952"><a href="viewthread.php?tid=6952&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">中国封杀WOW资料片《巫妖王之怒》</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5218">billconan</a>
										</cite>
					<em>2009-3-13</em>
				</td>
				<td class="nums"><strong>35</strong> / <em>837</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=6952&goto=lastpost#lastpost">2009-3-18 14:22</a></em>
					<cite>by <a href="space.php?username=nec_hero">nec_hero</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_3438" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=3438&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_3438"><a href="viewthread.php?tid=3438&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">如何和非主流上床之物美价廉SEX手册</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=464">Phillip</a>
										</cite>
					<em>2009-1-15</em>
				</td>
				<td class="nums"><strong>35</strong> / <em>1225</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=3438&goto=lastpost#lastpost">2009-3-23 20:39</a></em>
					<cite>by <a href="space.php?username=blueglen">blueglen</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_7773" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=7773&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_7773"><a href="viewthread.php?tid=7773&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">达赖嫡系子孙在镐京被中原人砍死</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4587">萨格拉斯</a>
										</cite>
					<em>2009-3-25</em>
				</td>
				<td class="nums"><strong>35</strong> / <em>716</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=7773&goto=lastpost#lastpost">2009-3-25 19:22</a></em>
					<cite>by <a href="space.php?username=ne_ne6">ne_ne6</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_7796" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=7796&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_7796"><a href="viewthread.php?tid=7796&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">北京普通市民参选下届国家主席</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2770">蟹帅</a>
										</cite>
					<em>2009-3-25</em>
				</td>
				<td class="nums"><strong>35</strong> / <em>760</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=7796&goto=lastpost#lastpost">2009-3-26 14:42</a></em>
					<cite>by <a href="space.php?username=zun">zun</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_8626" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=8626&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_8626"><a href="viewthread.php?tid=8626&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">终于研究出一个发大财的方法，都来合计合计</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2241">阿文强</a>
										</cite>
					<em>2009-4-8</em>
				</td>
				<td class="nums"><strong>35</strong> / <em>707</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=8626&goto=lastpost#lastpost">2009-4-10 09:01</a></em>
					<cite>by <a href="space.php?username=raul1943">raul1943</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_9160" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=9160&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_9160"><a href="viewthread.php?tid=9160&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">金二也吃了藏秘排油么？</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3838">IP黨精神領袖</a>
										</cite>
					<em>2009-3-20</em>
				</td>
				<td class="nums"><strong>35</strong> / <em>921</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=9160&goto=lastpost#lastpost">2009-4-16 18:28</a></em>
					<cite>by <a href="space.php?username=%CE%B4%C0%B4%CB%FB%C0%CF%B0%D6">未来他老爸</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_6896" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=6896&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_6896"><a href="viewthread.php?tid=6896&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">前政协副主席：老百姓为什么不公布财产？</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2719">gyakuden</a>
										</cite>
					<em>2009-3-10</em>
				</td>
				<td class="nums"><strong>34</strong> / <em>963</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=6896&goto=lastpost#lastpost">2009-3-12 12:02</a></em>
					<cite>by <a href="space.php?username=%CE%ED%B7%E7">雾风</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_6741" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=6741&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_6741"><a href="viewthread.php?tid=6741&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">Hot！军旅界连续打榜N周至尊单曲</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=85">王五毛</a>
										</cite>
					<em>2009-3-10</em>
				</td>
				<td class="nums"><strong>34</strong> / <em>731</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=6741&goto=lastpost#lastpost">2009-3-17 15:44</a></em>
					<cite>by <a href="space.php?username=abcbabc">abcbabc</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_7168" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=7168&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_7168"><a href="viewthread.php?tid=7168&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">日本主持人严重的伤害了刘军歌的爱国感情……</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4125">吃河蟹的草泥馬</a>
										</cite>
					<em>2009-3-13</em>
				</td>
				<td class="nums"><strong>34</strong> / <em>868</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=7168&goto=lastpost#lastpost">2009-3-24 15:10</a></em>
					<cite>by <a href="space.php?username=Candice">Candice</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_7419" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=7419&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_7419"><a href="viewthread.php?tid=7419&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">茅于轼：廉租房不设厕所 可以防止富人购买</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3895">nozturn</a>
										</cite>
					<em>2009-3-19</em>
				</td>
				<td class="nums"><strong>34</strong> / <em>560</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=7419&goto=lastpost#lastpost">2009-3-24 19:44</a></em>
					<cite>by <a href="space.php?username=askboy">askboy</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_7828" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=7828&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_7828"><a href="viewthread.php?tid=7828&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">新建了一个神兽：毒豺</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4751">anonymous</a>
										</cite>
					<em>2009-3-10</em>
				</td>
				<td class="nums"><strong>34</strong> / <em>903</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=7828&goto=lastpost#lastpost">2009-3-25 22:45</a></em>
					<cite>by <a href="space.php?username=%B9%C3%C4%EF">姑娘</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_7680" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=7680&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_7680"><a href="viewthread.php?tid=7680&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">前民运领袖之一的Twitter</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2471">男魅难寐</a>
										</cite>
					<em>2009-3-23</em>
				</td>
				<td class="nums"><strong>34</strong> / <em>942</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=7680&goto=lastpost#lastpost">2009-3-25 22:50</a></em>
					<cite>by <a href="space.php?username=%B9%C3%C4%EF">姑娘</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_7439" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=7439&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_7439"><a href="viewthread.php?tid=7439&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">影帝演累了</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1121">小荷1120</a>
										</cite>
					<em>2009-3-19</em>
				</td>
				<td class="nums"><strong>34</strong> / <em>1115</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=7439&goto=lastpost#lastpost">2009-3-26 23:59</a></em>
					<cite>by <a href="space.php?username=mayflower">mayflower</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_55920" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=55920&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_55920"><a href="viewthread.php?tid=55920&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">真理部最新指令：不报道新疆阿克苏爆炸和湖北武穴案</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2472">Noel</a>
										</cite>
					<em>2010-8-19</em>
				</td>
				<td class="nums"><strong>34</strong> / <em>1076</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=55920&goto=lastpost#lastpost">2010-8-21 16:32</a></em>
					<cite>by <a href="space.php?username=Noel">Noel</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_55893" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=55893&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_55893"><a href="viewthread.php?tid=55893&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">法国蒙彼利埃市将为列宁毛泽东等树碑立像</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2202">ccjing123</a>
										</cite>
					<em>2010-8-19</em>
				</td>
				<td class="nums"><strong>34</strong> / <em>636</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=55893&goto=lastpost#lastpost">2010-8-23 14:02</a></em>
					<cite>by <a href="space.php?username=%C0%B0%D4%C2%D8%A5%B0%CB">腊月廿八</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_56400" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=56400&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_56400"><a href="viewthread.php?tid=56400&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">北京地铁一号线发生爆炸</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=17927">nik10000</a>
										</cite>
					<em>2010-8-25</em>
				</td>
				<td class="nums"><strong>34</strong> / <em>1970</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=56400&goto=lastpost#lastpost">2010-8-26 21:26</a></em>
					<cite>by <a href="space.php?username=calmwool">calmwool</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_56462" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=56462&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_56462"><a href="viewthread.php?tid=56462&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">诺基亚N8发布会直播A片</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=14112">ClutchBear</a>
										</cite>
					<em>2010-8-25</em>
				</td>
				<td class="nums"><strong>34</strong> / <em>1863</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=56462&goto=lastpost#lastpost">2010-8-27 15:20</a></em>
					<cite>by <a href="space.php?username=huifox">huifox</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_56658" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=56658&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_56658"><a href="viewthread.php?tid=56658&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">李敖参观世博并题字</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2907">无言的山丘</a>
										</cite>
					<em>2010-8-28</em>
				</td>
				<td class="nums"><strong>34</strong> / <em>667</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=56658&goto=lastpost#lastpost">2010-8-30 12:58</a></em>
					<cite>by <a href="space.php?username=zzgg">zzgg</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_49986" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=49986&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_49986"><a href="viewthread.php?tid=49986&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">《新周刊》遭遇审查被“撕页”</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=9991">duck_1984</a>
										</cite>
					<em>2010-6-19</em>
				</td>
				<td class="nums"><strong>34</strong> / <em>1988</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=49986&goto=lastpost#lastpost">2010-8-30 17:12</a></em>
					<cite>by <a href="space.php?username=panbin">panbin</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_56673" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=56673&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_56673"><a href="viewthread.php?tid=56673&amp;extra=page%3D45%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">章子怡余秋雨成龙受邀为中学生讲&quot;开学第一课&quot;</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=803">weke</a>
										</cite>
					<em>2010-8-28</em>
				</td>
				<td class="nums"><strong>34</strong> / <em>612</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=56673&goto=lastpost#lastpost">2010-9-3 16:15</a></em>
					<cite>by <a href="space.php?username=%B2%BB%CE%F1%D5%FD%D2%B5">不务正业</a></cite>
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
	<div class="pages"><em>&nbsp;22278&nbsp;</em><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=1" class="first">1 ...</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=44" class="prev">&lsaquo;&lsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=43">43</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=44">44</a><strong>45</strong><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=46">46</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=47">47</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=48">48</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=49">49</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=50">50</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=51">51</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=52">52</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=46" class="next">&rsaquo;&rsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=349" class="last">... 349</a><kbd><input type="text" name="custompage" size="3" onkeydown="if(event.keyCode==13) {window.location='forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page='+this.value; return false;}" /></kbd></div>	</div>

  
	<div class="box">
			<span class="headactions"><a href="forumdisplay.php?fid=2&amp;page=45&amp;showoldetails=yes#online" class="nobdr"><img src="images/default/collapsed_yes.gif" alt="" /></a></span>
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
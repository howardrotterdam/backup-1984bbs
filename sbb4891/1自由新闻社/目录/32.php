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
			window.location = 'forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&page=31';
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
<div class="pages"><em>&nbsp;22278&nbsp;</em><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=1" class="first">1 ...</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=31" class="prev">&lsaquo;&lsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=30">30</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=31">31</a><strong>32</strong><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=33">33</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=34">34</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=35">35</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=36">36</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=37">37</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=38">38</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=39">39</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=33" class="next">&rsaquo;&rsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=349" class="last">... 349</a><kbd><input type="text" name="custompage" size="3" onkeydown="if(event.keyCode==13) {window.location='forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page='+this.value; return false;}" /></kbd></div></div>

<div style="float:left;border:1px solid #CCC; border-bottom:none;;width:218px; background: url(/imgs/1984radio.jpg) 200px 2px no-repeat;padding:5px 0 5px 12px;margin:0px 0 0 13px">

<p><b><a href="/radio/index.php" target="_blank">1984FM</a></b><br /><b><a href="https://voxli.com/1984bbs" target="_blank">1984Chat</a></b>&nbsp;</p> 
</div>

<div style="clear:both;height:0px;width:100%;font-size:1px;">&nbsp;</div>

	<ul class="popupmenu_popup newspecialmenu" id="newspecial_menu" style="display: none">
		<li><a href="post.php?action=newthread&amp;fid=2&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">发新话题</a></li>		<li class="poll"><a href="post.php?action=newthread&amp;fid=2&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;special=1">发布投票</a></li>													</ul>
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

					<tbody id="normalthread_39754" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=39754&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_39754"><a href="viewthread.php?tid=39754&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">《经济观察报》共同社论写手被炒 中宣部整顿媒体</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1408">becom</a>
										</cite>
					<em>2010-3-5</em>
				</td>
				<td class="nums"><strong>43</strong> / <em>1427</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=39754&goto=lastpost#lastpost">2010-3-10 11:57</a></em>
					<cite>by <a href="space.php?username=%D7%F3%B0%B6%A1%FB%D3%D2%B0%B6">左岸←右岸</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_39733" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=39733&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_39733"><a href="viewthread.php?tid=39733&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">东莞打工仔“一夫多妻”普遍</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8301">lqunl</a>
										</cite>
					<em>2010-3-9</em>
				</td>
				<td class="nums"><strong>43</strong> / <em>1437</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=39733&goto=lastpost#lastpost">2010-3-11 19:26</a></em>
					<cite>by <a href="space.php?username=hellowalle">hellowalle</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_22897" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=22897&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_22897"><a href="viewthread.php?tid=22897&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">快讯：北京上空大量铁翅膀飘过</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3932">magicbully</a>
										</cite>
					<em>2009-9-21</em>
				</td>
				<td class="nums"><strong>43</strong> / <em>952</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=22897&goto=lastpost#lastpost">2009-9-21 18:50</a></em>
					<cite>by <a href="space.php?username=Yhard">Yhard</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_24128" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=24128&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_24128"><a href="viewthread.php?tid=24128&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">民进党期望中国人民早日走出专制</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6314">hhbcl1414</a>
										</cite>
					<em>2009-10-2</em>
				</td>
				<td class="nums"><strong>43</strong> / <em>975</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=24128&goto=lastpost#lastpost">2009-10-12 01:13</a></em>
					<cite>by <a href="space.php?username=%BF%EC%C0%D6%C1%F7%C0%CB%BA%BA">快乐流浪汉</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_24983" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=24983&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_24983"><a href="viewthread.php?tid=24983&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">开国上将吕正操去世</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2495">深入裙中</a>
										</cite>
					<em>2009-10-13</em>
				</td>
				<td class="nums"><strong>43</strong> / <em>1136</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=24983&goto=lastpost#lastpost">2009-10-16 03:48</a></em>
					<cite>by <a href="space.php?username=%B4%F3%D0l%CD%F5%EF%88%B5%EA">大衛王飯店</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_25697" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=25697&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_25697"><a href="viewthread.php?tid=25697&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">内蒙古发生越狱事件</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4464">老驴快跑</a>
										</cite>
					<em>2009-10-18</em>
				</td>
				<td class="nums"><strong>43</strong> / <em>1232</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=25697&goto=lastpost#lastpost">2009-10-21 13:00</a></em>
					<cite>by <a href="space.php?username=%B3%AC%BC%B6%C2%F3%D1%BF%CC%C7">超级麦芽糖</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_25833" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=25833&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_25833"><a href="viewthread.php?tid=25833&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">爱国青年告诫当局：向海盗开火正中某些国家的奸计</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3432">lynnstar</a>
										</cite>
					<em>2009-10-21</em>
				</td>
				<td class="nums"><strong>43</strong> / <em>852</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=25833&goto=lastpost#lastpost">2009-10-23 23:48</a></em>
					<cite>by <a href="space.php?username=Jyamolmiry">Jyamolmiry</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_8014" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=8014&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_8014"><a href="viewthread.php?tid=8014&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">两广总督擅自放假 朝廷不悦引起反弹</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4570">我卖糕的</a>
										</cite>
					<em>2009-3-26</em>
				</td>
				<td class="nums"><strong>43</strong> / <em>1391</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=8014&goto=lastpost#lastpost">2009-3-29 16:58</a></em>
					<cite>by <a href="space.php?username=%B2%E8%C9%AB%B2%A3%C1%A7">茶色玻璃</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_8018" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=8018&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_8018"><a href="viewthread.php?tid=8018&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">爱国QQ青年愤怒揭发“地球一小时”活动的险恶用心</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=304">囧rz</a>
										</cite>
					<em>2009-3-28</em>
				</td>
				<td class="nums"><strong>43</strong> / <em>995</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=8018&goto=lastpost#lastpost">2009-3-31 10:12</a></em>
					<cite>by <a href="space.php?username=glim">glim</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_7958" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=7958&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_7958"><a href="viewthread.php?tid=7958&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">金融危机下中美基本物价比较</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4125">吃河蟹的草泥馬</a>
										</cite>
					<em>2009-3-27</em>
				</td>
				<td class="nums"><strong>43</strong> / <em>845</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=7958&goto=lastpost#lastpost">2009-3-31 12:44</a></em>
					<cite>by <a href="space.php?username=%C5%D3%B1%B4%B3%C7%CD%F6%C1%E9">庞贝城亡灵</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_8488" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=8488&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_8488"><a href="viewthread.php?tid=8488&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">温宝宝遭遇超有爱提问</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3889">zuoang</a>
										</cite>
					<em>2009-3-1</em>
				</td>
				<td class="nums"><strong>43</strong> / <em>2039</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=8488&goto=lastpost#lastpost">2009-4-7 14:22</a></em>
					<cite>by <a href="space.php?username=%BA%D3%D0%B7">河蟹</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_54711" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=54711&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_54711"><a href="viewthread.php?tid=54711&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">共军军演或通过QQ沟通基层指战员</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=16987">npchao</a>
										</cite>
					<em>2010-8-5</em>
				</td>
				<td class="nums"><strong>43</strong> / <em>1193</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=54711&goto=lastpost#lastpost">2010-8-8 18:01</a></em>
					<cite>by <a href="space.php?username=pandade">pandade</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_55056" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=55056&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_55056"><a href="viewthread.php?tid=55056&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">台学者称超50%台湾人内心支持“一国两制”</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6314">hhbcl1414</a>
										</cite>
					<em>2010-8-9</em>
				</td>
				<td class="nums"><strong>43</strong> / <em>563</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=55056&goto=lastpost#lastpost">2010-8-10 21:43</a></em>
					<cite>by <a href="space.php?username=Yhard">Yhard</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_54955" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=54955&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_54955"><a href="viewthread.php?tid=54955&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">圣元奶粉激素超标导致婴儿性早熟</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=803">weke</a>
										</cite>
					<em>2010-8-7</em>
				</td>
				<td class="nums"><strong>43</strong> / <em>751</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=54955&goto=lastpost#lastpost">2010-8-11 10:07</a></em>
					<cite>by <a href="space.php?username=chenkai8902">chenkai8902</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_55571" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=55571&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_55571"><a href="viewthread.php?tid=55571&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传广州冼村百姓不满强拆发生群体性事件</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1333">废种豆豉</a>
										</cite>
					<em>2010-8-13</em>
				</td>
				<td class="nums"><strong>43</strong> / <em>917</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=55571&goto=lastpost#lastpost">2010-8-16 14:52</a></em>
					<cite>by <a href="space.php?username=%C2%E6%CD%D5">骆驼</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_55844" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=55844&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_55844"><a href="viewthread.php?tid=55844&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">河南省委书记亲自乘公交体验交通</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=11814">河殇</a>
										</cite>
					<em>2010-8-18</em>
				</td>
				<td class="nums"><strong>43</strong> / <em>686</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=55844&goto=lastpost#lastpost">2010-8-21 13:28</a></em>
					<cite>by <a href="space.php?username=%C3%F7%D4%C2%D5%D5%BB%FD%D1%A9">明月照积雪</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_55892" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=55892&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_55892"><a href="viewthread.php?tid=55892&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">湖北省财政厅副厅长耍横推倒空姐致航班延误</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=11083">vincentshiyong</a>
										</cite>
					<em>2010-8-19</em>
				</td>
				<td class="nums"><strong>43</strong> / <em>1278</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=55892&goto=lastpost#lastpost">2010-8-21 13:52</a></em>
					<cite>by <a href="space.php?username=halfbogey">halfbogey</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_55783" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=55783&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_55783"><a href="viewthread.php?tid=55783&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">富士康发起誓师活动 员工举郭台铭像大游行</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=17613">prometheus</a>
										</cite>
					<em>2010-8-18</em>
				</td>
				<td class="nums"><strong>43</strong> / <em>867</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=55783&goto=lastpost#lastpost">2010-8-21 18:31</a></em>
					<cite>by <a href="space.php?username=sd759868">sd759868</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_56736" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=56736&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_56736"><a href="viewthread.php?tid=56736&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">调查组专家称伊春救援是航空史上的奇迹</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=12549">corndog</a>
										</cite>
					<em>2010-8-28</em>
				</td>
				<td class="nums"><strong>43</strong> / <em>958</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=56736&goto=lastpost#lastpost">2010-8-31 13:25</a></em>
					<cite>by <a href="space.php?username=Phillip">Phillip</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_57331" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=57331&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_57331"><a href="viewthread.php?tid=57331&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传呼和浩特市街上两人被杀</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=17847">大头sky</a>
										</cite>
					<em>2010-9-1</em>
				</td>
				<td class="nums"><strong>43</strong> / <em>1936</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=57331&goto=lastpost#lastpost">2010-9-4 06:47</a></em>
					<cite>by <a href="space.php?username=%B1%CC%C9%BD%C1%FA%D7%D3">碧山龙子</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_57062" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=57062&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_57062"><a href="viewthread.php?tid=57062&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">湖北省长李鸿忠撰文称要有听取逆耳之言的雅量</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2202">ccjing123</a>
										</cite>
					<em>2010-9-1</em>
				</td>
				<td class="nums"><strong>43</strong> / <em>824</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=57062&goto=lastpost#lastpost">2010-9-4 17:21</a></em>
					<cite>by <a href="space.php?username=%CE%DE%D3%EA%CE%DE%C7%E7">无雨无晴</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_57488" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=57488&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_57488"><a href="viewthread.php?tid=57488&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">深圳城管没收女摊贩车辆被围观致使交通瘫痪</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3696">frick</a>
										</cite>
					<em>2010-9-5</em>
				</td>
				<td class="nums"><strong>43</strong> / <em>1448</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=57488&goto=lastpost#lastpost">2010-9-8 03:13</a></em>
					<cite>by <a href="space.php?username=Leonhardt">Leonhardt</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_57650" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=57650&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_57650"><a href="viewthread.php?tid=57650&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">《南方日报》吁中共实行民主选举</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=12412">wangguoping</a>
										</cite>
					<em>2010-9-7</em>
				</td>
				<td class="nums"><strong>43</strong> / <em>1426</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=57650&goto=lastpost#lastpost">2010-9-8 17:48</a></em>
					<cite>by <a href="space.php?username=%B7%CB%C3%FB%C0%B2">匪名啦</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_58250" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=58250&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_58250"><a href="viewthread.php?tid=58250&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">二岁男孩麻疹疫苗后出现了严重高烧</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=18239">showchina</a>
										</cite>
					<em>2010-9-12</em>
				</td>
				<td class="nums"><strong>43</strong> / <em>926</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=58250&goto=lastpost#lastpost">2010-9-14 13:39</a></em>
					<cite>by <a href="space.php?username=%B7%E8%BA%CD%C9%D0">疯和尚</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_58778" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=58778&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_58778"><a href="viewthread.php?tid=58778&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">杭州某企业员工披露中秋发1.2万现金</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4570">我卖糕的</a>
										</cite>
					<em>2010-9-17</em>
				</td>
				<td class="nums"><strong>43</strong> / <em>1198</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=58778&goto=lastpost#lastpost">2010-9-19 09:13</a></em>
					<cite>by <a href="space.php?username=Pearly">Pearly</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_56523" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=56523&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_56523"><a href="viewthread.php?tid=56523&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">法国“第一夫人”对萨科齐进行”性软禁“</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8201">yijiubasi</a>
										</cite>
					<em>2010-8-26</em>
				</td>
				<td class="nums"><strong>43</strong> / <em>1873</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=56523&goto=lastpost#lastpost">2010-9-26 22:11</a></em>
					<cite>by <a href="space.php?username=matnux">matnux</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_27995" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=27995&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_27995"><a href="viewthread.php?tid=27995&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">世博会举办在即  上海市杀猫有奖</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=9038">hik</a>
										</cite>
					<em>2009-11-14</em>
				</td>
				<td class="nums"><strong>43</strong> / <em>695</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=27995&goto=lastpost#lastpost">2009-11-16 22:53</a></em>
					<cite>by <a href="space.php?username=scut">scut</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_29138" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=29138&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_29138"><a href="viewthread.php?tid=29138&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">林丹：运动员的性是国家的 受管制没有自主权</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4570">我卖糕的</a>
										</cite>
					<em>2009-11-26</em>
				</td>
				<td class="nums"><strong>43</strong> / <em>1437</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=29138&goto=lastpost#lastpost">2009-11-28 23:05</a></em>
					<cite>by <a href="space.php?username=jiagelengtu">jiagelengtu</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_29215" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=29215&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_29215"><a href="viewthread.php?tid=29215&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">因病自杀未遂被判刑</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=9505">旅行者</a>
										</cite>
					<em>2009-11-27</em>
				</td>
				<td class="nums"><strong>43</strong> / <em>1013</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=29215&goto=lastpost#lastpost">2009-12-1 23:17</a></em>
					<cite>by <a href="space.php?username=%B5%A5%CA%D6%B7%F6%C7%BD">单手扶墙</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_29857" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=29857&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_29857"><a href="viewthread.php?tid=29857&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">张纪中版悟空被压五指山造型</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2907">无言的山丘</a>
										</cite>
					<em>2009-12-4</em>
				</td>
				<td class="nums"><strong>43</strong> / <em>1298</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=29857&goto=lastpost#lastpost">2009-12-7 03:58</a></em>
					<cite>by <a href="space.php?username=yylbb78">yylbb78</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_30439" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=30439&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_30439"><a href="viewthread.php?tid=30439&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">《南方周末》被空降新主编</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6760">che</a>
										</cite>
					<em>2009-12-8</em>
				</td>
				<td class="nums"><strong>43</strong> / <em>1941</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=30439&goto=lastpost#lastpost">2009-12-15 14:52</a></em>
					<cite>by <a href="space.php?username=%B2%D3%B6%FB%B9%FE%B2%E9%CB%D5">灿尔哈查苏</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_31155" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=31155&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_31155"><a href="viewthread.php?tid=31155&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">联合早报网被墙</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3227">快乐流浪汉</a>
										</cite>
					<em>2009-12-14</em>
				</td>
				<td class="nums"><strong>43</strong> / <em>1111</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=31155&goto=lastpost#lastpost">2009-12-18 14:49</a></em>
					<cite>by <a href="space.php?username=%BF%EC%C0%D6%C1%F7%C0%CB%BA%BA">快乐流浪汉</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_31083" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=31083&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_31083"><a href="viewthread.php?tid=31083&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">一周图片新闻 12.14-12.20</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2232">老杂疫</a>
										</cite>
					<em>2009-12-14</em>
				</td>
				<td class="nums"><strong>43</strong> / <em>849</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=31083&goto=lastpost#lastpost">2009-12-18 16:44</a></em>
					<cite>by <a href="space.php?username=%C0%CF%D4%D3%D2%DF">老杂疫</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_31476" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=31476&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_31476"><a href="viewthread.php?tid=31476&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">CCTV：网游尾行online祸害祖国花朵</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2398">遥子</a>
										</cite>
					<em>2009-12-17</em>
				</td>
				<td class="nums"><strong>43</strong> / <em>1322</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=31476&goto=lastpost#lastpost">2009-12-27 12:23</a></em>
					<cite>by <a href="space.php?username=shysun">shysun</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_14597" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=14597&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_14597"><a href="viewthread.php?tid=14597&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">才上任两天，80后市长就学会让别人打伞了</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2973">free1989</a>
										</cite>
					<em>2009-6-23</em>
				</td>
				<td class="nums"><strong>43</strong> / <em>1013</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=14597&goto=lastpost#lastpost">2009-6-24 12:30</a></em>
					<cite>by <a href="space.php?username=pulpfictions">pulpfictions</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_14774" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=14774&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_14774"><a href="viewthread.php?tid=14774&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">王丹：审判刘晓波说明中国将进入新的历史时期</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2285">技工</a>
										</cite>
					<em>2009-6-25</em>
				</td>
				<td class="nums"><strong>43</strong> / <em>1069</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=14774&goto=lastpost#lastpost">2009-6-27 03:09</a></em>
					<cite>by <a href="space.php?username=Candice">Candice</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_14450" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=14450&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_14450"><a href="viewthread.php?tid=14450&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传，政治局内部在审查互联网问题上发生重大分歧</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=21">大仙儿</a>
										</cite>
					<em>2009-6-22</em>
				</td>
				<td class="nums"><strong>43</strong> / <em>1672</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=14450&goto=lastpost#lastpost">2009-6-28 17:07</a></em>
					<cite>by <a href="space.php?username=%D3%D0%C7%AE%BE%CD%D2%C6%C3%F1">有钱就移民</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_15083" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=15083&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_15083"><a href="viewthread.php?tid=15083&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">讨论：国内强劲媒体有多少？</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5464">上海帅哥</a>
										</cite>
					<em>2009-6-27</em>
				</td>
				<td class="nums"><strong>43</strong> / <em>751</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=15083&goto=lastpost#lastpost">2009-6-28 22:04</a></em>
					<cite>by <a href="space.php?username=%BB%C6%B0%A2%B9%B7">黄阿狗</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_15574" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=15574&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_15574"><a href="viewthread.php?tid=15574&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">海内外竖中指爱好者齐聚艾未未后花园</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1974">反面看书</a>
										</cite>
					<em>2009-7-2</em>
				</td>
				<td class="nums"><strong>43</strong> / <em>1387</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=15574&goto=lastpost#lastpost">2009-7-3 16:06</a></em>
					<cite>by <a href="space.php?username=dlb2825">dlb2825</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_15622" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=15622&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_15622"><a href="viewthread.php?tid=15622&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">真理部部长：意识形态面临多元威胁 急需大力管制互联网</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7">张书记</a>
										</cite>
					<em>2009-7-2</em>
				</td>
				<td class="nums"><strong>43</strong> / <em>1076</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=15622&goto=lastpost#lastpost">2009-7-5 23:03</a></em>
					<cite>by <a href="space.php?username=%CE%D2%C2%F4%B8%E2%B5%C4">我卖糕的</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_15775" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=15775&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_15775"><a href="viewthread.php?tid=15775&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">收买中国文人，每千字3500USD</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6314">hhbcl1414</a>
										</cite>
					<em>2009-7-4</em>
				</td>
				<td class="nums"><strong>43</strong> / <em>964</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=15775&goto=lastpost#lastpost">2009-7-6 17:29</a></em>
					<cite>by <a href="space.php?username=%CE%ED%B7%E7">雾风</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_16196" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=16196&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_16196"><a href="viewthread.php?tid=16196&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">7月7号晚21：00和乌市好朋友通话的消息</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5577">0.0</a>
										</cite>
					<em>2009-7-8</em>
				</td>
				<td class="nums"><strong>43</strong> / <em>1131</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=16196&goto=lastpost#lastpost">2009-7-9 16:00</a></em>
					<cite>by <a href="space.php?username=%CE%F7%C3%C5%B4%B5%C5%A3">西门吹牛</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_16498" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=16498&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_16498"><a href="viewthread.php?tid=16498&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">南京大学退休教授：要学习王震将军的做法</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2132">花想容</a>
										</cite>
					<em>2009-7-11</em>
				</td>
				<td class="nums"><strong>43</strong> / <em>914</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=16498&goto=lastpost#lastpost">2009-7-13 10:34</a></em>
					<cite>by <a href="space.php?username=nustbobo">nustbobo</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_48564" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=48564&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_48564"><a href="viewthread.php?tid=48564&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">高考日两名湖北学生自杀</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3202">glim</a>
										</cite>
					<em>2010-6-8</em>
				</td>
				<td class="nums"><strong>43</strong> / <em>859</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=48564&goto=lastpost#lastpost">2010-6-9 08:48</a></em>
					<cite>by <a href="space.php?username=bluesnow">bluesnow</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_50254" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=50254&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_50254"><a href="viewthread.php?tid=50254&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">韩媒称韩国祖先是日本武士鼻祖激怒日本网民</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=144">mfs0616</a>
										</cite>
					<em>2010-6-21</em>
				</td>
				<td class="nums"><strong>43</strong> / <em>773</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=50254&goto=lastpost#lastpost">2010-6-23 20:03</a></em>
					<cite>by <a href="space.php?username=%BB%FD%D3%F0%B3%C1%D6%DB">积羽沉舟</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_50794" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=50794&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_50794"><a href="viewthread.php?tid=50794&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">四川建领袖广场展示4位共和国领袖汉白玉雕塑</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2311">空空追梦</a>
										</cite>
					<em>2010-6-25</em>
				</td>
				<td class="nums"><strong>43</strong> / <em>687</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=50794&goto=lastpost#lastpost">2010-6-27 00:53</a></em>
					<cite>by <a href="space.php?username=%D3%D0%B9%D8%B2%BF%C3%C5">有关部门</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_50833" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=50833&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_50833"><a href="viewthread.php?tid=50833&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">吴冠中逝世</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5721">soplari</a>
										</cite>
					<em>2010-6-26</em>
				</td>
				<td class="nums"><strong>43</strong> / <em>1164</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=50833&goto=lastpost#lastpost">2010-6-28 11:00</a></em>
					<cite>by <a href="space.php?username=diovinci">diovinci</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_50838" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=50838&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_50838"><a href="viewthread.php?tid=50838&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">志愿军老兵欲重回朝鲜 月收入300无法成行</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4570">我卖糕的</a>
										</cite>
					<em>2010-6-26</em>
				</td>
				<td class="nums"><strong>43</strong> / <em>741</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=50838&goto=lastpost#lastpost">2010-6-29 01:56</a></em>
					<cite>by <a href="space.php?username=%B5%CD%CB%D7%D6%AE%B7%E7%F3%DD">低俗之风筝</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_51136" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=51136&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_51136"><a href="viewthread.php?tid=51136&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">美国两大抵押贷款巨头退市 中国数千亿债券或作废</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=10346">yollowpig</a>
										</cite>
					<em>2010-6-18</em>
				</td>
				<td class="nums"><strong>43</strong> / <em>1280</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=51136&goto=lastpost#lastpost">2010-6-30 22:26</a></em>
					<cite>by <a href="space.php?username=vookeno">vookeno</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_52620" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=52620&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_52620"><a href="viewthread.php?tid=52620&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">中国移动高管外逃 提前5年布局卷款过亿</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5415">LXS</a>
										</cite>
					<em>2010-7-11</em>
				</td>
				<td class="nums"><strong>43</strong> / <em>1455</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=52620&goto=lastpost#lastpost">2010-7-14 22:40</a></em>
					<cite>by <a href="space.php?username=%C0%CF%BE%C5">老九</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_40679" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=40679&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_40679"><a href="viewthread.php?tid=40679&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">宋祖德称章子怡男朋友患有艾滋病和羊角风</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8638">dark</a>
										</cite>
					<em>2010-3-19</em>
				</td>
				<td class="nums"><strong>43</strong> / <em>1014</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=40679&goto=lastpost#lastpost">2010-3-22 16:03</a></em>
					<cite>by <a href="space.php?username=askycake">askycake</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_40829" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=40829&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_40829"><a href="viewthread.php?tid=40829&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">韩国预测朝鲜进入体制崩溃末期</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8301">lqunl</a>
										</cite>
					<em>2010-3-21</em>
				</td>
				<td class="nums"><strong>43</strong> / <em>1271</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=40829&goto=lastpost#lastpost">2010-3-22 20:39</a></em>
					<cite>by <a href="space.php?username=%CE%B4%C0%B4%CB%FB%C0%CF%B0%D6">未来他老爸</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_41518" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=41518&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_41518"><a href="viewthread.php?tid=41518&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">早春三月再现身  太妃疑似又走光</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2495">深入裙中</a>
										</cite>
					<em>2010-3-27</em>
				</td>
				<td class="nums"><strong>43</strong> / <em>2289</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=41518&goto=lastpost#lastpost">2010-3-30 20:22</a></em>
					<cite>by <a href="space.php?username=CyberTime">CyberTime</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_42519" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=42519&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_42519"><a href="viewthread.php?tid=42519&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传，莆田市长张国胜今晨跳楼自杀</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5468">patheic</a>
										</cite>
					<em>2010-4-8</em>
				</td>
				<td class="nums"><strong>43</strong> / <em>1206</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=42519&goto=lastpost#lastpost">2010-4-9 23:42</a></em>
					<cite>by <a href="space.php?username=xieyun77">xieyun77</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_42930" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=42930&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_42930"><a href="viewthread.php?tid=42930&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">十三岁少女跳楼自杀 遗书称世界太丑</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=10890">xiaohe1120</a>
										</cite>
					<em>2010-4-13</em>
				</td>
				<td class="nums"><strong>43</strong> / <em>1007</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=42930&goto=lastpost#lastpost">2010-4-18 15:18</a></em>
					<cite>by <a href="space.php?username=%D2%BB%BE%C5%B0%CB%CE%E5">一九八五</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_43517" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=43517&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_43517"><a href="viewthread.php?tid=43517&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">北京长安街聚集300人欲游行</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7002">luugoo</a>
										</cite>
					<em>2010-4-19</em>
				</td>
				<td class="nums"><strong>43</strong> / <em>1751</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=43517&goto=lastpost#lastpost">2010-4-20 20:32</a></em>
					<cite>by <a href="space.php?username=luugoo">luugoo</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_43613" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=43613&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_43613"><a href="viewthread.php?tid=43613&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">央视5套宣布不播欧冠国米战巴萨 改播青海抗震</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4705">dreamingly</a>
										</cite>
					<em>2010-4-20</em>
				</td>
				<td class="nums"><strong>43</strong> / <em>1004</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=43613&goto=lastpost#lastpost">2010-4-22 02:43</a></em>
					<cite>by <a href="space.php?username=Leonhardt">Leonhardt</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_45913" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=45913&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_45913"><a href="viewthread.php?tid=45913&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">孟建柱：谁再袭击校园警方坚决开枪</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=852">未来他老爸</a>
										</cite>
					<em>2010-5-15</em>
				</td>
				<td class="nums"><strong>43</strong> / <em>911</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=45913&goto=lastpost#lastpost">2010-5-20 09:17</a></em>
					<cite>by <a href="space.php?username=%B4%F3%D0l%CD%F5%EF%88%B5%EA">大衛王飯店</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_47041" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=47041&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_47041"><a href="viewthread.php?tid=47041&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传新华社下午3点会发新购房以0.65收房产税</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=26">CNN派来的</a>
										</cite>
					<em>2010-5-25</em>
				</td>
				<td class="nums"><strong>43</strong> / <em>1450</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=47041&goto=lastpost#lastpost">2010-5-25 21:18</a></em>
					<cite>by <a href="space.php?username=SalvadorDali">SalvadorDali</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_9401" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=9401&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_9401"><a href="viewthread.php?tid=9401&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">东莞情色服务</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4977">adruich</a>
										</cite>
					<em>2009-4-20</em>
				</td>
				<td class="nums"><strong>43</strong> / <em>1722</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=9401&goto=lastpost#lastpost">2009-4-29 13:14</a></em>
					<cite>by <a href="space.php?username=zengyon">zengyon</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_10475" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=10475&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_10475"><a href="viewthread.php?tid=10475&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">婚庆车队，只能祝福不准人肉</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2071">上肛上腺</a>
										</cite>
					<em>2009-5-7</em>
				</td>
				<td class="nums"><strong>43</strong> / <em>1293</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=10475&goto=lastpost#lastpost">2009-5-12 13:09</a></em>
					<cite>by <a href="space.php?username=%BA%FA%D4%BB%D4%BB">胡曰曰</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_10790" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=10790&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_10790"><a href="viewthread.php?tid=10790&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">牛逼红小兵博客欣赏</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2428">xiahua</a>
										</cite>
					<em>2009-5-8</em>
				</td>
				<td class="nums"><strong>43</strong> / <em>1234</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=10790&goto=lastpost#lastpost">2009-5-13 11:41</a></em>
					<cite>by <a href="space.php?username=%CE%E5%B4%FA%CD%B7%C4%BF%CF%AE%BD%FC%C6%BF">五代头目袭近瓶</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_11403" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=11403&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_11403"><a href="viewthread.php?tid=11403&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">余秋雨：不准继续污辱中国人</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1413">马克西</a>
										</cite>
					<em>2009-5-20</em>
				</td>
				<td class="nums"><strong>43</strong> / <em>1162</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=11403&goto=lastpost#lastpost">2009-5-22 20:28</a></em>
					<cite>by <a href="space.php?username=%B4%F7%BC%D2%C0%CF%B0%D6">戴家老爸</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_11975" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=11975&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_11975"><a href="viewthread.php?tid=11975&amp;extra=page%3D32%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">因邓玉娇抗暴和周老虎案件 中科院研究员提请国家总理辞职</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1640">超级麦芽糖</a>
										</cite>
					<em>2009-5-27</em>
				</td>
				<td class="nums"><strong>43</strong> / <em>1042</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=11975&goto=lastpost#lastpost">2009-5-29 00:20</a></em>
					<cite>by <a href="space.php?username=YUAN">YUAN</a></cite>
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
	<div class="pages"><em>&nbsp;22278&nbsp;</em><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=1" class="first">1 ...</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=31" class="prev">&lsaquo;&lsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=30">30</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=31">31</a><strong>32</strong><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=33">33</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=34">34</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=35">35</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=36">36</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=37">37</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=38">38</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=39">39</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=33" class="next">&rsaquo;&rsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=349" class="last">... 349</a><kbd><input type="text" name="custompage" size="3" onkeydown="if(event.keyCode==13) {window.location='forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page='+this.value; return false;}" /></kbd></div>	</div>

  
	<div class="box">
			<span class="headactions"><a href="forumdisplay.php?fid=2&amp;page=32&amp;showoldetails=yes#online" class="nobdr"><img src="images/default/collapsed_yes.gif" alt="" /></a></span>
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
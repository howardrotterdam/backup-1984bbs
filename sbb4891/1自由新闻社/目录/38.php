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
			window.location = 'forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&page=37';
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
<div class="pages"><em>&nbsp;22278&nbsp;</em><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=1" class="first">1 ...</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=37" class="prev">&lsaquo;&lsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=36">36</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=37">37</a><strong>38</strong><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=39">39</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=40">40</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=41">41</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=42">42</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=43">43</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=44">44</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=45">45</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=39" class="next">&rsaquo;&rsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=349" class="last">... 349</a><kbd><input type="text" name="custompage" size="3" onkeydown="if(event.keyCode==13) {window.location='forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page='+this.value; return false;}" /></kbd></div></div>

<div style="float:left;border:1px solid #CCC; border-bottom:none;;width:218px; background: url(/imgs/1984radio.jpg) 200px 2px no-repeat;padding:5px 0 5px 12px;margin:0px 0 0 13px">

<p><b><a href="/radio/index.php" target="_blank">1984FM</a></b><br /><b><a href="https://voxli.com/1984bbs" target="_blank">1984Chat</a></b>&nbsp;</p> 
</div>

<div style="clear:both;height:0px;width:100%;font-size:1px;">&nbsp;</div>

	<ul class="popupmenu_popup newspecialmenu" id="newspecial_menu" style="display: none">
		<li><a href="post.php?action=newthread&amp;fid=2&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">发新话题</a></li>		<li class="poll"><a href="post.php?action=newthread&amp;fid=2&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;special=1">发布投票</a></li>													</ul>
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

					<tbody id="normalthread_51036" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=51036&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_51036"><a href="viewthread.php?tid=51036&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">青岛三名打工者“AA制”包下一名性服务从业者被抓</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3852">CyberTime</a>
										</cite>
					<em>2010-6-28</em>
				</td>
				<td class="nums"><strong>39</strong> / <em>1206</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=51036&goto=lastpost#lastpost">2010-6-30 09:22</a></em>
					<cite>by <a href="space.php?username=%C7%B1%BA%A3%B2%D8%D4%C6">潜海藏云</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_51249" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=51249&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_51249"><a href="viewthread.php?tid=51249&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">清洁工扫走地上包子遭打 打人者称包子系狗食</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6366">帅得很无奈</a>
										</cite>
					<em>2010-6-30</em>
				</td>
				<td class="nums"><strong>39</strong> / <em>467</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=51249&goto=lastpost#lastpost">2010-6-30 16:11</a></em>
					<cite>by <a href="space.php?username=%CC%A4%D1%A9%D1%B0%C3%B7">踏雪寻梅</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_51125" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=51125&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_51125"><a href="viewthread.php?tid=51125&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">因在微博发中宣部新闻指令 南都记者遭社内严重处分</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3352">刘偷</a>
										</cite>
					<em>2010-6-29</em>
				</td>
				<td class="nums"><strong>39</strong> / <em>2010</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=51125&goto=lastpost#lastpost">2010-7-3 16:27</a></em>
					<cite>by <a href="space.php?username=jswxy1">jswxy1</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_51605" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=51605&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_51605"><a href="viewthread.php?tid=51605&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">公民在世博会上身穿“敏感”T恤被强制没收</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=17127">perfect</a>
										</cite>
					<em>2010-7-3</em>
				</td>
				<td class="nums"><strong>39</strong> / <em>1766</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=51605&goto=lastpost#lastpost">2010-7-6 22:31</a></em>
					<cite>by <a href="space.php?username=%C9%F1%D6%DD%D6%AE%D7%D3">神州之子</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_51832" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=51832&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_51832"><a href="viewthread.php?tid=51832&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">中共开展第四次全国“严打”</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1258">路边社记者</a>
										</cite>
					<em>2010-7-5</em>
				</td>
				<td class="nums"><strong>39</strong> / <em>1011</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=51832&goto=lastpost#lastpost">2010-7-7 12:07</a></em>
					<cite>by <a href="space.php?username=%BC%CE%C3%C0%D3%C8">嘉美尤</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_51905" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=51905&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_51905"><a href="viewthread.php?tid=51905&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">哈佛教授：中国楼市即将崩溃 沉重打击银行业</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4570">我卖糕的</a>
										</cite>
					<em>2010-7-6</em>
				</td>
				<td class="nums"><strong>39</strong> / <em>1290</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=51905&goto=lastpost#lastpost">2010-7-7 18:37</a></em>
					<cite>by <a href="space.php?username=bilei911">bilei911</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_52198" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=52198&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_52198"><a href="viewthread.php?tid=52198&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">江西九江数千民众冲击镇政府 掀翻数十警车</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=14174">duzhqi</a>
										</cite>
					<em>2010-7-8</em>
				</td>
				<td class="nums"><strong>39</strong> / <em>1326</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=52198&goto=lastpost#lastpost">2010-7-10 23:40</a></em>
					<cite>by <a href="space.php?username=Loze">Loze</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_52324" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=52324&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_52324"><a href="viewthread.php?tid=52324&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">北京局长南京砸酒店殴店长 惊动市区两级纪委</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3202">glim</a>
										</cite>
					<em>2010-7-10</em>
				</td>
				<td class="nums"><strong>39</strong> / <em>1332</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=52324&goto=lastpost#lastpost">2010-7-11 09:07</a></em>
					<cite>by <a href="space.php?username=%CA%AA%C9%ED%CA%C2%D0%A1">湿身事小</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_52476" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=52476&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_52476"><a href="viewthread.php?tid=52476&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">台湾审议ECFA 立委拳打脚踢水杯垃圾桶满天飞</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7002">luugoo</a>
										</cite>
					<em>2010-7-9</em>
				</td>
				<td class="nums"><strong>39</strong> / <em>487</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=52476&goto=lastpost#lastpost">2010-7-11 17:42</a></em>
					<cite>by <a href="space.php?username=zdb666">zdb666</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_52381" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=52381&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_52381"><a href="viewthread.php?tid=52381&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">真理部最新指令：删除“中国已进入笨蛋社会”新闻专题</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2973">free1989</a>
										</cite>
					<em>2010-7-10</em>
				</td>
				<td class="nums"><strong>39</strong> / <em>2443</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=52381&goto=lastpost#lastpost">2010-7-14 17:49</a></em>
					<cite>by <a href="space.php?username=%CA%F3%B1%EA%CD%C1%B6%B9">鼠标土豆</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_52906" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=52906&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_52906"><a href="viewthread.php?tid=52906&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">各地党报竞相推出3D版  民众需戴有色眼镜翻阅看</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=9737">剁辣椒</a>
										</cite>
					<em>2010-7-15</em>
				</td>
				<td class="nums"><strong>39</strong> / <em>943</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=52906&goto=lastpost#lastpost">2010-7-17 10:04</a></em>
					<cite>by <a href="space.php?username=%C1%BC%C3%F1">良民</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_51712" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=51712&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_51712"><a href="viewthread.php?tid=51712&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">真理部最新指令：《三十年河东》《四手联弹》“下榜处理”</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5588">我家旺财有喜了</a>
										</cite>
					<em>2010-7-4</em>
				</td>
				<td class="nums"><strong>39</strong> / <em>1516</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=51712&goto=lastpost#lastpost">2010-7-17 14:55</a></em>
					<cite>by <a href="space.php?username=hannfonn">hannfonn</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_54596" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=54596&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_54596"><a href="viewthread.php?tid=54596&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">探险队称在土耳其发现诺亚方舟残骸</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5464">上海帅哥</a>
										</cite>
					<em>2010-4-28</em>
				</td>
				<td class="nums"><strong>39</strong> / <em>1101</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=54596&goto=lastpost#lastpost">2010-8-2 12:49</a></em>
					<cite>by <a href="space.php?username=daxigua888">daxigua888</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_17611" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=17611&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_17611"><a href="viewthread.php?tid=17611&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">女子与湖南衡东水电局长开房后猝死</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1770">nustbobo</a>
										</cite>
					<em>2009-7-23</em>
				</td>
				<td class="nums"><strong>39</strong> / <em>927</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=17611&goto=lastpost#lastpost">2009-7-24 03:29</a></em>
					<cite>by <a href="space.php?username=Rspell">Rspell</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_17895" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=17895&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_17895"><a href="viewthread.php?tid=17895&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">太祖的悲哀</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3202">glim</a>
										</cite>
					<em>2009-7-26</em>
				</td>
				<td class="nums"><strong>39</strong> / <em>1116</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=17895&goto=lastpost#lastpost">2009-7-27 19:04</a></em>
					<cite>by <a href="space.php?username=%D7%C6%D1%DB%A4%CESABER">灼眼のSABER</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_18488" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=18488&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_18488"><a href="viewthread.php?tid=18488&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">央视《新闻联播》有“新闻” 国家领导人新闻没出现</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6404">yylbb78</a>
										</cite>
					<em>2009-8-1</em>
				</td>
				<td class="nums"><strong>39</strong> / <em>1279</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=18488&goto=lastpost#lastpost">2009-8-4 12:55</a></em>
					<cite>by <a href="space.php?username=doggie">doggie</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_19047" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=19047&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_19047"><a href="viewthread.php?tid=19047&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">GoogleEarth坐标：北纬39度48分19.08秒，东经116度42分36.8秒</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1371">deathproof</a>
										</cite>
					<em>2009-8-7</em>
				</td>
				<td class="nums"><strong>39</strong> / <em>1210</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=19047&goto=lastpost#lastpost">2009-8-8 10:43</a></em>
					<cite>by <a href="space.php?username=hexiecollege">hexiecollege</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_19656" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=19656&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_19656"><a href="viewthread.php?tid=19656&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">好五倍案例：新生婴儿因无准生证被当死胎处理</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1258">路边社记者</a>
										</cite>
					<em>2009-8-14</em>
				</td>
				<td class="nums"><strong>39</strong> / <em>621</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=19656&goto=lastpost#lastpost">2009-8-16 23:47</a></em>
					<cite>by <a href="space.php?username=Diamond">Diamond</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_20488" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=20488&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_20488"><a href="viewthread.php?tid=20488&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">党的发言人诠释国庆主题：展示我国政治稳定 唱响共产党好</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2359">天翼</a>
										</cite>
					<em>2009-8-24</em>
				</td>
				<td class="nums"><strong>39</strong> / <em>800</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=20488&goto=lastpost#lastpost">2009-8-25 18:04</a></em>
					<cite>by <a href="space.php?username=owa73">owa73</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_20442" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=20442&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_20442"><a href="viewthread.php?tid=20442&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">真理部最新指令：微薄令胡温不安 各网禁止开发相关产品</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1258">路边社记者</a>
										</cite>
					<em>2009-8-24</em>
				</td>
				<td class="nums"><strong>39</strong> / <em>1601</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=20442&goto=lastpost#lastpost">2009-8-26 11:04</a></em>
					<cite>by <a href="space.php?username=%B4%F3%CF%E9%D4%C6">大祥云</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_26798" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=26798&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_26798"><a href="viewthread.php?tid=26798&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">两名炮手泄露我军实力……</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8301">lqunl</a>
										</cite>
					<em>2009-11-1</em>
				</td>
				<td class="nums"><strong>39</strong> / <em>1760</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=26798&goto=lastpost#lastpost">2009-11-4 20:12</a></em>
					<cite>by <a href="space.php?username=%B7%B9%CD%EB">饭碗</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_26869" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=26869&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_26869"><a href="viewthread.php?tid=26869&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">重庆75岁教授为涉黑富豪黎强辩护 否认黑社会</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8301">lqunl</a>
										</cite>
					<em>2009-11-1</em>
				</td>
				<td class="nums"><strong>39</strong> / <em>774</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=26869&goto=lastpost#lastpost">2009-11-4 21:56</a></em>
					<cite>by <a href="space.php?username=txj1984">txj1984</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_26233" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=26233&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_26233"><a href="viewthread.php?tid=26233&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">专家称三峡跟中下游干涸没有关系</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3202">glim</a>
										</cite>
					<em>2009-10-26</em>
				</td>
				<td class="nums"><strong>39</strong> / <em>636</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=26233&goto=lastpost#lastpost">2009-11-5 17:36</a></em>
					<cite>by <a href="space.php?username=%B6%C0%D1%DB%B0%A2%C1%FA">独眼阿龙</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_27992" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=27992&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_27992"><a href="viewthread.php?tid=27992&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">《新快报》刊登假新闻</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=9505">旅行者</a>
										</cite>
					<em>2009-11-14</em>
				</td>
				<td class="nums"><strong>39</strong> / <em>1352</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=27992&goto=lastpost#lastpost">2009-11-16 11:00</a></em>
					<cite>by <a href="space.php?username=zhsh_710">zhsh_710</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_27916" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=27916&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_27916"><a href="viewthread.php?tid=27916&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">记者无疆界要求奥巴马向胡锦涛提10个问题</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2472">Noel</a>
										</cite>
					<em>2009-11-13</em>
				</td>
				<td class="nums"><strong>39</strong> / <em>1101</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=27916&goto=lastpost#lastpost">2009-11-17 12:53</a></em>
					<cite>by <a href="space.php?username=Len">Len</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_28582" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=28582&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_28582"><a href="viewthread.php?tid=28582&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">影帝：言者无罪</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6314">hhbcl1414</a>
										</cite>
					<em>2009-11-20</em>
				</td>
				<td class="nums"><strong>39</strong> / <em>964</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=28582&goto=lastpost#lastpost">2009-11-22 21:03</a></em>
					<cite>by <a href="space.php?username=%CE%D2%C2%F4%B8%E2%B5%C4">我卖糕的</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_29463" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=29463&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_29463"><a href="viewthread.php?tid=29463&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">日本天皇接见奥巴马</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2234">袖手看热闹</a>
										</cite>
					<em>2009-11-15</em>
				</td>
				<td class="nums"><strong>39</strong> / <em>1116</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=29463&goto=lastpost#lastpost">2009-12-1 15:08</a></em>
					<cite>by <a href="space.php?username=%CE%F7%C3%C5%B4%B5%C5%A3">西门吹牛</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_29720" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=29720&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_29720"><a href="viewthread.php?tid=29720&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">北京一名15岁少女遭7名“90后”强奸</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1408">becom</a>
										</cite>
					<em>2009-12-3</em>
				</td>
				<td class="nums"><strong>39</strong> / <em>1297</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=29720&goto=lastpost#lastpost">2009-12-7 17:44</a></em>
					<cite>by <a href="space.php?username=%B5%B0%B6%A8%B5%C4%C2%B7%C8%CB">蛋定的路人</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_30024" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=30024&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_30024"><a href="viewthread.php?tid=30024&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">御用钢琴师前呼后拥驾临郑州</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4570">我卖糕的</a>
										</cite>
					<em>2009-12-5</em>
				</td>
				<td class="nums"><strong>39</strong> / <em>1265</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=30024&goto=lastpost#lastpost">2009-12-11 11:38</a></em>
					<cite>by <a href="space.php?username=kikikuku">kikikuku</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_30953" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=30953&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_30953"><a href="viewthread.php?tid=30953&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">党媒：各地群众给BT定性 广大网民为封网助威</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2071">上肛上腺</a>
										</cite>
					<em>2009-12-13</em>
				</td>
				<td class="nums"><strong>39</strong> / <em>1051</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=30953&goto=lastpost#lastpost">2009-12-15 00:21</a></em>
					<cite>by <a href="space.php?username=%B2%C9%BB%A8%B5%C4%BA%BA%D7%D3">采花的汉子</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_31165" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=31165&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_31165"><a href="viewthread.php?tid=31165&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">贝卢斯科尼欧盟会上偷画女人内衣四处传阅</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=9876">伟哥</a>
										</cite>
					<em>2009-12-15</em>
				</td>
				<td class="nums"><strong>39</strong> / <em>905</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=31165&goto=lastpost#lastpost">2009-12-15 22:06</a></em>
					<cite>by <a href="space.php?username=xiaob1206">xiaob1206</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_30752" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=30752&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_30752"><a href="viewthread.php?tid=30752&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">德国公司无法阻止武广铁路建设大跃进</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4681">腐皮</a>
										</cite>
					<em>2009-12-10</em>
				</td>
				<td class="nums"><strong>39</strong> / <em>1394</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=30752&goto=lastpost#lastpost">2009-12-15 23:26</a></em>
					<cite>by <a href="space.php?username=%C4%E1%BF%B5">尼康</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_40660" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=40660&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_40660"><a href="viewthread.php?tid=40660&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传，甘南发生藏民暴乱</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3339">机器猫阿福</a>
										</cite>
					<em>2010-3-19</em>
				</td>
				<td class="nums"><strong>39</strong> / <em>1608</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=40660&goto=lastpost#lastpost">2010-3-20 18:15</a></em>
					<cite>by <a href="space.php?username=%D7%E6%E8%AF%C2%C9">祖璇律</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_41347" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=41347&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_41347"><a href="viewthread.php?tid=41347&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">影帝：要痛定思痛 加强水利建设</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4544">袜子自己洗</a>
										</cite>
					<em>2010-3-25</em>
				</td>
				<td class="nums"><strong>39</strong> / <em>895</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=41347&goto=lastpost#lastpost">2010-3-29 17:55</a></em>
					<cite>by <a href="space.php?username=likewrn">likewrn</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_42189" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=42189&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_42189"><a href="viewthread.php?tid=42189&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">蒙古国政府将向全民每人派发1000美元红包</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3969">langhua9527</a>
										</cite>
					<em>2010-4-4</em>
				</td>
				<td class="nums"><strong>39</strong> / <em>871</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=42189&goto=lastpost#lastpost">2010-4-6 00:10</a></em>
					<cite>by <a href="space.php?username=%CC%EC%D6%AE%B0%D4%CD%F5">天之霸王</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_42626" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=42626&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_42626"><a href="viewthread.php?tid=42626&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">海尔集团赞助千万美元协助世博美国馆建设</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8823">jason_jiang</a>
										</cite>
					<em>2010-4-9</em>
				</td>
				<td class="nums"><strong>39</strong> / <em>1137</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=42626&goto=lastpost#lastpost">2010-4-11 20:59</a></em>
					<cite>by <a href="space.php?username=bunnyqoo">bunnyqoo</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_43534" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=43534&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_43534"><a href="viewthread.php?tid=43534&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">胡锦涛灾区题字黑板将送博物馆珍藏</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2804">musicool</a>
										</cite>
					<em>2010-4-19</em>
				</td>
				<td class="nums"><strong>39</strong> / <em>869</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=43534&goto=lastpost#lastpost">2010-4-21 12:16</a></em>
					<cite>by <a href="space.php?username=%D6%BB%CA%C7%D2%BB%B8%F6%B4%F3%D1%A7%C9%FA">只是一个大学生</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_43567" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=43567&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_43567"><a href="viewthread.php?tid=43567&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">北韩金正银即将上位</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=811">老胡</a>
										</cite>
					<em>2010-4-20</em>
				</td>
				<td class="nums"><strong>39</strong> / <em>1122</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=43567&goto=lastpost#lastpost">2010-4-21 15:46</a></em>
					<cite>by <a href="space.php?username=%C9%F3%C5%D0%D5%DFGK">审判者GK</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_43678" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=43678&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_43678"><a href="viewthread.php?tid=43678&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">斩首拒绝求爱女生的留美中国博士被判刑</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=852">未来他老爸</a>
										</cite>
					<em>2010-4-21</em>
				</td>
				<td class="nums"><strong>39</strong> / <em>1009</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=43678&goto=lastpost#lastpost">2010-4-22 19:19</a></em>
					<cite>by <a href="space.php?username=%C2%B7%B9%FD">路过</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_44026" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=44026&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_44026"><a href="viewthread.php?tid=44026&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">去年大陆得6万4千余张绿卡 移民美国人数第二</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4705">dreamingly</a>
										</cite>
					<em>2010-4-10</em>
				</td>
				<td class="nums"><strong>39</strong> / <em>1040</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=44026&goto=lastpost#lastpost">2010-4-25 11:46</a></em>
					<cite>by <a href="space.php?username=%CC%EF%CB%BC%C3%F7">田思明</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_44405" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=44405&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_44405"><a href="viewthread.php?tid=44405&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">一周图片新闻 4.26-5.2</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2232">老杂疫</a>
										</cite>
					<em>2010-4-29</em>
				</td>
				<td class="nums"><strong>39</strong> / <em>1215</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=44405&goto=lastpost#lastpost">2010-5-7 21:39</a></em>
					<cite>by <a href="space.php?username=%BE%CD%CA%C7%B2%BB%C0%D6%D2%E2">就是不乐意</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_45212" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=45212&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_45212"><a href="viewthread.php?tid=45212&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">统战部：达赖集团借玉树地震设账户敛财</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=9991">duck_1984</a>
										</cite>
					<em>2010-5-8</em>
				</td>
				<td class="nums"><strong>39</strong> / <em>882</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=45212&goto=lastpost#lastpost">2010-5-9 20:14</a></em>
					<cite>by <a href="space.php?username=neiltai">neiltai</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_45637" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=45637&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_45637"><a href="viewthread.php?tid=45637&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">人大新闻学院教授提供的网评员收入数据流出</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=11452">worry</a>
										</cite>
					<em>2010-5-12</em>
				</td>
				<td class="nums"><strong>39</strong> / <em>1272</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=45637&goto=lastpost#lastpost">2010-5-13 18:54</a></em>
					<cite>by <a href="space.php?username=Skydy">Skydy</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_45777" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=45777&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_45777"><a href="viewthread.php?tid=45777&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">校长深陷短信门 被指与多名女性有染</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3202">glim</a>
										</cite>
					<em>2010-5-11</em>
				</td>
				<td class="nums"><strong>39</strong> / <em>1797</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=45777&goto=lastpost#lastpost">2010-5-18 21:26</a></em>
					<cite>by <a href="space.php?username=%B5%CE%CF%A3%C0%D7.">滴希雷.</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_46209" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=46209&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_46209"><a href="viewthread.php?tid=46209&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">新型战机“歼-11B”因技术问题遭中国军方拒收</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2316">自由之春</a>
										</cite>
					<em>2010-5-18</em>
				</td>
				<td class="nums"><strong>39</strong> / <em>1246</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=46209&goto=lastpost#lastpost">2010-5-20 16:04</a></em>
					<cite>by <a href="space.php?username=roleyzhang">roleyzhang</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_7157" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=7157&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_7157"><a href="viewthread.php?tid=7157&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">班级群聊天记录：你没有党人的信念！</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4125">吃河蟹的草泥馬</a>
										</cite>
					<em>2009-3-16</em>
				</td>
				<td class="nums"><strong>39</strong> / <em>926</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=7157&goto=lastpost#lastpost">2009-3-19 11:51</a></em>
					<cite>by <a href="space.php?username=%B3%D4%BA%D3%D0%B7%B5%C4%B2%DD%C4%E0%F1R">吃河蟹的草泥馬</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_8000" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=8000&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_8000"><a href="viewthread.php?tid=8000&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">据说是一个普通的朝鲜家庭</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1121">小荷1120</a>
										</cite>
					<em>2009-3-27</em>
				</td>
				<td class="nums"><strong>39</strong> / <em>1094</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=8000&goto=lastpost#lastpost">2009-3-30 22:21</a></em>
					<cite>by <a href="space.php?username=%B0%B7%C7%E8%BE%DB%C8%FD%C0%C9">胺氰聚三郎</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_8464" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=8464&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_8464"><a href="viewthread.php?tid=8464&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">共产教皇铜像惨被爆菊 初步鉴定与梅毒无关</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7">张书记</a>
										</cite>
					<em>2009-4-1</em>
				</td>
				<td class="nums"><strong>39</strong> / <em>1306</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=8464&goto=lastpost#lastpost">2009-4-5 10:37</a></em>
					<cite>by <a href="space.php?username=%B0%A2%CE%C4%C7%BF">阿文强</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_7863" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=7863&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_7863"><a href="viewthread.php?tid=7863&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">香港和珠三角面临国家政策挑战</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5140">kakagoing</a>
										</cite>
					<em>2009-3-26</em>
				</td>
				<td class="nums"><strong>39</strong> / <em>705</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=7863&goto=lastpost#lastpost">2009-4-8 13:38</a></em>
					<cite>by <a href="space.php?username=kakagoing">kakagoing</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_9391" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=9391&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_9391"><a href="viewthread.php?tid=9391&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">《北京日报》又开始咬了……</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3580">白牛</a>
										</cite>
					<em>2009-4-20</em>
				</td>
				<td class="nums"><strong>39</strong> / <em>1034</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=9391&goto=lastpost#lastpost">2009-4-21 15:29</a></em>
					<cite>by <a href="space.php?username=zergboi">zergboi</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_35613" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=35613&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_35613"><a href="viewthread.php?tid=35613&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">真理部最新指令：北京地铁禁止卖报，只准赠送《北京娱乐信报》</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1258">路边社记者</a>
										</cite>
					<em>2010-1-9</em>
				</td>
				<td class="nums"><strong>39</strong> / <em>1150</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=35613&goto=lastpost#lastpost">2010-1-22 13:47</a></em>
					<cite>by <a href="space.php?username=%BF%A8%C5%C1">卡帕</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_34641" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=34641&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_34641"><a href="viewthread.php?tid=34641&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">重庆一医院用红色文化给病人治病</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1408">becom</a>
										</cite>
					<em>2010-1-14</em>
				</td>
				<td class="nums"><strong>39</strong> / <em>746</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=34641&goto=lastpost#lastpost">2010-1-22 17:40</a></em>
					<cite>by <a href="space.php?username=hhbcl1414">hhbcl1414</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_35820" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=35820&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_35820"><a href="viewthread.php?tid=35820&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">山西运城发生4.8级地震 北方大部有震感</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=11890">柠檬大侠</a>
										</cite>
					<em>2010-1-24</em>
				</td>
				<td class="nums"><strong>39</strong> / <em>1039</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=35820&goto=lastpost#lastpost">2010-1-25 13:43</a></em>
					<cite>by <a href="space.php?username=%C0%D7%C2%FC%D0%D6%B5%DC">雷曼兄弟</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_36343" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=36343&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_36343"><a href="viewthread.php?tid=36343&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">绝症女孩为见成龙20年来首化妆 成龙躬身献吻</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=9214">英雄贵姓</a>
										</cite>
					<em>2010-1-29</em>
				</td>
				<td class="nums"><strong>39</strong> / <em>820</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=36343&goto=lastpost#lastpost">2010-2-2 16:09</a></em>
					<cite>by <a href="space.php?username=%BE%C5%D3%C4">九幽</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_36260" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=36260&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_36260"><a href="viewthread.php?tid=36260&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">政协主题歌《我们》发布 冯小刚韩红主唱</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8301">lqunl</a>
										</cite>
					<em>2010-1-28</em>
				</td>
				<td class="nums"><strong>39</strong> / <em>733</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=36260&goto=lastpost#lastpost">2010-2-4 10:12</a></em>
					<cite>by <a href="space.php?username=seehots">seehots</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_36713" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=36713&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_36713"><a href="viewthread.php?tid=36713&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传，北京欲染指吴宇森新片《飞虎群英》</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=11459">再世关羽</a>
										</cite>
					<em>2010-2-2</em>
				</td>
				<td class="nums"><strong>39</strong> / <em>1170</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=36713&goto=lastpost#lastpost">2010-2-5 00:32</a></em>
					<cite>by <a href="space.php?username=%90%DB%D4%DA%CE%C1%D2%DF%C2%FB%D1%D3%95r">愛在瘟疫蔓延時</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_37116" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=37116&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_37116"><a href="viewthread.php?tid=37116&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">加大学疑因达赖被中共除名，600中国学生堪忧</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1686">奧斯卡金</a>
										</cite>
					<em>2010-2-7</em>
				</td>
				<td class="nums"><strong>39</strong> / <em>1217</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=37116&goto=lastpost#lastpost">2010-2-8 17:27</a></em>
					<cite>by <a href="space.php?username=%BB%A8%CF%EB%C8%DD">花想容</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_37207" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=37207&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_37207"><a href="viewthread.php?tid=37207&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">济南铁路职工罢工 大量列车晚点</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8904">hotspot</a>
										</cite>
					<em>2009-12-27</em>
				</td>
				<td class="nums"><strong>39</strong> / <em>1383</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=37207&goto=lastpost#lastpost">2010-2-9 19:21</a></em>
					<cite>by <a href="space.php?username=%C2%BD%B5%C2%CB%B9%CD%D0%BF%CB">陆德斯托克</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_37771" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=37771&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_37771"><a href="viewthread.php?tid=37771&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传，中共将向朝鲜注入巨资</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=10867">kokoni</a>
										</cite>
					<em>2010-2-15</em>
				</td>
				<td class="nums"><strong>39</strong> / <em>1634</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=37771&goto=lastpost#lastpost">2010-2-23 17:50</a></em>
					<cite>by <a href="space.php?username=%B2%BB%BE%B4%C9%F1%B5%C4YODA">不敬神的YODA</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_39006" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=39006&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_39006"><a href="viewthread.php?tid=39006&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">毛新宇透露自身体重213斤</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7477">请问</a>
										</cite>
					<em>2010-3-3</em>
				</td>
				<td class="nums"><strong>39</strong> / <em>975</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=39006&goto=lastpost#lastpost">2010-3-3 23:49</a></em>
					<cite>by <a href="space.php?username=%CB%AE%D0%D0%C9%BD%BE%D3">水行山居</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_39342" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=39342&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_39342"><a href="viewthread.php?tid=39342&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">真理部最新指令：两会期间严控负面报道</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7">张书记</a>
										</cite>
					<em>2010-3-5</em>
				</td>
				<td class="nums"><strong>39</strong> / <em>1214</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=39342&goto=lastpost#lastpost">2010-3-6 17:03</a></em>
					<cite>by <a href="space.php?username=%D2%BB%C0%C0%CE%DE%D3%EF">一览无语</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_39468" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=39468&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_39468"><a href="viewthread.php?tid=39468&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">地震局长陈建民：6日唐山地震均为1976年大地震余震</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=10890">xiaohe1120</a>
										</cite>
					<em>2010-3-6</em>
				</td>
				<td class="nums"><strong>39</strong> / <em>1113</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=39468&goto=lastpost#lastpost">2010-3-9 10:50</a></em>
					<cite>by <a href="space.php?username=bunnyqoo">bunnyqoo</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_39522" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=39522&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_39522"><a href="viewthread.php?tid=39522&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">招商银行推出“亚克西卡”</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4638">江湖席</a>
										</cite>
					<em>2010-3-7</em>
				</td>
				<td class="nums"><strong>39</strong> / <em>1475</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=39522&goto=lastpost#lastpost">2010-3-9 22:58</a></em>
					<cite>by <a href="space.php?username=%B2%BB%BF%DE%CB%C0%C9%F1">不哭死神</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_39669" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=39669&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_39669"><a href="viewthread.php?tid=39669&amp;extra=page%3D38%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">中国男子冰壶队长被开除</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4638">江湖席</a>
										</cite>
					<em>2010-3-9</em>
				</td>
				<td class="nums"><strong>39</strong> / <em>1396</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=39669&goto=lastpost#lastpost">2010-3-10 16:26</a></em>
					<cite>by <a href="space.php?username=%BF%EC%C0%D6%C1%F7%C0%CB%BA%BA">快乐流浪汉</a></cite>
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
	<div class="pages"><em>&nbsp;22278&nbsp;</em><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=1" class="first">1 ...</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=37" class="prev">&lsaquo;&lsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=36">36</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=37">37</a><strong>38</strong><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=39">39</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=40">40</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=41">41</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=42">42</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=43">43</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=44">44</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=45">45</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=39" class="next">&rsaquo;&rsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=349" class="last">... 349</a><kbd><input type="text" name="custompage" size="3" onkeydown="if(event.keyCode==13) {window.location='forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page='+this.value; return false;}" /></kbd></div>	</div>

  
	<div class="box">
			<span class="headactions"><a href="forumdisplay.php?fid=2&amp;page=38&amp;showoldetails=yes#online" class="nobdr"><img src="images/default/collapsed_yes.gif" alt="" /></a></span>
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
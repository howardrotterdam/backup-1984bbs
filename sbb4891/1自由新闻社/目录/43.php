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
			window.location = 'forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&page=42';
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
<div class="pages"><em>&nbsp;22278&nbsp;</em><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=1" class="first">1 ...</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=42" class="prev">&lsaquo;&lsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=41">41</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=42">42</a><strong>43</strong><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=44">44</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=45">45</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=46">46</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=47">47</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=48">48</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=49">49</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=50">50</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=44" class="next">&rsaquo;&rsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=349" class="last">... 349</a><kbd><input type="text" name="custompage" size="3" onkeydown="if(event.keyCode==13) {window.location='forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page='+this.value; return false;}" /></kbd></div></div>

<div style="float:left;border:1px solid #CCC; border-bottom:none;;width:218px; background: url(/imgs/1984radio.jpg) 200px 2px no-repeat;padding:5px 0 5px 12px;margin:0px 0 0 13px">

<p><b><a href="/radio/index.php" target="_blank">1984FM</a></b><br /><b><a href="https://voxli.com/1984bbs" target="_blank">1984Chat</a></b>&nbsp;</p> 
</div>

<div style="clear:both;height:0px;width:100%;font-size:1px;">&nbsp;</div>

	<ul class="popupmenu_popup newspecialmenu" id="newspecial_menu" style="display: none">
		<li><a href="post.php?action=newthread&amp;fid=2&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">发新话题</a></li>		<li class="poll"><a href="post.php?action=newthread&amp;fid=2&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;special=1">发布投票</a></li>													</ul>
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

					<tbody id="normalthread_48800" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=48800&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_48800"><a href="viewthread.php?tid=48800&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">美国推移民新政策 向美企贷款50万美元可获绿卡</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7968">singlefabulous</a>
										</cite>
					<em>2010-6-9</em>
				</td>
				<td class="nums"><strong>36</strong> / <em>855</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=48800&goto=lastpost#lastpost">2010-6-14 04:46</a></em>
					<cite>by <a href="space.php?username=%B4%F3%D0l%CD%F5%EF%88%B5%EA">大衛王飯店</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_49778" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=49778&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_49778"><a href="viewthread.php?tid=49778&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">马拉多纳：在我眼中全球只有中国不是美国殖民地</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3202">glim</a>
										</cite>
					<em>2010-6-17</em>
				</td>
				<td class="nums"><strong>36</strong> / <em>1303</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=49778&goto=lastpost#lastpost">2010-6-18 11:43</a></em>
					<cite>by <a href="space.php?username=bafield">bafield</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_50325" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=50325&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_50325"><a href="viewthread.php?tid=50325&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">中宣部部长刘云山视察腾讯QQ总部 赞其坚持正确导向</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=852">未来他老爸</a>
										</cite>
					<em>2010-6-22</em>
				</td>
				<td class="nums"><strong>36</strong> / <em>1570</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=50325&goto=lastpost#lastpost">2010-6-23 03:19</a></em>
					<cite>by <a href="space.php?username=%D5%C5%C0%CF%B0%E5">张老板</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_51256" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=51256&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_51256"><a href="viewthread.php?tid=51256&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">北京大学正式成立儒学研究院</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2907">无言的山丘</a>
										</cite>
					<em>2010-6-30</em>
				</td>
				<td class="nums"><strong>36</strong> / <em>429</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=51256&goto=lastpost#lastpost">2010-7-1 18:09</a></em>
					<cite>by <a href="space.php?username=%B7%E7%B2%CD%C2%B6%CB%DE">风餐露宿</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_52488" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=52488&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_52488"><a href="viewthread.php?tid=52488&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">韩国媒体称朝鲜惨败是因为穿中国产球鞋</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=10262">苏梦枕</a>
										</cite>
					<em>2010-6-23</em>
				</td>
				<td class="nums"><strong>36</strong> / <em>1185</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=52488&goto=lastpost#lastpost">2010-7-12 10:00</a></em>
					<cite>by <a href="space.php?username=%D5%E6%D5%FD%B5%C4%C9%EE%C8%EB%C7%B3%B3%F6">真正的深入浅出</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_54252" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=54252&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_54252"><a href="viewthread.php?tid=54252&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">一周图片新闻 7.26-8.1</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2232">老杂疫</a>
										</cite>
					<em>2010-7-29</em>
				</td>
				<td class="nums"><strong>36</strong> / <em>906</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=54252&goto=lastpost#lastpost">2010-7-30 20:28</a></em>
					<cite>by <a href="space.php?username=%C2%F3%BF%CB%B5%B1%C0%CD">麦克当劳</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_54532" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=54532&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_54532"><a href="viewthread.php?tid=54532&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">八九学运领袖李禄可能接掌巴郡</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3202">glim</a>
										</cite>
					<em>2010-7-30</em>
				</td>
				<td class="nums"><strong>36</strong> / <em>2004</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=54532&goto=lastpost#lastpost">2010-8-6 11:15</a></em>
					<cite>by <a href="space.php?username=grandmoon">grandmoon</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_27635" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=27635&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_27635"><a href="viewthread.php?tid=27635&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">广州给刘翔安排了“二线宾馆”</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8203">熬不过的黑夜</a>
										</cite>
					<em>2009-11-10</em>
				</td>
				<td class="nums"><strong>36</strong> / <em>982</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=27635&goto=lastpost#lastpost">2009-11-11 11:12</a></em>
					<cite>by <a href="space.php?username=rocksun">rocksun</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_28747" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=28747&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_28747"><a href="viewthread.php?tid=28747&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">欧洲重启世界最大强子对撞机  将模拟宇宙大爆炸</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=852">未来他老爸</a>
										</cite>
					<em>2009-11-22</em>
				</td>
				<td class="nums"><strong>36</strong> / <em>537</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=28747&goto=lastpost#lastpost">2009-11-25 01:44</a></em>
					<cite>by <a href="space.php?username=%CE%F7%C3%C5%B4%B5%C5%A3">西门吹牛</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_28746" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=28746&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_28746"><a href="viewthread.php?tid=28746&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">李长春造访，公司提示“关好门窗”</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2393">蚊驱</a>
										</cite>
					<em>2009-11-22</em>
				</td>
				<td class="nums"><strong>36</strong> / <em>1329</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=28746&goto=lastpost#lastpost">2009-11-25 05:27</a></em>
					<cite>by <a href="space.php?username=%CE%D2%C2%F4%B8%E2%B5%C4">我卖糕的</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_28810" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=28810&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_28810"><a href="viewthread.php?tid=28810&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">寺院里的西方婚礼</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4587">萨格拉斯</a>
										</cite>
					<em>2009-11-23</em>
				</td>
				<td class="nums"><strong>36</strong> / <em>727</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=28810&goto=lastpost#lastpost">2009-11-25 13:50</a></em>
					<cite>by <a href="space.php?username=%B1%B1%B7%BD%D0%FE%CE%E5">北方玄五</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_29044" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=29044&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_29044"><a href="viewthread.php?tid=29044&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">中国赎金救货船 严控媒体网络舆论</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4338">awhc</a>
										</cite>
					<em>2009-11-26</em>
				</td>
				<td class="nums"><strong>36</strong> / <em>1009</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=29044&goto=lastpost#lastpost">2009-11-29 15:54</a></em>
					<cite>by <a href="space.php?username=%90%DB%D4%DA%CE%C1%D2%DF%C2%FB%D1%D3%95r">愛在瘟疫蔓延時</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_30553" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=30553&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_30553"><a href="viewthread.php?tid=30553&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">央视欲收购暴风影音</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=9991">duck_1984</a>
										</cite>
					<em>2009-12-10</em>
				</td>
				<td class="nums"><strong>36</strong> / <em>869</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=30553&goto=lastpost#lastpost">2009-12-11 21:26</a></em>
					<cite>by <a href="space.php?username=%D2%C1%BE%CD%B0%D5%CA%D0">伊就罢市</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_31148" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=31148&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_31148"><a href="viewthread.php?tid=31148&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">五教授上书建议废止《拆迁条例》，中共已经启动调研</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8638">dark</a>
										</cite>
					<em>2009-12-8</em>
				</td>
				<td class="nums"><strong>36</strong> / <em>803</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=31148&goto=lastpost#lastpost">2009-12-22 03:04</a></em>
					<cite>by <a href="space.php?username=mo5298">mo5298</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_32062" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=32062&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_32062"><a href="viewthread.php?tid=32062&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">农民工返乡途中患感冒 乘客表决将其撵下车</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=9991">duck_1984</a>
										</cite>
					<em>2009-12-22</em>
				</td>
				<td class="nums"><strong>36</strong> / <em>575</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=32062&goto=lastpost#lastpost">2009-12-24 22:38</a></em>
					<cite>by <a href="space.php?username=NERV">NERV</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_1603" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=1603&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_1603"><a href="viewthread.php?tid=1603&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">同一个世界 同一个人权——世界各地纪念《世界人权宣言》60周年图辑</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7">张书记</a>
										</cite>
					<em>2008-12-10</em>
				</td>
				<td class="nums"><strong>36</strong> / <em>635</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=1603&goto=lastpost#lastpost">2008-12-13 00:18</a></em>
					<cite>by <a href="space.php?username=%BB%A8%CF%EB%C8%DD">花想容</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_2058" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=2058&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_2058"><a href="viewthread.php?tid=2058&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">老江：“兄弟们，都起来了，讲到咱们了！”</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7">张书记</a>
										</cite>
					<em>2008-12-18</em>
				</td>
				<td class="nums"><strong>36</strong> / <em>572</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=2058&goto=lastpost#lastpost">2008-12-20 16:25</a></em>
					<cite>by <a href="space.php?username=%BB%C6%C8%CA%D5%DC">黄仁哲</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_2370" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=2370&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_2370"><a href="viewthread.php?tid=2370&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">阴魂仍未散 纪念腊肉风干115周年摄影展</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7">张书记</a>
										</cite>
					<em>2008-12-26</em>
				</td>
				<td class="nums"><strong>36</strong> / <em>379</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=2370&goto=lastpost#lastpost">2008-12-28 15:37</a></em>
					<cite>by <a href="space.php?username=%CB%AD%D4%DA%D5%A9%C6%AD">谁在诈骗</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_40598" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=40598&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_40598"><a href="viewthread.php?tid=40598&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">儿时伙伴：从小胸怀大志影帝当总理非偶然</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4570">我卖糕的</a>
										</cite>
					<em>2010-3-18</em>
				</td>
				<td class="nums"><strong>36</strong> / <em>1058</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=40598&goto=lastpost#lastpost">2010-3-22 09:50</a></em>
					<cite>by <a href="space.php?username=sukip">sukip</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_42970" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=42970&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_42970"><a href="viewthread.php?tid=42970&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">西安“桃花节”开幕  四元首头像被抬出游街</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=21">大仙儿</a>
										</cite>
					<em>2010-4-13</em>
				</td>
				<td class="nums"><strong>36</strong> / <em>998</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=42970&goto=lastpost#lastpost">2010-4-16 11:07</a></em>
					<cite>by <a href="space.php?username=%D6%BB%CA%C7%BF%B4%BF%B4">只是看看</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_43522" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=43522&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_43522"><a href="viewthread.php?tid=43522&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">湖南郴州一邪教组织“实际神”2名骨干被判刑</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=12527">ytqz1988y</a>
										</cite>
					<em>2010-4-19</em>
				</td>
				<td class="nums"><strong>36</strong> / <em>761</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=43522&goto=lastpost#lastpost">2010-4-20 23:58</a></em>
					<cite>by <a href="space.php?username=%C4%BE%C7%C7%D7%AF">木乔庄</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_44329" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=44329&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_44329"><a href="viewthread.php?tid=44329&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">广东雷州一男子持刀闯入校园砍伤19名师生</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5928">佐佐鼬鼬</a>
										</cite>
					<em>2010-4-28</em>
				</td>
				<td class="nums"><strong>36</strong> / <em>619</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=44329&goto=lastpost#lastpost">2010-4-30 16:57</a></em>
					<cite>by <a href="space.php?username=%BD%AD%C4%CF%B5%C4%D3%EA%BC%BE">江南的雨季</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_44945" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=44945&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																					<img src="images/default/digest_1.gif" alt="火星帖 1" />
										 </label>
																				<span id="thread_44945"><a href="viewthread.php?tid=44945&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">美杂志评出世界10大有害书籍 红宝书位列前三甲</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5494">肉の包包</a>
										</cite>
					<em>2010-5-5</em>
				</td>
				<td class="nums"><strong>36</strong> / <em>1394</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=44945&goto=lastpost#lastpost">2010-5-8 10:37</a></em>
					<cite>by <a href="space.php?username=%C3%E2%D4%C2%D7%DF">免月走</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_45344" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=45344&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_45344"><a href="viewthread.php?tid=45344&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传广电要求禁止炒作刘著</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3969">langhua9527</a>
										</cite>
					<em>2010-5-9</em>
				</td>
				<td class="nums"><strong>36</strong> / <em>1700</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=45344&goto=lastpost#lastpost">2010-5-11 15:37</a></em>
					<cite>by <a href="space.php?username=8%D8%D48%D8%D4">8卦8卦</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_46264" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=46264&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_46264"><a href="viewthread.php?tid=46264&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传因报导“温家宝拒绝金正日援助要求”网易编辑被下岗</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6906">jaychu128</a>
										</cite>
					<em>2010-5-18</em>
				</td>
				<td class="nums"><strong>36</strong> / <em>1992</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=46264&goto=lastpost#lastpost">2010-5-20 23:46</a></em>
					<cite>by <a href="space.php?username=wangguoping">wangguoping</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_46546" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=46546&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_46546"><a href="viewthread.php?tid=46546&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">中国基尼系数实已超0.5 可能导致社会动乱</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4570">我卖糕的</a>
										</cite>
					<em>2010-5-21</em>
				</td>
				<td class="nums"><strong>36</strong> / <em>1120</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=46546&goto=lastpost#lastpost">2010-5-22 08:54</a></em>
					<cite>by <a href="space.php?username=%D7%A8%D2%B5%CE%A7%B9%DB">专业围观</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_17575" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=17575&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_17575"><a href="viewthread.php?tid=17575&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">警惕美国破罐子破摔</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2428">xiahua</a>
										</cite>
					<em>2009-7-22</em>
				</td>
				<td class="nums"><strong>36</strong> / <em>720</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=17575&goto=lastpost#lastpost">2009-7-27 10:53</a></em>
					<cite>by <a href="space.php?username=%CE%D2%C2%F4%B8%E2%B5%C4">我卖糕的</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_17962" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=17962&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_17962"><a href="viewthread.php?tid=17962&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">焦点访谈：“妹妹五月天”里的黄毒与病毒</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1960">库存袈裟</a>
										</cite>
					<em>2009-7-27</em>
				</td>
				<td class="nums"><strong>36</strong> / <em>1129</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=17962&goto=lastpost#lastpost">2009-7-28 11:02</a></em>
					<cite>by <a href="space.php?username=%D3%F9%BD%A3%C7%F3%D4%B5">御剑求缘</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_18221" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=18221&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_18221"><a href="viewthread.php?tid=18221&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">新华社：群体性事件中少用“不明真相”</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7681">asanroy</a>
										</cite>
					<em>2009-7-29</em>
				</td>
				<td class="nums"><strong>36</strong> / <em>732</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=18221&goto=lastpost#lastpost">2009-7-29 20:44</a></em>
					<cite>by <a href="space.php?username=%C9%CF%BA%A3%CB%A7%B8%E7">上海帅哥</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_19001" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=19001&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_19001"><a href="viewthread.php?tid=19001&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">三峡后遗症？——水淹重庆</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3194">zhangqian1896</a>
										</cite>
					<em>2009-8-7</em>
				</td>
				<td class="nums"><strong>36</strong> / <em>1015</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=19001&goto=lastpost#lastpost">2009-8-8 23:01</a></em>
					<cite>by <a href="space.php?username=%B4%F3%CF%E9%D4%C6">大祥云</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_19179" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=19179&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_19179"><a href="viewthread.php?tid=19179&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">CCTV2主持人马斌裸照流出</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3969">langhua9527</a>
										</cite>
					<em>2009-8-8</em>
				</td>
				<td class="nums"><strong>36</strong> / <em>1688</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=19179&goto=lastpost#lastpost">2009-8-10 16:43</a></em>
					<cite>by <a href="space.php?username=%CD%E2%C0%B4%CE%F1%B9%A4%C8%CB%D4%B1">外来务工人员</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_19070" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=19070&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_19070"><a href="viewthread.php?tid=19070&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">红色新歌《党国军国颂》播出 群众演员纷纷含泪表示动听耐听</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3202">glim</a>
										</cite>
					<em>2009-8-7</em>
				</td>
				<td class="nums"><strong>36</strong> / <em>753</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=19070&goto=lastpost#lastpost">2009-8-10 21:01</a></em>
					<cite>by <a href="space.php?username=%C7%BD%B5%B9%D6%DA%C8%CB%CD%C6">墙倒众人推</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_19571" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=19571&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_19571"><a href="viewthread.php?tid=19571&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">影帝博学多才  记者自惭形秽</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4570">我卖糕的</a>
										</cite>
					<em>2009-8-13</em>
				</td>
				<td class="nums"><strong>36</strong> / <em>1100</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=19571&goto=lastpost#lastpost">2009-8-14 18:37</a></em>
					<cite>by <a href="space.php?username=gaojians">gaojians</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_19870" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=19870&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_19870"><a href="viewthread.php?tid=19870&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">马英九：纪念自由主义巨擘殷海光与雷震</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5772">小马哥</a>
										</cite>
					<em>2009-8-16</em>
				</td>
				<td class="nums"><strong>36</strong> / <em>861</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=19870&goto=lastpost#lastpost">2009-8-19 15:08</a></em>
					<cite>by <a href="space.php?username=%BB%A8%CF%EB%C8%DD">花想容</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_21017" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=21017&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_21017"><a href="viewthread.php?tid=21017&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">最新一期《财经》杂志封面</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=144">mfs0616</a>
										</cite>
					<em>2009-8-31</em>
				</td>
				<td class="nums"><strong>36</strong> / <em>1235</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=21017&goto=lastpost#lastpost">2009-9-2 18:14</a></em>
					<cite>by <a href="space.php?username=%BF%EC%C0%D6%C1%F7%C0%CB%BA%BA">快乐流浪汉</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_21171" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=21171&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_21171"><a href="viewthread.php?tid=21171&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">倪震说支联会主席司徒华喜欢嫖妓</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5588">我家旺财有喜了</a>
										</cite>
					<em>2009-9-2</em>
				</td>
				<td class="nums"><strong>36</strong> / <em>665</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=21171&goto=lastpost#lastpost">2009-9-3 03:56</a></em>
					<cite>by <a href="space.php?username=%CE%F7%C3%C5%B4%B5%C5%A3">西门吹牛</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_21166" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=21166&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_21166"><a href="viewthread.php?tid=21166&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">星云：达赖来的有三不对</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3202">glim</a>
										</cite>
					<em>2009-9-2</em>
				</td>
				<td class="nums"><strong>36</strong> / <em>756</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=21166&goto=lastpost#lastpost">2009-9-3 16:34</a></em>
					<cite>by <a href="space.php?username=cardigans">cardigans</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_21003" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=21003&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_21003"><a href="viewthread.php?tid=21003&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">宋庄偶发艺术节行为艺术创立“向人民道歉”仪式</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2315">写实</a>
										</cite>
					<em>2009-8-30</em>
				</td>
				<td class="nums"><strong>36</strong> / <em>779</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=21003&goto=lastpost#lastpost">2009-9-4 14:26</a></em>
					<cite>by <a href="space.php?username=%B5%CD%CB%D7%D6%AE%B7%E7%F3%DD">低俗之风筝</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_6894" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=6894&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_6894"><a href="viewthread.php?tid=6894&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">行动爱国吧！抛弃你的加拿大国籍，撕毁你的绿卡</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3630">elzzird</a>
										</cite>
					<em>2009-3-12</em>
				</td>
				<td class="nums"><strong>36</strong> / <em>673</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=6894&goto=lastpost#lastpost">2009-3-13 11:59</a></em>
					<cite>by <a href="space.php?username=%C0%ED%CF%EB%C7%E0%C4%EA%B9%B7">理想青年狗</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_3120" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=3120&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_3120"><a href="viewthread.php?tid=3120&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">朝廷近亲大婚 储君夫人搭桥阎军歌和李铁齿结为亲家</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1258">路边社记者</a>
										</cite>
					<em>2009-1-8</em>
				</td>
				<td class="nums"><strong>36</strong> / <em>1316</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=3120&goto=lastpost#lastpost">2009-3-14 17:57</a></em>
					<cite>by <a href="space.php?username=nicegoal">nicegoal</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_7548" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=7548&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_7548"><a href="viewthread.php?tid=7548&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">电话四川省政府办公厅纪实</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2868">用裤衩思考</a>
										</cite>
					<em>2009-3-20</em>
				</td>
				<td class="nums"><strong>36</strong> / <em>847</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=7548&goto=lastpost#lastpost">2009-3-24 18:47</a></em>
					<cite>by <a href="space.php?username=%B6%FE%BA%C5%B2%A1%B4%B2">二号病床</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_7717" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=7717&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_7717"><a href="viewthread.php?tid=7717&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">太妃初春露腿抢镜 不慎走光微露底裤</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2495">深入裙中</a>
										</cite>
					<em>2009-3-24</em>
				</td>
				<td class="nums"><strong>36</strong> / <em>1268</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=7717&goto=lastpost#lastpost">2009-3-25 23:19</a></em>
					<cite>by <a href="space.php?username=%BA%CD%C4%E3%C3%C7%D2%BB%D1%F9%BC%FA">和你们一样贱</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_7643" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=7643&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_7643"><a href="viewthread.php?tid=7643&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">热烈庆祝圣上入列全球十大独裁者</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3425">liwaniuniu</a>
										</cite>
					<em>2009-3-23</em>
				</td>
				<td class="nums"><strong>36</strong> / <em>1104</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=7643&goto=lastpost#lastpost">2009-3-27 01:52</a></em>
					<cite>by <a href="space.php?username=ZHH">ZHH</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_7740" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=7740&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_7740"><a href="viewthread.php?tid=7740&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">江西某电视台女主持人被捉奸的告示</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1408">becom</a>
										</cite>
					<em>2009-3-24</em>
				</td>
				<td class="nums"><strong>36</strong> / <em>1225</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=7740&goto=lastpost#lastpost">2009-3-28 19:54</a></em>
					<cite>by <a href="space.php?username=%CE%DE%D1%D4%B5%C4%C9%BD%C7%F0">无言的山丘</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_8216" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=8216&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_8216"><a href="viewthread.php?tid=8216&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">毛粉看后一言不发 太祖伟岸形象遭科学质疑</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=465">余含泪</a>
										</cite>
					<em>2009-3-31</em>
				</td>
				<td class="nums"><strong>36</strong> / <em>1138</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=8216&goto=lastpost#lastpost">2009-4-2 01:39</a></em>
					<cite>by <a href="space.php?username=Rspell">Rspell</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_8186" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=8186&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_8186"><a href="viewthread.php?tid=8186&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">有人恨中国人就像我们恨日本人一样</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5546">tatasleepless</a>
										</cite>
					<em>2009-3-31</em>
				</td>
				<td class="nums"><strong>36</strong> / <em>823</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=8186&goto=lastpost#lastpost">2009-4-3 09:44</a></em>
					<cite>by <a href="space.php?username=%B7%C5%D6%F0">放逐</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_8144" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=8144&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_8144"><a href="viewthread.php?tid=8144&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">专访前中共中央委员鲍彤</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1661">ne_ne6</a>
										</cite>
					<em>2009-3-31</em>
				</td>
				<td class="nums"><strong>36</strong> / <em>1169</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=8144&goto=lastpost#lastpost">2009-4-5 17:42</a></em>
					<cite>by <a href="space.php?username=%B7%CF%D6%D6%B6%B9%F4%F9">废种豆豉</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_9100" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=9100&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_9100"><a href="viewthread.php?tid=9100&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">李锐：不当奴隶，更不当奴才</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1686">奧斯卡金</a>
										</cite>
					<em>2009-4-15</em>
				</td>
				<td class="nums"><strong>36</strong> / <em>924</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=9100&goto=lastpost#lastpost">2009-4-22 12:59</a></em>
					<cite>by <a href="space.php?username=cc850107">cc850107</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_5633" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=5633&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_5633"><a href="viewthread.php?tid=5633&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">有此混蛋一说：谁说被掠走的圆明园十二生肖铜兽首是国宝？</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3977">耗子</a>
										</cite>
					<em>2009-2-25</em>
				</td>
				<td class="nums"><strong>36</strong> / <em>653</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=5633&goto=lastpost#lastpost">2009-2-27 00:02</a></em>
					<cite>by <a href="space.php?username=%B0%CB%D8%D4%CC%AB%BC%AB%C8%AD">八卦太极拳</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_9470" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=9470&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_9470"><a href="viewthread.php?tid=9470&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">张哈夫：中国航母名字应该叫“毛泽东”号</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4570">我卖糕的</a>
										</cite>
					<em>2009-4-21</em>
				</td>
				<td class="nums"><strong>36</strong> / <em>472</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=9470&goto=lastpost#lastpost">2009-6-25 11:14</a></em>
					<cite>by <a href="space.php?username=%C8%F8%B8%F1%C0%AD%CB%B9">萨格拉斯</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_15080" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=15080&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_15080"><a href="viewthread.php?tid=15080&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传，毛新宇上书中央，要求将毛遗体火化安放八宝山</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6385">openearth</a>
										</cite>
					<em>2009-6-27</em>
				</td>
				<td class="nums"><strong>36</strong> / <em>1023</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=15080&goto=lastpost#lastpost">2009-6-28 02:35</a></em>
					<cite>by <a href="space.php?username=%D7%F3%B0%B6%A1%FB%D3%D2%B0%B6">左岸←右岸</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_15024" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=15024&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_15024"><a href="viewthread.php?tid=15024&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">Jackson不得不说的故事</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2241">阿文强</a>
										</cite>
					<em>2009-6-26</em>
				</td>
				<td class="nums"><strong>36</strong> / <em>815</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=15024&goto=lastpost#lastpost">2009-6-29 00:40</a></em>
					<cite>by <a href="space.php?username=d40pdy">d40pdy</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_15958" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=15958&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_15958"><a href="viewthread.php?tid=15958&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">新疆惨剧的5巴掌</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=22">abu</a>
										</cite>
					<em>2009-7-6</em>
				</td>
				<td class="nums"><strong>36</strong> / <em>1255</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=15958&goto=lastpost#lastpost">2009-7-8 14:13</a></em>
					<cite>by <a href="space.php?username=one">one</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_16341" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=16341&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_16341"><a href="viewthread.php?tid=16341&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传，新疆或死1000人</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5464">上海帅哥</a>
										</cite>
					<em>2009-7-10</em>
				</td>
				<td class="nums"><strong>36</strong> / <em>1657</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=16341&goto=lastpost#lastpost">2009-7-12 22:47</a></em>
					<cite>by <a href="space.php?username=%BB%EE%D4%DA%CD%AF%BB%B0%B5%C4%CC%EC%B3%AF">活在童话的天朝</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_16532" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=16532&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_16532"><a href="viewthread.php?tid=16532&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">王千源在“西藏问题50周年”纽约纪念会上的演讲</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2428">xiahua</a>
										</cite>
					<em>2009-7-12</em>
				</td>
				<td class="nums"><strong>36</strong> / <em>656</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=16532&goto=lastpost#lastpost">2009-7-13 19:16</a></em>
					<cite>by <a href="space.php?username=%B9%DC%C0%ED%D4%B1">管理员</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_16912" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=16912&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_16912"><a href="viewthread.php?tid=16912&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">上海China Joy展览会很可能会出现上千维权群众</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5263">tabriis</a>
										</cite>
					<em>2009-7-16</em>
				</td>
				<td class="nums"><strong>36</strong> / <em>1035</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=16912&goto=lastpost#lastpost">2009-7-19 12:49</a></em>
					<cite>by <a href="space.php?username=%B8%DF%BD%A5%C0%EB">高渐离</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_13101" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=13101&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_13101"><a href="viewthread.php?tid=13101&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">正在中大听连岳，文道被限制没来！</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4141">dollarboy</a>
										</cite>
					<em>2009-6-9</em>
				</td>
				<td class="nums"><strong>35</strong> / <em>1155</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=13101&goto=lastpost#lastpost">2009-6-12 12:20</a></em>
					<cite>by <a href="space.php?username=%CD%E2%C0%B4%CE%F1%B9%A4%C8%CB%D4%B1">外来务工人员</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_14943" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=14943&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_14943"><a href="viewthread.php?tid=14943&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">秦刚：信我还是他</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3202">glim</a>
										</cite>
					<em>2009-6-26</em>
				</td>
				<td class="nums"><strong>35</strong> / <em>952</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=14943&goto=lastpost#lastpost">2009-6-26 21:58</a></em>
					<cite>by <a href="space.php?username=%CF%E7%CF%C2%C8%CB">乡下人</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_11608" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=11608&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_11608"><a href="viewthread.php?tid=11608&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">那天，吃两顿饭、上厕所她一直不舍得洗手</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7">张书记</a>
										</cite>
					<em>2009-5-22</em>
				</td>
				<td class="nums"><strong>35</strong> / <em>1108</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=11608&goto=lastpost#lastpost">2009-6-27 13:17</a></em>
					<cite>by <a href="space.php?username=chandler0819">chandler0819</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_14868" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=14868&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_14868"><a href="viewthread.php?tid=14868&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">腾讯技术员刚刚测漏：QQ被迫升级了新的过滤系统</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=21">大仙儿</a>
										</cite>
					<em>2009-6-25</em>
				</td>
				<td class="nums"><strong>35</strong> / <em>1192</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=14868&goto=lastpost#lastpost">2009-6-27 21:09</a></em>
					<cite>by <a href="space.php?username=%B4%F3%C8%CB%A3%AC%D3%D0%D0%D8%C6%F7">大人，有胸器</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_15640" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=15640&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_15640"><a href="viewthread.php?tid=15640&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">RFI：朝鲜刚刚向韩国发射了两枚导弹</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6314">hhbcl1414</a>
										</cite>
					<em>2009-7-2</em>
				</td>
				<td class="nums"><strong>35</strong> / <em>889</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=15640&goto=lastpost#lastpost">2009-7-3 03:24</a></em>
					<cite>by <a href="space.php?username=%BF%EC%C0%D6%C1%F7%C0%CB%BA%BA">快乐流浪汉</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_14816" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=14816&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_14816"><a href="viewthread.php?tid=14816&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">中央台香港街访巧遇香港同行</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4123">闾丘露薇</a>
										</cite>
					<em>2009-6-25</em>
				</td>
				<td class="nums"><strong>35</strong> / <em>2057</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=14816&goto=lastpost#lastpost">2009-7-4 00:46</a></em>
					<cite>by <a href="space.php?username=%CE%DE%D1%D4%B5%C4%C9%BD%C7%F0">无言的山丘</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_14970" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=14970&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_14970"><a href="viewthread.php?tid=14970&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">罗刹国再次洗劫华商20亿美元资产  天朝会发声吗</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=852">未来他老爸</a>
										</cite>
					<em>2009-6-26</em>
				</td>
				<td class="nums"><strong>35</strong> / <em>752</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=14970&goto=lastpost#lastpost">2009-7-5 23:20</a></em>
					<cite>by <a href="space.php?username=%CE%D2%C2%F4%B8%E2%B5%C4">我卖糕的</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_15753" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=15753&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_15753"><a href="viewthread.php?tid=15753&amp;extra=page%3D43%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">BBC：中共的“白马”困境</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5464">上海帅哥</a>
										</cite>
					<em>2009-7-4</em>
				</td>
				<td class="nums"><strong>35</strong> / <em>1478</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=15753&goto=lastpost#lastpost">2009-7-6 19:17</a></em>
					<cite>by <a href="space.php?username=%D7%F3%B0%B6%A1%FB%D3%D2%B0%B6">左岸←右岸</a></cite>
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
	<div class="pages"><em>&nbsp;22278&nbsp;</em><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=1" class="first">1 ...</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=42" class="prev">&lsaquo;&lsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=41">41</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=42">42</a><strong>43</strong><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=44">44</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=45">45</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=46">46</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=47">47</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=48">48</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=49">49</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=50">50</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=44" class="next">&rsaquo;&rsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=349" class="last">... 349</a><kbd><input type="text" name="custompage" size="3" onkeydown="if(event.keyCode==13) {window.location='forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page='+this.value; return false;}" /></kbd></div>	</div>

  
	<div class="box">
			<span class="headactions"><a href="forumdisplay.php?fid=2&amp;page=43&amp;showoldetails=yes#online" class="nobdr"><img src="images/default/collapsed_yes.gif" alt="" /></a></span>
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
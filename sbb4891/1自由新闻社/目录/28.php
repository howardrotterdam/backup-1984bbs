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
			window.location = 'forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&page=27';
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
<div class="pages"><em>&nbsp;22278&nbsp;</em><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=1" class="first">1 ...</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=27" class="prev">&lsaquo;&lsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=26">26</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=27">27</a><strong>28</strong><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=29">29</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=30">30</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=31">31</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=32">32</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=33">33</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=34">34</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=35">35</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=29" class="next">&rsaquo;&rsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=349" class="last">... 349</a><kbd><input type="text" name="custompage" size="3" onkeydown="if(event.keyCode==13) {window.location='forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page='+this.value; return false;}" /></kbd></div></div>

<div style="float:left;border:1px solid #CCC; border-bottom:none;;width:218px; background: url(/imgs/1984radio.jpg) 200px 2px no-repeat;padding:5px 0 5px 12px;margin:0px 0 0 13px">

<p><b><a href="/radio/index.php" target="_blank">1984FM</a></b><br /><b><a href="https://voxli.com/1984bbs" target="_blank">1984Chat</a></b>&nbsp;</p> 
</div>

<div style="clear:both;height:0px;width:100%;font-size:1px;">&nbsp;</div>

	<ul class="popupmenu_popup newspecialmenu" id="newspecial_menu" style="display: none">
		<li><a href="post.php?action=newthread&amp;fid=2&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">发新话题</a></li>		<li class="poll"><a href="post.php?action=newthread&amp;fid=2&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;special=1">发布投票</a></li>													</ul>
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

					<tbody id="normalthread_20945" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=20945&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_20945"><a href="viewthread.php?tid=20945&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">河南访民投诉无门，跨海到中华民国总统府陈情</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3985">色空鸟</a>
										</cite>
					<em>2009-8-30</em>
				</td>
				<td class="nums"><strong>47</strong> / <em>873</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=20945&goto=lastpost#lastpost">2009-9-3 03:55</a></em>
					<cite>by <a href="space.php?username=bczc">bczc</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_16208" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=16208&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_16208"><a href="viewthread.php?tid=16208&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">Anti-CNN再掀批判西方媒体狂潮 临危授命转移视线热力四射不逊去年</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7">张书记</a>
										</cite>
					<em>2009-7-7</em>
				</td>
				<td class="nums"><strong>47</strong> / <em>1066</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=16208&goto=lastpost#lastpost">2009-7-9 23:08</a></em>
					<cite>by <a href="space.php?username=%BC%D3%B7%C6%C3%A8">加菲猫</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_16061" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=16061&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_16061"><a href="viewthread.php?tid=16061&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">他蜡黄的脸色 是因为地中海的燥热还是天山的战火</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7">张书记</a>
										</cite>
					<em>2009-7-7</em>
				</td>
				<td class="nums"><strong>47</strong> / <em>1588</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=16061&goto=lastpost#lastpost">2009-7-10 11:21</a></em>
					<cite>by <a href="space.php?username=%B9%E2%C8%D9%CE%DE%B3%DC">光荣无耻</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_9138" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=9138&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_9138"><a href="viewthread.php?tid=9138&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">现场直播：我在HSJB的卧底生活  最新进展：他们给我发嘉奖令了！</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5004">lzw_0325</a>
										</cite>
					<em>2009-4-16</em>
				</td>
				<td class="nums"><strong>47</strong> / <em>1167</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=9138&goto=lastpost#lastpost">2009-4-18 10:56</a></em>
					<cite>by <a href="space.php?username=%B7%A8%BF%CB%88%98">法克垬</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_32559" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=32559&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_32559"><a href="viewthread.php?tid=32559&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">最新领袖画像《胡主席关心空军建设》</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1408">becom</a>
										</cite>
					<em>2009-12-26</em>
				</td>
				<td class="nums"><strong>47</strong> / <em>1566</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=32559&goto=lastpost#lastpost">2010-1-1 17:18</a></em>
					<cite>by <a href="space.php?username=argylls">argylls</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_34326" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=34326&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_34326"><a href="viewthread.php?tid=34326&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">解放军少将：需与美进行清算了</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8301">lqunl</a>
										</cite>
					<em>2010-1-11</em>
				</td>
				<td class="nums"><strong>47</strong> / <em>1019</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=34326&goto=lastpost#lastpost">2010-1-13 09:55</a></em>
					<cite>by <a href="space.php?username=%B4%F3%B0%D7%B2%CB">大白菜</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_35050" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=35050&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_35050"><a href="viewthread.php?tid=35050&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">影帝北京考察工作纪实：岁寒尤应念民生</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4570">我卖糕的</a>
										</cite>
					<em>2010-1-17</em>
				</td>
				<td class="nums"><strong>47</strong> / <em>964</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=35050&goto=lastpost#lastpost">2010-1-19 01:15</a></em>
					<cite>by <a href="space.php?username=xiaohe1120">xiaohe1120</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_34732" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=34732&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_34732"><a href="viewthread.php?tid=34732&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">民政部推荐结婚誓词 面对国旗国徽宣读</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4464">老驴快跑</a>
										</cite>
					<em>2010-1-14</em>
				</td>
				<td class="nums"><strong>47</strong> / <em>908</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=34732&goto=lastpost#lastpost">2010-1-22 16:52</a></em>
					<cite>by <a href="space.php?username=%B7%A8%BF%CB%88%98">法克垬</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_35454" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=35454&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_35454"><a href="viewthread.php?tid=35454&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传，中国足协副主席南勇被捕</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4137">铁道</a>
										</cite>
					<em>2010-1-21</em>
				</td>
				<td class="nums"><strong>47</strong> / <em>1478</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=35454&goto=lastpost#lastpost">2010-1-23 03:04</a></em>
					<cite>by <a href="space.php?username=%CC%FA%B5%C0">铁道</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_35890" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=35890&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_35890"><a href="viewthread.php?tid=35890&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">驻日使馆规劝冯正虎“勿被利用”</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7002">luugoo</a>
										</cite>
					<em>2010-1-25</em>
				</td>
				<td class="nums"><strong>47</strong> / <em>1130</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=35890&goto=lastpost#lastpost">2010-1-26 23:06</a></em>
					<cite>by <a href="space.php?username=%CD%B8%C2%B6%C9%E7%BC%C7%D5%DF">透露社记者</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_36987" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=36987&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_36987"><a href="viewthread.php?tid=36987&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传，文强后台在政治局</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4963">memoryz</a>
										</cite>
					<em>2010-2-6</em>
				</td>
				<td class="nums"><strong>47</strong> / <em>2180</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=36987&goto=lastpost#lastpost">2010-2-8 00:36</a></em>
					<cite>by <a href="space.php?username=weke">weke</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_37257" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=37257&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_37257"><a href="viewthread.php?tid=37257&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">安徽阜阳“白宫书记”一审被判死缓</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1258">路边社记者</a>
										</cite>
					<em>2010-2-8</em>
				</td>
				<td class="nums"><strong>47</strong> / <em>877</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=37257&goto=lastpost#lastpost">2010-2-9 11:26</a></em>
					<cite>by <a href="space.php?username=bafield">bafield</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_38235" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=38235&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_38235"><a href="viewthread.php?tid=38235&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传，山西将发生破坏性地震</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4570">我卖糕的</a>
										</cite>
					<em>2010-2-21</em>
				</td>
				<td class="nums"><strong>47</strong> / <em>1540</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=38235&goto=lastpost#lastpost">2010-2-23 09:18</a></em>
					<cite>by <a href="space.php?username=ak74">ak74</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_175" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=175&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_175"><a href="viewthread.php?tid=175&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">中国动画使法国青年成为垮掉的新一代</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=138">phenix</a>
										</cite>
					<em>2008-9-3</em>
				</td>
				<td class="nums"><strong>47</strong> / <em>1164</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=175&goto=lastpost#lastpost">2010-2-24 20:00</a></em>
					<cite>by <a href="space.php?username=%D2%BB%C0%C0%CE%DE%D3%EF">一览无语</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_38413" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=38413&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_38413"><a href="viewthread.php?tid=38413&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">调查显示重庆中学生最爱唱《共青团团歌》</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3202">glim</a>
										</cite>
					<em>2010-2-24</em>
				</td>
				<td class="nums"><strong>47</strong> / <em>671</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=38413&goto=lastpost#lastpost">2010-2-26 11:00</a></em>
					<cite>by <a href="space.php?username=%B3%FE%C3%C5%B5%C4%B9%FA%B6%C8">楚门的国度</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_38815" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=38815&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_38815"><a href="viewthread.php?tid=38815&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">上海熊猫开车撞老虎</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7002">luugoo</a>
										</cite>
					<em>2010-3-1</em>
				</td>
				<td class="nums"><strong>47</strong> / <em>1542</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=38815&goto=lastpost#lastpost">2010-3-2 10:53</a></em>
					<cite>by <a href="space.php?username=%BB%A8%CF%EB%C8%DD">花想容</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_33127" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=33127&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_33127"><a href="viewthread.php?tid=33127&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">浙江协警&quot;临时性强奸&quot;案重审 刑期3年变11年</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=10358">kachi</a>
										</cite>
					<em>2009-12-31</em>
				</td>
				<td class="nums"><strong>46</strong> / <em>478</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=33127&goto=lastpost#lastpost">2010-1-1 23:05</a></em>
					<cite>by <a href="space.php?username=%C1%F8%D2%B6%C3%BC">柳叶眉</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_33059" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=33059&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_33059"><a href="viewthread.php?tid=33059&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">陈冠希：修电脑很后悔 和谢霆锋永远是朋友</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2202">ccjing123</a>
										</cite>
					<em>2009-12-31</em>
				</td>
				<td class="nums"><strong>46</strong> / <em>1315</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=33059&goto=lastpost#lastpost">2010-1-2 18:30</a></em>
					<cite>by <a href="space.php?username=%B8%A1%D4%C6">浮云</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_35401" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=35401&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_35401"><a href="viewthread.php?tid=35401&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">宁夏真理部部长含泪作词献海地震死士兵</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2744">王小西</a>
										</cite>
					<em>2010-1-20</em>
				</td>
				<td class="nums"><strong>46</strong> / <em>859</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=35401&goto=lastpost#lastpost">2010-1-24 19:58</a></em>
					<cite>by <a href="space.php?username=%B6%A1%B4%BA%C7%EF">丁春秋</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_37262" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=37262&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_37262"><a href="viewthread.php?tid=37262&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">孔东梅签售《毛泽东箴言》，读者获书泣不成声</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8395">laoyang</a>
										</cite>
					<em>2010-2-8</em>
				</td>
				<td class="nums"><strong>46</strong> / <em>848</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=37262&goto=lastpost#lastpost">2010-2-14 21:46</a></em>
					<cite>by <a href="space.php?username=%B2%BB%BE%B4%C9%F1%B5%C4YODA">不敬神的YODA</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_38081" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=38081&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_38081"><a href="viewthread.php?tid=38081&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">原教育部发言人：没有人上不起学，春晚不合党中央指示</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2311">空空追梦</a>
										</cite>
					<em>2010-2-20</em>
				</td>
				<td class="nums"><strong>46</strong> / <em>1853</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=38081&goto=lastpost#lastpost">2010-2-23 09:07</a></em>
					<cite>by <a href="space.php?username=Yhard">Yhard</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_38305" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=38305&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_38305"><a href="viewthread.php?tid=38305&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传，将开征物业税</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8709">szdos</a>
										</cite>
					<em>2010-2-23</em>
				</td>
				<td class="nums"><strong>46</strong> / <em>1259</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=38305&goto=lastpost#lastpost">2010-2-25 17:28</a></em>
					<cite>by <a href="space.php?username=waiting_it">waiting_it</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_38430" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=38430&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_38430"><a href="viewthread.php?tid=38430&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">山西副省长死于海南街头</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6723">卡哥</a>
										</cite>
					<em>2010-2-24</em>
				</td>
				<td class="nums"><strong>46</strong> / <em>2326</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=38430&goto=lastpost#lastpost">2010-3-1 15:32</a></em>
					<cite>by <a href="space.php?username=%D2%A3%D7%D3">遥子</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_12609" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=12609&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_12609"><a href="viewthread.php?tid=12609&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">今天我穿白衣</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=844">T730B</a>
										</cite>
					<em>2009-6-4</em>
				</td>
				<td class="nums"><strong>46</strong> / <em>943</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=12609&goto=lastpost#lastpost">2009-6-5 10:44</a></em>
					<cite>by <a href="space.php?username=%CC%EF%B7%E1">田丰</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_23705" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=23705&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_23705"><a href="viewthread.php?tid=23705&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">94.9%被访者表示：如果可选仍愿做中国人</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5464">上海帅哥</a>
										</cite>
					<em>2009-9-28</em>
				</td>
				<td class="nums"><strong>46</strong> / <em>722</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=23705&goto=lastpost#lastpost">2009-9-29 15:35</a></em>
					<cite>by <a href="space.php?username=%CE%D2%C2%F4%B8%E2%B5%C4">我卖糕的</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_25708" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=25708&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_25708"><a href="viewthread.php?tid=25708&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">洛杉矶学校爆繁简字之争</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1686">奧斯卡金</a>
										</cite>
					<em>2009-10-20</em>
				</td>
				<td class="nums"><strong>46</strong> / <em>924</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=25708&goto=lastpost#lastpost">2009-10-22 19:26</a></em>
					<cite>by <a href="space.php?username=%BB%A8%CF%EB%C8%DD">花想容</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_26223" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=26223&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_26223"><a href="viewthread.php?tid=26223&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">纪念柏林墙倒塌20年网站被我朝网民占领</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=9146">fernando</a>
										</cite>
					<em>2009-10-25</em>
				</td>
				<td class="nums"><strong>46</strong> / <em>1427</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=26223&goto=lastpost#lastpost">2009-10-28 23:32</a></em>
					<cite>by <a href="space.php?username=%8AW%CB%B9%BF%A8%BD%F0">奧斯卡金</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_26339" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=26339&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_26339"><a href="viewthread.php?tid=26339&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">现场录音：闵行法官黄江对张晖说“你要听话”</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8689">郝劲松</a>
										</cite>
					<em>2009-10-27</em>
				</td>
				<td class="nums"><strong>46</strong> / <em>1747</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=26339&goto=lastpost#lastpost">2009-10-29 18:21</a></em>
					<cite>by <a href="space.php?username=paul">paul</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_54982" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=54982&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_54982"><a href="viewthread.php?tid=54982&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">真理部最新指令：不得派记者赴甘肃舟曲采访报道</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5588">我家旺财有喜了</a>
										</cite>
					<em>2010-8-8</em>
				</td>
				<td class="nums"><strong>46</strong> / <em>1606</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=54982&goto=lastpost#lastpost">2010-8-11 09:41</a></em>
					<cite>by <a href="space.php?username=nathansam">nathansam</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_54557" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=54557&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_54557"><a href="viewthread.php?tid=54557&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">中国专家预言：明后年可能有重大UFO出现</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=16585">xc2991</a>
										</cite>
					<em>2010-8-2</em>
				</td>
				<td class="nums"><strong>46</strong> / <em>1364</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=54557&goto=lastpost#lastpost">2010-8-19 13:14</a></em>
					<cite>by <a href="space.php?username=jiagengqiang">jiagengqiang</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_57476" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=57476&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_57476"><a href="viewthread.php?tid=57476&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">人人网出售用户资料</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7002">luugoo</a>
										</cite>
					<em>2010-9-5</em>
				</td>
				<td class="nums"><strong>46</strong> / <em>1176</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=57476&goto=lastpost#lastpost">2010-9-7 11:41</a></em>
					<cite>by <a href="space.php?username=%B7%CF%D6%D6%B6%B9%F4%F9">废种豆豉</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_57805" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=57805&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_57805"><a href="viewthread.php?tid=57805&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">全国1亿儿童将免费自愿接种麻疹疫苗</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=13517">gaoxsh</a>
										</cite>
					<em>2010-9-5</em>
				</td>
				<td class="nums"><strong>46</strong> / <em>783</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=57805&goto=lastpost#lastpost">2010-9-8 13:09</a></em>
					<cite>by <a href="space.php?username=%DF%D6%DF%D6%D7%EC">咧咧嘴</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_57997" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=57997&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_57997"><a href="viewthread.php?tid=57997&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">天津联通封杀高校ADSL共享 破门收走学生设备</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2973">free1989</a>
										</cite>
					<em>2010-9-9</em>
				</td>
				<td class="nums"><strong>46</strong> / <em>1072</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=57997&goto=lastpost#lastpost">2010-9-28 08:10</a></em>
					<cite>by <a href="space.php?username=espop">espop</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_60001" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=60001&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_60001"><a href="viewthread.php?tid=60001&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">胡锦涛电贺金正日被推举为朝鲜劳动党总书记</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=18152">非虎即猫</a>
										</cite>
					<em>2010-9-29</em>
				</td>
				<td class="nums"><strong>46</strong> / <em>920</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=60001&goto=lastpost#lastpost">2010-10-2 18:58</a></em>
					<cite>by <a href="space.php?username=Phillip">Phillip</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_59922" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=59922&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_59922"><a href="viewthread.php?tid=59922&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传新房产税将于国庆前后出台</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=12412">wangguoping</a>
										</cite>
					<em>2010-9-22</em>
				</td>
				<td class="nums"><strong>46</strong> / <em>1259</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=59922&goto=lastpost#lastpost">2010-10-8 18:21</a></em>
					<cite>by <a href="space.php?username=tonosama2">tonosama2</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_41139" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=41139&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_41139"><a href="viewthread.php?tid=41139&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">郑州一派出所长街头追贼途中摔伤 百人冷漠旁观</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4570">我卖糕的</a>
										</cite>
					<em>2010-3-24</em>
				</td>
				<td class="nums"><strong>46</strong> / <em>1172</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=41139&goto=lastpost#lastpost">2010-3-27 17:42</a></em>
					<cite>by <a href="space.php?username=Designer">Designer</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_41511" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=41511&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_41511"><a href="viewthread.php?tid=41511&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">郑中基阿sa承认06年已结婚 正在办理离婚手续</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4964">xifanliang</a>
										</cite>
					<em>2010-3-27</em>
				</td>
				<td class="nums"><strong>46</strong> / <em>1307</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=41511&goto=lastpost#lastpost">2010-3-30 15:51</a></em>
					<cite>by <a href="space.php?username=%D1%D5%C8%E7%D3%F1">颜如玉</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_43023" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=43023&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_43023"><a href="viewthread.php?tid=43023&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">由奥巴马提议 胡奥为两国近期遇难矿工默哀一分钟</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7">张书记</a>
										</cite>
					<em>2010-4-14</em>
				</td>
				<td class="nums"><strong>46</strong> / <em>1061</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=43023&goto=lastpost#lastpost">2010-4-16 09:06</a></em>
					<cite>by <a href="space.php?username=%C9%B5%D7%D3%BF%B4%C9%E7%BB%E1">傻子看社会</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_43199" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=43199&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_43199"><a href="viewthread.php?tid=43199&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传，崔永元拉皮条</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4638">江湖席</a>
										</cite>
					<em>2010-4-16</em>
				</td>
				<td class="nums"><strong>46</strong> / <em>2133</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=43199&goto=lastpost#lastpost">2010-4-17 00:34</a></em>
					<cite>by <a href="space.php?username=angelahu">angelahu</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_44845" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=44845&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_44845"><a href="viewthread.php?tid=44845&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">央视记者直播中遭遇美国警方质询</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3023">禅茶一味</a>
										</cite>
					<em>2010-5-4</em>
				</td>
				<td class="nums"><strong>46</strong> / <em>1851</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=44845&goto=lastpost#lastpost">2010-5-6 05:08</a></em>
					<cite>by <a href="space.php?username=singlefabulous">singlefabulous</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_44981" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=44981&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_44981"><a href="viewthread.php?tid=44981&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">上海秘密邀请如来佛祖为世博会重新“开光”</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8301">lqunl</a>
										</cite>
					<em>2010-5-6</em>
				</td>
				<td class="nums"><strong>46</strong> / <em>1623</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=44981&goto=lastpost#lastpost">2010-5-11 15:46</a></em>
					<cite>by <a href="space.php?username=unclepandora">unclepandora</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_45402" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=45402&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_45402"><a href="viewthread.php?tid=45402&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">中国将全面禁止在室内公共场所吸烟</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3202">glim</a>
										</cite>
					<em>2010-5-10</em>
				</td>
				<td class="nums"><strong>46</strong> / <em>638</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=45402&goto=lastpost#lastpost">2010-5-13 21:28</a></em>
					<cite>by <a href="space.php?username=rushwizard">rushwizard</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_46556" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=46556&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_46556"><a href="viewthread.php?tid=46556&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">新疆喀什将建立经济特区 新疆五年内赶上全国人均GDP</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8644">蛋美</a>
										</cite>
					<em>2010-5-21</em>
				</td>
				<td class="nums"><strong>46</strong> / <em>891</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=46556&goto=lastpost#lastpost">2010-5-23 21:26</a></em>
					<cite>by <a href="space.php?username=LyLroi">LyLroi</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_46668" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=46668&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_46668"><a href="viewthread.php?tid=46668&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">叶莉休斯敦医院顺利生产 姚明喜获千金正式当爸爸</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4638">江湖席</a>
										</cite>
					<em>2010-5-22</em>
				</td>
				<td class="nums"><strong>46</strong> / <em>678</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=46668&goto=lastpost#lastpost">2010-5-24 17:27</a></em>
					<cite>by <a href="space.php?username=yoyominnie">yoyominnie</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_27810" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=27810&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_27810"><a href="viewthread.php?tid=27810&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">欧巴马总统16日将首访上海对话韩寒</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7379">aiweiwei</a>
										</cite>
					<em>2009-11-11</em>
				</td>
				<td class="nums"><strong>46</strong> / <em>1372</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=27810&goto=lastpost#lastpost">2009-11-13 10:20</a></em>
					<cite>by <a href="space.php?username=tonosama2">tonosama2</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_27997" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=27997&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_27997"><a href="viewthread.php?tid=27997&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">渣打银行分析师认为中国政府说谎</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4570">我卖糕的</a>
										</cite>
					<em>2009-11-14</em>
				</td>
				<td class="nums"><strong>46</strong> / <em>1835</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=27997&goto=lastpost#lastpost">2009-11-21 19:28</a></em>
					<cite>by <a href="space.php?username=ren2kk">ren2kk</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_27973" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=27973&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_27973"><a href="viewthread.php?tid=27973&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">刘少奇逝世40周年 近千人冒雨追思</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4570">我卖糕的</a>
										</cite>
					<em>2009-11-13</em>
				</td>
				<td class="nums"><strong>46</strong> / <em>1160</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=27973&goto=lastpost#lastpost">2009-11-23 12:38</a></em>
					<cite>by <a href="space.php?username=shsmtz">shsmtz</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_28609" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=28609&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_28609"><a href="viewthread.php?tid=28609&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">成龙称“有些国家为了三尺的地盘，就让几十万的人民受难”</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3202">glim</a>
										</cite>
					<em>2009-11-21</em>
				</td>
				<td class="nums"><strong>46</strong> / <em>1764</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=28609&goto=lastpost#lastpost">2009-11-25 10:58</a></em>
					<cite>by <a href="space.php?username=%C0%D7%C2%FC%D0%D6%B5%DC">雷曼兄弟</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_28863" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=28863&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_28863"><a href="viewthread.php?tid=28863&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">胡温&quot;握手&quot;雕塑将入住汶川地震博物馆</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=195">cgw_1980</a>
										</cite>
					<em>2009-11-24</em>
				</td>
				<td class="nums"><strong>46</strong> / <em>739</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=28863&goto=lastpost#lastpost">2009-11-25 17:01</a></em>
					<cite>by <a href="space.php?username=%CC%E1%C0%AD%C3%D7%CB%D5">提拉米苏</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_29282" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=29282&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_29282"><a href="viewthread.php?tid=29282&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">三鹿破产案终结 结石患儿无法获得任何赔偿</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8546">dybnu</a>
										</cite>
					<em>2009-11-28</em>
				</td>
				<td class="nums"><strong>46</strong> / <em>782</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=29282&goto=lastpost#lastpost">2009-12-2 19:54</a></em>
					<cite>by <a href="space.php?username=%CE%F7%C3%C5%B4%B5%C5%A3">西门吹牛</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_31146" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=31146&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_31146"><a href="viewthread.php?tid=31146&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">肖像画《我们的总设计师》标的1000万</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3202">glim</a>
										</cite>
					<em>2009-12-15</em>
				</td>
				<td class="nums"><strong>46</strong> / <em>1034</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=31146&goto=lastpost#lastpost">2009-12-18 07:54</a></em>
					<cite>by <a href="space.php?username=xuebowee">xuebowee</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_31762" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=31762&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_31762"><a href="viewthread.php?tid=31762&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">央视揭秘：“网络黑社会”操控舆论</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3202">glim</a>
										</cite>
					<em>2009-12-20</em>
				</td>
				<td class="nums"><strong>46</strong> / <em>1112</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=31762&goto=lastpost#lastpost">2009-12-21 17:25</a></em>
					<cite>by <a href="space.php?username=%C0%CF%C4%AB">老墨</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_32209" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=32209&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_32209"><a href="viewthread.php?tid=32209&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">李小琳接受CCTV2采访</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5464">上海帅哥</a>
										</cite>
					<em>2009-12-23</em>
				</td>
				<td class="nums"><strong>46</strong> / <em>1479</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=32209&goto=lastpost#lastpost">2009-12-25 23:04</a></em>
					<cite>by <a href="space.php?username=msdfc">msdfc</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_49927" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=49927&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_49927"><a href="viewthread.php?tid=49927&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传国保或已经开始在各地部署先进的监听设备</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=15480">败亦枭雄</a>
										</cite>
					<em>2010-6-18</em>
				</td>
				<td class="nums"><strong>46</strong> / <em>1532</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=49927&goto=lastpost#lastpost">2010-6-21 12:15</a></em>
					<cite>by <a href="space.php?username=kisspussy">kisspussy</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_50556" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=50556&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_50556"><a href="viewthread.php?tid=50556&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">广西一公安副局长带枪回家  儿子玩枪不慎走火身亡</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=852">未来他老爸</a>
										</cite>
					<em>2010-6-23</em>
				</td>
				<td class="nums"><strong>46</strong> / <em>1055</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=50556&goto=lastpost#lastpost">2010-6-27 15:57</a></em>
					<cite>by <a href="space.php?username=hellomanhao">hellomanhao</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_51217" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=51217&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_51217"><a href="viewthread.php?tid=51217&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">加拿大中国高校联合会发通知列队迎接胡锦涛</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2071">上肛上腺</a>
										</cite>
					<em>2010-6-24</em>
				</td>
				<td class="nums"><strong>46</strong> / <em>1421</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=51217&goto=lastpost#lastpost">2010-6-30 12:03</a></em>
					<cite>by <a href="space.php?username=%BA%D3%D0%B7%BA%C3%B3%D4">河蟹好吃</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_50495" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=50495&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_50495"><a href="viewthread.php?tid=50495&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">一周图片新闻 6.21-6.27</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2232">老杂疫</a>
										</cite>
					<em>2010-6-23</em>
				</td>
				<td class="nums"><strong>46</strong> / <em>1380</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=50495&goto=lastpost#lastpost">2010-6-30 17:21</a></em>
					<cite>by <a href="space.php?username=tonya">tonya</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_52273" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=52273&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_52273"><a href="viewthread.php?tid=52273&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">深圳华侨城游乐项目发生事故6人遇难9人受伤</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2578">闹了个运</a>
										</cite>
					<em>2010-6-29</em>
				</td>
				<td class="nums"><strong>46</strong> / <em>1575</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=52273&goto=lastpost#lastpost">2010-7-10 12:57</a></em>
					<cite>by <a href="space.php?username=Dr.Panda">Dr.Panda</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_52658" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=52658&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_52658"><a href="viewthread.php?tid=52658&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">上海大学教授朱学勤博士论文被指涉嫌抄袭</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2311">空空追梦</a>
										</cite>
					<em>2010-7-11</em>
				</td>
				<td class="nums"><strong>46</strong> / <em>1016</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=52658&goto=lastpost#lastpost">2010-7-18 14:42</a></em>
					<cite>by <a href="space.php?username=DaemonEye">DaemonEye</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_53688" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=53688&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_53688"><a href="viewthread.php?tid=53688&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">领导视察 学生列队鞠躬</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2393">蚊驱</a>
										</cite>
					<em>2010-7-22</em>
				</td>
				<td class="nums"><strong>46</strong> / <em>987</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=53688&goto=lastpost#lastpost">2010-7-26 00:25</a></em>
					<cite>by <a href="space.php?username=cnalbert">cnalbert</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_53986" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=53986&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_53986"><a href="viewthread.php?tid=53986&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">中科院力学所实验室遭强拆</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=16059">康帅博</a>
										</cite>
					<em>2010-7-19</em>
				</td>
				<td class="nums"><strong>46</strong> / <em>1169</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=53986&goto=lastpost#lastpost">2010-7-26 12:15</a></em>
					<cite>by <a href="space.php?username=%BE%F8%CD%FB%D7%D3">绝望子</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_53985" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=53985&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_53985"><a href="viewthread.php?tid=53985&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">李连杰难忘邓爷爷昔日关怀   称现在要为人民服务</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=852">未来他老爸</a>
										</cite>
					<em>2010-7-26</em>
				</td>
				<td class="nums"><strong>46</strong> / <em>881</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=53985&goto=lastpost#lastpost">2010-7-29 12:00</a></em>
					<cite>by <a href="space.php?username=%D0%C0%D7%D3">欣子</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_54382" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=54382&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_54382"><a href="viewthread.php?tid=54382&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">洪水冲垮化工厂松花江污染  吉林市大面积停水</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7938">1980s</a>
										</cite>
					<em>2010-7-28</em>
				</td>
				<td class="nums"><strong>46</strong> / <em>990</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=54382&goto=lastpost#lastpost">2010-7-31 13:33</a></em>
					<cite>by <a href="space.php?username=nanalonely">nanalonely</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_5567" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=5567&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_5567"><a href="viewthread.php?tid=5567&amp;extra=page%3D28%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">公主殿下身着菲拉格莫 心怀老区受苦群众</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3202">glim</a>
										</cite>
					<em>2009-2-24</em>
				</td>
				<td class="nums"><strong>46</strong> / <em>868</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=5567&goto=lastpost#lastpost">2009-2-26 10:35</a></em>
					<cite>by <a href="space.php?username=%BE%F8%B2%BB%B8%B6%D5%CB">绝不付账</a></cite>
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
	<div class="pages"><em>&nbsp;22278&nbsp;</em><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=1" class="first">1 ...</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=27" class="prev">&lsaquo;&lsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=26">26</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=27">27</a><strong>28</strong><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=29">29</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=30">30</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=31">31</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=32">32</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=33">33</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=34">34</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=35">35</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=29" class="next">&rsaquo;&rsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=349" class="last">... 349</a><kbd><input type="text" name="custompage" size="3" onkeydown="if(event.keyCode==13) {window.location='forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page='+this.value; return false;}" /></kbd></div>	</div>

  
	<div class="box">
			<span class="headactions"><a href="forumdisplay.php?fid=2&amp;page=28&amp;showoldetails=yes#online" class="nobdr"><img src="images/default/collapsed_yes.gif" alt="" /></a></span>
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
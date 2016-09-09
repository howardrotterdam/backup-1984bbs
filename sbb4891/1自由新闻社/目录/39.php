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
			window.location = 'forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&page=38';
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
<div class="pages"><em>&nbsp;22278&nbsp;</em><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=1" class="first">1 ...</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=38" class="prev">&lsaquo;&lsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=37">37</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=38">38</a><strong>39</strong><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=40">40</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=41">41</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=42">42</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=43">43</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=44">44</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=45">45</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=46">46</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=40" class="next">&rsaquo;&rsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=349" class="last">... 349</a><kbd><input type="text" name="custompage" size="3" onkeydown="if(event.keyCode==13) {window.location='forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page='+this.value; return false;}" /></kbd></div></div>

<div style="float:left;border:1px solid #CCC; border-bottom:none;;width:218px; background: url(/imgs/1984radio.jpg) 200px 2px no-repeat;padding:5px 0 5px 12px;margin:0px 0 0 13px">

<p><b><a href="/radio/index.php" target="_blank">1984FM</a></b><br /><b><a href="https://voxli.com/1984bbs" target="_blank">1984Chat</a></b>&nbsp;</p> 
</div>

<div style="clear:both;height:0px;width:100%;font-size:1px;">&nbsp;</div>

	<ul class="popupmenu_popup newspecialmenu" id="newspecial_menu" style="display: none">
		<li><a href="post.php?action=newthread&amp;fid=2&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">发新话题</a></li>		<li class="poll"><a href="post.php?action=newthread&amp;fid=2&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;special=1">发布投票</a></li>													</ul>
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

					<tbody id="normalthread_56077" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=56077&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_56077"><a href="viewthread.php?tid=56077&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">甘肃舟曲824名高考生全部被录取</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=17613">prometheus</a>
										</cite>
					<em>2010-8-21</em>
				</td>
				<td class="nums"><strong>39</strong> / <em>640</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=56077&goto=lastpost#lastpost">2010-8-24 21:17</a></em>
					<cite>by <a href="space.php?username=olly2">olly2</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_56632" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=56632&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_56632"><a href="viewthread.php?tid=56632&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">中日韩青运会 中国橄榄球队0：71负韩国</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=17098">忽然不得零</a>
										</cite>
					<em>2010-8-27</em>
				</td>
				<td class="nums"><strong>39</strong> / <em>1109</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=56632&goto=lastpost#lastpost">2010-8-30 10:37</a></em>
					<cite>by <a href="space.php?username=linshuiasus">linshuiasus</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_57007" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=57007&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_57007"><a href="viewthread.php?tid=57007&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">法国动员欧盟为因通奸罪被判石刑伊朗妇女求情</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=10369">风餐露宿</a>
										</cite>
					<em>2010-9-1</em>
				</td>
				<td class="nums"><strong>39</strong> / <em>558</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=57007&goto=lastpost#lastpost">2010-9-3 13:58</a></em>
					<cite>by <a href="space.php?username=%B7%CF%D6%D6%B6%B9%F4%F9">废种豆豉</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_57107" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=57107&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_57107"><a href="viewthread.php?tid=57107&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">央视人事大变局</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=11630">dongzemao</a>
										</cite>
					<em>2010-9-2</em>
				</td>
				<td class="nums"><strong>39</strong> / <em>1891</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=57107&goto=lastpost#lastpost">2010-9-4 08:50</a></em>
					<cite>by <a href="space.php?username=level">level</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_59454" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=59454&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_59454"><a href="viewthread.php?tid=59454&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">真理部最新指令：不报道安元鼎截访</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7919">路边社门卫</a>
										</cite>
					<em>2010-9-26</em>
				</td>
				<td class="nums"><strong>39</strong> / <em>1474</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=59454&goto=lastpost#lastpost">2010-9-27 19:55</a></em>
					<cite>by <a href="space.php?username=%BA%FC%C0%EA%BF%A8%BF%A8">狐狸卡卡</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_60689" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=60689&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_60689"><a href="viewthread.php?tid=60689&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">奥巴马要求中国释放诺贝尔奖得主刘晓波</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2973">free1989</a>
										</cite>
					<em>2010-10-9</em>
				</td>
				<td class="nums"><strong>39</strong> / <em>1837</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=60689&goto=lastpost#lastpost">2010-10-10 12:45</a></em>
					<cite>by <a href="space.php?username=%B0%C4%D6%DE%DEr%88%F6%D4%5D">澳洲農場註</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_14887" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=14887&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_14887"><a href="viewthread.php?tid=14887&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">新华社：Goolge断网将使国内商家失去对Google的信心</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2428">xiahua</a>
										</cite>
					<em>2009-6-25</em>
				</td>
				<td class="nums"><strong>39</strong> / <em>808</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=14887&goto=lastpost#lastpost">2009-6-27 21:28</a></em>
					<cite>by <a href="space.php?username=%B4%F3%C8%CB%A3%AC%D3%D0%D0%D8%C6%F7">大人，有胸器</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_16697" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=16697&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_16697"><a href="viewthread.php?tid=16697&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">政协委员提出中国“马歇尔计划” 拟和谐全世界</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4570">我卖糕的</a>
										</cite>
					<em>2009-7-14</em>
				</td>
				<td class="nums"><strong>39</strong> / <em>952</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=16697&goto=lastpost#lastpost">2009-7-17 19:05</a></em>
					<cite>by <a href="space.php?username=Mclovin">Mclovin</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_2654" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=2654&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_2654"><a href="viewthread.php?tid=2654&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">网易2008年终致敬：无跟帖，不新闻</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=872">钱烈宪</a>
										</cite>
					<em>2008-12-31</em>
				</td>
				<td class="nums"><strong>39</strong> / <em>709</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=2654&goto=lastpost#lastpost">2007-10-28 17:40</a></em>
					<cite>by <a href="space.php?username=nustbobo">nustbobo</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_40100" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=40100&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_40100"><a href="viewthread.php?tid=40100&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">中国人口应先控后减到5亿 有助人均国力强大</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7093">elfix</a>
										</cite>
					<em>2010-3-12</em>
				</td>
				<td class="nums"><strong>38</strong> / <em>517</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=40100&goto=lastpost#lastpost">2010-3-13 20:12</a></em>
					<cite>by <a href="space.php?username=%D3%E3%B6%C7%B0%D7">鱼肚白</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_40980" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=40980&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_40980"><a href="viewthread.php?tid=40980&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">中国媒体群起抨击谷歌</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1333">废种豆豉</a>
										</cite>
					<em>2010-3-22</em>
				</td>
				<td class="nums"><strong>38</strong> / <em>1446</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=40980&goto=lastpost#lastpost">2010-3-25 09:32</a></em>
					<cite>by <a href="space.php?username=FIFA%BB%E1%D4%B1">FIFA会员</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_41152" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=41152&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_41152"><a href="viewthread.php?tid=41152&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">美国普查无Taiwanese选项 台立委批政府受不了中国施压</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=10619">voasia</a>
										</cite>
					<em>2010-3-24</em>
				</td>
				<td class="nums"><strong>38</strong> / <em>536</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=41152&goto=lastpost#lastpost">2010-3-29 16:17</a></em>
					<cite>by <a href="space.php?username=%B6%A1%B6%A1">丁丁</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_41537" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=41537&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_41537"><a href="viewthread.php?tid=41537&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">92岁老人携子自焚1死1伤仍未能阻止强拆</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=12421">ts1089</a>
										</cite>
					<em>2010-3-28</em>
				</td>
				<td class="nums"><strong>38</strong> / <em>623</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=41537&goto=lastpost#lastpost">2010-3-29 21:14</a></em>
					<cite>by <a href="space.php?username=%C5%BC%D1%F0%B7%E8">偶佯疯</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_41624" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=41624&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_41624"><a href="viewthread.php?tid=41624&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">国家防总办给每个灾民2.5元钱补助经费</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4570">我卖糕的</a>
										</cite>
					<em>2010-3-24</em>
				</td>
				<td class="nums"><strong>38</strong> / <em>961</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=41624&goto=lastpost#lastpost">2010-3-30 12:51</a></em>
					<cite>by <a href="space.php?username=%C7%B1%BA%A3%B2%D8%D4%C6">潜海藏云</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_41751" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=41751&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_41751"><a href="viewthread.php?tid=41751&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">福州市市委书记的儿子被公选成为县长</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=10890">xiaohe1120</a>
										</cite>
					<em>2010-3-30</em>
				</td>
				<td class="nums"><strong>38</strong> / <em>1351</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=41751&goto=lastpost#lastpost">2010-4-3 08:17</a></em>
					<cite>by <a href="space.php?username=%D6%D0%B9%FA%D0%C4">中国心</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_41365" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=41365&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_41365"><a href="viewthread.php?tid=41365&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">中国官员认为湄公河干旱与中国大坝无关</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4705">dreamingly</a>
										</cite>
					<em>2010-3-25</em>
				</td>
				<td class="nums"><strong>38</strong> / <em>913</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=41365&goto=lastpost#lastpost">2010-4-3 16:34</a></em>
					<cite>by <a href="space.php?username=%BB%A8%CF%EB%C8%DD">花想容</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_42292" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=42292&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_42292"><a href="viewthread.php?tid=42292&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">大学生找工作屡受挫烧毕业证</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=852">未来他老爸</a>
										</cite>
					<em>2010-4-5</em>
				</td>
				<td class="nums"><strong>38</strong> / <em>736</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=42292&goto=lastpost#lastpost">2010-4-6 18:53</a></em>
					<cite>by <a href="space.php?username=%B1%E4%BD%DA%D5%DF">变节者</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_43793" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=43793&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_43793"><a href="viewthread.php?tid=43793&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">俞正声堂弟俞恬声在美遭袭 生命垂危</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=9991">duck_1984</a>
										</cite>
					<em>2010-4-22</em>
				</td>
				<td class="nums"><strong>38</strong> / <em>1916</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=43793&goto=lastpost#lastpost">2010-4-26 22:11</a></em>
					<cite>by <a href="space.php?username=%F7%EC%D1%C5%CB%AE%DC%B0">黛雅水馨</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_44478" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=44478&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_44478"><a href="viewthread.php?tid=44478&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">&quot;地震感知报警系统&quot;秦皇岛面世 可提前10秒预警</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=10890">xiaohe1120</a>
										</cite>
					<em>2010-4-30</em>
				</td>
				<td class="nums"><strong>38</strong> / <em>575</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=44478&goto=lastpost#lastpost">2010-5-1 19:29</a></em>
					<cite>by <a href="space.php?username=ninio">ninio</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_44497" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=44497&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_44497"><a href="viewthread.php?tid=44497&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">上海市政府通知：世博园附近居民不得租房给记者外国人少数民族</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7">张书记</a>
										</cite>
					<em>2010-4-30</em>
				</td>
				<td class="nums"><strong>38</strong> / <em>754</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=44497&goto=lastpost#lastpost">2010-5-3 11:57</a></em>
					<cite>by <a href="space.php?username=%B7%B2%B3%BE">凡尘</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_44474" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=44474&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_44474"><a href="viewthread.php?tid=44474&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">深圳副市长：无业人员不清除 深圳没有太平</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2392">beiou</a>
										</cite>
					<em>2010-4-30</em>
				</td>
				<td class="nums"><strong>38</strong> / <em>724</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=44474&goto=lastpost#lastpost">2010-5-4 10:02</a></em>
					<cite>by <a href="space.php?username=honey-ct">honey-ct</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_44686" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=44686&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_44686"><a href="viewthread.php?tid=44686&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">真理部部长刘云山要求党员在敏感问题面前站在正确立场上</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7">张书记</a>
										</cite>
					<em>2010-5-2</em>
				</td>
				<td class="nums"><strong>38</strong> / <em>1233</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=44686&goto=lastpost#lastpost">2010-5-5 12:07</a></em>
					<cite>by <a href="space.php?username=nathansam">nathansam</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_44850" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=44850&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_44850"><a href="viewthread.php?tid=44850&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">一周图片新闻 5.3-5.9</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2232">老杂疫</a>
										</cite>
					<em>2010-5-4</em>
				</td>
				<td class="nums"><strong>38</strong> / <em>1208</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=44850&goto=lastpost#lastpost">2010-5-10 04:08</a></em>
					<cite>by <a href="space.php?username=nononothing">nononothing</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_45552" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=45552&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_45552"><a href="viewthread.php?tid=45552&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">张纪中3亿美金打造3D《美猴王》</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8301">lqunl</a>
										</cite>
					<em>2010-5-12</em>
				</td>
				<td class="nums"><strong>38</strong> / <em>625</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=45552&goto=lastpost#lastpost">2010-5-13 17:59</a></em>
					<cite>by <a href="space.php?username=yylbb78">yylbb78</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_45824" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=45824&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_45824"><a href="viewthread.php?tid=45824&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">亚洲大学排名公布  港大第一北大清华未进前十</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=852">未来他老爸</a>
										</cite>
					<em>2010-5-14</em>
				</td>
				<td class="nums"><strong>38</strong> / <em>827</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=45824&goto=lastpost#lastpost">2010-5-20 13:17</a></em>
					<cite>by <a href="space.php?username=%B6%A1%B6%A1">丁丁</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_46616" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=46616&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_46616"><a href="viewthread.php?tid=46616&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">山西不再公布王家岭矿难38名遇难者名单</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5464">上海帅哥</a>
										</cite>
					<em>2010-5-21</em>
				</td>
				<td class="nums"><strong>38</strong> / <em>646</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=46616&goto=lastpost#lastpost">2010-5-23 12:13</a></em>
					<cite>by <a href="space.php?username=%D0%A1%E5%B7%E5%B7">小宸宸</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_21487" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=21487&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_21487"><a href="viewthread.php?tid=21487&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">60大阅兵之制服诱惑</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=852">未来他老爸</a>
										</cite>
					<em>2009-9-6</em>
				</td>
				<td class="nums"><strong>38</strong> / <em>1263</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=21487&goto=lastpost#lastpost">2009-9-8 16:12</a></em>
					<cite>by <a href="space.php?username=aassaa">aassaa</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_21459" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=21459&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_21459"><a href="viewthread.php?tid=21459&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传，王乐泉已撤换</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3133">martinshui</a>
										</cite>
					<em>2009-9-5</em>
				</td>
				<td class="nums"><strong>38</strong> / <em>2508</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=21459&goto=lastpost#lastpost">2009-9-9 11:53</a></em>
					<cite>by <a href="space.php?username=%C5%A3%B6%D9">牛顿</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_23062" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=23062&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_23062"><a href="viewthread.php?tid=23062&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">中国涌现越来越多个性官员 敢说狠话敢说真话</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=852">未来他老爸</a>
										</cite>
					<em>2009-9-21</em>
				</td>
				<td class="nums"><strong>38</strong> / <em>1085</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=23062&goto=lastpost#lastpost">2009-9-25 00:27</a></em>
					<cite>by <a href="space.php?username=Yhard">Yhard</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_23333" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=23333&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_23333"><a href="viewthread.php?tid=23333&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传，北京前门又出命案</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=21">大仙儿</a>
										</cite>
					<em>2009-9-25</em>
				</td>
				<td class="nums"><strong>38</strong> / <em>1490</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=23333&goto=lastpost#lastpost">2009-9-25 22:41</a></em>
					<cite>by <a href="space.php?username=%BD%F4%D2%AF">紧爷</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_23411" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=23411&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_23411"><a href="viewthread.php?tid=23411&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">新人举行国庆主题婚礼 宣誓爱国爱党</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=80">国家罗汉</a>
										</cite>
					<em>2009-9-25</em>
				</td>
				<td class="nums"><strong>38</strong> / <em>477</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=23411&goto=lastpost#lastpost">2009-9-28 15:19</a></em>
					<cite>by <a href="space.php?username=%CD%CA%C9%ABFADEAWAY">褪色FADEAWAY</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_23694" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=23694&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_23694"><a href="viewthread.php?tid=23694&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">他们不远万里来到中国 为的是维护首都国庆治安……</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6327">chandler0819</a>
										</cite>
					<em>2009-9-28</em>
				</td>
				<td class="nums"><strong>38</strong> / <em>1170</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=23694&goto=lastpost#lastpost">2009-10-2 15:56</a></em>
					<cite>by <a href="space.php?username=%B0%A2%C5%A3">阿牛</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_23871" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=23871&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_23871"><a href="viewthread.php?tid=23871&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">复旦大学调查显示9成大学生自认为较爱国</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4570">我卖糕的</a>
										</cite>
					<em>2009-9-29</em>
				</td>
				<td class="nums"><strong>38</strong> / <em>505</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=23871&goto=lastpost#lastpost">2009-10-2 22:51</a></em>
					<cite>by <a href="space.php?username=%CE%F7%C3%C5%B4%B5%C5%A3">西门吹牛</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_23677" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=23677&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_23677"><a href="viewthread.php?tid=23677&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">马琳他妈：“我儿子是党员，绝不可能做这种事情”</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5325">hijude</a>
										</cite>
					<em>2009-9-28</em>
				</td>
				<td class="nums"><strong>38</strong> / <em>1386</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=23677&goto=lastpost#lastpost">2009-10-9 20:27</a></em>
					<cite>by <a href="space.php?username=%D1%D5%C8%E7%D3%F1">颜如玉</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_24784" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=24784&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_24784"><a href="viewthread.php?tid=24784&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">台湾举办中华民国建国98年国庆典礼 马英九发表讲话</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6314">hhbcl1414</a>
										</cite>
					<em>2009-10-10</em>
				</td>
				<td class="nums"><strong>38</strong> / <em>878</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=24784&goto=lastpost#lastpost">2009-10-12 09:53</a></em>
					<cite>by <a href="space.php?username=luckyray">luckyray</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_24836" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=24836&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_24836"><a href="viewthread.php?tid=24836&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">影帝三十五中课堂笔记流出</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8068">好好向上</a>
										</cite>
					<em>2009-10-12</em>
				</td>
				<td class="nums"><strong>38</strong> / <em>1149</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=24836&goto=lastpost#lastpost">2009-10-17 11:17</a></em>
					<cite>by <a href="space.php?username=%BE%F8%CD%FB%B5%C4%C2%E4%D6%A7%B3%C5">绝望的落支撑</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_10915" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=10915&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_10915"><a href="viewthread.php?tid=10915&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">影帝只吃了4块7</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3202">glim</a>
										</cite>
					<em>2009-5-14</em>
				</td>
				<td class="nums"><strong>38</strong> / <em>1013</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=10915&goto=lastpost#lastpost">2009-5-20 19:54</a></em>
					<cite>by <a href="space.php?username=%B3%E5%B4%FC%C4%CC%B7%DB%B8%F8%B5%B3%BA%C8">冲袋奶粉给党喝</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_6086" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=6086&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_6086"><a href="viewthread.php?tid=6086&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">村上春树：我永远站在蛋这边</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3202">glim</a>
										</cite>
					<em>2009-3-2</em>
				</td>
				<td class="nums"><strong>38</strong> / <em>1023</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=6086&goto=lastpost#lastpost">2009-6-2 06:08</a></em>
					<cite>by <a href="space.php?username=fscrazymouse">fscrazymouse</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_12411" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=12411&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_12411"><a href="viewthread.php?tid=12411&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">常州城管官网因瓜瓜履职大规模抽风</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3306">寻找无双</a>
										</cite>
					<em>2009-5-29</em>
				</td>
				<td class="nums"><strong>38</strong> / <em>1472</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=12411&goto=lastpost#lastpost">2009-6-2 20:24</a></em>
					<cite>by <a href="space.php?username=%D6%F1%B1%BE%CE%DE%D0%C4">竹本无心</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_12782" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=12782&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_12782"><a href="viewthread.php?tid=12782&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">真假不详，亮点多多：有些南京男孩自己条件一般还自以为是，看不起苏北女孩</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3202">glim</a>
										</cite>
					<em>2009-6-5</em>
				</td>
				<td class="nums"><strong>38</strong> / <em>978</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=12782&goto=lastpost#lastpost">2009-6-8 11:51</a></em>
					<cite>by <a href="space.php?username=%BF%E2%B4%E6%F4%C2%F4%C4">库存袈裟</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_3857" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=3857&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_3857"><a href="viewthread.php?tid=3857&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">那个在CCTV里出事情的女同声传译会有什么结局啊？</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=359">未来的主人翁</a>
										</cite>
					<em>2009-1-21</em>
				</td>
				<td class="nums"><strong>38</strong> / <em>670</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=3857&goto=lastpost#lastpost">2009-1-22 17:27</a></em>
					<cite>by <a href="space.php?username=%D6%CF%CF%A2%B5%C4%D3%E3">窒息的鱼</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_4168" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=4168&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_4168"><a href="viewthread.php?tid=4168&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">这只破鞋涉嫌辱华……</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7">张书记</a>
										</cite>
					<em>2009-2-3</em>
				</td>
				<td class="nums"><strong>38</strong> / <em>838</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=4168&goto=lastpost#lastpost">2009-2-5 11:58</a></em>
					<cite>by <a href="space.php?username=%C5%D3%B1%B4%B3%C7%CD%F6%C1%E9">庞贝城亡灵</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_5581" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=5581&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_5581"><a href="viewthread.php?tid=5581&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">某爱国女青年激情抗日</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=169">抑扬</a>
										</cite>
					<em>2009-2-24</em>
				</td>
				<td class="nums"><strong>38</strong> / <em>882</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=5581&goto=lastpost#lastpost">2009-3-2 11:01</a></em>
					<cite>by <a href="space.php?username=Noel">Noel</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_22955" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=22955&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_22955"><a href="viewthread.php?tid=22955&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">香港拒用内地H1N1疫苗</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4085">黑执事</a>
										</cite>
					<em>2009-9-21</em>
				</td>
				<td class="nums"><strong>38</strong> / <em>1460</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=22955&goto=lastpost#lastpost">2009-11-9 09:37</a></em>
					<cite>by <a href="space.php?username=%83%D3%B6%FE">冇二</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_28936" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=28936&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_28936"><a href="viewthread.php?tid=28936&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">三峡工程拟投1700亿解决遗留问题</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7371">金刚芭比</a>
										</cite>
					<em>2009-11-19</em>
				</td>
				<td class="nums"><strong>38</strong> / <em>857</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=28936&goto=lastpost#lastpost">2009-11-25 19:26</a></em>
					<cite>by <a href="space.php?username=vip001">vip001</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_29399" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=29399&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_29399"><a href="viewthread.php?tid=29399&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">父亲长期强奸女儿 称“经常这样长个子更快”</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6778">1984sb</a>
										</cite>
					<em>2009-11-30</em>
				</td>
				<td class="nums"><strong>38</strong> / <em>1287</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=29399&goto=lastpost#lastpost">2009-11-30 23:10</a></em>
					<cite>by <a href="space.php?username=wundt">wundt</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_29373" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=29373&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_29373"><a href="viewthread.php?tid=29373&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">河南某市驻京办主任：到北影找处女供官爷享用</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=9321">kiko</a>
										</cite>
					<em>2009-11-29</em>
				</td>
				<td class="nums"><strong>38</strong> / <em>1510</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=29373&goto=lastpost#lastpost">2009-11-30 23:16</a></em>
					<cite>by <a href="space.php?username=%B4%F3%C4%DA%B4%CC%BF%CD">大内刺客</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_29706" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=29706&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_29706"><a href="viewthread.php?tid=29706&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">中国第一次明确纳税人的权利</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2315">写实</a>
										</cite>
					<em>2009-12-2</em>
				</td>
				<td class="nums"><strong>38</strong> / <em>659</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=29706&goto=lastpost#lastpost">2009-12-3 12:00</a></em>
					<cite>by <a href="space.php?username=%B0%C5%BD%B6%CD%E8">芭蕉丸</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_29856" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=29856&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_29856"><a href="viewthread.php?tid=29856&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">反腐倡廉尉健行</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3202">glim</a>
										</cite>
					<em>2009-10-13</em>
				</td>
				<td class="nums"><strong>38</strong> / <em>1057</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=29856&goto=lastpost#lastpost">2009-12-5 01:31</a></em>
					<cite>by <a href="space.php?username=%CE%B4%C0%B4%CB%FB%C0%CF%B0%D6">未来他老爸</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_30663" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=30663&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_30663"><a href="viewthread.php?tid=30663&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">全裸接受治疗 六旬中医四度非礼女记者</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=852">未来他老爸</a>
										</cite>
					<em>2009-12-10</em>
				</td>
				<td class="nums"><strong>38</strong> / <em>1401</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=30663&goto=lastpost#lastpost">2009-12-13 00:30</a></em>
					<cite>by <a href="space.php?username=olalala">olalala</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_31403" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=31403&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_31403"><a href="viewthread.php?tid=31403&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">胶水大桥落成</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4675">storm</a>
										</cite>
					<em>2009-12-12</em>
				</td>
				<td class="nums"><strong>38</strong> / <em>876</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=31403&goto=lastpost#lastpost">2009-12-17 21:41</a></em>
					<cite>by <a href="space.php?username=fffan">fffan</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_31465" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=31465&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_31465"><a href="viewthread.php?tid=31465&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">南京气温骤降 外来民工冻死于地铁桥洞</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4570">我卖糕的</a>
										</cite>
					<em>2009-12-17</em>
				</td>
				<td class="nums"><strong>38</strong> / <em>704</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=31465&goto=lastpost#lastpost">2009-12-19 16:05</a></em>
					<cite>by <a href="space.php?username=%BB%C6%D3%E3">黄鱼</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_31757" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=31757&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_31757"><a href="viewthread.php?tid=31757&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">或有满月亮度的流星陨石坠入京城</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2028">猪肘</a>
										</cite>
					<em>2009-12-19</em>
				</td>
				<td class="nums"><strong>38</strong> / <em>1057</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=31757&goto=lastpost#lastpost">2009-12-21 16:28</a></em>
					<cite>by <a href="space.php?username=%D7%F3%B0%B6%A1%FB%D3%D2%B0%B6">左岸←右岸</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_31392" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=31392&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_31392"><a href="viewthread.php?tid=31392&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">朝鲜整顿“外国”发型 女性不得显露身材曲线</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4570">我卖糕的</a>
										</cite>
					<em>2009-12-17</em>
				</td>
				<td class="nums"><strong>38</strong> / <em>953</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=31392&goto=lastpost#lastpost">2009-12-21 22:00</a></em>
					<cite>by <a href="space.php?username=%CE%F7%C3%C5%B4%B5%C5%A3">西门吹牛</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_32146" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=32146&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_32146"><a href="viewthread.php?tid=32146&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">社科院发布2010蓝皮书 中国不稳定因素剧增</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=9991">duck_1984</a>
										</cite>
					<em>2009-12-7</em>
				</td>
				<td class="nums"><strong>38</strong> / <em>1262</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=32146&goto=lastpost#lastpost">2009-12-24 09:56</a></em>
					<cite>by <a href="space.php?username=davysky">davysky</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_32051" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=32051&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_32051"><a href="viewthread.php?tid=32051&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">胡锦涛考察珠海技工学校  表演锉刀锉零件</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4570">我卖糕的</a>
										</cite>
					<em>2009-12-22</em>
				</td>
				<td class="nums"><strong>38</strong> / <em>1076</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=32051&goto=lastpost#lastpost">2009-12-24 16:33</a></em>
					<cite>by <a href="space.php?username=txwhxy">txwhxy</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_47062" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=47062&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_47062"><a href="viewthread.php?tid=47062&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">朱镕基女儿朱燕来任中银香港助理总裁</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7">张书记</a>
										</cite>
					<em>2010-5-25</em>
				</td>
				<td class="nums"><strong>38</strong> / <em>1175</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=47062&goto=lastpost#lastpost">2010-5-29 15:59</a></em>
					<cite>by <a href="space.php?username=kachi">kachi</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_47567" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=47567&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_47567"><a href="viewthread.php?tid=47567&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">台港示威 声讨富士康</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7002">luugoo</a>
										</cite>
					<em>2010-5-29</em>
				</td>
				<td class="nums"><strong>38</strong> / <em>1026</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=47567&goto=lastpost#lastpost">2010-5-30 13:35</a></em>
					<cite>by <a href="space.php?username=%CE%D2%D0%A6%CE%D2">我笑我</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_48846" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=48846&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_48846"><a href="viewthread.php?tid=48846&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">南阳小学生拒看新《三国》</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=9574">雾中悟</a>
										</cite>
					<em>2010-6-9</em>
				</td>
				<td class="nums"><strong>38</strong> / <em>1041</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=48846&goto=lastpost#lastpost">2010-6-15 13:56</a></em>
					<cite>by <a href="space.php?username=wangguoping">wangguoping</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_49397" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=49397&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_49397"><a href="viewthread.php?tid=49397&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">印尼一青年与母牛做爱遭举报 被迫与母牛结婚</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=15360">cheak</a>
										</cite>
					<em>2010-6-13</em>
				</td>
				<td class="nums"><strong>38</strong> / <em>1432</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=49397&goto=lastpost#lastpost">2010-6-18 16:40</a></em>
					<cite>by <a href="space.php?username=deeperthink">deeperthink</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_50585" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=50585&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_50585"><a href="viewthread.php?tid=50585&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">《建党大业》更名《建党伟业》</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3202">glim</a>
										</cite>
					<em>2010-6-24</em>
				</td>
				<td class="nums"><strong>38</strong> / <em>847</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=50585&goto=lastpost#lastpost">2010-6-25 15:06</a></em>
					<cite>by <a href="space.php?username=%BE%AB%B2%CA%D4%DAwall">精彩在wall</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_50962" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=50962&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_50962"><a href="viewthread.php?tid=50962&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">谷歌加密搜索启用新域名 将SSL进行到底</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=11971">john52712</a>
										</cite>
					<em>2010-6-27</em>
				</td>
				<td class="nums"><strong>38</strong> / <em>1479</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=50962&goto=lastpost#lastpost">2010-6-30 21:00</a></em>
					<cite>by <a href="space.php?username=strongwind13">strongwind13</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_51830" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=51830&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_51830"><a href="viewthread.php?tid=51830&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传梁文道因为政改言论被封杀</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6723">卡哥</a>
										</cite>
					<em>2010-7-6</em>
				</td>
				<td class="nums"><strong>38</strong> / <em>1565</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=51830&goto=lastpost#lastpost">2010-7-7 15:23</a></em>
					<cite>by <a href="space.php?username=luugoo">luugoo</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_52484" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=52484&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_52484"><a href="viewthread.php?tid=52484&amp;extra=page%3D39%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">广电总局：反对大量引进境外动画片</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5464">上海帅哥</a>
										</cite>
					<em>2010-7-11</em>
				</td>
				<td class="nums"><strong>38</strong> / <em>789</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=52484&goto=lastpost#lastpost">2010-7-12 18:08</a></em>
					<cite>by <a href="space.php?username=%C6%F8%CB%C0%B0%CD%CA%BF">气死巴士</a></cite>
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
	<div class="pages"><em>&nbsp;22278&nbsp;</em><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=1" class="first">1 ...</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=38" class="prev">&lsaquo;&lsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=37">37</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=38">38</a><strong>39</strong><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=40">40</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=41">41</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=42">42</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=43">43</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=44">44</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=45">45</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=46">46</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=40" class="next">&rsaquo;&rsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=349" class="last">... 349</a><kbd><input type="text" name="custompage" size="3" onkeydown="if(event.keyCode==13) {window.location='forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page='+this.value; return false;}" /></kbd></div>	</div>

  
	<div class="box">
			<span class="headactions"><a href="forumdisplay.php?fid=2&amp;page=39&amp;showoldetails=yes#online" class="nobdr"><img src="images/default/collapsed_yes.gif" alt="" /></a></span>
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
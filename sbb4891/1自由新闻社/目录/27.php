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
			window.location = 'forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&page=26';
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
<div class="pages"><em>&nbsp;22278&nbsp;</em><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=1" class="first">1 ...</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=26" class="prev">&lsaquo;&lsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=25">25</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=26">26</a><strong>27</strong><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=28">28</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=29">29</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=30">30</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=31">31</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=32">32</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=33">33</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=34">34</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=28" class="next">&rsaquo;&rsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=349" class="last">... 349</a><kbd><input type="text" name="custompage" size="3" onkeydown="if(event.keyCode==13) {window.location='forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page='+this.value; return false;}" /></kbd></div></div>

<div style="float:left;border:1px solid #CCC; border-bottom:none;;width:218px; background: url(/imgs/1984radio.jpg) 200px 2px no-repeat;padding:5px 0 5px 12px;margin:0px 0 0 13px">

<p><b><a href="/radio/index.php" target="_blank">1984FM</a></b><br /><b><a href="https://voxli.com/1984bbs" target="_blank">1984Chat</a></b>&nbsp;</p> 
</div>

<div style="clear:both;height:0px;width:100%;font-size:1px;">&nbsp;</div>

	<ul class="popupmenu_popup newspecialmenu" id="newspecial_menu" style="display: none">
		<li><a href="post.php?action=newthread&amp;fid=2&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">发新话题</a></li>		<li class="poll"><a href="post.php?action=newthread&amp;fid=2&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;special=1">发布投票</a></li>													</ul>
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

					<tbody id="normalthread_57313" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=57313&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_57313"><a href="viewthread.php?tid=57313&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">真理部最新指令：迅速回收并销毁《军事世界POINT》2010年第9期</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5588">我家旺财有喜了</a>
										</cite>
					<em>2010-9-3</em>
				</td>
				<td class="nums"><strong>48</strong> / <em>2583</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=57313&goto=lastpost#lastpost">2010-9-6 12:17</a></em>
					<cite>by <a href="space.php?username=oth">oth</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_58381" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=58381&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_58381"><a href="viewthread.php?tid=58381&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">温家宝：没经济增长速度 提高人民福祉就是空话</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4570">我卖糕的</a>
										</cite>
					<em>2010-9-13</em>
				</td>
				<td class="nums"><strong>48</strong> / <em>857</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=58381&goto=lastpost#lastpost">2010-9-14 21:20</a></em>
					<cite>by <a href="space.php?username=%BA%EC%C9%D5%CDB%CDB%C3%A8">红烧虰虰猫</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_59641" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=59641&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_59641"><a href="viewthread.php?tid=59641&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">真理部最新指令：比亚迪大会只准拍摄巴菲特 不准拍摄李禄</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5588">我家旺财有喜了</a>
										</cite>
					<em>2010-9-28</em>
				</td>
				<td class="nums"><strong>48</strong> / <em>1746</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=59641&goto=lastpost#lastpost">2010-9-29 15:24</a></em>
					<cite>by <a href="space.php?username=yqggqwl">yqggqwl</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_59925" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=59925&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_59925"><a href="viewthread.php?tid=59925&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">一周图片新闻 9.27-10.3</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2232">老杂疫</a>
										</cite>
					<em>2010-10-1</em>
				</td>
				<td class="nums"><strong>48</strong> / <em>1103</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=59925&goto=lastpost#lastpost">2010-10-5 09:19</a></em>
					<cite>by <a href="space.php?username=Arbil_Y">Arbil_Y</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_60141" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=60141&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_60141"><a href="viewthread.php?tid=60141&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">温家宝称言论自由“不可缺少”</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=9517">老西</a>
										</cite>
					<em>2010-10-4</em>
				</td>
				<td class="nums"><strong>48</strong> / <em>1154</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=60141&goto=lastpost#lastpost">2010-10-7 12:00</a></em>
					<cite>by <a href="space.php?username=%B7%A2%C7%F0%CC%EC%B9%D9">发丘天官</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_60113" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=60113&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_60113"><a href="viewthread.php?tid=60113&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">台湾政府表示将驱赶进入钓鱼台海域的中国渔船</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=134">丁丁</a>
										</cite>
					<em>2010-10-4</em>
				</td>
				<td class="nums"><strong>48</strong> / <em>1063</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=60113&goto=lastpost#lastpost">2010-10-7 16:16</a></em>
					<cite>by <a href="space.php?username=%B2%BB%BE%B4%C9%F1%B5%C4YODA">不敬神的YODA</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_55483" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=55483&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_55483"><a href="viewthread.php?tid=55483&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">舟曲高考降30分录取 97%考生能上大学</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=12412">wangguoping</a>
										</cite>
					<em>2010-8-15</em>
				</td>
				<td class="nums"><strong>47</strong> / <em>749</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=55483&goto=lastpost#lastpost">2010-8-18 17:11</a></em>
					<cite>by <a href="space.php?username=ChrisDempsey">ChrisDempsey</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_54413" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=54413&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_54413"><a href="viewthread.php?tid=54413&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">男子散布南京爆炸致数百人死谣言被治安处罚</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4570">我卖糕的</a>
										</cite>
					<em>2010-7-31</em>
				</td>
				<td class="nums"><strong>47</strong> / <em>1275</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=54413&goto=lastpost#lastpost">2010-8-19 12:24</a></em>
					<cite>by <a href="space.php?username=%B1%B1%B7%BD%D0%FE%CE%E5">北方玄五</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_56043" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=56043&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_56043"><a href="viewthread.php?tid=56043&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传某地政府将《国际歌》列为禁歌</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2804">musicool</a>
										</cite>
					<em>2010-8-20</em>
				</td>
				<td class="nums"><strong>47</strong> / <em>1683</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=56043&goto=lastpost#lastpost">2010-8-23 09:07</a></em>
					<cite>by <a href="space.php?username=direction">direction</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_37572" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=37572&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_37572"><a href="viewthread.php?tid=37572&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">春运纪录片《归途列车》 将在加拿大上映</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7002">luugoo</a>
										</cite>
					<em>2010-2-12</em>
				</td>
				<td class="nums"><strong>47</strong> / <em>1165</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=37572&goto=lastpost#lastpost">2010-8-30 20:57</a></em>
					<cite>by <a href="space.php?username=frick">frick</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_57201" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=57201&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_57201"><a href="viewthread.php?tid=57201&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">成龙承诺援建北川中学 校方称分文未见</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=476">会飞的猪</a>
										</cite>
					<em>2010-9-3</em>
				</td>
				<td class="nums"><strong>47</strong> / <em>812</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=57201&goto=lastpost#lastpost">2010-9-6 12:30</a></em>
					<cite>by <a href="space.php?username=wangguoping">wangguoping</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_60692" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=60692&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_60692"><a href="viewthread.php?tid=60692&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">马英九对刘晓波获得诺贝尔和平奖表达祝贺之意</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=10619">voasia</a>
										</cite>
					<em>2010-10-9</em>
				</td>
				<td class="nums"><strong>47</strong> / <em>1919</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=60692&goto=lastpost#lastpost">2010-10-10 20:38</a></em>
					<cite>by <a href="space.php?username=PSP">PSP</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_40307" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=40307&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_40307"><a href="viewthread.php?tid=40307&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">我头发梳了一遍又一遍，等待总书记的到来</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4705">dreamingly</a>
										</cite>
					<em>2010-3-15</em>
				</td>
				<td class="nums"><strong>47</strong> / <em>1609</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=40307&goto=lastpost#lastpost">2010-3-17 11:53</a></em>
					<cite>by <a href="space.php?username=symart">symart</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_41014" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=41014&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_41014"><a href="viewthread.php?tid=41014&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">北京遭遇沙尘暴</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2252">小马过河</a>
										</cite>
					<em>2010-3-20</em>
				</td>
				<td class="nums"><strong>47</strong> / <em>918</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=41014&goto=lastpost#lastpost">2010-3-23 14:05</a></em>
					<cite>by <a href="space.php?username=wistreer">wistreer</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_41416" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=41416&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_41416"><a href="viewthread.php?tid=41416&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">白岩松在无锡谈持枪权与强拆遭封杀</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=144">mfs0616</a>
										</cite>
					<em>2010-3-26</em>
				</td>
				<td class="nums"><strong>47</strong> / <em>1867</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=41416&goto=lastpost#lastpost">2010-4-1 22:58</a></em>
					<cite>by <a href="space.php?username=%C2%ED%B5%C2%B1%CF">马德毕</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_42450" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=42450&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_42450"><a href="viewthread.php?tid=42450&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">黑龙江同江市公安局副局长居民楼下被枪杀</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=9515">waiting_it</a>
										</cite>
					<em>2010-3-30</em>
				</td>
				<td class="nums"><strong>47</strong> / <em>1324</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=42450&goto=lastpost#lastpost">2010-4-8 12:48</a></em>
					<cite>by <a href="space.php?username=%D7%F3%B0%B6%A1%FB%D3%D2%B0%B6">左岸←右岸</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_44278" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=44278&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_44278"><a href="viewthread.php?tid=44278&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">重庆出现民众街头游行抗议</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3817">老九</a>
										</cite>
					<em>2010-4-28</em>
				</td>
				<td class="nums"><strong>47</strong> / <em>2312</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=44278&goto=lastpost#lastpost">2010-4-28 23:41</a></em>
					<cite>by <a href="space.php?username=seabug">seabug</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_44203" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=44203&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_44203"><a href="viewthread.php?tid=44203&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">曾庆红子购悉尼豪宅</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5041">monopunk</a>
										</cite>
					<em>2010-4-26</em>
				</td>
				<td class="nums"><strong>47</strong> / <em>1579</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=44203&goto=lastpost#lastpost">2010-4-29 21:20</a></em>
					<cite>by <a href="space.php?username=iamiam">iamiam</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_44710" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=44710&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_44710"><a href="viewthread.php?tid=44710&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">财政部将发行50年期国债</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8301">lqunl</a>
										</cite>
					<em>2009-9-30</em>
				</td>
				<td class="nums"><strong>47</strong> / <em>1016</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=44710&goto=lastpost#lastpost">2010-5-3 12:28</a></em>
					<cite>by <a href="space.php?username=skyking0752">skyking0752</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_45113" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=45113&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_45113"><a href="viewthread.php?tid=45113&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">菜比肉贵 中国通膨压力大增</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7002">luugoo</a>
										</cite>
					<em>2010-5-7</em>
				</td>
				<td class="nums"><strong>47</strong> / <em>1218</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=45113&goto=lastpost#lastpost">2010-5-11 15:04</a></em>
					<cite>by <a href="space.php?username=Yhard">Yhard</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_46651" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=46651&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_46651"><a href="viewthread.php?tid=46651&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">奥巴马签署新闻自由法 称压制言论国家将受惩罚</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4570">我卖糕的</a>
										</cite>
					<em>2010-5-22</em>
				</td>
				<td class="nums"><strong>47</strong> / <em>951</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=46651&goto=lastpost#lastpost">2010-5-24 16:51</a></em>
					<cite>by <a href="space.php?username=weke">weke</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_22130" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=22130&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_22130"><a href="viewthread.php?tid=22130&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">京师天空突现祥瑞  几个小丑莫名兴奋</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4570">我卖糕的</a>
										</cite>
					<em>2009-9-13</em>
				</td>
				<td class="nums"><strong>47</strong> / <em>1339</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=22130&goto=lastpost#lastpost">2009-9-15 13:04</a></em>
					<cite>by <a href="space.php?username=%C3%E6%B9%CF">面瓜</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_22538" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=22538&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_22538"><a href="viewthread.php?tid=22538&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">薄总督重庆打黑掀腥风血雨      两捕头双规现场演生死恶斗</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=852">未来他老爸</a>
										</cite>
					<em>2009-9-17</em>
				</td>
				<td class="nums"><strong>47</strong> / <em>1258</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=22538&goto=lastpost#lastpost">2009-9-19 12:36</a></em>
					<cite>by <a href="space.php?username=%CE%F7%C3%C5%B4%B5%C5%A3">西门吹牛</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_22242" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=22242&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_22242"><a href="viewthread.php?tid=22242&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">被朝鲜枪决者56具尸体冲至中国境内 包括妇女儿童</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2315">写实</a>
										</cite>
					<em>2009-9-14</em>
				</td>
				<td class="nums"><strong>47</strong> / <em>1682</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=22242&goto=lastpost#lastpost">2009-9-20 12:45</a></em>
					<cite>by <a href="space.php?username=%B8%A1%D4%C6">浮云</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_24595" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=24595&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_24595"><a href="viewthread.php?tid=24595&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">清华学生愤怒了：央视完全不知道自己是干什么的</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2198">大肚子猫</a>
										</cite>
					<em>2009-10-9</em>
				</td>
				<td class="nums"><strong>47</strong> / <em>2089</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=24595&goto=lastpost#lastpost">2009-10-12 01:43</a></em>
					<cite>by <a href="space.php?username=%C6%BD%BE%B2%D5%F5%D4%FA">平静挣扎</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_25118" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=25118&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_25118"><a href="viewthread.php?tid=25118&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">六十大庆全国耗费共五千亿</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8301">lqunl</a>
										</cite>
					<em>2009-10-15</em>
				</td>
				<td class="nums"><strong>47</strong> / <em>1072</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=25118&goto=lastpost#lastpost">2009-10-16 02:43</a></em>
					<cite>by <a href="space.php?username=%D1%A7%BE%BF">学究</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_25391" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=25391&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_25391"><a href="viewthread.php?tid=25391&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">真理部会议提出：将对坚持西方新闻观的网站展开进攻</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=263">WJ87</a>
										</cite>
					<em>2009-10-17</em>
				</td>
				<td class="nums"><strong>47</strong> / <em>1487</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=25391&goto=lastpost#lastpost">2009-10-20 22:28</a></em>
					<cite>by <a href="space.php?username=%B3%E5%B4%FC%C4%CC%B7%DB%B8%F8%B5%B3%BA%C8">冲袋奶粉给党喝</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_25842" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=25842&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_25842"><a href="viewthread.php?tid=25842&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">CCTV2《今日观察》：谷歌的无礼颠覆了什么？</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3634">vip001</a>
										</cite>
					<em>2009-10-21</em>
				</td>
				<td class="nums"><strong>47</strong> / <em>1165</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=25842&goto=lastpost#lastpost">2009-10-23 22:55</a></em>
					<cite>by <a href="space.php?username=syringa">syringa</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_1882" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=1882&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_1882"><a href="viewthread.php?tid=1882&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">男子扔鸡蛋污损党旗国旗军旗被拘 薄熙来亲批示</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2095">姑娘</a>
										</cite>
					<em>2008-12-16</em>
				</td>
				<td class="nums"><strong>47</strong> / <em>1505</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=1882&goto=lastpost#lastpost">2010-5-27 20:41</a></em>
					<cite>by <a href="space.php?username=%BE%CD%B0%AE%D5%DB%CC%DA">就爱折腾</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_46949" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=46949&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_46949"><a href="viewthread.php?tid=46949&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">“金日成之花”图片展在维也纳开幕</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2907">无言的山丘</a>
										</cite>
					<em>2010-5-24</em>
				</td>
				<td class="nums"><strong>47</strong> / <em>1098</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=46949&goto=lastpost#lastpost">2010-5-28 17:22</a></em>
					<cite>by <a href="space.php?username=howejiang">howejiang</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_47597" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=47597&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_47597"><a href="viewthread.php?tid=47597&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">多名男女生疯狂殴打一名女生</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2315">写实</a>
										</cite>
					<em>2010-5-29</em>
				</td>
				<td class="nums"><strong>47</strong> / <em>1373</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=47597&goto=lastpost#lastpost">2010-6-1 10:48</a></em>
					<cite>by <a href="space.php?username=stevenking">stevenking</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_48858" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=48858&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_48858"><a href="viewthread.php?tid=48858&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">《人民日报》连发三文探讨“五毛党”</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5494">肉の包包</a>
										</cite>
					<em>2010-6-9</em>
				</td>
				<td class="nums"><strong>47</strong> / <em>1653</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=48858&goto=lastpost#lastpost">2010-6-11 10:57</a></em>
					<cite>by <a href="space.php?username=%D0%A1%B2%D9">小操</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_48265" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=48265&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_48265"><a href="viewthread.php?tid=48265&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">留学生为“平反六四”拉横幅飞越纽约中领馆</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2303">饭岛爱</a>
										</cite>
					<em>2010-6-6</em>
				</td>
				<td class="nums"><strong>47</strong> / <em>2136</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=48265&goto=lastpost#lastpost">2010-6-12 15:18</a></em>
					<cite>by <a href="space.php?username=louy0427">louy0427</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_48961" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=48961&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_48961"><a href="viewthread.php?tid=48961&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">2009年中共使用维稳费5140亿元</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=624">左岸拾荒</a>
										</cite>
					<em>2010-6-10</em>
				</td>
				<td class="nums"><strong>47</strong> / <em>1190</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=48961&goto=lastpost#lastpost">2010-6-12 21:16</a></em>
					<cite>by <a href="space.php?username=%CE%B4%C0%B4%CB%FB%C0%CF%B0%D6">未来他老爸</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_49200" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=49200&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_49200"><a href="viewthread.php?tid=49200&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">田纪云暗批江泽民“退而不休”</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7002">luugoo</a>
										</cite>
					<em>2010-6-12</em>
				</td>
				<td class="nums"><strong>47</strong> / <em>1912</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=49200&goto=lastpost#lastpost">2010-6-13 12:32</a></em>
					<cite>by <a href="space.php?username=%BF%B5%C4%FE">康宁</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_48918" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=48918&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_48918"><a href="viewthread.php?tid=48918&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">东莞流浪汉手绘“卖淫窝点图” 向警方举报</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3202">glim</a>
										</cite>
					<em>2010-5-25</em>
				</td>
				<td class="nums"><strong>47</strong> / <em>1495</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=48918&goto=lastpost#lastpost">2010-6-15 13:08</a></em>
					<cite>by <a href="space.php?username=%C1%F9%C2%F3%C9%F1%BD%A3">六麦神剑</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_49904" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=49904&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_49904"><a href="viewthread.php?tid=49904&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传朝鲜电视台虚报世界杯朝巴比赛分数</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=9517">老西</a>
										</cite>
					<em>2010-6-18</em>
				</td>
				<td class="nums"><strong>47</strong> / <em>2083</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=49904&goto=lastpost#lastpost">2010-6-22 14:19</a></em>
					<cite>by <a href="space.php?username=moyu">moyu</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_51757" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=51757&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_51757"><a href="viewthread.php?tid=51757&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">3名脱北者被公开枪毙</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=10331">阿波</a>
										</cite>
					<em>2010-7-5</em>
				</td>
				<td class="nums"><strong>47</strong> / <em>1640</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=51757&goto=lastpost#lastpost">2010-7-9 22:51</a></em>
					<cite>by <a href="space.php?username=8%D8%D48%D8%D4">8卦8卦</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_52267" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=52267&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_52267"><a href="viewthread.php?tid=52267&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">7·5事件周年临近 维汉关系依然紧张</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=12596">yangharrylg</a>
										</cite>
					<em>2010-6-29</em>
				</td>
				<td class="nums"><strong>47</strong> / <em>918</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=52267&goto=lastpost#lastpost">2010-7-12 11:00</a></em>
					<cite>by <a href="space.php?username=eagles">eagles</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_52852" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=52852&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_52852"><a href="viewthread.php?tid=52852&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传乌鲁木齐一架飞机遭劫持</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6485">naryao</a>
										</cite>
					<em>2010-7-15</em>
				</td>
				<td class="nums"><strong>47</strong> / <em>1572</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=52852&goto=lastpost#lastpost">2010-7-15 21:04</a></em>
					<cite>by <a href="space.php?username=dongzemao">dongzemao</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_52799" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=52799&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_52799"><a href="viewthread.php?tid=52799&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">打压广东话升级 明代名将雕像成牺牲品</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7002">luugoo</a>
										</cite>
					<em>2010-7-14</em>
				</td>
				<td class="nums"><strong>47</strong> / <em>1086</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=52799&goto=lastpost#lastpost">2010-7-16 17:44</a></em>
					<cite>by <a href="space.php?username=xpoken">xpoken</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_52998" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=52998&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_52998"><a href="viewthread.php?tid=52998&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">李敖之子如愿以偿加入北大</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3202">glim</a>
										</cite>
					<em>2010-7-15</em>
				</td>
				<td class="nums"><strong>47</strong> / <em>1045</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=52998&goto=lastpost#lastpost">2010-7-26 21:30</a></em>
					<cite>by <a href="space.php?username=%B7%A8%BF%CB%88%98">法克垬</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_53972" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=53972&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_53972"><a href="viewthread.php?tid=53972&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">平壤街头女生穿着出现潮流时尚</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3202">glim</a>
										</cite>
					<em>2010-7-26</em>
				</td>
				<td class="nums"><strong>47</strong> / <em>2015</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=53972&goto=lastpost#lastpost">2010-7-28 08:39</a></em>
					<cite>by <a href="space.php?username=lhq2612">lhq2612</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_53906" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=53906&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_53906"><a href="viewthread.php?tid=53906&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">“将军不是太阳” 朝鲜出现反体制传单</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7002">luugoo</a>
										</cite>
					<em>2010-7-25</em>
				</td>
				<td class="nums"><strong>47</strong> / <em>2019</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=53906&goto=lastpost#lastpost">2010-7-28 21:24</a></em>
					<cite>by <a href="space.php?username=%B0%A2V">阿V</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_5118" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=5118&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_5118"><a href="viewthread.php?tid=5118&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">面部轮廓贴合 三圈独立切剃 飞利浦除毛更彻底</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2196">不折腾</a>
										</cite>
					<em>2009-2-17</em>
				</td>
				<td class="nums"><strong>47</strong> / <em>1039</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=5118&goto=lastpost#lastpost">2009-2-19 18:47</a></em>
					<cite>by <a href="space.php?username=%BE%C6%C2%7D">酒聖</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_1330" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=1330&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_1330"><a href="viewthread.php?tid=1330&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">雷锋：Oh Shit！</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=49">jaec</a>
										</cite>
					<em>2008-12-3</em>
				</td>
				<td class="nums"><strong>47</strong> / <em>1604</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=1330&goto=lastpost#lastpost">2009-3-8 01:43</a></em>
					<cite>by <a href="space.php?username=%BE%CD%C3%FE%C4%E3">就摸你</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_27139" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=27139&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_27139"><a href="viewthread.php?tid=27139&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">《10.1中指》影像竞赛评选结果 及部分获奖作品</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8517">一煽就动</a>
										</cite>
					<em>2009-11-1</em>
				</td>
				<td class="nums"><strong>47</strong> / <em>1898</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=27139&goto=lastpost#lastpost">2009-11-15 20:24</a></em>
					<cite>by <a href="space.php?username=%C2%CC%D6%DE">绿洲</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_30002" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=30002&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_30002"><a href="viewthread.php?tid=30002&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">建设部：2015年将实现人人有房住</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8560">zuoshoucp</a>
										</cite>
					<em>2009-12-5</em>
				</td>
				<td class="nums"><strong>47</strong> / <em>646</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=30002&goto=lastpost#lastpost">2009-12-8 15:52</a></em>
					<cite>by <a href="space.php?username=%83%D3%B6%FE">冇二</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_30473" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=30473&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_30473"><a href="viewthread.php?tid=30473&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传，关P2P网站来自中共内部利益纠纷</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5464">上海帅哥</a>
										</cite>
					<em>2009-12-7</em>
				</td>
				<td class="nums"><strong>47</strong> / <em>2086</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=30473&goto=lastpost#lastpost">2009-12-9 15:44</a></em>
					<cite>by <a href="space.php?username=Almanac29">Almanac29</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_30388" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=30388&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_30388"><a href="viewthread.php?tid=30388&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">杭州老人街头晕厥 数十围观者无人施救 不治身亡</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=9991">duck_1984</a>
										</cite>
					<em>2009-12-8</em>
				</td>
				<td class="nums"><strong>47</strong> / <em>858</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=30388&goto=lastpost#lastpost">2009-12-12 09:32</a></em>
					<cite>by <a href="space.php?username=xiao0422">xiao0422</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_30704" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=30704&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_30704"><a href="viewthread.php?tid=30704&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">《人民日报》刊发中国公民致哥本哈根的信</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4570">我卖糕的</a>
										</cite>
					<em>2009-12-11</em>
				</td>
				<td class="nums"><strong>47</strong> / <em>815</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=30704&goto=lastpost#lastpost">2009-12-12 19:11</a></em>
					<cite>by <a href="space.php?username=%C9%A3%C7%F0">桑丘</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_31305" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=31305&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_31305"><a href="viewthread.php?tid=31305&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传，《新闻1+1》制片人被免职</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7503">caotama</a>
										</cite>
					<em>2009-12-16</em>
				</td>
				<td class="nums"><strong>47</strong> / <em>2119</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=31305&goto=lastpost#lastpost">2009-12-18 10:14</a></em>
					<cite>by <a href="space.php?username=howejiang">howejiang</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_31541" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=31541&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_31541"><a href="viewthread.php?tid=31541&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">美国学者称：中国经济实际上是一个“庞氏骗局”</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2564">老卡</a>
										</cite>
					<em>2009-12-18</em>
				</td>
				<td class="nums"><strong>47</strong> / <em>1530</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=31541&goto=lastpost#lastpost">2009-12-21 13:24</a></em>
					<cite>by <a href="space.php?username=%B7%E7%D6%D0%B5%C4%CA%F7%CC%A1">风中的树獭</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_32322" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=32322&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_32322"><a href="viewthread.php?tid=32322&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">明年起新疆中小学生每天须升国旗唱国歌</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7919">路边社门卫</a>
										</cite>
					<em>2009-12-24</em>
				</td>
				<td class="nums"><strong>47</strong> / <em>572</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=32322&goto=lastpost#lastpost">2009-12-25 17:02</a></em>
					<cite>by <a href="space.php?username=1984%C4%B3%E8%D6%D7%D3">1984某柚子</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_27457" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=27457&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_27457"><a href="viewthread.php?tid=27457&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">中国“德新海”轮被劫持 海外爱国人士要求武力解决</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8301">lqunl</a>
										</cite>
					<em>2009-10-23</em>
				</td>
				<td class="nums"><strong>47</strong> / <em>1621</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=27457&goto=lastpost#lastpost">2009-12-27 01:26</a></em>
					<cite>by <a href="space.php?username=%CE%B4%C0%B4%CB%FB%C0%CF%B0%D6">未来他老爸</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_32736" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=32736&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_32736"><a href="viewthread.php?tid=32736&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">黑监狱聚源宾馆强奸案始末</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4514">牛顿</a>
										</cite>
					<em>2009-8-11</em>
				</td>
				<td class="nums"><strong>47</strong> / <em>1553</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=32736&goto=lastpost#lastpost">2009-12-28 09:55</a></em>
					<cite>by <a href="space.php?username=enjoycunt">enjoycunt</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_10567" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=10567&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_10567"><a href="viewthread.php?tid=10567&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">杭州富家子飙车续 浙大学生上街悼念</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2725">郭芙蓉姐姐</a>
										</cite>
					<em>2009-5-9</em>
				</td>
				<td class="nums"><strong>47</strong> / <em>1211</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=10567&goto=lastpost#lastpost">2009-5-11 14:10</a></em>
					<cite>by <a href="space.php?username=%CE%E5%BB%FA">五机</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_10055" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=10055&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_10055"><a href="viewthread.php?tid=10055&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">周捕头被抓的消息到底是否属实？</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5798">Jyamolmiry</a>
										</cite>
					<em>2009-5-1</em>
				</td>
				<td class="nums"><strong>47</strong> / <em>2197</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=10055&goto=lastpost#lastpost">2009-5-16 01:33</a></em>
					<cite>by <a href="space.php?username=8ger">8ger</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_12055" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=12055&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_12055"><a href="viewthread.php?tid=12055&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">白领陨落 黑领升起</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5535">tomging</a>
										</cite>
					<em>2009-3-30</em>
				</td>
				<td class="nums"><strong>47</strong> / <em>1237</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=12055&goto=lastpost#lastpost">2009-5-28 21:18</a></em>
					<cite>by <a href="space.php?username=%E4%BD%B3%BE">浣尘</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_12247" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=12247&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_12247"><a href="viewthread.php?tid=12247&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">北京紧急通知：64当日学生不准穿白衣</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5898">wanwan0219</a>
										</cite>
					<em>2009-5-31</em>
				</td>
				<td class="nums"><strong>47</strong> / <em>1833</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=12247&goto=lastpost#lastpost">2009-6-1 23:19</a></em>
					<cite>by <a href="space.php?username=%C9%F1%D0%D0%D5%DF">神行者</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_17345" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=17345&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_17345"><a href="viewthread.php?tid=17345&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">胡哥操办封侯大典 将门出虎子</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1752">peteryang84</a>
										</cite>
					<em>2009-7-20</em>
				</td>
				<td class="nums"><strong>47</strong> / <em>1635</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=17345&goto=lastpost#lastpost">2009-7-22 15:18</a></em>
					<cite>by <a href="space.php?username=%C6%D3%B1%A7%D2%BB">朴抱一</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_18550" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=18550&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_18550"><a href="viewthread.php?tid=18550&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">2009最新世界十大独裁者 穆加贝力压巴希尔金正日</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7277">一向低调</a>
										</cite>
					<em>2009-7-16</em>
				</td>
				<td class="nums"><strong>47</strong> / <em>1410</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=18550&goto=lastpost#lastpost">2009-8-3 17:50</a></em>
					<cite>by <a href="space.php?username=%B2%E8%C9%AB%B2%A3%C1%A7">茶色玻璃</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_19086" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=19086&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_19086"><a href="viewthread.php?tid=19086&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">许志永就是一卖国贼</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1953">晨光荣耀</a>
										</cite>
					<em>2009-8-7</em>
				</td>
				<td class="nums"><strong>47</strong> / <em>1478</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=19086&goto=lastpost#lastpost">2009-8-21 21:52</a></em>
					<cite>by <a href="space.php?username=threeight">threeight</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_19901" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=19901&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_19901"><a href="viewthread.php?tid=19901&amp;extra=page%3D27%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">股市调整到何方？</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5657">ak74</a>
										</cite>
					<em>2009-8-17</em>
				</td>
				<td class="nums"><strong>47</strong> / <em>1209</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=19901&goto=lastpost#lastpost">2009-9-2 10:38</a></em>
					<cite>by <a href="space.php?username=%CD%E2%C0%B4%CE%F1%B9%A4%C8%CB%D4%B1">外来务工人员</a></cite>
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
	<div class="pages"><em>&nbsp;22278&nbsp;</em><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=1" class="first">1 ...</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=26" class="prev">&lsaquo;&lsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=25">25</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=26">26</a><strong>27</strong><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=28">28</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=29">29</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=30">30</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=31">31</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=32">32</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=33">33</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=34">34</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=28" class="next">&rsaquo;&rsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=349" class="last">... 349</a><kbd><input type="text" name="custompage" size="3" onkeydown="if(event.keyCode==13) {window.location='forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page='+this.value; return false;}" /></kbd></div>	</div>

  
	<div class="box">
			<span class="headactions"><a href="forumdisplay.php?fid=2&amp;page=27&amp;showoldetails=yes#online" class="nobdr"><img src="images/default/collapsed_yes.gif" alt="" /></a></span>
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
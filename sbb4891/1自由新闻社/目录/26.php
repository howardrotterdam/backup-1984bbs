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
			window.location = 'forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&page=25';
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
<div class="pages"><em>&nbsp;22278&nbsp;</em><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=1" class="first">1 ...</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=25" class="prev">&lsaquo;&lsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=24">24</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=25">25</a><strong>26</strong><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=27">27</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=28">28</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=29">29</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=30">30</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=31">31</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=32">32</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=33">33</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=27" class="next">&rsaquo;&rsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=349" class="last">... 349</a><kbd><input type="text" name="custompage" size="3" onkeydown="if(event.keyCode==13) {window.location='forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page='+this.value; return false;}" /></kbd></div></div>

<div style="float:left;border:1px solid #CCC; border-bottom:none;;width:218px; background: url(/imgs/1984radio.jpg) 200px 2px no-repeat;padding:5px 0 5px 12px;margin:0px 0 0 13px">

<p><b><a href="/radio/index.php" target="_blank">1984FM</a></b><br /><b><a href="https://voxli.com/1984bbs" target="_blank">1984Chat</a></b>&nbsp;</p> 
</div>

<div style="clear:both;height:0px;width:100%;font-size:1px;">&nbsp;</div>

	<ul class="popupmenu_popup newspecialmenu" id="newspecial_menu" style="display: none">
		<li><a href="post.php?action=newthread&amp;fid=2&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">发新话题</a></li>		<li class="poll"><a href="post.php?action=newthread&amp;fid=2&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;special=1">发布投票</a></li>													</ul>
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

					<tbody id="normalthread_49896" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=49896&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_49896"><a href="viewthread.php?tid=49896&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">长春公安机关买29570元豪华电脑</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4570">我卖糕的</a>
										</cite>
					<em>2010-6-18</em>
				</td>
				<td class="nums"><strong>49</strong> / <em>1041</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=49896&goto=lastpost#lastpost">2010-6-21 09:33</a></em>
					<cite>by <a href="space.php?username=pfss">pfss</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_50623" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=50623&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_50623"><a href="viewthread.php?tid=50623&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">校长毕业典礼演讲串网络热词 7700学子高喊根叔</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=12596">yangharrylg</a>
										</cite>
					<em>2010-6-24</em>
				</td>
				<td class="nums"><strong>49</strong> / <em>1328</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=50623&goto=lastpost#lastpost">2010-6-27 23:00</a></em>
					<cite>by <a href="space.php?username=%B7%CF%D6%D6%B6%B9%F4%F9">废种豆豉</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_51531" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=51531&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_51531"><a href="viewthread.php?tid=51531&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">网友晒结婚账单 娶妻需花费55万</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4570">我卖糕的</a>
										</cite>
					<em>2010-7-2</em>
				</td>
				<td class="nums"><strong>49</strong> / <em>896</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=51531&goto=lastpost#lastpost">2010-7-5 12:44</a></em>
					<cite>by <a href="space.php?username=%C7%EF%C7%A7">秋千</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_51844" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=51844&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_51844"><a href="viewthread.php?tid=51844&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">北京持续高温 天气预报疑被操控</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5553">雲山霧罩</a>
										</cite>
					<em>2010-7-6</em>
				</td>
				<td class="nums"><strong>49</strong> / <em>1255</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=51844&goto=lastpost#lastpost">2010-7-7 13:07</a></em>
					<cite>by <a href="space.php?username=zink941">zink941</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_52553" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=52553&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_52553"><a href="viewthread.php?tid=52553&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">党报重申多党制不能解决腐败问题</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=9737">剁辣椒</a>
										</cite>
					<em>2010-7-12</em>
				</td>
				<td class="nums"><strong>49</strong> / <em>1117</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=52553&goto=lastpost#lastpost">2010-7-13 10:03</a></em>
					<cite>by <a href="space.php?username=CCAV">CCAV</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_52842" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=52842&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_52842"><a href="viewthread.php?tid=52842&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">法国下议院通过罩袍禁令 欧洲多国民众支持</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2804">musicool</a>
										</cite>
					<em>2010-7-14</em>
				</td>
				<td class="nums"><strong>49</strong> / <em>816</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=52842&goto=lastpost#lastpost">2010-7-18 23:11</a></em>
					<cite>by <a href="space.php?username=%CC%C1%B6%EC">塘鹅</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_54147" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=54147&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_54147"><a href="viewthread.php?tid=54147&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">李长春：做德艺双馨无愧人民的文艺家</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2804">musicool</a>
										</cite>
					<em>2010-7-28</em>
				</td>
				<td class="nums"><strong>49</strong> / <em>772</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=54147&goto=lastpost#lastpost">2010-7-30 23:53</a></em>
					<cite>by <a href="space.php?username=ynwa">ynwa</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_51990" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=51990&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_51990"><a href="viewthread.php?tid=51990&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">中国少女向郑大世求婚 愿为其生一个足球队</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3202">glim</a>
										</cite>
					<em>2010-7-7</em>
				</td>
				<td class="nums"><strong>48</strong> / <em>1043</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=51990&goto=lastpost#lastpost">2010-7-8 21:39</a></em>
					<cite>by <a href="space.php?username=trortd">trortd</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_44681" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=44681&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_44681"><a href="viewthread.php?tid=44681&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">专家：2012为世界末日说法毫无科学依据无须恐慌</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5095">NERV</a>
										</cite>
					<em>2010-5-2</em>
				</td>
				<td class="nums"><strong>48</strong> / <em>1354</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=44681&goto=lastpost#lastpost">2010-7-8 22:56</a></em>
					<cite>by <a href="space.php?username=%C0%B0%D4%C2%D8%A5%B0%CB">腊月廿八</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_53004" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=53004&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_53004"><a href="viewthread.php?tid=53004&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">江西“和谐钟塔”取代英国大本钟成世界最大钟塔</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=144">mfs0616</a>
										</cite>
					<em>2010-7-16</em>
				</td>
				<td class="nums"><strong>48</strong> / <em>887</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=53004&goto=lastpost#lastpost">2010-7-19 20:44</a></em>
					<cite>by <a href="space.php?username=bbscn">bbscn</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_54094" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=54094&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_54094"><a href="viewthread.php?tid=54094&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">武汉特警枪法准  50公尺外打断牙签</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8301">lqunl</a>
										</cite>
					<em>2010-7-27</em>
				</td>
				<td class="nums"><strong>48</strong> / <em>1101</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=54094&goto=lastpost#lastpost">2010-8-2 12:32</a></em>
					<cite>by <a href="space.php?username=%B7%A2%B7%E0%CD%BF%C7%BD">发粪涂墙</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_4869" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=4869&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_4869"><a href="viewthread.php?tid=4869&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">自由平等开放社会的样板 Gay和Les齐聚前门大街</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7">张书记</a>
										</cite>
					<em>2009-2-15</em>
				</td>
				<td class="nums"><strong>48</strong> / <em>748</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=4869&goto=lastpost#lastpost">2009-2-17 11:05</a></em>
					<cite>by <a href="space.php?username=%C8%E7%BB%A8">如花</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_5665" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=5665&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_5665"><a href="viewthread.php?tid=5665&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">低俗整肃运动继续扩大化 开始打压Gay和Les的网上活动</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1925">兽小明</a>
										</cite>
					<em>2009-2-25</em>
				</td>
				<td class="nums"><strong>48</strong> / <em>992</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=5665&goto=lastpost#lastpost">2009-2-28 13:28</a></em>
					<cite>by <a href="space.php?username=zlfwl996">zlfwl996</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_22056" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=22056&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_22056"><a href="viewthread.php?tid=22056&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">阅兵队伍中的“针扎事件”</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1310">小宸宸</a>
										</cite>
					<em>2009-9-11</em>
				</td>
				<td class="nums"><strong>48</strong> / <em>1166</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=22056&goto=lastpost#lastpost">2009-9-14 11:50</a></em>
					<cite>by <a href="space.php?username=%BF%EC%C0%D6%C1%F7%C0%CB%BA%BA">快乐流浪汉</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_22428" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=22428&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_22428"><a href="viewthread.php?tid=22428&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">5个字儿，10万元</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=852">未来他老爸</a>
										</cite>
					<em>2009-9-16</em>
				</td>
				<td class="nums"><strong>48</strong> / <em>1255</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=22428&goto=lastpost#lastpost">2009-9-19 11:57</a></em>
					<cite>by <a href="space.php?username=%CE%F7%C3%C5%B4%B5%C5%A3">西门吹牛</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_22531" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=22531&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_22531"><a href="viewthread.php?tid=22531&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">国庆期间天安门周边胡同住宅将清人</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7">张书记</a>
										</cite>
					<em>2009-9-17</em>
				</td>
				<td class="nums"><strong>48</strong> / <em>886</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=22531&goto=lastpost#lastpost">2009-9-19 12:53</a></em>
					<cite>by <a href="space.php?username=%CE%F7%C3%C5%B4%B5%C5%A3">西门吹牛</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_22633" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=22633&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_22633"><a href="viewthread.php?tid=22633&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">本地某领导胸袭“旺仔小馒头”</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3202">glim</a>
										</cite>
					<em>2009-9-18</em>
				</td>
				<td class="nums"><strong>48</strong> / <em>1824</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=22633&goto=lastpost#lastpost">2009-9-22 12:51</a></em>
					<cite>by <a href="space.php?username=green5206">green5206</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_23344" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=23344&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_23344"><a href="viewthread.php?tid=23344&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">胡总亲切会见米歇尔·奥巴马</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7">张书记</a>
										</cite>
					<em>2009-9-25</em>
				</td>
				<td class="nums"><strong>48</strong> / <em>1121</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=23344&goto=lastpost#lastpost">2009-9-27 17:47</a></em>
					<cite>by <a href="space.php?username=strongwind13">strongwind13</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_23947" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=23947&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_23947"><a href="viewthread.php?tid=23947&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">《激流中国》获奖 北京截堵</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1310">小宸宸</a>
										</cite>
					<em>2009-9-30</em>
				</td>
				<td class="nums"><strong>48</strong> / <em>1399</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=23947&goto=lastpost#lastpost">2009-10-2 02:26</a></em>
					<cite>by <a href="space.php?username=%B0%CB%D8%D4%B7%D6%D7%D3">八卦分子</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_23987" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=23987&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_23987"><a href="viewthread.php?tid=23987&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传，国庆方阵中女性每人将获得3枚止尿裤</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2071">上肛上腺</a>
										</cite>
					<em>2009-10-1</em>
				</td>
				<td class="nums"><strong>48</strong> / <em>1673</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=23987&goto=lastpost#lastpost">2009-10-3 12:16</a></em>
					<cite>by <a href="space.php?username=%C0%D7%C2%FC%D0%D6%B5%DC">雷曼兄弟</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_23724" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=23724&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_23724"><a href="viewthread.php?tid=23724&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">香港支联会吁十·一绝食黑衣游行</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7002">luugoo</a>
										</cite>
					<em>2009-9-28</em>
				</td>
				<td class="nums"><strong>48</strong> / <em>982</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=23724&goto=lastpost#lastpost">2009-10-7 20:23</a></em>
					<cite>by <a href="space.php?username=qinghe1987">qinghe1987</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_24373" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=24373&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_24373"><a href="viewthread.php?tid=24373&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">一周新闻图片 10.5-10.11</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2232">老杂疫</a>
										</cite>
					<em>2009-10-6</em>
				</td>
				<td class="nums"><strong>48</strong> / <em>1570</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=24373&goto=lastpost#lastpost">2009-10-12 19:01</a></em>
					<cite>by <a href="space.php?username=%CD%F5%D5%DF%D2%D1%CA%C5">王者已逝</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_24963" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=24963&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_24963"><a href="viewthread.php?tid=24963&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">央视再战谷歌 高也因身体原因缺席演出</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2311">空空追梦</a>
										</cite>
					<em>2009-10-13</em>
				</td>
				<td class="nums"><strong>48</strong> / <em>1411</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=24963&goto=lastpost#lastpost">2009-10-15 16:24</a></em>
					<cite>by <a href="space.php?username=youttiao">youttiao</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_11919" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=11919&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_11919"><a href="viewthread.php?tid=11919&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">佩洛西访华，北京南站暴动</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2160">浣尘</a>
										</cite>
					<em>2009-5-26</em>
				</td>
				<td class="nums"><strong>48</strong> / <em>1290</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=11919&goto=lastpost#lastpost">2009-5-27 15:01</a></em>
					<cite>by <a href="space.php?username=%E4%BD%B3%BE">浣尘</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_11912" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=11912&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_11912"><a href="viewthread.php?tid=11912&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">一个叫黄子华的人讲述的1989</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2971">luckyray</a>
										</cite>
					<em>2009-5-26</em>
				</td>
				<td class="nums"><strong>48</strong> / <em>1491</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=11912&goto=lastpost#lastpost">2009-5-30 04:58</a></em>
					<cite>by <a href="space.php?username=elzzird">elzzird</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_12075" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=12075&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_12075"><a href="viewthread.php?tid=12075&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">戈培尔继承人司马南北大演讲 为镇压陆肆叫好</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2428">xiahua</a>
										</cite>
					<em>2009-5-28</em>
				</td>
				<td class="nums"><strong>48</strong> / <em>1430</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=12075&goto=lastpost#lastpost">2009-6-1 08:38</a></em>
					<cite>by <a href="space.php?username=%B8%A1%BB%D2">浮灰</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_17493" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=17493&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_17493"><a href="viewthread.php?tid=17493&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">小琳格格：能力之外的资本等于零</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1258">路边社记者</a>
										</cite>
					<em>2009-7-22</em>
				</td>
				<td class="nums"><strong>48</strong> / <em>969</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=17493&goto=lastpost#lastpost">2009-7-28 13:47</a></em>
					<cite>by <a href="space.php?username=kiki111">kiki111</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_17958" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=17958&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_17958"><a href="viewthread.php?tid=17958&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">太妃最近畏寒体虚……</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7">张书记</a>
										</cite>
					<em>2009-7-27</em>
				</td>
				<td class="nums"><strong>48</strong> / <em>1615</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=17958&goto=lastpost#lastpost">2009-7-29 00:18</a></em>
					<cite>by <a href="space.php?username=pinocchio">pinocchio</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_20047" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=20047&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_20047"><a href="viewthread.php?tid=20047&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">新东方里的师生恋</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=852">未来他老爸</a>
										</cite>
					<em>2009-8-18</em>
				</td>
				<td class="nums"><strong>48</strong> / <em>1667</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=20047&goto=lastpost#lastpost">2009-8-21 18:42</a></em>
					<cite>by <a href="space.php?username=raymanic">raymanic</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_20490" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=20490&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_20490"><a href="viewthread.php?tid=20490&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">影帝新剧：剧情老套，官吏高效</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2454">忘穿秋裤</a>
										</cite>
					<em>2009-8-24</em>
				</td>
				<td class="nums"><strong>48</strong> / <em>1102</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=20490&goto=lastpost#lastpost">2009-8-27 02:16</a></em>
					<cite>by <a href="space.php?username=Candice">Candice</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_26788" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=26788&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_26788"><a href="viewthread.php?tid=26788&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">江湖奇人：长征火箭请来算命大师透视</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3985">色空鸟</a>
										</cite>
					<em>2009-11-1</em>
				</td>
				<td class="nums"><strong>48</strong> / <em>1004</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=26788&goto=lastpost#lastpost">2009-11-4 12:52</a></em>
					<cite>by <a href="space.php?username=hhbcl1414">hhbcl1414</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_26805" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=26805&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_26805"><a href="viewthread.php?tid=26805&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">吉林农大一男生自慰，校方给予记过处分</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1408">becom</a>
										</cite>
					<em>2009-11-1</em>
				</td>
				<td class="nums"><strong>48</strong> / <em>1767</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=26805&goto=lastpost#lastpost">2009-11-4 20:01</a></em>
					<cite>by <a href="space.php?username=FIFA%BB%E1%D4%B1">FIFA会员</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_27292" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=27292&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_27292"><a href="viewthread.php?tid=27292&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">杭州一大学男生街头裸奔</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2907">无言的山丘</a>
										</cite>
					<em>2009-11-6</em>
				</td>
				<td class="nums"><strong>48</strong> / <em>992</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=27292&goto=lastpost#lastpost">2009-11-9 01:10</a></em>
					<cite>by <a href="space.php?username=%C8%CB%B4%F3%C3%C5%CE%F7">人大门西</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_27709" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=27709&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_27709"><a href="viewthread.php?tid=27709&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传，今晚汽油涨价</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=21">大仙儿</a>
										</cite>
					<em>2009-11-9</em>
				</td>
				<td class="nums"><strong>48</strong> / <em>886</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=27709&goto=lastpost#lastpost">2009-11-11 03:08</a></em>
					<cite>by <a href="space.php?username=badou">badou</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_28227" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=28227&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_28227"><a href="viewthread.php?tid=28227&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">真理部最新指令：各网严禁组织网友向奥巴马提问及刊登敏感消息</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5759">路边社刊要</a>
										</cite>
					<em>2009-11-16</em>
				</td>
				<td class="nums"><strong>48</strong> / <em>1416</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=28227&goto=lastpost#lastpost">2009-11-17 15:52</a></em>
					<cite>by <a href="space.php?username=%CE%F7%B8%A5">西弗</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_28096" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=28096&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_28096"><a href="viewthread.php?tid=28096&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">反共资深人士美前驻华大使李洁明病逝</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1686">奧斯卡金</a>
										</cite>
					<em>2009-11-15</em>
				</td>
				<td class="nums"><strong>48</strong> / <em>957</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=28096&goto=lastpost#lastpost">2009-11-17 19:51</a></em>
					<cite>by <a href="space.php?username=%CD%E1%CD%E1">歪歪</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_28368" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=28368&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_28368"><a href="viewthread.php?tid=28368&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">南京一孕妇“跌倒” 小伙扶助反遭索赔</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5464">上海帅哥</a>
										</cite>
					<em>2009-11-18</em>
				</td>
				<td class="nums"><strong>48</strong> / <em>838</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=28368&goto=lastpost#lastpost">2009-11-19 23:54</a></em>
					<cite>by <a href="space.php?username=%CE%F7%C3%C5%B4%B5%C5%A3">西门吹牛</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_28845" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=28845&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_28845"><a href="viewthread.php?tid=28845&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">铁军的指挥系统</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1408">becom</a>
										</cite>
					<em>2009-11-23</em>
				</td>
				<td class="nums"><strong>48</strong> / <em>1298</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=28845&goto=lastpost#lastpost">2009-11-27 18:06</a></em>
					<cite>by <a href="space.php?username=nandht">nandht</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_29424" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=29424&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_29424"><a href="viewthread.php?tid=29424&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">温总理您好，这是我名片</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3202">glim</a>
										</cite>
					<em>2009-11-30</em>
				</td>
				<td class="nums"><strong>48</strong> / <em>1291</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=29424&goto=lastpost#lastpost">2009-12-2 05:36</a></em>
					<cite>by <a href="space.php?username=QuasarX">QuasarX</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_29436" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=29436&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_29436"><a href="viewthread.php?tid=29436&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">公务员考歼十？女大学生哭了</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3308">天衢居士</a>
										</cite>
					<em>2009-11-30</em>
				</td>
				<td class="nums"><strong>48</strong> / <em>1558</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=29436&goto=lastpost#lastpost">2009-12-6 00:38</a></em>
					<cite>by <a href="space.php?username=investigate">investigate</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_30393" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=30393&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_30393"><a href="viewthread.php?tid=30393&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">奥巴马或决定圣诞节前后公布外星生命存在信息</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=9922">小磨的大白免</a>
										</cite>
					<em>2009-12-9</em>
				</td>
				<td class="nums"><strong>48</strong> / <em>1170</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=30393&goto=lastpost#lastpost">2009-12-10 10:36</a></em>
					<cite>by <a href="space.php?username=ilikecunny">ilikecunny</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_30239" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=30239&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_30239"><a href="viewthread.php?tid=30239&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">台湾网友对大陆封P2P的反应</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4544">袜子自己洗</a>
										</cite>
					<em>2009-12-7</em>
				</td>
				<td class="nums"><strong>48</strong> / <em>1983</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=30239&goto=lastpost#lastpost">2009-12-10 18:27</a></em>
					<cite>by <a href="space.php?username=zhangdsh">zhangdsh</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_29540" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=29540&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_29540"><a href="viewthread.php?tid=29540&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">上海生物制品研究所大范围传播艾滋 受害者不止200人</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7002">luugoo</a>
										</cite>
					<em>2009-12-1</em>
				</td>
				<td class="nums"><strong>48</strong> / <em>1520</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=29540&goto=lastpost#lastpost">2009-12-24 15:09</a></em>
					<cite>by <a href="space.php?username=%BF%D5%D0%C4%CA%AF%CD%B7">空心石头</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_40096" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=40096&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_40096"><a href="viewthread.php?tid=40096&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">谷歌重申不过滤搜索结果 做准备停止中国业务</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5521">中央总竖鸡</a>
										</cite>
					<em>2010-3-11</em>
				</td>
				<td class="nums"><strong>48</strong> / <em>1687</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=40096&goto=lastpost#lastpost">2010-3-13 21:46</a></em>
					<cite>by <a href="space.php?username=zcgme">zcgme</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_40529" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=40529&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_40529"><a href="viewthread.php?tid=40529&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">中共召回熊猫应对美会见达赖</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4570">我卖糕的</a>
										</cite>
					<em>2010-3-17</em>
				</td>
				<td class="nums"><strong>48</strong> / <em>1248</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=40529&goto=lastpost#lastpost">2010-3-20 21:49</a></em>
					<cite>by <a href="space.php?username=a625446312">a625446312</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_40823" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=40823&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_40823"><a href="viewthread.php?tid=40823&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">中国银行售卖的黄金“福娃”发生锈变</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2232">老杂疫</a>
										</cite>
					<em>2010-3-21</em>
				</td>
				<td class="nums"><strong>48</strong> / <em>1645</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=40823&goto=lastpost#lastpost">2010-3-24 13:27</a></em>
					<cite>by <a href="space.php?username=xiong13">xiong13</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_42979" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=42979&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_42979"><a href="viewthread.php?tid=42979&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">鄂尔多斯50亿建新城 空置率九成七</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7002">luugoo</a>
										</cite>
					<em>2010-4-1</em>
				</td>
				<td class="nums"><strong>48</strong> / <em>1679</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=42979&goto=lastpost#lastpost">2010-4-13 20:49</a></em>
					<cite>by <a href="space.php?username=%CE%D2%C2%F4%B8%E2%B5%C4">我卖糕的</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_45931" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=45931&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_45931"><a href="viewthread.php?tid=45931&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">内地女记者投诉香港政府 称接受“邓小平托梦”</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=10890">xiaohe1120</a>
										</cite>
					<em>2010-5-15</em>
				</td>
				<td class="nums"><strong>48</strong> / <em>1466</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=45931&goto=lastpost#lastpost">2010-5-18 11:03</a></em>
					<cite>by <a href="space.php?username=%D5%C5%CA%E9%BC%C7">张书记</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_46073" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=46073&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_46073"><a href="viewthread.php?tid=46073&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">男子连砍6名女子后跳楼身亡 专挑年轻女孩下刀</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4570">我卖糕的</a>
										</cite>
					<em>2010-5-17</em>
				</td>
				<td class="nums"><strong>48</strong> / <em>973</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=46073&goto=lastpost#lastpost">2010-5-18 12:26</a></em>
					<cite>by <a href="space.php?username=%D7%F3%B0%B6%A1%FB%D3%D2%B0%B6">左岸←右岸</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_33603" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=33603&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_33603"><a href="viewthread.php?tid=33603&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">台湾高中语文课文言文比例提到65%</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=134">丁丁</a>
										</cite>
					<em>2010-1-5</em>
				</td>
				<td class="nums"><strong>48</strong> / <em>647</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=33603&goto=lastpost#lastpost">2010-1-7 20:31</a></em>
					<cite>by <a href="space.php?username=%CE%F7%C3%C5%B4%B5%C5%A3">西门吹牛</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_34267" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=34267&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_34267"><a href="viewthread.php?tid=34267&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">宁夏回人公司遭汉人联合诈骗 民族矛盾再现</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7002">luugoo</a>
										</cite>
					<em>2010-1-11</em>
				</td>
				<td class="nums"><strong>48</strong> / <em>648</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=34267&goto=lastpost#lastpost">2010-1-14 10:56</a></em>
					<cite>by <a href="space.php?username=nkpoper">nkpoper</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_34759" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=34759&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_34759"><a href="viewthread.php?tid=34759&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">水均益结交新欢</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=852">未来他老爸</a>
										</cite>
					<em>2010-1-15</em>
				</td>
				<td class="nums"><strong>48</strong> / <em>2000</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=34759&goto=lastpost#lastpost">2010-1-18 14:53</a></em>
					<cite>by <a href="space.php?username=virginsky">virginsky</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_35485" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=35485&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_35485"><a href="viewthread.php?tid=35485&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">上海律师不满汉字歧视女性   称‘奸’改‘犭行’可减少20%强奸</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=852">未来他老爸</a>
										</cite>
					<em>2010-1-21</em>
				</td>
				<td class="nums"><strong>48</strong> / <em>946</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=35485&goto=lastpost#lastpost">2010-1-23 23:30</a></em>
					<cite>by <a href="space.php?username=%C3%CE%D0%D1%CB%E6%D3%F6">梦醒随遇</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_37255" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=37255&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_37255"><a href="viewthread.php?tid=37255&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">Google搜索结果再次令爱国青年不满和不安</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=10890">xiaohe1120</a>
										</cite>
					<em>2010-2-8</em>
				</td>
				<td class="nums"><strong>48</strong> / <em>1942</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=37255&goto=lastpost#lastpost">2010-2-10 12:11</a></em>
					<cite>by <a href="space.php?username=youttiao">youttiao</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_37482" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=37482&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_37482"><a href="viewthread.php?tid=37482&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">盾牌摆阵 武汉800执法人员强拆违章建筑</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=9991">duck_1984</a>
										</cite>
					<em>2009-12-18</em>
				</td>
				<td class="nums"><strong>48</strong> / <em>1520</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=37482&goto=lastpost#lastpost">2010-2-11 11:07</a></em>
					<cite>by <a href="space.php?username=elzzird">elzzird</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_37365" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=37365&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_37365"><a href="viewthread.php?tid=37365&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">中共将推进“红段子”普及</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3202">glim</a>
										</cite>
					<em>2010-2-10</em>
				</td>
				<td class="nums"><strong>48</strong> / <em>987</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=37365&goto=lastpost#lastpost">2010-2-12 15:05</a></em>
					<cite>by <a href="space.php?username=%D1%D5%C8%E7%D3%F1">颜如玉</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_36666" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=36666&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_36666"><a href="viewthread.php?tid=36666&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">河南铁路沿线的标语“非法上访 后悔终生”</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2232">老杂疫</a>
										</cite>
					<em>2010-2-2</em>
				</td>
				<td class="nums"><strong>48</strong> / <em>1229</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=36666&goto=lastpost#lastpost">2010-2-21 11:21</a></em>
					<cite>by <a href="space.php?username=hubintao">hubintao</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_37822" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=37822&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_37822"><a href="viewthread.php?tid=37822&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">一日本人在华拍摄少女裸体被捕</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7990">王九蛋</a>
										</cite>
					<em>2010-2-16</em>
				</td>
				<td class="nums"><strong>48</strong> / <em>1977</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=37822&goto=lastpost#lastpost">2010-2-22 11:52</a></em>
					<cite>by <a href="space.php?username=bafield">bafield</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_13827" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=13827&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_13827"><a href="viewthread.php?tid=13827&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">中国新闻审查案例：北京网评会批评网站娱乐化报道罗京病逝</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4884">albert_qhd</a>
										</cite>
					<em>2009-6-16</em>
				</td>
				<td class="nums"><strong>48</strong> / <em>1247</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=13827&goto=lastpost#lastpost">2009-6-20 19:26</a></em>
					<cite>by <a href="space.php?username=%D6%D0%D1%EB%D7%DC%CA%FA%BC%A6">中央总竖鸡</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_15796" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=15796&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_15796"><a href="viewthread.php?tid=15796&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">上海自杀楼盘房主在人民广场散步</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=304">囧rz</a>
										</cite>
					<em>2009-7-4</em>
				</td>
				<td class="nums"><strong>48</strong> / <em>1613</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=15796&goto=lastpost#lastpost">2009-7-6 15:18</a></em>
					<cite>by <a href="space.php?username=%C9%CF%CA%D3%C2%A6%D2%BB%B3%BF">上视娄一晨</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_16092" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=16092&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_16092"><a href="viewthread.php?tid=16092&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">就新疆暴乱一事，海外评论分歧严重</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4262">uwen</a>
										</cite>
					<em>2009-7-7</em>
				</td>
				<td class="nums"><strong>48</strong> / <em>1474</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=16092&goto=lastpost#lastpost">2009-7-9 13:37</a></em>
					<cite>by <a href="space.php?username=%B2%CB%B5%F9">菜爹</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_16526" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=16526&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_16526"><a href="viewthread.php?tid=16526&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">魏京生：谁是幕后的黑手？</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1162">小龙人</a>
										</cite>
					<em>2009-7-12</em>
				</td>
				<td class="nums"><strong>48</strong> / <em>1047</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=16526&goto=lastpost#lastpost">2009-7-14 17:29</a></em>
					<cite>by <a href="space.php?username=%B1%F0%D3%D0%D3%C3%D0%C4%B5%C4%C8%CB">别有用心的人</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_54753" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=54753&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_54753"><a href="viewthread.php?tid=54753&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">广州市委书记张广宁再婚迎娶女主播张小莉</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3227">快乐流浪汉</a>
										</cite>
					<em>2010-8-6</em>
				</td>
				<td class="nums"><strong>48</strong> / <em>2290</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=54753&goto=lastpost#lastpost">2010-8-10 10:34</a></em>
					<cite>by <a href="space.php?username=howejiang">howejiang</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_56210" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=56210&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_56210"><a href="viewthread.php?tid=56210&amp;extra=page%3D26%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">温家宝参观考察迅雷网络</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=15480">败亦枭雄</a>
										</cite>
					<em>2010-8-23</em>
				</td>
				<td class="nums"><strong>48</strong> / <em>1472</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=56210&goto=lastpost#lastpost">2010-8-24 23:00</a></em>
					<cite>by <a href="space.php?username=%C8%E7%CA%C7%B6%F8%D2%D1">如是而已</a></cite>
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
	<div class="pages"><em>&nbsp;22278&nbsp;</em><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=1" class="first">1 ...</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=25" class="prev">&lsaquo;&lsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=24">24</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=25">25</a><strong>26</strong><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=27">27</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=28">28</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=29">29</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=30">30</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=31">31</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=32">32</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=33">33</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=27" class="next">&rsaquo;&rsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=349" class="last">... 349</a><kbd><input type="text" name="custompage" size="3" onkeydown="if(event.keyCode==13) {window.location='forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page='+this.value; return false;}" /></kbd></div>	</div>

  
	<div class="box">
			<span class="headactions"><a href="forumdisplay.php?fid=2&amp;page=26&amp;showoldetails=yes#online" class="nobdr"><img src="images/default/collapsed_yes.gif" alt="" /></a></span>
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
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
			window.location = 'forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&page=14';
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
<div class="pages"><em>&nbsp;22278&nbsp;</em><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=1" class="first">1 ...</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=14" class="prev">&lsaquo;&lsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=13">13</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=14">14</a><strong>15</strong><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=16">16</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=17">17</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=18">18</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=19">19</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=20">20</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=21">21</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=22">22</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=16" class="next">&rsaquo;&rsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=349" class="last">... 349</a><kbd><input type="text" name="custompage" size="3" onkeydown="if(event.keyCode==13) {window.location='forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page='+this.value; return false;}" /></kbd></div></div>

<div style="float:left;border:1px solid #CCC; border-bottom:none;;width:218px; background: url(/imgs/1984radio.jpg) 200px 2px no-repeat;padding:5px 0 5px 12px;margin:0px 0 0 13px">

<p><b><a href="/radio/index.php" target="_blank">1984FM</a></b><br /><b><a href="https://voxli.com/1984bbs" target="_blank">1984Chat</a></b>&nbsp;</p> 
</div>

<div style="clear:both;height:0px;width:100%;font-size:1px;">&nbsp;</div>

	<ul class="popupmenu_popup newspecialmenu" id="newspecial_menu" style="display: none">
		<li><a href="post.php?action=newthread&amp;fid=2&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">发新话题</a></li>		<li class="poll"><a href="post.php?action=newthread&amp;fid=2&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;special=1">发布投票</a></li>													</ul>
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

					<tbody id="normalthread_40987" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=40987&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_40987"><a href="viewthread.php?tid=40987&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">工信部部长李毅中：有办法屏蔽谷歌在中国的全球网站</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=40987&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=40987&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=9517">老西</a>
										</cite>
					<em>2010-3-23</em>
				</td>
				<td class="nums"><strong>64</strong> / <em>2387</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=40987&goto=lastpost#lastpost">2010-3-24 18:03</a></em>
					<cite>by <a href="space.php?username=cyf_4321">cyf_4321</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_41710" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=41710&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_41710"><a href="viewthread.php?tid=41710&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">广东农民要求天安门撤毛像“被喝茶”</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=41710&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=41710&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8301">lqunl</a>
										</cite>
					<em>2010-3-30</em>
				</td>
				<td class="nums"><strong>64</strong> / <em>1489</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=41710&goto=lastpost#lastpost">2010-4-1 11:48</a></em>
					<cite>by <a href="space.php?username=%D7%D3%D3%FB">子欲</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_43136" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=43136&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_43136"><a href="viewthread.php?tid=43136&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">北京市地震局：北京近期不会发生破坏性地震</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=43136&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=43136&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2344">junhe</a>
										</cite>
					<em>2010-4-15</em>
				</td>
				<td class="nums"><strong>64</strong> / <em>1261</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=43136&goto=lastpost#lastpost">2010-4-18 13:18</a></em>
					<cite>by <a href="space.php?username=%D2%BB%BE%C5%B0%CB%CE%E5">一九八五</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_43911" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=43911&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_43911"><a href="viewthread.php?tid=43911&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">李克强对楼市出重手打压 为接任总理下狠手</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=43911&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=43911&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1284">newland</a>
										</cite>
					<em>2010-4-21</em>
				</td>
				<td class="nums"><strong>64</strong> / <em>2748</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=43911&goto=lastpost#lastpost">2010-4-24 23:24</a></em>
					<cite>by <a href="space.php?username=mayonaisse1214">mayonaisse1214</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_43020" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=43020&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_43020"><a href="viewthread.php?tid=43020&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传，江泽民游览黄鹤楼</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=43020&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=43020&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6479">EASY</a>
										</cite>
					<em>2010-4-14</em>
				</td>
				<td class="nums"><strong>64</strong> / <em>2452</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=43020&goto=lastpost#lastpost">2010-4-27 23:55</a></em>
					<cite>by <a href="space.php?username=%B2%CA%BA%E7%BF%A7%B7%C8%B9%DD">彩虹咖啡馆</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_21711" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=21711&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_21711"><a href="viewthread.php?tid=21711&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">“扎针”是事实，还是合法杀人证书？</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=21711&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=21711&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2132">花想容</a>
										</cite>
					<em>2009-9-9</em>
				</td>
				<td class="nums"><strong>64</strong> / <em>1264</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=21711&goto=lastpost#lastpost">2009-9-12 10:23</a></em>
					<cite>by <a href="space.php?username=%B0%D7%D2%B9%D0%D0">白夜行</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_22909" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=22909&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_22909"><a href="viewthread.php?tid=22909&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">中国的女航天员必须是人妻</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=22909&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=22909&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3202">glim</a>
										</cite>
					<em>2009-9-21</em>
				</td>
				<td class="nums"><strong>64</strong> / <em>1682</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=22909&goto=lastpost#lastpost">2009-9-25 08:49</a></em>
					<cite>by <a href="space.php?username=%C8%CE%CC%EC%E8%F3">任天梵</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_23106" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=23106&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_23106"><a href="viewthread.php?tid=23106&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">联大上的胡</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=23106&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=23106&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7">张书记</a>
										</cite>
					<em>2009-9-23</em>
				</td>
				<td class="nums"><strong>64</strong> / <em>2933</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=23106&goto=lastpost#lastpost">2009-9-26 18:26</a></em>
					<cite>by <a href="space.php?username=alexander982">alexander982</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_24610" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=24610&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_24610"><a href="viewthread.php?tid=24610&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">中国知识界15人发表《网络人权宣言》</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=24610&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=24610&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7002">luugoo</a>
										</cite>
					<em>2009-10-8</em>
				</td>
				<td class="nums"><strong>64</strong> / <em>1385</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=24610&goto=lastpost#lastpost">2009-10-9 17:32</a></em>
					<cite>by <a href="space.php?username=lqunl">lqunl</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_25414" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=25414&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_25414"><a href="viewthread.php?tid=25414&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">郑渊洁预言：《狼图腾》作者获诺贝尔奖只是时间问题</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=25414&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=25414&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1210">username</a>
										</cite>
					<em>2009-10-17</em>
				</td>
				<td class="nums"><strong>64</strong> / <em>1338</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=25414&goto=lastpost#lastpost">2009-10-20 09:21</a></em>
					<cite>by <a href="space.php?username=%B0%A2%B0%CD%D1%C7%B0%CD%B6%C8">阿巴亚巴度</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_13739" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=13739&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_13739"><a href="viewthread.php?tid=13739&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">快讯：邓玉娇案一审宣判，免于刑事处罚</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=13739&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=13739&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1886">gjlawyer</a>
										</cite>
					<em>2009-6-16</em>
				</td>
				<td class="nums"><strong>64</strong> / <em>1135</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=13739&goto=lastpost#lastpost">2009-6-17 19:03</a></em>
					<cite>by <a href="space.php?username=%C0%FB%CE%AC%CC%B9">利维坦</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_4931" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=4931&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_4931"><a href="viewthread.php?tid=4931&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">镜头里的东宫储君</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=4931&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=4931&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7">张书记</a>
										</cite>
					<em>2009-2-16</em>
				</td>
				<td class="nums"><strong>64</strong> / <em>2546</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=4931&goto=lastpost#lastpost">2009-6-21 19:57</a></em>
					<cite>by <a href="space.php?username=%CC%D2%D7%D3%C3%A8%C2%E9">桃子猫麻</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_10777" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=10777&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_10777"><a href="viewthread.php?tid=10777&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">天安门广场“加油党”集会</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=10777&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=10777&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7">张书记</a>
										</cite>
					<em>2009-5-12</em>
				</td>
				<td class="nums"><strong>64</strong> / <em>1596</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=10777&goto=lastpost#lastpost">2009-6-21 21:09</a></em>
					<cite>by <a href="space.php?username=%CC%D2%D7%D3%C3%A8%C2%E9">桃子猫麻</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_16243" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=16243&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_16243"><a href="viewthread.php?tid=16243&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">新疆童尸照片与汶川地震的一张照片一致</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=16243&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=16243&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3195">dlb2825</a>
										</cite>
					<em>2009-7-9</em>
				</td>
				<td class="nums"><strong>64</strong> / <em>1816</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=16243&goto=lastpost#lastpost">2009-7-10 00:45</a></em>
					<cite>by <a href="space.php?username=%D1%A7%BE%BF">学究</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_7353" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=7353&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_7353"><a href="viewthread.php?tid=7353&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">彭丽媛 可能不符合相关法律法规和政策，未予显示</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=7353&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=7353&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=304">囧rz</a>
										</cite>
					<em>2009-3-18</em>
				</td>
				<td class="nums"><strong>64</strong> / <em>1850</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=7353&goto=lastpost#lastpost">2009-5-7 10:39</a></em>
					<cite>by <a href="space.php?username=raul1943">raul1943</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_47739" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=47739&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_47739"><a href="viewthread.php?tid=47739&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">温家宝与东京市民一起打太极拳</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=47739&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=47739&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8201">yijiubasi</a>
										</cite>
					<em>2010-5-31</em>
				</td>
				<td class="nums"><strong>63</strong> / <em>1187</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=47739&goto=lastpost#lastpost">2010-6-1 11:23</a></em>
					<cite>by <a href="space.php?username=hopaemon">hopaemon</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_48687" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=48687&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_48687"><a href="viewthread.php?tid=48687&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">郭台铭宣布富士康已停止发放所有死亡抚恤金</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=48687&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=48687&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=787">sogoood</a>
										</cite>
					<em>2010-6-8</em>
				</td>
				<td class="nums"><strong>63</strong> / <em>809</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=48687&goto=lastpost#lastpost">2010-6-9 13:47</a></em>
					<cite>by <a href="space.php?username=%CE%DE%D1%D4%B5%C4%C9%BD%C7%F0">无言的山丘</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_50138" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=50138&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_50138"><a href="viewthread.php?tid=50138&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">武汉小伙无钱买房  遭女友抛弃后中800万大奖</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=50138&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=50138&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=852">未来他老爸</a>
										</cite>
					<em>2010-6-20</em>
				</td>
				<td class="nums"><strong>63</strong> / <em>1638</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=50138&goto=lastpost#lastpost">2010-6-21 17:49</a></em>
					<cite>by <a href="space.php?username=kiki111">kiki111</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_50467" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=50467&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_50467"><a href="viewthread.php?tid=50467&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">因泄露与金正日会谈内容 胡锦涛翻译被秘密处决</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=50467&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=50467&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1258">路边社记者</a>
										</cite>
					<em>2010-6-23</em>
				</td>
				<td class="nums"><strong>63</strong> / <em>2895</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=50467&goto=lastpost#lastpost">2010-6-24 14:09</a></em>
					<cite>by <a href="space.php?username=Passionate30">Passionate30</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_52045" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=52045&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_52045"><a href="viewthread.php?tid=52045&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">中宣部推“七个怎么看”进高校 引导学生理解党的政策</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=52045&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=52045&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2804">musicool</a>
										</cite>
					<em>2010-7-7</em>
				</td>
				<td class="nums"><strong>63</strong> / <em>1329</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=52045&goto=lastpost#lastpost">2010-7-8 22:50</a></em>
					<cite>by <a href="space.php?username=mcdull">mcdull</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_26511" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=26511&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_26511"><a href="viewthread.php?tid=26511&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">杨振宁向新闻媒体证实 翁帆小姐已怀孕3个月</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=26511&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=26511&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5063">deidei</a>
										</cite>
					<em>2009-10-28</em>
				</td>
				<td class="nums"><strong>63</strong> / <em>1458</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=26511&goto=lastpost#lastpost">2009-11-1 14:12</a></em>
					<cite>by <a href="space.php?username=%D6%ED%D6%E2">猪肘</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_27897" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=27897&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_27897"><a href="viewthread.php?tid=27897&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">党媒称柏林墙倒后阵痛多 东欧人民仍怀念共产主义</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=27897&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=27897&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=85">王五毛</a>
										</cite>
					<em>2009-11-9</em>
				</td>
				<td class="nums"><strong>63</strong> / <em>1355</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=27897&goto=lastpost#lastpost">2009-11-15 00:24</a></em>
					<cite>by <a href="space.php?username=%CE%F7%C3%C5%B4%B5%C5%A3">西门吹牛</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_26979" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=26979&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_26979"><a href="viewthread.php?tid=26979&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">影帝汶川地震中喊话话筒被列一级文物</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=26979&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=26979&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6518">id已被绿坝屏蔽</a>
										</cite>
					<em>2009-11-2</em>
				</td>
				<td class="nums"><strong>63</strong> / <em>1017</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=26979&goto=lastpost#lastpost">2009-11-19 23:47</a></em>
					<cite>by <a href="space.php?username=%CE%F7%C3%C5%B4%B5%C5%A3">西门吹牛</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_31261" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=31261&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_31261"><a href="viewthread.php?tid=31261&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传，北风被广州公安带走</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=31261&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=31261&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=9680">kirk1031</a>
										</cite>
					<em>2009-12-16</em>
				</td>
				<td class="nums"><strong>63</strong> / <em>1608</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=31261&goto=lastpost#lastpost">2009-12-17 02:29</a></em>
					<cite>by <a href="space.php?username=lee_sherry123">lee_sherry123</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_54617" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=54617&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_54617"><a href="viewthread.php?tid=54617&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">研究报告称91%中国民众认为受到尊重对待</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=54617&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=54617&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5464">上海帅哥</a>
										</cite>
					<em>2010-6-28</em>
				</td>
				<td class="nums"><strong>63</strong> / <em>1136</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=54617&goto=lastpost#lastpost">2010-8-16 14:34</a></em>
					<cite>by <a href="space.php?username=hellgate">hellgate</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_55402" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=55402&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_55402"><a href="viewthread.php?tid=55402&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">郭德纲事件疑为中国曲协姜某一手导演</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=55402&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=55402&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=17435">@k2</a>
										</cite>
					<em>2010-8-14</em>
				</td>
				<td class="nums"><strong>63</strong> / <em>2504</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=55402&goto=lastpost#lastpost">2010-8-19 07:56</a></em>
					<cite>by <a href="space.php?username=%EB%85%C9%BD%ECF%D5%D6">雲山霧罩</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_56344" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=56344&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_56344"><a href="viewthread.php?tid=56344&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">真理部最新指令：按外交部口径报道菲律宾人质事件</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=56344&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=56344&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5588">我家旺财有喜了</a>
										</cite>
					<em>2010-8-24</em>
				</td>
				<td class="nums"><strong>63</strong> / <em>1586</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=56344&goto=lastpost#lastpost">2010-8-27 12:33</a></em>
					<cite>by <a href="space.php?username=nanalonely">nanalonely</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_58595" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=58595&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_58595"><a href="viewthread.php?tid=58595&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">意大利市长称中国非法移民带来恶习 将予以扫荡</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=58595&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=58595&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2907">无言的山丘</a>
										</cite>
					<em>2010-9-15</em>
				</td>
				<td class="nums"><strong>63</strong> / <em>953</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=58595&goto=lastpost#lastpost">2010-9-19 13:39</a></em>
					<cite>by <a href="space.php?username=man-eleven">man-eleven</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_34778" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=34778&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_34778"><a href="viewthread.php?tid=34778&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">百度安排逐个联系谷歌广告客户 狂吃剩饭</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=34778&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=34778&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=10536">小操</a>
										</cite>
					<em>2010-1-15</em>
				</td>
				<td class="nums"><strong>63</strong> / <em>1945</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=34778&goto=lastpost#lastpost">2010-1-18 16:16</a></em>
					<cite>by <a href="space.php?username=EASY">EASY</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_36674" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=36674&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_36674"><a href="viewthread.php?tid=36674&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">中共理论刊物《学习与研究》删除了影帝“论言论自由”</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=36674&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=36674&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1258">路边社记者</a>
										</cite>
					<em>2010-2-2</em>
				</td>
				<td class="nums"><strong>63</strong> / <em>1664</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=36674&goto=lastpost#lastpost">2010-2-5 13:27</a></em>
					<cite>by <a href="space.php?username=%C7%E5%B7%E7%D0%A6%BA%C0%C7%E9">清风笑豪情</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_36928" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=36928&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_36928"><a href="viewthread.php?tid=36928&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">乌兰浩特劳动大厦附近发生恶性爆炸</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=36928&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=36928&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4464">老驴快跑</a>
										</cite>
					<em>2010-2-5</em>
				</td>
				<td class="nums"><strong>63</strong> / <em>1873</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=36928&goto=lastpost#lastpost">2010-2-6 22:43</a></em>
					<cite>by <a href="space.php?username=%B5%CD%CD%B7%D7%DF%C2%B7">低头走路</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_38692" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=38692&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_38692"><a href="viewthread.php?tid=38692&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">智利发生8.8级特大地震</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=38692&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=38692&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=11076">有颜色</a>
										</cite>
					<em>2010-2-27</em>
				</td>
				<td class="nums"><strong>63</strong> / <em>1496</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=38692&goto=lastpost#lastpost">2010-2-28 16:23</a></em>
					<cite>by <a href="space.php?username=luugoo">luugoo</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_38719" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=38719&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_38719"><a href="viewthread.php?tid=38719&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">麦当劳为促销接受肯德基等快餐优惠券</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=38719&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=38719&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=10286">qibo</a>
										</cite>
					<em>2010-2-27</em>
				</td>
				<td class="nums"><strong>63</strong> / <em>1653</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=38719&goto=lastpost#lastpost">2010-3-3 21:00</a></em>
					<cite>by <a href="space.php?username=%C2%B7%B1%DF%C9%E7%CC%D8%D4%BC%BC%C7%D5%DF">路边社特约记者</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_17307" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=17307&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_17307"><a href="viewthread.php?tid=17307&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">国务院办公厅通知：严防死守日全食</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=17307&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=17307&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2071">上肛上腺</a>
										</cite>
					<em>2009-7-19</em>
				</td>
				<td class="nums"><strong>63</strong> / <em>1729</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=17307&goto=lastpost#lastpost">2009-7-21 12:46</a></em>
					<cite>by <a href="space.php?username=%C6%D0%CC%E1%D2%BB%D2%B6">菩提一叶</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_2083" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=2083&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_2083"><a href="viewthread.php?tid=2083&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">四君子晓波进去了，他妈的，他们呢！</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=2083&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=2083&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1820">八卦太极拳</a>
										</cite>
					<em>2008-12-18</em>
				</td>
				<td class="nums"><strong>63</strong> / <em>896</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=2083&goto=lastpost#lastpost">2008-12-20 17:38</a></em>
					<cite>by <a href="space.php?username=sizhejiashu">sizhejiashu</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_14878" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=14878&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_14878"><a href="viewthread.php?tid=14878&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">人民网“什锦八宝饭”策划人新作：腊肉饭</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=14878&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=14878&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4761">magicben</a>
										</cite>
					<em>2009-6-25</em>
				</td>
				<td class="nums"><strong>63</strong> / <em>1460</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=14878&goto=lastpost#lastpost">2009-6-25 20:52</a></em>
					<cite>by <a href="space.php?username=%CE%D2%CA%C7%B4%AB%C6%E6">我是传奇</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_16402" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=16402&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_16402"><a href="viewthread.php?tid=16402&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">亚洲周刊：新疆百余汉人被杀西方媒体误读悲剧</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=16402&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=16402&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1038">EmBlem</a>
										</cite>
					<em>2009-7-10</em>
				</td>
				<td class="nums"><strong>63</strong> / <em>1981</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=16402&goto=lastpost#lastpost">2009-7-14 10:01</a></em>
					<cite>by <a href="space.php?username=%CB%BF%CB%BF%CD%C3">丝丝兔</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_16582" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=16582&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_16582"><a href="viewthread.php?tid=16582&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">范美忠受邀重回原学校上课</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=16582&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=16582&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1466">magic7days</a>
										</cite>
					<em>2009-7-10</em>
				</td>
				<td class="nums"><strong>63</strong> / <em>987</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=16582&goto=lastpost#lastpost">2009-7-14 15:01</a></em>
					<cite>by <a href="space.php?username=%B7%CF%D6%D6%B6%B9%F4%F9">废种豆豉</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_39817" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=39817&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_39817"><a href="viewthread.php?tid=39817&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">台湾司法部长：宁下台也不执行1件死刑</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=39817&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=39817&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=134">丁丁</a>
										</cite>
					<em>2010-3-10</em>
				</td>
				<td class="nums"><strong>63</strong> / <em>1004</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=39817&goto=lastpost#lastpost">2010-3-16 18:17</a></em>
					<cite>by <a href="space.php?username=%B2%BB%BE%B4%C9%F1%B5%C4YODA">不敬神的YODA</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_42224" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=42224&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_42224"><a href="viewthread.php?tid=42224&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">中共文化部拒绝鲍勃迪伦在华演出</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=42224&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=42224&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5464">上海帅哥</a>
										</cite>
					<em>2010-4-4</em>
				</td>
				<td class="nums"><strong>63</strong> / <em>1764</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=42224&goto=lastpost#lastpost">2010-4-7 09:54</a></em>
					<cite>by <a href="space.php?username=glim">glim</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_6895" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=6895&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_6895"><a href="viewthread.php?tid=6895&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">大家来自己读大学时的费用</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=6895&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=6895&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2221">巫婆</a>
										</cite>
					<em>2009-3-12</em>
				</td>
				<td class="nums"><strong>63</strong> / <em>664</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=6895&goto=lastpost#lastpost">2009-3-17 17:18</a></em>
					<cite>by <a href="space.php?username=justsailing">justsailing</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_9450" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=9450&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_9450"><a href="viewthread.php?tid=9450&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">韩寒倡导“要像成龙一样学会揣摩圣意”</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=9450&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=9450&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4490">camour</a>
										</cite>
					<em>2009-4-21</em>
				</td>
				<td class="nums"><strong>63</strong> / <em>1283</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=9450&goto=lastpost#lastpost">2009-4-23 08:07</a></em>
					<cite>by <a href="space.php?username=numberscis">numberscis</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_22397" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=22397&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_22397"><a href="viewthread.php?tid=22397&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">北大副校长：别让你女儿在国内读博士</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=22397&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=22397&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4587">萨格拉斯</a>
										</cite>
					<em>2009-9-16</em>
				</td>
				<td class="nums"><strong>63</strong> / <em>1538</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=22397&goto=lastpost#lastpost">2009-9-20 18:16</a></em>
					<cite>by <a href="space.php?username=kyosugi">kyosugi</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_23332" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=23332&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_23332"><a href="viewthread.php?tid=23332&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">波士顿环球报：中国国庆</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=23332&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=23332&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2232">老杂疫</a>
										</cite>
					<em>2009-9-19</em>
				</td>
				<td class="nums"><strong>63</strong> / <em>2508</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=23332&goto=lastpost#lastpost">2009-9-25 09:23</a></em>
					<cite>by <a href="space.php?username=%DF%F7%DF%F7%CE%D8">喵喵呜</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_25632" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=25632&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_25632"><a href="viewthread.php?tid=25632&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">一周图片新闻 10.19-10.25</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=25632&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=25632&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2232">老杂疫</a>
										</cite>
					<em>2009-10-19</em>
				</td>
				<td class="nums"><strong>63</strong> / <em>1515</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=25632&goto=lastpost#lastpost">2009-10-26 13:12</a></em>
					<cite>by <a href="space.php?username=%CE%ED%B7%E7">雾风</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_22360" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=22360&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_22360"><a href="viewthread.php?tid=22360&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">韩三平：明年拍《建党大业》</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=22360&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=22360&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=22">abu</a>
										</cite>
					<em>2009-9-7</em>
				</td>
				<td class="nums"><strong>62</strong> / <em>1434</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=22360&goto=lastpost#lastpost">2009-9-22 17:07</a></em>
					<cite>by <a href="space.php?username=green5206">green5206</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_16903" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=16903&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_16903"><a href="viewthread.php?tid=16903&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">《红色意志的胜利》群众演员须知流出……</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=16903&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=16903&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6942">doggie</a>
										</cite>
					<em>2009-7-16</em>
				</td>
				<td class="nums"><strong>62</strong> / <em>2537</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=16903&goto=lastpost#lastpost">2009-10-1 00:27</a></em>
					<cite>by <a href="space.php?username=%B5%A5%CA%D6%B7%F6%C7%BD">单手扶墙</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_24698" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=24698&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_24698"><a href="viewthread.php?tid=24698&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">公安厅处长透露东莞成人服务业的靠山</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=24698&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=24698&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5588">我家旺财有喜了</a>
										</cite>
					<em>2009-10-10</em>
				</td>
				<td class="nums"><strong>62</strong> / <em>2269</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=24698&goto=lastpost#lastpost">2009-10-15 01:52</a></em>
					<cite>by <a href="space.php?username=%CD%CA%C9%ABFADEAWAY">褪色FADEAWAY</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_17617" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=17617&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_17617"><a href="viewthread.php?tid=17617&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">胡海峰纳米比亚贪污案消息被当局屏蔽</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=17617&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=17617&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2256">丝丝兔</a>
										</cite>
					<em>2009-7-23</em>
				</td>
				<td class="nums"><strong>62</strong> / <em>5483</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=17617&goto=lastpost#lastpost">2009-7-23 10:20</a></em>
					<cite>by <a href="space.php?username=%D5%C5%CA%E9%BC%C7">张书记</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_19124" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=19124&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_19124"><a href="viewthread.php?tid=19124&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传，江Core上海住院，不愿返京</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=19124&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=19124&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5759">路边社刊要</a>
										</cite>
					<em>2009-8-8</em>
				</td>
				<td class="nums"><strong>62</strong> / <em>2511</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=19124&goto=lastpost#lastpost">2009-8-10 20:56</a></em>
					<cite>by <a href="space.php?username=Jyamolmiry">Jyamolmiry</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_19470" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=19470&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_19470"><a href="viewthread.php?tid=19470&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">国务委员：中国的核心利益是维护基本制度</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=19470&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=19470&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3195">dlb2825</a>
										</cite>
					<em>2009-8-7</em>
				</td>
				<td class="nums"><strong>62</strong> / <em>1273</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=19470&goto=lastpost#lastpost">2009-8-12 18:53</a></em>
					<cite>by <a href="space.php?username=peteryang84">peteryang84</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_19394" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=19394&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_19394"><a href="viewthread.php?tid=19394&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">公盟缴税被当局拒绝 银行账户被冻结</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=19394&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=19394&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7683">azuccc</a>
										</cite>
					<em>2009-8-11</em>
				</td>
				<td class="nums"><strong>62</strong> / <em>1353</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=19394&goto=lastpost#lastpost">2009-8-17 02:12</a></em>
					<cite>by <a href="space.php?username=%B7%A8%B2%BB%B0%A2Quei">法不阿Quei</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_28919" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=28919&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_28919"><a href="viewthread.php?tid=28919&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">总投资16亿元的灵山梵宫工程</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=28919&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=28919&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=9517">老西</a>
										</cite>
					<em>2009-11-24</em>
				</td>
				<td class="nums"><strong>62</strong> / <em>1132</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=28919&goto=lastpost#lastpost">2009-11-26 15:57</a></em>
					<cite>by <a href="space.php?username=%CE%C2%C8%E1%B5%C4%B4%C8%B1%AF">温柔的慈悲</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_31066" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=31066&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_31066"><a href="viewthread.php?tid=31066&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">CCTV走火 QQ邮箱遭批</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=31066&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=31066&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2472">Noel</a>
										</cite>
					<em>2009-12-13</em>
				</td>
				<td class="nums"><strong>62</strong> / <em>1858</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=31066&goto=lastpost#lastpost">2009-12-15 09:42</a></em>
					<cite>by <a href="space.php?username=%C7%E0%C9%D9%C4%EA%B7%B4%D0%D4%C1%AA%C3%CB">青少年反性联盟</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_31819" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=31819&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_31819"><a href="viewthread.php?tid=31819&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">美国前司法部长请求旁听对刘晓波的政治审判</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=31819&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=31819&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7">张书记</a>
										</cite>
					<em>2009-8-28</em>
				</td>
				<td class="nums"><strong>62</strong> / <em>1777</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=31819&goto=lastpost#lastpost">2009-12-21 23:07</a></em>
					<cite>by <a href="space.php?username=%B2%BB%D0%E2%B8%D6%C0%CF%CA%F3">不锈钢老鼠</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_32550" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=32550&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_32550"><a href="viewthread.php?tid=32550&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传，网络严打升级，交互式栏目一律关闭</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=32550&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=32550&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=24">wang3</a>
										</cite>
					<em>2009-12-23</em>
				</td>
				<td class="nums"><strong>62</strong> / <em>2323</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=32550&goto=lastpost#lastpost">2009-12-26 18:17</a></em>
					<cite>by <a href="space.php?username=nailking">nailking</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_9410" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=9410&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_9410"><a href="viewthread.php?tid=9410&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">北川县委宣传部副部长自缢前两小时的遗书</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=9410&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=9410&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3996">羊皮鬼</a>
										</cite>
					<em>2009-4-20</em>
				</td>
				<td class="nums"><strong>62</strong> / <em>1700</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=9410&goto=lastpost#lastpost">2009-4-27 13:19</a></em>
					<cite>by <a href="space.php?username=qweiop715">qweiop715</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_47339" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=47339&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_47339"><a href="viewthread.php?tid=47339&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">中国研真空管道磁悬浮列车 理论时速两万公里</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=47339&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=47339&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=9591">吃吃饭</a>
										</cite>
					<em>2010-5-26</em>
				</td>
				<td class="nums"><strong>62</strong> / <em>1139</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=47339&goto=lastpost#lastpost">2010-6-1 09:11</a></em>
					<cite>by <a href="space.php?username=neocao123">neocao123</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_48778" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=48778&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_48778"><a href="viewthread.php?tid=48778&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">波兰颁布新法律条文 强奸及恋童犯必须予以阉割</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=48778&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=48778&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=14510">橘子</a>
										</cite>
					<em>2010-6-9</em>
				</td>
				<td class="nums"><strong>62</strong> / <em>994</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=48778&goto=lastpost#lastpost">2010-6-10 13:43</a></em>
					<cite>by <a href="space.php?username=%B2%DD%C1%CF%B3%A1%C0%CF%BE%FC">草料场老军</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_49056" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=49056&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_49056"><a href="viewthread.php?tid=49056&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">国新办发表白皮书 称公民享有互联网言论自由</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=49056&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=49056&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2071">上肛上腺</a>
										</cite>
					<em>2010-6-8</em>
				</td>
				<td class="nums"><strong>62</strong> / <em>1077</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=49056&goto=lastpost#lastpost">2010-6-15 09:59</a></em>
					<cite>by <a href="space.php?username=ghgws">ghgws</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_50696" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=50696&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_50696"><a href="viewthread.php?tid=50696&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">世界杯意大利队被淘汰</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=50696&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=50696&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=12310">炽鸢侯</a>
										</cite>
					<em>2010-6-24</em>
				</td>
				<td class="nums"><strong>62</strong> / <em>1146</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=50696&goto=lastpost#lastpost">2010-6-26 21:02</a></em>
					<cite>by <a href="space.php?username=%B0%B7%C7%E8%BE%DB%C8%FD%C0%C9">胺氰聚三郎</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_50916" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=50916&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_50916"><a href="viewthread.php?tid=50916&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">烟台旅游当心：椅子千万不能随便坐</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=50916&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=50916&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=13117">魯邦三世</a>
										</cite>
					<em>2010-6-27</em>
				</td>
				<td class="nums"><strong>62</strong> / <em>2080</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=50916&goto=lastpost#lastpost">2010-6-28 16:56</a></em>
					<cite>by <a href="space.php?username=%BA%FA%D4%BB%D4%BB">胡曰曰</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_51337" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=51337&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_51337"><a href="viewthread.php?tid=51337&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">中组部回应共产党信仰危机质疑：入其他党动机同样不纯</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=51337&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=51337&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=11925">天下为公</a>
										</cite>
					<em>2010-7-1</em>
				</td>
				<td class="nums"><strong>62</strong> / <em>1647</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=51337&goto=lastpost#lastpost">2010-7-2 16:56</a></em>
					<cite>by <a href="space.php?username=%C0%AD%DE%A2%B6%F9">拉蔻儿</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_51586" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=51586&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_51586"><a href="viewthread.php?tid=51586&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">温家宝在湖南考察抗洪 现场处理地质塌陷问题</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=51586&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=51586&amp;extra=page%3D15%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=16624">令狐冲</a>
										</cite>
					<em>2010-7-2</em>
				</td>
				<td class="nums"><strong>62</strong> / <em>1837</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=51586&goto=lastpost#lastpost">2010-7-4 12:53</a></em>
					<cite>by <a href="space.php?username=gofawe">gofawe</a></cite>
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
	<div class="pages"><em>&nbsp;22278&nbsp;</em><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=1" class="first">1 ...</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=14" class="prev">&lsaquo;&lsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=13">13</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=14">14</a><strong>15</strong><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=16">16</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=17">17</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=18">18</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=19">19</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=20">20</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=21">21</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=22">22</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=16" class="next">&rsaquo;&rsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=349" class="last">... 349</a><kbd><input type="text" name="custompage" size="3" onkeydown="if(event.keyCode==13) {window.location='forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page='+this.value; return false;}" /></kbd></div>	</div>

  
	<div class="box">
			<span class="headactions"><a href="forumdisplay.php?fid=2&amp;page=15&amp;showoldetails=yes#online" class="nobdr"><img src="images/default/collapsed_yes.gif" alt="" /></a></span>
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
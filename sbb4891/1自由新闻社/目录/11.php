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
			window.location = 'forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&page=10';
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
<div class="pages"><em>&nbsp;22278&nbsp;</em><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=1" class="first">1 ...</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=10" class="prev">&lsaquo;&lsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=9">9</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=10">10</a><strong>11</strong><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=12">12</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=13">13</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=14">14</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=15">15</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=16">16</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=17">17</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=18">18</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=12" class="next">&rsaquo;&rsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=349" class="last">... 349</a><kbd><input type="text" name="custompage" size="3" onkeydown="if(event.keyCode==13) {window.location='forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page='+this.value; return false;}" /></kbd></div></div>

<div style="float:left;border:1px solid #CCC; border-bottom:none;;width:218px; background: url(/imgs/1984radio.jpg) 200px 2px no-repeat;padding:5px 0 5px 12px;margin:0px 0 0 13px">

<p><b><a href="/radio/index.php" target="_blank">1984FM</a></b><br /><b><a href="https://voxli.com/1984bbs" target="_blank">1984Chat</a></b>&nbsp;</p> 
</div>

<div style="clear:both;height:0px;width:100%;font-size:1px;">&nbsp;</div>

	<ul class="popupmenu_popup newspecialmenu" id="newspecial_menu" style="display: none">
		<li><a href="post.php?action=newthread&amp;fid=2&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">发新话题</a></li>		<li class="poll"><a href="post.php?action=newthread&amp;fid=2&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;special=1">发布投票</a></li>													</ul>
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

					<tbody id="normalthread_38246" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=38246&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_38246"><a href="viewthread.php?tid=38246&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">珠三角缺工200万工资狂涨   月薪5千仍难招人</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=38246&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=38246&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=852">未来他老爸</a>
										</cite>
					<em>2010-2-21</em>
				</td>
				<td class="nums"><strong>76</strong> / <em>1693</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=38246&goto=lastpost#lastpost">2010-2-27 22:09</a></em>
					<cite>by <a href="space.php?username=%D3%A2%D0%DB%B9%F3%D0%D5">英雄贵姓</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_39639" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=39639&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_39639"><a href="viewthread.php?tid=39639&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">《劫后天府泪纵横》入选奥斯卡最佳纪录短片名单</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=39639&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=39639&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4291">badan</a>
										</cite>
					<em>2010-2-2</em>
				</td>
				<td class="nums"><strong>76</strong> / <em>2765</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=39639&goto=lastpost#lastpost">2010-3-8 22:17</a></em>
					<cite>by <a href="space.php?username=%D6%DC%D3%CE%C1%D0%B9%FA">周游列国</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_39614" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=39614&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_39614"><a href="viewthread.php?tid=39614&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">《拆弹部队》获得第82届奥斯卡最佳影片奖</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=39614&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=39614&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2256">丝丝兔</a>
										</cite>
					<em>2010-3-8</em>
				</td>
				<td class="nums"><strong>76</strong> / <em>1545</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=39614&goto=lastpost#lastpost">2010-3-10 18:53</a></em>
					<cite>by <a href="space.php?username=%D2%C1%CB%B9%CC%B9%B2%BC%B6%FB">伊斯坦布尔</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_54862" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=54862&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_54862"><a href="viewthread.php?tid=54862&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">郭德纲书籍音像制品遭下架处理</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=54862&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=54862&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=12310">炽鸢侯</a>
										</cite>
					<em>2010-8-7</em>
				</td>
				<td class="nums"><strong>76</strong> / <em>1860</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=54862&goto=lastpost#lastpost">2010-8-11 00:56</a></em>
					<cite>by <a href="space.php?username=%C3%D7%C0%BC%D6%AE%E9%E4">米兰之殇</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_59321" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=59321&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_59321"><a href="viewthread.php?tid=59321&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">徐友渔呼吁将诺贝尔和平奖授予刘晓波</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=59321&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=59321&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2973">free1989</a>
										</cite>
					<em>2010-9-24</em>
				</td>
				<td class="nums"><strong>76</strong> / <em>1625</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=59321&goto=lastpost#lastpost">2010-9-29 07:19</a></em>
					<cite>by <a href="space.php?username=%BB%BB%CC%C0%B2%BB%BB%BB%D2%A9">换汤不换药</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_59616" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=59616&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_59616"><a href="viewthread.php?tid=59616&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">中共就诺贝尔和平奖向挪威施压</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=59616&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=59616&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2973">free1989</a>
										</cite>
					<em>2010-9-28</em>
				</td>
				<td class="nums"><strong>76</strong> / <em>2763</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=59616&goto=lastpost#lastpost">2010-10-9 20:03</a></em>
					<cite>by <a href="space.php?username=%B0%C4%D6%DE%DEr%88%F6%D4%5D">澳洲農場註</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_13570" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=13570&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_13570"><a href="viewthread.php?tid=13570&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">临时召唤：绿坝投票需要你！</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=13570&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=13570&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4285">wowo_steve</a>
										</cite>
					<em>2009-6-13</em>
				</td>
				<td class="nums"><strong>76</strong> / <em>1277</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=13570&goto=lastpost#lastpost">2009-6-15 18:20</a></em>
					<cite>by <a href="space.php?username=%C5%A3%B6%D9">牛顿</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_15582" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=15582&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_15582"><a href="viewthread.php?tid=15582&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">北大研究生自杀</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=15582&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=15582&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=300">rationalcrow</a>
										</cite>
					<em>2009-7-1</em>
				</td>
				<td class="nums"><strong>76</strong> / <em>1808</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=15582&goto=lastpost#lastpost">2009-7-6 14:59</a></em>
					<cite>by <a href="space.php?username=%C8%F8%B8%F1%C0%AD%CB%B9">萨格拉斯</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_51144" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=51144&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_51144"><a href="viewthread.php?tid=51144&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">温家宝视察浙江大学</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=51144&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=51144&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6906">jaychu128</a>
										</cite>
					<em>2010-6-25</em>
				</td>
				<td class="nums"><strong>76</strong> / <em>2122</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=51144&goto=lastpost#lastpost">2010-7-3 11:00</a></em>
					<cite>by <a href="space.php?username=%CC%AB%D7%E6%B0%AE%D4%CB%B6%AF">太祖爱运动</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_52239" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=52239&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_52239"><a href="viewthread.php?tid=52239&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">杭州上海发生不明原因巨响 机场关闭</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=52239&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=52239&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6723">卡哥</a>
										</cite>
					<em>2010-7-7</em>
				</td>
				<td class="nums"><strong>76</strong> / <em>3376</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=52239&goto=lastpost#lastpost">2010-7-12 19:27</a></em>
					<cite>by <a href="space.php?username=%B9%C8%B5%DC">谷弟</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_49119" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=49119&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_49119"><a href="viewthread.php?tid=49119&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">上海一中学推行“种族隔离政策”</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=49119&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=49119&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3227">快乐流浪汉</a>
										</cite>
					<em>2010-6-11</em>
				</td>
				<td class="nums"><strong>75</strong> / <em>1504</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=49119&goto=lastpost#lastpost">2010-6-13 09:38</a></em>
					<cite>by <a href="space.php?username=%D5%D1%CE%C4">昭文</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_50502" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=50502&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_50502"><a href="viewthread.php?tid=50502&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传公安部一个暗访小组失踪</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=50502&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=50502&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=14632">轮回摆脱</a>
										</cite>
					<em>2010-6-23</em>
				</td>
				<td class="nums"><strong>75</strong> / <em>3614</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=50502&goto=lastpost#lastpost">2010-7-1 13:37</a></em>
					<cite>by <a href="space.php?username=ayayalover">ayayalover</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_53820" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=53820&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_53820"><a href="viewthread.php?tid=53820&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">大连市大连湾附近输油管道爆炸</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=53820&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=53820&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=17098">忽然不得零</a>
										</cite>
					<em>2010-7-16</em>
				</td>
				<td class="nums"><strong>75</strong> / <em>2097</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=53820&goto=lastpost#lastpost">2010-7-27 11:12</a></em>
					<cite>by <a href="space.php?username=%C5W%C5W%D1%F2">臰臰羊</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_26403" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=26403&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_26403"><a href="viewthread.php?tid=26403&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">娃哈哈奶品一切相关新闻已被禁止</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=26403&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=26403&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4338">awhc</a>
										</cite>
					<em>2009-10-27</em>
				</td>
				<td class="nums"><strong>75</strong> / <em>2353</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=26403&goto=lastpost#lastpost">2009-11-3 14:28</a></em>
					<cite>by <a href="space.php?username=qmagicworld">qmagicworld</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_26813" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=26813&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_26813"><a href="viewthread.php?tid=26813&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">贾庆林：我们既不是一党制也不是多党制</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=26813&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=26813&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4570">我卖糕的</a>
										</cite>
					<em>2009-11-1</em>
				</td>
				<td class="nums"><strong>75</strong> / <em>1709</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=26813&goto=lastpost#lastpost">2009-11-5 14:15</a></em>
					<cite>by <a href="space.php?username=%C1%D9%D6%D5%C9%CF%B5%DB">临终上帝</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_27159" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=27159&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_27159"><a href="viewthread.php?tid=27159&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">梁国雄直指《文汇报》记者“狗”</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=27159&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=27159&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3202">glim</a>
										</cite>
					<em>2009-11-5</em>
				</td>
				<td class="nums"><strong>75</strong> / <em>1128</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=27159&goto=lastpost#lastpost">2009-11-6 19:51</a></em>
					<cite>by <a href="space.php?username=wodeid">wodeid</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_29352" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=29352&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_29352"><a href="viewthread.php?tid=29352&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">高耀洁已经秘密安全抵达美国</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=29352&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=29352&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2316">自由之春</a>
										</cite>
					<em>2009-11-26</em>
				</td>
				<td class="nums"><strong>75</strong> / <em>1685</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=29352&goto=lastpost#lastpost">2009-11-29 16:27</a></em>
					<cite>by <a href="space.php?username=denoan">denoan</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_7793" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=7793&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_7793"><a href="viewthread.php?tid=7793&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">烧饼演义</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=7793&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=7793&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4542">SPNaCl</a>
										</cite>
					<em>2009-3-25</em>
				</td>
				<td class="nums"><strong>75</strong> / <em>1823</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=7793&goto=lastpost#lastpost">2009-4-1 21:58</a></em>
					<cite>by <a href="space.php?username=yangdc">yangdc</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_44116" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=44116&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_44116"><a href="viewthread.php?tid=44116&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">真理部最新指令：清理“粉笔狐”</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=44116&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=44116&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=21">大仙儿</a>
										</cite>
					<em>2010-4-26</em>
				</td>
				<td class="nums"><strong>75</strong> / <em>2589</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=44116&goto=lastpost#lastpost">2010-4-27 12:04</a></em>
					<cite>by <a href="space.php?username=%B3%D4%BA%D3%D0%B7%B5%C4%B2%DD%C4%E0%F1R">吃河蟹的草泥馬</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_10719" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=10719&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_10719"><a href="viewthread.php?tid=10719&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">且看真理部是如何规范2008年4月-8月网络媒体新闻报道的</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=10719&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=10719&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2428">xiahua</a>
										</cite>
					<em>2009-5-11</em>
				</td>
				<td class="nums"><strong>75</strong> / <em>2407</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=10719&goto=lastpost#lastpost">2009-6-7 01:23</a></em>
					<cite>by <a href="space.php?username=%CE%DE%B6%CB">无端</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_21475" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=21475&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_21475"><a href="viewthread.php?tid=21475&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">南方周末：国庆之前的北京</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=21475&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=21475&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5759">路边社刊要</a>
										</cite>
					<em>2009-8-21</em>
				</td>
				<td class="nums"><strong>75</strong> / <em>2873</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=21475&goto=lastpost#lastpost">2009-9-7 17:58</a></em>
					<cite>by <a href="space.php?username=anitalan">anitalan</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_22226" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=22226&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_22226"><a href="viewthread.php?tid=22226&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传，西安已有“针扎事件”</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=22226&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=22226&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2578">闹了个运</a>
										</cite>
					<em>2009-9-10</em>
				</td>
				<td class="nums"><strong>75</strong> / <em>1881</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=22226&goto=lastpost#lastpost">2009-9-14 17:38</a></em>
					<cite>by <a href="space.php?username=sukip">sukip</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_23584" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=23584&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_23584"><a href="viewthread.php?tid=23584&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">毛新宇：国庆60周年，亲人们你们可以安息了</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=23584&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=23584&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1799">maomao</a>
										</cite>
					<em>2009-9-27</em>
				</td>
				<td class="nums"><strong>75</strong> / <em>1363</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=23584&goto=lastpost#lastpost">2009-10-8 12:18</a></em>
					<cite>by <a href="space.php?username=anton">anton</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_53645" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=53645&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_53645"><a href="viewthread.php?tid=53645&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">《党：中共统治者的神秘世界》英文书遭禁</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=53645&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=53645&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7002">luugoo</a>
										</cite>
					<em>2010-7-22</em>
				</td>
				<td class="nums"><strong>75</strong> / <em>2095</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=53645&goto=lastpost#lastpost">2010-8-20 11:53</a></em>
					<cite>by <a href="space.php?username=MozillaTG">MozillaTG</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_55100" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=55100&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_55100"><a href="viewthread.php?tid=55100&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">中国宽带资费是韩国124倍 严重影响新技术应用</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=55100&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=55100&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4570">我卖糕的</a>
										</cite>
					<em>2010-8-10</em>
				</td>
				<td class="nums"><strong>75</strong> / <em>1230</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=55100&goto=lastpost#lastpost">2010-8-20 17:32</a></em>
					<cite>by <a href="space.php?username=%B1%B1%BE%A9%C4%BB%B8%AE">北京幕府</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_58508" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=58508&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_58508"><a href="viewthread.php?tid=58508&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">姚明：女儿已是美国国籍18岁后她可自己再做选择</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=58508&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=58508&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4570">我卖糕的</a>
										</cite>
					<em>2010-9-15</em>
				</td>
				<td class="nums"><strong>75</strong> / <em>1796</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=58508&goto=lastpost#lastpost">2010-9-26 12:57</a></em>
					<cite>by <a href="space.php?username=rainbowwong">rainbowwong</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_60362" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=60362&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_60362"><a href="viewthread.php?tid=60362&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">哈佛拒绝证实习近平女儿留美</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=60362&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=60362&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6314">hhbcl1414</a>
										</cite>
					<em>2010-10-6</em>
				</td>
				<td class="nums"><strong>75</strong> / <em>3072</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=60362&goto=lastpost#lastpost">2010-10-11 15:56</a></em>
					<cite>by <a href="space.php?username=%CE%ED%D6%D0%CE%F2">雾中悟</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_34260" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=34260&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_34260"><a href="viewthread.php?tid=34260&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">日本首相若公开下跪谢罪将感动中国</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=34260&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=34260&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7002">luugoo</a>
										</cite>
					<em>2010-1-11</em>
				</td>
				<td class="nums"><strong>75</strong> / <em>1270</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=34260&goto=lastpost#lastpost">2010-1-14 06:38</a></em>
					<cite>by <a href="space.php?username=%C1%D9%D6%D5%C9%CF%B5%DB">临终上帝</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_36155" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=36155&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_36155"><a href="viewthread.php?tid=36155&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传，韩寒女友已被潜规则过</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=36155&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=36155&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4705">dreamingly</a>
										</cite>
					<em>2010-1-27</em>
				</td>
				<td class="nums"><strong>75</strong> / <em>3795</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=36155&goto=lastpost#lastpost">2010-2-6 03:31</a></em>
					<cite>by <a href="space.php?username=%D0%A1%B9%ED%BF%AA%B5%EA">小鬼开店</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_37292" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=37292&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_37292"><a href="viewthread.php?tid=37292&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">李庄终审定有期徒刑一年半，法庭上喊重庆没诚信</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=37292&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=37292&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8395">laoyang</a>
										</cite>
					<em>2010-2-9</em>
				</td>
				<td class="nums"><strong>75</strong> / <em>1962</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=37292&goto=lastpost#lastpost">2010-2-10 23:11</a></em>
					<cite>by <a href="space.php?username=%C4%BE%C7%C7%D7%AF">木乔庄</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_26628" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=26628&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_26628"><a href="viewthread.php?tid=26628&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">深圳青年薛明凯涉嫌“颠覆国家政权罪”</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=26628&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=26628&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8301">lqunl</a>
										</cite>
					<em>2009-10-30</em>
				</td>
				<td class="nums"><strong>75</strong> / <em>2305</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=26628&goto=lastpost#lastpost">2010-2-12 12:07</a></em>
					<cite>by <a href="space.php?username=%CB%AE%D0%D0%C9%BD%BE%D3">水行山居</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_35073" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=35073&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_35073"><a href="viewthread.php?tid=35073&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">汉正街&quot;扁担&quot;劳累过度，睡在板车上逝去</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=35073&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=35073&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=11414">无知无畏无耻</a>
										</cite>
					<em>2010-1-17</em>
				</td>
				<td class="nums"><strong>75</strong> / <em>1471</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=35073&goto=lastpost#lastpost">2010-2-25 14:58</a></em>
					<cite>by <a href="space.php?username=anlore">anlore</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_34325" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=34325&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_34325"><a href="viewthread.php?tid=34325&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传，秘书透露十八大储君上位可期</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=34325&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=34325&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5588">我家旺财有喜了</a>
										</cite>
					<em>2010-1-11</em>
				</td>
				<td class="nums"><strong>74</strong> / <em>2508</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=34325&goto=lastpost#lastpost">2010-1-15 13:37</a></em>
					<cite>by <a href="space.php?username=19890604">19890604</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_37490" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=37490&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_37490"><a href="viewthread.php?tid=37490&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">上海真理部处长姜迅因用手机发布新闻指令而被停机</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=37490&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=37490&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7">张书记</a>
										</cite>
					<em>2010-2-11</em>
				</td>
				<td class="nums"><strong>74</strong> / <em>2536</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=37490&goto=lastpost#lastpost">2010-2-21 10:56</a></em>
					<cite>by <a href="space.php?username=%D7%E6%E8%AF%C2%C9">祖璇律</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_10659" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=10659&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_10659"><a href="viewthread.php?tid=10659&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">这是谁啊，A片里的镜头啊</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=10659&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=10659&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=344">路过</a>
										</cite>
					<em>2009-3-8</em>
				</td>
				<td class="nums"><strong>74</strong> / <em>3300</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=10659&goto=lastpost#lastpost">2009-5-12 11:12</a></em>
					<cite>by <a href="space.php?username=Jyamolmiry">Jyamolmiry</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_48064" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=48064&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_48064"><a href="viewthread.php?tid=48064&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">福建出现“六四标语”</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=48064&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=48064&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3194">zhangqian1896</a>
										</cite>
					<em>2010-6-2</em>
				</td>
				<td class="nums"><strong>74</strong> / <em>3692</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=48064&goto=lastpost#lastpost">2010-6-10 22:12</a></em>
					<cite>by <a href="space.php?username=volt28ma">volt28ma</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_51274" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=51274&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_51274"><a href="viewthread.php?tid=51274&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">世博工作人员深夜在小美人鱼头顶跳水遭全球直播</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=51274&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=51274&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2578">闹了个运</a>
										</cite>
					<em>2010-6-30</em>
				</td>
				<td class="nums"><strong>74</strong> / <em>2624</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=51274&goto=lastpost#lastpost">2010-7-3 13:16</a></em>
					<cite>by <a href="space.php?username=%D0%C0%D7%D3">欣子</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_17755" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=17755&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_17755"><a href="viewthread.php?tid=17755&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">石首 “秋后算账”开始了</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=17755&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=17755&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3133">martinshui</a>
										</cite>
					<em>2009-7-22</em>
				</td>
				<td class="nums"><strong>74</strong> / <em>1785</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=17755&goto=lastpost#lastpost">2009-7-29 14:23</a></em>
					<cite>by <a href="space.php?username=Candice">Candice</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_41141" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=41141&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_41141"><a href="viewthread.php?tid=41141&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">Google疑似被屏蔽</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=41141&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=41141&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=10886">JoanofArc</a>
										</cite>
					<em>2010-3-24</em>
				</td>
				<td class="nums"><strong>74</strong> / <em>1635</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=41141&goto=lastpost#lastpost">2010-3-25 12:09</a></em>
					<cite>by <a href="space.php?username=%D6%EC%B4%E4">朱翠</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_46196" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=46196&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_46196"><a href="viewthread.php?tid=46196&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">《仰望星空》正式确定为北航校歌</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=46196&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=46196&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3058">flyspring</a>
										</cite>
					<em>2010-5-13</em>
				</td>
				<td class="nums"><strong>74</strong> / <em>1347</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=46196&goto=lastpost#lastpost">2010-5-19 11:09</a></em>
					<cite>by <a href="space.php?username=Cena">Cena</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_45900" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=45900&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_45900"><a href="viewthread.php?tid=45900&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传王菲徐静蕾赵薇孙楠等明星长期吸毒</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=45900&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=45900&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6314">hhbcl1414</a>
										</cite>
					<em>2010-5-15</em>
				</td>
				<td class="nums"><strong>74</strong> / <em>2880</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=45900&goto=lastpost#lastpost">2010-5-19 11:55</a></em>
					<cite>by <a href="space.php?username=rpoiu">rpoiu</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_22881" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=22881&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_22881"><a href="viewthread.php?tid=22881&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">真理部封杀龙应台新书《大江大海 一九四九》</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=22881&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=22881&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4088">谎蛋派戏剧</a>
										</cite>
					<em>2009-9-19</em>
				</td>
				<td class="nums"><strong>74</strong> / <em>3051</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=22881&goto=lastpost#lastpost">2009-12-4 20:55</a></em>
					<cite>by <a href="space.php?username=%BB%A8%CF%EB%C8%DD">花想容</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_31678" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=31678&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_31678"><a href="viewthread.php?tid=31678&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">逃亡到柬埔寨的20名维吾尔人将被遣送回中国</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=31678&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=31678&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6988">fp456789</a>
										</cite>
					<em>2009-12-19</em>
				</td>
				<td class="nums"><strong>74</strong> / <em>999</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=31678&goto=lastpost#lastpost">2009-12-22 20:15</a></em>
					<cite>by <a href="space.php?username=%CE%F7%B8%A5">西弗</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_26948" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=26948&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_26948"><a href="viewthread.php?tid=26948&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">薄熙来称有人怕被说“左” 有意回避红色文化</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=26948&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=26948&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4570">我卖糕的</a>
										</cite>
					<em>2009-11-1</em>
				</td>
				<td class="nums"><strong>74</strong> / <em>2825</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=26948&goto=lastpost#lastpost">2010-9-16 15:46</a></em>
					<cite>by <a href="space.php?username=%CE%D2%BC%D2%CD%FA%B2%C6%D3%D0%CF%B2%C1%CB">我家旺财有喜了</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_59528" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=59528&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_59528"><a href="viewthread.php?tid=59528&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">中共首次举办廉政文物展 含胡锦涛饭费收据</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=59528&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=59528&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2804">musicool</a>
										</cite>
					<em>2010-9-27</em>
				</td>
				<td class="nums"><strong>74</strong> / <em>1725</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=59528&goto=lastpost#lastpost">2010-10-9 09:37</a></em>
					<cite>by <a href="space.php?username=smlovef4">smlovef4</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_23256" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=23256&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_23256"><a href="viewthread.php?tid=23256&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">精妙23招 饭岛爱含泪九泉</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=23256&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=23256&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2232">老杂疫</a>
										</cite>
					<em>2009-9-24</em>
				</td>
				<td class="nums"><strong>74</strong> / <em>1641</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=23256&goto=lastpost#lastpost">2009-9-25 15:57</a></em>
					<cite>by <a href="space.php?username=sunlilymm">sunlilymm</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_24862" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=24862&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_24862"><a href="viewthread.php?tid=24862&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">影帝新片在教师节上映</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=24862&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=24862&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7949">紧爷</a>
										</cite>
					<em>2009-9-6</em>
				</td>
				<td class="nums"><strong>74</strong> / <em>1724</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=24862&goto=lastpost#lastpost">2009-10-13 07:33</a></em>
					<cite>by <a href="space.php?username=xuebowee">xuebowee</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_24891" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=24891&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_24891"><a href="viewthread.php?tid=24891&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">姐今天被无情的监视了</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=24891&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=24891&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5878">xiaolizi</a>
										</cite>
					<em>2009-10-12</em>
				</td>
				<td class="nums"><strong>74</strong> / <em>2566</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=24891&goto=lastpost#lastpost">2009-10-15 19:45</a></em>
					<cite>by <a href="space.php?username=%B0%D7%C3%D7%C9%D5%BC%A6">白米烧鸡</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_39277" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=39277&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_39277"><a href="viewthread.php?tid=39277&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">李小琳：父亲非常enjoy能与我母亲享受着幸福的晚年</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=39277&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=39277&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3202">glim</a>
										</cite>
					<em>2010-3-5</em>
				</td>
				<td class="nums"><strong>73</strong> / <em>2020</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=39277&goto=lastpost#lastpost">2010-3-14 16:03</a></em>
					<cite>by <a href="space.php?username=dadaomsb">dadaomsb</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_42042" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=42042&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_42042"><a href="viewthread.php?tid=42042&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">毛新宇携全家祭奠刘少奇</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=42042&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=42042&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8811">大衛王飯店</a>
										</cite>
					<em>2010-4-2</em>
				</td>
				<td class="nums"><strong>73</strong> / <em>1939</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=42042&goto=lastpost#lastpost">2010-4-5 12:54</a></em>
					<cite>by <a href="space.php?username=xiong13">xiong13</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_43428" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=43428&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_43428"><a href="viewthread.php?tid=43428&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">诺贝尔和平奖委员会接受了对刘晓波的提名</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=43428&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=43428&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=12726">jensenello</a>
										</cite>
					<em>2010-4-18</em>
				</td>
				<td class="nums"><strong>73</strong> / <em>2061</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=43428&goto=lastpost#lastpost">2010-4-24 21:36</a></em>
					<cite>by <a href="space.php?username=%CE%DE%C7%EE%CE%DE%BE%A1">无穷无尽</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_44183" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=44183&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_44183"><a href="viewthread.php?tid=44183&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">中国现代国际关系研究院研究员在CCTV-2直播中紧张过度</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=44183&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=44183&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=10698">张白一</a>
										</cite>
					<em>2010-4-27</em>
				</td>
				<td class="nums"><strong>73</strong> / <em>3282</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=44183&goto=lastpost#lastpost">2010-4-29 23:00</a></em>
					<cite>by <a href="space.php?username=%CC%EC%C0%C7%D0%C7">天狼星</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_46157" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=46157&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_46157"><a href="viewthread.php?tid=46157&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">北京8岁女童被城管殴打致吐血</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=46157&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=46157&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=9900">三三</a>
										</cite>
					<em>2010-5-17</em>
				</td>
				<td class="nums"><strong>73</strong> / <em>1328</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=46157&goto=lastpost#lastpost">2010-5-21 00:10</a></em>
					<cite>by <a href="space.php?username=newland2008">newland2008</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_46516" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=46516&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_46516"><a href="viewthread.php?tid=46516&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">江泽民：压低调子 不要向我脸上贴金</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=46516&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=46516&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2804">musicool</a>
										</cite>
					<em>2010-5-10</em>
				</td>
				<td class="nums"><strong>73</strong> / <em>2634</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=46516&goto=lastpost#lastpost">2010-5-21 16:44</a></em>
					<cite>by <a href="space.php?username=iamweird">iamweird</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_16420" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=16420&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_16420"><a href="viewthread.php?tid=16420&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传，王小丫与最高人民检察院检察长结婚</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=16420&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=16420&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=613">五花肉</a>
										</cite>
					<em>2009-7-9</em>
				</td>
				<td class="nums"><strong>73</strong> / <em>3719</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=16420&goto=lastpost#lastpost">2010-1-12 02:05</a></em>
					<cite>by <a href="space.php?username=et_0309">et_0309</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_36218" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=36218&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_36218"><a href="viewthread.php?tid=36218&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">江苏近日连出“怪兆”引恐慌    专家称与地震无关</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=36218&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=36218&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=852">未来他老爸</a>
										</cite>
					<em>2010-1-28</em>
				</td>
				<td class="nums"><strong>73</strong> / <em>1715</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=36218&goto=lastpost#lastpost">2010-1-31 13:32</a></em>
					<cite>by <a href="space.php?username=misha">misha</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_37987" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=37987&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_37987"><a href="viewthread.php?tid=37987&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">甘肃建650人网评员队伍 将用正确舆论占领BBS博客</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=37987&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=37987&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=85">王五毛</a>
										</cite>
					<em>2010-1-19</em>
				</td>
				<td class="nums"><strong>73</strong> / <em>2049</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=37987&goto=lastpost#lastpost">2010-2-19 00:08</a></em>
					<cite>by <a href="space.php?username=rocket_eee">rocket_eee</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_38434" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=38434&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_38434"><a href="viewthread.php?tid=38434&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">教育部：严防“乐施会”招聘大学生志愿者</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=38434&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=38434&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1770">nustbobo</a>
										</cite>
					<em>2010-2-22</em>
				</td>
				<td class="nums"><strong>73</strong> / <em>1869</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=38434&goto=lastpost#lastpost">2010-2-24 20:46</a></em>
					<cite>by <a href="space.php?username=lqunl">lqunl</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_18495" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=18495&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_18495"><a href="viewthread.php?tid=18495&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">赵忠祥：我是20世纪中国最著名主持人 道德高尚</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=18495&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=18495&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4647">offacer</a>
										</cite>
					<em>2009-7-17</em>
				</td>
				<td class="nums"><strong>73</strong> / <em>1632</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=18495&goto=lastpost#lastpost">2009-8-2 07:39</a></em>
					<cite>by <a href="space.php?username=yangdc">yangdc</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_48942" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=48942&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_48942"><a href="viewthread.php?tid=48942&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">湖北仙桃高中学生高考后集体撕书</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=48942&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=48942&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2232">老杂疫</a>
										</cite>
					<em>2010-6-10</em>
				</td>
				<td class="nums"><strong>73</strong> / <em>1323</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=48942&goto=lastpost#lastpost">2010-6-13 18:08</a></em>
					<cite>by <a href="space.php?username=%CC%D2%BB%A8%B5%BA%D6%F7">桃花岛主</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_49501" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=49501&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_49501"><a href="viewthread.php?tid=49501&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">中国女演员赴南非携带安全套出行</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=49501&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=49501&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3194">zhangqian1896</a>
										</cite>
					<em>2010-6-14</em>
				</td>
				<td class="nums"><strong>73</strong> / <em>2731</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=49501&goto=lastpost#lastpost">2010-7-6 22:25</a></em>
					<cite>by <a href="space.php?username=%BA%AE%C3%B7">寒梅</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_53018" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=53018&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_53018"><a href="viewthread.php?tid=53018&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传电视台素食节目遭禁播 因与法轮功有关</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=53018&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=53018&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1258">路边社记者</a>
										</cite>
					<em>2010-7-16</em>
				</td>
				<td class="nums"><strong>73</strong> / <em>1717</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=53018&goto=lastpost#lastpost">2010-7-18 18:43</a></em>
					<cite>by <a href="space.php?username=%C5%A3%B6%D9">牛顿</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_59207" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=59207&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_59207"><a href="viewthread.php?tid=59207&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">数名中国人在澳威胁跳楼 拒绝被遣返回国</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=59207&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=59207&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3969">langhua9527</a>
										</cite>
					<em>2010-9-23</em>
				</td>
				<td class="nums"><strong>73</strong> / <em>1627</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=59207&goto=lastpost#lastpost">2010-9-28 12:03</a></em>
					<cite>by <a href="space.php?username=SrAcer">SrAcer</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_59457" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=59457&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_59457"><a href="viewthread.php?tid=59457&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">美议员指中国独生子女政策最侵犯人权</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=59457&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=59457&amp;extra=page%3D11%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7002">luugoo</a>
										</cite>
					<em>2010-9-26</em>
				</td>
				<td class="nums"><strong>73</strong> / <em>1159</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=59457&goto=lastpost#lastpost">2010-10-3 02:08</a></em>
					<cite>by <a href="space.php?username=stlazy">stlazy</a></cite>
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
	<div class="pages"><em>&nbsp;22278&nbsp;</em><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=1" class="first">1 ...</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=10" class="prev">&lsaquo;&lsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=9">9</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=10">10</a><strong>11</strong><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=12">12</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=13">13</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=14">14</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=15">15</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=16">16</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=17">17</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=18">18</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=12" class="next">&rsaquo;&rsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=349" class="last">... 349</a><kbd><input type="text" name="custompage" size="3" onkeydown="if(event.keyCode==13) {window.location='forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page='+this.value; return false;}" /></kbd></div>	</div>

  
	<div class="box">
			<span class="headactions"><a href="forumdisplay.php?fid=2&amp;page=11&amp;showoldetails=yes#online" class="nobdr"><img src="images/default/collapsed_yes.gif" alt="" /></a></span>
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
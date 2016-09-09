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
			window.location = 'forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&page=17';
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
<div class="pages"><em>&nbsp;22278&nbsp;</em><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=1" class="first">1 ...</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=17" class="prev">&lsaquo;&lsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=16">16</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=17">17</a><strong>18</strong><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=19">19</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=20">20</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=21">21</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=22">22</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=23">23</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=24">24</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=25">25</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=19" class="next">&rsaquo;&rsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=349" class="last">... 349</a><kbd><input type="text" name="custompage" size="3" onkeydown="if(event.keyCode==13) {window.location='forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page='+this.value; return false;}" /></kbd></div></div>

<div style="float:left;border:1px solid #CCC; border-bottom:none;;width:218px; background: url(/imgs/1984radio.jpg) 200px 2px no-repeat;padding:5px 0 5px 12px;margin:0px 0 0 13px">

<p><b><a href="/radio/index.php" target="_blank">1984FM</a></b><br /><b><a href="https://voxli.com/1984bbs" target="_blank">1984Chat</a></b>&nbsp;</p> 
</div>

<div style="clear:both;height:0px;width:100%;font-size:1px;">&nbsp;</div>

	<ul class="popupmenu_popup newspecialmenu" id="newspecial_menu" style="display: none">
		<li><a href="post.php?action=newthread&amp;fid=2&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">发新话题</a></li>		<li class="poll"><a href="post.php?action=newthread&amp;fid=2&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;special=1">发布投票</a></li>													</ul>
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

					<tbody id="normalthread_55218" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=55218&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_55218"><a href="viewthread.php?tid=55218&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">BTV官网“敬复观众”的信</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=55218&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=55218&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=13071">mop</a>
										</cite>
					<em>2010-8-12</em>
				</td>
				<td class="nums"><strong>58</strong> / <em>1933</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=55218&goto=lastpost#lastpost">2010-8-16 11:12</a></em>
					<cite>by <a href="space.php?username=%B1%B1%B7%BD%D0%FE%CE%E5">北方玄五</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_55791" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=55791&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_55791"><a href="viewthread.php?tid=55791&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传设立舟曲哀悼日因甘肃逼宫</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=55791&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=55791&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5867">宋石男</a>
										</cite>
					<em>2010-8-18</em>
				</td>
				<td class="nums"><strong>58</strong> / <em>2483</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=55791&goto=lastpost#lastpost">2010-8-20 13:05</a></em>
					<cite>by <a href="space.php?username=hippies">hippies</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_55637" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=55637&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_55637"><a href="viewthread.php?tid=55637&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">一周图片新闻 8.16-8.22</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=55637&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=55637&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2232">老杂疫</a>
										</cite>
					<em>2010-8-16</em>
				</td>
				<td class="nums"><strong>58</strong> / <em>1236</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=55637&goto=lastpost#lastpost">2010-8-21 19:14</a></em>
					<cite>by <a href="space.php?username=%BF%E2%B4%E6%F4%C2%F4%C4">库存袈裟</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_57284" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=57284&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_57284"><a href="viewthread.php?tid=57284&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">有毒化工原料一滴香热销 可使清水变鸡汤</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=57284&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=57284&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7002">luugoo</a>
										</cite>
					<em>2010-9-3</em>
				</td>
				<td class="nums"><strong>58</strong> / <em>1181</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=57284&goto=lastpost#lastpost">2010-9-6 14:10</a></em>
					<cite>by <a href="space.php?username=slmper">slmper</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_58717" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=58717&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_58717"><a href="viewthread.php?tid=58717&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">《环球时报》评选世界最佳领袖 温家宝领先</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=58717&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=58717&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1149">jorong</a>
										</cite>
					<em>2010-9-16</em>
				</td>
				<td class="nums"><strong>58</strong> / <em>1171</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=58717&goto=lastpost#lastpost">2010-9-18 11:20</a></em>
					<cite>by <a href="space.php?username=z286">z286</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_26552" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=26552&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_26552"><a href="viewthread.php?tid=26552&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">《晚清70年》作者唐德刚在旧金山过世</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=26552&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=26552&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=22">abu</a>
										</cite>
					<em>2009-10-29</em>
				</td>
				<td class="nums"><strong>58</strong> / <em>871</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=26552&goto=lastpost#lastpost">2009-11-1 13:38</a></em>
					<cite>by <a href="space.php?username=%CE%F7%C3%C5%B4%B5%C5%A3">西门吹牛</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_1770" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=1770&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_1770"><a href="viewthread.php?tid=1770&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">上海市决心杜绝“睡衣族”上街现象</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=1770&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=1770&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2095">姑娘</a>
										</cite>
					<em>2008-12-13</em>
				</td>
				<td class="nums"><strong>58</strong> / <em>1312</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=1770&goto=lastpost#lastpost">2009-11-1 13:52</a></em>
					<cite>by <a href="space.php?username=%CE%F7%C3%C5%B4%B5%C5%A3">西门吹牛</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_27111" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=27111&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_27111"><a href="viewthread.php?tid=27111&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">“第一声优”叶倩彤被判刑</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=27111&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=27111&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8709">szdos</a>
										</cite>
					<em>2009-11-4</em>
				</td>
				<td class="nums"><strong>58</strong> / <em>2205</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=27111&goto=lastpost#lastpost">2009-11-8 00:18</a></em>
					<cite>by <a href="space.php?username=okkokk007">okkokk007</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_28048" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=28048&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_28048"><a href="viewthread.php?tid=28048&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">女子公交车站玩手机 被当“间谍”遭老人围攻</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=28048&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=28048&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4570">我卖糕的</a>
										</cite>
					<em>2009-11-14</em>
				</td>
				<td class="nums"><strong>58</strong> / <em>1512</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=28048&goto=lastpost#lastpost">2009-11-18 09:08</a></em>
					<cite>by <a href="space.php?username=%BF%DD%CC%D9%C0%CF%CA%F7">枯藤老树</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_30014" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=30014&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_30014"><a href="viewthread.php?tid=30014&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">一美国籍上访女子被北京警方带走</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=30014&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=30014&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7">张书记</a>
										</cite>
					<em>2009-11-17</em>
				</td>
				<td class="nums"><strong>58</strong> / <em>1765</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=30014&goto=lastpost#lastpost">2009-12-12 09:05</a></em>
					<cite>by <a href="space.php?username=glim">glim</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_31248" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=31248&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_31248"><a href="viewthread.php?tid=31248&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">外交部姜瑜：反对任何外部势力借刘晓波案干涉中国主权</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=31248&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=31248&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8301">lqunl</a>
										</cite>
					<em>2009-12-15</em>
				</td>
				<td class="nums"><strong>58</strong> / <em>1391</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=31248&goto=lastpost#lastpost">2009-12-21 16:29</a></em>
					<cite>by <a href="space.php?username=gundamwang">gundamwang</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_22580" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=22580&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																					<img src="images/default/digest_1.gif" alt="火星帖 1" />
										 </label>
																				<span id="thread_22580"><a href="viewthread.php?tid=22580&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">胡总每日餐费仅15元</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=22580&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=22580&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=144">mfs0616</a>
										</cite>
					<em>2009-9-18</em>
				</td>
				<td class="nums"><strong>58</strong> / <em>1638</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=22580&goto=lastpost#lastpost">2009-9-21 13:20</a></em>
					<cite>by <a href="space.php?username=Archanfel">Archanfel</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_22316" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=22316&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_22316"><a href="viewthread.php?tid=22316&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">17岁女高中生检查痔疮 被肛肠科医生多次强奸</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=22316&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=22316&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5736">外来务工人员</a>
										</cite>
					<em>2009-9-15</em>
				</td>
				<td class="nums"><strong>58</strong> / <em>2425</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=22316&goto=lastpost#lastpost">2009-9-23 16:23</a></em>
					<cite>by <a href="space.php?username=%C6%B7%CE%B6%D6%EC">品味朱</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_24029" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=24029&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_24029"><a href="viewthread.php?tid=24029&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">龙应台谈禁书：准备被大陆读者“万箭穿心”</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=24029&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=24029&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=22">abu</a>
										</cite>
					<em>2009-9-28</em>
				</td>
				<td class="nums"><strong>58</strong> / <em>1614</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=24029&goto=lastpost#lastpost">2009-10-3 09:40</a></em>
					<cite>by <a href="space.php?username=%C1%D9%D6%D5%C9%CF%B5%DB">临终上帝</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_24341" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=24341&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_24341"><a href="viewthread.php?tid=24341&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">成龙想和主席握手未能如愿 博客中含泪</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=24341&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=24341&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5422">围观的群众</a>
										</cite>
					<em>2009-10-3</em>
				</td>
				<td class="nums"><strong>58</strong> / <em>2061</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=24341&goto=lastpost#lastpost">2009-10-12 18:07</a></em>
					<cite>by <a href="space.php?username=raul1943">raul1943</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_24998" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=24998&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_24998"><a href="viewthread.php?tid=24998&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">乌克兰总统呼吁国民清除共产主义污垢</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=24998&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=24998&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1686">奧斯卡金</a>
										</cite>
					<em>2009-10-13</em>
				</td>
				<td class="nums"><strong>58</strong> / <em>1177</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=24998&goto=lastpost#lastpost">2009-10-15 23:12</a></em>
					<cite>by <a href="space.php?username=%B3%E5%B4%FC%C4%CC%B7%DB%B8%F8%B5%B3%BA%C8">冲袋奶粉给党喝</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_24994" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=24994&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_24994"><a href="viewthread.php?tid=24994&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">不顾天朝抗议，印度重申阿鲁纳查省主权</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=24994&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=24994&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6314">hhbcl1414</a>
										</cite>
					<em>2009-10-13</em>
				</td>
				<td class="nums"><strong>58</strong> / <em>751</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=24994&goto=lastpost#lastpost">2009-10-16 21:28</a></em>
					<cite>by <a href="space.php?username=Archanfel">Archanfel</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_26388" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=26388&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_26388"><a href="viewthread.php?tid=26388&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">党国留学生：朝鲜青年的精神风貌比其他国家好五倍</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=26388&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=26388&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3202">glim</a>
										</cite>
					<em>2009-10-27</em>
				</td>
				<td class="nums"><strong>58</strong> / <em>1113</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=26388&goto=lastpost#lastpost">2009-10-29 17:40</a></em>
					<cite>by <a href="space.php?username=%CD%DE%CC%A4%C2%E4">娃踏落</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_12010" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=12010&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_12010"><a href="viewthread.php?tid=12010&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">朝鲜进入战时状态 或对美展开复仇战</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=12010&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=12010&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7">张书记</a>
										</cite>
					<em>2009-5-27</em>
				</td>
				<td class="nums"><strong>58</strong> / <em>1218</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=12010&goto=lastpost#lastpost">2009-6-21 20:59</a></em>
					<cite>by <a href="space.php?username=yekoo">yekoo</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_6923" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=6923&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_6923"><a href="viewthread.php?tid=6923&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">著名学者贺卫方将被发配至新疆</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=6923&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=6923&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1770">nustbobo</a>
										</cite>
					<em>2009-3-10</em>
				</td>
				<td class="nums"><strong>58</strong> / <em>1437</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=6923&goto=lastpost#lastpost">2009-3-13 15:58</a></em>
					<cite>by <a href="space.php?username=%B7%E8%F1%B2%C9%AE">疯癫僧</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_7001" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=7001&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_7001"><a href="viewthread.php?tid=7001&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">影帝：“走不动，就是爬我也愿意去台湾”</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=7001&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=7001&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1121">小荷1120</a>
										</cite>
					<em>2009-3-13</em>
				</td>
				<td class="nums"><strong>58</strong> / <em>1157</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=7001&goto=lastpost#lastpost">2009-3-18 13:37</a></em>
					<cite>by <a href="space.php?username=shzztt1688">shzztt1688</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_7893" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=7893&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_7893"><a href="viewthread.php?tid=7893&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">《艾未未纽约1983-1993》摄影展</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=7893&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=7893&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2232">老杂疫</a>
										</cite>
					<em>2009-3-26</em>
				</td>
				<td class="nums"><strong>58</strong> / <em>1147</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=7893&goto=lastpost#lastpost">2009-4-1 15:35</a></em>
					<cite>by <a href="space.php?username=GGGMAV">GGGMAV</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_8792" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=8792&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_8792"><a href="viewthread.php?tid=8792&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">浙大女：嫁给美国黑人肉体上高潮是真实的，所以嫁给美国黑人是我们自重的结果</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=8792&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=8792&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=778">jezad</a>
										</cite>
					<em>2009-4-10</em>
				</td>
				<td class="nums"><strong>58</strong> / <em>1328</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=8792&goto=lastpost#lastpost">2009-4-14 14:22</a></em>
					<cite>by <a href="space.php?username=glim">glim</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_35077" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=35077&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_35077"><a href="viewthread.php?tid=35077&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">郭敬明：韩寒想“消费”我</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=35077&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=35077&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3723">mason</a>
										</cite>
					<em>2010-1-17</em>
				</td>
				<td class="nums"><strong>58</strong> / <em>2129</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=35077&goto=lastpost#lastpost">2010-1-26 12:35</a></em>
					<cite>by <a href="space.php?username=roleyzhang">roleyzhang</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_36166" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=36166&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_36166"><a href="viewthread.php?tid=36166&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">北大男生下催情药强奸前女友</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=36166&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=36166&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1408">becom</a>
										</cite>
					<em>2010-1-27</em>
				</td>
				<td class="nums"><strong>58</strong> / <em>1997</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=36166&goto=lastpost#lastpost">2010-2-1 21:41</a></em>
					<cite>by <a href="space.php?username=%B0%CB%B9%A6%B5%C2%CB%AE">八功德水</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_37562" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=37562&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_37562"><a href="viewthread.php?tid=37562&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">胡锦涛看望江泽民和李鹏等前中共领导人</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=37562&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=37562&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4638">江湖席</a>
										</cite>
					<em>2010-2-12</em>
				</td>
				<td class="nums"><strong>58</strong> / <em>2490</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=37562&goto=lastpost#lastpost">2010-2-20 16:54</a></em>
					<cite>by <a href="space.php?username=wangguoping">wangguoping</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_12717" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=12717&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_12717"><a href="viewthread.php?tid=12717&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">阿丁：与四一失去联系</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=12717&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=12717&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1149">jorong</a>
										</cite>
					<em>2009-6-4</em>
				</td>
				<td class="nums"><strong>58</strong> / <em>1529</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=12717&goto=lastpost#lastpost">2009-6-5 13:19</a></em>
					<cite>by <a href="space.php?username=qqq">qqq</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_17795" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=17795&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_17795"><a href="viewthread.php?tid=17795&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">CCTV：今年以来全美最大的贪污腐败案</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=17795&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=17795&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=95">反动学术权威</a>
										</cite>
					<em>2009-7-24</em>
				</td>
				<td class="nums"><strong>58</strong> / <em>1306</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=17795&goto=lastpost#lastpost">2009-7-29 22:25</a></em>
					<cite>by <a href="space.php?username=Aexmon">Aexmon</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_18147" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=18147&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_18147"><a href="viewthread.php?tid=18147&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">真理部：网络民意与人民民主专政无关</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=18147&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=18147&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7919">路边社门卫</a>
										</cite>
					<em>2009-7-29</em>
				</td>
				<td class="nums"><strong>58</strong> / <em>1236</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=18147&goto=lastpost#lastpost">2009-7-31 11:17</a></em>
					<cite>by <a href="space.php?username=%B2%BB%BE%B4%C9%F1%B5%C4YODA">不敬神的YODA</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_42465" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=42465&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_42465"><a href="viewthread.php?tid=42465&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">国开行原副行长王益受审 赵薇等两著名女星涉案</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=42465&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=42465&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4570">我卖糕的</a>
										</cite>
					<em>2010-3-30</em>
				</td>
				<td class="nums"><strong>58</strong> / <em>2328</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=42465&goto=lastpost#lastpost">2010-4-7 16:31</a></em>
					<cite>by <a href="space.php?username=%D4%D9%CA%C0%B9%D8%D3%F0">再世关羽</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_42416" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=42416&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_42416"><a href="viewthread.php?tid=42416&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">安庆官员日记描述与500女性有染</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=42416&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=42416&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=10890">xiaohe1120</a>
										</cite>
					<em>2010-4-7</em>
				</td>
				<td class="nums"><strong>58</strong> / <em>1508</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=42416&goto=lastpost#lastpost">2010-4-15 15:53</a></em>
					<cite>by <a href="space.php?username=_LYJ">_LYJ</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_44165" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=44165&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_44165"><a href="viewthread.php?tid=44165&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传，周强任湖南省委书记 李小鹏任湖南省长</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=44165&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=44165&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=12310">炽鸢侯</a>
										</cite>
					<em>2010-4-24</em>
				</td>
				<td class="nums"><strong>58</strong> / <em>2076</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=44165&goto=lastpost#lastpost">2010-4-26 19:51</a></em>
					<cite>by <a href="space.php?username=%C1%D0%C4%FE%D4%DA%CA%AE%D4%C2">列宁在十月</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_44157" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=44157&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_44157"><a href="viewthread.php?tid=44157&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">真理部最新指令：出版物中不出现“Google”“谷歌”以及其相关字样</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=44157&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=44157&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7">张书记</a>
										</cite>
					<em>2010-4-26</em>
				</td>
				<td class="nums"><strong>58</strong> / <em>1591</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=44157&goto=lastpost#lastpost">2010-5-5 15:50</a></em>
					<cite>by <a href="space.php?username=zsfzxxx">zsfzxxx</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_43917" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=43917&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_43917"><a href="viewthread.php?tid=43917&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">李小琳谈创业经历：五个因素非常重要</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=43917&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=43917&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4570">我卖糕的</a>
										</cite>
					<em>2010-4-23</em>
				</td>
				<td class="nums"><strong>58</strong> / <em>1503</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=43917&goto=lastpost#lastpost">2010-5-15 12:22</a></em>
					<cite>by <a href="space.php?username=weke">weke</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_47641" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=47641&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_47641"><a href="viewthread.php?tid=47641&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">重庆将听证”零点断网“</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=47641&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=47641&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=9517">老西</a>
										</cite>
					<em>2010-5-30</em>
				</td>
				<td class="nums"><strong>58</strong> / <em>1597</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=47641&goto=lastpost#lastpost">2010-6-1 10:06</a></em>
					<cite>by <a href="space.php?username=csxiangqian">csxiangqian</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_48583" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=48583&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_48583"><a href="viewthread.php?tid=48583&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">真理部最新指令：各网清理“针对党和国家领导人的有害内容”</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=48583&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=48583&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1563">chaim</a>
										</cite>
					<em>2010-6-8</em>
				</td>
				<td class="nums"><strong>58</strong> / <em>1913</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=48583&goto=lastpost#lastpost">2010-6-10 08:09</a></em>
					<cite>by <a href="space.php?username=monarchmoe">monarchmoe</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_49351" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=49351&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_49351"><a href="viewthread.php?tid=49351&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">朝鲜大学生夸耀自家免费住房 猛批韩国高房价</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=49351&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=49351&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4515">litongling</a>
										</cite>
					<em>2010-6-8</em>
				</td>
				<td class="nums"><strong>58</strong> / <em>1297</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=49351&goto=lastpost#lastpost">2010-6-13 15:27</a></em>
					<cite>by <a href="space.php?username=Diablo">Diablo</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_9722" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=9722&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_9722"><a href="viewthread.php?tid=9722&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">切格瓦拉的头像将要从波兰消失</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=9722&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=9722&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3580">白牛</a>
										</cite>
					<em>2009-4-26</em>
				</td>
				<td class="nums"><strong>58</strong> / <em>1172</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=9722&goto=lastpost#lastpost">2010-6-22 12:43</a></em>
					<cite>by <a href="space.php?username=Crag">Crag</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_53510" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=53510&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_53510"><a href="viewthread.php?tid=53510&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">谷歌并未作出妥协 中国官方“自找台阶”</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=53510&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=53510&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7002">luugoo</a>
										</cite>
					<em>2010-7-21</em>
				</td>
				<td class="nums"><strong>58</strong> / <em>1690</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=53510&goto=lastpost#lastpost">2010-7-24 17:19</a></em>
					<cite>by <a href="space.php?username=halfbogey">halfbogey</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_49140" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=49140&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_49140"><a href="viewthread.php?tid=49140&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">成龙看好巴塞罗那或AC米兰赢得2010世界杯</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=49140&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=49140&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=14291">MozillaTG</a>
										</cite>
					<em>2010-6-11</em>
				</td>
				<td class="nums"><strong>57</strong> / <em>1568</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=49140&goto=lastpost#lastpost">2010-6-13 22:45</a></em>
					<cite>by <a href="space.php?username=%CC%EC%B1%DF%D2%BB%B6%E4%D4%C6">天边一朵云</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_49637" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=49637&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_49637"><a href="viewthread.php?tid=49637&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">温家宝端午假期看望群众</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=49637&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=49637&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2071">上肛上腺</a>
										</cite>
					<em>2010-6-15</em>
				</td>
				<td class="nums"><strong>57</strong> / <em>784</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=49637&goto=lastpost#lastpost">2010-6-16 13:27</a></em>
					<cite>by <a href="space.php?username=%C9%BF%B7%E7%B5%E3%BB%F0">煽风点火</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_51055" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=51055&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_51055"><a href="viewthread.php?tid=51055&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">中共公布最新党员人数 7799.5万名</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=51055&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=51055&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2804">musicool</a>
										</cite>
					<em>2010-6-28</em>
				</td>
				<td class="nums"><strong>57</strong> / <em>1030</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=51055&goto=lastpost#lastpost">2010-6-30 17:54</a></em>
					<cite>by <a href="space.php?username=VIGROV007">VIGROV007</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_51809" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=51809&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_51809"><a href="viewthread.php?tid=51809&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">华东理工大学因宿舍午夜拉闸限电引发骚乱</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=51809&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=51809&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=10927">等到那一天</a>
										</cite>
					<em>2010-7-5</em>
				</td>
				<td class="nums"><strong>57</strong> / <em>1815</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=51809&goto=lastpost#lastpost">2010-7-7 18:02</a></em>
					<cite>by <a href="space.php?username=p0mz666">p0mz666</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_53973" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=53973&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_53973"><a href="viewthread.php?tid=53973&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">《人民日报》连续发文狠批新版《红楼梦》</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=53973&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=53973&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=13071">mop</a>
										</cite>
					<em>2010-7-26</em>
				</td>
				<td class="nums"><strong>57</strong> / <em>1702</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=53973&goto=lastpost#lastpost">2010-7-28 00:56</a></em>
					<cite>by <a href="space.php?username=%C8%CB%CE%BD%CE%D2%BF%F1">人谓我狂</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_33772" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=33772&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_33772"><a href="viewthread.php?tid=33772&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">储君用周小姐手机向百万名书记发短信</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=33772&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=33772&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5902">洛烨</a>
										</cite>
					<em>2010-1-6</em>
				</td>
				<td class="nums"><strong>57</strong> / <em>1829</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=33772&goto=lastpost#lastpost">2010-1-7 15:07</a></em>
					<cite>by <a href="space.php?username=%B4%BA%B7%E7%C2%A5%D6%F7">春风楼主</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_35246" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=35246&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_35246"><a href="viewthread.php?tid=35246&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">重庆政协委员：生娃要先测试道德伦理，不合格者缓发准生证</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=35246&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=35246&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1770">nustbobo</a>
										</cite>
					<em>2010-1-19</em>
				</td>
				<td class="nums"><strong>57</strong> / <em>1025</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=35246&goto=lastpost#lastpost">2010-1-22 12:38</a></em>
					<cite>by <a href="space.php?username=george">george</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_35250" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=35250&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_35250"><a href="viewthread.php?tid=35250&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">《当中国统治世界》中文版上市</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=35250&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=35250&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7">张书记</a>
										</cite>
					<em>2010-1-19</em>
				</td>
				<td class="nums"><strong>57</strong> / <em>1182</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=35250&goto=lastpost#lastpost">2010-1-24 02:31</a></em>
					<cite>by <a href="space.php?username=Leonhardt">Leonhardt</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_37261" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=37261&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_37261"><a href="viewthread.php?tid=37261&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">质检总局等单位：360产品没开“后门”</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=37261&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=37261&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8644">蛋美</a>
										</cite>
					<em>2010-2-8</em>
				</td>
				<td class="nums"><strong>57</strong> / <em>1110</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=37261&goto=lastpost#lastpost">2010-2-22 11:32</a></em>
					<cite>by <a href="space.php?username=qingzhan">qingzhan</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_38571" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=38571&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_38571"><a href="viewthread.php?tid=38571&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">甘肃兰州军区司令部大院军人互射致两人死</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=38571&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=38571&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7">张书记</a>
										</cite>
					<em>2010-2-26</em>
				</td>
				<td class="nums"><strong>57</strong> / <em>2866</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=38571&goto=lastpost#lastpost">2010-3-1 14:57</a></em>
					<cite>by <a href="space.php?username=%CF%F4%D5%F1%D2%C2">萧振衣</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_22370" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=22370&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_22370"><a href="viewthread.php?tid=22370&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">群众自发的积极参与《我爱我的祖国》吟诗活动</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=22370&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=22370&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3202">glim</a>
										</cite>
					<em>2009-9-16</em>
				</td>
				<td class="nums"><strong>57</strong> / <em>1496</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=22370&goto=lastpost#lastpost">2009-9-17 16:58</a></em>
					<cite>by <a href="space.php?username=aassaa">aassaa</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_22464" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=22464&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_22464"><a href="viewthread.php?tid=22464&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">影帝国庆献礼大片上映 激情搏出位</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=22464&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=22464&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2202">ccjing123</a>
										</cite>
					<em>2009-9-17</em>
				</td>
				<td class="nums"><strong>57</strong> / <em>1292</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=22464&goto=lastpost#lastpost">2009-9-19 13:37</a></em>
					<cite>by <a href="space.php?username=%CA%F7%C9%CF%B4%BA%B4%E5">树上春村</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_25568" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=25568&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_25568"><a href="viewthread.php?tid=25568&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">影帝来咱家偷菜了</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=25568&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=25568&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2578">闹了个运</a>
										</cite>
					<em>2009-10-19</em>
				</td>
				<td class="nums"><strong>57</strong> / <em>1406</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=25568&goto=lastpost#lastpost">2009-10-20 03:20</a></em>
					<cite>by <a href="space.php?username=xiahua">xiahua</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_25792" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=25792&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_25792"><a href="viewthread.php?tid=25792&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">法大弑师学生被判死缓</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=25792&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=25792&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2907">无言的山丘</a>
										</cite>
					<em>2009-10-21</em>
				</td>
				<td class="nums"><strong>57</strong> / <em>776</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=25792&goto=lastpost#lastpost">2009-10-25 10:08</a></em>
					<cite>by <a href="space.php?username=%E1%C0%C9%BD%D1%FD%B5%C0">崂山妖道</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_25816" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=25816&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_25816"><a href="viewthread.php?tid=25816&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">RSF：2009全球新闻自由排名出炉 中国倒数第八</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=25816&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=25816&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6314">hhbcl1414</a>
										</cite>
					<em>2009-10-20</em>
				</td>
				<td class="nums"><strong>57</strong> / <em>1518</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=25816&goto=lastpost#lastpost">2009-10-26 14:11</a></em>
					<cite>by <a href="space.php?username=xiaolizi">xiaolizi</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_53874" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=53874&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_53874"><a href="viewthread.php?tid=53874&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">国企工人在车间挥刀自杀 生前工资存折仅剩4角</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=53874&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=53874&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2197">人民群众</a>
										</cite>
					<em>2010-7-25</em>
				</td>
				<td class="nums"><strong>57</strong> / <em>1381</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=53874&goto=lastpost#lastpost">2010-8-22 12:24</a></em>
					<cite>by <a href="space.php?username=37927">37927</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_58335" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=58335&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_58335"><a href="viewthread.php?tid=58335&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">官媒建直通中南海留言板 网民可直接给中央领导留言</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=58335&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=58335&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4570">我卖糕的</a>
										</cite>
					<em>2010-9-12</em>
				</td>
				<td class="nums"><strong>57</strong> / <em>1177</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=58335&goto=lastpost#lastpost">2010-9-15 14:20</a></em>
					<cite>by <a href="space.php?username=%CF%F4%D2%D7%BA%AE">萧易寒</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_27496" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=27496&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_27496"><a href="viewthread.php?tid=27496&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">长江以北的江苏开始焚烧秸秆</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=27496&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=27496&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7292">MARS0079</a>
										</cite>
					<em>2009-10-29</em>
				</td>
				<td class="nums"><strong>57</strong> / <em>1754</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=27496&goto=lastpost#lastpost">2009-11-9 10:57</a></em>
					<cite>by <a href="space.php?username=%CE%C4%D2%BB%B4%E9">文一撮</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_28537" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=28537&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_28537"><a href="viewthread.php?tid=28537&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">奥巴马给《南方周末》的信</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=28537&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=28537&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5309">rushwizard</a>
										</cite>
					<em>2009-11-20</em>
				</td>
				<td class="nums"><strong>57</strong> / <em>2378</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=28537&goto=lastpost#lastpost">2009-11-21 19:22</a></em>
					<cite>by <a href="space.php?username=%B2%CA%BA%E7%BF%A7%B7%C8%B9%DD">彩虹咖啡馆</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_30022" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=30022&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_30022"><a href="viewthread.php?tid=30022&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">本期《南方周末》一文或是侯德健撰写</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=30022&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=30022&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6415">coffee2046</a>
										</cite>
					<em>2009-12-5</em>
				</td>
				<td class="nums"><strong>57</strong> / <em>2514</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=30022&goto=lastpost#lastpost">2009-12-14 16:45</a></em>
					<cite>by <a href="space.php?username=%D0%C4%C1%E9%CC%EC%BF%D5">心灵天空</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_30666" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=30666&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_30666"><a href="viewthread.php?tid=30666&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">发现人类基因组新成员   华南理工大学本科生论文亮相《自然》</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=30666&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=30666&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=852">未来他老爸</a>
										</cite>
					<em>2009-12-10</em>
				</td>
				<td class="nums"><strong>57</strong> / <em>1247</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=30666&goto=lastpost#lastpost">2009-12-15 14:53</a></em>
					<cite>by <a href="space.php?username=%CE%F7%C3%C5%B4%B5%C5%A3">西门吹牛</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_30256" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=30256&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_30256"><a href="viewthread.php?tid=30256&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">余秋雨《钟山碑文》被指作呕</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=30256&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=30256&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7919">路边社门卫</a>
										</cite>
					<em>2009-12-8</em>
				</td>
				<td class="nums"><strong>57</strong> / <em>1520</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=30256&goto=lastpost#lastpost">2009-12-15 22:08</a></em>
					<cite>by <a href="space.php?username=%BA%C3%CF%EB%BB%D8%BC%D2">好想回家</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_30050" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=30050&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_30050"><a href="viewthread.php?tid=30050&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">醉酒大学生被人将遥控器插进菊花</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=30050&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=30050&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1310">小宸宸</a>
										</cite>
					<em>2009-12-5</em>
				</td>
				<td class="nums"><strong>57</strong> / <em>2101</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=30050&goto=lastpost#lastpost">2009-12-16 19:55</a></em>
					<cite>by <a href="space.php?username=%B9%E2%C3%F7%B5%C4%B8%F1%C0%EF%B8%DF%C0%FB">光明的格里高利</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_32195" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=32195&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_32195"><a href="viewthread.php?tid=32195&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">云南真理部副部长伍皓：最看不惯那些汉奸、脑残</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=32195&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=32195&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3227">快乐流浪汉</a>
										</cite>
					<em>2009-12-23</em>
				</td>
				<td class="nums"><strong>57</strong> / <em>1899</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=32195&goto=lastpost#lastpost">2009-12-28 20:00</a></em>
					<cite>by <a href="space.php?username=%B9%E2%C3%F7%B5%C4%B8%F1%C0%EF%B8%DF%C0%FB">光明的格里高利</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_6725" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=6725&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_6725"><a href="viewthread.php?tid=6725&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">六十年民主活样板“代表要听党的话，不要投反对票”</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=6725&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=6725&amp;extra=page%3D18%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=971">sus</a>
										</cite>
					<em>2009-3-10</em>
				</td>
				<td class="nums"><strong>57</strong> / <em>1241</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=6725&goto=lastpost#lastpost">2009-3-12 10:49</a></em>
					<cite>by <a href="space.php?username=elzzird">elzzird</a></cite>
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
	<div class="pages"><em>&nbsp;22278&nbsp;</em><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=1" class="first">1 ...</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=17" class="prev">&lsaquo;&lsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=16">16</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=17">17</a><strong>18</strong><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=19">19</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=20">20</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=21">21</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=22">22</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=23">23</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=24">24</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=25">25</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=19" class="next">&rsaquo;&rsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=349" class="last">... 349</a><kbd><input type="text" name="custompage" size="3" onkeydown="if(event.keyCode==13) {window.location='forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page='+this.value; return false;}" /></kbd></div>	</div>

  
	<div class="box">
			<span class="headactions"><a href="forumdisplay.php?fid=2&amp;page=18&amp;showoldetails=yes#online" class="nobdr"><img src="images/default/collapsed_yes.gif" alt="" /></a></span>
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
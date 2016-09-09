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
			window.location = 'forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&page=13';
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
<div class="pages"><em>&nbsp;22278&nbsp;</em><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=1" class="first">1 ...</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=13" class="prev">&lsaquo;&lsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=12">12</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=13">13</a><strong>14</strong><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=15">15</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=16">16</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=17">17</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=18">18</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=19">19</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=20">20</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=21">21</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=15" class="next">&rsaquo;&rsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=349" class="last">... 349</a><kbd><input type="text" name="custompage" size="3" onkeydown="if(event.keyCode==13) {window.location='forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page='+this.value; return false;}" /></kbd></div></div>

<div style="float:left;border:1px solid #CCC; border-bottom:none;;width:218px; background: url(/imgs/1984radio.jpg) 200px 2px no-repeat;padding:5px 0 5px 12px;margin:0px 0 0 13px">

<p><b><a href="/radio/index.php" target="_blank">1984FM</a></b><br /><b><a href="https://voxli.com/1984bbs" target="_blank">1984Chat</a></b>&nbsp;</p> 
</div>

<div style="clear:both;height:0px;width:100%;font-size:1px;">&nbsp;</div>

	<ul class="popupmenu_popup newspecialmenu" id="newspecial_menu" style="display: none">
		<li><a href="post.php?action=newthread&amp;fid=2&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">发新话题</a></li>		<li class="poll"><a href="post.php?action=newthread&amp;fid=2&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;special=1">发布投票</a></li>													</ul>
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

					<tbody id="normalthread_34021" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=34021&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_34021"><a href="viewthread.php?tid=34021&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">男子手机里面有段AV片 刚下火车被拘5天罚200元</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=34021&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=34021&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6388">黄胖子</a>
										</cite>
					<em>2010-1-8</em>
				</td>
				<td class="nums"><strong>67</strong> / <em>1479</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=34021&goto=lastpost#lastpost">2010-1-11 19:27</a></em>
					<cite>by <a href="space.php?username=singlefabulous">singlefabulous</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_36509" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=36509&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_36509"><a href="viewthread.php?tid=36509&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">美国公布对台湾军售方案</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=36509&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=36509&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=11024">arewhoarewho</a>
										</cite>
					<em>2010-1-30</em>
				</td>
				<td class="nums"><strong>67</strong> / <em>1646</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=36509&goto=lastpost#lastpost">2010-2-1 02:27</a></em>
					<cite>by <a href="space.php?username=%C1%FA%B7%C9">龙飞</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_56789" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=56789&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_56789"><a href="viewthread.php?tid=56789&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传浙江大学学生军训打靶打死一名教官</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=56789&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=56789&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=10862">冥河纤夫</a>
										</cite>
					<em>2010-8-29</em>
				</td>
				<td class="nums"><strong>67</strong> / <em>2329</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=56789&goto=lastpost#lastpost">2010-9-1 00:26</a></em>
					<cite>by <a href="space.php?username=%CB%C0%CB%AE%C4%EA%BB%AA">死水年华</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_58054" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=58054&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_58054"><a href="viewthread.php?tid=58054&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">河南商城多人被毒虫咬死 当地为维稳未公布疫情</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=58054&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=58054&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4570">我卖糕的</a>
										</cite>
					<em>2010-9-8</em>
				</td>
				<td class="nums"><strong>67</strong> / <em>1543</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=58054&goto=lastpost#lastpost">2010-9-11 17:23</a></em>
					<cite>by <a href="space.php?username=%CE%DE%C3%FB%D6%B8">无名指</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_50308" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=50308&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_50308"><a href="viewthread.php?tid=50308&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">北大教授孔庆东批将朝鲜足球与政治挂钩</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=50308&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=50308&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2028">猪肘</a>
										</cite>
					<em>2010-6-21</em>
				</td>
				<td class="nums"><strong>67</strong> / <em>1699</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=50308&goto=lastpost#lastpost">2010-6-25 10:38</a></em>
					<cite>by <a href="space.php?username=mrteu">mrteu</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_52111" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=52111&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_52111"><a href="viewthread.php?tid=52111&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">社科院：互联网或成为国家政权潜在威胁</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=52111&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=52111&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2564">老卡</a>
										</cite>
					<em>2010-7-8</em>
				</td>
				<td class="nums"><strong>67</strong> / <em>1362</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=52111&goto=lastpost#lastpost">2010-7-10 11:32</a></em>
					<cite>by <a href="space.php?username=%B6%B3%BD%E1%B5%C4%C0%E8%C3%F7">冻结的黎明</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_54129" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=54129&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_54129"><a href="viewthread.php?tid=54129&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">韩美西海军演激怒中国 军部媒体强烈抗议</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=54129&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=54129&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=144">mfs0616</a>
										</cite>
					<em>2010-7-7</em>
				</td>
				<td class="nums"><strong>67</strong> / <em>1483</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=54129&goto=lastpost#lastpost">2010-7-30 13:28</a></em>
					<cite>by <a href="space.php?username=%B3%A4%C4%EA%B7%A2%D1%D7">长年发炎</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_7454" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=7454&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_7454"><a href="viewthread.php?tid=7454&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">法国摄影师埃里克镜头里的朝鲜</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=7454&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=7454&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2232">老杂疫</a>
										</cite>
					<em>2009-3-20</em>
				</td>
				<td class="nums"><strong>67</strong> / <em>1915</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=7454&goto=lastpost#lastpost">2009-3-24 14:13</a></em>
					<cite>by <a href="space.php?username=Candice">Candice</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_7681" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=7681&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_7681"><a href="viewthread.php?tid=7681&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">母女穿和服在武汉大学樱园拍照遭十余人轰赶</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=7681&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=7681&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4817">firedragoon</a>
										</cite>
					<em>2009-3-22</em>
				</td>
				<td class="nums"><strong>67</strong> / <em>1283</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=7681&goto=lastpost#lastpost">2009-3-26 11:30</a></em>
					<cite>by <a href="space.php?username=%CE%ED%B7%E7">雾风</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_17735" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=17735&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_17735"><a href="viewthread.php?tid=17735&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">易中天，校长喊你回学校吃饭！</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=17735&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=17735&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4359">实验小白鼠B</a>
										</cite>
					<em>2009-7-24</em>
				</td>
				<td class="nums"><strong>67</strong> / <em>1245</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=17735&goto=lastpost#lastpost">2009-7-27 17:07</a></em>
					<cite>by <a href="space.php?username=cardigans">cardigans</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_20031" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=20031&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_20031"><a href="viewthread.php?tid=20031&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">影帝夫人工作资料流出</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=20031&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=20031&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4570">我卖糕的</a>
										</cite>
					<em>2009-7-30</em>
				</td>
				<td class="nums"><strong>66</strong> / <em>2793</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=20031&goto=lastpost#lastpost">2009-8-21 18:04</a></em>
					<cite>by <a href="space.php?username=%C6%D3%B1%A7%D2%BB">朴抱一</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_35993" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=35993&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_35993"><a href="viewthread.php?tid=35993&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">刘谦跪拜“天皇”喊冤 激怒爱国青年</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=35993&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=35993&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2578">闹了个运</a>
										</cite>
					<em>2010-1-26</em>
				</td>
				<td class="nums"><strong>66</strong> / <em>1825</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=35993&goto=lastpost#lastpost">2010-1-30 10:55</a></em>
					<cite>by <a href="space.php?username=%C1%FA%C2%ED%B1%BC%D7%DF">龙马奔走</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_40436" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=40436&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_40436"><a href="viewthread.php?tid=40436&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">因“内容激进”当局关停“毛泽东时代网”</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=40436&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=40436&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=10890">xiaohe1120</a>
										</cite>
					<em>2010-3-16</em>
				</td>
				<td class="nums"><strong>66</strong> / <em>1960</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=40436&goto=lastpost#lastpost">2010-3-22 11:54</a></em>
					<cite>by <a href="space.php?username=tonya">tonya</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_44151" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=44151&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_44151"><a href="viewthread.php?tid=44151&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">林昭雕像在京落成并向公众开放</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=44151&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=44151&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=13149">dier</a>
										</cite>
					<em>2010-4-26</em>
				</td>
				<td class="nums"><strong>66</strong> / <em>2101</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=44151&goto=lastpost#lastpost">2010-4-29 19:55</a></em>
					<cite>by <a href="space.php?username=dier">dier</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_45747" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=45747&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_45747"><a href="viewthread.php?tid=45747&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">影帝称袭儿童事件应先解决深层原因</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=45747&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=45747&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4570">我卖糕的</a>
										</cite>
					<em>2010-5-13</em>
				</td>
				<td class="nums"><strong>66</strong> / <em>1507</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=45747&goto=lastpost#lastpost">2010-5-16 23:26</a></em>
					<cite>by <a href="space.php?username=%C7%D5%D8%B7">钦胤</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_46379" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=46379&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_46379"><a href="viewthread.php?tid=46379&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">青海卫视特约评论员：韩寒是条很有内涵的疯狗</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=46379&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=46379&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5464">上海帅哥</a>
										</cite>
					<em>2010-5-19</em>
				</td>
				<td class="nums"><strong>66</strong> / <em>2087</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=46379&goto=lastpost#lastpost">2010-5-21 06:14</a></em>
					<cite>by <a href="space.php?username=chengp001">chengp001</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_6067" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=6067&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_6067"><a href="viewthread.php?tid=6067&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">厦门藏家蔡铭超：不会为已经拍得的鼠兔首付款</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=6067&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=6067&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2564">老卡</a>
										</cite>
					<em>2009-3-2</em>
				</td>
				<td class="nums"><strong>66</strong> / <em>1015</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=6067&goto=lastpost#lastpost">2009-3-3 14:18</a></em>
					<cite>by <a href="space.php?username=atpatp">atpatp</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_28519" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=28519&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_28519"><a href="viewthread.php?tid=28519&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">胡总书记上中学时曾经坐过的课桌</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=28519&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=28519&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1408">becom</a>
										</cite>
					<em>2009-11-19</em>
				</td>
				<td class="nums"><strong>66</strong> / <em>1642</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=28519&goto=lastpost#lastpost">2009-11-21 23:30</a></em>
					<cite>by <a href="space.php?username=%B0%A2%C5%A3">阿牛</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_31347" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=31347&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_31347"><a href="viewthread.php?tid=31347&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">昆明疑犯派出所“自缢”  警方称其用纸币捅开手铐</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=31347&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=31347&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3432">lynnstar</a>
										</cite>
					<em>2009-12-16</em>
				</td>
				<td class="nums"><strong>66</strong> / <em>1119</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=31347&goto=lastpost#lastpost">2009-12-19 13:01</a></em>
					<cite>by <a href="space.php?username=%D0%A1%E5%B7%E5%B7">小宸宸</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_31278" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=31278&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_31278"><a href="viewthread.php?tid=31278&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">丁子霖老师关于刘晓波被审判的号召</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=31278&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=31278&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=10761">sea198964</a>
										</cite>
					<em>2009-12-16</em>
				</td>
				<td class="nums"><strong>66</strong> / <em>1505</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=31278&goto=lastpost#lastpost">2009-12-23 09:31</a></em>
					<cite>by <a href="space.php?username=wobuwuliaoa">wobuwuliaoa</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_21997" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=21997&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_21997"><a href="viewthread.php?tid=21997&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">今天911哀悼日</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=21997&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=21997&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2315">写实</a>
										</cite>
					<em>2009-9-11</em>
				</td>
				<td class="nums"><strong>66</strong> / <em>717</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=21997&goto=lastpost#lastpost">2009-9-15 11:36</a></em>
					<cite>by <a href="space.php?username=shell.x">shell.x</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_24959" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=24959&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_24959"><a href="viewthread.php?tid=24959&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">太上皇墨宝再现江湖</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=24959&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=24959&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3202">glim</a>
										</cite>
					<em>2009-10-13</em>
				</td>
				<td class="nums"><strong>66</strong> / <em>1565</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=24959&goto=lastpost#lastpost">2009-10-15 16:00</a></em>
					<cite>by <a href="space.php?username=%C8%A1%B8%F6%C3%FB%D7%D6%BA%C3%BC%C7%B5%C4">取个名字好记的</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_25669" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=25669&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_25669"><a href="viewthread.php?tid=25669&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">明天就是一个残忍的大阴谋</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=25669&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=25669&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2472">Noel</a>
										</cite>
					<em>2009-10-19</em>
				</td>
				<td class="nums"><strong>66</strong> / <em>2964</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=25669&goto=lastpost#lastpost">2009-10-26 19:21</a></em>
					<cite>by <a href="space.php?username=%CD%CA%C9%ABFADEAWAY">褪色FADEAWAY</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_59257" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=59257&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_59257"><a href="viewthread.php?tid=59257&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传钓鱼岛被扣渔船系中国伪装间谍船</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=59257&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=59257&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=17435">@k2</a>
										</cite>
					<em>2010-9-24</em>
				</td>
				<td class="nums"><strong>66</strong> / <em>1612</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=59257&goto=lastpost#lastpost">2010-9-26 11:38</a></em>
					<cite>by <a href="space.php?username=liveup">liveup</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_60738" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=60738&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_60738"><a href="viewthread.php?tid=60738&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">部分中国产香烟含铅砷等大量重金属</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=60738&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=60738&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6914">bilei911</a>
										</cite>
					<em>2010-10-8</em>
				</td>
				<td class="nums"><strong>66</strong> / <em>1168</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=60738&goto=lastpost#lastpost">2010-10-11 14:58</a></em>
					<cite>by <a href="space.php?username=%CF%F4%D2%A2%C3%A8">萧尧猫</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_9534" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=9534&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_9534"><a href="viewthread.php?tid=9534&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">央视巨乳熟女版《江姐》开机</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=9534&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=9534&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1408">becom</a>
										</cite>
					<em>2009-4-22</em>
				</td>
				<td class="nums"><strong>66</strong> / <em>1937</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=9534&goto=lastpost#lastpost">2009-4-27 11:28</a></em>
					<cite>by <a href="space.php?username=%B2%BB%D4%D9%BA%DE%CB%AE%B3%A4%B6%AB">不再恨水长东</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_47644" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=47644&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_47644"><a href="viewthread.php?tid=47644&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">温家宝首尔江边晨练 称喜欢韩国饮食</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=47644&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=47644&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3202">glim</a>
										</cite>
					<em>2010-5-29</em>
				</td>
				<td class="nums"><strong>66</strong> / <em>1704</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=47644&goto=lastpost#lastpost">2010-6-1 08:39</a></em>
					<cite>by <a href="space.php?username=%C3%C0%D1%BF">美芽</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_48734" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=48734&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_48734"><a href="viewthread.php?tid=48734&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">英外交官：三峡大坝面临严峻问题</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=48734&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=48734&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5063">deidei</a>
										</cite>
					<em>2010-6-9</em>
				</td>
				<td class="nums"><strong>66</strong> / <em>2188</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=48734&goto=lastpost#lastpost">2010-6-16 13:06</a></em>
					<cite>by <a href="space.php?username=%CC%D8%C7%E9%C8%CB%D4%B1">特情人员</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_49730" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=49730&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_49730"><a href="viewthread.php?tid=49730&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">意大利总理女儿：还好中国有共产党执政</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=49730&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=49730&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5494">肉の包包</a>
										</cite>
					<em>2010-6-11</em>
				</td>
				<td class="nums"><strong>66</strong> / <em>2280</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=49730&goto=lastpost#lastpost">2010-6-17 19:50</a></em>
					<cite>by <a href="space.php?username=hoshienchun">hoshienchun</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_50130" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=50130&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_50130"><a href="viewthread.php?tid=50130&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">法国万名华人游行 当地政府表示支持</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=50130&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=50130&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=9737">剁辣椒</a>
										</cite>
					<em>2010-6-20</em>
				</td>
				<td class="nums"><strong>66</strong> / <em>957</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=50130&goto=lastpost#lastpost">2010-6-23 05:54</a></em>
					<cite>by <a href="space.php?username=%B4%F3%D0l%CD%F5%EF%88%B5%EA">大衛王飯店</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_51740" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=51740&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_51740"><a href="viewthread.php?tid=51740&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">《重庆晨报》一记者因使用QQ“讨论不当内容”被处劳教</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=51740&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=51740&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=9737">剁辣椒</a>
										</cite>
					<em>2010-6-24</em>
				</td>
				<td class="nums"><strong>66</strong> / <em>2173</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=51740&goto=lastpost#lastpost">2010-7-5 11:26</a></em>
					<cite>by <a href="space.php?username=%D2%BB%B5%E3%CE%E5">一点五</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_49773" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=49773&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_49773"><a href="viewthread.php?tid=49773&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">《非诚勿扰》已停录   主持嘉宾齐请辞</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=49773&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=49773&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=9737">剁辣椒</a>
										</cite>
					<em>2010-6-17</em>
				</td>
				<td class="nums"><strong>65</strong> / <em>1754</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=49773&goto=lastpost#lastpost">2010-6-18 19:37</a></em>
					<cite>by <a href="space.php?username=sunglowxu">sunglowxu</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_49814" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=49814&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_49814"><a href="viewthread.php?tid=49814&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">重庆女子交巡警驾沃尔沃上路引关注</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=49814&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=49814&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2804">musicool</a>
										</cite>
					<em>2010-6-17</em>
				</td>
				<td class="nums"><strong>65</strong> / <em>910</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=49814&goto=lastpost#lastpost">2010-6-18 21:09</a></em>
					<cite>by <a href="space.php?username=lonelyword">lonelyword</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_50286" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=50286&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_50286"><a href="viewthread.php?tid=50286&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">央行将推“超级网银” 支付宝或被禁接入网银系统</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=50286&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=50286&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5095">NERV</a>
										</cite>
					<em>2010-4-2</em>
				</td>
				<td class="nums"><strong>65</strong> / <em>1698</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=50286&goto=lastpost#lastpost">2010-6-22 15:24</a></em>
					<cite>by <a href="space.php?username=much">much</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_50496" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=50496&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_50496"><a href="viewthread.php?tid=50496&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">粤慈善明星逼女学生为其口交</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=50496&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=50496&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6725">康宁</a>
										</cite>
					<em>2010-6-23</em>
				</td>
				<td class="nums"><strong>65</strong> / <em>3584</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=50496&goto=lastpost#lastpost">2010-7-1 14:08</a></em>
					<cite>by <a href="space.php?username=%B7%E7%C0%B4%CA%E8%D6%F1">风来疏竹</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_27486" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=27486&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_27486"><a href="viewthread.php?tid=27486&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">达赖在日本宣称藏南是印度领土</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=27486&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=27486&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2442">ksi</a>
										</cite>
					<em>2009-11-3</em>
				</td>
				<td class="nums"><strong>65</strong> / <em>1095</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=27486&goto=lastpost#lastpost">2009-11-9 11:11</a></em>
					<cite>by <a href="space.php?username=%C0%D7%C2%FC%D0%D6%B5%DC">雷曼兄弟</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_42726" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=42726&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_42726"><a href="viewthread.php?tid=42726&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">湖南郴州皇家钱柜KTV保安挑断顾客手筋</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=42726&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=42726&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=10890">xiaohe1120</a>
										</cite>
					<em>2010-4-7</em>
				</td>
				<td class="nums"><strong>65</strong> / <em>1597</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=42726&goto=lastpost#lastpost">2010-4-12 22:26</a></em>
					<cite>by <a href="space.php?username=hannfonn">hannfonn</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_43711" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=43711&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_43711"><a href="viewthread.php?tid=43711&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">萨马兰奇病逝</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=43711&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=43711&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4705">dreamingly</a>
										</cite>
					<em>2010-4-21</em>
				</td>
				<td class="nums"><strong>65</strong> / <em>1402</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=43711&goto=lastpost#lastpost">2010-4-22 13:53</a></em>
					<cite>by <a href="space.php?username=jason_jiang">jason_jiang</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_44544" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=44544&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_44544"><a href="viewthread.php?tid=44544&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">上海世博会开幕式烟花表演出现“胡哥好”标语</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=44544&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=44544&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1421">vimalakirti</a>
										</cite>
					<em>2010-5-1</em>
				</td>
				<td class="nums"><strong>65</strong> / <em>2468</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=44544&goto=lastpost#lastpost">2010-5-4 18:06</a></em>
					<cite>by <a href="space.php?username=%C1%F2%BB%AF%CD%AD">硫化铜</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_46466" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=46466&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_46466"><a href="viewthread.php?tid=46466&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">月光博客被党媒指涉嫌泄露军事机密</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=46466&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=46466&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2973">free1989</a>
										</cite>
					<em>2010-5-17</em>
				</td>
				<td class="nums"><strong>65</strong> / <em>2175</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=46466&goto=lastpost#lastpost">2010-5-20 14:25</a></em>
					<cite>by <a href="space.php?username=%CE%D2%C2%F4%B8%E2%B5%C4">我卖糕的</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_37214" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=37214&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_37214"><a href="viewthread.php?tid=37214&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">《第十放映室》因犀利遭禁播</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=37214&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=37214&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1408">becom</a>
										</cite>
					<em>2010-2-8</em>
				</td>
				<td class="nums"><strong>65</strong> / <em>2351</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=37214&goto=lastpost#lastpost">2010-2-11 13:36</a></em>
					<cite>by <a href="space.php?username=%C5%B4%C3%D7%B9%FB%D7%D3">糯米果子</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_38135" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=38135&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_38135"><a href="viewthread.php?tid=38135&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">针对谷歌的网络袭击源头追溯至中国军方背景学校</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=38135&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=38135&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3308">天衢居士</a>
										</cite>
					<em>2010-2-19</em>
				</td>
				<td class="nums"><strong>65</strong> / <em>2191</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=38135&goto=lastpost#lastpost">2010-2-21 07:41</a></em>
					<cite>by <a href="space.php?username=singlefabulous">singlefabulous</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_15991" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=15991&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_15991"><a href="viewthread.php?tid=15991&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">网友高呼：犯我中华威严者，杀无赦！</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=15991&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=15991&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1429">朝南生</a>
										</cite>
					<em>2009-7-6</em>
				</td>
				<td class="nums"><strong>65</strong> / <em>1400</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=15991&goto=lastpost#lastpost">2009-7-9 22:20</a></em>
					<cite>by <a href="space.php?username=%D0%A1%B5%BA%D0%A1%CF%AA">小岛小溪</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_11884" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=11884&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_11884"><a href="viewthread.php?tid=11884&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">凤凰论坛好文一枚：回国后才知道美国究竟畏惧中国什么？</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=11884&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=11884&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=95">反动学术权威</a>
										</cite>
					<em>2009-5-26</em>
				</td>
				<td class="nums"><strong>65</strong> / <em>1503</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=11884&goto=lastpost#lastpost">2009-5-29 15:38</a></em>
					<cite>by <a href="space.php?username=linekerca">linekerca</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_22091" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=22091&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_22091"><a href="viewthread.php?tid=22091&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">我跟总理坐同桌</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=22091&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=22091&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3202">glim</a>
										</cite>
					<em>2009-9-13</em>
				</td>
				<td class="nums"><strong>65</strong> / <em>1381</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=22091&goto=lastpost#lastpost">2009-9-15 22:50</a></em>
					<cite>by <a href="space.php?username=charmrain">charmrain</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_24102" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=24102&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_24102"><a href="viewthread.php?tid=24102&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">清华学生组成“毛思想万岁方阵”</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=24102&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=24102&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7002">luugoo</a>
										</cite>
					<em>2009-9-29</em>
				</td>
				<td class="nums"><strong>65</strong> / <em>1602</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=24102&goto=lastpost#lastpost">2009-10-3 17:26</a></em>
					<cite>by <a href="space.php?username=%B0%AE%B3%D4%C3%A2%B9%FB">爱吃芒果</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_25929" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=25929&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_25929"><a href="viewthread.php?tid=25929&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">浙大海归博士回国即坠楼 校方讣告称为其提供了微波炉</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=25929&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=25929&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7211">foxtaugh</a>
										</cite>
					<em>2009-10-22</em>
				</td>
				<td class="nums"><strong>65</strong> / <em>1556</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=25929&goto=lastpost#lastpost">2009-10-25 16:42</a></em>
					<cite>by <a href="space.php?username=Archanfel">Archanfel</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_56332" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=56332&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_56332"><a href="viewthread.php?tid=56332&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">天津万人签名抵制中元节烧纸 宣扬文明祭奠方式</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=56332&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=56332&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3202">glim</a>
										</cite>
					<em>2010-8-24</em>
				</td>
				<td class="nums"><strong>65</strong> / <em>766</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=56332&goto=lastpost#lastpost">2010-8-25 22:48</a></em>
					<cite>by <a href="space.php?username=%C2%B7%B1%DF%C9%E7%CC%D8%D4%BC%BC%C7%D5%DF">路边社特约记者</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_58298" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=58298&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_58298"><a href="viewthread.php?tid=58298&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">德云社重开张 郭德纲替于谦发毒誓不退社</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=58298&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=58298&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6001">金陵布衣</a>
										</cite>
					<em>2010-9-13</em>
				</td>
				<td class="nums"><strong>65</strong> / <em>1877</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=58298&goto=lastpost#lastpost">2010-9-28 16:00</a></em>
					<cite>by <a href="space.php?username=Yhard">Yhard</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_57411" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=57411&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_57411"><a href="viewthread.php?tid=57411&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">一周图片新闻 8.30-9.5</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=57411&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=57411&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2232">老杂疫</a>
										</cite>
					<em>2010-9-4</em>
				</td>
				<td class="nums"><strong>64</strong> / <em>1455</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=57411&goto=lastpost#lastpost">2010-9-9 10:41</a></em>
					<cite>by <a href="space.php?username=%CC%F0%D0%C4%B4%CC%E2%AC">甜心刺猬</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_33268" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=33268&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_33268"><a href="viewthread.php?tid=33268&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">马英九说中华民国是个主权独立的国家，全体大陆人民不答应</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=33268&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=33268&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6314">hhbcl1414</a>
										</cite>
					<em>2010-1-2</em>
				</td>
				<td class="nums"><strong>64</strong> / <em>1408</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=33268&goto=lastpost#lastpost">2010-1-4 09:42</a></em>
					<cite>by <a href="space.php?username=%CB%BF%CB%BF%CD%C3">丝丝兔</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_37375" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=37375&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_37375"><a href="viewthread.php?tid=37375&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">博客“不许联想”欲备案，被“不许申请”而被封</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=37375&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=37375&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3614">zhsh_710</a>
										</cite>
					<em>2010-2-4</em>
				</td>
				<td class="nums"><strong>64</strong> / <em>2326</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=37375&goto=lastpost#lastpost">2010-2-13 14:32</a></em>
					<cite>by <a href="space.php?username=foxtaugh">foxtaugh</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_27395" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=27395&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_27395"><a href="viewthread.php?tid=27395&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">2号线雍和宫地铁站遇国保，正跟踪一伙西藏人</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=27395&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=27395&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2025">asswar</a>
										</cite>
					<em>2009-11-7</em>
				</td>
				<td class="nums"><strong>64</strong> / <em>1519</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=27395&goto=lastpost#lastpost">2009-11-9 19:19</a></em>
					<cite>by <a href="space.php?username=FIFA%BB%E1%D4%B1">FIFA会员</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_29807" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=29807&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_29807"><a href="viewthread.php?tid=29807&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">央视：谷歌英文搜索的淫秽程度都远远超过中文网页</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=29807&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=29807&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6760">che</a>
										</cite>
					<em>2009-12-3</em>
				</td>
				<td class="nums"><strong>64</strong> / <em>1612</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=29807&goto=lastpost#lastpost">2009-12-5 20:54</a></em>
					<cite>by <a href="space.php?username=M%B5%AF">M弹</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_30753" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=30753&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_30753"><a href="viewthread.php?tid=30753&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">广电封杀迅雷、电驴等BT网站 84.2%的网民支持</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=30753&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=30753&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7093">elfix</a>
										</cite>
					<em>2009-12-10</em>
				</td>
				<td class="nums"><strong>64</strong> / <em>1564</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=30753&goto=lastpost#lastpost">2009-12-13 11:42</a></em>
					<cite>by <a href="space.php?username=%E6%CF%B6%F0%C0%CF%B9%AB">嫦娥老公</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_31571" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=31571&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_31571"><a href="viewthread.php?tid=31571&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">腾讯今日大面积封杀QQ群 群共享上传已和谐</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=31571&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=31571&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=9991">duck_1984</a>
										</cite>
					<em>2009-12-18</em>
				</td>
				<td class="nums"><strong>64</strong> / <em>2214</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=31571&goto=lastpost#lastpost">2009-12-21 17:11</a></em>
					<cite>by <a href="space.php?username=%D7%F3%B0%B6%A1%FB%D3%D2%B0%B6">左岸←右岸</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_27005" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=27005&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_27005"><a href="viewthread.php?tid=27005&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">河南网友因在QQ群里“颠覆国家政权”受审</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=27005&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=27005&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2442">ksi</a>
										</cite>
					<em>2009-11-3</em>
				</td>
				<td class="nums"><strong>64</strong> / <em>2021</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=27005&goto=lastpost#lastpost">2009-12-24 19:50</a></em>
					<cite>by <a href="space.php?username=%B4%F3%D1%EE%CA%F7">大杨树</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_32507" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=32507&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_32507"><a href="viewthread.php?tid=32507&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">四川资阳精神病医院组织病人同唱红歌比赛</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=32507&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=32507&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1770">nustbobo</a>
										</cite>
					<em>2009-12-24</em>
				</td>
				<td class="nums"><strong>64</strong> / <em>919</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=32507&goto=lastpost#lastpost">2009-12-26 15:01</a></em>
					<cite>by <a href="space.php?username=beingwhy">beingwhy</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_17348" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=17348&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_17348"><a href="viewthread.php?tid=17348&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">新华社报道：中国军机在中俄联合演习期间坠毁</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=17348&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=17348&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3031">江南一叶</a>
										</cite>
					<em>2009-7-19</em>
				</td>
				<td class="nums"><strong>64</strong> / <em>1722</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=17348&goto=lastpost#lastpost">2009-7-21 13:38</a></em>
					<cite>by <a href="space.php?username=cqibong">cqibong</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_19940" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=19940&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_19940"><a href="viewthread.php?tid=19940&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">重庆百姓咋这样评价薄熙来？</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=19940&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=19940&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=787">sogoood</a>
										</cite>
					<em>2009-8-16</em>
				</td>
				<td class="nums"><strong>64</strong> / <em>2173</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=19940&goto=lastpost#lastpost">2009-8-18 22:58</a></em>
					<cite>by <a href="space.php?username=dacenke">dacenke</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_50255" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=50255&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_50255"><a href="viewthread.php?tid=50255&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">世界杯引朝鲜全民空巷 金正日带头熬夜观战比赛</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=50255&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=50255&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=13079">qsIHSIN</a>
										</cite>
					<em>2010-6-21</em>
				</td>
				<td class="nums"><strong>64</strong> / <em>1961</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=50255&goto=lastpost#lastpost">2010-6-23 09:38</a></em>
					<cite>by <a href="space.php?username=miniq">miniq</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_51234" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=51234&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_51234"><a href="viewthread.php?tid=51234&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">官媒呼吁正确理性看待中国的“国富民穷”</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=51234&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=51234&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2804">musicool</a>
										</cite>
					<em>2010-6-30</em>
				</td>
				<td class="nums"><strong>64</strong> / <em>1313</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=51234&goto=lastpost#lastpost">2010-7-1 15:50</a></em>
					<cite>by <a href="space.php?username=%C0%CB%D1%A9">浪雪</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_54131" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=54131&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_54131"><a href="viewthread.php?tid=54131&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">男子捡到他人遗失钻戒  随手扔掉被判赔4.6万</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=54131&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=54131&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8705">littail</a>
										</cite>
					<em>2010-7-28</em>
				</td>
				<td class="nums"><strong>64</strong> / <em>1491</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=54131&goto=lastpost#lastpost">2010-7-30 18:34</a></em>
					<cite>by <a href="space.php?username=zhuhexie2004">zhuhexie2004</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_40810" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=40810&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_40810"><a href="viewthread.php?tid=40810&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">福建网民诬告陷害案开庭</a></span>
																										<span class="threadpages"> &nbsp; <a href="viewthread.php?tid=40810&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=1">1</a> <a href="viewthread.php?tid=40810&amp;extra=page%3D14%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;page=2">2</a> </span>
														</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=10890">xiaohe1120</a>
										</cite>
					<em>2010-3-15</em>
				</td>
				<td class="nums"><strong>64</strong> / <em>923</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=40810&goto=lastpost#lastpost">2010-3-21 10:06</a></em>
					<cite>by <a href="space.php?username=%D5%C5%D0%A1%CF%C4">张小夏</a></cite>
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
	<div class="pages"><em>&nbsp;22278&nbsp;</em><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=1" class="first">1 ...</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=13" class="prev">&lsaquo;&lsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=12">12</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=13">13</a><strong>14</strong><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=15">15</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=16">16</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=17">17</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=18">18</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=19">19</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=20">20</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=21">21</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=15" class="next">&rsaquo;&rsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=349" class="last">... 349</a><kbd><input type="text" name="custompage" size="3" onkeydown="if(event.keyCode==13) {window.location='forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page='+this.value; return false;}" /></kbd></div>	</div>

  
	<div class="box">
			<span class="headactions"><a href="forumdisplay.php?fid=2&amp;page=14&amp;showoldetails=yes#online" class="nobdr"><img src="images/default/collapsed_yes.gif" alt="" /></a></span>
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
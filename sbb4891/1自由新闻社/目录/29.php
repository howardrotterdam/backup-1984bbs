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
			window.location = 'forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&page=28';
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
<div class="pages"><em>&nbsp;22278&nbsp;</em><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=1" class="first">1 ...</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=28" class="prev">&lsaquo;&lsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=27">27</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=28">28</a><strong>29</strong><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=30">30</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=31">31</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=32">32</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=33">33</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=34">34</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=35">35</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=36">36</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=30" class="next">&rsaquo;&rsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=349" class="last">... 349</a><kbd><input type="text" name="custompage" size="3" onkeydown="if(event.keyCode==13) {window.location='forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page='+this.value; return false;}" /></kbd></div></div>

<div style="float:left;border:1px solid #CCC; border-bottom:none;;width:218px; background: url(/imgs/1984radio.jpg) 200px 2px no-repeat;padding:5px 0 5px 12px;margin:0px 0 0 13px">

<p><b><a href="/radio/index.php" target="_blank">1984FM</a></b><br /><b><a href="https://voxli.com/1984bbs" target="_blank">1984Chat</a></b>&nbsp;</p> 
</div>

<div style="clear:both;height:0px;width:100%;font-size:1px;">&nbsp;</div>

	<ul class="popupmenu_popup newspecialmenu" id="newspecial_menu" style="display: none">
		<li><a href="post.php?action=newthread&amp;fid=2&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">发新话题</a></li>		<li class="poll"><a href="post.php?action=newthread&amp;fid=2&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;special=1">发布投票</a></li>													</ul>
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

					<tbody id="normalthread_6947" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=6947&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_6947"><a href="viewthread.php?tid=6947&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">乌有之乡书社遭查抄 毛粉主力被请喝茶</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2804">musicool</a>
										</cite>
					<em>2009-3-12</em>
				</td>
				<td class="nums"><strong>46</strong> / <em>1087</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=6947&goto=lastpost#lastpost">2009-3-18 19:35</a></em>
					<cite>by <a href="space.php?username=%C0%ED%CF%EB%C7%E0%C4%EA%B9%B7">理想青年狗</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_2564" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=2564&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_2564"><a href="viewthread.php?tid=2564&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">巴勒斯坦和以色列的孩子们</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7">张书记</a>
										</cite>
					<em>2008-12-29</em>
				</td>
				<td class="nums"><strong>46</strong> / <em>733</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=2564&goto=lastpost#lastpost">2009-8-1 00:20</a></em>
					<cite>by <a href="space.php?username=vookeno">vookeno</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_19229" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=19229&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_19229"><a href="viewthread.php?tid=19229&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">解放军报提醒：严防死守“网络颠覆专制政权”</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2428">xiahua</a>
										</cite>
					<em>2009-8-6</em>
				</td>
				<td class="nums"><strong>46</strong> / <em>1178</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=19229&goto=lastpost#lastpost">2009-8-11 13:57</a></em>
					<cite>by <a href="space.php?username=argylls">argylls</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_19213" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=19213&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_19213"><a href="viewthread.php?tid=19213&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">中国童工张倩倩</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2232">老杂疫</a>
										</cite>
					<em>2009-8-9</em>
				</td>
				<td class="nums"><strong>46</strong> / <em>838</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=19213&goto=lastpost#lastpost">2009-8-12 14:29</a></em>
					<cite>by <a href="space.php?username=fred9113">fred9113</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_21184" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=21184&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_21184"><a href="viewthread.php?tid=21184&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">央湿热播国产动画片又被指“山寨”</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=852">未来他老爸</a>
										</cite>
					<em>2009-9-2</em>
				</td>
				<td class="nums"><strong>46</strong> / <em>782</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=21184&goto=lastpost#lastpost">2009-9-3 10:44</a></em>
					<cite>by <a href="space.php?username=27501777">27501777</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_20966" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=20966&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_20966"><a href="viewthread.php?tid=20966&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">毛新宇同志的报告：解放军已掌握了多项世界尖端技术</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1157">bester89</a>
										</cite>
					<em>2009-8-30</em>
				</td>
				<td class="nums"><strong>46</strong> / <em>981</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=20966&goto=lastpost#lastpost">2009-9-3 10:47</a></em>
					<cite>by <a href="space.php?username=hooflet">hooflet</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_13727" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=13727&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_13727"><a href="viewthread.php?tid=13727&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">女副镇长醉卧街头遭丐奸</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2202">ccjing123</a>
										</cite>
					<em>2009-6-16</em>
				</td>
				<td class="nums"><strong>46</strong> / <em>1497</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=13727&goto=lastpost#lastpost">2009-6-17 23:49</a></em>
					<cite>by <a href="space.php?username=panbin">panbin</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_16163" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=16163&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_16163"><a href="viewthread.php?tid=16163&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">150几条人命最后谁负责</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2058">管理员</a>
										</cite>
					<em>2009-7-7</em>
				</td>
				<td class="nums"><strong>46</strong> / <em>1077</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=16163&goto=lastpost#lastpost">2009-7-9 22:05</a></em>
					<cite>by <a href="space.php?username=%D7%F3%B0%B6%A1%FB%D3%D2%B0%B6">左岸←右岸</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_17078" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=17078&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_17078"><a href="viewthread.php?tid=17078&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">工信部提出iPhone进宫条件：阉割WiFi并插入监控芯片</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7">张书记</a>
										</cite>
					<em>2009-7-12</em>
				</td>
				<td class="nums"><strong>46</strong> / <em>1252</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=17078&goto=lastpost#lastpost">2009-7-18 20:07</a></em>
					<cite>by <a href="space.php?username=woooo">woooo</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_7700" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=7700&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_7700"><a href="viewthread.php?tid=7700&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">法门寺的和尚怒了</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5298">香秋多吉</a>
										</cite>
					<em>2009-3-20</em>
				</td>
				<td class="nums"><strong>45</strong> / <em>1406</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=7700&goto=lastpost#lastpost">2009-6-16 09:22</a></em>
					<cite>by <a href="space.php?username=%B1%B1%B7%BD%D0%FE%CE%E5">北方玄五</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_14279" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=14279&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_14279"><a href="viewthread.php?tid=14279&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">好铁不打钉，好男不当兵</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3202">glim</a>
										</cite>
					<em>2009-6-20</em>
				</td>
				<td class="nums"><strong>45</strong> / <em>766</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=14279&goto=lastpost#lastpost">2009-6-21 22:14</a></em>
					<cite>by <a href="space.php?username=aniu0917">aniu0917</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_13290" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=13290&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_13290"><a href="viewthread.php?tid=13290&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">这个绿坝屏蔽网站列表简直是个宝啊</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2472">Noel</a>
										</cite>
					<em>2009-6-11</em>
				</td>
				<td class="nums"><strong>45</strong> / <em>1847</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=13290&goto=lastpost#lastpost">2009-6-23 15:58</a></em>
					<cite>by <a href="space.php?username=foxy">foxy</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_14543" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=14543&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_14543"><a href="viewthread.php?tid=14543&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">陈丹青、梁文道昨现身党报论坛</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4515">litongling</a>
										</cite>
					<em>2009-6-23</em>
				</td>
				<td class="nums"><strong>45</strong> / <em>1145</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=14543&goto=lastpost#lastpost">2009-6-24 05:43</a></em>
					<cite>by <a href="space.php?username=%BF%EC%C0%D6%C1%F7%C0%CB%BA%BA">快乐流浪汉</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_16049" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=16049&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_16049"><a href="viewthread.php?tid=16049&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">王乐泉的山东帮这次会倒台么？</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=134">丁丁</a>
										</cite>
					<em>2009-7-6</em>
				</td>
				<td class="nums"><strong>45</strong> / <em>1631</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=16049&goto=lastpost#lastpost">2009-7-8 22:30</a></em>
					<cite>by <a href="space.php?username=%B2%BB%BE%B4%C9%F1%B5%C4YODA">不敬神的YODA</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_16318" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=16318&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_16318"><a href="viewthread.php?tid=16318&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">江苏某当红电台主播谈新疆暴乱</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1831">浮灰</a>
										</cite>
					<em>2009-7-9</em>
				</td>
				<td class="nums"><strong>45</strong> / <em>1463</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=16318&goto=lastpost#lastpost">2009-7-12 03:01</a></em>
					<cite>by <a href="space.php?username=kava">kava</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_16380" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=16380&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_16380"><a href="viewthread.php?tid=16380&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">19岁女工的尖叫可能是新疆暴乱的源头</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7">张书记</a>
										</cite>
					<em>2009-7-10</em>
				</td>
				<td class="nums"><strong>45</strong> / <em>1310</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=16380&goto=lastpost#lastpost">2009-7-12 11:37</a></em>
					<cite>by <a href="space.php?username=qdq">qdq</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_16809" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=16809&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_16809"><a href="viewthread.php?tid=16809&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">西南大学将对学生道德量化管理 在校各种行为会被详细记录</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3389">一刀砍两斤肉</a>
										</cite>
					<em>2009-7-15</em>
				</td>
				<td class="nums"><strong>45</strong> / <em>769</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=16809&goto=lastpost#lastpost">2009-7-16 21:52</a></em>
					<cite>by <a href="space.php?username=doggie">doggie</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_48368" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=48368&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_48368"><a href="viewthread.php?tid=48368&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">朝鲜足协高官豪言世界杯夺冠：伟大领袖给我们支持</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=13117">魯邦三世</a>
										</cite>
					<em>2010-6-7</em>
				</td>
				<td class="nums"><strong>45</strong> / <em>739</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=48368&goto=lastpost#lastpost">2010-6-9 01:55</a></em>
					<cite>by <a href="space.php?username=%BF%AA%CB%AE%C0%EF%D6%F3%B1%F9">开水里煮冰</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_49099" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=49099&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_49099"><a href="viewthread.php?tid=49099&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">中国今年入夏天气反常 四大火炉熄火三冰城发烧</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=852">未来他老爸</a>
										</cite>
					<em>2010-6-11</em>
				</td>
				<td class="nums"><strong>45</strong> / <em>1130</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=49099&goto=lastpost#lastpost">2010-6-17 14:46</a></em>
					<cite>by <a href="space.php?username=nunu">nunu</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_49561" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=49561&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_49561"><a href="viewthread.php?tid=49561&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">倪玉兰律师被抓到东华门派出所</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=11098">爱我所爱</a>
										</cite>
					<em>2010-6-15</em>
				</td>
				<td class="nums"><strong>45</strong> / <em>970</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=49561&goto=lastpost#lastpost">2010-6-18 22:02</a></em>
					<cite>by <a href="space.php?username=alexwen34">alexwen34</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_49791" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=49791&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_49791"><a href="viewthread.php?tid=49791&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">人大官员：政府开支不高 公务员工资偏低</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=9737">剁辣椒</a>
										</cite>
					<em>2010-6-17</em>
				</td>
				<td class="nums"><strong>45</strong> / <em>820</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=49791&goto=lastpost#lastpost">2010-6-24 16:48</a></em>
					<cite>by <a href="space.php?username=%C0%CB%D1%A9">浪雪</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_50584" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=50584&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_50584"><a href="viewthread.php?tid=50584&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">刘烨上海与外籍男子斗殴</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8918">lhq2612</a>
										</cite>
					<em>2010-6-24</em>
				</td>
				<td class="nums"><strong>45</strong> / <em>1395</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=50584&goto=lastpost#lastpost">2010-6-25 23:45</a></em>
					<cite>by <a href="space.php?username=%D6%D0%D1%EB%D7%DC%CA%FA%BC%A6">中央总竖鸡</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_50524" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=50524&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_50524"><a href="viewthread.php?tid=50524&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">中美合研“空间能发生器” 取之不尽的清洁能源</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=13517">gaoxsh</a>
										</cite>
					<em>2010-6-23</em>
				</td>
				<td class="nums"><strong>45</strong> / <em>641</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=50524&goto=lastpost#lastpost">2010-6-26 14:44</a></em>
					<cite>by <a href="space.php?username=%BF%D5%D0%C4%B2%CB">空心菜</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_50699" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=50699&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_50699"><a href="viewthread.php?tid=50699&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">解放军不良风气有扩大趋势 出台严令禁止</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4570">我卖糕的</a>
										</cite>
					<em>2010-6-25</em>
				</td>
				<td class="nums"><strong>45</strong> / <em>1561</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=50699&goto=lastpost#lastpost">2010-6-30 09:44</a></em>
					<cite>by <a href="space.php?username=%C9%B5%D7%D3%BF%B4%C9%E7%BB%E1">傻子看社会</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_51130" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=51130&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_51130"><a href="viewthread.php?tid=51130&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">共军称西方军队国家化军事制度行不通</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4817">firedragoon</a>
										</cite>
					<em>2010-6-29</em>
				</td>
				<td class="nums"><strong>45</strong> / <em>911</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=51130&goto=lastpost#lastpost">2010-7-3 00:57</a></em>
					<cite>by <a href="space.php?username=sandorsong">sandorsong</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_51737" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=51737&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_51737"><a href="viewthread.php?tid=51737&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">中国偏袒北韩 安理会制裁受阻</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=144">mfs0616</a>
										</cite>
					<em>2010-7-5</em>
				</td>
				<td class="nums"><strong>45</strong> / <em>753</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=51737&goto=lastpost#lastpost">2010-7-6 16:57</a></em>
					<cite>by <a href="space.php?username=nkpoper">nkpoper</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_51759" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=51759&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_51759"><a href="viewthread.php?tid=51759&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">江泽民出巡 显腿脚不便</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=10890">xiaohe1120</a>
										</cite>
					<em>2010-7-5</em>
				</td>
				<td class="nums"><strong>45</strong> / <em>1939</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=51759&goto=lastpost#lastpost">2010-7-6 23:37</a></em>
					<cite>by <a href="space.php?username=%C1%F7%CA%C5%B5%C4%B9%C5%B5%E4">流逝的古典</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_51910" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=51910&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_51910"><a href="viewthread.php?tid=51910&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">广州出现“捏捏族”</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8301">lqunl</a>
										</cite>
					<em>2010-7-6</em>
				</td>
				<td class="nums"><strong>45</strong> / <em>1863</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=51910&goto=lastpost#lastpost">2010-7-8 17:46</a></em>
					<cite>by <a href="space.php?username=ezdualmo">ezdualmo</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_52236" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=52236&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_52236"><a href="viewthread.php?tid=52236&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">一周图片新闻 7.5-7.11</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2232">老杂疫</a>
										</cite>
					<em>2010-7-9</em>
				</td>
				<td class="nums"><strong>45</strong> / <em>1209</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=52236&goto=lastpost#lastpost">2010-7-11 20:10</a></em>
					<cite>by <a href="space.php?username=%D2%D4%B5%D8%D6%AE%C3%FB">以地之名</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_29226" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=29226&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_29226"><a href="viewthread.php?tid=29226&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">广州市民上街抗议建立番禺垃圾焚烧厂</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6760">che</a>
										</cite>
					<em>2009-11-23</em>
				</td>
				<td class="nums"><strong>45</strong> / <em>1129</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=29226&goto=lastpost#lastpost">2010-7-26 05:52</a></em>
					<cite>by <a href="space.php?username=Moleskine">Moleskine</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_54047" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=54047&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_54047"><a href="viewthread.php?tid=54047&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">谷歌问答产品上线 免于中共政治审查</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=10647">无相客</a>
										</cite>
					<em>2010-7-26</em>
				</td>
				<td class="nums"><strong>45</strong> / <em>1978</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=54047&goto=lastpost#lastpost">2010-7-30 01:14</a></em>
					<cite>by <a href="space.php?username=zhengce222">zhengce222</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_24296" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=24296&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_24296"><a href="viewthread.php?tid=24296&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">刘德华含泪为主子而感动</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4570">我卖糕的</a>
										</cite>
					<em>2009-10-5</em>
				</td>
				<td class="nums"><strong>45</strong> / <em>1150</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=24296&goto=lastpost#lastpost">2009-10-12 01:07</a></em>
					<cite>by <a href="space.php?username=%CE%F7%C3%C5%B4%B5%C5%A3">西门吹牛</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_25120" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=25120&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_25120"><a href="viewthread.php?tid=25120&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">龙应台：胡应当道歉</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8301">lqunl</a>
										</cite>
					<em>2009-10-15</em>
				</td>
				<td class="nums"><strong>45</strong> / <em>1816</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=25120&goto=lastpost#lastpost">2009-10-16 19:31</a></em>
					<cite>by <a href="space.php?username=nikegong100">nikegong100</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_25177" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=25177&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_25177"><a href="viewthread.php?tid=25177&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">法兰克福书展 北京耍花样 台湾哗然</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7002">luugoo</a>
										</cite>
					<em>2009-10-15</em>
				</td>
				<td class="nums"><strong>45</strong> / <em>1181</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=25177&goto=lastpost#lastpost">2009-10-18 07:40</a></em>
					<cite>by <a href="space.php?username=smarties">smarties</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_26449" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=26449&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_26449"><a href="viewthread.php?tid=26449&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">储君国戚在港购亿元豪宅</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1686">奧斯卡金</a>
										</cite>
					<em>2009-10-28</em>
				</td>
				<td class="nums"><strong>45</strong> / <em>2057</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=26449&goto=lastpost#lastpost">2009-10-30 13:20</a></em>
					<cite>by <a href="space.php?username=shzztt1688">shzztt1688</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_33779" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=33779&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_33779"><a href="viewthread.php?tid=33779&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传，各大网站私人博客即将封闭</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5464">上海帅哥</a>
										</cite>
					<em>2010-1-6</em>
				</td>
				<td class="nums"><strong>45</strong> / <em>1327</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=33779&goto=lastpost#lastpost">2010-1-7 19:03</a></em>
					<cite>by <a href="space.php?username=luugoo">luugoo</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_33420" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=33420&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_33420"><a href="viewthread.php?tid=33420&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传，沈阳军区丢失重要文件</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7231">海风</a>
										</cite>
					<em>2010-1-3</em>
				</td>
				<td class="nums"><strong>45</strong> / <em>2426</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=33420&goto=lastpost#lastpost">2010-1-7 21:47</a></em>
					<cite>by <a href="space.php?username=%CE%F7%C3%C5%B4%B5%C5%A3">西门吹牛</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_35176" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=35176&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_35176"><a href="viewthread.php?tid=35176&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">俄共要求全球通缉阿凡达的导演</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3202">glim</a>
										</cite>
					<em>2010-1-18</em>
				</td>
				<td class="nums"><strong>45</strong> / <em>1705</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=35176&goto=lastpost#lastpost">2010-1-22 09:14</a></em>
					<cite>by <a href="space.php?username=%B7%C5%D6%F0">放逐</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_34738" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=34738&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_34738"><a href="viewthread.php?tid=34738&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">8741部队神秘获今上与影帝授予表彰</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2236">歪歪</a>
										</cite>
					<em>2010-1-14</em>
				</td>
				<td class="nums"><strong>45</strong> / <em>1938</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=34738&goto=lastpost#lastpost">2010-1-24 11:15</a></em>
					<cite>by <a href="space.php?username=miniq">miniq</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_36103" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=36103&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_36103"><a href="viewthread.php?tid=36103&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">GFW负责人方滨兴鼓吹网络审查 称谷歌不服可退出中国</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7">张书记</a>
										</cite>
					<em>2010-1-24</em>
				</td>
				<td class="nums"><strong>45</strong> / <em>1233</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=36103&goto=lastpost#lastpost">2010-1-27 21:38</a></em>
					<cite>by <a href="space.php?username=voasia">voasia</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_36314" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=36314&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_36314"><a href="viewthread.php?tid=36314&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">北京20兆宽带覆盖率年内达50%</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=9591">吃吃饭</a>
										</cite>
					<em>2010-1-29</em>
				</td>
				<td class="nums"><strong>45</strong> / <em>763</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=36314&goto=lastpost#lastpost">2010-1-31 03:28</a></em>
					<cite>by <a href="space.php?username=investigate">investigate</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_36630" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=36630&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_36630"><a href="viewthread.php?tid=36630&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">福彩中心的计算机工作人员透露开奖规则</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8709">szdos</a>
										</cite>
					<em>2010-2-1</em>
				</td>
				<td class="nums"><strong>45</strong> / <em>1392</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=36630&goto=lastpost#lastpost">2010-2-4 10:47</a></em>
					<cite>by <a href="space.php?username=%C4%E4%C3%FB%D3%C3%BB%A7">匿名用户</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_35487" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=35487&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_35487"><a href="viewthread.php?tid=35487&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">中国留澳学生：LV就是我们的校包，用GUCCI自降身份</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=852">未来他老爸</a>
										</cite>
					<em>2010-1-21</em>
				</td>
				<td class="nums"><strong>45</strong> / <em>1887</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=35487&goto=lastpost#lastpost">2010-2-23 11:10</a></em>
					<cite>by <a href="space.php?username=%CE%D2%C2%F4%B8%E2%B5%C4">我卖糕的</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_38315" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=38315&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_38315"><a href="viewthread.php?tid=38315&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">中国冰壶队外籍主帅：开会太多，不再续约</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3969">langhua9527</a>
										</cite>
					<em>2010-2-23</em>
				</td>
				<td class="nums"><strong>45</strong> / <em>1526</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=38315&goto=lastpost#lastpost">2010-2-25 23:01</a></em>
					<cite>by <a href="space.php?username=halfbogey">halfbogey</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_6713" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=6713&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_6713"><a href="viewthread.php?tid=6713&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">素质，看看人家这素质</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2229">[17]堂吉柯德</a>
										</cite>
					<em>2009-3-10</em>
				</td>
				<td class="nums"><strong>45</strong> / <em>1546</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=6713&goto=lastpost#lastpost">2009-5-14 08:55</a></em>
					<cite>by <a href="space.php?username=raul1943">raul1943</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_10931" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=10931&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_10931"><a href="viewthread.php?tid=10931&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">号召大家来围观本校论坛的爱国青年</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3495">caesarTang</a>
										</cite>
					<em>2009-5-14</em>
				</td>
				<td class="nums"><strong>45</strong> / <em>1204</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=10931&goto=lastpost#lastpost">2009-6-2 18:29</a></em>
					<cite>by <a href="space.php?username=kami">kami</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_12427" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=12427&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_12427"><a href="viewthread.php?tid=12427&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">据说是海军阅兵取消直播的原因</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3772">立场不坚定的人</a>
										</cite>
					<em>2009-5-6</em>
				</td>
				<td class="nums"><strong>45</strong> / <em>2107</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=12427&goto=lastpost#lastpost">2009-6-3 11:40</a></em>
					<cite>by <a href="space.php?username=magicbully">magicbully</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_26300" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=26300&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_26300"><a href="viewthread.php?tid=26300&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">一周图片新闻 10.26-11.1</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2232">老杂疫</a>
										</cite>
					<em>2009-10-26</em>
				</td>
				<td class="nums"><strong>45</strong> / <em>1374</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=26300&goto=lastpost#lastpost">2009-11-2 17:27</a></em>
					<cite>by <a href="space.php?username=%D0%E4%CA%D6%BF%B4%C8%C8%C4%D6">袖手看热闹</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_26895" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=26895&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_26895"><a href="viewthread.php?tid=26895&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">北京国安球迷站街粗口大骂天津泰达</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=613">五花肉</a>
										</cite>
					<em>2009-11-2</em>
				</td>
				<td class="nums"><strong>45</strong> / <em>977</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=26895&goto=lastpost#lastpost">2009-11-4 17:26</a></em>
					<cite>by <a href="space.php?username=wang3">wang3</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_26928" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=26928&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_26928"><a href="viewthread.php?tid=26928&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">2009年“自宫杯”真理部最喜爱的网媒获奖名单公布</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2311">空空追梦</a>
										</cite>
					<em>2009-11-2</em>
				</td>
				<td class="nums"><strong>45</strong> / <em>1616</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=26928&goto=lastpost#lastpost">2009-11-5 17:41</a></em>
					<cite>by <a href="space.php?username=%B3%B4%B7%B9">炒饭</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_26872" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=26872&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_26872"><a href="viewthread.php?tid=26872&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">国庆前注射甲流疫苗的部分儿童出现发烧症状</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1258">路边社记者</a>
										</cite>
					<em>2009-10-30</em>
				</td>
				<td class="nums"><strong>45</strong> / <em>1420</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=26872&goto=lastpost#lastpost">2009-11-6 13:41</a></em>
					<cite>by <a href="space.php?username=%C9%A2%B9%E2">散光</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_27339" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=27339&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_27339"><a href="viewthread.php?tid=27339&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">绵阳灾后重建刮起跃进风 建筑材料出现“粉粉砖”</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7077">裆中央总竖鸡</a>
										</cite>
					<em>2009-11-6</em>
				</td>
				<td class="nums"><strong>45</strong> / <em>954</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=27339&goto=lastpost#lastpost">2009-11-8 23:01</a></em>
					<cite>by <a href="space.php?username=iamiam">iamiam</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_27887" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=27887&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_27887"><a href="viewthread.php?tid=27887&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">美使领馆举办“奥巴马访华吹风会” 饶谨质疑美国人权</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7">张书记</a>
										</cite>
					<em>2009-11-12</em>
				</td>
				<td class="nums"><strong>45</strong> / <em>821</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=27887&goto=lastpost#lastpost">2009-11-14 22:17</a></em>
					<cite>by <a href="space.php?username=%B5%A5%CA%D6%B7%F6%C7%BD">单手扶墙</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_27802" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=27802&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_27802"><a href="viewthread.php?tid=27802&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">“头号警花”与公安部部长助理关系亲密</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1408">becom</a>
										</cite>
					<em>2009-11-10</em>
				</td>
				<td class="nums"><strong>45</strong> / <em>2145</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=27802&goto=lastpost#lastpost">2009-11-14 23:18</a></em>
					<cite>by <a href="space.php?username=%CE%F7%C3%C5%B4%B5%C5%A3">西门吹牛</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_28319" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=28319&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_28319"><a href="viewthread.php?tid=28319&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">流浪汉冷死街头 狗儿相伴</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8821">neversay</a>
										</cite>
					<em>2009-11-17</em>
				</td>
				<td class="nums"><strong>45</strong> / <em>801</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=28319&goto=lastpost#lastpost">2009-11-23 21:09</a></em>
					<cite>by <a href="space.php?username=pinkpck">pinkpck</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_28540" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=28540&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_28540"><a href="viewthread.php?tid=28540&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">江苏淫乱官员陆正方被调查 先后有情妇逾百名</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1408">becom</a>
										</cite>
					<em>2009-11-20</em>
				</td>
				<td class="nums"><strong>45</strong> / <em>1293</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=28540&goto=lastpost#lastpost">2009-11-24 21:38</a></em>
					<cite>by <a href="space.php?username=aeon">aeon</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_30472" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=30472&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_30472"><a href="viewthread.php?tid=30472&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">迅雷自宫</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4681">腐皮</a>
										</cite>
					<em>2009-12-9</em>
				</td>
				<td class="nums"><strong>45</strong> / <em>2064</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=30472&goto=lastpost#lastpost">2009-12-14 12:19</a></em>
					<cite>by <a href="space.php?username=%D7%F3%B0%B6%A1%FB%D3%D2%B0%B6">左岸←右岸</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_31825" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=31825&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_31825"><a href="viewthread.php?tid=31825&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">清华太子党金加祺</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8426">singsingchow</a>
										</cite>
					<em>2009-12-20</em>
				</td>
				<td class="nums"><strong>45</strong> / <em>2005</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=31825&goto=lastpost#lastpost">2009-12-24 01:04</a></em>
					<cite>by <a href="space.php?username=kokonuo">kokonuo</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_55935" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=55935&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_55935"><a href="viewthread.php?tid=55935&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">刘云山要求《人民日报》进寺庙 抢占藏区宣传舆论制高点</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7">张书记</a>
										</cite>
					<em>2010-8-19</em>
				</td>
				<td class="nums"><strong>45</strong> / <em>842</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=55935&goto=lastpost#lastpost">2010-8-23 13:45</a></em>
					<cite>by <a href="space.php?username=CCAV">CCAV</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_55671" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=55671&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_55671"><a href="viewthread.php?tid=55671&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">温家宝获美国《新闻周刊》“人民公仆”称号</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=12412">wangguoping</a>
										</cite>
					<em>2010-8-17</em>
				</td>
				<td class="nums"><strong>45</strong> / <em>1533</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=55671&goto=lastpost#lastpost">2010-8-25 19:16</a></em>
					<cite>by <a href="space.php?username=lwb881225">lwb881225</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_56368" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=56368&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_56368"><a href="viewthread.php?tid=56368&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">李小琳荣获“2010中国十大品牌女性”</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7">张书记</a>
										</cite>
					<em>2010-8-25</em>
				</td>
				<td class="nums"><strong>45</strong> / <em>1044</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=56368&goto=lastpost#lastpost">2010-8-30 10:22</a></em>
					<cite>by <a href="space.php?username=%CE%D2%C2%F4%B8%E2%B5%C4">我卖糕的</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_56831" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=56831&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_56831"><a href="viewthread.php?tid=56831&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">真理部最新指令：各网正确报道香港的游行</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5588">我家旺财有喜了</a>
										</cite>
					<em>2010-8-30</em>
				</td>
				<td class="nums"><strong>45</strong> / <em>1062</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=56831&goto=lastpost#lastpost">2010-9-2 08:41</a></em>
					<cite>by <a href="space.php?username=%B6%C0%C9%CF%CE%F7%C2%A5">独上西楼</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_57286" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=57286&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_57286"><a href="viewthread.php?tid=57286&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">中共宣称领导抗战成功 引台湾学界非议</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7002">luugoo</a>
										</cite>
					<em>2010-9-3</em>
				</td>
				<td class="nums"><strong>45</strong> / <em>1229</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=57286&goto=lastpost#lastpost">2010-9-6 13:39</a></em>
					<cite>by <a href="space.php?username=l%C6%DF%D4%C2">l七月</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_59121" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=59121&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_59121"><a href="viewthread.php?tid=59121&amp;extra=page%3D29%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">温家宝强烈敦促日方立即无条件释放我被扣船长</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=15959">万里独行</a>
										</cite>
					<em>2010-9-22</em>
				</td>
				<td class="nums"><strong>45</strong> / <em>859</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=59121&goto=lastpost#lastpost">2010-9-23 15:24</a></em>
					<cite>by <a href="space.php?username=%D0%C4%CB%E6%C4%E3%B6%AF">心随你动</a></cite>
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
	<div class="pages"><em>&nbsp;22278&nbsp;</em><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=1" class="first">1 ...</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=28" class="prev">&lsaquo;&lsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=27">27</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=28">28</a><strong>29</strong><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=30">30</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=31">31</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=32">32</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=33">33</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=34">34</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=35">35</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=36">36</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=30" class="next">&rsaquo;&rsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=349" class="last">... 349</a><kbd><input type="text" name="custompage" size="3" onkeydown="if(event.keyCode==13) {window.location='forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page='+this.value; return false;}" /></kbd></div>	</div>

  
	<div class="box">
			<span class="headactions"><a href="forumdisplay.php?fid=2&amp;page=29&amp;showoldetails=yes#online" class="nobdr"><img src="images/default/collapsed_yes.gif" alt="" /></a></span>
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
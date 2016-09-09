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
			window.location = 'forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&page=30';
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
<div class="pages"><em>&nbsp;22278&nbsp;</em><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=1" class="first">1 ...</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=30" class="prev">&lsaquo;&lsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=29">29</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=30">30</a><strong>31</strong><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=32">32</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=33">33</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=34">34</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=35">35</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=36">36</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=37">37</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=38">38</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=32" class="next">&rsaquo;&rsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=349" class="last">... 349</a><kbd><input type="text" name="custompage" size="3" onkeydown="if(event.keyCode==13) {window.location='forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page='+this.value; return false;}" /></kbd></div></div>

<div style="float:left;border:1px solid #CCC; border-bottom:none;;width:218px; background: url(/imgs/1984radio.jpg) 200px 2px no-repeat;padding:5px 0 5px 12px;margin:0px 0 0 13px">

<p><b><a href="/radio/index.php" target="_blank">1984FM</a></b><br /><b><a href="https://voxli.com/1984bbs" target="_blank">1984Chat</a></b>&nbsp;</p> 
</div>

<div style="clear:both;height:0px;width:100%;font-size:1px;">&nbsp;</div>

	<ul class="popupmenu_popup newspecialmenu" id="newspecial_menu" style="display: none">
		<li><a href="post.php?action=newthread&amp;fid=2&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">发新话题</a></li>		<li class="poll"><a href="post.php?action=newthread&amp;fid=2&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC&amp;special=1">发布投票</a></li>													</ul>
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

					<tbody id="normalthread_53388" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=53388&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_53388"><a href="viewthread.php?tid=53388&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">一周图片新闻 7.19-7.25</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2232">老杂疫</a>
										</cite>
					<em>2010-7-20</em>
				</td>
				<td class="nums"><strong>44</strong> / <em>1338</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=53388&goto=lastpost#lastpost">2010-7-29 16:45</a></em>
					<cite>by <a href="space.php?username=%C0%E4%D1%D4%C0%E4%D3%EF%C0%E4%D7%D4%D3%C9">冷言冷语冷自由</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_54079" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=54079&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_54079"><a href="viewthread.php?tid=54079&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">《计算机世界》批腾讯公司“狗日的”“山寨之王”  腾讯回击</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=15783">裝傻小Q</a>
										</cite>
					<em>2010-7-27</em>
				</td>
				<td class="nums"><strong>44</strong> / <em>1510</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=54079&goto=lastpost#lastpost">2010-7-31 01:15</a></em>
					<cite>by <a href="space.php?username=haro">haro</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_27312" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=27312&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_27312"><a href="viewthread.php?tid=27312&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">美国女生办网站募钱  贷款给中国农民</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4570">我卖糕的</a>
										</cite>
					<em>2009-11-6</em>
				</td>
				<td class="nums"><strong>44</strong> / <em>665</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=27312&goto=lastpost#lastpost">2009-11-13 17:31</a></em>
					<cite>by <a href="space.php?username=zhengce222">zhengce222</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_26640" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=26640&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_26640"><a href="viewthread.php?tid=26640&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">有良知的中国留日学生向热比娅致歉</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=134">丁丁</a>
										</cite>
					<em>2009-10-30</em>
				</td>
				<td class="nums"><strong>44</strong> / <em>1256</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=26640&goto=lastpost#lastpost">2009-11-17 23:38</a></em>
					<cite>by <a href="space.php?username=gundamwang">gundamwang</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_28071" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=28071&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_28071"><a href="viewthread.php?tid=28071&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">医生说“非重症患者，北京所有医院不做甲流筛查”</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1245">auv</a>
										</cite>
					<em>2009-11-15</em>
				</td>
				<td class="nums"><strong>44</strong> / <em>912</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=28071&goto=lastpost#lastpost">2009-11-18 17:02</a></em>
					<cite>by <a href="space.php?username=%B0%B7%C7%E8%BE%DB%C8%FD%C0%C9">胺氰聚三郎</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_29160" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=29160&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_29160"><a href="viewthread.php?tid=29160&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">情侣在万众瞩目下肉搏</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1039">道道儿</a>
										</cite>
					<em>2009-11-27</em>
				</td>
				<td class="nums"><strong>44</strong> / <em>2038</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=29160&goto=lastpost#lastpost">2009-11-30 18:07</a></em>
					<cite>by <a href="space.php?username=zhsh_710">zhsh_710</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_29572" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=29572&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_29572"><a href="viewthread.php?tid=29572&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">胡锦涛从工资中拿出5000元捐给一名艾滋病感染者</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7919">路边社门卫</a>
										</cite>
					<em>2009-11-30</em>
				</td>
				<td class="nums"><strong>44</strong> / <em>1053</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=29572&goto=lastpost#lastpost">2009-12-2 01:37</a></em>
					<cite>by <a href="space.php?username=%D5%FD%B0%E6%C7%C5365%CB%EA">正版桥365岁</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_31660" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=31660&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_31660"><a href="viewthread.php?tid=31660&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">影帝：我国减排不容监察</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3308">天衢居士</a>
										</cite>
					<em>2009-12-18</em>
				</td>
				<td class="nums"><strong>44</strong> / <em>1281</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=31660&goto=lastpost#lastpost">2009-12-21 19:54</a></em>
					<cite>by <a href="space.php?username=%CE%F7%C3%C5%B4%B5%C5%A3">西门吹牛</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_32085" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=32085&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_32085"><a href="viewthread.php?tid=32085&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">当局警告异议人士勿旁听刘晓波审判</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=6988">fp456789</a>
										</cite>
					<em>2009-12-22</em>
				</td>
				<td class="nums"><strong>44</strong> / <em>965</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=32085&goto=lastpost#lastpost">2009-12-23 10:39</a></em>
					<cite>by <a href="space.php?username=zink941">zink941</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_32921" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=32921&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_32921"><a href="viewthread.php?tid=32921&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">天津静海发生群体性事件</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=9188">苏远</a>
										</cite>
					<em>2009-12-29</em>
				</td>
				<td class="nums"><strong>44</strong> / <em>1650</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=32921&goto=lastpost#lastpost">2009-12-30 06:26</a></em>
					<cite>by <a href="space.php?username=sirian_ye">sirian_ye</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_13560" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=13560&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_13560"><a href="viewthread.php?tid=13560&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">秦城五星级大酒店现状：希同生命垂危 良宇颐养天年</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=26">CNN派来的</a>
										</cite>
					<em>2009-6-13</em>
				</td>
				<td class="nums"><strong>44</strong> / <em>2448</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=13560&goto=lastpost#lastpost">2010-1-1 00:47</a></em>
					<cite>by <a href="space.php?username=%AE%85%D7%D3%C4%AC">畢子默</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_32754" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=32754&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_32754"><a href="viewthread.php?tid=32754&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">一周图片新闻 12.28-2010.1.5</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2232">老杂疫</a>
										</cite>
					<em>2009-12-28</em>
				</td>
				<td class="nums"><strong>44</strong> / <em>1211</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=32754&goto=lastpost#lastpost">2010-1-5 19:49</a></em>
					<cite>by <a href="space.php?username=hh9380">hh9380</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_34534" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=34534&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_34534"><a href="viewthread.php?tid=34534&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">胡说：领导干部应树立制度面前没有特权意识</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=852">未来他老爸</a>
										</cite>
					<em>2010-1-13</em>
				</td>
				<td class="nums"><strong>44</strong> / <em>578</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=34534&goto=lastpost#lastpost">2010-1-16 10:17</a></em>
					<cite>by <a href="space.php?username=cqibong">cqibong</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_35385" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=35385&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_35385"><a href="viewthread.php?tid=35385&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">南方报业被勒令撤出赴海地采访队</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1258">路边社记者</a>
										</cite>
					<em>2010-1-20</em>
				</td>
				<td class="nums"><strong>44</strong> / <em>1470</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=35385&goto=lastpost#lastpost">2010-1-21 16:50</a></em>
					<cite>by <a href="space.php?username=%D5%D5%B9%CB%BA%C3%C4%E3">照顾好你</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_35704" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=35704&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_35704"><a href="viewthread.php?tid=35704&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">真理部最新指令：不报道“布什访华、孔子网站和海地偷渡移民”</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1408">becom</a>
										</cite>
					<em>2010-1-23</em>
				</td>
				<td class="nums"><strong>44</strong> / <em>1778</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=35704&goto=lastpost#lastpost">2010-2-2 13:54</a></em>
					<cite>by <a href="space.php?username=glang2">glang2</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_36569" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=36569&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_36569"><a href="viewthread.php?tid=36569&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">六四游行高僧将接掌佛教协会</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=10619">voasia</a>
										</cite>
					<em>2010-2-1</em>
				</td>
				<td class="nums"><strong>44</strong> / <em>1607</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=36569&goto=lastpost#lastpost">2010-2-4 13:00</a></em>
					<cite>by <a href="space.php?username=%C9%BD%C3%F1%C0%EF%E9L">山民里長</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_37229" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=37229&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_37229"><a href="viewthread.php?tid=37229&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传，天津有人开车接连撞死11人</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=9991">duck_1984</a>
										</cite>
					<em>2010-2-1</em>
				</td>
				<td class="nums"><strong>44</strong> / <em>1498</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=37229&goto=lastpost#lastpost">2010-2-8 18:21</a></em>
					<cite>by <a href="space.php?username=Diablo">Diablo</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_37173" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=37173&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_37173"><a href="viewthread.php?tid=37173&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">重庆女子交巡警拟配兰博基尼警车</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8320">疯和尚</a>
										</cite>
					<em>2010-2-8</em>
				</td>
				<td class="nums"><strong>44</strong> / <em>901</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=37173&goto=lastpost#lastpost">2010-2-9 20:15</a></em>
					<cite>by <a href="space.php?username=kensenjiha">kensenjiha</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_37712" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=37712&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_37712"><a href="viewthread.php?tid=37712&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">调查显示内地仅22%民众满意虎年春晚</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8301">lqunl</a>
										</cite>
					<em>2010-2-14</em>
				</td>
				<td class="nums"><strong>44</strong> / <em>1110</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=37712&goto=lastpost#lastpost">2010-2-16 13:22</a></em>
					<cite>by <a href="space.php?username=%B8%EE%CF%C2%C4%E3%BA%C3">割下你好</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_39243" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=39243&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_39243"><a href="viewthread.php?tid=39243&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">姚明要生美国宝宝</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8301">lqunl</a>
										</cite>
					<em>2010-3-1</em>
				</td>
				<td class="nums"><strong>44</strong> / <em>991</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=39243&goto=lastpost#lastpost">2010-3-5 18:38</a></em>
					<cite>by <a href="space.php?username=%C3%CE%D0%D1%CB%E6%D3%F6">梦醒随遇</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_39379" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=39379&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_39379"><a href="viewthread.php?tid=39379&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">宋祖德：兽兽献身过某地高管和刘谦等男明星</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8638">dark</a>
										</cite>
					<em>2010-3-5</em>
				</td>
				<td class="nums"><strong>44</strong> / <em>1969</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=39379&goto=lastpost#lastpost">2010-3-8 18:11</a></em>
					<cite>by <a href="space.php?username=%C0%CF%BE%C5">老九</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_9905" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=9905&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_9905"><a href="viewthread.php?tid=9905&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">猪流感肆虐，回子会员善意提醒</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2241">阿文强</a>
										</cite>
					<em>2009-4-29</em>
				</td>
				<td class="nums"><strong>44</strong> / <em>637</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=9905&goto=lastpost#lastpost">2009-4-30 12:02</a></em>
					<cite>by <a href="space.php?username=%CD%A9%BE%FD">桐君</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_10009" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=10009&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_10009"><a href="viewthread.php?tid=10009&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">韩寒拥有话语权，是网络的悲哀</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3476">井中月</a>
										</cite>
					<em>2009-4-30</em>
				</td>
				<td class="nums"><strong>44</strong> / <em>901</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=10009&goto=lastpost#lastpost">2009-5-2 22:28</a></em>
					<cite>by <a href="space.php?username=%C8%CB%C3%F1%C8%BA%D6%DA">人民群众</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_12744" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=12744&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_12744"><a href="viewthread.php?tid=12744&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">艾未未昨天在天安门</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2907">无言的山丘</a>
										</cite>
					<em>2009-6-5</em>
				</td>
				<td class="nums"><strong>44</strong> / <em>1467</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=12744&goto=lastpost#lastpost">2009-6-5 21:15</a></em>
					<cite>by <a href="space.php?username=%C2%CC%D6%DE">绿洲</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_12007" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=12007&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_12007"><a href="viewthread.php?tid=12007&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">五月三十五日的头像</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3723">mason</a>
										</cite>
					<em>2009-5-27</em>
				</td>
				<td class="nums"><strong>44</strong> / <em>2157</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=12007&goto=lastpost#lastpost">2009-6-7 11:25</a></em>
					<cite>by <a href="space.php?username=blogtd">blogtd</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_4982" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=4982&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_4982"><a href="viewthread.php?tid=4982&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">关于春夏之交活动的倡议</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2428">xiahua</a>
										</cite>
					<em>2009-2-17</em>
				</td>
				<td class="nums"><strong>44</strong> / <em>939</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=4982&goto=lastpost#lastpost">2009-2-26 17:12</a></em>
					<cite>by <a href="space.php?username=%D6%D0%C0%CF%C4%EA%C5%F3%D3%D1">中老年朋友</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_6257" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=6257&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_6257"><a href="viewthread.php?tid=6257&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">今年国防预算4806亿 增长率为14.9%</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4272">河蟹</a>
										</cite>
					<em>2009-3-4</em>
				</td>
				<td class="nums"><strong>44</strong> / <em>343</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=6257&goto=lastpost#lastpost">2009-3-6 08:41</a></em>
					<cite>by <a href="space.php?username=%D7%F1%D2%E5%CD%DE%B6%F9">遵义娃儿</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_6318" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=6318&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_6318"><a href="viewthread.php?tid=6318&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">基础教育造就心理素质 血腥慎入……</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2811">不能扔鞋的河蟹</a>
										</cite>
					<em>2009-3-5</em>
				</td>
				<td class="nums"><strong>44</strong> / <em>939</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=6318&goto=lastpost#lastpost">2009-3-8 16:56</a></em>
					<cite>by <a href="space.php?username=zama">zama</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_6482" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=6482&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_6482"><a href="viewthread.php?tid=6482&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">一个80后是怎样从右派转变到左派的</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1886">gjlawyer</a>
										</cite>
					<em>2009-3-7</em>
				</td>
				<td class="nums"><strong>44</strong> / <em>944</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=6482&goto=lastpost#lastpost">2009-3-9 13:21</a></em>
					<cite>by <a href="space.php?username=%B6%A1%B6%A1">丁丁</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_40516" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=40516&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_40516"><a href="viewthread.php?tid=40516&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">东莞卫生副局长：中央及省市领导常收到桑拿短信</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4176">天生往万</a>
										</cite>
					<em>2010-3-15</em>
				</td>
				<td class="nums"><strong>44</strong> / <em>1602</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=40516&goto=lastpost#lastpost">2010-3-18 18:57</a></em>
					<cite>by <a href="space.php?username=%C0%CF%C8%FD%BD%C7">老三角</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_40860" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=40860&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_40860"><a href="viewthread.php?tid=40860&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">美营养师试验：麦当劳汉堡放置一年金身不坏</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=852">未来他老爸</a>
										</cite>
					<em>2010-3-21</em>
				</td>
				<td class="nums"><strong>44</strong> / <em>1052</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=40860&goto=lastpost#lastpost">2010-3-22 15:32</a></em>
					<cite>by <a href="space.php?username=Diablo">Diablo</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_41224" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=41224&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_41224"><a href="viewthread.php?tid=41224&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">GoDaddy拒绝中共审查 宣布不再提供新的.CN中文域名</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=9517">老西</a>
										</cite>
					<em>2010-3-25</em>
				</td>
				<td class="nums"><strong>44</strong> / <em>1753</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=41224&goto=lastpost#lastpost">2010-3-27 17:14</a></em>
					<cite>by <a href="space.php?username=chandler0819">chandler0819</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_41443" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=41443&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_41443"><a href="viewthread.php?tid=41443&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">梵蒂冈教廷声明：内地主教勿参与不合法礼仪</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7002">luugoo</a>
										</cite>
					<em>2010-3-26</em>
				</td>
				<td class="nums"><strong>44</strong> / <em>1068</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=41443&goto=lastpost#lastpost">2010-3-29 13:04</a></em>
					<cite>by <a href="space.php?username=netsnail">netsnail</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_43054" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=43054&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_43054"><a href="viewthread.php?tid=43054&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">香港“2012年政改方案”突然出笼</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7002">luugoo</a>
										</cite>
					<em>2010-4-14</em>
				</td>
				<td class="nums"><strong>44</strong> / <em>1111</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=43054&goto=lastpost#lastpost">2010-4-19 15:25</a></em>
					<cite>by <a href="space.php?username=luugoo">luugoo</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_45593" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=45593&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_45593"><a href="viewthread.php?tid=45593&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">大庆特大杀人案  57岁老者击毙5人</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1408">becom</a>
										</cite>
					<em>2010-5-12</em>
				</td>
				<td class="nums"><strong>44</strong> / <em>1724</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=45593&goto=lastpost#lastpost">2010-5-15 21:42</a></em>
					<cite>by <a href="space.php?username=%C9%F1%D6%DD%D6%AE%D7%D3">神州之子</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_17684" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=17684&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_17684"><a href="viewthread.php?tid=17684&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">山东警察：中国人信耶稣就是违法</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=134">丁丁</a>
										</cite>
					<em>2009-7-23</em>
				</td>
				<td class="nums"><strong>44</strong> / <em>1140</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=17684&goto=lastpost#lastpost">2009-7-26 22:53</a></em>
					<cite>by <a href="space.php?username=%B1%F0%C3%FE%B9%D6%CA%E5%CA%E5">别摸怪叔叔</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_17754" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=17754&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_17754"><a href="viewthread.php?tid=17754&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">天朝传吐蕃番僧像突然解禁</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2472">Noel</a>
										</cite>
					<em>2009-7-24</em>
				</td>
				<td class="nums"><strong>44</strong> / <em>1203</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=17754&goto=lastpost#lastpost">2009-7-27 18:27</a></em>
					<cite>by <a href="space.php?username=%B4%F3%C8%CB%A3%AC%D3%D0%D0%D8%C6%F7">大人，有胸器</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_18489" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=18489&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_18489"><a href="viewthread.php?tid=18489&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">违章女：我男人说出来吓死你！</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5464">上海帅哥</a>
										</cite>
					<em>2009-8-1</em>
				</td>
				<td class="nums"><strong>44</strong> / <em>1445</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=18489&goto=lastpost#lastpost">2009-8-6 11:11</a></em>
					<cite>by <a href="space.php?username=takfiri">takfiri</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_19262" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=19262&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_19262"><a href="viewthread.php?tid=19262&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">《中国新闻周刊》独家关注公盟事件</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1886">gjlawyer</a>
										</cite>
					<em>2009-8-10</em>
				</td>
				<td class="nums"><strong>44</strong> / <em>860</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=19262&goto=lastpost#lastpost">2009-8-11 19:10</a></em>
					<cite>by <a href="space.php?username=gyakuden">gyakuden</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_19552" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=19552&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_19552"><a href="viewthread.php?tid=19552&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">西安闹市街头惊现爱党爱国黄包车，引发路人围观</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2578">闹了个运</a>
										</cite>
					<em>2009-8-12</em>
				</td>
				<td class="nums"><strong>44</strong> / <em>1028</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=19552&goto=lastpost#lastpost">2009-8-13 12:53</a></em>
					<cite>by <a href="space.php?username=dmds777">dmds777</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_19269" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=19269&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_19269"><a href="viewthread.php?tid=19269&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">九岁女孩为救领袖雕像 毅然冲进火海……</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1740">sy2124</a>
										</cite>
					<em>2009-8-10</em>
				</td>
				<td class="nums"><strong>44</strong> / <em>1031</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=19269&goto=lastpost#lastpost">2009-8-14 01:31</a></em>
					<cite>by <a href="space.php?username=Emanon">Emanon</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_19837" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=19837&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_19837"><a href="viewthread.php?tid=19837&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">国籍改变不了我是中国人的本质</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4836">louy0427</a>
										</cite>
					<em>2009-8-16</em>
				</td>
				<td class="nums"><strong>44</strong> / <em>940</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=19837&goto=lastpost#lastpost">2009-8-18 15:15</a></em>
					<cite>by <a href="space.php?username=elzzird">elzzird</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_20817" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=20817&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_20817"><a href="viewthread.php?tid=20817&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">大腕“不要钱”：《建国大业》阵容吓傻好莱坞</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=852">未来他老爸</a>
										</cite>
					<em>2009-8-28</em>
				</td>
				<td class="nums"><strong>44</strong> / <em>1211</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=20817&goto=lastpost#lastpost">2009-9-3 02:36</a></em>
					<cite>by <a href="space.php?username=%C4%E4%C3%FB">匿名</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_21312" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=21312&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_21312"><a href="viewthread.php?tid=21312&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">CCTV烧焦的大楼将拆掉</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7">张书记</a>
										</cite>
					<em>2009-9-3</em>
				</td>
				<td class="nums"><strong>44</strong> / <em>1364</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=21312&goto=lastpost#lastpost">2009-9-6 00:40</a></em>
					<cite>by <a href="space.php?username=gchj">gchj</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_17821" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=17821&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_17821"><a href="viewthread.php?tid=17821&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">“被”时代：逃不出的荒谬</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=300">rationalcrow</a>
										</cite>
					<em>2009-7-25</em>
				</td>
				<td class="nums"><strong>43</strong> / <em>830</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=17821&goto=lastpost#lastpost">2009-7-26 04:21</a></em>
					<cite>by <a href="space.php?username=%D7%F3%B0%B6%A1%FB%D3%D2%B0%B6">左岸←右岸</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_18766" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=18766&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_18766"><a href="viewthread.php?tid=18766&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">网评员：深刻揭批海外势力政治工具——许志永和他的公盟</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=85">王五毛</a>
										</cite>
					<em>2009-8-4</em>
				</td>
				<td class="nums"><strong>43</strong> / <em>806</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=18766&goto=lastpost#lastpost">2009-8-7 22:03</a></em>
					<cite>by <a href="space.php?username=luckyray">luckyray</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_19474" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=19474&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_19474"><a href="viewthread.php?tid=19474&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">金二投美 导弹转向中国</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=930">贱人渐智</a>
										</cite>
					<em>2009-8-12</em>
				</td>
				<td class="nums"><strong>43</strong> / <em>997</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=19474&goto=lastpost#lastpost">2009-8-13 13:27</a></em>
					<cite>by <a href="space.php?username=shzztt1688">shzztt1688</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_11193" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=11193&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_11193"><a href="viewthread.php?tid=11193&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">军人开车肇事</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1408">becom</a>
										</cite>
					<em>2009-5-19</em>
				</td>
				<td class="nums"><strong>43</strong> / <em>1713</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=11193&goto=lastpost#lastpost">2009-8-13 16:20</a></em>
					<cite>by <a href="space.php?username=%B7%DF%C7%F2">愤球</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_17323" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=17323&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_17323"><a href="viewthread.php?tid=17323&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">当代万岁碑</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=169">抑扬</a>
										</cite>
					<em>2009-7-19</em>
				</td>
				<td class="nums"><strong>43</strong> / <em>1186</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=17323&goto=lastpost#lastpost">2009-8-14 20:22</a></em>
					<cite>by <a href="space.php?username=%D6%BB%CA%C7%BF%B4%BF%B4">只是看看</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_19565" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=19565&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_19565"><a href="viewthread.php?tid=19565&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">梁文道：所多玛</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5978">散光</a>
										</cite>
					<em>2009-8-13</em>
				</td>
				<td class="nums"><strong>43</strong> / <em>1259</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=19565&goto=lastpost#lastpost">2009-8-15 15:35</a></em>
					<cite>by <a href="space.php?username=%B1%A1%B4%E4">薄翠</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_19574" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=19574&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_19574"><a href="viewthread.php?tid=19574&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">真理部最新指令：民政部回应地震捐款流向的报道应立即撤出</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=5759">路边社刊要</a>
										</cite>
					<em>2009-8-13</em>
				</td>
				<td class="nums"><strong>43</strong> / <em>1366</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=19574&goto=lastpost#lastpost">2009-8-20 22:50</a></em>
					<cite>by <a href="space.php?username=blacknut">blacknut</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_20508" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=20508&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_20508"><a href="viewthread.php?tid=20508&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">你的满足，我们的追求——EMS的卸货方式</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2232">老杂疫</a>
										</cite>
					<em>2009-8-25</em>
				</td>
				<td class="nums"><strong>43</strong> / <em>999</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=20508&goto=lastpost#lastpost">2009-8-26 04:01</a></em>
					<cite>by <a href="space.php?username=%CE%F7%C3%C5%B4%B5%C5%A3">西门吹牛</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_21143" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=21143&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_21143"><a href="viewthread.php?tid=21143&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">杭州之僵尸接班人</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4570">我卖糕的</a>
										</cite>
					<em>2009-9-1</em>
				</td>
				<td class="nums"><strong>43</strong> / <em>986</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=21143&goto=lastpost#lastpost">2009-9-3 04:14</a></em>
					<cite>by <a href="space.php?username=%CE%F7%C3%C5%B4%B5%C5%A3">西门吹牛</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_21177" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=21177&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_21177"><a href="viewthread.php?tid=21177&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">我军相亲大会 万余名地方女青年热捧</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=144">mfs0616</a>
										</cite>
					<em>2009-9-2</em>
				</td>
				<td class="nums"><strong>43</strong> / <em>816</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=21177&goto=lastpost#lastpost">2009-9-3 09:46</a></em>
					<cite>by <a href="space.php?username=bafield">bafield</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_32528" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=32528&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_32528"><a href="viewthread.php?tid=32528&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">大陆学生有组织有纪律的“阻击”赴台窜访的王丹</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=3202">glim</a>
										</cite>
					<em>2009-12-26</em>
				</td>
				<td class="nums"><strong>43</strong> / <em>1613</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=32528&goto=lastpost#lastpost">2009-12-30 23:45</a></em>
					<cite>by <a href="space.php?username=%D6%D0%C9%BD%CA%D7%C0%EF">中山首里</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_33748" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=33748&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_33748"><a href="viewthread.php?tid=33748&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">一周图片新闻 10.1.4-1.10</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2232">老杂疫</a>
										</cite>
					<em>2010-1-6</em>
				</td>
				<td class="nums"><strong>43</strong> / <em>948</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=33748&goto=lastpost#lastpost">2010-1-10 23:43</a></em>
					<cite>by <a href="space.php?username=%B2%BB%B0%B2%D3%DA%CA%D2">不安于室</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_33661" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=33661&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_33661"><a href="viewthread.php?tid=33661&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">外交部对“Twitter上的中国人声援伊朗民主”表态</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=7">张书记</a>
										</cite>
					<em>2010-1-5</em>
				</td>
				<td class="nums"><strong>43</strong> / <em>2169</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=33661&goto=lastpost#lastpost">2010-1-11 01:35</a></em>
					<cite>by <a href="space.php?username=%B7%CF%D6%D6%B6%B9%F4%F9">废种豆豉</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_34290" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=34290&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_34290"><a href="viewthread.php?tid=34290&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">重庆党媒盛赞审判李庄是“人民民主专政的伟大胜利”</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=9742">闲敲棋子</a>
										</cite>
					<em>2010-1-11</em>
				</td>
				<td class="nums"><strong>43</strong> / <em>926</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=34290&goto=lastpost#lastpost">2010-1-14 03:02</a></em>
					<cite>by <a href="space.php?username=%BF%D5%9A%E2">空氣</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_35362" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=35362&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_35362"><a href="viewthread.php?tid=35362&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">真理部最新指令：禁止报道“海南三名学生因拍主旋律影片身亡”</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=1258">路边社记者</a>
										</cite>
					<em>2010-1-20</em>
				</td>
				<td class="nums"><strong>43</strong> / <em>1632</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=35362&goto=lastpost#lastpost">2010-1-21 22:34</a></em>
					<cite>by <a href="space.php?username=%CE%F7%C3%C5%B4%B5%C5%A3">西门吹牛</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_35373" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=35373&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_35373"><a href="viewthread.php?tid=35373&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">广电总局主任怒指王璐瑶在“演三级”</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4570">我卖糕的</a>
										</cite>
					<em>2010-1-20</em>
				</td>
				<td class="nums"><strong>43</strong> / <em>1856</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=35373&goto=lastpost#lastpost">2010-1-22 09:42</a></em>
					<cite>by <a href="space.php?username=%BE%F8%B2%BB%B8%B6%D5%CB">绝不付账</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_35748" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=35748&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_35748"><a href="viewthread.php?tid=35748&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">海地旅行团追悼会上的央视记者</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=4359">实验小白鼠B</a>
										</cite>
					<em>2010-1-23</em>
				</td>
				<td class="nums"><strong>43</strong> / <em>1656</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=35748&goto=lastpost#lastpost">2010-1-25 14:53</a></em>
					<cite>by <a href="space.php?username=davysky">davysky</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_30749" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=30749&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_30749"><a href="viewthread.php?tid=30749&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">传，深圳小孩绑架案越来越严重</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=8767">xazei</a>
										</cite>
					<em>2009-12-11</em>
				</td>
				<td class="nums"><strong>43</strong> / <em>1630</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=30749&goto=lastpost#lastpost">2010-2-11 00:58</a></em>
					<cite>by <a href="space.php?username=%CA%C5%CB%AE%D3%CC%BF%C9%CC%BE">逝水犹可叹</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_37948" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=37948&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_37948"><a href="viewthread.php?tid=37948&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">55万“拜财神”香客挤爆武汉归元寺</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=2232">老杂疫</a>
										</cite>
					<em>2010-2-18</em>
				</td>
				<td class="nums"><strong>43</strong> / <em>784</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=37948&goto=lastpost#lastpost">2010-2-21 23:47</a></em>
					<cite>by <a href="space.php?username=%CE%C2%C8%E1%B5%C4%B4%C8%B1%AF">温柔的慈悲</a></cite>
				</td>
			</tr>
		</tbody>		<tbody id="normalthread_39485" >
			<tr>
				<td class="folder"><a href="viewthread.php?tid=39485&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC" title="新窗口打开" target="_blank"><img src="images/default/folder_common.gif" /></a></td>
				<td class="icon">
									&nbsp;								</td>
				<th class="common" >
					<label>
																				 </label>
																				<span id="thread_39485"><a href="viewthread.php?tid=39485&amp;extra=page%3D31%26amp%3Bfilter%3D0%26amp%3Borderby%3Dreplies%26amp%3Bascdesc%3DDESC">温家宝政府工作报告：政治体制不改革现代化不会成功</a></span>
																													</th>
				<td class="author">
					<cite>
											<a href="space.php?uid=11829">碧山龙子</a>
										</cite>
					<em>2010-3-5</em>
				</td>
				<td class="nums"><strong>43</strong> / <em>862</em></td>
				<td class="lastpost">
					<em><a href="redirect.php?tid=39485&goto=lastpost#lastpost">2010-3-7 12:25</a></em>
					<cite>by <a href="space.php?username=%CD%B8%C2%B6%C9%E7%BC%C7%D5%DF">透露社记者</a></cite>
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
	<div class="pages"><em>&nbsp;22278&nbsp;</em><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=1" class="first">1 ...</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=30" class="prev">&lsaquo;&lsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=29">29</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=30">30</a><strong>31</strong><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=32">32</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=33">33</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=34">34</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=35">35</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=36">36</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=37">37</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=38">38</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=32" class="next">&rsaquo;&rsaquo;</a><a href="forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page=349" class="last">... 349</a><kbd><input type="text" name="custompage" size="3" onkeydown="if(event.keyCode==13) {window.location='forumdisplay.php?fid=2&amp;filter=0&amp;orderby=replies&amp;ascdesc=DESC&amp;page='+this.value; return false;}" /></kbd></div>	</div>

  
	<div class="box">
			<span class="headactions"><a href="forumdisplay.php?fid=2&amp;page=31&amp;showoldetails=yes#online" class="nobdr"><img src="images/default/collapsed_yes.gif" alt="" /></a></span>
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
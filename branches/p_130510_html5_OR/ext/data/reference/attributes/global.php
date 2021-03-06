<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>formtarget  속성 : <?php echo TITLE_REFERENCE; ?></title>
<?php include RELATIEV_PATH.'common_inc.php'; ?>
</head>
<body>
<article id="content_desc">
	<!-- 속성 설명 -->
	<section id="info"><!-- @new Ext.XTemplate --></section>
	<!-- //속성 설명 -->
</article>

<script>
Ext.onReady(function(){
	var tplData = {
		attr: 'global',
		item: [{
			tit:'모든 HTML 요소에서 공통으로 사용되는 속성들입니다.',
			child: [
				{url:'#',item:'accesskey'},
				{url:'#',item:'class'},
				{url:'#',item:'contenteditable'},
				{url:'#',item:'contextmenu'},
				{url:'#',item:'dir'},
				{url:'#',item:'draggable'},
				{url:'#',item:'dropzone'},
				{url:'#',item:'hidden'},
				{url:'#',item:'id'},
				{url:'#',item:'lang'},
				{url:'#',item:'spellcheck'},
				{url:'#',item:'style'},
				{url:'#',item:'tabindex'},
				{url:'#',item:'title'}
			]
		},{
			tit:'모든 HTML 요소에서 사용할 수 있는 이벤트 핸들러 속성들입니다.',
			child: [
				{url:'#',item:'onabort'},
				{url:'#',item:'onafterprint'},
				{url:'#',item:'onbeforeprint'},
				{url:'#',item:'onbeforeunload'},
				{url:'#',item:'onblur'},
				{url:'#',item:'onblur (body) *'},
				{url:'#',item:'oncanplay'},
				{url:'#',item:'oncanplaythrough'},
				{url:'#',item:'onchange'},
				{url:'#',item:'onclick'},
				{url:'#',item:'oncontextmenu'},
				{url:'#',item:'oncuechange'},
				{url:'#',item:'ondblclick'},
				{url:'#',item:'ondrag'},
				{url:'#',item:'ondragend'},
				{url:'#',item:'ondragenter'},
				{url:'#',item:'ondragleave'},
				{url:'#',item:'ondragover'},
				{url:'#',item:'ondragstart'},
				{url:'#',item:'ondrop'},
				{url:'#',item:'ondurationchange'},
				{url:'#',item:'onemptied'},
				{url:'#',item:'onended'},
				{url:'#',item:'onerror'},
				{url:'#',item:'onerror (body) *'},
				{url:'#',item:'onfocus'},
				{url:'#',item:'onfocus (body) *'},
				{url:'#',item:'onfocus'},
				{url:'#',item:'onforminput'},
				{url:'#',item:'hashchange'},
				{url:'#',item:'oninput'},
				{url:'#',item:'oninvalid'},
				{url:'#',item:'onkeydown'},
				{url:'#',item:'onkeypress'},
				{url:'#',item:'onkeyup'},
				{url:'#',item:'onload'},
				{url:'#',item:'onloadeddata'},
				{url:'#',item:'onloadedmetadata'},
				{url:'#',item:'onloadstart'},
				{url:'#',item:'message'},
				{url:'#',item:'onmousedown'},
				{url:'#',item:'onmousemove'},
				{url:'#',item:'onmouseout'},
				{url:'#',item:'onmouseover'},
				{url:'#',item:'onmouseup'},
				{url:'#',item:'onmousewheel'},
				{url:'#',item:'onoffline'},
				{url:'#',item:'ononline'},
				{url:'#',item:'onpause'},
				{url:'#',item:'onplay'},
				{url:'#',item:'onplaying'},
				{url:'#',item:'onprogress'},
				{url:'#',item:'onratechange'},
				{url:'#',item:'onreadystatechange'},
				{url:'#',item:'onreset'},
				{url:'#',item:'onresize'},
				{url:'#',item:'onscroll'},
				{url:'#',item:'onseeked'},
				{url:'#',item:'onseeking'},
				{url:'#',item:'onselect'},
				{url:'#',item:'onshow'},
				{url:'#',item:'onstalled'},
				{url:'#',item:'onstorage'},
				{url:'#',item:'onsubmit'},
				{url:'#',item:'onsuspend'},
				{url:'#',item:'ontimeupdate'},
				{url:'#',item:'onunload'},
				{url:'#',item:'onvolumechange'},
				{url:'#',item:'onwaiting'}
			]
		}],
		txt: '* 기호가 붙은 이벤트 속성은 body 요소에 사용했을 때 다른 의미를 갖습니다. 그러한 요소는 같은 이름으로 window 객체의 이벤트 핸들러를 참조합니다.'
	};

	tpl3.overwrite(Ext.get('info'), tplData);
});
</script>
</body>
</html>
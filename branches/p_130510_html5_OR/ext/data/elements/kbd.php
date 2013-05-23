<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>kbd 요소 : HTML5 Open Reference Guide</title>
<link rel="stylesheet" href="../../resources/css/ext-all.css">
<link rel="stylesheet" href="../../resources/css/base.css">
<link rel="stylesheet" href="../../syntaxhighlighter_3.0.83/styles/shCore.css">
<link rel="stylesheet" href="../../syntaxhighlighter_3.0.83/styles/shThemeFadeToGrey.css">
<script src="../../syntaxhighlighter_3.0.83/scripts/shCore.js"></script>
<script src="../../syntaxhighlighter_3.0.83/scripts/shAutoloader.js"></script>
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="http://code.jquery.com/jquery-migrate-1.1.1.min.js"></script>
<script src="../../ext-all-debug.js"></script>
<script src="../../locale/ext-lang-ko.js"></script>
</head>
<body>
<article id="content_desc">
	<!-- 태그 설명 -->
	<section>
		<div>
		<h2 class="s_tit">kbd 요소: (keyboard)</h2>

		<dl class="definition">
		<dt>정의</dt>
		<dd>kbd 요소는 사용자의 입력을 의미하며 보통 키보드를 의미하지만 음성 명령과 같은 다른 입력도 가능합니다.</dd>
		</dl>

		<h3 class="s_tit">요소 레벨</h3>
		<p>Inline-Level 엘리먼트</p>

		<h3 class="s_tit">요소 카테고리</h3>
		<p>Text formatting</p>
	</section>
	<!-- //태그 설명 -->
	<!-- 샘플 코드 -->
	<section>
		<h3 class="s_tit">샘플 코드</h3>
		<pre class="brush:html">
			<!-- @기본 문법 -->
			아이디: 입력란에 <kbd>administration</kbd> 이라고 입력한다.

			<!-- @키 입력 방법을 안내하는 마크업 사용자에게 키 입력 방식을 설명하고자 할 때 각각의 키를 kbd 요소로 감싸고 조합되는 키를 kbd 요소로 다시 감싸면 하나의 입력 블럭을 의미하게 됩니다. -->
			<p>맥OS에서 화면을 캡쳐하는 단축키는 <kbd><kbd>Command</kbd>+<kbd>Shift</kbd>+<kbd>3</kbd></kbd>입니다.</p>

			<!-- @시스템 응답을 kbd 요소로 마크업하는 경우 웹사이트를 탐색하거나 웹 애플리케이션을 사용하는 사용자에게 특정한 메뉴를 선택할 것을 요구할 수 있습니다. 이때 메뉴는 키가 아니지만 kbd 요소로 마크업할 수 있습니다. 또한, 시스템이 나타내 주는 메뉴명은 samp 요소로 마크업할 수 있습니다. -->
			<p>현재 화면을 확대하는 기능은 웹브라우저 메뉴 목록 가운데 <kbd><samp>보기</samp> | <samp>확대</samp></kbd>를 선택하면 됩니다.</p>

			<!-- @하지만 다음과 같이 간단히 마크업해도 됩니다. -->
			<p>현재 화면을 확대하는 기능은 웹브라우저 메뉴 목록 가운데 <kbd>보기 | 확대</kbd>를 선택하면 됩니다.</p>
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 속성 설명 -->
	<section>
		<h3 class="s_tit">속성</h3>
		<div id="gridAttr"></div>
	</section>
	<!-- //속성 설명 -->
</article>

<script src="../../syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
<script>
Ext.onReady(function(){
	var storeData = Ext.create('Ext.data.Store',{
		fields: ['tit','desc','href'],
		data: {'items':[
			{tit:'전역 속성', desc:'공통 속성', href:'http://naver.com'}
		]},
		proxy : {
			type: 'memory',
			reader: {
				type: 'json',
				root: 'items'
			}
		}
	});

	var grid = Ext.create('Ext.grid.Panel', {
		renderTo: Ext.get('gridAttr'),
		title: '요소 속성 목록',
		store: storeData,
		columns: [
			{header:'속성명', xtype:'templatecolumn', tpl:'<a href="{href}">{tit}</a>'},
			{header:'설명', dataIndex:'desc', flex:1}
		]
	})
});
</script>
</body>
</html>
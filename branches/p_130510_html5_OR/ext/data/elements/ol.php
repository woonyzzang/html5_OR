<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>ol 요소 : HTML5 Open Reference Guide</title>
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
		<h2 class="s_tit">ol 요소: (ordered list)</h2>

		<dl class="definition">
		<dt>정의</dt>
		<dd>ol 요소는 순서가 있는 목록을 나타냅니다. 목록을 구성하는 것은 li 요소이며 li 요소의 순서를 바꾸면 문서의 의미가 달라질 수 있습니다.</dd>
		</dl>

		<h3 class="s_tit">요소 레벨</h3>
		<p>Block-Level 엘리먼트</p>

		<h3 class="s_tit">요소 카테고리</h3>
		<p>List</p>
	</section>
	<!-- //태그 설명 -->
	<!-- 샘플 코드 -->
	<section>
		<h3 class="s_tit">샘플 코드</h3>
		<pre class="brush:html">
			<p>인기 프로그래밍 언어(상위 5등)</p>
			<ol>
			<li>JavaScript</li>
			<li>Java</li>
			<li>PHP</li>
			<li>Python</li>
			<li>Ruby</li>
			</ol>
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
			{tit:'전역 속성', desc:'공통 속성', href:'http://naver.com'},
			{tit:'reversed', desc:'불리언 속성으로 속성 사용 시 리스트는 역순(…, 3, 2, 1)으로 표시됩니다.', href:'http://naver.com'},
			{tit:'start', desc:'목록 중 첫 번째 시작 번호를 지정할 수 있습니다. 반드시 유효한 정수형 숫자를 사용해야 합니다.', href:'http://naver.com'},
			{tit:'type', desc:'아이템별 마커 종류에 의미를 부여하기 위해서 type 속성을 사용할 수 있습니다. 기본값은 decimal입니다.', href:'http://naver.com'}
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
	});
});
</script>
</body>
</html>
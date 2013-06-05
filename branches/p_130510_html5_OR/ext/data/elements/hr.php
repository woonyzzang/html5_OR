<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>hr 요소 : HTML5 Open Reference Guide</title>
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
		<h2 class="s_tit">hr 요소: (thematic break)</h2>

		<dl class="definition">
		<dt>정의</dt>
		<dd>hr 요소는 문단 레벨에서 주제의 분리를 나타냅니다. 이 요소는 단순히 문단의 구분이 아닌 전체 문서의 흐름에서 주제가 확연히 다른 영역끼리의 구분을 위해 사용합니다.</dd>
		<dd>섹션 사이에는 hr 요소가 필요하지 않습니다. section 요소와 h1 요소가 테마의 변화를 암시하고 있기 때문입니다. 또한, hr 요소는 문서의 개요에는 영향을 미치지 않습니다.</dd>
		</dl>

		<h3 class="s_tit">요소 레벨</h3>
		<p>Blank 엘리먼트</p>

		<h3 class="s_tit">요소 카테고리</h3>
		<p>Structural Elements</p>
	</section>
	<!-- //태그 설명 -->
	<!-- 샘플 코드 -->
	<section>
		<h3 class="s_tit">샘플 코드</h3>
		<pre class="brush:html">
			<p>HTML은 웹 페이지를 기술하기위한 언어입니다...</p>
			<hr>
			<p>CSS가 HTML 요소를 표시하는 방법을 정의합니다...</p>
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
			{tit:'전역속성', desc:'공통 속성', href:'http://naver.com'}
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
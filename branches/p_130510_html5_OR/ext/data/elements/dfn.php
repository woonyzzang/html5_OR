<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>dfn 요소 : HTML5 Open Reference Guide</title>
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
		<h2 class="s_tit">dfn 요소: (defining instance)</h2>

		<dl class="definition">
		<dt>정의</dt>
		<dd>dfn 요소는 문서내에서 개념(단어)의 대한 용어 정의를 나타내는 요소입니다. dfn 요소의 가장 가까운 조상 요소(문단, 정의 목록 그룹, 섹션)는 dfn 요소를 사용한 개념(단어)에 대한 설명을 포함해야 됩니다.</dd>
		<dd>&#39;정의되는 개념(단어)&#39;은 마크업에 따라 결정됩니다. (title 속성이 없고 자식 노드로 텍스트 노드가 없으며 자식 요소로 abbr 요소를 사용할 경우 : abbr 요소의 title 속성의 값)</dd>
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
			<!-- @dfn 요소에 title 속성이 없으면 textContent인 'HTML'이 정의되는 개념(단어)이 됩니다. -->
			<p><dfn>HTML</dfn>는 웹 페이지를 위한 마크업 언어입니다.</p>

			<!-- @텍스트 노드가 없으며 자식 요소로 title 속성이 있는 abbr 요소를 사용 하면 abbr 요소의 title 속성값인 'HyperText Markup Language'이 정의되는 개념(단어)입니다. -->
			<p><dfn><abbr title="HyperText Markup Language">HTML</abbr></dfn>은 웹 페이지를 위한 마크업 언어입니다.</p>

			<!-- @dfn 요소에 title 속성이 있으면 title 속성 값인 'HyperText Markup Language'이 정의되는 개념(단어)입니다. -->
			<p><dfn title="HyperText Markup Language">HTML</dfn>은 웹 페이지를 위한 마크업 언어입니다.</p>
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
			{tit:'title', desc:'dfn 태그로 마크업된 요소의 개념을 정의합니다.', href:'http://naver.com'}
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
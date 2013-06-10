<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>th 요소 : HTML5 Open Reference Guide</title>
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
		<h2 class="s_tit">th 요소: (table header cell)</h2>

		<dl class="definition">
		<dt>정의</dt>
		<dd>th 요소는 table의 헤더 셀을 나타냅니다.</dd>
		</dl>

		<h3 class="s_tit">요소 레벨</h3>
		<p>Block-Level 엘리먼트</p>

		<h3 class="s_tit">요소 카테고리</h3>
		<p>Table</p>
	</section>
	<!-- //태그 설명 -->
	<!-- 샘플 코드 -->
	<section>
		<h3 class="s_tit">샘플 코드</h3>
		<pre class="brush:html">
			<table>
			<caption>표 목록 요약</caption>
			<tbody>
			<tr>
			<th scope="row">셀의 제목을 선언해주세요.</th>
			<td>셀의 데이터를 선언해주세요.</td>
			</tr>
			</tbody>
			</table>
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
			{tit:'colspan', desc:'해당 셀이 미치는 범위의 열 수를 지정합니다.', href:'http://naver.com'}
			{tit:'rowspan', desc:'해당 셀이 미치는 범위의 행 수를 지정합니다.', href:'http://naver.com'},
			{tit:'header', desc:'해당 셀에 대응하는 헤더 셀(th 요소)의 id 콘텐츠 속성의 값을 지정합니다.', href:'http://naver.com'},
			{tit:'scope', desc:'해당 헤더 셀이 영향을 미치는 셀의 범위를 나타내는 키워드를 지정합니다.', href:'http://naver.com'}
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
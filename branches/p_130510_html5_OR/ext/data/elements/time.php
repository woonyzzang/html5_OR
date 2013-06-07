<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>time 요소 : HTML5 Open Reference Guide</title>
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
		<h2 class="s_tit">time 요소: (date and&frasl;or time)</h2>

		<dl class="definition">
		<dt>정의</dt>
		<dd>time 요소는 24시간에서의 시간, 혹은 그레고리력에서의 정밀한 날짜(선택적으로, 타임존 옵셋 정보를 포함하여)를 나타냅니다.</dd>
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
			<p>난 보통 간식을 <time>17:30</time>에 먹는다.</p>

			<!-- @Date만 나타낼 경우 -->
			<time xsi:type="xsd:date" datetime="2011-03-08" title="Mardi Gras (Fat Tuesday), 2011">March 8, 2011</time>
			is the latest in the year Mardi Gras falls until
			<time xsi:type="xsd:date" datetime="2011-03-09" title="Mardi Gras (Fat Tuesday), 2038" style="cursor:help">March, 2038</time>

			<!-- @Date와 Time을 나타낼 경우 -->
			<time xsi:type="xsd:dateTime" datetime="2010-12-31T23:59:59-04:00" title="One second before midnight, New Years Eve, 2010" style="cursor:help">12/31/2010 11:59:59 PM EST</time>

			<!-- @Time 만 나타낼 경우 -->
			<time xsi:type="xsd:time" datetime="12:00:00-05:00" title="Noon Eastern time" style="cursor:help">12:00 PM ET</time>
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
			{tit:'datetime', desc:'날짜, 시간을 표시합니다.', href:'http://naver.com'},
			{tit:'pubdate', desc:'문서의 작성 날짜를 표시합니다.', href:'http://naver.com'}
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
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>shape 속성 : HTML5 Open Reference Guide</title>
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
	<!-- 속성 설명 -->
	<section>
		<h2 class="s_tit">shape 속성</h2>

		<dl class="definition">
		<dt>정의</dt>
		<dd>shape 속성은 area 요소에서 사용되며 이미지 맵의 형태를 정의합니다.</dd>
		</dl>

		<h3 class="s_tit">속성 값</h3>
		<p>나열 속성 값을 가지며, 생략된 경우 기본 값은 사각형(rect) 상태가 됩니다.</p>
		<div id="gridAttr"></div>
	</section>
	<!-- //속성 설명 -->
	<!-- 샘플 코드 -->
	<section>
		<h3 class="s_tit">샘플 코드</h3>
		<pre class="brush:html">
			<area shape="circle" coords="154,94,49" href="#" alt="@대체 텍스트">
			<area shape="rect" coords="19,48,101,143" href="#" alt="@대체 텍스트">
			<area shape="poly" coords="216,60,225,85,217,113,247,126" href="#" alt="@대체 텍스트">
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/the-map-element.html#attr-area-shape" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="../../syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
<script>
Ext.onReady(function(){
	var storeData = Ext.create('Ext.data.Store',{
		fields: ['keyword','desc', 'note'],
		data: {'items':[
			{keyword:'circle', desc:'원', note:'3개의 정수를 갖습니다.'},
			{keyword:'poly', desc:'다각형', note:'최소 6개의 정수를 갖습니다.'},
			{keyword:'rect', desc:'사각형', note:'4개의 정수를 갖습니다.'},
			{keyword:'default', desc:'기본 값', note:'coords 속성을 가질 수 없습니다.'}
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
		title: '속성 정의 목록',
		store: storeData,
		columns: [
			{header:'키워드', dataIndex:'keyword'},
			{header:'설명', dataIndex:'desc'},
			{header:'노트', dataIndex:'note', flex:1}
		]
	})
});
</script>
</body>
</html>
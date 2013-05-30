<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>meta 요소 : HTML5 Open Reference Guide</title>
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
		<h2 class="s_tit">meta 요소: (metadata)</h2>

		<dl class="definition">
		<dt>정의</dt>
		<dd>meta 요소는 title 요소나 base 요소, link 요소, style 요소, script 요소로 표현할 수 없는 문서의 핵심어, 설명, 저자 등 브라우저 및 검색 엔진의 로봇 등에게 메타 정보를 제공 및 다양한 메타데이터를 표시합니다. 내장 스크립트와 CSS 정보, 스크립트와 CSS 파일 링크 정보뿐만 아니라 검색 엔진을 위한 해당 문서의 검색 키워드 정보도 담을 수 있습니다.</dd>
		</dl>

		<h3 class="s_tit">요소 레벨</h3>
		<p>Inline-Level 엘리먼트</p>

		<h3 class="s_tit">요소 카테고리</h3>
		<p>Meta Info</p>
	</section>
	<!-- //태그 설명 -->
	<!-- 샘플 코드 -->
	<section>
		<h3 class="s_tit">샘플 코드</h3>
		<pre class="brush:html">
			&lt;head&gt;
			<meta charset="utf-8">
			<meta name="author" content="Joe Seung Woon">
			<meta name="description" content="HTML5 Open References tutorials">
			<meta name="keywords" content="HTML,CSS,JavaScript">
			&lt;/head&gt;
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
			{tit:'name', desc:'문서의 메타데이터를 설정합니다.', href:'http://naver.com'},
			{tit:'http-equiv', desc:'전처리구문 지시자입니다.', href:'http://naver.com'},
			{tit:'content', desc:'name 속성이나 http-equiv 속성을 썼을 때. 이 속성의 의미는 때에 따라 다릅니다.', href:'http://naver.com'},
			{tit:'charset', desc:'문서에서 사용하는 문자 인코딩 방식을 명시합니다. XML문서에서는 반드시 UTF-8을 써야 합니다.', href:'http://naver.com'}
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
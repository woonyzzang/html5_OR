<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>iframe 요소 : HTML5 Open Reference Guide</title>
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
		<h2 class="s_tit">iframe 요소: (inline frame)</h2>

		<dl class="definition">
		<dt>정의</dt>
		<dd>iframe 요소는 html 안에 다른 페이지의 문서를 불러오는데 사용됩니다. src과 srcdoc으로 중첩된 문맥이 포함된 페이지 주소나, 내용을 나타냅니다.</dd>
		</dl>

		<h3 class="s_tit">요소 레벨</h3>
		<p>Inline-Level 엘리먼트</p>

		<h3 class="s_tit">요소 카테고리</h3>
		<p>Frame &amp; window</p>
	</section>
	<!-- //태그 설명 -->
	<!-- 샘플 코드 -->
	<section>
		<h3 class="s_tit">샘플 코드</h3>
		<pre class="brush:html">
			<!-- 기본 -->
			<iframe src="@문서파일 경로"></iframe>

			<!-- 지원하지 않는 브라우저 고려시 -->
			<iframe src="@문서파일 경로">
				<p>Your browser does not support iframes.</p>
			</iframe>
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
			{tit:'src', desc:'중첩된 문맥이 포함된 페이지 주소를 정의합니다.', href:'http://naver.com'},
			{tit:'srcdoc', desc:'중첩된 문맥이 포함된 내용을 정의합니다.', href:'http://naver.com'},
			{tit:'name', desc:'중첩된 문맥의 이름을 정의합니다.', href:'http://naver.com'},
			{tit:'sandbox', desc:'iframe 요소에 위치한 내용의 제한을 설정합니다.', href:'http://naver.com'},
			{tit:'seamless', desc:'iframe 요소의 문맥이 문서의 일부분인것처럼 렌더링합니다.', href:'http://naver.com'},
			{tit:'width', desc:'요소의 너비를 정의합니다.', href:'http://naver.com'},
			{tit:'height', desc:'요소의 높이를 정의합니다.', href:'http://naver.com'}
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
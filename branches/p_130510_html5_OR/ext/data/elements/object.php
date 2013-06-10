<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>object 요소 : HTML5 Open Reference Guide</title>
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
		<h2 class="s_tit">object 요소: (generic external content)</h2>

		<dl class="definition">
		<dt>정의</dt>
		<dd>object 요소는 이미지, 오디오, 비디오, 자바애플릿, 액티브X, PDF, 플래시 등과 같은 개체, 중첩된 브라우징 문맥, 플러그인 등 외부 자원을 나타낼 수 있습니다.</dd>
		</dl>

		<h3 class="s_tit">요소 레벨</h3>
		<p>Block-Level 엘리먼트</p>

		<h3 class="s_tit">요소 카테고리</h3>
		<p>HTML Basic</p>
	</section>
	<!-- //태그 설명 -->
	<!-- 샘플 코드 -->
	<section>
		<h3 class="s_tit">샘플 코드</h3>
		<pre class="brush:html">
			<!-- @플래시 파일을 포함하는 object 요소를 사용 -->
			&lt;object width="400" height="400" data="@파일명"&gt;&lt;/object&gt;
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
			{tit:'data', desc:'자원의 주소를 명시합니다.', href:'http://naver.com'},
			{tit:'type', desc:'자원의 타입을 명시합니다.', href:'http://naver.com'},
			{tit:'name', desc:'문맥 이름을 정의 합니다.', href:'http://naver.com'},
			{tit:'usemap', desc:'외부 자원이 이미지인 경우 이미지 맵과 연결합니다.', href:'http://naver.com'},
			{tit:'form', desc:'명시적으로 폼 소유자를 정의합니다.', href:'http://naver.com'},
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
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>p 요소 : HTML5 Open Reference Guide</title>
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
		<h2 class="s_tit">p 요소: (paragraphy)</h2>

		<dl class="definition">
		<dt>정의</dt>
		<dd>p 요소는 문단을 나타냅니다.</dd>
		</dl>

		<h3 class="s_tit">요소 레벨</h3>
		<p>Block-Level 엘리먼트</p>

		<h3 class="s_tit">요소 카테고리</h3>
		<p>Structural Elements</p>
	</section>
	<!-- //태그 설명 -->
	<!-- 샘플 코드 -->
	<section>
		<h3 class="s_tit">샘플 코드</h3>
		<pre class="brush:html">
			<p>웹의 힘은 보편성에 있다.</p>

			<!-- @요소가 적절하지 않은 경우: p 요소를 대신하여 보다 적합한 요소가 있다면 그것을 사용합니다. 이런 경우에는 p 요소를 사용하지 않습니다. -->
			<!-- @최종 수정일과 연락처 정보를 담고 있는 섹션을 다음과 같이 마크업한 경우: -->
			<section>
				<p>최종 수정일: 2011-02-14</p>
				<p>이 글에 대한 문의는 <a href="mailto:seungwoonjjang@gmail.com">운영자 메일</a>로 전달해 주세요.</p>
			</section>

			<!-- @아래와 같이 최종 수정일은 footer 요소로, 연락처 정보는 address 요소로 마크업하는 것이 더 좋습니다. -->
			<section>
				<footer>최종 수정일: 2011-02-14</footer>
				<address>이 글에 대한 문의는 <a href="mailto:seungwoonjjang@gmail.com">운영자 메일</a>로 전달해 주세요.</address>
			</section>
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
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>select 요소 : HTML5 Open Reference Guide</title>
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
		<h2 class="s_tit">select 요소: (option-selection form control)</h2>

		<dl class="definition">
		<dt>정의</dt>
		<dd>select 요소는 폼에서 사용자가 선택할 수 있는 옵션의 목록을 나타냅니다.</dd>
		</dl>

		<h3 class="s_tit">요소 레벨</h3>
		<p>Inline-Level 엘리먼트</p>

		<h3 class="s_tit">요소 카테고리</h3>
		<p>From</p>
	</section>
	<!-- //태그 설명 -->
	<!-- 샘플 코드 -->
	<section>
		<h3 class="s_tit">샘플 코드</h3>
		<pre class="brush:html">
			<select title="좋아하는 색상 선택">
			<option value="red">빨간색</option>
			<option value="green">녹색</option>
			<option value="blue">파란색</option>
			</select>
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
			{tit:'autofocus', desc:'페이지가 로드될 때 요소가 자동으로 포커스를 받습니다.', href:'http://naver.com'},
			{tit:'disabled', desc:'화면에 표시되지만 조작할 수는 없게 합니다.', href:'http://naver.com'},
			{tit:'form', desc:'폼 소유자를 명시적으로 지정합니다.', href:'http://naver.com'},
			{tit:'multiple', desc:'option 요소를 여러 개 선택할 수 있습니다.', href:'http://naver.com'},
			{tit:'name', desc:'폼 제출 시에 사용되는 폼 컨트롤의 이름을 나타냅니다.', href:'http://naver.com'},
			{tit:'required', desc:'꼭 필요한 요소임을 나타냅니다. 요소에 값을 지정하지 않으면 폼을 제출할 수 없습니다.', href:'http://naver.com'},
			{tit:'size', desc:'기본적으로 화면에 몇 개의 option을 표시할지 정합니다. 기본값은 1이며, multiple 속성이 있으면 4가 기본값입니다.', href:'http://naver.com'}
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
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>optgroup 요소 : HTML5 Open Reference Guide</title>
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
		<h2 class="s_tit">optgroup 요소: (group of options)</h2>

		<dl class="definition">
		<dt>정의</dt>
		<dd>optgroup 요소는 레이블이 같은 select 요소에 포함된 option 요소의 그룹입니다. label 속성의 값으로 이름을 결정하며 사용자 인터페이스에서도 label 속성의 값을 씁니다.</dd>
		</dl>

		<h3 class="s_tit">요소 레벨</h3>
		<p>Block-Level 엘리먼트</p>

		<h3 class="s_tit">요소 카테고리</h3>
		<p>Form</p>
	</section>
	<!-- //태그 설명 -->
	<!-- 샘플 코드 -->
	<section>
		<h3 class="s_tit">샘플 코드</h3>
		<pre class="brush:html">
			<select>
			<optgroup label="에스프레소">
			<option>카페 아메리카노</option>
			<option>카페 모카</option>
			<option>카페 라떼</option>
			<option>에스프레소</option>
			<option>에스프레소 마키아또</option>
			<option>카푸치노</option>
			</optgroup>
			<optgroup label="프라푸치노">
			<option>커피 프라푸치노</option>
			<option>모카 프라푸치노</option>
			<option>에스프레소 프라푸치노</option>
			<option>카라멜 프라푸치노</option>
			</optgroup>
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
			{tit:'disabled', desc:'그룹 전체 비활성합니다.', href:'http://naver.com'},
			{tit:'label', desc:'그룹의 이름을 정의합니다.', href:'http://naver.com'}
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
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>form 요소 : HTML5 Open Reference Guide</title>
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
		<h2 class="s_tit">form 요소: (user-submittable form)</h2>

		<dl class="definition">
		<dt>정의</dt>
		<dd>form 요소는 폼과 관련된 요소의 집합을 나타냅니다. 그중 일부는 서버에 전송하여 처리할 변경 가능 한 값을 나타냅니다.</dd>
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
			<form action="#" target="_self" method="get">
				First name: <input type="text" name="fname">
				Last name: <input type="text" name="lname">
				<input type="submit" value="Submit">
			</form>
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
			{tit:'accept-charset', desc:'폼을 전송할 때 사용할 문자 인코딩 방법입니다. utf-8, euc-kr… 등을 값을 가집니다.', href:'http://naver.com'},
			{tit:'name', desc:'폼 제출 시에 사용되는 폼 컨트롤의 이름을 나타냅니다.', href:'http://naver.com'},
			{tit:'autocomplete', desc:'폼 내부 요소의 자동완성 기능을 명시합니다.', href:'http://naver.com'},
			{tit:'action', desc:'폼을 전송할 URL을 입력합니다.', href:'http://naver.com'},
			{tit:'enctype', desc:'폼을 전송할 때 사용할 인코딩 방법을 정의합니다.', href:'http://naver.com'},
			{tit:'method', desc:'폼을 전송할 방식을 지정합니다.', href:'http://naver.com'},
			{tit:'novalidate', desc:'폼을 전송하기 전에 유효성검사를 할 것인지 명시합니다.', href:'http://naver.com'},
			{tit:'target', desc:'action 속성의 URL을 열 위치를 지정합니다.', href:'http://naver.com'}
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
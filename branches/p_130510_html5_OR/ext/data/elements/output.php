<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>output 요소 : HTML5 Open Reference Guide</title>
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
		<h2 class="s_tit">option 요소: (result of a calculation in a form)</h2>

		<dl class="definition">
		<dt>정의</dt>
		<dd>output 요소는 계산의 결과를 나타냅니다.</dd>
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
			<form>
			<p>상품 가격: 10,000원</p>
			<p>
				<label for="num">구매 수량:</label>
				<input id="num" name="numb" type="number" min="1" value="1">
			</p>
			<p>
				<label>총 상품 금액:</label>
				<output name="result" onforminput="value= 10000 * numb.valueAsNumber" for="num"></output>
			</p>
			</form>

			<form oninput="x.value=parseInt(a.value) + parseInt(b.value)">
			0 <input type="range" id="a" value="50"> 100 + <input type="number" id="b" value="50"> = <output name="x" for="a b"></output>
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
			{tit:'for', desc:'계산의 결과와 계산에 사용되었거나 계산에 영향을 미친 값을 나타내는 요소를 명시적으로 연결시켜줍니다.', href:'http://naver.com'},
			{tit:'form', desc:'폼 소유자와 요소를 명시적으로 연결시켜줍니다.', href:'http://naver.com'},
			{tit:'name', desc:'폼 제출시에 사용되는 폼 컨트롤의 이름을 나타냅니다.', href:'http://naver.com'}
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
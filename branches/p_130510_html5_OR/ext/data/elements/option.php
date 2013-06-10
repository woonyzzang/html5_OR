<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>option 요소 : HTML5 Open Reference Guide</title>
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
		<h2 class="s_tit">option 요소: (option)</h2>

		<dl class="definition">
		<dt>정의</dt>
		<dd>option 요소는 select 요소의 옵션이나 datalist 요소가 나타내는 제시 목록의 부분을 나타냅니다.</dd>
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
			<label for="baseball_list">야구단</label>
			<select id="baseball_list">
			<option value="lg" label="LG">LG 트윈스</option>
			<option value="doosan" label="두산">두산 베어스</option>
			<option value="kia" label="KIA" selected>KIA 타이거즈</option>
			<option value="sk" label="SK">SK 와이번스</option>
			<option value="samsung" label="삼성">삼성 라이온스</option>
			<option value="hwanhaw" label="한화">한화 이글스</option>
			<option value="nexen" label="넥센">넥센 히어로즈</option>
			<option value="lotte" label="롯데">롯데 자이언츠</option>
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
			{tit:'disabled', desc:'옵션을 비활성합니다.', href:'http://naver.com'},
			{tit:'selected', desc:'옵션이 선택되었는지를 나타냅니다.', href:'http://naver.com'},
			{tit:'label', desc:'요소의 레이블을 나타냅니다.', href:'http://naver.com'},
			{tit:'value', desc:'요소의 값을 나타냅니다.', href:'http://naver.com'}
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
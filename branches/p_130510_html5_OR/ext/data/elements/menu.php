<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>menu 요소 : HTML5 Open Reference Guide</title>
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
		<h2 class="s_tit">menu 요소: (list of commands)</h2>

		<dl class="definition">
		<dt>정의</dt>
		<dd>menu 요소는 컨텍스트 메뉴와 툴바를 정의하는 것으로 command 요소, button 요소등을 이용한 커맨드 목록을 나타냅니다.</dd>
		</dl>

		<h3 class="s_tit">요소 레벨</h3>
		<p>Block-Level 엘리먼트</p>

		<h3 class="s_tit">요소 카테고리</h3>
		<p>List</p>
	</section>
	<!-- //태그 설명 -->
	<!-- 샘플 코드 -->
	<section>
		<h3 class="s_tit">샘플 코드</h3>
		<pre class="brush:html">
			<menu label="마실것">
			<li><input type="radio" name="drinks">아메리카노</li>
			<li><input type="radio" name="drinks">카페 라떼</li>
			<li><input type="radio" name="drinks">카페 모카</li>
			<li><input type="radio" name="drinks">콜라</li>
			<li><input type="radio" name="drinks">녹차</li>
			<li><input type="radio" name="drinks">우유</li>
			</menu>

			<menu type="toolbar">
			<li>
				<menu label="File">
				<button type="button" onclick="file_new()">New...</button>
				<button type="button" onclick="file_open()">Open...</button>
				<button type="button" onclick="file_save()">Save</button>
				</menu>
			</li>
			<li>
				<menu label="Edit">
				<button type="button" onclick="edit_cut()">Cut</button>
				<button type="button" onclick="edit_copy()">Copy</button>
				<button type="button" onclick="edit_paste()">Paste</button>
				</menu>
			</li>
			</menu>
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
			{tit:'type', desc:'선언되는 메뉴의 종류이며, 기본값은 list 입니다.', href:'http://naver.com'},
			{tit:'label', desc:'메뉴에 레이블을 부여합니다.', href:'http://naver.com'}
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
	});
});
</script>
</body>
</html>
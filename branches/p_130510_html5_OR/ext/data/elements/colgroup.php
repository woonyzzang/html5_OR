<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>colgroup 요소 : HTML5 Open Reference Guide</title>
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
		<h2 class="s_tit">colgroup 요소: (table column group)</h2>

		<dl class="definition">
		<dt>정의</dt>
		<dd>colgroup 요소는 표 안에서 셀(열)하나 이상의 행의 그룹을 나타냅니다.</dd>
		</dl>

		<h3 class="s_tit">요소 레벨</h3>
		<p>Table-column-group-Level 엘리먼트</p>

		<h3 class="s_tit">요소 카테고리</h3>
		<p>Table</p>
	</section>
	<!-- //태그 설명 -->
	<!-- 샘플 코드 -->
	<section>
		<h3 class="s_tit">샘플 코드</h3>
		<pre class="brush:html">
			<table>
			<caption>월별지출내역</caption>
			<colgroup>
			<col span="2">
			<col>
			</colgroup>
			<thead>
			<tr>
			<th scope="col">날짜</th>
			<th scope="col">지출내역</th>
			<th scope="col">금액</th>
			</tr>
			</thead>
			<tbody>
			<tr>
			<td>09-20</td>
			<td>점심</td>
			<td>5,000원</td>
			</tr>
			</tbody>
			</table>
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
			{tit:'span', desc:'연관된 열의 개수를 정의합니다.', href:'http://naver.com'}
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
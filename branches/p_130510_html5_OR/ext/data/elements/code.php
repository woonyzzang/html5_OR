<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>code 요소 : HTML5 Open Reference Guide</title>
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
		<h2 class="s_tit">code 요소: (code fragment)</h2>

		<dl class="definition">
		<dt>정의</dt>
		<dd>code 요소는 컴퓨터 코드의 일부분을 정의합니다. XML 요소 이름, 파일이름, 컴퓨터 프로그램, 기타 컴퓨터가 인식할 수 있는 것을 포함합니다. 마크업하는 컴퓨터 코드의 언어를 나타내는 정형화된 방법이 없지만, code 요소로 컴퓨터 언어를 마크업하고자 하는 경우 - 예를 들어, 구문 강조 스크립트가 제대로 동작하기를 원하는 경우 - code 요소에 language- 전치사로 시작하는 클래스명을 부여할 수 있습니다.</dd>
		</dl>

		<h3 class="s_tit">요소 레벨</h3>
		<p>Inline-Level 엘리먼트</p>

		<h3 class="s_tit">요소 카테고리</h3>
		<p>Text formatting</p>
	</section>
	<!-- //태그 설명 -->
	<!-- 샘플 코드 -->
	<section>
		<h3 class="s_tit">샘플 코드</h3>
		<pre class="brush:html">
			<p><code class="language-pascal">code</code> 요소는 컴퓨터 코드의 조각을 나타냅니다.</p>
			<p><code>robotSnowman</code> 객체에서 <code>activate()</code> 메서드를호출하면 로봇의 눈에 불이 켜집니다.</p>
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
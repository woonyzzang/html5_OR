<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>type 속성 (command) : HTML5 Open Reference Guide</title>
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
	<!-- 속성 설명 -->
	<section>
		<h2 class="s_tit">type 속성 (command)</h2>

		<dl class="definition">
		<dt>정의</dt>
		<dd>type 속성으로 행동에 관한 일반적 명령, 옵션과 같은 토글목록, 목록에서 하나의 아이템을 선택하는 명령의 종류를 지정합니다.</dd>
		<dd>속성은 3개의 키워드 command 상태, checkbox 상태, radio 상태를 각각 나타냅니다. 속성을 생략하였다면 기본 값은 command가 됩니다.</dd>
		</dl>

		<h3 class="s_tit">속성 값</h3>
		<div id="gridAttr"></div>
	</section>
	<!-- //속성 설명 -->
	<!-- 샘플 코드 -->
	<section>
		<h3 class="s_tit">샘플 코드</h3>
		<pre class="brush:html">
			<command type="radio" checked="checked" label="왼쪽">
			<command type="radio" label="오른쪽">
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/interactive-elements.html#attr-command-type" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="../../syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
<script>
Ext.onReady(function(){
	var storeData = Ext.create('Ext.data.Store',{
		fields: ['keyword','desc'],
		data: {'items':[
			{keyword:'command', desc:'연결된 액션을 갖는 일반적인 명령을 나타냅니다.'},
			{keyword:'checkbox', desc:'요소는 토글 가능한 옵션 또는 상태를 나타냅니다.'},
			{keyword:'radio', desc:'목록중 하나의 아이템을 고르는 선택을 나타냅니다.'}
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
		title: '속성 정의 목록',
		store: storeData,
		columns: [
			{header:'키워드', dataIndex:'keyword'},
			{header:'설명', dataIndex:'desc', flex:1}
		]
	});
});
</script>
</body>
</html>
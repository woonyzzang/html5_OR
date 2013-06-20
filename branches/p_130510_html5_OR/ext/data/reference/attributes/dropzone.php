<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>dropzone 속성 : HTML5 Open Reference Guide</title>
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
		<h2 class="s_tit">dropzone 속성</h2>

		<dl class="definition">
		<dt>정의</dt>
		<dd>dropzone 속성은 드래그된 데이터를 드롭할 때 복사, 이동, 링크합니다.</dd>
		</dl>

		<h3 class="s_tit">속성 값</h3>
		<p>속성값은 공백문자로 구분된 유일한 토큰 목록이며 순서는 상관 없습니다. 대소문자를구분하지 않는 아스키 값을 사용합니다.</p>
		<div id="gridAttr"></div>
		<p>값을 명시하지 않으면 copy로 간주합니다.</p>
	</section>
	<!-- //속성 설명 -->
	<!-- 샘플 코드 -->
	<section>
		<h3 class="s_tit">샘플 코드</h3>
		<pre class="brush:html">
			<div dropzone="copy f:image/png f:image/gif f:image/jpeg" ondrop="receive(event, this)">
				<p>Drop an image here to have it displayed.</p>
			</div>
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/dnd.html#the-draggable-attribute" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="../../syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
<script>
Ext.onReady(function(){
	var storeData = Ext.create('Ext.data.Store',{
		fields: ['keyword','content'],
		data: {'items':[
			{keyword:'copy', content:'요소에 아이템을 드롭하는 것은 드래그된 데이터를 복사함을 의미합니다.'},
			{keyword:'move', content:'요소에 아이템을 드롭하는 것은 드래그된 데이터를 이동함을 의미합니다.'},
			{keyword:'link', content:'요소에 아이템을 드롭하는 것은 원래의 데이터로 링크함을 의미합니다.'}
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
			{header:'내용', dataIndex:'content', flex:1}
		]
	})
});
</script>
</body>
</html>
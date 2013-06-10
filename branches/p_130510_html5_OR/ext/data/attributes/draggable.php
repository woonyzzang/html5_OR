<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>draggable 속성 : HTML5 Open Reference Guide</title>
<link rel="stylesheet" href="../../resources/css/ext-all.css">
<link rel="stylesheet" href="../../resources/css/base.css">
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="http://code.jquery.com/jquery-migrate-1.1.1.min.js"></script>
<script src="../../ext-all-debug.js"></script>
<script src="../../locale/ext-lang-ko.js"></script>
</head>
<body>
<article id="content_desc">
	<!-- 태그 설명 -->
	<section>
		<h2 class="s_tit">draggable 속성</h2>

		<dl class="definition">
		<dt>정의</dt>
		<dd>draggable 속성은 요소를 드래그시킵니다.</dd>
		</dl>

		<h3 class="s_tit">속성 값</h3>
		<p>속성 값은 true, false, auto 키워드를 갖습니다.</p>
		<div id="gridAttr"></div>
	</section>
	<!-- //태그 설명 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/dnd.html#the-draggable-attribute" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script>
Ext.onReady(function(){
	var storeData = Ext.create('Ext.data.Store',{
		fields: ['status','desc'],
		data: {'items':[
			{status:'true', desc:'요소를 드래그할 수 있습니다.'},
			{status:'false', desc:'요소를 드래그할 수 없습니다.'},
			{status:'auto', desc:'사용자 에이전트의 기본값을 따릅니다.'}
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
			{header:'상태', dataIndex:'status'},
			{header:'설명', dataIndex:'desc', flex:1}
		]
	})
});
</script>
</body>
</html>
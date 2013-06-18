<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>dir 속성 : HTML5 Open Reference Guide</title>
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
		<h2 class="s_tit">dir 속성</h2>

		<dl class="definition">
		<dt>정의</dt>
		<dd>dir 속성은 요소의 텍스트 방향성을 명시합니다.</dd>
		<dd>bdo 요소에서는 반드시 사용하여야 합니다.</dd>
		</dl>

		<h3 class="s_tit">속성 값</h3>
		<p>나열 속성이며 ltr, rtl, auto 키워드를 갖습니다.</p>
		<p>bdo 요소는 ltr, rtl 키워드를 사용합니다.</p>
		<div id="gridAttr"></div>
		<ul class="lst_type">
		<li>auto 키워드인 경우 양방향 알고리즘에서 문단 레벨로 방향성을 결정하는 것과 흡사하게, 첫 문자만을 보고 판단합니다. 때문에 방향성을 제대로 알 수 없습니다. 서버쪽에서 사용할 수 있는 더 좋은 알고리즘이 없는 경우에만 사용하기를 권장합니다.</li>
		<li>dir 속성의 기본값은 없습니다. (요소가 루트 요소이고, dir 속성이 정의되지 않았을 때 요소의 방향성은 ltr 상태가 됩니다.)</li>
		<li>부모 요소를 갖는 요소에 dir 속성이 없다면, 부모의 방향성을 따릅니다.</li>
		</ul>
	</section>
	<!-- //태그 설명 -->
	<!-- 메모 -->
	<section>
		<h3 class="s_tit">메모</h3>
		<p>이 속성의 효과는 표현 계층에 있습니다. CSS 역시 direction, unicode-bidi 속성을 갖고 있습니다. 하지만 CSS 속성보다는 dir 속성을 사용하기를 강력히 권장합니다. 아랍어를 오른쪽에서 왼쪽이 아닌 왼쪽에서 오른쪽으로 읽을 수는 없는 것과 같이 언어에 따른 방향성은 CSS가 없을 때도 정확히 표현되어야 하기 때문입니다.</p>
	</section>
	<!-- //메모 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/elements.html#the-dir-attribute" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script>
Ext.onReady(function(){
	var storeData = Ext.create('Ext.data.Store',{
		fields: ['keyword','status','content'],
		data: {'items':[
			{keyword:'ltr', status:'ltr', content:'요소 내용의 텍스트가 왼쪽에서 오른쪽입니다.'},
			{keyword:'rtl', status:'rtl', content:'요소 내용의 텍스트가 오른쪽에서 왼쪽입니다.'},
			{keyword:'auto', status:'auto', content:'요소의 내용에 따라서 방향성이 판별됩니다.'}
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
			{header:'상태', dataIndex:'status'},
			{header:'내용', dataIndex:'content', flex:1}
		]
	})
});
</script>
</body>
</html>
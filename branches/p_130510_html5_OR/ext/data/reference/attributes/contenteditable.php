<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>contenteditable 속성 : HTML5 Open Reference Guide</title>
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
		<h2 class="s_tit">contenteditable 속성</h2>

		<dl class="definition">
		<dt>정의</dt>
		<dd>contenteditable 속성은 요소를 편집 모드로 변경합니다.</dd>
		</dl>

		<h3 class="s_tit">속성 값</h3>
		<p>빈 문자열, true, false를 나열 타입으로 갖습니다. 빈 문자열은 true 상태입니다. 값을 명시하지 않거나 잘못된 값이 입력된 경우에는 inherit 상태가 됩니다.</p>
		<div id="gridAttr"></div>
	</section>
	<!-- //속성 설명 -->
	<!-- 샘플 코드 -->
	<section>
		<h3 class="s_tit">샘플 코드</h3>
		<pre class="brush:html">
			<p contenteditable="true">이 문단은 편집할 수 있습니다.</p>
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 메모 -->
	<section>
		<h3 class="s_tit">메모</h3>
		<p>이 속성은 2000년 7월 마이크로소프트에 의해서 설계되고 구현되었습니다.</p>
		<p>IE 5.5이상을 비롯해서 크롬(4.0+), 사파리(3.1+), 파이어폭스(3.5+), 오페라(9.0+) 등 주요 브라우저에서 모두 사용 가능합니다.</p>
		<p>모바일 사파리(5.0+)와 안드로이드 브라우저(3.0+) 역시 지원됩니다. 단, 오페라 미니와 모바일 브라우저에서는 지원되지 않습니다.</p>
	</section>
	<!-- //메모 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/editing.html#attr-contenteditable" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="../../syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
<script>
Ext.onReady(function(){
	var storeData = Ext.create('Ext.data.Store',{
		fields: ['status','desc'],
		data: {'items':[
			{status:'true', desc:'요소를 편집할 수 있음을 나타냅니다.'},
			{status:'false', desc:'편집할 수 없음을 의미합니다.'},
			{status:'inherit', desc:'부모 요소의 값을 상속받습니다. 즉, 부모가 편집 가능하다면 이 요소도 편집이 가능합니다.'}
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
			{header:'내용', dataIndex:'desc', flex:1}
		]
	})
});
</script>
</body>
</html>
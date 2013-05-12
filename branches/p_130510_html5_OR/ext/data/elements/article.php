<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>artcle 요소 : HTML5 Open Reference Guide</title>
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
		<h2 class="s_tit">article 요소: (article)</h2>

		<dl class="definition">
		<dt>정의</dt>
		<dd>article 요소는 문서나 페이지, 또는 사이트의 독립적인 콘텐츠 부분을 정의할때 사용합니다. 독립적 콘텐츠라는 것은 그 글을 읽었을 때 웹사이트의 다른 부분과 연결짓지 않아도 의미를 이해할 수 있는 것을 뜻하며, 이것은 포럼에 올라온 글, 잡지나 신문의 기사, 블로그 항목, 사용자가 제시한 의견, 상호작용적인 위젯이나 가젯, 기타 모든 독립 아이템일 수 있습니다.</dd>
		</dl>

		<h3 class="s_tit">요소 레벨</h3>
		<p>Block-Level 엘리먼트</p>

		<h3 class="s_tit">요소 카테고리</h3>
		<p>Sectioning</p>
	</section>
	<!-- //태그 설명 -->
	<!-- 샘플 코드 -->
	<section>
		<h3 class="s_tit">샘플 코드</h3>
		<pre class="brush:html">
		<article>
			<header>
			<h1>산은 산이요 물은 물이로다</h1>
				<p><time pubdate datetime="2009-10-09T14:28-08:00"></time></p>
			</header>
			<p>3월인데도 여전히 춥습니다. 심지어 눈까지 내려 저희집 뒷산이 설산이 되었네요..</p>
			<footer>
				<a href="#">이 글에 대한 댓글...</a>
			</footer>
		</article>
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
			{tit:'전역속성', desc:'공통영역', href:'http://naver.com'},
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
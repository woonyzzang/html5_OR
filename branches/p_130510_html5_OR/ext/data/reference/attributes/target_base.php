<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>target 속성 (base) : HTML5 Open Reference Guide</title>
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
		<h2 class="s_tit">target 속성 (base)</h2>

		<dl class="definition">
		<dt>정의</dt>
		<dd>base 요소에 target 속성을 작성하여 문서 안 하이퍼링크와 form 요소의 이동시 기본값으로 사용할 브라우징 문맥의 이름을 제공하는 용도로 사용됩니다.</dd>
		<dd>base 요소에 target 속성을 사용했다면, 하이퍼링크를 나타내는 어떤 요소보다도 앞서 존재해야 됩니다.</dd>
		</dl>

		<h3 class="s_tit">속성 값</h3>
		<p>유효한 브라우징 문맥 이름 또는 키워드</p>
		<div id="gridAttr"></div>
		<p>target 속성을 사용했다면 속성 값은 반드시 유효한 브라우징 문맥 이름 또는 키워드를 지정해야 됩니다.</p>
	</section>
	<!-- //속성 설명 -->
	<!-- 샘플 코드 -->
	<section>
		<h3 class="s_tit">샘플 코드</h3>
		<pre class="brush:html">
			<!-- @링크는 base 요소의 target 속성에 영향을 받아 새로운 브라우징 문맥에 열리게 됩니다. -->
			&lt;html&gt;
			&lt;head&gt;
			&lt;meta charset="utf-8"&gt;
			&lt;title>CSS4 셀렉터 초안 스펙&lt;/title&gt;
			&lt;base href="http://www.w3.org/TR/2013/" target="_blank">&lt;/base&gt;
			&lt;/head&gt;
			&lt;body&gt;
			<ol>
			<li><a href="WD-selectors4-20130502/">CSS Selecter Level4</a></li>
			</ol>
			&lt;/body&gt;
			&lt;/html&gt;
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/semantics.html#attr-base-target" target="_blank">최신 명세</a></li>
		<li><a href="http://www.w3.org/TR/html5/links.html#hyperlink" target="_blank">하이퍼링크</a></li>
		<li><a href="http://www.w3.org/TR/html5/browsers.html#browsing-context" target="_blank">브라우징 문맥</a></li>
		<li><a href="http://www.w3.org/TR/html5/browsers.html#valid-browsing-context-name-or-keyword" target="_blank">유효한 브라우징 문맥 이름 또는 키워드</a></li>
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
			{keyword:'_self', desc:'현재의 브라우징 문맥를 나타냅니다.'},
			{keyword:'_parent', desc:'현재의 브라우징 문맥에 부모 창이 있다면 그 부모 브라우징 문맥에서 링크가 열립니다.'},
			{keyword:'_top', desc:'최상위 브라우징 문맥에서 링크가 열립니다.'},
			{keyword:'_blank', desc:'새로운 브라우징 문맥에서 링크가 열립니다.'},
			{keyword:'사용자 정의', desc:'설정 값이 브라우징 문맥의 이름이 되는 텍스트라면 해당 브라우징 문맥에서 링크가 열립니다.'}
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
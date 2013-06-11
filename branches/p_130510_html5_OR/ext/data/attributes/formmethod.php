<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>formmethod 속성 : HTML5 Open Reference Guide</title>
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
		<h2 class="s_tit">formmethod 속성</h2>

		<dl class="definition">
		<dt>정의</dt>
		<dd>formmethod 속성은 폼 제출시 사용 되는 HTTP 메서드를 지정합니다.</dd>
		<dd>제출 버튼이고 formmethod 속성을 갖고 있다면, method 속성의 값이 아닌 formmethod 속성의 값으로 처리합니다. formmethod 속성이 명시 되지 않았다면, 폼 소유자의 method 속성의 값으로 처리합니다.</dd>
		</dl>

		<h3 class="s_tit">속성 값</h3>
		<div id="gridAttr"></div>
		<p>기본값은 &#34;GET&#34; 상태입니다.</p>
	</section>
	<!-- //태그 설명 -->
	<!-- 샘플 코드 -->
	<section>
		<h3 class="s_tit">샘플 코드</h3>
		<pre class="brush:html">
			<form>
			<input type="submit" value="등록" formmethod="POST">
			</form>
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/association-of-controls-and-forms.html#attr-fs-formmethod" target="_blank">최신 명세</a></li>
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
			{keyword:'GET', desc:'폼의 전송되는 데이터가 이름과 값으로 URL에 명시되어 전송됩니다. 이 방식은 데이터량에 한계가 있으며 값이 공개되기 때문에 보안에 취약할 수 있습니다.'},
			{keyword:'POST', desc:'폼의 전송되는 데이터를 이름과 값으로 전송합니다. 이 방식은 GET방식과 다르게 이름과 값이 URL에 명시되지 않으며 데이터량에 한계가 없다는 장점이 있습니다.'}
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
	})
});
</script>
</body>
</html>
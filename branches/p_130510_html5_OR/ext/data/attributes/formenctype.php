<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>formenctype 속성 : HTML5 Open Reference Guide</title>
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
		<h2 class="s_tit">formenctype 속성</h2>

		<dl class="definition">
		<dt>정의</dt>
		<dd>formenctype 속성은 제출되는 폼 데이터의 인코딩 방법을 지정합니다.</dd>
		<dd>제출 버튼이고 formenctype 속성을 갖고 있다면, enctype 속성의 값이 아닌 formenctype 속성의 값으로 처리합니다. formenctype 속성이 명시 되지 않았다면, 폼 소유자의 enctype 속성의 값으로 처리합니다.</dd>
		</dl>

		<h3 class="s_tit">속성 값</h3>
		<div id="gridAttr"></div>
		<p>기본값은 &#34;application&frasl;x-www-form-urlencoded&#34; 상태입니다.</p>
	</section>
	<!-- //태그 설명 -->
	<!-- 샘플 코드 -->
	<section>
		<h3 class="s_tit">샘플 코드</h3>
		<pre class="brush:html">
			<form>
			<input type="submit" value="등록" formenctype="application/x-www-form-urlencoded">
			</form>
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/association-of-controls-and-forms.html#attr-fs-formenctype" target="_blank">최신 명세</a></li>
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
			{keyword:'application/x-www-form-urlencoded', desc:'모든 문자를 인코딩 합니다.'},
			{keyword:'multipart/form-data', desc:'어떠한 문자 인코딩도 하지 않습니다. 주로 파일 업로드 컨트롤을 제공하는 경우 사용합니다.'},
			{keyword:'text/plain', desc:'공백이 + 문자로 변환되며 특수 문자를 인코딩 하지 않습니다.'}
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
			{header:'키워드', dataIndex:'keyword', width:200},
			{header:'설명', dataIndex:'desc', flex:1}
		]
	})
});
</script>
</body>
</html>
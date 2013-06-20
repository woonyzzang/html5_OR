<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>autocomplete 속성 (form) : HTML5 Open Reference Guide</title>
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
		<h2 class="s_tit">autocomplete 속성 (form)</h2>

		<dl class="definition">
		<dt>정의</dt>
		<dd>autocomplete 속성은 폼 내부 요소의 자동완성 기능을 설정하는 속성입니다.</dd>
		</dl>

		<h3 class="s_tit">속성 값</h3>
		<p>두가지 상태값을 가집니다. 속성값 on은 자동완성 기능의 활성화 상태를 나타내며, 속성값 off는 자동완성 기능의 비활성화 상태를 나타냅니다.</p>
		<div id="gridAttr"></div>
	</section>
	<!-- //속성 설명 -->
	<!-- 샘플 코드 -->
	<section>
		<h3 class="s_tit">샘플 코드</h3>
		<pre class="brush:html">
			<form action="demo_form.asp" method="get" autocomplete="on">
			First name: <input type="text" name="fname"><br>
			Last name: <input type="text" name="lname"><br>
			E-mail: <input type="email" name="email" autocomplete="off"><br>
			<input type="submit">
			</form>
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/forms.html#attr-form-autocomplete" target="_blank">최신 명세</a></li>
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
			{keyword:'on', desc:'폼 내부 요소 자동완성 기능을 활성화시킵니다. (기본값)'},
			{keyword:'off', desc:'폼 내부 요소 자동완성 기능을 비활성화시킵니다.'}
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
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>keygen 요소 : HTML5 Open Reference Guide</title>
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
		<h2 class="s_tit">keygen 요소: (key-pair generator&frasl;input control)</h2>

		<dl class="definition">
		<dt>정의</dt>
		<dd>keygen 요소는 암호화를 위한 개인키와 공개키 쌍을 만들어냅니다.</dd>
		</dl>

		<h3 class="s_tit">요소 레벨</h3>
		<p>Inline-Level 엘리먼트</p>

		<h3 class="s_tit">요소 카테고리</h3>
		<p>Text formatting</p>
	</section>
	<!-- //태그 설명 -->
	<!-- 샘플 코드 -->
	<section>
		<h3 class="s_tit">샘플 코드</h3>
		<pre class="brush:html">
			<form action="processkey.cgi" method="post" enctype="multipart/form-data">
				<p><keygen name="key"></p>
				<p><input type="submit" value="키 전송"></p>
			</form>
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
			{tit:'전역 속성', desc:'공통 속성', href:'http://naver.com'},
			{tit:'autofocus', desc:'페이지를 로드할 때 요소가 자동으로 포커스를 받습니다.', href:'http://naver.com'},
			{tit:'challenge', desc:'값과 함께 전달되는 문자열입니다.', href:'http://naver.com'},
			{tit:'disabled', desc:'값을 제출하지 않습니다.', href:'http://naver.com'},
			{tit:'form', desc:'명시적으로 폼 소유자를 지정합니다.', href:'http://naver.com'},
			{tit:'keytype', desc:'키의 유형을 정의합니다.', href:'http://naver.com'},
			{tit:'name', desc:'폼 제출 시에 사용되는 폼 컨트롤의 이름을 나타냅니다.', href:'http://naver.com'}
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
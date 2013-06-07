<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>textarea 요소 : HTML5 Open Reference Guide</title>
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
		<h2 class="s_tit">textarea 요소: (text input area)</h2>

		<dl class="definition">
		<dt>정의</dt>
		<dd>textarea 요소는 여러 줄의 텍스트를 편집할 수 있는 컨트롤입니다.</dd>
		</dl>

		<h3 class="s_tit">요소 레벨</h3>
		<p>Inline Block-Level 엘리먼트</p>

		<h3 class="s_tit">요소 카테고리</h3>
		<p>Form</p>
	</section>
	<!-- //태그 설명 -->
	<!-- 샘플 코드 -->
	<section>
		<h3 class="s_tit">샘플 코드</h3>
		<pre class="brush:html">
			<textarea cols="30" rows="5" title="댓글을 입력 하세요.">내용을 입력 하세요.</textarea>
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
			{tit:'autofocus', desc:'페이지가 로드될 때 요소가 자동으로 포커스를 받습니다.', href:'http://naver.com'},
			{tit:'cols', desc:'한 줄당 입력할 수 있는 글자수를 제한합니다.', href:'http://naver.com'},
			{tit:'disabled', desc:'사용자가 입력하거나 수정할 수 없도록 설정합니다.', href:'http://naver.com'},
			{tit:'dirname', desc:'textarea 요소의 방향성을 제출합니다.', href:'http://naver.com'},
			{tit:'form', desc:'연관된 form 요소를 명시적으로 연결합니다.', href:'http://naver.com'},
			{tit:'maxlength', desc:'포함할 수 있는 문자열의 최대 값을 정의합니다.', href:'http://naver.com'},
			{tit:'name', desc:'폼 제출 시에 사용되는 폼 컨트롤의 이름을 나타냅니다.', href:'http://naver.com'},
			{tit:'placeholder', desc:'사용자의 입력을 돕는 힌트 메시지를 입력합니다.', href:'http://naver.com'},
			{tit:'readonly', desc:'편집 여부를 정의합니다.', href:'http://naver.com'},
			{tit:'required', desc:'폼을 제출할 때 반드시 값을 입력하도록 강제합니다.', href:'http://naver.com'},
			{tit:'rows', desc:'textarea 요소가 몇 줄로 보일지를 결정합니다.', href:'http://naver.com'},
			{tit:'wrap', desc:'텍스트의 줄바꿈 여부를 결정합니다.', href:'http://naver.com'}
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
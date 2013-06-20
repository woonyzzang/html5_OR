<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>type 속성 (ol) : HTML5 Open Reference Guide</title>
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
		<h2 class="s_tit">type 속성 (ol)</h2>

		<dl class="definition">
		<dt>정의</dt>
		<dd>type 속성은 목록의 마커 유형의 종류를 정의합니다. CSS의 list-style-type 속성과 동일하지만 style을 불러오지 않은 환경에서도 목록의 종류를 설정할 수 있는 장점이 있습니다.</dd>
		<dd>type 속성은 HTML5에서는 사용이 제한되었지만, ol 요소에 한해서 순서에 의미를 가지는 경우에는 사용이 가능하도록 변경되었습니다.</dd>
		</dl>

		<h3 class="s_tit">속성 값</h3>
		<p>아래의 표의 첫 열인 '속성 값'에 있는 키워드를 사용 합니다. 키워드는 대소문자 구분하여 일치해야 합니다.</p>
		<div id="gridAttr"></div>
		<p>속성을 사용하지 않았다면 기본 상태는 decimal 상태 입니다.</p>
	</section>
	<!-- //속성 설명 -->
	<!-- 샘플 코드 -->
	<section>
		<h3 class="s_tit">샘플 코드</h3>
		<pre class="brush:html">
			<h4>세부 목차(부침개)</h4>
			<ol type="I">
			<li>지짐류
				<ol type="i">
				<li>김치부침개</li>
				<li>빈대떡</li>
				</ol>
			</li>
			<li>튀김류
				<ol type="i">
				<li>고구마튀김</li>
				<li>연근튀김</li>
				<li>모듬튀김</li>
				</ol>
			</li>
			</ol>
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/grouping-content.html#attr-ol-type" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="../../syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
<script>
Ext.onReady(function(){
	var storeData = Ext.create('Ext.data.Store',{
		fields: ['attr','status','dfn','content','ex'],
		data: {'items':[
			{attr:'1', status:'decimal', content:'10진수 숫자', ex:'1.2.3. … 3999.4000.4001. …'},
			{attr:'a', status:'lower-alpha', content:'소문자 알파벳', ex:'a.b.c. … ewu. ewv. eww. …'},
			{attr:'A', status:'upper-alpha', content:'대문자 알파벳', ex:'A. B. C. … EWU.EWV.EWW. …'},
			{attr:'i', status:'lower-roman', content:'소문자 로마 숫자', ex:'i.ii.iii. … mmmcmxcix.i̅v̅.i̅v̅i. …'},
			{attr:'I', status:'lower-roman', content:'대문자 로마 숫자', ex:'I.II.III. … MMMCMXCIX.I̅V̅.I̅V̅I. …'}
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
			{header:'속성 값', dataIndex:'attr'},
			{header:'상태', dataIndex:'status'},
			{header:'정의', dataIndex:'content'},
			{header:'예제', dataIndex:'ex', flex:1}
		]
	});
});
</script>
</body>
</html>
<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>srcdoc 속성 (iframe) : <?php echo TITLE_REFERENCE; ?></title>
<?php include RELATIEV_PATH.'common_inc.php'; ?>
</head>
<body>
<article id="content_desc">
	<!-- 속성 설명 -->
	<section id="info"><!-- @new Ext.XTemplate --></section>
	<!-- //속성 설명 -->
	<!-- 샘플 코드 -->
	<section>
		<h3 class="s_tit">샘플 코드</h3>
		<pre class="brush:html">
			&lt;iframe srcdoc="<p>달콤한 농담. 치명적 스킨향</p>"&gt;&lt;/iframe&gt;
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/embedded-content-0.html#an-iframe-srcdoc" target="_blank">최신 명세</a></li>
		<li><a href="http://www.w3.org/TR/html5/browsers.html#nested-browsing-context" target="_blank">nested browsing context</a></li>
		<li><a href="http://www.w3.org/TR/html5/syntax.html#syntax" target="_blank">the HTML syntax</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="<?php echo PATH; ?>syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
<script>
Ext.onReady(function(){
	var tplData = {
		attr: 'srcdoc',
		meaning: 'iframe',
		item: [{
			desc:'중첩된 문맥이 포함된 내용을 나타냅니다.',
			child: [
				{item:'src 속성과 srcdoc 속성을 모두 사용했다면 srcdoc 속성이 우선권을 가집니다. 이를 통해, srcdoc 속성을 지원하지 않는 구형 사용자 에이전트에서 폴백 요소를 제공할 수 있습니다.'},
				{item:'src 속성과 srcdoc 속성 정해지지 않았거나 속성 값이 해석될 수 없다면, 문맥은 about:blank 페이지에 남아있습니다.'}
			]
		}],
		txt: '값은 iframe srcdoc 문서입니다.',
		ctgr2: [
			{tit:'HTML 문서', desc:'HTML 문서에 포함된 iframe 요소에 이 속성이 있다면, 값은 HTML 문법을 사용한 값이어야 하며, 다음의 문법 요소들이 순서대로 구성된 것이어야 합니다.', lst2:[
				{item:'주석과 공백 문자, 숫자에는 제한이 없습니다.'},
				{item:'선택적인 DOCTYPE'},
				{item:'주석과 공백 문자, 숫자에는 제한이 없습니다.'},
				{item:'html 요소의 형태를 갖는 루트 요소'},
				{item:'주석과 공백 문자, 숫자에는 제한이 없습니다.'}
			]},
			{tit:'XML 문서', desc:'HTML 문서에 포함된 iframe 요소에 이 속성이 있다면, 값은 HTML 문법을 사용한 값이어야 하며, 다음의 문법 요소들이 순서대로 구성된 것이어야 합니다.'}
		]
	};

	tpl2.overwrite(Ext.get('info'), tplData);
});
</script>
</body>
</html>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>srcdoc 속성 (iframe) : HTML5 Open Reference Guide</title>
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
		<h2 class="s_tit">srcdoc 속성 (iframe)</h2>

		<dl class="definition">
		<dt>정의</dt>
		<dd>중첩된 문맥이 포함된 내용을 나타냅니다.
			<ul>
			<li>src 속성과 srcdoc 속성을 모두 사용했다면 srcdoc 속성이 우선권을 가집니다. 이를 통해, srcdoc 속성을 지원하지 않는 구형 사용자 에이전트에서 폴백 요소를 제공할 수 있습니다.</li>
			<li>src 속성과 srcdoc 속성 정해지지 않았거나 속성 값이 해석될 수 없다면, 문맥은 about:blank 페이지에 남아있습니다.</li>
			</ul>
		</dd>
		</dl>

		<h3 class="s_tit">속성 값</h3>
		<p>값은 iframe srcdoc 문서입니다.</p>
		<dl class="category">
		<dt>HTML 문서</dt>
		<dd>HTML 문서에 포함된 iframe 요소에 이 속성이 있다면, 값은 HTML 문법을 사용한 값이어야 하며, 다음의 문법 요소들이 순서대로 구성된 것이어야 합니다.
			<ol>
			<li>주석과 공백 문자, 숫자에는 제한이 없습니다.</li>
			<li>선택적인 DOCTYPE</li>
			<li>주석과 공백 문자, 숫자에는 제한이 없습니다.</li>
			<li>html 요소의 형태를 갖는 루트 요소</li>
			<li>주석과 공백 문자, 숫자에는 제한이 없습니다.</li>
			</ol>
		</dd>
		<dt>XML 문서</dt>
		<dd>HTML 문서에 포함된 iframe 요소에 이 속성이 있다면, 값은 HTML 문법을 사용한 값이어야 하며, 다음의 문법 요소들이 순서대로 구성된 것이어야 합니다.</dd>
		</dl>
	</section>
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

<script src="../../syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
</body>
</html>
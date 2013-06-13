<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>title 속성 (link) : HTML5 Open Reference Guide</title>
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
		<h2 class="s_tit">title 속성 (link)</h2>

		<dl class="definition">
		<dt>정의</dt>
		<dd>title 속성은 보통 설명(조언)에 해당하는 내용을 텍스트로 지정합니다.
			<ul>
			<li>link 요소를 스타일시트 링크로 사용할 경우 title 속성은 대체 스타일시트 목록을 설정하는데 사용할 수 있습니다.</li>
			<li>link 요소에 사용된 title 속성은 다른 요소에 사용되는 title 속성과 다르게 타이틀을 사용하지 않아도 부모 요소의 타이틀을 상속하지 않습니다. 따라서 타이틀이 정의되지 않습니다.</li>
			</ul>
		</dd>
		</dl>

		<h3 class="s_tit">속성 값</h3>
		<p>대체 스타일시트 목록에 대하여 구분할 수 있도록 설명합니다.</p>
	</section>
	<!-- //태그 설명 -->
	<!-- 샘플 코드 -->
	<section>
		<h3 class="s_tit">샘플 코드</h3>
		<pre class="brush:html">
			&lt;link rel="alternate stylesheet" type="text/css" title="Printer-Friendly" href="/print.css"&gt;
			&lt;link rel="stylesheet" type="text/css" media="print" href="/print.css"&gt;
			&lt;link rel="stylesheet" type="text/css" media="screen" href="/screen.css"&gt;
			&lt;link rel="stylesheet" type="text/css" media="handheld" href="/handheld.css"&gt;
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/semantics.html#attr-link-title" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="../../syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
</body>
</html>
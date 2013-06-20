<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>media 속성 (link) : HTML5 Open Reference Guide</title>
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
		<h2 class="s_tit">media 속성 (link)</h2>

		<dl class="definition">
		<dt>정의</dt>
		<dd>media 속성은 link 요소가 어떤 매체에 적용되는지 나타냅니다.</dd>
		</dl>

		<h3 class="s_tit">속성 값</h3>
		<p>유효한 미디어 쿼리여야 합니다. 속성이 생략되었다면, 기본값은 all입니다. (링크가 모든 매체에 적용됨을 의미합니다.)</p>
	</section>
	<!-- //속성 설명 -->
	<!-- 샘플 코드 -->
	<section>
		<h3 class="s_tit">샘플 코드</h3>
		<pre class="brush:html">
			<!-- @기본 'style.css'가 모든 매체에 적용되며, 출력용 매체에서는 'print.css'도 적용됩니다. -->
			&lt;link href="style.css"&gt;
			&lt;link href="print.css" media="print"&gt;
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/semantics.html#attr-link-media" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="../../syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
</body>
</html>
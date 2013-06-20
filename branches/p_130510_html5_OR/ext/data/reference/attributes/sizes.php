<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>sizes 속성 : HTML5 Open Reference Guide</title>
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
		<h2 class="s_tit">sizes 속성</h2>

		<dl class="definition">
		<dt>정의</dt>
		<dd>sizes 속성은 link 요소에서 [html5:attribute:rel]값을 icon으로 사용할 경우에만 사용됩니다.</dd>
		</dl>

		<h3 class="s_tit">속성 값</h3>
		<p>속성 값으로 아이콘의 가로와 세로 사이즈를 &#39;X&#39;나 &#39;x&#39;로 구분하여 지정할 수 있습니다. 만약 아이콘 이외(예를들어 SVG와 같은)의 것이라면 any 값으로 확장된 아이콘을 지정할 수도 있습니다.</p>
	</section>
	<!-- //속성 설명 -->
	<!-- 샘플 코드 -->
	<section>
		<h3 class="s_tit">샘플 코드</h3>
		<pre class="brush:html">
			&lt;link rel="icon" href="favicon.png" sizes="16x16" type="image/png"&gt;
			&lt;link rel="icon" href="mac.icns" sizes="128x128 512x512 8192x8192 32768x32768"&gt;
			&lt;link rel="icon" href="gnome.svg" sizes="any" type="image/svg+xml"&gt;
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/inks.html#attr-hyperlink-sizes" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="../../syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
</body>
</html>
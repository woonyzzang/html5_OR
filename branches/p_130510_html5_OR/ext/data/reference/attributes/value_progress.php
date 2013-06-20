<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>value 속성 (progress) : HTML5 Open Reference Guide</title>
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
		<h2 class="s_tit">value 속성 (progress)</h2>

		<dl class="definition">
		<dt>정의</dt>
		<dd>value 속성은 진행된 작업량을 나타냅니다.</dd>
		</dl>

		<h3 class="s_tit">속성 값</h3>
		<p>값이 사용 되었다면, 값은 유효한 부동소수점 숫자이어야 합니다. 그리고 0 이상 max 속성의 값 이하여야 합니다. 또한, max 속성의 값이 명시되지 않았다면 1.0보다 작아야 하고, 사용하였다면 0보다 커야 합니다.</p>
	</section>
	<!-- //속성 설명 -->
	<!-- 샘플 코드 -->
	<section>
		<h3 class="s_tit">샘플 코드</h3>
		<pre class="brush:html">
			<!-- @ max 속성의 값이 명시된 경우 -->
			<progress max="100" value="45"></progress>

			<!-- @max 속성의 값이 명시 안 된 경우 -->
			<progress value="0.4"></progress>
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/the-button-element.html#attr-progress-value" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="../../syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
</body>
</html>
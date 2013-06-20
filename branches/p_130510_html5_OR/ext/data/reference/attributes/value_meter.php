<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>value 속성 (meter) : HTML5 Open Reference Guide</title>
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
		<h2 class="s_tit">value 속성 (meter)</h2>

		<dl class="definition">
		<dt>정의</dt>
		<dd>meter 요소의 게이지에 표시되는 &#39;측정&#39;값 입니다.</dd>
		</dl>

		<h3 class="s_tit">속성 값</h3>
		<p>반드시 명시해야 하며, 유효한 부동소수점 숫자를 사용하여야 합니다.</p>
		<p>min 속성, max 속성을 지정하지 않으면 meter 요소의 기본 최소 값은 0, 최대 값은 1이 설정되며, 0 에서 1 사이의 값을 지정하여야 합니다.</p>
		<p>minimum ≤ value ≤ maximum 와 같은 부등호 관계를 지켜야 합니다.</p>
	</section>
	<!-- //속성 설명 -->
	<!-- 샘플 코드 -->
	<section>
		<h3 class="s_tit">샘플 코드</h3>
		<pre class="brush:html">
			<!-- @기본 마크업 -->
			<p>C 드라이브 현황 : <meter min="0" max="1000" value="600"></p>

			<!-- @최소 값, 최대 값이 없을 경우 (잘못 작성된 마크업) -->
			<p>C 드라이브 현황 : <meter value="600"></p>

			<!-- @최소값, 최대값이 없을 경우 (올바른 마크업) -->
			<p>C 드라이브 현황 : <meter value="0.6"></p>
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/the-button-element.html#attr-meter-value" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="../../syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
</body>
</html>
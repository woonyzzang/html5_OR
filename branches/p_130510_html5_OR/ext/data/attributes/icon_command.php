<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>icon 속성 (command) : HTML5 Open Reference Guide</title>
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
		<h2 class="s_tit">icon 속성 (command)</h2>

		<dl class="definition">
		<dt>정의</dt>
		<dd>icon 속성은 command 요소에 사용되며 커맨드를 나타내는 그림을 지정합니다.</dd>
		<dd>속성을 사용 하였다면 값은 유요한 url이어야 합니다.</dd>
		</dl>

		<h3 class="s_tit">속성 값</h3>
		<p>유효한 부동소수점 숫자를 사용하여야 합니다.</p>
		<p>minimum ≤ high ≤ maximum 와 같은 부등호 관계를 지켜야 합니다.</p>
		<p>low 속성과 low ≤ high 와 같은 부등호 관계를 지켜야 합니다.</p>
	</section>
	<!-- //태그 설명 -->
	<!-- 샘플 코드 -->
	<section>
		<h3 class="s_tit">샘플 코드</h3>
		<pre class="brush:html">
			&lt;command type="checkbox" label="굵게" icon="ico_bold.gif" onclick="setBold();"&gt;
			&lt;command type="checkbox" label="밑줄" icon="ico_underline.gif" onclick="setULine();"&gt;
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/interactive-elements.html#attr-command-icon" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="../../syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
</body>
</html>
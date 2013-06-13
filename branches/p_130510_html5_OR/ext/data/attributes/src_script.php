<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>src 속성 (script) : HTML5 Open Reference Guide</title>
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
		<h2 class="s_tit">src 속성 (script)</h2>

		<dl class="definition">
		<dt>정의</dt>
		<dd>src 속성은 외부 스크립트 자원의 경로를 제공합니다. 스크립트 요소가 데이터 블럭을 포함하는 경우에는 src 속성을 사용하면 안됩니다.</dd>
		</dl>

		<h3 class="s_tit">속성 값</h3>
		<p>값은 유효해야 하며, 앞뒤로 공백을 허용하고 비어 있지 않은 URL이어야 합니다.</p>
	</section>
	<!-- //태그 설명 -->
	<!-- 샘플 코드 -->
	<section>
		<h3 class="s_tit">샘플 코드</h3>
		<pre class="brush:html">
			<!-- @src 속성이 지정한 자원은 type 속성으로 명시적으로 정의한 것입니다. -->
			&lt;script type="text/javascript" src="navigation.js"&gt;&lt;/script&gt;

			<!-- type 속성이 명시되지 않은 경우 기본값으로 "text/javascript"가 자원의 언어가 됩니다. -->
			&lt;script src="navigation.js"&gt;&lt;/script&gt;
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 메모 -->
	<section>
		<h3 class="s_tit">메모</h3>
		<p>src 속성을 동적으로 변경하는 것은 아무런 변화도 주지 않습니다.</p>
	</section>
	<!-- //메모 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/scripting-1.html#attr-script-src" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="../../syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>height 속성 : HTML5 Open Reference Guide</title>
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
		<h2 class="s_tit">height 속성</h2>

		<dl class="definition">
		<dt>정의</dt>
		<dd>height 속성은 img 요소, iframe 요소, embed 요소, object 요소, video 요소 그리고 이미지 버튼 상태인 input 요소 요소의 세로 크기를 명시합니다.</dd>
		<dd>명시된 크기는 자원 자체의 크기와는 다를 수 있으며 width 속성, height 속성 값을 모두 0으로 지정했다면 해당 요소는 사용자에게 드러날 것을 의도하지 않는다는 것을 의미합니다.(예를 들어 방문 카운터, 일부 제한 서비스)</dd>
		</dl>

		<h3 class="s_tit">속성 값</h3>
		<p>속성 값의 단위는 CSS에서 사용하는 픽셀(px)이어야 합니다. 속성을 사용했다면, 그 값은 유효한 양의 정수여야 합니다.</p>
	</section>
	<!-- //태그 설명 -->
	<!-- 샘플 코드 -->
	<section>
		<h3 class="s_tit">샘플 코드</h3>
		<pre class="brush:html">
			&lt;embed type="video/quicktime" src="paris_vegas.mov" width="340" height="140"&gt;

			&lt;video src="cssniteseoul_opening.ogv" width="340" height="140" controls="controls"&gt;&lt;/video&gt;
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/the-map-element.html#attr-dim-height" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="../../syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>src 속성 (track) : HTML5 Open Reference Guide</title>
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
		<h2 class="s_tit">src 속성 (track)</h2>

		<dl class="definition">
		<dt>정의</dt>
		<dd>src 속성은 텍스트 트랙 데이터의 주소를 제공합니다.</dd>
		<dd>이 속성은 반드시 존재하여야 합니다.</dd>
		</dl>

		<h3 class="s_tit">속성 값</h3>
		<p>값은 유효해야 하며, 앞뒤로 공백을 허용하고 비어 있지 않은 URL이어야 합니다.</p>
	</section>
	<!-- //속성 설명 -->
	<!-- 샘플 코드 -->
	<section>
		<h3 class="s_tit">샘플 코드</h3>
		<pre class="brush:html">
			&lt;video src="opening.mp4"&gt;
				&lt;track src="caption_kr.srt" srclang="ko"&gt;
				&lt;track src="caption_en.srt" srclang="en"&gt;
			&lt;/video&gt;
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/video.html#attr-track-src" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="../../syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
</body>
</html>
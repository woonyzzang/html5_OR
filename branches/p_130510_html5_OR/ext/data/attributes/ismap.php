<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>ismap 속성 : HTML5 Open Reference Guide</title>
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
		<h2 class="s_tit">ismap 속성</h2>

		<dl class="definition">
		<dt>정의</dt>
		<dd>ismap 속성은 서버에 img 요소를 처리할 수 있는 이미지 맵이 있는지를 확인합니다. 이 속성은 href 속성이 있는 a 요소의 자식인 img 요소에만 사용할 수 있습니다.</dd>
		</dl>

		<h3 class="s_tit">속성 값</h3>
		<p>불리언 속성입니다. &#34;ismap&#34;만 쓰거나, ismap=&#34;ismap&#34;으로 쓸 수 있습니다. 서버에 이 img 요소를 처리할 수 있는 이미지 맵이 없음을 나타내려고 ismap=“true”를 쓰는건 안 됩니다. 브라우저는 ismap 까지만 확인한 후 서버에 이 img 요소를 처리할 수 있는 이미지 맵이 있다고 판단할 것입니다.</p>
	</section>
	<!-- //태그 설명 -->
	<!-- 샘플 코드 -->
	<section>
		<h3 class="s_tit">샘플 코드</h3>
		<pre class="brush:html">
			<!-- @사용자가 클릭한 영역의 좌표를 server.com/image-map/으로 전송합니다.
				server.com/image-map/에 있는 프로그램이 좌표를 해석한 뒤 그에 맞게 대응할 겁니다. -->
			<a href="server.com/image-map/">&lt;img src="shapes.png" ismap="ismap" alt="@대체 텍스트"&gt;</a>
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/embedded-content-1.html#attr-img-ismap" target="_blank">ismap 속성의 최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="../../syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
</body>
</html>
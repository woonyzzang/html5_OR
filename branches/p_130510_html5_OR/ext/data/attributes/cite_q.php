<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>cite 속성 (q) : HTML5 Open Reference Guide</title>
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
		<h2 class="s_tit">cite 속성 (q)</h2>

		<dl class="definition">
		<dt>정의</dt>
		<dd>q 요소 에서의 cite 속성은 인용문의 원본 출처를 표기할 수 있습니다. 다른 원본 페이지에 있던 내용을 인용한 경우에는 cite 속성에 유효한 URL을 선언할 수 있습니다. 유의점으로는 cite 요소요소는 어떤 작품의 제목을 나타내지만, cite 속성은 인용문의 원본출처를 표기한다는 것입니다.</dd>
		</dl>

		<h3 class="s_tit">속성 값</h3>
		<p>cite 속성을 사용했다면, 유효한 URL이어야 합니다.</p>
		<p>상대적으로 해석한 링크를 따라갈 수 있어야 합니다.</p>
	</section>
	<!-- //태그 설명 -->
	<!-- 샘플 코드 -->
	<section>
		<h3 class="s_tit">샘플 코드</h3>
		<pre class="brush:html">
			<p>웹 접근성이란<q cite="http://www.wah.or.kr/Accessibility/define.asp">장애인뿐만 아니라 모든 사람이 정보통신 기기나 서비스를 손쉽게 활용할 수 있도록 만드는 것</q>을 말합니다.</p>
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/text-level-semantics.html#attr-q-cite" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="../../syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
</body>
</html>
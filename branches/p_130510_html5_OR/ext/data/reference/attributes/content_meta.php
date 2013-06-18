<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>content 속성 (meta) : HTML5 Open Reference Guide</title>
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
		<h2 class="s_tit">content 속성 (meta)</h2>

		<dl class="definition">
		<dt>정의</dt>
		<dd>요소가 그러한 목적으로 사용되었을때는 문서 메타데이터, 프라그마 디렉티브(pragma directive, 전처리)의 값을 나타냅니다. 허용된 값은 문맥에 따라 다릅니다.</dd>
		</dl>

		<h3 class="s_tit">속성 값</h3>
		<p>유효한 메타데이터 정보의 내용이어야 합니다.</p>
	</section>
	<!-- //태그 설명 -->
	<!-- 샘플 코드 -->
	<section>
		<h3 class="s_tit">샘플 코드</h3>
		<pre class="brush:html">
			<!-- @name속성에 content속성이 사용될 때 -->
			&lt;meta name="author" content="Joe Seung Woon"&gt;

			<!-- @http-equiv속성에 content속성이 사용될 때 -->
			&lt;meta http-equiv="Content-Type" content="text/html; charset=euc-kr"&gt;

			<!-- @기타 -->
			&lt;meta http-equiv="content-language" content="ko"&gt;
			&lt;meta http-equiv="Content-Type" content="text/html; charset=euc-kr"&gt;
			&lt;meta http-equiv="content-style-type" content="text/css"&gt;
			&lt;meta http-equiv="refresh" content="10, www.w3c.org"&gt;
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/document-metadata.html#attr-meta-content" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="../../syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
</body>
</html>
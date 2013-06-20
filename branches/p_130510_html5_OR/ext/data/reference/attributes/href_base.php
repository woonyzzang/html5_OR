<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>href 속성 (base) : HTML5 Open Reference Guide</title>
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
		<h2 class="s_tit">href 속성 (base)</h2>

		<dl class="definition">
		<dt>정의</dt>
		<dd>href 속성은 base 요소에서 상대 URL을 해석할 수 있는 베이스 URL을 정의합니다.</dd>
		<dd>base 요소에 href 속성을 사용 하였다면 속성으로 URL을 갖는 어떤 요소보다도 앞서서 위치해야 합니다. 단, html 요소는 예외(html 요소의 manifest 속성은 base 요소의 영향을 받지 않습니다.</dd>
		</dl>

		<h3 class="s_tit">속성 값</h3>
		<p>href 속성을 사용했다면 값은 반드시 유효한, 앞뒤로 공백을 허용하는 URL을 제공하여야 합니다.</p>
	</section>
	<!-- //속성 설명 -->
	<!-- 샘플 코드 -->
	<section>
		<h3 class="s_tit">샘플 코드</h3>
		<pre class="brush:html">
			<!-- @html5_OR.co.kr/debug/index.html를 가르키게 됩니다. -->
			&lt;!DOCTYPE html&gt;
			&lt;html&gt;
			&lt;head&gt;
			&lt;title&gt;HTML5 Open Reference&lt;/title&gt;
			&lt;base href="html5_OR.co.kr/index.html" target="_self"&gt;
			&lt;/head&gt;
			&lt;body&gt;
			<p>오탈자나 내용 오류를 <a href="/debug/index.html">신고</a>해주세요.</p>
			&lt;/body&gt;
			&lt;/html&gt;
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/semantics.html#attr-base-href" target="_blank">최신 명세</a></li>
		<li><a href="http://www.w3.org/TR/2011/WD-html5-20110113/urls.html#document-base-url" target="_blank">document base URL</a></li>
		<li><a href="http://www.w3.org/TR/2011/WD-html5-20110113/urls.html#resolve-a-url" target="_blank">resolving relative URLs</a></li>
		<li><a href="http://www.w3.org/TR/2011/WD-html5-20110113/urls.html#valid-url-potentially-surrounded-by-spaces" target="_blank">valid URL potentially surrounded by spaces</a></li>
		<li><a href="http://www.w3.org/TR/2011/WD-html5-20110113/urls.html#url" target="_blank">URL</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="../../syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>scoped 속성 (style) : HTML5 Open Reference Guide</title>
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
		<h2 class="s_tit">scoped 속성 (style)</h2>

		<dl class="definition">
		<dt>정의</dt>
		<dd>scoped 속성은 style 요소가 작성된 부모의 하위 요소에만 스타일을 적용시킬 수 있습니다. scoped 속성을 사용하는 style 요소는 플로우 컨텐츠의 범주에 속하게 되고 플로우 컨텐츠에 사용 할 수 있지만, 다른 style 요소와 요소 간 공백 이외에 다른 플로우 컨텐츠는 허용되지 않습니다.</dd>
		</dl>

		<h3 class="s_tit">속성 값</h3>
		<p>불리언 속성입니다.</p>
	</section>
	<!-- //속성 설명 -->
	<!-- 샘플 코드 -->
	<section>
		<h3 class="s_tit">샘플 코드</h3>
		<pre class="brush:html">
			<!-- @두번째 섹션의 제목은 빨간색, 문단은 1.7의 줄간격을 가지게 됩니다. -->
			&lt;html&gt;
			&lt;head&gt;
			&lt;meta charset="utf-8"&gt;
			&lt;title&gt;인기 만화&lt;/title&gt;
			&lt;style&gt;
			body{background-color:#fff;color:#333}
			h1{font-size:2em;color:#ff0}
			p{line-height:1.5}
			&lt;/style&gt;
			&lt;/head&gt;
			&lt;body&gt;
			<section>
				<h1>HTML</h1>
				<p>Hyper Text Markup Language의 약자로, 월드와이드웹 문서를 작성하는 마크업 언어 입니다.</p>
			</section>
			<section>
				&lt;style scoped="scoped"&gt;
				h1{color:#f30}
				p{line-height:1.7}
				&lt;/style&gt;
				<h1>CSS</h1>
				<p>cascading style sheets의 약자로, 웹문서의 전반적인 스타일을 미리 저장해 둔 스타일시트 언어 입니다.</p>
			</section>
			&lt;/body&gt;
			&lt;/html&gt;
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/semantics.html#attr-style-scoped" target="_blank">최신 명세</a></li>
		<li><a href="http://www.w3.org/TR/html5/infrastructure.html#boolean-attributes" target="_blank">boolean attribute</a></li>
		<li><a href="http://www.w3.org/TR/html5/dom.html#inter-element-whitespace" target="_blank">inter-element whitespace</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="../../syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
</body>
</html>
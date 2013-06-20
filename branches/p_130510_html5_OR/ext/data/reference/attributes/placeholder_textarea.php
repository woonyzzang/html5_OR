<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>placeholder 속성 (textarea) : HTML5 Open Reference Guide</title>
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
		<h2 class="s_tit">placeholder 속성 (textarea)</h2>

		<dl class="definition">
		<dt>정의</dt>
		<dd>placeholder 속성은 힌트(한 단어나 짧은 구)를 나타냅니다. 이러한 힌트는 사용자가 데이터를 입력하는데 도움을 주는 목적입니다. 이것은 값의 예가 될수도 있고, 기대하는 형태의 짤막한 설명이 될 수도 있습니다.</dd>
		</dl>

		<h3 class="s_tit">속성 값</h3>
		<p>속성 값은 줄바꿈 문자를 제외한 텍스트입니다.</p>
	</section>
	<!-- //속성 설명 -->
	<!-- 샘플 코드 -->
	<section>
		<h3 class="s_tit">샘플 코드</h3>
		<pre class="brush:html">
			<textarea placeholder="비밀번호" title="영문자, 숫자, 특수 기호를 조합한 6자리 이상의 비밀번호를 입력해 주세요."></textarea>
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 메모 -->
	<section>
		<h3 class="s_tit">메모</h3>
		<p>긴 힌트나 조언 텍스트에는 title 속성이 좀 더 적절합니다.</p>
		<p>placeholder 속성을 label 요소를 대체할 목적으로 사용해서는 안됩니다.</p>
		<p>input 요소의 placeholder 속성과의 차이는 힌트 텍스트의 &#39길이&#39 정도입니다. 보통 input 요소의 길이가 textarea 요소보다 짧기 때문입니다. 하지만 명세에서 &#39길이&#39에 대한 명확한 안내는 없고, 일반적인 UI 형태를 고려한 것으로 큰 의미는 없다고 보여집니다.</p>
	</section>
	<!-- //메모 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/the-button-element.html#attr-textarea-placeholder" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="../../syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
</body>
</html>
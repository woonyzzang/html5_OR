<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>radiogroup 속성 (command) : HTML5 Open Reference Guide</title>
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
		<h2 class="s_tit">radiogroup 속성 (command)</h2>

		<dl class="definition">
		<dt>정의</dt>
		<dd>radiogroup 속성은 커맨드 자신이 토글되었을 때 토글될 커맨드 그룹 이름을 지정합니다. 이름의 초점은 부모 요소의 자손 목록입니다. 단, type 속성이 radio일 때에만 이 속성을 사용할 수 있습니다.</dd>
		</dl>

		<h3 class="s_tit">속성 값</h3>
		<p>속성 값은 커맨드 자신이 토글되었을 때 토글될 커맨드 그룹 이름이 됩니다.</p>
	</section>
	<!-- //태그 설명 -->
	<!-- 샘플 코드 -->
	<section>
		<h3 class="s_tit">샘플 코드</h3>
		<pre class="brush:html">
			<command type="radio" radiogroup="groupA" label="선택 1" checked="checked">
			<command type="radio" radiogroup="groupA" label="선택 2">
			<command type="radio" radiogroup="groupA" label="선택 3">
			<command type="radio" radiogroup="groupA" label="선택 4">
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/interactive-elements.html#attr-command-radiogroup" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="../../syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
</body>
</html>
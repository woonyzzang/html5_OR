<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>checked 속성 (command) : HTML5 Open Reference Guide</title>
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
		<h2 class="s_tit">checked 속성 (command)</h2>

		<dl class="definition">
		<dt>정의</dt>
		<dd>checked 속성은 참과 거짓의 불리언 속성입니다. 따라서 이 속성이 존재한다면 커맨드가 선택되었음을 나타냅니다. checked 속성은 type 속성이 checkbox, radio 상태일 경우에만 사용할 수 있습니다.</dd>
		</dl>

		<h3 class="s_tit">속성 값</h3>
		<p>불리언 속성입니다. checked 속성은 checked 속성 그 자체를 선언하거나 또는 checked=&#34;checked&#34; 로 선언하면 선택됨이 되고 속성이 선언되지 않았다면 선택되지 않은 상태 입니다.</p>
	</section>
	<!-- //속성 설명 -->
	<!-- 샘플 코드 -->
	<section>
		<h3 class="s_tit">샘플 코드</h3>
		<pre class="brush:html">
			<command type="radio" radiogroup="alignment" checked="checked" label="왼쪽정렬">
			<command label="필수체크" type="checkbox" checked="checked">
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/interactive-elements.html#attr-command-checked" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="../../syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
</body>
</html>
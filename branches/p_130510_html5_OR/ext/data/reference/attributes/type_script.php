<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>type 속성 (script) : HTML5 Open Reference Guide</title>
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
		<h2 class="s_tit">type 속성 (script)</h2>

		<dl class="definition">
		<dt>정의</dt>
		<dd>type 속성은 스크립트 언어나 데이터 포맷을 표시합니다. 만약 스크립트 언어가 &#39;text&frasl;javascript(기본값)&#39;가 아닌 경우 type 속성은 반드시 사용해야 하며, charset 매개변수를 사용해서는 안됩니다.</dd>
		</dl>

		<h3 class="s_tit">속성 값</h3>
		<p>속성의 값은 유효한 MIME 타입이어야 합니다.</p>
		<p>다음은 몇가지 MIME 타입 문자열입니다.</p>
		<ul class="lst_type">
		<li>application&frasl;ecmascript</li>
		<li>application&frasl;javascript</li>
		<li>application&frasl;x-ecmascript</li>
		<li>application&frasl;x-javascript</li>
		<li>text&frasl;ecmascript</li>
		<li>text&frasl;javascript1.0</li>
		<li>text&frasl;javascript1.1</li>
		<li>text&frasl;javascript1.2</li>
		<li>text&frasl;javascript1.3</li>
		<li>text&frasl;javascript1.4</li>
		<li>text&frasl;javascript1.5</li>
		<li>text&frasl;jscript</li>
		<li>text&frasl;livescript</li>
		<li>text&frasl;x-ecmascript</li>
		<li>text&frasl;x-javascript</li>
		<li>text&frasl;javascript;e4x=1</li>
		</ul>
	</section>
	<!-- //속성 설명 -->
	<!-- 샘플 코드 -->
	<section>
		<h3 class="s_tit">샘플 코드</h3>
		<pre class="brush:html">
			<script type="text/javascript">
			function helloWorld(){
				alert('Hello World!');
			}
			</script>
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 메모 -->
	<section>
		<h3 class="s_tit">메모</h3>
		<p>type 속성을 동적으로 변경하는 것은 아무런 변화도 주지 않습니다.</p>
	</section>
	<!-- //메모 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/scripting-1.html#attr-script-type" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="../../syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
</body>
</html>
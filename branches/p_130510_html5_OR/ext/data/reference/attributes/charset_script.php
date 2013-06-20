<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>charset 속성 (script) : HTML5 Open Reference Guide</title>
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
		<h2 class="s_tit">charset 속성 (script)</h2>

		<dl class="definition">
		<dt>정의</dt>
		<dd>charset 속성은 외부 스크립트 자원의 문자 인코딩을 지정합니다. src 속성을 사용하지 않은 경우는 정의하지 않습니다.</dd>
		</dl>

		<h3 class="s_tit">속성 값</h3>
		<p>값은 유효한 인코딩 이름이어야 합니다. 이때 인코딩에서 선호되는 MIME 이름과 대소문자를구분하지 않는 아스키 값이 일치해야 하며, 외부 자원의 컨텐츠 타입 메타데이터가 있다면 컨텐츠 타입 메타데이터의 charset 매개변수와도 일치해야 합니다.</p>
	</section>
	<!-- //속성 설명 -->
	<!-- 샘플 코드 -->
	<section>
		<h3 class="s_tit">샘플 코드</h3>
		<pre class="brush:html">
			<!-- @src 속성이 지정한 자원은 명시적으로 type 속성으로 정의한 것입니다. -->
			&lt;script type="text/javascript" src="navigation.js" charset="utf-8"&gt;&lt;/script&gt;
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 메모 -->
	<section>
		<h3 class="s_tit">메모</h3>
		<p>charset 속성을 동적으로 변경하는 것은 아무런 변화도 주지 않습니다.</p>
	</section>
	<!-- //메모 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/scripting-1.html#attr-script-charset" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="../../syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
</body>
</html>
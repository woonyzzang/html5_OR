<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>async 속성 (script) : HTML5 Open Reference Guide</title>
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
		<div>
		<h2 class="s_tit">async 속성 (script)</h2>

		<dl class="definition">
		<dt>정의</dt>
		<dd>async 속성은 가능한한 빨리 스크립트를 비동기적으로 실행합니다. src 속성이 없을 경우에는 사용해서는 안됩니다.</dd>
		</dl>

		<h3 class="s_tit">속성 값</h3>
		<p>불리언 속성입니다.</p>
	</section>
	<!-- //태그 설명 -->
	<!-- 샘플 코드 -->
	<section>
		<h3 class="s_tit">샘플 코드</h3>
		<pre class="brush:html">
			<!-- @async 속성이 있다면 스크립트는 가능한 한 빨리 비동기적으로 실행됩니다. -->
			&lt;script type="text/javascript" src="navigation.js" async&gt;&lt;/script&gt;

			<!-- @async 속성이 없고 defer 속성이 있다면, 스크립트는 페이지의 파싱이 완료된 후에 실행됩니다.
				값이 없다면, 스크립트 자원을 가져온 즉시 페이지 파싱을 멈추고 스크립트를 실행합니다. -->
			&lt;script type="text/javascript" src="navigation.js" defer&gt;&lt;/script&gt;

			<!-- @async 속성을 사용하면서 defer 속성을 함게 사용할 수도 있습니다.
				defer 속성을 지원하는 일부 구형 브라우저가 존재하기 때문입니다.
				이 경우 async 속성은 무시되고, defer 속성을 따르게 되어 스크립트를 비동기적으로 실행하게 될 것입니다. -->
			&lt;script type="text/javascript" src="navigation.js" async defer&gt;&lt;/script&gt;
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 메모 -->
	<section>
		<h3 class="s_tit">메모</h3>
		<p>async 속성을 동적으로 변경하는 것은 아무런 변화도 주지 않습니다.</p>
	</section>
	<!-- //메모 -->
</article>

<script src="../../syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
</body>
</html>
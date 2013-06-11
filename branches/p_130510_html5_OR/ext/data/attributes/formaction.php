<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>formaction 속성 : HTML5 Open Reference Guide</title>
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
		<h2 class="s_tit">formaction 속성</h2>

		<dl class="definition">
		<dt>정의</dt>
		<dd>formaction 속성은 서식 값을 제출 하기 위해 사용합니다.</dd>
		<dd>제출 버튼이고 formaction 속성을 갖고 있다면, action 속성의 값이 아닌 formaction 속성의 URL로 전송합니다. fromaction 속성이 명시 되지 않았다면, 폼 소유자의 action 속성의 URL로 전송합니다. 그것도 아니라면 빈 문자열입니다.</dd>
		</dl>

		<h3 class="s_tit">속성 값</h3>
		<p>이 속성이 명시 되었을 경우 속성의 값은 유효한, 앞뒤로 공백을 허용하는 URL이어야 합니다.</p>
	</section>
	<!-- //태그 설명 -->
	<!-- 샘플 코드 -->
	<section>
		<h3 class="s_tit">샘플 코드</h3>
		<pre class="brush:html">
			<form action="a.html">
			<input type="submit" value="등록">
			<button type="submit" formaction="b.html">수정</button>
			</form>
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/association-of-controls-and-forms.html#attr-fs-formaction" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="../../syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
</body>
</html>
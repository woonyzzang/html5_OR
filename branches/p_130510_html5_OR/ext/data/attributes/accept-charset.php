<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>aaccept-charset 속성 : HTML5 Open Reference Guide</title>
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
		<h2 class="s_tit">aaccept-charset 속성</h2>

		<dl class="definition">
		<dt>정의</dt>
		<dd>accept-charset 속성은 서식 제출시 사용할 문자 인코딩을 지정합니다. 문자 인코딩인코딩이 지정되었다면, 그 값은 스페이스로 구분된 순서 있는 예약어들이어야 하며, 각각의 예약어들은 ASCII 코드를 기준으로 대소문자를 구분합니다. 또한 이 값은 IANACharset에 제시된 아스키 호환 문자인코딩의 MIME name과 매치되어야 합니다.</dd>
		</dl>

		<h3 class="s_tit">속성 값</h3>
		<p>문자 인코딩 입니다.</p>
	</section>
	<!-- //태그 설명 -->
	<!-- 샘플 코드 -->
	<section>
		<h3 class="s_tit">샘플 코드</h3>
		<pre class="brush:html">
			&lt;form action="form_action.psp" accept-charset="ISO-8859-1"&gt;
			<label for="uid">First name:</label> <input type="text" name="uid" id="uid"><br>
			<label for="pw">Last name:</label> <input type="password" name="pw" id="pw"><br>
			<input type="submit" value="로그인">
			&lt;/form&gt;
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/forms.html#attr-form-accept-charset" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="../../syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
</body>
</html>
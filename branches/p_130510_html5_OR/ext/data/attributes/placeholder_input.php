<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>placeholder 속성 (input) : HTML5 Open Reference Guide</title>
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
<script>

</script>
</head>
<body>
<article id="content_desc">
	<!-- 태그 설명 -->
	<section>
		<h2 class="s_tit">placeholder 속성 (input)</h2>

		<dl class="definition">
		<dt>정의</dt>
		<dd>placeholder 속성은 &#39;짧은&#39;힌트(한 단어나 짧은 구)를 나타냅니다. 이러한 힌트는 사용자가 데이터를 입력하는데 도움을 주는 목적입니다. 이것은 값의 예가 될수도 있고, 기대하는 형태의 짤막한 설명이 될 수도 있습니다.</dd>
		</dl>

		<h3 class="s_tit">속성 값</h3>
		<p>속성 값은 줄바꿈 문자를 제외한 텍스트입니다.</p>
	</section>
	<!-- //태그 설명 -->
	<!-- 샘플 코드 -->
	<section>
		<h3 class="s_tit">샘플 코드</h3>
		<pre class="brush:html">
			<fieldset>
			<legend>메일 보내기</legend>
				<p><label>이름: <input type="text" name="fullName" placeholder="Joe Seung Woon"></label></p>
				<p><label>비밀번호: <input type="password" name="pw"></label></p>
				<p><label>이메일: <input type="email" name="mail" placeholder="woonyzzang@example.com"></label></p>
				<p><label>홈페이지: <input type="url" name="hp" placeholder="http://example.com"></label></p>
			</fieldset>
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 메모 -->
	<section>
		<h3 class="s_tit">메모</h3>
		<p>긴 힌트나 조언 텍스트에는 title 속성이 좀 더 적절합니다.</p>
		<p>placeholder 속성을 label 요소를 대체할 목적으로 사용해서는 안됩니다.</p>
	</section>
	<!-- //메모 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/common-input-element-attributes.html#attr-input-placeholder" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="../../syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
</body>
</html>
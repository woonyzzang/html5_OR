<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>disabled 속성 : HTML5 Open Reference Guide</title>
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
		<h2 class="s_tit">disabled 속성</h2>

		<dl class="definition">
		<dt>정의</dt>
		<dd>이 속성을 지정하면 요소가 화면에 표시되기는 하지만 사용자가 입력하거나 수정할 수 없습니다.</dd>
		<dd>command 요소, fieldset 요소, optgroup 요소, option 요소의 disabled 속성은 다른 의미를 포함하고 있습니다.</dd>
		</dl>

		<h3 class="s_tit">속성 값</h3>
		<p>불리언 속성입니다.</p>
	</section>
	<!-- //태그 설명 -->
	<!-- 샘플 코드 -->
	<section>
		<h3 class="s_tit">샘플 코드</h3>
		<pre class="brush:html">
			<!-- @disabled 속성이 있는 요소의 스타일도 원하는대로 바꿀 수 있습니다. -->
			&lt;head&gt;
			...
			&lt;style&gt;
			.dis[disabled]{background:#eee;text-decoration:line-through}
			&lt;/style&gt;
			&lt;/head&gt;

			&lt;body&gt;
			<fieldset>
			<legend>Disabled</legend>
				<input type="text" value="일반 input">
				<input type="text" value="disabled에 스타일을 줍니다." disabled="disabled" class="dis"><br>
				<input type="text" value="일반 disabled" disabled="disabled">
			</fieldset>
			&lt;/body&gt;
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/association-of-controls-and-forms.html#attr-fe-disabled" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="../../syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
</body>
</html>
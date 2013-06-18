<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>maxlength 속성 (input) : HTML5 Open Reference Guide</title>
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
		<h2 class="s_tit">max 속성 (input)</h2>

		<dl class="definition">
		<dt>정의</dt>
		<dd>maxlength 속성은 폼 콘트롤의 최대 길이를 지정하는 속성입니다.</dd>
		<dd>속성에 올바른 값이 사용 었다면, 사용된 숫자는 폼 콘트롤 요소에서 허용하는 최대 길이가 됩니다. 속성이 생략되었거나 그 값을 파싱하는 그 값을 파싱하는 과정에서 에러가 있다면, 폼 콘트롤 요소의 길이 제한은 없는 것입니다. 또한, input 요소에서 maxlength 속성이 명시되었다면, input 요소의 value 속성 값은 maxlength 속성 값 이하로 길이가 제한됩니다.</dd>
		</dl>

		<h3 class="s_tit">속성 값</h3>
		<p>이 속성을 사용 하였다면, 그 값은 유효한 양의 정수여야 합니다.</p>
	</section>
	<!-- //태그 설명 -->
	<!-- 샘플 코드 -->
	<section>
		<h3 class="s_tit">샘플 코드</h3>
		<pre class="brush:html">
			<p><label>애칭: <input type="text" name="nickName" maxlength="8"></label></p>
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/common-input-element-attributes.html#the-maxlength-attribute" target="_blank">최신 명세</a></li>
		<li><a href="http://www.w3.org/TR/2011/WD-html5-20110113/association-of-controls-and-forms.html#attr-fe-maxlength" target="_blank">form control maxlength attribute</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="../../syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
</body>
</html>
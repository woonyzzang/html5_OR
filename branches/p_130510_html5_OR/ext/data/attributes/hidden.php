<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>hidden 속성 : HTML5 Open Reference Guide</title>
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
		<h2 class="s_tit">hidden 속성</h2>

		<dl class="definition">
		<dt>정의</dt>
		<dd>hidden 속성은 사용자 에이전트로 하여금 요소를 렌더링하지 않도록 합니다.</dd>
		</dl>

		<h3 class="s_tit">속성 값</h3>
		<p>불리언 속성입니다.</p>
	</section>
	<!-- //태그 설명 -->
	<!-- 샘플 코드 -->
	<section>
		<h3 class="s_tit">샘플 코드</h3>
		<pre class="brush:html">
			<section id="webgame" hidden="hidden">
			...
			</section>
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 메모 -->
	<section>
		<h3 class="s_tit">메모</h3>
		<ul class="lst_type">
		<li>hidden 속성으로 감추어진 요소들은 스크린리더를 포함해 사용자 에이전트에서 보여지지 않습니다. 따라서, 사용자의 접근이 필요한 컨텐츠 요소를 hidden 속성으로 감추는 것은 적절치 않습니다(예: 탭 네비게이션).</li>
		<li>hidden 속성을 가진 요소를 참조하거나 링크해서는 안됩니다. hidden 속성을 갖는 요소는 렌더링되지 않은 요소이기 때문에 링크를 거는 것은 적절치 않습니다.</li>
		<li>hidden 속성을 갖는 경우 사용자와 상호작용할 수 있는 상황이 아니므로 ARIA 속성 aria-describedby를 사용하는 것 역시 올바르지 않습니다.</li>
		<li>hidden 속성을 갖는 요소 안에 포함된 스크립트나 폼 컨트롤들은 실행되거나, 제출될 수 있습니다. 사용자에게 보여지는 표현만이 보이지 않습니다.</li>
		</ul>
	</section>
	<!-- //메모 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/editing.html#the-hidden-attribute" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="../../syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
</body>
</html>
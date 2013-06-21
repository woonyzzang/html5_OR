<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>autofocus 속성 : <?php echo TITLE_REFERENCE; ?></title>
<?php include RELATIEV_PATH.'common_inc.php'; ?>
</head>
<body>
<article id="content_desc">
	<!-- 속성 설명 -->
	<section id="info"><!-- @new Ext.XTemplate --></section>
	<!-- //속성 설명 -->
	<!-- 샘플 코드 -->
	<section>
		<h3 class="s_tit">샘플 코드</h3>
		<pre class="brush:html">
			<!-- @다음 두가지는 모두 true로 간주됩니다. 즉, 페이지를 로드하면 이 요소는자동으로 포커스를 받습니다. -->
			&lt;input type="text" autofocus&gt;

			&lt;input type="text" autofocus="autofocus"&gt;
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 메모 -->
	<section>
		<h3 class="s_tit">메모</h3>
		<p>autofocus 속성은 페이지당 하나만 쓸 수 있습니다. 유감스럽게도 W3C 유효성 검사 페이지는 autofocus를 두개 쓴 것을 에러로 발견하지 못하고 있습니다. 이는 autofocus 속성을 속성을 여러개 사용할 수 있다는 뜻이 아닙니다. 유효성 검사기가 에러를 찾아 주지 못하므로 조심해야 한다는 의미입니다.</p>
	</section>
	<!-- //메모 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/association-of-controls-and-forms.html#attr-fe-autofocus" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="<?php echo PATH; ?>syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
<script>
Ext.onReady(function(){
	var tplData = {
		attr: 'autofocus',
		item: [{
			desc:'autofocus 속성은 페이지가 로드될 때 요소에 자동으로 포커스를 받도록 정의합니다.'
		}],
		txt: '불리언 속성입니다.'
	};

	tpl2.overwrite(Ext.get('info'), tplData);
});
</script>
</body>
</html>
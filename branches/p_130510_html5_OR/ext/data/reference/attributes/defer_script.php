<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>defer 속성 (script) : <?php echo TITLE_REFERENCE; ?></title>
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
			<!-- @async 속성이 없고, defer 속성이 있다면, 스크립트는 페이지의 파싱이 완료된 후에 실행됩니다. -->
			&lt;script type="text/javascript" src="navigation.js" defer&gt;&lt;/script&gt;

			<!-- @async 속성과 defer 속성이 함께 있는 경우에는 async 속성을 지원하는 최신 브라우저에서 기본적으로 async 속성을 따르지만,
				async 속성을 인식하지 못하는 구형 브라우저에서는 defer 속성을 인식하는 브라우저와 인식하지 못하는 브라우저인지에 따라 처리가 다를 수 있습니다.
				defer 속성을 인식하는 구형 브라우저는 async 속성을 처리하지는 못하겠지만, defer 속성을 따르게 되어 비동기적으로 스크립트를 실행시킬 것입니다.
				두 속성 모두 인식하지 못하는 구형 브라우저의 경우는 동기적으로 실행될 것입니다. -->
			&lt;script type="text/javascript" src="navigation.js" async defer&gt;&lt;/script&gt;
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 메모 -->
	<section>
		<h3 class="s_tit">메모</h3>
		<p>defer 속성을 동적으로 변경하는 것은 아무런 변화도 주지 않습니다.</p>
	</section>
	<!-- //메모 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/scripting-1.html#attr-script-async" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="<?php echo PATH; ?>syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
<script>
Ext.onReady(function(){
	var tplData = {
		attr: 'defer',
		meaning: 'script',
		item: [{
			desc:'defer 속성은 페이지 파싱이 완료된 후에 스크립트를 실행합니다. src 속성이 없을 경우 사용해선 안 됩니다.'
		}],
		txt: '불리언 속성입니다.'
	};

	tpl2.overwrite(Ext.get('info'), tplData);
});
</script>
</body>
</html>
<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>seamless 속성 (iframe) : <?php echo TITLE_REFERENCE; ?></title>
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
			<!-- @'navigation.html' 페이지의 모든 링크는 iframe 요소가 있는 부모의 문맥(browsing context)에 열리게 됩니다.
				seamless 속성을 지원하지 않는 구형 사용자 에이전트를 위해 'navigation.html' 페이지에 스타일을 명시적으로 포함 시킬 수 있으며,
				base 요소의 target 속성의 값을 '_parent' 로 지정 할 수 있습니다. -->
			&lt;nav&gt;&lt;iframe seamless src="navigation.html"&gt;&lt;/iframe&gt;&lt;/nav&gt;
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 메모 -->
	<section>
		<h3 class="s_tit">메모</h3>
		<p>이 속성은 동적으로 설정되거나 제거될 수 있습니다. 렌더링 업데이트가 동시에 일어납니다.</p>
	</section>
	<!-- //메모 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/the-iframe-element.html#attr-iframe-seamless" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="<?php echo PATH; ?>syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
<script>
Ext.onReady(function(){
	var tplData = {
		attr: 'seamless',
		meaning: 'iframe',
		item: [{
			desc:'seamless 속성은 iframe 요소의 문맥(browsing context)을 포함하는 페이지의 일부분인 것처럼 렌더링이 됩니다.'
		}],
		txt: '불리언 속성입니다.'
	};

	tpl2.overwrite(Ext.get('info'), tplData);
});
</script>
</body>
</html>
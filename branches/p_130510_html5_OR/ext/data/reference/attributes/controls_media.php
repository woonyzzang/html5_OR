<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>controls 속성 : <?php echo TITLE_REFERENCE; ?></title>
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
			&lt;video src="opening.ogv" controls&gt;&lt;/video&gt;
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 메모 -->
	<section>
		<h3 class="s_tit">메모</h3>
		<p>controls 속성을 사용하는 경우: 기본적으로 각 브라우저 고유의 콘트를 바를 보여줍니다.</p>
		<p>controls 속성을 사용하지 않은 경우: 콘트롤바가 없는 경우에도 브라우저의 기본 콘텍스트 메뉴를 통해서 미디어를 제어할 수 있습니다.</p>
		<p>콘텍스트 메뉴를 이용하면 미디어의 URL을 직접 확인할 수 있고, 저장할 수도 있습니다. 파이어폭스는 동영상인 경우 전체화면 보기를 제공합니다.</p>
	</section>
	<!-- //메모 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/video.html#attr-media-controls" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="<?php echo PATH; ?>syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
<script>
Ext.onReady(function(){
	var tplData = {
		attr: 'controls',
		item: [{
			desc:'controls속성은 사용자 에이전트에서 제공하는 컨트롤러를 사용하도록 합니다.'
		}],
		txt: '불리언 속성입니다.'
	};

	tpl2.overwrite(Ext.get('info'), tplData);
});
</script>
</body>
</html>
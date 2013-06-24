<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>poster 속성 (video) : <?php echo TITLE_REFERENCE; ?></title>
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
			&lt;video src="opening.ogv" poster="cover.png" controls&gt;&lt;/video&gt;
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/video.html#attr-video-poster" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="<?php echo PATH; ?>syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
<script>
Ext.onReady(function(){
	var tplData = {
		attr: 'poster',
		meaning: 'video',
		item: [{
			desc:'poster 속성은 사용자 에이전트가 비디오 데이터를 사용할 수 없을 때 보여줄 이미지 파일의 주소를 지정하는 것으로 일부 웹브라우저에서는 동영상이 다운로드될 때까지 대신 표시되기도 합니다.'
		}],
		txt: '속성 값은 유효한, 앞뒤로 공백을 허용하고 비어 있지 않은 URL이어야 합니다.'
	};

	tpl2.overwrite(Ext.get('info'), tplData);
});
</script>
</body>
</html>
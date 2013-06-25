<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>width 속성 : <?php echo TITLE_REFERENCE; ?></title>
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
			&lt;embed type="video/quicktime" src="/web_design/paris_vegas.mov" width="340"&gt;

			&lt;video src="data/cssniteseoul_opening.ogv" width="340"&gt;&lt;/video&gt;
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/the-map-element.html#attr-dim-width" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="<?php echo PATH; ?>syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
<script>
Ext.onReady(function(){
	var tplData = {
		attr: 'width',
		item: [{
			desc:'width 속성은 img 요소, iframe 요소, embed 요소, object 요소, video 요소 그리고 이미지 버튼 상태인 input 요소 요소의 가로 크기를 명시합니다.'
		},{
			desc:'명시된 크기는 자원 자체의 크기와는 다를 수 있으며 width, height 속성 값을 모두 0으로 지정했다면 해당 요소는 사용자에게 드러날 것을 의도하지 않는다는 것을 의미합니다.(예를 들어 방문 카운터, 일부 제한 서비스)'
		}],
		txt: '속성값의 단위는 CSS에서 사용하는 픽셀이어야 합니다. 속성을 사용했다면, 그 값은 유효한 양의 정수여야 합니다.'
	};

	tpl2.overwrite(Ext.get('info'), tplData);
});
</script>
</body>
</html>
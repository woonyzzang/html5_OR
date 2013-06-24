<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>open 속성 (details) : <?php echo TITLE_REFERENCE; ?></title>
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
			&lt;details open="open"&gt;
			&lt;summary&gt;상세 정보&lt;/summary&gt;
				&lt;p&gt;1510만화소, 1:1.6 CMOS, 3.0인치LCD, 1&frasl;4000초(벌브지원), 동영상+음성&frasl;20fps&frasl;1920x1080, ISO12800, 초당3.4매, 1&frasl;200초동조, 9개초점영역, 먼지제거, 라이브뷰, 얼굴인식, FULL-HD동영상, HDMI출력, 한글지원&lt;/p&gt;
			&lt;/details&gt;
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/interactive-elements.html#attr-details-open" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="<?php echo PATH; ?>syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
<script>
Ext.onReady(function(){
	var tplData = {
		attr: 'open',
		meaning: 'details',
		item: [{
			desc:'open 속성은 details 요소의 세부 사항을 노출합니다.'
		}],
		txt: '속성 값은 불리언 속성입니다. 속성이 존재하지 않는다면 세부 사항이 노출되지 않습니다.'
	};

	tpl2.overwrite(Ext.get('info'), tplData);
});
</script>
</body>
</html>
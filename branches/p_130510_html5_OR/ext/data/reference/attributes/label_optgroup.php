<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>label 속성 (optgroup) : <?php echo TITLE_REFERENCE; ?></title>
<?php include RELATIEV_PATH.'common_inc.php'; ?>
</head>
<body>
<article id="content_desc">
	<!-- 속성 설명 -->
	<section id="info"><!-- @new Ext.XTemplate --></section>
	<!-- //속성 설명 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/the-button-element.html#attr-optgroup-disabled" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script>
Ext.onReady(function(){
	var tplData = {
		attr: 'label',
		meaning: 'optgroup',
		item: [{
			desc:'lable 속성은 optgroup 요소의 그룹의 이름으로 사용됩니다. 이 속성은 반드시 작성되어야 합니다.'
		}],
		txt: '없음'
	};

	tpl2.overwrite(Ext.get('info'), tplData);
});
</script>
</body>
</html>
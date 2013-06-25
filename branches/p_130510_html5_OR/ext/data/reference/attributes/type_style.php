<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>type 속성 (style) : <?php echo TITLE_REFERENCE; ?></title>
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
		<li><a href="http://www.w3.org/TR/html5/semantics.html#attr-style-type" target="_blank">최신 명세</a></li>
		<li><a href="http://www.w3.org/TR/html5/infrastructure.html#valid-mime-type" target="_blank">유효한 MIME 타입</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script>
Ext.onReady(function(){
	var tplData = {
		attr: 'type',
		meaning: 'style',
		item: [{
			desc:'style 요소에서의 type 속성은 스타일 언어를 나타냅니다. 이 속성이 존재하지 않는다면, 기본값으로 \"text\/css\"를 사용합니다.'
		}],
		txt: '값은 스타일 언어를 지칭하는 유효한 MIME 타입이어야 합니다. charset 매개변수는 사용할 수 없습니다.'
	};

	tpl2.overwrite(Ext.get('info'), tplData);
});
</script>
</body>
</html>
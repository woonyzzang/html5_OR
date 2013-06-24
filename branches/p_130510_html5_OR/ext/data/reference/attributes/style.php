<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>style 속성 (input) : <?php echo TITLE_REFERENCE; ?></title>
<?php include RELATIEV_PATH.'common_inc.php'; ?>
</head>
<body>
<article id="content_desc">
	<!-- 속성 설명 -->
	<section id="info"><!-- @new Ext.XTemplate --></section>
	<!-- //속성 설명 -->
	<!-- 메모 -->
	<section>
		<h3 class="s_tit">메모</h3>
		<p>style 속성을 제거되더라도 문서는 여전히 읽을 수 있고, 사용할 수 있어야 합니다.</p>
		<p>style 속성을 사용해서 문서의 내용을 감추거나 보이는 것은 명세의 요구 사항을 준수하지 않는 것입니다. 이런 경우 hidden 속성을 사용합니다.</p>
		</ul>
	</section>
	<!-- //메모 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/elements.html#the-style-attribute" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="<?php echo PATH; ?>syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
<script>
Ext.onReady(function(){
	var tplData = {
		attr: 'style',
		item: [{
			desc:'style 속성은 요소에 CSS 스타일 명세를 정의합니다.'
		}],
		txt: 'CSS 스타일 명세를 따릅니다.'
	};

	tpl2.overwrite(Ext.get('info'), tplData);
});
</script>
</body>
</html>
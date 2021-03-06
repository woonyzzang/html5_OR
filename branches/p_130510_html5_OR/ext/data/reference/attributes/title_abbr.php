<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>title 속성 (abbr) : <?php echo TITLE_REFERENCE; ?></title>
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
		<li><a href="http://html5.clearboth.org/text-level-semantics.html#attr-abbr-title" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script>
Ext.onReady(function(){
	var tplData = {
		attr: 'title',
		meaning: 'abbr',
		item: [{
			desc:'abbr 요소에서 사용하는 title 속성은 특별한 의미를 갖습니다.'
		}],
		txt: 'title 속성은 약어의 축약되지 않은 텍스트를 값으로 가지며, 원형 이외의 다른 텍스트는 포함할 수 없습니다.',
		txt1: 'title 속성으로 약어에 대한 원형을 제공하더라도 동일 문서 내에 같은 내용을 가진 abbr 요소들에 대해서 동일 값을 가질 필요는 없습니다. 각각의 abbr 요소는 독립적이므로 각 abbr 요소의 title 속성 역시 다른 값을 가질 수 있습니다.'
	};

	tpl2.overwrite(Ext.get('info'), tplData);
});
</script>
</body>
</html>
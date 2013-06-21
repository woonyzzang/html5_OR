<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>class 속성 : <?php echo TITLE_REFERENCE; ?></title>
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
		<li><a href="http://www.w3.org/TR/html5/elements.html#classes" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script>
Ext.onReady(function(){
	var tplData = {
		attr: 'class',
		item: [{
			desc:'q 요소 에서의 cite 속성은 인용문의 원본 출처를 표기할 수 있습니다. 다른 원본 페이지에 있던 내용을 인용한 경우에는 cite 속성에 유효한 URL을 선언할 수 있습니다. 유의점으로는 cite 요소요소는 어떤 작품의 제목을 나타내지만, cite 속성은 인용문의 원본출처를 표기한다는 것입니다.'
		}],
		txt: 'cite 속성을 사용했다면, 유효한 URL이어야 합니다.',
		txt1: '상대적으로 해석한 링크를 따라갈 수 있어야 합니다.'
	};

	tpl2.overwrite(Ext.get('info'), tplData);
});
</script>
</body>
</html>
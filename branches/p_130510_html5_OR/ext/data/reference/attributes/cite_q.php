<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>cite 속성 (q) : <?php echo TITLE_REFERENCE; ?></title>
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
			&lt;p&gt;웹 접근성이란&lt;q cite="http://www.wah.or.kr/Accessibility/define.asp"&gt;장애인뿐만 아니라 모든 사람이 정보통신 기기나 서비스를 손쉽게 활용할 수 있도록 만드는 것&lt;/q&gt;을 말합니다.&lt;/p&gt;
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/text-level-semantics.html#attr-q-cite" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="<?php echo PATH; ?>syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
<script>
Ext.onReady(function(){
	var tplData = {
		attr: 'cite',
		meaning: 'q',
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
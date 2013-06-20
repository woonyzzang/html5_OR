<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>alt 속성 (input) : <?php echo TITLE_REFERENCE; ?></title>
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
			&lt;input type="image" src="submit.png" alt="보내기"&gt;
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/number-state.html#attr-input-alt" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="<?php echo PATH; ?>syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
<script>
Ext.onReady(function(){
	var tplData2 = {
		attr: 'alt',
		meaning: 'input',
		item: [{
			desc:'type 속성이 Image Button state일 경우 alt 속성을 활용하여 이미지를 사용할 수 없는 사용자와 사용자 에이전트가 대신 사용할 버튼에 대한 텍스트 레이블을 제공합니다. 이 때 Image Button state이라면 alt 속성은 반드시 있어야 합니다.'
		}],
		txt: '비어있지 않은 문자열을 포함해야 합니다.'
	};

	tpl2.overwrite(Ext.get('info'), tplData2);
});
</script>
</body>
</html>
<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>src 속성 (input) : <?php echo TITLE_REFERENCE; ?></title>
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
		<li><a href="http://www.w3.org/TR/html5/number-state.html#attr-input-src" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="<?php echo PATH; ?>syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
<script>
Ext.onReady(function(){
	var tplData = {
		attr: 'src',
		meaning: 'input',
		item: [{
			desc:'src 속성은 type 속성이 Image Button state일 경우 src 속성에 URL을 작성하여 이미지를 사용자에게 보여줍니다. Image Button state이라면 src 속성은 반드시 있어야 합니다.'
		}],
		txt: '값은 유효해야 하며, 앞뒤로 공백을 허용하고 비어 있지 않은 URL이어야 합니다.',
		txt1: '참조하는 이미지는 상호작용성을 가질 수 없고, 애니메이션은 관계 없으며, 페이지되지 않고 스크립트되지 않은 이미지여야 합니다.'
	};

	tpl2.overwrite(Ext.get('info'), tplData);
});
</script>
</body>
</html>
<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>tabindex 속성 : <?php echo TITLE_REFERENCE; ?></title>
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
		<p>&#39;tab index&#39; 라는 이름은 탭 키를 이용해 내비게이션하는 것에서 유래한 것입니다.</p>
		<p>&#39;tabbing(탭 전진)&#39;이라는 단어는 포커스를 가질 수 있는 요소들을 탭 내비게이션을 통해 앞으로 이동하는 것을 말합니다.</p>
		</ul>
	</section>
	<!-- //메모 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/editing.html#attr-tabindex" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="<?php echo PATH; ?>syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
<script>
Ext.onReady(function(){
	var tplData = {
		attr: 'tabindex',
		item: [{
			desc:'tabindex 속성은 요소가 포커스를 가질 수 있는지 확인하고, 포커스 내비게이션을 위한 상대적 순서를 명시합니다.'
		}],
		txt: '속성 값은 유효한 정수입니다.'
	};

	tpl2.overwrite(Ext.get('info'), tplData);
});
</script>
</body>
</html>
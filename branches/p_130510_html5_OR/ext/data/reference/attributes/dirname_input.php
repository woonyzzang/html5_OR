<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>dirname 속성 (input) : <?php echo TITLE_REFERENCE; ?></title>
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
			&lt;form action="addcomment.cgi" method="post"&gt;
			&lt;p&gt;&lt;label&gt;내용: &lt;input type="text" name="comment" dirname="comment.dir" required&gt;&lt;/label&gt;&lt;/p&gt;
			&lt;p&gt;&lt;button type="submit" value="add" name="mode"&gt;등록&lt;/button&gt;&lt;/p&gt;
			&lt;/form&gt;
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/common-input-element-attributes.html#attr-input-dirname" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="<?php echo PATH; ?>syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
<script>
Ext.onReady(function(){
	var tplData = {
		attr: 'dirname',
		meaning: 'input',
		item: [{
			desc:'dirname 속성은 폼 컨트롤의 dirname 속성을 나타냅니다.'
		},{
			desc:'나열 속성에 속합니다.'
		}],
		txt: '속성을 사용한 경우 빈 문자열은 사용할 수 없습니다.'
	};

	tpl2.overwrite(Ext.get('info'), tplData);
});
</script>
</body>
</html>
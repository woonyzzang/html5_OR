<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>formaction 속성 : <?php echo TITLE_REFERENCE; ?></title>
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
			&lt;form action="a.html"&gt;
			&lt;input type="submit" value="등록"&gt;
			&lt;button type="submit" formaction="b.html"&gt;수정&lt;/button&gt;
			&lt;/form&gt;
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/association-of-controls-and-forms.html#attr-fs-formaction" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="<?php echo PATH; ?>syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
<script>
Ext.onReady(function(){
	var tplData = {
		attr: 'formaction',
		item: [{
			desc:'formaction 속성은 서식 값을 제출 하기 위해 사용합니다.'
		},{
			desc:'제출 버튼이고 formaction 속성을 갖고 있다면, action 속성의 값이 아닌 formaction 속성의 URL로 전송합니다. fromaction 속성이 명시 되지 않았다면, 폼 소유자의 action 속성의 URL로 전송합니다. 그것도 아니라면 빈 문자열입니다.'
		}],
		txt: '이 속성이 명시 되었을 경우 속성의 값은 유효한, 앞뒤로 공백을 허용하는 URL이어야 합니다.'
	};

	tpl2.overwrite(Ext.get('info'), tplData);
});
</script>
</body>
</html>
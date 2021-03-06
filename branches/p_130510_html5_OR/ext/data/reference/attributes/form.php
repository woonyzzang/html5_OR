<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>form 속성 : <?php echo TITLE_REFERENCE; ?></title>
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
			&lt;fieldset form="login"&gt;
			&lt;legend&gt;로그인&lt;/legend&gt;
				&lt;p&gt;&lt;label&gt;아이디 &lt;input type="text" name="id"&gt;&lt;label&gt;&lt;/p&gt;
				&lt;p&gt;&lt;label&gt;비밀번호 &lt;input type="password" name="pw"&gt;&lt;label&gt;&lt;/p&gt;
			&lt;/fieldset&gt;
			&lt;form name="login"&gt;
			&lt;p&gt;&lt;input type="submit" value="로그인"&gt;&lt;/p&gt;
			&lt;/form&gt;

			&lt;p&gt;&lt;label form="frm"&gt;닉네임 : &lt;input type="text" name="nickname"&gt;&lt;/label&gt;&lt;/p&gt;
			&lt;form method="get" action="#" id="frm"&gt;
			&lt;input type="submit" value="전송"&gt;
			&lt;/form&gt;
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/association-of-controls-and-forms.html#attr-fae-form" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="<?php echo PATH; ?>syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
<script>
Ext.onReady(function(){
	var tplData = {
		attr: 'form ',
		item: [{
			desc:'form 속성은 폼 관련 요소를 form 요소에 명시적으로 연결합니다. 기본적으로는 가장 가까운 조상인 form 요소와 연결됩니다.'
		},{
			desc:'폼 관련 요소는 form 요소와의 연결을 갖고 있습니다. 이 form 요소를 해당 요소의 폼 소유자라고 부릅니다. 폼 관련 요소가 form 요소와 연결되어 있지 않다면 폼 소유자가 null 이라고 합니다.'
		},{
			desc:'form 속성을 사용 함으로 폼 관련 요소는 form 요소안에 반드시 작성하지 않아도 됩니다.'
		}],
		txt: '같은 문서 상에 존재하는 form 요소의 id 속성 값이어야 합니다.'
	};

	tpl2.overwrite(Ext.get('info'), tplData);
});
</script>
</body>
</html>
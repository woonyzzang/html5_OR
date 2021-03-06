<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>name 속성 (meta) : <?php echo TITLE_REFERENCE; ?></title>
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
			<!-- @application-name 키워드 -->
			&lt;meta name="application-name" content="HTML5_OR"&gt;

			<!-- @author 키워드 -->
			&lt;meta name="author" content="Joe Seung Woon"&gt;

			<!-- @description 키워드 -->
			&lt;meta name="description" content="HTML5 자세한 명세서를 정리하는 페이지입니다."&gt;

			<!-- @keywords 키워드 -->
			&lt;meta name="keywords " content="HTML,태그,속성,이벤트"&gt;
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/semantics.html#attr-meta-name" target="_blank">meta 요소의 name 속성의 최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="<?php echo PATH; ?>syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
<script>
Ext.onReady(function(){
	var tplData = {
		attr: 'name',
		meaning: 'meta',
		item: [{
			desc:'name 속성은 meta 요소에서 문서의 메타데이터를 정의합니다.'
		}],
		txt: '메타데이터는 \<이름\/값\> 쌍으로 표현되는데, name의 속성이 그 이름을 나타내고, content 속성이 값을 나타냅니다. 이름들은 대소문자를 구별하지 않습니다.',
		grid: true
	};

	tpl2.overwrite(Ext.get('info'), tplData);

	var storeData = Ext.create('Ext.data.Store',{
		fields: ['keyword','desc'],
		data: {'items':[
			{keyword:'application-name', desc:'페이지가 나타내는 웹 애플리케이션의 이름으로 짧은 문자열이어야 합니다. 형식에는 제한이 없지만 웹 애플리케이션 아닌 경우 이 속성은 사용되어서는 안됩니다. 페이지 당 하나만 존재할 수 있습니다.'},
			{keyword:'author', desc:'페이지의 저자를 나타내는 정형화되지 않은 문자열을 사용해야 합니다.'},
			{keyword:'description', desc:'페이지를 설명하는 문자열을 지정할 수 있습니다. 형식에는 제한이 없으며, 값은 페이지의 디렉토리 - 검색엔진 등에서 -(dash)로 사용하기 적합한 것이어야 합니다. 페이지 당 하나만 존재할 수 있습니다.'},
			{keyword:'generator', desc:'페이지를 생성한 프로그램 중 하나를 표시할 수 있습니다. 형식에는 제한이 없지만, 하드코딩된 경우 사용하지 말아야 합니다.'},
			{keyword:'keywords', desc:'키워드 값은 콤마(,)로 구분된 토큰 목록이어야 하며, 각각의 토큰들은 페이지와 관계있는 키워드이어야 합니다.'}
		]},
		proxy : {
			type: 'memory',
			reader: {
				type: 'json',
				root: 'items'
			}
		}
	});

	var grid = Ext.create('Ext.grid.Panel', {
		renderTo: Ext.get('gridAttr'),
		title: '속성 정의 목록',
		store: storeData,
		columns: [
			{header:'키워드', dataIndex:'keyword'},
			{header:'설명', dataIndex:'desc', flex:1}
		]
	});
});
</script>
</body>
</html>
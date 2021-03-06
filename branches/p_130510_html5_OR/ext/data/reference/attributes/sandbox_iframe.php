<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>sandbox 속성 (iframe) : <?php echo TITLE_REFERENCE; ?></title>
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
			&lt;iframe sandbox src="board.html"&gt;&lt;/iframe&gt;

			&lt;iframe sandbox="allow-same-origin" src="board.html"&gt;&lt;/iframe&gt;

			<!-- @allow-scripts 키워드와 allow-same-origin 키워드를 함께 사용하면, 포함된 페이지가 같은 소스(origin)일 경우
				포함된 페이지의 스크립트로 iframe 요소의 sandbox 속성을 없애버리는 것도 허용합니다. -->
			&lt;iframe sandbox="allow-same-origin allow-scripts" src="board.html"&gt;&lt;/iframe&gt;
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 메모 -->
	<section>
		<h3 class="s_tit">메모</h3>
		<p>사용자로 하여금 악성 컨텐츠에 직접 방문하도록 유도할 수 있다면, 악성 컨텐츠를 샌드박스처리하는 것은 믿을만한 안전조치가 되지 못합니다. 이런 위험을 제한하려면, text&frasl;html-sandboxed MIME 타입을 사용해야 합니다.</p>
	</section>
	<!-- //메모 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/the-iframe-element.html#attr-iframe-sandbox" target="_blank">최신 명세</a></li>
		<li><a href="http://www.w3.org/TR/html5/browsers.html#origin" target="_blank">Origin 기준 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="<?php echo PATH; ?>syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
<script>
Ext.onReady(function(){
	var tplData = {
		attr: 'sandbox',
		meaning: 'iframe',
		item: [{
			desc:'sandbox 속성은 iframe 요소내에 위치한 모든 내용에 추가적인 제한을 걸 수 있습니다.'
		},{
			desc:'속성이 설정되면, 요소의 컨텐츠는 가상의 소스(origin)로부터 유래한 것으로 취급됩니다. 이 상태에서 컨텐츠의 폼과 스크립트는 차단되며, 링크는 다른 문맥(browsing context)으로 이동할 수 없고, 플러그인은 비활성화됩니다.'
		}],
		txt: '공백 문자로 구분되고 순서 없이 유일한 토큰 목록이며 대소문자를 구분하지 않는 아스키 값을 가집니다.',
		grid: true
	};

	tpl2.overwrite(Ext.get('info'), tplData);

	var storeData = Ext.create('Ext.data.Store',{
		fields: ['token','desc'],
		data: {'items':[
			{token:'allow-same-origin', desc:'컨텐츠를 가상의 소스에서 온 것으로 강제하지 않습니다.'},
			{token:'allow-top-navigation', desc:'컨텐츠가 최상의 레벨의 문맥으로 이동하는 것(navigate)을 허용합니다.'},
			{token:'allow-forms', desc:'폼을 허용합니다.'},
			{token:'allow-scripts', desc:'스크립트를 허용합니다. (스크립트 팝업은 사용할 수 없습니다.)'}
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
			{header:'토큰', dataIndex:'token', width:120},
			{header:'설명', dataIndex:'desc', flex:1}
		]
	});
});
</script>
</body>
</html>
<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>p 요소 : <?php echo TITLE_REFERENCE; ?></title>
<?php include RELATIEV_PATH.'common_inc.php'; ?>
</head>
<body>
<article id="content_desc">
	<!-- 태그 설명 -->
	<section id="info"><!-- @new Ext.XTemplate --></section>
	<!-- //태그 설명 -->
	<!-- 샘플 코드 -->
	<section>
		<h3 class="s_tit">샘플 코드</h3>
		<pre class="brush:html">
			&lt;p&gt;웹의 힘은 보편성에 있다.&lt;/p&gt;

			<!-- @요소가 적절하지 않은 경우: p 요소를 대신하여 보다 적합한 요소가 있다면 그것을 사용합니다. 이런 경우에는 p 요소를 사용하지 않습니다. -->
			<!-- @최종 수정일과 연락처 정보를 담고 있는 섹션을 다음과 같이 마크업한 경우: -->
			&lt;section&gt;
				&lt;p&gt;최종 수정일: 2011-02-14&lt;/p&gt;
				&lt;p&gt;이 글에 대한 문의는 &lt;a href="mailto:seungwoonjjang@gmail.com"&gt;운영자 메일&lt;/a&gt;로 전달해 주세요.&lt;/p&gt;
			&lt;/section&gt;

			<!-- @아래와 같이 최종 수정일은 footer 요소로, 연락처 정보는 address 요소로 마크업하는 것이 더 좋습니다. -->
			&lt;section&gt;
				&lt;footer&gt;최종 수정일: 2011-02-14&lt;/footer&gt;
				&lt;address&gt;이 글에 대한 문의는 &lt;a href="mailto:seungwoonjjang@gmail.com">운영자 메일&lt;/a&gt;로 전달해 주세요.&lt;/address&gt;
			&lt;/section&gt;
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 속성 설명 -->
	<section>
		<h3 class="s_tit">속성</h3>
		<div id="gridAttr"></div>
	</section>
	<!-- //속성 설명 -->
</article>

<script src="<?php echo PATH; ?>syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
<script>
Ext.onReady(function(){
	var tplData = {
		elem: 'p',
		meaning: 'paragraphy',
		item: [{
			desc:'p 요소는 문단을 나타냅니다.'
		}],
		level: 'Block-Level',
		category: 'Structural Elements'
	};

	tpl.overwrite(Ext.get('info'), tplData);

	var storeData = Ext.create('Ext.data.Store',{
		fields: ['tit','desc','href'],
		data: {'items':[
			{tit:'전역 속성', desc:'공통 속성', href:'http://naver.com'}
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
		title: '요소 속성 목록',
		store: storeData,
		columns: [
			{header:'속성명', xtype:'templatecolumn', tpl:'<a href="{href}">{tit}</a>'},
			{header:'설명', dataIndex:'desc', flex:1}
		]
	});
});
</script>
</body>
</html>
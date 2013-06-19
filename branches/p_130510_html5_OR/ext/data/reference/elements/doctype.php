<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>doctype 요소 : <?php echo TITLE_REFERENCE; ?></title>
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
			<!-- @HTML5 DTD 선언 -->
			&lt;!DOCTYPE html&gt;

			<!-- @HTML4.01, XHTML DTD 선언 -->
			&lt;!DOCTYPE html PUBLIC "공개 식별자" "시스템 식별자"&gt;
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

<script src="<?php echo PATH ; ?>syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
<script>
Ext.onReady(function(){
	var tplData = {
		elem: 'doctype',
		meaning: 'document type definition',
		item: [{
			desc:'doctype은 문서 형식에 관한 버전 정보(DTD)를 사용자 에이전트가 렌더링 모드를 결정하도록 명시합니다. 특히 오래된 브라우저에서 중요하며 문서의 맨 앞에 선언됩니다.'
		}],
		level: 'Document-Model-Info-Level',
		category: 'HTML Basic'
	};

	tpl.overwrite(Ext.get('info'), tplData);

	var storeData = Ext.create('Ext.data.Store',{
		fields: ['doctype','publicID','sysID'],
		data: {'items':[
			{doctype:'HTML 4.01 Strict', publicID:'-//W3C//DTD HTML 4.01//EN', sysID:'http://www.w3.org/TR/html4/strict.dtd'},
			{doctype:'HTML 4.01 Transitional',publicID:'-//W3C//DTD HTML 4.01 Transitional//EN', sysID:'http://www.w3.org/TR/html4/loose.dtd'},
			{doctype:'HTML 4.01 Frameset',publicID:'-//W3C//DTD HTML 4.01 Frameset//EN', sysID:'http://www.w3.org/TR/html4/frameset.dtd'},
			{doctype:'XHTML 1.0 Strict',publicID:'-//W3C//DTD XHTML 1.0 Strict//EN', sysID:'http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd'},
			{doctype:'XHTML 1.0 Transitional',publicID:'-//W3C//DTD XHTML 1.0 Transitional//EN', sysID:'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'},
			{doctype:'XHTML 1.0 Frameset',publicID:'-//W3C//DTD XHTML 1.0 Frameset//EN', sysID:'http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd'}
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
			{header:'DTD 문서 타입', dataIndex:'doctype', width:150},
			{header:'공개 식별자', dataIndex:'publicID', width:250},
			{header:'시스템 식별자', dataIndex:'sysID', flex:1}
		]
	});
});
</script>
</body>
</html>
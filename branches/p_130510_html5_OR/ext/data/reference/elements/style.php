<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>style 요소 : <?php echo TITLE_REFERENCE; ?></title>
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
			<!-- @scoped 속성이 없는 경우 -->
			&lt;html&gt;
			&lt;head&gt;
			&lt;title&gt;HTML5 - Style&lt;/title&gt;
			&lt;style&gt;
			body{background-color:#fff;color:#333}
			p{color:#0f0}
			strong{color:#f90}
			&lt;/style&gt;
			&lt;/head&gt;
			&lt;body&gt;
			&lt;p&gt;이것은 &lt;strong&gt;style&lt;/strong&gt;에 대한 예제입니다.&lt;/p&gt;
			&lt;/body&gt;
			&lt;/html&gt;

			<!-- @scoped 속성이 있는 경우 -->
			&lt;html&gt;
			&lt;head&gt;
			&lt;title&gt;HTML5 - Style&lt;/title&gt;
			&lt;/head&gt;
			&lt;body&gt;
			&lt;style scoped="scoped"&gt;
			body{background-color:#fff;color:#333}
			p{color:#0f0}
			strong{color:#f90}
			&lt;/style&gt;
			&lt;p&gt;이것은 &lt;strong&gt;style&lt;/strong&gt;에 대한 예제입니다.&lt;/p&gt;
			&lt;/body&gt;
			&lt;/html&gt;
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
		elem: 'style',
		meaning: 'style presentation information',
		item: [{
			desc:'style 요소를 사용하여 스타일 정보를 문서에 포함시킬 수 있습니다.'
		}],
		level: 'Inline-Level',
		category: 'Meta Info'
	};

	tpl.overwrite(Ext.get('info'), tplData);

	var storeData = Ext.create('Ext.data.Store',{
		fields: ['tit','desc','href'],
		data: {'items':[
			{tit:'전역 속성', desc:'공통 속성', href:'http://naver.com'},
			{tit:'media', desc:'스타일이 적용될 매체를 명시합니다.', href:'http://naver.com'},
			{tit:'type', desc:'스타일 언어를 나타냅니다. 속성이 존재하지 않는다면 기본값으로 \"text&frasl;css\"를 사용합니다.', href:'http://naver.com'},
			{tit:'scoped', desc:'문서 전체가 아닌 style 요소가 사용된 부모의 하위에만 적용합니다.', href:'http://naver.com'},
			{tit:'title', desc:'대체 가능한 스타일시트를 정의합니다.', href:'http://naver.com'}
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
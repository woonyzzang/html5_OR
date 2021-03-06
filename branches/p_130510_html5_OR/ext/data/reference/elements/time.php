<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>time 요소 : <?php echo TITLE_REFERENCE; ?></title>
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
			&lt;p&gt;난 보통 간식을 &lt;time&gt;17:30&lt;/time&gt;에 먹는다.&lt;/p&gt;

			<!-- @Date만 나타낼 경우 -->
			&lt;time xsi:type="xsd:date" datetime="2011-03-08" title="Mardi Gras (Fat Tuesday), 2011"&gt;March 8, 2011&lt;/time&gt;
			is the latest in the year Mardi Gras falls until
			&lt;time xsi:type="xsd:date" datetime="2011-03-09" title="Mardi Gras (Fat Tuesday), 2038" style="cursor:help"&gt;March, 2038&lt;/time&gt;

			<!-- @Date와 Time을 나타낼 경우 -->
			&lt;time xsi:type="xsd:dateTime" datetime="2010-12-31T23:59:59-04:00" title="One second before midnight, New Years Eve, 2010" style="cursor:help"&gt;12/31/2010 11:59:59 PM EST&lt;/time&gt;

			<!-- @Time 만 나타낼 경우 -->
			&lt;time xsi:type="xsd:time" datetime="12:00:00-05:00" title="Noon Eastern time" style="cursor:help"&gt;12:00 PM ET&lt;/time&gt;
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
		elem: 'time',
		meaning: 'date and\/or time',
		item: [{
			desc:'time 요소는 24시간에서의 시간, 혹은 그레고리력에서의 정밀한 날짜(선택적으로, 타임존 옵셋 정보를 포함하여)를 나타냅니다.'
		}],
		level: 'Inline-Level',
		category: 'Text formatting'
	};

	tpl.overwrite(Ext.get('info'), tplData);

	var storeData = Ext.create('Ext.data.Store',{
		fields: ['tit','desc','href'],
		data: {'items':[
			{tit:'전역 속성', desc:'공통 속성', href:'http://naver.com'},
			{tit:'datetime', desc:'날짜, 시간을 표시합니다.', href:'http://naver.com'},
			{tit:'pubdate', desc:'문서의 작성 날짜를 표시합니다.', href:'http://naver.com'}
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
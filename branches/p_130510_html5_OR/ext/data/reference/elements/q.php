<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>q 요소 : <?php echo TITLE_REFERENCE; ?></title>
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
			&lt;p&gt;W3C 페이지 &lt;cite&gt;W3C에 대해&lt;/cite&gt; 에는 W3C의 목표가&lt;q cite="http://www.w3.org/Consortium/"&gt;웹의 장기적 발전을 도모할 수 있는 프로토콜과 가이드라인을 개발해서 World Wide Web의 가능성을 최대한 끌어낸다&lt;/q&gt;라고 쓰여 있습니다. 난 이 목표에 동의하지 않습니다.&lt;/p&gt;

			<!-- @요소가 적절하지 않은 경우: 인용 대신 따옴표를 사용하여 단어에 이름을 부여하고 있습니다. q 요소는 이러한 경우에는 부적절합니다. -->
			&lt;p&gt;단어 "표현 불가"는 재난을 설명하는 데 사용할 수도 있습니다.&lt;/p&gt;
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
		elem: 'q',
		meaning: 'progress indicator',
		item: [{
			desc:'q 요소는 다른 원본으로 부터 인용해 온 구문 컨텐츠를 나타냅니다.'
		}],
		level: 'Inline-Level',
		category: 'Text formatting'
	};

	tpl.overwrite(Ext.get('info'), tplData);

	var storeData = Ext.create('Ext.data.Store',{
		fields: ['tit','desc','href'],
		data: {'items':[
			{tit:'전역 속성', desc:'공통 속성', href:'http://naver.com'},
			{tit:'cite', desc:'인용해 온 원본의 주소를 표시할 수 있습니다.', href:'http://naver.com'}
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
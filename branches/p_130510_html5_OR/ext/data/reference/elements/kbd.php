<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>kbd 요소 : <?php echo TITLE_REFERENCE; ?></title>
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
			<!-- @기본 문법 -->
			아이디: 입력란에 &lt;kbd&gt;administration&lt;/kbd&gt; 이라고 입력한다.

			<!-- @키 입력 방법을 안내하는 마크업 사용자에게 키 입력 방식을 설명하고자 할 때 각각의 키를 kbd 요소로 감싸고 조합되는 키를 kbd 요소로 다시 감싸면 하나의 입력 블럭을 의미하게 됩니다. -->
			&lt;p&gt;맥OS에서 화면을 캡쳐하는 단축키는 &lt;kbd&gt;&lt;kbd&gt;Command&lt;/kbd&gt;+&lt;kbd&gt;Shift&lt;/kbd&gt;+&lt;kbd&gt;3&lt;/kbd&gt;&lt;/kbd&gt;입니다.&lt;/p&gt;

			<!-- @시스템 응답을 kbd 요소로 마크업하는 경우 웹사이트를 탐색하거나 웹 애플리케이션을 사용하는 사용자에게 특정한 메뉴를 선택할 것을 요구할 수 있습니다. 이때 메뉴는 키가 아니지만 kbd 요소로 마크업할 수 있습니다. 또한, 시스템이 나타내 주는 메뉴명은 samp 요소로 마크업할 수 있습니다. -->
			&lt;p&gt;현재 화면을 확대하는 기능은 웹브라우저 메뉴 목록 가운데 &lt;kbd&gt;&lt;samp&gt;보기&lt;/samp&gt; | &lt;samp&gt;확대&lt;/samp&gt;&lt;/kbd&gt;를 선택하면 됩니다.&lt;/p&gt;

			<!-- @하지만 다음과 같이 간단히 마크업해도 됩니다. -->
			&lt;p&gt;현재 화면을 확대하는 기능은 웹브라우저 메뉴 목록 가운데 &lt;kbd&gt;보기 | 확대&lt;/kbd&gt;를 선택하면 됩니다.&lt;/p&gt;
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
		elem: 'kbd',
		meaning: 'keyboard',
		item: [{
			desc:'kbd 요소는 사용자의 입력을 의미하며 보통 키보드를 의미하지만 음성 명령과 같은 다른 입력도 가능합니다.'
		}],
		level: 'Inline-Level',
		category: 'Text formatting'
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
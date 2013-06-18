<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>area 요소 : <?php echo TITLE_REFERENCE; ?></title>
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
			&lt;img src="planets.gif" usemap="#planetmap" alt="Planets"&gt;
			&lt;map name="planetmap"&gt;
				&lt;area shape="rect" coords="0,0,82,126" href="sun.htm" alt="Sun"&gt;
				&lt;area shape="circle" coords="90,58,3" href="mercur.htm" alt="Mercury"&gt;
				&lt;area shape="circle" coords="124,58,8" href="venus.htm" alt="Venus"&gt;
			&lt;/map&gt;
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
		elem: 'area',
		meaning: 'area inside an image map',
		item: [{
			desc:'area 요소는 하이퍼링크, 링크에 대응하는 이미지맵 상의 영역, 이미지맵 내의 비활성 영역을 나타냅니다.'
		}],
		level: 'Inline-Level',
		category: 'Image &amp; Media'
	};

	tpl.overwrite(Ext.get('info'), tplData);

	var storeData = Ext.create('Ext.data.Store',{
		fields: ['tit','desc','href'],
		data: {'items':[
			{tit:'전역 속성', desc:'공통 속성', href:'http://naver.com'},
			{tit:'alt', desc:'링크의 목적을 설명합니다.', href:'naver.com'},
			{tit:'coords', desc:'shape에서 정의한 모양의 좌표를 정의합니다.', href:'naver.com'},
			{tit:'shape', desc:'circle, dafault, poly, rect 키워드로 속성을 정의합니다.', href:'naver.com'},
			{tit:'href', desc:'이동할 URL을 지정합니다.', href:'naver.com'},
			{tit:'target', desc:'이동시 사용되는 콘텍스트 이름이나 키워드를 지정합니다.', href:'naver.com'},
			{tit:'rel', desc:'링크 대상과의 관계를 지정합니다.', href:'naver.com'},
			{tit:'media', desc:'링크 대상이 출력되는 매체를 지정합니다.', href:'naver.com'},
			{tit:'hreflang', desc:'링크 대상의 언어 코드를 지정합니다.', href:'naver.com'},
			{tit:'type', desc:'링크 대상의 MIME 타입을 지정합니다.', href:'naver.com'}
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
	})
});
</script>
</body>
</html>
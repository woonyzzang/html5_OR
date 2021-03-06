<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>wbr 요소 : <?php echo TITLE_REFERENCE; ?></title>
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
			&lt;p&gt;Ajax를 배우려면, 당신은 XML의 &lt;wbr&gt;HTTP&lt;wbr&gt; 요청 개체에 대해 잘 알고 있어야합니다.&lt;/p&gt;

			<!-- @엔티티 문자열로 처리하는 방법: &#38;#8203;으로 마크업
				wbr 요소는 HTML5에서 명세에 정식으로 포함된 것으로 이전까지는 비표준 요소였습니다.
				하지만 IE를 포함한 브라우저 대부분이 지원했습니다. 그럼에도 몇몇 브라우저는 문제가 있었습니다.
				특히 IE8 표준 모드와 윈도우용 Safari 3이하, Opera 8이하에서 지원되지 않거나 버그가 있습니다.
				&#8203;는 zero-width space라고 하는데 IE7 이상과 Firefox, Opera, Safari, Chrome 등에서 잘 작동합니다.
				하지만 IE6 이하에서는 장식용 문자를 올바르게 처리하지 못하는 버그가 있습니다. -->
			&lt;p&gt;Ajax를 배우려면, 당신은 XML의 &#38;#8203;HTTP&#38;#8203; 요청 개체에 대해 잘 알고 있어야합니다.&lt;/p&gt;

			<!-- @&#38;shy;는 샤이 하이픈(shy hyphen)으로 IE에서는 모든 버전에서 문제없이 작동합니다.
				심지어 이름처럼 줄내림된 부분에 하이픈(-)을 표시해주기까지 합니다. 하지만 Firefox2 이하에서는 제대로 동작하지 않습니다. -->
			&lt;p&gt;Ajax를 배우려면, 당신은 XML의 #38;shy;HTTP#38;shy; 요청 개체에 대해 잘 알고 있어야합니다.&lt;/p&gt;

			<!-- CSS로 wbr 미지원 브라우저 대응하기:
				 윈도우용 Safari 3와 오래된 Opera(8 이하)에서 wbr 요소를 지원하지 못하는 문제가 있는데 CSS로 처리할 수 있습니다.
				 엔티티 문자열 &8203;의 CSS 이스케이프 문자열은 '\00200B'로 :after 수도 엘리먼트pseudo-elements를 이용해 wbr 요소 뒤에 추가하는 방법입니다.
				 사실 Firefox, Safari, Opera, Chrome 등은 구버전의 사용율이 낮기 때문에 IE8 표준 모드에서 wbr 요소를 지원하지 않는 문제만을 제외하면 직접 사용해도 될 것입니다. -->
			wbr:after{content:'\00200B'} /* CSS 파일 */

			<!-- @IE8 표준 모드에서 wbr 요소 대응하기:
				IE는 7까지 비표준으로 wbr을 지원해 왔으나 공교롭게 IE8에서 표준이 아니라는 이유로 wbr 요소를 제거했습니다.
				때문에 IE8 표준 모드에서는 wbr 요소가 작동하지 않습니다. IE8에서 wbr 요소와 같은 기능을 구현하기 위한 방법은 다음과 같습니다.
				- IE8에서 IE7 호환모드를 사용하거나 쿽스 모드를 사용합니다.
				- wbr 요소 뒤에 빈 요소를 추가하여 CSS를 통해 '\00200B' 이스케이프 문자열을 추가합니다.
				  IE8 표준모드는 wbr 요소를 인식하지 않기때문에 wbr 요소에 직접 수도 엘리먼트를 지정해도 동작하지 않습니다. -->
			wbr:after{content:'\00200B'} /* CSS 파일 */

			&lt;p&gt;Ajax를 배우려면, 당신은 XML의 &lt;wbr&gt;&lt;span class="wbr"&gt;HTTP&lt;/span&gt;&lt;/wbr&gt; 요청 개체에 대해 잘 알고 있어야합니다.&lt;/p&gt;
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
		elem: 'wbr',
		meaning: 'word break',
		item: [{
			desc:'wbr 요소는 br 요소가 강제로 줄바꿈을 처리하는 것과 달리 부모 요소의 너비에 따라 동적으로 줄바꿈을 처리해 줍니다.'
		}],
		level: 'Inline-Level',
		category: 'Layout'
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
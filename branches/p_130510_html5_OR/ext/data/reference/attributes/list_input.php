<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>list 속성 (input) : <?php echo TITLE_REFERENCE; ?></title>
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
			<!-- @사용자의 방문 기록에 기초해서 다른 URL을 제시할 수도 있습니다. 이것은 사용자 에이전트의 재량입니다. -->
			&lt;label&gt;자주 이용하는 검색사이트: &lt;input name="searchSite" type="url" list="searchSites"&gt;&lt;/label&gt;
			&lt;datalist id="searchSites"&gt;
			&lt;option value="http://www.google.com" label="Google"&gt;&lt;/option&gt;
			&lt;option value="http://www.bing.com" label="Bing"&gt;&lt;/option&gt;
			&lt;/datalist&gt;

			<!-- @자동 완성 목록은 단순히 보조적인 기능일 뿐이며, 중요한 내용이 아니라면
				datalist 요소를 사용하고 그 자식 요소로서 option 요소들을 사용하면 충분합니다.
				구형 사용자 에이전트에서 속성값들이 노출되는 것을 방지하기 위해,
				option 요소들은 인라인으로 사용되는 것이 아니라 아래와 같이 value 속성 안에 위치해야 합니다. -->
			&lt;p&gt;
				&lt;label&gt;선호하는 커피:
					&lt;input type="text" name="coffee" list="coffees"&gt;
					&lt;datalist id="coffees"&gt;
					&lt;option value="에스프레소"&gt;
					&lt;option value="아메리카노"&gt;
					&lt;option value="카페라떼"&gt;
					&lt;/datalist&gt;
				&lt;/label&gt;
			&lt;/p&gt;

			<!-- @ 반대로, 속성값들이 중요하고 구형 사용자 에이전트에서도 보여져야 하는 것이라면,
				아래와 같이 자동 완성 목록을 사용하면서도, 구형 사용자 에이전트에서는 효과적으로
				단계적 기능 축소를 하는 방법으로 datalist 요소 안에 폴백 콘텐츠를 위치 시킬 수 있습니다.
				폴백 콘텐츠는 사용자 에이전트가 datalist 요소를 지원하지 못하는 경우에만 보여질 것이며,
				옵션들이 datalist 요소의 직접적인 자식 요소가 아니더라도 모든 사용자 에이전트에서 노출될 것입니다. -->
			&lt;p&gt;
				&lt;label&gt;선호하는 커피:
					&lt;input type="text" name="coffee" list="coffees"&gt;
				&lt;/label&gt;
				&lt;datalist id="coffees"&gt;
					&lt;label&gt;또는 목록에서 하나를 선택:
						&lt;select name="coffee"&gt;
						&lt;option&gt;(선택해주세요.)&lt;/option&gt;
						&lt;option&gt;에스프레소&lt;/option&gt;
						&lt;option&gt;아메리카노&lt;/option&gt;
						&lt;option&gt;카페라떼&lt;/option&gt;
						&lt;/select&gt;
					&lt;/label&gt;
				&lt;/datalist&gt;
			&lt;/p&gt;

			<!-- @폴백 콘텐츠로 사용된 datalist 요소 내부에 위치한 option 요소에 selected 속성이 활성화된 상태라면,
				구형 사용자 에이전트에서는 기본적으로 폴백 콘텐츠가 선택되겠지만(이것은 select 요소에 영향을 미칩니다),
				datalist 요소를 지원하는 사용자 에이전트에서는 그렇지 않을 것임을 염두에 두십시오. -->
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/common-input-element-attributes.html#the-list-attribute" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="<?php echo PATH; ?>syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
<script>
Ext.onReady(function(){
	var tplData = {
		attr: 'list',
		meaning: 'input',
		item: [{
			desc:'list 속성은 사용자에게 제안되는 미리 정의된 옵션들의 목록을 나타냅니다.'
		}],
		txt: '이 속성이 사용되었다면, 값은 동일한 문서 내에 있는 datalist 요소의 id 속성의 값 여야 합니다.'
	};

	tpl2.overwrite(Ext.get('info'), tplData);
});
</script>
</body>
</html>
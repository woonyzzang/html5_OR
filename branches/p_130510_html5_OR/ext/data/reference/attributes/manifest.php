<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>manifest 속성 : <?php echo TITLE_REFERENCE; ?></title>
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
			&lt;html manifest="html5.manifest"&gt;

			<!-- @manifest 파일의 샘플 -->
			CACHE MANIFEST
			# This is a comment.
			# Cache manifest version 0.0.1
			# If you change the version number in this comment,
			# the cache manifest is no longer byte-for-byte
			# identical.

			demoimages/clownfish.jpg
			demoimages/clownfishsmall.jpg
			demoimages/flowingrock.jpg
			demoimages/flowingrocksmall.jpg
			demoimages/stones.jpg

			NETWORK:
			# All URLs that start with the following lines
			# are whitelisted.
			http://example.com/examplepath/
			http://www.example.org/otherexamplepath/

			CACHE:
			# Additional items to cache.
			demoimages/stonessmall.jpg

			FALLBACK:
			demoimages/images/
		</pre>
		<a href="http://developer.apple.com/library/safari/#documentation/iPhone/Conceptual/SafariJSDatabaseGuide/OfflineApplicationCache/OfflineApplicationCache.html" target="_blank">참조 Safari library</a>
	</section>
	<!-- //샘플 코드 -->
	<!-- 메모 -->
	<section>
		<h3 class="s_tit">메모</h3>
		<p>사용자들이 인터넷에 접속할 수 없는 환경에서도 웹페이지가 동작할 수 있는 웹 기반의 어플리케이션을 만들 수 있습니다.</p>
		<p>manifest 속성은 문서가 로드되는 초기 단계에서만 효과가 있습니다. 그러므로 속성을 동적으로 변경하는것은 아무런 의미가 없습니다.</p>
		</ul>
	</section>
	<!-- //메모 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/semantics.html#attr-html-manifest" target="_blank">최신 명세</a></li>
		<li><a href="http://developer.apple.com/library/safari/#documentation/iPhone/Conceptual/SafariJSDatabaseGuide/OfflineApplicationCache/OfflineApplicationCache.html" target="_blank">HTML 5 Offline Application Cache</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="<?php echo PATH; ?>syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
<script>
Ext.onReady(function(){
	var tplData = {
		attr: 'manifest',
		item: [{
			desc:'manifest 속성은 문서의 애플리케이션 캐시 매니페스트 주소를 나타내는 것으로, html 요소에 지정하여 오프라인 애플리케이션 API에서 캐시 정보를 사용할 수 있습니다.'
		}],
		txt: '이 속성을 사용한다면, 그값은 유효한 URL이어야 합니다.'
	};

	tpl2.overwrite(Ext.get('info'), tplData);
});
</script>
</body>
</html>
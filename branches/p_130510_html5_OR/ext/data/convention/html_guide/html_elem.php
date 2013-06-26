<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>(X)HTML Elements : <?php echo TITLE_CONVENTION_HTML; ?></title>
<?php include RELATIEV_PATH.'common_inc.php'; ?>
</head>
<body>
<article id="content_desc">
	<!-- HTML 요소 -->
	<section>
		<h2 class="s_tit">(X)HTML Elements</h2>

		<h4 class="tit_cont">Attribute 우선순위</h4>
		<p>Attribute의 우선 순위는 다음 순위를 따른다.</p>
		<table class="tb_grid">
		<caption>[ 요소 속성 우선순위 예 ]</caption>
		<thead>
		<tr>
		<th scope="col">요소</th>
		<th scope="col">속성</th>
		</tr>
		</thead>
		<tbody>
		<tr>
		<td>&lt;html&gt;</td>
		<td>
			<p>lang속성은 휴먼랭기지로 User Agent가 언어를 올바르게 해석할 수 있게 도와주며, 검색과 음성장치(Speech Synthesizers)에 활용된다. 언어는 모든 요소에 사용할 수 있지만 HTML 요소에 해당 문서의 주 언어 코드만 선언한다.</p>
			<pre class="brush:html">
				HTML DTD 선언할 때는 다음과 같이 lang속성은 선언한다. class속성은 선언하지 않는다.
				&lt;html lang="ko"&gt;

				XHTML DTD 선언할 때는 다음과 같이 XML namespace 및 lang 속성을 선언해준다.
				&lt;html xmlns="http://www.w3.org/1999/xhtml" lang="ko" xml:lang="ko"&gt;
			</pre>
		</td>
		</tr>
		<tr>
		<td>&lt;head&gt;</td>
		<td>
			<p>meta, title, link, script, style 순서로 선언한다.</p>
			<pre class="brush:html">
				&lt;head&gt;
				&lt;meta http-equiv="Content-Type" content="text/html;charset=utf-8"&gt;
				&lt;title&gt;타이틀&lt;/title&gt;
				&lt;link rel="stylesheet" type="text/css" href="@파일.css"&gt;
				&lt;script type="text/javascript" src="@파일.js"&gt;&lt;/script&gt;
				&lt;style type="text/css"&gt;
				[stuff]
				&lt;/style&gt;
				&lt;/head&gt;
			</pre>
		</td>
		</tr>
		<tr>
		<td>3</td>
		<td>href, src</td>
		</tr>
		<tr>
		<td>4</td>
		<td>width, height</td>
		</tr>
		<tr>
		<td>1</td>
		<td>rel</td>
		</tr>
		<tr>
		<td>1</td>
		<td>rel</td>
		</tr>
		<tr>
		<td>1</td>
		<td>rel</td>
		</tr>
		<tr>
		<td>1</td>
		<td>rel</td>
		</tr>
		<tr>
		<td>1</td>
		<td>rel</td>
		</tr>
		<tr>
		<td>1</td>
		<td>rel</td>
		</tr>
		<tr>
		<td>1</td>
		<td>rel</td>
		</tr>
		</tbody>
		</table>
	</section>
	<!-- //HTML 요소 -->
</article>

<script src="<?php echo PATH; ?>syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
</body>
</html>
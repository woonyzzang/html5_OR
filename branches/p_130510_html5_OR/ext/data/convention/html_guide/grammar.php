<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>HTML Grammar : <?php echo TITLE_CONVENTION_HTML; ?></title>
<?php include RELATIEV_PATH.'common_inc.php'; ?>
</head>
<body>
<article id="content_desc">
	<!-- 기본 규칙 -->
	<section>
		<h2 class="s_tit">HTML Grammar</h2>
		<dl class="definition">
		<dt>기본 규칙</dt>
		<dd>HTML 코드를 작성할 때 다은과 같은 기본 규칙을 준수한다.</dd>
		</dl>

		<dl class="category">
		<dt>(X)HTML&frasl;CSS&frasl;SCRIPT 분리</dt>
		<dd>
			<ul class="lst_type">
			<li>문서의 내용과 디자인을 분리한다.</li>
			<li>분리하는 목적은 CSS와 JavaScript 없이도 문서를 이용할 수 있게 하는데 있다.</li>
			</ul>
		</dd>
		<dt>정확한 문서 구조 준수</dt>
		<dd>
			<ul class="lst_type">
			<li>문서의 기본 구조는 다음과 같이 해당페이지의 기본정보를 포함하는 head 요소와 본문을 포함하는 body 요소를 갖는다.</li>
			</ul>
		</dd>
		</dl>
		<pre class="brush:html">
			&lt;html&gt;
			&lt;head&gt;
				(해당 페이지 기본 정보)
			&lt;/head&gt;
			&lt;body&gt;
				(해당 페이지 본문)
			&lt;/body&gt;
			&lt;/html&gt;
		</pre>

		<p class="panel info">다음과 같은 기본 구조를 갖는다.</p>
		<p>HTML</p>
		<pre class="brush:html">
			&lt;!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"&gt;
			&lt;html lang="ko"&gt;
			&lt;head&gt;
			&lt;meta http-equiv="Content-Type" content="text/html; charset=utf-8"&gt;
			&lt;title&gt;서비스명&lt;/title&gt;
			&lt;/head&gt;
			&lt;body&gt;
			...
			&lt;/body&gt;
			&lt;/html&gt;
		</pre>
		<p>XHTML</p>
		<pre class="brush:html">
			&lt;!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"&gt;
			&lt;html xmlns="http://www.w3.org/1999/xhtml" lang="ko" xml:lang="ko"&gt;
			&lt;head&gt;
			&lt;meta http-equiv="Content-Type" content="text/html; charset=utf-8" /&gt;
			&lt;title&gt;서비스명&lt;/title&gt;
			&lt;/head&gt;
			&lt;body&gt;
			...
			&lt;/body&gt;
			&lt;/html&gt;
		</pre>
		<p>HTML5</p>
		<pre class="brush:html">
			&lt;!DOCTYPE html&gt;
			&lt;html lang="ko"&gt;
			&lt;head&gt;
			&lt;meta charset="utf-8"&gt;
			&lt;title&gt;서비스명&lt;/title&gt;
			&lt;/head&gt;
			&lt;body&gt;
			...
			&lt;/body&gt;
			&lt;/html&gt;
		</pre>

		<dl class="category">
		<dt>표준 엘리먼트 사용</dt>
		<dd>
			<ul class="lst_type">
			<li>비표준 엘리먼트 ( font, center, font, strike, u, s, applet, basefont, dir, isindex, xmp )를 사용하지 않는다.</li>
			</ul>
		</dd>
		</dl>

		<strong class="tit_ipt">모든 요소는 완벽하게 중첩되어야 한다.</strong>
		<pre class="brush:html">
			&lt;p&gt;This is a &lt;strong&gt;bad&lt;/p&gt;example&lt;/strong&gt; (X)
			&lt;p&gt;This is a &lt;strong&gt;good&lt;/strong&gt;example&lt;/p&gt;  (O)
		</pre>

		<strong class="tit_ipt">XHTML DTD로 선언할 시 모든 속성값은 속성이 함께 선언되어야 한다.</strong>
		<pre class="brush:html">
			&lt;option value="wrong" selected&gt;bad example&lt;/option&gt; (X)
			&lt;option value="right" selected="selected"&gt;good example&lt;/option&gt; (O)
		</pre>

		<strong class="tit_ipt">모든 요소와 속성은 소문자여야 한다.</strong>
		<pre class="brush:html">
			&lt;DIV ID="idbox"&gt;bad example.&lt;/DIV&gt; (X)
			&lt;div id="idbox"&gt;good example.&lt;/div&gt; (O)
		</pre>

		<strong class="tit_ipt">모든 속성 값은 인용 부호(&#34;&#34;)안에 표기한다.</strong>
		<pre class="brush:html">
			&lt;table border=1 cellpadding=0 cellspacing=0&gt;..bad example..&lt;/table&gt; (X)
			&lt;table border="1" cellpadding="0" cellspacing="0"&gt;..good example..&lt;/table&gt; (O)
		</pre>

		<strong class="tit_ipt">부위인식자의 모든 NAME속성을 ID속성으로 변경한다.</strong>
		<pre class="brush:html">
			&lt;input type="text" name="nick"&gt;
			&lt;input type="text" id="nick"&gt;
			&lt;input type="text" id="nick" name="nick"&gt;
		</pre>
		<p class="panel alert">↑ 구버젼 브라우져들의 호환성을 위해 id와 name속성을 혼용해서 사용한다.</p>

		<strong class="tit_ipt">모든 요소는 닫아야 한다.</strong>
		<pre class="brush:html">
			&lt;div&gt;&lt;/div&gt;
			&lt;p&gt;&lt;/p&gt;
			&lt;strong&gt;&lt;/strong&gt;
		</pre>
		<p class="panel alert">FireBug 사용시 Non-Empty 엘리먼트 내에 내용이 없으면 위와 같이 Empty 엘리먼트 처럼 닫아주는데 이와같이 사용하면 절대로 안된다.</p>

		<strong class="tit_ipt">XHTML DTD로 선언할 시 Empty 엘리먼트도 닫아주어야 한다.</strong>
		<pre class="brush:html">
			&lt;img src="good_sample.gif" alt="좋은 예제 이미지" /&gt;
			&lt;input type="text" /&gt;
			&lt;hr /&gt;
			&lt;br /&gt;
		</pre>

		<strong class="tit_ipt">text나 URL, script에 포함된 특수 문자는 escape 시킨다.</strong>
		<pre class="brush:html">
			&lt;script type="text/javascript"&gt;
			document.write('<\/P>');
			&lt;/script&gt;

			&lt;a href="http://w3c.org?data=g&nil_searchtitle=1&w=knowledge&q="&gt;bad example&lt;/a&gt; (X)
			&lt;a href="http://w3c.org?data=g&amp;amp;nil_searchtitle=1&amp;amp;w=knowledge&amp;amp;q="&gt;good example&lt;/a&gt; (O)
		</pre>
		<p class="panel alert">&lt;, &#34;, &amp;, &gt; 와 같은 특수기호는 &amp;lt; , &amp;quot;, &amp;amp;, &amp;gt; 엔티티 코드로 escape 시킨다.</p>
	</section>
	<!-- //기본 규칙 -->
</article>

<script src="<?php echo PATH; ?>syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Regular Expression</title>
</head>
<body>
<h1>Regular expression</h1>
<ul>
	<li>
		A method of specifying a search string using a number of special characters that can precisely match a substring. 
	</li>
	<br>
	<li><strong>Enclose in <em>Literals</em> such as</strong>/
		<br>
		<br>
		/^[A-Za-z0-9._%]+@[A-Za-z0-9._%]+/
	</li>
</ul>
<hr>
<h1>Regular expression Quantifiers</h1>
<br>
<ul>
	<li><b>Quantifiers</b> are wildcards that specify how many times to match the preceding string pattern.  <b>Simply</b>  they allow to match a pattern
	</li>
	<dl>
		<dt>Match zero or more of previous</dt>
		<dd><b>Notation *</b></dd>

		<dt>Match one  or more of previous</dt>
		<dd><b>Notation +</b></dd>
		<dt>Match one or zero of previous</dt>
		<dd><b>Notation ?</b></dd>
		<dt>Match exactly number of previous</dt>
		<dd><b>Notation {3}</b></dd>
		<br>
		<dt>Match at least min of previous</dt>
		<dd><b>Notation {2,}</b></dd>
		<dt>Match at least <b>min</b>  but no more than <b>max</b>  of previous characters of previous</dt>
		<dd><b>Notation {<b>min,max</b>}</b></dd>
	</dl>
	<hr>
	<h1>RegEx Anchors</h1>
	<dl>
		<dt>Match start of line</dt>
		<dd><b>^</b></dd>
		<br>
		<dt>Match end of line</dt>
		<dd><b>$</b></dd>
		<br>
		<dt>Match any single characters</dt>
		<dd><b>dot(.)<b></dd>
	</dl>
	<br>
	<br>
	<h1>Escape special characters</h1>
	<hr>
	<h2>Characters such as <b> ?,.,.$,*,+ </b> have a special meaing, if we wanna use them as a literal we need to escape them with a backslach \.</h2>

</ul>	
<hr>
<a href="https://regex101.com/">To pactice go to Regular Expression.com</a>

</body>
</html>

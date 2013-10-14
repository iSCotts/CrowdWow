<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--
Copyright (c) 2003-2011, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.html or http://ckeditor.com/license
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Replace Textareas by Class Name &mdash; CKEditor Sample</title>
	<meta content="text/html; charset=utf-8" http-equiv="content-type" />
	<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
	<script src="ckeditor/_samples/sample.js" type="text/javascript"></script>
	<link href="checkeditor/_samples/sample.css" rel="stylesheet" type="text/css" />
	<link href="ckeditor/skins/kama/editor.css" rel="stylesheet" type="text/css" />
</head>
<body>
	
	

	<!-- This <div> holds alert messages to be display in the sample page. -->
	<div id="alerts">
		<noscript>
			<p>
				<strong>CKEditor requires JavaScript to run</strong>. In a browser with no JavaScript
				support, like yours, you should still see the contents (HTML data) and you should
				be able to edit it normally, without a rich editor interface.
			</p>
		</noscript>
	</div>
	<form action="sample_posteddata.php" method="post">
		<p>
			<label for="editor1">
				Editor 1:</label>
			<textarea class="ckeditor" cols="80" id="editor1" name="editor1" rows="10">&lt;p&gt;This is some &lt;strong&gt;sample text&lt;/strong&gt;. You are using &lt;a href="http://ckeditor.com/"&gt;CKEditor&lt;/a&gt;.&lt;/p&gt;</textarea>
		</p>
		<p>
			<input type="submit" value="Submit" />
		</p>
	</form>
	
</body>
</html>

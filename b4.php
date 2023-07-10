<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Text Adjustment and Spacing</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Text Adjustment and Spacing</h1>
<p>Enter the text you want to copy to your clipboard, and the page will output the text.</p>
<form action="index.php" method="post">
<textarea name="text" rows="10" cols="50"></textarea>
<br>
<input type="button" value="Copy to Clipboard" onclick="copyToClipboard()">
</form>

<?php
if ($_POST) {
$text = $_POST['text'];

// Get the text from the textarea.
$text = $_POST['text'];

// Copy the text to the clipboard.
copyToClipboard($text);
}

function copyToClipboard($text) {
  // Create a temporary element.
  $temp = document.createElement('textarea');
  
  // Set the element's value to the text.
  $temp.value = $text;
  
  // Append the element to the body.
  document.body.appendChild($temp);
  
  // Select the element's text.
  $temp.select();
  
  // Copy the text to the clipboard.
  document.execCommand('copy');
  
  // Remove the element from the body.
  document.body.removeChild($temp);
  }
  
?>
</body>

<style>
  body {
  font-family: sans-serif;
  font-size: 16px;
}

textarea {
  width: 100%;
  height: 200px;
}

.adjusted-text {
  line-height: 1.5;
  letter-spacing: 0.12em;
  word-spacing: 0.16em;
}

</style>
</html>

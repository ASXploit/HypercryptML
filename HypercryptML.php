<?php
/* Created by : Xploit >
 * DateOfCreation : 11/24/16 >
 * Name of Project : HypercryptML , An Automatic Html Obfuscator Written in Php >
 */
$target_dir='';                          # <IMPORTANT> Directory of our page to load.
$target_file=$target_dir . 'index.html'; # <IMPORTANT> Page file to load.
global $HTML;
/* --Functions Start-- */
function strToHex($string) {
    $holder = '';
    for ($i=0; $i < strlen($string); $i++) {
        $holder .= '%' . bin2hex($string[$i]);
    } return $holder;
}
function getHTML($CTL) {
	global $HTML;
	$HTML=htmlentities(file_get_contents($CTL));
}
  function obbHTML() {
	  global $HTML;
	  $hexed=strToHex($HTML);
	  $HTML="<!DOCTYPE html><html>\n<head>\n</head>\n<body>\n<script type=\"text/javascript\">\n//<!-- Obfuscated with HypercryptML -->\neval(unescape(\"" . $hexed . "\"));\n // <!-- Obfuscated with HypercryptML -->\n</script>\n<noscript>Error : Your browser does not have javascript enabled.</noscript>\n</body>\n</html>";
}
/* --Functions End-- */
getHTML($target_file);
obbHTML();
echo $HTML;
?>

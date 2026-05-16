<?php
$c = file_get_contents(__DIR__ . '/../resources/views/codes/rpa/rpa2024/chapitre7/Ch7Pages/rpa24_ch7_p112.blade.php');
$svgFile = 'rpa24_ch7_fig7_3';
$figNum = '7.3';
$pattern = '/\s*<!-- Figure ' . preg_quote($figNum, '/') . '[^>]*-->[\s\S]*?'
    . preg_quote($svgFile, '/') . '\'[^)]*\)[\s\S]*?<\/div>\s*<\/div>/';
echo preg_match($pattern, $c) ? "match\n" : "no match\n";
if (preg_match($pattern, $c, $m)) {
    echo "len=" . strlen($m[0]) . "\n";
    echo substr($m[0], 0, 200) . "\n";
}
$pos = strpos($c, 'rpa24_ch7_fig7_3');
echo "strpos include: $pos\n";
$pos2 = strpos($c, '<!-- Figure 7.3');
echo "strpos comment: $pos2\n";

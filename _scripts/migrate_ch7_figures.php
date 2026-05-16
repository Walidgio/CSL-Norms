<?php

$dir = __DIR__ . '/../resources/views/codes/rpa/rpa2024/chapitre7/Ch7Pages';

function showcase(string $id, string $caption, string $svg, string $kicker = ''): string
{
    $out = "@include('norms::codes.rpa.rpa2024.partials.rpa-figure-showcase', [\n";
    $out .= "        'id' => '{$id}',\n";
    if ($kicker !== '') {
        $out .= '        ' . "'kicker' => " . var_export($kicker, true) . ",\n";
    }
    $out .= '        ' . "'caption' => " . var_export($caption, true) . ",\n";
    $out .= "        'svg' => 'norms::codes.rpa.rpa2024.chapitre7.Ch7Svg.{$svg}',\n";
    $out .= '    ])';
    return $out;
}

function swapContainerFigure(string $content, string $figNum, string $svgFile, string $id, string $kicker, string $caption): string
{
    $rep = showcase($id, $caption, $svgFile, $kicker);
    $end = '<\/div>\s*<\/motion>';
    $end = str_replace('motion', 'motion', $end); // no-op guard
    $end = '<\/div>\s*<\/div>';
    $pattern = '/\s*<!-- Figure ' . preg_quote($figNum, '/') . '[^>]*-->[\s\S]*?'
        . preg_quote($svgFile, '/') . '\'[^)]*\)[\s\S]*?' . $end . '/';
    $new = preg_replace($pattern, "\n    {$rep}\n", $content, 1, $count);
    return $count ? $new : $content;
}

function swapBareContainer(string $content, string $containerId, string $svgFile, string $id, string $kicker, string $caption): string
{
    if (str_contains($content, "'id' => '{$id}'")) {
        return $content;
    }
    $rep = showcase($id, $caption, $svgFile, $kicker);
    $pattern = '/\s*<div class="rpa-figure-container[^"]*" id="' . preg_quote($containerId, '/') . '"[^>]*>[\s\S]*?'
        . preg_quote($svgFile, '/') . '\'[^)]*\)[\s\S]*?<\/div>\s*<\/div>/';
    $new = preg_replace($pattern, "\n    {$rep}\n", $content, 1, $count);
    return $count ? $new : $content;
}

$cache = [];

function stashFile(string $file, string $content): void
{
    global $cache;
    $cache[$file] = $content;
}

function get(string $file): string
{
    global $cache, $dir;
    return $cache[$file] ?? file_get_contents("{$dir}/{$file}");
}

$ops = [
    ['rpa24_ch7_p112.blade.php', fn ($c) => swapContainerFigure($c, '7.3', 'rpa24_ch7_fig7_3', 'rpa-fig-7.3', 'Poteau court', 'Figure 7.3 : Cas de constitution de poteau court, par hauteur insuffisante de la maçonnerie de remplissage')],
    ['rpa24_ch7_p117.blade.php', fn ($c) => swapContainerFigure($c, '7.7', 'rpa24_ch7_fig7_7', 'rpa-fig-7.7', 'Voile de contreventement', 'Figure 7.7 : Coupe de voile en élévation')],
    ['rpa24_ch7_p120.blade.php', fn ($c) => swapContainerFigure($c, '7.10', 'rpa24_ch7_fig7_10', 'rpa-fig-7.10', 'Linteau', 'Figure 7.10 : Effort tranchant et moment dans le linteau')],
    ['rpa24_ch7_p123.blade.php', fn ($c) => swapContainerFigure($c, '7.13', 'rpa24_ch7_fig7_13', 'rpa-fig-7.13', 'Moments fléchissants', 'Figure 7.13 : Enveloppe de calcul pour les moments fléchissants')],
    ['rpa24_ch7_p124.blade.php', fn ($c) => swapContainerFigure($c, '7.14', 'rpa24_ch7_fig7_14', 'rpa-fig-7.14', 'Zone critique', 'Figure 7.14 : Zone critique à la base du voile')],
    ['rpa24_ch7_p124.blade.php', fn ($c) => swapContainerFigure($c, '7.15', 'rpa24_ch7_fig7_15', 'rpa-fig-7.15', 'Efforts tranchants', 'Figure 7.15 : Enveloppe de calcul pour les efforts tranchants dans les voiles élancés des systèmes à contreventement mixte')],
    ['rpa24_ch7_p126.blade.php', fn ($c) => swapContainerFigure($c, '7.18', 'rpa24_ch7_fig7_18', 'rpa-fig-7.18', 'Éléments de rive', 'Figure 7.18 : Épaisseur minimale des éléments de rive confinés, dans les voiles avec de larges ailes')],
    ['rpa24_ch7_p130.blade.php', fn ($c) => swapBareContainer($c, 'rpa-fig-7.19-container', 'rpa24_ch7_fig7_19', 'rpa-fig-7.19', 'Jonctions', 'Figure 7.19 : Recouvrements voisins')],
    ['rpa24_ch7_p130.blade.php', fn ($c) => swapBareContainer($c, 'rpa-fig-7.20-container', 'rpa24_ch7_fig7_20', 'rpa-fig-7.20', 'Dalles et diaphragmes', 'Figure 7.20 : Chainages des dalles et des diaphragmes')],
];

foreach ($ops as [$file, $fn]) {
    $before = get($file);
    $after = $fn($before);
    stashFile($file, $after);
    echo ($before !== $after ? 'OK' : 'SKIP') . " {$file}\n";
}

$p115 = get('rpa24_ch7_p115.blade.php');
if (!str_contains($p115, 'rpa-fig-7.5')) {
    $before = $p115;
    $fig5 = showcase('rpa-fig-7.5', 'Figure 7.5 : Spécifications pour les nœuds poteaux-poutres', 'rpa24_ch7_fig7_5', 'Nœuds poteaux-poutres');
    $legends = '
    <div class="rpa-indent mt-4 mb-4 text-sm">
        <div class="mb-1"><b><i>l<sub>d</sub></i></b> : longueur libre</div>
        <div class="mb-1"><b><i>l<sub>cr</sub></i></b> : longueur critique</div>
        <div class="mb-1"><b><i>h<sub>c</sub></i></b> : plus grande dimension de la section transversale du poteau</div>
        <motion class="mb-1"><b><i>l&rsquo;</i></b> : longueur critique de la poutre</div>
        <div class="mb-1"><b><i>b<sub>0</sub></i></b> : dimension minimale du noyau b&eacute;ton</div>
    </div>
';
    $p115 = preg_replace(
        '/<!-- Figure 7\.5 SVG -->[\s\S]*?id="rpa-fig-7\.5"[^>]*>[\s\S]*?<\/p>\s*/u',
        "    {$fig5}{$legends}\n",
        $p115,
        1
    );
    $p115 = str_replace(['nÅ"uds', 'nÅ“uds'], 'n&oelig;uds', $p115);
    stashFile('rpa24_ch7_p115.blade.php', $p115);
    echo ($before !== $p115 ? 'OK' : 'SKIP') . " p115\n";
} else {
    echo "SKIP p115 (already)\n";
}

if (isset($cache['rpa24_ch7_p124.blade.php'])) {
    $cache['rpa24_ch7_p124.blade.php'] = str_replace('Lâ€™', 'L&rsquo;', $cache['rpa24_ch7_p124.blade.php']);
}

foreach ($cache as $file => $content) {
    file_put_contents("{$dir}/{$file}", $content);
}
echo "done\n";

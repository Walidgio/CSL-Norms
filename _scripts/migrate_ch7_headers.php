<?php

$pages = [107, 111, 112, 115, 117, 120, 122, 123, 124, 126, 127, 128, 129, 130];
$dir = __DIR__ . '/../resources/views/codes/rpa/rpa2024/chapitre7/Ch7Pages';

$header = static function (int $n): string {
    return <<<BLADE
    <div class="rpa-header-meta flex flex-wrap items-start justify-between gap-2 text-sm mb-6 border-b border-black/90 dark:border-slate-500 pb-2">
        <span class="tabular-nums font-semibold text-slate-700 dark:text-slate-300">{$n}</span>
        <div class="text-right max-w-[min(100%,28rem)] space-y-0.5">
            @include('norms::codes.rpa.rpa2024.partials.ch7-running-meta')
        </div>
    </div>

BLADE;
};

foreach ($pages as $n) {
    $f = "{$dir}/rpa24_ch7_p{$n}.blade.php";
    if (!is_file($f)) {
        echo "MISSING {$f}\n";
        continue;
    }
    $c = file_get_contents($f);
    $c = preg_replace(
        '/<section id="rpa-p' . $n . '" class="rpa-page rpa-scroll-spy-section">/',
        '<section id="rpa-p' . $n . '" class="rpa-page rpa-scroll-spy-section" data-annotatable="true">',
        $c,
        1
    );
    $c = preg_replace(
        '/\s*<div class="rpa-header">[\s\S]*?<\/div>\s*/',
        "\n" . $header($n),
        $c,
        1
    );
    file_put_contents($f, $c);
    echo "OK p{$n}\n";
}

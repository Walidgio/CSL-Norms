# -*- coding: utf-8 -*-
"""Normalize Ch.3 page headers: rpa-header -> rpa-header-meta + French line."""
import re
from pathlib import Path

ROOT = Path(__file__).resolve().parents[1]
CH3 = ROOT / "resources/views/codes/rpa/rpa2024/chapitre3/Ch3Pages"

RUNNING_META = "@include('norms::codes.rpa.rpa2024.chapitre3.partials.ch3-running-meta')"
OLD_CHAPTER_EN = "Chapter 3. CRIT\u00c8RES DE CLASSIFICATION"

META = (
    '<div class="rpa-header-meta flex flex-wrap items-start justify-between gap-2 text-sm mb-6 '
    'border-b border-black/90 dark:border-slate-500 pb-2">\n'
    "        {left}\n"
    "        {right}\n"
    "    </div>"
)

RIGHT_BASE = (
    '<div class="text-right max-w-[min(100%,28rem)] space-y-0.5">\n'
    "{extra}"
    f"            {RUNNING_META}\n"
    "        </div>"
)


def running_line(text: str) -> str:
    esc = (
        text.replace("&", "&amp;")
        .replace("<", "&lt;")
        .replace(">", "&gt;")
    )
    return (
        '        <div class="text-xs font-semibold text-amber-900/90 dark:text-amber-200/90">'
        f"{esc}</div>\n"
    )


def patch(text: str) -> str:
    text = text.replace(OLD_CHAPTER_EN, RUNNING_META)

    m = re.search(
        r'<div class="rpa-header">\s*<span>([^<]*?)</span>\s*<span>(\d+)</span>\s*</div>',
        text,
        re.S,
    )
    if m:
        left_txt, page = m.group(1).strip(), m.group(2)
        if not left_txt.isdigit():
            extra = running_line(left_txt)
            block = META.format(
                left=(
                    '<span class="tabular-nums font-semibold text-slate-700 dark:text-slate-300">'
                    f"{page}</span>"
                ),
                right=RIGHT_BASE.format(extra=extra),
            )
            return text[: m.start()] + block + text[m.end() :]

    m05 = re.search(
        r'<div class="rpa-header">\s*<span class="chapter">([^<]*)</span>\s*<span>(\d+)</span>\s*</div>',
        text,
        re.S,
    )
    if m05:
        run, page = m05.group(1).strip(), m05.group(2)
        extra = running_line(run)
        block = META.format(
            left=(
                '<span class="tabular-nums font-semibold text-slate-700 dark:text-slate-300">'
                f"{page}</span>"
            ),
            right=RIGHT_BASE.format(extra=extra),
        )
        return text[: m05.start()] + block + text[m05.end() :]

    m2 = re.search(
        r'<div class="rpa-header">\s*<span>(\d+)</span>\s*<span class="chapter">([^<]*)</span>\s*</div>',
        text,
        re.S,
    )
    if m2:
        page, ch = m2.group(1), m2.group(2).strip()
        extra = ""
        if ch and "Crit" not in ch and "CRIT" not in ch:
            extra = running_line(ch)
        block = META.format(
            left=(
                '<span class="tabular-nums font-semibold text-slate-700 dark:text-slate-300">'
                f"{page}</span>"
            ),
            right=RIGHT_BASE.format(extra=extra),
        )
        return text[: m2.start()] + block + text[m2.end() :]

    return text


def main():
    for path in sorted(CH3.glob("rpa24_ch3_p*.blade.php")):
        raw = path.read_text(encoding="utf-8")
        new = patch(raw)
        if new != raw:
            path.write_text(new, encoding="utf-8", newline="\n")
            print("patched", path.name)


if __name__ == "__main__":
    main()

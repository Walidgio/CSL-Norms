# -*- coding: utf-8 -*-
"""Repair encoding/OCR on ch7 pages 111, 126-130."""
from pathlib import Path

ROOT = Path(r"c:\xampp\htdocs\walid\CSL-Norms\resources\views\codes\rpa\rpa2024\chapitre7\Ch7Pages")
CH3 = Path(r"c:\xampp\htdocs\walid\CSL-Norms\resources\views\codes\rpa\rpa2024\chapitre3\partials\ch3-running-meta.blade.php")


def fix_p111(text: str) -> str:
    old = (
        '<div class="rpa-bullet">&bull; V11 : effort tranchant de calcul</div>\n'
        '    <div class="rpa-bullet">&bull; he : hauteur totale de la section brute dans la direction considérée</div>\n'
        '    <div class="rpa-bullet">&bull; fe : contrainte limite elastique de l\'acier d\'armature transversale</div>\n'
        '    <div class="rpa-bullet">&bull; Pa : coefficient correcteur qui tient compte du mode fragile de la rupture, par effort tranchant;</div>\n'
        '    <div class="rpa-bullet">&bull; t : espacement des armatures transversales (cf. Figure (7.5)) dont la valeur est déterminée par</div>'
    )
    old = old.replace("<motion ", "<div ").replace("</motion>", "</div>")
    new = (
        '    <div class="rpa-bullet">&bull; <i>V<sub>u</sub></i> : effort tranchant de calcul</div>\n'
        '    <motion class="rpa-bullet">&bull; <i>h<sub>e</sub></i> : hauteur totale de la section brute dans la direction consid&eacute;r&eacute;e</motion>\n'
        '    <div class="rpa-bullet">&bull; <i>f<sub>e</sub></i> : contrainte limite &eacute;lastique de l&rsquo;acier d&rsquo;armature transversale</div>\n'
        '    <div class="rpa-bullet">&bull; <i>&rho;<sub>a</sub></i> : coefficient correcteur qui tient compte du mode fragile de la rupture, par effort tranchant ; il est pris &eacute;gal &agrave; 2,50, si l&rsquo;&eacute;lancement g&eacute;om&eacute;trique &lambda;<sub>g</sub> dans la direction consid&eacute;r&eacute;e est sup&eacute;rieur ou &eacute;gal &agrave; 5, et &eacute;gal &agrave; 3,75, dans le cas contraire.</div>\n'
        '    <div class="rpa-bullet">&bull; <i>t</i> : espacement des armatures transversales (cf. <a href="#rpa-fig-7.5" class="rpa-link">Figure (7.5)</a>) dont la valeur est d&eacute;termin&eacute;e par Eqn. (7.3). Par ailleurs, la valeur maximale de cet espacement est fix&eacute;e comme suit :</div>'
    )
    if old not in text:
        raise SystemExit("p111: top bullets not found")
    text = text.replace(old, new)

    text = text.replace(
        "avec bo: dimension minimale du noyau beton (a l' intérieur des armatures de confine-",
        "avec <i>b<sub>0</sub></i> : dimension minimale du noyau b&eacute;ton (&agrave; l&rsquo;int&eacute;rieur des armatures de confinement)",
    )
    text = text.replace(
        "interpoler entre les 2 valeurs limites précédentes si : 3 < Ag < 5",
        "interpoler entre les 2 valeurs limites pr&eacute;c&eacute;dentes si : 3 &lt; &lambda;<sub>g</sub> &lt; 5",
    )
    dup = (
        "    <div style=\"margin-top: 15px;\">\n"
        "        ou: &phi;<sub>l</sub> est le diamètre minimal des armatures longitudinales du poteau.\n"
        "    </div>\n"
        "    \n"
        "    <div class=\"rpa-equation-container\" id=\"rpa-eqt-7.4\" "
    )
    if dup in text:
        text = text.replace(
            dup,
            "    <p class=\"mt-4\">ou : &lambda;<sub>g</sub> est l&rsquo;&eacute;lancement g&eacute;om&eacute;trique du poteau :</p>\n\n    <div class=\"rpa-equation-container\" id=\"rpa-eqt-7.4\" ",
            1,
        )
    text = text.replace(
        "he, be: dimensions de la section droite du poteau, dans la direction de deformation considérée;",
        "<i>h<sub>e</sub></i>, <i>b<sub>e</sub></i> : dimensions de la section droite du poteau, dans la direction de d&eacute;formation consid&eacute;r&eacute;e ;",
    )
    text = text.replace("où :<br>", "o&ugrave; :<br>")
    text = text.replace(
        """Les cadres et les &eacute;triers doivent être fermés par des crochets a 135°, ayant une longueur droite
    </p>
    <p style="text-indent: 20px; text-align: justify;">
        suffisants ( &phi; cheminées > 12cm) pour permettre une vibration correcte du beton sur toute la hauteur
    </p>
    <p style="text-indent: 20px; text-align: justify;">
        Par ailleurs, en cas d' utilisation de poteaux circulaires, ii y a lieu d' utiliser des cerces droites""",
        """Les cadres et les &eacute;triers doivent &ecirc;tre ferm&eacute;s par des crochets &agrave; 135&deg;, ayant une longueur droite de (10&nbsp;&phi;<sub>l</sub>) minimum.
    </p>
    <p style="text-indent: 20px; text-align: justify;">
        Les cadres et les &eacute;triers doivent m&eacute;nager des chemin&eacute;es verticales en nombre et diam&egrave;tre suffisants (&phi;<sub>chemin&eacute;es</sub> &gt; 12&nbsp;cm) pour permettre une vibration correcte du b&eacute;ton sur toute la hauteur des poteaux.
    </p>
    <p style="text-indent: 20px; text-align: justify;">
        Par ailleurs, en cas d&rsquo;utilisation de poteaux circulaires, il y a lieu d&rsquo;utiliser des cerces droites individuelles (les cerces h&eacute;lico&iuml;dales continues sont interdites)""",
    )
    text = text.replace(
        "l'effort normal de compression de calcul des poteaux est limité à par la condition suivante",
        "l&rsquo;effort normal de compression de calcul des poteaux est limit&eacute; par la condition suivante",
    )
    text = text.replace(
        '(<a href="#rpa-eqt-7.5" class="rpa-link">v</a> =',
        '(<a href="#rpa-eqt-7.5" class="rpa-link">&nu;</a> =',
    )
    return text


def fix_p126(text: str) -> str:
    text = text.replace(
        "(ly> h,/5) et si l'&eacute;l&eacute;ment de rive confin&eacute; doit &ecirc;tre prolong&eacute; au-del~ de la membrure dans l'&acirc;me sur",
        "(<i>l<sub>f</sub></i> &ge; <i>h<sub>e</sub></i>/5) et si l&rsquo;&eacute;l&eacute;ment de rive confin&eacute; doit &ecirc;tre prolong&eacute; au-del&agrave; de la membrure dans l&rsquo;&acirc;me sur une longueur suppl&eacute;mentaire allant jusqu&rsquo;&agrave; (3&nbsp;<i>b<sub>w</sub></i>), alors l&rsquo;&eacute;paisseur de l&rsquo;&eacute;l&eacute;ment de rive confin&eacute;, <i>b<sub>c</sub></i>, reste &eacute;gale &agrave; <i>b<sub>w</sub></i>.",
    )
    text = text.replace(
        "doit rester au moins\n    </p>\n    <p style=\"text-align: justify;\">\n        Les armatures verticales",
        "doit rester au moins &eacute;gal &agrave; 0,5&nbsp;% de la surface de la zone confin&eacute;e.\n    </p>\n    <p style=\"text-align: justify;\">\n        Les armatures verticales",
    )
    text = text.replace(
        "devraient &ecirc;tre confin&eacute;es avec des cadres et/ou\n    </p>",
        "devraient &ecirc;tre confin&eacute;es avec des cadres et/ou des &eacute;triers horizontaux dont l&rsquo;espacement vertical doit satisfaire la condition suivante :\n    </p>",
    )
    text = text.replace(
        "o~: repr~sente le diam&ecirc;tre minimal",
        "o&ugrave; : &phi;<sub>l</sub> repr&eacute;sente le diam&egrave;tre minimal",
    )
    text = text.replace(
        "dans les &eacute;l&eacute;ments de rive;",
        "dans les &eacute;l&eacute;ments de rive ; en outre &phi;<sub>l</sub> &ge; 12&nbsp;mm.",
    )
    text = text.replace(
        "La section des armatures de confinement dans les léments de rive",
        "La section des armatures de confinement dans les &eacute;l&eacute;ments de rive",
    )
    text = text.replace(
        "(A<sub>t</sub>), mesure dans le sens parallle à lpaisseur du voile, doit tre présente sur la hauteur (h<sub>cr</sub>)",
        "(<i>A<sub>t</sub></i>), mesur&eacute;e dans le sens parall&egrave;le &agrave; l&rsquo;&eacute;paisseur du voile, doit &ecirc;tre pr&eacute;sente sur la hauteur (<i>h<sub>cr</sub></i>)",
    )
    return text


def fix_p127(text: str) -> str:
    i0 = text.find('<div class="rpa-indent">')
    i1 = text.find('<motion xmlns="http://www.w3.org/1998/Math/MathML"')
    if i1 == -1:
        i1 = text.find('<math xmlns="http://www.w3.org/1998/Math/MathML"')
    i1 = text.rfind("<p style=\"text-align: justify;\">", 0, i1)
    i1 = text.find("Le diamètre maximal,", i0)
    block_end = text.find("(7.28)", i1)
    block_end = text.find("</motion>", block_end) if text.find("</motion>", block_end) != -1 else text.find("</div>", block_end)
    block_end = text.find("</div>", block_end) + len("</div>")

    new_block = '''    <div class="rpa-indent">
        <p>o&ugrave; :</p>
        <div class="rpa-bullet">&bull; <i>b<sub>0</sub></i> repr&eacute;sente la largeur du noyau confin&eacute; de l&rsquo;&eacute;l&eacute;ment de rive</div>
        <div class="rpa-bullet">&bull; (<i>A<sub>g</sub></i>/<i>A<sub>c</sub></i>) repr&eacute;sente le rapport de la surface totale de l&rsquo;&eacute;l&eacute;ment de rive sur sa surface confin&eacute;e</div>
    </div>

    <p style="margin-top:15px; text-indent: 20px; text-align: justify;">
        Au-dessus de la zone critique, et en respectant la disposition de contreventement en voiles dans deux directions orthogonales, le calcul des voiles et des trumeaux se fera exclusivement dans la direction de leur plan moyen, en appliquant les r&egrave;gles de b&eacute;ton arm&eacute; en vigueur.
    </p>
    <p style="text-indent: 20px; text-align: justify;">
        Il convient, en outre, de pr&eacute;voir des &eacute;l&eacute;ments de rive sur un niveau suppl&eacute;mentaire, avec au moins la moiti&eacute; des armatures de confinement requises dans la zone critique.
    </p>

    <div class="rpa-h2-black" id="rpa-art-7.7.4-ame">Ferraillage de l&rsquo;&acirc;me</div>

    <div class="rpa-bullet">&bull; Aciers verticaux</motion>
    <p style="text-align: justify;">
        Les armatures d&rsquo;&acirc;me doivent se composer de deux treillis de barres ayant les m&ecirc;mes caract&eacute;ristiques d&rsquo;adh&eacute;rence, reli&eacute;s par des &eacute;triers espac&eacute;s d&rsquo;environ 500&nbsp;mm.
    </p>
    <p style="text-align: justify;">
        Le diam&egrave;tre maximal, &phi;<sub>max</sub>, des armatures d&rsquo;&acirc;me doivent respecter la condition :
    </p>

'''
    new_block = new_block.replace("<motion class=", "<div class=").replace("</motion>", "</motion>").replace("</motion>", "</motion>")
    new_block = new_block.replace("&bull; Aciers verticaux</motion>", "&bull; Aciers verticaux</div>")

    if i0 == -1 or i1 == -1:
        raise SystemExit(f"p127: markers i0={i0} i1={i1}")
    text = text[:i0] + new_block + text[block_end:]

    text = text.replace("repre ente", "repr&eacute;sente")
    text = text.replace("!'", "l&rsquo;")
    text = text.replace("moins la moiti~ des armatures", "Il convient, en outre, de pr&eacute;voir des &eacute;l&eacute;ments de rive sur un niveau suppl&eacute;mentaire, avec au moins la moiti&eacute; des armatures")
    text = text.replace("\n\n    Ferraillage de l'ame\n\n", "\n")
    text = text.replace("d'me", "d&rsquo;&acirc;me")
    text = text.replace("mmes caractéristiques", "m&ecirc;mes caract&eacute;ristiques")
    text = text.replace("</>", "&phi;<sub>max</sub>")
    text = text.replace(
        "L'espacement des armatures d' iime ne doit pas etre superieur a 250 mm ou 25 fois le diamètre",
        "L&rsquo;espacement des armatures d&rsquo;&acirc;me ne doit pas &ecirc;tre sup&eacute;rieur &agrave; 250&nbsp;mm ou 25 fois le diam&egrave;tre des barres, en prenant la plus petite valeur.",
    )
    text = text.replace("crochets ~ la partie sup~rieure.", "crochets &agrave; la partie sup&eacute;rieure. Toutes les autres barres n&rsquo;ont pas de crochets (jonction par recouvrement).")
    text = text.replace(
        "Dans le cas ou il existe des extr&eacute;mit&eacute;s\n    </p>\n    <p style=\"text-align: justify;\">\n        Le ferraillage horizontal, necessaire pour la resistance a !'effort tranchant, doit satisfaire Eqn.",
        "Dans le cas o&ugrave; il existe des extr&eacute;mit&eacute;s confin&eacute;es, les barres horizontales peuvent &ecirc;tre ancr&eacute;es sans crochets si les dimensions des talons permettent la r&eacute;alisation d&rsquo;un ancrage droit.\n    </p>\n    <p style=\"text-align: justify;\">\n        Le ferraillage horizontal, n&eacute;cessaire pour la r&eacute;sistance &agrave; l&rsquo;effort tranchant, doit satisfaire Eqn. (7.29)&nbsp;:",
    )
    text = text.replace(
        "7.7.5 Conditions de ductilite locale \n7.7.5 Conditions de ductilit~ locale",
        "7.7.5 Conditions de ductilit&eacute; locale",
    )
    text = text.replace("rapport mcanique", "rapport m&eacute;canique")
    text = text.replace("léments de rive", "&eacute;l&eacute;ments de rive")
    return text


def fix_p128(text: str) -> str:
    text = text.replace(
        "· a : Valeur requise du coefficient de ductilit~ en courbure;",
        "",
    )
    text = text.replace(
        "<p>où :</p>",
        "<p>o&ugrave; :</p>\n        <motion class=\"rpa-bullet\">&bull; <i>&mu;<sub>&phi;</sub></i> : valeur requise du coefficient de ductilit&eacute; en courbure ;</div>",
    )
    text = text.replace("<motion class=", "<div class=")
    text = text.replace(
        "esy : Valeur de la deformation a la limite elastique de l'acier, donnee comme suit:",
        "<i>&epsilon;<sub>sy</sub></i> : valeur de la d&eacute;formation &agrave; la limite &eacute;lastique de l&rsquo;acier, donn&eacute;e comme suit :",
    )
    text = text.replace("Es : module d'elasticite", "<i>E<sub>s</sub></i> : module d&rsquo;&eacute;lasticit&eacute;")
    text = text.replace("vd: effort normal reduit", "<i>v<sub>d</sub></i> : effort normal r&eacute;duit")
    text = text.replace("0 : pourcentage normalis~", "<i>&omega;<sub>v</sub></i> : pourcentage normalis&eacute;")
    text = text.replace("d'~mes", "d&rsquo;&acirc;mes")
    text = text.replace("A sv :", "<i>A<sub>sv</sub></i> :")
    text = text.replace("/ yd :", "<i>f<sub>yd</sub></i> :")
    text = text.replace("fed :", "<i>f<sub>cd</sub></i> :")
    text = text.replace("limite d'elasticite", "limite d&rsquo;&eacute;lasticit&eacute;")
    text = text.replace("resistance du beton", "r&eacute;sistance du b&eacute;ton")
    text = text.replace(
        "a: coefficient d'efficacit~ du confinement, ~gal ~ (0,,.a,). avec:",
        "<i>&alpha;</i> : coefficient d&rsquo;efficacit&eacute; du confinement, &eacute;gal &agrave; (&alpha;<sub>n</sub>&middot;&alpha;<sub>s</sub>), avec :",
    )
    text = text.replace("pr~voir une valeur minimale de a ~gale ~ 0.12", "pr&eacute;voir une valeur minimale de &omega;<sub>wd</sub> &eacute;gale &agrave; 0,12")
    text = text.replace("ductilit~ en courbure (ta)", "ductilit&eacute; en courbure (&mu;<sub>&phi;</sub>)")
    text = text.replace("d~termin~ selon", "d&eacute;termin&eacute; selon")
    text = text.replace("MEo est le moment", "<i>M<sub>ED</sub></i> est le moment")
    text = text.replace("flechissant issu de !'analyse", "fl&eacute;chissant issu de l&rsquo;analyse")
    text = text.replace(
        "situ&eacute; hors du noyau confin&eacute; des &eacute;l&eacute;ments de rive peut &ecirc;tre estim&eacute;e comme suit:",
        "La position de l&rsquo;axe neutre, <i>x<sub>u</sub></i>, correspondant &agrave; la courbure ultime apr&egrave;s &eacute;clatement du b&eacute;ton situ&eacute; hors du noyau confin&eacute; des &eacute;l&eacute;ments de rive peut &ecirc;tre estim&eacute;e comme suit :",
    )
    text = text.replace("<mi>M</text>", "<mi>M</mi>")
    return text


def fix_p129(text: str) -> str:
    subs = [
        ("comprim~e des parties de rive, lecalet, il est n~cessaire de calculer le", "comprim&eacute;e des parties de rive, <i>l<sub>c,calcul</sub></i>, il est n&eacute;cessaire de calculer le raccourcissement limite &agrave; la rupture, &epsilon;<sub>cu,c</sub>, du b&eacute;ton comprim&eacute;&nbsp;:"),
        ("le.ate doit &ecirc;tre sup~rieure ~ max(0.151 ; 1.5b,).", "l<sub>c,calcul</sub> doit &ecirc;tre sup&eacute;rieure &agrave; max(0,15&nbsp;<i>l<sub>w</sub></i> ; 1,5&nbsp;<i>b<sub>w</sub></i>)."),
        ("Ferraillage de la zone superieure", "Ferraillage de la zone sup&eacute;rieure"),
        ("voiles lancs peut tre", "voiles &eacute;lanc&eacute;s peut &ecirc;tre"),
        ("stabilis~es contre le ph~nom~ne de", "stabilis&eacute;es contre le ph&eacute;nom&egrave;ne de flambement ;"),
        ("crochets ~ leurs", "crochets &agrave; leurs"),
        ("béton armà dfini", "b&eacute;ton arm&eacute; d&eacute;fini"),
        ("Regles communes", "R&egrave;gles communes"),
        ("~gales ~:", "&eacute;gales &agrave;&nbsp;:"),
        ("60<P1 pour", "60&nbsp;&phi;<sub>l</sub> pour"),
        ("50¢y pour", "50&nbsp;&phi;<sub>l</sub> pour"),
        ("!'effort tranchant doit etre", "l&rsquo;effort tranchant doit &ecirc;tre"),
        ("rajout~ l'~cart", "rajout&eacute; l&rsquo;&eacute;cart"),
    ]
    for a, b in subs:
        text = text.replace(a, b)
    return text


def fix_p130(text: str) -> str:
    text = text.replace(
        "<h2 class=\"rpa-h2\">7.8 Jonction d'armatures \nII ne doit pas y avoir de jonction par recouvrement par souction D'ARMATURES</h2>",
        "<h2 class=\"rpa-h2\">7.8 Jonction d&rsquo;armatures</h2>",
    )
    text = text.replace(
        "II ne doit pas y avoir de jonction par recouvrement par soudure a l'intérieur des zones critiques des\n            </p>",
        "Il ne doit pas y avoir de jonction par recouvrement par soudure &agrave; l&rsquo;int&eacute;rieur des zones critiques des &eacute;l&eacute;ments de structure :\n        </p>",
    )
    text = text.replace("<J> : diarnetre", "<i>&phi;</i> : diam&egrave;tre")
    text = text.replace("lo :", "<i>l<sub>0</sub></i> :")
    text = text.replace("mcaniques", "m&eacute;caniques")
    text = text.replace("validà", "valid&eacute;")
    text = text.replace("appropris", "appropri&eacute;s")
    text = text.replace("conformità", "conformit&eacute;")
    text = text.replace("mcanique", "m&eacute;canique")
    text = text.replace(
        "pas &ecirc;tre dispos~es dans des zones fortement sollicit~es",
        "Les recouvrements des barres doivent respecter les dispositions de la figure (7.19), et ne doivent pas &ecirc;tre dispos&eacute;s dans des zones fortement sollicit&eacute;es",
    )
    text = text.replace(
        "<h2 class=\"rpa-h2\">7.9 Dispositions propres aux dalles et aux diaphragmes \nII doit exister un chainage pPOSITIONS PROPRES AUX DALLES ET AUX DIAPHRAGMES</h2>",
        "<h2 class=\"rpa-h2\">7.9 Dispositions propres aux dalles et aux diaphragmes</h2>",
    )
    text = text.replace("chanage périphrique", "cha&icirc;nage p&eacute;riph&eacute;rique")
    text = text.replace("dau moins", "d&rsquo;au moins")
    text = text.replace("section dacier", "section d&rsquo;acier")
    text = text.replace("lément de", "&eacute;l&eacute;ment de")
    text = text.replace("gale 1.5", "&eacute;gale &agrave; 1,5")
    text = text.replace("rgle de:", "r&egrave;gle de&nbsp;:")
    text = text.replace("(O.SOL)", "(0.50L)")
    text = text.replace("unit~: m", "unit&eacute; : m")
    text = text.replace("cha~n~e", "cha&icirc;n&eacute;e")
    return text


def normalize_utf8(path: Path) -> None:
    raw = path.read_bytes()
    if raw.startswith(b"\xef\xbb\xbf"):
        raw = raw[3:]
    path.write_text(raw.decode("utf-8"), encoding="utf-8", newline="\n")


def main():
    normalize_utf8(CH3)
    print("ch3-running-meta ok")
    for name, fn in [
        ("rpa24_ch7_p111.blade.php", fix_p111),
        ("rpa24_ch7_p126.blade.php", fix_p126),
        ("rpa24_ch7_p127.blade.php", fix_p127),
        ("rpa24_ch7_p128.blade.php", fix_p128),
        ("rpa24_ch7_p129.blade.php", fix_p129),
        ("rpa24_ch7_p130.blade.php", fix_p130),
    ]:
        p = ROOT / name
        t = fn(p.read_text(encoding="utf-8"))
        p.write_text(t, encoding="utf-8", newline="\n")
        print("fixed", name)


if __name__ == "__main__":
    main()

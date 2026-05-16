<section id="rpa-p112" class="rpa-page rpa-scroll-spy-section" data-annotatable="true">
    <div class="rpa-header-meta flex flex-wrap items-start justify-between gap-2 text-sm mb-6 border-b border-black/90 dark:border-slate-500 pb-2">
        <span class="tabular-nums font-semibold text-slate-700 dark:text-slate-300">112</span>
        <div class="text-right max-w-[min(100%,28rem)] space-y-0.5">
            @include('norms::codes.rpa.rpa2024.partials.ch7-running-meta')
        </div>
    </div>
<p style="text-indent: 20px; text-align: justify;">
        Les symboles ont les memes significations qu'en § 7.1.3.
    </p>

    <p style="text-align: justify; font-style: italic; margin-top: 20px;">
        Commentaire : La limitation, cf. <a href="#rpa-eqt-7.5" class="rpa-link">Eqn. (7.5)</a>, a pour objectif, à défaut d'empcher la rupture d'une section critique d'un poteau (génralement soumis à une flexion compose), de la retarder ou, au cas où elle se produit, de faire en sorte qu'elle se manifeste, le plus souvent sous forme de rupture ductile, c'est--dire par rupture des aciers tendus (suite à leur allongement dans le palier plastique), préalablement à l'atteinte de la résistance ultime du béton comprim. La disposition d'armatures transversales rapproches, dans la zone critique concerne qu'elles confinent, contribue galement à l'atteinte de cet objectif.
    </p>

    <div class="rpa-h2-black">Sollicitations tangentes</div>
    <p style="text-align: justify;">
        La contrainte de cisaillement conventionnelle de calcul dans le beton, 1:b11 , sous combinaison
    </p>

    <div class="rpa-equation-container" id="rpa-eqt-7.6" style="margin-top: 20px;">
        <div class="rpa-equation" style="text-align: left; padding-left: 60px;">
            <span style="text-decoration: overline;">&tau;</span><sub>bu</sub> = &rho;<sub>d</sub>.f<sub>c28</sub>
        </div>
        <div class="rpa-eq-num">(7.6)</div>
    </div>

    <div style="margin-top: 15px;">
        o: p est ~gal ~ 0.075 si l'~lancement g~om~trique. dans la direction consid~r~e, est sup~rieur
    </div>

    <p style="text-indent: 20px; text-align: justify; margin-top: 15px;">
        Dans le cas de remplissage en maçonnerie, ne rgnant pas sur toute la hauteur d'un poteau (prsence d'ouvertures en vasistas par exemple), la hauteur de calcul de l'lancement gomtrique sera celle de l'ouverture.
    </p>
    @include('norms::codes.rpa.rpa2024.partials.rpa-figure-showcase', [
        'id' => 'rpa-fig-7.3',
        'kicker' => 'Poteau court',
        'caption' => 'Figure 7.3 : Cas de constitution de poteau court, par hauteur insuffisante de la ma~onnerie de',
        'svg' => 'norms::codes.rpa.rpa2024.chapitre7.Ch7Svg.rpa24_ch7_fig7_3',
    ])


    <p style="text-indent: 20px; text-align: justify; margin-top: 20px;">
        Il y a lieu de noter que cette partie de poteau de hauteur h, considére comme poteau court si <i>&lambda;<sub>g</sub> &lt; 5</i>, doit tre confine par des armatures transversales calcules avec <a href="#rpa-eqt-7.3" class="rpa-link">Eqn. (7.3)</a> ou dduites des minima donns au <a href="#rpa-art-7.4.2" class="rpa-link">à 7.4.2</a>.
    </p>
    <p style="text-indent: 20px; text-align: justify;">
        ait bien ~t~ calcul~ en consid~rant la grande raideur de ce dernier par rapport aux autres poteaux
    </p>
    <p style="text-indent: 20px; text-align: justify;">
        Les poteaux courts, d'une manire génrale, amnent à de graves dèsordres à l'occasion de sismes, mme modrs. Si leur usage ne peut-tre vit, il est recommandà que des contreventements par voiles ou palées prennent l'essentiel de l'effort horizontal.
    </p>
</section>


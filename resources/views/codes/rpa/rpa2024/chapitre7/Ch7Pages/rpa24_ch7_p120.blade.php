<section id="rpa-p120" class="rpa-page rpa-scroll-spy-section" data-annotatable="true">
    <div class="rpa-header-meta flex flex-wrap items-start justify-between gap-2 text-sm mb-6 border-b border-black/90 dark:border-slate-500 pb-2">
        <span class="tabular-nums font-semibold text-slate-700 dark:text-slate-300">120</span>
        <div class="text-right max-w-[min(100%,28rem)] space-y-0.5">
            @include('norms::codes.rpa.rpa2024.partials.ch7-running-meta')
        </div>
    </div>
<p style="text-align: justify; margin-top: 15px;">
        avec : <i>z = h &minus; 2d'</i>
    </p>
    <p style="text-align: justify;">
        o:
    </p>
    <div class="rpa-indent">
        <div class="rpa-bullet">&bull; s: espacement des cours d'armatures transversales</div>
        <div class="rpa-bullet">&bull; A, : section d'un cours d'armatures transversales</div>
        <div class="rpa-bullet">&bull; V:effort tranchant, dans la section consider~e, ~gal (1.4%)</div>
        <div class="rpa-bullet">&bull; l : portee du linteau</div>
    </div>

    <div class="rpa-indent mt-4">
        (b) Deuxieme sous-cas: linteaux courts ([Ag = f.J :S I)
        <div class="rpa-bullet">On doit vérifier <a href="#rpa-eqt-7.16" class="rpa-link">Eqn. (7.16)</a> :</div>
    </div>

    <div class="rpa-equation-container" id="rpa-eqt-7.16">
        <div class="rpa-equation">
            <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
                <mrow>
                    <mi>s</mi>
                    <mo>&le;</mo>
                    <mfrac>
                        <mrow>
                            <msub><mi>A</mi><mi>t</mi></msub>
                            <mo>&sdot;</mo>
                            <msub><mi>f</mi><mi>e</mi></msub>
                            <mo>&sdot;</mo>
                            <mi>l</mi>
                        </mrow>
                        <mrow>
                            <mi>V</mi>
                            <mo>+</mo>
                            <msub><mi>A</mi><mi>t</mi></msub>
                            <mo>&sdot;</mo>
                            <msub><mi>f</mi><mi>e</mi></msub>
                        </mrow>
                    </mfrac>
                </mrow>
            </math>
        </div>
        <div class="rpa-eq-num">(7.16)</div>
    </div>

    <p style="text-align: justify; margin-top: 15px;">
        avec:
    </p>

    <div class="rpa-equation-container" id="rpa-eqt-7.17">
        <div class="rpa-equation">
            <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
                <mrow>
                    <msub><mi>V</mi><mn>1</mn></msub>
                    <mo>=</mo>
                    <mfrac>
                        <mrow>
                            <mo>|</mo>
                            <msub><mi>M</mi><mrow><mi>c</mi><mi>i</mi></mrow></msub>
                            <mo>+</mo>
                            <msub><mi>M</mi><mrow><mi>c</mi><mi>j</mi></mrow></msub>
                            <mo>|</mo>
                        </mrow>
                        <msub><mi>l</mi><mrow><mi>i</mi><mi>j</mi></mrow></msub>
                    </mfrac>
                </mrow>
            </math>
        </div>
        <div class="rpa-eq-num">(7.17)</div>
    </div>

    <p style="text-align: justify; margin-top: 15px;">
        o:
    </p>
    <div class="rpa-indent">
        <div class="rpa-bullet">à <i>V<sub>2</sub> = 2.V<sub>u</sub></i></div>
        <div class="rpa-bullet">&bull; V = min(V, , V2)</div>
    </div>
    <p style="text-align: justify; margin-top: 5px;">
        et:
    </p>
    <div class="rpa-indent">
        <div class="rpa-bullet">&bull; Mc; et Mc/ moments « resistants ultimes » des sections d'about, a gauche et a</div>
    </div>

    <div class="rpa-equation-container my-4" style="justify-content: center;">
        <div class="rpa-equation">
            <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
                <mrow>
                    <msub><mi>M</mi><mi>c</mi></msub>
                    <mo>=</mo>
                    <msub><mi>A</mi><mi>l</mi></msub>
                    <mo>&sdot;</mo>
                    <msub><mi>f</mi><mi>e</mi></msub>
                    <mo>&sdot;</mo>
                    <mi>z</mi>
                </mrow>
            </math>
        </div>
    </div>

    <p style="text-align: center;">avec : <i>z = h &minus; 2d'</i>, (cf. <a href="#rpa-fig-7.10" class="rpa-link">Figure (7.10)</a>)</p>
    @include('norms::codes.rpa.rpa2024.partials.rpa-figure-showcase', [
        'id' => 'rpa-fig-7.10',
        'kicker' => 'Linteau',
        'caption' => 'Figure 7.10 : Effort tranchant et moment dans le linteau',
        'svg' => 'norms::codes.rpa.rpa2024.chapitre7.Ch7Svg.rpa24_ch7_fig7_10',
    ])


    (b) Deuxieme sous-cas: linteaux courts ([Ag = f.J :S I)
    <p style="text-align: justify;">
        Dans ce cas, il y a lieu de disposer les ferraillages longitudinaux (supérieurs et inférieurs), transversaux et en zone courante (armatures de peau) suivant les minimum rglementaires.
    </p>
    <p style="text-align: justify; text-indent: 20px;">
        Les efforts (M, V) sont repris par des bielles diagonales (de compression et de traction) suivant
    </p>

</section>


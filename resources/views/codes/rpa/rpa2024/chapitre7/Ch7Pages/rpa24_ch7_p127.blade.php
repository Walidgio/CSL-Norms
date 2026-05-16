{{-- ==================== PAGE 127 ==================== --}}
<section id="rpa-p127" class="rpa-page rpa-scroll-spy-section" data-annotatable="true">
    <div class="rpa-header-meta flex flex-wrap items-start justify-between gap-2 text-sm mb-6 border-b border-black/90 dark:border-slate-500 pb-2">
        <span class="tabular-nums font-semibold text-slate-700 dark:text-slate-300">127</span>
        <div class="text-right max-w-[min(100%,28rem)] space-y-0.5">
            @include('norms::codes.rpa.rpa2024.partials.ch7-running-meta')
        </div>
    </div>
    <div class="rpa-indent">
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

    <div class="rpa-bullet">&bull; Aciers verticaux</div>
    <p style="text-align: justify;">
        Les armatures d&rsquo;&acirc;me doivent se composer de deux treillis de barres ayant les m&ecirc;mes caract&eacute;ristiques d&rsquo;adh&eacute;rence, reli&eacute;s par des &eacute;triers espac&eacute;s d&rsquo;environ 500&nbsp;mm.
    </p>
    <p style="text-align: justify;">
        Le diam&egrave;tre maximal, &phi;<sub>max</sub>, des armatures d&rsquo;&acirc;me doivent respecter la condition :
    </p>


    </div>

    <p style="text-align: justify;">
        L&rsquo;espacement des armatures d&rsquo;&acirc;me ne doit pas &ecirc;tre sup&eacute;rieur &agrave; 250&nbsp;mm ou 25 fois le diam&egrave;tre des barres, en prenant la plus petite valeur.
    </p>
    <p style="text-align: justify;">
        Les barres verticales du dernier niveau doivent &ecirc;tre munies de crochets &agrave; la partie sup&eacute;rieure. Toutes les autres barres n&rsquo;ont pas de crochets (jonction par recouvrement).
    </p>

    <div class="rpa-bullet">&bull; Aciers horizontaux</div>
    <p style="text-align: justify;">
        Les barres horizontales doivent &ecirc;tre munies de crochets. Dans le cas o&ugrave; il existe des extr&eacute;mit&eacute;s confin&eacute;es, les barres horizontales peuvent &ecirc;tre ancr&eacute;es sans crochets si les dimensions des talons permettent la r&eacute;alisation d&rsquo;un ancrage droit.
    </p>
    <p style="text-align: justify;">
        Le ferraillage horizontal, n&eacute;cessaire pour la r&eacute;sistance &agrave; l&rsquo;effort tranchant, doit satisfaire Eqn. (7.29)&nbsp;:
    </p>

    <div class="rpa-equation-container" id="rpa-eqt-7.29">
        <div class="rpa-equation">
            <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
                <mrow>
                    <mfrac>
                        <msub><mi>A</mi><mi>h</mi></msub>
                        <mi>s</mi>
                    </mfrac>
                    <mo>&ge;</mo>
                    <mfrac>
                        <mover><mi>V</mi><mo>&mdash;</mo></mover>
                        <mrow>
                            <mi>z</mi><mo>&sdot;</mo><msub><mi>f</mi><mi>e</mi></msub>
                        </mrow>
                    </mfrac>
                </mrow>
            </math>
        </div>
        <div class="rpa-eq-num">(7.29)</div>
    </div>

    <div style="margin-top:10px;">
        avec:<br>
        <div class="rpa-indent">
            <div class="rpa-bullet">- <math xmlns="http://www.w3.org/1998/Math/MathML"><mover><mi>V</mi><mo>&mdash;</mo></mover></math>: effort tranchant de calcul, <math xmlns="http://www.w3.org/1998/Math/MathML"><mrow><mover><mi>V</mi><mo>&mdash;</mo></mover><mo>=</mo><mn>1.4</mn><msub><mi>V</mi><mi>u</mi></msub></mrow></math></div>
            - z: distance entre les centres de gravit&eacute; des armatures des deux extr&eacute;mit&eacute;s confin&eacute;es.
        </div>
    </div>

    <div id="rpa-art-7.7.5" style="scroll-margin-top: 100px;">
        <div class="rpa-h3" id="rpa-art-7.7.5-1">7.7.5 Conditions de ductilit&eacute; locale</div>
        <p style="text-align: justify;">
            Dans les voiles de section rectangulaire, le rapport m&eacute;canique en volume des armatures de confinement requises, <i>&omega;<sub>wd</sub></i>, dans les &eacute;l&eacute;ments de rive, doit respecter la condition ci-dessous :
        </p>

        <div class="rpa-equation-container" id="rpa-eqt-7.30">
            <div class="rpa-equation">
                <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
                    <mrow>
                        <mi>&alpha;</mi>
                        <msub><mi>&omega;</mi><mtext>wd</mtext></msub>
                        <mo>=</mo>
                        <mn>30</mn><mo>&sdot;</mo>
                        <msub><mi>&mu;</mi><mi>&phi;</mi></msub><mo>&sdot;</mo>
                        <mo>(</mo>
                        <msub><mi>v</mi><mi>d</mi></msub><mo>+</mo><msub><mi>&omega;</mi><mi>v</mi></msub>
                        <mo>)</mo><mo>&sdot;</mo>
                        <msub><mi>&epsilon;</mi><mtext>sy,d</mtext></msub>
                        <mfrac>
                            <msub><mi>b</mi><mi>c</mi></msub>
                            <msub><mi>b</mi><mn>0</mn></msub>
                        </mfrac>
                        <mo>&minus;</mo>
                        <mn>0.035</mn>
                    </mrow>
                </math>
            </div>
            <div class="rpa-eq-num">(7.30)</div>
        </div>

        <div class="rpa-equation-container" id="rpa-eqt-7.31">
            <div class="rpa-equation">
                <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
                    <mrow>
                        <msub><mi>&omega;</mi><mtext>wd</mtext></msub>
                        <mo>=</mo>
                        <mfrac>
                            <mtext>volume des armatures de confinement</mtext>
                            <mtext>volume du noyau en b&eacute;ton</mtext>
                        </mfrac>
                        <mo>&sdot;</mo>
                        <span class="rpa-fraction"><span class="rpa-fraction-top">f<sub>yd</sub></span><span class="rpa-fraction-bottom">f<sub>cd</sub></span></span>
                    </mrow>
                </math>
            </div>
            <div class="rpa-eq-num">(7.31)</div>
        </div>

        <div style="margin-top:10px;">
            avec :
        </div>
        
        <div class="rpa-equation-container" id="rpa-eqt-7.32">
            <div class="rpa-equation">
                <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
                    <mrow>
                        <mfrac>
                            <msub><mi>f</mi><mtext>yd</mtext></msub>
                            <msub><mi>f</mi><mtext>cd</mtext></msub>
                        </mfrac>
                        <mo>=</mo>
                        <mfrac>
                            <msub><mi>f</mi><mi>e</mi></msub>
                            <msub><mi>f</mi><mrow><mi>c</mi><mn>28</mn></mrow></msub>
                        </mfrac>
                        <mo>&sdot;</mo>
                        <mfrac>
                            <msub><mi>&gamma;</mi><mi>b</mi></msub>
                            <msub><mi>&gamma;</mi><mi>s</mi></msub>
                        </mfrac>
                    </mrow>
                </math>
            </div>
            <div class="rpa-eq-num">(7.32)</div>
        </div>
    </div>
</section>

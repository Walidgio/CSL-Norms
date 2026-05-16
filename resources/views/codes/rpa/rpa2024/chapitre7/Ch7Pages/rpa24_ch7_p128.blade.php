{{-- ==================== PAGE 128 ==================== --}}
<section id="rpa-p128" class="rpa-page rpa-scroll-spy-section" data-annotatable="true">
    <div class="rpa-header-meta flex flex-wrap items-start justify-between gap-2 text-sm mb-6 border-b border-black/90 dark:border-slate-500 pb-2">
        <span class="tabular-nums font-semibold text-slate-700 dark:text-slate-300">128</span>
        <div class="text-right max-w-[min(100%,28rem)] space-y-0.5">
            @include('norms::codes.rpa.rpa2024.partials.ch7-running-meta')
        </div>
    </div>
<div>
        <p>o&ugrave; :</p>
        <div class="rpa-bullet">&bull; <i>&mu;<sub>&phi;</sub></i> : valeur requise du coefficient de ductilit&eacute; en courbure ;</div>
        <div class="rpa-bullet">&bull; <i>&epsilon;<sub>sy</sub></i> : valeur de la d&eacute;formation &agrave; la limite &eacute;lastique de l&rsquo;acier, donn&eacute;e comme suit :</div>
    </div>

    <div class="rpa-equation-container" id="rpa-eqt-7.33">
        <div class="rpa-equation">
            <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
                <mrow>
                    <msub><mi>&epsilon;</mi><mtext>sy</mtext></msub>
                    <mo>=</mo>
                    <mfrac>
                        <msub><mi>f</mi><mi>e</mi></msub>
                        <msub><mi>E</mi><mi>s</mi></msub>
                    </mfrac>
                </mrow>
            </math>
        </div>
        <div class="rpa-eq-num">(7.33)</div>
    </div>

    <div class="mt-2">
        <div class="rpa-bullet">&bull; <i>E<sub>s</sub></i> : module d&rsquo;&eacute;lasticit&eacute; de l&rsquo;acier</div>
        <div class="rpa-bullet">&bull; <i>v<sub>d</sub></i> : effort normal r&eacute;duit, cas d' une section rectangulaire</div>
        <div class="rpa-bullet">&bull; <i>&omega;<sub>v</sub></i> : pourcentage normalis&eacute; des armatures verticales d&rsquo;&acirc;mes</div>
    </div>

    <div class="rpa-equation-container" id="rpa-eqt-7.34">
        <div class="rpa-equation">
            <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
                <mrow>
                    <msub><mi>&omega;</mi><mi>v</mi></msub>
                    <mo>=</mo>
                    <mfrac>
                        <msub><mi>A</mi><mtext>sv</mtext></msub>
                        <mrow>
                            <mo>(</mo><msub><mi>l</mi><mi>w</mi></msub><mo>&minus;</mo><mn>2</mn><msub><mi>l</mi><mi>c</mi></msub><mo>)</mo><mo>&sdot;</mo><msub><mi>b</mi><mi>w</mi></msub>
                        </mrow>
                    </mfrac>
                    <mo>&sdot;</mo>
                    <mfrac>
                        <msub><mi>f</mi><mtext>yd</mtext></msub>
                        <msub><mi>f</mi><mtext>cd</mtext></msub>
                    </mfrac>
                </mrow>
            </math>
        </div>
        <div class="rpa-eq-num">(7.34)</div>
    </div>

    <div class="mt-2">
        <div class="rpa-bullet">&bull; <i>A<sub>sv</sub></i> : section de ferraillage correspondant a la section de !' a.me du voile</div>
        <div class="rpa-bullet">&bull; <i>f<sub>yd</sub></i> : valeur de calcul de la limite d'elasticite de l'acier</div>
        <div class="rpa-bullet">&bull; <i>f<sub>cd</sub></i> : valeur de calcul de la r&eacute;sistance du b&eacute;ton a la compression</div>
        <div class="rpa-bullet">&bull; <i>&alpha;</i> : coefficient d&rsquo;efficacit&eacute; du confinement, &eacute;gal &agrave; (&alpha;<sub>n</sub>&middot;&alpha;<sub>s</sub>), avec :</div>
    </div>

    <div class="rpa-equation-container" id="rpa-eqt-7.35">
        <div class="rpa-equation">
            <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
                <mrow>
                    <mo>{</mo>
                    <mtable columnalign="left">
                        <mtr>
                            <mtd>
                                <msub><mi>&alpha;</mi><mi>n</mi></msub>
                                <mo>=</mo>
                                <mn>1</mn>
                                <mo>&minus;</mo>
                                <munder><mo>&Sigma;</mo><mi>n</mi></munder>
                                <mrow>
                                    <mo>(</mo>
                                    <mfrac>
                                        <msubsup><mi>b</mi><mi>i</mi><mn>2</mn></msubsup>
                                        <mrow>
                                            <mn>6</mn><msub><mi>b</mi><mn>0</mn></msub><msub><mi>h</mi><mn>0</mn></msub>
                                        </mrow>
                                    </mfrac>
                                    <mo>)</mo>
                                </mrow>
                            </mtd>
                        </mtr>
                        <mtr>
                            <mtd>
                                <msub><mi>&alpha;</mi><mi>s</mi></msub>
                                <mo>=</mo>
                                <mrow>
                                    <mo>(</mo>
                                    <mn>1</mn><mo>&minus;</mo><mfrac><mi>t</mi><mrow><mn>2</mn><msub><mi>b</mi><mn>0</mn></msub></mrow></mfrac>
                                    <mo>)</mo>
                                </mrow>
                                <mrow>
                                    <mo>(</mo>
                                    <mn>1</mn><mo>&minus;</mo><mfrac><mi>t</mi><mrow><mn>2</mn><msub><mi>h</mi><mn>0</mn></msub></mrow></mfrac>
                                    <mo>)</mo>
                                </mrow>
                            </mtd>
                        </mtr>
                    </mtable>
                </mrow>
            </math>
        </div>
        <div class="rpa-eq-num">(7.35)</div>
    </div>

    <div class="rpa-indent">
        - n : nombre total de barres longitudinales lateralement maintenues par des armatures de
        - b;: distance entre des barres maintenues consecutives (cf. Figure (7.2a)
        - bo, ho, t : grandeurs géométriques (cf. Figure (7.2a).
    </div>

    <p style="text-align: justify; margin-top: 15px;">
        Il convient de pr&eacute;voir une valeur minimale de &omega;<sub>wd</sub> &eacute;gale &agrave; 0,12 dans la zone critique ~ la base
    </p>
    <p style="text-indent: 20px; text-align: justify;">
        Le coefficient de ductilit&eacute; en courbure (&mu;<sub>&phi;</sub>) peut &ecirc;tre d&eacute;termin&eacute; selon Eqn. (7.36), en fonction de la p&eacute;riode fondamentale (<i>T<sub>0</sub></i>), de la valeur (<i>T<sub>2</sub></i>) du spectre de calcul, du coefficient de comportement (<i>R</i>/<i>Q<sub>F</sub></i>) et du rapport (<i>M<sub>ED</sub></i>/<i>M<sub>RD</sub></i>).
    </p>

    <div class="rpa-equation-container" id="rpa-eqt-7.36">
        <div class="rpa-equation">
            <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
                <mrow>
                    <msub><mi>&mu;</mi><mi>&phi;</mi></msub>
                    <mo>=</mo>
                    <mo>{</mo>
                    <mtable columnalign="left">
                        <mtr>
                            <mtd>
                                <mn>2</mn><mo>&sdot;</mo>
                                <mrow>
                                    <mo>(</mo>
                                    <mfrac><mi>R</mi><msub><mi>Q</mi><mi>F</mi></msub></mfrac>
                                    <mo>&sdot;</mo>
                                    <mfrac><msub><mi>M</mi><mtext>ED</mtext></msub><msub><mi>M</mi><mtext>RD</mtext></msub></mfrac>
                                    <mo>)</mo>
                                </mrow>
                                <mo>&minus;</mo><mn>1</mn>
                                <mspace width="20px"/><mtext>, si </mtext><msub><mi>T</mi><mn>0</mn></msub><mo>&ge;</mo><msub><mi>T</mi><mn>2</mn></msub>
                            </mtd>
                        </mtr>
                        <mtr>
                            <mtd>
                                <mn>1</mn><mo>+</mo><mn>2</mn><mo>&sdot;</mo>
                                <mrow>
                                    <mo>[</mo>
                                    <mrow>
                                        <mo>(</mo>
                                        <mfrac><mi>R</mi><msub><mi>Q</mi><mi>F</mi></msub></mfrac>
                                        <mo>&sdot;</mo>
                                        <mfrac><msub><mi>M</mi><mtext>ED</mtext></msub><msub><mi>M</mi><mtext>RD</mtext></msub></mfrac>
                                        <mo>)</mo>
                                    </mrow>
                                    <mo>&minus;</mo><mn>1</mn>
                                    <mo>]</mo>
                                </mrow>
                                <mo>&sdot;</mo>
                                <mfrac><msub><mi>T</mi><mn>2</mn></msub><msub><mi>T</mi><mn>0</mn></msub></mfrac>
                                <mspace width="20px"/><mtext>, si </mtext><msub><mi>T</mi><mn>0</mn></msub><mo>&lt;</mo><msub><mi>T</mi><mn>2</mn></msub>
                            </mtd>
                        </mtr>
                    </mtable>
                </mrow>
            </math>
        </div>
        <div class="rpa-eq-num">(7.36)</div>
    </div>

    <p style="text-align: justify;">
        <i>M<sub>ED</sub></i> est le moment fl&eacute;chissant issu de l&rsquo;analyse (enveloppe de calcul decalee de he,.) a la base
    </p>

    <p style="text-align: justify; text-indent: 20px; margin-top: 15px;">
        La position de l&rsquo;axe neutre, <i>x<sub>u</sub></i>, correspondant &agrave; la courbure ultime apr&egrave;s &eacute;clatement du b&eacute;ton situ&eacute; hors du noyau confin&eacute; des &eacute;l&eacute;ments de rive peut &ecirc;tre estim&eacute;e comme suit :
    </p>

    <div class="rpa-equation-container" id="rpa-eqt-7.37">
        <div class="rpa-equation">
            <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
                <mrow>
                    <msub><mi>x</mi><mi>u</mi></msub>
                    <mo>=</mo>
                    <mrow>
                        <mo>(</mo>
                        <msub><mi>v</mi><mi>d</mi></msub><mo>+</mo><msub><mi>&omega;</mi><mi>v</mi></msub>
                        <mo>)</mo>
                    </mrow>
                    <mo>&sdot;</mo>
                    <mfrac>
                        <mrow><msub><mi>l</mi><mi>w</mi></msub><mo>&sdot;</mo><msub><mi>b</mi><mi>c</mi></msub></mrow>
                        <msub><mi>b</mi><mn>0</mn></msub>
                    </mfrac>
                </mrow>
            </math>
        </div>
        <div class="rpa-eq-num">(7.37)</div>
    </div>

    <p style="text-align: justify; text-indent: 20px;">
        Les param&egrave;tres de l&rsquo;Eqn. (7.37) sont d&eacute;finis dans les sections précédentes (cf. Eqns. (7 .11 ) &
    </p>
</section>

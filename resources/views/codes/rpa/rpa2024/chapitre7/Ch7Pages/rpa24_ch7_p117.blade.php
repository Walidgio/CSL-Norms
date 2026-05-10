<section id="rpa-p117" class="rpa-page rpa-scroll-spy-section">
    <div class="rpa-header">
        <span>117</span>
        <span class="chapter">7.7 VOILES DE CONTREVENTEMENT</span>
    </div>

    <div id="rpa-art-7.7" style="scroll-margin-top: 100px;">
        <h2 class="rpa-h2">7.7 VOILES DE CONTREVENTEMENT</h2>
        
        <div class="rpa-h3" id="rpa-art-7.7.1">7.7.1 Coffrages</div>

        <p style="text-align: justify;">
            Sont considérés et pris en compte comme voiles de contreventement, au sens du présent document technique réglementaire, les éléments de contreventement satisfaisant la condition exprimée par <a href="#rpa-eqt-7.9" class="rpa-link">Eqn. (7.9)</a>, cf. <a href="#rpa-fig-7.7" class="rpa-link">Figure (7.7)</a> :
        </p>

        <div class="rpa-equation-container" id="rpa-eqt-7.9">
            <div class="rpa-equation">
                <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
                    <mrow>
                        <msub><mi>l</mi><mi>w</mi></msub>
                        <mo>&ge;</mo>
                        <mi>max</mi>
                        <mo>(</mo>
                        <mfrac>
                            <msub><mi>h</mi><mi>e</mi></msub>
                            <mn>3</mn>
                        </mfrac>
                        <mo>;</mo>
                        <mn>4</mn>
                        <msub><mi>b</mi><mi>w</mi></msub>
                        <mo>;</mo>
                        <mn>1</mn>
                        <mtext>&nbsp;m</mtext>
                        <mo>)</mo>
                    </mrow>
                </math>
            </div>
            <div class="rpa-eq-num">(7.9)</div>
        </div>

        <p style="text-align: justify; margin-top: 15px;">
            où: <i>l<sub>w</sub></i> représente la longueur du voile. Dans le cas contraire, ces éléments sont considérés comme des éléments linéaires (poteaux).
        </p>
        <p style="text-align: justify; text-indent: 20px;">
            L'épaisseur minimale (<i>b<sub>w</sub></i>) doit respecter la condition suivante :
        </p>

        <div class="rpa-equation-container" id="rpa-eqt-7.10">
            <div class="rpa-equation">
                <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
                    <mrow>
                        <msub><mi>b</mi><mi>w</mi></msub>
                        <mo>&ge;</mo>
                        <mi>max</mi>
                        <mo>(</mo>
                        <mn>15</mn>
                        <mtext>&nbsp;cm</mtext>
                        <mo>;</mo>
                        <mfrac>
                            <msub><mi>h</mi><mi>e</mi></msub>
                            <mn>20</mn>
                        </mfrac>
                        <mo>)</mo>
                    </mrow>
                </math>
            </div>
            <div class="rpa-eq-num">(7.10)</div>
        </div>
    </div>

    <!-- Figure 7.7 SVG -->
    <div class="rpa-figure-container my-8" id="rpa-fig-7.7-container">
        @include('norms::codes.rpa.rpa2024.chapitre7.Ch7Svg.rpa24_ch7_fig7_7')
        <div class="rpa-figure-title" id="rpa-fig-7.7">Figure 7.7 : Coupe de voile en élévation</div>
    </div>

    <p style="text-align: justify; text-indent: 20px;">
        Par ailleurs, en plus des résultats donnés par les calculs de dimensionnement, ou de vérification requis, et pour des considérations de stabilité de forme (non flambement), l'épaisseur doit être déterminée en fonction de <i>h<sub>e</sub></i>, la hauteur libre du niveau, et des conditions de rigidité aux extrémités, cf. <a href="#rpa-fig-7.8" class="rpa-link">Figure (7.8)</a>.
    </p>
    <p style="text-align: justify; text-indent: 20px;">
        Il convient de considérer des sections de voiles, composées de parties rectangulaires liées entre elles (sections composées en L, T, U, I ou similaires), comme des sections uniques composées d'une ou de plusieurs âmes parallèles à la direction de l'effort tranchant sismique agissant et d'un ou de plusieurs raidisseurs perpendiculaires.
    </p>
    <p style="text-align: justify; text-indent: 20px;">
        Pour le calcul de la résistance à la flexion, il convient de prendre en compte la largeur participante de membrures raidisseuses, de part et d'autre de chaque âme, s'étendant, à partir de la face de l'âme, sur une largeur égale à <i>L<sub>min</sub></i> (cf. <a href="#rpa-fig-7.9" class="rpa-link">Figure (7.9)</a>) :
    </p>

    <div class="rpa-equation-container my-6" id="rpa-eqt-7.11" style="justify-content: flex-start; padding-left: 40px;">
        <div class="rpa-equation text-left">
            <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
                <mrow>
                    <msub><mi>L</mi><mrow><mi>m</mi><mi>i</mi><mi>n</mi></mrow></msub>
                    <mo>=</mo>
                    <mi>min</mi>
                    <mo>{</mo>
                    <mtable columnalign="left" rowspacing="5px">
                        <mtr>
                            <mtd>
                                <msub><mi>d</mi><mi>t</mi></msub>
                            </mtd>
                        </mtr>
                        <mtr>
                            <mtd>
                                <mn>0.5</mn>
                                <msub><mi>d</mi><mi>w</mi></msub>
                            </mtd>
                        </mtr>
                        <mtr>
                            <mtd>
                                <mn>0.25</mn>
                                <msub><mi>h</mi><mi>w</mi></msub>
                            </mtd>
                        </mtr>
                    </mtable>
                </mrow>
            </math>
        </div>
    </div>

    <p style="text-align: justify; margin-top: 15px;">
        avec:
    </p>
    <div class="rpa-indent">
        <div class="rpa-bullet">• <i>d<sub>t</sub></i> : longueur réelle de la membrure ;</div>
        <div class="rpa-bullet">• <i>d<sub>w</sub></i> : distance à une âme adjacente du voile ;</div>
        <div class="rpa-bullet">• <i>h<sub>w</sub></i> : hauteur totale du voile au-dessus du niveau considéré.</div>
    </div>

</section>


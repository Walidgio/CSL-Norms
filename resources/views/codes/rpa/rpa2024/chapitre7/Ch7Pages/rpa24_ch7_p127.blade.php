{{-- ==================== PAGE 127 ==================== --}}
<section id="rpa-p127" class="rpa-page rpa-scroll-spy-section">
    <div class="rpa-header">
        <span>127</span>
        <span class="chapter">Chapter 7. STRUCTURES EN BETON ARME</span>
    </div>

    <div class="rpa-indent">
        <p>où :</p>
        <div class="rpa-bullet">• <i>b<sub>0</sub></i> représente la largeur du noyau confinée de l'élément de rive</div>
        <div class="rpa-bullet">• (<i>A<sub>g</sub>/A<sub>c</sub></i>) représente le rapport de la surface totale de l'élément de rive sur sa surface confinée</div>
    </div>

    <p style="margin-top:15px; text-indent: 20px; text-align: justify;">
        Au-dessus de la zone critique, et en respectant la disposition de contreventement en voiles dans deux directions orthogonales, le calcul des voiles et des trumeaux se fera exclusivement dans la direction de leur plan moyen, en appliquant les règles de béton armé en vigueur.
    </p>
    <p style="text-indent: 20px; text-align: justify;">
        Il convient, en outre, de prévoir des éléments de rive sur un niveau supplémentaire, avec au moins la moitié des armatures de confinement requises dans la zone critique.
    </p>

    <div class="rpa-h2" id="rpa-art-7.7.4-ame"  style="margin-top: 25px;">Ferraillage de l'âme</div>

    <div class="rpa-bullet mt-2">• <b>Aciers verticaux</b></div>
    <p style="text-align: justify;">
        Les armatures d'âme doivent se composer de deux treillis de barres ayant les mêmes caractéristiques d'adhérence, reliés par des étriers espacés d'environ 500 mm.
    </p>
    <p style="text-align: justify;">
        Le diamètre maximal, <i>&phi;<sub>max</sub></i>, des armatures d'âme doivent respecter la condition :
    </p>

    <div class="rpa-equation-container" id="rpa-eqt-7.28">
        <div class="rpa-equation">
            <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
                <mrow>
                    <mn>8</mn><mtext>mm</mtext>
                    <mo>&le;</mo>
                    <msub><mi>&phi;</mi><mtext>max</mtext></msub>
                    <mo>&le;</mo>
                    <msub><mi>b</mi><mi>w</mi></msub><mo>/</mo><mn>8</mn>
                </mrow>
            </math>
        </div>
        <div class="rpa-eq-num">(7.28)</div>
    </div>

    <p style="text-align: justify;">
        L'espacement des armatures d'âme ne doit pas être supérieur à 250 mm ou 25 fois le diamètre des barres, en prenant la plus petite valeur.
    </p>
    <p style="text-align: justify;">
        Les barres verticales du dernier niveau doivent être munies de crochets à la partie supérieure. Toutes les autres barres n'ont pas de crochets (jonction par recouvrement).
    </p>

    <div class="rpa-bullet mt-4">• <b>Aciers horizontaux</b></div>
    <p style="text-align: justify;">
        Les barres horizontales doivent être munies de crochets. Dans le cas où il existe des extrémités confinées, les barres horizontales peuvent être ancrées sans crochets si les dimensions des talons permettent la réalisation d'un ancrage droit.
    </p>
    <p style="text-align: justify;">
        Le ferraillage horizontal, nécessaire pour la résistance à l'effort tranchant, doit satisfaire <a href="#rpa-eqt-7.29" class="rpa-link">Eqn. (7.29)</a>:
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
            <div class="rpa-bullet">- <i>z</i>: distance entre les centres de gravité des armatures des deux extrémités confinées.</div>
        </div>
    </div>

    <div id="rpa-art-7.7.5" style="scroll-margin-top: 100px;">
        <div class="rpa-h3" id="rpa-art-7.7.5-1" style="color: #d97706; margin-top: 40px;">7.7.5 Conditions de ductilité locale</div>
        <p style="text-align: justify;">
            Dans les voiles de section rectangulaire, le rapport mécanique en volume des armatures de confinement requises, <i>&omega;<sub>wd</sub></i>, dans les éléments de rive, doit respecter la condition ci-dessous :
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

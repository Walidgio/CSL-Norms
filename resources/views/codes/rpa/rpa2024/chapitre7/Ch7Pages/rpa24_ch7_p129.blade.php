{{-- ==================== PAGE 129 ==================== --}}
<section id="rpa-p129" class="rpa-page rpa-scroll-spy-section">
    <div class="rpa-header">
        <span>129</span>
        <span class="chapter">Chapter 7. STRUCTURES EN BETON ARME</span>
    </div>

    <p style="text-indent: 20px; text-align: justify;">
        Pour calculer la longueur comprimée des parties de rive, <i>l<sub>c,calcul</sub></i>, il est nécessaire de calculer le raccourcissement limite à la rupture, <i>&epsilon;<sub>cu,c</sub></i>, du béton comprimé:
    </p>

    <div class="rpa-equation-container" id="rpa-eqt-7.38">
        <div class="rpa-equation">
            <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
                <mrow>
                    <msub><mi>&epsilon;</mi><mtext>cu,c</mtext></msub>
                    <mo>=</mo>
                    <mn>0.0035</mn>
                    <mo>+</mo>
                    <mn>0.1</mn><mo>&sdot;</mo><mi>&alpha;</mi><mo>&sdot;</mo><msub><mi>&omega;</mi><mtext>wd</mtext></msub>
                </mrow>
            </math>
        </div>
        <div class="rpa-eq-num">(7.38)</div>
    </div>

    <div style="margin-top:10px;">
        soit donc :
    </div>

    <div class="rpa-equation-container" id="rpa-eqt-7.39">
        <div class="rpa-equation">
            <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
                <mrow>
                    <msub><mi>l</mi><mtext>c,calcul</mtext></msub>
                    <mo>=</mo>
                    <msub><mi>x</mi><mi>u</mi></msub>
                    <mo>&sdot;</mo>
                    <mrow>
                        <mo>(</mo>
                        <mn>1</mn>
                        <mo>&minus;</mo>
                        <mfrac>
                            <msub><mi>&epsilon;</mi><mtext>cu</mtext></msub>
                            <msub><mi>&epsilon;</mi><mtext>cu,c</mtext></msub>
                        </mfrac>
                        <mo>)</mo>
                    </mrow>
                </mrow>
            </math>
        </div>
        <div class="rpa-eq-num">(7.39)</div>
    </div>

    <div style="margin-top:10px;">
        avec : <math xmlns="http://www.w3.org/1998/Math/MathML"><mrow><msub><mi>&epsilon;</mi><mtext>cu</mtext></msub><mo>=</mo><mn>0.0035</mn></mrow></math>
    </div>

    <p style="text-indent: 20px; margin-top: 15px; text-align: justify;">
        Cette longueur <i>l<sub>c,calcul</sub></i> doit être supérieure à <i>max(0.15l<sub>w</sub> ; 1.5b<sub>w</sub>)</i>.
    </p>

    <div class="rpa-h3" id="rpa-art-7.7.4-sup" style="display: flex; align-items: center; justify-content: space-between; margin-top: 40px;">
        <span><span class="text-gray-900 dark:text-gray-100">Ferraillage de la zone supérieure</span></span>
    </div>
    <p style="text-align: justify;">
        La zone supérieure des voiles élancés peut être considérée comme une zone élastique devant résister aux sollicitations ; son dimensionnement peut être conduit selon les règles classiques de béton armé. Pour éviter toute plastification de cette zone, les sollicitations de calcul sont constituées par l'enveloppe des moments et/ou de l'effort tranchant amplifié. Les dispositions ci-dessous doivent être respectées :
    </p>
    <div class="rpa-indent">
        <div class="rpa-bullet">• les barres verticales principales d'extrémité doivent être stabilisées contre le phénomène de flambement ;</div>
        <div class="rpa-bullet">• Les barres horizontales doivent être munies de crochets à leurs extrémités.</div>
    </div>

    <div class="rpa-h3" id="rpa-art-7.7.4-courts" style="display: flex; align-items: center; justify-content: space-between; margin-top: 32px;">
        <span><span class="text-gray-900 dark:text-gray-100">Voiles courts</span></span>
    </div>
    <p style="text-align: justify;">
        Il s'agit du calcul classique de béton armé défini par la réglementation technique en vigueur. Pour ce type d'éléments, la rupture prédominante est due à l'effort tranchant; en effet, leurs ruptures, par l'effort tranchant, ne sont pas ductiles.
    </p>

    <div class="rpa-h3" id="rpa-art-7.7.4-communes" style="display: flex; align-items: center; justify-content: space-between; margin-top: 32px;">
        <span><span class="text-gray-900 dark:text-gray-100">Règles communes</span></span>
    </div>
    <p style="text-align: justify;">
        Les longueurs de recouvrement doivent être égales à :
    </p>
    <div class="rpa-indent">
        <div class="rpa-bullet">• 60<i>&phi;<sub>l</sub></i> pour les barres situées dans les zones IV, V et VI ;</div>
        <div class="rpa-bullet">• 50<i>&phi;<sub>l</sub></i> pour les barres situées dans les zones I, II et III.</div>
    </div>
    <p id="rpa-art-7.7.4-couture" style="text-align: justify; margin-top: 10px;">
        Le long des joints de reprise de coulage, l'effort tranchant doit être pris par les aciers de couture dont la section doit être calculée avec la formule :
    </p>

    <div class="rpa-equation-container" id="rpa-eqt-7.40">
        <div class="rpa-equation">
            <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
                <mrow>
                    <msub><mi>A</mi><mtext>vj</mtext></msub>
                    <mo>=</mo>
                    <mn>1.1</mn>
                    <mrow>
                        <mo>(</mo>
                        <mfrac>
                            <mover><mi>V</mi><mo>&mdash;</mo></mover>
                            <msub><mi>f</mi><mi>e</mi></msub>
                        </mfrac>
                        <mo>)</mo>
                    </mrow>
                </mrow>
            </math>
        </div>
        <div class="rpa-eq-num">(7.40)</div>
    </div>

    <div style="margin-top:10px;">
        avec : <math xmlns="http://www.w3.org/1998/Math/MathML"><mrow><mover><mi>V</mi><mo>&mdash;</mo></mover><mo>=</mo><mn>1.4</mn><msub><mi>V</mi><mi>u</mi></msub></mrow></math>
    </div>
    <p style="text-indent: 20px; text-align: justify; margin-top: 10px;">
        Seul est rajouté l'écart entre la section obtenue par <a href="#rpa-eqt-7.40" class="rpa-link">Eqn. (7.40)</a> et celle des barres existantes. Elle doit être constituée d'armatures de diamètre minimum de 10mm avec une longueur minimum d'ancrage de (50<i>&phi;<sub>l</sub></i>).
    </p>
</section>

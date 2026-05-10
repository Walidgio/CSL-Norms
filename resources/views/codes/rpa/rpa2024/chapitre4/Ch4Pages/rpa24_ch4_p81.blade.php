{{-- ==================== PAGE 81 ==================== --}}
<section id="rpa-p81" class="rpa-page rpa-scroll-spy-section" data-annotatable="true">
    <div class="rpa-header">
        <span>81</span>
        <span class="chapter">4.2 Méthode statique équivalente</span>
    </div>

    <div id="rpa-art-4.2.5" style="scroll-margin-top: 100px;">
        <h3 class="rpa-h3">4.2.5 Distribution de la force sismique (V)</h3>
        <p class="mb-6 text-justify">
            La force sismique totale, V, doit être distribuée sur la hauteur de la structure selon les formules (4.6), (4.7) et (4.8) :
        </p>

        <div class="rpa-equation-container" id="rpa-eqt-4.6">
            <div class="rpa-equation">
                <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
                    <mrow>
                        <mi>V</mi>
                        <mo>=</mo>
                        <msub><mi>F</mi><mi>t</mi></msub>
                        <mo>+</mo>
                        <munderover>
                            <mo>&sum;</mo>
                            <mrow>
                                <mi>i</mi>
                                <mo>=</mo>
                                <mn>1</mn>
                            </mrow>
                            <mi>n</mi>
                        </munderover>
                        <msub><mi>F</mi><mi>i</mi></msub>
                    </mrow>
                </math>
            </div>
            <div class="rpa-eq-num">(4.6)</div>
        </div>

        <p class="my-6">
            La force concentrée <i>F<sub>t</sub></i> au sommet de la structure permet de tenir compte de l'influence des modes supérieurs de vibration. Elle doit être déterminée par la formule :
        </p>

        <div class="rpa-equation-container" id="rpa-eqt-4.7">
            <div class="rpa-equation">
                <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
                    <mrow>
                        <msub><mi>F</mi><mi>t</mi></msub>
                        <mo>=</mo>
                        <mn>0.07</mn>
                        <mo>&sdot;</mo>
                        <mi>T</mi>
                        <mo>&sdot;</mo>
                        <mi>V</mi>
                    </mrow>
                </math>
            </div>
            <div class="rpa-eq-num">(4.7)</div>
        </div>

        <p class="my-6">
            où T est la période fondamentale de la structure (en secondes).<br>
            La valeur de <i>F<sub>t</sub></i> ne doit, en aucun cas, dépasser 0.25 V.<br>
            Si T &le; 0.7 s, la valeur de <i>F<sub>t</sub></i> peut être prise égale à zéro.
        </p>

        <p class="mb-6">
            La partie restante de l'effort horizontal total V, soit (V - <i>F<sub>t</sub></i>), doit être distribuée sur la hauteur de la structure entre les différents niveaux &laquo; i &raquo; selon la formule :
        </p>

        <div class="rpa-equation-container" id="rpa-eqt-4.8">
            <div class="rpa-equation">
                <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
                    <mrow>
                        <msub><mi>F</mi><mi>i</mi></msub>
                        <mo>=</mo>
                        <mfrac>
                            <mrow>
                                <mo>(</mo>
                                <mi>V</mi>
                                <mo>-</mo>
                                <msub><mi>F</mi><mi>t</mi></msub>
                                <mo>)</mo>
                                <mo>&sdot;</mo>
                                <msub><mi>W</mi><mi>i</mi></msub>
                                <mo>&sdot;</mo>
                                <msub><mi>h</mi><mi>i</mi></msub>
                            </mrow>
                            <mrow>
                                <munderover>
                                    <mo>&sum;</mo>
                                    <mrow>
                                        <mi>j</mi>
                                        <mo>=</mo>
                                        <mn>1</mn>
                                    </mrow>
                                    <mi>n</mi>
                                </munderover>
                                <msub><mi>W</mi><mi>j</mi></msub>
                                <mo>&sdot;</mo>
                                <msub><mi>h</mi><mi>j</mi></msub>
                            </mrow>
                        </mfrac>
                    </mrow>
                </math>
            </div>
            <div class="rpa-eq-num">(4.8)</div>
        </div>

        <p class="mt-6">où :</p>
        <div class="rpa-indent space-y-2">
            <p><i>F<sub>i</sub></i> : force horizontale agissant au niveau i ;</p>
            <p><i>W<sub>i</sub></i>, <i>W<sub>j</sub></i> : poids des niveaux i et j (cf. &sect; 4.2.3) ;</p>
            <p><i>h<sub>i</sub></i>, <i>h<sub>j</sub></i> : hauteurs des niveaux i et j à partir de la base du bâtiment.</p>
        </div>

        <div class="rpa-comment mt-8">
            <p class="italic text-gray-600">
                <b>Commentaire :</b> Les forces sismiques horizontales <i>F<sub>i</sub></i> ainsi obtenues sont réputées agir au centre de gravité de chaque niveau. Elles sont ensuite distribuées aux différents éléments verticaux de contreventement proportionnellement à leurs rigidités, en tenant compte de l'effet de la torsion.
            </p>
        </div>
    </div>
</section>

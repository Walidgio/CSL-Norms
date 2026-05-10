{{-- ==================== PAGE 57 ==================== --}}
<section id="rpa-p57" class="rpa-page rpa-scroll-spy-section" data-annotatable="true">
    <div class="rpa-header">
        <span>3.3 Actions sismiques</span>
        <span>57</span>
    </div>

    <p style="text-align: justify;">
        probabiliste de l'aléa, ont une magnitude moment (<i>M<sub>w</sub></i> ≤ 5.5), le type de spectre 2 est adopté. Les valeurs devant être attribuées à <i>T<sub>1</sub>, T<sub>2</sub>, T<sub>3</sub>, &alpha;</i> et (<i>A<sub>v</sub>/A</i>), pour chaque classe de sol et type (forme) de spectre, sont données dans les Tableaux (3.8) et (3.9). La Figure (3.6) montre les formes des spectres de Type 1 et de Type 2, pour les sols de classes <i>S<sub>1</sub></i> à <i>S<sub>4</sub></i> pour <i>&xi;</i> = 5%, normalisés par (<i>A<sub>v</sub></i>).
    </p>

    <div id="rpa-art-3.3.3" class="mt-8">
        <h3 class="rpa-h3">3.3.3 Spectre de calcul</h3>
        <p style="text-align: justify;">
            Pour éviter une analyse de structure non linéaire explicite lors des calculs, la capacité d'une structure à dissiper l'énergie induite par le séisme, essentiellement par son comportement ductile, est prise en compte en effectuant une analyse élastique basée sur un spectre de réponse réduit par rapport à celui élastique, appelé spectre de calcul. Cette réduction est réalisée par l'introduction d'un facteur de réduction des forces élastiques, dénommé coefficient de comportement de la structure, R, ainsi que d'un facteur de pondération dénommé facteur de qualité, <i>Q<sub>F</sub></i>.
        </p>
        <p class="mt-4">L'action sismique horizontale est représentée par le spectre de calcul suivant :</p>

        <div class="rpa-equation-container" id="rpa-eqt-3.15">
            <div class="rpa-equation flex items-center justify-center">
                <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
                    <mrow>
                        <mfrac>
                            <msub><mi>S</mi><mrow><mi>a</mi><mi>d</mi></mrow></msub>
                            <mi>g</mi>
                        </mfrac>
                        <mo>(</mo><mi>T</mi><mo>)</mo>
                        <mo>=</mo>
                        <mo>{</mo>
                        <mtable columnalign="left">
                            <mtr>
                                <mtd>
                                    <mi>A</mi><mo>&sdot;</mo><mi>I</mi><mo>&sdot;</mo><mi>S</mi><mo>&sdot;</mo>
                                    <mo>[</mo>
                                    <mfrac><mn>2</mn><mn>3</mn></mfrac><mo>+</mo><mfrac><mi>T</mi><msub><mi>T</mi><mn>1</mn></msub></mfrac>
                                    <mo>&sdot;</mo>
                                    <mo>(</mo><mn>2.5</mn><mfrac><msub><mi>Q</mi><mi>F</mi></msub><mi>R</mi></mfrac><mo>&minus;</mo><mfrac><mn>2</mn><mn>3</mn></mfrac><mo>)</mo>
                                    <mo>]</mo>
                                </mtd>
                                <mtd>
                                    <mtext>si </mtext><mn>0</mn><mo>&le;</mo><mi>T</mi><mo>&lt;</mo><msub><mi>T</mi><mn>1</mn></msub>
                                </mtd>
                            </mtr>
                            <mtr>
                                <mtd>
                                    <mi>A</mi><mo>&sdot;</mo><mi>I</mi><mo>&sdot;</mo><mi>S</mi><mo>&sdot;</mo><mo>[</mo><mn>2.5</mn><mfrac><msub><mi>Q</mi><mi>F</mi></msub><mi>R</mi></mfrac><mo>]</mo>
                                </mtd>
                                <mtd>
                                    <mtext>si </mtext><msub><mi>T</mi><mn>1</mn></msub><mo>&le;</mo><mi>T</mi><mo>&lt;</mo><msub><mi>T</mi><mn>2</mn></msub>
                                </mtd>
                            </mtr>
                            <mtr>
                                <mtd>
                                    <mi>A</mi><mo>&sdot;</mo><mi>I</mi><mo>&sdot;</mo><mi>S</mi><mo>&sdot;</mo><mo>[</mo><mn>2.5</mn><mfrac><msub><mi>Q</mi><mi>F</mi></msub><mi>R</mi></mfrac><mo>]</mo><mo>&sdot;</mo>
                                    <mo>[</mo><mfrac><msub><mi>T</mi><mn>2</mn></msub><mi>T</mi></mfrac><mo>]</mo>
                                </mtd>
                                <mtd>
                                    <mtext>si </mtext><msub><mi>T</mi><mn>2</mn></msub><mo>&le;</mo><mi>T</mi><mo>&lt;</mo><msub><mi>T</mi><mn>3</mn></msub>
                                </mtd>
                            </mtr>
                            <mtr>
                                <mtd>
                                    <mi>A</mi><mo>&sdot;</mo><mi>I</mi><mo>&sdot;</mo><mi>S</mi><mo>&sdot;</mo><mo>[</mo><mn>2.5</mn><mfrac><msub><mi>Q</mi><mi>F</mi></msub><mi>R</mi></mfrac><mo>]</mo><mo>&sdot;</mo>
                                    <mo>[</mo><mfrac><mrow><msub><mi>T</mi><mn>2</mn></msub><mo>&sdot;</mo><msub><mi>T</mi><mn>3</mn></msub></mrow><msup><mi>T</mi><mn>2</mn></msup></mfrac><mo>]</mo>
                                </mtd>
                                <mtd>
                                    <mtext>si </mtext><msub><mi>T</mi><mn>3</mn></msub><mo>&le;</mo><mi>T</mi><mo>&lt;</mo><mn>4</mn><mi>s</mi>
                                </mtd>
                            </mtr>
                        </mtable>
                    </mrow>
                </math>
            </div>
            <div class="rpa-eq-num">(3.15)</div>
        </div>

        <div class="mt-4">
            où:
            <div class="rpa-indent space-y-1">
                <div class="rpa-bullet">• <i>S<sub>ad</sub>(T)</i> : spectre de calcul normalisé par rapport à la valeur de l'accélération de la pesanteur, <b>g</b>;</div>
                <div class="rpa-bullet">• <b>R</b> : coefficient de comportement de la structure (cf. § 3.6, Tableau (3.18)) ;</div>
                <div class="rpa-bullet">• <b><i>Q<sub>F</sub></i></b> : facteur de qualité (cf. § 3.8).</div>
            </div>
        </div>

        <p class="mt-4 font-bold italic">Nota: Ces valeurs du spectre de calcul ne doivent, en aucun cas, être inférieures à (0.2A.I).</p>

        <p class="mt-6" style="text-align: justify;">
            Pour la composante verticale de l'action sismique, le spectre de calcul est donné par Eqn. (3.16), avec l'accélération de calcul du sol dans la direction verticale, <i>A<sub>v</sub></i>, S étant pris égal à 1.0, R étant pris égal à 1.5 pour tout système de contreventement, <i>Q<sub>F</sub></i> étant pris égal à 1.0, et les autres paramètres tels que définis en § 3.3.2.
        </p>

        <div class="rpa-equation-container" id="rpa-eqt-3.16">
            <div class="rpa-equation flex items-center justify-center">
                <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
                    <mrow>
                        <mfrac>
                            <msub><mi>S</mi><mrow><mi>v</mi><mi>d</mi></mrow></msub>
                            <mi>g</mi>
                        </mfrac>
                        <mo>(</mo><mi>T</mi><mo>)</mo>
                        <mo>=</mo>
                        <mo>{</mo>
                        <mtable columnalign="left">
                            <mtr>
                                <mtd>
                                    <msub><mi>A</mi><mi>v</mi></msub><mo>&sdot;</mo><mi>I</mi><mo>&sdot;</mo>
                                    <mo>[</mo>
                                    <mfrac><mn>2</mn><mn>3</mn></mfrac><mo>+</mo><mfrac><mi>T</mi><msub><mi>T</mi><mn>1</mn></msub></mfrac>
                                    <mo>&sdot;</mo>
                                    <mo>(</mo><mfrac><mn>2.5</mn><mi>R</mi></mfrac><mo>&minus;</mo><mfrac><mn>2</mn><mn>3</mn></mfrac><mo>)</mo>
                                    <mo>]</mo>
                                </mtd>
                                <mtd>
                                    <mtext>si </mtext><mn>0</mn><mo>&le;</mo><mi>T</mi><mo>&lt;</mo><msub><mi>T</mi><mn>1</mn></msub>
                                </mtd>
                            </mtr>
                            <mtr>
                                <mtd>
                                    <msub><mi>A</mi><mi>v</mi></msub><mo>&sdot;</mo><mi>I</mi><mo>&sdot;</mo><mo>[</mo><mfrac><mn>2.5</mn><mi>R</mi></mfrac><mo>]</mo>
                                </mtd>
                                <mtd>
                                    <mtext>si </mtext><msub><mi>T</mi><mn>1</mn></msub><mo>&le;</mo><mi>T</mi><mo>&lt;</mo><msub><mi>T</mi><mn>2</mn></msub>
                                </mtd>
                            </mtr>
                            <mtr>
                                <mtd>
                                    <msub><mi>A</mi><mi>v</mi></msub><mo>&sdot;</mo><mi>I</mi><mo>&sdot;</mo><mo>[</mo><mfrac><mn>2.5</mn><mi>R</mi></mfrac><mo>]</mo><mo>&sdot;</mo>
                                    <msup><mrow><mo>[</mo><mo>(</mo><mfrac><msub><mi>T</mi><mn>2</mn></msub><mi>T</mi></mfrac><mo>)</mo><mo>]</mo></mrow><mi>&alpha;</mi></msup>
                                </mtd>
                                <mtd>
                                    <mtext>si </mtext><msub><mi>T</mi><mn>2</mn></msub><mo>&le;</mo><mi>T</mi><mo>&lt;</mo><msub><mi>T</mi><mn>3</mn></msub>
                                </mtd>
                            </mtr>
                            <mtr>
                                <mtd>
                                    <msub><mi>A</mi><mi>v</mi></msub><mo>&sdot;</mo><mi>I</mi><mo>&sdot;</mo><mo>[</mo><mfrac><mn>2.5</mn><mi>R</mi></mfrac><mo>]</mo><mo>&sdot;</mo>
                                    <msup><mrow><mo>[</mo><mo>(</mo><mfrac><mrow><msub><mi>T</mi><mn>2</mn></msub><mo>&sdot;</mo><msub><mi>T</mi><mn>3</mn></msub></mrow><msup><mi>T</mi><mn>2</mn></msup></mfrac><mo>)</mo><mo>]</mo></mrow><mi>&alpha;</mi></msup>
                                </mtd>
                                <mtd>
                                    <mtext>si </mtext><msub><mi>T</mi><mn>3</mn></msub><mo>&le;</mo><mi>T</mi><mo>&lt;</mo><mn>4</mn><mi>s</mi>
                                </mtd>
                            </mtr>
                        </mtable>
                    </mrow>
                </math>
            </div>
            <div class="rpa-eq-num">(3.16)</div>
        </div>

        <p class="mt-4 font-bold italic">Nota: Ces valeurs du spectre de calcul ne doivent, en aucun cas, être inférieures à (0.2A<sub>v</sub>.I).</p>
    </div>
</section>

<section id="rpa-p116" class="rpa-page rpa-scroll-spy-section">
    <div class="rpa-header">
        <span class="chapter">Chapter 7. STRUCTURES EN BETON ARME</span>
        <span>116</span>
    </div>

    <div class="rpa-h3" id="rpa-art-7.6.2" style="color: #d97706;">7.6.2 Dimensionnement du nœud vis-à-vis des moments fléchissants</div>

    <p style="text-align: justify;">
        Dans les bâtiments à plusieurs étages, la formation d'un mécanisme plastique sur un seul niveau doit être évitée, dans la mesure où un tel mécanisme pourrait induire des demandes de ductilité locale excessives, dans les poteaux du niveau concerné.
    </p>
    <p style="text-align: justify; text-indent: 20px;">
        Pour respecter cette exigence dans les bâtiments à ossatures, y compris les systèmes équivalents à des ossatures (systèmes de contreventement (1), (2) et (3)) avec au moins deux niveaux, la somme des moments résistants ultimes, des extrémités de poteaux ou montants aboutissant au nœud, est au moins égale, en valeur absolue, à la somme des valeurs absolues, des moments résistants ultimes des extrémités des poutres ou traverses, majorée d'un coefficient de 1.30 (cf. <a href="#rpa-eqt-7.8" class="rpa-link">Eqn. (7.8)</a>). Cette condition est satisfaite à tous les nœuds de poutres primaires ou secondaires avec des poteaux (cf. <a href="#rpa-fig-7.6" class="rpa-link">Figure (7.6)</a>).
    </p>
    <p style="text-align: justify; text-indent: 20px;">
        Il y a lieu de noter que cette exigence ne s'applique pas au dernier niveau de bâtiments à plusieurs étages.
    </p>

    <div class="rpa-equation-container" id="rpa-eqt-7.8">
        <div class="rpa-equation">
            <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
                <mrow>
                    <mo>{</mo>
                    <mtable columnalign="left" rowspacing="10px">
                        <mtr>
                            <mtd>
                                <mrow>
                                    <mo>|</mo>
                                    <msub><mi>M</mi><mrow><mi>R</mi><mi>c</mi><mi>n</mi></mrow></msub>
                                    <mo>|</mo>
                                    <mo>+</mo>
                                    <mo>|</mo>
                                    <msub><mi>M</mi><mrow><mi>R</mi><mi>c</mi><mi>s</mi></mrow></msub>
                                    <mo>|</mo>
                                    <mo>&ge;</mo>
                                    <mi>&Omega;</mi>
                                    <mo>(</mo>
                                    <mo>|</mo>
                                    <msub><mi>M</mi><mrow><mi>R</mi><mi>b</mi><mi>w</mi></mrow></msub>
                                    <mo>|</mo>
                                    <mo>+</mo>
                                    <mo>|</mo>
                                    <msub><mi>M</mi><mrow><mi>R</mi><mi>b</mi><mi>e</mi></mrow></msub>
                                    <mo>|</mo>
                                    <mo>)</mo>
                                </mrow>
                            </mtd>
                        </mtr>
                        <mtr>
                            <mtd>
                                <mrow>
                                    <mo>|</mo>
                                    <msubsup><mi>M</mi><mrow><mi>R</mi><mi>c</mi><mi>n</mi></mrow><mo>'</mo></msubsup>
                                    <mo>|</mo>
                                    <mo>+</mo>
                                    <mo>|</mo>
                                    <msubsup><mi>M</mi><mrow><mi>R</mi><mi>c</mi><mi>s</mi></mrow><mo>'</mo></msubsup>
                                    <mo>|</mo>
                                    <mo>&ge;</mo>
                                    <mi>&Omega;</mi>
                                    <mo>(</mo>
                                    <mo>|</mo>
                                    <msubsup><mi>M</mi><mrow><mi>R</mi><mi>b</mi><mi>w</mi></mrow><mo>'</mo></msubsup>
                                    <mo>|</mo>
                                    <mo>+</mo>
                                    <mo>|</mo>
                                    <msubsup><mi>M</mi><mrow><mi>R</mi><mi>b</mi><mi>e</mi></mrow><mo>'</mo></msubsup>
                                    <mo>|</mo>
                                    <mo>)</mo>
                                </mrow>
                            </mtd>
                        </mtr>
                    </mtable>
                </mrow>
            </math>
        </div>
        <div class="rpa-eq-num">(7.8)</div>
    </div>

    <p style="text-align: justify; margin-top: 15px;">
        avec:
    </p>

    <div class="rpa-equation-container mb-8" style="justify-content: flex-start; padding-left: 40px;">
        <div class="rpa-equation text-left">
            <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
                <mrow>
                    <mi>&Omega;</mi>
                    <mo>=</mo>
                    <mo>{</mo>
                    <mtable columnalign="left" rowspacing="5px">
                        <mtr>
                            <mtd>
                                <mn>1.1</mn>
                                <mtext>&nbsp;: en zones sismiques I, II et III</mtext>
                            </mtd>
                        </mtr>
                        <mtr>
                            <mtd>
                                <mn>1.3</mn>
                                <mtext>&nbsp;: en zones sismiques IV, V et VI</mtext>
                            </mtd>
                        </mtr>
                    </mtable>
                </mrow>
            </math>
        </div>
    </div>

    <!-- Figure 7.6 SVG -->
    <div class="my-8 flex flex-col items-center" id="rpa-fig-7.6-container">
        @include('norms::codes.rpa.rpa2024.chapitre7.Ch7Svg.rpa24_ch7_fig7_6')
    </div>

    <p class="text-center italic mb-8 mt-6" id="rpa-fig-7.6">
        Figure 7.6: Dimensionnement d'un nœud poutre-poteau
    </p>

</section>

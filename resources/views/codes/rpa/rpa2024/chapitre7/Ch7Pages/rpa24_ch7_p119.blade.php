<section id="rpa-p119" class="rpa-page rpa-scroll-spy-section">
    @include('norms::codes.rpa.rpa2024.partials.rpa-page-header', ['page' => 119, 'meta' => 'norms::codes.rpa.rpa2024.partials.ch7-running-meta'])

    <div class="rpa-comment my-6">
        <p><i>Commentaire : La limitation, exprimée par <a href="#rpa-eqt-7.11" class="rpa-link">Eqn. (7.11)</a>, a pour objectif, à défaut d'empêcher la rupture d'une section critique d'un voile (généralement soumis à une flexion composée), de la retarder ou, au cas où elle se produit, de faire en sorte qu'elle se manifeste, le plus souvent sous forme de rupture ductile, c'est-à-dire par rupture des aciers tendus (suite à leur allongement dans le palier plastique), préalablement à l'atteinte de la résistance ultime du béton comprimé. La disposition d'armatures transversales rapprochées, dans la zone critique concernée qu'elles confinent, contribue également à l'atteinte de cet objectif.</i></p>
    </div>

    <div class="rpa-h2-black" id="rpa-art-7.7.2-cis">Contraintes limites de cisaillement dans les linteaux et les trumeaux</div>
    
    <p style="text-align: justify;">
        En addition aux spécifications du <a href="#rpa-art-7.3" class="rpa-link">§ 7.3</a>, la contrainte de cisaillement dans le béton est limitée selon Eqns.<a href="#rpa-eqt-7.12" class="rpa-link">(7.12)</a> & <a href="#rpa-eqt-7.13" class="rpa-link">(7.13)</a> :
    </p>

    <div class="rpa-equation-container" id="rpa-eqt-7.12">
        <div class="rpa-equation">
            <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
                <mrow>
                    <msub><mi>&tau;</mi><mi>b</mi></msub>
                    <mo>&le;</mo>
                    <mn>0.2</mn>
                    <msub><mi>f</mi><mrow><mi>c</mi><mn>28</mn></mrow></msub>
                </mrow>
            </math>
        </div>
        <div class="rpa-eq-num">(7.12)</div>
    </div>

    <p style="text-align: justify; margin-top: 15px;">
        où:
    </p>

    <div class="rpa-equation-container" id="rpa-eqt-7.13">
        <div class="rpa-equation">
            <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
                <mrow>
                    <msub><mi>&tau;</mi><mi>b</mi></msub>
                    <mo>=</mo>
                    <mfrac>
                        <mover><mi>V</mi><mo>&mdash;</mo></mover>
                        <mrow>
                            <msub><mi>b</mi><mi>w</mi></msub>
                            <mo>&sdot;</mo>
                            <mi>d</mi>
                        </mrow>
                    </mfrac>
                </mrow>
            </math>
        </div>
        <div class="rpa-eq-num">(7.13)</div>
    </div>

    <p style="text-align: justify; margin-top: 15px;">
        avec:
    </p>
    <div class="rpa-indent">
        <div class="rpa-bullet">• <math xmlns="http://www.w3.org/1998/Math/MathML"><mrow><mover><mi>V</mi><mo>&mdash;</mo></mover><mo>=</mo><mn>1.4</mn><msub><mi>V</mi><mi>u</mi></msub></mrow></math></div>
        <div class="rpa-bullet">• <i>b<sub>w</sub></i> : épaisseur du linteau ou du voile</div>
        <div class="rpa-bullet">• <i>d</i> : hauteur utile avec <i>d = 0.9h</i></div>
        <div class="rpa-bullet">• <i>h</i> : hauteur totale de la section brute</div>
    </div>

    <div id="rpa-art-7.7.3" style="scroll-margin-top: 100px;">
        <h3 class="rpa-h3" id="rpa-art-7.7.3" style="margin-top: 40px;">
            7.7.3 Ferraillages des linteaux
        </h3>
        <p><b>Premier cas :</b> <math xmlns="http://www.w3.org/1998/Math/MathML"><mrow><msub><mi>&tau;</mi><mi>b</mi></msub><mo>&le;</mo><mo>(</mo><mn>0.06</mn><msub><mi>f</mi><mrow><mi>c</mi><mn>28</mn></mrow></msub><mo>)</mo></mrow></math></p>
        
        <p style="text-align: justify;">
            Les linteaux sont calculés en flexion simple, avec les efforts M et V.
        </p>
        <div class="rpa-indent">
            <div class="rpa-bullet">On devra disposer :</div>
            <div class="rpa-bullet">• des aciers longitudinaux de flexion (<i>A<sub>l</sub></i>)</div>
            <div class="rpa-bullet">• des aciers transversaux (<i>A<sub>t</sub></i>)</div>
            <div class="rpa-bullet">• des aciers en partie courante (aciers de peau) (<i>A<sub>c</sub></i>)</div>
        </div>

        <p class="mt-4"><b>a) Aciers longitudinaux :</b></p>
        <p style="text-align: justify; text-indent: 20px;">
            Les aciers longitudinaux inférieurs et supérieurs sont calculés par <a href="#rpa-eqt-7.14" class="rpa-link">Eqn. (7.14)</a>:
        </p>

        <div class="rpa-equation-container" id="rpa-eqt-7.14">
            <div class="rpa-equation">
                <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
                    <mrow>
                        <msub><mi>A</mi><mi>l</mi></msub>
                        <mo>&ge;</mo>
                        <mfrac>
                            <mi>M</mi>
                            <mrow>
                                <mi>z</mi>
                                <mo>&sdot;</mo>
                                <msub><mi>f</mi><mi>e</mi></msub>
                            </mrow>
                        </mfrac>
                    </mrow>
                </math>
            </div>
            <div class="rpa-eq-num">(7.14)</div>
        </div>

        <p style="text-align: justify; margin-top: 15px;">
            avec : <i>z = h &minus; 2d'</i>
        </p>
        <p style="text-align: justify;">
            où:
        </p>
        <div class="rpa-indent">
            <div class="rpa-bullet">• <i>h</i> : hauteur totale de la section du linteau</div>
            <div class="rpa-bullet">• <i>d'</i> : distance d'enrobage</div>
            <div class="rpa-bullet">• <i>M</i> : moment dû à l'effort tranchant (<math xmlns="http://www.w3.org/1998/Math/MathML"><mover><mi>V</mi><mo>&mdash;</mo></mover></math>) avec <math xmlns="http://www.w3.org/1998/Math/MathML"><mrow><mover><mi>V</mi><mo>&mdash;</mo></mover><mo>=</mo><mn>1.4</mn><msub><mi>V</mi><mi>u</mi></msub></mrow></math></div>
        </div>

        <p class="mt-4"><b>b) Aciers transversaux :</b></p>
        <div class="rpa-indent">
            <div class="rpa-bullet">(a) Premier sous- cas : linteaux longs (<math xmlns="http://www.w3.org/1998/Math/MathML"><mrow><mo>[</mo><msub><mi>&lambda;</mi><mi>g</mi></msub><mo>=</mo><mfrac><mi>l</mi><mi>h</mi></mfrac><mo>]</mo><mo>&gt;</mo><mn>1</mn></mrow></math>)</div>
            <div class="rpa-bullet">On doit vérifier :</div>
        </div>

        <div class="rpa-equation-container" id="rpa-eqt-7.15">
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
                                <mi>z</mi>
                            </mrow>
                            <mover><mi>V</mi><mo>&mdash;</mo></mover>
                        </mfrac>
                    </mrow>
                </math>
            </div>
            <div class="rpa-eq-num">(7.15)</div>
        </div>
    </div>
</section>

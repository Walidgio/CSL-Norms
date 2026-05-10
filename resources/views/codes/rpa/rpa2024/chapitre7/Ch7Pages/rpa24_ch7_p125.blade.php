{{-- ==================== PAGE 125 ==================== --}}
<section id="rpa-p125" class="rpa-page rpa-scroll-spy-section">
    <div class="rpa-header">
        <span>125</span>
        <span class="chapter">Chapter 7. STRUCTURES EN BETON ARME</span>
    </div>

    <h2 class="rpa-h2" id="rpa-art-7.7.4-rive" style="margin-top: 25px;">Ferraillage des éléments de rive</h2>
    <p style="text-align: justify;">
        Le béton situé aux extrémités des voiles (élément de rive) est confiné sur une longueur, l<sub>c</sub>, mesurée à partir du bord du voile jusqu’au point correspondant à une déformation critique du béton prise égale à <math xmlns="http://www.w3.org/1998/Math/MathML"><mrow><msub><mi>&epsilon;</mi><mtext>cu</mtext></msub><mo>=</mo><mn>0,35</mn><mo>%</mo></mrow></math> (cf. <a href="#rpa-fig-7.16" class="rpa-link">Figure (7.16)</a>).
    </p>

    <!-- Figure 7.16 -->
    <div class="rpa-figure-container mt-6" id="rpa-fig-7.16-container">
        @include('norms::codes.rpa.rpa2024.chapitre7.Ch7Svg.rpa24_ch7_fig7_16')
        <div class="rpa-figure-title" id="rpa-fig-7.16">Figure 7.16: Eléments de rive pour les voiles</div>
    </div>

    <p class="mt-6">La longueur, l<sub>c</sub>, de l’élément de rive doit respecter la condition :</p>

    <div class="rpa-equation-container" id="rpa-eqt-7.24">
        <div class="rpa-equation">
            <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
                <mrow>
                    <msub><mi>l</mi><mi>c</mi></msub>
                    <mo>&ge;</mo>
                    <mo>max</mo>
                    <mo>(</mo>
                    <mn>0,15</mn><msub><mi>l</mi><mi>w</mi></msub>
                    <mo>:</mo>
                    <mn>1,5</mn><msub><mi>b</mi><mi>w</mi></msub>
                    <mo>)</mo>
                </mrow>
            </math>
        </div>
        <div class="rpa-eq-num">(7.24)</div>
    </div>

    <div class="mt-4">
        avec :
        <div class="rpa-indent">
            <div class="rpa-bullet">• l<sub>w</sub> : longueur du voile</div>
            <div class="rpa-bullet">• b<sub>w</sub> : largeur de l’âme du voile</div>
        </div>
    </div>

    <p class="mt-6" style="text-align: justify;">
        L’épaisseur, b<sub>c</sub>, des parties confinées de la section du voile (élément de rive) ne doit pas être inférieure à 200 mm. De plus, si la longueur de la partie confinée ne dépasse pas la valeur maximale max(2b<sub>w</sub> ; 0.2l<sub>w</sub>), il convient que b<sub>c</sub> ne soit pas inférieure à h<sub>e</sub>/15, h<sub>e</sub> étant la hauteur d’étage. Si la longueur de la partie confinée excède la valeur maximale max(2b<sub>w</sub> ; 0.2l<sub>w</sub>), il convient alors que b<sub>c</sub> ne soit pas inférieure à h<sub>e</sub>/10 (cf <a href="#rpa-fig-7.17" class="rpa-link">Figure (7.17)</a>).
    </p>

    <!-- Figure 7.17 -->
    <div class="rpa-figure-container mt-6" id="rpa-fig-7.17-container">
        @include('norms::codes.rpa.rpa2024.chapitre7.Ch7Svg.rpa24_ch7_fig7_17')
        <div class="rpa-figure-title" id="rpa-fig-7.17">Figure 7.17: Epaisseur minimale des éléments de rive confinés</div>
    </div>

    <p class="mt-6" style="text-align: justify;">
        L’élément de rive peut comprendre des membrures orthogonales aux voiles. Dans ce cas, si le voile est relié à une membrure raidisseuse d’une épaisseur (b<sub>f</sub> &ge; h<sub>e</sub>/15) et d’une longueur ...
    </p>
</section>


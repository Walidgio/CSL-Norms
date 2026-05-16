{{-- ==================== PAGE 82 ==================== --}}
<section id="rpa-p82" class="rpa-page rpa-scroll-spy-section" data-annotatable="true">
    @include('norms::codes.rpa.rpa2024.partials.rpa-page-header', ['page' => 82, 'meta' => 'norms::codes.rpa.rpa2024.partials.ch4-running-meta'])

    <div id="rpa-art-4.2.6" style="scroll-margin-top: 100px;">
        <h3 class="rpa-h3">4.2.6 Effets de la torsion</h3>
        <p class="text-justify mb-4">
            Pour tenir compte des incertitudes dans la distribution des masses et des rigidités ainsi que l'influence de la composante rotationnelle du mouvement du sol, il doit être considéré dans le calcul, en plus de l'excentricité théorique (distance entre le centre de gravité et le centre de rigidité), une excentricité accidentelle <i>e<sub>a</sub></i>, agissant dans chaque direction de calcul, prise égale à :
        </p>

        <div class="rpa-equation-container" id="rpa-eqt-4.9">
            <div class="rpa-equation">
                <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
                    <mrow>
                        <msub><mi>e</mi><mrow><mi>a</mi></mrow></msub>
                        <mo>=</mo>
                        <mo>&plusmn;</mo>
                        <mn>0.05</mn>
                        <mo>&sdot;</mo>
                        <mi>L</mi>
                    </mrow>
                </math>
            </div>
            <div class="rpa-eq-num">(4.9)</div>
        </div>

        <p class="mt-4">où <i>L</i> est la dimension du bâtiment perpendiculaire à la direction de calcul considérée.</p>
    </div>

    <div id="rpa-art-4.3" class="mt-12" style="scroll-margin-top: 100px;">
        <h2 class="rpa-h2">4.3 Méthode d'analyse modale spectrale</h2>
        
        <div id="rpa-art-4.3.1" style="scroll-margin-top: 100px;">
            <h3 class="rpa-h3">4.3.1 Principe</h3>
            <p class="text-justify mb-4">
                Par cette méthode, il est recherché, pour chaque direction de vibration, le maximum des effets engendrés dans la structure par l'action sismique, représentée par un spectre de réponse de calcul (ordonnée normalisée en accélération) défini au &sect; 3.3.3.
            </p>
        </div>

        <div id="rpa-art-4.3.2" style="scroll-margin-top: 100px;">
            <h3 class="rpa-h3">4.3.2 Modélisation</h3>
            <div class="rpa-indent space-y-4">
                <p><b>a)</b> Pour les structures dont les planchers peuvent être considérés comme indéformables dans leur plan (diaphragmes), le modèle du bâtiment peut être représenté par des masses concentrées aux centres de gravité des planchers. Chaque plancher possède alors trois (03) degrés de liberté (deux translations horizontales et une rotation d'axe vertical).</p>
                <p><b>b)</b> Pour les structures dont les planchers ne peuvent pas être considérés comme indéformables dans leur plan (structures sans diaphragme), il y a lieu de prendre en compte, dans le modèle, les degrés de liberté en translation de chaque noeud de la structure.</p>
                <p><b>c)</b> La force sismique est réputée agir au centre de gravité de chaque niveau. Dans le cas où le modèle inclut la rotation des planchers, l'excentricité accidentelle <i>e<sub>a</sub></i> définie au &sect; 4.2.6 doit être prise en compte dans le calcul.</p>
                <p><b>d)</b> Les masses à retenir doivent inclure les charges permanentes et une fraction des charges d'exploitation, conformément aux dispositions du &sect; 4.2.3.</p>
            </div>
        </div>

        <div id="rpa-art-4.3.3" style="scroll-margin-top: 100px;">
            <h3 class="rpa-h3">4.3.3 Nombre de modes à retenir</h3>
            <div class="rpa-indent space-y-4">
                <p><b>a)</b> Pour chaque direction d'excitation, le nombre de modes à retenir doit être tel que la somme des masses modales effectives soit au moins égale à 90% de la masse totale de la structure.</p>
                <p><b>b)</b> Si la condition ci-dessus n'est pas satisfaite, tous les modes dont la masse modale effective est supérieure à 5% de la masse totale doivent être retenus.</p>
                <p><b>c)</b> Le nombre minimum de modes à retenir est fixé à trois (03) pour chaque direction d'excitation.</p>
            </div>
        </div>
    </div>
</section>

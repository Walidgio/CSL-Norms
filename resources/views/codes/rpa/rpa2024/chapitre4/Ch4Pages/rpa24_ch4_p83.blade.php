{{-- ==================== PAGE 83 ==================== --}}
<section id="rpa-p83" class="rpa-page rpa-scroll-spy-section" data-annotatable="true">
    @include('norms::codes.rpa.rpa2024.partials.rpa-page-header', ['page' => 83, 'meta' => 'norms::codes.rpa.rpa2024.partials.ch4-running-meta'])

    <div id="rpa-art-4.3.4" style="scroll-margin-top: 100px;">
        <h3 class="rpa-h3">4.3.4 Combinaison des réponses modales</h3>
        <p class="text-justify mb-4">
            Pour chaque direction d'excitation, les réponses modales maximales (efforts, déplacements, etc.) doivent être combinées de la manière suivante :
        </p>
        <div class="rpa-indent space-y-4">
            <p><b>a)</b> Si deux modes successifs (i) et (j) ont des périodes <i>T<sub>i</sub></i> et <i>T<sub>j</sub></i> telles que <i>T<sub>j</sub> / T<sub>i</sub> &le; 0.9</i>, la réponse combinée R est donnée par la racine carrée de la somme des carrés des réponses modales (méthode SRSS) :</p>
            <div class="rpa-equation-container">
                <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
                    <mrow>
                        <mi>R</mi>
                        <mo>=</mo>
                        <msqrt>
                            <mrow>
                                <mo>&sum;</mo>
                                <msubsup><mi>R</mi><mi>i</mi><mn>2</mn></msubsup>
                            </mrow>
                        </msqrt>
                    </mrow>
                </math>
            </div>
            <p><b>b)</b> Si la condition ci-dessus n'est pas satisfaite, il y a lieu d'utiliser une méthode de combinaison quadratique complète (méthode CQC).</p>
            <p><b>c)</b> Les réponses totales dues aux excitations dans les deux directions horizontales orthogonales doivent être combinées de manière appropriée (généralement SRSS).</p>
        </div>
    </div>

    <div id="rpa-art-4.3.5" class="mt-8" style="scroll-margin-top: 100px;">
        <h3 class="rpa-h3">4.3.5 Effet de la torsion accidentelle</h3>
        <p class="text-justify mb-4">
            Dans le cas où le modèle ne prend pas en compte explicitement l'excentricité accidentelle <i>e<sub>a</sub></i> définie au &sect; 4.2.6, il y a lieu de majorer les effets de la torsion par des méthodes simplifiées appropriées.
        </p>
    </div>

    <div id="rpa-art-4.3.6" class="mt-8" style="scroll-margin-top: 100px;">
        <h3 class="rpa-h3">4.3.6 Vérification de l'effort tranchant à la base</h3>
        <p class="text-justify mb-4">
            L'effort tranchant à la base <i>V<sub>analytique</sub></i> obtenu par la méthode d'analyse modale spectrale ne doit pas être inférieur à 80% de l'effort tranchant à la base <i>V<sub>statique</sub></i> calculé par la méthode statique équivalente, soit :
        </p>

        <div class="rpa-equation-container" id="rpa-eqt-4.10">
            <div class="rpa-equation">
                <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
                    <mrow>
                        <msub><mi>V</mi><mrow><mi>a</mi><mi>n</mi><mi>a</mi><mi>l</mi><mi>y</mi><mi>t</mi><mi>i</mi><mi>q</mi><mi>u</mi><mi>e</mi></mrow></msub>
                        <mo>&ge;</mo>
                        <mn>0.8</mn>
                        <mo>&sdot;</mo>
                        <msub><mi>V</mi><mrow><mi>s</mi><mi>t</mi><mi>a</mi><mi>t</mi><mi>i</mi><mi>q</mi><mi>u</mi><mi>e</mi></mrow></msub>
                    </mrow>
                </math>
            </div>
            <div class="rpa-eq-num">(4.10)</div>
        </div>

        <p class="mt-4">
            Si <i>V<sub>analytique</sub> < 0.8 V<sub>statique</sub></i>, il y a lieu d'augmenter tous les paramètres de la réponse (efforts, déplacements, etc.) obtenus par la méthode modale spectrale par le rapport <i>0.8 V<sub>statique</sub> / V<sub>analytique</sub></i>.
        </p>
    </div>

    <div id="rpa-art-4.4" class="mt-12" style="scroll-margin-top: 100px;">
        <h2 class="rpa-h2">4.4 Méthode d'analyse dynamique par accélérogrammes</h2>
        
        <div id="rpa-art-4.4.1" style="scroll-margin-top: 100px;">
            <h3 class="rpa-h3">4.4.1 Principe</h3>
            <p class="text-justify mb-4">
                Cette méthode consiste à intégrer directement les équations du mouvement de la structure soumise à des accélérogrammes représentatifs du mouvement du sol. Elle permet de prendre en compte les non-linéarités géométriques et de comportement des matériaux.
            </p>
        </div>

        <div id="rpa-art-4.4.2" style="scroll-margin-top: 100px;">
            <h3 class="rpa-h3">4.4.2 Séismes de calcul</h3>
            <p class="text-justify mb-4">
                Le mouvement du sol doit être représenté par au moins trois (03) jeux d'accélérogrammes (chaque jeu comprenant deux composantes horizontales orthogonales). Ces accélérogrammes peuvent être des enregistrements réels, des signaux synthétiques ou des signaux simulés, conformément aux dispositions du &sect; 3.3.4.
            </p>
        </div>
    </div>
</section>

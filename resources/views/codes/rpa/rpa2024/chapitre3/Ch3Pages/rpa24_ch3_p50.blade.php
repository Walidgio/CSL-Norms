{{-- ==================== PAGE 50 ==================== --}}
<section id="rpa-p50" class="rpa-page rpa-scroll-spy-section" data-annotatable="true">
    <div class="rpa-header-meta flex flex-wrap items-start justify-between gap-2 text-sm mb-6 border-b border-black/90 dark:border-slate-500 pb-2">
        <span class="tabular-nums font-semibold text-slate-700 dark:text-slate-300">50</span>
        <div class="text-right max-w-[min(100%,28rem)] space-y-0.5">
        @include('norms::codes.rpa.rpa2024.chapitre3.partials.ch3-running-meta')
    </div>
    </div>

    <div class="mt-8">
        {{-- Eq 3.6 --}}
        <div class="rpa-equation-container" id="rpa-eqt-3.6">
            <div class="rpa-equation">
                <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
                    <mrow>
                        <msub><mi>P</mi><mrow><mi>l</mi><mn>30</mn></mrow></msub>
                        <mo>=</mo>
                        <mfrac>
                            <mn>30</mn>
                            <mrow>
                                <munderover>
                                    <mo>&sum;</mo>
                                    <mrow><mi>i</mi><mo>=</mo><mn>1</mn></mrow>
                                    <mi>n</mi>
                                </munderover>
                                <mfrac>
                                    <msub><mi>h</mi><mi>i</mi></msub>
                                    <msub><mi>P</mi><mrow><mi>l</mi><mi>i</mi></mrow></msub>
                                </mfrac>
                            </mrow>
                        </mfrac>
                    </mrow>
                </math>
            </div>
            <div class="rpa-eq-num">(3.6)</div>
        </div>

        {{-- Eq 3.7 --}}
        <div id="rpa-art-3.2-h" class="mt-6">
            <p class="font-bold mb-2">(h) Vitesse des ondes de cisaillement :</p>
            <div class="rpa-equation-container" id="rpa-eqt-3.7">
                <div class="rpa-equation">
                    <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
                        <mrow>
                            <msub><mi>V</mi><mrow><mi>s</mi><mo>,</mo><mn>30</mn></mrow></msub>
                            <mo>=</mo>
                            <mfrac>
                                <mn>30</mn>
                                <mrow>
                                    <munderover>
                                        <mo>&sum;</mo>
                                        <mrow><mi>i</mi><mo>=</mo><mn>1</mn></mrow>
                                        <mi>n</mi>
                                    </munderover>
                                    <mfrac>
                                        <msub><mi>h</mi><mi>i</mi></msub>
                                        <msub><mi>V</mi><mrow><mi>s</mi><mi>i</mi></mrow></msub>
                                    </mfrac>
                                </mrow>
                            </mfrac>
                        </mrow>
                    </math>
                </div>
                <div class="rpa-eq-num">(3.7)</div>
            </div>
        </div>

        <p class="mt-6">avec :</p>
        <ul class="rpa-list-none ml-8 space-y-1">
            <li><i>h<sub>i</sub></i> : épaisseur de la couche <i>i</i></li>
            <li><i>q<sub>ci</sub></i> : résistance de pointe moyenne à travers la couche <i>i</i></li>
            <li><i>N<sub>i</sub></i> : nombre de coups moyen non corrigé enregistré à travers la couche <i>i</i></li>
            <li><i>C<sub>ui</sub></i> : résistance au cisaillement non drainée de la couche <i>i</i></li>
            <li><i>R<sub>ci</sub></i> : Résistance à la compression simple dans la couche <i>i</i></li>
            <li><i>E<sub>pi</sub></i> : module pressiométrique moyen à travers la couche <i>i</i></li>
            <li><i>P<sub>li</sub></i> : pression limite moyenne à travers la couche <i>i</i></li>
            <li><i>V<sub>si</sub></i> : vitesse de l'onde de cisaillement dans la couche <i>i</i></li>
        </ul>

        <div id="rpa-art-3.2.2" class="mt-10" style="scroll-margin-top: 100px;">
            <h3 class="rpa-h3">3.2.2 Conditions de site : investigations approfondies et études spécifiques</h3>
            <p class="text-justify mb-4">
                Les conditions de site qui nécessitent des investigations approfondies sont les suivantes :
            </p>
            <ul class="rpa-list-disc ml-8 space-y-2">
                <li>présence de sols instables sous les actions sismiques tels que sols liquéfiables, sols faiblement cimentés, anciens remblais ;</li>
                <li>présence de sols vaseux ou d'argile avec une très forte teneur en matière organique sur une épaisseur de plus de 3 m ;</li>
                <li>présence d'argile très plastique (indice de plasticité <span class="italic">I<sub>p</sub></span> &ge; 75) sur une épaisseur de plus de 7.5 m ;</li>
                <li>présence sur une épaisseur de plus de 37 m d'une couche d'argile molle à moyennement raide (<span class="italic">q<sub>c</sub></span> = 1.5 à 5 MPa, <span class="italic">Pl</span> = 0.5 à 2 MPa, <span class="italic">E<sub>p</sub></span> = 5 à 25 MPa, <span class="italic">C<sub>u</sub></span> &le; 50 kPa, <span class="italic">R<sub>c</sub></span> = 0.1 à 0.4 MPa).</li>
            </ul>
        </div>

        <div id="rpa-art-3.2.3" class="mt-10" style="scroll-margin-top: 100px;">
            <h3 class="rpa-h3">3.2.3 Etapes pour classer un site</h3>
            <p class="text-justify mb-4">
                Les étapes nécessaires pour classer un site consistent à :
            </p>
            <ol class="rpa-list-decimal ml-8 space-y-4">
                <li>
                    <span class="italic">Vérifier les quatre conditions nécessitant des investigations approfondies.</span> Si le site répond à l'une de ces conditions, il y a lieu de faire une étude spécifique du site pour la définition de l'action sismique. (Site S<sub>s</sub>) ;
                </li>
                <li>
                    <span class="italic">Vérifier l'existence d'épaisseur totale d'argile molle supérieure à 3m.</span> Si ce critère est satisfait, classer le site en S<sub>4</sub> ;
                </li>
                <li>
                    <span class="italic">Classer le site en utilisant les valeurs moyennes harmoniques des V<sub>s</sub> ou les résultats d'essais géotechniques</span> (pénétromètre statique, SPT, C<sub>u</sub>, pressiomètre, cisaillement non drainé et résistance à la compression simple) tels que définis dans le <a href="#rpa-table-3.2" class="rpa-inline-link">Tableau (3.2)</a>. Les classes de site sont fondamentalement définies en fonction de V<sub>s,30</sub> ou tout autre résultat d'essais géotechnique, de la surface du sol à une profondeur de 30 m du profil du site.
                </li>
            </ol>
        </div>

        <div id="rpa-art-3.3" class="mt-12" style="scroll-margin-top: 100px;">
            <h2 class="rpa-h2" style="color: #c05621;">3.3 Actions sismiques</h2>
            <p class="text-justify mb-4 leading-relaxed">
                Le territoire national est divisé en sept (07) zones sismiques. Chaque zone est associée à un coefficient d'accélération moyen, servant de valeur de référence au niveau d'un sol de classe S<sub>1</sub>, pour une période de retour, <span class="italic">T<sub>r</sub></span> = 475 ans, appelé coefficient d'accélération de référence de zone, A (cf. <a href="#rpa-table-3.3" class="rpa-inline-link">Tableau (3.3)</a>).
            </p>
        </div>
    </div>
</section>

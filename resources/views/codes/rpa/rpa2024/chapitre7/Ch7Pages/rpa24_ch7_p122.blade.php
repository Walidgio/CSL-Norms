{{-- ==================== PAGE 122 ==================== --}}
<section id="rpa-p122" class="rpa-page rpa-scroll-spy-section" data-annotatable="true">
    <div class="rpa-header-meta flex flex-wrap items-start justify-between gap-2 text-sm mb-6 border-b border-black/90 dark:border-slate-500 pb-2">
        <span class="tabular-nums font-semibold text-slate-700 dark:text-slate-300">122</span>
        <div class="text-right max-w-[min(100%,28rem)] space-y-0.5">
            @include('norms::codes.rpa.rpa2024.partials.ch7-running-meta')
        </div>
    </div>
<!-- Synth&egrave;se &mdash; armatures de linteaux -->
    <div class="rpa-spec-card my-8" id="rpa-ch7-lintel-summary" style="scroll-margin-top: 100px;">
        <div class="rpa-spec-card__head">Armatures de linteaux — synthèse</div>
        <div class="rpa-spec-card__body">
            <div class="rpa-spec-card__row">
                <span class="rpa-spec-card__key">Longitudinaux</span>
                <div><math xmlns="http://www.w3.org/1998/Math/MathML"><mrow><msub><mi>A</mi><mi>l</mi></msub><mo>,</mo><msub><mi>A'</mi><mi>l</mi></msub><mo>&ge;</mo><mn>0,0015</mn><msub><mi>b</mi><mi>w</mi></msub><mi>h</mi></mrow></math></div>
            </div>
            <div class="rpa-spec-card__row">
                <span class="rpa-spec-card__key">Confinement</span>
                <div><math xmlns="http://www.w3.org/1998/Math/MathML"><mrow><msub><mi>A</mi><mi>c</mi></msub><mo>&ge;</mo><mn>0,0020</mn><msub><mi>b</mi><mi>w</mi></msub><mi>h</mi></mrow></math></div>
            </div>
            <div class="rpa-spec-card__row">
                <span class="rpa-spec-card__key"><i>A<sub>D</sub></i></span>
                <div class="space-y-1">
                    <p><math xmlns="http://www.w3.org/1998/Math/MathML"><mrow><mo>&ge;</mo><mn>0,0015</mn><msub><mi>b</mi><mi>w</mi></msub><mi>h</mi></mrow></math> si <math xmlns="http://www.w3.org/1998/Math/MathML"><mrow><msub><mi>&tau;</mi><mi>b</mi></msub><mo>&gt;</mo><mn>0,06</mn><msub><mi>f</mi><mrow><mi>c</mi><mn>28</mn></mrow></msub></mrow></math></p>
                    <p><math xmlns="http://www.w3.org/1998/Math/MathML"><mrow><mo>=</mo><mn>0</mn></mrow></math> si <math xmlns="http://www.w3.org/1998/Math/MathML"><mrow><msub><mi>&tau;</mi><mi>b</mi></msub><mo>&le;</mo><mn>0,06</mn><msub><mi>f</mi><mrow><mi>c</mi><mn>28</mn></mrow></msub></mrow></math></p>
                </div>
            </div>
            <div class="rpa-spec-card__row">
                <span class="rpa-spec-card__key"><i>A<sub>t</sub></i></span>
                <div class="space-y-1">
                    <p><math xmlns="http://www.w3.org/1998/Math/MathML"><mrow><mo>&ge;</mo><mn>0,0015</mn><msub><mi>b</mi><mi>w</mi></msub><mi>s</mi></mrow></math> si <math xmlns="http://www.w3.org/1998/Math/MathML"><mrow><msub><mi>&tau;</mi><mi>b</mi></msub><mo>&le;</mo><mn>0,025</mn><msub><mi>f</mi><mrow><mi>c</mi><mn>28</mn></mrow></msub></mrow></math></p>
                    <p><math xmlns="http://www.w3.org/1998/Math/MathML"><mrow><mo>&ge;</mo><mn>0,0025</mn><msub><mi>b</mi><mi>w</mi></msub><mi>s</mi></mrow></math> si <math xmlns="http://www.w3.org/1998/Math/MathML"><mrow><msub><mi>&tau;</mi><mi>b</mi></msub><mo>&gt;</mo><mn>0,025</mn><msub><mi>f</mi><mrow><mi>c</mi><mn>28</mn></mrow></msub></mrow></math></p>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-8">
        <p><b>Ferraillage minimal (cf. <a href="#rpa-fig-7.12" class="rpa-link">Figure (7.12)</a>)</b></p>
        <div class="rpa-indent">
            <p><b>a) Aciers longitudinaux :</b></p>
            <div class="rpa-equation-container" id="rpa-eqt-7.19">
                <div class="rpa-equation">
                    <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
                        <mrow>
                            <mo>(</mo><msub><mi>A</mi><mi>l</mi></msub><mo>,</mo><msub><mi>A'</mi><mi>l</mi></msub><mo>)</mo>
                            <mo>&ge;</mo>
                            <mn>0.0025</mn><msub><mi>b</mi><mi>w</mi></msub><mo>&sdot;</mo><mi>h</mi>
                        </mrow>
                    </math>
                </div>
                <div class="rpa-eq-num">(7.19)</div>
            </div>

            <p class="mt-4"><b>b) Armatures transversales :</b></p>
            <ul class="list-disc ml-6">
                <li>pour <math xmlns="http://www.w3.org/1998/Math/MathML"><mrow><msub><mi>&tau;</mi><mi>b</mi></msub><mo>&le;</mo><mn>0.025</mn><msub><mi>f</mi><mrow><mi>c</mi><mn>28</mn></mrow></msub></mrow></math> :</li>
            </ul>
            <div class="rpa-equation-container" id="rpa-eqt-7.20">
                <div class="rpa-equation">
                    <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
                        <mrow>
                            <msub><mi>A</mi><mi>t</mi></msub>
                            <mo>&ge;</mo>
                            <mn>0.0015</mn><msub><mi>b</mi><mi>w</mi></msub><mo>&sdot;</mo><mi>s</mi>
                        </mrow>
                    </math>
                </div>
                <div class="rpa-eq-num">(7.20)</div>
            </div>
            
            <ul class="list-disc ml-6 mt-4">
                <li>pour <math xmlns="http://www.w3.org/1998/Math/MathML"><mrow><msub><mi>&tau;</mi><mi>b</mi></msub><mo>&gt;</mo><mn>0.025</mn><msub><mi>f</mi><mrow><mi>c</mi><mn>28</mn></mrow></msub></mrow></math> :</li>
            </ul>
            <div class="rpa-equation-container" id="rpa-eqt-7.21">
                <div class="rpa-equation">
                    <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
                        <mrow>
                            <msub><mi>A</mi><mi>t</mi></msub>
                            <mo>&ge;</mo>
                            <mn>0.0025</mn><msub><mi>b</mi><mi>w</mi></msub><mo>&sdot;</mo><mi>s</mi>
                        </mrow>
                    </math>
                </div>
                <div class="rpa-eq-num">(7.21)</div>
            </div>

            <p class="mt-4"><b>c) Armatures en section courante (armatures de peau):</b> Les armatures longitudinales intermédiaires ou de peau <i>A<sub>c</sub></i> (2 nappes) doivent être au total d'un minimum égal à 0.20%.</p>
        </div>
    </div>

    <div id="rpa-art-7.7.4" style="scroll-margin-top: 100px;">
        <h3 class="rpa-h3">7.7.4 Ferraillages des voiles et des trumeaux</h3>
        <p><b>Dispositions générales</b></p>
        <p style="text-align: justify;">
            Les trumeaux et les voiles seront calculés en flexion composée avec effort tranchant. L'effort normal de compression de calcul est limité par la prescription de l'<a href="#rpa-eqt-7.11" class="rpa-link">Eqn. (7.11)</a>.
        </p>
        <p style="text-align: justify;">
            Moyennant la satisfaction des conditions de dimensionnement fixées au <a href="#rpa-art-7.7.1" class="rpa-link">§ 7.7.1</a>, le calcul des voiles et des trumeaux se fera exclusivement dans la direction de leur plan moyen en appliquant les règles de béton armé en vigueur; en outre :
        </p>
        <div class="rpa-indent">
            <div class="rpa-bullet">• Les voiles élancés correspondent à ((h<sub>w</sub>/l<sub>w</sub>) > 2.0) : le diagramme de moment fléchissant de calcul, en fonction de la hauteur, est donné par une enveloppe linéaire, du diagramme du moment fléchissant obtenu par le calcul de structure, déplacée verticalement (décalage de traction) d'une distance égale à la hauteur (h<sub>cr</sub>) de la zone critique du voile (cf. <a href="#rpa-fig-7.13" class="rpa-link">Figure (7.13)</a>).</div>
            <div class="rpa-bullet">• Les voiles courts correspondent à ((h<sub>w</sub>/l<sub>w</sub>) â‰¤ 2.0).</div>
            <div class="rpa-bullet">• <span class="rpa-highlight">Les voiles de grandes dimensions correspondent</span> à ((h<sub>w</sub>/l<sub>w</sub>) â‰¤ 2/3) (cf. <a href="#rpa-annexe-d" class="rpa-link">Annexe D</a>).</div>
        </div>

        <div class="rpa-comment my-6">
            <p><i>Commentaire (1): Les voiles courts et les voiles de grandes dimensions, il n'est pas nécessaire de modifier les moments fléchissants, résultant du calcul de structure.</i></p>
        </div>

        <div class="rpa-comment my-6">
            <p><i>Commentaire (2): L'enveloppe de calcul, du diagramme de moment fléchissant, est construite en deux étapes :</i></p>
        </div>
    </div>
</section>

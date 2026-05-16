<section id="rpa-p118" class="rpa-page rpa-scroll-spy-section">
    @include('norms::codes.rpa.rpa2024.partials.rpa-page-header', ['page' => 118, 'meta' => 'norms::codes.rpa.rpa2024.partials.ch7-running-meta'])

    <!-- Figure 7.8 SVG -->
    <div class="rpa-figure-container my-8" id="rpa-fig-7.8-container">
        @include('norms::codes.rpa.rpa2024.chapitre7.Ch7Svg.rpa24_ch7_fig7_8')
        <div class="rpa-figure-title" id="rpa-fig-7.8">Figure 7.8: &Eacute;paisseur minimum en fonction des différentes configurations</div>
    </div>

    <!-- Figure 7.9 SVG -->
    <div class="rpa-figure-container my-8" id="rpa-fig-7.9-container">
        @include('norms::codes.rpa.rpa2024.chapitre7.Ch7Svg.rpa24_ch7_fig7_9')
        <div class="rpa-figure-title" id="rpa-fig-7.9">Figure 7.9: Prise en compte des voiles de retour</div>
    </div>

    <div class="rpa-comment my-6">
        <p><i>Commentaire : Les dispositions des coffrages, énoncées au <a href="#rpa-art-7.7.1" class="rpa-link">§ 7.7.1</a>, permettent d'éviter les vérifications de stabilité au voilement (flambement latéral) des voiles de contreventement.</i></p>
        <p><i>Il convient d'éviter les ouvertures non organisées, disposées de manière irrégulière dans les voiles, à moins que leur influence ne soit négligeable ou prise en compte dans l'analyse, le dimensionnement et les dispositions constructives.</i></p>
    </div>

    <div id="rpa-art-7.7.2" style="scroll-margin-top: 100px;">
        <h3 class="rpa-h3" style="display: flex; align-items: center; justify-content: space-between;">
            <span>7.7.2 <span class="text-gray-900 dark:text-gray-100">Vérifications spécifiques</span></span><!-- delete explanation: Fav buttons moved to TOC panel only -->
        </h3>
        <div class="rpa-h2-black" id="rpa-art-7.7.2-normal">Sollicitations normales</div>

        <p style="text-align: justify;">
            Outre les vérifications prescrites par le C.B.A et dans le but d'éviter ou limiter le risque de rupture fragile (en flexion composée), sous sollicitations d'ensemble dues au séisme, l'effort normal de compression de calcul des voiles est limité par la condition suivante :
        </p>

        <div class="rpa-equation-container" id="rpa-eqt-7.11">
            <div class="rpa-equation">
                <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
                    <mrow>
                        <mo>(</mo>
                        <msub><mi>&nu;</mi><mi>d</mi></msub>
                        <mo>=</mo>
                        <mfrac>
                            <msub><mi>N</mi><mi>d</mi></msub>
                            <mrow>
                                <msub><mi>B</mi><mi>c</mi></msub>
                                <mo>&sdot;</mo>
                                <msub><mi>f</mi><mrow><mi>c</mi><mn>28</mn></mrow></msub>
                            </mrow>
                        </mfrac>
                        <mo>)</mo>
                        <mo>&le;</mo>
                        <mn>0.40</mn>
                    </mrow>
                </math>
            </div>
            <div class="rpa-eq-num">(7.11)</div>
        </div>

        <p style="text-align: justify; margin-top: 15px;">
            Ces limites sont à respecter dans les vérifications sous combinaisons sismiques réglementaires. Les symboles ont les mêmes significations qu'au <a href="#rpa-art-7.1.3" class="rpa-link">§ 7.1.3</a>.
        </p>
    </div>
</section>


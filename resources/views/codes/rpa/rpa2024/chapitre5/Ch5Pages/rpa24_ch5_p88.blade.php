{{-- Chapitre 5 — combinaisons (suite) ; repère imprimé env. p. 88 --}}
<section id="rpa-p88" class="rpa-page rpa-scroll-spy-section" data-annotatable="true">
    @include('norms::codes.rpa.rpa2024.partials.rpa-page-header', ['page' => 88, 'meta' => 'norms::codes.rpa.rpa2024.partials.ch5-running-meta'])

    <p class="text-justify mb-4 leading-relaxed">Les effets <i>E<sub>1</sub></i> et <i>E<sub>2</sub></i> sont définis par :</p>

    <div class="rpa-equation-container" id="rpa-eqt-5.2">
        <div class="rpa-equation">
            <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
                <mrow>
                    <mo>{</mo>
                    <mtable columnalign="left">
                        <mtr>
                            <mtd>
                                <msub><mi>E</mi><mn>1</mn></msub>
                                <mo>=</mo>
                                <mo>&plusmn;</mo>
                                <msub><mi>E</mi><mi>x</mi></msub>
                                <mo>&plusmn;</mo>
                                <mn>0.3</mn>
                                <msub><mi>E</mi><mi>y</mi></msub>
                            </mtd>
                        </mtr>
                        <mtr>
                            <mtd>
                                <msub><mi>E</mi><mn>2</mn></msub>
                                <mo>=</mo>
                                <mo>&plusmn;</mo>
                                <mn>0.3</mn>
                                <msub><mi>E</mi><mi>x</mi></msub>
                                <mo>&plusmn;</mo>
                                <msub><mi>E</mi><mi>y</mi></msub>
                            </mtd>
                        </mtr>
                    </mtable>
                </mrow>
            </math>
        </div>
        <div class="rpa-eq-num">(5.2)</div>
    </div>

    <aside class="rpa-comment-box mt-8 border-l-4 border-amber-200 bg-amber-50/40 dark:bg-amber-950/20 pl-4 py-3 pr-2 rounded-r-lg" aria-label="Commentaire réglementaire">
        <p class="font-bold italic mb-2">Commentaire</p>
        <ul class="list-disc ml-5 text-sm space-y-2 italic leading-relaxed">
            <li>La réponse de la structure, à chaque composante horizontale, doit être évaluée séparément en utilisant les règles de combinaison des réponses modales indiquées au <a href="#rpa-art-4.3.4" class="rpa-inline-link">paragraphe 4.3.4</a>.</li>
            <li>Les effets dus à la combinaison des composantes horizontales de l'action sismique doivent être calculés en utilisant les deux combinaisons de l'<a href="#rpa-eqt-5.2" class="rpa-inline-link">équation (5.2)</a>.</li>
            <li>Dans les combinaisons <a href="#rpa-eqt-5.1" class="rpa-inline-link">(5.1)</a> et <a href="#rpa-eqt-5.2" class="rpa-inline-link">(5.2)</a>, le signe adopté pour chaque composante doit être le plus défavorable pour l'effet particulier considéré.</li>
            <li>Lorsqu'une analyse chronologique non linéaire est utilisée, avec un modèle spatial de la structure, des accélérogrammes agissant simultanément doivent être pris pour agir dans les deux directions.</li>
            <li>Pour les bâtiments qui respectent les critères de régularité en plan et pour lesquels des voiles ou des systèmes triangulés indépendants, dans les deux directions principales, sont les seuls éléments de contreventement, il peut être supposé que l'action sismique agit indépendamment et sans avoir à considérer les combinaisons suivant les deux axes principaux horizontaux (orthogonaux) de la structure.</li>
        </ul>
    </aside>

    <section id="rpa-art-5.2.2" class="mt-10" style="scroll-margin-top: 100px;" aria-labelledby="rpa-ch5-h-5-2-2">
        <h3 id="rpa-ch5-h-5-2-2" class="rpa-h3">5.2.2 Composante verticale de l'action sismique</h3>
        <p class="text-justify mb-4 leading-relaxed">
            Les effets de la composante verticale de l'action sismique, définie au <a href="#rpa-art-3.3.2" class="rpa-inline-link">paragraphe 3.3.2</a>, doivent être pris en compte si la valeur du produit (<i>A<sub>v</sub></i>.<i>I</i>.<i>g</i>) est supérieure à (0.25<i>g</i>), dans les cas suivants :
        </p>
        <ul class="list-disc ml-8 mb-6 space-y-2">
            <li>Éléments de structure horizontaux ou presque horizontaux de 15 m de portée ou plus ;</li>
            <li>Éléments horizontaux ou presque horizontaux en console de plus de 2,00 m de long ;</li>
            <li>Éléments précontraints horizontaux ou presque horizontaux ;</li>
            <li>Poutres supportant des poteaux ;</li>
            <li>Structures sur appuis parasismiques.</li>
        </ul>

        <div class="rpa-table-showcase my-6" id="rpa-table-5.1" style="scroll-margin-top: 100px;">
            <p class="rpa-table-showcase__kicker">Composante verticale — <i>S<sub>T</sub></i> = 1</p>
            <div class="rpa-table-showcase__surface overflow-x-auto">
            <table class="rpa-table min-w-[320px]">
                <thead>
                    <tr>
                        <th rowspan="2" scope="col">Zonage sismique</th>
                        <th rowspan="2" scope="col"><i>A</i>.<i>I</i> (horizontal)</th>
                        <th colspan="4" scope="colgroup"><i>A<sub>v</sub></i>.<i>I</i> (vertical) — catégorie d'importance</th>
                    </tr>
                    <tr>
                        <th scope="col">1A</th>
                        <th scope="col">1B</th>
                        <th scope="col">2</th>
                        <th scope="col">3</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <tr><th scope="row">I</th><td>0,07 <i>I</i></td><td>0,054</td><td>0,046</td><td>0,039</td><td>0,031</td></tr>
                    <tr><th scope="row">II</th><td>0,10 <i>I</i></td><td>0,077</td><td>0,066</td><td>0,055</td><td>0,044</td></tr>
                    <tr><th scope="row">III</th><td>0,15 <i>I</i></td><td>0,116</td><td>0,099</td><td>0,083</td><td>0,066</td></tr>
                    <tr><th scope="row">IV</th><td>0,20 <i>I</i></td><td>0,252</td><td>0,216</td><td>0,180</td><td>0,144</td></tr>
                    <tr><th scope="row">V</th><td>0,25 <i>I</i></td><td>0,315</td><td>0,270</td><td>0,225</td><td>0,180</td></tr>
                    <tr><th scope="row">VI</th><td>0,30 <i>I</i></td><td>0,378</td><td>0,324</td><td>0,270</td><td>0,216</td></tr>
                </tbody>
            </table>
            </div>
            <p class="rpa-table-showcase__caption">Tableau 5.1 — Coefficients d'accélération verticale (sans effet topographique). L'action verticale <i>A<sub>v</sub></i> est obligatoire lorsque (<i>A<sub>v</sub></i>.<i>I</i>.<i>g</i>) dépasse 0,25 <i>g</i>.</p>
        </div>

        <p class="mt-8 text-justify leading-relaxed">Dans le cas de la composante verticale, les combinaisons d'actions suivantes doivent être utilisées (voir les <a href="#rpa-eqt-5.3" class="rpa-inline-link">équations (5.3)</a> et <a href="#rpa-eqt-5.4" class="rpa-inline-link">(5.4)</a>) :</p>
    </section>
</section>

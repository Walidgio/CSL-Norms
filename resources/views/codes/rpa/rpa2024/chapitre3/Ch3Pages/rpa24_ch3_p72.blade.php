{{-- ==================== PAGE 72 ==================== --}}
<section id="rpa-p72" class="rpa-page rpa-scroll-spy-section" data-annotatable="true">
    <div class="rpa-header-meta flex flex-wrap items-start justify-between gap-2 text-sm mb-6 border-b border-black/90 dark:border-slate-500 pb-2">
        <span class="tabular-nums font-semibold text-slate-700 dark:text-slate-300">72</span>
        <div class="text-right max-w-[min(100%,28rem)] space-y-0.5">
        @include('norms::codes.rpa.rpa2024.chapitre3.partials.ch3-running-meta')
    </div>
    </div>

    <div class="mt-4">
        <h3 class="font-bold text-lg" id="rpa-art-3.8">3.8 Facteur de qualité</h3>
        <p style="text-align: justify;" class="mt-2">
            Le facteur de qualité, <i>Q<sub>F</sub></i>, tient compte de :
        </p>
        <div class="rpa-indent mt-2 space-y-1">
            <div class="rpa-bullet">• la redondance et de la géométrie des éléments qui constituent la structure ;</div>
            <div class="rpa-bullet">• la régularité en plan et en élévation.</div>
        </div>

        <p style="text-align: justify;" class="mt-4">
            La valeur de <i>Q<sub>F</sub></i> est déterminée par :
        </p>

        <div class="rpa-equation-container" id="rpa-eqt-3.26">
            <div class="rpa-equation">
                <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
                    <mrow>
                        <msub><mi>Q</mi><mi>F</mi></msub>
                        <mo>=</mo>
                        <mn>1</mn>
                        <mo>+</mo>
                        <munderover>
                            <mo>&sum;</mo>
                            <mrow><mi>q</mi><mo>=</mo><mn>1</mn></mrow>
                            <mrow><mi>q</mi><mo>=</mo><mi>i</mi></mrow>
                        </munderover>
                        <msub><mi>P</mi><mi>q</mi></msub>
                    </mrow>
                </math>
            </div>
            <div class="rpa-eq-num">(3.26)</div>
        </div>

        <div class="mt-4">
            où:
            <div class="rpa-indent mt-2 space-y-2">
                <div class="rpa-bullet">• <i>P<sub>q</sub></i> est la pondération à retenir selon que le critère de qualité q "est satisfait ou non". Sa valeur est donnée au cas par cas dans le <a href="#rpa-table-3.19" class="rpa-inline-link">Tableau (3.19)</a> ;</div>
                <div class="rpa-bullet">• i est le nombre total de pondérations dépendant de la catégorie concernée.</div>
            </div>
        </div>

        <p style="text-align: justify;" class="mt-4">
            Les critères de qualité "q" à vérifier sont :
        </p>
        <div class="rpa-indent mt-2 space-y-4">
            <div>
                <p class="font-bold">• Pondérations de la catégorie (a)</p>
                <div class="rpa-indent mt-2 space-y-2">
                    <div class="rpa-bullet">1. Régularité en plan La structure est classée régulière en plan selon les critères (cf. § 3.7.1a).</div>
                    <div class="rpa-bullet">2. Régularité en élévation La structure est classée régulière en élévation selon les critères (cf. § 3.7.1b).</div>
                    <div class="rpa-bullet">3. Conditions minimales sur le nombre de niveaux<br>La structure doit comporter au minimum deux niveaux.</div>
                    <div class="rpa-bullet">4. Conditions minimales sur les travées<br>La structure doit présenter, à chaque niveau et selon chacune des deux directions horizontales, au minimum trois (03) travées.</div>
                </div>
            </div>

            <div>
                <p class="font-bold">• Pondérations de la catégorie (b)</p>
                <div class="rpa-indent mt-2 space-y-2">
                    <div class="rpa-bullet">1. Régularité en plan<br>La structure est classée régulière en plan selon les critères (cf. § 3.7.1a).</div>
                    <div class="rpa-bullet">2. Régularité en élévation<br>La structure est classée régulière en élévation selon les critères (cf. § 3.7.1b).</div>
                    <div class="rpa-bullet">3. Redondance en plan<br>Chaque étage devra avoir, en plan, au moins deux (02) files de voiles dans la direction des forces latérales. Cette condition concerne uniquement les deux systèmes de contreventements (4) et (5), (cf. § 3.5).</div>
                </div>
            </div>

            <div>
                <p class="font-bold">• Catégories de pondérations (c)</p>
                <p class="rpa-indent">Le facteur de qualité, <i>Q<sub>F</sub></i>, doit être pris égal à 1.</p>
            </div>
        </div>

        <div class="mt-8 italic text-sm text-gray-700" style="text-align: justify;">
            <p>
                Commentaire : Il est reconnu que les irrégularités, en plan et en élévation, créent des torsions spatiales ou d'axe vertical ainsi que des concentrations de contraintes en certains points singuliers. De même, le manque de redondance des files porteuses diminue, de manière significative, le niveau de ductilité globale de la structure.
            </p>
            <p class="mt-2">
                Le facteur de qualité, <i>Q<sub>F</sub></i>, module la valeur du coefficient de comportement, R, en fonction de la ductilité du système de contreventement que contrôlent en grande partie les régularités en plan et en élévation, d'une part, et les redondances des résistances (hyperstaticité) dans les deux directions horizontales, d'autre part. De ce fait, le coefficient de comportement réel est (<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mi>R</mi><msub><mi>Q</mi><mi>F</mi></msub></mfrac></math>).
            </p>
        </div>
    </div>
</section>

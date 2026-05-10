{{-- ==================== PAGE 88 ==================== --}}
<section id="rpa-p88" class="rpa-page rpa-scroll-spy-section" data-annotatable="true">
    <div class="rpa-header">
        <span>88</span>
        <span class="chapter">Chapter 5. JUSTIFICATION DE LA SECURITE</span>
    </div>

    <ul class="rpa-list-disc ml-8 mb-4">
        <li>&psi; : Coefficient d'accompagnement, fonction de la nature et de la durée de la charge d'exploitation et donné par le Tableau (4.2).</li>
    </ul>
    <p class="italic mb-2">et:</p>

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

    <div class="rpa-comment-box mt-6">
        <p class="font-bold italic">Commentaire :</p>
        <ul class="rpa-list-disc ml-6 text-sm space-y-2 italic">
            <li>La réponse de la structure, à chaque composante horizontale, doit être évaluée séparément en utilisant les règles de combinaison des réponses modales indiquées au &sect; 4.3.4.</li>
            <li>Les effets, dus à la combinaison des composantes horizontales de l'action sismique, doivent être calculés en utilisant les deux combinaisons, cf. Eqn. (5.2).</li>
            <li>Dans les combinaisons, Eqns. (5.1) & (5.2), le signe adopté pour chaque composante doit être le plus défavorable pour l'effet particulier considéré.</li>
            <li>Lorsqu'une analyse chronologique non linéaire est utilisée, avec un modèle spatial de la structure, des accélérogrammes, agissant simultanément, doivent être pris pour agir dans les deux directions.</li>
            <li>Pour les bâtiments qui respectent les critères de régularité en plan et pour lesquels des voiles ou des systèmes triangulés indépendants, dans les deux directions principales, sont les seuls éléments de contreventement, il peut être supposé que l'action sismique agit indépendamment et sans avoir à considérer les combinaisons suivant les deux axes principaux horizontaux (orthogonaux) de la structure.</li>
        </ul>
    </div>

    <div id="rpa-art-5.2.2" class="mt-8" style="scroll-margin-top: 100px;">
        <h3 class="rpa-h3" style="color: #c05621;">5.2.2 Composante verticale de l'action sismique</h3>
        <p class="text-justify mb-4">
            Les effets de la composante verticale de l'action sismique, définie au &sect; 3.3.2, doivent être pris en compte, si la valeur du produit (A<sub>v</sub>.I.g) est supérieure à (0.25g), dans les cas suivants :
        </p>
        <ul class="rpa-list-disc ml-8 mb-6">
            <li>Eléments de structure horizontaux ou presque horizontaux de 15 m de portée ou plus ;</li>
            <li>Eléments horizontaux ou presque horizontaux en console de plus de 2.00 m de long ;</li>
            <li>Eléments précontraints horizontaux ou presque horizontaux ;</li>
            <li>Poutres supportant des poteaux ;</li>
            <li>Structures sur appuis parasismiques.</li>
        </ul>

        <div class="rpa-table-container">
            <table class="rpa-table">
                <thead>
                    <tr>
                        <th rowspan="3">Zonage sismique</th>
                        <th colspan="5">Coefficient d'accélération</th>
                    </tr>
                    <tr>
                        <th rowspan="2">A.I (horizontal)</th>
                        <th colspan="4">A<sub>v</sub>.I (vertical)<br>Catégorie d'Importance</th>
                    </tr>
                    <tr>
                        <th>1A</th>
                        <th>1B</th>
                        <th>2</th>
                        <th>3</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <tr><td>I</td><td>0.07 I</td><td>0.054</td><td>0.046</td><td>0.039</td><td>0.031</td></tr>
                    <tr><td>II</td><td>0.10 I</td><td>0.077</td><td>0.066</td><td>0.055</td><td>0.044</td></tr>
                    <tr><td>III</td><td>0.15 I</td><td>0.116</td><td>0.099</td><td>0.083</td><td>0.066</td></tr>
                    <tr><td>IV</td><td>0.20 I</td><td>0.252</td><td>0.216</td><td>0.180</td><td>0.144</td></tr>
                    <tr><td>V</td><td>0.25 I</td><td>0.315</td><td>0.270</td><td>0.225</td><td>0.180</td></tr>
                    <tr><td>VI</td><td>0.30 I</td><td>0.378</td><td>0.324</td><td>0.270</td><td>0.216</td></tr>
                </tbody>
            </table>
            <p class="rpa-table-caption text-center mt-2">L'action sismique verticale, A<sub>v</sub>, est obligatoire lorsque (A<sub>v</sub>.I.g) dépasse 0.25 g</p>
        </div>
        <p class="mt-4 text-sm font-bold italic">Table 5.1: Coefficients d'accélération verticale en fonction de la zone sismique et du groupe d'importance (en l'absence d'effet topographique i.e. lorsque S<sub>T</sub> = 1)</p>
        
        <p class="mt-6">Dans le cas de la composante verticale, les combinaisons d'actions suivantes doivent être utilisées :</p>
    </div>
</section>

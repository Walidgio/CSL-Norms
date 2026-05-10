{{-- ==================== PAGE 53 ==================== --}}
<section id="rpa-p53" class="rpa-page rpa-scroll-spy-section" data-annotatable="true">
    <div class="rpa-header">
        <span>53</span>
        <span class="chapter">3.3 Actions sismiques</span>
    </div>

    <div class="mt-8">
        <p class="text-justify leading-relaxed font-bold">
            Deux types de formes de spectres sont utilisés : le Type 1 et le Type 2. <span class="font-normal text-justify">Si les séismes qui contribuent le plus à l'aléa sismique, défini pour le site dans le cadre de l'évaluation probabiliste de l'aléa, ont une magnitude moment, <span class="italic">M<sub>w</sub></span>, inférieure ou égale à 5.5, le type de spectre 2 est adopté. Si les séismes qui contribuent le plus, à l'aléa sismique défini pour le site dans le cadre de l'évaluation probabiliste de l'aléa, ont une magnitude moment (<span class="italic">M<sub>w</sub></span> &ge; 5.5) , le type de spectre 1 est adopté.</span>
        </p>

        <p class="mt-6">Le spectre, selon la zone sismique, est de :</p>
        <ul class="rpa-list-disc ml-8 space-y-1">
            <li><span class="font-bold">Type 1 :</span> appliqué aux <span class="font-bold">zones sismiques IV, V et VI ;</span></li>
            <li><span class="font-bold">Type 2 :</span> appliqué aux <span class="font-bold">zones sismiques I, II et III.</span></li>
        </ul>

        <p class="mt-6 text-justify">
            Pour les quatre classes de sol <span class="italic">S<sub>1</sub>, S<sub>2</sub>, S<sub>3</sub>, et S<sub>4</sub></span>, les valeurs recommandées des paramètres <span class="italic">S, T<sub>1</sub>, T<sub>2</sub> et T<sub>3</sub></span> sont données dans :
        </p>
        <ul class="rpa-list-disc ml-8 space-y-1">
            <li>le Tableau (3.4) pour le spectre de Type 1 ;</li>
            <li>le Tableau (3.5) pour le spectre de Type 2.</li>
        </ul>
    </div>

    <div class="rpa-table-container my-8">
        <table class="rpa-table">
            <thead>
                <tr>
                    <th>Spectre Type 1 (Zones IV, V et VI)</th>
                    <th>S</th>
                    <th>T<sub>1</sub> (s)</th>
                    <th>T<sub>2</sub> (s)</th>
                    <th>T<sub>3</sub> (s)</th>
                </tr>
            </thead>
            <tbody class="text-center">
                <tr><td>site S<sub>1</sub></td><td>1.00</td><td>0.10</td><td>0.40</td><td>2.0</td></tr>
                <tr><td>site S<sub>2</sub></td><td>1.20</td><td>0.10</td><td>0.50</td><td>2.0</td></tr>
                <tr><td>site S<sub>3</sub></td><td>1.30</td><td>0.15</td><td>0.60</td><td>2.0</td></tr>
                <tr><td>site S<sub>4</sub></td><td>1.35</td><td>0.15</td><td>0.70</td><td>2.0</td></tr>
            </tbody>
        </table>
        <p class="rpa-table-caption text-center mt-2">Table 3.4: Valeurs des paramètres décrivant les spectres de réponse élastique de Type 1 (Zones sismiques IV, V et VI)</p>
    </div>

    <div class="rpa-table-container my-8">
        <table class="rpa-table">
            <thead>
                <tr>
                    <th>Spectre Type 2 (Zones I, II et III)</th>
                    <th>S</th>
                    <th>T<sub>1</sub> (s)</th>
                    <th>T<sub>2</sub> (s)</th>
                    <th>T<sub>3</sub> (s)</th>
                </tr>
            </thead>
            <tbody class="text-center">
                <tr><td>site S<sub>1</sub></td><td>1.00</td><td>0.05</td><td>0.25</td><td>1.20</td></tr>
                <tr><td>site S<sub>2</sub></td><td>1.30</td><td>0.05</td><td>0.30</td><td>1.20</td></tr>
                <tr><td>site S<sub>3</sub></td><td>1.55</td><td>0.10</td><td>0.40</td><td>1.20</td></tr>
                <tr><td>site S<sub>4</sub></td><td>1.80</td><td>0.10</td><td>0.50</td><td>1.20</td></tr>
            </tbody>
        </table>
        <p class="rpa-table-caption text-center mt-2">Table 3.5: Valeurs des paramètres décrivant les spectres de réponse élastique de Type 2 (Zones sismiques I, II et III)</p>
    </div>

    <div class="mt-8">
        <p class="text-justify leading-relaxed mb-6">
            La Figure (3.3) montre les formes des spectres de Type 1 et de Type 2, pour <math xmlns="http://www.w3.org/1998/Math/MathML" class="inline"><mi>&xi;</mi><mo>=</mo><mn>5</mn><mo>%</mo></math>, normalisés par A.
        </p>
        <p class="text-justify leading-relaxed mb-6">
            La valeur du facteur de correction d'amortissement visqueux, <span class="font-bold">&eta;</span>, peut être déterminée par Eqn. (3.9):
        </p>

        <div class="rpa-equation-container" id="rpa-eqt-3.9">
            <div class="rpa-equation">
                <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
                    <mrow>
                        <mi>&eta;</mi>
                        <mo>=</mo>
                        <msqrt>
                            <mfrac>
                                <mn>7</mn>
                                <mrow><mn>2</mn><mo>+</mo><mi>&xi;</mi></mrow>
                            </mfrac>
                        </msqrt>
                    </mrow>
                </math>
            </div>
            <div class="rpa-eq-num">(3.9)</div>
        </div>

        <p class="text-justify mt-8 leading-relaxed">
            où: &xi; (%) est le pourcentage d'amortissement critique qui est fonction du matériau constitutif, du type de structure et de l'importance des remplissages (cf. Tableau (3.6)). Quand <math xmlns="http://www.w3.org/1998/Math/MathML" class="inline"><mi>&xi;</mi><mo>=</mo><mn>5</mn><mo>%</mo></math>, on a <math xmlns="http://www.w3.org/1998/Math/MathML" class="inline"><mi>&eta;</mi><mo>=</mo><mn>1</mn></math>.
        </p>
        <p class="text-justify mt-4 leading-relaxed">
            La valeur du coefficient d'importance, I, dépend du groupe d'importance (cf. &sect; 3.4, Tableaux (3.11) & (I.1)).
        </p>
    </div>
</section>

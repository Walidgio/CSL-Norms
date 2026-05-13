{{-- ==================== PAGE 61 ==================== --}}
<section id="rpa-p61" class="rpa-page rpa-scroll-spy-section" data-annotatable="true">
    <div class="rpa-header-meta flex flex-wrap items-start justify-between gap-2 text-sm mb-6 border-b border-black/90 dark:border-slate-500 pb-2">
        <span class="tabular-nums font-semibold text-slate-700 dark:text-slate-300">61</span>
        <div class="text-right max-w-[min(100%,28rem)] space-y-0.5">
        <div class="text-xs font-semibold text-amber-900/90 dark:text-amber-200/90">3.5 Classification des systèmes de contreventement</div>
        @include('norms::codes.rpa.rpa2024.chapitre3.partials.ch3-running-meta')
    </div>
    </div>

    <div class="overflow-x-auto my-6">
        <table class="w-full border-collapse border border-gray-400 text-sm mx-auto" style="max-width: 500px;">
            <thead>
                <tr class="bg-gray-50 text-center">
                    <th class="border border-gray-400 p-2 font-bold" rowspan="2">Coefficient d'importance, I</th>
                    <th class="border border-gray-400 p-2 font-bold" colspan="4">Groupe d'importance</th>
                </tr>
                <tr class="bg-gray-50 text-center">
                    <th class="border border-gray-400 p-2 font-bold">1A</th>
                    <th class="border border-gray-400 p-2 font-bold">1B</th>
                    <th class="border border-gray-400 p-2 font-bold">2</th>
                    <th class="border border-gray-400 p-2 font-bold">3</th>
                </tr>
            </thead>
            <tbody>
                <tr class="text-center">
                    <td class="border border-gray-400 p-2">I</td>
                    <td class="border border-gray-400 p-2">1.40</td>
                    <td class="border border-gray-400 p-2">1.20</td>
                    <td class="border border-gray-400 p-2">1</td>
                    <td class="border border-gray-400 p-2">0.80</td>
                </tr>
            </tbody>
        </table>
        <div class="rpa-figure-title text-center mt-2" id="rpa-table-3.11" style="scroll-margin-top: 100px;">Table 3.11: Valeurs du coefficient d'importance</div>
    </div>

    <div id="rpa-table-I.1" class="mt-4 p-3 border border-dashed border-slate-400 rounded text-sm text-justify" style="scroll-margin-top: 100px;">
        <strong>Tableau I.1</strong> (Annexe I du RPA 2024) : tableau complémentaire des coefficients d'importance et des périodes de retour associées. Le détail exhaustif figure dans l'édition PDF officielle ; les valeurs principales pour le dimensionnement courant sont reprises au <a href="#rpa-table-3.11" class="rpa-inline-link">Tableau (3.11)</a> ci-dessus.
    </div>

    <div id="rpa-art-3.5" class="mt-8">
        <h2 class="rpa-h2">3.5 Classification des systèmes de contreventement</h2>
        <p style="text-align: justify;">
            L'objet de la classification des systèmes de contreventement se traduit, dans les règles et méthodes de calcul, par l'attribution pour chacune des catégories de cette classification, d'une valeur numérique du coefficient de comportement, R (cf. <a href="#rpa-table-3.18" class="rpa-inline-link">Tableau (3.18)</a>).
        </p>
        <p style="text-align: justify;" class="mt-2">
            La classification des systèmes de contreventement est faite en tenant compte de leur capacité de dissipation de l'énergie vis-à-vis de l'action sismique. Le coefficient de comportement correspondant est fixé en fonction de la nature des matériaux constitutifs, du type de construction, des possibilités de redistribution d'efforts dans la structure et des capacités de déformation des éléments dans le domaine post-élastique.
        </p>
        <p style="text-align: justify;" class="mt-2">
            Les systèmes de contreventement retenus dans le présent DTR sont classés selon les catégories suivantes :
        </p>

        <h3 class="font-bold mt-6">A) Structures en béton armé</h3>
        <p style="text-align: justify;" class="mt-2">
            Le contreventement des bâtiments en béton armé est assuré en général par des ossatures «poteaux-poutres», des voiles, ou les deux, dans des proportions variables. Avec des liaisons horizontales rigides, les forces latérales (efforts tranchants) sont distribuées à ces éléments structuraux en proportion de leurs rigidités relatives à chaque niveau. Dans les définitions suivantes, les pourcentages de résistance à l'effort tranchant peuvent être remplacés par les pourcentages d'effort tranchant sollicitant dans la situation sismique de calcul.
        </p>

        <div class="mt-6">
            <h4 id="rpa-art-3.5-s1" class="font-bold underline">1. Système à ossature</h4>
            <p style="text-align: justify;">
                Système de structure dans lequel la résistance aux charges verticales et aux charges latérales est assurée principalement par des ossatures spatiales et dont la résistance à l'effort tranchant à la base du bâtiment dépasse 65 % de la résistance à l'effort tranchant du système structural dans son ensemble.
            </p>
            <p style="text-align: justify;" class="mt-2">
                Pour cette catégorie, les éléments de remplissage ne doivent pas gêner les déformations des portiques (cloisons désolidarisées ou cloisons légères dont les liaisons ne gênent pas le déplacement des portiques).
            </p>
            <p style="text-align: justify;" class="mt-2">
                Le <a href="#rpa-table-3.12" class="rpa-inline-link">Tableau (3.12)</a> précise le nombre maximal d'étages ainsi que la hauteur maximale, pour ce genre de système.
            </p>

            <div class="overflow-x-auto my-6">
                <table class="w-full border-collapse border border-gray-400 text-sm mx-auto" style="max-width: 500px;">
                    <thead>
                        <tr class="bg-gray-50 text-center">
                            <th class="border border-gray-400 p-2 font-bold text-left">Zone sismique</th>
                            <th class="border border-gray-400 p-2 font-bold">I et II</th>
                            <th class="border border-gray-400 p-2 font-bold">III</th>
                            <th class="border border-gray-400 p-2 font-bold">IV</th>
                            <th class="border border-gray-400 p-2 font-bold">V et VI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-center">
                            <td class="border border-gray-400 p-2 text-left">Nombre maximal de niveaux</td>
                            <td class="border border-gray-400 p-2">5</td>
                            <td class="border border-gray-400 p-2">4</td>
                            <td class="border border-gray-400 p-2">3</td>
                            <td class="border border-gray-400 p-2">3</td>
                        </tr>
                        <tr class="text-center">
                            <td class="border border-gray-400 p-2 text-left">Hauteur maximale (m)</td>
                            <td class="border border-gray-400 p-2">17</td>
                            <td class="border border-gray-400 p-2">14</td>
                            <td class="border border-gray-400 p-2">11</td>
                            <td class="border border-gray-400 p-2">11</td>
                        </tr>
                    </tbody>
                </table>
                <div class="rpa-figure-title text-center mt-2" id="rpa-table-3.12" style="scroll-margin-top: 100px;">Table 3.12: Limitations en nombre de niveaux et en hauteur</div>
            </div>
        </div>

        <div class="mt-6">
            <h4 id="rpa-art-3.5-s2" class="font-bold underline">2. Système à contreventement mixte, équivalent à une ossature</h4>
            <p style="text-align: justify;">
                Système de structure mixte dans lequel le transfert des charges verticales et horizontales est assuré, conjointement, par l'ossature spatiale et les voiles. La résistance à l'effort tranchant de l'ossature, à la base du bâtiment, est comprise entre 50% et 65% de la résistance à l'effort tranchant du système structural dans son ensemble.
            </p>
        </div>
    </div>
</section>

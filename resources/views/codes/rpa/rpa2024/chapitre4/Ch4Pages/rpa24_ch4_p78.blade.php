{{-- ==================== PAGE 78 ==================== --}}
<section id="rpa-p78" class="rpa-page rpa-scroll-spy-section" data-annotatable="true">
    @include('norms::codes.rpa.rpa2024.partials.rpa-page-header', ['page' => 78, 'meta' => 'norms::codes.rpa.rpa2024.partials.ch4-running-meta'])

    <div class="rpa-table-showcase my-8" id="rpa-table-4.1" style="scroll-margin-top: 100px;">
        <p class="rpa-table-showcase__kicker">M&eacute;thode statique &eacute;quivalente</p>
        <div class="rpa-table-showcase__surface overflow-x-auto">
            <table class="rpa-table min-w-[520px]">
                <thead>
                    <tr>
                        <th rowspan="2" scope="col">Zone sismique</th>
                        <th colspan="4" scope="colgroup">Groupe d'importance</th>
                    </tr>
                    <tr>
                        <th scope="col">1A</th>
                        <th scope="col">1B</th>
                        <th scope="col">2</th>
                        <th scope="col">3</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">I et II</th>
                        <td class="text-center">(*)</td>
                        <td class="text-center">(*)</td>
                        <td class="text-center">(*)</td>
                        <td class="text-center">(*)</td>
                    </tr>
                    <tr>
                        <th scope="row">III et IV</th>
                        <td class="text-center">&le; 3 niveaux<br>&le; 11 m</td>
                        <td class="text-center">&le; 5 niveaux<br>&le; 17 m</td>
                        <td class="text-center">&le; 7 niveaux<br>&le; 23 m</td>
                        <td class="text-center">(*)</td>
                    </tr>
                    <tr>
                        <th scope="row">V et VI</th>
                        <td class="text-center">&le; 2 niveaux<br>&le; 8 m</td>
                        <td class="text-center">&le; 3 niveaux<br>&le; 11 m</td>
                        <td class="text-center">&le; 5 niveaux<br>&le; 17 m</td>
                        <td class="text-center">&le; 5 niveaux<br>&le; 17 m</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p class="rpa-table-showcase__caption">Tableau 4.1 — Conditions d'application de la m&eacute;thode statique &eacute;quivalente</p>
        <p class="rpa-table-showcase__footnote"><b>Nota :</b> (*) aucune limitation de nombre de niveaux ou de hauteur.</p>
    </div>

    <div id="rpa-art-4.1.3" style="scroll-margin-top: 100px;">
        <h3 class="rpa-h3">4.1.3 Méthodes dynamiques</h3>
        <div class="rpa-indent space-y-4">
            <p><b>a)</b> La méthode d'analyse modale spectrale peut être utilisée dans tous les cas et, en particulier, dans le cas où la méthode statique équivalente n'est pas permise ;</p>
            <p><b>b)</b> La méthode d'analyse dynamique par accélérogrammes peut être utilisée, au cas par cas, par un personnel qualifié, ayant justifié auparavant les choix des séismes de calcul (cf. &sect;3.3.4) et des lois de comportement utilisées ainsi que la méthode d'interprétation des résultats et les critères de sécurité à satisfaire ;</p>
            <p><b>c)</b> Pour les bâtiments de plus de 70 mètres de hauteur ou dont la période fondamentale <i>T<sub>0</sub></i> dépasse 2 secondes, il convient de compléter les analyses, réalisées par la méthode modale spectrale, par des analyses dynamiques temporelles non linéaires, en utilisant des accélérogrammes réels, synthétiques ou simulés (cf. &sect; 3.3.4).</p>
        </div>
    </div>

    <div id="rpa-art-4.2" class="mt-12" style="scroll-margin-top: 100px;">
        <h2 class="rpa-h2">4.2 Méthode statique équivalente</h2>
        
        <div id="rpa-art-4.2.1" style="scroll-margin-top: 100px;">
            <h3 class="rpa-h3">4.2.1 Principe</h3>
            <p class="text-justify mb-4">
                Les forces réelles dynamiques, qui se développent dans la construction, sont remplacées par un système de forces statiques fictives dont les effets sont considérés équivalents à ceux de l'action sismique.
            </p>
            <p class="text-justify mb-4">
                Le mouvement du sol peut se faire dans une direction quelconque, dans le plan horizontal. Les forces sismiques horizontales équivalentes seront considérées appliquées, successivement, suivant deux directions orthogonales caractéristiques choisies par le projeteur. Dans le cas général, ces deux directions sont les axes principaux du plan horizontal de la structure.
            </p>
            <p class="text-justify mb-4">
                Il faut souligner, toutefois, que les forces et les déformations obtenues pour l'élément, à partir des méthodes d'analyse statiques, pour les charges de conception recommandées, sont inférieures aux forces et aux déformations qui seraient observées sur la structure, sous les effets d'un séisme majeur pour lequel les charges ont été spécifiées. Ce dépassement des forces est équilibré par le comportement ductile qui est fourni par les détails de construction de l'élément.
            </p>
            <p class="text-justify mb-4">
                C'est pourquoi l'utilisation de cette méthode ne peut être dissociée de l'application rigoureuse des dispositions constructives garantissant à la structure :
            </p>
            <ul class="rpa-list-disc ml-8 mb-4">
                <li>Une ductilité suffisante ;</li>
                <li>La capacité de dissiper l'énergie vibratoire transmise à la structure par des secousses sismiques majeures.</li>
            </ul>
        </div>
    </div>
</section>

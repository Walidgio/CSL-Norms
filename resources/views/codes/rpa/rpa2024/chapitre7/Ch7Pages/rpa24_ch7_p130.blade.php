{{-- ==================== PAGE 130 ==================== --}}
<section id="rpa-p130" class="rpa-page rpa-scroll-spy-section">
    <div class="rpa-header">
        <span class="chapter">Chapter 7. STRUCTURES EN BETON ARME</span>
        <span>130</span>
    </div>

    <div id="rpa-art-7.8" style="scroll-margin-top: 100px;">
        <h2 class="rpa-h2" style="color: #d97706;">7.8 JONCTION D'ARMATURES</h2>

        <div id="rpa-art-7.8-1">
            <p style="text-align: justify;">
                Il ne doit <span class="rpa-highlight">pas y avoir de jonction par recouvrement par soudure</span> à l'intérieur des zones critiques des éléments de structure :
            </p>
            <div class="rpa-indent">
                <div class="rpa-bullet">• <i>l<sub>0</sub></i> : longueur minimale de recouvrement</div>
                <div class="rpa-bullet">• <i>a</i> : distance entre barres</div>
                <div class="rpa-bullet">• <i>&phi;</i> : diamètre de la barre tendue</div>
            </div>
        </div>
    </div>

    <p style="text-align: justify; margin-top: 15px;">
        Il peut y avoir des jonctions par coupleurs mécaniques dans les poteaux et les voiles, si le fonctionnement de ces dispositifs est validé par des essais appropriés en conformité aux normes d'essais portant sur les dispositifs de raboutage mécanique des barres.
    </p>

    <!-- Figure 7.19 -->
    <div class="rpa-figure-container mt-6" id="rpa-fig-7.19-container">
        @include('norms::codes.rpa.rpa2024.chapitre7.Ch7Svg.rpa24_ch7_fig7_19')
        <div class="rpa-figure-title" id="rpa-fig-7.19">Figure 7.19: Recouvrements voisins</div>
    </div>

    <p style="text-align: justify; margin-top: 15px;">
        Les recouvrements des barres doivent respecter les dispositions de la <a href="#rpa-fig-7.19" class="rpa-link">Figure (7.19)</a>, et ne doivent pas être disposées dans des zones fortement sollicitées (rotules plastiques, par exemple).
    </p>

    <div id="rpa-art-7.9" style="scroll-margin-top: 100px;">
        <h2 class="rpa-h2" style="color: #d97706; margin-top: 40px;">7.9 DISPOSITIONS PROPRES AUX DALLES ET AUX DIAPHRAGMES</h2>

        <div id="rpa-art-7.9-1">
            <p style="text-align: justify;">
                Il doit exister un chaînage périphérique continu (cf. <a href="#rpa-fig-7.20" class="rpa-link">Figure (7.20)</a>), d’au moins 3cm<sup>2</sup> de section d’acier et un chaînage, au croisement de chaque élément de contreventement avec le plancher, de section minimale, égale 1.5cm<sup>2</sup>, et respectant la règle de:
            </p>
            <div class="rpa-indent">
                <div class="rpa-bullet">• (0.28L) dans le cas de contreventement par voile</div>
                <div class="rpa-bullet">• (0.50L) dans le cas de contreventement par portiques</div>
            </div>

            <div class="mt-4">
                avec: <br>
                <i>L</i> (unité: m) : largeur chaînée.
            </div>
        </div>
    </div>

    <!-- Figure 7.20 -->
    <div class="rpa-figure-container mt-6" id="rpa-fig-7.20-container">
        @include('norms::codes.rpa.rpa2024.chapitre7.Ch7Svg.rpa24_ch7_fig7_20')
        <div class="rpa-figure-title" id="rpa-fig-7.20">Figure 7.20: Chainages des dalles et des diaphragmes</div>
    </div>
</section>


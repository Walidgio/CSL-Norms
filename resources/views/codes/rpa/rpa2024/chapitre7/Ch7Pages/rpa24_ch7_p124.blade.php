{{-- ==================== PAGE 124 ==================== --}}
<section id="rpa-p124" class="rpa-page rpa-scroll-spy-section">
    <div class="rpa-header">
        <span>124</span>
        <span class="chapter">Chapter 7. STRUCTURES EN BETON ARME</span>
    </div>

    <!-- Figure 7.14 -->
    <div class="rpa-figure-container" id="rpa-fig-7.14-container">
        @include('norms::codes.rpa.rpa2024.chapitre7.Ch7Svg.rpa24_ch7_fig7_14')
        <div class="rpa-figure-title" id="rpa-fig-7.14">Figure 7.14: Zone critique à la base du voile</div>
    </div>

    <div class="rpa-comment my-6">
        <p><i>Commentaire : Lâ€™enveloppe de calcul du diagramme des efforts tranchants est construite en trois étapes :</i></p>
        <div class="rpa-indent">
            <div class="rpa-bullet">• La première étape consiste à amplifier le diagramme initial de <span class="rpa-highlight">40%</span>.</div>
            <div class="rpa-bullet">• La deuxième étape consiste à maintenir la courbe amplifiée de la base du voile jusqu’à une hauteur égale à <span class="rpa-highlight">(h<sub>w</sub>/3)</span>.</div>
            <div class="rpa-bullet">• La troisième étape consiste en une enveloppe linéaire entre (h<sub>w</sub>/3) et le sommet du voile.</div>
        </div>
        <p class="mt-4" style="text-align: justify;">
            Lâ€™enveloppe de calcul modifiée pour les efforts tranchants est valable uniquement pour les systèmes à contreventement mixte. Cette modification est faite pour tenir compte des incertitudes dues aux modes supérieurs.
        </p>
    </div>

    <!-- Figure 7.15 -->
    <div class="rpa-figure-container mt-10" id="rpa-fig-7.15-container">
        @include('norms::codes.rpa.rpa2024.chapitre7.Ch7Svg.rpa24_ch7_fig7_15')
        <div class="rpa-figure-title" id="rpa-fig-7.15">Figure 7.15: Enveloppe de calcul pour les efforts tranchants dans les voiles élancés des systèmes à contreventement mixte</div>
    </div>
</section>


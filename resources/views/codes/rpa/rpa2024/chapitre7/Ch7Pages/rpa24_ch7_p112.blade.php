<section id="rpa-p112" class="rpa-page rpa-scroll-spy-section">
    <div class="rpa-header">
        <span class="chapter">Chapter 7. STRUCTURES EN BETON ARME</span>
        <span>112</span>
    </div>

    <p style="text-indent: 20px; text-align: justify;">
        Les symboles ont les mêmes significations qu'en <a href="#rpa-art-7.1.3" class="rpa-link">§ 7.1.3</a>.
    </p>

    <p style="text-align: justify; font-style: italic; margin-top: 20px;">
        Commentaire : La limitation, cf. <a href="#rpa-eqt-7.5" class="rpa-link">Eqn. (7.5)</a>, a pour objectif, à défaut d'empêcher la rupture d'une section critique d'un poteau (généralement soumis à une flexion composée), de la retarder ou, au cas où elle se produit, de faire en sorte qu'elle se manifeste, le plus souvent sous forme de rupture ductile, c'est-à-dire par rupture des aciers tendus (suite à leur allongement dans le palier plastique), préalablement à l'atteinte de la résistance ultime du béton comprimé. La disposition d'armatures transversales rapprochées, dans la zone critique concernée qu'elles confinent, contribue également à l'atteinte de cet objectif.
    </p>

    <div class="rpa-h2-black">Sollicitations tangentes</div>
    <p style="text-align: justify;">
        La contrainte de cisaillement conventionnelle de calcul dans le béton, <span style="text-decoration: overline;">&tau;</span><sub>bu</sub>, sous combinaison sismique doit être inférieure ou égale à la valeur limite, <a href="#rpa-eqt-7.6" class="rpa-link"><span style="text-decoration: overline;">&tau;</span><sub>bu</sub></a>:
    </p>

    <div class="rpa-equation-container" id="rpa-eqt-7.6" style="margin-top: 20px;">
        <div class="rpa-equation" style="text-align: left; padding-left: 60px;">
            <span style="text-decoration: overline;">&tau;</span><sub>bu</sub> = &rho;<sub>d</sub>.f<sub>c28</sub>
        </div>
        <div class="rpa-eq-num">(7.6)</div>
    </div>

    <div style="margin-top: 15px;">
        où: <i>&rho;<sub>d</sub></i> est égal à 0.075 si l'élancement géométrique, dans la direction considérée, est supérieur ou égal à 5; il est égal à 0.04, dans le cas contraire.
    </div>

    <p style="text-indent: 20px; text-align: justify; margin-top: 15px;">
        Dans le cas de remplissage en maçonnerie, ne régnant pas sur toute la hauteur d'un poteau (présence d'ouvertures en vasistas par exemple), la hauteur de calcul de l'élancement géométrique sera celle de l'ouverture.
    </p>

    <!-- Figure 7.3 SVG -->
    <div class="rpa-figure-container my-8" id="rpa-fig-7.3-container">
        @include('norms::codes.rpa.rpa2024.chapitre7.Ch7Svg.rpa24_ch7_fig7_3')
        <div class="rpa-figure-title" id="rpa-fig-7.3">Figure 7.3: Cas de constitution de poteau court, par hauteur insuffisante de la maçonnerie de remplissage</div>
    </div>

    <p style="text-indent: 20px; text-align: justify; margin-top: 20px;">
        Il y a lieu de noter que cette partie de poteau de hauteur h, considérée comme poteau court si <i>&lambda;<sub>g</sub> &lt; 5</i>, doit être confinée par des armatures transversales calculées avec <a href="#rpa-eqt-7.3" class="rpa-link">Eqn. (7.3)</a> ou déduites des minima donnés au <a href="#rpa-art-7.4.2" class="rpa-link">§ 7.4.2</a>.
    </p>
    <p style="text-indent: 20px; text-align: justify;">
        Dans <a href="#rpa-eqt-7.3" class="rpa-link">Eqn. (7.3)</a>, il y a lieu de bien veiller à ce que l'effort, <i>V<sub>u</sub></i>, sollicitant le poteau court, ait bien été calculé en considérant la grande raideur de ce dernier par rapport aux autres poteaux d'étage de hauteur "normale".
    </p>
    <p style="text-indent: 20px; text-align: justify;">
        Les poteaux courts, d'une manière générale, amènent à de graves désordres à l'occasion de séismes, même modérés. Si leur usage ne peut-être évité, il est recommandé que des contreventements par voiles ou palées prennent l'essentiel de l'effort horizontal.
    </p>
</section>


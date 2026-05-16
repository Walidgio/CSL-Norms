<section id="rpa-p106" class="rpa-page rpa-scroll-spy-section">
    @include('norms::codes.rpa.rpa2024.partials.rpa-page-header', ['page' => 106, 'meta' => 'norms::codes.rpa.rpa2024.partials.ch7-running-meta'])

    <p style="text-indent: 20px; text-align: justify;">
        Les éléments structuraux, n'apportant pas de contribution significative à la résistance aux actions sismiques d'ensemble ou à leur distribution, peuvent être considérés comme éléments secondaires, à condition que leur résistance à ces actions soit effectivement négligée et qu'ils ne soient soumis, du fait des déformations imposées, qu'à des sollicitations négligeables vis-à-vis des sollicitations d'autre origine.
    </p>

    <div class="rpa-h3" id="rpa-art-7.1.3" style="display: flex; align-items: center; justify-content: space-between; margin-top: 30px;">
        <span>7.1.3 <span class="text-gray-900 dark:text-gray-100">Définitions et conventions</span></span>
    </div>
    
    <div class="rpa-h2-black" id="rpa-art-7.1.3-zones">Zones critiques</div>
    <p style="text-align: justify;">
        On désigne par zone critique, toute partie d'un élément structurel principal dans laquelle des concentrations de déformations ou de sollicitations sont susceptibles de se produire. Ces zones sont celles définies dans le présent article pour les différentes sortes d'éléments et, éventuellement, celles que le calcul fait apparaître comme telles.
    </p>
    <div class="rpa-h2-black" id="rpa-art-7.1.3-conf" style="margin-top: 20px;">Confinement</div>
    <p style="text-align: justify;">
        On désigne, par béton confiné, un volume de béton pourvu d'armatures transversales disposées de façon à s'opposer au gonflement du matériau, sous l'effet des contraintes de compression, ainsi qu'au flambement des armatures.
    </p>
    <p style="text-indent: 20px; text-align: justify;">
        Par convention, on considère que la partie confinée d'une section transversale est celle qui est délimitée par le contour intérieur des armatures de confinement, disposées à la périphérie de la section.
    </p>
    <div class="rpa-h2-black" id="rpa-art-7.1.3-effort" style="margin-top: 20px;">Effort normal réduit</div>
    <p style="text-align: justify;">
        On entend par effort normal réduit, le rapport <a href="#rpa-eqt-7.1" class="rpa-link">Eqn. (7.1)</a> :
    </p>

    <div class="rpa-equation-container" id="rpa-eqt-7.1">
        <div class="rpa-equation" style="text-align: left; padding-left: 60px;">
            &nu; = <span class="rpa-fraction"><span class="rpa-fraction-top">N<sub>d</sub></span><span class="rpa-fraction-bottom">B<sub>c</sub>.f<sub>cj</sub></span></span>
        </div>
        <div class="rpa-eq-num">(7.1)</div>
    </div>

    <div style="margin-top: 15px;">
        avec:
        <div class="rpa-bullet">• <i>N<sub>d</sub></i>: effort normal de compression de calcul s'exerçant sur une section de béton ;</div>
        <div class="rpa-bullet">• <i>B<sub>c</sub></i>: aire (section brute) de cette dernière</div>
        <div class="rpa-bullet">• <i>f<sub>cj</sub></i>: résistance caractéristique du béton à j jours.</div>
    </div>

    <p class="rpa-h2-black mt-6">Pièces comprimées, pièces fléchies</p>
    <p class="text-justify">
        On entend par pièce fléchie, un élément linéaire ou à deux dimensions, soumis à la flexion simple ou déviée, pour lequel on satisfait aux conditions suivantes&nbsp;:
    </p>
    <div class="rpa-indent my-3 text-center font-medium">
        <i>&nu;</i><sub>max</sub> &le; 0,1 &nbsp; et &nbsp; <i>h</i> &le; <i>l</i>/4
    </div>
    <p class="mb-2">avec&nbsp;:</p>
    <div class="rpa-indent">
        <div class="rpa-bullet">&#8226; <i>h</i> : hauteur de la section droite de l'élément</div>
        <div class="rpa-bullet">&#8226; <i>l</i> : portée entre nus de l'élément</div>
    </div>
    <p class="mt-4 mb-2">La pièce est dite&nbsp;:</p>
    <div class="rpa-indent">
        <div class="rpa-bullet">&#8226; &laquo;&nbsp;courte&nbsp;&raquo; lorsque <i>h</i> &gt; <i>l</i>/4</div>
    </div>
</section>

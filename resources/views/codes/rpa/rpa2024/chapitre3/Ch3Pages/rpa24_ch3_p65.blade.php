{{-- ==================== PAGE 65 ==================== --}}
<section id="rpa-p65" class="rpa-page rpa-scroll-spy-section" data-annotatable="true">
    <div class="rpa-header-meta flex flex-wrap items-start justify-between gap-2 text-sm mb-6 border-b border-black/90 dark:border-slate-500 pb-2">
        <span class="tabular-nums font-semibold text-slate-700 dark:text-slate-300">65</span>
        <div class="text-right max-w-[min(100%,28rem)] space-y-0.5">
        <div class="text-xs font-semibold text-amber-900/90 dark:text-amber-200/90">3.5 Classification des systèmes de contreventement</div>
        @include('norms::codes.rpa.rpa2024.chapitre3.partials.ch3-running-meta')
    </div>
    </div>

    <p class="italic" style="text-align: justify;">
        perforés constituant des gaines verticales contenant diverses distributions. Pour de tels systèmes, il convient de choisir, au cas par cas, la définition de configuration la plus appropriée.
    </p>

    <div class="mt-6">
        <h4 class="font-bold underline">9. Système de voiles de grandes dimensions en béton peu armé</h4>
        <p style="text-align: justify;">
            On entend par, voile de grandes dimensions transversales, les voiles qui répondent aux conditions de dimensionnement ci-dessous, grâce auxquelles, ils sont supposés développer une fissuration limitée et un comportement non élastique dans la situation sismique de calcul, cf. <a href="#rpa-eqt-3.23" class="rpa-inline-link">Eqn. (3.23)</a> :
        </p>

        <div class="rpa-equation-container" id="rpa-eqt-3.23">
            <div class="rpa-equation">
                <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
                    <mrow>
                        <msub><mi>l</mi><mi>w</mi></msub>
                        <mo>&ge;</mo>
                        <mi>max</mi>
                        <mo>(</mo>
                        <mn>4.0</mn>
                        <mtext> m</mtext>
                        <mo>,</mo>
                        <mfrac>
                            <mrow><mn>2</mn><mo>&sdot;</mo><msub><mi>h</mi><mi>w</mi></msub></mrow>
                            <mn>3</mn>
                        </mfrac>
                        <mo>)</mo>
                    </mrow>
                </math>
            </div>
            <div class="rpa-eq-num">(3.23)</div>
        </div>

        <div class="mt-4">
            avec:
            <div class="rpa-indent space-y-1">
                <div class="rpa-bullet">• <i>l<sub>w</sub></i>: longueur du voile</div>
                <div class="rpa-bullet">• <i>h<sub>w</sub></i>: hauteur totale du voile, à compter de sa base jusqu'au sommet de l'ossature du bâtiment.</div>
            </div>
        </div>

        <p class="italic mt-6" style="text-align: justify;">
            Commentaire (1) : Un tel voile est supposé transformer l'énergie sismique en énergie potentielle (par soulèvement temporaire des masses de la structure) et en énergie dissipée dans le sol par rotation de corps rigide, etc. En raison de ses dimensions, du manque de fixité (rigidité de la liaison) à la base ou de la connectivité avec des voiles de grandes dimensions transversaux empêchant les rotules plastiques à la base, il ne peut être dimensionné efficacement pour dissiper de l'énergie dans une rotule plastique à la base :
        </p>
        <div class="rpa-indent mt-2 space-y-1">
            <div class="rpa-bullet">• Ce système constructif doit comprendre au moins deux voiles dans chaque direction horizontale ;</div>
            <div class="rpa-bullet">• Ces deux voiles doivent porter collectivement au moins 20 % de la charge gravitaire totale ;</div>
            <div class="rpa-bullet">• Ce système dont les voiles, supposés encastrés à leur base, doit avoir une période fondamentale inférieure ou égale à 0.5 seconde ;</div>
            <div class="rpa-bullet">• Les dispositions constructives minimales de ce type de voile sont données dans l'annexe D.</div>
        </div>
        <p class="italic mt-4" style="text-align: justify;">
            Commentaire (2) : Ce système est prohibé en zones sismiques IV, V et VI.
        </p>
    </div>

    <div class="mt-10">
        <h3 class="font-bold">B) Structures en acier</h3>
        
        <div class="mt-6">
            <h4 class="font-bold underline">10. Ossatures en portiques sans remplissage ou avec remplissage isolé</h4>
            <p style="text-align: justify;">
                Ce sont des ossatures composées de portiques à haute ductilité. Elles résistent aux forces horizontales essentiellement par flexion. Les zones dissipatives sont situées principalement dans des rotules plastiques près des nœuds poutre-poteau.
            </p>
            <p class="italic mt-2">Pour ce système de contreventement, il n'y a pas de limitation, en hauteur, des bâtiments.</p>
        </div>

        <div class="mt-6">
            <h4 class="font-bold underline">11. Ossatures en portiques avec remplissage en maçonnerie rigide</h4>
            <p style="text-align: justify;">
                Ce sont des ossatures composées de portiques à moyenne ductilité par le fait de la présence d'une maçonnerie rigide. Les zones dissipatives sont situées principalement dans des rotules plastiques près des nœuds poutre-poteau.
            </p>
            <p class="italic mt-2">La hauteur des bâtiments utilisant ce type d'ossatures doit être limitée à 5 niveaux ou 17 m.</p>
        </div>

        <div class="mt-6">
            <h4 class="font-bold underline">12. Ossatures avec palées de contreventement à barres centrées</h4>
            <p style="text-align: justify;">
                Dans ces ossatures, la résistance aux forces horizontales est assurée principalement par des éléments soumis à des efforts normaux. Les zones dissipatives sont situées principalement dans les diagonales tendues.
            </p>
            <p class="mt-2">Ces ossatures sont classées dans les deux catégories suivantes :</p>
        </div>
    </div>
</section>

{{-- ==================== PAGE 129 ==================== --}}
<section id="rpa-p129" class="rpa-page rpa-scroll-spy-section" data-annotatable="true">
    <div class="rpa-header-meta flex flex-wrap items-start justify-between gap-2 text-sm mb-6 border-b border-black/90 dark:border-slate-500 pb-2">
        <span class="tabular-nums font-semibold text-slate-700 dark:text-slate-300">129</span>
        <div class="text-right max-w-[min(100%,28rem)] space-y-0.5">
            @include('norms::codes.rpa.rpa2024.partials.ch7-running-meta')
        </div>
    </div>
<p style="text-indent: 20px; text-align: justify;">
        Pour calculer la longueur comprim&eacute;e des parties de rive, <i>l<sub>c,calcul</sub></i>, il est n&eacute;cessaire de calculer le raccourcissement limite &agrave; la rupture, &epsilon;<sub>cu,c</sub>, du b&eacute;ton comprim&eacute;&nbsp;:
    </p>

    <div class="rpa-equation-container" id="rpa-eqt-7.38">
        <div class="rpa-equation">
            <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
                <mrow>
                    <msub><mi>&epsilon;</mi><mtext>cu,c</mtext></msub>
                    <mo>=</mo>
                    <mn>0.0035</mn>
                    <mo>+</mo>
                    <mn>0.1</mn><mo>&sdot;</mo><mi>&alpha;</mi><mo>&sdot;</mo><msub><mi>&omega;</mi><mtext>wd</mtext></msub>
                </mrow>
            </math>
        </div>
        <div class="rpa-eq-num">(7.38)</div>
    </div>

    <div style="margin-top:10px;">
        soit donc :
    </div>

    <div class="rpa-equation-container" id="rpa-eqt-7.39">
        <div class="rpa-equation">
            <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
                <mrow>
                    <msub><mi>l</mi><mtext>c,calcul</mtext></msub>
                    <mo>=</mo>
                    <msub><mi>x</mi><mi>u</mi></msub>
                    <mo>&sdot;</mo>
                    <mrow>
                        <mo>(</mo>
                        <mn>1</mn>
                        <mo>&minus;</mo>
                        <mfrac>
                            <msub><mi>&epsilon;</mi><mtext>cu</mtext></msub>
                            <msub><mi>&epsilon;</mi><mtext>cu,c</mtext></msub>
                        </mfrac>
                        <mo>)</mo>
                    </mrow>
                </mrow>
            </math>
        </div>
        <div class="rpa-eq-num">(7.39)</div>
    </div>

    <div style="margin-top:10px;">
        avec : <math xmlns="http://www.w3.org/1998/Math/MathML"><mrow><msub><mi>&epsilon;</mi><mtext>cu</mtext></msub><mo>=</mo><mn>0.0035</mn></mrow></math>
    </div>

    <p style="text-indent: 20px; margin-top: 15px; text-align: justify;">
        Cette longueur <i>l<sub>c,calcul</sub></i> doit &ecirc;tre sup&eacute;rieure &agrave; max(0,15&nbsp;<i>l<sub>w</sub></i> ; 1,5&nbsp;<i>b<sub>w</sub></i>).
    </p>

    <div class="rpa-h3" id="rpa-art-7.7.4-sup" style="display: flex; align-items: center; justify-content: space-between; margin-top: 40px;">
        Ferraillage de la zone sup&eacute;rieure
    </div>
    <p style="text-align: justify;">
        La zone supérieure des voiles &eacute;lanc&eacute;s peut &ecirc;tre consid&eacute;r&eacute;e comme une zone lastique devant rsister aux sollicitations ; son dimensionnement peut tre conduit selon les règles classiques de béton arm. Pour viter toute plastification de cette zone, les sollicitations de calcul sont constitues par l'enveloppe des moments et/ou de l'effort tranchant amplifi. Les dispositions ci-dessous doivent tre respectes :
    </p>
    <div class="rpa-indent">
        <div class="rpa-bullet">&bull; les barres verticales principales d'extr&eacute;mit&eacute; doivent &ecirc;tre stabilis&eacute;es contre le ph&eacute;nom&egrave;ne de flambement ;</div>
        <div class="rpa-bullet">&bull; Les barres horizontales doivent &ecirc;tre munies de crochets &agrave; leurs extr&eacute;mit&eacute;s.</div>
    </div>

    <div class="rpa-h3" id="rpa-art-7.7.4-courts" style="display: flex; align-items: center; justify-content: space-between; margin-top: 32px;">
        <span><span class="text-gray-900 dark:text-gray-100">Voiles courts</span></span>
    </div>
    <p style="text-align: justify;">
        Il s'agit du calcul classique de b&eacute;ton arm&eacute; d&eacute;fini par la rglementation technique en vigueur. Pour ce type d'léments, la rupture prdominante est due à l'effort tranchant; en effet, leurs ruptures, par l'effort tranchant, ne sont pas ductiles.
    </p>

    <div class="rpa-h3" id="rpa-art-7.7.4-communes" style="display: flex; align-items: center; justify-content: space-between; margin-top: 32px;">
        R&egrave;gles communes
    </div>
    <p style="text-align: justify;">
        Les longueurs de recouvrement doivent &ecirc;tre &eacute;gales &agrave;&nbsp;:
    </p>
    <div class="rpa-indent">
        • 60&nbsp;&phi;<sub>l</sub> pour les barres situees dans les zones IV, V et VI ;
        <div class="rpa-bullet">&bull; 50&nbsp;&phi;<sub>l</sub> pour les barres situ&eacute;es dans les zones I, II et III</div>
    </div>
    <p id="rpa-art-7.7.4-couture" style="text-align: justify; margin-top: 10px;">
        Le long des joints de reprise de coulage, l&rsquo;effort tranchant doit &ecirc;tre pris par les aciers de couture
    </p>

    <div class="rpa-equation-container" id="rpa-eqt-7.40">
        <div class="rpa-equation">
            <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
                <mrow>
                    <msub><mi>A</mi><mtext>vj</mtext></msub>
                    <mo>=</mo>
                    <mn>1.1</mn>
                    <mrow>
                        <mo>(</mo>
                        <mfrac>
                            <mover><mi>V</mi><mo>&mdash;</mo></mover>
                            <msub><mi>f</mi><mi>e</mi></msub>
                        </mfrac>
                        <mo>)</mo>
                    </mrow>
                </mrow>
            </math>
        </div>
        <div class="rpa-eq-num">(7.40)</div>
    </div>

    <div style="margin-top:10px;">
        avec : <math xmlns="http://www.w3.org/1998/Math/MathML"><mrow><mover><mi>V</mi><mo>&mdash;</mo></mover><mo>=</mo><mn>1.4</mn><msub><mi>V</mi><mi>u</mi></msub></mrow></math>
    </div>
    <p style="text-indent: 20px; text-align: justify; margin-top: 10px;">
        Seul est rajout&eacute; l&rsquo;&eacute;cart entre la section obtenue par Eqn. (7.40) et celle des barres existantes.
    </p>
</section>

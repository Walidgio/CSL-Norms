<section id="rpa-p108" class="rpa-page rpa-scroll-spy-section">
    <div class="rpa-header">
        <span>108</span>
        <span class="chapter">Chapter 7. STRUCTURES EN BETON ARME</span>
    </div>

    <p style="text-indent: 20px; text-align: justify;">
        Les dimensions de la section transversale des poteaux doivent satisfaire les conditions suivantes (cf. <a href="#rpa-fig-7.1" class="rpa-link">Figure (7.1)</a>):
    </p>

    <div class="rpa-equation-container" style="margin-top: 20px;">
        <div class="rpa-equation" style="text-align: left; padding-left: 60px;">
            <div class="rpa-system">
                <span class="rpa-system-brace">{</span>
                <div class="rpa-system-lines">
                    <div style="margin-bottom: 15px;">Min(b<sub>c</sub>, h<sub>c</sub>) &ge; 25 cm : en zones I, II et III</div>
                    <div style="margin-bottom: 15px;">Min(b<sub>c</sub>, h<sub>c</sub>) &ge; 30 cm : en zones IV, V et VI</div>
                    <div style="margin-bottom: 15px;">Min(b<sub>c</sub>, h<sub>c</sub>) &ge; <span class="rpa-fraction"><span class="rpa-fraction-top">l<sub>cl</sub></span><span class="rpa-fraction-bottom">20</span></span> : quelle que soit la zone</div>
                    <div><span class="rpa-fraction"><span class="rpa-fraction-top">1</span><span class="rpa-fraction-bottom">4</span></span> &lt; <span class="rpa-fraction"><span class="rpa-fraction-top">b<sub>c</sub></span><span class="rpa-fraction-bottom">h<sub>c</sub></span></span> &lt; 4 : quelle que soit la zone</div>
                </div>
            </div>
        </div>
        <div class="rpa-eq-num"></div>
    </div>

    <p style="text-indent: 20px; text-align: justify; margin-top: 15px;">
        Pour les poteaux circulaires, le diamètre, <i>D</i>, devra satisfaire les conditions ci-dessous :
    </p>

    <div class="rpa-equation-container" style="margin-top: 20px;">
        <div class="rpa-equation" style="text-align: left; padding-left: 60px;">
            <div class="rpa-system">
                <span class="rpa-system-brace">{</span>
                <div class="rpa-system-lines">
                    <div style="margin-bottom: 15px;">D &ge; 25 cm : en zones I et II</div>
                    <div style="margin-bottom: 15px;">D &ge; 30 cm : en zone III</div>
                    <div style="margin-bottom: 15px;">D &ge; 35 cm : en zones IV, V et VI</div>
                    <div>D &ge; <span class="rpa-fraction"><span class="rpa-fraction-top">l<sub>cl</sub></span><span class="rpa-fraction-bottom">15</span></span> : quelle que soit la zone</div>
                </div>
            </div>
        </div>
        <div class="rpa-eq-num"></div>
    </div>

    <!-- Figure 7.1 SVG -->
    <div class="my-8 flex flex-col items-center justify-center" id="rpa-fig-7.1-container">
        @include('norms::codes.rpa.rpa2024.chapitre7.Ch7Svg.rpa24_ch7_fig7_1')
        <div class="text-sm font-medium mt-2" id="rpa-fig-7.1">Figure 7.1: Coffrage des poteaux</div>
    </div>

    <div id="rpa-art-7.4.2" style="scroll-margin-top: 100px;">
        <div class="rpa-h3" style="color: #d97706; margin-top: 40px;">7.4.2 <span class="text-gray-900 dark:text-gray-100">Ferraillage</span></div>
        <div class="rpa-h2-black" id="rpa-art-7.4.2-duct">Exigences de ductilité pour la zone critique</div>
        <p style="text-align: justify;">
            Les zones s'étendant sur une distance, <i>l<sub>cr</sub></i>, à partir des deux sections d'extrémité d'un poteau, doivent être considérées comme des zones critiques :
        </p>

        <div class="rpa-equation-container" id="rpa-eqt-7.2" style="margin-top: 20px;">
            <div class="rpa-equation" style="text-align: left; padding-left: 60px;">
                l<sub>cr</sub> = max(1.5h<sub>c</sub> ; <span class="rpa-fraction"><span class="rpa-fraction-top">l<sub>cl</sub></span><span class="rpa-fraction-bottom">6</span></span> ; 60 cm)
            </div>
            <div class="rpa-eq-num">(7.2)</div>
        </div>

        <div class="rpa-bullet mt-4">• <i>h<sub>c</sub></i> (unités: cm): la plus grande dimension de la section transversale du poteau</div>
    </div>
</section>

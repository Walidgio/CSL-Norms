<section id="rpa-p111" class="rpa-page rpa-scroll-spy-section">
    <div class="rpa-header">
        <span>7.4 Spécifications pour les poteaux</span>
        <span>111</span>
    </div>

    <div class="rpa-bullet mt-2">• <i>V<sub>u</sub></i> : effort tranchant de calcul</div>
    <div class="rpa-bullet mt-2">• <i>h<sub>c</sub></i> : hauteur totale de la section brute dans la direction considérée</div>
    <div class="rpa-bullet mt-2">• <i>f<sub>e</sub></i> : contrainte limite élastique de l'acier d'armature transversale</div>
    <div class="rpa-bullet mt-2">• <i>&rho;<sub>a</sub></i> : coefficient correcteur qui tient compte du mode fragile de la rupture, par effort tranchant; il est pris égal à 2.50, si l'élancement géométrique <i>&lambda;<sub>g</sub></i> dans la direction considérée est supérieur ou égal à 5, et égal à 3.75, dans le cas contraire.</div>
    <div class="rpa-bullet mt-2">• <i>t</i> : espacement des armatures transversales (cf. <a href="#rpa-fig-7.5" class="rpa-link">Figure (7.5)</a>) dont la valeur est déterminée par <a href="#rpa-eqt-7.3" class="rpa-link">Eqn. (7.3)</a>. Par ailleurs, la valeur maximale de cet espacement est fixée comme suit:</div>
    
    <div class="rpa-indent-2">- dans la zone nodale (zone critique):</div>
    
    <div class="rpa-equation-container" style="margin-top: 15px;">
        <div class="rpa-equation" style="text-align: left; padding-left: 80px;">
            <div class="rpa-system">
                <span class="rpa-system-brace">{</span>
                <div class="rpa-system-lines">
                    <div style="margin-bottom: 10px;">t &le; Min(10&phi;<sub>l</sub> ; 12.5 cm) : en zones I, II et III</div>
                    <div>t &le; Min(b<sub>0</sub>/3 ; 10 cm ; 6&phi;<sub>l</sub>) : en zones IV, V et VI</div>
                </div>
            </div>
        </div>
        <div class="rpa-eq-num"></div>
    </div>
    
    <div class="rpa-indent-2 mt-2">
        avec <i>b<sub>0</sub></i>: dimension minimale du noyau béton (à l'intérieur des armatures de confinement)
    </div>
    
    <div class="rpa-indent-2 mt-2">- dans la zone courante :</div>
    
    <div class="rpa-equation-container" style="margin-top: 15px;">
        <div class="rpa-equation" style="text-align: left; padding-left: 80px;">
            <div class="rpa-system">
                <span class="rpa-system-brace">{</span>
                <div class="rpa-system-lines">
                    <div style="margin-bottom: 10px;">t' &le; 15&phi;<sub>l</sub> : en zones I, II et III</div>
                    <div>t' &le; Min(b<sub>c</sub>/2 ; h<sub>c</sub>/2 ; 10&phi;<sub>l</sub>) : en zones IV, V et VI</div>
                </div>
            </div>
        </div>
        <div class="rpa-eq-num"></div>
    </div>
    
    <div class="rpa-indent-2 mt-2">
        où: <i>&phi;<sub>l</sub></i> est le diamètre minimal des armatures longitudinales du poteau.
    </div>
    
    <div class="rpa-bullet mt-4">• La quantité d'armatures transversales minimale (<span class="rpa-fraction"><span class="rpa-fraction-top">A<sub>t</sub></span><span class="rpa-fraction-bottom">t.b<sub>c</sub></span></span>) en % est donnée comme suit:</div>
    
    <div class="rpa-equation-container" style="margin-top: 15px;">
        <div class="rpa-equation" style="text-align: left; padding-left: 40px;">
            <div class="rpa-system">
                <span class="rpa-system-brace">{</span>
                <div class="rpa-system-lines">
                    <div style="margin-bottom: 5px;">0.3% si : &lambda;<sub>g</sub> &ge; 5</div>
                    <div style="margin-bottom: 5px;">0.8% si : &lambda;<sub>g</sub> &le; 3</div>
                    <div>interpoler entre les 2 valeurs limites précédentes si : 3 &lt; &lambda;<sub>g</sub> &lt; 5</div>
                </div>
            </div>
        </div>
        <div class="rpa-eq-num"></div>
    </div>
    
    <div style="margin-top: 15px;">
        où: <i>&lambda;<sub>g</sub></i> est l'élancement géométrique du poteau:
    </div>
    
    <div class="rpa-equation-container" id="rpa-eqt-7.4" style="margin-top: 15px;">
        <div class="rpa-equation" style="text-align: left; padding-left: 40px;">
            &lambda;<sub>g</sub> = (<span class="rpa-fraction"><span class="rpa-fraction-top">l<sub>f</sub></span><span class="rpa-fraction-bottom">h<sub>c</sub></span></span> ou <span class="rpa-fraction"><span class="rpa-fraction-top">l<sub>f</sub></span><span class="rpa-fraction-bottom">b<sub>c</sub></span></span>)
        </div>
        <div class="rpa-eq-num">(7.4)</div>
    </div>
    
    <div style="margin-top: 15px;">
        où :<br>
        <i>h<sub>c</sub>, b<sub>c</sub></i>: dimensions de la section droite du poteau, dans la direction de déformation considérée;<br>
        <i>l<sub>f</sub></i>: longueur de flambement du poteau.
    </div>

    <p style="text-indent: 20px; text-align: justify; margin-top: 20px;">
        Les cadres et les étriers doivent être fermés par des crochets à 135°, ayant une longueur droite de (10 <i>&phi;<sub>t</sub></i>) minimum.
    </p>
    <p style="text-indent: 20px; text-align: justify;">
        Les cadres et les étriers doivent ménager des cheminées verticales en nombre et diamètre suffisants (<i>&phi;</i> cheminées > 12cm) pour permettre une vibration correcte du béton sur toute la hauteur des poteaux.
    </p>
    <p style="text-indent: 20px; text-align: justify;">
        Par ailleurs, en cas d'utilisation de poteaux circulaires, il y a lieu d'utiliser des cerces droites individuelles (les cerces hélicoïdales continues sont interdites).
    </p>

    <div id="rpa-art-7.4.3" style="scroll-margin-top: 100px;">
        <div class="rpa-h3" style="color: #d97706; margin-top: 40px;">7.4.3 <span class="text-gray-900 dark:text-gray-100">Vérification spécifiques</span></div>
        <div class="rpa-h2-black">Sollicitations normales</div>
        <p style="text-align: justify;">
            Outre les vérifications prescrites par le C.B.A et dans le but d'éviter ou limiter le risque de rupture fragile sous sollicitations d'ensemble dues au séisme, l'effort normal de compression de calcul des poteaux est limité par la condition suivante :
        </p>

        <div class="rpa-equation-container" id="rpa-eqt-7.5" style="margin-top: 20px;">
            <div class="rpa-equation" style="text-align: left; padding-left: 60px;">
                (<a href="#rpa-eqt-7.5" class="rpa-link">v</a> = <span class="rpa-fraction"><span class="rpa-fraction-top">N<sub>d</sub></span><span class="rpa-fraction-bottom">B<sub>c</sub>.f<sub>c28</sub></span></span>) &le; 0.35
            </div>
            <div class="rpa-eq-num">(7.5)</div>
        </div>
    </div>
</section>

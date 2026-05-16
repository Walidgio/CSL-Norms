<section id="rpa-p111" class="rpa-page rpa-scroll-spy-section" data-annotatable="true">
    <div class="rpa-header-meta flex flex-wrap items-start justify-between gap-2 text-sm mb-6 border-b border-black/90 dark:border-slate-500 pb-2">
        <span class="tabular-nums font-semibold text-slate-700 dark:text-slate-300">111</span>
        <div class="text-right max-w-[min(100%,28rem)] space-y-0.5">
            @include('norms::codes.rpa.rpa2024.partials.ch7-running-meta')
        </div>
    </div>
    <div class="rpa-bullet">&bull; <i>V<sub>u</sub></i> : effort tranchant de calcul</div>
    <div class="rpa-bullet">&bull; <i>h<sub>e</sub></i> : hauteur totale de la section brute dans la direction consid&eacute;r&eacute;e</div>
    <div class="rpa-bullet">&bull; <i>f<sub>e</sub></i> : contrainte limite &eacute;lastique de l&rsquo;acier d&rsquo;armature transversale</div>
    <div class="rpa-bullet">&bull; <i>&rho;<sub>a</sub></i> : coefficient correcteur qui tient compte du mode fragile de la rupture, par effort tranchant ; il est pris &eacute;gal &agrave; 2,50, si l&rsquo;&eacute;lancement g&eacute;om&eacute;trique &lambda;<sub>g</sub> dans la direction consid&eacute;r&eacute;e est sup&eacute;rieur ou &eacute;gal &agrave; 5, et &eacute;gal &agrave; 3,75, dans le cas contraire.</div>
    <div class="rpa-bullet">&bull; <i>t</i> : espacement des armatures transversales (cf. <a href="#rpa-fig-7.5" class="rpa-link">Figure (7.5)</a>) dont la valeur est d&eacute;termin&eacute;e par Eqn. (7.3). Par ailleurs, la valeur maximale de cet espacement est fix&eacute;e comme suit :</div>
    
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
        avec <i>b<sub>0</sub></i> : dimension minimale du noyau b&eacute;ton (&agrave; l&rsquo;int&eacute;rieur des armatures de confinement)
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
        ou: &phi;<sub>l</sub> est le diamètre minimal des armatures longitudinales du poteau.
    </div>
    
    <div class="rpa-bullet">&bull; La quantité d'armatures transversales minimale (t.t) en % est donnée comme suit:</div>
    
    <div class="rpa-equation-container" style="margin-top: 15px;">
        <div class="rpa-equation" style="text-align: left; padding-left: 40px;">
            <div class="rpa-system">
                <span class="rpa-system-brace">{</span>
                <div class="rpa-system-lines">
                    <div style="margin-bottom: 5px;">0.3% si : &lambda;<sub>g</sub> &ge; 5</div>
                    <div style="margin-bottom: 5px;">0.8% si : &lambda;<sub>g</sub> &le; 3</div>
                    interpoler entre les 2 valeurs limites pr&eacute;c&eacute;dentes si : 3 &lt; &lambda;<sub>g</sub> &lt; 5
                </div>
            </div>
        </div>
        <div class="rpa-eq-num"></div>
    </div>
    
    <p class="mt-4">ou : &lambda;<sub>g</sub> est l&rsquo;&eacute;lancement g&eacute;om&eacute;trique du poteau :</p>

    <div class="rpa-equation-container" id="rpa-eqt-7.4" style="margin-top: 15px;">
        <div class="rpa-equation" style="text-align: left; padding-left: 40px;">
            &lambda;<sub>g</sub> = (<span class="rpa-fraction"><span class="rpa-fraction-top">l<sub>f</sub></span><span class="rpa-fraction-bottom">h<sub>c</sub></span></span> ou <span class="rpa-fraction"><span class="rpa-fraction-top">l<sub>f</sub></span><span class="rpa-fraction-bottom">b<sub>c</sub></span></span>)
        </div>
        <div class="rpa-eq-num">(7.4)</div>
    </div>
    
    <div style="margin-top: 15px;">
        o&ugrave; :<br>
        <i>h<sub>e</sub></i>, <i>b<sub>e</sub></i> : dimensions de la section droite du poteau, dans la direction de d&eacute;formation consid&eacute;r&eacute;e ;
        <i>l<sub>f</sub></i>: longueur de flambement du poteau.
    </div>

    <p style="text-indent: 20px; text-align: justify; margin-top: 20px;">
        Les cadres et les &eacute;triers doivent &ecirc;tre ferm&eacute;s par des crochets &agrave; 135&deg;, ayant une longueur droite de (10&nbsp;&phi;<sub>l</sub>) minimum.
    </p>
    <p style="text-indent: 20px; text-align: justify;">
        Les cadres et les &eacute;triers doivent m&eacute;nager des chemin&eacute;es verticales en nombre et diam&egrave;tre suffisants (&phi;<sub>chemin&eacute;es</sub> &gt; 12&nbsp;cm) pour permettre une vibration correcte du b&eacute;ton sur toute la hauteur des poteaux.
    </p>
    <p style="text-indent: 20px; text-align: justify;">
        Par ailleurs, en cas d&rsquo;utilisation de poteaux circulaires, il y a lieu d&rsquo;utiliser des cerces droites individuelles (les cerces h&eacute;lico&iuml;dales continues sont interdites)
    </p>

    <div id="rpa-art-7.4.3" style="scroll-margin-top: 100px;">
        <div class="rpa-h3">7.4.3 <span class="text-gray-900 dark:text-gray-100">V&eacute;rification spécifiques</span></div>
        <div class="rpa-h2-black">Sollicitations normales</div>
        <p style="text-align: justify;">
            Outre les vérifications prescrites par le C.B.A et dans le but d'éviter ou limiter le risque de rupture fragile sous sollicitations d'ensemble dues au sisme, l'effort normal de compression de calcul des poteaux est limit&eacute; par la condition suivante :
        </p>

        <div class="rpa-equation-container" id="rpa-eqt-7.5" style="margin-top: 20px;">
            <div class="rpa-equation" style="text-align: left; padding-left: 60px;">
                (<a href="#rpa-eqt-7.5" class="rpa-link">&nu;</a> = <span class="rpa-fraction"><span class="rpa-fraction-top">N<sub>d</sub></span><span class="rpa-fraction-bottom">B<sub>c</sub>.f<sub>c28</sub></span></span>) &le; 0.35
            </div>
            <div class="rpa-eq-num">(7.5)</div>
        </div>
    </div>
</section>

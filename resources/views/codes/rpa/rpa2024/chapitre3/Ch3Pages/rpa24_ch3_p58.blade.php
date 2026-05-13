{{-- ==================== PAGE 58 ==================== --}}
<section id="rpa-p58" class="rpa-page rpa-scroll-spy-section" data-annotatable="true">
    <div class="rpa-header-meta flex flex-wrap items-start justify-between gap-2 text-sm mb-6 border-b border-black/90 dark:border-slate-500 pb-2">
        <span class="tabular-nums font-semibold text-slate-700 dark:text-slate-300">58</span>
        <div class="text-right max-w-[min(100%,28rem)] space-y-0.5">
        @include('norms::codes.rpa.rpa2024.chapitre3.partials.ch3-running-meta')
    </div>
    </div>

    <div id="rpa-art-3.3.4" class="mt-8">
        <h3 class="rpa-h3">3.3.4 Représentation temporelle de l'action sismique</h3>
        <p style="text-align: justify;">
            Le mouvement sismique peut également être représenté par une accélération du sol fonction du temps ou par des grandeurs associées (vitesse et/ou déplacement).
        </p>
        <p style="text-align: justify;" class="mt-2">
            Lorsqu'un modèle spatial de la structure est exigé, le mouvement sismique doit consister en trois accélérogrammes agissant dans les 03 directions (E-O, N-S et Ver) simultanément. Le même accélérogramme ne peut pas être utilisé simultanément pour les deux directions horizontales orthogonales. En fonction de la nature de l'application et des informations disponibles, la description du mouvement sismique peut être fondée sur l'utilisation d'accélérogrammes artificiels ou d'accélérogrammes enregistrés ou simulés.
        </p>

        <h4 class="font-bold underline mt-6">Accélérogrammes artificiels</h4>
        <p style="text-align: justify;">
            La série d'accélérogrammes artificiels doit être établie de manière à correspondre aux spectres de réponse élastique cibles donnés en § 3.3.1 pour <i>&xi;</i> = 5 %.
        </p>
        <p style="text-align: justify;" class="mt-2">
            La durée des accélérogrammes doit être compatible avec la magnitude et la classe de site servant à la définition de A (cf. <a href="#rpa-table-3.10" class="rpa-inline-link">Tableau (3.10)</a>).
        </p>
        <p class="mt-2">La suite d'accélérogrammes artificiels doit respecter les règles suivantes, i.e. :</p>
        <div class="rpa-indent mt-2 space-y-2">
            <div class="flex gap-2">
                <span class="font-bold whitespace-nowrap">a)</span>
                <p style="text-align: justify;">utiliser un minimum de sept (07) accélérogrammes: la réponse moyenne doit être prise en compte pour estimer les effets de l'action sismique ;</p>
            </div>
            <div class="flex gap-2">
                <span class="font-bold whitespace-nowrap">b)</span>
                <p style="text-align: justify;">la moyenne des valeurs de l'accélération spectrale à période nulle (calculée à partir des accélérogrammes) ne doit pas être inférieure à la valeur de (<i>A.I.S</i>), pour le site en question ;</p>
            </div>
            <div class="flex gap-2">
                <span class="font-bold whitespace-nowrap">c)</span>
                <p style="text-align: justify;">dans le domaine des périodes comprises entre (0.2<i>T<sub>0</sub></i>) et (2<i>T<sub>0</sub></i>), où <i>T<sub>0</sub></i> est la période fondamentale de la structure dans la direction suivant laquelle l'accélérogramme va être appliqué, il convient qu'aucune valeur du spectre de réponse élastique moyen avec <i>&xi;</i> = 5%, calculé à partir de tous les accélérogrammes, ne soit inférieure à 90 % de la valeur correspondante du spectre de réponse élastique cible avec <i>&xi;</i> = 5% ;</p>
            </div>
            <div class="flex gap-2">
                <span class="font-bold whitespace-nowrap">d)</span>
                <p style="text-align: justify;">dans le même intervalle de périodes, il convient qu'aucune valeur, du spectre de réponse élastique avec <i>&xi;</i> = 5% calculé pour chaque accélérogramme, ne soit inférieure à 50 % de la valeur correspondante du spectre de réponse élastique cible avec <i>&xi;</i> = 5%.</p>
            </div>
        </div>

        <h4 class="font-bold underline mt-6">Accélérogrammes enregistrés</h4>
        <p style="text-align: justify;">
            Les accélérogrammes enregistrés, disponibles à partir de bases de données qualifiées sur les mouvements forts, devraient être la représentation privilégiée de l'action sismique pour les analyses dans le domaine temporel.
        </p>
        <p style="text-align: justify;" class="mt-2">
            Des accélérogrammes enregistrés ou des accélérogrammes élaborés à partir d'une simulation physique des mécanismes à la source et de propagation des ondes, peuvent être utilisés à condition qu'ils tiennent compte, du mieux possible, de l'environnement tectonique régional, de la magnitude du séisme, de la distance source-site ainsi que des conditions du sol du site. Les exigences citées en (cf. § 3.3.4) doivent être observées.
        </p>
        <p style="text-align: justify;" class="mt-2">
            Les accélérogrammes enregistrés doivent être calés à la valeur (A.I.S) pour le site considéré. Le facteur d'échelle ne doit être ni supérieur à 2, ni inférieur à 0.5.
        </p>
        <p style="text-align: justify;" class="mt-2">
            Si les trois (03) composantes du mouvement sismique sont nécessaires: par exemple, dans le cas d'un modèle structurel 3D, les deux composantes horizontales et la composante verticale doivent être du même enregistrement.
        </p>

        <h4 class="font-bold underline mt-6">Modèle spatial de l'action sismique</h4>
        <p style="text-align: justify;">
            Pour les structures ayant des caractéristiques particulières telles qu'il n'est pas raisonnable d'admettre l'hypothèse d'une excitation identique à tous les points d'appui, des modèles spatiaux de l'action sismique doivent être utilisés.
        </p>
        <p style="text-align: justify;" class="mt-2">
            Ces modèles spatiaux doivent être en concordance avec les spectres de réponse élastique utilisés pour la définition de base de l'action sismique conformément à § 3.3.1 et 3.3.3.
        </p>
    </div>
</section>

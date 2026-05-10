<div class="rpa-svg-container py-4 flex flex-wrap justify-around items-end">
    <!-- Case 1 -->
    <div class="text-center">
        <svg width="120" height="120" viewBox="0 0 120 120" xmlns="http://www.w3.org/2000/svg">
            <path d="M 20 20 H 100 V 40 H 110 V 80 H 100 V 100 H 20 V 80 H 10 V 40 H 20 Z" fill="none" stroke="black" stroke-width="1.5"/>
            <!-- Grid points -->
            @for ($i = 20; $i <= 100; $i += 20)
                @for ($j = 20; $j <= 100; $j += 20)
                    <rect x="{{ $i - 2 }}" y="{{ $j - 2 }}" width="4" height="4" fill="black"/>
                @endfor
            @endfor
            <!-- Dimensions -->
            <line x1="10" y1="110" x2="110" y2="110" stroke="black"/>
            <text x="60" y="118" font-size="10" text-anchor="middle">L</text>
            <text x="12" y="60" font-size="8">l1</text>
            <text x="102" y="60" font-size="8">l2</text>
        </svg>
        <div class="mt-2">
            <math xmlns="http://www.w3.org/1998/Math/MathML">
                <mfrac><mrow><msub><mi>l</mi><mn>1</mn></msub><mo>+</mo><msub><mi>l</mi><mn>2</mn></msub></mrow><mi>L</mi></mfrac><mo>&le;</mo><mn>0.25</mn>
            </math>
        </div>
    </div>

    <!-- Case 2 -->
    <div class="text-center">
        <svg width="120" height="120" viewBox="0 0 120 120" xmlns="http://www.w3.org/2000/svg">
            <path d="M 20 20 H 60 V 40 H 100 V 100 H 20 Z" fill="none" stroke="black" stroke-width="1.5"/>
            @for ($i = 20; $i <= 80; $i += 20)
                @for ($j = 20; $j <= 100; $j += 20)
                    @if (!($i > 60 && $j < 40))
                        <rect x="{{ $i - 2 }}" y="{{ $j - 2 }}" width="4" height="4" fill="black"/>
                    @endif
                @endfor
            @endfor
            <line x1="20" y1="110" x2="100" y2="110" stroke="black"/>
            <text x="60" y="118" font-size="10" text-anchor="middle">L</text>
            <text x="62" y="30" font-size="8">l1</text>
            <text x="105" y="60" font-size="8">l2</text>
        </svg>
        <div class="mt-2">
            <math xmlns="http://www.w3.org/1998/Math/MathML">
                <mfrac><mrow><msub><mi>l</mi><mn>1</mn></msub><mo>+</mo><msub><mi>l</mi><mn>2</mn></msub></mrow><mi>L</mi></mfrac><mo>&le;</mo><mn>0.25</mn>
            </math>
        </div>
    </div>

    <!-- Case 3 (Aspect ratio) -->
    <div class="text-center">
        <svg width="150" height="120" viewBox="0 0 150 120" xmlns="http://www.w3.org/2000/svg">
            <path d="M 20 20 H 100 V 40 H 120 V 100 H 20 Z" fill="none" stroke="black" stroke-width="1.5"/>
            @for ($i = 20; $i <= 100; $i += 20)
                @for ($j = 20; $j <= 100; $j += 20)
                    <rect x="{{ $i - 2 }}" y="{{ $j - 2 }}" width="4" height="4" fill="black"/>
                @endfor
            @endfor
            <!-- e_x, e_y -->
            <line x1="120" y1="40" x2="120" y2="100" stroke="black" stroke-dasharray="2 1"/>
            <text x="125" y="70" font-size="8">ey</text>
            <line x1="100" y1="40" x2="120" y2="40" stroke="black" stroke-dasharray="2 1"/>
            <text x="110" y="35" font-size="8">ex</text>
            
            <line x1="20" y1="110" x2="120" y2="110" stroke="black"/>
            <text x="70" y="118" font-size="10" text-anchor="middle">Lx</text>
            
            <line x1="10" y1="20" x2="10" y2="100" stroke="black"/>
            <text x="8" y="60" font-size="10" transform="rotate(-90 8 60)" text-anchor="middle">Ly</text>
        </svg>
        <div class="mt-2 space-y-1">
            <div class="text-xs">
                <math xmlns="http://www.w3.org/1998/Math/MathML">
                    <mfrac><msub><mi>l</mi><mi>x</mi></msub><msub><mi>L</mi><mi>x</mi></msub></mfrac><mo>&le;</mo><mn>0.25</mn>
                </math>
            </div>
            <div class="text-xs">
                <math xmlns="http://www.w3.org/1998/Math/MathML">
                    <mfrac><msub><mi>l</mi><mi>y</mi></msub><msub><mi>L</mi><mi>y</mi></msub></mfrac><mo>&le;</mo><mn>0.25</mn>
                </math>
            </div>
            <div class="mt-2">
                <math xmlns="http://www.w3.org/1998/Math/MathML">
                    <mn>0.25</mn><mo>&le;</mo><mfrac><msub><mi>L</mi><mi>x</mi></msub><msub><mi>L</mi><mi>y</mi></msub></mfrac><mo>&le;</mo><mn>4</mn>
                </math>
            </div>
        </div>
    </div>
</div>

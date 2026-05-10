<div class="rpa-svg-container py-4 flex flex-wrap justify-around items-end">
    <!-- Step Pyramid -->
    <div class="text-center">
        <svg width="120" height="150" viewBox="0 0 120 150" xmlns="http://www.w3.org/2000/svg">
            <rect x="20" y="120" width="80" height="10" fill="none" stroke="black"/>
            <rect x="25" y="100" width="70" height="20" fill="none" stroke="black"/>
            <rect x="30" y="80" width="60" height="20" fill="none" stroke="black"/>
            <rect x="35" y="60" width="50" height="20" fill="none" stroke="black"/>
            <rect x="40" y="40" width="40" height="20" fill="none" stroke="black"/>
            <!-- ground -->
            <line x1="10" y1="130" x2="110" y2="130" stroke="black" stroke-width="2"/>
            @for ($i = 10; $i <= 110; $i += 5)
                <line x1="{{ $i }}" y1="130" x2="{{ $i - 3 }}" y2="135" stroke="black"/>
            @endfor
            <!-- labels -->
            <line x1="20" y1="140" x2="100" y2="140" stroke="black"/>
            <text x="60" y="148" font-size="10" text-anchor="middle">B</text>
            <text x="85" y="45" font-size="8">BM</text>
            <text x="95" y="85" font-size="8">Bi</text>
            <text x="95" y="105" font-size="8">Bi-1</text>
        </svg>
        <div class="mt-2 text-xs space-y-1">
            <math xmlns="http://www.w3.org/1998/Math/MathML">
                <mfrac><msub><mi>B</mi><mi>M</mi></msub><mi>B</mi></mfrac><mo>&ge;</mo><mn>0.67</mn>
            </math>
            <br>
            <math xmlns="http://www.w3.org/1998/Math/MathML">
                <mfrac><msub><mi>B</mi><mi>i</mi></msub><msub><mi>B</mi><mrow><mi>i</mi><mo>-</mo><mn>1</mn></mrow></msub></mfrac><mo>&ge;</mo><mn>0.80</mn>
            </math>
        </div>
    </div>

    <!-- Tower -->
    <div class="text-center">
        <svg width="120" height="150" viewBox="0 0 120 150" xmlns="http://www.w3.org/2000/svg">
            <rect x="30" y="30" width="60" height="100" fill="none" stroke="black"/>
            <line x1="30" y1="50" x2="90" y2="50" stroke="black" stroke-dasharray="2 1"/>
            <line x1="30" y1="70" x2="90" y2="70" stroke="black" stroke-dasharray="2 1"/>
            <line x1="30" y1="90" x2="90" y2="90" stroke="black" stroke-dasharray="2 1"/>
            <!-- ground -->
            <line x1="10" y1="130" x2="110" y2="130" stroke="black" stroke-width="2"/>
            @for ($i = 10; $i <= 110; $i += 5)
                <line x1="{{ $i }}" y1="130" x2="{{ $i - 3 }}" y2="135" stroke="black"/>
            @endfor
            <!-- Labels -->
            <line x1="30" y1="140" x2="90" y2="140" stroke="black"/>
            <text x="60" y="148" font-size="10" text-anchor="middle">B</text>
            <text x="20" y="80" font-size="10">B'</text>
            
            <line x1="100" y1="30" x2="100" y2="130" stroke="black"/>
            <text x="110" y="80" font-size="10" transform="rotate(-90 110 80)" text-anchor="middle">H</text>
            
            <line x1="90" y1="110" x2="105" y2="110" stroke="black"/>
            <text x="105" y="115" font-size="10">H/6</text>
        </svg>
        <div class="mt-2 text-xs">
            <math xmlns="http://www.w3.org/1998/Math/MathML">
                <mfrac><mi>B'</mi><mi>B</mi></mfrac><mo>&ge;</mo><mn>0.67</mn>
            </math>
        </div>
    </div>

    <!-- Setback Pyramid -->
    <div class="text-center">
        <svg width="120" height="150" viewBox="0 0 120 150" xmlns="http://www.w3.org/2000/svg">
            <path d="M 20 130 V 80 H 30 V 40 H 90 V 80 H 100 V 130 Z" fill="none" stroke="black" stroke-width="1.5"/>
            <line x1="30" y1="60" x2="90" y2="60" stroke="black" stroke-dasharray="2 1"/>
            <line x1="20" y1="100" x2="100" y2="100" stroke="black" stroke-dasharray="2 1"/>
            <!-- ground -->
            <line x1="10" y1="130" x2="110" y2="130" stroke="black" stroke-width="2"/>
            @for ($i = 10; $i <= 110; $i += 5)
                <line x1="{{ $i }}" y1="130" x2="{{ $i - 3 }}" y2="135" stroke="black"/>
            @endfor
            <!-- labels -->
            <line x1="20" y1="140" x2="100" y2="140" stroke="black"/>
            <text x="60" y="148" font-size="10" text-anchor="middle">B</text>
            <text x="95" y="45" font-size="8">BM</text>
            <text x="105" y="85" font-size="8">Bi</text>
            <text x="105" y="105" font-size="8">Bi-1</text>
        </svg>
        <div class="mt-2 text-xs space-y-1">
            <math xmlns="http://www.w3.org/1998/Math/MathML">
                <mfrac><msub><mi>B</mi><mi>M</mi></msub><mi>B</mi></mfrac><mo>&ge;</mo><mn>0.67</mn>
            </math>
            <br>
            <math xmlns="http://www.w3.org/1998/Math/MathML">
                <mfrac><msub><mi>B</mi><mi>i</mi></msub><msub><mi>B</mi><mrow><mi>i</mi><mo>-</mo><mn>1</mn></mrow></msub></mfrac><mo>&ge;</mo><mn>0.80</mn>
            </math>
        </div>
    </div>
</div>

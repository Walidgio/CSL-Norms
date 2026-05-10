<?php

namespace CivilSoftLab\Norms\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NormsController extends Controller
{
    /**
     * Display the norms landing page.
     */
    public function index()
    {
        $codes = $this->getCodesRegistry();
        return view('norms::index', compact('codes'));
    }

    /**
     * Display a specific norm version.
     */
    public function show(Request $request, string $slug)
    {
        $codes = $this->getCodesRegistry();
        
        $current = null;
        $currentFamily = null;
        
        foreach ($codes as $family) {
            foreach ($family['versions'] as $version) {
                if ($version['slug'] === $slug) {
                    $current = $version;
                    $currentFamily = $family;
                    break 2;
                }
            }
        }

        if (!$current) {
            abort(404);
        }

        // Determine default view mode
        $viewMode = $request->query('view', $current['html'] ? 'html' : 'pdf');

        return view('norms::index', compact('codes', 'current', 'currentFamily', 'viewMode'));
    }

    /**
     * Centralized registry of all supported building codes.
     */
    private function getCodesRegistry(): array
    {
        return [
            [
                'family' => 'BAEL',
                'slug' => 'bael',
                'full_name' => 'Béton Armé aux États Limites',
                'color' => 'blue',
                'icon' => '📐',
                'versions' => [
                    ['slug' => 'bael91_official', 'name' => 'BAEL 91 (Officiel)', 'year' => 1991, 'pdf' => true, 'pdf_file' => 'bael/BAEL91.pdf', 'html' => false],
                    ['slug' => 'bael91_99', 'name' => 'BAEL 91 rev 99', 'year' => 1999, 'pdf' => true, 'pdf_file' => 'bael/Bael_91_rev_99.pdf', 'html' => false],
                ],
            ],
            [
                'family' => 'CBA',
                'slug' => 'cba',
                'full_name' => 'Code du Béton Armé',
                'color' => 'emerald',
                'icon' => '🧱',
                'versions' => [
                    ['slug' => 'cba93', 'name' => 'CBA 93 (DTR BC 2.41)', 'year' => 1993, 'pdf' => true, 'pdf_file' => 'cba/DTR_BC_2_41_Regles_de_conception_et_de_calcul_des_structures_en_beton_arme_CBA_93.pdf', 'html' => false],
                    ['slug' => 'banche97', 'name' => 'Béton Banché (DTR BC 2.42)', 'year' => 1997, 'pdf' => true, 'pdf_file' => 'cba/DTR_BC_2_42_Regles_de_conception_et_de_calcul_des_parois_et_murs_en_beton_banche_Version_97.pdf', 'html' => false],
                    ['slug' => 'execution_ba', 'name' => 'Exécution Béton Armé (DTR BE 2.1)', 'year' => 2000, 'pdf' => true, 'pdf_file' => 'cba/DTR_BE_2_1_Regles_d_execution_des_travaux_de_construction_d_ouvrages_en_beton_arme.pdf', 'html' => false],
                ],
            ],
            [
                'family' => 'Eurocode 8',
                'slug' => 'ec8',
                'full_name' => 'EN 1998 — Calcul Sismique',
                'color' => 'rose',
                'icon' => '📉',
                'versions' => [
                    ['slug' => 'Eurocode8v2004', 'name' => 'EN 1998-1:2004', 'year' => 2004, 'pdf' => true, 'pdf_file' => 'eurocode/NF_EN_1998_1_Eurocode_8_Calcul_des_structures_pour_leur_resistance_aux_seismes.pdf', 'html' => false],
                ],
            ],
            [
                'family' => 'Structures Bois',
                'slug' => 'dtr-wood',
                'full_name' => 'DTR — Structures en Bois',
                'color' => 'amber',
                'icon' => '🪵',
                'versions' => [
                    ['slug' => 'wood_dtr', 'name' => 'Conception Bois (DTR C 2.4.6)', 'year' => 2005, 'pdf' => true, 'pdf_file' => 'dtr/DTR_C_2_4_6_Regles_de_conception_et_de_calcul_des_structures_en_bois.pdf', 'html' => false],
                ],
            ],
            [
                'family' => 'Charges & Climatiques',
                'slug' => 'dtr-loads',
                'full_name' => 'DTR — Actions & Climatiques',
                'color' => 'cyan',
                'icon' => '🌬️',
                'versions' => [
                    ['slug' => 'dtr_bc_22', 'name' => 'Charges Permanentes (DTR BC 2.2)', 'year' => 1988, 'pdf' => true, 'pdf_file' => 'dtr/DTR_BC_2_2_Charges_Permanentes_et_Charges_d_Exploitation.pdf', 'html' => false],
                    ['slug' => 'rnv2013', 'name' => 'Neige et Vent (RNV 2013)', 'year' => 2013, 'pdf' => true, 'pdf_file' => 'dtr/DTR_C_2_47_Reglement_Neige_et_Vent_version_2013.pdf', 'html' => false],
                ],
            ],
            [
                'family' => 'RPA',
                'slug' => 'rpa',
                'full_name' => 'Règlement Parasismique Algérien',
                'color' => 'orange',
                'icon' => '🏗️',
                'versions' => [
                    ['slug' => 'rpa99v2003', 'name' => 'RPA 99 (v2003)', 'year' => 2003, 'pdf' => true, 'pdf_file' => 'rpa/RPA99_VERSION_2003.pdf', 'html' => false],
                    ['slug' => 'rpa2024_dtr', 'name' => 'DTR BC 2.48 (RPA 2024) — DRAFT', 'year' => 2024, 'pdf' => true, 'pdf_file' => 'rpa/DTR_BC_2_48_Regles_Parasismiques_Algeriennes_RPA_2024_DRAFT.pdf', 'html' => false],
                    ['slug' => 'rpa2024', 'name' => 'RPA 2024 (Version Finale)', 'year' => 2024, 'pdf' => true, 'pdf_file' => 'rpa/RPA2024_Version_Finale.pdf', 'html' => true],
                ],
            ],
            [
                'family' => 'ACI',
                'slug' => 'aci',
                'full_name' => 'American Concrete Institute',
                'color' => 'blue',
                'icon' => '🇺🇸',
                'versions' => [
                    ['slug' => 'aci2019_arabic', 'name' => 'ACI 318-19 (Arabic)', 'year' => 2019, 'pdf' => true, 'pdf_file' => 'ACI/ACI_2019 Arabic.pdf', 'html' => false],
                    ['slug' => 'aci318_19', 'name' => 'ACI 318-19', 'year' => 2019, 'pdf' => true, 'pdf_file' => 'ACI/ACI 318-19.pdf', 'html' => false],
                    ['slug' => 'aci318m_25', 'name' => 'ACI 318M-25 (SI Metric)', 'year' => 2025, 'pdf' => true, 'pdf_file' => 'ACI/ACI 318M-25 (SI Units - Metric Version)  (1).pdf', 'html' => false],
                ],
            ],
        ];
    }
}

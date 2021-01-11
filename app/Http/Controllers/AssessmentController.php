<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Mail;
use App\Services\AssessmentService;
use App\Mail\ExportAssessment;
use App\Exports\AssessmentExport;

class AssessmentController extends Controller
{   
    /** @var AssessmentService $assessmentService */
    protected $assessmentService;

    /**
     * AssessmentController constructor.
     */
    public function __construct(AssessmentService $assessmentService) 
    {
        $this->assessmentService = $assessmentService;
    }

    public function store(Request $request)
    {
        $data = [
            'sector' => $request->sector,
            'email' => $request->email,
            'average_turnover' => $request->averageTurnover,
            'consecutive_growing_income' => $request->consecutiveGrowingIncome,
            'net_income' => $request->netIncome,
            'net_result' => $request->netResult,
            'consecutive_positive_result' => $request->consecutivePositiveResult,
            'net_financial_debt' => $request->netFinancialDebt,
            'fixed_assets' => $request->fixedAssets,
            'largest_shareholder_percentage' => $request->largestShareholderPercentage,
            'largest_customer_billing' => $request->largestCustomerBilling,
            'company_audited' => $request->companyAudited,
            'operation_merger' => $request->operationMerger,
            'company_selling_percentage' => $request->companySellingPercentage,
            'ebitda_rev' => ($request->averageTurnover == 0 ? $request->averageTurnover : $request->netIncome / $request->averageTurnover),
            'net_margin' => ($request->averageTurnover == 0 ? $request->averageTurnover : $request->netResult / $request->averageTurnover),
            'ebitda_deuda' => ($request->netIncome == 0 ? $request->netIncome : $request->netFinancialDebt / $request->netIncome),
            'asset_revenue_ratio' => ($request->averageTurnover == 0 ? $request->averageTurnover : $request->fixedAssets / $request->averageTurnover),
            'total_score' => 0,
            'decision' => null,
        ];
        
        $remappedData = $this->calculateResult($data);

        $this->assessmentService->create($remappedData['data']);

        $exportData = new AssessmentExport($remappedData);
        
        Mail::to($request->email)->send(new ExportAssessment($exportData));

        return response($remappedData['data']['decision'], Response::HTTP_OK);
    }

    private function calculateResult($data)
    {
        $remappedData = array();
        $remappedData['data'] = $data;

        foreach($data as $key => $item) {
            switch($key) {
                case 'average_turnover': {
                        $remappedData['result'][$key] = ($item >= 1500000 && $item <= 10000000) ? 1 : 0;
                        $remappedData['data']['total_score'] += $remappedData['result'][$key];
                    }
                break;
                case 'consecutive_growing_income': {
                        $remappedData['result'][$key] = ($item >= 3) ? 1 : 0;
                        $remappedData['data']['total_score'] += $remappedData['result'][$key];
                    }
                break;
                case 'net_income': {
                        $remappedData['result'][$key] = ($item >= 150000) ? 1 : -100;
                        $remappedData['data']['total_score'] += $remappedData['result'][$key];
                    }
                break;
                case 'net_result': {
                        $remappedData['result'][$key] = ($item >= 70000) ? 1 : 0;
                        $remappedData['data']['total_score'] += $remappedData['result'][$key];
                    }
                break;
                case 'consecutive_positive_result': {
                        $remappedData['result'][$key] = ($item >= 3) ? 1 : 0;
                        $remappedData['data']['total_score'] += $remappedData['result'][$key];
                    }
                break;
                case 'net_financial_debt': {
                        $remappedData['result'][$key] = ($data['ebitda_deuda'] <= 2 ? 1 : ($data['ebitda_deuda'] > 3 ? -100 : 0));
                        $remappedData['data']['total_score'] += $remappedData['result'][$key];
                    }
                break;
                case 'fixed_assets': {
                        $remappedData['result'][$key] = ($data['asset_revenue_ratio'] <= 1.5) ? 1 : 0;
                        $remappedData['data']['total_score'] += $remappedData['result'][$key];
                    }
                break;
                case 'largest_shareholder_percentage': {
                        $remappedData['result'][$key] = ($item >= 65) ? 1 : 0;
                        $remappedData['data']['total_score'] += $remappedData['result'][$key];
                    }
                break;
                case 'largest_customer_billing': {
                        $remappedData['result'][$key] = ($item <= 40) ? 1 : 0;
                        $remappedData['data']['total_score'] += $remappedData['result'][$key];
                    }
                break;
                case 'company_audited': {
                        $remappedData['result'][$key] = ($item == 1) ? 1 : 0;
                        $remappedData['data']['total_score'] += $remappedData['result'][$key];
                    }
                break;
                case 'operation_merger': {
                        $remappedData['result'][$key] = ($item == 0) ? 1 : 0;
                        $remappedData['data']['total_score'] += $remappedData['result'][$key];
                    }
                break;
                case 'company_selling_percentage': {
                        $remappedData['result'][$key] = ($item == 1) ? 1 : -100;
                        $remappedData['data']['total_score'] += $remappedData['result'][$key];
                    }
                break;
                case 'ebitda_rev': {
                        $remappedData['result'][$key] = ($item >= .07) ? 1 : 0;
                        $remappedData['data']['total_score'] += $remappedData['result'][$key];
                    }
                break;
                case 'net_margin': {
                        $remappedData['result'][$key] = ($item >= .05) ? 1 : 0;
                        $remappedData['data']['total_score'] += $remappedData['result'][$key];
                    }
                break;
            }
        }

        $remappedData['data']['decision'] = ($remappedData['data']['total_score'] >= 10) ? "GO" : "NO-GO";

        return $remappedData;
    }
}

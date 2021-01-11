<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithStrictNullComparison;


class AssessmentExport implements FromCollection, WithHeadings, ShouldAutoSize, WithStrictNullComparison
{
    protected $assessment;
    protected $remappedData;

    public function __construct($assessment)
    {
        $this->assessment = $assessment;
    }

    public function collection()
    {
        $this->remappedData = [
            [
                'title'    => 'Facturación media de los últimos 3 año (en €):',
                'field'    => 'Revenue',
                'value'    => $this->assessment['data']['average_turnover'],
                'result'   => $this->assessment['result']['average_turnover'],
                'blank'    => null,
                'desc'     => 'Total Score',
                'content'  => $this->assessment['data']['total_score'],
            ],
            [
                'title'  => 'Años consecutivos creciendo ingreso:',
                'field'  => 'Years of growth',
                'value'  => $this->assessment['data']['consecutive_growing_income'],
                'result' => $this->assessment['result']['consecutive_growing_income'],
            ],
            [
                'title'    => 'EBITDA media de los últimos 3 años (en €):',
                'field'    => 'Avg. EBITDA last 3 years',
                'value'    => $this->assessment['data']['net_income'],
                'result'   => $this->assessment['result']['net_income'],
                'blank'    => null,
                'desc'     => 'Decision',
                'content'  => $this->assessment['data']['decision'],
            ],
            [
                'title'  => 'Resultado neto medio de los últimos 3 años (en €):',
                'field'  => 'Avg. net result last 3 years',
                'value'  => $this->assessment['data']['net_result'],
                'result' => $this->assessment['result']['net_result'],
            ],
            [
                'title'  => 'Años consecutivos con resultado positivo:',
                'field'  => 'Years with positive net results',
                'value'  => $this->assessment['data']['consecutive_positive_result'],
                'result' => $this->assessment['result']['consecutive_positive_result'],
            ],
            [
                'title'  => 'Deuda financiera neta total (en €):',
                'field'  => 'Net debt',
                'value'  => $this->assessment['data']['net_financial_debt'],
                'result' => $this->assessment['result']['net_financial_debt'],
            ],
            [
                'title'  => 'Total activo inmovilizado (en €):',
                'field'  => 'Fixed assets',
                'value'  => $this->assessment['data']['fixed_assets'],
                'result' => $this->assessment['result']['fixed_assets'],
            ],
            [
                'title'  => '¿Porcentaje de la empresa del mayor accionista?:',
                'field'  => '% biggest shareholder',
                'value'  => $this->assessment['data']['largest_shareholder_percentage'],
                'result' => $this->assessment['result']['largest_shareholder_percentage'],
            ],
            [
                'title'  => 'Porcentaje de facturación que viene del mayor cliente:',
                'field'  => '% revenue from biggest client',
                'value'  => $this->assessment['data']['largest_customer_billing'],
                'result' => $this->assessment['result']['largest_customer_billing'],
            ],
            [
                'title'  => '¿Ha sido auditada la compañía alguna vez?:',
                'field'  => 'Is the company audited? (yes/ no)',
                'value'  => $this->assessment['data']['company_audited'],
                'result' => $this->assessment['result']['company_audited'],
            ],
            [
                'title'  => '¿Operaciones de compra o fusiones en los últimos 5 años?',
                'field'  => 'm&a in the last 5 years? (yes/ no)',
                'value'  => $this->assessment['data']['operation_merger'],
                'result' => $this->assessment['result']['operation_merger'],
            ],
            [
                'title'  => '¿Se quiere vender más del 90% de la compañía?',
                'field'  => 'Selling 90%? (yes/ no)',
                'value'  => $this->assessment['data']['company_selling_percentage'],
                'result' => $this->assessment['result']['company_selling_percentage'],
            ],
            [
                'title'  => null,
                'field'  => null,
                'value'  => null,
                'result' => null,
            ],
            [
                'title'  => 'Calculated fields (not on the website but important for calculations and "Go" or "No-Go" decisions',
                'field'  => 'EBITDA/Rev',
                'value'  => $this->assessment['data']['ebitda_rev'],
                'result' => $this->assessment['result']['ebitda_rev'],
            ],
            [
                'title'  => null,
                'field'  => 'Net margin',
                'value'  => $this->assessment['data']['net_margin'],
                'result' => $this->assessment['result']['net_margin'],
            ],
            [
                'title'  => null,
                'field'  => 'Deuda/EBITDA',
                'value'  => $this->assessment['data']['ebitda_deuda'],
                'result' => null,
            ],
            [
                'title'  => null,
                'field'  => 'Asset to revenue ratio',
                'value'  => $this->assessment['data']['asset_revenue_ratio'],
                'result' => null,
            ],
        ];

        return collect($this->remappedData);
    }
    
    public function headings(): array
    {
        return [
            'Field as shown on the website',
            'Field',
            'Value',
            'Result',
        ];
    }
}

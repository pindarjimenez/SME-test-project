<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Assessment extends Model
{
    use SoftDeletes;
    
    /**
     *
     * @var array
     */
    protected $fillable = [
        'sector',
        'email',
        'average_turnover',
        'consecutive_growing_income',
        'net_income',
        'net_result',
        'consecutive_positive_result',
        'net_financial_debt',
        'fixed_assets',
        'largest_shareholder_percentage',
        'largest_customer_billing',
        'company_audited',
        'operation_merger',
        'company_selling_percentage',
        'ebitda_rev',
        'net_margin',
        'ebitda_deuda',
        'asset_revenue_ratio',
        'total_score',
        'decision',
    ];
}

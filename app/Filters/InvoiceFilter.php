<?php

namespace App\Filters;

use Illuminate\Http\Request;

class InvoiceFilter extends ApiFilter
{
  protected $safeParams = [
    'id' => ['eq'],
    'customer_id' => ['eq'],
    'amount' => ['eq', 'lt', 'gt', 'gte', 'lte'],
    'status' => ['eq', 'ne'],
    'billedDate' => ['eq', 'lt', 'gt', 'gte', 'lte'],
    'paidDate' => ['eq', 'lt', 'gt', 'gte', 'lte'],
  ];

  protected $columnMap = [
    'billedDate' => 'billed_date',
    'paidDate' => 'paid_date'
  ];
}

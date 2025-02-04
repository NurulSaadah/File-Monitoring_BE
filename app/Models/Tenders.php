<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Tenders extends Model
{
    use HasFactory;
    
    protected $table ='tenders';
    protected $primaryKey ='tender_id';
    protected $fillable =['client_id', 'user_id', 'title', 'submission_date', 'submission_price', 'remark', 'tender_requirement', 'technical_doc_path', 'financial_doc_path', 'other_doc_path', 'reference_no',];
}

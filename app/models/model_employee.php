<?php namespace App\models;

use Illuminate\Database\Eloquent\Model;

class model_employee extends Model {
  protected $table = 'employee';
  protected $primaryKey = 'employee_id';
  
  public function __CONSTRUCT() {
    
  }
  public function init() {
    model_employee::all();
  }
  public function fields() {
    
  }
	//

}

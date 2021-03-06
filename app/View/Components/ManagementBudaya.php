<?php

namespace App\View\Components;

use App\Models\CulturalData;
use Illuminate\View\Component;

class ManagementBudaya extends Component
{

  /**
   * Create a new component instance.
   *
   * @return void
   */
  public function __construct()
  {
  }

  /**
   * Get the view / contents that represent the component.
   *
   * @return \Illuminate\Contracts\View\View|\Closure|string
   */
  public function render()
  {
    $culturalData = CulturalData::paginate($perPage = 10, $columns = ['*'], $pageName = 'culture');
    return view('admin.management-budaya', ["dataBudaya" => $culturalData]);
  }
}

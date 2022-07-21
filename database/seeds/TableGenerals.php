<?php

use Illuminate\Database\Seeder;

use Carbon\Carbon as Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\Backend\System\Table\General;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class TableGenerals extends Seeder
{

  public function run()
  {
    $TableGenerals = [
      [
        'name'              => 'Administrator',
        'description'       => 'Description Administrator',
        'created_at'        => Carbon::now(),
      ],
      [
        'name'              => 'Operator',
        'description'       => 'Description Operator',
        'created_at'        => Carbon::now(),
      ],
    ];

    General::insert($TableGenerals);
  }
}

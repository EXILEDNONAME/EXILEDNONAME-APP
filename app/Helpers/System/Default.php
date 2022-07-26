<?php

use Spatie\Activitylog\Models\Activity;

function histories($model) {
  $items = Activity::where('subject_type', $model)->orderBy('created_at', 'desc')->get();
  return $items;
}

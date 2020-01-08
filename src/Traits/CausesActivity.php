<?php

namespace mingjun\Activitylog\Traits;

use mingjun\Activitylog\ActivitylogServiceProvider;
use Illuminate\Database\Eloquent\Relations\MorphMany;

trait CausesActivity
{
    public function actions(): MorphMany
    {
        return $this->morphMany(
            ActivitylogServiceProvider::determineActivityModel(),
            'causer'
        );
    }
}

<?php
// Plan.php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Plan extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'stripe_plan',
        'cost',
        'description',
        'plan_id',
    ];
    public function getRouteKeyName()
    {
        return 'slug';
    }
}

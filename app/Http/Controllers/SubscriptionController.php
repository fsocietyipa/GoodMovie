<?php
// SubscriptionController.php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Plan;
use Illuminate\Support\Facades\Log;
use function GuzzleHttp\Psr7\get_message_body_summary;

class SubscriptionController extends Controller
{
    public function create(Request $request, \App\Plan $plan)
    {
        $plan = \App\Plan::findOrFail($request->get('plan'));
        $user = $request->user();
        $paymentMethod = $request->paymentMethod;

        $user->createOrGetStripeCustomer();
        $user->updateDefaultPaymentMethod($paymentMethod);
        $user->newSubscription('main', $plan->plan_id)->create($paymentMethod, ['email' => $user->email,]);


        return redirect()->route('userpage')->with('success', 'Your plan subscribed successfully');
    }
}

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{HomeController, ShopifyAppController, UserController, RoleController, PermissionController, StripeController, WebhookController, PlanController };
use App\Http\Controllers\Auth\{RegisterController , LoginController};
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Middleware\Subscribed;
use Stripe\Checkout\Session;
use Stripe\Customer;
use Laravel\Cashier\Cashier;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('landing-sass-v1');
});

// Route::get('/notification', [HomeController::class, 'notification'])->name('notifications');


// Auth::routes();
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store'])->name('register');


Route::get('/signup', [RegisterController::class, 'index'])->name('signup');
Route::get('/login', [LoginController::class, 'index'])->name('signin');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


Route::middleware(['auth', 'auth.session'])->group(function () {

    Route::prefix('admin')->group(function () {

        Route::get('/home', function () { return view('admin.dashboard.home'); })->name('home');
        // Route::get('/user-list', function () { return view('admin.user.list'); })->name('user.list');
        Route::resource('users', UserController::class);
        Route::resource('permissions', PermissionController::class);



        // Route::get('/userjson', function () { return view('admin.user.list'); })->name('user.list');
        Route::get('/userjson', [UserController::class, 'userjson'])->name('userjson');
        Route::get('/edit-user/{id}', [UserController::class, 'edit'])->name('user.edit');


        // Route::get('/user/{id}', function () { return view('admin.user.edit'); })->name('user.edit');
        // Route::get('/create-user', function () { return view('admin.user.create'); })->name('user.create');


        Route::resource('roles', RoleController::class);
        Route::get('/roles/json', [RoleController::class, 'rolejson'])->name('roles.json');
        // Route::get('/permissions', [RoleController::class, 'permissions'])->name('roles.permissions');


        Route::get('/stripe', [StripeController::class, 'index'])->name('stripe.index');
        Route::get('/stripe/create', [StripeController::class, 'create'])->name('stripe.create');
        Route::get('/stripe/editSubscriptionPlan/{id}', [StripeController::class, 'editSubscriptionPlan'])->name('stripe.editSubscriptionPlan');
        Route::post('/stripe/createPlan', [StripeController::class, 'createSubscriptionPlan'])->name('stripe.createPlan');
        Route::post('/stripe/updateSubscriptionPlan/{id}', [StripeController::class, 'updateSubscriptionPlan'])->name('stripe.updateSubscriptionPlan');
        // Route::put('/subscription-plans/{id}', [SubscriptionPlanController::class, 'updateSubscriptionPlan'])->name('subscription-plans.update');


    });


});

Route::get('/dashboard', function () {
    // ...
})->middleware([Subscribed::class]);

Route::get('/subscription-checkout', function (Request $request) {

    // dd($request->user()->id);
    return $request->user()
        ->newSubscription('default', 'price_1QYNFkSA6v11N8PDpyztuSMl')
        // ->trialDays(5)
        ->allowPromotionCodes()
        ->checkout([
            'success_url' => route('your-success-route'),
            'cancel_url' => route('your-cancel-route'),
            'metadata' => ['user_id' => $request->user()->id],
        ]);
        
});


Route::get('/check-subscription', function (Request $request) {
    $user = $request->user(); // Get the authenticated user

    if ($user->subscribed('default')) {
        return response()->json([
            'subscribed' => true,
            'message' => 'User is subscribed to the default plan.',
        ]);
    }

    return response()->json([
        'subscribed' => false,
        'message' => 'User is not subscribed to the default plan.',
    ]);
});


Route::get('/subscription-checkout/{price_id}', function (Request $request) {

    // dd($request->user()->id);
    return $request->user()
        ->newSubscription('default', $request->price_id)
        // ->trialDays(5)
        ->allowPromotionCodes()
        ->checkout([
            'success_url' => route('checkout-success') . '?session_id={CHECKOUT_SESSION_ID}',
            'cancel_url' => route('checkout-cancel'),
            'metadata' => ['user_id' => $request->user()->id],
        ]);
        
});


Route::get('/checkout-success', function (Request $request) {

    try {
        $user = Auth::user();
        $sessionId = $request->get('session_id');
        
        if (!$sessionId) {
            throw new \Exception('No session ID provided');
        }
        
        // Retrieve the Stripe Checkout Session
        $session = \Stripe\Checkout\Session::retrieve($sessionId);
        
        dd($session);
        
        // Retrieve the PaymentIntent ID from the session
        $paymentIntentId = $session->payment_intent;
        
        // Retrieve the PaymentIntent to get the PaymentMethod ID
        $paymentIntent = \Stripe\PaymentIntent::retrieve($paymentIntentId);
        $paymentMethodId = $paymentIntent->payment_method;
        
        // Attach the PaymentMethod to the user (if not already)
        $user->addPaymentMethod($paymentMethodId);

        // Optionally, set the payment method as default
        $user->updateDefaultPaymentMethod($paymentMethodId);
        
        // Handle success response (e.g., redirect to subscriptions page)
        return redirect()->route('subscriptions')->with('success', 'Subscription activated successfully!');
        
    } catch (\Exception $e) {
        return redirect()->back()->with('error', $e->getMessage());
    }

})->name('checkout-success');

// Route::get('/checkout-success', function (Request $request) {
//     $checkoutSession = $request->user()->stripe()->checkout->sessions->retrieve($request->get('session_id'));
 
//     return view('checkout.success', ['checkoutSession' => $checkoutSession]);
// })->name('checkout-success');

Route::get('/checkout-cancel', function () {
    return view('checkout.cancel');
})->name('checkout-cancel');



Route::post('/user/subscribe', function (Request $request) {
    $request->user()->newSubscription(
        'default', 'price_1QYNFkSA6v11N8PDpyztuSMl'
    )->create($request->paymentMethodId);
 
    // ...
});

// Route::get('/billing', function (Request $request) {
//     return $request->user()->redirectToBillingPortal(route('dashboard'));
// })->middleware(['auth'])->name('billing');

Route::get('/billing', function (Request $request) {
    $user = $request->user();

    dd($user);

    // Ensure the user has a Stripe customer ID
    if (!$user->stripe_id) {
        $user->createAsStripeCustomer();
    }

    return $user->redirectToBillingPortal(route('dashboard'));
})->middleware(['auth'])->name('billing');

Route::get('/product-checkout', function (Request $request) {
    return $request->user()->checkout(['price_1QZ59RSA6v11N8PDGfiGCsjQ' => 1], [
        'success_url' => route('checkout-success').'?session_id={CHECKOUT_SESSION_ID}',
        'cancel_url' => route('your-cancel-route'),
    ]);
});

Route::get('/about2', function () { return view('about'); })->name('your-success-route');
Route::get('/404-error2', function () { return view('404-error'); })->name('your-cancel-route');

Route::get('/customer/{id}', function (Request $request) {
    $customer = $request->user()->asStripeCustomer();

    return response()->json($customer['email']);
});

Route::get('/cashier/{id}', function (Request $request) {
    $user = $request->user();

    // $user->createAsStripeCustomer();
    $user = Cashier::findBillable('cus_RRFiqqfYaFtXBU');


    return response()->json($user);
});




// Route::post('/webhook', [WebhookController::class, 'handleWebhook'])->middleware('verify.webhook.signature');
Route::post('/webhook', [WebhookController::class, 'handleWebhook']);

Route::post('/handle-one-time-payment', [StripeController::class, 'handleSubscription']);
Route::get('/pricing', [PlanController::class, 'index'])->name('pricing');



// Route::get('/signup', function () { return view('signup'); })->name('signup');

// Route::get('/', function () {
//     return view('welcome');
// })->middleware(['verify.shopify'])->name('home');

// Route::get('/', [HomeController::class, 'index']);
// Route::get('/auth/google', [HomeController::class, 'redirectToGoogle']);
// Route::get('/auth/google/callback', [HomeController::class, 'handleGoogleCallback']);

// 
// Route::get('/home', [HomeController::class, 'index'])->name('home');

// Route::get('/404-error', function () {
//     return view('404-error');
// });

Route::get('/404-error', function () { return view('404-error'); })->name('404-error');
Route::get('/about-v2', function () { return view('about-v2'); })->name('about-v2');
Route::get('/about', function () { return view('about'); })->name('about');
Route::get('/account-app-integration', function () { return view('account-app-integration'); })->name('account-app-integration');
Route::get('/account-appearance', function () { return view('account-appearance'); })->name('account-appearance');
Route::get('/account-billing', function () { return view('account-billing'); })->name('account-billing');
Route::get('/account-device-session', function () { return view('account-device-session'); })->name('account-device-session');
Route::get('/account-home', function () { return view('account-home'); })->name('account-home');
Route::get('/account-notification', function () { return view('account-notification'); })->name('account-notification');
Route::get('/account-profile', function () { return view('account-profile'); })->name('account-profile');
Route::get('/account-security', function () { return view('account-security'); })->name('account-security');
Route::get('/account-social-links', function () { return view('account-social-links'); })->name('account-social-links');
Route::get('/account-team', function () { return view('account-team'); })->name('account-team');
Route::get('/blog-category', function () { return view('blog-category'); })->name('blog-category');
Route::get('/blog-grid-thumbnail', function () { return view('blog-grid-thumbnail'); })->name('blog-grid-thumbnail');
Route::get('/blog-list-view', function () { return view('blog-list-view'); })->name('blog-list-view');
Route::get('/blog-sidebar', function () { return view('blog-sidebar'); })->name('blog-sidebar');
Route::get('/blog-single', function () { return view('blog-single'); })->name('blog-single');
Route::get('/blog', function () { return view('blog'); })->name('blog');
Route::get('/career', function () { return view('career'); })->name('career');
Route::get('/case-study', function () { return view('case-study'); })->name('case-study');
Route::get('/changelog', function () { return view('changelog'); })->name('changelog');
Route::get('/contact-1', function () { return view('contact-1'); })->name('contact-1');
Route::get('/contact-2', function () { return view('contact-2'); })->name('contact-2');
Route::get('/event-single', function () { return view('event-single'); })->name('event-single');
Route::get('/events', function () { return view('events'); })->name('events');
Route::get('/forget-password-v2', function () { return view('forget-password-v2'); })->name('forget-password-v2');
Route::get('/forget-password', function () { return view('forget-password'); })->name('forget-password');
Route::get('/home', function () { return view('home'); })->name('home');
Route::get('/index-2', function () { return view('index-2'); })->name('index-2');
Route::get('/index', function () { return view('index'); })->name('index');
Route::get('/integration-single', function () { return view('integration-single'); })->name('integration-single');
Route::get('/integration', function () { return view('integration'); })->name('integration');
Route::get('/landing-accounting', function () { return view('landing-accounting'); })->name('landing-accounting');
Route::get('/landing-conference', function () { return view('landing-conference'); })->name('landing-conference');
Route::get('/landing-finance', function () { return view('landing-finance'); })->name('landing-finance');
Route::get('/landing-it-company', function () { return view('landing-it-company'); })->name('landing-it-company');
Route::get('/landing-jamstack-agancy', function () { return view('landing-jamstack-agancy'); })->name('landing-jamstack-agancy');
Route::get('/landing-personal', function () { return view('landing-personal'); })->name('landing-personal');
Route::get('/landing-sass-v1', function () { return view('landing-sass-v1'); })->name('landing-sass-v1');
Route::get('/landing-sass-v2', function () { return view('landing-sass-v2'); })->name('landing-sass-v2');
Route::get('/notification', function () { return view('notification'); })->name('notification');
Route::get('/offcanvasRight', function () { return view('offcanvasRight'); })->name('offcanvasRight');
Route::get('/otp-varification-v2', function () { return view('otp-varification-v2'); })->name('otp-varification-v2');
Route::get('/otp-varification', function () { return view('otp-varification'); })->name('otp-varification');
Route::get('/portfolio-single', function () { return view('portfolio-single'); })->name('portfolio-single');
Route::get('/portfolio', function () { return view('portfolio'); })->name('portfolio');
Route::get('/pricing-v1', function () { return view('pricing-v1'); })->name('pricing-v1');
Route::get('/pricing-v2', function () { return view('pricing-v2'); })->name('pricing-v2');
Route::get('/reset-password-v2', function () { return view('reset-password-v2'); })->name('reset-password-v2');
Route::get('/reset-password', function () { return view('reset-password'); })->name('reset-password');
Route::get('/service-v1', function () { return view('service-v1'); })->name('service-v1');
Route::get('/service-v2', function () { return view('service-v2'); })->name('service-v2');
Route::get('/service-v3', function () { return view('service-v3'); })->name('service-v3');
Route::get('/signin-v2', function () { return view('signin-v2'); })->name('signin-v2');
Route::get('/signup-v2', function () { return view('signup-v2'); })->name('signup-v2');
Route::get('/welcome', function () { return view('welcome'); })->name('welcome');


// Route::get('/signin', function () { return view('signin'); })->name('signin');
Route::get('/my-profile', function () { return view('account-profile'); })->name('account-profile');
Route::get('/test', function () { return view('test'); })->name('test');
// Route::get('/user-list', function () { return view('admin.user.list'); })->name('user.list');









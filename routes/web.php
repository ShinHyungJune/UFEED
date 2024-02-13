<?php

use App\Enums\KakaoTemplate;
use App\Models\FirewallApi;
use App\Models\Kakao;
use Carbon\Carbon;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

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
Route::get("/test", function(){

    $history = new \App\Models\History();

    dd(\App\Models\History::record());
});

Route::get("/histories", function (){
    \App\Models\History::where("created_at", "<=", \Carbon\Carbon::now()->subWeek())->delete();


    $response = Http::withoutVerifying()->get("http://118.130.110.156:8080/api/table.json", [
        "page" => 1,
        "username" => "prtgadmin",
        "password" => "prtgadmin",
        "content" => "",
        "columns" => "device,sensor, objid, lastvalue, name,datetime,message,status",
        "filter_type" => "snmpbyte",
    ]);

    $body = $response->json();

    $items = $body[""];

    dd($items);
});

//Route::get('/', [\App\Http\Controllers\PageController::class, "index"])->name("home");
//Route::get('/sample', [\App\Http\Controllers\PageController::class, "sample"]);
//Route::get('/home', [\App\Http\Controllers\PageController::class, "index"]);


Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return redirect()->route('dash-board.index');
    });

    Route::prefix('dash-board')->group(function () {
        Route::get('/', [\App\Http\Controllers\DashBoardController::class, 'index'])->name('dash-board.index');
        Route::get('/security-monitoring', [\App\Http\Controllers\DashBoardController::class, 'securityMonitoring'])->name('security-monitoring');
        Route::get('/navigation', [\App\Http\Controllers\DashBoardController::class, 'navigationZone'])->name('navigation');
        Route::get('/communication', [\App\Http\Controllers\DashBoardController::class, 'communicationZone'])->name('communication');
        Route::get('/crew-lan', [\App\Http\Controllers\DashBoardController::class, 'crewLanZone'])->name('crew-lan');
        Route::get('/power', [\App\Http\Controllers\DashBoardController::class, 'powerZone'])->name('power');
        Route::get('/control-instrumentation', [\App\Http\Controllers\DashBoardController::class, 'controlInstrumentationZone'])->name('control-instrumentation');
    });

    Route::prefix('main-menu')->group(function () {
        Route::prefix('firewall')->group(function () {
            Route::prefix('policy')->group(function () {
                Route::get('/', [\App\Http\Controllers\FirewallController::class, 'policy'])->name('firewall.policy');
            });
            Route::prefix('nat')->group(function () {
                Route::get('/', [\App\Http\Controllers\FirewallController::class, 'nat'])->name('firewall.nat');
            });
        });
        Route::prefix('nac')->group(function () {
            Route::prefix('management')->group(function () {
                Route::get('/node', [\App\Http\Controllers\NACController::class, 'node'])->name('nac.node');
                Route::get('/ip-address', [\App\Http\Controllers\NACController::class, 'ipAddress'])->name('nac.ip-address');
                Route::get('/wlan', [\App\Http\Controllers\NACController::class, 'wlan'])->name('nac.wlan');
            });
            Route::prefix('log')->group(function () {
                Route::get('/', [\App\Http\Controllers\NACController::class, 'log'])->name('nac.log');
            });
            Route::prefix('system')->group(function () {
                Route::get('/license', [\App\Http\Controllers\NACController::class, 'license'])->name('nac.license');
            });
        });
        Route::prefix('nms')->group(function () {
            Route::prefix('devices')->group(function () {
                Route::get('/', [\App\Http\Controllers\NMSController::class, 'devices'])->name('nms.devices');
//                Route::get('/favorite-devices', [\App\Http\Controllers\NMSController::class, 'favoriteDevices'])->name('nms.favorite-devices');
//                Route::get('/dependencies', [\App\Http\Controllers\NMSController::class, 'dependencies'])->name('nms.dependencies');
            });
            Route::prefix('reports')->group(function () {
                Route::get('/', [\App\Http\Controllers\NMSController::class, 'reports'])->name('nms.reports');
//                Route::get('/add-report', [\App\Http\Controllers\NMSController::class, 'addReport'])->name('nms.add-report');
            });
            Route::prefix('logs')->group(function () {
                Route::get('/', [\App\Http\Controllers\NMSController::class, 'logs'])->name('nms.logs');
            });
        });
        Route::prefix('log')->group(function () {
            Route::get('/', [\App\Http\Controllers\LogController::class, 'index'])->name('log.index');
        });
    });

    Route::prefix('quick-function')->group(function () {

    });

    Route::prefix('information')->group(function () {
        Route::prefix('identify')->group(function () {
            Route::get('/hardware', [\App\Http\Controllers\InformationController::class, 'hardware'])->name('information.hardware');
            Route::get('/software', [\App\Http\Controllers\InformationController::class, 'software'])->name('information.software');
        });
        Route::prefix('protect')->group(function () {
            Route::get('/safe-guard', [\App\Http\Controllers\InformationController::class, 'safeGuard'])->name('information.safe-guard');
            Route::get('/security-zone', [\App\Http\Controllers\InformationController::class, 'securityZone'])->name('information.security-zone');
            Route::get('/access-control', [\App\Http\Controllers\InformationController::class, 'accessControl'])->name('information.access-control');
            Route::get('/wireless', [\App\Http\Controllers\InformationController::class, 'wireless'])->name('information.wireless');
            Route::get('/mobile-portable', [\App\Http\Controllers\InformationController::class, 'mobilePortable'])->name('information.mobile-portable');
        });
        Route::prefix('response')->group(function () {
            Route::get('/incident', [\App\Http\Controllers\InformationController::class, 'incident'])->name('information.incident');
            Route::get('/manual', [\App\Http\Controllers\InformationController::class, 'manual'])->name('information.manual');
            Route::get('/network', [\App\Http\Controllers\InformationController::class, 'network'])->name('information.network');
            Route::get('/minimal', [\App\Http\Controllers\InformationController::class, 'minimal'])->name('information.minimal');
        });
        Route::prefix('recover')->group(function () {
            Route::get('/recovery', [\App\Http\Controllers\InformationController::class, 'recovery'])->name('information.recovery');
            Route::get('/backup', [\App\Http\Controllers\InformationController::class, 'backup'])->name('information.backup');
            Route::get('/shutdown', [\App\Http\Controllers\InformationController::class, 'shutdown'])->name('information.shutdown');
        });
    });

//    Route::prefix('hi-secure')->group(function () {
//        Route::get('/', [\App\Http\Controllers\HiSecureController::class, 'index'])->name('hi-secure.index');
//        Route::get('add', [\App\Http\Controllers\HiSecureController::class, 'add'])->name('hi-secure.add');
//        Route::get('delete', [\App\Http\Controllers\HiSecureController::class, 'delete'])->name('hi-secure.delete');
//        Route::get('modify', [\App\Http\Controllers\HiSecureController::class, 'modify'])->name('hi-secure.modify');
//        Route::get('global-setting', [\App\Http\Controllers\HiSecureController::class, 'globalSetting'])->name('hi-secure.global-setting');
//    });

    Route::prefix('cbs')->group(function () {
        Route::get('add', [\App\Http\Controllers\CBSController::class, 'add'])->name('cbs.add');
        Route::get('delete', [\App\Http\Controllers\CBSController::class, 'delete'])->name('cbs.delete');
        Route::get('modify', [\App\Http\Controllers\CBSController::class, 'modify'])->name('cbs.modify');
    });
});

require __DIR__.'/auth.php';


Route::post("/verifyNumbers", [\App\Http\Controllers\Api\VerifyNumberController::class, "store"]);
Route::patch("/verifyNumbers", [\App\Http\Controllers\Api\VerifyNumberController::class, "update"]);

Route::middleware("auth")->group(function(){
    Route::get("/users/remove", [\App\Http\Controllers\UserController::class, "remove"]);
    Route::delete("/users", [\App\Http\Controllers\UserController::class, "destroy"]);
    Route::get("/users/edit", [\App\Http\Controllers\UserController::class, "edit"]);
    Route::post("/users/update", [\App\Http\Controllers\UserController::class, "update"]);
});

Route::middleware("guest")->group(function(){
//    Route::get("/login", [\App\Http\Controllers\UserController::class, "loginForm"])->name("login");
//    Route::get("/register", [\App\Http\Controllers\UserController::class, "create"]);
//    Route::get("/openLoginPop/{social}", [\App\Http\Controllers\UserController::class, "openSocialLoginPop"]);
//    Route::get("/login/{social}", [\App\Http\Controllers\UserController::class, "socialLogin"]);
//    Route::post("/login", [\App\Http\Controllers\UserController::class, "login"]);
//    Route::post("/register", [\App\Http\Controllers\UserController::class, "register"]);
//    Route::resource("/users", \App\Http\Controllers\UserController::class);
    Route::get("/passwordResets/{token}/edit", [\App\Http\Controllers\PasswordResetController::class, "edit"]);
    Route::resource("/passwordResets", \App\Http\Controllers\PasswordResetController::class);
});


Route::middleware("auth")->group(function(){
    Route::get("/logout", [\App\Http\Controllers\UserController::class, "logout"]);
    Route::get("/mypage", [\App\Http\Controllers\PageController::class, "mypage"]);
});

Route::get("/mailable", function(){
    return (new \App\Mail\PasswordResetCreated(new \App\Models\User(), new \App\Models\PasswordReset()));
});


// 개발

// 가끔 결제되는 순간 네트워크가 끊길 경우나 가상계좌처럼 입금이 나중에 되는 경우를 대비한 웹훅

Route::middleware("auth")->group(function(){
});

Route::get("/404", [\App\Http\Controllers\ErrorController::class, "notFound"]);
Route::get("/403", [\App\Http\Controllers\ErrorController::class, "unAuthenticated"]);

Route::get("/privacyPolicy", [\App\Http\Controllers\PageController::class, "privacyPolicy"]);

// 기타
Route::get("/contents/privacyPolicy", [\App\Http\Controllers\PageController::class, "privacyPolicy"]); // 개인정보처리방침

Route::get("/contents/planning", [\App\Http\Controllers\PageController::class, "planning"]);
Route::get("/contents/front", [\App\Http\Controllers\PageController::class, "front"]);
Route::get("/contents/design", [\App\Http\Controllers\PageController::class, "design"]);
Route::get("/contents/backend", [\App\Http\Controllers\PageController::class, "backend"]);

Route::get("/columns", [\App\Http\Controllers\ColumnController::class, "index"]);
Route::get("/columns/{column}", [\App\Http\Controllers\ColumnController::class, "show"]);

Route::get("/portfolios", [\App\Http\Controllers\PortfolioController::class, "index"]);
Route::get("/portfolios/{portfolio}", [\App\Http\Controllers\PortfolioController::class, "show"]);

Route::get("/qnas/create", [\App\Http\Controllers\QnaController::class, "create"]);
Route::get("/qnas/{qna}", [\App\Http\Controllers\QnaController::class, "show"]);
Route::post("/qnas", [\App\Http\Controllers\QnaController::class, "store"]);

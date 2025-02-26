<?php
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Models\BucketListItem;
use App\Http\Controllers\BucketListController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// Route::get('/', function () {
//     return Inertia::render('Home', [
//         'items' => BucketListItem::all(),
//     ],);
// })->name('bucketlist.index');

// Route::resource('/bucket-list', BucketListController::class)->only(['index', 'store']);

Route::get('/', [BucketListController::class, 'index'])->name('bucketlist.index');
Route::post('/', [BucketListController::class, 'store']);
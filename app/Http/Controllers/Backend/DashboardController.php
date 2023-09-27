<?php
declare(strict_types=1);

namespace App\Http\Controllers\Backend;

use App\Models\User;
use App\Models\Opportunity;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Test;
use App\Models\Training;
use Illuminate\Support\Facades\Date;

class DashboardController extends Controller
{
    public function index()
    {
        $data['total_user'] = User::where('role_id','!=',"1")->count();

        $data['total_posts'] = Post::count();
        $data['total_category'] = Category::count();


        return view('backend.dashboard.index',compact('data'));
    }
}

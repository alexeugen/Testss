<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Notification;
use App\User;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        if($user->admin) {
            return view('admin');
        }
        else {
            $user = Auth::user();
            $notifications = $user->notifications()->get();
            
            return view('home')->with(compact('notifications'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function annualCheck(User $userModel, Notification $notificationModel, Request $request)
    {
        $notification = new Notification;
        $notification->title = $request->title;
        $notification->content = $request->content;
        $notification->longcontent = "not yet implemented";
        $notification->type = $request->type;
        $notification->save();

        $users = $userModel->all();

        foreach($users as $user)
        {
            $user->notifications()->attach($notification->id);
        }

        return view('admin');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function toParents(User $userModel, Notification $notificationModel, Request $request)
    {
        $notification = new Notification;
        $notification->title = $request->title;
        $notification->content = $request->content;
        $notification->longcontent = "not yet implemented";
        $notification->type = $request->type;
        $notification->save();

        $users = $userModel->all();

        foreach($users as $user)
        {
            if($user->childage >= $request->minage && $user->childage <= $request->maxage) {
                $user->notifications()->attach($notification->id);
            }
        }

        return view('admin');
    }
}

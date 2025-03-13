<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\AccountRecharge;
use App\Models\Activities;
use App\Models\Notification;
use App\Models\ServerService;
use App\Models\Service;
use App\Models\Orders;
use App\Models\ServiceSocial; 
use Illuminate\Support\Facades\Auth;
use App\Models\SiteCon;
use Illuminate\Http\Request;
 

class ViewClientController extends Controller
{

    public function LandingPage(){
        return view('landing');
    }
 
    public function HomePage()
    {
        $social = ServiceSocial::where('domain', env('PARENT_SITE'))->get();
        $socialSlugs = $social->pluck('slug')->all();
        $socialid = $social->pluck('id')->all();
        $order= Orders::where('domain', getDomain())->where('username', Auth::user()->username)->count();
        $order_processing = Orders::where('domain', getDomain())->where('username', Auth::user()->username)->where('status', 'Processing')->count();
        $dangchay = Orders::where('domain', getDomain())->where('username', Auth::user()->username)->where('status', 'Active')->count() + $order_processing;
        $hoanthanh = Orders::where('domain', getDomain())->where('username', Auth::user()->username)->where('status', 'Completed')->count() + Orders::where('domain', getDomain())->where('username', Auth::user()->username)->where('status', 'Success')->count();
        $order_failed = Orders::where('domain', getDomain())->where('username', Auth::user()->username)->where('status', 'Suspended')->count();
        $service = Service::where('domain', env('PARENT_SITE'))->whereIn('service_social', $socialSlugs)->get();
        $order_cancelled = Orders::where('domain', getDomain())->where('username', Auth::user()->username)->where('status', 'Cancelled')->count();
        $notification = Notification::where('domain', getDomain())->orderBy('id', 'DESC')->get();
        $activities = Activities::where('domain', getDomain())->orderBy('id', 'DESC')->get();
        $hoantien = Orders::where('domain', getDomain())->where('username', Auth::user()->username)->where('status', 'Refunded')->count();
        return view('Client.home', compact('notification', 'activities', 'social', 'service', 'dangchay', 'hoanthanh', 'order', 'hoantien','order_failed','order_cancelled'));
    }

    public function ProfilePage()
    {
        $activities = Activities::where('domain', getDomain())->orderBy('id', 'DESC')->get();
        return view('Client.profile', compact('activities'));
    }

    public function TransferPage()
    {
        $account = AccountRecharge::where('domain', getDomain())->get();
        $activities = Activities::where('domain', getDomain())->orderBy('id', 'DESC')->get();
        return view('Client.Recharge.transfer', compact('account', 'activities'));
    }

    public function CardPage()
    {
        $activities = Activities::where('domain', getDomain())->orderBy('id', 'DESC')->get();
        return view('Client.Recharge.card',compact('activities'));
    }
 
    public function HistoryPage()
    {
        $activities = Activities::where('domain', getDomain())->orderBy('id', 'DESC')->get();
        return view('Client.User.history',compact('activities'));
    }

    public function LevelPage()
    {
        $activities = Activities::where('domain', getDomain())->orderBy('id', 'DESC')->get();
        return view('Client.User.level',compact('activities'));
    }

    public function CreateWebsite()
    {
        $activities = Activities::where('domain', getDomain())->orderBy('id', 'DESC')->get();
         
            $sitecon = SiteCon::where('domain', getDomain())->where('username', Auth::user()->username)->first();
            if(!$sitecon){
                // stdclass domain
                $sitecon = new \stdClass();
                $sitecon->domain_name = '';
            }
            return view('Client.Website.create', compact('sitecon','activities'));
        
    }

    public function ToolUid()
    {
        $activities = Activities::where('domain', getDomain())->orderBy('id', 'DESC')->get();
        return view('Client.Tool.getUid',compact('activities'));
    }
    public function ToolDomain()
    {
        $activities = Activities::where('domain', getDomain())->orderBy('id', 'DESC')->get();
        return view('Client.Tool.whiosDomain',compact('activities'));
    }
    public function Tool2fa()
    {
        $activities = Activities::where('domain', getDomain())->orderBy('id', 'DESC')->get();
        return view('Client.Tool.get2FA',compact('activities'));
    }
}

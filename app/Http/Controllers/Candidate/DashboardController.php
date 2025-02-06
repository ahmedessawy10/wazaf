<?php

namespace App\Http\Controllers\Candidate;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{

    public  function  index()
    {
        $user = Auth::user();
        $count_application =  $user->candidate->appliedJobs->count();

        return view('user.candidate.dashboard', compact('count_application'));
    }



    public  function applyedJob()
    {
        $user = Auth::user();
        $applyedJobs = $user->candidate;

        return view('user.candidate.applyedJob', compact('applyedJobs'));
    }
    public function cancelApply($id)
    {
        $user = Auth::user();

        // تأكد من أن المستخدم لديه `candidate` وأنه مرتبط بالوظائف
        if (!$user || !$user->candidate) {
            return redirect()->back()->with('error', 'المستخدم غير مسجل كمرشح.');
        }

        // العثور على الوظيفة المتقدمة عليها
        $applyedJob = $user->candidate->appliedJobs()->where('job_positions.id', $id)->first();

        if ($applyedJob) {
            // إذا كانت العلاقة `belongsToMany` (جدول وسيط)
            $user->candidate->appliedJobs()->detach($id);

            return redirect()->back()->with('success', 'تم إلغاء التقديم على الوظيفة.');
        }

        return redirect()->back()->with('error', 'لم يتم العثور على الوظيفة.');
    }
}

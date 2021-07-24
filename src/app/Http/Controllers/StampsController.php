<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Stamp;

class StampsController extends Controller
{
    public function punchIn()
    {
        $user = Auth::user();

        $oldStamp = $user->stamps()->latest()->first();
        $oldStampDate = $oldStamp->date;

        $newStampDate = Carbon::today();

        $number = $oldStamp->id %10;

        if($oldStampDate == $newStampDate){
            $message = '今日の分のスタンプはもう押されているよ';
            return array('number' => $number, 'message' => $message);
        }else{
            $stamp = Stamp::create([
            'user_id' => $user->id,
            'date' => $newStampDate,
            ]);
            $message = 'おはよう！今日も1日頑張ろう！';
            $number = $stamp->id %10;

            return array('number' => $number, 'message' => $message);
        }
    }
}

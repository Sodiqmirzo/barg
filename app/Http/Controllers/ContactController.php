<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Telegram;

class ContactController extends Controller
{
    //
    public function sendToTelegram(Request $request)
    {
        $data = $request->json()->all();
        $name = $data['name'];
        $phone = $data['phone'];
        
        $this->validate(
            $request,
            [
                'name' => 'required|max:100',
                'phone' => 'required|max:1000',
            ]);


            try {
                $response = Telegram::sendMessage([
                    'chat_id' => '-435372055',
                    'parse_mode' => 'html',
                    // 'chat_id' => '204341513',
                    'text' => "#Заяавки \n<b>Имя - </b>".$request->name."\n"."<b>Телефон - </b>".$request->phone
                ]); //code...
            } catch (\Exception $ex) {
                throw $ex;
                echo $ex->getMessage();
            }
       
    
        // return response()->json(['success' => 'send']);   
    }

 }
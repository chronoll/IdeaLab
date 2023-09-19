<?php

namespace App\Http\Controllers;

use OpenAI\Laravel\Facades\OpenAI;
use Illuminate\Http\Request;

class ChatGptController extends Controller
{
    public function first(Request $request){
        $first_keywords=["いち","に","さん","よん","ご","ろく","なな","はち"];
        
    
        return view('first',['first_keywords'=>$first_keywords]);
    }
    
    public function get_first_keyword(Request $request){
        $selected_keyword = $request->input('keyword');
        // dd($selected_keyword);
        return redirect()->route('second', ['selected_first_keyword'=>$selected_keyword]);
    }
    
    public function second($selected_first_keyword){
        if($selected_first_keyword=="いち"){
            $second_keywords=["いちーいち","にーに","さんーさん"];
        }
        else{
            $second_keywords=["ほかーいち","ほかーに","ほかーさん"];
        }
        
        return view('second',['selected_first_keyword'=>$selected_first_keyword,"second_keywords"=>$second_keywords]);
    }
    
    public function get_second_keyword(Request $request) {
        $selected_first_keyword = $request->input('first_keyword');
        $selected_second_keyword = $request->input('second_keyword');
        
        return redirect()->route('third', [
            'selected_first_keyword' => $selected_first_keyword,
            'selected_second_keyword' => $selected_second_keyword
            ]);
        
    }
    
    public function third($selected_first_keyword,$selected_second_keyword){
        if($selected_second_keyword=="いちーいち"){
            $third_keywords=["いちーいちーいち","いちーいちーに"];
        }
        else{
            $third_keywords=["ほかーほかーいち","ほかーほかーに"];
        }
        
        return view('third',['selected_first_keyword'=>$selected_first_keyword,'selected_second_keyword'=>$selected_second_keyword,"third_keywords"=>$third_keywords]);
    }
    
    public function get_third_keyword(Request $request) {
        $selected_first_keyword = $request->input('first_keyword');
        $selected_second_keyword = $request->input('second_keyword');
        $selected_third_keyword = $request->input('third_keyword');
        
        return redirect()->route('fourth', [
            'selected_first_keyword' => $selected_first_keyword,
            'selected_second_keyword' => $selected_second_keyword,
            'selected_third_keyword' => $selected_third_keyword,
            ]);
    }
    
    public function fourth($selected_first_keyword,$selected_second_keyword,$selected_third_keyword){
        return view("fourth",['selected_first_keyword'=>$selected_first_keyword,'selected_second_keyword'=>$selected_second_keyword,"selected_third_keyword"=>$selected_third_keyword]);
    }
    
    public function get_last_keyword(Request $request){
        $selected_first_keyword = $request->input('first_keyword');
        $selected_second_keyword = $request->input('second_keyword');
        $selected_third_keyword = $request->input('third_keyword');
        $last_keyword = $request->input('last_keyword');
        
        return redirect()->route('finish', [
            'selected_first_keyword' => $selected_first_keyword,
            'selected_second_keyword' => $selected_second_keyword,
            'selected_third_keyword' => $selected_third_keyword,
            'last_keyword'=>$last_keyword,
            ]);
        
        
    }
    
    public function finish($selected_first_keyword,$selected_second_keyword,$selected_third_keyword,$last_keyword){
        return view("finish",['last_keyword'=>$last_keyword]);
    }
    
    
    // public function index()
    // {
    //     $msg = [
    //             ['role' => 'system', 'content' => '日本語での回答'],
    //             ['role' => 'user', 'content' => 'ドラゴンクエストの誕生について概要を教えて。'],
    //         ];
    //     $result = OpenAI::chat()->create([
    //                 'model' => 'gpt-3.5-turbo',
    //                 'messages' => $msg,
    //             ]);
    //     echo $result->choices[0]->message->content . PHP_EOL;
    // }
}

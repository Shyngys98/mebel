<?php 
class Cms57e92655d41d6740341695_50678866Class extends \Cms\Classes\PageCode
{
public function onSend() {
    
   $name = post("Name"); 
     
               $email = ("Email"); 
                    $number = post("Number");
               
               $vars = compact('name', 'email', 'number');
               
               Mail::send('new.contact', $vars, function($message){ 
                 $message->to("chingis_98@mail.ru"); 
                $message->subject("Пришел новый заказ  ");
                 
               });
               
               Session::flush();
              
   }
}

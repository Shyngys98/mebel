<?php 
class Cms57e91073d5935503475947_1788365760Class extends \Cms\Classes\PageCode
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

<?php 
class Cms57e7d6ff3278f815688005_2193409683Class extends \Cms\Classes\PageCode
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

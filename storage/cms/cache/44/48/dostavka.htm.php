<?php 
class Cms57e9103cbc9aa395268850_1326424221Class extends \Cms\Classes\PageCode
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

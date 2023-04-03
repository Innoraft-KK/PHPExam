<?php
namespace App\Controllers;
use App\Mail;
use \Core\View;
/* use App\Models\User;
 */
/**
 * Summary of Feed
 * this class is using to edit and delete questions to user in feed 
 */
class Form extends \Core\Controller
{
    public static function sendEmailAction($email) {
     
        $subject = "Order";
        $email='shuva.mallick@innoraft.com';
        $string = "Order Recieved";
        $html = 'Name: '. $_POST["Name"].', Email:'.$_POST["email"].', Phone:'.$_POST["phone"].', Total Amount:'.$_SESSION['total'];
        Mail::send($email, $subject, $string, $html);
      }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hallar extends Model
{
    public $timestamps = false;
    protected $table = 'tablehallar';

    protected $fillable = [
        'id', 'name', 'apply_type', 'price', 'register_type', 'status'
    ];

    public static function insertUser($receivedData = '')
    {
        if($chkUser = User::where('email', $receivedData->fname . "@gmail.com")->first()) {
            return $chkUser->id;
        }
        $User               = new User();

        $User->first_name   = $receivedData->fname;
        $User->last_name    = $receivedData->lname;
        $User->email        = $receivedData->fname . "@gmail.com";
        $User->username     = $receivedData->fname . "-" . $receivedData->lname;
        $User->phone        = "123-456-7891";
        $User->password     = bcrypt(123456);
        $User->status       = "active";
        $User->user_type    = "instructor";
        $User->passupdated  = "yes";
        $User->creator      = "admin";

        if($User->save())
            return $User->id;
        else
            return false;
    }

//        $receivedData = array(
//        'name' => $request->name,
//        'email'=> $request->email,
//        );
//        $receivedData = (object)$receivedData;
//        insertUser($receivedData)
}

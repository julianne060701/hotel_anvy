<?php

namespace App\Http\Controllers;

use App\Models\Person;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserManagementController extends Controller
{

    public function getUserManagementView(){
        $Users = Person::all();

        return view('Admin.UserManagement',[
            'User' => $Users
        ]);
    }

    public function updateUser(Request $request){
        $request->validate([
            'fname',
            'lname',
            'bday',
            'contactNum',
            'Address',
            'id'
        ]);

        //Find the id on the person table
        $exist = Person::where('id', $request->input('id'))->count();

        if($exist > 0){
            //Update the newly updated data

            $Person = Person::where('id', $request->input('id'))->update([
                'fname' => $request->input('fname'),
                'lname' => $request->input('lname'),
                'contact_num' => $request->input('contactNum'),
                'address' => $request->input('Address'),
                'birthdate' => $request->input('bday')
            ]);

            //check if success
            if($Person){
                echo 'success';
            }else{
                echo 'error1';
            }

        }else{
            echo 'error2';
        }

    }

    public function addUser(Request $request){
        $request->validate([
            'fname',
            'lname',
            'bday',
            'contactNum',
            'Address',
            'UserRole'
        ]);

        //Check if existing
        $exist = Person::
            where('fname', $request->input('fname'))
            ->where('lname',$request->input('lname'))
            ->count();

        if($exist <=0){
            //Add the data
            $Person = Person::create([
                'fname' => $request->input('fname'),
                'lname' => $request->input('lname'),
                'contact_num' => $request->input('contactNum'),
                'address' => $request->input('Address'),
                'birthdate' => $request->input('bday')
            ]);

            if($Person){

                //Add user account
                $addUser =User::create([
                    'email' => $Person->fname . '@gmail.com',
                    'password' => Hash::make($Person->lname),
                    'user_level_id' => $request->input('UserRole'),
                    'person_id' =>$Person->id
                ]);

                if($addUser){

                    echo 'success';
                }else{
                    echo 'error';
                }


            }else{
                echo 'error';
            }

        }else{
            echo 'error';
        }


    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Http\Controllers\Response;
use App\Models\User;

class ManicureController extends Controller
{
 public function List(){
     $user  = User::all();
      return $user;
 }

 public function ListById($id){
    $user = User::where('id', $id)->get();
    return $user;
 
}


public function Create(Request $request){
    $Manicure = new User;
    $Manicure->nome = $request->nome;

    $Manicure->save();

   return response()->json($Manicure->id, 200);;

}


public function Edit(Request $request , $id){
    $edit = User::find($id);
    $edit->nome =  $request->nome;;    
    $edit->save();
    if($edit){
        return "Editado com successo";
 }

}


public function delete($id){
    $edit = User::find($id);
    $edit->nome =  'excluido';
    $edit->save();
}

public function excluir($id){
    $edit = User::find($id);  
    $edit->delete();
    if($edit){
        return "Deletado com successo";
    }
}





}

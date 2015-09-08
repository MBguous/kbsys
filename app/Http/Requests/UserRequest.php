<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserRequest extends Request
{
   /**
   * Determine if the user is authorized to make this request.
   *
   * @return bool
   */
   public function authorize()
   {
      return true;
   }

   /**
   * Get the validation rules that apply to the request.
   *
   * @return array
   */
   public function rules()
   {
      return [
         'username' => 'required|max:20|unique:users',
         'password' => 'required|confirmed|min:5',
         'name'     => 'required|max:35',
         'email'     => 'required|email|max:60|unique:users',
         'telephone1'   => 'required|max:10',
         'telephone2'   => 'sometimes|max:10',
         'address'  => 'required|max:40',
      ];
   }
}

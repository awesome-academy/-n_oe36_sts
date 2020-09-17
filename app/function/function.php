<?php
function uploadImage($image)
{
    $image_name = date('dmy_H_s_i');
    $ext = strtolower($image->getClientOriginalExtension());
    $image_full_name = $image_name . '.' . $ext;
    $upload_patch = 'public/media/';
    $image_url = $upload_patch . $image_full_name;
    $success = $image->move($upload_patch, $image_full_name);
    return $image_url;
}
function getDataUserFromRequest($request,&$data)
{
    $data['username'] = $request->username;
    $data['phone'] = $request->phone;
    $data['gender'] = $request->gender;
    $data['email'] = $request->email;
    $data['address'] = $request->address;
    $data['university'] = $request->university;
    $data['birthday'] = $request->birthday;
    $data['password'] = Hash::make($request->password);
}
?>

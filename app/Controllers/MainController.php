<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\MOdels\MainModel;
class MainController extends BaseController
{
 public function delete($id)
{
    $main = new MainModel();
    $main->delete($id);
    return redirect()->to('/test');
}

public function updates($id){
    $data = [
    'StudName' => $this ->request->getPost('StudentName'),
    'StudGender' => $this ->request->getPost('StudGender'),
    'StudCourse' => $this ->request->getPost('StudCourse'),
    'StudSection' => $this ->request->getPost('StudSection'),
    'StudYear' => $this ->request->getPost('StudYear'),];

    $main = new MainModel();
    $main->set($data)->where('id', $id)->update();
return redirect()-> to('/test');
}
public function update($id)
{
    $main = new MainModel();
    $data = [
        'd' => $main->where('id', $id)->first(),

        'main' => $main -> findAll(),
        'tt' => 'update'
       y'd'=> $main->find($ID),
       'main' => $this->$main->findAll(),

    ];
    return view('main', $data);
}

    public function save()
    {
        $main = new MainModel();

        $data = [
            'StudName' => $this->request-> getPost('StudName'),
            'StudGender' => $this->request-> getPost('StudGender'),
            'StudCourse' => $this->request-> getPost('StudCourse'),
            'StudSection' => $this->request-> getPost('StudSection'),
            'StudYear' => $this->request-> getPost('StudYear'),
        ];

        if(isset($ID)){
            $main->set($data)->where('id', $ID)->update();
        }
        else
        {
            $main->save($data);
        }
        return redirect()-> to ('/test');

    }
    public function test()
{
    $main = new MainModel();
    $data['main']= $main -> findAll();
     return view ('main', $data);
}
    public function index()
    {
        //
    }
}

<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MusicModel;
use App\Models\PlaylistModel;

class MainController extends BaseController
{
    private $music;
    private $playlist;
    public function __construct(){
        $this->music= new MusicModel;
        $this->playlist= new PlaylistModel();
    }
    public function index()
    {
        if ($this->request->getGet('search')){
            $search= $this->request->getGet('search');
            $data=['music'=>$this->music->like('music',$search)->findAll(),
            'playlists'=>$this->playlist->findAll()
        ];
        }else{
        $data=['music'=>$this->music->findAll(),
        'playlists'=>$this->playlist->findAll()
         ];
        }
        return view('musicView',$data);
    }

    public function addMusic(){
        $file= $this->request->getFile('music');
        if($file->isValid() && ! $file->hasMoved()){
            $name=$file->getName();
            $file->move('public/',$name);
        }
        $data=[
            'music'=>$name
        ];
        $this->music->save($data);
        return redirect()->to('/');
    }
    public function addPlaylist(){
        $data=[
            'playlistName'=>$this->request->getVar('playlistName'),
        ];
        $this->playlist->save($data);
        return redirect()->to('/');

    }

    public function getPlaylist(){
        $data['playlists']=$this->playlist->findAll();
        return view('modals',$data);
    }
    public function edit(){
        $id= $this->request->getVar('musicID');
        $data=['playlist'=>$this->request->getVar('playlist')];
        $this->music->set($data)->where('musicID', $id)->update();
        return redirect()->to('/');
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
use App\Models\Comment;
use Sentinel;
=======
use Sentinel;
use App\Models\Comment;
>>>>>>> 05c82859e20c4184de9d50b4ad0cb93423e4a928
use Exception;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
<<<<<<< HEAD
        $result=$this->validate($request,[
						'comment'=> 'required'
					]);
		$user_id=Sentinel::getUser()->id;

$data =array(
			'content'=>$request->get('comment'),
			'post_id'=>$request->get('post_id'),
			'user_id'=>$user_id,
			'status'=> 2
			);
			
			$comment=new Comment();
			try{
				$comment ->saveComment($data);
			}catch(Exception $e){
				session()->flash('error',$e->getMessage());
				return redirect()->back();
			}
			session()->flash('success','Uspješno ste dodali novi komentar');
			return redirect()->back();
=======
        $result = $this->validate($request,[
							'comment' => 'required'
						]);
						
		$user_id = Sentinel::getUser()->id;
		
		$data = array(
			'content' => $request->get('comment'),
			'post_id' => $request->get('post_id'),
			'user_id' => $user_id,
			'status'  => 2
		);
		
		$comment = new Comment();
		
		try{
			$comment->saveComment($data);
		} catch(Exception $e){
			session()->flash('error', $e->getMessage());
			return redirect()->back();
		}
		
		session()->flash('success', 'Uspješno ste dodali novi komentar!');
		return redirect()->back();
>>>>>>> 05c82859e20c4184de9d50b4ad0cb93423e4a928
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

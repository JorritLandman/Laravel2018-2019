<?php


namespace App\Http\Controllers;

use App\Form;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class FormController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $form= new Form();
        $form->name=$request->get('name');
        $form->email=$request->get('email');
        $form->number=$request->get('number');
        $form->minlength=$request->get('minlength');
        $form->maxlength=$request->get('maxlength');
        $form->minvalue=$request->get('minvalue');
        $form->maxvalue=$request->get('maxvalue');
        $form->url=$request->get('url');
        $form->filename=$request->get('filename');
        $form->save();
        return redirect('forms')->with('success', 'Data has been added');
    }
    public function create()
    {
		$view = view("forms.create");
		return $view;
    }
    public function index(){
        $view = view("forms.index");
        $view->forms = Form::all();
        return $view;
    }
}
<?php
 
class HomeController extends BaseController {

    public function __construct() {
        parent::__construct();
        $this->beforeFilter('csrf', array('on'=>'post'));
    }
 
    public function getIndex()
    {
        return View::make('pages.index2');
    }


    public function getAbout()
    {
        return View::make('pages.about');
    }


    public function getWorks() {
    
         return View::make('pages.works2');

    }

  
    public function getDownloads()
    {
        return View::make('pages.downloads');
    }

    public function getTestimonials()
    {
        return View::make('pages.testimonials');
    }


    public function getProducts()
    {
        return View::make('pages.products');
    }


    public function getProjects()
    {
        return View::make('pages.projects');
    }

    public function getProject44ref()
    {
        return View::make('projects.44ref');
    }

    public function getProjectkeffi()
    {
        return View::make('projects.keffi');
    }

    public function getProjectkoko()
    {
        return View::make('projects.koko');
    }

     public function getProjectubth()
    {
        return View::make('projects.ubth');
    }

     public function getProjectluth()
    {
        return View::make('projects.luth');
    }

     public function getProjectnnhc()
    {
        return View::make('projects.nnhc');
    }

    public function getProjectobijackson()
    {
        return View::make('projects.obi');
    }


    public function getProjectitem()
    {
        return View::make('pages.project-item');
    }


    public function getContacts()
    {
        return View::make('pages.contacts');
    }

    public function postContacts()
    {
         // 1) Get all user's input
        $input = Input::all();

        // 2) Define validation rules
        $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'message' => 'required'
        ];

        // 3) Apply the validator
        $validator = Validator::make(Input::all(), Message::$rules);
        if($validator->fails()) {
        // 4) Set the content to an array of validation error messages
        $content = [ 'errors' => $validator->messages()->all() ];
        } else {

            $mess = new Message;

            $mess->name =$input['name'];
            $mess->email =$input['email'];
            $mess->subject =$input['subject'];
            $mess->content =$input['content'];

            $mess->save();



        // 5) Send an HTML email or save the message in DB here
        $content = [ 
            'success'=>[
                'message' => 'Your message has been sent',
                ]
            ];

        }

        // 6) Form a JSON response and send it while having HTTP status 200
        return Response::json($content);
       }
       


 
    public function getLogin()
    {
        return Redirect::to('/');
    }
 
    public function getLogout()
    {
        Auth::logout();
 
        return Redirect::to('/');
    }

    
 
}
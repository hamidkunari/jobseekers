<?php

namespace App\Http\Controllers;
use App\Job;
use App\Company;
use Auth;
use App\Category;
use App\Post;
use Illuminate\Http\Request;

class JobController extends Controller
{
 
    

	public function index(){
       $jobs = Job::latest()->limit(20)->where('status',1)->get();
       $categories  = Category::with('jobs')->get();
           $posts = Post::get();
    	 $companies  = Company::get()->random(4);
        return view('welcome' ,compact('jobs','companies','categories','posts'));

    }

    public function show($id){
    	
    	$job = Job::findOrFail($id);
        $jobRecommendations = $this->jobRecommendations($job);
    	return view('job.show', compact('job','jobRecommendations'));
    }

    public function jobRecommendations($job){
        $data = [];
        
        $jobsBasedOnCategories = Job::latest()->where('category_id',$job->category_id)
                             ->whereDate('last_date','>',date('Y-m-d'))
                             ->where('id','!=',$job->id)
                             ->where('status',1)
                             ->limit(6)
                             ->get();
        array_push($data,$jobsBasedOnCategories);
                           
        $jobBasedOnCompany = Job::latest()
                                ->where('company_id',$job->company_id)
                                ->whereDate('last_date','>',date('Y-m-d'))
                                ->where('id','!=',$job->id)
                                ->where('status',1)
                                ->limit(6)
                                ->get();
            array_push($data,$jobBasedOnCompany);

        $jobBasedOnPosition= Job::where('position','LIKE','%'.$job->position.'%')                 ->where('id','!=',$job->id)
                                ->where('status',1)
                                ->limit(6);
            array_push($data,$jobBasedOnPosition);

       $collection  = collect($data);
       $unique = $collection->unique("id");
       $jobRecommendations =  $unique->values()->first();
       return $jobRecommendations;
    }

    public function  create(){
        return view('job.create');
    }

     public function myjob(){
        $jobs = Job::where('user_id',auth()->user()->id)->get();
        return view('job.myjob',compact('jobs'));
    }

     public function  store(Request $request){
        $this->validate($request,[

            'title'=>'required|min:10',
            'description'=>'required',
            'roles'=>'required',
            'address'=>'required',
            'position'=>'required',
            'last_date'=>'required',
             'gender'=>'required',
            'experience'=>'required',
            'salary'=>'required'
            
        ]);


        $user_id = auth()->user()->id;
        $company = Company::where('user_id',$user_id)->first();
        $company_id = $company->id;
        Job::create([
            'user_id' => $user_id,
            'company_id' => $company_id,
            'title'=>request('title'),
            'slug' =>str_slug(request('title')),
            'description'=>request('description'),
            'roles'=>request('roles'),
            'category_id' =>request('category'),
            'position'=>request('position'),
            'address'=>request('address'),
            'type'=>request('type'),
            'status'=>request('status'),
            'last_date'=>request('last_date'),
            'number_of_vacancy'=>request('number_of_vacancy'),
            'gender'=>request('gender'),
            'experience'=>request('experience'),
            'salary'=>request('salary')
            
         



        ]);
        return redirect()->back()->with('message','Job posted successfully!');
     }

     public function edit($id){
        $job = Job::findOrFail($id);
        return view('job.editt', compact('job'));
    }

     public function update(Request $request,$id){
        $job = Job::findOrFail($id);
        $job->update($request->all());
        return redirect()->back()->with('message','Job  Sucessfully Updated!');

    }

    //apply method

    public function apply(Request $request,$id){
      $jobId  = Job::find($id);
      $jobId->users()->attach(Auth::user()->id);
      return redirect()->back()->with('message','Application Submitted!');
    }
    
 //applicant method which are using that emploer will see the application

   public function applicant(){
        $applicants = Job::has('users')->where('user_id',auth()->user()->id)->get();
        return view('job.applicant',compact('applicants'));
    }

    //alljob method which are using to show all job

     public function allJobs(Request $request){
       
     //front search
        $search = $request->get('search');
        $address = $request->get('address');
        if($search && $address){
           $jobs = Job::where('position','LIKE','%'.$search.'%')
                    ->orWhere('title','LIKE','%'.$search.'%')
                    ->orWhere('type','LIKE','%'.$search.'%')
                    ->orWhere('address','LIKE','%'.$address.'%')
                    ->paginate(5);

            return view('job.alljobs',compact('jobs'));

        }




       $keyword = $request->get('position');
       $type = $request->get('type');
       $category = $request->get('category_id');
       $address = $request->get('address');
       if($keyword||$type||$category||$address){
        $jobs = Job::where('position','LIKE','%'.$keyword.'%')
                ->orWhere('type',$type)
                ->orWhere('category_id',$category)
                ->orWhere('address',$address)
                ->paginate(5);
                return view('job.alljobs',compact('jobs'));
       }else{

            $jobs = Job::latest()->paginate(5);
            return view('job.alljobs',compact('jobs'));
    }


}

}



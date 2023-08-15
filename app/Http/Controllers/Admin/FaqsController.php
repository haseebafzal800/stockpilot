<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\TagsRequest;
use App\Models\FaqHeadsModel;
use App\Models\TagsModel;
use DataTables;
use Illuminate\Support\Str;


class FaqsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = TagsModel::select('id','tag','status')->get();
            return Datatables::of($data)->addIndexColumn()
                
                ->addColumn('action', function($row){
                    $url = "/admin/tag/delete/".$row->id;
                    $editUrl = @url('/admin/tag/edit/'.$row->id);
                    $btn = '<a href="javascript:void(0)" onclick="DeleteMe(this, '."'".$url."'".')" class="btn btn-danger btn-xs btn-delete"><i class="fa fa-trash"></i></a>';
                    $btn .= ' <a href="javascript:void(0)" onclick="editMe('."'".$editUrl."'".')" action="'.@url('/admin/tag/edit/'.$row->id).'" class="btn btn-primary btn-edit-tag btn-xs"><i class="fa fa-edit"></i></a>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
            }
        $data['pageTitle'] = 'Tags';
        $data['faqsListActive'] = 'active';
        $data['faqsOpening'] = 'menu-is-opening';  
        $data['faqsOpend'] = 'menu-open';
        return view('admin.faqs.index', $data);
    }
    public function store(TagsRequest $request)
    {
        if($request->id > 0){
            $post = TagsModel::find($request->id);
            if($post->update($request->all())){
                return response()->json([
                    'status' => 'ok',
                    'msg' => 'Data Saved'
                ]);
            }else{
                return response()->json([
                    'status' => 'notok',
                    'msg' => 'Something went wrong, please try again'
                ]);
            }
        }else{

            if(TagsModel::create($request->all())){
                return response()->json([
                    'status' => 'ok',
                    'msg' => 'Data Saved'
                ]);
            }else{
                return response()->json([
                    'status' => 'notok',
                    'msg' => 'Something went wrong, please try again'
                ]);
            }
        }

    }
    public function edit($id)
    {
        $data = TagsModel::find($id);
        
        return response()->json($data);
    }

    
    public function update(TagsRequest $request)
    {
        $post = TagsModel::find($request->id);
        $request['slug'] = Str::slug($request->title);
        $request['user_id'] = auth()->user()->id;
        // dd($request->all());
        $post->update($request->all());
        if($post){
            if($request->hasFile('image') && $request->file('image')->isValid()){
                $post->clearMediaCollection('images');
                $post->addMediaFromRequest('image')->toMediaCollection('images');
            }
            session()->flash('msg', 'Successfully saved the data!');
            session()->flash('alert-class', 'alert-success');
            
            return redirect()->route('blogs');
        }else{
            session()->flash('msg', 'Successfully saved the data!');
            session()->flash('alert-class', 'alert-danger');
            return back();
        }
    }

    
    public function destroy($id)
    {
        // dd('ddddd'); 
        if(TagsModel::find($id)->delete()){
            return 'ok';
        }else{
            return 'notok';
        }
    }

    //FAQs Heads


    public function heads(Request $request)
    {
        if ($request->ajax()) {
            $data = FaqHeadsModel::select('id','title','status')->get();
            return Datatables::of($data)->addIndexColumn()
                
                ->addColumn('action', function($row){
                    $url = "/admin/tag/delete/".$row->id;
                    $editUrl = @url('/admin/tag/edit/'.$row->id);
                    $btn = '<a href="javascript:void(0)" onclick="DeleteMe(this, '."'".$url."'".')" class="btn btn-danger btn-xs btn-delete"><i class="fa fa-trash"></i></a>';
                    $btn .= ' <a href="javascript:void(0)" onclick="editMe('."'".$editUrl."'".')" action="'.@url('/admin/tag/edit/'.$row->id).'" class="btn btn-primary btn-edit-tag btn-xs"><i class="fa fa-edit"></i></a>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
            }
        $data['pageTitle'] = 'FAQ Heads';
        $data['faqHeadListActive'] = 'active';
        $data['faqsOpening'] = 'menu-is-opening';  
        $data['faqsOpend'] = 'menu-open';
        return view('admin.faq-heads.index', $data);
    }
}


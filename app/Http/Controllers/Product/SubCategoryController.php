<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\MainCategory;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $collection = SubCategory::latest()->paginate(10);
        return view('admin.product.sub_category.index',compact('collection'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $maincategory = MainCategory::latest()->get();
        $category = Category::where('main_category_id',MainCategory::latest()->first()->id)->latest()->get();
        return view('admin.product.sub_category.create',compact('maincategory','category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'name' => [
                'required',
                Rule::unique('sub_categories')->where(function($query) use ($request) {
                    $query->where('main_category_id', $request->main_category_id)->where('category_id', $request->category_id);
                })
            ],
            'main_category_id' => ['required', 'exists:main_categories,id'],
            'category_id' => [
                'required',
                'exists:categories,id',
                Rule::in(MainCategory::find($request->main_category_id)->related_categories->pluck('id')->toArray())
            ],
            'icon' => ['mimes:jpg,jpeg,png'],
        ];

        $this->validate($request, $rules);

        $sub_category = SubCategory::create($request->except('icon'));

        if($request->hasFile('icon')){
            $sub_category->icon = Storage::put('uploads/category',$request->file('icon'));
            $sub_category->save();
        }

        $sub_category->slug = Str::slug($sub_category->name);
        $sub_category->creator = Auth::user()->id;
        $sub_category->save();

        return response()->json([
            'html' => "<option value='".$sub_category->id."'>".$sub_category->name."</option>",
            'value' => $sub_category->id,
        ]);
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
    public function edit(SubCategory $sub_category)
    {
        $main_category = MainCategory::where('id',$sub_category->main_category_id)->latest()->get();
        $category = Category::where('main_category_id',$sub_category->main_category_id)->latest()->get();
        return view('admin.product.sub_category.edit',compact('main_category','category','sub_category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,SubCategory $sub_category)
    {
        $this->validate($request,[
            'name' => [
                'required',
                Rule::unique('sub_categories')->ignore($sub_category->id)->where(function($query) use ($request) {
                    $query->where('main_category_id', $request->main_category_id)->where('category_id', $request->category_id);
                })
            ],
            'main_category_id' => [
                'required',
                'exists:main_categories,id',
            ],
            'category_id' => [
                'required',
                'exists:categories,id',
                Rule::in(MainCategory::find($request->main_category_id)->related_categories->pluck('id')->toArray())
            ],
        ]);

        $sub_category->update($request->except('icon'));

        if($request->hasFile('icon')){
            $sub_category->icon = Storage::put('uploads/category',$request->file('icon'));
            $sub_category->save();
        }

        $sub_category->slug = Str::slug($sub_category->name);
        $sub_category->creator = Auth::user()->id;
        $sub_category->save();

        return 'success';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubCategory $sub_category)
    {
        $sub_category->delete();
        return 'success';
    }
}

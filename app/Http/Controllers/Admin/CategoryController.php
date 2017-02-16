<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::where('parent_id', '=', 0)->orderBy('sort_order', 'asc')->get();
        $allCategories = Category::pluck('name', 'id')->all();

        return view('admin.categories.index', compact('categories','allCategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = new Category;
        $allCategories = Category::pluck('name', 'id')->all();

        return view('admin.categories.create', compact('category','allCategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
                'name' => 'required|max:80',
                'description' => 'required',
                'sort_order' => 'required'
            ],
            [
                'name.required' => 'Por favor ingrese el nombre de la categoría.',
                'name.max' => 'Ingrese un nombre no mayor a 80 Carácteres.',
                'description.required' => 'Por favor ingrese la descripción corta de la categoría.',
                'sort_order.required' => 'Por favor ingrese el orden de la categoría'
            ]);

        $input = $request->all();

        $input['parent_id'] = empty($input['parent_id']) ? 0 : $input['parent_id'];
        $input['slug'] = str_slug($input['name']);

        Category::create($input);

        return redirect('admin/categories')
                    ->with([
                        'message', 'La nueva Categoría fue creada exitosamente!',
                        'class' => 'success'
                        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    // {
    //     return view('admin.categories.show');
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        $allCategories = Category::pluck('name', 'id')->all();

        return view('admin.categories.edit', compact('category','allCategories'));
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
        $this->validate($request, [
                'name' => 'required|max:80',
                'description' => 'required',
                'sort_order' => 'required'
            ],
            [
                'name.required' => 'Por favor ingrese el nombre de la categoría.',
                'name.max' => 'Ingrese un nombre no mayor a 80 Carácteres.',
                'description.required' => 'Por favor ingrese la descripción corta de la categoría.',
                'sort_order.required' => 'Por favor ingrese el orden de la categoría'
            ]);

        $category = Category::findOrFail($id);

        $category->name = $request->name;
        $category->description = $request->description;
        $category->sort_order = $request->sort_order;
        $category->parent_id = empty($request->parent_id) ? 0 : $request->parent_id;
        $category->slug = str_slug($request->name);

        if ($category->save())
        {
            return redirect('admin/categories')
                        ->with([
                            'message' => 'La Categoría fue actualizada correctamente!',
                            'class' => 'success'
                            ]);
        }

        return redirect("admin/categories/{$id}/edit")
                    ->with([
                        'message' => 'No se pudo actualizar la categoría por favor corrija los errores e intente de nuevo',
                        'class' => 'warning'
                        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($id);

        if ($category->destroy($id)) {
            return response()->json('Categoría Eliminada');
        }

        return response()->json('Se presento un error, por favor intente de nuevo');
    }
}

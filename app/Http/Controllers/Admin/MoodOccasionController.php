<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BaseController;
use App\Http\Requests\MoodOccasionRequest;
use App\Http\Requests\StoreMoodOccasionProductRequest;
use App\Models\MoodOccasion;
use App\Models\MoodOccasionProduct;
use App\Traits\UpdatedTrait;
use Illuminate\Http\Request;

class MoodOccasionController extends BaseController
{
    protected $model, $module;
    use UpdatedTrait;
    public function __construct(MoodOccasion $model)
    {
        parent::__construct($model, 'moodoccasion');
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = $this->model::query();
        $data = $query->orderBy('id')->get();
        return view('admin.' . $this->module . '.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(MoodOccasion $moodoccasion)
    {

        return view('admin.' . $this->module . '.create', ['row' => $moodoccasion]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MoodOccasionRequest $request)
    {
        $formInput = $request->validated();
        $moodOccasion = $this->model::create($formInput);
        return $this->redirectAfterSave($request->FormButton, $moodOccasion->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(MoodOccasion $moodoccasion)
    {
        return view('admin.' . $this->module . '.show', ['row' => $moodoccasion]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MoodOccasion $moodoccasion)
    {

        return view('admin.' . $this->module . '.edit', ['row' => $moodoccasion]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MoodOccasionRequest $request, MoodOccasion $moodoccasion)
    {
        $formInput = $request->validated();
        $moodoccasion->update($formInput);
        return $this->redirectAfterSave($request->FormButton, $moodoccasion->id);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request,  MoodOccasion $moodoccasion)
    {
        $moodoccasion->delete();
        $request->flash('success', 'Deleted successfully');
        return back();
    }


    /// Product Add 

    public function addProduct($id)
    {
        $MoodOccasion = MoodOccasion::with('products')->findOrFail($id);
        return view('admin.' . $this->module . '.add_product', ['row' => $MoodOccasion]);
    }

    public function storeProduct(StoreMoodOccasionProductRequest $request)
    {
        $validatedData = $request->validated();

        // Assuming MoodOccasionProduct is the pivot table model
        MoodOccasionProduct::create([
            'mood_occasion_id' => $validatedData['moodoccasion_id'],
            'product_id' => $validatedData['product_id'],
        ]);

        return redirect()->route('admin.' . $this->module . '.addproduct', $validatedData['moodoccasion_id'])
            ->with('success', 'Product added successfully.');
    }



    public function removeProduct($moodOccasionId, $productId)
    {
        $moodOccasion = MoodOccasion::find($moodOccasionId);

        if ($moodOccasion) {
            $moodOccasion->products()->detach($productId);
            return redirect()->route('admin.moodoccasion.addproduct', $moodOccasionId)->with('success', 'Product removed successfully.');
        }

        return redirect()->back()->with('error', 'MoodOccasion not found.');
    }
}

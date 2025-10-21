<?php

namespace App\Http\Controllers;

use App\Models\Admin\FragranceAccord;
use App\Models\Admin\FragranceFamily;
use App\Models\Admin\Ingredients;
use App\Models\Admin\Mood;
use App\Models\Admin\Occasion;
use App\Models\Admin\Product;
use App\Models\UserSystemProductRank;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

use App\Http\Controllers\SystemTrackingController;

class AIFragranceFinderController extends Controller
{
    protected $trackingController;

    public function __construct()
    {
        // Initialize SystemTrackingController
        $this->trackingController = new SystemTrackingController();
    }

    public function session_resate(Request $request, $session = null)
    {

        if ($session === 'low') {
            Artisan::call('down'); // Puts the app in maintenance mode
        }

        // Check if a specific session key is provided
        if ($session) {
            if ($request->session()->has($session)) {




                $request->session()->forget($session); // Forget the specific session
                return back();
            } else {
                return back();
            }
        } else {

            $request->session()->flush();
            return redirect()->route('AIFragranceFinder.form');
        }
    }


    public function AIFragranceFinder(Request $request)
    {
        // Trigger tracking explicitly
        $this->trackingController->trackAndSaveSystemData($request);
        return view('website.ai-fragrance-finder.index');
    }

    public function form()
    {
        return view('website.ai-fragrance-finder.form');
    }

    public function choose_fragrance()
    {
        return view('website.ai-fragrance-finder.choose_fragrance');
    }

    public function ingredients()
    {
        $ingredients = Ingredients::where('status', 1)->get();
        return view('website.ai-fragrance-finder.ingredients', compact('ingredients'));
    }
    public function storeIngredients(Request $request)
    {


        if (!$request->ingredient_ids) {
            return redirect()->route('fragranceAccords.show');
        }

        $request->validate([
            'ingredient_ids' => 'required|string', // Comma-separated IDs
        ]);
        // Process ingredient IDs and validate them
        $ingredientIds = explode(',', $request->ingredient_ids);
        $validIngredients = Ingredients::whereIn('id', $ingredientIds)->get();

        // if ($validIngredients->count() !== count($ingredientIds)) {
        //     return redirect()->back()->with('error', 'Invalid ingredient IDs provided.');
        // }
        // Store ingredient IDs in session and increment clicks
        session(['ingredient_ids' => $validIngredients->pluck('id')->toArray()]);
        $validIngredients->each->incrementClick();
        // Redirect to the next step
        if (!empty($ingredientIds) && $request->input('value') === 'skip') {
            return redirect()->route('products.filter');
        } else {
            return redirect()->route('fragranceAccords.show');
        }
    }
    public function showFragranceAccords()
    {
        $fragranceAccords = FragranceAccord::where('status', 1)->get();
        // Get Ingredients related to product and filter based on IDs
        $ingredient_ids = session('ingredient_ids', []);
        $ingredients = Ingredients::whereIn('id', $ingredient_ids)->get();
        return view('website.ai-fragrance-finder.fragranceAccords', compact('fragranceAccords', 'ingredients'));
    }


    public function storeFragranceAccords(Request $request)
    {

        if (!$request->fragrance_accord_ids) {
            return redirect()->route('fragranceFamilies.show');
        }
        // Store selected fragrance accords in session
        $request->validate(['fragrance_accord_ids' => 'required|string']);
        session(['fragrance_accord_id' => $request->fragrance_accord_ids]);

        // Increment click count for each fragrance accord
        $fragranceAccordIds = explode(',', $request->fragrance_accord_ids);
        FragranceAccord::whereIn('id', $fragranceAccordIds)->increment('click');

        // Session se values retrieve karna
        $ingredient_ids = session('ingredient_ids', []); // default to empty array
        $fragrance_accord_id = session('fragrance_accord_id');

        // Agar dono values hain tabhi 'skip' kaam karega, warna 'next' chalayega
        if (!empty($ingredient_ids) && !empty($fragrance_accord_id) && $request->input('value') === 'skip') {
            return redirect()->route('products.filter');
        } else {
            return redirect()->route('fragranceFamilies.show');
        }
    }


    public function showFragranceFamilies()
    {
        $fragranceFamilies = FragranceFamily::where('status', 1)->get();
        $ingredient_ids = session('ingredient_ids', []);
        $ingredients = Ingredients::whereIn('id', $ingredient_ids)->get();
        $fragrance_accord_id = session('fragrance_accord_id', []);
        $fragranceaccord = FragranceAccord::where('id', $fragrance_accord_id)->get();

        return view('website.ai-fragrance-finder.fragranceFamilies', compact('fragranceFamilies', 'ingredients', 'fragranceaccord'));
    }

    public function storeFragranceFamilies(Request $request)
    {
        // Store selected fragrance families in session
        $request->validate(['fragrance_family_id' => 'required|string']);
        // Split the ingredient IDs into an array
        $fragrancefamilyids = explode(',', $request->fragrance_family_id);
        session(['fragrancefamilyids' => $fragrancefamilyids]);
        FragranceFamily::whereIn('id', $fragrancefamilyids)->increment('click');

        // Redirect to the product filtering page
        return redirect()->route('products.filter');
    }


    public function choosemood(Request $request, $personalize = null)
    {
        // If 'personalize' is provided, set a session flag and retain session data
        if ($personalize) {
            session(['personalize_further' => true]);
        } else {
            session()->forget(['personalize_further']); // Reset personalization
            session()->forget(['fragrancefamilyids', 'ingredient_ids', 'fragrance_accord_id']);
        }

        // Fetch moods to display in the view
        $moods = Mood::where('status', 1)->get();


        $ingredient_ids = session('ingredient_ids', []);
        $ingredients = Ingredients::whereIn('id', $ingredient_ids)->get();


        $fragrance_accord_id = session('fragrance_accord_id', []);
        $fragranceaccord = FragranceAccord::where('id', $fragrance_accord_id)->get();


        $fragrancefamilyids = session('fragrancefamilyids', []);
        $fragrancefamilys = FragranceFamily::whereIn('id', $fragrancefamilyids)->get();

        return view('website.ai-fragrance-finder.mood', compact('moods', 'ingredients', 'fragranceaccord', 'fragrancefamilys'));
    }
    public function storechoosemood(Request $request)
    {
        // Validate the selected ingredients
        $request->validate([
            'mood_id' => 'required|string', // Comma-separated IDs
        ]);
        session(['mood_id' => $request->mood_id]);
        // Redirect to the next step

        Mood::where('id', $request->mood_id)->increment('click');
        return redirect()->route('chooseocassion.show');
    }


    public function showchooseocassion()
    {
        $oseocassions = Occasion::where('status', 1)->get();
        $ingredient_ids = session('ingredient_ids', []);
        $ingredients = Ingredients::whereIn('id', $ingredient_ids)->get();
        $fragrance_accord_id = session('fragrance_accord_id', []);
        $fragranceaccord = FragranceAccord::where('id', $fragrance_accord_id)->get();
        $fragrancefamilyids = session('fragrancefamilyids', []);
        $fragrancefamilys = FragranceFamily::whereIn('id', $fragrancefamilyids)->get();
        $mood_id = session('mood_id', []);
        $moods = Mood::where('id', $mood_id)->get();
        return view('website.ai-fragrance-finder.oseocassion', compact('oseocassions', 'ingredients', 'fragranceaccord', 'fragrancefamilys', 'moods'));
    }
    public function storechooseocassion(Request $request)
    {
        // Validate the selected ingredients
        $request->validate([
            'oseocassion_id' => 'required|string', // Comma-separated IDs
        ]);
        session(['oseocassion_id' => $request->oseocassion_id]);

        Occasion::where('id', $request->mood_id)->increment('click');

        // Redirect to the product filtering page
        return redirect()->route('products.filter');
    }
    public function filterProducts(Request $request)
    {
        // Retrieve session values for fragrance family, ingredient, and fragrance accord IDs
        $fragrancefamilyids = session('fragrancefamilyids', []); // default to empty array
        $ingredient_ids = session('ingredient_ids', []); // default to empty array
        $fragrance_accord_id = session('fragrance_accord_id');

        // Retrieve session values for Mood and oseocassion IDs
        $mood_id = session('mood_id');
        $oseocassion_id = Session('oseocassion_id');

        // Initialize URL variable
        $url = '';

        // Check conditions
        if (empty($fragrancefamilyids) || empty($ingredient_ids) || empty($fragrance_accord_id)) {
            $url = route('AIFragranceFinder.choose.fragrance'); // First URL if any fragrance-related session exists
        } elseif (empty($mood_id) || empty($oseocassion_id)) {
            $url = route('AIFragranceFinder.choosemood', ['personalize' => 'true']); // Second URL if any mood or occasion exists
        } else {
            $url = route('fragrancematchmaker'); // Third URL if none of the above conditions are met
        }

        // Check if 'personalize_further' is true
        $personalizeFurther = session('personalize_further', false);
        // Initialize scores
        $fragranceScores = collect();
        $ingredientScores = collect();
        $fragranceaccordScores = collect();
        $moodScores = collect();
        $oseocassionScores = collect();

        // Get scores for each category
        if (!empty($fragrancefamilyids)) {
            $fragranceScores = $this->getFragranceFamilyScores($fragrancefamilyids);
            // dump('Fragrance Scores', $fragranceScores);
        }
        if ($ingredient_ids) {
            $ingredientScores = $this->getIngredientScores($ingredient_ids);
            // dump('Ingredient Scores', $ingredientScores);
        }
        if ($fragrance_accord_id) {
            $fragranceaccordScores = $this->getFragranceAccordScores($fragrance_accord_id);
            // dump('Fragrance Accord Scores', $fragranceaccordScores);
        }
        if ($mood_id) {
            $moodScores = $this->getMoodScores($mood_id);
            // dump('Mood Scores', $moodScores);
        }
        if ($oseocassion_id) {
            $oseocassionScores = $this->getOseocassionScores($oseocassion_id);
            // dump('Occasion Scores', $oseocassionScores);
        }

        // Adjust scores if 'personalize_further' is true
        if ($personalizeFurther) {
            $combinedScores = $fragranceScores
                ->map(function ($score) {
                    $score['score'] *= 0.25; // Scale fragrance scores to 25% (1/3 of 75%)
                    return $score;
                })
                ->merge(
                    $ingredientScores->map(function ($score) {
                        $score['score'] *= 0.25; // Scale ingredient scores to 25% (1/3 of 75%)
                        return $score;
                    })
                )
                ->merge(
                    $fragranceaccordScores->map(function ($score) {
                        $score['score'] *= 0.25; // Scale accord scores to 25% (1/3 of 75%)
                        return $score;
                    })
                )
                ->merge(
                    $moodScores->map(function ($score) {
                        $score['score'] *= 0.125; // Scale mood scores to 12.5% (1/2 of 25%)
                        return $score;
                    })
                )
                ->merge(
                    $oseocassionScores->map(function ($score) {
                        $score['score'] *= 0.125; // Scale occasion scores to 12.5% (1/2 of 25%)
                        return $score;
                    })
                );
            // dd('Combined Scores (Personalized)', $combinedScores);
        } else {
            $combinedScores = $fragranceScores
                ->merge($ingredientScores)
                ->merge($fragranceaccordScores)
                ->merge($moodScores)
                ->merge($oseocassionScores);
            // dump('Combined Scores (Non-Personalized)', $combinedScores);
        }


        // Group by product ID and calculate final scores
        $finalScores = $combinedScores
            ->groupBy('id') // Group by product ID
            ->map(function ($group) {
                return [
                    'id' => $group->first()['id'],
                    'name' => $group->first()['name'],
                    'price' => $group->first()['price'],
                    'count' => $group->sum('count'),
                    'score' => $group->sum('score'),
                ];
            })
            ->sort(function ($a, $b) {
                // First, sort by score in descending order
                if ($b['score'] === $a['score']) {
                    // If scores are the same, sort by count in descending order
                    return $b['price'] <=> $a['price'];
                }
                return $b['score'] <=> $a['score'];
            })
            ->values(); // Reset keys
        // Get top 3 products sorted by score
        $topProducts = $finalScores->take(3);


        // Extract IDs of top products in the same order as scores
        $topProductIds = $topProducts->pluck('id')->toArray();


        $topProductDetails = Product::whereIn('id', $topProductIds)
            ->with('layerWiths.layerOne', 'layerWiths.layerTwo')
            ->get()
            ->sortBy(function ($product) use ($topProductIds) {
                return array_search($product->id, $topProductIds);
            });


        $tracking = $this->trackingController->getSystemTrackingId($request);

        if ($tracking) {

            // Fetch names for fragrance families
            $fragranceFamilyNames = FragranceFamily::whereIn('id', $fragrancefamilyids)->pluck('name')->toArray();

            // Fetch names for ingredients
            $ingredientNames = Ingredients::whereIn('id', $ingredient_ids)->pluck('name')->toArray();

            // Fetch names for fragrance accords
            $fragranceAccordNames = FragranceAccord::whereIn('id', (array) $fragrance_accord_id)->pluck('name')->toArray();

            // Fetch names for moods
            $moodNames = Mood::where('id', (array) $mood_id)->pluck('mood')->toArray();

            // Fetch names for occasions
            $occasionNames = Occasion::where('id', (array) $oseocassion_id)->pluck('occasion')->toArray();

            // Save to user_system_product_ranks table
            UserSystemProductRank::create(
                [
                    'user_system_tracking_id' => $tracking,
                    'rankone_product_id' => $topProductIds[0] ?? null,
                    'ranktwo_product_id' => $topProductIds[1] ?? null,
                    'rankthree_product_id' => $topProductIds[2] ?? null,
                    'preferences' => json_encode([
                        'fragrance_families' => $fragranceFamilyNames,
                        'ingredients' => $ingredientNames,
                        'fragrance_accords' => $fragranceAccordNames,
                        'moods' => $moodNames,
                        'occasions' => $occasionNames,
                    ]),
                ]
            );
        }

        // Return filtered products to the view
        return view('website.ai-fragrance-finder.products', compact('topProductDetails', 'url'));
    }



    public function getFragranceFamilyScores($fragrancefamilyids)
    {
        if (!empty($fragrancefamilyids)) {
            // Get Fragrance Families with related products based on IDs
            $fragranceFamilies = FragranceFamily::with('products')->whereIn('id', $fragrancefamilyids)->get();

            // Score occurrences of each product
            return $fragranceFamilies->flatMap(function ($fragranceFamily) {
                return $fragranceFamily->products->map(function ($product) {
                    return ['id' => $product->id, 'name' => $product->name, 'price' => $product->price];
                });
            })->groupBy('id') // Group by product ID
                ->map(function ($group) {
                    return [
                        'id' => $group->first()['id'], // Product ID
                        'name' => $group->first()['name'], // Product Name
                        'price' => $group->first()['price'], // Product price
                        'count' => $group->count(), // Count of occurrences
                        'score' => $group->count() * 30, // Score based on occurrences
                    ];
                })->sortByDesc('score')->values(); // Reset keys
        }
        return collect(); // Return empty collection if no fragrance families
    }

    public function getIngredientScores($ingredient_ids)
    {
        if ($ingredient_ids) {
            // Get Ingredients related to product and filter based on IDs
            $ingredients = Ingredients::with('products')->whereIn('id', $ingredient_ids)->get();

            // Score occurrences of each product
            return $ingredients->flatMap(function ($ingredient) {
                return $ingredient->products->map(function ($product) {
                    return ['id' => $product->id, 'name' => $product->name, 'price' => $product->price];
                });
            })->groupBy('id') // Group by product ID
                ->map(function ($group) {
                    return [
                        'id' => $group->first()['id'], // Product ID
                        'name' => $group->first()['name'], // Product Name
                        'price' => $group->first()['price'], // Product price
                        'count' => $group->count(), // Count of occurrences
                        'score' => $group->count() * 5, // Score based on occurrences
                    ];
                })->sortByDesc('score')->values(); // Reset keys
        }
        return collect(); // Return empty collection if no ingredients
    }



    public function getFragranceAccordScores($fragrance_accord_id)
    {
        if ($fragrance_accord_id) {
            // Retrieve the FragranceAccord record with its related products
            $fragranceaccord = FragranceAccord::with('products')->find($fragrance_accord_id);

            if ($fragranceaccord) {
                // Score occurrences of each product
                return $fragranceaccord->products->map(function ($product) {
                    return ['id' => $product->id, 'name' => $product->name, 'price' => $product->price];
                })
                    ->groupBy('id') // Group by product ID
                    ->map(function ($group) {
                        return [
                            'id' => $group->first()['id'], // Product ID
                            'name' => $group->first()['name'], // Product Name
                            'price' => $group->first()['price'], // Product price
                            'count' => $group->count(), // Count of occurrences
                            'score' => $group->count() * 20, // Score based on occurrences
                        ];
                    })
                    ->sortByDesc('score') // Sort by score in descending order
                    ->values(); // Reset keys
            }
        }
        return collect(); // Return empty collection if no fragrance accord
    }


    public function getMoodScores($mood_id)
    {
        if ($mood_id) {
            // Retrieve the FragranceAccord record with its related products
            $mood = Mood::with('products')->find($mood_id);

            if ($mood) {
                // Score occurrences of each product
                return $mood->products->map(function ($product) {
                    return ['id' => $product->id, 'name' => $product->name, 'price' => $product->price];
                })
                    ->groupBy('id') // Group by product ID
                    ->map(function ($group) {
                        return [
                            'id' => $group->first()['id'], // Product ID
                            'name' => $group->first()['name'], // Product Name
                            'price' => $group->first()['price'], // Product price
                            'count' => $group->count(), // Count of occurrences
                            'score' => $group->count() * 50, // Score based on occurrences
                        ];
                    })
                    ->sortByDesc('score') // Sort by score in descending order
                    ->values(); // Reset keys
            }
        }
        return collect(); // Return empty collection if no fragrance mood
    }


    public function getOseocassionScores($oseocassion_id)
    {
        if ($oseocassion_id) {
            // Retrieve the FragranceAccord record with its related products
            $oseocassion = Occasion::with('products')->find($oseocassion_id);
            if ($oseocassion) {
                // Score occurrences of each product
                return $oseocassion->products->map(function ($product) {
                    return ['id' => $product->id, 'name' => $product->name, 'price' => $product->price];
                })
                    ->groupBy('id') // Group by product ID
                    ->map(function ($group) {
                        return [
                            'id' => $group->first()['id'], // Product ID
                            'name' => $group->first()['name'], // Product Name
                            'price' => $group->first()['price'], // Product price

                            'count' => $group->count(), // Count of occurrences
                            'score' => $group->count() * 50, // Score based on occurrences
                        ];
                    })
                    ->sortByDesc('score') // Sort by score in descending order
                    ->values(); // Reset keys
            }
        }
        return collect(); // Return empty collection if no fragrance accord
    }
}

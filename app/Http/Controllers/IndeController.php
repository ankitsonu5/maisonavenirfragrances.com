<?php

namespace App\Http\Controllers;

use App\Models\Admin\Collection;
use App\Models\Admin\Mood;
use App\Models\Admin\Occasion;
use App\Models\Admin\Product;
use App\Models\Admin\Service;
use App\Models\Blog;
use App\Models\MoodOccasion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Stevebauman\Location\Facades\Location;

class IndeController extends Controller
{

    public function fragrance_details()
    {
        $collection = Product::with('collection')->whereIn('collection_id', [2, 3])->get();
        $collectionc = Product::with('collection')->inRandomOrder()->take(5)->get();
        $data = Product::where('id', 3)->first();
        return View('website.pages.fragrance_details', compact('collection', 'collectionc', 'data'));
    }


    public function home()
    {

        //     // Retrieve the location of the user's IP address
        //   return  $location = Locatin::get($request->ip());



        $product = Product::with('collection')->get();
        $producta = Product::with('collection')->where('collection_id', 1)->get();
        $productb = Product::with('collection')->whereIn('collection_id', [2, 3])->get();
        $productc = Product::with('collection')->where('collection_id', 4)->get();
        return view('website.pages.home', compact('product', 'producta', 'productb', 'productc'));
    }

    public function ourfragrance()
    {
        $data = Collection::where('status', 1)->get();
        return View('website.pages.ourfragrance', compact('data'));
    }


    public function fragrancedetail($slug)
    {
        $data = Product::where('slug', $slug)->first();
        $collection = Product::where('collection_id', $data->collection_id)->get();
        $collectionc = Product::with('collection')->inRandomOrder()->take(5)->get();
        return View('website.pages.fragrance_details', compact('data', 'collection', 'collectionc'));
    }


    public function demofragrancedetail()
    {
        $data = Product::where('slug', 'electra-elixir')->first();
        $collection = Product::where('collection_id', $data->collection_id)->get();
        $collectionc = Product::with('collection')->inRandomOrder()->take(5)->get();
        return View('website.pages.demo.fragrance_details', compact('data', 'collection', 'collectionc'));
    }


    public function aifragrancefinder(Request $request)
    {
        $moods = Mood::where('status', 1)->get();
        $occasions = Occasion::where('status', 1)->get();

        $moodId = $request->query('mood_id');
        $occasionId = $request->query('occasion_id');
        $data = collect();  // Default to an empty collection if no products are found

        if ($moodId && $occasionId) {
            $moodOccasion = MoodOccasion::where('mood_id', $moodId)
                ->where('occasion_id', $occasionId)
                ->first();

            if ($moodOccasion) {
                $data = $moodOccasion->products()->where('status', 1)->get();
            }
        }

        return view('website.pages.aifragrancefinder', compact('data', 'moods', 'occasions'));
    }




    public function fragrancematchmaker()
    {
        $collection = Product::with('collection')->where('status', 1)->take(5)->get();
        $collectionc = Product::with('collection')->inRandomOrder()->take(5)->get();
        return View('website.pages.fragrancematchmaker', compact('collection', 'collectionc'));
    }


    public function service($slug)
    {
        // Fetch the service by its slug along with service items and their categories
        $service = Service::with(['serviceitems.category'])->where('slug', $slug)->first();

        if (!$service) {
            abort(404); // or handle it in another appropriate way
        }

        // Categorize service items by their categories
        $categorizedItems = [];
        foreach ($service->serviceitems as $item) {
            $categoryName = $item->category ? $item->category->name : 'Uncategorized';
            $categorizedItems[$categoryName][] = $item;
        }

        // Pass the data to the view
        return view('website.pages.service', compact('service', 'categorizedItems'));
    }

    public function about()
    {
        return View('website.pages.abouttest');
    }

    public function privacypolicy()
    {
        return View('website.pages.privacypolicy');
    }

    public function cookiepolicy()
    {
        return View('website.pages.cookie-policy');
    }
    public function faq()
    {

        return View('website.pages.faqs');
    }

    public function ourfounder()
    {

        return View('website.pages.ourfounder');
    }


    public function blog()
    {
        $data = Blog::orderBy('order')->where('status', 1)->get();
        return View('website.pages.blog', compact('data'));
    }



    public function blogdetail($slug)
    {
        // Fetch the blog with the matching slug
        $blog = Blog::where('slug', $slug)->first();
        // Fetch all other blogs excluding the current one
        $data = Blog::where('slug', '!=', $slug)->get();

        // Pass both the current blog and the other blogs to the view
        return View('website.pages.blogdetail', compact('blog', 'data'));
    }


    public function contact()
    {
        $countries = [
            ['name' => 'Afghanistan', 'code' => 'AF'],
            ['name' => 'Albania', 'code' => 'AL'],
            ['name' => 'Algeria', 'code' => 'DZ'],
            ['name' => 'American Samoa', 'code' => 'AS'],
            ['name' => 'Andorra', 'code' => 'AD'],
            ['name' => 'Angola', 'code' => 'AO'],
            ['name' => 'Antigua and Barbuda', 'code' => 'AG'],
            ['name' => 'Argentina', 'code' => 'AR'],
            ['name' => 'Armenia', 'code' => 'AM'],
            ['name' => 'Australia', 'code' => 'AU'],
            ['name' => 'Austria', 'code' => 'AT'],
            ['name' => 'Azerbaijan', 'code' => 'AZ'],
            ['name' => 'Bahamas', 'code' => 'BS'],
            ['name' => 'Bahrain', 'code' => 'BH'],
            ['name' => 'Bangladesh', 'code' => 'BD'],
            ['name' => 'Barbados', 'code' => 'BB'],
            ['name' => 'Belarus', 'code' => 'BY'],
            ['name' => 'Belgium', 'code' => 'BE'],
            ['name' => 'Belize', 'code' => 'BZ'],
            ['name' => 'Benin', 'code' => 'BJ'],
            ['name' => 'Bhutan', 'code' => 'BT'],
            ['name' => 'Bolivia', 'code' => 'BO'],
            ['name' => 'Bosnia and Herzegovina', 'code' => 'BA'],
            ['name' => 'Botswana', 'code' => 'BW'],
            ['name' => 'Brazil', 'code' => 'BR'],
            ['name' => 'Brunei', 'code' => 'BN'],
            ['name' => 'Bulgaria', 'code' => 'BG'],
            ['name' => 'Burkina Faso', 'code' => 'BF'],
            ['name' => 'Burundi', 'code' => 'BI'],
            ['name' => 'Cambodia', 'code' => 'KH'],
            ['name' => 'Cameroon', 'code' => 'CM'],
            ['name' => 'Canada', 'code' => 'CA'],
            ['name' => 'Cape Verde', 'code' => 'CV'],
            ['name' => 'Central African Republic', 'code' => 'CF'],
            ['name' => 'Chad', 'code' => 'TD'],
            ['name' => 'Chile', 'code' => 'CL'],
            ['name' => 'China', 'code' => 'CN'],
            ['name' => 'Colombia', 'code' => 'CO'],
            ['name' => 'Comoros', 'code' => 'KM'],
            ['name' => 'Congo', 'code' => 'CG'],
            ['name' => 'Congo, Democratic Republic of the', 'code' => 'CD'],
            ['name' => 'Costa Rica', 'code' => 'CR'],
            ['name' => "Cote d'Ivoire", 'code' => 'CI'],
            ['name' => 'Croatia', 'code' => 'HR'],
            ['name' => 'Cuba', 'code' => 'CU'],
            ['name' => 'Cyprus', 'code' => 'CY'],
            ['name' => 'Czech Republic', 'code' => 'CZ'],
            ['name' => 'Denmark', 'code' => 'DK'],
            ['name' => 'Djibouti', 'code' => 'DJ'],
            ['name' => 'Dominica', 'code' => 'DM'],
            ['name' => 'Dominican Republic', 'code' => 'DO'],
            ['name' => 'Ecuador', 'code' => 'EC'],
            ['name' => 'Egypt', 'code' => 'EG'],
            ['name' => 'El Salvador', 'code' => 'SV'],
            ['name' => 'Equatorial Guinea', 'code' => 'GQ'],
            ['name' => 'Eritrea', 'code' => 'ER'],
            ['name' => 'Estonia', 'code' => 'EE'],
            ['name' => 'Eswatini', 'code' => 'SZ'],
            ['name' => 'Ethiopia', 'code' => 'ET'],
            ['name' => 'Fiji', 'code' => 'FJ'],
            ['name' => 'Finland', 'code' => 'FI'],
            ['name' => 'France', 'code' => 'FR'],
            ['name' => 'Gabon', 'code' => 'GA'],
            ['name' => 'Gambia', 'code' => 'GM'],
            ['name' => 'Georgia', 'code' => 'GE'],
            ['name' => 'Germany', 'code' => 'DE'],
            ['name' => 'Ghana', 'code' => 'GH'],
            ['name' => 'Greece', 'code' => 'GR'],
            ['name' => 'Grenada', 'code' => 'GD'],
            ['name' => 'Guatemala', 'code' => 'GT'],
            ['name' => 'Guinea', 'code' => 'GN'],
            ['name' => 'Guinea-Bissau', 'code' => 'GW'],
            ['name' => 'Guyana', 'code' => 'GY'],
            ['name' => 'Haiti', 'code' => 'HT'],
            ['name' => 'Honduras', 'code' => 'HN'],
            ['name' => 'Hungary', 'code' => 'HU'],
            ['name' => 'Iceland', 'code' => 'IS'],
            ['name' => 'India', 'code' => 'IN'],
            ['name' => 'Indonesia', 'code' => 'ID'],
            ['name' => 'Iran', 'code' => 'IR'],
            ['name' => 'Iraq', 'code' => 'IQ'],
            ['name' => 'Ireland', 'code' => 'IE'],
            ['name' => 'Israel', 'code' => 'IL'],
            ['name' => 'Italy', 'code' => 'IT'],
            ['name' => 'Jamaica', 'code' => 'JM'],
            ['name' => 'Japan', 'code' => 'JP'],
            ['name' => 'Jordan', 'code' => 'JO'],
            ['name' => 'Kazakhstan', 'code' => 'KZ'],
            ['name' => 'Kenya', 'code' => 'KE'],
            ['name' => 'Kiribati', 'code' => 'KI'],
            ['name' => 'Kuwait', 'code' => 'KW'],
            ['name' => 'Kyrgyzstan', 'code' => 'KG'],
            ['name' => 'Laos', 'code' => 'LA'],
            ['name' => 'Latvia', 'code' => 'LV'],
            ['name' => 'Lebanon', 'code' => 'LB'],
            ['name' => 'Lesotho', 'code' => 'LS'],
            ['name' => 'Liberia', 'code' => 'LR'],
            ['name' => 'Libya', 'code' => 'LY'],
            ['name' => 'Liechtenstein', 'code' => 'LI'],
            ['name' => 'Lithuania', 'code' => 'LT'],
            ['name' => 'Luxembourg', 'code' => 'LU'],
            ['name' => 'Madagascar', 'code' => 'MG'],
            ['name' => 'Malawi', 'code' => 'MW'],
            ['name' => 'Malaysia', 'code' => 'MY'],
            ['name' => 'Maldives', 'code' => 'MV'],
            ['name' => 'Mali', 'code' => 'ML'],
            ['name' => 'Malta', 'code' => 'MT'],
            ['name' => 'Marshall Islands', 'code' => 'MH'],
            ['name' => 'Mauritania', 'code' => 'MR'],
            ['name' => 'Mauritius', 'code' => 'MU'],
            ['name' => 'Mexico', 'code' => 'MX'],
            ['name' => 'Micronesia', 'code' => 'FM'],
            ['name' => 'Moldova', 'code' => 'MD'],
            ['name' => 'Monaco', 'code' => 'MC'],
            ['name' => 'Mongolia', 'code' => 'MN'],
            ['name' => 'Montenegro', 'code' => 'ME'],
            ['name' => 'Morocco', 'code' => 'MA'],
            ['name' => 'Mozambique', 'code' => 'MZ'],
            ['name' => 'Myanmar', 'code' => 'MM'],
            ['name' => 'Namibia', 'code' => 'NA'],
            ['name' => 'Nepal', 'code' => 'NP'],
            ['name' => 'Netherlands', 'code' => 'NL'],
            ['name' => 'New Zealand', 'code' => 'NZ'],
            ['name' => 'Nicaragua', 'code' => 'NI'],
            ['name' => 'Niger', 'code' => 'NE'],
            ['name' => 'Nigeria', 'code' => 'NG'],
            ['name' => 'North Korea', 'code' => 'KP'],
            ['name' => 'Norway', 'code' => 'NO'],
            ['name' => 'Oman', 'code' => 'OM'],
            ['name' => 'Pakistan', 'code' => 'PK'],
            ['name' => 'Palau', 'code' => 'PW'],
            ['name' => 'Panama', 'code' => 'PA'],
            ['name' => 'Papua New Guinea', 'code' => 'PG'],
            ['name' => 'Paraguay', 'code' => 'PY'],
            ['name' => 'Peru', 'code' => 'PE'],
            ['name' => 'Philippines', 'code' => 'PH'],
            ['name' => 'Poland', 'code' => 'PL'],
            ['name' => 'Portugal', 'code' => 'PT'],
            ['name' => 'Qatar', 'code' => 'QA'],
            ['name' => 'Romania', 'code' => 'RO'],
            ['name' => 'Russia', 'code' => 'RU'],
            ['name' => 'Rwanda', 'code' => 'RW'],
            ['name' => 'Saudi Arabia', 'code' => 'SA'],
            ['name' => 'Senegal', 'code' => 'SN'],
            ['name' => 'Serbia', 'code' => 'RS'],
            ['name' => 'Seychelles', 'code' => 'SC'],
            ['name' => 'Singapore', 'code' => 'SG'],
            ['name' => 'Slovakia', 'code' => 'SK'],
            ['name' => 'Slovenia', 'code' => 'SI'],
            ['name' => 'South Africa', 'code' => 'ZA'],
            ['name' => 'South Korea', 'code' => 'KR'],
            ['name' => 'Spain', 'code' => 'ES'],
            ['name' => 'Sri Lanka', 'code' => 'LK'],
            ['name' => 'Sudan', 'code' => 'SD'],
            ['name' => 'Suriname', 'code' => 'SR'],
            ['name' => 'Sweden', 'code' => 'SE'],
            ['name' => 'Switzerland', 'code' => 'CH'],
            ['name' => 'Syria', 'code' => 'SY'],
            ['name' => 'Taiwan', 'code' => 'TW'],
            ['name' => 'Tajikistan', 'code' => 'TJ'],
            ['name' => 'Tanzania', 'code' => 'TZ'],
            ['name' => 'Thailand', 'code' => 'TH'],
            ['name' => 'Togo', 'code' => 'TG'],
            ['name' => 'Tonga', 'code' => 'TO'],
            ['name' => 'Trinidad and Tobago', 'code' => 'TT'],
            ['name' => 'Tunisia', 'code' => 'TN'],
            ['name' => 'Turkey', 'code' => 'TR'],
            ['name' => 'Turkmenistan', 'code' => 'TM'],
            ['name' => 'Uganda', 'code' => 'UG'],
            ['name' => 'Ukraine', 'code' => 'UA'],
            ['name' => 'United Arab Emirates', 'code' => 'AE'],
            ['name' => 'United Kingdom', 'code' => 'GB'],
            ['name' => 'United States', 'code' => 'US'],
            ['name' => 'Uruguay', 'code' => 'UY'],
            ['name' => 'Uzbekistan', 'code' => 'UZ'],
            ['name' => 'Vanuatu', 'code' => 'VU'],
            ['name' => 'Vatican City', 'code' => 'VA'],
            ['name' => 'Venezuela', 'code' => 'VE'],
            ['name' => 'Vietnam', 'code' => 'VN'],
            ['name' => 'Yemen', 'code' => 'YE'],
            ['name' => 'Zambia', 'code' => 'ZM'],
            ['name' => 'Zimbabwe', 'code' => 'ZW']
        ];

        return view('website.pages.contact', compact('countries'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\theme;
use App\setting;
use App\news;
use App\image;
use App\category;
use App\product;
use App\video;

class fontendcontroller extends Controller
{
	function __construct()
	{
        $head_logo = theme::take(1)->where('note','logo')->orderBy('id','desc')->get();
        $head_banner = theme::take(1)->where('note','banner')->orderBy('id','desc')->get();
    	$head_setting = setting::where('id',1)->first();
        $head_category = category::orderBy('views','asc')->get();
        $news_hot = news::take(6)->where('hot',1)->orderBy('id','desc')->get();
        $banner1 = theme::take(3)->where('note',1)->get();
        $sidebar_news = news::take(6)->orderBy('id','desc')->get();
		$duantieubieu = product::take(6)->where('hot',1)->orderBy('id','desc')->get();

        view()->share( [
            'head_logo'=>$head_logo,
            'head_banner'=>$head_banner,
            'head_setting'=>$head_setting,
            'news_hot'=>$news_hot,
            'banner1'=>$banner1,
            'head_category'=>$head_category,
			'duantieubieu'=>$duantieubieu,
            'sidebar_news'=>$sidebar_news
        ]);
	}

    public function home()
    {
        $home_slide = theme::where('note','slide')->orderBy('id','desc')->get();
        $home_setting = theme::where('id',1)->first();
        
        $duan = product::take(6)->orderBy('id','desc')->get();
        $cat_news_hot = category::take(2)->where('hot',1)->get();
        $cat_timkiem = category::whereNotIn('sort_by',[3])->get();
        $banner2 = theme::take(3)->where('note',2)->get();
        $video = video::take(3)->orderBy('id','desc')->get();
    	
        return view('pages.home',[
            'home_slide'=>$home_slide,
            'home_setting'=>$home_setting,
            
            'duan'=>$duan,
            'cat_news_hot'=>$cat_news_hot,
            'banner2'=>$banner2,
            'cat_timkiem'=>$cat_timkiem,
            'video'=>$video
            ]);
    }

    public function sitemap()
    {
        $sitemap_category = category::all();
        $sitemap_product = product::all();
        $sitemap_news = news::all();
        return response()->view('pages.sitemap', [
            'sitemap_category' => $sitemap_category,
            'sitemap_product' => $sitemap_product,
            'sitemap_news' => $sitemap_news
            ])->header('Content-Type', 'text/xml');
    }


    public function about()
    {
        return view('pages.about');
    }
	
	public function contact()
    {
        return view('pages.contact');
    }

    public function category($curl)
    {
    	$category = category::where('slug',$curl)->first();
        $cat_id = $category["id"];
        
        if ($category['sort_by']==1) {
            if($category['parent'] == 0)
            {
                $product = product::join('tbl_category', 'tbl_category.id', '=', 'tbl_product.cat_id')
                    ->select('tbl_product.*')
                    ->Where(function ($query) use ($cat_id){
                        return $query->where('status','1')->Where('cat_id',$cat_id);
                    })
                    ->orWhere(function ($query) use ($cat_id){
                        return $query->where('status','1')->Where('parent',$cat_id);
                    })
                    ->orWhere('parent',$cat_id)
                    ->orderBy('id','desc')
                    ->paginate(21);
            }
            else
            {
                $product = product::join('tbl_category', 'tbl_category.id', '=', 'tbl_product.cat_id')
                    ->select('tbl_product.*')
                    ->where('cat_id',$cat_id)->where('status','1')->orderBy('id','desc')->paginate(21);
            }
            return view('pages.product',['category'=>$category,'product'=>$product]);
        }

        if ($category['sort_by']==2) {
            if($category['parent'] == 0)
            {
                $news = news::join('tbl_category', 'tbl_category.id', '=', 'tbl_news.cat_id')
                    ->select('tbl_news.*')
                    ->Where(function ($query) use ($cat_id){
                        return $query->where('status','1')->Where('cat_id',$cat_id);
                    })
                    ->orWhere(function ($query) use ($cat_id){
                        return $query->where('status','1')->Where('parent',$cat_id);
                    })
                    ->orWhere('parent',$cat_id)
                    ->orderBy('id','desc')
                    ->paginate(15);
            }
            else
            {
                $news = news::join('tbl_category', 'tbl_category.id', '=', 'tbl_news.cat_id')
                    ->select('tbl_news.*')
                    ->where('cat_id',$cat_id)->where('status','1')->orderBy('id','desc')->paginate(15);
            }
            return view('pages.news',['category'=>$category,'news'=>$news]);
        }

        if ($category['sort_by']==3) {
            return view('pages.singlepage',['category'=>$category]);
        }
    }

    public function singleproduct($curl,$purl,$id)
    {
        $singleproduct = product::findOrFail($id);
        $singleproduct->hits = $singleproduct->hits + 1;
        $singleproduct->save();
        $lienquan = product::where('cat_id',$singleproduct->cat_id)->whereNotin('id',[$id])->take(6)->get();
        return view('pages.singleproduct',['singleproduct'=>$singleproduct, 'lienquan'=>$lienquan]);
    }

    

    public function singlenews($nurl,$id)
    {
    	$singlenews = news::find($id);
        $singlenews->hits = $singlenews->hits + 1;
        $singlenews->save();
        $tinlienquan = news::where('cat_id',$singlenews->cat_id)->whereNotin('id',[$id])->take(10)->get();
        return view('pages.singlenews',['singlenews'=>$singlenews, 'tinlienquan'=>$tinlienquan]);
    }

    public function search(Request $Request)
    {
        $cat_id = $Request->cat_id;
        $key = $Request->key;
        $cat_id = category::where('id',$cat_id)->first();
        $sort_by = $cat_id['sort_by'];
        if($sort_by == 1)
        {
            $product = product::where('name','like',"%$key%")->take(20)->paginate(20);
            return view('pages.search',['product'=>$product,'key'=>$key]);
        }
        if($sort_by == 2)
        {
            $news = news::where('name','like',"%$key%")->take(20)->paginate(20);
            return view('pages.searchnews',['news'=>$news,'key'=>$key, 'cat_id'=>$cat_id]);
        }
    }
}



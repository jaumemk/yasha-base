<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yasha\Backend\Models\Page;

class PageController extends Controller
{
    /**
     * Show the application index
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('index');
    }

    public function backend($slug, $subs = null)
    {

        // Todo: should search all active translations, or better
        // take the language parametrer from the URL!

        $page = Page::where('slug->en', $slug)->orWhere('slug->es', $slug)->orWhere('slug->ca', $slug)->firstOrFail();

        if (!$page)
        {
            abort(404, 'Please go back to our <a href="'.url('').'">homepage</a>.');
        }

        $page_title = $page->title;
        $page_content = $page->content;
        //dd($page);
        //$this->data['page'] = $page->withFakes();

        $data = compact('page_title', 'page_content');

        return view('pages.'.$page->template, $data);
    }

    private function staticSimple($name)
    {
        $page_title = __("pages/$name.title");
        $page_content = __("pages/$name.content", config('site.former-company-info'));

        $data = compact('page_title', 'page_content');

        return view('pages.static-simple', $data);
    }

    public function legacy()
    {
        return $this->staticSimple('legacy');
    }

    public function privacy()
    {
        return $this->staticSimple('privacy');
    }

    public function cookies()
    {
        return $this->staticSimple('cookies');
    }

    /**
     * Show the application template
     * 
     * This controller is for theming pourposes
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function template()
    {
        return view('template');
    }
}

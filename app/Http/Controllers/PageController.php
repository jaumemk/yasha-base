<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

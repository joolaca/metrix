<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class IndexPageController extends Controller
{

    /** Admin oldalon az index oldalak szerkesztése
     * @param Request $request
     */
    public function edit(Request $request){

        if(!session()->has('index_edit_lang')){
            session(['index_edit_lang' => 'hu']);
        }


        $index_sections = $this->getIndexPageElements( session('index_edit_lang'));

        return view('admin/index_page/index_edit', compact('index_sections'));
    }

    /**Tömbösítve visszaadja az index oldalon lévő típusokat slide, balolbecsúszós ....
     * @param $lang
     */
    private function getIndexPageElements($lang = hu){
        $index_sections = [];

        /*$index_pages = IndexPage::where('lang' ,$lang)
            ->with('slide')
            ->get();
//        dd($index_pages[1]->slide->getImageThumbUrl('image', 'admin_form_'));
        foreach ($index_pages as $item) {
            switch ($item->type) {
                case "slider_full_with":
                    $index_sections['slider_full_with'][] = $item;
                    break;
            }
        }*/


        $index_sections['header'] = '';
        return $index_sections;
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public static function renderHeader(){
        return view('page/index/header', compact([]));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public static function renderAbout(){
        return view('page/index/about', compact([]));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public static function renderBigDescription(){
        return view('page/index/big_description', compact([]));
    }
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public static function renderPortfolio(){
        return view('page/index/portfolio', compact([]));
    }
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public static function renderTeam(){
        return view('page/index/team', compact([]));
    }
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public static function renderIndexHr(){
        return view('page/index/index_hr', compact([]));
    }
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public static function renderContact(){
        return view('page/index/contact', compact([]));
    }
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public static function renderFooter(){
        return view('page/index/footer', compact([]));
    }





    /** Frontend oldalon elkészíti az index oldalt
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function renderIndexPage(Request $request){

        $index_sections = $this->getIndexPageElements(SystemController::getLang());
        return view('page/index/content', compact('index_sections'));
    }
}

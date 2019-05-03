<?php

namespace App\Http\Controllers;


use App\Http\Requests\sendMailIndexPage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

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

        //  view ból van most megoldva views\page\index\content.blade.php
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

        $categorys=[
            'Egyéb',
            'Szilvásvárad',
        ];

        $images = [
            [
                "src" =>'/images/index/met05.jpg',
                "category" => 'Egyéb',
                "desc" => 'Hozzáértés',
            ],
            [
                "src" =>'/images/index/met06.jpg',
                "category" => 'Egyéb',
                "desc" => 'Alaposság'
            ],
            [
                "src" =>'/images/index/IMG_1705.JPG',
                "category" => 'Egyéb',
                "desc" => 'Elegancia'
            ],
            // szilvasvarad
            [
                "src" =>'/images/index/szilvasvarad/20180503_200355.jpg',
                "category" => 'Szilvásvárad',
                "desc" => ''
            ],
            [
                "src" =>'/images/index/szilvasvarad/20180503_204403.jpg',
                "category" => 'Szilvásvárad',
                "desc" => ''
            ],
            [
                "src" =>'/images/index/szilvasvarad/20180503_204610.jpg',
                "category" => 'Szilvásvárad',
                "desc" => ''
            ],
            [
                "src" =>'/images/index/szilvasvarad/20180503_204649.jpg',
                "category" => 'Szilvásvárad',
                "desc" => ''
            ],
            /*[
                "src" =>'/images/index/szilvasvarad/20180503_205813.jpg',
                "category" => 'Szilvásvárad',
                "desc" => ''
            ],*/
            [
                "src" =>'/images/index/szilvasvarad/20180503_205831.jpg',
                "category" => 'Szilvásvárad',
                "desc" => ''
            ],
            [
                "src" =>'/images/index/szilvasvarad/20180503_211228.jpg',
                "category" => 'Szilvásvárad',
                "desc" => ''
            ],

        ];


            return view('page/index/portfolio', compact('images','categorys'))->render();
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
        $email_title = 'Metrix.hu oldalról érdeklődés érkezett';
        $form_id = 'contact';
        $page_h2 = "Kapcsolat";
        $page_title = 'Kérdésével forduljon hozzánk bizalommal';

        return view('page/index/contact', compact(
            'email_title',
            'form_id',
            'page_h2',
            'page_title'
        ));
    }

    /**
    *
    */
    public static function renderJobAdvertisements(){
        return view('page/index/job_advertisements');
    }
    public static function renderReferences(){
        return view('page/index/references');
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

    /**
    * Send mail to Contact form views\page\index\contact.blade.php
    */
    public function sendContactEmail(Request $request){
        Log::info($request->toArray());

        $validator = $this->validatorSendMailIndexPage($request);
        if($validator !== true){
            return $validator;
        }

/*
        $mail = Mail::send('emails.contact', $request->toArray(), function($message)
        {
            $message->from('us@example.com', 'Laravel test message');

//            $message->to('foo@example.com')->cc('bar@example.com');
            $message->to('lacza007@gmail.com');

//            $message->attach($pathToFile);
        });*/

        flash()->overlay('Köszönjük emailjét! Hamarosan felkeressük!',' ');
        return redirect('/#'.$request->form_id)->withInput();

    }

    /**
    *
    */
    public function validatorSendMailIndexPage($request){
        $messages = [
            'required' => 'A :attribute mező kitöltése kötelező.',
            'name.required' => 'A név mező kitöltése kötelező!',
            'email.required' => 'A email mező kitöltése kötelező!',
            'content.required' => 'A üzenet mező kitöltése kötelező!',
            'g-recaptcha-response.required' => 'Kérem bizonyítsa hogy ön nem robot!',
        ];

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'content' => 'required',
            'g-recaptcha-response' => 'required|captcha'
            ]
            ,$messages);

        if ($validator->fails()) {
            return redirect('/#'.$request->form_id)
                ->withErrors($validator)
                ->withInput();
        }
        return true;
    }
}

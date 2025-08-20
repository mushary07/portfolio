<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public $works;

    public function __construct()
    {
        $this->works = [
            [
                'id' => 1,
                'name' => "Thookuchatii",
                'caption' => "Your all-in-one marketplace.",
                'description' => "Sit amet luctussd fav venenatis, lectus magna fringilla inis urna, porttitor rhoncus dolor purus
                                non enim praesent in elementum sahas facilisis leo, vel fringilla est ullamcorper eget nulla
                                facilisi etisam dignissim diam quis enim lobortis viverra orci sagittis eu volutpat odio
                                facilisis mauris sit.

                                Scelerisque fermentum duisi faucibus in ornare quam sisd sit amet luctussd fav venenatis, lectus
                                magna fringilla zac urna, porttitor rhoncus dolor purus non enim praesent cuz elementum sahas
                                facilisis leot.",
                'timeline_description' => "Sit amet luctussd fav venenatis, lectus magna fringilla inis urna, porttitor rhoncus dolor purus
                                non enim praesent in elementum sahas facilisis leo, vel fringilla est ullamcorper eget nulla
                                facilisi etisam dignissim diam quis enim lobortis viverra orci sagittis eu volutpat odio
                                facilisis mauris sit.

                                Scelerisque fermentum duisi faucibus in ornare quam sisd sit amet luctussd fav venenatis, lectus
                                magna fringilla zac urna, porttitor rhoncus dolor purus non enim praesent cuz elementum sahas
                                facilisis leot.",
                'about' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus
                            venenatis, lectus magna ve fringilla urna, porttitor rhoncus dolor purus nonds enim isi praesent
                            elementum facilisis leo.

                            Vel fringilla est ullamcorper eget nulla facilisi etiama ashfa dignissim diam quis enim lobortis
                            scelerisque fermentum dui faucibus in ornare quam viverra orci sagittis eu agv he volutpat odio
                            asas facilisis mauris sit.",
                'thumbnail' => "assets/images/projects/thookuchatti/thumbnail.jpeg",
                'banner-1' => "assets/images/projects/thookuchatti/banner-1.jpeg",
                'banner-2' => "assets/images/projects/thookuchatti/banner-2.jpeg",
                'banner-3' => "assets/images/projects/thookuchatti/banner-3.jpeg",
                'gallery-1' => "assets/images/projects/thookuchatti/gallery-1.jpeg",
                'gallery-2' => "assets/images/projects/thookuchatti/gallery-2.jpeg",
                'gallery-3' => "assets/images/projects/thookuchatti/gallery-3.jpeg",
                'gallery-4' => "assets/images/projects/thookuchatti/gallery-4.jpeg",
                'content' => [
                    [
                        "title" => "Year",
                        "value" => "2023",
                    ],
                    [
                        "title" => "Client",
                        "value" => "-",
                    ],
                    [
                        "title" => "Services",
                        "value" => "Web Application",
                    ],
                ],
            ],
            [
                'id' => 2,
                'name' => "Thookuchatii",
                'caption' => "Your all-in-one marketplace.",
                'description' => "Sit amet luctussd fav venenatis, lectus magna fringilla inis urna, porttitor rhoncus dolor purus
                                non enim praesent in elementum sahas facilisis leo, vel fringilla est ullamcorper eget nulla
                                facilisi etisam dignissim diam quis enim lobortis viverra orci sagittis eu volutpat odio
                                facilisis mauris sit.

                                Scelerisque fermentum duisi faucibus in ornare quam sisd sit amet luctussd fav venenatis, lectus
                                magna fringilla zac urna, porttitor rhoncus dolor purus non enim praesent cuz elementum sahas
                                facilisis leot.",
                'timeline_description' => "Sit amet luctussd fav venenatis, lectus magna fringilla inis urna, porttitor rhoncus dolor purus
                                non enim praesent in elementum sahas facilisis leo, vel fringilla est ullamcorper eget nulla
                                facilisi etisam dignissim diam quis enim lobortis viverra orci sagittis eu volutpat odio
                                facilisis mauris sit.

                                Scelerisque fermentum duisi faucibus in ornare quam sisd sit amet luctussd fav venenatis, lectus
                                magna fringilla zac urna, porttitor rhoncus dolor purus non enim praesent cuz elementum sahas
                                facilisis leot.",
                'about' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus
                            venenatis, lectus magna ve fringilla urna, porttitor rhoncus dolor purus nonds enim isi praesent
                            elementum facilisis leo.

                            Vel fringilla est ullamcorper eget nulla facilisi etiama ashfa dignissim diam quis enim lobortis
                            scelerisque fermentum dui faucibus in ornare quam viverra orci sagittis eu agv he volutpat odio
                            asas facilisis mauris sit.",
                'thumbnail' => "assets/images/projects/thookuchatti/thumbnail.jpeg",
                'banner-1' => "assets/images/projects/thookuchatti/banner-1.jpeg",
                'banner-2' => "assets/images/projects/thookuchatti/banner-2.jpeg",
                'banner-3' => "assets/images/projects/thookuchatti/banner-3.jpeg",
                'gallery-1' => "assets/images/projects/thookuchatti/gallery-1.jpeg",
                'gallery-2' => "assets/images/projects/thookuchatti/gallery-2.jpeg",
                'gallery-3' => "assets/images/projects/thookuchatti/gallery-3.jpeg",
                'gallery-4' => "assets/images/projects/thookuchatti/gallery-4.jpeg",
                'content' => [
                    [
                        "title" => "Year",
                        "value" => "2023",
                    ],
                    [
                        "title" => "Client",
                        "value" => "-",
                    ],
                    [
                        "title" => "Services",
                        "value" => "Web Application",
                    ],
                ],
            ],
        ];
    }

    /**
     * home
     *
     * @return void
     */
    public function home()
    {
        return view('home');
    }

    /**
     * about
     *
     * @return void
     */
    public function about()
    {
        return view('about');
    }

    /**
     * works
     *
     * @return void
     */
    public function works()
    {
        $works = $this->works;
        return view('works', compact('works'));
    }

    /**
     * work_detail
     *
     * @param  mixed $id
     * @return void
     */
    public function work_detail($id)
    {
        $work = $this->works[$id];
        return view('work-detail', compact('work'));
    }

    /**
     * contact
     *
     * @return void
     */
    public function contact()
    {
        return view('contact');
    }

    /**
     * credential
     *
     * @return void
     */
    public function credential()
    {
        return view('credential');
    }
}

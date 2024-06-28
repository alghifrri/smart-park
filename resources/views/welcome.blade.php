@extends('layouts.star')

@section('content')
    <!-- banner section start --> 
    <div class="banner_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div id="banner_slider" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="banner_taital_main">
                                    <h1 class="banner_taital">Smart Park <br><span style="color: #fe5b29;">System</span></h1>
                                    <p class="banner_text">Smart Park System adalah solusi inovatif untuk mempermudah manajemen parkir kendaraan di era digital. 
                                    Dengan menggunakan teknologi canggih, sistem ini membantu pengguna menemukan tempat parkir yang tersedia secara real-time, 
                                    mengurangi waktu pencarian, dan meningkatkan efisiensi parkir.</p>
                                    <div class="btn_main">
                                        <div class="contact_bt"><a href="#">Read More</a></div>
                                        <div class="contact_bt active"><a href="#contact">Contact Us</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="banner_taital_main">
                                    <h1 class="banner_taital">Smart Park <br><span style="color: #fe5b29;">System</span></h1>
                                    <p class="banner_text">Smart Park System adalah solusi inovatif untuk mempermudah manajemen parkir kendaraan di
                                         era digital. Dengan menggunakan teknologi canggih, sistem ini membantu pengguna menemukan tempat parkir yang 
                                         tersedia secara real-time, mengurangi waktu pencarian, dan meningkatkan efisiensi parkir.</p>
                                    <div class="btn_main">
                                        <div class="contact_bt"><a href="#">Read More</a></div>
                                        <div class="contact_bt active"><a href="#contact">Contact Us</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="banner_taital_main">
                                    <h1 class="banner_taital">Smart Park <br><span style="color: #fe5b29;">System</span></h1>
                                    <p class="banner_text">Smart Park System adalah solusi inovatif untuk mempermudah manajemen parkir
                                         kendaraan di era digital. Dengan menggunakan teknologi canggih, sistem ini membantu pengguna menemukan
                                          tempat parkir yang tersedia secara real-time, mengurangi waktu pencarian, dan meningkatkan efisiensi parkir.</p>
                                    <div class="btn_main">
                                        <div class="contact_bt"><a href="#">Read More</a></div>
                                        <div class="contact_bt active"><a href="#contact">Contact Us</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#banner_slider" role="button" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a class="carousel-control-next" href="#banner_slider" role="button" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="banner_img"><img src="{{ asset('images/banner-img.png') }}"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner section end -->
    
    <!-- About Section -->
    <div class="about_section layout_padding" id="about">
        <div class="container">
            <div class="about_section_2">
                <div class="row">
                    <div class="col-md-6">
                        <div class="image_iman"><img src="{{ asset('images/about-img.png') }}" class="about_img"></div>
                    </div>
                    <div class="col-md-6">
                        <div class="about_taital_box">
                            <h1 class="about_taital">About <span style="color: #fe5b29;">Us</span></h1>
                            <p class="about_text">Smart Park System Kami dilengkapi dengan fitur keamanan yang memastikan 
                                kendaraan Anda terjaga dengan baik selama parkir. Temukan kemudahan dan kenyamanan parkir
                                 dengan Smart Park System, solusi pintar untuk kebutuhan parkir modern Anda.</p>
                            <div class="readmore_btn"><a href="#">Read More</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About section end -->
    
    <!-- choose section start -->
    <div class="choose_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="choose_taital">WHY CHOOSE US</h1>
                </div>
            </div>
            <div class="choose_section_2">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="icon_1"><img src="{{ asset('images/icon-1.png') }}"></div>
                        <h4 class="safety_text">SAFETY & SECURITY</h4>
                        <p class="ipsum_text">variations of passages of Lorem Ipsum available, but the majority have </p>
                    </div>
                    <div class="col-sm-4">
                        <div class="icon_1"><img src="{{ asset('images/icon-2.png') }}"></div>
                        <h4 class="safety_text">Online Booking</h4>
                        <p class="ipsum_text">variations of passages of Lorem Ipsum available, but the majority have </p>
                    </div>
                    <div class="col-sm-4">
                        <div class="icon_1"><img src="{{ asset('images/icon-3.png') }}"></div>
                        <h4 class="safety_text">Best Drivers</h4>
                        <p class="ipsum_text">variations of passages of Lorem Ipsum available, but the majority have </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- choose section end -->
    
    <!-- contact section start -->

    
    <div class="contact_section layout_padding" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    
                    <h1 class="contact_taital">Data Parkir</h1>
                    <script type="text/javascript" src="{{('jquery/jquery.min.js')}}">

                    </script>

                    <script type="text/javascript">
                        $(document).ready( function () {
                            setInterval( function() {
                                $("#sensor").load("{{url('bacasensor')}}");
                            }, 1000);
                        });
                    </script>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="contact_section_2">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mail_section_1">
                            <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    
                                    <tr>
                                        <th>ID</th>
                                        <th>Slot Parkir</th>
                                        <th>Status</th>
                                        

                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($sensor as $data)
                                    <tr>
                                    <td>{{ $data->iddataparkir }}</td>
                                    <td>{{ $data->slot_parkir}}</td>
                                    <td>{{ $data->status}}</td>
                                    
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact section end -->
@endsection

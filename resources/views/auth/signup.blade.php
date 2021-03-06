<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="บทเรียนออนไลน์">
    <meta name="keywords" content="บทเรียนออนไลน์">
    <meta name="author" content="">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>สมัครสมาชิก</title>
    <!-- Bootstrap -->
    <link href="{{ asset('style/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Bitter:400,700' rel='stylesheet' type='text/css'>
    <link href="{{ asset('style/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('style/css/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('style/css/style.css') }}" rel="stylesheet">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{ asset('style/js/jquery.min.js') }}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('style/js/bootstrap.min.js') }}"></script>

    <script src="{{ asset('style/js/jquery.justifiedGallery.min.js') }}"></script>
    <script src="{{ asset('style/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('style/js/masonry.pkgd.min.js') }}"></script>
    <script src="{{ asset('style/js/script.min.js') }}"></script>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            <div class="sign-container">

                <ul id="myTabs" class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#signup" id="signin-tab" role="tab" data-toggle="tab" aria-controls="signin" aria-expanded="true">สมัครสมาชิก</a></li>
                    <li><a href="{{ url('/') }}" >กลับหน้าแรก</a></li>
                </ul><!-- #myTabs -->

                <div id="myTabContent" class="tab-content">

                    <div role="tabpanel" class="tab-pane fade active in" id="signup" aria-labelledby="signin-tab">
                        <div class="sign-content">
                            <div class="sign-description" style="background-image: url({{ asset('style/img/amalia-image-slider-02.jpg') }})">
                                <div class="description-text">
                                    <h3>สมัครสมาชิก</h3>

                                    <p>เป็นสมาชิกแล้วใช่ไหม?</p>
                                    <a href="{{ url('signin') }}"class="btn btn-block btn-square btn-lg btn-success">เข้าระบบ</a>
                                </div><!-- .description-text -->
                            </div><!-- .sign-description -->

                            <div class="sign-form">
                                <form role="form" class="pretty-form" action="{{ route('students.store') }}" method="post" >
                                    @csrf
                                    <div class="form-group">
                                        <label for="">อีเมลล์ <span class="required">*</span></label>
                                        <input type="email" class="form-control" name="username" id="username" placeholder="xxx@gmail.com" required="required" >
                                        <span class="fa fa-user"></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="">รหัส <span class="required">*</span></label>
                                        <input type="password" class="form-control" name="password" id="password" placeholder="ต้องใส่6ตัวขึ้นไป มีตัวพิมพ์เล็กใหญ่" required="required">
                                        <span class="fa fa-lock"></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="">ชื่อเต็ม <span class="required">*</span></label>
                                        <input type="text" class="form-control" name="fullname" id="fullname" placeholder="ชื่อเต็มของคุณ" required="required">

                                    </div>
                                    <div class="form-group">
                                        <label for="">ชื่อเล่น <span class="required">*</span></label>
                                        <input type="text" class="form-control" name="nickname" id="nickname" placeholder="" required="required" >

                                    </div>
                                    <div class="form-group">
                                        <label for="">เพศ <span class="required">*</span></label>
                                        <input type="text" class="form-control" name="sex" id="sex" placeholder="" required="required">

                                    </div>
                                    <div class="form-group">
                                        <label for="">ปีเกิด <span class="required">*</span></label>
                                        <input type="text" class="form-control" name="year" id="year" placeholder="" >

                                    </div>
                                    <div class="form-group">
                                        <label for="">การศึกษาสูงสุด <span class="required">*</span></label>
                                        <input type="text" class="form-control" name="edu" id="edu" placeholder="" >

                                    </div>
                                    <div class="form-group">
                                        <label for=""></label>
                                        <textarea class="form-control" rows="5" placeholder="ที่อยู่: " name="address" id="address" required="required" ></textarea>


                                    </div>
                                    <div class="form-group">
                                        <label for=""></label>
                                        <textarea class="form-control" rows="5" placeholder="เหตุผลที่สนใจเรียนใน MOOC: " name="reason" id="reason"></textarea>

                                    </div>
                                    <button type="submit" class="btn btn-success btn-square btn-block btn-lg">สมัครสมาชิก</button>
                                </form><!-- .pretty-form -->
                            </div><!-- .sign-form -->

                        </div><!-- .sign-content -->
                    </div><!-- .tab-pane -->



                </div><!-- #myTabContent -->

            </div><!-- .sign-container -->
        </div><!-- .col-md-8 -->
    </div><!-- .row -->
</div><!-- .container -->

</body>
</html>
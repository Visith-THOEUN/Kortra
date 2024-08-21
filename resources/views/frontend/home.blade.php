
@extends('frontend.layouts.layout')

@section('content')

    @include('frontend.sections.slider')

    <div class="section" id="welcome">
        <div class="container">
            <div class="row">

                <div class="pricing-header pb-md-4 mx-auto text-center">
                    <h1 class="display-4 fw-normal custom-heading">សូមស្វាគមន៍</h1>
                    <p class="fs-5 text-muted">សូមស្វាគមន៍មកកាន់ <span class="text-info">កម្មវិធីសប្បាយកត់</span> ដែលជាកម្មវិធីកត់ចំណងដៃឈានមុខគេ នៅក្នុងប្រទេសកម្ពុជា។ កម្មវិធីសប្បាយកត់ ជួយសម្រួល និងគ្រប់គ្រងចំណងដៃរបស់លោកអ្នក ប្រកបដោយប្រសិទ្ធភាព និងមានសុវត្ថិភាពខ្ពស់។</p>
                </div>

            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>


    <!-- START THE FEATURETTES -->

    <div class="section bg-light" id="features">
        <div class="container">
            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">ការកត់ចំណងដៃ <span class="text-muted">ពិធីរៀបអាពាហ៍ពិពាហ៍</span></h2>
                    <p class="lead">គ្រប់គ្រងចំណងដៃរបស់អ្នក ប្រកបដោយភាពជឿជាក់។</p>
                </div>
                <div class="col-md-5">
                    {{-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg> --}}
                    <img src={{ asset('assets/img/img01.jpg') }} width="426" height="426" class="" alt="Image">
                </div>
            </div>
        </div><!-- /.container -->
    </div>

    <div class="section" id="">
        <div class="container">

            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading">ការកត់ចំណងដៃ <span class="text-muted">កម្មវិធីជួបជុំផ្សេងៗ</span></h2>
                    <p class="lead">កត់ចំណងដៃ សម្រាប់កម្មវិធីជួបជុំផ្សេងៗ​ជាច្រើនទៀត។ល។</p>
                </div>
                <div class="col-md-5 order-md-1">
                    {{-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg> --}}
                    <img src={{ asset('assets/img/img02.jpg') }} width="426" height="426" class="" alt="Image">
                </div>
            </div>
        </div><!-- /.container -->
    </div>
    <!-- /END THE FEATURETTES -->

    <div class="section bg-light" id="pricing">
        <div class="container">
            @include('frontend.sections.pricing')
        </div><!-- /.container -->
    </div>

    <!-- FOOTER -->
    <div style="padding-top: 35px" class="pb-3 bg-dark text-light">
        <footer class="container">
            <p class="float-end"><a href="#">Back to top</a></p>
            <p>&copy; រចនា និងអភិវឌ្ឍន៍កម្មវិធីដោយ &middot; <a href="#">គរុនិស្សិតព័ត៌មានវិទ្យា ក្រុម១</a></p>
        </footer>
    </div>

@endsection

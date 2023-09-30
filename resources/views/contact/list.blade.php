@extends('adminlayout.layout')
@section('content')
    <!-- main content start -->
    <div class="main-content">
        <div class="panel">
            <div class="panel-header">
                <h5>Contact Form Three</h5>
            </div>
            <div class="panel-body">
                <form action="{{ route('contact.store') }}" method="POST">
                    @csrf
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <div class="row g-3">
                                <div class="col-12">
                                    <input type="text" class="form-control form-control-sm" name="name" value="{{Auth::user()->name}}" placeholder="Your Name*">
                                </div>
                                <div class="col-12">
                                    <input type="email" class="form-control form-control-sm" name="email" value="{{Auth::user()->email}}" placeholder="Your Email*">
                                </div>
                                <div class="col-12">
                                    <input type="tel" class="form-control form-control-sm" name="phone" value="{{Auth::user()->phone}}" placeholder="Your Phone*">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <textarea class="form-control form-control-sm h-100" rows="8" name="messes" placeholder="Your Message*"></textarea>
                        </div>
                        <div class="col-12 text-end">
                            <button class="btn btn-sm btn-primary" type="submit">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>

    <!-- footer start -->
    <div class="footer">
        <p>Copyright©
            <script>
                document.write(new Date().getFullYear())
            </script> All Rights Reserved By <span class="text-primary">Digiboard</span>
        </p>
    </div>
    <!-- footer end -->
    </div>
    <!-- main content end -->
@endsection

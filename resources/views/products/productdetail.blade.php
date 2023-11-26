@extends('user.layouts.app')
@section('content')
    <div class="container-xxl py-5 bg-dark hero-header mb-5">
        <div class="container text-center my-5 pt-5 pb-4">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Food Details</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center text-uppercase">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Service</li>
                </ol>
            </nav>
        </div>
    </div>
    </div>
    <!-- Navbar & Hero End -->

    {{-- Food Detail Start --}}
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h5 class="section-title ff-secondary text-center text-primary fw-normal">About Our Food</h5>
                <h1 class="mb-5">Taste is Our Slack</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="rounded pt-3">
                        <div class="p-4">
                            <div class="d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid rounded" src="{{ asset('img/' . $product->image) }}"
                                    alt="" style="width: 100vh;">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    @if(session('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('error') }}
                    </div>
                    @endif
                    @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                    </div>
                    @endif
                    <div class="container-xxl py-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="row g-0">
                            <div class="col-md-12 bg-dark d-flex align-items-center">
                                <div class="p-5 wow fadeInUp" data-wow-delay="0.2s">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h1 class="d-flex justify-content-between border-bottom pb-2">
                                            <span class="text-white">{{ $product->name }}</span>
                                            <span class="text-primary">${{ $product->price }}</span>
                                        </h1>
                                        <small class="fst-italic">{{ $product->description }}</small>
                                        <hr/>
                                    </div>
                                    <h5 class="section-title ff-secondary text-start text-primary fw-normal">Feedback</h5>
                                    <h3 class="text-white mb-4">Mention your Feedback</h3>
                                    <form action="/add-rating" method="POST">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                                        <input type="hidden" name="status" value="1">
                                        <div class="row g-3">
                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <input type="text" class="form-control" name="title" id="name"
                                                        placeholder="Your Name" required>
                                                    <label for="name">Title </label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <div class="rate" style="">
                                                        <input type="radio" id="star5" name="rate" value="5" required />
                                                        <label for="star5" title="5 stars"></label>
                                                        <input type="radio" id="star4" name="rate" value="4" required />
                                                        <label for="star4" title="4 stars"></label>
                                                        <input type="radio" id="star3" name="rate" value="3" required />
                                                        <label for="star3" title="3 stars"></label>
                                                        <input type="radio" id="star2" name="rate" value="2" required />
                                                        <label for="star2" title="2 stars"></label>
                                                        <input type="radio" id="star1" name="rate" value="1" required />
                                                        <label for="star1" title="1 star"></label>
                                                    </div>
                                                    <style>
                                                        .rate {
                                                            float: left;
                                                            height: 46px;
                                                            padding: 0 10px;
                                                        }

                                                        .rate:not(:checked)>input {
                                                            position: absolute;
                                                            top: -9999px;
                                                        }

                                                        .rate:not(:checked)>label {
                                                            float: right;
                                                            width: 1em;
                                                            overflow: hidden;
                                                            white-space: nowrap;
                                                            cursor: pointer;
                                                            font-size: 30px;
                                                            color: #ccc;
                                                        }

                                                        .rate:not(:checked)>label:before {
                                                            content: '★ ';
                                                        }

                                                        .rate>input:checked~label {
                                                            color: #ffc700;
                                                        }

                                                        .rate:not(:checked)>label:hover,
                                                        .rate:not(:checked)>label:hover~label {
                                                            color: #deb217;
                                                        }

                                                        .rate>input:checked+label:hover,
                                                        .rate>input:checked+label:hover~label,
                                                        .rate>input:checked~label:hover,
                                                        .rate>input:checked~label:hover~label,
                                                        .rate>label:hover~input:checked~label {
                                                            color: #c59b08;
                                                        }
                                                    </style>
                                                    <script>
                                                        $(document).ready(function () {
                                                            $(".rate > input").on("click", function (e) {
                                                                e.preventDefault();
                                                            });
                                                        });
                                                    </script>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-floating">
                                                    <select class="form-select" id="category" name="category" required>
                                                        <option value="" disabled selected>Select Category</option>
                                                        <option value="bug">Bug Report</option>
                                                        <option value="feature">Feature Request</option>
                                                        <option value="improvement">Improvement</option>
                                                        <option value="environment">Environment</option>
                                                        <option value="taste">Taste</option>
                                                    </select>
                                                    <label for="select1">Category</label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-floating">
                                                    <textarea class="form-control" placeholder="Special Request" id="message" name="review" style="height: 100px" required></textarea>
                                                    <label for="message">Write your Review</label>
                                                </div>
                                            </div>


                                            <div class="col-12">
                                                <button class="btn btn-primary w-100 py-3" type="submit">Submit
                                                    Now</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Food Detail End --}}

    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            @auth
            {{-- Feedback list Start --}}
            <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="container">
                    <div class="text-center">
                        <h5 class="section-title ff-secondary text-center text-primary fw-normal">Feedbacks</h5>
                        <h1 class="mb-5">your Feedback about this Product!!!</h1>
                    </div>
                    <div class="owl-carousel testimonial-carousel">
                        @foreach ($feedback as $feed)
                            @if ($feed->product_id == $product_id)
                                <div class="testimonial-item bg-transparent border rounded p-4">
                                    <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                                    <p>Review: {{ $feed->review }}</p>
                                    <div class="d-flex align-items-center">
                                        <img class="img-fluid flex-shrink-0 rounded-circle" src="{{ asset('img/testimonial-2.jpg')}}"
                                            style="width: 50px; height: 50px;">
                                        <div class="ps-3">
                                            <h4 class="mb-1">{{ $feed->user_name }} </h4>
                                            <small><span class="" style="font-weight: 700;">Title :</span>{{ $feed->category }}</small>
                                            <small><span class="" style="font-weight: 700;">Category:</span>{{ $feed->title }}</small>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
            {{-- Feedback List End --}}
            @endauth

            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h5 class="section-title ff-secondary text-center text-primary fw-normal">Our Services</h5>
                <h1 class="mb-5">Explore Our Services</h1>
            </div>

            <div class="row g-4">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-user-tie text-primary mb-4"></i>
                            <h5>Master Chefs</h5>
                            <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-utensils text-primary mb-4"></i>
                            <h5>Quality Food</h5>
                            <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-cart-plus text-primary mb-4"></i>
                            <h5>Online Order</h5>
                            <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-headset text-primary mb-4"></i>
                            <h5>24/7 Service</h5>
                            <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-user-tie text-primary mb-4"></i>
                            <h5>Master Chefs</h5>
                            <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-utensils text-primary mb-4"></i>
                            <h5>Quality Food</h5>
                            <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-cart-plus text-primary mb-4"></i>
                            <h5>Online Order</h5>
                            <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-headset text-primary mb-4"></i>
                            <h5>24/7 Service</h5>
                            <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->
@endsection

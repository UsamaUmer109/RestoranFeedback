@extends('admin.layouts.app')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Rating & Feedback</h4>
                  <p class="card-description">
                    Feedback & rating<code>about our food products...!</code>
                  </p>
                    {{-- Display Error Message  --}}
                    @if(session('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('error') }}
                    </div>
                    @endif

                    {{-- Display Success Message --}}
                    @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                    </div>
                    @endif

                  <div class="table-responsive">
                    @php
                        $i = 1;
                    @endphp
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>
                                Sr. No. #
                          </th>
                          <th>
                                Product Name
                          </th>
                          <th>
                                User Email
                          </th>
                          <th>
                                Feedback/Review
                            </th>
                          <th>
                                Rating
                          </th>
                          <th>
                                Action
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($ratings as $rating)
                        <tr>
                          <td class="py-1">
                                {{ $i }}
                          </td>
                          <td>
                                {{ $rating['product']['name'] }}
                          </td>
                          <td>
                                {{ $rating['user']['email'] }}
                          </td>
                          <td>
                                {{ $rating['review'] }}
                          </td>
                          <td>
                                {{ $rating['rating'] }}
                          </td>
                          <td>
                                @if ($rating['status'] == 1)
                                    <a class="updateRatingStatus" id="rating-{{ $rating['id'] }}" rating_id="{{ $rating['id'] }}" href="javascript:void(0)"><i class="fas fa-toggle-on" aria-hidden="true" status="Active"></i></a>
                                @else
                                    <a class="updateRatingStatus" id="rating-{{ $rating['id'] }}" rating_id="{{ $rating['id'] }}" href="javascript:void(0)"><i class="fas fa-toggle-off" aria-hidden="true" status="Inactive"></i></a>
                                @endif
                          </td>
                        </tr>
                        @php
                            $i++
                        @endphp
                        @endforeach
                      </tbody>
                    </table>
                    <div class="d-flex justify-content-center">
                        {{ $ratings->links('vendor.pagination.bootstrap-4') }}
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </div>

@endsection


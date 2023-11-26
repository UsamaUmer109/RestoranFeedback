@extends('admin.layouts.app')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Categories</h4>
                  <p class="card-description">
                    List of Food Categories<code>that we are offering...!</code>
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
                                Category Name
                            </th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($categories as $category)
                        <tr>
                          <td class="py-1">
                                {{ $i }}
                          </td>
                          <td>
                            {{ $category->name }}
                          </td>
                        </tr>
                        @php
                            $i++
                        @endphp
                        @endforeach
                      </tbody>
                    </table>
                    <div class="d-flex justify-content-center">
                        {{ $categories->links('vendor.pagination.bootstrap-4') }}
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </div>

@endsection


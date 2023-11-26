@extends('admin.layouts.app')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Products</h4>
                  <p class="card-description">
                    List of Food Products<code>that we are offering...!</code>
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
                                Image
                          </th>
                          <th>
                               Product Name
                          </th>
                          <th>
                                Category Name
                            </th>
                          <th>
                                Description
                          </th>
                          <th>
                                Price
                          </th>
                            <th>
                                Discount
                            </th>
                          <th>
                                Action
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($products as $product)
                        <tr>
                          <td class="py-1">
                                {{ $i }}
                          </td>
                          <td>
                            <img src="{{ asset('img/' . $product->image) }}" alt="product"/>
                          </td>
                          <td>
                            {{ $product->name }}
                          </td>
                          <td>
                            @foreach ($categories as $category)
                                @if ($category->id == $product->category)
                                    {{ $category->name }}
                                @endif
                            @endforeach
                          </td>
                          <td>
                            {{ $product->description }}
                          </td>
                          <td>
                            {{ $product->price }}
                          </td>
                          <td>
                            {{ $product->discount }}
                          </td>
                          <td>
                            <a class="btn btn-block btn-danger font-weight-medium auth-form-btn" href="" data-toggle="modal" data-target="#deleteModal">Delete</a>
                            <div class="modal" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">Delete User</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                        Are you sure to delete that user account from your system...!
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                      <a class="btn btn-danger" href="{{ url('/admin/product/delete/' . $product->id) }}" >Delete</a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                          </td>
                        </tr>
                        @php
                            $i++
                        @endphp
                        @endforeach
                      </tbody>
                    </table>
                    <div class="d-flex justify-content-center">
                        {{ $products->links('vendor.pagination.bootstrap-4') }}
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </div>

@endsection

